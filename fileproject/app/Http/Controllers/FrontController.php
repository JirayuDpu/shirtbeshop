<?php

namespace App\Http\Controllers;

use App\Category;
use App\Colors;
use App\Sizes;
use App\Promotion;
use App\Product;
use App\Recommend;
use DB;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $products = Product::where('promotion_id', '=', 1)->Paginate(8);


        //$products=Product::paginate(9);

        // $rns = Product::all()->random(4);
        // $rns = DB::table('products')
        //             ->where('recommend_id', '=', 1)
        //             ->Where('promotion_id', '=', 1)
        //             ->orWhere('discount', '>', 0)
        //             ->inRandomOrder()->limit(4)
        //             ->get();

        $rns = Product::where('recommend_id', '=', 1)
                    ->Where('promotion_id', '=', 1)
                    ->orWhere('discount', '>', 0)
                    ->inRandomOrder()->limit(4)
                    ->get();

        $rns2 = Product::where('recommend_id', '=', 1)
                    ->Where('promotion_id', '=', 1)
                    ->orWhere('discount', '>', 0)
                    ->inRandomOrder()->limit(4)
                    ->get();

        $categories = Category::all();

        //$counts = DB::table('products')->where('category_id', '=' , 1)
        // ->counts();

        return view('front.home' ,compact('products', 'rns','rns2' , 'categories'));
    }

     public function shirts01()
    {
        $sizes = Sizes::pluck('size_name', 'id');
        $colors = Colors::pluck('color_name' , 'id');
        $categories = Category::pluck('category_name', 'id');
        $promotions = Promotion::pluck('promotions_name', 'id');
        $shirts=Product::all();
        return view ('front.shirts01', compact('sizes','colors','categories', 'promotions','shirts'));


       // DB::table('Product')
       //      ->join('contacts', 'users.id', '=', 'contacts.user_id')
       //      ->join('orders', 'users.id', '=', 'orders.user_id')
       //      ->select('users.id', 'contacts.phone', 'orders.price')
       //      ->get();
    }

      public function show($id)
    {
        //  $shirts=Category::find($id)->products;

        //  $products=Product::all();
        // return view('front.shirts01', compact('shirts', 'products'));
 
    }

       public function shirts02()
    {
         $products=Product::all();
         return view('front.shirts02' ,compact('products'));
        
    }

       public function shirts03()
    {
        $products=Product::all();
        return view('front.shirts03',compact('products'));
    }

      public function shirt($id)
    {
        $shirt=Product::find($id);
        return view('front.shirt' ,compact('shirt'));
    }

    public function shop($id)
    {
         $categories = Category::all();
     
         $shop=Product::find($id);
        return view('front.shop',compact('shop', 'categories'));
    }


    public function recommend($id)
    {

        $categories = Category::all();

        $shirts=recommend::find($id)->products;
        $products=Product::all();
        return view('front.recommend', compact('shirts', 'products', 'categories'));
    }

    public function newproduct($id)
    {
        // $shirts=Promotion::find($id)->products;
      $shirts=Promotion::find($id)->products()->orderBy('pro_name', 'desc')->Paginate(8);
  

        $categories = Category::all();

        return view('front.new', compact('shirts', 'categories'));
    }

    public function discount()
    {
      $categories = Category::all();

      $discount = \Request::get('discount');

       if (!empty($discount)) 
            {
              //dd('dd');
               $shirts=Product::where('discount', '=' , $discount)->get();
               //dd('ddd');
               return view('front.discount', compact('shirts', 'categories')); 
          }
          else
          {
             //dd('sss');
              // $shirts=Product::where('discount', '>' , 0)->get();
             $shirts=Product::all();

              return view('front.discount', compact('shirts', 'categories')); 
          }
    }

    public function advertisement($id)
    {
       $categories = Category::all();

      return view('advertisement.advertisement1', compact('categories'));

        

        //  $shirts=recommend::find($id)->products;
        // $products=Product::all();
        // return view('front.recommend', compact('shirts', 'products', 'categories'));
    }
}
