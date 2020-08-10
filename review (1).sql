-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2020 at 10:51 AM
-- Server version: 10.5.0-MariaDB
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
-- Table structure for table `approved`
--

CREATE TABLE `approved` (
  `regno` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `guide` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `approved`
--

INSERT INTO `approved` (`regno`, `name`, `email`, `guide`) VALUES
('17CS102', 'Adharsh', 'adharshkrish@outlook.com', 'Shafreena');

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
  `guide_approval` tinyint(1) NOT NULL DEFAULT 0,
  `time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `consent`
--

INSERT INTO `consent` (`sno`, `name`, `regno`, `email`, `guide`, `guide_approval`, `time`) VALUES
(57, 'ABC', '17CS123', 'adharshkrish@pec.edu', 'Shafreena', 1, '2020-08-10 10:06:24');

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
('Shafreena', 'shafreena2000@pec.edu', 'false'),
('Dr.Sheeba.J.I', 'sheeba@pec.edu', 'password@123'),
('Dr.Sivakumar.N', 'sivakumar11@pec.edu', 'password@123');

-- --------------------------------------------------------

--
-- Table structure for table `notify`
--

CREATE TABLE `notify` (
  `sno` int(11) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `time` varchar(30) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notify`
--

INSERT INTO `notify` (`sno`, `email`, `time`, `message`, `category`) VALUES
(52, 'agayathrics2017@gmail.com', '2020-08-10 09:33:36', 'testing', 0),
(53, 'adharshkrish@outlook.com', '2020-08-10 09:38:05', 'Admin Approval Successful', 1),
(54, 'Shafreena', '2020-08-10 09:38:05', 'Admin Approval Successful', 1),
(55, 'agayathrics2017@pec.edu', '2020-08-10 09:38:23', 'Testing 2', 0),
(56, 'Shafreena', '2020-08-10 09:38:23', 'Testing 2', 0);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `sno` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `regno` varchar(10) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`sno`, `name`, `regno`, `email`, `role`) VALUES
(1, 'SHAF', NULL, 'shafreena2000@pec.edu', 'guide'),
(2, 'shafreena', '17CS148', 'shafreena2000@gmail.com', 'student'),
(3, 'ADMIN', NULL, 'shaffathima@gmail.com', 'admin'),
(4, 'Adharsh', '17CS102', 'adharshkrish@outlook.com', 'student'),
(5, 'Gayathri', '17CS113', 'agayathrics2017@gmail.com', 'student'),
(6, 'gaya', '17CS111', 'agayathrics2017@pec.edu', 'student'),
(7, 'ABC', '17CS123', 'adharshkrish@pec.edu', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `timeanddate`
--

CREATE TABLE `timeanddate` (
  `regno` varchar(10) NOT NULL,
  `consent_time` varchar(30) NOT NULL,
  `guide` varchar(30) NOT NULL,
  `guide_approve` varchar(30) DEFAULT NULL,
  `guide_reject` varchar(30) DEFAULT NULL,
  `guide_msg` varchar(100) DEFAULT NULL,
  `admin_approve` varchar(30) DEFAULT NULL,
  `admin_reject` varchar(30) DEFAULT NULL,
  `admin_msg` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timeanddate`
--

INSERT INTO `timeanddate` (`regno`, `consent_time`, `guide`, `guide_approve`, `guide_reject`, `guide_msg`, `admin_approve`, `admin_reject`, `admin_msg`) VALUES
('17CS102', '2020-08-09 23:27:45', 'Shafreena', '2020-08-10 09:33:11', NULL, NULL, '2020-08-10 09:38:05', NULL, NULL),
('17CS113', '2020-08-10 09:32:24', 'Shafreena', NULL, '2020-08-10 09:33:36', 'testing', NULL, NULL, NULL),
('17CS111', '2020-08-10 09:37:09', 'Shafreena', '2020-08-10 09:37:38', NULL, NULL, NULL, '2020-08-10 09:38:23', 'Testing 2'),
('17CS123', '2020-08-10 10:06:24', 'Shafreena', '2020-08-10 10:18:34', NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approved`
--
ALTER TABLE `approved`
  ADD PRIMARY KEY (`regno`);

--
-- Indexes for table `consent`
--
ALTER TABLE `consent`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `regno` (`regno`);

--
-- Indexes for table `facultylogin`
--
ALTER TABLE `facultylogin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `notify`
--
ALTER TABLE `notify`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `timeanddate`
--
ALTER TABLE `timeanddate`
  ADD PRIMARY KEY (`consent_time`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consent`
--
ALTER TABLE `consent`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `notify`
--
ALTER TABLE `notify`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
