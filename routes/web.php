<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JobController::class,'index']);

//search
Route::get('/search', SearchController::class);


//auth 

Route::middleware('guest')->group(function (){
    //register
    Route::get('/register',[RegisteredUserController::class,'create']);
    Route::post('/register',[RegisteredUserController::class,'store']);
    //login
    Route::get('/login',[SessionController::class,'create']);
    Route::post('/login',[SessionController::class,'store']);

});

Route::delete('/logout',[SessionController::class,'destroy'])->middleware('auth');


