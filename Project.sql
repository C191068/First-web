-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 01, 2021 at 01:31 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `Project`
--

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `mobile` varchar(50) default NULL,
  `gender` varchar(50) default NULL,
  `members` varchar(50) default NULL,
  `dateofBirth` varchar(50) default NULL,
  `picture` blob,
  `email` varchar(50) default NULL,
  `password` varchar(50) default NULL,
  `address` varchar(50) default NULL,
  `postalcode` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`sl`, `customername`, `mobile`, `gender`, `members`, `dateofBirth`, `picture`, `email`, `password`, `address`, `postalcode`) VALUES
(11, '', '', '', '', '', '', '', '', '', ''),
(2, 'Salman Shah', '0155566', 'MALE', '3', '10/13/1971', 0x5761746572206c696c6965732e6a7067, 'ss@gmail.com', '', NULL, NULL),
(3, 'Salman Shah', '0155566', 'MALE', '3', '10/13/1971', 0x5761746572206c696c6965732e6a7067, 'ss@gmail.com', '', '', ''),
(4, 'Salman Shah', '01699888', 'MALE', '4', '01/13/1971', 0x5761746572206c696c6965732e6a7067, 'sa@gmail.com', '', 'Sylhet,Bangladesh', '2156'),
(5, 'Salman Shah', '01699888', 'MALE', '4', '01/13/1971', 0x5761746572206c696c6965732e6a7067, 'sa@gmail.com', '', 'Sylhet,Bangladesh', '2156'),
(6, 'Jafar Iqbal', '015566', 'MALE', '4', '02/22/1940', 0x57696e7465722e6a7067, 'jf@gmail.com', '', 'Dhaka,Bangladesh', '5566'),
(7, 'Bruce Lee', '015566', 'MALE', '5', '10/02/1962', 0x426c75652068696c6c732e6a7067, 'ar@gmail.com', '', 'Chinatown<USA', '44555'),
(8, 'Bruce Lee', '015566', 'MALE', '5', '10/02/1962', 0x426c75652068696c6c732e6a7067, 'ar@gmail.com', '', 'Chinatown<USA', '44555'),
(9, 'Aziz', '01566', 'MALE', '7', '10/18/2000', 0x5761746572206c696c6965732e6a7067, 'ad@gmail.com', '', 'Chattogram,Bangladesh', '4566'),
(10, '', '', '', '', '', '', '', '', '', '');
