<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Ticket')->insert([
            'booking_id' => 1,
            'ticket_type' => 1
        ]);

        DB::table('Ticket')->insert([
            'booking_id' => 1,
            'ticket_type' => 0
        ]);

        DB::table('Ticket')->insert([
            'booking_id' => 1,
            'ticket_type' => 0
        ]);

        DB::table('Ticket')->insert([
            'booking_id' => 2,
            'ticket_type' => 0
        ]);

        DB::table('Ticket')->insert([
            'booking_id' => 2,
            'ticket_type' => 0
        ]);
    }
}
