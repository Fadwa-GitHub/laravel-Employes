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
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/home', 'home')->name('home');
    Route::post('/logout', 'logout')->name('logout');
});

Route::post('/employes/store', [EmployesController::class, 'store']);

Route::get('/employes/create', [EmployesController::class, 'create']);

Route::get('/employes/index', [EmployesController::class, 'index']);

Route::get('/employes/edit/{employe}', [EmployesController::class, 'edit']);

Route::put('/employes/update/{employe}', [EmployesController::class, 'update']);

Route::delete('/employes/destroy/{employe}', [EmployesController::class, 'destroy']);

Route::get('/employes/show/{employe}', [EmployesController::class, 'show']);


