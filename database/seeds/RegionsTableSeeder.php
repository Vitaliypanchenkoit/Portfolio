<?php

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('regions')->delete();
        
        \DB::table('regions')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'АР Крым',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'Винницкая область',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'Волынская область',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'Днепропетровская',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'Донецкая область',
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'Житомирская область',
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'Закарпатская область',
            ),
            7 => 
            array (
                'id' => 9,
                'name' => 'Запорожская область',
            ),
            8 => 
            array (
                'id' => 10,
                'name' => 'Ивано-Франковская область',
            ),
            9 => 
            array (
                'id' => 11,
                'name' => 'Киевская область',
            ),
            10 => 
            array (
                'id' => 12,
                'name' => 'Кировоградская область',
            ),
            11 => 
            array (
                'id' => 13,
                'name' => 'Луганская область',
            ),
            12 => 
            array (
                'id' => 14,
                'name' => 'Львовская область',
            ),
            13 => 
            array (
                'id' => 15,
                'name' => 'Николаевская область',
            ),
            14 => 
            array (
                'id' => 16,
                'name' => 'Одесская область',
            ),
            15 => 
            array (
                'id' => 17,
                'name' => 'Полтавская область',
            ),
            16 => 
            array (
                'id' => 18,
                'name' => 'Ровенская область',
            ),
            17 => 
            array (
                'id' => 19,
                'name' => 'Сумская область',
            ),
            18 => 
            array (
                'id' => 20,
                'name' => 'Тернопольская область',
            ),
            19 => 
            array (
                'id' => 21,
                'name' => 'Харьковская область',
            ),
            20 => 
            array (
                'id' => 22,
                'name' => 'Херсонская область',
            ),
            21 => 
            array (
                'id' => 23,
                'name' => 'Хмельницкая область',
            ),
            22 => 
            array (
                'id' => 24,
                'name' => 'Черниговская область',
            ),
            23 => 
            array (
                'id' => 25,
                'name' => 'Черновицкая область',
            ),
        ));
        
        
    }
}