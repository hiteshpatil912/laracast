<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\PhoneController;
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

Route::get('/register', [AuthController::class,'register'])->name('register');
Route::post('/register', [AuthController::class,'storeUser']);

Route::get('/login', [AuthController::class,'login'])->name('login');
Route::post('/login', [AuthController::class,'authenticate']);
Route::get('logout', [AuthController::class,'logout'])->name('logout');

Route::get('/home', [AuthController::class,'home'])->name('home');

Route::get('/phone', [PhoneController::class,'index'])->name('phone');
Route::post('/phone', [PhoneController::class,'store']);
Route::get('/phones', [PhoneController::class,'create']);

Route::get('/post', [PostController::class,'index'])->name('post');
Route::post('/post', [PostController::class,'store']);
Route::get('/posts', [PostController::class,'create']);

Route::get('/comment', [CommentController::class,'index'])->name('comment');
Route::post('/comment', [CommentController::class,'store']);
Route::get('/comments', [CommentController::class,'create']);
