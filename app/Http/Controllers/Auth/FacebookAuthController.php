<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\SocialUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Contracts\Auth\Authenticatable;

class FacebookAuthController extends Controller
{
    public function redirectToFacebook($service)
    {
        return Socialite::driver($service)->redirect();
    }

    public function handleFacebookCallback($service)
    {
        $socialiteUser = Socialite::driver($service)->user();
        $name = $socialiteUser->getName();
        $email = $socialiteUser->getEmail();
        $user = User::where('email', $email)->first();
        if (!$user) {
            $user = User::create([
                'name' => $name,
                'email' => $email,
                'password' => '123456789'
            ]);
        }
        Auth::login($user);
        return redirect()->route('users.index');
    }
}
