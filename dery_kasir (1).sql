-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 29, 2024 at 06:48 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dery_kasir`
--

-- --------------------------------------------------------

--
-- Table structure for table `detailpenjualan`
--

CREATE TABLE `detailpenjualan` (
  `id` int NOT NULL,
  `penjualan_id` int DEFAULT NULL,
  `produk_id` int DEFAULT NULL,
  `qty` int DEFAULT NULL,
  `subtotal` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detailpenjualan`
--

INSERT INTO `detailpenjualan` (`id`, `penjualan_id`, `produk_id`, `qty`, `subtotal`) VALUES
(4000, 2007, 1008, 5, '25000.00'),
(4001, 2007, 1008, 4, '20000.00'),
(4003, 2005, 1007, 9, '250000.00');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `no` int NOT NULL,
  `username` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `jabatan` varchar(30) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`no`, `username`, `password`, `nama`, `jabatan`) VALUES
(6, 'admin', 'admin', 'Dery Purnama Nurdiyansyah', 'Administator'),
(14, 'mumu', '12345', 'mumu mudjahid', 'ketua osis');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_general_ci,
  `telepon` varchar(15) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama`, `alamat`, `telepon`) VALUES
(3001, 'Erni Rohaeni', 'Cengal', '89678876456'),
(3002, 'Endang Soekamti', 'Pasanggrahan', '88987687657'),
(3003, 'Teti Eti', 'Majalengka', '87873828987'),
(3004, 'Rina Agustina', 'Haurseah', '8987667864'),
(3005, 'Agung Hapsah', 'Malausma', '89878293987'),
(3006, 'Sultini Marianti', 'Majalengka', '818763456123'),
(3007, 'Mas Purnomo n', 'Cilacap', '8976787698'),
(3008, 'Amin Bunyamin', 'Pasanggrahan', '89765897011'),
(3009, 'Iwan Setiawan', 'Salamanggu', '87987237876'),
(3010, 'Mamet Ahmet', 'Jayapura', '89675839837');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id` int NOT NULL,
  `tgl_penjualan` date DEFAULT NULL,
  `total_harga` decimal(10,2) DEFAULT NULL,
  `pelanggan_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id`, `tgl_penjualan`, `total_harga`, `pelanggan_id`) VALUES
(2001, '2024-02-01', '20000.00', 3001),
(2002, '2024-02-03', '20000.00', 3001),
(2003, '2024-02-01', '20000.00', 3001),
(2004, '2024-02-01', '20000.00', 3001),
(2005, '2024-03-07', '40000.00', 3006),
(2006, '2024-03-07', '40000.00', 3005),
(2007, '2024-03-07', '20000.00', 3006),
(2008, '2024-03-14', '15000.00', 3008),
(2009, '2024-03-15', '40000.00', 3008),
(2010, '2024-04-29', '15000.00', 3005),
(2011, '2024-04-29', '15000.00', 3005),
(2012, '2024-04-29', '10000.00', 3001),
(2013, '2024-04-29', '40000.00', 3001),
(2014, '2024-04-29', '20000.00', 3006),
(2015, '2024-04-29', '20000.00', 3010),
(2016, '2024-04-29', '300000.00', 3003),
(2017, '2024-04-29', '40000.00', 3007),
(2018, '2024-04-29', '50000.00', 3008);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `harga` decimal(10,2) DEFAULT NULL,
  `stok` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `harga`, `stok`) VALUES
(1001, 'Minyak Bimoli 1 liter', '15000.00', 21),
(1002, 'Minyak Bimoli 2 Liter', '30000.00', 15),
(1004, 'Beras Medium 5 kg ', '68000.00', 15),
(1005, 'Beras Medium 10 kg ', '135000.00', 20),
(1006, 'Beras High 1 kg', '15000.00', 15),
(1007, 'Beras High 5 kg', '75000.00', 10),
(1008, 'Beras High 10 kg', '148000.00', 19);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detailpenjualan`
--
ALTER TABLE `detailpenjualan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penjualan_id` (`penjualan_id`),
  ADD KEY `produk_id` (`produk_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pelanggan_id` (`pelanggan_id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `no` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detailpenjualan`
--
ALTER TABLE `detailpenjualan`
  ADD CONSTRAINT `detailpenjualan_ibfk_1` FOREIGN KEY (`penjualan_id`) REFERENCES `penjualan` (`id`),
  ADD CONSTRAINT `detailpenjualan_ibfk_2` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id`);

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`pelanggan_id`) REFERENCES `pelanggan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
