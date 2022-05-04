<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\RegisterController;
use App\Http\Middleware\Authenticate;
use App\Http\Controllers\ListPage;

use App\Http\Controllers\User\ProductController as UserProductController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;


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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'login']);
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/register', [registerController::class, 'register']);
Route::get('/controller', [controlllerController::class, 'controller']);
Route::get('image/{main}', 'HomeController@displayImage')->name('image.displayImage');
Route::get('/productListPage', [ListPageController::class, 'list']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('about', 'App\Http\Controllers\AboutController@about');

/* Admin and User Home Pages */
Route::get('/admin/home', [App\Http\Controller\Admin\HomeController::class, 'index'])->name('admin.home');
Route::get('/user/home', [App\Http\Controller\User\HomeController::class, 'index'])->name('user.home');

/* User */
Route::get('/user/products/', [UserProductController::class, 'index'])->name('user.products.index');
Route::get('/user/products/{id}', [UserProductController::class, 'show'])->name('user.products.show');

/* Admin */
Route::get('/admin/products/', [AdminProductController::class, 'index'])->name('admin.products.index');
Route::get('/admin/products/create', [AdminProductController::class, 'create'])->name('admin.products.create');
Route::get('/admin/products/{id}', [AdminProductController::class, 'show'])->name('admin.products.show');
Route::post('/admin/products/store', [AdminProductController::class, 'store'])->name('admin.products.store');
Route::get('/admin/products/{id}/edit', [AdminProductController::class, 'edit'])->name('admin.products.edit');
Route::put('/admin/products/{id}', [AdminProductController::class, 'update'])->name('admin.products.update');
Route::delete('/admin/products/{id}', [AdminProductController::class, 'destroy'])->name('admin.products.destroy');

Route::get('register', function (){
    return view('register');
});
