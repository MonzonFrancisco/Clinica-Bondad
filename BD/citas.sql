-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-10-2021 a las 18:25:34
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
-- Base de datos: `clinica_bondad`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `number` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `symptoms` varchar(200) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `departament` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id`, `name`, `number`, `email`, `symptoms`, `date`, `departament`, `gender`, `time`) VALUES
(23, 'francisco monzon gallegos', '9982293234', 'gallefrancisco1997@gmail.com', 'Fiebre', '2021-09-03', 'CardiologÃ­a', 'M', '03:00:00'),
(24, 'francisco monzon gallegos', '9982293234', 'gallefrancisco1997@gmail.com', 'Fiebre', '2021-09-03', 'CardiologÃ­a', 'M', '03:00:00'),
(25, 'francisco monzon gallegos', '9982293234', 'gallefrancisco1997@gmail.com', 'Fiebre', '2021-09-03', 'CardiologÃ­a', 'M', '03:00:00'),
(26, 'francisco monzon gallegos', '9982293234', 'gallefrancisco1997@gmail.com', 'Diarrea', '2021-09-02', 'Cardiologia', 'M', '12:04:00'),
(27, 'francisco monzon gallegos', '9982293234', 'gallefrancisco1997@gmail.com', 'prueba de cambio de bd', '2021-10-12', 'Neurologia', 'M', '13:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
