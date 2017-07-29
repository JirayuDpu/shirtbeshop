<?php

namespace App\Http\Controllers;

use App\Mail\OrderUsrtToAdmin;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Order;
use App\User;
use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;



class CheckoutController extends Controller
{
    public function toorders(Request $request)
    {
       // dd($request);

    //      public function update(Request $request, $id)
    // {
    //      Cart::update($id,['qty'=>$request->qty]);
    //      // Cart::update($id,['price'=>$request->total]);
    //     return back();
    // }

        $user = Auth::user();
        $order = $user->orders()->create([
            'total' => Cart::total(),
            'delivered' => 0
            ]);


        $cartItems = Cart::content();

        $sumquantity = 0;

        foreach ($cartItems as $cartItem) 
        {   
            $order->orderItems()->attach($cartItem->id,[
                'qty'=>$cartItem->qty,
                'total'=>$cartItem->qty*$cartItem->price
                ]);
            
           // dd($cartItem->options->quantity - $cartItem->qty);
            $sumquantity = $cartItem->options->quantity - $cartItem->qty;

            DB::table('products')->where(['id'=>$cartItem->id])->update(['quantity'=>$sumquantity]);

            Cart::destroy();
        }

        $time = Carbon::now()->addMinute(1);
        //Mail::to(order->user)
        Mail::to('theboat72@gmail.com')->later($time, new OrderUsrtToAdmin($order));
        //Mail::to($order->user)->later($time, new OrderShipped($order));

        $user = Auth::id();
        $orders =Order::where('user_id','=', $user)->get();

        return view ('user.toorder', compact('orders'));
    }

    // public function step1()
    // {
    //     if (Auth::check()) 
    //     {
    //         return "dddd";
    //     }

    //     return redirect('login');
    // }
}


