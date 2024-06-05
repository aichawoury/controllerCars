<?php

use App\Http\Controllers\Home\homeController;
use App\Http\Controllers\Role\roleController;
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


// users
Route::get('user-create',[usersController::class,'create'])->name('createUser');
Route::post('/user-store',[usersController::class,'store'])->name('storeUser');

//role
Route::get('/role-create',[roleController::class,'create'])->name('createRole');
Route::post('/role-store',[roleController::class,'store'])->name('storeRole');




