<?php

namespace App\Http\Controllers;

use App\Category;
use App\Colors;
use App\Sizes;
use App\Promotion;
use App\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;



class SelectProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $categories = Category::all();
        $sizes = Sizes::all();
        $colors = Colors::all();


        $color = \Request::get('color');
        $size = \Request::get('size');
        $price1 = \Request::get('price1');
        $price2 = \Request::get('price2');
       // $search = \Request::get('search');

       // $searchDB =  DB::table('products')->where('pro_name', 'like', '%'. $search . '%')->get();


           // dd('ddd');
            if (empty($color) && empty($size) && empty($price1) && empty($price2))
            //color 0, size 0, price1 0, price2 0
            { 
                $shirts=Product::orderBy('pro_name', 'desc')->get();
                return view ('select.index', compact('shirts' , 'categories', 'sizes', 'colors'));
            }

            elseif (!empty($color) && empty($size) && empty($price1) && empty($price2)) 
            //color 1, size 0, price1 0, price2 0
            {
              // dd('111');
                $shirts=Product::where('colors_id', '=' , $color)->orderBy('pro_name', 'desc')->get();

                return view ('select.index', compact('shirts' , 'categories','sizes', 'colors'));
            }

            elseif (!empty($color) && !empty($size) && empty($price1) && empty($price2)) 
            //color 1, size 1, price1 0, price2 0
            {
              // dd('111');
                $shirts = Product::where('colors_id', '=', $color)
                     ->where('sizes_id', '=' ,$size)
                     ->orderBy('pro_name', 'desc')
                     ->get();
                    return view ('select.index', compact('shirts', 'categories','sizes', 'colors')); 
            }

             elseif (empty($color) && !empty($size) && empty($price1) && empty($price2)) 
            //color 0, size 1, price1 0, price2 0
            {
              // dd('111');
                $shirts = Product::where('sizes_id', '=' ,$size)
                ->orderBy('pro_name', 'desc')
                     ->get();
                    return view ('select.index', compact('shirts', 'categories','sizes', 'colors')); 
            }

            elseif (empty($color) && empty($size) && !empty($price1) && empty($price2)) 
            //color 0, size 0, price1 1, price2 0
            {
                $shirts = Product::whereBetween('price',[$price1 , 0])
                ->orderBy('pro_name', 'desc')
                ->get();
                return view ('select.index', compact('shirts', 'categories','sizes', 'colors'));  
            }

            elseif (empty($color) && empty($size) && empty($price1) && !empty($price2)) 
            //color 0, size 0, price1 0, price2 1
            {
                $shirts = Product::whereBetween('price',[0 , $price2])
                ->orderBy('pro_name', 'desc')
                ->get();
                return view ('select.index', compact('shirts', 'categories','sizes', 'colors'));  
            }


            elseif (empty($color) && empty($size) && !empty($price1) && !empty($price2)) 
            //color 0, size 0, price1 1, price2 1
            {
                $shirts = Product::whereBetween('price',[$price1 , $price2])
                ->orderBy('pro_name', 'desc')
                ->get();
                return view ('select.index', compact('shirts', 'categories','sizes', 'colors'));  
            }

             elseif (!empty($color) && empty($size) && !empty($price1) && !empty($price2)) 
            //color 1, size 0, price1 1, price2 1
            {
                $shirts = Product::where('colors_id', '=', $color)
                ->whereBetween('price',[$price1 , $price2])
                ->orderBy('pro_name', 'desc')
                ->get();
                return view ('select.index', compact('shirts', 'categories','sizes', 'colors'));  
            }

            elseif (!empty($color) && !empty($size) && !empty($price1) && !empty($price2)) 
            //color 1, size 1, price1 1, price2 1
            {
                $shirts = Product::where('colors_id', '=', $color)
                ->where('sizes_id', '=' ,$size)
                ->whereBetween('price',[$price1 , $price2])
                ->orderBy('pro_name', 'desc')
                ->get();
                return view ('select.index', compact('shirts', 'categories', 'sizes', 'colors'));  
            }
            // elseif(!empty($search) && empty($color) && empty($size) && empty($price1) && empty($price2))
            // {
            //     dd('dd');
            //     $shirts =  DB::table('products')->where('pro_name', 'like', '%'. $search . '%')->get();
            //     return view ('select.index', compact('shirts', 'categories'));  
            // }

         
    }

    public function search(Request $request)
    {
        $categories = Category::all();
        $sizes = Sizes::all();
        $colors = Colors::all();

        $search = \Request::get('search');
       


        $shirts =  Product::where('pro_name', 'like', '%'. $search . '%')
        ->orderBy('pro_name', 'desc')
        ->get();
        //$shirts =  DB::table('products')->where('pro_name', '=', $productname)->get();

        return view ('select.index', compact('shirts', 'categories', 'colors','sizes')); 
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function show()
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
         //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

