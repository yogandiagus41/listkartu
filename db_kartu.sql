-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Mar 2022 pada 01.08
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kartu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `listkartu`
--

CREATE TABLE `listkartu` (
  `noLaporan` varchar(255) NOT NULL,
  `waktuLaporan` varchar(255) NOT NULL,
  `jenisGangguan` varchar(255) NOT NULL,
  `subjenisGangguan` varchar(255) NOT NULL,
  `petugas` varchar(255) NOT NULL,
  `permasalahan` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `listkartu`
--

INSERT INTO `listkartu` (`noLaporan`, `waktuLaporan`, `jenisGangguan`, `subjenisGangguan`, `petugas`, `permasalahan`, `status`) VALUES
('442203122248', '22/03/22 44:48:12', 'Komunikasi Selular', 'Pulsa', 'Eko', 'Testing content', 'Wo Baru'),
('442203122253', '22/03/22 44:53:12', 'SARPEN', 'Pulsa', 'Eko', 'Testing content', 'Wo Baru'),
('442203122257', '22/03/22 44:57:12', 'ROIP', 'Pulsa', 'Eko', 'Testing content', 'Wo Baru'),
('452203122200', '22/03/22 45:00:12', 'Komunikasi Selular', 'CCTV', 'Eko', 'Testing content', 'Wo Baru'),
('452203122206', '22/03/22 45:06:12', 'Komunikasi Selular', 'Ponsel', 'Eko', 'Testing content', 'Wo Baru'),
('462203122228', '22/03/22 46:28:12', 'Komunikasi Selular', 'Panel Main', 'Eko', 'Testing content', 'Wo Baru'),
('472203122221', '22/03/22 47:21:12', 'SARPEN', 'CCTV', 'Eko', 'Testing content', 'Wo Baru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `imei` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `imei`) VALUES
('ts_01', '1234', 'A121321231MM');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
