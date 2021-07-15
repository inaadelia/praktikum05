-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2021 at 06:20 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpoli`
--

-- --------------------------------------------------------

--
-- Table structure for table `bmi_pasien`
--

CREATE TABLE `bmi_pasien` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT current_timestamp(),
  `berat` double DEFAULT NULL,
  `tinggi` double DEFAULT NULL,
  `bmi` double DEFAULT NULL,
  `status_bmi` varchar(45) DEFAULT NULL,
  `catatan` varchar(100) DEFAULT NULL,
  `pasien_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bmi_pasien`
--

INSERT INTO `bmi_pasien` (`id`, `tanggal`, `berat`, `tinggi`, `bmi`, `status_bmi`, `catatan`, `pasien_id`) VALUES
(1, '2021-07-03', 55, 165, 20.2, 'Normal (Ideal)', 'BMI : 20.2; Status : Normal (Ideal)', 1),
(2, '2021-07-03', 70, 160, 27.34, 'Kelebihan Berat Badan', 'BMI : 27.34; Status : Kelebihan Berat Badan\r\n', 2),
(3, '2021-07-03', 45, 160, 17.58, 'Kekurangan Berat Badan', 'BMI : 17.58; Status : Kekurangan Berat Badan', 3);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id` int(11) NOT NULL,
  `kode` varchar(6) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `gender` char(1) DEFAULT NULL,
  `tmp_lahir` varchar(30) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `kode`, `nama`, `gender`, `tmp_lahir`, `tgl_lahir`, `email`) VALUES
(1, 'P00001', 'Dewi Gita', 'P', 'Jakarta', '2000-04-03', 'dewi.gita@gmail.com'),
(2, 'P00003', 'Armand Maulana', 'L', 'Jakarta', '1976-11-03', 'armina@gmail.com'),
(3, 'P0004', 'Ina Adelia', 'P', 'Jakarta', '2021-02-03', 'ina@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bmi_pasien`
--
ALTER TABLE `bmi_pasien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pasien_id` (`pasien_id`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode` (`kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bmi_pasien`
--
ALTER TABLE `bmi_pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bmi_pasien`
--
ALTER TABLE `bmi_pasien`
  ADD CONSTRAINT `bmi_pasien_ibfk_1` FOREIGN KEY (`pasien_id`) REFERENCES `pasien` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
