<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PostController;

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
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//frontend
Route::get('/home',[FrontendController::class,'home'])->name('home');
Route::get('/f_profile',[FrontendController::class,'f_profile'])->name('f_profile');

//backend
Route::get('/b_dashboard',[PostController::class,'b_dashboard'])->name('b_dashboard');
Route::get('/user_list',[PostController::class,'userIndex'])->name('user_list');
//post
Route::get('/post_list',[PostController::class,'postIndex'])->name('post_list');
Route::get('/post_create',[PostController::class,'postCreate'])->name('post_create');
Route::post('/post_store',[PostController::class,'postStore'])->name('post_store');
Route::get('/post_edit/{id}',[PostController::class,'postEdit'])->name('post_edit');
Route::post('/post_update/{id}',[PostController::class,'postUpdate'])->name('post_update');
Route::get('/post_delete/{id}',[PostController::class,'postDelete'])->name('post_delete');
