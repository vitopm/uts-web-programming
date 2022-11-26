<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $categories=array(
            'Romance',
            'Action',
            'Fiction',
            'Anime',
            'Comedy'
        );

        foreach($categories as $category){
            DB::table('categories')->insert([
                'name'=>$category
            ]);
        }
    }
}
