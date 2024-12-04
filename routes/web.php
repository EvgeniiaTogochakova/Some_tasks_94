<?php

use App\Http\Controllers\MyUserController;
use App\Http\Controllers\PdfGeneratorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', [MyUserController::class, 'index']);
Route::get('/user/{id}', [MyUserController::class, 'get']);

Route::get('/get-form', [MyUserController::class, 'getForm']); 
Route::post('/store-user', [MyUserController::class, 'store']);

Route::get('/resume/{id}', [PdfGeneratorController::class, 'index']);

