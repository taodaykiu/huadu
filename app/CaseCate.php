<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaseCate extends Model
{
    //
    public function cases()
    {
        return $this->hasMany(Cases::class,'cate_id');
    }
}
