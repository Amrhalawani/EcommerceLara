<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'street_name', 'street_num', 'city', 'state','country','post_code' ];


    public function user(){
        return $this->belongsTo(User::class);
    }
}
