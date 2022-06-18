<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\GradeController;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
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
});

Route::get('/profession', function() {
   return view('profession');
});

//Route::get('/', [WelcomeController::class]);
Route::get('/profile', [ProfileController::class, 'show']);
Route::get('/motivation', [MotivationController::class, 'show']);
Route::resource('/grades', GradeController::class);
Route::resource('/faq', FaqController::class);
Route::get('/posts', [PostsController::class]);
Route::resource('/article', ArticleController::class);

Route::get('/dashboard', function() {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
