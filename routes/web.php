<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Auth::routes();


/*
 *
 *ADMIN
 *
 */

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'DashboardController@index');

    //Tin tức
    Route::resource('news', 'NewController');
    //permisson
    Route::resource('permission', 'PermissionController');
    //Nhóm tin tức
    Route::resource('category', 'CategoryController');
    //Trang
    Route::resource('pages', 'PageController');
    //Đơn hàng
    Route::resource('orders', 'OrderController');
    //Sản phẩm
    Route::resource('products', 'ProductController');
    //ql kho
    Route::resource('inventory', 'InventoryController');
    //Nhóm tin tức
    Route::resource('categoryProducts', 'CategoryProductController');
    //Quản lý kho
    Route::resource('warehouse', 'WarehouseController');
    //Khách hàng
    Route::resource('customers', 'customerController');
    //Users
    Route::resource('users', 'UserController');
    //Nhân sự
    Route::resource('staffs', 'StaffController');
    //Cài đặt
    Route::resource('setting', 'SettingController');
    //Menu
    Route::resource('menu', 'MenuController');
    //Giao diện
    Route::resource('display', 'DisplayController');
    //Ngôn ngữ
    Route::resource('languages', 'LanguageController');
    //Thống kê truy cập
    Route::resource('statistics', 'StatisticController');
});

/*
 *
 *APP
 *
 */
Route::get('/', 'HomeController@index');



