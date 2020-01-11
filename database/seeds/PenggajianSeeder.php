<?php

use Illuminate\Database\Seeder;

class PenggajianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            [
                'nama'=>'fatur','jabatan'=>'bos', 'jk'=>'laki-laki',
                'alamat'=>'rancamanyar', 'agama'=>'islam','total_gaji'=>'5000.000'

            ],

            [
                'nama'=>'fatur','jabatan'=>'bos', 'jk'=>'laki-laki',
                'alamat'=>'rancamanyar', 'agama'=>'islam','total_gaji'=>'5000.000'

            ],

            [
                'nama'=>'fatur','jabatan'=>'bos', 'jk'=>'laki-laki',
                'alamat'=>'rancamanyar', 'agama'=>'islam','total_gaji'=>'5000.000'

            ],

            [
                'nama'=>'fatur','jabatan'=>'bos', 'jk'=>'laki-laki',
                'alamat'=>'rancamanyar', 'agama'=>'islam','total_gaji'=>'5000.000'

            ],

            [
                'nama'=>'fatur','jabatan'=>'bos', 'jk'=>'laki-laki',
                'alamat'=>'rancamanyar', 'agama'=>'islam','total_gaji'=>'5000.000'

            ]
        ];
         // masukan data ke database
         DB::table('penggajians')->insert($data);

    }
}
