-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 22, 2024 at 02:38 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tekweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_admin`
--

CREATE TABLE `data_admin` (
  `id` int NOT NULL,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_admin`
--

INSERT INTO `data_admin` (`id`, `nama`, `email`, `username`, `password`) VALUES
(2, 'Afdhal Asyhuri F.', 'afdhal@unpak.ac.id', 'ADDDD', '$2y$10$khEP3pFxDWWTsd9vruq09eibk/p9K0mf07a701OJI79ZPQL1z67qy'),
(4, 'Eka Aprido', 'Eka@gmail.com', 'Eka', '$2y$10$0h1CS8ewtt56hsud/qJbyOTOjKBPGWlrkq/1RqiDO.NzZU6mJoLUO'),
(6, 'Hesa', 'hesa@gmail.com', 'Hesa01', '$2y$10$GxZ97Pt8esm7azECcv2bdeYMrMOCO9dB5tSpAqAkS25SOqFy3PsGK');

-- --------------------------------------------------------

--
-- Table structure for table `data_users`
--

CREATE TABLE `data_users` (
  `id_user` int NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data_users`
--

INSERT INTO `data_users` (`id_user`, `username`, `email`, `password`) VALUES
(1, 'valndre', 'anglievl10@gmail.com', 'anjaymabar'),
(2, 'pikunee', 'pikunee@gmail.com', '$2y$10$i42PYaEH4hxdDFNsN7uhMesal6pW4YhQPv9gBe7Y95MyAS2IbFOcO'),
(3, 'ale', 'titit@gmail.com', '$2y$10$PwWbsmHqWoPm93vtKu7Edep00A83tGPU8CDuq4uXBqz3ghvi8TV.K'),
(4, 'eka', 'eka@gmail.com', '$2y$10$35SCZdUM2oVEYvnn3HB/Ku7IGZeJtM7REDjqcT8V.uu7zvKmdwH5e'),
(5, 'hesa', 'hesa@gmail.com', '$2y$10$01G1Z7vsL6Zk6c6MeNHyZeOrJ9i9nZ6kllHwHAdkA6xVr45.eBZLq');

-- --------------------------------------------------------

--
-- Table structure for table `kostumer`
--

CREATE TABLE `kostumer` (
  `id` int NOT NULL,
  `id_game` int DEFAULT NULL,
  `nick` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `no_hp` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kostumer`
--

INSERT INTO `kostumer` (`id`, `id_game`, `nick`, `no_hp`, `email`) VALUES
(32, NULL, 'Faiz', '2024', 'faiz@ganteng.com'),
(184, NULL, 'Pikunee', '08788228', 'pikunee@gmail.com'),
(187, NULL, 'Afdhal', '065122187', 'afdhal@unpak.ac.id');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_admin`
--
ALTER TABLE `data_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_users`
--
ALTER TABLE `data_users`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `kostumer`
--
ALTER TABLE `kostumer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_admin`
--
ALTER TABLE `data_admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `data_users`
--
ALTER TABLE `data_users`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
