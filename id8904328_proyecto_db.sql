-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 26-03-2019 a las 12:33:01
-- Versión del servidor: 10.3.13-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id8904328_proyecto_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(10) NOT NULL,
  `nombre` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`) VALUES
(1, 'salud'),
(2, 'entendimiento'),
(3, 'educacion'),
(4, 'tecnologia'),
(5, 'deporte'),
(6, 'agricultura'),
(7, 'nutricion'),
(8, 'ocio'),
(9, 'ciencia'),
(10, 'noticias'),
(11, 'dffgf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE `publicaciones` (
  `id` int(10) NOT NULL,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `id_categoria` int(10) NOT NULL,
  `nombre_archivo` text COLLATE utf8_unicode_ci NOT NULL,
  `creado_por` int(10) NOT NULL DEFAULT 0,
  `creado_en` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `eliminado` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `publicaciones`
--

INSERT INTO `publicaciones` (`id`, `titulo`, `descripcion`, `id_categoria`, `nombre_archivo`, `creado_por`, `creado_en`, `eliminado`) VALUES
(1, 'yahaira', 'es un buen dia ', 1, 'camaron.jpg', 13, '2019-03-22 15:16:40', 0),
(2, 'yahaira', 'es un buen dia ', 2, 'yahaira.jpg.jpg', 13, '2019-03-22 15:26:53', 0),
(3, 'yahaira', 'es un buen dia ', 2, 'yahaira.jpg.jpg', 13, '2019-03-22 15:27:04', 0),
(4, 'Yahis', 'Frase tipica', 2, 'IMG-20190321-WA0013.jpg', 14, '2019-03-22 15:50:53', 0),
(5, 'La vida...', 'Dios bendice..', 1, '', 10, '2019-03-22 16:06:57', 0),
(6, 'Mmmm', 'Que rico', 1, 'IMG-20190322-WA0027.jpeg', 10, '2019-03-22 16:07:45', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(70) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` text NOT NULL,
  `creado_por` int(10) NOT NULL DEFAULT 0,
  `creado_en` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `eliminado` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `username`, `password`, `creado_por`, `creado_en`, `eliminado`) VALUES
(1, 'yahaira', 'yahaira34@gmail.com', 'yahairaj', '$2y$10$90gS7iLEblxeMkbfXCS1aO/7/HsSJVMXvar5FykXtVx6M1dm/LOS.', 0, '2019-03-20 15:21:51', 0),
(2, 'yaraly', 'yaraly29@gmail.com', 'yara', '$2y$10$PyafAvKwSFjvcekcGxESnegIvu1BBU5ctwb80T1LTK1L0XZjKc69W', 0, '2019-03-20 15:21:51', 0),
(3, 'cristian', 'cristian@gmail.com', 'cris', '$2y$10$h2rqHJtplbbfkLyKq8f0puHj6kahOXw7TvKU0qv6TxT5mO1mX61Tm', 0, '2019-03-20 15:21:51', 0),
(4, 'yahaira', 'yahira34@gmail.com', 'criss', '$2y$10$DKqhXVBLCcp.tOeFtAGqV.MLgS48q.GD8sTIJ3FPsHBMVr5KyItvK', 0, '2019-03-20 15:21:51', 0),
(5, 'Cristian', 'cris@gmail.com', 'cristian', '$2y$10$/YNYvkSXmPUxsODh/zxuLuLWrxpwJsmGjaHWcclGKDnatIbCzvF8G', 0, '2019-03-20 15:21:51', 0),
(6, 'yaraly120', 'yara293@gmail.com', 'yahaira29', '$2y$10$mgfPiTMdYqPUlmsbfDafBeZUrmejPW3ezHUhEexZnvteW8Vq7bD/K', 0, '2019-03-20 15:21:51', 0),
(7, 'yaraly123', 'yara29@gmail.com', 'yahaira25', '$2y$10$X8XBmA1/ohfLkaipiW6XXe4edOx/GgVheXDmRWbyYcVdlGzutIj5W', 0, '2019-03-20 15:25:53', 0),
(8, 'yahaira', 'yara120@gmail.com', 'yahaira291', '$2y$10$IU6wSWxOtmTjxWifPUwOuOFnXDJQt.s0WWIA0hzUzIxT1dheOVk6i', 0, '2019-03-20 15:31:16', 0),
(9, 'Yahaira', 'yahaira07@gmail.com', 'yahaira28', '$2y$10$Ydx3H7YymV4kbfIsZw6sAu7fFfV7s1HTmnnoRr6eZiHEBKLB0D8x2', 0, '2019-03-20 20:36:52', 0),
(10, 'Yolanda jimenez', 'Yolanda09-2015@hotmail.com', 'yolanda', '$2y$10$w8r/DlwbyMzITLt.82r55uQftWcf/CrxkUdlhKZsC/T/DrFbWWw8a', 0, '2019-03-20 20:45:02', 0),
(11, 'Yenifer ', 'Jenifervasquez23@gmail.com', 'Britney01', '$2y$10$N98Xx8pQsq/9StH54EjXZ.KXS1rTR5fGAu3d.WnPP5xnzaJAoBexq', 0, '2019-03-21 01:39:36', 0),
(12, 'yahairap', 'yahaira@gmail.com', 'yahairaovalles', '$2y$10$c5y2emsmSC2/RtQEKjI.Y.zZb/o8c0QH0xtm/jYaAdzuLOKvG9vjC', 0, '2019-03-21 14:42:12', 0),
(13, 'yahaira45', 'yahaira45@gmail.com', 'yahaira45', '$2y$10$5ZzbWYiMb6gChDAvM3fjH.AtC3CWzOWwR83as7ToReWuL0aGnT6oO', 0, '2019-03-22 13:05:19', 0),
(14, 'Leonel', 'Leon@gmail.com', 'leo1', '$2y$10$q.VmaRPLzAkkCfQD0yv2Q.N8IOKJ0FWsdYGwuu7QlUU8St4M8a0T2', 0, '2019-03-22 15:49:52', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
