-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29 Jan 2023 pada 07.56
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_barang`
--

CREATE TABLE `data_barang` (
  `id_barang` int(11) NOT NULL,
  `kode_barang` varchar(60) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `harga_barang` varchar(120) NOT NULL,
  `stok_barang` varchar(120) NOT NULL,
  `tgl_input` varchar(10) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_barang`
--

INSERT INTO `data_barang` (`id_barang`, `kode_barang`, `nama_barang`, `harga_barang`, `stok_barang`, `tgl_input`, `deskripsi`, `gambar`) VALUES
(10, 'KD001', 'asdas', '10000', '123', '2022-12-28', 'asdas', 'IMG-20220902-WA0064-removebg-preview4.png'),
(11, 'KD002', 'Mie Curly', '5000', '29', '2022-12-29', 'Enak', 'Cuplikan_layar_20221226_222207.png'),
(12, 'KD007', 'Mie Curlie', '5000', '30', '2023-01-11', 'ENaaakk', 'resize.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id_pengeluaran` int(11) NOT NULL,
  `kode_barang` varchar(120) NOT NULL,
  `nama_barang` varchar(120) NOT NULL,
  `harga_barang` varchar(200) NOT NULL,
  `stok_pengeluaran` varchar(100) NOT NULL,
  `total_pendapatan` varchar(120) NOT NULL,
  `tgl_input` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengeluaran`
--

INSERT INTO `pengeluaran` (`id_pengeluaran`, `kode_barang`, `nama_barang`, `harga_barang`, `stok_pengeluaran`, `total_pendapatan`, `tgl_input`) VALUES
(1, 'KD004', 'Mie Jerit', '15000', '12', '', '2022-12-15'),
(2, 'KD004', 'Mie Jerit', '15000', '2', '30000', '2022-12-15'),
(7, 'KD004', 'Mie Jerit', '15000', '2', '30000', '2022-11-06'),
(8, 'KD010', 'Mie Curlie eeee', '6000', '5', '30000', '2022-12-16'),
(9, 'KD002', 'Mie Curly', '5000', '2', '10000', '2022-12-29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id_role`, `role`) VALUES
(1, 'pengelola'),
(2, 'admin'),
(3, 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `id_role` int(11) NOT NULL,
  `nama_lengkap` varchar(60) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_users`, `id_role`, `nama_lengkap`, `no_hp`, `email`, `password`) VALUES
(1, 1, 'Bayu Prasetyo', '6283824587800', 'bayuprasetyo@wotle.org', '$2y$10$zF9LxtALcmpOwJNPwvh.h.GAYPVn7YxTISIq8I4aUMgbW/1qE8HJm'),
(2, 2, 'Administrator', '6283824587801', 'admin@umkm.com', '$2y$10$zF9LxtALcmpOwJNPwvh.h.GAYPVn7YxTISIq8I4aUMgbW/1qE8HJm'),
(5, 3, 'Bayu Prasetyo', '01234567890', 'bayuprasetyo.bp11@gmail.com', '$2y$10$zF9LxtALcmpOwJNPwvh.h.GAYPVn7YxTISIq8I4aUMgbW/1qE8HJm'),
(6, 1, 'Bayu Prasetyo Bayu Prasetyo', '01234567890', 'bayuprasetyo.bp11@gmail.co', '$2y$10$ZjgCqHvkipxAW6R4E1PUAuBliKmFt2cpz6nLcdbtgWYbPhxoH2ilW'),
(7, 3, 'dodit', '083824587800', 'dodit@ujian.com', '$2y$10$P32XSVtJxxKMyS9edOhfZ.zsnr5TsOGnc1x65.r81cgc3yZPHbzR.'),
(8, 3, 'Rio Prasetyo', '081224036685', 'rioprasetyo240@gmail.com', '$2y$10$zgqb3vEcFCZ5QeaPjYK3EuMe5i6ZRqM9atHw3NVcONe6baLTyidqy');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_report`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `vw_report` (
`id_pengeluaran` int(11)
,`kode_barang` varchar(120)
,`nama_barang` varchar(120)
,`harga_barang` varchar(200)
,`stok_pengeluaran` double
,`total_pendapatan` double
,`tgl_input` varchar(20)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_report_per_year`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `vw_report_per_year` (
`id_pengeluaran` int(11)
,`kode_barang` varchar(120)
,`nama_barang` varchar(120)
,`harga_barang` double
,`total_pendapatan` double
,`stok_pengeluaran` varchar(100)
,`tgl_input` varchar(20)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_users`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `vw_users` (
`id_user` int(11)
,`id_role` int(11)
,`role` varchar(10)
,`nama_lengkap` varchar(60)
,`no_hp` varchar(15)
,`email` varchar(60)
,`password` varchar(120)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `vw_report`
--
DROP TABLE IF EXISTS `vw_report`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_report`  AS  select `pengeluaran`.`id_pengeluaran` AS `id_pengeluaran`,`pengeluaran`.`kode_barang` AS `kode_barang`,`pengeluaran`.`nama_barang` AS `nama_barang`,`pengeluaran`.`harga_barang` AS `harga_barang`,sum(`pengeluaran`.`stok_pengeluaran`) AS `stok_pengeluaran`,sum(`pengeluaran`.`total_pendapatan`) AS `total_pendapatan`,`pengeluaran`.`tgl_input` AS `tgl_input` from `pengeluaran` group by month(`pengeluaran`.`tgl_input`),`pengeluaran`.`nama_barang` order by `pengeluaran`.`tgl_input` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `vw_report_per_year`
--
DROP TABLE IF EXISTS `vw_report_per_year`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_report_per_year`  AS  select `pengeluaran`.`id_pengeluaran` AS `id_pengeluaran`,`pengeluaran`.`kode_barang` AS `kode_barang`,`pengeluaran`.`nama_barang` AS `nama_barang`,sum(`pengeluaran`.`harga_barang`) AS `harga_barang`,sum(`pengeluaran`.`total_pendapatan`) AS `total_pendapatan`,`pengeluaran`.`stok_pengeluaran` AS `stok_pengeluaran`,`pengeluaran`.`tgl_input` AS `tgl_input` from `pengeluaran` group by year(`pengeluaran`.`tgl_input`) order by `pengeluaran`.`tgl_input` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `vw_users`
--
DROP TABLE IF EXISTS `vw_users`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_users`  AS  select `users`.`id_users` AS `id_user`,`users`.`id_role` AS `id_role`,`role`.`role` AS `role`,`users`.`nama_lengkap` AS `nama_lengkap`,`users`.`no_hp` AS `no_hp`,`users`.`email` AS `email`,`users`.`password` AS `password` from (`users` join `role` on((`users`.`id_role` = `role`.`id_role`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_barang`
--
ALTER TABLE `data_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id_pengeluaran`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_barang`
--
ALTER TABLE `data_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id_pengeluaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
