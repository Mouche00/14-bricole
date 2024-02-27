<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Service;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function clientHome()
    {
        $services = Service::all();
        return view('client.clientDashboard', compact('services'));
    }

    public function clientReservation()
    {
        return view('client.reservations');
    }

    public function clientReclamation(){
        return view('client.reclamations');
    }

    public function clientProfile(){
        return view('client.profile');
    }
}
