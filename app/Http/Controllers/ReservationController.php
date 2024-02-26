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

    
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'date' => 'required'
        ]);

        $reservation = auth()->user()->client()->reservations()->create($attributes);


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
        //
    }
}
