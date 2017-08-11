-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-08-2017 a las 16:19:52
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `conferencias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conferencias`
--

CREATE TABLE `conferencias` (
  `id` int(11) NOT NULL,
  `tematicas_id` int(11) DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `duracion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `conferencias`
--

INSERT INTO `conferencias` (`id`, `tematicas_id`, `nombre`, `descripcion`, `duracion`) VALUES
(1, 1, 'Writing Fast Tests Against Enterprise Rails', 'Ruby Errors from Mismatched Gem Versions', 60),
(3, 1, 'Ruby Errors from Mismatched Gem Versions', 'Ruby Errors from Mismatched Gem Versions', 45),
(4, 1, 'Rails Magic', 'Rails Magic', 15),
(5, 1, 'Ruby on Rails: Why We Should Move On', 'Ruby on Rails: Why We Should Move On', 45),
(6, 1, 'Ruby vs. Clojure for Back-End Development', 'Ruby vs. Clojure for Back-End Development', 60),
(7, 1, 'Ruby on Rails Legacy App Maintenance', 'Ruby on Rails Legacy App Maintenance', 15),
(8, 1, 'Common Ruby Errors', 'Common Ruby Errors', 60),
(9, 1, 'Rails for Python Developers lightning', 'Rails for Python Developers lightning', 45),
(10, 1, 'Programming Ruby: The Pragmatic Programmer\'s Guide', 'Programming Ruby: The Pragmatic Programmer\'s Guide', 30),
(11, 1, 'Agile Web Development with Rails', 'Agile Web Development with Rails', 60),
(12, 1, 'Ruby cookbook', 'Ruby cookbook', 30),
(13, 1, 'Beginning Ruby', 'Beginning Ruby', 60),
(14, 2, 'Symfony new Framework', 'Symfony new Framework', 10),
(15, 2, 'The flexible, fast, and secure template engine for PHP', 'The flexible, fast, and secure template engine for PHP', 30),
(16, 1, 'Ruby on Rails Tutorial: Learn Web Development with Rails', 'Ruby on Rails Tutorial: Learn Web Development with Rails', 15),
(17, 2, 'Symfony is a set of reusable', 'Symfony is a set of reusable', 60);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tematicas`
--

CREATE TABLE `tematicas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `horas_dia` int(11) DEFAULT NULL,
  `almuerzo` int(11) DEFAULT NULL,
  `hora_tarde` int(11) DEFAULT NULL,
  `hora_inicio` time DEFAULT NULL,
  `hora_fin` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tematicas`
--

INSERT INTO `tematicas` (`id`, `nombre`, `horas_dia`, `almuerzo`, `hora_tarde`, `hora_inicio`, `hora_fin`) VALUES
(1, 'Ruby', 9, 12, 17, '09:00:00', '17:00:00'),
(2, 'PHP', 9, 12, 17, '09:00:00', '17:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `conferencias`
--
ALTER TABLE `conferencias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_conferencias_tematicas_idx` (`tematicas_id`);

--
-- Indices de la tabla `tematicas`
--
ALTER TABLE `tematicas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `conferencias`
--
ALTER TABLE `conferencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `tematicas`
--
ALTER TABLE `tematicas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `conferencias`
--
ALTER TABLE `conferencias`
  ADD CONSTRAINT `FK_41DA3CBEEE97FABC` FOREIGN KEY (`tematicas_id`) REFERENCES `tematicas` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
