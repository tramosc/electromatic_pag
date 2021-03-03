-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 03-03-2021 a las 16:10:24
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pag_electromatic`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titulo_blog` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion_blog` longtext COLLATE utf8mb4_unicode_ci,
  `img_portada` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_contenido` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parrafo1` longtext COLLATE utf8mb4_unicode_ci,
  `parrafo2` longtext COLLATE utf8mb4_unicode_ci,
  `parrafo3` longtext COLLATE utf8mb4_unicode_ci,
  `fecha` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capacitaciones`
--

DROP TABLE IF EXISTS `capacitaciones`;
CREATE TABLE IF NOT EXISTS `capacitaciones` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titulo_capacitacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion_capacitacion` longtext COLLATE utf8mb4_unicode_ci,
  `link` mediumtext COLLATE utf8mb4_unicode_ci,
  `precio` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_portada` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulo_archivo1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pdf_archivo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo_archivo2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pdf_archivodos` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo_archivo3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pdf_archivotres` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo_archivo4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pdf_archivocuatro` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

DROP TABLE IF EXISTS `grupos`;
CREATE TABLE IF NOT EXISTS `grupos` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titulo_grupo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion_grupo` longtext COLLATE utf8mb4_unicode_ci,
  `precio` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_uno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_dos` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_tres` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_cuatro` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_cinco` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_seis` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_siete` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_zoom1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_zoom2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_zoom3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_zoom4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes_empresas`
--

DROP TABLE IF EXISTS `imagenes_empresas`;
CREATE TABLE IF NOT EXISTS `imagenes_empresas` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titulo_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_empresa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `manuales`
--

DROP TABLE IF EXISTS `manuales`;
CREATE TABLE IF NOT EXISTS `manuales` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titulo_manual` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci,
  `detalles` longtext COLLATE utf8mb4_unicode_ci,
  `referencias` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `archivo_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_12_22_161552_create_manuales_table', 1),
(5, '2020_12_22_161710_create_postulantes_table', 1),
(6, '2020_12_22_161728_create_servicios_table', 1),
(7, '2021_01_20_192937_create_grupos_table', 1),
(8, '2021_01_20_193058_create_pozos_table', 1),
(9, '2021_01_20_193111_create_ups_table', 1),
(10, '2021_01_20_193138_create_capacitaciones_table', 1),
(11, '2021_02_02_143213_create_imagenes_empresas_table', 1),
(12, '2021_02_05_144054_create_suministros_table', 1),
(13, '2021_02_05_210505_create_blogs_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulantes`
--

DROP TABLE IF EXISTS `postulantes`;
CREATE TABLE IF NOT EXISTS `postulantes` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dni` int(11) NOT NULL,
  `telefono` int(11) NOT NULL,
  `correo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cv` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pozos`
--

DROP TABLE IF EXISTS `pozos`;
CREATE TABLE IF NOT EXISTS `pozos` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titulo_pozo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion_pozo` longtext COLLATE utf8mb4_unicode_ci,
  `precio` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_uno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_dos` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_tres` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_cuatro` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_cinco` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_seis` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_siete` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_zoom1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_zoom2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_zoom3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_zoom4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

DROP TABLE IF EXISTS `servicios`;
CREATE TABLE IF NOT EXISTS `servicios` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titulo_servicios` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_portada` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci,
  `titulo1` mediumtext COLLATE utf8mb4_unicode_ci,
  `parrafo1` longtext COLLATE utf8mb4_unicode_ci,
  `titulo2` mediumtext COLLATE utf8mb4_unicode_ci,
  `parrafo2` longtext COLLATE utf8mb4_unicode_ci,
  `titulo3` mediumtext COLLATE utf8mb4_unicode_ci,
  `parrafo3` longtext COLLATE utf8mb4_unicode_ci,
  `img_uno` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_dos` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_tres` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_cuatro` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_cinco` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_seis` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_siete` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_ocho` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_nueve` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suministros`
--

DROP TABLE IF EXISTS `suministros`;
CREATE TABLE IF NOT EXISTS `suministros` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titulo_suministro` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion_suministro` longtext COLLATE utf8mb4_unicode_ci,
  `precio` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_uno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_dos` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_tres` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_cuatro` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_cinco` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_seis` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_siete` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_zoom1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_zoom2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_zoom3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_zoom4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ups`
--

DROP TABLE IF EXISTS `ups`;
CREATE TABLE IF NOT EXISTS `ups` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titulo_ups` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion_ups` longtext COLLATE utf8mb4_unicode_ci,
  `precio` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_uno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_dos` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_tres` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_cuatro` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_cinco` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_seis` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_siete` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_zoom1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_zoom2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_zoom3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_zoom4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
