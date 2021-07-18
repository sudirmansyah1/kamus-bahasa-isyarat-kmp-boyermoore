-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2021 at 04:42 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kamusbisy`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `activity` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id`, `date`, `photo`, `username`, `activity`) VALUES
(1, '26-10-2020 20:25:51', 'sudirmansyah.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new user (Sudirmansyah2)'),
(2, '26-10-2020 20:37:23', 'sudirmansyah.jpg', 'Sudirmansyah', 'Sudirmansyah has been deleted user (Sudirmansyah2:admin)'),
(3, '27-10-2020 16:59:46', 'sudirmansyah.jpg', 'Sudirmansyah', 'Sudirmansyah has been edit user Sudirmansyah (Sudirmansyah:sudirmansyah0612@gmail.com:superadmin)'),
(4, '27-10-2020 16:59:52', 'sudirmansyah.jpg', 'Sudirmansyah', 'Sudirmansyah has been edit user Sudirmansyah (Sudirmansyah:sudirmansyah0612@gmail.com:superadmin) with password changed'),
(5, '27-10-2020 17:00:36', 'sudirmansyah.jpg', 'Sudirmansyah', 'Sudirmansyah has been edit user Sudirmansyah (Sudirmansyah:sudirmansyah0612@gmail.com:superadmin) with photo changed'),
(6, '27-10-2020 17:00:52', 'sudirmansyah.jpg', 'Sudirmansyah', 'Sudirmansyah has been edit user Sudirmansyah (Sudirmansyah:sudirmansyah0612@gmail.com:superadmin) with photo and password changed'),
(7, '27-10-2020 17:31:02', 'sudirmansyah.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new user (Elon Musk:admin)'),
(8, '27-10-2020 17:35:21', 'Elon Musk_1603794662.jpg', 'Elon Musk', 'Elon Musk has been logged in as admin'),
(9, '27-10-2020 18:01:46', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been logged in as superadmin'),
(10, '27-10-2020 18:18:57', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been logged in as superadmin'),
(11, '27-10-2020 18:58:47', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Aku'),
(12, '27-10-2020 18:59:43', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been deleted vocabulary Aku'),
(13, '27-10-2020 19:00:08', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Aku'),
(14, '27-10-2020 19:00:15', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been deleted vocabulary Aku'),
(15, '27-10-2020 19:03:35', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Aku'),
(16, '27-10-2020 19:07:30', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been deleted vocabulary Aku'),
(17, '27-10-2020 19:34:02', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Aku'),
(22, '27-10-2020 19:55:29', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been edited vocabulary Aku to Aku test'),
(23, '27-10-2020 19:56:39', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been edited vocabulary Aku to Aku ty'),
(24, '27-10-2020 19:56:55', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been edited vocabulary Aku ty to Aku'),
(27, '27-10-2020 20:36:25', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new user (Mark Zuckerberg:moderator)'),
(28, '28-10-2020 08:07:34', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been logged in as superadmin'),
(29, '28-10-2020 08:56:06', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been deleted mailbox (Sudirmansyah:sudirmansyah0612@gmail.com:test)'),
(30, '28-10-2020 11:35:20', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been replied mailbox (sudirmansyah0612@gmail.com:ISL Re: Lorem ipsum)'),
(31, '28-10-2020 11:44:48', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been replied mailbox (sudirmansyah0612@gmail.com:ISL Re: Lorem ipsum)'),
(32, '28-10-2020 11:48:08', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been replied mailbox (sudirmansyah0612@gmail.com:ISL Re: Lorem ipsum)'),
(33, '28-10-2020 11:56:33', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been replied mailbox (sudirmansyah0612@gmail.com:ISL Re: Lorem ipsum)'),
(34, '28-10-2020 18:33:43', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been logged in as superadmin'),
(35, '28-10-2020 18:44:34', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new article Lorem Ipsum'),
(40, '29-10-2020 07:31:21', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been logged in as superadmin'),
(41, '29-10-2020 07:34:22', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been deleted mailbox (Sudirmansyah:sudirmansyah0612@gmail.com:Lorem ipsum)'),
(42, '29-10-2020 12:14:19', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new article Mengenal Bahasa Isyarat'),
(43, '29-10-2020 12:16:09', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been edited article Mengenal Bahasa Isyarat'),
(44, '29-10-2020 12:16:17', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been deleted article Lorem Ipsum'),
(45, '29-10-2020 12:17:32', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been edited article Mengenal Bahasa Isyarat'),
(46, '29-10-2020 13:53:57', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new article Aku test'),
(47, '29-10-2020 13:54:13', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been deleted article Mengenal Bahasa Isyarat'),
(48, '29-10-2020 13:54:15', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been deleted article Aku test'),
(49, '29-10-2020 13:54:28', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new article Aku test'),
(50, '29-10-2020 13:54:59', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been deleted article Aku test'),
(51, '29-10-2020 13:58:53', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new article Mengenal Bahasa Isyarat'),
(52, '29-10-2020 14:45:23', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been replied mailbox (sudirmansyah0612@gmail.com:Lorem ipsum)'),
(53, '03-11-2020 10:11:59', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been logged in as superadmin'),
(54, '03-11-2020 10:51:08', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been deleted vocabulary Aku'),
(55, '03-11-2020 11:01:15', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Ada'),
(56, '03-11-2020 11:01:33', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Ada'),
(57, '03-11-2020 11:02:42', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary ada'),
(58, '03-11-2020 11:03:07', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary ada'),
(59, '03-11-2020 11:11:03', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Ada'),
(60, '03-11-2020 11:11:47', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Anda (kepada yang lebih tua)'),
(61, '03-11-2020 11:11:59', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Atas'),
(62, '03-11-2020 11:12:09', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Ayah, Bapak'),
(63, '03-11-2020 11:12:18', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Ayam, Burung'),
(64, '03-11-2020 11:12:30', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Bagi, Dibagi'),
(65, '03-11-2020 11:12:42', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Baju'),
(66, '03-11-2020 11:12:50', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Bawah'),
(67, '03-11-2020 11:13:03', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Besok Lussa'),
(68, '03-11-2020 11:13:15', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Besok'),
(69, '03-11-2020 11:13:27', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been edited vocabulary Besok Lussa to Besok Lusa'),
(70, '03-11-2020 11:13:46', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Detik'),
(71, '03-11-2020 11:13:59', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Dia (kepada yang lebih tua)'),
(72, '03-11-2020 11:14:20', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Enam Puluh'),
(73, '03-11-2020 11:14:29', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Enam'),
(74, '03-11-2020 11:14:42', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Hari ini'),
(75, '03-11-2020 11:14:59', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Ibu'),
(76, '03-11-2020 11:15:07', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Ini'),
(77, '03-11-2020 11:17:27', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Itu'),
(78, '03-11-2020 11:17:43', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Jelek (Benda)'),
(79, '03-11-2020 11:17:56', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Jingga, Oranye'),
(80, '03-11-2020 11:18:09', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Kanan'),
(81, '03-11-2020 11:18:23', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Kedua'),
(82, '03-11-2020 11:18:48', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Keluarga'),
(83, '03-11-2020 11:19:02', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Ketiga'),
(84, '03-11-2020 11:19:12', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Kiri'),
(85, '03-11-2020 11:19:19', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Kuat'),
(86, '03-11-2020 11:19:28', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Kurang'),
(87, '03-11-2020 11:19:41', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Mahal'),
(88, '03-11-2020 11:19:55', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Mandi'),
(89, '03-11-2020 11:20:06', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Menikah'),
(90, '03-11-2020 11:20:17', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Menit'),
(91, '03-11-2020 11:20:42', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Merah Muda'),
(92, '03-11-2020 11:20:52', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Merah'),
(93, '03-11-2020 11:21:29', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Murah'),
(94, '03-11-2020 11:21:40', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Paling'),
(95, '03-11-2020 11:21:57', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Pensil'),
(96, '03-11-2020 11:22:08', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Pertama'),
(97, '03-11-2020 11:22:20', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Punya Dia'),
(98, '03-11-2020 11:22:29', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Punya Kamu'),
(99, '03-11-2020 11:22:37', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Punya Saya'),
(100, '03-11-2020 11:22:53', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Punya Siapa'),
(101, '03-11-2020 11:23:02', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Putih'),
(102, '03-11-2020 11:23:18', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Rambut'),
(103, '03-11-2020 11:23:39', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Sampai, Lewat (Waktu)'),
(104, '03-11-2020 11:23:52', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Sampai'),
(105, '03-11-2020 11:24:05', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Satu'),
(106, '03-11-2020 11:24:15', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Sayang'),
(107, '03-11-2020 11:24:27', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Sayur'),
(108, '03-11-2020 11:24:37', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Sekarang'),
(109, '03-11-2020 11:24:55', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Selasa'),
(110, '03-11-2020 11:25:04', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Seratus'),
(111, '03-11-2020 11:25:17', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Suami, Istri'),
(112, '03-11-2020 11:25:27', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Tampan, Cantik'),
(113, '03-11-2020 11:25:44', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Tas Sekolah (Jinjing)'),
(114, '03-11-2020 11:25:56', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Tas Sekolah (Selempang)'),
(115, '03-11-2020 11:26:07', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Tipis'),
(116, '03-11-2020 11:26:17', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Tujuh Belas'),
(117, '03-11-2020 11:26:28', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Tujuh Puluh'),
(118, '03-11-2020 11:26:37', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Tujuh'),
(119, '03-11-2020 11:26:46', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Tulis'),
(120, '03-11-2020 11:26:56', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Warna'),
(121, '04-11-2020 11:08:48', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been logged in as superadmin'),
(122, '04-11-2020 11:09:02', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Abu-abu'),
(123, '04-11-2020 11:09:08', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Bagus'),
(124, '04-11-2020 11:09:16', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Belum'),
(125, '04-11-2020 11:09:29', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Bersih'),
(126, '04-11-2020 11:09:36', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Biji'),
(127, '04-11-2020 11:09:49', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Biru'),
(128, '04-11-2020 11:10:01', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Dari Pada'),
(129, '04-11-2020 11:10:13', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Delapan belas'),
(130, '04-11-2020 11:10:26', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Delapan puluh'),
(131, '04-11-2020 11:10:35', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Dua'),
(132, '04-11-2020 11:10:43', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Jumat'),
(133, '04-11-2020 11:10:53', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Kalian berdua sama'),
(134, '04-11-2020 11:11:04', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Kalian berdua'),
(135, '04-11-2020 11:11:16', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Kami berdua sama'),
(136, '04-11-2020 11:11:34', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Kedua'),
(137, '04-11-2020 11:11:52', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Kekasih, Pacar'),
(138, '04-11-2020 11:12:03', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Kemarin'),
(139, '04-11-2020 11:12:11', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Ketiga'),
(140, '04-11-2020 11:12:22', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Kita berdua sama'),
(141, '04-11-2020 11:12:34', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Kita berdua'),
(142, '04-11-2020 11:12:48', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Kuning'),
(143, '04-11-2020 11:13:00', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Lagi'),
(144, '04-11-2020 11:13:09', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Lain'),
(145, '04-11-2020 11:13:19', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Laki-laki'),
(146, '04-11-2020 11:13:28', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Makan Anggur'),
(147, '04-11-2020 11:13:38', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Mama'),
(148, '04-11-2020 11:13:48', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Mereka berdua'),
(149, '04-11-2020 11:13:59', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Nol'),
(150, '04-11-2020 11:14:17', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Pas, Tepat (waktu)'),
(151, '04-11-2020 11:14:37', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Pukul sebelas siang sampai dua siang'),
(152, '04-11-2020 11:14:55', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Rabu'),
(153, '04-11-2020 11:15:02', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Rapi'),
(154, '04-11-2020 11:15:12', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Salah'),
(155, '04-11-2020 11:15:22', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Sama dengan'),
(156, '04-11-2020 11:15:30', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Sama'),
(157, '04-11-2020 11:15:39', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Sapi'),
(158, '04-11-2020 11:15:51', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Saudara'),
(159, '04-11-2020 11:16:04', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Sembilan belas'),
(160, '04-11-2020 11:16:13', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Sembilan puluh'),
(161, '04-11-2020 11:16:21', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Sembilan'),
(162, '04-11-2020 11:16:30', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Senin'),
(163, '04-11-2020 11:16:51', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Tidak ada, Tidak punya'),
(164, '04-11-2020 11:17:01', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Tidak Suka'),
(165, '04-11-2020 11:17:12', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Tiga belas'),
(166, '04-11-2020 11:17:20', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Tiga puluh'),
(167, '04-11-2020 11:17:28', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Tiga'),
(168, '05-11-2020 13:03:01', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been logged in as superadmin'),
(169, '05-11-2020 13:04:24', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Adik laki-laki'),
(170, '05-11-2020 13:04:34', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Adik perempuan'),
(171, '05-11-2020 13:04:43', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Adik'),
(172, '05-11-2020 13:04:52', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Anak laki-laki'),
(173, '05-11-2020 13:05:04', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Anak perempuan'),
(174, '05-11-2020 13:05:13', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Anak'),
(175, '05-11-2020 13:05:23', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Anak-anak'),
(176, '05-11-2020 13:05:30', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Apel'),
(177, '05-11-2020 13:05:36', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Awal'),
(178, '05-11-2020 13:05:43', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Babi'),
(179, '05-11-2020 13:05:49', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Bebek'),
(180, '05-11-2020 13:06:08', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Begadang, larut malam'),
(181, '05-11-2020 13:07:38', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Berapa'),
(182, '05-11-2020 13:07:57', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Berwajah biasa'),
(183, '05-11-2020 13:08:09', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Buah-buahan'),
(184, '05-11-2020 13:08:17', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Bukan'),
(185, '05-11-2020 13:08:26', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Bungsu'),
(186, '05-11-2020 13:08:35', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Dimana'),
(187, '05-11-2020 13:08:47', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Emas (warna)'),
(188, '05-11-2020 13:09:38', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Empat belas'),
(189, '05-11-2020 13:09:58', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Empat puluh'),
(190, '05-11-2020 13:10:06', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Empat'),
(191, '05-11-2020 13:10:17', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Halo'),
(192, '05-11-2020 13:10:26', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Hamil'),
(193, '05-11-2020 13:10:39', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Hari'),
(194, '05-11-2020 13:10:59', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Hijau'),
(195, '05-11-2020 13:11:12', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Hitam'),
(196, '05-11-2020 13:11:24', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Ikan'),
(197, '05-11-2020 13:11:35', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Jambu'),
(198, '05-11-2020 13:11:53', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Jelek (orang)'),
(199, '05-11-2020 13:12:23', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Kakak laki-laki'),
(200, '05-11-2020 13:12:38', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Kakak perempuan'),
(201, '05-11-2020 13:12:46', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Kakak'),
(202, '05-11-2020 13:12:58', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Kamu bertanya kepada aku'),
(203, '05-11-2020 13:13:14', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Kotor'),
(204, '05-11-2020 13:13:32', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Kura-kura'),
(205, '05-11-2020 13:13:43', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Lima belas'),
(206, '05-11-2020 13:13:58', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Lima puluh'),
(207, '05-11-2020 13:14:22', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Lima'),
(208, '05-11-2020 13:14:46', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Makan apel, Makan jambu'),
(209, '05-11-2020 13:15:04', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Makan pisang'),
(210, '05-11-2020 13:15:14', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Malam'),
(211, '05-11-2020 13:15:29', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Mandi (pancuran)'),
(212, '05-11-2020 13:15:41', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Minggu'),
(213, '05-11-2020 13:15:55', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Nomor, Angka'),
(214, '05-11-2020 13:16:05', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Orang'),
(215, '05-11-2020 13:16:13', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Pagi'),
(216, '05-11-2020 13:16:23', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Pendek'),
(217, '05-11-2020 13:16:34', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Perak (warna)'),
(218, '05-11-2020 13:16:50', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Punya, kepunyaan'),
(219, '05-11-2020 13:17:10', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Rumput'),
(220, '05-11-2020 13:17:23', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Santai'),
(221, '05-11-2020 13:17:38', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Saudara kandung'),
(222, '05-11-2020 13:22:54', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary sore'),
(223, '05-11-2020 13:24:13', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been edited vocabulary sore to Sore'),
(224, '05-11-2020 13:24:21', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Sudah'),
(225, '05-11-2020 13:24:30', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Suka'),
(226, '05-11-2020 13:24:39', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Tanggal'),
(227, '05-11-2020 13:25:35', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Tanya, Aku tanya kepada kamu'),
(228, '05-11-2020 13:25:52', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Kamu bertanya kepada dia'),
(229, '05-11-2020 13:26:00', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Tebal'),
(230, '05-11-2020 13:26:08', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Terlambat'),
(231, '05-11-2020 13:26:29', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Tidak'),
(232, '05-11-2020 13:26:39', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Tidak'),
(233, '05-11-2020 13:26:44', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been deleted vocabulary Tidak'),
(234, '05-11-2020 13:26:57', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Tidur'),
(235, '05-11-2020 13:27:08', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Tinggi (orang)'),
(236, '19-11-2020 11:52:51', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been logged in as superadmin'),
(237, '16-01-2021 21:12:27', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been logged in as superadmin'),
(238, '16-01-2021 23:52:14', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been logged in as superadmin'),
(239, '17-01-2021 11:41:46', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been logged in as superadmin'),
(240, '28-01-2021 20:00:13', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been logged in as superadmin'),
(241, '28-01-2021 20:04:39', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been logged in as superadmin'),
(242, '28-01-2021 20:06:05', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been replied mailbox (sudirmansyah0612@gmail.com:Lorem ipsum)'),
(243, '09-02-2021 05:00:20', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been logged in as superadmin'),
(244, '09-02-2021 06:36:48', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been replied mailbox (sudirmansyah0612@gmail.com:Lorem ipsum)'),
(245, '17-02-2021 15:44:05', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been logged in as superadmin'),
(246, '17-02-2021 15:54:00', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been logged in as superadmin'),
(247, '17-02-2021 15:54:36', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Anda (kepada yang lebih tua)'),
(248, '17-02-2021 15:59:30', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Dia (kepada yang lebih tua)'),
(249, '17-02-2021 16:00:23', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Enam Puluh'),
(250, '17-02-2021 16:00:57', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Kurang, dikurangi'),
(251, '17-02-2021 16:01:19', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Kiri'),
(252, '17-02-2021 16:02:16', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Aku, saya'),
(253, '17-02-2021 16:02:35', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Keluarga'),
(254, '17-02-2021 16:03:02', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Bawah'),
(255, '17-02-2021 16:05:12', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Jelek (Benda)'),
(256, '17-02-2021 16:08:44', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Warna'),
(257, '17-02-2021 16:15:04', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Atas'),
(258, '17-02-2021 16:15:54', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Detik'),
(259, '17-02-2021 16:16:41', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Pertama'),
(260, '17-02-2021 16:19:05', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Seratus'),
(261, '17-02-2021 16:19:57', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Besok'),
(262, '17-02-2021 16:20:56', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Besok Lusa'),
(263, '18-02-2021 08:42:57', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been logged in as superadmin'),
(264, '18-02-2021 08:54:44', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Dia'),
(265, '18-02-2021 09:01:06', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Kanan'),
(266, '18-02-2021 09:32:23', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Ayah, Bapak'),
(267, '18-02-2021 09:34:32', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Sampai'),
(268, '18-02-2021 09:38:14', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Selasa'),
(269, '18-02-2021 09:38:39', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Tujuh'),
(270, '18-02-2021 09:39:24', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Tujuh Puluh'),
(271, '18-02-2021 09:40:04', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Tas Sekolah (Selempang)'),
(272, '18-02-2021 09:40:48', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Ayam, Burung'),
(273, '18-02-2021 09:41:23', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Bangun'),
(274, '18-02-2021 09:42:11', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Baju'),
(275, '18-02-2021 09:42:43', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Putih'),
(276, '18-02-2021 09:43:03', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Rambut'),
(277, '18-02-2021 09:43:48', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Pensil'),
(278, '18-02-2021 09:44:37', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Tipis'),
(279, '18-02-2021 09:45:22', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Sapi'),
(280, '18-02-2021 09:45:53', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Kami berdua sama'),
(281, '18-02-2021 09:46:10', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Kita berdua sama'),
(282, '18-02-2021 09:46:48', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Kalian berdua sama'),
(283, '18-02-2021 09:47:07', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Sama'),
(284, '18-02-2021 09:47:54', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Kita berdua'),
(285, '18-02-2021 09:48:19', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Kedua'),
(286, '18-02-2021 09:49:00', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Kalian berdua'),
(287, '18-02-2021 09:49:14', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Mereka berdua'),
(288, '18-02-2021 09:49:50', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Kalian berdua'),
(289, '18-02-2021 09:50:05', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Delapan puluh'),
(290, '18-02-2021 09:50:38', 'Sudirmansyah_1603792852.jpg', 'Sudirmansyah', 'Sudirmansyah has been added new vocabulary Pas, Tepat (waktu)');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `timestamp` varchar(255) NOT NULL,
  `isi` longtext NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `tanggal`, `timestamp`, `isi`, `gambar`, `author`) VALUES
(7, 'Mengenal Bahasa Isyarat', '29-10-2020 13:58:53', '1603954733', '<p>Bila kamu ingin beli jus mangga, bagaimana cara kamu memesannya? Kamu akan mengatakan dengan jelas, &ldquo;Ibu, saya beli jus mangganya satu ya&rdquo;. Terkadang kamu mungkin menambahkan permintaan lain seperti tambahan es atau gula yang dikurangi. Pernahkah kamu membayangkan bagaimana teman-teman dengan keterbatasan kemampuan bicara melakukannya?</p>\r\n\r\n<p>Benar! Semua komunikasi dilakukan melalui bahasa isyarat!</p>\r\n\r\n<p>Bagi teman-teman tunawicara dan tunarungu, komunikasi yang dilakukan agak sedikit berbeda dibanding yang dilakukan oleh sebagian besar orang. Alih-alih berbicara dengan mengucapkan kata-kata, teman tuli (sebutan bagi tunarungu) biasa menggunakan bahasa isyarat. Apa itu bahasa isyarat? Bahasa isyarat merupakan bahasa yang digunakan untuk berkomunikasi dengan menggunakan gerak bibir dan bahasa tubuh, termasuk ekspresi wajah, pandangan mata, dan gerak tubuh. Selain itu, bahasa isyarat adalah gerakan-gerakan yang sudah disepakati maknanya dan digunakan untuk bertukar informasi. Bila kamu dan temanmu sudah menyepakati gerakan tertentu memiliki sebuah makna, artinya kalian memiliki bahasa isyarat di antara kalian sendiri. Dengan begitu, bahasa isyarat bisa digunakan oleh semua orang, tidak terbatas hanya untuk teman tuli dan tunawicara saja.</p>\r\n\r\n<p>Lantas, bagaimana bila bahasa isyarat disepakati dan digunakan oleh lebih banyak orang?</p>\r\n\r\n<p>Bahasa isyarat yang diperkenalkan sebagai bahasa formal biasanya digunakan oleh teman tuli. Hal ini disebabkan oleh orang dengan gangguan pendengaran biasanya akan memiliki gangguan pada kemampuan bicaranya pula sehingga komunikasi efektif yang dapat dilakukan adalah menggunakan gerak tubuh. Gerakan-gerakan ini kemudian disepakati maknanya sehingga secara alami lahirlah bahasa isyarat yang digunakan secara luas. Untuk penggunan bahasa isyarat ini, walaupun menggunakan gerakan tubuh, tetap menggunakan gerak bibir dan ekspresi juga agar lawan bicara lebih memahami konteks pesan yang ingin disampaikan. Bahasa isyarat ini muncul secara alami dan disesuaikan dengan budayanya masing-masing hingga saat ini belum ada bahasa isyarat terstandar internasional. Oleh karena itu, setiap negara memiliki bahasa isyaratnya masing-masing, termasuk Indonesia.</p>\r\n\r\n<p>Lalu, bagaimana bahasa isyarat yang digunakan di Indonesia?</p>\r\n\r\n<p>Di Indonesia, terdapat dua bahasa isyarat yang digunakan, yaitu Bahasa Isyarat Indonesia (BISINDO) dan Sistem Isyarat Bahasa Indonesia (SIBI). BISINDO merupakan bahasa isyarat yang muncul secara alami dalam budaya Indonesia dan praktis untuk digunakan dalam kehidupan sehari-hari sehingga BISINDO memiliki beberapa variasi di tiap daerah. Sementara itu, SIBI merupakan sistem isyarat yang yang diakui oleh pemerintah dan digunakan dalam pengajaran di Sekolah Luar Biasa untuk Tunarungu (SLB/B). Salah satu perbedaan BISINDO dan SIBI yang cukup terlihat adalah BISINDO menggerakkan dua tangan untuk mengisyaratkan abjad, sedangkan SIBI hanya menggunakan satu tangan saja.</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.ypedulikasihabk.org/storage/2018/11/infografis-bhs-isyarat-5-600x600.jpg\" style=\"height:600px; width:600px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://www.ypedulikasihabk.org/storage/2018/11/infografis-bhs-isyarat-4-600x600.jpg\" style=\"height:600px; width:600px\" /></p>\r\n\r\n<p>Selain itu, perbedaan utama SIBI dan BISINDO terletak&nbsp;pada tata cara berbahasa. BISINDO yang telah digunakan sebagai keseharian oleh teman tuli mengandung kosa isyarat yang simbolis. Selama makna dari sebuah kata terwakili, maka kosa isyarat yang sederhana dari BISINDO sudah cukup. Sementara itu, SIBI memang dibuat untuk mengajarkan sistem Bahasa Indonesia kepada teman tuli. Aturan-aturan penggunaan kosa isyarat pada SIBI lebih rumit dan berjenjang, seperti adanya penggunaan awalan dan akhiran untuk setiap kata. Pada SIBI, banyak pula kosa isyarat yang diadaptasi dari Bahasa Isyarat Amerika&nbsp;(<em>American Sign Language</em>) sehingga konteksnya dirasa kurang sesuai bagi teman tuli.</p>\r\n\r\n<p>BISINDO dan SIBI tidak terbatas hanya digunakan untuk teman-teman tuli saja, tetapi juga bisa digunakan oleh teman dengar atau orang yang tidak memiliki gangguan pendengaran dan bicara. Teman dengar dapat mempelajarinya agar dapat berkomunikasi secara luas dengan teman-teman tuli.</p>\r\n\r\n<p>Sumber:&nbsp;<a href=\"https://www.ypedulikasihabk.org/2018/11/09/mengenal-bahasa-isyarat/\">https://www.ypedulikasihabk.org/</a></p>\r\n', 'Mengenal Bahasa Isyarat_1603954733.jpg', 'Sudirmansyah');

-- --------------------------------------------------------

--
-- Table structure for table `kamus`
--

CREATE TABLE `kamus` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kamus`
--

INSERT INTO `kamus` (`id`, `judul`, `gambar`) VALUES
(179, 'Anda (kepada yang lebih tua)', 'Anda (kepada yang lebih tua)_1613552076.gif'),
(180, 'Dia (kepada yang lebih tua)', 'Dia (kepada yang lebih tua)_1613552370.gif'),
(181, 'Enam Puluh', 'Enam Puluh_1613552423.gif'),
(182, 'Kurang, dikurangi', 'Kurang, dikurangi_1613552457.gif'),
(183, 'Kiri', 'Kiri_1613552479.gif'),
(184, 'Aku, saya', 'Aku, saya_1613552536.gif'),
(185, 'Keluarga', 'Keluarga_1613552555.gif'),
(186, 'Bawah', 'Bawah_1613552582.gif'),
(187, 'Jelek (Benda)', 'Jelek (Benda)_1613552712.gif'),
(188, 'Warna', 'Warna_1613552924.gif'),
(189, 'Atas', 'Atas_1613553304.gif'),
(190, 'Detik', 'Detik_1613553354.gif'),
(191, 'Pertama', 'Pertama_1613553401.gif'),
(192, 'Seratus', 'Seratus_1613553545.gif'),
(193, 'Besok', 'Besok_1613553597.gif'),
(194, 'Besok Lusa', 'Besok Lusa_1613553656.gif'),
(195, 'Dia', 'Dia_1613613284.gif'),
(196, 'Kanan', 'Kanan_1613613666.gif'),
(197, 'Ayah, Bapak', 'Ayah, Bapak_1613615543.gif'),
(198, 'Sampai', 'Sampai_1613615672.gif'),
(199, 'Selasa', 'Selasa_1613615894.gif'),
(200, 'Tujuh', 'Tujuh_1613615919.gif'),
(201, 'Tujuh Puluh', 'Tujuh Puluh_1613615964.gif'),
(202, 'Tas Sekolah (Selempang)', 'Tas Sekolah (Selempang)_1613616004.gif'),
(203, 'Ayam, Burung', 'Ayam, Burung_1613616048.gif'),
(204, 'Bangun', 'Bangun_1613616083.gif'),
(205, 'Baju', 'Baju_1613616131.gif'),
(206, 'Putih', 'Putih_1613616163.gif'),
(207, 'Rambut', 'Rambut_1613616183.gif'),
(208, 'Pensil', 'Pensil_1613616228.gif'),
(209, 'Tipis', 'Tipis_1613616277.gif'),
(210, 'Sapi', 'Sapi_1613616322.gif'),
(211, 'Kami berdua sama', 'Kami berdua sama_1613616353.gif'),
(212, 'Kita berdua sama', 'Kita berdua sama_1613616370.gif'),
(213, 'Kalian berdua sama', 'Kalian berdua sama_1613616408.gif'),
(214, 'Sama', 'Sama_1613616427.gif'),
(215, 'Kita berdua', 'Kita berdua_1613616474.gif'),
(216, 'Kedua', 'Kedua_1613616499.gif'),
(217, 'Kalian berdua', 'Kalian berdua_1613616540.gif'),
(218, 'Mereka berdua', 'Mereka berdua_1613616554.gif'),
(219, 'Kalian berdua', 'Kalian berdua_1613616590.gif'),
(220, 'Delapan puluh', 'Delapan puluh_1613616605.gif'),
(221, 'Pas, Tepat (waktu)', 'Pas, Tepat (waktu)_1613616638.gif');

-- --------------------------------------------------------

--
-- Table structure for table `mailbox`
--

CREATE TABLE `mailbox` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `read` enum('y','n') NOT NULL DEFAULT 'n',
  `timestamp` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `replied` enum('y','n') NOT NULL DEFAULT 'n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mailbox`
--

INSERT INTO `mailbox` (`id`, `name`, `email`, `subject`, `message`, `read`, `timestamp`, `date`, `replied`) VALUES
(6, 'twqt', 'sudirmansyah0612@gmail.com', 'Lorem ipsum', 'wtqwtq', 'y', '1603957494', '29-10-2020 14:44:54', 'y'),
(7, 'Sudirman syah', 'sudirmansyah0612@gmail.com', 'Lorem ipsum', 'Test', 'y', '1611838800', '28-01-2021 20:00:00', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `group` enum('superadmin','admin','moderator') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `photo`, `group`) VALUES
(1, 'Sudirmansyah', 'sudirmansyah0612@gmail.com', '540b152816bb8ecc30bb004a3c977ed8', 'Sudirmansyah_1603792852.jpg', 'superadmin'),
(5, 'Elon Musk', 'elonmusk@gmail.com', 'cc03e747a6afbbcbf8be7668acfebee5', 'Elon Musk_1603794662.jpg', 'admin'),
(6, 'Mark Zuckerberg', 'markzuckerberg@gmail.com', 'cc03e747a6afbbcbf8be7668acfebee5', 'Mark Zuckerberg_1603805785.jpg', 'moderator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kamus`
--
ALTER TABLE `kamus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mailbox`
--
ALTER TABLE `mailbox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=291;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kamus`
--
ALTER TABLE `kamus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222;

--
-- AUTO_INCREMENT for table `mailbox`
--
ALTER TABLE `mailbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
