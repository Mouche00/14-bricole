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
        $attributes = $request->validate([
            'name' => 'required|min:4',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8', 
        ]);

        $user = User::create($attributes);

        $user->artisan()->create();

        return redirect()->route('login');
    }

    
    public function client(Request $request){

        $attributes = $request->validate([
            'name' => 'required|min:4',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8', 

        ],
        [

            'name.min' => 'The name must have more than 3 characters.',
            'name.unique' => 'This name is already taken.',
            'email.required' => 'The email is required.',
            'email.email' => 'Incorrect email structure.',
            'email.unique' => 'This email is already taken.',
            'password.min' => 'The password must have more than 3 characters.',
            'password.required' => 'The password is required.',
        ]);


        
        $user = User::create($attributes);

        $user->client()->create();

        return redirect()->route('signup');
    }
}
