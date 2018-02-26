-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2018 at 03:43 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `useradm` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `pwd` varchar(25) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`useradm`, `nama`, `pwd`, `level`) VALUES
('admin', 'relia', '123456', 1),
('tesia', 'tesia', '123', 2);

-- --------------------------------------------------------

--
-- Table structure for table `plgn`
--

CREATE TABLE IF NOT EXISTS `plgn` (
  `serviceID` varchar(40) NOT NULL,
  `noID` varchar(40) DEFAULT NULL,
  `namaPlgn` varchar(40) DEFAULT NULL,
  `order` enum('aktivasi','modifikasi','isolir') DEFAULT NULL,
  `status` enum('active','inactive','suspend') DEFAULT NULL,
  `accBill` varchar(40) DEFAULT NULL,
  `paket` enum('medium','small','large') DEFAULT NULL,
  `tgl_pesan` date DEFAULT NULL,
  `tgl_akhir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plgn`
--

INSERT INTO `plgn` (`serviceID`, `noID`, `namaPlgn`, `order`, `status`, `accBill`, `paket`, `tgl_pesan`, `tgl_akhir`) VALUES
('123', '123', 'qwer', 'aktivasi', 'inactive', '11233', 'large', '2018-01-31', '2018-02-10'),
('232232323232', '2323232', 'dsdsds', 'modifikasi', 'inactive', '32323232', 'large', '2018-01-31', '2018-03-01'),
('80015878530000000010  ', '470535028881 ', 'SOGO INDONESIA', 'aktivasi', 'active', '8151858130', 'small', '2017-12-18', '2018-12-18'),
('80016007220000000010 ', '470816685195  ', 'MCS INFOMEDIA', 'isolir', 'suspend', '8151858130', 'small', '2017-03-14', '2017-10-31');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `usernm` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `pass` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`usernm`, `nama`, `pass`) VALUES
('rijaul', 'rija', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
 ADD PRIMARY KEY (`useradm`);

--
-- Indexes for table `plgn`
--
ALTER TABLE `plgn`
 ADD PRIMARY KEY (`serviceID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`usernm`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
