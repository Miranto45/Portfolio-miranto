<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::get('/', [PortfolioController::class, 'index'])->name('home');
Route::get('/cv', [PortfolioController::class, 'cv'])->name('cv');
Route::post('/contact', [PortfolioController::class, 'contact'])->name('contact');
Route::get('/clear-config', function() {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    return 'Cache vidé avec succès !';
});