-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2014 at 08:42 PM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cumacuma`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(4) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(50) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Kategori 1'),
(2, 'Kategori 2'),
(3, 'Kategori 3'),
(4, 'Kategori 4');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE IF NOT EXISTS `setting` (
  `id_setting` int(3) NOT NULL AUTO_INCREMENT,
  `namashop` varchar(50) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `url` varchar(75) NOT NULL,
  `logo` varchar(40) NOT NULL,
  `telpon` varchar(25) NOT NULL,
  `email` varchar(70) NOT NULL,
  `fb` varchar(50) NOT NULL,
  `twitter` varchar(50) NOT NULL,
  `footer` varchar(100) NOT NULL,
  PRIMARY KEY (`id_setting`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id_setting`, `namashop`, `alamat`, `url`, `logo`, `telpon`, `email`, `fb`, `twitter`, `footer`) VALUES
(1, 'Cuma - Cuma | Temukan Semua yang Gratis Disini', 'Jalan Pegangsaan Timur, Nomer 17, Jakarta', 'http://localhost/cumacuma', 'assets/images/logo.png', '(021) 121545', 'marketing@cuma-cuma.co.id', 'feriharjulianto', 'feriharjulianto', '2014 <a href="#">cumacuma.co.id</a> - all rights reserved');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
