-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2022 at 12:44 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name_ar` varchar(300) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_fr` varchar(255) NOT NULL,
  `name_ru` varchar(255) NOT NULL,
  `name_tr` varchar(255) NOT NULL,
  `icon` varchar(600) NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name_ar`, `name_en`, `name_fr`, `name_ru`, `name_tr`, `icon`, `parent_id`) VALUES
(6, 'سيارات', 'cars', '255', '255', '255', '62630bcd5b0308.94687873.car.png', 0),
(13, 'سيارات للبيع', 'car for sell', 'sdfsdf', 'sdfsdf', 'sdfsdf', '62630b5c5a5bf5.79148402.commercial-car.png', 6),
(14, 'سيارات للاجرة', 'car for rent', 'sdfsdf', 'sdfsdf', 'sdfsdf', '62630b6c1e7079.65404331.key.png', 6),
(16, 'سيارات بنزين', 'gas car', 'sdf', 'sdf', 'sdf', '62630b80b29589.30985457.gas-station.png', 13),
(18, 'سيارات كهرباء', 'electric car', 'sssssssss', 'sssssssssss', 'sssssssssss', '62630b9870ebb0.57698835.electric-car.png', 13),
(19, 'عقارات', 'houses', 'ssssssssss', 'ssssssss', 'ssssssssss', '62630bfc457c75.03931328.home (2).png', 0),
(20, 'بيوت للبيع', 'houses for sell', 'sssssssssss', 'ssssssssss', 'sssssssssss', '62630c1cc5efe6.65805235.dollar-sign.png', 19),
(21, 'بيوت للاجار', 'houses for rent', 'ssssssssss', 'ssssssssss', 'ssssssss', '62630c34eb5552.84826988.deal.png', 19),
(22, 'سيارات اطفال', 'kids car', 'sssssssssss', 'sssssssssss', 'ssssssssss', '6263fbf9209140.80840731.car.png', 6),
(23, 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 0);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(600) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `post_id`) VALUES
(181, '6263190957be77.73177366.fashion.png', 11),
(182, '6263192f016090.49945661.fashion.png', 12),
(189, '626c267b9a1cc8.58307749.home (2).png', 13),
(190, '626c267b9ba639.90028441.car.png', 13),
(191, '626c267b9c3b13.04781986.deal.png', 13),
(192, '626c267b9d2ad3.33258486.dollar-sign.png', 13),
(193, '626c267b9dcac0.67653517.electric-car.png', 13),
(194, '626c267b9ea994.93197302.gas-station.png', 13),
(195, '626c267b9f45b4.13797854.key.png', 13),
(196, '626c267b9fd4d0.91792508.commercial-car.png', 13);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title_ar` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_fr` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `title_tr` varchar(255) NOT NULL,
  `discribe_ar` text NOT NULL,
  `discribe_en` text NOT NULL,
  `discribe_fr` text NOT NULL,
  `discribe_ru` text NOT NULL,
  `discribe_tr` text NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title_ar`, `title_en`, `title_fr`, `title_ru`, `title_tr`, `discribe_ar`, `discribe_en`, `discribe_fr`, `discribe_ru`, `discribe_tr`, `category_id`) VALUES
(11, 'نيسان ليف', 'Nissan leaf', 'sssss', 'sssss', 'ssssssss', 'ssssssssssssssssssssssssssssssssss', 'ssssssssssssssssssssssssssssssssss', 'ssssssssssssssssssssssssssssssssss', 'ssssssssssssssssssssssssssssssssss', 'ssssssssssssssssssssssssssssssssss', 18),
(12, 'فيات', 'fiat', 'ssssss', 'sssssssss', 'ssssssssss', 'sssssssss', 'sssssssss', 'ssssssssss', 'ssssssssss', 'sssssssssss', 18),
(13, 'sdf', 'sdf', 'sdf', 'sdfsdf', 'sdf', 'sssssssssssss', 'sssssssssssss', 'sssssssssssss', 'sssssssssssss', 'sssssssssssss', 18);

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE `social_links` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `link` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social_links`
--

INSERT INTO `social_links` (`id`, `name`, `icon`, `link`) VALUES
(4, 'telegram', '<i class=\"fa-brands fa-telegram\"></i>', '#'),
(5, 'facebook', '<i class=\"fa-brands fa-facebook\"></i>', ' #'),
(6, 'instagram', '<i class=\"fa-brands fa-instagram\"></i>', ' #'),
(7, 'twitter', '<i class=\"fa-brands fa-twitter\"></i>', ' #'),
(8, 'whatsapp', '<i class=\"fa-brands fa-whatsapp\"></i>', ' #');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `permession` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `permession`) VALUES
(2, 'zazo1', '$2y$10$WzQ/Lr488h/j1wVllBsNSuoiixhciU49ocnBKfUSY.CsoIb2riuJK', 0),
(3, 'superadmin', '$2y$10$AGP5xwAt.K8Y9Ey.6SEtue5/R6471HFMJR9PWpoXPv2G7GgVNeacy', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `social_links`
--
ALTER TABLE `social_links`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `social_links`
--
ALTER TABLE `social_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
