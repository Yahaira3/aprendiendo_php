-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-03-2019 a las 15:16:27
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
-- Base de datos: `proyecto_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE `publicaciones` (
  `id` int(10) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `id_categoria` int(10) NOT NULL,
  `nombre_archivo` text NOT NULL,
  `creado_por` int(10) NOT NULL DEFAULT '0',
  `creado_en` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `eliminado` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `publicaciones`
--

INSERT INTO `publicaciones` (`id`, `titulo`, `descripcion`, `id_categoria`, `nombre_archivo`, `creado_por`, `creado_en`, `eliminado`) VALUES
(1, 'leonel loco', 'para saber ', 2, '', 0, '2019-03-20 13:19:46', 0),
(2, 'leonel loco', 'para saber ', 2, '', 0, '2019-03-20 13:19:46', 0),
(3, 'leonel loco', 'para saber ', 2, '', 0, '2019-03-20 13:19:46', 0),
(4, 'leonel loco', 'para saber ', 2, '', 0, '2019-03-20 13:19:46', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(70) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `username`, `password`) VALUES
(1, 'yahaira1', 'yahaira@gmail.com', 'yahairaj1', '12345'),
(2, 'yahaira2', 'yahaira@gmail.com', 'yahairaj2', '12345'),
(3, 'yahaira3', 'yahaira@gmail.com', 'yahiraj3', '12345'),
(4, 'yolanda', 'yolanda@gmail.com', 'yolandajimenez', '12345'),
(5, 'rafael', 'rafael23@gmail.com', 'rafaelro', '456321'),
(6, 'Leonel', 'Leon@gmail.com', 'leonel29', '123456'),
(7, 'Yaraly', 'Yara@gmail.co', 'yaraly29', '12345'),
(8, 'yahaira', 'yahaira23@gmail.com', 'yahiara', '12345'),
(9, 'yahaira', 'yahaira23@gmail.com', 'yahaira', '12345'),
(10, 'leonel', 'leonel@gmail.com', 'leonel1', '0'),
(11, 'yaraly', 'yara29@gmail.com', 'yara', '0'),
(12, 'yaraly1', 'yara290@gmail.com', 'yara1', '0'),
(13, 'yaraly12', 'yara2902@gmail.com', 'yara12', '$2y$10$9Se8n95Ezy7SSEa53K6vX.4nI68U17zrJCQpxuagCI62ZKtLBk7wa');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;