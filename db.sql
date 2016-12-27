-- phpMyAdmin SQL Dump
-- version 3.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 24, 2004 at 06:36 PM
-- Server version: 5.1.30
-- PHP Version: 5.2.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `05082`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `admin` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `pass` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin`, `pass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `dd_aboutus`
--

CREATE TABLE IF NOT EXISTS `dd_aboutus` (
  `id` int(1) NOT NULL DEFAULT '0',
  `about` text COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `dd_aboutus`
--

INSERT INTO `dd_aboutus` (`id`, `about`) VALUES
(1, '<div id="templatemo_content_wrapper">\r\n <div id="templatemo_content">\r\n  <h2 class="subheader biggest" align="center">\r\n\r\n\r\n    Welcome to over website\r\n\r\n\r\n  </h2>\r\n  <div>\r\n   <center></center>\r\n    <table width="647" align="center">\r\n    <tr>\r\n       <td height="39">\r\n         <h1 align="center" class="style5">\r\n\r\n\r\n               About us\r\n\r\n\r\n        </h1>\r\n       </td>\r\n     </tr>\r\n     <tr>\r\n        <td height="72"><h3>\r\n           <div align="center" class="style6" style="height:70px">\r\n            <font color="#000">\r\n\r\n\r\nWe are vary happy to  provides many electrical devices   \r\n Please register to visit our page...\r\n\r\n\r\n           </font>\r\n          </div></h3>\r\n        </td>\r\n      </tr>\r\n      <tr>\r\n        <td height="39"> </td>\r\n      </tr>\r\n      <tr>\r\n        <td><h3 align="center"><span class="style12">\r\n              <span class="style6"><font color="#0000">\r\n\r\n\r\n Thanks for visiting our page.\r\nif \r\n\r\n\r\n              </font></span>\r\n                  \r\n              <span class="style6"><font color="#000">\r\n\r\n\r\n                   .\r\n\r\n\r\n              </font></span></span></h3>\r\n            </td>\r\n          </tr>\r\n        </table>\r\n     </div>\r\n  </div>\r\n</div>        ');

-- --------------------------------------------------------

--
-- Table structure for table `dd_cart`
--

CREATE TABLE IF NOT EXISTS `dd_cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `c_name` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `p_name` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `price` float NOT NULL DEFAULT '0',
  `quantity` int(3) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=151 ;

--
-- Dumping data for table `dd_cart`
--

INSERT INTO `dd_cart` (`id`, `user_name`, `c_name`, `p_name`, `price`, `quantity`) VALUES
(134, 'ddd', 'Nokia', '5130', 5200, 1),
(133, 'ddd', 'LG', 'KF300', 5100, 2),
(132, 'ddd', 'LG', 'KF300', 5100, 3),
(114, '0', 'Nokia', 'ewrtf', 566, 1),
(91, 'dddd', 'Nokia', 'n92', 5000, 1),
(98, '0', 'Nokia', 'n92', 5000, 1),
(131, 'ddd', 'Motorola', 'L7', 3799, 1),
(129, 'ddd', 'Samsung', 'GT S3310', 3600, 1),
(130, 'ddd', 'Sony', 'K530i', 4800, 1);

-- --------------------------------------------------------

--
-- Table structure for table `dd_category`
--

CREATE TABLE IF NOT EXISTS `dd_category` (
  `c_id` int(10) NOT NULL DEFAULT '0',
  `name` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `enable` char(1) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `picture` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `dd_category`
--

INSERT INTO `dd_category` (`c_id`, `name`, `enable`, `picture`) VALUES
(1, 'Nokia', 'F', ''),
(2, 'Samsung', 'T', ''),
(3, 'Sony', 'T', ''),
(4, 'Motorola', 'T', ''),
(5, 'LG', 'T', '');

-- --------------------------------------------------------

--
-- Table structure for table `dd_feedback`
--

CREATE TABLE IF NOT EXISTS `dd_feedback` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `gender` char(1) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `city` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `state` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `country` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `contect no` varchar(15) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `email id` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `comment` text COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=25 ;

--
-- Dumping data for table `dd_feedback`
--

INSERT INTO `dd_feedback` (`id`, `name`, `gender`, `city`, `state`, `country`, `contect no`, `email id`, `comment`) VALUES
(17, 'Rajesh', 'M', 'Rajkot', 'Gujarat', 'India', '9857485465', 'Rajesh71@gmail.com', 'Have a wonderfull work'),
(24, 'Urvashi', 'F', 'Rajkot', 'Gujarat', 'India', '9865986575', 'uv.shah@yahoo.in', 'This website will be very useful to the online users.');

-- --------------------------------------------------------

--
-- Table structure for table `dd_gallery`
--

CREATE TABLE IF NOT EXISTS `dd_gallery` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `path` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=20 ;

--
-- Dumping data for table `dd_gallery`
--

INSERT INTO `dd_gallery` (`id`, `name`, `path`) VALUES
(15, 'm14', 'm14.jpg'),
(14, 'm9', 'm9.jpg'),
(13, 'm7', 'm7.jpg'),
(12, 'm4', 'm6.jpg'),
(10, 'm2', 'm2.jpg'),
(11, 'm3', 'm3.jpg'),
(16, 'm15', 'm15.jpg'),
(17, 'm17', 'm17.jpg'),
(18, 'mo2', 'mo-11.jpg'),
(19, 'abc', 'abc.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dd_game`
--

CREATE TABLE IF NOT EXISTS `dd_game` (
  `g_id` int(10) NOT NULL AUTO_INCREMENT,
  `g_name` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `g_path` varchar(150) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`g_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `dd_game`
--

INSERT INTO `dd_game` (`g_id`, `g_name`, `g_path`) VALUES
(16, 'Forces32', 'Forces32.swf'),
(11, 'game', 'AMERIC~1.jar'),
(12, 'Animagic.jar', 'Animagic.jar'),
(13, 'BEACH REALLY', 'BEACH REALLY.jar'),
(14, 'BombermanDeluxe', 'BombermanDeluxe.jar'),
(15, 'Boun_en_id-ID_tl-PH', 'Boun_en_id-ID_tl-PH.jar'),
(17, 'iceracer', 'iceracer.swf'),
(18, 'connect2', 'connect2.swf'),
(19, 'chinesecheckers', 'chinesecheckers.swf'),
(20, 'ring', 'Journey.aac');

-- --------------------------------------------------------

--
-- Table structure for table `dd_ordered`
--

CREATE TABLE IF NOT EXISTS `dd_ordered` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `c_name` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `p_name` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `price` float NOT NULL DEFAULT '0',
  `quantity` int(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=50 ;

--
-- Dumping data for table `dd_ordered`
--

INSERT INTO `dd_ordered` (`id`, `user_name`, `c_name`, `p_name`, `price`, `quantity`) VALUES
(43, 'nirav', 'Motorola', 'L7', 3799, 0),
(42, 'nirav', 'Samsung', 'S250', 4800, 5),
(41, 'nirav', 'Samsung', 'GT S3310', 3600, 1),
(38, '', 'Nokia', '5200', 4700, 1),
(39, 'admin', 'Nokia', '5200', 4700, 2),
(40, 'admin', 'Samsung', 'GT S3310', 3600, 3),
(44, 'nirav', 'Sony', 'K530i', 4800, 10),
(45, 'nirav', 'Sony', 'Micromax', 2750, 2),
(46, 'nirav', 'Nokia', '5130', 5200, 1),
(47, 'nirav', 'Motorola', 'q9h', 5600, 3),
(48, 'nirav', 'Sony', 'G502', 4500, 2),
(49, 'nirav', 'Samsung', 'S250', 4800, 2);

-- --------------------------------------------------------

--
-- Table structure for table `dd_ordered_userinfo`
--

CREATE TABLE IF NOT EXISTS `dd_ordered_userinfo` (
  `user_id` varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `country` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `city` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `mobile_no` varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `email_id` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `full_address` varchar(150) COLLATE latin1_general_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `dd_ordered_userinfo`
--

INSERT INTO `dd_ordered_userinfo` (`user_id`, `country`, `city`, `mobile_no`, `email_id`, `full_address`) VALUES
('001', 'India', 'Gondal', '9033755123', 'keyur.patel@gmail.com', 'Shapar road,\r\nGondal'),
('002', 'India', 'Kalawad', '9898383856', 'rohitpatel@yahoo.com', 'Nr.Hutch Tower,\r\nKalawad(shitla)'),
('003', 'India', 'Surat', '9898546522', 'hitu.desai@ymail.com', 'Satelite road,\r\nSurat'),
('003', 'London', 'Velsley', '8000098652', 'naren.mandaviya@hotmail.com', 'Ville parle,\r\nAB-43,\r\nVelsley');

-- --------------------------------------------------------

--
-- Table structure for table `dd_product`
--

CREATE TABLE IF NOT EXISTS `dd_product` (
  `p_id` bigint(11) NOT NULL AUTO_INCREMENT,
  `c_id` bigint(11) NOT NULL DEFAULT '0',
  `p_name` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `brif_description` text COLLATE latin1_general_ci NOT NULL,
  `price` bigint(20) NOT NULL DEFAULT '0',
  `picture` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `big picture` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `description` text COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=44 ;

--
-- Dumping data for table `dd_product`
--

INSERT INTO `dd_product` (`p_id`, `c_id`, `p_name`, `brif_description`, `price`, `picture`, `big picture`, `description`) VALUES
(30, 1, '5200', 'size : 92x48x20 mm\r\nweight : 104gm\r\nScreen : 128x160px\r\nBluetooth : No\r\nCamera : Yes\r\nmegapixel\r\njava support : Yes\r\n', 4650, '5200.JPG', '5200big.JPG', ''),
(29, 1, '5130', 'size : 107x46x14 mm\r\nweight : 88gm\r\nScreen : 240x320px\r\nBluetooth : Yes\r\nCamera : 2\r\nmegapixel\r\njava support : Yes\r\n', 5200, '5130.GIF', '5130big.GIF', 'Nokia 5130 Xpress music'),
(31, 1, '2605', 'size : 82x42x16 mm\r\nweight : 66gm\r\nScreen : 218x160px\r\nBluetooth : Yes\r\nCamera : VGA\r\njava support : No', 4000, '2605.JPG', '2605big.JPG', 'Nokia 2605 Mirage Specification'),
(32, 1, '2626', 'size : 104x43x18 mm\r\nweight : 91gm\r\nScreen : 128x128px\r\nBluetooth : No\r\nCamera : 0 mega px\r\nmegapixel\r\njava support : Yes\r\n', 3000, '2626.JPG', '2626big.JPG', 'Nokia 2626 redio support'),
(33, 2, 'GT S3310', 'size : 18x32x16 mm\r\nweight : 88gm\r\nScreen : 240x320px\r\nBluetooth : Yes\r\nCamera : 2\r\nmegapixel\r\njava support : Yes\r\n', 3600, '3310.JPG', '3310big.jpg', ''),
(34, 2, 'S250', 'size : 107x46x14 mm\r\nweight : 88gm\r\nScreen : 240x320px\r\nBluetooth : Yes\r\nCamera : 2\r\nmegapixel\r\njava support : Yes\r\n', 4800, 's250.JPG', 's250big.jpg', ''),
(42, 2, 'S900i', 'size : 107x46x14 mm weight : 88gm Screen : 240x320px Bluetooth : Yes Camera : 2 megapixel java support : Yes ', 5499, 's900i.JPG', 's900ibig.JPG', ''),
(36, 5, 'KF300', 'size : 107x46x14 mm\r\nweight : 88gm\r\nScreen : 240x320px\r\nBluetooth : Yes\r\nCamera : 2\r\nmegapixel\r\njava support : Yes\r\n', 5100, 'kf3002.JPG', 'kf3002big.JPG', ''),
(37, 4, 'L7', 'size : 107x46x14 mm\r\nweight : 88gm\r\nScreen : 240x320px\r\nBluetooth : Yes\r\nCamera : 2\r\nmegapixel\r\njava support : Yes\r\n', 3799, 'L7.JPG', 'L7big.jpg', ''),
(38, 3, 'K530i', 'size : 107x46x14 mm\r\nweight : 88gm\r\nScreen : 240x320px\r\nBluetooth : Yes\r\nCamera : 2\r\nmegapixel\r\njava support : Yes\r\n', 4800, 'k530i.JPG', 'k530ibig.jpg', ''),
(39, 4, 'M18', 'size : 107x46x14 mm\r\nweight : 88gm\r\nScreen : 240x320px\r\nBluetooth : Yes\r\nCamera : 2\r\nmegapixel\r\njava support : Yes\r\n', 3999, 'm18.JPG', 'm18big.jpg', ''),
(40, 3, 'G502', 'size : 107x46x14 mm\r\nweight : 88gm\r\nScreen : 240x320px\r\nBluetooth : Yes\r\nCamera : 2\r\nmegapixel\r\njava support : Yes\r\n', 4500, 'g502.JPG', 'g502big.jpg', ''),
(41, 4, 'q9h', 'size : 107x46x14 mm\r\nweight : 88gm\r\nScreen : 240x320px\r\nBluetooth : Yes\r\nCamera : 2\r\nmegapixel\r\njava support : Yes\r\n', 5600, 'q9h.JPG', 'q9hbig.jpg', ''),
(43, 3, 'Micromax', 'Mast', 2750, 'm15.jpg', 'm15.jpg', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `dd_rington`
--

CREATE TABLE IF NOT EXISTS `dd_rington` (
  `r_id` int(10) NOT NULL AUTO_INCREMENT,
  `r_name` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `r_path` varchar(150) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`r_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `dd_rington`
--

INSERT INTO `dd_rington` (`r_id`, `r_name`, `r_path`) VALUES
(7, 'Airtel ringtone', 'Airtel new ringtone.mp3'),
(6, 'Afsana likh rahi hun', 'Afsana likh rahi hu.mp3'),
(8, 'Band bazaa baarat', 'Band baza barat.MP3'),
(9, 'Friction', 'Friction.mp3'),
(10, 'In aankho ki masti', 'In aankho ki masti.mp3'),
(11, 'Nescafe adv.', 'Nescafe_Add_Song.mp3'),
(12, 'Phir mohabatt', 'Phir Mohabatt-Murder 2.mp3'),
(13, 'Blue theme', 'Ringtone-Blue Theme.mp3'),
(14, 'Vivah', 'Vivah.mp3'),
(15, 'Water', 'WATER.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `dd_song`
--

CREATE TABLE IF NOT EXISTS `dd_song` (
  `s_id` int(10) NOT NULL AUTO_INCREMENT,
  `s_name` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `s_path` varchar(150) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`s_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=40 ;

--
-- Dumping data for table `dd_song`
--

INSERT INTO `dd_song` (`s_id`, `s_name`, `s_path`) VALUES
(39, 'Kuchh kuchh hota hai', 'Ku6 ku6 hota hai.mp3'),
(32, 'Haa tu hai', 'Haan tu hain-Jannat.mp3'),
(33, 'Kuchh is tarah', 'Kuch Is Tarah.mp3'),
(34, 'Rabaa mai to mar gaya', 'Mausam - Rabba Main Toh Mar.mp3'),
(35, 'Phir mohabatt', 'Phir Mohabbat.mp3'),
(36, 'Soniye dil nai lagda', 'Soniye Dil Nahi.mp3'),
(37, 'Taal se taal', 'Taal Se Taal (Western).MP3'),
(38, 'Tujme rab dikhta hai', 'Tujme rab dikhta hai.MP3');

-- --------------------------------------------------------

--
-- Table structure for table `dd_user`
--

CREATE TABLE IF NOT EXISTS `dd_user` (
  `u_id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `last_name` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `birth_date` text COLLATE latin1_general_ci NOT NULL,
  `gender` char(1) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `country` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `city` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `mobile_no` varchar(15) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `email_id` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `userid` varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `pass` varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `your_photo` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`u_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=51 ;

--
-- Dumping data for table `dd_user`
--

INSERT INTO `dd_user` (`u_id`, `first_name`, `last_name`, `birth_date`, `gender`, `country`, `city`, `mobile_no`, `email_id`, `userid`, `pass`, `your_photo`) VALUES
(45, 'dinesh', 'lunagariya', '1991/11/19', 'M', 'india', 'rajkot', '8128337767', 'Dlunagariya828337767@gmail.com', 'ddd', '111', 'Water lilies.jpg'),
(46, 'talaviya', 'satish', '1991/11/10', 'M', 'india', 'rajkot', '9737743435', 'talaviyasatish10@yahoo.com', 'talaviya', 'satish', 'thumb_pineapple.jpg'),
(47, 'eftret', 'rtretr', '1950/1/1', 'M', 'rtret', 'rftre', '45585', 'try6ry', 'dddd', '1111', 'thumb_pineapple.jpg'),
(48, '', '', '', 'M', '', '', '', '', '', '', ''),
(49, 'dinesh', 'gorasiya', '1973/4/18', 'M', 'india', 'rajkot', '800795179', 'dinesh@gmail.com', 'dinesh', 'india', 'icon_custardapple.jpg'),
(50, 'prashant', 'gajjar', '1992/3/30', 'M', 'India', 'Jamnagar', '9725972597', 'prashantgajjar@gmail.com', '002', 'prashant', 'Shahid.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dd_user_login`
--

CREATE TABLE IF NOT EXISTS `dd_user_login` (
  `u_id` int(10) NOT NULL AUTO_INCREMENT,
  `user` varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `pass` varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`u_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `dd_user_login`
--

INSERT INTO `dd_user_login` (`u_id`, `user`, `pass`) VALUES
(11, 'nirav', 'niravnil'),
(10, 'nirav', 'niravgajja'),
(12, 'admin', 'admin'),
(13, '002', 'prashant');

-- --------------------------------------------------------

--
-- Table structure for table `dd_video`
--

CREATE TABLE IF NOT EXISTS `dd_video` (
  `v_id` int(10) NOT NULL AUTO_INCREMENT,
  `v_name` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `v_path` varchar(150) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`v_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `dd_video`
--

INSERT INTO `dd_video` (`v_id`, `v_name`, `v_path`) VALUES
(13, 'Bicycle jmp', 'Bicycle Jump.wmv'),
(12, 'Baseball hitting', 'Baseball Hiting.wmv');

-- --------------------------------------------------------

--
-- Table structure for table `dd_wallpaper`
--

CREATE TABLE IF NOT EXISTS `dd_wallpaper` (
  `w_id` int(10) NOT NULL AUTO_INCREMENT,
  `w_name` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `w_path` varchar(150) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`w_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=42 ;

--
-- Dumping data for table `dd_wallpaper`
--

INSERT INTO `dd_wallpaper` (`w_id`, `w_name`, `w_path`) VALUES
(35, 'Kano sang gopi', 'Kana sang Gopies.jpg'),
(34, 'I luv u', 'I_Love_You.jpg'),
(33, 'Hayabusa bike', 'Hayabusa Greenalien.jpg'),
(32, 'Ganesh', 'Ganesh.jpg'),
(31, 'Bike', 'Bike.jpg'),
(30, 'Austriya', 'Austriya.bmp'),
(29, 'Austriya', 'Austriya.bmp'),
(28, 'Angel', 'Angel.gif'),
(36, 'RadheKrishna', 'Radhe Krishna.jpg'),
(37, 'Steps', 'Steps.jpg'),
(38, 'Tiger', 'Tiger.jpg'),
(39, 'Valentine Paper', 'Valentine special.jpg'),
(40, 'Windows vista', 'Vista.jpg'),
(41, 'Vivah movie', 'Vivah.jpg');
