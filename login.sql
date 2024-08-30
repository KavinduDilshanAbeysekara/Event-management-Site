-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2024 at 10:29 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fname`, `lname`, `email`, `subject`, `message`) VALUES
(1, 'Damian ', 'Fernando', 'damian@gmail.com', 'Hello world', 'Results Released - Open Competitive Examination for Recruitment to Grade III of the Sri Lanka Foreign Service (SLFS) 2020 (2023) - Department of Examinations'),
(2, 'Damian ', 'Fernando', 'damian@gmail.com', 'Hello world', 'Results Released - Open Competitive Examination for Recruitment to Grade III of the Sri Lanka Foreign Service (SLFS) 2020 (2023) - Department of Examinations'),
(3, 'Damian ', 'Fernando', 'damian@gmail.com', 'Hello world', 'Results Released - Open Competitive Examination for Recruitment to Grade III of the Sri Lanka Foreign Service (SLFS) 2020 (2023) - Department of Examinations'),
(4, 'Damian ', 'Fernando', 'damian@gmail.com', 'Hello world', 'Results Released - Open Competitive Examination for Recruitment to Grade III of the Sri Lanka Foreign Service (SLFS) 2020 (2023) - Department of Examinations');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
