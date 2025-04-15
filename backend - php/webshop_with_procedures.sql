-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 15, 2025 at 08:10 AM
-- Server version: 8.0.35
-- PHP Version: 8.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vizsga2025`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `CreateProduct` (IN `name` VARCHAR(128), IN `price` DECIMAL, IN `stock` INT)   INSERT INTO Products (Products.name, Products.price, Products.stock) VALUES (name, price, stock)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `DeleteProduct` (IN `id` INT)   DELETE FROM Products WHERE Products.id = id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `GetProduct` (IN `id` INT)   SELECT * FROM Products WHERE Products.id = id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `UpdateProduct` (IN `id` INT, IN `name` VARCHAR(128), IN `price` DECIMAL, IN `stock` INT)   UPDATE Products
SET Products.name = name, Products.price = price, Products.stock = stock
WHERE Products.id = id$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `Products`
--

CREATE TABLE `Products` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `stock` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- Dumping data for table `Products`
--

INSERT INTO `Products` (`id`, `name`, `price`, `stock`) VALUES
(1, 'Laptop', 299999.99, 10),
(2, 'Okostelefon', 159999.50, 25),
(3, 'Fülhallgató', 9999.99, 100),
(4, 'Análgolyó', 1500.00, 1),
(6, 'Madárijesztő', 1500.00, 1500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Products`
--
ALTER TABLE `Products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
