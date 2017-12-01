-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-11-08 06:21:56
-- 服务器版本： 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `full`
--

-- --------------------------------------------------------

--
-- 表的结构 `icon`
--

CREATE TABLE `icon` (
  `id` int(10) NOT NULL,
  `iconname` varchar(255) NOT NULL,
  `sketch` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `com1` varchar(255) NOT NULL,
  `com2` varchar(255) NOT NULL,
  `introduction` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `icon`
--

INSERT INTO `icon` (`id`, `iconname`, `sketch`, `description`, `com1`, `com2`, `introduction`, `img`) VALUES
(1, 'icon-phone', 'Mobile Phone', 'The holographic mobile phone is an innovative which uses computer-generated holographic<br/>\r\n全息手机是一个创新的手持终端，使用计算机生成的全息\r\n                    ', 'our compter', 'COMILA STUDIO IS BASED IN TAI YUAN', '<div class="text2">优创科技有限公司以客户为需求，为客户创造价值的核心理念。对客户量身定做属于自己的产品策略、提供最优的解决方案。摒弃传统的理念，围绕当今科技的发展趋势，不断的持续创新、提升客户体验，为客户创造最大的价值。</div>\r\n<div class="text3">司本着“精诚致业，诚信为本，追求卓越”的宗旨,崇尚“以人为本”的管理思想，追求服务、诚信、专业的经营理念，博众之长、补己之短，使我们的公司更加完善，我们以专业和创新的理念，在金融、互联网等领域内拥有丰富的项目实施经验，已承接、实施完成了中国近二十个省、市和自治区的近百个项目。	\r\n</div>\r\n                    ', '/php/static/upload/17-11-08/about-img.png'),
(2, 'icon-shezhi', 'Set Up', 'The holographic mobile phone is an innovative which uses computer-generated holographic<br/>\r\n全息手机是一个创新的手持终端，使用计算机生成的全息\r\n                    ', '', '', '\r\n                    ', ''),
(3, 'icon-Love', 'Full Love', 'The holographic mobile phone is an innovative which uses computer-generated holographic<br/>\r\n					全息手机是一个创新的手持终端，使用计算机生成的全息\r\n                    ', '', '', '\r\n                    ', ''),
(4, 'icon-Love', 'Full Love', 'The holographic mobile phone is an innovative which uses computer-generated holographic<br/>\r\n					全息手机是一个创新的手持终端，使用计算机生成的全息\r\n                    ', '', '', '\r\n                    ', ''),
(5, 'icon-Support', 'Technical Support', '                    The holographic mobile phone is an innovative which uses computer-generated holographic<br/>\r\n全息手机是一个创新的手持终端，使用计算机生成的全息\r\n                                        ', 'The best project', 'Latest Project', ' View All Works                   \r\n                                        ', ''),
(7, '', '', '\r\n                    ', 'Cell phone hologram', 'The holographic mobile phone is an innovative', '\r\n                    ', '/php/static/upload/17-11-08/3.jpg'),
(8, '', '', '\r\n                    ', 'Projection hologram', 'the special directional display screen so that the eyes produce ', '\r\n                    ', '/php/static/upload/17-11-08/4.jpg'),
(9, '', '', '\r\n                    ', 'Holographic pyramid', 'The field characteristics of the display screen are analyzed', '\r\n                    ', '/php/static/upload/17-11-08/5.jpg'),
(10, '', '', '\r\n                    ', 'Interpretation of hologram', 'the influence of the vertical field of view on the reproduction speckle ', '\r\n                    ', '/php/static/upload/17-11-08/6.jpg'),
(11, 'icon-shejiao', '', '\r\n                    ', '', '', '\r\n                    ', ''),
(12, 'icon-icon', '', '\r\n                    ', '', '', '\r\n                    ', ''),
(13, 'icon-iconfontdiaocha', '', '\r\n                    ', '', '', '\r\n                    ', ''),
(14, 'icon-liebiao', '', '\r\n                    ', '', '', '\r\n                    ', ''),
(15, '', '', '\r\n                    ', 'Faction Blog', 'From The Blog', 'View All Call\r\n                    ', ''),
(16, '', '', '                    \r\n                                        ', 'Faction Blog', 'From The Blog', 'View All Call\r\n                                        ', ''),
(17, '', '', '\r\n                    ', 'Wechat communication ', 'Communication between old and young people is not so difficult as you think.', 'Keep Reading\r\n                    ', '/php/static/upload/17-11-08/7.jpg'),
(18, '', '', '\r\n                    ', 'Iphone online communication', 'To exchange views with comrades in confidence is conducive to the communication of ideas ', 'Keep Reading\r\n                    ', '/php/static/upload/17-11-08/8.jpg'),
(19, '', '', '                    \r\n                                        ', 'call of duty ,Ask for help', 'Mr. Nelson said he was one of the first lawmakers to seek help for drywall victims', '                    Keep Reading\r\n                                        ', '/php/static/upload/17-11-08/6.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `icon`
--
ALTER TABLE `icon`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `icon`
--
ALTER TABLE `icon`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
