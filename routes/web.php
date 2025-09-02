<?php

use App\Http\Controllers\AuthManager;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');
Route::get('/register', [AuthManager::class, 'register'])->name('register');
Route::post('/register', [AuthManager::class,'registerPost'])->name('register.post');
Route::get('/logout', [AuthManager::class,'logout'])->name('logout');




 
Auth::routes(['verify'=>true]);

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard',function(){
    return view('dashboard');
})->middleware(['auth','verified'])->name   ('dashboard');

require __DIR__.'/web.php';