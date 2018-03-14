<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categories')->delete();

        \DB::table('categories')->insert(array (
            0 =>
            array (
                'id' => 1,
                'title' => 'Food',
                'image' => 'template/images/product/01.jpg',
            ),
            1 =>
            array (
                'id' => 2,
                'title' => 'Toys',
                'image' => 'template/images/product/02.jpg',
            ),
            2 =>
            array (
                'id' => 3,
                'title' => 'Presents',
                'image' => 'template/images/product/03.jpg',
            ),
            3 =>
            array (
                'id' => 4,
                'title' => 'Appliances',
                'image' => 'template/images/product/04.jpg',
            ),
            4 =>
            array (
                'id' => 5,
                'title' => 'Cars',
                'image' => 'template/images/product/05.jpg',
            ),
            5 =>
            array (
                'id' => 6,
                'title' => 'Realty',
                'image' => 'template/images/product/06.jpg',
            ),
            6 =>
            array (
                'id' => 7,
                'title' => 'Comfort',
                'image' => 'template/images/product/07.jpg',
            ),
            7 =>
            array (
                'id' => 8,
                'title' => 'Other',
                'image' => 'template/images/product/08.jpg',
            ),
        ));
    }
}
