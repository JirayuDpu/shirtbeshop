<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Carbon\Carbon;
use App\Mail\OrderMail;
use App\Mail\OrderShipped;
use App\Mail\OrderDelivered;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
class OrderController extends Controller
{
    public function orders($type='')
    {
    	if ($type == 'pending') 
        {
            $orders=Order::where('delivered', '0')->Paginate(2);
            //dd($orders);
        }
        elseif ($type == 'sending') 
        {
            $orders=Order::where('delivered', '1')->Paginate(2);
        }
        elseif ($type == 'delivered') 
        {
            $orders=Order::where('delivered', '2')->Paginate(2);
        }
    	else
    	{
    		$orders=Order::all();
    	}
    	//dd($orders);
    	return view('admin.orders.index', compact('orders'));
    }

    public function toggledeliver(Request $request, $orderId)
    {
    	$order=Order::find($orderId);
    	if ($request->has('sending')) 
    	{
           // dd('11');
            $time = Carbon::now()->addMinute(1);
            Mail::to($order->user)->later($time, new OrderShipped($order));
            //Mail::to('theboat72@gmail.com')->send(new OrderShipped($order));

    		$order->delivered=$request->sending;
    	}	
        elseif ($request->has('delivered')) 
        {
            //dd('22');
            $time = Carbon::now()->addMinute(1);
            Mail::to($order->user)->later($time, new OrderDelivered($order));

            $order->delivered=$request->delivered;
        }   
    	else
  		{
  			$order->delivered="0";
  		}
    	$order->save();

    	return back();
    }

     public function orderusers($type='')
    {
    	if ($type == 'pending') 
    	{
    		$orders=Order::where('delivered', '0')->get();
    		//dd($orders);
    	}
    	elseif ($type == 'sending') 
    	{
    		$orders=Order::where('delivered', '1')->get();
    	}
        elseif ($type == 'delivered') 
        {
            $orders=Order::where('delivered', '2')->get();
        }
    	else
    	{
    		$orders=Order::all();
    	}
    	//dd($orders);
    	return view('user.orders.index', compact('orders'));
    }

    public function destroy($id)
    {

        $dbors = DB::table('order_product')->where('order_id', '=', $id)->get();

        foreach ($dbors as $dbo) 
        {   

            $sumquantity = 0;

            $sumquantity2 = 0;

            $total = 0;
            //$sumquantity += $dbo->qty;

            $rsr = DB::table('products')->where(['id'=>$dbo->product_id])->get();
              foreach ($rsr as $rs) 
            {
                $sumquantity  = $rs->quantity;
            }

            $sumquantity2 = $dbo->qty;

            $total =  $sumquantity + $sumquantity2;
            //dd('ss');
           $rr = DB::table('products')->where(['id'=>$dbo->product_id])->update(['quantity'=>$total]);
          //  dd($sumquantity);
        }

        Order::destroy($id); //databess Order



        DB::delete('delete from order_product where order_id = :id', ['id' => $id]); //Order_product





        // dd($id);
        // $cartItems = Cart::content();

        // dd($cartItems);
        // foreach ($cartItems as $cartItem) 
        // {   
        //     dd('ddd');
        //    // dd($cartItem->options->quantity - $cartItem->qty);
        //     $sumquantity = $cartItem->options->quantity + $cartItem->qty;

        //     DB::table('products')->where(['id'=>$cartItem->id])->update(['quantity'=>$sumquantity]);

        // }

        
      //  Order::destroy($id); //databess Order



     //   DB::delete('delete from order_product where order_id = :id', ['id' => $id]); //Order_product




      //  DB::delete('delete from order_product where order_id = :id', ['id' => $id]); //Order_product




     

        // dd($dbor);

        //  DB::table('products')->where(['id'=>$cartItem->id])->update(['quantity'=>$sumquantity]);



       

        return back();
    }
}

