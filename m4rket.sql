-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2020 at 12:19 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `m4rket`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nama_barang` varchar(60) NOT NULL,
  `kategori_barang` varchar(50) NOT NULL DEFAULT 'Lainnya',
  `harga_barang` int(20) NOT NULL,
  `stok_barang` int(10) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal_barang` datetime NOT NULL,
  `gambar_barang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `id_user`, `nama_barang`, `kategori_barang`, `harga_barang`, `stok_barang`, `deskripsi`, `tanggal_barang`, `gambar_barang`) VALUES
(68, 75, 'Teu Jelas ', 'gadget', 122, 1231, 'qweqeqe', '2019-10-26 18:12:08', '5db47058433be.jpg'),
(71, 74, 'diazs', 'perlengkapan_sekolah', 10000, 19, 'bagus', '2019-10-27 02:01:14', '5db4ec5aaeffc.jpg'),
(73, 79, 'KemodMangpang', 'lain-lain', 300000, 90, 'Bagus Buatan Kemod asli', '2019-10-27 02:22:27', '5db4f15387a90.jpg'),
(75, 81, 'Badjoe', 'perlengkapan_sekolah', 100000, 10, 'Ada tintanya', '2019-10-27 14:30:04', '5db59bdc6fc6c.jpg'),
(76, 81, 'alat', 'lain-lain', 25000, 100, 'bar bar bau', '2019-10-27 14:31:18', '5db59c26e4d70.jpeg'),
(77, 81, 'Teh gelas ', 'makanan_minuman', 100000, 99, 'Bar bar bau', '2019-10-27 14:32:14', '5e5be7eb2d259.jpg'),
(78, 81, 'baju + cincin', 'aksesoris', 30000, 100, 'Bar bar bau', '2019-10-27 14:33:00', '5db59c8c9b682.jpeg'),
(79, 81, 'Cilok', 'makanan_minuman', 2000, 100, 'stok terbatas', '2019-10-27 14:34:11', '5db59cd3a3836.jpg'),
(80, 75, 'qwewq', 'makanan&amp;minuman', 121132, 12, 'qwewqe', '2020-01-20 16:58:59', '5e25ce43a358e.jpeg'),
(83, 83, 'Becak', 'Lainnya', 100000, 12, 'Becak Tigoeling', '2020-03-18 00:00:00', '..php'),
(84, 81, 'Baju Renang', 'Lainnya', 10000, 16, 'Bagus', '2020-03-24 12:29:18', 'baju.jp');

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE `data_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `nama_pelapak` varchar(20) NOT NULL,
  `no_tlp` varchar(15) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`id_user`, `nama`, `nama_pelapak`, `no_tlp`, `email`, `username`, `password`, `profile`) VALUES
(65, 'd', 'd', NULL, '', 's', '$2y$10$vNxzLFcMhy2DP4Mcx7SSYeFqD1i17ngv3DiB3gXV/W2Lvr7Caqj8K', ''),
(66, '123', '123', NULL, '', 'ee', '$2y$10$1zp4R6geDo32XZ8XapNefe9vpgMBvk1d6S3HVFvyFjYnOb1kxYEq.', ''),
(67, 'diazs martiansyah', '', '', '', 'qq', '$2y$10$PUiRfX6.ezMf4rTy9UfRRuA0UK.J94KtX7CTgrlY5oxUGDqO..73C', ''),
(68, 'diazs martiansyah', 'Diazs', '', '', 'diazs', '$2y$10$GwfGcb9vR4yp.364RvDqU.PBWCl09rhLd9Ql0SANjYQCU8vRoVtt.', ''),
(69, 'diazsbudjang', '', '', '', 'walah', '$2y$10$e9bHdfNUUlNCmQ.o4xpAZOEWITxiWKkt0rrFCAJYEELtFGHeyjfIO', ''),
(70, 'diazs', 'uhuy', '', '', '12351', '$2y$10$ZZ3JScj/MZe324UZAopUYOU10/D7aRXQAm/Icwp0Xrmfa7tHkSdfC', ''),
(71, 'qeqeqe', 'qweqqw', '', '', 'qweee', '$2y$10$B5olgRSIClmUF67YsEaK3.ZbKAx0UQtcC7We3lRLakVCAmBUWvvya', ''),
(72, 'q', 'q', 'q', '', 'w', '$2y$10$3cShCv.ObtAlmEA4qRHl7eQ/eSEZDcl5.UBW1i1KuODeatA2vMDBy', ''),
(73, 'diazs', 'diazs_', '089283132', '', 'diazs123', '$2y$10$vNdVbeQV0/NrWB6I0O0SHOLvh/hy.7.jtvJ7uAR19.WqlfmY8bLBm', ''),
(74, 'Diazs_Programmer', 'Diazs_kantin', '09981231', '', 'diazs_lc', '123456789', '5db5844b731d3.jpg'),
(75, 'diazs martiansyah', 'Diazs Martiansyah', '019293413', '', '', '$2y$10$vEH24Q5gOcoNWoJGu9AarOU.bZx1jIU9OFRe9TrOSj6bYyCzOJfRS', ''),
(76, 'd', 'd', 'd', '', 'd', '$2y$10$bWFAwxIo5nHtLTkfuB2XT.58t919lJsql9UJuHMl4Xlqclr.yzm7i', ''),
(77, 'diazs martiansyah', 'diazs', '0819123214', '', 'jajang', '$2y$10$5sjDiUREJ2bbtNidLA2Ev.s4wgf71gl/UfPuVLZT2OSuKy.YMXgZm', ''),
(78, 'm', 'm', '1920131313123', '', 'qwertyuiop', '$2y$10$P5oZDxbTvXhAuqCIPicp/.UO5kQ1BDSw4Smbe2OMBX9ImjFXZDDrG', ''),
(79, 'Kemod', 'Kemod_123', '098123123387', '', 'kemod123', '$2y$10$PvricXatn/SGu0s1fIbAW.SZDMYxlyoQ7vnFJTBA1I0blgbvi5xfa', ''),
(80, 'LOLO', 'LOLO', '102921321313', '', 'lolololo', '$2y$10$.onmM7KwnfuNJE2MaqZwZ.n6j3RiQJqiQSfrkP2HdBym2bXbM6rhG', ''),
(81, 'adulahmad', 'adulahmad', '13131232138', '', 'adulahmad', '$2y$10$N9FpozxRn9vW.AKI/NIU7.KA8HBqkoaAHmJfwRPIIoDjciItFOZdS', ''),
(83, 'dean', '1', '12312412412412', '', '1', '$2y$10$APmP4k/HbZPR.2A42IePXOGHHwEXPvR0ns.SBvKeCbM/YIAWKWp5S', ''),
(84, 'diazsDw', 'Rumah Diazs', '089662251672', 'diazsmartiansyah28@gmail.com', 'diazs25', '$2y$10$KNjgHcsBdwxbP4MXVaBJSOcnX1PBjzx3uXdd7pTjgWdB4kdmi3pfy', '5e4933fda9c10.png'),
(85, 'Dz', 'DzMrt', '02455126585', 'diazsmartiansyah.siswa@smkn4bdg.sch.id', 'diazs26', '$2y$10$9YVt7sRy73aRE0mXX5db0ueLRE3BMIq3XlpZ9LzjWBHEJrbrSXcBK', ''),
(86, 'Diazs Martiansyah', 'Diazs Lapak', '089662251672', 'diazsmartiansyah28@gmail.com', 'diazs111', '$2y$10$vXLC/v1CU5/h4PQD7Cz5iuEMugn2p9BxedHcQsSXiqJc8mszo7iD6', '');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id_keranjang`, `id_barang`, `id_user`) VALUES
(6, 71, 86),
(7, 71, 86),
(10, 71, 86),
(11, 71, 86);

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `id_saran` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(20) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_pembeli` int(11) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `tanggal_transaksi` datetime NOT NULL,
  `tipe_pembayaran` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_barang`, `id_pembeli`, `jumlah`, `tanggal_transaksi`, `tipe_pembayaran`) VALUES
(1583072344, 82, 86, 0, '2020-03-01 15:24:00', 'COD'),
(1583073019, 82, 86, 0, '2020-03-01 15:30:19', 'COD'),
(1583073128, 82, 86, 0, '2020-03-01 15:32:08', 'pulsa'),
(1583073720, 82, 86, 2, '2020-03-01 15:42:00', 'transfer'),
(1583074580, 82, 86, 3, '2020-03-01 15:56:20', 'transfer'),
(1583074639, 82, 86, 1, '2020-03-01 15:57:19', 'transfer'),
(1583074721, 82, 86, 3, '2020-03-01 15:58:41', 'transfer'),
(1583074791, 82, 86, 2, '2020-03-01 15:59:51', 'transfer'),
(1583075934, 82, 86, 2, '2020-03-01 16:18:54', 'pulsa'),
(1583075968, 82, 86, 1, '2020-03-01 16:19:28', 'transfer'),
(1583076245, 82, 86, 1, '2020-03-01 16:24:05', 'transfer'),
(1583076593, 82, 86, 2, '2020-03-01 16:29:53', 'transfer'),
(1583076940, 77, 86, 1, '2020-03-01 16:35:40', 'transfer'),
(1583327377, 71, 86, 1, '2020-03-04 14:09:37', 'transfer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_pembeli` (`id_pembeli`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `data_user`
--
ALTER TABLE `data_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `data_user` (`id_user`);

--
-- Constraints for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `keranjang_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`),
  ADD CONSTRAINT `keranjang_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `data_user` (`id_user`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_pembeli`) REFERENCES `data_user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
