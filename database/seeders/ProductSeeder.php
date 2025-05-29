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
                'gallery' => 'https://5.imimg.com/data5/NN/PW/XN/SELLER-8587078/11-500x500.jpg',
            ],
            [
                'name' => 'LG MOBILE',
                'price' => '10000',
                'description' => 'A smart pgone 4gb ram and fetures',
                'category' => 'mobile',
                'gallery' => 'https://www.jansatta.com/wp-content/uploads/2020/02/lg-w10-alpha.jpg?w=440',
            ],
            [
                'name' => 'APPLE',
                'price' => '100000',
                'description' => 'A I pgone 16gb ram and Any fetures',
                'category' => 'mobile',
                'gallery' => 'https://m.media-amazon.com/images/I/61Fo5cwt0uL.jpg',
            ],
            [
                'name' => 'LG TV',
                'price' => '16000',
                'description' => 'A smart tv much fetures',
                'category' => 'tv',
                'gallery' => 'https://www.shutterstock.com/image-photo/modern-tv-set-isolated-on-260nw-2548119265.jpg',
            ],
            [
                'name' => 'LG',
                'price' => '10000',
                'description' => 'A frige much be fetures',
                'category' => 'frige',
                'gallery' => 'https://dukaan.b-cdn.net/700x700/webp/18319/e4a5024c-c265-4a88-9688-6ceb4191c6ea.png',
            ],
        ]);
    }
}
