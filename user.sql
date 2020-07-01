-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2020 at 04:15 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wdmfinal`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_ID` int(20) NOT NULL,
  `User_Email` varchar(50) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Address` varchar(1000) NOT NULL,
  `Role` varchar(20) NOT NULL,
  `User_Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_ID`, `User_Email`, `Password`, `Address`, `Role`, `User_Name`) VALUES
(1, 'sbhumit98@gmail.com', 'Nisarg&89', '848 W Mitchell St Arlington TX - 76013', 'Admin', 'Bhumit Shah'),
(2, 'npshah2009@gmail.com', 'Nisarg&89', 'aaaaaaaaaaaaaaaaaaaaaaa', 'User', 'Nisarg Shah'),
(3, 'aaaaaa@gmail.com', 'Nisarg789', 'aaaaaaaaaaaaaaaaaaaaaaa', 'User', 'Nisarg'),
(4, 'aaaaaaa@gmail.com', 'nisarg789', 'aaaaaaaaaaaaaaaaaaaaa', 'User', 'Nisarg Shah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_ID`),
  ADD UNIQUE KEY `Email` (`User_Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
