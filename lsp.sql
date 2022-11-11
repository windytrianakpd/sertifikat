-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Nov 2022 pada 04.35
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lsp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat`
--

CREATE TABLE `surat` (
  `id` bigint(20) NOT NULL,
  `nomor_surat` varchar(255) NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `waktu_pengarsipan` date NOT NULL,
  `file_surat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `surat`
--

INSERT INTO `surat` (`id`, `nomor_surat`, `kategori`, `judul`, `waktu_pengarsipan`, `file_surat`) VALUES
(1, '2021/PD3/TU/001', 'Pengumuman', 'Nota Dinas WFH', '2022-11-06', 'Pengumuman LDK DAN DAFTAR PESERTA.pdf\r\n'),
(2, '2021/PD3/TU/002', 'Undangan', 'Undangan Halal Bi Halal', '2022-11-06', 'Pengumuman LDK DAN DAFTAR PESERTA.pdf\r\n'),
(3, 'demo', 'pengumuman', 'demo', '2022-11-06', 'Pengumuman LDK DAN DAFTAR PESERTA.pdf\r\n'),
(4, 'demo', 'pengumuman', 'demo', '2022-11-06', 'Soal Praktek PSDKU Kediri 2022 - Batch-02.pdf'),
(5, '2020/PD3/TU/002	', 'undangan', 'DEMO surrat', '2022-11-06', 'Soal Praktek PSDKU Kediri 2022 - Batch-02.pdf'),
(6, '2021/PD3/TU/003', 'notadinas', 'DEMO Nota Dinas', '2022-11-06', 'Soal Praktek PSDKU Kediri 2022 - Batch-02.pdf'),
(7, '2021/PD3/TU/004', 'pemberitahuan', 'DEMO surrat Pemberitahuan', '2022-11-06', 'Soal Praktek PSDKU Kediri 2022 - Batch-02.pdf'),
(8, '2021/PD3/TU/005', 'pemberitahuan', 'Demo Pemberitahuan', '2022-11-06', 'LH5_Fajar Setyo Wibowo_3C.pdf'),
(10, '2021/PD3/TU/006', 'pengumuman', 'demo', '2022-11-06', 'LH5_Fajar Setyo Wibowo_3C.pdf'),
(12, '2021/PD3/TU/007', 'notadinas', 'DEMO Nota Dinas', '2022-11-06', 'LH5_Fajar Setyo Wibowo_3C.pdf'),
(13, 'KDR01', 'pemberitahuan', 'Soal Praktek LSP', '2022-11-07', 'Soal Praktek PSDKU Kediri 2022 - Batch-02.pdf'),
(14, 'KDR02', 'undangan', 'Undangan', '2022-11-07', 'LH5_Fajar Setyo Wibowo_3C.pdf'),
(15, 'KDR03', 'pengumuman', 'Pengumuman LDK Tahun 2022', '2022-11-07', 'Pengumuman LDK DAN DAFTAR PESERTA.pdf');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `surat`
--
ALTER TABLE `surat`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
