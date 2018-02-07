-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-02-2018 a las 02:31:38
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `rapistev`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parametro`
--

CREATE TABLE `parametro` (
  `id` int(11) NOT NULL,
  `Valor` varchar(200) NOT NULL,
  `Estado` int(11) NOT NULL,
  `Descripcion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `parametro`
--

INSERT INTO `parametro` (`id`, `Valor`, `Estado`, `Descripcion`) VALUES
(1, 'Menu', 1, 'Menu Header');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Cedula` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Apellido` varchar(100) DEFAULT NULL,
  `User` varchar(200) NOT NULL,
  `Contraseña` varchar(255) NOT NULL,
  `Correo` varchar(200) NOT NULL,
  `idTipo` int(11) NOT NULL,
  `idActivo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `Cedula`, `Nombre`, `Apellido`, `User`, `Contraseña`, `Correo`, `idTipo`, `idActivo`) VALUES
(1, 1045741659, 'Jorge', 'Aldana', 'Dreft', '12345', 'jorge@gmail.com', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valorparametro`
--

CREATE TABLE `valorparametro` (
  `id` int(11) NOT NULL,
  `id_Parametro` int(11) NOT NULL,
  `Valor` varchar(200) NOT NULL,
  `ValorX` varchar(200) DEFAULT NULL,
  `Descripcion` varchar(200) NOT NULL,
  `Estado` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `valorparametro`
--

INSERT INTO `valorparametro` (`id`, `id_Parametro`, `Valor`, `ValorX`, `Descripcion`, `Estado`) VALUES
(1, 1, 'Inicio', 'index.php', 'Pagina Principal', 'A'),
(2, 1, 'Quienes somos', 'quienes-somos.php', 'Informacion', 'A'),
(3, 1, 'Pagos', 'pagos.php', 'Pagar cuentas', 'A'),
(4, 1, 'Salir', 'logout.php', 'Cerrar Sesion', 'A');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `parametro`
--
ALTER TABLE `parametro`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `parametro_id_uindex` (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_id_uindex` (`id`),
  ADD UNIQUE KEY `users_Cedula_uindex` (`Cedula`);

--
-- Indices de la tabla `valorparametro`
--
ALTER TABLE `valorparametro`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `valorParametro_id_uindex` (`id`),
  ADD KEY `valorParametro_parametro_id_fk` (`id_Parametro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `parametro`
--
ALTER TABLE `parametro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `valorparametro`
--
ALTER TABLE `valorparametro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `valorparametro`
--
ALTER TABLE `valorparametro`
  ADD CONSTRAINT `valorParametro_parametro_id_fk` FOREIGN KEY (`id_Parametro`) REFERENCES `parametro` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
