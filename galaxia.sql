-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 01, 2019 at 04:44 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `galaxia`
--

-- --------------------------------------------------------

--
-- Table structure for table `ideas`
--

CREATE TABLE `ideas` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `number` varchar(10) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pdescription` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ideas`
--

INSERT INTO `ideas` (`id`, `name`, `number`, `pname`, `email`, `pdescription`) VALUES
(1, 'Sashi Kant', '7899284215', 'Mobile App for Kristu Jayanti', 'skojha32@gmail.com', 'To build a mobile application for kristu jayanti');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL,
  `skills` varchar(500) NOT NULL,
  `github` varchar(50) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `name`, `email`, `number`, `skills`, `github`, `message`) VALUES
(1, 'Sashi Kant Ojha', 'skojha32@gmail.com', '7899284215', 'Content writer, MC', 'www.github.com/skojha32', ''),
(2, 'Swayam Agarwal', 'swayam@gmail.com', '8618839433', 'web designing, front end designer, back end designer', 'www.github.com/skojha32', 'Work hard play hard'),
(3, 'Pooja ', 'pooja@gmail.com', '1313413413', 'singing, art and craft', 'www.github.com/skojha32', 'Mind your own business'),
(4, 'Xavier', 'xavier@gmail.com', '8151890649', 'dancing, oratorial, writing', 'www.github.com/xavier', 'None of your business '),
(5, 'Sunil', 'sunil@gmail.com', '8151890649', 'Content writer, MC', 'www.github.com/xavier', 'Work hard play hard'),
(6, 'Emmanuel', 'Emmanuel@gmail.com', '1313413413', 'designer, art and craft', '', ''),
(7, 'karunya', 'Kavya@gmail.com', '8151890649', 'MC,dancer', '', ''),
(8, 'Kavya Parashar', 'parashar20@gmail.com', '9817620546', 'Photo editing, oratorial, dancing', 'www.github.com/parashar20', 'combine collaborate'),
(9, 'Riya Reji', 'rreji32@gmail.com', '7892356107', 'graphic designing, photo editing, video editing', 'www.github.com/rejiriya', 'abc'),
(10, 'Shweta Deb', 'debsweta_22@gmail.com', '9606128350', 'logo designing, oratorial, singing', 'www.github.com/shwetadeb', 'work is worship'),
(11, 'Alfred', 'alfred1@gmail.com', '9870023067', 'web designing, music, content writing', 'www.github.com/alfred123', 'smile s the best cure for anything'),
(12, 'Marilyn', 'mathaimarilyn@yahoo.com', '9801734920', 'Dancing, Singing, creative writing', 'www.github.com/smarilyn', 'positive thinking'),
(13, 'Jeslin Philip', 'philipie27@gmail.com', '9078316498', 'presentation, model designing', 'www.github.com/jeslinp', 'presentation defines you'),
(14, 'Alex K J', 'alexkj06@gamail.com', '8073159335', 'Designer', '', ''),
(15, 'shobhan', 'shobhanmanik12@gmail.com', '253758371827', 'artist', '', ''),
(16, 'benita', 'josephinebenita2001@kristujayanti.com', '9148088951', 'mc,dancer', '', ''),
(17, 'rakshiha', 'rakshitha11@gmail.com', '8722792211', 'Mc', '', ''),
(18, 'jayashree', 'jayashree21jaya@gmail.com', '9113957378', 'Dance, singing, photography', '', ''),
(19, 'Sidhi', 'siddhi@gmail.com', '987654319', 'BAkchodi', 'no', 'Hii'),
(20, 'Abel Sam', 'abelsam11@gmail.com', '1234567890', 'Designer', 'www.dshfksg.com', 'cool!'),
(21, 'Aishwarya', '17cs401006@kristujayanti.com', '9482419695', 'dancing,communicate', '', ''),
(22, 'nida', '18cs602011@kristujayanti.com', '8152945632', 'debating,writing', '', 'never give up'),
(23, 'zapbitz', 'mabhilash35@gmail.com', '8129148393', 'web designing, front end designer, back end designer', 'www.github.com/parashar20', 'combine collaborate'),
(24, 'ajith', 'ajith@gmail.com', '8892399063', 'designer', 'galaxya', 'nice'),
(25, 'xavier', 'skojha32@gmail.com', '7899284215', 'dancing, oratorial, writing', 'www.github.com/skojha32', 'None of your business '),
(26, 'ranjith', 'alwinj712@gmail.com', '9108945469', 'photography', 'school project', ''),
(27, 'ayesha', 'ayeshaanfai2561@gmail.com', '6361673370', 'web designing, front end designer, back end designer', 'www.github.com/skojha32', 'Work hard play hard'),
(28, 'tamanna', 'tamanna@gmail.com', '1234567899', 'dancing, oratorial, writing', 'www.github.com/xavier', 'Work hard play hard'),
(29, 'deepthi', 'abc@gmail.com', '2353476890', 'sleeping', '', 'blaaaaaaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ideas`
--
ALTER TABLE `ideas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ideas`
--
ALTER TABLE `ideas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
