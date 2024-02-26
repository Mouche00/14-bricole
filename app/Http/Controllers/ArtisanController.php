<?php

namespace App\Http\Controllers;

use App\Models\Artisan;
use App\Models\ArtisanDomain;
use App\Models\Competance;
use App\Models\Domain;
use Illuminate\Http\Request;

class ArtisanController extends Controller
{

    public function dashboard(){
        return view('artisan.artisanDashboard');
    }

    public function services(){
        return view('artisan.artisanServices');
    }

    // public function addServices(Request $request){

    //     $request->validate([
    //         'name' => 

    //     ]);


    // }
   
}