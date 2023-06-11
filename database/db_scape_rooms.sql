-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-06-2023 a las 00:21:41
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_scape_rooms`
--
CREATE DATABASE IF NOT EXISTS `db_scape_rooms` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_scape_rooms`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `capacity` int(11) NOT NULL,
  `theme_id` int(11) NOT NULL,
  `difficulty` varchar(100) NOT NULL,
  `time` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `description`, `capacity`, `theme_id`, `difficulty`, `time`, `image`) VALUES
(1, 'La Maldición', 'Descubre la historia del faraón mientras intentas encontrar la cura para su maldición', 5, 2, 'Fácil', 45, 'https://i.imgur.com/4QumOeC.png'),
(2, 'Polvo de estrellas', 'Atrapado en el espacio luego de que surgieran unos imprevistos con la nave, deberás hallar una manera de restablecerla y regresar', 6, 2, 'Moderada', 50, 'https://i.imgur.com/dzCIc5T.png'),
(3, 'Desaparición', 'Mientras yacían atrapados en su celda tras una larga condena, todo el mundo desapareció de pronto. Podría ser la oportunidad ideal de escape o algo peor', 2, 1, 'Difícil', 50, 'https://i.imgur.com/NpbBSKa.png'),
(4, 'El sacrificio', 'Al principio unirte a la secta arcana te pareció una buena idea, pero ahora no estás tan seguro de ello', 3, 1, 'Fácil', 35, 'https://i.imgur.com/pjGZeAy.png'),
(5, 'El templo', 'En las catacumbas de un antiguo templo, descubriste un mapa perdido que podría contener tanto tesoros como tu salvación', 4, 3, 'Moderado', 40, 'https://i.imgur.com/QW0S0Vt.png'),
(6, 'El castillo dormido', 'Despertaste de pronto, perdido, desorientado y sin saber cómo escapar de la marea de gente y monstruos durmientes', 1, 3, 'Fácil', 30, 'https://i.imgur.com/jd6MlSD.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `themes`
--

CREATE TABLE `themes` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `classification` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `themes`
--

INSERT INTO `themes` (`id`, `name`, `classification`) VALUES
(1, 'Terror', '+16'),
(2, 'Acción', '+13'),
(3, 'Aventura', 'Todo público');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'Admin@gmail.com', '$2a$12$SQtS/40jZlzDhvbBGNPaL.ILNKJCDnoYvEm/vRe/OzLrUBp8.U1d.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `theme_id` (`theme_id`);

--
-- Indices de la tabla `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `themes`
--
ALTER TABLE `themes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_ibfk_1` FOREIGN KEY (`theme_id`) REFERENCES `themes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
