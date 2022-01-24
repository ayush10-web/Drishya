<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\RoomController;
use App\Http\Controllers\Backend\EventController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Backend\ServiceController;


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

//login form
Route::get('/admin/login',[AuthController::class,'loginForm'])->name('login.form');
Route::post('/admin/login/check',[AuthController::class,'LogInToDashboard'])->name('login');

Route::group(['prefix'=> 'backend'],function(){
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

    Route::group(['prefix'=> '/room'],function(){
        Route::get('',[RoomController::class,'index'])->name('room.index');
        Route::get('/create',[RoomController::class,'create'])->name('room.create');
        Route::post('/store',[RoomController::class,'store'])->name('room.store');
        Route::get('/edit/{id}',[RoomController::class,'edit'])->name('room.edit');
        Route::put('/update/{id}',[RoomController::class,'update'])->name('room.update');
        Route::get('/delete/{id}',[RoomController::class,'delete'])->name('room.delete');
        Route::get('/deleteImage/{id}',[RoomController::class,'imageDelete'])->name('room.image.delete');
    });

    Route::group(['prefix'=> '/event'],function(){
        Route::get('',[EventController::class,'index'])->name('event.index');
        Route::get('/create',[EventController::class,'create'])->name('event.create');
        Route::post('/store',[EventController::class,'store'])->name('event.store');
        Route::get('/edit/{id}',[EventController::class,'edit'])->name('event.edit');
        Route::put('/update/{id}',[EventController::class,'update'])->name('event.update');
        Route::get('/delete/{id}',[EventController::class,'delete'])->name('event.delete');
    });

    Route::group(['prefix'=> '/service'],function(){
        Route::get('',[ServiceController::class,'index'])->name('service.index');
        Route::get('/create',[ServiceController::class,'create'])->name('service.create');
        Route::post('/store',[ServiceController::class,'store'])->name('service.store');
        Route::get('/edit/{id}',[ServiceController::class,'edit'])->name('service.edit');
        Route::put('/update/{id}',[ServiceController::class,'update'])->name('service.update');
        Route::get('/delete/{id}',[ServiceController::class,'delete'])->name('service.delete');
    });
});

// frontend
Route::get('/',[IndexController::class,'index'])->name('index');