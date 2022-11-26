<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class PublishersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create('id_ID');
        for($i=0; $i<=9; $i++){
            DB::table('publishers')->insert([
                'name'=>$faker->company(),
                'address'=>$faker->address(),
                'phone' =>"+628".$faker->numberBetween(111111111,999999999),
                'email'=>$faker->unique()->safeEmail(),
                'image'=>$faker->imageUrl()
            ]);
        }
    }
}
