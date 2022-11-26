<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i=0; $i<=9; $i++){
// id (PK)	publisher_id (FK)	title	author	year	sysnopsis	image
// publisher_id 	title 	author 	year 	synopsis 	image
            DB::table('books')->insert([
                'publisher_id'=>mt_rand(1,10),
                'title'=>$faker->title(),
                'author' =>$faker->name(),
                'year'=>$faker->year(),
                'synopsis'=>$faker->paragraph(),
                'image'=>$faker->imageUrl()
            ]);
        }
    }
}