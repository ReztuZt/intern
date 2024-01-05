-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2024 at 08:35 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internship`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_magang`
--

CREATE TABLE `tb_magang` (
  `id_magang` int(10) NOT NULL,
  `magang_nip` varchar(50) NOT NULL,
  `magang_nama` varchar(50) NOT NULL,
  `magang_email` varchar(50) NOT NULL,
  `magang_ttl` varchar(100) NOT NULL,
  `magang_telp` varchar(20) NOT NULL,
  `magang_agama` varchar(10) NOT NULL,
  `magang_gender` varchar(20) NOT NULL,
  `magang_alamat` varchar(150) NOT NULL,
  `magang_kota` varchar(50) NOT NULL,
  `magang_kodepos` varchar(10) NOT NULL,
  `magang_ktp` varchar(20) NOT NULL,
  `magang_portofolio` varchar(255) NOT NULL,
  `magang_payment` varchar(20) NOT NULL,
  `status_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_magang`
--

INSERT INTO `tb_magang` (`id_magang`, `magang_nip`, `magang_nama`, `magang_email`, `magang_ttl`, `magang_telp`, `magang_agama`, `magang_gender`, `magang_alamat`, `magang_kota`, `magang_kodepos`, `magang_ktp`, `magang_portofolio`, `magang_payment`, `status_nama`) VALUES
(84442, '12345678', 'Restu Setiawan', 'restusetiawan948@gmail.com', 'Rakit, Banjarnegara Jawa Tengah', '081229382848', 'Islam', 'Pria', 'Surakarta', 'Surakarta', '84445', '5765', 'kdhf', 'BCA', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_magang`
--
ALTER TABLE `tb_magang`
  ADD PRIMARY KEY (`id_magang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_magang`
--
ALTER TABLE `tb_magang`
  MODIFY `id_magang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84443;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
