<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{

	protected  $fillable =['name_bank', 'account', 'branch'];


      public function paymant()
    {
        return $this->hasMany(Paymant::class);
    }
}
