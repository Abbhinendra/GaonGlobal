<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}
