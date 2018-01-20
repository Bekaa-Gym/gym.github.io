-- phpMyAdmin SQL Dump
-- version 3.4.3.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 16, 2018 at 10:30 AM
-- Server version: 5.5.53
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(111) NOT NULL,
  `userimg` varchar(111) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `username`, `userimg`) VALUES
(1, 'Messi', 'box.jpg'),
(2, 'ronaldo', 'fit.jpg'),
(3, 'criss', 'imagee2.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `new_record`
--

CREATE TABLE IF NOT EXISTS `new_record` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trn_date` datetime NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `submittedby` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `new_record`
--

INSERT INTO `new_record` (`id`, `trn_date`, `name`, `age`, `submittedby`) VALUES
(5, '2018-01-06 20:31:49', 'kassem', 34, 'mofid'),
(10, '2018-01-15 23:12:32', 'Elham', 14, 'root'),
(11, '2018-01-15 23:23:33', 'Amira', 21, 'root');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `task` varchar(11111) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `task`) VALUES
(3, 'Hello World');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `password` (`password`),
  KEY `password_2` (`password`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(1, 'elham', '215@std.liu.edu.lb', '63a9f0ea7bb98050796b649e85481845', '2018-01-06 02:52:16'),
(2, 'elham', '215@std.liu.edu.lb', '63a9f0ea7bb98050796b649e85481845', '2018-01-06 00:55:38'),
(3, 'elham', '215@std.liu.edu.lb', '63a9f0ea7bb98050796b649e85481845', '2018-01-06 01:00:39'),
(4, 'hishma', '215@std.liu.edu.lb', '202cb962ac59075b964b07152d234b70', '2018-01-06 01:02:53'),
(5, 'e', 'root@s', '63a9f0ea7bb98050796b649e85481845', '2018-01-06 13:55:45'),
(6, 'elham', 'elham@com', '1234', '2018-01-20 00:00:00'),
(7, 'elham', 'e@w', '81dc9bdb52d04dc20036dbd8313ed055', '2018-01-06 14:33:12'),
(8, 'romacia', 'r@a', '81dc9bdb52d04dc20036dbd8313ed055', '2018-01-06 14:34:38'),
(9, 'mofid', 'modi_012@hotmail.com', '68053af2923e00204c3ca7c6a3150cf7', '2018-01-06 20:30:45'),
(10, 'khaled', 'khalood_102@hotmail.com', '250cf8b51c773f3f8dc8b4be867a9a02', '2018-01-06 20:51:14'),
(11, 'ali', 'aloush_180@yahoo.com', 'df6d2338b2b8fce1ec2f6dda0a630eb0', '2018-01-06 20:53:34'),
(12, 'elhamabd', '213@std.liu', '979d472a84804b9f647bc185a877a8b5', '2018-01-06 21:00:46'),
(13, 'root', 'root@liu', '63a9f0ea7bb98050796b649e85481845', '2018-01-15 21:37:06'),
(14, 'khaled', 'root@std', '63a9f0ea7bb98050796b649e85481845', '2018-01-15 22:40:39');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
