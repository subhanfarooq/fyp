-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 01, 2015 at 01:22 PM
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=86 ;

--
-- Dumping data for table `complaint_types`
--

INSERT INTO `complaint_types` (`id`, `reg_no`, `complaint_type`, `department`, `date`, `write_compaint`) VALUES
(73, '11pwbcs0258', 'Academic', 'computer', '2015-04-23', 'i am fawad student of csit department'),
(1, '11pwbcs0202', 'Academic', 'CSIT', '2015-05-24', 'sdasda'),
(79, '11pwbcs0600', 'Academic', 'computerscience', '2015-05-25', '<p>asdczxczx</p>'),
(81, '11pwbcs0202', 'Academic', 'CsIT', '2015-06-21', '<p>i am subhan of csit please i have some issue you can view my complaint</p>'),
(82, '11pwbcs0229', 'Academic', 'csit', '2015-06-22', '<p>i am mahad</p>'),
(83, '11pwbcs0229', 'Maintenance', 'csit', '2015-06-22', '<p>their is problem in the department</p>'),
(84, '11pwbcs0259', 'Maintenance', 'csit', '2015-06-22', '<p>mainta</p>'),
(85, '0123', 'Academic', 'army', '2015-06-25', '<p>i am shaff please reply</p>');

-- --------------------------------------------------------

--
-- Table structure for table `copyright`
--

CREATE TABLE IF NOT EXISTS `copyright` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `copyright_title` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `copyright`
--

INSERT INTO `copyright` (`id`, `copyright_title`) VALUES
(2, '&copy; Junaid & Subhan 2014-15');

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
  `std_id` int(100) NOT NULL,
  `reg_no` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `reply` varchar(3000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `hod_forwardreply_by_compmang`
--

INSERT INTO `hod_forwardreply_by_compmang` (`id`, `std_id`, `reg_no`, `date`, `reply`) VALUES
(10, 73, '11pwbcs0258', '2015-04-15', 'its my first mail by fawad masood(complaint manager) forward');

-- --------------------------------------------------------

--
-- Table structure for table `hod_forwardreply_to_compmang`
--

CREATE TABLE IF NOT EXISTS `hod_forwardreply_to_compmang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `com_mang_id` int(100) NOT NULL,
  `std_id` int(100) NOT NULL,
  `reg_no` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `reply` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `hod_forwardreply_to_compmang`
--

INSERT INTO `hod_forwardreply_to_compmang` (`id`, `com_mang_id`, `std_id`, `reg_no`, `date`, `reply`) VALUES
(6, 10, 73, '11pwbcs0258', '2015-05-07', 'wawo');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `hod_reply`
--

INSERT INTO `hod_reply` (`id`, `complaint_id`, `reg_no`, `date`, `reply`) VALUES
(1, 9, '11pwbcs0600', '2015-05-25', 'i am head of department');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `hod_studentmail`
--

INSERT INTO `hod_studentmail` (`id`, `reg_no`, `complaint_type`, `department`, `date`, `write_compaint`) VALUES
(8, '11pwbcs0258', 'Academic', 'csit', '2015-04-26', 'i am student of CSIT can you help me the complaint manager doesnt give me answer '),
(9, '11pwbcs0600', 'Academic', 'csit', '2015-05-25', '<p>i am bilal&nbsp;</p>');

-- --------------------------------------------------------

--
-- Table structure for table `home_page`
--

CREATE TABLE IF NOT EXISTS `home_page` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `title_page` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `home_page`
--

INSERT INTO `home_page` (`id`, `title`, `title_page`) VALUES
(5, 'Home', 'index.php'),
(6, 'Faculty', 'Faculty.php'),
(7, 'SiteCredits', 'site.php'),
(11, 'AboutUs	', 'us.php');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`id`, `complaint_id`, `date`, `reply`) VALUES
(35, 73, '2015-04-22', 'how are you i am your complaint manager'),
(27, 18, '2015-03-27', 'sadasdasd'),
(36, 81, '2015-06-22', '<p>i have seen your mail</p>'),
(37, 84, '2015-06-22', '<p>i have seen you msg</p>'),
(38, 85, '2015-06-25', '<p>hi i have seen your msg</p>'),
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=102 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `reg_no`, `pass_word`, `email_adress`, `date`, `contact`) VALUES
(13, 'mahad', '11pwbcs0229', '3vuyrq/XGPX7pen', 'mahad@gmail.com', '2015-02-12', '432423423423'),
(11, 'ahmed', '11pwbcs0241', '1234', 'ahmed@gmail.com', '2015-02-17', '0432423432'),
(12, 'zaheer', '11pwbcs0247', '12345', 'zaheer@gmail.com', '2015-02-26', '1234343242'),
(26, 'bakth', '11pwbcs0260', '2yyeha@IKKH7kgu', 'bakth@mail.com', '2015-02-16', '02342323'),
(27, 'sarwan', '11pwbcs0240', '3qdoxl%UXDB9cga', 'subhan@gmail.com', '2015-02-19', '8974283497'),
(99, 'shaaf', '0123', '1higqj~NUGC6ldr', 'shaaf.khattak786@gmail.com', '2015-06-25', '0123123'),
(76, 'junaid khattak', '11pwbcs0230', '4hxlvx>JRCH8ycz', 'cmsuetpeshawar@gmail.com', '2015-03-19', '123123'),
(44, 'subhan', '11pwbcs0202', '4qxtzo|MLAE7ufj', 'subhanfarooq3@gmail.com', '2015-03-17', '23123'),
(80, 'bilal', '11pwbcs0600', '4yepyn,ARCY9gbz', 'bilalmuhammad955@gmail.com', '2015-05-24', '03420802472'),
(82, 'fawad', '11pwbcs0258', '1245', 'fawadkttk@gmail.com', '2015-05-25', '03127070070'),
(64, 'junaid', '11pwbcs0259', '2jmkwi>WPPD5lwt', 'roidarsafi@gmail.com', '2015-03-18', '5465');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
