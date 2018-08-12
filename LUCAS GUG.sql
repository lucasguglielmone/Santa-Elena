-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-08-2018 a las 19:43:18
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
(1, 'TRIPLES BLANCOS O NEGROS (base jamon cocido / jamon crudo / pavita / queso)'),
(2, 'SIMPLES BLANCOS O NEGROS'),
(3, 'FOSFORITOS (glasé o azucarados)'),
(4, 'CHIPS (clasicos o con amapola o sesamo)'),
(5, 'TRAVIATAS'),
(6, 'SACRAMENTOS (salado o dulce)'),
(7, 'MINI MEDIALUNAS'),
(8, 'PANES SABORIZADOS RELLENOS (14 sabores)'),
(9, 'MINI NEGRITOS'),
(10, 'TRENZITAS'),
(11, 'ARROLLADITOS PRIMAVERA'),
(12, 'PORTEÑITOS'),
(13, 'PLEXALES'),
(14, 'BRIOCHE'),
(15, 'SALADITOS VARIOS'),
(16, 'MINI VOUL-AU-VENT'),
(17, 'FIJACITAS'),
(18, 'ROSETITAS'),
(19, 'MINI ARABES CAPRESSE'),
(20, 'PANES MEDITERRANEOS'),
(21, 'BROCHETTE CAPRESSE'),
(22, 'TARTELETAS DE QUESO'),
(23, 'LOCATELLIS'),
(24, 'MESA DE QUESOS'),
(25, 'MESA DE FIAMBRES'),
(26, 'CAZUELA'),
(27, 'MINI TARTAS'),
(28, 'CIABATTA'),
(29, 'CALENTITOS'),
(30, 'DULCE'),
(31, 'TORTAS');

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
(30, 1),
(1, 66),
(2, 67),
(3, 68),
(4, 69),
(5, 70),
(6, 71),
(7, 72),
(8, 73),
(9, 74),
(10, 75),
(11, 76),
(12, 77),
(13, 78),
(14, 79),
(15, 80),
(16, 81),
(17, 82),
(18, 83),
(19, 84),
(20, 85),
(21, 86),
(24, 87),
(25, 88),
(26, 89),
(27, 90),
(28, 91),
(29, 92),
(30, 93),
(31, 94),
(32, 95),
(33, 96),
(34, 97),
(35, 98),
(36, 99),
(37, 100),
(38, 101),
(39, 102),
(40, 103),
(41, 104),
(42, 105),
(43, 106),
(44, 107),
(1, 1),
(4, 2),
(7, 3),
(8, 4),
(11, 5),
(12, 6),
(13, 7),
(14, 8),
(17, 9),
(18, 10),
(21, 11),
(22, 12),
(23, 13),
(24, 14),
(27, 15),
(28, 16),
(29, 17),
(32, 18),
(33, 19),
(34, 20),
(37, 21),
(38, 22),
(39, 23),
(42, 24),
(43, 25),
(46, 26),
(47, 27),
(48, 28),
(51, 29),
(54, 30),
(55, 31),
(58, 32),
(61, 33),
(65, 35),
(66, 36),
(67, 37),
(70, 38),
(73, 39),
(76, 40),
(79, 41),
(82, 42),
(85, 43),
(88, 44),
(91, 45),
(94, 46),
(97, 47),
(98, 48),
(99, 49),
(100, 50),
(101, 51),
(104, 52),
(107, 53),
(110, 54),
(111, 55),
(112, 56),
(113, 57),
(114, 58),
(115, 59),
(116, 60),
(117, 61),
(118, 62),
(119, 63),
(120, 64),
(121, 65);

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
(1, 'Combinaciones: queso / anana / tomate / huevo / palmito / aceituna / apio / lechuga / morron / pickles / choclo / atun / berenjenas / capresse / ancho', 1, 1),
(2, 'Jamon / Queso', 2, 1),
(3, 'Jamon cocido y queso', 3, 1),
(4, 'Roquefort y apio', 3, 1),
(5, 'Jamon cocido y queso', 4, 1),
(6, 'Jamon crudo y queso', 4, 1),
(7, 'Jamon crudo y tomate', 4, 1),
(8, 'Pavita y tomate', 4, 1),
(9, 'Vithel tone', 5, 1),
(10, 'Jamon crudo y tomate', 5, 1),
(11, 'Jamon cocido y queso', 6, 1),
(12, 'Jamon crudo y tomate', 6, 1),
(13, 'Pavita', 6, 1),
(14, 'Pollo con tomate', 6, 1),
(15, 'Jamon cocido y queso', 7, 1),
(16, 'Jamon cocido y tomate', 7, 1),
(17, 'Jamon crudo y tomate', 7, 1),
(18, 'Jamon cocidoy queso', 8, 1),
(19, 'Jamon crudo y tomate', 8, 1),
(20, 'Pancitos de queso con jamon palmitos y salsa golf', 8, 1),
(21, 'Jamon crudo y tomate', 9, 1),
(22, 'Jamon crudo y queso', 9, 1),
(23, 'Jamon crudo y palmitos', 9, 1),
(24, 'Jamon crudo y queso', 10, 1),
(25, 'Jamon crudo y tomate', 10, 1),
(26, 'Jamon cocido y queso', 11, 1),
(27, 'Atun', 11, 1),
(28, 'Pollo', 11, 1),
(29, 'Leverbush y pepino', 12, 1),
(30, 'Jamon cocido y queso', 13, 1),
(31, 'Pastron y pepino', 13, 1),
(32, 'Jamon cocido y queso', 14, 1),
(33, 'Base tarteleta / pionono / queso blanco / atun / caviar / salmon / palmitos / pollo / palta / roquefort / jamon cocido y queso / humita / agridulces', 15, 1),
(34, 'Crema de choclo', 16, 1),
(35, 'Pollo', 16, 1),
(36, 'Atun', 16, 1),
(37, 'Crema de palta', 16, 1),
(38, 'Peceto', 17, 1),
(39, 'Matambre Casero', 18, 1),
(40, 'Muzzarella, tomate y albahaca', 19, 1),
(41, 'Panes saborizados en albahaca, rucula, tomates secos y muzzarella', 20, 1),
(42, 'Palillos con queso, tomate y albahaca', 21, 1),
(43, 'Base de queso con queso blanco tomate cherry y aceitunas negras', 22, 1),
(44, 'Con pollo y berenjena', 23, 1),
(45, 'Diversas clases de quesos acompañados con canasta de panes, frutas y salsas', 24, 1),
(46, 'Diversas clases de fiambres jamon glase, quesos y carnes, acompañados con canasta de panes, frutas y salsas', 25, 1),
(47, 'Pollo con arroz o mini papines', 26, 1),
(48, 'Lomo con arroz o mini papines', 26, 1),
(49, 'Verdura', 26, 1),
(50, 'Ravioles', 26, 1),
(51, 'Risotos', 26, 1),
(52, 'Tamaño saladitos / presentados en pirotines ( 11 variedades)', 27, 1),
(53, 'Rucula, tomate cherry, jamon y queso', 28, 1),
(54, 'Brochettes de carne', 29, 1),
(55, 'Brochettes de ciruela con panceta', 29, 1),
(56, 'Brochettes de riñoncitos con panceta', 29, 1),
(57, 'Bombitas de queso', 29, 1),
(58, 'Barquitos de humita', 29, 1),
(59, 'Empanaditas (masa hojaldre o criolla, varios gustos)', 29, 1),
(60, 'Sambuezas (bocaditos de souffle de queso)', 29, 1),
(61, 'Calentitos de verdura', 29, 1),
(62, 'Croquetitas de carne, jamon cocido y queso', 29, 1),
(63, 'Dedos de pollo', 29, 1),
(64, 'Dedos de verdura', 29, 1),
(65, 'Dedos de carne', 29, 1),
(66, 'Facturas artesanales de manteca y grasa', 30, 2),
(67, 'Mini facturas', 30, 2),
(68, 'Facturas porteñas', 30, 2),
(69, 'Arrolladitos de dulce de leche', 30, 2),
(70, 'Pasta frola', 30, 2),
(71, 'Piquitos (picos de dulce de leche cubiertos con chocolate / individuales y tarteletas)', 30, 2),
(72, 'Florentinos', 30, 2),
(73, 'Lenguas de gato', 30, 2),
(74, 'Mini scons', 30, 2),
(75, 'Mini polvorones', 30, 2),
(76, 'Mini palmeritas', 30, 2),
(77, 'Masas finas', 30, 2),
(78, 'Masas secas', 30, 2),
(79, 'Tartas dulces (frutilla / durazno / kiwi / banana / manzana)', 30, 2),
(80, 'Amerettis', 30, 2),
(81, 'Mini rogelitos', 30, 2),
(82, 'Mini brownies', 30, 2),
(83, 'Linea alfajores mini en todas las variedades', 30, 2),
(84, 'Mini colaciones', 30, 2),
(85, 'Pan dulce', 30, 2),
(86, 'Stolen', 30, 2),
(87, 'Lemon pie', 31, 2),
(88, 'Strudell', 31, 2),
(89, 'Milhojas', 31, 2),
(90, 'Rogel', 31, 2),
(91, 'Imperial ruso', 31, 2),
(92, 'Isla flotante con crema sambayon', 31, 2),
(93, 'Merengues dulce de leche y frutillas, crema y merengue', 31, 2),
(94, 'Selva negra', 31, 2),
(95, 'Morena (bizcochuelo de chocolate y dulce de leche)', 31, 2),
(96, 'Manzana con canela', 31, 2),
(97, 'Ricota', 31, 2),
(98, 'Tropical (bizcochuelo de vainilla relleno con crema y dulce de leche cubierta de 4 variedades de frutas)', 31, 2),
(99, 'Mouse de chocolate', 31, 2),
(100, 'Mouse de frutilla', 31, 2),
(101, 'Cup cakes', 31, 2),
(102, 'Torta de coco', 31, 2),
(103, 'Torta molino', 31, 2),
(104, 'Torta ricota con frutilla', 31, 2),
(105, 'Torta de brownies', 31, 2),
(106, 'Linea de mini masas', 31, 2),
(107, 'Moussetas', 31, 2);

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
  MODIFY `id_producto` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
