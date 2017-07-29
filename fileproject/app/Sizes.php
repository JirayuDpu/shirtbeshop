<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sizes extends Model
{
    protected  $fillable =['size_name'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
