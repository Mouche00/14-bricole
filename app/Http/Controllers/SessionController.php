<?php

namespace App\Http\Controllers;

use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    public function create(){
        return view('login');
    }

    public function store(Request $request){
        $attributes=$request->validate([
            'email'=> 'required',
            'password'=> 'required',
            ]);
            
        // if(auth()->attempt($attributes)){
        //     if(auth()->user()->artisan()->first()->exists()) {

        //     } elseif(auth()->user()->client()->first()->exists()) {
                
        //     } elseif(auth()->user()->admin()->first()->exists()) {

        //     } else {

        //         return back();
        //     }
        // }

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
                $redirect = 'client';
                break;
            case auth()->user()->hasRole('admin'):
                $redirect = 'admin';
                break;
        }

        // if(auth()->user()->hasRole('artisan')) {

        //     return redirect()->route('artisan');
        // } elseif (auth()->user()->hasRole('client')) {

        //     return redirect()->route('client');
        // } elseif (auth()->user()->hasRole('admin')) {

        //     return redirect()->route('artisan');
        // }

        return redirect()->route($redirect);
    }



}