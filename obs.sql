-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2018 at 04:00 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(2) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `pwd`, `firstName`, `lastName`, `mobile`, `email`) VALUES
(2, 'Ayush', 'Qt50rck', 'Ayush', 'Chakrabortty', '7405757991', 'ayush@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(6) UNSIGNED NOT NULL,
  `title` varchar(80) NOT NULL,
  `author` varchar(30) NOT NULL,
  `publisher` varchar(20) DEFAULT NULL,
  `year` int(4) DEFAULT NULL,
  `stock` int(5) DEFAULT NULL,
  `price` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `publisher`, `year`, `stock`, `price`) VALUES
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
(56, 'A brief History of time', 'Stephen Hawkings', 'Penguin', 2005, 50, 175),
(66, 'Alchemist', 'Paul Caulho', 'Penguin', 2005, 50, 200),
(126, 'Microprocessor and Interfacing', 'Ak ray', 'Pearson', 2007, 60, 300),
(111, 'Microprocessor and Interfacing', 'Ak ray', 'Pearson', 2007, 60, 300),
(92, 'wdwq', 'dshg', 'vjh', 2018, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(6) UNSIGNED NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `address` varchar(60) DEFAULT NULL,
  `number` int(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `firstname`, `lastname`, `address`, `number`, `email`, `password`) VALUES
(1, 'fcqw', 'q', 'ft4wtg rtg rtgrw rtg', 2434, 'varun2@gmail.com', 'Qwerty2'),
(2, 'wedni', 'lbiwuh', 'ohwei woiefh wehoi', 9072834, 'qwerty@gmail.com', 'Qwerty2'),
(3, 'jhgfjg', 'kuygj', ',jgkhk. guiyuj', 869, 'daniyal@gmail.com', 'Qwerty2'),
(4, 'l3fkjn', 'fiuuul', 'hf3ou ohi4d', 9870, 'r44ohit@yahoo.in', 'Qwerty2'),
(5, 'erferf', 'gver', 'jw uwdgk kgwuedk', 99076, 'r44ohit@gmail.com', 'Qwerty2'),
(6, 'Rohit', 'Mittal', 'ernk roij geoi', 902734923, 'daniyal1@gmail.com', 'Qwerty2'),
(7, 'abir', 'bhattacharjee', 'lfwejk wekjlbdh;', 9038921, 'abirb@gmail.com', 'Qwertyuiop1'),
(8, 'Ayush', 'Chakrabortty', 'abcd', 2147483647, 'ayush@gmail.com', 'Chand98'),
(9, 'Japneet ', 'Kaur Saluja', 'vit', 2147483647, 'japneet@gmail.com', 'Qt50rck'),
(10, 'yash', 'gupta', 'agdgjs', 123456789, 'yash@gamil.com', 'Abcd@1234');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `bid` int(6) UNSIGNED DEFAULT NULL,
  `cid` int(6) UNSIGNED DEFAULT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'cart',
  `qty` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`bid`, `cid`, `status`, `qty`) VALUES
(3, 1, 'cart', 1),
(27, 1, 'cart', 1),
(14, 1, 'cart', 1),
(26, 6, 'cart', 1),
(9, 6, 'cart', 1),
(15, 6, 'cart', 1),
(14, 6, 'cart', 1),
(27, 6, 'cart', 1),
(29, 7, 'cart', 1),
(28, 7, 'cart', 1),
(5, 7, 'cart', 1),
(3, 0, 'cart', 1),
(3, 6, 'cart', 1),
(5, 8, 'cart', 1),
(32, 9, 'cart', 1),
(27, 9, 'cart', 1),
(28, 9, 'cart', 1),
(36, 9, 'cart', 1),
(0, 9, 'cart', 1),
(3, 9, 'cart', 1),
(8, 8, 'cart', 1),
(16, 0, 'cart', 1),
(3, 10, 'cart', 1),
(21, 10, 'cart', 1),
(8, 10, 'cart', 1);

-- --------------------------------------------------------

--
-- Table structure for table `history_2`
--

CREATE TABLE `history_2` (
  `bid` int(6) UNSIGNED DEFAULT NULL,
  `cid` int(6) UNSIGNED DEFAULT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'cart',
  `qty` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history_2`
--

INSERT INTO `history_2` (`bid`, `cid`, `status`, `qty`) VALUES
(5, 10, 'cart', 1),
(3, 0, 'cart', 1),
(3, 9, 'cart', 1),
(5, 8, 'cart', 1),
(6, 8, 'cart', 1),
(7, 9, 'cart', 1),
(0, 9, 'cart', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sec_books`
--

CREATE TABLE `sec_books` (
  `id` int(6) UNSIGNED NOT NULL,
  `title` varchar(80) NOT NULL,
  `author` varchar(30) NOT NULL,
  `publisher` varchar(20) DEFAULT NULL,
  `price` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sec_books`
--

INSERT INTO `sec_books` (`id`, `title`, `author`, `publisher`, `price`) VALUES
(1, 'Classic Data Structures', ' BC Grewal', 'Randomhouse', 355),
(3, 'Star Wars Trilogy (Novelisation)', ' SP Grewal', 'Penguin', 225),
(4, 'Batman Unlimited#12-#50', ' Grant Morrison', 'Randomhouse', 125),
(5, 'Harry Potter and the Prisoner of Azkaban', 'JK Rowling', 'Randomhouse', 350),
(6, 'Blade - Trinity (New Platinum Series)', 'Bill Finger', 'Penguin', 115),
(7, 'Million Dollar Baby (Widescreen Edition)', 'Bill Finger', 'Randomhouse', 105),
(8, 'The Matrix Reloaded (Full Screen Edition)', 'Philip K. Dick', 'Randomhouse', 75),
(9, 'Data Structures and Algorithmic Thinking with Python', 'K. Indira', 'Anuradha', 275),
(10, 'Data Structures and Algorithms Using C', 'SP Singh', 'Modelhouse', 350),
(11, 'Data Structures and Algorithms for GATE', 'SC Chand', 'Randomhouse', 550),
(12, 'Data Structures and Algorithms Made Easy in JAVA', 'RS Shukla', 'Penguin', 150),
(13, 'Data Structures and Algorithms Made Easy ', 'BS Singh', 'Penguin', 375),
(14, 'Operating Systems Concepts ', 'BS Singh', 'Penguin', 195),
(15, 'Operating Systems', 'MK Bhaskar', 'Nanda', 475),
(16, 'Modern Operating Systems', 'BS Grewal', 'Stalling', 290),
(17, 'Operating Systems', 'SK Grewal', 'Penguin', 260),
(18, 'Operating Systems (Android)', 'SK Singh', 'Randomhouse', 470),
(19, 'Operating Systems (UNIX)', 'SK Chand', 'Anuradha', 245),
(20, 'Database Management System', 'Pankaj Agarwal', 'Anuradha', 225),
(21, 'Database Management System (second edition)', 'Pankaj Agarwal', 'Anuradha', 350),
(22, 'Database Management System', 'PK Yadav', 'Nanda', 175),
(23, 'Database Management System Concepts', 'SK Jain', 'Nanda', 115),
(24, 'Distributed DBMS', 'SK Sinha', 'Indira', 105),
(25, 'Simplified Approach to DBMS', 'BS Sinha', 'Indira', 75),
(26, 'Web Technologies (Black Book)', 'Sk Jain', 'Anuradha', 255),
(27, 'Modern Web Development', 'PK Jain', 'Penguin', 345),
(28, 'Web Technologies', 'PK Jain', 'Penguin', 450),
(29, 'Internet and Web Technologies', 'K Indira', 'Modelhouse', 320),
(30, 'Web Technologies', 'MS Bhatt', 'Randomhouse', 450),
(31, 'Web Technologies', 'SP Sen', 'Randomhouse', 275),
(32, 'Computer Architecture and Organisation ', 'PK Jain', 'Modelhouse', 205),
(33, 'Computer Architecture and Organisation (in Hindi ', 'PS Singh', 'Nanda', 375),
(34, 'Computer Architecture and Organisation ', 'Manish Saraswat', 'Nanda', 650),
(35, 'Computer Architecture and Organisation ', 'PB Sinha', 'Penguin', 450),
(36, 'Computer Architecture and Organisation (A Practical Approach) ', 'SK Jain', 'Randomhouse', 350),
(37, 'Computer Architecture ', 'WB Iyer', 'Modelhouse', 175),
(56, 'A brief History of time', 'Stephen Hawkings', 'Penguin', 175),
(136, 'Computer Architecture', 'William Stallings', 'Pearson', 350),
(102, 'Microprocessor and Interfacing', 'Ak ray', 'Pearson', 300),
(167, 'Alchemist', 'Paul Caulho', 'Penguin', 150),
(140, 'aads', 'dsd', 'dsfdf', 300),
(64, 'nhxj', 'jsywde', 'wjddkke', 300),
(85, 'A brief History of time', 'Stephen Hawkings', 'Penguin', 150),
(104, 'asdas', 'dzczdc', 'czdcdzv', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD UNIQUE KEY `bid` (`bid`,`cid`);

--
-- Indexes for table `history_2`
--
ALTER TABLE `history_2`
  ADD UNIQUE KEY `bid` (`bid`,`cid`);

--
-- Indexes for table `sec_books`
--
ALTER TABLE `sec_books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
