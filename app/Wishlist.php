<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    //
    protected $fillable =['user_id','wish_list'];

    function customer(){
        return $this->belongsTo(User::class);
    }
}
