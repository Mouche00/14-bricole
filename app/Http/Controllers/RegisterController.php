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

    // public function store(Request $request, $role){

    //     switch ($request->input('role')){
    //         case 'artisan':
                
    //             break;
    //     }
    // }

    public function artisan(Request $request)
    {
        // $attributes = $request->validate([
        //     ''
        // ])
    }

    
    public function client(Request $request){

        $attributes = $request->validate([
            'name' => 'required|min:4',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8', 
            'phone' => 'required',
            'picture' => 'required'
        ]);


        
        $user = User::create($attributes);

        $client = $user->client()->create();

        return redirect()->route('signup');
    }
}
