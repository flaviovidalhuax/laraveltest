<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Property;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       
        Property::factory()->count(5)->create();

        // \App\Models\Property::factory(10)
        //     ->create();
    }
}
