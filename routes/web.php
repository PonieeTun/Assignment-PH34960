<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthenController;
use App\Http\Controllers\client\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\SearchController;
use App\Http\Middleware\IsMember;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/detail/{id}', [HomeController::class,'detail'])->name('detail');
Route::get('/categories/{id}', [CategoryController::class,'show'])->name('client.pageCategories');
// Route::get('/categories/{slug}', [CategoryController::class, 'categories']);




Route::resource('posts', PostController::class)->middleware('IsAdmin');
Route::resource('categories', CategoryController::class)->middleware('IsAdmin');

Route::get('login', [AuthenController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthenController::class, 'handleLogin']);

Route::get('register', [AuthenController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthenController::class, 'handleRegister']);

Route::post('logout', [AuthenController::class,'logout'])->name('logout');



Route::get('admin', [AdminController::class, 'dashboard'])
    ->name('admin.dashboard')
    ->middleware('IsAdmin');


    Route::get('/posts/search', [PostController::class, 'search'])->name('posts.search');

