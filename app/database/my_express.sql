-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2021 at 06:07 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_express`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(35) NOT NULL,
  `email` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `id_alamat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_admin`, `email`, `username`, `password`, `jenis_kelamin`, `no_telp`, `id_alamat`) VALUES
(5, 'Tosan Krisna', 'tosankrisna@gmail.com', 'tosankrisna', '$2y$10$hTIFBeur1jE1g.CwQgvwR.6NjFSFe61l6OTKVgfRbDjD9rox.9My2', 'laki-laki', '081916356777', 12),
(6, 'Syuja Naufal', 'syuja22@gmail.com', 'syujanaufal', '$2y$10$gJOLriU8sTsHy8BStQWeNeqwMJqEUrEOLvfx963yq9tsdAWGB0JDe', 'laki-laki', '089001987112', 54),
(7, 'Ardian Nugraha', 'ardynugraha@gmail.com', 'ardiannugraha', '$2y$10$s7jrooGPBCpNEjYt3hpDoOOPhKSW8YjecC/WBDZr5u0ib6UmRCnha', 'laki-laki', '085667908777', 55),
(8, 'Admin My Express', 'admin@myexpress.id', 'admin_my_express', '$2y$10$4Jyc9XF5cVYR4h749RyrNO.DjRsJ6RvnhWq/rCzHjRCXjl6s3Eu6q', 'laki-laki', '081556709867', 56);

-- --------------------------------------------------------

--
-- Table structure for table `tb_alamat`
--

CREATE TABLE `tb_alamat` (
  `id_alamat` int(11) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `kabupaten` varchar(30) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `kode_pos` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_alamat`
--

INSERT INTO `tb_alamat` (`id_alamat`, `alamat`, `kecamatan`, `kabupaten`, `provinsi`, `kode_pos`) VALUES
(12, 'Jalan Bromo', 'Denpasar Barat', 'Kota Denpasar', 'Bali', 80119),
(54, 'Jalan Gunung Semeru No.1A', 'Blora', 'Kabupaten Blora', 'Jawa Tengah', 78001),
(55, 'Jalan Sakura No.2', 'Denpasar Timur', 'Kota Denpasar', 'Bali', 80115),
(56, 'Jalan Jupiter No.5', 'Denpasar Selatan', 'Kota Denpasar', 'Bali', 80556),
(95, 'Jalan Bung Tomo V No.3', 'Denpasar Utara', 'Kota Denpasar', 'Bali', 80776),
(97, 'Jalan Gajah No.212', 'Denpasar Utara', 'Kota Denpasar', 'Bali', 89010),
(104, 'Jalan Kaliasem Gang 1', 'Denpasar Selatan', 'Kota Denpasar', 'Bali', 89001),
(105, 'Jalan Pulau Sulawesi No.66', 'Denpasar Timur', 'Kota Denpasar', 'Bali', 78990),
(106, 'Jalan Alam Indah No.231', 'Denpasar Barat', 'Kota Denpasar', 'Bali', 89012),
(107, 'Jalan Pulau Sulawesi No.66', 'Kuta Utara', 'Kota Denpasar', 'Bali', 89122),
(108, 'Jalan Kaliasem Gang 1', 'Denpasar Selatan', 'Kota Denpasar', 'Bali', 89101),
(109, 'Jalan Bangkit 22 No.13', 'Denpasar Timur', 'Kota Denpasar', 'Bali', 89013),
(110, 'Jalan Buluh Indah No.23', 'Denpasar Selatan', 'Kota Denpasar', 'Bali', 80112),
(111, 'Jalan Kepundung No.21', 'Denpasar Timur', 'Kota Denpasar', 'Bali', 80991),
(112, 'Jalan Melati No.21', 'Denpasar Utara', 'Kota Denpasar', 'Bali', 89770),
(117, 'Jalan Kaliasem Gang 1', 'Denpasar Barat', 'Kota Denpasar', 'Bali', 80119),
(118, 'Jalan Kepundung No.21', 'Denpasar Selatan', 'Kota Denpasar', 'Bali', 80121),
(119, 'Jalan Lebah Gg.6 No.2', 'Denpasar Barat', 'Kota Denpasar', 'Bali', 89002),
(120, 'Jalan Pulau Sumatera No.112', 'Denpasar Timur', 'Kota Denpasar', 'Bali', 80121),
(121, 'Jalan Buluh Indah No.23', 'Denpasar Barat', 'Kota Denpasar', 'Bali', 89012),
(122, 'Jalan Pulau Sulawesi No.66', 'Denpasar Timur', 'Kota Denpasar', 'Bali', 87121),
(123, 'Jalan Alam Indah No.231', 'Denpasar Timur', 'Kota Denpasar', 'Bali', 80991),
(124, 'Jalan Pantai Ancol No.1', 'Denpasar Selatan', 'Kota Denpasar', 'Bali', 80123),
(125, 'Jalan Melati No.24', 'Denpasar Barat', 'Kota Denpasar', 'Bali', 80991),
(126, 'Jalan Kamboja No.33', 'Denpasar Utara', 'Kota Denpasar', 'Bali', 89112),
(127, 'Jalan Kaliasem Gang 1', 'Denpasar Timur', 'Kota Denpasar', 'Bali', 80121),
(128, 'Jalan Kepundung No.21', 'Denpasar Timur', 'Kota Denpasar', 'Bali', 89010),
(133, 'Jalan Rambutan No.12', 'Denpasar Timur', 'Kota Denpasar', 'Bali', 89901),
(134, 'Jalan Kepundung No.21', 'Denpasar Timur', 'Kota Denpasar', 'Bali', 89012),
(139, 'Jalan Lebah Gg.6 No.21', 'Denpasar Utara', 'Kota Denpasar', 'Bali', 89001),
(140, 'Jalan Bangkit 2 No.133', 'Denpasar Selatan', 'Kota Denpasar', 'Bali', 80771),
(141, 'Jalan Kaliasem Gang 1', 'Denpasar Barat', 'Kota Denpasar', 'Bali', 89001),
(142, 'Jalan Kepundung No.21', 'Denpasar Selatan', 'Kota Denpasar', 'Bali', 89977),
(143, 'Jalan Buluh Indah No.23', 'Denpasar Utara', 'Kota Denpasar', 'Bali', 89771),
(144, 'Jalan Pulau Sulawesi No.66', 'Kuta Utara', 'Kota Denpasar', 'Bali', 80978);

-- --------------------------------------------------------

--
-- Table structure for table `tb_cs`
--

CREATE TABLE `tb_cs` (
  `id_cs` int(11) NOT NULL,
  `nama_cs` varchar(35) NOT NULL,
  `email` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `id_alamat` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_cs`
--

INSERT INTO `tb_cs` (`id_cs`, `nama_cs`, `email`, `username`, `password`, `jenis_kelamin`, `no_telp`, `id_alamat`, `id_admin`) VALUES
(21, 'Andre Hadi', 'andrehadi@gmail.com', 'andre_hadi', '$2y$10$kKm.fF1tyleYKIQ8/0Z5muHXunxYv8HRhZfF/CZTXd5NVh9AMHDVy', 'laki-laki', '089766515221', 95, 5),
(23, 'Syuja', 'syuja@gmail.com', 'syuja', '$2y$10$1PuVNYu06Cp0l9Dg8mGea.mP5/Ac/dOlDkJuZKd2ptcC0XuOhpzWK', 'laki-laki', '089771234554', 125, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kendaraan`
--

CREATE TABLE `tb_kendaraan` (
  `id_kendaraan` int(11) NOT NULL,
  `nama_kendaraan` varchar(25) NOT NULL,
  `jenis_kendaraan` varchar(15) NOT NULL,
  `plat_nomor` varchar(15) NOT NULL,
  `id_kurir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kendaraan`
--

INSERT INTO `tb_kendaraan` (`id_kendaraan`, `nama_kendaraan`, `jenis_kendaraan`, `plat_nomor`, `id_kurir`) VALUES
(15, 'Honda Vario', 'motor', 'dk 9077 aj', 15),
(16, 'Truk Box CDE', 'truk', 'dk 2101 qk', 16),
(18, 'Honda Beat', 'motor', 'DK 8012 JX', 18);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kurir`
--

CREATE TABLE `tb_kurir` (
  `id_kurir` int(11) NOT NULL,
  `nama_kurir` varchar(35) NOT NULL,
  `email` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `id_alamat` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kurir`
--

INSERT INTO `tb_kurir` (`id_kurir`, `nama_kurir`, `email`, `username`, `password`, `jenis_kelamin`, `no_telp`, `id_alamat`, `id_admin`) VALUES
(15, 'Dede Andika', 'dedeandika@gmail.com', 'dede_andika', '$2y$10$/HCYE1WlD10eBy3NIdKk8uKmfuwW3gs1FvA3gyAhfG7RZwQzW0ISe', 'laki-laki', '087788671666', 97, 5),
(16, 'Bima Arya', 'bimaarya@gmail.com', 'bima_arya', '$2y$10$h6ZF.9ECjissGtM844ep6OpiJIwQJP4L6oZIiHuCT0tHbCeWnIl2G', 'laki-laki', '087666123543', 112, 5),
(18, 'Ardian', 'ardian@gmail.com', 'ardian', '$2y$10$rUF.tK86R54YKoFmp0jeNuQb23m26TU11NMdimjtxP4N5WyaMyrVW', 'laki-laki', '081665432112', 126, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tb_paket`
--

CREATE TABLE `tb_paket` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(35) NOT NULL,
  `berat_paket` float(4,2) NOT NULL,
  `jenis_paket` varchar(15) NOT NULL,
  `jenis_packing` varchar(15) NOT NULL,
  `layanan` varchar(15) NOT NULL,
  `total_bayar` varchar(20) NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `id_kurir` int(11) NOT NULL,
  `id_penerima` int(11) NOT NULL,
  `id_pengirim` int(11) NOT NULL,
  `id_cs` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_paket`
--

INSERT INTO `tb_paket` (`id_paket`, `nama_paket`, `berat_paket`, `jenis_paket`, `jenis_packing`, `layanan`, `total_bayar`, `id_admin`, `id_kurir`, `id_penerima`, `id_pengirim`, `id_cs`) VALUES
(29, 'Kursi Gaming Logitech', 2.00, 'normal', 'bubble wrap', 'regular', '32500', 5, 15, 32, 30, NULL),
(30, 'Sepatu Vans', 0.60, 'normal', 'bubble wrap', 'super kilat', '27000', NULL, 15, 33, 31, 21),
(31, 'Sepatu Bola', 1.00, 'normal', 'bubble wrap', 'regular', '25000', NULL, 15, 34, 32, 21),
(32, 'Laptop Acer Predator', 2.00, 'normal', 'bubble wrap', 'super kilat', '37500', NULL, 15, 35, 33, 21),
(34, 'Kursi Gaming Logitech', 2.00, 'normal', 'bubble wrap', 'regular', '32500', 5, 15, 37, 35, NULL),
(35, 'Topi', 0.60, 'normal', 'bubble wrap', 'regular', '22000', 5, 15, 38, 36, NULL),
(36, 'Laptop Acer Predator', 2.70, 'normal', 'bubble wrap', 'regular', '37750', 5, 15, 39, 37, NULL),
(37, 'Jaket Kulit', 0.90, 'normal', 'bubble wrap', 'super kilat', '29250', 5, 15, 40, 38, NULL),
(38, 'Kursi Gaming Logitech', 2.00, 'normal', 'bubble wrap', 'regular', '32500', NULL, 15, 41, 39, 23),
(40, 'Monitor LG 24inch', 2.00, 'normal', 'bubble wrap', 'regular', '32500', NULL, 15, 43, 41, 23),
(42, 'Kursi Gaming Logitech', 2.00, 'normal', 'bubble wrap', 'regular', '32500', NULL, 15, 45, 43, 23),
(43, 'Laptop Acer', 1.00, 'normal', 'bubble wrap', 'regular', '25000', 5, 15, 46, 44, NULL),
(44, 'Topi', 2.00, 'normal', 'bubble wrap', 'regular', '32500', 5, 18, 47, 45, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_penerima`
--

CREATE TABLE `tb_penerima` (
  `id_penerima` int(11) NOT NULL,
  `nama_penerima` varchar(35) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `id_alamat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_penerima`
--

INSERT INTO `tb_penerima` (`id_penerima`, `nama_penerima`, `jenis_kelamin`, `no_telp`, `id_alamat`) VALUES
(32, 'Rahmat Hidayat', 'laki-laki', '087666123321', 105),
(33, 'Rahmat Hidayat', 'laki-laki', '089778616221', 107),
(34, 'Bayu Pradana', 'laki-laki', '089121771878', 109),
(35, 'Putu Dede', 'laki-laki', '087121777898', 111),
(37, 'Putu Dede', 'laki-laki', '081772616554', 118),
(38, 'Putri', 'perempuan', '089771662534', 120),
(39, 'Rahmat Hidayat', 'laki-laki', '087667889787', 122),
(40, 'Baskara Adi', 'laki-laki', '087661231333', 124),
(41, 'Putu Dede', 'laki-laki', '087991654532', 128),
(43, 'Putu Dede', 'laki-laki', '089771656777', 134),
(45, 'Kadek Ana', 'perempuan', '087761555232', 140),
(46, 'Putu Dede', 'laki-laki', '089777112222', 142),
(47, 'Rahmat Hidayat', 'laki-laki', '089766512333', 144);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengirim`
--

CREATE TABLE `tb_pengirim` (
  `id_pengirim` int(11) NOT NULL,
  `nama_pengirim` varchar(35) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `id_alamat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pengirim`
--

INSERT INTO `tb_pengirim` (`id_pengirim`, `nama_pengirim`, `no_telp`, `jenis_kelamin`, `id_alamat`) VALUES
(30, 'Ahmad Bachtiar', '081776878122', 'laki-laki', 104),
(31, 'Sadana Agung', '089776132111', 'laki-laki', 106),
(32, 'Ahmad Bachtiar', '089771625121', 'laki-laki', 108),
(33, 'Putu Andika Putra', '087121771221', 'laki-laki', 110),
(35, 'Ahmad Bachtiar', '087761554545', 'laki-laki', 117),
(36, 'Andika Pratama', '087661545161', 'laki-laki', 119),
(37, 'Putu Andika Putra', '087661546778', 'laki-laki', 121),
(38, 'Sadana Agung', '089712663545', 'laki-laki', 123),
(39, 'Ahmad Bachtiar', '087661545666', 'laki-laki', 127),
(41, 'Putra', '089771656443', 'laki-laki', 133),
(43, 'Aldo', '087761555444', 'laki-laki', 139),
(44, 'Ahmad Bachtiar', '089776554656', 'laki-laki', 141),
(45, 'Putu Andika Putra', '081667554654', 'laki-laki', 143);

-- --------------------------------------------------------

--
-- Table structure for table `tb_tracking`
--

CREATE TABLE `tb_tracking` (
  `id_tracking` int(11) NOT NULL,
  `status_paket` varchar(20) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `no_resi` varchar(11) NOT NULL,
  `no_pengiriman` varchar(11) NOT NULL,
  `tgl_kirim` datetime DEFAULT NULL,
  `tgl_terima` datetime DEFAULT NULL,
  `id_paket` int(11) NOT NULL,
  `id_penerima` int(11) NOT NULL,
  `id_kurir` int(11) NOT NULL,
  `id_pengirim` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_tracking`
--

INSERT INTO `tb_tracking` (`id_tracking`, `status_paket`, `keterangan`, `no_resi`, `no_pengiriman`, `tgl_kirim`, `tgl_terima`, `id_paket`, `id_penerima`, `id_kurir`, `id_pengirim`) VALUES
(27, 'selesai dikirim', 'Paket sedang dikirim ke alamat penerima', 'TgGQR03Cvdq', 'P1520210617', '2021-06-14 23:54:00', '2021-06-14 23:55:20', 29, 32, 15, 30),
(28, 'selesai dikirim', 'paket selesai dikirim', 'XeIdy6trJ2W', 'P1520210617', '2021-06-15 08:54:27', '2021-06-15 09:10:19', 30, 33, 15, 31),
(29, 'selesai dikirim', '-', 'XEW3NMnHeXZ', 'P1520210617', '2021-06-15 00:09:47', '2021-06-15 00:10:11', 31, 34, 15, 32),
(30, 'selesai dikirim', 'Paket selesai dikirim', 'Wooq6UbZUZt', 'P1520210617', '2021-06-15 00:05:26', '2021-06-15 00:08:39', 32, 35, 15, 33),
(32, 'gagal dikirim', '-', '5i4s3IF2vs5', 'P1520210618', '2021-06-15 09:09:32', NULL, 34, 37, 15, 35),
(33, 'selesai dikirim', '-', 'pbkWOVzsLKd', 'P1520210617', '2021-06-15 09:27:49', '2021-06-15 09:28:13', 35, 38, 15, 36),
(34, 'selesai dikirim', '-', 'D6SwaLUAcqg', 'P1520210618', '2021-06-19 02:35:39', '2021-06-19 02:35:48', 36, 39, 15, 37),
(35, 'sedang dikirim', '-', 'dPm7lg9UfFb', 'P1520210618', '2021-06-21 02:47:07', NULL, 37, 40, 15, 38),
(36, 'sedang dikirim', '-', '1SzuGpWLs1f', 'P1520210618', '2021-06-21 02:47:55', NULL, 38, 41, 15, 39),
(38, 'sedang dikirim', '-', 'IobFD4cddwz', 'P1520210618', '2021-06-21 02:47:57', NULL, 40, 43, 15, 41),
(40, 'selesai dikirim', '-', 'SZwMCRqXl6g', 'P1520210617', '2021-06-15 10:23:32', '2021-06-15 10:23:51', 42, 45, 15, 43),
(41, 'sedang dikirim', '-', 'czylLRw9Z7E', 'P1520210618', '2021-06-21 02:47:58', NULL, 43, 46, 15, 44),
(42, 'belum dikirim', '-', 'TVB2ArPilPJ', 'P1820210618', NULL, NULL, 44, 47, 18, 45);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_alamat` (`id_alamat`);

--
-- Indexes for table `tb_alamat`
--
ALTER TABLE `tb_alamat`
  ADD PRIMARY KEY (`id_alamat`);

--
-- Indexes for table `tb_cs`
--
ALTER TABLE `tb_cs`
  ADD PRIMARY KEY (`id_cs`),
  ADD KEY `id_alamat` (`id_alamat`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `tb_kendaraan`
--
ALTER TABLE `tb_kendaraan`
  ADD PRIMARY KEY (`id_kendaraan`),
  ADD KEY `id_kurir` (`id_kurir`) USING BTREE;

--
-- Indexes for table `tb_kurir`
--
ALTER TABLE `tb_kurir`
  ADD PRIMARY KEY (`id_kurir`),
  ADD KEY `id_alamat` (`id_alamat`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `tb_paket`
--
ALTER TABLE `tb_paket`
  ADD PRIMARY KEY (`id_paket`),
  ADD KEY `id_kurir` (`id_kurir`) USING BTREE,
  ADD KEY `id_admin` (`id_admin`) USING BTREE,
  ADD KEY `id_customer` (`id_penerima`),
  ADD KEY `id_pengirim` (`id_pengirim`),
  ADD KEY `id_cs` (`id_cs`);

--
-- Indexes for table `tb_penerima`
--
ALTER TABLE `tb_penerima`
  ADD PRIMARY KEY (`id_penerima`),
  ADD KEY `id_alamat` (`id_alamat`);

--
-- Indexes for table `tb_pengirim`
--
ALTER TABLE `tb_pengirim`
  ADD PRIMARY KEY (`id_pengirim`),
  ADD KEY `id_alamat` (`id_alamat`);

--
-- Indexes for table `tb_tracking`
--
ALTER TABLE `tb_tracking`
  ADD PRIMARY KEY (`id_tracking`),
  ADD KEY `id_paket` (`id_paket`) USING BTREE,
  ADD KEY `id_customer` (`id_penerima`),
  ADD KEY `id_kurir` (`id_kurir`),
  ADD KEY `id_pengirim` (`id_pengirim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_alamat`
--
ALTER TABLE `tb_alamat`
  MODIFY `id_alamat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `tb_cs`
--
ALTER TABLE `tb_cs`
  MODIFY `id_cs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_kendaraan`
--
ALTER TABLE `tb_kendaraan`
  MODIFY `id_kendaraan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_kurir`
--
ALTER TABLE `tb_kurir`
  MODIFY `id_kurir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_paket`
--
ALTER TABLE `tb_paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tb_penerima`
--
ALTER TABLE `tb_penerima`
  MODIFY `id_penerima` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tb_pengirim`
--
ALTER TABLE `tb_pengirim`
  MODIFY `id_pengirim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tb_tracking`
--
ALTER TABLE `tb_tracking`
  MODIFY `id_tracking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD CONSTRAINT `tb_admin_ibfk_1` FOREIGN KEY (`id_alamat`) REFERENCES `tb_alamat` (`id_alamat`);

--
-- Constraints for table `tb_cs`
--
ALTER TABLE `tb_cs`
  ADD CONSTRAINT `tb_cs_ibfk_1` FOREIGN KEY (`id_alamat`) REFERENCES `tb_alamat` (`id_alamat`),
  ADD CONSTRAINT `tb_cs_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `tb_admin` (`id_admin`);

--
-- Constraints for table `tb_kendaraan`
--
ALTER TABLE `tb_kendaraan`
  ADD CONSTRAINT `tb_kendaraan_ibfk_1` FOREIGN KEY (`id_kurir`) REFERENCES `tb_kurir` (`id_kurir`);

--
-- Constraints for table `tb_kurir`
--
ALTER TABLE `tb_kurir`
  ADD CONSTRAINT `tb_kurir_ibfk_1` FOREIGN KEY (`id_alamat`) REFERENCES `tb_alamat` (`id_alamat`),
  ADD CONSTRAINT `tb_kurir_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `tb_admin` (`id_admin`);

--
-- Constraints for table `tb_paket`
--
ALTER TABLE `tb_paket`
  ADD CONSTRAINT `tb_paket_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `tb_admin` (`id_admin`),
  ADD CONSTRAINT `tb_paket_ibfk_2` FOREIGN KEY (`id_pengirim`) REFERENCES `tb_pengirim` (`id_pengirim`),
  ADD CONSTRAINT `tb_paket_ibfk_3` FOREIGN KEY (`id_kurir`) REFERENCES `tb_kurir` (`id_kurir`),
  ADD CONSTRAINT `tb_paket_ibfk_4` FOREIGN KEY (`id_penerima`) REFERENCES `tb_penerima` (`id_penerima`),
  ADD CONSTRAINT `tb_paket_ibfk_5` FOREIGN KEY (`id_cs`) REFERENCES `tb_cs` (`id_cs`);

--
-- Constraints for table `tb_penerima`
--
ALTER TABLE `tb_penerima`
  ADD CONSTRAINT `tb_penerima_ibfk_1` FOREIGN KEY (`id_alamat`) REFERENCES `tb_alamat` (`id_alamat`);

--
-- Constraints for table `tb_pengirim`
--
ALTER TABLE `tb_pengirim`
  ADD CONSTRAINT `tb_pengirim_ibfk_1` FOREIGN KEY (`id_alamat`) REFERENCES `tb_alamat` (`id_alamat`);

--
-- Constraints for table `tb_tracking`
--
ALTER TABLE `tb_tracking`
  ADD CONSTRAINT `tb_tracking_ibfk_1` FOREIGN KEY (`id_paket`) REFERENCES `tb_paket` (`id_paket`),
  ADD CONSTRAINT `tb_tracking_ibfk_2` FOREIGN KEY (`id_penerima`) REFERENCES `tb_penerima` (`id_penerima`),
  ADD CONSTRAINT `tb_tracking_ibfk_3` FOREIGN KEY (`id_kurir`) REFERENCES `tb_kurir` (`id_kurir`),
  ADD CONSTRAINT `tb_tracking_ibfk_4` FOREIGN KEY (`id_pengirim`) REFERENCES `tb_pengirim` (`id_pengirim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
