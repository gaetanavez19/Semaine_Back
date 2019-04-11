-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 11, 2019 at 08:14 PM
-- Server version: 5.7.21
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `semaineIntensiveAPI`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `moviename` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `date` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `moviename`, `username`, `date`, `title`, `comment`) VALUES
(1, '', 'xXThEbEsTdEvXx', 1555003338, 'waouw', 'After being held captive in an Afghan cave, billionaire engineer Tony Stark creates a unique weaponized suit of armor to fight evil...'),
(2, '', '', 1555003455, '', ''),
(3, '', '', 1555003519, '', ''),
(4, '', '', 1555003590, '', ''),
(5, '', 'felix', 1555003729, 'waouw', 'c trop bien comme film love'),
(6, '', 'feliax', 1555003752, 'waouw', 'c \'est bo'),
(7, '', 'feliax', 1555003787, 'waouw', 'c \'est bo'),
(8, '', 'feliax', 1555003801, 'waouw', 'c \'est bo'),
(9, '', 'feliax', 1555003932, 'waouw', 'c \'est bo'),
(10, '', 'feliax', 1555003977, 'waouw', 'c \'est bo'),
(11, '', 'feliax', 1555004008, 'waouw', 'c \'est bo'),
(12, '', 'feliax', 1555004275, 'waouw', 'c \'est bo'),
(13, '', 'feliax', 1555004313, 'waouw', 'c \'est bo'),
(14, '', 'feliax', 1555004477, 'waouw', 'c \'est bo'),
(15, '', 'thomas', 1555004680, 'waouw', 'azertyuiop'),
(16, '', 'thomas', 1555004728, 'waouw', 'azertyuiop'),
(17, '', 'thomas', 1555004856, 'waouw', 'azertyuiop'),
(18, 'Captain Marvel', 'thomas', 1555004873, 'waouw', 'azertyuiop'),
(19, 'Iron Man 2', 'azert', 1555004905, 'zerty', 'zsertyu'),
(20, 'Red Sparrow', 'alixdu77', 1555006892, 'waouw', 'c\'est trop de css'),
(21, 'Red Sparrow', 'alixdu77', 1555006892, 'waouw', 'c\'est trop de css');

-- --------------------------------------------------------

--
-- Table structure for table `listfilm`
--

CREATE TABLE `listfilm` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `listfilm`
--

INSERT INTO `listfilm` (`id`, `fname`, `image`) VALUES
(1, 'Dumbo', 'film1.jpeg'),
(2, 'Shazam', 'film2.jpeg'),
(3, 'Captain marvel', 'film3.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'no', 'ac05576ba58ac1e230b3096972df7d271637b5c4');

-- --------------------------------------------------------

--
-- Table structure for table `watchlist`
--

CREATE TABLE `watchlist` (
  `id` int(11) NOT NULL,
  `movieID` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `watchlist`
--

INSERT INTO `watchlist` (`id`, `movieID`, `username`) VALUES
(61, 'w2PMyoyLU22YvrGK3smVM9fW1jj', ''),
(62, 'w2PMPoyLU22YvrGK3smVM9fW1jj', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listfilm`
--
ALTER TABLE `listfilm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `watchlist`
--
ALTER TABLE `watchlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `listfilm`
--
ALTER TABLE `listfilm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `watchlist`
--
ALTER TABLE `watchlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
