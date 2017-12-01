-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-11-08 06:22:03
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
-- 表的结构 `new1`
--

CREATE TABLE `new1` (
  `nid` int(10) NOT NULL,
  `title1` varchar(255) NOT NULL,
  `title2` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL,
  `date1` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `cid` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `new1`
--

INSERT INTO `new1` (`nid`, `title1`, `title2`, `notes`, `date1`, `content`, `thumb`, `cid`) VALUES
(1, 'The Company characteristics', '公/司/特/色', '公司小记', '<li class="qu"></li> 					<li>2017-10-6</li> 					<li class="qu"></li> 					<li>252626人浏览</li>', '<div class="xiao1">\r\n全息摄影亦称：“全息照相”，一种利用波的干涉记录被摄物体反射（或透射）光波中信息（振幅、相位）的照相技术\r\n</div>\r\n<div class="xiao2">\r\nHolographic photography is also called " holography ", a photographic technique used to record the information ( amplitude, phase ) in the reflection ( or transmission ) \r\n</div>\r\n                    ', '/php/static/upload/17-11-08/9.jpg', '1'),
(2, 'The Company characteristics', '公/司/特/色', '公司小记', '<li class="qu"></li> 					<li style="color: #fff;">2017-10-6</li> 					<li class="qu"></li> 					<li style="color: #fff;">252626人浏览</li>', '<div class="xiao1" style="color: #fff;">\r\n全息摄影是通过一束参考光和被摄物体上反射的光叠加在感光片上产生干涉条纹而成\r\n</div>\r\n<div class="xiao2" style="color: #fff;">\r\nHolographic photography is formed by superimposing a beam of reference light and reflected light on the subject on the sensitive plate.\r\n</div>\r\n                    ', '/php/static/upload/17-11-08/10.jpg', '1'),
(3, 'The Company characteristics', '公/司/特/色', '公司小记', '<li class="qu"></li> 					<li>2017-10-6</li> 					<li class="qu"></li> 					<li>252626人浏览</li>', '<div class="xiao1">\r\n全息摄影不仅记录被摄物体反射光波的振幅（强度），而且还记录反射光波的相对相位。\r\n</div>\r\n<div class="xiao2">\r\nHolographic photography not only records the amplitude ( intensity ) of the reflected light from the subject, but also records the relative phase of the reflected light.\r\n</div>\r\n                    ', '/php/static/upload/17-11-08/11.jpg', '1'),
(4, '', '', '公司小记', '<li class="qu"></li> 					<li>2017-10-6</li> 					<li class="qu"></li> 					<li>252626人浏览</li>', '<div class="xiao1">\r\n全息摄影亦称：“全息照相”，一种利用波的干涉记录被摄物体反射（或透射）光波中信息（振幅、相位）的照相技术\r\n</div>\r\n<div class="xiao2">\r\nHolographic photography is also called " holography ", a photographic technique used to record the information ( amplitude, phase ) in the reflection ( or transmission ) \r\n</div>\r\n                    ', '/php/static/upload/17-11-08/3.jpg', '1'),
(5, '', '', '公司小记', '<li class="qu"></li> 					<li style="color: #fff;">2017-10-6</li> 					<li class="qu"></li> 					<li style="color: #fff;">252626人浏览</li>', '<div class="xiao1" style="color: #fff;">\r\n全息摄影是通过一束参考光和被摄物体上反射的光叠加在感光片上产生干涉条纹而成\r\n</div>\r\n<div class="xiao2" style="color: #fff;">\r\nHolographic photography is formed by superimposing a beam of reference light and reflected light on the subject on the sensitive plate.\r\n</div>\r\n                    ', '/php/static/upload/17-11-08/3.png', '1'),
(6, '', '', '公司小记', '<li class="qu"></li> 					<li>2017-10-6</li> 					<li class="qu"></li> 					<li>252626人浏览</li>', '<div class="xiao1">\r\n全息摄影不仅记录被摄物体反射光波的振幅（强度），而且还记录反射光波的相对相位。\r\n</div>\r\n<div class="xiao2">\r\nHolographic photography not only records the amplitude ( intensity ) of the reflected light from the subject, but also records the relative phase of the reflected light.\r\n</div>\r\n                    ', '/php/static/upload/17-11-08/4.png', '1'),
(7, '', '', '公司小记', '<li class="qu"></li> 					<li>2017-10-6</li> 					<li class="qu"></li> 					<li>252626人浏览</li>', '<div class="xiao1">\r\n全息摄影不仅记录被摄物体反射光波的振幅（强度），而且还记录反射光波的相对相位。\r\n</div>\r\n<div class="xiao2">\r\nHolographic photography not only records the amplitude ( intensity ) of the reflected light from the subject, but also records the relative phase of the reflected light.\r\n</div>\r\n                    ', '/php/static/upload/17-11-08/5.jpg', '1'),
(8, '', '', '公司小记', '<li class="qu"></li> 					<li style="color: #fff;">2017-10-6</li> 					<li class="qu"></li> 					<li style="color: #fff;">252626人浏览</li>', '<div class="xiao1" style="color: #fff;">\r\n全息摄影是通过一束参考光和被摄物体上反射的光叠加在感光片上产生干涉条纹而成\r\n</div>\r\n<div class="xiao2" style="color: #fff;">\r\nHolographic photography is formed by superimposing a beam of reference light and reflected light on the subject on the sensitive plate.\r\n</div>\r\n                    ', '/php/static/upload/17-11-08/6.jpg', '1'),
(9, '', '', '公司小记', '<li class="qu"></li> 					<li>2017-10-6</li> 					<li class="qu"></li> 					<li>252626人浏览</li>', '<div class="xiao1">\r\n全息摄影不仅记录被摄物体反射光波的振幅（强度），而且还记录反射光波的相对相位。\r\n</div>\r\n<div class="xiao2">\r\nHolographic photography not only records the amplitude ( intensity ) of the reflected light from the subject, but also records the relative phase of the reflected light.\r\n</div>\r\n                    ', '/php/static/upload/17-11-08/11.jpg', '1'),
(10, '', '', '公司小记', '<li class="qu"></li> 					<li>2017-10-6</li> 					<li class="qu"></li> 					<li>252626人浏览</li>', '<div class="xiao1">\r\n全息摄影不仅记录被摄物体反射光波的振幅（强度），而且还记录反射光波的相对相位。\r\n</div>\r\n<div class="xiao2">\r\nHolographic photography not only records the amplitude ( intensity ) of the reflected light from the subject, but also records the relative phase of the reflected light.\r\n</div>\r\n                    ', '/php/static/upload/17-11-08/10.jpg', '1'),
(11, '', '', '公司小记', '<li class=', '                   <div class="xiao1" style="color: #fff;">\r\n全息摄影是通过一束参考光和被摄物体上反射的光叠加在感光片上产生干涉条纹而成\r\n</div>\r\n<div class="xiao2" style="color: #fff;">\r\nHolographic photography is formed by superimposing a beam of reference light and reflected light on the subject on the sensitive plate.\r\n</div>\r\n                                    ', '/php/static/upload/17-11-08/11.jpg', '1'),
(13, 'How do we define success?', '联系我们', '', '', '<div class="home4">\r\n			<div class="home4-1">\r\n				What we make is not merely the product of focus group tests, but of observing and honoring how individuals choose to interact with technology. Our customers guide everything we do at HTC, and it’s this commitment that defines the company. By placing customers at the heart of everything we do, we make things simple and go out of our way to accomplish the impossible by exceeding expectations and invoking surprise.\r\n			</div>\r\n			<div class="home4-2">\r\n				<div class="home4-3">\r\n					Success is defined by:\r\n				</div>\r\n				<div class="home4-4">\r\n					Our recognition as a top smartphone provider Providing a simple yet compelling experience The strength of our brand<br/><br/>\r\n\r\n					Being seen as a continuous innovator Ranking the highest in customer satisfaction Being an inspiring place to work\r\n				</div>\r\n			</div>\r\n		</div>', '/php/static/upload/17-11-08/2.png', '3'),
(12, '', '', '公司小记', '<li class="qu"></li> 					<li>2017-10-6</li> 					<li class="qu"></li> 					<li>252626人浏览</li>', '<div class="xiao1">\r\n全息摄影亦称：“全息照相”，一种利用波的干涉记录被摄物体反射（或透射）光波中信息（振幅、相位）的照相技术\r\n</div>\r\n<div class="xiao2">\r\nHolographic photography is also called " holography ", a photographic technique used to record the information ( amplitude, phase ) in the reflection ( or transmission ) \r\n</div>\r\n                    ', '/php/static/upload/17-11-08/5.jpg', '1'),
(14, '', '', '', '', ' <div class="home7">\r\n			<div class="home7-1">Honest</div>\r\n			<div class="home7-2">we always do what we say and say what we do.</div>	\r\n			<div class="home7-1">Humble</div>\r\n			<div class="home7-2">we do brilliant things but we are never arrogant or boastful about it.\r\n			</div>	\r\n			<div class="home7-1">Simple</div>\r\n			<div class="home7-2">we make things as clear, intuitive and understandable as possible.\r\n			</div>	\r\n			<div class="home7-1">Dynamic</div>\r\n			<div class="home7-2">we are bold in our actions and quick to respond.\r\n			</div>	\r\n		</div>          ', '/php/static/upload/17-11-08/3.png', '3'),
(15, '', '', '', '', '                   <div class="home8-1">\r\n				CORPORATE RESPONSIBILITY\r\n			</div>\r\n			<div class="home8-2">\r\n				by helping schools to carry out character education for children and youths. We promote character-building programs and classes as part of an effort to encourage civic participation in Taiwan. Since 2008, the foundation’s Pan Shi (translation “Bedrock”) Education Project has provided a total of NT$ 24 million in funding, training and scholarships for 768 different school\r\n</div>\r\n                                    ', '/php/static/upload/17-11-08/4.png', '3'),
(16, '', '', '', '', '\r\n                    ', '/php/static/upload/17-11-08/5.png', '4'),
(17, '', '', '', '', '<div class="home2-2">\n				粉丝见面会\n				<span>\n					Whether it is holographic photography, or the earliest silver, their mysteries are recorded in the light. All light has three properties, which are the intensity of light, the color of light and the direction of light. Early silver photography and black-and-white photographs can only record light and dark changes, while color photographs can reflect the color of light by \n				</span>\n			</div>\n                    ', '/php/static/upload/17-11-08/6.png', '4'),
(18, '', '', '', '', '                   <div class="home3-2">\r\n				社区应用\r\n				<span>\r\n					by laser technology, it can record the direction of light incident to the object, and vividly reproduce the real scene of the object in three-dimensional space.\r\n				</span>\r\n			</div>\r\n                                    ', '/php/static/upload/17-11-08/7.png', '4'),
(19, '', '', '', '', '                   <div class="home4-2">\r\n				社区游戏\r\n				<span>\r\n					Whether it is holographic photography, or the earliest silver, their mysteries are recorded in the light. All light has three properties, which are the intensity of light, the color of light and the direction of light.\r\n				</span>\r\n			</div>\r\n                                    ', '/php/static/upload/17-11-08/8.png', '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `new1`
--
ALTER TABLE `new1`
  ADD PRIMARY KEY (`nid`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `new1`
--
ALTER TABLE `new1`
  MODIFY `nid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
