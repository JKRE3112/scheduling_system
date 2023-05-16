-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2023 at 03:20 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `insertion`
--

-- --------------------------------------------------------

--
-- Table structure for table `addtable`
--

CREATE TABLE `addtable` (
  `id` int(11) NOT NULL,
  `faculty` varchar(250) NOT NULL,
  `course` varchar(250) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `room` varchar(250) NOT NULL,
  `start_time` varchar(250) NOT NULL,
  `end_time` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `addtable`
--

INSERT INTO `addtable` (`id`, `faculty`, `course`, `subject`, `room`, `start_time`, `end_time`) VALUES
(55, 'Lee', 'Computer Science', 'Computer Programming 1', 'SB14', '5:30 pm', '7:30 pm');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_code` varchar(259) NOT NULL,
  `course_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_code`, `course_name`) VALUES
(2, 'BSCS', 'Computer Science'),
(22, 'BSIT', 'Information Technology'),
(23, 'BSIS', 'Information System');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `faculty` varchar(250) NOT NULL,
  `course` varchar(250) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `room` varchar(250) NOT NULL,
  `start_time` varchar(250) NOT NULL,
  `end_time` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

CREATE TABLE `days` (
  `id` int(1) NOT NULL,
  `day` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `days`
--

INSERT INTO `days` (`id`, `day`) VALUES
(2, 'Mo'),
(3, 'Tu'),
(4, 'We'),
(5, 'Th'),
(6, 'Fr'),
(7, 'Sa'),
(8, 'Su');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` int(11) NOT NULL,
  `faculty_name` varchar(250) NOT NULL,
  `designation` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `faculty_name`, `designation`) VALUES
(22, 'Lee', 'Computer Science'),
(25, 'may', 'Thesis'),
(26, 'Darwin', 'Elective'),
(28, 'Renegado', 'SIT');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `logId` int(11) NOT NULL,
  `subject_description` varchar(255) DEFAULT NULL,
  `usersUid` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`logId`, `subject_description`, `usersUid`) VALUES
(102, 'Networking Fundamentals', 'headthor'),
(103, 'Computer Architecture and Organization', 'headthor'),
(104, 'CS Professional Elective 2', 'headthor'),
(105, 'Artificial Intelligence', 'headthor'),
(106, 'Software Engineering 2', 'headthor'),
(107, 'Web Development', 'arth123'),
(108, 'Differential and Integral Calculus', 'arth123');

-- --------------------------------------------------------

--
-- Table structure for table `overload`
--

CREATE TABLE `overload` (
  `id` int(11) NOT NULL,
  `overloaded_units` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `overload`
--

INSERT INTO `overload` (`id`, `overloaded_units`) VALUES
(1, 18),
(2, 0),
(3, 3),
(4, 6),
(5, 9),
(6, 12),
(7, 30);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `room` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room`) VALUES
(3, 'SB14'),
(8, 'CP09'),
(9, 'SB11'),
(10, 'CP19'),
(11, 'DM28'),
(12, 'NB15'),
(13, 'SS36'),
(14, 'PK22');

-- --------------------------------------------------------

--
-- Table structure for table `scheduling`
--

CREATE TABLE `scheduling` (
  `UsersUid` varchar(128) NOT NULL,
  `year_level` varchar(20) NOT NULL,
  `course` varchar(50) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `overload` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `scheduling`
--

INSERT INTO `scheduling` (`UsersUid`, `year_level`, `course`, `start_time`, `end_time`, `overload`) VALUES
('0', '', '', '00:00:00', '00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `subject_code` varchar(10) NOT NULL,
  `subject_description` varchar(100) NOT NULL,
  `subject_units` int(11) NOT NULL,
  `is_lecture` tinyint(1) NOT NULL,
  `is_laboratory` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_code`, `subject_description`, `subject_units`, `is_lecture`, `is_laboratory`) VALUES
(1, 'CS19', 'Computer Programming 1', 3, 1, 1),
(2, 'CS20', 'Computer Programming 2', 3, 1, 1),
(3, 'CS21', 'Data Structures and Algorithms', 3, 1, 1),
(4, 'CS22', 'Operating Systems', 3, 1, 1),
(5, 'CS23', 'Data Analytics', 3, 1, 1),
(6, 'CS24', 'Computer Networks', 3, 1, 1),
(7, 'CS25', 'Web Development', 3, 1, 1),
(8, 'CS26', 'Software Engineering', 3, 1, 1),
(9, 'CS27', 'Computer Graphics', 3, 1, 1),
(10, 'CS28', 'Artificial Intelligence', 3, 1, 1),
(11, 'CS29', 'Computer Security', 3, 1, 1),
(12, 'CS30', 'Human-Computer Interaction', 3, 1, 1),
(13, 'CS31', 'Differential and Integral Calculus', 3, 1, 1),
(14, 'CS32', 'Network Analyst', 3, 1, 1),
(15, 'CS33', 'Object Oriented Programming', 3, 1, 1),
(16, 'CS34', 'Introduction to Computing', 3, 1, 1),
(17, 'CS35', 'Computer Architecture and Organization', 3, 1, 1),
(18, 'CS36', 'Programming Language (Design and Implementation)', 3, 1, 1),
(19, 'CS37', 'Information Management', 3, 1, 1),
(20, 'CS38', 'Software Engineering 2', 3, 1, 1),
(21, 'CS39', 'Web Development', 3, 1, 1),
(22, 'CS40', 'CS Professional Elective 1', 3, 1, 1),
(23, 'CS41', 'CS Professional Elective 2', 3, 1, 1),
(24, 'CS42', 'CS Professional Elective 3', 3, 1, 1),
(25, 'CS43', 'Modeling and Simulation', 3, 1, 1),
(26, 'CS44', 'Applications Development and Emerging Technologies', 3, 1, 1),
(27, 'CS45', 'Operating Systems Concepts', 3, 1, 1),
(28, 'IT01', 'Computer Fundamentals', 3, 1, 1),
(29, 'IT02', 'Web Design and Development', 3, 1, 1),
(30, 'IT03', 'Database Management Systems', 3, 1, 1),
(31, 'IT04', 'Networking Fundamentals', 3, 1, 1),
(32, 'IT05', 'Object Oriented Programming', 3, 1, 1),
(33, 'IT06', 'Data Structures and Algorithms', 3, 1, 1),
(34, 'IT07', 'Software Engineering', 3, 1, 1),
(35, 'IT08', 'Information Systems Analysis and Design', 3, 1, 1),
(36, 'IT09', 'Mobile Application Development', 3, 1, 1),
(37, 'IT10', 'Cloud Computing', 3, 1, 1),
(38, 'NS01', 'Introduction to Networks', 3, 1, 1),
(39, 'NS02', 'Network Security', 3, 1, 1),
(40, 'NS03', 'Routing and Switching Essentials', 3, 1, 1),
(41, 'NS04', 'Scaling Networks', 3, 1, 1),
(42, 'NS05', 'Connecting Networks', 3, 1, 1),
(43, 'NS06', 'Network Administration', 3, 1, 1),
(44, 'NS07', 'Wireless Networks', 3, 1, 1),
(45, 'NS08', 'Enterprise Networking', 3, 1, 1),
(46, 'NS09', 'Network Troubleshooting', 3, 1, 1),
(47, 'NS10', 'Network Design', 3, 1, 1),
(48, 'CS19', 'Computer Programming 1', 3, 1, 1),
(49, 'CS20', 'Computer Programming 2', 3, 1, 1),
(50, 'CS21', 'Data Structures and Algorithms', 3, 1, 1),
(51, 'CS22', 'Operating Systems', 3, 1, 1),
(52, 'CS23', 'Data Analytics', 3, 1, 1),
(53, 'CS24', 'Computer Networks', 3, 1, 1),
(54, 'CS25', 'Web Development', 3, 1, 1),
(55, 'CS26', 'Software Engineering', 3, 1, 1),
(56, 'CS27', 'Computer Graphics', 3, 1, 1),
(57, 'CS28', 'Artificial Intelligence', 3, 1, 1),
(58, 'CS29', 'Computer Security', 3, 1, 1),
(59, 'CS30', 'Human-Computer Interaction', 3, 1, 1),
(60, 'CS31', 'Differential and Integral Calculus', 3, 1, 1),
(61, 'CS32', 'Network Analyst', 3, 1, 1),
(62, 'CS33', 'Object Oriented Programming', 3, 1, 1),
(63, 'CS34', 'Introduction to Computing', 3, 1, 1),
(64, 'CS35', 'Computer Architecture and Organization', 3, 1, 1),
(65, 'CS36', 'Programming Language (Design and Implementation)', 3, 1, 1),
(66, 'CS37', 'Information Management', 3, 1, 1),
(67, 'CS38', 'Software Engineering 2', 3, 1, 1),
(68, 'CS39', 'Web Development', 3, 1, 1),
(69, 'CS40', 'CS Professional Elective 1', 3, 1, 1),
(70, 'CS41', 'CS Professional Elective 2', 3, 1, 1),
(71, 'CS42', 'CS Professional Elective 3', 3, 1, 1),
(72, 'CS43', 'Modeling and Simulation', 3, 1, 1),
(73, 'CS44', 'Applications Development and Emerging Technologies', 3, 1, 1),
(74, 'CS45', 'Operating Systems Concepts', 3, 1, 1),
(75, 'IT01', 'Computer Fundamentals', 3, 1, 1),
(76, 'IT02', 'Web Design and Development', 3, 1, 1),
(77, 'IT03', 'Database Management Systems', 3, 1, 1),
(78, 'IT04', 'Networking Fundamentals', 3, 1, 1),
(79, 'IT05', 'Object Oriented Programming', 3, 1, 1),
(80, 'IT06', 'Data Structures and Algorithms', 3, 1, 1),
(81, 'IT07', 'Software Engineering', 3, 1, 1),
(82, 'IT08', 'Information Systems Analysis and Design', 3, 1, 1),
(83, 'IT09', 'Mobile Application Development', 3, 1, 1),
(84, 'IT10', 'Cloud Computing', 3, 1, 1),
(85, 'NS01', 'Introduction to Networks', 3, 1, 1),
(86, 'NS02', 'Network Security', 3, 1, 1),
(87, 'NS03', 'Routing and Switching Essentials', 3, 1, 1),
(88, 'NS04', 'Scaling Networks', 3, 1, 1),
(89, 'NS05', 'Connecting Networks', 3, 1, 1),
(90, 'NS06', 'Network Administration', 3, 1, 1),
(91, 'NS07', 'Wireless Networks', 3, 1, 1),
(92, 'NS08', 'Enterprise Networking', 3, 1, 1),
(93, 'NS09', 'Network Troubleshooting', 3, 1, 1),
(94, 'NS10', 'Network Design', 3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `timer`
--

CREATE TABLE `timer` (
  `id` int(11) NOT NULL,
  `start_time` varchar(250) NOT NULL,
  `end_time` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `timer`
--

INSERT INTO `timer` (`id`, `start_time`, `end_time`) VALUES
(3, '5:30 pm', '7:30 pm'),
(4, '1:00 pm', '5:30 pm'),
(6, '10:00 am', '12:00 pm'),
(7, '6:00 pm', '7:00 pm'),
(8, '7:30 am', '10:30 am'),
(9, '9:20 am', '1:40 pm'),
(10, '6:30 am', '9:00 am'),
(11, '8:00 am', '2:00 pm'),
(12, '10:30 am', '3:00 pm'),
(13, '2:00 pm', '5:00 pm'),
(14, '3:00 pm', '6:00 pm'),
(15, '2', '7');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` int(2) NOT NULL,
  `units` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `units`) VALUES
(1, 18),
(2, 30),
(4, 3),
(5, 6),
(6, 9);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(20) NOT NULL,
  `usersType` varchar(128) NOT NULL,
  `usersFName` varchar(128) NOT NULL,
  `usersLName` varchar(128) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `usersPwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersType`, `usersFName`, `usersLName`, `usersEmail`, `usersUid`, `usersPwd`) VALUES
(1, 'Faculty', 'demo', 'demo', 'demo@gmail.com', 'demo', '$2y$10$K2LRt.0UbF9aD2cMgGm3zu4vtrM2gmCzfscAlM2HU7Rh8XvsqhC7u'),
(2, 'Head', 'Thor', 'Royales', 'Thor@gmail.com', 'headthor', '$2y$10$A2HsFo0g5tD37CRqXTZtyuMT8s0mpFCN8ai0lCvnA4eh/smQZRlOW'),
(3, 'Faculty', 'Arth', 'Carandang', 'arth123@gmail.com', 'arth123', '$2y$10$tUG3SVFVrWF.4liB2OgN6ep85alKo5j8lZlvpk5b2rqkJ.vDP0lf6');

-- --------------------------------------------------------

--
-- Table structure for table `viewing`
--

CREATE TABLE `viewing` (
  `id` int(11) NOT NULL,
  `faculty` int(11) NOT NULL,
  `subject` int(11) NOT NULL,
  `room` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `year_level`
--

CREATE TABLE `year_level` (
  `id` int(11) NOT NULL,
  `year_level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `year_level`
--

INSERT INTO `year_level` (`id`, `year_level`) VALUES
(1, 'First year'),
(2, 'Second year'),
(3, 'Third year'),
(4, 'Fourth year');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addtable`
--
ALTER TABLE `addtable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `days`
--
ALTER TABLE `days`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`logId`);

--
-- Indexes for table `overload`
--
ALTER TABLE `overload`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scheduling`
--
ALTER TABLE `scheduling`
  ADD PRIMARY KEY (`UsersUid`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `timer`
--
ALTER TABLE `timer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- Indexes for table `viewing`
--
ALTER TABLE `viewing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `year_level`
--
ALTER TABLE `year_level`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addtable`
--
ALTER TABLE `addtable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `faculty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `logId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
