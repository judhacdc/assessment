-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2022 at 03:43 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assessment`
--

-- --------------------------------------------------------

--
-- Table structure for table `asesor`
--

CREATE TABLE `asesor` (
  `idasesor` varchar(5) NOT NULL,
  `namaasesor` varchar(15) DEFAULT NULL,
  `jeniskelaminasesor` varchar(10) DEFAULT 'Pria',
  `alamatasesor` varchar(50) DEFAULT NULL,
  `statusasesor` varchar(15) DEFAULT 'Tidak Aktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asesor`
--

INSERT INTO `asesor` (`idasesor`, `namaasesor`, `jeniskelaminasesor`, `alamatasesor`, `statusasesor`) VALUES
('AS001', 'Maya Atmayanti', 'Perempuan', 'JL Kembang Turi', 'Aktif'),
('AS002', 'Rina K', 'Perempuan', 'Jl Argo Dani No 98', 'Aktif'),
('AS003', 'Putra Prima', 'Laki-laki', 'Jl Jeruk Nipis No 78', 'Aktif');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
