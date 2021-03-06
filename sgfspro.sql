-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-06-2020 a las 04:54:58
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sgfspro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `currencies`
--

CREATE TABLE `currencies` (
  `iso` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `currencies`
--

INSERT INTO `currencies` (`iso`, `created_at`, `updated_at`) VALUES
('cop', '2020-06-26 16:42:01', '2020-06-26 16:42:01'),
('eur', '2020-06-26 16:42:01', '2020-06-26 16:42:01'),
('usd', '2020-06-26 16:42:01', '2020-06-26 16:42:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domicilio`
--

CREATE TABLE `domicilio` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Ciudad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Direccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nombres` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Apellidos` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NroDocumento` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Telefono` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Clave` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `idTipoDocumento` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `Nombres`, `Apellidos`, `NroDocumento`, `Email`, `Telefono`, `Clave`, `estado`, `created_at`, `updated_at`, `idTipoDocumento`) VALUES
(1, 'Carlos andres', 'Villegas Rendon', '1478523969', 'carlos@hotmail.com', '31244578', '12345678', 'activo', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `nombre`, `descripcion`, `estado`, `imagen`, `created_at`, `updated_at`) VALUES
(3, 'Matrimonio', '*', 'activo', 'Matrimonio1592630714.jpeg', '2020-06-20 05:25:14', '2020-06-20 05:25:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos_servicios`
--

CREATE TABLE `eventos_servicios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idServicios` bigint(20) UNSIGNED NOT NULL,
  `idEventos` bigint(20) UNSIGNED NOT NULL,
  `cantidad` int(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `insumos`
--

CREATE TABLE `insumos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Valor` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad` int(50) NOT NULL,
  `Descripcion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Estado` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `insumos`
--

INSERT INTO `insumos` (`id`, `Nombre`, `Valor`, `cantidad`, `Descripcion`, `Estado`, `Foto`, `created_at`, `updated_at`) VALUES
(1, 'Orquidia', '5000', 8, '*', 'activo', 'C:\\xampp\\tmp\\php1508.tmp', '2020-06-05 00:22:02', '2020-06-20 20:35:08'),
(2, 'Muñeco', '50000', 18, '*', 'activo', 'C:\\xampp\\tmp\\php8209.tmp', '2020-06-05 01:56:26', '2020-06-05 21:07:00'),
(3, 'Girasoles', '75000', 6, '*', 'activo', 'C:\\xampp\\tmp\\php5563.tmp', '2020-06-05 01:58:25', '2020-06-08 13:30:32'),
(4, 'Rosas', '5000', 0, '*', 'inactivo', 'C:\\xampp\\tmp\\phpE020.tmp', '2020-06-06 15:26:53', '2020-06-08 18:51:52'),
(5, 'Caja', '36000', 5, '*', 'activo', 'C:\\xampp\\tmp\\php42E2.tmp', '2020-06-06 15:27:18', '2020-06-07 18:04:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_03_13_134919_create_tipo_documento_table', 1),
(5, '2020_03_23_001038_create_empleados_table', 1),
(6, '2020_03_27_012218_create_servicios_table', 1),
(7, '2020_03_28_185401_create_insumos_table', 1),
(8, '2020_04_17_183738_create_domicilio_table', 1),
(9, '2020_05_04_151443_create_pedido_table', 1),
(10, '2020_05_04_155115_create_producto_table', 1),
(11, '2020_05_18_194440_create_role_user_table', 1),
(12, '2020_05_18_205150_create_role_table', 1),
(13, '2020_05_18_210846_create_role_has_permissions_table', 1),
(14, '2020_06_02_221021_create_producto_insumo_table', 1),
(15, '2020_06_16_161847_create_evento_table', 2),
(16, '2020_06_16_163417_create_eventos_table', 3),
(17, '2020_06_16_192316_create_eventos_servicios_table', 4),
(18, '2020_06_19_151114_create_pedido_evento_table', 5),
(19, '2020_06_21_235047_create_pedido_evento_table', 6),
(20, '2020_06_26_090738_create_payment_platforms_table', 7),
(21, '2020_06_26_091033_create_currencies_table', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `payment_platforms`
--

CREATE TABLE `payment_platforms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `payment_platforms`
--

INSERT INTO `payment_platforms` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Paypal', 'img/payment.platforms/paypal.jpg.jpg', '2020-06-26 16:42:01', '2020-06-26 16:42:01'),
(2, 'Pse', 'img/payment.platforms/pse.jpg', '2020-06-26 16:42:01', '2020-06-26 16:42:01'),
(3, 'Stripe', 'img/payment.platforms/stripe.jpg.jpg', '2020-06-26 16:42:01', '2020-06-26 16:42:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `IdCliente` bigint(20) UNSIGNED NOT NULL,
  `IdProducto` bigint(20) UNSIGNED NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `valor` int(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id`, `IdCliente`, `IdProducto`, `descripcion`, `cantidad`, `valor`, `created_at`, `updated_at`) VALUES
(1, 4, 1, '*', 0, 0, NULL, NULL),
(2, 2, 4, '*', 0, 0, NULL, NULL),
(3, 2, 4, '*', 0, 0, NULL, NULL),
(4, 2, 4, '*', 1, 0, NULL, NULL),
(5, 2, 5, '*', 5, 0, NULL, NULL),
(6, 2, 5, '*', 1, 0, NULL, NULL),
(7, 2, 5, '*', 1, 0, NULL, NULL),
(8, 2, 5, '*', 1, 66000, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidoevento`
--

CREATE TABLE `pedidoevento` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idCliente` bigint(20) UNSIGNED NOT NULL,
  `idEvento` bigint(20) UNSIGNED NOT NULL,
  `idServicio` bigint(20) UNSIGNED NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pedidoevento`
--

INSERT INTO `pedidoevento` (`id`, `idCliente`, `idEvento`, `idServicio`, `descripcion`, `valor`, `fecha`, `created_at`, `updated_at`) VALUES
(1, 2, 3, 3, '*', '81200', '2020-06-27', '2020-06-22 05:03:14', '2020-06-22 05:03:14'),
(2, 2, 3, 3, '*', '11200', '2020-06-27', '2020-06-23 14:53:35', '2020-06-23 14:53:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombreProducto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombreProducto`, `valor`, `descripcion`, `estado`, `cantidad`, `imagen`, `created_at`, `updated_at`) VALUES
(1, 'Caja de girasoles', '450000', '*', 'activo', '6', 'Caja de girasoles1591623006.jpeg', '2020-06-08 13:30:06', '2020-06-08 18:51:11'),
(3, 'Caja de rosas', '20000', '*', 'activo', '5', 'Caja de rosas1591623176.jpeg', '2020-06-08 13:32:56', '2020-06-08 13:32:56'),
(4, 'Ramo de flores', '40000', '*', 'inactivo', '0', 'Ramo de flores1591623308.jpeg', '2020-06-08 13:35:08', '2020-06-26 21:20:46'),
(5, 'Rosas', '66000', '*', 'activo', '1', 'Rosas1591642312.jpeg', '2020-06-08 18:51:52', '2020-06-26 23:04:46'),
(6, 'Caja de flores', '10000', '*', 'activo', '5', 'Caja de flores1592685308.jpeg', '2020-06-20 20:35:08', '2020-06-20 20:35:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_insumo`
--

CREATE TABLE `producto_insumo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `IdProducto` bigint(20) UNSIGNED NOT NULL,
  `IdInsumos` bigint(20) UNSIGNED NOT NULL,
  `Cantidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `producto_insumo`
--

INSERT INTO `producto_insumo` (`id`, `IdProducto`, `IdInsumos`, `Cantidad`, `created_at`, `updated_at`) VALUES
(5, 3, 1, '7', '2020-06-04 21:59:37', '2020-06-04 21:59:37'),
(6, 4, 1, '7', '2020-06-04 22:00:32', '2020-06-04 22:00:32'),
(7, 5, 1, '5', '2020-06-04 22:01:49', '2020-06-04 22:01:49'),
(8, 6, 1, '5', '2020-06-04 22:01:56', '2020-06-04 22:01:56'),
(9, 1, 1, '7', '2020-06-04 22:05:54', '2020-06-04 22:05:54'),
(11, 3, 3, '2', '2020-06-04 23:58:16', '2020-06-04 23:58:16'),
(12, 4, 1, '5', '2020-06-05 00:17:16', '2020-06-05 00:17:16'),
(13, 1, 1, '4', '2020-06-05 02:22:02', '2020-06-05 02:22:02'),
(15, 3, 2, '2', '2020-06-05 21:07:00', '2020-06-05 21:07:00'),
(16, 4, 3, '3', '2020-06-06 15:28:33', '2020-06-06 15:28:33'),
(17, 5, 5, '5', '2020-06-07 17:57:17', '2020-06-07 17:57:17'),
(19, 3, 4, '4', '2020-06-08 13:32:57', '2020-06-08 13:32:57'),
(20, 4, 1, '3', '2020-06-08 13:35:08', '2020-06-08 13:35:08'),
(21, 5, 4, '6', '2020-06-08 18:51:52', '2020-06-08 18:51:52'),
(22, 6, 1, '2', '2020-06-20 20:35:08', '2020-06-20 20:35:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role`
--

CREATE TABLE `role` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Descripcion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Valor` decimal(50,2) NOT NULL,
  `Estado` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `Nombre`, `Descripcion`, `Valor`, `Estado`, `created_at`, `updated_at`) VALUES
(1, 'Comida', '*', '5000.00', 'activo', NULL, NULL),
(2, 'Musica', '*', '75000.00', 'activo', NULL, NULL),
(3, 'Meseros', '*', '6200.00', 'activo', NULL, NULL),
(4, 'Serenata', '*', '12000.00', 'activo', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodocumento`
--

CREATE TABLE `tipodocumento` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipodocumento`
--

INSERT INTO `tipodocumento` (`id`, `Nombre`, `created_at`, `updated_at`) VALUES
(1, 'Tarjeta de Identidad', NULL, NULL),
(2, 'Cedula Ciudadana', NULL, NULL),
(3, 'Tarjeta de Identidad', NULL, NULL),
(4, 'Cedula Ciudadana', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Domicilio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre`, `apellido`, `Domicilio`, `email`, `email_verified_at`, `password`, `telefono`, `role`, `estado`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jhoan Sebastian', 'Duque Zapata', 'Calle 45#12-36', 'jhoan1113@hotmail.com', NULL, '$2y$10$mhU.Lbw3uJGAJ3KLYJpVK.BMQkW1EZCEr0sCuVK4rilR0IGxqAknC', '3197806869', 'admin', 'activo', 'gZM8fxJC9RFeVhaKbDd5gh0WKPpXKeZFn6gfZ7H3t8jIYmHdria4CHYQgO0T', '2020-06-04 21:34:24', '2020-06-08 18:53:08'),
(2, 'Carlos Andres', 'Villegas Rendon', 'Calle 45# 96-12', 'villegas@gmail.com', NULL, '$2y$10$i5sfjGL5V9blNu2orrnbbO21AfxMqSTw2vy2eIvCdmGHKWDXyJOGu', '3124654876', 'cliente', 'activo', NULL, '2020-06-05 21:03:05', '2020-06-23 01:15:19'),
(3, 'Hector', 'Zapata', 'Calle 45# 96-12', 'jhoanduque1113@gmail.com', NULL, '$2y$10$pHNVqyO7mIBS5reAr14qOeMytm8QZJ8pl.thZdZB7rRcLY7gUIYue', '3164529645', 'cliente', 'inactivo', 'jHerkJSPojeUQ1fIH50mwJGOhdlzhW2i8hppwvGH7JrCDeTwLdCC2a8e7N1n', '2020-06-06 15:24:32', '2020-06-23 00:38:56'),
(4, 'Jhoan', 'Duque', 'Calle 45# 96-45', 'jsduque64@misena.edu.co', NULL, '$2y$10$KDJcUUv4TUrv01uXFLA20u8tk1arM.ri0MyxYXimVUvyxW1m8RTum', '3197806869', 'cliente', 'activo', NULL, '2020-06-08 18:49:58', '2020-06-08 18:49:58'),
(5, 'Carlos Andres', 'Thor Thorfin', 'Olimpo', 'thortillas@olimpo.com', NULL, '$2y$10$UwrS/9agDph9HvWNihxcbehg4IbR3fX2XylSrVbZwehx7czgz.8IG', '31256794', 'cliente', 'activo', NULL, '2020-06-23 06:21:53', '2020-06-23 06:21:53');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`iso`);

--
-- Indices de la tabla `domicilio`
--
ALTER TABLE `domicilio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `empleados_nrodocumento_unique` (`NroDocumento`),
  ADD UNIQUE KEY `empleados_email_unique` (`Email`),
  ADD KEY `empleados_idtipodocumento_foreign` (`idTipoDocumento`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eventos_servicios`
--
ALTER TABLE `eventos_servicios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `eventos_servicios_idservicios_foreign` (`idServicios`),
  ADD KEY `eventos_servicios_ideventos_foreign` (`idEventos`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `insumos`
--
ALTER TABLE `insumos`
  ADD PRIMARY KEY (`id`);

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
-- Indices de la tabla `payment_platforms`
--
ALTER TABLE `payment_platforms`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pedido_idcliente_foreign` (`IdCliente`),
  ADD KEY `IdProducto` (`IdProducto`);

--
-- Indices de la tabla `pedidoevento`
--
ALTER TABLE `pedidoevento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pedidoevento_idcliente_foreign` (`idCliente`),
  ADD KEY `pedidoevento_idevento_foreign` (`idEvento`),
  ADD KEY `pedidoevento_idservicio_foreign` (`idServicio`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto_insumo`
--
ALTER TABLE `producto_insumo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `producto_insumo_idinsumos_foreign` (`IdInsumos`),
  ADD KEY `producto_insumo_idproducto_foreign` (`IdProducto`);

--
-- Indices de la tabla `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipodocumento`
--
ALTER TABLE `tipodocumento`
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
-- AUTO_INCREMENT de la tabla `domicilio`
--
ALTER TABLE `domicilio`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `eventos_servicios`
--
ALTER TABLE `eventos_servicios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `insumos`
--
ALTER TABLE `insumos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `payment_platforms`
--
ALTER TABLE `payment_platforms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `pedidoevento`
--
ALTER TABLE `pedidoevento`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `producto_insumo`
--
ALTER TABLE `producto_insumo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `role`
--
ALTER TABLE `role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipodocumento`
--
ALTER TABLE `tipodocumento`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_idtipodocumento_foreign` FOREIGN KEY (`idTipoDocumento`) REFERENCES `tipodocumento` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `eventos_idservicio_foreign` FOREIGN KEY (`idServicio`) REFERENCES `servicios` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `eventos_servicios`
--
ALTER TABLE `eventos_servicios`
  ADD CONSTRAINT `eventos_servicios_ideventos_foreign` FOREIGN KEY (`idEventos`) REFERENCES `eventos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `eventos_servicios_idservicios_foreign` FOREIGN KEY (`idServicios`) REFERENCES `servicios` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`IdProducto`) REFERENCES `producto` (`id`),
  ADD CONSTRAINT `pedido_idcliente_foreign` FOREIGN KEY (`IdCliente`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `pedidoevento`
--
ALTER TABLE `pedidoevento`
  ADD CONSTRAINT `pedidoevento_idcliente_foreign` FOREIGN KEY (`idCliente`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `pedidoevento_idevento_foreign` FOREIGN KEY (`idEvento`) REFERENCES `eventos` (`id`),
  ADD CONSTRAINT `pedidoevento_idservicio_foreign` FOREIGN KEY (`idServicio`) REFERENCES `servicios` (`id`);

--
-- Filtros para la tabla `producto_insumo`
--
ALTER TABLE `producto_insumo`
  ADD CONSTRAINT `producto_insumo_idinsumos_foreign` FOREIGN KEY (`IdInsumos`) REFERENCES `insumos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `producto_insumo_idproducto_foreign` FOREIGN KEY (`IdProducto`) REFERENCES `producto` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
