<?php

namespace App\Http\Controllers;
use \App\Models\Client;
use \App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function index(){
        return view('auth.signup');
    }



    
public function client(Request $request){

    $request->validate([
        'name' => 'required|min:4',
        'email' => 'required|email',
        'password' => 'required|min:8', 
    ]);
    

    
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password), 
    ]);

    $client = $user->client()->create([
    ]);

    return redirect()->route('signup');
}
}
