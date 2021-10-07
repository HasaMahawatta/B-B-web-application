-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 05, 2017 at 03:09 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `b&b`
--
CREATE DATABASE IF NOT EXISTS `b&b` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `b&b`;

-- --------------------------------------------------------

--
-- Table structure for table `advertise`
--

CREATE TABLE IF NOT EXISTS `advertise` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `rent` varchar(100) NOT NULL,
  `contact` int(15) NOT NULL,
  `info` varchar(200) NOT NULL,
  `images` varchar(100) NOT NULL,
  `imgPath` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `advertise`
--

INSERT INTO `advertise` (`id`, `name`, `email`, `address`, `rent`, `contact`, `info`, `images`, `imgPath`) VALUES
(1, 'few', ' wefwwfe@gmail.com', 'fhghf', '465465', 4475, 'fgdgfd', '', ''),
(2, 'gwg', ' ghv@gmail.com', 'gfhfhg', '454654', 478787, 'ftdgffd', '', ''),
(3, 'Kanishka', ' cjkasda@fhabfa', 'maharaham', '3000', 112312323, 'adasdasdas', '', ''),
(4, 'kanishka', ' kanishka@gmail.com', 'Maharagama', '3000', 11234455, 'asdasda', '', ''),
(5, ' Kanishka', 'cjdasdasdas@gmail.com', 'JaEla', '250', 123333, 'WDFDSFSD', 'afour.jpg', 'uploads/afour.jpg'),
(6, ' Master', 'master@master.com', 'Jaffna', '2000000', 88787878, 'It sucks', 'cthree.jpg', 'uploads/cthree.jpg'),
(7, ' efef', 'fewf@gmsil.com', 'tttt', '20', 2563, 'ddfwgvhg', 'gthree.jpg', 'uploads/gthree.jpg'),
(8, ' sss', 'hhh@hmail.com', 'kandy', '2000', 12345689, '2 AC rooms\r\n4 non Ac rooms\r\nfree wifi', 'kone.jpg', 'uploads/kone.jpg'),
(9, ' gfdgd', 'hjh@gmai.com', 'mjjfh', '54656', 64454, 'ngcfgx', 'cfour.jpg', 'uploads/cfour.jpg'),
(10, ' dsad', 'uhh@gmail.com', 'gfgc', '667', 877, 'ddqwafqq', 'cfour.jpg', 'uploads/cfour.jpg'),
(11, ' Sunil', 'sunil@gmail.com', 'kandy', '2000', 112233665, '2 Ac rooms\r\n2 non Ac rooms are avilable ', 'ktwo.jpg', 'uploads/ktwo.jpg'),
(12, ' amal', 'amal@gmail.com', 'galle', '3000', 916598741, '4 rooms \r\nfree wifi', 'gone.jpg', 'uploads/gone.jpg'),
(13, ' nimal', 'nimal@gmail.com', 'galle', '1200', 912255889, '4 rooms are available', 'gfour.jpg', 'uploads/gfour.jpg'),
(14, ' sanath', 'sanath@gmail.com', 'Kandy', '2000', 1245789, 'pool and free wifi with 5 rooms', 'aone.jpg', 'uploads/aone.jpg'),
(15, ' thami', 'thamil@yahoo.com', 'Jaffna', '2000', 124578963, 'pleasent environment\r\ncool water\r\nac rooms', 'jthree.jpg', 'uploads/jthree.jpg'),
(16, ' selva', 'selva@gmail.com', 'jaffna', '2000', 1234567899, '4 ac rooms with pool', 'cone.jpg', 'uploads/cone.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `advertist`
--

CREATE TABLE IF NOT EXISTS `advertist` (
  `id` int(12) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `LodgeName` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `rent` int(20) NOT NULL,
  `contact` int(20) NOT NULL,
  `info` varchar(500) NOT NULL,
  `image` varchar(100) NOT NULL,
  `imgPath` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `Lodge` varchar(20) NOT NULL,
  `Comment` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `Lodge`, `Comment`) VALUES
(1, 'ddgfd', 'cfdsdtrd');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `address`, `email`, `phone`, `message`) VALUES
(1, 'Gandhaka', 'Ncacc', 'uggandhaka@gmail.com', '1245789633', 'gfhgfhgfhf jghgf ghgs hjhdg'),
(2, 'vcgfc', 'fgd', 'ugv@gmail.com', '125', 'fgf');

-- --------------------------------------------------------

--
-- Table structure for table `lodge`
--

CREATE TABLE IF NOT EXISTS `lodge` (
  `Rid` int(12) NOT NULL AUTO_INCREMENT,
  `id` int(12) NOT NULL,
  `Sdate` date NOT NULL,
  `Edate` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Rid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `lodgeimg`
--

CREATE TABLE IF NOT EXISTS `lodgeimg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` mediumtext NOT NULL,
  `Location` text NOT NULL,
  `Lname` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `lodgeimg`
--

INSERT INTO `lodgeimg` (`id`, `image`, `Location`, `Lname`) VALUES
(1, 'images\\kone.jpg', 'Peradeniya,Kandy', 'Kandy Villa'),
(2, 'images\\cone.jpg', 'Kolpity,colombo 3', 'Star Lodge'),
(3, 'images\\kthree.jpg', 'Asgiriya,kandy', 'Lake side Villa'),
(4, 'images\\ctwo.jpg', 'slave island,colombo 2', 'Island plus'),
(5, 'images\\gone.jpg', 'Galle', 'Sea side Lodge'),
(6, 'images\\gtwo.jpg', 'Galle', 'Sea shells Villa');

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE IF NOT EXISTS `rates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nameOfLodge` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `rate` float NOT NULL,
  `hits` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `rates`
--

INSERT INTO `rates` (`id`, `nameOfLodge`, `location`, `rate`, `hits`) VALUES
(1, 'Ja-ela Villa', 'Ja-ela', 0, 0),
(2, 'Colombo Villa', 'Colombo 3', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE IF NOT EXISTS `ratings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `php` int(11) NOT NULL,
  `asp` int(11) NOT NULL,
  `jsp` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `password`, `email`, `role`) VALUES
(1, 'see', '23', 'uggandhaka@gmail.com', 'Home Renter'),
(2, 'Lasith', '123', '123@1.com', 'Tourist'),
(3, 'see', '123', 'smdlasith@gmail.com', 'Home Renter'),
(4, 'ghfhgf312', '123', 'qwer@c', ''),
(5, 'Gandhak', '123', 'uggandhaka@gmail.com', 'Home Renter'),
(6, 'Indrajith', '123', 'hgh@gmail.com', 'Tourist'),
(7, 'kanishka', '1234', 'kanishka@gmail.com', 'Home Renter'),
(8, '', '', '', 'Home Renter'),
(9, '', '', '', 'Home Renter'),
(10, '', '', '', 'Home Renter'),
(11, '', '', '', 'Home Renter'),
(12, '', '', '', 'Home Renter'),
(13, '', '', '', ''),
(14, '', '', '', ''),
(15, '', '', '', ''),
(16, 'Ga', 'asd', 'uhg@gmail.com', 'Tourist'),
(17, 'ugi', 'dfdf', 'qqq@gmail.com', 'Home Renter'),
(18, '123', '123', 'hhhh', 'Tourist'),
(19, '', '', '', ''),
(20, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `Lid` int(12) NOT NULL,
  `Sdate` date NOT NULL,
  `Edate` date NOT NULL,
  `NOG` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

CREATE TABLE IF NOT EXISTS `reserve` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `Sdate` date NOT NULL,
  `Edate` date NOT NULL,
  `NOG` int(50) NOT NULL,
  `CHN` varchar(50) NOT NULL,
  `Snumber` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `reserve`
--

INSERT INTO `reserve` (`id`, `Sdate`, `Edate`, `NOG`, `CHN`, `Snumber`) VALUES
(1, '0000-00-00', '0000-00-00', 0, '', ''),
(2, '0000-00-00', '0000-00-00', 2, '', ''),
(3, '0000-00-00', '0000-00-00', 2, '', ''),
(4, '0000-00-00', '0000-00-00', 3, '', ''),
(5, '0000-00-00', '0000-00-00', 5, 'ses', '154'),
(6, '0000-00-00', '0000-00-00', 6, 'fdrtd', '457'),
(7, '0000-00-00', '0000-00-00', 5, 'hghv', '125'),
(8, '2017-07-04', '2017-07-05', 5, 'fdf', '125'),
(9, '2017-07-14', '2017-07-14', 5, 'gfgfc', '154'),
(10, '0000-00-00', '0000-00-00', 0, '', '123'),
(11, '2017-07-20', '0000-00-00', 0, '', '125');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirmpassword` varchar(100) NOT NULL,
  `imagepath` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
