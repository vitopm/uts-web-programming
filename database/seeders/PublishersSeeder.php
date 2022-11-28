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
        $image_url = array(
            'http://www.bardfieldacademy.org/wp-content/uploads/2016/08/00106-3D-company-logos-design-free-logo-online-02.png',
            'http://lofrev.net/wp-content/photos/2014/10/H-logo.jpg',
            'http://www.datwebdigital.com/DWD/wp-content/uploads/2012/06/logo-design.jpg',
            'https://cdn.windowsreport.com/wp-content/uploads/2017/09/logo-design-software.png',
            'https://www.logolynx.com/images/logolynx/20/2043aa2034232d6b02b3ecd8cad8a287.jpeg',
            'http://2.bp.blogspot.com/-ZwQGP-U8TP4/UHsoCz3362I/AAAAAAAAA5w/2ckbMSSQY_E/s1600/Logo+2.jpg',
            'http://lofrev.net/wp-content/photos/2016/07/abstract_logo_vector.png',
            'https://upload.wikimedia.org/wikipedia/en/thumb/b/bf/KFC_logo.svg/1200px-KFC_logo.svg.png',
            'http://www.alancoleman.co.uk/wp-content/uploads/2014/10/cardinals_logo.png',
            'https://png.pngtree.com/png-vector/20200921/ourlarge/pngtree-red-and-black-logo-png-image_2348180.jpg'

        );
        $faker = Faker::create('id_ID');
        for($i=0; $i<=9; $i++){
            DB::table('publishers')->insert([
                'name'=>$faker->company(),
                'address'=>$faker->address(),
                'phone' =>"+628".$faker->numberBetween(111111111,999999999),
                'email'=>$faker->unique()->safeEmail(),
                'image'=>$image_url[$i]
            ]);
        }
    }
}
