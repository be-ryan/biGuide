<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();
        $reviewList = [
            [
                'user_id' => 1,
                'place_id' => 1,
                'content' => "A good place for ice cream!",
                'rating' => 4,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'user_id' => 1,
                'place_id' => 1,
                'content' => "Nice place.",
                'rating' => 3,
                'created_at' => $now,
                'updated_at' => $now
            ],
        ];

        DB::table('reviews')->insert($reviewList);
    }
}
