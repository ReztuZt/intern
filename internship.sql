-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2024 at 10:07 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama_admin` varchar(42) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp(),
  `image_admin` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_admin`, `created`, `modified`, `image_admin`, `status`) VALUES
(1, 'tyy', '$2y$10$9.zBCBaXb9mUSFtVyx9dq.opd', 'restu', '2024-01-17 03:46:06', '2024-01-17 03:46:06', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `ussername` int(20) NOT NULL,
  `password` int(32) NOT NULL,
  `nama_admin` int(42) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(1, 'Pemrograman Java Lanjutan', '2024-04-05', '18', '0csdc', 'Kursus ini membahas topik pemrograman Java tingkat lanjut untuk pengembang berpengalaman.', 'Restu Setiawan', '201.99'),
(2, 'Dasar-dasar Pembelajaran Mesin', '2024-05-20', '32', 'isinya test', 'Jelajahi dasar-dasar pembelajaran mesin dan pahami algoritma-algoritma populer.', 'Rido Susepto', '179.99'),
(3, 'Pengembangan Aplikasi Mobile dengan React Native', '2024-06-15', '15', '0', 'Pelajari React Native untuk mengembangkan aplikasi mobile yang dapat berjalan di platform iOS dan Android.', 'Andika Dwi Saputra', '149.99'),
(4, 'Animasi Dasar', '2024-01-10', '20', '0', 'Pelatihan dasar untuk menguasai teknik animasi', 'John Doe', '100.00'),
(5, 'Animasi Lanjutan', '2024-02-15', '15', '0', 'Pelatihan untuk meningkatkan keterampilan animasi', 'Jane Smith', '150.00'),
(6, 'Teknik Animasi 3D', '2024-03-20', '12', '0', 'Belajar teknik animasi tiga dimensi', 'Bob Johnson', '200.00');

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
  `status_nama` varchar(50) NOT NULL,
  `course_nama` varchar(255) NOT NULL,
  `course_code` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_magang`
--

INSERT INTO `tb_magang` (`id_magang`, `magang_nip`, `magang_nama`, `magang_email`, `magang_ttl`, `magang_telp`, `magang_agama`, `magang_gender`, `magang_alamat`, `magang_kota`, `magang_kodepos`, `magang_ktp`, `magang_portofolio`, `magang_payment`, `status_nama`, `course_nama`, `course_code`) VALUES
(1, '123456', 'John Doe', 'john.doe@example.com', '1990-01-01', '123456789', 'Islam', 'Male', '123 Main Street', 'Rakit', '12345', '1234567890123456', 'http://example.com/portofolio1', 'Paids', 'Pending', 'Teknik Animasi 3D', 'TA3'),
(2, '789012', 'Jane Smith', 'jane.smith@example.com', '1992-05-15', '987654321', 'Christiani', 'Female', '456 Oak Avenue', 'Townsville', '56789', '7890123456789012', 'http://example.com/portofolio2', 'Unpaid', 'Pending', 'Teknik Motion Graphics', 'TMG'),
(3, '345678', 'Bob Johnson', 'bob.johnson@example.com', '1985-08-20', '567890123', 'Buddhism', 'Male', '789 Pine Road', 'Villagetown', '67890', '3456789012345678', 'http://example.com/portofolio3', 'Paid', 'Active', '', ''),
(4, '901234', 'Alice Brown', 'alice.brown@example.com', '1998-03-12', '234567890', 'Hinduism', 'Female', '890 Elm Street', 'Hamletville', '78901', '9012345678901234', 'http://example.com/portofolio4', 'Unpaid', 'Active', 'Memanusiakan Manusia', 'MM'),
(5, '456789', 'Charlie Davis', 'charlie.davis@example.com', '1980-11-28', '345678901', 'Judaism', 'Male', '123 Cedar Lane', 'Cityburg', '23456', '4567890123456789', 'http://example.com/portofolio5', 'Paid', 'Active', '', 'TA3'),
(84442, '12345678', 'Restu Setiawan', 'restusetiawan948@gmail.com', 'Rakit, Banjarnegara Jawa Tengah', '081229382848', 'Islam', 'Pria', 'Surakarta', 'Surakarta', '84445', '5765', 'Testing', 'BCA', 'Active', 'Animasi Karakter 101', 'AK1'),
(84444, 'NIP123', 'Rido Susepto', 'djj@gmail.com', '', '081229382848', 'Islam', 'L', 'rumah nomer 100', 'Rakit', '839232', '93245769410572658', '', 'dine', 'Active', 'Animasi Karakter 101', 'AK1'),
(84445, 'NIP001', 'Tia Ayu Lestari', 'tiaayu2306@gmail.com', '', '34', '', '', 'Rakit', '', '', '', '', '', 'Pending', 'Animasi Karakter 101', 'AK1'),
(84453, 'd', 'sd', 'sa', 'asd', 'd', 'as', 'd', 'asd', 'sad', 'as', 'dsa', 'd', 'sads', 'Active', 'das', 'sd'),
(84454, '121', 'Andika Dwi Saputra', 'adnika.dwi.saputra@gmail.com', 'Juni 2020', '081229382828', 'Islam', 'pria', 'Banjarnegara', 'Bogor', '08', 'ada', 'aslkd', 'BRI', 'Active', 'Animasi Karakter 101', 'AK1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_payment`
--

CREATE TABLE `tb_payment` (
  `payment_id` int(11) NOT NULL,
  `magang_nip` varchar(50) DEFAULT NULL,
  `payment_metode` varchar(255) DEFAULT NULL,
  `payment_status` varchar(50) DEFAULT NULL,
  `payment_catatan` varchar(255) DEFAULT NULL,
  `payment_date` datetime DEFAULT NULL,
  `payment_file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_payment`
--

INSERT INTO `tb_payment` (`payment_id`, `magang_nip`, `payment_metode`, `payment_status`, `payment_catatan`, `payment_date`, `payment_file`) VALUES
(1, '123456789', 'Credit Card', 'Pending', 'Payment for services', '2024-01-12 12:30:00', 'invoice123.pdf'),
(2, '12345678', 'Bank BNI', '1', 'hkj', '2003-03-31 00:00:00', '1a2d8dee74e569ca143c522cb48150b7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelatihan`
--

CREATE TABLE `tb_pelatihan` (
  `pelatihan_id` int(20) NOT NULL,
  `course_nama` varchar(50) DEFAULT NULL,
  `magang_nip` varchar(50) DEFAULT NULL,
  `pelatihan_ket` varchar(1000) DEFAULT NULL,
  `course_code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pelatihan`
--

INSERT INTO `tb_pelatihan` (`pelatihan_id`, `course_nama`, `magang_nip`, `pelatihan_ket`, `course_code`) VALUES
(1, 'Animasi Karakter 101', 'NIP001', 'Pelatihan dasar animasi karakter menggunakan software', 'AK1'),
(2, 'Teknik Motion Graphics', 'NIP002', 'Pelatihan mengenai teknik motion graphics dalam animasi', 'TMG'),
(3, 'Teknik Animasi 3D', 'NIP003', 'Pelatihan tingkat lanjut dalam animasi tiga dimensi', 'TA3'),
(9, 'Memanusiakan Manusia', NULL, 'Cara memanusiakan Manusia', 'MM'),
(10, 'Pemrograman Java Lanjutan', NULL, 'java here', 'PJA'),
(11, 'Pengembangan Aplikasi Mobile dengan React Native', NULL, 'MObile Programming', 'PAM');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status`
--

CREATE TABLE `tb_status` (
  `status_id` int(11) NOT NULL,
  `status_nama` varchar(50) DEFAULT NULL,
  `status_ket` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_status`
--

INSERT INTO `tb_status` (`status_id`, `status_nama`, `status_ket`) VALUES
(1, 'Active', 'Status aktif'),
(2, 'Inactive', 'Status tidak aktif'),
(3, 'Pending', 'Menunggu konfirmasi'),
(4, 'Completed', 'Selesai'),
(5, 'Canceled', 'Dibatalkan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

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
-- Indexes for table `tb_payment`
--
ALTER TABLE `tb_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tb_pelatihan`
--
ALTER TABLE `tb_pelatihan`
  ADD PRIMARY KEY (`pelatihan_id`);

--
-- Indexes for table `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`status_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_course`
--
ALTER TABLE `tb_course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_magang`
--
ALTER TABLE `tb_magang`
  MODIFY `id_magang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84455;

--
-- AUTO_INCREMENT for table `tb_payment`
--
ALTER TABLE `tb_payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_pelatihan`
--
ALTER TABLE `tb_pelatihan`
  MODIFY `pelatihan_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_status`
--
ALTER TABLE `tb_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
