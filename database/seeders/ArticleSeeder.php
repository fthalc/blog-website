<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        for($i=0;$i<4;$i++){
            $title=$faker->sentence(6);
            DB::table('articles')->insert([
                'category_id'=>rand(1,7),
                'title'=>$title,
                'image'=>$faker->imageUrl(700, 300, 'cats', true, 'Faker'),
                'content'=>$faker->paragraph(90),
                'slug'=>Str::slug($title),
                'created_at'=>$faker->dateTimeBetween('-5 days', 'now'),
                'updated_at'=>now()
            ]);
        }
    }
}
