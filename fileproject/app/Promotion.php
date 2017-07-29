<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{

	protected  $fillable =['promotions_name'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
