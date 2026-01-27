<?php

namespace Database\Seeders;

use App\Models\Companies;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            Companies::create([
                'name' => $faker->name(),
                'email' => $faker->unique()->email(),
                'phone' => $faker->phoneNumber(),
                'address' => $faker->address(),
            ]);
        }
    }
}
