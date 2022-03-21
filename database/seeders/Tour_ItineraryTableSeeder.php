<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Tour_ItineraryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Tour_Itinerary')->insert([
            'tour_id' => 1,
            'name' => 'Day 1: Go to...',
            'description' => 'Day 1 description',
        ]);

        DB::table('Tour_Itinerary')->insert([
            'tour_id' => 1,
            'name' => 'Day 2: Go to...',
            'description' => 'Day 2 description',
        ]);

        DB::table('Tour_Itinerary')->insert([
            'tour_id' => 1,
            'name' => 'Day 3: Go to...',
            'description' => 'Day 3 description',
        ]);

        DB::table('Tour_Itinerary')->insert([
            'tour_id' => 2,
            'name' => 'Day 1: Go to...',
            'description' => 'Day 1 description',
        ]);

        DB::table('Tour_Itinerary')->insert([
            'tour_id' => 2,
            'name' => 'Day 2: Go to...',
            'description' => 'Day 2 description',
        ]);

        DB::table('Tour_Itinerary')->insert([
            'tour_id' => 2,
            'name' => 'Day 3: Go to...',
            'description' => 'Day 3 description',
        ]);

        DB::table('Tour_Itinerary')->insert([
            'tour_id' => 3,
            'name' => 'Day 1: Go to...',
            'description' => 'Day 1 description',
        ]);

        DB::table('Tour_Itinerary')->insert([
            'tour_id' => 3,
            'name' => 'Day 2: Go to...',
            'description' => 'Day 2 description',
        ]);

        DB::table('Tour_Itinerary')->insert([
            'tour_id' => 3,
            'name' => 'Day 3: Go to...',
            'description' => 'Day 3 description',
        ]);

        DB::table('Tour_Itinerary')->insert([
            'tour_id' => 4,
            'name' => 'Day 1: Go to...',
            'description' => 'Day 1 description',
        ]);

        DB::table('Tour_Itinerary')->insert([
            'tour_id' => 4,
            'name' => 'Day 2: Go to...',
            'description' => 'Day 2 description',
        ]);

        DB::table('Tour_Itinerary')->insert([
            'tour_id' => 4,
            'name' => 'Day 3: Go to...',
            'description' => 'Day 3 description',
        ]);
    }
}
