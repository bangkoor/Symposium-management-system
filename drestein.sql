-- phpMyAdmin SQL Dump
-- version 4.0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 16, 2013 at 03:33 PM
-- Server version: 5.6.11-log
-- PHP Version: 5.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `drestein_reg`
--
CREATE DATABASE IF NOT EXISTS `drestein_reg` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `drestein_reg`;

-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `department_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `department_id` (`department_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `name`, `department_id`) VALUES
(1, 'SCREEN PLAY', 1),
(2, 'CODE MAKER', 1),
(3, 'MARSHALLING IDEAS', 1),
(4, 'WEB HUNT', 1),
(5, 'WORD VOYAGE', 1),
(6, 'MY KLICK', 1),
(7, 'JUST A MINUTE', 2),
(8, 'BIZ QUIZ', 2),
(9, 'MOVIE MANAGEMENT', 2),
(10, 'SMART INVESTORS', 2),
(11, 'BEST MANAGER', 2),
(12, 'SERVICE LAUNCH', 2),
(13, 'BRAIN FUZZ', 3),
(14, 'SKILLER', 3),
(15, 'THRUST', 3),
(16, 'TORSION', 3),
(17, 'PLETHORA', 3),
(18, 'BOMBOTSTIC', 3),
(19, 'HYDRO AVION', 4),
(20, 'THE MECHANIC', 4),
(21, 'ROBO RANGER', 4),
(22, 'GLIDER MANIA', 4),
(23, 'MOTO RENOVATE', 4),
(24, 'IC BURNOUT', 4),
(25, 'TEST DRIVE', 5),
(26, 'TOUCH ME NOT', 5),
(27, 'L BOARD', 5),
(28, 'OPEN LOOP CHOPPER', 5),
(29, 'KFC', 5),
(30, 'UNDERWORLD DRIVE', 6),
(31, 'PIRATE CITY', 6),
(32, 'HOW STUFF WORKS?', 6),
(33, 'ELECTRIC CIRCUIT DEBUGGING', 6),
(34, 'SMART CIRCUIT', 6),
(35, 'TRI TARMAC', 6),
(36, 'ALL ROUNDER', 7),
(37, 'MIND GRIND', 7),
(38, 'FREE STYLE CODER', 7),
(39, 'OUT OF BOX', 7),
(40, 'BRAIN BURSTER', 7),
(41, 'FACEBOOK BATTLE', 7),
(42, 'GAMING', 7),
(43, 'HECK', 8),
(44, 'PICOMANIA', 8),
(45, 'CIPHER SMASH', 8),
(46, 'DA VINCI', 8),
(47, 'CINE MADS', 8),
(48, 'LUDOS CODE', 8),
(49, 'T PLAY', 8);

-- --------------------------------------------------------

--
-- Table structure for table `event_participant`
--

CREATE TABLE IF NOT EXISTS `event_participant` (
  `pa_id` int(10) NOT NULL,
  `event_id` int(10) NOT NULL,
  KEY `pa_id` (`pa_id`),
  KEY `event_id` (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_participant`
--

INSERT INTO `event_participant` (`pa_id`, `event_id`) VALUES
(9, 4),
(9, 12),
(9, 5),
(9, 9),
(9, 38),
(10, 5),
(13, 8);

-- --------------------------------------------------------

--
-- Table structure for table `event_winner`
--

CREATE TABLE IF NOT EXISTS `event_winner` (
  `winner_id` int(10) NOT NULL,
  `event_id` int(10) NOT NULL,
  `prize` varchar(200) NOT NULL,
  KEY `winner_id` (`winner_id`),
  KEY `event_id` (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_winner`
--

INSERT INTO `event_winner` (`winner_id`, `event_id`, `prize`) VALUES
(9, 5, 'First Prize'),
(9, 5, 'First Prize'),
(9, 5, 'Second Prize'),
(9, 5, 'Second Prize'),
(10, 5, 'First Prize');

-- --------------------------------------------------------

--
-- Table structure for table `participant`
--

CREATE TABLE IF NOT EXISTS `participant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `department` varchar(200) NOT NULL,
  `college` text NOT NULL,
  `phone` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `amount` int(10) NOT NULL,
  `date` varchar(200) NOT NULL,
  `ip` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `participant`
--

INSERT INTO `participant` (`id`, `name`, `department`, `college`, `phone`, `email`, `amount`, `date`, `ip`) VALUES
(9, 'gana', 'PRODUCTION ENGINEERING', 'Bharathidasan Engineering College', '9884858702', 'trkrameshkumar@gmail.com', 0, '15-8-2013', '127.0.0.1'),
(10, 'ramesh', 'ELECTRONICS AND INSTRUMENT ENGG.', 'Bharathidasan Engineering College', '9884858702', 'trkrameshkumar@gmail.com', 0, '15-8-2013', '127.0.0.1'),
(11, 'asdfasdf', 'ELECTRONICS AND INSTRUMENT ENGG.', 'other', '9884858702', 'thisis@gmail.com', 0, '15-8-2013', '127.0.0.1'),
(12, 'asdfsadf', 'FASHION TECHNOLOGY', 'asdfasdf', '9884858702', 'trkrameshkumar@gmail.com', 0, '15-8-2013', '127.0.0.1'),
(13, 'chandru', 'INSTRUMENTATION AND CONTROL', 'Central Institute of Plastic Engineering and Technology', '9884858702', 'trkrameshkumar@gmail.com', 0, '15-8-2013', '127.0.0.1'),
(14, 'rameshkumar', 'MECHANICAL ENGINEERING', 'Maamallan Institute of Technology', '9884858702', 'trkrameshkumar@gmail.com', 50, '15-8-2013', '127.0.0.1'),
(15, 'ramesh', 'INSTRUMENTATION AND CONTROL', 'Saveetha Engineering College', '9884858702', 'trkrameshkumar@gmail.com', 0, '15-8-2013', '127.0.0.1'),
(16, 'asdfasdf', 'ELECTRONICS AND INSTRUMENT ENGG.', 'asdfasdf', '9884858702', 'trkrameshkumar@gmail.com', 50, '15-8-2013', '127.0.0.1'),
(17, 'chandru', 'FASHION TECHNOLOGY', 'D.M.I. College of Engineering', '9884858702', 'thisis@gmail.com', 50, '21-8-2013', '127.0.0.1'),
(18, 'gana', 'FASHION TECHNOLOGY', 'Central Institute of Plastic Engineering and Technology', '9884858702', 'trkrameshkumar@gmail.com', 50, '22-8-2013', '127.0.0.1'),
(19, 'asdfasdf', 'METALLURGICAL ENGINEERING', 'D.M.I. College of Engineering', '9884858702', 'trkrameshkumar@gmail.com', 50, '22-8-2013', '127.0.0.1'),
(20, 'chandru', 'INSTRUMENTATION AND CONTROL', 'C.Abdul Hakeem College of Engineering and Technology', '9884858702', 'trkrameshkumar@gmail.com', 50, '23-8-2013', '127.0.0.1'),
(21, 'thisisi', 'FASHION TECHNOLOGY', 'College of Engineering Guindy', '9884858702', 'trkramesh@gmail.com', 50, '15-8-2013', '127.0.0.1'),
(22, 'ramesh', 'MASTER OF COMPUTER APPLICATION', 'D.M.I. College of Engineering', '919774857575', 'thennarasu199@gmail.com', 50, '16-8-2013', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `saveetha_department`
--

CREATE TABLE IF NOT EXISTS `saveetha_department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `saveetha_department`
--

INSERT INTO `saveetha_department` (`id`, `name`) VALUES
(1, 'MCA'),
(2, 'MBA'),
(3, 'ECE'),
(4, 'MECH'),
(5, 'EI'),
(6, 'EEE'),
(7, 'IT'),
(8, 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `department_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `department_id` (`department_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `department_id`) VALUES
(2, 'secmca', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1),
(3, 'secmba', 'd033e22ae348aeb5660fc2140aec35850c4da997', 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_2` FOREIGN KEY (`department_id`) REFERENCES `saveetha_department` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `event_participant`
--
ALTER TABLE `event_participant`
  ADD CONSTRAINT `event_participant_ibfk_2` FOREIGN KEY (`pa_id`) REFERENCES `participant` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `event_participant_ibfk_3` FOREIGN KEY (`event_id`) REFERENCES `event` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `event_winner`
--
ALTER TABLE `event_winner`
  ADD CONSTRAINT `event_winner_ibfk_1` FOREIGN KEY (`winner_id`) REFERENCES `participant` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `event_winner_ibfk_2` FOREIGN KEY (`event_id`) REFERENCES `event` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_3` FOREIGN KEY (`department_id`) REFERENCES `saveetha_department` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
