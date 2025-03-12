<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

Route::get('/alumnos', [ApiController::class, 'alumnos']);
Route::get('/profesores', [ApiController::class, 'profesores']);