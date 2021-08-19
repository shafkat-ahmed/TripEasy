-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2020 at 08:04 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trip`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `guide`
--

CREATE TABLE `guide` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `phone` int(11) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `location` text NOT NULL,
  `available` tinyint(1) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `guide`
--

INSERT INTO `guide` (`id`, `name`, `phone`, `pass`, `location`, `available`, `cost`) VALUES
(1, 'arnob', 1819645520, 'abcd', 'keokradong', 1, 1000),
(2, 'Pogba', 1999999999, 'manu', 'Rangamati', 1, 550),
(3, 'Cavani', 1222222222, 'dcba', 'Rangamati', 1, 700),
(4, 'Rashford', 1010101010, 'manu', 'Gazipur', 1, 600),
(5, 'Martial', 1777777777, 'aaaa', 'Bahubol', 1, 700);

-- --------------------------------------------------------

--
-- Table structure for table `spot`
--

CREATE TABLE `spot` (
  `id` int(11) NOT NULL,
  `division` text NOT NULL,
  `location` text NOT NULL,
  `hotel` text NOT NULL,
  `cost` int(100) NOT NULL,
  `pic` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `spot`
--

INSERT INTO `spot` (`id`, `division`, `location`, `hotel`, `cost`, `pic`) VALUES
(1, 'Chittagong ', 'Rangamati ', 'HillTown Resort', 5000, 'pic/rangamati1.jpg'),
(2, 'Chittagong', 'Keokradong', 'Nilgiri Hill', 2000, 'pic/keo2.jpg'),
(3, 'Chittagong', 'Rangamati', 'Polwel Resort', 3000, 'pic/polwel.jpg'),
(4, 'Shylhet', 'Srimongol', 'Grand Sultan Resort', 10000, 'pic/keo4.jpg'),
(6, 'Sylhet', 'Bahubol', 'The Palace', 6000, 'pic/keo3.jpg'),
(7, 'Dhaka', 'Gazipur', 'Bamboo Eco Resort', 3000, 'pic/keo5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `triplist`
--

CREATE TABLE `triplist` (
  `phone` int(11) NOT NULL,
  `location_id` int(255) NOT NULL,
  `count` int(11) NOT NULL,
  `sdate` date NOT NULL,
  `edate` date NOT NULL,
  `guideid` int(11) NOT NULL,
  `totalcost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `triplist`
--

INSERT INTO `triplist` (`phone`, `location_id`, `count`, `sdate`, `edate`, `guideid`, `totalcost`) VALUES
(1111111111, 1, 2, '2020-12-28', '2020-12-29', 1, 10000),
(1733228228, 1, 1, '2020-12-30', '2020-12-31', 2, 5000),
(1777777777, 2, 2, '2020-12-28', '2020-12-29', 3, 4000),
(1999999999, 7, 2, '2020-12-30', '2020-12-31', 4, 6000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` text NOT NULL,
  `address` varchar(30) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `phone` int(11) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `address`, `mail`, `phone`, `pass`) VALUES
('bruno', 'Manchester', 'bruno@gmail.com', 1111111111, 'manu'),
('Shafkat Ahmed Mazumder', 'port', 'shafkat.arnob07@gmail.com', 1733228228, 'abcd'),
('Giggs', 'Manchester', 'giggs@gmail.com', 1777777777, 'manu'),
('james', 'Manchester', 'james@gmail.com', 1999999999, 'james');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guide`
--
ALTER TABLE `guide`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `spot`
--
ALTER TABLE `spot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `triplist`
--
ALTER TABLE `triplist`
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`phone`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `spot`
--
ALTER TABLE `spot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
