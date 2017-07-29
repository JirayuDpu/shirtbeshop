<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategorymanuContrller extends Controller
{
    public function show($id)
    {
        $products=Category::find($id)->products;
        
        return view('category_products.index', compact('products'));
    }
}
