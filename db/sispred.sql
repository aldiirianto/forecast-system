-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2022 at 02:08 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sispred`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataproduk`
--

CREATE TABLE `dataproduk` (
  `id_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dataproduk`
--

INSERT INTO `dataproduk` (`id_produk`, `nama_produk`, `harga`, `created_at`, `updated_at`) VALUES
('A', 'Green Sukabumi Stone', 215000, NULL, NULL),
('B', 'Terrazzo Tile', 320000, NULL, NULL),
('C', 'Black Lavastone', 110000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(10, '2022_05_28_084139_create_model_table', 2),
(11, '2022_05_28_084409_create_pengguna_table', 3),
(13, '2014_10_12_000000_create_users_table', 4),
(14, '2014_10_12_100000_create_password_resets_table', 4),
(15, '2019_08_19_000000_create_failed_jobs_table', 4),
(16, '2019_12_14_000001_create_personal_access_tokens_table', 4),
(17, '2022_06_17_162302_create_dataproduk_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

CREATE TABLE `model` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` int(11) NOT NULL,
  `role` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `username`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin', 12345, 0, NULL, NULL),
(2, 'owner', 12345, 1, NULL, NULL);

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
-- Table structure for table `tbl_penjualan`
--

CREATE TABLE `tbl_penjualan` (
  `id_penjualan` int(11) NOT NULL,
  `id_shipment` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `qty` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_penjualan`
--

INSERT INTO `tbl_penjualan` (`id_penjualan`, `id_shipment`, `id_produk`, `qty`) VALUES
(1, 1, 1, '50'),
(2, 1, 3, '3'),
(3, 2, 2, '400'),
(4, 2, 1, '150'),
(5, 3, 1, '50'),
(6, 4, 1, '30'),
(7, 4, 2, '160'),
(8, 4, 3, '10'),
(9, 5, 2, '40'),
(10, 5, 1, '160'),
(11, 6, 3, '150'),
(12, 7, 1, '150'),
(13, 7, 3, '50'),
(14, 8, 2, '40'),
(15, 8, 1, '60'),
(16, 9, 2, '50'),
(17, 10, 3, '10'),
(18, 11, 1, '500'),
(19, 11, 2, '500'),
(20, 12, 1, '50'),
(21, 12, 3, '50'),
(22, 13, 3, '60'),
(23, 14, 3, '100'),
(24, 15, 1, '100'),
(25, 16, 1, '20'),
(26, 17, 2, '100'),
(27, 17, 1, '100'),
(28, 18, 3, '35'),
(29, 19, 1, '30'),
(30, 19, 2, '50'),
(31, 19, 3, '20'),
(32, 20, 1, '15'),
(33, 20, 3, '35'),
(34, 21, 2, '80'),
(35, 21, 1, '20'),
(36, 22, 3, '50'),
(37, 23, 1, '75'),
(38, 23, 3, '55'),
(39, 24, 3, '15'),
(40, 24, 2, '600'),
(41, 25, 2, '200'),
(42, 26, 1, '100'),
(43, 26, 2, '300'),
(44, 27, 2, '300'),
(45, 28, 1, '1050'),
(46, 29, 1, '750'),
(47, 29, 2, '750'),
(48, 30, 3, '25'),
(49, 31, 1, '50'),
(50, 31, 3, '7'),
(51, 31, 2, '18'),
(52, 32, 1, '250'),
(53, 32, 2, '100');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_peramalan`
--

CREATE TABLE `tbl_peramalan` (
  `id_peramalan` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `tahun` date NOT NULL,
  `penjualan` int(11) NOT NULL,
  `peramalan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_peramalan`
--

INSERT INTO `tbl_peramalan` (`id_peramalan`, `id_produk`, `tahun`, `penjualan`, `peramalan`) VALUES
(1, 0, '0000-00-00', 0, 0),
(2, 0, '0000-00-00', 0, 0),
(3, 0, '0000-00-00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id_produk` int(11) NOT NULL,
  `nm_produk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`id_produk`, `nm_produk`) VALUES
(1, 'Green Sukabumi'),
(2, 'Black Lavastone'),
(3, 'Terrazzo Tile');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shipment`
--

CREATE TABLE `tbl_shipment` (
  `id_shipment` int(11) NOT NULL,
  `id_job` varchar(5) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_shipment`
--

INSERT INTO `tbl_shipment` (`id_shipment`, `id_job`, `date`) VALUES
(1, '1000', '2020-12-17'),
(2, '1001', '2020-12-18'),
(3, '1002', '2019-12-27'),
(4, '1003', '2018-12-28'),
(5, '1004', '2017-12-16'),
(6, '1005', '2021-12-04'),
(7, '1006', '2021-12-05'),
(8, '1007', '2021-12-05'),
(9, '1008', '2021-12-06'),
(10, '1009', '2021-12-09'),
(11, '1010', '2021-12-10'),
(12, '1011', '2021-12-11'),
(13, '1012', '2021-12-11'),
(14, '1013', '2021-12-13'),
(15, '1014', '2021-12-15'),
(16, '1015', '2021-12-15'),
(17, '1016', '2021-12-15'),
(18, '1017', '2021-12-15'),
(19, '1018', '2021-12-16'),
(20, '1019', '2021-12-16'),
(21, '1020', '2021-12-17'),
(22, '1021', '2021-12-18'),
(23, '1022', '2021-12-19'),
(24, '1023', '2021-12-22'),
(25, '1024', '2021-12-22'),
(26, '1025', '2021-12-24'),
(27, '1026', '2021-12-25'),
(28, '1027', '2021-12-27'),
(29, '1028', '2021-12-28'),
(30, '1029', '2021-12-29'),
(31, '1030', '2021-12-30'),
(32, '1031', '2021-12-30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `id_produk` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id_transaksi`, `tgl_transaksi`, `id_produk`, `qty`) VALUES
(0, '0000-00-00', 0, 12),
(0, '0000-00-00', 0, 12),
(0, '0000-00-00', 0, 12),
(0, '0000-00-00', 0, 120),
(0, '0000-00-00', 0, 40),
(0, '0000-00-00', 0, 40),
(0, '0000-00-00', 0, 12),
(0, '2022-06-24', 0, 12);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `username` varchar(24) CHARACTER SET latin1 NOT NULL,
  `nama` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`username`, `nama`, `password`, `status`) VALUES
('admin', 'Admin', 'admin', 'admin'),
('manager', 'Manager', 'manager', 'manager');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'aldi', 'aldiirianto@gmail.com', NULL, '$2y$10$k0J567ByPAMXENfPLEMnmOdpTmlxVzHGJ9QWby7WmC14u2ke80kQ6', NULL, '2022-06-20 17:01:33', '2022-06-20 17:01:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tbl_penjualan`
--
ALTER TABLE `tbl_penjualan`
  ADD PRIMARY KEY (`id_penjualan`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_shipment` (`id_shipment`);

--
-- Indexes for table `tbl_peramalan`
--
ALTER TABLE `tbl_peramalan`
  ADD PRIMARY KEY (`id_peramalan`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tbl_shipment`
--
ALTER TABLE `tbl_shipment`
  ADD PRIMARY KEY (`id_shipment`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`username`) USING BTREE;

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `model`
--
ALTER TABLE `model`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_penjualan`
--
ALTER TABLE `tbl_penjualan`
  MODIFY `id_penjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tbl_peramalan`
--
ALTER TABLE `tbl_peramalan`
  MODIFY `id_peramalan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_shipment`
--
ALTER TABLE `tbl_shipment`
  MODIFY `id_shipment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_penjualan`
--
ALTER TABLE `tbl_penjualan`
  ADD CONSTRAINT `tbl_penjualan_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `tbl_produk` (`id_produk`),
  ADD CONSTRAINT `tbl_penjualan_ibfk_2` FOREIGN KEY (`id_shipment`) REFERENCES `tbl_shipment` (`id_shipment`);

--
-- Constraints for table `tbl_peramalan`
--
ALTER TABLE `tbl_peramalan`
  ADD CONSTRAINT `tbl_peramalan_ibfk_1` FOREIGN KEY (`id_peramalan`) REFERENCES `tbl_produk` (`id_produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
