<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\GradeController;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProfileController;
//use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\MotivationController;
use App\Http\Controllers\PostsController;

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

Route::get('/', function() {
    return view('welcome');
})->middleware(['auth']);

Route::get('/profession', function() {
    return view('profession');
})->middleware(['auth']);

//Route::get('/', [WelcomeController::class]);
Route::get('/profile', [ProfileController::class, 'show'])->middleware(['auth']);
Route::get('/motivation', [MotivationController::class, 'show'])->middleware(['auth']);
Route::resource('/grades', GradeController::class)->middleware(['auth']);
Route::resource('/faq', FaqController::class)->middleware(['auth']);
Route::get('/posts', [PostsController::class])->middleware(['auth']);
Route::resource('/article', ArticleController::class)->middleware(['auth']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');
