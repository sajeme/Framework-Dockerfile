<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/alumnos', [ApiController::class, 'alumnos']);
Route::get('/api/profesores', [ApiController::class, 'profesores']);
