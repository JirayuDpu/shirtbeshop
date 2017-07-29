<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colors extends Model
{
    protected  $fillable =['color_name'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
