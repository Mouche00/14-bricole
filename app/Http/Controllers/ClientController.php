<?php

namespace App\Http\Controllers;

use App\Models\Artisan;
use App\Models\Client;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


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

    public function clientReclamation($id)
    {

        $artisan = Artisan::find($id)->user()->first();
        return view('client.reclamations', compact('artisan'));
    }

    public function clientProfile()
    {
        $user = Auth::user();

        return view('client.profile', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();
    
        $attributes = $request->validate([
            'name' => 'required|min:4',
            'lname' => 'required|min:4',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone' => 'required',
            'address' => 'required',
        ]);
    
        if ($request->hasFile('picture')) {
            $fileName = time() . '.' . $request->picture->extension();
            $request->picture->storeAs('public/images', $fileName);
            if ($user->picture) {
                Storage::delete('public/images/' . $user->picture);
            }
            $attributes = array_merge($attributes, ['picture' => $fileName]);
        }
    
        $user->update($attributes);
    
        return redirect()->route('profile');
    
    }
}
