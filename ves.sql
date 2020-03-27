-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Mar 2020 pada 14.03
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ves`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dbves`
--

CREATE TABLE `dbves` (
  `id` int(10) UNSIGNED NOT NULL,
  `NAMA` varchar(50) NOT NULL,
  `NPM` varchar(15) NOT NULL,
  `JURUSAN` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dbves`
--

INSERT INTO `dbves` (`id`, `NAMA`, `NPM`, `JURUSAN`) VALUES
(1, 'Muhammad Januar Pribadi', '18082010027', 'Sistem Informasi'),
(2, 'Muhammad Yusuf Ardiansyah', '18082010001', 'Sistem Informasi'),
(3, 'carena learns prasetyo', '18082010042', 'sistem informasi'),
(4, 'ridwan', '18082010066', 'Sistem Informasi'),
(5, 'Rivaldo Hadi Winata', '18082010026', 'Sistem Informasi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dbves`
--
ALTER TABLE `dbves`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dbves`
--
ALTER TABLE `dbves`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
