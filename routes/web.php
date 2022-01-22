<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\RoomController;
use App\Http\Controllers\Backend\EventController;
use App\Http\Controllers\Frontend\IndexController;

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



Route::get('/backend/dashboard',[DashboardController::class,'index'])->name('dashboard');

Route::group(['prefix'=> '/backend/room'],function(){
    Route::get('',[RoomController::class,'index'])->name('room.index');
    Route::get('/create',[RoomController::class,'create'])->name('room.create');
    Route::post('/store',[RoomController::class,'store'])->name('room.store');
    Route::get('/edit/{id}',[RoomController::class,'edit'])->name('room.edit');
    Route::put('/update/{id}',[RoomController::class,'update'])->name('room.update');
    Route::get('/delete/{id}',[RoomController::class,'delete'])->name('room.delete');
});

Route::group(['prefix'=> '/backend/event'],function(){
    Route::get('',[EventController::class,'index'])->name('event.index');
    Route::get('/create',[EventController::class,'create'])->name('event.create');
    Route::post('/store',[EventController::class,'store'])->name('event.store');
    Route::get('/edit/{id}',[EventController::class,'edit'])->name('event.edit');
    Route::put('/update/{id}',[EventController::class,'update'])->name('event.update');
    Route::get('/delete/{id}',[EventController::class,'delete'])->name('event.delete');
});



// frontend
Route::get('/',[IndexController::class,'index'])->name('index');