<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class TestController extends Controller
{
    public function location(Request $request) {
        // $userIp = $request->ip();
        // $userIp = 'https://'.$request->ip();

        // dd($userIp);
            // $locationData = Location::get($userIp);
            
            // dd($locationData);

            return view('test.location');
    }
}
