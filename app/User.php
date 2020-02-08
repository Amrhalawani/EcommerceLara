<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name', 'email', 'email_verified', 'password','mobile','mobile_verified','shipping_address','billing_address',
    ];


    public function orders(){

        return $this->hasMany(Order::class);}




        public function payments(){

        return $this->hasMany(payment::class);
    }


        public function shipments(){
        return $this->hasMany(shipment::class);} // hasMany for shipping_address and billing_address

        public function shippingAddress(){
        return $this->hasOne(Address::class,'id','shipping_address');}

public function billingAddress(){
        return $this->hasOne(Address::class,'id','billing_address');}


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
