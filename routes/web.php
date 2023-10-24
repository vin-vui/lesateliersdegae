<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home.welcome.index');
})->name('welcome');
Route::get('/particuliers', function () {
    return view('home.individuals');
})->name('individuals');
Route::get('/structures', function () {
    return view('home.organizations');
})->name('organizations');
Route::get('/agenda', function () {
    return view('home.agenda');
})->name('agenda');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
