-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 22, 2023 at 08:33 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `youthportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userid` int NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(20) NOT NULL,
  `Lastname` varchar(20) NOT NULL,
  `IdNo` int NOT NULL,
  `Institution` varchar(50) NOT NULL,
  `DateOfBirth` varchar(20) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `HomeCounty` varchar(20) NOT NULL,
  `PhoneNumber` int NOT NULL,
  `password` varchar(150) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `access` int NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `FirstName`, `Lastname`, `IdNo`, `Institution`, `DateOfBirth`, `Gender`, `HomeCounty`, `PhoneNumber`, `password`, `photo`, `access`) VALUES
(1, 'MUTUA', 'E MULWA', 390391, 'Dekut', '22/22', 'Male', 'Nakuru', 2147483647, '1212', 'IMG-63efa0688cea48.29645425.jpg', 1),
(3, 'MUTUA', 'E MULWA', 390392, 'Dekut', '22/22/22', 'Male', 'ddd', 2147483647, '1111', 'IMG-640796bfa8dcf5.33400531.jpg', 2),
(4, 'MUTUA', 'E MULWA', 390393, '1111', '2023-03-15', 'MALE', 'Machakos', 2147483647, '1111', 'IMG-640796bfa8dcf5.33400531.jpg', 2),
(6, 'Admin', 'Admin', 390394, 'Dekut', '2023-02-27', 'Male', 'Makueni', 2147483647, '1212', 'IMG-640796bfa8dcf5.33400531.jpg', 2),
(7, 'MUTUA', 'E MULWA', 390395, 'dekut', '2023-03-07', 'Male', 'Machakos', 2147483647, '1111', 'IMG-640c23547383e9.23932345.jpg', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
