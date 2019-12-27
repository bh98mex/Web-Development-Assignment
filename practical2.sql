-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 05, 2019 at 09:05 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `practical2`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `Firstname` varchar(50) NOT NULL,
  `Surname` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` char(255) NOT NULL,
  `DateRegistered` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UserType` int(1) NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Firstname`, `Surname`, `Username`, `Password`, `DateRegistered`, `UserType`) VALUES
(1, 'Leo', 'Groza', 'bh98mex@yahpp.com', 'soso', '2019-02-15 00:13:48', 0),
(2, 'ALina', 'ioane', 'bskjgdkh@yahoo.com', 'gsgsg', '2019-02-15 09:51:41', 1),
(3, 'ion', 'fsddsfsd', 'fdsfsd@uas.com', '12345', '2019-02-15 10:09:53', 2),
(6, 'soso', 'ione', 'bh98mex@yahoo.com', '12345', '2019-02-15 10:18:20', 1),
(7, 'soso', 'soso', 'soso@yahoo.com', 'd0717f47123f763c266ca3a759dcaf30', '2019-02-15 11:13:55', 1),
(8, 'Leo', 'Groza', 'bh98mex@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2019-02-15 12:37:43', 3),
(9, 'Leo', 'Groza', 'bh98mex@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '2019-02-15 12:41:22', 1),
(10, 'Adi', 'Adi', 'Adi@yahoo.com', 'c46335eb267e2e1cde5b017acb4cd799', '2019-02-15 13:00:33', 1),
(11, '12wdsd', 'asds', 'bh98mex@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '2019-02-15 13:38:14', 1),
(12, '', 'soso', 'soso@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', '2019-02-15 13:39:27', 1),
(13, 'Alex', 'Groza', 'bh98mex@yahoo.com', '4a7d1ed414474e4033ac29ccb8653d9b', '2019-02-21 15:15:28', 1),
(14, 'Razvan', 'Mandache', 'RZM@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', '2019-02-24 17:05:55', 4),
(15, 'Alina', 'Groza', 'alina_hendrea18@yahoo.com', '0f759dd1ea6c4c76cedc299039ca4f23', '2019-04-04 22:19:58', 2),
(16, 'Usman', 'Butt', 'Usman@qa.com', '81dc9bdb52d04dc20036dbd8313ed055', '2019-04-04 22:20:45', 1),
(17, 'Andreea', 'Groza', 'alina_hendrea@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', '2019-04-04 23:00:38', 4),
(18, 'Anwar', 'al-Haq', 'Anwar@qa.com', '4a7d1ed414474e4033ac29ccb8653d9b', '2019-04-04 23:01:29', 1),
(19, 'Leo', 'G', 'G@yahoo.com', '4a7d1ed414474e4033ac29ccb8653d9b', '2019-04-04 23:04:36', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
