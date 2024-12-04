-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2024 at 09:53 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel1`
--

-- --------------------------------------------------------

--
-- Table structure for table `datapengunjung`
--

CREATE TABLE `datapengunjung` (
  `id` int(11) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `jml` varchar(50) NOT NULL,
  `cekin` date NOT NULL,
  `no` varchar(20) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datapengunjung`
--

INSERT INTO `datapengunjung` (`id`, `nama`, `jml`, `cekin`, `no`, `created`, `updated`) VALUES
(51, 'Cantika Rahmawati', 'Jepang Paket 2', '2024-11-14', '+62 878-6007-9874', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 'Ajat Sudrajat', 'Australia Paket 1', '2024-12-02', '+62 895-2471-4200', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 'Budi Subagja', 'Finlandia Paket 1', '2024-12-03', '+62 822-8101-2752', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','visitor') NOT NULL DEFAULT 'visitor'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', 'a', 'admin'),
(2, 'fafafufu', 'a', 'visitor'),
(4, 'rusdi420', 'a', 'visitor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datapengunjung`
--
ALTER TABLE `datapengunjung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datapengunjung`
--
ALTER TABLE `datapengunjung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
