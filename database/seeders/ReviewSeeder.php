<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

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
                'user_id' => 2,
                'place_id' => 1,
                'content' => 'A good place for ice cream!',
                'rating' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 3,
                'place_id' => 2,
                'content' => 'Perfect',
                'rating' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 4,
                'place_id' => 3,
                'content' => 'i like the service here, nice results',
                'rating' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 2,
                'place_id' => 4,
                'content' => 'Good portion for the price',
                'rating' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 3,
                'place_id' => 5,
                'content' => 'There\'s no medicine that i needed',
                'rating' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 4,
                'place_id' => 6,
                'content' => 'Pretty long queue',
                'rating' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 2,
                'place_id' => 7,
                'content' => 'Nice place to get coffee',
                'rating' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 3,
                'place_id' => 1,
                'content' => 'I like ice cream!',
                'rating' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 4,
                'place_id' => 2,
                'content' => 'My clothes smells so good and looks brand new!',
                'rating' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 2,
                'place_id' => 3,
                'content' => 'I\'m satisfied with the cut, nicely done.',
                'rating' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 3,
                'place_id' => 4,
                'content' => 'I mean it was meh, the chicken is kinda dry. Maybe I ordered the wrong one',
                'rating' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 4,
                'place_id' => 5,
                'content' => 'Got the medicine I need, and nice place!',
                'rating' => '4',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 2,
                'place_id' => 6,
                'content' => 'Filled my car\'s gas here, the service was nice.',
                'rating' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 3,
                'place_id' => 7,
                'content' => 'Nice coffee, i could taste the coffee bean. Liked it!',
                'rating' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 4,
                'place_id' => 1,
                'content' => 'A pretty okay place with drinks.',
                'rating' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 4,
                'place_id' => 4,
                'content' => 'Price was okay, portion is enought to make me fulled, and also free drink!',
                'rating' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 2,
                'place_id' => 5,
                'content' => 'I can check for my blood pressure, glucose, and tension here!',
                'rating' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        DB::table('reviews')->insert($reviewList);
    }
}
