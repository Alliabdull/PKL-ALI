-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2022 at 05:00 AM
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
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nrp` char(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Ali Abdul Rokhim', '1922', 'alliabdullrokhim@gmail.com', 'Teknik Informatika', 'pap.jpg'),
(2, 'Kera', '1945', 'kerakece@gmail.com', 'Teknik Industri', 'sepatu.jpg.jpg'),
(3, 'dinomon ', '1927', 'dinomon@gmail.com', 'Teknik permanganan', 'dino.jfif'),
(4, 'kecemon', '1987', 'kecemon@gmail.com', 'Teknik Kemaki', 'fighter.jpg'),
(5, 'jagoan neon', '1999', 'sipalingjago@gmail.com', 'Teknik Turu', 'sh.jpg'),
(10, 'Kakek Jackpot', '1989', 'GrandJP@gmail.com', 'Teknik Perduitan', 'jackpot.jpg'),
(13, 'Samsudin Bin Udin', '2025', 'samsudin@gmail.com', 'Teknik Perdukunan', 'samsudin.jpg'),
(23, 'KingLeon', '2023', 'LeonJackpot@gmail.com', 'Teknik BerUANG', 'jagoan.jpg'),
(24, 'siKeren', '2000', 'kerenbangetbro@gmail.com', 'Teknik Multimedia', 'gg.jpg'),
(26, 'ZAIM', '251005', 'sipalingcanti@gmail.com', 'AKL', 'samsudin.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
