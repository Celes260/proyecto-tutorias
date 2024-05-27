-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-05-2024 a las 17:57:35
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
-- Base de datos: `tutorias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('209400100@itstacambaro.edu.mx|192.168.120.1', 'i:1;', 1716075268),
('209400100@itstacambaro.edu.mx|192.168.120.1:timer', 'i:1716075268;', 1716075268),
('20940056@itstacambaro.edu.mx|192.168.120.1', 'i:3;', 1715277177),
('20940056@itstacambaro.edu.mx|192.168.120.1:timer', 'i:1715277177;', 1715277177),
('20940080@itstacambaro.edu.mx|192.168.120.1', 'i:1;', 1716075232),
('20940080@itstacambaro.edu.mx|192.168.120.1:timer', 'i:1716075232;', 1716075232),
('20940089@itstacambaro.edu.mx|192.168.120.1', 'i:2;', 1716579217),
('20940089@itstacambaro.edu.mx|192.168.120.1:timer', 'i:1716579217;', 1716579217),
('celes@gmail.com|192.168.120.1', 'i:1;', 1715796421),
('celes@gmail.com|192.168.120.1:timer', 'i:1715796421;', 1715796421),
('celestinomorenorodriguez@gmail.com|192.168.120.1', 'i:1;', 1716268946),
('celestinomorenorodriguez@gmail.com|192.168.120.1:timer', 'i:1716268946;', 1716268946),
('marychuy@gmail.com|192.168.120.1', 'i:1;', 1715400306),
('marychuy@gmail.com|192.168.120.1:timer', 'i:1715400306;', 1715400306);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `id` int(50) NOT NULL,
  `tutor_id` int(50) DEFAULT NULL,
  `semestre` int(10) DEFAULT NULL,
  `carrera` varchar(50) DEFAULT NULL,
  `grupo` varchar(50) NOT NULL,
  `updated_at` varchar(50) NOT NULL,
  `created_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`id`, `tutor_id`, `semestre`, `carrera`, `grupo`, `updated_at`, `created_at`) VALUES
(5, 13, 7, 'Ingeniería en Sistemas Computacionales', '2ISC', '2024-05-27 06:47:02', ''),
(8, 18, 2, 'Ingeniería en Sistemas Computacionales', '4ISC', '2024-05-27 06:48:13', '2024-05-17 06:43:49'),
(12, 16, 4, 'Ingeniería en innovación Agrícola', '4C', '2024-05-27 06:06:08', '2024-05-20 16:47:35'),
(14, 16, 0, 'sin asignar', 'sin asignar', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1);

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
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `tutor_id` int(50) NOT NULL,
  `indicadorA` int(10) NOT NULL,
  `indicadorB` int(10) NOT NULL,
  `indicadorC` int(10) NOT NULL,
  `indicadorD` int(10) NOT NULL,
  `comentarios` text NOT NULL,
  `estado` varchar(50) NOT NULL DEFAULT 'No realizada',
  `carrera` varchar(50) NOT NULL,
  `updated_at` varchar(50) DEFAULT NULL,
  `created_at` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('hIUeepzsDB1ppwOsSGbs7CspFCgt2g8eusrZq5VB', 40, '192.168.120.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiZEVTVnhJTHM4Mk1hT3l6Z0Z5ZnJNelVnUGszb0tQOVBHYTV0TnNWMSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjExMDoiaHR0cDovLzE5Mi4xNjguMTIwLjEvcHJveWVjdG8tdHV0b3JpYXMvcHVibGljL21vc3RyYXJBbHVtbm9zL0luZ2VuaWVyJUMzJUFEYSUyMGVuJTIwU2lzdGVtYXMlMjBDb21wdXRhY2lvbmFsZXMiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo0MDtzOjQ6ImF1dGgiO2E6MTp7czoyMToicGFzc3dvcmRfY29uZmlybWVkX2F0IjtpOjE3MTY3ODcxMjE7fX0=', 1716792497),
('PU5aLXMlousHBx6JNJnX8QJvz3XWgYgjYJOk1hM3', 40, '192.168.120.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiSnNTTG1iZnhIOFZDWUhURW9sWXpqb3JMWk15WFJBSnkwV0N1Q01qcyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjUxOiJodHRwOi8vMTkyLjE2OC4xMjAuMS9wcm95ZWN0by10dXRvcmlhcy9wdWJsaWMvbG9naW4iO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo0MDtzOjQ6ImF1dGgiO2E6MTp7czoyMToicGFzc3dvcmRfY29uZmlybWVkX2F0IjtpOjE3MTY3ODcxMDQ7fX0=', 1716787104);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutores`
--

CREATE TABLE `tutores` (
  `id` int(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidoPaterno` varchar(50) NOT NULL,
  `apellidoMaterno` varchar(50) NOT NULL,
  `numeroControl` varchar(50) NOT NULL,
  `updated_at` varchar(50) DEFAULT NULL,
  `created_at` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `tutores`
--

INSERT INTO `tutores` (`id`, `nombre`, `apellidoPaterno`, `apellidoMaterno`, `numeroControl`, `updated_at`, `created_at`) VALUES
(13, 'Nadia Ibeth', 'Gutierrez', 'Hernandez', '2094080', '2024-05-17 06:14:04', '2024-05-17 06:14:04'),
(15, 'Camarena', 'Sanchez', 'Perez', '209490', '2024-05-22 05:33:29', '2024-05-22 05:33:29'),
(16, 'sin asignar', 'sin asignar', 'sin asignar', 'sin asignar', NULL, NULL),
(18, 'Oscar', 'Alvares', 'Arriaga', '465165', '2024-05-27 05:58:21', '2024-05-27 05:58:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `grupo_id` int(50) DEFAULT 5,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `apellidoPaterno` varchar(50) NOT NULL DEFAULT 'rodriguez',
  `apellidoMaterno` varchar(50) NOT NULL DEFAULT 'moreno',
  `carrera` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'sistemas',
  `semestre` int(11) DEFAULT 8,
  `rol` varchar(50) NOT NULL DEFAULT 'alumno',
  `numeroControl` varchar(50) NOT NULL DEFAULT '20940087',
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `contra` varchar(50) DEFAULT NULL,
  `estadoEvaluacion` varchar(50) NOT NULL DEFAULT 'No realizada',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `grupo_id`, `name`, `apellidoPaterno`, `apellidoMaterno`, `carrera`, `semestre`, `rol`, `numeroControl`, `email`, `email_verified_at`, `password`, `contra`, `estadoEvaluacion`, `remember_token`, `created_at`, `updated_at`) VALUES
(40, 5, 'celestino', 'rodriguez', 'moreno', 'sistemas', 8, 'admin', '20940087', '20940087@itstacambaro.edu.mx', NULL, '$2y$12$3oKBpRA9x/mK6N6D8O3ZCOwes3qJA8H4ZKUcwZ9lJOs6M.V6pvZj2', '12345678', 'realizado', NULL, '2024-05-16 02:29:13', '2024-05-16 02:29:13'),
(42, 8, 'Aylin Marlene', 'Rosales', 'Aguilar', 'Ingeniería en Sistemas Computacionales', 8, 'alumno', '20940084', '20940084@itstacambaro.edu.mx', NULL, '$2y$12$TC.hhLNbDcuzApwzngYp5O6D3r8Y9A.H1WwJ9RlxJMx/lr3YOvxxW', '1bZjneUb', 'realizada', NULL, '2024-05-17 23:46:50', '2024-05-27 12:45:42'),
(43, 8, 'Josue Jair', 'Ziranda', 'Villalon', 'Ingeniería en Sistemas Computacionales', 8, 'alumno', '20940100', '20940100@itstacambaro.edu.mx', NULL, '$2y$12$iMWQ1l0l/wXjuV3ncnpUh.JYYotd3CjTGZc7c77s/xT1tOMUkimFa', 'aqlcN50t', 'realizada', NULL, '2024-05-17 23:47:07', '2024-05-27 13:38:35'),
(44, 14, 'Luis Alberto', 'Zavala', 'Cruz', 'Ingeniería en Sistemas Computacionales', 8, 'alumno', '2094080', '2094080@itstacambaro.edu.mx', NULL, '$2y$12$zyMEEkTQOH0ZRSpLKYDHke78SlnjeNMlJgOHQPtCizGaes3AHz/qS', 'NEUA6Tkg', 'realizada', NULL, '2024-05-17 23:47:22', '2024-05-19 06:34:43'),
(45, 14, 'Miguel Angel', 'Moreno', 'Garcia', 'Ingeniería en Sistemas Computacionales', 8, 'alumno', '2094088', '2094088@itstacambaro.edu.mx', NULL, '$2y$12$iSriTiH0BOF5X2k7euGNF.mz3vNkTOLUZQijx9J6u.cUl/laigjtC', 'UL524JJ7', 'realizada', NULL, '2024-05-17 23:47:56', '2024-05-24 00:56:38'),
(46, 14, 'Jose Ignacio', 'Valdez', 'Cornejo', 'Ingeniería en Sistemas Computacionales', 8, 'alumno', '20940089', '20940089@itstacambaro.edu.mx', NULL, '$2y$12$PFNg9JYGFNFxzOEyHwH4mOEf8jYbXPMc.6r/dPweRs/rJLSU8N.IS', 'mOARChjI', 'realizada', NULL, '2024-05-17 23:48:17', '2024-05-24 01:01:20'),
(47, 14, 'Carlos Axel', 'Rugerio', 'Aguila', 'Ingeniería en Sistemas Computacionales', 8, 'alumno', '20940091', '20940091@itstacambaro.edu.mx', NULL, '$2y$12$t4jV27bu4UyRgQhWJuw1n.sIBcRm1pm4J58o9xBcRkOXtjxH3vUgi', 'zwF4X0Lj', 'realizada', NULL, '2024-05-18 02:02:49', '2024-05-18 06:14:48'),
(48, 12, 'Adrian Silvano', 'Mandujano', 'Reguera', 'Ingeniería en innovación Agrícola', 4, 'alumno', '2094089', '2094089@itstacambaro.edu.mx', NULL, '$2y$12$qvAc2URbF0Nl13fWNQrW..MS8h844VRTL1g9ZxdMdn8DYLNjKW/s.', 'Rs3yjiBI', 'realizada', NULL, '2024-05-20 23:48:37', '2024-05-20 23:49:49');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tutor_id` (`tutor_id`);

--
-- Indices de la tabla `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indices de la tabla `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `preguntas_ibfk_2` (`tutor_id`),
  ADD KEY `preguntas_ibfk_3` (`user_id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `tutores`
--
ALTER TABLE `tutores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_ibfk_1` (`grupo_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `tutores`
--
ALTER TABLE `tutores`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD CONSTRAINT `grupos_ibfk_1` FOREIGN KEY (`tutor_id`) REFERENCES `tutores` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD CONSTRAINT `preguntas_ibfk_2` FOREIGN KEY (`tutor_id`) REFERENCES `tutores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `preguntas_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`grupo_id`) REFERENCES `grupos` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
