<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Facades\DB;

class DataSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Factory::create();

        for ($i = 0; $i < 200; $i++) {
            DB::table('people')->insert([
                'Name' => $faker->firstName,
                'LastName' => $faker->lastName,
                'Age' => rand(18, 100),
                'Street' => $faker->streetName,
                'HouseNumber' => rand(1, 500),
                'City' => $faker->city,
                'Country' => $faker->country,
                'PhoneNumber'=>$faker->phoneNumber
            ]);
        }
    }
}
