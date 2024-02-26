<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function clientHome()
    {
        return view('client.clientDashboard');
    }

    public function clientArtisans()
    {
        return view('client.domaine');
    }

    public function clientReclamation(){
        return view('client.reclamations');
    }

    public function clientProfile(){
        return view('client.profile');
    }

   

}
