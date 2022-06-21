<?php

namespace Database\Seeders;

use App\Http\Controllers\NationalityController;
use Illuminate\Database\Seeder;

class NationalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $controller = new NationalityController;
        $controller->importCsv();
    }
}
