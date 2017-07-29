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

// Route::get('/', function () {
//     return view('layout.main');
// });

//Route::get('count/{id}', 'ManuController@count');

//----------------------------------Auth--------------------------------------------
//php artisan make:auth//
Auth::routes(); 
// ForgotPasswordController , LoginController, RegisterController,ResetPasswordController

//----------------------------------logout--------------------------------------------
Route::get('/logout', 'Auth\LoginController@logout');

//------------------------------------End Auth------------------------------------------------





//------------------------------------------------------สมัครสมาชิก-------------------------------------------------------

//-------------------------------------------------------------------------------------
//|view => auth.register  |, Controller => RegisterController , | model => User |
//-------------------------------------------------------------------------------------

//RedirectIfAuthenticated คือการส่งข้อมูลของแต่ละ Auth ให้ไปหน้าที่เรากำหนด

//php artisan make:auth//

Route::get('/home', 'HomeController@index')->name('home');

//-------------------------------------------------------สิดสุดสมัครสมาชิก----------------------------------------------


//---------------------------------------------------------เข้าสู่ระบบ---------------------------------------------------

//-------------------------------------------------------------------------------------
//|view => auth.login  |, Controller => LoginControllerController , | model => User |
//-------------------------------------------------------------------------------------

//RedirectIfAuthenticated คือการส่งข้อมูลของแต่ละ Auth ให้ไปหน้าที่เรากำหนด


//Route::get('/home', 'HomeController@index')->name('home');

//เป็นการล็อกอินผ่านกะบวนการ middleware ตัวอย่างด้านล่าง ถ้าสถานะเป็นadmin จะเด้งไปที่    Route::get('/', function()
                                                                                        // {
                                                                                        //     return view ('admin.index');
                                                                                        // })->name('admin.index');

//ถ้าเป็นUser คำสั่งจะส่งไปที่ home  ดูที่ RedirectIfAuthenticated คือการส่งข้อมูลของแต่ละ Auth ให้ไปหน้าที่เรากำหนด


//Route::group(['prefix' => 'admin', 'middleware' => ['auth','admin']], function()

//------------------------------------------------------------สิดสุดเข้าสู่ระบบ-------------------------------------------



//-------------------------------------------------ข้อมูบสินค้า----------------------------------------------------------------

//--------------------------------------หน้home----------------------------------------

//|view => front.home  |, Controller => FrontController@index , | model => Product |

Route::get('/', 'FrontController@index')->name('home1'); // => FrontController@index
//-------------------------------------สิดสุดหน้home-----------------------------------


//--------------------------------------หน้าคลิกดูสินค้า----------------------------------------

//|view => front.shop  |, Controller => FrontController@index , | model => Product |

Route::get('shop/{id}', 'FrontController@shop')->name('shop'); // => FrontController@shop
//-------------------------------------สิดสุดหน้home-----------------------------------


//--------------------------------------หน้าคลิกเมนูสินค้า----------------------------------------

//|view => layout.manu  |, Controller => ManutoContrller , | model => Category |

Route::resource('manu', 'ManutoContrller');

//-------------------------------------สิดสุดคลิกเมนูสินค้า-----------------------------------

//--------------------------------------หน้าสินค้าแนะนำ----------------------------------------

//|view => front.recommend  |, Controller => FrontController@recommend , | model => recommend , Product |

Route::get('/recommend/{id?}', 'FrontController@recommend');

//-------------------------------------สิดสุดคลิกเมนูสินค้า-----------------------------------


//--------------------------------------หน้าสินค้าใหม่----------------------------------------

//|view => front.new  |, Controller => FrontController@newproduct , | model => Promotion , Product |

Route::get('/newproduct/{id?}', 'FrontController@newproduct');

//-------------------------------------สิดสุดคลิกเมนูสินค้าใหม่-----------------------------------

//--------------------------------------หน้าสินค้าลดราคา----------------------------------------

//|view => front.discount  |, Controller => FrontController@discount , | model => Product |

Route::get('discount', 'FrontController@discount');


//-------------------------------------สิดสุดคลิกเมนูสินค้าลดราคา-----------------------------------


//--------------------------------ค้าหาสินค้า----------------------------------------------

//|view => select.inde  |, Controller => SelectProductsController@index , | model => Product |

Route::resource('select', 'SelectProductsController');

Route::get('search', 'SelectProductsController@search');

//------------------------------------สิดสุด ค้าหาสินค้า-----------------------------------



//----------------------------------------------------สิดสุดเข้อมูบสินค้า-----------------------------------------------




//-------------------------------------------------สั่งซื้อสินค้าและจัดส่ง----------------------------------------------------------------


//---------------------------------------------ระบบตะกร้าสินค้า------------------------------------------------

Route::resource('/cart', 'CartController');
Route::get('/add-items/{id}', 'CartController@addItems')->name('cart.addItems');

 //เมื่อกดยืนยันสั่งซื้อคำสั่งจะไปทำงานในส่วน ['middleware' => 'auth'] => Route::get('toorder', 'CheckoutController@toorders')->name('checkout.toorders');

         
    // Route::get('checkoutomise', 'OmiseController@index');
    // Route::get('omisetobank', 'OmiseController@bank');

    // //แจ้งชำระเงินแบบโอนธรรมดา
    // Route::get('paymentorder', 'PatmentController@createpaymentorder');
    // Route::post('createpaymentorder', 'PatmentController@paymentorder');

    // //แจ้งชำระเงินของระบบบัตรเดบิต
    // Route::get('paymentomise', 'OmiseAddressController@createpaymentomise');
    // Route::post('createpaymentorder', 'OmiseAddressController@storepaymentomise');


// ----------------SystemPayment ---------------

    Route::resource('paymant', 'PatmentController');

    //|view => user/payment.create |, Controller => PatmentController@create, | model => Paymant |
    
    Route::get('paymant/create/{id?}', 'PatmentController@create');

//-------------------------------Admin--------------------
   

// ------------  END SystemPayment -------------


 Route::resource('omiseaddress', 'OmiseAddressController');


//---------------------------------------------------สิ้นสุดระบบตะกร้าสินค้า-----------------------------------


//-------------------------------------------------สิ้นสุดสั่งซื้อสินค้าและจัดส่ง----------------------------------------------------------






//-------------------------------------------------เช็คสถานะสินค้า/จัดส่ง-----------------------------------------------
    
//|view => user.orders.index |, Controller => OrderController@orderusers , | model => Order |

//url('user/orders') , url('user/orders/pending') , url('user/orders/delivered')

//Route::get('user/orders/{type?}', 'OrderController@orderusers');


//-------------------------------Admin--------------------

//|view => admin.orders.index | Controller => OrderController@orderusers | model => Paymant |

//url('admin/orders')

//Route::get('orders/{type?}', 'OrderController@orders');

//-------------------------------------------------สิ้นสุดเช็คสถานะสินค้า/จัดส่ง-------------------------------------------



//-------------------------------------------------เช็คสถานะรายการชำระเงิน-----------------------------------------------------

 //--------------------Admin-------------------

  //|view => admin.payments.index |, Controller => PatmentController@payments, | model => Paymant |
  //Route::get('payment/{type?}', 'PatmentController@payments');

 // Route::get('Amin/payments/image_payment/{id?}', 'PatmentController@images_payments')->name('admin.payments.image_payment'); //Do images

//--------------------------------------------

   //--------------------User-------------------

  //|view => user.payment.index |, Controller => PatmentController@paymentuser, | model => Paymant |

  // Route::get('user/payment/{type?}', 'PatmentController@paymentuser');

//--------------------------------------------

    

//-------------------------------------------------สิ้นสุดเช็คสถานะรายการชำระเงิน-------------------------------------------------




//-------------------------------------------------เพิ่มลบสินค้า/แก้ไขสินค้า----------------------------------------------------
// |view => admin/products/create |, Controller => ProductsController@create , 
// | model => Product Sizes Colors Category Promotion Recommend Promotion_new |

//     Route::resource('products', 'ProductsController');
//     Route::resource('category', 'CategoriesController');
//     Route::resource('colors', 'ColorsController');
//     Route::resource('sizes', 'SizesController');
//     Route::resource('promotions', 'PromotionController');
//     Route::resource('recommend', 'RecommendController');
//     Route::resource('promotion_new', 'Promotion_newController');

 //--------------------------------------------สิ้นสุดเพิ่มลบสินค้า/แก้ไขสินค้า---------------------------------------------*-----

 //-------------------------------------------------แก้ไข้สถานะสินค้า/จัดส่ง----------------------------------------------------
// |view => admin.orders.index |, Controller => ProductsController@toggledeliver , | model => Order |
// Route::post('toggledeliver/{orderId}', 'OrderController@toggledeliver')->name('toggle.deliver');

 //--------------------------------------------สิ้นสุดเแก้ไข้สถานะสินค้า/จัดส่ง---------------------------------------------*-----




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

    
    Route::get('orders/{type?}', 'OrderController@orders');

// ----------------SystemPaymentAdmin ---------------
    Route::get('payment/{type?}', 'PatmentController@payments');

    Route::get('Amin/payments/image_payment/{id?}', 'PatmentController@images_payments')->name('admin.payments.image_payment'); //Do images

     Route::post('payment/{id}', 'PatmentController@update')->name('update.payment');


// ------------  END SystemPayment -------------

    Route::post('toggledeliver/{orderId}', 'OrderController@toggledeliver')->name('toggle.deliver');


    Route::resource('omise', 'OmiseAddressController');
});




Route::group(['middleware' => 'auth'], function () // สร้าง Order ตอนสี่งซื้อสินค้าใน cart
{
    //-----------------------สร้าง Order ตอนสี่งซื้อสินค้าใน cart-----------------------------------------
    Route::get('toorder', 'CheckoutController@toorders')->name('checkout.toorders');

    //---------------------------------------------------------------------------------------------

     Route::get('user/orders/{type?}', 'OrderController@orderusers');


     Route::resource('order', 'OrderController');
     // ----------------SystemPayment ---------------
    Route::get('user/payment/{type?}', 'PatmentController@paymentuser');
    

    // ------------  END SystemPayment -------------


         
    Route::post('/checkoutomise', 'OmiseController@index')->name('checkoutomise');
    Route::get('topayomise', 'OmiseController@indexaddress');

    //แจ้งชำระเงินแบบโอนธรรมดา
    Route::get('paymentorder', 'PatmentController@createpaymentorder');
    Route::post('createpaymentorder', 'PatmentController@paymentorder');

    //แจ้งชำระเงินของระบบบัตรเดบิต
    Route::get('paymentomise', 'OmiseAddressController@createpaymentomise');
    Route::post('createpaymentorder', 'OmiseAddressController@storepaymentomise');

});

Route::get('checkout', 'CheckoutController@step1');





// Route::get('/shirt/{id?}', 'FrontController@shirt')->name('shirt');

//Route::get('shirts01', 'FrontController@shirts01')->name('shirts01');

//------------------------------มีแนวโน้วจะทำต่อในอนาคต--------------------------------------

//Route::get('advertisement/{id?}', 'FrontController@advertisement')->name('advertisement');
//------------------------------มีแนวโน้วจะทำต่อในอนาคต--------------------------------------


// Route::get('categorymanu/{id?}', 'CategorymanuContrller@show')->name('manuproduct');

// Route::get('shirts02', 'FrontController@shirts02');
// Route::get('shirts03', 'FrontController@shirts03')->name('shirts03');



//Route::get('/manu/{id?}', 'ManuController@index');
