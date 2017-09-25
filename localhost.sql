-- phpMyAdmin SQL Dump
-- version 4.6.0
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Sep 24, 2017 at 04:57 AM
-- Server version: 10.1.9-MariaDB-log
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(3) NOT NULL,
  `name` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(10) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `email` varchar(200) NOT NULL,
  `image` varchar(30) NOT NULL,
  `remark` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `address`, `city`, `contact`, `email`, `image`, `remark`) VALUES
(1, 'nirali', 'jetpur', 'jetpur', '9409728758', 'nirali@gmail.com', 'Koala.jpg', 'good'),
(3, 'asha', 'jetpur', 'jetpur', '8140504765', 'asha@gmail.com', 'Koala.jpg', 'good'),
(4, 'sonal', 'police line ', 'jetpur', '9409728758', 'sonal@gmail.com', 'Penguins.jpg', 'good'),
(5, 'sonal', 'jetpur', 'jetpur', '9922558866', 'sonal@gmail.com', 'Tulips.jpg', 'good'),
(6, 'avani', 'jetpur', 'jetpur', '948597316', 'avani@gmail.com', 'Koala.jpg', 'good'),
(8, 'ankita k. ', 'rajkot', 'rajkot', '9922558866', 'ankita@gmail.com', 'Hydrangeas.jpg', 'good');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
