-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-05-2015 a las 23:49:50
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `maets`
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
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE IF NOT EXISTS `compras` (
  `IDUsuario` int(10) NOT NULL,
  `IDJuego` int(10) NOT NULL,
  `Fecha de compra` datetime NOT NULL,
  `Precio` int(5) NOT NULL
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
  `Título` varchar(200) COLLATE utf8_bin NOT NULL,
  `Fecha de creación` date NOT NULL,
  `Último mensaje` date NOT NULL,
  `IdUsuario` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE IF NOT EXISTS `imagenes` (
  `Título` varchar(20) COLLATE utf8_bin NOT NULL,
  `Imagen` blob NOT NULL,
`id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juego`
--

CREATE TABLE IF NOT EXISTS `juego` (
`Id` int(10) NOT NULL,
  `Título` varchar(100) COLLATE utf8_bin NOT NULL,
  `Portada` blob NOT NULL,
  `Precio` int(4) NOT NULL,
  `Edad` int(3) NOT NULL,
  `Compañia` varchar(100) COLLATE utf8_bin NOT NULL,
  `Tipo` enum('Free to Play','Acesso Anticipado','Acción','Aventura','Carreras','Casual','Deportes','Estrategia','Indie','Multijugador Masivo','Rol','Simuladores') COLLATE utf8_bin NOT NULL,
  `Etiquetas` varchar(200) COLLATE utf8_bin NOT NULL,
  `Idiomas` enum('Inglés','Español','Ruso','Italiano','Chino','Japones','Francés','Portugués','Árabe') COLLATE utf8_bin NOT NULL,
  `Ventas` int(12) NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logro`
--

CREATE TABLE IF NOT EXISTS `logro` (
`Id` int(10) NOT NULL,
  `JuegoID` int(10) NOT NULL,
  `Título` varchar(100) COLLATE utf8_bin NOT NULL,
  `Puntos` int(3) NOT NULL,
  `Tipo` enum('Bronce','Plata','Oro','Platino') CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `Fecha` date NOT NULL,
  `Imagen` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
  `Contraseña` varchar(25) COLLATE utf8_bin NOT NULL,
  `Nombre` varchar(20) COLLATE utf8_bin NOT NULL,
  `Apellidos` varchar(50) COLLATE utf8_bin NOT NULL,
  `Correo` varchar(50) COLLATE utf8_bin NOT NULL,
  `Fecha de Nacimiento` date NOT NULL,
  `País` varchar(50) COLLATE utf8_bin NOT NULL,
  `Ciudad` varchar(50) COLLATE utf8_bin NOT NULL,
  `Dirección` varchar(100) COLLATE utf8_bin NOT NULL,
  `Código Postal` int(7) NOT NULL,
  `Puntuacion` int(7) NOT NULL,
  `Rol` enum('Usuario Registrado','Administrador','Desarrollador','Gestor-Tienda','Gestor-Comunidad','') COLLATE utf8_bin NOT NULL,
  `Imagen` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tabla de información del usuario';

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `amigo`
--
ALTER TABLE `amigo`
 ADD PRIMARY KEY (`IDUsuario`,`IDAmigo`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
 ADD PRIMARY KEY (`IDUsuario`,`IDJuego`,`Fecha de compra`);

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
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
 ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `hilo`
--
ALTER TABLE `hilo`
MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `juego`
--
ALTER TABLE `juego`
MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `logro`
--
ALTER TABLE `logro`
MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
