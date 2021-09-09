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

/* front */
Route::get('/', 'HomeController@index')->name('index');

Route::get('/single', function () {
    return view('single');
});
/* profile */
Route::prefix('panel')->group(function () {
    Route::get('/', 'Profile\ProfileController@index')->name('panel');
    Route::get('/profile', 'Profile\ProfileController@profile')->name('profile');
    Route::get('/edit_profile', 'Profile\ProfileController@edit_profile')->name('edit_profile');
    Route::post('/save_profile_info', 'Profile\ProfileController@save_profile')->name('save_profile_info');
    Route::prefix('wallet')->group(function (){
        Route::get('/', 'WalletController@index')->name('wallet');
        Route::post('/increase_inventory', 'WalletController@purchase')->name('increase');
        Route::get('/increase_inventory/result', 'WalletController@result')->name('walletPurchase.result');
    });
    Route::prefix('warranty')->group(function () {
        Route::prefix('mobile')->group(function () {
            Route::get('/', 'MobileWarrantyController@bimeh_all')->name('bimeh_all');
            Route::get('/add', 'MobileWarrantyController@bimeh_add')->name('bimeh_add');
            Route::post('/save', 'MobileWarrantyController@save')->name('save');
            Route::get('/cart', 'MobileWarrantyController@cart')->name('cart');
            Route::get('/{invoice_id}/purchase', 'PaymentController@purchase')->name('purchase');
            Route::get('/{invoice_id}/result', 'PaymentController@result')->name('purchase.result');
        });
    });
});


/* Dashboard */
Route::prefix('dashboard')->group(function () {
    Route::get('/', 'Admin\HomeController@index')->name('dashboard');
    Route::resource('/users', 'Admin\UserController');
    Route::post('/warranties', 'Admin\WarrantyController@index');
    Route::get('/warranties/create', 'Admin\WarrantyController@create');
    Route::post('/postajax', 'Admin\WarrantyController@store');
    Route::prefix('/settings')->group(function (){
        Route::get('/brand', 'Admin\SettingsController@getPhoneBrands');
        Route::post('/brand/store', 'Admin\SettingsController@storePhoneBrands');
        Route::post('/model/{id}', 'Admin\SettingsController@getPhoneModel');
    });

});
Route::get('/get_model', 'PhoneBrandController@get_model');

Auth::routes(['verify' => true]);
