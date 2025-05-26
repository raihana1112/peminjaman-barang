-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2025 at 06:37 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peminjaman_barang`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama_lengkap`, `email`, `no_hp`, `username`, `password`) VALUES
(1, 'admin prodi', 'admin123@gmail.com', '081234567890', 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jenis_barang` varchar(30) NOT NULL,
  `merk_barang` varchar(50) NOT NULL,
  `kondisi_barang` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `jenis_barang`, `merk_barang`, `kondisi_barang`) VALUES
(1, 'Kunci Lab 12 07', 'Kunci Ruangan', '12 07', 'Bagus'),
(2, 'Kunci Lab 12 09', 'Kunci Ruangan', '12 09', 'Bagus');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `nama_peminjam` varchar(50) NOT NULL,
  `nim` varchar(40) NOT NULL,
  `no_hp` varchar(25) NOT NULL,
  `foto_identitas` text NOT NULL,
  `mata_kuliah` text NOT NULL,
  `ruang_kuliah` varchar(50) NOT NULL,
  `dosen_pengampu` text NOT NULL,
  `jam_mulai_mk` time NOT NULL,
  `jam_selesai_mk` time NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_balik` date NOT NULL,
  `status_ketersediaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `id_barang`, `nama_peminjam`, `nim`,`no_hp`, `foto_identitas`, `mata_kuliah`, `ruang_kuliah`, `dosen_pengampu`, `jam_mulai_mk`, `jam_selesai_mk`, `tgl_pinjam`, `tgl_balik`, `status_ketersediaan`) VALUES
(5, 1, 'Rizki', '1907050', `081234567890`,'fakultas.jpg', 'Teknologi Informasi', 'Lab 12 07', 'Bu Malahayati', '16:00:00', '17:15:00', '2025-05-08', '2025-05-08', 'Sudah Dikembalikan'),
(6, 2, 'Rizki Analdi', '1907050000', `085300248112`,'rektorat.jpeg', 'Teknologi Informasi', 'Lab 12 09', 'Pak Khairan', '17:30:00', '18:10:00', '2025-05-08', '0000-00-00', 'Sedang Dipinjam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_barang` (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
