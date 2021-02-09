<?php

use App\Http\Controllers\EtablissementController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ApropoController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AccueilController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {

    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);

});

Route::resource('etablissement', EtablissementController::class)->except(['create']);
Route::resource('reversation', ReservationController::class)->except(['create']);
Route::resource('apropo', ApropoController::class)->except(['create']);
Route::resource('accueil', ApropoController::class)->except(['create']);
Route::resource('profil', ProfilController::class)->except(['create']);
Route::resource('search', SearchController::class)->except(['create']);

Auth::routes();
