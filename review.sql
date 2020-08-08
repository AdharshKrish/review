-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2020 at 04:51 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `review`
--

-- --------------------------------------------------------

--
-- Table structure for table `consent`
--

CREATE TABLE `consent` (
  `sno` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `regno` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `guide` varchar(30) NOT NULL,
  `guide_approval` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `consent`
--

INSERT INTO `consent` (`sno`, `name`, `regno`, `email`, `guide`, `guide_approval`) VALUES
(4, 'Arul Selvi', '17cs103', 'adharsh28600@gmail.com', 'lpandian72@pec.edu', 1);

-- --------------------------------------------------------

--
-- Table structure for table `facultylogin`
--

CREATE TABLE `facultylogin` (
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `facultylogin`
--

INSERT INTO `facultylogin` (`name`, `email`, `password`) VALUES
('Dr.Akila.V', 'akila@pec.edu', 'password@123'),
('Dr.Amuthan.A', 'amuthan@pec.edu', 'password@123'),
('Dr.Jayabharathy.J', 'bharathyraja@pec.edu', '$25f9e794323b453885f5181f1b624d0b?$bharathyraja@pec.edu123456789bharathyraja@pec.edu?$25f9e794323b453885f5181f1b624d0b$'),
('Dr.Saruladha.K', 'charuladha@pec.edu', 'password@123'),
('Dr.Loganathan.D', 'drloganathan@pec.edu', 'password@123'),
('Dr.Ilavarasan.E', 'eilavarasan@pec.edu', 'password@123'),
('Dr.Karunakaran.E', 'ekaruna@pec.edu', 'password@123'),
('Dr.Sagayaraj Francis.F', 'fsfrancis@pec.edu', 'password@123'),
('Dr.Zayaraz.G', 'gzayaraz@pec.edu', 'password@123'),
('Dr.Vivekanandan.K', 'k.vivekanandan@pec.edu', '$81dc9bdb52d04dc20036dbd8313ed055?$k.vivekanandan@pec.edu1234k.vivekanandan@pec.edu?$81dc9bdb52d04dc20036dbd8313ed055$'),
('Dr.Kumaran@Kumar.J', 'kumaran@pec.edu', 'password@123'),
('Dr.Lakshmana Pandian.S', 'lpandian72@pec.edu', 'password@123'),
('Dr.Sreenath.N', 'nsreenath@pec.edu', 'password@123'),
('Dr.Thambidurai.P', 'ptdurai@pec.edu', 'password@123'),
('Dr.Kalpana.R', 'rkalpana@pec.edu', 'password@123'),
('Dr.Kavitha Kumar', 'rkavithakumar@pec.edu', '$81dc9bdb52d04dc20036dbd8313ed055?$rkavithakumar@pec.edu1234rkavithakumar@pec.edu?$81dc9bdb52d04dc20036dbd8313ed055$'),
('Dr.Manoharan.R', 'rmanoharan@pec.edu', '$81dc9bdb52d04dc20036dbd8313ed055?$rmanoharan@pec.edu1234rmanoharan@pec.edu?$81dc9bdb52d04dc20036dbd8313ed055$'),
('Dr.Salini.P', 'salini@pec.edu', 'password@123'),
('Dr.Sarala.R', 'sarala@pec.edu', 'password@123'),
('Dr.Sathyamurthy.K', 'sathiyamurthyk@pec.edu', 'password@123'),
('Dr.Selvaradjou.Ka', 'selvaraj@pec.edu', 'password@123'),
('Dr.Sheeba.J.I', 'sheeba@pec.edu', 'password@123'),
('Dr.Sivakumar.N', 'sivakumar11@pec.edu', 'password@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consent`
--
ALTER TABLE `consent`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `facultylogin`
--
ALTER TABLE `facultylogin`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consent`
--
ALTER TABLE `consent`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;