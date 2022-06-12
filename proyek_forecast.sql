-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2022 at 09:13 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyek_forecast`
--

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
(1, '1000', '2021-12-01'),
(2, '1001', '2021-12-01'),
(3, '1002', '2021-12-03'),
(4, '1003', '2021-12-04'),
(5, '1004', '2021-12-04'),
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_penjualan`
--
ALTER TABLE `tbl_penjualan`
  ADD PRIMARY KEY (`id_penjualan`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_shipment` (`id_shipment`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_penjualan`
--
ALTER TABLE `tbl_penjualan`
  MODIFY `id_penjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

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
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_penjualan`
--
ALTER TABLE `tbl_penjualan`
  ADD CONSTRAINT `tbl_penjualan_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `tbl_produk` (`id_produk`),
  ADD CONSTRAINT `tbl_penjualan_ibfk_2` FOREIGN KEY (`id_shipment`) REFERENCES `tbl_shipment` (`id_shipment`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
