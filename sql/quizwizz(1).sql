-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 14, 2015 at 10:08 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quizwizz`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(65) NOT NULL DEFAULT '',
  `password` varchar(65) NOT NULL DEFAULT '',
  `phone` int(13) NOT NULL,
  `member_type` char(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `password`, `phone`, `member_type`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 0, 'admin'),
(2, 'akash', '1543b3607f7411cee100c509e723ed23', 0, 'member'),
(3, 'sameer', '6512bd43d9caa6e02c990b0a82652dca', 1111111111, 'member');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `q_id` int(20) NOT NULL AUTO_INCREMENT,
  `question` varchar(50) NOT NULL,
  `option1` varchar(100) NOT NULL,
  `option2` varchar(100) NOT NULL,
  `option3` varchar(100) NOT NULL,
  `option4` varchar(100) NOT NULL,
  `cor_answer` varchar(20) NOT NULL,
  PRIMARY KEY (`q_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`q_id`, `question`, `option1`, `option2`, `option3`, `option4`, `cor_answer`) VALUES
(3, 'Who is Prime Minister of the United Kingdom?', 'David Cameron', 'Gordon Brown', 'Winston Churchill', 'Tony Blair', '0'),
(4, 'Name the king who failed to keep an eye on things ', 'David Cameron', ' Harold', 'Winston Churchill', 'Tony Blair', '1'),
(5, 'In which sport would you use a chucker ?', 'Ice hockey', 'Billiards', 'Polo', 'Curling', '2'),
(6, 'Who developed PHP?', 'Albert Einstein', 'Rasmus Lardorf', 'Sikandar', 'Sachin Tendulkar', '1'),
(7, 'What is www?', 'World Wide Web', 'World Wide Wonder', 'World War Wonder', 'Wonder War World', '0');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_questions_played`
--

CREATE TABLE IF NOT EXISTS `quiz_questions_played` (
  `played_id` int(100) NOT NULL AUTO_INCREMENT,
  `user_id` int(100) NOT NULL,
  `question_id` int(100) NOT NULL,
  `doplay` varchar(50) NOT NULL,
  PRIMARY KEY (`played_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `quiz_questions_played`
--

INSERT INTO `quiz_questions_played` (`played_id`, `user_id`, `question_id`, `doplay`) VALUES
(10, 3, 3, '14-01-2015'),
(11, 3, 3, '14-01-2015'),
(12, 3, 3, '14-01-2015'),
(13, 3, 3, '14-01-2015'),
(14, 3, 3, '14-01-2015'),
(15, 3, 3, '14-01-2015'),
(16, 3, 3, '14-01-2015'),
(17, 3, 3, '14-01-2015'),
(18, 3, 3, '14-01-2015'),
(19, 3, 3, '14-01-2015'),
(20, 3, 3, '14-01-2015'),
(21, 3, 5, '14-01-2015'),
(22, 3, 4, '14-01-2015');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
