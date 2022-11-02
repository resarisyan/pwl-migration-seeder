<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use App\Models\Dosen;

class MahasiswaSeeder extends Seeder
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
            $dosen = Dosen::inRandomOrder()->first();
            DB::table('mahasiswas')->insert(
                [
                    'npm' => rand(5520120000, 5520129999),
                    'nidn' => $dosen->nidn,
                    'nama' => $faker->name,
                ]
            );
        }
    }
}
