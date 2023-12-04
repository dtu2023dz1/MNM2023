<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->delete();

        DB::table('admins')->truncate();

        DB::table('admins')->insert([
            [
                'username'          => 'admin',
                'password'          => bcrypt("123456"),
                'full_name'         => "Admin",
                'email'             => "admin@master.com",
                'so_dien_thoai'     => "0123456789",
                'is_master'         => 1,
                'token'             => Str::uuid(),
            ]
        ]);
    }
}
