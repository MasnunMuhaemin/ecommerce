-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20221125.2e001c186a
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Agu 2023 pada 05.01
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
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `chat`
--

INSERT INTO `chat` (`id_chat`, `id_receive`, `id_sender`, `nama`, `message`, `image`, `time`) VALUES
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
(177, 1, 2184, 'aaa', 'hehe', '', '2023-04-15 17:54:06'),
(178, 1, 86258, 'Bayu Saptaji', 'hi kak', '', '2023-05-19 05:02:41'),
(179, 86258, 1, 'Administrator', 'iyaa', '', '2023-05-19 05:03:18'),
(180, 86258, 1, 'Administrator', 'ada yang bisa saya bantu', '', '2023-05-19 05:03:34'),
(181, 80223, 1, 'Administrator', 'komentarnya silahkan', '', '2023-07-03 07:15:26'),
(182, 1, 80223, 'Rio Gofani', 'asjuw', '', '2023-07-06 13:48:01');

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

INSERT INTO `checkout` (`id_checkout`, `uuid_checkout`, `id_user`, `id_barang`, `produk`, `harga`, `banyak`, `ukuran`, `model`, `bahan`, `image`, `nama_penerima`, `alamat_penerima`, `no_penerima`, `status_pembayaran`, `bukti_pembayaran`, `provinsi`, `kota`, `ekspedisi`, `ongkir`, `due_datetime`, `datetime_pay`) VALUES
(56, 'uW9toNHBys', 86258, 13, 'Gaun Hijau', '150000', '3', 'XXL', 'Gamis', 'Kain', 'adele-berpisah-dari-suami-setelah-3-tahun-menikah-C12pQddnAt.jpg', 'Bayu Saptaji', 'dasdas', '1231231', 'Barang diterima', 'tiyara.PNG', '', '', '', '', '2023-05-20 00:00:00', '2023-05-18 02:53:35'),
(57, 'bXfXpXphk1', 86258, 13, 'Gaun Hijau', '150000', '1', 'XXL', 'Gamis', 'Kain', 'adele-berpisah-dari-suami-setelah-3-tahun-menikah-C12pQddnAt.jpg', 'Bayu Saptaji', 'Desa Maleber', '12345674381', 'Refund Approve', 'keyboard3.jpg', '', '', '', '', '2023-05-20 00:00:00', '2023-07-14 04:40:55'),
(71, 'MTgC2rQKp3', 86258, 10, 'asdas', '10000', '1', 'M', 'Panjang', 'Katun', 'IMG-20220902-WA0064-removebg-preview4.png', 'Bayu Saptaji', 'wasitt', '1233444322', 'Refund Approve', 'Latihan_1_11.png', 'Jawa Barat', 'Bandung', 'JNE', '14000', '2023-05-22 00:00:00', '2023-05-31 21:31:31'),
(72, 'UTXc7Ds7gk', 80223, 13, 'Gaun Hijau', '150000', '1', 'XXL', 'Gamis', 'Kain', 'adele-berpisah-dari-suami-setelah-3-tahun-menikah-C12pQddnAt.jpg', 'Rio Gofani', 'Kutaraja', '2345612', 'Barang diterima', 'LOGO1.PNG', 'Jawa Barat', 'Kuningan', 'JNE', '7000', '2023-05-23 00:00:00', '2023-06-04 10:42:52'),
(73, 'JLzxYzC3ld', 80223, 10, 'asdas', '10000', '5', '', '', '', 'IMG-20220902-WA0064-removebg-preview4.png', 'Rio Gofani', 'jongang', '12345678', 'Barang diterima', 'tugas_1.png', 'Jawa Barat', 'Cirebon', 'JNE', '8000', '2023-05-24 00:00:00', '2023-06-01 16:35:21'),
(74, 'fkbb8rBCHf', 80223, 13, 'Gaun Hijau', '150000', '1', 'XXL', 'Gamis', 'Kain', 'adele-berpisah-dari-suami-setelah-3-tahun-menikah-C12pQddnAt.jpg', 'Rio Gofani', 'Puncak', '12345678', 'Barang diterima', 'latihan_1_2.png', 'Jawa Barat', 'Bogor', 'JNE', '14000', '2023-05-24 00:00:00', '2023-05-22 01:39:16'),
(75, 'W9XLCwPxLF', 86258, 11, 'Mie Curly', '6000', '1', 'L', 'Panjang', 'Levis', 'Cuplikan_layar_20221226_222207.png', 'Bayu Saptaji', 'Cibunut', '12345678', 'Belum Melakukan Pembayaran', '', 'Jawa Barat', 'Cirebon', 'JNE', '8000', '2023-06-01 00:00:00', '0000-00-00 00:00:00'),
(76, '27g7XkVRgT', 86258, 13, 'Gaun Hijau', '150000', '1', 'XXL', 'Gamis', 'Kain', 'adele-berpisah-dari-suami-setelah-3-tahun-menikah-C12pQddnAt.jpg', 'Bayu Saptaji', 'Desa Kertasari kecamatan bojong ambon kabupaten Ambon Kota', '0818245878', 'Belum Melakukan Pembayaran', '', 'Maluku', 'Ambon', 'JNE', '127000', '2023-06-01 00:00:00', '0000-00-00 00:00:00'),
(77, '27g7XkVRgT', 86258, 10, 'asdas', '10000', '1', 'M', 'Panjang', 'Katun', 'IMG-20220902-WA0064-removebg-preview4.png', 'Bayu Saptaji', 'Desa Kertasari kecamatan bojong ambon kabupaten Ambon Kota', '0818245878', 'Belum Melakukan Pembayaran', '', 'Maluku', 'Ambon', 'JNE', '127000', '2023-06-01 00:00:00', '0000-00-00 00:00:00'),
(78, '1ore6A0Xb3', 86258, 13, 'Gaun Hijau', '150000', '1', 'XXL', 'Gamis', 'Kain', 'adele-berpisah-dari-suami-setelah-3-tahun-menikah-C12pQddnAt.jpg', 'Bayu Saptaji', 'Desa wonogiri kecamatan Yogyakarta Kabupaten Gorontalo', '081824587800', 'Belum Melakukan Pembayaran', '', 'Gorontalo', 'Gorontalo', 'POS', '75000', '2023-06-01 00:00:00', '0000-00-00 00:00:00'),
(79, 'CQqJcFjDiS', 80223, 11, 'Mie Curly', '6000', '3', 'L', 'Panjang', 'Levis', 'Cuplikan_layar_20221226_222207.png', 'Rio Gofani', 'Kelurahan Kebon Jeruk', '01228832994', 'Refund', 'latihan21.png', 'DKI Jakarta', 'Jakarta Barat', 'JNE', '14000', '2023-06-02 00:00:00', '2023-05-31 21:27:03'),
(80, 'AakouL08tN', 80223, 12, 'Mie Curlie', '5000', '5', 'L', 'Separo', 'Levis', 'resize.jpg', 'Rio Gofani', 'Keraton jln. pantura', '01228832994', 'Barang diterima', 'latihan_1_21.png', 'Jawa Barat', 'Cirebon', 'JNE', '8000', '2023-06-05 00:00:00', '2023-06-03 03:03:52'),
(81, '8axVFeyOQV', 80223, 12, 'Mie Curlie', '5000', '1', 'L', 'Separo', 'Levis', 'resize.jpg', 'Rio Gofani', 'Kebon jeruk, kedoya', '01228832994', 'Barang diterima', 'tugas_11.png', 'DKI Jakarta', 'Jakarta Barat', 'JNE', '19000', '2023-06-05 00:00:00', '2023-06-03 03:16:11'),
(82, '8axVFeyOQV', 80223, 11, 'Mie Curly', '6000', '1', 'L', 'Panjang', 'Levis', 'Cuplikan_layar_20221226_222207.png', 'Rio Gofani', 'Kebon jeruk, kedoya', '01228832994', 'Barang diterima', 'tugas_11.png', 'DKI Jakarta', 'Jakarta Barat', 'JNE', '19000', '2023-06-05 00:00:00', '2023-06-03 03:16:11'),
(83, '8axVFeyOQV', 80223, 13, 'Gaun Hijau', '150000', '1', 'XXL', 'Gamis', 'Kain', 'adele-berpisah-dari-suami-setelah-3-tahun-menikah-C12pQddnAt.jpg', 'Rio Gofani', 'Kebon jeruk, kedoya', '01228832994', 'Barang diterima', 'tugas_11.png', 'DKI Jakarta', 'Jakarta Barat', 'JNE', '19000', '2023-06-05 00:00:00', '2023-06-03 03:16:11'),
(84, 'UM1keNtR6E', 80223, 13, 'Gaun Hijau', '150000', '1', 'XXL', 'Gamis', 'Kain', 'adele-berpisah-dari-suami-setelah-3-tahun-menikah-C12pQddnAt.jpg', 'Rio Gofani', 'Keraton jaya', '01228832994', 'Return', 'FRONT_OFFICE.PNG', 'Jawa Barat', 'Cirebon', 'JNE', '8000', '2023-06-06 00:00:00', '2023-07-13 23:40:22'),
(85, 'I42tmzAMLP', 80223, 11, 'Mie Curly', '6000', '5', '', '', '', 'Cuplikan_layar_20221226_222207.png', 'Rio Gofani', 'Jero Keraton', '01228832994', 'Refund Approve', 'acep-luragung-landeuh32.jpg', 'Jawa Barat', 'Cirebon', 'JNE', '8000', '2023-06-14 00:00:00', '2023-07-16 21:08:54'),
(86, 'ImvBmDj0fd', 86258, 12, 'Mie Curlie', '5000', '1', '', '', '', 'resize.jpg', 'Bayu Saptaji', 'Desa tambakbaya kecamatan garawangi kabupaten kuningan ', '08324587800', 'Belum Melakukan Pembayaran', '', 'Bangka Belitung', 'Bangka Barat', 'POS', '41500', '2023-06-24 00:00:00', '0000-00-00 00:00:00'),
(87, 'bmH6U8UIb1', 86258, 11, 'Mie Curly', '6000', '10', '', '', '', 'Cuplikan_layar_20221226_222207.png', 'Bayu Saptaji', 'Desa tambakbaya kecamatan garawangi kabupaten kuningan 45571', '083824587800', 'Belum Melakukan Pembayaran', '', 'Bangka Belitung', 'Bangka Barat', 'JNE', '44000', '2023-06-24 00:00:00', '0000-00-00 00:00:00'),
(88, 'UDVx8Zsj7U', 80223, 11, 'Mie Curly', '6000', '1', 'L', 'Panjang', 'Levis', 'Cuplikan_layar_20221226_222207.png', 'Rio Gofani', 'Kertaungaran', '01228832994', 'Refund Approve', 'ls_-l3.png', 'Jawa Barat', 'Cirebon', 'JNE', '8000', '2023-06-27 00:00:00', '2023-07-14 04:44:58'),
(89, 'KTjKVmnna3', 80223, 13, 'Gaun Hijau', '150000', '2', 'XXL', 'Gamis', 'Kain', 'adele-berpisah-dari-suami-setelah-3-tahun-menikah-C12pQddnAt.jpg', 'Rio Gofani', 'Tomang Toll', '01228832994', 'Refund Approve', 'latihan_1_24.png', 'DKI Jakarta', 'Jakarta Barat', 'JNE', '14000', '2023-06-27 00:00:00', '2023-07-16 21:08:44'),
(90, 'xDGK7KxbtY', 80223, 11, 'Atasan Wanita Beige', '90000', '3', '', '', '', 'WhatsApp_Image_2023-07-05_at_07_27_03_(1).jpeg', 'Rio Gofani', 'Kabupaten cirebon', '01228832994', 'Refund Approve', 'latihan_1_22.png', 'Jawa Barat', 'Cirebon', 'JNE', '8000', '2023-07-08 00:00:00', '2023-07-14 04:49:57'),
(91, 'um1wu9H0Df', 80223, 12, 'Atasan wanita frost', '90000', '20', '', '', '', 'WhatsApp_Image_2023-07-05_at_07_26_57_(1).jpeg', 'Rio Gofani', 'Dariajsa', '01228832994', 'Barang diterima', 'latihan_1_23.png', 'Jawa Barat', 'Cimahi', 'POS', '12500', '2023-07-08 00:00:00', '2023-07-06 13:46:56'),
(92, 'xOYDu7WLns', 80223, 11, 'Atasan Wanita Beige', '90000', '40', 'L', 'Panjang', 'Levis', 'WhatsApp_Image_2023-07-05_at_07_27_03_(1).jpeg', 'Rio Gofani', 'jhkhkjhkjhsdakhdks', '83131812837', 'Barang diterima', 'ls_-l1.png', 'DI Yogyakarta', 'Sleman', 'JNE', '21000', '2023-07-12 00:00:00', '2023-07-10 22:36:41'),
(93, 'vSGqRhcnRB', 80223, 19, 'Baju Gamis Rose Crepe', '120000', '50', 'L', 'Swarovski', 'Katun', 'WhatsApp_Image_2023-07-05_at_07_26_50.jpeg', 'Rio Gofani', 'jhsdhak', '0838123213', 'Refund Approve', 'ls_-l2.png', 'Bengkulu', 'Bengkulu Tengah', 'POS', '70000', '2023-07-12 00:00:00', '2023-07-14 04:45:05'),
(94, 'AgrlY53F4u', 80223, 11, 'Mie Curly', '6000', '15', 'L', 'Panjang', 'Levis', 'Cuplikan_layar_20221226_222207.png', 'Rio Gofani', 'ajshdjkahs', '123456789', 'Refund Approve', 'tugas_12.png', 'Banten', 'Serang', 'JNE', '23000', '2023-07-15 00:00:00', '2023-07-14 04:49:18'),
(95, 'Z7dgxWP9xW', 80223, 19, 'Baju Gamis Rose Crepe', '120000', '1', 'L', 'Swarovski', 'Katun', 'WhatsApp_Image_2023-07-05_at_07_26_50.jpeg', 'Rio Gofani', 'jhjkashdkjah', '12345678', 'Return Approve', 'latihan_1_25.png', 'DKI Jakarta', 'Jakarta Barat', 'JNE', '14000', '2023-07-15 00:00:00', '2023-07-14 04:49:11'),
(96, 'g8ClZBgRJU', 80223, 12, 'Atasan wanita frost', '90000', '5', '', '', '', 'WhatsApp_Image_2023-07-05_at_07_26_57_(1).jpeg', 'Rio Gofani', 'Kecamatan keraton', '01228832994', 'Barang diterima', 'WhatsApp_Image_2023-07-05_at_07_26_55.jpeg', 'Jawa Barat', 'Cirebon', 'POS', '9000', '2023-07-18 00:00:00', '2023-07-23 22:56:57'),
(97, 'NB4KGkRUHM', 88820, 12, 'Atasan wanita frost', '90000', '2', '', '', '', 'WhatsApp_Image_2023-07-05_at_07_26_57_(1).jpeg', 'Irfan Maulana', 'Dusun Puhun Buyut Balater', '01228832994', 'Barang diterima', '20221215_114119.jpg', 'Jawa Barat', 'Kuningan', 'POS', '7000', '2023-07-18 00:00:00', '2023-07-17 12:19:38'),
(98, 'Oj83GlrGst', 88820, 12, 'Atasan wanita frost', '90000', '1', '', '', '', 'WhatsApp_Image_2023-07-05_at_07_26_57_(1).jpeg', 'Irfan Maulana', 'asdas', '12345678', 'Return Approve', '6011.jpg', 'Bali', 'Badung', 'TIKI', '24000', '2023-07-19 00:00:00', '2023-07-25 06:17:52'),
(99, 'WD4rHFK1Ly', 88820, 12, 'Atasan wanita frost', '90000', '1', '', '', '', 'WhatsApp_Image_2023-07-05_at_07_26_57_(1).jpeg', 'Irfan Maulana', 'asdsad', '12345678', 'Belum Melakukan Pembayaran', '', 'Bengkulu', 'Bengkulu Selatan', 'JNE', '48000', '2023-07-19 00:00:00', '0000-00-00 00:00:00'),
(100, 'vkWWspjaUZ', 80223, 19, 'Baju Gamis Rose Crepe', '120000', '1', 'L', 'Swarovski', 'Katun', 'WhatsApp_Image_2023-07-05_at_07_26_50.jpeg', 'Rio Gofani', 'ashdjashdkh', '12345678', 'Return Approve', 'WhatsApp_Image_2023-07-05_at_07_26_551.jpeg', 'Jawa Barat', 'Bandung Barat', 'TIKI', '20000', '2023-07-25 00:00:00', '2023-07-25 06:24:13'),
(101, 'OjaJebO1uQ', 80223, 19, 'Baju Gamis Rose Crepe', '120000', '1', 'L', 'Swarovski', 'Katun', 'WhatsApp_Image_2023-07-05_at_07_26_50.jpeg', 'Rio Gofani', 'dadsda', '12345678', 'Belum Melakukan Pembayaran', '', 'Jawa Barat', 'Garut', 'TIKI', '13000', '2023-07-25 00:00:00', '0000-00-00 00:00:00'),
(102, 'wiZIqEIDLd', 80223, 13, 'Atasan crincle print biru', '90000', '2', '', '', '', 'WhatsApp_Image_2023-07-05_at_07_27_03.jpeg', 'Rio Gofani', 'Kutaraja', '081824587800', 'Return', '60111.jpg', 'Jawa Barat', 'Cirebon', 'POS', '11000', '2023-07-27 00:00:00', '2023-07-25 13:37:19'),
(103, 'T5VWRdl16r', 80223, 19, 'Baju Gamis Rose Crepe', '120000', '1', '', '', '', 'WhatsApp_Image_2023-07-05_at_07_26_50.jpeg', 'Rio Gofani', 'Kejayaan', '081824587800', 'Sudah Melakukan Pembayaran', 'WhatsApp_Image_2023-07-05_at_07_26_55_(2).jpeg', 'Jawa Barat', 'Cirebon', 'JNE', '8000', '2023-07-27 00:00:00', '2023-07-25 14:01:29'),
(104, 'MK4tU6pg1b', 29634, 14, 'Baju Gamis Rompi Lepas', '120000', '1', 'XL', 'Rompi Lepas', 'Katun', 'WhatsApp_Image_2023-07-05_at_07_27_05_(1).jpeg', 'ikbal', 'Desa mandala kecamatan maleber', '081824587800', 'Belum Melakukan Pembayaran', '', 'DI Yogyakarta', 'Kulon Progo', 'JNE', '21000', '2023-08-06 00:00:00', '0000-00-00 00:00:00'),
(105, 'YjnpbeyfL4', 29634, 14, 'Baju Gamis Rompi Lepas', '120000', '1', 'XL', 'Rompi Lepas', 'Katun', 'WhatsApp_Image_2023-07-05_at_07_27_05_(1).jpeg', 'ikbal', 'Desa mandala kecamatan maleber', '08921273123', 'Belum Melakukan Pembayaran', '', 'Gorontalo', 'Gorontalo', 'JNE', '112000', '2023-08-06 00:00:00', '0000-00-00 00:00:00'),
(106, 'V90zOjlyik', 29634, 14, 'Baju Gamis Rompi Lepas', '120000', '1', 'XL', 'Rompi Lepas', 'Katun', 'WhatsApp_Image_2023-07-05_at_07_27_05_(1).jpeg', 'ikbal', 'Desa Langseb, Kec. Lebakwangi', '081824587800', 'Belum Melakukan Pembayaran', '', 'Jambi', 'Kerinci', 'JNE', '37000', '2023-08-06 00:00:00', '0000-00-00 00:00:00'),
(107, 'xcVDYfgomV', 29634, 14, 'Baju Gamis Rompi Lepas', '120000', '1', 'XL', 'Rompi Lepas', 'Katun', 'WhatsApp_Image_2023-07-05_at_07_27_05_(1).jpeg', 'WhatsApp Image 2023-07-05 at 07.26.55.jpeg', 'Desa mandala kecamatan maleber', '081824587800', 'Belum Melakukan Pembayaran', '1689207731WhatsApp Image 2023-07-05 at 07.26.55.jpeg', 'Gorontalo', 'Gorontalo', 'POS', '260000', '2023-08-08 00:00:00', '0000-00-00 00:00:00'),
(108, 'PDWW8OSI8F', 29634, 14, 'Baju Gamis Rompi Lepas', '120000', '1', 'XL', 'Rompi Lepas', 'Katun', 'WhatsApp_Image_2023-07-05_at_07_27_05_(1).jpeg', 'WhatsApp Image 2023-07-05 at 07.26.55.jpeg', 'Desa Langseb, Kec. Lebakwangi', '081824587800', 'Barang diterima', '1516180745WhatsApp Image 2023-07-05 at 07.26.55.jpeg', 'DI Yogyakarta', 'Kulon Progo', 'JNE', '21000', '2023-08-08 00:00:00', '2023-08-06 08:04:37'),
(109, 'FFe0YHZhEJ', 29634, 18, 'Baju Gamis Rompi Lepas', '120000', '1', 'L', 'Rompi Lepas', 'Katun', 'WhatsApp_Image_2023-07-05_at_07_27_06_(1).jpeg', 'WhatsApp Image 2023-07-05 at 07.26.55 (2).jpeg', 'Desa mandala kecamatan maleber', '081824587800', 'Barang dikirim', '2000381636WhatsApp Image 2023-07-05 at 07.26.55 (2).jpeg', 'Kalimantan Tengah', 'Gunung Mas', 'JNE', '75000', '2023-08-08 00:00:00', '2023-08-06 09:01:31');

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
(11, 'Atsn', 'Atasan Wanita Beige', '90000', 'Levis', 'Panjang', 'L', '-15', '2022-12-29', 'Baju atasan wanita, cocok di pake buat santai', 'WhatsApp_Image_2023-07-05_at_07_27_03_(1).jpeg'),
(12, 'Atsn-02', 'Atasan wanita frost', '90000', 'Levis', 'Separo', 'L', '-3', '2023-01-11', 'Baju atasan ini sangat lembut, cocok dipakai berpergian kemanapun', 'WhatsApp_Image_2023-07-05_at_07_26_57_(1).jpeg'),
(13, 'Atsn-03', 'Atasan crincle print biru', '90000', 'Kain', 'Gamis', 'XXL', '31', '2023-04-15', 'Baju atasan wanita, berbahan lembut  dan tidak gerah', 'WhatsApp_Image_2023-07-05_at_07_27_03.jpeg'),
(14, 'gms-01', 'Baju Gamis Rompi Lepas', '120000', 'Katun', 'Rompi Lepas', 'XL', '79', '2023-07-05', 'Baju Gamis Rompi Lepas nyaman dipakai', 'WhatsApp_Image_2023-07-05_at_07_27_05_(1).jpeg'),
(15, 'Atsn-ss', 'Atasan Soft Silk', '90000', 'Katun', 'Soft Silk', 'XL', '10', '2023-07-06', 'atasan soft silk, nyaman di pakai dan lembut', 'WhatsApp_Image_2023-07-05_at_07_26_57.jpeg'),
(16, 'atsn-pl', 'Atasan Polo Linen', '90000', 'Katun', 'Polo Linen', 'L', '15', '2023-07-06', 'Atasan polo linen nyaman dipakai dan bahan adem', 'WhatsApp_Image_2023-07-05_at_07_26_56.jpeg'),
(17, 'stln-fb', 'Baju setelan free belt', '135000', 'Katun', 'Free Belt', 'L', '10', '2023-07-06', 'Baju setelan wanita nyaman diapakai, dan bahan adem.', 'WhatsApp_Image_2023-07-05_at_07_27_02_(2).jpeg'),
(18, 'gms-rmp', 'Baju Gamis Rompi Lepas', '120000', 'Katun', 'Rompi Lepas', 'L', '9', '2023-07-06', 'Gamis model rompi lepas, bahan adem,nyaman dipakai', 'WhatsApp_Image_2023-07-05_at_07_27_06_(1).jpeg'),
(19, 'gms-02', 'Baju Gamis Rose Crepe', '120000', 'Katun', 'Swarovski', 'L', '10', '2023-07-06', 'Baju gamis, bahan adem, nyaman dipakai', 'WhatsApp_Image_2023-07-05_at_07_26_50.jpeg');

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

--
-- Dumping data untuk tabel `pengeluaran`
--

INSERT INTO `pengeluaran` (`id_pengeluaran`, `kode_barang`, `nama_barang`, `harga_barang`, `stok_pengeluaran`, `total_pendapatan`, `tgl_input`, `status`) VALUES
(1, 'KD004', 'Mie Jerit', '15000', '12', '', '2022-12-15', 1),
(2, 'KD004', 'Mie Jerit', '15000', '2', '30000', '2022-12-15', 1),
(7, 'KD004', 'Mie Jerit', '15000', '2', '30000', '2022-11-06', 1),
(8, 'KD010', 'Mie Curlie eeee', '6000', '5', '30000', '2022-12-16', 1),
(9, 'KD002', 'Mie Curly', '5000', '2', '10000', '2022-12-29', 1),
(10, 'WWE', 'Gaun Hijau', '150000', '12', '1800000', '2023-05-17', 1);

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
(1, 13, 57, 'bXfXpXphk1', 86258, 'barangtidakditerima', 'Return', '150000', '', '', '1', '', '0000-00-00', '0000-00-00'),
(2, 11, 58, 'bXfXpXphk1', 86258, 'barangtidakditerima', 'Return', '24000', '', '', '1', '', '0000-00-00', '0000-00-00'),
(3, 12, 59, 'bXfXpXphk1', 86258, 'barangtidakditerima', 'Return', '5000', '', '', '1', '', '0000-00-00', '0000-00-00'),
(4, 12, 65, 'gg6TplQGFd', 86258, 'barangtidakditerima', '', '10000', 'Ini barang ke dua tidak sesuai nih kak', 'keyboard1.jpg', '1', '', '0000-00-00', '0000-00-00'),
(5, 11, 66, 'gg6TplQGFd', 86258, 'barangtidakditerima', '', '6000', 'Ini barang ke dua tidak sesuai nih kak', 'keyboard1.jpg', '1', '', '0000-00-00', '0000-00-00'),
(6, 12, 65, 'gg6TplQGFd', 86258, 'barangtidakditerima', '', '10000', 'warna tidka sesuai', 'LOGO.PNG', '1', '', '0000-00-00', '0000-00-00'),
(7, 11, 66, 'gg6TplQGFd', 86258, 'barangtidakditerima', '', '6000', 'warna tidka sesuai', 'LOGO.PNG', '1', '', '0000-00-00', '0000-00-00'),
(8, 11, 67, 'n0PHuY8a1q', 86258, 'barangtidakditerima', '', '6000', 'Baju tidak sesuai dengan pesanan nih sist', 'activity_diagram-keranjang.jpg', '1', '', '0000-00-00', '0000-00-00'),
(9, 12, 68, 'n0PHuY8a1q', 86258, 'barangtidakditerima', '', '5000', 'Baju tidak sesuai dengan pesanan nih sist', 'activity_diagram-keranjang.jpg', '1', '', '0000-00-00', '0000-00-00'),
(10, 10, 71, 'MTgC2rQKp3', 86258, 'barangtidakditerima', '', '10000', 'warna tidak sesuai', 'tugas_1.png', '1', '', '0000-00-00', '0000-00-00'),
(11, 11, 79, 'CQqJcFjDiS', 80223, 'barangtidakditerima', '', '18000', 'Kerusakan pada pakaian', 'tugas_11.png', '1', '', '0000-00-00', '0000-00-00'),
(12, 11, 85, 'I42tmzAMLP', 80223, 'barangtidakditerima', '', '30000', 'barang tidak sesuai', 'acep-luragung-landeuh3.jpg', '1', '', '0000-00-00', '0000-00-00'),
(13, 11, 90, 'xDGK7KxbtY', 80223, 'barangtidakditerima', '', '270000', 'Baju robek', 'Latihan_1_1.png', '1', '', '0000-00-00', '0000-00-00'),
(14, 11, 88, 'UDVx8Zsj7U', 80223, 'barangtidakditerima', '', '6000', 'jahdjasdh', 'latihan2.png', '1', '', '0000-00-00', '0000-00-00'),
(15, 13, 89, 'KTjKVmnna3', 80223, 'barangtidakditerima', 'Return', '300000', 'hjsadjhsa', 'tugas_12.png', '1', '', '0000-00-00', '0000-00-00'),
(16, 11, 94, 'AgrlY53F4u', 80223, 'barangtidakditerima', 'Return', '90000', 'hjdashjad', 'tugas_13.png', '1', '', '0000-00-00', '0000-00-00'),
(17, 13, 84, 'UM1keNtR6E', 80223, 'barangtidakditerima', 'Return', '150000', 'ahdjhsajkdh', 'Latihan_1_11.png', '1', '', '0000-00-00', '0000-00-00'),
(18, 19, 93, 'vSGqRhcnRB', 80223, 'barangtidakditerima', 'Return', '6000000', 'hjajshdhhsajdhasjdha', 'tugas_14.png', '1', '', '0000-00-00', '0000-00-00'),
(19, 19, 95, 'Z7dgxWP9xW', 80223, 'barangtidakditerima', 'Return', '120000', 'dasjhdjhja', 'latihan21.png', '1', '', '0000-00-00', '0000-00-00'),
(20, 19, 100, 'vkWWspjaUZ', 80223, 'barangtidakditerima', 'Return', '120000', 'adas', 'WhatsApp_Image_2023-07-05_at_07_26_55.jpeg', '1', '', '0000-00-00', '0000-00-00'),
(21, 12, 98, 'Oj83GlrGst', 88820, 'barangtidakditerima', 'Return', '90000', 'warna tidak sesuai', '509.jpg', '1', '', '0000-00-00', '0000-00-00'),
(22, 13, 102, 'wiZIqEIDLd', 80223, 'barangtidakditerima', 'Return', '180000', 'Barang rusak', 'WhatsApp_Image_2023-07-05_at_07_26_50.jpeg', '1', '', '0000-00-00', '0000-00-00');

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
(1, 2, 'Administrator', '6283824587801', 'admin@umkm.com', '$2y$10$lZqVgMuiI5UxZwaJVlBKV.Dfry1S/DqiGG/qkvn6Brm.MCazJseE.', ''),
(29634, 3, 'ikbal', '0832371928', 'ikbal@gmail.com', '$2y$10$ulxpidHbnKYCXsv.RFZn0u66OzMcq2WNLhLrK46dwlquiIGpPtpNu', 'Desa mandala kecamatan maleber'),
(58845, 3, 'huhu', '123', 'huhu@gmail.com', '$2y$10$JwQcOGiUpd2/cgz3k8ArseKTFzEiPAsriR81aXvo01BAwtr4suqs6', ''),
(80223, 3, 'Rio Gofani', '089660758944', 'rio20@gmail.com', '$2y$10$S825t.T4qNDmX1Ylzl6gkOlspx3VTlMXr741Pxq/RcjZGNrLRh.Yi', ''),
(82884, 3, 'Ikmal Fauzi', '089543331222', 'ikmal00@gmail.com', '$2y$10$EoxxvcgInj4HoKw4ZKxYYusJaT1we1AlvzFMBgahPfoAadoieRCk.', 'Desa Langseb, Kec. Lebakwangi'),
(86258, 3, 'Bayu Saptaji', '089466325', 'bayu@gmail.com', '$2y$10$QltydLlWpnTdBZnjOvSxfOyh6LW7yVa5jX9ypqZPyUR2CHGu4Clgy', ''),
(86259, 0, 'Pemiik', '081824587800', 'pemilik@gmail.com', '$2y$10$lZqVgMuiI5UxZwaJVlBKV.Dfry1S/DqiGG/qkvn6Brm.MCazJseE.', ''),
(88820, 3, 'Irfan Maulana', '089677774321', 'Irfan30@gmail.com', '$2y$10$ZX3iR84OtNFqH2qoTTC2U.lixOg8xXihbnIiHFXmAKAO5FhhNdrk.', '');

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
);

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
-- Struktur untuk view `vw_users`
--
DROP TABLE IF EXISTS `vw_users`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_users`  AS SELECT `users`.`id_users` AS `id_user`, `users`.`id_role` AS `id_role`, `role`.`role` AS `role`, `users`.`nama_lengkap` AS `nama_lengkap`, `users`.`no_hp` AS `no_hp`, `users`.`email` AS `email`, `users`.`password` AS `password` FROM (`users` join `role` on(`users`.`id_role` = `role`.`id_role`)) ;

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
  MODIFY `id_chat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;

--
-- AUTO_INCREMENT untuk tabel `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id_checkout` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT untuk tabel `data_barang`
--
ALTER TABLE `data_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id_pengeluaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `refund`
--
ALTER TABLE `refund`
  MODIFY `id_refund` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88821;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
