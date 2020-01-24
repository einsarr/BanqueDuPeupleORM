-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2020 at 08:21 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_ajax_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `departement`
--

CREATE TABLE `departement` (
  `idD` int(11) NOT NULL,
  `nomD` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `region_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `formation`
--

CREATE TABLE `formation` (
  `id` int(11) NOT NULL,
  `lieu_id` int(11) DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `duree` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lieu`
--

CREATE TABLE `lieu` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `longitude` decimal(10,0) NOT NULL,
  `latitude` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `idR` int(11) NOT NULL,
  `nomR` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`idR`, `nomR`) VALUES
(1, 'ssd'),
(2, 'SRR'),
(15, 'SRR'),
(16, 'ssd'),
(17, 'ssd'),
(18, 'ssdRFF'),
(19, 'ddddddddddddddddd'),
(20, 'lll ppoi kkk'),
(21, 'lll ppoi kkk'),
(22, 'ssd'),
(23, 'SRR'),
(24, 'DDDD'),
(25, 'DDDD'),
(26, 'RRRRR'),
(27, 'ssd'),
(28, 'sxxd'),
(29, 'sss'),
(30, 'sdddddddddddddddddddddddd');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users_roles`
--

CREATE TABLE `users_roles` (
  `user_id` int(11) NOT NULL,
  `roles_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`idD`),
  ADD KEY `IDX_C1765B6398260155` (`region_id`);

--
-- Indexes for table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_404021BF6AB213CC` (`lieu_id`);

--
-- Indexes for table `lieu`
--
ALTER TABLE `lieu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_2F577D59A76ED395` (`user_id`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`idR`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_roles`
--
ALTER TABLE `users_roles`
  ADD PRIMARY KEY (`user_id`,`roles_id`),
  ADD KEY `IDX_51498A8EA76ED395` (`user_id`),
  ADD KEY `IDX_51498A8E38C751C4` (`roles_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departement`
--
ALTER TABLE `departement`
  MODIFY `idD` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `formation`
--
ALTER TABLE `formation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lieu`
--
ALTER TABLE `lieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `idR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `departement`
--
ALTER TABLE `departement`
  ADD CONSTRAINT `FK_C1765B6398260155` FOREIGN KEY (`region_id`) REFERENCES `region` (`idR`);

--
-- Constraints for table `formation`
--
ALTER TABLE `formation`
  ADD CONSTRAINT `FK_404021BF6AB213CC` FOREIGN KEY (`lieu_id`) REFERENCES `lieu` (`id`);

--
-- Constraints for table `lieu`
--
ALTER TABLE `lieu`
  ADD CONSTRAINT `FK_2F577D59A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `users_roles`
--
ALTER TABLE `users_roles`
  ADD CONSTRAINT `FK_51498A8E38C751C4` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_51498A8EA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
