<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index() {
        return view('users.register');
    }

    public function store(Request $request) {
        $validatedRegister = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|unique:users'
        ]);
        $validatedRegister['password'] = Hash::make($validatedRegister['password']);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $validatedRegister['password'];
        if($request->hasFile('image')) {
            $user->image = $request->file('image')->store('images', 'public');
        }
        $user->save();
        
        return back()->with('message', 'Account Created');

    }


}
