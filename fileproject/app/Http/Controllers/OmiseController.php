<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Order;
use App\User;
use App\Bank;
use App\Product;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;

use App\Mail\OmiseSystem;
use Illuminate\Support\Facades\Mail;

use \Omise\Credential\CredentialProvider;
use \Omise\Credential\EnvarCredentialProvider;
use \Omise\OmiseClient;
use \Omise\TestSupport\FixtureHttpClient;
use \Omise\ServiceLocator;


define('OMISE_PUBLIC_KEY', 'pkey_test_58axzehd9fhf9gi4w4j');
define('OMISE_SECRET_KEY', 'skey_test_58axzehdislzlyyx7qw');
use OmiseCharge;


//require_once Url::getAlias('@vendor').'/omise-php/lib/Omise.php';
//require_once dirname(__FILE__).'/vendor/omise-php/lib/Omise.php';




class OmiseController extends Controller
{
	public function index(Request $request)
    {
       // $banks= Bank::pluck('name_bank','id');
       // $userId = Auth::id();
       // return view('user/payment.create' , compact('id', 'user', 'banks'));
    	//dd('ddd');
 		


    	$checkout_description = 'description';
    	$post = $request;
    	if ($post['omiseToken'])
            { 
	        	$sum = 0;
	        	$sum1 = 0;

	        		$cartItemss = Cart::content();
	        		foreach($cartItemss as $cartItem) 
					{
					    $sum += $cartItem->price*$cartItem->qty;
					}
					$sum1 = $sum;

	         $charge = OmiseCharge::create([
	         // 'amount'=> Cart::total()*100, //***Cart::total(), {{Cart::total()*100}}
			  // 'amount'=> $cartItem->qty*$cartItem->price*100, //***Cart::total(), {{Cart::total()*100}}
	          'amount'=>  $sum1*100 ,
			  'currency'=> "thb",
			  'description'=> $checkout_description,
			  'card'=> $post['omiseToken'],
			  ]);

    		 $user = Auth::user();
	       	 $order = $user->orders()->create([
	        	'total' => Cart::total(),
	        	'delivered' => 1,
	        	'omise' => 1
	        	]);


    		$cartItems = Cart::content();
	        foreach ($cartItems as $cartItem) 
	        {  
	        	 $order->orderItems()->attach($cartItem->id,[
                'qty'=>$cartItem->qty,
                'total'=>$cartItem->qty*$cartItem->price
                ]);

	        	  $sumquantity = $cartItem->options->quantity - $cartItem->qty;

		            DB::table('products')->where(['id'=>$cartItem->id])->update(['quantity'=>$sumquantity]);

		           // Cart::destroy();
	        }

	         $user = Auth::id();
        	 $orders =Order::where('user_id','=', $user)->get();
        	 $IDorders =Order::where('user_id','=', $user)->max('id');
        	 $dataorder = Order::where('id','=', $IDorders)->get();

        	  $time = Carbon::now()->addMinute(1);
		       //Mail::to(order->user)
		       Mail::to('theboat72@gmail.com')->later($time, new OmiseSystem($order));

        	  // $orderss=Order::where('delivered', '0')->Paginate(2);
        	  // // $orders=Order::where('delivered', '0')->get();
        	  // dd($orderss)

        	  // $orderss=Order::where('delivered', '0')->Paginate(2);
        	  // $orders=Order::where('delivered', '0')->get();
        	  //dd($orderss)

        	 //return view('user.omise.create', compact('orders', 'IDorders','sum1'));

		     return view('user.omise.topayomise', compact('orders', 'IDorders','sum1', 'dataorder'));
            }
            else
            {
            	dd('ssss');
            }	
	}

	public function indexaddress(Request $request)
    {
    	$user = Auth::id();
        	 $orders =Order::where('user_id','=', $user)->get();
        	 $IDorders =Order::where('user_id','=', $user)->max('id');

        	 

        	 $sum = 0;
	        	$sum1 = 0;

	        		$cartItemss = Cart::content();
	        		foreach($cartItemss as $cartItem) 
					{
					    $sum += $cartItem->price*$cartItem->qty;
					}
					$sum1 = $sum;

		return view('user.omise.create', compact('orders', 'IDorders','sum1'));
    }


}


