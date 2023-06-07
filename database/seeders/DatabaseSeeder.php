<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      $this->call([
        postseeder::class,
        countryseeder::class,
        Phoneseeder::class,
        postseeder::class,
        Roleseeder::class,
        userRoleseeder::class,
        // Userseeder
      ]);
    }
}
