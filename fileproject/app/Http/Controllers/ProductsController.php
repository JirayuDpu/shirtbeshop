<?php

namespace App\Http\Controllers;

use App\Category;
use App\Colors;
use App\Product;
use App\Sizes;
use App\Promotion_new;
use App\Promotion;
use App\Recommend;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $products = Product::all();
        $products = Product::paginate(8);
        // return view('admin.products.index', compact('products','sum', 'discounts'));
        return view('admin.products.index', compact('products','sum', 'discounts'));
        // foreach ($products as $product) 
        // {
        //     // $discounts = $product->price*$product->discount/100;
        //     // $sum = $product->price-$discounts;
        // //return $product->price;  
        // // echo $product->price; 
        // // echo  "____";
        
        
        // }

        // return  $sum;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sizes = Sizes::pluck('size_name', 'id');
        $colors = Colors::pluck('color_name' , 'id');
        $categories = Category::pluck('category_name', 'id');
        $promotions = Promotion::pluck('promotions_name', 'id');
        $recommends = Recommend::pluck('recommend_name', 'id');
       // $recommend_news = Promotion_new::pluck('p_name', 'id');
        return view ('admin.products.create', compact('sizes','colors','categories', 'promotions' ,'recommends'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $formInput=$request->except('image');

        $this->validate($request,[
            'pro_name' => 'required',
            'quantity' => 'required',
            'cost' => 'required',
            'price' => 'required',
            'sizes_id' => 'required',
            'colors_id' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg|max:10000'
        ]);


//      image upload
        $image = $request->image;
        if($image)
        {
            $imageName=$image->getClientOriginalName();
            $image->move('images', $imageName);
            $formInput['image']=$imageName;
        }
        Product::create($formInput);
        return redirect()->route('products.index');

        // Product::create($request->all());
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
        $product=Product::find($id);
        $sizes = Sizes::pluck('size_name', 'id');
        $colors = Colors::pluck('color_name' , 'id');
        $categories = Category::pluck('category_name', 'id');
        $promotions = Promotion::pluck('promotions_name', 'id');
        $recommends = Recommend::pluck('recommend_name', 'id');
        $recommend_news = Promotion_new::pluck('p_name', 'id');

        return view('admin.products.edit', compact('sizes','colors','categories', 'promotions','product',
            'recommends', 'recommend_news'));
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
                // $formInput=$request->except('image');

        $this->validate($request,[
            'pro_name' => 'required',
            'quantity' => 'required',
            'cost' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        $product = Product::find($id);
        $productUpdate = $request->all();
        $product->update($productUpdate);
         return redirect()->route('products.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return back();
    }
}
