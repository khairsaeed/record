<?php

namespace Database\Seeders;

use App\Models\material_standard;
use Illuminate\Database\Seeder;

class MaterialStandardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        material_standard::factory()->count(50)->create();
    }
}
