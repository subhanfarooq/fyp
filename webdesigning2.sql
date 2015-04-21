-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 21, 2015 at 12:47 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webdesigning2`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL,
  `pass_word` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `user_name`, `pass_word`) VALUES
(1, 'junaid', '123');

-- --------------------------------------------------------

--
-- Table structure for table `complaint_manager`
--

CREATE TABLE IF NOT EXISTS `complaint_manager` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL,
  `pass_word` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `complaint_manager`
--

INSERT INTO `complaint_manager` (`id`, `user_name`, `pass_word`) VALUES
(1, 'subhan', '123');

-- --------------------------------------------------------

--
-- Table structure for table `complaint_types`
--

CREATE TABLE IF NOT EXISTS `complaint_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reg_no` varchar(30) NOT NULL,
  `complaint_type` varchar(20) NOT NULL,
  `department` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `write_compaint` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=72 ;

--
-- Dumping data for table `complaint_types`
--

INSERT INTO `complaint_types` (`id`, `reg_no`, `complaint_type`, `department`, `date`, `write_compaint`) VALUES
(67, '11pwbcs0202', 'Maintanance', 'CSIT', '2015-04-18', 'i am student of CSIT can you help me the in the complaint please give me answer'),
(18, '11pwbcs0258', 'Academic', 'CSIT', '2015-03-17', 'consectetur adipiscing elit. Proin blandit nunc sed sem dictum id feugiat quam blandit. Donec nec s sem sed arcu interdum commodo ac ac diam. Donec consequat semper rutrum. Vestibulum et mauris elit. Vestibulum mauris lacus, ultricies');

-- --------------------------------------------------------

--
-- Table structure for table `head_of_department`
--

CREATE TABLE IF NOT EXISTS `head_of_department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL,
  `pass_word` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `head_of_department`
--

INSERT INTO `head_of_department` (`id`, `user_name`, `pass_word`) VALUES
(1, 'kamranghani', 123);

-- --------------------------------------------------------

--
-- Table structure for table `hod_forwardreply_by_compmang`
--

CREATE TABLE IF NOT EXISTS `hod_forwardreply_by_compmang` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `complaint_id` int(100) NOT NULL,
  `reg_no` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `reply` varchar(3000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `hod_forwardreply_by_compmang`
--

INSERT INTO `hod_forwardreply_by_compmang` (`id`, `complaint_id`, `reg_no`, `date`, `reply`) VALUES
(3, 3, '11pwbcs0258', '2015-04-20', 'what'),
(2, 18, '11pwbcs0258', '2015-04-20', 'consectetur adipiscing elit. Proin blandit nunc sed sem dictum id feugiat quam blandit. Donec nec s sem sed arcu interdum commodo ac ac diam. Donec consequat semper rutrum. Vestibulum et mauris elit. Vestibulum mauris lacus, ultricies\r\n\r\n\r\n\r\nThis msg is forward by fawad he is want to do action on it give me your openion'),
(4, 67, '11pwbcs0202', '2015-04-20', 'i am student of CSIT can you help me the in the complaint please give me answer');

-- --------------------------------------------------------

--
-- Table structure for table `hod_reply`
--

CREATE TABLE IF NOT EXISTS `hod_reply` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `complaint_id` int(30) NOT NULL,
  `reg_no` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `reply` varchar(3000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `hod_reply`
--

INSERT INTO `hod_reply` (`id`, `complaint_id`, `reg_no`, `date`, `reply`) VALUES
(6, 19, '11pwbcs0240', '2015-04-14', 'hahahahha'),
(11, 6, '11pwbcs0258', '2015-04-19', 'me junaid your new hod'),
(15, 6, '11pwbcs0258', '2015-04-15', 'dasdasdzxczxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx');

-- --------------------------------------------------------

--
-- Table structure for table `hod_studentmail`
--

CREATE TABLE IF NOT EXISTS `hod_studentmail` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `reg_no` varchar(100) NOT NULL,
  `complaint_type` varchar(50) NOT NULL,
  `department` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `write_compaint` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `hod_studentmail`
--

INSERT INTO `hod_studentmail` (`id`, `reg_no`, `complaint_type`, `department`, `date`, `write_compaint`) VALUES
(3, '11pwbcs0229', 'Academic', 'csit', '2015-04-15', 'i am junaid we want you to give us the time table of the department'),
(6, '11pwbcs0258', 'Academic', 'csit', '2015-04-16', 'i am student of CSIT can you help me the complaint manager doesnt give me answer');

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE IF NOT EXISTS `reply` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `complaint_id` int(10) NOT NULL,
  `date` date NOT NULL,
  `reply` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`id`, `complaint_id`, `date`, `reply`) VALUES
(27, 18, '2015-03-27', 'sadasdasd'),
(31, 67, '2015-04-18', 'hi subhan i am forwarding your mail to higher authority'),
(28, 18, '2015-03-27', '<p>me junaid</p>'),
(29, 18, '2015-04-15', '<p>hello 11pwbcs0258</p>'),
(30, 9, '2015-04-18', 'i am processing your request and wait for my another mail ');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `reg_no` varchar(20) NOT NULL,
  `pass_word` varchar(100) NOT NULL,
  `email_adress` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `contact` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=79 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `reg_no`, `pass_word`, `email_adress`, `date`, `contact`) VALUES
(6, 'fawad', '11pwbcs0258', '1234', 'fawadkttk@gmail.com', '2015-02-18', '3423424'),
(13, 'mahad', '11pwbcs0229', '3vuyrq/XGPX7pen', 'mahad@gmail.com', '2015-02-12', '432423423423'),
(11, 'ahmed', '11pwbcs0241', '1234', 'ahmed@gmail.com', '2015-02-17', '0432423432'),
(12, 'zaheer', '11pwbcs0247', '12345', 'zaheer@gmail.com', '2015-02-26', '1234343242'),
(9, 'shakir', '11pwbcs0253', '123', 'shakir@123gmail.com', '2015-02-25', '23123123'),
(26, 'bakth', '11pwbcs0260', '2yyeha@IKKH7kgu', 'bakth@mail.com', '2015-02-16', '02342323'),
(27, 'sarwan', '11pwbcs0240', '3qdoxl%UXDB9cga', 'subhan@gmail.com', '2015-02-19', '8974283497'),
(28, 'farooq', '11pwbcs0228', '1njuvt/JVCF9wkq', 'farooq@gmail.com', '2015-02-27', '4234234'),
(76, 'junaid khattak', '11pwbcs0230', '4hxlvx>JRCH8ycz', 'cmsuetpeshawar@gmail.com', '2015-03-19', '123123'),
(44, 'subhan', '11pwbcs0202', '4qxtzo|MLAE7ufj', 'subhanfarooq3@gmail.com', '2015-03-17', '23123'),
(64, 'junaid', '11pwbcs0259', '2jmkwi>WPPD5lwt', 'roidarsafi@gmail.com', '2015-03-18', '5465');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
