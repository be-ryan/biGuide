<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();
        $placeList = [
            [
                'place_category_id' => 1,
                'name' => 'Mixue',
                'address' => 'Jl. Rw. Belong No.35',
                'description' => 'Mixue an ice cream shop with lot of different variants and also drinks. A perfect choice to cool yourself in the hot weather! With a cool and comfy place to have a chat or chill with your friends.',
                'img' => '/img/mixueImg.png',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'place_category_id' => 2,
                'name' => 'WishWash',
                'address' => 'Jl. Rw. Belong No.36',
                'description' => 'Leave your laundry with WishWash, it\'ll be cleaned like a brand new clothes in just two day!',
                'img' => '/img/mixueImg.png',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'place_category_id' => 3,
                'name' => 'BarBer',
                'address' => 'Jl. Rw. Belong No.37',
                'description' => 'Mixue an ice cream shop with lot of different variants and also drinks. A perfect choice to cool yourself in the hot weather! With a cool and comfy place to have a chat or chill with your friends.',
                'img' => '/img/mixueImg.png',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'place_category_id' => 1,
                'name' => 'Mixue',
                'address' => 'Jl. Rw. Belong No.38',
                'description' => 'Mixue an ice cream shop with lot of different variants and also drinks. A perfect choice to cool yourself in the hot weather! With a cool and comfy place to have a chat or chill with your friends.',
                'img' => '/img/mixueImg.png',
                'created_at' => $now,
                'updated_at' => $now
            ],
        ];

        DB::table('places')->insert($placeList);
    }
}
