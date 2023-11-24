<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/projects', [HomeController::class, 'projects']);
Route::get('/contact', [HomeController::class, 'contact']);

