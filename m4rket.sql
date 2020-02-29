-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Feb 2020 pada 07.33
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

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
-- Struktur dari tabel `barang`
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
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `id_user`, `nama_barang`, `kategori_barang`, `harga_barang`, `stok_barang`, `deskripsi`, `tanggal_barang`, `gambar_barang`) VALUES
(86, 86, 'Ps4 SONY Slim 1TB mega pack2 garansi resmi SONY', 'lain-lain', 3875000, 20, 'selamat datang dan terima kasih anda telah melihat produk kami\r\nbarang selalu ready stok\r\nFREE ONGKIR\r\nplaystation 4 slim / ps4 slim\r\nbundle mega pack 2\r\ngaransi resmi sony\r\n\r\npaket dan perlengkapan\r\n1 unit playstation 4 slim ( jet black ) with 1tb hardisk \r\n( CUH - 2218BB01 )\r\n1 unit DUAL SHOCK 4 wirelless controller ( jet black ) \r\n1 unit bluray god of war ( asia )\r\n1 unit bluray horizon zero dawn complete edition asia\r\n1 unit bluray GTA V premium edition\r\n1 unit playstation plus 3 bulan asia\r\n1 unit fortnite bundle neo versa ( download code )\r\n - epic neo versa outfit\r\n - epic neo phrenzy back bling\r\n - 2000 V - bucks\r\n\r\nmain processor\r\nsingle - chip custom processor\r\nCPU : X86-64 AMD JAGUAR 8 cores\r\nGPU : 1.84 TFLOPS, AMD radeon based graphics engine\r\nmemory GDDR5 main 8gb\r\nhardisk internal 1 tb\r\n\r\ncatatan \r\nkliam garansi bisa langsung bawa ke kantor cabang sony service center terdekat di kota anda\r\n\r\nterima kasih atas kunjungan anda', '2020-02-23 12:33:42', '5e526316f0aa6.jpg'),
(87, 86, 'JaketSweater Hoodie Hitam Polos Keren Berkualitas Distro ', 'lain-lain', 134000, 40, '\r\n\r\nSize Tersedia: M,L, XL ( size lokal )\r\n\r\nSaatnya tampil Simpel, Santai &amp; Elegan dengan jaket Hoodie ini. Sangat cocok dipakai untuk nonton bareng, hang out, atau casual.\r\n\r\nPS: Sebelum memesan mohon tanyakan terlebih dahulu ketersediaan barangnya.\r\n\r\nTerimakasih, happy shopping ^^\r\n\r\nTerimakasih telah berkunjung ke toko kami, jam kerja 08:00-17:00 WIB\r\n', '2020-02-23 12:37:05', '5e5263e1b8d5b.jpg'),
(104, 86, 'Ps4 SONY Slim 1TB mega pack2 garansi resmi SONY', 'lain-lain', 3875000, 20, 'selamat datang dan terima kasih anda telah melihat produk kami\r\nbarang selalu ready stok\r\nFREE ONGKIR\r\nplaystation 4 slim / ps4 slim\r\nbundle mega pack 2\r\ngaransi resmi sony\r\n\r\npaket dan perlengkapan\r\n1 unit playstation 4 slim ( jet black ) with 1tb hardisk \r\n( CUH - 2218BB01 )\r\n1 unit DUAL SHOCK 4 wirelless controller ( jet black ) \r\n1 unit bluray god of war ( asia )\r\n1 unit bluray horizon zero dawn complete edition asia\r\n1 unit bluray GTA V premium edition\r\n1 unit playstation plus 3 bulan asia\r\n1 unit fortnite bundle neo versa ( download code )\r\n - epic neo versa outfit\r\n - epic neo phrenzy back bling\r\n - 2000 V - bucks\r\n\r\nmain processor\r\nsingle - chip custom processor\r\nCPU : X86-64 AMD JAGUAR 8 cores\r\nGPU : 1.84 TFLOPS, AMD radeon based graphics engine\r\nmemory GDDR5 main 8gb\r\nhardisk internal 1 tb\r\n\r\ncatatan \r\nkliam garansi bisa langsung bawa ke kantor cabang sony service center terdekat di kota anda\r\n\r\nterima kasih atas kunjungan anda', '2020-02-23 12:33:42', '5e526316f0aa6.jpg'),
(105, 86, 'JaketSweater Hoodie Hitam Polos Keren Berkualitas Distro ', 'lain-lain', 134000, 40, '\r\n\r\nSize Tersedia: M,L, XL ( size lokal )\r\n\r\nSaatnya tampil Simpel, Santai &amp; Elegan dengan jaket Hoodie ini. Sangat cocok dipakai untuk nonton bareng, hang out, atau casual.\r\n\r\nPS: Sebelum memesan mohon tanyakan terlebih dahulu ketersediaan barangnya.\r\n\r\nTerimakasih, happy shopping ^^\r\n\r\nTerimakasih telah berkunjung ke toko kami, jam kerja 08:00-17:00 WIB\r\n', '2020-02-23 12:37:05', '5e5263e1b8d5b.jpg'),
(106, 86, 'Ps4 SONY Slim 1TB mega pack2 garansi resmi SONY', 'lain-lain', 3875000, 20, 'selamat datang dan terima kasih anda telah melihat produk kami\r\nbarang selalu ready stok\r\nFREE ONGKIR\r\nplaystation 4 slim / ps4 slim\r\nbundle mega pack 2\r\ngaransi resmi sony\r\n\r\npaket dan perlengkapan\r\n1 unit playstation 4 slim ( jet black ) with 1tb hardisk \r\n( CUH - 2218BB01 )\r\n1 unit DUAL SHOCK 4 wirelless controller ( jet black ) \r\n1 unit bluray god of war ( asia )\r\n1 unit bluray horizon zero dawn complete edition asia\r\n1 unit bluray GTA V premium edition\r\n1 unit playstation plus 3 bulan asia\r\n1 unit fortnite bundle neo versa ( download code )\r\n - epic neo versa outfit\r\n - epic neo phrenzy back bling\r\n - 2000 V - bucks\r\n\r\nmain processor\r\nsingle - chip custom processor\r\nCPU : X86-64 AMD JAGUAR 8 cores\r\nGPU : 1.84 TFLOPS, AMD radeon based graphics engine\r\nmemory GDDR5 main 8gb\r\nhardisk internal 1 tb\r\n\r\ncatatan \r\nkliam garansi bisa langsung bawa ke kantor cabang sony service center terdekat di kota anda\r\n\r\nterima kasih atas kunjungan anda', '2020-02-23 12:33:42', '5e526316f0aa6.jpg'),
(107, 86, 'Ps4 SONY Slim 1TB mega pack2 garansi resmi SONY', 'lain-lain', 3875000, 20, 'selamat datang dan terima kasih anda telah melihat produk kami\r\nbarang selalu ready stok\r\nFREE ONGKIR\r\nplaystation 4 slim / ps4 slim\r\nbundle mega pack 2\r\ngaransi resmi sony\r\n\r\npaket dan perlengkapan\r\n1 unit playstation 4 slim ( jet black ) with 1tb hardisk \r\n( CUH - 2218BB01 )\r\n1 unit DUAL SHOCK 4 wirelless controller ( jet black ) \r\n1 unit bluray god of war ( asia )\r\n1 unit bluray horizon zero dawn complete edition asia\r\n1 unit bluray GTA V premium edition\r\n1 unit playstation plus 3 bulan asia\r\n1 unit fortnite bundle neo versa ( download code )\r\n - epic neo versa outfit\r\n - epic neo phrenzy back bling\r\n - 2000 V - bucks\r\n\r\nmain processor\r\nsingle - chip custom processor\r\nCPU : X86-64 AMD JAGUAR 8 cores\r\nGPU : 1.84 TFLOPS, AMD radeon based graphics engine\r\nmemory GDDR5 main 8gb\r\nhardisk internal 1 tb\r\n\r\ncatatan \r\nkliam garansi bisa langsung bawa ke kantor cabang sony service center terdekat di kota anda\r\n\r\nterima kasih atas kunjungan anda', '2020-02-23 12:33:42', '5e526316f0aa6.jpg'),
(108, 86, 'Ps4 SONY Slim 1TB mega pack2 garansi resmi SONY', 'lain-lain', 3875000, 20, 'selamat datang dan terima kasih anda telah melihat produk kami\r\nbarang selalu ready stok\r\nFREE ONGKIR\r\nplaystation 4 slim / ps4 slim\r\nbundle mega pack 2\r\ngaransi resmi sony\r\n\r\npaket dan perlengkapan\r\n1 unit playstation 4 slim ( jet black ) with 1tb hardisk \r\n( CUH - 2218BB01 )\r\n1 unit DUAL SHOCK 4 wirelless controller ( jet black ) \r\n1 unit bluray god of war ( asia )\r\n1 unit bluray horizon zero dawn complete edition asia\r\n1 unit bluray GTA V premium edition\r\n1 unit playstation plus 3 bulan asia\r\n1 unit fortnite bundle neo versa ( download code )\r\n - epic neo versa outfit\r\n - epic neo phrenzy back bling\r\n - 2000 V - bucks\r\n\r\nmain processor\r\nsingle - chip custom processor\r\nCPU : X86-64 AMD JAGUAR 8 cores\r\nGPU : 1.84 TFLOPS, AMD radeon based graphics engine\r\nmemory GDDR5 main 8gb\r\nhardisk internal 1 tb\r\n\r\ncatatan \r\nkliam garansi bisa langsung bawa ke kantor cabang sony service center terdekat di kota anda\r\n\r\nterima kasih atas kunjungan anda', '2020-02-23 12:33:42', '5e526316f0aa6.jpg'),
(109, 86, 'Ps4 SONY Slim 1TB mega pack2 garansi resmi SONY', 'lain-lain', 3875000, 20, 'selamat datang dan terima kasih anda telah melihat produk kami\r\nbarang selalu ready stok\r\nFREE ONGKIR\r\nplaystation 4 slim / ps4 slim\r\nbundle mega pack 2\r\ngaransi resmi sony\r\n\r\npaket dan perlengkapan\r\n1 unit playstation 4 slim ( jet black ) with 1tb hardisk \r\n( CUH - 2218BB01 )\r\n1 unit DUAL SHOCK 4 wirelless controller ( jet black ) \r\n1 unit bluray god of war ( asia )\r\n1 unit bluray horizon zero dawn complete edition asia\r\n1 unit bluray GTA V premium edition\r\n1 unit playstation plus 3 bulan asia\r\n1 unit fortnite bundle neo versa ( download code )\r\n - epic neo versa outfit\r\n - epic neo phrenzy back bling\r\n - 2000 V - bucks\r\n\r\nmain processor\r\nsingle - chip custom processor\r\nCPU : X86-64 AMD JAGUAR 8 cores\r\nGPU : 1.84 TFLOPS, AMD radeon based graphics engine\r\nmemory GDDR5 main 8gb\r\nhardisk internal 1 tb\r\n\r\ncatatan \r\nkliam garansi bisa langsung bawa ke kantor cabang sony service center terdekat di kota anda\r\n\r\nterima kasih atas kunjungan anda', '2020-02-23 12:33:42', '5e526316f0aa6.jpg'),
(110, 86, 'Ps4 SONY Slim 1TB mega pack2 garansi resmi SONY', 'lain-lain', 3875000, 20, 'selamat datang dan terima kasih anda telah melihat produk kami\r\nbarang selalu ready stok\r\nFREE ONGKIR\r\nplaystation 4 slim / ps4 slim\r\nbundle mega pack 2\r\ngaransi resmi sony\r\n\r\npaket dan perlengkapan\r\n1 unit playstation 4 slim ( jet black ) with 1tb hardisk \r\n( CUH - 2218BB01 )\r\n1 unit DUAL SHOCK 4 wirelless controller ( jet black ) \r\n1 unit bluray god of war ( asia )\r\n1 unit bluray horizon zero dawn complete edition asia\r\n1 unit bluray GTA V premium edition\r\n1 unit playstation plus 3 bulan asia\r\n1 unit fortnite bundle neo versa ( download code )\r\n - epic neo versa outfit\r\n - epic neo phrenzy back bling\r\n - 2000 V - bucks\r\n\r\nmain processor\r\nsingle - chip custom processor\r\nCPU : X86-64 AMD JAGUAR 8 cores\r\nGPU : 1.84 TFLOPS, AMD radeon based graphics engine\r\nmemory GDDR5 main 8gb\r\nhardisk internal 1 tb\r\n\r\ncatatan \r\nkliam garansi bisa langsung bawa ke kantor cabang sony service center terdekat di kota anda\r\n\r\nterima kasih atas kunjungan anda', '2020-02-23 12:33:42', '5e526316f0aa6.jpg'),
(111, 86, 'JaketSweater Hoodie Hitam Polos Keren Berkualitas Distro ', 'lain-lain', 134000, 40, '\r\n\r\nSize Tersedia: M,L, XL ( size lokal )\r\n\r\nSaatnya tampil Simpel, Santai &amp; Elegan dengan jaket Hoodie ini. Sangat cocok dipakai untuk nonton bareng, hang out, atau casual.\r\n\r\nPS: Sebelum memesan mohon tanyakan terlebih dahulu ketersediaan barangnya.\r\n\r\nTerimakasih, happy shopping ^^\r\n\r\nTerimakasih telah berkunjung ke toko kami, jam kerja 08:00-17:00 WIB\r\n', '2020-02-23 12:37:05', '5e5263e1b8d5b.jpg'),
(118, 86, 'JaketSweater Hoodie Hitam Polos Keren Berkualitas Distro ', 'lain-lain', 134000, 40, '\r\n\r\nSize Tersedia: M,L, XL ( size lokal )\r\n\r\nSaatnya tampil Simpel, Santai &amp; Elegan dengan jaket Hoodie ini. Sangat cocok dipakai untuk nonton bareng, hang out, atau casual.\r\n\r\nPS: Sebelum memesan mohon tanyakan terlebih dahulu ketersediaan barangnya.\r\n\r\nTerimakasih, happy shopping ^^\r\n\r\nTerimakasih telah berkunjung ke toko kami, jam kerja 08:00-17:00 WIB\r\n', '2020-02-23 12:37:05', '5e5263e1b8d5b.jpg'),
(119, 86, 'JaketSweater Hoodie Hitam Polos Keren Berkualitas Distro ', 'lain-lain', 134000, 40, '\r\n\r\nSize Tersedia: M,L, XL ( size lokal )\r\n\r\nSaatnya tampil Simpel, Santai &amp; Elegan dengan jaket Hoodie ini. Sangat cocok dipakai untuk nonton bareng, hang out, atau casual.\r\n\r\nPS: Sebelum memesan mohon tanyakan terlebih dahulu ketersediaan barangnya.\r\n\r\nTerimakasih, happy shopping ^^\r\n\r\nTerimakasih telah berkunjung ke toko kami, jam kerja 08:00-17:00 WIB\r\n', '2020-02-23 12:37:05', '5e5263e1b8d5b.jpg'),
(120, 86, 'JaketSweater Hoodie Hitam Polos Keren Berkualitas Distro ', 'lain-lain', 134000, 40, '\r\n\r\nSize Tersedia: M,L, XL ( size lokal )\r\n\r\nSaatnya tampil Simpel, Santai &amp; Elegan dengan jaket Hoodie ini. Sangat cocok dipakai untuk nonton bareng, hang out, atau casual.\r\n\r\nPS: Sebelum memesan mohon tanyakan terlebih dahulu ketersediaan barangnya.\r\n\r\nTerimakasih, happy shopping ^^\r\n\r\nTerimakasih telah berkunjung ke toko kami, jam kerja 08:00-17:00 WIB\r\n', '2020-02-23 12:37:05', '5e5263e1b8d5b.jpg'),
(121, 86, 'Ps4 SONY Slim 1TB mega pack2 garansi resmi SONY', 'lain-lain', 3875000, 20, 'selamat datang dan terima kasih anda telah melihat produk kami\r\nbarang selalu ready stok\r\nFREE ONGKIR\r\nplaystation 4 slim / ps4 slim\r\nbundle mega pack 2\r\ngaransi resmi sony\r\n\r\npaket dan perlengkapan\r\n1 unit playstation 4 slim ( jet black ) with 1tb hardisk \r\n( CUH - 2218BB01 )\r\n1 unit DUAL SHOCK 4 wirelless controller ( jet black ) \r\n1 unit bluray god of war ( asia )\r\n1 unit bluray horizon zero dawn complete edition asia\r\n1 unit bluray GTA V premium edition\r\n1 unit playstation plus 3 bulan asia\r\n1 unit fortnite bundle neo versa ( download code )\r\n - epic neo versa outfit\r\n - epic neo phrenzy back bling\r\n - 2000 V - bucks\r\n\r\nmain processor\r\nsingle - chip custom processor\r\nCPU : X86-64 AMD JAGUAR 8 cores\r\nGPU : 1.84 TFLOPS, AMD radeon based graphics engine\r\nmemory GDDR5 main 8gb\r\nhardisk internal 1 tb\r\n\r\ncatatan \r\nkliam garansi bisa langsung bawa ke kantor cabang sony service center terdekat di kota anda\r\n\r\nterima kasih atas kunjungan anda', '2020-02-23 12:33:42', '5e526316f0aa6.jpg'),
(122, 86, 'JaketSweater Hoodie Hitam Polos Keren Berkualitas Distro ', 'lain-lain', 134000, 40, '\r\n\r\nSize Tersedia: M,L, XL ( size lokal )\r\n\r\nSaatnya tampil Simpel, Santai &amp; Elegan dengan jaket Hoodie ini. Sangat cocok dipakai untuk nonton bareng, hang out, atau casual.\r\n\r\nPS: Sebelum memesan mohon tanyakan terlebih dahulu ketersediaan barangnya.\r\n\r\nTerimakasih, happy shopping ^^\r\n\r\nTerimakasih telah berkunjung ke toko kami, jam kerja 08:00-17:00 WIB\r\n', '2020-02-23 12:37:05', '5e5263e1b8d5b.jpg'),
(123, 86, 'JaketSweater Hoodie Hitam Polos Keren Berkualitas Distro ', 'lain-lain', 134000, 40, '\r\n\r\nSize Tersedia: M,L, XL ( size lokal )\r\n\r\nSaatnya tampil Simpel, Santai &amp; Elegan dengan jaket Hoodie ini. Sangat cocok dipakai untuk nonton bareng, hang out, atau casual.\r\n\r\nPS: Sebelum memesan mohon tanyakan terlebih dahulu ketersediaan barangnya.\r\n\r\nTerimakasih, happy shopping ^^\r\n\r\nTerimakasih telah berkunjung ke toko kami, jam kerja 08:00-17:00 WIB\r\n', '2020-02-23 12:37:05', '5e5263e1b8d5b.jpg'),
(124, 86, 'JaketSweater Hoodie Hitam Polos Keren Berkualitas Distro ', 'lain-lain', 134000, 40, '\r\n\r\nSize Tersedia: M,L, XL ( size lokal )\r\n\r\nSaatnya tampil Simpel, Santai &amp; Elegan dengan jaket Hoodie ini. Sangat cocok dipakai untuk nonton bareng, hang out, atau casual.\r\n\r\nPS: Sebelum memesan mohon tanyakan terlebih dahulu ketersediaan barangnya.\r\n\r\nTerimakasih, happy shopping ^^\r\n\r\nTerimakasih telah berkunjung ke toko kami, jam kerja 08:00-17:00 WIB\r\n', '2020-02-23 12:37:05', '5e5263e1b8d5b.jpg'),
(125, 86, 'JaketSweater Hoodie Hitam Polos Keren Berkualitas Distro ', 'lain-lain', 134000, 40, '\r\n\r\nSize Tersedia: M,L, XL ( size lokal )\r\n\r\nSaatnya tampil Simpel, Santai &amp; Elegan dengan jaket Hoodie ini. Sangat cocok dipakai untuk nonton bareng, hang out, atau casual.\r\n\r\nPS: Sebelum memesan mohon tanyakan terlebih dahulu ketersediaan barangnya.\r\n\r\nTerimakasih, happy shopping ^^\r\n\r\nTerimakasih telah berkunjung ke toko kami, jam kerja 08:00-17:00 WIB\r\n', '2020-02-23 12:37:05', '5e5263e1b8d5b.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_user`
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
-- Dumping data untuk tabel `data_user`
--

INSERT INTO `data_user` (`id_user`, `nama`, `nama_pelapak`, `no_tlp`, `email`, `username`, `password`, `profile`) VALUES
(86, 'Diazs Martiansyah', 'Kantin', '089662251672', 'diazsmartiansyah28@gmail.com', 'diazs123', '$2y$10$cTqH9EXFq6b7g7xt85lDbe2sBpD2DsFoDnDk1oVDNcpAVkuHtP4lS', ''),
(87, 'valentio aditama ', 'palen cigo', '0895371909287', 'valentioaditama8@gmail.com', 'valentio18', '$2y$10$bKbaxMQ02x6rCS4oY.9dN.2EPciBriRMIBD3ufkGpNwgl.t8C2v/C', '5e49f83de53c9.jpg'),
(88, 'yusuf dwi', 'dwiLapak', '089128127391', 'dwiyusuf12@gmail.com', 'yusuf123', '$2y$10$PvCFRFg.B2Ra97K8GJu7xOeLbnCyJYQZg9oG8VgP92gPMLOg1ufkS', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjual`
--

CREATE TABLE `penjual` (
  `id_penjual` int(11) DEFAULT NULL,
  `nama_lapak` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_pembayaran` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `bayar` int(11) NOT NULL,
  `kembalian` int(11) NOT NULL,
  `tanggal_transaksi` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_pembayaran`, `id_barang`, `bayar`, `kembalian`, `tanggal_transaksi`) VALUES
(7, 0, 90000, 40000, '2019-08-18 18:03:47'),
(8, 0, 60000, 30000, '2019-08-18 18:30:05'),
(10, 0, 80000, 30000, '2019-08-18 18:40:18'),
(11, 0, 50000, 20000, '2019-08-25 02:35:44'),
(12, 0, 90000, 60000, '2019-08-25 02:36:59'),
(13, 0, 60000, 30000, '2019-08-30 19:29:18'),
(14, 0, 200000, 100000, '2019-08-30 19:30:02');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT untuk tabel `data_user`
--
ALTER TABLE `data_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `data_user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
