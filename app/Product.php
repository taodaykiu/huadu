<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $guarded = [];

    public function setImagesAttribute($pictures)
    {
        if (is_array($pictures)) {
            $this->attributes['images'] = json_encode($pictures);
        }
    }

    public function getImagesAttribute($pictures)
    {
        return json_decode($pictures, true);
    }
}
