<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;



Route::get('/sc-bd-login', [AuthController::class, 'scbdLogin']);

