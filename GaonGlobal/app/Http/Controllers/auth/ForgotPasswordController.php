<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Notifications\SendPasswordResetLink;
use App\Http\Requests\ResetPasswordRequest;
class ForgotPasswordController extends Controller
{
    public function index(){
           if(Auth::check()){
              return redirect()->back();
           }

           return view('auth.forgotpass');
    }

    public function sendPassResetLink(Request $request){
           if(Auth::check()){
              return redirect()->back();
           }

           $user=User::where('email', $request->email)->first();
           if($user){
            $user->notify(new SendPasswordResetLink($user));
            session()->put('reset_pass_email', $user->email);
            return redirect()->back()->with('success','The password reset link has been sent to your email. If you didn’t receive the password reset link, try to sign in with social login.');
           }
           else{
            session()->forget('reset_pass_email');
            return redirect()->back()->with('error','This email is not registered with any account.');
           }
    }

    public function resetPass(){
           if(Auth::check()){
              return redirect()->back();
           }
           $email=session()->get('reset_pass_email');
           if(!$email){
              return redirect()->back();
           }
           return view('auth.resetpass');
    }

    public function changePassword(ResetPasswordRequest $request){
           if(Auth::check()){
              return redirect()->back();
           }
           $email=session()->get('reset_pass_email');
           $user=User::where('email', $email)->first();
           if($user){
               $user->update(['password'=>$request->password]);
               session()->forget('reset_pass_email');
               return redirect()->route('loginPage')->with('success', 'Your Password Change Successfully.');
           }else{
               return redirect()->back()->with('error','some technical issue occurs try after some time');
           }
    }
}
