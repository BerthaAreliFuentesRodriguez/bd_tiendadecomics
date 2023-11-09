-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2023 a las 21:46:40
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
-- Base de datos: `bd_tiendadecomics`
--
CREATE DATABASE IF NOT EXISTS `bd_tiendadecomics`;

USE `bd_tiendadecomics`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE IF NOT EXISTS `venta` (
  `idcomic` int(11) NOT NULL,
  `nomcomic` varchar(255) NOT NULL,
  `proveedor` varchar(51) NOT NULL,
  `editorial` varchar(60) NOT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `costo` double(10,2) NOT NULL,
  `inclusiones` varchar(285) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`idcomic`, `nomcomic`, `proveedor`, `editorial`, `tipo`, `costo`, `inclusiones`, `img`) VALUES
(10, 'komisan no puede comunicarse', 'areli fuentes', 'paninimanga', 'manga', 280.90, 'incluye un miniposter', 'komisan.jpg'),
(11, 'true beauty', 'Jesus Ramirez', 'comicspuntocom', 'manhwa', 409.99, 'contiene una tarjeta con la imagen de algun personaje (el personaje es al azar)', 'true-beauty.jpg'),
(12, 'HARLEY QUINN Y LAS AVES DE PRESA', 'Carlos Perez', 'comic universe', 'revista', 149.67, 'incluye un sticker coleccionable', 'harley.jpg'),
(13, 'The Amazing Spider-Man: Los Últimos Restos', 'Aramara Ortiz', 'comicsWorld', 'revista', 154.50, 'contiene una tarjeta coleccionable', 'spiderman.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`idcomic`),
  ADD UNIQUE KEY `idcomic` (`idcomic`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `idcomic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
