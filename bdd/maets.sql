-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-06-2015 a las 17:24:31
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

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

--
-- Volcado de datos para la tabla `amigo`
--

INSERT INTO `amigo` (`IDUsuario`, `IDAmigo`) VALUES
(6, 7),
(7, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `analisis`
--

CREATE TABLE IF NOT EXISTS `analisis` (
  `IdJuego` int(10) NOT NULL,
  `IdUsuario` int(10) NOT NULL,
  `Texto` longtext COLLATE utf8_bin NOT NULL,
  `Recomendado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `analisis`
--

INSERT INTO `analisis` (`IdJuego`, `IdUsuario`, `Texto`, `Recomendado`) VALUES
(1, 6, 'La espera ha valido la pena. GTA V es el primer juego que he pre-comprado y realmente siento que ha sido una gran compra. Sin embargo me molestó un poco tener que esperar más de 1 hora y media para que se pudiese instalar. Dejando esto de lado, la optimización es realmente impresionante, me he sorprendido demasiado con lo tan bien optimizado que está, los gráficos son excelentes y me atrevo a decirlo porque no tengo una gráfica demasiado potente (tengo una GTX 650), así que no queda nada más que decir. Os invito a ver mis capturas de pantalla para que veáis como se ve. He estado jugando al modo multijugador, otro punto a favor, no tengo nada de lag. Además es muy variado y tiene muchas actividades, Me falta jugarlo aún más como para dar un análisis completo.', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capturas`
--

CREATE TABLE IF NOT EXISTS `capturas` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `Ruta` varchar(150) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `capturas`
--

INSERT INTO `capturas` (`Id`, `Nombre`, `Ruta`) VALUES
(1, 'Captura de Assassins Creed 1', 'ac1.jpg'),
(2, 'Captura de Dragon Ball', 'dbx1.jpg'),
(3, 'Captura de GTA V', 'gta5p.jpg'),
(4, 'Captura de GTA V 2', 'GTAV.jpg'),
(5, 'Captura de GTA V 3', 'gtav1.jpg'),
(6, 'Captura de Rust', 'rust.jpg'),
(7, 'Captura de Project Cars', 'project-cars.jpg');

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

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`IDUsuario`, `IDJuego`, `Fecha de compra`, `Precio`) VALUES
(6, 1, '2015-06-01 12:43:00', 49),
(6, 4, '2015-03-16 15:18:27', 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consigue`
--

CREATE TABLE IF NOT EXISTS `consigue` (
  `IDLogro` int(10) NOT NULL,
  `IDUsuario` int(10) NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `consigue`
--

INSERT INTO `consigue` (`IDLogro`, `IDUsuario`, `Fecha`) VALUES
(1, 6, '2015-06-18'),
(4, 6, '2015-06-01'),
(9, 7, '2015-05-11'),
(12, 6, '2015-04-21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hilo`
--

CREATE TABLE IF NOT EXISTS `hilo` (
  `Id` int(10) NOT NULL,
  `Titulo` varchar(200) COLLATE utf8_bin NOT NULL,
  `Texto` longtext COLLATE utf8_bin NOT NULL,
  `Fecha_de_creacion` date NOT NULL,
  `Ultimo_mensaje` date NOT NULL,
  `IdUsuario` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `hilo`
--

INSERT INTO `hilo` (`Id`, `Titulo`, `Texto`, `Fecha_de_creacion`, `Ultimo_mensaje`, `IdUsuario`) VALUES
(1, 'Bienvenidos a GTA Online', 'Buenas tardes, creo este foro para ir añadiendo información sobre el progreso que voy consiguiendo en el GTA V, en el modo multijugador, espero que ayudeis con vuestros consejos!!', '2015-06-18', '0000-00-00', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juego`
--

CREATE TABLE IF NOT EXISTS `juego` (
  `Id` int(10) NOT NULL,
  `Titulo` varchar(100) COLLATE utf8_bin NOT NULL,
  `Portada` varchar(100) COLLATE utf8_bin NOT NULL,
  `Precio` int(4) NOT NULL,
  `Edad` int(3) NOT NULL,
  `Descripcion` varchar(100) COLLATE utf8_bin NOT NULL,
  `DescripcionLarga` longtext COLLATE utf8_bin NOT NULL,
  `Companyia` varchar(100) COLLATE utf8_bin NOT NULL,
  `Tipo` enum('Free_to_Play','Acesso_Anticipado','Accion','Aventura','Carreras','Casual','Deportes','Estrategia','Indie','Multijugador_Masivo','Rol','Simuladores') COLLATE utf8_bin NOT NULL,
  `Etiquetas` varchar(200) COLLATE utf8_bin NOT NULL,
  `Idiomas` enum('Ingles','Espanyol','Ruso','Italiano','Chino','Japones','Frances','Portugues','Arabe') COLLATE utf8_bin NOT NULL,
  `Ventas` int(12) NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `juego`
--

INSERT INTO `juego` (`Id`, `Titulo`, `Portada`, `Precio`, `Edad`, `Descripcion`, `DescripcionLarga`, `Companyia`, `Tipo`, `Etiquetas`, `Idiomas`, `Ventas`, `Fecha`) VALUES
(1, 'Grand Theft Auto V', 'PortadaGTA.png', 60, 18, '', '', 'Rockstar', '', '', '', 0, '2015-04-14'),
(2, 'Dishonored', 'PortadaDishonored.png', 15, 18, 'Violencia brutal en una ciudad portaria infectada por la peste', 'Ambientado en un mundo industrial y retrofuturista, Dishonored es definido por sus propios autores como un juego sobre la violencia brutal. La ciudad portuaria está infectada por la peste; la mitad de la población está muerta o agonizando, y la otra mitad vive con miedo a un régimen opresor.', 'Bethesda Studios', '', 'Accion, Primera persona, Aventura, Ciencia Ficcion', '', 0, '2012-10-12'),
(3, 'The Witcher 3: Wild Hunt', 'PortadaTheWitcherIII.png', 55, 18, 'Tercera entrega de la serie de The Witcher', 'The Witcher 3: Wild Hunt es la tercera entrega de la serie The Witcher, que nos devuelve al conocido cazador de bestias Geralt de Rivia en una nueva aventura. Rol de la vieja escuela en un fascinante mundo de fantasía, cargado de grandes historias y con un gran acabado artístico y tecnológico.', 'CD Projekt RED', 'Rol', 'Rol, RPG, Accion RPG', '', 0, '2015-05-19'),
(4, 'Heroes of the Storm', 'PortadaHeroesOfTheStorm.png', 0, 12, 'El futuro de los MOBA esta en Hots', 'Los héroes y villanos de Diablo, StarCraft y Warcraft se dan cita en este MOBA 5 vs. 5 desarrollado por Blizzard, que nos permite combatir en varios escenarios con sus propias particularidades. Obtén el poder de los dioses dominando sus templos, o invoca a un temible gólem de sangre recogiendo calaveras, en este juego de acción estratégica de corte free-to-play.', 'Blizzard', '', 'Estrategia, Tiempo Real, MOBA, Ciencia ficcion, Diablo, Starcraft, Warcraft, Cooperativo, Competiivo', '', 0, '2015-06-02'),
(5, 'Pillars of Eternity', 'PortadaPillarsOfEternity.png', 30, 18, 'Juego RPG ambientado en mundo de fantasia', 'Pillars of Eternity es un juego RPG ambientado en un mundo de fantasía, que trata de recuperar la esencia de grandes clásicos del género rolero como Planescape: Torment, Baldur’s Gate o Icewind Dale', 'Obsidian', 'Rol', 'Combate por turnos, Rol, Fantasia', '', 0, '2015-03-26'),
(6, 'La Tierra Media: Sombras de Mordor', 'PortadaSombrasDeMordor.png', 37, 18, 'AVentura ambientada en el universo de fantasia del Señor de los Anillos', 'Aventura ambientada en el universo de fantasía de El Señor de los Anillos que nos pone en la piel de un misterioso aventurero conocido como Talion, decidido a alcanzar las sombrías tierras de Mordor.', 'Monolith', 'Aventura', 'Accion, Aventura, Tercera Persona, Golum, Fantasia, Señor de los Anillo, LotR', '', 0, '2014-09-30'),
(7, 'Project Cars', 'PortadaProjectCars.png', 40, 3, 'Simulador de velocidad', 'Project Cars es un simulador de velocidad desarrollado por Slightly Mad Studios, responsables de Need for Speed: Shift. El juego cuenta con gran variedad de tipos de vehículos, climatología variable y un sistema de control que apuesta por el realismo.', 'Slightly Mad Studios', 'Carreras', 'Conduccion, GT, Formula 1, Carreras, Simulador', '', 0, '2015-05-07'),
(8, 'ARK: Survival Evolved', 'PortadaArk.png', 20, 18, 'Survival en una isla con dinosaurios', 'Tras despertar en una misteriosa isla que da nombre al juego, el jugador deberá cazar, recolectar alimentos y recursos, investigar nuevas tecnologías o construir su propio refugio en una nueva aventura de supervivencia. ¿Su punto diferenciador? La caza y domesticación de dinosaurios leviatán y otras criaturas primitivas.', 'Studio Wildcard', '', 'Accion, Primera persona, aventura, fantasia, dinosaurios, ficcion, multijugador, online', '', 0, '0000-00-00'),
(9, 'This War of Mine', 'PortadaThisWarOfMine.png', 15, 12, 'Sobrevive a las penurias de la guerra', 'Sobrevive a las penurias de la guerra en la piel de un civil, que por el día debe velar por la seguridad de su refugio, mientras que por las noches sale al exterior en busca de recursos para mantenerse con vida.', '11 bit Studios', 'Indie', 'Estrategia, Tiempo Real, Bélico, Guerra, Survival', '', 0, '2014-11-14'),
(10, 'Fifa 15', 'PortadaFifa15.png', 55, 3, 'Videojuego de la serie FIFA', 'Videojuego de la serie FIFA para la temporada de fútbol 2014-2015. El título presenta licencias de más de 25 competiciones oficiales, y entre sus novedades destacan un comportamiento de los porteros mucho más reales, nuevas animaciones para los jugadores, cambios en el comportamiento del esférico y un ritmo de juego más rápido, entre otros tantos.', 'EA Sports', 'Deportes', 'Deportes, Futbol, 2015', '', 0, '2014-09-25');

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
  `Fecha` date NOT NULL,
  `Imagen` varchar(150) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `logro`
--

INSERT INTO `logro` (`Id`, `JuegoID`, `Titulo`, `Puntos`, `Tipo`, `Fecha`, `Imagen`) VALUES
(1, 3, 'Lila y grosellas', 15, 'Bronce', '2015-06-18', 'logroTW3.png'),
(2, 3, 'Un amigo en apuros', 15, 'Bronce', '2015-06-18', 'logroTW3.png'),
(3, 3, 'Caida Libre', 15, 'Bronce', '2015-06-18', 'logroTW3.png'),
(4, 3, 'Luchador', 30, 'Plata', '2015-06-18', 'logroTW3.png'),
(5, 3, 'Control de plagas', 30, 'Plata', '2015-06-18', 'logroTW3.png'),
(6, 3, 'Senda recorrida', 65, 'Oro', '2015-06-18', 'logroTW3.png'),
(7, 3, 'Las fronteras de lo imposible', 65, 'Oro', '2015-06-18', 'logroTW3.png'),
(8, 2, 'Deshonrado', 25, 'Bronce', '2015-06-18', 'logroDishonored.jpg'),
(9, 2, 'Excomunión', 25, 'Bronce', '2015-06-18', 'logroDishonored.jpg'),
(10, 2, 'Guardaespaldas', 25, 'Bronce', '2015-06-18', 'logroDishonored.jpg'),
(11, 2, 'Manos limpias', 50, 'Plata', '2015-06-18', 'logroDishonored.jpg'),
(12, 2, 'Negociador', 100, 'Platino', '2015-06-18', 'logroDishonored.jpg');

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

--
-- Volcado de datos para la tabla `respuesta`
--

INSERT INTO `respuesta` (`IDHilo`, `IDUsuario`, `Fecha`, `Mensaje`) VALUES
(1, 7, '2015-06-18 00:00:00', 'Buenas, aquí otro jugador que cuando juegue un par de horas os empezará a dar sus consejos!');

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
  `Imagen` varchar(150) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tabla de información del usuario';

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Id`, `Nick`, `Contrasenia`, `Nombre`, `Apellidos`, `Correo`, `Fecha de Nacimiento`, `Pais`, `Ciudad`, `Direccion`, `Codigo Postal`, `Puntuacion`, `Rol`, `Imagen`) VALUES
(6, 'Drulas', '$2y$10$idews1ZgezwJur/oOqb26uBHaLdC2kNFiVy.iK2iCR6rAvDzzG59q', 'Javier', 'Drulas', 'duruleto@drulas.com', '2001-03-20', 'Drulon', 'Drulopia', 'Avenida', 28033, 0, 'Usuario Registrado', 'usuario.jpg'),
(7, 'Javi', '$2y$10$mgBUFmgP3GIMlR.03tWeLeD141mPVKSHwk/s3OQ2W3ZORRdezUZbK', 'Javi', 'Druet Honrubia', 'javi@hotmail.com', '1993-03-20', 'España', 'Madrid', 'Avenida de ', 28033, 0, 'Usuario Registrado', 'misterT.jpg'),
(13, 'Prueba', '$2y$10$.HsV3pKt63NAB4NApF0PL.rU3gOmBBfXgu.jY1j/ClbC9kCNokklG', '', '', 'prueba', '0000-00-00', '', '', '', 0, 0, 'Usuario Registrado', 'prueba.png'),
(14, 'Usuario1', '$2y$10$bd/LlAjMkOy2aYOyb4ApRe2xYA0sFOPd5kcvNJWR54TPFA9MtIRYC', '', '', 'usuario1@user.com', '0000-00-00', '', '', '', 0, 0, 'Usuario Registrado', 'usuario.jpg'),
(15, 'Admin', '$2y$10$UiwAJxd89sfcl5WW/6KHNOh/vYcSjLCupWxI13Y1Dc9aksEZhC5Tu', 'Admin', 'Admin admin', 'admin@admin.es', '0000-00-00', 'Admin', 'Admin', 'Admin', 28033, 0, 'Administrador', 'usuario.jpg');

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
-- AUTO_INCREMENT de la tabla `capturas`
--
ALTER TABLE `capturas`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `hilo`
--
ALTER TABLE `hilo`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `juego`
--
ALTER TABLE `juego`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `logro`
--
ALTER TABLE `logro`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
