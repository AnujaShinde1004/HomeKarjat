-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 01, 2017 at 06:05 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `karjat`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `uname` varchar(80) NOT NULL,
  `pswd` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uname`, `pswd`) VALUES
('Anuja', 'anujas');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(90) NOT NULL,
  `email` varchar(90) NOT NULL,
  `message` varchar(90) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `message`) VALUES
(9, 'anuja', 'gsh@gmail.com', 'nice'),
(10, 'Pragati', 'pra@gmail.com', 'NICE TO'),
(11, 'ashwini zambare', 'ashwinizambare@gmail.com', 'this project is motivated to all other student....'),
(12, 'chiu', 'kirtiraut1709@gmail.com', 'very nice'),
(13, 'anuja', 'anujashinde@gmail.com', 'nice');

-- --------------------------------------------------------

--
-- Table structure for table `population`
--

CREATE TABLE IF NOT EXISTS `population` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `year` varchar(90) NOT NULL,
  `male` varchar(90) NOT NULL,
  `female` varchar(90) NOT NULL,
  `population` varchar(90) NOT NULL,
  `percentage` varchar(90) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `population`
--

INSERT INTO `population` (`rid`, `year`, `male`, `female`, `population`, `percentage`) VALUES
(8, '2001', '106347(51.73)', '99238(48.27)', '205585', '51.73+48.27=100'),
(9, '2011', '6048', '5611', '11659', '99');

-- --------------------------------------------------------

--
-- Table structure for table `rain`
--

CREATE TABLE IF NOT EXISTS `rain` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `Year` varchar(90) NOT NULL,
  `Rainfall` varchar(90) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `rain`
--

INSERT INTO `rain` (`rid`, `Year`, `Rainfall`) VALUES
(3, '1991', '319'),
(4, '1992', '352'),
(5, '1993', '651'),
(6, '1994', '493'),
(7, '1995', '498'),
(8, '1996', '514'),
(9, '1997', '328'),
(10, '1998', '920'),
(11, '1999', '405'),
(12, '2000', '400'),
(13, '2001', '495'),
(14, '2002', '436'),
(15, '2003', '281'),
(16, '2004', '565'),
(17, '2005', '606'),
(18, '2006', '746'),
(19, '2007', '426'),
(20, '2008', '413'),
(21, '2009', '415');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(30) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `address` varchar(40) NOT NULL,
  `city` varchar(20) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `login`, `pass`, `username`, `address`, `city`, `phone`, `email`) VALUES
(1, 'aaaa', 'aaaa', 'aaaa', 'aaaa', 'aaaa', 0, 'anu@gmail.com'),
(2, 'anu', 'anu', 'anu', 'chapadgaon', 'karjat', 2147483647, 'anujashinde@gmail.co'),
(3, 'anu', 'anu', 'anu', 'chapadgaon', 'karjat', 2147483647, 'anujashinde@gmail.co'),
(4, 'tybcs', 'aaaa', 'aaaa', 'aaaa', 'a', 0, 'anujashinde@gmail.co'),
(5, '11', '1234', 'anu', 'chapadgoan', 'karjat', 2147483647, 'anu56@gmail.com'),
(6, '11', '1234', 'anu', 'chapadgoan', 'karjat', 2147483647, 'anu56@gmail.com'),
(7, '11', '1234', 'anu', 'chapadgoan', 'karjat', 2147483647, 'anu56@gmail.com'),
(8, 'anuja', 'sdf', 'anu', 'chapadgoan', 'karjat', 2147483647, 'anu56@gmail.com'),
(9, '12', '1234', 'pragu', 'dighi', 'karjat', 2147483647, 'pragatinimbalkar@gma'),
(10, 'bbbb', 'bade', 'dipali', 'umarad', 'karmala', 2147483647, 'dipalibade@gmail.com'),
(11, 'ratan', '123', 'rode', 'jawala', 'nagar', 2147483647, 'pavanrode1996@gmail.'),
(12, 'aaaa', '111111', 'anuja', 'chapadgaon', 'karjat', 2147483647, 'anu@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `village`
--

CREATE TABLE IF NOT EXISTS `village` (
  `	rid` int(20) NOT NULL AUTO_INCREMENT,
  `vname` varchar(150) NOT NULL,
  `pop` int(30) NOT NULL,
  PRIMARY KEY (`	rid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=121 ;

--
-- Dumping data for table `village`
--

INSERT INTO `village` (`	rid`, `vname`, `pop`) VALUES
(1, '	Akhoni	', 1463),
(2, '	Alsunde', 3743),
(3, '	Ambijalgaon', 2287),
(4, '	Anandwadi', 795),
(5, '	Autewadi', 908),
(6, '	Babhulgaon Dumala', 805),
(7, '	Babhulgaon khalsa	', 2199),
(8, '	Bahirobawadi', 2220),
(9, '	Bajrangwadi', 1084),
(10, '	Balwandi', 799),
(11, '	Baradgaon Dagadi', 1617),
(12, '	Baradgaon Sudrik', 3539),
(13, '	Bargewadi', 663),
(14, '	Belgaon', 1738),
(15, '	Benwadi', 2571),
(16, '	Berdi', 1114),
(17, '	Bhambore', 4249),
(18, '	Bhandewadi', 3453),
(19, '	Bhose', 1787),
(20, '	Bitkewadi', 1465),
(21, '	Chakhalewadi', 838),
(22, 'Chande Bk.', 1747),
(23, 'Chande Kh.', 744),
(24, 'Chapadgaon', 3705),
(25, 'Chilvadi', 3634),
(26, 'Chincholi kaldat', 2060),
(27, '	Chincholi Ramjan', 1231),
(28, 'Deshmukhwadi', 1988),
(29, 'Deulwadi', 862),
(30, 'Dhalwadi', 1374),
(31, '	Dhandewadi', 1022),
(32, 'Dighi', 1016),
(33, 'Diksal', 1558),
(34, 'Dombalwadi', 905),
(35, 'Dudhodi', 1489),
(36, '	Durgaon', 3708),
(37, 'Ganeshwadi	', 2479),
(38, 'Gaykarwadi	', 881),
(39, '	Ghumari	', 1816),
(40, '	Gondardi	', 390),
(41, '	Goykarwadi	', 427),
(42, '	Gurav pimpri	', 2595),
(43, '	Handalwadi	', 882),
(44, '	Hingangaon	', 590),
(45, '	Holewadi	', 733),
(46, '	Jalalpur	', 3869),
(47, 'Jalgaon', 2108),
(48, '	Jalkewadi	', 1172),
(49, 'Jogeshwarwadi', 1500),
(50, 'Kalyachiwadi	', 736),
(51, '	Kangudwadi	', 1637),
(52, '	Kaprewadi	', 2139),
(53, '	Karbhanwadi', 1381),
(54, '	Karpadi	', 2165),
(55, '	Kaudane', 1468),
(56, 'Khandale	', 299),
(57, '	Khandavi	', 2416),
(58, '	Khatgaon', 1074),
(59, '	Khed	 	', 4011),
(60, '	Khurangewadi		', 873),
(61, '	Kokangaon', 1835),
(62, '	Kolvadi	', 1585),
(63, '	Kombhali	', 2712),
(64, '	Kopardi		', 2112),
(65, '	Koregaon	', 5483),
(66, '	Kuldharan	', 4357),
(67, '	Kumbhefal	', 593),
(68, '	Lonimasadpur		', 1457),
(69, '	Mahi	', 1673),
(70, '	Malewadi	', 411),
(71, 'Malthan	', 1958),
(72, '	Mandali	', 1307),
(73, '	Manewadi	', 518),
(74, '	Mhalangi	', 1219),
(75, '	Mirajgaon	', 11934),
(76, '	Mulewadi		', 1331),
(77, '	Nagalwadi	', 1925),
(78, '	Nagamthan	', 381),
(79, '	Nagapur		', 933),
(80, '	Nandgaon', 1528),
(81, '	Nawsarwadi	', 1451),
(82, '	Netakewadi	', 935),
(83, '	Nimbe	', 763),
(84, '	Nimbodi', 1065),
(85, '	Nimgaon daku	', 2673),
(86, 'Nimgaon Gangarda	', 3454),
(87, 'Paritwadi	', 2591),
(88, '	Pategaon	', 2783),
(89, '	Patewadi	', 2482),
(90, '	Patharwadi	', 578),
(91, '	Pimpalwadi	', 2870),
(92, '	Pimpalwadi	', 2870),
(93, 'Rakshaswadi Kh.	', 1178),
(94, 'Rashin	', 12596),
(95, '	Ratanjan	', 1002),
(96, '	Raukalewadi	', 956),
(97, '	Ravalgaon', 2360),
(98, '	Rehekuri', 1679),
(99, '	Ruigavhan	', 1357),
(100, 'Shegud	', 788),
(101, '	Shimpore	', 1479),
(102, '	Shinde	', 3579),
(103, 'Siddhatek', 1312),
(104, '	Sitpur	', 1180),
(105, '	Sonalwadi', 1918),
(106, '	Supe', 672),
(107, 'Supekarwadi	', 1016),
(108, 'Taju	', 1531),
(109, 'Takli Khandeshwari	', 2795),
(110, 'Talwadi	', 743),
(111, '	Taradgaon	', 1162),
(112, 'Thergaon	', 2673),
(113, 'Therwadi	', 2236),
(114, 'Thetewadi	', 713),
(115, '	Tikhi	', 892),
(116, '	Torkadwadi', 575),
(117, 'Wadgaon Tanpure	', 1736),
(118, 'Walvad	', 1069),
(119, 'Waysewadi	', 1230),
(120, 'Yeswadi	', 868);
