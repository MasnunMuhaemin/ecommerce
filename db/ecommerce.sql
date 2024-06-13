-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2023 at 08:45 PM
-- Server version: 10.1.21-MariaDB
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
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id_chat` int(11) NOT NULL,
  `id_receive` int(11) NOT NULL,
  `id_sender` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `message` text NOT NULL,
  `image` varchar(120) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id_chat`, `id_receive`, `id_sender`, `nama`, `message`, `image`, `time`) VALUES
(150, 1, 7, 'dodit', 'hello saya dodit', '', '2023-04-12 05:28:55'),
(151, 7, 1, 'Administrator', 'terus kenapa klo elu dodit heiii', '', '2023-04-12 05:29:21'),
(152, 7, 1, 'Administrator', 'ini ko marginnya kek gini jadinya yaa', '', '2023-04-12 05:31:29'),
(153, 1, 7, 'dodit', 'test yang banyak lah barang kali marginnya berubah lagi', '', '2023-04-12 05:32:41'),
(154, 1, 7, 'dodit', 'eits tapi udah tetep bener', '', '2023-04-12 05:32:51'),
(155, 7, 1, 'Administrator', 'oke time is bed', '', '2023-04-12 05:33:07'),
(156, 1, 7, 'dodit', '', 'OIP2.jpg', '2023-04-12 05:33:38'),
(157, 7, 1, 'Administrator', '', 'adele1.png', '2023-04-12 05:34:22'),
(170, 1, 2184, 'aaa', 'kak saya mau kirim bukti pembayaran ya..', '', '0000-00-00 00:00:00'),
(171, 1, 2184, 'aaa', 'boleh kan kak ', '', '2023-04-15 17:47:36'),
(172, 2184, 1, 'Administrator', 'iya kak boleh silahkan', '', '2023-04-15 17:48:29'),
(173, 1, 2184, 'aaa', 'ini kak', 'adele2.png', '2023-04-15 17:48:42'),
(174, 2184, 1, 'Administrator', 'dih tolol bet lu anjim', '', '2023-04-15 17:48:57'),
(175, 2184, 1, 'Administrator', 'kenapa malah kirim stiker pea pea bae lu mah, gua gedig lu ', '', '2023-04-15 17:49:30'),
(176, 1, 2184, 'aaa', '', 'OIP4.jpg', '2023-04-15 17:53:05'),
(177, 1, 2184, 'aaa', 'hehe', '', '2023-04-15 17:54:06');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id_checkout` int(11) NOT NULL,
  `uuid_checkout` varchar(120) NOT NULL,
  `id_user` int(11) NOT NULL,
  `produk` varchar(120) NOT NULL,
  `harga` varchar(120) NOT NULL,
  `banyak` varchar(120) NOT NULL,
  `ukuran` varchar(10) NOT NULL,
  `model` varchar(60) NOT NULL,
  `bahan` varchar(60) NOT NULL,
  `image` varchar(120) NOT NULL,
  `nama_penerima` varchar(120) NOT NULL,
  `alamat_penerima` text NOT NULL,
  `no_penerima` varchar(15) NOT NULL,
  `status_pembayaran` varchar(60) NOT NULL DEFAULT 'Belum Melakukan Pembayaran',
  `due_datetime` datetime NOT NULL,
  `datetime_pay` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id_checkout`, `uuid_checkout`, `id_user`, `produk`, `harga`, `banyak`, `ukuran`, `model`, `bahan`, `image`, `nama_penerima`, `alamat_penerima`, `no_penerima`, `status_pembayaran`, `due_datetime`, `datetime_pay`) VALUES
(32, 'eKmamJBpdi', 7, 'asdas', '10000', '2', '', '', '', 'IMG-20220902-WA0064-removebg-preview4.png', 'dodit', 'Desa Tambakbaya Kecamatan Garawangi', '0123812', 'Sudah Melakukan Pembayaran', '2023-04-15 00:00:00', '0000-00-00 00:00:00'),
(33, '2apg8Eg5aG', 7, 'Mie Curly', '6000', '1', '', '', '', 'Cuplikan_layar_20221226_222207.png', 'dodit', 'Desa Tambakbaya Kecamatan Garawangi', '0123812', 'Sudah Melakukan Pembayaran', '2023-04-15 00:00:00', '0000-00-00 00:00:00'),
(34, 'Kw0oDubBrG', 7, 'Mie Curlie', '5000', '1', '', '', '', 'resize.jpg', 'dodit', 'Desa Tambakbaya Kecamatan Garawangi', '0123812', 'Belum Melakukan Pembayaran', '2023-04-16 00:00:00', '0000-00-00 00:00:00'),
(35, 'Kw0oDubBrG', 7, 'Mie Curly', '6000', '1', '', '', '', 'Cuplikan_layar_20221226_222207.png', 'dodit', 'Desa Tambakbaya Kecamatan Garawangi', '0123812', 'Belum Melakukan Pembayaran', '2023-04-16 00:00:00', '0000-00-00 00:00:00'),
(36, 'Kw0oDubBrG', 7, 'asdas', '10000', '1', '', '', '', 'IMG-20220902-WA0064-removebg-preview4.png', 'dodit', 'Desa Tambakbaya Kecamatan Garawangi', '0123812', 'Belum Melakukan Pembayaran', '2023-04-16 00:00:00', '0000-00-00 00:00:00'),
(37, 'gDJGsLamZd', 7, 'Mie Curlie', '5000', '1', '', '', '', 'resize.jpg', 'dodit', 'Desa Tambakbaya Kecamatan Garawangi', '0123812', 'Belum Melakukan Pembayaran', '2023-04-16 00:00:00', '0000-00-00 00:00:00'),
(38, 'gDJGsLamZd', 7, 'Mie Curly', '6000', '1', '', '', '', 'Cuplikan_layar_20221226_222207.png', 'dodit', 'Desa Tambakbaya Kecamatan Garawangi', '0123812', 'Belum Melakukan Pembayaran', '2023-04-16 00:00:00', '0000-00-00 00:00:00'),
(39, 'h80Dt9YB2Z', 7, 'Mie Curly', '6000', '1', '', '', '', '', 'dodit', 'Fakultas Ilmu Komputer', '342', 'Belum Melakukan Pembayaran', '2023-04-16 00:00:00', '0000-00-00 00:00:00'),
(40, 'DMSpYjjwwT', 7, 'Mie Curlie', '5000', '2', '', '', '', 'resize.jpg', 'dodit', 'erqere erwe', '213', 'Sudah Melakukan Pembayaran', '2023-04-16 00:00:00', '0000-00-00 00:00:00'),
(41, 'NX5jmqDLCI', 2184, 'Mie Curlie', '5000', '1', 'L', 'Separo', 'Levis', 'resize.jpg', 'aaa', 'Fakultas Ilmu Komputer', '0123812', 'Belum Melakukan Pembayaran', '2023-04-17 00:00:00', '0000-00-00 00:00:00'),
(42, 'NX5jmqDLCI', 2184, 'Mie Curly', '6000', '1', 'L', 'Panjang', 'Levis', 'Cuplikan_layar_20221226_222207.png', 'aaa', 'Fakultas Ilmu Komputer', '0123812', 'Belum Melakukan Pembayaran', '2023-04-17 00:00:00', '0000-00-00 00:00:00'),
(43, 'fgGxQFSD5u', 2184, 'Gaun Hijau', '150000', '1', 'XXL', 'Gamis', 'Kain', 'adele-berpisah-dari-suami-setelah-3-tahun-menikah-C12pQddnAt.jpg', 'aaa', 'Fakultas Ilmu Komputer', '0123812', 'Sudah Melakukan Pembayaran', '2023-04-17 00:00:00', '2023-04-16 01:13:25'),
(44, 'fgGxQFSD5u', 2184, 'Mie Curly', '6000', '1', 'L', 'Panjang', 'Levis', 'Cuplikan_layar_20221226_222207.png', 'aaa', 'Fakultas Ilmu Komputer', '0123812', 'Sudah Melakukan Pembayaran', '2023-04-17 00:00:00', '2023-04-16 01:13:25'),
(45, 'fgGxQFSD5u', 2184, 'Mie Curlie', '5000', '1', 'L', 'Separo', 'Levis', 'resize.jpg', 'aaa', 'Fakultas Ilmu Komputer', '0123812', 'Sudah Melakukan Pembayaran', '2023-04-17 00:00:00', '2023-04-16 01:13:25'),
(46, '9iwnG8oPy6', 2184, 'Mie Curlie', '5000', '1', 'L', 'Separo', 'Levis', 'resize.jpg', 'aaa', 'uniku jaya jaya jay', '213', 'Sudah Melakukan Pembayaran', '2023-04-17 00:00:00', '0000-00-00 00:00:00'),
(47, '9iwnG8oPy6', 2184, 'Mie Curly', '6000', '1', 'L', 'Panjang', 'Levis', 'Cuplikan_layar_20221226_222207.png', 'aaa', 'uniku jaya jaya jay', '213', 'Sudah Melakukan Pembayaran', '2023-04-17 00:00:00', '0000-00-00 00:00:00'),
(48, 'eXaTfvWxS5', 2184, 'Mie Curly', '6000', '5', 'L', 'Panjang', 'Levis', 'Cuplikan_layar_20221226_222207.png', 'aaa', 'Desa Tambakbaya Kecamatan Garawangi', '0123812', 'Sudah Melakukan Pembayaran', '2023-04-18 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `data_barang`
--

CREATE TABLE `data_barang` (
  `id_barang` int(11) NOT NULL,
  `kode_barang` varchar(60) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `harga_barang` varchar(120) NOT NULL,
  `bahan` varchar(60) NOT NULL,
  `model` varchar(60) NOT NULL,
  `ukuran` varchar(60) NOT NULL,
  `stok_barang` varchar(120) NOT NULL,
  `tgl_input` varchar(10) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_barang`
--

INSERT INTO `data_barang` (`id_barang`, `kode_barang`, `nama_barang`, `harga_barang`, `bahan`, `model`, `ukuran`, `stok_barang`, `tgl_input`, `deskripsi`, `gambar`) VALUES
(10, 'KD001', 'asdas', '10000', 'Katun', 'Panjang', 'M', '123', '2022-12-28', 'asdas', 'IMG-20220902-WA0064-removebg-preview4.png'),
(11, 'KD002', 'Mie Curly', '6000', 'Levis', 'Panjang', 'L', '29', '2022-12-29', 'Enak', 'Cuplikan_layar_20221226_222207.png'),
(12, 'KD007', 'Mie Curlie', '5000', 'Levis', 'Separo', 'L', '30', '2023-01-11', 'ENaaakk', 'resize.jpg'),
(13, 'WWE', 'Gaun Hijau', '150000', 'Kain', 'Gamis', 'XXL', '100', '2023-04-15', 'Enak Adem di pake', 'adele-berpisah-dari-suami-setelah-3-tahun-menikah-C12pQddnAt.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data_recommend`
--

CREATE TABLE `data_recommend` (
  `id_recommend` int(11) NOT NULL,
  `uuid` varchar(120) NOT NULL,
  `bahan` varchar(120) NOT NULL,
  `model` varchar(120) NOT NULL,
  `ukuran` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_recommend`
--

INSERT INTO `data_recommend` (`id_recommend`, `uuid`, `bahan`, `model`, `ukuran`) VALUES
(45, '2184', 'Adem', 'T_Shirt', 'L'),
(46, '80311', 'Jersy', 'Panjang', 'L'),
(47, '60280', 'Jersy', 'Panjang', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id_pengeluaran` int(11) NOT NULL,
  `kode_barang` varchar(120) NOT NULL,
  `nama_barang` varchar(120) NOT NULL,
  `harga_barang` varchar(200) NOT NULL,
  `stok_pengeluaran` varchar(100) NOT NULL,
  `total_pendapatan` varchar(120) NOT NULL,
  `tgl_input` varchar(20) NOT NULL,
  `status` int(3) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengeluaran`
--

INSERT INTO `pengeluaran` (`id_pengeluaran`, `kode_barang`, `nama_barang`, `harga_barang`, `stok_pengeluaran`, `total_pendapatan`, `tgl_input`, `status`) VALUES
(1, 'KD004', 'Mie Jerit', '15000', '12', '', '2022-12-15', 1),
(2, 'KD004', 'Mie Jerit', '15000', '2', '30000', '2022-12-15', 1),
(7, 'KD004', 'Mie Jerit', '15000', '2', '30000', '2022-11-06', 1),
(8, 'KD010', 'Mie Curlie eeee', '6000', '5', '30000', '2022-12-16', 1),
(9, 'KD002', 'Mie Curly', '5000', '2', '10000', '2022-12-29', 1);

-- --------------------------------------------------------

--
-- Table structure for table `recommended`
--

CREATE TABLE `recommended` (
  `id_recommended` int(11) NOT NULL,
  `id_recommend` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `kode_barang` varchar(120) NOT NULL,
  `nama_barang` varchar(120) NOT NULL,
  `harga_barang` varchar(120) NOT NULL,
  `bahan` varchar(120) NOT NULL,
  `model` varchar(120) NOT NULL,
  `ukuran` varchar(120) NOT NULL,
  `stok_barang` varchar(120) NOT NULL,
  `tgl_input` varchar(120) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recommended`
--

INSERT INTO `recommended` (`id_recommended`, `id_recommend`, `id_barang`, `kode_barang`, `nama_barang`, `harga_barang`, `bahan`, `model`, `ukuran`, `stok_barang`, `tgl_input`, `deskripsi`, `gambar`) VALUES
(13, 45, 11, 'KD002', 'Mie Curly', '6000', 'Levis', 'Panjang', 'L', '29', '2022-12-29', 'Enak', 'Cuplikan_layar_20221226_222207.png'),
(14, 45, 12, 'KD007', 'Mie Curlie', '5000', 'Levis', 'Separo', 'L', '30', '2023-01-11', 'ENaaakk', 'resize.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `role`) VALUES
(1, 'pengelola'),
(2, 'admin'),
(3, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `id_role`, `nama_lengkap`, `no_hp`, `email`, `password`) VALUES
(1, 2, 'Administrator', '6283824587801', 'admin@umkm.com', '$2y$10$lZqVgMuiI5UxZwaJVlBKV.Dfry1S/DqiGG/qkvn6Brm.MCazJseE.'),
(5, 3, 'Bayu Prasetyo', '01234567890', 'bayuprasetyo.bp11@gmail.com', '$2y$10$4M9uv1sLilwT03YAO83W8et9Wvoq4MbCr1yIp6rBrYoiOuSS9.U8a'),
(6, 1, 'Bayu Prasetyo Bayu Prasetyo', '01234567890', 'bayuprasetyo.bp11@gmail.co', '$2y$10$ZjgCqHvkipxAW6R4E1PUAuBliKmFt2cpz6nLcdbtgWYbPhxoH2ilW'),
(7, 3, 'dodit', '083824587800', 'dodit@ujian.com', '$2y$10$4M9uv1sLilwT03YAO83W8et9Wvoq4MbCr1yIp6rBrYoiOuSS9.U8a'),
(8, 3, 'Rio Prasetyo', '081224036685', 'rioprasetyo240@gmail.com', '$2y$10$zgqb3vEcFCZ5QeaPjYK3EuMe5i6ZRqM9atHw3NVcONe6baLTyidqy'),
(10, 1, 'Bayu Prasetyo', '6283824587800', 'bayuprasetyo@wotle.org', '$2y$10$zF9LxtALcmpOwJNPwvh.h.GAYPVn7YxTISIq8I4aUMgbW/1qE8HJm'),
(2184, 3, 'aaa', '01234567890', 'bayuprasetyo.bp11@gmail.coms', '$2y$10$zxONVLZgxR9fXwvizr/nBOlftZu17vUpoQ40./a/bEvAmXUEwUKiC'),
(58845, 3, 'huhu', '123', 'huhu@gmail.com', '$2y$10$JwQcOGiUpd2/cgz3k8ArseKTFzEiPAsriR81aXvo01BAwtr4suqs6');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_recommend`
-- (See below for the actual view)
--
CREATE TABLE `vw_recommend` (
`id_recommended` int(11)
,`id_recommend` int(11)
,`id_barang` int(11)
,`kode_barang` varchar(120)
,`nama_barang` varchar(120)
,`harga_barang` varchar(120)
,`bahan` varchar(120)
,`model` varchar(120)
,`ukuran` varchar(120)
,`stok_barang` varchar(120)
,`tgl_input` varchar(120)
,`deskripsi` text
,`gambar` text
,`uuid` varchar(120)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_report`
-- (See below for the actual view)
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
-- Stand-in structure for view `vw_report_checkout`
-- (See below for the actual view)
--
CREATE TABLE `vw_report_checkout` (
`id_checkout` int(11)
,`uuid_checkout` varchar(120)
,`id_user` int(11)
,`produk` varchar(120)
,`harga` varchar(120)
,`banyak` varchar(120)
,`ukuran` varchar(10)
,`model` varchar(60)
,`bahan` varchar(60)
,`image` varchar(120)
,`nama_penerima` varchar(120)
,`alamat_penerima` text
,`no_penerima` varchar(15)
,`status_pembayaran` varchar(60)
,`due_datetime` datetime
,`datetime_pay` datetime
,`id_users` int(11)
,`id_role` int(11)
,`nama_lengkap` varchar(60)
,`no_hp` varchar(15)
,`email` varchar(60)
,`password` varchar(120)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_report_checkout_per_month`
-- (See below for the actual view)
--
CREATE TABLE `vw_report_checkout_per_month` (
`id_checkout` int(11)
,`uuid_checkout` varchar(120)
,`id_user` int(11)
,`produk` varchar(120)
,`harga` double
,`harga_satuan` varchar(120)
,`banyak` double
,`ukuran` varchar(10)
,`model` varchar(60)
,`bahan` varchar(60)
,`image` varchar(120)
,`nama_penerima` varchar(120)
,`alamat_penerima` text
,`no_penerima` varchar(15)
,`status_pembayaran` varchar(60)
,`due_datetime` datetime
,`datetime_pay` datetime
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_report_checkout_per_year`
-- (See below for the actual view)
--
CREATE TABLE `vw_report_checkout_per_year` (
`id_checkout` int(11)
,`uuid_checkout` varchar(120)
,`id_user` int(11)
,`produk` varchar(120)
,`harga` double
,`harga_satuan` varchar(120)
,`banyak` double
,`ukuran` varchar(10)
,`model` varchar(60)
,`bahan` varchar(60)
,`image` varchar(120)
,`nama_penerima` varchar(120)
,`alamat_penerima` text
,`no_penerima` varchar(15)
,`status_pembayaran` varchar(60)
,`due_datetime` datetime
,`datetime_pay` datetime
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_report_per_year`
-- (See below for the actual view)
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
-- (See below for the actual view)
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
-- Structure for view `vw_recommend`
--
DROP TABLE IF EXISTS `vw_recommend`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_recommend`  AS  select `recommended`.`id_recommended` AS `id_recommended`,`recommended`.`id_recommend` AS `id_recommend`,`recommended`.`id_barang` AS `id_barang`,`recommended`.`kode_barang` AS `kode_barang`,`recommended`.`nama_barang` AS `nama_barang`,`recommended`.`harga_barang` AS `harga_barang`,`recommended`.`bahan` AS `bahan`,`recommended`.`model` AS `model`,`recommended`.`ukuran` AS `ukuran`,`recommended`.`stok_barang` AS `stok_barang`,`recommended`.`tgl_input` AS `tgl_input`,`recommended`.`deskripsi` AS `deskripsi`,`recommended`.`gambar` AS `gambar`,`data_recommend`.`uuid` AS `uuid` from (`recommended` join `data_recommend` on((`recommended`.`id_recommend` = `data_recommend`.`id_recommend`))) ;

-- --------------------------------------------------------

--
-- Structure for view `vw_report`
--
DROP TABLE IF EXISTS `vw_report`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_report`  AS  select `pengeluaran`.`id_pengeluaran` AS `id_pengeluaran`,`pengeluaran`.`kode_barang` AS `kode_barang`,`pengeluaran`.`nama_barang` AS `nama_barang`,`pengeluaran`.`harga_barang` AS `harga_barang`,sum(`pengeluaran`.`stok_pengeluaran`) AS `stok_pengeluaran`,sum(`pengeluaran`.`total_pendapatan`) AS `total_pendapatan`,`pengeluaran`.`tgl_input` AS `tgl_input` from `pengeluaran` group by month(`pengeluaran`.`tgl_input`),`pengeluaran`.`nama_barang` order by `pengeluaran`.`tgl_input` ;

-- --------------------------------------------------------

--
-- Structure for view `vw_report_checkout`
--
DROP TABLE IF EXISTS `vw_report_checkout`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_report_checkout`  AS  select `checkout`.`id_checkout` AS `id_checkout`,`checkout`.`uuid_checkout` AS `uuid_checkout`,`checkout`.`id_user` AS `id_user`,`checkout`.`produk` AS `produk`,`checkout`.`harga` AS `harga`,`checkout`.`banyak` AS `banyak`,`checkout`.`ukuran` AS `ukuran`,`checkout`.`model` AS `model`,`checkout`.`bahan` AS `bahan`,`checkout`.`image` AS `image`,`checkout`.`nama_penerima` AS `nama_penerima`,`checkout`.`alamat_penerima` AS `alamat_penerima`,`checkout`.`no_penerima` AS `no_penerima`,`checkout`.`status_pembayaran` AS `status_pembayaran`,`checkout`.`due_datetime` AS `due_datetime`,`checkout`.`datetime_pay` AS `datetime_pay`,`users`.`id_users` AS `id_users`,`users`.`id_role` AS `id_role`,`users`.`nama_lengkap` AS `nama_lengkap`,`users`.`no_hp` AS `no_hp`,`users`.`email` AS `email`,`users`.`password` AS `password` from (`checkout` join `users` on((`checkout`.`id_user` = `users`.`id_users`))) ;

-- --------------------------------------------------------

--
-- Structure for view `vw_report_checkout_per_month`
--
DROP TABLE IF EXISTS `vw_report_checkout_per_month`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_report_checkout_per_month`  AS  select `checkout`.`id_checkout` AS `id_checkout`,`checkout`.`uuid_checkout` AS `uuid_checkout`,`checkout`.`id_user` AS `id_user`,`checkout`.`produk` AS `produk`,sum((`checkout`.`harga` * `checkout`.`banyak`)) AS `harga`,`checkout`.`harga` AS `harga_satuan`,sum(`checkout`.`banyak`) AS `banyak`,`checkout`.`ukuran` AS `ukuran`,`checkout`.`model` AS `model`,`checkout`.`bahan` AS `bahan`,`checkout`.`image` AS `image`,`checkout`.`nama_penerima` AS `nama_penerima`,`checkout`.`alamat_penerima` AS `alamat_penerima`,`checkout`.`no_penerima` AS `no_penerima`,`checkout`.`status_pembayaran` AS `status_pembayaran`,`checkout`.`due_datetime` AS `due_datetime`,`checkout`.`datetime_pay` AS `datetime_pay` from `checkout` where (`checkout`.`status_pembayaran` = 'Sudah Melakukan Pembayaran') group by month(`checkout`.`datetime_pay`),`checkout`.`produk`,`checkout`.`id_user` ;

-- --------------------------------------------------------

--
-- Structure for view `vw_report_checkout_per_year`
--
DROP TABLE IF EXISTS `vw_report_checkout_per_year`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_report_checkout_per_year`  AS  select `checkout`.`id_checkout` AS `id_checkout`,`checkout`.`uuid_checkout` AS `uuid_checkout`,`checkout`.`id_user` AS `id_user`,`checkout`.`produk` AS `produk`,sum((`checkout`.`harga` * `checkout`.`banyak`)) AS `harga`,`checkout`.`harga` AS `harga_satuan`,sum(`checkout`.`banyak`) AS `banyak`,`checkout`.`ukuran` AS `ukuran`,`checkout`.`model` AS `model`,`checkout`.`bahan` AS `bahan`,`checkout`.`image` AS `image`,`checkout`.`nama_penerima` AS `nama_penerima`,`checkout`.`alamat_penerima` AS `alamat_penerima`,`checkout`.`no_penerima` AS `no_penerima`,`checkout`.`status_pembayaran` AS `status_pembayaran`,`checkout`.`due_datetime` AS `due_datetime`,`checkout`.`datetime_pay` AS `datetime_pay` from `checkout` where (`checkout`.`status_pembayaran` = 'Sudah Melakukan Pembayaran') group by year(`checkout`.`datetime_pay`),`checkout`.`produk`,`checkout`.`id_user` ;

-- --------------------------------------------------------

--
-- Structure for view `vw_report_per_year`
--
DROP TABLE IF EXISTS `vw_report_per_year`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_report_per_year`  AS  select `pengeluaran`.`id_pengeluaran` AS `id_pengeluaran`,`pengeluaran`.`kode_barang` AS `kode_barang`,`pengeluaran`.`nama_barang` AS `nama_barang`,sum(`pengeluaran`.`harga_barang`) AS `harga_barang`,sum(`pengeluaran`.`total_pendapatan`) AS `total_pendapatan`,`pengeluaran`.`stok_pengeluaran` AS `stok_pengeluaran`,`pengeluaran`.`tgl_input` AS `tgl_input` from `pengeluaran` group by year(`pengeluaran`.`tgl_input`) order by `pengeluaran`.`tgl_input` ;

-- --------------------------------------------------------

--
-- Structure for view `vw_users`
--
DROP TABLE IF EXISTS `vw_users`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_users`  AS  select `users`.`id_users` AS `id_user`,`users`.`id_role` AS `id_role`,`role`.`role` AS `role`,`users`.`nama_lengkap` AS `nama_lengkap`,`users`.`no_hp` AS `no_hp`,`users`.`email` AS `email`,`users`.`password` AS `password` from (`users` join `role` on((`users`.`id_role` = `role`.`id_role`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id_chat`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id_checkout`);

--
-- Indexes for table `data_barang`
--
ALTER TABLE `data_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `data_recommend`
--
ALTER TABLE `data_recommend`
  ADD PRIMARY KEY (`id_recommend`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id_pengeluaran`);

--
-- Indexes for table `recommended`
--
ALTER TABLE `recommended`
  ADD PRIMARY KEY (`id_recommended`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id_chat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;
--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id_checkout` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `data_barang`
--
ALTER TABLE `data_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `data_recommend`
--
ALTER TABLE `data_recommend`
  MODIFY `id_recommend` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id_pengeluaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `recommended`
--
ALTER TABLE `recommended`
  MODIFY `id_recommended` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58846;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
