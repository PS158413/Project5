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
            'oefeningen' => 'Push-up',
            'Beschrijving' => 'pushup.txt',
            'foto' => 'pushup.jpg',

        ]);

        DB::table('oefeningen')->insert([
            'oefeningen' => 'Squat',
            'Beschrijving' => 'squat.txt',
            'foto' => 'squat.jpg',

        ]);

        DB::table('oefeningen')->insert([
            'oefeningen' => 'Dip',
            'Beschrijving' => 'dip.txt',
            'foto' => 'dip.jpg',

        ]);

        DB::table('oefeningen')->insert([
            'oefeningen' => 'Plank',
            'Beschrijving' => 'plank.txt',
            'foto' => 'plank.jpg',

        ]);

        DB::table('oefeningen')->insert([
            'oefeningen' => 'Paardentrap',
            'Beschrijving' => 'paardentrap.txt',
            'foto' => 'paardentrap.jpg',

        ]);

        DB::table('oefeningen')->insert([
            'oefeningen' => 'Mountain climber',
            'Beschrijving' => 'mountainclimber.txt',
            'foto' => 'mountainclimber.jpg',

        ]);

        DB::table('oefeningen')->insert([
            'oefeningen' => 'Burpee',
            'Beschrijving' => 'burpee.txt',
            'foto' => 'burpee.jpg',

        ]);
    }
}
