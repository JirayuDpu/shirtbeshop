<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Product;
use DB;
class ManuController extends Controller
{
    public function index(Request $request, $id)
    {
         $products=Category::find($id)->orderBy('pro_name','DESC')->products;

         
        // $shirts=Product::all();
        return view('category_products.index', compact('products'));
 
    }

    // public function show($id)
    // {
    //   $T_shirt = DB::table('products')
    //                 ->where('category_id' , '=' , 1)
    //                 ->get();

    //     $shirt = DB::table('products')
    //                 ->where('category_id' , '=' , 2)
    //                 ->get();


    //  return view('front.home' ,compact('products', 'rns','rns2' , 'T_shirt' , 'shirt'));
    //   }
    // public function count($id)
    // {
    // 	$counts = DB::table('products')->where('category_id', '=' , $id)
    // 	->count();
    // 	//dd($productss);
    //      //$products=Category::find($id)->products;
    //     // $shirts=Product::all();
    //     return view('layout.manu', compact('counts'));
 
    // }
}

