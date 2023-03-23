-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Mar 2023 pada 21.03
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
-- Database: `beasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(7) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `ipk` varchar(5) NOT NULL,
  `beasiswa` varchar(20) NOT NULL,
  `berkas` varchar(200) NOT NULL,
  `status_ajuan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `email`, `hp`, `semester`, `ipk`, `beasiswa`, `berkas`, `status_ajuan`) VALUES
('3121312', 'Benidiktus Himang', 'akuaa@gmail.com', '08537912421', 'semester 5', '34', 'Beasiswa Akdemik', 'ben.jpeg', 'Diverifikasi'),
('20000', 'Ramang', 'Ramang@wicida.ac.id', '31241254125', 'semester 3', '3.01', 'Beasiswa Akdemik', '20000.jpeg', 'Belum Diverifikasi'),
('2043074', 'Himang Uy', '2043074@wicida.ac.id', '4234234', 'semester 5', '2.75', 'Beasiswa non Akdemik', '2043074.jpg', 'Belum Diverifikasi');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
