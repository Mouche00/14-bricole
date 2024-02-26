<?php


use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\ProviderController;
use App\Http\Controllers\ArtisanController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CompetanceController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DomainController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use Stevebauman\Location\Facades\Location;





Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
});


//laravel social




Route::post('/signup', [RegisterController::class, 'client'])->name('signup.client');
Route::get('/auth/{provider}/redirect', [ProviderController::class, 'redirect']);
Route::get('/auth/{provider}/callback', [ProviderController::class, 'callback']);



// Route::get('login', [SessionController::class, 'create']);
Route::post('login', [SessionController::class, 'store'])->name('login.store');
Route::get('signup', [RegisterController::class, 'index'])->name('signup');

Route::post('client/signup', [RegisterController::class, 'client'])->name('signup.client');
Route::post('artisan/signup', [RegisterController::class, 'artisan'])->name('signup.artisan');




// ADMIN DASHBOARD

Route::middleware(['can:admin'])->group(function () {
    Route::get('admin', [AdminController :: class, 'dashboard'])->name('admin');
    Route::get('domainDashboard', [AdminController :: class, 'domain'])->name('domainDashboard');
    Route::get('domainpage/{id}', [AdminController :: class, 'domainpage'])->name('domainPage');
    Route::get('usersDashboard', [AdminController :: class, 'users'])->name('usersDashboard');
    Route::resource('domain',DomainController::class);
    Route::resource('competance',CompetanceController::class);
});

// ARTISAN ROUTE

Route::middleware(['auth', 'can:artisan'])->group(function () {
    Route::get('artisan', [ArtisanController::class, 'dashboard'])->name('artisan');
    Route::get('domain', [ArtisanController::class, 'domain'])->name('domain');
    Route::get('competances', [ArtisanController::class, 'competances'])->name('competances');
    Route::get('services', [ArtisanController::class, 'services'])->name('services');
    Route::post('/domain', [ArtisanController::class, 'addDomain'])->name('domains.artisan')->middleware('auth');


});


// Route::post('/domains', [DomainController::class, 'store'])->name('domains.store')->middleware('auth:artisan');

Route::model('artisan', App\Models\Artisan::class);



//Client Routes
Route::middleware(['auth', 'can:client'])->group(function () {
    Route::get('client', [ClientController::class, 'clientHome'])->name('client');
    Route::get('artisans', [ClientController::class, 'clientArtisans'])->name('artisans');
    Route::get('reclamations', [ClientController::class, 'clientReclamation'])->name('reclamations');
    Route::get('profile', [ClientController::class, 'clientProfile'])->name('profile');

});



// testing

Route::get('/test/location', [TestController::class, 'location']);