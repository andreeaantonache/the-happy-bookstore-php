-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2019 at 10:06 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thehappybookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id_book` int(11) NOT NULL,
  `bookName` varchar(100) NOT NULL,
  `bookAuthor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id_book`, `bookName`, `bookAuthor`) VALUES
(1, 'Crime and Punishment', 'Fyodor Dostoyevsky'),
(2, 'Patul lui Proucust', 'Camil Petrescu'),
(3, 'Noaptea de Sanziene', 'Mircea Eliade'),
(4, 'Fratii Karamazov', 'Fyodor Dostoyevsky'),
(5, 'Adam Si Eva', 'Liviu Rebreanu'),
(6, 'Micul Print', 'Antoine de Saint-Exupéry'),
(7, 'Anna Karenina', 'Lev Tolstoi'),
(8, 'The Metamorphosis', 'Franz Kafka'),
(9, 'Jurnalul fericirii', 'Nicolae Steinhardt'),
(10, 'Madame Bovary', 'Gustave Flaubert'),
(11, 'The name of the rose', 'Humberto Eco'),
(12, '1984', 'George Orwell'),
(13, 'Tema pentru acasa', 'Nicolae Dabija'),
(14, 'Perfume. The story of a murderer', 'Patrick Suskind'),
(15, 'Blindness', 'Jose Saramago'),
(16, 'Iubirile lui Chico', 'Michel Zevaco'),
(17, 'Minerva se dezlantuie', 'Rodica Ojog-Brasoveanu'),
(18, 'Cianura pentru un suras', 'Rodica Ojog-Brasoveanu'),
(19, 'Al cincilea as', 'Rodica Ojog-Brasoveanu'),
(20, '320 de pisici negre', 'Rodica Ojog-Brasoveanu');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `contact_name` varchar(30) NOT NULL,
  `opinion` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'parola');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id_book`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id_book` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
