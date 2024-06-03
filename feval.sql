-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2022 at 11:22 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feval`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `email`, `password`) VALUES
(1, 'admin@admin.com', 'admin129'),
(3, 'admin2@admin.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `c_id` int(30) NOT NULL,
  `name` varchar(255) NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`c_id`, `name`, `id`) VALUES
(1, 'CSE 411', 1),
(2, 'CSE 405', 2),
(3, 'CSE 422', 2),
(4, 'CSE 477', 2);

-- --------------------------------------------------------

--
-- Table structure for table `evaluation`
--

CREATE TABLE `evaluation` (
  `no` int(100) NOT NULL,
  `Question` varchar(500) NOT NULL,
  `Ans` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `evaluation`
--

INSERT INTO `evaluation` (`no`, `Question`, `Ans`) VALUES
(1, 'The instructor\'s effectiveness in teaching the subject matter in this course has been:', ''),
(2, 'The instructor\'s efforts toward creating a good learning atmosphere in the classroom environment have been:', ''),
(3, 'The instructor\'s ability to treat all students in the class with respect has been:', ''),
(4, 'The instructor\'s ability to use the class time well has been:', ''),
(5, 'The instructor made the objectives and expectations of the course clear, (course outlines, evaluation methods, exam dates, etc.)', ''),
(6, 'The instructor\'s knowledge of the subject matter of this course is: \r\n', ''),
(7, 'Considering the nature of the subject matter in this course, the ability of the instructor to stimulate interest in or appreciation of the course content is:', ''),
(8, 'The instructor\'s ability to answer questions about the course content and methods has been:', ''),
(9, 'The instructor is accessible outside of regular class time for help of consultation:', ''),
(10, 'As an aid to learning course material, the instructor\'s written of verbal comments on student work have been:', '');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `init` varchar(4) NOT NULL,
  `email` varchar(110) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `fname`, `lname`, `init`, `email`, `pass`) VALUES
(1, 'Dr. Salahuddin', 'Mohammad', 'DSU', 'dsu@ewubd.edu', '12345'),
(2, 'Dr. Anisur', 'Rahman', 'DAR', 'dar@ewubd.edu', '4444');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `email` varchar(500) NOT NULL,
  `course_id` int(11) NOT NULL,
  `ans1` varchar(20) NOT NULL,
  `ans2` varchar(20) NOT NULL,
  `ans3` varchar(20) NOT NULL,
  `ans4` varchar(20) NOT NULL,
  `ans5` varchar(20) NOT NULL,
  `ans6` varchar(50) NOT NULL,
  `ans7` varchar(50) NOT NULL,
  `ans8` varchar(50) NOT NULL,
  `ans9` varchar(50) NOT NULL,
  `ans10` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `email`, `course_id`, `ans1`, `ans2`, `ans3`, `ans4`, `ans5`, `ans6`, `ans7`, `ans8`, `ans9`, `ans10`) VALUES
(3, '2018-1-60-203@std.ewubd.edu', 1, '4', '4', '4', '2', '4', '3', '4', '5', '5', '5'),
(4, '2018-1-60-203@std.ewubd.edu', 2, '2', '3', '2', '3', '3', '2', '3', '2', '4', '2'),
(5, '2018-1-60-204@std.ewubd.edu', 2, '4', '3', '4', '3', '4', '3', '4', '3', '4', '3'),
(6, '2018-1-60-129@std.ewubd.edu', 3, '3', '4', '1', '3', '1', '3', '2', '3', '2', '4'),
(7, '2018-1-60-129@std.ewubd.edu', 3, '4', '4', '2', '3', '4', '2', '2', '4', '2', '4');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `id_number` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `course_1` int(11) NOT NULL,
  `course_2` int(11) NOT NULL,
  `course_3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fname`, `lname`, `id_number`, `email`, `pass`, `course_1`, `course_2`, `course_3`) VALUES
(1, 'Nahian', 'Ashfak', '2018-1-60-203', '2018-1-60-203@std.ewubd.edu', '12127', 1, 2, 3),
(2, 'Khandaker', 'Alam', '2018-1-60-204', '2018-1-60-204@std.ewubd.edu', '12345', 1, 2, 4),
(3, 'Jannatun', 'Prity', '2018-1-60-129', '2018-1-60-129@std.ewubd.edu', 'ewuprity129', 2, 3, 4),
(11, 'Jarin Jahan', 'Jabin', '2018-1-60-096', '2018-1-60-096@std.ewubd.edu', '147', 1, 3, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `evaluation`
--
ALTER TABLE `evaluation`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_1` (`course_1`),
  ADD KEY `course_2` (`course_2`),
  ADD KEY `course_3` (`course_3`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `c_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
