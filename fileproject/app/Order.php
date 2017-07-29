<?php

namespace App;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Order extends Model
{
    protected $fillable = ['total', 'delivered','omise'];

    

    public function orderItems()
    {
    	return $this->belongsToMany(Product::class)->withPivot('qty', 'total');
    	// return $this->belongsToMany(Product::class)->withPivot('qty', 'total');
    }

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function patment()
    {
        return $this->hasMany(Patment::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

     public function omiseaddress()
    {
        return $this->hasMany(OmiseAddress::class);
    }

}
