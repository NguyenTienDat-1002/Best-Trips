<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Tour_ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Tour_Review')->insert([
            'user_id' => 6,
            'tour_id' => 1,
            'rate' => 4,
            'comment' => 'User review'
        ]);

        DB::table('Tour_Review')->insert([
            'user_id' => 6,
            'tour_id' => 2,
            'rate' => 3,
            'comment' => 'User review'
        ]);

        DB::table('Tour_Review')->insert([
            'user_id' => 7,
            'tour_id' => 3,
            'rate' => 4,
            'comment' => 'User review'
        ]);
    }
}
