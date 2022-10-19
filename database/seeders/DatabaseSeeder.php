<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call(UFSeeder::class);
      $this->call(CompetenceSeeder::class);
      $this->call(RelationSeeder::class);
    }
}
