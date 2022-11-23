-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3360
-- Generation Time: Nov 22, 2022 at 03:41 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_modul3`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_user`
--

CREATE TABLE `table_user` (
  `id_mobil` int(255) NOT NULL,
  `nama_mobil` varchar(255) NOT NULL,
  `pemilik_mobil` varchar(255) NOT NULL,
  `merk_mobil` varchar(255) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `deskripsi` text NOT NULL,
  `foto_mobil` varchar(255) NOT NULL,
  `status_pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_user`
--

INSERT INTO `table_user` (`id_mobil`, `nama_mobil`, `pemilik_mobil`, `merk_mobil`, `tanggal_beli`, `deskripsi`, `foto_mobil`, `status_pembayaran`) VALUES
(2, 'rush', 'amir', 'nissan', '2022-11-09', 'awsedrfgbhnjmkawsedrfgbhnjmkawsedrfgbhnjmkawsedrfgbhnjmkawsedrfgbhnjmkawsedrfgbhnjmkawsedrfgbhnjmkawsedrfgbhnjmkawsedrfgbhnjmkawsedrfgbhnjmkawsedrfgbhnjmkawsedrfgbhnjmkawsedrfgbhnjmk', 'rush.jpg', 'Lunas'),
(3, 'brio', 'amiraaa', 'honda', '2022-11-11', 'qwertyuiop[olikjhgfdsadfvgbnbvcx', 'brio.jpg', 'Belum Lunas'),
(4, 'ayla', 'hamida', 'daihatsu', '2022-11-25', 'wertyuiokmnhhbhujhbdjcnbdnjickj nkdsjbcjdcd', 'ayla.jpg', 'Lunas'),
(5, 'rush', 'qwertyu', 'honda', '2022-12-02', 'qwertyhgbdfvc', 'rush.jpg', 'Lunas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_user`
--
ALTER TABLE `table_user`
  ADD PRIMARY KEY (`id_mobil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_user`
--
ALTER TABLE `table_user`
  MODIFY `id_mobil` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
