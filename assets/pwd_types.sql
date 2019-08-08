-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2019 at 05:39 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apsc_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `pwd_types`
--

CREATE TABLE `pwd_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(60) NOT NULL,
  `details` varchar(250) NOT NULL,
  `last_modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pwd_types`
--

INSERT INTO `pwd_types` (`id`, `type`, `details`, `last_modified`) VALUES
(1, 'HI', 'Deaf and Hard of Hearing', '2019-08-08 01:44:50'),
(2, 'VI', 'Blindness or Low Vision', '2019-08-08 01:44:50'),
(3, 'OH', 'Locomotor Disability including: Cerebral Palsy, Leprosy Cured, Dwarfism, Acid Attack Victims Muscular Dystrophy', '2019-08-08 01:44:50'),
(4, 'Mental illness', 'Autism, Intellectual Disablility, Specific Learning Disability, Mental Illness', '2019-08-08 01:47:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pwd_types`
--
ALTER TABLE `pwd_types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pwd_types`
--
ALTER TABLE `pwd_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
