<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

//users
Route::prefix('/user')->group(function () {
    Route::post('/login', 'api\v1\LoginController@login');
    Route::middleware('auth:api')->get('/all', 'api\v1\user\UserController@index');
    Route::middleware('auth:api')->post('/create', 'api\v1\user\UserController@create');
    Route::middleware('auth:api')->post('/resetPass', 'api\v1\user\UserController@resetPass');
});

Route::prefix('tmdt')->middleware('auth:api')->group(function () {
    //Gọi từ APP
    Route::resource('salesorder', 'api\v1\tmdt\SalesOrderController');
    Route::post('/createSalesOrder', 'api\v1\tmdt\SalesOrderController@createSalesOrder'); //gọi từ SAP
    Route::post('/SetStatus', 'api\v1\tmdt\SalesOrderController@SetStatus');
});
