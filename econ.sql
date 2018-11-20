-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2018 a las 14:15:45
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `econ`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banner`
--

CREATE TABLE `banner` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `texto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` enum('PUBLICADO','ELIMINADO') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'PUBLICADO',
  `imagen1` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen2` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creado_b` timestamp NULL DEFAULT NULL,
  `modificado_b` timestamp NULL DEFAULT NULL,
  `precio` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `banner`
--

INSERT INTO `banner` (`id`, `titulo`, `descripcion`, `texto`, `estado`, `imagen1`, `imagen2`, `creado_b`, `modificado_b`, `precio`) VALUES
(1, 'Hola mundo', 'Hola mundo 2', 'Hola mundo 3', 'PUBLICADO', 'aaaaaaaaaa', 'aaaaaaaaaaaaa', NULL, NULL, '10'),
(2, 'asdas', 'Solo guaricos', '<p>asd</p>\r\n', 'PUBLICADO', 'Captura1.PNG', NULL, NULL, NULL, '12'),
(3, 'asdas', 'Solo guaricos', '<p>asdasd</p>\r\n', 'PUBLICADO', 'Captura_29PNG.PNG', 'Captura21.PNG', NULL, NULL, '12'),
(4, 'asdasd', 'Luces rojas verdes azules y moradas', '<p>adawwww</p>\r\n', 'PUBLICADO', 'Captura51.PNG', 'Captura6.PNG', NULL, NULL, '12.25'),
(5, 'qqqqq', 'Peques animalitos', '<p>zxczxc</p>\r\n', 'PUBLICADO', NULL, NULL, NULL, NULL, '99'),
(6, 'qqqqq', 'Peques animalitos', '<p>zxczxc</p>\r\n', 'PUBLICADO', NULL, NULL, NULL, NULL, '99'),
(7, 'qqqqq', 'Peques animalitos', '<p>zxczxc</p>\r\n', 'PUBLICADO', NULL, NULL, NULL, NULL, '99'),
(8, 'qqqqq', 'Peques animalitos', '<p>zxczxc</p>\r\n', 'PUBLICADO', NULL, NULL, NULL, NULL, '99'),
(9, 'ave', 'ave 12', '<p>asdasd</p>\r\n', 'PUBLICADO', NULL, NULL, NULL, NULL, '22'),
(10, 'ave', 'ave 12', '<p>asdasd</p>\r\n', 'PUBLICADO', 'Captura17.PNG', 'Captura24.PNG', NULL, NULL, '22'),
(11, 'Robert', 'Anita', '<p>Anita&nbsp;</p>\r\n', 'PUBLICADO', 'Captura_29PNG1.PNG', 'Captura241.PNG', NULL, NULL, '2'),
(12, 'Robert', 'Anita', '<p>Anita&nbsp;</p>\r\n', 'PUBLICADO', 'Captura_29PNG2.PNG', 'Captura242.PNG', NULL, NULL, '2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
