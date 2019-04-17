-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2018 at 08:09 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `obs`
--

-- --------------------------------------------------------

--
-- Table structure for table `sec_books`
--

CREATE TABLE `sec_books` (
  `id` int(6) UNSIGNED NOT NULL,
  `title` varchar(80) NOT NULL,
  `author` varchar(30) NOT NULL,
  `publisher` varchar(20) DEFAULT NULL,
  `year` int(4) DEFAULT NULL,
  `stock` int(5) DEFAULT NULL,
  `price` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sec_books`
--

INSERT INTO `sec_books` (`id`, `title`, `author`, `publisher`, `year`, `stock`, `price`) VALUES
(1, 'Classic Data Structures', ' BC Grewal', 'Randomhouse', 1998, 50, 355),
(3, 'Star Wars Trilogy (Novelisation)', ' SP Grewal', 'Penguin', 1995, 50, 225),
(4, 'Batman Unlimited#12-#50', ' Grant Morrison', 'Randomhouse', 1939, 50, 125),
(5, 'Harry Potter and the Prisoner of Azkaban', 'JK Rowling', 'Randomhouse', 1999, 50, 350),
(6, 'Blade - Trinity (New Platinum Series)', 'Bill Finger', 'Penguin', 2002, 50, 115),
(7, 'Million Dollar Baby (Widescreen Edition)', 'Bill Finger', 'Randomhouse', 2014, 50, 105),
(8, 'The Matrix Reloaded (Full Screen Edition)', 'Philip K. Dick', 'Randomhouse', 2012, 50, 75),
(9, 'Data Structures and Algorithmic Thinking with Python', 'K. Indira', 'Anuradha', 2010, 50, 275),
(10, 'Data Structures and Algorithms Using C', 'SP Singh', 'Modelhouse', 2013, 50, 350),
(11, 'Data Structures and Algorithms for GATE', 'SC Chand', 'Randomhouse', 2013, 50, 550),
(12, 'Data Structures and Algorithms Made Easy in JAVA', 'RS Shukla', 'Penguin', 2015, 50, 150),
(13, 'Data Structures and Algorithms Made Easy ', 'BS Singh', 'Penguin', 2014, 50, 375),
(14, 'Operating Systems Concepts ', 'BS Singh', 'Penguin', 2014, 50, 195),
(15, 'Operating Systems', 'MK Bhaskar', 'Nanda', 2015, 50, 475),
(16, 'Modern Operating Systems', 'BS Grewal', 'Stalling', 2014, 50, 290),
(17, 'Operating Systems', 'SK Grewal', 'Penguin', 2010, 50, 260),
(18, 'Operating Systems (Android)', 'SK Singh', 'Randomhouse', 2011, 50, 470),
(19, 'Operating Systems (UNIX)', 'SK Chand', 'Anuradha', 2011, 50, 245),
(20, 'Database Management System', 'Pankaj Agarwal', 'Anuradha', 2010, 50, 225),
(21, 'Database Management System (second edition)', 'Pankaj Agarwal', 'Anuradha', 2010, 50, 350),
(22, 'Database Management System', 'PK Yadav', 'Nanda', 2010, 50, 175),
(23, 'Database Management System Concepts', 'SK Jain', 'Nanda', 2010, 50, 115),
(24, 'Distributed DBMS', 'SK Sinha', 'Indira', 2015, 50, 105),
(25, 'Simplified Approach to DBMS', 'BS Sinha', 'Indira', 2016, 50, 75),
(26, 'Web Technologies (Black Book)', 'Sk Jain', 'Anuradha', 2009, 50, 255),
(27, 'Modern Web Development', 'PK Jain', 'Penguin', 2007, 50, 345),
(28, 'Web Technologies', 'PK Jain', 'Penguin', 2013, 50, 450),
(29, 'Internet and Web Technologies', 'K Indira', 'Modelhouse', 2013, 50, 320),
(30, 'Web Technologies', 'MS Bhatt', 'Randomhouse', 2012, 50, 450),
(31, 'Web Technologies', 'SP Sen', 'Randomhouse', 2012, 50, 275),
(32, 'Computer Architecture and Organisation ', 'PK Jain', 'Modelhouse', 2013, 50, 205),
(33, 'Computer Architecture and Organisation (in Hindi ', 'PS Singh', 'Nanda', 2014, 50, 375),
(34, 'Computer Architecture and Organisation ', 'Manish Saraswat', 'Nanda', 2014, 50, 650),
(35, 'Computer Architecture and Organisation ', 'PB Sinha', 'Penguin', 2013, 50, 450),
(36, 'Computer Architecture and Organisation (A Practical Approach) ', 'SK Jain', 'Randomhouse', 2011, 50, 350),
(37, 'Computer Architecture ', 'WB Iyer', 'Modelhouse', 2010, 50, 175),
(56, 'A brief History of time', 'Stephen Hawkings', 'Penguin', 2005, 50, 175);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sec_books`
--
ALTER TABLE `sec_books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sec_books`
--
ALTER TABLE `sec_books`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
