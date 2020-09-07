-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2020 at 03:00 PM
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
  `course` varchar(20) NOT NULL,
  `guide` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `consent`
--

CREATE TABLE `consent` (
  `sno` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `regno` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `course` varchar(20) NOT NULL,
  `guide` varchar(30) NOT NULL,
  `guide_approval` tinyint(1) NOT NULL DEFAULT 0,
  `time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mail_response`
--

CREATE TABLE `mail_response` (
  `code` varchar(30) NOT NULL,
  `guide` varchar(30) NOT NULL,
  `student` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notify`
--

CREATE TABLE `notify` (
  `sno` int(11) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `time` varchar(30) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `category` int(11) NOT NULL,
  `about` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `sno` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `regno` varchar(10) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `course` varchar(20) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`sno`, `name`, `regno`, `email`, `course`, `role`) VALUES
(3, 'ADMIN', NULL, 'hod.cse@pec.edu', '', 'admin'),
(11, 'Dr.Akila.V', '', 'akila@pec.edu', '', 'guide'),
(12, 'Dr.Amuthan.A', '', 'amuthan@pec.edu', '', 'guide'),
(13, 'Dr.Jayabharathy.J', '', 'bharathyraja@pec.edu', '', 'guide'),
(14, 'Dr.Saruladha.K', '', 'charuladha@pec.edu', '', 'guide'),
(15, 'Dr.Loganathan.D', '', 'drloganathan@pec.edu', '', 'guide'),
(16, 'Dr.Ilavarasan.E', '', 'eilavarasan@pec.edu', '', 'guide'),
(17, 'Dr.Karunakaran.E', '', 'ekaruna@pec.edu', '', 'guide'),
(18, 'Dr.Sagayaraj Francis.F', '', 'fsfrancis@pec.edu', '', 'guide'),
(19, 'Dr.Zayaraz.G', '', 'gzayaraz@pec.edu', '', 'guide'),
(20, 'Dr.Vivekanandan.K', '', 'k.vivekanandan@pec.edu', '', 'guide'),
(21, 'Dr.Kumaran@Kumar.J', '', 'kumaran@pec.edu', '', 'guide'),
(22, 'Dr.Lakshmana Pandian.S', '', 'lpandian72@pec.edu', '', 'guide'),
(23, 'Dr.Sreenath.N', '', 'nsreenath@pec.edu', '', 'guide'),
(24, 'Dr.Thambidurai.P', '', 'ptdurai@pec.edu', '', 'guide'),
(25, 'Dr.Kalpana.R', '', 'rkalpana@pec.edu', '', 'guide'),
(26, 'Dr.Kavitha Kumar', '', 'rkavithakumar@pec.edu', '', 'guide'),
(27, 'Dr.Manoharan.R', '', 'rmanoharan@pec.edu', '', 'guide'),
(28, 'Dr.Salini.P', '', 'salini@pec.edu', '', 'guide'),
(29, 'Dr.Sarala.R', '', 'sarala@pec.edu', '', 'guide'),
(30, 'Dr.Sathyamurthy.K', '', 'sathiyamurthyk@pec.edu', '', 'guide'),
(31, 'Dr.Selvaradjou.Ka', '', 'selvaraj@pec.edu', '', 'guide'),
(32, 'Dr.Sheeba.J.I', '', 'sheeba@pec.edu', '', 'guide'),
(33, 'Dr.Sivakumar.N', '', 'sivakumar11@pec.edu', '', 'guide'),
(34, NULL, NULL, 'mswat97@pec.edu', '', 'student'),
(35, NULL, NULL, 'rnivedhitharajan@pec.edu', '', 'student'),
(36, NULL, NULL, 'aravindsrisai6@pec.edu', '', 'student'),
(37, NULL, NULL, 'avinashaps@pec.edu', '', 'student'),
(38, NULL, NULL, 'flaviaantoney27@pec.edu', '', 'student'),
(39, NULL, NULL, 'kdheebhika@pec.edu', '', 'student'),
(40, NULL, NULL, 'ezhilk98@pec.edu', '', 'student'),
(41, NULL, NULL, 'gomathy.aswini5@pec.edu', '', 'student'),
(42, NULL, NULL, 'kmozhi.2396@pec.edu', '', 'student'),
(43, NULL, NULL, 'prageed.26@pec.edu', '', 'student'),
(44, NULL, NULL, 'ipriyadarshini05@pec.edu', '', 'student'),
(45, NULL, NULL, 'saranyasridharan11@pec.edu', '', 'student'),
(46, NULL, NULL, 'mskanna95@pec.edu', '', 'student'),
(47, NULL, NULL, 'shalinireddy1798@pec.edu', '', 'student'),
(48, NULL, NULL, 'sowmi100697@pec.edu', '', 'student'),
(49, NULL, NULL, 'vanthana230698@pec.edu', '', 'student'),
(50, NULL, NULL, 'vijayasanthy1597@pec.edu', '', 'student'),
(51, NULL, NULL, 'vishnuinvenus@pec.edu', '', 'student'),
(52, NULL, NULL, 'sathiyamurthyk@pec.edu', '', 'admin'),
(53, 'cj', NULL, 'cheraujain@pec.edu','','admin');
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
-- Indexes for table `mail_response`
--
ALTER TABLE `mail_response`
  ADD PRIMARY KEY (`code`);

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
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `notify`
--
ALTER TABLE `notify`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
