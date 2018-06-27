-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 27-06-2018 a las 01:21:09
-- Versión del servidor: 5.7.22-0ubuntu18.04.1
-- Versión de PHP: 7.1.11-0ubuntu0.17.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `luisadales`
--
CREATE DATABASE IF NOT EXISTS `luisadales` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;
USE `luisadales`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `cedula` varchar(9) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` varchar(11) COLLATE utf8_spanish2_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `usuario` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `clave` varchar(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `nombre`, `apellido`, `cedula`, `telefono`, `correo`, `usuario`, `clave`) VALUES
(1, 'Jose', 'Lopez', '25887282', '04144444444', 'jflo1928@servidor.com', 'jose', 'jose'),
(2, 'admin', 'admin', '0000000', '000000000', '0000@000', 'admin', 'admin'),
(27, 'iraida', 'loepz', '10669419', '', 'irajose@asd.com', 'iraida', '123'),
(28, 'Gibert', 'Carrera Morey', '23795320', '04163333333', 'gibert@carrera', 'gibert', '123'),
(29, 'Luis', 'Nadales', '200000000', '0000000000', 'kluis@nafales.com', 'luis', 'luis');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pruebas`
--

CREATE TABLE `pruebas` (
  `id` int(11) NOT NULL,
  `r1` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `r2` tinyint(1) NOT NULL,
  `r3` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `r4` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `r5` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `calificacion` tinyint(3) NOT NULL,
  `revisada` tinyint(1) NOT NULL,
  `id_estudiante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `pruebas`
--

INSERT INTO `pruebas` (`id`, `r1`, `r2`, `r3`, `r4`, `r5`, `calificacion`, `revisada`, `id_estudiante`) VALUES
(1, 'asdsa', 2, 'dasdasd asdsad sadasdasd as', 'n ose', '2', 99, 1, 1),
(2, 'no tengo nu la mas remote idea', 1, 'verga mano, no se , lo lei pero se me olvido. jajajaj q nbeta', 'nose', '1, 2, 3', 87, 1, 28),
(3, 'blablablablablablabla', 2, 'blablablablablablablablablablablablablablablablablablablablablablablablablabla', 'blablablablablablablablablabla', '1', 88, 1, 27),
(4, 'bla', 1, 'blabla', 'blablablablablablablablablabla', '1', 88, 1, 27);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `clave` varchar(10) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `clave`) VALUES
('luis', 'nadales');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cedula` (`cedula`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- Indices de la tabla `pruebas`
--
ALTER TABLE `pruebas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `pruebas`
--
ALTER TABLE `pruebas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
