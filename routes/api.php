<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;

//________________user routes____________________
Route::apiResource('users', UserController::class);

