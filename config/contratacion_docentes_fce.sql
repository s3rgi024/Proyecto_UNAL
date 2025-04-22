-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-04-2025 a las 02:21:18
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
-- Base de datos: `contratacion_docentes_fce`
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
-- Estructura de tabla para la tabla `document_types`
--

CREATE TABLE `document_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `abbreviation` varchar(10) NOT NULL,
  `document_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `document_types`
--

INSERT INTO `document_types` (`id`, `abbreviation`, `document_name`) VALUES
(1, 'C.C', 'Cédula de Ciudadanía'),
(2, 'C.E', 'Cédula de Extranjería'),
(3, 'P.P', 'Pasaporte'),
(4, 'NIT', 'Número de Identificación Tributaria');

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
-- Estructura de tabla para la tabla `file_types`
--

CREATE TABLE `file_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file_name` varchar(150) NOT NULL,
  `fk_folder_type` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `file_types`
--

INSERT INTO `file_types` (`id`, `file_name`, `fk_folder_type`, `created_at`, `updated_at`) VALUES
(1, 'HojaVidaFuncionPublica', 1, NULL, NULL),
(2, 'DeclaracionJuramentadaLey4de1992', 1, NULL, NULL),
(3, 'VerificacionInhabilidadDelitoSexual', 1, NULL, NULL),
(4, 'AutorizacionNotificacionCorreoElec', 1, NULL, NULL),
(5, 'CompromisoInstitucionalVinculacion', 1, NULL, NULL),
(6, 'AutorizacionTratamientoDatPer', 1, NULL, NULL),
(7, 'VisaExtranjeria', 1, NULL, NULL),
(8, 'FotocopiaLibretaMilitar', 1, NULL, NULL),
(9, 'TarjetaProfesional', 1, NULL, NULL),
(10, 'MatriculaProfesional', 1, NULL, NULL),
(11, 'AvalSST', 1, NULL, NULL),
(12, 'CertificadoCursandoPosgrado', 1, NULL, NULL),
(13, 'CertificadoSegundaLengua', 1, NULL, NULL),
(14, 'ExperienciaLaboral', 1, NULL, NULL),
(15, 'AntecedentesDisciplinariosProcuraduria', 1, NULL, NULL),
(16, 'AntecedenteFiscalContraloria', 1, NULL, NULL),
(17, 'AntecedenteJudicialPoliciaNal', 1, NULL, NULL),
(18, 'FormatoAfiliacionSeguridadSocial', 2, NULL, NULL),
(19, 'FormularioAfiliacionEps', 2, NULL, NULL),
(20, 'FormularioAfiliacionPension', 2, NULL, NULL),
(21, 'CertificadoCuentaBancaria', 2, NULL, NULL),
(22, 'CertificadoAfiliacionUltimaEPS', 2, NULL, NULL),
(23, 'CertificadoAfiliacionFondoPensiones', 2, NULL, NULL),
(24, 'CedulaCiudadania', 2, NULL, NULL),
(25, 'DeclaPensionadoSolPensionenTramite', 2, NULL, NULL),
(26, 'AsignaturasDiasHorarios', 2, NULL, NULL),
(27, 'ResolucionNombramiento', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `folder_reviews`
--

CREATE TABLE `folder_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fk_folder_id` bigint(20) UNSIGNED NOT NULL,
  `fk_registered_state` bigint(20) UNSIGNED NOT NULL,
  `fk_updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `folder_states`
--

CREATE TABLE `folder_states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `folder_state_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `folder_states`
--

INSERT INTO `folder_states` (`id`, `folder_state_name`) VALUES
(1, 'Aprobado'),
(2, 'Pendiente'),
(3, 'Rechazado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `folder_types`
--

CREATE TABLE `folder_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `folder_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `folder_types`
--

INSERT INTO `folder_types` (`id`, `folder_name`) VALUES
(1, 'Hoja de Vida'),
(2, 'Vinculación');

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
(1, '2025_03_11_000001_create_cache_table', 1),
(2, '2025_03_11_000002_create_jobs_table', 1),
(3, '2025_03_11_000003_create_document_types_table', 1),
(4, '2025_03_11_000004_create_folder_states_table', 1),
(5, '2025_03_11_000005_create_roles_table', 1),
(6, '2025_03_11_000006_create_folder_types_table', 1),
(7, '2025_03_11_000007_create_file_types_table', 1),
(8, '2025_03_11_000008_create_user_states_table', 1),
(9, '2025_03_11_000009_create_users_table', 1),
(10, '2025_03_11_000010_create_user_request_histories_table', 1),
(11, '2025_03_11_000011_create_teacher_folders_table', 1),
(12, '2025_03_11_000012_create_folder_reviews_table', 1),
(13, '2025_03_11_000013_create_teacher_files_table', 1),
(14, '2025_03_11_000014_create_users_histories_table', 1);

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
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `role_name`) VALUES
(1, 'Administrador'),
(3, 'Docente'),
(2, 'Secretario');

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
('gh9aOYQihywMcSAeSLT4b9IQu5ygCMXlWHIlHhIF', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSXYxaVl6YkRWOGNXNUx2SWE3YUxhS2tJMVB1a3Y5dmcxWGtpblU4ZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1745280276);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `teacher_files`
--

CREATE TABLE `teacher_files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fk_folder_id` bigint(20) UNSIGNED NOT NULL,
  `fk_file_type` bigint(20) UNSIGNED NOT NULL,
  `fk_updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `teacher_folders`
--

CREATE TABLE `teacher_folders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fk_teacher_id` bigint(20) UNSIGNED NOT NULL,
  `folder_name` varchar(255) DEFAULT NULL,
  `fk_state` bigint(20) UNSIGNED NOT NULL,
  `fk_updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fk_type_dni` bigint(20) UNSIGNED NOT NULL,
  `dni` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `second_name` varchar(50) DEFAULT NULL,
  `first_surname` varchar(50) NOT NULL,
  `second_surname` varchar(50) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `fk_role` bigint(20) UNSIGNED NOT NULL,
  `banned_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `fk_state` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `fk_type_dni`, `dni`, `first_name`, `second_name`, `first_surname`, `second_surname`, `email`, `email_verified_at`, `phone`, `fk_role`, `banned_at`, `password`, `fk_state`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 4, 3429400241, 'Vincenza', NULL, 'Collier', 'Hettinger', 'marlene08@example.net', '2025-04-22 05:00:35', '443-459-3710', 2, NULL, '$2y$12$nkpKG0u/wWqxYGuypYMkS.pzSV22TfmAVm1qEIIKLhDoeEN85EbRu', 1, 'cT0EjF93e8', '2025-04-22 05:00:35', '2025-04-22 05:00:35'),
(2, 4, 9912371578, 'Constantin', NULL, 'Flatley', NULL, 'dwillms@example.com', '2025-04-22 05:00:35', '530.647.6237', 1, NULL, '$2y$12$nkpKG0u/wWqxYGuypYMkS.pzSV22TfmAVm1qEIIKLhDoeEN85EbRu', 2, '6QPVflOb2N', '2025-04-22 05:00:35', '2025-04-22 05:00:35'),
(3, 2, 2713495888, 'Cortez', 'Kylee', 'Harris', NULL, 'cstroman@example.com', '2025-04-22 05:00:35', '+1 (865) 247-9910', 1, NULL, '$2y$12$nkpKG0u/wWqxYGuypYMkS.pzSV22TfmAVm1qEIIKLhDoeEN85EbRu', 3, 'ZhFEMuCcJ6', '2025-04-22 05:00:35', '2025-04-22 05:00:35'),
(4, 2, 1237451337, 'William', NULL, 'Eichmann', NULL, 'hattie49@example.net', '2025-04-22 05:00:35', '941-517-7320', 2, NULL, '$2y$12$nkpKG0u/wWqxYGuypYMkS.pzSV22TfmAVm1qEIIKLhDoeEN85EbRu', 3, 'jG9mSZxoSS', '2025-04-22 05:00:35', '2025-04-22 05:00:35'),
(5, 1, 3853031731, 'Winnifred', NULL, 'Rohan', NULL, 'delmer.kautzer@example.com', '2025-04-22 05:00:35', '801-527-0273', 1, NULL, '$2y$12$nkpKG0u/wWqxYGuypYMkS.pzSV22TfmAVm1qEIIKLhDoeEN85EbRu', 3, 'Mu8PLFYtda', '2025-04-22 05:00:35', '2025-04-22 05:00:35'),
(6, 3, 6506496662, 'Johann', 'Novella', 'Mraz', NULL, 'sstehr@example.com', '2025-04-22 05:00:35', '+1 (364) 788-2968', 2, NULL, '$2y$12$nkpKG0u/wWqxYGuypYMkS.pzSV22TfmAVm1qEIIKLhDoeEN85EbRu', 1, '8bVpAlwWSe', '2025-04-22 05:00:35', '2025-04-22 05:00:35'),
(7, 2, 9219576530, 'Berry', 'Anastasia', 'Lockman', 'Treutel', 'jcremin@example.net', '2025-04-22 05:00:35', '(214) 212-3743', 3, NULL, '$2y$12$nkpKG0u/wWqxYGuypYMkS.pzSV22TfmAVm1qEIIKLhDoeEN85EbRu', 1, 't4QKfBeYbg', '2025-04-22 05:00:35', '2025-04-22 05:00:35'),
(8, 1, 9903199681, 'Kattie', NULL, 'Wunsch', NULL, 'mikayla06@example.net', '2025-04-22 05:00:35', '1-941-471-1024', 3, NULL, '$2y$12$nkpKG0u/wWqxYGuypYMkS.pzSV22TfmAVm1qEIIKLhDoeEN85EbRu', 3, 'XSDQZPHTXN', '2025-04-22 05:00:35', '2025-04-22 05:00:35'),
(9, 1, 3696670217, 'Savanah', NULL, 'Kozey', NULL, 'arielle.kihn@example.com', '2025-04-22 05:00:35', '+1 (862) 984-2290', 2, NULL, '$2y$12$nkpKG0u/wWqxYGuypYMkS.pzSV22TfmAVm1qEIIKLhDoeEN85EbRu', 2, 'LYRz65E4gX', '2025-04-22 05:00:35', '2025-04-22 05:00:35'),
(10, 4, 884327730, 'Christian', NULL, 'Graham', NULL, 'florence.koss@example.org', '2025-04-22 05:00:35', '+1 (509) 657-5132', 1, NULL, '$2y$12$nkpKG0u/wWqxYGuypYMkS.pzSV22TfmAVm1qEIIKLhDoeEN85EbRu', 2, 'sNNmLbT0ch', '2025-04-22 05:00:35', '2025-04-22 05:00:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_histories`
--

CREATE TABLE `users_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fk_user_id` bigint(20) UNSIGNED NOT NULL,
  `field_modified` varchar(50) NOT NULL,
  `last_value` varchar(50) NOT NULL,
  `updated_value` varchar(100) NOT NULL,
  `fk_updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_request_histories`
--

CREATE TABLE `user_request_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fk_user_id` bigint(20) UNSIGNED NOT NULL,
  `fk_state` bigint(20) UNSIGNED NOT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `fk_reviewed_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_states`
--

CREATE TABLE `user_states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_state_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `user_states`
--

INSERT INTO `user_states` (`id`, `user_state_name`) VALUES
(1, 'Activo'),
(3, 'Inhabilitado'),
(2, 'Pendiente');

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
-- Indices de la tabla `document_types`
--
ALTER TABLE `document_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `document_types_abbreviation_unique` (`abbreviation`),
  ADD UNIQUE KEY `document_types_document_name_unique` (`document_name`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `file_types`
--
ALTER TABLE `file_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `file_types_file_name_unique` (`file_name`),
  ADD KEY `file_types_fk_folder_type_index` (`fk_folder_type`);

--
-- Indices de la tabla `folder_reviews`
--
ALTER TABLE `folder_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `folder_reviews_fk_folder_id_index` (`fk_folder_id`),
  ADD KEY `folder_reviews_fk_registered_state_index` (`fk_registered_state`),
  ADD KEY `folder_reviews_fk_updated_by_index` (`fk_updated_by`);

--
-- Indices de la tabla `folder_states`
--
ALTER TABLE `folder_states`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `folder_states_folder_state_name_unique` (`folder_state_name`);

--
-- Indices de la tabla `folder_types`
--
ALTER TABLE `folder_types`
  ADD PRIMARY KEY (`id`);

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
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_role_name_unique` (`role_name`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `teacher_files`
--
ALTER TABLE `teacher_files`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teacher_files_fk_folder_id_fk_file_type_unique` (`fk_folder_id`,`fk_file_type`),
  ADD KEY `teacher_files_fk_folder_id_index` (`fk_folder_id`),
  ADD KEY `teacher_files_fk_file_type_index` (`fk_file_type`),
  ADD KEY `teacher_files_fk_updated_by_index` (`fk_updated_by`);

--
-- Indices de la tabla `teacher_folders`
--
ALTER TABLE `teacher_folders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teacher_folders_folder_name_unique` (`folder_name`),
  ADD KEY `teacher_folders_fk_teacher_id_index` (`fk_teacher_id`),
  ADD KEY `teacher_folders_fk_state_index` (`fk_state`),
  ADD KEY `teacher_folders_fk_updated_by_index` (`fk_updated_by`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_dni_unique` (`dni`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_fk_type_dni_index` (`fk_type_dni`),
  ADD KEY `users_fk_role_index` (`fk_role`),
  ADD KEY `users_fk_state_index` (`fk_state`);

--
-- Indices de la tabla `users_histories`
--
ALTER TABLE `users_histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_histories_fk_user_id_index` (`fk_user_id`),
  ADD KEY `users_histories_fk_updated_by_index` (`fk_updated_by`);

--
-- Indices de la tabla `user_request_histories`
--
ALTER TABLE `user_request_histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_request_histories_fk_user_id_index` (`fk_user_id`),
  ADD KEY `user_request_histories_fk_state_index` (`fk_state`),
  ADD KEY `user_request_histories_fk_reviewed_by_index` (`fk_reviewed_by`);

--
-- Indices de la tabla `user_states`
--
ALTER TABLE `user_states`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_states_user_state_name_unique` (`user_state_name`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `document_types`
--
ALTER TABLE `document_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `file_types`
--
ALTER TABLE `file_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `folder_reviews`
--
ALTER TABLE `folder_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `folder_states`
--
ALTER TABLE `folder_states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `folder_types`
--
ALTER TABLE `folder_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `teacher_files`
--
ALTER TABLE `teacher_files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `teacher_folders`
--
ALTER TABLE `teacher_folders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `users_histories`
--
ALTER TABLE `users_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `user_request_histories`
--
ALTER TABLE `user_request_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `user_states`
--
ALTER TABLE `user_states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `file_types`
--
ALTER TABLE `file_types`
  ADD CONSTRAINT `file_types_fk_folder_type_foreign` FOREIGN KEY (`fk_folder_type`) REFERENCES `folder_types` (`id`);

--
-- Filtros para la tabla `folder_reviews`
--
ALTER TABLE `folder_reviews`
  ADD CONSTRAINT `folder_reviews_fk_folder_id_foreign` FOREIGN KEY (`fk_folder_id`) REFERENCES `teacher_folders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `folder_reviews_fk_registered_state_foreign` FOREIGN KEY (`fk_registered_state`) REFERENCES `folder_states` (`id`),
  ADD CONSTRAINT `folder_reviews_fk_updated_by_foreign` FOREIGN KEY (`fk_updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Filtros para la tabla `teacher_files`
--
ALTER TABLE `teacher_files`
  ADD CONSTRAINT `teacher_files_fk_file_type_foreign` FOREIGN KEY (`fk_file_type`) REFERENCES `file_types` (`id`),
  ADD CONSTRAINT `teacher_files_fk_folder_id_foreign` FOREIGN KEY (`fk_folder_id`) REFERENCES `teacher_folders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `teacher_files_fk_updated_by_foreign` FOREIGN KEY (`fk_updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Filtros para la tabla `teacher_folders`
--
ALTER TABLE `teacher_folders`
  ADD CONSTRAINT `teacher_folders_fk_state_foreign` FOREIGN KEY (`fk_state`) REFERENCES `folder_states` (`id`),
  ADD CONSTRAINT `teacher_folders_fk_teacher_id_foreign` FOREIGN KEY (`fk_teacher_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `teacher_folders_fk_updated_by_foreign` FOREIGN KEY (`fk_updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_fk_role_foreign` FOREIGN KEY (`fk_role`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `users_fk_state_foreign` FOREIGN KEY (`fk_state`) REFERENCES `user_states` (`id`),
  ADD CONSTRAINT `users_fk_type_dni_foreign` FOREIGN KEY (`fk_type_dni`) REFERENCES `document_types` (`id`);

--
-- Filtros para la tabla `users_histories`
--
ALTER TABLE `users_histories`
  ADD CONSTRAINT `users_histories_fk_updated_by_foreign` FOREIGN KEY (`fk_updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `users_histories_fk_user_id_foreign` FOREIGN KEY (`fk_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `user_request_histories`
--
ALTER TABLE `user_request_histories`
  ADD CONSTRAINT `user_request_histories_fk_reviewed_by_foreign` FOREIGN KEY (`fk_reviewed_by`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_request_histories_fk_state_foreign` FOREIGN KEY (`fk_state`) REFERENCES `user_states` (`id`),
  ADD CONSTRAINT `user_request_histories_fk_user_id_foreign` FOREIGN KEY (`fk_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
