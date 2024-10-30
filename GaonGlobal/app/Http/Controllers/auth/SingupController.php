<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\registrationRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class SingupController extends Controller
{
    public function singUpType($type){
     $seller='seller';
     $buyer='buyer';
     if($type == null){
        abort(404);
     }

     if($seller != $type && $buyer != $type){
        abort(404);
     }
      if(Auth::check()){
         return redirect()->back();
      }
      else{
      return view('auth.index', compact('type'));
      }
    }

    public function registration(registrationRequest $request){
           if($request->input('type') === 'seller' || $request->input('type') === 'buyer'){
           $user=User::create(array_merge(
            $request->all(),
            ['type'=> $request->input('type')]
           ));
           if($user){
            Auth::login($user, true);
            return redirect()->route('home')->with('login','Your account has been successfully created and you have successfully logged in.');
           }
        }
        else{
             return redirect()->back();
        }
    }

    public function logout(){
        if(!Auth::check()){
            return redirect()->back();
        }
        Auth::logout();
        return redirect()->route('home');
    }

    public function login (Request $request){
        if(Auth::check()){
            return redirect()->back();
        }
        $credentials=$request->only('email','password');
        if(Auth::attempt($credentials)){
            return redirect()->route('home')->with('login', 'you have successfully logged in.');
        }
        else{
             return redirect()->back()->with('error', 'Invalid credentials.');
        }
    }
}
