-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 17, 2025 at 12:25 PM
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
-- Database: `note_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `title`, `content`) VALUES
(1, 'Why I Chose PHP', 'language offers great verstility, as it is compatible with all major hosting services and has an extensive standard library.Not to forget, the PHP community  is quite large and active, offering immense support and resources for learners.'),
(2, 'My Journey into the world of PHP progamming', 'Every journey begins with a single step, and mine into the world of PHP programming started with curiosity. As a student of computer science, I was fascinated by how websites worked behind the scenes. I had already learned the basics of C, C++, and Python, but I wanted to explore how dynamic websites were built. That’s when I was introduced to PHP.'),
(3, 'The Basics I\'ve Learned', 'At first, PHP seemed challenging with its mix of HTML and server-side scripting. But as I wrote my first PHP script, I realized its power in connecting websites with databases and making them interactive. From creating simple forms to connecting with MySQL, each step boosted my confidence and motivated me to go further.'),
(4, 'Advanced Topics', 'One of the most exciting parts of my journey has been building small projects, like login systems and contact forms, which gave me real-world experience. Gradually, I understood that PHP is not just about coding—it is about solving problems and making life easier through technology.'),
(5, 'Conclusion', 'Today, I see PHP as a strong foundation for my career in web development. My journey is still ongoing, but PHP has taught me patience, problem-solving, and the joy of turning ideas into reality. It has truly opened the door to a new world of opportunities.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
