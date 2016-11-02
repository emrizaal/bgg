-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 02, 2016 at 03:29 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bgg`
--

-- --------------------------------------------------------

--
-- Table structure for table `accolades`
--

CREATE TABLE IF NOT EXISTS `accolades` (
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accolades`
--

INSERT INTO `accolades` (`content`) VALUES
('<h1><img style="display: block; margin-left: auto; margin-right: auto;" src="../admin_assets/filemanager/img/5.jpg?1478041598603" alt="5" /></h1>\r\n<p>&nbsp;</p>\r\n<p style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p style="text-align: center;">&nbsp;</p>\r\n<h1><img style="display: block; margin-left: auto; margin-right: auto;" src="../admin_assets/filemanager/img/3.jpg?1478043267922" alt="3" /></h1>\r\n<p><br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `id_album` int(11) NOT NULL AUTO_INCREMENT,
  `nama_album` varchar(255) NOT NULL,
  PRIMARY KEY (`id_album`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id_berita` int(11) NOT NULL AUTO_INCREMENT,
  `judul_berita` varchar(255) NOT NULL,
  `isi_berita` text NOT NULL,
  `tanggal_berita` date NOT NULL,
  `active` tinyint(1) NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `isi_berita`, `tanggal_berita`, `active`, `image`) VALUES
(1, 'Cihuy', '<p>asasadddddddddddd</p>\r\n<p>adada</p>\r\n<p>daad</p>', '2016-10-28', 0, '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `id_booking` int(11) NOT NULL AUTO_INCREMENT,
  `rate` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`id_booking`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `competition`
--

CREATE TABLE IF NOT EXISTS `competition` (
  `id_competition` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `url` text NOT NULL,
  PRIMARY KEY (`id_competition`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `course_condition`
--

CREATE TABLE IF NOT EXISTS `course_condition` (
  `id_course_condition` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `weather` text NOT NULL,
  `temp` text NOT NULL,
  `rainfall` text NOT NULL,
  `course` varchar(255) NOT NULL,
  PRIMARY KEY (`id_course_condition`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `csr`
--

CREATE TABLE IF NOT EXISTS `csr` (
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `csr`
--

INSERT INTO `csr` (`content`) VALUES
('<p>loreeeeeeeeeeeeeeem a</p>');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE IF NOT EXISTS `facilities` (
  `id_facilities` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id_facilities`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id_facilities`, `name`, `content`) VALUES
(1, 'Restaurant', '<p>ini restaurant</p><p><img class="fr-dib fr-draggable" src="https://i.froala.com/download/01b410704e84db32734d6bfda906de4777958999.jpg?1477832148" style="width: 300px;"></p><p>adada dad as</p>'),
(2, 'Male & Female Locker Room', '<p style="text-align: center;">aadad</p>'),
(3, 'Buggy', '<p>buggy</p>'),
(4, 'Driving Range', '<p>dr</p>'),
(5, 'Proshop', '<p>P</p>'),
(6, 'Gym', '<p>G</p>');

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE IF NOT EXISTS `gambar` (
  `id_gambar` int(11) NOT NULL AUTO_INCREMENT,
  `url` text NOT NULL,
  PRIMARY KEY (`id_gambar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`content`) VALUES
('<p>yihi history</p>\r\n<p>asda</p>\r\n<p>ada kjdsakdnhakj dsad</p>');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id_member` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `pin` int(6) NOT NULL,
  PRIMARY KEY (`id_member`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `username`, `password`, `pin`) VALUES
(123456789, 'piko', '30f01545a850e20b5c5cedbc61e943fe', 111111);

-- --------------------------------------------------------

--
-- Table structure for table `order_merit`
--

CREATE TABLE IF NOT EXISTS `order_merit` (
  `id_event` int(11) NOT NULL AUTO_INCREMENT,
  `nama_event` varchar(255) NOT NULL,
  `url` text NOT NULL,
  PRIMARY KEY (`id_event`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `participant`
--

CREATE TABLE IF NOT EXISTS `participant` (
  `id_participant` int(11) NOT NULL AUTO_INCREMENT,
  `rank` varchar(255) NOT NULL,
  `mshp_no` varchar(255) NOT NULL,
  `nama_participant` varchar(255) NOT NULL,
  `handicap` varchar(255) NOT NULL,
  `points` varchar(255) NOT NULL,
  PRIMARY KEY (`id_participant`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE IF NOT EXISTS `rates` (
  `id_rates` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` varchar(11) NOT NULL,
  PRIMARY KEY (`id_rates`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `rates`
--

INSERT INTO `rates` (`id_rates`, `name`, `price`) VALUES
(1, '[Green fee Weekday] Morning', '500K'),
(2, '[Green fee Weekday] Afternoon', '300K'),
(3, '[Green fee Weekend] Saturday Morning', '8000K'),
(4, '[Green fee Weekend] Saturday Afternoon', '650K'),
(5, '[Green fee Weekend] Sunday Morning', '10K'),
(6, '[Green fee Weekend] Sunday Afternoon', '980K'),
(7, 'Buggy', '400K'),
(8, 'Caddy', '30K');

-- --------------------------------------------------------

--
-- Table structure for table `resort_facilities`
--

CREATE TABLE IF NOT EXISTS `resort_facilities` (
  `id_resort_facilities` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id_resort_facilities`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `resort_facilities`
--

INSERT INTO `resort_facilities` (`id_resort_facilities`, `name`, `content`) VALUES
(1, '18 Holes Beautiful Golf Course', '<p>holes</p>'),
(2, '47 Luxurious Room', '<p>wuu</p>'),
(4, '3 Cottages', '<p>a</p>'),
(5, 'Meeting Room', '<p>a</p>'),
(6, 'VIP Room', '<p>asd</p>'),
(7, '24 Hours Restaurant', '<p>ada</p>'),
(8, 'Driving Range', '<p>gagaga</p>'),
(9, 'Two Tennis Courts', '<p>gg</p>'),
(10, 'Tennis Table', '<p>a</p>'),
(11, 'Billyard', '<p>a</p>'),
(12, 'Massage', '<p>q</p>'),
(13, 'Swiming Pool', '<p>ww</p>'),
(14, 'Children Play Ground', '<p>r</p>'),
(15, 'Mountain Bike', '<p>a</p>'),
(16, 'Fitness Centre', '<p>f</p>'),
(17, 'Sauna & Whirl Pool', '<p>q</p>'),
(18, 'Pro Shop', '<p>e</p>'),
(19, 'Golf Equipment Rental', '<p>e</p>'),
(20, 'Free Safe Deposit Box', '<p>432</p>'),
(21, 'Green Spa', '<p>klol</p>');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`content`) VALUES
('<p>wuisisisiAS</p>');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id_slider` int(11) NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `aktif` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_slider`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id_slider`, `image`, `aktif`) VALUES
(1, 'thumbs_agung-coelophysis.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `spa`
--

CREATE TABLE IF NOT EXISTS `spa` (
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spa`
--

INSERT INTO `spa` (`content`) VALUES
('<p>ini spaaaaaaaa</p><p><br></p>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
