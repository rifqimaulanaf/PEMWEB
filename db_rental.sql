-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jun 2021 pada 13.26
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rental`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pass` varchar(8) NOT NULL,
  `no_tlp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama`, `pass`, `no_tlp`) VALUES
(1, 'rifqy', 'rifqy123', '087783305971'),
(2, 'rizky abi', 'rizky123', '081249225550');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_cus`
--

CREATE TABLE `tb_cus` (
  `id_cus` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_tlp` varchar(50) NOT NULL,
  `noktp` varchar(16) NOT NULL,
  `jaminan` varchar(50) NOT NULL,
  `Tujuan` varchar(25) NOT NULL,
  `sewa` varchar(3) NOT NULL,
  `ket_sopir` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_history`
--

CREATE TABLE `tb_history` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_tlp` varchar(13) NOT NULL,
  `noktp` varchar(16) NOT NULL,
  `jaminan` varchar(50) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `sewa` varchar(3) NOT NULL,
  `ket_sopir` varchar(5) NOT NULL,
  `sopir` varchar(50) NOT NULL,
  `mobil` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mobil`
--

CREATE TABLE `tb_mobil` (
  `id_mobil` int(10) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `no_plat` varchar(50) NOT NULL,
  `harga_harian` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_mobil`
--

INSERT INTO `tb_mobil` (`id_mobil`, `merk`, `no_plat`, `harga_harian`, `gambar`) VALUES
(1, 'AGYA', 'L 1234 A', '250000', ''),
(2, 'AYLA', 'L 5678', '250000', ''),
(3, 'GRAND MAX', 'W 9012 C', '250000', ''),
(4, 'LUXIO', 'W 3456 D', '250000', ''),
(5, 'BRIO', 'W 7890 E', '250000', ''),
(6, 'G LIVINA', 'W 987 F', '275000', ''),
(7, 'NEW AVANZA', 'W 6543 G', '275000', ''),
(8, 'NEW XENIA', 'W 2109 H', '275000', ''),
(9, 'TERIOS', 'W 1357 I', '275000', ''),
(10, 'MOBILIO', 'W 9753 J', '300000', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sopir`
--

CREATE TABLE `tb_sopir` (
  `id_sopir` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_tlp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_sopir`
--

INSERT INTO `tb_sopir` (`id_sopir`, `nama`, `alamat`, `no_tlp`) VALUES
(1, 'Bejo Sutejo', 'surabaya', '081234325645'),
(2, 'Kirman Sukirman', 'Surabaya', '081247489302'),
(3, 'Armin ', 'Surabaya', '081346728094'),
(4, 'Levi', 'Sidoarjo', '081346782987'),
(5, 'Eren', 'Sidoarjo', '081287604983');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_tlp` varchar(13) NOT NULL,
  `noktp` varchar(16) NOT NULL,
  `jaminan` varchar(50) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `sewa` varchar(3) NOT NULL,
  `ket_sopir` varchar(5) NOT NULL,
  `sopir` varchar(50) NOT NULL,
  `mobil` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tb_cus`
--
ALTER TABLE `tb_cus`
  ADD PRIMARY KEY (`id_cus`);

--
-- Indeks untuk tabel `tb_history`
--
ALTER TABLE `tb_history`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_mobil`
--
ALTER TABLE `tb_mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indeks untuk tabel `tb_sopir`
--
ALTER TABLE `tb_sopir`
  ADD PRIMARY KEY (`id_sopir`);

--
-- Indeks untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_cus`
--
ALTER TABLE `tb_cus`
  MODIFY `id_cus` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_history`
--
ALTER TABLE `tb_history`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_mobil`
--
ALTER TABLE `tb_mobil`
  MODIFY `id_mobil` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_sopir`
--
ALTER TABLE `tb_sopir`
  MODIFY `id_sopir` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
