<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UserTableSeeder::class);

        $this->call(TourTableSeeder::class);

        $this->call(Tour_HighlightTableSeeder::class);

        $this->call(Tour_ItineraryTableSeeder::class);

        $this->call(Ticket_TypeTableSeeder::class);
    
        $this->call(BookingTableSeeder::class);

        $this->call(TicketTableSeeder::class);

        $this->call(Tour_ReviewTableSeeder::class);
    }
}
