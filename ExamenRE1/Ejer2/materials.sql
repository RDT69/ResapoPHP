-- Active: 1708374995857@@127.0.0.1@3306@filmdb
-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 03-02-2023 a las 13:34:13
-- Versión del servidor: 8.0.30
-- Versión de PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `materials`
--
CREATE DATABASE IF NOT EXISTS `materials` DEFAULT CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci;
USE `materials`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imports`
--

CREATE TABLE `imports` (
  `id` int NOT NULL,
  `country` varchar(50) COLLATE utf8mb3_spanish_ci DEFAULT NULL,
  `material` varchar(50) COLLATE utf8mb3_spanish_ci DEFAULT NULL,
  `tons` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Volcado de datos para la tabla `imports`
--

INSERT INTO `imports` (`id`, `country`, `material`, `tons`) VALUES
(1, 'Czech Republic', 'Glass', 748),
(2, 'Dominican Republic', 'Rubber', 752),
(3, 'Sweden', 'Steel', 711),
(4, 'Argentina', 'Vinyl', 770),
(5, 'Brazil', 'Plexiglass', 704),
(6, 'Portugal', 'Vinyl', 781),
(7, 'Cuba', 'Plexiglass', 734),
(8, 'Norway', 'Granite', 761),
(9, 'Russia', 'Wood', 763),
(10, 'Russia', 'Granite', 793),
(11, 'Portugal', 'Stone', 738),
(12, 'Venezuela', 'Wood', 733),
(13, 'Indonesia', 'Rubber', 715),
(14, 'Tajikistan', 'Glass', 741),
(15, 'Syria', 'Granite', 758),
(16, 'China', 'Vinyl', 722),
(17, 'Germany', 'Rubber', 768),
(18, 'Kenya', 'Rubber', 776),
(19, 'China', 'Rubber', 786),
(20, 'China', 'Brass', 794),
(21, 'Russia', 'Plexiglass', 799),
(22, 'Japan', 'Plexiglass', 729),
(23, 'Venezuela', 'Plastic', 782),
(24, 'Argentina', 'Aluminum', 749),
(25, 'France', 'Vinyl', 770),
(26, 'Brazil', 'Vinyl', 791),
(27, 'United States', 'Steel', 714),
(28, 'Morocco', 'Glass', 727),
(29, 'Russia', 'Rubber', 800),
(30, 'Brazil', 'Plastic', 742),
(31, 'Philippines', 'Brass', 782),
(32, 'Philippines', 'Stone', 751),
(33, 'China', 'Granite', 771),
(34, 'Portugal', 'Rubber', 771),
(35, 'Indonesia', 'Wood', 721),
(36, 'Sweden', 'Aluminum', 724),
(37, 'China', 'Aluminum', 732),
(38, 'Croatia', 'Vinyl', 725),
(39, 'Belarus', 'Stone', 745),
(40, 'Brazil', 'Vinyl', 731),
(41, 'Portugal', 'Wood', 708),
(42, 'China', 'Granite', 773),
(43, 'Brazil', 'Aluminum', 725),
(44, 'Poland', 'Stone', 756),
(45, 'United States', 'Granite', 771),
(46, 'Czech Republic', 'Vinyl', 731),
(47, 'China', 'Granite', 742),
(48, 'Brazil', 'Glass', 747),
(49, 'Argentina', 'Glass', 765),
(50, 'Honduras', 'Plastic', 754),
(51, 'Colombia', 'Wood', 775),
(52, 'Poland', 'Rubber', 768),
(53, 'Indonesia', 'Aluminum', 725),
(54, 'Mexico', 'Aluminum', 763),
(55, 'Serbia', 'Stone', 691),
(56, 'China', 'Vinyl', 804),
(57, 'China', 'Plastic', 793),
(58, 'Philippines', 'Brass', 744),
(59, 'Indonesia', 'Stone', 762),
(60, 'Brazil', 'Plexiglass', 777),
(61, 'South Africa', 'Wood', 752),
(62, 'Peru', 'Granite', 736),
(63, 'Serbia', 'Plastic', 753),
(64, 'China', 'Aluminum', 713),
(65, 'Poland', 'Wood', 784),
(66, 'China', 'Steel', 731),
(67, 'Cameroon', 'Stone', 771),
(68, 'Portugal', 'Aluminum', 720),
(69, 'Argentina', 'Steel', 746),
(70, 'Canada', 'Stone', 765),
(71, 'China', 'Plastic', 713),
(72, 'China', 'Rubber', 792),
(73, 'Greece', 'Plexiglass', 764),
(74, 'Peru', 'Steel', 750),
(75, 'Croatia', 'Steel', 767),
(76, 'Peru', 'Aluminum', 740),
(77, 'China', 'Plastic', 721),
(78, 'Philippines', 'Plastic', 715),
(79, 'Russia', 'Rubber', 738),
(80, 'Belarus', 'Vinyl', 776),
(81, 'China', 'Stone', 752),
(82, 'Tajikistan', 'Plexiglass', 714),
(83, 'Philippines', 'Aluminum', 745),
(84, 'China', 'Plexiglass', 749),
(85, 'China', 'Vinyl', 730),
(86, 'Egypt', 'Glass', 724),
(87, 'Russia', 'Rubber', 734),
(88, 'United States', 'Stone', 754),
(89, 'China', 'Vinyl', 754),
(90, 'Brazil', 'Wood', 731),
(91, 'Belarus', 'Wood', 738),
(92, 'Albania', 'Aluminum', 766),
(93, 'Ukraine', 'Stone', 715),
(94, 'Poland', 'Vinyl', 784),
(95, 'Russia', 'Wood', 791),
(96, 'Indonesia', 'Aluminum', 751),
(97, 'Russia', 'Plexiglass', 727),
(98, 'Yemen', 'Plastic', 716),
(99, 'Czech Republic', 'Stone', 745),
(100, 'Honduras', 'Stone', 751);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `imports`
--
ALTER TABLE `imports`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `imports`
--
ALTER TABLE `imports`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
