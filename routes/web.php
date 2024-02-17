<?php

use App\Http\Controllers\Auth\FacebookAuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

Route::view('/', 'welcome')->name('welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::middleware('auth')->group(function (){
    Route::resource('users',UserController::class);
    Route::resource('posts',PostController::class);
    storage::disk('public');
});

Route::get('/login/facebook', [FacebookAuthController::class, 'redirectToFacebook']);
Route::get('/facebook/callback', [FacebookAuthController::class, 'handleFacebookCallback']);
Route::view('/facebook','facebook');





require __DIR__.'/auth.php';
