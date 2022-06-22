-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jun 2022 pada 14.44
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_covid`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_recover`
--

CREATE TABLE `tb_recover` (
  `id` int(11) NOT NULL,
  `country` varchar(50) NOT NULL,
  `recover` int(50) NOT NULL,
  `cases` int(11) DEFAULT NULL,
  `newcases` int(11) DEFAULT NULL,
  `deaths` int(11) DEFAULT NULL,
  `newdeath` int(11) DEFAULT NULL,
  `newrecover` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_recover`
--

INSERT INTO `tb_recover` (`id`, `country`, `recover`, `cases`, `newcases`, `deaths`, `newdeath`, `newrecover`) VALUES
(1, 'India', 42633365, 43185049, 3714, 524708, 7, 2513),
(2, 'S.Korea', 17865591, 18168708, 5022, 24279, 21, 28085),
(3, 'Turkey', 14971256, 15072747, 0, 98965, 0, 0),
(4, 'Vietnam', 9513981, 10726045, 806, 43081, 1, 9026),
(5, 'Japan', 8711289, 8945784, 16130, 30752, 17, 24361),
(6, 'Iran', 7056206, 7232790, 59, 141332, 1, 713),
(7, 'Indonesia', 5897022, 6057142, 342, 156622, 7, 270),
(8, 'Malaysia', 4458999, 4516319, 1330, 35690, 2, 1881),
(9, 'Thailand', 4409248, 4468955, 2162, 30201, 27, 4879),
(10, 'Israel', 4124933, 4154566, 2580, 10864, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_recover`
--
ALTER TABLE `tb_recover`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_recover`
--
ALTER TABLE `tb_recover`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
