<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfilesController extends Controller
{
    public function index($user)
    {
        // dd hace echo de lo que le pase y para no sigue
        // dd($user);
        $user = User::findOrFail($user);
        return view('profiles.index',[
            'user' => $user,
        ]);
    }

    public function edit(User $user)
    {
        return view('profiles.edit',compact('user'));
    }
    public function update(User $user)
    {
        $data = request()->validate([
            'title' =>'required',
            'description' => 'required',
            'url'=> 'url',
            'image'=>'',
        ]);
        $user->profile->update($data);
        return redirect("/profile/{$user->id}");

    }
}
