<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\DashboardController;
use App\Models\Produit;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Routes web de l'application.
|
*/

// PAGE D'ACCUEIL - Affiche tous les produits
Route::get('/', function () {
    $produits = Produit::all();
    return view('welcome', compact('produits'));
})->name('home');

// DASHBOARD - Accessible uniquement aux utilisateurs authentifiés
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// PROFIL
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// AUTH
require __DIR__.'/auth.php';

// ROUTES PRODUIT - Auth requis
Route::middleware(['auth'])->group(function () {
    Route::resource('produit', ProduitController::class);
});
