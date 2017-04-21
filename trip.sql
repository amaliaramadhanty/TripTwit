-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2017 at 05:54 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trip`
--

-- --------------------------------------------------------

--
-- Table structure for table `twit`
--

CREATE TABLE IF NOT EXISTS `twit` (
  `id_twit` int(15) NOT NULL,
  `id_user` int(15) NOT NULL,
  `isi_twit` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `twit`
--

INSERT INTO `twit` (`id_twit`, `id_user`, `isi_twit`) VALUES
(1, 11, 'halooooo'),
(2, 11, 'assalamualaikum'),
(3, 11, 'assalamualaikum'),
(4, 11, 'alhamdulillah saya telah lulus. terimakasih semua');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID_USER` int(15) NOT NULL,
  `USERNAME` varchar(25) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL,
  `NAMA` varchar(25) NOT NULL,
  `NO_KTP` varchar(25) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `NO_TELP` varchar(15) NOT NULL,
  `LEVEL` varchar(10) NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID_USER`, `USERNAME`, `PASSWORD`, `NAMA`, `NO_KTP`, `EMAIL`, `NO_TELP`, `LEVEL`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '', '', '', 'admin'),
(10, 'kutil', '65cdb45250e78759669f6ec455a7435d', 'kutil', '12345', 'kutil@gmail.com', '123445', ''),
(11, 'amalia', '51e0a46ceb9b9f53a96281bd6b4f38e8', 'Amalia Ramadhanty', '1234567890', 'aamaliaarra@hotmail.com', '715032', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `twit`
--
ALTER TABLE `twit`
  ADD PRIMARY KEY (`id_twit`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_USER`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `twit`
--
ALTER TABLE `twit`
  MODIFY `id_twit` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID_USER` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
