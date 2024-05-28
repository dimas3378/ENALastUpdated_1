-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2024 at 03:57 AM
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
-- Database: `bpu2`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `company` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address_delivery` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `company`, `name`, `email`, `address_delivery`) VALUES
(1, 'PT Aduh2', 'Abrarr', 'aaaa', 'uuuuu'),
(2, 'PT Aduh2', 'Abrarr', 'aaaa', 'uuuuu'),
(30, NULL, NULL, NULL, NULL),
(31, NULL, NULL, NULL, NULL),
(32, NULL, NULL, NULL, NULL),
(33, NULL, NULL, NULL, NULL),
(34, NULL, NULL, NULL, NULL),
(35, NULL, NULL, NULL, NULL),
(36, NULL, NULL, NULL, NULL),
(37, NULL, NULL, NULL, NULL),
(38, 'Abc', 'Abrar Zuhdi Akbar', 'abangstunt@gmail.com', 'aa'),
(39, 'FUSE2024', 'Hafizh Ahmad A', 'hafizh@gmail.com', 'JL. PASIR PAROS');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `no_do` int(11) NOT NULL,
  `no_dev_pnbp` varchar(50) DEFAULT NULL,
  `date_delivery` varchar(50) DEFAULT NULL,
  `date_acc` varchar(50) DEFAULT NULL,
  `no_order` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `no_order` int(11) NOT NULL,
  `date_order` varchar(50) DEFAULT NULL,
  `no_pnbp` varchar(50) DEFAULT NULL,
  `no_quotation` int(11) DEFAULT NULL,
  `no_po` varchar(50) DEFAULT NULL,
  `mthd_ship` varchar(50) DEFAULT NULL,
  `ship_cost` varchar(50) DEFAULT NULL,
  `ppn` varchar(50) DEFAULT NULL,
  `add_cost` varchar(50) DEFAULT NULL,
  `payment` varchar(50) DEFAULT NULL,
  `total` varchar(50) DEFAULT NULL,
  `amount_due` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quotation`
--

CREATE TABLE `quotation` (
  `no_quotation` int(11) NOT NULL,
  `date_quotation` varchar(50) DEFAULT NULL,
  `no_rfq` int(11) DEFAULT NULL,
  `up` varchar(50) DEFAULT NULL,
  `name_sales` varchar(50) DEFAULT NULL,
  `cc` varchar(50) DEFAULT NULL,
  `tunggakan` varchar(50) DEFAULT NULL,
  `est_date_start` varchar(50) DEFAULT NULL,
  `est_date_end` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quotation`
--

INSERT INTO `quotation` (`no_quotation`, `date_quotation`, `no_rfq`, `up`, `name_sales`, `cc`, `tunggakan`, `est_date_start`, `est_date_end`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `retur`
--

CREATE TABLE `retur` (
  `no_retur` int(11) NOT NULL,
  `reg_cust` varchar(50) DEFAULT NULL,
  `date_retur` varchar(50) DEFAULT NULL,
  `no_order` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rfq`
--

CREATE TABLE `rfq` (
  `no_rfq` int(11) NOT NULL,
  `product` varchar(50) DEFAULT NULL,
  `production_type` varchar(50) DEFAULT NULL,
  `qty` varchar(50) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `date_rfq` date DEFAULT NULL,
  `pic` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rfq`
--

INSERT INTO `rfq` (`no_rfq`, `product`, `production_type`, `qty`, `customer_id`, `date_rfq`, `pic`) VALUES
(29, 'aaa', 'aaa', '', NULL, '0000-00-00', ''),
(33, 'abroro', '', '', NULL, '0000-00-00', ''),
(34, '122344', '', '', NULL, '0000-00-00', ''),
(35, '2234545656', '', '', NULL, '0000-00-00', ''),
(36, '1234424', '', '', NULL, '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `spk`
--

CREATE TABLE `spk` (
  `no_spk` int(11) NOT NULL,
  `no_order` int(11) DEFAULT NULL,
  `date_spk` varchar(50) DEFAULT NULL,
  `no_quotation` int(11) DEFAULT NULL,
  `mthd_ship_fix` varchar(50) DEFAULT NULL,
  `no_po` varchar(50) DEFAULT NULL,
  `date_start` varchar(50) DEFAULT NULL,
  `date_end` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `uidUsers` varchar(256) NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL,
  `jabatan` tinytext NOT NULL DEFAULT 'User'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `uidUsers`, `emailUsers`, `pwdUsers`, `jabatan`) VALUES
(27, 'user', 'user@gmail.com', '$2y$10$OThI9LYo8sZtwFTB1pPE.uOJ9qlelnnVdjLICduf4i8p8sQOGSxPu', ''),
(28, 'rehan', 'rehanganteng462@gmail.com', '$2y$10$tkY4vqYB4kLfipbG/HMNPOzqlDxPeNoyKHL5k/zdUk5l9GjWUBv5y', ''),
(29, 'rehan1', 'rehanganteng462@gmail.com', '$2y$10$rgveTOCwf8poiVwjYByiweLMFSk4ug.zN5CB82H/FUbHfSsf0YTLm', ''),
(33, 'admin2', 'admin2@gmail.com', '$2y$10$akuaTNYCgR5HOiUhMPC4Teg5s5RwW/cExvBi5jRkDEY3ZG6cSSk2m', 'Admin'),
(38, 'admin', 'admin@gmail.com', '$2y$10$Ym/1VTmPOXVEo71kS7emjuhAu76H51S9BivFrg.d6MGDr9xKv.K/2', 'Super Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`no_do`),
  ADD KEY `no_order` (`no_order`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`no_order`);

--
-- Indexes for table `quotation`
--
ALTER TABLE `quotation`
  ADD PRIMARY KEY (`no_quotation`),
  ADD KEY `no_rfq` (`no_rfq`);

--
-- Indexes for table `retur`
--
ALTER TABLE `retur`
  ADD PRIMARY KEY (`no_retur`),
  ADD KEY `no_order` (`no_order`);

--
-- Indexes for table `rfq`
--
ALTER TABLE `rfq`
  ADD PRIMARY KEY (`no_rfq`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `spk`
--
ALTER TABLE `spk`
  ADD PRIMARY KEY (`no_spk`),
  ADD KEY `no_order` (`no_order`),
  ADD KEY `no_quotation` (`no_quotation`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`),
  ADD KEY `idUsers` (`idUsers`),
  ADD KEY `idUsers_2` (`idUsers`),
  ADD KEY `uidUsers` (`uidUsers`(255)),
  ADD KEY `idUsers_3` (`idUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `quotation`
--
ALTER TABLE `quotation`
  MODIFY `no_quotation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rfq`
--
ALTER TABLE `rfq`
  MODIFY `no_rfq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `delivery`
--
ALTER TABLE `delivery`
  ADD CONSTRAINT `delivery_ibfk_1` FOREIGN KEY (`no_order`) REFERENCES `order` (`no_order`);

--
-- Constraints for table `quotation`
--
ALTER TABLE `quotation`
  ADD CONSTRAINT `quotation_ibfk_1` FOREIGN KEY (`no_rfq`) REFERENCES `rfq` (`no_rfq`);

--
-- Constraints for table `retur`
--
ALTER TABLE `retur`
  ADD CONSTRAINT `retur_ibfk_1` FOREIGN KEY (`no_order`) REFERENCES `order` (`no_order`);

--
-- Constraints for table `rfq`
--
ALTER TABLE `rfq`
  ADD CONSTRAINT `rfq_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`);

--
-- Constraints for table `spk`
--
ALTER TABLE `spk`
  ADD CONSTRAINT `spk_ibfk_1` FOREIGN KEY (`no_order`) REFERENCES `order` (`no_order`),
  ADD CONSTRAINT `spk_ibfk_2` FOREIGN KEY (`no_quotation`) REFERENCES `quotation` (`no_quotation`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
