-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2023 at 12:42 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoping2`
--

-- --------------------------------------------------------

--
-- Table structure for table `sp_product`
--

CREATE TABLE `sp_product` (
  `id` int(11) NOT NULL,
  `img` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sp_product`
--

INSERT INTO `sp_product` (`id`, `img`, `name`, `price`) VALUES
(1, 'sis_5.jpg', 'Sunny red+yellow suit  (medium to big size)', 65),
(2, 'sis_6.jpg', 'Sunny fasion suit (medium to big size)', 65),
(3, 'sis.jpg', 'Sunny White suit + hat (medium to big size)', 72),
(4, 'sis_1.jpg', 'Sunny red+black suit + hat (medium to big size)', 65),
(5, 'sis_2.jpg', 'Sunny black suit (medium to big size)', 65),
(6, 'sis_3.jpg', 'Sunny fasion suit (medium to big size)', 65),
(7, 'sis_4.jpg', 'Sunny fasion suit (medium to big size)', 65),
(8, 'sis_5.jpg', 'Sunny fasion suit (medium to big size)', 65),
(9, 'sis_6.jpg', 'Sunny fasion suit (medium to big size)', 65),
(10, 'sis_7.jpg', 'Sunny fasion suit (medium to big size)', 65),
(11, 'sis_8.jpg', 'Sunny fasion suit (medium to big size)', 65),
(12, 'hmoob_1.png', 'khaub ncaws hmoob toj siab (medium to big size)', 50),
(13, 'hmoob_2.png', 'khaub ncaws hmoob toj siab (medium to big size)', 50),
(14, 'hmoob_3.webp', 'khaub ncaws hmoob toj siab (medium to big size)', 50),
(15, 'hmoob_4.jpg', 'khaub ncaws hmoob toj siab (small to medium size)', 35),
(16, 'hmoob_5.jpg', 'khaub ncaws hmoob toj siab (small to medium size)', 35),
(17, 'hmoob_6.jpg', 'khaub ncaws hmoob toj siab (small to medium size)', 35),
(18, 'hmoob_7.jpg', 'khaub ncaws hmoob toj siab (small to medium size)', 35),
(19, 'hmoob_8.jpg', 'khaub ncaws hmoob toj siab (small to medium size)', 35),
(20, 'hmoob_9.jpg', 'khaub ncaws hmoob toj siab (small to medium size)', 35),
(21, 'tsho.jpg', 'Tsho khuam hmoob (medium to big size)', 50),
(22, 'tsho_1.jpg', 'Tsho khuam hmoob (medium to big size)', 50),
(23, 'tsho_2.jpg', 'Tsho khuam hmoob (medium to big size)', 50),
(24, 'tsho_3.jpg', 'Tsho khuam hmoob (medium to big size)', 50),
(25, 'tsho_4.jpg', 'Tsho khuam hmoob (medium to big size)', 50),
(26, 'tsho_5.webp', 'Tsho khuam hmoob (medium to big size)', 50),
(27, 'tsho_6.jpg', 'Tsho khuam hmoob (medium to big size)', 50),
(28, 'tsho_7.jpg', 'Tsho khuam hmoob (medium to big size)', 50),
(29, 'tsho_8.webp', 'Tsho khuam hmoob (medium to big size)', 50),
(30, 'kausmoom_1.jpg', 'Kaus moom', 14),
(31, 'kausmoom_2.jpg', 'Kaus moom', 24),
(32, 'kausmoom_3.jpg', 'Kaus moom', 14),
(33, 'kausmoom_4.jpg', 'Kaus moom', 18),
(34, 'kausmoom_5.webp', 'Kaus moom', 20),
(35, 'kausmoom_6.jpg', 'Kaus moom', 12);

-- --------------------------------------------------------

--
-- Table structure for table `sp_transaction`
--

CREATE TABLE `sp_transaction` (
  `id` int(11) NOT NULL,
  `transid` text DEFAULT NULL,
  `orderlist` text DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `shipping` int(11) DEFAULT NULL,
  `vat` int(11) DEFAULT NULL,
  `netamount` text DEFAULT NULL,
  `operation` bigint(20) DEFAULT NULL,
  `mil` int(11) DEFAULT NULL,
  `updated_at` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sp_transaction`
--

INSERT INTO `sp_transaction` (`id`, `transid`, `orderlist`, `amount`, `shipping`, `vat`, `netamount`, `operation`, `mil`, `updated_at`) VALUES
(1, '1671121838970', '[{\"index\":\"1\",\"img\":\"sis_6.jpg\",\"name\":\"Sunny fasion suit (medium to big size)\",\"price\":\"65\",\"count\":\"1\"}]', 0, 60, 4, '64.2', 0, 2147483647, '2022-12-15 11:30:38pm'),
(2, '1671121968882', '[{\"index\":\"1\",\"img\":\"sis_6.jpg\",\"name\":\"Sunny fasion suit (medium to big size)\",\"price\":\"65\",\"count\":\"4\"}]', 0, 60, 4, '64.2', 0, 2147483647, '2022-12-15 11:32:48pm'),
(3, '1671122273497', '[{\"index\":\"1\",\"img\":\"sis_6.jpg\",\"name\":\"Sunny fasion suit (medium to big size)\",\"price\":\"65\",\"count\":\"1\"}]', 0, 60, 4, '64.2', 0, 2147483647, '2022-12-15 11:37:53pm'),
(4, '1671122274845', '[{\"index\":\"1\",\"img\":\"sis_6.jpg\",\"name\":\"Sunny fasion suit (medium to big size)\",\"price\":\"65\",\"count\":\"1\"}]', 0, 60, 4, '64.2', 0, 2147483647, '2022-12-15 11:37:54pm'),
(5, '1671122411904', '[{\"index\":\"0\",\"img\":\"sis_5.jpg\",\"name\":\"Sunny red+yellow suit  (medium to big size)\",\"price\":\"65\",\"count\":\"2\"}]', 0, 60, 4, '64.2', 0, 2147483647, '2022-12-15 11:40:11pm'),
(6, '1671122413395', '[{\"index\":\"0\",\"img\":\"sis_5.jpg\",\"name\":\"Sunny red+yellow suit  (medium to big size)\",\"price\":\"65\",\"count\":\"2\"}]', 0, 60, 4, '64.2', 0, 2147483647, '2022-12-15 11:40:13pm'),
(7, '1671122421973', '[{\"index\":\"0\",\"img\":\"sis_5.jpg\",\"name\":\"Sunny red+yellow suit  (medium to big size)\",\"price\":\"65\",\"count\":\"2\"}]', 0, 60, 4, '64.2', 0, 2147483647, '2022-12-15 11:40:21pm'),
(8, '1671122975176', '[{\"index\":\"2\",\"img\":\"sis.jpg\",\"name\":\"Sunny White suit + hat (medium to big size)\",\"price\":\"72\",\"count\":\"1\"}]', 0, 60, 4, '64.2', 0, 2147483647, '2022-12-15 11:49:35pm'),
(9, '1671122978710', '[{\"index\":\"2\",\"img\":\"sis.jpg\",\"name\":\"Sunny White suit + hat (medium to big size)\",\"price\":\"72\",\"count\":\"1\"}]', 0, 60, 4, '64.2', 0, 2147483647, '2022-12-15 11:49:38pm'),
(10, '1671122979176', '[{\"index\":\"2\",\"img\":\"sis.jpg\",\"name\":\"Sunny White suit + hat (medium to big size)\",\"price\":\"72\",\"count\":\"1\"}]', 0, 60, 4, '64.2', 0, 2147483647, '2022-12-15 11:49:39pm'),
(11, '1671122979380', '[{\"index\":\"2\",\"img\":\"sis.jpg\",\"name\":\"Sunny White suit + hat (medium to big size)\",\"price\":\"72\",\"count\":\"1\"}]', 0, 60, 4, '64.2', 0, 2147483647, '2022-12-15 11:49:39pm'),
(12, '1671122979536', '[{\"index\":\"2\",\"img\":\"sis.jpg\",\"name\":\"Sunny White suit + hat (medium to big size)\",\"price\":\"72\",\"count\":\"1\"}]', 0, 60, 4, '64.2', 0, 2147483647, '2022-12-15 11:49:39pm'),
(13, '1671122979682', '[{\"index\":\"2\",\"img\":\"sis.jpg\",\"name\":\"Sunny White suit + hat (medium to big size)\",\"price\":\"72\",\"count\":\"1\"}]', 0, 60, 4, '64.2', 0, 2147483647, '2022-12-15 11:49:39pm'),
(14, '1671123124390', '[{\"index\":\"1\",\"img\":\"sis_6.jpg\",\"name\":\"Sunny fasion suit (medium to big size)\",\"price\":\"65\",\"count\":\"1\"}]', 0, 60, 4, '64.2', 0, 2147483647, '2022-12-15 11:52:04pm'),
(15, '1671123125146', '[{\"index\":\"1\",\"img\":\"sis_6.jpg\",\"name\":\"Sunny fasion suit (medium to big size)\",\"price\":\"65\",\"count\":\"1\"}]', 0, 60, 4, '64.2', 0, 2147483647, '2022-12-15 11:52:05pm'),
(16, '1671123262446', '[{\"index\":\"1\",\"img\":\"sis_6.jpg\",\"name\":\"Sunny fasion suit (medium to big size)\",\"price\":\"65\",\"count\":\"1\"}]', 0, 60, 4, '64.2', 0, 2147483647, '2022-12-15 11:54:22pm'),
(17, '1671123351501', '[{\"index\":\"1\",\"img\":\"sis_6.jpg\",\"name\":\"Sunny fasion suit (medium to big size)\",\"price\":\"65\",\"count\":\"1\"}]', 0, 60, 4, '64.2', 0, 2147483647, '2022-12-15 11:55:51pm'),
(18, '1671123352115', '[{\"index\":\"1\",\"img\":\"sis_6.jpg\",\"name\":\"Sunny fasion suit (medium to big size)\",\"price\":\"65\",\"count\":\"1\"}]', 0, 60, 4, '64.2', 0, 2147483647, '2022-12-15 11:55:52pm'),
(19, '1671123352484', '[{\"index\":\"1\",\"img\":\"sis_6.jpg\",\"name\":\"Sunny fasion suit (medium to big size)\",\"price\":\"65\",\"count\":\"1\"}]', 0, 60, 4, '64.2', 0, 2147483647, '2022-12-15 11:55:52pm'),
(20, '1671123353901', '[{\"index\":\"1\",\"img\":\"sis_6.jpg\",\"name\":\"Sunny fasion suit (medium to big size)\",\"price\":\"65\",\"count\":\"1\"}]', 0, 60, 4, '64.2', 0, 2147483647, '2022-12-15 11:55:53pm'),
(21, '1671197100624', '[{\"index\":\"1\",\"img\":\"sis_6.jpg\",\"name\":\"Sunny fasion suit (medium to big size)\",\"price\":\"65\",\"count\":\"3\"}]', 0, 60, 4, '64.2', 0, 2147483647, '2022-12-16 08:25:00pm'),
(22, '1671197101523', '[{\"index\":\"1\",\"img\":\"sis_6.jpg\",\"name\":\"Sunny fasion suit (medium to big size)\",\"price\":\"65\",\"count\":\"3\"}]', 0, 60, 4, '64.2', 0, 2147483647, '2022-12-16 08:25:01pm'),
(23, '1671197102069', '[{\"index\":\"1\",\"img\":\"sis_6.jpg\",\"name\":\"Sunny fasion suit (medium to big size)\",\"price\":\"65\",\"count\":\"3\"}]', 0, 60, 4, '64.2', 0, 2147483647, '2022-12-16 08:25:02pm'),
(24, '1671197102503', '[{\"index\":\"1\",\"img\":\"sis_6.jpg\",\"name\":\"Sunny fasion suit (medium to big size)\",\"price\":\"65\",\"count\":\"3\"}]', 0, 60, 4, '64.2', 0, 2147483647, '2022-12-16 08:25:02pm'),
(25, '1671197102702', '[{\"index\":\"1\",\"img\":\"sis_6.jpg\",\"name\":\"Sunny fasion suit (medium to big size)\",\"price\":\"65\",\"count\":\"3\"}]', 0, 60, 4, '64.2', 0, 2147483647, '2022-12-16 08:25:02pm'),
(26, '1677408037646', '[{\"index\":\"0\",\"img\":\"sis_5.jpg\",\"name\":\"Sunny red+yellow suit  (medium to big size)\",\"price\":\"65\",\"count\":\"3\"}]', 0, 60, 4, '64.2', 0, 2147483647, '2023-02-26 05:40:37pm');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `userlevel` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `firstname`, `lastname`, `userlevel`) VALUES
(1, 'nou', '698d51a19d8a121ce581499d7b701668', 'her', 'vue', 'm'),
(2, 'poo', 'd41d8cd98f00b204e9800998ecf8427e', '', '', 'm'),
(3, 'jason', '698d51a19d8a121ce581499d7b701668', 'joo', 'vue', 'm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sp_product`
--
ALTER TABLE `sp_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp_transaction`
--
ALTER TABLE `sp_transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sp_product`
--
ALTER TABLE `sp_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `sp_transaction`
--
ALTER TABLE `sp_transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
