-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2022 at 04:19 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualan`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_transaksi`
--

CREATE TABLE `data_transaksi` (
  `id_transaksi` int(10) UNSIGNED NOT NULL,
  `tgl_transaksi` date DEFAULT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_transaksi`
--

INSERT INTO `data_transaksi` (`id_transaksi`, `tgl_transaksi`, `id_produk`, `qty`, `created_at`, `updated_at`) VALUES
(12, '2022-01-05', 12, 100, '2022-08-03 18:50:40', '2022-08-03 18:50:40'),
(14, '2022-01-05', 7, 45, '2022-08-03 18:53:54', '2022-08-03 18:53:54'),
(15, '2022-01-05', 11, 25, '2022-08-03 18:54:51', '2022-08-03 18:54:51'),
(16, '2022-01-10', 8, 30, '2022-08-03 18:55:43', '2022-08-03 18:55:43'),
(17, '2022-01-13', 9, 15, '2022-08-03 18:56:35', '2022-08-03 18:56:35'),
(18, '2022-08-15', 10, 50, '2022-08-03 18:57:31', '2022-08-03 18:57:31'),
(19, '2022-01-18', 9, 45, '2022-08-03 18:58:04', '2022-08-03 18:58:04'),
(20, '2022-01-19', 7, 10, '2022-08-03 18:59:17', '2022-08-03 18:59:17'),
(21, '2022-01-24', 8, 25, '2022-08-03 19:00:08', '2022-08-03 19:00:08'),
(22, '2022-01-28', 9, 25, '2022-08-03 19:00:40', '2022-08-03 19:00:40'),
(23, '2022-01-31', 7, 15, '2022-08-03 19:06:06', '2022-08-03 19:06:06'),
(24, '2022-02-03', 10, 25, '2022-08-03 19:07:02', '2022-08-03 19:07:02'),
(25, '2022-02-07', 7, 5, '2022-08-03 19:07:31', '2022-08-03 19:07:31'),
(26, '2022-02-09', 11, 15, '2022-08-03 19:08:15', '2022-08-03 19:08:15'),
(27, '2022-02-09', 7, 72, '2022-08-03 19:08:49', '2022-08-03 19:08:49'),
(28, '2022-02-11', 8, 15, '2022-08-03 19:09:13', '2022-08-03 19:09:13'),
(29, '2022-02-14', 12, 45, '2022-08-03 19:09:39', '2022-08-03 19:09:39'),
(30, '2022-02-14', 9, 35, '2022-08-03 19:10:41', '2022-08-03 19:10:41'),
(31, '2022-02-19', 7, 125, '2022-08-03 19:11:20', '2022-08-03 19:11:20'),
(32, '2022-02-24', 11, 65, '2022-08-03 19:12:47', '2022-08-03 19:12:47'),
(33, '2022-03-07', 7, 100, '2022-08-03 19:13:19', '2022-08-03 19:13:19'),
(34, '2022-03-09', 12, 25, '2022-08-03 19:13:43', '2022-08-03 19:13:43'),
(35, '2022-03-09', 10, 15, '2022-08-03 19:14:11', '2022-08-03 19:14:11'),
(36, '2022-03-15', 7, 45, '2022-08-03 19:14:39', '2022-08-03 19:14:39'),
(37, '2022-03-15', 9, 17, '2022-08-03 19:15:11', '2022-08-03 19:15:11'),
(38, '2022-03-18', 11, 50, '2022-08-03 19:15:37', '2022-08-03 19:15:37'),
(39, '2022-03-19', 8, 25, '2022-08-03 19:16:08', '2022-08-03 19:16:08'),
(40, '2022-03-22', 7, 10, '2022-08-03 19:17:21', '2022-08-03 19:17:21'),
(41, '2022-04-04', 9, 25, '2022-08-03 19:18:30', '2022-08-03 19:18:30'),
(42, '2022-04-07', 11, 15, '2022-08-03 19:18:47', '2022-08-03 19:18:47'),
(43, '2022-04-07', 7, 10, '2022-08-03 19:19:21', '2022-08-03 19:19:21'),
(44, '2022-04-07', 8, 25, '2022-08-03 19:19:50', '2022-08-03 19:19:50'),
(45, '2022-04-13', 10, 23, '2022-08-03 19:20:32', '2022-08-03 19:20:32'),
(46, '2022-04-21', 12, 56, '2022-08-03 19:21:06', '2022-08-03 19:21:06'),
(47, '2022-04-24', 7, 20, '2022-08-03 19:21:53', '2022-08-03 19:21:53'),
(48, '2022-05-10', 7, 100, '2022-08-03 19:22:17', '2022-08-03 19:22:17'),
(49, '2022-05-16', 9, 25, '2022-08-03 19:22:37', '2022-08-03 19:22:37'),
(50, '2022-05-16', 12, 15, '2022-08-03 19:23:03', '2022-08-03 19:23:03'),
(51, '2022-05-19', 11, 5, '2022-08-03 19:24:00', '2022-08-03 19:24:00'),
(52, '2022-05-19', 10, 10, '2022-08-03 19:24:31', '2022-08-03 19:24:31'),
(53, '2022-05-24', 8, 80, '2022-08-03 19:25:18', '2022-08-03 19:25:18'),
(54, '2022-05-30', 7, 45, '2022-08-03 19:26:05', '2022-08-03 19:26:05'),
(55, '2022-06-14', 8, 50, '2022-08-03 19:26:33', '2022-08-03 19:26:33'),
(56, '2022-08-14', 7, 15, '2022-08-03 19:26:58', '2022-08-03 19:26:58'),
(57, '2022-06-14', 11, 25, '2022-08-03 19:27:19', '2022-08-03 19:27:19'),
(58, '2022-06-20', 10, 15, '2022-08-03 19:27:47', '2022-08-03 19:27:47'),
(59, '2022-06-21', 9, 25, '2022-08-03 19:28:10', '2022-08-03 19:28:10'),
(60, '2022-06-26', 12, 100, '2022-08-03 19:28:40', '2022-08-03 19:28:40');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(10) UNSIGNED NOT NULL,
  `kode_kategori` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kategori` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_kategori` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_kategori` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kode_kategori`, `nama_kategori`, `slug_kategori`, `deskripsi_kategori`, `status`, `foto`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'TRZ-001', 'Ubin Terrazzo Cetak', 'ubin-terazzo-cetak', 'Ubin terrazzo cetak dengan ukuran 30x60 cm dan 60x60 cm.', 'Publish', NULL, 1, '2022-07-31 09:29:07', '2022-08-03 07:41:27'),
(3, 'TMX-001', 'Teraso Cor Instant', 'teraso-cor-instant', 'Produk teraso cor dalam kemasan siap pakai.', 'Publish', NULL, 1, '2022-08-02 08:55:22', '2022-08-03 07:34:58');

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
(53, '2014_10_12_000000_create_users_table', 1),
(54, '2014_10_12_100000_create_password_resets_table', 1),
(55, '2019_08_19_000000_create_failed_jobs_table', 1),
(56, '2021_05_28_153344_create_kategoris_table', 1),
(57, '2021_05_28_155126_create_images_table', 1);

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
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_produk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` double(12,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `user_id`, `id_kategori`, `nama_produk`, `harga`, `created_at`, `updated_at`) VALUES
(7, 1, 3, 'Terramix', 215000.00, '2022-08-03 07:44:24', '2022-08-03 07:44:24'),
(8, 1, 2, 'Ubin Teraso Cetak - Cordon Blue', 320000.00, '2022-08-03 07:46:18', '2022-08-03 07:46:18'),
(9, 1, 2, 'Ubin Teraso Cetak - Orange Classic', 320000.00, '2022-08-03 07:46:37', '2022-08-03 07:46:37'),
(10, 1, 2, 'Ubin Teraso Cetak - Coral Pink', 340000.00, '2022-08-03 07:46:55', '2022-08-03 07:46:55'),
(11, 1, 2, 'Ubin Teraso Cetak - Green Army', 340000.00, '2022-08-03 07:47:18', '2022-08-03 07:47:18'),
(12, 1, 2, 'Ubin Teraso Cetak - Black Casto', 390000.00, '2022-08-03 07:47:34', '2022-08-03 07:47:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'member',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Aldi', 'aldiirianto999@gmail.com', NULL, '$2y$10$/mZAsf1/aiYEUxtPHkRo5O0uVbKYnDeq2jCrjwtziYr92kuAXY.dK', '+6282136897415', 'member', NULL, '2022-07-31 09:26:51', '2022-07-31 09:26:51'),
(2, 'Mochammad Saefful', 'jhoundpio@gmail.com', NULL, '$2y$10$i0PcdvPa/m5QK2E9yo6Fluiva5AH74rXzJ4eEhPp8tEIpoEvZH6lC', '895321518987', 'member', NULL, '2022-08-03 18:42:32', '2022-08-03 18:42:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_transaksi`
--
ALTER TABLE `data_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_user_id_foreign` (`user_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`),
  ADD KEY `kategori_user_id_foreign` (`user_id`);

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
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

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
-- AUTO_INCREMENT for table `data_transaksi`
--
ALTER TABLE `data_transaksi`
  MODIFY `id_transaksi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `kategori`
--
ALTER TABLE `kategori`
  ADD CONSTRAINT `kategori_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
