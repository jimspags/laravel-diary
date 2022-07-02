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

    public function store(RegisterRequest $request) {
        $validatedRegister = $request->validated();
        $validatedRegister['password'] = Hash::make($validatedRegister['password']);
        $user = User::create($validatedRegister);
        return back()->with('message', 'Account Created');
    }


}
