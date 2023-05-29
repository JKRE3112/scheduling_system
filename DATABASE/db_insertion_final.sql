-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2023 at 02:51 AM
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
-- Table structure for table `curriculum`
--

CREATE TABLE `curriculum` (
  `id` int(11) NOT NULL,
  `subject_code` varchar(10) NOT NULL,
  `subject_description` varchar(100) NOT NULL,
  `section_name` varchar(20) NOT NULL,
  `course_type` varchar(50) NOT NULL,
  `subject_units` int(11) NOT NULL,
  `subject_hours` int(11) NOT NULL,
  `usersUid` varchar(255) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `dayOfWeek` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `curriculum`
--

INSERT INTO `curriculum` (`id`, `subject_code`, `subject_description`, `section_name`, `course_type`, `subject_units`, `subject_hours`, `usersUid`, `duration`, `dayOfWeek`) VALUES
(1277, 'CC113-M', 'Introduction to Computing', 'BSCS1A', 'STEM', 3, 3, 'headthor', '', ''),
(1278, 'CC113-M', 'Understanding the Self', 'BSCS1A', 'STEM', 3, 3, 'arth123', '', ''),
(1279, 'CC113-M', 'Science, Technology and Society', 'BSCS1A', 'STEM', 3, 3, 'arth123', '', ''),
(1280, 'CC141L-M', 'Computer Programming 1 Lab', 'BSCS1A', 'STEM', 1, 3, 'arth123', '', ''),
(1281, 'CC142-M', 'Computer Programming 1', 'BSCS1A', 'STEM', 2, 2, 'headthor', '', ''),
(1282, 'CS213--M', 'Fundamentals of Math Analysis', 'BSCS1A', 'STEM', 3, 5, '', '', ''),
(1283, 'NSTP1--M', 'CWTS1/ROTC1', 'BSCS1A', 'STEM', 3, 3, '', '', ''),
(1284, 'PE2-M', 'Rhythmic Activities', 'BSCS1A', 'STEM', 2, 2, '', '', ''),
(1285, 'PE1-M', 'Physical Fitness', 'BSCS1A', 'STEM', 2, 2, '', '', ''),
(1292, 'CC113-M', 'Introduction to Computing', 'BSCS1B', 'STEM', 3, 3, '', '', ''),
(1293, 'CC113-M', 'Understanding the Self', 'BSCS1B', 'STEM', 3, 3, '', '', ''),
(1294, 'CC113-M', 'Science, Technology and Society', 'BSCS1B', 'STEM', 3, 3, '', '', ''),
(1295, 'CC141L-M', 'Computer Programming 1 Lab', 'BSCS1B', 'STEM', 1, 3, '', '', ''),
(1296, 'CC142-M', 'Computer Programming 1', 'BSCS1B', 'STEM', 2, 2, '', '', ''),
(1297, 'CS213--M', 'Fundamentals of Math Analysis', 'BSCS1B', 'STEM', 3, 5, '', '', ''),
(1298, 'NSTP1--M', 'CWTS1/ROTC1', 'BSCS1B', 'STEM', 3, 3, '', '', ''),
(1299, 'PE2-M', 'Rhythmic Activities', 'BSCS1B', 'STEM', 2, 2, '', '', ''),
(1300, 'PE1-M', 'Physical Fitness', 'BSCS1B', 'STEM', 2, 2, '', '', ''),
(1322, 'CC113-M', 'Introduction to Computing', 'BSCS1A-NS', 'NON-STEM', 3, 3, '', '', ''),
(1323, 'CC113-M', 'Science, Technology and Society', 'BSCS1A-NS', 'NON-STEM', 3, 3, '', '', ''),
(1324, 'CC141L-M', 'Computer Programming 1 Lab', 'BSCS1A-NS', 'NON-STEM', 1, 3, '', '', ''),
(1325, 'CC142-M', 'Computer Programming 1', 'BSCS1A-NS', 'NON-STEM', 2, 2, '', '', ''),
(1326, 'CS213--M', 'Fundamentals of Math Analysis', 'BSCS1A-NS', 'NON-STEM', 3, 5, '', '', ''),
(1327, 'NSTP1--M', 'CWTS1/ROTC1', 'BSCS1A-NS', 'NON-STEM', 3, 3, '', '', ''),
(1328, 'PE2-M', 'Rhythmic Activities', 'BSCS1A-NS', 'NON-STEM', 2, 2, '', '', ''),
(1329, 'PE1-M', 'Physical Fitness', 'BSCS1A-NS', 'NON-STEM', 2, 2, '', '', '');

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
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `id` int(11) NOT NULL,
  `usersUid` varchar(116) NOT NULL,
  `units` int(11) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `overload` int(11) NOT NULL,
  `total_unit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `demo`
--

INSERT INTO `demo` (`id`, `usersUid`, `units`, `start_time`, `end_time`, `overload`, `total_unit`) VALUES
(10, 'arth123', 18, '08:00:00', '17:00:00', 9, 0),
(40, 'jullie', 6, '07:00:00', '00:00:12', 3, 0),
(50, 'headthor', 6, '07:00:00', '15:00:00', 9, 15);

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
  `subject_units` int(11) NOT NULL,
  `subject_description` varchar(255) DEFAULT NULL,
  `usersUid` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`logId`, `subject_units`, `subject_description`, `usersUid`) VALUES
(252, 3, 'Understanding the Self', 'arth123'),
(253, 3, 'Science, Technology and Society', 'arth123'),
(254, 1, 'Computer Programming 1 Lab', 'arth123'),
(271, 3, 'Introduction to Computing', 'headthor'),
(272, 2, 'Computer Programming 1', 'headthor'),
(273, 3, 'Data Structures and Algorithms', 'headthor'),
(274, 3, 'Systems Integration and Architecture 1', 'headthor'),
(275, 3, 'Business Intelligence', 'headthor'),
(276, 3, 'Systems Administration and Maintenance', 'headthor');

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
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id` int(11) NOT NULL,
  `year_level` varchar(50) DEFAULT NULL,
  `course_code` varchar(50) DEFAULT NULL,
  `course_type` varchar(50) DEFAULT NULL,
  `section_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `year_level`, `course_code`, `course_type`, `section_name`) VALUES
(10, 'First Year', 'Information Technology', 'STEM', 'BSIT1A-STEM'),
(11, 'First Year', 'Information Technology', 'STEM', 'BSIT1B-STEM'),
(12, 'First Year', 'Information Technology', 'STEM', 'BSIT1C-STEM'),
(13, 'First Year', 'Information Technology', 'STEM', 'BSIT1D-STEM'),
(14, 'First Year', 'Information Technology', 'STEM', 'BSIT1E-STEM'),
(16, 'Second Year', 'Information Technology', 'STEM', 'BSIT2A-STEM'),
(18, 'First Year', 'Computer Science', 'STEM', 'BSCS1A-STEM'),
(19, 'First Year', 'Information Technology', 'STEM', 'BSIT1F-STEM'),
(20, 'First Year', 'Information Technology', 'NON-STEM', 'BSIT1A-NON STEM'),
(28, 'Third Year', 'Information System', 'NON-STEM', 'BSIS3A-NON STEM'),
(29, 'Second Year', 'Information System', 'NON-STEM', 'BSIS2A-NON STEM');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `subject_code` varchar(10) NOT NULL,
  `subject_description` varchar(100) NOT NULL,
  `subject_units` int(11) NOT NULL,
  `year_level` varchar(20) NOT NULL,
  `subject_type` varchar(20) NOT NULL,
  `subject_term` varchar(20) NOT NULL,
  `subject_hours` int(11) NOT NULL,
  `course` varchar(255) NOT NULL,
  `course_type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_code`, `subject_description`, `subject_units`, `year_level`, `subject_type`, `subject_term`, `subject_hours`, `course`, `course_type`) VALUES
(1, 'CC113-M', 'Introduction to Computing', 3, 'First year', 'Lecture', '1', 3, 'Computer Science', 'STEM'),
(2, 'CC113-M', 'Introduction to Computing', 3, 'First year', 'Lecture', '1', 3, 'Information Technology', 'STEM'),
(3, 'CC113-M', 'Introduction to Computing', 3, 'First year', 'Lecture', '1', 3, 'Information System', 'STEM'),
(4, 'CC113-M', 'Introduction to Computing', 3, 'First year', 'Lecture', '1', 3, 'Computer Science', 'NON-STEM'),
(5, 'CC113-M', 'Introduction to Computing', 3, 'First year', 'Lecture', '1', 3, 'Information Technology', 'NON-STEM'),
(6, 'CC113-M', 'Introduction to Computing', 3, 'First year', 'Lecture', '1', 3, 'Information System', 'NON-STEM'),
(7, 'CC113-M', 'Understanding the Self', 3, 'First year', 'Lecture', '1', 3, 'Computer Science', 'STEM'),
(8, 'CC113-M', 'Understanding the Self', 3, 'First year', 'Lecture', '1', 3, 'Information Technology', 'STEM'),
(9, 'CC113-M', 'Understanding the Self', 3, 'First year', 'Lecture', '1', 3, 'Information System', 'STEM'),
(10, 'CC113-M', 'Science, Technology and Society', 3, 'First year', 'Lecture', '1', 3, 'Computer Science', 'STEM'),
(11, 'CC113-M', 'Science, Technology and Society', 3, 'First year', 'Lecture', '1', 3, 'Information Technology', 'STEM'),
(12, 'CC113-M', 'Science, Technology and Society', 3, 'First year', 'Lecture', '1', 3, 'Information System', 'STEM'),
(13, 'CC113-M', 'Science, Technology and Society', 3, 'First year', 'Lecture', '1', 3, 'Computer Science', 'NON-STEM'),
(14, 'CC113-M', 'Science, Technology and Society', 3, 'First year', 'Lecture', '1', 3, 'Information Technology', 'NON-STEM'),
(15, 'CC113-M', 'Science, Technology and Society', 3, 'First year', 'Lecture', '1', 3, 'Information System', 'NON-STEM'),
(16, 'CS251L-M', 'Computer Architecture and Organization Lab', 1, 'Second year', 'Laboratory', '1', 3, 'Computer Science', 'NON-STEM'),
(17, 'CS251L-M', 'Computer Architecture and Organization Lab', 1, 'Second year', 'Laboratory', '1', 3, 'Information Technology', 'NON-STEM'),
(18, 'CC132-M', 'Computer Architecture and Organization', 1, 'Second year', 'Lecture', '1', 2, 'Computer Science', 'NON-STEM'),
(19, 'CC132-M', 'Computer Architecture and Organization', 1, 'Second year', 'Lecture', '1', 2, 'Information Technology', 'NON-STEM'),
(20, 'CS251L-M', 'Computer Architecture and Organization Lab', 1, 'Second year', 'Laboratory', '1', 3, 'Computer Science', 'STEM'),
(21, 'CS251L-M', 'Computer Architecture and Organization Lab', 1, 'Second year', 'Laboratory', '1', 3, 'Information Technology', 'STEM'),
(22, 'CC132-M', 'Computer Architecture and Organization', 1, 'Second year', 'Lecture', '1', 2, 'Computer Science', 'STEM'),
(23, 'CC132-M', 'Computer Architecture and Organization', 1, 'Second year', 'Lecture', '1', 2, 'Information Technology', 'STEM'),
(24, 'CC132-M', 'Computer Architecture and Organization', 1, 'Second year', 'Lecture', '1', 2, 'Information System', 'STEM'),
(34, 'CC355-M', 'Operating Systems', 3, 'Second year', 'Lecture', '1', 2, 'Computer Science', 'STEM'),
(35, 'CC355-M', 'Quantitative Methods (Inc. Modeling & Simulation)s', 3, 'Second year', 'Lecture', '2', 3, 'Information Technology', 'STEM'),
(36, 'CC355-M', 'Operating Systems', 3, 'Second year', 'Lecture', '2', 2, 'Information System', 'STEM'),
(37, 'CC355L-M', 'Operating Systems Lab', 1, 'Second year', 'Laboratory', '2', 3, 'Computer Science', 'STEM'),
(38, 'CC355L-M', 'Operating Systems Lab', 1, 'Second year', 'Laboratory', '2', 3, 'Information Technology', 'STEM'),
(39, 'CC355L-M', 'Operating Systems Lab', 1, 'Second year', 'Laboratory', '2', 3, 'Information System', 'STEM'),
(40, 'CC355-M', 'Operating Systems', 3, 'Second year', 'Lecture', '2', 2, 'Computer Science', 'NON-STEM'),
(41, 'CC355-M', 'Operating Systems', 3, 'Second year', 'Lecture', '2', 2, 'Information Technology', 'NON-STEM'),
(42, 'CC355-M', 'Operating Systems', 3, 'Second year', 'Lecture', '2', 2, 'Information System', 'NON-STEM'),
(43, 'CC355L-M', 'Operating Systems Lab', 1, 'Second year', 'Laboratory', '2', 3, 'Computer Science', 'NON-STEM'),
(44, 'CC355L-M', 'Operating Systems Lab', 1, 'Second year', 'Laboratory', '2', 3, 'Information Technology', 'NON-STEM'),
(45, 'CC355L-M', 'Operating Systems Lab', 1, 'Second year', 'Laboratory', '2', 3, 'Information System', 'NON-STEM'),
(46, 'CS411-M', 'Software Engineering', 3, 'Third year', 'Lecture', '1', 2, 'Computer Science', 'NON-STEM'),
(47, 'CS411-M', 'Software Engineering', 3, 'Third year', 'Lecture', '1', 2, 'Information Technology', 'NON-STEM'),
(48, 'CS411-M', 'Software Engineering', 3, 'Third year', 'Lecture', '1', 2, 'Information System', 'NON-STEM'),
(49, 'CS411L-M', 'Software Engineering Lab', 1, 'Third year', 'Laboratory', '1', 3, 'Computer Science', 'NON-STEM'),
(50, 'CS344-M', 'Artificial Intelligence Lab', 3, 'Third year', 'Laboratory', '2', 3, 'Computer Science', 'STEM'),
(51, 'CS411-M', 'Software Engineering', 3, 'Third year', 'Lecture', '1', 2, 'Computer Science', 'STEM'),
(52, 'CS411-M', 'Software Engineering', 3, 'Third year', 'Lecture', '1', 2, 'Information Technology', 'STEM'),
(53, 'CS411-M', 'Software Engineering', 3, 'Third year', 'Lecture', '1', 2, 'Information System', 'STEM'),
(54, 'CS411L-M', 'Software Engineering Lab', 1, 'Third year', 'Laboratory', '1', 3, 'Computer Science', 'STEM'),
(55, 'CS344-M', 'Artificial Intelligence Lab', 3, 'Third year', 'Laboratory', '2', 3, 'Computer Science', 'STEM'),
(56, 'CC555-M', 'Networks and Data Communications', 3, 'Second year', 'Lecture', '2', 2, 'Computer Science', 'NON-STEM'),
(57, 'CC555L-M', 'Networks and Data Communications Lab', 1, 'Second year', 'Laboratory', '2', 3, 'Computer Science', 'NON-STEM'),
(58, 'CC555-M', 'Networks and Data Communications', 3, 'Second year', 'Lecture', '2', 2, 'Computer Science', 'STEM'),
(59, 'CC555L-M', 'Networks and Data Communications Lab', 1, 'Second year', 'Laboratory', '2', 3, 'Computer Science', 'STEM'),
(60, 'MATH221-M', 'Discrete Mathematics', 3, 'Second year', 'Lecture', '2', 3, 'Computer Science', 'NON-STEM'),
(61, 'MATH221-M', 'Discrete Mathematics', 3, 'Second year', 'Lecture', '2', 3, 'Information Technology', 'NON-STEM'),
(62, 'MATH221-M', 'Discrete Mathematics', 3, 'Second year', 'Lecture', '2', 3, 'Information System', 'NON-STEM'),
(63, 'MATH221-M', 'Discrete Mathematics', 3, 'Second year', 'Lecture', '2', 3, 'Computer Science', 'STEM'),
(64, 'MATH221-M', 'Discrete Mathematics', 3, 'Second year', 'Lecture', '2', 3, 'Information Technology', 'STEM'),
(65, 'MATH221-M', 'Discrete Mathematics', 3, 'Second year', 'Lecture', '2', 3, 'Information System', 'STEM'),
(66, 'CC141L-M', 'Computer Programming 2 Lab', 1, 'Second year', 'Laboratory', '1', 3, 'Computer Science', 'NON-STEM'),
(67, 'CC141L-M', 'Computer Programming 2 Lab', 1, 'Second year', 'Laboratory', '1', 3, 'Information Technology', 'NON-STEM'),
(68, 'CC141L-M', 'Computer Programming 2 Lab', 1, 'Second year', 'Laboratory', '1', 3, 'Information System', 'NON-STEM'),
(69, 'CC142-M', 'Computer Programming 2', 2, 'Second year', 'Lecture', '2', 2, 'Computer Science', 'NON-STEM'),
(70, 'CC142-M', 'Computer Programming 2', 2, 'Second year', 'Lecture', '2', 2, 'Information Technology', 'NON-STEM'),
(71, 'CC142-M', 'Computer Programming 2', 2, 'Second year', 'Lecture', '2', 2, 'Information System', 'NON-STEM'),
(72, 'CC141L-M', 'Computer Programming 1 Lab', 1, 'First year', 'Laboratory', '1', 3, 'Computer Science', 'NON-STEM'),
(73, 'CC141L-M', 'Computer Programming 1 Lab', 1, 'First year', 'Laboratory', '1', 3, 'Information Technology', 'NON-STEM'),
(74, 'CC141L-M', 'Computer Programming 1 Lab', 1, 'First year', 'Laboratory', '1', 3, 'Information System', 'NON-STEM'),
(75, 'CC142-M', 'Computer Programming 1', 2, 'First year', 'Lecture', '1', 2, 'Computer Science', 'NON-STEM'),
(76, 'CC142-M', 'Computer Programming 1', 2, 'First year', 'Lecture', '1', 2, 'Information Technology', 'NON-STEM'),
(77, 'CC142-M', 'Computer Programming 1', 2, 'First year', 'Lecture', '1', 2, 'Information System', 'NON-STEM'),
(78, 'CC141L-M', 'Computer Programming 2 Lab', 1, 'Second year', 'Laboratory', '1', 3, 'Computer Science', 'STEM'),
(79, 'CC141L-M', 'Computer Programming 2 Lab', 1, 'Second year', 'Laboratory', '1', 3, 'Information Technology', 'STEM'),
(80, 'CC141L-M', 'Computer Programming 2 Lab', 1, 'Second year', 'Laboratory', '1', 3, 'Information System', 'STEM'),
(81, 'CC142-M', 'Computer Programming 2', 2, 'Second year', 'Lecture', '2', 2, 'Computer Science', 'STEM'),
(82, 'CC142-M', 'Computer Programming 2', 2, 'Second year', 'Lecture', '2', 2, 'Information Technology', 'STEM'),
(83, 'CC142-M', 'Computer Programming 2', 2, 'Second year', 'Lecture', '2', 2, 'Information System', 'STEM'),
(84, 'CC141L-M', 'Computer Programming 1 Lab', 1, 'First year', 'Laboratory', '1', 3, 'Computer Science', 'STEM'),
(85, 'CC141L-M', 'Computer Programming 1 Lab', 1, 'First year', 'Laboratory', '1', 3, 'Information Technology', 'STEM'),
(86, 'CC141L-M', 'Computer Programming 1 Lab', 1, 'First year', 'Laboratory', '1', 3, 'Information System', 'STEM'),
(87, 'CC142-M', 'Computer Programming 1', 2, 'First year', 'Lecture', '1', 2, 'Computer Science', 'STEM'),
(88, 'CC142-M', 'Computer Programming 1', 2, 'First year', 'Lecture', '1', 2, 'Information Technology', 'STEM'),
(89, 'CC142-M', 'Computer Programming 1', 2, 'First year', 'Lecture', '1', 2, 'Information System', 'STEM'),
(90, 'CS123-M', 'Linear Algebra', 3, 'First year', 'Lecture', '2', 3, 'Computer Science', 'NON-STEM'),
(91, 'CS123-M', 'Linear Algebra', 3, 'First year', 'Lecture', '2', 3, 'Computer Science', 'STEM'),
(92, 'IS203-M', 'Accounting and Financial Management', 3, 'Second year', 'Lecture', '2', 3, 'Information System', 'NON-STEM'),
(93, 'IS203-M', 'Accounting and Financial Management', 3, 'Second year', 'Lecture', '2', 3, 'Information System', 'STEM'),
(94, 'IS223-M', 'Business Process Management', 3, 'Second year', 'Lecture', '2', 3, 'Information System', 'NON-STEM'),
(95, 'IS243-M', 'IT Infrastructure and Network Technologies', 3, 'Second year', 'Lecture', '2', 3, 'Information System', 'NON-STEM'),
(96, 'IS223-M', 'Business Process Management', 3, 'Second year', 'Lecture', '2', 3, 'Information System', 'NON-STEM'),
(97, 'IS223-M', 'Business Process Management', 3, 'Second year', 'Lecture', '2', 3, 'Information System', 'STEM'),
(98, 'IS243-M', 'IT Infrastructure and Network Technologies', 3, 'Second year', 'Lecture', '2', 3, 'Information System', 'STEM'),
(99, 'IS223-M', 'Business Process Management', 3, 'Second year', 'Lecture', '2', 3, 'Information System', 'STEM'),
(100, 'MATHA35-M', 'Differential and Integral Calculus', 5, 'First year', 'Lecture', '2', 5, 'Computer Science', 'NON-STEM'),
(101, 'MATHA35-M', 'Differential and Integral Calculus', 5, 'First year', 'Lecture', '2', 5, 'Computer Science', 'STEM'),
(102, 'IT251L-M', 'Platform Technologies Lab', 1, 'Second year', 'Laboratory', '1', 2, 'Information Technology', 'STEM'),
(103, 'IT252-M', 'Platform Technologies', 2, 'Second year', 'Lecture', '1', 2, 'Information Technology', 'STEM'),
(104, 'IT251L-M', 'Platform Technologies Lab', 1, 'Second year', 'Laboratory', '1', 2, 'Information Technology', 'NON-STEM'),
(105, 'IT252-M', 'Platform Technologies', 2, 'Second year', 'Lecture', '1', 2, 'Information Technology', 'NON-STEM'),
(106, 'CS213--M', 'Human Computer Interaction', 3, 'Second year', 'Lecture', '2', 3, 'Computer Science', 'NON-STEM'),
(107, 'CS213--M', 'Human Computer Interaction', 3, 'First year', 'Lecture', '2', 3, 'Information Technology', 'NON-STEM'),
(108, 'CS213--M', 'Human Computer Interaction', 3, 'First year', 'Lecture', '2', 3, 'Information System', 'NON-STEM'),
(109, 'CS213--M', 'Human Computer Interaction', 3, 'Second year', 'Lecture', '2', 3, 'Computer Science', 'STEM'),
(110, 'CS213--M', 'Human Computer Interaction', 3, 'First year', 'Lecture', '2', 3, 'Information Technology', 'STEM'),
(111, 'CS213--M', 'Human Computer Interaction', 3, 'First year', 'Lecture', '2', 3, 'Information System', 'STEM'),
(112, 'CS213--M', 'Fundamentals of Math Analysis', 3, 'First year', 'Lecture', '1', 5, 'Computer Science', 'STEM'),
(113, 'CS213--M', 'Fundamentals of Math Analysis', 3, 'First year', 'Lecture', '1', 5, 'Information Technology', 'STEM'),
(114, 'CS213--M', 'Fundamentals of Math Analysis', 3, 'First year', 'Lecture', '1', 5, 'Information System', 'STEM'),
(115, 'CS213--M', 'Fundamentals of Math Analysis', 3, 'First year', 'Lecture', '1', 5, 'Computer Science', 'NON-STEM'),
(116, 'CS213--M', 'Fundamentals of Math Analysis', 3, 'First year', 'Lecture', '1', 5, 'Information Technology', 'NON-STEM'),
(117, 'CS213--M', 'Fundamentals of Math Analysis', 3, 'First year', 'Lecture', '1', 5, 'Information System', 'NON-STEM'),
(118, 'CS233-M', 'Combinatorics and Graph Theory', 3, 'Second year', 'Lecture', '1', 3, 'Computer Science', 'NON-STEM'),
(119, 'CS233-M', 'Combinatorics and Graph Theory', 3, 'Second year', 'Lecture', '1', 3, 'Computer Science', 'STEM'),
(120, 'MATHSTAT03', 'Probability and Statistics', 3, 'First year', 'Lecture', '2', 3, 'Information Technology', 'NON-STEM'),
(121, 'MATHSTAT03', 'Probability and Statistics', 3, 'First year', 'Lecture', '2', 3, 'Information System', 'NON-STEM'),
(122, 'MATHSTAT03', 'Probability and Statistics', 3, 'First year', 'Lecture', '2', 3, 'Information Technology', 'STEM'),
(123, 'MATHSTAT03', 'Probability and Statistics', 3, 'First year', 'Lecture', '2', 3, 'Information System', 'STEM'),
(124, 'CS344-M', 'Artificial Intelligence', 3, 'Third year', 'Lecture', '2', 2, 'Computer Science', 'STEM'),
(125, 'IT241L-M', 'Computer Networking 1 Lab', 2, 'Second year', 'Laboratory', '2', 3, 'Information Technology', 'STEM'),
(126, 'IT242-M', 'Computer Networking 1', 2, 'Second year', 'Lecture', '2', 2, 'Information Technology', 'STEM'),
(127, 'IT311L-M', 'Computer Networking 2 Lab', 2, 'Second year', 'Laboratory', '1', 3, 'Information Technology', 'STEM'),
(128, 'IT312--M ', 'Computer Networking 2', 2, 'Second year', 'Lecture', '1', 2, 'Information Technology', 'NON-STEM'),
(129, 'IT311L-M', 'Computer Networking 2 Lab', 2, 'Second year', 'Laboratory', '1', 3, 'Computer Science', 'STEM'),
(130, 'GEC2-M', 'Readings in Philippine History', 3, 'First year', 'Lecture', '2', 3, 'Computer Science', 'STEM'),
(131, 'GEC2-M', 'Readings in Philippine History', 3, 'First year', 'Lecture', '2', 3, 'Information Technology', 'STEM'),
(132, 'GEC2-M', 'Readings in Philippine History', 3, 'First year', 'Lecture', '2', 3, 'Computer Science', 'STEM'),
(133, 'GEC2-M', 'Readings in Philippine History', 3, 'First year', 'Lecture', '2', 3, 'Computer Science', 'NON-STEM'),
(134, 'GEC2-M', 'Readings in Philippine History', 3, 'First year', 'Lecture', '2', 3, 'Information Technology', 'NON-STEM'),
(135, 'GEC2-M', 'Readings in Philippine History', 3, 'First year', 'Lecture', '2', 3, 'Computer Science', 'NON-STEM'),
(136, 'CSALGO111L', 'Algorithm Design and Analysis Algorithms Lab', 1, 'Second year', 'Laboratory', '1', 3, 'Computer Science', 'STEM'),
(137, 'CSALGO112L', 'Algorithm Design and Analysis Algorithms Lab', 1, 'Second year', 'Laboratory', '1', 3, 'Computer Science', 'STEM'),
(140, 'CS344-M', 'Artificial Intelligence', 3, 'Third year', 'Lecture', '2', 2, 'Computer Science', 'NON-STEM'),
(141, 'IT241L-M', 'Computer Networking 1 Lab', 2, 'Second year', 'Laboratory', '2', 3, 'Information Technology', 'NON-STEM'),
(142, 'IT242-M', 'Computer Networking 1', 2, 'Second year', 'Lecture', '2', 2, 'Information Technology', 'NON-STEM'),
(143, 'IT311L-M ', 'Computer Networking 2 Lab', 2, 'Second year', 'Laboratory', '2', 3, 'Information Technology', 'NON-STEM'),
(144, 'T312--M', 'Computer Networking 2', 2, 'Second year', 'Lecture', '2', 2, 'Information Technology', 'NON-STEM'),
(149, 'GEC5-M', 'Art Appreciation', 3, 'Second year', 'Lecture', '1', 3, 'Computer Science', 'STEM'),
(150, 'GEC5-M', 'Art Appreciation', 3, 'Second year', 'Lecture', '1', 3, 'Information Technology', 'STEM'),
(151, 'GEC5-M', 'Art Appreciation', 3, 'Second year', 'Lecture', '1', 3, 'Information System', 'STEM'),
(152, 'CS313-M', 'Information Assurance and Security', 3, 'Third year', 'Lecture', '1', 3, 'Computer Science', 'NON-STEM'),
(153, 'IT415-M', 'IT Project Management', 3, 'Third year', 'Lecture', '2', 2, 'Information Technology', 'STEM'),
(154, 'CC490-M', 'IS Capstone Project 2', 3, 'Fourth year', 'Lecture', '2', 3, 'Information System', 'STEM'),
(155, 'CC333-M', 'Data Analytics', 3, 'Second year', 'Lecture', '1', 3, 'Computer Science', 'STEM'),
(156, 'CC373-M', 'Parallel and Distributed Computing', 3, 'Third year', 'Lecture', '1', 3, 'Computer Science', 'STEM'),
(157, 'CSE1-M', 'CS Professional Elective 1', 3, 'Second year', 'Lecture', '1', 3, 'Computer Science', 'NON-STEM'),
(158, 'CSE2-M', 'CS Professional Elective 2', 3, 'Third year', 'Lecture', '1', 3, 'Computer Science', 'NON-STEM'),
(159, 'ITE1-M', 'IT Professional Elective 1', 3, 'Second year', 'Lecture', '2', 3, 'Information Technology', 'NON-STEM'),
(160, 'ITE2-M', 'IT Professional Elective 2', 3, 'Third year', 'Lecture', '1', 3, 'Information Technology', 'NON-STEM'),
(161, 'ITE3-M', 'IT Professional Elective 3', 3, 'Third year', 'Lecture', '1', 3, 'Information Technology', 'NON-STEM'),
(162, 'ITE4-M', 'IT Professional Elective 4', 3, 'Third year', 'Lecture', '2', 3, 'Information Technology', 'NON-STEM'),
(163, 'ISE1-M', 'IS Professional Elective 1', 3, 'Second year', 'Lecture', '2', 3, 'Information System', 'NON-STEM'),
(164, 'ISE2-M', 'IS Professional Elective 2', 3, 'Third year', 'Lecture', '1', 3, 'Information System', 'NON-STEM'),
(165, 'ISE3-M', 'IS Professional Elective 3', 3, 'Third year', 'Lecture', '1', 3, 'Information System', 'NON-STEM'),
(166, 'ISE4-M', 'IS Professional Elective 4', 3, 'Third year', 'Lecture', '2', 3, 'Information System', 'NON-STEM'),
(167, 'CSE1-M', 'CS Professional Elective 1', 3, 'Second year', 'Lecture', '1', 3, 'Computer Science', 'STEM'),
(168, 'ITE1-M', 'IT Professional Elective 1', 3, 'Second year', 'Lecture', '2', 3, 'Information Technology', 'STEM'),
(169, 'ITE2-M', 'IT Professional Elective 2', 3, 'Third year', 'Lecture', '1', 3, 'Information Technology', 'STEM'),
(170, 'ITE3-M', 'IT Professional Elective 3', 3, 'Third year', 'Lecture', '1', 3, 'Information Technology', 'STEM'),
(171, 'ITE4-M', 'IT Professional Elective 4', 3, 'Third year', 'Lecture', '2', 3, 'Information Technology', 'STEM'),
(172, 'ISE1-M', 'IS Professional Elective 1', 3, 'Second year', 'Lecture', '2', 3, 'Information System', 'STEM'),
(173, 'ISE2-M', 'IS Professional Elective 2', 3, 'Third year', 'Lecture', '1', 3, 'Information System', 'STEM'),
(174, 'ISE3-M', 'IS Professional Elective 3', 3, 'Third year', 'Lecture', '1', 3, 'Information System', 'STEM'),
(175, 'ISE4-M', 'IS Professional Elective 4', 3, 'Third year', 'Lecture', '2', 3, 'Information System', 'STEM'),
(176, 'CC303-M', 'Methods of Research in Computing', 3, 'Third year', 'Lecture', '2', 3, 'Computer Science', 'STEM'),
(177, 'CC303-M', 'Methods of Research in Computing', 3, 'Third year', 'Lecture', '2', 3, 'Information Technology', 'STEM'),
(178, 'CC303-M', 'Methods of Research in Computing', 3, 'Third year', 'Lecture', '2', 3, 'Information System', 'STEM'),
(179, 'CC303-M', 'Automata Theory and Formal Language', 3, 'Third year', 'Lecture', '2', 3, 'Computer Science', 'STEM'),
(180, 'CC303-M', 'Methods of Research in Computing', 3, 'Third year', 'Lecture', '2', 3, 'Computer Science', 'NON-STEM'),
(181, 'CC303-M', 'Methods of Research in Computing', 3, 'Third year', 'Lecture', '2', 3, 'Information Technology', 'NON-STEM'),
(182, 'CC303-M', 'Methods of Research in Computing', 3, 'Third year', 'Lecture', '2', 3, 'Information System', 'NON-STEM'),
(183, 'CC303-M', 'Automata Theory and Formal Language', 3, 'Third year', 'Lecture', '2', 3, 'Computer Science', 'NON-STEM'),
(184, 'CS343-M', 'Modeling and Simulation', 1, 'Third year', 'Lecture', '2', 3, 'Computer Science', 'NON-STEM'),
(185, 'CS343-M', 'Modeling and Simulation', 1, 'Third year', 'Lecture', '2', 3, 'Computer Science', 'STEM'),
(186, 'CS361L-M', 'Software Engineering 2 Lab', 1, 'Third year', 'Laboratory', '2', 3, 'Computer Science', 'NON-STEM'),
(187, 'CS362-M', 'Software Engineering 2', 2, 'Third year', 'Lecture', '2', 2, 'Computer Science', 'NON-STEM'),
(188, 'CS361L-M', 'Software Engineering 2 Lab', 1, 'Third year', 'Laboratory', '2', 3, 'Computer Science', 'STEM'),
(189, 'CS362-M', 'Software Engineering 2', 2, 'Third year', 'Lecture', '2', 2, 'Computer Science', 'STEM'),
(190, 'CS361L-M', 'Software Engineering 2 Lab', 1, 'Third year', 'Laboratory', '2', 3, 'Information Technology', 'STEM'),
(191, 'CS413-M', 'Thesis Writing 1', 3, 'Third year', 'Lecture', '1', 3, 'Computer Science', 'STEM'),
(192, 'CS433-M', 'Social and Professional Issues', 3, 'Fourth year', 'Lecture', '1', 3, 'Computer Science', 'STEM'),
(193, 'CS433-M', 'Social and Professional Issues', 3, 'Fourth year', 'Lecture', '1', 3, 'Information Technology', 'STEM'),
(194, 'CS433-M', 'Social and Professional Issues', 3, 'Fourth year', 'Lecture', '1', 3, 'Information System', 'STEM'),
(195, 'GEE11D-M', 'Living in the IT Era', 3, 'Fourth year', 'Lecture', '1', 3, 'Computer Science', 'STEM'),
(196, 'GEE11D-M', 'Living in the IT Era', 3, 'Third year', 'Lecture', '2', 3, 'Information Technology', 'STEM'),
(197, 'GEE11D-M', 'Living in the IT Era', 3, 'Fourth year', 'Lecture', '1', 3, 'Information System', 'STEM'),
(198, 'CS403', 'Supervised Industrial Training', 6, 'Fourth year', 'Lecture', '2', 9, 'Computer Science', 'STEM'),
(199, 'CS403', 'Supervised Industrial Training', 6, 'Fourth year', 'Lecture', '2', 9, 'Information Technology', 'STEM'),
(200, 'CS403', 'Supervised Industrial Training', 6, 'Fourth year', 'Lecture', '2', 9, 'Information System', 'STEM'),
(201, 'CS423', 'Thesis Writing 2', 3, 'Fourth year', 'Lecture', '1', 3, 'Computer Science', 'STEM'),
(202, 'CS413-M', 'Thesis Writing 1', 3, 'Third year', 'Lecture', '2', 3, 'Computer Science', 'NON-STEM'),
(203, 'CS433-M', 'Social and Professional Issues', 3, 'Fourth year', 'Lecture', '2', 3, 'Computer Science', 'NON-STEM'),
(204, 'CS433-M', 'Social and Professional Issues', 3, 'Fourth year', 'Lecture', '2', 3, 'Information Technology', 'NON-STEM'),
(205, 'CS433-M', 'Social and Professional Issues', 3, 'Fourth year', 'Lecture', '2', 3, 'Information System', 'NON-STEM'),
(206, 'GEE11D-M', 'Living in the IT Era', 3, 'Fourth year', 'Lecture', '1', 3, 'Computer Science', 'NON-STEM'),
(207, 'GEE11D-M', 'Living in the IT Era', 3, 'Third year', 'Lecture', '2', 3, 'Information Technology', 'NON-STEM'),
(208, 'GEE11D-M', 'Living in the IT Era', 3, 'Fourth year', 'Lecture', '1', 3, 'Information System', 'NON-STEM'),
(209, 'CS403', 'Supervised Industrial Training', 6, 'Fourth year', 'Lecture', '2', 9, 'Computer Science', 'NON-STEM'),
(210, 'CS403', 'Supervised Industrial Training', 6, 'Fourth year', 'Lecture', '2', 9, 'Information Technology', 'NON-STEM'),
(211, 'CS403', 'Supervised Industrial Training', 6, 'Fourth year', 'Lecture', '2', 9, 'Information System', 'NON-STEM'),
(212, 'CS423', 'Thesis Writing 2', 3, 'Fourth year', 'Lecture', '2', 3, 'Computer Science', 'NON-STEM'),
(213, 'IT413-M', 'IT Capstone & Research 1', 3, 'Fourth year', 'Lecture', '1', 3, 'Information Technology', 'NON-STEM'),
(214, 'IT423--M', 'IT Capstone & Research 2', 3, 'Fourth year', 'Lecture', '2', 3, 'Information Technology', 'NON-STEM'),
(215, 'IS413-M', 'IS Capstone 1', 3, 'Fourth year', 'Lecture', '1', 3, 'Information System', 'NON-STEM'),
(216, 'IS423--M', 'IS Capstone & Research 2', 3, 'Fourth year', 'Lecture', '2', 3, 'Information System', 'NON-STEM'),
(217, 'IT413-M', 'IT Capstone & Research 1', 3, 'Fourth year', 'Lecture', '1', 3, 'Information Technology', 'STEM'),
(218, 'IT423--M', 'IT Capstone & Research 2', 3, 'Fourth year', 'Lecture', '2', 3, 'Information Technology', 'STEM'),
(219, 'IS413-M', 'IS Capstone 1', 3, 'Fourth year', 'Lecture', '1', 3, 'Information System', 'STEM'),
(220, 'IS423--M', 'IS Capstone & Research 2', 3, 'Fourth year', 'Lecture', '2', 3, 'Information System', 'STEM'),
(221, 'IT303--M', 'Systems Integration and Architecture 1', 3, 'Third year', 'Lecture', '2', 3, 'Information Technology', 'NON-STEM'),
(222, 'IT433--M', 'Systems Integration and Architecture 2', 3, 'Fourth year', 'Lecture', '1', 3, 'Information Technology', 'NON-STEM'),
(223, 'IT323', 'Business Intelligence', 3, 'Third year', 'Lecture', '2', 3, 'Information Technology', 'NON-STEM'),
(224, 'IS263-M', 'Business Intelligence', 3, 'Third year', 'Lecture', '2', 3, 'Information System', 'NON-STEM'),
(225, 'IT303--M', 'Systems Integration and Architecture 1', 3, 'Third year', 'Lecture', '2', 3, 'Information Technology', 'STEM'),
(226, 'IT433--M', 'Systems Integration and Architecture 2', 3, 'Fourth year', 'Lecture', '1', 3, 'Information Technology', 'STEM'),
(227, 'IT323', 'Business Intelligence', 3, 'Third year', 'Lecture', '2', 3, 'Information Technology', 'STEM'),
(228, 'IS263-M', 'Business Intelligence', 3, 'Third year', 'Lecture', '2', 3, 'Information System', 'STEM'),
(229, 'IT343_M', 'Systems Administration and Maintenance', 3, 'Third year', 'Lecture', '2', 3, 'Information Technology', 'STEM'),
(230, 'IT303--M', 'Information Assurance and Security 1', 3, 'Third year', 'Lecture', '1', 3, 'Information Technology', 'STEM'),
(231, 'IT363-M', 'Information Assurance and Security 2', 3, 'Third year', 'Lecture', '1', 3, 'Information Technology', 'STEM'),
(232, 'IS353-M', 'IS Project Management 1', 3, 'Third year', 'Lecture', '1', 3, 'Information System', 'STEM'),
(233, 'IS363--M', 'IS Project Management 2', 3, 'Third year', 'Lecture', '2', 3, 'Information System', 'STEM'),
(234, 'IT343_M', 'Systems Administration and Maintenance', 3, 'Third year', 'Lecture', '2', 3, 'Information Technology', 'NON-STEM'),
(235, 'IT303--M', 'Information Assurance and Security 1', 3, 'Third year', 'Lecture', '1', 3, 'Information Technology', 'NON-STEM'),
(236, 'IT363-M', 'Information Assurance and Security 2', 3, 'Third year', 'Lecture', '1', 3, 'Information Technology', 'NON-STEM'),
(237, 'IS353-M', 'IS Project Management 1', 3, 'Third year', 'Lecture', '1', 3, 'Information System', 'NON-STEM'),
(238, 'IS363--M', 'IS Project Management 2', 3, 'Third year', 'Lecture', '2', 3, 'Information System', 'NON-STEM'),
(239, 'IS383-M', 'Evaluation of Business Performance', 3, 'Third year', 'Lecture', '2', 3, 'Information System', 'NON-STEM'),
(240, 'IS383-M', 'Evaluation of Business Performance', 3, 'Third year', 'Lecture', '2', 3, 'Information System', 'STEM'),
(241, 'CC311L-M', 'Web Development Lab', 1, 'Third year', 'Laboratory', '1', 3, 'Information System', 'STEM'),
(242, 'CC311L-M', 'Web Development Lab', 1, 'Third year', 'Laboratory', '1', 3, 'Information Technology', 'STEM'),
(243, 'CC311L-M', 'Web Development Lab', 1, 'Third year', 'Laboratory', '1', 3, 'Computer Science', 'STEM'),
(244, 'CC312-M', 'Web Development', 2, 'Third year', 'Lecture', '1', 2, 'Information System', 'STEM'),
(245, 'CC312-M', 'Web Development', 2, 'Third year', 'Lecture', '1', 2, 'Information Technology', 'STEM'),
(246, 'CC312-M', 'Web Development', 2, 'Third year', 'Lecture', '1', 2, 'Computer Science', 'STEM'),
(247, 'IS251L-M', 'Object Oriented Programming Lab', 1, 'Second year', 'Laboratory', '1', 3, 'Information System', 'STEM'),
(248, 'IT211L-M', 'Object Oriented Programming Lab', 1, 'Second year', 'Laboratory', '1', 3, 'Information Technology', 'STEM'),
(249, 'CS251L-M', 'Object Oriented Programming Lab', 1, 'Second year', 'Laboratory', '1', 3, 'Computer Science', 'STEM'),
(256, 'CC311L-M', 'Web Development Lab', 1, 'Third year', 'Laboratory', '1', 3, 'Information System', 'NON-STEM'),
(257, 'CC311L-M', 'Web Development Lab', 1, 'Third year', 'Laboratory', '1', 3, 'Information Technology', 'NON-STEM'),
(258, 'CC311L-M', 'Web Development Lab', 1, 'Third year', 'Laboratory', '1', 3, 'Computer Science', 'NON-STEM'),
(259, 'CC312-M', 'Web Development', 2, 'Third year', 'Lecture', '1', 2, 'Information System', 'NON-STEM'),
(260, 'CC312-M', 'Web Development', 2, 'Third year', 'Lecture', '1', 2, 'Information Technology', 'NON-STEM'),
(261, 'CC312-M', 'Web Development', 2, 'Third year', 'Lecture', '1', 2, 'Computer Science', 'NON-STEM'),
(262, 'IS251L-M ', 'Object Oriented Programming Lab', 1, 'Second year', 'Laboratory', '1', 3, 'Information System', 'NON-STEM'),
(263, 'IT211L-M ', 'Object Oriented Programming Lab', 1, 'Second year', 'Laboratory', '1', 3, 'Information Technology', 'NON-STEM'),
(264, 'CS251L-M ', 'Object Oriented Programming Lab', 1, 'Second year', 'Laboratory', '1', 3, 'Computer Science', 'NON-STEM'),
(265, 'IS252-M ', 'Object Oriented Programming', 2, 'Second year', 'Lecture', '1', 2, 'Information System', 'NON-STEM'),
(266, 'IT212-M ', 'Object Oriented Programming', 2, 'Second year', 'Lecture', '1', 2, 'Information Technology', 'NON-STEM'),
(267, 'CS252M ', 'Object Oriented Programming', 2, 'Second year', 'Lecture', '1', 2, 'Computer Science', 'NON-STEM'),
(268, 'NSTP1--M', 'CWTS1/ROTC1', 3, 'First year', 'Lecture', '1', 3, 'Computer Science', 'STEM'),
(269, 'NSTP1--M', 'CWTS1/ROTC1', 3, 'First year', 'Lecture', '1', 3, 'Information System', 'STEM'),
(270, 'NSTP1--M', 'CWTS1/ROTC1', 3, 'First year', 'Lecture', '1', 3, 'Information Technology', 'STEM'),
(271, 'NSTP1--M', 'CWTS1/ROTC1', 3, 'First year', 'Lecture', '1', 3, 'Computer Science', 'NON-STEM'),
(272, 'NSTP1--M', 'CWTS1/ROTC1', 3, 'First year', 'Lecture', '1', 3, 'Information System', 'NON-STEM'),
(273, 'NSTP1--M', 'CWTS1/ROTC1', 3, 'First year', 'Lecture', '1', 3, 'Information Technology', 'NON-STEM'),
(274, 'PE2-M', 'Rhythmic Activities', 2, 'First year', 'Lecture', '1', 2, 'Information Technology', 'NON-STEM'),
(275, 'PE2-M', 'Rhythmic Activities', 2, 'First year', 'Lecture', '1', 2, 'Information Technology', 'STEM'),
(276, 'PE2-M', 'Rhythmic Activities', 2, 'First year', 'Lecture', '1', 2, 'Information System', 'NON-STEM'),
(277, 'PE2-M', 'Rhythmic Activities', 2, 'First year', 'Lecture', '1', 2, 'Information System', 'STEM'),
(278, 'PE2-M', 'Rhythmic Activities', 2, 'First year', 'Lecture', '1', 2, 'Computer Science', 'NON-STEM'),
(279, 'PE2-M', 'Rhythmic Activities', 2, 'First year', 'Lecture', '1', 2, 'Computer Science', 'STEM'),
(280, 'PE3-M', 'Individual and Dual Sports', 2, 'Second year', 'Lecture', '2', 2, 'Information Technology', 'NON-STEM'),
(281, 'PE3-M', 'Individual and Dual Sports', 2, 'Second year', 'Lecture', '2', 2, 'Information Technology', 'STEM'),
(282, 'PE3-M', 'Individual and Dual Sports', 2, 'Second year', 'Lecture', '2', 2, 'Information System', 'NON-STEM'),
(283, 'PE3-M', 'Individual and Dual Sports', 2, 'Second year', 'Lecture', '2', 2, 'Information System', 'STEM'),
(284, 'PE3-M', 'Individual and Dual Sports', 2, 'Second year', 'Lecture', '2', 2, 'Computer Science', 'NON-STEM'),
(285, 'PE3-M', 'Individual and Dual Sports', 2, 'Second year', 'Lecture', '2', 2, 'Computer Science', 'STEM'),
(286, 'PE1-M', 'Physical Fitness', 2, 'First year', 'Lecture', '1', 2, 'Information Technology', 'NON-STEM'),
(287, 'PE1-M', 'Physical Fitness', 2, 'First year', 'Lecture', '1', 2, 'Information Technology', 'STEM'),
(288, 'PE1-M', 'Physical Fitness', 2, 'First year', 'Lecture', '1', 2, 'Information System', 'NON-STEM'),
(289, 'PE1-M', 'Physical Fitness', 2, 'First year', 'Lecture', '1', 2, 'Information System', 'STEM'),
(290, 'PE1-M', 'Physical Fitness', 2, 'First year', 'Lecture', '1', 2, 'Computer Science', 'NON-STEM'),
(291, 'PE1-M', 'Physical Fitness', 2, 'First year', 'Lecture', '1', 2, 'Computer Science', 'STEM'),
(292, 'IS123-M', 'Fundamentals of Information Systems', 3, 'First year', 'Lecture', '2', 3, 'Information System', 'STEM'),
(293, 'NSTP1--M', 'The Contemporary World', 3, 'First year', 'Lecture', '2', 3, 'Computer Science', 'STEM'),
(294, 'CC312-M', 'The Contemporary World', 3, 'First year', 'Lecture', '2', 3, 'Information System', 'STEM'),
(295, 'CC312-M', 'The Contemporary World', 3, 'First year', 'Lecture', '2', 3, 'Information Technology', 'STEM'),
(296, 'GEC5-M', 'Purposive Communication', 3, 'First year', 'Lecture', '2', 3, 'Information Technology', 'STEM'),
(297, 'GEC5-M', 'Purposive Communication', 3, 'First year', 'Lecture', '2', 3, 'Information System', 'STEM'),
(298, 'GEC5-M', 'Purposive Communication', 3, 'First year', 'Lecture', '2', 3, 'Computer Science', 'STEM'),
(299, 'GEC5-M', 'Ethics', 3, 'Second year', 'Lecture', '1', 3, 'Information Technology', 'STEM'),
(300, 'GEC5-M', 'Ethics', 3, 'Second year', 'Lecture', '1', 3, 'Information System', 'STEM'),
(301, 'GEC5-M', 'Ethics', 3, 'Second year', 'Lecture', '1', 3, 'Computer Science', 'STEM'),
(302, 'IS213-M', 'Organization and Management Concepts', 3, 'Second year', 'Lecture', '1', 3, 'Information System', 'STEM'),
(303, 'CC311L-M', 'Information Management Lab', 1, 'Second year', 'Laboratory', '2', 3, 'Information System', 'NON-STEM'),
(304, 'CC311L-M', 'Information Management Lab', 1, 'Second year', 'Laboratory', '2', 3, 'Information Technology', 'NON-STEM'),
(305, 'CC311L-M', 'Information Management Lab', 1, 'Second year', 'Laboratory', '2', 3, 'Computer Science', 'NON-STEM'),
(306, 'CC312-M', 'Information Management', 2, 'Second year', 'Lecture', '2', 2, 'Information System', 'NON-STEM'),
(307, 'CC312-M', 'Information Management', 2, 'Second year', 'Lecture', '2', 2, 'Information Technology', 'NON-STEM'),
(308, 'CC312-M', 'Information Management', 2, 'Second year', 'Lecture', '2', 2, 'Computer Science', 'NON-STEM'),
(309, 'CC311L-M', 'Information Management Lab', 1, 'Second year', 'Laboratory', '2', 3, 'Information System', 'STEM'),
(310, 'CC311L-M', 'Information Management Lab', 1, 'Second year', 'Laboratory', '2', 3, 'Information Technology', 'STEM'),
(311, 'CC311L-M', 'Information Management Lab', 1, 'Second year', 'Laboratory', '2', 3, 'Computer Science', 'STEM'),
(312, 'CC312-M', 'Information Management', 2, 'Second year', 'Lecture', '2', 2, 'Information System', 'STEM'),
(313, 'CC223-M ', 'Reading Visual Arts ', 3, 'Fourth year', 'Lecture', '1', 3, 'Information Technology', 'STEM'),
(314, 'CC223-M ', 'Reading Visual Arts ', 3, 'Fourth year', 'Lecture', '1', 3, 'Computer Science', 'STEM'),
(315, 'CC223-M ', 'Reading Visual Arts ', 3, 'Fourth year', 'Lecture', '1', 3, 'Information System', 'STEM'),
(316, 'CC223-M ', 'Reading Visual Arts ', 3, 'Fourth year', 'Lecture', '1', 3, 'Information Technology', 'STEM'),
(317, 'CC223-M ', 'Reading Visual Arts ', 3, 'Fourth year', 'Lecture', '1', 3, 'Computer Science', 'STEM'),
(318, 'CC223-M ', 'Reading Visual Arts ', 3, 'Fourth year', 'Lecture', '1', 3, 'Information Technology', 'NON-STEM'),
(319, 'CC223-M ', 'Reading Visual Arts ', 3, 'Fourth year', 'Lecture', '1', 3, 'Computer Science', 'NON-STEM'),
(320, 'CC223-M ', 'Reading Visual Arts ', 3, 'Fourth year', 'Lecture', '1', 3, 'Information System', 'NON-STEM'),
(321, 'CC223-M ', 'Reading Visual Arts ', 3, 'Fourth year', 'Lecture', '1', 3, 'Information Technology', 'NON-STEM'),
(322, 'CC223-M ', 'Reading Visual Arts ', 3, 'Fourth year', 'Lecture', '1', 3, 'Computer Science', 'NON-STEM'),
(323, 'IT201-L', 'Programming Language (Design and Implementation) Lab', 1, 'Third year', 'Laboratory', '2', 3, 'Information Technology', 'STEM'),
(324, 'IT201-L', 'Programming Language (Design and Implementation) Lab', 1, 'Third year', 'Laboratory', '2', 3, 'Computer Science', 'STEM'),
(325, 'IT202--M', 'Programming Language (Design and Implementation)', 2, 'Third year', 'Lecture', '2', 2, 'Information Technology', 'STEM'),
(326, 'IT202--M', 'Programming Language (Design and Implementation)', 2, 'Third year', 'Lecture', '2', 2, 'Computer Science', 'STEM'),
(327, 'IT262-M ', 'Multimedia Authoring & Production', 1, 'Second year', 'Lecture', '2', 2, 'Information Technology', 'STEM'),
(328, 'IT262-M ', 'Multimedia Authoring & Production', 1, 'Second year', 'Lecture', '2', 2, 'Information Technology', 'STEM'),
(329, 'IT261L-M ', 'Multimedia Authoring & Production Lab', 1, 'Second year', 'Laboratory', '2', 3, 'Information System', 'STEM'),
(330, 'IT261L-M ', 'Multimedia Authoring & Production Lab', 1, 'Second year', 'Laboratory', '2', 3, 'Information Technology', 'STEM'),
(331, 'PE4-M', 'Team Sports', 2, 'Second year', 'Lecture', '2', 3, 'Information Technology', 'NON-STEM'),
(332, 'PE4-M', 'Team Sports', 2, 'Second year', 'Lecture', '2', 3, 'Information Technology', 'STEM'),
(333, 'PE4-M', 'Team Sports', 2, 'Second year', 'Lecture', '2', 3, 'Information System', 'NON-STEM'),
(334, 'PE4-M', 'Team Sports', 2, 'Second year', 'Lecture', '2', 3, 'Information System', 'STEM'),
(335, 'PE4-M', 'Team Sports', 2, 'Second year', 'Lecture', '2', 3, 'Computer Science', 'NON-STEM'),
(336, 'PE4-M', 'Team Sports', 2, 'Second year', 'Lecture', '2', 3, 'Computer Science', 'STEM'),
(337, 'GEE13D-M', 'Applications Development and Emerging Technologies', 3, 'Second year', 'Lecture', '2', 3, 'Information Technology', 'STEM'),
(338, 'GEE13D-M', 'Applications Development and Emerging Technologies', 3, 'Second year', 'Lecture', '2', 3, 'Computer Science', 'STEM'),
(339, 'GEE13D-M', 'Applications Development and Emerging Technologies', 3, 'Second year', 'Lecture', '2', 3, 'Information System', 'STEM'),
(340, 'GEE13D-M', 'Applications Development and Emerging Technologies', 3, 'Second year', 'Lecture', '2', 3, 'Information Technology', 'STEM'),
(341, 'GEE13D-M', 'Applications Development and Emerging Technologies', 3, 'Second year', 'Lecture', '2', 3, 'Computer Science', 'STEM'),
(342, 'GEE13D-M', 'Applications Development and Emerging Technologies', 3, 'Second year', 'Lecture', '2', 3, 'Information Technology', 'NON-STEM'),
(343, 'GEE13D-M', 'Applications Development and Emerging Technologies', 3, 'Second year', 'Lecture', '2', 3, 'Computer Science', 'NON-STEM'),
(344, 'GEE13D-M', 'Applications Development and Emerging Technologies', 3, 'Second year', 'Lecture', '2', 3, 'Information System', 'NON-STEM'),
(345, 'GEE13D-M', 'Applications Development and Emerging Technologies', 3, 'Second year', 'Lecture', '2', 3, 'Information Technology', 'NON-STEM'),
(346, 'GEE13D-M', 'Applications Development and Emerging Technologies', 3, 'Second year', 'Lecture', '2', 3, 'Computer Science', 'NON-STEM'),
(347, 'CS313-M', 'Information Assurance and Security', 3, 'Third year', 'Lecture', '1', 3, 'Computer Science', 'STEM'),
(348, 'IT331L_M', 'Advanced Database Systems Lab', 1, 'Third year', 'Laboratory', '1', 3, 'Information Technology', 'STEM'),
(349, 'IT331L_M', 'Advanced Database Systems Lab', 1, 'Third year', 'Laboratory', '1', 3, 'Information Technology', 'STEM'),
(350, 'IT312--M', 'Advanced Database Systems', 2, 'Third year', 'Lecture', '1', 2, 'Information Technology', 'NON-STEM'),
(351, 'IT2312--M', 'Advanced Database Systems', 2, 'Third year', 'Lecture', '1', 2, 'Information Technology', 'NON-STEM'),
(352, 'GEE12D-M', 'The Entrepreneurial Mind', 3, 'Fourth year', 'Lecture', '1', 3, 'Information Technology', 'STEM'),
(353, 'GEE12D-M', 'The Entrepreneurial Mind', 3, 'Fourth year', 'Lecture', '1', 3, 'Computer Science', 'STEM'),
(354, 'GEE12D-M', 'The Entrepreneurial Mind', 3, 'Fourth year', 'Lecture', '1', 3, 'Information System', 'STEM'),
(355, 'GEE12D-M', 'The Entrepreneurial Mind', 3, 'Fourth year', 'Lecture', '1', 3, 'Information Technology', 'STEM'),
(356, 'GEE12D-M', 'The Entrepreneurial Mind', 3, 'Fourth year', 'Lecture', '1', 3, 'Computer Science', 'STEM'),
(357, 'GEE12D-M', 'The Entrepreneurial Mind', 3, 'Fourth year', 'Lecture', '1', 3, 'Information Technology', 'NON-STEM'),
(358, 'GEE12D-M', 'The Entrepreneurial Mind', 3, 'Fourth year', 'Lecture', '1', 3, 'Computer Science', 'NON-STEM'),
(359, 'GEE12D-M', 'The Entrepreneurial Mind', 3, 'Fourth year', 'Lecture', '1', 3, 'Information System', 'NON-STEM'),
(360, 'GEE12D-M', 'The Entrepreneurial Mind', 3, 'Fourth year', 'Lecture', '1', 3, 'Information Technology', 'NON-STEM'),
(361, 'GEE12D-M', 'The Entrepreneurial Mind', 3, 'Fourth year', 'Lecture', '1', 3, 'Computer Science', 'NON-STEM'),
(362, 'CC303-M', 'Automata Theory and Formal Language', 3, 'Third year', 'Lecture', '2', 3, 'Computer Science', 'NON-STEM'),
(363, 'IS363--M ', 'IS Strategy, Management and Acquisition', 3, 'Fourth year', 'Lecture', '2', 3, 'Information System', 'STEM'),
(364, 'IS363--M ', 'IS Strategy, Management and Acquisition', 3, 'Fourth year', 'Lecture', '2', 3, 'Information System', 'NON-STEM'),
(365, 'IS323-M ', 'Enterprise Architecture', 3, 'Fourth year', 'Lecture', '2', 3, 'Information System', 'STEM'),
(366, 'CSE2-M', 'CS Professional Elective 2', 3, 'Third year', 'Lecture', '1', 3, 'Computer Science', 'STEM'),
(367, 'IS323-M ', 'Enterprise Architecture', 3, 'Fourth year', 'Lecture', '2', 3, 'Information System', 'NON-STEM'),
(368, 'NSTP2--M', 'CWTS1/ROTC2', 3, 'First year', 'Lecture', '2', 3, 'Computer Science', 'STEM'),
(369, 'NSTP2--M', 'CWTS1/ROTC2', 3, 'First year', 'Lecture', '2', 3, 'Information System', 'STEM'),
(370, 'NSTP2--M', 'CWTS1/ROTC2', 3, 'First year', 'Lecture', '2', 3, 'Information Technology', 'STEM'),
(371, 'NSTP2--M', 'CWTS1/ROTC2', 3, 'First year', 'Lecture', '2', 3, 'Computer Science', 'NON-STEM'),
(372, 'NSTP2--M', 'CWTS1/ROTC2', 3, 'First year', 'Lecture', '2', 3, 'Information System', 'NON-STEM'),
(373, 'NSTP2--M', 'CWTS1/ROTC2', 3, 'First year', 'Lecture', '2', 3, 'Information Technology', 'NON-STEM'),
(374, 'GEM14-M ', 'Life and Works of Rizal ', 3, 'Fourth year', 'Lecture', '1', 3, 'Computer Science', 'STEM'),
(375, 'GEM14-M ', 'Life and Works of Rizal ', 3, 'Fourth year', 'Lecture', '1', 3, 'Information System', 'STEM'),
(376, 'GEM14-M ', 'Life and Works of Rizal ', 3, 'Fourth year', 'Lecture', '1', 3, 'Information Technology', 'STEM'),
(377, 'GEM14-M ', 'Life and Works of Rizal ', 3, 'Fourth year', 'Lecture', '1', 3, 'Computer Science', 'NON-STEM'),
(378, 'GEM14-M ', 'Life and Works of Rizal ', 3, 'Fourth year', 'Lecture', '1', 3, 'Information System', 'NON-STEM'),
(379, 'GEM14-M ', 'Life and Works of Rizal ', 3, 'Fourth year', 'Lecture', '1', 3, 'Information Technology', 'NON-STEM');

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
(15, '2', '7'),
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
(15, '2', '7'),
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
(15, '2', '7'),
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
(15, '2', '7'),
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
(15, '2', '7'),
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
(6, 9),
(1, 18),
(2, 30),
(4, 3),
(5, 6),
(6, 9),
(1, 18),
(2, 30),
(4, 3),
(5, 6),
(6, 9),
(1, 18),
(2, 30),
(4, 3),
(5, 6),
(6, 9),
(1, 18),
(2, 30),
(4, 3),
(5, 6),
(6, 9),
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
  `usersId` int(11) NOT NULL,
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
(8, 'Head', 'Jullienne', 'Terrano', 'jullie_terrano@gmail.com', 'jullie', '$2y$10$rfHU16JkFJpLDI0PHGtiHeS.UkZMmnc6xM9jQvPNUkzxmKWG90.u.'),
(9, 'Faculty', 'Arth', 'Carandang', 'arth123@gmail.com', 'arth123', '$2y$10$MOPPu5W6hFldwqbng/Gwnu5MghXEf840WNtuulSyhllHqB3ggqcBu'),
(10, 'Head', 'Thor', 'Royales', 'Thor@gmail.com', 'headthor', '$2y$10$OWVsKEbthK/VXFif7lBTbuDBmVe9FbwUYwHcZrLlHkEBXdnQUXPQW');

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
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `curriculum`
--
ALTER TABLE `curriculum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `days`
--
ALTER TABLE `days`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `demo`
--
ALTER TABLE `demo`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `scheduling`
--
ALTER TABLE `scheduling`
  ADD PRIMARY KEY (`UsersUid`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `curriculum`
--
ALTER TABLE `curriculum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1337;

--
-- AUTO_INCREMENT for table `demo`
--
ALTER TABLE `demo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `logId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=277;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
