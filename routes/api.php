<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Customer_Controller;
use App\Http\Controllers\Category_Controller;
use App\Http\Controllers\Branch_Controller;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function(){
    echo "Hello World";
});

Route::post('/Customer',[Customer_Controller::class,'create']);
Route::get('/Customer',[Customer_Controller::class,'showAll']);
Route::get('/Customer/{Customer_ID}',[Customer_Controller::class,'showById']);
Route::patch('/Customer/{Customer_ID}',[Customer_Controller::class,'update']);
Route::delete('/Customer/{Customer_ID}',[Customer_Controller::class,'destroy']);

Route::post('/Admin/Category',[Category_Controller::class,'create']);
Route::get('/Admin/Category',[Category_Controller::class,'showAll']);

Route::post('/Admin/Branch',[Branch_Controller::class,'create']);
Route::get('/Admin/Branch',[Category_Controller::class,'showAll']);