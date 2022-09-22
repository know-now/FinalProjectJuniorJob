<?php


use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\CreateCompanyProfileController;
use App\Http\Controllers\CreateCandidateProfileController;


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

//routes for the candidate/junior profile
Route::get('/profile', [CreateCandidateProfileController::class, 'index'])->name('profile');
Route::post('/profile', [CreateCandidateProfileController::class, 'store'])->name('profile');
Route::get('/profile/{name}', [CreateCandidateProfileController::class, 'show'])->name('profile');

//routes for the company profile
Route::get('/company', [CreateCompanyProfileController::class, 'index'])->name('company');
Route::post('/company', [CreateCompanyProfileController::class, 'store'])->name('company');
Route::get('/company/{name}', [CreateCompanyProfileController::class, 'show'])->name('company');

Route::get('/junior', function () {
    return view('junior');
});
Route::get('/quotes', [ApiController::class, 'list']);

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

Route::get('/soft_skills', function () {
    return view('soft_skills');
});

Route::get('/adem', function () {
    return view('adem');
})->middleware(['auth'])->name('adem');

Route::get('/junior_details', function () {
    return view('junior_details');
})->middleware(['auth'])->name('junior_details');

Route::group(['middleware' => 'auth', 'prefix' => 'messages', 'as' => 'messages'], function () {
    Route::get('/', [MessagesController::class, 'index']);
    Route::get('create', [MessagesController::class, 'create'])->name('.create');
    Route::post('/', [MessagesController::class, 'store'])->name('.store');
    Route::get('{thread}', [MessagesController::class, 'show'])->name('.show');
    Route::put('{thread}', [MessagesController::class, 'update'])->name('.update');
    Route::delete('{thread}', [MessagesController::class, 'destroy'])->name('.destroy');
});


require __DIR__.'/auth.php';
