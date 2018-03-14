<?php

use Illuminate\Database\Seeder;

class AdvertsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('adverts')->delete();

        \DB::table('adverts')->insert(array (
            0 =>
            array (
                'id' => 1,
                'category_id' => 2,
                'user_id' => 1,
                'region_id' => 9,
                'title' => 'Selling a teddy bear',
                'price' => 500,
                'photomain' => 'teddy.jpg',
                'description' => 'It is a very nice teddy bear!',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),

            1 =>
            array (
                'id' => 2,
                'category_id' => 3,
                'user_id' => 2,
                'region_id' => 3,
                'title' => 'Watch?',
                'price' => 2500,
                'photomain' => 'casio.jpg',
                'description' => 'It is a very good watch!',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),

            2 =>
            array (
                'id' => 3,
                'category_id' => 4,
                'user_id' => 3,
                'region_id' => 6,
                'title' => 'Selling a refrigerator',
                'price' => 12500,
                'photomain' => 'beko.jpg',
                'description' => 'This is a modern energy-saving refrigerator.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),

            3 =>
            array (
                'id' => 4,
                'category_id' => 4,
                'user_id' => 1,
                'region_id' => 9,
                'title' => 'Selling blender',
                'price' => 10400,
                'photomain' => 'philips.jpg',
                'description' => 'This is a modern energy-saving blender. It is indispensable in your kitchen.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),


            4 =>
            array (
                'id' => 5,
                'category_id' => 1,
                'user_id' => 1,
                'region_id' => 9,
                'title' => 'Selling candies "Candy Nat"',
                'price' => 80,
                'photomain' => Null,
                'description' => 'This is very tasty candies "Candy Nat"',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),

            5 =>
            array (
                'id' => 6,
                'category_id' => 6,
                'user_id' => 4,
                'region_id' => 12,
                'title' => 'Apartment for rent',
                'price' => 3500,
                'photomain' => Null,
                'description' => 'Rent an apartment in the city center.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),

            6 =>
            array (
                'id' => 7,
                'category_id' => 5,
                'user_id' => 1,
                'region_id' => 9,
                'title' => 'Car for sale',
                'price' => 400000,
                'photomain' => 'car1.jpg',
                'description' => 'I sell the car.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),

            7 =>
            array (
                'id' => 8,
                'category_id' => 5,
                'user_id' => 2,
                'region_id' => 4,
                'title' => 'Car for sale',
                'price' => 500000,
                'photomain' => 'car2.jpg',
                'description' => 'I sell the vonderfull car.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));

    }
}