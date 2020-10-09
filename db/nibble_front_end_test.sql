-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2020 at 06:48 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nibble_front_end_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(5) NOT NULL,
  `name_menu` varchar(25) NOT NULL,
  `link_menu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `name_menu`, `link_menu`) VALUES
(1, 'HOME', '#'),
(2, 'ABOUT', '#'),
(3, 'PRICING', '#'),
(4, 'GALLERY', '#'),
(5, 'PAGES', '#'),
(6, 'BLOG', '#'),
(7, 'CONTACT', '#');

-- --------------------------------------------------------

--
-- Table structure for table `submenu`
--

CREATE TABLE `submenu` (
  `id_submenu` int(5) NOT NULL,
  `id_menu` int(5) NOT NULL,
  `name_submenu` varchar(25) NOT NULL,
  `link_submenu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `submenu`
--

INSERT INTO `submenu` (`id_submenu`, `id_menu`, `name_submenu`, `link_submenu`) VALUES
(1, 6, 'BLOG', '#'),
(2, 6, 'SINGLE-BLOG', '#'),
(3, 5, 'PAGES - 1', '#'),
(4, 5, 'PAGES - 1', '#');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `submenu`
--
ALTER TABLE `submenu`
  ADD PRIMARY KEY (`id_submenu`),
  ADD KEY `id_menu` (`id_menu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `submenu`
--
ALTER TABLE `submenu`
  MODIFY `id_submenu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `submenu`
--
ALTER TABLE `submenu`
  ADD CONSTRAINT `submenu_ibfk_1` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
