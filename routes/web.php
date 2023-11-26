<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ConstructController;
use App\Http\Controllers\CrmController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SlugController;
use App\Http\Controllers\UserController;
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

Route::controller(MainController::class)->name('main.')->group(function(){
    Route::get("/", 'index')->name('index');

    Route::controller(ConstructController::class)->prefix('construct')->name('construct.')->group(function(){
        Route::get('/', 'index')->name('index');
    });
    Route::controller(SlugController::class)->prefix('slug')->name('slug.')->group(function(){
        Route::get('/', 'index')->name('index');
    }); 
});

Route::middleware('auth')->group(function(){
    Route::controller(CrmController::class)->prefix('crm')->name('crm.')->group(function(){
        Route::get('/', 'index')->name('index');
        Route::resource('companies', CompanyController::class);
        Route::patch('/users/active/{id}', [UserController::class, 'active'])->name('users.active');
        Route::resource('users', UserController::class);
    }); 
});


Route::controller(AuthController::class)->prefix('auth')->name('auth.')->group(function(){
    Route::middleware('guest')->group(function(){
        Route::get('login', 'login')->name('login');
        Route::post('login', 'userLogin')->name('user-login');
        Route::get('register', 'register')->name('register');
        Route::post('register', 'userRegister')->name('user-register');
    });
    Route::get('logout', 'userLogout')->name('user-logout')->middleware('auth');
});