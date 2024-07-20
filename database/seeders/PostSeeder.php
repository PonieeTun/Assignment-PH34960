<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fake=Faker::create();
        $categories_id = DB::table("categories")->pluck("id")->toArray();
        $user_id = DB::table("users")->pluck("id")->toArray();
        for ($i = 0; $i < 10; $i++) {
            DB::table("posts")->insert([
                "categories_id"=>$fake->randomElement($categories_id),
                "user_id"=>$fake->randomElement($user_id),
                "title"=> "Bài viết $i",
                "content"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem quod impedit commodi cumque vel nam atque, ratione esse incidunt, porro rerum asperiores nesciunt veniam ea. Sunt dolore earum recusandae illum.",
                "views"=> 10000,
                "img"=> "https://picsum.photos/600/600",
                "created_at"=>now(),
                "updated_at"=>now(),
            ]);
        }
    }
}
