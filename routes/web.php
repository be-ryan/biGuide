<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PlaceCategoryController;
use App\Http\Controllers\ReviewController;

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/explore', [PlaceController::class, 'index'])->name('index');
Route::get('/place/{id}', [PlaceController::class, 'detail'])->name('detail');

Route::resource('/places', DashboardController::class)->middleware('auth');

Route::get('/categories', [PlaceCategoryController::class, 'index'])->name('categories');

Route::resource('users', UserController::class)->middleware('auth');

Route::post('/places/{id}/reviews', [ReviewController::class, 'store'])->name('reviews.store');

Route::get('/about', function () {
    return view('aboutPage');
})->name('about');