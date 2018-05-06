-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2018 at 02:35 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sayomi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `Username` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `Username`, `firstName`, `lastName`, `password`, `email`) VALUES
(1, 'csfc', 'Anas', 'Latique', 'tlsslm10', 'anaslatique@gmail.com'),
(2, 'csfc', 'Anas', 'Latique', 'tlss', 'anaslatique@gmail.com'),
(3, 'iamanas22', 'Anasssss', 'Latique', 'tlss', 'anaslatique@gmail.com'),
(4, 'iamanas', 'Anas', 'Latique', 'tlss', 'anaslatique@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `guests`
--

CREATE TABLE `guests` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(20) NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guests`
--

INSERT INTO `guests` (`id`, `firstName`, `lastName`, `email`, `phone`, `updated_at`, `created_at`) VALUES
(21, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(22, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(23, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(24, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(25, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(26, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(27, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(28, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(29, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(30, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(31, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(32, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(33, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(34, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(35, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(36, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(37, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(38, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(39, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(40, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(41, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(42, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(43, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(44, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(45, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(46, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(47, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(48, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(49, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(50, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(51, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(52, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(53, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(54, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(55, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(56, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(57, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(58, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(59, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(60, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(61, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(62, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(63, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(64, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(65, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(66, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(67, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(68, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(69, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(70, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(71, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(72, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(73, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(74, 'Anas', 'gluig', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(75, 'Anas', 'gluig', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(76, 'Anas', 'gluig', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(77, 'Agd', 'hoho', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(78, 'Agd', 'hoho', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(79, 'Agd', 'hoho', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(80, 'Agd', 'hoho', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(81, 'Agd', 'hoho', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(82, 'Agd', 'hoho', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(83, 'Agd', 'hoho', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(84, 'Agd', 'dqzdqzmm', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(85, 'Agd', 'dqzdqzmm', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(86, 'Agd', 'dqzdqzmm', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(87, 'Anas', 'jip', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(88, 'Anas', 'jip', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(89, 'Anas', 'Latique', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(90, 'Anas', 'Latique', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(91, 'Anas', 'Latique', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(92, 'Anas', 'Latique', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(93, 'Anas', 'Latique', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(94, 'Anas', 'Latique', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(95, 'Anas', 'Latique', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(96, 'Anas', 'Latique', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(97, 'Anas', 'Latique', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(98, 'Anas', 'Latique', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(99, 'Anas', 'Latique', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(100, 'Anas', 'Latique', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(101, 'Anas', 'Latique', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(102, 'Anas', 'Latique', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(103, 'Anas', 'Latique', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(104, 'Anas', 'Latique', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(105, 'Anas', 'Latique', 'anaslatique@gmail.com', 21221349767, '2018-04-25', '2018-04-25'),
(106, 'qzdqz', 'qzdqz', 'anaslatique@gmail.com', 21221349767, '2018-04-26', '2018-04-26'),
(107, 'qzdqz', 'qzdqz', 'anaslatique@gmail.com', 21221349767, '2018-04-26', '2018-04-26'),
(108, 'qzdqz', 'qzdqz', 'anaslatique@gmail.com', 21221349767, '2018-04-26', '2018-04-26'),
(109, 'qzdqz', 'qzdqz', 'anaslatique@gmail.com', 21221349767, '2018-04-26', '2018-04-26'),
(110, 'qzdqz', 'qzdqz', 'anaslatique@gmail.com', 21221349767, '2018-04-26', '2018-04-26'),
(111, 'qzdqz', 'qzdqz', 'anaslatique@gmail.com', 21221349767, '2018-04-26', '2018-04-26'),
(112, 'dzqdqzz', 'dqdzqdzq', 'anaslatique@gmail.com', 21221349767, '2018-04-26', '2018-04-26'),
(113, 'dqzdzazq', 'dzqdzq', 'anaslatique@gmail.com', 21221349767, '2018-04-26', '2018-04-26'),
(114, 'dqzdzazq', 'dzqdzq', 'anaslatique@gmail.com', 21221349767, '2018-04-26', '2018-04-26'),
(115, 'aaaaaaa', 'aaaaaaa', 'anaslatique@gmail.com', 21221349767, '2018-04-26', '2018-04-26'),
(116, 'aaaaaaa', 'aaaaaaa', 'anaslatique@gmail.com', 21221349767, '2018-04-26', '2018-04-26'),
(117, 'aaaaaaa', 'aaaaaaa', 'anaslatique@gmail.com', 21221349767, '2018-04-26', '2018-04-26'),
(118, 'aaaaaaa', 'aaaaaaa', 'anaslatique@gmail.com', 21221349767, '2018-04-26', '2018-04-26'),
(119, 'SQZDQZ', 'QDZQZQDZ', 'anaslatique@gmail.com', 21221349767, '2018-04-26', '2018-04-26'),
(120, 'kjbdkbqzou', 'bdslfsei', 'anaslatique@gmail.com', 21221349767, '2018-04-26', '2018-04-26'),
(121, 'kjbdkbqzou', 'bdslfsei', 'anaslatique@gmail.com', 21221349767, '2018-04-26', '2018-04-26'),
(122, 'kjbdkbqzou', 'bdslfsei', 'anaslatique@gmail.com', 21221349767, '2018-04-26', '2018-04-26'),
(123, 'kjbdkbqzou', 'bdslfsei', 'anaslatique@gmail.com', 21221349767, '2018-04-26', '2018-04-26'),
(124, 'kjbdkbqzou', 'bdslfsei', 'anaslatique@gmail.com', 21221349767, '2018-04-26', '2018-04-26'),
(125, 'kjbdkbqzou', 'bdslfsei', 'anaslatique@gmail.com', 21221349767, '2018-04-26', '2018-04-26'),
(126, 'Anas', 'Latique', 'anaslatique@gmail.com', 21221349767, '2018-04-30', '2018-04-30'),
(127, 'Anas', 'Latique', 'anaslatique@gmail.com', 21221349767, '2018-04-30', '2018-04-30'),
(128, 'Anas', 'Latique', 'anaslatique@gmail.com', 21221349767, '2018-04-30', '2018-04-30'),
(129, 'Anas', 'Latique', 'anaslatique@gmail.com', 21221349767, '2018-04-30', '2018-04-30'),
(130, 'Anas', 'Latique', 'anaslatique@gmail.com', 21221349767, '2018-04-30', '2018-04-30'),
(131, 'Anas', 'Latique', 'anaslatique@gmail.com', 21221349767, '2018-04-30', '2018-04-30'),
(132, 'Anas', 'Latique', 'anaslatique@gmail.com', 21221349767, '2018-04-30', '2018-04-30'),
(133, 'Anas', 'Latique', 'anaslatique@gmail.com', 21221349767, '2018-04-30', '2018-04-30'),
(134, 'Anas', 'Latique', 'anaslatique@gmail.com', 21221349767, '2018-04-30', '2018-04-30'),
(135, 'Anas', 'Latique', 'anaslatique@gmail.com', 21221349767, '2018-04-30', '2018-04-30'),
(136, 'Anas', 'Latique', 'anaslatique@gmail.com', 21221349767, '2018-04-30', '2018-04-30'),
(137, 'Anas', 'Latique', 'anaslatique@gmail.com', 21221349767, '2018-04-30', '2018-04-30'),
(138, 'Anas', 'Latique', 'anaslatique@gmail.com', 21221349767, '2018-04-30', '2018-04-30'),
(139, 'Anas', 'Latique', 'anaslatique@gmail.com', 21221349767, '2018-04-30', '2018-04-30'),
(140, 'Anas', 'Latique', 'anaslatique@gmail.com', 21221349767, '2018-04-30', '2018-04-30'),
(141, 'Anas', 'Latique', 'anaslatique@gmail.com', 21221349767, '2018-04-30', '2018-04-30'),
(142, 'Anas', 'Latique', 'anaslatique@gmail.com', 21221349767, '2018-04-30', '2018-04-30'),
(143, 'Anas', 'Latique', 'anaslatique@gmail.com', 21221349767, '2018-04-30', '2018-04-30'),
(144, 'Anas', 'Latique', 'anaslatique@gmail.com', 21221349767, '2018-04-30', '2018-04-30'),
(145, 'Anas', 'Latique', 'anaslatique@gmail.com', 21221349767, '2018-04-30', '2018-04-30'),
(146, 'Anas', 'Latique', 'anaslatique@gmail.com', 21221349767, '2018-05-02', '2018-05-02'),
(147, 'Anas', 'Latique', 'anaslatique@gmail.com', 21221349767, '2018-05-04', '2018-05-04'),
(148, 'Anas', 'Latique', 'anaslatique@gmail.com', 21221349767, '2018-05-04', '2018-05-04'),
(149, 'Anas', 'Latique', 'anaslatique@gmail.com', 21221349767, '2018-05-04', '2018-05-04'),
(150, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-05-04', '2018-05-04'),
(151, 'Anas', 'Zebri', 'anaslatique@gmail.com', 21221349767, '2018-05-04', '2018-05-04');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 2),
(3, '2018_04_17_104822_create_guests_table', 3),
(4, '2018_04_17_113250_create_rooms_table', 4),
(5, '2018_04_17_115439_create_room_bookings_table', 5),
(6, '2018_04_17_125504_create_room_bookings_table', 6),
(7, '2018_04_17_133802_create_guests_table', 7),
(8, '2018_04_17_134710_create_rooms_table', 8),
(9, '2018_04_17_135107_create_room_bookings_table', 9),
(10, '2018_04_17_135900_create_suites_table', 10),
(11, '2018_04_17_140407_create_suite_bookings_table', 11),
(12, '2018_04_19_083847_create_room_pictures_table', 12),
(13, '2018_04_19_084722_create_suite_pictures_table', 13),
(14, '2018_04_30_143034_create_admins_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `roomID` int(10) UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numberOfBeds` int(11) NOT NULL,
  `category` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pricePerNight` decimal(8,2) NOT NULL,
  `maxPersons` int(11) NOT NULL,
  `locked` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`roomID`, `description`, `numberOfBeds`, `category`, `pricePerNight`, `maxPersons`, `locked`, `created_at`, `updated_at`) VALUES
(2, 'Offering views of Cleveland', 3, 'Single', '400.00', 4, 0, NULL, NULL),
(3, 'Pretty dope room right here', 3, 'Single', '410.00', 4, 1, NULL, NULL),
(4, 'Bright and open room', 3, 'Single', '470.00', 7, 1, NULL, NULL),
(5, 'Crispy and dope room', 3, 'Double', '450.00', 5, 0, NULL, NULL),
(7, 'Dope and top of the line right there', 3, 'Dashboard', '427.00', 4, 0, NULL, NULL),
(8, 'Pretty good room, very bright', 4, 'Single', '437.00', 8, 0, NULL, NULL),
(39, 'pretty dope stuff, pretty good', 2, '', '2.00', 1, 0, '2018-05-03 12:55:09', '2018-05-03 12:55:09'),
(40, 'spacious and big room', 2, '', '2.00', 1, 0, '2018-05-03 20:46:30', '2018-05-03 20:46:30');

-- --------------------------------------------------------

--
-- Table structure for table `room_bookings`
--

CREATE TABLE `room_bookings` (
  `id` int(10) UNSIGNED NOT NULL,
  `roomID` int(11) NOT NULL,
  `guestID` int(11) NOT NULL,
  `bookDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `beginStayDate` date NOT NULL,
  `nights` int(11) NOT NULL,
  `persons` int(11) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `code` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `room_bookings`
--

INSERT INTO `room_bookings` (`id`, `roomID`, `guestID`, `bookDate`, `beginStayDate`, `nights`, `persons`, `price`, `code`, `created_at`, `updated_at`) VALUES
(21, 4, 147, '2018-05-04 08:18:07', '2018-05-25', 2, 3, '940.00', '675431Q61002339', '2018-05-04 08:18:07', '2018-05-04 08:18:07'),
(22, 4, 148, '2018-05-04 08:18:08', '2018-05-25', 2, 3, '940.00', '2131660098T7531', '2018-05-04 08:18:08', '2018-05-04 08:18:08'),
(23, 3, 150, '2018-05-04 09:19:51', '2018-05-12', 2, 3, '820.00', '253002D05055746', '2018-05-04 09:19:51', '2018-05-04 09:19:51'),
(24, 3, 151, '2018-05-04 09:20:52', '2018-05-12', 2, 3, '820.00', '9061929213Z0110', '2018-05-04 09:20:52', '2018-05-04 09:20:52');

-- --------------------------------------------------------

--
-- Table structure for table `room_pictures`
--

CREATE TABLE `room_pictures` (
  `id` int(10) UNSIGNED NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roomID` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `room_pictures`
--

INSERT INTO `room_pictures` (`id`, `url`, `roomID`, `created_at`, `updated_at`) VALUES
(1, 'tllax-dining-the-royce-dining-room-1680-945.jpg', 1, NULL, NULL),
(2, 'tllax-rooms-exec-club-king.jpg', 2, NULL, NULL),
(4, 'tllax-rooms-cottage-grand-king-also-california-suite-and-royce-manor-2014-1680-945.jpg', 3, NULL, NULL),
(5, 'tllax-rooms-classic-king-room-2014-1680-945.jpg', 4, NULL, NULL),
(7, 'tllax-rooms-tournament-of-roses-suite-master-bedroom-2014-1680-945', 6, NULL, NULL),
(8, 'tllax-rooms-deluxe-king-room-2014-1680-945.jpg', 7, NULL, NULL),
(9, 'tllax-rooms-suites-ford-bedroom2-1680-945.jpg', 8, NULL, NULL),
(11, '40126461411_b1ed283d45_o.jpg', 21, NULL, NULL),
(12, 'tllax-dining-the-tap-room-1680-945.jpg', 22, NULL, NULL),
(13, 'tllax-dining-the-tap-room-1680-945.jpg', 23, NULL, NULL),
(14, 'tllax-dining-the-tap-room-1680-945.jpg', 24, NULL, NULL),
(15, 'tllax-dining-tea-set-up-lobby-lounge-2014-1680-945.jpg', 25, NULL, NULL),
(16, 'tllax-dining-tea-set-up-lobby-lounge-2014-1680-945.jpg', 26, NULL, NULL),
(17, 'tllax-dining-tea-set-up-lobby-lounge-2014-1680-945.jpg', 27, NULL, NULL),
(18, 'tllax-dining-tea-set-up-lobby-lounge-2014-1680-945.jpg', 28, NULL, NULL),
(19, 'tllax-dining-tea-set-up-lobby-lounge-2014-1680-945.jpg', 29, NULL, NULL),
(20, 'tllax-dining-tea-set-up-lobby-lounge-2014-1680-945.jpg', 30, NULL, NULL),
(21, 'tllax-dining-tea-set-up-lobby-lounge-2014-1680-945.jpg', 31, NULL, NULL),
(22, 'tllax-dining-tea-set-up-lobby-lounge-2014-1680-945.jpg', 32, NULL, NULL),
(23, 'tllax-dining-tea-set-up-lobby-lounge-2014-1680-945.jpg', 33, NULL, NULL),
(24, 'tllax-dining-tea-set-up-lobby-lounge-2014-1680-945.jpg', 34, NULL, NULL),
(25, 'tllax-dining-tea-set-up-lobby-lounge-2014-1680-945.jpg', 35, NULL, NULL),
(26, 'tllax-dining-tea-set-up-lobby-lounge-2014-1680-945.jpg', 36, NULL, NULL),
(27, 'tllax-dining-tea-set-up-lobby-lounge-2014-1680-945.jpg', 37, NULL, NULL),
(28, 'tllax-dining-tea-set-up-lobby-lounge-2014-1680-945.jpg', 38, NULL, NULL),
(29, 'tllax-dining-tea-set-up-lobby-lounge-2014-1680-945.jpg', 39, NULL, NULL),
(30, 'tllax-dining-tea-set-up-lobby-lounge-2014-1680-945.jpg', 40, NULL, NULL),
(31, 'tllax-dining-tea-set-up-lobby-lounge-2014-1680-945.jpg', 41, NULL, NULL),
(32, 'tllax-dining-tea-set-up-lobby-lounge-2014-1680-945.jpg', 42, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `suites`
--

CREATE TABLE `suites` (
  `suiteID` int(10) UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numberOfRooms` int(11) NOT NULL,
  `pricePerNight` decimal(8,2) NOT NULL,
  `locked` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suites`
--

INSERT INTO `suites` (`suiteID`, `description`, `numberOfRooms`, `pricePerNight`, `locked`, `created_at`, `updated_at`) VALUES
(1, 'Majestic royal suite', 3, '2400.00', 1, NULL, '2018-05-03 23:07:03'),
(2, 'Very Royal suite', 3, '2400.00', 0, NULL, '2018-05-03 23:07:56'),
(6, 'really dope suite', 2, '1300.00', 0, '2018-05-03 22:07:45', '2018-05-03 22:07:45'),
(7, 'really dope suite', 2, '1300.00', 0, '2018-05-03 22:11:44', '2018-05-03 22:11:44'),
(8, 'really dope suite', 2, '1300.00', 0, '2018-05-03 22:13:07', '2018-05-03 22:13:07'),
(9, 'really dope suite', 2, '1300.00', 0, '2018-05-03 22:14:05', '2018-05-03 22:14:05'),
(10, 'really dope suite', 2, '1300.00', 0, '2018-05-03 22:14:52', '2018-05-03 22:14:52'),
(11, 'really dope suite', 2, '1300.00', 0, '2018-05-03 22:15:06', '2018-05-03 22:15:06'),
(12, 'really dope suite', 2, '1300.00', 0, '2018-05-03 22:15:58', '2018-05-03 22:15:58'),
(13, 'really dope suite', 2, '1300.00', 0, '2018-05-03 22:20:36', '2018-05-03 22:20:36'),
(14, 'really dope suite', 2, '1300.00', 0, '2018-05-03 22:20:51', '2018-05-03 22:20:51'),
(15, 'really dope suite', 2, '1300.00', 0, '2018-05-03 22:21:05', '2018-05-03 22:21:05'),
(16, 'really dope suite', 2, '1300.00', 0, '2018-05-03 22:21:15', '2018-05-03 22:21:15'),
(17, 'really dope suite', 2, '1300.00', 0, '2018-05-03 22:21:24', '2018-05-03 22:21:24'),
(18, 'really dope suite', 2, '1300.00', 0, '2018-05-03 22:21:31', '2018-05-03 22:21:31');

-- --------------------------------------------------------

--
-- Table structure for table `suite_bookings`
--

CREATE TABLE `suite_bookings` (
  `id` int(10) UNSIGNED NOT NULL,
  `suiteID` int(11) NOT NULL,
  `guestID` int(11) NOT NULL,
  `bookDate` datetime NOT NULL,
  `beginStayDate` datetime NOT NULL,
  `nights` int(11) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `code` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suite_bookings`
--

INSERT INTO `suite_bookings` (`id`, `suiteID`, `guestID`, `bookDate`, `beginStayDate`, `nights`, `price`, `code`, `created_at`, `updated_at`) VALUES
(2, 1, 149, '2018-05-04 09:34:41', '2018-05-11 00:00:00', 3, '7200.00', '2P9300932978266', '2018-05-04 08:34:41', '2018-05-04 08:34:41');

-- --------------------------------------------------------

--
-- Table structure for table `suite_pictures`
--

CREATE TABLE `suite_pictures` (
  `id` int(10) UNSIGNED NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `suiteID` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suite_pictures`
--

INSERT INTO `suite_pictures` (`id`, `url`, `suiteID`, `created_at`, `updated_at`) VALUES
(1, 'gallery_main_32.jpg', 1, NULL, NULL),
(3, 'pc_room_img_03.jpg', 2, NULL, NULL),
(4, 'gallery_main_32.jpg', 3, NULL, NULL),
(5, 'pc_room_img_03.jpg', 4, NULL, NULL),
(6, 'tllax-dining-the-royce-dining-room-1680-945.jpg', 5, NULL, NULL),
(7, 'tllax-dining-the-royce-dining-room-1680-945.jpg', 19, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guests`
--
ALTER TABLE `guests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`roomID`);

--
-- Indexes for table `room_bookings`
--
ALTER TABLE `room_bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_pictures`
--
ALTER TABLE `room_pictures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suites`
--
ALTER TABLE `suites`
  ADD PRIMARY KEY (`suiteID`);

--
-- Indexes for table `suite_bookings`
--
ALTER TABLE `suite_bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suite_pictures`
--
ALTER TABLE `suite_pictures`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `guests`
--
ALTER TABLE `guests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `roomID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `room_bookings`
--
ALTER TABLE `room_bookings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `room_pictures`
--
ALTER TABLE `room_pictures`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `suites`
--
ALTER TABLE `suites`
  MODIFY `suiteID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `suite_bookings`
--
ALTER TABLE `suite_bookings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `suite_pictures`
--
ALTER TABLE `suite_pictures`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
