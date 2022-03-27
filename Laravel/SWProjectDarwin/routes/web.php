<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\RegisterController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'login']);
Route::get('/login', [LoginController::class, 'login']);
Route::get('/login', [LoginController::class, 'login']);
Route::get('/login', [LoginController::class, 'login']);



// Route::get('/login', [LoginController::class, 'login']);

Route::get('about', 'App\Http\Controllers\AboutController@about');

Route::get('register', function (){
    return view('register');
});
