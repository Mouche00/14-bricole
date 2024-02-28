<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Notifications\SendMail;

class InvoiceController extends Controller
{
    public function generate(Request $request)
    {
        $data = [
            'to' => 'Sam Example',
            'content' => 'lorem sdfghjklmpazertyui azertyui azertyui',
        ];

        if ($request->has('preview')) {
            $data['css'] = '/css/invoice.css';
            return view('invoice', $data);
        }

        $data['css'] = public_path('/css/invoice.css');
        $pdf = PDF::loadView('invoice', $data);

        // Save the PDF temporarily
        $pdfPath = storage_path('app/public/invoice.pdf');
        $pdf->save($pdfPath);

        // Get the authenticated user
        $user = Auth::user();

        // Send notification with PDF attachment if user is authenticated
        if ($user) {
            // Dispatch the SendMail notification
            $user->notify(new SendMail($pdfPath));
        }

        // Delete the temporary PDF file
        Storage::delete('public/invoice.pdf');

        return $pdf->download('invoice.pdf');
    }
}
