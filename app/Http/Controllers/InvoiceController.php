<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Notifications\SendMail;
use setasign\Fpdi\Tcpdf\Fpdi;

class InvoiceController extends Controller
{
    public function generate(Request $request, Reservation $reservation)
    {
        // dd((int)now()->timezone('Africa/Casablanca')->format('d') - (int)(new Carbon($reservation->date))->format('d'));
        // $days = (int)now()->timezone('Africa/Casablanca')->format('d') - (int)(new Carbon($reservation->date))->format('d');
        $hours = abs((int)now()->timezone('Africa/Casablanca')->format('H') - (int)(new Carbon($reservation->date))->format('H'));
        $hours++;
        $hours = $hours <= 4 ? $hours : 4;
        $reservation = $reservation->with('services')->first();
        $sum = 0;
        foreach($reservation->services as $item){
            // dd($reservation->service);
            $sum =+ $item->tarif * $hours;
        }

        // dd($hours);

        $data = [
            'name' => auth()->user()->name . ' ' . auth()->user()->lname,
            'address' => auth()->user()->address,
            'email' => auth()->user()->email,
            'reservation' => $reservation,
            'hours' => $hours,
            'sum' => $sum,
            'signature' => auth()->user()->client()->first()->signature

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

        $sig = new Fpdi('P', 'mm', 'A4');
        $pages = $sig->setSourceFile($pdfPath);
        // dd($pages);

        // $certificate = File::get(storage_path('app/tcpdf.crt'));
        $certificate = Storage::disk('local')->get('tcpdf.crt');;
        // dd($certificate);

        for ($i = 1; $i <= $pages; $i++)
        {
            $sig->AddPage();
            $page = $sig->importPage($i);
            $sig->useTemplate($page, 0, 0);


            // set document signature
            $sig->setSignature($certificate, $certificate, 'tcpdfdemo', '', 2);      

        }

        $sig->Output($pdfPath, 'F');

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
