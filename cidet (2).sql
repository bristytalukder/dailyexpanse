-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2023 at 04:40 AM
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
-- Database: `cidet`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cate_id` int(11) NOT NULL,
  `cate_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cate_id`, `cate_name`) VALUES
(8, 'Medicine'),
(9, 'Shopping'),
(10, 'House Rent'),
(11, 'Education'),
(12, 'Health care'),
(13, 'Bills'),
(14, 'Travel'),
(15, 'Medicine'),
(16, 'food'),
(17, 'shopping'),
(18, 'DeposiT'),
(19, 'shopping');

-- --------------------------------------------------------

--
-- Table structure for table `expanse`
--

CREATE TABLE `expanse` (
  `ex_id` int(11) NOT NULL,
  `ex_amount` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `expanse`
--

INSERT INTO `expanse` (`ex_id`, `ex_amount`, `date`, `category`) VALUES
(3, '233', '2023-10-17', '5'),
(8, '4800', '2023-10-31', '8'),
(9, '52145', '2023-10-16', '<?$row[\'cate_id\'] ?>'),
(10, '52145', '2023-10-13', '<?$row[\'cate_id\'] ?>'),
(11, '52145', '2023-10-18', '13'),
(12, '400000', '2023-08-02', '12'),
(13, '25000', '2023-08-11', '11'),
(14, '60000', '2023-08-10', '10'),
(15, '80000', '2023-07-07', '18'),
(16, '500', '2023-10-18', '8'),
(17, '52145', '2023-10-20', '18');

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `in_id` int(11) NOT NULL,
  `in_amount` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `in_category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`in_id`, `in_amount`, `date`, `in_category`) VALUES
(1, '500000', '2023-10-19', 'Salary'),
(2, '40000', '2023-10-02', 'Business profit'),
(3, '90000', '2023-10-19', ''),
(4, '90000', '2023-10-02', ''),
(5, '90000', '2023-10-18', ''),
(8, '200000', '2023-01-10', '1'),
(9, '100000', '2023-02-10', '1'),
(10, '200000', '2023-03-10', '1'),
(11, '40000', '2023-10-10', '1'),
(12, '200000', '2023-08-14', '2'),
(13, '100000', '2023-12-21', '1'),
(14, '100000', '2023-10-26', '1'),
(15, '200000', '2023-06-08', '2');

-- --------------------------------------------------------

--
-- Table structure for table `in_category`
--

CREATE TABLE `in_category` (
  `inc_id` int(11) NOT NULL,
  `inc_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `in_category`
--

INSERT INTO `in_category` (`inc_id`, `inc_name`) VALUES
(1, 'salary'),
(2, 'business profit');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(155) NOT NULL,
  `email` varchar(155) NOT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `password` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `created_at`, `password`) VALUES
(1, 'Bristy Talukdar', 'bristy2229@gmail.com', NULL, '$2y$10$kzCZPco22PmuL8sX70XAVuYm9zWytfH4mL7m9u386SOmbgVHEYZ6i'),
(2, 'Bristy Talukdar', 'bristy29@gmail.com', NULL, '$2y$10$2BvHjOtD/Li2.QZyVXU/tOWiQxrNkxaFinmsWnv7MalOCXuZvFZYS'),
(3, 'rakib', 'rakib@gmail.com', NULL, '$2y$10$7iSUTF7rGY6TfRiKw.ZGeuejoUR66umQlVg9YMDqE4xz2JNERnWpO'),
(4, 'khaleda', 'khaleda@gmail.com', NULL, '$2y$10$tZxONkPw5M.f8x2Rh7yPFuJl9nPLckeB5t59YTqTnQc5GMYj6WNIO'),
(5, 'bristy', 'bristy22@gmail.com', NULL, '$2y$10$RM26vFDOZUIAzLXCFH3C/OwSgp/xzE2WcG5RnzqwclPVZobJ1Fo9y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `expanse`
--
ALTER TABLE `expanse`
  ADD PRIMARY KEY (`ex_id`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`in_id`);

--
-- Indexes for table `in_category`
--
ALTER TABLE `in_category`
  ADD PRIMARY KEY (`inc_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `expanse`
--
ALTER TABLE `expanse`
  MODIFY `ex_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `in_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `in_category`
--
ALTER TABLE `in_category`
  MODIFY `inc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
