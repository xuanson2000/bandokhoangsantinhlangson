-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2020 at 08:46 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `map`
--

-- --------------------------------------------------------

--
-- Table structure for table `mo`
--

CREATE TABLE `mo` (
  `id` int(11) NOT NULL,
  `ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mo`
--

INSERT INTO `mo` (`id`, `ten`) VALUES
(1, 'Lỗ khoan số 1'),
(2, 'Lỗ Khoan Số 2'),
(3, 'Lỗ Khoan Số 3'),
(4, 'Lỗ Khoan số 5'),
(5, 'Lỗ khoan số 6');

-- --------------------------------------------------------

--
-- Table structure for table `toado`
--

CREATE TABLE `toado` (
  `id` int(11) NOT NULL,
  `toaDoX` double NOT NULL,
  `toaDoY` double NOT NULL,
  `idMo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `toado`
--

INSERT INTO `toado` (`id`, `toaDoX`, `toaDoY`, `idMo`) VALUES
(1, 21.855321, 106.746128, 1),
(2, 21.855401, 106.747179, 1),
(3, 21.854953, 106.747275, 1),
(4, 21.854634, 106.745999, 1),
(5, 21.842708587646484, 106.75711822509766, 2),
(6, 21.841880798339844, 106.75697326660156, 2),
(7, 21.842708587646484, 106.75567626953125, 2),
(8, 21.844728469848633, 106.75492095947266, 3),
(9, 21.84529685974121, 106.75533294677734, 3),
(10, 21.845117568969727, 106.75447082519531, 3),
(11, 21.853659, 106.756472, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mo`
--
ALTER TABLE `mo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toado`
--
ALTER TABLE `toado`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mo`
--
ALTER TABLE `mo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `toado`
--
ALTER TABLE `toado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
