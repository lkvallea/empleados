-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-03-2024 a las 12:01:58
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `leva`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domicilio_empleados`
--

CREATE TABLE `domicilio_empleados` (
  `id` int(11) NOT NULL,
  `id_empleado` int(11) NOT NULL,
  `no_ext` varchar(10) DEFAULT NULL,
  `no_int` varchar(10) DEFAULT NULL,
  `calle1` varchar(50) DEFAULT NULL,
  `calle2` varchar(50) DEFAULT NULL,
  `colonia` varchar(50) DEFAULT NULL,
  `municipio` varchar(50) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `codigo_postal` varchar(10) DEFAULT NULL,
  `pais` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `domicilio_empleados`
--

INSERT INTO `domicilio_empleados` (`id`, `id_empleado`, `no_ext`, `no_int`, `calle1`, `calle2`, `colonia`, `municipio`, `estado`, `codigo_postal`, `pais`) VALUES
(1, 22, '2', '5', 'callle', 'Avenida', 'colima', 'Ecaterror', 'Mexico', '02256', 'Mexico'),
(4, 23, '1', '2', 'calle', 'calle2', 'Colonia', 'CDMX', 'Morelos', '11300', 'México');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id_empleado` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `mail` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `puesto` varchar(25) NOT NULL,
  `nacimiento` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id_empleado`, `nombre`, `mail`, `password`, `puesto`, `nacimiento`) VALUES
(1, 'Luis', 'Luis', '$2y$10$6d74cu1v6b2dAYAiDiCcRupTHthWLjqxK.DUeBBK0.Sl.2nTE/iLq', 'director', '2000-01-01 00:00:00'),
(5, 'Luis', 'correo@corre.com', '$2y$10$Zu015TETBiLdlGigDAy6heaO7B25kk88gUft8lXTblO3lTdrkPS8q', 'director', '2000-01-01 00:00:00'),
(6, 'Luis', 'correo1@corre.com', '$2y$10$snwB5iHEPYkYlwitAGqyb.RbD3u4IDT/TZeVDQgdSHVEyg4J3e2Xq', 'director', '2000-01-01 00:00:00'),
(22, 'LUIS ENRIQUE', 'correo6@corre.com', '$2y$10$IjyH9fCPvKF4AT2OmicAFeI1/KI/WSyuubilhiJfiqTthkZ8i.r1m', 'Director', '2024-03-19 00:00:00'),
(23, 'LUIS ENRIQUE', 'correo8@corre.com', '$2y$10$5ot2tVcGsgKxPkE3wVsyNu07iM/o/YN8jvLvZKNb2WSX7oGWtXPMq', 'Gerente', '2024-03-12 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habilidades`
--

CREATE TABLE `habilidades` (
  `id_habilidad` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habilidades_empleados`
--

CREATE TABLE `habilidades_empleados` (
  `id` int(11) NOT NULL,
  `id_empleado` int(11) NOT NULL,
  `id_habilidad` int(11) NOT NULL,
  `calificacion` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puestos`
--

CREATE TABLE `puestos` (
  `id_puesto` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `puestos`
--

INSERT INTO `puestos` (`id_puesto`, `nombre`) VALUES
(1, 'Director'),
(2, 'Gerente'),
(3, 'Dev'),
(4, 'QA'),
(5, 'UX');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `domicilio_empleados`
--
ALTER TABLE `domicilio_empleados`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `empleado` (`id_empleado`) USING BTREE;

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id_empleado`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- Indices de la tabla `habilidades`
--
ALTER TABLE `habilidades`
  ADD PRIMARY KEY (`id_habilidad`);

--
-- Indices de la tabla `habilidades_empleados`
--
ALTER TABLE `habilidades_empleados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `puestos`
--
ALTER TABLE `puestos`
  ADD PRIMARY KEY (`id_puesto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `domicilio_empleados`
--
ALTER TABLE `domicilio_empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `habilidades`
--
ALTER TABLE `habilidades`
  MODIFY `id_habilidad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `habilidades_empleados`
--
ALTER TABLE `habilidades_empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `puestos`
--
ALTER TABLE `puestos`
  MODIFY `id_puesto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
