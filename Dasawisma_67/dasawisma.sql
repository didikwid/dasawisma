-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2021 at 02:05 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

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
-- Table structure for table `adasawisma`
--

CREATE TABLE `adasawisma` (
  `idadasawisma` int(11) NOT NULL,
  `NIK` varchar(20) NOT NULL,
  `Nama` varchar(75) NOT NULL,
  `Password` varchar(75) NOT NULL,
  `Alamat` varchar(75) NOT NULL,
  `NoHP` varchar(15) NOT NULL,
  `Email` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adasawisma`
--

INSERT INTO `adasawisma` (`idadasawisma`, `NIK`, `Nama`, `Password`, `Alamat`, `NoHP`, `Email`) VALUES
(13, '12344', 'Rian', 'qwerrrrr', 'Banda Aceh', '082213425112', 'dani11@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `keluarga`
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
-- Dumping data for table `keluarga`
--

INSERT INTO `keluarga` (`idkeluarga`, `NoKK`, `KepalaKeluarga`, `Dasawisma`, `Lingkungan`, `Kelurahan`, `Kecamatan`) VALUES
(1, '112571282192612', 'Yanto', 'Mawar II', 'Lingkungan V', 'Bandar Senembah', 'Binjai Barat');

-- --------------------------------------------------------

--
-- Table structure for table `ketuadasawisma`
--

CREATE TABLE `ketuadasawisma` (
  `id_ketua` int(11) NOT NULL,
  `NIK` varchar(16) CHARACTER SET latin1 NOT NULL,
  `nama_ketua` varchar(75) CHARACTER SET latin1 NOT NULL,
  `Password` varchar(75) CHARACTER SET latin1 NOT NULL,
  `email` varchar(75) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ketuadasawisma`
--

INSERT INTO `ketuadasawisma` (`id_ketua`, `NIK`, `nama_ketua`, `Password`, `email`) VALUES
(1, '123412341234', 'Rifa Mustika', 'bandung11', 'rifaalbadi23@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `ketuapkk`
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
-- Table structure for table `pelatihan`
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
-- Dumping data for table `pelatihan`
--

INSERT INTO `pelatihan` (`idpelatihan`, `NamaPelatihan`, `NIK`, `Nama`, `Tahun`, `Keterangan`, `Dasawisma`) VALUES
(20, 'Pelatihan menanam Anggrek', '3215256306010005', 'Lina', 2022, 'Bersertifikat', 'Anggrek I');

-- --------------------------------------------------------

--
-- Table structure for table `perkarangan`
--

CREATE TABLE `perkarangan` (
  `idperkarangan` int(11) NOT NULL,
  `KepalaKeluarga` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Kategori` varchar(75) CHARACTER SET latin1 NOT NULL,
  `Komoditi` varchar(75) CHARACTER SET latin1 NOT NULL,
  `Jumlah` int(3) NOT NULL,
  `Dasawisma` varchar(75) CHARACTER SET latin1 NOT NULL,
  `Kendala` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `warga`
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
-- Dumping data for table `warga`
--

INSERT INTO `warga` (`idwarga`, `NoKK`, `KepalaKeluarga`, `Dasawisma`, `Lingkungan`, `Kelurahan`, `Kecamatan`) VALUES
(1, '12345', 'adin', 'Mawar III', 'Lingkungan II', 'Lingke', 'Syiah Kuala'),
(2, '12345', 'juki', 'mawar 1', '2', 'aceh', 'syiah kuala');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adasawisma`
--
ALTER TABLE `adasawisma`
  ADD PRIMARY KEY (`idadasawisma`);

--
-- Indexes for table `keluarga`
--
ALTER TABLE `keluarga`
  ADD PRIMARY KEY (`idkeluarga`,`NoKK`);

--
-- Indexes for table `ketuadasawisma`
--
ALTER TABLE `ketuadasawisma`
  ADD PRIMARY KEY (`id_ketua`);

--
-- Indexes for table `ketuapkk`
--
ALTER TABLE `ketuapkk`
  ADD PRIMARY KEY (`id_pkk`);

--
-- Indexes for table `pelatihan`
--
ALTER TABLE `pelatihan`
  ADD PRIMARY KEY (`idpelatihan`,`NIK`);

--
-- Indexes for table `perkarangan`
--
ALTER TABLE `perkarangan`
  ADD PRIMARY KEY (`idperkarangan`);

--
-- Indexes for table `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`idwarga`,`NoKK`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adasawisma`
--
ALTER TABLE `adasawisma`
  MODIFY `idadasawisma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `keluarga`
--
ALTER TABLE `keluarga`
  MODIFY `idkeluarga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ketuadasawisma`
--
ALTER TABLE `ketuadasawisma`
  MODIFY `id_ketua` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ketuapkk`
--
ALTER TABLE `ketuapkk`
  MODIFY `id_pkk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pelatihan`
--
ALTER TABLE `pelatihan`
  MODIFY `idpelatihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `perkarangan`
--
ALTER TABLE `perkarangan`
  MODIFY `idperkarangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `warga`
--
ALTER TABLE `warga`
  MODIFY `idwarga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
