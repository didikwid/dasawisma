-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2021 at 05:35 PM
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
(1, '112571282192613', 'Yanto', 'Mawar II', 'Lingkungan IV', 'Bandar Senembah', 'Binjai Barat');

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
(20, 'Pelatihan menanam Anggrek jepang', '3215256306010005', 'Lia', 2021, 'Bersertifikat', 'Anggrek I');

-- --------------------------------------------------------

--
-- Table structure for table `perkarangan`
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
-- Indexes for dumped tables
--

--
-- Indexes for table `keluarga`
--
ALTER TABLE `keluarga`
  ADD PRIMARY KEY (`idkeluarga`,`NoKK`);

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
-- AUTO_INCREMENT for table `keluarga`
--
ALTER TABLE `keluarga`
  MODIFY `idkeluarga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pelatihan`
--
ALTER TABLE `pelatihan`
  MODIFY `idpelatihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `perkarangan`
--
ALTER TABLE `perkarangan`
  MODIFY `idperkarangan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `warga`
--
ALTER TABLE `warga`
  MODIFY `idwarga` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
