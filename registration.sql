-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 22, 2018 at 04:47 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `group`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `information` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `surname`, `email`, `information`, `date`) VALUES
(1, 'dsad', 'asdad', 'asd@', 'asdad', '2018-08-21 18:00:16'),
(2, 'dasd', 'asda', 'asds@', 'asdad', '2018-08-21 18:17:03'),
(3, 'dasd', 'dasd', 'asd@', 'asdfghjkl', '2018-08-21 18:26:50'),
(4, 'dasd', 'dasd', 'asd@', 'asdfghjkl', '2018-08-21 18:27:01'),
(5, 'asdas', 'asdasdc', 'a@a', 'asd', '2018-08-21 19:00:31'),
(6, 'asdas', 'asdasdc', 'a@a', 'asd', '2018-08-21 19:00:38'),
(7, 'asd', 'asdasd', 'asdasd@', 'asd', '2018-08-21 19:04:11'),
(8, 'drop', 'the ', 'base@', 'asd', '2018-08-22 07:52:11'),
(9, 'asd', 'asdads', 'asbdahsd@', 'wfq', '2018-08-22 08:08:39'),
(10, 'asd', 'adfad', 'adfadsf@', 'afdsf', '2018-08-22 08:11:58'),
(11, 'hi', 'hello', 'heelo@', 'heey', '2018-08-22 08:19:21'),
(12, 'as', 'accc', 'ad@', 'safafcx', '2018-08-22 08:24:27'),
(13, 'as', 'adfds', 'asfa@', 'sadasd', '2018-08-22 08:38:03'),
(14, 'adf', 'adf', 'asd@', 'afaf', '2018-08-22 08:40:38'),
(15, 'adf', 'adf', 'asd@', 'afaf', '2018-08-22 08:40:39'),
(16, 'adf', 'adf', 'asd@', 'afaf', '2018-08-22 08:40:40'),
(17, 'adf', 'adf', 'asd@', 'afaf', '2018-08-22 08:40:41'),
(18, 'adf', 'adf', 'asd@', 'afaf', '2018-08-22 08:40:41'),
(19, 'adf', 'adf', 'asd@', 'afaf', '2018-08-22 08:40:42'),
(20, 'adf', 'adf', 'asd@', 'afaf', '2018-08-22 08:40:42'),
(21, 'adf', 'adf', 'asd@', 'afaf', '2018-08-22 08:40:43'),
(22, 'adf', 'adf', 'asd@', 'afaf', '2018-08-22 08:40:43'),
(23, 'adf', 'adf', 'asd@', 'afaf', '2018-08-22 08:40:44'),
(24, 'adf', 'adf', 'asd@', 'afaf', '2018-08-22 08:40:44'),
(25, 'adf', 'adf', 'asd@', 'afaf', '2018-08-22 08:40:45'),
(26, 'adf', 'adf', 'asd@', 'afaf', '2018-08-22 08:42:09'),
(27, 'asd', 'asd', 'asd@', 'asdasd', '2018-08-22 16:46:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
