-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2018 at 06:21 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pldt_exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `search_history`
--

CREATE TABLE `search_history` (
  `id` int(11) NOT NULL,
  `datetime` varchar(30) NOT NULL,
  `query` text NOT NULL,
  `user_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `search_history`
--

INSERT INTO `search_history` (`id`, `datetime`, `query`, `user_id`) VALUES
(1205, 'Wed, 11 Jul 2018 13:04:23 GMT', 'doctor', '09358433275'),
(1228, 'Wed, 11 Jul 2018 13:34:09 GMT', 'asdas', '09358433275'),
(1231, 'Wed, 11 Jul 2018 13:34:48 GMT', 'engineer', '09358433275'),
(1233, 'Wed, 11 Jul 2018 13:35:59 GMT', 'dd', '09358433275'),
(1234, 'Wed, 11 Jul 2018 13:36:04 GMT', 'qc', '09358433275'),
(1250, 'Wed, 11 Jul 2018 13:39:39 GMT', 'docotr', '09358433275'),
(1303, 'Wed, 11 Jul 2018 14:27:31 GMT', 'programmer', '09358433275'),
(1322, 'Wed, 11 Jul 2018 14:35:19 GMT', '', '09358433275'),
(1328, 'Wed, 11 Jul 2018 14:37:44 GMT', 'asd', '09358433275'),
(1352, 'Wed, 11 Jul 2018 14:47:28 GMT', 'software', '09358433275'),
(1353, 'Wed, 11 Jul 2018 14:47:34 GMT', 'doctr', '09358433275'),
(1354, 'Wed, 11 Jul 2018 14:47:40 GMT', 'decor', '09358433275'),
(1374, 'Wed, 11 Jul 2018 14:54:45 GMT', 'dr', '09358433275'),
(1389, 'Wed, 11 Jul 2018 15:01:51 GMT', 'sri', '09358433275'),
(1398, 'Wed, 11 Jul 2018 15:18:50 GMT', 'test', '09358433275'),
(1404, 'Wed, 11 Jul 2018 15:27:32 GMT', 'search', '09358433275'),
(1406, 'Wed, 11 Jul 2018 15:28:01 GMT', 'east', '09358433275'),
(1453, 'Wed, 11 Jul 2018 16:08:56 GMT', 'pldt_search', '09358433275'),
(1455, 'Wed, 11 Jul 2018 16:10:22 GMT', 'pldt doctor', '09358433275'),
(1457, 'Wed, 11 Jul 2018 16:10:48 GMT', 'pldt', '09358433275'),
(1464, 'Wed, 11 Jul 2018 16:18:37 GMT', 'test search', '09358433275');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `search_history`
--
ALTER TABLE `search_history`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
