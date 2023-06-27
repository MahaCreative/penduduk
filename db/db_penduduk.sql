-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2023 at 12:44 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_penduduk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `lingkungan`
--

CREATE TABLE `lingkungan` (
  `lingkungan_id` int(11) NOT NULL,
  `lingkungan_nama` varchar(100) NOT NULL,
  `lingkungan_kepala` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lingkungan`
--

INSERT INTO `lingkungan` (`lingkungan_id`, `lingkungan_nama`, `lingkungan_kepala`) VALUES
(2, 'KAYU LANGKA/GALUNG', 'RUSLI DJAMALUDDIN, BA'),
(3, 'KASIWA INDUK', 'ABD. AZIS SYAKUR, A.Ma'),
(4, 'KASIWA TENGAH', 'BASRI DJAFRI'),
(5, 'KASIWA TIMUR', 'MUH. AMIN'),
(6, 'PUNCAK SELATAN', 'H. MUH. RUSDIN. YD'),
(7, 'PUNCAK UTARA', 'MUH. RUSDI RAFI, S.Ag'),
(8, 'DANGA BARAT', 'HAMID'),
(9, 'DANGA TIMUR', 'ALIMUDDIN. T'),
(10, 'SO’DO', 'TANDA'),
(11, 'BINANGA', 'NURSALAM');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `penduduk_id` int(11) NOT NULL,
  `penduduk_nik` varchar(30) NOT NULL,
  `penduduk_nama` varchar(100) NOT NULL,
  `penduduk_lingkungan` varchar(100) NOT NULL,
  `penduduk_alamat` varchar(100) NOT NULL,
  `penduduk_tlp` varchar(25) NOT NULL,
  `penduduk_tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`penduduk_id`, `penduduk_nik`, `penduduk_nama`, `penduduk_lingkungan`, `penduduk_alamat`, `penduduk_tlp`, `penduduk_tgl`) VALUES
(1, '1234354565435', 'Rizal Arman', '8', 'Jl. Bau Massepe', '088574563345', '2022-08-31'),
(5, '3535435435', 'Joni', '4', 'Kali mamuju', '654433242', '2022-09-01'),
(6, '1234576686745', 'Sarinem', '11', 'Kasiwa', '566423867', '2022-08-31'),
(7, '987545634643', 'Ruslan', '11', 'Kasiwa Timur', '0878456456', '2022-09-05'),
(8, '12345671171', 'Yakob', '7', 'Puncak', '0873822', '2022-09-22'),
(9, '53542', 'tes', '9', 'kddk', '4352', '2022-09-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lingkungan`
--
ALTER TABLE `lingkungan`
  ADD PRIMARY KEY (`lingkungan_id`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`penduduk_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lingkungan`
--
ALTER TABLE `lingkungan`
  MODIFY `lingkungan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `penduduk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
