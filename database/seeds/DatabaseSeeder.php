<?php

use App\Address;
use App\User;
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

        factory(Address::class,10)->create();

    factory(User::class,20)->create();


    }
}
