<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LegalController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Laravel\Socialite\Facade\Socialite;

Route::get('/google-auth/callback',function(){
    $user_google = Socialite::driver('google')->stateless()->user();
    $user = User::where('email',$user_google->email)->first();

    if($user){
        $user->google_id = $user_google->id;
        $user->save();
    }else{
        $user = new User();
        $user -> username = $user_google->name;
        $user -> name = $user_google->name;
        $user -> email = $user_google->email;
        $user -> google_id = $user_google->id;
        $user -> save();
    }

    Auth::login($user);
    return redirect()->route('users.account');
});


Route::get('/', IndexController::class);
Route::resource('players',PlayerController::class)
        ->except('index','show')
        ->middleware('isAdmin');
Route::resource('players',PlayerController::class)
        ->only('index','show');
Route::get('messages',[MessageController::class,'create']);
Route::get('location', LocationController::class);
Route::get('/legal/politics', [LegalController::class,'politics']);
Route::get('/legal/terms', [LegalController::class,'terms']);
Route::get('players/edit_visibility',[PlayerController::class,'edit_visibility']);
Route::resource('events',EventController::class);

Route::get('singup', [LoginController::class,'signupForm'])->name('signupForm');
Route::post('singup', [LoginController::class,'signup'])->name('signup');
Route::get('login', [LoginController::class,'loginForm'])->name('loginForm');
Route::post('login', [LoginController::class,'login'])->name('login');
Route::get('logout', [LoginController::class,'logout'])->name('logout');

Route::get('account',[UserController::class, 'account'])->name('users.account');
Route::resource('messages',MessageController::class);








