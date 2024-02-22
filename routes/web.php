<?php


use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\ProviderController;
use App\Http\Controllers\ArtisanController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;





Route::get('/', function () {
    return view('welcome');
});

//laravel social


Route::get('login', [Controller :: class, 'login']);

Route::post('signup', [RegisterController :: class, 'client'])->name('signup.client');
Route::get('/auth/{provider}/redirect', [ProviderController::class, 'redirect']);
Route::get('/auth/{provider}/callback', [ProviderController::class, 'callback']);


                                // ADMIN DASHBOARD
Route::get('adminDashboard', [AdminController :: class, 'dashboard'])->name('adminDashboard');
Route::get('domainDashboard', [AdminController :: class, 'domain'])->name('domainDashboard');
Route::get('usersDashboard', [AdminController :: class, 'users'])->name('usersDashboard');


                            // ARTISAN ROUTE
Route::get('artisan', [ArtisanController :: class, 'dashboard'])->name('artisan');
Route::get('domain', [ArtisanController :: class, 'domain'])->name('domain');


// Route::get('register', [Controller :: class, 'register']);
Route::get('login', [SessionController::class, 'create']);
Route::post('login', [SessionController::class, 'store'])->name('login.store');

Route::post('client/signup', [RegisterController::class, 'client'])->name('signup.client');
Route::post('artisan/signup', [RegisterController::class, 'artisan'])->name('signup.artisan');
Route::post('signupArtisan', [RegisterController :: class, 'artisan']);