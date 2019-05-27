-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2019 at 05:46 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seaters`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `username`, `password`) VALUES
(1, 'Administrator', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `parentid` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `Address` varchar(150) NOT NULL,
  `contactno` int(20) NOT NULL,
  `email` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`parentid`, `firstname`, `lastname`, `dob`, `Address`, `contactno`, `email`) VALUES
(1, 'sb', 'gh', '2019-01-06', 'dhghg', 5654855, 'ffg@gmail.com'),
(3, 'Abhi', 'kaushik', '2019-04-08', 'adf', 4252212, 'shreya@gmail.com'),
(14, 'harsh', 'v', '2019-03-08', 'bhopal', 2147483647, 'harshv@gmail.com'),
(15, 'harsh', 'v', '2019-03-08', 'bhopal', 2147483647, 'harshv@gmail.com'),
(16, 'kajal', 'v', '2019-03-09', 'Indore', 2147483647, 'harshv@gmail.com'),
(17, 'karan', 'dfa', '2018-03-08', 'dfaf', 5114101, 'kyra@gmail.com'),
(18, 'kajal', 'v', '2019-03-09', 'Indore', 2147483647, 'harshv@gmail.com'),
(19, 'harsh', 'v', '2019-03-08', 'bhopal', 2147483647, 'harshv@gmail.com'),
(20, 'harsh', 'v', '2019-03-09', 'kothri', 464556, 'harshv@gmail.com'),
(21, 'avinash', 'verma', '2018-04-08', 'kothri', 2147483647, 'ffgD@gmail.com'),
(22, 'avinash', 'verma', '2018-04-08', 'kothri', 2147483647, 'ffgD@gmail.com'),
(23, 'avinash', 'verma', '2018-04-08', 'kothri', 2147483647, 'ffgD@gmail.com'),
(24, 'avinash', 'verma', '2018-04-08', 'kothri', 2147483647, 'ffgD@gmail.com'),
(25, 'avinash', 'verma', '2018-04-08', 'kothri', 2147483647, 'ffgD@gmail.com'),
(26, 'rohan', 'Mouse', '2019-04-01', 'dfa', 627441, '123@gmail.com'),
(27, 'Avinash', 'Verma', '2019-04-18', 'kothri', 2147483647, 'verma@gmail.com'),
(28, 'Avinash', 'Verma', '2019-04-01', 'adf', 627441, 'verma@gmail.com'),
(29, 'rohan', 'Verma', '2019-03-31', 'dfsd', 552202, 'shreya@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `seatersdetails`
--

CREATE TABLE `seatersdetails` (
  `seaterid` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `charge` varchar(50) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seatersdetails`
--

INSERT INTO `seatersdetails` (`seaterid`, `Name`, `photo`, `description`, `charge`, `experience`, `email`, `Address`) VALUES
(1, 'Riya Singh', '1.jpg', 'Hi, I am Riya looking for a babysitting opportunity', '1,000 per day', '2 years', 'riya@gmail.com', 'Indore MP, India'),
(2, 'Shreya Sharma', '2.jpg', 'Hi, I am Shreya from India looking for an babysitting opportunity', '1,000 per day', '1 year', 'shreya@gmail.com', 'Bhopal, India'),
(3, 'Geeta Sharma', 'care.jpg', 'Hi, I am Geeta from bhopal. Looking for a babysitting job.', '1000 per day', '2 years', 'geetasharma@gmail.com', 'Bhopal, India'),
(4, 'kyra ', 'mother.jpg', 'Hi, I am kyra from Indore, looking for a babysitting opportunity', '1000 per day', '1 year', 'kyra@gmail.com', 'Indore, India');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(11) NOT NULL,
  `parentid` int(11) NOT NULL,
  `seaterid` int(11) NOT NULL,
  `status` varchar(25) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `parentid`, `seaterid`, `status`, `checkin`, `checkout`) VALUES
(1, 3, 2, 'Check Out', '2019-04-17', '0000-00-00'),
(4, 28, 1, 'Check Out', '2019-04-25', '0000-00-00'),
(5, 29, 2, 'Confirm', '2019-04-17', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `Address`, `password`) VALUES
(1, 'avinash', 'ver@gmail.com', '', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'harsh', '123@gmail.com', 'Indore, India', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, 'henry', 'verma158@gmail.com', 'Indore, India', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'xyz', 'rishi.pareek2018@vitbhopal.ac.in', 'xedg', '0c12278389532e91c601af4c8adef7fc'),
(6, 'dkv', 'rishi.pareek20189@vitbhopal.ac.in', 'xedg', '6562c5c1f33db6e05a082a88cddab5ea'),
(7, 'he', '1123@gmail.com', 'xedg', '42ffcf057e133f94c1b7b5cf543ef3bd'),
(9, 'verma', 'ffgj@gmail.com', 'bdfg', '83cdcec08fbf90370fcf53bdd56604ff'),
(10, 'harshv', 'harsh@gmail.com', 'Kothri', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`parentid`);

--
-- Indexes for table `seatersdetails`
--
ALTER TABLE `seatersdetails`
  ADD PRIMARY KEY (`seaterid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `parentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `seatersdetails`
--
ALTER TABLE `seatersdetails`
  MODIFY `seaterid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
