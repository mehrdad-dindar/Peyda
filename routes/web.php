<?php

use App\Http\Controllers\Admin\WarrantyController;
use \App\Http\Controllers\Admin\AdminNotificationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MobileWarrantyController;
use \App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\SubscriberController;
use App\Models\User;
use \App\Http\Controllers\UserNotificationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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
use \App\Http\Controllers\TicketController;

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
Route::post('/validation', 'HomeController@validation')->name('validation');
Route::post('/subscribe',[SubscriberController::class,'subscription'])->name('subscription');
/* TODO UnSubscribe */
/*Route::post('/unsubscribe',[SubscriberController::class,'unsubscription'])->name('unsubscription');*/
Route::get('/test/{id}', function ($id){

    //dd($id);
    /*$warranty=\App\Models\Mobile_warranty::find($id)->first();
    $qrcode=QrCode::size(100)->generate(md5($warranty->id.' __ '.$warranty->created_at));
    return view('test',['qrcode'=>$qrcode]);*/

    $user= User::find($id);
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
        Route::get('/walletHistory', 'WalletController@walletHistory')->name('walletHistory');
        Route::post('/increase_inventory', 'WalletController@purchase')->name('increase');
        Route::get('/increase_inventory/result', 'WalletController@result')->name('walletPurchase.result');
    });

    Route::post('/mobile_change', 'Profile\ProfileController@mobile_change');

    Route::prefix('warranty')->group(function () {
        Route::prefix('mobile')->group(function () {
            Route::get('/all/{status?}', 'MobileWarrantyController@bimeh_all')->name('bimeh_all');
            Route::get('/boughts', 'MobileWarrantyController@bimeh_bought')->name('bimeh_bought');
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
            Route::get('/add/{editId?}/{error?}', 'MobileWarrantyController@bimeh_add')->name('bimeh_add');
            Route::post('/save', 'MobileWarrantyController@save')->name('save');
            Route::post('/edit/{id}', 'MobileWarrantyController@edit')->name('edit');
            Route::get('/cart/{id}', 'MobileWarrantyController@cart')->name('cart');
            Route::get('/{invoice_id}/purchase', 'PaymentController@purchase')->name('purchase');
            Route::get('/{invoice_id}/result', 'PaymentController@result')->name('purchase.result');
            Route::get('/upload-photo/{id}',[MobileWarrantyController::class , 'uploadPhoto'])->name('uploadPhoto');
            Route::post('/insert-photo/{mobile_warranty}/{edit?}',[MobileWarrantyController::class , 'insertPhotos'])->name('insertPhoto');
            Route::get('/edit-photo/{id}',[MobileWarrantyController::class , 'editPhoto'])->name('editPhoto');
            Route::post('/update-photo/{id}',[MobileWarrantyController::class , 'updatePhoto'])->name('updatePhoto');
            Route::get('/print/{id}',[MobileWarrantyController::class,'print'])->name('print');
            Route::get('/html-pdf/{id}', [HTMLPDFController::class,'htmlPdf'])->name('htmlPdf');
        });
    });

    Route::get('/ticketing/overview', [TicketController::class,'overview'])->name('ticketOverviews');

    Route::get('/ticketing/index', [TicketController::class,'index'])->name('tickets');
    Route::get('/ticketing/create', [TicketController::class,'create'])->name('createTicket');
    Route::post('/ticketing/store',[TicketController::class,'store'])->name('storeTicket');
    Route::post('/ticketing/store/{id}',[TicketController::class,'storeThisTicket'])->name('storeThisTicket');
    Route::get('/ticketing/view/{id}',[TicketController::class,'viewTicket'])->name('viewTicket');
    Route::get('/ticketing/close/{id}',[TicketController::class,'closeTicket'])->name('closeTicket');

    Route::get('/notifications',[UserNotificationController::class,'index'])->name('userNotifications');
});


/* Dashboard */
Route::prefix('dashboard')->middleware([CheckPermission::class. ':view-dashboard','auth'])->group(function () {

    Route::get('/', 'Admin\HomeController@index')->name('dashboard');
    Route::prefix('/users')->group(function (){
        Route::get('/all/{status?}', 'Admin\UserController@index')->name('all_users');
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

    Route::get('adminNotif',[AdminNotificationController::class,'index'])->name('adminNotif');

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
    Route::get('/warranties/accepted', [WarrantyController::class,'acceptedIndex'])->name('acceptedIndex');
    Route::get('/warranties/incomplete', [WarrantyController::class,'incompleteIndex'])->name('incompleteIndex');
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

        Route::prefix('/views')->group(function (){
            Route::get('/panel',[SettingsController::class,'getPanelSlider'])->name('panelViews');
            Route::post('/panel/add',[SettingsController::class,'addPanelSlider'])->name('addPanelSlider');
            Route::get('/panel/delete/{panelSlider}',[SettingsController::class,'deletePanelSlider'])->name('deletePanelSlider');
        });
    });

    Route::prefix('/tickets')->group(function (){
        Route::get('/',[TicketController::class,'adminTickets'])->name('adminTickets');
        Route::get('/show/answers/{id}',[TicketController::class,'showResponse'])->name('showResponse');
        Route::post('/add/answer/{id}',[TicketController::class,'addResponse'])->name('addResponse');
    });

    Route::post('/add/images/{id}',[WarrantyController::class,'addImages'])->name('addImages');

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
})->name('product');

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

/* Single Blog */
Route::prefix('/blog')->group(function () {
    Route::get('/اینترنت-ملی-چیست'/*this is single slug*/, function () {
        return view('pages.single');
    })->name('single');
    Route::get('/معرفی-گوشی-های-کوچک',function (){
        return view('pages.single_02');
    })->name('single_02');
    Route::get('/آیفون-13',function (){
        return view('pages.single_03');
    })->name('single_03');
});
/*abaut-us*/
Route::get('/about_us',function (){
    return view('pages.about_us');
})->name('about_us');
/*services*/
Route::get('/warranty',function (){
    return view('pages.our_services');
})->name('our_services');;
/*gifts*/
Route::get('/gifts',function (){
    return view('pages.gifts');
})->name('gift');
/*use_services*/
Route::get('/use_services',function (){
    return view('pages.use_services');
})->name('use_services');
/*blog archive*/
Route::get('/archive_blog',function (){
    return view('pages.archive_blog');
})->name('archive_blog');
/*blog*/
Route::get('/blog',function (){
    return view('pages.blog');
});
/*contact_us*/
Route::get('/contact_us',[ContactController::class, 'index'])->name('contact_us');
Route::post('/contact_us',[ContactController::class, 'save'])->name('save_contact');
