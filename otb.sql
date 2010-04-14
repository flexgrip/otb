-- phpMyAdmin SQL Dump
-- version 3.2.2.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 14, 2010 at 05:10 PM
-- Server version: 5.1.37
-- PHP Version: 5.2.10-2ubuntu6.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `otb`
--

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE IF NOT EXISTS `assets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pub_id` int(11) NOT NULL,
  `page_num` int(11) NOT NULL,
  `asset_typ` varchar(50) NOT NULL,
  `asset_num` int(11) NOT NULL,
  `asset_des` varchar(255) DEFAULT NULL,
  `asset_img` tinyint(1) NOT NULL DEFAULT '0',
  `asset_y1` int(11) NOT NULL,
  `asset_x1` int(11) NOT NULL,
  `asset_y2` int(11) NOT NULL,
  `asset_x2` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=141 ;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`id`, `pub_id`, `page_num`, `asset_typ`, `asset_num`, `asset_des`, `asset_img`, `asset_y1`, `asset_x1`, `asset_y2`, `asset_x2`) VALUES
(71, 2, 1, 'Page', 0, '', 0, 0, 0, 783, 603),
(72, 2, 1, 'Cover Title', 1, 'Insert your community name here.', 0, 76, 126, 120, 479),
(73, 2, 1, 'Cover Sub-Title', 1, 'Insert your state name here.', 0, 131, 207, 146, 398),
(74, 2, 1, 'Photo', 1, 'Consider a horizontal photo. This would be a good spot to use a sepia tone image.', 1, 219, 0, 490, 603),
(75, 2, 2, 'Page', 0, '', 0, 0, 0, 783, 603),
(76, 2, 3, 'Page', 0, '', 0, 0, 603, 783, 1206),
(77, 2, 3, 'Chamber Logo', 1, 'Insert chamber logo here.', 1, 643, 1016, 734, 1158),
(78, 2, 3, 'Subheader', 1, '', 0, 711, 752, 719, 880),
(79, 2, 3, 'Subheader', 2, '', 0, 519, 726, 527, 880),
(80, 2, 3, 'Subheader', 3, '', 0, 326, 731, 335, 880),
(81, 2, 3, 'Subheader', 4, '', 0, 423, 752, 432, 966),
(82, 2, 3, 'Subheader', 5, '', 0, 615, 752, 623, 920),
(83, 2, 3, 'Subheader', 6, '', 0, 231, 752, 239, 934),
(84, 2, 3, 'Header', 1, '', 0, 685, 705, 703, 880),
(85, 2, 3, 'Header', 2, '', 0, 493, 755, 511, 880),
(86, 2, 3, 'Header', 3, '', 0, 300, 781, 318, 880),
(87, 2, 3, 'Header', 4, '', 0, 397, 752, 416, 913),
(88, 2, 3, 'Header', 5, '', 0, 589, 752, 607, 935),
(89, 2, 3, 'Header', 6, '', 0, 205, 752, 223, 893),
(90, 2, 3, 'Header', 7, '', 0, 80, 656, 110, 975),
(91, 2, 3, 'Photo', 1, '', 1, 660, 900, 744, 990),
(92, 2, 3, 'Photo', 2, '', 1, 564, 642, 648, 732),
(93, 2, 3, 'Photo', 3, '', 1, 468, 900, 552, 990),
(94, 2, 3, 'Photo', 4, '', 1, 372, 642, 456, 732),
(95, 2, 3, 'Photo', 5, '', 1, 276, 900, 360, 990),
(96, 2, 3, 'Photo', 6, '', 1, 180, 642, 264, 732),
(97, 2, 4, 'Page', 0, '', 0, 0, 0, 783, 603),
(98, 2, 4, 'Sidebar copy', 1, 'Maximum of 17 words', 0, 581, 409, 715, 554),
(100, 2, 4, 'Body copy', 2, 'Maximum of 350 words', 0, 468, 36, 744, 564),
(101, 2, 4, 'Subheader', 1, '', 0, 408, 179, 420, 421),
(102, 2, 4, 'Header', 1, '', 0, 367, 187, 396, 413),
(103, 2, 4, 'Photo', 1, 'Consider a horizontal photo.', 1, 43, 43, 329, 557),
(104, 2, 5, 'Page', 0, '', 0, 0, 603, 783, 1206),
(105, 2, 5, 'Body copy', 1, 'Maximum of 560 words', 0, 36, 642, 744, 1170),
(106, 2, 5, 'Subheader', 1, '', 0, 110, 717, 122, 915),
(107, 2, 5, 'Header', 1, '', 0, 68, 737, 98, 895),
(108, 2, 5, 'Photo', 1, 'Consider a vertical photo. This would be a good place to use a sepia tone image.', 1, 36, 1003, 276, 1170),
(109, 2, 5, 'Photo', 2, 'Consider a horizontal photo.', 1, 475, 649, 737, 983),
(110, 2, 6, 'Page', 0, '', 0, 0, 0, 783, 603),
(111, 2, 6, 'Body copy', 1, 'This story spans two pages with a maximum of 1090 words.', 0, 36, 36, 744, 564),
(112, 2, 6, 'Subheader', 1, '', 0, 529, 67, 541, 352),
(113, 2, 6, 'Header', 1, '', 0, 488, 81, 517, 339),
(114, 2, 6, 'Photo', 1, 'Consider a vertical photo', 1, 43, 43, 449, 376),
(115, 2, 7, 'Page', 0, '', 0, 0, 603, 783, 1206),
(116, 2, 7, 'Pullquote', 1, 'Maximum of 45 words', 0, 329, 677, 422, 1135),
(117, 2, 7, 'Photo', 1, 'Consider a horizontal photo.', 1, 588, 822, 744, 1171),
(118, 2, 8, 'Page', 0, '', 0, 0, 0, 783, 603),
(119, 2, 9, 'Page', 0, '', 0, 0, 603, 783, 1206),
(120, 2, 10, 'Page', 0, '', 0, 0, 0, 783, 603),
(121, 2, 10, 'Sidebar copy', 1, 'Maximum of 15 words', 0, 281, 228, 395, 373),
(122, 2, 10, 'Body copy', 1, 'Maximum of 590 words', 0, 36, 36, 744, 564),
(123, 2, 10, 'Subheader', 1, '', 0, 106, 107, 118, 312),
(124, 2, 10, 'Header', 1, '', 0, 71, 111, 100, 309),
(125, 2, 10, 'Photo', 1, 'Consider a horizontal photo.', 1, 500, 224, 736, 556),
(126, 2, 11, 'Page', 0, '', 0, 0, 603, 783, 1206),
(127, 2, 11, 'Body copy', 1, 'Maximum of 500 words', 0, 276, 642, 744, 1170),
(128, 2, 11, 'Subheader', 1, '', 0, 334, 704, 346, 928),
(129, 2, 11, 'Header', 1, '', 0, 299, 670, 328, 962),
(130, 2, 11, 'Photo', 1, 'Consider a horizontal photo.', 1, 43, 649, 257, 1163),
(131, 2, 12, 'Page', 0, '', 0, 0, 0, 783, 603),
(132, 2, 12, 'Body copy', 1, 'Maximum of 540 words', 0, 37, 35, 744, 564),
(133, 2, 12, 'Subheader', 1, '', 0, 106, 125, 118, 295),
(134, 2, 12, 'Header', 1, '', 0, 71, 70, 100, 349),
(135, 2, 12, 'Photo', 1, 'This would be a good place to use a sepia tone image.', 1, 180, 397, 318, 564),
(136, 2, 12, 'Photo', 2, 'Consider a vertical photo.', 1, 404, 43, 736, 376),
(137, 2, 13, 'Page', 0, '', 0, 0, 603, 783, 1206),
(138, 2, 14, 'Page', 0, '', 0, 0, 0, 783, 603),
(139, 2, 15, 'Page', 0, '', 0, 0, 603, 783, 1206),
(140, 2, 16, 'Page', 0, '', 0, 0, 0, 783, 603);

-- --------------------------------------------------------

--
-- Table structure for table `completed`
--

CREATE TABLE IF NOT EXISTS `completed` (
  `id` int(111) NOT NULL AUTO_INCREMENT,
  `order_id` varchar(50) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `asset_id` int(111) NOT NULL,
  `data` varchar(15000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `completed`
--

INSERT INTO `completed` (`id`, `order_id`, `user_id`, `asset_id`, `data`) VALUES
(24, '1001', 'ray', 125, '/home/flexgrip/public_html/projects/otb/userfiles/ray/1001/2_P10_Photo_1.html'),
(23, '1001', 'ray', 95, '/home/flexgrip/public_html/projects/otb/userfiles/ray/1001/2_P3_Photo_5.png'),
(22, '1001', 'ray', 103, '/home/flexgrip/public_html/projects/otb/userfiles/ray/1001/2_P4_Photo_1.sh'),
(21, '1001', 'ray', 74, '/home/flexgrip/public_html/projects/otb/userfiles/ray/1001/2_P1_Photo_1.sh'),
(20, '1001', 'ray', 77, '/home/flexgrip/public_html/projects/otb/userfiles/ray/1001/2_P3_Chamber Logo_1.htm'),
(25, '1001', 'ray', 102, 'Header 1'),
(26, '1001', 'ray', 100, 'Some body copy should go here1'),
(27, '1001', 'ray', 98, 'asdfasdfasdf'),
(28, '1001', 'ray', 116, 'asdfasdf'),
(29, '1001', 'ray', 124, 'testttt'),
(30, '1001', 'ray', 122, 'asdfasdfsd');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) NOT NULL,
  `order_id` int(11) NOT NULL,
  `pub_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `order_id`, `pub_id`) VALUES
(1, 'ray', 1001, 2);
