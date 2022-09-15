<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/company', function () {
    return view('company');
});

Route::get('/junior', function () {
    return view('junior');
});

Route::get('/soft_skills', function () {
    return view('soft_skills');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/junior_profile', function () {
    return view('junior_profile');
})->middleware(['auth'])->name('junior_profile');
Route::post('/junior_profile', function () {
    return view('junior_profile');
})->middleware(['auth'])->name('junior_profile');

Route::get('/search', function () {
    return view('search');
})->middleware(['auth'])->name('search');
Route::post('/company_profile', function () {
    return view('company_profile');
})->middleware(['auth'])->name('company_profile');

Route::get('/soft_skills', function () {
    return view('soft_skills');
});

Route::get('/adem', function () {
    return view('adem');
})->middleware(['auth'])->name('adem');

require __DIR__.'/auth.php';
