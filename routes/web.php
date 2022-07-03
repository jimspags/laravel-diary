<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController as Login;
use App\Http\Controllers\RegisterController as Register;
use App\Http\Controllers\DiaryController as Diary;

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

//Non-authenticated
Route::middleware('guest')->group(function() {
    Route::view('/', 'welcome')->name('welcome');

    //Login
    Route::controller(Login::class)->group(function() {
        Route::get('/login', 'index')->name('login.index');
        Route::post('/login/authenticate', 'authenticate')->name('login.authenticate');
    });

    //Register
    Route::controller(Register::class)->group(function() {
        Route::get('/register', 'index')->name('register.index');
        Route::post('/register/store', 'store')->name('register.store');
    });

});

//Authenticated
Route::middleware('user')->group(function() {
    Route::controller(Diary::class)->group(function() {
        Route::get('/home', 'index')->name('diary.index');
        Route::post('/logout', 'logout')->name('diary.logout');
        Route::post('/diary/store', 'store')->name('diary.store');
        Route::delete('/diary/delete/{diary}', 'delete')->name('diary.delete');
    }); 
});

