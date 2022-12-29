<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LoginAPIController;
use App\Http\Controllers\AddempAPIController;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/customer/list',[CustomerController::class,'APIcustomer']);
Route::get('/employee/list',[EmployeeController::class,'APIemployee']);
Route::get('/employee/list/pl',[EmployeeController::class,'APIemployeepl']);
Route::get('/employee/list/cl',[EmployeeController::class,'APIemployeecl']);
// Route::post('/customer/list',[CustomerController::class,'APIPost']);

Route::post('/login',[LoginAPIController::class,'login']);
Route::post('/addemp',[AddempAPIController::class,'addemp']);
Route::post('/registration',[CustomerController::class,'register']);
Route::post('/userreq',[CustomerController::class,'userreq']);
//s
Route::get("data",[ApiController::class,"getData"]);
Route::get("datap",[ApiController::class,"getDatap"]);
Route::get("datae",[ApiController::class,"getDatae"]);

 Route::post("data",[ApiController::class,"postData"]);


 Route::post("elogin",[ApiController::class,"login"]);

 Route::delete("delete/{id}",[ApiController::class,"delete"]);
