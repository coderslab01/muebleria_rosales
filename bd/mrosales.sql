-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 18-05-2019 a las 21:01:06
-- Versión del servidor: 5.7.21
-- Versión de PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mrosales`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `dia_pago` varchar(50) NOT NULL,
  `cobrador` varchar(11) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre`, `direccion`, `ciudad`, `dia_pago`, `cobrador`, `fecha`) VALUES
(17, 'Gato', 'perro 43 ', 'cuautitlan izcalli', 'martes', 'Roman ', '2019-05-17'),
(18, 'astiel', 'tropicos 3', 'mexico', 'lunes', 'Roman', '2019-05-18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

DROP TABLE IF EXISTS `pago`;
CREATE TABLE IF NOT EXISTS `pago` (
  `id_pago` int(11) NOT NULL AUTO_INCREMENT,
  `id_venta` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `dia` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `abono` int(100) NOT NULL,
  `saldo_final` int(100) NOT NULL,
  PRIMARY KEY (`id_pago`),
  KEY `id_producto` (`id_venta`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `pago`
--

INSERT INTO `pago` (`id_pago`, `id_venta`, `id_cliente`, `dia`, `fecha`, `abono`, `saldo_final`) VALUES
(1, 1, 0, 'viernes', '2019-04-05', 200, 650),
(2, 1, 18, 'lunes', '2019-05-31', 100, 1450),
(3, 1, 18, 'lunes', '2019-06-01', 200, 1250),
(4, 1, 18, 'lunes', '2019-06-21', 300, 950);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `usuario`, `pass`) VALUES
(1, 'roman rosales', 'roman', 'roman2019');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

DROP TABLE IF EXISTS `venta`;
CREATE TABLE IF NOT EXISTS `venta` (
  `id_venta` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `cobrador` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `dia_pago` varchar(100) NOT NULL,
  `cuno` int(11) NOT NULL,
  `cdos` int(11) NOT NULL,
  `ctres` int(11) NOT NULL,
  `puno` varchar(100) NOT NULL,
  `pdos` varchar(100) NOT NULL,
  `ptres` varchar(100) NOT NULL,
  `tuno` int(11) NOT NULL,
  `tdos` int(11) NOT NULL,
  `ttres` int(11) NOT NULL,
  `abono` int(11) NOT NULL,
  `saldo` int(11) NOT NULL,
  PRIMARY KEY (`id_venta`),
  KEY `id_cliente` (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`id_venta`, `id_cliente`, `nombre`, `direccion`, `ciudad`, `cobrador`, `fecha`, `dia_pago`, `cuno`, `cdos`, `ctres`, `puno`, `pdos`, `ptres`, `tuno`, `tdos`, `ttres`, `abono`, `saldo`) VALUES
(1, 18, 'astiel', 'tropicos 3', 'mexico', 'Roman', '2019-06-21', 'lunes', 5, 2, 60, 'mesas', 'sillas', 'camas', 250, 350, 35, 300, 950);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
