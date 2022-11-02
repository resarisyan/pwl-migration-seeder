<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 0; $i <= 30; $i++) {
            DB::table('dosens')->insert(
                [
                    'nidn' => rand(0000000000, 9999999999),
                    'nama' => $faker->name,
                ]
            );
        }
    }
}
