<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paymant extends Model
{
    protected $fillable = ['first_name', 'last_name' , 'address','zip' ,'source','bank_admin_id',
        'account_user','amount', 'image', 'phone', 'order_id', 'confirm'];

    public function orders()
    {
    	return $this->hasMany(Order::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    // public function bank()
    // {
    // 	return $this->belongsTo(Bank::class);
    // }

}
