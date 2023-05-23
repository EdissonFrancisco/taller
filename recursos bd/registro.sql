-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 23-05-2023 a las 21:31:14
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `nit_cc` int(11) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `clave` varchar(200) NOT NULL,
  `estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idCliente`, `nombre`, `apellido`, `nit_cc`, `direccion`, `correo`, `clave`, `estado`) VALUES
(1, 'Edisson', 'Acero', 123678, 'calle 6 a', 'eaf@123.com', 'e46880d3520157f87853f3cb4fb92041', NULL),
(2, 'Carlos', 'Camacho', 12358, 'calle 6 a 45 N', 'cc@123.com', '4ab5a02354bf263fd20b5ecb36fab431', NULL),
(3, 'Andrea', 'Rincon', 85246, 'calle 6 a 56 b 65 S', 'ar@123.com', 'b9130c656a1cd6feb47de244145189c1', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telCliente`
--

CREATE TABLE `telCliente` (
  `idTelCli` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `telefono` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `telCliente`
--

INSERT INTO `telCliente` (`idTelCli`, `idCliente`, `telefono`) VALUES
(1, 1, 301333900),
(2, 2, 12345678),
(3, 3, 357194682);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indices de la tabla `telCliente`
--
ALTER TABLE `telCliente`
  ADD PRIMARY KEY (`idTelCli`),
  ADD KEY `idCliente` (`idCliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `telCliente`
--
ALTER TABLE `telCliente`
  MODIFY `idTelCli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `telCliente`
--
ALTER TABLE `telCliente`
  ADD CONSTRAINT `telCliente_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
