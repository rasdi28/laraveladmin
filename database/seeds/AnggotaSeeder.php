<?php

use Illuminate\Database\Seeder;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('anggota')->insert([
            [
                'name'=>'rasdi',
                'email'=>'rasdi@gmail.com',
                'jenjang'=>'SD',
            ],
            [
                'name'=>'abdul',
                'email'=>'abdul@gmail.com',
                'jenjang'=>'SMP',
            ]

        ]);
    }
}
