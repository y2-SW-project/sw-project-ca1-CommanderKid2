<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\RegisterController;
use App\Http\Middleware\Authenticate;

// namespace App\Http\Middleware;

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

// Route::get('/login', function(){
//     return view( 'login' );
// });

//Auth::routes();

Route::get('/login', [LoginController::class, 'login']);
Route::get('/about', [aboutController::class, 'about']);
Route::get('/register', [registerController::class, 'register']);
Route::get('/controller', [controlllerController::class, 'controller']);
Route::get('image/{main}', 'HomeController@displayImage')->name('image.displayImage');



//Route::get('/login', [LoginController::class, 'login']);
Route::get('/admin/home', [App\Http\Controller\Admin\HomeController::class, 'index'])->name('admin.home');
Route::get('/user/home', [App\Http\Controller\User\HomeController::class, 'index'])->name('user.home');

Route::get('about', 'App\Http\Controllers\AboutController@about');

Route::get('register', function (){
    return view('register');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
