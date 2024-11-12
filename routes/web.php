<?php

use App\Http\Controllers\ProvaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// uso di un controller 
Route::get('/provaconcontroller',[ProvaController::class,'provaFunction']);


Route::post('/provadata',[ProvaController::class,'provaData']);



