-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 10, 2016 at 01:09 AM
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
('<h1><img style="display: block; margin-left: auto; margin-right: auto;" src="../admin_assets/filemanager/img/5.jpg?1478096601425" alt="5" /></h1>\r\n<p>&nbsp;</p>\r\n<p style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p style="text-align: center;">&nbsp;</p>\r\n<h1><img style="display: block; margin-left: auto; margin-right: auto;" src="../admin_assets/filemanager/img/3.jpg?1478043267922" alt="3" width="1323" height="882" /></h1>\r\n<p>&nbsp;<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>');

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
  `is_member` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_berita`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `isi_berita`, `tanggal_berita`, `active`, `image`, `is_member`) VALUES
(1, 'Cihuy', '<p>asasadddddddddddd</p>\r\n<p>adada</p>\r\n<p>daad</p>', '2016-10-28', 0, '1.jpg', 0),
(2, 'TRW Cup', '<p>pemenang TRW Cup adalah....</p>', '2016-11-04', 1, 'IMG_1765.JPG', 1);

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
('<p style="text-align: center;">A centre of hope, sharing and growth that caters to the needs of children,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; young people and senior citizens, regardless of race or creed.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; In these times of haste, stress and pressure, we have created Ti-Ratana to be a sanctuary,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; a centre of hope for the hopeless and the helpless, a place of rest for the infirm or the healthy,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; a place to learn and grow, love, share or just be.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The total money raised amounted to more than RM530,000 this year compared with RM415,000 previously in this annual charity golf game in aid of the society.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; A buffet dinner-cum-cheque presentation ceremony was held at the Ti Chen Chinese Restaurant at the Saujana Golf and Country Club after players had their round of play at the golf course earlier in the afternoon.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Organising committee co-chairman Tan Chuan Yong said from the total of RM530,000, more than RM200,000 were through fees of flights by the players and also through sponsorship of the souvenir programme book.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id_event` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `content` text NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `image` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `is_member` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_event`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `name`, `content`, `start_date`, `end_date`, `image`, `status`, `is_member`) VALUES
(4, 'Gold Open', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel faucibus nibh. Aliquam nec semper lorem, in blandit dolor. Vestibulum viverra nulla ac ante pretium, a volutpat est sollicitudin. Etiam a sem bibendum, suscipit mi nec, porta quam. Nullam iaculis, odio elementum congue placerat, nibh metus aliquet felis, aliquam maximus justo sem vel mauris. Fusce venenatis auctor eros eget facilisis. Nullam fermentum scelerisque felis, nec varius massa mattis non. Nam enim enim, volutpat nec pellentesque non, auctor ut nunc.</p>\r\n<p>Aliquam erat volutpat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum sit amet vestibulum nibh. Nam auctor eros sit amet rutrum consequat. Phasellus velit libero, convallis eu enim in, imperdiet hendrerit sem. Etiam in sapien id sem cursus sollicitudin luctus vitae nunc. Suspendisse in risus non purus placerat pellentesque. Duis purus mauris, ultricies eget bibendum sed, tristique eget eros. Integer molestie vehicula orci ut consectetur. Nullam eget vulputate dui. Aliquam auctor lectus lacinia felis ultrices hendrerit.</p>\r\n<p>Phasellus vel ligula quis nisl efficitur egestas. Phasellus ullamcorper elit leo, et venenatis eros pretium et. Sed interdum sapien vitae fringilla tincidunt. Fusce aliquam lorem vel nisl ultrices tincidunt. Phasellus at vestibulum risus. Nunc quis eros et diam dapibus rhoncus. Nam semper, mi quis dapibus sodales, lorem diam mollis ligula, in mattis magna enim eget nisi. Etiam bibendum lorem non felis auctor, quis ultricies odio tempus. Maecenas sit amet vulputate turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.asd</p>', '2016-11-10', '2016-11-10', 'cihuy.jpg', 1, 1),
(5, 'TRW Cup', '<p>kejuaran tingkat galaksi bima sakti</p>', '2016-11-10', '2016-11-10', '', 1, 0);

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
(1, 'Restaurant', '<p style="text-align: center;"><img src="../../../../bgg/admin_assets/filemanager/img/4_1.jpg?1478096754286" alt="4_1" /></p>\r\n<p style="text-align: left;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'),
(2, 'Male & Female Locker Room', '<p><img src="../../../../bgg/admin_assets/filemanager/img/5_1.jpg?1478096683610" alt="5_1" /></p>\r\n<p><br />&nbsp;</p>\r\n<p style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'),
(3, 'Buggy', '<p>buggy</p>'),
(4, 'Driving Range', '<p><img style="display: block; margin-left: auto; margin-right: auto;" src="../../../../bgg/admin_assets/filemanager/img/2.jpg?1478097114937" alt="2" /></p>\r\n<p>&nbsp;</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'),
(5, 'Proshop', '<p style="text-align: center;"><img src="../../../../bgg/admin_assets/filemanager/img/bggresort2.jpg?1478097379893" alt="bggresort2" width="545" height="283" /></p>\r\n<p style="text-align: center;">&nbsp;</p>\r\n<p style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'),
(6, 'Gym', '<p><img style="display: block; margin-left: auto; margin-right: auto;" src="../../../../bgg/admin_assets/filemanager/img/bgggolf2.jpg?1478097530803" alt="bgggolf2" /></p>\r\n<p>&nbsp;</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>');

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
('<p style="text-align: center;">Saujana Golf &amp; Country Club was the brainchild of former Prime Minister YAB Tun Dr Mahathir Mohamad who, in 1982, initiated the creation of a government task force to set up a golf club in Kuala Lumpur to attract investors and industrialists.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; On 2 February 1983, Golf Resort (M) Bhd was setup.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Four hundred acres of freehold plantation land was purchased for the development of two 18-hole golf courses, a clubhouse, a hotel and chalet complex.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Golf Resort (M) Bhd was renamed Saujana Resort (M) Berhad after its conversion into a public company in 1985. It became the first proprietary club in the country. Golfplan - the California-based golf architectural firm headed by Ronald Fream - was entrusted to create two International standard golf courses from the plantation land. The Palm Course was completed in mid 1985 while the Bunga Raya Course (initially named the Orchid Course) was finished in December 1985.The clubhouse opened on Valentines Day, 14 February 1986, and on 6 April 1987, The Saujana Hotel Kuala Lumpur&nbsp; opened its doors.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE IF NOT EXISTS `membership` (
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`content`) VALUES
('<p>lorem ipsum ada dad as</p>');

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
-- Table structure for table `promotion`
--

CREATE TABLE IF NOT EXISTS `promotion` (
  `id_promotion` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `content` text NOT NULL,
  `is_member` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_promotion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `promotion`
--

INSERT INTO `promotion` (`id_promotion`, `name`, `content`, `is_member`) VALUES
(2, 'Diskon 50 % All Tournament', '<p>ada ad ad ad ad adsad adad adad d ada adadadadaa</p>', 1),
(3, 'baru', '<p>baru</p>', 0);

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
(1, '18 Holes Beautiful Golf Course', '<p><img src="../../../../bgg/admin_assets/filemanager/img/2.jpg?1478150400637" alt="2" /></p>\r\n<p>&nbsp;</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'),
(2, '47 Luxurious Room', '<p><img src="../../../../bgg/admin_assets/filemanager/img/5.jpg?1478150430991" alt="5" /></p>\r\n<p>&nbsp;</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'),
(4, '3 Cottages', '<p><img style="display: block; margin-left: auto; margin-right: auto;" src="../../../../bgg/admin_assets/filemanager/img/5_1.jpg?1478149793426" alt="5_1" /></p>\r\n<p>&nbsp;</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'),
(5, 'Meeting Room', '<p><img style="display: block; margin-left: auto; margin-right: auto;" src="../../../../bgg/admin_assets/filemanager/img/bggresort2.jpg?1478150504509" alt="bggresort2" width="597" height="310" /></p>\r\n<p>&nbsp;</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'),
(6, 'VIP Room', '<p><img src="../../../../bgg/admin_assets/filemanager/img/5.jpg?1478150531591" alt="5" /></p>\r\n<p>&nbsp;</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'),
(7, '24 Hours Restaurant', '<p><img src="../../../../bgg/admin_assets/filemanager/img/4.jpg?1478150562573" alt="4" /></p>\r\n<p>&nbsp;</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'),
(8, 'Driving Range', '<p><img src="../../../../bgg/admin_assets/filemanager/img/2.jpg?1478150274483" alt="2" /></p>\r\n<p>&nbsp;</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'),
(9, 'Two Tennis Courts', '<p><img src="../../../../bgg/admin_assets/filemanager/img/3.jpg?1478150321050" alt="3" /></p>\r\n<p>&nbsp;</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'),
(10, 'Tennis Table', '<p><img src="../../../../bgg/admin_assets/filemanager/img/2.jpg?1478149994570" alt="2" /></p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'),
(11, 'Billyard', '<p><img style="display: block; margin-left: auto; margin-right: auto;" src="../../../../bgg/admin_assets/filemanager/img/bgggolf2.jpg?1478150361844" alt="bgggolf2" width="723" height="376" /></p>\r\n<p>&nbsp;</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'),
(12, 'Massage', '<p><img src="../../../../bgg/admin_assets/filemanager/img/5_1.jpg?1478150617795" alt="5_1" /></p>\r\n<p>&nbsp;</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'),
(13, 'Swiming Pool', '<p><img src="../../../../bgg/admin_assets/filemanager/img/2.jpg?1478150639469" alt="2" /></p>\r\n<p>&nbsp;</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'),
(14, 'Children Play Ground', '<p><img src="../../../../bgg/admin_assets/filemanager/img/3.jpg?1478150659364" alt="3" /></p>\r\n<p>&nbsp;</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'),
(15, 'Mountain Bike', '<p><img src="../../../../bgg/admin_assets/filemanager/img/3.jpg?1478150681249" alt="3" /></p>\r\n<p>&nbsp;</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'),
(16, 'Fitness Centre', '<p><img src="../../../../bgg/admin_assets/filemanager/img/2.jpg?1478150711860" alt="2" /></p>\r\n<p>&nbsp;</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'),
(17, 'Sauna & Whirl Pool', '<p><img src="../../../../bgg/admin_assets/filemanager/img/5_1.jpg?1478150728617" alt="5_1" /></p>\r\n<p>&nbsp;</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'),
(18, 'Pro Shop', '<p><img src="../../../../bgg/admin_assets/filemanager/img/5.jpg?1478150760728" alt="5" /></p>\r\n<p>&nbsp;</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'),
(19, 'Golf Equipment Rental', '<p><img src="../../../../bgg/admin_assets/filemanager/img/3.jpg?1478150778945" alt="3" /></p>\r\n<p>&nbsp;</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'),
(20, 'Free Safe Deposit Box', '<p><img src="../../../../bgg/admin_assets/filemanager/img/2.jpg?1478150815118" alt="2" /></p>\r\n<p>&nbsp;</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'),
(21, 'Green Spa', '<p><img src="../../../../bgg/admin_assets/filemanager/img/5.jpg?1478150845539" alt="5" /></p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>');

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
('<p><img style="display: block; margin-left: auto; margin-right: auto;" src="../admin_assets/filemanager/img/5.jpg?1478083476167" alt="5" width="801" height="434" /></p>\r\n<p>&nbsp;</p>\r\n<p style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id_slider` int(11) NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `aktif` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_slider`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id_slider`, `image`, `aktif`) VALUES
(2, '11.jpg', 1),
(3, '2.jpg', 1),
(4, '3.jpg', 1),
(5, '4.jpg', 1),
(6, '5.jpg', 1);

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
('<p><img src="../../../bgg/admin_assets/filemanager/img/5.jpg?1478096557112" alt="5" /></p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(1) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal_berlaku` date NOT NULL,
  `tanggal_jatuh_tempo` date NOT NULL,
  `no_membership` int(11) NOT NULL,
  `email` varchar(125) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`, `nama`, `tanggal_berlaku`, `tanggal_jatuh_tempo`, `no_membership`, `email`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 0, '', '0000-00-00', '0000-00-00', 0, ''),
(2, '131511017', '30f01545a850e20b5c5cedbc61e943fe', 1, 'Piko', '2016-11-25', '2016-11-09', 131511017, 'emrizal21@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
