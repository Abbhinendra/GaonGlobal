<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class GoogleController extends Controller
{
    public function googleRedirect(){
        if(Auth::check()){
           return redirect()->back();
        }
        return Socialite::driver('google')->redirect();
    }

    public function googleLogin(){
        try {
            if(Auth::check()){
                return redirect()->back();
             }
            $googleUser = Socialite::driver('google')->user();

            $user = User::where('google_id', $googleUser->id)
            ->orWhere('email', $googleUser->email)
            ->first();

            if ($user) {
              $user->update([
              'google_id' => $googleUser->id,
              'name' => $googleUser->name,
             ]);
          } else {
              $user = User::create([
              'google_id' => $googleUser->id,
              'name' => $googleUser->name,
              'email' => $googleUser->email,
              'type' => 'buyer',
              'password' => bcrypt(uniqid()),
       ]);
    }

            Auth::login($user, true);
            return redirect()->route('home')->with('login','you have successfully logged in.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Technical issue, please try again later.');
        }

    }
}
