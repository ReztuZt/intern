-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2024 at 09:42 AM
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
-- Table structure for table `tb_course`
--

CREATE TABLE `tb_course` (
  `course_id` int(11) NOT NULL,
  `course_nama` varchar(100) NOT NULL,
  `course_tanggal` varchar(20) NOT NULL,
  `course_jumlah` varchar(20) NOT NULL,
  `course_ket` varchar(255) NOT NULL,
  `course_deskripsi` varchar(1000) NOT NULL,
  `course_mentor` varchar(50) NOT NULL,
  `course_harga` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_course`
--

INSERT INTO `tb_course` (`course_id`, `course_nama`, `course_tanggal`, `course_jumlah`, `course_ket`, `course_deskripsi`, `course_mentor`, `course_harga`) VALUES
(1, 'Pemrograman Java Lanjutan', '2024-04-05', '18', '0csdc', 'Kursus ini membahas topik pemrograman Java tingkat lanjut untuk pengembang berpengalaman.', 'Restu Setiawan', '125.99'),
(2, 'Dasar-dasar Pembelajaran Mesin', '2024-05-20', '32', '0', 'Jelajahi dasar-dasar pembelajaran mesin dan pahami algoritma-algoritma populer.', 'Rido Susepto', '179.99'),
(3, 'Pengembangan Aplikasi Mobile dengan React Native', '2024-06-15', '15', '0', 'Pelajari React Native untuk mengembangkan aplikasi mobile yang dapat berjalan di platform iOS dan Android.', 'Andika Dwi Saputra', '149.99'),
(4, 'Animasi Dasar', '2024-01-10', '20', '0', 'Pelatihan dasar untuk menguasai teknik animasi', 'John Doe', '100.00'),
(5, 'Animasi Lanjutan', '2024-02-15', '15', '0', 'Pelatihan untuk meningkatkan keterampilan animasi', 'Jane Smith', '150.00'),
(6, 'Teknik Animasi 3D', '2024-03-20', '12', '0', 'Belajar teknik animasi tiga dimensi', 'Bob Johnson', '200.00'),
(10, 'dsf', '43234-03-04', '23434', '342', '34\r\n\r\n324\r\n\r\n3\r\n\r\n\r\ndsf', 'fds', '4'),
(11, 'sa', '0213-03-31', '3123', '0', 'as\r\nd\r\nsd\r\n', 'asd', '3'),
(12, 'aku', '2024-01-24', '5', '0', 'deskripsi\r\n\r\n', 'mentor', '3');

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
(1, '123456', 'John Doeyx', 'john.doe@example.com', '1990-01-01', '123456789', 'Islam', 'Male', '123 Main Street', 'Cityville', '12345', '1234567890123456', 'http://example.com/portofolio1', 'Paid', 'Active'),
(2, '789012', 'Jane Smith', 'jane.smith@example.com', '1992-05-15', '987654321', 'Christiani', 'Female', '456 Oak Avenue', 'Townsville', '56789', '7890123456789012', 'http://example.com/portofolio2', 'Unpaid', 'Pending'),
(3, '345678', 'Bob Johnson', 'bob.johnson@example.com', '1985-08-20', '567890123', 'Buddhism', 'Male', '789 Pine Road', 'Villagetown', '67890', '3456789012345678', 'http://example.com/portofolio3', 'Paid', 'Active'),
(4, '901234', 'Alice Brown', 'alice.brown@example.com', '1998-03-12', '234567890', 'Hinduism', 'Female', '890 Elm Street', 'Hamletville', '78901', '9012345678901234', 'http://example.com/portofolio4', 'Unpaid', 'Inactive'),
(5, '456789', 'Charlie Davis', 'charlie.davis@example.com', '1980-11-28', '345678901', 'Judaism', 'Male', '123 Cedar Lane', 'Cityburg', '23456', '4567890123456789', 'http://example.com/portofolio5', 'Paid', 'Active'),
(84442, '12345678', 'Restu Setiawan', 'restusetiawan948@gmail.com', 'Rakit, Banjarnegara Jawa Tengah', '081229382848', 'Islam', 'Pria', 'Surakarta', 'Surakarta', '84445', '5765', 'Testing', 'BCA', 'Magang Lanjut'),
(84444, '', 'Rido Susepto', 'suseptoridos@gmail.com', '', '081229382838', '', '', 'Surakarta', '', '', '', '', '', 'Aktif'),
(84445, '', 'Tia Ayu Lestari', 'tiaayu2306@gmail.com', '', '34', '', '', 'Rakit', '', '', '', '', '', 'Nais'),
(84449, '2342', 'gfds', 'dgfsg', 'gds', 'dgfs', 'dfg', 'gds', 'dfsg', 'gdfd', 'dfsg', 'gfds', 'gdsgd', 'gfds', 'gsd'),
(84450, 'dsf', 'df', 'd', 'df', 'sf', 'ds', 'f', 's', 'dsf', 'df', 'sdf', 'ds', 'f', 'df');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelatihan`
--

CREATE TABLE `tb_pelatihan` (
  `pelatihan_id` int(20) NOT NULL,
  `course_nama` varchar(50) DEFAULT NULL,
  `magang_nip` varchar(50) DEFAULT NULL,
  `pelatihan_ket` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pelatihan`
--

INSERT INTO `tb_pelatihan` (`pelatihan_id`, `course_nama`, `magang_nip`, `pelatihan_ket`) VALUES
(1, 'Animasi Dasar', 'NIP123', 'Pelatihan dasar dalam dunia animasi, mencakup konsep-konsep dasar dan teknik-teknik animasi 2D.'),
(2, 'Animasi Lanjutan', 'NIP456', 'Pelatihan lanjutan untuk pengembangan keterampilan animasi, mencakup teknik animasi 3D dan penggunaan perangkat lunak animasi terkini.'),
(3, 'Teknik Animasi 3D', 'NIP789', 'Pelatihan khusus untuk teknik animasi tiga dimensi (3D), mencakup penggunaan perangkat lunak animasi 3D dan konsep-konsep terkait.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_course`
--
ALTER TABLE `tb_course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `tb_magang`
--
ALTER TABLE `tb_magang`
  ADD PRIMARY KEY (`id_magang`);

--
-- Indexes for table `tb_pelatihan`
--
ALTER TABLE `tb_pelatihan`
  ADD PRIMARY KEY (`pelatihan_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_course`
--
ALTER TABLE `tb_course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_magang`
--
ALTER TABLE `tb_magang`
  MODIFY `id_magang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84451;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
