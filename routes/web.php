<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtisanController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
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



Route::get('login', [Controller :: class, 'login']);

Route::post('signup', [RegisterController :: class, 'client'])->name('signup.client');


                                // ADMIN DASHBOARD
Route::get('adminDashboard', [AdminController :: class, 'dashboard'])->name('adminDashboard');
Route::get('domainDashboard', [AdminController :: class, 'domain'])->name('domainDashboard');
Route::get('usersDashboard', [AdminController :: class, 'users'])->name('usersDashboard');


                            // ARTISAN ROUTE
Route::get('artisan', [ArtisanController :: class, 'dashboard'])->name('artisan');
Route::get('domain', [ArtisanController :: class, 'domain'])->name('domain');


// Route::get('register', [Controller :: class, 'register']);
Route::get('login', [SessionController::class, 'create']);

Route::post('client/signup', [RegisterController::class, 'client'])->name('signup.client');
Route::post('artisan/signup', [RegisterController::class, 'artisan'])->name('signup.artisan');


Route::get('signup', [RegisterController :: class, 'index'])->name('signup');
Route::post('signup', [RegisterController :: class, 'client'])->name('signup.client');
