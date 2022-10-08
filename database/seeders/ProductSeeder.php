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
            'name'=>'Redmi Mobile',
            'price'=>'10000',
            'category'=>'Mobile',
            'name'=>'Redmi Mobile',
            'description'=>'A smart Phone with 8gb ram',
            'gallery'=>'https://asia-exstatic-vivofs.vivo.com/PSee2l50xoirPK7y/1550644183807/cc6372030dbbe0b91928f83e22f0dff2.png',
            ],
            [
                'name'=>'Oppo Mobile',
                'price'=>'10000',
                'category'=>'Mobile',
                'name'=>'Oppo Mobile',
                'description'=>'A smart Phone with 8gb ram',
                'gallery'=>'https://assorted.downloads.oppo.com/static/assets/products/a31/images/s1_banner_md-edade10cc21fe687e948a509b22e4350.png',
            ], [
                'name'=>'I Phone',
                'price'=>'50000',
                'category'=>'Mobile',
                'name'=>'I phone',
                'description'=>'A smart Phone with 8gb ram',
                'gallery'=>'https://fdn2.gsmarena.com/vv/pics/apple/apple-iphone-13-01.jpg',
            ], [
                'name'=>'Freez',
                'price'=>'20000',
                'category'=>'Electronic',
                'name'=>'Freez',
                'description'=>'A smart Phone with 8gb ram',
                'gallery'=>'https://www.indiamart.com/proddetail/freez-service-repairing-22175168433.html',
            ], [
                'name'=>'LG TV',
                'price'=>'80000',
                'category'=>'TV',
                'name'=>'LG102',
                'description'=>'A Tv is good HD quality',
                'gallery'=>'https://www.lg.com/eg_en/tvs/lg-oled65g26la#none',
                ]
        
        
        ]);
    } 
}
