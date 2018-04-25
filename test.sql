-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 25, 2018 at 03:36 PM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `created_at`, `updated_at`) VALUES
(23, 'test test', 'rvmehta745@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 123456, '2018-04-24 14:01:23', '0000-00-00 00:00:00'),
(24, 'test test', 'nicolecross1579@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 123456, '2018-04-24 14:02:35', '0000-00-00 00:00:00'),
(25, 'test test', 'nicolecross1579@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 123456, '2018-04-24 14:02:52', '0000-00-00 00:00:00'),
(26, 'test test', 'nicolecross1579@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 123456, '2018-04-24 14:03:32', '0000-00-00 00:00:00'),
(27, 'test test', 'nicolecross1579@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 123456, '2018-04-24 14:04:06', '0000-00-00 00:00:00'),
(28, 'test test', 'nicolecross1579@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 123456, '2018-04-24 14:04:36', '0000-00-00 00:00:00'),
(29, 'test test', 'nicolecross1579@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 123456, '2018-04-24 14:04:53', '0000-00-00 00:00:00'),
(30, 'Ravi Mehta', 'nicolecross1579@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 123456, '2018-04-24 14:06:31', '0000-00-00 00:00:00'),
(31, 'Ravi Mehta', 'nicolecross1579@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 23432, '2018-04-24 14:07:08', '0000-00-00 00:00:00'),
(32, 'test test', 'nicolecross1579@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 123456, '2018-04-24 14:11:39', '0000-00-00 00:00:00'),
(33, 'test test', 'nicolecross1579@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1234567891, '2018-04-24 14:11:56', '0000-00-00 00:00:00'),
(34, 'test test', 'rvmehta745@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1234567891, '2018-04-24 14:13:51', '0000-00-00 00:00:00'),
(35, 'test test', 'rvmehta745@gmail.com', '6055ae67f08611ae52e73c537d425683', 2432, '2018-04-24 14:19:04', '0000-00-00 00:00:00'),
(36, 'test test', 'rvmehta745@gmail.com', '536de715e280213fdc9174308172570f', 123456, '2018-04-25 09:54:19', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
