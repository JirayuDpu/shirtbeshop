<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OmiseAddress extends Model
{
     protected $fillable = ['first_name', 'last_name' , 'address','zip' ,'source','amount',
     'phone', 'order_id', 'confirm'];


     public function orders()
    {
    	return $this->hasMany(Order::class);
    }

     public function user()
    {
    	return $this->belongsTo(User::class);
    }

}
