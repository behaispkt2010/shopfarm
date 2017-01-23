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


use Zizaco\Entrust\Entrust;

Auth::routes();

//Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
/*
 *
 *ADMIN
 *
 */

Route::group(['prefix' => 'admin','middleware' => ['role:admin|editor|kho|staff','auth', 'authorize']], function () {

    Route::get('/', 'DashboardController@index');
    Route::get('/dashboard', 'DashboardAdminController@index');
    //Tin tức
    Route::resource('news', 'NewController');
    Route::get('news/data/json', 'NewController@data');

    //Nhóm tin tức
    Route::resource('category', 'CategoryController');
    Route::get('category/data/json', 'CategoryController@data');

    //permisson
    Route::resource('role', 'RolesController');
    Route::get('role/data/json', 'RolesController@data');

    //permisson
    Route::resource('permission', 'PermissionsController');
    Route::get('permission/data/json', 'PermissionsController@data');


    //Trang
    Route::resource('pages', 'PageController');
    Route::get('pages/data/json', 'PageController@data');

    //Sản phẩm
    Route::resource('products', 'ProductController');
    Route::post('products/AjaxGetProduct', 'ProductController@AjaxGetProduct');

    //Nhóm sp
    Route::resource('categoryProducts', 'CategoryProductController');
    Route::post('categoryProducts/createAjax', 'CategoryProductController@createAjax');
    Route::post('categoryProducts/updateAjax', 'CategoryProductController@updateAjax');



    //Đơn hàng
    Route::resource('orders', 'OrderController');
    //ql kho
    Route::resource('inventory', 'InventoryController');
    //ql sỗ quỹ
    Route::resource('money', 'MoneyController');
    //ql lịch sữ giao dịch
    Route::resource('historyInput', 'HistoryInputController');

    //Quản lý kho
    Route::resource('warehouse', 'WarehouseController');

//    Route::post('warehouse/AjaxInfo', 'WarehouseController@AjaxInfo');
    Route::post('warehouse/AjaxDetail', 'WarehouseController@AjaxDetail');
    Route::post('warehouse/AjaxBank', 'WarehouseController@AjaxBank');
    Route::post('warehouse/AjaxEditBank', 'WarehouseController@AjaxEditBank');
    Route::post('warehouse/AjaxInfo', 'WarehouseController@AjaxInfo');
    Route::post('warehouse/AjaxChangePass', 'WarehouseController@AjaxChangePass');

    //Khách hàng
    Route::resource('customers', 'customerController');
    //Users
    Route::resource('users', 'UserController');
    Route::post('users/AjaxCreateCustomer', 'UserController@AjaxCreateCustomer');
    Route::post('users/AjaxGetDataCustomer', 'UserController@AjaxGetDataCustomer');




    //Nhân sự
    Route::resource('staffs', 'StaffController');
    //Cài đặt
    Route::resource('setting', 'SettingController');
    //Menu
    Route::resource('menu', 'MenuController');
    Route::post('menu/AjaxSave', 'MenuController@AjaxSave');

    //Giao diện
    Route::resource('display', 'DisplayController');
    //Ngôn ngữ
    Route::resource('languages', 'LanguageController');
    //Thống kê truy cập
    Route::resource('statistics', 'StatisticController');
});

/**
 * ajax
 */

Route::post('users/changeAvata', 'UserController@AjaxChangeImage');

/*
 *
 *APP
 *
 */
Route::get('/', 'HomeController@index');



