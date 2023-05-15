-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2023 at 04:16 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_code`, `course_name`) VALUES
(2, 'BSCS', 'Computer Science'),
(3, 'CS55', 'Computer Engineering '),
(6, 'CS02', 'Computer Security '),
(9, 'WD51', 'Web Development'),
(10, '5051', 'Hardware and Networking'),
(11, '6002', 'Advance Wordpress'),
(12, 'ME55', 'Micro Economics'),
(13, 'ST00', 'Stock Trading'),
(14, 'MA85', 'Macro Economics'),
(15, 'AP55', 'The History of Ancient Philosophy'),
(16, 'BC25', 'Biological Anthropology Course'),
(17, 'BE05', 'Higher Program in Business Management'),
(18, 'BSCS', 'Computer Science'),
(19, 'BSCS', 'Computer Science'),
(20, '', ''),
(21, '', '');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

CREATE TABLE `days` (
  `id` int(1) NOT NULL,
  `day` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `faculty_name`, `designation`) VALUES
(22, 'Lee', 'Computer Science'),
(25, 'may', 'Thesis'),
(26, 'Darwin', 'Elective'),
(28, 'Renegado', 'SIT');


CREATE TABLE IF NOT EXISTS `users` (
    `usersId` int(20) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    `usersType` varchar(128) NOT NULL,
    `usersFName` varchar(128) NOT NULL,
    `usersLName` varchar(128) NOT NULL,
    `usersEmail` varchar(128) NOT NULL,
    `usersUid` varchar(128) NOT NULL,
    `usersPwd` varchar(128) NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `overload`
--

CREATE TABLE `overload` (
  `id` int(11) NOT NULL,
  `overloaded_units` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `subject_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_code` varchar(10) NOT NULL,
  `subject_description` varchar(100) NOT NULL,
  `subject_units` int(11) NOT NULL,
  `is_lecture` tinyint(1) NOT NULL,
  `is_laboratory` tinyint(1) NOT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_code`, `subject_description`, `subject_units`, `is_lecture`, `is_laboratory`) VALUES

('CS19', 'Computer Programming 1', 3, 1, 1),
('CS20', 'Computer Programming 2', 3, 1, 1),
('CS21', 'Data Structures and Algorithms', 3, 1, 1),
('CS22', 'Operating Systems', 3, 1, 1),
('CS23', 'Data Analytics', 3, 1, 1),
('CS24', 'Computer Networks', 3, 1, 1),
('CS25', 'Web Development', 3, 1, 1),
('CS26', 'Software Engineering', 3, 1, 1),
('CS27', 'Computer Graphics', 3, 1, 1),
('CS28', 'Artificial Intelligence', 3, 1, 1),
('CS29', 'Computer Security', 3, 1, 1),
('CS30', 'Human-Computer Interaction', 3, 1, 1),
('CS31', 'Differential and Integral Calculus', 3, 1, 1),
('CS32', 'Network Analyst', 3, 1, 1),
('CS33', 'Object Oriented Programming', 3, 1, 1),
('CS34', 'Introduction to Computing', 3, 1, 1),
('CS35', 'Computer Architecture and Organization', 3, 1, 1),
('CS36', 'Programming Language (Design and Implementation)', 3, 1, 1),
('CS37', 'Information Management', 3, 1, 1),
('CS38', 'Software Engineering 2', 3, 1, 1),
('CS39', 'Web Development', 3, 1, 1),
('CS40', 'CS Professional Elective 1', 3, 1, 1),
('CS41', 'CS Professional Elective 2', 3, 1, 1),
('CS42', 'CS Professional Elective 3', 3, 1, 1),
('CS43', 'Modeling and Simulation', 3, 1, 1),
('CS44', 'Applications Development and Emerging Technologies', 3, 1, 1),
('CS45', 'Operating Systems Concepts', 3, 1, 1),
('IT01', 'Computer Fundamentals', 3, 1, 1),
('IT02', 'Web Design and Development', 3, 1, 1),
('IT03', 'Database Management Systems', 3, 1, 1),
('IT04', 'Networking Fundamentals', 3, 1, 1),
('IT05', 'Object Oriented Programming', 3, 1, 1),
('IT06', 'Data Structures and Algorithms', 3, 1, 1),
('IT07', 'Software Engineering', 3, 1, 1),
('IT08', 'Information Systems Analysis and Design', 3, 1, 1),
('IT09', 'Mobile Application Development', 3, 1, 1),
('IT10', 'Cloud Computing', 3, 1, 1),
('NS01', 'Introduction to Networks', 3, 1, 1),
('NS02', 'Network Security', 3, 1, 1),
('NS03', 'Routing and Switching Essentials', 3, 1, 1),
('NS04', 'Scaling Networks', 3, 1, 1),
('NS05', 'Connecting Networks', 3, 1, 1),
('NS06', 'Network Administration', 3, 1, 1),
('NS07', 'Wireless Networks', 3, 1, 1),
('NS08', 'Enterprise Networking', 3, 1, 1),
('NS09', 'Network Troubleshooting', 3, 1, 1),
('NS10', 'Network Design', 3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `timer`
--

CREATE TABLE `timer` (
  `id` int(11) NOT NULL,
  `start_time` varchar(250) NOT NULL,
  `end_time` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersType`, `usersFName`, `usersLName`, `usersEmail`, `usersUid`, `usersPwd`) VALUES
(1, 'Faculty', 'demo', 'demo', 'demo@gmail.com', 'demo', '$2y$10$K2LRt.0UbF9aD2cMgGm3zu4vtrM2gmCzfscAlM2HU7Rh8XvsqhC7u');

-- --------------------------------------------------------

--
-- Table structure for table `viewing`
--

CREATE TABLE `viewing` (
  `id` int(11) NOT NULL,
  `faculty` int(11) NOT NULL,
  `subject` int(11) NOT NULL,
  `room` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `timer`
--
ALTER TABLE `timer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `viewing`
--
ALTER TABLE `viewing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
