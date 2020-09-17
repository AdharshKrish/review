-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2020 at 05:26 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

--
-- Dumping data for table `approved`
--

INSERT INTO `approved` (`regno`, `name`, `email`, `course`, `guide`) VALUES
('1234', 'Student', 'www.pragat7@gmail.com', 'M.Tech(IS)', 'Test Guide '),
('890', 'Kumar', 'ulagadhoni.25@gmail.com', 'M.Tech(IS)', 'Test Guide ');

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

--
-- Dumping data for table `consent`
--

INSERT INTO `consent` (`sno`, `name`, `regno`, `email`, `course`, `guide`, `guide_approval`, `time`) VALUES
(78, 'Pragadeesh Jinx', '18WU99189', '<br /><b>Notice</b>:  Undefine', 'M.Tech(DCS)', 'Dr.Sarala.R', 0, '2020-09-01 12:41:37'),
(80, '', '', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `mail_response`
--

CREATE TABLE `mail_response` (
  `code` varchar(30) NOT NULL,
  `guide` varchar(30) NOT NULL,
  `student` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mail_response`
--

INSERT INTO `mail_response` (`code`, `guide`, `student`) VALUES
('aDkrZv1GlE', 'Test Guide ', '890'),
('Pr5YPjXT4R', '', '');

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

--
-- Dumping data for table `notify`
--

INSERT INTO `notify` (`sno`, `email`, `time`, `message`, `category`, `about`) VALUES
(77, 'www.pragat7@gmail.com', '2020-09-03 16:11:26', 'Admin Approval Successful', 1, 'Test Guide '),
(78, 'Test Guide ', '2020-09-03 16:11:26', 'Admin Approval Successful', 1, 'Student'),
(79, 'ulagadhoni.25@gmail.com', '2020-09-04 12:30:21', 'Admin Approval Successful', 1, 'Test Guide '),
(80, 'Test Guide ', '2020-09-04 12:30:21', 'Admin Approval Successful', 1, 'Kumar');

-- --------------------------------------------------------

--
-- Table structure for table `project_information`
--

CREATE TABLE `project_information` (
  `sno` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `project_title` varchar(255) NOT NULL,
  `project_abstract_file` varchar(1000) NOT NULL,
  `project_guide` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_information`
--

INSERT INTO `project_information` (`sno`, `email`, `student_name`, `project_title`, `project_abstract_file`, `project_guide`) VALUES
(128, 'www.pragat7@gmail.com', 'Kumar ', 'emailcheck', 'link here', 'Test Guide  ');

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
(53, NULL, NULL, 'www.pragat7@pec.edu', '', 'admin'),
(54, 'Student', '1234', 'www.pragat7@gmail.com', 'M.Tech(IS)', 'student'),
(56, 'Test Guide ', NULL, 'www.pragat7@pec.edu', '', 'guide'),
(57, 'Kumar', '890', 'ulagadhoni.25@gmail.com', 'M.Tech(IS)', 'student'),
(58, NULL, NULL, 'cheraujain@pec.edu', '', 'student');


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
('', '', '', NULL, NULL, NULL, NULL, NULL, NULL),
('18WU99189', '2020-09-01 12:41:37', 'Dr.Sarala.R', NULL, NULL, NULL, NULL, NULL, NULL),
('1234', '2020-09-03 15:21:41', 'Test Guide ', '2020-09-03 16:10:39', NULL, NULL, '2020-09-03 16:11:26', NULL, NULL),
('890', '2020-09-04 12:29:26', 'Test Guide ', '2020-09-05 15:13:20', NULL, NULL, '2020-09-04 12:30:21', NULL, NULL);

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
-- Indexes for table `project_information`
--
ALTER TABLE `project_information`
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
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `notify`
--
ALTER TABLE `notify`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `project_information`
--
ALTER TABLE `project_information`
  MODIFY `sno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
CREATE TABLE `project_progress`(
`sno` int(11) NOT NULL,
`name` varchar(50) NOT NULL,
`progress_activity_title` varchar(30) NOT NULL,
`progress_description` varchar(100) NOT NULL,
`time` varchar(15) NOT NULL,
`guide` varchar(30) NOT NULL,
`guide_approval` int(11) NOT NULL,
`reject_message` varchar(30) NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `project_progress``
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;