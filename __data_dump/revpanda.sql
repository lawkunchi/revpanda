-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 09, 2022 at 12:13 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `revpanda`
--

-- --------------------------------------------------------

--
-- Table structure for table `revpanda_table`
--

DROP TABLE IF EXISTS `revpanda_table`;
CREATE TABLE IF NOT EXISTS `revpanda_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `A` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `B` int(255) NOT NULL,
  `C` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `revpanda_table`
--

INSERT INTO `revpanda_table` (`id`, `A`, `B`, `C`) VALUES
(1, 'James', 4, 'zaire'),
(2, 'Brad', 2, 'Burundi'),
(3, 'John', 18, 'USA\n'),
(4, 'Michael', 12, 'Laos'),
(5, 'Micthel', 63, 'Ethopia'),
(6, 'Zaira', 252, 'Czech'),
(7, 'Queen', 7, 'Turkey'),
(8, 'Lebo', 3, 'Haiti'),
(9, 'Alexey', 1, 'Austria'),
(10, 'Okafor', 32, 'England');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
