<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    //
    public function create(){
        return view('auth.login');
    }

    public function store(Request $request){
        $attributes=$request->validate([
            'email'=> 'required',
            'password'=> 'required',
            ]);


        /* REDIRECTION WHITHOUT SAPTIE

        if(auth()->attempt($attributes)){
            if(auth()->user()->artisan()->first()->exists()) {

            } elseif(auth()->user()->client()->first()->exists()) {
                
            } elseif(auth()->user()->admin()->first()->exists()) {

            } else {

                return back();
            }
        }

        */

        if(! auth()->attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Your provided credentials could not be verified.'
            ]);
        }

        session()->regenerate();

        $redirect = 'login';
        switch (true) {
            case auth()->user()->hasRole('artisan'):
                $redirect = 'artisan';
                break;
            case auth()->user()->hasRole('client'):
                $redirect = 'profile';
                break;
            case auth()->user()->hasRole('admin'):
                $redirect = 'admin';
                break;
        }

        /* OLD REDIRECTION WITH SAPTIE (MORE CONTROLE OVER ROUTES)
        
        if(auth()->user()->hasRole('artisan')) {

            return redirect()->route('artisan');
        } elseif (auth()->user()->hasRole('client')) {

            return redirect()->route('client');
        } elseif (auth()->user()->hasRole('admin')) {

            return redirect()->route('artisan');
        }

        */

        return redirect()->route($redirect);
    }

    public function destroy(Request $request) {

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }



}