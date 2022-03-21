<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('User')->insert([
            'username'=>'adminphuc',
            'password' => bcrypt('phucnguyen'),
            'full_name' => 'Nguyen Tan Phuc',
            'role' =>'Admin'
        ]);

        DB::table('User')->insert([
            'username'=>'admindat',
            'password' => bcrypt('datnguyen'),
            'full_name' => 'Nguyen Tien Dat',
            'role' =>'Admin'
        ]);

        DB::table('User')->insert([
            'username'=>'adminkhoe',
            'password' => bcrypt('khoengo'),
            'full_name' => 'Ngo Minh Khoe',
            'role' =>'Admin'
        ]);

        DB::table('User')->insert([
            'username'=>'employee1',
            'password' => bcrypt('employee1'),
            'full_name' => 'Employee 2',
            'role' =>'Employee'
        ]);

        DB::table('User')->insert([
            'username'=>'employee2',
            'password' => bcrypt('employee2'),
            'full_name' => 'Employee 2',
            'role' =>'Employee'
        ]);

        DB::table('User')->insert([
            'username'=>'customer1',
            'password' => bcrypt('customer1'),
            'full_name' => 'Customer 1',
            'role' =>'Customer'
        ]);
        
        DB::table('User')->insert([
            'username'=>'customer2',
            'password' => bcrypt('customer2'),
            'full_name' => 'Customer 2',
            'role' =>'Customer'
        ]);
    }
}
