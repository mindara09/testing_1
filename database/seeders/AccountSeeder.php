<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	$faker = Faker::create('en_US');
        for($i = 1; $i <= 1001; $i++){
        	DB::table("accounts")->insert([
        		'first_name' => $faker->firstNameMale,
        		'last_name' => $faker->lastName,
        		'number_ident' => $faker->phoneNumber,
        		'email' => $faker->email,
        		'address' => $faker->address,
        		'city' => $faker->city,
        		'province' => $faker->state,
        		'zip_code' => $faker->postcode,
        		'country' => $faker->country,
        		'password' => $faker->password

        	]);

        }

        DB::table('accounts_admin')->insert([
            'full_name' => "Administrator",
            'email' => "admin@gmail.com",
            'password' => "admin123"
        ]);

    }
}
