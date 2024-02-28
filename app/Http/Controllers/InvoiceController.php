<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class InvoiceController extends Controller

{
    public function generate(Request $request)
    {
        $data = [
            'to' => 'Sam Example',
            'content' => 'lorem sdfghjklmpazertyui azertyui azertyui',
            
        ];
            
        if($request->has('preview')){
            $data['css'] = '/css/invoice.css';
            return view('invoice',$data);

        }

        $data['css'] = public_path('/css/invoice.css');
        $pdf = Pdf::loadView('invoice', $data);

        // return $pdf->stream();

 
        return $pdf->download('invoice.pdf');
    }
}


