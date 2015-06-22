-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-06-2015 a las 00:12:53
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `maetsvacia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `amigo`
--

CREATE TABLE IF NOT EXISTS `amigo` (
  `IDUsuario` int(10) NOT NULL,
  `IDAmigo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `analisis`
--

CREATE TABLE IF NOT EXISTS `analisis` (
  `IdJuego` int(10) NOT NULL,
  `IdUsuario` int(10) NOT NULL,
  `Texto` longtext COLLATE utf8_bin NOT NULL,
  `Recomendado` tinyint(1) NOT NULL,
  `Fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capturas`
--

CREATE TABLE IF NOT EXISTS `capturas` (
`Id` int(11) NOT NULL,
  `IDUsuario` int(5) NOT NULL,
  `Nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `Ruta` varchar(150) COLLATE utf8_bin NOT NULL,
  `Fecha` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE IF NOT EXISTS `compras` (
  `IDUsuario` int(10) NOT NULL,
  `IDJuego` int(10) NOT NULL,
  `Fecha_de_compra` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consigue`
--

CREATE TABLE IF NOT EXISTS `consigue` (
  `IDLogro` int(10) NOT NULL,
  `IDUsuario` int(10) NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hilo`
--

CREATE TABLE IF NOT EXISTS `hilo` (
`Id` int(10) NOT NULL,
  `Titulo` varchar(200) COLLATE utf8_bin NOT NULL,
  `Texto` longtext COLLATE utf8_bin NOT NULL,
  `Fecha_de_creacion` date NOT NULL,
  `IdUsuario` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juego`
--

CREATE TABLE IF NOT EXISTS `juego` (
`Id` int(10) NOT NULL,
  `Titulo` varchar(100) COLLATE utf8_bin NOT NULL,
  `Portada` varchar(100) COLLATE utf8_bin NOT NULL,
  `Precio` float NOT NULL,
  `Edad` int(3) NOT NULL,
  `Descripcion` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `DescripcionLarga` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Companyia` varchar(100) COLLATE utf8_bin NOT NULL,
  `Tipo` enum('Free_to_Play','Acceso_Anticipado','Accion','Aventura','Carreras','Casual','Deportes','Estrategia','Indie','Multijugador_Masivo','Rol','Simuladores') COLLATE utf8_bin NOT NULL,
  `Etiquetas` varchar(200) COLLATE utf8_bin NOT NULL,
  `Idiomas` enum('Ingles','Espanyol','Ruso','Italiano','Chino','Japones','Frances','Portugues','Arabe') COLLATE utf8_bin NOT NULL,
  `Ventas` int(12) NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logro`
--

CREATE TABLE IF NOT EXISTS `logro` (
`Id` int(10) NOT NULL,
  `JuegoID` int(10) NOT NULL,
  `Titulo` varchar(100) COLLATE utf8_bin NOT NULL,
  `Puntos` int(3) NOT NULL,
  `Tipo` enum('Bronce','Plata','Oro','Platino') CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `Imagen` varchar(150) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta`
--

CREATE TABLE IF NOT EXISTS `respuesta` (
  `IDHilo` int(10) NOT NULL,
  `IDUsuario` int(10) NOT NULL,
  `Fecha` datetime NOT NULL,
  `Mensaje` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`Id` int(10) NOT NULL,
  `Nick` varchar(20) COLLATE utf8_bin NOT NULL,
  `Contrasenia` varchar(100) COLLATE utf8_bin NOT NULL,
  `Nombre` varchar(20) COLLATE utf8_bin NOT NULL,
  `Apellidos` varchar(50) COLLATE utf8_bin NOT NULL,
  `Correo` varchar(50) COLLATE utf8_bin NOT NULL,
  `Fecha de Nacimiento` date NOT NULL,
  `Pais` varchar(50) COLLATE utf8_bin NOT NULL,
  `Ciudad` varchar(50) COLLATE utf8_bin NOT NULL,
  `Direccion` varchar(100) COLLATE utf8_bin NOT NULL,
  `Codigo Postal` int(7) NOT NULL,
  `Puntuacion` int(7) NOT NULL,
  `Rol` enum('Usuario Registrado','Administrador','Desarrollador','Gestor-Tienda','Gestor-Comunidad','') COLLATE utf8_bin NOT NULL,
  `Imagen` varchar(150) COLLATE utf8_bin NOT NULL,
  `Companyia` varchar(150) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tabla de información del usuario';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
`Id` int(11) NOT NULL,
  `IDUsuario` int(5) NOT NULL,
  `Nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `Enlace` varchar(150) COLLATE utf8_bin NOT NULL,
  `Fecha` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `amigo`
--
ALTER TABLE `amigo`
 ADD PRIMARY KEY (`IDUsuario`,`IDAmigo`);

--
-- Indices de la tabla `analisis`
--
ALTER TABLE `analisis`
 ADD PRIMARY KEY (`IdJuego`,`IdUsuario`);

--
-- Indices de la tabla `capturas`
--
ALTER TABLE `capturas`
 ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
 ADD PRIMARY KEY (`IDUsuario`,`IDJuego`,`Fecha_de_compra`);

--
-- Indices de la tabla `consigue`
--
ALTER TABLE `consigue`
 ADD PRIMARY KEY (`IDLogro`,`IDUsuario`);

--
-- Indices de la tabla `hilo`
--
ALTER TABLE `hilo`
 ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `juego`
--
ALTER TABLE `juego`
 ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `logro`
--
ALTER TABLE `logro`
 ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `respuesta`
--
ALTER TABLE `respuesta`
 ADD PRIMARY KEY (`IDHilo`,`IDUsuario`,`Fecha`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`Id`), ADD UNIQUE KEY `Nick` (`Nick`);

--
-- Indices de la tabla `videos`
--
ALTER TABLE `videos`
 ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `capturas`
--
ALTER TABLE `capturas`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `hilo`
--
ALTER TABLE `hilo`
MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `juego`
--
ALTER TABLE `juego`
MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT de la tabla `logro`
--
ALTER TABLE `logro`
MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `videos`
--
ALTER TABLE `videos`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
