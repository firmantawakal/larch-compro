-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 12, 2023 at 12:46 AM
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
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'Sebagai kontraktor handal kami hadir untuk mewujudkan hunian terbaik anda', 'Larch for business', 'Travelling assistance indulgence unpleasing. Not thoughts all exercise blessing. Indulgence way everything', 'Larch for personal', 'Travelling assistance indulgence unpleasing. Not thoughts all exercise blessing. Indulgence way everything', '20230208084851-7525817111.png', 'Solusi hunian untuk anda', 'Kami memiliki layanan Arsitektur dan Kontraktor', 'For multiple small & medium projects', 'Favourite tolerably engrossed. Truth short folly court why she their balls. Excellence put unaffected', '20230208084851-3843015390.png', 'For large & complex site operations', 'Favourite tolerably engrossed. Truth short folly court why she their balls. Excellence put unaffected', '20230208084851-8199345083.png', 'Kami selalu flexible dan tepat waktu dalam pembangunan', '20230208085205-8709710410.png', 'Pntroduced day her apartments. Fully as taste he mr do smile abode every. Luckily offered article led lasting country minutes nor old. Happen people things oh is oppose up parish effect. Law handsome old outweigh humoured far appetite.', 'Stay Compliant', 'Tetap dalam jalur dan selalu update dengan progress', '20230208085205-4973336829.png', 'Digitise and automate field processes to enforce compliance', 'Reduce compliance management costs by 80%', 'Protect your company legally and contractually', 'Don’t waste your dataaa', 'Kami selalu aware dengan data yang anda berikan pada kami', '20230208085205-5970890001.png', 'Digitise and automate field processes to enforce compliance', 'Reduce compliance management costs by 80%', 'Protect your company legally and contractually', 'Track Progress', 'Selalu awasi pembangunan dengan Tracking progress', '20230208085205-5897695368.png', 'Digitise and automate field processes to enforce compliance', 'Reduce compliance management costs by 80%', 'Protect your company legally and contractually', 'Construction field management software purpose-built for your business', 'For multiple small & medium projects', 'For multiple small & medium projects', 'Project Progress & KPIs', 'HSEQ Assurance', 'Workforce & Equipment', 'For multiple small & medium projects', 'Client Handovers', 'Contractors’ Management', 'Compliance Enforcement', 'For multiple small & medium projects', 'Project Progress', 'Site Coordination', 'Contractors’ Management', 'Tertarik bekerjasama dengan kami?', 'Segera hubungi kontak dibawah ini', NULL, NULL, '2023-02-08 10:17:56');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pembangunan`
--

CREATE TABLE `jenis_pembangunan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_jenis` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis_pembangunan`
--

INSERT INTO `jenis_pembangunan` (`id`, `nama_jenis`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rumah Pribadi', NULL, NULL, '2023-02-07 15:58:37'),
(3, 'Kantor', NULL, '2023-02-07 15:58:51', '2023-02-07 15:58:51'),
(4, 'Apartemen', NULL, '2023-02-07 15:59:08', '2023-02-07 15:59:08');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_02_02_000448_visitor', 2),
(6, '2023_02_05_085117_home', 3),
(7, '2023_02_07_153854_jenis_pembangunan', 4),
(8, '2023_02_08_094339_setting', 5),
(9, '2023_02_10_011311_section2', 6),
(10, '2023_02_10_011458_section7', 6),
(11, '2023_02_11_074746_section1', 7),
(12, '2023_02_11_085154_section1', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section` int(10) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `section`, `subtitle`, `content`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 1, 'Larch for business', 'Travelling assistance indulgence unpleasing. Not thoughts all exercise blessing. Indulgence way everything', '20230211100329-8510376992.png', NULL, '2023-02-11 03:03:29', '2023-02-11 03:03:29'),
(3, 1, 'Larch for personal', 'Travelling assistance indulgence unpleasing. Not thoughts all exercise blessing. Indulgence way everything', NULL, NULL, '2023-02-11 03:03:43', '2023-02-11 03:03:43'),
(6, 2, 'ssss', 'sssee', NULL, NULL, '2023-02-11 04:59:47', '2023-02-11 05:06:01'),
(7, 2, 'adasdadad', 'asdadsaada', NULL, NULL, '2023-02-11 05:06:11', '2023-02-11 05:06:11'),
(8, 7, 'wewewee', 'ewwewewew', '20230211120814-2794437930.jpeg', NULL, '2023-02-11 05:08:14', '2023-02-11 05:08:14');

-- --------------------------------------------------------

--
-- Table structure for table `section2`
--

CREATE TABLE `section2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section2`
--

INSERT INTO `section2` (`id`, `subtitle`, `content`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, '1www', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. test', '20230211065623-4589027591.png', NULL, '2023-02-09 19:16:21', '2023-02-11 00:17:59'),
(6, 'eeeee', 'tertrertetesfssf sdfdsfssfs sfsfsf www', '20230210034032-9714746283.png', NULL, '2023-02-09 19:54:25', '2023-02-09 20:40:32'),
(7, 'asdadas', 'asdaasda adsada aasdada asdadad', '20230210034430-3929506172.png', NULL, '2023-02-09 20:44:30', '2023-02-09 20:44:30'),
(8, 'qwewqeweqewq', 'qweqewqeqeqeq', '20230210035933-2811926391.png', NULL, '2023-02-09 20:59:33', '2023-02-09 20:59:33');

-- --------------------------------------------------------

--
-- Table structure for table `section4`
--

CREATE TABLE `section4` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `subtitle2` varchar(200) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section4`
--

INSERT INTO `section4` (`id`, `subtitle`, `subtitle2`, `content`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Don’t waste your dataaa', 'Kami selalu aware dengan data yang anda berikan pada kami', 'Digitise and automate field processes to enforce compliance\r\nReduce compliance management costs by 80%\r\nProtect your company legally and contractually', '20230211133622-9282340105.jpeg', NULL, '2023-02-10 03:25:06', '2023-02-11 06:36:22'),
(3, 'Stay Compliant', 'Tetap dalam jalur dan selalu update dengan progress', 'Digitise and automate field processes to enforce compliance\r\nReduce compliance management costs by 80%\r\nProtect your company legally and contractually', '20230211133547-9910466775.jpeg', NULL, '2023-02-10 03:54:33', '2023-02-11 06:35:47'),
(5, 'Track Progress', 'Selalu awasi pembangunan dengan Tracking progress', 'Digitise and automate field processes to enforce compliance\r\nReduce compliance management costs by 80%\r\nProtect your company legally and contractually', '20230211133653-3564858840.jpeg', NULL, '2023-02-10 03:54:55', '2023-02-11 06:36:53');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `whatsapp`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '6282234567', NULL, NULL, '2023-02-08 02:58:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `level`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin1', 'admin@gmail.com', NULL, '$2y$10$iQQk3/iNllkV4CEs1d9/YePlwgxAkMGbMxc.1mZXQ.8ixHOTGtUMC', 'admin', 1, NULL, '2023-01-28 01:58:42', '2023-02-01 16:54:57'),
(2, 'qweqqqqqqavv', 'admin@gmail.comw2www', NULL, '$2y$10$poM4O.oZ3a2Nqn1Q7kS5MeQlXd40Fytw1YMIW.voeruVJ4fpTYZwK', 'admin', 0, NULL, '2023-02-08 01:01:27', '2023-02-08 01:02:14');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `kota` text DEFAULT NULL,
  `no_telp` varchar(100) NOT NULL,
  `jenis_pembangunan` varchar(255) DEFAULT NULL,
  `issame_location` tinyint(1) NOT NULL DEFAULT 1,
  `alamat_lokasi` text DEFAULT NULL,
  `kota_lokasi` text DEFAULT NULL,
  `luas_tanah1` int(11) DEFAULT NULL,
  `luas_tanah2` int(11) DEFAULT NULL,
  `file` text DEFAULT NULL,
  `status_register` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0: pending, 1: diterima, 2:ditolak',
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `nama`, `email`, `password`, `alamat`, `kota`, `no_telp`, `jenis_pembangunan`, `issame_location`, `alamat_lokasi`, `kota_lokasi`, `luas_tanah1`, `luas_tanah2`, `file`, `status_register`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'test', NULL, NULL, 'test', 'test', '', '1', 1, 'test', 'test', 12, 12, 'test', 0, 1, NULL, NULL, NULL),
(2, 'sdfdsfs', NULL, NULL, 'sdfds', 'KAB. GORONTALO UTARA, GORONTALO', '2342424', '1', 0, 'zczcxzxc', 'KAB. SIJUNJUNG, SUMATERA BARAT', 12, 32, NULL, 0, 1, NULL, '2023-02-07 16:48:16', '2023-02-07 16:48:16'),
(3, 'asa', NULL, NULL, 'aaa', 'KAB. TAPANULI UTARA, SUMATERA UTARA', '222', '4', 1, NULL, ', - Pilih Provinsi -', 22, 22, NULL, 0, 1, NULL, '2023-02-07 16:53:32', '2023-02-07 16:53:32'),
(4, 'ss', NULL, NULL, 'ssss', 'KAB. TAPANULI UTARA, SUMATERA UTARA', 'ddd', '4', 1, NULL, ', - Pilih Provinsi -', 444, 44, NULL, 0, 0, NULL, '2023-02-07 16:54:37', '2023-02-07 20:19:45'),
(5, 'test', NULL, NULL, 'test', 'KOTA BANJARBARU, KALIMANTAN SELATAN', '434343434', '3', 1, 'test', 'KOTA BANJARBARU, KALIMANTAN SELATAN', 22, 31, NULL, 0, 1, NULL, '2023-02-07 20:10:55', '2023-02-07 20:10:55'),
(6, 'www', NULL, NULL, 'ww', 'KOTA TANGERANG SELATAN, BANTEN', '333', '4', 1, 'ww', 'KOTA TANGERANG SELATAN, BANTEN', 4, 3, '', 0, 1, NULL, '2023-02-08 07:38:51', '2023-02-08 07:38:51'),
(7, 'undefined', NULL, NULL, 'aasdada', 'KOTA ADM. JAKARTA BARAT, DKI JAKARTA', '2342424', '1', 1, 'aasdada', 'KOTA ADM. JAKARTA BARAT, DKI JAKARTA', 34, 40, '20230208153909-8929864611.png', 0, 1, NULL, '2023-02-08 08:39:09', '2023-02-08 08:39:09'),
(8, 'undefined', NULL, NULL, 'aasdada', ', DKI JAKARTA', '2342424', '1', 1, 'aasdada', ', DKI JAKARTA', 34, 40, '20230208155159-9403433004.png', 0, 1, NULL, '2023-02-08 08:51:59', '2023-02-08 08:51:59'),
(9, '333wewew', NULL, NULL, 'eweweeww', 'KAB. SIJUNJUNG, SUMATERA BARAT', '2323233', '1', 1, 'eweweeww', 'KAB. SIJUNJUNG, SUMATERA BARAT', 23, 26, NULL, 0, 1, NULL, '2023-02-11 09:40:01', '2023-02-11 09:40:01'),
(10, 'eee', NULL, NULL, 'weewwewe', 'KAB. SUKABUMI, JAWA BARAT', '222', '1', 1, 'weewwewe', 'KAB. SUKABUMI, JAWA BARAT', 2323, 2315, NULL, 0, 1, NULL, '2023-02-11 15:49:11', '2023-02-11 15:49:11');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_image`
--

CREATE TABLE `visitor_image` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `visitor_id` int(10) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitor_image`
--

INSERT INTO `visitor_image` (`id`, `visitor_id`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 1, '20230211133622-9282340105.jpeg', NULL, '2023-02-10 03:25:06', '2023-02-11 06:36:22'),
(3, 1, '20230211133547-9910466775.jpeg', NULL, '2023-02-10 03:54:33', '2023-02-11 06:35:47'),
(5, 1, '20230211133653-3564858840.jpeg', NULL, '2023-02-10 03:54:55', '2023-02-11 06:36:53'),
(6, 10, '20230211224911-7948486568.jpeg', NULL, '2023-02-11 15:49:11', '2023-02-11 15:49:11'),
(7, 10, '20230211224911-9520827775.pdf', NULL, '2023-02-11 15:49:11', '2023-02-11 15:49:11'),
(8, 10, '20230211224911-4410676798.png', NULL, '2023-02-11 15:49:11', '2023-02-11 15:49:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_pembangunan`
--
ALTER TABLE `jenis_pembangunan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section2`
--
ALTER TABLE `section2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section4`
--
ALTER TABLE `section4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor_image`
--
ALTER TABLE `visitor_image`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jenis_pembangunan`
--
ALTER TABLE `jenis_pembangunan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `section2`
--
ALTER TABLE `section2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `section4`
--
ALTER TABLE `section4`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `visitor_image`
--
ALTER TABLE `visitor_image`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
