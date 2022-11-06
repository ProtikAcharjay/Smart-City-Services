<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;
use Faker\Factory as Faker;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Seeder and faker use
        //seeder
        // $customer= new Customer;
        // $customer->c_name = "Mahadi Hasan Shojib";
        // $customer->c_email = "shojib@gmail.com";
        // $customer->c_phone = "0124564646";
        // $customer->c_dob = now();
        // $customer->c_address = "Tangail";
        // $customer->c_password = "shojib123";
        // $save=$customer->save();

        //faker

        $faker = Faker::create();
        for ($i=1;$i<=10;$i++){
            $customer= new Customer;
            $customer->c_name = $faker->name;
            $customer->c_email = $faker->email;
            $customer->c_phone = $faker->phoneNumber;
            $customer->c_dob = $faker->date;
            $customer->c_address = $faker->address;
            $customer->c_password = $faker->password;
            $save=$customer->save();
        }

        //php artisan db:seed




    }
}
