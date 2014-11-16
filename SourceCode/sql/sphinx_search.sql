-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.1.37 - Source distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             8.1.0.4545
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for travel
CREATE DATABASE IF NOT EXISTS `sphinx_search` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `sphinx_search`;

-- Dumping structure for table travel.function_info
CREATE TABLE IF NOT EXISTS `function_info` (
  `id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sequence` int(11) NOT NULL,
  `url` varchar(100) NOT NULL,
  `module` varchar(50) NOT NULL,
  `is_show` smallint(6) NOT NULL,
  `is_enabled` smallint(6) NOT NULL,
  `icon_module` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table travel.function_info: 2 rows
/*!40000 ALTER TABLE `function_info` DISABLE KEYS */;
INSERT INTO `function_info` (`id`, `name`, `sequence`, `url`, `module`, `is_show`, `is_enabled`, `icon_module`) VALUES
	('admin', 'Admin', 1, '/admin', 'Data Pengguna', 1, 1, 'icon-user'),
	('member', 'Member', 2, '/member', 'Data Pengguna', 1, 1, 'icon-user');
/*!40000 ALTER TABLE `function_info` ENABLE KEYS */;


-- Dumping structure for table travel.order
CREATE TABLE IF NOT EXISTS `order` (
  `id_member` varchar(20) NOT NULL,
  `id_jadwal` varchar(25) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `id_order` varchar(10) NOT NULL,
  `order_status` int(11) NOT NULL,
  `order_date` datetime NOT NULL,
  `order_exp` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table travel.order: 0 rows
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
/*!40000 ALTER TABLE `order` ENABLE KEYS */;

-- Dumping structure for table travel.privilege_info
CREATE TABLE IF NOT EXISTS `privilege_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_group_id` varchar(50) DEFAULT NULL,
  `function_info_id` varchar(50) DEFAULT NULL,
  `is_allow_read` smallint(6) DEFAULT '0',
  `is_allow_write` smallint(6) DEFAULT '0',
  `is_allow_update` smallint(6) DEFAULT '0',
  `is_allow_delete` smallint(6) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table travel.privilege_info: 0 rows
/*!40000 ALTER TABLE `privilege_info` DISABLE KEYS */;
/*!40000 ALTER TABLE `privilege_info` ENABLE KEYS */;

-- Dumping structure for table travel.user_group
CREATE TABLE IF NOT EXISTS `user_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table travel.user_group: 2 rows
/*!40000 ALTER TABLE `user_group` DISABLE KEYS */;
INSERT INTO `user_group` (`id`, `name`) VALUES
	(1, 'Admin'),
	(3, 'customer');
/*!40000 ALTER TABLE `user_group` ENABLE KEYS */;


-- Dumping structure for table travel.user_info
CREATE TABLE IF NOT EXISTS `user_info` (
  `username` varchar(25) NOT NULL,
  `password` varchar(8) NOT NULL,
  `level` varchar(20) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table travel.user_info: 2 rows
/*!40000 ALTER TABLE `user_info` DISABLE KEYS */;
INSERT INTO `user_info` (`username`, `password`, `level`) VALUES
	('admin', 'asdas', '3'),
	('bayusantoso', 'asdasda', '1');
/*!40000 ALTER TABLE `user_info` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
