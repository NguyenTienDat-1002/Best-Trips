<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Tour_HighlightTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Tour_Highlight')->insert([
            "tour_id" => 1,
            "highlight" => "Highlight 1-1"
        ]);

        DB::table('Tour_Highlight')->insert([
            "tour_id" => 1,
            "highlight" => "Highlight 1-2"
        ]);

        DB::table('Tour_Highlight')->insert([
            "tour_id" => 2,
            "highlight" => "Highlight 2-1"
        ]);

        DB::table('Tour_Highlight')->insert([
            "tour_id" => 2,
            "highlight" => "Highlight 2-2"
        ]);

        DB::table('Tour_Highlight')->insert([
            "tour_id" => 3,
            "highlight" => "Highlight 3-1"
        ]);

        DB::table('Tour_Highlight')->insert([
            "tour_id" => 3,
            "highlight" => "Highlight 3-2"
        ]);

        DB::table('Tour_Highlight')->insert([
            "tour_id" => 4,
            "highlight" => "Highlight 4-1"
        ]);

        DB::table('Tour_Highlight')->insert([
            "tour_id" => 4,
            "highlight" => "Highlight 4-2"
        ]);

        DB::table('Tour_Highlight')->insert([
            "tour_id" => 5,
            "highlight" => "Highlight 5-1"
        ]);

        DB::table('Tour_Highlight')->insert([
            "tour_id" => 5,
            "highlight" => "Highlight 5-2"
        ]);

        DB::table('Tour_Highlight')->insert([
            "tour_id" => 6,
            "highlight" => "Highlight 6-1"
        ]);

        DB::table('Tour_Highlight')->insert([
            "tour_id" => 6,
            "highlight" => "Highlight 6-2"
        ]);

        DB::table('Tour_Highlight')->insert([
            "tour_id" => 7,
            "highlight" => "Highlight 7-1"
        ]);

        DB::table('Tour_Highlight')->insert([
            "tour_id" => 7,
            "highlight" => "Highlight 7-2"
        ]);

        DB::table('Tour_Highlight')->insert([
            "tour_id" => 8,
            "highlight" => "Highlight 8-1"
        ]);

        DB::table('Tour_Highlight')->insert([
            "tour_id" => 8,
            "highlight" => "Highlight 8-2"
        ]);

        DB::table('Tour_Highlight')->insert([
            "tour_id" => 9,
            "highlight" => "Highlight 9-1"
        ]);

        DB::table('Tour_Highlight')->insert([
            "tour_id" => 9,
            "highlight" => "Highlight 9-2"
        ]);
    }
}
