-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Feb 2020 pada 16.33
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
(130, 86, 'JAKET HODIEE SENSOR FASHON PRIA - JAKET HODIEE ', 'lain-lain', 130400, 50, 'Spesifikasi Product :\r\n\r\nBahan mat : Scoot puma premium\r\n\r\nPurring : quilthing full dakron\r\n\r\nSize Chart : M/L/xl\r\nM.LD 55 cm x Panjang 68 cm\r\nL.LD 56 cm x Panjang 69 cm\r\n58 cm x Panjang 70 cm\r\n\r\nWarna :\r\n*Maroon\r\n*navy\r\n*hitam', '2020-02-29 07:34:34', '5e5a05fa99eaf.jpg'),
(131, 86, 'PS4 Slim 500GB CFW Hen Full Game Garansi Resmi', 'gadget', 5500000, 20, 'PS4 slim 500GB CFW Hen Full Game Garansi Resmi\r\n\r\nFEATURES:\r\n- Garansi Sony Indonesia 1TH\r\n- Barang Dijamin Baru 100%\r\n- CFW HEN\r\n- Hanya bisa main offline, tidak bisa online\r\n\r\nBOX CONTENT\r\n1x PS4 SLIM 500GB\r\n1x Stik Original \r\n1x Headset\r\n1x Kabel HDMI\r\n1x Kabel USB Charge\r\n1x Kabel Power\r\n1x Box n book\r\n1x Manual cara menjalankan Exploit Hen untuk PS4 CFW', '2020-02-29 07:36:00', '5e5a0650ea4ff.jpg'),
(132, 86, 'PS4 Slim 500gb/1000gb Full Games Digital RESMI', 'gadget', 3675000, 40, 'PS4 Slim 500gb/1000gb Full Games Digital \r\n\r\n\r\nApabila ada pertanyaan, bisa inbox, kami Fast Respon di Jam kerja :)\r\n\r\nKelengkapan :\r\n- Mesin 500gb/1000gb Full Games Digital Rekondisi seri 22xx, Fw 6,71\r\n- Stik - Tergantung pilihan di variasi \r\n- 1 Kabel Charger \r\n- 1 HDMI\r\n- 1 Kabel Power \r\n- Dus\r\n- Garansi Toko 1 Bulan , Segel Utuh\r\n- Tidak Boleh online\r\n- Drive tidak berfungsi \r\n\r\nUntuk yg 500gb ps4 slim\r\nGamenya :\r\n- dead stranding\r\n- pes 2020\r\n- gta 5\r\n- spiderman \r\n- Fifa 2020\r\n- god of war', '2020-02-29 07:37:38', '5e5a06b286e76.jpg'),
(133, 86, 'Ps4 fat 1 TB special editions full games 500GB - 1TB', 'lain-lain', 3750000, 59, 'Permisi \r\nAssalamuikum\r\n\r\nIjin ngelapak kakak\r\n\r\nPs4 fat hen/cfw special editions metal gear sholid\r\n\r\nReady PS4 fat HeN/cfw HDD 500gb - 1TB. System Software 5.05, Support hdd external  . Siap pakai. Game tinggal pilih \r\n\r\nPs4 slim hen/cfw pengisian game lebih murah\r\nCuman ngeluarin buget 25-30 rbu udah bisa dapet game\r\n\r\n\r\nkelengkapan di dalam dus:\r\n1 unit ps4 fat hen\r\n1 stik wirelles ps4\r\n1 usb cas\r\n1 kabel hdmi\r\n1 kabel power\r\n\r\nGaransi 1 Bulan Full cover (Ganti Unit)\r\nGame bisa reques.', '2020-02-29 07:40:39', '5e5a07670f972.jpg'),
(134, 86, 'JAKET HODIEE SENSOR FASHON PRIA - JAKET HODIEE ', 'lain-lain', 130400, 50, 'Spesifikasi Product :\r\n\r\nBahan mat : Scoot puma premium\r\n\r\nPurring : quilthing full dakron\r\n\r\nSize Chart : M/L/xl\r\nM.LD 55 cm x Panjang 68 cm\r\nL.LD 56 cm x Panjang 69 cm\r\n58 cm x Panjang 70 cm\r\n\r\nWarna :\r\n*Maroon\r\n*navy\r\n*hitam', '2020-02-29 07:43:06', '5e5a07fa737bb.jpg'),
(135, 86, 'realme 5i 3/32GB [5000mAh Massive Battery, Ultra-Wide', 'gadget', 1799000, 400, 'Warna\r\n\r\nOcean Blue\r\n\r\nForrest Green\r\n\r\n\r\n\r\nTampilan\r\n\r\nUkuran: 6,5 inci\r\n\r\nRasio Layar: 89%\r\n\r\nResolusi: HD + 720 * 1600\r\n\r\nPerlindungan: Corning Gorilla Glass 3\r\n\r\n\r\n\r\nUkuran &amp; berat\r\n\r\n164.4mm * 75.0mm * 8.95mm\r\n\r\n195g\r\n\r\n\r\n\r\nBaterai\r\n\r\n5000mAh (Typical Value)\r\n\r\n\r\n\r\n\r\n\r\nKamera\r\n\r\nAI Quad Camera\r\n\r\nNormal + Ultra Wide + Macro + Portrait\r\n\r\n\r\n\r\nNormal:\r\n\r\n12MP\r\n\r\n\r\n\r\nPDAF\r\n\r\nAperture f / 1.8\r\n\r\nHDR\r\n\r\nNightscape\r\n\r\nChroma Boost\r\n\r\n\r\n\r\nUltra Wide:\r\n\r\n8MP\r\n\r\nAperture f / 2.25\r\n\r\nNightscape\r\n\r\n119 Â° Â± 1,5 Â°\r\n\r\n\r\n\r\nMacro:\r\n\r\n2MP\r\n\r\nAperture f / 2.4\r\n\r\nFocus Length 4cm\r\n\r\n\r\n\r\nPortrait:\r\n\r\n2MP\r\n\r\nAperture f / 2.4\r\n\r\nPortrait Mode\r\n\r\n\r\n\r\nKamera Depan AI\r\n\r\n8MP\r\n\r\nKeindahan AI\r\n\r\nHDR\r\n\r\nTampilan Panorama\r\n\r\nTimelapse\r\n\r\n\r\n\r\nVideo\r\n\r\n720p / 1080p / 4K, 30fps\r\n\r\nSlo-Mo (240fps / 720p, 120fps / 1080p)\r\n\r\n\r\n\r\nFitur\r\n\r\nQualcomm Snapdragon 665 AIE\r\n\r\nProses produksi 11nm\r\n\r\n2.0Ghz\r\n\r\nMemori bisa diperluas hingga 256GB\r\n\r\n\r\n\r\nKonektivitas\r\n\r\nJenis Kartu SIM: dual nano-sim\r\n\r\nEkspansi microSD / Triple Slot,\r\n\r\nVoLTE\r\n\r\n\r\n\r\nNirkabel\r\n\r\nMendukung 2.4G / 5G Wi-Fi\r\n\r\nMendukung Bluetooth 5.0\r\n\r\n\r\n\r\n\r\n\r\nSensor\r\n\r\nGPS / Beidou / Galileo / Glonass / A-GPS\r\n\r\nSensor Induksi Magnetik\r\n\r\nSensor cahaya\r\n\r\nSensor jarak\r\n\r\nGyro meter\r\n\r\nSensor Akselerometer\r\n\r\nSensor Sidik Jari\r\n\r\nOTG\r\n\r\n\r\n\r\nSistem\r\n\r\nColorOS 6.1 berdasarkan Android P\r\n\r\n\r\n\r\nDalam kotak\r\n\r\nAdapter 5V2A * 1\r\n\r\nKabel Micro USB * 1\r\n\r\nBuklet Info Penting dan Kartu Garansi * 1\r\n\r\nPanduan Cepat * 1\r\n\r\nAlat Kartu SIM * 1\r\n\r\nFilm Pelindung Layar * 1\r\n', '2020-02-29 07:47:44', '5e5a0910958bd.jpg'),
(136, 86, 'JAKET HODIEE SENSOR FASHON PRIA - JAKET HODIEE ', 'lain-lain', 130400, 50, 'Spesifikasi Product :\r\n\r\nBahan mat : Scoot puma premium\r\n\r\nPurring : quilthing full dakron\r\n\r\nSize Chart : M/L/xl\r\nM.LD 55 cm x Panjang 68 cm\r\nL.LD 56 cm x Panjang 69 cm\r\n58 cm x Panjang 70 cm\r\n\r\nWarna :\r\n*Maroon\r\n*navy\r\n*hitam', '2020-02-29 07:34:34', '5e5a05fa99eaf.jpg'),
(137, 86, 'Ps4 fat 1 TB special editions full games 500GB - 1TB', 'lain-lain', 3750000, 59, 'Permisi \r\nAssalamuikum\r\n\r\nIjin ngelapak kakak\r\n\r\nPs4 fat hen/cfw special editions metal gear sholid\r\n\r\nReady PS4 fat HeN/cfw HDD 500gb - 1TB. System Software 5.05, Support hdd external  . Siap pakai. Game tinggal pilih \r\n\r\nPs4 slim hen/cfw pengisian game lebih murah\r\nCuman ngeluarin buget 25-30 rbu udah bisa dapet game\r\n\r\n\r\nkelengkapan di dalam dus:\r\n1 unit ps4 fat hen\r\n1 stik wirelles ps4\r\n1 usb cas\r\n1 kabel hdmi\r\n1 kabel power\r\n\r\nGaransi 1 Bulan Full cover (Ganti Unit)\r\nGame bisa reques.', '2020-02-29 07:40:39', '5e5a07670f972.jpg'),
(138, 86, 'JAKET HODIEE SENSOR FASHON PRIA - JAKET HODIEE ', 'lain-lain', 130400, 50, 'Spesifikasi Product :\r\n\r\nBahan mat : Scoot puma premium\r\n\r\nPurring : quilthing full dakron\r\n\r\nSize Chart : M/L/xl\r\nM.LD 55 cm x Panjang 68 cm\r\nL.LD 56 cm x Panjang 69 cm\r\n58 cm x Panjang 70 cm\r\n\r\nWarna :\r\n*Maroon\r\n*navy\r\n*hitam', '2020-02-29 07:43:06', '5e5a07fa737bb.jpg'),
(139, 86, 'Ps4 fat 1 TB special editions full games 500GB - 1TB', 'lain-lain', 3750000, 59, 'Permisi \r\nAssalamuikum\r\n\r\nIjin ngelapak kakak\r\n\r\nPs4 fat hen/cfw special editions metal gear sholid\r\n\r\nReady PS4 fat HeN/cfw HDD 500gb - 1TB. System Software 5.05, Support hdd external  . Siap pakai. Game tinggal pilih \r\n\r\nPs4 slim hen/cfw pengisian game lebih murah\r\nCuman ngeluarin buget 25-30 rbu udah bisa dapet game\r\n\r\n\r\nkelengkapan di dalam dus:\r\n1 unit ps4 fat hen\r\n1 stik wirelles ps4\r\n1 usb cas\r\n1 kabel hdmi\r\n1 kabel power\r\n\r\nGaransi 1 Bulan Full cover (Ganti Unit)\r\nGame bisa reques.', '2020-02-29 07:40:39', '5e5a07670f972.jpg'),
(140, 86, 'JAKET HODIEE SENSOR FASHON PRIA - JAKET HODIEE ', 'lain-lain', 130400, 50, 'Spesifikasi Product :\r\n\r\nBahan mat : Scoot puma premium\r\n\r\nPurring : quilthing full dakron\r\n\r\nSize Chart : M/L/xl\r\nM.LD 55 cm x Panjang 68 cm\r\nL.LD 56 cm x Panjang 69 cm\r\n58 cm x Panjang 70 cm\r\n\r\nWarna :\r\n*Maroon\r\n*navy\r\n*hitam', '2020-02-29 07:43:06', '5e5a07fa737bb.jpg'),
(141, 86, 'JAKET HODIEE SENSOR FASHON PRIA - JAKET HODIEE ', 'lain-lain', 130400, 50, 'Spesifikasi Product :\r\n\r\nBahan mat : Scoot puma premium\r\n\r\nPurring : quilthing full dakron\r\n\r\nSize Chart : M/L/xl\r\nM.LD 55 cm x Panjang 68 cm\r\nL.LD 56 cm x Panjang 69 cm\r\n58 cm x Panjang 70 cm\r\n\r\nWarna :\r\n*Maroon\r\n*navy\r\n*hitam', '2020-02-29 07:34:34', '5e5a05fa99eaf.jpg'),
(142, 86, 'PS4 Slim 500GB CFW Hen Full Game Garansi Resmi', 'gadget', 5500000, 20, 'PS4 slim 500GB CFW Hen Full Game Garansi Resmi\r\n\r\nFEATURES:\r\n- Garansi Sony Indonesia 1TH\r\n- Barang Dijamin Baru 100%\r\n- CFW HEN\r\n- Hanya bisa main offline, tidak bisa online\r\n\r\nBOX CONTENT\r\n1x PS4 SLIM 500GB\r\n1x Stik Original \r\n1x Headset\r\n1x Kabel HDMI\r\n1x Kabel USB Charge\r\n1x Kabel Power\r\n1x Box n book\r\n1x Manual cara menjalankan Exploit Hen untuk PS4 CFW', '2020-02-29 07:36:00', '5e5a0650ea4ff.jpg'),
(143, 86, 'PS4 Slim 500gb/1000gb Full Games Digital RESMI', 'gadget', 3675000, 40, 'PS4 Slim 500gb/1000gb Full Games Digital \r\n\r\n\r\nApabila ada pertanyaan, bisa inbox, kami Fast Respon di Jam kerja :)\r\n\r\nKelengkapan :\r\n- Mesin 500gb/1000gb Full Games Digital Rekondisi seri 22xx, Fw 6,71\r\n- Stik - Tergantung pilihan di variasi \r\n- 1 Kabel Charger \r\n- 1 HDMI\r\n- 1 Kabel Power \r\n- Dus\r\n- Garansi Toko 1 Bulan , Segel Utuh\r\n- Tidak Boleh online\r\n- Drive tidak berfungsi \r\n\r\nUntuk yg 500gb ps4 slim\r\nGamenya :\r\n- dead stranding\r\n- pes 2020\r\n- gta 5\r\n- spiderman \r\n- Fifa 2020\r\n- god of war', '2020-02-29 07:37:38', '5e5a06b286e76.jpg'),
(144, 86, 'Ps4 fat 1 TB special editions full games 500GB - 1TB', 'lain-lain', 3750000, 59, 'Permisi \r\nAssalamuikum\r\n\r\nIjin ngelapak kakak\r\n\r\nPs4 fat hen/cfw special editions metal gear sholid\r\n\r\nReady PS4 fat HeN/cfw HDD 500gb - 1TB. System Software 5.05, Support hdd external  . Siap pakai. Game tinggal pilih \r\n\r\nPs4 slim hen/cfw pengisian game lebih murah\r\nCuman ngeluarin buget 25-30 rbu udah bisa dapet game\r\n\r\n\r\nkelengkapan di dalam dus:\r\n1 unit ps4 fat hen\r\n1 stik wirelles ps4\r\n1 usb cas\r\n1 kabel hdmi\r\n1 kabel power\r\n\r\nGaransi 1 Bulan Full cover (Ganti Unit)\r\nGame bisa reques.', '2020-02-29 07:40:39', '5e5a07670f972.jpg'),
(145, 86, 'JAKET HODIEE SENSOR FASHON PRIA - JAKET HODIEE ', 'lain-lain', 130400, 50, 'Spesifikasi Product :\r\n\r\nBahan mat : Scoot puma premium\r\n\r\nPurring : quilthing full dakron\r\n\r\nSize Chart : M/L/xl\r\nM.LD 55 cm x Panjang 68 cm\r\nL.LD 56 cm x Panjang 69 cm\r\n58 cm x Panjang 70 cm\r\n\r\nWarna :\r\n*Maroon\r\n*navy\r\n*hitam', '2020-02-29 07:43:06', '5e5a07fa737bb.jpg'),
(146, 86, 'realme 5i 3/32GB [5000mAh Massive Battery, Ultra-Wide', 'gadget', 1799000, 400, 'Warna\r\n\r\nOcean Blue\r\n\r\nForrest Green\r\n\r\n\r\n\r\nTampilan\r\n\r\nUkuran: 6,5 inci\r\n\r\nRasio Layar: 89%\r\n\r\nResolusi: HD + 720 * 1600\r\n\r\nPerlindungan: Corning Gorilla Glass 3\r\n\r\n\r\n\r\nUkuran &amp; berat\r\n\r\n164.4mm * 75.0mm * 8.95mm\r\n\r\n195g\r\n\r\n\r\n\r\nBaterai\r\n\r\n5000mAh (Typical Value)\r\n\r\n\r\n\r\n\r\n\r\nKamera\r\n\r\nAI Quad Camera\r\n\r\nNormal + Ultra Wide + Macro + Portrait\r\n\r\n\r\n\r\nNormal:\r\n\r\n12MP\r\n\r\n\r\n\r\nPDAF\r\n\r\nAperture f / 1.8\r\n\r\nHDR\r\n\r\nNightscape\r\n\r\nChroma Boost\r\n\r\n\r\n\r\nUltra Wide:\r\n\r\n8MP\r\n\r\nAperture f / 2.25\r\n\r\nNightscape\r\n\r\n119 Â° Â± 1,5 Â°\r\n\r\n\r\n\r\nMacro:\r\n\r\n2MP\r\n\r\nAperture f / 2.4\r\n\r\nFocus Length 4cm\r\n\r\n\r\n\r\nPortrait:\r\n\r\n2MP\r\n\r\nAperture f / 2.4\r\n\r\nPortrait Mode\r\n\r\n\r\n\r\nKamera Depan AI\r\n\r\n8MP\r\n\r\nKeindahan AI\r\n\r\nHDR\r\n\r\nTampilan Panorama\r\n\r\nTimelapse\r\n\r\n\r\n\r\nVideo\r\n\r\n720p / 1080p / 4K, 30fps\r\n\r\nSlo-Mo (240fps / 720p, 120fps / 1080p)\r\n\r\n\r\n\r\nFitur\r\n\r\nQualcomm Snapdragon 665 AIE\r\n\r\nProses produksi 11nm\r\n\r\n2.0Ghz\r\n\r\nMemori bisa diperluas hingga 256GB\r\n\r\n\r\n\r\nKonektivitas\r\n\r\nJenis Kartu SIM: dual nano-sim\r\n\r\nEkspansi microSD / Triple Slot,\r\n\r\nVoLTE\r\n\r\n\r\n\r\nNirkabel\r\n\r\nMendukung 2.4G / 5G Wi-Fi\r\n\r\nMendukung Bluetooth 5.0\r\n\r\n\r\n\r\n\r\n\r\nSensor\r\n\r\nGPS / Beidou / Galileo / Glonass / A-GPS\r\n\r\nSensor Induksi Magnetik\r\n\r\nSensor cahaya\r\n\r\nSensor jarak\r\n\r\nGyro meter\r\n\r\nSensor Akselerometer\r\n\r\nSensor Sidik Jari\r\n\r\nOTG\r\n\r\n\r\n\r\nSistem\r\n\r\nColorOS 6.1 berdasarkan Android P\r\n\r\n\r\n\r\nDalam kotak\r\n\r\nAdapter 5V2A * 1\r\n\r\nKabel Micro USB * 1\r\n\r\nBuklet Info Penting dan Kartu Garansi * 1\r\n\r\nPanduan Cepat * 1\r\n\r\nAlat Kartu SIM * 1\r\n\r\nFilm Pelindung Layar * 1\r\n', '2020-02-29 07:47:44', '5e5a0910958bd.jpg'),
(147, 86, 'JAKET HODIEE SENSOR FASHON PRIA - JAKET HODIEE ', 'lain-lain', 130400, 50, 'Spesifikasi Product :\r\n\r\nBahan mat : Scoot puma premium\r\n\r\nPurring : quilthing full dakron\r\n\r\nSize Chart : M/L/xl\r\nM.LD 55 cm x Panjang 68 cm\r\nL.LD 56 cm x Panjang 69 cm\r\n58 cm x Panjang 70 cm\r\n\r\nWarna :\r\n*Maroon\r\n*navy\r\n*hitam', '2020-02-29 07:34:34', '5e5a05fa99eaf.jpg'),
(148, 86, 'Ps4 fat 1 TB special editions full games 500GB - 1TB', 'lain-lain', 3750000, 59, 'Permisi \r\nAssalamuikum\r\n\r\nIjin ngelapak kakak\r\n\r\nPs4 fat hen/cfw special editions metal gear sholid\r\n\r\nReady PS4 fat HeN/cfw HDD 500gb - 1TB. System Software 5.05, Support hdd external  . Siap pakai. Game tinggal pilih \r\n\r\nPs4 slim hen/cfw pengisian game lebih murah\r\nCuman ngeluarin buget 25-30 rbu udah bisa dapet game\r\n\r\n\r\nkelengkapan di dalam dus:\r\n1 unit ps4 fat hen\r\n1 stik wirelles ps4\r\n1 usb cas\r\n1 kabel hdmi\r\n1 kabel power\r\n\r\nGaransi 1 Bulan Full cover (Ganti Unit)\r\nGame bisa reques.', '2020-02-29 07:40:39', '5e5a07670f972.jpg'),
(149, 86, 'JAKET HODIEE SENSOR FASHON PRIA - JAKET HODIEE ', 'lain-lain', 130400, 50, 'Spesifikasi Product :\r\n\r\nBahan mat : Scoot puma premium\r\n\r\nPurring : quilthing full dakron\r\n\r\nSize Chart : M/L/xl\r\nM.LD 55 cm x Panjang 68 cm\r\nL.LD 56 cm x Panjang 69 cm\r\n58 cm x Panjang 70 cm\r\n\r\nWarna :\r\n*Maroon\r\n*navy\r\n*hitam', '2020-02-29 07:43:06', '5e5a07fa737bb.jpg'),
(150, 86, 'Ps4 fat 1 TB special editions full games 500GB - 1TB', 'lain-lain', 3750000, 59, 'Permisi \r\nAssalamuikum\r\n\r\nIjin ngelapak kakak\r\n\r\nPs4 fat hen/cfw special editions metal gear sholid\r\n\r\nReady PS4 fat HeN/cfw HDD 500gb - 1TB. System Software 5.05, Support hdd external  . Siap pakai. Game tinggal pilih \r\n\r\nPs4 slim hen/cfw pengisian game lebih murah\r\nCuman ngeluarin buget 25-30 rbu udah bisa dapet game\r\n\r\n\r\nkelengkapan di dalam dus:\r\n1 unit ps4 fat hen\r\n1 stik wirelles ps4\r\n1 usb cas\r\n1 kabel hdmi\r\n1 kabel power\r\n\r\nGaransi 1 Bulan Full cover (Ganti Unit)\r\nGame bisa reques.', '2020-02-29 07:40:39', '5e5a07670f972.jpg'),
(151, 86, 'JAKET HODIEE SENSOR FASHON PRIA - JAKET HODIEE ', 'lain-lain', 130400, 50, 'Spesifikasi Product :\r\n\r\nBahan mat : Scoot puma premium\r\n\r\nPurring : quilthing full dakron\r\n\r\nSize Chart : M/L/xl\r\nM.LD 55 cm x Panjang 68 cm\r\nL.LD 56 cm x Panjang 69 cm\r\n58 cm x Panjang 70 cm\r\n\r\nWarna :\r\n*Maroon\r\n*navy\r\n*hitam', '2020-02-29 07:43:06', '5e5a07fa737bb.jpg'),
(152, 86, 'JAKET HODIEE SENSOR FASHON PRIA - JAKET HODIEE ', 'lain-lain', 130400, 50, 'Spesifikasi Product :\r\n\r\nBahan mat : Scoot puma premium\r\n\r\nPurring : quilthing full dakron\r\n\r\nSize Chart : M/L/xl\r\nM.LD 55 cm x Panjang 68 cm\r\nL.LD 56 cm x Panjang 69 cm\r\n58 cm x Panjang 70 cm\r\n\r\nWarna :\r\n*Maroon\r\n*navy\r\n*hitam', '2020-02-29 07:34:34', '5e5a05fa99eaf.jpg'),
(153, 86, 'PS4 Slim 500GB CFW Hen Full Game Garansi Resmi', 'gadget', 5500000, 20, 'PS4 slim 500GB CFW Hen Full Game Garansi Resmi\r\n\r\nFEATURES:\r\n- Garansi Sony Indonesia 1TH\r\n- Barang Dijamin Baru 100%\r\n- CFW HEN\r\n- Hanya bisa main offline, tidak bisa online\r\n\r\nBOX CONTENT\r\n1x PS4 SLIM 500GB\r\n1x Stik Original \r\n1x Headset\r\n1x Kabel HDMI\r\n1x Kabel USB Charge\r\n1x Kabel Power\r\n1x Box n book\r\n1x Manual cara menjalankan Exploit Hen untuk PS4 CFW', '2020-02-29 07:36:00', '5e5a0650ea4ff.jpg');

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
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

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
