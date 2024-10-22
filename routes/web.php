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
Route::get('/cours-de-flute-traversiere', function () {
    return view('home.courses');
})->name('courses');
// Route::get('/agenda', function () {
//     return view('home.agenda');
// })->name('agenda');
Route::get('/mentions-legales', function () {
    return view('policy');
})->name('policy');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('back.dashboard');
    })->name('dashboard');
    Route::resources([
        'events' => \App\Http\Controllers\EventController::class,
    ]);
});
