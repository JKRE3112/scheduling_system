-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2023 at 09:47 AM
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
  `start_time` varchar(250) NOT NULL,
  `end_time` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addtable`
--

INSERT INTO `addtable` (`id`, `faculty`, `course`, `subject`, `start_time`, `end_time`) VALUES
(55, 'Lee', 'Computer Science', 'Computer Programming 1', '5:30 pm', '7:30 pm');

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
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `id` int(11) NOT NULL,
  `usersUid` varchar(116) NOT NULL,
  `units` varchar(50) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `overload` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `demo`
--

INSERT INTO `demo` (`id`, `usersUid`, `units`, `start_time`, `end_time`, `overload`) VALUES
(8, 'jullie', '3 units', '07:00:00', '17:00:00', 0),
(9, 'headthor', '9 units', '00:00:07', '00:00:03', 6),
(10, 'arth123', '18 units', '08:00:00', '17:00:00', 9);

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
(25, 3, 'Introduction to Computing', 'jullie'),
(26, 3, 'IT Infrastructure and Network Technologies', 'jullie'),
(27, 3, 'Data Structures and Algorithms', 'jullie'),
(28, 3, 'Introduction to Computing', 'headthor'),
(29, 1, 'Data Structures and Algorithms Lab', 'headthor'),
(30, 1, 'Networks and Data Communications Lab', 'headthor'),
(31, 1, 'Computer Architecture and Organization Lab', 'headthor'),
(32, 3, 'Software Engineering', 'headthor'),
(33, 3, 'Introduction to Computing', 'arth123'),
(34, 1, 'Data Structures and Algorithms Lab', 'arth123'),
(35, 3, 'Software Engineering', 'arth123'),
(36, 1, 'Computer Programming 2 Lab', 'arth123'),
(37, 3, 'Business Process Management', 'arth123'),
(38, 3, 'Linear Algebra', 'arth123'),
(39, 3, 'Artificial Intelligence', 'arth123'),
(40, 3, 'Human Computer Interaction', 'arth123'),
(41, 3, 'Probability and Statistics', 'arth123'),
(42, 3, 'Introduction to Computing', 'headthor'),
(43, 1, 'Networks and Data Communications Lab', 'headthor'),
(44, 1, 'Computer Programming 2 Lab', 'headthor'),
(45, 2, 'Platform Technologies', 'headthor'),
(46, 3, 'Algorithm Design and Analysis', 'headthor'),
(47, 3, 'IT Professional Elective 1', 'headthor'),
(48, 3, 'Networks and Data Communications', 'headthor'),
(49, 6, 'Supervised Industrial Training', 'headthor'),
(50, 3, 'Living in the IT Era', 'headthor'),
(51, 3, 'IT Professional Elective 4', 'headthor'),
(52, 3, 'Business Intelligence', 'headthor'),
(53, 1, 'Software Engineering Lab', 'arth123'),
(54, 3, 'IS Capstone Project 1', 'arth123'),
(55, 1, 'Software Engineering Lab', 'arth123');

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
  `course` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_code`, `subject_description`, `subject_units`, `year_level`, `subject_type`, `course`) VALUES
(1, 'CC113-M', 'Introduction to Computing', 3, 'First Year', 'Lecture', 'Computer Science'),
(2, 'CC113-M', 'Introduction to Computing', 3, 'First Year', 'Lecture', 'Information Technology'),
(3, 'CC113-M', 'Introduction to Computing', 3, 'First Year', 'Lecture', 'Information System'),
(4, 'CS251L-M', 'Computer Architecture and Organization Lab', 1, 'First Year', 'Laboratory', 'Computer Science'),
(5, 'CS251L-M', 'Computer Architecture and Organization Lab', 1, 'First Year', 'Laboratory', 'Information Technology'),
(6, 'CS251L-M', 'Computer Architecture and Organization Lab', 1, 'First Year', 'Laboratory', 'Information System'),
(7, 'CC132-M', 'Computer Architecture and Organization', 2, 'First Year', 'Lecture', 'Computer Science'),
(8, 'CC132-M', 'Computer Architecture and Organization', 2, 'First Year', 'Lecture', 'Information Technology'),
(9, 'CC132-M', 'Computer Architecture and Organization', 2, 'First Year', 'Lecture', 'Information System'),
(10, 'GEC4-M', 'Mathematics in the Modern World', 3, 'First Year', 'Lecture', 'Computer Science'),
(11, 'GEC4-M', 'Mathematics in the Modern World', 3, 'First Year', 'Lecture', 'Information Technology'),
(12, 'GEC4-M', 'Mathematics in the Modern World', 3, 'First Year', 'Lecture', 'Information System'),
(13, 'CS251L-M', 'Computer Architecture and Organization Lab', 3, 'First Year', 'Laboratory', 'Computer Science'),
(14, 'CS251L-M', 'Computer Architecture and Organization Lab', 3, 'First Year', 'Laboratory', 'Information Technology'),
(15, 'CS251L-M', 'Computer Architecture and Organization Lab', 3, 'First Year', 'Laboratory', 'Information System'),
(16, 'CC233-M', 'Data Structures and Algorithms', 3, 'Second Year', 'Lecture', 'Computer Science'),
(17, 'CC233-M', 'Data Structures and Algorithms', 3, 'Second Year', 'Lecture', 'Information Technology'),
(18, 'CC233-M', 'Data Structures and Algorithms', 3, 'Second Year', 'Lecture', 'Information System'),
(19, 'CC233L-M', 'Data Structures and Algorithms Lab', 1, 'Second Year', 'Laboratory', 'Computer Science'),
(20, 'CC233L-M', 'Data Structures and Algorithms Lab', 1, 'Second Year', 'Laboratory', 'Information Technology'),
(21, 'CC233L-M', 'Data Structures and Algorithms Lab', 1, 'Second Year', 'Laboratory', 'Information System'),
(22, 'CC344-M', 'Database Management Systems', 3, 'Second Year', 'Lecture', 'Computer Science'),
(23, 'CC344-M', 'Database Management Systems', 3, 'Second Year', 'Lecture', 'Information Technology'),
(24, 'CC344-M', 'Database Management Systems', 3, 'Second Year', 'Lecture', 'Information System'),
(25, 'CC344L-M', 'Database Management Systems Lab', 1, 'Second Year', 'Laboratory', 'Computer Science'),
(26, 'CC344L-M', 'Database Management Systems Lab', 1, 'Second Year', 'Laboratory', 'Information Technology'),
(27, 'CC344L-M', 'Database Management Systems Lab', 1, 'Second Year', 'Laboratory', 'Information System'),
(28, 'CC355-M', 'Operating Systems', 3, 'Third Year', 'Lecture', 'Computer Science'),
(29, 'CC355-M', 'Operating Systems', 3, 'Third Year', 'Lecture', 'Information Technology'),
(30, 'CC355-M', 'Operating Systems', 3, 'Third Year', 'Lecture', 'Information System'),
(31, 'CC355L-M', 'Operating Systems Lab', 1, 'Third Year', 'Laboratory', 'Computer Science'),
(32, 'CC355L-M', 'Operating Systems Lab', 1, 'Third Year', 'Laboratory', 'Information Technology'),
(33, 'CC355L-M', 'Operating Systems Lab', 1, 'Third Year', 'Laboratory', 'Information System'),
(34, 'CS411-M', 'Software Engineering', 3, 'Third Year', 'Lecture', 'Computer Science'),
(35, 'CS411-M', 'Software Engineering', 3, 'Third Year', 'Lecture', 'Information Technology'),
(36, 'CS411-M', 'Software Engineering', 3, 'Third Year', 'Lecture', 'Information System'),
(37, 'CS411L-M', 'Software Engineering Lab', 1, 'Third Year', 'Laboratory', 'Computer Science'),
(38, 'CS411L-M', 'Software Engineering Lab', 1, 'Third Year', 'Laboratory', 'Information Technology'),
(39, 'CS411L-M', 'Software Engineering Lab', 1, 'Third Year', 'Laboratory', 'Information System'),
(40, 'CC555-M', 'Networks and Data Communications', 3, 'Third Year', 'Lecture', 'Computer Science'),
(41, 'CC555-M', 'Networks and Data Communications', 3, 'Third Year', 'Lecture', 'Information Technology'),
(42, 'CC555-M', 'Networks and Data Communications', 3, 'Third Year', 'Lecture', 'Information System'),
(43, 'CC555L-M', 'Networks and Data Communications Lab', 1, 'Third Year', 'Laboratory', 'Computer Science'),
(44, 'CC555L-M', 'Networks and Data Communications Lab', 1, 'Third Year', 'Laboratory', 'Information Technology'),
(45, 'CC555L-M', 'Networks and Data Communications Lab', 1, 'Third Year', 'Laboratory', 'Information System'),
(46, 'MATH221-M', 'Discrete Mathematics', 3, 'Second Year', 'Lecture', 'Mathematics'),
(47, 'MATH221-M', 'Discrete Mathematics', 3, 'Second Year', 'Lecture', 'Computer Science'),
(48, 'MATH221-M', 'Discrete Mathematics', 3, 'Second Year', 'Lecture', 'Information Technology'),
(49, 'MATH221-M', 'Discrete Mathematics', 3, 'Second Year', 'Lecture', 'Information System'),
(50, 'CC141L-M', 'Computer Programming 2 Lab', 1, 'First year', 'Laboratory', 'Computer Science,'),
(51, 'CC141L-M', 'Computer Programming 2 Lab', 1, 'First year', 'Laboratory', 'Information Technology'),
(52, 'CC141L-M', 'Computer Programming 2 Lab', 1, 'First year', 'Laboratory', 'Information System'),
(53, 'CC142-M', 'Computer Programming 2', 2, 'First year', 'Lecture', 'Computer Science'),
(54, 'CC142-M', 'Computer Programming 2', 2, 'First year', 'Lecture', 'Information Technology'),
(55, 'CC142-M', 'Computer Programming 2', 2, 'First year', 'Lecture', 'Information System'),
(56, 'CS123-M', 'Linear Algebra', 3, 'First year', 'Lecture', 'Computer Science'),
(57, 'IS203-M', 'Accounting and Financial Management', 3, 'First year', 'Lecture', 'Information System'),
(58, 'IS223-M', 'Business Process Management', 3, 'First year', 'Lecture', 'Information System'),
(59, 'IS243-M', 'IT Infrastructure and Network Technologies', 3, 'First year', 'Lecture', 'Information System'),
(60, 'IS223-M', 'Business Process Management', 3, 'First year', 'Lecture', 'Information System'),
(61, 'MATHA35-M', 'Differential and Integral Calculus', 5, 'First year', 'Lecture', 'Computer Science'),
(62, 'IT251L-M', 'Platform Technologies Lab', 1, 'First year', 'Lecture', 'Information Technology'),
(63, 'IT252-M', 'Platform Technologies', 2, 'First year', 'Lecture', 'Information Technology'),
(64, 'CC211L-M', 'Data Structures and Algorithms Lab', 1, 'Second year', 'Lecture', 'Computer Science'),
(65, 'CC211L-M', 'Data Structures and Algorithms', 3, 'Second year', 'Lecture', 'Information Technology'),
(66, 'CC211L-M', 'Data Structures and Algorithms Lab', 1, 'Second year', 'Laboratory', 'Information Technology'),
(67, 'CS213--M', 'Human Computer Interaction', 3, 'First year', 'Lecture', 'Computer Science,'),
(68, 'CS213--M', 'Human Computer Interaction', 3, 'First year', 'Lecture', 'Information Technology'),
(69, 'CS213--M', 'Human Computer Interaction', 3, 'First year', 'Lecture', 'Information System'),
(70, 'CS233-M', 'Combinatorics and Graph Theory', 3, 'Second year', 'Lecture', 'Computer Science'),
(71, 'MATHSTAT03', 'Probability and Statistics', 3, 'First year', 'Lecture', 'Computer Science'),
(72, 'MATHSTAT03', 'Probability and Statistics', 3, 'First year', 'Lecture', 'Informtation Technology'),
(73, 'MATHSTAT03', 'Probability and Statistics', 3, 'First year', 'Lecture', 'Informtation System'),
(74, 'CCSP111-M', 'Advanced Programming with Java', 3, 'Second year', 'Lecture', 'Computer Science'),
(75, 'IT312-M', 'Database Management Systems', 3, 'Second year', 'Lecture', 'Information Technology'),
(76, 'CC343-M', 'Operating Systems', 3, 'Second year', 'Lecture', 'Computer Science'),
(77, 'CC342-M', 'Software Engineering', 3, 'Second year', 'Lecture', 'Computer Science'),
(78, 'CS344-M', 'Artificial Intelligence', 3, 'Second year', 'Lecture', 'Computer Science'),
(79, 'CS342-M', 'Computer Networks', 3, 'Second year', 'Lecture', 'Computer Science'),
(80, 'GEC1-M', 'Philippine History Government and Constitution', 3, 'Second year', 'Lecture', 'Computer Science'),
(81, 'CSALGO111L', 'Algorithm Design and Analysis Lab', 1, 'Second year', 'Laboratory', 'Computer Science'),
(82, 'CSALGO112L', 'Algorithm Design and Analysis Lab', 1, 'Second year', 'Laboratory', 'Computer Science'),
(83, 'CSALGO111-', 'Algorithm Design and Analysis', 3, 'Second year', 'Lecture', 'Computer Science'),
(84, 'CSALGO112-', 'Algorithm Design and Analysis', 3, 'Second year', 'Lecture', 'Computer Science'),
(85, 'GEC5-M', 'Art Appreciation', 3, 'Second year', 'Lecture', 'Computer Science'),
(86, 'GEC6-M', 'Understanding the Self', 3, 'Second year', 'Lecture', 'Computer Science'),
(87, 'CC411-M', 'Software Engineering 2', 3, 'Third year', 'Lecture', 'Computer Science'),
(88, 'CC415-M', 'Web Application Development', 3, 'Third year', 'Lecture', 'Computer Science'),
(89, 'IT411-M', 'Web Systems and Technologies', 3, 'Third year', 'Lecture', 'Information Technology'),
(90, 'CC481-M', 'Computer Graphics', 3, 'Third year', 'Lecture', 'Computer Science'),
(91, 'CS411-M', 'Theory of Computation', 3, 'Third year', 'Lecture', 'Computer Science'),
(92, 'CS413-M', 'Computer Security', 3, 'Third year', 'Lecture', 'Computer Science'),
(93, 'CS425-M', 'Mobile Computing', 3, 'Third year', 'Lecture', 'Computer Science'),
(94, 'IT424-M', 'Computer Networks and Security', 3, 'Third year', 'Lecture', 'Information Technology'),
(95, 'IT415-M', 'IT Project Management', 3, 'Third year', 'Lecture', 'Information Technology'),
(96, 'CC490-M', 'Capstone Project', 3, 'Fourth year', 'Lecture', 'Computer Science'),
(97, 'CC333-M', 'Data Analytics', 3, 'Second year', 'Lecture', 'Computer Science'),
(98, 'CC333-M', 'Software Engineering 1 Lab', 1, 'Second year', 'Lecture', 'Computer Science'),
(99, 'CC352-M', 'Software Engineering 1', 2, 'Second year', 'Lecture', 'Computer Science'),
(100, 'CC373-M', 'Parallel and Distributed Computing', 3, 'Second year', 'Lecture', 'Computer Science'),
(101, 'CSE1-M', 'CS Professional Elective 1', 3, 'Second year', 'Lecture', 'Computer Science'),
(102, 'CSE2-M', 'CS Professional Elective 2', 3, 'Third year', 'Lecture', 'Computer Science'),
(103, 'ITE1-M', 'IT Professional Elective 1', 3, 'Second year', 'Lecture', 'Information Technology'),
(104, 'ITE2-M', 'IT Professional Elective 2', 3, 'Third year', 'Lecture', 'Information Technology'),
(105, 'ITE3-M', 'IT Professional Elective 3', 3, 'Third year', 'Lecture', 'Information Technology'),
(106, 'ITE4-M', 'IT Professional Elective 4', 3, 'Third year', 'Lecture', 'Information Technology'),
(107, 'ISE1-M', 'IT Professional Elective 1', 3, 'Second year', 'Lecture', 'Information System'),
(108, 'ISE2-M', 'IT Professional Elective 2', 3, 'Third year', 'Lecture', 'Information System'),
(109, 'ISE3-M', 'IT Professional Elective 3', 3, 'Third year', 'Lecture', 'Information System'),
(110, 'ISE4-M', 'IT Professional Elective 4', 3, 'Third year', 'Lecture', 'Information System'),
(111, 'CC303-M', 'Methods of Research in Computing', 3, 'Third year', 'Lecture', 'Computer Science'),
(112, 'CC303-M', 'Methods of Research in Computing', 3, 'Third year', 'Lecture', 'Information Technology'),
(113, 'CC303-M', 'Methods of Research in Computing', 3, 'Third year', 'Lecture', 'Information System'),
(114, 'CC303-M', 'Automata Theory and Formal Language', 3, 'Third year', 'Lecture', 'Computer Science'),
(115, 'CS321L-M', 'Artificial Intelligence Lab', 1, 'Second year', 'Laboratory', 'Computer Science'),
(116, 'CS322-M', 'Artificial Intelligence', 1, 'First year', 'Lecture', 'Computer Science'),
(117, 'CS343-M', 'Modeling and Simulation', 1, 'First year', 'Lecture', 'Computer Science'),
(118, 'CS361L-M', 'Software Engineering 2 Lab', 1, 'Second year', 'Laboratory', 'Computer Science'),
(119, 'CS362-M', 'Software Engineering 2', 2, 'Second year', 'Lecture', 'Computer Science'),
(120, 'CSE3-M', 'CS Professional Elective 3', 3, 'Third year', 'Lecture', 'Computer Science'),
(121, 'CSE4-M', 'CS Professional Elective 4', 3, 'Third year', 'Lecture', 'Computer Science'),
(122, 'CS413-M', 'Thesis Writing 1', 3, 'Third year', 'Lecture', 'Computer Science'),
(123, 'CS433-M', 'Social and Professional Issues', 3, 'Fourth year', 'Lecture', 'Computer Science'),
(124, 'CS433-M', 'Social and Professional Issues', 3, 'Fourth year', 'Lecture', 'Information Technology'),
(125, 'CS433-M', 'Social and Professional Issues', 3, 'Fourth year', 'Lecture', 'Information System'),
(126, 'GEE11D-M', 'Living in the IT Era', 3, 'First year', 'Lecture', 'Computer Science'),
(127, 'GEE11D-M', 'Living in the IT Era', 3, 'First year', 'Lecture', 'Information Technology'),
(128, 'GEE11D-M', 'Living in the IT Era', 3, 'First year', 'Lecture', 'Information System'),
(129, 'CS403', 'Supervised Industrial Training', 6, 'Fourth year', 'Lecture', 'Computer Science'),
(130, 'CS403', 'Supervised Industrial Training', 6, 'Fourth year', 'Lecture', 'Information Technology'),
(131, 'CS403', 'Supervised Industrial Training', 6, 'Fourth year', 'Lecture', 'Information System'),
(132, 'CS423', 'Thesis Writing 2', 3, 'Fourth year', 'Lecture', 'Computer Science'),
(133, 'IT413-M', 'IT Capstone & Research 1', 3, 'Fourth year', 'Lecture', 'Computer Science'),
(134, 'IT423--M', 'IT Capstone & Research 2', 3, 'Fourth year', 'Lecture', 'Computer Science'),
(135, 'IT303--M', 'Systems Integration and Architecture 1', 3, 'Second year', 'Lecture', 'Information Technology'),
(136, 'IT433--M', 'Systems Integration and Architecture 2', 3, 'Second year', 'Lecture', 'Information Technology'),
(137, 'IT323', 'Business Intelligence', 3, 'Second year', 'Lecture', 'Information Technology'),
(138, 'IS263-M', 'Business Intelligence', 3, 'Second year', 'Lecture', 'Information System'),
(139, 'IT343_M', 'Systems Administration and Maintenance', 3, 'Second year', 'Lecture', 'Information Technology'),
(140, 'IT303--M', 'Information Assurance and Security 1', 3, 'Fourth year', 'Lecture', 'Information Technology'),
(141, 'IT363-M', 'Information Assurance and Security 2', 3, 'Second year', 'Lecture', 'Information Technology'),
(142, 'IS353-M', 'IS Project Management 1', 3, 'Second year', 'Lecture', 'Information System'),
(143, 'IS363--M', 'IS Project Management 2', 3, 'Second year', 'Lecture', 'Information System'),
(144, 'IS413-M', 'IS Capstone Project 1', 3, 'Fourth year', 'Laboratory', 'Information System'),
(145, 'IS423-M', 'IS Capstone Project 2', 3, 'Fourth year', 'Laboratory', 'Information System'),
(146, 'IS383-M', 'Evaluation of Business Performance', 3, 'Second year', 'Lecture', 'Information System'),
(147, 'CC311L-M', 'Web Development Lab', 1, 'Third year', 'Laboratory', 'Information System'),
(148, 'CC311L-M', 'Web Development Lab', 1, 'Third year', 'Laboratory', 'Information Technology'),
(149, 'CC311L-M', 'Web Development Lab', 1, 'Third year', 'Laboratory', 'Computer Science'),
(150, 'CC312-M', 'Web Development', 2, 'Third year', 'Laboratory', 'Information System'),
(151, 'CC312-M', 'Web Development', 2, 'Third year', 'Laboratory', 'Information Technology'),
(152, 'CC312-M', 'Web Development', 2, 'Third year', 'Laboratory', 'Computer Science');

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
-- AUTO_INCREMENT for table `demo`
--
ALTER TABLE `demo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `logId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
