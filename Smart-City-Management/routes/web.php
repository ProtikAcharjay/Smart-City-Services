<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AddempController;

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
    return redirect('/auth/login');
});

Route::post('/auth/login',[MainController::class,'loggedin'])->name('auth.login');

Route::post('/auth/register',[MainController::class,'registered'])->name('auth.register');
Route::get('/auth/logout',[MainController::class,'logout'])->name('auth.logout');

Route::group(['middleware'=>['AuthCheck']], function(){
    Route::get('/auth/login',[MainController::class,'login'])->name('auth.login');
    Route::get('/auth/register',[MainController::class,'register'])->name('auth.register');
    Route::get('/customer/homepage',[MainController::class,'homepage']);
    Route::get('/admin/homepage',[MainController::class,'adminhommepage']);
    //adding emp route
Route::get('admin/addemPage',[AddempController::class,'addemp'])->name('admin.addemPage');
Route::post('admin/addemPage',[AddempController::class,'add'])->name('admin.addemPage');
});

Route::get('/elemp/homepage',[MainController::class,'elemphome']);
Route::get('/clemp/homepage',[MainController::class,'clemphome']);
Route::get('/plemp/homepage',[MainController::class,'plemphome']);





