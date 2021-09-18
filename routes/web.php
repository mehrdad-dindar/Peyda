<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use \App\Casts\EncryptCast;
use \App\Http\Controllers\Admin\Shop\CategoryController;
use \App\Http\Controllers\Admin\Shop\ProductController;
use \App\Http\Controllers\Admin\Shop\DiscountController;
use \App\Http\Controllers\Admin\Shop\BrandController;
use \App\Http\Controllers\Admin\RoleController;

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
    Route::post('/check_notif', 'UserNotificationController@check_notif')->name('check_notif');
    Route::post('/save_profile_info', 'Profile\ProfileController@save_profile')->name('save_profile_info');
    Route::prefix('wallet')->group(function (){
        Route::get('/', 'WalletController@index')->name('wallet');
        Route::post('/increase_inventory', 'WalletController@purchase')->name('increase');
        Route::get('/increase_inventory/result', 'WalletController@result')->name('walletPurchase.result');
    });
    Route::post('/mobile_change', 'Profile\ProfileController@mobile_change');
    Route::prefix('warranty')->group(function () {
        Route::prefix('mobile')->group(function () {
            Route::get('/', 'MobileWarrantyController@bimeh_all')->name('bimeh_all');
            Route::get('/uses', 'UseWarrantyController@useAll')->name('use_all');
            Route::get('/use_faraguaranty/{id}', 'UseWarrantyController@index')->name('bimeh_use');
            Route::get('/use/edit/{id}', 'UseWarrantyController@use_edit')->name('bimeh_use_edit');
            Route::get('/transfer_faraguaranty/{id}', 'TransferWarrantyController@index')->name('bimeh_transfer');
            Route::post('/transfer_store', 'TransferWarrantyController@transfer_store')->name('transfer_store');
            Route::get('/receive_warranty', 'TransferWarrantyController@receive_create')->name('receive_create');
            Route::post('/receive_warranty/store', 'TransferWarrantyController@receive_store')->name('receive_store');
            Route::post('/store_use/{edit?}', 'UseWarrantyController@store')->name('store_use');
            Route::post('projects/media', 'UseWarrantyController@storeMedia')
                ->name('projects.storeMedia');
            Route::get('/add', 'MobileWarrantyController@bimeh_add')->name('bimeh_add');
            Route::post('/save', 'MobileWarrantyController@save')->name('save');
            Route::get('/cart/{id}', 'MobileWarrantyController@cart')->name('cart');
            Route::get('/{invoice_id}/purchase', 'PaymentController@purchase')->name('purchase');
            Route::get('/{invoice_id}/result', 'PaymentController@result')->name('purchase.result');
        });
    });
});


/* Dashboard */
Route::prefix('dashboard')->middleware(\App\Http\Middleware\CheckPermission::class. ':view-dashboard')
            ->group(function () {
    Route::get('/', 'Admin\HomeController@index')->name('dashboard');
    Route::prefix('/users')->group(function (){
        Route::get('/', 'Admin\UserController@index');
        Route::get('/edit/{id}', 'Admin\UserController@create');
        Route::post('/auth', 'Admin\UserController@store');
    });

    Route::resource('categories','Admin\Shop\CategoryController');
    Route::get('/delete/category/{category}',[CategoryController::class,'destroy'])->name('category-delete');
    /*Route::get('/',[Admin\Shop\CategoryController::class,'index'])->name('categories');
    Route::get('/{category}/edit',[Admin\Shop\CategoryController::class,'edit'])->name('category-edit');
    Route::post('/store',[Admin\Shop\CategoryController::class,'store'])->name('category-store');
    Route::patch('/{category}',[Admin\Shop\CategoryController::class,'update'])->name('category-update');
    Route::get('/delete/{category}',[Admin\Shop\CategoryController::class,'destroy'])->name('category-delete');*/


    Route::post('verify/brand_image', 'Admin\Shop\BrandController@verifyBrand')->name('verify.brand.image');
    Route::resource('brands','Admin\Shop\BrandController');
    Route::get('/delete/brand/{brand}',[BrandController::class,'destroy'])->name('brand-delete');

    Route::resource('products.pictures','Admin\Shop\PictureController');

    Route::resource('products','Admin\Shop\ProductController');
    Route::get('/delete/product/{product}',[ProductController::class,'destroy'])->name('product-delete');

    Route::resource('products.discounts','Admin\Shop\DiscountController');

    Route::resource('roles','Admin\RoleController');
    Route::get('/delete/role/{role}',[RoleController::class,'destroy'])->name('role-delete');

    Route::get('/warranties', 'Admin\WarrantyController@index');
    Route::get('/warranties/create', 'Admin\WarrantyController@create');
    Route::get('/warranties/show/{id}', 'Admin\WarrantyController@show');
    Route::get('/warranties/use', 'Admin\WarrantyController@useWarranty');
    Route::get('/warranties/show/admit/{id}', 'Admin\WarrantyController@show_admit');
    Route::post('/warranties/admit', 'Admin\WarrantyController@admit');
    Route::post('/warranties/admit/use', 'Admin\WarrantyController@admit_use');
    Route::post('/postajax', 'Admin\WarrantyController@store');

    Route::prefix('/settings')->group(function (){
        Route::get('/brand', 'Admin\SettingsController@getPhoneBrands');
        Route::get('/brand/delete/{id}', 'Admin\SettingsController@deletePhoneBrand');
        Route::post('/brand/store', 'Admin\SettingsController@storePhoneBrands');
        Route::get('/model/{id}', 'Admin\SettingsController@getPhoneModel');
        Route::get('/model/delete/{id}/{brand_id}', 'Admin\SettingsController@deletePhoneModel');
        Route::post('/model/store/{id}', 'Admin\SettingsController@storePhoneModel');
    });

});
Route::get('/get_model', 'PhoneBrandController@get_model');

Auth::routes(['verify' => true]);
