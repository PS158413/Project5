<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class oefeningenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('oefeningen')->insert([
            'oefening' => 'Push-up',
            'Beschrijving' => 'pushup.txt',
            'foto' => 'pushup.jpg',

        ]);

        DB::table('oefeningen')->insert([
            'oefening' => 'Squat',
            'Beschrijving' => 'squat.txt',
            'foto' => 'squat.jpg',

        ]);

        DB::table('oefeningen')->insert([
            'oefening' => 'Dip',
            'Beschrijving' => 'dip.txt',
            'foto' => 'dip.jpg',

        ]);

        DB::table('oefeningen')->insert([
            'oefening' => 'Plank',
            'Beschrijving' => 'plank.txt',
            'foto' => 'plank.jpg',

        ]);

        DB::table('oefeningen')->insert([
            'oefening' => 'Paardentrap',
            'Beschrijving' => 'paardentrap.txt',
            'foto' => 'paardentrap.jpg',

        ]);

        DB::table('oefeningen')->insert([
            'oefening' => 'Mountain climber',
            'Beschrijving' => 'mountainclimber.txt',
            'foto' => 'mountainclimber.jpg',

        ]);

        DB::table('oefeningen')->insert([
            'oefening' => 'Burpee',
            'Beschrijving' => 'burpee.txt',
            'foto' => 'burpee.jpg',

        ]);
    }
}
