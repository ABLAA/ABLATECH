-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 04, 2018 at 11:33 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ablatech`
--

-- --------------------------------------------------------

--
-- Table structure for table `cameras`
--

DROP TABLE IF EXISTS `cameras`;
CREATE TABLE IF NOT EXISTS `cameras` (
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `path` varchar(100) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cameras`
--

INSERT INTO `cameras` (`name`, `price`, `path`, `description`) VALUES
('camera ROUGE', 500, 'images/2.jpg', 'description'),
('NIKON ', 600, 'images/11.jpg', 'description'),
('camera NOIR', 600, 'images/1.jpg', 'description');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `e_mail` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  PRIMARY KEY (`e_mail`),
  UNIQUE KEY `email` (`e_mail`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`first_name`, `last_name`, `e_mail`, `password`) VALUES
('aa', 'aa', 'abla@gmail.com', 'aa'),
('sana', 'ladhar', 'sana@gmail.com', '123'),
('sajiaa', 'trabelsi', 'sajiaa@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `latestproduct`
--

DROP TABLE IF EXISTS `latestproduct`;
CREATE TABLE IF NOT EXISTS `latestproduct` (
  `name` varchar(1000) NOT NULL,
  `price` int(100) NOT NULL,
  `path` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `latestproduct`
--

INSERT INTO `latestproduct` (`name`, `price`, `path`, `description`) VALUES
('camera and accesoires', 500, 'images/9.jpg', 'description'),
('carte memoire', 10, 'images/12.jpg', 'description'),
('flash disk', 50, 'images/7.jpg', 'description'),
('camera LG', 60, 'images/13.jpg', 'rtherr'),
('ipod', 200, 'images/kindle.png', 'description'),
('CARET', 600, 'images/8.jpg', 'description');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `name` varchar(100) NOT NULL,
  `e_mail` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`name`, `e_mail`, `message`) VALUES
('abla', 'abla@gmail.com', 'i love this site'),
('sana', 'sana@gmail.com', 'thank you '),
('sajia', 'sajiaa@gmail.com', 'hello');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
