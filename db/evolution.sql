-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2022 at 06:27 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evolution`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `user_type` int(11) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `CNIC` varchar(30) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `name`, `email`, `phone`, `pass`, `user_type`, `profile`, `CNIC`, `gender`) VALUES
(1, 'Salena', 'salena@admin.ecs.com', '03343427289', '202cb962ac59075b964b07152d234b70', 2, '1533890977amina.png', '222222222222', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `admission_form`
--

CREATE TABLE `admission_form` (
  `id` int(11) NOT NULL,
  `std_name` varchar(225) NOT NULL,
  `father_name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(225) NOT NULL,
  `cnic_bayform` varchar(225) NOT NULL,
  `citizenship` varchar(225) NOT NULL,
  `religion` varchar(225) NOT NULL,
  `program` varchar(225) NOT NULL,
  `marksheet` varchar(225) NOT NULL,
  `prov_certificate` varchar(225) NOT NULL,
  `father_cnic` varchar(225) NOT NULL,
  `profile` varchar(225) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'processing'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admission_form`
--

INSERT INTO `admission_form` (`id`, `std_name`, `father_name`, `email`, `phone`, `dob`, `gender`, `address`, `cnic_bayform`, `citizenship`, `religion`, `program`, `marksheet`, `prov_certificate`, `father_cnic`, `profile`, `status`) VALUES
(2, 'Augustine', 'kane', 'augustine@gmail.com', '03343427289', '03-07-2000', 'Male', '187/3A, Shahrah-e-Faisal, Karachi', '42101-12145444-11', 'Pakistani', 'Christanity', 'Computer Science', 'mksheet.png', 'pv.png', '12154511111', '337292320admin.png', 'Accept');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `id` int(11) NOT NULL,
  `file` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact-us`
--

CREATE TABLE `contact-us` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(225) NOT NULL,
  `subject` varchar(225) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact-us`
--

INSERT INTO `contact-us` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Demo', 'demo@gmail.com', 'Demo Subject', 'This is demo Message');

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `id` int(11) NOT NULL,
  `voucher_no` varchar(225) NOT NULL,
  `std_id` varchar(225) NOT NULL,
  `fees` varchar(225) NOT NULL,
  `late_fees` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(11) NOT NULL,
  `tchr_id` varchar(225) NOT NULL,
  `salary` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `school_account`
--

CREATE TABLE `school_account` (
  `id` int(11) NOT NULL,
  `balance` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `std_account`
--

CREATE TABLE `std_account` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `father_name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(220) NOT NULL,
  `cnic_bayform` varchar(225) NOT NULL,
  `citizenship` varchar(225) NOT NULL,
  `religion` varchar(225) NOT NULL,
  `program` varchar(225) NOT NULL,
  `profile` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `user_type` int(11) NOT NULL DEFAULT 3,
  `profile` varchar(255) NOT NULL,
  `CNIC` varchar(30) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `email`, `phone`, `pass`, `user_type`, `profile`, `CNIC`, `gender`, `address`) VALUES
(1, 'Ali', 'ali@teacher.ecs.com', '03343427289', '202cb962ac59075b964b07152d234b70', 3, 'down.jpg', '222222222222', 'Male', '38-F, P.E.C.H.S.,Karachi'),
(3, 'Rohan', 'rohan@teacher.ecs.com', '03323232323', '202cb962ac59075b964b07152d234b70', 3, '377806961.jpg', '222222222222', 'Male', '3rd Fl.Al-Hamra CentreM.A.Jinnah Road, Karachi'),
(4, 'Issac', 'issac@teacher.ecs.com', '0334342728', '202cb962ac59075b964b07152d234b70', 3, '1463680616a.webp', '11111111111', 'Male', ' #A-60, Block &#39;B&#39; Mian Rashid Minas Road, Karachi');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `id` int(11) NOT NULL,
  `mon` varchar(225) NOT NULL,
  `tue` varchar(225) NOT NULL,
  `wed` varchar(225) NOT NULL,
  `thur` varchar(225) NOT NULL,
  `fri` varchar(225) NOT NULL,
  `sat` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `trans_type` varchar(225) NOT NULL,
  `trans_from` varchar(225) NOT NULL,
  `trans_to` varchar(225) NOT NULL,
  `amount` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `user_type` int(11) NOT NULL DEFAULT 1,
  `profile` varchar(225) NOT NULL,
  `CNIC` varchar(25) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `pass`, `user_type`, `profile`, `CNIC`, `gender`) VALUES
(1, 'Admin', 'admin@ecs.com', '03318343144', '202cb962ac59075b964b07152d234b70', 0, '337292320admin.png', '111111111111', 'Male'),
(2, 'Shahzaib Abid', 'shahzaibabidsaeed@gmail.com', '03318343144', '202cb962ac59075b964b07152d234b70', 1, '769866400shahzaib.jpg', '111111111111', 'Male'),
(3, 'Charles Stephen', 'charles@gmail.com', '03343427289', '202cb962ac59075b964b07152d234b70', 1, '1639739768pFHNrg.jpg', '111111111111', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission_form`
--
ALTER TABLE `admission_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact-us`
--
ALTER TABLE `contact-us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_account`
--
ALTER TABLE `school_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `std_account`
--
ALTER TABLE `std_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admission_form`
--
ALTER TABLE `admission_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact-us`
--
ALTER TABLE `contact-us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school_account`
--
ALTER TABLE `school_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `std_account`
--
ALTER TABLE `std_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
