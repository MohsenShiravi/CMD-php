-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 28, 2021 at 04:28 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

DROP TABLE IF EXISTS `admin_tbl`;
CREATE TABLE IF NOT EXISTS `admin_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`id`, `username`, `password`, `name`, `lastname`) VALUES
(1, 'admin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'علیرضا', 'همدانی'),
(2, 'admin1', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'حسین', 'کابلی');

-- --------------------------------------------------------

--
-- Table structure for table `menu_tbl`
--

DROP TABLE IF EXISTS `menu_tbl`;
CREATE TABLE IF NOT EXISTS `menu_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `url` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `status` int(11) NOT NULL,
  `chid` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `menu_tbl`
--

INSERT INTO `menu_tbl` (`id`, `title`, `url`, `status`, `chid`, `sort`) VALUES
(1, 'خانه', '#', 1, 0, 1),
(2, 'درباره ما', '#', 1, 0, 2),
(3, 'تماس با ما', 'localhost:81/php/CMS/contact', 1, 0, 6);

-- --------------------------------------------------------

--
-- Table structure for table `news_cat`
--

DROP TABLE IF EXISTS `news_cat`;
CREATE TABLE IF NOT EXISTS `news_cat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `news_cat`
--

INSERT INTO `news_cat` (`id`, `title`) VALUES
(1, 'کشاورزی');

-- --------------------------------------------------------

--
-- Table structure for table `news_tbl`
--

DROP TABLE IF EXISTS `news_tbl`;
CREATE TABLE IF NOT EXISTS `news_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `text` text COLLATE utf8_persian_ci NOT NULL,
  `news_cat` int(11) NOT NULL,
  `img` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `date` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `news_tbl`
--

INSERT INTO `news_tbl` (`id`, `title`, `text`, `news_cat`, `img`, `date`) VALUES
(1, 'مزارع گل رز زرد', '<p>نننننننننننننننننننننتب1 فقببب</p>\r\n', 1, '../images/news/news-1926173384/news-1751861576.jpg', '2011');

-- --------------------------------------------------------

--
-- Table structure for table `product_cat`
--

DROP TABLE IF EXISTS `product_cat`;
CREATE TABLE IF NOT EXISTS `product_cat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `status` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `product_cat`
--

INSERT INTO `product_cat` (`id`, `title`, `status`, `sort`) VALUES
(1, 'مرکبات', 1, 1),
(2, 'صیفی جات', 1, 2),
(3, 'میوه جات', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `product_tbl`
--

DROP TABLE IF EXISTS `product_tbl`;
CREATE TABLE IF NOT EXISTS `product_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `text` text COLLATE utf8_persian_ci NOT NULL,
  `procat` int(11) NOT NULL,
  `img` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_tbll`
--

DROP TABLE IF EXISTS `product_tbll`;
CREATE TABLE IF NOT EXISTS `product_tbll` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `text` text COLLATE utf8_persian_ci NOT NULL,
  `procat` int(11) NOT NULL,
  `img` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `product_tbll`
--

INSERT INTO `product_tbll` (`id`, `title`, `text`, `procat`, `img`) VALUES
(1, 'لوبیا', '<p>لوبیالوبیالوبیالوبیالوبیالوبیالوبیالوبیالوبیالوبیالوبیالوبیالوبیالوبیالوبیالوبیالوبیالوبیالوبیالوبیا</p>\r\n', 2, '../images/products//product-730061232.jpg'),
(2, 'برنج', '<p>برنج&nbsp;&nbsp;برنج&nbsp;&nbsp;برنج&nbsp;&nbsp;برنج&nbsp;&nbsp;برنج&nbsp;&nbsp;برنج&nbsp;&nbsp;برنج&nbsp;&nbsp;برنج&nbsp;&nbsp;برنج&nbsp;&nbsp;برنج&nbsp;برنج&nbsp;برنج&nbsp;برنج&nbsp;برنج&nbsp;برنج&nbsp;برنج&nbsp;برنج&nbsp;برنج&nbsp;برنج&nbsp;برنج&nbsp;برنج&nbsp;برنج&nbsp;برنج&nbsp;برنج&nbsp;برنج&nbsp;برنج&nbsp;برنج&nbsp;برنج&nbsp;برنج&nbsp;برنج&nbsp;برنج&nbsp;برنج&nbsp;</p>\r\n', 2, '../images/products//product-1306850767.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `title` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `description` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `brand1` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `brand2` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `textbaner` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `title_product` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `title_news` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `copyright` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `programer` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `url_programer` varchar(50) COLLATE utf8_persian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`title`, `description`, `brand1`, `brand2`, `textbaner`, `title_product`, `title_news`, `copyright`, `programer`, `url_programer`) VALUES
('سایت مزرعه', 'سایت من', 'مزرعه من', 'محسن', 'به وب سایت تمرینی مدیریت محتوا خوش امدید', 'محصولات', 'اخبار وب سایت', 'این سایت متعلق به تمرین  قسمت مدیریت محتوای وب سایت  می باشد.محسن شیروی', 'برنامه نویسان', '#');

-- --------------------------------------------------------

--
-- Table structure for table `widget2_tbl`
--

DROP TABLE IF EXISTS `widget2_tbl`;
CREATE TABLE IF NOT EXISTS `widget2_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `text` text COLLATE utf8_persian_ci NOT NULL,
  `img` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `widget2_tbl`
--

INSERT INTO `widget2_tbl` (`id`, `title`, `text`, `img`) VALUES
(1, 'تتارتاتالتل', '<p>البتاتالتبالتالتلاتاتتلاتبالا</p>\r\n', '../images/widget2//widget2-777121847.png'),
(2, 'سایت کشاورزی من', '<p>هعععخهعخهعخعهخعهخعهخهعخخن</p>\r\n', '../images/widget2/widget2-327381947/widget2-2029588920.png'),
(3, 'menu1', '<p>مممممممممممممممممممممممممم</p>\r\n', '../images/widget2/widget2-1906893222/widget2-2072840406.png'),
(4, 'سایت کشاورزی من', '<p>عغههههههههههههههههههههههههههههههههههههه</p>\r\n', '../images/widget2/widget2-237372225/widget2-1230969740.png');

-- --------------------------------------------------------

--
-- Table structure for table `widget_tbl`
--

DROP TABLE IF EXISTS `widget_tbl`;
CREATE TABLE IF NOT EXISTS `widget_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `text` text COLLATE utf8_persian_ci NOT NULL,
  `img` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `url_details` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `widget_tbl`
--

INSERT INTO `widget_tbl` (`id`, `title`, `text`, `img`, `url_details`) VALUES
(1, 'لوبیا', '<p>زربیالابیابابیابیابیابی</p>\r\n', '../images/widget/widget-969549180/widget-1101475935.jpg', '#'),
(2, 'برنج', '<p>التالتالتالتالتاتغتغفتغف غفعغفعغفع&nbsp; غفعغفعغفعغفعغف غفعغفعغفعغفعغفع</p>\r\n', '../images/widget/widget-2134406084/widget-930149449.jpg', '#'),
(3, 'پرتقال', '<p>ااااااااااااااااااااااااااااااااااااااااااااااااااااا</p>\r\n', '../images/widget/widget-1043394656/widget-2010991215.jpg', '#');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
