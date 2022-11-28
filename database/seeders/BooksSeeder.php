<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Arr;
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
        $title=array(
            'The Tools',
            'Coming Alive',
            'Atomic Habits',
            'Naruto and Saburo',
            'Twilight',
            'Blue Lock',
            'Sakamoto Days',
            'Pokemon Adventures: XY',
            'IPA Terpadu SMP Kelas 9 K13 Revisi 2016',
            'Buku Matematika Peminatan Kelas 12 Kurikulum 2013',



        );
        $image_url=array(
            'https://d1w7fb2mkkr3kw.cloudfront.net/assets/images/book/lrg/9780/8129/9780812983043.jpg',
            'https://d1w7fb2mkkr3kw.cloudfront.net/assets/images/book/lrg/9780/8129/9780812984545.jpg',
            'https://d1w7fb2mkkr3kw.cloudfront.net/assets/images/book/lrg/9780/7352/9780735211292.jpg',
            'https://upload.wikimedia.org/wikipedia/en/9/94/NarutoCoverTankobon1.jpg',
            'http://3.bp.blogspot.com/-5oAChzeMCzM/Ts5EU9wvx1I/AAAAAAAAAx0/V-RUDtHRYOI/s1600/TwilightGraphicNovelV2_HC.jpg',
            'https://imgix.ranker.com/user_node_img/50130/1002585104/original/1002585104-photo-u-227601860?auto=format&q=60&fit=crop&fm=pjpg&dpr=2&w=650',
            'https://imgix.ranker.com/user_node_img/50130/1002584839/original/1002584839-photo-u1797710413?auto=format&q=60&fit=crop&fm=pjpg&dpr=2&w=650',
            'https://imgix.ranker.com/user_node_img/50130/1002585008/original/1002585008-photo-u-705150765?auto=format&q=60&fit=crop&fm=pjpg&dpr=2&w=650',
            'http://yudhistira-gi.co.id/assets/uploads/product/A-IPA-Terpadu-9-K13.jpg',
            'https://s4.bukalapak.com/img/4082129582/w-1000/BUKU_PR_MATEMATIKA_WAJIB_SMA_KELAS_12_1_TAHUN_INTAN_PARIWARA.jpg'
        );

        $faker = Faker::create('id_ID');
        for($i=0; $i<=9; $i++){
// id (PK)	publisher_id (FK)	title	author	year	sysnopsis	image
// publisher_id 	title 	author 	year 	synopsis 	image
            DB::table('books')->insert([
                'publisher_id'=>mt_rand(1,10),
                // 'title'=>$faker->sentence(1,3),
                'title'=>$title[$i],
                'author' =>$faker->name(),
                'year'=>$faker->year(),
                'synopsis'=>$faker->paragraph(),
                // 'image'=>$faker->imageUrl()
                'image'=>$image_url[$i]
            ]);
        }
    }
}
