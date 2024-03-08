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

        return redirect()->route($redirect);
    }

    public function destroy(Request $request) {

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return view('welcome');
    }



}