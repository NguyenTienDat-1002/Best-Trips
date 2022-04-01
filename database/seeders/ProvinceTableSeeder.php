<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $vietnam = [['province'=>"An Giang"],['province'=>"Bà Rịa - Vũng Tàu"],['province'=>"Bạc Liêu"],['province'=>"Bắc Giang"],
        ['province'=>"Bắc Kạn"],['province'=>"Bắc Ninh"],['province'=>"Bến Tre"],['province'=>"Bình Dương"],['province'=>"Bình Định"],['province'=>"Bình Phước"],
        ['province'=>"Bình Thuận"],['province'=>"Cà Mau"],['province'=>"Cao Bằng"],['province'=>"Cần Thơ"],['province'=>"Đà Nẵng"],['province'=>"Đắk Lắk"],
        ['province'=>"Đắk Nông"],['province'=>"Điện Biên"],['province'=>"Đồng Nai"],['province'=>"Đồng Tháp"],['province'=>"Gia Lai"],
        ['province'=>"Hà Giang"],['province'=>"Hà Nam"],['province'=>"Hà Nội"],['province'=>"Hà Tĩnh"],['province'=>"Hải Dương"],['province'=>"Hải Phòng"],
        ['province'=>"Hậu Giang"],['province'=>"Hòa Bình"],['province'=>"Hồ Chí Minh"],['province'=>"Hưng Yên"],['province'=>"Khánh Hòa"],['province'=>"Kiên Giang"],
        ['province'=>"Kon Tum"],['province'=>"Lai Châu"],['province'=>"Lạng Sơn"],['province'=>"Lào Cai"],['province'=>"Lâm Đồng"],['province'=>"Long An"],
        ['province'=>"Nam Định"],['province'=>"Nghệ An"],['province'=>"Ninh Bình"],['province'=>"Ninh Thuận"],['province'=>"Phú Thọ"],
        ['province'=>"Phú Yên"],['province'=>"Quảng Bình"],['province'=>"Quảng Nam"],['province'=>"Quảng Ngãi"],['province'=>"Quảng Ninh"],['province'=>"Quảng Trị"],
        ['province'=>"Sóc Trăng"],['province'=>"Sơn La"],['province'=>"Tây Ninh"],['province'=>"Thái Bình"],['province'=>"Thái Nguyên"],['province'=>"Thanh Hóa"],
        ['province'=>"Thừa Thiên Huế"],['province'=>"Tiền Giang"],['province'=>"Trà Vinh"],['province'=>"Tuyên Quang"],['province'=>"Vĩnh Long"],
        ['province'=>"Vĩnh Phúc"],['province'=>"Yên Bái"]];
        DB::table('Province')->insert($vietnam);
    }
}
