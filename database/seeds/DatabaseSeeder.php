<?php

use App\Address;
use App\Image;
use App\Product;
use App\Review;
use App\User;
use App\Wishlist;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    //for implement the faker
    public function run()
    {

        factory(Address::class, 10)->create();

        factory(User::class, 20)->create();
        factory(Product::class, 200)->create();
        factory(Image::class, 400)->create();

        factory(Review::class, 400)->create();

      //still factory not created  factory(Wishlist::class, 200)->create();


    }
}
