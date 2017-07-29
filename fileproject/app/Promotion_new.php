<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion_new extends Model
{
     protected  $fillable =['p_name', 'p_description', 'p_discount'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
