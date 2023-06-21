<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\GalleryController;
use App\Http\Controllers\Frontend\SevaController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\SigninController;
use App\Http\Controllers\Frontend\SignupController;
use App\Http\Controllers\Frontend\AdminController;

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

Route::get('/',[HomeController::class,'index']);
Route::get('/redirects',[HomeController::class,'redirects']);
Route::get('/about',[AboutController::class,'index']);
Route::get('/gallery',[GalleryController::class,'index']);
Route::get('/seva',[SevaController::class,'index']);
Route::get('/contact',[ContactController::class,'index']);
Route::get('/signin',[SigninController::class,'index']);
Route::get('/signup',[SignupController::class,'index']);
Route::get('/users',[AdminController::class,'user']);
Route::get('/deleteuser/{id}',[AdminController::class,'deleteuser']);
Route::get('/sevalist',[AdminController::class,'sevalist']);
Route::post('/uploadseva',[AdminController::class,'upload']);
Route::get('/deleteseva/{id}',[AdminController::class,'deleteseva']);
Route::get('/updateview/{id}',[AdminController::class,'updateview']);
Route::post('/update/{id}',[AdminController::class,'update']);
Route::post('/feedback',[AdminController::class,'feedback']);
Route::get('/viewfeedback',[AdminController::class,'viewfeedback']);
Route::get('/viewgallery',[AdminController::class,'viewgallery']);
Route::post('/uploadgallery',[AdminController::class,'uploadgallery']);
Route::get('/updateimage/{id}',[AdminController::class,'updateimage']);
Route::post('/updategallery/{id}',[AdminController::class,'updategallery']);
Route::get('/deleteimage/{id}',[AdminController::class,'deleteimage']);
Route::post('/addcart/{id}',[HomeController::class,'addcart']);
Route::get('/showcart/{id}',[HomeController::class,'showcart']);
Route::get('/remove/{id}',[HomeController::class,'remove']);
Route::get('/orders',[AdminController::class,'orders']);
Route::post('/orderconfirm',[HomeController::class,'orderconfirm']);
Route::get('/send',[HomeController::class,'sendnotification']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
