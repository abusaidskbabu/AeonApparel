-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2022 at 08:19 AM
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
(1, 'frontend/img/slides/1631353643613c7b2b4b24401.jpg'),
(2, 'frontend/img/slides/1631353652613c7b34382ef02.jpg'),
(3, 'frontend/img/slides/1631353660613c7b3cd4c9d03.jpg'),
(4, 'frontend/img/slides/1631353669613c7b45299a204.jpg'),
(7, 'frontend/img/slides/1631354075613c7cdb0796c05.jpg'),
(8, 'frontend/img/slides/1631354084613c7ce4614b206.jpg'),
(9, 'frontend/img/slides/1631354468613c7e64138a407.jpg');

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
(1, 'About Us', 'about-us', '<p style=\"text-align: justify;\"><span style=\"font-size: 12pt;\">Elegrand Ltd company established by an energetic, enthusiastic group of people who has Textile education background and more than 15 years working experience in factories as well as buying and liaison office.&nbsp;</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 12pt;\">We are always ready to take the challenge of meeting buyers\' demand for all sorts of high-quality garments as per buyers&rsquo; requirements. We welcome customers from all over the world, and in return allow us to prove to you that MM Clothing can be your best source of buying. We always keep our promises to keep a good and long-term business relationship to our customers all over the world.</span></p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 12pt;\"><strong>BUSINESS PHILOSOPHY</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 12pt;\">We are driven by the maxim of achieving the desired quality at the most competitive prices, by leveraging on all available resources, controlling wastage&rsquo;s improving efficiencies, and target-oriented objective approach to the whole business.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 12pt;\">Our major objective is to make a business out of Bangladesh; a pleasurable and profitable experience and enterprise for all &ndash; the Buyer, the Supplier, and us. The whole concept is to provide the overseas buyer with a one-stop Buying Office in Bangladesh.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 12pt;\">We value our relationships with our Buyers and Vendors as a high point of our business practices.</span></p>', '<p><strong>Mission</strong> <br /> <br />Our mission is to create an OSASP (One Stop All Solution Platform) service for getting the suitable goods to the right person at the right time.</p>\r\n<p><br /><strong>Vision</strong></p>\r\n<p>Our vision is to constantly exceed our clients\' expectations by delivering high-quality products <br />on time and with the highest level of customer satisfaction.</p>\r\n<p><br /><strong>Values</strong></p>\r\n<p style=\"text-align: justify;\">We aspire to consistently surpass our people\'s and customers\' expectations, operate with <br />integrity regardless of the repercussions, accept full responsibility for our actions, and <br />collaborate to achieve our goals.</p>', NULL, '2021-10-14 03:51:00');

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
  `division` int(11) NOT NULL,
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

INSERT INTO `products` (`id`, `name`, `division`, `category`, `gender`, `image_front`, `image_back`, `color`, `size`, `description`, `status`, `created_at`, `updated_at`) VALUES
(31, 'Fila T-Shirt', 25, 4, 1, 'uploads/15933298905ef848e29acb9WhatsApp Image 2020-06-27 at 8.20.42 PM.jpeg', NULL, NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-06-28 01:38:10', '2020-06-28 01:38:10'),
(32, 'Denim Short Pant For Women', 26, 6, 2, 'uploads/15933299415ef8491586fd6WhatsApp Image 2020-06-27 at 8.20.43 PM (1).jpeg', NULL, NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-06-28 01:39:01', '2020-07-13 20:28:16'),
(33, 'Blazer', 26, 10, 1, 'uploads/15947536585f0e027af21dfMen-s-Pink-Jacket-Blazer-in-100-Wool.jpg', 'uploads/15947536585f0e027af2423Men-s-Pink-Jacket-Blazer-in-100-Wool.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-06-28 01:39:25', '2020-07-14 23:07:38'),
(34, 'Hoodie', 25, 10, 1, 'uploads/15933299875ef8494355836WhatsApp Image 2020-06-27 at 8.20.44 PM (1).jpeg', NULL, NULL, 'M,XL', NULL, 1, '2020-06-28 01:39:47', '2020-08-25 16:20:08'),
(35, 'Hoodie Men\'s Jacket', 25, 12, 1, 'uploads/15933300165ef8496082723WhatsApp Image 2020-06-27 at 8.20.44 PM (2).jpeg', NULL, 'Grey', 'M,XL', NULL, 1, '2020-06-28 01:40:16', '2020-08-25 16:24:03'),
(36, 'Denim Shorts', 26, 6, 1, 'uploads/15933300535ef8498505172WhatsApp Image 2020-06-27 at 8.20.44 PM.jpeg', NULL, NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-06-28 01:40:53', '2020-07-13 21:02:19'),
(37, 'Full Sleeve T-Shirt', 25, 4, 1, 'uploads/15933301105ef849be76906WhatsApp Image 2020-06-27 at 8.20.45 PM (1).jpeg', NULL, NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-06-28 01:41:50', '2020-07-13 21:03:17'),
(38, 'Jacket', 26, 10, 1, 'uploads/15947536755f0e028bcb2c8rBVaR1uuDDiAIbBlAAGmADSlWIA666.jpg', 'uploads/15947536755f0e028bcb5c7rBVaR1uuDDiAIbBlAAGmADSlWIA666.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-06-28 01:42:10', '2020-07-14 23:07:55'),
(39, 'T-Shirt', 25, 4, 1, 'uploads/15933301525ef849e8f1ff9WhatsApp Image 2020-06-27 at 8.20.45 PM.jpeg', NULL, NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-06-28 01:42:33', '2020-06-28 01:42:33'),
(40, 'Jacket', 26, 10, 1, 'uploads/15933301855ef84a09bf753WhatsApp Image 2020-06-27 at 8.20.46 PM (1).jpeg', NULL, NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-06-28 01:43:05', '2020-07-13 21:11:16'),
(41, 'Fila T-Shirt', 25, 4, 1, 'uploads/15933302175ef84a29200deWhatsApp Image 2020-06-27 at 8.20.46 PM (2).jpeg', NULL, NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-06-28 01:43:37', '2020-06-28 01:43:37'),
(42, 'Fila T-Shirt', 25, 4, 1, 'uploads/15933302455ef84a4548325WhatsApp Image 2020-06-27 at 8.20.46 PM.jpeg', NULL, NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-06-28 01:44:05', '2020-06-28 01:44:05'),
(43, 'Fila T-Shirt', 25, 4, 1, 'uploads/15933302705ef84a5e569b6WhatsApp Image 2020-06-27 at 8.20.47 PM (1).jpeg', NULL, NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-06-28 01:44:30', '2020-06-28 01:44:30'),
(44, 'Hoodie jacket', 26, 21, 1, 'uploads/15933302945ef84a7655c81WhatsApp Image 2020-06-27 at 8.20.47 PM (2).jpeg', NULL, 'Blue', NULL, NULL, 1, '2020-06-28 01:44:54', '2020-08-25 16:26:29'),
(45, 'Fila T-Shirt', 25, 4, 1, 'uploads/15933303235ef84a93282beWhatsApp Image 2020-06-27 at 8.20.47 PM.jpeg', NULL, NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-06-28 01:45:23', '2020-06-28 01:45:23'),
(46, 'Polo Shirt', 25, 4, 1, 'uploads/15933303875ef84ad3ef854WhatsApp Image 2020-06-27 at 8.20.48 PM (1).jpeg', NULL, NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-06-28 01:46:28', '2020-06-28 01:46:28'),
(47, 'Hoodie Men\'s Jacket', 25, 10, 1, 'uploads/15933304195ef84af3b969aWhatsApp Image 2020-06-27 at 8.20.48 PM (2).jpeg', NULL, NULL, 'M,XXL', NULL, 1, '2020-06-28 01:46:59', '2020-08-25 17:13:19'),
(48, 'Jacket', 26, 10, 3, 'uploads/15933304495ef84b1100996WhatsApp Image 2020-06-27 at 8.20.48 PM.jpeg', NULL, NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-06-28 01:47:29', '2020-07-13 21:08:03'),
(49, 'Jacket', 26, 10, 1, 'uploads/15933304725ef84b28d2fbeWhatsApp Image 2020-06-27 at 8.20.49 PM (1).jpeg', NULL, NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-06-28 01:47:52', '2020-07-13 21:08:24'),
(50, 'Jacket', 26, 10, 1, 'uploads/15933304925ef84b3cc5bf3WhatsApp Image 2020-06-27 at 8.20.49 PM (3).jpeg', NULL, NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-06-28 01:48:12', '2020-07-13 21:11:42'),
(51, 'Shorts', 25, 8, 3, 'uploads/15947505615f0df66162b73Kids-boys-Underwear-Cotton-Panties-toddler-Girls-Baby-Short-Briefs-2019-Fashion-new-Children-Teenager-letter.jpg', 'uploads/15947505615f0df66162ec8Kids-boys-Underwear-Cotton-Panties-toddler-Girls-Baby-Short-Briefs-2019-Fashion-new-Children-Teenager-letter.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-06-28 01:48:34', '2020-07-14 22:16:01'),
(52, 'Hoodie jacket', 26, 10, 1, 'uploads/15933305455ef84b710cd06WhatsApp Image 2020-06-27 at 8.20.50 PM (1).jpeg', NULL, NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-06-28 01:49:05', '2020-07-13 21:07:45'),
(53, 'Jacket', 26, 10, 1, 'uploads/15933305775ef84b91b8fffWhatsApp Image 2020-06-27 at 8.20.50 PM (2).jpeg', NULL, NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-06-28 01:49:37', '2020-07-13 21:13:23'),
(54, 'Fila Hoodie', 25, 10, 1, 'uploads/15933306015ef84ba9e134fWhatsApp Image 2020-06-27 at 8.20.50 PM.jpeg', NULL, 'Black', 'M,XL', NULL, 1, '2020-06-28 01:50:01', '2020-08-25 17:16:45'),
(55, 'Trouser', 26, 16, 1, 'uploads/15933306265ef84bc2cc8dfWhatsApp Image 2020-06-27 at 8.20.51 PM (1).jpeg', NULL, NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-06-28 01:50:26', '2020-07-14 18:06:57'),
(56, 'Trouser', 26, 16, 1, 'uploads/15933306515ef84bdbced56WhatsApp Image 2020-06-27 at 8.20.51 PM (2).jpeg', NULL, NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-06-28 01:50:51', '2020-07-14 18:07:37'),
(57, 'Jacket', 26, 10, 1, 'uploads/15933306915ef84c030d3edWhatsApp Image 2020-06-27 at 8.20.51 PM.jpeg', NULL, NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-06-28 01:51:31', '2020-07-13 21:14:26'),
(58, 'Sleeveless Jacket', 26, 10, 1, 'uploads/15933307565ef84c4480bfcWhatsApp Image 2020-06-27 at 8.20.52 PM (1).jpeg', NULL, NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-06-28 01:52:36', '2020-07-13 21:14:50'),
(59, 'Hoodie jacket', 26, 10, 1, 'uploads/15933307905ef84c6644814WhatsApp Image 2020-06-27 at 8.20.52 PM (2).jpeg', NULL, NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-06-28 01:53:10', '2020-07-13 21:15:16'),
(60, 'Trouser', 26, 16, 1, 'uploads/15933308165ef84c802732cWhatsApp Image 2020-06-27 at 8.20.52 PM.jpeg', NULL, NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-06-28 01:53:36', '2020-07-14 18:07:56'),
(61, 'Denim Full Pant', 26, 6, 1, 'uploads/15933308365ef84c945c2acWhatsApp Image 2020-06-27 at 8.20.53 PM (1).jpeg', NULL, NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-06-28 01:53:56', '2020-07-13 21:15:37'),
(62, 'Cord draw Heavy shirt', 26, 10, 1, 'uploads/15933308815ef84cc1c9165WhatsApp Image 2020-06-27 at 8.20.53 PM.jpeg', NULL, NULL, 'M,XL', NULL, 1, '2020-06-28 01:54:41', '2020-08-25 16:09:01'),
(63, 'Polo Shirt', 25, 4, 1, 'uploads/15933309065ef84cdac1babWhatsApp Image 2020-06-27 at 8.20.54 PM (1).jpeg', NULL, NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-06-28 01:55:06', '2020-06-28 01:55:06'),
(64, 'Fila Hoodie', 26, 12, 1, 'uploads/15933309355ef84cf750a6fWhatsApp Image 2020-06-27 at 8.20.54 PM (2).jpeg', NULL, NULL, NULL, NULL, 1, '2020-06-28 01:55:35', '2020-08-25 17:19:28'),
(65, 'Fila T-Shirt', 25, 4, 1, 'uploads/15933309695ef84d194f603WhatsApp Image 2020-06-27 at 8.20.54 PM.jpeg', NULL, NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-06-28 01:56:09', '2020-06-28 01:56:09'),
(66, 'Jacket', 26, 10, 1, 'uploads/15933310145ef84d46a55f4WhatsApp Image 2020-06-27 at 8.20.55 PM (2).jpeg', NULL, NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-06-28 01:56:54', '2020-07-13 21:16:50'),
(67, 'Jacket', 26, 10, 1, 'uploads/15933310375ef84d5d9812fWhatsApp Image 2020-06-27 at 8.20.55 PM.jpeg', NULL, NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-06-28 01:57:17', '2020-07-13 21:17:00'),
(68, 'Jacket', 26, 10, 1, 'uploads/15933310625ef84d760a108WhatsApp Image 2020-06-27 at 8.20.56 PM (1).jpeg', NULL, NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-06-28 01:57:42', '2020-07-13 21:17:12'),
(69, 'Trouser', 26, 16, 1, 'uploads/15933310945ef84d96698f3WhatsApp Image 2020-06-27 at 8.20.56 PM.jpeg', NULL, NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-06-28 01:58:14', '2020-07-14 18:08:15'),
(70, 'Hoodie', 26, 10, 1, 'uploads/15933311175ef84dade309aWhatsApp Image 2020-06-27 at 8.20.57 PM (1).jpeg', NULL, NULL, 'M,XL', NULL, 1, '2020-06-28 01:58:37', '2020-08-25 17:23:00'),
(71, 'Trouser', 26, 16, 1, 'uploads/15933311435ef84dc793fa4WhatsApp Image 2020-06-27 at 8.20.57 PM (2).jpeg', NULL, NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-06-28 01:59:03', '2020-07-14 18:08:31'),
(72, 'Trouser', 26, 16, 1, 'uploads/15933311765ef84de810c87WhatsApp Image 2020-06-27 at 8.20.57 PM.jpeg', NULL, NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-06-28 01:59:36', '2020-07-14 18:08:52'),
(74, 'POLO T-SHIRT', 25, 4, 1, 'uploads/15945835365f0b69f0c3dd71406.jpg', 'uploads/15945835365f0b69f0c40811406.jpg', 'Black, Red, Pink', 'XL, L', 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-12 23:52:16', '2020-07-12 23:52:16'),
(75, 'Full Sleeve Shirt', 26, 7, 3, 'uploads/15945837125f0b6aa02b40f5185.jpg', 'uploads/15945837125f0b6aa02b71c5185.jpg', 'Blue', 'XL, L, 34', 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-12 23:55:12', '2020-07-12 23:55:12'),
(76, 'JACKET', 26, 10, 1, 'uploads/15945840935f0b6c1dc7c27WhatsApp Image 2020-07-13 at 12.59.15 AM.jpeg', 'uploads/15945840935f0b6c1dc7dccWhatsApp Image 2020-07-13 at 12.59.15 AM.jpeg', 'Brown', 'XL', 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-13 00:01:33', '2020-07-13 21:18:46'),
(77, 'Blazer', 26, 10, 3, 'uploads/15947531845f0e00a0a2bf43_6.jpg', 'uploads/15947531845f0e00a0a2eba3_6.jpg', 'Black', 'L', '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-13 00:02:57', '2020-07-14 22:59:44'),
(78, 'Ladies Jacket', 26, 10, 2, 'uploads/15945843575f0b6d25ebd0eWhatsApp Image 2020-07-13 at 12.59.33 AM.jpeg', 'uploads/15945843575f0b6d25ebf79WhatsApp Image 2020-07-13 at 12.59.33 AM.jpeg', 'Pink', 'S,L', NULL, 1, '2020-07-13 00:05:57', '2020-08-25 19:19:53'),
(79, 'T-Shirt', 25, 4, 1, 'uploads/15945846305f0b6e366681fWhatsApp Image 2020-07-13 at 12.59.24 AM.jpeg', 'uploads/15945846305f0b6e3666a15WhatsApp Image 2020-07-13 at 12.59.24 AM.jpeg', 'Yellow', 'Xl, L', '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-13 00:10:30', '2020-07-14 20:58:30'),
(80, 'Dress', 25, 4, 2, 'uploads/15945847285f0b6e98d2858WhatsApp Image 2020-07-13 at 12.59.39 AM.jpeg', 'uploads/15945847285f0b6e98d2beeWhatsApp Image 2020-07-13 at 12.59.39 AM.jpeg', 'Black', 'XL', '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-13 00:12:08', '2020-07-14 19:42:26'),
(81, 'Dress', 25, 4, 2, 'uploads/15945848175f0b6ef1a79d6WhatsApp Image 2020-07-13 at 12.59.40 AM.jpeg', 'uploads/15945848175f0b6ef1a7bffWhatsApp Image 2020-07-13 at 12.59.40 AM.jpeg', 'Black', 'L', '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-13 00:13:37', '2020-07-14 19:18:50'),
(82, 'Safety Jacket', 26, 13, 1, 'uploads/15945849225f0b6f5ad64cdWhatsApp Image 2020-07-13 at 12.59.41 AM.jpeg', 'uploads/15945849225f0b6f5ad6694WhatsApp Image 2020-07-13 at 12.59.40 AM.jpeg', 'Orange', 'XL', 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-13 00:15:22', '2020-07-13 00:15:22'),
(83, 'Shirt', 26, 7, 3, 'uploads/15945849835f0b6f9761a98WhatsApp Image 2020-07-13 at 12.59.32 AM.jpeg', 'uploads/15945849835f0b6f9761cf8WhatsApp Image 2020-07-13 at 12.59.32 AM.jpeg', 'Blue', 'M, L', 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-13 00:16:23', '2020-07-13 00:16:23'),
(84, 'Shirt', 26, 7, 3, 'uploads/15945850365f0b6fcce2e1fWhatsApp Image 2020-07-13 at 12.59.32 AM.jpeg', 'uploads/15945850365f0b6fcce3078WhatsApp Image 2020-07-13 at 12.59.32 AM.jpeg', 'Blue', 'S', '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-13 00:17:16', '2020-07-14 19:18:04'),
(85, 'Bed Sheet', 26, 11, 5, 'uploads/15946430455f0c526507e274251.jpg', 'uploads/15946430455f0c5265080734251.jpg', 'White', NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-13 16:24:05', '2020-07-13 16:24:05'),
(86, 'Pillow', 26, 11, 5, 'uploads/15946431855f0c52f1f1ae063964.jpg', 'uploads/15946431855f0c52f1f1c8163964.jpg', NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-13 16:26:26', '2020-07-13 16:26:26'),
(87, 'Bed Sheet', 26, 11, 5, 'uploads/15946432225f0c53163ad6735.jpg', 'uploads/15946432225f0c53163af2435.jpg', NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-13 16:27:02', '2020-07-13 16:27:02'),
(88, 'Pillow', 26, 11, 5, 'uploads/15946432545f0c5336832e444.jpg', 'uploads/15946432545f0c5336835c344.jpg', 'White', NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-13 16:27:34', '2020-07-13 16:27:34'),
(89, 'Sweater', 27, 12, 4, 'uploads/15946437865f0c554af2d40WhatsApp Image 2020-07-13 at 11.27.26 AM.jpeg', 'uploads/15946437865f0c554af2fa4WhatsApp Image 2020-07-13 at 11.27.26 AM.jpeg', 'Pink', 'L', 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-13 16:36:27', '2020-07-13 16:36:27'),
(90, 'Sweater', 27, 12, 2, 'uploads/15946439075f0c55c32b840WhatsApp Image 2020-07-13 at 11.27.27 AM.jpeg', 'uploads/15946439075f0c55c32ba2aWhatsApp Image 2020-07-13 at 11.27.27 AM.jpeg', NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-13 16:38:27', '2020-07-13 16:38:27'),
(91, 'Sweater', 27, 12, 1, 'uploads/15946456775f0c5cadce549WhatsApp Image 2020-07-13 at 11.27.27 AM.jpeg', 'uploads/', NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-13 17:07:57', '2020-07-13 17:07:57'),
(92, 'Sweater', 27, 12, 3, 'uploads/15946457175f0c5cd502b0fWhatsApp Image 2020-07-13 at 11.27.31 AM.jpeg', 'uploads/15946457175f0c5cd502e42WhatsApp Image 2020-07-13 at 11.27.31 AM.jpeg', NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-13 17:08:37', '2020-07-13 17:08:37'),
(93, 'Sweater', 27, 12, 4, 'uploads/15946457485f0c5cf450302WhatsApp Image 2020-07-13 at 11.27.28 AM.jpeg', 'uploads/15946457485f0c5cf45063aWhatsApp Image 2020-07-13 at 11.27.28 AM.jpeg', 'Red', NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-13 17:09:08', '2020-07-13 17:09:08'),
(94, 'Sweater', 27, 12, 2, 'uploads/15946457765f0c5d10dd151WhatsApp Image 2020-07-13 at 11.27.29 AM.jpeg', 'uploads/15946457765f0c5d10dd4b8WhatsApp Image 2020-07-13 at 11.27.29 AM.jpeg', NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-13 17:09:36', '2020-07-13 17:09:36'),
(95, 'Sweater', 27, 12, 1, 'uploads/15946458105f0c5d32563dcWhatsApp Image 2020-07-1gdf3 at 11.27.29 AM.jpeg', 'uploads/15946458105f0c5d32566deWhatsApp Image 2020-07-1gdf3 at 11.27.29 AM.jpeg', NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-13 17:10:10', '2020-07-13 17:10:10'),
(96, 'Lingerie', 25, 15, 2, 'uploads/15946580745f0c8d1a607c063467.jpg', 'uploads/', 'Pink, Black', '36', '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-13 20:34:34', '2020-07-14 17:10:19'),
(97, 'Lingerie', 25, 15, 4, 'uploads/15947397515f0dcc27900903-Pack-Teenage-Lace-Pants-Underpants-Floral-Young-Girl-Briefs-Candy-Colors-for-Girls-Short-Panties.jpg', 'uploads/15947397515f0dcc27904dc3-Pack-Teenage-Lace-Pants-Underpants-Floral-Young-Girl-Briefs-Candy-Colors-for-Girls-Short-Panties.jpg', 'Pink', NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-13 20:55:55', '2020-07-14 19:15:51'),
(98, 'Lingerie', 25, 15, 2, 'uploads/15946594185f0c925ac9681633646-POB3F2-279.jpg', 'uploads/15946594185f0c925ac97f8633646-POB3F2-279.jpg', 'White', NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-13 20:56:58', '2020-07-14 17:11:06'),
(99, 'T-Shirt', 27, 12, 1, 'uploads/15946615115f0c9a87c9472WhatsApp Image 2020-07-13 at 11.27.33 AM.jpeg', 'uploads/15946615115f0c9a87c9697WhatsApp Image 2020-07-13 at 11.27.33 AM.jpeg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-13 21:31:51', '2020-07-14 19:46:59'),
(100, 'T-Shirt', 25, 4, 1, 'uploads/15946617445f0c9b7020a4aWhatsApp Image 2020-07-13 at 11.27.32 AM.jpeg', 'uploads/', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-13 21:35:44', '2020-07-14 19:43:33'),
(101, 'Dress', 27, 12, 4, 'uploads/15946618445f0c9bd41ff0bWhatsApp Image 2020-07-13 at 11.27.30 AM.jpeg', 'uploads/', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-13 21:37:24', '2020-07-14 19:47:13'),
(102, 'Shirt', 26, 7, 1, 'uploads/15946620935f0c9ccd29f23WhatsApp Image 2020-07-13 at 12.59.35 AM.jpeg', 'uploads/', NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-13 21:41:33', '2020-07-13 21:41:33'),
(103, 'Lingerie', 25, 15, 4, 'uploads/15947397555f0dcc2b96d7a8-15Y-Girls-Underwear-Soft-Cotton-Bra-for-Kids-Teenager-Training-Small-Vest-Underwear-Puberty-Clothing.jpg_640x640.jpg', 'uploads/15947397555f0dcc2b970148-15Y-Girls-Underwear-Soft-Cotton-Bra-for-Kids-Teenager-Training-Small-Vest-Underwear-Puberty-Clothing.jpg_640x640.jpg', 'Black', NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-13 22:36:37', '2020-07-14 19:15:55'),
(104, 'Lingerie', 25, 15, 2, 'uploads/15946654185f0ca9cab05a8645.jpg', 'uploads/', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-13 22:36:58', '2020-07-14 17:11:50'),
(105, 'Lingerie', 25, 15, 4, 'uploads/15947397665f0dcc369dbe0Girl-Racerback-Cotton-Sport-Training-Bra-Letter-Print-Solid-Color-Wide-Strap-Underwear-Bralette-Seamless-Layered.jpg', 'uploads/15947397665f0dcc369df70Girl-Racerback-Cotton-Sport-Training-Bra-Letter-Print-Solid-Color-Wide-Strap-Underwear-Bralette-Seamless-Layered.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-13 22:37:15', '2020-07-14 19:16:06'),
(106, 'Lingerie', 25, 15, 2, 'uploads/15947507135f0df6f9f374al-sfh051-pk-vt-villa-original-imafhfrht2z3vxgh.jpeg', 'uploads/15947507135f0df6f9f39e3l-sfh051-pk-vt-villa-original-imafhfrht2z3vxgh.jpeg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-13 22:37:34', '2020-07-14 22:18:33'),
(107, 'Lingerie', 25, 15, 4, 'uploads/15947397755f0dcc3f507c5Teen-Girls-Underwear-Soft-Padded-Cotton-Bra-Young-Girls-For-Yoga-Sports-Running-Breathable-Bra-8.jpg', 'uploads/15947397755f0dcc3f52629Teen-Girls-Underwear-Soft-Padded-Cotton-Bra-Young-Girls-For-Yoga-Sports-Running-Breathable-Bra-8.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-13 22:37:54', '2020-07-14 19:16:15'),
(108, 'Sweater', 27, 12, 4, 'uploads/15947202975f0d80298ab50WhatsApp Image 2020-07-13 at 11.27.26 AM (2).jpeg', 'uploads/15947202975f0d80298ad9cWhatsApp Image 2020-07-13 at 11.27.26 AM (2).jpeg', NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-14 13:51:37', '2020-07-14 13:51:37'),
(109, 'Sweater', 27, 12, 4, 'uploads/15947203065f0d8032274d2WhatsApp Image 2020-07-13 at 11.27.26 AM (1).jpeg', 'uploads/15947203065f0d803227f43WhatsApp Image 2020-07-13 at 11.27.26 AM (1).jpeg', NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-14 13:51:46', '2020-07-14 13:51:46'),
(110, 'Sweater', 27, 12, 4, 'uploads/15947203175f0d803d1bf7eWhatsApp Image 2020-07-13 at 11.27.26 AM.jpeg', 'uploads/15947203175f0d803d1c24eWhatsApp Image 2020-07-13 at 11.27.26 AM.jpeg', NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-14 13:51:57', '2020-07-14 13:51:57'),
(111, 'Sweater', 27, 12, 1, 'uploads/15947204205f0d80a4ca069WhatsApp Image 2020-07-13 at 11.27.27 AM (1).jpeg', 'uploads/15947204205f0d80a4ca276WhatsApp Image 2020-07-13 at 11.27.27 AM (1).jpeg', NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-14 13:53:40', '2020-07-14 13:53:40'),
(112, 'Sweater', 27, 12, 1, 'uploads/15947204455f0d80bd4ef55WhatsApp Image 2020-07-13 at 11.27.28 AM.jpeg', 'uploads/15947204455f0d80bd4f27aWhatsApp Image 2020-07-13 at 11.27.28 AM.jpeg', NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-14 13:54:05', '2020-07-14 13:54:05'),
(113, 'Sweater', 27, 12, 1, 'uploads/15947204625f0d80ce87a58WhatsApp Image 2020-07-13 at 11.27.28 AM (1).jpeg', 'uploads/15947204625f0d80ce87dc0WhatsApp Image 2020-07-13 at 11.27.28 AM (1).jpeg', 'black,white,red,blue,green,orange', 'S,L,M,XL,XXL', '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 13:54:22', '2022-07-13 06:31:59'),
(114, 'Sweater', 27, 12, 1, 'uploads/15947204805f0d80e012bc3WhatsApp Image 2020-07-13 at 11.27.29 AM.jpeg', 'uploads/15947204805f0d80e012dbbWhatsApp Image 2020-07-13 at 11.27.29 AM.jpeg', NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-14 13:54:40', '2020-07-14 13:54:40'),
(115, 'Sweater', 27, 12, 1, 'uploads/15947205255f0d810d3fa38WhatsApp Image 2020-07-13 at 11.27.31 AM.jpeg', 'uploads/15947205255f0d810d3fc5eWhatsApp Image 2020-07-13 at 11.27.31 AM.jpeg', NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-14 13:55:25', '2020-07-14 13:55:25'),
(116, 'Sweater', 27, 12, 1, 'uploads/15947205445f0d81206fe7eWhatsApp Image 2020-07-13 at 11.27.31 AM (2).jpeg', 'uploads/15947205445f0d8120700c5WhatsApp Image 2020-07-13 at 11.27.31 AM (2).jpeg', NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-14 13:55:44', '2020-07-14 13:55:44'),
(117, 'Sweater', 27, 12, 1, 'uploads/15947205645f0d813441938WhatsApp Image 2020-07-13 at 11.27.32 AM.jpeg', 'uploads/15947205645f0d813441b7fWhatsApp Image 2020-07-13 at 11.27.32 AM.jpeg', NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-14 13:56:04', '2020-07-14 13:56:04'),
(118, 'Sweater', 27, 12, 1, 'uploads/15947205745f0d813e1579cWhatsApp Image 2020-07-13 at 11.27.30 AM (1).jpeg', 'uploads/15947205745f0d813e159ddWhatsApp Image 2020-07-13 at 11.27.30 AM (1).jpeg', NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-14 13:56:14', '2020-07-14 13:56:14'),
(119, 'T-Shirt', 25, 4, 1, 'uploads/15947206225f0d816e71a67WhatsApp Image 2020-07-13 at 11.27.32 AM (1).jpeg', 'uploads/15947206225f0d816e71cdcWhatsApp Image 2020-07-13 at 11.27.32 AM (1).jpeg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 13:57:02', '2020-07-14 20:58:44'),
(120, 'Sweater', 27, 12, 1, 'uploads/15947206645f0d81984a09dWhatsApp Image 2020-07-13 at 11.27.32 AM (2).jpeg', 'uploads/15947206645f0d81984a30dWhatsApp Image 2020-07-13 at 11.27.32 AM (2).jpeg', NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-14 13:57:44', '2020-07-14 13:57:44'),
(121, 'Sweater', 27, 12, 1, 'uploads/15947206795f0d81a7524bbWhatsApp Image 2020-07-13 at 11.27.33 AM.jpeg', 'uploads/15947206795f0d81a7526e6WhatsApp Image 2020-07-13 at 11.27.33 AM.jpeg', NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-14 13:57:59', '2020-07-14 13:57:59'),
(122, 'Jacket', 26, 10, 1, 'uploads/15947207605f0d81f84e30dWhatsApp Image 2020-07-13 at 12.59.13 AM.jpeg', 'uploads/15947207605f0d81f84e4acWhatsApp Image 2020-07-13 at 12.59.13 AM.jpeg', NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-14 13:59:20', '2020-07-14 13:59:20'),
(123, 'Jacket', 26, 10, 1, 'uploads/15947207765f0d820871163WhatsApp Image 2020-07-13 at 12.59.15 AM.jpeg', 'uploads/15947207765f0d820871302WhatsApp Image 2020-07-13 at 12.59.15 AM.jpeg', NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-14 13:59:36', '2020-07-14 13:59:36'),
(124, 'Jacket', 26, 10, 1, 'uploads/15947207865f0d82121e072WhatsApp Image 2020-07-13 at 12.59.14 AM.jpeg', 'uploads/15947207865f0d82121e1f0WhatsApp Image 2020-07-13 at 12.59.14 AM.jpeg', NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-14 13:59:46', '2020-07-14 13:59:46'),
(125, 'Jacket', 26, 10, 1, 'uploads/15947208045f0d82247da5bWhatsApp Image 2020-07-13 at 12.59.16 AM.jpeg', 'uploads/15947208045f0d82247dc47WhatsApp Image 2020-07-13 at 12.59.16 AM.jpeg', NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-14 14:00:04', '2020-07-14 14:00:04'),
(126, 'Jacket', 26, 10, 1, 'uploads/15947208275f0d823b0ddacWhatsApp Image 2020-07-13 at 12.59.17 AM.jpeg', 'uploads/15947208275f0d823b0df6aWhatsApp Image 2020-07-13 at 12.59.17 AM.jpeg', NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-14 14:00:27', '2020-07-14 14:00:27'),
(127, 'Shirt', 26, 7, 1, 'uploads/15947216025f0d85420183eWhatsApp Image 2020-07-13 at 12.59.18 AM.jpeg', 'uploads/15947216025f0d854201a4cWhatsApp Image 2020-07-13 at 12.59.18 AM.jpeg', NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-14 14:13:22', '2020-07-14 14:13:22'),
(128, 'Shirt', 26, 7, 1, 'uploads/15947216185f0d85525d46eWhatsApp Image 2020-07-13 at 12.59.18 AM (1).jpeg', 'uploads/15947216185f0d85525d6beWhatsApp Image 2020-07-13 at 12.59.18 AM (1).jpeg', NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-14 14:13:38', '2020-07-14 14:13:38'),
(129, 'Shirt', 26, 7, 1, 'uploads/15947216345f0d8562b10bfWhatsApp Image 2020-07-13 at 12.59.19 AM.jpeg', 'uploads/15947216345f0d8562b12cfWhatsApp Image 2020-07-13 at 12.59.19 AM.jpeg', NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-14 14:13:54', '2020-07-14 14:13:54'),
(130, 'Shirt', 26, 7, 1, 'uploads/15947216625f0d857ec8509WhatsApp Image 2020-07-13 at 12.59.19 AM (1).jpeg', 'uploads/15947216625f0d857ec8757WhatsApp Image 2020-07-13 at 12.59.19 AM (1).jpeg', NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-14 14:14:22', '2020-07-14 14:14:22'),
(131, 'Jacket', 26, 10, 1, 'uploads/15947217615f0d85e1bd7e7WhatsApp Image 2020-07-13 at 12.59.20 AM.jpeg', 'uploads/15947217615f0d85e1bd98bWhatsApp Image 2020-07-13 at 12.59.20 AM.jpeg', NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-14 14:16:01', '2020-07-14 14:16:01'),
(133, 'Jacket', 26, 10, 1, 'uploads/15947218035f0d860bbbe86WhatsApp Image 2020-07-13 at 12.59.21 AM.jpeg', 'uploads/15947218035f0d860bbc0beWhatsApp Image 2020-07-13 at 12.59.21 AM.jpeg', NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-14 14:16:43', '2020-07-14 14:16:43'),
(134, 'Jacket', 26, 10, 1, 'uploads/15947218265f0d862281dd8WhatsApp Image 2020-07-13 at 12.59.21 AM (1).jpeg', 'uploads/15947218265f0d86228200eWhatsApp Image 2020-07-13 at 12.59.21 AM (1).jpeg', NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-14 14:17:06', '2020-07-14 14:17:06'),
(135, 'Jacket', 26, 10, 1, 'uploads/15947218485f0d86384fe5fWhatsApp Image 2020-07-13 at 12.59.21 AM (2).jpeg', 'uploads/15947218485f0d863850012WhatsApp Image 2020-07-13 at 12.59.21 AM (2).jpeg', NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-14 14:17:28', '2020-07-14 14:17:28'),
(136, 'T-Shirt', 25, 4, 1, 'uploads/15947405455f0dcf41e0f8b15947219385f0d86925a907WhatsApp Image 2020-07-13 at 12.59.22 AM.jpeg', 'uploads/15947405455f0dcf41e12fe15947219385f0d86925a907WhatsApp Image 2020-07-13 at 12.59.22 AM.jpeg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 14:18:58', '2020-07-14 19:29:05'),
(137, 'T-Shirt', 25, 4, 1, 'uploads/15947405615f0dcf51549d415947219525f0d86a0b91c0WhatsApp Image 2020-07-13 at 12.59.24 AM (1).jpeg', 'uploads/15947405615f0dcf5154c7315947219525f0d86a0b91c0WhatsApp Image 2020-07-13 at 12.59.24 AM (1).jpeg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 14:19:12', '2020-07-14 19:29:21'),
(138, 'T-Shirt', 25, 4, 1, 'uploads/15947219685f0d86b0d7133WhatsApp Image 2020-07-13 at 12.59.24 AM (2).jpeg', 'uploads/15947219685f0d86b0d72d5WhatsApp Image 2020-07-13 at 12.59.24 AM (2).jpeg', NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-14 14:19:28', '2020-07-14 14:19:28'),
(139, 'T-Shirt', 25, 4, 1, 'uploads/15947405765f0dcf6063f5415947219855f0d86c14c407WhatsApp Image 2020-07-13 at 12.59.25 AM.jpeg', 'uploads/15947405765f0dcf60642c615947219855f0d86c14c407WhatsApp Image 2020-07-13 at 12.59.25 AM.jpeg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 14:19:45', '2020-07-14 19:29:36'),
(140, 'T-Shirt', 25, 4, 1, 'uploads/15947405965f0dcf749559815947220055f0d86d564118WhatsApp Image 2020-07-13 at 12.59.25 AM (1).jpeg', 'uploads/15947405965f0dcf74958db15947220055f0d86d564118WhatsApp Image 2020-07-13 at 12.59.25 AM (1).jpeg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 14:20:05', '2020-07-14 19:29:56'),
(141, 'T-Shirt', 25, 4, 1, 'uploads/15947406175f0dcf8900b8715947220275f0d86eb31f2bWhatsApp Image 2020-07-13 at 12.59.25 AM (3).jpeg', 'uploads/15947406175f0dcf8900deb15947220275f0d86eb31f2bWhatsApp Image 2020-07-13 at 12.59.25 AM (3).jpeg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 14:20:27', '2020-07-14 19:30:17'),
(142, 'T-Shirt', 25, 4, 2, 'uploads/15947401555f0dcdbba950e15947220505f0d8702bc872WhatsApp Image 2020-07-13 at 12.59.26 AM.jpeg', 'uploads/15947401555f0dcdbba98a315947220505f0d8702bc872WhatsApp Image 2020-07-13 at 12.59.26 AM.jpeg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 14:20:50', '2020-07-14 19:22:35'),
(143, 'T-Shirt', 25, 4, 2, 'uploads/15947401715f0dcdcb7063115947221115f0d873f79cd4WhatsApp Image 2020-07-13 at 12.59.27 AM.jpeg', 'uploads/15947401715f0dcdcb7096415947221115f0d873f79cd4WhatsApp Image 2020-07-13 at 12.59.27 AM.jpeg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 14:21:51', '2020-07-14 19:22:51'),
(144, 'T-Shirt', 25, 4, 1, 'uploads/15947406345f0dcf9abd14415947221145f0d874288be5WhatsApp Image 2020-07-13 at 12.59.26 AM (1).jpeg', 'uploads/15947406345f0dcf9abd47715947221145f0d874288be5WhatsApp Image 2020-07-13 at 12.59.26 AM (1).jpeg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 14:21:54', '2020-07-14 19:30:34'),
(145, 'T-Shirt', 25, 4, 2, 'uploads/15947401865f0dcdda0353b15947221405f0d875cc607cWhatsApp Image 2020-07-13 at 12.59.27 AM (1).jpeg', 'uploads/15947401865f0dcdda038ba15947221405f0d875cc607cWhatsApp Image 2020-07-13 at 12.59.27 AM (1).jpeg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 14:22:20', '2020-07-14 19:23:06'),
(146, 'T-Shirt', 25, 4, 1, 'uploads/15947405225f0dcf2ad8ce915947221575f0d876dd94a7WhatsApp Image 2020-07-13 at 12.59.28 AM.jpeg', 'uploads/15947405225f0dcf2ad90d415947221575f0d876dd94a7WhatsApp Image 2020-07-13 at 12.59.28 AM.jpeg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 14:22:37', '2020-07-14 19:28:42'),
(147, 'T-Shirt', 25, 4, 2, 'uploads/15947402005f0dcde87462015947221985f0d879635f17WhatsApp Image 2020-07-13 at 12.59.28 AM (2).jpeg', 'uploads/15947402005f0dcde87493a15947221985f0d879635f17WhatsApp Image 2020-07-13 at 12.59.28 AM (2).jpeg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 14:23:18', '2020-07-14 19:23:20'),
(148, 'T-Shirt', 25, 4, 1, 'uploads/15947406625f0dcfb6a142315947222235f0d87afa1b17WhatsApp Image 2020-07-13 at 12.59.28 AM (1).jpeg', 'uploads/15947406625f0dcfb6a180c15947222235f0d87afa1b17WhatsApp Image 2020-07-13 at 12.59.28 AM (1).jpeg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 14:23:43', '2020-07-14 19:31:02'),
(149, 'Jacket', 26, 10, 1, 'uploads/15947222995f0d87fb19da4WhatsApp Image 2020-07-13 at 12.59.29 AM.jpeg', 'uploads/15947222995f0d87fb19fbbWhatsApp Image 2020-07-13 at 12.59.29 AM.jpeg', NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-14 14:24:59', '2020-07-14 14:24:59'),
(150, 'Sweater', 27, 12, 2, 'uploads/15947223435f0d8827c9330WhatsApp Image 2020-07-13 at 12.59.30 AM.jpeg', 'uploads/15947223435f0d8827c9524WhatsApp Image 2020-07-13 at 12.59.30 AM.jpeg', NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-14 14:25:43', '2020-07-14 14:25:43'),
(151, 'Jacket', 26, 10, 1, 'uploads/15947224115f0d886b6d357WhatsApp Image 2020-07-13 at 12.59.30 AM (1).jpeg', 'uploads/15947224115f0d886b6d50aWhatsApp Image 2020-07-13 at 12.59.30 AM (1).jpeg', NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-14 14:26:51', '2020-07-14 14:26:51'),
(152, 'Jacket', 26, 10, 1, 'uploads/15947224295f0d887dcf900WhatsApp Image 2020-07-13 at 12.59.30 AM (2).jpeg', 'uploads/15947224295f0d887dcfad2WhatsApp Image 2020-07-13 at 12.59.30 AM (2).jpeg', NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-14 14:27:09', '2020-07-14 14:27:09'),
(153, 'Jacket', 26, 10, 1, 'uploads/15947224685f0d88a4be3f4WhatsApp Image 2020-07-13 at 12.59.31 AM (1).jpeg', 'uploads/15947224685f0d88a4be5f0WhatsApp Image 2020-07-13 at 12.59.31 AM (1).jpeg', NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-14 14:27:48', '2020-07-14 14:27:48'),
(154, 'Jacket', 26, 10, 1, 'uploads/15947224955f0d88bfd75f5WhatsApp Image 2020-07-13 at 12.59.31 AM (2).jpeg', 'uploads/15947224955f0d88bfd77a7WhatsApp Image 2020-07-13 at 12.59.31 AM (2).jpeg', NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-14 14:28:15', '2020-07-14 14:28:15'),
(155, 'Jacket', 26, 10, 1, 'uploads/15947225085f0d88cc77181WhatsApp Image 2020-07-13 at 12.59.31 AM.jpeg', 'uploads/15947225085f0d88cc772d5WhatsApp Image 2020-07-13 at 12.59.31 AM.jpeg', NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-14 14:28:28', '2020-07-14 14:28:28'),
(156, 'Shirt', 26, 7, 3, 'uploads/15947225635f0d890334512WhatsApp Image 2020-07-13 at 12.59.32 AM.jpeg', 'uploads/15947225635f0d8903347dbWhatsApp Image 2020-07-13 at 12.59.32 AM.jpeg', NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-14 14:29:23', '2020-07-14 14:29:23'),
(157, 'Shirt', 26, 7, 3, 'uploads/15947225875f0d891b3f654WhatsApp Image 2020-07-13 at 12.59.32 AM (2).jpeg', 'uploads/15947225875f0d891b3fa7cWhatsApp Image 2020-07-13 at 12.59.32 AM (2).jpeg', NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-14 14:29:47', '2020-07-14 14:29:47'),
(158, 'Shirt', 26, 7, 3, 'uploads/15947226035f0d892b82469WhatsApp Image 2020-07-13 at 12.59.32 AM (3).jpeg', 'uploads/15947226035f0d892b826f1WhatsApp Image 2020-07-13 at 12.59.32 AM (3).jpeg', NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-14 14:30:03', '2020-07-14 14:30:03'),
(159, 'Woven Hoodie Jacket', 26, 10, 1, 'uploads/15947226715f0d896f43230WhatsApp Image 2020-07-13 at 12.59.33 AM.jpeg', 'uploads/15947226715f0d896f433f3WhatsApp Image 2020-07-13 at 12.59.33 AM.jpeg', NULL, NULL, NULL, 1, '2020-07-14 14:31:11', '2020-08-25 17:25:04'),
(163, 'Pant', 26, 16, 2, 'uploads/15947513135f0df9510db366452f4c82cc631af4e19edfc7f284b48.jpg', 'uploads/15947513135f0df9510e02b6452f4c82cc631af4e19edfc7f284b48.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 14:34:45', '2020-07-14 22:28:33'),
(164, 'Pant', 26, 16, 2, 'uploads/15947513315f0df963e80aaWinter-Elegant-Women-Calf-length-Pants-2018-Black-Straight-Wide-Leg-Pants-Woolen-High-Waist-Trousers.webp', 'uploads/15947513315f0df963e8385Winter-Elegant-Women-Calf-length-Pants-2018-Black-Straight-Wide-Leg-Pants-Woolen-High-Waist-Trousers.webp', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 14:34:59', '2020-07-14 22:28:51'),
(166, 'Jeans', 26, 6, 1, 'uploads/15947229865f0d8aaaa7621WhatsApp Image 2020-07-13 at 12.59.35 AM.jpeg', 'uploads/15947229865f0d8aaaa77efWhatsApp Image 2020-07-13 at 12.59.35 AM.jpeg', NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-14 14:36:26', '2020-07-14 14:36:26'),
(167, 'Jeans', 26, 6, 1, 'uploads/15947230015f0d8ab9f23cfWhatsApp Image 2020-07-13 at 12.59.36 AM.jpeg', 'uploads/15947230015f0d8ab9f268bWhatsApp Image 2020-07-13 at 12.59.36 AM.jpeg', NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-14 14:36:42', '2020-07-14 14:36:42'),
(168, 'Jeans', 26, 6, 1, 'uploads/15947230205f0d8acc8aa03WhatsApp Image 2020-07-13 at 12.59.36 AM (1).jpeg', 'uploads/15947230205f0d8acc8ac47WhatsApp Image 2020-07-13 at 12.59.36 AM (1).jpeg', NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-14 14:37:00', '2020-07-14 14:37:00'),
(169, 'Jeans', 26, 6, 1, 'uploads/15947230375f0d8addbe81aWhatsApp Image 2020-07-13 at 12.59.36 AM (2).jpeg', 'uploads/15947230375f0d8addbe9f1WhatsApp Image 2020-07-13 at 12.59.36 AM (2).jpeg', NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-14 14:37:17', '2020-07-14 14:37:17'),
(170, 'Jeans', 26, 6, 1, 'uploads/15947230585f0d8af2961c6WhatsApp Image 2020-07-13 at 12.59.37 AM.jpeg', 'uploads/15947230585f0d8af296436WhatsApp Image 2020-07-13 at 12.59.37 AM.jpeg', NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-14 14:37:38', '2020-07-14 14:37:38'),
(171, 'Jeans', 26, 6, 1, 'uploads/15947230735f0d8b0199e21WhatsApp Image 2020-07-13 at 12.59.37 AM (2).jpeg', 'uploads/15947230735f0d8b0199feeWhatsApp Image 2020-07-13 at 12.59.37 AM (2).jpeg', NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-14 14:37:53', '2020-07-14 14:37:53'),
(172, 'Jeans', 26, 6, 1, 'uploads/15947230905f0d8b1282687WhatsApp Image 2020-07-13 at 12.59.38 AM.jpeg', 'uploads/15947230905f0d8b128289cWhatsApp Image 2020-07-13 at 12.59.38 AM.jpeg', NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-14 14:38:10', '2020-07-14 14:38:10'),
(173, 'Jeans', 26, 6, 1, 'uploads/15947231235f0d8b338eda2WhatsApp Image 2020-07-13 at 12.59.38 AM (2).jpeg', 'uploads/15947231235f0d8b338ef9fWhatsApp Image 2020-07-13 at 12.59.38 AM (2).jpeg', NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-14 14:38:43', '2020-07-14 14:38:43'),
(174, 'Dress', 25, 4, 2, 'uploads/15947232145f0d8b8ecbeabWhatsApp Image 2020-07-13 at 12.59.39 AM (2).jpeg', 'uploads/15947232145f0d8b8ecc0ccWhatsApp Image 2020-07-13 at 12.59.39 AM (2).jpeg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 14:40:14', '2020-07-14 19:19:02');
INSERT INTO `products` (`id`, `name`, `division`, `category`, `gender`, `image_front`, `image_back`, `color`, `size`, `description`, `status`, `created_at`, `updated_at`) VALUES
(176, 'Dress', 25, 4, 4, 'uploads/15947366745f0dc022e842d3011963_32KT.jpg', 'uploads/15947366745f0dc022e858b3011963_32KT.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 18:24:34', '2020-07-14 18:24:34'),
(177, 'Dress', 25, 4, 4, 'uploads/15947366935f0dc035c6c8e3011966_1128.jpg', 'uploads/15947366935f0dc035c6dff3011966_1128.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 18:24:53', '2020-07-14 18:24:53'),
(178, 'Dress', 25, 4, 4, 'uploads/15947367105f0dc04652de83011972_1008.jpg', 'uploads/15947367105f0dc04652f313011972_1008.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 18:25:10', '2020-07-14 18:25:10'),
(179, 'Dress', 25, 4, 4, 'uploads/15947367265f0dc0568ba923011978_1128.jpg', 'uploads/15947367265f0dc0568bbef3011978_1128.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 18:25:26', '2020-07-14 18:25:26'),
(180, 'Dress', 25, 4, 4, 'uploads/15947367445f0dc068b69043012112_1128.jpg', 'uploads/15947367445f0dc068b6a593012112_1128.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 18:25:44', '2020-07-14 18:25:44'),
(181, 'Shirt', 26, 7, 3, 'uploads/15947369065f0dc10acf69951KLwGBRxWL._AC_UL320_.jpg', 'uploads/15947369065f0dc10acf81851KLwGBRxWL._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 18:28:26', '2020-07-14 18:28:26'),
(182, 'Shirt', 26, 7, 3, 'uploads/15947369275f0dc11f5771c71SgZjEwAeL._AC_UL320_.jpg', 'uploads/15947369275f0dc11f5786d71SgZjEwAeL._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 18:28:47', '2020-07-14 18:28:47'),
(183, 'Shirt', 26, 7, 3, 'uploads/15947369475f0dc133a625181-Ik67xfmL._AC_UL320_.jpg', 'uploads/15947369475f0dc133a637d81-Ik67xfmL._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 18:29:07', '2020-07-14 18:29:07'),
(184, 'Shirt', 26, 7, 3, 'uploads/15947369665f0dc1461e43a91kU7UX6msL._AC_UL320_.jpg', 'uploads/15947369665f0dc1462080791kU7UX6msL._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 18:29:26', '2020-07-14 18:29:26'),
(185, 'Shirt', 26, 7, 3, 'uploads/15947369865f0dc15aa6c097189uJ3qQvL._AC_UL320_.jpg', 'uploads/15947369865f0dc15aa6d727189uJ3qQvL._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 18:29:46', '2020-07-14 18:29:46'),
(186, 'Shirt', 26, 7, 4, 'uploads/15947372395f0dc2573c5b061sS8xmCifL._AC_UL320_.jpg', 'uploads/15947372395f0dc2573c6f061sS8xmCifL._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 18:33:59', '2020-07-14 18:33:59'),
(187, 'Shirt', 26, 7, 4, 'uploads/15947372565f0dc2688a31871TgZHCieCL._AC_UL320_.jpg', 'uploads/15947372565f0dc2688a46271TgZHCieCL._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 18:34:16', '2020-07-14 18:34:16'),
(188, 'Shirt', 26, 7, 4, 'uploads/15947372745f0dc27aa289871-ZtJlLBqL._AC_UL320_.jpg', 'uploads/15947372745f0dc27aa29bd71-ZtJlLBqL._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 18:34:34', '2020-07-14 18:34:34'),
(189, 'Shirt', 26, 7, 4, 'uploads/15947372915f0dc28bcb63581NxDcy426L._AC_UL320_.jpg', 'uploads/15947372915f0dc28bcb77681NxDcy426L._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 18:34:51', '2020-07-14 18:34:51'),
(190, 'Shirt', 26, 7, 4, 'uploads/15947373105f0dc29e8d81091Os6Aby6aL._AC_UL320_.jpg', 'uploads/15947373105f0dc29e8d97f91Os6Aby6aL._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 18:35:10', '2020-07-14 18:35:10'),
(191, 'Shirt', 26, 7, 2, 'uploads/15947374405f0dc32048cd051hJPq8bsUL._AC_UL320_.jpg', 'uploads/15947374405f0dc32048e1351hJPq8bsUL._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 18:37:20', '2020-07-14 18:37:20'),
(192, 'Shirt', 26, 7, 2, 'uploads/15947374575f0dc33104e2e51r9aauTrJL._AC_UL320_.jpg', 'uploads/15947374575f0dc33104f6751r9aauTrJL._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 18:37:37', '2020-07-14 18:37:37'),
(193, 'Shirt', 26, 7, 2, 'uploads/15947374785f0dc346bbca361bCK51yknL._AC_UL320_.jpg', 'uploads/15947374785f0dc346bbdea61bCK51yknL._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 18:37:58', '2020-07-14 18:37:58'),
(194, 'Shirt', 26, 7, 2, 'uploads/15947374985f0dc35a461c261hLsQcbt3L._AC_UL320_.jpg', 'uploads/15947374985f0dc35a462f861hLsQcbt3L._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 18:38:18', '2020-07-14 18:38:18'),
(195, 'Shirt', 26, 7, 2, 'uploads/15947375175f0dc36dce719617xB48I7tL._AC_UL320_.jpg', 'uploads/15947375175f0dc36dce85c617xB48I7tL._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 18:38:37', '2020-07-14 18:38:37'),
(196, 'Jacket', 26, 10, 2, 'uploads/15947376175f0dc3d1bcb7661dfPT2Ko4L._AC_UL320_.jpg', 'uploads/15947376175f0dc3d1bccb261dfPT2Ko4L._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 18:40:17', '2020-07-14 18:40:17'),
(197, 'Jacket', 26, 10, 2, 'uploads/15947376355f0dc3e3792da71dtg59W6oL._AC_UL320_.jpg', 'uploads/15947376355f0dc3e37947271dtg59W6oL._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 18:40:35', '2020-07-14 18:40:35'),
(198, 'Jacket', 26, 10, 2, 'uploads/15947376545f0dc3f66023c81ckl3b1R7L._AC_UL320_.jpg', 'uploads/15947376545f0dc3f66037f81ckl3b1R7L._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 18:40:54', '2020-07-14 18:40:54'),
(199, 'Jacket', 26, 10, 2, 'uploads/15947376715f0dc407eb35681LDQKjvGAL._AC_UL320_.jpg', 'uploads/15947376715f0dc407eb4b781LDQKjvGAL._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 18:41:11', '2020-07-14 18:41:11'),
(200, 'Jacket', 26, 10, 2, 'uploads/15947376895f0dc419c2a27915J-N+xmpL._AC_UL320_.jpg', 'uploads/15947376895f0dc419c2b6f915J-N+xmpL._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 18:41:29', '2020-07-14 18:41:29'),
(201, 'Jacket', 26, 10, 4, 'uploads/15947377705f0dc46a6afce61S5OCbs9TL._AC_UL320_.jpg', 'uploads/15947377705f0dc46a6b17661S5OCbs9TL._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 18:42:50', '2020-07-14 18:42:50'),
(202, 'Jacket', 26, 10, 4, 'uploads/15947377895f0dc47d0a68d71BqjzN0evL._AC_UL320_.jpg', 'uploads/15947377895f0dc47d0a7e471BqjzN0evL._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 18:43:09', '2020-07-14 18:43:09'),
(203, 'Jacket', 26, 10, 4, 'uploads/15947378065f0dc48e03bc581DIYCh022L._AC_UL320_.jpg', 'uploads/15947378065f0dc48e03d1d81DIYCh022L._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 18:43:26', '2020-07-14 18:43:26'),
(204, 'Jacket', 26, 10, 4, 'uploads/15947378235f0dc49f46e0881QJ+kf0D2L._AC_UL320_.jpg', 'uploads/15947378235f0dc49f46fc981QJ+kf0D2L._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 18:43:43', '2020-07-14 18:43:43'),
(205, 'Jacket', 26, 10, 4, 'uploads/15947378425f0dc4b297b58812Upp-imkL._AC_UL320_.jpg', 'uploads/15947378425f0dc4b297ca3812Upp-imkL._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 18:44:02', '2020-07-14 18:44:02'),
(206, 'Jeans', 26, 6, 3, 'uploads/15947380975f0dc5b10091691GT4l3YoPL._AC_UL320_.jpg', 'uploads/15947380975f0dc5b100a6191GT4l3YoPL._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 18:48:17', '2020-07-14 18:48:17'),
(207, 'Jeans', 26, 6, 3, 'uploads/15947381175f0dc5c54e12291wdRivUeaL._AC_UL320_.jpg', 'uploads/15947381175f0dc5c54e2e491wdRivUeaL._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 18:48:37', '2020-07-14 18:48:37'),
(208, 'Jeans', 26, 6, 3, 'uploads/15947381365f0dc5d818a4191YV0-7zSjL._AC_UL320_.jpg', 'uploads/15947381365f0dc5d818b9791YV0-7zSjL._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 18:48:56', '2020-07-14 18:48:56'),
(209, 'Jeans', 26, 6, 3, 'uploads/15947381565f0dc5ece8be2713eyLisR+L._AC_UL320_.jpg', 'uploads/15947381565f0dc5ece8d21713eyLisR+L._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 18:49:16', '2020-07-14 18:49:16'),
(210, 'Jeans', 26, 6, 3, 'uploads/15947381765f0dc600a458bA1b-2-6mm3L._AC_UL320_.jpg', 'uploads/15947381765f0dc600a46d5A1b-2-6mm3L._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 18:49:36', '2020-07-14 18:49:36'),
(211, 'Jeans', 26, 6, 4, 'uploads/15947382515f0dc64bd954761-7zfpIUsL._AC_UL320_.jpg', 'uploads/15947382515f0dc64bd96ae61-7zfpIUsL._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 18:50:51', '2020-07-14 18:50:51'),
(212, 'Jeans', 26, 6, 4, 'uploads/15947382705f0dc65e0599c71BqjzN0evL._AC_UL320_.jpg', 'uploads/15947382705f0dc65e05af071BqjzN0evL._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 18:51:10', '2020-07-14 18:51:10'),
(213, 'Jeans', 26, 6, 4, 'uploads/15947382885f0dc670c5f1691O3ha3gHmL._AC_UL320_.jpg', 'uploads/15947382885f0dc670c60ba91O3ha3gHmL._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 18:51:28', '2020-07-14 18:51:28'),
(214, 'Jeans', 26, 6, 4, 'uploads/15947383085f0dc68408222810EX20zkML._AC_UL320_.jpg', 'uploads/15947383085f0dc6840842a810EX20zkML._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 18:51:48', '2020-07-14 18:51:48'),
(215, 'Jeans', 26, 6, 4, 'uploads/15947383255f0dc695dd520814nLedr+rL._AC_UL320_.jpg', 'uploads/15947383255f0dc695dd689814nLedr+rL._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 18:52:05', '2020-07-14 18:52:05'),
(216, 'Trouser', 26, 16, 2, 'uploads/15947513585f0df97ed74c009006245.jpg', 'uploads/15947513585f0df97ed77e509006245.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 18:53:46', '2020-07-14 22:29:18'),
(217, 'Trouser', 26, 16, 2, 'uploads/15947513735f0df98db5906174732-282x425-40s-inspired-pants.jpg', 'uploads/15947513735f0df98db5b3d174732-282x425-40s-inspired-pants.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 18:54:10', '2020-07-14 22:29:33'),
(218, 'Trouser', 26, 16, 2, 'uploads/15947515075f0dfa1309991Autumn-Streetwear-women-s-pants-embroidery-Casual-Cargo-Pants-Women-Joggers-Solid-Big-Pocket-Pants-High.jpg', 'uploads/15947515075f0dfa1309e56Autumn-Streetwear-women-s-pants-embroidery-Casual-Cargo-Pants-Women-Joggers-Solid-Big-Pocket-Pants-High.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 18:54:27', '2020-07-14 22:31:47'),
(219, 'Trouser', 26, 16, 2, 'uploads/15947514165f0df9b8d3c55cotton-linen-tapered-trousers.jpg', 'uploads/15947514165f0df9b8d3ea0cotton-linen-tapered-trousers.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 18:54:44', '2020-07-14 22:30:16'),
(220, 'Trouser', 26, 16, 2, 'uploads/15947385035f0dc74774a55717a02Y+5eL._AC_UL320_.jpg', 'uploads/15947385035f0dc74774b74717a02Y+5eL._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 18:55:03', '2020-07-14 18:55:03'),
(221, 'Trouser', 26, 16, 3, 'uploads/15947515265f0dfa2687d17HTB1Jx31w8mWBuNkSndVq6AsApXaw.jpg', 'uploads/15947515265f0dfa2687f7fHTB1Jx31w8mWBuNkSndVq6AsApXaw.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 18:56:59', '2020-07-14 22:32:06'),
(222, 'Trouser', 26, 16, 3, 'uploads/15947386315f0dc7c7e21cb91epKGrgX6L._AC_UL320_.jpg', 'uploads/15947386315f0dc7c7e230291epKGrgX6L._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 18:57:11', '2020-07-14 18:57:11'),
(223, 'Trouser', 26, 16, 3, 'uploads/15947386505f0dc7da64cdf91isrS9aCSL._AC_UL320_.jpg', 'uploads/15947386505f0dc7da64e1d91isrS9aCSL._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 18:57:30', '2020-07-14 18:57:30'),
(224, 'Trouser', 26, 16, 3, 'uploads/15947386685f0dc7ecc85ca810NzKID9AL._AC_UL320_.jpg', 'uploads/15947386685f0dc7ecc8713810NzKID9AL._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 18:57:48', '2020-07-14 18:57:48'),
(225, 'Trouser', 26, 16, 4, 'uploads/15947387375f0dc831bf25951dqfcvkhBL._AC_UL320_.jpg', 'uploads/15947387375f0dc831bf39e51dqfcvkhBL._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 18:58:57', '2020-07-14 18:58:57'),
(226, 'Trouser', 26, 16, 4, 'uploads/15947387595f0dc84710c8b81k-LmkKK-L._AC_UL320_.jpg', 'uploads/15947387595f0dc84710dbb81k-LmkKK-L._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 18:59:19', '2020-07-14 18:59:19'),
(227, 'Trouser', 26, 16, 4, 'uploads/15947387735f0dc8558ccf181rMtrSXbIL._AC_UL320_.jpg', 'uploads/15947387735f0dc8558ce3981rMtrSXbIL._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 18:59:33', '2020-07-14 18:59:33'),
(228, 'Trouser', 26, 16, 4, 'uploads/15947515795f0dfa5bec5c8-1117Wx1400H-440995535-black-MODEL.webp', 'uploads/15947515795f0dfa5bec915-1117Wx1400H-440995535-black-MODEL.webp', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 18:59:49', '2020-07-14 22:32:59'),
(229, 'Trouser', 26, 16, 4, 'uploads/15947388115f0dc87b0e19a61797bWbicL._AC_UL320_.jpg', 'uploads/15947388115f0dc87b0e2df61797bWbicL._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 19:00:11', '2020-07-14 19:00:11'),
(230, 'Safety Jacket', 26, 13, 2, 'uploads/15947390125f0dc944514ae15945849225f0b6f5ad64cdWhatsApp Image 2020-07-13 at 12.59.41 AM.jpeg', 'uploads/15947390125f0dc944516f815945849225f0b6f5ad64cdWhatsApp Image 2020-07-13 at 12.59.41 AM.jpeg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 19:03:32', '2020-07-14 19:03:32'),
(231, 'Fila Tank Top', 25, 8, 1, 'uploads/15947411385f0dd1925d45b71R3CJThHWL._AC_UL320_.jpg', 'uploads/15947411385f0dd1925d6f071R3CJThHWL._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-06-28 01:30:02', '2020-07-14 19:38:58'),
(232, 'Fila Tank Top', 25, 8, 1, 'uploads/15947411505f0dd19ea506991CgLDjASbL._AC_UL320_.jpg', 'uploads/15947411505f0dd19ea525d91CgLDjASbL._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-06-28 01:30:02', '2020-07-14 19:39:10'),
(233, 'Fila Tank Top', 25, 8, 1, 'uploads/15947411725f0dd1b434d2091o0RKe7UeL._AC_UL320_.jpg', 'uploads/15947411725f0dd1b434f2a91o0RKe7UeL._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-06-28 01:30:02', '2020-07-14 19:39:32'),
(234, 'Fila Tank Top', 25, 8, 1, 'uploads/15947412055f0dd1d5d76c981R7HjDmUML._AC_UL320_.jpg', 'uploads/15947412055f0dd1d5d78bb81R7HjDmUML._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-06-28 01:30:02', '2020-07-14 19:40:05'),
(235, 'Sweater', 27, 12, 3, 'uploads/15946457175f0c5cd502b0fWhatsApp Image 2020-07-13 at 11.27.31 AM.jpeg', 'uploads/15946457175f0c5cd502e42WhatsApp Image 2020-07-13 at 11.27.31 AM.jpeg', NULL, NULL, 'BACK NECK PRINT\r\n\r\nFABRIC8 SWING TAG\r\n\r\nTOFS MULTI-BUY SWING TAG\r\n\r\nCOST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .', 1, '2020-07-13 17:08:37', '2020-07-13 17:08:37'),
(236, 'Hoodie fleece Jacket', 26, 10, 3, 'uploads/15947420535f0dd52574bf971JLk9LFeHL._AC_UL320_.jpg', 'uploads/15947420535f0dd52574eee71JLk9LFeHL._AC_UL320_.jpg', 'Printed', '8,18', NULL, 1, '2020-07-13 17:08:37', '2020-08-25 19:10:08'),
(237, 'Looper print fleece Jacket', 26, 10, 3, 'uploads/15947420605f0dd52c4c8d291AdAnumu-L._AC_UL320_.jpg', 'uploads/15947420605f0dd52c4cad591AdAnumu-L._AC_UL320_.jpg', 'Printed', '8,18', NULL, 1, '2020-07-13 17:08:37', '2020-08-25 19:12:51'),
(238, 'Sweater', 27, 12, 3, 'uploads/15947420675f0dd533028a3919xIoPyDiL._AC_UL320_.jpg', 'uploads/15947420675f0dd53302b2a919xIoPyDiL._AC_UL320_.jpg', 'black,white,red,blue,green,orange', 'S,L,M,XL,XXL', '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-13 17:08:37', '2021-11-13 06:57:25'),
(239, 'Fleece long sleeve Jacket', 26, 20, 3, 'uploads/15947420755f0dd53bb62cbA1uEd8392QL._AC_UL320_.jpg', 'uploads/15947420755f0dd53bb649eA1uEd8392QL._AC_UL320_.jpg', NULL, '8,18', NULL, 1, '2020-07-13 17:08:37', '2020-08-25 19:16:46'),
(240, 'T-Shirt', 25, 4, 3, 'uploads/15947460185f0de4a239a6981dLD+6sU5L._AC_UL320_.jpg', 'uploads/15947460185f0de4a239bb981dLD+6sU5L._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 21:00:18', '2020-07-14 21:00:18'),
(241, 'T-Shirt', 25, 4, 3, 'uploads/15947461235f0de50bebb6e81FgKDndBsL._AC_UL320_.jpg', 'uploads/15947461235f0de50bebdbb81FgKDndBsL._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 21:00:18', '2020-07-14 21:02:03'),
(242, 'T-Shirt', 25, 4, 3, 'uploads/15947462365f0de57c459f9812lAsbEilL._AC_UL320_.jpg', 'uploads/15947462365f0de57c45c3c812lAsbEilL._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 21:00:18', '2020-07-14 21:03:56'),
(243, 'T-Shirt', 25, 4, 3, 'uploads/15947461565f0de52c87ca891a8ebjT8CL._AC_UL320_.jpg', 'uploads/15947461565f0de52c87e9691a8ebjT8CL._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 21:00:18', '2020-07-14 21:02:36'),
(244, 'T-Shirt', 25, 4, 3, 'uploads/15947462025f0de55ae491991A3QK4+hxL._AC_UL320_.jpg', 'uploads/15947462025f0de55ae4b8f91A3QK4+hxL._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 21:00:18', '2020-07-14 21:03:22'),
(245, 'Denim Short Pant For Women', 26, 6, 2, 'uploads/15947511195f0df88fe279e81VC8XZ64yL._AC_UL320_.jpg', 'uploads/15947511195f0df88fe2aa181VC8XZ64yL._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-06-28 01:39:01', '2020-07-14 22:25:19'),
(246, 'Denim Short Pant For Women', 26, 6, 2, 'uploads/15947511405f0df8a4dec0aA1cxm7QkxsL._AC_UL320_.jpg', 'uploads/15947511405f0df8a4dee4fA1cxm7QkxsL._AC_UL320_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-06-28 01:39:01', '2020-07-14 22:25:40'),
(247, 'Denim Short Pant For Women', 26, 6, 2, 'uploads/15947511575f0df8b5c5749HOT-Women-High-Waist-Pencil-Jeans-Stretchy-Ripped-Hole-Skinny-Casual-Denim-Pants.jpg', 'uploads/15947511575f0df8b5c5c2dHOT-Women-High-Waist-Pencil-Jeans-Stretchy-Ripped-Hole-Skinny-Casual-Denim-Pants.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-06-28 01:39:01', '2020-07-14 22:25:57'),
(248, 'Denim Short Pant For Women', 26, 6, 2, 'uploads/15947511815f0df8cd02a0dwomen-denim-shorts-500x500.jpg', 'uploads/15947511815f0df8cd02d0awomen-denim-shorts-500x500.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-06-28 01:39:01', '2020-07-14 22:26:21'),
(249, 'Towel', 26, 11, 5, 'uploads/15947516645f0dfab0c9d6d1510511874.jpg', 'uploads/15947516645f0dfab0c9f551510511874.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 22:34:24', '2020-07-14 22:34:24'),
(250, 'Towel', 26, 11, 5, 'uploads/15947516915f0dfacbd79e091HKu+EnU4L._AC_SL1500_.jpg', 'uploads/15947516915f0dfacbd7e0791HKu+EnU4L._AC_SL1500_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 22:34:51', '2020-07-14 22:34:51'),
(251, 'Handkerchief', 26, 11, 5, 'uploads/15947517725f0dfb1c6a31451hZV-+CFSL._AC_.jpg', 'uploads/15947517725f0dfb1c6a4a251hZV-+CFSL._AC_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 22:36:12', '2020-07-14 22:36:12'),
(252, 'Handkerchief', 26, 11, 5, 'uploads/15947517985f0dfb36840ff8c95f2242741cf165ee958e326c81977.jpg', 'uploads/15947517985f0dfb36842a98c95f2242741cf165ee958e326c81977.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 22:36:38', '2020-07-14 22:36:38'),
(253, 'Blazer', 26, 10, 3, 'uploads/15947533335f0e01354c2abboys-royal-blue-blazer-500x500.jpg', 'uploads/15947533335f0e01354c41aboys-royal-blue-blazer-500x500.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 23:02:13', '2020-07-14 23:02:13'),
(254, 'Blazer', 26, 10, 2, 'uploads/15947533795f0e0163ecae3women-s-blazer-500x500.jpg', 'uploads/15947533795f0e0163ecc91women-s-blazer-500x500.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 23:02:59', '2020-07-14 23:02:59'),
(255, 'Blazer', 26, 10, 2, 'uploads/15947534095f0e01811fe1361HTRgM9O+L._AC_UY1000_.jpg', 'uploads/15947534095f0e01811fff161HTRgM9O+L._AC_UY1000_.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 23:03:29', '2020-07-14 23:03:29'),
(256, 'Blazer', 26, 10, 2, 'uploads/15947534395f0e019f4fc66goods_08_409867.jpg', 'uploads/15947534395f0e019f504f3goods_08_409867.jpg', NULL, NULL, '<p>BACK NECK PRINT FABRIC8 SWING TAG TOFS MULTI-BUY SWING TAG COST REQUIRED DELIVERED ON A HANGER - HALF FOLD IN CARTON .</p>', 1, '2020-07-14 23:03:59', '2020-07-14 23:03:59'),
(257, 'test product', 25, 4, 1, 'uploads/1631535439613f414fc6e9a01.jpg', 'uploads/1631535439613f414fc77af01-1.jpg', 'black,white,red,blue,green,orange', 'S,L,M,XL,XXL', '<p>Duis autem veiudolorn hendrerit vulputate velit esse molestie. consequat, vel illum dolore eu feugiat nulla facilisis at vereros accumsan etiusto dignissim:</p>\r\n<ul class=\"list2 darklinks\">\r\n<li><a href=\"#\">Lorem ipsum dolor sit amet</a></li>\r\n<li><a href=\"#\">Sint animi non ut sed</a></li>\r\n<li><a href=\"#\">Eaque blanditiis nemo</a></li>\r\n<li><a href=\"#\">Amet, consectetur adipisicing</a></li>\r\n<li><a href=\"#\">Blanditiis nemo quaerat</a></li>\r\n</ul>\r\n<div class=\"well\"><strong class=\"highlight\">Warning!</strong>&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</div>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 1, '2021-09-13 06:17:19', '2021-09-13 06:17:19');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(4, 'Basic Knit', '2020-06-25 06:07:25', '2020-06-28 00:49:19'),
(5, 'Socks', '2020-06-25 06:07:35', '2020-06-28 00:49:28'),
(6, 'Denim', '2020-06-25 06:07:42', '2020-06-25 06:07:42'),
(7, 'Shirt', NULL, NULL),
(8, 'Underware', NULL, NULL),
(9, 'Non-Denim', NULL, NULL),
(10, 'Jacket', NULL, NULL),
(11, 'Home Textile', NULL, NULL),
(12, 'Sweater', NULL, '2020-07-14 15:20:52'),
(13, 'Work Wear', '2020-07-09 10:42:34', '2020-07-09 10:42:34'),
(14, 'Swimming Wear', '2020-07-09 10:42:43', '2020-07-09 10:42:43'),
(15, 'Lingerie', '2020-07-13 22:32:34', '2020-07-13 22:32:34'),
(16, 'Trouser', '2020-07-14 18:06:08', '2020-07-14 18:06:08'),
(17, 'Vest', '2020-08-25 15:58:10', '2020-08-25 15:58:10'),
(18, 'Formal Wear', '2020-08-25 16:02:23', '2020-08-25 16:02:23'),
(19, 'Basic Polo', '2020-08-25 16:22:11', '2020-08-25 16:22:11'),
(20, 'Knit Jacket', '2020-08-25 16:22:24', '2020-08-25 16:22:24'),
(21, 'Men\'s & Boys padded jacket', '2020-08-25 16:25:41', '2020-08-25 16:25:41');

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

--
-- Dumping data for table `product_divisions`
--

INSERT INTO `product_divisions` (`id`, `division_name`, `image`, `created_at`, `updated_at`) VALUES
(25, 'Knit', 'uploads/16012903605f71c0788eceastanley-stella-2-1024x768-1.jpg', NULL, '2020-09-28 14:52:40'),
(26, 'Woven', 'uploads/15940414515f03246b91ce6woven.jpg', NULL, '2020-07-06 07:17:31'),
(27, 'Sweater', 'uploads/15940414595f03247365f25sweater.jpg', NULL, '2020-07-06 07:17:39');

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
(1, 'Men\'s', NULL, '2020-07-14 17:59:55'),
(2, 'Women\'s', NULL, '2020-07-14 18:00:03'),
(3, 'Boy\'s', NULL, '2020-07-14 18:00:26'),
(4, 'Girl\'s', NULL, '2020-07-14 18:00:34'),
(5, 'Home Textile', '2020-07-13 16:23:01', '2020-07-14 18:12:14'),
(6, 'Men\'s & Boy\'s', '2020-07-14 15:21:43', '2020-07-14 18:00:54'),
(7, 'Women\'s & Girl\'s', '2020-07-14 15:21:59', '2020-07-14 18:01:11');

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
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `heading` varchar(191) NOT NULL,
  `year_1st` varchar(191) NOT NULL,
  `year_2nd` varchar(191) NOT NULL,
  `span_text` varchar(191) NOT NULL,
  `image` varchar(255) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `heading`, `year_1st`, `year_2nd`, `span_text`, `image`, `updated_at`, `created_at`) VALUES
(24, 'Men Textile', '2k', '21', 'Summer Collection', 'frontend/img/slides/163168614061418dfc22ed1pexels-photo-845434.jpeg', '2021-09-15 00:09:00', '2021-09-15 00:09:00'),
(25, 'Women Textile', '2k', '21', 'Summer Collection', 'frontend/img/slides/163168619761418e35cccfdpexels-photo-3757008.jpeg', '2021-09-15 00:09:57', '2021-09-15 00:09:57'),
(27, 'Kinds Textile', '2k', '21', 'Summer Collection', 'frontend/img/slides/16316875046141935047cf1pexels-photo-6437713.jpeg', '2021-09-15 00:31:44', '2021-09-15 00:31:44');

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
(1, 'elegrand', 'admin@elegrand.com', '$2y$10$pW05729wRaf3gJVGII5sBOkXbTx.8nFUXqQOzdWFJbHfN1hX90HX.', 1, NULL, '2022-07-13 06:15:38'),
(2, 'jennifer72', 'admin@mmclothingbd.com', '$2y$10$c1I2jyqTcEI.b.KTs0FBmesuUwePqhHl//TPMB7khsfFzmfHXSQGC', 1, '2020-07-02 13:06:40', '2021-04-28 07:59:29');

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
(1, 'Elegrand', 'uploads/16373999686198bda051380aaa-05.png', '+880 1717-804604', 'elegrandbd@gmail.com, info@elegrandbd.com', 'House#297, Avenue#03, Road#04, Mirpur DOHS , Dhaka - 1216, Bangladesh', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=258;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `product_divisions`
--
ALTER TABLE `product_divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `product_genders`
--
ALTER TABLE `product_genders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

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
