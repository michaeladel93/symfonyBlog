-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2018 at 07:24 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `symfonyblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `commented_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `commented_by`, `comment_date`, `comment`) VALUES
(7, 13, 'miky', '18:33:32 On 11/01/2018', 'masdcomf asf cviaen');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `post_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_details` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_data` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `posted_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_title`, `post_date`, `post_img`, `post_details`, `post_data`, `posted_by`) VALUES
(13, 'michael adel', '01/01/2018', '3c9bd4fe9a12db159ccb23dd13e465eb.png', 'me c.v', 'Objective\r\n	I am a computer Science fresh graduated and I am currently looking for Training or job in a reputable organization that offers a greater challenge benefits me.\r\n				\r\nPersonal Information\r\n•	Date of Birth: 1st of March 1993\r\n•	Nationality: Egypt \r\n•	Marital Status: Single \r\n•	Location: Heliopolis, Cairo, Egypt\r\n•	Military status: Exempted \r\n\r\n•	Mobile: 01066608816 \r\n•	Mobile2: 01272265580 \r\n•	Email: Michael-_-adel@hotmail.com \r\n•	Facebook: https://www.facebook.com/michael.adel.5011\r\n\r\n\r\nEDUCATION:\r\n•	From 2012 to 2017\r\n-Ain Shams University –Bachelor Degree of computer science-faculty of Computer and  Information Science\r\n\r\n-Department : Computer science \r\n\r\n-Grade: Fair \r\n\r\n\r\n\r\n•	2012 \r\n   -Thanaweya Amma, Patriacal College, Egypt.\r\n\r\n\r\n\r\n\r\nLANGUAGES\r\n• Arabic: Fluent(mother tongue). \r\n• English: Advanced.\r\n\r\n\r\nSkills & Courses\r\n•	Experience in programming language ( C# , C++ , Java )\r\n•	Strong Knowledge in Asp.net web form,  php   , SQL, My SQL.\r\n•	Good knowledge at php mvc frameworks(laravel,codeignter).\r\n•	Strong Knowledge in web design (HTML,CSS, Java Script, JQuery, WordPress(basics)\r\nBootstrap).\r\n•	Strong Knowledge of object-oriented programming, mvc , Data structure, Algorithms.\r\n•	Good knowledge of Mobile application Development  ( Android )\r\n•	Tools (Microsoft Visual Studio, Eclipse, An\r\n', 'me'),
(16, 'miky', '01/01/2018', '359987719f89288c894ef799aa6c276a.jpeg', 'just', 'happy bday \r\nhope you enjoy your  day', 'me');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'michael adel', 'michael');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
