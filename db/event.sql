-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 03, 2016 at 06:44 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bgg_old`
--

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
  PRIMARY KEY (`id_event`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `name`, `content`, `start_date`, `end_date`, `image`, `status`) VALUES
(4, 'Gold Open', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel faucibus nibh. Aliquam nec semper lorem, in blandit dolor. Vestibulum viverra nulla ac ante pretium, a volutpat est sollicitudin. Etiam a sem bibendum, suscipit mi nec, porta quam. Nullam iaculis, odio elementum congue placerat, nibh metus aliquet felis, aliquam maximus justo sem vel mauris. Fusce venenatis auctor eros eget facilisis. Nullam fermentum scelerisque felis, nec varius massa mattis non. Nam enim enim, volutpat nec pellentesque non, auctor ut nunc.</p>\r\n<p>Aliquam erat volutpat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum sit amet vestibulum nibh. Nam auctor eros sit amet rutrum consequat. Phasellus velit libero, convallis eu enim in, imperdiet hendrerit sem. Etiam in sapien id sem cursus sollicitudin luctus vitae nunc. Suspendisse in risus non purus placerat pellentesque. Duis purus mauris, ultricies eget bibendum sed, tristique eget eros. Integer molestie vehicula orci ut consectetur. Nullam eget vulputate dui. Aliquam auctor lectus lacinia felis ultrices hendrerit.</p>\r\n<p>Phasellus vel ligula quis nisl efficitur egestas. Phasellus ullamcorper elit leo, et venenatis eros pretium et. Sed interdum sapien vitae fringilla tincidunt. Fusce aliquam lorem vel nisl ultrices tincidunt. Phasellus at vestibulum risus. Nunc quis eros et diam dapibus rhoncus. Nam semper, mi quis dapibus sodales, lorem diam mollis ligula, in mattis magna enim eget nisi. Etiam bibendum lorem non felis auctor, quis ultricies odio tempus. Maecenas sit amet vulputate turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.asd</p>', '2016-11-03', '2016-11-03', 'cihuy.jpg', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
