<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployesController;



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


Route::controller(UserController::class)->group(function() {
    Route::get('/register', 'register')->name('register')->middleware('guest');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login')->middleware('guest');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/home', 'home')->name('home')->middleware('auth');
    Route::post('/logout', 'logout')->name('logout')->middleware('auth');
});

Route::post('/employes/store', [EmployesController::class, 'store'])->middleware('auth');

Route::get('/employes/create', [EmployesController::class, 'create'])->middleware('auth');

Route::get('/employes/index', [EmployesController::class, 'index'])->middleware('auth');

Route::get('/employes/edit/{employe}', [EmployesController::class, 'edit'])->middleware('auth');

Route::put('/employes/update/{employe}', [EmployesController::class, 'update'])->middleware('auth');

Route::delete('/employes/{employe}', [EmployesController::class, 'destroy'])->middleware('auth');

Route::get('/employes/show/{employe}', [EmployesController::class, 'show']);

Route::get('/employes/vacation-request/{employe}',[EmployesController::class, 'vacationRequest']);

Route::get('/employes/certificate-request/{employe}',[EmployesController::class, 'certificateRequest']);




