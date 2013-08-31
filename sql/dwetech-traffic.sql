-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.27 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             8.0.0.4478
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table dwetech-traffic.driver_profile
CREATE TABLE IF NOT EXISTS `driver_profile` (
  `id` int(10) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `car_model` varchar(50) DEFAULT NULL,
  `car_brand` varchar(50) DEFAULT NULL,
  `driving_license` varchar(255) DEFAULT NULL,
  `car_photo` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `rank` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table dwetech-traffic.driver_profile: ~0 rows (approximately)
/*!40000 ALTER TABLE `driver_profile` DISABLE KEYS */;
/*!40000 ALTER TABLE `driver_profile` ENABLE KEYS */;


-- Dumping structure for table dwetech-traffic.reviews
CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int(10) DEFAULT NULL,
  `type` enum('1','2') DEFAULT NULL COMMENT 'Tells whatever the review is for driver or rider. 1 = rider, 2 = driver',
  `review_for` int(11) DEFAULT NULL,
  `review_by` int(11) DEFAULT NULL,
  `review` text,
  `rating` int(11) DEFAULT NULL COMMENT 'Rating out of 10',
  `review_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table dwetech-traffic.reviews: ~0 rows (approximately)
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;


-- Dumping structure for table dwetech-traffic.rider_profile
CREATE TABLE IF NOT EXISTS `rider_profile` (
  `id` int(10) DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `contact_no` varchar(50) DEFAULT NULL,
  `rank` int(10) DEFAULT NULL,
  `facebook` varchar(50) DEFAULT NULL,
  `twitter` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table dwetech-traffic.rider_profile: ~0 rows (approximately)
/*!40000 ALTER TABLE `rider_profile` DISABLE KEYS */;
/*!40000 ALTER TABLE `rider_profile` ENABLE KEYS */;


-- Dumping structure for table dwetech-traffic.settings
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `label` varchar(50) DEFAULT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table dwetech-traffic.settings: 4 rows
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` (`id`, `name`, `label`, `value`) VALUES
	(1, 'admin_email', 'Admin Email', 'info@dwetech.com'),
	(2, 'admin_password', 'Admin Passwod', '4297f44b13955235245b2497399d7a93'),
	(3, 'admin_lastlogin', 'Admin Last Login', 'May 27, 2013'),
	(4, 'website_name', 'Website Name', 'Dwetech Traffic');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;


-- Dumping structure for table dwetech-traffic.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL,
  `address` text,
  `registration_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
