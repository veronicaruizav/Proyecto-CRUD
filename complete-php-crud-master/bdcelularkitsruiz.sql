-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-10-2023 a las 19:35:33
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdcelularkitsruiz`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `iniciarsesion`
--

CREATE TABLE `iniciarsesion` (
  `id` int(9) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `iniciarsesion`
--

INSERT INTO `iniciarsesion` (`id`, `nombre`, `correo`, `usuario`, `password`) VALUES
(1, 'leonardo gonzales', 'leo@lgmail.com', 'leo', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'Eliseo Nava', 'nava@gmail.com', 'enanito', '827ccb0eea8a706c4c34a16891f84e7b'),
(3, 'veronica ruiz', 'vero@gmail.com', 'verito', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id` int(11) NOT NULL,
  `idproveedor` int(10) NOT NULL,
  `origen` varchar(50) NOT NULL,
  `transporte` varchar(50) NOT NULL,
  `telefono` int(10) NOT NULL,
  `ubicacion` varchar(50) NOT NULL,
  `empresa` varchar(50) NOT NULL,
  `calidad` varchar(50) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `login_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id`, `idproveedor`, `origen`, `transporte`, `telefono`, `ubicacion`, `empresa`, `calidad`, `categoria`, `login_id`) VALUES
(15, 1, 'ESTAS BIEN WEY]', 'camion', 2147483647, 'xdxd', 'samsung', 'vero esta bien wey', 'electronica', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `iniciarsesion`
--
ALTER TABLE `iniciarsesion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_products_1` (`login_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `iniciarsesion`
--
ALTER TABLE `iniciarsesion`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD CONSTRAINT `FK_products_1` FOREIGN KEY (`login_id`) REFERENCES `iniciarsesion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
