-- phpMyAdmin SQL Dump
-- version 4.0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 14, 2013 at 03:31 PM
-- Server version: 5.6.11-log
-- PHP Version: 5.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `drestein`
--
CREATE DATABASE IF NOT EXISTS `drestein` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `drestein`;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `event_name` varchar(50) NOT NULL,
  `department_name` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`event_name`, `department_name`, `user`) VALUES
('TEST DRIVE', 'E and I', 'seceandi'),
('TOUCH ME NOT', 'E and I', 'seceandi'),
('L BOARD', 'E and I', 'seceandi'),
('OPEN LOOP CHOPPER', 'E and I', 'seceandi'),
('KFC', 'E and I', 'seceandi'),
('ALL ROUNDER', 'IT', 'secit'),
('MIND GRIND', 'IT', 'secit'),
('FREE STYLE CODER', 'IT', 'secit'),
('OUT OF BOX', 'IT', 'secit'),
('BRAIN BURSTER', 'IT', 'secit'),
('FACEBOOK BATTLE', 'IT', 'secit'),
('GAMING', 'IT', 'secit'),
('THE MECHANIC', 'MECH', 'secmech'),
('ROBO RANGER', 'MECH', 'secmech'),
('GLIDER MANIA', 'MECH', 'secmech'),
('MOTO RENOVATE', 'MECH', 'secmech'),
('IC BURNOUT', 'MECH', 'secmech'),
('JUST A MINUTE', 'MBA', 'secmba'),
('BIZ QUIZ', 'MBA', 'secmba'),
('MOVIE MANAGEMENT', 'MBA', 'secmba'),
('SMART INVESTORS', 'MBA', 'secmba'),
('BEST MANAGER', 'MBA', 'secmba'),
('SERVICE LAUNCH', 'MBA', 'secmba'),
('SCREEN PLAY', 'MCA', 'secmca'),
('CODE MAKER', 'MCA', 'secmca'),
('MARSHALLING IDEAS', 'MCA', 'secmca'),
('WEB HUNT', 'MCA', 'secmca'),
('WORD VOYAGE', 'MCA', 'secmca'),
('MY KLICK', 'MCA', 'secmca'),
('HECK', 'CSE', 'seccse'),
('PICOMANIA', 'CSE', 'seccse'),
('CIPHER SMASH', 'CSE', 'seccse'),
('DA VINCI', 'CSE', 'seccse'),
('CINE MADS', 'CSE', 'seccse'),
('LUDOS CODE', 'CSE', 'seccse'),
('T PLAY', 'CSE', 'seccse'),
('BRAIN FUZZ', 'ECE', 'secece'),
('SKILLER', 'ECE', 'secece'),
('THRUST', 'ECE', 'secece'),
('TORSION', 'ECE', 'secece'),
('PLETHORA', 'ECE', 'secece'),
('BOMBOTSTIC', 'ECE', 'secece'),
('UNDERWORLD DRIVE', 'EEE', 'seceee'),
('PIRATE CITY', 'EEE', 'seceee'),
('HOW STUFF WORKS?', 'EEE', 'seceee'),
('ELECTRIC CIRCUIT DEBUGGING', 'EEE', 'seceee'),
('SMART CIRCUIT', 'EEE', 'seceee'),
('TRI TARMAC', 'EEE', 'seceee');

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE IF NOT EXISTS `persons` (
  `StudentId` int(10) NOT NULL AUTO_INCREMENT,
  `Fname` varchar(80) NOT NULL,
  `Sname` varchar(80) NOT NULL,
  `Department` varchar(80) NOT NULL,
  `College` varchar(80) NOT NULL,
  `OtherCollege` varchar(80) NOT NULL,
  `Email` varchar(80) NOT NULL,
  `Mobile` varchar(15) NOT NULL,
  `Amount` varchar(5) NOT NULL,
  `Date` varchar(10) NOT NULL,
  `IPAddress` varchar(15) NOT NULL,
  PRIMARY KEY (`StudentId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`StudentId`, `Fname`, `Sname`, `Department`, `College`, `OtherCollege`, `Email`, `Mobile`, `Amount`, `Date`, `IPAddress`) VALUES
(1, 'Ramesh', 'kumar', 'MECHANICAL ENGINEERING', 'Saveetha Engineering College', '', 'trkrameshkumar@gmail.com', '9884858702', '0', '13-8-2013', '127.0.0.1'),
(2, 'Baskar', 'Manoharan', 'SOFTWARE ENGINEERING', 'D.M.I. College of Engineering', '', 'baskar.manoharan@gmail.com', '9677666319', '50', '13-8-2013', '127.0.0.1'),
(3, 'ramesh', 'kumar', 'ELECTRONICS AND INSTRUMENT ENGG.', 'College of Engineering Guindy', '', 'udprajansin@gmail.com', '919774857575', '50', '14-8-2013', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '',
  `nicename` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_n` (`username`),
  UNIQUE KEY `user_e` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `nicename`, `email`, `password`) VALUES
(1, 'saveetha', 'Saveeetha Admin', 'saveetha@sec.com', 'd033e22ae348aeb5660fc2140aec35850c4da997');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
