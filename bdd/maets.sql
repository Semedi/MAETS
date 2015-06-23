-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-06-2015 a las 19:10:02
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
(6, 13),
(6, 14),
(6, 15),
(7, 6),
(15, 6),
(15, 19),
(17, 19),
(19, 6),
(19, 7),
(19, 15),
(19, 17);

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
(15, 13, 'Me compre el juego hace unas horas y ya me he gastado 1203.50€ en cajas con armas especiales y aun no me ha tocado mi cuchillo DORADO!! ESTE JUEGO ME ESTA QUITANDO LA VIDA, POR DIOS QUE ALGUIEN ME AYUDE A DESCONECTAR DE LA CORRIENTE MI ORDENADOR PARA NO SEGUIR GASTÁNDOME MÁS DINERO!!!', 1, '2015-06-21 20:45:34'),
(18, 16, 'Esta última expansión, desde mi punto de vista, ha sido una de las mejores hasta el momento, haciendo uso de una historia pasada, han hecho que este juego me vuelva a hacer sentir lo que al principio, la temática de la expansión, además de las nuevas mejoras que han incluido en el juego, provocan que vuelva a jugarlo como antes, días de juego sin control, donde raidear me suponía un plan perfecto para pasar el fin de semana. Las anteriores expansiones como Cataclysm ( Fue una gran decepción Alamuerte, esperaba mucho más de este boss) y MoP, no me hacían sentir lo que el antiguo WoW, con esta última expansión, han hecho que tome más interés en la trama de la historia que en el hecho de conseguir logros y equipo, algo que las otras expansiones no lograban.', 1, '2015-06-01 09:45:43'),
(23, 19, 'Hagrid: You''re a Team Killer, Harry.\r\n\r\nHarry: I-I''m a what?\r\n\r\nHagrid: A Team Killer. And a thumping good one at that, I''d wager.\r\n\r\nHarry: No, you''ve made a mistake. I can''t be...a-a Team Killer. I mean, I''m just... a wizard. Just a wizard.\r\n\r\nHagrid: Well, Just a wizard, did you ever make anything happen? Anything you couldn''t explain when you were angry or scared?', 0, '2015-05-13 14:45:52'),
(33, 14, 'Imagine being stuck in a car for a fourteen hour drive. With three people you hate. While every other driver on the road is either drunk or deliberately trying to run you off the road. And you only have one sandwich left. And no head lights. Thats basically what the first few missions feel like. After that, it only gets harder because your driver has been blighted, your navigator was killed, and the other guy ate the sandwich because he had been driven insane. Eventually, after replacing a few people, you get to the point where, after a few pit stops, you manage to get rid of them and youre happily riding along with great people, and you think nothing bad is going to happen because youve got the perfect group of passengers. Then an eightteen-wheeler smashes your car killing all of you. Thats basically how this game plays. 10/10 would make that drive again.', 1, '2015-05-13 11:40:36'),
(34, 7, 'Tras haber perdido la mano derecha, he estado jugando con la izquierda, me duele el cuello y no puedo cerrar la mano desde hace dos horas. Si llego a perder la izquierda, hubiera jugado con los pies o aporreando el ratón con la cabeza. Es un juego increíblemente estúpido y a la vez muy viciante y adictivo. Ahora miro al pasado y me pregunto "¿recuerdas cuando no jugabas a Clicker Heroes y todavía tenías vida social?". :D \r\n\r\nSi tienes algo que hacer con tu vida, NO LO JUEGUES', 1, '2015-06-08 00:00:00');

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
(7, 14, 'Captura de Project Cars', 'project-cars.jpg', '2015-03-24 10:26:17'),
(8, 16, 'Foto de mi juego en desarrollo', 'Fallout.jpg', '2015-06-21 13:33:44'),
(9, 16, 'Fondo de pantalla de Fallout 4', 'Fallout4SV.jpeg', '2015-06-16 15:28:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE IF NOT EXISTS `compras` (
  `IDUsuario` int(10) NOT NULL,
  `IDJuego` int(10) NOT NULL,
  `Fecha_de_compra` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`IDUsuario`, `IDJuego`, `Fecha_de_compra`) VALUES
(6, 1, '2015-06-01 12:43:00'),
(6, 4, '2015-03-16 15:18:27'),
(6, 9, '2015-05-18 05:34:45'),
(6, 12, '2015-06-21 00:00:00'),
(6, 13, '2015-06-21 00:00:00'),
(6, 22, '2015-06-21 00:00:00'),
(6, 27, '2015-06-23 02:54:01'),
(7, 3, '2015-06-21 00:00:00'),
(7, 4, '2015-06-03 00:00:00'),
(7, 9, '2015-06-21 00:00:00'),
(7, 22, '2015-02-28 17:54:45'),
(13, 10, '2015-03-01 00:00:00'),
(13, 11, '2015-04-09 00:00:00'),
(13, 15, '2015-06-21 00:00:00'),
(13, 18, '2015-06-21 00:00:00'),
(13, 21, '2015-06-21 00:00:00'),
(15, 29, '2015-01-06 17:54:45'),
(16, 4, '2014-12-24 12:03:34'),
(16, 30, '2015-03-18 23:54:45'),
(17, 33, '2015-06-09 00:00:00'),
(19, 25, '2015-02-01 00:00:00');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `hilo`
--

INSERT INTO `hilo` (`Id`, `Titulo`, `Texto`, `Fecha_de_creacion`, `IdUsuario`) VALUES
(1, 'Bienvenidos a GTA Online', 'Buenas tardes, creo este foro para ir añadiendo información sobre el progreso que voy consiguiendo en el GTA V, en el modo multijugador, espero que ayudeis con vuestros consejos!!', '2015-06-18', 6),
(3, 'Instalando Dishonored', 'Estoy teniendo problemas al instalar el juego, ¿Alguien me puede ayudar a arreglarlo?\r\nEl error que me da es 404 tu no sabes instalar juegos aqui.\r\n\r\nGracias de antemano', '2015-06-13', 13),
(5, 'Project cars es un simulador', 'Creo este tema para que deis vuestras configuraciones de pc para este juego, diciendo como jugáis y con que periféricos aprovecháis este pedazo de juego!  \r\n', '2015-06-07', 7),
(6, 'Truquillos para Magicka2', 'Algun consejo que dar con Magicka 2? Los conceptos del juego son bastante simples pero llevarlos a la practica es complicado.\r\nCuales son los mejores hechizos? y con cuales los juntais para hacerlos mas potentes?', '2015-06-14', 6);

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

--
-- Volcado de datos para la tabla `juego`
--

INSERT INTO `juego` (`Id`, `Titulo`, `Portada`, `Precio`, `Edad`, `Descripcion`, `DescripcionLarga`, `Companyia`, `Tipo`, `Etiquetas`, `Idiomas`, `Ventas`, `Fecha`) VALUES
(1, 'Grand Theft Auto V', 'PortadaGTA.png', 49.99, 18, ' Por fin llega GTA 5', 'Tras años y años de espera, por fin llega a PC la aclamada quinta parte de la saga mas espectacular de todos los tiempos, GTA!!\r\nQuinta entrega de la afamada saga de juegos sandbox de Rockstar Games. Con una atrevida nueva dirección en la libertad en mundo abierto, la narrativa, tres protagonistas, la jugabilidad basada en misiones y el multijugador online, Grand Theft Auto V se centra en la búsqueda del todopoderoso dinero en un reinventado Sur de California en la actualidad', 'Rockstar', 'Accion', 'GTA, V, Accion, Sandbox, aventura, Trevor loco, multijugador, ', 'Espanyol', 0, '2015-04-14'),
(2, 'Dishonored', 'PortadaDishonored.png', 14.99, 18, 'Violencia brutal en una ciudad portaria infectada por la peste', 'Ambientado en un mundo industrial y retrofuturista, Dishonored es definido por sus propios autores como un juego sobre la violencia brutal. La ciudad portuaria está infectada por la peste; la mitad de la población está muerta o agonizando, y la otra mitad vive con miedo a un régimen opresor.', 'Bethesda Studios', 'Aventura', 'Accion, Primera persona, Aventura, Ciencia Ficcion', 'Ruso', 0, '2012-10-12'),
(3, 'The Witcher 3: Wild Hunt', 'PortadaTheWitcherIII.png', 54.99, 18, 'Tercera entrega de la serie de The Witcher', 'The Witcher 3: Wild Hunt es la tercera entrega de la serie The Witcher, que nos devuelve al conocido cazador de bestias Geralt de Rivia en una nueva aventura. Rol de la vieja escuela en un fascinante mundo de fantasía, cargado de grandes historias y con un gran acabado artístico y tecnológico.', 'CD Projekt RED', 'Rol', 'Rol, RPG, Accion RPG', 'Espanyol', 0, '2015-05-19'),
(4, 'Heroes of the Storm', 'PortadaHeroesOfTheStorm.png', 0, 12, 'El futuro de los MOBA esta en Hots', 'Los héroes y villanos de Diablo, StarCraft y Warcraft se dan cita en este MOBA 5 vs. 5 desarrollado por Blizzard, que nos permite combatir en varios escenarios con sus propias particularidades. Obtén el poder de los dioses dominando sus templos, o invoca a un temible gólem de sangre recogiendo calaveras, en este juego de acción estratégica de corte free-to-play.', 'Blizzard', 'Free_to_Play', 'Estrategia, Tiempo Real, MOBA, Ciencia ficcion, Diablo, Starcraft, Warcraft, Cooperativo, Competiivo', 'Espanyol', 0, '2015-06-02'),
(5, 'Pillars of Eternity', 'PortadaPillarsOfEternity.png', 29.99, 18, 'Juego RPG ambientado en mundo de fantasia', 'Pillars of Eternity es un juego RPG ambientado en un mundo de fantasía, que trata de recuperar la esencia de grandes clásicos del género rolero como Planescape: Torment, Baldur’s Gate o Icewind Dale', 'Obsidian', 'Rol', 'Combate por turnos, Rol, Fantasia', 'Ingles', 0, '2015-03-26'),
(6, 'La Tierra Media: Sombras de Mordor', 'PortadaSombrasDeMordor.png', 34.99, 18, 'Aventura ambientada en el universo de fantasia del Señor de los Anillos', 'Aventura ambientada en el universo de fantasía de El Señor de los Anillos que nos pone en la piel de un misterioso aventurero conocido como Talion, decidido a alcanzar las sombrías tierras de Mordor.', 'Monolith', 'Aventura', 'Accion, Aventura, Tercera Persona, Golum, Fantasia, Señor de los Anillo, LotR', 'Espanyol', 0, '2014-09-30'),
(7, 'Project Cars', 'PortadaProjectCars.png', 39.99, 3, 'Simulador de velocidad', 'Project Cars es un simulador de velocidad desarrollado por Slightly Mad Studios, responsables de Need for Speed: Shift. El juego cuenta con gran variedad de tipos de vehículos, climatología variable y un sistema de control que apuesta por el realismo.', 'Slightly Mad Studios', 'Carreras', 'Conduccion, GT, Formula 1, Carreras, Simulador', 'Espanyol', 0, '2015-05-07'),
(8, 'ARK: Survival Evolved', 'PortadaArk.png', 19.99, 18, 'Survival en una isla con dinosaurios', 'Tras despertar en una misteriosa isla que da nombre al juego, el jugador deberá cazar, recolectar alimentos y recursos, investigar nuevas tecnologías o construir su propio refugio en una nueva aventura de supervivencia. ¿Su punto diferenciador? La caza y domesticación de dinosaurios leviatán y otras criaturas primitivas.', 'Studio Wildcard', 'Acceso_Anticipado', 'Accion, Primera persona, aventura, fantasia, dinosaurios, ficcion, multijugador, online', 'Ingles', 0, '0000-00-00'),
(9, 'This War of Mine', 'PortadaThisWarOfMine.png', 14.99, 12, 'Sobrevive a las penurias de la guerra', 'Sobrevive a las penurias de la guerra en la piel de un civil, que por el día debe velar por la seguridad de su refugio, mientras que por las noches sale al exterior en busca de recursos para mantenerse con vida.', '11 bit Studios', 'Indie', 'Estrategia, Tiempo Real, Bélico, Guerra, Survival', 'Espanyol', 0, '2014-11-14'),
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
(22, 'F1 2015', 'PortadaF12015.jpg', 44.99, 3, 'Juego de F1 temporada 2015', 'Compite como un campeón en F1 2015. Un nuevo espectacular motor gráfico y su estilo televisivo te pondrán en el centro de la acción.', 'Codemasters ', 'Carreras', 'Carreras, velocidad, F1, Fernando Alonso es un paquete este año, lentorro', 'Espanyol', 0, '2015-06-10'),
(23, 'Magicka 2', 'PortadaMagicka2.jpg', 29.99, 12, 'Los poderosos magos encapuchados vuelven a la carga', 'Los poderosos magos encapuchados de Paradox Interactive vuelven a la carga con esta divertida aventura de acción en la que, una vez más, tenemos a nuestro alcance ocho elementos mágicos para crear decenas de sortilegios con los que provocaremos el caos entre las filas enemigas. Esta secuela mantiene intacto el divertido multijugador cooperativo del original y su retante Modo Desafío, en el que hay que sobrevivir a peligrosas oleadas de monstruos.', 'Pieces Interactive', 'Accion', 'Magia, multijugador, magicka, capuchas, poderes, jugabilidad', 'Espanyol', 0, '2015-05-26'),
(24, 'Dota 2', 'PortadaDota2.jpg', 0, 12, 'Segunda entrega de Defense of the Ancients', 'Segunda entrega de Defense of the Ancients, cuyo desarrollo surge de la colaboración de Valve con Ice Frog. Y la cual respetará los más de 100 héroes del original, junto con sus items y las distintas mejoras, dejando de lado el motor de Warcraft III y se apuesta por el Source de la propia Valve', 'Valve', 'Free_to_Play', 'Free to play, free, multijugador, MOBA, toston', 'Espanyol', 0, '2013-07-09'),
(25, 'Assassin''s Creed® Syndicate', 'PortadaACS.jpg', 49.99, 18, 'Asesinos en Londres industrial', 'Entrega de la serie Assassin''s Creed desarrollada por los estudios de Ubisoft en Quebec y que apuesta por llevarnos a la época victoriana de la mano de una nueva trama de asesinatos, aventuras, plataformas y misterio. El título está protagonizado por dos hermanos gemelos y se centra en la modalidad de juego individual.', 'Ubisoft', 'Aventura', 'Asesinos, assassins creed, ezio, industrial, londres, saga, accion', 'Espanyol', 0, '2015-10-23'),
(26, 'Devil May Cry 4: Special Edition', 'PortadaDMC4.jpg', 59.99, 18, 'DMC4, el gran juego de acción', 'Edición remasterizada de la cuarta entrega de la serie Devil May Cry que destaca por su mejora tecnológica en forma de una resolución 1080p y 60 frames por segundo.', 'Capcom', 'Accion', 'Dante, Virgil, Accion, hack and slash, demonios, angeles, Sparta, Devil May Cry', 'Espanyol', 0, '2015-06-22'),
(27, 'The Elder Scrolls Online: Tamriel Unlimited', 'PortadaESOTU.jpg', 39.99, 18, 'El mundo de Skyrim ahora online', 'The Elder Scroll Online: Tamriel Unlimited es la nueva versión de este MMORPG que adopta un modelo de negocio sin suscripciones mensuales, y que amplía su oferta jugable con nuevas mazmorras para grupos, la región de Craglorn donde afrontar misiones, desafíos y otros retos destinados a jugadores veteranos; así como los nuevos sistemas de Justicia y Campeones.', 'Bethesda', 'Multijugador_Masivo', 'MMO, Skyrim, Dovakinh, Dragones, magia, accion', 'Ingles', 0, '2014-04-04'),
(28, 'Pro Cycling Manager 2015', 'PortadaCycling.jpg', 29.99, 3, 'Gestiona tu propio equipo de ciclismo', 'Gestiona tu propio equipo de ciclismo para llevarlo a lo más alto de las competiciones más importantes del mundo. Disfruta del Tour de Francia gracias a la licencia oficial con la que cuenta el juego.', 'Cyanide', 'Deportes', 'Ciclismo, deportes', 'Espanyol', 0, '2015-06-18'),
(29, 'Miner Warfare', 'PortadaMW.jpg', 9.99, 3, '8 players, 4 Controllers!', '8 players local multiplayer bonanza with only 4 controllers! In Miner Warfare you dig for gold. But you''ll spend most of the match shooting in your friends''s face, mining holes with laser cannon, throwing buggers and detonating atomic bombs. WARNING: excessive use can destroy friendship.', 'Heartbit Interactive ', 'Casual', 'Mineros, batalla, pelea, 8 jugadores, 4 mandos', 'Ingles', 0, '2012-04-06'),
(30, 'Sid Meier''s Civilization V', 'PortadaCivilizationV.jpg', 17.99, 12, 'Quinta entrega de la reputada saga', 'Quinta entrega de la reputada saga de estrategia por turnos creada por Sid Meier. Civilization V estrena para la ocasión un nuevo engine gráfico, nuevo sistema de combate, interacciones diplomáticas más completas, modos multijugador y gran cantidad de mejoras.', 'Firaxis Games', 'Estrategia', 'Estrategia, civilization, turnos, ciudad, colonia', 'Espanyol', 0, '2010-09-24'),
(31, 'Ori and the Blind Forest', 'PortadaOri.jpg', 24.99, 3, 'Ori and the Blind Forest narra la historia de un joven huérfano', 'Ori and the Blind Forest narra la historia de un joven huérfano destinado a convertirse en leyenda a través de un juego de acción y plataformas preciosista creado por Moon Studios para PC.', 'Moon Studios GmbH ', 'Indie', 'Ori, plataformas, graficos, detalles. luz y oscuridad', 'Espanyol', 0, '2015-03-11'),
(32, 'DiRT Rally', 'PortadaDirt.jpg', 39.49, 3, 'DiRT Rally supone el retorno al todoterreno', 'DiRT Rally supone el retorno a una experiencia de carreras todoterreno más auténtica y peligrosa. Publicamos contenido gratuito cada mes, además de un continuo flujo de mejoras del juego.', 'Codemasters', 'Carreras', 'Velocidad, rally, coches, carreras', 'Espanyol', 0, '2015-04-27'),
(33, 'Darkest Dungeon', 'PortadaDDG.jpg', 15.99, 18, 'Darkest Dungeon is a challenging gothic RPG', 'Darkest Dungeon is a challenging gothic roguelike turn-based RPG about the psychological stresses of adventuring. Recruit, train, and lead a team of flawed heroes against unimaginable horrors, stress, famine, disease, and the ever-encroaching dark. Can you keep your heroes together when all hope is lost?', 'Red Hook Studios', 'Acceso_Anticipado', 'Acceso Anticipado, greenlight, rpg, dificil, locura, gotico', 'Ingles', 0, '0000-00-00'),
(34, 'Clicker Heroes', 'PortadaClickerHeroes.jpg', 0, 3, 'Rompe tu dedo y tu ratón!', 'Ever wondered what one quadrillion damage per second feels like? Wonder no more! Embark on your quest to attain it today! Start out by clicking on the monster to kill them, and get their gold. Spend that gold on hiring new heroes and get more damage. The more damage you deal, the more gold you will get.', 'Playsaurus ', 'Free_to_Play', 'Vicio, y mas vicio, y vicio, sin dedos, rompete todo', 'Ingles', 0, '2015-05-13');

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
(13, 7, 'A tu Izquierda', 20, 'Bronce', 'logroProjectCars.png'),
(14, 7, 'Mitad piloto, mitad demonio', 20, 'Bronce', 'logroProjectCars.png'),
(15, 7, 'Embajador de la Comunidad', 20, 'Bronce', 'logroProjectCars.png'),
(16, 7, 'Mago del Tiempo de Vuelta', 50, 'Plata', 'logroProjectCars.png'),
(17, 7, 'De Cero a Héroe', 75, 'Oro', 'logroProjectCars.png'),
(18, 5, 'Crea un aventurero', 25, 'Bronce', 'logroPOE.png'),
(19, 5, 'Cinco mejoras de baluarte', 25, 'Bronce', 'logroPOE.png'),
(20, 5, 'Encantador', 50, 'Plata', 'logroPOE.png'),
(21, 5, 'Pacifismo relativo', 75, 'Oro', 'logroPOE.png'),
(22, 5, 'Triple Corona', 100, 'Platino', 'logroPOE.png'),
(23, 23, 'Respeta a tus mayores', 25, 'Bronce', 'logroMagicka2.jpg'),
(24, 23, '¡Mi Botin!', 25, 'Bronce', 'logroMagicka2.jpg'),
(25, 23, 'Reviveme, porfa...', 50, 'Plata', 'logroMagicka2.jpg'),
(26, 23, 'Brujo', 75, 'Oro', 'logroMagicka2.jpg'),
(27, 32, 'He firmado la carta fundacional de DiRT', 10, 'Bronce', 'logroDirt.jpg'),
(28, 32, '¡Lo he clavado!', 10, 'Bronce', 'logroDirt.jpg'),
(29, 32, 'Obviamente', 10, 'Bronce', 'logroDirt.jpg'),
(30, 32, 'Maestros del código', 25, 'Plata', 'logroDirt.jpg'),
(31, 32, 'Voy a pillar una de esas.', 50, 'Oro', 'logroDirt.jpg'),
(32, 20, 'Los amigos siempre están ahí para ayudarte', 10, 'Bronce', 'logroETS.jpg'),
(33, 20, '¡Diesel, no petroleo!', 10, 'Bronce', 'logroETS.jpg'),
(34, 20, 'Optimizador de rendimiento', 20, 'Plata', 'logroETS.jpg'),
(35, 20, 'Turista', 30, 'Oro', 'logroETS.jpg'),
(36, 20, 'Lo que sea que flota tu barco', 50, 'Platino', 'logroETS.jpg');

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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tabla de información del usuario';

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Id`, `Nick`, `Contrasenia`, `Nombre`, `Apellidos`, `Correo`, `Fecha de Nacimiento`, `Pais`, `Ciudad`, `Direccion`, `Codigo Postal`, `Puntuacion`, `Rol`, `Imagen`, `Companyia`) VALUES
(6, 'Drulas', '$2y$10$idews1ZgezwJur/oOqb26uBHaLdC2kNFiVy.iK2iCR6rAvDzzG59q', 'Javier', 'Drulas', 'duruleto@drulas.com', '2001-03-20', 'Drulon', 'Drulopia', 'Avenida', 28033, 0, 'Usuario Registrado', 'usuario.jpg', ''),
(7, 'Javi', '$2y$10$mgBUFmgP3GIMlR.03tWeLeD141mPVKSHwk/s3OQ2W3ZORRdezUZbK', 'Javi', 'Druet Honrubia', 'javi@hotmail.com', '1993-03-20', 'España', 'Madrid', 'Avenida de ', 28033, 0, 'Usuario Registrado', 'misterT.jpg', ''),
(13, 'Prueba', '$2y$10$.HsV3pKt63NAB4NApF0PL.rU3gOmBBfXgu.jY1j/ClbC9kCNokklG', 'Prueba', 'Pruebas Pruebos', 'prueba@prueba.com', '1990-01-01', 'Pruebas', 'Prueba', 'Prueba de prueba s/n', 28039, 0, 'Usuario Registrado', 'holi.jpg', ''),
(14, 'Usuario1', '$2y$10$bd/LlAjMkOy2aYOyb4ApRe2xYA0sFOPd5kcvNJWR54TPFA9MtIRYC', 'Usuario1', 'Usuario User', 'usuario1@user.com', '1989-06-28', 'Prueba', 'Prueba', 'Prueba 29', 28040, 0, 'Usuario Registrado', 'usuario.jpg', ''),
(15, 'Admin', '$2y$10$UiwAJxd89sfcl5WW/6KHNOh/vYcSjLCupWxI13Y1Dc9aksEZhC5Tu', 'Admin', 'Admin admin', 'admin@admin.es', '0000-00-00', 'Admin', 'Admin', 'Admin', 28033, 0, 'Administrador', 'admin.jpg', ''),
(16, 'Desarrollador', '$2y$10$zaA02CyAOzyrTpbLqLuDTeOigUiNDKLS4S7AGwDZ3r1zrLtpDeCNW', 'Adri', 'Desarrollador Bethesda', 'desar@desar.com', '1990-07-19', 'Bethesda', 'Bethesdilla', 'Avenida de Bethesda 24', 28030, 0, 'Desarrollador', 'usuario.jpg', 'Bethesda'),
(17, 'GestorT', '$2y$10$yB2.NPQ6XFghluHxbDWqJeUzS/RHkDfSH8aRX8c.FAOwooLPA3y0i', 'Adolfo', 'Gestor Tienda', 'gestor@tienda.com', '1993-01-20', 'Tiendas', 'Tienda', 'Tienda de las Tiendas 83', 28031, 0, 'Gestor-Tienda', 'GestorT.jpg', ''),
(19, 'GestorC', '$2y$10$rlgGou1FaOz7nVGqPOOFcOcOT3N5YO8P81UVCkGTjci1L8DJvOsZa', 'Alba', 'Gestora Comunidad', 'gestor@comunidad.com', '1991-07-14', 'Comunidad', 'Comunnity', 'Avenida de la comunidad s/n', 28012, 0, 'Gestor-Comunidad', 'GestorC.jpg', '');

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
(1, 6, 'Video de la portada', 'https://www.youtube.com/embed/Ob91E5DXIdY', '2015-06-04 10:13:13'),
(2, 7, 'Trailer 1 GTA V', 'https://www.youtube.com/embed/SC66xH7s-0M', '2015-05-12 16:31:41'),
(3, 13, 'Video Rust', 'https://www.youtube.com/embed/dzWQ1gjPcM0', '2015-06-14 08:35:40'),
(4, 6, 'Video Project-Cars', 'https://www.youtube.com/embed/TE6Chu7bMpY', '2015-04-15 00:17:16');

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
