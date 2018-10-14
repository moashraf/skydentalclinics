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
-- Database: `secilion_en`
--

-- --------------------------------------------------------

--
-- Table structure for table `services_en`
--

CREATE TABLE `services_en` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_services` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp(4) NULL DEFAULT NULL,
  `last_updated_by` int(191) DEFAULT NULL,
  `created_by` int(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services_en`
--

INSERT INTO `services_en` (`id`, `status`, `title`, `id_services`, `description`, `slug`, `created_at`, `updated_at`, `deleted_at`, `last_updated_by`, `created_by`) VALUES
(2, NULL, '5', 6, '6', '4', '2018-10-02 14:43:45', '2018-10-03 09:11:28', '2018-10-03 09:11:28.0000', NULL, NULL),
(3, NULL, 'grdfg', 8, 'dfg', 'dfg', '2018-10-03 11:00:44', '2018-10-03 09:00:44', NULL, NULL, NULL),
(4, NULL, 'hfgh', 9, 'fgh', 'hfg', '2018-10-04 08:23:17', '2018-10-04 06:23:17', NULL, NULL, NULL),
(5, NULL, 'fgh', 10, 'fgh', 'gfgh', '2018-10-04 08:23:27', '2018-10-04 06:23:27', NULL, NULL, NULL),
(6, NULL, 'gdf', 11, 'gdf', 'gdf', '2018-10-04 08:24:37', '2018-10-04 06:24:37', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `services_en`
--
ALTER TABLE `services_en`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `services_en`
--
ALTER TABLE `services_en`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
