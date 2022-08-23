-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2022 at 07:31 PM
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
(1, 'Lily', 'lily@admin.ecs.com', '03343427289', '202cb962ac59075b964b07152d234b70', 2, '382231427te1.jpg', '222222222222', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `admission_fee`
--

CREATE TABLE `admission_fee` (
  `id` int(11) NOT NULL,
  `admission_form_id` int(11) NOT NULL,
  `Voucher` varchar(255) NOT NULL,
  `fee` int(11) NOT NULL DEFAULT 500,
  `amount` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pay fees'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admission_fee`
--

INSERT INTO `admission_fee` (`id`, `admission_form_id`, `Voucher`, `fee`, `amount`, `status`) VALUES
(10, 10, 'ECS-527387156', 500, 500, 'Paid'),
(11, 11, 'ECS-1638427278', 500, 500, 'Paid'),
(12, 12, 'ECS-1793503089', 500, 500, 'Paid');

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
  `user_id_` int(225) NOT NULL,
  `profile` varchar(225) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admission_form`
--

INSERT INTO `admission_form` (`id`, `std_name`, `father_name`, `email`, `phone`, `dob`, `gender`, `address`, `cnic_bayform`, `citizenship`, `religion`, `program`, `marksheet`, `prov_certificate`, `user_id_`, `profile`, `status`) VALUES
(10, 'Charles Stephen', 'Adwin', 'charlesadwin99@gmail.com', '03343427289', '2022-08-03', 'Male', 'B Road, Nursery Bus Stop, Karachi, Karachi', '12345678912', 'Pakistani', 'Christianity', 'Commerce', '1723148151mksheet.png', 'pv.png', 3, '14511422501639739768pFHNrg.jpg', 'Accepted'),
(11, 'Shahzaib', 'Hammad', 'shahzaibabidsaeed@gmail.com', '0334342728', '2022-08-25', 'Male', '72-N, P.E.C.H.S.,Karachi', '98765432198', 'Pakistani', 'Islam', 'Pre-Medical', '774173160mksheet.png', 'pv.png', 2, '2128280155769866400shahzaib.jpg', 'Accepted'),
(12, 'Ahmer', 'Khan', 'ahmer@gmail.com', '03343427289', '03-07-2000', '', '72-N, P.E.C.H.S., Karachi', '15987423658', 'Pakistani', 'Islam', '', '1723148151mksheet.png', 'pv.png', 2, '14511422501639739768pFHNrg.jpg', 'Accepted');

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
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `name`) VALUES
(1, 'XI-Pre-Engineering'),
(2, 'XII-Pre-Engineering'),
(3, 'XI-Pre-Medical'),
(4, 'XII-Pre-Medical'),
(5, 'XI-Computer Science'),
(6, 'XII-Computer Science'),
(7, 'XI-Arts'),
(8, 'XII-Arts'),
(9, 'XI-Commerce'),
(10, 'XII-Commerce');

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
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `start_time` varchar(255) NOT NULL,
  `end_time` varchar(255) NOT NULL,
  `file` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `program_course`
--

CREATE TABLE `program_course` (
  `id` int(11) NOT NULL,
  `program_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program_course`
--

INSERT INTO `program_course` (`id`, `program_name`) VALUES
(1, 'Pre-Engineering'),
(2, 'Pre-Medical'),
(3, 'Computer Science'),
(4, 'Arts'),
(5, 'Commerce');

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
  `profile` varchar(225) NOT NULL,
  `admission_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `std_account`
--

INSERT INTO `std_account` (`id`, `name`, `father_name`, `email`, `phone`, `pass`, `dob`, `gender`, `address`, `cnic_bayform`, `citizenship`, `religion`, `program`, `profile`, `admission_id`) VALUES
(4, 'Charles Stephen', 'Adwin', 'default@student.ecs.com', '03343427289', 'Password', '2022-08-03', 'Male', 'B Road, Nursery Bus Stop, Karachi, Karachi', '12345678912', 'Pakistani', 'Christianity', 'Commerce', '14511422501639739768pFHNrg.jpg', 10),
(5, 'Shahzaib', 'Hammad', 'default@student.ecs.com', '0334342728', 'Password', '2022-08-25', 'Male', '72-N, P.E.C.H.S.,Karachi', '98765432198', 'Pakistani', 'Islam', 'Pre-Medical', '2128280155769866400shahzaib.jpg', 11),
(7, 'Ahmer', 'Khan', 'default@student.ecs.com', '03343427289', 'Password', '03-07-2000', '', '72-N, P.E.C.H.S., Karachi', '15987423658', 'Pakistani', 'Islam', '', '14511422501639739768pFHNrg.jpg', 0);

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
(3, 'Charles Stephen', 'charles@gmail.com', '03343427289', '202cb962ac59075b964b07152d234b70', 1, '1639739768pFHNrg.jpg', '111111111111', 'Male'),
(5, 'Lily', 'lily@gmail.com', '4444444747', '202cb962ac59075b964b07152d234b70', 1, '', '52865286363626', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission_fee`
--
ALTER TABLE `admission_fee`
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
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact-us`
--
ALTER TABLE `contact-us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program_course`
--
ALTER TABLE `program_course`
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
-- AUTO_INCREMENT for table `admission_fee`
--
ALTER TABLE `admission_fee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `admission_form`
--
ALTER TABLE `admission_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact-us`
--
ALTER TABLE `contact-us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `program_course`
--
ALTER TABLE `program_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
