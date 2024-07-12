-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jul 2024 pada 09.55
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `budiuas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_acara`
--

CREATE TABLE `jadwal_acara` (
  `id` int(11) NOT NULL,
  `nama_acara` varchar(100) DEFAULT NULL,
  `lokasi_acara` varchar(100) DEFAULT NULL,
  `tanggal_acara` date DEFAULT NULL,
  `harga_tiket` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jadwal_acara`
--

INSERT INTO `jadwal_acara` (`id`, `nama_acara`, `lokasi_acara`, `tanggal_acara`, `harga_tiket`) VALUES
(1, 'Konser Musik Malam Tahun Baru', 'Gedung Kesenian Jakarta', '2024-12-31', 500000.00),
(2, 'Pentas Seni Budaya', 'Taman Ismail Marzuki', '2024-09-15', 250000.00),
(3, 'Festival Film Internasional', 'XXI Plaza Senayan', '2024-11-20', 300000.00),
(4, 'Pameran Seni Rupa Modern', 'Museum Seni Rupa Jakarta', '2024-10-05', 150000.00);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran_tiket`
--

CREATE TABLE `pembayaran_tiket` (
  `id` int(11) NOT NULL,
  `metode_pembayaran` varchar(50) DEFAULT NULL,
  `tanggal_pembayaran` date DEFAULT NULL,
  `jumlah_pembayaran` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pembayaran_tiket`
--

INSERT INTO `pembayaran_tiket` (`id`, `metode_pembayaran`, `tanggal_pembayaran`, `jumlah_pembayaran`) VALUES
(1, 'Transfer Bank', '2024-11-16', 1000000.00),
(2, 'Kartu Kredit', '2024-09-11', 750000.00),
(3, 'Tunai', '2024-10-26', 300000.00),
(4, 'Transfer Bank', '2024-08-31', 600000.00);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan_tiket`
--

CREATE TABLE `pemesanan_tiket` (
  `id` int(11) NOT NULL,
  `nama_pemesan` varchar(100) DEFAULT NULL,
  `jumlah_tiket` int(11) DEFAULT NULL,
  `tanggal_pemesanan` date DEFAULT NULL,
  `total_harga` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pemesanan_tiket`
--

INSERT INTO `pemesanan_tiket` (`id`, `nama_pemesan`, `jumlah_tiket`, `tanggal_pemesanan`, `total_harga`) VALUES
(1, 'Budi Santoso', 2, '2024-11-15', 1000000.00),
(2, 'Ani Rahayu', 3, '2024-09-10', 750000.00),
(3, 'Joko Widodo', 1, '2024-10-25', 300000.00),
(4, 'Siti Nurhayati', 4, '2024-08-30', 600000.00);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jadwal_acara`
--
ALTER TABLE `jadwal_acara`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembayaran_tiket`
--
ALTER TABLE `pembayaran_tiket`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pemesanan_tiket`
--
ALTER TABLE `pemesanan_tiket`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jadwal_acara`
--
ALTER TABLE `jadwal_acara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pembayaran_tiket`
--
ALTER TABLE `pembayaran_tiket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pemesanan_tiket`
--
ALTER TABLE `pemesanan_tiket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
