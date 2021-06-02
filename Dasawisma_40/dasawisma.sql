-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Bulan Mei 2021 pada 08.05
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dasawisma`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `adasawisma`
--

CREATE TABLE `adasawisma` (
  `idadasawisma` int(11) NOT NULL,
  `NIK` varchar(20) NOT NULL,
  `Nama` varchar(75) NOT NULL,
  `Password` varchar(75) NOT NULL,
  `Alamat` varchar(75) NOT NULL,
  `NoHP` int(15) NOT NULL,
  `Email` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `adasawisma`
--

INSERT INTO `adasawisma` (`idadasawisma`, `NIK`, `Nama`, `Password`, `Alamat`, `NoHP`, `Email`) VALUES
(5, '12345', 'fajar', '1234', 'jl. H Usman, lrg Bakti AMD', 2147483647, 'nur.izzati@mhs.unsyiah.ac.id'),
(6, '12345678', 'iki', 'rumah', 'lingke', 2147483647, 'w@gmail.com'),
(7, '1234567890001', 'riski', 'riski', 'ajun', 2147483647, 'r@gmail.com'),
(8, '32165498701', 'tia', '1234', 'lingke', 2147483647, 't@gmail.com'),
(9, '123456789001', 'tia', '12345', 'lingke', 2147483647, 't@gmail.com'),
(10, '2345', 'lia', '5', 'kajhu', 2147483647, 'l@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluarga`
--

CREATE TABLE `keluarga` (
  `idkeluarga` int(11) NOT NULL,
  `NoKK` varchar(16) CHARACTER SET latin1 NOT NULL,
  `KepalaKeluarga` varchar(75) CHARACTER SET latin1 NOT NULL,
  `Dasawisma` varchar(75) CHARACTER SET latin1 NOT NULL,
  `Lingkungan` varchar(75) CHARACTER SET latin1 NOT NULL,
  `Kelurahan` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Kecamatan` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `keluarga`
--

INSERT INTO `keluarga` (`idkeluarga`, `NoKK`, `KepalaKeluarga`, `Dasawisma`, `Lingkungan`, `Kelurahan`, `Kecamatan`) VALUES
(1, '112571282192612', 'Yanto', 'Mawar II', 'Lingkungan V', 'Bandar Senembah', 'Binjai Barat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ketuadasawisma`
--

CREATE TABLE `ketuadasawisma` (
  `id_ketua` int(11) NOT NULL,
  `NIK` varchar(16) CHARACTER SET latin1 NOT NULL,
  `nama_ketua` varchar(75) CHARACTER SET latin1 NOT NULL,
  `Password` varchar(75) CHARACTER SET latin1 NOT NULL,
  `email` varchar(75) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ketuadasawisma`
--

INSERT INTO `ketuadasawisma` (`id_ketua`, `NIK`, `nama_ketua`, `Password`, `email`) VALUES
(1, '123412341234', 'Rifa Mustika', 'bandung11', 'rifaalbadi23@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ketuapkk`
--

CREATE TABLE `ketuapkk` (
  `id_pkk` int(11) NOT NULL,
  `NIK` varchar(16) CHARACTER SET latin1 NOT NULL,
  `Password` varchar(20) CHARACTER SET latin1 NOT NULL,
  `Nama_Kpkk` varchar(75) CHARACTER SET latin1 NOT NULL,
  `email` varchar(75) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelatihan`
--

CREATE TABLE `pelatihan` (
  `idpelatihan` int(11) NOT NULL,
  `NamaPelatihan` varchar(75) CHARACTER SET latin1 NOT NULL,
  `NIK` varchar(16) CHARACTER SET latin1 NOT NULL,
  `Nama` varchar(75) CHARACTER SET latin1 NOT NULL,
  `Tahun` int(4) NOT NULL,
  `Keterangan` varchar(150) CHARACTER SET latin1 NOT NULL,
  `Dasawisma` varchar(75) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelatihan`
--

INSERT INTO `pelatihan` (`idpelatihan`, `NamaPelatihan`, `NIK`, `Nama`, `Tahun`, `Keterangan`, `Dasawisma`) VALUES
(20, 'Pelatihan menanam Anggrek', '3215256306010005', 'Lina', 2022, 'Bersertifikat', 'Anggrek I');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perkarangan`
--

CREATE TABLE `perkarangan` (
  `idperkarangan` int(11) NOT NULL,
  `KepalaKeluarga` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Kategori` varchar(75) CHARACTER SET latin1 NOT NULL,
  `Komoditi` int(75) NOT NULL,
  `Jumlah` int(3) NOT NULL,
  `Dasawisma` int(75) NOT NULL,
  `Kendala` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `perkarangan`
--

INSERT INTO `perkarangan` (`idperkarangan`, `KepalaKeluarga`, `Kategori`, `Komoditi`, `Jumlah`, `Dasawisma`, `Kendala`) VALUES
(1, 'adi', '3', 12, 2, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `warga`
--

CREATE TABLE `warga` (
  `idwarga` int(11) NOT NULL,
  `NoKK` varchar(16) CHARACTER SET latin1 NOT NULL,
  `KepalaKeluarga` varchar(75) CHARACTER SET latin1 NOT NULL,
  `Dasawisma` varchar(75) CHARACTER SET latin1 NOT NULL,
  `Lingkungan` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Kelurahan` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Kecamatan` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `warga`
--

INSERT INTO `warga` (`idwarga`, `NoKK`, `KepalaKeluarga`, `Dasawisma`, `Lingkungan`, `Kelurahan`, `Kecamatan`) VALUES
(1, '12345', 'adin', 'Mawar III', 'Lingkungan II', 'Lingke', 'Syiah Kuala'),
(2, '12345', 'juki', 'mawar 1', '2', 'aceh', 'syiah kuala'),
(3, '2087489820201000', 'cahyo', 'mawar 1', '2', 'aceh', 'syiah kuala');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `adasawisma`
--
ALTER TABLE `adasawisma`
  ADD PRIMARY KEY (`idadasawisma`);

--
-- Indeks untuk tabel `keluarga`
--
ALTER TABLE `keluarga`
  ADD PRIMARY KEY (`idkeluarga`,`NoKK`);

--
-- Indeks untuk tabel `ketuadasawisma`
--
ALTER TABLE `ketuadasawisma`
  ADD PRIMARY KEY (`id_ketua`);

--
-- Indeks untuk tabel `ketuapkk`
--
ALTER TABLE `ketuapkk`
  ADD PRIMARY KEY (`id_pkk`);

--
-- Indeks untuk tabel `pelatihan`
--
ALTER TABLE `pelatihan`
  ADD PRIMARY KEY (`idpelatihan`,`NIK`);

--
-- Indeks untuk tabel `perkarangan`
--
ALTER TABLE `perkarangan`
  ADD PRIMARY KEY (`idperkarangan`);

--
-- Indeks untuk tabel `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`idwarga`,`NoKK`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `adasawisma`
--
ALTER TABLE `adasawisma`
  MODIFY `idadasawisma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `keluarga`
--
ALTER TABLE `keluarga`
  MODIFY `idkeluarga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `ketuadasawisma`
--
ALTER TABLE `ketuadasawisma`
  MODIFY `id_ketua` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `ketuapkk`
--
ALTER TABLE `ketuapkk`
  MODIFY `id_pkk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pelatihan`
--
ALTER TABLE `pelatihan`
  MODIFY `idpelatihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `perkarangan`
--
ALTER TABLE `perkarangan`
  MODIFY `idperkarangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `warga`
--
ALTER TABLE `warga`
  MODIFY `idwarga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
