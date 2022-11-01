<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $matakuliah = ['Basis Data', 'Pemrograman Mobile', 'Pemrograman Web Lanjut', 'Multimedia', 'Pemrograman Dasar'];
        for($i=0; $i <= 50; $i++){
            DB::table('matakuliahs')->insert(
                [
                    'kode_matakuliah' => 'IF' . rand(00000, 99999),
                    'nama_matakuliah' => array_rand($matakuliah,3)[0],
                    'sks' => rand(1,4),
                ]
            );
        }
    }
}
