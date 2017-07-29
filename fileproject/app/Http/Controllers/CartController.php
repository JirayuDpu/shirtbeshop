<?php

namespace App\Http\Controllers;


use App\Product;
use App\Size;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Category;
use Session;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categories = Category::all();

        $cartItems=Cart::content();

       // dd($cartItems);

        // $sum = 0;

        // foreach($cartItems as $cartItem)
        // {
        //     return $cartItem->id;
        //      //return $sum;
        // }
        
        

        // $cartItemss = Cart::content();
        //             foreach($cartItemss as $cartItem) 
        //             {
        //                 $sum += $cartItem->price*$cartItem->qty;
        //             }
        //             $sum1 = $sum;

        //$products = Product::all();

        // $products = Product::where('colors_id', '=', $color)
        //         ->whereBetween('price',[$price1 , $price2])->get();
        //         return view ('select.index', compact('shirts', 'categories','sizes', 'colors')); 

       
        return view('cart.index', compact('cartItems' ,'categories'));
    	

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($productId)
    {
        // $product = Product::find($productId);

        // Cart::add($productId, $product->name, 1, $product->price,['sizes'=>$product->sizes->size_name,
        //     'colors'=>$product->colors->color_name]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


    }

    public function addItems(Request $request, $id)
    {

         $product = Product::find($id);

         $sum = $product->price*$product->discount/100;

         //$quantity =$product->quantity;

        Cart::add($id, $product->pro_name, 1, $product->price-$sum , 
        ['sizes'=>$product->sizes->size_name, 'colors'=>$product->colors->color_name , 
        'quantity'=>$product->quantity]);

       
         return back();

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         Cart::update($id,['qty'=>$request->qty]);
         // Cart::update($id,['price'=>$request->total]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return back();
    }
}
