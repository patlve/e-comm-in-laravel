<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        DB::table('products')->insert([
          [
            'name'=>'redmi',
            'price'=>'200',
            'description'=>'a smath phone with 6g RAM',
            'category'=>'mobile',
            'galary'=>'https://unite4buy.com/media/images/2018/07/18/xiaomi-mi6x-main-0111.jpg',
            
          ],
          [
            'name'=>'iphone',
            'price'=>'500',
            'description'=>'a smath phone with 6g RAM',
            'category'=>'mobile',
            'galary'=>'https://unite4buy.com/media/images/2018/07/18/xiaomi-mi6x-main-0111.jpg',
            
          ],
          [
            'name'=>'samsung',
            'price'=>'800',
            'description'=>'a smath phone with 6g RAM',
            'category'=>'mobile',
            'galary'=>'https://unite4buy.com/media/images/2018/07/18/xiaomi-mi6x-main-0111.jpg',
            
          ],
          [
            'name'=>'fridge',
            'price'=>'1000',
            'description'=>'a fridge with more functionality',
            'category'=>'fridge',
            'galary'=>'https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/21mJWjJleHL.jpg',
            
          ]
        ]);
    }
}
