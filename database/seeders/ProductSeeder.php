<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            
           
            [
                'name' => 'Sharp Microwave',
                'price' => '850',
                'description' => 'A very good quality microwave for kitchen',
                'category' => 'Microwave',
                'gallery' => 'https://m.media-amazon.com/images/I/91aiQGFn+dL._AC_SL1500_.jpg'

            ],
            [
                'name' => 'Oppo Mobile',
                'price' => '1200',
                'description' => 'A mobile with 4gb',
                'category' => 'Mobile',
                'gallery' => 'https://m.media-amazon.com/images/I/61sJK+-lNaL._SX679_.jpg'
            ],

            [
                'name' => 'Sony Tv',
                'price' => '1999',
                'description' => 'A HD 4k flat',
                'category' => 'TV',
                'gallery' => 'https://www.bijlibachao.com/wp-content/uploads/2017/07/Sony-featured-Tv.jpg'
            ]
        ]);
    }
}
