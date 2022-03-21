<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TourTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Tour')->insert([
            "title" => "Tour 1",
            "price" => 4.3,
            "overview" => "Tour 1 Overview",
            "img" => "https://res.cloudinary.com/petern/image/upload/v1647505688/travelmanagementproject_tourimg/img1_knmwxo.jpg"
        ]);

        DB::table('Tour')->insert([
            "title" => "Tour 2",
            "price" => 4.3,
            "overview" => "Tour 2 Overview",
            "img" => "https://res.cloudinary.com/petern/image/upload/v1647505689/travelmanagementproject_tourimg/img2_dvtdyh.jpg"
        ]);

        DB::table('Tour')->insert([
            "title" => "Tour 3",
            "price" => 5,
            "overview" => "Tour 3 Overview",
            "img" => "https://res.cloudinary.com/petern/image/upload/v1647505688/travelmanagementproject_tourimg/img3_bxk0we.jpg"
        ]);

        DB::table('Tour')->insert([
            "title" => "Tour 4",
            "price" => 5,
            "overview" => "Tour 4 Overview",
            "img" => "https://res.cloudinary.com/petern/image/upload/v1647505688/travelmanagementproject_tourimg/img4_qsmmvd.jpg"
        ]);

        DB::table('Tour')->insert([
            "title" => "Tour 5",
            "price" => 500.9,
            "overview" => "Tour 5 Overview",
            "img" => "https://res.cloudinary.com/petern/image/upload/v1647505689/travelmanagementproject_tourimg/img5_cwgw9n.png"
        ]);

        DB::table('Tour')->insert([
            "title" => "Tour 6",
            "price" => 500.9,
            "overview" => "Tour 6 Overview",
            "img" => "https://res.cloudinary.com/petern/image/upload/v1647505689/travelmanagementproject_tourimg/img5_cwgw9n.png"
        ]);

        DB::table('Tour')->insert([
            "title" => "Tour 7",
            "price" => 500.9,
            "overview" => "Tour 7 Overview",
            "img" => "https://res.cloudinary.com/petern/image/upload/v1647505689/travelmanagementproject_tourimg/img5_cwgw9n.png"
        ]);

        DB::table('Tour')->insert([
            "title" => "Tour 8",
            "price" => 1000,
            "overview" => "Tour 8 Overview",
            "img" => "https://res.cloudinary.com/petern/image/upload/v1647505689/travelmanagementproject_tourimg/img5_cwgw9n.png"
        ]);

        DB::table('Tour')->insert([
            "title" => "Tour 9",
            "price" => 700,
            "overview" => "Tour 9 Overview",
            "img" => "https://res.cloudinary.com/petern/image/upload/v1647505689/travelmanagementproject_tourimg/img5_cwgw9n.png"
        ]);

        DB::table('Tour')->insert([
            "title" => "Tour 10",
            "price" => 4.3,
            "overview" => "Tour 1 Overview",
            "img" => "https://res.cloudinary.com/petern/image/upload/v1647505688/travelmanagementproject_tourimg/img1_knmwxo.jpg"
        ]);

        DB::table('Tour')->insert([
            "title" => "Tour 11",
            "price" => 4.3,
            "overview" => "Tour 1 Overview",
            "img" => "https://res.cloudinary.com/petern/image/upload/v1647505688/travelmanagementproject_tourimg/img1_knmwxo.jpg"
        ]);

        DB::table('Tour')->insert([
            "title" => "Tour 12",
            "price" => 4.3,
            "overview" => "Tour 1 Overview",
            "img" => "https://res.cloudinary.com/petern/image/upload/v1647505688/travelmanagementproject_tourimg/img1_knmwxo.jpg"
        ]);

        DB::table('Tour')->insert([
            "title" => "Tour 13",
            "price" => 4.3,
            "overview" => "Tour 1 Overview",
            "img" => "https://res.cloudinary.com/petern/image/upload/v1647505688/travelmanagementproject_tourimg/img1_knmwxo.jpg"
        ]);

        DB::table('Tour')->insert([
            "title" => "Tour 14",
            "price" => 4.3,
            "overview" => "Tour 1 Overview",
            "img" => "https://res.cloudinary.com/petern/image/upload/v1647505688/travelmanagementproject_tourimg/img1_knmwxo.jpg"
        ]);

        DB::table('Tour')->insert([
            "title" => "Tour 15",
            "price" => 4.3,
            "overview" => "Tour 1 Overview",
            "img" => "https://res.cloudinary.com/petern/image/upload/v1647505688/travelmanagementproject_tourimg/img1_knmwxo.jpg"
        ]);


        DB::table('Tour')->insert([
            "title" => "Tour 16",
            "price" => 4.3,
            "overview" => "Tour 1 Overview",
            "img" => "https://res.cloudinary.com/petern/image/upload/v1647505688/travelmanagementproject_tourimg/img1_knmwxo.jpg"
        ]);

        DB::table('Tour')->insert([
            "title" => "Tour 17",
            "price" => 5,
            "overview" => "Tour 3 Overview",
            "img" => "https://res.cloudinary.com/petern/image/upload/v1647505688/travelmanagementproject_tourimg/img3_bxk0we.jpg"
        ]);

        DB::table('Tour')->insert([
            "title" => "Tour 18",
            "price" => 5,
            "overview" => "Tour 3 Overview",
            "img" => "https://res.cloudinary.com/petern/image/upload/v1647505688/travelmanagementproject_tourimg/img3_bxk0we.jpg"
        ]);
    }
}
