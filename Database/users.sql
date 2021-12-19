-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3309
-- Generation Time: Jun 21, 2020 at 12:56 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intern`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `Contact` bigint(20) DEFAULT NULL,
  `City` varchar(25) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `password`, `Contact`, `City`, `address`) VALUES
(65, 'kratos1599@gmail.com', 'lavkesh', '25f9e794323b453885f5181f1b624d0b', 123456789, 'Delhi', ''),
(66, 'aura1@gmail.com', 'aura', '25f9e794323b453885f5181f1b624d0b', 123456789, 'cdd', ''),
(67, 'ras110007@gmail.com', 'aura', '1bbd886460827015e5d605ed44252251', 1, 'dfdf', ''),
(68, 'aura2@gmail.com', 'aura', '1bbd886460827015e5d605ed44252251', 2, 'sdd', ''),
(69, 'aura2@fmaf.com', 'ansdias', '1bbd886460827015e5d605ed44252251', 1, 'dsfs', ''),
(70, 'ara23@kasd.com', 'opo', '1bbd886460827015e5d605ed44252251', 1111, 'sads', 'sads'),
(71, 'jogvj@jo.com', 'nrgod', '1bbd886460827015e5d605ed44252251', 116, 'sdfs', 'sdefs'),
(72, 'asd@jo.com', 'joaks', '1bbd886460827015e5d605ed44252251', 4, 'dg', 'sdf'),
(73, 'jsodfcjsd@kjo.com', 'rgdjo', 'ed2b1f468c5f915f3f1cf75d7068baae', 1, 'sdcdsASCS', 'SCDCSC'),
(74, 'sdfndsk@no.com', 'drgfjo', '25f9e794323b453885f5181f1b624d0b', 1, 'asds', 'sdcfsd'),
(75, 'jsdof@c.mol', 'jodsfd', 'e10788358ad76a4e03b0904d75dae422', 444, 'sd', 'dsf'),
(76, 'jhgd@jkkl.com', 'sefhj', '1bbd886460827015e5d605ed44252251', 2, 'sddf', 'egfsd'),
(77, 'sdsji@ids.com', 'faefsebu', '94392fc7dabdcef8c08795caf78f7f31', 45456, 'dsfs', 'sefsd'),
(78, 'lav13@gmail.com', 'iamlav', 'cd8a095c4d735f403b9e772102f17d6f', 101, 'Delhi ', '1100 gulabi bagh'),
(79, 'a@1.com', 'L', '55722118e8b7648e5385b65528a77712', 1, 's', 's'),
(80, '1@1.com', 'a', 'cd8a095c4d735f403b9e772102f17d6f', 1, 'a', 'a'),
(81, 'q@q.com', 'q', '11111111', 1, 'a', 'a'),
(82, '0@0.com', 'Lavkesh', 'dd4b21e9ef71e1291183a46b913ae6f2', 23640650, 'Delhi', 'Delhi');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
