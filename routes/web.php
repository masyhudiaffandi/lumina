<?php

use App\Http\Controllers\Lumina\BmiController;
use App\Http\Controllers\LuminaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;

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
    return view('lumina.index');
});

Route::get('/dashboard', function () {
    return view('lumina.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/services', function () {
    return view('lumina.services');
})->middleware(['auth', 'verified'])->name('services');

Route::get('/about', function () {
    return view('lumina.services');
})->middleware(['auth', 'verified'])->name('about');

Route::get('/contact', function () {
    return view('lumina.contact');
})->middleware(['auth', 'verified'])->name('contact');

Route::get('/chats', function () {
    return view('lumina.chat');
});

Route::post('/chat', 'App\Http\Controllers\ChatController');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


