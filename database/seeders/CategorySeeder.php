<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table("categories")->insert([
                "name"=> "Category". $i,
                "slug"=> "category-$i",
                "created_at"=>now(),
                "updated_at"=>now()
            ]);
        }
    }
}
