<?php

use App\Http\Controllers\Home\homeController;
use App\Http\Controllers\Users\usersController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',[homeController::class,'index'])->name('index');
Route::get('/login',[usersController::class,'login'])->name('login');
Route::get('/register',[usersController::class,'register'])->name('register');
