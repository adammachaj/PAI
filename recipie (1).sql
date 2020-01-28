-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2020 at 12:46 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dynut`
--

-- --------------------------------------------------------

--
-- Table structure for table `recipie`
--

CREATE TABLE `recipie` (
  `Recipie_ID` int(11) NOT NULL,
  `description` text NOT NULL,
  `User_ID` int(11) NOT NULL,
  `favourites` int(11) NOT NULL DEFAULT 0,
  `image` text NOT NULL,
  `recipie_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recipie`
--

INSERT INTO `recipie` (`Recipie_ID`, `description`, `User_ID`, `favourites`, `image`, `recipie_name`) VALUES
(8, 'spadetti', 1, 0, 'fancy_spaghetti.jpg', 'spaghetti2'),
(10, 'Omlet123', 2, 0, 'omlette.jpg', 'Omlet');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recipie`
--
ALTER TABLE `recipie`
  ADD PRIMARY KEY (`Recipie_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recipie`
--
ALTER TABLE `recipie`
  MODIFY `Recipie_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
