<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;


class KrsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i=0; $i <= 50; $i++){
            $mahasiswa = Mahasiswa::inRandomOrder()->first();
            $matakuliah = Matakuliah::inRandomOrder()->first();

            DB::table('krs')->insert(
                [
                    'id' => $faker->unique()->randomNumber(),
                    'npm' => $mahasiswa->npm,
                    'kode_matakuliah' => $matakuliah->kode_matakuliah,
                ]
            );
        }
    }
}
