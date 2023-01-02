<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Hash;

class SocialiteController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback(Request $request)
    {
        // Google user object dari google
        $userFromGoogle = Socialite::driver('google')->stateless()->user();

        // Ambil user dari database berdasarkan google user id
        // $userFromDatabase = User::where('google_id', $userFromGoogle->getId())->first();
        $user = User::where('email', '=', $userFromGoogle->email)->first();

        if (!$user) {
            $newUser = User::updateOrCreate(
                [
                    'google_id' => $userFromGoogle->getId(),
                    'email' => $userFromGoogle->getEmail(),
                    'name' => $userFromGoogle->getName(),
                    'username' => $userFromGoogle->getName(),
                    'password' => Hash::make('12345'),
                ]
            );
            $newUser->save();

            // Login user yang baru dibuat
            auth('web')->login($newUser);
            session()->regenerate();

            return redirect('/');
        }



        // Jika ada user langsung login saja
        auth('web')->login($user);
        session()->regenerate();

        return redirect('/');
    }

    public function logout(Request $request)
    {
        auth('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
