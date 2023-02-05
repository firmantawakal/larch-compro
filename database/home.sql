-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 05, 2023 at 05:23 PM
-- Server version: 10.10.2-MariaDB
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `larch`
--

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section1_title` varchar(255) DEFAULT NULL,
  `section1_subtitle1` varchar(255) DEFAULT NULL,
  `section1_content1` text DEFAULT NULL,
  `section1_subtitle2` varchar(255) DEFAULT NULL,
  `section1_content2` text DEFAULT NULL,
  `section1_image` text DEFAULT NULL,
  `section2_title1` varchar(255) DEFAULT NULL,
  `section2_title2` varchar(255) DEFAULT NULL,
  `section2_subtitle1` varchar(255) DEFAULT NULL,
  `section2_content1` text DEFAULT NULL,
  `section2_image1` text DEFAULT NULL,
  `section2_subtitle2` varchar(255) DEFAULT NULL,
  `section2_content2` text DEFAULT NULL,
  `section2_image2` text DEFAULT NULL,
  `section3_title` varchar(255) DEFAULT NULL,
  `section3_image` text DEFAULT NULL,
  `section3_content` text DEFAULT NULL,
  `section4_title1` varchar(255) DEFAULT NULL,
  `section4_title2` varchar(255) DEFAULT NULL,
  `section4_image` text DEFAULT NULL,
  `section4_list1` varchar(255) DEFAULT NULL,
  `section4_list2` varchar(255) DEFAULT NULL,
  `section4_list3` varchar(255) DEFAULT NULL,
  `section5_title1` varchar(255) DEFAULT NULL,
  `section5_title2` varchar(255) DEFAULT NULL,
  `section5_image` text DEFAULT NULL,
  `section5_list1` varchar(255) DEFAULT NULL,
  `section5_list2` varchar(255) DEFAULT NULL,
  `section5_list3` varchar(255) DEFAULT NULL,
  `section6_title1` varchar(255) DEFAULT NULL,
  `section6_title2` varchar(255) DEFAULT NULL,
  `section6_image` text DEFAULT NULL,
  `section6_list1` varchar(255) DEFAULT NULL,
  `section6_list2` varchar(255) DEFAULT NULL,
  `section6_list3` varchar(255) DEFAULT NULL,
  `section7_title1` varchar(255) DEFAULT NULL,
  `section7_title2` varchar(255) DEFAULT NULL,
  `section7_subtitle1` varchar(255) DEFAULT NULL,
  `section7_list1_a` text DEFAULT NULL,
  `section7_list1_b` text DEFAULT NULL,
  `section7_list1_c` text DEFAULT NULL,
  `section7_subtitle2` varchar(255) DEFAULT NULL,
  `section7_list2_a` text DEFAULT NULL,
  `section7_list2_b` text DEFAULT NULL,
  `section7_list2_c` text DEFAULT NULL,
  `section7_subtitle3` varchar(255) DEFAULT NULL,
  `section7_list3_a` text DEFAULT NULL,
  `section7_list3_b` text DEFAULT NULL,
  `section7_list3_c` text DEFAULT NULL,
  `section8_title1` varchar(255) DEFAULT NULL,
  `section8_title2` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `section1_title`, `section1_subtitle1`, `section1_content1`, `section1_subtitle2`, `section1_content2`, `section1_image`, `section2_title1`, `section2_title2`, `section2_subtitle1`, `section2_content1`, `section2_image1`, `section2_subtitle2`, `section2_content2`, `section2_image2`, `section3_title`, `section3_image`, `section3_content`, `section4_title1`, `section4_title2`, `section4_image`, `section4_list1`, `section4_list2`, `section4_list3`, `section5_title1`, `section5_title2`, `section5_image`, `section5_list1`, `section5_list2`, `section5_list3`, `section6_title1`, `section6_title2`, `section6_image`, `section6_list1`, `section6_list2`, `section6_list3`, `section7_title1`, `section7_title2`, `section7_subtitle1`, `section7_list1_a`, `section7_list1_b`, `section7_list1_c`, `section7_subtitle2`, `section7_list2_a`, `section7_list2_b`, `section7_list2_c`, `section7_subtitle3`, `section7_list3_a`, `section7_list3_b`, `section7_list3_c`, `section8_title1`, `section8_title2`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'asdadasadsa', 'sdsd', 'asdasda', 'sss', 'ssdsd', NULL, 'asda', 'adad', 'cc', 'xxasda', NULL, 'cc', 'xxasda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-05 10:21:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
