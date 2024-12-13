<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\MataPelajaranController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\StudentSubjectController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\HomeController;

/*
|----------------------------------------------------------------------
| Web Routes
|----------------------------------------------------------------------
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider and all of them
| will be assigned to the "web" middleware group. Make something great!
*/

Route::get('/', function () {
    return redirect()->route('home');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('siswa', SiswaController::class);

Route::resource('guru', GuruController::class);

Route::resource('mata-pelajaran', MataPelajaranController::class);

Route::resource('kelas', KelasController::class);

Route::resource('studentSubjects', StudentSubjectController::class);

Route::resource('scores', ScoreController::class);

