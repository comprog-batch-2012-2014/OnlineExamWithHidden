-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2014 at 01:01 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rodrigo_exam_web_app`
--
CREATE DATABASE IF NOT EXISTS `rodrigo_exam_web_app` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `rodrigo_exam_web_app`;

-- --------------------------------------------------------

--
-- Table structure for table `questionnaire`
--

CREATE TABLE IF NOT EXISTS `questionnaire` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `question_num` int(11) NOT NULL,
  `question` text NOT NULL,
  `choiceA` text NOT NULL,
  `choiceB` text NOT NULL,
  `choiceC` text NOT NULL,
  `choiceD` text NOT NULL,
  `correct_answer` char(1) NOT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `questionnaire`
--

INSERT INTO `questionnaire` (`question_id`, `question_num`, `question`, `choiceA`, `choiceB`, `choiceC`, `choiceD`, `correct_answer`) VALUES
(1, 1, 'What year Steve Job died?', '2000', '2001', '2012', '2011', 'd'),
(2, 2, 'What level Java included?', 'High Language', 'Medium Language', 'Low Language', 'All of the above', 'a'),
(3, 3, 'Do you think Java can build GUI?', 'Yes', 'No', 'Maybe', 'None of the above', 'a'),
(4, 4, 'What command do you type if you are going to log in?', 'mysql -u - p', 'mysql -uroot -p', 'mysql -u - password', 'mysql -uroot -password', 'b'),
(5, 5, 'In mysql, what command do you type if you are going to show all table?', 'show table', 'show tables', 'shows table', 'shows tables', 'b'),
(6, 6, 'What library in Java that can the user input?', 'Scanner', 'JOptionPane', 'import', 'public static', 'a'),
(7, 7, 'What is the sum of 1, 2, 3, ..., 10000?', '5000000', '500500005', '50005000', '55005500', 'c'),
(8, 8, 'Who is the father of Python?', 'Gibo Teodoro', 'Guido Teodoro', 'Guido van Rossum', 'Guido Ban Rostum', 'c'),
(9, 9, 'How many kilobyte in 3 megabyte?', '30000', '3000000', '300000', '3', 'b'),
(10, 10, 'In the following choices, What is a good password?', 'R0Dri60_G57UR5', '000111000', 'inday', 'All of the above', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_fname` varchar(15) NOT NULL,
  `user_mname` varchar(15) NOT NULL,
  `user_lname` varchar(15) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `user_pass` varchar(60) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_pass` (`user_pass`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_fname`, `user_mname`, `user_lname`, `user_email`, `user_pass`) VALUES
(1, 'Rodrigo III', 'Balmes', 'Galura', 'Rodrigo_Galura3rd@yahoo.com', '793e0543fc3dff5b46b6fdbe1a091840a1b5f207'),
(23, 'r', 'r', 'r', 'r_r@yahoo.com', 'afe369ed3ed0087195df5704734784800bc46a8c'),
(24, 'o', 'o', 'o', 'o_o@yahoo.com', '3701e6325eed2fc452f3d49fbd5f2c71f0bb4958');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
