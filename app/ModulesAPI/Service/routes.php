<?php

$namespace = 'App\ModulesAPI\Service\Controllers';
Route::group([
    'module' => 'Service',
    'prefix'=>'api/v1',
    'namespace' => $namespace
], function () {

    // Lấy danh sách contracts

    Route::get('tickets', 'TestController@index')->name('tickets.index')->middleware('auth:api');

    // // Lấy thông tin contracts theo id
    // Route::get('contract/{id}', 'ContractController@show')->name('contract.show')->middleware('auth:api');;

    // // Thêm contracts mới
    // Route::post('contract', 'ContractController@store')->name('contract.store')->middleware('auth:api');;

    // // Cập nhật thông tin contracts theo id
    // # Sử dụng put nếu cập nhật toàn bộ các trường
    // Route::put('contract/{id}', 'ContractController@update')->name('contract.update')->middleware('auth:api');;

    // // Xóa contracts theo id
    // Route::delete('contract/{id}', 'ContractController@destroy')->name('contract.destroy')->middleware('auth:api');;

});