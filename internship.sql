-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Feb 2024 pada 08.07
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama_admin` varchar(40) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `image_admin` varchar(225) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_admin`, `created`, `modified`, `image_admin`, `status`) VALUES
(15, 'rido444', '$2y$10$R.kQx9kZ9XJXtN2H1ZbUr.ngF', 'Rido Susepto', '2024-01-08 06:41:57', '2024-02-12 08:13:15', 'views/uploads/', 1),
(16, 'rido', '$2y$10$w9nPfdyIuVbd2O5zTa5NC.iSs', 'Rido susepto', '2024-01-08 08:58:33', '2024-02-05 03:42:20', '', 1),
(17, 'andika allo aaa', '$2y$10$yMwPdt9Iliyfy.voe9dDnO8qt', 'andika ds', '2024-01-08 10:15:16', '2024-01-11 03:53:34', 'path/to/your/uploaded/image.jpg', 1),
(18, 'monki', '$2y$10$zfxsBrYe5huKqi4qedwqfeNVq', 'monki', '2024-01-09 03:17:56', '2024-01-09 03:17:56', '', 1),
(19, 'restu setiawan', '$2y$10$AxWOk6u/oOq9lbe.bjcDY.xd4', 'restu', '2024-01-09 08:21:05', '2024-01-09 08:21:05', '', 1),
(20, 'ridoss', '$2y$10$V4YLbJqVMu9FLwXjz2L4t.awR', 'Rido Susepto 26', '2024-02-13 02:40:36', '2024-02-16 06:59:07', '', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `payment_detail`
--

CREATE TABLE `payment_detail` (
  `payment_detail_id` int(11) NOT NULL,
  `payment_id` int(11) DEFAULT NULL,
  `magang_nip` varchar(20) DEFAULT NULL,
  `payment_status` int(11) DEFAULT NULL,
  `payment_date` date DEFAULT NULL,
  `payment_catatan` varchar(255) DEFAULT NULL,
  `payment_file` varchar(255) DEFAULT NULL,
  `file_payment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_course`
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
-- Dumping data untuk tabel `tb_course`
--

INSERT INTO `tb_course` (`course_id`, `course_nama`, `course_tanggal`, `course_jumlah`, `course_ket`, `course_deskripsi`, `course_mentor`, `course_harga`) VALUES
(1, 'Pemrograman Java Lanjutan', '2024-04-05', '17777', '0csdc', 'Kursus ini membahas topik pemrograman Java tingkat lanjut untuk pengembang berpengalaman.', 'Restu Setiawan', '125.99'),
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
-- Struktur dari tabel `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `kelas_id` int(11) NOT NULL,
  `kelas_nama` varchar(100) NOT NULL,
  `course_nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_kelas`
--

INSERT INTO `tb_kelas` (`kelas_id`, `kelas_nama`, `course_nama`) VALUES
(2, 'XIIR', 'Animasi Dasar'),
(3, 'XI', 'NextJS'),
(4, 'XII', 'Animasi Lanjutan'),
(5, 'XI1', 'Animasi Dasar'),
(6, 'XIID', 'NextJS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_magang`
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
  `course_nama` varchar(50) NOT NULL,
  `course_code` varchar(20) NOT NULL,
  `kelaskategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_magang`
--

INSERT INTO `tb_magang` (`id_magang`, `magang_nip`, `magang_nama`, `magang_email`, `magang_ttl`, `magang_telp`, `magang_agama`, `magang_gender`, `magang_alamat`, `magang_kota`, `magang_kodepos`, `magang_ktp`, `magang_portofolio`, `magang_payment`, `status_nama`, `course_nama`, `course_code`, `kelaskategori`) VALUES
(84442, '12345678', 'Restu Setiawan', 'restusetiawan948@gmail.com', 'Rakit, Banjarnegara Jawa Tengah', '081229382848', 'Islam', 'Pria', 'Surakarta', 'Surakarta', '84445', '5765', 'kdhf', 'BCA', 'tidur', 'NextJS', '', 'Animasi Lanjutan | XII'),
(84444, '1234589', 'rrrrrrr', 'bb@gmail.com', '1234444', 'qwwwqwq', '', 'Perempuan', 'sasdadfsdsda', 'dsddsdsfds', '1111', '213', '213', '213', 'aktif j', 'haloo', '', ''),
(84446, '09090909', 'bbb', 'bb@gmail.com', '1234444', '1234444', 'islam', 'Prempuan', 'sasdadfsdsda', 'dsddsdsfds', '1111', '213', '213', '213', 'Pending', 'haloo', '', ''),
(84447, '643535565', 'rrrrr', 'suseptoridos@gmail.com', 'lkjlkj', '+6287865515935', 'Islam', 'jjklkjk', 'Rt3/Rw3 Klontong/ Karangsari/ 16 / Jl.Klontong', 'Banjarnegara', '53462', '566565576', 'lklkkj', 'bca', 'aktif j', 'kjkjkjkj', 'llklklk', ''),
(84448, '324364', 'yyyy', 'suseptoridos@gmail.com', 'iijkj', '+6287865515935', 'Hindu', 'Perempuan', 'Rt3/Rw3 Klontong/ Karangsari/ 16 / Jl.Klontong', 'Banjarnegara', '53462', 'kjjkkj', 'kjkj', 'kjkj', 'aktif j', 'mm', '', 'Animasi Lanjutan | XII'),
(84449, '324364', 'tttt', 'suseptoridos@gmail.com', 'lkjlkj', '+6287865515935', 'Buddha', 'Prempuan', 'Rt3/Rw3 Klontong/ Karangsari/ 16 / Jl.Klontong', 'Banjarnegara', '53462', 'hjjhh', 'iuhkkhk', 'lklkk', 'magang', 'Pemrograman Java Lanjutan', '', 'NextJS | XI'),
(84450, '1234589', 'Ahmad riadi', 'suseptoridos@gmail.com', '098766', '1234444', 'Kristen', 'Islam', 'sasdadfsdsda', 'dsddsdsfds', '1111', '213', 'unes', 'bca', 'magang', 'Teknik Animasi 3D', '1122', ''),
(84451, '098767', 'Budo', 'bb@gmail.com', '3422452426', '1234444', 'Katolik', 'Perempuan', 'sasdadfsdsda', 'dsddsdsfds', '1111', '2345678', 'hhhh', 'ovo', 'aktif j', 'c++', '', 'c++ | XIIttt'),
(84452, '1234589', 'Budo', 'budi@gmail.com', '3422452426', '1234444', 'Kristen', 'Prempuan', 'ddd', 'dsddsdsfds', '1111', '2345678', 'hhhh', 'ovo', 'magang', 'Pemrograman Java Lanjutan', '', 'NextJS | XI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_payment`
--

CREATE TABLE `tb_payment` (
  `payment_id` int(11) NOT NULL,
  `magang_nip` varchar(255) DEFAULT NULL,
  `payment_metode` varchar(50) DEFAULT NULL,
  `payment_status` int(11) DEFAULT NULL,
  `payment_catatan` varchar(255) DEFAULT NULL,
  `payment_date` date DEFAULT NULL,
  `payment_file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_payment`
--

INSERT INTO `tb_payment` (`payment_id`, `magang_nip`, `payment_metode`, `payment_status`, `payment_catatan`, `payment_date`, `payment_file`) VALUES
(6, '943109311930', 'Bank Mandiri', 3, 'lunas', '2024-01-18', 'Capture.PNG'),
(8, '943109311930', 'Ovo', 1, 'memunggu kepastian dari siswa', '2024-01-17', 'Capture.PNG'),
(9, '1234589', 'Bank BNI', 0, 'menunggu pembayaran', '2024-01-17', '8950656_10864.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelatihan`
--

CREATE TABLE `tb_pelatihan` (
  `pelatihan_id` int(20) NOT NULL,
  `course_nama` varchar(50) DEFAULT NULL,
  `pelatihan_ket` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pelatihan`
--

INSERT INTO `tb_pelatihan` (`pelatihan_id`, `course_nama`, `pelatihan_ket`) VALUES
(1, 'Animasi Dasar', 'Pelatihan dasar dalam dunia animasi, mencakup konsep-konsep dasar dan teknik-teknik animasi 2D.'),
(2, 'Animasi Lanjutan dan', 'Pelatihan lanjutan untuk pengembangan keterampilan animasi, mencakup teknik animasi 3D dan penggunaan perangkat lunak animasi terkini.'),
(3, 'Teknik Animasi 3D', 'Pelatihan khusus untuk teknik animasi tiga dimensi (3D), mencakup penggunaan perangkat lunak animasi 3D dan konsep-konsep terkait.'),
(4, 'NextJS', 'ayoooooaa'),
(5, 'c++', 'ayyyy');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_status`
--

CREATE TABLE `tb_status` (
  `status_id` int(11) NOT NULL,
  `status_nama` varchar(50) NOT NULL,
  `status_ket` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_status`
--

INSERT INTO `tb_status` (`status_id`, `status_nama`, `status_ket`) VALUES
(1, 'aktif j', 'halloo'),
(3, 'tidur', 'zzzzz'),
(4, 'magang', 'smk 1 punggelan'),
(5, '213', 'smk 1 punggelan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `payment_detail`
--
ALTER TABLE `payment_detail`
  ADD PRIMARY KEY (`payment_detail_id`),
  ADD KEY `payment_id` (`payment_id`);

--
-- Indeks untuk tabel `tb_course`
--
ALTER TABLE `tb_course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indeks untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`kelas_id`);

--
-- Indeks untuk tabel `tb_magang`
--
ALTER TABLE `tb_magang`
  ADD PRIMARY KEY (`id_magang`);

--
-- Indeks untuk tabel `tb_payment`
--
ALTER TABLE `tb_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indeks untuk tabel `tb_pelatihan`
--
ALTER TABLE `tb_pelatihan`
  ADD PRIMARY KEY (`pelatihan_id`);

--
-- Indeks untuk tabel `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`status_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `payment_detail`
--
ALTER TABLE `payment_detail`
  MODIFY `payment_detail_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `kelas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_magang`
--
ALTER TABLE `tb_magang`
  MODIFY `id_magang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84453;

--
-- AUTO_INCREMENT untuk tabel `tb_payment`
--
ALTER TABLE `tb_payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_pelatihan`
--
ALTER TABLE `tb_pelatihan`
  MODIFY `pelatihan_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_status`
--
ALTER TABLE `tb_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `payment_detail`
--
ALTER TABLE `payment_detail`
  ADD CONSTRAINT `payment_detail_ibfk_1` FOREIGN KEY (`payment_id`) REFERENCES `tb_payment` (`payment_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
