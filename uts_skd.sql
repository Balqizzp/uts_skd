-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Okt 2021 pada 15.54
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skd`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `uts_skd`
--

CREATE TABLE `uts_skd` (
  `username` varchar(252) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `uts_skd`
--

INSERT INTO `uts_skd` (`username`, `name`, `email`, `password`) VALUES
('balqiz', 'Balqiz Prycilia', 'rycil@gmail.com', '$2y$10$6vyHIBdO.s962gVoUZrzROmvVJ99sRuQC555GJyQYLWl1iBHNiDjC'),
('satria', 'Aji Satria', 'balbal@gmail.com', '$2y$10$KUiEnrDrvV4l4612tj5My.kXJAK4O4Tce8/LIn6wIOSrwdMZTiP.6'),
('pasya', 'Pasya', 'pasya@gmail.com', '$2y$10$uUkEEk4ZubroLzG9lYAzzu8JS8xXefEP.Zw0fEuofE9hebMLmrhRy');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
