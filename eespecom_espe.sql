-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 25-11-2015 a las 11:03:55
-- Versión del servidor: 5.5.46-cll
-- Versión de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `eespecom_espe`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE IF NOT EXISTS `carrito` (
  `contador` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_producto` bigint(20) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `id_usuario_temp` varchar(100) DEFAULT NULL,
  `fecha_alta` datetime DEFAULT NULL,
  PRIMARY KEY (`contador`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`contador`, `id_producto`, `cantidad`, `id_usuario_temp`, `fecha_alta`) VALUES
(14, 19, 1, '6aa72d2d00e015b6bea2f5e8e72306ab', '2015-01-23 23:08:59'),
(15, 21, 1, '8360b5d15d2ad3d70bc0a38f15bf23e1', '2015-02-12 00:09:15'),
(16, 20, 2, '8360b5d15d2ad3d70bc0a38f15bf23e1', '2015-02-12 00:09:21'),
(17, 29, 1, 'eae0dcb655ddea76e489e4d734dad901', '2015-02-25 15:53:03'),
(19, 49, 1, '', '2015-04-28 10:39:27'),
(20, 50, 1, 'fce36f4b5a8f64a58b7b097f540d4731', '2015-06-22 12:58:04'),
(21, 51, 1, '786fba627c1f9b86a9e9df5031527388', '2015-09-04 13:56:16'),
(22, 49, 1, '786fba627c1f9b86a9e9df5031527388', '2015-09-04 13:56:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id_categoria` bigint(20) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(50) DEFAULT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `categoria`, `imagen`) VALUES
(5, 'Portaretratos', 'PR'),
(6, 'Espejos', ''),
(7, 'CelosÃ­as', ''),
(8, 'NOMBRES ', ''),
(9, 'RENTA VARIOS', ''),
(10, 'LETRAS DECORATIVAS', ''),
(11, 'VARIOS', ''),
(12, 'TAZAS PERSONALIZADAS', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `claves`
--

CREATE TABLE IF NOT EXISTS `claves` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) DEFAULT NULL,
  `contrasena` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `claves`
--

INSERT INTO `claves` (`id_usuario`, `usuario`, `contrasena`) VALUES
(2, 'jesus', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos_banner`
--

CREATE TABLE IF NOT EXISTS `fotos_banner` (
  `id_foto_banner` bigint(20) NOT NULL AUTO_INCREMENT,
  `foto_banner` text,
  `texto_principal` varchar(100) DEFAULT NULL,
  `texto_secundario` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_foto_banner`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Volcado de datos para la tabla `fotos_banner`
--

INSERT INTO `fotos_banner` (`id_foto_banner`, `foto_banner`, `texto_principal`, `texto_secundario`) VALUES
(5, 'fotosBanner/164BANNERPRINCIPAL.png', 'RENTA DE LETRAS CON ILUMINACIÃ“N PARA BODAS Y EVENTOS SOCIALES', 'DiseÃ±o y DecoraciÃ³n'),
(6, 'fotosBanner/357BANNER2.png', 'CelosÃ­as Decorativas o Divisorias', 'DiseÃ±o y DecoraciÃ³n'),
(7, 'fotosBanner/738BANNER3.png', 'Nombres Para Regalos o Portaretratos', 'DiseÃ±o y DecoraciÃ³n'),
(9, 'fotosBanner/319BANNER4OK.png', 'LETRAS DE GRAN FORMATO', 'DiseÃ±o y DecoraciÃ³n'),
(13, 'fotosBanner/685BANNERmesalove.png', 'MESA PARA BODA O XV AÃ‘OS', 'DiseÃ±o y DecoraciÃ³n'),
(14, 'fotosBanner/846BANNER8.jpg', 'Corte y Grabado en Aluminio', 'DiseÃ±o y DecoraciÃ³n'),
(15, 'fotosBanner/521BANNER9.jpg', 'Letras de Canal con IluminaciÃ³n', 'DiseÃ±o y DecoraciÃ³n'),
(16, 'fotosBanner/992BANNER10.jpg', 'CelosÃ­as ', 'DiseÃ±o y DecoraciÃ³n'),
(17, 'fotosBanner/544BANNER4.png', 'Letras de Canal con Grabado', 'DiseÃ±o y DecoraciÃ³n'),
(18, 'fotosBanner/932BANNER11.jpg', 'Letras con IluminaciÃ³n para Eventos Sociales', 'DiseÃ±o y DecoraciÃ³n'),
(19, 'fotosBanner/811BANNER11.png', 'PORTARETRATOS DE COLOR', 'DiseÃ±o y DecoraciÃ³n'),
(21, 'fotosBanner/362BANNER12.png', 'CENTROS DE MESA', 'DiseÃ±o y DecoraciÃ³n'),
(22, 'fotosBanner/507BANNER13.png', 'PAQUETE PARA EVENTOS SOCIALES, MARCO Y LETREROS', ''),
(23, 'fotosBanner/556BANNER-14.png', 'MUEBLE ELEFANTE / DISEÃ‘O DE INTERIOR', 'DiseÃ±o y DecoraciÃ³n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos_producto`
--

CREATE TABLE IF NOT EXISTS `fotos_producto` (
  `id_foto_producto` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_producto` bigint(20) DEFAULT NULL,
  `foto_secundaria` text,
  PRIMARY KEY (`id_foto_producto`),
  KEY `id_producto` (`id_producto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=138 ;

--
-- Volcado de datos para la tabla `fotos_producto`
--

INSERT INTO `fotos_producto` (`id_foto_producto`, `id_producto`, `foto_secundaria`) VALUES
(8, 14, 'fotosProductos/3097.jpg'),
(17, 21, 'fotosProductos/66510.jpg'),
(18, 23, 'fotosProductos/21719.jpg'),
(19, 23, 'fotosProductos/75018.jpg'),
(20, 25, 'fotosProductos/943DSCN0904-OK.jpg'),
(21, 25, 'fotosProductos/653DSCN0904-OK.jpg'),
(22, 27, 'fotosProductos/368DSCN0909-ok.jpg'),
(23, 27, 'fotosProductos/852DSCN0909-ok.jpg'),
(24, 27, 'fotosProductos/226DSCN0908-ok.jpg'),
(25, 28, 'fotosProductos/233DSCN0912-ok.jpg'),
(26, 28, 'fotosProductos/443DSCN0913-ok.jpg'),
(27, 29, 'fotosProductos/47724.jpg'),
(28, 29, 'fotosProductos/81137.jpg'),
(30, 30, 'fotosProductos/454IMG_9546-ok.jpg'),
(31, 30, 'fotosProductos/763IMG_9549-ok.jpg'),
(32, 30, 'fotosProductos/557IMG_9546-ok.jpg'),
(33, 29, 'fotosProductos/5924.jpg'),
(34, 31, 'fotosProductos/165SAM_2649-OK.jpg'),
(35, 31, 'fotosProductos/436SAM_2649-OK.jpg'),
(38, 33, 'fotosProductos/679SAM_2703-ok.jpg'),
(39, 33, 'fotosProductos/516SAM_2703-ok.jpg'),
(41, 34, 'fotosProductos/198SAM_2688-ok.jpg'),
(42, 34, 'fotosProductos/32SAM_2716-ok.jpg'),
(43, 32, 'fotosProductos/523SAM_2699-ok.jpg'),
(44, 32, 'fotosProductos/535SAM_2699-ok.jpg'),
(47, 35, 'fotosProductos/681IMG_0201.JPG'),
(48, 35, 'fotosProductos/460IMG_0201.JPG'),
(49, 35, 'fotosProductos/657IMG_0191.JPG'),
(50, 36, 'fotosProductos/337SAM_2762-ok.jpg'),
(51, 36, 'fotosProductos/210SAM_2762-ok.jpg'),
(52, 36, 'fotosProductos/742SAM_2758-ok.jpg'),
(53, 37, 'fotosProductos/617SAM_2747-ok.jpg'),
(54, 37, 'fotosProductos/708SAM_2747-ok.jpg'),
(55, 37, 'fotosProductos/780SAM_2749-ok.jpg'),
(56, 38, 'fotosProductos/870SAM_2741-ok.jpg'),
(57, 38, 'fotosProductos/244SAM_2741-ok.jpg'),
(58, 39, 'fotosProductos/133SAM_2900-OK.jpg'),
(59, 39, 'fotosProductos/859SAM_2900-OK.jpg'),
(60, 39, 'fotosProductos/71SAM_2882.JPG'),
(61, 39, 'fotosProductos/719SAM_2830-OK.jpg'),
(62, 39, 'fotosProductos/342SAM_2793OK.jpg'),
(63, 40, 'fotosProductos/564SAM_2925-OK.jpg'),
(64, 40, 'fotosProductos/820SAM_2930-OK.jpg'),
(65, 40, 'fotosProductos/687SAM_2925-OK.jpg'),
(66, 40, 'fotosProductos/595SAM_2934-OK.jpg'),
(67, 41, 'fotosProductos/369SAM_2944-OK.jpg'),
(68, 41, 'fotosProductos/803SAM_2947-OK.jpg'),
(69, 41, 'fotosProductos/692SAM_2944-OK.jpg'),
(70, 42, 'fotosProductos/741SAM_2918-OK.jpg'),
(71, 42, 'fotosProductos/156SAM_2921-OK.jpg'),
(72, 42, 'fotosProductos/886SAM_2918-OK.jpg'),
(73, 16, 'fotosProductos/388DSCN0853-OK.jpg'),
(74, 16, 'fotosProductos/394DSCN0854-OK.jpg'),
(75, 16, 'fotosProductos/72love.jpg'),
(77, 20, 'fotosProductos/527DSCN0883-OK.jpg'),
(78, 20, 'fotosProductos/453DSCN0884-OK.jpg'),
(79, 20, 'fotosProductos/549DSCN0883-OK.jpg'),
(80, 21, 'fotosProductos/804DSCN0880-OK.jpg'),
(81, 21, 'fotosProductos/62310.jpg'),
(82, 26, 'fotosProductos/3DSCN0886-OK.jpg'),
(83, 26, 'fotosProductos/271DSCN0887-ok.jpg'),
(84, 26, 'fotosProductos/766DSCN0888-OK.jpg'),
(85, 22, 'fotosProductos/487DSCN0875-OK.jpg'),
(86, 22, 'fotosProductos/319DSCN0876-OK.jpg'),
(87, 22, 'fotosProductos/836DSCN0875-OK.jpg'),
(88, 43, 'fotosProductos/808SAM_2982-OK.jpg'),
(89, 43, 'fotosProductos/39SAM_2964-OK.jpg'),
(90, 43, 'fotosProductos/444SAM_2982-OK.jpg'),
(91, 44, 'fotosProductos/734SAM_2975-OK.jpg'),
(92, 44, 'fotosProductos/533SAM_2977-OK.jpg'),
(93, 44, 'fotosProductos/986SAM_2975-OK.jpg'),
(94, 45, 'fotosProductos/510SAM_2998-OK.jpg'),
(95, 45, 'fotosProductos/904SAM_2994-OK.jpg'),
(96, 45, 'fotosProductos/757SAM_2996-OK.jpg'),
(97, 45, 'fotosProductos/146SAM_2998-OK.jpg'),
(98, 46, 'fotosProductos/958SAM_3000-OK.jpg'),
(99, 46, 'fotosProductos/484SAM_3000-OK.jpg'),
(100, 46, 'fotosProductos/689SAM_2999-OK.jpg'),
(101, 47, 'fotosProductos/385SAM_3004-OK.jpg'),
(102, 47, 'fotosProductos/450SAM_3005-OK.jpg'),
(103, 47, 'fotosProductos/845SAM_3004-OK.jpg'),
(104, 48, 'fotosProductos/959DSCN1693-OK SUBIR.jpg'),
(107, 48, 'fotosProductos/967DSCN1695-OK SUBIR.jpg'),
(108, 48, 'fotosProductos/159DSCN1693-OK SUBIR.jpg'),
(109, 48, 'fotosProductos/411DSCN1694-OK SUBIR.jpg'),
(110, 49, 'fotosProductos/644SAM_3047-OK.jpg'),
(111, 49, 'fotosProductos/997SAM_3051-OK.jpg'),
(113, 49, 'fotosProductos/210SAM_3047-OK.jpg'),
(114, 49, 'fotosProductos/394SAM_3046-OK.jpg'),
(115, 50, 'fotosProductos/150SAM_3064-OK.jpg'),
(116, 50, 'fotosProductos/829SAM_3064-OK.jpg'),
(117, 51, 'fotosProductos/458SAM_3080-OK.jpg'),
(118, 51, 'fotosProductos/253SAM_3083-OK.jpg'),
(119, 51, 'fotosProductos/311SAM_3080-OK.jpg'),
(120, 52, 'fotosProductos/608SAM_3118 OK.jpg'),
(121, 52, 'fotosProductos/95SAM_3116 OK.jpg'),
(122, 52, 'fotosProductos/595SAM_3120.JPG'),
(123, 53, 'fotosProductos/967SAM_3128-ok.jpg'),
(124, 53, 'fotosProductos/402SAM_3128-ok.jpg'),
(125, 53, 'fotosProductos/469SAM_3130-ok.jpg'),
(126, 53, 'fotosProductos/357SAM_3131-ok.jpg'),
(127, 54, 'fotosProductos/7taza 2.jpg'),
(128, 54, 'fotosProductos/56taza 3.jpg'),
(132, 55, 'fotosProductos/255SAM_3613.OK.jpg'),
(133, 55, 'fotosProductos/522SAM_3614-OK.jpg'),
(134, 55, 'fotosProductos/927SAM_3618-OK.jpg'),
(135, 55, 'fotosProductos/157SAM_3615-OK.jpg'),
(136, 54, 'fotosProductos/481taza 2.jpg'),
(137, 54, 'fotosProductos/500taza 4.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE IF NOT EXISTS `galeria` (
  `id_imagen` bigint(20) NOT NULL AUTO_INCREMENT,
  `foto` text,
  PRIMARY KEY (`id_imagen`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Volcado de datos para la tabla `galeria`
--

INSERT INTO `galeria` (`id_imagen`, `foto`) VALUES
(4, 'fotosGaleria/292SAM_2741-ok.jpg'),
(5, 'fotosGaleria/617IMG_0203.JPG'),
(6, 'fotosGaleria/444SAM_2716-ok.jpg'),
(9, 'fotosGaleria/572SAM_2898-OK.jpg'),
(10, 'fotosGaleria/338SAM_2882.JPG'),
(11, 'fotosGaleria/75SAM_2837-OK.jpg'),
(12, 'fotosGaleria/525SAM_2900-OK.jpg'),
(13, 'fotosGaleria/296SAM_2934-OK.jpg'),
(14, 'fotosGaleria/229SAM_2918-OK.jpg'),
(15, 'fotosGaleria/744SAM_2947-OK.jpg'),
(16, 'fotosGaleria/323SAM_3001-OK.jpg'),
(17, 'fotosGaleria/643SAM_3003-OK.jpg'),
(18, 'fotosGaleria/902SAM_2997-OK.jpg'),
(19, 'fotosGaleria/305SAM_2977-OK.jpg'),
(20, 'fotosGaleria/498SAM_2980-OK.jpg'),
(21, 'fotosGaleria/993DSCN1692-OKSUBIR.jpg'),
(22, 'fotosGaleria/400SAM_3053-OK.jpg'),
(23, 'fotosGaleria/992SAM_3060-OK.jpg'),
(24, 'fotosGaleria/898IMG_2555-OK.jpg'),
(25, 'fotosGaleria/349IMG_2566-OK.jpg'),
(26, 'fotosGaleria/234IMG_2559.JPG'),
(27, 'fotosGaleria/483IMG_2584-OK.jpg'),
(28, 'fotosGaleria/312SAM_3126 OK.jpg'),
(29, 'fotosGaleria/930SAM_3127-ok.jpg'),
(30, 'fotosGaleria/602espe-elef.jpg'),
(31, 'fotosGaleria/628espe-taza.jpg'),
(32, 'fotosGaleria/371taza 4.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nosotros`
--

CREATE TABLE IF NOT EXISTS `nosotros` (
  `id_foto` bigint(20) NOT NULL AUTO_INCREMENT,
  `foto_nosotros` text,
  PRIMARY KEY (`id_foto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `nosotros`
--

INSERT INTO `nosotros` (`id_foto`, `foto_nosotros`) VALUES
(4, 'fotosNosotros/103NOSOTROS-1.jpg'),
(5, 'fotosNosotros/118NOSOTROS-2.jpg'),
(6, 'fotosNosotros/515NOSOTROS-3.jpg'),
(7, 'fotosNosotros/580NOSOTROS-4.jpg'),
(8, 'fotosNosotros/609NOSOTROS-5.jpg'),
(9, 'fotosNosotros/932NOSOTROS-6.jpg'),
(10, 'fotosNosotros/914NOSOTROS-7.jpg'),
(11, 'fotosNosotros/783103NOSOTROS-8.jpg'),
(12, 'fotosNosotros/631otro.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id_producto` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_categoria` bigint(20) NOT NULL,
  `nombre_producto` varchar(50) NOT NULL,
  `precio` float NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `informacion_adicional` varchar(255) DEFAULT NULL,
  `info_pago_envio` varchar(255) DEFAULT NULL,
  `foto_principal` text,
  `fecha_alta` datetime DEFAULT NULL,
  PRIMARY KEY (`id_producto`),
  KEY `id_categoria` (`id_categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `id_categoria`, `nombre_producto`, `precio`, `descripcion`, `informacion_adicional`, `info_pago_envio`, `foto_principal`, `fecha_alta`) VALUES
(16, 5, 'Portaretrato LOVE 2 Fotos', 280, 'Portaretrato LOVE para 2 fotografÃ­as', 'Material: MFD\r\nEspesor: 15mm\r\nColores: Blanco, Negro, Rojo, Chocolate.\r\n', 'Precios +IVA en caso de requerir factura, enviamos por cualquier paqueterÃ­a por ocurre.', 'fotosProductos/902DSCN0853-OK.jpg', '2015-01-23 22:04:00'),
(20, 5, 'PORTARETRATO YOU & ME 2 Fotos', 280, 'Portaretrato YOU & ME de dos fotografÃ­as', 'Material: MDF recubierto\r\nEspesor: 15 mm\r\nColor: Blanco\r\nTamaÃ±o: 45x20 cm', 'Precio +IVA, enviamos por cualquier paqueterÃ­a por ocurre', 'fotosProductos/359DSCN0882-OK.jpg', '2015-01-25 18:33:01'),
(21, 5, 'PORTARETRATO TE AMO 1 FOTO', 280, 'Portaretrato TE AMO ', 'Material: MDF\r\nEspesor: 15 mm\r\nColor: Blanco\r\nTamaÃ±o: 42x14.5 cm', 'Precios +IVA, enviamos por cualquier paqueterÃ­a por ocurre.', 'fotosProductos/803DSCN0878-OK.jpg', '2015-01-25 18:42:16'),
(22, 5, 'PORTARETRATO XOXO', 275, 'Material: MDF \r\nEspesor: 15 mm \r\nColor: Blanco \r\nTamaÃ±o: 42x14.5 cm\r\n\r\nPrecios +IVA\r\nEnviamos a cualquier parte de la RepÃºblica en la paqueterÃ­a de tu preferencia por ocurre.\r\n', 'Material: MDF \r\nEspesor: 15 mm \r\nColor: Blanco \r\nTamaÃ±o: 38x22.5 cm\r\n', 'Precios +IVA\r\nEnviamos a cualquier parte de la RepÃºblica en la paqueterÃ­a de tu preferencia por ocurre.\r\n', 'fotosProductos/506DSCN0877-OK.jpg', '2015-01-25 18:51:38'),
(23, 5, 'PORTARETRATO I LOVE (CORAZÃ“N) ', 220, 'Material: MDF \r\nEspesor: 15 mm \r\nColor: Blanco \r\nTamaÃ±o: 15X19 cm\r\n\r\nPrecios +IVA\r\nEnviamos a cualquier parte de la RepÃºblica en la paqueterÃ­a de tu preferencia por ocurre.\r\n', 'Material: MDF \r\nEspesor: 15 mm \r\nColor: Blanco \r\nTamaÃ±o: 42x14.5 cm\r\n\r\n', 'Precios +IVA\r\nEnviamos a cualquier parte de la RepÃºblica en la paqueterÃ­a de tu preferencia por ocurre.\r\n', 'fotosProductos/61620.jpg', '2015-01-25 18:58:34'),
(24, 7, 'CELOSÃA MODELO A1', 1400, 'Material: MDF \r\nEspesor: 15 mm \r\nColor: Blanco, negro, rojo y chocolate. \r\nTamaÃ±o: 1.20x.60 cm\r\n\r\nPrecios +IVA\r\nEnviamos a cualquier parte de la RepÃºblica en la paqueterÃ­a de tu preferencia por ocurre.\r\n', 'Material: MDF \r\nEspesor: 15 mm \r\nColor: Blanco, negro, rojo y chocolate. \r\nTamaÃ±o: 1.20x.60 cm\r\n', 'Precios +IVA\r\nEnviamos a cualquier parte de la RepÃºblica en la paqueterÃ­a de tu preferencia por ocurre.', 'fotosProductos/741IMG_7454-MA.jpg', '2015-01-25 19:10:09'),
(25, 6, 'ESPEJO Mod. A4', 530, 'ESPEJO CELOSÃA \r\nMaterial: MDF \r\nEspesor: 15 mm \r\nColor: Blanco.\r\nTamaÃ±o:  23X30cm\r\n', 'Material: MDF \r\nEspesor: 15 mm \r\nColor: Blanco.\r\nTamaÃ±o:  23X30cm', 'Precios +IVA\r\nEnviamos a cualquier parte de la RepÃºblica en la paqueterÃ­a de tu preferencia por ocurre.\r\n', 'fotosProductos/568DSCN0905-OK.jpg', '2015-01-25 19:31:39'),
(26, 5, 'PORTARETRATO TQM 2 FOTOS', 280, 'Material: MDF recubierto\r\nEspesor: 15 mm \r\nColor: Blanco \r\nTamaÃ±o: 38x18 cm\r\n', 'Material: MDF \r\nEspesor: 15 mm \r\nColor: Blanco \r\nTamaÃ±o: 38x18 cm\r\n', 'Precios +IVA\r\nEnviamos a cualquier parte de la RepÃºblica en la paqueterÃ­a de tu preferencia por ocurre.\r\n', 'fotosProductos/887DSCN0886-OK.jpg', '2015-01-25 23:32:31'),
(27, 5, 'PORTARETRATO TQM 1 FOTO', 240, 'Material: MDF recubierto\r\nEspesor: 15 mm \r\nColor: Blanco \r\nTamaÃ±o: 48x13.5 cm\r\nPrecios +IVA, enviamos a cualquier parte de la RepÃºblica en la paqueterÃ­a de tu preferencia por ocurre.\r\n', 'Material: MDF recubierto\r\nEspesor: 15 mm \r\nColor: Blanco \r\nTamaÃ±o: 48x13.5 cm\r\n', 'Precios +IVA\r\nEnviamos a cualquier parte de la RepÃºblica en la paqueterÃ­a de tu preferencia por ocurre.\r\n', 'fotosProductos/517DSCN0906-ok.jpg', '2015-01-25 23:41:18'),
(28, 5, 'PORTARETRATO LOVE 1 FOTO', 240, 'Material: MDF \r\nEspesor: 15 mm \r\nColor: Blanco \r\nTamaÃ±o: 22x28 cm\r\n\r\nPrecios +IVA, enviamos a cualquier parte de la RepÃºblica en la paqueterÃ­a de tu preferencia por ocurre.', 'Material: MDF \r\nEspesor: 15 mm \r\nColor: Blanco \r\nTamaÃ±o: 22x28 cm\r\n', 'Precios +IVA, enviamos a cualquier parte de la RepÃºblica en la paqueterÃ­a de tu preferencia por ocurre.\r\n', 'fotosProductos/994DSCN0910-ok.jpg', '2015-01-25 23:53:42'),
(29, 8, 'NOMBRE ', 360, 'Nombres en MDF en cualquier color', 'Material: MDF \r\nEspesor: 15 mm \r\nColor: Cualquiera \r\nTamaÃ±o: Cualquiera ', 'Precios +IVA, enviamos a cualquier parte de la RepÃºblica en la paqueterÃ­a de tu preferencia por ocurre.', 'fotosProductos/6121.jpg', '2015-02-01 21:10:28'),
(30, 8, 'NOMBRE', 330, 'Material: MDF Espesor: 15 mm Color: Cualquiera TamaÃ±o: Cualquiera\r\n', 'Material: MDF \r\nEspesor: 15 mm \r\nColor: Cualquiera \r\nTamaÃ±o: Cualquiera\r\n', 'Precios +IVA, enviamos a cualquier parte de la RepÃºblica en la paqueterÃ­a de tu preferencia por ocurre.\r\n', 'fotosProductos/743IMG_9545-ok.jpg', '2015-02-02 11:54:29'),
(31, 8, 'LOVE Grabado', 250, 'LOVE Grabado', 'Material: MDF \r\nEspesor: 1/2" \r\nColor: Cualquiera \r\nTamaÃ±o: Cualquiera ', 'Precios +IVA, enviamos a cualquier parte de la RepÃºblica en la paqueterÃ­a de tu preferencia por ocurre. ', 'fotosProductos/48SAM_2652-OK.jpg', '2015-02-06 15:13:37'),
(32, 6, 'ESPEJO Mod. A1', 750, 'ESPEJO CELOSÃA\r\nMaterial: MDF con melamina\r\nEspesor: 15 mm\r\nColor: Blanco. \r\nTamaÃ±o: 78.6X26.5cm\r\n', 'ESPEJO CELOSÃA\r\nMaterial: MDF con melamina\r\nEspesor: 15 mm\r\nColor: Blanco. \r\nTamaÃ±o: 78.6X26.5cm\r\n', 'Precios +IVA Enviamos a cualquier parte de la RepÃºblica en la paqueterÃ­a de tu preferencia por ocurre.\r\n', 'fotosProductos/619SAM_2697-ok.jpg', '2015-02-10 19:16:33'),
(33, 6, 'ESPEJO Mod. A2', 650, 'ESPEJO CELOSÃA Material: MDF con melamina Espesor: 15 mm Color: Blanco. TamaÃ±o: 40X52cm', 'ESPEJO CELOSÃA Material: MDF con melamina Espesor: 15 mm Color: Blanco. TamaÃ±o: 40X52cm', 'Precios +IVA Enviamos a cualquier parte de la RepÃºblica en la paqueterÃ­a de tu preferencia por ocurre.\r\n', 'fotosProductos/940SAM_2706-ok.jpg', '2015-02-10 19:26:56'),
(34, 6, 'ESPEJO Mod. A3', 620, 'ESPEJO CELOSÃA \r\nMaterial: MDF con melamina \r\nEspesor: 15 mm \r\nColor: Blanco\r\nTamaÃ±o: 36X45cm\r\n', 'ESPEJO CELOSÃA \r\nMaterial: MDF con melamina \r\nEspesor: 15 mm \r\nColor: Blanco\r\nTamaÃ±o: 36X45cm', 'Precios +IVA Enviamos a cualquier parte de la RepÃºblica en la paqueterÃ­a de tu preferencia por ocurre.\r\n', 'fotosProductos/898SAM_2684-ok.jpg', '2015-02-10 19:54:57'),
(35, 8, 'NOMBRE ROJO', 360, 'Material: MDF \r\nEspesor: 12 mm\r\nColor: Cualquiera \r\nTamaÃ±o: Cualquiera', 'Material: MDF \r\nEspesor: 12 mm\r\nColor: Cualquiera \r\nTamaÃ±o: Cualquiera', ' Precios +IVA, enviamos a cualquier parte de la RepÃºblica en la paqueterÃ­a de tu preferencia por ocurre. ', 'fotosProductos/923IMG_0203.JPG', '2015-03-01 10:19:59'),
(36, 8, 'I LOVE MOM', 250, 'Material: MDF \r\nEspesor: 12 mm \r\nColor: Cualquiera \r\nTamaÃ±o: 45X12 cm', 'Material: MDF \r\nEspesor: 12 mm \r\nColor: Cualquiera \r\nTamaÃ±o: 45X12 cm', 'Precios +IVA, enviamos a cualquier parte de la RepÃºblica en la paqueterÃ­a de tu preferencia por ocurre. ', 'fotosProductos/49SAM_2760-ok.jpg', '2015-03-09 12:13:39'),
(37, 8, 'Signo ', 180, 'Material: MDF \r\nEspesor: 12 mm \r\nColor: Cualquiera \r\nTamaÃ±o: 20x20 cm', 'Material: MDF \r\nEspesor: 12 mm \r\nColor: Cualquiera \r\nTamaÃ±o: 20x20 cm', 'Precios +IVA, enviamos a cualquier parte de la RepÃºblica en la paqueterÃ­a de tu preferencia por ocurre. ', 'fotosProductos/783SAM_2748-ok.jpg', '2015-03-09 12:30:44'),
(38, 8, 'LETRAS "VINTAGE"', 290, 'Material: MDF \r\nEspesor: 12 mm \r\nColor: Cualquiera \r\nTamaÃ±o: 30X30 cm ', 'Material: MDF \r\nEspesor: 12 mm \r\nColor: Cualquiera \r\nTamaÃ±o: 30X30 cm ', 'Precios +IVA, enviamos a cualquier parte de la RepÃºblica en la paqueterÃ­a de tu preferencia por ocurre. ', 'fotosProductos/598SAM_2741-ok2.jpg', '2015-03-09 12:37:56'),
(39, 9, 'RENTA LETRAS LOVE', 4500, 'Renta de letras Love  Color Blanco con IluminaciÃ³n', 'TamaÃ±o: 1.20 m\r\nColor: Blanco\r\nIluminaciÃ³n: LED blanco frio\r\nConecciÃ³n: Derecta 110 v', '', 'fotosProductos/857SAM_2894-OK.jpg', '2015-03-22 23:06:56'),
(40, 5, 'PORTARETRATO DOBLE CON NOMBRE', 280, 'Material: MFD \r\nEspesor: 12mm \r\nColores: Cualquiera', 'Material: MFD \r\nEspesor: 12mm \r\nColores: Cualquiera\r\nTamaÃ±o: 40x20 cm aprox.', 'Precios +IVA en caso de requerir factura, enviamos por cualquier paqueterÃ­a por ocurre. ', 'fotosProductos/192SAM_2922-OK.jpg', '2015-04-06 10:59:05'),
(41, 8, 'TQM MAMÃ', 280, 'Material: MDF\r\nEspesor: 12 mm \r\nColor: Cualquiera \r\nTamaÃ±o: 32X32 aprox.Material: MDF\r\nEspesor: 12 mm \r\nColor: Cualquiera \r\nTamaÃ±o: 32X26 aprox.', 'Material: MDF\r\nEspesor: 12 mm \r\nColor: Cualquiera \r\nTamaÃ±o: 32X32 aprox.Material: MDF\r\nEspesor: 12 mm \r\nColor: Cualquiera \r\nTamaÃ±o: 32X26 aprox.', 'Precios +IVA, enviamos a cualquier parte de la RepÃºblica en la paqueterÃ­a de tu preferencia por ocurre. ', 'fotosProductos/862SAM_2946-OK.jpg', '2015-04-06 11:43:22'),
(42, 8, 'NOMBRE CON COLOR', 220, 'Material: MDF\r\nEspesor: 12 mm \r\nColor: Cualquiera \r\nTamaÃ±o: 28X19 cm aprox.', 'Material: MDF\r\nEspesor: 12 mm \r\nColor: Cualquiera \r\nTamaÃ±o: 28X19 cm aprox.', 'Precios +IVA, enviamos a cualquier parte de la RepÃºblica en la paqueterÃ­a de tu preferencia por ocurre. ', 'fotosProductos/16SAM_2917-OK.jpg', '2015-04-06 12:15:47'),
(43, 10, 'LETRA DECORATIVA', 450, 'Material: MDF\r\nEspesor: 12 mm\r\nColor: Cualquiera (Alto Brillo)\r\nTamaÃ±o: 50X50 cm', 'Ideales para decorar espacios interiores como salas, cocinas o recamaras, puede ser cualquier tipografÃ­a, cualquier color con o sin textura.', 'Precios +IVA, enviamos a cualquier parte de la RepÃºblica en la paqueterÃ­a de tu preferencia por ocurre. ', 'fotosProductos/207SAM_2980-OK.jpg', '2015-04-19 15:55:50'),
(44, 10, 'LETRA DECORATIVA CON BASE T-1', 270, 'Material: MDF \r\nEspesor: 12 mm \r\nColor: Cualquier textura o color.\r\nTamaÃ±o: 18x14 cm aprox.', 'Puede llevar cualquier color o textura ya que lleva impresiÃ³n en calidad fotogrÃ¡fica.\r\n', 'Precios +IVA, enviamos a cualquier parte de la RepÃºblica en la paqueterÃ­a de tu preferencia por ocurre. \r\n', 'fotosProductos/384SAM_2976-OK.jpg', '2015-04-19 17:18:25'),
(45, 11, 'JAULA VINTAGE', 750, 'Material: MDF \r\nEspesor: 12 mm \r\nColor: Cualquiera (Alto Brillo) \r\nTamaÃ±o: 30X95 cm Aves:15X15 cm aprox.', 'Ideales para decorar espacios interiores como salas, cocinas o recamaras, puede ser cualquier color al alto brillo.', 'Precios +IVA, enviamos a cualquier parte de la RepÃºblica en la paqueterÃ­a de tu preferencia por ocurre. ', 'fotosProductos/141SAM_2997-OK.jpg', '2015-04-19 17:57:36'),
(46, 11, 'LOVE DOBLE PERFIL', 590, 'Material: MDF \r\nEspesor: 12 mm \r\nColor: Cualquier color.\r\nTamaÃ±o: 50x15 cm aprox.', 'Love de doble perfil en cualquier color, puedes elegir dos colores, uno para frente y otro para posterior, especiales para decoraciÃ³n o regalos.', 'Precios +IVA, enviamos a cualquier parte de la RepÃºblica en la paqueterÃ­a de tu preferencia por ocurre. \r\n', 'fotosProductos/582SAM_3001-OK.jpg', '2015-04-19 18:15:27'),
(47, 10, 'LETRA DECORATIVA 2', 220, 'Material: MDF \r\nEspesor: 12 mm \r\nColor: Cualquier textura o color. \r\nTamaÃ±o: 14x14 cm aprox.', 'Puede llevar cualquier color o textura ya que lleva impresiÃ³n en calidad fotogrÃ¡fica.\r\n', 'Precios +IVA, enviamos a cualquier parte de la RepÃºblica en la paqueterÃ­a de tu preferencia por ocurre. \r\n', 'fotosProductos/880SAM_3003-OK.jpg', '2015-04-19 18:23:33'),
(48, 8, 'NOMBRE Y PORTARETRATO ', 430, 'Material: MDF \r\nEspesor: 15 mm \r\nColor: Cualquiera\r\nTamaÃ±o: 50x18 cm aprox', 'Nombre con portaretrato independiente para utilizar juntos o separados, pueden ser con colores combinados, se utilizan parados o colgados.', 'Precios +IVA Enviamos a cualquier parte de la RepÃºblica en la paqueterÃ­a de tu preferencia por ocurre. ', 'fotosProductos/6DSCN1692-OKSUBIR.jpg', '2015-04-23 16:12:34'),
(49, 9, 'RENTA DE MESA P/BODA O XV AÃ‘OS', 1500, 'Mesa para bodas color blanco LOVE, con cubierta de cristal de 6mm.', 'Color: Blanco\r\nMaterial: Madera\r\nTamaÃ±o: 1.40X.80X.60m\r\n\r\nSe lleva, se instala y se recoge sin costos extras.', 'Pago en efectivo al reservar fecha,', 'fotosProductos/346SAM_3052-OK.jpg', '2015-04-27 00:33:16'),
(50, 11, 'CENTRO DE MESA', 350, 'Material: MDF \r\nEspesor: 12 mm \r\nColor: Cualquiera \r\nTamaÃ±o: 30X30 cm aprox.', 'Puede ser cualquier nombre o frase, costos conforme a cantidad, tamaÃ±o del texto y terminados.', 'Precios +IVA, enviamos a cualquier parte de la RepÃºblica en la paqueterÃ­a de tu preferencia por ocurre. ', 'fotosProductos/384SAM_3060-OK.jpg', '2015-05-22 12:40:07'),
(51, 10, 'LETRAS COLLAGE DE FOTOGRAFÃAS', 1150, 'Material: MDF \r\nEspesor: 18 mm \r\nColor: Cualquiera \r\nImpresiÃ³n: Cualquiera\r\nTamaÃ±o: 50x70 cm aprox.', 'Puede llevar cualquier color, fotografÃ­a o textura ya que lleva impresiÃ³n en calidad fotogrÃ¡fica.', 'Precios +IVA, enviamos a cualquier parte de la RepÃºblica en la paqueterÃ­a de tu preferencia por ocurre. ', 'fotosProductos/198SAM_3081-OK.jpg', '2015-06-10 11:19:44'),
(52, 11, 'PAQUETE MARCO PARA EVENTOS', 1200, 'MARCO TEMÃTICO PARA BODAS O EVENTOS SOCIALES\r\nMateria: Coroplast\r\nTamaÃ±o: 1.20x1.20m \r\nAplicaciones Extra: 5 (personalizadas)', 'El diseÃ±o del marco es personalizado y puede llevar cualquiero color, elemento o fotografÃ­a e incluye 5 letreros con o sin palo para sostener.', 'PRECIOS +IVA en caso de requerir facturas.', 'fotosProductos/45SAM_3126 OK.jpg', '2015-07-23 15:39:28'),
(53, 5, 'PORTARETRATO MINNIE', 200, 'PORTARETRATO MINNIE 1 FOTOGRAFÃA', 'Material: MDF Espesor: 12 mm y 6 mm TamaÃ±o: 20x20 cm aprox.', 'Enviamos por cualquier paqueterÃ­a por ocurre.', 'fotosProductos/75SAM_3127-ok.jpg', '2015-08-18 16:17:19'),
(54, 12, 'TAZA PERSONALIZADAS', 120, 'Taza personalizada de 11 oz. con color interior, impresa a color ', 'Se requiere el archivo para imprimir o se les puede realizar el diseÃ±o.', 'Precios +IVA en caso de requerir factura, enviamos a cualquier parte de la RepÃºblica por ocurre.', 'fotosProductos/702taza 1.jpg', '2015-10-26 10:35:52'),
(55, 11, 'Mueble ELEFANTE', 2500, 'Elefante Mueble para decoraciÃ³n de interior, ideal como juguetero para niÃ±os.', 'TamaÃ±o: 1.10 ancho X .70 alto \r\nColor: Cualquiera.\r\nTiempo de entrega: 1 semana.   ', 'Precio +IVA en caso de requerir factura, enviamos a cualquier parte de la RepÃºblica por ocurre.', 'fotosProductos/750SAM_3613.OK.jpg', '2015-10-26 10:43:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitas`
--

CREATE TABLE IF NOT EXISTS `visitas` (
  `id` bigint(20) NOT NULL,
  `contador` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `visitas`
--

INSERT INTO `visitas` (`id`, `contador`) VALUES
(1, 2775);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
