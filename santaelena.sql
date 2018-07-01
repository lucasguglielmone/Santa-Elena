-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-07-2018 a las 21:17:23
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `santaelena`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(2) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nombre`) VALUES
(1, 'ARROLLADITOS PRIMAVERA'),
(2, 'BRIOCHE'),
(3, 'BROCHETTE CAPRESSE'),
(4, 'CALENTITOS'),
(5, 'CAZUELA'),
(6, 'CHIPS (clasicos o con amapola o sesamo)'),
(7, 'CIABATTA'),
(8, 'DULCE'),
(9, 'FIJACITAS'),
(10, 'FOSFORITOS (glase o azucarados)'),
(11, 'LOCATELLIS'),
(12, 'MESA DE FIAMBRES'),
(13, 'MESA DE QUESOS'),
(14, 'MINI ARABES CAPRESSE'),
(15, 'MINI MEDIALUNAS'),
(16, 'MINI NEGRITOS'),
(17, 'MINI TARTAS'),
(18, 'MINI VOUL-AU-VENT'),
(19, 'PANES MEDITERRANEOS'),
(20, 'PANES SABORIZADOS RELLENOS (14 sabores)'),
(21, 'PLEXALES'),
(22, 'PORTENITOS'),
(23, 'ROSETITAS'),
(24, 'SACRAMENTOS (salado o dulce)'),
(25, 'SALADITOS VARIOS'),
(26, 'SIMPLES BLANCOS O NEGROS'),
(27, 'TARTELETAS DE QUESO'),
(28, 'TORTAS'),
(29, 'TRAVIATAS'),
(30, 'TRENZITAS'),
(31, 'TRIPLES BLANCOS O NEGROS (base jamon cocido / jamon crudo / pavita / queso)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `precio`
--

CREATE TABLE `precio` (
  `precio` int(3) NOT NULL,
  `id_producto` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `precio`
--

INSERT INTO `precio` (`precio`, `id_producto`) VALUES
(30, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(4) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `id_categoria` int(2) NOT NULL,
  `dulosal` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre`, `id_categoria`, `dulosal`) VALUES
(1, 'Facturas artesanales de manteca y grasa', 8, 1),
(2, 'Mini facturas', 8, 1),
(3, 'Facturas porteñas', 8, 1),
(4, 'Arrolladitos de dulce de leche', 8, 1),
(5, 'Pasta frola', 8, 1),
(6, 'Piquitos (picos de dulce de leche cubiertos con chocolate / individuales y tarteletas)', 8, 1),
(7, 'Florentinos', 8, 1),
(8, 'Lenguas de gato', 8, 1),
(9, 'Mini scons', 8, 1),
(10, 'Mini polvorones', 8, 1),
(11, 'Mini palmeritas', 8, 1),
(12, 'Masas finas', 8, 1),
(13, 'Masas secas', 8, 1),
(14, 'Tartas dulces (frutilla / durazno / kiwi / banana / manzana)', 8, 1),
(15, 'Amerettis', 8, 1),
(16, 'Mini rogelitos', 8, 1),
(17, 'Mini brownies', 8, 1),
(18, 'Linea alfajores mini en todas las variedades', 8, 1),
(19, 'Mini colaciones', 8, 1),
(20, 'Pan dulce', 8, 1),
(21, 'Stolen', 8, 1),
(22, 'Lemon pie', 28, 1),
(23, 'Strudell', 28, 1),
(24, 'Milhojas', 28, 1),
(25, 'Rogel', 28, 1),
(26, 'Imperial ruso', 28, 1),
(27, 'Isla flotante con crema sambayon', 28, 1),
(28, 'Merengues dulce de leche y frutillas, crema y merengue', 28, 1),
(29, 'Selva negra', 28, 1),
(30, 'Morena (bizcochuelo de chocolate y dulce de leche)', 28, 1),
(31, 'Manzana con canela', 28, 1),
(32, 'Ricota', 28, 1),
(33, 'Tropical (bizcochuelo de vainilla relleno con crema y dulce de leche cubierta de 4 variedades de frutas)', 28, 1),
(34, 'Mouse de chocolate', 28, 1),
(35, 'Mouse de frutilla', 28, 1),
(36, 'Cup cakes', 28, 1),
(37, 'Torta de coco', 28, 1),
(38, 'Torta molino', 28, 1),
(39, 'Torta ricota con frutilla', 28, 1),
(40, 'Torta de brownies', 28, 1),
(41, 'Linea de mini masas', 28, 1),
(42, 'Moussetas', 28, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
