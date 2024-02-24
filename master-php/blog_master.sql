-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 15-10-2023 a las 05:28:10
-- Versión del servidor: 8.0.27
-- Versión de PHP: 7.4.26

SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blog_master`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`) VALUES
(1, 'Accion'),
(2, 'Rol'),
(3, 'Deportes'),
(4, 'Plataformas'),
(5, 'Microfilm'),
(6, 'PAGOS'),
(7, 'peliculas'),
(8, 'solar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradas`
--

DROP TABLE IF EXISTS `entradas`;
CREATE TABLE IF NOT EXISTS `entradas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `usuario_id` int NOT NULL,
  `categoria_id` int NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` mediumtext,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_entrada_usuario` (`usuario_id`),
  KEY `fk_entrada_categoria` (`categoria_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `entradas`
--

INSERT INTO `entradas` (`id`, `usuario_id`, `categoria_id`, `titulo`, `descripcion`, `fecha`) VALUES
(1, 1, 1, 'Novedades de GTA  Online', 'review del GTA 5', '2022-12-17'),
(2, 1, 2, 'REVIew de LOL Online', 'Todo sobre el lol', '2022-12-17'),
(3, 1, 3, 'Nuevos jugadores de fifa 19', 'Review del fifa 9', '2022-12-17'),
(5, 2, 1, 'Novedades X-MEN', 'rX-MEN 2019', '2022-12-17'),
(6, 2, 2, 'Review 0001', 'Todo sobre el lol 001', '2022-12-17'),
(7, 2, 3, 'Nuevos jugadores de fifa 2020', 'Review del fifa 10', '2022-12-17'),
(9, 3, 1, 'Novedades PEPSIMAN', 'review PEPSIMAN 5', '2022-12-17'),
(10, 3, 2, 'REVIew POR SIEMPRE 0002', 'ToDO LOL 002', '2022-12-17'),
(11, 3, 3, 'Nuevos jugadores de fifa 2021', 'Review del fifa 11', '2022-12-17'),
(13, 4, 1, 'Novedades SUPER MARIO', 'reviW MARIO 5 rescata princesa', '2022-12-17'),
(14, 4, 2, 'REVIew de LOL Online0333', 'Todo sobre el lol 0003', '2022-12-17'),
(15, 4, 3, 'Nuevos jugadores de fifa 2022', 'Review del fifa 11, el mejor juego', '2022-12-17'),
(17, 19, 5, 'rollo de 35mm', 'Son rolos de 35m un poco mas anchos que los rollos normales', '2023-04-12'),
(20, 17, 1, 'GTA ', 'SAN ANDREAS', '2023-04-15'),
(21, 17, 5, 'Archivo', 'folios, microficha', '2023-04-15'),
(22, 17, 2, 'Ministerio', 'Cajas', '2023-04-15'),
(25, 19, 3, 'Cardio', 'sistema de GY>M', '2023-05-02'),
(29, 19, 6, 'Programador php', 'Un programador en PHP es el profesional que se encarga de desarrollar programas, aplicaciones y webs utilizando el lenguaje de programación PHP. La mayoría de ellos trabajan en la base de datos, software o codificación de un sitio web aunque también pueden hacerlo con el diseño e interfaz de la página.', '2023-05-20'),
(30, 19, 4, 'Programador php', '5656565', '2023-05-22'),
(31, 19, 1, 'Musica', 'Musica popular 2023', '2023-06-26'),
(32, 19, 3, 'PRuebas reales', '22115klhgcgfx', '2023-06-28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `apellidos` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `email`, `password`, `fecha`) VALUES
(1, 'Andres', 'Pardo', 'andres@and.com', '123', '2022-12-17'),
(2, 'THomas', 'Moreno', 'Thomas@and.com', '123', '2022-12-17'),
(3, 'Martha', 'Moreno', 'martha@and.com', '123', '2022-12-17'),
(4, 'Bruno', 'DIAS', 'bruno@and.com', '123', '2019-07-09'),
(6, 'Admin', 'Admin', 'admin@admin.com', 'admin', '2022-12-23'),
(7, 'gato', 'montez', 'ads@ads.com', '$2y$04$lL/oiPS3nUWvvdW37qy.9ezeJgRPVt/w7X5o1p9deoWgmOcPvqypK', '2023-03-04'),
(8, 'james', 'holgin ', 'james@imagescan.com.co', '$2y$04$6MnMj0hzRNAX72OqIuffXexk951WZEvFSC67wec6bOX6LVV64rqcq', '2023-03-04'),
(9, 'martha ', 'Moreno ', 'martha@gmail.com', '$2y$04$znAHjH3dqKmMtGFjk376g.TIeB7OWXUOOxZ4ry7gzENgJF7IxXShe', '2023-03-04'),
(10, 'diego\'', 'moreno', 'deigo@moreno.com', '$2y$04$WOWLDG7YdrzsJFAiVAPZj.ZSSWFwb/SbjldhyGS4NyNGA0uft1mCa', '2023-03-07'),
(11, 'Sthefy\'', 'toro', 'toro@toro.co.co', '$2y$04$Qdfyu1HeB280pghylMZy2eULJ9ir46ueHvcEu77swftpZt7pHIcOO', '2023-03-07'),
(12, 'Sthefy\'', 'toro', 'toro@toro.co.co', '$2y$04$pVT2sQedmDQiqZuSIq7BEema4o5UOBiafco3tCbagOxcgfuqtJ88m', '2023-03-08'),
(13, 'pepito', 'perez', 'pepito@perez.com', '$2y$04$LeeBpRMSPWXVbVPKQx6vhOj9YbgNjLvR92BQFiW554GG5/Kl1NEJq', '2023-03-09'),
(14, 'pepito', 'perez', 'pepito@perez.com', '$2y$04$fWoges3nC0y4P/5Y1EoTxuNCCBhsCW4sx/jp/BLF.MCMBDmiHdat6', '2023-03-09'),
(15, 'vicente', 'pardo', 'manuel@pardo.co.co', '$2y$04$JjWXs3VmaRT/O51.LbT63e3.RIIrXkufSxqiJJjNLw4yNBjTIKUcu', '2023-03-09'),
(16, 'rato', 'pardo', 'ratos@pardo.com', '$2y$04$WdDpQ4QB5ujgd7UIipqi8erz2vxP.IzwARVlrUALHEN93j7nphL5W', '2023-03-14'),
(17, 'yordy', 'moreno', 'yordyaka@gmail.com', '$2y$04$.UsiwzofEdof8zVigUzQUukVkzD5f/.tKK7kdkf2nqWB7uMg3jbMS', '2023-03-18'),
(18, 'rubyse', 'an', 'pecas@perro.com.co', '$2y$04$BtlwPcL5i84UXeYbIcXFeuQXeMlw6episJFD1mZOoT3VdV69OwfRi', '2023-03-24'),
(19, 'emilian', 'chong moreno', 'mate1@mate.com', '$2y$04$HY6FoFgqT.efaDAmEdHfMeoahsBR4Gu3lSRQAJC3XhUsuJvEV4FNq', '2023-04-01'),
(20, 'pecas', 'perro', 'pecas@perro.com.co', '$2y$04$hFD/n7J1BpUO8qvARHxLguU1GlYbAuwRSt3vMbBHUkEPA.LJPu2BK', '2023-04-01'),
(21, 'mama', 'mamama', 'mama@mama.com', '$2y$04$yP3nLyS4XodaPadmUTrtueDeQ6RyYeAhRv6auawfQsAGuZ0bFDFKy', '2023-10-14');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `entradas`
--
ALTER TABLE `entradas`
  ADD CONSTRAINT `fk_entrada_categoria` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`),
  ADD CONSTRAINT `fk_entrada_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
