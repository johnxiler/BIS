-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2022 at 12:38 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bis`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(10) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `birthdate` varchar(25) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `position` varchar(25) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `lastname`, `firstname`, `birthdate`, `gender`, `position`, `username`, `password`) VALUES
(1, 'Orisawa', 'Hesisosa', '2022-11-24', 'Female', 'Brgy. Secretary', 'admin', 'admin'),
(2, 'sample', 'sample', '2022-12-07', 'Male', 'Brgy. Kagawad', 'admin123', 'admin123'),
(3, 'Ceiling', 'Jackson', '2022-12-06', 'Male', 'Brgy. Secretary', '124524123', '124524123'),
(4, 'Jusmio', 'Patawara Kita', '2022-12-01', 'Male', 'Brgy. Treasurer', '124524', 'ASASSAS'),
(5, 'Santisima', 'Trinidad', '1993-02-01', 'Female', 'Brgy. Secretary', 'adminsecc', 'adminsecc');

-- --------------------------------------------------------

--
-- Table structure for table `blotter`
--

CREATE TABLE `blotter` (
  `id` int(10) NOT NULL,
  `complainant` varchar(50) NOT NULL,
  `complainto` varchar(50) NOT NULL,
  `statement` varchar(9000) NOT NULL,
  `title` varchar(100) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blotter`
--

INSERT INTO `blotter` (`id`, `complainant`, `complainto`, `statement`, `title`, `remarks`, `date`) VALUES
(5, 'Relex, Serwin Oho', 'Jordan, Ericka', 'Sample StatementSample StatementSample StatementSample StatementSample StatementSample Statement', '', 'Noted, Not resolved', '02-12-22 08:19:24'),
(6, 'Juan, Santos', 'Asupardo, Salis', 'Blah,Blah,Blah,Blah,Blah,Blah,Blah,Blah,Blah,Blah,Bla\nh,Blah,Blah,Blah,Blah,Blah,Blah,Blah,Blah,Blah,Blah,Blah,Blah,Blah,Blah,Blah,Blah', '', 'Note Resolved', '03-12-22 02:44:05'),
(7, 'Aa', 'Aa', '                     Aa                       ', '', 'aAa', '03-12-22 06:44:30'),
(8, 'Aa', 'aA', '                        aA                    ', '', 'aA', '03-12-22 06:44:49'),
(9, 'ssd', 'sdsds', '                                     dsds       ', 'sdsd', 'sdsds', '04-12-22 03:18:53');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(10) NOT NULL,
  `class` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `class`) VALUES
(1, 'Upper Class'),
(2, 'Middle Class'),
(5, 'Lower Class');

-- --------------------------------------------------------

--
-- Table structure for table `cr`
--

CREATE TABLE `cr` (
  `id` int(10) NOT NULL,
  `cr` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cr`
--

INSERT INTO `cr` (`id`, `cr`) VALUES
(1, 'TAD'),
(2, 'Laura'),
(3, 'Flash'),
(4, 'None');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(10) NOT NULL,
  `education` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `education`) VALUES
(1, 'Elementary Graduate'),
(2, 'Junior High Graduate'),
(3, 'Senior High Graduate'),
(4, 'Undergrad'),
(5, 'College Graduate');

-- --------------------------------------------------------

--
-- Table structure for table `employment`
--

CREATE TABLE `employment` (
  `id` int(10) NOT NULL,
  `employment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employment`
--

INSERT INTO `employment` (`id`, `employment`) VALUES
(1, 'Employed'),
(2, 'Unemployed'),
(3, 'Self-employed'),
(4, 'None');

-- --------------------------------------------------------

--
-- Table structure for table `govmem`
--

CREATE TABLE `govmem` (
  `id` int(10) NOT NULL,
  `governmentmem` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `govmem`
--

INSERT INTO `govmem` (`id`, `governmentmem`) VALUES
(1, 'Social Security System'),
(2, 'Philhealth'),
(3, 'Pag-ibig'),
(4, 'National ID');

-- --------------------------------------------------------

--
-- Table structure for table `healthstatus`
--

CREATE TABLE `healthstatus` (
  `id` int(10) NOT NULL,
  `healthstatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `healthstatus`
--

INSERT INTO `healthstatus` (`id`, `healthstatus`) VALUES
(1, 'Healthy'),
(2, 'Unhealthy'),
(3, 'Sick'),
(4, 'Desease');

-- --------------------------------------------------------

--
-- Table structure for table `households`
--

CREATE TABLE `households` (
  `id` int(10) NOT NULL,
  `householdno` varchar(15) NOT NULL,
  `purokid` int(10) NOT NULL,
  `electricityid` int(10) NOT NULL,
  `waterid` int(10) NOT NULL,
  `crid` int(10) NOT NULL,
  `ses` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `households`
--

INSERT INTO `households` (`id`, `householdno`, `purokid`, `electricityid`, `waterid`, `crid`, `ses`) VALUES
(1, 'I-90232', 2, 3, 3, 4, 'Middle Class'),
(2, '121212', 1, 2, 1, 1, 'Middle Class'),
(3, '1', 2, 2, 1, 1, 'Upper Class'),
(4, '2', 2, 2, 1, 3, 'Lower Class'),
(5, '3', 3, 3, 3, 2, 'Middle Class'),
(6, '4', 7, 3, 3, 2, 'Lower Class'),
(7, '01233', 2, 2, 1, 4, 'Upper Class'),
(8, '122121', 1, 2, 1, 4, 'Upper Class'),
(9, '1212', 2, 2, 1, 1, 'Upper Class'),
(10, '2121', 3, 3, 1, 2, 'Upper Class'),
(11, '4343434', 2, 3, 1, 2, 'Upper Class'),
(12, 'I-281213', 3, 2, 1, 1, 'Upper Class');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `act` varchar(200) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `username`, `position`, `act`, `date`) VALUES
(1, '124524', 'Brgy. Treasurer', 'Add record of username 124524', '03-12-22 06:20:21'),
(5, 'admin', 'Brgy.Captain', 'Add New Household No 1212', '03-12-22 06:30:14'),
(7, 'admin', 'Brgy.Captain', 'Add New Household No 2121', '03-12-22 06:32:21'),
(8, 'admin', 'Brgy.Captain', 'Add New Household No 121212', '03-12-22 06:32:48'),
(9, 'admin', 'Brgy.Captain', 'Add New Household No 4343434', '03-12-22 06:32:58'),
(10, 'admin', 'Brgy.Captain', 'Add Blotter Case for ', '03-12-22 06:44:35'),
(11, 'admin', 'Brgy.Captain', 'Add Blotter Case for Aa', '03-12-22 06:44:54'),
(12, 'admin', 'Brgy.Captain', 'Add New Residents with Lastname asasasa', '03-12-22 06:49:43'),
(13, 'admin', 'Brgy.Captain', 'Log In on 03-12-22 07:02:30', '03-12-22 07:02:30'),
(14, 'admin', 'Brgy.Captain', 'Log In on 03-12-22 07:38:00', '03-12-22 07:38:00'),
(15, 'admin', 'Brgy.Captain', 'Log In on 03-12-22 07:38:15', '03-12-22 07:38:15'),
(16, 'admin', 'Brgy.Captain', 'Log In on 04-12-22 02:07:04', '04-12-22 02:07:04'),
(17, 'admin', 'Brgy.Captain', 'Add Blotter Case for ssd', '04-12-22 03:19:13'),
(18, 'admin', 'Brgy.Captain', 'Add New Household No I-281213', '04-12-22 03:36:06'),
(19, 'admin', 'Brgy.Captain', 'Add New Residents with Lastname Satons', '04-12-22 03:40:54'),
(20, 'admin', 'Brgy.Captain', 'Add New Account of username admin', '04-12-22 05:20:36'),
(21, 'adminsec', 'Brgy. Secretary', 'Add New Account of username adminsec', '04-12-22 05:21:18'),
(22, 'adminsec', 'Brgy. Secretary', 'Log In on 04-12-22 05:21:43', '04-12-22 05:21:43'),
(23, '', '', 'Add New Account of username ', '04-12-22 05:42:20'),
(24, '', '', 'Add New Account of username ', '04-12-22 05:43:56'),
(25, '', '', ' Update record of Hesosa, Orisawa', '04-12-22 05:46:55'),
(26, 'admin', 'Brgy.Captain', 'admin Update record of aaasasa, aaasasas', '04-12-22 05:47:47'),
(27, 'admin', 'Brgy.Captain', 'admin Update record of aaasasa, aaasasas', '04-12-22 05:47:56'),
(28, 'admin', 'Brgy.Captain', 'admin Update record of aaassfsssd, aaassdsdsd', '04-12-22 05:48:07'),
(29, 'admin', 'Brgy.Captain', 'admin Update record of aaasddsd, aaassdsdsd', '04-12-22 05:50:42'),
(30, 'admin', 'Brgy.Captain', 'admin Update record of aaasZZ, aaasZZ', '04-12-22 05:54:08'),
(31, 'admin', 'Brgy.Captain', 'admin Update record of aaassdssds, aaasdsdsds', '04-12-22 05:57:49'),
(32, 'admin', 'Brgy.Captain', 'admin Update record of aaaszxzxz, aaasxzxzx', '04-12-22 06:00:37'),
(33, 'admin', 'Brgy.Captain', 'admin Update record of aaasxzxzxz, aaaszxzxz', '04-12-22 06:04:04'),
(34, 'admin', 'Brgy.Captain', 'admin Update record of aaasasasa, aaassasa', '04-12-22 06:06:09'),
(35, 'adminsec', 'Brgy. Secretary', 'Log In on 04-12-22 06:07:01', '04-12-22 06:07:01'),
(36, 'admin', 'Brgy.Captain', 'admin Update record of aaasxzxzxzx, aaaszxzxz', '04-12-22 06:07:21'),
(37, 'admin', 'Brgy. Secretary', 'admin Update record of aaassff, aaassfsfsf', '04-12-22 06:09:42'),
(38, 'admin', 'Brgy. Secretary', 'admin Update record of Orisawa, Hesisosa', '04-12-22 06:10:10'),
(39, '124524', 'Brgy. Treasurer', '124524 Update record of Jusmio, Patawara Kita', '04-12-22 06:11:30'),
(40, '124524', 'Brgy. Treasurer', '124524 Update record of Jusmio, Patawara Kita', '04-12-22 06:11:35'),
(41, 'adminsecc', 'Brgy. Secretary', 'adminsecc change personal password or username.', '04-12-22 06:47:21'),
(42, 'adminsecc', 'Brgy. Secretary', 'Log In on 04-12-22 06:47:29', '04-12-22 06:47:29'),
(43, 'adminsecc', 'Brgy. Secretary', 'Household No I-90232 Update the record.', '04-12-22 07:14:54'),
(44, 'adminsecc', 'Brgy. Secretary', 'Add New Residents with Lastname 4444', '04-12-22 08:16:08'),
(45, 'adminsecc', 'Brgy. Secretary', 'Add New Residents with Lastname Orisawa', '04-12-22 08:19:26'),
(46, 'adminsecc', 'Brgy. Secretary', 'Add New Residents with Lastname Orisawa', '04-12-22 08:19:42'),
(47, 'adminsecc', 'Brgy. Secretary', 'Add New Residents with Lastname Orisawa', '04-12-22 08:19:56');

-- --------------------------------------------------------

--
-- Table structure for table `purok`
--

CREATE TABLE `purok` (
  `id` int(10) NOT NULL,
  `purokno` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purok`
--

INSERT INTO `purok` (`id`, `purokno`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7);

-- --------------------------------------------------------

--
-- Table structure for table `residents`
--

CREATE TABLE `residents` (
  `id` int(10) NOT NULL,
  `householdid` int(15) NOT NULL,
  `purok` int(10) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `ext` varchar(50) NOT NULL,
  `birthdate` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `employstat` varchar(50) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `osi` varchar(50) NOT NULL,
  `salary` varchar(50) NOT NULL,
  `healthstat` varchar(50) NOT NULL,
  `maritalstatus` varchar(50) NOT NULL,
  `sss` varchar(50) NOT NULL,
  `philheath` varchar(50) NOT NULL,
  `pagibig` varchar(50) NOT NULL,
  `naid` varchar(50) NOT NULL,
  `contactno` varchar(50) NOT NULL,
  `education` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `residents`
--

INSERT INTO `residents` (`id`, `householdid`, `purok`, `lname`, `fname`, `mname`, `ext`, `birthdate`, `gender`, `employstat`, `occupation`, `osi`, `salary`, `healthstat`, `maritalstatus`, `sss`, `philheath`, `pagibig`, `naid`, `contactno`, `education`, `role`, `position`) VALUES
(8, 3, 0, 'Lacson', 'Clint Charles', 'Pan', '', '1997-12-13', 'Male', 'None', '', '', '', '1', '', '0', '0', '0', '0', '', 'College Graduate', 'Son', '1'),
(11, 4, 0, 'Pena', 'Rodolfo', 'Yanesa', '', '1987-11-08', 'Male', 'Unemployed', '', '', '', '2', 'Married', '0', '0', '0', '0', '09123456789', 'College Graduate', '', '0'),
(12, 4, 0, 'Pena', 'Arlene', 'Dela Cruz', '', '1999-10-19', 'Female', 'Unemployed', '', '', '', '1', 'Married', '0', '0', '0', '0', '09123456888', 'Undergrad', 'Mother', '0'),
(13, 4, 0, 'Pena', 'Raquel', 'Bardon', '', '2009-09-29', 'Female', 'Unemployed', '', '', '', '2', 'Single', '0', '0', '0', '0', '092232141', 'Undergrad', '', '1'),
(14, 5, 0, 'Pena', 'Alvin', 'Dela Torre', '', '1972-08-20', 'Male', 'Employed', 'Driver', '', '20000', '1', 'Married', '0', '0', '0', '0', '099121331', 'College Graduate', 'Father', '0'),
(15, 5, 0, 'Pena', 'Maricel', 'Camacho', '', '2002-06-19', 'Female', 'Employed', 'Teacher', '', '', '1', 'Married', '0', '0', '0', '0', '091231731', 'College Graduate', '', '0'),
(16, 6, 0, 'Lim', 'Melanie', 'Lagumen', '', '1993-12-23', 'Female', 'Self-employed', 'Lawyer', 'V Line Cosmetic Bus.', '200,000', '1', 'Single', '0', '0', '0', '0', '029392742', 'College Graduate', 'Mother', '0'),
(18, 6, 7, 'asasasa', 'sasas', 'asa', 'sasa', '2022-12-20', 'Male', 'Employed', 'asasa', 'asas', '7465', '1', 'Married', '0', '0', '0', '0', '424', 'Elementary Graduate', 'Father', '0'),
(19, 1, 1, 'Satons', 'Juan', 'Samchez', 'jr.', '1995-02-01', 'Male', 'Employed', 'Cler', 'None', '5000', '3', 'Single', '82323233323', '82323233323', '82323233323', '82323233323', '0961361311', 'College Graduate', 'Son', '1'),
(20, 20, 0, 'Orisawa', 'Sawana', 'Mariaiyusip', 'Sr.', '1965-02-24', 'Female', 'Employed', 'Samurai Expert', 'Samurai Maker', '200000', '2', 'Widowed', '2121212331', '2121212331', '2121212331', '2121212331', '09324431113', 'Undergrad', 'Mother', '0');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) NOT NULL,
  `type` varchar(50) NOT NULL,
  `facility` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `type`, `facility`) VALUES
(1, 'Water', 'Nawasa'),
(2, 'Electricity', 'Canoreco'),
(3, 'None', 'None');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blotter`
--
ALTER TABLE `blotter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cr`
--
ALTER TABLE `cr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employment`
--
ALTER TABLE `employment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `govmem`
--
ALTER TABLE `govmem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `healthstatus`
--
ALTER TABLE `healthstatus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `households`
--
ALTER TABLE `households`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purok`
--
ALTER TABLE `purok`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `residents`
--
ALTER TABLE `residents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blotter`
--
ALTER TABLE `blotter`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cr`
--
ALTER TABLE `cr`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employment`
--
ALTER TABLE `employment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `govmem`
--
ALTER TABLE `govmem`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `healthstatus`
--
ALTER TABLE `healthstatus`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `households`
--
ALTER TABLE `households`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `purok`
--
ALTER TABLE `purok`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `residents`
--
ALTER TABLE `residents`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
