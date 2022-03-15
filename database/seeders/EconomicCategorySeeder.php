<?php

namespace Database\Seeders;

use App\Models\economic_category;
use Illuminate\Database\Seeder;

class EconomicCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        economic_category::factory()->count(50)->create();
    }
}
