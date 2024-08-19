<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CheckController; 

Route::get('/', function () {
    return view('welcome');
});


Route::get('/check', [CheckController::class, 'check']);