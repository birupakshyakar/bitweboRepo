-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2020 at 09:14 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myenglishsir`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `id` int(10) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`id`, `userid`, `password`, `user_type`) VALUES
(1, 'biroyal@admin', 'Admin@123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `pdf_details`
--

CREATE TABLE `pdf_details` (
  `id` int(10) NOT NULL,
  `pdf_file_name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pdf_details`
--

INSERT INTO `pdf_details` (`id`, `pdf_file_name`, `description`) VALUES
(1, 'example.pdf', 'This is only example description'),
(2, 'pdf/Johnson-SSR-60x60cm-&-Digital-40x40cm-30x30cm-Rajkot-Oct-18 (1).pdf', '2nd file'),
(3, 'pdf/Johnson-SSR-60x60cm-&-Digital-40x40cm-30x30cm-Rajkot-Oct-18 (1).pdf', '2nd test file'),
(4, 'pdf/Johnson_60x60cm_40x40cm_Vijaywda_Floor_Catalogue_Aw_April_2019.pdf', '3rd test file'),
(5, 'pdf/Johnson-SSR-60x60cm-&-Digital-40x40cm-30x30cm-Rajkot-Oct-18 (1).pdf', '4th file');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pdf_details`
--
ALTER TABLE `pdf_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pdf_details`
--
ALTER TABLE `pdf_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
