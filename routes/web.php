<?php

use App\Http\Controllers\Admin\WarrantyController;
use App\Http\Controllers\MobileWarrantyController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use \App\Casts\EncryptCast;
use \App\Http\Controllers\Admin\Shop\CategoryController;
use \App\Http\Controllers\Admin\Shop\ProductController;
use \App\Http\Controllers\Admin\Shop\DiscountController;
use \App\Http\Controllers\Admin\Shop\BrandController;
use \App\Http\Controllers\Admin\RoleController;
use \App\Http\Middleware\CheckPermission;
use App\Http\Controllers\Admin\Shop\PropertyGroupController;
use App\Http\Controllers\Admin\Shop\PropertyController;
use \App\Http\Controllers\Admin\Shop\ProductPropertyController;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use \App\Http\Controllers\HTMLPDFController;

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
Route::get('/html-pdf', [HTMLPDFController::class,'htmlPdf'])->name('htmlPdf');
Route::get('/test/{id}', function ($id){

    //dd($id);
    /*$warranty=\App\Models\Mobile_warranty::find($id)->first();
    $qrcode=QrCode::size(100)->generate(md5($warranty->id.' __ '.$warranty->created_at));
    return view('test',['qrcode'=>$qrcode]);*/

    $user=\App\Models\User::find($id);
    return $user->notificationuser->notification_id;

});

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
            Route::get('/uses/{msg?}', 'UseWarrantyController@useAll')->name('use_all');
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
            Route::get('/upload-photo/{id}',[MobileWarrantyController::class , 'uploadPhoto'])->name('uploadPhoto');
            Route::post('/insert-photo/{mobile_warranty}',[MobileWarrantyController::class , 'insertPhotos'])->name('insertPhoto');
            Route::get('/print/{id}',[MobileWarrantyController::class,'print'])->name('print');
        });
    });
});


/* Dashboard */
Route::prefix('dashboard')->middleware([CheckPermission::class. ':view-dashboard','auth'])
            ->group(function () {
    Route::get('/', 'Admin\HomeController@index')->name('dashboard');
    Route::prefix('/users')->group(function (){
        Route::get('/', 'Admin\UserController@index');
        Route::get('/edit/{id}/{auth?}', 'Admin\UserController@create');
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

    Route::resource('propertyGroups','Admin\Shop\PropertyGroupController');
    Route::get('/delete/group-property/{id}',[PropertyGroupController::class,'destroy'])->name('group-property-delete');

    Route::resource('properties','Admin\Shop\PropertyController');
    Route::get('/delete/property/{id}',[PropertyController::class,'destroy'])->name('property-delete');

    Route::resource('products.discounts','Admin\Shop\DiscountController');

    Route::get('/products/{product}/properties',[ProductPropertyController::class,'index'])->name('products.properties.index');
    Route::post('/products/{product}/properties',[ProductPropertyController::class,'store'])->name('products.properties.store');
    Route::get('/products/{product}/properties/create',[ProductPropertyController::class,'create'])->name('products.properties.create');

    Route::resource('roles','Admin\RoleController');
    Route::get('/delete/role/{role}',[RoleController::class,'destroy'])->name('role-delete');

    Route::get('/warranties', 'Admin\WarrantyController@index');
    Route::get('/warranties/waiting', [WarrantyController::class,'waitingIndex'])->name('waitingIndex');
    Route::get('/warranties/create', 'Admin\WarrantyController@create');
    Route::get('/warranties/show/{id}', 'Admin\WarrantyController@show');
    Route::get('/warranties/use', 'Admin\WarrantyController@useWarranty');
    Route::get('/warranties/show/admit/{id}', 'Admin\WarrantyController@show_admit');
    Route::post('/warranties/admit', 'Admin\WarrantyController@admit');
    Route::post('/warranties/admit/use', 'Admin\WarrantyController@admit_use');
    Route::post('/postajax', 'Admin\WarrantyController@store');

    Route::prefix('/settings')->group(function (){
        Route::get('/brand', 'Admin\SettingsController@getPhoneBrands')->name('getPhoneBrand');
        Route::get('/brand/delete/{id}', 'Admin\SettingsController@deletePhoneBrand')->name('deletePhoneBrand');
        Route::post('/brand/store', 'Admin\SettingsController@storePhoneBrands')->name('storePhoneBrand');
        Route::get('/model/{id}', 'Admin\SettingsController@getPhoneModel')->name('getPhoneModel');
        Route::get('/model/delete/{id}/{brand_id}', 'Admin\SettingsController@deletePhoneModel')->name('deletePhoneModel');
        Route::post('/model/store/{id}', 'Admin\SettingsController@storePhoneModel')->name('storePhoneModel');
    });

});
Route::get('/get_model', 'PhoneBrandController@get_model');

Route::get('/login', 'Auth\AuthController@loginPhone')->name('login');
Route::get('/login-email', 'Auth\AuthController@loginEmail')->name('loginEmail');
Route::get('/register', 'Auth\AuthController@register')->name('register');
Route::post('/register', 'Auth\AuthController@doRegister')->name('doRegister');
Route::post('/login-phone', 'Auth\AuthController@doLoginPhone')->name('doLoginPhone');
Route::post('/login-email', 'Auth\AuthController@doLoginEmail')->name('doLoginEmail');
Route::get('/verify', 'Auth\AuthController@verify')->name('verify');
Route::post('/doVerify', 'Auth\AuthController@doVerify')->name('doVerify');
Route::get('/logout', 'Auth\AuthController@logout')->name('logout');

/* Shop & Archive & Search Result */
Route::get('/shop',function (){
    return view('shop.index');
})->name('shop');

/* Category */
Route::get('/گوشی-موبایل',function (){
    return view('shop.archive');
});

/* Single product */
Route::get('/گوشی-موبایل/Samsung-galaxy-note-9',function (){
    return view('shop.product');
});

/* Cart */
Route::get('/cart', function (){
    return view('shop.cart');
})->name('shop_cart');

/* Checkout */
Route::get('/checkout', function (){
    return view('shop.checkout');
})->name('shop_checkout');

/* Front Page */
Route::get('/home',function (){
    return view('front');
});

/* Blog Archive */

/* Single Blog */
