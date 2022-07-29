-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jul 2022 pada 05.21
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `panasonic`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kode_asset`
--

CREATE TABLE `kode_asset` (
  `Nomor` int(100) NOT NULL,
  `Dept` varchar(100) NOT NULL,
  `Kode_Dept` varchar(35) NOT NULL,
  `Newtype` varchar(35) NOT NULL,
  `PA_Number` varchar(35) NOT NULL,
  `New_IP_Number` varchar(50) NOT NULL,
  `PIC` varchar(100) NOT NULL,
  `New_User_Name` varchar(50) NOT NULL,
  `AD` varchar(35) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `Brand` varchar(30) NOT NULL,
  `Type` varchar(100) NOT NULL,
  `Processor` varchar(100) NOT NULL,
  `RAM` varchar(30) NOT NULL,
  `HDD` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kode_asset`
--

INSERT INTO `kode_asset` (`Nomor`, `Dept`, `Kode_Dept`, `Newtype`, `PA_Number`, `New_IP_Number`, `PIC`, `New_User_Name`, `AD`, `Location`, `Brand`, `Type`, `Processor`, `RAM`, `HDD`) VALUES
(1, 'CP Production Control', 'C000025', 'Dekstop', 'PCB104', '158.118.35.171', 'Sutrisno', 'PCBG5', 'SCM', 'Back Office', 'Dell', 'Dell Vostro 3670', 'Intel core i3-9100', '4GB', '1 TB SATA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_pengguna` int(100) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `role` varchar(100) NOT NULL DEFAULT 'user',
  `Password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kode_asset`
--
ALTER TABLE `kode_asset`
  ADD PRIMARY KEY (`Nomor`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kode_asset`
--
ALTER TABLE `kode_asset`
  MODIFY `Nomor` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_pengguna` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
