-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 08, 2023 at 10:34 AM
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
(1, 'Sebagai kontraktor handal kami hadir untuk mewujudkan hunian terbaik anda', 'Larch for business', 'Travelling assistance indulgence unpleasing. Not thoughts all exercise blessing. Indulgence way everything', 'Larch for personal', 'Travelling assistance indulgence unpleasing. Not thoughts all exercise blessing. Indulgence way everything', '20230208084851-7525817111.png', 'Solusi hunian untuk anda', 'Kami memiliki layanan Arsitektur dan Kontraktor', 'For multiple small & medium projects', 'Favourite tolerably engrossed. Truth short folly court why she their balls. Excellence put unaffected', '20230208084851-3843015390.png', 'For large & complex site operations', 'Favourite tolerably engrossed. Truth short folly court why she their balls. Excellence put unaffected', '20230208084851-8199345083.png', 'Kami selalu flexible dan tepat waktu dalam pembangunan', '20230208085205-8709710410.png', 'Pntroduced day her apartments. Fully as taste he mr do smile abode every. Luckily offered article led lasting country minutes nor old. Happen people things oh is oppose up parish effect. Law handsome old outweigh humoured far appetite.', 'Stay Compliant', 'Tetap dalam jalur dan selalu update dengan progress', '20230208085205-4973336829.png', 'Digitise and automate field processes to enforce compliance', 'Reduce compliance management costs by 80%', 'Protect your company legally and contractually', 'Don’t waste your data', 'Kami selalu aware dengan data yang anda berikan pada kami', '20230208085205-5970890001.png', 'Digitise and automate field processes to enforce compliance', 'Reduce compliance management costs by 80%', 'Protect your company legally and contractually', 'Track Progress', 'Selalu awasi pembangunan dengan Tracking progress', '20230208085205-5897695368.png', 'Digitise and automate field processes to enforce compliance', 'Reduce compliance management costs by 80%', 'Protect your company legally and contractually', 'Construction field management software purpose-built for your business', 'For multiple small & medium projects', 'For multiple small & medium projects', 'Project Progress & KPIs', 'HSEQ Assurance', 'Workforce & Equipment', 'For multiple small & medium projects', 'Client Handovers', 'Contractors’ Management', 'Compliance Enforcement', 'For multiple small & medium projects', 'Project Progress', 'Site Coordination', 'Contractors’ Management', 'Tertarik bekerjasama dengan kami?', 'Segera hubungi kontak dibawah ini', NULL, NULL, '2023-02-08 02:31:02');

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
(8, '2023_02_08_094339_setting', 5);

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
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `nama`, `email`, `password`, `alamat`, `kota`, `no_telp`, `jenis_pembangunan`, `issame_location`, `alamat_lokasi`, `kota_lokasi`, `luas_tanah1`, `luas_tanah2`, `file`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'test', NULL, NULL, 'test', 'test', '', '1', 1, 'test', 'test', 12, 12, 'test', 1, NULL, NULL, NULL),
(2, 'sdfdsfs', NULL, NULL, 'sdfds', 'KAB. GORONTALO UTARA, GORONTALO', '2342424', '1', 0, 'zczcxzxc', 'KAB. SIJUNJUNG, SUMATERA BARAT', 12, 32, NULL, 1, NULL, '2023-02-07 16:48:16', '2023-02-07 16:48:16'),
(3, 'asa', NULL, NULL, 'aaa', 'KAB. TAPANULI UTARA, SUMATERA UTARA', '222', '4', 1, NULL, ', - Pilih Provinsi -', 22, 22, NULL, 1, NULL, '2023-02-07 16:53:32', '2023-02-07 16:53:32'),
(4, 'ss', NULL, NULL, 'ssss', 'KAB. TAPANULI UTARA, SUMATERA UTARA', 'ddd', '4', 1, NULL, ', - Pilih Provinsi -', 444, 44, NULL, 0, NULL, '2023-02-07 16:54:37', '2023-02-07 20:19:45'),
(5, 'test', NULL, NULL, 'test', 'KOTA BANJARBARU, KALIMANTAN SELATAN', '434343434', '3', 1, 'test', 'KOTA BANJARBARU, KALIMANTAN SELATAN', 22, 31, NULL, 1, NULL, '2023-02-07 20:10:55', '2023-02-07 20:10:55');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
