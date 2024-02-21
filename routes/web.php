<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\RegisterController;
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


Route::get('register', [Controller :: class, 'register']);
Route::get('login', [Controller :: class, 'login']);


Route::get('signup', [RegisterController :: class, 'index'])->name('signup');
Route::post('signup', [RegisterController :: class, 'client'])->name('signup.client');

