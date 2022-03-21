<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Booking')->insert([
            'user_id' => 6,
            'tour_id' => 1
        ]);

        DB::table('Booking')->insert([
            'user_id' => 7,
            'tour_id' => 3
        ]);

    }
}
