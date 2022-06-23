<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class oefeningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('oefening')->insert([
            'oefening' => 'Push-up',
            'beschrijving' => 'pushup.txt',
            'foto' => 'pushup.jpg',

        ]);

        DB::table('oefening')->insert([
            'oefening' => 'Squat',
            'beschrijving' => 'squat.txt',
            'foto' => 'squat.jpg',

        ]);

        DB::table('oefening')->insert([
            'oefening' => 'Dip',
            'beschrijving' => 'dip.txt',
            'foto' => 'dip.jpg',

        ]);

        DB::table('oefening')->insert([
            'oefening' => 'Plank',
            'beschrijving' => 'plank.txt',
            'foto' => 'plank.jpg',

        ]);

        DB::table('oefening')->insert([
            'oefening' => 'Paardentrap',
            'beschrijving' => 'paardentrap.txt',
            'foto' => 'paardentrap.jpg',

        ]);

        DB::table('oefening')->insert([
            'oefening' => 'Mountain climber',
            'beschrijving' => 'mountainclimber.txt',
            'foto' => 'mountainclimber.jpg',

        ]);

        DB::table('oefening')->insert([
            'oefening' => 'Burpee',
            'beschrijving' => 'burpee.txt',
            'foto' => 'burpee.jpg',

        ]);
    }
}
