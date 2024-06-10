-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-06-2024 a las 20:00:03
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
-- Base de datos: `unal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivo_doc_oca`
--

CREATE TABLE `archivo_doc_oca` (
  `fk_dni` int(10) NOT NULL,
  `hoja_vida_func_pub` varchar(150) NOT NULL,
  `decl_jur_ley` varchar(150) NOT NULL,
  `ver_inh_del_sex` varchar(150) NOT NULL,
  `notif_corr_elec` varchar(150) NOT NULL,
  `com_ins_vinc` varchar(150) NOT NULL,
  `aut_trat_dat_per` varchar(150) NOT NULL,
  `visa_ext` varchar(150) NOT NULL,
  `fotoc_libr_mil` varchar(150) NOT NULL,
  `tarjeta_prof` varchar(150) NOT NULL,
  `matri_prof` varchar(150) NOT NULL,
  `aval_sst` varchar(150) NOT NULL,
  `cert_segun_leng` varchar(150) NOT NULL,
  `experien_lab` varchar(150) NOT NULL,
  `antec_disc_procu` varchar(150) NOT NULL,
  `antec_fisc_contral` varchar(150) NOT NULL,
  `antec_judic_pol_nal` varchar(150) NOT NULL,
  `form_afil_seg_social` varchar(150) NOT NULL,
  `form_afil_eps` varchar(150) NOT NULL,
  `form_afil_pension` varchar(150) NOT NULL,
  `cert_cuen_bancaria` varchar(150) NOT NULL,
  `cert_afil_ult_eps` varchar(150) NOT NULL,
  `certi_afil_fond_pensiones` varchar(150) NOT NULL,
  `cedula_ciu_ext` varchar(150) NOT NULL,
  `decla_pen_sol_pens_tram` varchar(150) NOT NULL,
  `asig_dia_hor` varchar(150) NOT NULL,
  `reso_nombramiento` varchar(150) NOT NULL,
  `fk_id_estado_documentacion` int(3) NOT NULL,
  `observaciones_estado` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `archivo_doc_oca`
--

INSERT INTO `archivo_doc_oca` (`fk_dni`, `hoja_vida_func_pub`, `decl_jur_ley`, `ver_inh_del_sex`, `notif_corr_elec`, `com_ins_vinc`, `aut_trat_dat_per`, `visa_ext`, `fotoc_libr_mil`, `tarjeta_prof`, `matri_prof`, `aval_sst`, `cert_segun_leng`, `experien_lab`, `antec_disc_procu`, `antec_fisc_contral`, `antec_judic_pol_nal`, `form_afil_seg_social`, `form_afil_eps`, `form_afil_pension`, `cert_cuen_bancaria`, `cert_afil_ult_eps`, `certi_afil_fond_pensiones`, `cedula_ciu_ext`, `decla_pen_sol_pens_tram`, `asig_dia_hor`, `reso_nombramiento`, `fk_id_estado_documentacion`, `observaciones_estado`) VALUES
(0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 'Primer Registro'),
(123123123, '../../docs/docentes_ocasionales/salaelsa_123123123/Hoja de Vida/hoja_vida_func_pub.pdf', '../../docs/docentes_ocasionales/salaelsa_123123123/Hoja de Vida/decl_jur_ley.pdf', '../../docs/docentes_ocasionales/salaelsa_123123123/Hoja de Vida/ver_inh_del_sex.pdf', '../../docs/docentes_ocasionales/salaelsa_123123123/Hoja de Vida/notif_corr_elec.pdf', '../../docs/docentes_ocasionales/salaelsa_123123123/Hoja de Vida/com_ins_vinc.pdf', '../../docs/docentes_ocasionales/salaelsa_123123123/Hoja de Vida/aut_trat_dat_per.pdf', '../../docs/docentes_ocasionales/salaelsa_123123123/Hoja de Vida/visa_ext.pdf', '../../docs/docentes_ocasionales/salaelsa_123123123/Hoja de Vida/fotoc_libr_mil.pdf', '../../docs/docentes_ocasionales/salaelsa_123123123/Hoja de Vida/tarjeta_prof.pdf', '../../docs/docentes_ocasionales/salaelsa_123123123/Hoja de Vida/matri_prof.pdf', '../../docs/docentes_ocasionales/salaelsa_123123123/Hoja de Vida/aval_sst.pdf', '../../docs/docentes_ocasionales/salaelsa_123123123/Hoja de Vida/cert_segun_leng.pdf', '../../docs/docentes_ocasionales/salaelsa_123123123/Hoja de Vida/experien_lab.pdf', '../../docs/docentes_ocasionales/salaelsa_123123123/Hoja de Vida/antec_disc_procu.pdf', '../../docs/docentes_ocasionales/salaelsa_123123123/Hoja de Vida/antec_fisc_contral.pdf', '../../docs/docentes_ocasionales/salaelsa_123123123/Hoja de Vida/antec_judic_pol_nal.pdf', '../../docs/docentes_ocasionales/salaelsa_123123123/Vinculacion/form_afil_seg_social.pdf', '../../docs/docentes_ocasionales/salaelsa_123123123/Vinculacion/form_afil_eps.pdf', '../../docs/docentes_ocasionales/salaelsa_123123123/Vinculacion/form_afil_pension.pdf', '../../docs/docentes_ocasionales/salaelsa_123123123/Vinculacion/cert_cuen_bancaria.pdf', '../../docs/docentes_ocasionales/salaelsa_123123123/Vinculacion/cert_afil_ult_eps.pdf', '../../docs/docentes_ocasionales/salaelsa_123123123/Vinculacion/certi_afil_fond_pensiones.pdf', '../../docs/docentes_ocasionales/salaelsa_123123123/Vinculacion/cedula_ciu_ext.pdf', '../../docs/docentes_ocasionales/salaelsa_123123123/Vinculacion/decla_pen_sol_pens_tram.pdf', '../../docs/docentes_ocasionales/salaelsa_123123123/Vinculacion/asig_dia_hor.pdf', '../../docs/docentes_ocasionales/salaelsa_123123123/Vinculacion/reso_nombramiento.pdf', 1, 'Primer Registro'),
(1034153625, '../../docs/docentes_ocasionales/serelsa_1034153625/Hoja de Vida/hoja_vida_func_pub.pdf', '../../docs/docentes_ocasionales/serelsa_1034153625/Hoja de Vida/decl_jur_ley.pdf', '../../docs/docentes_ocasionales/serelsa_1034153625/Hoja de Vida/ver_inh_del_sex.pdf', '../../docs/docentes_ocasionales/serelsa_1034153625/Hoja de Vida/notif_corr_elec.pdf', '../../docs/docentes_ocasionales/serelsa_1034153625/Hoja de Vida/com_ins_vinc.pdf', '../../docs/docentes_ocasionales/serelsa_1034153625/Hoja de Vida/aut_trat_dat_per.pdf', '../../docs/docentes_ocasionales/serelsa_1034153625/Hoja de Vida/visa_ext.pdf', '../../docs/docentes_ocasionales/serelsa_1034153625/Hoja de Vida/fotoc_libr_mil.pdf', '../../docs/docentes_ocasionales/serelsa_1034153625/Hoja de Vida/tarjeta_prof.pdf', '../../docs/docentes_ocasionales/serelsa_1034153625/Hoja de Vida/matri_prof.pdf', '../../docs/docentes_ocasionales/serelsa_1034153625/Hoja de Vida/aval_sst.pdf', '../../docs/docentes_ocasionales/serelsa_1034153625/Hoja de Vida/cert_segun_leng.pdf', '../../docs/docentes_ocasionales/serelsa_1034153625/Hoja de Vida/experien_lab.pdf', '../../docs/docentes_ocasionales/serelsa_1034153625/Hoja de Vida/antec_disc_procu.pdf', '../../docs/docentes_ocasionales/serelsa_1034153625/Hoja de Vida/antec_fisc_contral.pdf', '../../docs/docentes_ocasionales/serelsa_1034153625/Hoja de Vida/antec_judic_pol_nal.pdf', '../../docs/docentes_ocasionales/serelsa_1034153625/Vinculacion/form_afil_seg_social.pdf', '../../docs/docentes_ocasionales/serelsa_1034153625/Vinculacion/form_afil_eps.pdf', '../../docs/docentes_ocasionales/serelsa_1034153625/Vinculacion/form_afil_pension.pdf', '../../docs/docentes_ocasionales/serelsa_1034153625/Vinculacion/cert_cuen_bancaria.pdf', '../../docs/docentes_ocasionales/serelsa_1034153625/Vinculacion/cert_afil_ult_eps.pdf', '../../docs/docentes_ocasionales/serelsa_1034153625/Vinculacion/certi_afil_fond_pensiones.pdf', '../../docs/docentes_ocasionales/serelsa_1034153625/Vinculacion/cedula_ciu_ext.pdf', '../../docs/docentes_ocasionales/serelsa_1034153625/Vinculacion/decla_pen_sol_pens_tram.pdf', '../../docs/docentes_ocasionales/serelsa_1034153625/Vinculacion/asig_dia_hor.pdf', '../../docs/docentes_ocasionales/serelsa_1034153625/Vinculacion/reso_nombramiento.pdf', 1, 'Primer Registro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignaturas`
--

CREATE TABLE `asignaturas` (
  `id_asignatura` int(11) NOT NULL,
  `codigo` int(8) NOT NULL,
  `asignatura` varchar(50) NOT NULL,
  `grupo` int(3) NOT NULL,
  `modalidad` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE `docentes` (
  `fk_tipo_documento` int(11) NOT NULL,
  `dni` int(11) NOT NULL,
  `nombres` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `fk_vinculacion` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `edificios`
--

CREATE TABLE `edificios` (
  `id_edificio` int(3) NOT NULL,
  `nom_edificio` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `edificios`
--

INSERT INTO `edificios` (`id_edificio`, `nom_edificio`) VALUES
(238, 'Jesús Antonio Bejarano'),
(310, 'Antonio García Nossa'),
(311, 'Lauchlin Currie');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id_estado` int(11) NOT NULL,
  `estado` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id_estado`, `estado`) VALUES
(1, 'Activo'),
(2, 'Inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_documentacion`
--

CREATE TABLE `estado_documentacion` (
  `id_estado` int(3) NOT NULL,
  `estado` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `estado_documentacion`
--

INSERT INTO `estado_documentacion` (`id_estado`, `estado`) VALUES
(1, 'Aprobado'),
(2, 'Rechazado'),
(3, 'En proceso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id_reserva` int(3) NOT NULL,
  `fk_id_edificio` int(3) NOT NULL,
  `fk_id_salon` int(3) NOT NULL,
  `fk_id_tipo_reserva` int(3) NOT NULL,
  `organizador` varchar(30) NOT NULL,
  `fecha` date NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_fin` time NOT NULL,
  `observaciones` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id_reserva` int(3) NOT NULL,
  `fk_id_edificio` int(3) NOT NULL,
  `fk_id_salon` int(3) NOT NULL,
  `fk_id_tipo_reserva` int(3) NOT NULL,
  `fk_id_docente` int(3) NOT NULL,
  `fecha` date NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_fin` time NOT NULL,
  `observaciones` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `rol` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `rol`) VALUES
(1, 'Docente'),
(2, 'Administrativo'),
(3, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salones`
--

CREATE TABLE `salones` (
  `id_salon` int(3) NOT NULL,
  `salon` int(5) NOT NULL,
  `fk_id_edificio` int(3) NOT NULL,
  `fk_id_tipo_salon` int(3) NOT NULL,
  `capacidad` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `salones`
--

INSERT INTO `salones` (`id_salon`, `salon`, `fk_id_edificio`, `fk_id_tipo_salon`, `capacidad`) VALUES
(1, 6, 238, 5, 18),
(2, 101, 238, 2, 24),
(3, 102, 238, 2, 20),
(4, 103, 238, 2, 20),
(5, 104, 238, 2, 16),
(6, 105, 238, 3, 80),
(7, 113, 238, 2, 40),
(8, 116, 238, 2, 15),
(9, 117, 238, 2, 15),
(10, 222, 238, 2, 20),
(11, 301, 238, 2, 30),
(12, 121, 310, 7, 94),
(13, 122, 310, 7, 94),
(14, 113, 310, 3, 293),
(15, 101, 310, 2, 42),
(16, 102, 310, 2, 42),
(17, 103, 310, 2, 42),
(18, 104, 310, 2, 42),
(19, 105, 310, 2, 46),
(20, 202, 310, 2, 42),
(21, 203, 310, 2, 42),
(22, 204, 310, 2, 42),
(23, 205, 310, 2, 40),
(24, 206, 310, 2, 32),
(25, 207, 310, 2, 43),
(26, 131, 310, 5, 40),
(27, 132, 310, 5, 40),
(28, 133, 310, 5, 40),
(29, 101, 311, 2, 28),
(30, 102, 311, 2, 25),
(31, 103, 311, 2, 46),
(32, 104, 311, 2, 46),
(33, 105, 311, 2, 46),
(34, 201, 311, 2, 24),
(35, 202, 311, 1, 5),
(36, 203, 311, 2, 56),
(37, 204, 311, 2, 48),
(38, 205, 311, 2, 100),
(39, 301, 311, 2, 24),
(40, 302, 311, 1, 5),
(41, 303, 311, 2, 49),
(42, 304, 311, 2, 50),
(43, 305, 311, 2, 100),
(44, 401, 311, 2, 60);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

CREATE TABLE `tipo_documento` (
  `id_tipo_documento` int(3) NOT NULL,
  `abreviatura` varchar(5) NOT NULL,
  `documento` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tipo_documento`
--

INSERT INTO `tipo_documento` (`id_tipo_documento`, `abreviatura`, `documento`) VALUES
(1, 'C.C.', 'Cédula de Ciudadania'),
(2, 'C.E.', 'Cédula de Extranjería'),
(3, 'NIT', 'Número de Identificación Tribu');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_reserva`
--

CREATE TABLE `tipo_reserva` (
  `id_tipo_reserva` int(3) NOT NULL,
  `tipo_reserva` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tipo_reserva`
--

INSERT INTO `tipo_reserva` (`id_tipo_reserva`, `tipo_reserva`) VALUES
(1, 'Recurrente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_salon`
--

CREATE TABLE `tipo_salon` (
  `id_tipo_salon` int(3) NOT NULL,
  `tipo_salon` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tipo_salon`
--

INSERT INTO `tipo_salon` (`id_tipo_salon`, `tipo_salon`) VALUES
(1, 'Oficina'),
(2, 'Salon'),
(3, 'Auditorio'),
(4, 'Biblioteca'),
(5, 'Sala de Informatica y/o de Com'),
(6, 'Sala de Profesores'),
(7, 'Auditorio Auxiliar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_tdoc` int(2) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nombre1` varchar(10) NOT NULL,
  `nombre2` varchar(15) NOT NULL,
  `apellido1` varchar(15) NOT NULL,
  `apellido2` varchar(15) NOT NULL,
  `id_rol` int(2) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `clave` varchar(80) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `telefono` int(11) NOT NULL,
  `id_estado` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_tdoc`, `id_usuario`, `nombre1`, `nombre2`, `apellido1`, `apellido2`, `id_rol`, `usuario`, `clave`, `correo`, `telefono`, `id_estado`) VALUES
(0, 0, '', '', '', '', 1, '', '$2y$10$AZgDBWYqqZD2NoWwDqGD5OsPyGkt/SplZYmQ5qQtZJuu3hZbNI7tO', '', 0, 2),
(1, 123123123, 'sala', 'manca', 'elsa', 'bado', 1, 'a', '$2y$10$RvUjuom8gD6f/B.ksYywcOVSRri8/xIeoWw9DZPeHyjQEti5ttPPG', '35@gg.vom', 31352476, 1),
(1, 1031642393, 'Sergio', 'Esteban', 'Chaparro', 'Noguera', 2, 'Serch', '$2y$10$J82TX8nZKMka3aMSO.j/GOTqDgVnx752c8jAolBfMDrX1MduhUjDW', 'sechaparron@unal.edu.co', 313270352, 1),
(1, 1034153625, 'ser', 'gio', 'elsa', 'bado', 1, 'Serc', '$2y$10$VQ67WRenI8sXsPwhHFpJkue8sqZ4viaJzCn0A5Of/VcZpbwQTz1fa', 'sergioechaparron@gmail.com', 31352476, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vinculacion`
--

CREATE TABLE `vinculacion` (
  `id_vinculacion` int(11) NOT NULL,
  `vinculacion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `vinculacion`
--

INSERT INTO `vinculacion` (`id_vinculacion`, `vinculacion`) VALUES
(1, 'Planta'),
(2, 'Ocasional'),
(3, 'Ad-honorem');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `archivo_doc_oca`
--
ALTER TABLE `archivo_doc_oca`
  ADD PRIMARY KEY (`fk_dni`);

--
-- Indices de la tabla `asignaturas`
--
ALTER TABLE `asignaturas`
  ADD PRIMARY KEY (`id_asignatura`);

--
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`dni`);

--
-- Indices de la tabla `edificios`
--
ALTER TABLE `edificios`
  ADD PRIMARY KEY (`id_edificio`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `estado_documentacion`
--
ALTER TABLE `estado_documentacion`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id_reserva`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id_reserva`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `salones`
--
ALTER TABLE `salones`
  ADD PRIMARY KEY (`id_salon`);

--
-- Indices de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  ADD PRIMARY KEY (`id_tipo_documento`);

--
-- Indices de la tabla `tipo_reserva`
--
ALTER TABLE `tipo_reserva`
  ADD PRIMARY KEY (`id_tipo_reserva`);

--
-- Indices de la tabla `tipo_salon`
--
ALTER TABLE `tipo_salon`
  ADD PRIMARY KEY (`id_tipo_salon`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `vinculacion`
--
ALTER TABLE `vinculacion`
  ADD PRIMARY KEY (`id_vinculacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignaturas`
--
ALTER TABLE `asignaturas`
  MODIFY `id_asignatura` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `docentes`
--
ALTER TABLE `docentes`
  MODIFY `dni` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `estado_documentacion`
--
ALTER TABLE `estado_documentacion`
  MODIFY `id_estado` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id_reserva` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id_reserva` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `salones`
--
ALTER TABLE `salones`
  MODIFY `id_salon` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  MODIFY `id_tipo_documento` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipo_reserva`
--
ALTER TABLE `tipo_reserva`
  MODIFY `id_tipo_reserva` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tipo_salon`
--
ALTER TABLE `tipo_salon`
  MODIFY `id_tipo_salon` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `vinculacion`
--
ALTER TABLE `vinculacion`
  MODIFY `id_vinculacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
