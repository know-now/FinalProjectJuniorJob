<?php


use Illuminate\Support\Facades\Route;
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
Route::get('/profile', [CreateCandidateProfileController::class, 'index'])->middleware(['auth'])->name('profile');
Route::post('/profile', [CreateCandidateProfileController::class, 'store'])->middleware(['auth'])->name('profile');
Route::get('/profile/{name}', [CreateCandidateProfileController::class, 'show'])->middleware(['auth'])->name('profile');

//routes for the company profile
Route::get('/company', [CreateCompanyProfileController::class, 'index'])->middleware(['auth'])->name('company');
Route::post('/company', [CreateCompanyProfileController::class, 'store'])->middleware(['auth'])->name('company');
Route::get('/company/{name}', [CreateCompanyProfileController::class, 'show'])->middleware(['auth'])->name('company');

Route::get('/soft_skills', function () {
    return view('soft_skills');
})->middleware(['auth']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/soft_skills', function () {
    return view('soft_skills');
})->middleware(['auth']);

Route::get('/adem', function () {
    return view('adem');
})->middleware(['auth'])->name('adem');

Route::get('/grade', function () {
    return view('grade');
})->middleware(['auth'])->name('grade');

Route::group(['middleware' => 'auth', 'prefix' => 'messages', 'as' => 'messages'], function () {
    Route::get('/', [MessagesController::class, 'index']);
    Route::get('create', [MessagesController::class, 'create'])->name('.create');
    Route::post('/', [MessagesController::class, 'store'])->name('.store');
    Route::get('{thread}', [MessagesController::class, 'show'])->name('.show');
    Route::put('{thread}', [MessagesController::class, 'update'])->name('.update');
    Route::delete('{thread}', [MessagesController::class, 'destroy'])->name('.destroy');
});


require __DIR__ . '/auth.php';
