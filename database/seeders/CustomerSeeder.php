<?php


namespace Database\Seeders;


use Faker\Factory;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();

        $customers = [];

        for ($i = 1; $i <=100; $i++) {
            $customers[$i] = [
                'name' => $faker->name,
            ];
        }
        \DB::table('customers')->insert($customers);
    }
}
