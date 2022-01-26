<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\RoomController;
use App\Http\Controllers\Backend\EventController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\SliderController;
use App\Models\Setting;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Backend\ContactUsController;
use App\Http\Controllers\Frontend\RoomController as FrontendRoomController;
use App\Models\Image;
use App\Models\Service;

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
Route::get('/admin/login',[AuthController::class,'loginForm'])->name('login');
Route::post('/admin/login',[AuthController::class,'LogInToDashboard']);
Route::get('/admin/logout',[AuthController::class,'logout'])->name('logout');

Route::group(['prefix'=> 'backend','middleware'=>'auth'],function(){
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

    Route::group(['prefix'=> '/slider'],function(){
        Route::get('',[SliderController::class,'index'])->name('slider.index');
        Route::get('/create',[SliderController::class,'create'])->name('slider.create');
        Route::post('/store',[SliderController::class,'store'])->name('slider.store');
        Route::get('/edit/{id}',[SliderController::class,'edit'])->name('slider.edit');
        Route::put('/update/{id}',[SliderController::class,'update'])->name('slider.update');
        Route::get('/delete/{id}',[SliderController::class,'delete'])->name('slider.delete');
        Route::get('/deleteImage/{id}',[SliderController::class,'imageDelete'])->name('slider.image.delete');
    });
    Route::group(['prefix'=> '/setting'],function(){
        Route::get('',[SettingController::class,'index'])->name('setting.index');
        Route::post('/store',[SettingController::class,'store'])->name('setting.store');
    });
    Route::group(['prefix'=> '/contactus'],function(){
        Route::get('',[ContactUsController::class,'index'])->name('contactus.index');
    });
});

// frontend
Route::get('/',[IndexController::class,'index'])->name('index');
// frontend Room SIngle Page 
Route::get('/room/{id}',[FrontendRoomController::class,'view'])->name('room.details');
Route::post('/room/booking/{id}',[FrontendRoomController::class,'booking'])->name('book.room');



View::composer('*', function ($view) {
    $sets = Setting::get();
        $setting =[];
        foreach ($sets as $i => $set) {
           $setting[$set->key] = $set->value;
        }
        // dd($setting);
        $setting['logo'] = '';
        $sett = Setting::where('key','logo')->first();
        
        if ($sett->value != null) {
            $setting['logo'] = Image::where('id',$sett->value)->first();
        }
    $servicesnav = Service::get();
    return $view->with(['setting'=>$setting,'servicesnav' => $servicesnav]);   
});