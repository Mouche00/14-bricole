<?php

namespace App\Http\Controllers;

use App\Models\Artisan;
use \App\Models\Client;
use \App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{

    public function index()
    {
        return view('auth.signup');
    }

    // public function store(Request $request, $role){

    //     switch ($request->input('role')){
    //         case 'artisan':

    //             break;
    //     }
    // }



    //artisan registration
    public function artisan(Request $request)
    {


        $attributes = $request->validate([
            'name' => 'required|min:4',
            'lname' => 'required|min:4',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'phone' => 'required',
            'picture' => 'required|image',
            'address' => 'required',
        ], [

            'name.min' => 'The name must have more than 3 characters.',
            'name.unique' => 'This name is already taken.',
            'email.required' => 'The email is required.',
            'email.email' => 'Incorrect email structure.',
            'email.unique' => 'This email is already taken.',
            'password.min' => 'The password must have more than 3 characters.',
            'password.required' => 'The password is required.',
        ]);


        $fileName = time() . '.' . $request->picture->extension();
        $request->picture->storeAs('public/images', $fileName);
        $attributes = array_merge($attributes, ['picture' => $fileName]);

        $user = User::create($attributes);

        $user->assignRole('admin');

        $user->artisan()->create();
        Auth::login($user);

        return redirect('/');
    }

    //client registration
    public function client(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required|min:4',
            'lname' => 'required|min:4',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'phone' => 'required',
            'picture' => 'required',
            'address' => 'required',
        ]);
        
        $fileName = time() . '.' . $request->picture->extension();
        $request->picture->storeAs('public/images', $fileName);
        $attributes = array_merge($attributes, ['picture' => $fileName]);

    


        $user = User::create($attributes);

        $user->client()->create();

        $user->assignRole('client');

        Auth::login($user);

        return redirect('/');
    }
}