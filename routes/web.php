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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::get('/vote', [App\Http\Controllers\VoteController::class, 'index'])->name('vote');

Route::get('/voteprogram', [App\Http\Controllers\VoteProgramController::class, 'index'])->name('voteprogram');
// Route::get('/tambahcalonprogram', [App\Http\Controllers\ProgramCandidateController::class, 'create'])->name('tambahcalonprogram');


// Route::post('/tambahcalon', [App\Http\Controllers\GeneralCandidateController::class, 'store'])->name('tambahcalon.simpan');

Route::get('/tambahcalon', [App\Http\Controllers\Admin\CandidateController::class, 'create'])->name('tambahcalon');
Route::post('/tambahcalon/simpan', [App\Http\Controllers\Admin\CandidateController::class, 'store'])->name('tambahcalon.simpan');

Route::get('/datastudent', [App\Http\Controllers\DataStudentController::class, 'index'])->name('student.index');
Route::get('/datastudentprogram', [App\Http\Controllers\DataProgramCandidateController::class, 'index'])->name('student.program'); 

Route::get('/datastudent/delete/{calonumums}', [App\Http\Controllers\DataStudentController::class, 'destroy'])->name('student.delete');
Route::get('/datastudentprogram/delete/{calonprograms}', [App\Http\Controllers\DataProgramCandidateController::class, 'destroy'])->name('student.delete');

Route::get('/voteumumcount', [App\Http\Controllers\VoteUmumCountController::class, 'index'])->name('voteumumcount');
Route::get('/voteprogramcount', [App\Http\Controllers\VoteProgramCountController::class, 'index'])->name('voteprogramcount');