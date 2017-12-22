-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 18-10-2017 a las 16:40:04
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.0.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tuagenda_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistentes`
--

CREATE TABLE `asistentes` (
  `asistente_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas_estatus`
--

CREATE TABLE `citas_estatus` (
  `cita_estatus_id` int(11) NOT NULL COMMENT 'ID',
  `cita_estatus_nombre` text NOT NULL COMMENT 'Estatus',
  `cita_estatus_descripcion` text COMMENT 'Descripción'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `citas_estatus`
--

INSERT INTO `citas_estatus` (`cita_estatus_id`, `cita_estatus_nombre`, `cita_estatus_descripcion`) VALUES
(1, 'activo', NULL),
(2, 'Cancelada', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas_medicas`
--

CREATE TABLE `citas_medicas` (
  `cita_medica_id` int(11) NOT NULL COMMENT 'Cod de cita medica',
  `paciente_id` int(11) NOT NULL COMMENT 'Paciente',
  `doctor_id` int(11) NOT NULL COMMENT 'Doctor',
  `especialidad_id` int(10) NOT NULL COMMENT 'Especialidad',
  `cita_medica_fecha_creacion` timestamp NULL DEFAULT NULL COMMENT 'Fecha de creacion',
  `cita_medica_fecha` varchar(100) DEFAULT NULL COMMENT 'Fcecha de cita',
  `cita_horario` varchar(100) NOT NULL COMMENT 'Horario',
  `cita_comentarios` text COMMENT 'Nota',
  `cita_enfermedad` text COMMENT 'Enfermedad',
  `cita_sintomas` text COMMENT 'Sintomas',
  `cita_estatus_id` int(11) DEFAULT '1' COMMENT 'Estatus',
  `cita_diagnostico` text COMMENT 'Diagnostico\n',
  `clinica_id` int(10) DEFAULT NULL COMMENT 'Cod de clinica',
  `familiar_id` int(11) DEFAULT NULL COMMENT 'Cod Familiar',
  `cita_recomendaciones` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `citas_medicas`
--

INSERT INTO `citas_medicas` (`cita_medica_id`, `paciente_id`, `doctor_id`, `especialidad_id`, `cita_medica_fecha_creacion`, `cita_medica_fecha`, `cita_horario`, `cita_comentarios`, `cita_enfermedad`, `cita_sintomas`, `cita_estatus_id`, `cita_diagnostico`, `clinica_id`, `familiar_id`, `cita_recomendaciones`) VALUES
(10, 33, 34, 3, NULL, '2017-10-04', '08:00 AM', 'me siento mal desde ayer', 'estomago', 'dolor de estomago', 2, NULL, 3, NULL, ''),
(11, 33, 34, 3, NULL, '2017-10-05', '09:00 AM', 'cita para ver la tension', 'malestar en la cabeza', 'dolor de cabeza tension alta', 1, NULL, 3, NULL, ''),
(12, 33, 34, 3, NULL, '2017-10-05', '08:00 AM', 'sds', 'fdsf', 'dfsd', 1, '<p>dsfds</p>', 3, 42, ''),
(13, 35, 34, 3, NULL, '2017-10-05', '09:30 AM', '', '', 'Dolor de barriga y fiebre', 1, '', 3, NULL, ''),
(14, 35, 34, 3, NULL, '2017-10-05', '10:30 AM', '', '', 'Consulta de control', 1, NULL, 3, 43, ''),
(15, 35, 34, 3, NULL, '2017-10-05', '02:30 PM', '', '', 'Dolor de espalda', 1, NULL, 3, 44, ''),
(16, 35, 34, 3, NULL, '2017-11-04', '03:30 PM', 'Prueba', 'Prueba', 'Prueba', 1, NULL, 3, NULL, ''),
(17, 35, 34, 3, NULL, '2017-10-13', '02:30 PM', '', '', 'dfdhthmljmyljmtylj', 1, '<p>prueba</p>', 3, 43, ''),
(18, 35, 34, 3, NULL, '2017-10-19', '04:00 PM', '', '', 'prueba', 1, NULL, 3, 43, ''),
(19, 37, 34, 3, NULL, '2017-10-08', '12:00 PM', '', 'me duele una bola', 'dolor en la espalda', 1, NULL, 3, NULL, ''),
(20, 37, 34, 3, NULL, '2017-10-08', '11:30 AM', 'vbc', 'le dolia una  bola', 'wrerw', 1, '<p>ffdfdh</p>', 3, NULL, ''),
(21, 35, 34, 3, NULL, '2017-10-09', '12:00 PM', 'kokgtbt', 'tktyokyohykyo', 'lgthktkkkt', 1, NULL, 3, NULL, ''),
(22, 33, 34, 3, NULL, '2017-10-20', '08:00 AM', 'asd', 'asd', 'asd', 1, NULL, 3, NULL, ''),
(23, 33, 34, 3, NULL, '2017-10-04', '08:00 AM', 'aaa', 'aaa', 'aaa', 1, '<p style=\"margin-left: 220px;\">                                       <img src=\"https://tuagendamedica.com/themes/tuagendamedica/resources/images/post/35392472.jpg\"></p><p style=\"margin-left: 220px;\">dgfdg</p><p style=\"margin-left: 220px;\">fdg</p><p style=\"margin-left: 220px;\">dfg</p><p style=\"margin-left: 220px;\">fg</p><p style=\"margin-left: 220px;\">fd</p><p style=\"margin-left: 220px;\">g</p><p style=\"margin-left: 220px;\"><br></p><p style=\"margin-left: 220px;\">fdg</p><p style=\"margin-left: 220px;\">d</p><p style=\"margin-left: 220px;\">f</p><p style=\"margin-left: 220px;\">gd</p><p style=\"margin-left: 220px;\">f</p><p style=\"margin-left: 220px;\">g</p><p style=\"margin-left: 220px;\">fd</p><p style=\"margin-left: 220px;\">g</p><p style=\"margin-left: 220px;\">fgfijdghuohgufdhgohsoughuoghfhsdghf</p><p style=\"margin-left: 220px;\">TUTU</p>', 3, NULL, ''),
(24, 33, 34, 3, NULL, '2017-10-04', '08:00 AM', 'aaa', 'aaa', 'aaa', 1, '<p>fdgdg</p>', 3, NULL, ''),
(25, 33, 34, 3, NULL, '2017-10-04', '09:00 AM', 'aaaa', 'aaa', 'aaa', 1, NULL, 3, NULL, ''),
(26, 33, 34, 3, NULL, '2017-10-19', '01:30 PM', 'aa', 'aa', 'aa', 1, NULL, 3, NULL, ''),
(27, 33, 34, 3, NULL, '2017-10-07', '10:00 AM', '', '', '', 1, NULL, 3, NULL, ''),
(28, 33, 34, 3, NULL, '2017-10-21', '08:30 AM', '', '', '', 1, NULL, 3, NULL, ''),
(29, 33, 34, 3, NULL, '2017-10-08', '09:30 AM', '', '', '', 1, NULL, 3, NULL, ''),
(30, 33, 34, 3, NULL, '2017-10-05', '11:00 AM', '', '', '', 1, NULL, 3, NULL, ''),
(31, 33, 34, 3, NULL, '2017-10-05', '08:30 AM', '', '', '', 1, NULL, 3, NULL, ''),
(32, 33, 34, 3, NULL, '2017-10-07', '08:30 AM', '', '', '', 1, NULL, 3, NULL, ''),
(33, 1, 34, 3, NULL, '2017-10-07', '09:00 AM', '', '', '', 1, NULL, 3, NULL, ''),
(34, 34, 34, 3, NULL, '2017-10-07', '12:00 PM', 'sf', 'dsfs', 'gfdg', 1, NULL, 3, NULL, ''),
(35, 35, 40, 3, NULL, '2017-10-10', '01:30 PM', 'Prueba', NULL, 'Prueba', 1, '<p>Dolor de estomago, colicos fuerte, diarrea por mas de 48 horas</p>', 4, NULL, ''),
(36, 35, 40, 3, NULL, '2017-10-10', '02:30 PM', 'Prueba', NULL, 'Prueba', 1, '<p>Prueba de cita 1</p>', 4, NULL, ''),
(37, 44, 40, 3, NULL, '2017-10-17', '10:00 AM', '', NULL, '', 1, NULL, 4, NULL, ''),
(38, 45, 34, 3, NULL, '2017-11-01', '08:00 AM', 'asd', NULL, 'asd', 1, '<p>dsfds</p>', 3, NULL, ''),
(39, 35, 40, 3, NULL, '2017-10-13', '02:30 PM', 'perfecto', NULL, 'perfecto', 1, NULL, 4, NULL, ''),
(40, 48, 40, 3, NULL, '2017-10-21', '09:30 AM', 'Rapido porfavor', '', 'Me duele el pie', 2, NULL, 4, NULL, ''),
(41, 48, 34, 3, NULL, '2017-10-12', '10:00 AM', '43rwer', NULL, 'vrre', 2, NULL, 3, NULL, ''),
(42, 48, 34, 3, NULL, '2017-10-20', '12:00 PM', 'sad d', NULL, 'sadsadsad', 1, NULL, 4, NULL, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clinicas`
--

CREATE TABLE `clinicas` (
  `clinica_id` int(10) NOT NULL COMMENT 'Cod Clinica',
  `clinica_nombre` varchar(45) NOT NULL COMMENT 'Nombre ',
  `clinica_http` text COMMENT 'Http',
  `clinica_direccion` text NOT NULL COMMENT 'Dirección',
  `clinica_cordenadas` text COMMENT 'Cordenadas',
  `clinica_codigo` varchar(45) DEFAULT NULL COMMENT 'codigo',
  `clinica_numero_principal` int(11) NOT NULL COMMENT 'Número principal',
  `clinica_numero_otros` text COMMENT 'Otros números',
  `clinica_correo_principal` varchar(45) NOT NULL COMMENT 'Correo principal',
  `clinica_correo_secundario` varchar(45) DEFAULT NULL COMMENT 'Correo secundario',
  `clinica_especialidades` text NOT NULL COMMENT 'Especialidades',
  `clinica_fecha_creacion` datetime DEFAULT NULL COMMENT 'fecha creacion',
  `clinica_fecha_actualizacion` datetime DEFAULT NULL COMMENT 'fecha actualizacion',
  `clinica_resumen` text COMMENT 'Resume de clinica',
  `clinica_imagen` text,
  `pais_id` int(10) NOT NULL COMMENT 'país',
  `estado_id` int(11) NOT NULL COMMENT 'Estado',
  `clinica_estatus` int(11) NOT NULL COMMENT 'estatus',
  `clinica_consultorio` varchar(100) DEFAULT NULL COMMENT 'Consultorio'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clinicas`
--

INSERT INTO `clinicas` (`clinica_id`, `clinica_nombre`, `clinica_http`, `clinica_direccion`, `clinica_cordenadas`, `clinica_codigo`, `clinica_numero_principal`, `clinica_numero_otros`, `clinica_correo_principal`, `clinica_correo_secundario`, `clinica_especialidades`, `clinica_fecha_creacion`, `clinica_fecha_actualizacion`, `clinica_resumen`, `clinica_imagen`, `pais_id`, `estado_id`, `clinica_estatus`, `clinica_consultorio`) VALUES
(3, 'clínica el Ávila', 'clinica-el-avila', '6ta Transversal de, Av. San Juan Bosco, Caracas 1060, Distrito Capital', NULL, '00003', 2122761111, '21324324, 32424535', 'clinicaelavila.com', 'clinicaelavila.com , clinicaelavila.com', '00005,00006,00007', '2017-09-10 12:01:27', '2017-10-01 22:42:54', '<p>Emergencia Pediátrica y de Adultos dispone de Trauma Shock, Terapia Respiratoria, Consultorios de Emergencia, Áreas de Observación, Cirugía Menor y una Sala de Espera.</p>', '472381.jpg', 95, 1866, 0, '45'),
(4, 'centro medico la trinidad', 'centro-medico-la-trinidad', 'Av. de El Hatillo, Caracas 1080, Distrito Capital', NULL, '00004', 2129496411, '0212-9496411 , 0212-9496411', 'cmdlt.edu.ve', 'cmdlt.edu.ve , cmdlt.edu.ve', '00003,00009,00010', '2017-09-10 12:55:37', '2017-09-10 12:55:37', '<p>redunda en una atención hospitalaria de calidad. Por ello, uno de nuestros principios fundacionales es la <strong>educación médica</strong>. La enseñanza se debe regir por estándares de calidad para asegurar un elevado nivel de competencia entre los egresados, por lo que ha sido imperativo profesionalizar la educación y la investigación en nuestra institución.</p>', '79463.jpg', 95, 1866, 0, NULL),
(5, 'Unidad Oftalmologica de Caracas', 'unidad-oftalmologica-de-caracas', 'Piso 7 - Ofic 701, Avenida Circunvalacion del Sol, Caracas 108, Distrito Capital', NULL, '00005', 2129187700, '0212-9187700, 0212-9187700', 'oftalmologica.com', 'oftalmologica.com , oftalmologica.com', '00008', '2017-09-10 12:59:44', '2017-09-10 12:59:44', '<p>Actualmente conformamos un equipo multidisciplinario de 30 Médicos Oftalmólogos, 3 Médicos Anestesiólogos y 2 Médicos Internistas, acreditados con excelente formación académica, trayectoria profesional y reconocimientos a nivel nacional e internacional; en unión de profesionales especializados en diferentes áreas, y dotados de modernos y sofisticados equipos, estamos capacitados para atenderle en las siguientes sub-especialidades de la Oftalmología:</p><ol><li>Catarata</li><li>Retina y Vitreo</li><li>Glaucoma</li><li>Cirugía Refractiva (Miopía – Hipermetropía - Astigmatismo)</li><li>Neuroftalmología</li><li>Transplante de Córnea</li><li>Oftalmología Pediátrica</li><li>Estrabismo </li><li>Implante de Lentes Fáquicos </li><li>Órbita </li><li>Vías Lagrimales </li><li>Tumores Oculares </li><li>Párpados</li><li>Corrección de Presbicia con Implante de Lente Multifocal </li><li>Prótesis Oculares</li><li>Audiometría </li></ol>', '577138.jpg', 95, 1866, 0, NULL),
(6, 'clínica de mérida', 'clinica-de-merida', 'Av. Urdaneta, Mérida 5101, Mérida', NULL, '00006', 2147483647, '0274-2630652 , 0274-2630652', 'merdiaclinica@gmail.com', 'merdiaclinica@gmail.com ,merdiaclinica@gmail.', '00004,00005', '2017-09-10 13:03:37', '2017-09-10 13:03:37', '<p>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"</p>', '606852.jpg', 95, 1855, 0, NULL),
(7, 'Clínica Guadalupana', 'clinica-guadalupana', 'Las Tablas, Panamá\r\n', NULL, '00007', 2147483647, '507 994-9730 , 507 994-9730', 'panama@gmail.com', 'panama@gmail.com ,  panama@gmail.com', '00005,00006,00007', '2017-09-10 13:12:44', '2017-09-10 13:12:44', '<p>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"</p>', '752466.jpg', 124, 1772, 0, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clinicas_doctores`
--

CREATE TABLE `clinicas_doctores` (
  `clinica_doctor_id` int(11) NOT NULL COMMENT 'Cod Clinica',
  `clinica_id` int(10) NOT NULL COMMENT 'Clinica',
  `doctor_id` int(10) NOT NULL COMMENT 'Doctor'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clinicas_doctores`
--

INSERT INTO `clinicas_doctores` (`clinica_doctor_id`, `clinica_id`, `doctor_id`) VALUES
(5, 3, 12),
(6, 4, 14),
(7, 4, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_banners`
--

CREATE TABLE `cms_banners` (
  `banner_id` int(11) NOT NULL COMMENT 'ID',
  `banner_imagen` text COMMENT 'Imágen',
  `banner_titulo` varchar(45) DEFAULT NULL COMMENT 'Título',
  `banner_ubicacion` varchar(50) NOT NULL COMMENT 'Ubicación',
  `banner_texto` text COMMENT 'Texto'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cms_banners`
--

INSERT INTO `cms_banners` (`banner_id`, `banner_imagen`, `banner_titulo`, `banner_ubicacion`, `banner_texto`) VALUES
(37, '538753.jpg', 'Nosotros', 'nosotros', ''),
(50, '836594.jpg', 'contacto', 'contacto', NULL),
(53, '967190.jpg', 'imagen 2', 'home', 'Ahora tendrán el control de tus pacientes a un solo click.'),
(54, '398685.jpg', 'imagen 3', 'home', 'Los pacientes podrán agendar su citas de una forma rápida y sencilla.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_categories`
--

CREATE TABLE `cms_categories` (
  `categorie_id` int(11) NOT NULL COMMENT 'Id',
  `categorie_name` varchar(100) NOT NULL COMMENT 'Nombre',
  `categorie_http` varchar(100) DEFAULT NULL COMMENT 'Http',
  `categorie_status` tinyint(4) DEFAULT NULL,
  `categorie_codigo` text COMMENT 'Código Categoría',
  `language_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cms_categories`
--

INSERT INTO `cms_categories` (`categorie_id`, `categorie_name`, `categorie_http`, `categorie_status`, `categorie_codigo`, `language_id`) VALUES
(23, 'Enfermedades', NULL, NULL, '00023', 1),
(24, 'Ayuda', NULL, NULL, '00024', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_commens`
--

CREATE TABLE `cms_commens` (
  `comment_id` int(11) NOT NULL COMMENT 'Id',
  `comment_author` text NOT NULL COMMENT 'Autor\n',
  `comment_author_email` varchar(100) NOT NULL COMMENT 'Correo de autor\n',
  `comment_author_url` varchar(200) DEFAULT NULL COMMENT 'URL de autor',
  `comment_author_ip` varchar(100) DEFAULT NULL COMMENT 'Direccion IP del autor ',
  `comment_date` datetime NOT NULL COMMENT 'Fecha  de creacion ',
  `comment_date_gmt` datetime DEFAULT NULL COMMENT 'fecha creacion GMT',
  `comment_content` text NOT NULL COMMENT 'Contenido',
  `comment_score` int(11) DEFAULT NULL COMMENT 'Puntuacion',
  `comment_approved` varchar(45) DEFAULT NULL COMMENT 'Aprobacion',
  `comment_type` varchar(45) DEFAULT NULL COMMENT 'Tipo de comentario',
  `post_id` int(11) NOT NULL COMMENT 'Post'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_general_pages`
--

CREATE TABLE `cms_general_pages` (
  `general_pages_id` varchar(50) NOT NULL COMMENT 'ID Nombre',
  `general_pages_content` text COMMENT 'Contenido',
  `general_pages_banner` text COMMENT 'banner',
  `general_pages_title` text COMMENT 'Titulo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cms_general_pages`
--

INSERT INTO `cms_general_pages` (`general_pages_id`, `general_pages_content`, `general_pages_banner`, `general_pages_title`) VALUES
('contacto', '<p>Escríbanos a nuestro correo electrónico info@tuagendamedica.com o envíenos su mensaje a través del <a href=\"https://bmosoluciones.com/projects/alimentosrigal.com/contacto\">formulario de contacto.</a></p>', '', 'Contacto'),
('footer-col1', '<p>Nuestra pasión es saber que los usuarios de TuAgendaMedica.com estén al 100% satisfecho y la aplicación sea parte importante de su vida.</p>', NULL, 'Nosotros'),
('footer-col2', '<p>Clínicas </p><p>Doctores </p><p>Compañías de Seguros </p><p>Farmacias</p><p>Medicinas</p><p>Enciclopedia Médica<br></p>', NULL, 'De su interés'),
('footer-col3', '<p><a href=\"http://www.tuagendamedica.com\">www.tuagendamedica.com</a></p><p>info@tuagendamedica.com</p><p><br></p><p><br></p>', NULL, 'Información de contacto'),
('homeseccion2', '<p>TuAgendaMedica.com  Te Agenda   Te Cuida</p>', NULL, 'Clínicas, doctores, especialidades, medicinas'),
('homeseccion2-col1', '<p style=\"text-align: center;\">En TuAgendaMedica.com podrás conseguir tu Medico rápido y fácil. Lo puedes realizar por la ciudad donde vives, compañía de seguros que tengas, también por un centro de atención especifico y por la especialidad que necesites. Somos tu mejor opción.</p>', NULL, 'Búsqueda fácil'),
('homeseccion2-col2', '<p> Tanto Médicos como pacientes podran agendar, reagendar y cancelar citas médicas de forma sencilla y automatizada.</p>', NULL, 'Agendar Cita'),
('homeseccion2-col3', '<p> Médicos y Pacientes podrán ver diagnósticos, tratamientos y citas que han tenido los pacientes anteriormente, para el médico le ayudara tener información más precisa y para el paciente un mayor control de su historial médico.</p>', NULL, 'Historial Médico'),
('homeseccion2-col4', '<p>Podrán contar con servicios a domicilio para la entregas de medicinas, ya que tenemos alianzas con las principales redes de farmacia en el país.</p>', NULL, 'Servicio a domicilio'),
('homeseccion3', '<p>Cuando eres joven y sano, nunca se te ocurre que en un solo segundo tu vida entera podría cambiar</p>', NULL, '-- JUAN  --'),
('homeseccion4', '<p>DB si desea agregar un texto</p>', NULL, 'Noticias de Intéres'),
('homeseccion5', '<p>Múltiples servicios</p>', NULL, 'Servicios adicionales'),
('homeseccion5-col1', '<p>Mediante una cámara podrán guardar recetas (récipe), exámenes, radiografías, entre otras cosas. Esto les ayudara tener un mayor control.</p>', NULL, 'Almacenamiento de Información'),
('homeseccion5-col2', '<p>TuAgendamedica.com le recordará de forma automáticas a qué hora y hasta que día se tomara su medicina, ya que el médico ingresará en el sistema su tratamiento y esto se reprogramara de forma automatizada al realizar la primera toma.</p>', NULL, 'Recordatorios'),
('homeseccion5-col3', '<p>No solo podrá tener el control médico personal sino también el control médico de sus familiares, ya que con un solo usuario podrás registrar a todos los miembros familiares y ver detalladamente cada información.</p>', NULL, 'Multiusuario'),
('nosotros', '<h2></h2><p>Somos un grupo de emprendedores que tenemos como sueño crear un instrumento súper completo y a la vez lo bastante sencillo de manejar, con el fin de que los doctores y los pacientes tengan el control absoluto de sus citas médicas, tratamientos, historial médico, exámenes, recetas, compra de medicinas , entre otros beneficios y que lo tenga a un solo click. </p><p>Nuestra pasión es saber que los usuarios de TuAgendaMedica.com estén al 100% satisfecho y la aplicación sea parte importante de su vida.</p><hr>', '262828.jpg', 'Nosotros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_language`
--

CREATE TABLE `cms_language` (
  `language_id` int(11) NOT NULL COMMENT 'Cod  Lenguaje',
  `language_name` varchar(45) NOT NULL COMMENT 'Nombre ',
  `laguage_abbreviation` varchar(45) NOT NULL COMMENT 'Abrevación'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cms_language`
--

INSERT INTO `cms_language` (`language_id`, `language_name`, `laguage_abbreviation`) VALUES
(1, 'Español', 'es'),
(2, '\nEnglish', 'en');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_postmeta`
--

CREATE TABLE `cms_postmeta` (
  `meta_id` int(11) NOT NULL COMMENT 'Id',
  `meta_key` varchar(45) DEFAULT NULL COMMENT 'Llave  de meta ',
  `meta_value` varchar(45) DEFAULT NULL COMMENT 'valor de meta',
  `post_id` int(11) NOT NULL COMMENT 'Post'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_posts`
--

CREATE TABLE `cms_posts` (
  `post_id` int(11) NOT NULL COMMENT 'Id\n',
  `post_date` datetime NOT NULL COMMENT 'Fecha Creacion\n',
  `post_date_gmt` datetime DEFAULT NULL COMMENT 'Fecha creacion GMT\n',
  `post_content` longtext NOT NULL COMMENT 'Contenido',
  `post_title` text NOT NULL COMMENT 'Titulo',
  `post_summary` text COMMENT 'Resumen',
  `post_status` varchar(45) DEFAULT NULL COMMENT 'Estatus\n',
  `post_comment_status` varchar(45) DEFAULT NULL COMMENT 'Comentario de estatus\n',
  `post_name` text NOT NULL COMMENT 'Nombre',
  `post_http` text COMMENT 'Http',
  `post_categories` text NOT NULL COMMENT 'Categorias',
  `post_subcategories` text COMMENT 'Tipode categorias',
  `post_modified` datetime DEFAULT NULL,
  `post_modified_gmt` datetime DEFAULT NULL,
  `commnet_count` bigint(20) DEFAULT NULL,
  `user_id` int(11) NOT NULL COMMENT 'Usuario Id',
  `post_image_1` text,
  `post_image_2` text,
  `post_image_c1` text,
  `post_image_c2` text,
  `post_principal` tinyint(1) DEFAULT NULL COMMENT 'Post principal',
  `post_section_right` tinyint(1) DEFAULT '0' COMMENT 'Colocar en sección derecha',
  `post_keywords` text COMMENT 'Palabras Claves (keywords)',
  `post_presentacion_is_video` tinyint(1) DEFAULT '0' COMMENT 'Usar Video como presentación',
  `post_video_1` text COMMENT 'Video',
  `post_title_in_top` tinyint(1) DEFAULT '0' COMMENT 'Título sobre la imagen',
  `post_presentacion_hide` tinyint(1) DEFAULT '0' COMMENT 'Ocultar Presentación',
  `language_id` int(11) NOT NULL COMMENT 'Idioma'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cms_posts`
--

INSERT INTO `cms_posts` (`post_id`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_summary`, `post_status`, `post_comment_status`, `post_name`, `post_http`, `post_categories`, `post_subcategories`, `post_modified`, `post_modified_gmt`, `commnet_count`, `user_id`, `post_image_1`, `post_image_2`, `post_image_c1`, `post_image_c2`, `post_principal`, `post_section_right`, `post_keywords`, `post_presentacion_is_video`, `post_video_1`, `post_title_in_top`, `post_presentacion_hide`, `language_id`) VALUES
(332, '2017-09-14 00:00:00', '2017-09-14 18:07:44', '<p>El día internacional del Alzheimer se celebra el 21 de septiembre, fecha elegida por la <span class=\"caps\" style=\"background-color: initial;\">OMS</span> y la Federación internacional de Alzheimer, en la cual se celebran en diversos países actividades para concienciar y ayudar a prevenir la enfermedad.</p><p>Hay diferencias de incidencia dependiendo del sexo, ya que se aprecia un riesgo mayor de padecer la enfermedad en las mujeres, en concreto entre la población mayor de 85 años. Para el año 2010 la Alzheimer’s Disease International ha estimado una prevalencia de demencia del 4,7% a nivel mundial para personas con 60 años o más, representando cifras al alza respecto a varios estudios publicados con anterioridad (10% superiores a las estimadas para <em>The Lancet</em> en 2005).</p><p>Se ha probado la eficacia de fármacos anticolinesterásicos que tienen una acción inhibidora de la colinesterasa, la enzima encargada de descomponer la acetilcolina (neurotransmisor que falta en la enfermedad de Alzheimer y que incide sustancialmente en la memoria y otras funciones cognitivas).</p>', 'Enfermedad Alzheimer', 'Enfermedad neurodegenerativa de causas desconocidas. Es una de las más difíciles de tratar y afrontar. ', '1', NULL, 'enfermedad-alzheimer', 'enfermedad-alzheimer', '00023', '', '2017-09-14 18:07:44', '2017-09-14 18:07:44', NULL, 1, '539937.jpg', '78470.jpg', NULL, NULL, NULL, 0, '', 0, '', 1, 0, 1),
(333, '2017-09-13 00:00:00', '2017-09-14 18:11:15', '<p> Se han logrado grandes avances en la medicina pero aún no se conoce la cura. Al menos sí que se ha conseguido que la enfermedad sea crónica. Las probabilidades de una cura son ciertamente remotas, así que los esfuerzos de la investigación actual se centran más en conseguir algún tipo de vacuna que evite nuevos contagios.</p>', 'Enfermedad Sida', 'Fue la enfermedad del siglo XX. Causada por el virus de inmunodeficiencia humana (VIH), es una enfermedad infecciosa de consecuencias graves.', '1', NULL, 'enfermedad-sida', 'enfermedad-sida', '00023', '', '2017-09-14 18:11:15', '2017-09-14 18:11:15', NULL, 1, '677770.jpg', '798547.jpg', NULL, NULL, NULL, 0, 'sida', 0, '', 1, 0, 1),
(334, '2017-09-15 00:00:00', '2017-09-14 18:13:03', '<p>El lupus se presenta más comúnmente en asiáticos y africanos y es 9 veces más frecuente en las mujeres que en los hombres.Las primeras manifestaciones de la enfermedad se observan frecuentemente entre los 15 y 44 años de edad. Aunque hasta el momento no hay una cura, los síntomas se tratan principalmente con dosis bajas de corticosteroides, inmunosupresores y antipalúdicos como la hidroxicloroquina</p>', 'enfermdedad  lupus', 'El lupus eritematoso sistémico (LES) es una enfermedad autoinmune. Es impredecible y puede provocar artritis, anemia, erupciones cutáneas, etc.', '1', NULL, 'enfermdedad-lupus', 'enfermdedad-lupus', '00023', '', '2017-09-14 18:13:03', '2017-09-14 18:13:03', NULL, 1, '402105.jpg', '358392.jpg', NULL, NULL, NULL, 0, 'lupus', 0, '', 1, 0, 1),
(335, '2017-09-25 00:00:00', '2017-09-14 18:14:51', '<p>Para el año 2000, se estimó que alrededor de 171 millones de personas eran diabéticas en el mundo y que llegarán a 370 millones en 2030. Este padecimiento causa diversas complicaciones, dañando frecuentemente a ojos, riñones, nervios y vasos sanguíneos.</p><p>El Día Mundial de la Diabetes se conmemora el 14 de noviembre.</p><p>La diabetes mellitus era ya conocida antes de la era cristiana. En el papiro de Ebers descubierto en Egipto y que data al siglo XV a. C., ya se describen síntomas que parecen corresponder a la diabetes. Fue Areteo de Capadocia quien, en el siglo II de la era cristiana, le otorgó a esta afección el nombre de diabetes, que significa en griego correr a través, refiriéndose al signo más llamativo que es la eliminación exagerada de agua por el riñón, expresando que el agua entraba y salía del organismo del diabético sin fijarse en él.</p>', 'la diabetes', 'Generada por un desorden metabólico por el cual la persona tiene demasiada azúcar en la sangre y no produce suficiente insulina', '1', NULL, 'la-diabetes', 'la-diabetes', '00023', '', '2017-09-14 18:14:51', '2017-09-14 18:14:51', NULL, 1, '26791.jpg', '446846.jpg', NULL, NULL, NULL, 0, 'diab', 0, '', 0, 0, 1),
(336, '2017-09-20 00:00:00', '2017-09-14 18:16:46', '<p>El virus está vivo en África. En el año 1976 murieron alrededor del 85% de los infectados.</p><p>El virus del Ébola no tiene cura y ningún tratamiento específico. El tratamiento que se utiliza en la actualidad es mantener la vida de la persona mediante métodos de resucitación (respiración artificial, evitando el <span class=\"caps\">RCP</span> pues el virus es contagioso por la saliva) y controlar las hemorragias en la medida de lo posible. En cuanto a una vacuna, se realizan investigaciones, pero éstas se complican porque aún no se conocen todas las proteínas del virus y porque hay sólo cuatro laboratorios equipados para trabajar con un virus como éste</p>', 'El ebola', 'Fiebre hemorrágica transmitida de los primates a los humanos que puede ser mortal. Es originaria de África y tiene una tasa de mortalidad de entre 50 y 90% de los casos.', '1', NULL, 'el-ebola', 'el-ebola', '00023', '', '2017-09-14 18:16:46', '2017-09-14 18:16:46', NULL, 1, '25404.jpg', '572690.jpg', NULL, NULL, NULL, 0, 'ebola', 0, '', 0, 0, 1),
(337, '2017-10-12 00:00:00', '2017-10-01 22:52:03', '<p>En los últimos veinte años se ha registrado un aumento en su incidencia debido en parte a la contaminación ambiental y las consecuencias de ésta, y en parte al aumento de la población mundial. Por ejemplo, la Organización Mundial de la Salud reportó que un 8% de la población suiza padecía de asma, comparado con solo 2% hace 25-30 años atrás.</p>', 'Asma', 'Enfermedad crónica que puede avanzar en etapas graves. Se produce en los pulmones e inflama las vías respiratorias.', '1', NULL, 'asma', 'asma', '00023', '', '2017-10-01 22:52:03', '2017-10-01 22:52:03', NULL, 1, '268761.jpg', '84235.jpg', NULL, NULL, NULL, 0, 'as', 0, '', 0, 0, 1),
(340, '2017-10-18 00:00:00', '2017-10-18 12:14:45', '<h3>Para crear un país, debe seguir los siguientes pasos:<o:p></o:p></h3><ol><li>Escriba el nombre en el campo PAÍS, con su respectiva inicial mayúscula (este campo es obligatorio).<br><img src=\"http://localhost:8080/workspacemyapp/tuagendamedica.com/themes/tuagendamedica/resources/images/post/41764210.jpg\"> <img src=\"http://localhost:8080/workspacemyapp/tuagendamedica.com/themes/tuagendamedica/resources/images/post/20546953.jpg\"><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/63658443.jpg\"></li><li>Ingrese la abreviatura de dicho país, en el campo ABREVIACIÓN (este campo es obligatorio).<br><br><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/98231039.jpg\"></li><li><img src=\"http://localhost:8080/workspacemyapp/tuagendamedica.com/themes/tuagendamedica/resources/images/post/39125961.jpg\">   <img src=\"http://localhost:8080/workspacemyapp/tuagendamedica.com/themes/tuagendamedica/resources/images/post/1116258.jpg\">Presione el botón SELECCIONE, para seleccionar la imagen que representa la bandera del país que se está generando(Debe respetar las medias que se sugieren de la imagen, este campo es obligatorio).<br><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/7543664.jpg\"></li><li>Luego de completar TODO el formulario, deberá darle click al botón CREAR, de esta manera se guardara correctamente el Nuevo País.<br><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/24629985.jpg\"><br><br><br><br><img src=\"http://localhost:8080/workspacemyapp/tuagendamedica.com/themes/tuagendamedica/resources/images/post/5470496.jpg\"></li><li>AL guardarse, se mostrara un mensaje de PAÍS GUARDADO.<br><img src=\"http://localhost:8080/workspacemyapp/tuagendamedica.com/themes/tuagendamedica/resources/images/post/62926672.jpg\"><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/84703550.jpg\"></li></ol>', 'COMO CREAR UN PAÍS', 'Instrucciones paso a paso para crear un PAÍS', '1', NULL, 'como-crear-un-pais', 'como-crear-un-pais', '00024', NULL, '2017-10-18 12:14:45', '2017-10-18 12:14:45', NULL, 1, '879959.jpg', '704764.jpg', NULL, NULL, NULL, 1, 'crear, pais, gestionar', 0, '', 1, 0, 1),
(341, '2017-10-18 00:00:00', '2017-10-18 12:18:58', '<h3>Para crear un estado, debe seguir los siguientes pasos:</h3><ol><li>Seleccione el país en el campo PAÍS (este campo es obligatorio).<br><img src=\"http://localhost:8080/workspacemyapp/tuagendamedica.com/themes/tuagendamedica/resources/images/post/40757787.jpg\"><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/7159915.jpg\"></li><li>Escriba el nombre del estado en el campo ESTADO, con sú respectiva inicial mayúscula (este campo es obligatorio).<br><img src=\"http://localhost:8080/workspacemyapp/tuagendamedica.com/themes/tuagendamedica/resources/images/post/29142879.jpg\"><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/10255520.jpg\"></li><li>Luego de completar TODO el formulario, deberá Darle click al botón CREAR ESTADO, de esta manera se guardara correctamente el nuevo Estado.<br><img src=\"http://localhost:8080/workspacemyapp/tuagendamedica.com/themes/tuagendamedica/resources/images/post/8273994.jpg\"><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/250767.jpg\"></li><li>AL guardarse, se mostrara un mensaje de ESTADO GUARDADO<br><img src=\"http://localhost:8080/workspacemyapp/tuagendamedica.com/themes/tuagendamedica/resources/images/post/55793967.jpg\"><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/20898387.jpg\"></li></ol>', 'COMO CREAR UN ESTADO', 'Instrucciones paso a paso para crear un ESTADO', '1', NULL, 'como-crear-un-estado', 'como-crear-un-estado', '00024', NULL, '2017-10-18 12:18:58', '2017-10-18 12:18:58', NULL, 1, '766430.jpg', '218711.jpg', NULL, NULL, NULL, 1, 'crear, pais, gestionar, estado', 0, '', 1, 0, 1),
(342, '2017-10-17 00:00:00', '2017-10-17 11:46:53', '<h4>Para modificar o editar un PAÍS debe seguir las siguientes instrucciones:</h4><h4><br></h4><ol><li>Al Presione el botón CREAR, Lo llevara directamente al formulario que debe completar para crear un PAÍS nuevo. (Siga los pasos en el Instructivo COMO CREAR UN PAÍS<br><br><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/77557188.jpg\"></li><li>Debe buscar y seleccionar el PAÍS que desea cambiar. Para ellos, escoja directamente de la lista o utilice las opción de búsqueda por PAÍS. Esto le permitirá conseguir PAÍS de forma más rápida y precisa.<br> <img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/74564277.jpg\"></li><li>Cuando tenga visualizado el PAÍS que desea cambiar, seleccione directamente el LÁPIZ, si desea modificarlo o la PAPELERA, si desea eliminarlo.<br><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/58305184.jpg\"></li><li> Si selecciona la papelera, intentara eliminar el PAÍS seleccionado.<br><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/62419273.jpg\" \"=\"\"><span class=\"redactor-invisible-space\"><br><br><br></span></li><li> Luego tendrá que confirmar que sera eliminada la selección, con aceptar en un cuadro de dialogo.<br><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/87416140.jpg\"></li><li>Luego de esta acción, le aparecerá un recuerdo indicándole PAÍS ELIMINADO<br><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/35747130.jpg\"><br></li><li>Si no le permite eliminar el PAÍS seleccionado, tiene  asociado uno o varios ESTADOS. De ser su caso, siga las instrucciones de como eliminar un estado en COMO MODIFICAR Y ELIMINAR UN ESTADO y elimine primero todos los estados pertenecientes al PAÍS en cuestión e intente nuevamente eliminarlo.<br><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/60453134.jpg\"></li><li>Si selecciona el lápiz, irá directamente a las opciones donde podrá modificar los campos necesarios y cuyos campos, poseen el contenido antiguo.<br><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/3178917.jpg\"></li><li>Campo PAÍS podrá modificarlo y/o dejarlo como se encuentra<br><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/94623035.jpg\"></li><li>Ingrese en el campo ABREVIATURA  la modificación o déjelo como se encuentra actualmente.<span class=\"redactor-invisible-space\"><br><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/3263819.jpg\"><br><br><span class=\"redactor-invisible-space\"><br><br></span></span></li><li><span class=\"redactor-invisible-space\"><span class=\"redactor-invisible-space\">seleccione una nueva IMAGEN para modificar o puede dejar la actual.<br></span><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/73509488.jpg\"><br><br></span></li><li>Una vez modificado el PAÍS  presionar el botón ACTUALIZAR, que se encontrara al pie de la pagina.<br><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/55909386.jpg\" \"=\"\"></li><li>Debe aparecer un recuadro informando PAIS ACTUALIZADO, como se muestra a continuación.<o:p style=\"background-color: initial;\"></o:p><br><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/55897519.jpg\"></li></ol><p><o:p></o:p></p><strong></strong><b></b><p><b></b></p><br><b><br></b>', 'COMO MODIFICAR O ELIMINAR  UN PAÍS', 'Instrucciones paso a paso para modificar un PAÍS', '1', NULL, 'como-modificar-o-eliminar-un-pais', 'como-modificar-o-eliminar-un-pais', '00024', NULL, '2017-10-17 11:46:53', '2017-10-17 11:46:53', NULL, 1, '39829.jpg', '991833.jpg', NULL, NULL, NULL, 1, 'instrucciones, pais, modificar', 0, '', 1, 0, 1),
(343, '2017-10-17 00:00:00', '2017-10-17 11:45:53', '<p><b>Para modificar o editar un ESTADO debe seguir las siguientes instrucciones:</b></p><p><b><v:shapetype> <v:stroke> <v:formulas> <v:f> <v:f> <v:f> <v:f> <v:f> <v:f> <v:f> <v:f> <v:f> <v:f> <v:f> <v:f> </v:f></v:f></v:f></v:f></v:f></v:f></v:f></v:f></v:f></v:f></v:f></v:f></v:formulas> <v:path> <o:lock> </o:lock></v:path></v:stroke></v:shapetype><v:shape> <v:imagedata> </v:imagedata></v:shape></b><b></b></p><p>1.Al Presione el botón CREAR, Lo llevara directamente al formulario que debe completar para crear un ESTADO nuevo. (Siga los pasos en el Instructivo COMO CREAR UN ESTADO)<br></p><p><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/99103360.jpg\"></p><p><br></p>\r\n<p>2.Debe ingresar y seleccionar el ESTADO que desea cambiar. Para ellos, escoja directamente de la lista o utilice las opciones de búsquedas, escribiendo  el PAÍS o el ESTADO que desea modificar y precione la tecla ENTER. Esto le permitirá conseguir el ESTADO de forma más rápida y precisa.<br></p><p><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/55083081.jpg\"></p><p><br><br></p><p> <v:shape> <v:imagedata> </v:imagedata></v:shape></p><p>3.Cuando tenga visualizado el ESTADO que desea cambiar, seleccione directamente el LÁPIZ, si desea modificarlo o la PAPELERA, si desea eliminarlo.</p><p><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/47118099.jpg\"></p><p>4.Si selecciona la papelera, intentara eliminar el ESTADO seleccionado.<v:shape> <v:imagedata> </v:imagedata></v:shape><br> </p><p><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/22218124.jpg\"></p><br> <p>5.Luego tendrá que confirmar que sera eliminada la selección, con aceptar en un cuadro de dialogo.<br> <v:shape> <v:imagedata> </v:imagedata></v:shape></p><p><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/39703530.jpg\"></p><p><br></p>\r\n<p>6.Luego de esta acción, le aparecerá un recuerdo indicándole ESTADO ELIMINADO<br> <v:shape> <v:imagedata> </v:imagedata></v:shape></p><p><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/9019496.jpg\"></p><p><br></p>\r\n<p>7.Si selecciona el LÁPIZ, irá directamente a las opciones donde podrá modificar los campos necesarios y cuyos campos, poseen el contenido antiguo.</p><p><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/33951462.jpg\"></p><p><br><br> </p><p>8. Seleccione el PAÍS donde pertenece el ESTADO que va a modificar, de ser necesario, de lo contrario,  dejarlo como se encuentra.<br> <v:shape> <v:imagedata> </v:imagedata></v:shape><br> </p><p><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/38665616.jpg\"></p><p><br><br> </p><p>9. Modifique el  campo  ESTADO de ser necesario, de lo contrario,  dejarlo como se encuentra. <v:shape> <v:imagedata> </v:imagedata></v:shape><br> <br> </p><p><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/1723437.jpg\"></p><br> <p>10.Una vez modificado el ESTADO presionar el botón ACTUALIZAR, que se encontrara al pie de la pagina.<br></p><p> <v:shape> <v:imagedata> </v:imagedata></v:shape><br> <img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/93101837.jpg\"><br> <br> </p><p>11.Debe aparecer un recuadro informando PAÍS ACTUALIZADO, como se muestra a continuación.</p><p><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/97622305.jpg\"></p><p><br><br></p>', 'COMO MODIFICAR O ELIMINAR  UN ESTADO', 'Instrucciones paso a paso para modificar un ESTADO', '1', NULL, 'como-modificar-o-eliminar-un-estado', 'como-modificar-o-eliminar-un-estado', '00024', NULL, '2017-10-17 11:45:53', '2017-10-17 11:45:53', NULL, 1, '242919.jpg', '260586.jpg', NULL, NULL, NULL, 1, 'modificar, estado, instruccciones', 0, '', 1, 0, 1),
(344, '2017-10-17 00:00:00', '2017-10-17 11:48:20', '<p><b>Para agaragar o modificar uno o varios <strong>CORREO PARA FORMULARIO CONTACTO</strong></b><b>, debe seguir los pasos a continuación:<o:p></o:p></b></p><p><br></p><ol><li>Ingrese en el campo  CORREO PARA FORMULARIO CONTACTO<b><o:p></o:p></b>  el o los correos electrónicos, separados con coma (,) en caso de ser mas de uno. En dicho o dichos correos, se recibirán los datos  que los usuarios agreguen a través del formulario de la Web (campo obligatoriamente debe tener por lo menos uno).<img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/40385532.jpg\"></li><li>Una vez modificado o agregado el o  los correos, presione el botón ACTUALIZAR, que se encontrara al pie de la pag.<o:p style=\"background-color: initial;\"></o:p> y automáticamente se guardaran los cambios realizados.</li></ol><strong></strong><p><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/81727828.jpg\"></p><br>', 'COMO MODIFICAR,  AGREGAR O ELIMINAR  CORREO PARA FORMULARIO CONTACTO', 'Instrucciones paso a paso para agregar o modificar uno o varios CORREOS PARA FORMULARIO CONTACTO', '1', NULL, 'como-modificar-agregar-o-eliminar-correo-para-formulario-contacto', 'como-modificar-agregar-o-eliminar-correo-para-formulario-contacto', '00024', NULL, '2017-10-17 11:48:20', '2017-10-17 11:48:20', NULL, 1, '0538.jpg', '466932.jpg', NULL, NULL, NULL, 1, 'agragar,modificar,  gestionar, correo', 0, '', 1, 0, 1),
(345, '2017-10-17 00:00:00', '2017-10-17 11:33:55', '<h4>Para agregar un SEGURO debe seguir las siguientes instrucciones:<br><br></h4><ol><li>Ingrese a la sesión CREAR SEGURO y  complete el formulario.<br><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/8756076.jpg\"><br><br></li><li>Marque la casilla STATUS para Indicar que es un seguro activo.<br><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/98145151.jpg\"><br></li><li>Ingrese en el campo NOMBRE, el nombre del seguro (este campo es obligatorio).<br><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/48463436.jpg\"></li><li>Ingrese en el campo URL, la direccion, o url del seguro incluyendo HTTPS:// Ejemplo: <a href=\"https://es.lipsum.com/\">https://www.seguro.com/</a> (este campo es obligatorio)<span class=\"redactor-invisible-space\">.<br><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/93701875.jpg\"><br><br><br></span></li><li>Ingrese en el campo LOGO de SELECCIÓN, la imagen correspondiente al seguro. Ojo, la imagen debe tener un tamaño: 300px ancho. 180px alto.(este campo no es obligatorio)<span class=\"redactor-invisible-space\">.<br><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/13053961.jpg\"><br></span></li><li>Ingrese en el campo RESUMEN, el detalle del seguro, según desee que se muestre (este campo no es obligatorio).<br><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/14719379.jpg\"></li><li>Una vez completado el formulario, presione el botón CREAR para guardar y mostrar los datos cargados.<br><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/13084471.jpg\"></li><li>Por ultimo, le mostrara un mensaje diciendo: SEGURO GUARDADO! Significa que esta listo para mostrarse.<br><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/65139774.jpg\"></li></ol><p><span></span></p><p><span class=\"redactor-invisible-space\"></span></p><p><span class=\"redactor-invisible-space\"><span class=\"redactor-invisible-space\"></span></span></p>', 'COMO AGREGAR UN SEGURO', 'Instrucciones paso a paso para agregar un SEGURO', '1', NULL, 'como-agregar-un-seguro', 'como-agregar-un-seguro', '00024', NULL, '2017-10-17 11:33:55', '2017-10-17 11:33:55', NULL, 1, '820649.jpg', '918397.jpg', NULL, NULL, NULL, 1, 'agragar, crear, seguro, instrucciones', 0, '', 1, 0, 1),
(346, '2017-10-18 00:00:00', '2017-10-18 12:01:12', '<h4>Para modificar,  editar o eliminar un SEGURO debe seguir las siguientes instrucciones:</h4><ol><li>Al Presione el botón CREAR SEGURO, Lo llevara directamente al formulario que debe completar para crear un SEGURO nuevo. (Siga los pasos en el Instructivo COMO CREAR UN SEGURO).<br><br><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/90767054.jpg\"></li><li>Debe buscar y seleccionar el SEGURO que desea cambiar. Para ellos, escoja directamente de la lista o utilice las opción de búsqueda por PÁGINA o por NOMBRE. Esto le permitirá conseguir el SEGURO de forma más rápida y precisa.<br><br><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/276224.jpg\"></li><li>Cuando tenga visualizado el SEGURO que desea cambiar o eliminar, seleccione directamente el LÁPIZ, si desea modificarlo o la PAPELERA, si desea eliminarlo.<br><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/36762610.jpg\"></li><li>Si selecciona la papelera, intentara eliminar el SEGURO seleccionado.<br><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/60781709.jpg\"><span class=\"redactor-invisible-space\"><br></span></li><li>Luego tendrá que confirmar que sera eliminada la selección, con aceptar en un cuadro de dialogo.<br><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/68745087.jpg\"></li><li>Luego de esta acción, le aparecerá un recuerdo indicándole SEGURO ELIMINADO<br><br><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/5515928.jpg\"></li><li>Si selecciona el lápiz, irá directamente a las opciones donde podrá modificar los campos necesarios y cuyos campos, poseen el contenido antiguo. (El proceso es igual al proceso de CREAR SEGURO, pero con los datos antiguos en los campos).<br><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/42696175.jpg\"><span class=\"redactor-invisible-space\"><br></span></li><li>Una vez modificado el o los campos necesarios, debe presionar el botón ACTUALIZAR, que se encontrara al pie de la pagina.<br><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/91696392.jpg\"></li><li>Debe aparecer un recuadro informando SEGURO ACTUALIZADO, como se muestra a continuación.<span class=\"redactor-invisible-space\"><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/97179150.jpg\"><span class=\"redactor-invisible-space\"></span><br></span></li></ol>', 'COMO MODIFICAR O ELIMINAR  UN SEGURO', 'Instrucciones paso a paso para modificar o eliminar  un SEGURO', '1', NULL, 'como-modificar-o-eliminar-un-seguro', 'como-modificar-o-eliminar-un-seguro', '00024', NULL, '2017-10-18 12:01:12', '2017-10-18 12:01:12', NULL, 1, '874422.jpg', '263164.jpg', NULL, NULL, NULL, 1, 'seguro, modificar, eliminar, intrucciones', 0, '', 1, 0, 1),
(347, '2017-10-17 00:00:00', '2017-10-17 14:59:54', '<h3>Para crear un SEGURO para un PAIS/ESTADO, debe seguir los siguientes pasos:</h3><p><br></p><ol><li>Presione el botón CREAR SEGURO PAÍS/ESTADO y lo llevara directo al formulario que debe completar, para poder crerlo.<br><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/61723507.jpg\"><br></li><li>Seleccione el seguro en el campo SEGURO,(este campo es obligatorio).<br><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/3358695.jpg\"></li><li>Seleccione el país en el campo PAÍS,(este campo es obligatorio).<br><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/51317268.jpg\"></li><li>Seleccione el estado en el campo ESTADO,(este campo es obligatorio).<br><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/97925229.jpg\"><br><img src=\"http://localhost:8080/workspacemyapp/tuagendamedica.com/themes/tuagendamedica/resources/images/post/39125961.jpg\"></li><li><img src=\"http://localhost:8080/workspacemyapp/tuagendamedica.com/themes/tuagendamedica/resources/images/post/72217303.jpg\">Luego de completar TODO el formulario, deberá darle click al botón CREAR, de esta manera se guardara correctamente el nuevo SEGURO con su PAIS y ESTADO.<br><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/99122192.jpg\"><br></li><li><img src=\"http://localhost:8080/workspacemyapp/tuagendamedica.com/themes/tuagendamedica/resources/images/post/5470496.jpg\">AL guardarse, se mostrara un mensaje de PAÍS SEGURO PAÍS/ESTADO.<br><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/24299021.jpg\"></li></ol>', 'COMO AGREGAR UN SEGURO PAIS/ESTADO', 'Instrucciones paso a paso para agregar un SEGURO PAIS/ESTADO', '1', NULL, 'como-agregar-un-seguro-paisestado', 'como-agregar-un-seguro-paisestado', '00024', NULL, '2017-10-17 14:59:54', '2017-10-17 14:59:54', NULL, 1, '47593.jpg', '851909.jpg', NULL, NULL, NULL, 1, 'seguro, intrucciones, estado, pais, ', 0, '', 1, 0, 1),
(348, '2017-10-17 00:00:00', '2017-10-17 15:39:55', '<h3>Para eliminar o modificar un SEGURO para un PAÍS/ESTADO, debe seguir los siguientes pasos:</h3><ol><li>Al Presione el botón CREAR SEGURO, Lo llevara directamente al formulario que debe completar para CREAR SEGURO PAÍS/ESTADO nuevo. (Siga los pasos en el Instructivo COMO CREAR SEGURO PAÍS/ESTADO).<br><br><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/4915287.jpg\"><br><br></li><li>Debe buscar y seleccionar el SEGURO PAÍS o ESTADO que desea cambiar. Para ellos, escoja directamente de la lista.<br> <br><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/97582004.jpg\"><br><br></li><li>Si desea ver la ficha o los detalles del SEGURO PAIS/ESTADO presione el OJO y mostrara su contenido guardado.<br><br><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/4949459.jpg\"><br></li><li>Si selecciona la papelera, intentara eliminar el SEGURO PAÍS o ESTADO seleccionado.<br><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/60781709.jpg\"><br><br><span class=\"redactor-invisible-space\"><br></span></li><li>Luego tendrá que confirmar que sera eliminada la selección, con aceptar en un cuadro de dialogo.<br><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/68745087.jpg\"><br></li><li>Si selecciona el lápiz, irá directamente a las opciones donde podrá modificar los campos necesarios y cuyos campos, poseen el contenido antiguo. (El proceso es igual al proceso de CREAR SEGURO PAÍS/ESTADO, pero con los datos antiguos en los campos).<br><br><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/42696175.jpg\"></li><li>Una vez modificado el o los campos necesarios, debe presionar el botón ACTUALIZAR, que se encontrara al pie de la pagina.<br><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/91696392.jpg\"></li><li>Debe aparecer un recuadro informando CREAR SEGURO PAÍS/ESTADO ACTUALIZADO, como se muestra a continuación.</li></ol><p><img src=\"http://tuagendamedica.com/themes/tuagendamedica/resources/images/post/61475310.jpg\"></p>', 'COMO ELIMINAR O MODIFICAR  UN SEGURO PAIS/ESTADO', 'Instrucciones paso a paso para eliminar o  modificar  un SEGURO PAIS/ESTADO', '1', NULL, 'como-eliminar-o-modificar-un-seguro-paisestado', 'como-eliminar-o-modificar-un-seguro-paisestado', '00024', NULL, '2017-10-17 15:39:55', '2017-10-17 15:39:55', NULL, 1, '745179.jpg', '799239.jpg', NULL, NULL, NULL, 1, 'seguro, intrucciones, estado, pais,  modificar, eliminar', 0, '', 1, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_subcategories`
--

CREATE TABLE `cms_subcategories` (
  `subcategorie_id` int(11) NOT NULL COMMENT 'Id',
  `subcategorie_name` varchar(100) NOT NULL COMMENT 'nombre',
  `subcategorie_http` varchar(100) DEFAULT NULL COMMENT 'Http\n',
  `categorie_id` int(11) NOT NULL COMMENT 'Categoria',
  `subcategorie_codigo` text COMMENT 'Código Sub Categoría',
  `language_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracion`
--

CREATE TABLE `configuracion` (
  `configuracion_id` int(10) NOT NULL COMMENT 'Configuracion',
  `configuracion_codigo` varchar(45) NOT NULL COMMENT 'Codigo',
  `configuracion_descripcion` varchar(45) DEFAULT NULL COMMENT 'Descripcion',
  `configuracion_visible` tinyint(4) DEFAULT NULL COMMENT 'Visible',
  `configuracion_modificable` tinyint(4) DEFAULT NULL COMMENT 'Modificable\n',
  `configuracion_eliminable` tinyint(4) DEFAULT NULL COMMENT 'Eliminable',
  `configuracion_fecha_registro` datetime DEFAULT NULL COMMENT 'Fecha registro',
  `entidad_id` int(10) NOT NULL COMMENT 'Entidad'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `configuracion`
--

INSERT INTO `configuracion` (`configuracion_id`, `configuracion_codigo`, `configuracion_descripcion`, `configuracion_visible`, `configuracion_modificable`, `configuracion_eliminable`, `configuracion_fecha_registro`, `entidad_id`) VALUES
(1, 'Masculino', 'Masculino', 1, 1, 1, NULL, 1),
(2, 'Femenino', 'Femenino', 1, 1, 1, NULL, 1),
(3, 'Casado', 'Casado', 1, 1, 1, NULL, 2),
(4, 'Soltero', 'Soltero', 1, 1, 1, NULL, 2),
(5, 'Divorciado', 'Divorciado', 1, 1, 1, NULL, 2),
(21, 'Madre', 'Madre', 1, 1, 1, NULL, 7),
(22, 'Padre', 'Padre', 1, 1, 1, NULL, 7),
(23, 'Hijo(a)', 'Hijo(a)', 1, 1, 1, NULL, 7),
(24, 'Tabletas', 'Tabletas', 1, 1, 1, NULL, 8),
(25, 'Jarabe', 'Jarabe', 1, 1, 1, NULL, 8),
(26, 'Dia(s)', 'Dia(s)', 1, 1, 1, NULL, 9),
(27, 'Semana(s)', 'Semana(s)', 1, 1, 1, NULL, 9),
(28, 'Minutos', 'Minutos', 1, 1, 1, NULL, 10),
(29, 'Horas', 'Horas', 1, 1, 1, NULL, 10),
(30, '500ml', '500ml', NULL, NULL, NULL, NULL, 11),
(31, '250ml', '250ml', NULL, NULL, NULL, NULL, 11),
(32, 'Esposo', 'Esposo', NULL, NULL, NULL, NULL, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `correos`
--

CREATE TABLE `correos` (
  `correo_id` int(11) NOT NULL,
  `correo_principal` varchar(50) NOT NULL,
  `correo_copia_principal` varchar(50) NOT NULL,
  `correo_secundario` varchar(50) NOT NULL,
  `correo_secundario_copia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `correos`
--

INSERT INTO `correos` (`correo_id`, `correo_principal`, `correo_copia_principal`, `correo_secundario`, `correo_secundario_copia`) VALUES
(1, 'erick.araque.bmmo@gmail.com,', 'erick.araque.bmo@gmail.com', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_fiscales`
--

CREATE TABLE `datos_fiscales` (
  `fiscal_id` int(10) UNSIGNED NOT NULL COMMENT 'cod  fiscal',
  `fiscal_rif` varchar(45) DEFAULT NULL COMMENT 'RIF',
  `fiscal_cedula` varchar(45) NOT NULL COMMENT 'Cédula\n',
  `fiscal_correo` varchar(45) NOT NULL COMMENT 'Correo',
  `fisca_razon_social` varchar(45) DEFAULT NULL COMMENT 'Razon social',
  `usuario_id` int(11) NOT NULL COMMENT 'Usuario'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctores`
--

CREATE TABLE `doctores` (
  `doctor_id` int(10) NOT NULL COMMENT 'cod doctor',
  `usuario_id` int(11) NOT NULL COMMENT 'Cod Usuario',
  `doctor_http` text COMMENT 'Http\n',
  `doctor_imagen` text NOT NULL COMMENT 'Imagen',
  `doctor_resumen` text NOT NULL COMMENT 'Resumen',
  `doctor_resumen_academico` text COMMENT 'Resumen Académico',
  `doctor_seguros` text COMMENT 'Seguros',
  `doctor_logros` text COMMENT 'Logros',
  `doctor_especialidades` text NOT NULL COMMENT 'Especialidades',
  `buscador_especialidades` text COMMENT 'Especialidades',
  `buscador_paises` text COMMENT 'Paises',
  `buscador_seguros` text COMMENT 'Seguros',
  `buscador_doctor_nombre` text COMMENT 'Doctor',
  `buscador_clinicas` text COMMENT 'Clinicas',
  `doctor_clinicas` text COMMENT 'Clinicas',
  `doctor_numero_colegialo` text COMMENT 'Numero de colegialo'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `doctores`
--

INSERT INTO `doctores` (`doctor_id`, `usuario_id`, `doctor_http`, `doctor_imagen`, `doctor_resumen`, `doctor_resumen_academico`, `doctor_seguros`, `doctor_logros`, `doctor_especialidades`, `buscador_especialidades`, `buscador_paises`, `buscador_seguros`, `buscador_doctor_nombre`, `buscador_clinicas`, `doctor_clinicas`, `doctor_numero_colegialo`) VALUES
(12, 34, 'antonyaraque', '549148.jpg', 'prueba ', '<p>prueba</p>', 'Seguros Pirámide,Seguros caracas', '<p>prueba</p>', '00006', 'internista ', 'Venezuela', 'Seguros Pirámide,Seguros caracas', 'antony araque', NULL, NULL, NULL),
(14, 40, 'julio-cesarcastellanos-everts', '', 'Prueba', '<p>graduado ucv etc etc etc</p>', 'Mapfre Panama', '<p>etc etc etc</p>', '00003,00005,00006,00007,00008,00009,00010', 'Odontologia,ginecología,internista ,otorrinolaringología,Oftalmología,cirugía,Pediatría', 'Panamá', 'Mapfre Panama', 'Julio Cesar Castellanos Everts', NULL, NULL, NULL),
(15, 41, 'florexyleon', '', 'Prueba', '<p style=\"margin-left: 20px;\">Prueba</p>', 'Mapfre Panama', '<p>Prueba</p>', '00003,00004,00005,00006,00007,00008,00009,00010', 'Odontologia,Cardiología,ginecología,internista ,otorrinolaringología,Oftalmología,cirugía,Pediatría', 'Venezuela', 'Mapfre Panama', 'Florexy Leon', NULL, NULL, NULL),
(16, 42, 'osmerabreu', '', 'asd', '<p>asd</p>', NULL, '<p>asd</p>', '00003', 'Odontologia', 'Panamá', NULL, 'osmer abreu', NULL, NULL, NULL),
(17, 47, 'erickperez', '819993.jpg', '', '', 'Seguros Pirámide', '', '00004', 'Cardiología', 'Venezuela', 'Seguros Pirámide', 'erick perez', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entidad`
--

CREATE TABLE `entidad` (
  `entidad_id` int(10) NOT NULL COMMENT 'Cod entidad',
  `entidad_codigo` varchar(45) NOT NULL COMMENT 'Codigo',
  `entidad_descripcion` varchar(45) NOT NULL COMMENT 'Descripcion',
  `entidad_visible` tinyint(4) DEFAULT NULL COMMENT 'Visible\n',
  `entidad_modificable` tinyint(4) DEFAULT NULL COMMENT 'Modificable\n',
  `entidad_eliminable` tinyint(4) DEFAULT NULL COMMENT 'Eliminable',
  `entidad_fecha_registro` datetime DEFAULT NULL COMMENT 'Fecha  registro'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `entidad`
--

INSERT INTO `entidad` (`entidad_id`, `entidad_codigo`, `entidad_descripcion`, `entidad_visible`, `entidad_modificable`, `entidad_eliminable`, `entidad_fecha_registro`) VALUES
(1, 'sexo', 'sexo', 1, 1, 1, NULL),
(2, 'estado_civil', 'estado_civil', 1, 1, 1, NULL),
(7, 'Familiares', 'familiares', 1, 1, 1, NULL),
(8, 'Presentacion de medicinas', 'Presentacion de medicinas', 1, 1, 1, NULL),
(9, 'Tiempo', 'Tiempo', 1, 1, 1, NULL),
(10, 'Intervalo', 'Intervalo', 1, 1, 1, NULL),
(11, 'miligramos', 'miligramos', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidades`
--

CREATE TABLE `especialidades` (
  `especialidad_id` int(10) NOT NULL COMMENT 'Cod especialidad',
  `especialidad_nombre` varchar(70) NOT NULL COMMENT 'nombre de especialidad',
  `especialidad_http` text COMMENT 'http',
  `especialidad_codigo` text COMMENT 'codigo',
  `especialidad_imagen` text NOT NULL,
  `especialidad_resumen` varchar(200) NOT NULL,
  `especialidad_estatus` int(11) NOT NULL COMMENT 'estatus'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `especialidades`
--

INSERT INTO `especialidades` (`especialidad_id`, `especialidad_nombre`, `especialidad_http`, `especialidad_codigo`, `especialidad_imagen`, `especialidad_resumen`, `especialidad_estatus`) VALUES
(3, 'Odontologia', 'odontologia', '00003', '262447.jpg', 'La odontología es una de las ciencias de la salud que se encarga del diagnóstico, tratamiento y prevención de las enfermedades del aparato estomatognático', 0),
(4, 'Cardiología', 'cardiologia', '00004', '952805.jpg', 'La cardiología es la rama de la medicina encargada del estudio, diagnóstico y tratamiento de las enfermedades del corazón y del aparato circulatorio, es médica pero no quirúrgica', 0),
(5, 'ginecología', 'ginecologia', '00005', '274629.jpg', 'que significa literalmente ciencia de la mujer y en medicina hace referencia a la especialidad médica y quirúrgica que trata las enfermedades del sistema reproductor femenino (útero, vagina y ovarios)', 0),
(6, 'internista ', 'internista-', '00006', '861180.jpg', 'La medicina interna es una especialidad médica que atiende integralmente los problemas de salud en pacientes adultos, ingresados en un centro hospitalario o en consultas ambulatorias', 0),
(7, 'otorrinolaringología', 'otorrinolaringologia', '00007', '759490.jpg', 'Parte de la medicina que se ocupa de la anatomía, la fisiología y las enfermedades del oído, la nariz y la garganta.', 0),
(8, 'Oftalmología', 'oftalmologia', '00008', '40597.jpg', 'La oftalmología ?? es la especialidad médica que estudia las enfermedades de ojo y su tratamiento, incluyendo el globo ocular, su musculatura, el sistema lagrimal y los párpados.', 0),
(9, 'cirugía', 'cirugia', '00009', '218743.jpg', 'Parte de la medicina que se ocupa de curar las enfermedades, malformaciones, traumatismos, etc., mediante operaciones manuales o instrumentales', 0),
(10, 'Pediatría', 'pediatria', '00010', '619511.jpg', 'La pediatría es la especialidad médica que estudia al niño y sus enfermedades. ', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `estado_id` int(11) NOT NULL COMMENT 'Cod estado',
  `estado_nombre` varchar(45) NOT NULL COMMENT 'Nombre',
  `pais_id` int(10) NOT NULL COMMENT 'País'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`estado_id`, `estado_nombre`, `pais_id`) VALUES
(1, 'Azerbaijan', 3),
(2, 'Nargorni Karabakh', 3),
(3, 'Nakhichevanskaya Region', 3),
(4, 'Anguilla', 4),
(5, 'Brestskaya obl.', 7),
(6, 'Vitebskaya obl.', 7),
(7, 'Gomelskaya obl.', 7),
(8, 'Grodnenskaya obl.', 7),
(9, 'Minskaya obl.', 7),
(10, 'Mogilevskaya obl.', 7),
(11, 'Belize', 8),
(12, 'Hamilton', 10),
(13, 'Dong Bang Song Cuu Long', 15),
(14, 'Dong Bang Song Hong', 15),
(15, 'Dong Nam Bo', 15),
(16, 'Duyen Hai Mien Trung', 15),
(17, 'Khu Bon Cu', 15),
(18, 'Mien Nui Va Trung Du', 15),
(19, 'Thai Nguyen', 15),
(20, 'Artibonite', 16),
(21, 'Grand&#039;Anse', 16),
(22, 'North West', 16),
(23, 'West', 16),
(24, 'South', 16),
(25, 'South East', 16),
(26, 'Grande-Terre', 17),
(27, 'Basse-Terre', 17),
(28, 'Abkhazia', 21),
(29, 'Ajaria', 21),
(30, 'Georgia', 21),
(31, 'South Ossetia', 21),
(32, 'Al QÄhira', 23),
(33, 'Aswan', 23),
(34, 'Asyut', 23),
(35, 'Beni Suef', 23),
(36, 'Gharbia', 23),
(37, 'Damietta', 23),
(38, 'Southern District', 24),
(39, 'Central District', 24),
(40, 'Northern District', 24),
(41, 'Haifa', 24),
(42, 'Tel Aviv', 24),
(43, 'Jerusalem', 24),
(44, 'Bangala', 25),
(45, 'Chhattisgarh', 25),
(46, 'Karnataka', 25),
(47, 'Uttaranchal', 25),
(48, 'Andhara Pradesh', 25),
(49, 'Assam', 25),
(50, 'Bihar', 25),
(51, 'Gujarat', 25),
(52, 'Jammu and Kashmir', 25),
(53, 'Kerala', 25),
(54, 'Madhya Pradesh', 25),
(55, 'Manipur', 25),
(56, 'Maharashtra', 25),
(57, 'Megahalaya', 25),
(58, 'Orissa', 25),
(59, 'Punjab', 25),
(60, 'Pondisheri', 25),
(61, 'Rajasthan', 25),
(62, 'Tamil Nadu', 25),
(63, 'Tripura', 25),
(64, 'Uttar Pradesh', 25),
(65, 'Haryana', 25),
(66, 'Chandigarh', 25),
(67, 'Azarbayjan-e Khavari', 26),
(68, 'Esfahan', 26),
(69, 'Hamadan', 26),
(70, 'Kordestan', 26),
(71, 'Markazi', 26),
(72, 'Sistan-e Baluches', 26),
(73, 'Yazd', 26),
(74, 'Kerman', 26),
(75, 'Kermanshakhan', 26),
(76, 'Mazenderan', 26),
(77, 'Tehran', 26),
(78, 'Fars', 26),
(79, 'Horasan', 26),
(80, 'Husistan', 26),
(81, 'Aktyubinskaya obl.', 30),
(82, 'Alma-Atinskaya obl.', 30),
(83, 'Vostochno-Kazahstanskaya obl.', 30),
(84, 'Gurevskaya obl.', 30),
(85, 'Zhambylskaya obl. (Dzhambulskaya obl.)', 30),
(86, 'Dzhezkazganskaya obl.', 30),
(87, 'Karagandinskaya obl.', 30),
(88, 'Kzyl-Ordinskaya obl.', 30),
(89, 'Kokchetavskaya obl.', 30),
(90, 'Kustanaiskaya obl.', 30),
(91, 'Mangystauskaya (Mangyshlakskaya obl.)', 30),
(92, 'Pavlodarskaya obl.', 30),
(93, 'Severo-Kazahstanskaya obl.', 30),
(94, 'Taldy-Kurganskaya obl.', 30),
(95, 'Turgaiskaya obl.', 30),
(96, 'Akmolinskaya obl. (Tselinogradskaya obl.)', 30),
(97, 'Chimkentskaya obl.', 30),
(98, 'Littoral', 31),
(99, 'Southwest Region', 31),
(100, 'North', 31),
(101, 'Central', 31),
(102, 'Government controlled area', 33),
(103, 'Turkish controlled area', 33),
(104, 'Issik Kulskaya Region', 34),
(105, 'Kyrgyzstan', 34),
(106, 'Narinskaya Region', 34),
(107, 'Oshskaya Region', 34),
(108, 'Tallaskaya Region', 34),
(109, 'al-Jahra', 37),
(110, 'al-Kuwait', 37),
(111, 'Latviya', 38),
(112, 'Tarabulus', 39),
(113, 'Bengasi', 39),
(114, 'Litva', 40),
(115, 'Moldova', 43),
(116, 'Auckland', 45),
(117, 'Bay of Plenty', 45),
(118, 'Canterbury', 45),
(119, 'Gisborne', 45),
(120, 'Hawke&#039;s Bay', 45),
(121, 'Manawatu-Wanganui', 45),
(122, 'Marlborough', 45),
(123, 'Nelson', 45),
(124, 'Northland', 45),
(125, 'Otago', 45),
(126, 'Southland', 45),
(127, 'Taranaki', 45),
(128, 'Tasman', 45),
(129, 'Waikato', 45),
(130, 'Wellington', 45),
(131, 'West Coast', 45),
(132, 'Saint-Denis', 49),
(133, 'Altaiskii krai', 50),
(134, 'Amurskaya obl.', 50),
(135, 'Arhangelskaya obl.', 50),
(136, 'Astrahanskaya obl.', 50),
(137, 'Bashkiriya obl.', 50),
(138, 'Belgorodskaya obl.', 50),
(139, 'Bryanskaya obl.', 50),
(140, 'Buryatiya', 50),
(141, 'Vladimirskaya obl.', 50),
(142, 'Volgogradskaya obl.', 50),
(143, 'Vologodskaya obl.', 50),
(144, 'Voronezhskaya obl.', 50),
(145, 'Nizhegorodskaya obl.', 50),
(146, 'Dagestan', 50),
(147, 'Evreiskaya obl.', 50),
(148, 'Ivanovskaya obl.', 50),
(149, 'Irkutskaya obl.', 50),
(150, 'Kabardino-Balkariya', 50),
(151, 'Kaliningradskaya obl.', 50),
(152, 'Tverskaya obl.', 50),
(153, 'Kalmykiya', 50),
(154, 'Kaluzhskaya obl.', 50),
(155, 'Kamchatskaya obl.', 50),
(156, 'Kareliya', 50),
(157, 'Kemerovskaya obl.', 50),
(158, 'Kirovskaya obl.', 50),
(159, 'Komi', 50),
(160, 'Kostromskaya obl.', 50),
(161, 'Krasnodarskii krai', 50),
(162, 'Krasnoyarskii krai', 50),
(163, 'Kurganskaya obl.', 50),
(164, 'Kurskaya obl.', 50),
(165, 'Lipetskaya obl.', 50),
(166, 'Magadanskaya obl.', 50),
(167, 'Marii El', 50),
(168, 'Mordoviya', 50),
(169, 'Moscow &amp; Moscow Region', 50),
(170, 'Murmanskaya obl.', 50),
(171, 'Novgorodskaya obl.', 50),
(172, 'Novosibirskaya obl.', 50),
(173, 'Omskaya obl.', 50),
(174, 'Orenburgskaya obl.', 50),
(175, 'Orlovskaya obl.', 50),
(176, 'Penzenskaya obl.', 50),
(177, 'Permskiy krai', 50),
(178, 'Primorskii krai', 50),
(179, 'Pskovskaya obl.', 50),
(180, 'Rostovskaya obl.', 50),
(181, 'Ryazanskaya obl.', 50),
(182, 'Samarskaya obl.', 50),
(183, 'Saint-Petersburg and Region', 50),
(184, 'Saratovskaya obl.', 50),
(185, 'Saha (Yakutiya)', 50),
(186, 'Sahalin', 50),
(187, 'Sverdlovskaya obl.', 50),
(188, 'Severnaya Osetiya', 50),
(189, 'Smolenskaya obl.', 50),
(190, 'Stavropolskii krai', 50),
(191, 'Tambovskaya obl.', 50),
(192, 'Tatarstan', 50),
(193, 'Tomskaya obl.', 50),
(195, 'Tulskaya obl.', 50),
(196, 'Tyumenskaya obl. i Hanty-Mansiiskii AO', 50),
(197, 'Udmurtiya', 50),
(198, 'Ulyanovskaya obl.', 50),
(199, 'Uralskaya obl.', 50),
(200, 'Habarovskii krai', 50),
(201, 'Chelyabinskaya obl.', 50),
(202, 'Checheno-Ingushetiya', 50),
(203, 'Chitinskaya obl.', 50),
(204, 'Chuvashiya', 50),
(205, 'Yaroslavskaya obl.', 50),
(206, 'Ahuachapán', 51),
(207, 'Cuscatlán', 51),
(208, 'La Libertad', 51),
(209, 'La Paz', 51),
(210, 'La Unión', 51),
(211, 'San Miguel', 51),
(212, 'San Salvador', 51),
(213, 'Santa Ana', 51),
(214, 'Sonsonate', 51),
(215, 'Paramaribo', 54),
(216, 'Gorno-Badakhshan Region', 56),
(217, 'Kuljabsk Region', 56),
(218, 'Kurgan-Tjube Region', 56),
(219, 'Sughd Region', 56),
(220, 'Tajikistan', 56),
(221, 'Ashgabat Region', 57),
(222, 'Krasnovodsk Region', 57),
(223, 'Mary Region', 57),
(224, 'Tashauz Region', 57),
(225, 'Chardzhou Region', 57),
(226, 'Grand Turk', 58),
(227, 'Bartin', 59),
(228, 'Bayburt', 59),
(229, 'Karabuk', 59),
(230, 'Adana', 59),
(231, 'Aydin', 59),
(232, 'Amasya', 59),
(233, 'Ankara', 59),
(234, 'Antalya', 59),
(235, 'Artvin', 59),
(236, 'Afion', 59),
(237, 'Balikesir', 59),
(238, 'Bilecik', 59),
(239, 'Bursa', 59),
(240, 'Gaziantep', 59),
(241, 'Denizli', 59),
(242, 'Izmir', 59),
(243, 'Isparta', 59),
(244, 'Icel', 59),
(245, 'Kayseri', 59),
(246, 'Kars', 59),
(247, 'Kodjaeli', 59),
(248, 'Konya', 59),
(249, 'Kirklareli', 59),
(250, 'Kutahya', 59),
(251, 'Malatya', 59),
(252, 'Manisa', 59),
(253, 'Sakarya', 59),
(254, 'Samsun', 59),
(255, 'Sivas', 59),
(256, 'Istanbul', 59),
(257, 'Trabzon', 59),
(258, 'Corum', 59),
(259, 'Edirne', 59),
(260, 'Elazig', 59),
(261, 'Erzincan', 59),
(262, 'Erzurum', 59),
(263, 'Eskisehir', 59),
(264, 'Jinja', 60),
(265, 'Kampala', 60),
(266, 'Andijon Region', 61),
(267, 'Buxoro Region', 61),
(268, 'Jizzac Region', 61),
(269, 'Qaraqalpaqstan', 61),
(270, 'Qashqadaryo Region', 61),
(271, 'Navoiy Region', 61),
(272, 'Namangan Region', 61),
(273, 'Samarqand Region', 61),
(274, 'Surxondaryo Region', 61),
(275, 'Sirdaryo Region', 61),
(276, 'Tashkent Region', 61),
(277, 'Fergana Region', 61),
(278, 'Xorazm Region', 61),
(279, 'Vinnitskaya obl.', 62),
(280, 'Volynskaya obl.', 62),
(281, 'Dnepropetrovskaya obl.', 62),
(282, 'Donetskaya obl.', 62),
(283, 'Zhitomirskaya obl.', 62),
(284, 'Zakarpatskaya obl.', 62),
(285, 'Zaporozhskaya obl.', 62),
(286, 'Ivano-Frankovskaya obl.', 62),
(287, 'Kievskaya obl.', 62),
(288, 'Kirovogradskaya obl.', 62),
(289, 'Krymskaya obl.', 62),
(290, 'Luganskaya obl.', 62),
(291, 'Lvovskaya obl.', 62),
(292, 'Nikolaevskaya obl.', 62),
(293, 'Odesskaya obl.', 62),
(294, 'Poltavskaya obl.', 62),
(295, 'Rovenskaya obl.', 62),
(296, 'Sumskaya obl.', 62),
(297, 'Ternopolskaya obl.', 62),
(298, 'Harkovskaya obl.', 62),
(299, 'Hersonskaya obl.', 62),
(300, 'Hmelnitskaya obl.', 62),
(301, 'Cherkasskaya obl.', 62),
(302, 'Chernigovskaya obl.', 62),
(303, 'Chernovitskaya obl.', 62),
(304, 'Estoniya', 68),
(305, 'Cheju', 69),
(306, 'Chollabuk', 69),
(307, 'Chollanam', 69),
(308, 'Chungcheongbuk', 69),
(309, 'Chungcheongnam', 69),
(310, 'Incheon', 69),
(311, 'Kangweon', 69),
(312, 'Kwangju', 69),
(313, 'Kyeonggi', 69),
(314, 'Kyeongsangbuk', 69),
(315, 'Kyeongsangnam', 69),
(316, 'Pusan', 69),
(317, 'Seoul', 69),
(318, 'Taegu', 69),
(319, 'Taejeon', 69),
(320, 'Ulsan', 69),
(321, 'Aichi', 70),
(322, 'Akita', 70),
(323, 'Aomori', 70),
(324, 'Wakayama', 70),
(325, 'Gifu', 70),
(326, 'Gunma', 70),
(327, 'Ibaraki', 70),
(328, 'Iwate', 70),
(329, 'Ishikawa', 70),
(330, 'Kagawa', 70),
(331, 'Kagoshima', 70),
(332, 'Kanagawa', 70),
(333, 'Kyoto', 70),
(334, 'Kochi', 70),
(335, 'Kumamoto', 70),
(336, 'Mie', 70),
(337, 'Miyagi', 70),
(338, 'Miyazaki', 70),
(339, 'Nagano', 70),
(340, 'Nagasaki', 70),
(341, 'Nara', 70),
(342, 'Niigata', 70),
(343, 'Okayama', 70),
(344, 'Okinawa', 70),
(345, 'Osaka', 70),
(346, 'Saga', 70),
(347, 'Saitama', 70),
(348, 'Shiga', 70),
(349, 'Shizuoka', 70),
(350, 'Shimane', 70),
(351, 'Tiba', 70),
(352, 'Tokyo', 70),
(353, 'Tokushima', 70),
(354, 'Tochigi', 70),
(355, 'Tottori', 70),
(356, 'Toyama', 70),
(357, 'Fukui', 70),
(358, 'Fukuoka', 70),
(359, 'Fukushima', 70),
(360, 'Hiroshima', 70),
(361, 'Hokkaido', 70),
(362, 'Hyogo', 70),
(363, 'Yoshimi', 70),
(364, 'Yamagata', 70),
(365, 'Yamaguchi', 70),
(366, 'Yamanashi', 70),
(368, 'Hong Kong', 73),
(369, 'Indonesia', 74),
(370, 'Jordan', 75),
(371, 'Malaysia', 76),
(372, 'Singapore', 77),
(373, 'Taiwan', 78),
(374, 'Kazahstan', 30),
(375, 'Ukraina', 62),
(376, 'India', 25),
(377, 'Egypt', 23),
(378, 'Damascus', 106),
(379, 'Isle of Man', 131),
(380, 'Zapadno-Kazahstanskaya obl.', 30),
(381, 'Adygeya', 50),
(382, 'Hakasiya', 50),
(383, 'Dubai', 93),
(384, 'Chukotskii AO', 50),
(385, 'Beirut', 99),
(386, 'Tegucigalpa', 137),
(387, 'Santo Domingo', 138),
(388, 'Ulan Bator', 139),
(389, 'Sinai', 23),
(390, 'Baghdad', 140),
(391, 'Basra', 140),
(392, 'Mosul', 140),
(393, 'Johannesburg', 141),
(394, 'Morocco', 104),
(395, 'Tangier', 104),
(396, 'Yamalo-Nenetskii AO', 50),
(397, 'Tunisia', 122),
(398, 'Thailand', 92),
(399, 'Mozambique', 117),
(400, 'Korea', 84),
(401, 'Pakistan', 87),
(402, 'Aruba', 142),
(403, 'Bahamas', 80),
(404, 'South Korea', 69),
(405, 'Jamaica', 132),
(406, 'Sharjah', 93),
(407, 'Abu Dhabi', 93),
(409, 'Ramat Hagolan', 24),
(410, 'Nigeria', 115),
(411, 'Ain', 64),
(412, 'Haute-Savoie', 64),
(413, 'Aisne', 64),
(414, 'Allier', 64),
(415, 'Alpes-de-Haute-Provence', 64),
(416, 'Hautes-Alpes', 64),
(417, 'Alpes-Maritimes', 64),
(418, 'Ard&egrave;che', 64),
(419, 'Ardennes', 64),
(420, 'Ari&egrave;ge', 64),
(421, 'Aube', 64),
(422, 'Aude', 64),
(423, 'Aveyron', 64),
(424, 'Bouches-du-Rh&ocirc;ne', 64),
(425, 'Calvados', 64),
(426, 'Cantal', 64),
(427, 'Charente', 64),
(428, 'Charente Maritime', 64),
(429, 'Cher', 64),
(430, 'Corr&egrave;ze', 64),
(431, 'Dordogne', 64),
(432, 'Corse', 64),
(433, 'C&ocirc;te d&#039;Or', 64),
(434, 'Sa&ocirc;ne et Loire', 64),
(435, 'C&ocirc;tes d&#039;Armor', 64),
(436, 'Creuse', 64),
(437, 'Doubs', 64),
(438, 'Dr&ocirc;me', 64),
(439, 'Eure', 64),
(440, 'Eure-et-Loire', 64),
(441, 'Finist&egrave;re', 64),
(442, 'Gard', 64),
(443, 'Haute-Garonne', 64),
(444, 'Gers', 64),
(445, 'Gironde', 64),
(446, 'Hérault', 64),
(447, 'Ille et Vilaine', 64),
(448, 'Indre', 64),
(449, 'Indre-et-Loire', 64),
(450, 'Isère', 64),
(451, 'Jura', 64),
(452, 'Landes', 64),
(453, 'Loir-et-Cher', 64),
(454, 'Loire', 64),
(455, 'Rh&ocirc;ne', 64),
(456, 'Haute-Loire', 64),
(457, 'Loire Atlantique', 64),
(458, 'Loiret', 64),
(459, 'Lot', 64),
(460, 'Lot-et-Garonne', 64),
(461, 'Loz&egrave;re', 64),
(462, 'Maine et Loire', 64),
(463, 'Manche', 64),
(464, 'Marne', 64),
(465, 'Haute-Marne', 64),
(466, 'Mayenne', 64),
(467, 'Meurthe-et-Moselle', 64),
(468, 'Meuse', 64),
(469, 'Morbihan', 64),
(470, 'Moselle', 64),
(471, 'Ni&egrave;vre', 64),
(472, 'Nord', 64),
(473, 'Oise', 64),
(474, 'Orne', 64),
(475, 'Pas-de-Calais', 64),
(476, 'Puy-de-D&ocirc;me', 64),
(477, 'Pyrénées-Atlantiques', 64),
(478, 'Hautes-Pyrénées', 64),
(479, 'Pyrénées-Orientales', 64),
(480, 'Bas Rhin', 64),
(481, 'Haut Rhin', 64),
(482, 'Haute-Sa&ocirc;ne', 64),
(483, 'Sarthe', 64),
(484, 'Savoie', 64),
(485, 'Paris', 64),
(486, 'Seine-Maritime', 64),
(487, 'Seine-et-Marne', 64),
(488, 'Yvelines', 64),
(489, 'Deux-S&egrave;vres', 64),
(490, 'Somme', 64),
(491, 'Tarn', 64),
(492, 'Tarn-et-Garonne', 64),
(493, 'Var', 64),
(494, 'Vaucluse', 64),
(495, 'Vendée', 64),
(496, 'Vienne', 64),
(497, 'Haute-Vienne', 64),
(498, 'Vosges', 64),
(499, 'Yonne', 64),
(500, 'Territoire de Belfort', 64),
(501, 'Essonne', 64),
(502, 'Hauts-de-Seine', 64),
(503, 'Seine-Saint-Denis', 64),
(504, 'Val-de-Marne', 64),
(505, 'Val-d&#039;Oise', 64),
(506, 'Piemonte - Torino', 29),
(507, 'Piemonte - Alessandria', 29),
(508, 'Piemonte - Asti', 29),
(509, 'Piemonte - Biella', 29),
(510, 'Piemonte - Cuneo', 29),
(511, 'Piemonte - Novara', 29),
(512, 'Piemonte - Verbania', 29),
(513, 'Piemonte - Vercelli', 29),
(514, 'Valle d&#039;Aosta - Aosta', 29),
(515, 'Lombardia - Milano', 29),
(516, 'Lombardia - Bergamo', 29),
(517, 'Lombardia - Brescia', 29),
(518, 'Lombardia - Como', 29),
(519, 'Lombardia - Cremona', 29),
(520, 'Lombardia - Lecco', 29),
(521, 'Lombardia - Lodi', 29),
(522, 'Lombardia - Mantova', 29),
(523, 'Lombardia - Pavia', 29),
(524, 'Lombardia - Sondrio', 29),
(525, 'Lombardia - Varese', 29),
(526, 'Trentino Alto Adige - Trento', 29),
(527, 'Trentino Alto Adige - Bolzano', 29),
(528, 'Veneto - Venezia', 29),
(529, 'Veneto - Belluno', 29),
(530, 'Veneto - Padova', 29),
(531, 'Veneto - Rovigo', 29),
(532, 'Veneto - Treviso', 29),
(533, 'Veneto - Verona', 29),
(534, 'Veneto - Vicenza', 29),
(535, 'Friuli Venezia Giulia - Trieste', 29),
(536, 'Friuli Venezia Giulia - Gorizia', 29),
(537, 'Friuli Venezia Giulia - Pordenone', 29),
(538, 'Friuli Venezia Giulia - Udine', 29),
(539, 'Liguria - Genova', 29),
(540, 'Liguria - Imperia', 29),
(541, 'Liguria - La Spezia', 29),
(542, 'Liguria - Savona', 29),
(543, 'Emilia Romagna - Bologna', 29),
(544, 'Emilia Romagna - Ferrara', 29),
(545, 'Emilia Romagna - Forlì-Cesena', 29),
(546, 'Emilia Romagna - Modena', 29),
(547, 'Emilia Romagna - Parma', 29),
(548, 'Emilia Romagna - Piacenza', 29),
(549, 'Emilia Romagna - Ravenna', 29),
(550, 'Emilia Romagna - Reggio Emilia', 29),
(551, 'Emilia Romagna - Rimini', 29),
(552, 'Toscana - Firenze', 29),
(553, 'Toscana - Arezzo', 29),
(554, 'Toscana - Grosseto', 29),
(555, 'Toscana - Livorno', 29),
(556, 'Toscana - Lucca', 29),
(557, 'Toscana - Massa Carrara', 29),
(558, 'Toscana - Pisa', 29),
(559, 'Toscana - Pistoia', 29),
(560, 'Toscana - Prato', 29),
(561, 'Toscana - Siena', 29),
(562, 'Umbria - Perugia', 29),
(563, 'Umbria - Terni', 29),
(564, 'Marche - Ancona', 29),
(565, 'Marche - Ascoli Piceno', 29),
(566, 'Marche - Macerata', 29),
(567, 'Marche - Pesaro - Urbino', 29),
(568, 'Lazio - Roma', 29),
(569, 'Lazio - Frosinone', 29),
(570, 'Lazio - Latina', 29),
(571, 'Lazio - Rieti', 29),
(572, 'Lazio - Viterbo', 29),
(573, 'Abruzzo - L´Aquila', 29),
(574, 'Abruzzo - Chieti', 29),
(575, 'Abruzzo - Pescara', 29),
(576, 'Abruzzo - Teramo', 29),
(577, 'Molise - Campobasso', 29),
(578, 'Molise - Isernia', 29),
(579, 'Campania - Napoli', 29),
(580, 'Campania - Avellino', 29),
(581, 'Campania - Benevento', 29),
(582, 'Campania - Caserta', 29),
(583, 'Campania - Salerno', 29),
(584, 'Puglia - Bari', 29),
(585, 'Puglia - Brindisi', 29),
(586, 'Puglia - Foggia', 29),
(587, 'Puglia - Lecce', 29),
(588, 'Puglia - Taranto', 29),
(589, 'Basilicata - Potenza', 29),
(590, 'Basilicata - Matera', 29),
(591, 'Calabria - Catanzaro', 29),
(592, 'Calabria - Cosenza', 29),
(593, 'Calabria - Crotone', 29),
(594, 'Calabria - Reggio Calabria', 29),
(595, 'Calabria - Vibo Valentia', 29),
(596, 'Sicilia - Palermo', 29),
(597, 'Sicilia - Agrigento', 29),
(598, 'Sicilia - Caltanissetta', 29),
(599, 'Sicilia - Catania', 29),
(600, 'Sicilia - Enna', 29),
(601, 'Sicilia - Messina', 29),
(602, 'Sicilia - Ragusa', 29),
(603, 'Sicilia - Siracusa', 29),
(604, 'Sicilia - Trapani', 29),
(605, 'Sardegna - Cagliari', 29),
(606, 'Sardegna - Nuoro', 29),
(607, 'Sardegna - Oristano', 29),
(608, 'Sardegna - Sassari', 29),
(609, 'Las Palmas', 28),
(610, 'Soria', 28),
(611, 'Palencia', 28),
(612, 'Zamora', 28),
(613, 'Cádiz', 28),
(614, 'Navarra', 28),
(615, 'Ourense', 28),
(616, 'Segovia', 28),
(617, 'Guip&uacute;zcoa', 28),
(618, 'Ciudad Real', 28),
(619, 'Vizcaya', 28),
(620, 'álava', 28),
(621, 'A Coruña', 28),
(622, 'Cantabria', 28),
(623, 'Almería', 28),
(624, 'Zaragoza', 28),
(625, 'Santa Cruz de Tenerife', 28),
(626, 'Cáceres', 28),
(627, 'Guadalajara', 28),
(628, 'ávila', 28),
(629, 'Toledo', 28),
(630, 'Castellón', 28),
(631, 'Tarragona', 28),
(632, 'Lugo', 28),
(633, 'La Rioja', 28),
(634, 'Ceuta', 28),
(635, 'Murcia', 28),
(636, 'Salamanca', 28),
(637, 'Valladolid', 28),
(638, 'Jaén', 28),
(639, 'Girona', 28),
(640, 'Granada', 28),
(641, 'Alacant', 28),
(642, 'Córdoba', 28),
(643, 'Albacete', 28),
(644, 'Cuenca', 28),
(645, 'Pontevedra', 28),
(646, 'Teruel', 28),
(647, 'Melilla', 28),
(648, 'Barcelona', 28),
(649, 'Badajoz', 28),
(650, 'Madrid', 28),
(651, 'Sevilla', 28),
(652, 'Val&egrave;ncia', 28),
(653, 'Huelva', 28),
(654, 'Lleida', 28),
(655, 'León', 28),
(656, 'Illes Balears', 28),
(657, 'Burgos', 28),
(658, 'Huesca', 28),
(659, 'Asturias', 28),
(660, 'Málaga', 28),
(661, 'Afghanistan', 144),
(662, 'Niger', 210),
(663, 'Mali', 133),
(664, 'Burkina Faso', 156),
(665, 'Togo', 136),
(666, 'Benin', 151),
(667, 'Angola', 119),
(668, 'Namibia', 102),
(669, 'Botswana', 100),
(670, 'Madagascar', 134),
(671, 'Mauritius', 202),
(672, 'Laos', 196),
(673, 'Cambodia', 158),
(674, 'Philippines', 90),
(675, 'Papua New Guinea', 88),
(676, 'Solomon Islands', 228),
(677, 'Vanuatu', 240),
(678, 'Fiji', 176),
(679, 'Samoa', 223),
(681, 'Cote D&#039;Ivoire', 168),
(682, 'Liberia', 198),
(683, 'Guinea', 187),
(684, 'Guyana', 189),
(685, 'Algeria', 98),
(686, 'Antigua and Barbuda', 147),
(687, 'Bahrain', 127),
(688, 'Bangladesh', 149),
(689, 'Barbados', 128),
(690, 'Bhutan', 152),
(691, 'Brunei', 155),
(692, 'Burundi', 157),
(693, 'Cape Verde', 159),
(694, 'Chad', 130),
(695, 'Comoros', 164),
(696, 'Congo (Brazzaville)', 112),
(697, 'Djibouti', 169),
(698, 'East Timor', 171),
(699, 'Eritrea', 173),
(700, 'Ethiopia', 121),
(701, 'Gabon', 180),
(702, 'Gambia', 181),
(703, 'Ghana', 105),
(704, 'Lesotho', 197),
(705, 'Malawi', 125),
(706, 'Maldives', 200),
(707, 'Myanmar (Burma)', 205),
(708, 'Nepal', 107),
(709, 'Oman', 213),
(710, 'Rwanda', 217),
(711, 'Saudi Arabia', 91),
(712, 'Sri Lanka', 120),
(713, 'Sudan', 232),
(714, 'Swaziland', 234),
(715, 'Tanzania', 101),
(716, 'Tonga', 236),
(717, 'Tuvalu', 239),
(718, 'Western Sahara', 242),
(719, 'Yemen', 243),
(720, 'Zambia', 116),
(721, 'Zimbabwe', 96),
(722, 'Aargau', 66),
(723, 'Appenzell Innerrhoden', 66),
(724, 'Appenzell Ausserrhoden', 66),
(725, 'Bern', 66),
(726, 'Basel-Landschaft', 66),
(727, 'Basel-Stadt', 66),
(728, 'Fribourg', 66),
(729, 'Gen&egrave;ve', 66),
(730, 'Glarus', 66),
(731, 'Graubünden', 66),
(732, 'Jura', 66),
(733, 'Luzern', 66),
(734, 'Neuch&acirc;tel', 66),
(735, 'Nidwalden', 66),
(736, 'Obwalden', 66),
(737, 'Sankt Gallen', 66),
(738, 'Schaffhausen', 66),
(739, 'Solothurn', 66),
(740, 'Schwyz', 66),
(741, 'Thurgau', 66),
(742, 'Ticino', 66),
(743, 'Uri', 66),
(744, 'Vaud', 66),
(745, 'Valais', 66),
(746, 'Zug', 66),
(747, 'Zürich', 66),
(749, 'Aveiro', 48),
(750, 'Beja', 48),
(751, 'Braga', 48),
(752, 'Braganca', 48),
(753, 'Castelo Branco', 48),
(754, 'Coimbra', 48),
(755, 'Evora', 48),
(756, 'Faro', 48),
(757, 'Madeira', 48),
(758, 'Guarda', 48),
(759, 'Leiria', 48),
(760, 'Lisboa', 48),
(761, 'Portalegre', 48),
(762, 'Porto', 48),
(763, 'Santarem', 48),
(764, 'Setubal', 48),
(765, 'Viana do Castelo', 48),
(766, 'Vila Real', 48),
(767, 'Viseu', 48),
(768, 'Azores', 48),
(769, 'Armed Forces Americas', 55),
(770, 'Armed Forces Europe', 55),
(771, 'Alaska', 55),
(772, 'Alabama', 55),
(773, 'Armed Forces Pacific', 55),
(774, 'Arkansas', 55),
(775, 'American Samoa', 55),
(776, 'Arizona', 55),
(777, 'California', 55),
(778, 'Colorado', 55),
(779, 'Connecticut', 55),
(780, 'District of Columbia', 55),
(781, 'Delaware', 55),
(782, 'Florida', 55),
(783, 'Federated States of Micronesia', 55),
(784, 'Georgia', 55),
(786, 'Hawaii', 55),
(787, 'Iowa', 55),
(788, 'Idaho', 55),
(789, 'Illinois', 55),
(790, 'Indiana', 55),
(791, 'Kansas', 55),
(792, 'Kentucky', 55),
(793, 'Louisiana', 55),
(794, 'Massachusetts', 55),
(795, 'Maryland', 55),
(796, 'Maine', 55),
(797, 'Marshall Islands', 55),
(798, 'Michigan', 55),
(799, 'Minnesota', 55),
(800, 'Missouri', 55),
(801, 'Northern Mariana Islands', 55),
(802, 'Mississippi', 55),
(803, 'Montana', 55),
(804, 'North Carolina', 55),
(805, 'North Dakota', 55),
(806, 'Nebraska', 55),
(807, 'New Hampshire', 55),
(808, 'New Jersey', 55),
(809, 'New Mexico', 55),
(810, 'Nevada', 55),
(811, 'New York', 55),
(812, 'Ohio', 55),
(813, 'Oklahoma', 55),
(814, 'Oregon', 55),
(815, 'Pennsylvania', 55),
(816, 'Puerto Rico', 246),
(817, 'Palau', 55),
(818, 'Rhode Island', 55),
(819, 'South Carolina', 55),
(820, 'South Dakota', 55),
(821, 'Tennessee', 55),
(822, 'Texas', 55),
(823, 'Utah', 55),
(824, 'Virginia', 55),
(825, 'Virgin Islands', 55),
(826, 'Vermont', 55),
(827, 'Washington', 55),
(828, 'West Virginia', 55),
(829, 'Wisconsin', 55),
(830, 'Wyoming', 55),
(831, 'Greenland', 94),
(832, 'Brandenburg', 18),
(833, 'Baden-Württemberg', 18),
(834, 'Bayern', 18),
(835, 'Hessen', 18),
(836, 'Hamburg', 18),
(837, 'Mecklenburg-Vorpommern', 18),
(838, 'Niedersachsen', 18),
(839, 'Nordrhein-Westfalen', 18),
(840, 'Rheinland-Pfalz', 18),
(841, 'Schleswig-Holstein', 18),
(842, 'Sachsen', 18),
(843, 'Sachsen-Anhalt', 18),
(844, 'Thüringen', 18),
(845, 'Berlin', 18),
(846, 'Bremen', 18),
(847, 'Saarland', 18),
(848, 'Scotland North', 13),
(849, 'England - East', 13),
(850, 'England - West Midlands', 13),
(851, 'England - South West', 13),
(852, 'England - North West', 13),
(853, 'England - Yorks &amp; Humber', 13),
(854, 'England - South East', 13),
(855, 'England - London', 13),
(856, 'Northern Ireland', 13),
(857, 'England - North East', 13),
(858, 'Wales South', 13),
(859, 'Wales North', 13),
(860, 'England - East Midlands', 13),
(861, 'Scotland Central', 13),
(862, 'Scotland South', 13),
(863, 'Channel Islands', 13),
(864, 'Isle of Man', 13),
(865, 'Burgenland', 2),
(866, 'Kärnten', 2),
(867, 'Niederösterreich', 2),
(868, 'Oberösterreich', 2),
(869, 'Salzburg', 2),
(870, 'Steiermark', 2),
(871, 'Tirol', 2),
(872, 'Vorarlberg', 2),
(873, 'Wien', 2),
(874, 'Bruxelles', 9),
(875, 'West-Vlaanderen', 9),
(876, 'Oost-Vlaanderen', 9),
(877, 'Limburg', 9),
(878, 'Vlaams Brabant', 9),
(879, 'Antwerpen', 9),
(880, 'LiÄge', 9),
(881, 'Namur', 9),
(882, 'Hainaut', 9),
(883, 'Luxembourg', 9),
(884, 'Brabant Wallon', 9),
(887, 'Blekinge Lan', 67),
(888, 'Gavleborgs Lan', 67),
(890, 'Gotlands Lan', 67),
(891, 'Hallands Lan', 67),
(892, 'Jamtlands Lan', 67),
(893, 'Jonkopings Lan', 67),
(894, 'Kalmar Lan', 67),
(895, 'Dalarnas Lan', 67),
(897, 'Kronobergs Lan', 67),
(899, 'Norrbottens Lan', 67),
(900, 'Orebro Lan', 67),
(901, 'Ostergotlands Lan', 67),
(903, 'Sodermanlands Lan', 67),
(904, 'Uppsala Lan', 67),
(905, 'Varmlands Lan', 67),
(906, 'Vasterbottens Lan', 67),
(907, 'Vasternorrlands Lan', 67),
(908, 'Vastmanlands Lan', 67),
(909, 'Stockholms Lan', 67),
(910, 'Skane Lan', 67),
(911, 'Vastra Gotaland', 67),
(913, 'Akershus', 46),
(914, 'Aust-Agder', 46),
(915, 'Buskerud', 46),
(916, 'Finnmark', 46),
(917, 'Hedmark', 46),
(918, 'Hordaland', 46),
(919, 'More og Romsdal', 46),
(920, 'Nordland', 46),
(921, 'Nord-Trondelag', 46),
(922, 'Oppland', 46),
(923, 'Oslo', 46),
(924, 'Ostfold', 46),
(925, 'Rogaland', 46),
(926, 'Sogn og Fjordane', 46),
(927, 'Sor-Trondelag', 46),
(928, 'Telemark', 46),
(929, 'Troms', 46),
(930, 'Vest-Agder', 46),
(931, 'Vestfold', 46),
(933, '&ETH;&bull;land', 63),
(934, 'Lapland', 63),
(935, 'Oulu', 63),
(936, 'Southern Finland', 63),
(937, 'Eastern Finland', 63),
(938, 'Western Finland', 63),
(940, 'Arhus', 22),
(941, 'Bornholm', 22),
(942, 'Frederiksborg', 22),
(943, 'Fyn', 22),
(944, 'Kobenhavn', 22),
(945, 'Staden Kobenhavn', 22),
(946, 'Nordjylland', 22),
(947, 'Ribe', 22),
(948, 'Ringkobing', 22),
(949, 'Roskilde', 22),
(950, 'Sonderjylland', 22),
(951, 'Storstrom', 22),
(952, 'Vejle', 22),
(953, 'Vestsjalland', 22),
(954, 'Viborg', 22),
(956, 'Hlavni Mesto Praha', 65),
(957, 'Jihomoravsky Kraj', 65),
(958, 'Jihocesky Kraj', 65),
(959, 'Vysocina', 65),
(960, 'Karlovarsky Kraj', 65),
(961, 'Kralovehradecky Kraj', 65),
(962, 'Liberecky Kraj', 65),
(963, 'Olomoucky Kraj', 65),
(964, 'Moravskoslezsky Kraj', 65),
(965, 'Pardubicky Kraj', 65),
(966, 'Plzensky Kraj', 65),
(967, 'Stredocesky Kraj', 65),
(968, 'Ustecky Kraj', 65),
(969, 'Zlinsky Kraj', 65),
(971, 'Berat', 114),
(972, 'Diber', 114),
(973, 'Durres', 114),
(974, 'Elbasan', 114),
(975, 'Fier', 114),
(976, 'Gjirokaster', 114),
(977, 'Korce', 114),
(978, 'Kukes', 114),
(979, 'Lezhe', 114),
(980, 'Shkoder', 114),
(981, 'Tirane', 114),
(982, 'Vlore', 114),
(984, 'Canillo', 145),
(985, 'Encamp', 145),
(986, 'La Massana', 145),
(987, 'Ordino', 145),
(988, 'Sant Julia de Loria', 145),
(989, 'Andorra la Vella', 145),
(990, 'Escaldes-Engordany', 145),
(992, 'Aragatsotn', 6),
(993, 'Ararat', 6),
(994, 'Armavir', 6),
(995, 'Geghark&#039;unik&#039;', 6),
(996, 'Kotayk&#039;', 6),
(997, 'Lorri', 6),
(998, 'Shirak', 6),
(999, 'Syunik&#039;', 6),
(1000, 'Tavush', 6),
(1001, 'Vayots&#039; Dzor', 6),
(1002, 'Yerevan', 6),
(1004, 'Federation of Bosnia and Herzegovina', 79),
(1005, 'Republika Srpska', 79),
(1007, 'Mikhaylovgrad', 11),
(1008, 'Blagoevgrad', 11),
(1009, 'Burgas', 11),
(1010, 'Dobrich', 11),
(1011, 'Gabrovo', 11),
(1012, 'Grad Sofiya', 11),
(1013, 'Khaskovo', 11),
(1014, 'Kurdzhali', 11),
(1015, 'Kyustendil', 11),
(1016, 'Lovech', 11),
(1017, 'Montana', 11),
(1018, 'Pazardzhik', 11),
(1019, 'Pernik', 11),
(1020, 'Pleven', 11),
(1021, 'Plovdiv', 11),
(1022, 'Razgrad', 11),
(1023, 'Ruse', 11),
(1024, 'Shumen', 11),
(1025, 'Silistra', 11),
(1026, 'Sliven', 11),
(1027, 'Smolyan', 11),
(1028, 'Sofiya', 11),
(1029, 'Stara Zagora', 11),
(1030, 'Turgovishte', 11),
(1031, 'Varna', 11),
(1032, 'Veliko Turnovo', 11),
(1033, 'Vidin', 11),
(1034, 'Vratsa', 11),
(1035, 'Yambol', 11),
(1037, 'Bjelovarsko-Bilogorska', 71),
(1038, 'Brodsko-Posavska', 71),
(1039, 'Dubrovacko-Neretvanska', 71),
(1040, 'Istarska', 71),
(1041, 'Karlovacka', 71),
(1042, 'Koprivnicko-Krizevacka', 71),
(1043, 'Krapinsko-Zagorska', 71),
(1044, 'Licko-Senjska', 71),
(1045, 'Medimurska', 71),
(1046, 'Osjecko-Baranjska', 71),
(1047, 'Pozesko-Slavonska', 71),
(1048, 'Primorsko-Goranska', 71),
(1049, 'Sibensko-Kninska', 71),
(1050, 'Sisacko-Moslavacka', 71),
(1051, 'Splitsko-Dalmatinska', 71),
(1052, 'Varazdinska', 71),
(1053, 'Viroviticko-Podravska', 71),
(1054, 'Vukovarsko-Srijemska', 71),
(1055, 'Zadarska', 71),
(1056, 'Zagrebacka', 71),
(1057, 'Grad Zagreb', 71),
(1059, 'Gibraltar', 143),
(1060, 'Evros', 20),
(1061, 'Rodhopi', 20),
(1062, 'Xanthi', 20),
(1063, 'Drama', 20),
(1064, 'Serrai', 20),
(1065, 'Kilkis', 20),
(1066, 'Pella', 20),
(1067, 'Florina', 20),
(1068, 'Kastoria', 20),
(1069, 'Grevena', 20),
(1070, 'Kozani', 20),
(1071, 'Imathia', 20),
(1072, 'Thessaloniki', 20),
(1073, 'Kavala', 20),
(1074, 'Khalkidhiki', 20),
(1075, 'Pieria', 20),
(1076, 'Ioannina', 20),
(1077, 'Thesprotia', 20),
(1078, 'Preveza', 20),
(1079, 'Arta', 20),
(1080, 'Larisa', 20),
(1081, 'Trikala', 20),
(1082, 'Kardhitsa', 20),
(1083, 'Magnisia', 20),
(1084, 'Kerkira', 20),
(1085, 'Levkas', 20),
(1086, 'Kefallinia', 20),
(1087, 'Zakinthos', 20),
(1088, 'Fthiotis', 20),
(1089, 'Evritania', 20),
(1090, 'Aitolia kai Akarnania', 20),
(1091, 'Fokis', 20),
(1092, 'Voiotia', 20),
(1093, 'Evvoia', 20),
(1094, 'Attiki', 20),
(1095, 'Argolis', 20),
(1096, 'Korinthia', 20),
(1097, 'Akhaia', 20),
(1098, 'Ilia', 20),
(1099, 'Messinia', 20),
(1100, 'Arkadhia', 20),
(1101, 'Lakonia', 20),
(1102, 'Khania', 20),
(1103, 'Rethimni', 20),
(1104, 'Iraklion', 20),
(1105, 'Lasithi', 20),
(1106, 'Dhodhekanisos', 20),
(1107, 'Samos', 20),
(1108, 'Kikladhes', 20),
(1109, 'Khios', 20),
(1110, 'Lesvos', 20),
(1112, 'Bacs-Kiskun', 14),
(1113, 'Baranya', 14),
(1114, 'Bekes', 14),
(1115, 'Borsod-Abauj-Zemplen', 14),
(1116, 'Budapest', 14),
(1117, 'Csongrad', 14),
(1118, 'Debrecen', 14),
(1119, 'Fejer', 14),
(1120, 'Gyor-Moson-Sopron', 14),
(1121, 'Hajdu-Bihar', 14),
(1122, 'Heves', 14),
(1123, 'Komarom-Esztergom', 14),
(1124, 'Miskolc', 14),
(1125, 'Nograd', 14),
(1126, 'Pecs', 14),
(1127, 'Pest', 14),
(1128, 'Somogy', 14),
(1129, 'Szabolcs-Szatmar-Bereg', 14),
(1130, 'Szeged', 14),
(1131, 'Jasz-Nagykun-Szolnok', 14),
(1132, 'Tolna', 14),
(1133, 'Vas', 14),
(1134, 'Veszprem', 14),
(1135, 'Zala', 14),
(1136, 'Gyor', 14),
(1150, 'Veszprem', 14),
(1152, 'Balzers', 126),
(1153, 'Eschen', 126),
(1154, 'Gamprin', 126),
(1155, 'Mauren', 126),
(1156, 'Planken', 126),
(1157, 'Ruggell', 126),
(1158, 'Schaan', 126),
(1159, 'Schellenberg', 126),
(1160, 'Triesen', 126),
(1161, 'Triesenberg', 126),
(1162, 'Vaduz', 126),
(1163, 'Diekirch', 41),
(1164, 'Grevenmacher', 41),
(1165, 'Luxembourg', 41),
(1167, 'Aracinovo', 85),
(1168, 'Bac', 85),
(1169, 'Belcista', 85),
(1170, 'Berovo', 85),
(1171, 'Bistrica', 85),
(1172, 'Bitola', 85),
(1173, 'Blatec', 85),
(1174, 'Bogdanci', 85),
(1175, 'Bogomila', 85),
(1176, 'Bogovinje', 85),
(1177, 'Bosilovo', 85),
(1179, 'Cair', 85),
(1180, 'Capari', 85),
(1181, 'Caska', 85),
(1182, 'Cegrane', 85),
(1184, 'Centar Zupa', 85),
(1187, 'Debar', 85),
(1188, 'Delcevo', 85),
(1190, 'Demir Hisar', 85),
(1191, 'Demir Kapija', 85),
(1195, 'Dorce Petrov', 85),
(1198, 'Gazi Baba', 85),
(1199, 'Gevgelija', 85),
(1200, 'Gostivar', 85),
(1201, 'Gradsko', 85),
(1204, 'Jegunovce', 85),
(1205, 'Kamenjane', 85),
(1207, 'Karpos', 85),
(1208, 'Kavadarci', 85),
(1209, 'Kicevo', 85),
(1210, 'Kisela Voda', 85),
(1211, 'Klecevce', 85),
(1212, 'Kocani', 85),
(1214, 'Kondovo', 85),
(1217, 'Kratovo', 85),
(1219, 'Krivogastani', 85),
(1220, 'Krusevo', 85),
(1223, 'Kumanovo', 85),
(1224, 'Labunista', 85),
(1225, 'Lipkovo', 85),
(1228, 'Makedonska Kamenica', 85),
(1229, 'Makedonski Brod', 85),
(1234, 'Murtino', 85),
(1235, 'Negotino', 85),
(1238, 'Novo Selo', 85),
(1240, 'Ohrid', 85),
(1242, 'Orizari', 85),
(1245, 'Petrovec', 85),
(1248, 'Prilep', 85),
(1249, 'Probistip', 85),
(1250, 'Radovis', 85),
(1252, 'Resen', 85),
(1253, 'Rosoman', 85),
(1256, 'Saraj', 85),
(1260, 'Srbinovo', 85),
(1262, 'Star Dojran', 85),
(1264, 'Stip', 85),
(1265, 'Struga', 85),
(1266, 'Strumica', 85),
(1267, 'Studenicani', 85),
(1268, 'Suto Orizari', 85),
(1269, 'Sveti Nikole', 85),
(1270, 'Tearce', 85),
(1271, 'Tetovo', 85),
(1273, 'Valandovo', 85),
(1275, 'Veles', 85),
(1277, 'Vevcani', 85),
(1278, 'Vinica', 85),
(1281, 'Vrapciste', 85),
(1286, 'Zelino', 85),
(1289, 'Zrnovci', 85),
(1291, 'Malta', 86),
(1292, 'La Condamine', 44),
(1293, 'Monaco', 44),
(1294, 'Monte-Carlo', 44),
(1295, 'Biala Podlaska', 47),
(1296, 'Bialystok', 47),
(1297, 'Bielsko', 47),
(1298, 'Bydgoszcz', 47),
(1299, 'Chelm', 47),
(1300, 'Ciechanow', 47),
(1301, 'Czestochowa', 47),
(1302, 'Elblag', 47),
(1303, 'Gdansk', 47),
(1304, 'Gorzow', 47),
(1305, 'Jelenia Gora', 47),
(1306, 'Kalisz', 47),
(1307, 'Katowice', 47),
(1308, 'Kielce', 47),
(1309, 'Konin', 47),
(1310, 'Koszalin', 47),
(1311, 'Krakow', 47),
(1312, 'Krosno', 47),
(1313, 'Legnica', 47),
(1314, 'Leszno', 47),
(1315, 'Lodz', 47),
(1316, 'Lomza', 47),
(1317, 'Lublin', 47),
(1318, 'Nowy Sacz', 47),
(1319, 'Olsztyn', 47),
(1320, 'Opole', 47),
(1321, 'Ostroleka', 47),
(1322, 'Pila', 47),
(1323, 'Piotrkow', 47),
(1324, 'Plock', 47),
(1325, 'Poznan', 47),
(1326, 'Przemysl', 47),
(1327, 'Radom', 47),
(1328, 'Rzeszow', 47),
(1329, 'Siedlce', 47),
(1330, 'Sieradz', 47),
(1331, 'Skierniewice', 47),
(1332, 'Slupsk', 47),
(1333, 'Suwalki', 47),
(1335, 'Tarnobrzeg', 47),
(1336, 'Tarnow', 47),
(1337, 'Torun', 47),
(1338, 'Walbrzych', 47),
(1339, 'Warszawa', 47),
(1340, 'Wloclawek', 47),
(1341, 'Wroclaw', 47),
(1342, 'Zamosc', 47),
(1343, 'Zielona Gora', 47),
(1344, 'Dolnoslaskie', 47),
(1345, 'Kujawsko-Pomorskie', 47),
(1346, 'Lodzkie', 47),
(1347, 'Lubelskie', 47),
(1348, 'Lubuskie', 47),
(1349, 'Malopolskie', 47),
(1350, 'Mazowieckie', 47),
(1351, 'Opolskie', 47),
(1352, 'Podkarpackie', 47),
(1353, 'Podlaskie', 47),
(1354, 'Pomorskie', 47),
(1355, 'Slaskie', 47),
(1356, 'Swietokrzyskie', 47),
(1357, 'Warminsko-Mazurskie', 47),
(1358, 'Wielkopolskie', 47),
(1359, 'Zachodniopomorskie', 47),
(1361, 'Alba', 72),
(1362, 'Arad', 72),
(1363, 'Arges', 72),
(1364, 'Bacau', 72),
(1365, 'Bihor', 72),
(1366, 'Bistrita-Nasaud', 72),
(1367, 'Botosani', 72),
(1368, 'Braila', 72),
(1369, 'Brasov', 72),
(1370, 'Bucuresti', 72),
(1371, 'Buzau', 72),
(1372, 'Caras-Severin', 72),
(1373, 'Cluj', 72),
(1374, 'Constanta', 72),
(1375, 'Covasna', 72),
(1376, 'Dambovita', 72),
(1377, 'Dolj', 72),
(1378, 'Galati', 72),
(1379, 'Gorj', 72),
(1380, 'Harghita', 72),
(1381, 'Hunedoara', 72),
(1382, 'Ialomita', 72),
(1383, 'Iasi', 72),
(1384, 'Maramures', 72),
(1385, 'Mehedinti', 72),
(1386, 'Mures', 72),
(1387, 'Neamt', 72),
(1388, 'Olt', 72),
(1389, 'Prahova', 72),
(1390, 'Salaj', 72),
(1391, 'Satu Mare', 72),
(1392, 'Sibiu', 72),
(1393, 'Suceava', 72),
(1394, 'Teleorman', 72),
(1395, 'Timis', 72),
(1396, 'Tulcea', 72),
(1397, 'Vaslui', 72),
(1398, 'Valcea', 72),
(1399, 'Vrancea', 72),
(1400, 'Calarasi', 72),
(1401, 'Giurgiu', 72),
(1404, 'Acquaviva', 224),
(1405, 'Chiesanuova', 224),
(1406, 'Domagnano', 224),
(1407, 'Faetano', 224),
(1408, 'Fiorentino', 224),
(1409, 'Borgo Maggiore', 224),
(1410, 'San Marino', 224),
(1411, 'Monte Giardino', 224),
(1412, 'Serravalle', 224),
(1413, 'Banska Bystrica', 52),
(1414, 'Bratislava', 52),
(1415, 'Kosice', 52),
(1416, 'Nitra', 52),
(1417, 'Presov', 52),
(1418, 'Trencin', 52),
(1419, 'Trnava', 52),
(1420, 'Zilina', 52),
(1423, 'Beltinci', 53),
(1425, 'Bohinj', 53),
(1426, 'Borovnica', 53),
(1427, 'Bovec', 53),
(1428, 'Brda', 53),
(1429, 'Brezice', 53),
(1430, 'Brezovica', 53),
(1432, 'Cerklje na Gorenjskem', 53),
(1434, 'Cerkno', 53),
(1436, 'Crna na Koroskem', 53),
(1437, 'Crnomelj', 53),
(1438, 'Divaca', 53),
(1439, 'Dobrepolje', 53),
(1440, 'Dol pri Ljubljani', 53),
(1443, 'Duplek', 53),
(1447, 'Gornji Grad', 53),
(1450, 'Hrastnik', 53),
(1451, 'Hrpelje-Kozina', 53),
(1452, 'Idrija', 53),
(1453, 'Ig', 53),
(1454, 'Ilirska Bistrica', 53),
(1455, 'Ivancna Gorica', 53),
(1462, 'Komen', 53),
(1463, 'Koper-Capodistria', 53),
(1464, 'Kozje', 53),
(1465, 'Kranj', 53),
(1466, 'Kranjska Gora', 53),
(1467, 'Krsko', 53),
(1469, 'Lasko', 53),
(1470, 'Ljubljana', 53),
(1471, 'Ljubno', 53),
(1472, 'Logatec', 53),
(1475, 'Medvode', 53),
(1476, 'Menges', 53),
(1478, 'Mezica', 53),
(1480, 'Moravce', 53),
(1482, 'Mozirje', 53),
(1483, 'Murska Sobota', 53),
(1487, 'Nova Gorica', 53),
(1489, 'Ormoz', 53),
(1491, 'Pesnica', 53),
(1494, 'Postojna', 53),
(1497, 'Radece', 53),
(1498, 'Radenci', 53),
(1500, 'Radovljica', 53),
(1502, 'Rogaska Slatina', 53),
(1505, 'Sencur', 53),
(1506, 'Sentilj', 53),
(1508, 'Sevnica', 53),
(1509, 'Sezana', 53),
(1511, 'Skofja Loka', 53),
(1513, 'Slovenj Gradec', 53),
(1514, 'Slovenske Konjice', 53),
(1515, 'Smarje pri Jelsah', 53),
(1521, 'Tolmin', 53),
(1522, 'Trbovlje', 53),
(1524, 'Trzic', 53),
(1526, 'Velenje', 53),
(1528, 'Vipava', 53),
(1531, 'Vrhnika', 53),
(1532, 'Vuzenica', 53),
(1533, 'Zagorje ob Savi', 53),
(1535, 'Zelezniki', 53),
(1536, 'Ziri', 53),
(1537, 'Zrece', 53),
(1539, 'Domzale', 53),
(1540, 'Jesenice', 53),
(1541, 'Kamnik', 53),
(1542, 'Kocevje', 53),
(1544, 'Lenart', 53),
(1545, 'Litija', 53),
(1546, 'Ljutomer', 53),
(1550, 'Maribor', 53),
(1552, 'Novo Mesto', 53),
(1553, 'Piran', 53),
(1554, 'Preddvor', 53),
(1555, 'Ptuj', 53),
(1556, 'Ribnica', 53),
(1558, 'Sentjur pri Celju', 53),
(1559, 'Slovenska Bistrica', 53),
(1560, 'Videm', 53),
(1562, 'Zalec', 53),
(1564, 'Seychelles', 109),
(1565, 'Mauritania', 108),
(1566, 'Senegal', 135),
(1567, 'Road Town', 154),
(1568, 'Congo', 165),
(1569, 'Avarua', 166),
(1570, 'Malabo', 172),
(1571, 'Torshavn', 175),
(1572, 'Papeete', 178),
(1573, 'St George&#039;s', 184),
(1574, 'St Peter Port', 186),
(1575, 'Bissau', 188),
(1576, 'Saint Helier', 193),
(1577, 'Fort-de-France', 201),
(1578, 'Willemstad', 207),
(1579, 'Noumea', 208),
(1580, 'Kingston', 212),
(1581, 'Adamstown', 215),
(1582, 'Doha', 216),
(1583, 'Jamestown', 218),
(1584, 'Basseterre', 219),
(1585, 'Castries', 220),
(1586, 'Saint Pierre', 221),
(1587, 'Kingstown', 222),
(1588, 'San Tome', 225),
(1589, 'Belgrade', 226),
(1590, 'Freetown', 227),
(1591, 'Mogadishu', 229),
(1592, 'Fakaofo', 235),
(1593, 'Port of Spain', 237),
(1594, 'Mata-Utu', 241),
(1596, 'Amazonas', 89),
(1597, 'Ancash', 89),
(1598, 'Apurímac', 89),
(1599, 'Arequipa', 89),
(1600, 'Ayacucho', 89),
(1601, 'Cajamarca', 89),
(1602, 'Callao', 89),
(1603, 'Cusco', 89),
(1604, 'Huancavelica', 89),
(1605, 'Huánuco', 89),
(1606, 'Ica', 89),
(1607, 'Junín', 89),
(1608, 'La Libertad', 89),
(1609, 'Lambayeque', 89),
(1610, 'Lima', 89),
(1611, 'Loreto', 89),
(1612, 'Madre de Dios', 89),
(1613, 'Moquegua', 89),
(1614, 'Pasco', 89),
(1615, 'Piura', 89),
(1616, 'Puno', 89),
(1617, 'San Martín', 89),
(1618, 'Tacna', 89),
(1619, 'Tumbes', 89),
(1620, 'Ucayali', 89),
(1622, 'Alto Paraná', 110),
(1623, 'Amambay', 110),
(1624, 'Boquerón', 110),
(1625, 'Caaguaz&uacute;', 110),
(1626, 'Caazapá', 110),
(1627, 'Central', 110),
(1628, 'Concepción', 110),
(1629, 'Cordillera', 110),
(1630, 'Guairá', 110),
(1631, 'Itap&uacute;a', 110),
(1632, 'Misiones', 110),
(1633, 'Neembuc&uacute;', 110),
(1634, 'Paraguarí', 110),
(1635, 'Presidente Hayes', 110),
(1636, 'San Pedro', 110),
(1637, 'Alto Paraguay', 110),
(1638, 'Canindey&uacute;', 110),
(1639, 'Chaco', 110),
(1642, 'Artigas', 111),
(1643, 'Canelones', 111),
(1644, 'Cerro Largo', 111),
(1645, 'Colonia', 111),
(1646, 'Durazno', 111),
(1647, 'Flores', 111),
(1648, 'Florida', 111),
(1649, 'Lavalleja', 111),
(1650, 'Maldonado', 111),
(1651, 'Montevideo', 111),
(1652, 'Paysand&uacute;', 111),
(1653, 'Río Negro', 111),
(1654, 'Rivera', 111),
(1655, 'Rocha', 111),
(1656, 'Salto', 111),
(1657, 'San José', 111),
(1658, 'Soriano', 111),
(1659, 'Tacuarembó', 111),
(1660, 'Treinta y Tres', 111),
(1662, 'Valparaíso', 81),
(1663, 'Aisén del General Carlos Ibánez del Campo', 81),
(1664, 'Antofagasta', 81),
(1665, 'Araucanía', 81),
(1666, 'Atacama', 81),
(1667, 'Bío-Bío', 81),
(1668, 'Coquimbo', 81),
(1669, 'Libertador General Bernardo O&#039;Higgins', 81),
(1670, 'Los Lagos', 81),
(1671, 'Magallanes y de la Antártica Chilena', 81),
(1672, 'Maule', 81),
(1673, 'Region Metropolitana', 81),
(1674, 'Tarapacá', 81),
(1676, 'Alta Verapaz', 185),
(1677, 'Baja Verapaz', 185),
(1678, 'Chimaltenango', 185),
(1679, 'Chiquimula', 185),
(1680, 'El Progreso', 185),
(1681, 'Escuintla', 185),
(1682, 'Guatemala', 185),
(1683, 'Huehuetenango', 185),
(1684, 'Izabal', 185),
(1685, 'Jalapa', 185),
(1686, 'Jutiapa', 185),
(1687, 'Petén', 185),
(1688, 'Quetzaltenango', 185),
(1689, 'Quiché', 185),
(1690, 'Retalhuleu', 185),
(1691, 'Sacatepéquez', 185),
(1692, 'San Marcos', 185),
(1693, 'Santa Rosa', 185),
(1694, 'Sololá', 185),
(1695, 'Suchitepequez', 185),
(1696, 'Totonicapán', 185),
(1697, 'Zacapa', 185),
(1699, 'Amazonas', 82),
(1700, 'Antioquia', 82),
(1701, 'Arauca', 82),
(1702, 'Atlántico', 82),
(1703, 'Caquetá', 82),
(1704, 'Cauca', 82),
(1705, 'César', 82),
(1706, 'Chocó', 82),
(1707, 'Córdoba', 82),
(1708, 'Guaviare', 82),
(1709, 'Guainía', 82),
(1710, 'Huila', 82),
(1711, 'La Guajira', 82),
(1712, 'Meta', 82),
(1713, 'Narino', 82),
(1714, 'Norte de Santander', 82),
(1715, 'Putumayo', 82),
(1716, 'Quindío', 82),
(1717, 'Risaralda', 82),
(1718, 'San Andrés y Providencia', 82),
(1719, 'Santander', 82),
(1720, 'Sucre', 82),
(1721, 'Tolima', 82),
(1722, 'Valle del Cauca', 82),
(1723, 'Vaupés', 82),
(1724, 'Vichada', 82),
(1725, 'Casanare', 82),
(1726, 'Cundinamarca', 82),
(1727, 'Distrito Especial', 82),
(1730, 'Caldas', 82),
(1731, 'Magdalena', 82),
(1733, 'Aguascalientes', 42),
(1734, 'Baja California', 42),
(1735, 'Baja California Sur', 42),
(1736, 'Campeche', 42),
(1737, 'Chiapas', 42),
(1738, 'Chihuahua', 42),
(1739, 'Coahuila de Zaragoza', 42),
(1740, 'Colima', 42),
(1741, 'Distrito Federal', 42),
(1742, 'Durango', 42),
(1743, 'Guanajuato', 42),
(1744, 'Guerrero', 42),
(1745, 'Hidalgo', 42),
(1746, 'Jalisco', 42),
(1747, 'México', 42),
(1748, 'Michoacán de Ocampo', 42),
(1749, 'Morelos', 42),
(1750, 'Nayarit', 42),
(1751, 'Nuevo León', 42),
(1752, 'Oaxaca', 42),
(1753, 'Puebla', 42),
(1754, 'Querétaro de Arteaga', 42),
(1755, 'Quintana Roo', 42),
(1756, 'San Luis Potosí', 42),
(1757, 'Sinaloa', 42),
(1758, 'Sonora', 42),
(1759, 'Tabasco', 42),
(1760, 'Tamaulipas', 42),
(1761, 'Tlaxcala', 42),
(1762, 'Veracruz-Llave', 42),
(1763, 'Yucatán', 42),
(1764, 'Zacatecas', 42),
(1766, 'Bocas del Toro', 124),
(1767, 'Chiriquí', 124),
(1768, 'Coclé', 124),
(1769, 'Colón', 124),
(1770, 'Darién', 124),
(1771, 'Herrera', 124),
(1772, 'Los Santos', 124),
(1773, 'Panamá', 124),
(1774, 'San Blas', 124),
(1775, 'Veraguas', 124),
(1777, 'Chuquisaca', 123),
(1778, 'Cochabamba', 123),
(1779, 'El Beni', 123),
(1780, 'La Paz', 123),
(1781, 'Oruro', 123),
(1782, 'Pando', 123),
(1783, 'Potosí', 123),
(1784, 'Santa Cruz', 123),
(1785, 'Tarija', 123),
(1787, 'Alajuela', 36),
(1788, 'Cartago', 36),
(1789, 'Guanacaste', 36),
(1790, 'Heredia', 36),
(1791, 'Limón', 36),
(1792, 'Puntarenas', 36),
(1793, 'San José', 36),
(1795, 'Galápagos', 103),
(1796, 'Azuay', 103),
(1797, 'Bolívar', 103),
(1798, 'Canar', 103),
(1799, 'Carchi', 103),
(1800, 'Chimborazo', 103),
(1801, 'Cotopaxi', 103),
(1802, 'El Oro', 103),
(1803, 'Esmeraldas', 103),
(1804, 'Guayas', 103),
(1805, 'Imbabura', 103),
(1806, 'Loja', 103),
(1807, 'Los Ríos', 103),
(1808, 'Manabí', 103),
(1809, 'Morona-Santiago', 103),
(1810, 'Pastaza', 103),
(1811, 'Pichincha', 103),
(1812, 'Tungurahua', 103),
(1813, 'Zamora-Chinchipe', 103),
(1814, 'Sucumbíos', 103),
(1815, 'Napo', 103),
(1816, 'Orellana', 103),
(1818, 'Buenos Aires', 5),
(1819, 'Catamarca', 5),
(1820, 'Chaco', 5),
(1821, 'Chubut', 5),
(1822, 'Córdoba', 5),
(1823, 'Corrientes', 5),
(1824, 'Distrito Federal', 5),
(1825, 'Entre Ríos', 5),
(1826, 'Formosa', 5),
(1827, 'Jujuy', 5),
(1828, 'La Pampa', 5),
(1829, 'La Rioja', 5),
(1830, 'Mendoza', 5),
(1831, 'Misiones', 5),
(1832, 'Neuquén', 5),
(1833, 'Río Negro', 5),
(1834, 'Salta', 5),
(1835, 'San Juan', 5),
(1836, 'San Luis', 5),
(1837, 'Santa Cruz', 5),
(1838, 'Santa Fe', 5),
(1839, 'Santiago del Estero', 5),
(1840, 'Tierra del Fuego', 5),
(1841, 'Tucumán', 5),
(1843, 'Amazonas', 95),
(1844, 'Anzoategui', 95),
(1845, 'Apure', 95),
(1846, 'Aragua', 95),
(1847, 'Barinas', 95),
(1848, 'Bolívar', 95),
(1849, 'Carabobo', 95),
(1850, 'Cojedes', 95),
(1851, 'Delta Amacuro', 95),
(1852, 'Falcón', 95),
(1853, 'Guárico', 95),
(1854, 'Lara', 95),
(1855, 'Mérida', 95),
(1856, 'Miranda', 95),
(1857, 'Monagas', 95),
(1858, 'Nueva Esparta', 95),
(1859, 'Portuguesa', 95),
(1860, 'Sucre', 95),
(1861, 'Táchira', 95),
(1862, 'Trujillo', 95),
(1863, 'Yaracuy', 95),
(1864, 'Zulia', 95),
(1865, 'Dependencias Federales', 95),
(1866, 'Distrito Capital', 95),
(1867, 'Vargas', 95),
(1869, 'Boaco', 209),
(1870, 'Carazo', 209),
(1871, 'Chinandega', 209),
(1872, 'Chontales', 209),
(1873, 'Estelí', 209),
(1874, 'Granada', 209),
(1875, 'Jinotega', 209),
(1876, 'León', 209),
(1877, 'Madriz', 209),
(1878, 'Managua', 209),
(1879, 'Masaya', 209),
(1880, 'Matagalpa', 209),
(1881, 'Nueva Segovia', 209),
(1882, 'Rio San Juan', 209),
(1883, 'Rivas', 209),
(1884, 'Zelaya', 209),
(1886, 'Pinar del Rio', 113),
(1887, 'Ciudad de la Habana', 113),
(1888, 'Matanzas', 113),
(1889, 'Isla de la Juventud', 113),
(1890, 'Camaguey', 113),
(1891, 'Ciego de Avila', 113),
(1892, 'Cienfuegos', 113),
(1893, 'Granma', 113),
(1894, 'Guantanamo', 113),
(1895, 'La Habana', 113),
(1896, 'Holguin', 113),
(1897, 'Las Tunas', 113),
(1898, 'Sancti Spiritus', 113),
(1899, 'Santiago de Cuba', 113),
(1900, 'Villa Clara', 113),
(1901, 'Acre', 12),
(1902, 'Alagoas', 12),
(1903, 'Amapa', 12),
(1904, 'Amazonas', 12),
(1905, 'Bahia', 12),
(1906, 'Ceara', 12),
(1907, 'Distrito Federal', 12),
(1908, 'Espirito Santo', 12),
(1909, 'Mato Grosso do Sul', 12),
(1910, 'Maranhao', 12),
(1911, 'Mato Grosso', 12),
(1912, 'Minas Gerais', 12),
(1913, 'Para', 12),
(1914, 'Paraiba', 12),
(1915, 'Parana', 12),
(1916, 'Piaui', 12),
(1917, 'Rio de Janeiro', 12),
(1918, 'Rio Grande do Norte', 12),
(1919, 'Rio Grande do Sul', 12),
(1920, 'Rondonia', 12),
(1921, 'Roraima', 12),
(1922, 'Santa Catarina', 12),
(1923, 'Sao Paulo', 12),
(1924, 'Sergipe', 12),
(1925, 'Goias', 12),
(1926, 'Pernambuco', 12),
(1927, 'Tocantins', 12),
(1930, 'Akureyri', 83),
(1931, 'Arnessysla', 83),
(1932, 'Austur-Bardastrandarsysla', 83),
(1933, 'Austur-Hunavatnssysla', 83),
(1934, 'Austur-Skaftafellssysla', 83),
(1935, 'Borgarfjardarsysla', 83),
(1936, 'Dalasysla', 83),
(1937, 'Eyjafjardarsysla', 83),
(1938, 'Gullbringusysla', 83),
(1939, 'Hafnarfjordur', 83),
(1943, 'Kjosarsysla', 83),
(1944, 'Kopavogur', 83),
(1945, 'Myrasysla', 83),
(1946, 'Neskaupstadur', 83),
(1947, 'Nordur-Isafjardarsysla', 83),
(1948, 'Nordur-Mulasysla', 83),
(1949, 'Nordur-Tingeyjarsysla', 83),
(1950, 'Olafsfjordur', 83),
(1951, 'Rangarvallasysla', 83),
(1952, 'Reykjavik', 83),
(1953, 'Saudarkrokur', 83),
(1954, 'Seydisfjordur', 83),
(1956, 'Skagafjardarsysla', 83),
(1957, 'Snafellsnes- og Hnappadalssysla', 83),
(1958, 'Strandasysla', 83),
(1959, 'Sudur-Mulasysla', 83),
(1960, 'Sudur-Tingeyjarsysla', 83),
(1961, 'Vestmannaeyjar', 83),
(1962, 'Vestur-Bardastrandarsysla', 83),
(1964, 'Vestur-Isafjardarsysla', 83),
(1965, 'Vestur-Skaftafellssysla', 83),
(1966, 'Anhui', 35),
(1967, 'Zhejiang', 35),
(1968, 'Jiangxi', 35),
(1969, 'Jiangsu', 35),
(1970, 'Jilin', 35),
(1971, 'Qinghai', 35),
(1972, 'Fujian', 35),
(1973, 'Heilongjiang', 35),
(1974, 'Henan', 35),
(1975, 'Hebei', 35),
(1976, 'Hunan', 35),
(1977, 'Hubei', 35),
(1978, 'Xinjiang', 35),
(1979, 'Xizang', 35),
(1980, 'Gansu', 35),
(1981, 'Guangxi', 35),
(1982, 'Guizhou', 35),
(1983, 'Liaoning', 35),
(1984, 'Nei Mongol', 35),
(1985, 'Ningxia', 35),
(1986, 'Beijing', 35),
(1987, 'Shanghai', 35),
(1988, 'Shanxi', 35),
(1989, 'Shandong', 35),
(1990, 'Shaanxi', 35),
(1991, 'Sichuan', 35),
(1992, 'Tianjin', 35),
(1993, 'Yunnan', 35),
(1994, 'Guangdong', 35),
(1995, 'Hainan', 35),
(1996, 'Chongqing', 35),
(1997, 'Central', 97),
(1998, 'Coast', 97),
(1999, 'Eastern', 97),
(2000, 'Nairobi Area', 97),
(2001, 'North-Eastern', 97),
(2002, 'Nyanza', 97),
(2003, 'Rift Valley', 97),
(2004, 'Western', 97),
(2006, 'Gilbert Islands', 195),
(2007, 'Line Islands', 195),
(2008, 'Phoenix Islands', 195),
(2010, 'Australian Capital Territory', 1),
(2011, 'New South Wales', 1),
(2012, 'Northern Territory', 1),
(2013, 'Queensland', 1),
(2014, 'South Australia', 1),
(2015, 'Tasmania', 1),
(2016, 'Victoria', 1),
(2017, 'Western Australia', 1),
(2018, 'Dublin', 27),
(2019, 'Galway', 27),
(2020, 'Kildare', 27),
(2021, 'Leitrim', 27),
(2022, 'Limerick', 27),
(2023, 'Mayo', 27),
(2024, 'Meath', 27),
(2025, 'Carlow', 27),
(2026, 'Kilkenny', 27),
(2027, 'Laois', 27),
(2028, 'Longford', 27),
(2029, 'Louth', 27),
(2030, 'Offaly', 27),
(2031, 'Westmeath', 27),
(2032, 'Wexford', 27),
(2033, 'Wicklow', 27),
(2034, 'Roscommon', 27),
(2035, 'Sligo', 27),
(2036, 'Clare', 27),
(2037, 'Cork', 27),
(2038, 'Kerry', 27),
(2039, 'Tipperary', 27),
(2040, 'Waterford', 27),
(2041, 'Cavan', 27),
(2042, 'Donegal', 27),
(2043, 'Monaghan', 27),
(2044, 'Karachaeva-Cherkesskaya Respublica', 50),
(2045, 'Raimirskii (Dolgano-Nenetskii) AO', 50),
(2046, 'Respublica Tiva', 50),
(2047, 'Newfoundland', 32),
(2048, 'Nova Scotia', 32),
(2049, 'Prince Edward Island', 32),
(2050, 'New Brunswick', 32),
(2051, 'Quebec', 32),
(2052, 'Ontario', 32),
(2053, 'Manitoba', 32),
(2054, 'Saskatchewan', 32),
(2055, 'Alberta', 32),
(2056, 'British Columbia', 32),
(2057, 'Nunavut', 32),
(2058, 'Northwest Territories', 32),
(2059, 'Yukon Territory', 32),
(2060, 'Drenthe', 19),
(2061, 'Friesland', 19),
(2062, 'Gelderland', 19),
(2063, 'Groningen', 19),
(2064, 'Limburg', 19),
(2065, 'Noord-Brabant', 19),
(2066, 'Noord-Holland', 19),
(2067, 'Utrecht', 19),
(2068, 'Zeeland', 19),
(2069, 'Zuid-Holland', 19),
(2071, 'Overijssel', 19),
(2072, 'Flevoland', 19),
(2073, 'Duarte', 138),
(2074, 'Puerto Plata', 138),
(2075, 'Valverde', 138),
(2076, 'María Trinidad Sánchez', 138),
(2077, 'Azua', 138),
(2078, 'Santiago', 138),
(2079, 'San Cristóbal', 138),
(2080, 'Peravia', 138),
(2081, 'Elías Piña', 138),
(2082, 'Barahona', 138),
(2083, 'Monte Plata', 138),
(2084, 'Salcedo', 138),
(2085, 'La Altagracia', 138),
(2086, 'San Juan', 138),
(2087, 'Monseñor Nouel', 138),
(2088, 'Monte Cristi', 138),
(2089, 'Espaillat', 138),
(2090, 'Sánchez Ramírez', 138),
(2091, 'La Vega', 138),
(2092, 'San Pedro de Macorís', 138),
(2093, 'Independencia', 138),
(2094, 'Dajabón', 138),
(2095, 'Baoruco', 138),
(2096, 'El Seibo', 138),
(2097, 'Hato Mayor', 138),
(2098, 'La Romana', 138),
(2099, 'Pedernales', 138),
(2100, 'Samaná', 138),
(2101, 'Santiago Rodríguez', 138),
(2102, 'San José de Ocoa', 138),
(2103, 'Chiba', 70),
(2104, 'Ehime', 70),
(2105, 'Oita', 70),
(2106, 'Skopje', 85),
(2108, 'Schanghai', 35),
(2109, 'Hongkong', 35),
(2110, 'Neimenggu', 35),
(2111, 'Aomen', 35),
(2112, 'Amnat Charoen', 92),
(2113, 'Ang Thong', 92),
(2114, 'Bangkok', 92),
(2115, 'Buri Ram', 92),
(2116, 'Chachoengsao', 92),
(2117, 'Chai Nat', 92),
(2118, 'Chaiyaphum', 92),
(2119, 'Chanthaburi', 92),
(2120, 'Chiang Mai', 92),
(2121, 'Chiang Rai', 92),
(2122, 'Chon Buri', 92),
(2124, 'Kalasin', 92),
(2126, 'Kanchanaburi', 92),
(2127, 'Khon Kaen', 92),
(2128, 'Krabi', 92),
(2129, 'Lampang', 92),
(2131, 'Loei', 92),
(2132, 'Lop Buri', 92),
(2133, 'Mae Hong Son', 92),
(2134, 'Maha Sarakham', 92),
(2137, 'Nakhon Pathom', 92),
(2139, 'Nakhon Ratchasima', 92),
(2140, 'Nakhon Sawan', 92),
(2141, 'Nakhon Si Thammarat', 92),
(2143, 'Narathiwat', 92),
(2144, 'Nong Bua Lam Phu', 92),
(2145, 'Nong Khai', 92),
(2146, 'Nonthaburi', 92),
(2147, 'Pathum Thani', 92),
(2148, 'Pattani', 92),
(2149, 'Phangnga', 92),
(2150, 'Phatthalung', 92),
(2154, 'Phichit', 92),
(2155, 'Phitsanulok', 92),
(2156, 'Phra Nakhon Si Ayutthaya', 92),
(2157, 'Phrae', 92),
(2158, 'Phuket', 92),
(2159, 'Prachin Buri', 92),
(2160, 'Prachuap Khiri Khan', 92),
(2162, 'Ratchaburi', 92),
(2163, 'Rayong', 92),
(2164, 'Roi Et', 92),
(2165, 'Sa Kaeo', 92),
(2166, 'Sakon Nakhon', 92),
(2167, 'Samut Prakan', 92),
(2168, 'Samut Sakhon', 92),
(2169, 'Samut Songkhran', 92),
(2170, 'Saraburi', 92),
(2172, 'Si Sa Ket', 92),
(2173, 'Sing Buri', 92),
(2174, 'Songkhla', 92),
(2175, 'Sukhothai', 92),
(2176, 'Suphan Buri', 92),
(2177, 'Surat Thani', 92),
(2178, 'Surin', 92),
(2180, 'Trang', 92),
(2182, 'Ubon Ratchathani', 92),
(2183, 'Udon Thani', 92),
(2184, 'Uthai Thani', 92),
(2185, 'Uttaradit', 92),
(2186, 'Yala', 92),
(2187, 'Yasothon', 92),
(2188, 'Busan', 69),
(2189, 'Daegu', 69),
(2191, 'Gangwon', 69),
(2192, 'Gwangju', 69),
(2193, 'Gyeonggi', 69),
(2194, 'Gyeongsangbuk', 69),
(2195, 'Gyeongsangnam', 69),
(2196, 'Jeju', 69),
(2201, 'Delhi', 25),
(2202, 'David', 124),
(2203, 'Nauru ', 248),
(2204, 'Ciudad de Panama', 124),
(2205, 'wwsss', 251);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familiares`
--

CREATE TABLE `familiares` (
  `familiar_id` int(11) NOT NULL COMMENT 'Cod familia',
  `usuario_id` int(11) NOT NULL COMMENT 'Cod Usuario',
  `familia_id` int(10) NOT NULL COMMENT 'Tipo de familiar',
  `familiar_nombre` varchar(45) NOT NULL COMMENT 'Nombre',
  `familiar_apellido` varchar(45) DEFAULT NULL COMMENT 'Apellido',
  `familiar_fecha_nacimiento` datetime DEFAULT NULL COMMENT 'Fecha Nacimiento',
  `familiar_telefono` text COMMENT 'Teléfono',
  `sexo_id` int(10) NOT NULL COMMENT 'Genero'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `familiares`
--

INSERT INTO `familiares` (`familiar_id`, `usuario_id`, `familia_id`, `familiar_nombre`, `familiar_apellido`, `familiar_fecha_nacimiento`, `familiar_telefono`, `sexo_id`) VALUES
(42, 33, 21, 'gladys', 'Villareal', '0000-00-00 00:00:00', '02120232', 2),
(43, 35, 23, 'Veronica', 'Castellanos', '0000-00-00 00:00:00', '6670-9506', 2),
(44, 35, 21, 'Yvette', 'Everts', '0000-00-00 00:00:00', '1111111', 2),
(45, 35, 22, 'Julio', 'Castellanos Hernandez', '0000-00-00 00:00:00', '2222222', 1),
(46, 35, 23, 'Florexy', 'León ', '0000-00-00 00:00:00', '9999-9999', 2),
(47, 40, 23, 'Sebastian', 'Castellanos', '0000-00-00 00:00:00', '6670-9506', 1),
(48, 35, 23, 'Eduardo', 'Castellanos', '0000-00-00 00:00:00', '999999', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historia_medica`
--

CREATE TABLE `historia_medica` (
  `historia_id` int(10) UNSIGNED NOT NULL COMMENT 'cod paciente',
  `usuario_id` int(11) NOT NULL COMMENT 'cod usuario',
  `historia_tipo_sangre` varchar(50) DEFAULT NULL COMMENT 'Tipo de sangre\n',
  `historia_peso` varchar(45) DEFAULT NULL COMMENT 'Peso',
  `historia_estatura` varchar(45) DEFAULT NULL COMMENT 'Estatura',
  `historia_fumar` tinyint(1) DEFAULT NULL COMMENT '¿Fumas?',
  `historia_fumar_descripcion` text COMMENT '¿Desde cuando fumas?',
  `historia_bebidad` tinyint(1) DEFAULT NULL COMMENT '¿Tomas bebidas alcohólicas?',
  `historia_bebidad_tipo` int(11) DEFAULT NULL COMMENT '¿Desde Cuando tomas bebidas alcohólicas?',
  `historia_tension` tinyint(1) DEFAULT NULL COMMENT '¿sufres de la tensión?',
  `historia_tipo_tension` int(11) NOT NULL COMMENT 'tipo tension',
  `historia_familia_tension` tinyint(1) DEFAULT NULL COMMENT '¿tienes familiares con tensión?',
  `historia_familia_quienes` text COMMENT '¿quienes sufren de tensión?',
  `historia_alergia_medicamentos` tinyint(1) DEFAULT NULL COMMENT '¿Alergico a algún medicamento?',
  `paciente_alergia_descripcion` text COMMENT '¿medicamentos  a los cuales eres alergico ?',
  `historia_operado` tinyint(1) DEFAULT NULL COMMENT '¿operado alguna vez?',
  `historia_operado_descripcion` text COMMENT '¿Motivo d ela operación?',
  `familiar_id` int(11) DEFAULT NULL COMMENT 'Cod familar'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `historia_medica`
--

INSERT INTO `historia_medica` (`historia_id`, `usuario_id`, `historia_tipo_sangre`, `historia_peso`, `historia_estatura`, `historia_fumar`, `historia_fumar_descripcion`, `historia_bebidad`, `historia_bebidad_tipo`, `historia_tension`, `historia_tipo_tension`, `historia_familia_tension`, `historia_familia_quienes`, `historia_alergia_medicamentos`, `paciente_alergia_descripcion`, `historia_operado`, `historia_operado_descripcion`, `familiar_id`) VALUES
(6, 33, '', '65kg', '1.80m', 0, '', 1, 3, 0, 0, 1, 'Mi padre', 0, '', 0, '', NULL),
(7, 33, '', '60kg', '1.60m', 0, '', 0, NULL, 0, 0, 1, 'esposo', 0, '', 0, '', 42),
(8, 35, 'o+', '105 kg', '1,78 metros', 0, '', 1, 2, 0, 0, 1, 'Madre tensión alta', 0, '', 1, 'Apendicitis', NULL),
(9, 35, 'o+', '17 kg', '1,25 ', 0, '', 0, NULL, 0, 0, 1, 'Abuela paterno', 0, '', 1, 'Hernia umbilical, amigdalinas ', 43),
(10, 35, 'o+', '62 kg', '1,60', 1, 'deje de fumar hace 10 años', 1, 3, 1, 0, 1, 'Mi madre +, un Hermano y una hermana.', 1, 'Penincilina', 1, 'Diverticulitis, ', 44),
(11, 35, 'o+', '80', '1,78 metros', 0, '', 1, 2, 0, 0, 0, '', 0, '', 0, '', 45),
(12, 37, '', '', '', 0, '', 0, NULL, 0, 0, 1, 'padre', 0, '', 0, '', NULL),
(13, 38, 'o+', '56 kg', '1,58', 1, '', 0, NULL, 0, 0, 0, '', 0, '', 0, '', NULL),
(14, 35, 'O+', '55 kg', '1.56 ', 0, '', 1, 2, 0, 0, 0, '', 1, 'Prueba', 1, 'Prueba', 46),
(15, 40, 'O+', '18 kg', '1.30', 0, '', 0, NULL, 0, 0, 1, 'Abuela paterno', 0, '', 0, '', 47),
(16, 44, 'RH+', '55', '1,56', 0, '', 0, NULL, 0, 0, 0, '', 0, '', 1, 'Cesarea', NULL),
(17, 45, '123', '123', '123', 0, '', 0, NULL, 0, 0, 0, '', 0, '', 0, '', NULL),
(18, 46, 'ghkgk', '75', '1.80', 0, '', 0, NULL, 0, 0, 0, '', 0, '', 0, '', NULL),
(19, 35, 'o+', '60 kg', '1,65 mts', 0, '', 0, NULL, 0, 0, 0, '', 0, '', 0, '', 48),
(20, 35, 'o+', '60 kg', '1,65 mts', 0, '', 0, NULL, 0, 0, 0, '', 0, '', 0, '', 48),
(21, 48, '8+', '70KG', '1.68 M', 0, '', 1, 3, 0, 0, 0, '', 0, '', 0, '', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE `horarios` (
  `horario_id` int(11) NOT NULL COMMENT 'Horario',
  `horario_fecha` varchar(100) NOT NULL COMMENT 'Fecha de horario'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `horarios`
--

INSERT INTO `horarios` (`horario_id`, `horario_fecha`) VALUES
(1, '08:00:00'),
(2, '08:30:00'),
(3, '09:00:00'),
(4, '09:30:00'),
(5, '10:00:00'),
(6, '10:30:00'),
(7, '11:00:00'),
(8, '11:30:00'),
(9, '12:00:00'),
(10, '12:30:00'),
(11, '13:00:00'),
(12, '13:30:00'),
(13, '14:00:00'),
(14, '14:30:00'),
(15, '15:00:00'),
(16, '15:30:00'),
(17, '16:00:00'),
(18, '16:30:00'),
(19, '17:00:00'),
(20, '17:30:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idiomas`
--

CREATE TABLE `idiomas` (
  `idioma_id` int(10) NOT NULL COMMENT 'Cod idioma',
  `idioma_nombre` varchar(45) NOT NULL COMMENT 'Nombre'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logos`
--

CREATE TABLE `logos` (
  `logo_id` int(11) NOT NULL COMMENT 'Cod Logo',
  `logo_nombre` varchar(45) NOT NULL COMMENT 'Nombre',
  `logo_imagen` text NOT NULL COMMENT 'Imagen',
  `usuario_id` int(11) NOT NULL COMMENT 'Cod Usuario'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `logos`
--

INSERT INTO `logos` (`logo_id`, `logo_nombre`, `logo_imagen`, `usuario_id`) VALUES
(3, 'mi logo', '240914.jpg', 34);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicamentos`
--

CREATE TABLE `medicamentos` (
  `medicamento_id` int(11) NOT NULL COMMENT 'Cod Medicamento',
  `medicamento_nombre` varchar(45) NOT NULL COMMENT 'Nombre',
  `medicamento_resumen` text COMMENT 'Resumen',
  `medicamento_imagen` text COMMENT 'Imagen',
  `medicamento_estatus` tinyint(4) DEFAULT NULL COMMENT 'Estatus',
  `medicamento_fecha_creacion` timestamp NULL DEFAULT NULL COMMENT 'Fecha Creación',
  `medicamento_fecha_actualizacion` timestamp NULL DEFAULT NULL COMMENT 'Fecha Actualización\n',
  `usuario_id` int(11) NOT NULL COMMENT 'Cod Usuario'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `medicamentos`
--

INSERT INTO `medicamentos` (`medicamento_id`, `medicamento_nombre`, `medicamento_resumen`, `medicamento_imagen`, `medicamento_estatus`, `medicamento_fecha_creacion`, `medicamento_fecha_actualizacion`, `usuario_id`) VALUES
(1, 'Atamel', 'esto es para el dolor de cabeza', 'atamel.jpg', NULL, '2017-09-29 15:32:33', '2017-10-18 13:29:32', 1),
(3, 'Ampicilina', 'La ampicilina es un antibiótico betalactámico que ha sido extensamente utilizado para tratar infecciones bacterianas desde el año 1961. Wikipedia\r\nFórmula: C16H19N3O4S\r\nDenominación de la IUPAC: (2S,5R,6R)-6-([(2R)-2-amino-2-phenylacetyl]amino) -3,3-dimethyl-7-oxo-4-thia-1-azabicyclo[3.2.0]heptane-2- carboxylic acid\r\nVida media: 1-1,8 horas\r\nPeso mol.: 349.406 g/mol\r\nMetabolismo: Hígado\r\nBiodisponibilidad: 50% (oral)\r\nExcreción: Orina 75 a 85%', '737506.jpg', NULL, '2017-10-18 13:13:40', '2017-10-18 13:13:40', 1),
(4, 'Paracetamol', 'El paracetamol, también conocido como acetaminofén o acetaminofeno, es un fármaco con propiedades analgésicas y antipiréticas utilizado principalmente para tratar la fiebre y el dolor leve y moderado, ? ... Wikipedia\r\nFórmula: C8H9NO2\r\nVida media: 1-4 h\r\nMetabolismo: 90-95 % Hepático\r\nP. de fusión: 169 °C (336 °F)\r\nExcreción: Renal (85-90 %)\r\nSoluble en: Agua\r\nDenominación de la IUPAC: N-(4-hydroxyphenyl)ethanamide, N-(4-hydroxyphenyl)acetamide', '987995.jpg', NULL, '2017-10-18 13:18:54', '2017-10-18 13:18:54', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificaciones`
--

CREATE TABLE `notificaciones` (
  `notificacion_id` int(10) UNSIGNED NOT NULL COMMENT 'Cod notificación',
  `notificacion_descripicion` text NOT NULL COMMENT 'Descripción',
  `notificacion_tipo` tinyint(4) DEFAULT '0' COMMENT 'Tipo',
  `notificacion_fecha_hora` datetime DEFAULT NULL COMMENT 'Fecha/hora',
  `notifacion_fecha_hora_utc` datetime DEFAULT NULL COMMENT 'FEcha/hora UTC',
  `notificacion_status` varchar(45) DEFAULT '0' COMMENT 'Estatus',
  `usuario_id` int(11) NOT NULL COMMENT 'Cod Usuario',
  `tratamiento_id` int(11) NOT NULL COMMENT 'Cod Tratamiento',
  `notificacion_presentacion` varchar(45) DEFAULT NULL COMMENT 'Presentación',
  `notificacion_medicina` varchar(45) DEFAULT NULL COMMENT 'Medicina',
  `notificacion_intervalo` varchar(45) DEFAULT NULL COMMENT 'Intervalo',
  `notificacion_tiempo` varchar(45) DEFAULT NULL COMMENT 'Tiempo',
  `noificacion_miligramo` varchar(45) DEFAULT NULL COMMENT 'Miligramos',
  `notificacion_contador` varchar(45) DEFAULT NULL,
  `notificacion_usuario` varchar(100) DEFAULT NULL COMMENT 'Nombre y apellido',
  `notificacion_correo` varchar(100) DEFAULT NULL COMMENT 'Correo'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `notificaciones`
--

INSERT INTO `notificaciones` (`notificacion_id`, `notificacion_descripicion`, `notificacion_tipo`, `notificacion_fecha_hora`, `notifacion_fecha_hora_utc`, `notificacion_status`, `usuario_id`, `tratamiento_id`, `notificacion_presentacion`, `notificacion_medicina`, `notificacion_intervalo`, `notificacion_tiempo`, `noificacion_miligramo`, `notificacion_contador`, `notificacion_usuario`, `notificacion_correo`) VALUES
(37, 'Recordatorio de tratamiento', 0, '2017-10-11 12:43:00', NULL, '1', 45, 21, 'Tabletas', 'atamel', 'Minutos', 'Dia(s)', '500ml', '1', 'osmer abreu', 'osmer.abreu.bmo@gmail.com'),
(38, 'Recordatorio de tratamiento', 0, '2017-10-11 12:53:00', NULL, '1', 45, 21, 'Tabletas', 'atamel', 'Minutos', 'Dia(s)', '500ml', '2', 'osmer abreu', 'osmer.abreu.bmo@gmail.com'),
(39, 'Recordatorio de tratamiento', 0, '2017-10-11 13:03:00', NULL, '1', 45, 21, 'Tabletas', 'atamel', 'Minutos', 'Dia(s)', '500ml', '3', 'osmer abreu', 'osmer.abreu.bmo@gmail.com'),
(40, 'Recordatorio de tratamiento', 0, '2017-10-11 13:13:00', NULL, '1', 45, 21, 'Tabletas', 'atamel', 'Minutos', 'Dia(s)', '500ml', '4', 'osmer abreu', 'osmer.abreu.bmo@gmail.com'),
(41, 'Recordatorio de tratamiento', 0, '2017-10-11 13:33:00', NULL, '1', 45, 22, 'Tabletas', 'atamel', 'Minutos', 'Dia(s)', '500ml', '1', 'osmer abreu', 'osmer.abreu.bmo@gmail.com'),
(42, 'Recordatorio de tratamiento', 0, '2017-10-11 13:38:00', NULL, '1', 45, 22, 'Tabletas', 'atamel', 'Minutos', 'Dia(s)', '500ml', '2', 'osmer abreu', 'osmer.abreu.bmo@gmail.com'),
(43, 'Recordatorio de tratamiento', 0, '2017-10-11 13:43:00', NULL, '1', 45, 22, 'Tabletas', 'atamel', 'Minutos', 'Dia(s)', '500ml', '3', 'osmer abreu', 'osmer.abreu.bmo@gmail.com'),
(44, 'Recordatorio de tratamiento', 0, '2017-10-11 13:48:00', NULL, '1', 45, 22, 'Tabletas', 'atamel', 'Minutos', 'Dia(s)', '500ml', '4', 'osmer abreu', 'osmer.abreu.bmo@gmail.com'),
(45, 'Recordatorio de tratamiento', 0, '2017-10-11 15:11:00', NULL, '1', 35, 23, 'Tabletas', 'atamel', 'Minutos', 'Dia(s)', '500ml', '1', 'Julio Castellanos', 'julioc.pty@gmail.com'),
(46, 'Recordatorio de tratamiento', 0, '2017-10-11 15:15:00', NULL, '1', 35, 23, 'Tabletas', 'atamel', 'Minutos', 'Dia(s)', '500ml', '2', 'Julio Castellanos', 'julioc.pty@gmail.com'),
(47, 'Recordatorio de tratamiento', 0, '2017-10-11 15:19:00', NULL, '1', 35, 23, 'Tabletas', 'atamel', 'Minutos', 'Dia(s)', '500ml', '3', 'Julio Castellanos', 'julioc.pty@gmail.com'),
(48, 'Recordatorio de tratamiento', 0, '2017-10-11 15:23:00', NULL, '1', 35, 23, 'Tabletas', 'atamel', 'Minutos', 'Dia(s)', '500ml', '4', 'Julio Castellanos', 'julioc.pty@gmail.com'),
(49, 'Recordatorio de tratamiento', 0, '2017-10-11 15:27:00', NULL, '1', 35, 23, 'Tabletas', 'atamel', 'Minutos', 'Dia(s)', '500ml', '5', 'Julio Castellanos', 'julioc.pty@gmail.com'),
(50, 'Recordatorio de tratamiento', 0, '2017-10-11 15:17:00', NULL, '1', 45, 24, 'Tabletas', 'atamel', 'Minutos', 'Dia(s)', '500ml', '1', 'osmer abreu', 'osmer.abreu.bmo@gmail.com'),
(51, 'Recordatorio de tratamiento', 0, '2017-10-11 15:19:00', NULL, '1', 45, 24, 'Tabletas', 'atamel', 'Minutos', 'Dia(s)', '500ml', '2', 'osmer abreu', 'osmer.abreu.bmo@gmail.com'),
(52, 'Recordatorio de tratamiento', 0, '2017-10-11 15:21:00', NULL, '1', 45, 24, 'Tabletas', 'atamel', 'Minutos', 'Dia(s)', '500ml', '3', 'osmer abreu', 'osmer.abreu.bmo@gmail.com'),
(53, 'Recordatorio de tratamiento', 0, '2017-10-11 15:23:00', NULL, '1', 45, 24, 'Tabletas', 'atamel', 'Minutos', 'Dia(s)', '500ml', '4', 'osmer abreu', 'osmer.abreu.bmo@gmail.com'),
(54, 'Recordatorio de tratamiento', 0, '2017-10-13 16:00:00', NULL, '0', 35, 25, 'Tabletas', 'atamel', 'Horas', 'Dia(s)', '500ml', '0', 'Julio Castellanos', 'julioc.pty@gmail.com'),
(55, 'Recordatorio de tratamiento', 0, '2017-10-12 00:00:00', NULL, '0', 33, 26, 'Tabletas', 'atamel', 'Minutos', 'Dia(s)', '500ml', '1', 'erick araque', 'antony2013_araque@hotmail.com'),
(56, 'Recordatorio de tratamiento', 0, '2017-10-20 00:00:00', NULL, '0', 33, 27, 'Tabletas', 'atamel', 'Minutos', 'Dia(s)', '500ml', '1', 'erick araque', 'antony2013_araque@hotmail.com'),
(57, 'Recordatorio de tratamiento', 0, '2017-10-19 00:00:00', NULL, '0', 33, 28, 'Tabletas', 'atamel', 'Minutos', 'Dia(s)', '500ml', '1', 'erick araque', 'antony2013_araque@hotmail.com'),
(58, 'Recordatorio de tratamiento', 0, '2017-10-18 00:00:00', NULL, '0', 33, 30, 'Tabletas', 'atamel', 'Minutos', 'Dia(s)', '500ml', '1', 'erick araque', 'antony2013_araque@hotmail.com'),
(59, 'Recordatorio de tratamiento', 0, '2017-10-19 00:00:00', NULL, '0', 33, 31, 'Tabletas', 'atamel', 'Minutos', 'Dia(s)', '500ml', '1', 'erick araque', 'antony2013_araque@hotmail.com'),
(60, 'Recordatorio de tratamiento', 0, '2017-10-13 00:00:00', NULL, '0', 33, 32, 'Tabletas', 'atamel', 'Minutos', 'Dia(s)', '500ml', '1', 'erick araque', 'antony2013_araque@hotmail.com'),
(61, 'Recordatorio de tratamiento', 0, '2017-10-27 00:00:00', NULL, '0', 45, 40, 'Tabletas', 'atamel', 'Minutos', 'Dia(s)', '500ml', '1', 'osmer abreu', 'osmer.abreu.bmo@gmail.com'),
(62, 'Recordatorio de tratamiento', 0, '2017-10-14 00:00:00', NULL, '0', 45, 41, 'Tabletas', 'atamel', 'Minutos', 'Dia(s)', '250ml', '1', 'osmer abreu', 'osmer.abreu.bmo@gmail.com'),
(63, 'Recordatorio de tratamiento', 0, '2017-10-14 00:02:00', NULL, '0', 45, 41, 'Tabletas', 'atamel', 'Minutos', 'Dia(s)', '250ml', '2', 'osmer abreu', 'osmer.abreu.bmo@gmail.com'),
(64, 'Recordatorio de tratamiento', 0, '2017-10-20 00:00:00', NULL, '0', 45, 45, 'Tabletas', 'atamel', 'Minutos', 'Dia(s)', '500ml', '1', 'osmer abreu', 'osmer.abreu.bmo@gmail.com'),
(65, 'Recordatorio de tratamiento', 0, '2017-10-26 00:00:00', NULL, '0', 45, 46, 'Tabletas', 'atamel', 'Minutos', 'Dia(s)', '500ml', '1', 'osmer abreu', 'osmer.abreu.bmo@gmail.com'),
(66, 'Recordatorio de tratamiento', 0, '2017-10-20 00:00:00', NULL, '0', 45, 47, 'Tabletas', 'atamel', 'Minutos', 'Dia(s)', '500ml', '1', 'osmer abreu', 'osmer.abreu.bmo@gmail.com'),
(67, 'Recordatorio de tratamiento', 0, '2017-10-20 00:00:00', NULL, '0', 45, 48, 'Tabletas', 'atamel', 'Minutos', 'Dia(s)', '250ml', '1', 'osmer abreu', 'osmer.abreu.bmo@gmail.com'),
(68, 'Recordatorio de tratamiento', 0, '2017-10-20 00:00:00', NULL, '0', 45, 49, 'Tabletas', 'atamel', 'Minutos', 'Dia(s)', '500ml', '1', 'osmer abreu', 'osmer.abreu.bmo@gmail.com'),
(69, 'Recordatorio de tratamiento', 0, '2017-10-27 00:00:00', NULL, '0', 45, 50, 'Tabletas', 'atamel', 'Minutos', 'Dia(s)', '500ml', '1', 'osmer abreu', 'osmer.abreu.bmo@gmail.com'),
(70, 'Recordatorio de tratamiento', 0, '2017-10-27 00:00:00', NULL, '0', 45, 51, 'Tabletas', 'atamel', 'Minutos', 'Dia(s)', '500ml', '1', 'osmer abreu', 'osmer.abreu.bmo@gmail.com'),
(71, 'Recordatorio de tratamiento', 0, '2017-10-26 00:00:00', NULL, '0', 45, 66, 'Tabletas', 'atamel', 'Minutos', 'Dia(s)', '500ml', '1', 'osmer abreu', 'osmer.abreu.bmo@gmail.com'),
(72, 'Recordatorio de tratamiento', 0, '2017-10-16 21:00:00', NULL, '1', 33, 71, 'Jarabe', 'atamel', 'Horas', 'Dia(s)', '250ml', '0', 'erick araque', 'antony2013_araque@hotmail.com'),
(73, 'Recordatorio de tratamiento', 0, '2017-10-16 23:00:00', NULL, '1', 33, 71, 'Jarabe', 'atamel', 'Horas', 'Dia(s)', '250ml', '1', 'erick araque', 'antony2013_araque@hotmail.com'),
(74, 'Recordatorio de tratamiento', 0, '2017-10-17 01:00:00', NULL, '1', 33, 71, 'Jarabe', 'atamel', 'Horas', 'Dia(s)', '250ml', '2', 'erick araque', 'antony2013_araque@hotmail.com'),
(75, 'Recordatorio de tratamiento', 0, '2017-10-17 03:00:00', NULL, '1', 33, 71, 'Jarabe', 'atamel', 'Horas', 'Dia(s)', '250ml', '3', 'erick araque', 'antony2013_araque@hotmail.com'),
(76, 'Recordatorio de tratamiento', 0, '2017-10-16 21:25:00', NULL, '1', 42, 72, 'Tabletas', 'atamel', 'Horas', 'Dia(s)', '500ml', '0', 'erick araque', 'antony2013_araque@hotmail.com'),
(77, 'Recordatorio de tratamiento', 0, '2017-10-16 22:25:00', NULL, '1', 42, 72, 'Tabletas', 'atamel', 'Horas', 'Dia(s)', '500ml', '1', 'erick araque', 'antony2013_araque@hotmail.com'),
(78, 'Recordatorio de tratamiento', 0, '2017-10-16 20:25:00', NULL, '1', 37, 73, 'Tabletas', 'atamel', 'Minutos', 'Dia(s)', '500ml', '1', 'victor araque', 'araquevictor10@hotmail.com'),
(79, 'Recordatorio de tratamiento', 0, '2017-10-16 21:10:00', NULL, '1', 37, 73, 'Tabletas', 'atamel', 'Minutos', 'Dia(s)', '500ml', '2', 'victor araque', 'araquevictor10@hotmail.com'),
(80, 'Recordatorio de tratamiento', 0, '2017-10-16 21:55:00', NULL, '1', 37, 73, 'Tabletas', 'atamel', 'Minutos', 'Dia(s)', '500ml', '3', 'victor araque', 'araquevictor10@hotmail.com'),
(81, 'Recordatorio de tratamiento', 0, '2017-10-17 19:08:00', NULL, '0', 45, 74, 'Tabletas', 'atamel', 'Horas', 'Dia(s)', '500ml', '0', 'osmer abreu', 'osmer.abreu.bmo@gmail.com'),
(82, 'Recordatorio de tratamiento', 0, '2017-10-17 21:08:00', NULL, '0', 45, 74, 'Tabletas', 'atamel', 'Horas', 'Dia(s)', '500ml', '1', 'osmer abreu', 'osmer.abreu.bmo@gmail.com'),
(83, 'Recordatorio de tratamiento', 0, '2017-10-17 23:08:00', NULL, '0', 45, 74, 'Tabletas', 'atamel', 'Horas', 'Dia(s)', '500ml', '2', 'osmer abreu', 'osmer.abreu.bmo@gmail.com'),
(84, 'Recordatorio de tratamiento', 0, '2017-10-16 19:30:00', NULL, '1', 33, 76, 'Tabletas', 'atamel', 'Minutos', 'Dia(s)', '500ml', '1', 'erick araque', 'antony2013_araque@hotmail.com'),
(85, 'Recordatorio de tratamiento', 0, '2017-10-16 19:39:00', NULL, '1', 33, 76, 'Tabletas', 'atamel', 'Minutos', 'Dia(s)', '500ml', '2', 'erick araque', 'antony2013_araque@hotmail.com'),
(86, 'Recordatorio de tratamiento', 0, '2017-10-19 00:00:00', NULL, '0', 33, 78, 'Tabletas', 'atamel', 'Minutos', 'Dia(s)', '500ml', '1', 'erick araque', 'antony2013_araque@hotmail.com'),
(87, 'Recordatorio de tratamiento', 0, '2017-10-19 00:02:00', NULL, '0', 33, 78, 'Tabletas', 'atamel', 'Minutos', 'Dia(s)', '500ml', '2', 'erick araque', 'antony2013_araque@hotmail.com'),
(88, 'Recordatorio de tratamiento', 0, '2017-10-20 00:00:00', NULL, '0', 33, 111, 'Tabletas', 'atamel', 'Minutos', 'Dia(s)', '500ml', '1', 'erick araque', 'antony2013_araque@hotmail.com'),
(89, 'Recordatorio de tratamiento', 0, '2017-10-11 00:00:00', NULL, '0', 33, 112, 'Tabletas', 'atamel', 'Minutos', 'Dia(s)', '500ml', '1', 'erick araque', 'antony2013_araque@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE `paises` (
  `pais_id` int(10) NOT NULL,
  `pais_abreviacion` varchar(45) DEFAULT NULL,
  `pais_coordenadas` text,
  `pais_img_bandera` text,
  `idioma_id` int(10) DEFAULT NULL COMMENT 'Idioma',
  `pais_nombre` varchar(100) NOT NULL COMMENT 'Nombre',
  `pais_estatus` int(11) NOT NULL COMMENT 'estatus'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`pais_id`, `pais_abreviacion`, `pais_coordenadas`, `pais_img_bandera`, `idioma_id`, `pais_nombre`, `pais_estatus`) VALUES
(2, NULL, NULL, NULL, NULL, 'Austria', 0),
(3, NULL, NULL, NULL, NULL, 'Azerbaiyán', 0),
(4, NULL, NULL, NULL, NULL, 'Anguilla', 0),
(5, NULL, NULL, NULL, NULL, 'Argentina', 0),
(6, NULL, NULL, NULL, NULL, 'Armenia', 0),
(7, NULL, NULL, NULL, NULL, 'Bielorrusia', 0),
(8, NULL, NULL, NULL, NULL, 'Belice', 0),
(9, NULL, NULL, NULL, NULL, 'Bélgica', 0),
(10, NULL, NULL, NULL, NULL, 'Bermudas', 0),
(11, NULL, NULL, NULL, NULL, 'Bulgaria', 0),
(12, NULL, NULL, NULL, NULL, 'Brasil', 0),
(13, NULL, NULL, NULL, NULL, 'Reino Unido', 0),
(14, NULL, NULL, NULL, NULL, 'Hungría', 0),
(15, NULL, NULL, NULL, NULL, 'Vietnam', 0),
(16, NULL, NULL, NULL, NULL, 'Haiti', 0),
(17, NULL, NULL, NULL, NULL, 'Guadalupe', 0),
(18, NULL, NULL, NULL, NULL, 'Alemania', 0),
(19, NULL, NULL, NULL, NULL, 'Países Bajos, Holanda', 0),
(20, NULL, NULL, NULL, NULL, 'Grecia', 0),
(21, NULL, NULL, NULL, NULL, 'Georgia', 0),
(22, NULL, NULL, NULL, NULL, 'Dinamarca', 0),
(23, NULL, NULL, NULL, NULL, 'Egipto', 0),
(24, NULL, NULL, NULL, NULL, 'Israel', 0),
(25, NULL, NULL, NULL, NULL, 'India', 0),
(26, NULL, NULL, NULL, NULL, 'Irán', 0),
(27, NULL, NULL, NULL, NULL, 'Irlanda', 0),
(28, NULL, NULL, NULL, NULL, 'España', 0),
(29, NULL, NULL, NULL, NULL, 'Italia', 0),
(30, NULL, NULL, NULL, NULL, 'Kazajstán', 0),
(31, NULL, NULL, NULL, NULL, 'Camerún', 0),
(32, NULL, NULL, NULL, NULL, 'Canadá', 0),
(33, NULL, NULL, NULL, NULL, 'Chipre', 0),
(34, NULL, NULL, NULL, NULL, 'Kirguistán', 0),
(35, NULL, NULL, NULL, NULL, 'China', 0),
(36, NULL, NULL, NULL, NULL, 'Costa Rica', 0),
(37, NULL, NULL, NULL, NULL, 'Kuwait', 0),
(38, NULL, NULL, NULL, NULL, 'Letonia', 0),
(39, NULL, NULL, NULL, NULL, 'Libia', 0),
(40, NULL, NULL, NULL, NULL, 'Lituania', 0),
(41, NULL, NULL, NULL, NULL, 'Luxemburgo', 0),
(42, NULL, NULL, NULL, NULL, 'México', 0),
(43, NULL, NULL, NULL, NULL, 'Moldavia', 0),
(44, NULL, NULL, NULL, NULL, 'Mónaco', 0),
(45, NULL, NULL, NULL, NULL, 'Nueva Zelanda', 0),
(46, NULL, NULL, NULL, NULL, 'Noruega', 0),
(47, NULL, NULL, NULL, NULL, 'Polonia', 0),
(48, NULL, NULL, NULL, NULL, 'Portugal', 0),
(49, NULL, NULL, NULL, NULL, 'Reunión', 0),
(50, NULL, NULL, NULL, NULL, 'Rusia', 0),
(51, NULL, NULL, NULL, NULL, 'El Salvador', 0),
(52, NULL, NULL, NULL, NULL, 'Eslovaquia', 0),
(53, NULL, NULL, NULL, NULL, 'Eslovenia', 0),
(54, NULL, NULL, NULL, NULL, 'Surinam', 0),
(55, NULL, NULL, NULL, NULL, 'Estados Unidos', 0),
(56, NULL, NULL, NULL, NULL, 'Tadjikistan', 0),
(57, NULL, NULL, NULL, NULL, 'Turkmenistan', 0),
(58, NULL, NULL, NULL, NULL, 'Islas Turcas y Caicos', 0),
(59, NULL, NULL, NULL, NULL, 'Turquía', 0),
(60, NULL, NULL, NULL, NULL, 'Uganda', 0),
(61, NULL, NULL, NULL, NULL, 'Uzbekistán', 0),
(62, NULL, NULL, NULL, NULL, 'Ucrania', 0),
(63, NULL, NULL, NULL, NULL, 'Finlandia', 0),
(64, NULL, NULL, NULL, NULL, 'Francia', 0),
(65, NULL, NULL, NULL, NULL, 'República Checa', 0),
(66, NULL, NULL, NULL, NULL, 'Suiza', 0),
(67, NULL, NULL, NULL, NULL, 'Suecia', 0),
(68, NULL, NULL, NULL, NULL, 'Estonia', 0),
(69, NULL, NULL, NULL, NULL, 'Corea del Sur', 0),
(70, NULL, NULL, NULL, NULL, 'Japón', 0),
(71, NULL, NULL, NULL, NULL, 'Croacia', 0),
(72, NULL, NULL, NULL, NULL, 'Rumanía', 0),
(73, NULL, NULL, NULL, NULL, 'Hong Kong', 0),
(74, NULL, NULL, NULL, NULL, 'Indonesia', 0),
(75, NULL, NULL, NULL, NULL, 'Jordania', 0),
(76, NULL, NULL, NULL, NULL, 'Malasia', 0),
(77, NULL, NULL, NULL, NULL, 'Singapur', 0),
(78, NULL, NULL, NULL, NULL, 'Taiwan', 0),
(79, NULL, NULL, NULL, NULL, 'Bosnia y Herzegovina', 0),
(80, NULL, NULL, NULL, NULL, 'Bahamas', 0),
(81, NULL, NULL, NULL, NULL, 'Chile', 0),
(82, NULL, NULL, NULL, NULL, 'Colombia', 0),
(83, NULL, NULL, NULL, NULL, 'Islandia', 0),
(84, NULL, NULL, NULL, NULL, 'Corea del Norte', 0),
(85, NULL, NULL, NULL, NULL, 'Macedonia', 0),
(86, NULL, NULL, NULL, NULL, 'Malta', 0),
(87, NULL, NULL, NULL, NULL, 'Pakistán', 0),
(88, NULL, NULL, NULL, NULL, 'Papúa-Nueva Guinea', 0),
(89, NULL, NULL, NULL, NULL, 'Perú', 0),
(90, NULL, NULL, NULL, NULL, 'Filipinas', 0),
(91, NULL, NULL, NULL, NULL, 'Arabia Saudita', 0),
(92, NULL, NULL, NULL, NULL, 'Tailandia', 0),
(93, NULL, NULL, NULL, NULL, 'Emiratos árabes Unidos', 0),
(94, NULL, NULL, NULL, NULL, 'Groenlandia', 0),
(95, NULL, NULL, NULL, NULL, 'Venezuela', 1),
(96, NULL, NULL, NULL, NULL, 'Zimbabwe', 0),
(97, NULL, NULL, NULL, NULL, 'Kenia', 0),
(98, NULL, NULL, NULL, NULL, 'Algeria', 0),
(99, NULL, NULL, NULL, NULL, 'Líbano', 0),
(100, NULL, NULL, NULL, NULL, 'Botsuana', 0),
(101, NULL, NULL, NULL, NULL, 'Tanzania', 0),
(102, NULL, NULL, NULL, NULL, 'Namibia', 0),
(103, NULL, NULL, NULL, NULL, 'Ecuador', 0),
(104, NULL, NULL, NULL, NULL, 'Marruecos', 0),
(105, NULL, NULL, NULL, NULL, 'Ghana', 0),
(106, NULL, NULL, NULL, NULL, 'Siria', 0),
(107, NULL, NULL, NULL, NULL, 'Nepal', 0),
(108, NULL, NULL, NULL, NULL, 'Mauritania', 0),
(109, NULL, NULL, NULL, NULL, 'Seychelles', 0),
(110, NULL, NULL, NULL, NULL, 'Paraguay', 0),
(111, NULL, NULL, NULL, NULL, 'Uruguay', 0),
(112, NULL, NULL, NULL, NULL, 'Congo (Brazzaville)', 0),
(113, NULL, NULL, NULL, NULL, 'Cuba', 0),
(114, NULL, NULL, NULL, NULL, 'Albania', 0),
(115, NULL, NULL, NULL, NULL, 'Nigeria', 0),
(116, NULL, NULL, NULL, NULL, 'Zambia', 0),
(117, NULL, NULL, NULL, NULL, 'Mozambique', 0),
(119, NULL, NULL, NULL, NULL, 'Angola', 0),
(120, NULL, NULL, NULL, NULL, 'Sri Lanka', 0),
(121, NULL, NULL, NULL, NULL, 'Etiopía', 0),
(122, NULL, NULL, NULL, NULL, 'Túnez', 0),
(123, NULL, NULL, NULL, NULL, 'Bolivia', 0),
(124, 'Pty', NULL, '375133.jpg', NULL, 'Panamá', 1),
(125, NULL, NULL, NULL, NULL, 'Malawi', 0),
(126, NULL, NULL, NULL, NULL, 'Liechtenstein', 0),
(127, NULL, NULL, NULL, NULL, 'Bahrein', 0),
(128, NULL, NULL, NULL, NULL, 'Barbados', 0),
(130, NULL, NULL, NULL, NULL, 'Chad', 0),
(131, NULL, NULL, NULL, NULL, 'Man, Isla de', 0),
(132, NULL, NULL, NULL, NULL, 'Jamaica', 0),
(133, NULL, NULL, NULL, NULL, 'Malí', 0),
(134, NULL, NULL, NULL, NULL, 'Madagascar', 0),
(135, NULL, NULL, NULL, NULL, 'Senegal', 0),
(136, NULL, NULL, NULL, NULL, 'Togo', 0),
(137, NULL, NULL, NULL, NULL, 'Honduras', 0),
(138, NULL, NULL, NULL, NULL, 'República Dominicana', 0),
(139, NULL, NULL, NULL, NULL, 'Mongolia', 0),
(140, NULL, NULL, NULL, NULL, 'Irak', 0),
(141, NULL, NULL, NULL, NULL, 'Sudáfrica', 0),
(142, NULL, NULL, NULL, NULL, 'Aruba', 0),
(143, NULL, NULL, NULL, NULL, 'Gibraltar', 0),
(144, NULL, NULL, NULL, NULL, 'Afganistán', 0),
(145, NULL, NULL, NULL, NULL, 'Andorra', 0),
(147, NULL, NULL, NULL, NULL, 'Antigua y Barbuda', 0),
(149, NULL, NULL, NULL, NULL, 'Bangladesh', 0),
(151, NULL, NULL, NULL, NULL, 'Benín', 0),
(152, NULL, NULL, NULL, NULL, 'Bután', 0),
(154, NULL, NULL, NULL, NULL, 'Islas Virgenes Británicas', 0),
(155, NULL, NULL, NULL, NULL, 'Brunéi', 0),
(156, NULL, NULL, NULL, NULL, 'Burkina Faso', 0),
(157, NULL, NULL, NULL, NULL, 'Burundi', 0),
(158, NULL, NULL, NULL, NULL, 'Camboya', 0),
(159, NULL, NULL, NULL, NULL, 'Cabo Verde', 0),
(164, NULL, NULL, NULL, NULL, 'Comores', 0),
(165, NULL, NULL, NULL, NULL, 'Congo (Kinshasa)', 0),
(166, NULL, NULL, NULL, NULL, 'Cook, Islas', 0),
(168, NULL, NULL, NULL, NULL, 'Costa de Marfil', 0),
(169, NULL, NULL, NULL, NULL, 'Djibouti, Yibuti', 0),
(171, NULL, NULL, NULL, NULL, 'Timor Oriental', 0),
(172, NULL, NULL, NULL, NULL, 'Guinea Ecuatorial', 0),
(173, NULL, NULL, NULL, NULL, 'Eritrea', 0),
(175, NULL, NULL, NULL, NULL, 'Feroe, Islas', 0),
(176, NULL, NULL, NULL, NULL, 'Fiyi', 0),
(178, NULL, NULL, NULL, NULL, 'Polinesia Francesa', 0),
(180, NULL, NULL, NULL, NULL, 'Gabón', 0),
(181, NULL, NULL, NULL, NULL, 'Gambia', 0),
(184, NULL, NULL, NULL, NULL, 'Granada', 0),
(185, NULL, NULL, NULL, NULL, 'Guatemala', 0),
(186, NULL, NULL, NULL, NULL, 'Guernsey', 0),
(187, NULL, NULL, NULL, NULL, 'Guinea', 0),
(188, NULL, NULL, NULL, NULL, 'Guinea-Bissau', 0),
(189, NULL, NULL, NULL, NULL, 'Guyana', 0),
(193, NULL, NULL, NULL, NULL, 'Jersey', 0),
(195, NULL, NULL, NULL, NULL, 'Kiribati', 0),
(196, NULL, NULL, NULL, NULL, 'Laos', 0),
(197, NULL, NULL, NULL, NULL, 'Lesotho', 0),
(198, NULL, NULL, NULL, NULL, 'Liberia', 0),
(200, NULL, NULL, NULL, NULL, 'Maldivas', 0),
(201, NULL, NULL, NULL, NULL, 'Martinica', 0),
(202, NULL, NULL, NULL, NULL, 'Mauricio', 0),
(205, NULL, NULL, NULL, NULL, 'Myanmar', 0),
(207, NULL, NULL, NULL, NULL, 'Antillas Holandesas', 0),
(208, NULL, NULL, NULL, NULL, 'Nueva Caledonia', 0),
(209, NULL, NULL, NULL, NULL, 'Nicaragua', 0),
(210, NULL, NULL, NULL, NULL, 'Níger', 0),
(212, NULL, NULL, NULL, NULL, 'Norfolk Island', 0),
(213, NULL, NULL, NULL, NULL, 'Omán', 0),
(215, NULL, NULL, NULL, NULL, 'Isla Pitcairn', 0),
(216, NULL, NULL, NULL, NULL, 'Qatar', 0),
(217, NULL, NULL, NULL, NULL, 'Ruanda', 0),
(218, NULL, NULL, NULL, NULL, 'Santa Elena', 0),
(219, NULL, NULL, NULL, NULL, 'San Cristobal y Nevis', 0),
(220, NULL, NULL, NULL, NULL, 'Santa Lucía', 0),
(221, NULL, NULL, NULL, NULL, 'San Pedro y Miquelón', 0),
(222, NULL, NULL, NULL, NULL, 'San Vincente y Granadinas', 0),
(223, NULL, NULL, NULL, NULL, 'Samoa', 0),
(224, NULL, NULL, NULL, NULL, 'San Marino', 0),
(225, NULL, NULL, NULL, NULL, 'San Tomé y Príncipe', 0),
(226, NULL, NULL, NULL, NULL, 'Serbia y Montenegro', 0),
(227, NULL, NULL, NULL, NULL, 'Sierra Leona', 0),
(228, NULL, NULL, NULL, NULL, 'Islas Salomón', 0),
(229, NULL, NULL, NULL, NULL, 'Somalia', 0),
(232, NULL, NULL, NULL, NULL, 'Sudán', 0),
(234, NULL, NULL, NULL, NULL, 'Swazilandia', 0),
(235, NULL, NULL, NULL, NULL, 'Tokelau', 0),
(236, NULL, NULL, NULL, NULL, 'Tonga', 0),
(237, NULL, NULL, NULL, NULL, 'Trinidad y Tobago', 0),
(239, NULL, NULL, NULL, NULL, 'Tuvalu', 0),
(240, NULL, NULL, NULL, NULL, 'Vanuatu', 0),
(241, NULL, NULL, NULL, NULL, 'Wallis y Futuna', 0),
(242, NULL, NULL, NULL, NULL, 'Sáhara Occidental', 0),
(243, NULL, NULL, NULL, NULL, 'Yemen', 0),
(246, NULL, NULL, NULL, NULL, 'Puerto Rico', 0),
(247, '', NULL, '', NULL, 'fdgdfhhgf', 0),
(248, '', NULL, '', NULL, 'Nauru', 0),
(249, '', NULL, '', NULL, 'Australia', 0),
(250, 'ww', NULL, '92681.jpg', NULL, 'wwww', 0),
(251, 'ww', NULL, '694649.jpg', NULL, 'wwww', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `provincia_id` int(10) UNSIGNED NOT NULL COMMENT 'Cod provincia',
  `provincia_nombre` varchar(45) NOT NULL COMMENT 'Nombre',
  `estado_id` int(11) NOT NULL COMMENT 'Estado',
  `pais_id` int(10) NOT NULL COMMENT 'País'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recetas`
--

CREATE TABLE `recetas` (
  `receta_id` int(11) NOT NULL COMMENT 'Cod Receta',
  `receta_contenido` text COMMENT 'Contenido',
  `tratamiento_id` int(11) NOT NULL COMMENT 'Cod Tratamiento',
  `logo_id` int(11) NOT NULL COMMENT 'Cod Logo',
  `receta_pdf` varchar(45) DEFAULT NULL COMMENT 'PDF'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `recetas`
--

INSERT INTO `recetas` (`receta_id`, `receta_contenido`, `tratamiento_id`, `logo_id`, `receta_pdf`) VALUES
(1, '<p>fdhgfhfghg</p><p>gfhgjhgjghj</p><p>hjhkjhk</p><p>jh</p><p>lkhl</p><p>k</p><p>ñ</p><p><br></p><p>i</p><p>yu</p><p>k</p><p>uyk</p><p>tiityt</p>', 26, 3, '36688.pdf'),
(2, '<p>gfhfghgfhfh</p><p>gfh</p><p>fgh</p><p><br></p><p>gh</p><p>fgh</p><p>fgh</p><p>fgh</p><p>fgh</p><p>fgh</p><p><br></p><p>g</p><p>f</p><p>h</p><p>fhfh</p><p>fgh</p><p><br></p>', 27, 3, '908210.pdf'),
(3, '<p>dsfdsgffdg</p><p>fg</p><p><br></p><p>df</p><p>g</p><p>dfgd</p><p>gdg</p><p>dg</p><p>fgd</p><p>g</p><p>fdgdgfdg</p>', 28, 3, '580531.pdf'),
(4, '<p>cxvxcvcxv</p>', 29, 3, '346329.pdf'),
(5, '<p>cxvxcvcxv</p>', 30, 3, '469716.pdf'),
(6, '<p>cbcvbvc</p>', 31, 3, '681123.pdf'),
(7, '<p>bnbvghfgj</p>', 32, 3, '327440.pdf'),
(8, '<p>fgfdgfd</p>', 33, 3, '797854.pdf'),
(9, '<p>fgfdgfd</p>', 34, 3, '118153.pdf'),
(10, '<p>fgfdgfd</p>', 35, 3, '916991.pdf'),
(11, '<p>bvcbv</p>', 36, 3, '714550.pdf'),
(12, '<p>bvcbv</p>', 37, 3, '551483.pdf'),
(13, '<p>gfdgfdhfdh</p>', 38, 3, '396676.pdf'),
(14, '<p>gfdgfdhfdh</p>', 39, 3, '532562.pdf'),
(15, '<p>gfdgfdhfdh</p>', 40, 3, '802115.pdf'),
(16, '<p>dsfds</p>', 41, 3, '531151.pdf'),
(17, '<p>dfgfdgfdgfdgfdg</p>', 42, 3, '464792.pdf'),
(18, '<p>dfgfdgfdgfdgfdg</p>', 43, 3, '521671.pdf'),
(19, '<p>dfgfdgfdgfdgfdg</p>', 44, 3, '43324.pdf'),
(20, '<p>dfgfdgfdgfdgfdg</p>', 45, 3, '36802.pdf'),
(21, '<p>ddsfg</p>', 46, 3, '695318.pdf'),
(22, '<p>gfhgfh</p>', 47, 3, '262395.pdf'),
(23, '<p>fgfdg</p>', 48, 3, '795144.pdf'),
(24, '<p>dfgdfgdfg</p>', 49, 3, '30967.pdf'),
(25, '<p>cxvxcvcxvxvv</p>', 50, 3, '770240.pdf'),
(26, '<p>gfdgfdgfgdf</p>', 51, 3, '423821.pdf'),
(27, '<p>fgdf</p>', 52, 3, '635283.pdf'),
(28, '<p>fgdf</p>', 53, 3, '596313.pdf'),
(29, '<p>fgdf</p>', 54, 3, '916296.pdf'),
(30, '<p>fgdf</p>', 55, 3, '109850.pdf'),
(31, '<p>fgdf</p>', 56, 3, '498842.pdf'),
(32, '<p>fgdf</p>', 57, 3, '120480.pdf'),
(33, '<p>fgdf</p>', 58, 3, '953635.pdf'),
(34, '<p>fgdf</p>', 59, 3, '695359.pdf'),
(35, '<p>fgdf</p>', 60, 3, '660831.pdf'),
(36, '<p>fgdf</p>', 61, 3, '62051.pdf'),
(37, '<p>fgdf</p>', 62, 3, '560130.pdf'),
(38, '<p>fgdf</p>', 63, 3, '458763.pdf'),
(39, '<p>fgdf</p>', 64, 3, '804177.pdf'),
(40, '<p>fgdf</p>', 65, 3, '566938.pdf'),
(41, '<p>fgdf</p>', 66, 3, '0770.pdf'),
(42, '<p>dsfs</p>', 67, 3, '688365.pdf'),
(43, '<p>dsfs</p>', 68, 3, '642552.pdf'),
(44, '<p>dsfs</p>', 69, 3, '713538.pdf'),
(45, '<p>esto es una prueba</p>', 70, 3, '625971.pdf'),
(46, '<p>esto es una prueba</p>', 71, 3, '260847.pdf'),
(47, '<p>fgdfgfd</p>', 72, 3, '82725.pdf'),
(48, '<p>fdsfdsf</p>', 73, 3, '508676.pdf'),
(49, '<p>fdgfdg</p>', 74, 3, '91378.pdf'),
(50, '<p>sfds</p>', 75, 3, '401987.pdf'),
(51, '', 76, 3, '46192.pdf'),
(52, '<p>cxvcxvcxvxcvxcvxcvxcv</p><p>ds</p><p>f</p><p>sdf</p><p>dsf</p><p>dsfsdfsdfsd</p><p>fsd</p><p>f</p><p>sfdsfsf</p>', 77, 3, '672624.pdf'),
(53, '<p>cxvcxvcxvxcvxcvxcvxcv</p><p>ds</p><p>f</p><p>sdf</p><p>dsf</p><p>dsfsdfsdfsd</p><p>fsd</p><p>f</p><p>sfdsfsf</p>', 78, 3, '292578.pdf'),
(54, '<p>vxcv</p>', 79, 3, '559655.pdf'),
(55, '<p>vxcv</p>', 80, 3, '17224.pdf'),
(56, '<p>vxcv</p>', 81, 3, '576982.pdf'),
(57, '<p>vxcv</p>', 82, 3, '909699.pdf'),
(58, '<p>vxcv</p>', 83, 3, '904301.pdf'),
(59, '<p>vxcv</p>', 84, 3, '130885.pdf'),
(60, '<p>vxcv</p>', 85, 3, '30411.pdf'),
(61, '<p>vxcv</p>', 86, 3, '778998.pdf'),
(62, '<p>vxcv</p>', 87, 3, '487892.pdf'),
(63, '<p>vxcv</p>', 88, 3, '793918.pdf'),
(64, '<p>vxcv</p>', 89, 3, '950921.pdf'),
(65, '<p>vxcv</p>', 90, 3, '288988.pdf'),
(66, '<p>vxcv</p>', 91, 3, '252947.pdf'),
(67, '<p>vxcv</p>', 92, 3, '461649.pdf'),
(68, '<p>vxcv</p>', 93, 3, '291417.pdf'),
(69, '<p>vxcv</p>', 94, 3, '318136.pdf'),
(70, '<p>vxcv</p>', 95, 3, '471191.pdf'),
(71, '<p>vxcv</p>', 96, 3, '935589.pdf'),
(72, '<p>vxcv</p>', 97, 3, '192428.pdf'),
(73, '<p>vxcv</p>', 98, 3, '966699.pdf'),
(74, '<p>vxcv</p>', 99, 3, '307336.pdf'),
(75, '<p>vxcv</p>', 100, 3, '305113.pdf'),
(76, '<p>vxcv</p>', 101, 3, '776578.pdf'),
(77, '<p>vxcv</p>', 102, 3, '167679.pdf'),
(78, '<p>vxcv</p>', 103, 3, '800901.pdf'),
(79, '<p>vxcv</p>', 104, 3, '24394.pdf'),
(80, '<p>vxcv</p>', 105, 3, '945689.pdf'),
(81, '<p>vxcv</p>', 106, 3, '769847.pdf'),
(82, '<p>vxcv</p>', 107, 3, '190279.pdf'),
(83, '<p>vxcv</p>', 108, 3, '293839.pdf'),
(84, '<p>vxcv</p>', 109, 3, '377747.pdf'),
(85, '<p>vxcv</p>', 110, 3, '21565.pdf'),
(86, '<p>vxcv</p>', 111, 3, '819707.pdf'),
(87, '<p style=\"margin-left: 160px;\"><img src=\"https://tuagendamedica.com/themes/tuagendamedica/resources/images/post/86624405.jpg\"></p><p style=\"margin-left: 160px;\">ssfhdushfshduhdsg</p><p style=\"margin-left: 160px;\">gfdjgidfhsiudfhsuhufd</p><p style=\"margin-left: 160px;\"><br></p><p style=\"margin-left: 160px;\">fdg</p><p style=\"margin-left: 160px;\">fd</p><p style=\"margin-left: 160px;\">h</p><p style=\"margin-left: 160px;\">fgh</p><p style=\"margin-left: 160px;\">fgh</p><p style=\"margin-left: 160px;\">d</p><p style=\"margin-left: 160px;\">gf</p><p style=\"margin-left: 160px;\">gfj</p><p style=\"margin-left: 160px;\">hj</p><p style=\"margin-left: 160px;\">TUTUTUTUTUTUTTUUTUUTUTUTU</p>', 112, 3, '624690.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguros`
--

CREATE TABLE `seguros` (
  `seguro_id` int(10) NOT NULL COMMENT 'Cod Seguro',
  `seguro_logo` text NOT NULL COMMENT 'Logo',
  `seguro_pagina` varchar(150) NOT NULL COMMENT 'Página',
  `seguro_nombre` varchar(45) NOT NULL COMMENT 'Nombre',
  `seguro_resumen` text NOT NULL COMMENT 'Resumen',
  `seguro_fecha_creacion` datetime DEFAULT NULL COMMENT 'Fecha creacion',
  `seguro_fecha_actualizacion` datetime DEFAULT NULL COMMENT 'Fecha actualizacion',
  `seguro_status` tinyint(1) DEFAULT NULL COMMENT 'Status',
  `usuario_id` int(11) NOT NULL COMMENT 'Usuario'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `seguros`
--

INSERT INTO `seguros` (`seguro_id`, `seguro_logo`, `seguro_pagina`, `seguro_nombre`, `seguro_resumen`, `seguro_fecha_creacion`, `seguro_fecha_actualizacion`, `seguro_status`, `usuario_id`) VALUES
(1, '329136.jpg', 'http://www.segurospiramide.com/', 'Seguros Pirámide', 'Nacimos como compañía de seguros el 18 de Noviembre de 1975 bajo el nombre de Seguros Hipotecarios Urbanos C.A con el número de registro 21 del tomo 155A del Registro Mercantil I. Desde ese momento nos dedicamos a la realización de operaciones relacionadas con el seguro de hipotecas y para la época éramos la única empresa que se dedicaba a esta actividad en Caracas. Nuestras oficinas estaban ubicadas en la torre Credimático TDC de Colinas de Bello Monte y contábamos con aproximadamente 30 empleados.', '2017-09-14 10:00:08', '2017-09-14 10:22:22', 1, 1),
(2, '662864.jpg', 'http://www.seguroscaracas.com/portal/paginasv4/index.html', 'Seguros caracas', 'Nuestra misión como compañía de seguros es ofrecer soluciones integrales y oportunas de seguros individuales y empresariales con calidad de servicio superior para satisfacer las necesidades de protección y respaldo de la colectividad venezolana.\r\n\r\nPara ello contamos con la más amplia red de intermediación del mercado asegurador, con un equipo humano calificado, aliados de servicio de reconocida trayectoria y tecnología de punta.\r\n\r\nGeneramos beneficios que nos permiten cumplir nuestros compromisos con el bienestar social de nuestros asegurados, nuestra gente, la comunidad y los accionistas.', '2017-09-14 11:10:19', '2017-09-14 11:10:19', 1, 1),
(3, '829728.jpg', 'http://uniseguros.net.ve/', 'Seguros Uniseguros', '', '2017-09-14 11:23:15', '2017-09-14 11:23:15', 1, 1),
(4, '751276.jpg', 'https://www.mapfre.com.pa/seguros-pa/', 'Mapfre Panama', '', '2017-09-14 11:44:10', '2017-09-14 11:44:10', 1, 1),
(5, '485718.jpg', 'http://www.assanet.com/', 'ASSA Compañía de Seguros', '', '2017-10-10 10:44:00', '2017-10-10 10:44:00', 1, 36),
(6, '987956.jpg', 'http://isweb.iseguros.com/iseguros/', 'Internacional de Seguros', 'Internacional de Seguros', '2017-10-10 10:48:26', '2017-10-10 10:48:26', 1, 36),
(7, '49809.jpg', 'https://www.google.co.ve/', 'Seguro Canaima', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', '2017-10-17 10:24:25', '2017-10-17 12:36:15', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguros_clinicas`
--

CREATE TABLE `seguros_clinicas` (
  `seguro_id` int(10) NOT NULL COMMENT 'Seguro',
  `clinica_id` int(10) NOT NULL COMMENT 'Clinica',
  `seguro_clinica_id` int(11) NOT NULL COMMENT 'Cod Seguro/clinica'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `seguros_clinicas`
--

INSERT INTO `seguros_clinicas` (`seguro_id`, `clinica_id`, `seguro_clinica_id`) VALUES
(2, 5, 1),
(2, 4, 2),
(4, 7, 3),
(1, 3, 4),
(3, 6, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguros_paises_estados`
--

CREATE TABLE `seguros_paises_estados` (
  `seguro_id` int(10) NOT NULL COMMENT 'Seguro',
  `estado_id` int(11) NOT NULL COMMENT 'Estado',
  `pais_id` int(10) NOT NULL COMMENT 'País',
  `seguro_pais_estado_id` int(11) NOT NULL COMMENT ' Cod Seguro/pais/estado'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `seguros_paises_estados`
--

INSERT INTO `seguros_paises_estados` (`seguro_id`, `estado_id`, `pais_id`, `seguro_pais_estado_id`) VALUES
(1, 1866, 95, 1),
(1, 1849, 95, 2),
(1, 1846, 95, 3),
(2, 1866, 95, 4),
(2, 1864, 95, 5),
(2, 1852, 95, 6),
(2, 1844, 95, 7),
(3, 1866, 95, 8),
(3, 1855, 95, 9),
(4, 1773, 124, 10),
(5, 2204, 124, 11),
(6, 2204, 124, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tratamientos`
--

CREATE TABLE `tratamientos` (
  `tratamiento_id` int(11) NOT NULL COMMENT 'Cod Tratamiento',
  `tratamiento_cantidad` int(11) DEFAULT NULL COMMENT 'Cantidad',
  `tratamiento_dias` int(11) NOT NULL COMMENT 'Dias',
  `tratamiento_fecha_comienzo` timestamp NULL DEFAULT NULL COMMENT 'Fecha de comienzo',
  `tratamiento_fecha_hora` text COMMENT 'Hora de comienzo',
  `presentacion_id` int(10) NOT NULL COMMENT 'Presentación',
  `medicamento_id` int(11) NOT NULL COMMENT 'Medicina',
  `cita_medica_id` int(11) NOT NULL COMMENT 'Cod Cita Medica',
  `intervalo_id` int(10) NOT NULL COMMENT 'Intervalo',
  `tratamiento_horas` int(11) NOT NULL COMMENT 'Horas',
  `tiempo_id` int(10) NOT NULL COMMENT 'Tiempo',
  `tratamiento_recomendaciones` text COMMENT 'recomendaciones',
  `miligramo_id` int(10) NOT NULL COMMENT 'Miligramos'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tratamientos`
--

INSERT INTO `tratamientos` (`tratamiento_id`, `tratamiento_cantidad`, `tratamiento_dias`, `tratamiento_fecha_comienzo`, `tratamiento_fecha_hora`, `presentacion_id`, `medicamento_id`, `cita_medica_id`, `intervalo_id`, `tratamiento_horas`, `tiempo_id`, `tratamiento_recomendaciones`, `miligramo_id`) VALUES
(9, 8, 5, '2017-10-09 04:00:00', '01:00 PM', 24, 1, 20, 29, 4, 26, '', 0),
(10, 250, 7, '2017-10-06 04:00:00', '08:00 AM', 24, 1, 17, 29, 8, 26, '', 0),
(11, NULL, 5, '2017-10-10 04:00:00', '12:00 AM', 24, 1, 24, 29, 4, 26, NULL, 30),
(12, NULL, 5, '2017-10-10 04:00:00', '12:00 AM', 24, 1, 24, 29, 4, 26, NULL, 30),
(13, NULL, 5, '2017-10-10 04:00:00', '12:00 AM', 24, 1, 24, 29, 4, 26, NULL, 30),
(14, NULL, 5, '2017-10-10 04:00:00', '12:00 AM', 24, 1, 24, 29, 4, 26, NULL, 30),
(15, NULL, 2, '2017-10-11 04:00:00', '12:00 AM', 24, 1, 24, 28, 2, 26, NULL, 0),
(16, NULL, 5, '2017-10-17 04:00:00', '10:00 AM', 24, 1, 35, 29, 8, 26, NULL, 0),
(17, 10, 1, '2017-10-11 04:00:00', '11:06 AM', 25, 1, 38, 28, 5, 27, NULL, 30),
(18, 10, 1, '2017-10-11 04:00:00', '12:00 PM', 24, 1, 38, 28, 10, 27, NULL, 30),
(19, 4, 2, '2017-10-11 04:00:00', '12:28 AM', 24, 1, 38, 28, 5, 26, NULL, 30),
(20, 2, 2, '2017-10-11 04:00:00', '12:28 PM', 25, 1, 38, 28, 5, 26, NULL, 30),
(21, 4, 1, '2017-10-11 04:00:00', '12:43 PM', 24, 1, 38, 28, 10, 26, NULL, 30),
(22, 4, 2, '2017-10-11 04:00:00', '01:33 PM', 24, 1, 38, 28, 5, 26, NULL, 30),
(23, 5, 8, '2017-10-11 04:00:00', '03:11 PM', 24, 1, 13, 28, 4, 26, NULL, 30),
(24, 4, 2, '2017-10-11 04:00:00', '03:17 PM', 24, 1, 38, 28, 2, 26, NULL, 30),
(25, 1, 5, '2017-10-13 04:00:00', '04:00 PM', 24, 1, 36, 29, 6, 26, NULL, 30),
(26, 1, 1, '2017-10-12 04:00:00', '12:00 AM', 24, 1, 24, 28, 1, 26, NULL, 30),
(27, 1, 1, '2017-10-20 04:00:00', '12:00 AM', 24, 1, 24, 28, 1, 26, NULL, 30),
(28, 1, 1, '2017-10-19 04:00:00', '12:00 AM', 24, 1, 24, 28, 1, 26, NULL, 30),
(29, 1, 1, '2017-10-18 04:00:00', '12:00 AM', 24, 1, 24, 28, 1, 26, NULL, 30),
(30, 1, 1, '2017-10-18 04:00:00', '12:00 AM', 24, 1, 24, 28, 1, 26, NULL, 30),
(31, 1, 1, '2017-10-19 04:00:00', '12:00 AM', 24, 1, 24, 28, 1, 26, NULL, 30),
(32, 1, 1, '2017-10-13 04:00:00', '12:00 AM', 24, 1, 24, 28, 1, 26, NULL, 30),
(33, 1, 1, '2017-10-19 04:00:00', '12:00 AM', 24, 1, 24, 28, 1, 26, NULL, 30),
(34, 1, 1, '2017-10-19 04:00:00', '12:00 AM', 24, 1, 24, 28, 1, 26, NULL, 30),
(35, 1, 1, '2017-10-19 04:00:00', '12:00 AM', 24, 1, 24, 28, 1, 26, NULL, 30),
(36, 1, 1, NULL, '12:00 AM', 24, 1, 38, 28, 1, 26, NULL, 30),
(37, 1, 1, NULL, '12:00 AM', 24, 1, 38, 28, 1, 26, NULL, 30),
(38, 1, 1, '2017-10-27 04:00:00', '12:00 AM', 24, 1, 38, 28, 1, 26, NULL, 30),
(39, 1, 1, '2017-10-27 04:00:00', '12:00 AM', 24, 1, 38, 28, 1, 26, NULL, 30),
(40, 1, 1, '2017-10-27 04:00:00', '12:00 AM', 24, 1, 38, 28, 1, 26, NULL, 30),
(41, 2, 2, '2017-10-14 04:00:00', '12:00 AM', 24, 1, 38, 28, 2, 26, NULL, 31),
(42, 1, 1, '2017-10-20 04:00:00', '12:00 AM', 24, 1, 38, 28, 1, 26, NULL, 30),
(43, 1, 1, '2017-10-20 04:00:00', '12:00 AM', 24, 1, 38, 28, 1, 26, NULL, 30),
(44, 1, 1, '2017-10-20 04:00:00', '12:00 AM', 24, 1, 38, 28, 1, 26, NULL, 30),
(45, 1, 1, '2017-10-20 04:00:00', '12:00 AM', 24, 1, 38, 28, 1, 26, NULL, 30),
(46, 1, 1, '2017-10-26 04:00:00', '12:00 AM', 24, 1, 38, 28, 1, 26, NULL, 30),
(47, 1, 1, '2017-10-20 04:00:00', '12:00 AM', 24, 1, 38, 28, 1, 26, NULL, 30),
(48, 1, 1, '2017-10-20 04:00:00', '12:00 AM', 24, 1, 38, 28, 1, 26, NULL, 31),
(49, 1, 1, '2017-10-20 04:00:00', '12:00 AM', 24, 1, 38, 28, 1, 26, NULL, 30),
(50, 1, 1, '2017-10-27 04:00:00', '12:00 AM', 24, 1, 38, 28, 1, 26, NULL, 30),
(51, 1, 1, '2017-10-27 04:00:00', '12:00 AM', 24, 1, 38, 28, 1, 26, NULL, 30),
(52, 1, 1, '2017-10-26 04:00:00', '12:00 AM', 24, 1, 38, 28, 1, 26, NULL, 30),
(53, 1, 1, '2017-10-26 04:00:00', '12:00 AM', 24, 1, 38, 28, 1, 26, NULL, 30),
(54, 1, 1, '2017-10-26 04:00:00', '12:00 AM', 24, 1, 38, 28, 1, 26, NULL, 30),
(55, 1, 1, '2017-10-26 04:00:00', '12:00 AM', 24, 1, 38, 28, 1, 26, NULL, 30),
(56, 1, 1, '2017-10-26 04:00:00', '12:00 AM', 24, 1, 38, 28, 1, 26, NULL, 30),
(57, 1, 1, '2017-10-26 04:00:00', '12:00 AM', 24, 1, 38, 28, 1, 26, NULL, 30),
(58, 1, 1, '2017-10-26 04:00:00', '12:00 AM', 24, 1, 38, 28, 1, 26, NULL, 30),
(59, 1, 1, '2017-10-26 04:00:00', '12:00 AM', 24, 1, 38, 28, 1, 26, NULL, 30),
(60, 1, 1, '2017-10-26 04:00:00', '12:00 AM', 24, 1, 38, 28, 1, 26, NULL, 30),
(61, 1, 1, '2017-10-26 04:00:00', '12:00 AM', 24, 1, 38, 28, 1, 26, NULL, 30),
(62, 1, 1, '2017-10-26 04:00:00', '12:00 AM', 24, 1, 38, 28, 1, 26, NULL, 30),
(63, 1, 1, '2017-10-26 04:00:00', '12:00 AM', 24, 1, 38, 28, 1, 26, NULL, 30),
(64, 1, 1, '2017-10-26 04:00:00', '12:00 AM', 24, 1, 38, 28, 1, 26, NULL, 30),
(65, 1, 1, '2017-10-26 04:00:00', '12:00 AM', 24, 1, 38, 28, 1, 26, NULL, 30),
(66, 1, 1, '2017-10-26 04:00:00', '12:00 AM', 24, 1, 38, 28, 1, 26, NULL, 30),
(67, 1, 1, '2017-10-26 04:00:00', '12:00 AM', 24, 1, 38, 28, 1, 26, NULL, 30),
(68, 1, 1, '2017-10-26 04:00:00', '12:00 AM', 24, 1, 38, 28, 1, 26, NULL, 30),
(69, 1, 1, '2017-10-26 04:00:00', '12:00 AM', 24, 1, 38, 28, 1, 26, NULL, 30),
(70, 4, 1, '2017-10-16 04:00:00', '09:00 PM', 25, 1, 24, 29, 2, 26, NULL, 31),
(71, 4, 1, '2017-10-16 04:00:00', '09:00 PM', 25, 1, 24, 29, 2, 26, NULL, 31),
(72, 2, 1, '2017-10-16 04:00:00', '09:25 PM', 24, 1, 12, 29, 1, 26, NULL, 30),
(73, 3, 1, '2017-10-16 04:00:00', '08:25 PM', 24, 1, 20, 28, 45, 26, NULL, 30),
(74, 3, 1, NULL, '07:08 PM', 24, 1, 38, 29, 2, 26, NULL, 30),
(75, 2, 1, '2017-10-16 04:00:00', '07:30 PM', 24, 1, 17, 29, 3, 26, NULL, 30),
(76, 2, 2, '2017-10-16 04:00:00', '07:30 PM', 24, 1, 24, 28, 2, 26, NULL, 30),
(77, 2, 2, '2017-10-19 04:00:00', '12:00 AM', 24, 1, 23, 28, 2, 26, NULL, 30),
(78, 2, 2, '2017-10-19 04:00:00', '12:00 AM', 24, 1, 23, 28, 2, 26, NULL, 30),
(79, 1, 1, '2017-10-20 04:00:00', '12:00 AM', 24, 1, 23, 28, 1, 26, NULL, 30),
(80, 1, 1, '2017-10-20 04:00:00', '12:00 AM', 24, 1, 23, 28, 1, 26, NULL, 30),
(81, 1, 1, '2017-10-20 04:00:00', '12:00 AM', 24, 1, 23, 28, 1, 26, NULL, 30),
(82, 1, 1, '2017-10-20 04:00:00', '12:00 AM', 24, 1, 23, 28, 1, 26, NULL, 30),
(83, 1, 1, '2017-10-20 04:00:00', '12:00 AM', 24, 1, 23, 28, 1, 26, NULL, 30),
(84, 1, 1, '2017-10-20 04:00:00', '12:00 AM', 24, 1, 23, 28, 1, 26, NULL, 30),
(85, 1, 1, '2017-10-20 04:00:00', '12:00 AM', 24, 1, 23, 28, 1, 26, NULL, 30),
(86, 1, 1, '2017-10-20 04:00:00', '12:00 AM', 24, 1, 23, 28, 1, 26, NULL, 30),
(87, 1, 1, '2017-10-20 04:00:00', '12:00 AM', 24, 1, 23, 28, 1, 26, NULL, 30),
(88, 1, 1, '2017-10-20 04:00:00', '12:00 AM', 24, 1, 23, 28, 1, 26, NULL, 30),
(89, 1, 1, '2017-10-20 04:00:00', '12:00 AM', 24, 1, 23, 28, 1, 26, NULL, 30),
(90, 1, 1, '2017-10-20 04:00:00', '12:00 AM', 24, 1, 23, 28, 1, 26, NULL, 30),
(91, 1, 1, '2017-10-20 04:00:00', '12:00 AM', 24, 1, 23, 28, 1, 26, NULL, 30),
(92, 1, 1, '2017-10-20 04:00:00', '12:00 AM', 24, 1, 23, 28, 1, 26, NULL, 30),
(93, 1, 1, '2017-10-20 04:00:00', '12:00 AM', 24, 1, 23, 28, 1, 26, NULL, 30),
(94, 1, 1, '2017-10-20 04:00:00', '12:00 AM', 24, 1, 23, 28, 1, 26, NULL, 30),
(95, 1, 1, '2017-10-20 04:00:00', '12:00 AM', 24, 1, 23, 28, 1, 26, NULL, 30),
(96, 1, 1, '2017-10-20 04:00:00', '12:00 AM', 24, 1, 23, 28, 1, 26, NULL, 30),
(97, 1, 1, '2017-10-20 04:00:00', '12:00 AM', 24, 1, 23, 28, 1, 26, NULL, 30),
(98, 1, 1, '2017-10-20 04:00:00', '12:00 AM', 24, 1, 23, 28, 1, 26, NULL, 30),
(99, 1, 1, '2017-10-20 04:00:00', '12:00 AM', 24, 1, 23, 28, 1, 26, NULL, 30),
(100, 1, 1, '2017-10-20 04:00:00', '12:00 AM', 24, 1, 23, 28, 1, 26, NULL, 30),
(101, 1, 1, '2017-10-20 04:00:00', '12:00 AM', 24, 1, 23, 28, 1, 26, NULL, 30),
(102, 1, 1, '2017-10-20 04:00:00', '12:00 AM', 24, 1, 23, 28, 1, 26, NULL, 30),
(103, 1, 1, '2017-10-20 04:00:00', '12:00 AM', 24, 1, 23, 28, 1, 26, NULL, 30),
(104, 1, 1, '2017-10-20 04:00:00', '12:00 AM', 24, 1, 23, 28, 1, 26, NULL, 30),
(105, 1, 1, '2017-10-20 04:00:00', '12:00 AM', 24, 1, 23, 28, 1, 26, NULL, 30),
(106, 1, 1, '2017-10-20 04:00:00', '12:00 AM', 24, 1, 23, 28, 1, 26, NULL, 30),
(107, 1, 1, '2017-10-20 04:00:00', '12:00 AM', 24, 1, 23, 28, 1, 26, NULL, 30),
(108, 1, 1, '2017-10-20 04:00:00', '12:00 AM', 24, 1, 23, 28, 1, 26, NULL, 30),
(109, 1, 1, '2017-10-20 04:00:00', '12:00 AM', 24, 1, 23, 28, 1, 26, NULL, 30),
(110, 1, 1, '2017-10-20 04:00:00', '12:00 AM', 24, 1, 23, 28, 1, 26, NULL, 30),
(111, 1, 1, '2017-10-20 04:00:00', '12:00 AM', 24, 1, 23, 28, 1, 26, NULL, 30),
(112, 1, 1, '2017-10-11 04:00:00', '12:00 AM', 24, 1, 23, 28, 1, 26, NULL, 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `usuario_id` int(11) NOT NULL COMMENT 'Id',
  `usuario_nombre` varchar(45) NOT NULL COMMENT 'Nombre ',
  `usuario_apellido` varchar(45) NOT NULL COMMENT 'Apellido',
  `usuario_login` varchar(45) NOT NULL COMMENT 'Inicio',
  `usuario_password` text NOT NULL COMMENT 'Clave',
  `usuario_fecha_creacion` datetime DEFAULT NULL COMMENT 'Fecha de creacion',
  `usuario_fecha_modificacion` datetime DEFAULT NULL COMMENT 'Fecha de modificacion',
  `usuario_fecha_ultimo_acceso` datetime DEFAULT NULL COMMENT 'Fecha de ultimo  acceso',
  `usuario_email` text NOT NULL COMMENT 'Telefono primario',
  `usuario_telefono_1` varchar(15) DEFAULT NULL,
  `usuario_telefono_2` varchar(15) DEFAULT NULL COMMENT 'Telefono secundario',
  `usuario_direccion` text COMMENT 'Direccion',
  `usuario_activo` tinyint(1) DEFAULT NULL COMMENT 'conexion',
  `usuario_online` tinyint(1) DEFAULT NULL,
  `usuario_perfil` varchar(45) NOT NULL COMMENT 'Perfil',
  `usuario_imagen_1` text COMMENT 'Imagen 1',
  `usuario_estado` varchar(20) DEFAULT NULL COMMENT 'Estado',
  `usuario_mensaje_publico` varchar(100) DEFAULT NULL COMMENT 'Mensaje publico',
  `usuario_genero` varchar(45) DEFAULT NULL COMMENT 'Genero',
  `usuario_fecha_nacimiento` datetime DEFAULT NULL COMMENT 'Fecha nacimiento',
  `authKey` text COMMENT 'autkey',
  `accessToken` text COMMENT 'acceso a token',
  `pais_id` int(10) DEFAULT NULL COMMENT 'País',
  `usuario_codigo` int(11) DEFAULT NULL,
  `usuario_fecha_codigo` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`usuario_id`, `usuario_nombre`, `usuario_apellido`, `usuario_login`, `usuario_password`, `usuario_fecha_creacion`, `usuario_fecha_modificacion`, `usuario_fecha_ultimo_acceso`, `usuario_email`, `usuario_telefono_1`, `usuario_telefono_2`, `usuario_direccion`, `usuario_activo`, `usuario_online`, `usuario_perfil`, `usuario_imagen_1`, `usuario_estado`, `usuario_mensaje_publico`, `usuario_genero`, `usuario_fecha_nacimiento`, `authKey`, `accessToken`, `pais_id`, `usuario_codigo`, `usuario_fecha_codigo`) VALUES
(1, 'Brayan', 'Ochoa', 'brayad@gmail.com', '202cb962ac59075b964b07152d234b70', '2017-01-05 19:04:47', '2017-01-05 19:04:47', NULL, 'brayad@gmail.com', '+584167235018', NULL, NULL, 1, 0, 'administrador', 'avatar1.png', NULL, NULL, NULL, '1970-01-01 04:00:00', NULL, NULL, 95, 0, '0000-00-00'),
(33, 'erick', 'araque', 'antony2013_araque@hotmail.com', 'dc779f2c50675a2de4bdd6e95b6ec2b7', '2017-10-03 21:14:33', '2017-10-04 02:03:49', NULL, 'antony2013_araque@hotmail.com', '02128732006', '02128732006', NULL, 1, NULL, 'paciente', NULL, NULL, NULL, NULL, '1969-12-31 00:00:00', NULL, NULL, 1, 0, '0000-00-00'),
(34, 'antony', 'araque', 'erick.araque.bmo@gmail.com', '9d886f7eb115dee99c494b65386551fb', '2017-10-04 14:49:47', '2017-10-07 14:00:28', NULL, 'erick.araque.bmo@gmail.com', '04168228888', NULL, NULL, 1, NULL, 'doctor', NULL, NULL, NULL, NULL, '1970-01-01 00:00:00', NULL, NULL, 95, 25733935, '2017-10-04'),
(35, 'Julio', 'Castellanos', 'julioc.pty@gmail.com', 'bcaaaba1aa4655385965eea728f29e05', '2017-10-04 16:24:58', '2017-10-04 16:24:58', NULL, 'julioc.pty@gmail.com', '66709506', '', NULL, 1, NULL, 'paciente', NULL, NULL, NULL, NULL, '1978-05-30 00:00:00', NULL, NULL, 1, 0, '0000-00-00'),
(36, 'tuagenda', 'tuagenda', 'tuagendamedica@gmail.com', '76d6cb9e042edffd28209d37cf91b374', '2017-10-04 16:30:52', '2017-10-04 16:30:52', NULL, 'tuagendamedica@gmail.com', NULL, NULL, NULL, NULL, NULL, 'administrador', '', NULL, NULL, NULL, '1970-01-01 00:00:00', NULL, NULL, 2, 0, '0000-00-00'),
(37, 'victor', 'araque', 'araquevictor10@hotmail.com', 'dc779f2c50675a2de4bdd6e95b6ec2b7', '2017-10-04 21:38:59', '2017-10-04 21:38:59', NULL, 'araquevictor10@hotmail.com', '04142818401', '02128732006', NULL, 1, NULL, 'paciente', NULL, NULL, NULL, NULL, '1985-12-14 00:00:00', NULL, NULL, 1, 0, '0000-00-00'),
(38, 'Florexy', 'Leon', 'florexy@hotmail.com', 'c466c2bf91d9345a6903eed92020643b', '2017-10-05 14:05:24', '2017-10-05 14:05:24', NULL, 'florexy@hotmail.com', '6666666', '', NULL, 1, NULL, 'paciente', NULL, NULL, NULL, NULL, '1984-02-03 00:00:00', NULL, NULL, 1, 0, '0000-00-00'),
(40, 'Julio Cesar', 'Castellanos Everts', 'julioc-ve@hotmail.com', '45c6708a6e690dc22395dc8ee81556c7', '2017-10-10 13:18:07', '2017-10-10 17:37:03', NULL, 'julioc-ve@hotmail.com', '66709506', NULL, NULL, 1, NULL, 'doctor', '', NULL, NULL, NULL, '1970-01-01 00:00:00', NULL, NULL, 124, 0, '0000-00-00'),
(41, 'Florexy', 'Leon', 'info@pcnet-solutions.com', 'c466c2bf91d9345a6903eed92020643b', '2017-10-10 14:57:25', '2017-10-10 14:57:25', NULL, 'info@pcnet-solutions.com', '66709506', NULL, NULL, 1, NULL, 'doctor', 'avatar2.png', NULL, NULL, NULL, '1970-01-01 00:00:00', NULL, NULL, 95, 0, '0000-00-00'),
(42, 'osmer', 'abreu', 'osmer@gmail.com', '32490d39df359f3bb2b06b751aa5f13c', '2017-10-10 15:50:21', '2017-10-10 15:50:21', NULL, 'osmer@gmail.com', '123', NULL, NULL, 1, NULL, 'doctor', NULL, NULL, NULL, NULL, '1970-01-01 00:00:00', NULL, NULL, 124, 0, '0000-00-00'),
(44, 'Florexy', 'Leon', 'florexylh@gmail.com', '664d22ac107f6aff48a379d7571e52a3', '2017-10-10 21:50:35', '2017-10-10 21:50:35', NULL, 'florexylh@gmail.com', '61513861', '61513861', NULL, 1, NULL, 'paciente', 'avatar2.png', NULL, NULL, NULL, '1982-02-03 00:00:00', NULL, NULL, 1, 0, '0000-00-00'),
(45, 'osmer', 'abreu', 'osmer.abreu.bmo@gmail.com', '0ac9229e4994a8785a9c3fc172ba19db', '2017-10-11 14:50:42', '2017-10-11 14:50:42', NULL, 'osmer.abreu.bmo@gmail.com', '123', '123', NULL, 1, NULL, 'paciente', NULL, NULL, NULL, NULL, '2017-10-12 00:00:00', NULL, NULL, 1, 0, '0000-00-00'),
(48, 'Usuario Paciente', 'UP', 'paciente.tuagenda@gmail.com', 'f2e13479da4326c32c4ec038969b0583', '2017-10-18 12:36:06', '2017-10-18 12:36:06', NULL, 'paciente.tuagenda@gmail.com', '+584167235018', '+582128737413', NULL, 1, NULL, 'paciente', NULL, NULL, NULL, NULL, '1988-12-08 00:00:00', NULL, NULL, 1, 0, '0000-00-00'),
(50, 'Usuario Doctor', 'UD', 'doctor.tuagenda@gmail.com', 'f2e13479da4326c32c4ec038969b0583', '2017-10-18 16:24:50', '2017-10-18 16:24:50', NULL, 'doctor.tuagenda@gmail.com', '15151516', NULL, NULL, 1, NULL, 'doctor', NULL, NULL, NULL, NULL, '1970-01-01 00:00:00', NULL, NULL, 124, 0, '0000-00-00'),
(51, 'sffgd', 'gsfdgfdsgfsd', 'brayads@gmail.com', '8ce87b8ec346ff4c80635f667d1592ae', '2017-10-18 16:25:56', '2017-10-18 16:25:56', NULL, 'brayads@gmail.com', '04167235018', NULL, NULL, 1, NULL, 'doctor', NULL, NULL, NULL, NULL, '1970-01-01 00:00:00', NULL, NULL, 95, 0, '0000-00-00'),
(52, 'sgfsgf', 'dgfdsgsfd', 'fdsfdsfsd@sadas.com', '50f3ae0da3deaae3c0c2cecbac6e49ec', '2017-10-18 16:29:22', '2017-10-18 16:29:22', NULL, 'fdsfdsfsd@sadas.com', '4543543', NULL, NULL, 1, NULL, 'doctor', NULL, NULL, NULL, NULL, '1970-01-01 00:00:00', NULL, NULL, 95, 0, '0000-00-00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asistentes`
--
ALTER TABLE `asistentes`
  ADD PRIMARY KEY (`asistente_id`);

--
-- Indices de la tabla `citas_estatus`
--
ALTER TABLE `citas_estatus`
  ADD PRIMARY KEY (`cita_estatus_id`);

--
-- Indices de la tabla `citas_medicas`
--
ALTER TABLE `citas_medicas`
  ADD PRIMARY KEY (`cita_medica_id`),
  ADD KEY `fk_citas_medicas_users1_idx` (`paciente_id`),
  ADD KEY `fk_citas_medicas_users2_idx` (`doctor_id`),
  ADD KEY `fk_citas_medicas_especialidades1_idx` (`especialidad_id`),
  ADD KEY `fk_citas_medicas_citas_estatus1_idx` (`cita_estatus_id`),
  ADD KEY `fk_citas_medicas_clinicas1_idx` (`clinica_id`),
  ADD KEY `fk_citas_medicas_familiares1_idx` (`familiar_id`);

--
-- Indices de la tabla `clinicas`
--
ALTER TABLE `clinicas`
  ADD PRIMARY KEY (`clinica_id`),
  ADD KEY `fk_clinicas_paises1_idx` (`pais_id`),
  ADD KEY `fk_clinicas_estados1_idx` (`estado_id`);

--
-- Indices de la tabla `clinicas_doctores`
--
ALTER TABLE `clinicas_doctores`
  ADD PRIMARY KEY (`clinica_doctor_id`),
  ADD KEY `fk_clinicas_has_doctores_doctores1_idx` (`doctor_id`),
  ADD KEY `fk_clinicas_has_doctores_clinicas1_idx` (`clinica_id`);

--
-- Indices de la tabla `cms_banners`
--
ALTER TABLE `cms_banners`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indices de la tabla `cms_categories`
--
ALTER TABLE `cms_categories`
  ADD PRIMARY KEY (`categorie_id`),
  ADD KEY `fk_cms_categories_cms_language1_idx` (`language_id`);

--
-- Indices de la tabla `cms_commens`
--
ALTER TABLE `cms_commens`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `fk_commens_posts1_idx` (`post_id`);

--
-- Indices de la tabla `cms_general_pages`
--
ALTER TABLE `cms_general_pages`
  ADD PRIMARY KEY (`general_pages_id`);

--
-- Indices de la tabla `cms_language`
--
ALTER TABLE `cms_language`
  ADD PRIMARY KEY (`language_id`);

--
-- Indices de la tabla `cms_postmeta`
--
ALTER TABLE `cms_postmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `fk_postmeta_posts1_idx` (`post_id`);

--
-- Indices de la tabla `cms_posts`
--
ALTER TABLE `cms_posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `fk_cms_posts_cms_language1_idx` (`language_id`);

--
-- Indices de la tabla `cms_subcategories`
--
ALTER TABLE `cms_subcategories`
  ADD PRIMARY KEY (`subcategorie_id`),
  ADD KEY `fk_subcategories_categories1_idx` (`categorie_id`),
  ADD KEY `fk_cms_subcategories_cms_language1_idx` (`language_id`);

--
-- Indices de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  ADD PRIMARY KEY (`configuracion_id`),
  ADD KEY `fk_configuracion_entidad_idx` (`entidad_id`);

--
-- Indices de la tabla `correos`
--
ALTER TABLE `correos`
  ADD PRIMARY KEY (`correo_id`);

--
-- Indices de la tabla `datos_fiscales`
--
ALTER TABLE `datos_fiscales`
  ADD PRIMARY KEY (`fiscal_id`),
  ADD KEY `fk_datos_fiscales_users1_idx` (`usuario_id`);

--
-- Indices de la tabla `doctores`
--
ALTER TABLE `doctores`
  ADD PRIMARY KEY (`doctor_id`),
  ADD KEY `fk_cms_doctores_users1_idx` (`usuario_id`);

--
-- Indices de la tabla `entidad`
--
ALTER TABLE `entidad`
  ADD PRIMARY KEY (`entidad_id`);

--
-- Indices de la tabla `especialidades`
--
ALTER TABLE `especialidades`
  ADD PRIMARY KEY (`especialidad_id`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`estado_id`),
  ADD KEY `fk_estados_paises1_idx` (`pais_id`);

--
-- Indices de la tabla `familiares`
--
ALTER TABLE `familiares`
  ADD PRIMARY KEY (`familiar_id`),
  ADD KEY `fk_familiares_users1_idx` (`usuario_id`),
  ADD KEY `fk_familiares_configuracion1_idx` (`familia_id`),
  ADD KEY `fk_familiares_configuracion2_idx` (`sexo_id`);

--
-- Indices de la tabla `historia_medica`
--
ALTER TABLE `historia_medica`
  ADD PRIMARY KEY (`historia_id`),
  ADD KEY `fk_cms_pacientes_users1_idx` (`usuario_id`),
  ADD KEY `fk_historia_medica_familiares1_idx` (`familiar_id`);

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`horario_id`);

--
-- Indices de la tabla `idiomas`
--
ALTER TABLE `idiomas`
  ADD PRIMARY KEY (`idioma_id`);

--
-- Indices de la tabla `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`logo_id`),
  ADD KEY `fk_logos_users1_idx` (`usuario_id`);

--
-- Indices de la tabla `medicamentos`
--
ALTER TABLE `medicamentos`
  ADD PRIMARY KEY (`medicamento_id`),
  ADD KEY `fk_medicamentos_users1_idx` (`usuario_id`);

--
-- Indices de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  ADD PRIMARY KEY (`notificacion_id`),
  ADD KEY `fk_Notificaciones_users1_idx` (`usuario_id`),
  ADD KEY `fk_Notificaciones_tratamientos1_idx` (`tratamiento_id`);

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`pais_id`),
  ADD KEY `fk_paises_idiomas1_idx` (`idioma_id`);

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`provincia_id`),
  ADD KEY `fk_provincias_estados1_idx` (`estado_id`),
  ADD KEY `fk_provincias_paises1_idx` (`pais_id`);

--
-- Indices de la tabla `recetas`
--
ALTER TABLE `recetas`
  ADD PRIMARY KEY (`receta_id`),
  ADD KEY `fk_recetas_tratamientos1_idx` (`tratamiento_id`),
  ADD KEY `fk_recetas_logos1_idx` (`logo_id`);

--
-- Indices de la tabla `seguros`
--
ALTER TABLE `seguros`
  ADD PRIMARY KEY (`seguro_id`),
  ADD KEY `fk_seguros_users1_idx` (`usuario_id`);

--
-- Indices de la tabla `seguros_clinicas`
--
ALTER TABLE `seguros_clinicas`
  ADD PRIMARY KEY (`seguro_clinica_id`),
  ADD KEY `fk_seguros_has_clinicas_clinicas1_idx` (`clinica_id`),
  ADD KEY `fk_seguros_has_clinicas_seguros1_idx` (`seguro_id`);

--
-- Indices de la tabla `seguros_paises_estados`
--
ALTER TABLE `seguros_paises_estados`
  ADD PRIMARY KEY (`seguro_pais_estado_id`),
  ADD KEY `fk_seguros_has_estados_estados1_idx` (`estado_id`),
  ADD KEY `fk_seguros_has_estados_seguros1_idx` (`seguro_id`),
  ADD KEY `fk_seguros_has_estados_paises1_idx` (`pais_id`);

--
-- Indices de la tabla `tratamientos`
--
ALTER TABLE `tratamientos`
  ADD PRIMARY KEY (`tratamiento_id`),
  ADD KEY `fk_tratamientos_configuracion1_idx` (`presentacion_id`),
  ADD KEY `fk_tratamientos_medicamentos1_idx` (`medicamento_id`),
  ADD KEY `fk_tratamientos_citas_medicas1_idx` (`cita_medica_id`),
  ADD KEY `fk_tratamientos_configuracion2_idx` (`intervalo_id`),
  ADD KEY `fk_tratamientos_configuracion3_idx` (`tiempo_id`),
  ADD KEY `fk_tratamientos_configuracion4_idx` (`miligramo_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usuario_id`),
  ADD KEY `fk_users_paises1_idx` (`pais_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asistentes`
--
ALTER TABLE `asistentes`
  MODIFY `asistente_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `citas_estatus`
--
ALTER TABLE `citas_estatus`
  MODIFY `cita_estatus_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `citas_medicas`
--
ALTER TABLE `citas_medicas`
  MODIFY `cita_medica_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Cod de cita medica', AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT de la tabla `clinicas`
--
ALTER TABLE `clinicas`
  MODIFY `clinica_id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Cod Clinica', AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `clinicas_doctores`
--
ALTER TABLE `clinicas_doctores`
  MODIFY `clinica_doctor_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Cod Clinica', AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `cms_banners`
--
ALTER TABLE `cms_banners`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT de la tabla `cms_categories`
--
ALTER TABLE `cms_categories`
  MODIFY `categorie_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id', AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `cms_commens`
--
ALTER TABLE `cms_commens`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id';
--
-- AUTO_INCREMENT de la tabla `cms_language`
--
ALTER TABLE `cms_language`
  MODIFY `language_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Cod  Lenguaje', AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `cms_postmeta`
--
ALTER TABLE `cms_postmeta`
  MODIFY `meta_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id';
--
-- AUTO_INCREMENT de la tabla `cms_posts`
--
ALTER TABLE `cms_posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id\n', AUTO_INCREMENT=349;
--
-- AUTO_INCREMENT de la tabla `cms_subcategories`
--
ALTER TABLE `cms_subcategories`
  MODIFY `subcategorie_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id';
--
-- AUTO_INCREMENT de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  MODIFY `configuracion_id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Configuracion', AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT de la tabla `datos_fiscales`
--
ALTER TABLE `datos_fiscales`
  MODIFY `fiscal_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'cod  fiscal';
--
-- AUTO_INCREMENT de la tabla `doctores`
--
ALTER TABLE `doctores`
  MODIFY `doctor_id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'cod doctor', AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `entidad`
--
ALTER TABLE `entidad`
  MODIFY `entidad_id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Cod entidad', AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `especialidades`
--
ALTER TABLE `especialidades`
  MODIFY `especialidad_id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Cod especialidad', AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `estado_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Cod estado', AUTO_INCREMENT=2206;
--
-- AUTO_INCREMENT de la tabla `familiares`
--
ALTER TABLE `familiares`
  MODIFY `familiar_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Cod familia', AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT de la tabla `historia_medica`
--
ALTER TABLE `historia_medica`
  MODIFY `historia_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'cod paciente', AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `horarios`
--
ALTER TABLE `horarios`
  MODIFY `horario_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Horario', AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `idiomas`
--
ALTER TABLE `idiomas`
  MODIFY `idioma_id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Cod idioma';
--
-- AUTO_INCREMENT de la tabla `logos`
--
ALTER TABLE `logos`
  MODIFY `logo_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Cod Logo', AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `medicamentos`
--
ALTER TABLE `medicamentos`
  MODIFY `medicamento_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Cod Medicamento', AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  MODIFY `notificacion_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Cod notificación', AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT de la tabla `paises`
--
ALTER TABLE `paises`
  MODIFY `pais_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=252;
--
-- AUTO_INCREMENT de la tabla `provincias`
--
ALTER TABLE `provincias`
  MODIFY `provincia_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Cod provincia';
--
-- AUTO_INCREMENT de la tabla `recetas`
--
ALTER TABLE `recetas`
  MODIFY `receta_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Cod Receta', AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT de la tabla `seguros`
--
ALTER TABLE `seguros`
  MODIFY `seguro_id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Cod Seguro', AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `seguros_clinicas`
--
ALTER TABLE `seguros_clinicas`
  MODIFY `seguro_clinica_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Cod Seguro/clinica', AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `seguros_paises_estados`
--
ALTER TABLE `seguros_paises_estados`
  MODIFY `seguro_pais_estado_id` int(11) NOT NULL AUTO_INCREMENT COMMENT ' Cod Seguro/pais/estado', AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `tratamientos`
--
ALTER TABLE `tratamientos`
  MODIFY `tratamiento_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Cod Tratamiento', AUTO_INCREMENT=113;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id', AUTO_INCREMENT=53;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citas_medicas`
--
ALTER TABLE `citas_medicas`
  ADD CONSTRAINT `fk_citas_medicas_citas_estatus1` FOREIGN KEY (`cita_estatus_id`) REFERENCES `citas_estatus` (`cita_estatus_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_citas_medicas_clinicas1` FOREIGN KEY (`clinica_id`) REFERENCES `clinicas` (`clinica_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_citas_medicas_especialidades1` FOREIGN KEY (`especialidad_id`) REFERENCES `especialidades` (`especialidad_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_citas_medicas_familiares1` FOREIGN KEY (`familiar_id`) REFERENCES `familiares` (`familiar_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_citas_medicas_users1` FOREIGN KEY (`paciente_id`) REFERENCES `users` (`usuario_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_citas_medicas_users2` FOREIGN KEY (`doctor_id`) REFERENCES `users` (`usuario_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `clinicas`
--
ALTER TABLE `clinicas`
  ADD CONSTRAINT `fk_clinicas_estados1` FOREIGN KEY (`estado_id`) REFERENCES `estados` (`estado_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_clinicas_paises1` FOREIGN KEY (`pais_id`) REFERENCES `paises` (`pais_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `clinicas_doctores`
--
ALTER TABLE `clinicas_doctores`
  ADD CONSTRAINT `fk_clinicas_has_doctores_clinicas1` FOREIGN KEY (`clinica_id`) REFERENCES `clinicas` (`clinica_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_clinicas_has_doctores_doctores1` FOREIGN KEY (`doctor_id`) REFERENCES `doctores` (`doctor_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  ADD CONSTRAINT `fk_Notificaciones_tratamientos1` FOREIGN KEY (`tratamiento_id`) REFERENCES `tratamientos` (`tratamiento_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Notificaciones_users1` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`usuario_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `recetas`
--
ALTER TABLE `recetas`
  ADD CONSTRAINT `fk_recetas_logos1` FOREIGN KEY (`logo_id`) REFERENCES `logos` (`logo_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_recetas_tratamientos1` FOREIGN KEY (`tratamiento_id`) REFERENCES `tratamientos` (`tratamiento_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
