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
        $services = Service::with('artisan', 'artisan.domains', 'artisan.user')->get();
        // dd($services[0]->artisan->user->name);
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

    public function store(Request $request, $id) {
        dd($request, $id);
    }
}
