<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Product;
use DB;

class ManutoContrller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id)
    {
     //   $products=Category::find($id)->products;
     // // $products=Category::find($id)->orderBy('pro_name','DESC')->products;

     //   return view('category_products.index', compact('products'));
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
    public function show(Request $request ,$id)
    {

      $products=Category::find($id)->products()->orderBy('pro_name', 'desc')->get();

        // $products = Product::where('category_id', '=' , $id)
        // ->leftJoin('categories', 'products.category_id', '=', 'categories.id')
        // ->orderBy('price','ASC')
        // ->get();

        // $products = Category::where('category_id', '=' , $id)
        //     ->join('products', 'categories.id', '=', 'products.category_id')
        //     ->get();


       $categories = Category::all();

       return view('category_products.index', compact('products' ,'categories'));
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
