-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2023 at 05:53 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_articlejmp`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `alt` varchar(200) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `desc` longtext NOT NULL,
  `slug` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `judul`, `cover`, `alt`, `id_kategori`, `desc`, `slug`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'cc', '1692166201_sabira-menolak-punah-dengan-kelola-sampah-6_169.jpeg', 'adaee', 1, '<p>khljljblj</p>', 'cc', 2, '2023-08-08 23:18:12', '2023-08-15 23:10:01'),
(2, 'aa', '1691563239_feature.jpg', 'sda', 1, '<p>dasda</p>', 'aa', 1, '2023-08-08 23:40:39', '2023-08-08 23:40:39'),
(3, '8 Ide Daur Ulang Sampah Plastik yang Mudah Dibuat', '1691994917_sabira-menolak-punah-dengan-kelola-sampah-6_169.jpeg', 'cover', 1, '<p>Sama seperti ecobrick, cara ini juga bisa dijadikan pilihan untuk mendaur ulang sampah botol plastik. Penggunaan botol plastik sebagai pot bisa jadi salah satu solusi pengurangan sampah.<br />\r\n<br />\r\nPotong botol menjadi dua bagian. Gunakan potongan bagian bawah botol sebagai pot.<br />\r\n<br />\r\nAtau, sebagai pilihan bentuk lain, cukup bolongi salah satu bagian samping botol dengan cutter. Isi pot dengan tanah atau media tanam lain bersamaan dengan tanaman yang Anda inginkan.<br />\r\n<br />\r\nPot botol plastik juga bisa digunakan bagi Anda yang ingin membuat taman vertikal di dinding rumah. Bolongi beberapa bagian pot botol plastik dengan paku. Setelahnya, Anda tinggal gantung pot botol plastik dengan tali.<br />\r\n<br />\r\n3. Lampu hias<br />\r\nKreasi yang satu ini cocok bagi Anda yang senang bermain-main dengan cahaya. Siapa sangka botol plastik bekas bisa menjadi lampu hias?<br />\r\n<br />\r\nBanyak cara yang bisa dilakukan untuk mendapatkan lampu hias dari botol plastik. Cara pembuatan bisa dipilih sesuai selera. Anda bisa gunakan botol plastik bekas untuk lampu gantung. Potong botol menjadi dua bagian. Untuk lampu, gunakan potongan bagian atas serta leher pada ujung botol.<br />\r\n<br />\r\nAgar lebih menarik, gunakan botol plastik berwarna seperti botol minuman bersoda. Ini dilakukan untuk memberikan efek warna pada lampu.<br />\r\n<br />\r\nPilihan lain, Anda juga bisa menghias penutup lampu dengan tempelan benang atau tali rapia warna-warni. Oleskan lem pada botol plastik yang telah terpotong, kemudian lilit dengan benang atau tali rapia.<br />\r\n<br />\r\nPasang lampu yang sudah terpasang dengan kabel di dalam botol. Jangan gunakan lampu LED agar plastik tak meleleh akibat terlalu panas.</p>', '8-ide-daur-ulang-sampah-plastik-yang-mudah-dibuat', 1, '2023-08-13 23:35:17', '2023-08-13 23:35:17'),
(4, 'ljlnljn', '1692168596_sabira-menolak-punah-dengan-kelola-sampah-6_169.jpeg', 'ufkbk', 5, '<p>fyvhvvh</p>', 'ljlnljn', 2, '2023-08-15 23:49:56', '2023-08-15 23:49:56');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_tables`
--

CREATE TABLE `kategori_tables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_tables`
--

INSERT INTO `kategori_tables` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Edukasi', '2023-08-01 00:44:12', '2023-08-01 00:44:12'),
(4, 'Produk', '2023-08-13 09:18:45', '2023-08-13 09:18:45'),
(5, 'Company Profile', '2023-08-13 09:18:58', '2023-08-13 09:18:58'),
(6, 'Operational', '2023-08-13 09:19:15', '2023-08-13 09:19:15'),
(7, 'SDM', '2023-08-16 00:05:39', '2023-08-16 00:05:39');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_01_071356_create_kategori_tables', 1),
(6, '2023_08_01_071533_create_article_table', 1),
(7, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
(8, '2023_08_14_065754_create_sessions_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('mT2oMxfUyf4VcutNrAwFhiLPcPPJQzElZo6WDkmU', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoidlhrQVBvMTZFV0V4VXVSNlFYTXVHb29DWWNtbzJOTjcyRkQyQlJ5ZCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hcnRpa2VsL2NyZWF0ZSI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkV0hnU3ExMWZVa2RwOFRucllqNGVPT1UwS0RhM3BzdHJTYlNtSVJtdm5UUTdOR2ZETFpSOHEiO30=', 1692373788);

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
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'adminjmp', 'adminjmp@gmail.com', NULL, '$2y$10$qnlgVePl8AZB7WAF7Yy.4Ov9YuAqNhQ9jGHFSU3sm2AJRt3X1o1ga', NULL, NULL, NULL, NULL, '2023-08-14 00:09:25', '2023-08-14 00:09:25'),
(2, 'abc', 'abc@gmail.com', NULL, '$2y$10$WHgSq11fUkdp8TnrYj4eOOU0KDa3pstrSbSmIRmvnTQ7NGfDLZR8q', NULL, NULL, NULL, 'fakibyVTyxWsQfu2WxU47r42DAZN2lpSD9JCTn6zB0AW4CrVZzniNYf4gaSk', '2023-08-14 01:17:55', '2023-08-14 01:17:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kategori_tables`
--
ALTER TABLE `kategori_tables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori_tables`
--
ALTER TABLE `kategori_tables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
