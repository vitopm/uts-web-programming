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

        $synopsis= array(
            'NEW YORK TIMES BESTSELLER - Change can begin right now. Learn to bring about dynamic personal growth using five uniquely effective tools--from psychotherapist Barry Michels and psychiatrist Phil Stutz, subject of the Netflix documentary Stutz, directed by Jonah Hill.

            "These tools are emotional game changers. They do nothing less than deliver you to your best and most powerful self."--Kathy Freston, author of Quantum Wellness

            The Tools offers a solution to the biggest complaint patients have about therapy: the interminable wait for change to begin. The traditional therapeutic model sets its sights on the past, but psychiatrist Phil Stutz and psychotherapist Barry Michels employ an arsenal of techniques--"the tools"--that allow patients to use their problems as levers that access the power of the unconscious and propel them into action. Suddenly, through this transformative approach, obstacles become new chances--to find courage, embrace discipline, develop self-expression, deepen creativity.

            A dynamic, results-oriented practice, The Tools aims to deliver relief from persistent problems and restore control and hope right away. Every day presents challenges--big and small--that the tools transform into opportunities to bring about bold and dramatic change in your life. Stutz and Michels teach you how to:

            - Get Unstuck Master the things you are avoiding and live in forward motion.
            - Control Anger Free yourself from out-of-control rage and never-ending grudges.
            - Express Yourself Learn the secret of true confidence and find your authentic voice.
            - Combat Anxiety Stop obsessive worrying and negative thinking.
            - Find Discipline Activate willpower and make the most of every minute.

            With The Tools, Stutz and Michels allow you to realize the full range of your potential. Their goal is nothing less than for your life to become exceptional--exceptional in its resiliency, in its experience of real happiness, and in its understanding of the human spirit.',

            'The four vital tools in Coming Alive help you connect to the Life Force--a wellspring of positive energy that is the source of creativity, renewal, confidence, and engagement--and harness the energy and will to combat Part X. Drawing insights from their decades of psychotherapeutic practice, their lived experience, and their moving and generous understanding of our interconnectedness, Michels and Stutz have created a paradigm-shifting guide to achieving optimal mental health and spiritual well-being.',

            'THE PHENOMENAL INTERNATIONAL BESTSELLER: 1 MILLION COPIES SOLD

            Transform your life with tiny changes in behaviour, starting now.

            People think that when you want to change your life, you need to think big. But world-renowned habits expert James Clear has discovered another way. He knows that real change comes from the compound effect of hundreds of small decisions: doing two push-ups a day, waking up five minutes early, or holding a single short phone call.

            He calls them atomic habits.

            In this ground-breaking book, Clears reveals exactly how these minuscule changes can grow into such life-altering outcomes. He uncovers a handful of simple life hacks (the forgotten art of Habit Stacking, the unexpected power of the Two Minute Rule, or the trick to entering the Goldilocks Zone), and delves into cutting-edge psychology and neuroscience to explain why they matter. Along the way, he tells inspiring stories of Olympic gold medalists, leading CEOs, and distinguished scientists who have used the science of tiny habits to stay productive, motivated, and happy.

            These small changes will have a revolutionary effect on your career, your relationships, and your life.',

            ' Naruto is a ninja-in-training with a need for attention, a knack for mischief, and sealed within him, a strange, formidable power. His antics amuse his instructor Kakashi and irritate his teammates, intense Sasuki and witty Sakura, but Naruto is serious about becoming the greatest ninja in the village of Konohagakure!

            In another world, ninja are the ultimate power - and in the village of Konohagakure live the stealthiest ninja in the world. But twelve years ago Konohagakure was attacked by a fearsome threat - a nine-tailed fox demon which claims the life of the Hokage, the village champion. Today, peace has returned, and a troublemaking orphan named Uzumaki Naruto is struggling to graduate from the Ninja Academy. His goal: to become the next Hokage. But unknown to Naruto and his classmates, within him is a terrifying force... ',

            'When 17 year old Isabella Swan moves to Forks, Washington to live with her father she expects that her new life will be as dull as the town.

            But in spite of her awkward manner and low expectations, she finds that her new classmates are drawn to this pale, dark-haired new girl in town. But not, it seems, the Cullen family. These five adopted brothers and sisters obviously prefer their own company and will make no exception for Bella.

            Bella is convinced that Edward Cullen in particular hates her, but she feels a strange attraction to him, although his hostility makes her feel almost physically ill. He seems determined to push her away - until, that is, he saves her life from an out of control car.

            Bella will soon discover that there is a very good reason for Edwards coldness. He, and his family, are vampires - and he knows how dangerous it is for others to get too close.',

            ' A mad young coach gathers soccer players from across the country to compete in a series of bizarre challenges in a high-tech colosseum he calls Blue Lock. It is a no-balls-barred battle to become Japans next top striker, in this Squid Game-meets-World Cup manga, now available in print!

            Anime coming soon!

            Despite his harsh criticism of Japans citizens and media, the genius midfielder Sae Itoshi has set his gaze on Blue Lock, where the training is about to begin. To survive the first round robin tournament in the training center, Isagi Team Z will need to find a way to use their own unique "weapons" while struggling through a clash of egos. What does it take to be the best in the world?! ',

            ' Kill some time with former hit man Taro Sakamoto!

            Taro Sakamoto was once a legendary hit man considered the greatest of all time. Bad guys feared him! Assassins revered him! But then one day he quit, got married, and had a baby. He is now living the quiet life as the owner of a neighborhood store, but how long can Sakamoto enjoy his days of retirement before his past catches up to him?!

            Time has passed peacefully for Sakamoto since he left the underworld. He is running a neighborhood store with his lovely wife and child and has gotten a bit...out of shape. But one day a figure from his past pays him a visit with an offer he cannot refuse: return to the assassin world or die! ',

            'X was a Pokémon Trainer child prodigy. He hated being in the spotlight, so he took to hiding in his room and avoiding everyone—including his best friend Y. But now a surprise attack has brought X out of hiding!

            Now it is up to X to use the skills that made him champion to defeat the threat looming over Vaniville Town.

            Can the reclusive X and the determined Y help their friends ward off two Legendary Pokémon and the mysterious Team Flare?! ',

            'Buku IPA terpadu yang terbaik untuk anak anda!',

            'Buku matematika peminatan kelas 12, mohon dibaca secara seksama!'
        );

        $faker = Faker::create('id_ID');
        for($i=0; $i<=9; $i++){
// id (PK)	publisher_id (FK)	title	author	year	sysnopsis	image
// publisher_id 	title 	author 	year 	synopsis 	image
            DB::table('books')->insert([
                'publisher_id'=>mt_rand(1,5), // create 5 publisher
                // 'title'=>$faker->sentence(1,3),
                'title'=>$title[$i],
                'author' =>$faker->name(),
                'year'=>$faker->year(),
                // 'synopsis'=>$faker->paragraph(),
                'synopsis' => $synopsis[$i],
                // 'image'=>$faker->imageUrl()
                'image'=>$image_url[$i]
            ]);
        }
    }
}
