-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 17, 2025 at 02:22 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `booking_db`
--
CREATE DATABASE `booking_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `booking_db`;

-- --------------------------------------------------------

--
-- Table structure for table `book_form`
--

CREATE TABLE IF NOT EXISTS `book_form` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `ticket` int(255) NOT NULL,
  `guests` int(255) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `phone` varchar(11) CHARACTER SET utf8mb4 NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `location` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `arrivals` date NOT NULL,
  `leaving` date NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `book_form`
--

INSERT INTO `book_form` (`id`, `name`, `ticket`, `guests`, `email`, `phone`, `address`, `location`, `arrivals`, `leaving`, `time`) VALUES
(6, 'John Ian', 3, 3, 'cabalquinto@gmail.com', '09123456789', 'USA, Texas', 'Philippines', '2025-05-09', '2025-05-10', '2025-05-08 10:04:27'),
(7, 'ReiTzy', 5, 5, 'rei@gmail.com', '09456783490', 'Nigeria', 'North Korea', '2025-05-23', '2025-05-31', '2025-05-08 10:05:30'),
(8, 'Ian', 1, 2, 'hatezaian@gmail.com', '09307810612', '123 diyan lang', 'baguio po', '2025-05-20', '2025-05-23', '2025-05-17 10:19:12');
