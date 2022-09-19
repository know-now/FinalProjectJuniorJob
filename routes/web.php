<?php

use App\Http\Controllers\CreateCandidateProfile;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\SkillController;
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

Route::get('/profile', [CreateCandidateProfile::class, 'index'])->name('profile');
Route::post('/profile', [CreateCandidateProfile::class, 'store'])->name('profile');
Route::get('/profile/{id}', [CreateCandidateProfile::class, 'show'])->name('profile');

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

Route::get('/skills', [SkillController::class, 'index'])->middleware(['auth'])->name('skills');
Route::post('/company_profile', function () {
    return view('company_profile');
})->middleware(['auth'])->name('company_profile');

Route::get('/soft_skills', function () {
    return view('soft_skills');
});

Route::get('/adem', function () {
    return view('adem');
})->middleware(['auth'])->name('adem');

Route::get('/junior_details', function () {
    return view('junior_details');
})->middleware(['auth'])->name('junior_details');

Route::get('/grade', function () {
    return view('grade');
})->middleware(['auth'])->name('grade');

Route::group(['middleware'=>'auth', 'prefix' => 'messages'], function () {
    Route::get('/', [MessagesController::class, 'index']);
    Route::get('/create', [MessagesController::class, 'create']);
    Route::post('/', [MessagesController::class,'store']);
    Route::get('{id}', [MessagesController::class,'show']);
    Route::put('{id}', [MessagesController::class,'update']);
    Route::post('store', [MessagesController::class, 'store'])->name('store');
});


require __DIR__.'/auth.php';
