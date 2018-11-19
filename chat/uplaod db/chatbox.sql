-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2018 at 11:27 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatbox`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `user_name` varchar(256) NOT NULL,
  `user_image` varchar(256) NOT NULL,
  `message` varchar(256) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `user_name`, `user_image`, `message`, `time`) VALUES
(32, 'mike', 'Psalm.jpg', 'this is for testing', '2018-09-29 21:23:42'),
(33, 'mike', 'Psalm.jpg', 'gttyuwuuwuuwu', '2018-09-29 21:58:37'),
(34, 'mike', 'Psalm.jpg', 'gttyuwuuwuuwu', '2018-09-29 22:02:27'),
(35, 'mike', 'Psalm.jpg', 'good morning', '2018-09-29 22:15:19'),
(40, 'mike', 'Psalm.jpg', 'how far', '2018-10-07 07:39:03'),
(41, 'shockg', 'bored-16811_150.jpg', 'tttttttttt', '2018-10-26 09:11:43'),
(42, 'shockg', 'bored-16811_150.jpg', 'testing', '2018-10-26 09:12:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `image`) VALUES
(1, 'mike', 'mike@gmail.com', '$2y$10$l/NmqdbGrVygfAv/F2M75uoeN1sZW0e8YwVminu9G2RgfjDqtU5Li', 'Psalm.jpg'),
(2, 'shockg', 'shockgzuz@gmail.com', '$2y$10$DEiJxTAgo2Z0CgM2Ad1mIuryMQ8Jyu1HPIjYjW7qcLrq.Mp2V5gwm', 'bored-16811_150.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
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
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
