-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-03-2024 a las 18:40:50
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `edicion` varchar(50) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `precio` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id`, `titulo`, `edicion`, `autor`, `precio`) VALUES
(13, '1984', '1ª edición', 'George Orwell', 12.99),
(14, 'Orgullo y prejuicio', '1ª edición', 'Jane Austen', 14.25),
(15, 'El nombre del viento', '1ª edición', 'Patrick Rothfuss', 22.99),
(16, 'Los pilares de la Tierra', '1ª edición', 'Ken Follett', 19.99),
(17, 'Cazadores de sombras: Ciudad de hueso', '1ª edición', 'Cassandra Clare', 17.50),
(18, 'Matar a un ruiseñor', '1ª edición', 'Harper Lee', 16.75),
(19, 'Ready Player One', '1ª edición', 'Ernest Cline', 21.25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `correo_electronico` varchar(100) NOT NULL,
  `contrasena` varchar(100) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre_usuario`, `correo_electronico`, `contrasena`, `fecha_registro`) VALUES
(1, 'usuario1', 'usuario1@example.com', 'contraseña1', '2024-02-02 20:37:32'),
(11, 'juan', 'jaun@gmail.com', 'mols', '2024-02-04 14:54:38'),
(13, 'pedro', 'daoj@gmail.com', 'paplote', '2024-02-04 15:07:10'),
(14, 'miguel09', 'mig34@gmail.com', 'plo12', '2024-02-04 16:27:41'),
(15, 'danys', 'admin@tecnilibros.com', 'administrador', '2024-02-04 18:37:50'),
(16, 'danystec3', 'jaun@gmail.com', 'ABCD!\"#', '2024-02-17 04:32:46'),
(17, 'yulieth', 'princesa@gmail.com', 'princesa', '2024-02-17 04:35:03'),
(18, 'paola', 'paola23@gmail.com', 'paola23', '2024-02-17 04:43:42'),
(19, 'juanpolo', 'pwetr@hotmail.com', 'Peter02', '2024-02-29 21:02:35'),
(20, 'USUARIOROOT', 'FRESCO@GMAIL.COM', 'ADMIN', '2024-03-10 00:49:24');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
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
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
