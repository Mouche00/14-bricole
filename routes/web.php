<?php


use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\ProviderController;
use App\Http\Controllers\ArtisanController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CompetanceController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DomainController;
use App\Http\Controllers\ReclamationController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Stevebauman\Location\Facades\Location;
// use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TempDomainController;
use App\Models\TempDomain;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');


//laravel social




Route::post('/signup', [RegisterController::class, 'client'])->name('signup.client');
Route::get('/auth/{provider}/redirect', [ProviderController::class, 'redirect']);
Route::get('/auth/{provider}/callback', [ProviderController::class, 'callback']);



// Route::get('login', [SessionController::class, 'create']);
Route::post('login', [SessionController::class, 'store'])->name('login.store');
Route::get('logout', [SessionController::class, 'destroy'])->name('logout');
Route::get('signup', [RegisterController::class, 'index'])->name('signup');

Route::post('client/signup', [RegisterController::class, 'client'])->name('signup.client');
Route::post('artisan/signup', [RegisterController::class, 'artisan'])->name('signup.artisan');

Route::put('client/update', [ClientController::class, 'update'])->name('update.client');





// ADMIN DASHBOARD

Route::middleware(['can:admin'])->group(function () {
    Route::get('admin', [AdminController :: class, 'dashboard'])->name('admin');
    Route::get('domainDashboard', [AdminController :: class, 'domain'])->name('domainDashboard');
    Route::get('domainpage/{id}', [AdminController :: class, 'domainpage'])->name('domainPage');
    Route::get('usersDashboard', [AdminController :: class, 'users'])->name('usersDashboard');
    Route::get('requestsDashboard', [AdminController :: class, 'requestpage'])->name('requestsDashboard');
    Route::get('reclaDashboard', [AdminController :: class, 'reclapage'])->name('reclaDashboard');
    Route::get('accepterrecla/{id}', [AdminController :: class, 'acceRecla'])->name('acceRecla');
    Route::get('refuserrecla/{id}', [AdminController :: class, 'refRecla'])->name('refRecla');
    Route::get('desDom', [AdminController :: class, 'domainDestroy'])->name('desDom');
    Route::get('accepterDemande/{id}', [TempDomainController :: class, 'accepterDemande'])->name('accepterDemande');
    Route::get('refuserDemande/{id}', [TempDomainController :: class, 'refuserDemande'])->name('refuserDemande');
    Route::resource('domains',DomainController::class);
    Route::resource('competance',CompetanceController::class);
});

// ARTISAN ROUTE

Route::middleware(['auth', 'can:artisan'])->group(function () {
    Route::get('artisan', [ArtisanController::class, 'dashboard'])->name('artisan');
    Route::get('domain', [ArtisanController::class, 'domain'])->name('domain');
    Route::get('competances', [ArtisanController::class, 'competances'])->name('competances');
    Route::get('services', [ArtisanController::class, 'services'])->name('services');
    Route::post('services', [ArtisanController::class, 'addServices'])->name('addServices');
    Route::post('/domain', [ArtisanController::class, 'addDomain'])->name('domains.artisan')->middleware('auth');
    Route::post('/competances', [ArtisanController::class, 'addCompetance'])->name('competances.artisan')->middleware('auth');
    Route::post('/artisan/images', [ArtisanController::class, 'addImage'])->name('images.artisan')->middleware('auth');
    Route::get('artisanImages', [ArtisanController::class, 'images'])->name('images');
    Route::get('/artisan/images', [ArtisanController::class, 'images'])->name('images');
});


// Route::post('/domains', [DomainController::class, 'store'])->name('domains.store')->middleware('auth:artisan');

Route::model('artisan', App\Models\Artisan::class);



//Client Routes
Route::middleware(['auth', 'can:client'])->group(function () {
    Route::get('client', [ClientController::class, 'clientHome'])->name('client');
    Route::get('reservations', [ClientController::class, 'clientReservation'])->name('reservations');
    Route::get('reclamation/{id}', [ClientController::class, 'clientReclamation'])->name('reclamation');
    Route::post('reclamation/add/{artisan}', [ReclamationController::class, 'store'])->name('reclamation.store');
    Route::get('ArtisanPage/{artisan}', [ClientController::class, 'ArtisanPage'])->name('artisan.client');

    Route::get('profile', [ClientController::class, 'clientProfile'])->name('profile');
    Route::post('/reservation/add/{id}', [ReservationController::class, 'store'])->name('reservation.store');
    Route::delete('/reservation/delete/{reservation}', [ReservationController::class, 'destroy'])->name('reservation.delete');
    Route::get('/search', [SearchController::class, 'search'])->name('search');
    Route::get('/searchResults', [SearchController::class, 'searchResults'])->name('searchResults');
    Route::get('/invoice/{reservation}', [InvoiceController::class, 'generate'])->name('invoice');

    Route::post('/review/add/{artisan}', [ReviewController::class, 'reviewstore'])->name('review.store');



});





//Chat routes

// Route::get('/chat/{id}', [ChatController::class, 'chatForm'])->middleware('auth');
// Route::post('/chat/{id}', [ChatController::class, 'sendMessage'])->middleware('auth');
// testing

Route::get('/test/location', [TestController::class, 'location']);
 //////////////////
//  Route::get('/review', [ReviewController::class, 'index'])->name('review.index');