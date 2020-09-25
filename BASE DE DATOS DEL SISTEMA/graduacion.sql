-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-09-2020 a las 14:38:54
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `graduacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autors`
--

CREATE TABLE `autors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hejr_nombres` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hejr_apellidos` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hejr_tipo_dni` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hejr_dni` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hejr_sexo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hejr_fecha_autor` date DEFAULT NULL,
  `hejr_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hejr_estado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `autors`
--

INSERT INTO `autors` (`id`, `hejr_nombres`, `hejr_apellidos`, `hejr_tipo_dni`, `hejr_dni`, `hejr_sexo`, `hejr_fecha_autor`, `hejr_email`, `hejr_estado`, `created_at`, `updated_at`) VALUES
(1, 'CANDIDO', 'STROSIN', 'C', '7253727519', 'H', '1988-05-24', 'YBRAUN@HOTMAIL.COM', 'A', '2020-09-25 10:12:14', '2020-09-25 10:12:14'),
(2, 'RODERICK', 'WINTHEISER', 'C', '8231907583', 'H', '1982-10-14', 'ADELA.SHANAHAN@HOTMAIL.COM', 'A', '2020-09-25 10:12:14', '2020-09-25 10:12:14'),
(3, 'LARRY', 'SCHUMM', 'P', '9647032099', 'H', '1995-08-01', 'ADENESIK@HUDSON.NET', 'A', '2020-09-25 10:12:14', '2020-09-25 10:12:14'),
(5, 'DARYL', 'DUBUQUE', 'P', '8752959095', 'H', '1978-09-22', 'VICENTA72@SHANAHAN.INFO', 'A', '2020-09-25 10:12:14', '2020-09-25 10:12:14'),
(6, 'TIMOTHY', 'ROBEL', 'P', '7570546074', 'M', '2000-08-26', 'JUANITA.ZEMLAK@YAHOO.COM', 'A', '2020-09-25 10:12:14', '2020-09-25 10:12:14'),
(7, 'PIERCE', 'CARTER', 'C', '5310212878', 'M', '1993-09-02', 'GAYLORD62@BLICK.COM', 'A', '2020-09-25 10:12:14', '2020-09-25 10:12:14'),
(8, 'DARIAN', 'JOHNSTON', 'P', '3597768058', 'H', '1973-11-30', 'PETER17@HOTMAIL.COM', 'A', '2020-09-25 10:12:14', '2020-09-25 10:12:14'),
(9, 'SOFIA', 'EICHMANN', 'C', '9459452897', 'H', '1999-09-20', 'HAUER@DAUGHERTY.ORG', 'A', '2020-09-25 10:12:14', '2020-09-25 10:12:14'),
(10, 'IBRAHIM', 'WUCKERTR', 'P', '8848652528', 'M', '1973-07-28', 'GIBSON.KENYA@VEUM.COM', 'A', '2020-09-25 10:12:14', '2020-09-25 15:34:07'),
(11, 'JAYDE', 'SWANIAWSKI', 'C', '0322314301', 'H', '2012-10-09', 'LANG.JORDY@HOTMAIL.COM', 'A', '2020-09-25 10:12:14', '2020-09-25 10:12:14'),
(12, 'BILLY', 'NADERR', 'P', '8716542952', 'H', '1973-01-25', 'DEMOND.SCHOWALTER@HELLER.NET', 'A', '2020-09-25 10:12:14', '2020-09-25 15:35:28'),
(14, 'PEDRO', 'BEIER', 'C', '0972312794', 'H', '1983-08-14', 'WELCH.DESHAWN@FISHER.COM', 'A', '2020-09-25 10:12:14', '2020-09-25 12:28:35'),
(15, 'FERNADO MARQUEZ', 'EDU VOLTES', 'C', '1725024283', 'H', '1996-04-05', 'LOBO@GMAIL.COM', 'A', NULL, '2020-09-25 12:22:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editorials`
--

CREATE TABLE `editorials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hejr_nombre` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hejr_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hejr_estado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `editorials`
--

INSERT INTO `editorials` (`id`, `hejr_nombre`, `hejr_email`, `hejr_estado`, `created_at`, `updated_at`) VALUES
(1, 'LYNCH-RITCHIE', 'VSTAMM@EXAMPLE.COM', 'A', '2020-09-25 10:12:14', '2020-09-25 10:12:14'),
(2, 'BARROWS, DUBUQUE AND DOUGLAS', 'JERAMY.WIEGAND@EXAMPLE.COM', 'A', '2020-09-25 10:12:14', '2020-09-25 10:12:14'),
(3, 'KUPHAL LTD', 'GAIL.MILLER@EXAMPLE.ORG', 'A', '2020-09-25 10:12:14', '2020-09-25 10:12:14'),
(4, 'HOWE-KRAJCIK', 'FOKON@EXAMPLE.COM', 'A', '2020-09-25 10:12:14', '2020-09-25 10:12:14'),
(5, 'WEHNER-HERMAN', 'BUCKRIDGE.HENRIETTE@EXAMPLE.COM', 'A', '2020-09-25 10:12:14', '2020-09-25 10:12:14'),
(6, 'KUNZE, BOEHM AND HOWELL', 'MEGANE87@EXAMPLE.COM', 'A', '2020-09-25 10:12:14', '2020-09-25 10:12:14'),
(7, 'WILDERMAN LTD', 'TORPHY.LONNIE@EXAMPLE.ORG', 'A', '2020-09-25 10:12:14', '2020-09-25 10:12:14'),
(8, 'TORP-PARKER', 'JAQUELIN34@EXAMPLE.ORG', 'A', '2020-09-25 10:12:14', '2020-09-25 10:12:14'),
(9, 'HERMANN LTD', 'LITTEL.HERSHEL@EXAMPLE.NET', 'A', '2020-09-25 10:12:14', '2020-09-25 10:12:14'),
(10, 'PARISIAN-RYAN', 'ZREYNOLDS@EXAMPLE.ORG', 'A', '2020-09-25 10:12:14', '2020-09-25 10:12:14'),
(11, 'KAUTZER, EICHMANN AND HERMISTON', 'VWELCH@EXAMPLE.ORG', 'A', '2020-09-25 10:12:14', '2020-09-25 10:12:14'),
(12, 'BRAUN LLC', 'BASHIRIAN.BRADFORD@EXAMPLE.COM', 'A', '2020-09-25 10:12:14', '2020-09-25 10:12:14'),
(13, 'FRIESEN LLC', 'KRAJCIK.STEVE@EXAMPLE.ORG', 'A', '2020-09-25 10:12:14', '2020-09-25 10:12:14'),
(14, 'ALTENWERTH, POLLICH AND FAY', 'ARJUN04@EXAMPLE.NET', 'A', '2020-09-25 10:12:14', '2020-09-25 10:12:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `autor_id` bigint(20) UNSIGNED NOT NULL,
  `editorial_id` bigint(20) UNSIGNED NOT NULL,
  `hejr_ISBN` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hejr_titulo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hejr_anio` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hejr_precio_venta` decimal(11,2) DEFAULT NULL,
  `hejr_otros_autores` text COLLATE utf8mb4_unicode_ci,
  `hejr_estado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id`, `autor_id`, `editorial_id`, `hejr_ISBN`, `hejr_titulo`, `hejr_anio`, `hejr_precio_venta`, `hejr_otros_autores`, `hejr_estado`, `created_at`, `updated_at`) VALUES
(1, 2, 2, '978-612-466241-9-2', 'BLANCAS NIEVES', '2000', '56.79', 'MIGUEL SANCHES FERNANDO, LUIDA SIM', 'A', NULL, NULL),
(2, 3, 1, '99921-58-10-7', 'LOS TRES CERDITOS', '1991', '51.36', 'ERIKA LOMAS', 'A', NULL, NULL),
(3, 3, 2, '978-2403-577-0', 'LA JUNGLAS', '1996', '48.08', 'PEDRO MANUEL', 'A', NULL, '2020-09-25 16:55:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_09_25_043727_create_libros_table', 1),
(5, '2020_09_25_043758_create_rols_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rols`
--

CREATE TABLE `rols` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hejr_nombre` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hejr_estado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `rols`
--

INSERT INTO `rols` (`id`, `hejr_nombre`, `hejr_estado`, `created_at`, `updated_at`) VALUES
(1, 'ADMINISTRADOR', 'A', NULL, NULL),
(2, 'VENDEDOR', 'A', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rol_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dni` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sexo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `direccion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `rol_id`, `name`, `email`, `email_verified_at`, `password`, `dni`, `sexo`, `direccion`, `telefono`, `fecha_nacimiento`, `foto`, `estado`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'EDUARDO JARAMILLO', 'ADMIN@GMAIL.COM', NULL, '$2y$10$PZ3iuv4jfqcPZaZJITQ8XOfj/ooPpL8qavuSuTbYewdTVjVtweOEO', '1001245781', 'H', 'COTOCOLLAO Y AVENIDA MACHALA OE50', '09847151152', '1990-06-05', NULL, 'A', NULL, NULL, NULL),
(2, 2, 'MISHEL RODRIGUEZ', 'MISHEL@GMAIL.COM', NULL, '$2y$10$DqEY0/ImMbEXi0UFXFcRMeSzTGB7sMC9pFK3V1P0bvwVgdKi2I0R6', '172504781', 'M', 'AMAZONAS  Y  6 DE DICIEMBRE OE20', '0971515615', '1994-09-05', NULL, 'A', NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autors`
--
ALTER TABLE `autors`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `editorials`
--
ALTER TABLE `editorials`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `libros_autor_id_foreign` (`autor_id`),
  ADD KEY `libros_editorial_id_foreign` (`editorial_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `rols`
--
ALTER TABLE `rols`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autors`
--
ALTER TABLE `autors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `editorials`
--
ALTER TABLE `editorials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `rols`
--
ALTER TABLE `rols`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `libros`
--
ALTER TABLE `libros`
  ADD CONSTRAINT `libros_autor_id_foreign` FOREIGN KEY (`autor_id`) REFERENCES `autors` (`id`),
  ADD CONSTRAINT `libros_editorial_id_foreign` FOREIGN KEY (`editorial_id`) REFERENCES `editorials` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
