<?php

use App\Http\Controllers\CalculateController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ConversionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserTypeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', [UserController::class, 'index']);

Route::get('about', function(){
    return "<h1>About Page</h1>";
});

route::group(['prefix' => 'user'], function(){

    Route::get('/{id}', [UserController::class, 'showUser']);

    Route::get('/{id}/{name}', [UserController::class, 'editProfile'])
        ->name('editProfile');

    Route::get('/profile/edit/{id}/{name}', [UserController::class, 'profileEditLink']);
  
    Route::get('/profile/{id}/{name}', [UserController::class, 'profileLink']);

    Route::get('/user/profile/{id}', [UserController::class, 'getProfile'])
        ->name('userProfile');
});

Route::get('compute/{num1}/{num2}', [CalculateController::class, 'index']);

Route::get('/converter', [ConversionController::class, 'index']);
Route::get('/converter/fetch', [ConversionController::class, 'fetchData']);

//activity
Route::fallback(function(){
    return "<img src='/images/f1.jpg'>";
});

Route::get('/register', [RegisterController::class, 'create'])->name('register.form');
Route::post('/register', [RegisterController::class, 'store'])->name('register.submit');
Route::get('/edit/{id}', [UserController::class, 'formEdit'])->name('formEdit');

Route::get('/activity', function () {
    return view('activity.layout');
});

Route::get('/user-type', [UserTypeController::class, 'getUserType']);

Route::group(['prefix'=> 'user'], function(){
    Route::get('/', [UserController::class, 'index'])->name ('user.submit');
    Route::post('/', [UserController::class, 'store'])->name ('user.submit');
});