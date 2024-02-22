<?php

namespace App\Http\Controllers;

use App\Models\Artisan;
use \App\Models\Client;
use \App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            'lname' => 'required|min:4',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8', 
            'phone' => 'required',
            'picture' => 'required|image',
            'address'=> 'required',
        ]);

        
        $fileName = time() . '.' . $request->picture->extension();
        $request->picture->storeAs('public/images', $fileName);
        
        $attributes=array_merge($attributes, ['picture'=> $fileName]) ;

        
        $user = User::create($attributes);

        
        $user->artisan()->create();
        Auth::login($user);

        return redirect('/');
    }

    
    public function client(Request $request){
       
        $attributes = $request->validate([
            'name' => 'required|min:4',
            'lname' => 'required|min:4',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8', 
            'phone' => 'required',
            'picture' => 'required',
            'address'=> 'required',
        ]);
        $fileName = time() . '.' . $request->picture->extension();
        $request->picture->storeAs('public/images', $fileName);
        $attributes=array_merge($attributes, ['picture'=> $fileName]) ;
        $user = User::create($attributes);

        $user->client()->create();

        Auth::login($user);

        return redirect('/');
    }
}