<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\crudController;
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

// Route::middleware(['auth:web'])->group(function () {
    Route::get('/', [crudController::class, 'index'])->name('Beranda');
    Route::get('/create-data', [crudController::class, 'create'])->name('create-data');
    Route::post('/create-data', [crudController::class, 'store'])->name('create-data');
    Route::get('/edit-data/{id}', [crudController::class, 'edit'])->name('edit-user');
    Route::post('/edit-data/{id}', [crudController::class, 'update'])->name('edit-user');
    Route::get('/delete-data/{id}', [crudController::class, 'destroy'])->name('delete-data');
    Route::get('/logout', [authController::class, 'logout'])->name('Logout');
// });
Route::get('/login', [authController::class, 'indexLogin'])->name('login');
Route::post('/login', [authController::class, 'login']);

Route::get('/register', [authController::class, 'indexRegister'])->name('register');
Route::post('/register', [authController::class, 'register']);
