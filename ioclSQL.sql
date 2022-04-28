-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 27, 2022 at 03:54 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `iocl`
--

-- --------------------------------------------------------

--
-- Table structure for table `attandence`
--

CREATE TABLE IF NOT EXISTS `attandence` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `ArrivalTime` varchar(50) NOT NULL,
  `UniqueID` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `attandence`
--

INSERT INTO `attandence` (`id`, `Name`, `Email`, `Date`, `ArrivalTime`, `UniqueID`) VALUES
(1, 'BHABESH KALITA', 'imbkalita@gmail.com', '2022-01-13', '10:16', '61f1936a73908'),
(2, 'BHABESH KALITA', 'imbkalita@gmail.com', '2022-01-12', '12:15', '61f1936a73908'),
(3, 'BHABESH KALITA', 'imbkalita@gmail.com', '2022-01-26', '01:01', '61f1936a73908'),
(4, 'Brajesh Kalita', 'imbkalita2@gmail.com', '2022-01-26', '00:04', '61f1943558547'),
(5, 'Brajesh Kalita', 'imbkalita2@gmail.com', '2022-01-27', '08:42', '61f1943558547'),
(6, 'BHABESH KALITA', 'imbkalita@gmail.com', '2022-01-27', '10:42', '61f1936a73908');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `jobRole` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `uniqid` varchar(50) NOT NULL,
  PRIMARY KEY (`email`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `jobRole`, `password`, `uniqid`) VALUES
(1, 'BHABESH KALITA', 'imbkalita@gmail.com', '+919531386314', 'officer', 'password', '61f1936a73908'),
(2, 'Brajesh Kalita', 'imbkalita2@gmail.com', '6026652991', 'special employee', 'password', '61f1943558547'),
(3, 'Rakesh kalita', 'imbkalita3@gmail.com', '8472895452', 'employee', 'password', '61f20dde496fb'),
(3, 'Hirak Jyoti Nath', 'imbkalita4@gmail.com', '8421897452', 'employee', 'password', '61f20dde496ec');
