<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Pqrsd;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      Pqrsd::factory(50)->create();   
     
    }
}
