-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2022 at 08:37 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `client_22`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(25) NOT NULL,
  `nama_lengkap` varchar(25) NOT NULL,
  `no_telpon` varchar(15) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `tanggal_lahir` varchar(25) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama_lengkap`, `no_telpon`, `gender`, `tanggal_lahir`, `email`, `password`) VALUES
(1, 'rahan', '23131', 'fdsa', '13-09-2022', 'cok@gmail.com', '123'),
(3, 'fdsa', '1231', 'fsafas', '123', 'ptrou7892@gmail.com', '123'),
(4, 'fdsa', '23131', 'fsa', '29-09-2022', 'admin@gmail.com', '123'),
(5, 'rayhanz', '0', 'laki-laki', '2022-11-02', 'admin@gmail.com', '123'),
(6, 'edgar', '3123131', '', '2022-10-30', 'edgar@gmail.com', '123'),
(7, 'sevchenko', '2147483647', 'laki-laki', '2022-11-22', 'sev@gmail.com', '123'),
(8, 'cameroon', '890909090', 'laki-laki', '2022-12-15', 'cameroon@gmail.com', '123'),
(9, 'esteban', '08215449494', 'laki-laki', '2022-12-14', 'esteban@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
