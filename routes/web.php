<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PlanetController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;


Route::get('/', function () {
    return view('vue.accueil');
})->name('accueil');

Route::get('destination', function () {
    return view('vue.destination');
})->name('destination');

Route::get('equipage', function () {
    return view('vue.equipage');
})->name('equipage');

Route::get('technologie', function () {
    return view('vue.technologie');
})->name('technologie');

Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['fr', 'en'])) {
        Session::put('locale', $locale);
    }
    return redirect()->back();});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified', 'role:admin|manager'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        
        // CRUD Planètes
        Route::get('/planets', [PlanetController::class, 'index'])->name('planets.index');
        Route::get('/planets/create', [PlanetController::class, 'create'])->name('planets.create');
        Route::post('/planets', [PlanetController::class, 'store'])->name('planets.store');
        Route::get('/planets/{planet}/edit', [PlanetController::class, 'edit'])->name('planets.edit');
        Route::put('/planets/{planet}', [PlanetController::class, 'update'])->name('planets.update');
        Route::delete('/planets/{planet}', [PlanetController::class, 'destroy'])->name('planets.destroy');
    });

require __DIR__.'/auth.php';
