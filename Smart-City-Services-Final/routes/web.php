<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ReqserviceController;
use App\Http\Controllers\AddempController;
use App\Http\Controllers\ElectricianController;
use App\Http\Controllers\CleanerController;
use App\Http\Controllers\PlumberController;

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

// Route::get('/', function () {
//     return redirect('/auth/login');
// });
Route::get('/',[MainController::class,'welcome']);
Route::post('/auth/login',[MainController::class,'loggedin'])->name('auth.login');
// Route::get('/auth/login',[MainController::class,'loggedin'])->name('auth.login');

Route::post('/auth/register',[MainController::class,'registered'])->name('auth.register');
Route::get('/auth/logout',[MainController::class,'logout'])->name('auth.logout');

// Route::group(['middleware'=>['AuthCheck']], function(){
    Route::get('/auth/login',[MainController::class,'login'])->name('auth.login');
    Route::get('/auth/register',[MainController::class,'register'])->name('auth.register');

    Route::get('/admin/homepage',[MainController::class,'adminhommepage']);
    //adding emp route
Route::get('admin/addemPage',[AddempController::class,'addemp'])->name('admin.addemPage');
Route::post('admin/addemPage',[AddempController::class,'add'])->name('admin.addemPage');

//customer
Route::get('/customer/homepage',[ReqserviceController::class,'homepage'])->name('customer.homepage');
Route::post('/customer/homepage',[ReqserviceController::class,'reqservice'])->name('customer.homepage');
Route::get('/customer/details',[CustomerController::class,'customer_details'])->name('customer.details');


//employee

//shojib employee adding cl el pl
Route::get('/elemp/homepage',[ElectricianController::class,'Electrician'])->name('employee.electricianHome');
Route::post('/elemp/homepage',[ElectricianController::class,'addElectrician'])->name('employee.electricianHome');


Route::get('/clemp/homepage',[cleanerController::class,'Cleaner'])->name('employee.cleanerHome');
Route::post('/clemp/homepage',[cleanerController::class,'addCleaner'])->name('employee.cleanerHome');


Route::get('/plemp/homepage',[plumberController::class,'Plumber'])->name('employee.plumberHome');
Route::post('/plemp/homepage',[plumberController::class,'addPlumber'])->name('employee.plumberHome');

//for electrician update and delete

Route::get('/elshow',[ElectricianController::class,'show'])->name('employee.el_emp_show');
Route::get('/update/{id}',[ElectricianController::class,'update'])->name('employee.el_emp_show');
Route::post('/edit',[ElectricianController::class,'edit'])->name('edit');

Route::get('delete/{id}',[ElectricianController::class,'delete']);


//for cleaner update and delete
Route::get('/clshow',[CleanerController::class,'show'])->name('employee.cl_emp_show');
Route::get('/update/{id}',[CleanerController::class,'update'])->name('employee.cl_emp_show');
Route::post('/edit',[CleanerController::class,'cedit'])->name('edit');

Route::get('cdelete/{id}',[CleanerController::class,'delete']);

//for plumber update and delete
Route::get('/plshow',[PlumberController::class,'show'])->name('employee.pl_emp_show');
Route::get('/update/{id}',[PlumberController::class,'update'])->name('employee.pl_emp_show');
Route::post('/edit',[PlumberController::class,'edit'])->name('edit');

Route::get('delete/{id}',[PlumberController::class,'delete']);

// });



// Route::get('/elemp/homepage',[MainController::class,'elemphome']);
// Route::get('/clemp/homepage',[MainController::class,'clemphome']);
// Route::get('/plemp/homepage',[MainController::class,'plemphome']);





