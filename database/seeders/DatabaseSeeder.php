<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        $this->call(ChuDeSeeder::class);
        $this->call(DeMucSeeder::class);
        $this->call(ChuongSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(BaiVietSeeder::class);
    }
}
