<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\ProductoController;


Route::resource('productos', ProductoController::class);

Route::get('/', function (){
    return Inertia::render('Index');
});

Route::get('/Nosotros', function (){
    return Inertia::render('Nosotros');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
