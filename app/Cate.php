<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cate extends Model
{
    //
    protected $guarded = [];

    public function product()
    {
        return $this->hasMany(Product::class,'level2');
    }
}
