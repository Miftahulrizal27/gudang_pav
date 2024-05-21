-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2024 at 01:41 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_toko`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `id_barang` varchar(255) NOT NULL,
  `id_regional` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `stok1` text NOT NULL,
  `stok2` text NOT NULL,
  `stok3` text NOT NULL,
  `stok4` text NOT NULL,
  `stok5` text NOT NULL,
  `stok6` text NOT NULL,
  `stok7` text NOT NULL,
  `stok8` text NOT NULL,
  `stok9` text NOT NULL,
  `nama_barang` text NOT NULL,
  `merk` varchar(255) NOT NULL,
  `harga_beli` varchar(255) NOT NULL,
  `harga_jual` varchar(255) NOT NULL,
  `satuan_barang` varchar(255) NOT NULL,
  `stok` text NOT NULL,
  `tgl_input` varchar(255) NOT NULL,
  `tgl_update` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `id_barang`, `id_regional`, `id_kategori`, `pic`, `email`, `dept`, `stok1`, `stok2`, `stok3`, `stok4`, `stok5`, `stok6`, `stok7`, `stok8`, `stok9`, `nama_barang`, `merk`, `harga_beli`, `harga_jual`, `satuan_barang`, `stok`, `tgl_input`, `tgl_update`) VALUES
(1, 'BR001', 1, 1, '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'Pensil', 'Fabel Castel', '1500', '3000', 'PCS', '96', '6 October 2020, 0:41', NULL),
(2, 'BR002', 1, 5, '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'Sabun', 'Lifeboy', '1800', '3000', 'PCS', '38', '6 October 2020, 0:41', '6 October 2020, 0:54'),
(3, 'BR003', 1, 1, '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'Pulpen', 'Standard', '1500', '2000', 'PCS', '70', '6 October 2020, 1:34', NULL),
(4, 'BR004', 0, 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '10000', '12000', 'PCS', '14', '25 April 2024, 9:33', NULL),
(5, 'BR005', 0, 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '12000', '15000', 'PCS', '122', '25 April 2024, 9:45', NULL),
(6, 'BR006', 6, 12, 'ok', 'Ari@gmail.com', 'pav', '1', '2', '3', '4', '5', '6', '7', '8', '9', '', '', '10000', '11000', 'PCS', '111', '25 April 2024, 11:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `tgl_input` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `tgl_input`) VALUES
(1, 'Jakarta', '7 May 2017, 10:23'),
(5, 'bandung', '7 May 2017, 10:28'),
(6, 'Bekasi', '6 October 2020, 0:19'),
(7, 'Tangerang', '6 October 2020, 0:20'),
(8, 'Palembang', '22 April 2024, 13:42'),
(9, 'Pontianak', '22 April 2024, 13:42'),
(10, 'Surabaya', '22 April 2024, 13:42'),
(11, 'Denpasar', '22 April 2024, 13:42'),
(12, 'Solo', '22 April 2024, 13:42'),
(13, 'Tangerang', '22 April 2024, 13:42'),
(14, 'Cilegon', '22 April 2024, 13:42'),
(15, 'Jember', '22 April 2024, 13:42'),
(16, 'Batam', '22 April 2024, 13:43'),
(17, 'Ujung Padang', '22 April 2024, 13:43'),
(18, 'Cirebon', '22 April 2024, 13:43'),
(19, 'Tasikmalaya', '22 April 2024, 13:43'),
(20, 'Sukabumi', '22 April 2024, 13:43'),
(21, 'Bogor', '22 April 2024, 13:43'),
(22, 'Cikarang', '22 April 2024, 13:43'),
(23, 'Bandar Lampung', '22 April 2024, 13:43'),
(24, 'Sidoarjo', '22 April 2024, 13:44'),
(25, 'Medan', '22 April 2024, 13:44'),
(26, 'Depok', '22 April 2024, 13:44'),
(27, 'Semarang', '22 April 2024, 13:44'),
(28, 'Pekanbaru', '22 April 2024, 13:44'),
(29, 'Magelang', '22 April 2024, 13:44'),
(30, 'Kupang', '22 April 2024, 13:44'),
(31, 'Probolinggo', '22 April 2024, 13:44'),
(32, 'Banjarmasin', '22 April 2024, 13:44'),
(33, 'Kediri', '22 April 2024, 13:44'),
(34, 'Jayapura', '22 April 2024, 13:45'),
(35, 'Tanjung Pandan', '22 April 2024, 13:45'),
(36, 'Palangkaraya', '22 April 2024, 13:45'),
(37, 'Padang', '22 April 2024, 13:45'),
(38, 'Pangkal Pinang', '22 April 2024, 13:45'),
(39, 'Palu', '22 April 2024, 13:45'),
(40, 'Ternate', '22 April 2024, 13:45'),
(41, 'Ambon', '22 April 2024, 13:46'),
(42, 'Pasuruan', '22 April 2024, 13:46'),
(43, 'Purwakarta', '22 April 2024, 13:46'),
(44, 'Karawang', '22 April 2024, 13:46');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` char(32) NOT NULL,
  `id_member` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `user`, `pass`, `id_member`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 1),
(2, 'miftahulrizal', '827ccb0eea8a706c4c34a16891f84e7b', 2);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `nm_member` varchar(255) NOT NULL,
  `alamat_member` text NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gambar` text NOT NULL,
  `NIK` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nm_member`, `alamat_member`, `telepon`, `email`, `gambar`, `NIK`) VALUES
(1, 'Miftahul rizal', 'uj harapan', '081234567890', 'example@gmail.com', '1713754967joni.jpg', '12314121');

-- --------------------------------------------------------

--
-- Table structure for table `nota`
--

CREATE TABLE `nota` (
  `id_nota` int(11) NOT NULL,
  `id_barang` varchar(255) NOT NULL,
  `id_member` int(11) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `tanggal_input` varchar(255) NOT NULL,
  `periode` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `nota`
--

INSERT INTO `nota` (`id_nota`, `id_barang`, `id_member`, `jumlah`, `total`, `tanggal_input`, `periode`) VALUES
(1, 'BR001', 1, '1', '3000', '16 May 2024, 9:37', '05-2024'),
(2, 'BR001', 1, '1', '3000', '16 May 2024, 9:37', '05-2024');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjualan` int(11) NOT NULL,
  `id_barang` varchar(255) NOT NULL,
  `id_member` int(11) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `tanggal_input` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `regional`
--

CREATE TABLE `regional` (
  `id_regional` int(11) NOT NULL,
  `nama_regional` varchar(255) NOT NULL,
  `tgl_input` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `regional`
--

INSERT INTO `regional` (`id_regional`, `nama_regional`, `tgl_input`) VALUES
(1, 'Jakarta', '7 May 2017, 10:23'),
(5, 'Jawa Barat', '7 May 2017, 10:28'),
(6, 'Jawa Tengah', '6 October 2020, 0:19'),
(7, 'BoDeTaBekCil', '6 October 2020, 0:20'),
(8, 'Sumatra', '22 April 2024, 13:39'),
(9, 'Kalimantan', '22 April 2024, 13:40'),
(10, 'JTBNN', '22 April 2024, 13:40'),
(11, 'Sulam Papua', '22 April 2024, 13:40');

-- --------------------------------------------------------

--
-- Table structure for table `toko`
--

CREATE TABLE `toko` (
  `id_toko` int(11) NOT NULL,
  `nama_toko` varchar(255) NOT NULL,
  `alamat_toko` text NOT NULL,
  `tlp` varchar(255) NOT NULL,
  `nama_pemilik` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `toko`
--

INSERT INTO `toko` (`id_toko`, `nama_toko`, `alamat_toko`, `tlp`, `nama_pemilik`) VALUES
(2, 'Merchandise Promotion and Activation', 'Tomang 11', '-', '-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`id_nota`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- Indexes for table `regional`
--
ALTER TABLE `regional`
  ADD PRIMARY KEY (`id_regional`);

--
-- Indexes for table `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`id_toko`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nota`
--
ALTER TABLE `nota`
  MODIFY `id_nota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_penjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `regional`
--
ALTER TABLE `regional`
  MODIFY `id_regional` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `toko`
--
ALTER TABLE `toko`
  MODIFY `id_toko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
