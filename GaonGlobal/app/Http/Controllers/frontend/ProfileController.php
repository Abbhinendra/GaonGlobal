<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('frontend.profile.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user=User::find($id);
        return view('frontend.profile.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if(!auth()->check()){
           return redirect()->back();
        }
        $user=User::find($id);
        if($request->type === 'seller' || $request->type === 'buyer'){
        $user->update(['name'=>$request->name,
                       'type'=>$request->type
        ]);
            return redirect()->route('profile.index');
       }
       else{
            return redirect()->back();
       }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function addProfileImage(Request $request){
        $request->validate([
            'url' => 'required|image|mimes:jpeg,png,jpg,webp,gif|max:2048',
        ]);
        if(!auth()->check()){
            return redirect()->back();
        }
        if($request->hasFile('url')){
            $user=User::find(auth()->id());
            $user->clearMediaCollection('profileImage');
            $user->addMediaFromRequest('url')->toMediaCollection('profileImage');
        }
    }
}
