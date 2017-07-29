<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Order;
use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
        $user = Auth::id();
        $orders =Order::where('user_id','=', $user)->Paginate(2);
        //dd($orders);
        return view('user.index', compact('orders'));
    }
}
