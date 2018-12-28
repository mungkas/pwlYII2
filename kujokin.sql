-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2018 at 12:52 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kujokin`
--

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1545351745),
('m130524_201442_init', 1545351749);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_makan`
--

CREATE TABLE `tbl_makan` (
  `deks` varchar(1000) NOT NULL,
  `id` int(5) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `harga` int(20) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_makan`
--

INSERT INTO `tbl_makan` (`deks`, `id`, `nama`, `harga`, `gambar`) VALUES
('', 6, 'mie ayam', 12000, 'thumb-1920-791882.png'),
('', 7, 'soto', 20000, 'sao-kirito-wallpaper_667854.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_minum`
--

CREATE TABLE `tbl_minum` (
  `deks` varchar(1000) NOT NULL,
  `id` int(5) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `harga` int(20) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_minum`
--

INSERT INTO `tbl_minum` (`deks`, `id`, `nama`, `harga`, `gambar`) VALUES
('', 1, 'Es teh', 3000, 'kirito 2.png'),
('', 2, 'Es Jeruk', 3500, 'thumb-1920-791882.png'),
('', 3, 'Es susu', 4000, 'Sword-Art-Online-SAO-Kirito-Decal_1024x1024.jpg'),
('', 4, 'Jus Melon', 7000, '791241.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'mungkas', 'Xtz1ZhFHrfYvA9L73tarUnae4CVPDv1o', '$2y$13$/9rHslCdA92HykofgBQ9E.11d98WZMQiXP/EZoH8l1bEzhNatArEC', NULL, 'hidayatpamungkas97@gmail.com', 10, 1545351849, 1545351849);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `tbl_makan`
--
ALTER TABLE `tbl_makan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_minum`
--
ALTER TABLE `tbl_minum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_makan`
--
ALTER TABLE `tbl_makan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_minum`
--
ALTER TABLE `tbl_minum`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
