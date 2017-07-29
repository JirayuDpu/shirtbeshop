<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recommend extends Model
{
    protected  $fillable =['recommend_name'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
