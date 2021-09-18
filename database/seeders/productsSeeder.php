<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class productsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        \App\Models\products::factory()->count(5)->create(); 
    }
}
