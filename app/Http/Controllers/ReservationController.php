<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    
    public function index()
    {
        //
    }


    public function create()
    {
        //
    }

    
    public function store(Request $request, $id)
    {
        $attributes = $request->validate([
            'date' => 'required',
        ]);

        $attributes = array_merge($attributes, [
            'service_id' => $id
        ]);

        auth()->user()->client()->first()->reservations()->create($attributes);


    }


    public function show(Reservation $reservation)
    {
        //
    }


    public function edit(Reservation $reservation)
    {
        //
    }


    public function update(Request $request, Reservation $reservation)
    {
        //
    }


    public function destroy(Reservation $reservation)
    {
        $reservation->delete();

        return redirect()->route('client');
    }
}
