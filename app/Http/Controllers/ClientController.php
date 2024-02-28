<?php

namespace App\Http\Controllers;

use App\Models\Artisan;
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
        $reservations = auth()->user()->client()->first()->reservations()->with('service', 'service.artisan')->get();
        return view('client.reservations', compact('reservations'));
    }

    public function clientReclamation($id){

        $artisan = Artisan::find($id)->user()->first();
        return view('client.reclamations', compact('artisan'));
    }

    public function clientProfile(){
        return view('client.profile');
    }
}
