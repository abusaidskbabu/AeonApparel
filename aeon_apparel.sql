-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2023 at 10:46 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aeon_apparel`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `author`, `image`, `content`, `date`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Ferragamo: Bringing the French Riviera to Italian menswear', 'MIGUEL CARTER', 'uploads/1631363206613ca086004fb01.jpg', '<p>Mutat senserit vix an, eum corpora adipisci indoctum ad, prompta fastidii vim no. At erat quaeque meliore duo, ne dicta paulo legimus vis. Aperiri omittantur ex pro, corrumpit iracundia ea mel, cu pro viris scaevola. Ne nam duis qualisque voluptatum. Denique moderatius scriptorem at vel, pri no vivendum forensibus incorrupte. At cum debet audiam voluptua, ex postea semper vidisse eum. Ad alia stet feugiat per. Vero discere duo ei, praesent moderatius mea no, per quas periculis explicari ea amet ludus mundi.</p>\r\n<ul class=\"grey list2\">\r\n<li>Nulla Audire Delenit Simul Suscipit Bonorum Ludus Amet</li>\r\n<li>Cibo Nemore Adversarium Mel Homero</li>\r\n<li>Scripta Facete Diceret Dolorum Tollit Amet Impetus</li>\r\n</ul>\r\n<h3>Simul possim ius in erant iriure honestatis</h3>\r\n<p>Vel ei nominavi menandri. Ei fastidii postulant eam, id quo alterum pericula, eu probo salutatus mei. Odio imperdiet molestiae pri te, te mea copiosae epicurei recusabo. Sint repudiare ut quo, at duo iudico scribentur, usu ad dicant consulatu rationibus. Ne usu dicta eloquentiam, erat doctus pro cu bonorum has.</p>\r\n<div class=\"isotope_container isotope row masonry-layout columns_padding_5\">\r\n<div class=\"isotope-item col-xs-4\">\r\n<div class=\"vertical-item gallery-item\">\r\n<div class=\"item-media\"><img src=\"images/gallery/01.jpg\" alt=\"\" /></div>\r\n</div>\r\n</div>\r\n<div class=\"isotope-item col-xs-4\">\r\n<div class=\"vertical-item gallery-item\">\r\n<div class=\"item-media\"><img src=\"images/gallery/02.jpg\" alt=\"\" /></div>\r\n</div>\r\n</div>\r\n<div class=\"isotope-item col-xs-4\">\r\n<div class=\"vertical-item gallery-item\">\r\n<div class=\"item-media\"><img src=\"images/gallery/03.jpg\" alt=\"\" /></div>\r\n</div>\r\n</div>\r\n</div>\r\n<p>Malis ignota quodsi no nam, elit omnes ullamcorper mel eu. Usu in fierent urbanitas, pri suavitate argumentum persequeris in. Eos et impedit ancillae consetetur. Vel cu etiam officiis ocurreret has purto aliquid te cum, his porro neglegentur ut. Adhuc saperet no per, nec doming iracundia amet consequat et, legimus persecuti deseruisse sit ea. Vel at noster sapientem patrioque. Ne eos cum labores ocurreret qui ex adhuc perfecto definitiones. Altera virtute dolores eam et. Ut vel solet tempor, has percipit scribentur cu.</p>', '2021-09-11', 1, '2021-09-11 06:26:46', '2021-09-12 00:33:54'),
(4, 'Bold and beautiful: Gustav Klimt inspires Turnbull & Asser', 'MIGUEL CARTER', 'uploads/1631428531613d9fb35760004.jpg', '<p>Mutat senserit vix an, eum corpora adipisci indoctum ad, prompta fastidii vim no. At erat quaeque meliore duo, ne dicta paulo legimus vis. Aperiri omittantur ex pro, corrumpit iracundia ea mel, cu pro viris scaevola. Ne nam duis qualisque voluptatum. Denique moderatius scriptorem at vel, pri no vivendum forensibus incorrupte. At cum debet audiam voluptua, ex postea semper vidisse eum. Ad alia stet feugiat per. Vero discere duo ei, praesent moderatius mea no, per quas periculis explicari ea amet ludus mundi.</p>\r\n<ul class=\"grey list2\">\r\n<li>Nulla Audire Delenit Simul Suscipit Bonorum Ludus Amet</li>\r\n<li>Cibo Nemore Adversarium Mel Homero</li>\r\n<li>Scripta Facete Diceret Dolorum Tollit Amet Impetus</li>\r\n</ul>\r\n<h3>Simul possim ius in erant iriure honestatis</h3>\r\n<p>Vel ei nominavi menandri. Ei fastidii postulant eam, id quo alterum pericula, eu probo salutatus mei. Odio imperdiet molestiae pri te, te mea copiosae epicurei recusabo. Sint repudiare ut quo, at duo iudico scribentur, usu ad dicant consulatu rationibus. Ne usu dicta eloquentiam, erat doctus pro cu bonorum has.</p>\r\n<div class=\"isotope_container isotope row masonry-layout columns_padding_5\">\r\n<div class=\"isotope-item col-xs-4\">\r\n<div class=\"vertical-item gallery-item\">\r\n<div class=\"item-media\"><img src=\"images/gallery/01.jpg\" alt=\"\" /></div>\r\n</div>\r\n</div>\r\n<div class=\"isotope-item col-xs-4\">\r\n<div class=\"vertical-item gallery-item\">\r\n<div class=\"item-media\"><img src=\"images/gallery/02.jpg\" alt=\"\" /></div>\r\n</div>\r\n</div>\r\n<div class=\"isotope-item col-xs-4\">\r\n<div class=\"vertical-item gallery-item\">\r\n<div class=\"item-media\"><img src=\"images/gallery/03.jpg\" alt=\"\" /></div>\r\n</div>\r\n</div>\r\n</div>\r\n<p>Malis ignota quodsi no nam, elit omnes ullamcorper mel eu. Usu in fierent urbanitas, pri suavitate argumentum persequeris in. Eos et impedit ancillae consetetur. Vel cu etiam officiis ocurreret has purto aliquid te cum, his porro neglegentur ut. Adhuc saperet no per, nec doming iracundia amet consequat et, legimus persecuti deseruisse sit ea. Vel at noster sapientem patrioque. Ne eos cum labores ocurreret qui ex adhuc perfecto definitiones. Altera virtute dolores eam et. Ut vel solet tempor, has percipit scribentur cu.</p>', '2021-09-09', 1, '2021-09-12 00:35:31', '2021-09-12 00:35:31'),
(5, 'The middle ground of modern menswear at Hardy Amies', 'MIGUEL CARTER', 'uploads/1631428575613d9fdf30c3306.jpg', '<p>Mutat senserit vix an, eum corpora adipisci indoctum ad, prompta fastidii vim no. At erat quaeque meliore duo, ne dicta paulo legimus vis. Aperiri omittantur ex pro, corrumpit iracundia ea mel, cu pro viris scaevola. Ne nam duis qualisque voluptatum. Denique moderatius scriptorem at vel, pri no vivendum forensibus incorrupte. At cum debet audiam voluptua, ex postea semper vidisse eum. Ad alia stet feugiat per. Vero discere duo ei, praesent moderatius mea no, per quas periculis explicari ea amet ludus mundi.</p>\r\n<ul class=\"grey list2\">\r\n<li>Nulla Audire Delenit Simul Suscipit Bonorum Ludus Amet</li>\r\n<li>Cibo Nemore Adversarium Mel Homero</li>\r\n<li>Scripta Facete Diceret Dolorum Tollit Amet Impetus</li>\r\n</ul>\r\n<h3>Simul possim ius in erant iriure honestatis</h3>\r\n<p>Vel ei nominavi menandri. Ei fastidii postulant eam, id quo alterum pericula, eu probo salutatus mei. Odio imperdiet molestiae pri te, te mea copiosae epicurei recusabo. Sint repudiare ut quo, at duo iudico scribentur, usu ad dicant consulatu rationibus. Ne usu dicta eloquentiam, erat doctus pro cu bonorum has.</p>\r\n<div class=\"isotope_container isotope row masonry-layout columns_padding_5\">\r\n<div class=\"isotope-item col-xs-4\">\r\n<div class=\"vertical-item gallery-item\">\r\n<div class=\"item-media\"><img src=\"images/gallery/01.jpg\" alt=\"\" /></div>\r\n</div>\r\n</div>\r\n<div class=\"isotope-item col-xs-4\">\r\n<div class=\"vertical-item gallery-item\">\r\n<div class=\"item-media\"><img src=\"images/gallery/02.jpg\" alt=\"\" /></div>\r\n</div>\r\n</div>\r\n<div class=\"isotope-item col-xs-4\">\r\n<div class=\"vertical-item gallery-item\">\r\n<div class=\"item-media\"><img src=\"images/gallery/03.jpg\" alt=\"\" /></div>\r\n</div>\r\n</div>\r\n</div>\r\n<p>Malis ignota quodsi no nam, elit omnes ullamcorper mel eu. Usu in fierent urbanitas, pri suavitate argumentum persequeris in. Eos et impedit ancillae consetetur. Vel cu etiam officiis ocurreret has purto aliquid te cum, his porro neglegentur ut. Adhuc saperet no per, nec doming iracundia amet consequat et, legimus persecuti deseruisse sit ea. Vel at noster sapientem patrioque. Ne eos cum labores ocurreret qui ex adhuc perfecto definitiones. Altera virtute dolores eam et. Ut vel solet tempor, has percipit scribentur cu.</p>', '2021-09-12', 1, '2021-09-12 00:36:15', '2021-09-12 00:36:15');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `cv` varchar(255) DEFAULT NULL,
  `qualifications` text NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `firstname`, `lastname`, `email`, `number`, `address`, `position`, `cv`, `qualifications`, `message`, `created_at`, `updated_at`) VALUES
(25, 'Jobayed', 'Sumon', 'jobayedahmedsumon@gmail.com', '+8801677242853', 'Lalmatia, Mirpur-11', 'Web Developer', 'backend/cv/Jobayed-Jobayed\'s Resume.pdf', 'LARAVEL, PHP', 'Hello', '2020-07-10 04:22:00', '2020-07-10 04:22:00');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `image`, `status`, `created_at`, `updated_at`) VALUES
(37, 'Test', 'uploads/1631360710613c96c663a7012.jpg', 1, '2021-09-11 05:45:10', '2021-09-11 05:45:10'),
(38, 'Test', 'uploads/1631360740613c96e4b367511.jpg', 1, '2021-09-11 05:45:40', '2021-09-11 05:45:40'),
(39, 'Test', 'uploads/1631360752613c96f09ad1a10.jpg', 1, '2021-09-11 05:45:52', '2021-09-11 05:45:52');

-- --------------------------------------------------------

--
-- Table structure for table `client_reviews`
--

CREATE TABLE `client_reviews` (
  `id` int(11) NOT NULL,
  `client` varchar(191) NOT NULL,
  `review` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_reviews`
--

INSERT INTO `client_reviews` (`id`, `client`, `review`, `status`) VALUES
(1, 'Elaine Allen', 'Thanks so much!! I have received my order on time as promised! I love the shirt - its perfect! I look forward to ordering more shirts from your company!', 1),
(2, 'Adam Farnsworth', 'Thank you very much for making the process easy. I will remember the good treatment when I have a need for services such as yours. Thank You!', 1),
(3, 'Patricia Diaz', 'Got the suit on yesterday and I love it! Please tell everyone that worked on it that I am very pleased and will order again.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `factories`
--

CREATE TABLE `factories` (
  `id` int(11) NOT NULL,
  `title` varchar(191) DEFAULT NULL,
  `banner` varchar(191) DEFAULT NULL,
  `location` text DEFAULT NULL,
  `machineries` text DEFAULT NULL,
  `workers` text DEFAULT NULL,
  `gallery` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `factories`
--

INSERT INTO `factories` (`id`, `title`, `banner`, `location`, `machineries`, `workers`, `gallery`, `created_at`, `updated_at`) VALUES
(8, 'Gulshan Factory', 'uploads/165822512562d681e5dbf97Website Search banner (2).jpg', 'https://g.page/VMSL-BD?share', 'Flatlock,Overlock,Button stitch,Snap', '165822512562d681e5dc26321-FOREST_LADIES_WATCH-_Blue.jpg,165822512562d681e5dc5a120-FOREST_LADIES_WATCH-_Black.jpg,165822512562d681e5dc83a5-LONGBO-COUPLE-WATCH-Set.jpg,165822512562d681e5dcc8722784081-q1lfjhprvjcx853qcpyxdyoy-ExtraLarge.jpg,165822512562d681e5dcfd120239003-94j72ogfv32eqhycpktayb5c-ExtraLarge.jpg,', '165822512562d681e5dd2981652990970602399606.jpg,165822512562d681e5dd4a31652990970102305213.jpg,165822512562d681e5dd6b81652990970568014203.jpg,165822512562d681e5dd8c81653167127637391826.jpg,165822512562d681e5ddaf31653167127514315983.jpg,', '2022-07-19 04:05:25', '2022-07-19 04:05:25');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `featureds`
--

CREATE TABLE `featureds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `featureds`
--

INSERT INTO `featureds` (`id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 12, NULL, NULL),
(2, 13, NULL, NULL),
(3, 14, NULL, NULL),
(4, 15, NULL, NULL),
(5, 16, NULL, NULL),
(6, 17, NULL, NULL),
(7, 19, NULL, NULL),
(8, 20, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `item_sliders`
--

CREATE TABLE `item_sliders` (
  `id` int(11) NOT NULL,
  `image` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item_sliders`
--

INSERT INTO `item_sliders` (`id`, `image`) VALUES
(10, 'frontend/img/slides/165812826662d5078a9dccf35b7390af4352cc9c58451e7aa035c99.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `content`, `post_date`, `last_date`, `status`) VALUES
(2, 'PHP JOBS', '<div class=\"row ptjwrap\">\r\n<div class=\"col-sm-9\">\r\n<h2 class=\"job-title \">Sr./Lead PHP Developer</h2>\r\n</div>\r\n</div>\r\n<div class=\"view-all-jobs\">&nbsp;</div>\r\n<div class=\"vac\">\r\n<h4>Vacancy</h4>\r\n<p>2</p>\r\n</div>\r\n<div class=\"job_des\">\r\n<h4>Job Context</h4>\r\n<ul>\r\n<li>Fair Pattern Inc. is a recognized provider of Information Technology and professional services catering to major Fortune 500 companies in the Finance, Manufacturing, Education, eCommerce, Retail, and Luxury space.</li>\r\n<li>We are currently looking for Sr./Lead PHP Developer with a strong background in PHP, Laravel, Classic ASP, algorithm development and utilization. Candidates should have an interest and experience in solving real-world problems.</li>\r\n</ul>\r\n</div>\r\n<div class=\"job_des\">\r\n<h4>Job Responsibilities</h4>\r\n<ul>\r\n<li>PHP 7.x / 8.x (Required 5+ years)</li>\r\n<li>Laravel (Required 3+ years)</li>\r\n<li>MySQL &ndash; experience in development and ETL and the ability to create and run scripts against a database (Required)</li>\r\n<li>Vue.JS/ReactJS</li>\r\n<li>Familiarity with building integrations with 3rd party systems like Salesforce</li>\r\n<li>Experience using APIs and understanding HTTP, REST, and SOAP architecture</li>\r\n<li>Experience with developing and deploying applications on Amazon Web Services (AWS)</li>\r\n<li>Some experience with Test Driven Development or willingness to learn</li>\r\n<li>+3 years leading development teams or leading product implementations.</li>\r\n<li>Self-driven, self-sufficient, actively looks for ways to contribute, and knows how to get things done</li>\r\n<li>Experience on classic asp is a MUST</li>\r\n<li>Experience on migrating legacy technology to new framework</li>\r\n</ul>\r\n</div>\r\n<div class=\"job_nat\">\r\n<h4>Employment Status</h4>\r\n<p>Full-time, Contractual</p>\r\n</div>\r\n<div class=\"job_nat\">\r\n<h4>Workplace</h4>\r\n<ul>\r\n<li>Work from home</li>\r\n</ul>\r\n</div>\r\n<div class=\"edu_req\">\r\n<h4>Educational Requirements</h4>\r\n<ul>\r\n<li>Bachelor of Science (BSc) in CSE</li>\r\n</ul>\r\n</div>\r\n<div class=\"edu_req\">\r\n<h4>Experience Requirements</h4>\r\n<ul>\r\n<li>7 to 12 year(s)</li>\r\n<li>The applicants should have experience in the following area(s):<br />Laravel Framework, PHP</li>\r\n</ul>\r\n</div>\r\n<div class=\"job_req\">\r\n<h4>Additional Requirements</h4>\r\n<ul>\r\n<li class=\"bn\">Both males and females are allowed to apply</li>\r\n</ul>\r\n</div>\r\n<div class=\"job_loc \">\r\n<h4>Job Location</h4>\r\n<p>Anywhere in Bangladesh</p>\r\n</div>\r\n<div class=\"salary_range\">\r\n<h4>Salary</h4>\r\n<ul>Negotiable</ul>\r\n</div>\r\n<div class=\"oth_ben\">\r\n<h4>Compensation &amp; Other Benefits</h4>\r\n<ul>\r\n<li>Tour allowance, Weekly 2 holidays, Insurance</li>\r\n<li>Salary Review: Yearly</li>\r\n</ul>\r\n</div>', '2021-11-20 07:11:10', '2021-12-31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lead_times`
--

CREATE TABLE `lead_times` (
  `id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `details` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lead_times`
--

INSERT INTO `lead_times` (`id`, `title`, `details`, `created_at`, `updated_at`) VALUES
(2, 'Production Lead Time', NULL, '2022-07-23 06:16:12', '2022-07-23 06:16:12'),
(3, 'Sampling Time', NULL, '2022-07-23 06:16:22', '2022-07-23 06:16:22'),
(4, 'Sampling Policy', NULL, '2022-07-23 06:16:35', '2022-07-23 06:16:35'),
(5, 'Business Terms', NULL, '2022-07-23 06:16:45', '2022-07-23 06:16:45'),
(6, 'Payment Procedure', NULL, '2022-07-23 06:16:55', '2022-07-23 06:16:55');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_06_20_065213_create_product_categories_table', 2),
(5, '2020_06_20_083532_create_product_divisions_table', 3),
(6, '2020_06_20_153811_create_team_members_table', 4),
(7, '2020_06_21_112306_create_services_table', 5),
(8, '2020_06_22_080137_create_clients_table', 6),
(9, '2020_06_22_095348_create_page_cms_table', 7),
(10, '2020_06_22_120925_create_blogs_table', 8),
(11, '2020_06_25_121421_create_products_table', 9),
(12, '2020_06_29_120422_create_featureds_table', 10),
(14, '2020_06_30_140257_create_partners_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `page_cms`
--

CREATE TABLE `page_cms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `why_chose_us` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_cms`
--

INSERT INTO `page_cms` (`id`, `title`, `slug`, `content`, `why_chose_us`, `created_at`, `updated_at`) VALUES
(1, 'About Us', 'about-us', '<p style=\"text-align: justify;\"><span style=\"font-size: 12pt;\">Incorporated in 2015, AEON APPAREL is a well-established globally reputed garments apparel buying, sourcing, and management services company in Dhaka, Bangladesh.</span></p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 12pt;\"><strong>BUSINESS PHILOSOPHY</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 12pt;\">We are driven by the maxim of achieving the desired quality at the most competitive prices, by leveraging on all available resources, controlling wastage&rsquo;s improving efficiencies, and target-oriented objective approach to the whole business.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 12pt;\">Our major objective is to make a business out of Bangladesh; a pleasurable and profitable experience and enterprise for all &ndash; the Buyer, the Supplier, and us. The whole concept is to provide the overseas buyer with a one-stop Buying Office in Bangladesh.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 12pt;\">We value our relationships with our Buyers and Vendors as a high point of our business practices.</span></p>', '<p><strong>Mission</strong> <br /> <br />Our mission is to create an OSASP (One Stop All Solution Platform) service for getting the suitable goods to the right person at the right time.</p>\r\n<p><br /><strong>Vision</strong></p>\r\n<p>Our vision is to constantly exceed our clients\' expectations by delivering high-quality products <br />on time and with the highest level of customer satisfaction.</p>\r\n<p><br /><strong>Values</strong></p>\r\n<p style=\"text-align: justify;\">We aspire to consistently surpass our people\'s and customers\' expectations, operate with <br />integrity regardless of the repercussions, accept full responsibility for our actions, and <br />collaborate to achieve our goals.</p>', NULL, '2022-07-17 02:44:08');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name`, `image`, `description`, `status`, `created_at`, `updated_at`) VALUES
(11, 'Test', 'uploads/1631360480613c95e038c3b01.jpg', NULL, 1, '2021-09-11 05:41:20', '2021-09-11 05:41:20'),
(12, 'Test', 'uploads/1631360600613c9658189cf02.jpg', NULL, 1, '2021-09-11 05:43:20', '2021-09-11 05:43:20'),
(13, 'Test', 'uploads/1631360616613c96689949503.jpg', NULL, 1, '2021-09-11 05:43:36', '2021-09-11 05:43:36'),
(14, 'Test', 'uploads/1631360630613c967610b7604.jpg', NULL, 1, '2021-09-11 05:43:50', '2021-09-11 05:43:50'),
(15, 'Test', 'uploads/1631360641613c968199d5005.jpg', NULL, 1, '2021-09-11 05:44:01', '2021-09-11 05:44:01');

-- --------------------------------------------------------

--
-- Table structure for table `partner_files`
--

CREATE TABLE `partner_files` (
  `id` int(11) NOT NULL,
  `partner_id` int(11) NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partner_files`
--

INSERT INTO `partner_files` (`id`, `partner_id`, `file`, `created_at`, `updated_at`) VALUES
(8, 9, 'backend/partners/A-Z Kali Linux Commands.pdf', '2020-07-16 08:18:38', '2020-07-16 08:18:38'),
(9, 9, 'backend/partners/CV and cover letter.doc', '2020-07-16 08:18:38', '2020-07-16 08:18:38'),
(10, 10, 'backend/partners/Alamin factory profile updated.pdf', '2020-07-16 18:47:43', '2020-07-16 18:47:43'),
(11, 10, 'backend/partners/BSCI.pdf', '2020-07-16 18:47:43', '2020-07-16 18:47:43'),
(12, 10, 'backend/partners/Sedex.pdf', '2020-07-16 18:47:43', '2020-07-16 18:47:43'),
(13, 10, 'backend/partners/Wrap.pdf', '2020-07-16 18:47:43', '2020-07-16 18:47:43');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division` int(11) DEFAULT NULL,
  `parent_category` int(11) NOT NULL,
  `category` int(11) DEFAULT NULL,
  `gender` int(11) DEFAULT NULL,
  `image_front` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_back` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `division`, `parent_category`, `category`, `gender`, `image_front`, `image_back`, `color`, `size`, `description`, `status`, `created_at`, `updated_at`) VALUES
(258, 'Shirt', NULL, 25, 27, NULL, 'uploads/165840357862d93afa5f2f6WhatsApp Image 2021-12-30 at 6.03.52 PM.jpeg', 'uploads/165840357862d93afa5f67fWhatsApp Image 2021-12-30 at 6.03.52 PM (1).jpeg', 'black,white,red,blue,green,orange', 'S,L,M,XL,XXL', '<h2>What is Lorem Ipsum?</h2>\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 1, '2022-07-21 05:39:38', '2022-07-23 05:31:54');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `category_name`, `parent_id`, `created_at`, `updated_at`) VALUES
(25, 'Men’s', NULL, '2022-07-21 04:37:06', '2022-07-21 04:37:06'),
(27, 'Shirt', 25, '2022-07-21 04:39:06', '2022-07-21 04:46:25'),
(28, 'Short Sleeve T-Shirt', 25, '2022-07-21 04:48:08', '2022-07-21 04:48:08'),
(29, 'Full Sleeve T-Shirt', 25, '2022-07-21 04:48:58', '2022-07-21 04:48:58'),
(30, 'Polo Shirt', 25, '2022-07-21 04:49:26', '2022-07-21 04:49:26'),
(31, 'Hoodie', 25, '2022-07-21 04:49:42', '2022-07-21 04:49:42'),
(32, 'Denim Pants', 25, '2022-07-21 04:50:01', '2022-07-21 04:50:01'),
(33, 'Ladies', NULL, '2022-07-21 04:50:35', '2022-07-21 04:50:35'),
(34, 'Ties', 33, '2022-07-21 04:50:56', '2022-07-21 04:50:56'),
(35, 'Leggings', 33, '2022-07-21 04:51:09', '2022-07-21 04:51:09'),
(36, 'Jeggings', 33, '2022-07-21 04:51:29', '2022-07-21 04:51:29'),
(37, 'Tops', 33, '2022-07-21 04:51:45', '2022-07-21 04:51:45'),
(38, 'Short Sleeve T-Shirt', 33, '2022-07-21 04:52:01', '2022-07-21 04:52:01'),
(39, 'Full Sleeve T-Shirt', 33, '2022-07-21 04:52:17', '2022-07-21 04:52:17'),
(40, 'Polo Shirt', 33, '2022-07-21 04:52:28', '2022-07-21 04:52:28'),
(41, 'Denim Pants', 33, '2022-07-21 04:52:46', '2022-07-21 04:52:46'),
(42, 'TankTop', 33, '2022-07-21 04:53:04', '2022-07-21 04:53:04'),
(43, 'Boy’s', NULL, '2022-07-21 04:53:16', '2022-07-21 04:53:16'),
(44, 'Shirt', 43, '2022-07-21 04:53:27', '2022-07-21 04:53:27'),
(45, 'Short Sleeve T-Shirt', 43, '2022-07-21 04:53:39', '2022-07-21 04:53:39'),
(46, 'Full Sleeve T-Shirt', 43, '2022-07-21 04:53:52', '2022-07-21 04:53:52'),
(47, 'Polo Shirt', 43, '2022-07-21 04:54:08', '2022-07-21 04:54:08'),
(48, 'Hoodie', 43, '2022-07-21 04:54:23', '2022-07-21 04:54:23'),
(49, 'Denim Pants', 43, '2022-07-21 04:54:46', '2022-07-21 04:54:46'),
(50, 'Girls', NULL, '2022-07-21 04:54:57', '2022-07-21 04:54:57'),
(51, 'Ties', 50, '2022-07-21 04:55:10', '2022-07-21 04:55:10'),
(52, 'Leggings', 50, '2022-07-21 04:55:24', '2022-07-21 04:55:24'),
(53, 'Jeggings', 50, '2022-07-21 04:55:39', '2022-07-21 04:55:39'),
(54, 'Tops', 50, '2022-07-21 04:55:52', '2022-07-21 04:55:52'),
(55, 'Short Sleeve T-Shirt', 50, '2022-07-21 04:56:07', '2022-07-21 04:56:07'),
(56, 'Full Sleeve T-Shirt', 50, '2022-07-21 04:56:22', '2022-07-21 04:56:22'),
(57, 'Polo Shirt', 50, '2022-07-21 04:56:36', '2022-07-21 04:56:36'),
(58, 'Denim Pants', 50, '2022-07-21 04:56:49', '2022-07-21 04:56:49'),
(59, 'TankTop', 50, '2022-07-21 04:57:00', '2022-07-21 04:57:00'),
(60, 'Kids', NULL, '2022-07-21 04:57:13', '2022-07-21 04:57:13'),
(61, 'T-Shirt', 60, '2022-07-21 04:57:35', '2022-07-21 04:57:35'),
(62, 'Shirt', 60, '2022-07-21 04:57:48', '2022-07-21 04:57:48'),
(63, 'Polo Shirt', 60, '2022-07-21 04:57:59', '2022-07-21 04:57:59'),
(64, 'Half Pant', 60, '2022-07-21 04:58:11', '2022-07-21 04:58:11'),
(65, 'Full Pant', 60, '2022-07-21 04:58:25', '2022-07-21 04:58:25'),
(66, 'Kids wear', 60, '2022-07-21 04:58:37', '2022-07-21 04:58:37');

-- --------------------------------------------------------

--
-- Table structure for table `product_divisions`
--

CREATE TABLE `product_divisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_genders`
--

CREATE TABLE `product_genders` (
  `id` int(11) NOT NULL,
  `gender_name` varchar(300) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_genders`
--

INSERT INTO `product_genders` (`id`, `gender_name`, `created_at`, `updated_at`) VALUES
(8, 'Men’s', '2022-07-21 04:17:59', '2022-07-21 04:17:59'),
(9, 'Ladies', '2022-07-21 04:18:09', '2022-07-21 04:18:09'),
(10, 'Boy’s', '2022-07-21 04:18:18', '2022-07-21 04:18:18'),
(11, 'Girls', '2022-07-21 04:18:29', '2022-07-21 04:18:29'),
(12, 'Kids', '2022-07-21 04:18:41', '2022-07-21 04:18:41');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `overview` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `icon`, `icon_2`, `overview`, `status`, `created_at`, `updated_at`) VALUES
(9, 'COMPLIANCE AND SAFETY TEAM ACTIVITIES', 'uploads/1631346985613c61291c25701.jpg', 'fa fa-user-tie', '<p style=\"text-align: justify;\"><span style=\"font-size: 12pt;\">We take this part seriously,&nbsp; as because in order to fit the factories (in our matrix) with the global reputed customers, our well trained compliance team have been putting their outstanding effort to measure and guide individual factories considering BSCI, ACCORD/ALLIANCE, SEDEX, WRAP, ISO &nbsp;to come up as a standard compliance factory.</span></p>\r\n<p><span style=\"font-size: 12pt;\">&nbsp;</span></p>\r\n<p><span style=\"font-size: 12pt;\">The activities related to social compliance below are the key captions of our working area:</span></p>\r\n<ul>\r\n<li><span style=\"font-size: 12pt;\">Structural engineer</span></li>\r\n<li><span style=\"font-size: 12pt;\">Electrical engineer</span></li>\r\n<li><span style=\"font-size: 12pt;\">Building integrity &amp; fire safety</span></li>\r\n<li><span style=\"font-size: 12pt;\">Caps progress follow up</span></li>\r\n<li><span style=\"font-size: 12pt;\">Ethical audit</span></li>\r\n<li><span style=\"font-size: 12pt;\">Labor welfare and Improvement</span></li>\r\n<li><span style=\"font-size: 12pt;\">Technical audit</span></li>\r\n<li><span style=\"font-size: 12pt;\">Social compliance</span></li>\r\n<li><span style=\"font-size: 12pt;\">Security compliance</span></li>\r\n<li><span style=\"font-size: 12pt;\">Counseling</span></li>\r\n</ul>\r\n<p><span style=\"font-size: 12pt;\">&nbsp;</span></p>', 1, '2020-06-28 04:26:17', '2021-09-11 01:56:25'),
(10, 'DESIGN & PRODUCT DEVELOPEMNT', 'uploads/1631347003613c613b18f4703.jpg', 'fa fa-pencil-ruler', '<p style=\"text-align: justify;\"><span style=\"font-size: 12pt;\">A combination of design and technical skills that make our products fashionable, serviceable, producible, saleable and profitable. We always follow market trends and bringing new products and collections to life.</span></p>\r\n<p><span style=\"font-size: 12pt;\">&nbsp;</span></p>\r\n<p><span style=\"font-size: 12pt;\"><strong>Our Services includes:</strong></span></p>\r\n<ul>\r\n<li><span style=\"font-size: 12pt;\">Designing new collection.</span></li>\r\n<li><span style=\"font-size: 12pt;\">Product Development</span></li>\r\n<li><span style=\"font-size: 12pt;\">Graphic Design</span></li>\r\n<li><span style=\"font-size: 12pt;\">Wash development</span></li>\r\n<li><span style=\"font-size: 12pt;\">Artwork technique development</span></li>\r\n<li><span style=\"font-size: 12pt;\">Technical Pack preparation</span></li>\r\n<li><span style=\"font-size: 12pt;\">Pattern and sample Making</span></li>\r\n</ul>', 1, '2020-06-28 04:28:01', '2021-09-11 01:56:43'),
(11, 'MERCHANDISING TEAM', 'uploads/1631347017613c6149eb90d02.jpg', 'fa fa-male', '<p><span style=\"font-size: 12pt;\">We have 6 members in the merchandising team:</span></p>\r\n<ul>\r\n<li style=\"text-align: justify;\"><span style=\"font-size: 12pt;\">They are positive attitude, proactive, creative, quick learner, hard worker and target oriented.</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-size: 12pt;\">They have vast experience in sourcing, all manner of customer merchandise across this sector.</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-size: 12pt;\">They understand what is possible, when it comes to mass production, and manage the quality process and can make sure the delivery of products at the right time.</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-size: 12pt;\">Merchandisers are committed to understanding customers&rsquo; products and objectives, becoming a brand.</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-size: 12pt;\">They add real value to the production process, rather than simply sourcing product.</span></li>\r\n</ul>', 1, '2020-06-28 04:30:12', '2021-09-11 01:56:57'),
(12, 'QC, QA TEAM', 'uploads/1631347032613c615833d0d04.jpg', 'fa fa-people-carry', '<p style=\"text-align: justify;\"><span style=\"font-size: 12pt;\">We have a strong quality control system where under each Merchandiser there are three full time QC and the QC do the in-line inspections in each section of production.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 12pt;\">In a particular time of the day, our QA Supervisor checks the 30% garments those have been passed by our QC in each section.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 12pt;\">All the QC submit their daily reports to QA Supervisor with highlighting the major points. QA Supervisor submits their reports to the relevant Merchandisers in addition to the Managing Director. Relevant Merchandiser ensures the correct QA packing to the QA Supervisor.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 12pt;\">After maintaining the above procedures, the Merchandiser carries out his/her own final inspection before the shipment.</span></p>', 1, '2020-06-28 04:31:03', '2021-09-11 01:57:12'),
(13, 'SHIPPING & LOGISTICS', 'uploads/1631347044613c616476de905.jpg', 'fa fa-shipping-fast', '<p style=\"text-align: justify;\"><span style=\"font-size: 12pt;\">We have 2 members of commercial department who have good knowledge and experience in import and export business. They maintain the following works to make sure things are moving on track:</span></p>\r\n<ul>\r\n<li style=\"text-align: justify;\"><span style=\"font-size: 12pt;\">Negotiation with freight forwarders</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-size: 12pt;\">They managed all the bookings in timely manner</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-size: 12pt;\">Prepare all Shipping Documentation within shortly</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-size: 12pt;\">Make sure for the payment</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-size: 12pt;\">Keep record ETD/ETA to make sure cargo reach timely manner</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-size: 12pt;\">They update all the shipping information to our customers.</span></li>\r\n</ul>', 1, '2020-06-28 04:32:08', '2021-09-11 01:57:24'),
(14, 'LAB SUPPORT', 'uploads/1631347058613c61722b10a06.jpg', 'fa fa-vials', '<p style=\"text-align: justify;\"><span style=\"font-size: 12pt;\">All the styles are being tested for shrinkage, twisting, color fastness, &nbsp;&nbsp;&nbsp;&nbsp;pilling, fiber composition etc. according to the Buyer&rsquo;s desire.</span></p>', 1, '2020-06-28 04:33:41', '2021-09-11 01:57:38'),
(15, 'INSPECTION SUPPORT', 'uploads/1631347071613c617fa91f301.jpg', 'fa fa-info-circle', '<p style=\"text-align: justify;\"><span style=\"font-size: 12pt;\">We conduct final inspection on behalf of the buyer. If the buyer wishes, the goods are also inspected by the 3<sup>rd</sup> party inspection team of SGS, ITS, BV etc. where we cooperate to conduct inspection smoothly.</span></p>', 1, '2020-06-28 04:34:36', '2021-09-11 01:57:51');

-- --------------------------------------------------------

--
-- Table structure for table `showrooms`
--

CREATE TABLE `showrooms` (
  `id` int(11) NOT NULL,
  `title` varchar(191) DEFAULT NULL,
  `banner` varchar(191) DEFAULT NULL,
  `location` text DEFAULT NULL,
  `workers` text DEFAULT NULL,
  `gallery` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `showrooms`
--

INSERT INTO `showrooms` (`id`, `title`, `banner`, `location`, `workers`, `gallery`, `created_at`, `updated_at`) VALUES
(1, 'Uttara Showroom', 'uploads/165822637062d686c29b884goldish-0739164119.webp', 'https://g.page/VMSL-BD?share', '165822637062d686c29bccfgoldish-1910574079-2048x1158.webp,165822637062d686c29bfbagoldish-1513843201-2048x1158.webp,,165822647562d6872b0b5e5cangaromother2-1 (1).png,165822647562d6872b0b839cangaromother2-1.png,,', '165822637062d686c29cb7cpexels-pixabay-277319.jpg,165822637062d686c29ce0epexels-kai-pilger-996329.jpg,165822637062d686c29cfd4pexels-karolina-grabowska-5625123.jpg,,165822647562d6872b0baceowsudh-1 (1).jpg,165822647562d6872b0bcc0gorbokalin-seba-1 (1).jpg,', '2022-07-19 04:26:10', '2022-09-08 02:13:32');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `heading` varchar(191) DEFAULT NULL,
  `year_1st` varchar(191) DEFAULT NULL,
  `year_2nd` varchar(191) DEFAULT NULL,
  `span_text` varchar(191) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `heading`, `year_1st`, `year_2nd`, `span_text`, `image`, `updated_at`, `created_at`) VALUES
(44, 'Double Cloth Backside Knit', '2k', '22', 'Double Cloth Fabric', 'frontend/img/slides/1661844209630dbaf1acfdersz_29-wrangler_1571_-_02-min.jpg', '2022-08-30 01:23:29', '2022-08-30 01:23:29'),
(46, NULL, NULL, NULL, NULL, 'frontend/img/slides/1661845292630dbf2c7997arsz_rsz_26-fastrack_neon_09-min.jpg', '2022-08-30 01:41:32', '2022-08-30 01:41:32');

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

CREATE TABLE `team_members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_number` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_members`
--

INSERT INTO `team_members` (`id`, `name`, `designation`, `image`, `linkedin`, `facebook`, `sort_number`, `status`, `created_at`, `updated_at`) VALUES
(25, 'Sohol Zami', 'Managing Director', 'uploads/1637062086619395c67f576sohol.jpg', NULL, NULL, 1, 1, '2021-05-22 12:16:55', '2021-11-16 05:28:06'),
(26, 'Shamil Ashraf', 'Chairman', 'uploads/1637062371619396e3d5092received_185886223166430.jpeg', 'https://www.linkedin.com/in/shamil-ashraf-a6a561a4/?originalSubdomain=bd', 'https://www.facebook.com/shamil2/', 2, 1, '2021-06-04 09:50:12', '2021-11-16 05:32:51'),
(27, 'Jhone Smith', 'Designation', 'uploads/1631359379613c9193e555603.jpg', NULL, NULL, 3, 1, '2021-06-04 10:14:24', '2021-09-11 05:22:59'),
(28, 'Maria Smith', 'Designation', 'uploads/1631359409613c91b18a3d502.jpg', NULL, NULL, 4, 1, '2021-06-04 10:16:24', '2021-09-11 05:23:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Aeon Apparel', 'admin@aeonapparel.com', '$2y$10$pW05729wRaf3gJVGII5sBOkXbTx.8nFUXqQOzdWFJbHfN1hX90HX.', 1, NULL, '2022-07-13 06:15:38');

-- --------------------------------------------------------

--
-- Table structure for table `website_setting`
--

CREATE TABLE `website_setting` (
  `id` int(11) NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `logo` varchar(191) NOT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `facebook` text DEFAULT NULL,
  `linkedin` text DEFAULT NULL,
  `twiter` text DEFAULT NULL,
  `instagram` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `website_setting`
--

INSERT INTO `website_setting` (`id`, `name`, `logo`, `phone`, `email`, `address`, `facebook`, `linkedin`, `twiter`, `instagram`) VALUES
(1, 'Aeon Apparel', 'uploads/165804054362d3b0dfb40e6Transparent Logo of AEON Apparel - With Text.png', '+8801629108327, +8801734248208', 'Info@aeonapparelbd.com, aeonapparelltd@gmail.com', 'House #41, Road #13, Sector 12, \r\nUttara, Dhaka -1230, Bangladesh', 'www.facebook.com/aeonapparel', 'https://bd.linkedin.com/in/aeon-apparel-442a131a8', 'https://twitter.com/aeonapparelltd', '#');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_reviews`
--
ALTER TABLE `client_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `factories`
--
ALTER TABLE `factories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `featureds`
--
ALTER TABLE `featureds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_sliders`
--
ALTER TABLE `item_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lead_times`
--
ALTER TABLE `lead_times`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_cms`
--
ALTER TABLE `page_cms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner_files`
--
ALTER TABLE `partner_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_divisions`
--
ALTER TABLE `product_divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_genders`
--
ALTER TABLE `product_genders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `showrooms`
--
ALTER TABLE `showrooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_members`
--
ALTER TABLE `team_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `website_setting`
--
ALTER TABLE `website_setting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `client_reviews`
--
ALTER TABLE `client_reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `factories`
--
ALTER TABLE `factories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `featureds`
--
ALTER TABLE `featureds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `item_sliders`
--
ALTER TABLE `item_sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lead_times`
--
ALTER TABLE `lead_times`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `page_cms`
--
ALTER TABLE `page_cms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `partner_files`
--
ALTER TABLE `partner_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=259;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `product_divisions`
--
ALTER TABLE `product_divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `product_genders`
--
ALTER TABLE `product_genders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `showrooms`
--
ALTER TABLE `showrooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `team_members`
--
ALTER TABLE `team_members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `website_setting`
--
ALTER TABLE `website_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
