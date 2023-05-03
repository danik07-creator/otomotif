-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2023 at 11:53 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `otomotif`
--

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id_produk` int(255) NOT NULL,
  `merk_produk` varchar(255) NOT NULL,
  `jenis_produk` varchar(255) NOT NULL,
  `jumlah_stok` int(255) NOT NULL,
  `harga` bigint(255) NOT NULL,
  `keterangan` text NOT NULL,
  `status_mobil` int(11) NOT NULL,
  `delete_mobil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id_produk`, `merk_produk`, `jenis_produk`, `jumlah_stok`, `harga`, `keterangan`, `status_mobil`, `delete_mobil`) VALUES
(1, 'Tesla', 'Camry', 1, 450000000, 'Sedan(2016)', 0, 1),
(2, 'Honda1', 'CR-V', 5, 325000000, 'SUV(2016)', 0, 0),
(3, 'Ford', 'Ranger', 2, 250000000, 'Pickup(2015)', 0, 0),
(4, 'Hyundai', 'Avega', 3, 120000000, 'Sedan(2013)', 0, 0),
(5, 'Mitsubishi', 'Pajero Sport', 2, 560000000, 'SUV(2021)', 0, 0),
(6, 'Toyota', 'Vios', 8, 75000000, 'Sedan(2013)', 0, 0),
(7, 'Honda', 'Jazz', 6, 180000000, 'Sedan(2013)', 0, 0),
(8, 'Mitsubishi', 'Triton', 2, 220000000, 'Pick-up(2016)', 0, 0),
(9, 'Ford', 'Raptor', 1, 350000000, 'Pick-up(2016)', 0, 0),
(10, 'Honda', 'Brio', 12, 175000000, 'City Car(2021)', 0, 0),
(11, 'Hyundai', 'Stargazer', 1, 400000000, 'SUV(2022)', 0, 0),
(12, 'Toyota', 'Accor', 4, 280000000, 'Sedan(2019)', 0, 0),
(13, 'Danik', 'Motor', 2, 123000000, 'hahay', 0, 1),
(14, 'Toyota1', 'Motor', 7, 67909090989689, 'jkugjkgk', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_produk` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
