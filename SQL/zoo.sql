-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2023 at 09:12 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zoo`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Father_Name` varchar(255) NOT NULL,
  `University` varchar(255) NOT NULL,
  `Registration_Numberv` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Phone_Number` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Designation` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `LastSeen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Id`, `Name`, `Father_Name`, `University`, `Registration_Numberv`, `Address`, `Phone_Number`, `Email`, `Password`, `Image`, `Type`, `Designation`, `Status`, `Department`, `LastSeen`) VALUES
(1, 'Admin', '', '', '', '', '', 'admin@pz.com', 'Pz@12345', 'logo.png', 'Admin', 'Admin', 'Online', 'Admin', '2023-07-21 21:03:00'),
(2, 'Shayan Khan', 'Riayat khan', '', '', '12345', '123456', 'admin125225@wssc.com', 'Wssc@123', 'logo.png', 'Sub_addmin', 'Director Peshawar Zoo', 'Online', '-', '2023-08-15 09:16:44'),
(3, '-', '-', 'SUIT Peshawar', '', '12345', '123456', 'demos1215225@gmail.com', 'ms1215225', 'logo.png', 'Faculties', '-', 'Online', '', '2023-07-21 20:53:15'),
(4, 'Shayan Khan', 'Riayat khan', 'SUIT Peshawar', '121335', '54321', '54321', 'shayanm1215225@gmail.com', 'sm1215225', 'download.png', 'Student', '', 'Online', 'BS SE', '2023-07-21 21:34:44'),
(6, '', '', 'SUIT Peshawar', '02002', '', '', 'demos2@gamil.com', 'Pz@12345', '', 'Student', '', 'Offline', '', '2023-07-21 20:57:08'),
(7, 'Shayan Khan', 'dfa', 'dfas', '', '2345', '123456', 'kurtlar1215225@gmail.com', 'Sm@1215225', 'Blue And Red Futuristic Game YouTube Channel Art.png', 'Faculties', 'it', 'Online', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recommend`
--

CREATE TABLE `recommend` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Recommend` varchar(255) NOT NULL,
  `Recommendid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recommend`
--

INSERT INTO `recommend` (`Id`, `Name`, `Email`, `Recommend`, `Recommendid`) VALUES
(1, 'Shayan Khan', 'admin125225@wssc.com', '<p>dsfaffa</p>\r\n', 4),
(2, 'Shayan Khan', 'admin125225@wssc.com', '<p>it is not compleet</p>\r\n\r\n<p>&nbsp;</p>\r\n', 3),
(3, 'Shayan Khan', 'admin125225@wssc.com', '<p>dsfjaskfjifurkfmodij</p>\r\n', 4);

-- --------------------------------------------------------

--
-- Table structure for table `research`
--

CREATE TABLE `research` (
  `Id` int(11) NOT NULL,
  `Version` varchar(255) DEFAULT NULL,
  `University_Name` varchar(255) DEFAULT NULL,
  `Department` varchar(255) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Registration_Number` varchar(255) DEFAULT NULL,
  `Supervisor_Name` varchar(255) DEFAULT NULL,
  `CoSupervisor_Name` varchar(255) DEFAULT NULL,
  `Topic` varchar(255) DEFAULT NULL,
  `Type_of_sample_required_from_Peshawar_Zoo` varchar(255) DEFAULT NULL,
  `Project_Title` varchar(255) DEFAULT NULL,
  `Starting_date_of_porject` date DEFAULT NULL,
  `End_date_of_project` date DEFAULT NULL,
  `Application_Submission_Date` date DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `Title1` varchar(255) DEFAULT NULL,
  `Institutional_Affiliation` varchar(255) DEFAULT NULL,
  `Phone` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Co_Supervisor_Name` varchar(255) DEFAULT NULL,
  `Institutional` varchar(255) DEFAULT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `Qa` longtext DEFAULT NULL,
  `Qa_a` longtext DEFAULT NULL,
  `Qa_b` longtext DEFAULT NULL,
  `Qb` longtext DEFAULT NULL,
  `Qc` longtext DEFAULT NULL,
  `Qd` longtext DEFAULT NULL,
  `Qe` longtext DEFAULT NULL,
  `Qf` longtext DEFAULT NULL,
  `Qg` longtext DEFAULT NULL,
  `Qh` longtext DEFAULT NULL,
  `Qi` longtext DEFAULT NULL,
  `Qj` longtext DEFAULT NULL,
  `Qk` longtext DEFAULT NULL,
  `Ql` longtext DEFAULT NULL,
  `Qm` longtext DEFAULT NULL,
  `Qn` longtext DEFAULT NULL,
  `Qo` longtext DEFAULT NULL,
  `Qp` longtext DEFAULT NULL,
  `Qq` longtext DEFAULT NULL,
  `Qr` longtext DEFAULT NULL,
  `Qs` longtext DEFAULT NULL,
  `Qt` longtext DEFAULT NULL,
  `Qu` longtext DEFAULT NULL,
  `Qv` longtext DEFAULT NULL,
  `Qw` longtext DEFAULT NULL,
  `Qx` longtext DEFAULT NULL,
  `Qy` longtext DEFAULT NULL,
  `Qz` longtext DEFAULT NULL,
  `Qaa` longtext DEFAULT NULL,
  `Qab` longtext DEFAULT NULL,
  `Qac` longtext DEFAULT NULL,
  `Qad` longtext DEFAULT NULL,
  `Qae` longtext DEFAULT NULL,
  `Qaf` longtext DEFAULT NULL,
  `Qag` longtext DEFAULT NULL,
  `Qah` longtext DEFAULT NULL,
  `Qai` longtext DEFAULT NULL,
  `Qaj` longtext DEFAULT NULL,
  `Qak` longtext DEFAULT NULL,
  `Qal` longtext DEFAULT NULL,
  `Qam` longtext DEFAULT NULL,
  `Qan` longtext DEFAULT NULL,
  `Qao` longtext DEFAULT NULL,
  `Qap` longtext DEFAULT NULL,
  `Qaq` longtext DEFAULT NULL,
  `Qar` longtext DEFAULT NULL,
  `Qas` longtext DEFAULT NULL,
  `Qat` longtext DEFAULT NULL,
  `Qau` longtext DEFAULT NULL,
  `Qav` longtext DEFAULT NULL,
  `Qaw` longtext DEFAULT NULL,
  `Qax` longtext DEFAULT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `research`
--

INSERT INTO `research` (`Id`, `Version`, `University_Name`, `Department`, `Name`, `Registration_Number`, `Supervisor_Name`, `CoSupervisor_Name`, `Topic`, `Type_of_sample_required_from_Peshawar_Zoo`, `Project_Title`, `Starting_date_of_porject`, `End_date_of_project`, `Application_Submission_Date`, `file`, `Title1`, `Institutional_Affiliation`, `Phone`, `Email`, `Co_Supervisor_Name`, `Institutional`, `Title`, `Qa`, `Qa_a`, `Qa_b`, `Qb`, `Qc`, `Qd`, `Qe`, `Qf`, `Qg`, `Qh`, `Qi`, `Qj`, `Qk`, `Ql`, `Qm`, `Qn`, `Qo`, `Qp`, `Qq`, `Qr`, `Qs`, `Qt`, `Qu`, `Qv`, `Qw`, `Qx`, `Qy`, `Qz`, `Qaa`, `Qab`, `Qac`, `Qad`, `Qae`, `Qaf`, `Qag`, `Qah`, `Qai`, `Qaj`, `Qak`, `Qal`, `Qam`, `Qan`, `Qao`, `Qap`, `Qaq`, `Qar`, `Qas`, `Qat`, `Qau`, `Qav`, `Qaw`, `Qax`, `status`) VALUES
(2, '1.1', 'SUIT Peshawar', '-', 'Shayan Khan', '121335', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '54321', 'shayanm1215225@gmail.com', '', '', '', '', '', 'No', '', '', '', '', '', '', '', '', '', '', '', '', 'No', '', 'No', 'No`,', 'No', 'No', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '`,', '', '', '', '', '', '', '', 'accept'),
(3, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '[value-8]', '[value-9]', '[value-10]', '[value-11]', '0000-00-00', '0000-00-00', '0000-00-00', '[value-15]', '[value-16]', '[value-17]', '[value-18]', '[value-19]', '[value-20]', '[value-21]', '[value-22]', '[value-23]', '[value-24]', '[value-25]', '[value-26]', '[value-27]', '[value-28]', '[value-29]', '[value-30]', '[value-31]', '[value-32]', '[value-33]', '[value-34]', '[value-35]', '[value-36]', '[value-37]', '[value-38]', '[value-39]', '[value-40]', '[value-41]', '[value-42]', '[value-43]', '[value-44]', '[value-45]', '[value-46]', '[value-47]', '[value-48]', '[value-49]', '[value-50]', '[value-51]', '[value-52]', '[value-53]', '[value-54]', '[value-55]', '[value-56]', '[value-57]', '[value-58]', '[value-59]', '[value-60]', '[value-61]', '[value-62]', '[value-63]', '[value-64]', '[value-65]', '[value-66]', '[value-67]', '[value-68]', '[value-69]', '[value-70]', '[value-71]', '[value-72]', '[value-73]', '[value-74]', 'reject'),
(4, '1.2', 'SUIT Peshawar', '', 'Shayan Khan', '121335', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '54321', 'shayanm1215225@gmail.com', '', '', '', '', '', 'No', '', '', '', '', '', '', '', '', '', '', '', '', 'No', '', 'No', 'No', 'No', 'No', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'reject'),
(5, '1.3', 'SUIT Peshawar', '', 'Shayan Khan', '121335', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '54321', 'shayanm1215225@gmail.com', '', '', '', '', '', 'No', '', '', '', '', '', '', '', '', '', '', '', '', 'No', '', 'No', 'No', 'No', 'No', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `recommend`
--
ALTER TABLE `recommend`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `research`
--
ALTER TABLE `research`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `recommend`
--
ALTER TABLE `recommend`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `research`
--
ALTER TABLE `research`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
