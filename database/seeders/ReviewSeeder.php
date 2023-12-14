<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Place;
use App\Models\Review;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        // Find or create the user and place
        $user = User::find(1) ?? User::factory()->create();
        $place = Place::find(1) ?? Place::factory()->create();

        // Create and associate reviews using Eloquent relationships
        $review1 = $user->reviews()->create([
            'place_id' => $place->id,
            'content' => "A good place for ice cream!",
            'rating' => 4,
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        $review2 = $user->reviews()->create([
            'place_id' => $place->id,
            'content' => "Nice place.",
            'rating' => 3,
            'created_at' => $now,
            'updated_at' => $now,
        ]);
    }
}
