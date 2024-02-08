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
Route::resource('/students',StudentController::class)->names('students');
Route::resource('/guardians',GuardianController::class)->names('guardians');
//Route::get('/guardians/{$id}', 'GuardianController@show')->name('guardians.show');

//Route::get('/guardians/{id}/edit', 'GuardianController@edit')->name('guardians.edit');
