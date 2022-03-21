<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Ticket_TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Ticket_Type')->insert([
            "type" => 0,
            "discount" =>0,
        ]);

        DB::table('Ticket_Type')->insert([
            "type" => 1,
            "discount" =>25,
        ]);
    }
}
