<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ProviderController extends Controller
{
    public function redirect($provider)
    {

        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {

        $socialite = Socialite::driver($provider)->user();

        $user = User::updateOrCreate([
            'provider_id' => $socialite->id,
            'provider' => $provider
        ], [
            'name' => $socialite->name,
            'email' => $socialite->email,
            'provider_token' => $socialite->token,
        ]);

        Auth::login($user);
        $user->assignRole('client');

        return redirect()->route('profile');
    }
}
