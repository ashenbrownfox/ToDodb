-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2014 at 05:42 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(100) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`msg_id`, `sender`, `message`) VALUES
(1, 'Eric Cartman', 'Hey guys!'),
(2, 'Bob', 'Hello World!'),
(3, 'Kelvin Yap', 'Hey guys I am hungry'),
(4, 'Paulo Santos', 'How about some pizza? Domino''s sounds good.'),
(5, 'Butters', 'Hahaha I''m evil!'),
(6, 'Butters', 'Excellent it still works!'),
(7, 'Ailun', 'Ok Cool! I''m glad it worked!'),
(8, 'Kelvin Yap', 'Ok that''s cool we''re going to ace it'),
(9, 'Eric Cartman', 'Hey guys stop being buttholes.'),
(10, 'Butters', 'I don''t know Eric, I don''t wanna be grounded.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
