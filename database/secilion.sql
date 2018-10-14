-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2018 at 10:47 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `secilion`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci,
  `single_photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` text COLLATE utf8mb4_unicode_ci,
  `link` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `title`, `body`, `single_photo`, `type`, `link`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'بيلابل', 'بلال', '1785250792Dfhgfhgf.png', 'بلالبا', 'لبابلا', '2018-09-27 09:38:59', '2018-10-03 09:19:13', NULL),
(10, 'بيلابل', 'بلال', '1785250792Dfhgfhgf.png', 'بلالبا', 'لبابلا', '2018-09-27 09:38:59', '2018-10-03 09:19:13', NULL),
(11, 'بيلابل', 'بلال', '1785250792Dfhgfhgf.png', 'بلالبا', 'لبابلا', '2018-09-27 09:38:59', '2018-10-03 09:19:13', NULL),
(12, 'بيلابل', 'بلال', '1785250792Dfhgfhgf.png', 'بلالبا', 'لبابلا', '2018-09-27 09:38:59', '2018-10-03 09:19:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_10_02_115606_create_services_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` int(10) UNSIGNED NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_id`, `notifiable_type`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('24ef7a4e-4d87-4c1d-bc61-ff2c1edc4ca4', 'App\\Notifications\\figoname', 2, 'App\\User', '{\"data\":\"add new SERVICE \"}', NULL, '2018-09-18 10:46:39', '2018-09-18 10:46:39'),
('3a710e2c-2bc8-4905-afce-31933d85c7df', 'App\\Notifications\\figoname', 1, 'App\\User', '{\"data\":\"add new SERVICE \"}', '2018-09-27 10:24:41', '2018-09-27 10:24:41', '2018-09-27 10:24:41'),
('4040f7d6-0cd9-47a3-bb79-49a35f452214', 'App\\Notifications\\figoname', 2, 'App\\User', '{\"data\":\"add new SERVICE \"}', NULL, '2018-09-18 10:21:40', '2018-09-18 10:21:40'),
('4066da32-3a3d-4d7a-95e2-853bf58fd01d', 'App\\Notifications\\figoname', 2, 'App\\User', '{\"data\":\"add new SERVICE \"}', NULL, '2018-09-27 10:24:41', '2018-09-27 10:24:41'),
('7ee5fb05-fe73-4aab-97db-ac9b657137a8', 'App\\Notifications\\figoname', 2, 'App\\User', '{\"data\":\"go naw \"}', NULL, '2018-09-18 09:49:43', '2018-09-18 09:49:43'),
('7f398acb-3fe3-41ee-9d0d-d0f479776899', 'App\\Notifications\\figoname', 1, 'App\\User', '{\"data\":\"go naw \"}', '2018-09-18 10:46:23', '2018-09-18 09:49:42', '2018-09-18 10:46:23'),
('987bee22-32f7-4fcf-8c00-7ba3d840d303', 'App\\Notifications\\figoname', 1, 'App\\User', '{\"data\":\"add new SERVICE \"}', '2018-09-18 10:50:07', '2018-09-18 10:50:07', '2018-09-18 10:50:07'),
('e5bdc0a9-58c9-4d58-9da3-8bbe63462427', 'App\\Notifications\\figoname', 1, 'App\\User', '{\"data\":\"add new SERVICE \"}', '2018-09-18 10:46:39', '2018-09-18 10:46:39', '2018-09-18 10:46:39'),
('e6e2db0d-8a0b-4db9-9719-af80c6e178db', 'App\\Notifications\\figoname', 2, 'App\\User', '{\"data\":\"add new SERVICE \"}', NULL, '2018-09-18 10:50:07', '2018-09-18 10:50:07'),
('f4fb60be-ba56-47cc-8baa-057b8184183c', 'App\\Notifications\\figoname', 1, 'App\\User', '{\"data\":\"add new SERVICE \"}', '2018-09-18 10:46:23', '2018-09-18 10:21:40', '2018-09-18 10:46:23');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `quantity` int(199) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `quantity`, `title`, `body`, `email`, `phone`, `status`, `product`, `created_at`, `updated_at`, `deleted_at`) VALUES
(19, NULL, 'VCBCV', 'BCVBVCB', NULL, 'CVBVC', NULL, NULL, '2018-09-27 12:24:09', '2018-09-27 12:24:09', NULL),
(20, NULL, 'dasfdsf', 'wsdasd', 'nwhite@yahoo.com', '1091357842', NULL, NULL, '2018-10-04 10:08:00', '2018-10-04 10:08:00', NULL),
(21, NULL, '111', '11111', 'figoashraf@gmail.com', '11111', NULL, NULL, '2018-10-04 10:08:26', '2018-10-04 10:08:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `title`, `body`, `email`, `phone`, `product`, `quantity`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'sdfgds', 'gfd gsdf gds ', 'fdgfd', 'dfg', 'dfg', 'dfgdf', 'fdgdf', '2018-09-23 06:57:41', '2018-09-23 06:57:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `last_updated_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `image`, `icon`, `status`, `created_by`, `last_updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, '1531579074images.jpg', '1741645941Dfhgfhgf.png', 1, NULL, NULL, '2018-10-02 14:43:45', '2018-10-03 09:11:28', '2018-10-03 09:11:28'),
(8, '1827121066slide-4.jpg', 'logo.png', 1, NULL, NULL, '2018-10-03 11:00:44', '2018-10-07 11:47:45', NULL),
(9, '1957537317banner.jpg', 'logo.png', 1, NULL, NULL, '2018-10-04 08:23:17', '2018-10-04 06:23:17', NULL),
(10, '217115820slide-3.jpg', 'logo.png', 1, NULL, NULL, '2018-10-04 08:23:27', '2018-10-04 06:23:27', NULL),
(11, '774458053s3.jpg', 'logo.png', 1, NULL, NULL, '2018-10-04 08:24:37', '2018-10-04 06:24:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `site_stings`
--

CREATE TABLE `site_stings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_stings`
--

INSERT INTO `site_stings` (`id`, `key`, `value`, `lang`, `created_at`, `updated_at`, `deleted_at`) VALUES
(27, 'Web site name', 'سيزليون\r\n', 'ar', '2018-04-05 15:17:11', '2018-09-17 11:11:44', NULL),
(31, 'phone', '0966532182670', 'ar', '2018-04-05 15:17:11', '2018-08-16 09:57:17', NULL),
(32, 'Mail', ' info@secelion.com', 'ar', '2018-04-05 15:17:11', '2018-04-05 15:17:11', NULL),
(33, 'facebook', 'https://facebook.com', 'ar', '2018-04-05 15:17:11', '2018-09-27 10:23:41', NULL),
(34, 'About Us', ' Secelion Offers An Integrated Approach Of Engineering Consultancy In Terms Of Solutions, Innovation And Creative Capabilities To Reality \r\n- We Are Fully Aware That Sisalon Will Make Your Surroundings Of Open Space For Me With Integrated Designs In Every Detail', 'en', '2018-04-05 15:17:11', '2018-04-05 15:17:11', NULL),
(35, 'mop', '0105485151', 'ar', '2018-04-05 15:17:12', '2018-09-27 10:23:34', NULL),
(37, 'Location', 'Musa Ibn Nussair St, As Sulimaniyah, Riyad\r\n', 'en', '2018-04-05 15:17:12', '2018-04-05 15:17:12', NULL),
(54, 'twitter', 'https://www.twitter.com/', 'ar', '2018-04-05 15:17:11', '2018-04-05 15:17:11', NULL),
(55, 'linkedin', 'https://www.linkedin.com', 'ar', '2018-04-05 15:17:11', '2018-07-29 10:22:04', NULL),
(64, 'google_maps', ' <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3624.5765010214996!2d46.68637721499975!3d24.70708088412651!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f032192766f21%3A0x1e8412b08e6920c0!2sDour+for+business+ladies!5e0!3m2!1sen!2seg!4v1533630838104\" width=\"100%\" height=\"500\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>\r\n', 'ar', '2018-04-05 15:17:11', '2018-09-23 09:24:11', NULL),
(65, 'instagram', 'https://www.instagram.com', 'ar', '2018-04-05 15:17:11', '2018-07-29 10:22:04', NULL),
(69, 'Mission', 'Following Global Engineering Standards And Understanding The Customer\'s Need To See And Integrate Them With Expertise To Achieve The Desired Expectations, \r\nCustomer Satisfaction Is The Priority Of The Team', 'en', '2018-04-05 15:17:11', '2018-07-29 10:22:04', NULL),
(74, 'What', '  \r\nDesigns and project management and supervision of the site to turnkey', 'en', '2018-04-05 15:17:12', '2018-04-05 15:17:12', NULL),
(75, 'Design', '  \r\nPhasellus iaculis sapien in tellus gravida, a placerat lacus elementum. Nulla vitae lacus nec elit mollis pretium. Sed sed nunc lectus. Integer vehicula elit eget dignis simcon. gueint Aliquam sed ultricies tortor. Curabitur ut odio vestibulum, initse vehicula velit, sodales purus. Nunc id tellus neque, Quisque. quis elit mollisinect pretium. Sed sed nunc lectus tellus gravida gueint ipsum nec.\r\n\r\n', 'en', '2018-04-05 15:17:12', '2018-04-05 15:17:12', NULL),
(76, 'Web site name', 'Secilion', 'en', '2018-04-05 15:17:11', '2018-09-17 11:11:44', NULL),
(77, 'phone', '0966532182670', 'en', '2018-04-05 15:17:11', '2018-08-16 09:57:17', NULL),
(78, 'Mail', ' info@secelion.com', 'en', '2018-04-05 15:17:11', '2018-04-05 15:17:11', NULL),
(79, 'facebook', 'https://facebook.com', 'en', '2018-04-05 15:17:11', '2018-09-27 10:23:41', NULL),
(80, 'About Us', 'سيزليون تقدم نهج متكامل من الاستشارات الهندسية يتمثل في الحلول و الابتكار و القدارات الإبداعية إلى واقع ملموس \r\n- ندرك تماماً ان سيزليون تجعل المحيط بك من مساحات مفتوحة لى تصاميم متكاملة بكل تفاصيلها الدقيقه', 'ar', '2018-04-05 15:17:11', '2018-04-05 15:17:11', NULL),
(81, 'mop', '0105485151', 'en', '2018-04-05 15:17:12', '2018-09-27 10:23:34', NULL),
(82, 'Location', 'شارع موسى بن نصير ، السليمانية ، الرياض\r\n', 'ar', '2018-04-05 15:17:12', '2018-04-05 15:17:12', NULL),
(84, 'twitter', 'https://www.twitter.com/', 'en', '2018-04-05 15:17:11', '2018-04-05 15:17:11', NULL),
(85, 'linkedin', 'https://www.linkedin.com', 'en', '2018-04-05 15:17:11', '2018-07-29 10:22:04', NULL),
(86, 'google_maps', ' <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3624.5765010214996!2d46.68637721499975!3d24.70708088412651!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f032192766f21%3A0x1e8412b08e6920c0!2sDour+for+business+ladies!5e0!3m2!1sen!2seg!4v1533630838104\" width=\"100%\" height=\"500\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>\r\n', 'en', '2018-04-05 15:17:11', '2018-09-23 09:24:11', NULL),
(87, 'instagram', 'https://www.instagram.com', 'en', '2018-04-05 15:17:11', '2018-07-29 10:22:04', NULL),
(88, 'Mission', 'اتباع معايير هندسية عالمية وفهم احتياج رؤية العميل و دمجها مع خبرات لتحقيق توقعات المطلوبة ، \r\nرضى العميل اولويه لدى فريق العمل', 'ar', '2018-04-05 15:17:11', '2018-07-29 10:22:04', NULL),
(89, 'What', 'تصاميم و ادارة مشاريع و إشراف على الموقع الى تسليم المفتاح ', 'ar', '2018-04-05 15:17:12', '2018-04-05 15:17:12', NULL),
(90, 'Design', '  \r\nلوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات . ديواس أيوتي أريري دولار إن ريبريهينديرأيت فوليوبتاتي فيلايت أيسسي كايلليوم دولار أيو فيجايت نيولا باراياتيور\r\n\r\n\r\n', 'ar', '2018-04-05 15:17:12', '2018-04-05 15:17:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `lang` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `single_photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `cat_id`, `lang`, `single_photo`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, 5, 'ar', '1991171399banner.jpg', 'يبالال لاغفلا', '2018-04-05 13:23:11', '2018-09-26 12:59:02', '2018-09-26 12:59:02'),
(6, 1, 'en', '720186103banner2.jpg', 'frdhd', '2018-04-05 13:23:12', '2018-10-03 10:26:46', NULL),
(11, 5, 'en', '1880572018banner1.jpg', 'Mr. Archibald Anderson DVM', '2018-04-05 13:23:03', '2018-10-03 10:24:54', NULL),
(22, NULL, NULL, '1373125946banner.jpg', 'fre', '2018-09-26 12:52:35', '2018-10-03 09:52:48', '2018-10-03 09:52:48'),
(23, NULL, NULL, '1358160170slide-2.jpg', 'لبتا', '2018-09-27 10:10:20', '2018-10-03 09:52:44', '2018-10-03 09:52:44'),
(24, NULL, NULL, '990404404MT-5856_23.jpg', 'dfgsdf', '2018-10-03 09:52:40', '2018-10-03 10:30:37', '2018-10-03 10:30:37'),
(25, NULL, NULL, '1590627989slider-1.jpg', 'fguty', '2018-10-03 10:56:39', '2018-10-03 10:56:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Joelle Bosco', 'nwhite@yahoo.com', '$2y$10$HqCVKUd5C6jWfdQmZQSix.glqiEl8a2r3xLBmwlHaOrg4b1fRKUKK', 'ySy3cfL83pfdNrtxLhTuePT5SmfoNWofb4rx7PRyvyLeg5ooy8Vbcahktpq0', '2018-04-05 13:23:17', '2018-04-05 13:23:17'),
(2, 'Sid Streich', 'estel.gerhold@gmail.com', '$2y$10$JmylC8mZvFoWi4N0BZTlTOSi5gCwxLNHic.A6EnzYGsNxcKTDqRq.', NULL, '2018-04-05 13:23:17', '2018-04-05 13:23:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_id_notifiable_type_index` (`notifiable_id`,`notifiable_type`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_stings`
--
ALTER TABLE `site_stings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `site_stings`
--
ALTER TABLE `site_stings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
