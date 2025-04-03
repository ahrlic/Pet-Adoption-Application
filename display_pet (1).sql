-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2025 at 06:27 PM
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
-- Database: `display_pet`
--

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `id` int(8) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` enum('Cat','Dog','Hamster') NOT NULL,
  `species` varchar(100) NOT NULL,
  `age` int(3) UNSIGNED NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `adoption_status` enum('Available','Adopted') NOT NULL,
  `photo_url` varchar(500) NOT NULL,
  `photo_url2` varchar(500) DEFAULT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`id`, `name`, `type`, `species`, `age`, `gender`, `adoption_status`, `photo_url`, `photo_url2`, `description`) VALUES
(1, 'Whisker Valentino', 'Cat', 'Orange Tabby', 1, 'Male', 'Available', 'pics\\cat11(3).jpg', 'pics\\cat11(2).jpg', 'Will steal yo girl'),
(2, 'Oopie', 'Cat', 'American Shorthair', 2, 'Male', 'Available', 'pics\\cat2(3).jpg', 'pics\\cat2(2).jpg', 'Very eepy'),
(3, 'Goopie', 'Cat', 'Tabby Cat', 3, 'Male', 'Available', 'pics\\cat8(3).png', 'pics\\cat8(2).jpg', 'Smoked once'),
(4, 'Lady Whiskerstein', 'Cat', 'Exotic Shorthair', 4, 'Female', 'Available', 'pics\\cat6(3).jpg', 'pics\\cat6(3).jpeg', 'Wants Royal Canin everyday'),
(5, 'Nibbles', 'Dog', 'Labrador Retriever', 4, 'Male', 'Available', 'pics\\dog5.jpeg', 'pics\\dog4and5.jpeg', 'Loves nibbling'),
(6, 'Bubbles', 'Dog', 'Labrador Retriever', 4, 'Male', 'Available', 'pics\\dog4.jpeg', 'pics\\dog4and5.jpeg', 'Is very concerned about Nibbles'),
(7, 'Coco the Ace of Paws', 'Cat', 'Devon Rex', 4, 'Male', 'Available', 'pics\\cat5(3).jpg', 'pics\\cat5(2).jpg', 'Do not play solitaire with him'),
(8, 'Stella', 'Dog', 'Golden Retriever', 2, 'Female', 'Available', 'pics\\dog2.jpeg', 'pics\\dog2(2).jpeg', 'Loves Minnie Mouse'),
(9, 'Loudmouth Lila', 'Dog', 'Siberian Husky', 5, 'Female', 'Available', 'pics\\dog6.jpeg', 'pics\\dog6(3).png', 'Known for being extra dramatic'),
(11, 'Puffball', 'Hamster', 'Golden Hamster', 1, 'Female', 'Available', 'pics\\hamster1.jpeg', 'pics\\hamster1(2).jpeg', 'Knows how to pose (amazingly!)'),
(12, 'Snicker', 'Hamster', 'Winter White Dwarf Hamster', 1, 'Male', 'Available', 'pics\\hamster2.jpeg', 'pics\\hamster2(2).jpeg', 'He is very clean'),
(13, 'Pip', 'Hamster', 'Syrian Hamster', 2, 'Female', 'Available', 'pics\\hamster3.jpeg', 'pics\\hamster3(3).jpeg', 'May be somewhat traumatized by the water'),
(14, 'Jellybean', 'Hamster', 'Golden Hamster', 1, 'Female', 'Available', 'pics\\hamster4(3).jpeg', 'pics\\hamster4(2).jpeg', 'Will judge you'),
(15, 'Puss in Boots', 'Cat', 'Abyssinian', 1, 'Female', 'Adopted', 'pics\\cat17(3).jpg', 'pics\\cat17(2).jpg', 'An alcoholic'),
(16, 'Professor Wigglytail', 'Cat', 'Scottish Fold', 3, 'Male', 'Adopted', 'pics\\cat14(3).jpg', 'pics\\cat14(2).jpg', 'Aspire to be a millionaire'),
(17, 'Fizzlepop Berrytwist', 'Dog', 'Shetland Sheepdog', 3, 'Female', 'Adopted', 'pics\\dog3.jpeg', 'pics\\dog3(3).jpeg', 'Loves balloon a little bit too much'),
(18, 'Taffy', 'Cat', 'Ragdoll', 3, 'Female', 'Adopted', 'pics\\cat12(3).jpg', 'pics\\cat12(2).jpg', 'Very silly'),
(19, 'Aristocat', 'Cat', 'Devon Rex', 3, 'Male', 'Adopted', 'pics\\cat18.jpg', 'pics\\cat18(2).jpg', 'Used to scam grannies'),
(20, 'Waffles', 'Dog', 'Pembroke Welsh Corgi', 2, 'Male', 'Adopted', 'pics\\dog7.jpeg', 'pics\\dog7(2).jpeg', 'Probably knows something about you that you don\'t'),
(21, 'Daisy', 'Dog', 'Dachshund', 2, 'Female', 'Available', 'pics\\dog8.png', 'pics\\dog8(2).jpeg', 'Used to love sniffing flowers. I wonder why she stopped');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `newsletter` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `phone_number`, `password`, `newsletter`, `created_at`) VALUES
(2, 'Fiona', 'Ang', 'fionaa.ang', 'fion0002@algonquinlive.com', '(613) 806-9822', '$2y$10$Zggp/jxEgmoJR3Bblsa6UOSx.oB2as9B4mINJ2RSxzAStirddCEnC', 0, '2025-04-02 06:03:43'),
(3, 'Eliza', 'Hong', 'yonanaraa', 'usercemara449@gmail.com', '(613) 806-9822', '$2y$10$15QkNJplbjYm0x.LKRCbVOlhhPaZ4NXaYRwUTAFWx1A.yDxrfapY.', 1, '2025-04-02 06:26:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
