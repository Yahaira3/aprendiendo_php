-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-03-2019 a las 16:28:45
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_php2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios1`
--

CREATE TABLE `usuarios1` (
  `id` int(10) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `correos` varchar(70) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios1`
--

INSERT INTO `usuarios1` (`id`, `nombres`, `correos`, `username`, `password`) VALUES
(1, 'yahaira1', 'yahaira@gmail.com', 'yahairaj1', 12345),
(2, 'yahaira2', 'yahaira@gmail.com', 'yahairaj2', 12345),
(3, 'yahaira3', 'yahaira@gmail.com', 'yahiraj3', 12345);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios1`
--
ALTER TABLE `usuarios1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios1`
--
ALTER TABLE `usuarios1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
