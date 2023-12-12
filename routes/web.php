<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

// Route::get('/', function () {
//     return view('explore');
// });

// Route::get('/place', function () {
//     return view('placePage');
// });
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/categories', [PlaceCategoryController::class, 'index'])->name('catpage'); 

// Route::get('/login', function () {
//     return view('login');
// });

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

// Route::get('/', [PlaceController::class, 'index'])->name('index');
Route::get('/explore', [PlaceController::class, 'index'])->name('index');
Route::get('/place/{id}', [PlaceController::class, 'detail'])->name('detail');

// Define a resource route for ReviewController
// Route::resource('reviews', ReviewController::class);

// Add a custom route for the store action related to places
Route::post('/places/{id}/reviews', [ReviewController::class, 'store'])->name('reviews.store');

