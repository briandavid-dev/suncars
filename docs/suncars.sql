-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-12-2017 a las 14:03:41
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `suncars`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banners`
--

CREATE TABLE IF NOT EXISTS `banners` (
  `banner_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID Banners',
  `banner_titulo` text COMMENT 'Título',
  `banner_descripcion` text COMMENT 'Descripción',
  `banner_ruta_imagen` text NOT NULL COMMENT 'Ruta de la Imagen',
  `banner_imagen_base` mediumblob COMMENT 'Imagen Base',
  `banne_fecha_creacion` timestamp NULL DEFAULT NULL COMMENT 'Fecha de Creación',
  `banner_fecha_modificacion` timestamp NULL DEFAULT NULL COMMENT 'Fecha de Modificación',
  `banner_http` text COMMENT 'HTTP',
  `banner_abre_nueva_pestana` tinyint(1) DEFAULT NULL COMMENT 'Abrir en nueva pestaña',
  `es_banner_top` tinyint(1) DEFAULT NULL COMMENT 'Banner Superior',
  `banner_en_home` tinyint(1) DEFAULT NULL COMMENT 'Banner en Home',
  PRIMARY KEY (`banner_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `categoria_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID Categoría',
  `categoria_cod` varchar(3) DEFAULT NULL COMMENT 'Código',
  `categoria_nombre` text NOT NULL COMMENT 'Nombre',
  `categoria_http` text COMMENT 'HTTP',
  PRIMARY KEY (`categoria_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `comentario_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID Comentario',
  `comentario_texto` text COMMENT 'Comentario',
  `comentario_asociado_id` int(11) DEFAULT NULL COMMENT 'ID Comentario Asociado',
  `contenido_id` int(11) NOT NULL COMMENT 'ID Contenido',
  `usuario_id` int(11) NOT NULL COMMENT 'ID Usuario',
  PRIMARY KEY (`comentario_id`),
  KEY `fk_comentarios_contenidos1_idx` (`contenido_id`),
  KEY `fk_comentarios_usuarios1_idx` (`usuario_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenidos`
--

CREATE TABLE IF NOT EXISTS `contenidos` (
  `contenido_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID Contenido',
  `contenido_titulo` text NOT NULL COMMENT 'Título',
  `contenido_texto` text COMMENT 'Contenido',
  `contenido_http` text COMMENT 'HTTP',
  `contenido_imagen_1` text COMMENT 'Imagen Tamaño Pequeño',
  `contenido_imagen_2` text COMMENT 'Imagen Tamaño Mediano',
  `contenido_imagen_3` text COMMENT 'Imagen Tamaño Grande',
  `contenido_precio` double DEFAULT NULL COMMENT 'Precio',
  `contenido_fecha_creacion` timestamp NULL DEFAULT NULL COMMENT 'Fecha de Creación',
  `contenido_tipo` text COMMENT 'Tipo Contenido',
  `contenido_marca` varchar(45) DEFAULT NULL COMMENT 'Marca',
  `contenido_categoria` text CHARACTER SET utf8mb4 COMMENT 'Categoría',
  `contenido_subcategoria` text COMMENT 'Sub Categoría',
  `contenidoscol` varchar(45) DEFAULT NULL,
  `usuario_id` int(11) NOT NULL COMMENT 'ID Usuario',
  PRIMARY KEY (`contenido_id`),
  KEY `fk_contenidos_usuarios1_idx` (`usuario_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategorias`
--

CREATE TABLE IF NOT EXISTS `subcategorias` (
  `subcategorias_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID Sub Categoría',
  `subcategorias_cog` varchar(3) DEFAULT NULL COMMENT 'Código de Sub Categoría',
  `subcategorias_nombre` text NOT NULL COMMENT 'Nombre',
  `subcategorias_http` text,
  `categoria_id` int(11) NOT NULL COMMENT 'ID Categoría',
  PRIMARY KEY (`subcategorias_id`),
  KEY `fk_subcategorias_categorias_idx` (`categoria_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `usuario_id` int(11) NOT NULL COMMENT 'ID del Usuario',
  `usuario_nombre` varchar(45) NOT NULL COMMENT 'Nombre',
  `usuario_apellido` varchar(45) NOT NULL COMMENT 'Apellido',
  `usuario_login` varchar(45) NOT NULL COMMENT 'Login ',
  `usuario_password` varchar(45) NOT NULL COMMENT 'Contraseña',
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
  `accessToken` text COMMENT 'AccesoToken',
  PRIMARY KEY (`usuario_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Filtros para la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  ADD CONSTRAINT `categoria_id` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`categoria_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
