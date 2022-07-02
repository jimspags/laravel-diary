<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController as Login;
use App\Http\Controllers\RegisterController as Register;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::middleware('guest')->group(function() {
    Route::view('/', 'welcome')->name('welcome');

    //Login
    Route::controller(Login::class)->group(function() {
        Route::get('/login', 'index')->name('login.index');
    });

    //Register
    Route::controller(Register::class)->group(function() {
        Route::get('/register', 'index')->name('register.index');
        Route::post('/register/store', 'store')->name('register.store');
    });

});

