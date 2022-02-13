-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2022 at 02:56 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bc_tours_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `id` int(11) UNSIGNED NOT NULL,
  `inquirer_name` varchar(255) DEFAULT NULL,
  `inquirer_contact` varchar(255) DEFAULT NULL,
  `inquirer_message` text DEFAULT NULL,
  `date_created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(11) UNSIGNED NOT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `sub_category_name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `sub_cat_description` text NOT NULL,
  `sub_cat_location` varchar(255) NOT NULL,
  `sub_cat_directions` varchar(255) NOT NULL,
  `sub_cat_package_deals` text NOT NULL,
  `date_created` varchar(255) NOT NULL,
  `date_updated` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_name`, `sub_category_name`, `image`, `sub_cat_description`, `sub_cat_location`, `sub_cat_directions`, `sub_cat_package_deals`, `date_created`, `date_updated`) VALUES
(12, 'Hotel & Restaurants', 'Melinda\'s Resort', 'melindas.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Brgy.Songco Borongan City', 'Ride tricycle and tell the driver to go to melindas resort', 'NA', '2022-Feb-13 02:45', NULL),
(13, 'Hotel & Restaurants', 'Primea Hotel', 'primea.jpg', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Downtown Borongan City', 'Ride tricycle and tell the driver to go Primea Hotel Infront of Uni\'s Bakery', 'EAT ALL YOU CAN BREAKFAST', '2022-Feb-13 02:48', NULL),
(14, 'Hotel & Restaurants', 'Dona Vicinta Hotel', 'dona_vincinta.jpg', 'Viverra adipiscing at in tellus integer feugiat scelerisque varius. Aliquam sem et tortor consequat id porta. Hendrerit dolor magna eget est lorem ipsum. Nibh cras pulvinar mattis nunc sed blandit.', 'Brgy.Songco Borongan City near Uptown Mall', 'Ride tricycle and tell the driver to go to Pool Site Grill', 'Free Swimming Pool Usage ', '2022-Feb-13 02:52', NULL),
(15, 'Hotel & Restaurants', 'Pool Site Restobar', 'poolsite.JPG', 'Morbi quis commodo odio aenean sed. Cras semper auctor neque vitae tempus. Congue mauris rhoncus aenean vel elit. Quis blandit turpis cursus in hac.', 'Brgy.Songco Borongan City near Uptown Mall', 'Ride tricycle and tell the driver to go to Pool Site Grill', 'FREE BEER OF YOUR CHOICE', '2022-Feb-13 02:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `userpass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `userpass`) VALUES
(1, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99 ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
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
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
