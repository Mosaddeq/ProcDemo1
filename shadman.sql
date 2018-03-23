-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2018 at 08:19 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shadman`
--

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `name` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `uType` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`name`, `email`, `gender`, `password`, `uType`) VALUES
('Shadman', 'shadmanmosaddeq@gmail.com', 'Male', '', 'Student'),
('Shadman', 'sami.tauseef@gmail.com', 'Male', '', 'Instructor'),
('Shadman', 'sami.tauseef@gmail.com', 'Male', '', 'Instructor'),
('Shadman', 'sami.tauseef@gmail.com', 'Male', '', 'Instructor'),
('s', 'spiderman@gmail.com', 'Male', 'sss', 'Student'),
('s', 'spiderman@gmail.com', 'Male', 'sss', 'Student'),
('sad', 'asdasdasd@gmail.com', 'Male', 'asd', 'Student'),
('', 'shadmanmosaddeq@gmail.com', 'Male', 'qwe', 'Student'),
('', 'shadmanmosaddeq@gmail.com', 'Male', 'qwe', 'Student'),
('sss', 'ssssssssss@gmail.com', 'Female', 'sss', 'Instructor'),
('sss', 'ssssssssss@gmail.com', 'Female', 'sss', 'Instructor'),
('sss', 'ssssssssss@gmail.com', 'Female', 'sss', 'Instructor'),
('sss', 'ssssssssss@gmail.com', 'Female', 'sss', 'Instructor'),
('sss', 'ssssssssss@gmail.com', 'Female', 'sss', 'Instructor'),
('s1', 'spiderman@gmail.com', 'Male', 'qwe', 'Instructor'),
('', 'shadmanmosaddeq@gmail.com', 'Male', 'zzz', 'Student'),
('Mosaddeq', 'mosad@gmail.com', 'Male', 'ssd', 'Instructor'),
('Shadman Mosaddeq', 'shadmanmosaddeq@gmail.com', 'Male', '8362357polt', 'Student'),
('Shadman Mosaddeq', 'shadmanmosaddeq@gmail.com', 'Male', '8362357polt', 'Student'),
('Shadman Mosaddeq', 'shadmanmosaddeq@gmail.com', 'Male', '8362357polt', 'Student'),
('Shadman Mosaddeq', 'shadmanmosaddeq@gmail.com', 'Male', '8362357polt', 'Student');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
