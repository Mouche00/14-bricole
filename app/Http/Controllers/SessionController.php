<?php

namespace App\Http\Controllers;

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


        if(auth()->attempt($attributes)){
            
          return redirect('/');
        }

        return back();
    }



}