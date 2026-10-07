<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/servicios', function () {
    return view('pages.services');
})->name('services');

Route::get('/contacto', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/equipamiento/fusiles', function () {
    return view('pages.fusiles');
})->name('categoria.fusiles');

Route::get('/equipamiento/pistolas', function () {
    return view('pages.pistolas');
})->name('categoria.pistolas');

Route::get('/equipamiento/gear', function () {
    return view('pages.gear');
})->name('categoria.gear');