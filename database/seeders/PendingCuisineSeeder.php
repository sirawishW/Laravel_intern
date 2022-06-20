<?php

namespace Database\Seeders;

use App\Models\PendingCuisine;
use Illuminate\Database\Seeder;

class PendingCuisineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PendingCuisine::factory(50)->create();
    }
}
