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

      return view('auth.index', compact('type'));
    }

    public function registration(registrationRequest $request){
           if($request->input('type') === 'seller' || $request->input('type') === 'buyer'){
           $user=User::create(array_merge(
            $request->all(),
            ['type'=> $request->input('type')]
           ));
           if($user){
           Auth::login($user, true);
           return redirect()->route('home');
           }
        }
        else{
             return redirect()->back();
        }
    }
}
