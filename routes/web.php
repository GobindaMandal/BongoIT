<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\SliderController2;

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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix'=>'/slider'],function(){
    Route::get('/add',[SliderController::class,'add'])->name('slider.add');
    Route::post('/store',[SliderController::class,'store'])->name('slider.store');
    Route::get('/manage',[SliderController::class,'manage'])->name('slider.manage');
    Route::get('/delete/{id}',[SliderController::class,'delete'])->name('slider.delete');
    Route::get('/deleteimage/{id}',[SliderController::class,'deleteimage'])->name('slider.deleteimage');
    Route::get('/images',[SliderController::class,'images'])->name('slider.images');
    Route::post('/imagestore',[SliderController::class,'imagestore'])->name('slider.imagestore');
    Route::get('/view/{id}',[SliderController::class,'view'])->name('slider.view');
    Route::get('/edit/{id}',[SliderController::class,'edit'])->name('slider.edit');
    Route::post('/editslider/{id}',[SliderController::class,'editslider'])->name('slider.editslider');
});
Route::group(['prefix'=>'/slider2'],function(){
    Route::get('/add',[SliderController2::class,'add'])->name('slider2.add');
    Route::post('/store',[SliderController2::class,'store'])->name('slider2.store');
    Route::get('/manage',[SliderController2::class,'manage'])->name('slider2.manage');
    Route::get('/delete/{id}',[SliderController2::class,'delete'])->name('slider2.delete');
    Route::get('/view/{id}',[SliderController2::class,'view'])->name('slider2.view');
    Route::get('/edit/{id}',[SliderController2::class,'edit'])->name('slider2.edit');
    Route::post('/editslider/{id}',[SliderController2::class,'editslider'])->name('slider2.editslider');
    Route::get('/addnotice',[SliderController2::class,'addnotice'])->name('slider2.addnotice');
    Route::post('/storenotice',[SliderController2::class,'storenotice'])->name('slider2.storenotice');
    Route::get('/managenotice',[SliderController2::class,'managenotice'])->name('slider2.managenotice');
    Route::get('/deletenotice/{id}',[SliderController2::class,'deletenotice'])->name('slider2.deletenotice');
    Route::get('/viewnotice/{id}',[SliderController2::class,'viewnotice'])->name('slider2.viewnotice');
    Route::get('/editnotice/{id}',[SliderController2::class,'editnotice'])->name('slider2.editnotice');
    Route::post('/editslidernotice/{id}',[SliderController2::class,'editslidernotice'])->name('slider2.editslidernotice');
});
Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth','verified'])->name('dashboard');

require __DIR__.'/auth.php';
