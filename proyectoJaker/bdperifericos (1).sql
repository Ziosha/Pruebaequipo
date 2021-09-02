-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3308
-- Tiempo de generación: 02-09-2021 a las 02:09:21
-- Versión del servidor: 8.0.18
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdperifericos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

DROP TABLE IF EXISTS `carrito`;
CREATE TABLE IF NOT EXISTS `carrito` (
  `idCompra` int(11) NOT NULL AUTO_INCREMENT,
  `idUsu` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `idP` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`idCompra`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grafica`
--

DROP TABLE IF EXISTS `grafica`;
CREATE TABLE IF NOT EXISTS `grafica` (
  `idP` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `modelo` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `capacidad` int(11) NOT NULL,
  `disipador` varchar(12) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `costo` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `disponible` tinyint(1) NOT NULL,
  `imagen` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`idP`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `grafica`
--

INSERT INTO `grafica` (`idP`, `modelo`, `capacidad`, `disipador`, `costo`, `stock`, `disponible`, `imagen`) VALUES
('gra322', 'rtx2060', 1830, 'ventilador', 3283, 4, 1, 'rtx2060.jpg'),
('gra3454', 'RX 570 GAMING X 4G', 1281, 'ventilador', 2196, 3, 1, 'rx570.jpg'),
('gra43534', 'RTX3070 V2 OC GDDR6', 1800, 'Ventilador', 6380, 4, 1, 'rx3070.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `headset`
--

DROP TABLE IF EXISTS `headset`;
CREATE TABLE IF NOT EXISTS `headset` (
  `idP` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `microfono` tinyint(1) NOT NULL,
  `calSonido` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cancelSonido` tinyint(1) NOT NULL,
  `coneccion` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `costo` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `disponible` tinyint(1) NOT NULL,
  `marca` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `imagen` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`idP`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `headset`
--

INSERT INTO `headset` (`idP`, `microfono`, `calSonido`, `cancelSonido`, `coneccion`, `costo`, `stock`, `disponible`, `marca`, `imagen`) VALUES
('aud434', 1, 'Buena', 0, 'inalambrica', 6150, 4, 1, 'corsair H2100', 'h2100.jpg'),
('aud2343', 1, 'Buena', 1, 'Directa', 85, 3, 1, 'KOTON G2000 PRO', 'G200PRO.jpg'),
('aud5432', 1, 'media', 0, 'inalambrica', 1373, 3, 1, 'LogitechH820e', 'H820e.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `monitor`
--

DROP TABLE IF EXISTS `monitor`;
CREATE TABLE IF NOT EXISTS `monitor` (
  `idP` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `marca` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `tamanio` int(11) NOT NULL,
  `frecuencia` int(11) NOT NULL,
  `costo` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `disponible` tinyint(1) NOT NULL,
  `imagen` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`idP`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `monitor`
--

INSERT INTO `monitor` (`idP`, `marca`, `tamanio`, `frecuencia`, `costo`, `stock`, `disponible`, `imagen`) VALUES
('mon654', 'SceptreE248W-19203R ', 24, 60, 988, 3, 1, 'E248W.jpg'),
('mon5643', 'Dell SE2422HX ', 24, 75, 1663, 3, 1, 'SE2422HX.jpg'),
('mon5783', 'Philips 271E1S', 27, 75, 1155, 5, 1, '271E1S.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motherboard`
--

DROP TABLE IF EXISTS `motherboard`;
CREATE TABLE IF NOT EXISTS `motherboard` (
  `idP` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `chipset` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `zocalo` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ranurasRAM` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nroRanurasRam` int(11) NOT NULL,
  `ranurasExpansion` int(11) NOT NULL,
  `costo` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `disponible` tinyint(1) NOT NULL,
  `imagen` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`idP`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mouse`
--

DROP TABLE IF EXISTS `mouse`;
CREATE TABLE IF NOT EXISTS `mouse` (
  `idP` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `marca` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `DPI` int(11) NOT NULL,
  `costo` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `disponible` tinyint(1) NOT NULL,
  `imagen` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`idP`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ram`
--

DROP TABLE IF EXISTS `ram`;
CREATE TABLE IF NOT EXISTS `ram` (
  `idP` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `marca` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `capacidad` int(11) NOT NULL,
  `generacion` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `costo` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `disponible` tinyint(1) NOT NULL,
  `imagen` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`idP`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `teclado`
--

DROP TABLE IF EXISTS `teclado`;
CREATE TABLE IF NOT EXISTS `teclado` (
  `idP` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `mecanico` tinyint(1) NOT NULL,
  `costo` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `disponible` tinyint(1) NOT NULL,
  `modelo` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `imagen` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`idP`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomUsu` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pass` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `correo` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
