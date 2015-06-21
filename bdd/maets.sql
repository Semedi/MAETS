-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-06-2015 a las 20:43:39
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
  `Recomendado` tinyint(1) NOT NULL,
  `Fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `analisis`
--

INSERT INTO `analisis` (`IdJuego`, `IdUsuario`, `Texto`, `Recomendado`, `Fecha`) VALUES
(1, 6, 'La espera ha valido la pena. GTA V es el primer juego que he pre-comprado y realmente siento que ha sido una gran compra. Sin embargo me molestó un poco tener que esperar más de 1 hora y media para que se pudiese instalar. Dejando esto de lado, la optimización es realmente impresionante, me he sorprendido demasiado con lo tan bien optimizado que está, los gráficos son excelentes y me atrevo a decirlo porque no tengo una gráfica demasiado potente (tengo una GTX 650), así que no queda nada más que decir. Os invito a ver mis capturas de pantalla para que veáis como se ve. He estado jugando al modo multijugador, otro punto a favor, no tengo nada de lag. Además es muy variado y tiene muchas actividades, Me falta jugarlo aún más como para dar un análisis completo.', 1, '2015-06-01 13:26:29'),
(4, 7, 'Heroes of the storm es el futuro de los MOBA, dispone de una barbaridad de personajes jugables de las diferentes sagas de Blizzard, desde Diablo y Starcraft hasta Warcraft, cada uno de estos personajes tiene una función y será vital cumplirla para conseguir ganar la batalla. Si deseas un juego de acción frenetica del estilo de Lol o de Smite, estoy seguro que este juego te gustará.', 1, '2015-06-15 12:19:48'),
(13, 6, 'Pues compré este juego debido a diferentes recomendaciones que he recibido de varios amigos, y estoy bastante decepcionado, es un juego bastante extraño que triunfó hace una barbaridad, pero que ahora no termina de cuajar, no se, el estilo, los personajes y el modo de juego no son mis preferidos.\r\nEspero que a otra gente le guste, ya que yo no he salido contento con esta compra', 0, '2015-06-04 16:21:27'),
(15, 13, 'Me compre el juego hace unas horas y ya me he gastado 1203.50€ en cajas con armas especiales y aun no me ha tocado mi cuchillo DORADO!! ESTE JUEGO ME ESTA QUITANDO LA VIDA, POR DIOS QUE ALGUIEN ME AYUDE A DESCONECTAR DE LA CORRIENTE MI ORDENADOR PARA NO SEGUIR GASTÁNDOME MÁS DINERO!!!', 1, '2015-06-21 20:45:34');

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `capturas`
--

INSERT INTO `capturas` (`Id`, `IDUsuario`, `Nombre`, `Ruta`, `Fecha`) VALUES
(1, 6, 'Captura de Assassins Creed 1', 'ac1.jpg', '2015-06-09 15:28:38'),
(2, 6, 'Captura de Dragon Ball', 'dbx1.jpg', '2015-06-10 00:21:16'),
(3, 7, 'Captura de GTA V', 'gta5p.jpg', '2015-06-01 18:45:42'),
(4, 7, 'Captura de GTA V 2', 'GTAV.jpg', '2015-05-20 09:25:47'),
(5, 13, 'Captura de GTA V 3', 'gtav1.jpg', '2015-06-14 03:25:35'),
(6, 13, 'Captura de Rust', 'rust.jpg', '2015-01-06 13:21:00'),
(7, 14, 'Captura de Project Cars', 'project-cars.jpg', '2015-03-24 10:26:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE IF NOT EXISTS `compras` (
  `IDUsuario` int(10) NOT NULL,
  `IDJuego` int(10) NOT NULL,
  `Fecha de compra` datetime NOT NULL,
  `Precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`IDUsuario`, `IDJuego`, `Fecha de compra`, `Precio`) VALUES
(6, 1, '2015-06-01 12:43:00', 49),
(6, 4, '2015-03-16 15:18:27', 30),
(6, 12, '2015-06-21 00:00:00', 10),
(6, 13, '2015-06-21 00:00:00', 7),
(6, 22, '2015-06-21 00:00:00', 45),
(7, 3, '2015-06-21 00:00:00', 55),
(7, 4, '2015-06-03 00:00:00', 0),
(7, 9, '2015-06-21 00:00:00', 15),
(13, 15, '2015-06-21 00:00:00', 5),
(13, 18, '2015-06-21 00:00:00', 50),
(13, 21, '2015-06-21 00:00:00', 13);

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
(0, 7, '2015-06-21'),
(1, 6, '2015-06-18'),
(2, 13, '2015-06-21'),
(3, 7, '2015-06-21'),
(4, 6, '2015-06-01'),
(5, 14, '2015-06-21'),
(7, 6, '2015-06-21'),
(9, 7, '2015-05-11'),
(10, 6, '2015-06-21'),
(12, 6, '2015-04-21'),
(12, 13, '2015-06-21'),
(14, 14, '2015-06-21'),
(17, 14, '2015-06-21'),
(18, 14, '2015-06-21'),
(19, 7, '2015-06-21'),
(20, 6, '2015-06-21'),
(22, 13, '2015-06-21');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `hilo`
--

INSERT INTO `hilo` (`Id`, `Titulo`, `Texto`, `Fecha_de_creacion`, `IdUsuario`) VALUES
(1, 'Bienvenidos a GTA Online', 'Buenas tardes, creo este foro para ir añadiendo información sobre el progreso que voy consiguiendo en el GTA V, en el modo multijugador, espero que ayudeis con vuestros consejos!!', '2015-06-18', 6),
(3, 'Instalando Dishonored', 'Estoy teniendo problemas al instalar el juego, ¿Alguien me puede ayudar a arreglarlo?\r\nEl error que me da es 404 tu no sabes instalar juegos aqui.\r\n\r\nGracias de antemano', '2015-06-13', 13),
(5, 'Project cars es un simulador', 'Creo este tema para que deis vuestras configuraciones de pc para este juego, diciendo como jugáis y con que periféricos aprovecháis este pedazo de juego!  \r\n', '2015-06-07', 7);

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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `juego`
--

INSERT INTO `juego` (`Id`, `Titulo`, `Portada`, `Precio`, `Edad`, `Descripcion`, `DescripcionLarga`, `Companyia`, `Tipo`, `Etiquetas`, `Idiomas`, `Ventas`, `Fecha`) VALUES
(1, 'Grand Theft Auto V', 'PortadaGTA.png', 49.99, 18, '', '', 'Rockstar', 'Accion', '', '', 0, '2015-04-14'),
(2, 'Dishonored', 'PortadaDishonored.png', 14.99, 18, 'Violencia brutal en una ciudad portaria infectada por la peste', 'Ambientado en un mundo industrial y retrofuturista, Dishonored es definido por sus propios autores como un juego sobre la violencia brutal. La ciudad portuaria está infectada por la peste; la mitad de la población está muerta o agonizando, y la otra mitad vive con miedo a un régimen opresor.', 'Bethesda Studios', 'Aventura', 'Accion, Primera persona, Aventura, Ciencia Ficcion', '', 0, '2012-10-12'),
(3, 'The Witcher 3: Wild Hunt', 'PortadaTheWitcherIII.png', 54.99, 18, 'Tercera entrega de la serie de The Witcher', 'The Witcher 3: Wild Hunt es la tercera entrega de la serie The Witcher, que nos devuelve al conocido cazador de bestias Geralt de Rivia en una nueva aventura. Rol de la vieja escuela en un fascinante mundo de fantasía, cargado de grandes historias y con un gran acabado artístico y tecnológico.', 'CD Projekt RED', 'Rol', 'Rol, RPG, Accion RPG', '', 0, '2015-05-19'),
(4, 'Heroes of the Storm', 'PortadaHeroesOfTheStorm.png', 0, 12, 'El futuro de los MOBA esta en Hots', 'Los héroes y villanos de Diablo, StarCraft y Warcraft se dan cita en este MOBA 5 vs. 5 desarrollado por Blizzard, que nos permite combatir en varios escenarios con sus propias particularidades. Obtén el poder de los dioses dominando sus templos, o invoca a un temible gólem de sangre recogiendo calaveras, en este juego de acción estratégica de corte free-to-play.', 'Blizzard', 'Free_to_Play', 'Estrategia, Tiempo Real, MOBA, Ciencia ficcion, Diablo, Starcraft, Warcraft, Cooperativo, Competiivo', '', 0, '2015-06-02'),
(5, 'Pillars of Eternity', 'PortadaPillarsOfEternity.png', 29.99, 18, 'Juego RPG ambientado en mundo de fantasia', 'Pillars of Eternity es un juego RPG ambientado en un mundo de fantasía, que trata de recuperar la esencia de grandes clásicos del género rolero como Planescape: Torment, Baldur’s Gate o Icewind Dale', 'Obsidian', 'Rol', 'Combate por turnos, Rol, Fantasia', '', 0, '2015-03-26'),
(6, 'La Tierra Media: Sombras de Mordor', 'PortadaSombrasDeMordor.png', 34.99, 18, 'Aventura ambientada en el universo de fantasia del Señor de los Anillos', 'Aventura ambientada en el universo de fantasía de El Señor de los Anillos que nos pone en la piel de un misterioso aventurero conocido como Talion, decidido a alcanzar las sombrías tierras de Mordor.', 'Monolith', 'Aventura', 'Accion, Aventura, Tercera Persona, Golum, Fantasia, Señor de los Anillo, LotR', '', 0, '2014-09-30'),
(7, 'Project Cars', 'PortadaProjectCars.png', 39.99, 3, 'Simulador de velocidad', 'Project Cars es un simulador de velocidad desarrollado por Slightly Mad Studios, responsables de Need for Speed: Shift. El juego cuenta con gran variedad de tipos de vehículos, climatología variable y un sistema de control que apuesta por el realismo.', 'Slightly Mad Studios', 'Carreras', 'Conduccion, GT, Formula 1, Carreras, Simulador', '', 0, '2015-05-07'),
(8, 'ARK: Survival Evolved', 'PortadaArk.png', 19.99, 18, 'Survival en una isla con dinosaurios', 'Tras despertar en una misteriosa isla que da nombre al juego, el jugador deberá cazar, recolectar alimentos y recursos, investigar nuevas tecnologías o construir su propio refugio en una nueva aventura de supervivencia. ¿Su punto diferenciador? La caza y domesticación de dinosaurios leviatán y otras criaturas primitivas.', 'Studio Wildcard', 'Acceso_Anticipado', 'Accion, Primera persona, aventura, fantasia, dinosaurios, ficcion, multijugador, online', '', 0, '0000-00-00'),
(9, 'This War of Mine', 'PortadaThisWarOfMine.png', 14.99, 12, 'Sobrevive a las penurias de la guerra', 'Sobrevive a las penurias de la guerra en la piel de un civil, que por el día debe velar por la seguridad de su refugio, mientras que por las noches sale al exterior en busca de recursos para mantenerse con vida.', '11 bit Studios', 'Indie', 'Estrategia, Tiempo Real, Bélico, Guerra, Survival', '', 0, '2014-11-14'),
(10, 'Fifa 15', 'PortadaFifa15.png', 54.99, 3, 'Videojuego de la serie FIFA', 'Videojuego de la serie FIFA para la temporada de fútbol 2014-2015. El título presenta licencias de más de 25 competiciones oficiales, y entre sus novedades destacan un comportamiento de los porteros mucho más reales, nuevas animaciones para los jugadores, cambios en el comportamiento del esférico y un ritmo de juego más rápido, entre otros tantos.', 'EA Sports', 'Deportes', 'Deportes, Futbol, 2015', 'Espanyol', 0, '2014-09-25'),
(11, 'Rocksmith® 2014', 'PortadaRockSmith.jpg', 11.99, 3, 'Rocksmith 2014 Edition is the fastest way to learn guitar.', 'Rocksmith 2014 Edition is the fastest way to learn guitar. Plug in any real guitar or bass and join over 1 million people who have learned with the award-winning Rocksmith method. This official sequel is bigger, better, and faster than ever.', 'Ubisoft', 'Casual', 'Musica, guitarra, canciones, tocar, new songs, otros', 'Espanyol', 0, '2013-10-24'),
(12, 'The Forest', 'PortadaTheForest.jpg', 10.4, 18, 'Survival en una isla perdida con salvajes', 'El único superviviente tras un accidente de avión deberá buscar la forma de mantenerse con vida, en este Survival-Horror de corte abierto ambientado en un misterio bosque poblado por una terrible sociedad de mutantes caníbales.', 'Endnight Games', 'Acceso_Anticipado', 'Terror, miedo, supervivencia, accion, lucha', 'Ingles', 0, '0000-00-00'),
(13, 'Grim Fandango Remastered', 'PortadaGrimFandango.jpg', 7.49, 3, 'One of the most acclaimed adventure games of all time is now back, better than ever. ', 'Grim Fandango Remastered has the all the beautiful art and engaging story fans remember, but has also been remastered to look, sound, and control even better than the award-winning original release.', 'Double Fine Productions ', 'Casual', 'Casual, raro, feo, no me gusta, fantasmas, aventura', 'Espanyol', 0, '2015-01-15'),
(14, 'Don''t Starve Together', 'PortadaDontStarve.jpg', 10.04, 12, 'Expansión independiente de Dont Starve', 'Expansión independiente de carácter multijugador que lleva la salvaje supervivencia de Don''t Starve al terreno de la cooperación en partidas públicas o privadas.', 'Klei Entertainment', 'Indie', 'Survival, multijugador, varios jugadores, internet, dont starve', 'Ingles', 0, '2015-06-21'),
(15, 'Counter-Strike: Global Offensive', 'PortadaCounterStrike.jpg', 5.49, 18, 'Counter-Strike: Global Offensive (CS: GO)', 'Counter-Strike: Global Offensive (CS: GO) ampliará la jugabilidad de acción por equipos que fue pionera en su lanzamiento hace 12 años. CS: GO incluirá nuevos mapas, personajes y armas y ofrecerá versiones actualizadas del contenido clásico de CS (de_dust, etc.).', 'Valve', 'Multijugador_Masivo', 'Accion, disparos, multijugador, Counter Strike,', 'Ingles', 0, '2012-08-21'),
(16, 'Total War: ATTILA', 'PortadaTotalWarA.jpg', 26.79, 18, 'Otra entrega mas de la saga Total War', 'Against a darkening background of famine, disease and war, a new power is rising in the great steppes of the East. With a million horsemen at his back, the ultimate warrior king approaches, and his sights are set on Rome… The next instalment in the multi award-winning PC series that combines turn-based ', 'Creative Assembly ', 'Estrategia', 'Estrategia, turnos, dominar el mundo, atila, roma, historia, batallas', 'Espanyol', 0, '2015-02-17'),
(17, 'Total War™: ROME II Emperor Edition', 'PortadaTotalWarRII.jpg', 13.74, 18, 'Emperor Edition es la edición definitiva de ROME II', 'Acerca de Total War: ROME II - Emperor Edition Emperor Edition es la edición definitiva de ROME II, y contiene un sistema político mejorado, cadenas de construcción renovadas, batallas reequilibradas y mejores gráficos tanto en campaña como en batalla.', 'Creative Assembly ', 'Estrategia', 'Estrategia, turnos, dominar el mundo, roma, historia, batallas', 'Espanyol', 0, '2013-09-02'),
(18, 'World of Warcraft: Warlords of Draenor', 'PortadaWOD.jpg', 49.99, 18, 'Expansión del famoso juego de WoW', 'Tras sufrir una derrota frente a la Alianza, las fuerzas de la Horda preparan sus defensas en un nuevo territorio, el mundo de Draenor, en el que será vital dominar el arte de construir y gestionar grandes ciudadelas. Aparte de un lavado de cara a nivel gráfico, esta expansión de World of Warcraft también permite alcanzar el nivel 100 de habilidad.', 'Blizzard', 'Multijugador_Masivo', 'Wow, multijugador, 40 millones de jugadores, online, pvp, pve, mazmorras, raids', 'Espanyol', 0, '2014-11-13'),
(19, 'Farm Expert 2016', 'PortadaFarmExpert.jpg', 16.99, 12, 'Farm Expert 2016 traslada al jugador al campo', 'Farm Expert 2016 traslada al jugador al campo y le otorga el control total de una granja desde la comodidad de su casa.', 'Silden', 'Simuladores', 'Granja, vaca, toooooro, bichos, tractores, camiones, simulator', 'Espanyol', 0, '2015-06-19'),
(20, 'Euro Truck Simulator 2', 'PortadaEuroTrack.jpg', 3.99, 3, 'Travel across Europe as king of the road', 'Travel across Europe as king of the road, a trucker who delivers important cargo across impressive distances! With dozens of cities to explore from the UK, Belgium, Germany, Italy, the Netherlands, Poland, and many more, your endurance, skill and speed will all be pushed to their limits.', 'SCS Software ', 'Simuladores', 'Conduccion, camiones, accion, muerte y destruccion, explosiones y bombas', 'Espanyol', 0, '2013-01-16'),
(21, 'NBA 2K15', 'PortadaNBA2k15.jpg', 12.49, 12, 'Por fin esposible disfrutar de la NBA', 'Por primera vez en la historia de la franquicia, será posible disfrutar de la versión para PC de NBA 2K15 con todas las características de la nueva generación. NBA 2K, que ha sido nominado para más de 70 premios al mejor juego del año, es el simulador de baloncesto definitivo.', '2K', 'Deportes', 'deportes, NBA, baloncesto, 2015, PC, canasta, cahcha', 'Espanyol', 0, '2014-10-06'),
(22, 'F1 2015', 'PortadaF12015.jpg', 44.99, 3, 'Juego de F1 temporada 2015', 'Compite como un campeón en F1 2015. Un nuevo espectacular motor gráfico y su estilo televisivo te pondrán en el centro de la acción.', 'Codemasters ', 'Carreras', 'Carreras, velocidad, F1, Fernando Alonso es un paquete este año, lentorro', 'Espanyol', 0, '2015-06-10');

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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `logro`
--

INSERT INTO `logro` (`Id`, `JuegoID`, `Titulo`, `Puntos`, `Tipo`, `Imagen`) VALUES
(1, 3, 'Lila y grosellas', 15, 'Bronce', 'logroTW3.png'),
(2, 3, 'Un amigo en apuros', 15, 'Bronce', 'logroTW3.png'),
(3, 3, 'Caida Libre', 15, 'Bronce', 'logroTW3.png'),
(4, 3, 'Luchador', 30, 'Plata', 'logroTW3.png'),
(5, 3, 'Control de plagas', 30, 'Plata', 'logroTW3.png'),
(6, 3, 'Senda recorrida', 65, 'Oro', 'logroTW3.png'),
(7, 3, 'Las fronteras de lo imposible', 65, 'Oro', 'logroTW3.png'),
(8, 2, 'Deshonrado', 25, 'Bronce', 'logroDishonored.jpg'),
(9, 2, 'Excomunión', 25, 'Bronce', 'logroDishonored.jpg'),
(10, 2, 'Guardaespaldas', 25, 'Bronce', 'logroDishonored.jpg'),
(11, 2, 'Manos limpias', 50, 'Plata', 'logroDishonored.jpg'),
(12, 2, 'Negociador', 100, 'Platino', 'logroDishonored.jpg'),
(13, 7, 'A tu Izquierda', 20, 'Bronce', 'logroProjectCars.jpg'),
(14, 7, 'Mitad piloto, mitad demonio', 20, 'Bronce', 'logroProjectCars.jpg'),
(15, 7, 'Embajador de la Comunidad', 20, 'Bronce', 'logroProjectCars.jpg'),
(16, 7, 'Mago del Tiempo de Vuelta', 50, 'Plata', 'logroProjectCars.jpg'),
(17, 7, 'De Cero a Héroe', 75, 'Oro', 'logroProjectCars.jpg'),
(18, 5, 'Crea un aventurero', 25, 'Bronce', 'logroPOE.png'),
(19, 5, 'Cinco mejoras de baluarte', 25, 'Bronce', 'logroPOE.png'),
(20, 5, 'Encantador', 50, 'Plata', 'logroPOE.png'),
(21, 5, 'Pacifismo relativo', 75, 'Oro', 'logroPOE.png'),
(22, 5, 'Triple Corona', 100, 'Platino', 'logroPOE.png');

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
(1, 7, '2015-06-18 00:00:00', 'Buenas, aquí otro jugador que cuando juegue un par de horas os empezará a dar sus consejos!'),
(1, 13, '2015-06-21 00:11:11', 'Hola'),
(5, 13, '2015-06-09 00:00:00', 'Yo utilizo una silla con un motor que va moviendose a medida que vas girando en el juego, ademas tengo el oculus rift para reventar en la experiencia de realidad virtual!!');

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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tabla de información del usuario';

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Id`, `Nick`, `Contrasenia`, `Nombre`, `Apellidos`, `Correo`, `Fecha de Nacimiento`, `Pais`, `Ciudad`, `Direccion`, `Codigo Postal`, `Puntuacion`, `Rol`, `Imagen`, `Companyia`) VALUES
(6, 'Drulas', '$2y$10$idews1ZgezwJur/oOqb26uBHaLdC2kNFiVy.iK2iCR6rAvDzzG59q', 'Javier', 'Drulas', 'duruleto@drulas.com', '2001-03-20', 'Drulon', 'Drulopia', 'Avenida', 28033, 0, 'Usuario Registrado', 'usuario.jpg', ''),
(7, 'Javi', '$2y$10$mgBUFmgP3GIMlR.03tWeLeD141mPVKSHwk/s3OQ2W3ZORRdezUZbK', 'Javi', 'Druet Honrubia', 'javi@hotmail.com', '1993-03-20', 'España', 'Madrid', 'Avenida de ', 28033, 0, 'Usuario Registrado', 'misterT.jpg', ''),
(13, 'Prueba', '$2y$10$.HsV3pKt63NAB4NApF0PL.rU3gOmBBfXgu.jY1j/ClbC9kCNokklG', '', '', 'prueba', '0000-00-00', '', '', '', 0, 0, 'Usuario Registrado', 'holi.jpg', ''),
(14, 'Usuario1', '$2y$10$bd/LlAjMkOy2aYOyb4ApRe2xYA0sFOPd5kcvNJWR54TPFA9MtIRYC', '', '', 'usuario1@user.com', '0000-00-00', '', '', '', 0, 0, 'Usuario Registrado', 'usuario.jpg', ''),
(15, 'Admin', '$2y$10$UiwAJxd89sfcl5WW/6KHNOh/vYcSjLCupWxI13Y1Dc9aksEZhC5Tu', 'Admin', 'Admin admin', 'admin@admin.es', '0000-00-00', 'Admin', 'Admin', 'Admin', 28033, 0, 'Administrador', 'usuario.jpg', '');

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
-- Volcado de datos para la tabla `videos`
--

INSERT INTO `videos` (`Id`, `IDUsuario`, `Nombre`, `Enlace`, `Fecha`) VALUES
(1, 6, 'Video de la portada', 'https://youtu.be/Ob91E5DXIdY', '2015-06-04 10:13:13'),
(2, 7, 'Trailer 1 GTA V', 'https://youtu.be/SC66xH7s-0M', '2015-05-12 16:31:41'),
(3, 13, 'Video Rust', 'https://youtu.be/dzWQ1gjPcM0', '2015-06-14 08:35:40'),
(4, 6, 'Video Project-Cars', 'https://youtu.be/TE6Chu7bMpY', '2015-04-15 00:17:16');

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
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `hilo`
--
ALTER TABLE `hilo`
MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `juego`
--
ALTER TABLE `juego`
MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `logro`
--
ALTER TABLE `logro`
MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `videos`
--
ALTER TABLE `videos`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
