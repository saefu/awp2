-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 17, 2016 at 02:47 PM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `air_minum`
--

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
  `kd_pelanggan` varchar(6) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `alamat` varchar(65) NOT NULL,
  `no_telpon` int(15) NOT NULL,
  PRIMARY KEY (`kd_pelanggan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`kd_pelanggan`, `nama`, `alamat`, `no_telpon`) VALUES
('p0001', 'syaiful', 'jl.kalipuro no 56', 98677543),
('p0002', 'heri', 'jl.agung n0 89 bwi', 98765442),
('p0004', 'wira andi kusuma', 'jl.joglangan no 23', 987654321),
('p0005', 'lia sari kuma', 'jl.wirang no 55 sobo', 857542222),
('p0006', 'andi grade', 'jl.lenje no 34 bwi', 987654332),
('p0007', 'ardi kusuna', 'jl.basuki rahmat no 58', 865442367),
('p0008', 'vila fredse', 'jl.mendut n0 34', 988566467),
('p0009', 'cindi lia sari', 'jl. jalanan mude no 99', 21474836),
('p0010', 'via leni rivita', 'jl.jaksa agung no 45', 987654321),
('p0011', 'henry agus salim', 'jl.koper no 23 bwi', 2147483647);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
