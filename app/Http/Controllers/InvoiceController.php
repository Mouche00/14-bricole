<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Mail\InvoiceEmail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

use Illuminate\Mail\PendingMail;
use App\Mail\Mailto;
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

        // Send email with PDF attachment if user is authenticated
        if ($user) {
            // Send email with the Mailto Mailable class
            Mail::to($user->email)->send(new Mailto($pdfPath));
        }

        // Delete the temporary PDF file
        Storage::delete('public/invoice.pdf');

        return $pdf->download('invoice.pdf');
    }
}




