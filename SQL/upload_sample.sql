-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2018 at 11:01 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `upload_sample`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(7, 'sourav@gmail.com', '1234'),
(9, 'sourav', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `file` varchar(200) NOT NULL,
  `text` text NOT NULL,
  `username` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `file`, `text`, `username`) VALUES
(21, '11. EmbeddedDatabase.pdf', 'This is PDF', 'Sourav'),
(24, '507311349.jpg', 'Books', 'Ashik'),
(26, '780a43d9f14bdd06054458066af2b4e8.jpg', 'Chekc', 'Mustafiz'),
(27, '08. Multithreading (1).doc', 'DOC FILE', 'RAJESH'),
(28, 'rasel.jpg', 'adfasf', 'ads'),
(29, 'shonkhonil-karagar.jpg', 'Good Book', 'Raju');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(250) NOT NULL DEFAULT '',
  `password` varchar(128) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'sourav', 'sourav@gmail.com', '1234'),
(29, 'avijeet', 'sourav@gmail.com', '1234'),
(30, 'avijeet', 'avijeet@gmail.com', '4321'),
(31, 'Jhinuk', 'jn@gmail.com', '1234'),
(32, 'Avijeet', 'avijeet@gmail.com', '1234'),
(33, 'SouravRoy', 'sra01@web.edu', '1234'),
(34, 'Anik', 'an@yahoo.com', '4321'),
(35, 'JIINUK', 'jn@yahoo.com', '1234'),
(36, 'ALOKA NANDA ROY', 'alak@yahoo.com', '1234'),
(37, 'Mou', '', '1234'),
(38, 'Mousumi', '', '1234'),
(39, 'Mousumi', '', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
