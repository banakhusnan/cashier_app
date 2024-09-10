<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cashier\MenuController;
use App\Http\Controllers\Cashier\DashboardController;

Route::prefix('cashier')->name('cashier.')->middleware(['auth', 'verified'])->group(function () {
    // Dashboard controller
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
    });

    // Menu Controller
    Route::controller(MenuController::class)->group(function () {
        Route::get('/menu', 'index')->name('menu.index');
        Route::get('/menu/create', 'create')->name('menu.create');
        Route::post('/menu', 'store')->name('menu.store');
        Route::get('/menu/{menu}/edit', 'edit')->name('menu.edit');
        Route::put('/menu/{menu}', 'update')->name('menu.update');
        Route::delete('/menu/{menu}', 'destroy')->name('menu.destroy');
    });
});
