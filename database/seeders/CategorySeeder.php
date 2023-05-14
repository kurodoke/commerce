<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Simple'
        ]);
        Category::create([
            'name' => 'Gaming'
        ]);
        Category::create([
            'name' => 'Speaker'
        ]);
        Category::create([
            'name' => 'TWS'
        ]);
        Category::create([
            'name' => 'Etc.'
        ]);
    }
}
