-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 29, 2017 at 05:44 PM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Exposmaison`
--

-- --------------------------------------------------------

--
-- Table structure for table `landing`
--

CREATE TABLE `landing` (
  `id` int(11) NOT NULL,
  `carousselExpo` varchar(255) NOT NULL,
  `carousselArtiste` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `landing`
--

INSERT INTO `landing` (`id`, `carousselExpo`, `carousselArtiste`) VALUES
(1, '/img/caroussel/Expos/', ''),
(2, '/img/caroussel/Expos/expo1', ''),
(3, '/img/caroussel/Expos/img2', ''),
(4, '/img/caroussel/Expos/img3', ''),
(5, '/img/caroussel/Expos/img4', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `landing`
--
ALTER TABLE `landing`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `landing`
--
ALTER TABLE `landing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
