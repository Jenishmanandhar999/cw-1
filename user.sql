-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2023 at 03:35 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoe`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password_hash`) VALUES
(1, 'Riwaj Chalise', 'riwaj5972@gmail.com', '$2y$10$8Li4nx3KmHuWgSmrjqOBKOTKPN/Hp1e7f6085QS4hTJmYL86iZM3G'),
(6, 'Ashely Estrada', 'butafada@mailinator.com', '$2y$10$wM92x9mG6B5xLyzI2AG4wOPVISmba4fyeF9av0tyRW.HAEfv5vLBy'),
(7, 'Sandeep Diwan', 'sandip@gmail.com', '$2y$10$WlxhkSwtAan/zVjLU/EB7ecsIwQMSMs.uNAIT17FcX21DjEXNxF3a'),
(8, 'Naren', 'naren@gmail.com', '$2y$10$FMM5HOqnlAF7XiFg/BiTtutXcw8bhRUHHlZqZ7RZzvn1grp/c99gm'),
(9, 'Yug Diwan', 'yug@gmail.com', '$2y$10$GFx73VEkGlayASoNaPi.FO.5Tz8cFubMFpsUO/DW6Lb/ZEJhV6FNS'),
(10, 'Janak Gharti Magar', 'janak245@gmail.com', '$2y$10$BrSq3TDwLx5qOJNqO633L.qnqnFIv0kOZpqPj7iNkSoP5e4uibNny');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
