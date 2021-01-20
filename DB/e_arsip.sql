-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2020 at 10:04 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_arsip`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_skpd`
--

CREATE TABLE `tbl_skpd` (
  `id` int(11) NOT NULL,
  `numerator` varchar(256) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `no_polisi` int(11) NOT NULL,
  `jenis_model` varchar(256) NOT NULL,
  `tahun` year(4) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `id_numerator` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_skpd`
--

INSERT INTO `tbl_skpd` (`id`, `numerator`, `tgl_daftar`, `no_polisi`, `jenis_model`, `tahun`, `keterangan`, `id_numerator`) VALUES
(5, 'Vibrator', '2020-09-03', 999, 'Kendaraan Berat', 2020, 'Sadulur mantap', 696969),
(9, '123', '2020-09-09', 123, 'Kendaraan Ringan', 2020, 'test', 123456),
(10, '0456', '2020-08-07', 789, 'Kendaraan Ringan', 2018, 'Test Doang', 123),
(11, '1212', '2020-09-09', 1212, 'Kendaraan Berat', 2020, 'aasa', 123);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wajibpajak`
--

CREATE TABLE `tbl_wajibpajak` (
  `id` int(11) NOT NULL,
  `nomor_polisi` varchar(256) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `id_wajibpajak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_wajibpajak`
--

INSERT INTO `tbl_wajibpajak` (`id`, `nomor_polisi`, `nama`, `alamat`, `id_wajibpajak`) VALUES
(2, '123456', 'Dulur', 'Planet Pluto', 69),
(3, '1212', 'asasa', 'asas', 1212),
(4, '1212', 'dulur', 'asas12', 121);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nip` int(11) NOT NULL,
  `fullname` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `tipe_user` varchar(20) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nip`, `fullname`, `username`, `image`, `password`, `tipe_user`, `date_created`) VALUES
(16, 123, 'Rachmat Abdullah', 'rachmat', 'default.png', '$2y$10$bBPGgbjg3vyByHWS91zf1.kR5msMK5dlv/znpXUFMUsiM9rcYkOvO', 'Admin', 1599858480),
(17, 123, 'Panji Bangun Pangestu', 'panji', 'default.png', '$2y$10$vW4b1u7WpFW9W6.x2bUXMuAyJkcffJABEHpKS9Eq9VCp9rSo8krJq', 'Admin', 1599859042),
(18, 123, 'Sadulur', 'dulur', 'default.png', '$2y$10$cQQnAAC7BxTv2Q35ak6C2.FNOV38BLW0NAogSBM6jjq1Hg8eQHeWm', 'User', 1599859075);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_skpd`
--
ALTER TABLE `tbl_skpd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_wajibpajak`
--
ALTER TABLE `tbl_wajibpajak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_skpd`
--
ALTER TABLE `tbl_skpd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_wajibpajak`
--
ALTER TABLE `tbl_wajibpajak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
