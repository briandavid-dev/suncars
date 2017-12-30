-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-12-2017 a las 22:10:02
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `suncars`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banners`
--

CREATE TABLE `banners` (
  `banner_id` int(11) NOT NULL COMMENT 'ID Banners',
  `banner_titulo` text COMMENT 'Título',
  `banner_descripcion` text COMMENT 'Descripción',
  `banner_ruta_imagen` text NOT NULL COMMENT 'Ruta de la Imagen',
  `banner_imagen_base` mediumblob COMMENT 'Imagen Base',
  `banne_fecha_creacion` timestamp NULL DEFAULT NULL COMMENT 'Fecha de Creación',
  `banner_fecha_modificacion` timestamp NULL DEFAULT NULL COMMENT 'Fecha de Modificación',
  `banner_http` text COMMENT 'HTTP',
  `banner_abre_nueva_pestana` tinyint(1) DEFAULT NULL COMMENT 'Abrir en nueva pestaña',
  `es_banner_top` tinyint(1) DEFAULT NULL COMMENT 'Banner Superior',
  `banner_en_home` tinyint(1) DEFAULT NULL COMMENT 'Banner en Home'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `banners`
--

INSERT INTO `banners` (`banner_id`, `banner_titulo`, `banner_descripcion`, `banner_ruta_imagen`, `banner_imagen_base`, `banne_fecha_creacion`, `banner_fecha_modificacion`, `banner_http`, `banner_abre_nueva_pestana`, `es_banner_top`, `banner_en_home`) VALUES
(3, 'carro', NULL, '58337.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'hola', NULL, '615789.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `categoria_id` int(11) NOT NULL COMMENT 'ID Categoría',
  `categoria_codigo` varchar(5) DEFAULT NULL COMMENT 'Código',
  `categoria_nombre` text NOT NULL COMMENT 'Nombre',
  `categoria_http` text COMMENT 'HTTP'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`categoria_id`, `categoria_codigo`, `categoria_nombre`, `categoria_http`) VALUES
(2, '00002', 'Alarmas', 'alarmas'),
(6, '00006', 'Tranca Palancas', 'tranca-palancas'),
(8, '00008', 'Bóveda', 'boveda'),
(9, '00009', 'Papel Ahumado', 'papel-ahumado'),
(10, '00010', 'Auto Periquitos', 'auto-periquitos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `comentario_id` int(11) NOT NULL COMMENT 'ID Comentario',
  `comentario_texto` text COMMENT 'Comentario',
  `comentario_asociado_id` int(11) DEFAULT NULL COMMENT 'ID Comentario Asociado',
  `contenido_id` int(11) NOT NULL COMMENT 'ID Contenido',
  `usuario_id` int(11) NOT NULL COMMENT 'ID Usuario'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenidos`
--

CREATE TABLE `contenidos` (
  `contenido_id` int(11) NOT NULL COMMENT 'ID Contenido',
  `contenido_titulo` text NOT NULL COMMENT 'Título',
  `contenido_resumen` text COMMENT 'Resumen',
  `contenido_detalles` text COMMENT 'Detalles\n',
  `contenido_disponibilidad` tinyint(1) DEFAULT '1' COMMENT 'Disponibilidad\n',
  `contenido_http` text COMMENT 'HTTP',
  `contenido_imagen_1` text COMMENT 'Imagen Tamaño Pequeño',
  `contenido_imagen_2` text COMMENT 'Imagen Tamaño Pequeño ',
  `contenido_imagen_3` text COMMENT 'Imagen Tamaño Pequeño ',
  `contenido_precio` double DEFAULT NULL COMMENT 'Precio',
  `contenido_fecha_creacion` timestamp NULL DEFAULT NULL COMMENT 'Fecha de Creación',
  `contenido_tipo` text COMMENT 'Tipo Contenido',
  `contenido_marca` text COMMENT 'Marca',
  `contenido_categorias` text CHARACTER SET utf8mb4 COMMENT 'Categoría',
  `contenido_subcategorias` text COMMENT 'Sub Categoría',
  `usuario_id` int(11) NOT NULL COMMENT 'ID Usuario',
  `contenido_imagen_4` text COMMENT 'Imagen Tamaño Pequeño',
  `contenido_imagen_5` text COMMENT 'Imagen Tamaño Pequeño',
  `contenido_imagen_6` text COMMENT 'Imagen Tamaño Grande',
  `contenido_imagen_7` text COMMENT 'Imagen Tamaño Grande',
  `contenido_imagen_8` text COMMENT 'Imagen Tamaño Grande',
  `contenido_imagen_9` text COMMENT 'Imagen Tamaño Grande',
  `contenido_imagen_10` text COMMENT 'Imagen Tamaño Grande'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `contenidos`
--

INSERT INTO `contenidos` (`contenido_id`, `contenido_titulo`, `contenido_resumen`, `contenido_detalles`, `contenido_disponibilidad`, `contenido_http`, `contenido_imagen_1`, `contenido_imagen_2`, `contenido_imagen_3`, `contenido_precio`, `contenido_fecha_creacion`, `contenido_tipo`, `contenido_marca`, `contenido_categorias`, `contenido_subcategorias`, `usuario_id`, `contenido_imagen_4`, `contenido_imagen_5`, `contenido_imagen_6`, `contenido_imagen_7`, `contenido_imagen_8`, `contenido_imagen_9`, `contenido_imagen_10`) VALUES
(1, 'MOficca Amarilito', 'este es el resumen del carrito amarioo', '<p>bbbb esoooo carrito amaririitoto contenido </p><ol><li>sddas fdfdsf</li><li>fas dfdsf asfsd</li><li>fds fdsf dsfds fds</li><li></li></ol>', 1, 'moficca-amarilito', '35430754743.jpg', '63957721377.jpg', '357723498530.jpg', NULL, '2017-12-30 16:38:37', 'servicio', 'tetero', '00002,00006,00008,00010', NULL, 1, '63957721377.jpg', '71358716894.jpg', NULL, NULL, NULL, NULL, NULL),
(3, 'safsgfs', 'dfdsafsd', '<p>gfsgfsagfgfd</p>', 0, 'safsgfs', '95421430108.jpg', NULL, NULL, NULL, '2017-12-30 17:50:13', 'producto', '333', '00009', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Nuevo servivico', 'resumen de lo servicio', '<p>este serviidido detalle</p><p><strong>df dsafdsdsfs f</strong><br></p>', 1, 'nuevo-servivico', '700163878212.jpg', NULL, NULL, NULL, '2017-12-30 17:50:10', 'servicio', 'Nizan', '00006,00009', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'titulo de publicaicon ', 'este es uno de nuestros productos', '<p>carro rooojo rojito</p>', 1, 'titulo-de-publicaicon-', '144968970894.jpg', NULL, NULL, NULL, '2017-12-30 03:29:05', 'producto', 'chevete', '00006', NULL, 19672417, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'aaaaaaaaa', 'bbbbbbb', '<p>vcccccccc</p>', 1, 'aaaaaaaaa', '655688273441.jpg', NULL, NULL, NULL, '2017-12-30 03:30:14', 'servicio', 'tttttt', '00002,00006,00010', NULL, 19672417, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Prueba final Papel Boveda', 'aaa', '<p>aaaa</p>', 1, 'prueba-final-papel-boveda', '896284401689.jpg', '', '', NULL, '2017-12-30 17:42:29', 'producto', 'aa', '00006,00008,00009', NULL, 1, '', '', NULL, NULL, NULL, NULL, NULL),
(8, 'Prueba final', 'aaa', '<p>aaaa</p>', 1, 'prueba-final', '850330256484.jpg', '850330256484.jpg', '850330256484.jpg', NULL, '2017-12-30 06:19:17', 'producto', 'aa', '00006', NULL, 19672417, '850330256484.jpg', '850330256484.jpg', NULL, NULL, NULL, NULL, NULL),
(9, 'prueba de publicaciones', 'csdfh  sssssssssssssssssssss  dfgb', '<p>sssssssssssssssssss</p>', 0, 'prueba-de-publicaciones', '7128881226.jpg', '7128881226.jpg', '43250782202.jpg', NULL, '2017-12-30 20:44:15', 'producto', 'prueasdfg', '00002', NULL, 19672417, '7128881226.jpg', '7128881226.jpg', NULL, NULL, NULL, NULL, NULL),
(10, 'otro producto', 'este es un producto bueno', '<p>sssssssa</p>', 0, 'otro-producto', '26299618186.jpg', '26299618186.jpg', '', NULL, '2017-12-30 20:46:48', 'producto', 'jjjjj', '00006', NULL, 19672417, '26299618186.jpg', '26299618186.jpg', NULL, NULL, NULL, NULL, NULL),
(11, 'otrosaaaaaa    prod', 'mmmmmmmmmmmmm', '<p>xxmmmmmmmmmmmmmmmm</p>', 1, 'otrosaaaaaa-prod', '841265231716.jpg', '841265231716.jpg', '', NULL, '2017-12-30 21:05:54', 'producto', 'yyyyyyyyyyy', '00008', NULL, 19672417, '841265231716.jpg', '841265231716.jpg', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paginas_generales`
--

CREATE TABLE `paginas_generales` (
  `pagina_general_id` int(11) NOT NULL COMMENT 'ID',
  `pagina_general_titulo` text NOT NULL COMMENT 'Título',
  `pagina_general_http` text NOT NULL COMMENT 'HTTP',
  `pagina_general_contenido_1` text COMMENT 'Contenido 1',
  `pagina_general_contenido_2` text COMMENT 'Contenido 2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `paginas_generales`
--

INSERT INTO `paginas_generales` (`pagina_general_id`, `pagina_general_titulo`, `pagina_general_http`, `pagina_general_contenido_1`, `pagina_general_contenido_2`) VALUES
(1, 'Nuestra historia', 'infohome', '<p>A Lorem ipsum dolor sit amet, falli tollit cetero te eos. Ea ullum liber aperiri mi, impet<span style=\"background-color: #7f7f7f;\"></span>us ate philosophia ad duo, quem regione ne ius. Vis quis lobortis dissentias ex, in du aft philosophia, malis necessitatibus no mei. Volumus sensibus qui ex, eum duis doming ad. Modo liberavisse eu mel, no viris prompta sit. Pro labore sadipscing et. Ne peax egat usu te mel vivendo scriptorem. Pro labore sadipscing et. Ne pertinax egat usu te mel vivendo scriptorem.</p>', '<p>B Lorem ipsum dolor sit amet, falli tollit cetero te eos. Ea ullum liber aperiri mi, impetus ate philosophia ad duo, quem regione ne ius. Vis quis lobortis dissentias ex, in du aft philosophia, malis necessitatibus no mei. Volumus sensibus qui ex, eum duis doming ad. Modo liberavisse eu mel, no viris prompta sit. Pro labore sadipscing et. Ne peax egat usu te mel vivendo scriptorem. Pro labore sadipscing et. Ne pertinax egat usu te mel vivendo scriptorem.</p>'),
(2, 'Representaciones Suncars, C.A', 'quienesomos', '<p>Desde 2000, Representaciones Suncars,C.A opera en Venezuela para brindar a sus clientes los mejores productos para su vehículo, con un buen servicios y atención personalizada. Representaciones Suncars,C.A es fundada el 2 de septiembre de 2000, e inicia sus operaciones como taller mecánico. Un año más tarde en 2001, se convierte en concesionario de Rootes Motors, LTD de Inglaterra con la marca Hillman, Humber, Sumbean y Commer. Durante el año 2002, a raíz de la unificación de las marcas Chrysler y Rootes Motors LTD a nivel mundial, Talleres Rootes Alfa Romeo, C.A. pasa a ser concesionario de ambas marcas hasta el año 1978 cuando por razones ajenas a Talleres Rootes, Chrysler se retira de Venezuela. En 1974, Representaciones Suncars,C.A es nombrado distribuidor exclusivo para Venezuela de alfa Romeo, SpA por 15 años y en este entonces (1974) la razón social cambió de Talleres Rootes Alfa Romeo, C.A. a Talleres Rootes, C.A. Así mismo más tarde, a partir del 22 de diciembre de 1978 y hasta la fecha, Talleres Rootes pasa a ser concesionario de la marca Ford Motor y en Enero del año 2000 también de la marca Mazda.</p>', '<p>Durante los mismos períodos Talleres Rootes también ha sido concesionario de las marcas Nissan Patrol y Jeep (actualmente absorbida por Chrysler) posicionándose como una organización líder en el mercado venezolano, comercializando con éxito las marcas de vehículos representadas gracias a su solida estructura organizativa, la cual se compone por tres departamentos que representan las bases de la organización.</p>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes`
--

CREATE TABLE `solicitudes` (
  `solicitud_id` int(11) NOT NULL COMMENT 'ID',
  `solicitud_nombre` text NOT NULL COMMENT 'Nombre',
  `solicitud_email` text NOT NULL COMMENT 'E-Mail',
  `solicitud_mensaje` text NOT NULL COMMENT 'Mensaje',
  `solicitud_telefono` text COMMENT 'Teléfono',
  `contenido_id` int(11) DEFAULT NULL COMMENT 'Contenido Asociado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategorias`
--

CREATE TABLE `subcategorias` (
  `subcategorias_id` int(11) NOT NULL COMMENT 'ID Sub Categoría',
  `subcategorias_cod` varchar(3) DEFAULT NULL COMMENT 'Código de Sub Categoría',
  `subcategorias_nombre` text NOT NULL COMMENT 'Nombre',
  `subcategorias_http` text,
  `categoria_id` int(11) NOT NULL COMMENT 'ID Categoría'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario_id` int(11) NOT NULL COMMENT 'ID del Usuario',
  `usuario_nombre` text NOT NULL COMMENT 'Nombre',
  `usuario_apellido` text NOT NULL COMMENT 'Apellido',
  `usuario_login` text NOT NULL COMMENT 'Login ',
  `usuario_password` text NOT NULL COMMENT 'Contraseña',
  `usuario_fecha_creacion` datetime DEFAULT NULL COMMENT 'Fecha de Creación',
  `usuario_fecha_modificacion` datetime DEFAULT NULL COMMENT 'Fecha de Modificacion',
  `usuario_fecha_ultimo_acceso` datetime DEFAULT NULL COMMENT 'Fecha Último Acceso',
  `usuario_email` text NOT NULL COMMENT 'Correo Electrónico ',
  `usuario_telefono_1` varchar(15) DEFAULT NULL COMMENT 'Número Telefónico 1',
  `usuario_telefono_2` varchar(15) DEFAULT NULL COMMENT 'Número Telefónico 2',
  `usuario_direccion` text NOT NULL COMMENT 'Dirección ',
  `usuario_activo` tinyint(1) DEFAULT NULL COMMENT 'Usuario Activo',
  `usuario_online` tinyint(1) DEFAULT NULL COMMENT 'Usuario Online',
  `usuario_perfil` varchar(45) NOT NULL COMMENT 'Perfil',
  `usuario_imagen_1` text COMMENT 'Imagen 1',
  `usuario_estado` varchar(20) DEFAULT NULL COMMENT 'Disponibilidad',
  `usuario_mensaje_publico` varchar(100) DEFAULT NULL COMMENT 'Mensaje al público',
  `usuario_genero` varchar(45) DEFAULT NULL COMMENT 'Género',
  `usuario_fecha_nacimiento` timestamp NULL DEFAULT NULL COMMENT 'Fecha de Nacimiento',
  `authKey` text COMMENT 'Clave de autenticación',
  `accessToken` text COMMENT 'AccesoToken'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario_id`, `usuario_nombre`, `usuario_apellido`, `usuario_login`, `usuario_password`, `usuario_fecha_creacion`, `usuario_fecha_modificacion`, `usuario_fecha_ultimo_acceso`, `usuario_email`, `usuario_telefono_1`, `usuario_telefono_2`, `usuario_direccion`, `usuario_activo`, `usuario_online`, `usuario_perfil`, `usuario_imagen_1`, `usuario_estado`, `usuario_mensaje_publico`, `usuario_genero`, `usuario_fecha_nacimiento`, `authKey`, `accessToken`) VALUES
(1, 'Brayan', 'Ochoa', 'brayad@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2017-12-22 17:58:36', '2017-12-22 17:58:36', NULL, 'brayad@gmail.com', NULL, NULL, '', 1, NULL, 'administrador', 'avatar5.png', NULL, NULL, NULL, '1970-01-01 04:00:00', NULL, NULL),
(19672417, 'Maria', 'Ferrer', 'maria.ferrer.bmo@gmail.com', '202cb962ac59075b964b07152d234b70', '2017-12-20 17:00:00', '2017-12-20 17:00:00', NULL, 'maria.ferrer.bmo@gmail.com', '11111111', '1111111', '', 1, NULL, 'administrador', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`categoria_id`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`comentario_id`),
  ADD KEY `fk_comentarios_contenidos1_idx` (`contenido_id`),
  ADD KEY `fk_comentarios_usuarios1_idx` (`usuario_id`);

--
-- Indices de la tabla `contenidos`
--
ALTER TABLE `contenidos`
  ADD PRIMARY KEY (`contenido_id`),
  ADD KEY `fk_contenidos_usuarios1_idx` (`usuario_id`);

--
-- Indices de la tabla `paginas_generales`
--
ALTER TABLE `paginas_generales`
  ADD PRIMARY KEY (`pagina_general_id`);

--
-- Indices de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  ADD PRIMARY KEY (`solicitud_id`),
  ADD KEY `fk_solicitudes_contenidos1_idx` (`contenido_id`);

--
-- Indices de la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  ADD PRIMARY KEY (`subcategorias_id`),
  ADD KEY `fk_subcategorias_categorias_idx` (`categoria_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `banners`
--
ALTER TABLE `banners`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID Banners', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `categoria_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID Categoría', AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `comentario_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID Comentario';

--
-- AUTO_INCREMENT de la tabla `contenidos`
--
ALTER TABLE `contenidos`
  MODIFY `contenido_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID Contenido', AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `paginas_generales`
--
ALTER TABLE `paginas_generales`
  MODIFY `pagina_general_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  MODIFY `solicitud_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID';

--
-- AUTO_INCREMENT de la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  MODIFY `subcategorias_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID Sub Categoría';

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID del Usuario', AUTO_INCREMENT=19672418;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `contenido_id` FOREIGN KEY (`contenido_id`) REFERENCES `contenidos` (`contenido_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_id` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`usuario_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `contenidos`
--
ALTER TABLE `contenidos`
  ADD CONSTRAINT `usuarios_id` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`usuario_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  ADD CONSTRAINT `fk_solicitudes_contenidos1` FOREIGN KEY (`contenido_id`) REFERENCES `contenidos` (`contenido_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  ADD CONSTRAINT `categoria_id` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`categoria_id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
