<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class FacebookAuthController extends Controller
{
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {
        $user = Socialite::driver('facebook')->user();
//        $name = $user->name;
//        $email = $user->email;
//        $avatar = $user->avatar;
//        $existingUser = User::where('email', $email)->first();
//         if ($existingUser) {
//             Auth::login($existingUser);
//         } else {
//             $newUser = new User();
//             $newUser->name = $name;
//             $newUser->email = $email;
//             $newUser->avatar = $avatar;
//             $newUser->save();
//             Auth::login($newUser);
//         }
    }
}
