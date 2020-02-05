-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-01-2020 a las 18:52:05
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `alumni`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `id_padre` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `apellidos` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `nombre` varchar(25) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `distrito` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `grado` varchar(15) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `colegio` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `codcolegio` varchar(5) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `id_padre`, `apellidos`, `nombre`, `distrito`, `grado`, `direccion`, `colegio`, `codcolegio`) VALUES
(49, '67', 'Ramirez', 'Braulio', 'Lince', '', 'Lince', 'Unión', '219');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antereserva`
--

CREATE TABLE `antereserva` (
  `id` int(11) NOT NULL,
  `padre` varchar(5) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `alumno` varchar(5) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `servicio` varchar(12) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `curso` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `idioma` varchar(2) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `odioma` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `dia` varchar(12) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `horai` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `horaf` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `inicio` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fin` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `asesor` varchar(5) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `comentario` varchar(300) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `antereserva`
--

INSERT INTO `antereserva` (`id`, `padre`, `alumno`, `servicio`, `curso`, `idioma`, `odioma`, `dia`, `horai`, `horaf`, `inicio`, `fin`, `asesor`, `comentario`) VALUES
(2, '67', '49', 'undefined#1', 'undefined#1', '1', '', '2020-02-19', '1700', '2000', '17:00', '20:00', '40', 'Hola'),
(3, '67', '49', 'undefined#1', 'undefined#1', '1', '', '2020-02-18', '0800', '0900', '08:00', '09:00', '40', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivos`
--

CREATE TABLE `archivos` (
  `id` int(11) NOT NULL,
  `padre` varchar(5) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `asesor` varchar(5) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fecha` varchar(12) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `hora` varchar(12) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `archivo` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `archivos`
--

INSERT INTO `archivos` (`id`, `padre`, `asesor`, `fecha`, `hora`, `archivo`) VALUES
(6, '40', '17', '2020-01-06', '21:00:05', '43434343.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asesores`
--

CREATE TABLE `asesores` (
  `id` int(11) NOT NULL,
  `documento` varchar(21) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `apellidos` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `nombres` varchar(25) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `contrasena` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `correo` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `celular` varchar(12) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `distrito` varchar(25) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `estado` varchar(1) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `carrera` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `universidad` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `banco` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `cuenta` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `cci` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `asesores`
--

INSERT INTO `asesores` (`id`, `documento`, `apellidos`, `nombres`, `contrasena`, `correo`, `celular`, `direccion`, `distrito`, `estado`, `carrera`, `universidad`, `banco`, `cuenta`, `cci`) VALUES
(40, '43433870', 'Galindo', 'Camilo', '12345', 'cgalindo86.cg@gmail.com', '987618124', 'Mi direccion', '18', '3', 'Ing. Sistemas', 'UCSUR', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificaciones`
--

CREATE TABLE `calificaciones` (
  `id` int(11) NOT NULL,
  `padre` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `asesor` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `hora` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `puntos` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `mensaje` varchar(400) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `calificaciones`
--

INSERT INTO `calificaciones` (`id`, `padre`, `asesor`, `fecha`, `hora`, `puntos`, `mensaje`) VALUES
(1, '67', '', '2020-01-21', '12:32:37', '2', 'Redacta aquí tu mensaje');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colegios`
--

CREATE TABLE `colegios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `tipo` varchar(1) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion` varchar(200) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `colegios`
--

INSERT INTO `colegios` (`id`, `nombre`, `tipo`, `direccion`) VALUES
(1, 'Santo Domingo el Apostol', '1', 'Av. La Paz - San Miguel - Lima'),
(2, 'Santa Ana', '1', 'Jr. Amazonas - Magdalena'),
(3, 'Santa Ana 2', '1', 'Jr. Amazonas - Magdalena');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colegios2`
--

CREATE TABLE `colegios2` (
  `id` int(11) NOT NULL,
  `colegio` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `precio` varchar(5) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `colegios2`
--

INSERT INTO `colegios2` (`id`, `colegio`, `precio`) VALUES
(1, 'Franklin Delano Roosevelt', '80'),
(2, 'Markham College', '80'),
(3, 'León Pinelo', '80'),
(4, 'Newton College', '80'),
(5, 'International Christian School of Lima', '80'),
(6, 'San Silvestre School', '80'),
(7, 'Peruano Británico', '80'),
(8, 'Áleph', '60'),
(9, 'Casuarinas College', '60'),
(10, 'Hiram Bingham', '60'),
(11, 'Pestalozzi', '60'),
(12, 'Cambridge College Lima', '60'),
(13, 'Altair', '60'),
(14, 'Villa Caritas', '60'),
(15, 'San Pedro', '60'),
(16, 'Alpamayo', '60'),
(17, 'Salcantay', '60'),
(18, 'Santa María Marianistas', '60'),
(19, 'Villa Per Se', '60'),
(20, 'Antares', '60'),
(21, 'Trener', '60'),
(22, 'Euroamerican College', '60'),
(23, 'Alexander Von Humboldt', '60'),
(24, 'Franco Peruano', '60'),
(25, 'Antonio Raimondi', '60'),
(26, 'Villa María La Planicie', '60'),
(27, 'Magister', '60'),
(28, 'Liceo Naval Almirante Guice', '60'),
(29, 'St. George´s College', '60'),
(30, 'Inmaculado Corazón', '60'),
(31, 'Villa María Miraflores', '60'),
(32, 'San Ignacio de Recalde', '60'),
(33, 'Brüning', '60'),
(34, 'De la Inmaculada – Jesuitas', '60'),
(36, 'Santa Margarita', '60'),
(37, 'Jean Le Boulch', '60'),
(38, 'Lima Villa College', '60'),
(39, 'Leonardo Da Vinci', '60'),
(40, 'Villa Alarife', '60'),
(41, 'Skinner', '60'),
(42, 'Santa Ursula', '60'),
(43, 'Sagrados Corazones Recoleta', '60'),
(44, 'María Nicole', '60'),
(45, 'Nuestra Señora del Carmen', '60'),
(46, 'Reina de los Ángeles', '60'),
(47, 'San Agustín', '60'),
(48, 'Rousseau', '60'),
(49, 'San José de Monterrico', '60'),
(50, 'Reina del Mundo', '60'),
(51, 'Abraham Lincoln', '60'),
(52, 'La Molina Christian School', '60'),
(53, 'Champagnat', '60'),
(54, 'Waldorf Lima', '50'),
(55, 'Los Reyes Rojos', '50'),
(56, 'Alborada', '50'),
(57, 'Mark Twain', '50'),
(58, 'Maria Reina Marianistas', '50'),
(59, 'Santísimo Nombre de Jesús', '50'),
(60, 'Los Álamos', '50'),
(61, 'Montealto', '50'),
(62, 'Monterrico Christian Schools', '50'),
(63, 'Pio XII', '50'),
(64, 'Christa McAuliffe', '50'),
(65, 'Sagrado Corazón Sophianum', '50'),
(66, 'Villa Gratia Dei', '50'),
(67, 'Santa Teresita', '50'),
(68, 'Green Gables', '50'),
(69, 'André Malraux', '50'),
(70, 'Beata Imelda', '50'),
(71, 'María Molinari', '50'),
(72, 'Isabel Flores de Oliva', '50'),
(73, 'De los SS. CC. Belen', '50'),
(74, 'Peruano Chino Juan XXIII', '50'),
(75, 'Weberbauer Schule', '50'),
(76, 'Nivel A', '50'),
(77, 'De Los Sagrados Corazones de Belén', '50'),
(78, 'Peruano Chino Diez de Octubre', '50'),
(80, 'San Antonio De Padua', '50'),
(81, 'Lima International School of Tomorrow', '50'),
(82, 'Saint Patrick´s Christian College', '50'),
(83, 'María de los Ángeles', '50'),
(85, 'Héctor de Cárdenas', '50'),
(86, 'San Andrés Anglo Peruano', '50'),
(87, 'Peruano Japonés La Victoria', '50'),
(88, 'Americano Miraflores', '50'),
(89, 'San Francisco de Borja', '50'),
(90, 'Berkeley School', '50'),
(91, 'Internacional de Lima', '50'),
(92, 'Hans Christian Andersen', '50'),
(93, 'Ing. Carlos Lisson Beingolea', '40'),
(94, 'La Reparación', '40'),
(95, 'Sebastián Salazar Bondy', '40'),
(96, 'San José de Cluny', '40'),
(97, 'Claretiano', '40'),
(98, 'Illariy', '40'),
(99, 'María de las Mercedes', '40'),
(100, 'Santa Rita de Casia', '40'),
(105, 'San Vicente de Paul', '40'),
(106, 'San Luis Maristas', '40'),
(107, 'La Casa de Cartón', '40'),
(108, 'María Alvarado', '40'),
(109, 'De Jesús', '40'),
(110, 'Libertador San Martín', '40'),
(111, 'San Charbel', '40'),
(112, 'Saint Mark’s College', '40'),
(113, 'Almasiri', '40'),
(114, 'La Salle', '40'),
(115, 'Ámerica del Callao', '40'),
(116, 'Sagrado Corazón De La Molina', '40'),
(117, 'Santa María Eufrasia', '40'),
(118, 'Parroquial Santa Rosa de Lima', '40'),
(119, 'Cristo Rey', '40'),
(120, 'María Montessori Stoppani', '40'),
(121, 'Mis Talentos', '40'),
(122, 'La Inmaculada Concepción', '40'),
(124, 'Dante Alighieri', '40'),
(125, 'Cristo Salvador', '40'),
(126, 'Nuestra Señora de la Merced', '40'),
(127, 'Santa Ángela', '40'),
(128, 'San Antonio IHM', '40'),
(129, 'Waldorf', '40'),
(130, 'Mater Puríssima', '40'),
(131, 'Nuestra Señora del Rosario', '40'),
(132, 'Jesualdo', '40'),
(133, 'Santa Rosa', '40'),
(134, 'Clemente Althaus', '40'),
(136, 'Sor Querubina de San Pedro', '40'),
(137, 'Aldebarán', '40'),
(138, 'Virgen Inmaculada', '40'),
(139, 'San Juan Masías', '40'),
(141, 'Visionarios Colegio', '40'),
(142, 'Unión Miraflores', '40'),
(143, 'Friendship High School', '40'),
(144, 'Fermín Tanguis', '40'),
(145, 'San Roque', '40'),
(146, 'San Jose Hermanos Maristas Callao', '40'),
(147, 'Juan Enrique Newman', '40'),
(148, 'Santiago Apóstol', '40'),
(149, 'Innova Schools', '40'),
(150, 'De la Cruz', '40'),
(151, 'Francés Mary Buss', '40'),
(152, 'Sor Ana De Los Ángeles Monteagudo', '40'),
(153, 'Parroquial San Norberto', '40'),
(154, 'Corazón de Jesús', '40'),
(155, 'María de la Encarnación', '40'),
(156, 'Giordano Bruno', '40'),
(157, 'Nuestra Señora Del Pilar', '40'),
(158, 'Hosanna', '40'),
(159, 'San Fernando de Pachacamác', '40'),
(160, 'Mater Christi', '40'),
(161, 'Andrés Bello', '40'),
(162, 'Domingo Savio', '40'),
(163, 'Nuestra Señora De La Asunción', '40'),
(164, 'Nuevo Mundo', '40'),
(165, 'Manuel Antonio Ramírez Barinaga', '40'),
(167, 'Misioneras Hijas del Corazón de Jesús', '40'),
(168, 'San Felipe', '40'),
(169, 'Santa María de Fátima', '40'),
(172, 'El Carmelo', '40'),
(173, 'Virgen De La Asunción', '40'),
(174, 'San Clemente', '40'),
(175, 'San Juan María Vianney', '40'),
(176, 'Trilce', '40'),
(177, 'Saco Oliveros', '40'),
(179, 'Nuestra Señora Del Buen Consejo', '40'),
(180, 'Beata Ana Maria Javouhey', '40'),
(181, 'Bertolt Brecht', '40'),
(182, 'Santa Felicia', '40'),
(183, 'Reina del Carmelo', '40'),
(184, 'Maria Reiche', '40'),
(185, 'Regina Coelis', '40'),
(186, 'John Neper', '40'),
(188, 'CEP Diocesano El Buen Pastor', '40'),
(189, 'San Lorenzo', '40'),
(191, 'San Antonio Marianistas', '40'),
(192, 'Los Olivos College', '40'),
(193, 'Nuestra Señora del Consuelo', '40'),
(194, 'Santísima Cruz', '40'),
(195, 'IEP San Pio X', '40'),
(196, 'Palas Atenea', '40'),
(197, 'Ateneo de la Molina', '40'),
(198, 'Nuestra Señora De Montserrat', '40'),
(199, 'Jesús El Buen Pastor', '40'),
(200, 'San Martín De Porres De Salamanca', '40'),
(201, 'San Francisco De Sales', '40'),
(202, 'Humanismo y Tecnología Humtec', '40'),
(203, 'Himalaya', '40'),
(204, 'Alberto Benjamin Simpson', '40'),
(205, 'Nuestra Señora de la Paz', '40'),
(206, 'Medalla de María', '40'),
(207, 'Cristiano Pionero', '40'),
(209, 'Reina De Las Américas', '40'),
(210, 'Raymond Clark', '40'),
(211, 'Los Rosales de Santa Rosa', '40'),
(212, 'Winnetka', '40'),
(213, 'Henri La Fontaine', '40'),
(215, 'Santa Rosa de Lima Córpac', '40'),
(216, 'Karol Wojtyla College', '40'),
(217, 'Isaac Newton', '40'),
(218, 'Concordia Universal', '40'),
(219, 'Unión', '40'),
(220, 'Santo Domingo El Apóstol', '40'),
(221, 'Santa Isabel', '40'),
(222, 'Martín Adán', '40'),
(223, 'Peruano de Ciencias', '40'),
(224, 'Kinderking', '40'),
(226, 'Buenas Nuevas', '40'),
(227, 'Dias Felices – Villa Nova', '40'),
(228, 'Villa Nova', '40'),
(229, 'Walt Whitman', '40'),
(230, 'Panamericana', '40'),
(231, 'Maria Medalla Milagrosa', '40'),
(232, 'Brittain College', '40'),
(233, 'Maria Elisa', '40'),
(234, 'Santa María De La Gracia', '40'),
(235, 'Villa Jardín', '40'),
(236, 'Magister Dei', '40'),
(237, 'AvantGard College', '40'),
(238, 'José Carlos Mariátegui', '40'),
(239, 'Enrique Camino Brent', '40'),
(240, 'Micael', '40'),
(241, 'Rosa de Santa María', '40'),
(242, 'Don Bosco', '40'),
(243, 'San Germán', '40'),
(244, 'Miguel Angel Buonarroti', '40'),
(245, 'Mi Escuela y Hogar – My Home and School', '40'),
(246, 'Ancila Dei', '40'),
(247, 'Sise', '40'),
(248, 'Brasil', '40'),
(249, 'España', '40'),
(250, 'Sigma', '40'),
(251, 'Sagrados Corazones Reina de la Paz', '40'),
(254, 'Dalton', '40'),
(256, 'Santa Fortunata', '40'),
(258, 'Joseph and Mery School', '40'),
(260, 'Internacional Elim', '40'),
(261, 'Santo Tomás De Aquino', '40'),
(262, 'Espíritu Santo', '40'),
(263, 'Independencia', '40'),
(264, 'Nuestra Señora Del Patrocinio', '40'),
(265, 'Amado de Dios', '40'),
(266, 'El Triunfo', '40'),
(267, 'San Judas Tadeo Corazonistas', '40'),
(269, 'Nuestra Señora De Las Mercedes', '40'),
(271, 'San Francisco de Asís de Breña', '40'),
(273, 'Robert Letourneau', '40'),
(274, 'Pamer', '40'),
(278, 'San Benito De Palermo', '40'),
(279, 'Alas Peruano Argentino', '40'),
(280, 'Pardo School', '40'),
(281, 'Monte Carmelo', '40'),
(282, 'San Antonio Abad', '40'),
(284, 'Aurelio Miró Quesada', '40'),
(285, 'San Ramón Nonato', '40'),
(286, 'Niño Jesús de Praga', '40'),
(289, 'Padre Champagnat', '40'),
(290, 'Corazón de Jesus Pionero de la Ciencia', '40'),
(291, 'Santa Mónica', '40'),
(292, 'David Ausubel', '40'),
(293, 'Divino Niño Jesús', '40'),
(294, 'San Alfonso', '40'),
(295, 'Santa María De Breña', '40'),
(296, 'Santo Domingo', '40'),
(297, 'Divino Redentor', '40'),
(298, 'Los Rosales', '40'),
(300, 'Santa María de la Providencia', '40'),
(301, 'Nuestra Señora del Rosario de Fátima', '40'),
(303, 'Leadership School', '40'),
(304, 'Ellen Parkurst', '40'),
(305, 'Fray Luis de León', '40'),
(306, 'Santísima Trinidad', '40'),
(307, 'El Buen Pastor', '40'),
(308, 'Foyer de Charite Santa Rosa', '40'),
(310, 'Neill Summerhill', '40'),
(311, 'San Pío X', '40'),
(312, 'Brigham Young School', '40'),
(313, 'Santa Lucía', '40'),
(314, 'Santa Cecilia de la Calera', '40'),
(315, 'Santa Maria Josefa Rossello', '40'),
(316, 'Santa Isabel De Hungría', '40'),
(317, 'Sor Ángela Lecca', '40'),
(318, 'San José y El Redentor', '40'),
(319, 'Sor Rosa Larrabure', '40'),
(320, 'Monseñor Marcos Libardoni', '40'),
(321, 'Albert Einstein', '40'),
(322, 'Genes de Los Olivos', '40'),
(324, 'Genes de San Martín de Porres', '40'),
(326, 'Carl Friedrich Gauss', '40'),
(327, 'Divino Maestro Los Cedros', '40'),
(328, 'América', '40'),
(329, 'Buena Esperanza', '40'),
(330, 'San Ricardo', '40'),
(332, 'William Prescott', '40'),
(334, 'Ángeles de la Paz', '40'),
(336, 'Nuestra Señora del Carmen de Palao', '40'),
(337, 'Vanguard Schools', '40'),
(338, 'San Carlos', '40'),
(339, 'Inca Garcilaso De La Vega', '40'),
(340, 'Rosa De Lima', '40'),
(342, 'Gracias Jesús', '40'),
(343, 'Matemático “Santísima María”', '40'),
(344, 'Pequeños Talentos', '40'),
(345, 'Miguel Ángel', '40'),
(346, 'Ebenezer', '40'),
(347, 'Santo Toribio De Mogrovejo', '40'),
(348, 'Señor De Luren', '40'),
(349, 'Melvin Jones', '40'),
(350, 'Virgen de Fátima de Barranco', '40'),
(351, 'Mariscal Santa Cruz', '40'),
(353, 'San Rafael', '40'),
(354, 'Barbara D´Achille School', '40'),
(355, 'Bertrand Russell', '40'),
(356, 'San Benito De Palermo', '40'),
(357, 'Carmelitas New School', '40'),
(358, '7707 Cristo Rey', '40'),
(359, 'Divino Maestro', '40'),
(361, 'Corazón Inmaculado De María', '40'),
(362, 'Baden Powell', '40'),
(363, 'Juan Enrique Pestalozzi', '40'),
(364, 'Nazareno', '40'),
(365, 'Doscientas Millas Peruanas', '40'),
(366, 'Amadeus Mozart', '40'),
(367, 'De María', '40'),
(369, 'Prolog de Chorrillos', '40'),
(370, 'Palmera School', '40'),
(371, 'San Ignacio De Loyola', '40'),
(372, 'Liceo San Juan', '40'),
(373, 'Jesús Amado', '40'),
(374, 'John Dewey', '40'),
(375, 'Asís', '40'),
(376, 'Johannes Gutenberg', '40'),
(377, 'Humanitas', '40'),
(378, 'Angélica Recharte', '40'),
(379, 'Santa Ana', '40'),
(380, 'John Alexander Mackay', '40'),
(381, 'Inmaculado High School', '40'),
(382, 'Lomas De Santa María', '40'),
(383, 'María Reiche Grosse Neuman', '40'),
(384, 'Aleluya', '40'),
(385, 'Alexander Fleming', '40'),
(387, 'Assiri', '40'),
(388, 'Winner School', '40'),
(389, 'Reino de los Cielos', '40'),
(390, 'Ingeniería de San Miguel', '40'),
(391, 'San Juan Bosco', '40'),
(392, 'Corazón Inmaculado', '40'),
(393, 'Mayor Sistema San Marcos', '40'),
(394, 'Santa Rosa de Barranco', '40'),
(396, 'El Niño Jesús Del Rímac', '40'),
(397, 'Santa Cecilia', '40'),
(398, 'Santa María Del Camino', '40'),
(399, 'San Juan de Barranco', '40'),
(400, 'Maria de la Providencia', '40'),
(401, 'Jean Piaget', '40'),
(402, 'Lincoln La Punta', '40'),
(403, 'Santa Maria Goretti', '40'),
(404, 'María Auxiliadora', '40'),
(405, 'Miraflores School', '40'),
(406, 'Nuestra Señora de la Luz', '40'),
(407, 'Santa Maria de la Merced', '40'),
(408, 'Almirante Grau', '40'),
(409, 'Diego Thomsom', '40'),
(410, 'Sudamericano', '40'),
(411, 'Los Portales Del Saber', '40'),
(412, 'Divino Creador', '40'),
(413, 'La Roca', '40'),
(414, 'Claret', '40'),
(415, 'José Antonio Encinas', '40'),
(416, 'Juan Croniqueur – Appu', '40'),
(417, 'La Roca Christian School', '40'),
(418, 'Ana María Rivier', '40'),
(420, 'San Alfonso María', '40'),
(421, 'San José De Los Cedros', '40'),
(422, 'Vírgen del Carmen', '40'),
(423, 'Santa Rita', '40'),
(424, 'Cristiano de Cieneguilla', '40'),
(425, 'Dora Mayer de Zulen', '40'),
(426, 'Miguel Grau Seminario', '40'),
(427, 'Eduardo Palaci', '40'),
(428, 'Amiguito', '40'),
(429, 'Señor de la Ascensión College', '40'),
(430, 'María Reyna', '40'),
(431, 'El Nazareno', '40'),
(432, 'Andrés Rázuri', '40'),
(433, 'San Lucas', '40'),
(435, 'La Sorbona', '40'),
(436, 'Santa Maria Reyna', '40'),
(437, 'Emanuel', '40'),
(438, 'Jireh', '40'),
(439, 'Monitor Huáscar', '40'),
(440, 'El Paraíso', '40'),
(441, 'Santo Domingo El Caminante', '40'),
(442, 'Virgen del Rosario', '40'),
(443, 'Niño Jesús Mariscal Chaperito', '40'),
(444, 'San Antonio', '40'),
(445, 'Mariano Melgar', '40'),
(446, 'La Unión', '40'),
(447, 'Mater Admirabilis', '40'),
(448, 'Cristo Mi Amigo', '40'),
(449, 'Juana Alarco De Dammert', '40'),
(450, 'Palestra', '40'),
(451, 'Regina Pacis', '40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `distritos`
--

CREATE TABLE `distritos` (
  `id` int(11) NOT NULL,
  `distrito` varchar(40) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `distritos`
--

INSERT INTO `distritos` (`id`, `distrito`) VALUES
(2, 'Ate'),
(3, 'Barranco'),
(4, 'Bellavista'),
(5, 'Brena'),
(6, 'Callao'),
(7, 'Carabayllo'),
(8, 'Chaclacayo'),
(9, 'Chorrillos'),
(10, 'Cieneguilla'),
(11, 'Comas'),
(12, 'El Agustino'),
(13, 'Jesus Maria'),
(14, 'La Molina'),
(15, 'La Perla'),
(16, 'La Punta'),
(17, 'La Victoria'),
(18, 'Lima'),
(19, 'Lince'),
(20, 'Los Olivos'),
(21, 'Lurigancho Chosica'),
(22, 'Magdalena del Mar'),
(23, 'Miraflores'),
(24, 'Pachacamac'),
(25, 'Pueblo Libre'),
(26, 'Rimac'),
(27, 'San Borja'),
(28, 'San Isidro'),
(29, 'San Juan de Lurigancho'),
(30, 'San Juan de Miraflores'),
(31, 'San Luis'),
(32, 'San Martin de Porres'),
(33, 'San Miguel'),
(34, 'Santiago de Surco'),
(35, 'Surquillo'),
(36, 'Villa El Salvador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `distritos_select`
--

CREATE TABLE `distritos_select` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `provincia` varchar(5) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `distritos_select`
--

INSERT INTO `distritos_select` (`id`, `nombre`, `provincia`) VALUES
(1, 'San Borja', ''),
(2, 'San Isidro', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE `horarios` (
  `id` int(11) NOT NULL,
  `asesor` varchar(5) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `dia` varchar(12) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `hora` varchar(5) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `horaf` varchar(5) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `inicio` varchar(12) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fin` varchar(12) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `distrito` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `estado` varchar(1) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `horarios`
--

INSERT INTO `horarios` (`id`, `asesor`, `dia`, `hora`, `horaf`, `inicio`, `fin`, `distrito`, `estado`) VALUES
(19215, '40', '2020-01-27', '800', '900', '08:00', '09:00', 'Lima', ''),
(19216, '40', '2020-02-10', '800', '900', '08:00', '09:00', 'Lima', ''),
(19217, '40', '2020-01-20', '800', '900', '08:00', '09:00', 'Lima', ''),
(19218, '40', '2020-01-13', '800', '900', '08:00', '09:00', 'Lima', ''),
(19219, '40', '2020-01-06', '800', '900', '08:00', '09:00', 'Lima', ''),
(19220, '40', '2020-02-17', '800', '900', '08:00', '09:00', 'Lima', ''),
(19221, '40', '2020-02-03', '800', '900', '08:00', '09:00', 'Lima', ''),
(19222, '40', '2020-03-02', '800', '900', '08:00', '09:00', 'Lima', ''),
(19223, '40', '2020-02-24', '800', '900', '08:00', '09:00', 'Lima', ''),
(19224, '40', '2020-03-16', '800', '900', '08:00', '09:00', 'Lima', ''),
(19225, '40', '2020-03-09', '800', '900', '08:00', '09:00', 'Lima', ''),
(19226, '40', '2020-03-23', '800', '900', '08:00', '09:00', 'Lima', ''),
(19227, '40', '2020-03-30', '800', '900', '08:00', '09:00', 'Lima', ''),
(19228, '40', '2020-01-07', '800', '900', '08:00', '09:00', 'Lima', ''),
(19229, '40', '2020-02-04', '800', '900', '08:00', '09:00', 'Lima', ''),
(19230, '40', '2020-02-11', '800', '900', '08:00', '09:00', 'Lima', ''),
(19231, '40', '2020-01-21', '800', '900', '08:00', '09:00', 'Lima', ''),
(19232, '40', '2020-01-14', '800', '900', '08:00', '09:00', 'Lima', ''),
(19233, '40', '2020-01-28', '800', '900', '08:00', '09:00', 'Lima', ''),
(19234, '40', '2020-02-25', '800', '900', '08:00', '09:00', 'Lima', ''),
(19235, '40', '2020-02-18', '800', '900', '08:00', '09:00', 'Lima', ''),
(19236, '40', '2020-03-10', '800', '900', '08:00', '09:00', 'Lima', ''),
(19237, '40', '2020-03-03', '800', '900', '08:00', '09:00', 'Lima', ''),
(19238, '40', '2020-03-24', '800', '900', '08:00', '09:00', 'Lima', ''),
(19239, '40', '2020-03-17', '800', '900', '08:00', '09:00', 'Lima', ''),
(19240, '40', '2020-03-31', '800', '900', '08:00', '09:00', 'Lima', ''),
(19241, '40', '2020-01-08', '1700', '1800', '17:00', '18:00', 'Lima', ''),
(19242, '40', '2020-01-15', '1700', '1800', '17:00', '18:00', 'Lima', ''),
(19243, '40', '2020-01-22', '1700', '1800', '17:00', '18:00', 'Lima', ''),
(19244, '40', '2020-01-29', '1700', '1800', '17:00', '18:00', 'Lima', ''),
(19245, '40', '2020-01-01', '1700', '1800', '17:00', '18:00', 'Lima', ''),
(19246, '40', '2020-02-05', '1700', '1800', '17:00', '18:00', 'Lima', ''),
(19247, '40', '2020-01-08', '1800', '1900', '18:00', '19:00', 'Lima', ''),
(19248, '40', '2020-01-15', '1800', '1900', '18:00', '19:00', 'Lima', ''),
(19249, '40', '2020-01-29', '1800', '1900', '18:00', '19:00', 'Lima', ''),
(19250, '40', '2020-01-01', '1800', '1900', '18:00', '19:00', 'Lima', ''),
(19251, '40', '2020-02-05', '1800', '1900', '18:00', '19:00', 'Lima', ''),
(19252, '40', '2020-01-08', '1900', '2000', '19:00', '20:00', 'Lima', ''),
(19253, '40', '2020-01-29', '1900', '2000', '19:00', '20:00', 'Lima', ''),
(19254, '40', '2020-01-01', '1900', '2000', '19:00', '20:00', 'Lima', ''),
(19255, '40', '2020-01-22', '1800', '1900', '18:00', '19:00', 'Lima', ''),
(19256, '40', '2020-01-15', '1900', '2000', '19:00', '20:00', 'Lima', ''),
(19257, '40', '2020-02-05', '1900', '2000', '19:00', '20:00', 'Lima', ''),
(19258, '40', '2020-01-08', '2000', '2000', '20:00', '20:00', 'Lima', ''),
(19259, '40', '2020-01-29', '2000', '2000', '20:00', '20:00', 'Lima', ''),
(19260, '40', '2020-01-01', '2000', '2000', '20:00', '20:00', 'Lima', ''),
(19261, '40', '2020-01-15', '2000', '2000', '20:00', '20:00', 'Lima', ''),
(19262, '40', '2020-02-05', '2000', '2000', '20:00', '20:00', 'Lima', ''),
(19263, '40', '2020-02-12', '1700', '1800', '17:00', '18:00', 'Lima', ''),
(19264, '40', '2020-02-19', '1700', '1800', '17:00', '18:00', 'Lima', ''),
(19265, '40', '2020-02-26', '1700', '1800', '17:00', '18:00', 'Lima', ''),
(19266, '40', '2020-03-04', '1700', '1800', '17:00', '18:00', 'Lima', ''),
(19267, '40', '2020-01-22', '1900', '2000', '19:00', '20:00', 'Lima', ''),
(19268, '40', '2020-02-12', '1800', '1900', '18:00', '19:00', 'Lima', ''),
(19269, '40', '2020-03-11', '1700', '1800', '17:00', '18:00', 'Lima', ''),
(19270, '40', '2020-02-19', '1800', '1900', '18:00', '19:00', 'Lima', ''),
(19271, '40', '2020-02-12', '1900', '2000', '19:00', '20:00', 'Lima', ''),
(19272, '40', '2020-03-04', '1800', '1900', '18:00', '19:00', 'Lima', ''),
(19273, '40', '2020-02-26', '1800', '1900', '18:00', '19:00', 'Lima', ''),
(19274, '40', '2020-02-12', '2000', '2000', '20:00', '20:00', 'Lima', ''),
(19275, '40', '2020-01-22', '2000', '2000', '20:00', '20:00', 'Lima', ''),
(19276, '40', '2020-03-11', '1800', '1900', '18:00', '19:00', 'Lima', ''),
(19277, '40', '2020-02-19', '1900', '2000', '19:00', '20:00', 'Lima', ''),
(19278, '40', '2020-03-18', '1700', '1800', '17:00', '18:00', 'Lima', ''),
(19279, '40', '2020-03-11', '1900', '2000', '19:00', '20:00', 'Lima', ''),
(19280, '40', '2020-03-04', '1900', '2000', '19:00', '20:00', 'Lima', ''),
(19281, '40', '2020-02-26', '1900', '2000', '19:00', '20:00', 'Lima', ''),
(19282, '40', '2020-02-19', '2000', '2000', '20:00', '20:00', 'Lima', ''),
(19283, '40', '2020-03-18', '1800', '1900', '18:00', '19:00', 'Lima', ''),
(19284, '40', '2020-03-25', '1700', '1800', '17:00', '18:00', 'Lima', ''),
(19285, '40', '2020-02-26', '2000', '2000', '20:00', '20:00', 'Lima', ''),
(19286, '40', '2020-03-04', '2000', '2000', '20:00', '20:00', 'Lima', ''),
(19287, '40', '2020-03-18', '1900', '2000', '19:00', '20:00', 'Lima', ''),
(19288, '40', '2020-03-11', '2000', '2000', '20:00', '20:00', 'Lima', ''),
(19289, '40', '2020-01-06', '800', '900', '08:00', '09:00', 'Lince', ''),
(19290, '40', '2020-03-25', '1800', '1900', '18:00', '19:00', 'Lima', ''),
(19291, '40', '2020-01-20', '800', '900', '08:00', '09:00', 'Lince', ''),
(19292, '40', '2020-01-13', '800', '900', '08:00', '09:00', 'Lince', ''),
(19293, '40', '2020-03-18', '2000', '2000', '20:00', '20:00', 'Lima', ''),
(19294, '40', '2020-02-03', '800', '900', '08:00', '09:00', 'Lince', ''),
(19295, '40', '2020-01-27', '800', '900', '08:00', '09:00', 'Lince', ''),
(19296, '40', '2020-03-25', '1900', '2000', '19:00', '20:00', 'Lima', ''),
(19297, '40', '2020-02-10', '800', '900', '08:00', '09:00', 'Lince', ''),
(19298, '40', '2020-02-17', '800', '900', '08:00', '09:00', 'Lince', ''),
(19299, '40', '2020-02-24', '800', '900', '08:00', '09:00', 'Lince', ''),
(19300, '40', '2020-03-02', '800', '900', '08:00', '09:00', 'Lince', ''),
(19301, '40', '2020-03-25', '2000', '2000', '20:00', '20:00', 'Lima', ''),
(19302, '40', '2020-03-09', '800', '900', '08:00', '09:00', 'Lince', ''),
(19303, '40', '2020-03-16', '800', '900', '08:00', '09:00', 'Lince', ''),
(19304, '40', '2020-03-23', '800', '900', '08:00', '09:00', 'Lince', ''),
(19305, '40', '2020-01-14', '800', '900', '08:00', '09:00', 'Lince', ''),
(19306, '40', '2020-01-07', '800', '900', '08:00', '09:00', 'Lince', ''),
(19307, '40', '2020-03-30', '800', '900', '08:00', '09:00', 'Lince', ''),
(19308, '40', '2020-01-21', '800', '900', '08:00', '09:00', 'Lince', ''),
(19309, '40', '2020-02-04', '800', '900', '08:00', '09:00', 'Lince', ''),
(19310, '40', '2020-01-28', '800', '900', '08:00', '09:00', 'Lince', ''),
(19311, '40', '2020-02-11', '800', '900', '08:00', '09:00', 'Lince', ''),
(19312, '40', '2020-02-18', '800', '900', '08:00', '09:00', 'Lince', '1'),
(19313, '40', '2020-03-03', '800', '900', '08:00', '09:00', 'Lince', ''),
(19314, '40', '2020-02-25', '800', '900', '08:00', '09:00', 'Lince', ''),
(19315, '40', '2020-03-17', '800', '900', '08:00', '09:00', 'Lince', ''),
(19316, '40', '2020-03-10', '800', '900', '08:00', '09:00', 'Lince', ''),
(19317, '40', '2020-03-24', '800', '900', '08:00', '09:00', 'Lince', ''),
(19318, '40', '2020-01-01', '1700', '1800', '17:00', '18:00', 'Lince', ''),
(19319, '40', '2020-01-08', '1700', '1800', '17:00', '18:00', 'Lince', ''),
(19320, '40', '2020-03-31', '800', '900', '08:00', '09:00', 'Lince', ''),
(19321, '40', '2020-01-22', '1700', '1800', '17:00', '18:00', 'Lince', ''),
(19322, '40', '2020-01-15', '1700', '1800', '17:00', '18:00', 'Lince', ''),
(19323, '40', '2020-01-29', '1700', '1800', '17:00', '18:00', 'Lince', ''),
(19324, '40', '2020-01-01', '1800', '1900', '18:00', '19:00', 'Lince', ''),
(19325, '40', '2020-02-05', '1700', '1800', '17:00', '18:00', 'Lince', ''),
(19326, '40', '2020-01-15', '1800', '1900', '18:00', '19:00', 'Lince', ''),
(19327, '40', '2020-01-08', '1800', '1900', '18:00', '19:00', 'Lince', ''),
(19328, '40', '2020-02-05', '1800', '1900', '18:00', '19:00', 'Lince', ''),
(19329, '40', '2020-01-01', '1900', '2000', '19:00', '20:00', 'Lince', ''),
(19330, '40', '2020-01-15', '1900', '2000', '19:00', '20:00', 'Lince', ''),
(19331, '40', '2020-02-05', '1900', '2000', '19:00', '20:00', 'Lince', ''),
(19332, '40', '2020-01-01', '2000', '2000', '20:00', '20:00', 'Lince', ''),
(19333, '40', '2020-01-15', '2000', '2000', '20:00', '20:00', 'Lince', ''),
(19334, '40', '2020-02-05', '2000', '2000', '20:00', '20:00', 'Lince', ''),
(19335, '40', '2020-01-08', '1900', '2000', '19:00', '20:00', 'Lince', ''),
(19336, '40', '2020-01-29', '1800', '1900', '18:00', '19:00', 'Lince', ''),
(19337, '40', '2020-01-22', '1800', '1900', '18:00', '19:00', 'Lince', ''),
(19338, '40', '2020-02-12', '1700', '1800', '17:00', '18:00', 'Lince', ''),
(19339, '40', '2020-02-19', '1700', '1800', '17:00', '18:00', 'Lince', '1'),
(19340, '40', '2020-01-08', '2000', '2000', '20:00', '20:00', 'Lince', ''),
(19341, '40', '2020-01-29', '1900', '2000', '19:00', '20:00', 'Lince', ''),
(19342, '40', '2020-02-26', '1700', '1800', '17:00', '18:00', 'Lince', ''),
(19343, '40', '2020-02-19', '1800', '1900', '18:00', '19:00', 'Lince', '1'),
(19344, '40', '2020-01-22', '1900', '2000', '19:00', '20:00', 'Lince', ''),
(19345, '40', '2020-02-12', '1800', '1900', '18:00', '19:00', 'Lince', ''),
(19346, '40', '2020-02-26', '1800', '1900', '18:00', '19:00', 'Lince', ''),
(19347, '40', '2020-01-29', '2000', '2000', '20:00', '20:00', 'Lince', ''),
(19348, '40', '2020-03-04', '1700', '1800', '17:00', '18:00', 'Lince', ''),
(19349, '40', '2020-02-12', '1900', '2000', '19:00', '20:00', 'Lince', ''),
(19350, '40', '2020-02-19', '1900', '2000', '19:00', '20:00', 'Lince', '1'),
(19351, '40', '2020-01-22', '2000', '2000', '20:00', '20:00', 'Lince', ''),
(19352, '40', '2020-02-26', '1900', '2000', '19:00', '20:00', 'Lince', ''),
(19353, '40', '2020-03-04', '1800', '1900', '18:00', '19:00', 'Lince', ''),
(19354, '40', '2020-03-11', '1700', '1800', '17:00', '18:00', 'Lince', ''),
(19355, '40', '2020-02-19', '2000', '2000', '20:00', '20:00', 'Lince', '1'),
(19356, '40', '2020-02-12', '2000', '2000', '20:00', '20:00', 'Lince', ''),
(19357, '40', '2020-03-18', '1700', '1800', '17:00', '18:00', 'Lince', ''),
(19358, '40', '2020-03-04', '1900', '2000', '19:00', '20:00', 'Lince', ''),
(19359, '40', '2020-02-26', '2000', '2000', '20:00', '20:00', 'Lince', ''),
(19360, '40', '2020-03-11', '1800', '1900', '18:00', '19:00', 'Lince', ''),
(19361, '40', '2020-03-18', '1800', '1900', '18:00', '19:00', 'Lince', ''),
(19362, '40', '2020-03-25', '1700', '1800', '17:00', '18:00', 'Lince', ''),
(19363, '40', '2020-03-04', '2000', '2000', '20:00', '20:00', 'Lince', ''),
(19364, '40', '2020-03-11', '1900', '2000', '19:00', '20:00', 'Lince', ''),
(19365, '40', '2020-03-25', '1800', '1900', '18:00', '19:00', 'Lince', ''),
(19366, '40', '2020-03-18', '1900', '2000', '19:00', '20:00', 'Lince', ''),
(19367, '40', '2020-03-11', '2000', '2000', '20:00', '20:00', 'Lince', ''),
(19368, '40', '2020-03-25', '1900', '2000', '19:00', '20:00', 'Lince', ''),
(19369, '40', '2020-03-18', '2000', '2000', '20:00', '20:00', 'Lince', ''),
(19370, '40', '2020-03-25', '2000', '2000', '20:00', '20:00', 'Lince', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios_dias`
--

CREATE TABLE `horarios_dias` (
  `id` int(11) NOT NULL,
  `asesor` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `dia_semana` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `inicio` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `fin` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `periodo` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `anio` varchar(4) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `horarios_dias`
--

INSERT INTO `horarios_dias` (`id`, `asesor`, `dia_semana`, `inicio`, `fin`, `periodo`, `anio`) VALUES
(5, '40', '1', '08:00', '09:00', '1', '2020'),
(13, '40', '2', '08:00', '09:00', '1', '2020'),
(14, '40', '3', '17:00', '20:00', '1', '2020');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `id` int(11) NOT NULL,
  `padre` varchar(5) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `asesor` varchar(5) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fecha` varchar(12) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `hora` varchar(12) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `mensaje` varchar(500) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `padres`
--

CREATE TABLE `padres` (
  `id` int(11) NOT NULL,
  `apellidos` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `nombres` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `documento` varchar(15) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `distrito` varchar(25) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `provincia` varchar(25) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `departamento` varchar(25) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `correo` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `celular` varchar(15) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `contrasena` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `padres`
--

INSERT INTO `padres` (`id`, `apellidos`, `nombres`, `documento`, `direccion`, `distrito`, `provincia`, `departamento`, `correo`, `celular`, `contrasena`) VALUES
(67, 'Ramirez', 'Fiorella', '43007222', 'Mi casa', 'Lince', NULL, NULL, 'cgalindo86.cg@gmail.com', '987618120', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `table 9`
--

CREATE TABLE `table 9` (
  `COL 1` varchar(39) DEFAULT NULL,
  `COL 2` varchar(15) DEFAULT NULL,
  `COL 3` varchar(10) DEFAULT NULL,
  `COL 4` varchar(10) DEFAULT NULL,
  `COL 5` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `table 9`
--

INSERT INTO `table 9` (`COL 1`, `COL 2`, `COL 3`, `COL 4`, `COL 5`) VALUES
('legio', 'Precio por hora', '', '', ''),
('Franklin Delano Roosevelt', '80', '', '', ''),
('Markham College', '80', '', '', ''),
('León Pinelo', '80', '', '', ''),
('Newton College', '80', '', '', ''),
('International Christian School of Lima', '80', '', '', ''),
('San Silvestre School', '80', '', '', ''),
('Peruano Británico', '80', '', '', ''),
('Áleph', '60', '', '', ''),
('Casuarinas College', '60', '', '', ''),
('Hiram Bingham', '60', '', '', ''),
('Pestalozzi', '60', '', '', ''),
('Cambridge College Lima', '60', '', '', ''),
('Altair', '60', '', '', ''),
('Villa Caritas', '60', '', '', ''),
('San Pedro', '60', '', '', ''),
('Alpamayo', '60', '', '', ''),
('Salcantay', '60', '', '', ''),
('Santa María Marianistas', '60', '', '', ''),
('Villa Per Se', '60', '', '', ''),
('Antares', '60', '', '', ''),
('Trener', '60', '', '', ''),
('Euroamerican College', '60', '', '', ''),
('Alexander Von Humboldt', '60', '', '', ''),
('Franco Peruano', '60', '', '', ''),
('Antonio Raimondi', '60', '', '', ''),
('Villa María La Planicie', '60', '', '', ''),
('Magister', '60', '', '', ''),
('Liceo Naval Almirante Guice', '60', '', '', ''),
('St. George´s College', '60', '', '', ''),
('Inmaculado Corazón', '60', '', '', ''),
('Villa María Miraflores', '60', '', '', ''),
('San Ignacio de Recalde', '60', '', '', ''),
('Brüning', '60', '', '', ''),
('De la Inmaculada – Jesuitas', '60', '', '', ''),
('St. George’s College', '60', '', '', ''),
('Santa Margarita', '60', '', '', ''),
('Jean Le Boulch', '60', '', '', ''),
('Lima Villa College', '60', '', '', ''),
('Leonardo Da Vinci', '60', '', '', ''),
('Villa Alarife', '60', '', '', ''),
('Skinner', '60', '', '', ''),
('Santa Ursula', '60', '', '', ''),
('Sagrados Corazones Recoleta', '60', '', '', ''),
('María Nicole', '60', '', '', ''),
('Nuestra Señora del Carmen', '60', '', '', ''),
('Reina de los Ángeles', '60', '', '', ''),
('San Agustín', '60', '', '', ''),
('Rousseau', '60', '', '', ''),
('San José de Monterrico', '60', '', '', ''),
('Reina del Mundo', '60', '', '', ''),
('Abraham Lincoln', '60', '', '', ''),
('La Molina Christian School', '60', '', '', ''),
('Champagnat', '60', '', '', ''),
('Waldorf Lima', '50', '', '', ''),
('Los Reyes Rojos', '50', '', '', ''),
('Alborada', '50', '', '', ''),
('Mark Twain', '50', '', '', ''),
('Maria Reina Marianistas', '50', '', '', ''),
('Santísimo Nombre de Jesús', '50', '', '', ''),
('Los Álamos', '50', '', '', ''),
('Montealto', '50', '', '', ''),
('Monterrico Christian Schools', '50', '', '', ''),
('Pio XII', '50', '', '', ''),
('Christa McAuliffe', '50', '', '', ''),
('Sagrado Corazón Sophianum', '50', '', '', ''),
('Villa Gratia Dei', '50', '', '', ''),
('Santa Teresita', '50', '', '', ''),
('Green Gables', '50', '', '', ''),
('André Malraux', '50', '', '', ''),
('Beata Imelda', '50', '', '', ''),
('María Molinari', '50', '', '', ''),
('Isabel Flores de Oliva', '50', '', '', ''),
('De los SS. CC. Belen', '50', '', '', ''),
('Peruano Chino Juan XXIII', '50', '', '', ''),
('Weberbauer Schule', '50', '', '', ''),
('Nivel A', '50', '', '', ''),
('De Los Sagrados Corazones de Belén', '50', '', '', ''),
('Peruano Chino Diez de Octubre', '50', '', '', ''),
('San José de Cluny', '50', '', '', ''),
('San Antonio De Padua', '50', '', '', ''),
('Lima International School of Tomorrow', '50', '', '', ''),
('Saint Patrick´s Christian College', '50', '', '', ''),
('María de los Ángeles', '50', '', '', ''),
('Peruano Chino Diez de Octubre', '50', '', '', ''),
('Héctor de Cárdenas', '50', '', '', ''),
('San Andrés Anglo Peruano', '50', '', '', ''),
('Peruano Japonés La Victoria', '50', '', '', ''),
('Americano Miraflores', '50', '', '', ''),
('San Francisco de Borja', '50', '', '', ''),
('Berkeley School', '50', '', '', ''),
('Internacional de Lima', '50', '', '', ''),
('Hans Christian Andersen', '50', '', '', ''),
('Ing. Carlos Lisson Beingolea', '40', '', '', ''),
('La Reparación', '40', '', '', ''),
('Sebastián Salazar Bondy', '40', '', '', ''),
('San José de Cluny', '40', '', '', ''),
('Claretiano', '40', '', '', ''),
('Illariy', '40', '', '', ''),
('María de las Mercedes', '40', '', '', ''),
('Santa Rita de Casia', '40', '', '', ''),
('Claretiano', '40', '', '', ''),
('Mater Christi', '40', '', '', ''),
('Nuestra Señora Del Consuelo', '40', '', '', ''),
('José Antonio Encinas', '40', '', '', ''),
('San Vicente de Paul', '40', '', '', ''),
('San Luis Maristas', '40', '', '', ''),
('La Casa de Cartón', '40', '', '', ''),
('María Alvarado', '40', '', '', ''),
('De Jesús', '40', '', '', ''),
('Libertador San Martín', '40', '', '', ''),
('San Charbel', '40', '', '', ''),
('Saint Mark’s College', '40', '', '', ''),
('Almasiri', '40', '', '', ''),
('La Salle', '40', '', '', ''),
('Ámerica del Callao', '40', '', '', ''),
('Sagrado Corazón De La Molina', '40', '', '', ''),
('Santa María Eufrasia', '40', '', '', ''),
('Parroquial Santa Rosa de Lima', '40', '', '', ''),
('Cristo Rey', '40', '', '', ''),
('María Montessori Stoppani', '40', '', '', ''),
('Mis Talentos', '40', '', '', ''),
('La Inmaculada Concepción', '40', '', '', ''),
('Saco Oliveros de Monterrico', '40', '', '', ''),
('Dante Alighieri', '40', '', '', ''),
('Cristo Salvador', '40', '', '', ''),
('Nuestra Señora de la Merced', '40', '', '', ''),
('Santa Ángela', '40', '', '', ''),
('San Antonio IHM', '40', '', '', ''),
('Waldorf', '40', '', '', ''),
('Mater Puríssima', '40', '', '', ''),
('Nuestra Señora del Rosario', '40', '', '', ''),
('Jesualdo', '40', '', '', ''),
('Santa Rosa', '40', '', '', ''),
('Clemente Althaus', '40', '', '', ''),
('Santa Ana', '40', '', '', ''),
('Sor Querubina de San Pedro', '40', '', '', ''),
('Aldebarán', '40', '', '', ''),
('Virgen Inmaculada', '40', '', '', ''),
('San Juan Masías', '40', '', '', ''),
('Nuevo Mundo', '40', '', '', ''),
('Visionarios Colegio', '40', '', '', ''),
('Unión Miraflores', '40', '', '', ''),
('Friendship High School', '40', '', '', ''),
('Fermín Tanguis', '40', '', '', ''),
('San Roque', '40', '', '', ''),
('San Jose Hermanos Maristas Callao', '40', '', '', ''),
('Juan Enrique Newman', '40', '', '', ''),
('Santiago Apóstol', '40', '', '', ''),
('Innova Schools', '40', '', '', ''),
('De la Cruz', '40', '', '', ''),
('Francés Mary Buss', '40', '', '', ''),
('Sor Ana De Los Ángeles Monteagudo', '40', '', '', ''),
('Parroquial San Norberto', '40', '', '', ''),
('Corazón de Jesús', '40', '', '', ''),
('María de la Encarnación', '40', '', '', ''),
('Giordano Bruno', '40', '', '', ''),
('Nuestra Señora Del Pilar', '40', '', '', ''),
('Hosanna', '40', '', '', ''),
('San Fernando de Pachacamác', '40', '', '', ''),
('Mater Christi', '40', '', '', ''),
('Andrés Bello', '40', '', '', ''),
('Domingo Savio', '40', '', '', ''),
('Nuestra Señora De La Asunción', '40', '', '', ''),
('Nuevo Mundo', '40', '', '', ''),
('Manuel Antonio Ramírez Barinaga', '40', '', '', ''),
('Pamer Salamanca', '40', '', '', ''),
('Misioneras Hijas del Corazón de Jesús', '40', '', '', ''),
('San Felipe', '40', '', '', ''),
('Santa María de Fátima', '40', '', '', ''),
('Jean Piaget College', '40', '', '', ''),
('Santa Isabel De Hungría', '40', '', '', ''),
('El Carmelo', '40', '', '', ''),
('Virgen De La Asunción', '40', '', '', ''),
('San Clemente', '40', '', '', ''),
('San Juan María Vianney', '40', '', '', ''),
('Trilce Caminos del Inca', '40', '', '', ''),
('Saco Oliveros', '40', '', '', ''),
('María Auxiliadora', '40', '', '', ''),
('Nuestra Señora Del Buen Consejo', '40', '', '', ''),
('Beata Ana Maria Javouhey', '40', '', '', ''),
('Bertolt Brecht', '40', '', '', ''),
('Santa Felicia', '40', '', '', ''),
('Reina del Carmelo', '40', '', '', ''),
('Maria Reiche', '40', '', '', ''),
('Regina Coelis', '40', '', '', ''),
('John Neper', '40', '', '', ''),
('Bertolt Brecht', '40', '', '', ''),
('CEP Diocesano El Buen Pastor', '40', '', '', ''),
('San Lorenzo', '40', '', '', ''),
('Trilce de Salamanca', '40', '', '', ''),
('San Antonio Marianistas', '40', '', '', ''),
('Los Olivos College', '40', '', '', ''),
('Nuestra Señora del Consuelo', '40', '', '', ''),
('Santísima Cruz', '40', '', '', ''),
('IEP San Pio X', '40', '', '', ''),
('Palas Atenea', '40', '', '', ''),
('Ateneo de la Molina', '40', '', '', ''),
('Nuestra Señora De Montserrat', '40', '', '', ''),
('Jesús El Buen Pastor', '40', '', '', ''),
('San Martín De Porres De Salamanca', '40', '', '', ''),
('San Francisco De Sales', '40', '', '', ''),
('Humanismo y Tecnología Humtec', '40', '', '', ''),
('Himalaya', '40', '', '', ''),
('Alberto Benjamin Simpson', '40', '', '', ''),
('Nuestra Señora de la Paz', '40', '', '', ''),
('Medalla de María', '40', '', '', ''),
('Cristiano Pionero', '40', '', '', ''),
('Trilce Salaverry', '40', '', '', ''),
('Reina De Las Américas', '40', '', '', ''),
('Raymond Clark', '40', '', '', ''),
('Los Rosales de Santa Rosa', '40', '', '', ''),
('Winnetka', '40', '', '', ''),
('Henri La Fontaine', '40', '', '', ''),
('Pamer', '40', '', '', ''),
('Santa Rosa de Lima Córpac', '40', '', '', ''),
('Karol Wojtyla College', '40', '', '', ''),
('Isaac Newton', '40', '', '', ''),
('Concordia Universal', '40', '', '', ''),
('Unión', '40', '', '', ''),
('Santo Domingo El Apóstol', '40', '', '', ''),
('Santa Isabel', '40', '', '', ''),
('Martín Adán', '40', '', '', ''),
('Peruano de Ciencias', '40', '', '', ''),
('Kinderking', '40', '', '', ''),
('Pamer Carlos Izaguirre', '40', '', '', ''),
('Buenas Nuevas', '40', '', '', ''),
('Dias Felices – Villa Nova', '40', '', '', ''),
('Villa Nova', '40', '', '', ''),
('Walt Whitman', '40', '', '', ''),
('Panamericana', '40', '', '', ''),
('Maria Medalla Milagrosa', '40', '', '', ''),
('Brittain College', '40', '', '', ''),
('Maria Elisa', '40', '', '', ''),
('Santa María De La Gracia', '40', '', '', ''),
('Villa Jardín', '40', '', '', ''),
('Magister Dei', '40', '', '', ''),
('AvantGard College', '40', '', '', ''),
('José Carlos Mariátegui', '40', '', '', ''),
('Enrique Camino Brent', '40', '', '', ''),
('Micael', '40', '', '', ''),
('Rosa de Santa María', '40', '', '', ''),
('Don Bosco', '40', '', '', ''),
('San Germán', '40', '', '', ''),
('Miguel Angel Buonarroti', '40', '', '', ''),
('Mi Escuela y Hogar – My Home and School', '40', '', '', ''),
('Ancila Dei', '40', '', '', ''),
('Sise', '40', '', '', ''),
('Brasil', '40', '', '', ''),
('España', '40', '', '', ''),
('Sigma', '40', '', '', ''),
('Sagrados Corazones Reina de la Paz', '40', '', '', ''),
('Trilce Chorrillos II', '40', '', '', ''),
('Trilce Comas', '40', '', '', ''),
('Dalton', '40', '', '', ''),
('Nuevo Mundo', '40', '', '', ''),
('Santa Fortunata', '40', '', '', ''),
('Niño Jesús de Praga', '40', '', '', ''),
('Joseph and Mery School', '40', '', '', ''),
('Santa Rita', '40', '', '', ''),
('Internacional Elim', '40', '', '', ''),
('Santo Tomás De Aquino', '40', '', '', ''),
('Espíritu Santo', '40', '', '', ''),
('Independencia', '40', '', '', ''),
('Nuestra Señora Del Patrocinio', '40', '', '', ''),
('Amado de Dios', '40', '', '', ''),
('El Triunfo', '40', '', '', ''),
('San Judas Tadeo Corazonistas', '40', '', '', ''),
('Pamer', '40', '', '', ''),
('Nuestra Señora De Las Mercedes', '40', '', '', ''),
('Nuestra Señora De La Asunción', '40', '', '', ''),
('San Francisco de Asís de Breña', '40', '', '', ''),
('Pamer – Carabayllo', '40', '', '', ''),
('Robert Letourneau', '40', '', '', ''),
('Pamer', '40', '', '', ''),
('Albert Einstein', '40', '', '', ''),
('María De Las Mercedes', '40', '', '', ''),
('Albert Einstein – San Miguel', '40', '', '', ''),
('San Benito De Palermo', '40', '', '', ''),
('Alas Peruano Argentino', '40', '', '', ''),
('Pardo School', '40', '', '', ''),
('Monte Carmelo', '40', '', '', ''),
('San Antonio Abad', '40', '', '', ''),
('Maria Auxiliadora', '40', '', '', ''),
('Aurelio Miró Quesada', '40', '', '', ''),
('San Ramón Nonato', '40', '', '', ''),
('Niño Jesús de Praga', '40', '', '', ''),
('Nuestra Señora De La Merced', '40', '', '', ''),
('Alborada', '40', '', '', ''),
('Padre Champagnat', '40', '', '', ''),
('Corazón de Jesus Pionero de la Ciencia', '40', '', '', ''),
('Santa Mónica', '40', '', '', ''),
('David Ausubel', '40', '', '', ''),
('Divino Niño Jesús', '40', '', '', ''),
('San Alfonso', '40', '', '', ''),
('Santa María De Breña', '40', '', '', ''),
('Santo Domingo', '40', '', '', ''),
('Divino Redentor', '40', '', '', ''),
('Los Rosales', '40', '', '', ''),
('San Vicente de Paúl', '40', '', '', ''),
('Santa María de la Providencia', '40', '', '', ''),
('Nuestra Señora del Rosario de Fátima', '40', '', '', ''),
('Karol Wojtyla', '40', '', '', ''),
('Leadership School', '40', '', '', ''),
('Ellen Parkurst', '40', '', '', ''),
('Fray Luis de León', '40', '', '', ''),
('Santísima Trinidad', '40', '', '', ''),
('El Buen Pastor', '40', '', '', ''),
('Foyer de Charite Santa Rosa', '40', '', '', ''),
('Santa Rosa', '40', '', '', ''),
('Neill Summerhill', '40', '', '', ''),
('San Pío X', '40', '', '', ''),
('Brigham Young School', '40', '', '', ''),
('Santa Lucía', '40', '', '', ''),
('Santa Cecilia de la Calera', '40', '', '', ''),
('Santa Maria Josefa Rossello', '40', '', '', ''),
('Santa Isabel De Hungría', '40', '', '', ''),
('Sor Ángela Lecca', '40', '', '', ''),
('San José y El Redentor', '40', '', '', ''),
('Sor Rosa Larrabure', '40', '', '', ''),
('Monseñor Marcos Libardoni', '40', '', '', ''),
('Albert Einstein', '40', '', '', ''),
('Genes de Los Olivos', '40', '', '', ''),
('El Buen Pastor', '40', '', '', ''),
('Genes de San Martín de Porres', '40', '', '', ''),
('America', '40', '', '', ''),
('Carl Friedrich Gauss', '40', '', '', ''),
('Divino Maestro Los Cedros', '40', '', '', ''),
('América', '40', '', '', ''),
('Buena Esperanza', '40', '', '', ''),
('San Ricardo', '40', '', '', ''),
('De Jesús', '40', '', '', ''),
('William Prescott', '40', '', '', ''),
('Santa Maria de la Gracia', '40', '', '', ''),
('Ángeles de la Paz', '40', '', '', ''),
('Sise', '40', '', '', ''),
('Nuestra Señora del Carmen de Palao', '40', '', '', ''),
('Vanguard Schools', '40', '', '', ''),
('San Carlos', '40', '', '', ''),
('Inca Garcilaso De La Vega', '40', '', '', ''),
('Rosa De Lima', '40', '', '', ''),
('Hans Christian Andersen', '40', '', '', ''),
('Gracias Jesús', '40', '', '', ''),
('Matemático “Santísima María”', '40', '', '', ''),
('Pequeños Talentos', '40', '', '', ''),
('Miguel Ángel', '40', '', '', ''),
('Ebenezer', '40', '', '', ''),
('Santo Toribio De Mogrovejo', '40', '', '', ''),
('Señor De Luren', '40', '', '', ''),
('Melvin Jones', '40', '', '', ''),
('Virgen de Fátima de Barranco', '40', '', '', ''),
('Mariscal Santa Cruz', '40', '', '', ''),
('Alborada', '40', '', '', ''),
('San Rafael', '40', '', '', ''),
('Barbara D´Achille School', '40', '', '', ''),
('Bertrand Russell', '40', '', '', ''),
('San Benito De Palermo', '40', '', '', ''),
('Carmelitas New School', '40', '', '', ''),
('7707 Cristo Rey', '40', '', '', ''),
('Divino Maestro', '40', '', '', ''),
('María Reyna', '40', '', '', ''),
('Corazón Inmaculado De María', '40', '', '', ''),
('Baden Powell', '40', '', '', ''),
('Juan Enrique Pestalozzi', '40', '', '', ''),
('Nazareno', '40', '', '', ''),
('Doscientas Millas Peruanas', '40', '', '', ''),
('Amadeus Mozart', '40', '', '', ''),
('De María', '40', '', '', ''),
('Jesús El Buen Pastor', '40', '', '', ''),
('Prolog de Chorrillos', '40', '', '', ''),
('Palmera School', '40', '', '', ''),
('San Ignacio De Loyola', '40', '', '', ''),
('Liceo San Juan', '40', '', '', ''),
('Jesús Amado', '40', '', '', ''),
('John Dewey', '40', '', '', ''),
('Asís', '40', '', '', ''),
('Johannes Gutenberg', '40', '', '', ''),
('Humanitas', '40', '', '', ''),
('Angélica Recharte', '40', '', '', ''),
('Santa Ana', '40', '', '', ''),
('John Alexander Mackay', '40', '', '', ''),
('Inmaculado High School', '40', '', '', ''),
('Lomas De Santa María', '40', '', '', ''),
('María Reiche Grosse Neuman', '40', '', '', ''),
('Aleluya', '40', '', '', ''),
('Alexander Fleming', '40', '', '', ''),
('Santa Cecilia', '40', '', '', ''),
('Assiri', '40', '', '', ''),
('Winner School', '40', '', '', ''),
('Reino de los Cielos', '40', '', '', ''),
('Ingeniería de San Miguel', '40', '', '', ''),
('San Juan Bosco', '40', '', '', ''),
('Corazón Inmaculado', '40', '', '', ''),
('Mayor Sistema San Marcos', '40', '', '', ''),
('Santa Rosa de Barranco', '40', '', '', ''),
('Santa Margarita', '40', '', '', ''),
('El Niño Jesús Del Rímac', '40', '', '', ''),
('Santa Cecilia', '40', '', '', ''),
('Santa María Del Camino', '40', '', '', ''),
('San Juan de Barranco', '40', '', '', ''),
('Maria de la Providencia', '40', '', '', ''),
('Jean Piaget', '40', '', '', ''),
('Lincoln La Punta', '40', '', '', ''),
('Santa Maria Goretti', '40', '', '', ''),
('María Auxiliadora', '40', '', '', ''),
('Miraflores School', '40', '', '', ''),
('Nuestra Señora de la Luz', '40', '', '', ''),
('Santa Maria de la Merced', '40', '', '', ''),
('Almirante Grau', '40', '', '', ''),
('Diego Thomsom', '40', '', '', ''),
('Sudamericano', '40', '', '', ''),
('Los Portales Del Saber', '40', '', '', ''),
('Divino Creador', '40', '', '', ''),
('La Roca', '40', '', '', ''),
('Claret', '40', '', '', ''),
('José Antonio Encinas', '40', '', '', ''),
('Juan Croniqueur – Appu', '40', '', '', ''),
('La Roca Christian School', '40', '', '', ''),
('Ana María Rivier', '40', '', '', ''),
('Leonardo de Vinci', '40', '', '', ''),
('San Alfonso María', '40', '', '', ''),
('San José De Los Cedros', '40', '', '', ''),
('Vírgen del Carmen', '40', '', '', ''),
('Santa Rita', '40', '', '', ''),
('Cristiano de Cieneguilla', '40', '', '', ''),
('Dora Mayer de Zulen', '40', '', '', ''),
('Miguel Grau Seminario', '40', '', '', ''),
('Eduardo Palaci', '40', '', '', ''),
('Amiguito', '40', '', '', ''),
('Señor de la Ascensión College', '40', '', '', ''),
('María Reyna', '40', '', '', ''),
('El Nazareno', '40', '', '', ''),
('Andrés Rázuri', '40', '', '', ''),
('San Lucas', '40', '', '', ''),
('Internacional Elim', '40', '', '', ''),
('La Sorbona', '40', '', '', ''),
('Santa Maria Reyna', '40', '', '', ''),
('Emanuel', '40', '', '', ''),
('Jireh', '40', '', '', ''),
('Monitor Huáscar', '40', '', '', ''),
('El Paraíso', '40', '', '', ''),
('Santo Domingo El Caminante', '40', '', '', ''),
('Virgen del Rosario', '40', '', '', ''),
('Niño Jesús Mariscal Chaperito', '40', '', '', ''),
('San Antonio', '40', '', '', ''),
('Mariano Melgar', '40', '', '', ''),
('La Unión', '40', '', '', ''),
('Mater Admirabilis', '40', '', '', ''),
('Cristo Mi Amigo', '40', '', '', ''),
('Juana Alarco De Dammert', '40', '', '', ''),
('Palestra', '40', '', '', ''),
('Regina Pacis', '40', '', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `antereserva`
--
ALTER TABLE `antereserva`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `archivos`
--
ALTER TABLE `archivos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `asesores`
--
ALTER TABLE `asesores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `colegios`
--
ALTER TABLE `colegios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `colegios2`
--
ALTER TABLE `colegios2`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `distritos`
--
ALTER TABLE `distritos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `distritos_select`
--
ALTER TABLE `distritos_select`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `horarios_dias`
--
ALTER TABLE `horarios_dias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `padres`
--
ALTER TABLE `padres`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de la tabla `antereserva`
--
ALTER TABLE `antereserva`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `archivos`
--
ALTER TABLE `archivos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `asesores`
--
ALTER TABLE `asesores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `colegios`
--
ALTER TABLE `colegios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `colegios2`
--
ALTER TABLE `colegios2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=452;

--
-- AUTO_INCREMENT de la tabla `distritos`
--
ALTER TABLE `distritos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `distritos_select`
--
ALTER TABLE `distritos_select`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19371;

--
-- AUTO_INCREMENT de la tabla `horarios_dias`
--
ALTER TABLE `horarios_dias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `padres`
--
ALTER TABLE `padres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
