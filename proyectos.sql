-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2018 a las 21:42:36
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.1.21

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
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `texto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen1` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen2` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen3` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen4` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen5` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen6` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creado_b` timestamp NULL DEFAULT NULL,
  `modificado_b` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
