-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Apr 2024 pada 03.26
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentalbuku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `penulis` varchar(250) NOT NULL,
  `genre` varchar(250) NOT NULL,
  `tahun` int(11) NOT NULL,
  `deskription` varchar(250) NOT NULL,
  `hargasewa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `judul`, `penulis`, `genre`, `tahun`, `deskription`, `hargasewa`) VALUES
(1, 'Roh Nubuat Dan PAraNabi', 'Ellen G.White', 'Rohani', 1999, 'Buku Advent Nubuatan', 15000),
(2, 'Amanat Kepada Orang Muda', 'Ellen G.White', 'Rohani', 1999, 'Buku Rohani Advent', 80000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rental`
--

CREATE TABLE `rental` (
  `idUser` int(11) NOT NULL,
  `idBuku` int(11) NOT NULL,
  `tanggalSewa` varchar(250) NOT NULL,
  `tanggalpengambalian` varchar(250) NOT NULL,
  `status` varchar(250) DEFAULT NULL,
  `Harga` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `rental`
--

INSERT INTO `rental` (`idUser`, `idBuku`, `tanggalSewa`, `tanggalpengambalian`, `status`, `Harga`) VALUES
(3, 1, '19/4/2024', '20/4/2024', NULL, '15000'),
(3, 1, '18/4/2024', '21/4/2024', NULL, '45000'),
(3, 1, '18/4/2024', '20/4/2024', NULL, '30000'),
(5, 1, '17/4/2024', '18/4/2024', NULL, '15000'),
(3, 1, '19/4/2024', '27/4/2024', NULL, '120000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `namalengkap` varchar(250) NOT NULL,
  `Alamat` varchar(250) NOT NULL,
  `noTelepon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `namalengkap`, `Alamat`, `noTelepon`) VALUES
(2, '0', '123', '0', '0', '827'),
(3, 'farel', '123', 'farel', 'farel', '0812'),
(4, 'cynta', '123', 'chyntia', 'parongping', '08388336'),
(5, 'farel@unai.edu', '123', 'farell', 'unai', '123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
