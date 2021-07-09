-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-07-2021 a las 15:09:02
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `juguetes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id` int(11) NOT NULL,
  `idusuario` int(5) DEFAULT NULL,
  `cantidad` int(5) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`id`, `idusuario`, `cantidad`) VALUES
(8, 2, 6),
(9, 1, 13),
(8, 1, 1),
(12, 1, 1),
(14, 1, 1),
(10, 2, 2),
(14, 2, 1),
(11, 2, 1),
(12, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `categoria` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `categoria`) VALUES
(1, 'Primera infancia'),
(2, 'Figuras'),
(3, 'Construcciones'),
(4, 'Manualidades'),
(5, 'Muñecas/os'),
(6, 'Peluches'),
(7, 'Imitación hogar y entorno'),
(8, 'Vehículos gran tamaño'),
(9, 'Vehículos tamaño reducido'),
(10, 'Juegos de mesa'),
(11, 'Electrónicos y Robótica'),
(12, 'Musicales'),
(13, 'Deportivos'),
(14, 'Aire libre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juguete`
--

CREATE TABLE `juguete` (
  `id` int(11) NOT NULL,
  `codigo` varchar(64) DEFAULT NULL,
  `nombre` varchar(64) DEFAULT NULL,
  `imagen` varchar(128) DEFAULT NULL,
  `descripcion` varchar(128) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `categoria` int(11) NOT NULL,
  `proveedor` int(11) DEFAULT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `juguete`
--

INSERT INTO `juguete` (`id`, `codigo`, `nombre`, `imagen`, `descripcion`, `precio`, `categoria`, `proveedor`, `stock`) VALUES
(10, '1243567', 'oso de peluche', '4ce9b0afb324c8d3937a577a23c971fe.jpg', 'un oso GRANDE', 2300.42, 6, 2, 4),
(11, '12345678', 'oso de peluche', 'ef75df3f09862f19f6fa417d9a7ceb52.jpg', 'oso ', 123, 1, 1, 12),
(12, '2134567890', 'jirafa', '3cba86082d52cdd71059b61ec2127c75.jpg', 'una jirafa dificil de romper', 23.8, 2, 2, 23),
(13, '1234567890', 'papalote', '5c3bac842b3c79d260b171119537f826.jpg', 'papalote grande ', 124.65, 14, 7, 50),
(14, '23456789', 'cubetas para playa', '5412daf69fe09df796d4345bc310ef9f.jpg', 'set de cubetas completo para playa ', 200, 3, 2, 8),
(15, '123', 'borrego', '135ee02930f0be6e03dc32fa8f24d0a8.jpg', 'borrego', 133.99, 6, 1, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `fechaPedido` date NOT NULL,
  `fechaEntrega` date NOT NULL,
  `productos` text NOT NULL,
  `totalCompra` float NOT NULL,
  `idPaypal` varchar(255) NOT NULL,
  `idPayer` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id` int(11) NOT NULL,
  `nombre` varchar(64) DEFAULT NULL,
  `apellidos` varchar(64) DEFAULT NULL,
  `direccion` varchar(64) DEFAULT NULL,
  `codigo` int(11) DEFAULT NULL,
  `estado` varchar(64) DEFAULT NULL,
  `administrador` int(11) DEFAULT NULL,
  `empresa` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id`, `nombre`, `apellidos`, `direccion`, `codigo`, `estado`, `administrador`, `empresa`) VALUES
(1, 'juan1', 'lopez', 'hidalgo numero10', 71300, 'oaxaca', 1, 'la pelucheria sa de cv'),
(2, 'pedro', 'ruiz jimenez', 'fraccionamiento 1', 3117, 'oaxaca', 1, 'planeta juguete'),
(7, 'antonio', 'lopez', 'calle21', 7, 'oaxaca', 0, 'jugueteria lopez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(64) DEFAULT NULL,
  `apellidos` varchar(64) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `correo` varchar(64) NOT NULL,
  `contrasena` varchar(64) DEFAULT NULL,
  `direccion` varchar(64) DEFAULT NULL,
  `sexo` varchar(64) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `admin` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `telefono`, `correo`, `contrasena`, `direccion`, `sexo`, `fecha`, `admin`) VALUES
(1, 'osiris', 'juarez', 0, '9513465567', '123', 'calle hidalgo numero6', 'hombre', '1999-03-27', 1),
(2, 'juan1', 'hernandez2', 95134578, 'juan1@gmail.com', '123', 'calle hidalgo numero7', 'hombre', '1994-02-17', 0),
(3, 'jose', 'martinez', 123456789, 'jose12', '123', NULL, '', '1999-03-12', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `juguete`
--
ALTER TABLE `juguete`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`correo`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `juguete`
--
ALTER TABLE `juguete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
