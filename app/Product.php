<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title', 'desc', 'unit', 'total','price'
    ];

    public function images(){
        return $this->hasMany(Image::class);
    }
}
