-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2019 at 08:37 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ams`
--

-- --------------------------------------------------------

--
-- Table structure for table `cyi_akun`
--

CREATE TABLE `cyi_akun` (
  `nis` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `foto` text NOT NULL,
  `jekel` int(1) NOT NULL,
  `ambalan` int(2) NOT NULL,
  `tku` int(2) NOT NULL,
  `catatan` text,
  `hp` varchar(15) DEFAULT NULL,
  `whatsapp` varchar(15) DEFAULT NULL,
  `telegram` varchar(15) DEFAULT NULL,
  `desa` varchar(100) DEFAULT NULL,
  `kecamatan` varchar(100) DEFAULT NULL,
  `kabupaten` varchar(100) DEFAULT NULL,
  `rt` varchar(3) DEFAULT NULL,
  `rw` varchar(3) DEFAULT NULL,
  `facebook` varchar(200) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `instagram` varchar(100) DEFAULT NULL,
  `vlezo` varchar(100) DEFAULT NULL,
  `kelas` int(2) NOT NULL,
  `sangga` int(2) DEFAULT NULL,
  `angkatan` varchar(5) NOT NULL,
  `status` int(2) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cyi_akun`
--

INSERT INTO `cyi_akun` (`nis`, `email`, `nama`, `foto`, `jekel`, `ambalan`, `tku`, `catatan`, `hp`, `whatsapp`, `telegram`, `desa`, `kecamatan`, `kabupaten`, `rt`, `rw`, `facebook`, `twitter`, `instagram`, `vlezo`, `kelas`, `sangga`, `angkatan`, `status`, `password`) VALUES
('1111', 'mail.gilangas@gmail.com', 'Gilang Adi Sasongko', '10253_', 1, 1, 1, NULL, '085', '085', '085', '', '', '', NULL, NULL, '', NULL, '', '', 1, NULL, '2014', 1, 'b59c67bf196a4758191e42f76670ceba');

-- --------------------------------------------------------

--
-- Table structure for table `cyi_kegiatan_kategori`
--

CREATE TABLE `cyi_kegiatan_kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cyi_surat_keluar`
--

CREATE TABLE `cyi_surat_keluar` (
  `id` int(11) NOT NULL,
  `ambalan` int(1) NOT NULL,
  `jenis` int(11) NOT NULL,
  `angkatan` year(4) NOT NULL,
  `tanggal` varchar(12) NOT NULL,
  `no_surat` varchar(20) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cyi_surat_masuk`
--

CREATE TABLE `cyi_surat_masuk` (
  `id` int(11) NOT NULL,
  `ambalan` int(1) NOT NULL,
  `jenis` int(10) NOT NULL,
  `angkatan` year(4) NOT NULL,
  `tanggal` varchar(12) NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cyi__sku`
--

CREATE TABLE `cyi__sku` (
  `id` int(11) NOT NULL,
  `no` varchar(2) NOT NULL,
  `isi` text NOT NULL,
  `kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cyi_akun`
--
ALTER TABLE `cyi_akun`
  ADD PRIMARY KEY (`nis`),
  ADD KEY `kelas` (`kelas`),
  ADD KEY `sangga` (`sangga`);

--
-- Indexes for table `cyi_kegiatan_kategori`
--
ALTER TABLE `cyi_kegiatan_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cyi_surat_keluar`
--
ALTER TABLE `cyi_surat_keluar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jenis` (`jenis`);

--
-- Indexes for table `cyi_surat_masuk`
--
ALTER TABLE `cyi_surat_masuk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jenis` (`jenis`);

--
-- Indexes for table `cyi__sku`
--
ALTER TABLE `cyi__sku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cyi_kegiatan_kategori`
--
ALTER TABLE `cyi_kegiatan_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cyi_surat_keluar`
--
ALTER TABLE `cyi_surat_keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cyi_surat_masuk`
--
ALTER TABLE `cyi_surat_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cyi__sku`
--
ALTER TABLE `cyi__sku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
