<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlaceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $placeCategoryList = [
            ['name' => 'Foods'],
            ['name' => 'Laundry'],
            ['name' => 'Barber'],
            ['name' => 'Hospital'],
            ['name' => 'Market'],
            ['name' => 'Gas Station'],
            ['name' => 'Pharmacy'],
            ['name' => 'Public Transport Facilities'],
        ];

        DB::table('place_categories')->insert($placeCategoryList);
    }
}
