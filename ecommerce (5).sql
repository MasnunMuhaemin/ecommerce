-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20221125.2e001c186a
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Mar 2024 pada 01.07
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
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
-- Struktur dari tabel `chat`
--

CREATE TABLE `chat` (
  `id_chat` int(11) NOT NULL,
  `id_receive` int(11) NOT NULL,
  `id_sender` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `message` text NOT NULL,
  `image` varchar(120) NOT NULL,
  `status` text NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `chat`
--

INSERT INTO `chat` (`id_chat`, `id_receive`, `id_sender`, `nama`, `message`, `image`, `status`, `time`) VALUES
(188, 29634, 1, 'Administrator', 'why', '', 'dibaca', '2023-08-07 06:38:13'),
(189, 1, 29634, 'ikbal', 'haloo', '', 'dibaca', '2023-08-13 14:14:33'),
(190, 29634, 1, 'Administrator', 'Halo dek\r\n', '', 'dibaca', '2023-08-14 16:19:42'),
(191, 1, 29634, 'ikbal', 'apa om', '', 'dibaca', '2023-08-14 16:55:14'),
(192, 1, 80223, 'Rio Gofani', 'Hallo min', '', 'dibaca', '2023-08-15 15:19:50'),
(193, 1, 29634, 'ikbal', 'OM oM', '', 'dibaca', '2023-08-15 16:16:26'),
(194, 1, 29634, 'ikbal', 'om ih', '', 'dibaca', '2023-08-15 16:21:02'),
(195, 1, 29634, 'ikbal', 'oom', '', 'dibaca', '2023-08-15 16:22:31'),
(196, 1, 80223, 'Rio Gofani', 'UHUY\nasada', '', 'dibaca', '2023-08-15 16:23:07'),
(197, 1, 80223, 'Rio Gofani', 'omm', '', 'dibaca', '2023-08-15 16:34:56'),
(200, 29634, 1, 'Administrator', 'apa ajig um am om om mulu', '', 'dibaca', '2023-08-15 22:03:21'),
(201, 1, 29634, 'ikbal', 'Galak amat om', '', 'dibaca', '2023-08-17 16:27:03'),
(202, 29634, 1, 'Administrator', 'ah elu gaje ajg', '', 'dibaca', '2023-08-17 16:34:58'),
(203, 29634, 1, 'Administrator', 'taii', '', 'dibaca', '2023-08-17 16:36:07'),
(204, 29634, 1, 'Administrator', 'blok', '', 'dibaca', '2023-08-17 16:37:28'),
(205, 29634, 1, 'Administrator', 'woii', '', 'dibaca', '2023-08-17 16:38:36'),
(206, 29634, 1, 'Administrator', 'huhuh', '', 'dibaca', '2023-08-17 16:42:57'),
(207, 29634, 1, 'Administrator', 'ahaha', '', 'dibaca', '2023-08-17 16:46:13'),
(208, 1, 29634, 'ikbal', 'begimana ya cara nya update notifnya', '', 'dibaca', '2023-08-17 16:57:36'),
(209, 29634, 1, 'Administrator', 'Ya begini ajig', '', 'dibaca', '2023-08-17 17:14:44'),
(210, 1, 29634, 'ikbal', 'ya gimana bangsat', '', 'dibaca', '2023-08-17 17:15:13'),
(211, 29634, 1, 'Administrator', 'Ya begitu', '', 'dibaca', '2023-08-17 17:16:08'),
(212, 1, 29634, 'ikbal', 'iya begimana sich ajig', '', 'dibaca', '2023-08-17 17:16:31'),
(213, 29634, 1, 'Administrator', 'lu nanya mulu ajg', '', 'dibaca', '2023-08-17 17:26:24'),
(214, 1, 29634, 'ikbal', 'lah kan gua ga tau anj jadi nanya', '', 'dibaca', '2023-08-17 17:26:55'),
(215, 1, 70368, 'Irfan Maulana', 'Bro', '', 'dibaca', '2023-08-17 19:42:17'),
(216, 70368, 1, 'Administrator', 'Hallo', '', 'dibaca', '2023-08-17 19:43:13'),
(217, 1, 70368, 'Irfan Maulana', 'Woo wong sableng dichat diem bae', '', 'dibaca', '2023-08-17 19:45:30'),
(218, 70368, 1, 'Administrator', 'kan tadi di bales cuk', '', 'dibaca', '2023-08-17 19:45:58'),
(219, 70368, 1, 'Administrator', 'cuk', '', 'dibaca', '2023-08-17 19:46:39'),
(220, 1, 70368, 'Irfan Maulana', 'opo cuk', '', 'dibaca', '2023-08-17 19:46:59'),
(221, 70368, 1, 'Administrator', 'bales cok\r\n', '', 'dibaca', '2023-08-17 19:47:11'),
(222, 70368, 1, 'Administrator', 'bales cok', '', 'dibaca', '2023-08-17 19:47:50'),
(223, 70368, 1, 'Administrator', 'www', '', 'dibaca', '2023-08-17 19:48:07'),
(224, 70368, 1, 'Administrator', 'www 2', '', 'dibaca', '2023-08-17 19:48:59'),
(225, 1, 70368, 'Irfan Maulana', 'opo neh ?', '', 'dibaca', '2023-08-17 19:49:20'),
(226, 70368, 1, 'Administrator', 'wes rapopo', '', 'dibaca', '2023-08-17 19:50:51'),
(227, 70368, 1, 'Administrator', 'jancok', '', 'dibaca', '2023-08-17 19:51:39'),
(228, 1, 70368, 'Irfan Maulana', 'lahh', '', 'dibaca', '2023-08-17 19:53:08'),
(229, 70368, 1, 'Administrator', 'ooo', '', 'dibaca', '2023-08-17 19:53:32'),
(230, 1, 70368, 'Irfan Maulana', 'hgjhgj', '', 'dibaca', '2023-08-17 19:55:43'),
(231, 70368, 1, 'Administrator', 'whoo', '', 'dibaca', '2023-08-17 19:56:02'),
(232, 70368, 1, 'Administrator', 'blues', '', 'dibaca', '2023-08-17 19:56:42'),
(233, 70368, 1, 'Administrator', 'blues', '', 'dibaca', '2023-08-17 19:57:33'),
(234, 1, 70368, 'Irfan Maulana', 'whaa', '', 'dibaca', '2023-08-17 19:59:17'),
(235, 1, 70368, 'Irfan Maulana', 'haa', '', 'dibaca', '2023-08-17 19:59:48'),
(236, 70368, 1, 'Administrator', 'Whuuu', '', 'dibaca', '2023-08-17 19:59:58'),
(237, 1, 70368, 'Irfan Maulana', 'mmmm', '', 'dibaca', '2023-08-17 20:00:12'),
(238, 70368, 1, 'Administrator', 'hhmm', '', 'dibaca', '2023-08-17 20:00:26'),
(239, 70368, 1, 'Administrator', 'Irfan dimana', '', 'dibaca', '2023-08-18 08:40:15'),
(240, 1, 70368, 'Irfan Maulana', 'Di kuningan', '', 'dibaca', '2023-08-18 08:40:41'),
(241, 70368, 1, 'Administrator', 'irfan dimana', '', 'dibaca', '2023-08-22 00:20:47'),
(242, 88820, 1, 'Administrator', 'p', '', 'dibaca', '2023-08-22 00:21:21'),
(243, 88820, 1, 'Administrator', 'irfan dimana\r\n', '', 'dibaca', '2023-08-22 00:21:30'),
(244, 1, 88820, 'Irfan Maulana', 'saya ada dikuningan', '', 'dibaca', '2023-08-22 00:21:47'),
(245, 88820, 1, 'Administrator', 'Lagi ngapain jauh2 ke kuningan', '', 'dibaca', '2023-08-22 00:22:13'),
(246, 88820, 1, 'Administrator', 'p', '', 'dibaca', '2023-08-29 10:26:15'),
(247, 70368, 1, 'Administrator', 'pp', '', 'dibaca', '2023-08-29 10:26:50'),
(248, 1, 70368, 'Irfan Maulana', 'euyy', '', 'dibaca', '2023-08-29 10:27:09'),
(249, 1, 92449, 'wardandi', 'Halo', '', 'dibaca', '2023-09-09 21:31:20'),
(250, 1, 92449, 'wardandi', 'Permisi', '', 'dibaca', '2023-09-16 01:22:17'),
(251, 1, 12770, 'Pelanggan', 'min ada dimana', '', 'dibaca', '2023-09-26 13:37:40'),
(252, 1, 12770, 'Pelanggan', 'p', '', 'dibaca', '2023-09-26 13:38:31'),
(253, 1, 41513, 'pelanggan1', 'admin tolong', '', 'dibaca', '2023-10-10 11:31:13'),
(254, 41513, 1, 'Administrator', 'gimana kak?\r\n', '', 'dibaca', '2023-10-10 11:31:44'),
(255, 1, 41513, 'pelanggan1', 'min', '', 'dibaca', '2023-10-12 06:23:10'),
(256, 41513, 1, 'Administrator', 'kenapa\r\n', '', 'dibaca', '2023-10-12 06:23:33'),
(257, 1, 41513, 'pelanggan1', 'gajadi min tes doang', '', 'dibaca', '2023-10-12 06:23:49'),
(258, 1, 41513, 'pelanggan1', 'admin adayang baru tidak', '', 'dibaca', '2023-10-13 06:22:09'),
(259, 41513, 1, 'Administrator', 'ada,mau barang yang mana', '', 'dibaca', '2023-10-13 06:22:32'),
(260, 1, 41513, 'pelanggan1', 'tida jadi min', '', 'dibaca', '2023-10-13 06:22:50'),
(261, 1, 41513, 'pelanggan1', 'halo admin', '', 'dibaca', '2023-10-13 14:09:14'),
(262, 83046, 1, 'Administrator', 'p\r\n', '', 'dibaca', '2024-01-09 21:15:23'),
(263, 83046, 1, 'Administrator', 'apkaah barang ada minusnya?\r\n', '', 'dibaca', '2024-01-09 21:15:38'),
(264, 1, 83046, 'Rio Gofani', 'amaan min\r\n', '', 'dibaca', '2024-01-09 21:16:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `checkout`
--

CREATE TABLE `checkout` (
  `id_checkout` int(11) NOT NULL,
  `uuid_checkout` varchar(120) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
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
  `note_reject` text NOT NULL,
  `bukti_pembayaran` varchar(200) NOT NULL,
  `provinsi` varchar(120) NOT NULL,
  `kota` varchar(120) NOT NULL,
  `ekspedisi` varchar(120) NOT NULL,
  `ongkir` varchar(120) NOT NULL,
  `due_datetime` datetime NOT NULL,
  `datetime_pay` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `checkout`
--

INSERT INTO `checkout` (`id_checkout`, `uuid_checkout`, `id_user`, `id_barang`, `produk`, `harga`, `banyak`, `ukuran`, `model`, `bahan`, `image`, `nama_penerima`, `alamat_penerima`, `no_penerima`, `status_pembayaran`, `note_reject`, `bukti_pembayaran`, `provinsi`, `kota`, `ekspedisi`, `ongkir`, `due_datetime`, `datetime_pay`) VALUES
(134, 'sTHzSuLZWN', 41513, 12, 'Atasan wanita frost', '90000', '1', 'L', 'Separo', 'Levis', 'WhatsApp_Image_2023-07-05_at_07_26_57_(1).jpeg', '509.jpg', 'Kecamatan maleber, kuninganq2', '083833321312', 'Barang diterima', '', '398901927509.jpg', 'DI Yogyakarta', 'Kulon Progo', 'TIKI', '23000', '2023-10-14 00:00:00', '2023-10-12 14:56:50'),
(135, 'sTHzSuLZWN', 41513, 11, 'Atasan Wanita Beige', '90000', '1', 'L', 'Panjang', 'Levis', 'WhatsApp_Image_2023-07-05_at_07_27_03_(1).jpeg', '509.jpg', 'Kecamatan maleber, kuninganq2', '083833321312', 'Barang diterima', '', '398901927509.jpg', 'DI Yogyakarta', 'Kulon Progo', 'TIKI', '23000', '2023-10-14 00:00:00', '2023-10-12 14:56:50'),
(136, 'dYObvcheuV', 71989, 12, 'Atasan wanita frost', '90000', '1', '', '', '', 'WhatsApp_Image_2023-07-05_at_07_26_57_(1).jpeg', '6011 - Copy.jpg', 'kutaraja maleber', '089675446321', 'Barang diterima', '', '9324700766011 - Copy.jpg', 'Jawa Barat', 'Kuningan', 'JNE', '7000', '2023-10-15 00:00:00', '2023-10-13 13:58:41'),
(137, 'KulwypqMiO', 41513, 12, 'Atasan wanita frost', '90000', '1', 'L', 'Separo', 'Levis', 'WhatsApp_Image_2023-07-05_at_07_26_57_(1).jpeg', '6011 - Copy.jpg', 'Kecamatan maleber, kuningan, maleber', '0838333213121', 'Barang diterima', '', '19439896286011 - Copy.jpg', 'Jawa Barat', 'Kuningan', 'POS', '7000', '2023-10-15 00:00:00', '2023-10-13 14:02:09'),
(138, 'kXwqzVhd6j', 41513, 12, 'Atasan wanita frost', '90000', '1', 'L', 'Separo', 'Levis', 'WhatsApp_Image_2023-07-05_at_07_26_57_(1).jpeg', '509.jpg', 'Kecamatan maleber, kuningan, pesisir', '083833321312', 'Refund Approve', '', '1792078475509.jpg', 'Jawa Tengah', 'Jepara', 'JNE', '21000', '2023-10-15 00:00:00', '2023-10-13 14:07:17'),
(139, 'ewYc43c521', 41513, 21, 'One set kaos Kuning', '70000', '1', 'xl', 'one set kaos', 'baby tery', 'one_set_kaos_kuning.jpeg', '3873446.jpg', 'Kecamatan maleber, kuningan1', '083833321311', 'Refund', '', '11093196993873446.jpg', 'Jawa Barat', 'Kuningan', 'JNE', '9000', '2023-10-21 00:00:00', '2023-10-19 07:30:55'),
(140, 'ydmOJXrFO1', 56062, 12, 'Atasan wanita frost', '90000', '1', 'L', 'Separo', 'Levis', 'WhatsApp_Image_2023-07-05_at_07_26_57_(1).jpeg', '509.jpg', 'Desa Cirukem', '083824587800', 'Barang diterima', '', '310803559509.jpg', 'Banten', 'Lebak', 'TIKI', '21000', '2023-12-11 00:00:00', '2023-12-09 23:27:48'),
(141, 't2MXfMImxH', 56062, 18, 'Baju Gamis Rompi Lepas', '120000', '1', 'L', 'Rompi Lepas', 'Katun', 'WhatsApp_Image_2023-07-05_at_07_27_06_(1).jpeg', '6011 - Copy.jpg', 'Desa Cirukem', '083824587800', 'Barang diterima', '', '621749936011 - Copy.jpg', 'DKI Jakarta', 'Jakarta Barat', 'POS', '13000', '2023-12-11 00:00:00', '2023-12-09 23:27:42'),
(142, '7mMbsd7YTt', 83046, 12, 'Atasan wanita frost', '90000', '1', 'L', 'Separo', 'Levis', 'WhatsApp_Image_2023-07-05_at_07_26_57_(1).jpeg', '509.jpg', 'Dusun kliwon, desa bunut', '08977654321', 'Barang diterima', '', '1295797965509.jpg', 'Jawa Timur', 'Blitar', 'TIKI', '27000', '2023-12-13 00:00:00', '2024-01-09 21:10:19'),
(143, 'v9JbFTiqw0', 83046, 23, 'Gamis Inner Buana Pink', '150000', '1', 'xl', 'gamis', 'sakila', 'WhatsApp_Image_2024-01-08_at_07_58_24.jpeg', '6011 - Copy.jpg', 'kutaraja', '08977654321', 'Barang diterima', '', '10902217356011 - Copy.jpg', 'Jawa Barat', 'Cirebon', 'POS', '11000', '2024-01-11 00:00:00', '2024-01-09 21:10:30'),
(144, 'B4mQsPJqF3', 78902, 15, 'Atasan Soft Silk', '90000', '1', 'XL', 'Soft Silk', 'Katun', 'WhatsApp_Image_2023-07-05_at_07_26_57.jpeg', '6011.jpg', 'rt 02, rw 03, dusun wetan, kec. maleber', '0123456', 'Belum Melakukan Pembayaran', '', '15791099246011.jpg', 'Jawa Barat', 'Kuningan', 'JNE', '7000', '2024-01-13 00:00:00', '0000-00-00 00:00:00'),
(145, 'Tpq8AplRKG', 88287, 11, 'Atasan Wanita Beige', '90000', '1', 'L', 'Panjang', 'Levis', 'WhatsApp_Image_2023-07-05_at_07_27_03_(1).jpeg', '11199.jpg', 'Desak kutaraja,rt 12,rt 04', '089432132', 'Barang diterima', '', '189428718911199.jpg', 'Jawa Barat', 'Kuningan', 'JNE', '7000', '2024-01-13 00:00:00', '2024-01-11 15:31:25'),
(146, 'Tpq8AplRKG', 88287, 12, 'Atasan wanita frost', '90000', '1', 'L', 'Separo', 'Levis', 'WhatsApp_Image_2023-07-05_at_07_26_57_(1).jpeg', '11199.jpg', 'Desak kutaraja,rt 12,rt 04', '089432132', 'Barang diterima', '', '189428718911199.jpg', 'Jawa Barat', 'Kuningan', 'JNE', '7000', '2024-01-13 00:00:00', '2024-01-11 15:31:25'),
(147, 'B97yyXja9D', 88287, 19, 'Baju Gamis Rose Crepe', '120000', '1', 'L', 'Swarovski', 'Katun', 'WhatsApp_Image_2023-07-05_at_07_26_50.jpeg', '6011 - Copy.jpg', 'Desak kutaraja,rt 12,rt 04', '089432132', 'Belum Melakukan Pembayaran', '', '18256275686011 - Copy.jpg', 'Kalimantan Timur', 'Kutai Timur', 'JNE', '84000', '2024-01-13 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_barang`
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
-- Dumping data untuk tabel `data_barang`
--

INSERT INTO `data_barang` (`id_barang`, `kode_barang`, `nama_barang`, `harga_barang`, `bahan`, `model`, `ukuran`, `stok_barang`, `tgl_input`, `deskripsi`, `gambar`) VALUES
(11, 'Atsn', 'Atasan Wanita Beige', '90000', 'Levis', 'Panjang', 'L', '29', '2022-12-29', 'Baju atasan wanita, cocok di pake buat santai', 'WhatsApp_Image_2023-07-05_at_07_27_03_(1).jpeg'),
(12, 'Atsn-02', 'Atasan wanita frost', '90000', 'Levis', 'Separo', 'L', '31', '2023-01-11', 'Baju atasan ini sangat lembut, cocok dipakai berpergian kemanapun', 'WhatsApp_Image_2023-07-05_at_07_26_57_(1).jpeg'),
(13, 'Atsn-03', 'Atasan crincle print biru', '90000', 'Kain', 'Gamis', 'XXL', '28', '2023-04-15', 'Baju atasan wanita, berbahan lembut  dan tidak gerah', 'WhatsApp_Image_2023-07-05_at_07_27_03.jpeg'),
(14, 'gms-01', 'Baju Gamis Rompi Lepas', '120000', 'Katun', 'Rompi Lepas', 'XL', '74', '2023-07-05', 'Baju Gamis Rompi Lepas nyaman dipakai', 'WhatsApp_Image_2023-07-05_at_07_27_05_(1).jpeg'),
(15, 'Atsn-ss', 'Atasan Soft Silk', '90000', 'Katun', 'Soft Silk', 'XL', '30', '2023-07-06', 'atasan soft silk, nyaman di pakai dan lembut', 'WhatsApp_Image_2023-07-05_at_07_26_57.jpeg'),
(16, 'atsn-pl', 'Atasan Polo Linen', '90000', 'Katun', 'Polo Linen', 'L', '15', '2023-07-06', 'Atasan polo linen nyaman dipakai dan bahan adem', 'WhatsApp_Image_2023-07-05_at_07_26_56.jpeg'),
(17, 'stln-fb', 'Baju setelan free belt', '135000', 'Katun', 'Free Belt', 'L', '7', '2023-07-06', 'Baju setelan wanita nyaman diapakai, dan bahan adem.', 'WhatsApp_Image_2023-07-05_at_07_27_02_(2).jpeg'),
(18, 'gms-rmp', 'Baju Gamis Rompi Lepas', '120000', 'Katun', 'Rompi Lepas', 'L', '9', '2023-07-06', 'Gamis model rompi lepas, bahan adem,nyaman dipakai', 'WhatsApp_Image_2023-07-05_at_07_27_06_(1).jpeg'),
(19, 'gms-02', 'Baju Gamis Rose Crepe', '120000', 'Katun', 'Swarovski', 'L', '10', '2023-07-06', 'Baju gamis, bahan adem, nyaman dipakai', 'WhatsApp_Image_2023-07-05_at_07_26_50.jpeg'),
(21, 'osk-01', 'One set kaos Kuning', '70000', 'baby tery', 'one set kaos', 'xl', '15', '2023-10-12', 'Barang ini nyaman untuk digunakan keseharian', 'one_set_kaos_kuning.jpeg'),
(22, 'osc-001', 'one set cringkle ungu', '100000', 'cringkel', 'setelan cringkel', 'xl', '15', '2023-10-13', 'baju ini cocok di pakain buat jalan jalan, barang yang tersedian hanya ukuran xl', 'One_set_Cringkle.jpeg'),
(23, 'gamis-001', 'Gamis Inner Buana Pink', '150000', 'sakila', 'gamis', 'xl', '9', '2024-01-09', 'Baju gamis nyaman dipakai untuk acara pengajian, acara resmi', 'WhatsApp_Image_2024-01-08_at_07_58_24.jpeg'),
(24, 'Gamis-002', 'Gamis inner buana coklat', '150000', 'sakila', 'Gamis', 'XL', '20', '2024-01-09', 'Baju gamis perempuan cocok untuk dipakai acara resmi, pengajian, dan juga cocok untuk acara keluarga', 'WhatsApp_Image_2024-01-08_at_07_58_23.jpeg'),
(25, 'knit', 'atasan Knit kaos Mix cey kotak', '95000', 'knit', 'kaos', 'xl', '15', '2024-01-11', 'Baju ini cocok untuk dibawa santai, bahan adem tidak gerah,', 'WhatsApp_Image_2024-01-08_at_07_59_29.jpeg'),
(26, 'knit', 'Atasan knit salur', '95000', 'knit', 'kaos', 'xl', '15', '2024-01-11', 'bahan knit adem, cocok dipakai untuk santai, bisa di pakai untuk hangout', 'WhatsApp_Image_2024-01-08_at_07_59_30.jpeg'),
(27, 'ats-04', 'Atasan Lady Sofia pink', '95000', 'Lady sofia', 'Atasan kaos', 'xl', '15', '2024-01-11', 'Baju atasan kaos, bahan adem enak di pake', 'WhatsApp_Image_2024-01-08_at_07_59_33_(1).jpeg'),
(28, 'ats-05', 'Atasan cey combi corak bunga', '95000', 'Cey combi', 'Kaos', 'xl', '15', '2024-01-11', 'atasan kaos, motif bunga, bahan licin dari cey combi, cocok untuk dipakai buat hangout', 'WhatsApp_Image_2024-01-08_at_07_59_32.jpeg'),
(29, 'one set', 'One set knit maroon', '120', 'knit astert', 'One set', 'XL', '15', '2024-01-11', 'Baju one set, cocok di pake buat kemana-mana, bahan licinn', 'WhatsApp_Image_2024-01-08_at_07_35_40.jpeg'),
(30, 'one set', 'one set knit cream', '120000', 'knit astert', 'One set', 'XL', '15', '2024-01-11', 'Baju setelan, cocok untuk diapakai sehari-hari, bahan liciinnn', 'WhatsApp_Image_2024-01-08_at_07_35_40_(1).jpeg'),
(31, 'Ats-06', 'Atasan katun jepang', '95000', 'Katun', 'Kaos', 'XL', '15', '2024-01-11', 'Baju kaos atasan berbahan katun jepang, pakaian cocok untuk dipakai sehari-hari', 'WhatsApp_Image_2024-01-08_at_07_59_31.jpeg');

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
  `tgl_input` varchar(20) NOT NULL,
  `status` int(3) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `refund`
--

CREATE TABLE `refund` (
  `id_refund` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_checkout` int(11) NOT NULL,
  `uuid_checkout` varchar(120) NOT NULL,
  `id_users` int(11) NOT NULL,
  `status_pengiriman` varchar(120) NOT NULL,
  `status_pengembalian` varchar(60) NOT NULL,
  `nominal_refund` varchar(120) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar_refund` text NOT NULL,
  `jumlah_pengembalian` varchar(100) NOT NULL,
  `approve_barang` varchar(60) NOT NULL,
  `tgl_refund` date NOT NULL,
  `tgl_approve_refund` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `refund`
--

INSERT INTO `refund` (`id_refund`, `id_barang`, `id_checkout`, `uuid_checkout`, `id_users`, `status_pengiriman`, `status_pengembalian`, `nominal_refund`, `deskripsi`, `gambar_refund`, `jumlah_pengembalian`, `approve_barang`, `tgl_refund`, `tgl_approve_refund`) VALUES
(36, 12, 138, 'kXwqzVhd6j', 41513, 'barangtidakditerima', 'Refund', '90000', 'warna tida sesuai', 'WhatsApp_Image_2023-07-05_at_07_26_541.jpeg', '1', '', '0000-00-00', '0000-00-00'),
(37, 21, 139, 'ewYc43c521', 41513, 'barangtidakditerima', 'Refund', '70000', 'beda warna', '60111.jpg', '1', '', '0000-00-00', '0000-00-00');

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
(3, 'user'),
(0, 'pemilik');

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
  `password` varchar(120) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_users`, `id_role`, `nama_lengkap`, `no_hp`, `email`, `password`, `alamat`) VALUES
(1, 2, 'Administrator', '6283824587801', 'admin@umkm.com', '$2y$10$lZqVgMuiI5UxZwaJVlBKV.Dfry1S/DqiGG/qkvn6Brm.MCazJseE.', 'Pasar Kepuh'),
(35549, 3, 'Rio Fani', '1122334455', 'riofani@gmail.com', '$2y$10$LRbw3QrmGu3ghiDOPkzJUuPFwSln.WM2JBa7noqDCfn2dse0O03CC', 'Kutaraja kecamatan maleber'),
(56062, 3, 'DONI', '083824587800', 'doni@gmail.com', '$2y$10$xEXzK0uKv6eOLr8ReQlUkOZW9FHVKT9Pa6YtXyOSMwFKMU4/auKOa', 'Desa Cirukem'),
(71694, 3, 'Pelanggan 0', '1122334455', 'pelanggan0@gmal.com', '$2y$10$nkHBrxCj8e6bg0RtW0b3n.3ElxziS3Sq/pfUaONGubT8crm9.UpD2', 'Desa Kutaraja, Kec.Meleber'),
(78902, 3, 'Pelanggan baru', '0123456', 'pelanggan1@gmail.com', '$2y$10$TmySF6tV9roRzg8ZZf9a.O6BYO928ue5qDtkK07wgtOoreKsV.pOG', 'rt 02, rw 03, dusun wetan, kec. maleber'),
(83046, 3, 'Rio Gofani', '08977654321', 'rio20@gmail.com', '$2y$10$JBkrVgA1qAEP4Gf2q.ruNuhszvyD/LXBjSL1OLYozeHoMV89zV83u', 'kutaraja'),
(86259, 0, 'Pemiik', '081824587800', 'pemilik@gmail.com', '$2y$10$lZqVgMuiI5UxZwaJVlBKV.Dfry1S/DqiGG/qkvn6Brm.MCazJseE.', 'Pasar kepuh'),
(88287, 3, 'Rio Gofani', '089432132', 'rio10@gmail.com', '$2y$10$ZxIdhPdVvbqvm9nHb5F6beSC.KdSNTlye09yyHvlVNpSAGBdPyM1S', 'Desak kutaraja,rt 12,rt 04');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `vw_notif`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `vw_notif` (
`id_users` int(11)
,`id_role` int(11)
,`id_chat` int(11)
,`nama_lengkap` varchar(60)
,`no_hp` varchar(15)
,`email` varchar(60)
,`alamat` text
,`id_receive` int(11)
,`id_sender` int(11)
,`nama` varchar(120)
,`message` text
,`image` varchar(120)
,`status` text
,`time` datetime
,`notif` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `vw_recommend`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `vw_recommend` (
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `vw_recommend_produk`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `vw_recommend_produk` (
`id_checkout` int(11)
,`uuid_checkout` varchar(120)
,`id_barang` int(11)
,`id_user` int(11)
,`produk` varchar(120)
,`harga` varchar(120)
,`stok_barang` varchar(120)
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
,`id_users` int(11)
,`id_role` int(11)
,`nama_lengkap` varchar(60)
,`no_hp` varchar(15)
,`email` varchar(60)
,`password` varchar(120)
,`bukti_pembayaran` varchar(200)
,`provinsi` varchar(120)
,`kota` varchar(120)
,`ekspedisi` varchar(120)
,`ongkir` varchar(120)
,`banyak_beli` double
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `vw_refund`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `vw_refund` (
`id_refund` int(11)
,`id_barang` int(11)
,`id_checkout` int(11)
,`id_users` int(11)
,`uuid_checkout` varchar(120)
,`nama_lengkap` varchar(60)
,`nama_penerima` varchar(120)
,`no_hp` varchar(15)
,`no_penerima` varchar(15)
,`alamat_penerima` text
,`provinsi` varchar(120)
,`kota` varchar(120)
,`ekspedisi` varchar(120)
,`ongkir` varchar(120)
,`email` varchar(60)
,`bukti_pembayaran` varchar(200)
,`deskripsi` text
,`gambar_refund` text
,`nama_barang` varchar(30)
,`harga_barang` varchar(120)
,`banyak` varchar(120)
,`jumlah_pengembalian` varchar(100)
,`bahan` varchar(60)
,`model` varchar(60)
,`ukuran` varchar(60)
,`gambar_produk` varchar(120)
,`tgl_refund` date
,`tgl_approve_refund` date
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `vw_report`
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
-- Stand-in struktur untuk tampilan `vw_report_checkout`
-- (Lihat di bawah untuk tampilan aktual)
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
,`bukti_pembayaran` varchar(200)
,`provinsi` varchar(120)
,`kota` varchar(120)
,`ekspedisi` varchar(120)
,`ongkir` varchar(120)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `vw_report_checkout_per_month`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `vw_report_checkout_per_month` (
`id_checkout` int(11)
,`uuid_checkout` varchar(120)
,`id_user` int(11)
,`produk` varchar(120)
,`subtotal` double
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
-- Stand-in struktur untuk tampilan `vw_report_checkout_per_year`
-- (Lihat di bawah untuk tampilan aktual)
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
-- Stand-in struktur untuk tampilan `vw_report_per_year`
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
-- Stand-in struktur untuk tampilan `vw_report_riwayat`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `vw_report_riwayat` (
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
,`bukti_pembayaran` varchar(200)
,`provinsi` varchar(120)
,`kota` varchar(120)
,`ekspedisi` varchar(120)
,`ongkir` varchar(120)
,`jumlah_beli` double
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `vw_users`
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
,`alamat` text
);

-- --------------------------------------------------------

--
-- Struktur untuk view `vw_notif`
--
DROP TABLE IF EXISTS `vw_notif`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_notif`  AS SELECT `users`.`id_users` AS `id_users`, `users`.`id_role` AS `id_role`, `chat`.`id_chat` AS `id_chat`, `users`.`nama_lengkap` AS `nama_lengkap`, `users`.`no_hp` AS `no_hp`, `users`.`email` AS `email`, `users`.`alamat` AS `alamat`, `chat`.`id_receive` AS `id_receive`, `chat`.`id_sender` AS `id_sender`, `chat`.`nama` AS `nama`, `chat`.`message` AS `message`, `chat`.`image` AS `image`, `chat`.`status` AS `status`, `chat`.`time` AS `time`, count(`chat`.`status`) AS `notif` FROM (`users` join `chat` on(`users`.`id_users` = `chat`.`id_receive`)) WHERE `chat`.`status` = 'Belum dibaca' GROUP BY `users`.`nama_lengkap`, `chat`.`status`, `chat`.`nama` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `vw_recommend`
--
DROP TABLE IF EXISTS `vw_recommend`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_recommend`  AS SELECT `recommended`.`id_recommended` AS `id_recommended`, `recommended`.`id_recommend` AS `id_recommend`, `recommended`.`id_barang` AS `id_barang`, `recommended`.`kode_barang` AS `kode_barang`, `recommended`.`nama_barang` AS `nama_barang`, `recommended`.`harga_barang` AS `harga_barang`, `recommended`.`bahan` AS `bahan`, `recommended`.`model` AS `model`, `recommended`.`ukuran` AS `ukuran`, `recommended`.`stok_barang` AS `stok_barang`, `recommended`.`tgl_input` AS `tgl_input`, `recommended`.`deskripsi` AS `deskripsi`, `recommended`.`gambar` AS `gambar`, `data_recommend`.`uuid` AS `uuid` FROM (`recommended` join `data_recommend` on(`recommended`.`id_recommend` = `data_recommend`.`id_recommend`)) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `vw_recommend_produk`
--
DROP TABLE IF EXISTS `vw_recommend_produk`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_recommend_produk`  AS SELECT `checkout`.`id_checkout` AS `id_checkout`, `checkout`.`uuid_checkout` AS `uuid_checkout`, `checkout`.`id_barang` AS `id_barang`, `checkout`.`id_user` AS `id_user`, `checkout`.`produk` AS `produk`, `checkout`.`harga` AS `harga`, `data_barang`.`stok_barang` AS `stok_barang`, sum(`checkout`.`banyak`) AS `banyak`, `checkout`.`ukuran` AS `ukuran`, `checkout`.`model` AS `model`, `checkout`.`bahan` AS `bahan`, `checkout`.`image` AS `image`, `checkout`.`nama_penerima` AS `nama_penerima`, `checkout`.`alamat_penerima` AS `alamat_penerima`, `checkout`.`no_penerima` AS `no_penerima`, `checkout`.`status_pembayaran` AS `status_pembayaran`, `checkout`.`due_datetime` AS `due_datetime`, `checkout`.`datetime_pay` AS `datetime_pay`, `users`.`id_users` AS `id_users`, `users`.`id_role` AS `id_role`, `users`.`nama_lengkap` AS `nama_lengkap`, `users`.`no_hp` AS `no_hp`, `users`.`email` AS `email`, `users`.`password` AS `password`, `checkout`.`bukti_pembayaran` AS `bukti_pembayaran`, `checkout`.`provinsi` AS `provinsi`, `checkout`.`kota` AS `kota`, `checkout`.`ekspedisi` AS `ekspedisi`, `checkout`.`ongkir` AS `ongkir`, sum(`checkout`.`banyak`) AS `banyak_beli` FROM ((`checkout` join `users` on(`checkout`.`id_user` = `users`.`id_users`)) join `data_barang` on(`data_barang`.`id_barang` = `checkout`.`id_barang`)) GROUP BY `checkout`.`id_user`, `checkout`.`model`, `checkout`.`bahan` ORDER BY sum(`checkout`.`banyak`) DESC ;

-- --------------------------------------------------------

--
-- Struktur untuk view `vw_refund`
--
DROP TABLE IF EXISTS `vw_refund`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_refund`  AS SELECT `refund`.`id_refund` AS `id_refund`, `refund`.`id_barang` AS `id_barang`, `refund`.`id_checkout` AS `id_checkout`, `refund`.`id_users` AS `id_users`, `refund`.`uuid_checkout` AS `uuid_checkout`, `users`.`nama_lengkap` AS `nama_lengkap`, `checkout`.`nama_penerima` AS `nama_penerima`, `users`.`no_hp` AS `no_hp`, `checkout`.`no_penerima` AS `no_penerima`, `checkout`.`alamat_penerima` AS `alamat_penerima`, `checkout`.`provinsi` AS `provinsi`, `checkout`.`kota` AS `kota`, `checkout`.`ekspedisi` AS `ekspedisi`, `checkout`.`ongkir` AS `ongkir`, `users`.`email` AS `email`, `checkout`.`bukti_pembayaran` AS `bukti_pembayaran`, `refund`.`deskripsi` AS `deskripsi`, `refund`.`gambar_refund` AS `gambar_refund`, `data_barang`.`nama_barang` AS `nama_barang`, `data_barang`.`harga_barang` AS `harga_barang`, `checkout`.`banyak` AS `banyak`, `refund`.`jumlah_pengembalian` AS `jumlah_pengembalian`, `data_barang`.`bahan` AS `bahan`, `data_barang`.`model` AS `model`, `data_barang`.`ukuran` AS `ukuran`, `data_barang`.`gambar` AS `gambar_produk`, `refund`.`tgl_refund` AS `tgl_refund`, `refund`.`tgl_approve_refund` AS `tgl_approve_refund` FROM (((`refund` join `users` on(`refund`.`id_users` = `users`.`id_users`)) join `data_barang` on(`refund`.`id_barang` = `data_barang`.`id_barang`)) join `checkout` on(`refund`.`id_checkout` = `checkout`.`id_checkout`)) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `vw_report`
--
DROP TABLE IF EXISTS `vw_report`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_report`  AS SELECT `pengeluaran`.`id_pengeluaran` AS `id_pengeluaran`, `pengeluaran`.`kode_barang` AS `kode_barang`, `pengeluaran`.`nama_barang` AS `nama_barang`, `pengeluaran`.`harga_barang` AS `harga_barang`, sum(`pengeluaran`.`stok_pengeluaran`) AS `stok_pengeluaran`, sum(`pengeluaran`.`total_pendapatan`) AS `total_pendapatan`, `pengeluaran`.`tgl_input` AS `tgl_input` FROM `pengeluaran` GROUP BY month(`pengeluaran`.`tgl_input`), `pengeluaran`.`nama_barang` ORDER BY `pengeluaran`.`tgl_input` ASC ;

-- --------------------------------------------------------

--
-- Struktur untuk view `vw_report_checkout`
--
DROP TABLE IF EXISTS `vw_report_checkout`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_report_checkout`  AS SELECT `checkout`.`id_checkout` AS `id_checkout`, `checkout`.`uuid_checkout` AS `uuid_checkout`, `checkout`.`id_user` AS `id_user`, `checkout`.`produk` AS `produk`, `checkout`.`harga` AS `harga`, `checkout`.`banyak` AS `banyak`, `checkout`.`ukuran` AS `ukuran`, `checkout`.`model` AS `model`, `checkout`.`bahan` AS `bahan`, `checkout`.`image` AS `image`, `checkout`.`nama_penerima` AS `nama_penerima`, `checkout`.`alamat_penerima` AS `alamat_penerima`, `checkout`.`no_penerima` AS `no_penerima`, `checkout`.`status_pembayaran` AS `status_pembayaran`, `checkout`.`due_datetime` AS `due_datetime`, `checkout`.`datetime_pay` AS `datetime_pay`, `users`.`id_users` AS `id_users`, `users`.`id_role` AS `id_role`, `users`.`nama_lengkap` AS `nama_lengkap`, `users`.`no_hp` AS `no_hp`, `users`.`email` AS `email`, `users`.`password` AS `password`, `checkout`.`bukti_pembayaran` AS `bukti_pembayaran`, `checkout`.`provinsi` AS `provinsi`, `checkout`.`kota` AS `kota`, `checkout`.`ekspedisi` AS `ekspedisi`, `checkout`.`ongkir` AS `ongkir` FROM (`checkout` join `users` on(`checkout`.`id_user` = `users`.`id_users`)) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `vw_report_checkout_per_month`
--
DROP TABLE IF EXISTS `vw_report_checkout_per_month`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_report_checkout_per_month`  AS SELECT `checkout`.`id_checkout` AS `id_checkout`, `checkout`.`uuid_checkout` AS `uuid_checkout`, `checkout`.`id_user` AS `id_user`, `checkout`.`produk` AS `produk`, sum(`checkout`.`harga` * `checkout`.`banyak`) AS `subtotal`, `checkout`.`harga` AS `harga_satuan`, sum(`checkout`.`banyak`) AS `banyak`, `checkout`.`ukuran` AS `ukuran`, `checkout`.`model` AS `model`, `checkout`.`bahan` AS `bahan`, `checkout`.`image` AS `image`, `checkout`.`nama_penerima` AS `nama_penerima`, `checkout`.`alamat_penerima` AS `alamat_penerima`, `checkout`.`no_penerima` AS `no_penerima`, `checkout`.`status_pembayaran` AS `status_pembayaran`, `checkout`.`due_datetime` AS `due_datetime`, `checkout`.`datetime_pay` AS `datetime_pay` FROM `checkout` WHERE `checkout`.`status_pembayaran` = 'Approve' OR `checkout`.`status_pembayaran` = 'Barang dikemas' OR `checkout`.`status_pembayaran` = 'Barang dikirim' OR `checkout`.`status_pembayaran` = 'Barang diterima' GROUP BY month(`checkout`.`datetime_pay`), `checkout`.`produk`, `checkout`.`id_user` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `vw_report_checkout_per_year`
--
DROP TABLE IF EXISTS `vw_report_checkout_per_year`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_report_checkout_per_year`  AS SELECT `checkout`.`id_checkout` AS `id_checkout`, `checkout`.`uuid_checkout` AS `uuid_checkout`, `checkout`.`id_user` AS `id_user`, `checkout`.`produk` AS `produk`, sum(`checkout`.`harga` * `checkout`.`banyak`) AS `harga`, `checkout`.`harga` AS `harga_satuan`, sum(`checkout`.`banyak`) AS `banyak`, `checkout`.`ukuran` AS `ukuran`, `checkout`.`model` AS `model`, `checkout`.`bahan` AS `bahan`, `checkout`.`image` AS `image`, `checkout`.`nama_penerima` AS `nama_penerima`, `checkout`.`alamat_penerima` AS `alamat_penerima`, `checkout`.`no_penerima` AS `no_penerima`, `checkout`.`status_pembayaran` AS `status_pembayaran`, `checkout`.`due_datetime` AS `due_datetime`, `checkout`.`datetime_pay` AS `datetime_pay` FROM `checkout` WHERE `checkout`.`status_pembayaran` = 'Sudah Melakukan Pembayaran' GROUP BY year(`checkout`.`datetime_pay`), `checkout`.`produk`, `checkout`.`id_user` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `vw_report_per_year`
--
DROP TABLE IF EXISTS `vw_report_per_year`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_report_per_year`  AS SELECT `pengeluaran`.`id_pengeluaran` AS `id_pengeluaran`, `pengeluaran`.`kode_barang` AS `kode_barang`, `pengeluaran`.`nama_barang` AS `nama_barang`, sum(`pengeluaran`.`harga_barang`) AS `harga_barang`, sum(`pengeluaran`.`total_pendapatan`) AS `total_pendapatan`, `pengeluaran`.`stok_pengeluaran` AS `stok_pengeluaran`, `pengeluaran`.`tgl_input` AS `tgl_input` FROM `pengeluaran` GROUP BY year(`pengeluaran`.`tgl_input`) ORDER BY `pengeluaran`.`tgl_input` ASC ;

-- --------------------------------------------------------

--
-- Struktur untuk view `vw_report_riwayat`
--
DROP TABLE IF EXISTS `vw_report_riwayat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_report_riwayat`  AS SELECT `checkout`.`id_checkout` AS `id_checkout`, `checkout`.`uuid_checkout` AS `uuid_checkout`, `checkout`.`id_user` AS `id_user`, `checkout`.`produk` AS `produk`, `checkout`.`harga` AS `harga`, `checkout`.`banyak` AS `banyak`, `checkout`.`ukuran` AS `ukuran`, `checkout`.`model` AS `model`, `checkout`.`bahan` AS `bahan`, `checkout`.`image` AS `image`, `checkout`.`nama_penerima` AS `nama_penerima`, `checkout`.`alamat_penerima` AS `alamat_penerima`, `checkout`.`no_penerima` AS `no_penerima`, `checkout`.`status_pembayaran` AS `status_pembayaran`, `checkout`.`due_datetime` AS `due_datetime`, `checkout`.`datetime_pay` AS `datetime_pay`, `users`.`id_users` AS `id_users`, `users`.`id_role` AS `id_role`, `users`.`nama_lengkap` AS `nama_lengkap`, `users`.`no_hp` AS `no_hp`, `users`.`email` AS `email`, `users`.`password` AS `password`, `checkout`.`bukti_pembayaran` AS `bukti_pembayaran`, `checkout`.`provinsi` AS `provinsi`, `checkout`.`kota` AS `kota`, `checkout`.`ekspedisi` AS `ekspedisi`, `checkout`.`ongkir` AS `ongkir`, sum(`checkout`.`banyak`) AS `jumlah_beli` FROM (`checkout` join `users` on(`checkout`.`id_user` = `users`.`id_users`)) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `vw_users`
--
DROP TABLE IF EXISTS `vw_users`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_users`  AS SELECT `users`.`id_users` AS `id_user`, `users`.`id_role` AS `id_role`, `role`.`role` AS `role`, `users`.`nama_lengkap` AS `nama_lengkap`, `users`.`no_hp` AS `no_hp`, `users`.`email` AS `email`, `users`.`password` AS `password`, `users`.`alamat` AS `alamat` FROM (`users` join `role` on(`users`.`id_role` = `role`.`id_role`)) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id_chat`);

--
-- Indeks untuk tabel `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id_checkout`);

--
-- Indeks untuk tabel `data_barang`
--
ALTER TABLE `data_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id_pengeluaran`);

--
-- Indeks untuk tabel `refund`
--
ALTER TABLE `refund`
  ADD PRIMARY KEY (`id_refund`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `chat`
--
ALTER TABLE `chat`
  MODIFY `id_chat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=265;

--
-- AUTO_INCREMENT untuk tabel `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id_checkout` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT untuk tabel `data_barang`
--
ALTER TABLE `data_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id_pengeluaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `refund`
--
ALTER TABLE `refund`
  MODIFY `id_refund` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92450;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
