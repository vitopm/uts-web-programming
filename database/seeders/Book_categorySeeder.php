<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class Book_categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        //book_id (FK), category_id (FK)
        for($i=0; $i<=9; $i++){
            DB::table('book_category')->insert([
                'book_id'=>mt_rand(1,10),
                'category_id'=>mt_rand(1,5)
            ]);
        }
    }
}
