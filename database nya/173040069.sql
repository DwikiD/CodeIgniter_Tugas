-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20 Okt 2019 pada 13.56
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `173040069`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `hp`
--

CREATE TABLE `hp` (
  `id` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tipe` varchar(100) NOT NULL,
  `warna` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hp`
--

INSERT INTO `hp` (`id`, `nama`, `tipe`, `warna`) VALUES
('GW657i', 'xiaomi', 'Mi Mix 3', 'Blue'),
('HW-112', 'Huawei', 'Mate 30 Pro', 'Aurora Blue'),
('HW-761', 'Xiaomi', 'Mi9T pro', 'Blue choarcoal'),
('SF-123', 'Nokia', 'Lumia 110', 'White'),
('SM-231', 'Samsung ', 'Galaxy Note 10', 'Green Almond'),
('SM-321', 'Samsung ', 'Galaxy S10+', 'Light Blue'),
('ZP-111', 'Apple', 'Iphone 11 pro', 'Midnight Green');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hp`
--
ALTER TABLE `hp`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
