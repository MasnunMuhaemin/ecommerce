-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20221125.2e001c186a
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2024 at 04:10 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

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
-- Structure for view `vw_users`
--

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_users`  AS SELECT `users`.`id_users` AS `id_user`, `users`.`id_role` AS `id_role`, `role`.`role` AS `role`, `users`.`nama_lengkap` AS `nama_lengkap`, `users`.`no_hp` AS `no_hp`, `users`.`email` AS `email`, `users`.`password` AS `password`, `users`.`alamat` AS `alamat` FROM (`users` join `role` on(`users`.`id_role` = `role`.`id_role`)) ;

--
-- VIEW `vw_users`
-- Data: None
--

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
