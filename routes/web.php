<?php

use Illuminate\Support\Facades\Route;
use App\Models\Student;
use App\Http\Controllers\RegistrationController;

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
    return view('student');
});

Route::get('/register', [RegistrationController::class, 'index']);
Route::post('/register', [RegistrationController::class, 'register']);
Route::get('/students', [RegistrationController::class, 'view']);
Route::get('/students/create/', [RegistrationController::class, 'create'])->name('student.create');
Route::get('/students/delete/{id}', [RegistrationController::class, 'delete'])->name('student.delete');
Route::get('/students/edit/{id}', [RegistrationController::class, 'edit'])->name('student.edit');
Route::post('/students/update/{id}', [RegistrationController::class, 'update'])->name('student.update');