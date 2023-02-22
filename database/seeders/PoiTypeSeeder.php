<?php

namespace Database\Seeders;

use App\Models\PoiType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PoiTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PoiType::factory(10)->create();
    }
}
