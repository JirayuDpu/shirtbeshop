<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('layout.main');
});

//Route::get('count/{id}', 'ManuController@count');




Route::get('/', 'FrontController@index')->name('home1');
// Route::get('/shirt/{id?}', 'FrontController@shirt')->name('shirt');
Route::get('shop/{id}', 'FrontController@shop')->name('shop');
Route::get('shirts01', 'FrontController@shirts01')->name('shirts01');


// Route::get('categorymanu/{id?}', 'CategorymanuContrller@show')->name('manuproduct');

//------------------------------------------------------------------------------

Route::resource('/cart', 'CartController');
Route::get('/add-items/{id}', 'CartController@addItems')->name('cart.addItems');

//------------------------------------------------------------------------------


Route::resource('select', 'SelectProductsController');

//Route::get('omiseaddress', 'OmiseAddressController@index');

// Route::post('omisestore', [
//     'https' => true,
//     'as'    => 'omisestore.omisestore',
//     'uses'  => 'OmiseController@omisestore'
// ]);



Route::get('shirts02', 'FrontController@shirts02');
Route::get('shirts03', 'FrontController@shirts03')->name('shirts03');


Route::get('/recommend/{id?}', 'FrontController@recommend');
Route::get('/productnew/{id?}', 'FrontController@productnew');
//Route::get('/manu/{id?}', 'ManuController@index');

Route::resource('manu', 'ManutoContrller');

Route::get('discount', 'FrontController@discount');

//Route::post('manus', 'ManuContrller@store');









//php artisan make:auth//
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'Auth\LoginController@logout');
//----------------------
Route::resource('paymant', 'PatmentController');
Route::post('paymantstore', 'PatmentController@store');



Route::group(['prefix' => 'admin', 'middleware' => ['auth','admin']], function()
{
	Route::get('/', function()
	{
		return view ('admin.index');
	})->name('admin.index');


    Route::resource('products', 'ProductsController');
    Route::resource('category', 'CategoriesController');
    Route::resource('colors', 'ColorsController');
    Route::resource('sizes', 'SizesController');
    Route::resource('promotions', 'PromotionController');
    Route::resource('recommend', 'RecommendController');
    Route::resource('promotion_new', 'Promotion_newController');
    

    Route::post('productsstore', 'ProductsController@store');

  





    
    Route::get('orders/{type?}', 'OrderController@orders');

// ----------------SystemPaymentAdmin ---------------
    Route::get('payment/{type?}', 'PatmentController@payments');

    Route::get('Amin/payments/image_payment/{id?}', 'PatmentController@images_payments')->name('admin.payments.image_payment'); //Do images

     Route::post('payment/{id}', 'PatmentController@update')->name('update.payment');


// ------------  END SystemPayment -------------

    Route::post('toggledeliver/{orderId}', 'OrderController@toggledeliver')->name('toggle.deliver');


    Route::resource('omise', 'OmiseAddressController');
});

// ----------------SystemPayment ---------------

   
    Route::get('paymant/create/{id?}', 'PatmentController@create');
    Route::get('payment/{type?}', 'PatmentController@payments');
  //  Route::get('user/paymentusers/pay/{type?}', 'AddresstwoController@paymentusers');
// ------------  END SystemPayment -------------



Route::resource('omiseaddress', 'OmiseAddressController');
//Route::post('omiseaddress', 'OmiseAddressController@index');





Route::group(['middleware' => 'auth'], function () // สร้าง Order ตอนสี่งซื้อสินค้าใน cart
{
    //-----------------------สร้าง Order ตอนสี่งซื้อสินค้าใน cart-----------------------------------------
    Route::get('toorder', 'CheckoutController@toorders')->name('checkout.toorders');

    
    //---------------------------------------------------------------------------------------------

     Route::get('user/orders/{type?}', 'OrderController@orderusers');

     // ----------------SystemPayment ---------------
    Route::get('user/payment/{type?}', 'PatmentController@paymentuser');


    
    // ------------  END SystemPayment -------------
     
    Route::get('checkoutomise', 'OmiseController@index');


});

Route::get('checkout', 'CheckoutController@step1');