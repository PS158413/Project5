<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class OefeningenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('oefeningen')->insert([
            'oefeningen' => 'Push-up ',
            'Beschrijving' => 'pushup.txt',
            'foto' => 'pushup.jpg',

        ]);
    }
}
