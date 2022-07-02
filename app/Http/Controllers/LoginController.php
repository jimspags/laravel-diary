<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function index() {
        return view('users.login');
    }

    public function authenticate(LoginRequest $request) {
        $validateAuthenticate = $request->validated();
        if(auth()->attempt($validateAuthenticate)) {
            $request->session()->regenerate();
            return redirect()->route('diary.index');
        }
        
        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }
}
