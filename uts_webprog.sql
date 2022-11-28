-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2022 at 07:38 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts_webprog`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `publisher_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `synopsis` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `publisher_id`, `title`, `author`, `year`, `synopsis`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'The Tools', 'Icha Gilda Maryati S.Psi', 2015, 'NEW YORK TIMES BESTSELLER - Change can begin right now. Learn to bring about dynamic personal growth using five uniquely effective tools--from psychotherapist Barry Michels and psychiatrist Phil Stutz, subject of the Netflix documentary Stutz, directed by Jonah Hill.\n\n            \"These tools are emotional game changers. They do nothing less than deliver you to your best and most powerful self.\"--Kathy Freston, author of Quantum Wellness\n\n            The Tools offers a solution to the biggest complaint patients have about therapy: the interminable wait for change to begin. The traditional therapeutic model sets its sights on the past, but psychiatrist Phil Stutz and psychotherapist Barry Michels employ an arsenal of techniques--\"the tools\"--that allow patients to use their problems as levers that access the power of the unconscious and propel them into action. Suddenly, through this transformative approach, obstacles become new chances--to find courage, embrace discipline, develop self-expression, deepen creativity.\n\n            A dynamic, results-oriented practice, The Tools aims to deliver relief from persistent problems and restore control and hope right away. Every day presents challenges--big and small--that the tools transform into opportunities to bring about bold and dramatic change in your life. Stutz and Michels teach you how to:\n\n            - Get Unstuck Master the things you are avoiding and live in forward motion.\n            - Control Anger Free yourself from out-of-control rage and never-ending grudges.\n            - Express Yourself Learn the secret of true confidence and find your authentic voice.\n            - Combat Anxiety Stop obsessive worrying and negative thinking.\n            - Find Discipline Activate willpower and make the most of every minute.\n\n            With The Tools, Stutz and Michels allow you to realize the full range of your potential. Their goal is nothing less than for your life to become exceptional--exceptional in its resiliency, in its experience of real happiness, and in its understanding of the human spirit.', 'https://d1w7fb2mkkr3kw.cloudfront.net/assets/images/book/lrg/9780/8129/9780812983043.jpg', NULL, NULL),
(2, 1, 'Coming Alive', 'Gabriella Widiastuti', 2019, 'The four vital tools in Coming Alive help you connect to the Life Force--a wellspring of positive energy that is the source of creativity, renewal, confidence, and engagement--and harness the energy and will to combat Part X. Drawing insights from their decades of psychotherapeutic practice, their lived experience, and their moving and generous understanding of our interconnectedness, Michels and Stutz have created a paradigm-shifting guide to achieving optimal mental health and spiritual well-being.', 'https://d1w7fb2mkkr3kw.cloudfront.net/assets/images/book/lrg/9780/8129/9780812984545.jpg', NULL, NULL),
(3, 4, 'Atomic Habits', 'Kuncara Wasita S.E.I', 2005, 'THE PHENOMENAL INTERNATIONAL BESTSELLER: 1 MILLION COPIES SOLD\n\n            Transform your life with tiny changes in behaviour, starting now.\n\n            People think that when you want to change your life, you need to think big. But world-renowned habits expert James Clear has discovered another way. He knows that real change comes from the compound effect of hundreds of small decisions: doing two push-ups a day, waking up five minutes early, or holding a single short phone call.\n\n            He calls them atomic habits.\n\n            In this ground-breaking book, Clears reveals exactly how these minuscule changes can grow into such life-altering outcomes. He uncovers a handful of simple life hacks (the forgotten art of Habit Stacking, the unexpected power of the Two Minute Rule, or the trick to entering the Goldilocks Zone), and delves into cutting-edge psychology and neuroscience to explain why they matter. Along the way, he tells inspiring stories of Olympic gold medalists, leading CEOs, and distinguished scientists who have used the science of tiny habits to stay productive, motivated, and happy.\n\n            These small changes will have a revolutionary effect on your career, your relationships, and your life.', 'https://d1w7fb2mkkr3kw.cloudfront.net/assets/images/book/lrg/9780/7352/9780735211292.jpg', NULL, NULL),
(4, 3, 'Naruto and Saburo', 'Irwan Wakiman Tarihoran', 1991, ' Naruto is a ninja-in-training with a need for attention, a knack for mischief, and sealed within him, a strange, formidable power. His antics amuse his instructor Kakashi and irritate his teammates, intense Sasuki and witty Sakura, but Naruto is serious about becoming the greatest ninja in the village of Konohagakure!\n\n            In another world, ninja are the ultimate power - and in the village of Konohagakure live the stealthiest ninja in the world. But twelve years ago Konohagakure was attacked by a fearsome threat - a nine-tailed fox demon which claims the life of the Hokage, the village champion. Today, peace has returned, and a troublemaking orphan named Uzumaki Naruto is struggling to graduate from the Ninja Academy. His goal: to become the next Hokage. But unknown to Naruto and his classmates, within him is a terrifying force... ', 'https://upload.wikimedia.org/wikipedia/en/9/94/NarutoCoverTankobon1.jpg', NULL, NULL),
(5, 1, 'Twilight', 'Bella Zulaika', 1973, 'When 17 year old Isabella Swan moves to Forks, Washington to live with her father she expects that her new life will be as dull as the town.\n\n            But in spite of her awkward manner and low expectations, she finds that her new classmates are drawn to this pale, dark-haired new girl in town. But not, it seems, the Cullen family. These five adopted brothers and sisters obviously prefer their own company and will make no exception for Bella.\n\n            Bella is convinced that Edward Cullen in particular hates her, but she feels a strange attraction to him, although his hostility makes her feel almost physically ill. He seems determined to push her away - until, that is, he saves her life from an out of control car.\n\n            Bella will soon discover that there is a very good reason for Edwards coldness. He, and his family, are vampires - and he knows how dangerous it is for others to get too close.', 'http://3.bp.blogspot.com/-5oAChzeMCzM/Ts5EU9wvx1I/AAAAAAAAAx0/V-RUDtHRYOI/s1600/TwilightGraphicNovelV2_HC.jpg', NULL, NULL),
(6, 4, 'Blue Lock', 'Martani Setiawan M.M.', 2011, ' A mad young coach gathers soccer players from across the country to compete in a series of bizarre challenges in a high-tech colosseum he calls Blue Lock. It is a no-balls-barred battle to become Japans next top striker, in this Squid Game-meets-World Cup manga, now available in print!\n\n            Anime coming soon!\n\n            Despite his harsh criticism of Japans citizens and media, the genius midfielder Sae Itoshi has set his gaze on Blue Lock, where the training is about to begin. To survive the first round robin tournament in the training center, Isagi Team Z will need to find a way to use their own unique \"weapons\" while struggling through a clash of egos. What does it take to be the best in the world?! ', 'https://imgix.ranker.com/user_node_img/50130/1002585104/original/1002585104-photo-u-227601860?auto=format&q=60&fit=crop&fm=pjpg&dpr=2&w=650', NULL, NULL),
(7, 2, 'Sakamoto Days', 'Galuh Haryanto', 1976, ' Kill some time with former hit man Taro Sakamoto!\n\n            Taro Sakamoto was once a legendary hit man considered the greatest of all time. Bad guys feared him! Assassins revered him! But then one day he quit, got married, and had a baby. He is now living the quiet life as the owner of a neighborhood store, but how long can Sakamoto enjoy his days of retirement before his past catches up to him?!\n\n            Time has passed peacefully for Sakamoto since he left the underworld. He is running a neighborhood store with his lovely wife and child and has gotten a bit...out of shape. But one day a figure from his past pays him a visit with an offer he cannot refuse: return to the assassin world or die! ', 'https://imgix.ranker.com/user_node_img/50130/1002584839/original/1002584839-photo-u1797710413?auto=format&q=60&fit=crop&fm=pjpg&dpr=2&w=650', NULL, NULL),
(8, 4, 'Pokemon Adventures: XY', 'Luwar Dirja Natsir', 1990, 'X was a Pokémon Trainer child prodigy. He hated being in the spotlight, so he took to hiding in his room and avoiding everyone—including his best friend Y. But now a surprise attack has brought X out of hiding!\n\n            Now it is up to X to use the skills that made him champion to defeat the threat looming over Vaniville Town.\n\n            Can the reclusive X and the determined Y help their friends ward off two Legendary Pokémon and the mysterious Team Flare?! ', 'https://imgix.ranker.com/user_node_img/50130/1002585008/original/1002585008-photo-u-705150765?auto=format&q=60&fit=crop&fm=pjpg&dpr=2&w=650', NULL, NULL),
(9, 5, 'IPA Terpadu SMP Kelas 9 K13 Revisi 2016', 'Nugraha Maheswara', 2015, 'Buku IPA terpadu yang terbaik untuk anak anda!', 'http://yudhistira-gi.co.id/assets/uploads/product/A-IPA-Terpadu-9-K13.jpg', NULL, NULL),
(10, 1, 'Buku Matematika Peminatan Kelas 12 Kurikulum 2013', 'Emong Najmudin', 2002, 'Buku matematika peminatan kelas 12, mohon dibaca secara seksama!', 'https://s4.bukalapak.com/img/4082129582/w-1000/BUKU_PR_MATEMATIKA_WAJIB_SMA_KELAS_12_1_TAHUN_INTAN_PARIWARA.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `book_category`
--

CREATE TABLE `book_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_category`
--

INSERT INTO `book_category` (`id`, `book_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 6, 5, NULL, NULL),
(2, 1, 3, NULL, NULL),
(3, 7, 2, NULL, NULL),
(4, 4, 3, NULL, NULL),
(5, 1, 4, NULL, NULL),
(6, 3, 2, NULL, NULL),
(7, 2, 2, NULL, NULL),
(8, 8, 2, NULL, NULL),
(9, 3, 5, NULL, NULL),
(10, 7, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Romance', NULL, NULL),
(2, 'Action', NULL, NULL),
(3, 'Fiction', NULL, NULL),
(4, 'Anime', NULL, NULL),
(5, 'Comedy', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_11_26_094301_create_categories_table', 1),
(3, '2022_11_26_094438_create_publishers_table', 1),
(4, '2022_11_26_094720_create_books_table', 1),
(5, '2022_11_26_095137_create_book_category_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `publishers`
--

CREATE TABLE `publishers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `publishers`
--

INSERT INTO `publishers` (`id`, `name`, `address`, `phone`, `email`, `image`, `created_at`, `updated_at`) VALUES
(1, 'PT Mulyani Aryani', 'Jr. Bayan No. 89, Manado 60908, Bengkulu', '+628437019364', 'nuraini.sakura@example.com', 'http://www.bardfieldacademy.org/wp-content/uploads/2016/08/00106-3D-company-logos-design-free-logo-online-02.png', NULL, NULL),
(2, 'CV Puspasari Pratiwi (Persero) Tbk', 'Dk. S. Parman No. 52, Palu 23913, Maluku', '+628813733660', 'rahimah.keisha@example.com', 'http://lofrev.net/wp-content/photos/2014/10/H-logo.jpg', NULL, NULL),
(3, 'PT Hakim Hastuti', 'Ds. Ters. Buah Batu No. 536, Pangkal Pinang 52785, Sulut', '+628813977209', 'martana.lestari@example.org', 'http://www.datwebdigital.com/DWD/wp-content/uploads/2012/06/logo-design.jpg', NULL, NULL),
(4, 'PD Zulaika (Persero) Tbk', 'Jln. Karel S. Tubun No. 604, Depok 38978, Kalteng', '+628453984096', 'mahfud.maulana@example.net', 'https://cdn.windowsreport.com/wp-content/uploads/2017/09/logo-design-software.png', NULL, NULL),
(5, 'CV Maryati', 'Ds. Hasanuddin No. 984, Tarakan 10823, Bengkulu', '+628124294743', 'maimunah.saputra@example.com', 'https://www.logolynx.com/images/logolynx/20/2043aa2034232d6b02b3ecd8cad8a287.jpeg', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_publisher_id_foreign` (`publisher_id`);

--
-- Indexes for table `book_category`
--
ALTER TABLE `book_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_category_book_id_foreign` (`book_id`),
  ADD KEY `book_category_category_id_foreign` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `book_category`
--
ALTER TABLE `book_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `publishers`
--
ALTER TABLE `publishers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_publisher_id_foreign` FOREIGN KEY (`publisher_id`) REFERENCES `publishers` (`id`);

--
-- Constraints for table `book_category`
--
ALTER TABLE `book_category`
  ADD CONSTRAINT `book_category_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `book_category_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
