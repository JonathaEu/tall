<?php

use App\Livewire\Dashboard\TelaDashboard;
use App\Livewire\Filial\TelaFilial;
use App\Livewire\Login\TelaLogin;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', TelaDashboard::class)->name('dashboard.index');
    Route::get('/filial', TelaFilial::class)->name('filial.index');
});

Route::get('/login', TelaLogin::class)->name('login');
Route::post('/logout', function () {
    echo 'oi';
})->name('logout');
Route::view('/', 'welcome')->name('home');
