-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2022 at 11:50 PM
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
(1, 'ملابس', 'clothes', 'fr', 'ru', 'tr', '62533f0b960de7.96836889.Screenshot_82.png', 0),
(2, 'عقارات', 'houses', '...', '...', '...', '62533f25a79659.85864460.Screenshot_146.png', 0),
(3, 'قمصان', 'shirts', '...', '...', '...', '625341faa338f4.34215925.Screenshot_19.png', 1),
(4, 'احذية', 'shoses', '255', '255', '255', '62533f50af3c98.17974661.Screenshot_31.png', 1),
(5, 'احذية رياضية', 'sport  shoses', '...', '...', '...', '625343122c7be9.55078744.Screenshot_16.png', 4),
(6, 'سيارات', 'cars', '255', '255', '255', '625340d4c16e43.92425552.Screenshot_69.png', 0),
(7, 'بيوت للاجار', 'Rent', '255', '255', '255', '625340f1a02b00.74810360.Screenshot_84.png', 2),
(10, 'دراجات نارية', 'motors', '255', '255', '255', '62534795285765.68538897.Screenshot_15.png', 0);

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
(1, '6255f2ba1cc9a5.98804489.Screenshot_1.png', 1),
(2, '6255f2ba1e7052.47306032.Screenshot_2.png', 1),
(3, '6255f2ba1f3568.81957365.Screenshot_3.png', 1),
(4, '6255f2ba216ad7.74384098.Screenshot_4.png', 1),
(5, '6255f2ba228191.90402206.Screenshot_13.png', 1),
(6, '6255f2ba2372c3.27918545.Screenshot_14.png', 1),
(7, '6255f2ba2482e2.22401878.Screenshot_15.png', 1),
(8, '6255f2ba253ab5.54445526.Screenshot_16.png', 1);

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
  `discribe_ar` varchar(800) NOT NULL,
  `discribe_en` varchar(800) NOT NULL,
  `discribe_fr` varchar(800) NOT NULL,
  `discribe_ru` varchar(800) NOT NULL,
  `discribe_tr` varchar(800) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title_ar`, `title_en`, `title_fr`, `title_ru`, `title_tr`, `discribe_ar`, `discribe_en`, `discribe_fr`, `discribe_ru`, `discribe_tr`, `category_id`) VALUES
(1, '', 'ddddddddddddd', '', '', '', '', '', '', '', '', 5);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
