<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'OPPO MOBILE',
                'price' => '15000',
                'description' => 'A smart pgone 8gb ram and fetures',
                'category' => 'mobile',
                'gallery' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2CiXNGZuSajEN9kMLVVAy17jLWEQ11aE4gwfi8Egn6dX8cyGgZ1Ux9myFau3n4aY3dYM&usqp=CAU',
            ],
            [
                'name' => 'LG MOBILE',
                'price' => '10000',
                'description' => 'A smart pgone 4gb ram and fetures',
                'category' => 'mobile',
                'gallery' => 'https://cdn.thewirecutter.com/wp-content/media/2025/02/BEST-ANDROID-PHONES-2048px-2x1-1.jpg?width=2048&quality=75&crop=2:1&auto=webp',
            ],
            [
                'name' => 'APPLE',
                'price' => '100000',
                'description' => 'A I pgone 16gb ram and Any fetures',
                'category' => 'mobile',
                'gallery' => 'https://platform.theverge.com/wp-content/uploads/sites/2/chorus/uploads/chorus_asset/file/25626805/DSC08374_alt_3.jpg?quality=90&strip=all&crop=0%2C0.02498750624688%2C100%2C99.950024987506&w=2400',
            ],
            [
                'name' => 'LG TV',
                'price' => '16000',
                'description' => 'A smart tv much fetures',
                'category' => 'tv',
                'gallery' => 'https://media.currys.biz/i/currysprod/Best-TVs-To-Buy-Header',
            ],
            [
                'name' => 'LG',
                'price' => '10000',
                'description' => 'A frige much be fetures',
                'category' => 'frige',
                'gallery' => 'https://www.shutterstock.com/image-illustration/refrigerator-fridge-on-kitchen-tiled-260nw-1119285371.jpg',
            ],
        ]);
    }
}
