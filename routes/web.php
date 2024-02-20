<?php

use App\Http\Controllers\GuardianController;
use App\Http\Controllers\StudentController;
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
    return view('welcome');
});
//});
Route::put('/students/{id}', [StudentController::class,'update'])->name('students.update');
Route::resource('/students',StudentController::class)->names('students');
//Route::resource('/guardians',GuardianController::class)->names('guardians');
////Route::get('/guardians/{$id}', 'GuardianController@show')->name('guardians.show');

Route::prefix('students')->group(function () {
    Route::get('/', [StudentController::class, 'index'])->name('students.index');
    Route::get('/create', [StudentController::class, 'create'])->name('students.create');
    Route::post('/', [StudentController::class, 'store'])->name('students.store');
    Route::get('/{student}', [StudentController::class, 'show'])->name('students.show');
   // Route::get('/{student}/edit', [StudentController::class, 'edit'])->name('students.edit');
    //Route::post('/students/{id}', [StudentController::class, 'update'])->name('students.update');
    //  Route::patch('/{student}', [StudentController::class, 'update'])->name('students.update');
    Route::delete('/{student}', [StudentController::class, 'destroy'])->name('students.destroy');
    Route::post('/store',[StudentController::class,'store'])->name('store');
    Route::post('/student/store', 'StudentController@store')->name('student.store');
    Route::get('/students/{id}/edit-data', 'StudentController@editData')->name('students.edit-data');

});

// Routes for Guardian Management
Route::prefix('guardians')->group(function () {
    Route::get('/', [GuardianController::class, 'index'])->name('guardians.index');
    Route::get('/create', [GuardianController::class, 'create'])->name('guardians.create');
    Route::post('/', [GuardianController::class, 'store'])->name('guardians.store');
    Route::get('/{guardian}', [GuardianController::class, 'show'])->name('guardians.show');
    Route::get('/{guardian}/edit', [GuardianController::class, 'edit'])->name('guardians.edit');
    Route::put('/{guardian}', [GuardianController::class, 'update'])->name('guardians.update');
    Route::delete('/{guardian}', [GuardianController::class, 'destroy'])->name('guardians.destroy');
    Route::post('/guardian/store', 'GuardianController@store')->name('guardian.store');
});

