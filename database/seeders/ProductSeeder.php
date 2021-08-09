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
                'name' => 'fridge kitchenaid',
                'price' => '1700',
                'description' => 'A big fridge with a very good quality',
                'category' => 'fridge',
                'gallery' => 'https://pisces.bbystatic.com/image2/BestBuy_US/images/products/5508/5508007_sd.jpg'

            ],
            [
                'name' => 'Condor air conditioner',
                'price' => '1800',
                'description' => 'Air conditioner with multifunctionnalities',
                'category' => 'Air conditioner',
                'gallery' => 'https://spacenet.tn/52804-large_default/-climatiseur-condor-9000-btu-chaud-froid-cs09-al14t3-o.jpg'
            ]
        ]);
    }
}
