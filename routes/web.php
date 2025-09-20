<?php

use App\Exceptions\ValidationError;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationData;

Route::get('/', function () {
    return view('welcome');
});

// exception handler
Route::get('/validation' , function(){
    throw new ValidationError('invalid input');
});
