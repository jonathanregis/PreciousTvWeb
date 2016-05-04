-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: May 03, 2016 at 02:26 PM
-- Server version: 5.5.45-cll-lve
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fnagyina_precioustv`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us_content`
--

CREATE TABLE IF NOT EXISTS `about_us_content` (
  `about_us_id` int(15) NOT NULL,
  `h2` varchar(255) NOT NULL,
  `h2_strong` varchar(255) NOT NULL,
  `p_content` varchar(255) NOT NULL,
  PRIMARY KEY (`about_us_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blog_article`
--

CREATE TABLE IF NOT EXISTS `blog_article` (
  `post_id` int(10) NOT NULL AUTO_INCREMENT,
  `post_title` varchar(200) NOT NULL,
  `post_content` varchar(200) NOT NULL,
  `post_img` varchar(200) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `coming_programs`
--

CREATE TABLE IF NOT EXISTS `coming_programs` (
  `programid` int(11) NOT NULL AUTO_INCREMENT,
  `program_title` varchar(200) NOT NULL,
  `program_content` varchar(200) NOT NULL,
  `program_time` varchar(200) NOT NULL,
  `program_img` varchar(200) NOT NULL,
  PRIMARY KEY (`programid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `coming_programs`
--

INSERT INTO `coming_programs` (`programid`, `program_title`, `program_content`, `program_time`, `program_img`) VALUES
(1, 'BREAKTHROUGH TIME', 'this is a live service every Tuesday morning with an emphasis on prayer for breakthrough.', '15 DEC 2015', 'breackthrough_2_20.png'),
(2, 'YUF X''PLOSION\r\n', 'a special program dedicated to the youth, between the ages of 15 and 35. Enjoy the music, the drama, motivational message, and teachings. \r\n', '15 DEC 2015', 'fder_1_50.jpg'),
(3, 'CHRISTIAN ENTERTAINMENT', 'among PTV''s movies you will find a wide range of themes and styles. We have some of the very classic Biblical tales, as well as more contemporary films ', '10 DEC 2016', 'portfolio2w.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `status_id` int(10) NOT NULL,
  `comment` text NOT NULL,
  `commenter` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `front`
--

CREATE TABLE IF NOT EXISTS `front` (
  `verseid` int(15) NOT NULL AUTO_INCREMENT,
  `daily_verse` varchar(500) NOT NULL,
  `chapter` varchar(200) NOT NULL,
  PRIMARY KEY (`verseid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `front`
--

INSERT INTO `front` (`verseid`, `daily_verse`, `chapter`) VALUES
(1, ' bonjour', '323'),
(2, ' bonjour', '323'),
(3, ' And ye shall serve the Lord your God, and he shall bless thy bread, and thy water; and I will take sickness away from the midst of thee.', 'Exodus 23:25');

-- --------------------------------------------------------

--
-- Table structure for table `introduction`
--

CREATE TABLE IF NOT EXISTS `introduction` (
  `introductionid` int(11) NOT NULL AUTO_INCREMENT,
  `introduction_title` varchar(200) NOT NULL,
  `introduction_content` varchar(200) NOT NULL,
  PRIMARY KEY (`introductionid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `introduction`
--

INSERT INTO `introduction` (`introductionid`, `introduction_title`, `introduction_content`) VALUES
(1, 'We are Precious Tv', 'Welcome to Precious Television! As you watch us, may you never be the same and expect a divine encounter.');

-- --------------------------------------------------------

--
-- Table structure for table `lyk`
--

CREATE TABLE IF NOT EXISTS `lyk` (
  `status_id` int(10) NOT NULL,
  `like` varchar(10) NOT NULL,
  `liker` varchar(100) NOT NULL,
  `l` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `addressofbirth` varchar(255) NOT NULL,
  `dateOfbirth` date NOT NULL,
  `country` varchar(255) NOT NULL,
  `adress1` varchar(255) NOT NULL,
  `adress2` varchar(255) NOT NULL,
  `telephoneNumber` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `titheCardNumber` varchar(255) NOT NULL,
  `DateOfFirstArrival` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `fullname`, `addressofbirth`, `dateOfbirth`, `country`, `adress1`, `adress2`, `telephoneNumber`, `profession`, `department`, `titheCardNumber`, `DateOfFirstArrival`) VALUES
(1, 'douniama elenga cedrick', 'brazzaville', '2016-01-08', 'congo', '13 rue dahomey', 'kaneshie', '0549534928', 'student', 'follow up', '2545R', '2016-01-08'),
(3, 'Elie bonsoir', 'brazzaville', '2016-01-08', 'congo', '13 rue dahomey', 'kaneshie', '0540655408', 'student', 'follow up', '2545R', '2016-01-08'),
(4, 'Doris Mssamba', 'pointe noire', '2016-01-08', 'congo', '13 rue dahomey', 'kaneshie', '0540655408', 'student', 'follow up', '2545R', '2016-01-08'),
(6, 'mahoungou christian', 'pointe noire', '0000-00-00', 'congo', '13 rue dahomey', 'kaneshie', '0540655345', 'student', 'choir', '2545R', '2016-01-08');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `menuid` int(11) NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(200) NOT NULL,
  `href` varchar(200) NOT NULL,
  `menu_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`menuid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menuid`, `menu_name`, `href`, `menu_date`) VALUES
(1, 'Home', 'index.php', '0000-00-00 00:00:00'),
(2, 'ABOUT US', 'about_us.php', '0000-00-00 00:00:00'),
(5, 'streaming now', 'streaming_now.php', '0000-00-00 00:00:00'),
(6, 'PRAYER & TESTIMONY', 'prayer&testimony.php', '0000-00-00 00:00:00'),
(9, 'programs', 'programs.php', '0000-00-00 00:00:00'),
(10, 'schedule', 'schedule.php', '0000-00-00 00:00:00'),
(11, 'contact us', 'contact_us.php', '2016-03-10 02:01:28');

-- --------------------------------------------------------

--
-- Table structure for table `sidebar_widget`
--

CREATE TABLE IF NOT EXISTS `sidebar_widget` (
  `sidebarid` int(15) NOT NULL AUTO_INCREMENT,
  `sidebar_url` varchar(300) NOT NULL,
  `uploading_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sidebarid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sidebar_widget`
--

INSERT INTO `sidebar_widget` (`sidebarid`, `sidebar_url`, `uploading_date`) VALUES
(1, 'https://www.facebook.com/precioustelevision.tv/videos/672890886104172/?theater', '2016-02-21 19:06:36'),
(2, 'https://www.facebook.com/precioustelevision.tv/videos/672890886104172/?theater', '2016-02-21 19:07:15');

-- --------------------------------------------------------

--
-- Table structure for table `slider_image`
--

CREATE TABLE IF NOT EXISTS `slider_image` (
  `imageid` int(15) NOT NULL AUTO_INCREMENT,
  `imagename` varchar(200) NOT NULL,
  `imagedate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `imagesize` varchar(200) NOT NULL,
  PRIMARY KEY (`imageid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `slider_image`
--

INSERT INTO `slider_image` (`imageid`, `imagename`, `imagedate`, `imagesize`) VALUES
(1, '2.jpg\r\n', '2016-02-15 18:55:52', '20kb'),
(2, 'slide-banner-03.jpg', '2016-02-15 18:55:52', '25kb'),
(3, 'slide-banner-01.jpg', '2016-02-15 20:08:08', '20');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE IF NOT EXISTS `subscribers` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`) VALUES
(5, ''),
(4, 'jonathan@roninafrica.com'),
(6, 'saintavel@yahoo.fr'),
(7, 'jonatan@live.com'),
(8, 'avell@jesus.com'),
(9, 'I LOVE PRAYING FOR MY LIFE'),
(10, 'je pleure');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `active`) VALUES
(1, 'avell', 'saintavel@yahoo.fr', '1081991', 0),
(3, 'avells', 'saintavel@yahoo.fr', 'realiser09', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
