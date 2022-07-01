<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class OefeningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('oefenings')->insert([
            'oefenings' => 'Push-up',
            'beschrijving' => 'Opdrukken of eventueel “push-ups” is een oefening waarbij men alleen het eigen lichaam als gewicht gebruikt.
            1. Leg je voeten en handen op de grond in een opgerichte positie.
            2. Laat je lichaam zakken totdat je borst bijna de grond raakt.
            3. Druk je lichaam weer omhoog.
            4. Herhaal de oefening meerdere keren.
            ',
            'foto' => 'pushup.jpg',

        ]);

        DB::table('oefenings')->insert([
            'oefenings' => 'Squat',
            'beschrijving' => '
            Een squat is een kracht-oefening, waarbij je je heupen naar beneden doet vanuit een staande positie, daarna kom je recht overeind te staan.
            
            1. Zet je voeten schouderbreedte.
            
            2. Houd je armen op schouderhoogte.
            
            3. Zak langzaam naar beneden tot je benen in een hoek van 90 graden zitten. ...
            
            4. De knieën blijven op schouderbreedte.
            
            5. Kom nu weer langzaam omhoog en zorg dat je hele lichaam weer recht is.
            ',
            'foto' => 'squat.jpg',

        ]);

        DB::table('oefenings')->insert([
            'oefenings' => 'Dip',
            'beschrijving' => '
            Een dip is een oefening waarbij je je tricep / borst traint.
            
            1. Zet je handen op 2 handvaten. Zorg ervoor dat je voeten van de grond af zijn en licht gebogen zijn.
            
            2. Laat je lichaam naar beneden zakken, door je ellebogen te buigen.
            
            3. Zodra je ellebogen ongeveer op 90 graden is, duw je je lichaam weer omhoog.
            ',
            'foto' => 'dip.jpg',

        ]);

        DB::table('oefenings')->insert([
            'oefenings' => 'Plank',
            'beschrijving' => '
            Er zijn vele variaties van de plank. Voordat je deze oefening gaat proberen, is het wel handig om eerst de basistechnieken goed te leren voordat je blessures oploopt.  Een standard plank oefening voer je als volg uit.
            
            1. Ga eerst op je buik liggen en plaats je onderarmen langs je lichaam op de grond.
            
            2. Breng je armen in een hoek van 90 graden en zorg dat je elleboog precies onder je schouder is geplaatst
            
            3. Ga op je tenen staan en breng je knieën van de grond.
            
            4. Houd deze positie zo lang mogelijk vast. Als je schouders of heupen gedurende de oefening naar beneden zaken, druk ze dan opnieuw uit.
            ',
            'foto' => 'plank.jpg',

        ]);

        DB::table('oefenings')->insert([
            'oefenings' => 'Paardentrap',
            'beschrijving' => 'Deze oefening is bedoeld voor je bilspieren, ook verbetert het je rug.

            1. Ga met je kieen en handen op de grond zitten.
            
            2. Daarna strekt u 1 been recht naar achter, tot hij horizontaal is. Doe deze oefening rustig, zodat je de goede spieren traint.
            
            3. Om het moeilijker te maken kunt u uw hand recht naar voren uitstrekken in tegengestelde richting.
            
            4. Wissel daarna af van been, u kunt ook om en om doen.
            ',
            'foto' => 'paardentrap.jpg',

        ]);

        DB::table('oefenings')->insert([
            'oefenings' => 'Mountain climber',
            'beschrijving' => '
            Met deze oefening train je vooral je benen , buik, rug, core en armen en is geschikt om een warming up te doen. Een standaard mountain climber oefening voer je als volg uit:
            
            1. Ga op je handen en tenen met je lichaam gestrekt alsof je gaat opdrukken.
            
            2. Plaats dan een voet naar voren en houd je andere been gestrekt.
            
            3. Doe nu je achterste voet naar voren, terwijl je tegelijkertijd je voorste voet naar weer naar achter plaatst.
            
            4. Blijf doorgaan met wisselen van je linker er rechterknie totdat je in een soort ritme komt net zoal als je op en berg klimt.
            ',
            'foto' => 'mountainclimber.jpg',

        ]);

        DB::table('oefenings')->insert([
            'oefenings' => 'Burpee',
            'beschrijving' => 'Burpee


            Het is een combinatie van een squat, een push-up en een sprong. Daardoor train je alle grote spiergroepen van je lichaam.
            
            
            1. Sta rechtop.
            
            2. Zak door je knieën en tik de grond aan.
            
            3. Blijf met je handen op de grond en duw je benen naar achter, zodat je in een pushup houding staat.
            
            4. Doe een push-up en kom weer precies in de positie van stap 1.
            
            5. Spring in de lucht en strek je armen omhoog.
            
            6. Herhaal dit meerdere malen.
            ',
            'foto' => 'burpee.jpg',

        ]);
    }
}
