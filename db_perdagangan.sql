-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2020 at 06:39 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perdagangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_jam`
--

CREATE TABLE `tb_jam` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jam`
--

INSERT INTO `tb_jam` (`id`, `nama`, `gambar`, `deskripsi`, `harga`, `stok`, `created_at`, `updated_at`) VALUES
(7, 'g-shock GST-S120L-1BDR', '2020-11-03_Gambar1.jpg', 'G-Shock sebenarnya adalah jam tangan yang dibuat oleh Casio, namun didesain dengan model yang lebih kasual dan sporty. Buat kamu para pria yang suka jalan-jalan jauh, menyelam ke laut, naik gunung, dan aktivitas-aktivitas berat lainnya, G-Shock adalah merk jam tangan terkenal buat kamu.', 3417000, 5, '2020-11-02 21:30:10', '2020-11-02 21:30:10'),
(8, 'Fossil FS5381 Neutra Chronograph Black', '2020-11-03_Gambar2.jpg', 'Fossil adalah merk jam tangan buat kamu yang ingin tampil elegan dan berkelas dengan sentuhan klasik yang tentu saja menambah kesan vintage pada diri kamu. Terutama jam tangan Fossil yang terbuat dari kulit asli berwarna cokelat. Kalau kamu memakai jam tangan Fossil yang talinya terbuat dari kulit, dijamin, seiring menuanya kulit jam tangan kamu, kamu akan terlihat lebih elegan, karena aksesori apapun yang terbuat dari kulit asli cenderung membuat kaum pria terlihat lebih manly', 2260000, 10, '2020-11-02 21:31:25', '2020-11-02 21:31:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_jam`
--
ALTER TABLE `tb_jam`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_jam`
--
ALTER TABLE `tb_jam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
