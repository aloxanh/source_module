<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    // return view('welcome');
    return redirect()->route('home');
});

Auth::routes();
//Group Thương Mại Điện Tử
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/uplmavanchuyen', 'tmdt\TmdtController@upload_mavanchuyen');
Route::get('/updonhang', 'tmdt\TmdtController@upload_donhang');
Route::post('importdonhang', 'tmdt\TmdtController@import_donhang')->name('importdonhang');
Route::post('importmavanchuyen', 'tmdt\TmdtController@import_mavanchuyen')->name('importmavanchuyen');
Route::get('phieugiaohang', 'tmdt\TmdtController@get_phieugiaohang')->name('get_phieugiaohang');
Route::post('in_phieugiao', 'tmdt\TmdtController@in_phieugiao')->name('in_phieugiao');
Route::resource('profile', 'UserProfile\ProfileController');
Route::post('changepass', 'UserProfile\ProfileController@changepass');

//Group khác

Route::namespace('Admin')->prefix('admin')->name('admin')->middleware('can:manager-users')->group(function () {

    //Group Admin cho Thương Mại Điện Tử
    Route::resource('users', 'UserController');
    Route::resource('menus', 'MenuController');
    Route::resource('home', 'HomeController');
    Route::resource('roles', 'RoleController');
    Route::post('update_tree', 'MenuController@update_tree')->name('update_tree');

    Route::get('get_quyen', 'RoleController@get_quyen');
    Route::post('search_quyen', 'RoleController@search_quyen');
    Route::get('search_quyen', 'RoleController@search_quyen');

    Route::get('get_sloc', 'RoleController@get_sloc');
    Route::post('search_sloc', 'RoleController@search_sloc');
    Route::get('search_sloc', 'RoleController@search_sloc');

    //search user
    Route::get('search_user', 'UserController@search_user');
    //Group khác
});
Route::get('token', function () {
    echo csrf_token();
});

//test
$router->post('product', 'ProductController@createProduct');   //for creating product

$router->get('product/{id}', 'ProductController@updateProduct'); //for updating product

$router->post('product/{id}', 'ProductController@deleteProduct');  // for deleting product

$router->get('product', 'ProductController@index'); // for retrieving product
