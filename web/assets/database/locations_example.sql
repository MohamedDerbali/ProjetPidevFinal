-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2017 at 05:16 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `locations_example`
--

-- --------------------------------------------------------

--
-- Table structure for table `description_list`
--

CREATE TABLE IF NOT EXISTS `description_list` (
  `description_list_id` int(128) NOT NULL AUTO_INCREMENT,
  `item_id` int(128) NOT NULL,
  `title` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`description_list_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `description_list`
--

INSERT INTO `description_list` (`description_list_id`, `item_id`, `title`, `value`) VALUES
(1, 3, 'Bathrooms', '3'),
(2, 3, 'Bedrooms', '3'),
(3, 3, 'Area', '458m<sup>2</sup>'),
(4, 3, 'Garages', '2'),
(5, 3, 'Status', 'Sale');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `image_id` int(128) NOT NULL AUTO_INCREMENT,
  `item_id` int(128) NOT NULL,
  `image` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`image_id`, `item_id`, `image`) VALUES
(1, 1, 'assets/img/items/1.jpg'),
(2, 1, 'assets/img/items/2.jpg'),
(3, 1, 'assets/img/items/3.jpg'),
(4, 2, 'assets/img/items/2.jpg'),
(6, 2, 'assets/img/items/4.jpg'),
(7, 3, 'assets/img/items/4.jpg'),
(8, 3, 'assets/img/items/2.jpg'),
(9, 3, 'assets/img/items/12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `latitude` decimal(10,8) DEFAULT NULL,
  `longitude` decimal(10,8) DEFAULT NULL,
  `address` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `featured` int(1) NOT NULL,
  `title` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `rating` int(32) DEFAULT NULL,
  `url` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `marker_image` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `additional_info` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `ribbon` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `video` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `marker_color` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `latitude`, `longitude`, `address`, `featured`, `title`, `location`, `phone`, `email`, `website`, `category`, `rating`, `url`, `marker_image`, `additional_info`, `description`, `ribbon`, `video`, `marker_color`) VALUES
(1, '40.72807182', '-73.85735035', '', 1, 'Marky''s Restauranté', '63 Birch Street', '361-492-2356', 'hello@markys.com', 'http://www.markys.com', 'Restaurant', 4, 'detail.html', 'assets/img/items/1.jpg', 'Average price $30', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lobortis, arcu non hendrerit imperdiet, metus odio scelerisque elit, sed lacinia odio est ac felis. Nam ullamcorper hendrerit ullamcorper. Praesent quis arcu quis leo posuere ornare eu in purus. Nulla ornare rutrum condimentum. Praesent eu pulvinar velit. Quisque non finibus purus, eu auctor ipsum.', '', '', '#000000'),
(2, '40.73925841', '-73.85348797', '', 0, 'Ironapple', '4209 Glenview Drive', '989-410-0777', 'hello@ironapple.com', 'http://www.ironapple.com', 'Bar & Grill', 3, 'detail.html', 'assets/img/items/2.jpg', '', 'Aliquam vel turpis sagittis, semper tellus eget, aliquam turpis. Cras aliquam, arcu"', '50%', '', ''),
(3, NULL, NULL, 'Forest Hills, Queens, NY 11375, USA', 0, 'Food Festival', '23 Hillhaven Drive', '323-843-4729', '', '', 'Event', NULL, 'detail.html', 'assets/img/items/4.jpg', 'Starts at 19:00', 'Sed ac dolor auctor, elementum lacus vitae, efficitur magna. Quisque sed semper tellus', 'Last Tickets!', '', '#c92e2e'),
(4, NULL, NULL, 'Forest Hills, Queens, NY 11375, USA', 0, 'Ironapple Same Location', '4209 Glenview Drive', '989-410-0777', 'hello@ironapple.com', 'http://www.ironapple.com', 'Bar & Grill', 3, 'detail.html', 'assets/img/items/2.jpg', 'Same Location', 'Aliquam vel turpis sagittis, semper tellus eget, aliquam turpis. Cras aliquam, arcu"', '50%', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `opening_hours`
--

CREATE TABLE IF NOT EXISTS `opening_hours` (
  `openin_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(128) NOT NULL,
  `day` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `time_open` time NOT NULL,
  `time_close` time NOT NULL,
  `closed_day` int(11) NOT NULL,
  PRIMARY KEY (`openin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `opening_hours`
--

INSERT INTO `opening_hours` (`openin_id`, `item_id`, `day`, `time_open`, `time_close`, `closed_day`) VALUES
(1, 1, 'Monday', '08:00:00', '11:00:00', 0),
(2, 1, 'Tuesday', '08:00:00', '11:00:00', 0),
(3, 1, 'Wednesday', '08:00:00', '11:00:00', 0),
(4, 1, 'Thursday', '08:00:00', '11:00:00', 0),
(5, 1, 'Friday', '08:00:00', '23:00:00', 0),
(6, 1, 'Saturday', '11:00:00', '23:00:00', 0),
(7, 1, 'Sunday', '00:00:00', '00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `review_id` int(128) NOT NULL AUTO_INCREMENT,
  `item_id` int(128) NOT NULL,
  `author_name` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `author_image` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `rating` int(8) NOT NULL,
  `review_text` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`review_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `item_id`, `author_name`, `author_image`, `date`, `rating`, `review_text`) VALUES
(1, 1, 'Jane Doe', 'assets/img/person-01.jpg', '2016-06-07', 4, 'Morbi varius orci in rhoncus posuere. Sed cursus urna ut sem rhoncus lacinia. Praesentac velit dignissim, mollis purus quis, sollicitudin eros'),
(2, 1, 'Norma Brown', 'assets/img/person-02.jpg', '2016-06-23', 5, 'Donec nec tristique sapien. Aliquam ante felis, sagittis sodales diam sollicitudin, dapibus semper turpis'),
(3, 2, 'Catherine Doe', 'assets/img/person-01.jpg', '2016-09-13', 5, 'Morbi varius orci in rhoncus posuere. Sed cursus urna ut sem rhoncus lacinia. Praesentac velit dignissim, mollis purus quis, sollicitudin eros'),
(4, 2, 'Peter Great', 'assets/img/person-03.jpg', '2016-09-14', 3, 'Donec nec tristique sapien. Aliquam ante felis, sagittis sodales diam sollicitudin, dapibus semper turpis'),
(5, 1, 'Patrick Jamison', 'assets/img/person-04.jpg', '2016-09-14', 5, 'Nam tincidunt mollis nibh at facilisis. Integer a orci a elit malesuada ultrices. Morbi facilisis, velit non fermentum laoreet, ligula dolor ullamcorper quam, a tristique risus est et ante.'),
(6, 3, 'Pete Jamison', 'assets/img/person-04.jpg', '2016-09-14', 4, 'Nam tincidunt mollis nibh at facilisis. Integer a orci a elit malesuada ultrices. Morbi facilisis, velit non fermentum laoreet, ligula dolor ullamcorper quam, a tristique risus est et ante.'),
(7, 3, 'Suzanne Green', 'assets/img/person-01.jpg', '2016-09-12', 5, 'Integer a orci a elit malesuada ultrices. Morbi facilisis, velit non fermentum laoreet, ligula dolor ullamcorper quam, a tristique risus est et ante.');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `item_id` int(128) NOT NULL,
  `schedule_id` int(128) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `location_title` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `location_address` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`schedule_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`item_id`, `schedule_id`, `date`, `time`, `location_title`, `location_address`) VALUES
(3, 1, '2016-12-05', '20:00:00', 'Town Square', '458 Brigth Street London'),
(3, 2, '2016-12-13', '18:00:00', 'Bristol Gallery', '87 Yellow Lane, Manhattan');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `item_id` int(32) NOT NULL,
  `tag` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`item_id`, `tag`) VALUES
(1, 'Wi-Fi'),
(1, 'Parking'),
(1, 'TV'),
(1, 'Vegetarian'),
(2, 'Balcony'),
(2, 'Smoking'),
(2, 'Vine List');

-- --------------------------------------------------------

--
-- Table structure for table `today_menu`
--

CREATE TABLE IF NOT EXISTS `today_menu` (
  `item_id` int(128) NOT NULL,
  `meal_id` int(128) NOT NULL AUTO_INCREMENT,
  `meal_type` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `meal` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`meal_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `today_menu`
--

INSERT INTO `today_menu` (`item_id`, `meal_id`, `meal_type`, `meal`) VALUES
(2, 1, 'Starter', 'Smoked Salmon, Classic Condiments, Brioche'),
(2, 2, 'Soup', 'Roasted Golden Beets, Goat Cheese, Hazelnut Granola'),
(2, 3, 'Main course', 'Napoleon of Rabbit Loin, Braised Leek, Fava Bean Puree'),
(1, 4, 'Main course', 'Napoleon of Rabbit Loin, Braised Leek, Fava Bean Puree');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
