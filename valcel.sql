-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 30-03-2024 a las 20:10:35
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `valcel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  `dni` bigint(20) DEFAULT NULL,
  `telefono` bigint(20) DEFAULT NULL,
  `zona` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `apellido`, `dni`, `telefono`, `zona`, `created_at`, `updated_at`) VALUES
(1, 'Valentin', 'Urbine', 43056621, 3364036241, 'Norte', '2024-03-22 17:54:38', '2024-03-22 17:54:38'),
(2, 'Ana Beatriz', 'Soberano', 16342434, 3364609615, 'Norte', '2024-03-22 18:12:08', '2024-03-30 07:59:21'),
(3, 'Gabriela', 'Coronel', NULL, NULL, 'Norte', '2024-03-22 18:12:24', '2024-03-22 18:12:24'),
(4, 'Matyas', 'García', NULL, NULL, 'Norte', '2024-03-22 18:15:37', '2024-03-22 18:15:37'),
(5, 'Alejandra', 'Navarre', NULL, NULL, 'Norte', '2024-03-22 18:15:51', '2024-03-22 18:15:51'),
(6, 'Carolina', 'Schefer', NULL, NULL, 'Null', '2024-03-22 18:16:17', '2024-03-30 08:00:04'),
(7, 'Carina', 'Pedredos', NULL, NULL, 'Norte', '2024-03-22 18:16:31', '2024-03-22 18:16:31'),
(8, 'Ariana', 'Sánchez', NULL, NULL, 'Norte', '2024-03-22 18:16:42', '2024-03-22 18:16:42'),
(9, 'Susana', NULL, NULL, NULL, 'Null', '2024-03-22 18:16:55', '2024-03-22 18:16:55'),
(10, 'Pepe', NULL, NULL, NULL, 'Null', '2024-03-22 18:17:03', '2024-03-22 18:17:03'),
(11, 'Carolina', 'Villalba', NULL, NULL, 'Centro', '2024-03-22 18:17:12', '2024-03-22 18:17:12'),
(12, 'Maricel', 'Anriquez', NULL, NULL, 'Sur', '2024-03-22 18:17:26', '2024-03-22 18:17:26'),
(13, 'Antonella', 'Yocu', NULL, NULL, 'Sur', '2024-03-22 18:17:38', '2024-03-22 18:17:38'),
(14, 'Cecilia', 'Gamarra', NULL, NULL, 'Norte', '2024-03-22 18:18:09', '2024-03-22 18:18:09'),
(15, 'Magalí', 'Lara', NULL, NULL, 'Oeste', '2024-03-22 18:18:39', '2024-03-22 18:18:39'),
(16, 'Guadalupe', 'Romagnoli', NULL, NULL, 'Null', '2024-03-22 18:18:50', '2024-03-22 18:18:50'),
(17, 'Lujan', 'Arballo', NULL, NULL, 'Norte', '2024-03-22 18:19:22', '2024-03-22 18:19:22'),
(18, 'Andrea', 'Mazzacco', NULL, NULL, 'Norte', '2024-03-22 18:19:48', '2024-03-22 18:19:48'),
(19, 'Miriam', NULL, NULL, NULL, 'Sur', '2024-03-22 18:20:03', '2024-03-22 18:20:03'),
(20, 'Andrea', NULL, NULL, NULL, 'Oeste', '2024-03-22 18:20:11', '2024-03-22 18:20:11'),
(21, 'Brenda', 'B° Alcoholera', NULL, NULL, 'Sur', '2024-03-22 18:20:36', '2024-03-22 18:20:36'),
(22, 'Solange', NULL, NULL, NULL, 'Norte', '2024-03-22 18:20:44', '2024-03-22 18:20:44'),
(23, 'Ely', 'Dentone', NULL, NULL, 'Norte', '2024-03-22 18:20:51', '2024-03-22 18:20:51'),
(24, 'Gabriel', NULL, NULL, NULL, 'Null', '2024-03-22 18:20:57', '2024-03-22 18:20:57'),
(25, 'Marcelo', NULL, NULL, NULL, 'Centr', '2024-03-22 18:21:13', '2024-03-22 18:21:13'),
(26, 'Nano', NULL, NULL, NULL, 'Norte', '2024-03-22 18:22:20', '2024-03-22 18:22:20'),
(27, 'Gaston', 'Rotiseria', NULL, NULL, 'Centro', '2024-03-22 18:23:01', '2024-03-22 18:23:01'),
(28, 'Diego', 'B° Colombini', NULL, NULL, 'Oeste', '2024-03-22 18:23:14', '2024-03-22 18:23:14'),
(29, 'Angie', NULL, NULL, NULL, 'Norte', '2024-03-22 18:23:23', '2024-03-22 18:23:23'),
(30, 'Patricia \"Pato\"', 'Perez', NULL, NULL, 'Norte', '2024-03-22 18:23:48', '2024-03-22 18:23:48'),
(31, 'Nazareth', 'Cardone', NULL, NULL, 'Centro', '2024-03-22 18:24:04', '2024-03-22 18:24:04'),
(32, 'Marisa', NULL, NULL, NULL, 'Sur', '2024-03-22 18:24:20', '2024-03-22 18:24:20'),
(33, 'Mauro', 'B° Yaguarón', NULL, NULL, 'Norte', '2024-03-22 18:24:30', '2024-03-22 18:24:30'),
(34, 'Cristian', 'El Segundo', NULL, NULL, 'Norte', '2024-03-22 18:24:44', '2024-03-22 18:24:44'),
(35, 'Marta', 'Vecina', NULL, NULL, 'Norte', '2024-03-22 18:25:16', '2024-03-22 18:25:16'),
(36, 'Sra Mayer', NULL, NULL, NULL, 'Norte', '2024-03-22 18:25:34', '2024-03-22 18:25:34'),
(37, 'Esteban', 'Chávez', NULL, NULL, 'Norte', '2024-03-22 18:25:53', '2024-03-22 18:25:53'),
(38, 'Susana Beatriz', 'Ramírez', NULL, NULL, 'Norte', '2024-03-22 18:26:04', '2024-03-22 18:26:04'),
(39, 'Nadya', 'Bernardi', NULL, NULL, 'Sur', '2024-03-22 18:26:44', '2024-03-22 18:26:44'),
(40, 'Graciela', 'Vega', NULL, NULL, 'Null', '2024-03-22 18:26:52', '2024-03-22 18:26:52'),
(41, 'Alí', NULL, NULL, NULL, 'Norte', '2024-03-22 18:27:02', '2024-03-22 18:27:02'),
(42, 'Gerardo', 'Juárez', NULL, NULL, 'Sur', '2024-03-22 18:27:11', '2024-03-22 18:27:11'),
(43, 'Victor', 'Sandoval', NULL, NULL, 'Norte', '2024-03-22 18:27:19', '2024-03-22 18:27:19'),
(44, 'Maxi', NULL, NULL, NULL, 'Null', '2024-03-22 18:27:25', '2024-03-22 18:27:25'),
(45, 'Estela', NULL, NULL, NULL, 'Norte', '2024-03-22 18:28:07', '2024-03-22 18:28:07'),
(46, 'Patricia', NULL, NULL, NULL, 'Sur', '2024-03-22 18:28:17', '2024-03-22 18:28:17'),
(47, 'Maria Esther', NULL, NULL, NULL, 'Null', '2024-03-22 18:28:40', '2024-03-22 18:28:40'),
(48, 'Walter', NULL, NULL, NULL, 'Sur', '2024-03-22 18:30:16', '2024-03-22 18:30:16'),
(49, 'Lorena', 'Pueblo Esther', NULL, NULL, 'Null', '2024-03-22 18:30:29', '2024-03-22 18:30:29'),
(50, 'María', 'D', NULL, NULL, 'Norte', '2024-03-22 18:33:44', '2024-03-22 18:33:44'),
(51, 'Daiana', 'Pineda', NULL, NULL, 'Oeste', '2024-03-22 18:33:59', '2024-03-22 18:33:59'),
(52, 'Ana Laura', NULL, NULL, NULL, 'Sur', '2024-03-22 18:34:23', '2024-03-22 18:34:23'),
(53, 'Bibiana', NULL, NULL, NULL, 'Null', '2024-03-22 18:34:38', '2024-03-22 18:34:38'),
(54, 'Normis', NULL, NULL, NULL, 'Norte', '2024-03-22 18:34:46', '2024-03-22 18:34:46'),
(55, 'Lorena', 'B° Asonia', NULL, NULL, 'Norte', '2024-03-22 18:35:32', '2024-03-22 18:35:32'),
(56, 'Juan', 'Pueblo Pavón', NULL, NULL, 'Null', '2024-03-22 18:35:43', '2024-03-22 18:35:43'),
(57, 'Hugo', NULL, NULL, NULL, 'Oeste', '2024-03-22 18:35:57', '2024-03-22 18:35:57'),
(58, 'Norma', 'Gil Medina', NULL, NULL, 'Norte', '2024-03-22 18:36:18', '2024-03-22 18:36:18'),
(59, 'Carina Maky', NULL, NULL, NULL, 'Oeste', '2024-03-22 18:36:28', '2024-03-22 18:36:28'),
(60, 'Alejandro', NULL, NULL, NULL, 'Null', '2024-03-22 18:36:34', '2024-03-22 18:36:34'),
(61, 'José Alberto', 'Heffling', NULL, NULL, 'Norte', '2024-03-22 18:36:42', '2024-03-22 18:36:42'),
(62, 'Sergio', NULL, NULL, NULL, 'Centro', '2024-03-22 18:36:58', '2024-03-22 18:36:58'),
(63, 'Stella', 'Gauna', NULL, NULL, 'Sur', '2024-03-22 18:37:05', '2024-03-22 18:37:05'),
(64, 'Beatriz', 'Cuñada pato', NULL, NULL, 'Norte', '2024-03-22 18:37:28', '2024-03-22 18:37:28'),
(65, 'Cristian', 'Aguirre', NULL, NULL, 'Norte', '2024-03-22 18:37:38', '2024-03-22 18:37:38'),
(66, 'Laureana', NULL, NULL, NULL, 'Sur', '2024-03-22 18:37:46', '2024-03-22 18:37:46'),
(67, 'Irene', NULL, NULL, NULL, 'Norte', '2024-03-22 18:38:09', '2024-03-22 18:38:09'),
(68, 'Luciana', NULL, NULL, NULL, 'Norte', '2024-03-22 18:38:17', '2024-03-22 18:38:17'),
(69, 'Juan Ángel', NULL, NULL, NULL, 'Sur', '2024-03-22 18:38:24', '2024-03-22 18:38:24'),
(70, 'Eliana', NULL, NULL, NULL, 'Norte', '2024-03-22 18:38:35', '2024-03-22 18:38:35'),
(71, 'Lauri', NULL, NULL, NULL, 'Centro', '2024-03-22 18:38:41', '2024-03-22 18:38:41'),
(72, 'Fernanda', 'Lucherini', NULL, NULL, 'Sur', '2024-03-22 18:38:49', '2024-03-22 18:38:49'),
(73, 'Carla', 'Barcella', NULL, NULL, 'Norte', '2024-03-22 18:38:59', '2024-03-22 18:38:59'),
(74, 'Damián B° San Martín', NULL, NULL, NULL, 'Norte', '2024-03-22 18:39:34', '2024-03-22 18:39:34'),
(75, 'Sonia', NULL, NULL, NULL, 'Centro', '2024-03-22 18:39:45', '2024-03-22 18:39:45'),
(76, 'Lorena', NULL, NULL, NULL, 'Null', '2024-03-22 18:39:55', '2024-03-22 18:39:55'),
(77, 'Fernanda', 'Carbonell', NULL, NULL, 'Oeste', '2024-03-22 18:40:07', '2024-03-22 18:40:07'),
(78, 'Cliente San Pablo', NULL, NULL, NULL, 'Norte', '2024-03-22 18:40:21', '2024-03-22 18:40:21'),
(79, 'Mimi Zona Oeste', NULL, NULL, NULL, 'Oeste', '2024-03-22 18:40:38', '2024-03-22 18:40:38'),
(80, 'Alejandro', 'B° Ayres del Sur', NULL, NULL, 'Sur', '2024-03-22 18:41:02', '2024-03-22 18:41:02'),
(81, 'Virginia', 'Barón', NULL, NULL, 'Centro', '2024-03-22 18:41:11', '2024-03-22 18:41:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `macetas`
--

CREATE TABLE `macetas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `precio` int(11) NOT NULL,
  `peso` decimal(8,2) NOT NULL,
  `base` int(11) NOT NULL,
  `altura` int(11) NOT NULL,
  `boca` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `macetas`
--

INSERT INTO `macetas` (`id`, `nombre`, `precio`, `peso`, `base`, `altura`, `boca`, `stock`, `created_at`, `updated_at`) VALUES
(1, 'Cubo', 2000, 3.00, 15, 15, 15, 0, '2024-03-24 06:58:05', '2024-03-30 22:02:48'),
(2, 'Redonda', 3000, 10.00, 22, 30, 22, -1, '2024-03-24 06:58:41', '2024-03-30 21:33:12'),
(3, 'Rectangular', 5000, 12.00, 40, 20, 40, 3, '2024-03-24 07:00:33', '2024-03-30 21:52:24'),
(4, 'Cuadrada', 5500, 15.00, 30, 30, 30, 3, '2024-03-24 07:01:05', '2024-03-30 21:33:12'),
(5, 'Cónica', 5700, 16.00, 22, 40, 30, 3, '2024-03-24 07:02:48', '2024-03-30 21:33:13'),
(6, 'Piramidal', 6000, 16.00, 17, 73, 22, 0, '2024-03-24 07:03:43', '2024-03-30 21:40:34'),
(7, 'Pilar', 4500, 13.00, 15, 73, 15, -1, '2024-03-24 07:04:03', '2024-03-30 21:52:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(37, '2014_10_12_000000_create_users_table', 1),
(38, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(39, '2014_10_12_100000_create_password_resets_table', 1),
(40, '2019_08_19_000000_create_failed_jobs_table', 1),
(41, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(42, '2024_03_21_164412_create_macetas_table', 1),
(43, '2024_03_22_111633_create_clientes_table', 1),
(44, '2024_03_24_031846_create_ventas_table', 1),
(45, '2024_03_24_032429_create_venta_maceta_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cliente_id` bigint(20) UNSIGNED DEFAULT NULL,
  `unidades` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `observacion` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta_maceta`
--

CREATE TABLE `venta_maceta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `venta_id` bigint(20) UNSIGNED DEFAULT NULL,
  `maceta_id` bigint(20) UNSIGNED DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precio_unitario` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `macetas`
--
ALTER TABLE `macetas`
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
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ventas_cliente_id_foreign` (`cliente_id`);

--
-- Indices de la tabla `venta_maceta`
--
ALTER TABLE `venta_maceta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `venta_maceta_venta_id_foreign` (`venta_id`),
  ADD KEY `venta_maceta_maceta_id_foreign` (`maceta_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `macetas`
--
ALTER TABLE `macetas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `venta_maceta`
--
ALTER TABLE `venta_maceta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_cliente_id_foreign` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`);

--
-- Filtros para la tabla `venta_maceta`
--
ALTER TABLE `venta_maceta`
  ADD CONSTRAINT `venta_maceta_maceta_id_foreign` FOREIGN KEY (`maceta_id`) REFERENCES `macetas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `venta_maceta_venta_id_foreign` FOREIGN KEY (`venta_id`) REFERENCES `ventas` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
