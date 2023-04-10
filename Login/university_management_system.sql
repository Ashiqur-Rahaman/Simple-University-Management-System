-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2021 at 05:31 PM
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
-- Database: `UMS`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `dob` varchar(10) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `bloodgroup` varchar(3) DEFAULT NULL,
  `contact_number` varchar(11) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `religion` varchar(10) DEFAULT NULL,
  `join_date` varchar(10) DEFAULT NULL,
  `salary` varchar(10) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `dob`, `gender`, `bloodgroup`, `contact_number`, `address`, `religion`, `join_date`, `salary`, `password`, `image`) VALUES
(1, 'Ashiq', 'ridoyashik@icloud.com', '01/01/21', 'male', 'O+', '01869000000', 'dhaka', 'Islam', '01/01/21', '50000', 'aa', 'files/glutsetup.png'),
(2, 'Saif', 'saif@gmail.com', '2021-01-04', 'M', 'B+', '01970000000', 'Kuril, Dhaka, Bangladesh', 'Islam', '2020-12-29', '80000', 'aa', 'files/glutsetup.png'),
(3, 'Sultana', 'sultana@gmail.com', '2021-01-05', 'F', 'B-', '01971000000', 'Kuril, Dhaka, Bangladesh', 'Islam', '2021-01-05', '80000', 'aa', 'files/Screenshot (1).png')
(4, 'iftekhar', 'Iftekhar@gmail.com', '2021-01-05', 'M', 'B-', '01971000000', 'Kuril, Dhaka, Bangladesh', 'Islam', '2021-01-05', '80000', 'aa', 'files/Screenshot (1).png');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `id` int(10) NOT NULL,
  `mid` varchar(5) NOT NULL,
  `m_total` varchar(5) NOT NULL,
  `final` varchar(5) NOT NULL,
  `f_total` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grade`
--


-- --------------------------------------------------------

--
-- Table structure for table `login_type`
--

CREATE TABLE `login_type` (
  `id` int(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_type`
--

INSERT INTO `login_type` (`id`, `email`, `password`, `type`) VALUES
(4, 'iftekhar@gmail.com', 'a', 'admin'),
(2, 'saif@gmail', 'aa', 'admin'),
(3, 'sultana@gmail', 'aa', 'admin'),
(1, 'ridoyashik@icloud.com', 'aa', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `study_material`
--

CREATE TABLE `study_material` (
  `id` int(25) NOT NULL,
  `t_id` varchar(25) NOT NULL,
  `section_id` varchar(25) NOT NULL,
  `file_path` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `study_material`
--

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `t_id` int(25) NOT NULL,
  `t_name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `dob` varchar(25) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `blood_group` varchar(25) NOT NULL,
  `address` longtext NOT NULL,
  `contact_number` varchar(11) NOT NULL,
  `religion` varchar(25) NOT NULL,
  `joining_year` varchar(25) NOT NULL,
  `salary` varchar(25) NOT NULL,
  `department` varchar(25) NOT NULL,
  `designation` varchar(25) NOT NULL,
  `working_experience` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `profile_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_type`
--
ALTER TABLE `login_type`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `study_material`
--
ALTER TABLE `study_material`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `t_id` (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `study_material`
--
ALTER TABLE `study_material`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `t_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
