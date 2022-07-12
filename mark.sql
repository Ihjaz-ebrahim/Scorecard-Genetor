-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2022 at 09:53 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mark`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`email`, `password`) VALUES
('adon@gmail.com', '123'),
('ihjaz@gmail.com', '123'),
('shameel@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `civil`
--

CREATE TABLE `civil` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `ais` int(3) NOT NULL,
  `he` int(3) NOT NULL,
  `cme` int(3) NOT NULL,
  `mwe` int(3) NOT NULL,
  `bgt` int(3) NOT NULL,
  `drc` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `civil`
--

INSERT INTO `civil` (`id`, `name`, `ais`, `he`, `cme`, `mwe`, `bgt`, `drc`) VALUES
(2, 'a', 22, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cse`
--

CREATE TABLE `cse` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `unix` int(3) NOT NULL,
  `dbms` int(3) NOT NULL,
  `cn` int(3) NOT NULL,
  `adp` int(3) NOT NULL,
  `me` int(3) NOT NULL,
  `atc` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cse`
--

INSERT INTO `cse` (`id`, `name`, `unix`, `dbms`, `cn`, `adp`, `me`, `atc`) VALUES
(6, 'shameel', 26, 25, 24, 25, 26, 25);

-- --------------------------------------------------------

--
-- Table structure for table `ise`
--

CREATE TABLE `ise` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cn` int(3) NOT NULL,
  `dbms` int(3) NOT NULL,
  `me` int(3) NOT NULL,
  `atc` int(3) NOT NULL,
  `unix` int(3) NOT NULL,
  `adp` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ise`
--

INSERT INTO `ise` (`id`, `name`, `cn`, `dbms`, `me`, `atc`, `unix`, `adp`) VALUES
(2, 'hh', 12, 121, 123, 32, 32, 3),
(3, 'aaa', 11, 1, 22, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `me`
--

CREATE TABLE `me` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `me` int(3) NOT NULL,
  `dme` int(3) NOT NULL,
  `fp` int(3) NOT NULL,
  `om` int(3) NOT NULL,
  `dom` int(3) NOT NULL,
  `tm` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `me`
--

INSERT INTO `me` (`id`, `name`, `me`, `dme`, `fp`, `om`, `dom`, `tm`) VALUES
(2, 'ADEEB', 12, 124, 312, 12, 12, 11),
(3, 'dd', 22, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `civil`
--
ALTER TABLE `civil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cse`
--
ALTER TABLE `cse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ise`
--
ALTER TABLE `ise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `me`
--
ALTER TABLE `me`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `civil`
--
ALTER TABLE `civil`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cse`
--
ALTER TABLE `cse`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ise`
--
ALTER TABLE `ise`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `me`
--
ALTER TABLE `me`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
