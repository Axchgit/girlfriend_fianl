-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1:3306
-- 生成日期： 2019-06-26 01:12:31
-- 服务器版本： 5.7.24
-- PHP 版本： 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `gzxt`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `a_name` varchar(50) NOT NULL,
  `pw` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `a_name`, `pw`) VALUES
(1, 'lm', '1'),
(2, 'admin', '123'),
(3, 'www', '123'),
(4, 'qqq', '123'),
(5, 'wwww', '1233'),
(6, 'qqqqq', '123'),
(7, 'qqqqqq', '123'),
(8, 'www', '123'),
(9, 'www', '123'),
(10, 'lm', '1'),
(11, 'wcwcw', '123'),
(12, 'xch', '123');

-- --------------------------------------------------------

--
-- 表的结构 `student_message`
--

DROP TABLE IF EXISTS `student_message`;
CREATE TABLE IF NOT EXISTS `student_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) DEFAULT NULL,
  `sno` varchar(20) DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `picture` varchar(100) DEFAULT NULL,
  `class` varchar(30) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `work` varchar(10) DEFAULT NULL,
  `price` varchar(10) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `student_message`
--

INSERT INTO `student_message` (`id`, `name`, `sno`, `sex`, `picture`, `class`, `tel`, `password`, `work`, `price`, `date_time`) VALUES
(4, '2', '2', '女', 'img/jack.png', '111', '1111', '11', '11', '11', '2019-06-05 00:00:00'),
(8, '李四', '1002', '女', 'img/jane.png', '11', '11', '1', '123', '123', '2019-06-27 00:00:00'),
(7, '张三', '1001', '男', 'img/jacques.png', '11', '11', '1', '1', '123', '2019-06-26 00:00:00'),
(9, '王五', '1003', '男', 'img/james.png', '11', '11', '1', '123', '123', '2019-06-26 00:00:00'),
(10, '韩梅梅', '1004', '女', 'img/jeane.png', '320', '1311', '1', '123', '123', '2019-06-13 00:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
