-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2022 at 05:04 AM
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
-- Table structure for table `accounting`
--

CREATE TABLE `accounting` (
  `id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `total_mks` int(11) NOT NULL,
  `obt_mks` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `class_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounting`
--

INSERT INTO `accounting` (`id`, `exam_id`, `student_id`, `total_mks`, `obt_mks`, `status`, `class_id`, `program_id`) VALUES
(1, 4, 4, 20, 12, 'Pass', 1, 5);

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
(12, 12, 'ECS-1793503089', 500, 500, 'Paid'),
(13, 10, 'ECS-1411561439', 500, 0, 'Pay fees');

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
(10, 'Charles Stephen', 'Adwin', 'charlesadwin99@gmail.com', '03343427289', '2022-08-03', 'Male', 'B Road, Nursery Bus Stop, Karachi, Karachi', '12345678912', 'Pakistani', 'Christianity', 'Commerce', '1723148151mksheet.png', 'pv.png', 3, '14511422501639739768pFHNrg.jpg', 'On hold'),
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
-- Table structure for table `botany`
--

CREATE TABLE `botany` (
  `id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `total_mks` int(11) NOT NULL,
  `obt_mks` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `class_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `botany`
--

INSERT INTO `botany` (`id`, `exam_id`, `student_id`, `total_mks`, `obt_mks`, `status`, `class_id`, `program_id`) VALUES
(1, 4, 5, 20, 16, 'Pass', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `chemistry`
--

CREATE TABLE `chemistry` (
  `id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `total_mks` int(11) NOT NULL,
  `obt_mks` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `class_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chemistry`
--

INSERT INTO `chemistry` (`id`, `exam_id`, `student_id`, `total_mks`, `obt_mks`, `status`, `class_id`, `program_id`) VALUES
(1, 4, 5, 20, 15, 'Pass', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `civics`
--

CREATE TABLE `civics` (
  `id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `total_mks` int(11) NOT NULL,
  `obt_mks` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `class_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL
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
(1, 'XI'),
(2, 'XII');

-- --------------------------------------------------------

--
-- Table structure for table `computer_science`
--

CREATE TABLE `computer_science` (
  `id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `total_mks` int(11) NOT NULL,
  `obt_mks` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `class_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL
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
(1, 'Demo', 'demo@gmail.com', 'Demo Subject', 'This is demo Message'),
(2, 'Charles Stephen', 'charlesadwin@123.com', 'demo subject', 'this is my demo message'),
(3, 'ashmam', 'jack@gmail.com', 'demo subject', 'This is demo message');

-- --------------------------------------------------------

--
-- Table structure for table `economics`
--

CREATE TABLE `economics` (
  `id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `total_mks` int(11) NOT NULL,
  `obt_mks` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `class_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `economics`
--

INSERT INTO `economics` (`id`, `exam_id`, `student_id`, `total_mks`, `obt_mks`, `status`, `class_id`, `program_id`) VALUES
(1, 4, 4, 20, 10, 'Pass', 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `total_mks` int(11) NOT NULL,
  `obt_mks` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `class_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `english`
--

CREATE TABLE `english` (
  `id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `total_mks` int(11) NOT NULL,
  `obt_mks` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `class_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `english`
--

INSERT INTO `english` (`id`, `exam_id`, `student_id`, `total_mks`, `obt_mks`, `status`, `class_id`, `program_id`) VALUES
(2, 3, 4, 20, 8, 'Pass', 1, 5),
(3, 3, 5, 20, 8, 'Pass', 1, 2),
(4, 3, 5, 20, 8, 'Pass', 1, 2),
(5, 3, 4, 20, 5, 'Fail', 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `subject` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `start_time` varchar(255) NOT NULL,
  `end_time` varchar(255) NOT NULL,
  `file` longtext NOT NULL,
  `program_id` int(11) NOT NULL,
  `result` varchar(255) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id`, `class_id`, `subject`, `date`, `start_time`, `end_time`, `file`, `program_id`, `result`) VALUES
(3, 1, 1, '2022-08-25', '17:00', '17:30', 'https://forms.gle/iYCupU8g5vMGJVHw5', 5, 'no');

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
-- Table structure for table `final`
--

CREATE TABLE `final` (
  `id` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `eng` int(11) NOT NULL,
  `urdu` int(11) NOT NULL,
  `isl` int(11) NOT NULL,
  `math` int(11) NOT NULL,
  `phy` int(11) NOT NULL,
  `chem` int(11) NOT NULL,
  `zoology` int(11) NOT NULL,
  `botany` int(11) NOT NULL,
  `computer` int(11) NOT NULL,
  `civic` int(11) NOT NULL,
  `psy` int(11) NOT NULL,
  `edu` int(11) NOT NULL,
  `acc` int(11) NOT NULL,
  `economic` int(11) NOT NULL,
  `poc` int(11) NOT NULL,
  `obt` int(11) NOT NULL,
  `ttl` int(11) NOT NULL,
  `per` float NOT NULL,
  `grade` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `final_exam`
--

CREATE TABLE `final_exam` (
  `id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `subject` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `start_time` varchar(255) NOT NULL,
  `end_time` varchar(255) NOT NULL,
  `file` longtext NOT NULL,
  `program_id` int(11) NOT NULL,
  `result` varchar(255) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `final_exam`
--

INSERT INTO `final_exam` (`id`, `class_id`, `subject`, `date`, `start_time`, `end_time`, `file`, `program_id`, `result`) VALUES
(1, 1, 18, '2023-07-07', '14:00', '15:00', 'demo', 5, 'no'),
(2, 1, 10, '2022-09-30', '10:00', '10:40', 'file', 3, 'no');

-- --------------------------------------------------------

--
-- Table structure for table `islamiat`
--

CREATE TABLE `islamiat` (
  `id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `total_mks` int(11) NOT NULL,
  `obt_mks` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `class_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `islamiat`
--

INSERT INTO `islamiat` (`id`, `exam_id`, `student_id`, `total_mks`, `obt_mks`, `status`, `class_id`, `program_id`) VALUES
(1, 4, 4, 20, 5, 'Fail', 1, 5),
(2, 4, 5, 20, 8, 'Pass', 1, 2),
(3, 4, 5, 20, 5, 'Fail', 1, 2),
(4, 4, 4, 20, 9, 'Pass', 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `math`
--

CREATE TABLE `math` (
  `id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `total_mks` int(11) NOT NULL,
  `obt_mks` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `class_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `math`
--

INSERT INTO `math` (`id`, `exam_id`, `student_id`, `total_mks`, `obt_mks`, `status`, `class_id`, `program_id`) VALUES
(1, 4, 4, 20, 9, 'Pass', 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `mid`
--

CREATE TABLE `mid` (
  `id` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `eng` int(11) NOT NULL,
  `urdu` int(11) NOT NULL,
  `isl` int(11) NOT NULL,
  `math` int(11) NOT NULL,
  `phy` int(11) NOT NULL,
  `chem` int(11) NOT NULL,
  `zoology` int(11) NOT NULL,
  `botany` int(11) NOT NULL,
  `computer` int(11) NOT NULL,
  `civic` int(11) NOT NULL,
  `psy` int(11) NOT NULL,
  `edu` int(11) NOT NULL,
  `acc` int(11) NOT NULL,
  `economic` int(11) NOT NULL,
  `poc` int(11) NOT NULL,
  `obt` int(11) NOT NULL,
  `ttl` int(11) NOT NULL,
  `per` float NOT NULL,
  `grade` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mid`
--

INSERT INTO `mid` (`id`, `UserId`, `eng`, `urdu`, `isl`, `math`, `phy`, `chem`, `zoology`, `botany`, `computer`, `civic`, `psy`, `edu`, `acc`, `economic`, `poc`, `obt`, `ttl`, `per`, `grade`, `status`) VALUES
(1, 5, 80, 76, 85, 0, 67, 75, 75, 85, 0, 0, 0, 0, 0, 0, 0, 543, 700, 77.58, 'A+', 'Pass'),
(2, 4, 85, 70, 79, 80, 0, 0, 0, 0, 0, 0, 0, 0, 85, 80, 75, 554, 700, 77.14, 'A+', 'Pass');

-- --------------------------------------------------------

--
-- Table structure for table `mid_exam`
--

CREATE TABLE `mid_exam` (
  `id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `subject` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `start_time` varchar(255) NOT NULL,
  `end_time` varchar(255) NOT NULL,
  `file` longtext NOT NULL,
  `program_id` int(11) NOT NULL,
  `result` varchar(255) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mid_exam`
--

INSERT INTO `mid_exam` (`id`, `class_id`, `subject`, `date`, `start_time`, `end_time`, `file`, `program_id`, `result`) VALUES
(1, 1, 18, '2020-08-08', '15:00', '15:50', 'file', 5, 'no'),
(3, 1, 12, '2022-09-05', '13:30', '02:10', 'file', 2, 'no');

-- --------------------------------------------------------

--
-- Table structure for table `physic`
--

CREATE TABLE `physic` (
  `id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `total_mks` int(11) NOT NULL,
  `obt_mks` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `class_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `physic`
--

INSERT INTO `physic` (`id`, `exam_id`, `student_id`, `total_mks`, `obt_mks`, `status`, `class_id`, `program_id`) VALUES
(1, 4, 5, 20, 8, 'Pass', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `poc`
--

CREATE TABLE `poc` (
  `id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `total_mks` int(11) NOT NULL,
  `obt_mks` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `class_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `poc`
--

INSERT INTO `poc` (`id`, `exam_id`, `student_id`, `total_mks`, `obt_mks`, `status`, `class_id`, `program_id`) VALUES
(1, 4, 4, 20, 16, 'Pass', 1, 5);

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
-- Table structure for table `psychology`
--

CREATE TABLE `psychology` (
  `id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `total_mks` int(11) NOT NULL,
  `obt_mks` int(11) NOT NULL,
  `per` float NOT NULL,
  `grade` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `class_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL
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
  `pass` varchar(255) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(220) NOT NULL,
  `cnic_bayform` varchar(225) NOT NULL,
  `citizenship` varchar(225) NOT NULL,
  `religion` varchar(225) NOT NULL,
  `program` varchar(225) NOT NULL,
  `profile` varchar(225) NOT NULL,
  `admission_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL DEFAULT 1,
  `user_type` int(11) NOT NULL DEFAULT 4
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `std_account`
--

INSERT INTO `std_account` (`id`, `name`, `father_name`, `email`, `phone`, `pass`, `dob`, `gender`, `address`, `cnic_bayform`, `citizenship`, `religion`, `program`, `profile`, `admission_id`, `class_id`, `user_type`) VALUES
(4, 'Charles Stephen', 'Adwin', 'charles@student.ecs.com', '03343427289', '202cb962ac59075b964b07152d234b70', '2022-08-03', 'Male', 'B Road, Nursery Bus Stop, Karachi, Karachi', '12345678912', 'Pakistani', 'Christianity', 'Commerce', '1639739768pFHNrg.jpg', 10, 1, 4),
(5, 'Shahzaib', 'Hammad', 'shahzaib@student.ecs.com', '0334342728', '202cb962ac59075b964b07152d234b70', '2022-08-25', 'Male', '72-N, P.E.C.H.S.,Karachi', '98765432198', 'Pakistani', 'Islam', 'Pre-Medical', '769866400shahzaib.jpg', 11, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `teacher_email` varchar(255) NOT NULL,
  `class_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `teacher_email`, `class_id`, `program_id`) VALUES
(1, 'English', 'alexandera@teacher.ecs.com', 1, 0),
(2, 'Urdu', 'zuhair@teacher.ecs.com', 1, 0),
(3, 'Math', 'roselean@teacher.ecs.com', 1, 3),
(4, 'Physics', 'issac@teacher.ecs.com', 1, 2),
(5, 'Chemistry', 'rohan@teacher.ecs.com', 1, 1),
(6, 'Islamiat', 'ali@teacher.ecs.com', 1, 0),
(7, 'Math', 'mina@teacher.ecs.com', 1, 1),
(8, 'Business Math', 'suhail@teacher.ecs.com', 1, 5),
(9, 'Physics', 'becky@teacher.ecs.com', 1, 1),
(10, 'Physics', 'roby@student.ecs.com', 1, 3),
(11, 'Chemistry', 'gadaleta@teacher.ecs.com', 1, 2),
(12, 'Zoology', 'tahir@teacher.ecs.com', 1, 2),
(13, 'Botany', 'syahiran@teacher.ecs.com', 1, 2),
(14, 'Computer Science', 'junguang@teacher.ecs.com', 1, 3),
(15, 'Civics', 'faizal@teacher.ecs.com', 1, 4),
(16, 'Psychology', 'diaz@teacher.ecs.com', 1, 4),
(17, 'Education', 'nellia@teacher.ecs.com', 1, 4),
(18, 'Accounting', 'sunny@teacher.ecs.com', 1, 5),
(19, 'Economics', 'johnhattie@teacher.ecs.com', 1, 5),
(20, 'POC', 'jonathanjames@teacher.ecs.com', 1, 5);

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
(4, 'Issac', 'issac@teacher.ecs.com', '0334342728', '202cb962ac59075b964b07152d234b70', 3, '1463680616a.webp', '11111111111', 'Male', ' #A-60, Block &#39;B&#39; Mian Rashid Minas Road, Karachi'),
(5, 'Alexandera', 'alexandera@teacher.ecs.com', '0312264622', 'd41d8cd98f00b204e9800998ecf8427e', 3, '1195276961alexandra_fuentes_pic01.jpg', '123456789', 'Female', 'Defence Phase 2'),
(6, 'Zuhair', 'zuhair@teacher.ecs.com', '0312264622', '202cb962ac59075b964b07152d234b70', 3, '2080091011images (1).jpg', '123456789', 'Male', 'Defence'),
(7, 'Roselean', 'roselean@teacher.ecs.com', '0312264622', '202cb962ac59075b964b07152d234b70', 3, '988319481images (2).jpg', '123456789', 'Female', 'Gulshan'),
(8, 'Mina', 'mina@teacher.ecs.com', '03343427289', '202cb962ac59075b964b07152d234b70', 3, '19382069261.jpg', '12345678912', 'Female', 'DHA Phase 1'),
(9, 'Suhail', 'suhail@teacher.ecs.com', '0334342728', '202cb962ac59075b964b07152d234b70', 3, '11166264102.jpg', '98765432198', 'Male', 'P.E.C.H.S'),
(10, 'Becky', 'becky@teacher.ecs.com', '03323232323', '202cb962ac59075b964b07152d234b70', 3, '21103933593.jpg', '12345678912', 'Female', 'P.E.C.H.S '),
(11, 'Roby', 'roby@student.ecs.com', '03323232323', '202cb962ac59075b964b07152d234b70', 3, '7386605994.jpg', '98765432198', 'Male', 'DHA Phase 4'),
(12, 'Gadaleta', 'gadaleta@teacher.ecs.com', '03343427289', '202cb962ac59075b964b07152d234b70', 3, '12861438211Q02011.jpg', '12345678912', 'Female', 'DHA Phase 7'),
(13, 'Tahir', 'tahir@teacher.ecs.com', '0334342728', 'd41d8cd98f00b204e9800998ecf8427e', 3, '1474058612t20-5.jpg', '12345678912', 'Male', 'DHA Phase 2'),
(14, 'Syahiran', 'syahiran@teacher.ecs.com', '0334342728', '202cb962ac59075b964b07152d234b70', 3, '321499396teacher-Syahiran.png', '98765432198', 'Male', 'DHA Phase 8'),
(15, 'Junguang', 'junguang@teacher.ecs.com', '03343427289', '202cb962ac59075b964b07152d234b70', 3, '407585062teacher-Junguang.png', '98765432198', 'Male', 'P.E.C.H.S'),
(16, 'Faizal', 'faizal@teacher.ecs.com', '0334342728', '202cb962ac59075b964b07152d234b70', 3, '330807519teacher-Faizal.png', '12345678912', 'Male', 'Saddar, Karachi'),
(17, 'Diaz', 'diaz@teacher.ecs.com', '0334342728', '202cb962ac59075b964b07152d234b70', 3, '566980156teacher-Diaz.png', '98765432198', 'Male', 'DHA Phase 1'),
(18, 'Nellia', 'nellia@teacher.ecs.com', '03323232323', '202cb962ac59075b964b07152d234b70', 3, '1272140168teacher-Nellia.png', '', 'Female', 'Saddar, Karachi'),
(19, 'Sunny', 'sunny@teacher.ecs.com', '03343427289', '202cb962ac59075b964b07152d234b70', 3, '815741879teacher-Sunny.png', '12345678912', 'Female', 'Saddar, Karachi'),
(20, 'John Hattie', 'johnhattie@teacher.ecs.com', '03323232323', '202cb962ac59075b964b07152d234b70', 3, '2018674235John-Hattie-e1595500722378.png', '98765432198', 'Male', 'Saddar, Karachi'),
(21, 'Jonathan James', 'jonathanjames@teacher.ecs.com', '0334342728', '202cb962ac59075b964b07152d234b70', 3, '300956755j-mctighe.jpg', '98765432198', 'Male', 'DHA Phase 6');

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
-- Table structure for table `urdu`
--

CREATE TABLE `urdu` (
  `id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `total_mks` int(11) NOT NULL,
  `obt_mks` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `class_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `urdu`
--

INSERT INTO `urdu` (`id`, `exam_id`, `student_id`, `total_mks`, `obt_mks`, `status`, `class_id`, `program_id`) VALUES
(1, 4, 4, 20, 19, 'Pass', 1, 5),
(2, 4, 5, 20, 8, 'Pass', 1, 2);

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

-- --------------------------------------------------------

--
-- Table structure for table `zoology`
--

CREATE TABLE `zoology` (
  `id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `total_mks` int(11) NOT NULL,
  `obt_mks` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `class_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `zoology`
--

INSERT INTO `zoology` (`id`, `exam_id`, `student_id`, `total_mks`, `obt_mks`, `status`, `class_id`, `program_id`) VALUES
(1, 4, 5, 20, 16, 'Pass', 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounting`
--
ALTER TABLE `accounting`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `botany`
--
ALTER TABLE `botany`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chemistry`
--
ALTER TABLE `chemistry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `civics`
--
ALTER TABLE `civics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `computer_science`
--
ALTER TABLE `computer_science`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact-us`
--
ALTER TABLE `contact-us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `economics`
--
ALTER TABLE `economics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `english`
--
ALTER TABLE `english`
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
-- Indexes for table `final`
--
ALTER TABLE `final`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `final_exam`
--
ALTER TABLE `final_exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `islamiat`
--
ALTER TABLE `islamiat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `math`
--
ALTER TABLE `math`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mid`
--
ALTER TABLE `mid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mid_exam`
--
ALTER TABLE `mid_exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `physic`
--
ALTER TABLE `physic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poc`
--
ALTER TABLE `poc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program_course`
--
ALTER TABLE `program_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `psychology`
--
ALTER TABLE `psychology`
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
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `urdu`
--
ALTER TABLE `urdu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zoology`
--
ALTER TABLE `zoology`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounting`
--
ALTER TABLE `accounting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admission_fee`
--
ALTER TABLE `admission_fee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
-- AUTO_INCREMENT for table `botany`
--
ALTER TABLE `botany`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chemistry`
--
ALTER TABLE `chemistry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `civics`
--
ALTER TABLE `civics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `computer_science`
--
ALTER TABLE `computer_science`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact-us`
--
ALTER TABLE `contact-us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `economics`
--
ALTER TABLE `economics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `english`
--
ALTER TABLE `english`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `final`
--
ALTER TABLE `final`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `final_exam`
--
ALTER TABLE `final_exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `islamiat`
--
ALTER TABLE `islamiat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `math`
--
ALTER TABLE `math`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mid`
--
ALTER TABLE `mid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mid_exam`
--
ALTER TABLE `mid_exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `physic`
--
ALTER TABLE `physic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `poc`
--
ALTER TABLE `poc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `program_course`
--
ALTER TABLE `program_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `psychology`
--
ALTER TABLE `psychology`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `urdu`
--
ALTER TABLE `urdu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `zoology`
--
ALTER TABLE `zoology`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
