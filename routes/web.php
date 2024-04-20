<?php

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CarImageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
})->name('lang.switch');

Route::middleware(['auth'])->group(function () {

    Route::get('/owners', [OwnerController::class, 'index'])->name('owners.index');
    Route::post('/owners', [OwnerController::class, 'store'])->name('owners.store');
    Route::get('/cars', [CarController::class, 'index'])->name('cars.index');
    Route::post('/cars', [CarController::class, 'store'])->name('cars.store');
    Route::get('/cars/{car}/images', [CarImageController::class, 'index'])->name('cars.images.index');
    Route::post('/cars/{car}/images', [CarImageController::class, 'store'])->name('cars.images.store');


    Route::middleware(['admin'])->group(function () {
        Route::get('/owners/create', [OwnerController::class, 'create'])->name('owners.create');
        Route::get('/owners/{owner}/edit', [OwnerController::class, 'edit'])->name('owners.edit');
        Route::put('/owners/{owner}', [OwnerController::class, 'update'])->name('owners.update');
        Route::delete('/owners/{owner}', [OwnerController::class, 'destroy'])->name('owners.destroy');

        Route::get('/cars/create', [CarController::class, 'create'])->name('cars.create');
        Route::get('/cars/{car}/edit', [CarController::class, 'edit'])->name('cars.edit');
        Route::put('/cars/{car}', [CarController::class, 'update'])->name('cars.update');
        Route::delete('/cars/{car}', [CarController::class, 'destroy'])->name('cars.destroy');
        Route::delete('/cars/images/{image}', [CarImageController::class, 'destroy'])->name('cars.images.destroy');
    });

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
