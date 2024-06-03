-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 03, 2024 at 02:13 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `copras`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `nama_alternatif` varchar(100) NOT NULL,
  `penilaian` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`nama_alternatif`, `penilaian`) VALUES
('Dana gotong royong bulanan', '0.3, 0.3, 0.3, 1, 1'),
('Dana Darurat untuk bantuan krisis', '0.2, 0.2, 0.2, 0.3, 0.3'),
('Dana untuk acara HUT RI', '1, 1, 0.5, 0.2, 0.2'),
('Dana untuk program kebersihan bulanan', '0.3, 0.4, 0.4, 0.4, 0.4'),
('Dana untuk pengadaan peralatan untuk RT', '0.2, 0.2, 1, 0.3, 0.3'),
('Biaya operasional rapat RT', '0.4, 0.2, 0.2, 0.3, 0.4'),
('Biaya operasional PKK', '0.4, 1, 0.4, 0.4, 1'),
('Dana untuk pelatihan workshop RT', '1, 0.3, 0.5, 1, 0.2'),
('Dana untuk kegiatan social', '0.3, 0.3, 0.5, 0.2, 0.4'),
('Dana untuk pembangunan infrastruktur RT', '0.5, 0.2, 0.3, 0.6, 1');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `nama_kriteria` varchar(100) NOT NULL,
  `bobot` float DEFAULT '1',
  `tipe` enum('b','c') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`nama_kriteria`, `bobot`, `tipe`) VALUES
('Transparansi dana', 0.3, 'b'),
('Efisien', 0.2, 'b'),
('Partisipasi warga', 0.2, 'b'),
('Tingkat darurat', 0.3, 'b'),
('Jumlah biaya', 0.15, 'c');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
