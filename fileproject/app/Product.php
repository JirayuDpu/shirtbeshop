<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $fillable = ['pro_name','quantity','cost','price', 'image',
                'description', 'category_id', 'sizes_id', 'colors_id', 'promotion_id','recommend_id', 
                'discount'];

    public function category()
    {
    	return $this->belongsTo(Category::class);
    }

    public function colors()
    {
    	return $this->belongsTo(Colors::class);
    }

    public function sizes()
    {
    	return $this->belongsTo(Sizes::class);
    }

    public function promotion()
    {
        return $this->belongsTo(Promotion::class);
    }

    public function recommend()
    {
        return $this->belongsTo(Recommend::class);
    }

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }
    

}
