-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Feb 2023 pada 11.03
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbperformance`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `username` varchar(5) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(10, 'dani', 'dani');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `nik` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `posisi` varchar(50) NOT NULL,
  `telepon` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`nik`, `nama`, `posisi`, `telepon`, `email`) VALUES
(40322, 'Muhammad khadafi', 'Chief Technology Operation (CEO)', '085222333444', 'khadafimuhammad@ctechnology.com'),
(40341, 'Sally Achmad', 'Software Engineer', '082121313446', 'sally@ctechnology.com'),
(40445, 'Samsul Bahri', 'UI UX Designer', '082111444555', 'bahri@ctechnology.com'),
(40667, 'Ismael Karawita', 'Software Engineer', '087666555333', 'ismael@ctechnology.com'),
(40772, 'Gusion Fabian', 'Office Boy (OB)', '082333111222', 'gusion@ctechnology.com'),
(40778, 'Khaleed Khasamiri', 'Software Engineer', '084111222333', 'khaleed@ctechnology.com'),
(40780, 'Sofyan zahiri', 'UI UX Designer', '088111122333', 'sofyan@ctechnology.com'),
(40881, 'Salsa Fadillah', 'Copy Writter', '087222333444', 'salsafadillah@ctechnology.com'),
(40923, 'Robert Cahyadi', 'Chief Executive Operation (CEO)', '081222333444', 'robertcahyadi@ctechnology.com'),
(40992, 'Mohammed Sumbul', 'Project Manager', '083222333000', 'sumbul@ctechnology.com'),
(40999, 'Usman Kanabawi', 'Marketing', '089222333444', 'usman@ctechnology.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_performance`
--

CREATE TABLE `tb_performance` (
  `id` int(5) NOT NULL,
  `nik` int(5) NOT NULL,
  `day` date NOT NULL,
  `worktime` int(2) NOT NULL,
  `overtime` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_performance`
--

INSERT INTO `tb_performance` (`id`, `nik`, `day`, `worktime`, `overtime`) VALUES
(5, 40445, '2023-01-04', 8, 0),
(6, 40341, '2023-01-03', 8, 0),
(7, 40667, '2023-01-04', 8, 0),
(8, 40772, '2023-01-04', 8, 3),
(9, 40778, '2023-01-04', 8, 8),
(10, 40992, '2023-01-04', 8, 0),
(11, 40780, '2023-01-04', 8, 1),
(12, 40923, '2023-01-04', 8, 0),
(13, 40881, '2023-01-04', 8, 0),
(15, 40322, '2023-01-03', 8, 0),
(16, 40780, '2023-01-03', 8, 0),
(17, 40778, '2023-01-03', 8, 3),
(18, 40992, '2023-01-03', 8, 2),
(19, 40923, '2023-01-03', 8, 4),
(21, 40772, '2023-01-07', 8, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_project`
--

CREATE TABLE `tb_project` (
  `id` int(5) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `pic` text NOT NULL,
  `status` varchar(8) NOT NULL,
  `mulai` date NOT NULL,
  `estimasi_selesai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `tb_performance`
--
ALTER TABLE `tb_performance`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_project`
--
ALTER TABLE `tb_project`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_performance`
--
ALTER TABLE `tb_performance`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tb_project`
--
ALTER TABLE `tb_project`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
