-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-09-2024 a las 23:48:13
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

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
  `HojaVidaFuncionPublica` varchar(150) NOT NULL,
  `DeclaracionJuramentadaLey4de1992` varchar(150) NOT NULL,
  `VerificacionInhabilidadDelitoSexual` varchar(150) NOT NULL,
  `AutorizacionNotificacionCorreoElec` varchar(150) NOT NULL,
  `CompromisoInstitucionalVinculacion` varchar(150) NOT NULL,
  `AutorizacionTratamientoDatPer` varchar(150) NOT NULL,
  `VisaExtranjeria` varchar(150) NOT NULL,
  `FotocopiaLibretaMilitar` varchar(150) NOT NULL,
  `TarjetaProfesional` varchar(150) NOT NULL,
  `MatriculaProfesional` varchar(150) NOT NULL,
  `AvalSST` varchar(150) NOT NULL,
  `CertificadoSegundaLengua` varchar(150) NOT NULL,
  `ExperienciaLaboral` varchar(150) NOT NULL,
  `AntecedentesDisciplinariosProcuraduria` varchar(150) NOT NULL,
  `AntecedenteFiscalContraloria` varchar(150) NOT NULL,
  `AntecedenteJudicialPoliciaNal` varchar(150) NOT NULL,
  `FormatoAfiliacionSeguridadSocial` varchar(150) NOT NULL,
  `FormularioAfiliacionEps` varchar(150) NOT NULL,
  `FormularioAfiliacionPension` varchar(150) NOT NULL,
  `CertificadoCuentaBancaria` varchar(150) NOT NULL,
  `CertificadoAfiliacionUltimaEPS` varchar(150) NOT NULL,
  `CertificadoAfiliacionFondoPensiones` varchar(150) NOT NULL,
  `CedulaCiudadania` varchar(150) NOT NULL,
  `DeclaPensionadoSolPensionenTramite` varchar(150) NOT NULL,
  `AsignaturasDiasHorarios` varchar(150) NOT NULL,
  `ResolucionNombramiento` varchar(150) NOT NULL,
  `fk_id_estado_documentacion` int(3) NOT NULL,
  `observaciones_estado` varchar(60) NOT NULL,
  `ultima_actualizacion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `archivo_doc_oca`
--

INSERT INTO `archivo_doc_oca` (`fk_dni`, `HojaVidaFuncionPublica`, `DeclaracionJuramentadaLey4de1992`, `VerificacionInhabilidadDelitoSexual`, `AutorizacionNotificacionCorreoElec`, `CompromisoInstitucionalVinculacion`, `AutorizacionTratamientoDatPer`, `VisaExtranjeria`, `FotocopiaLibretaMilitar`, `TarjetaProfesional`, `MatriculaProfesional`, `AvalSST`, `CertificadoSegundaLengua`, `ExperienciaLaboral`, `AntecedentesDisciplinariosProcuraduria`, `AntecedenteFiscalContraloria`, `AntecedenteJudicialPoliciaNal`, `FormatoAfiliacionSeguridadSocial`, `FormularioAfiliacionEps`, `FormularioAfiliacionPension`, `CertificadoCuentaBancaria`, `CertificadoAfiliacionUltimaEPS`, `CertificadoAfiliacionFondoPensiones`, `CedulaCiudadania`, `DeclaPensionadoSolPensionenTramite`, `AsignaturasDiasHorarios`, `ResolucionNombramiento`, `fk_id_estado_documentacion`, `observaciones_estado`, `ultima_actualizacion`) VALUES
(134521541, '../../docs/docentes_ocasionales/JuanCasallas_134521541/Hoja de Vida/HojaVidaFuncionPublica.pdf', '../../docs/docentes_ocasionales/JuanCasallas_134521541/Hoja de Vida/DeclaracionJuramentadaLey4de1992.pdf', '../../docs/docentes_ocasionales/JuanCasallas_134521541/Hoja de Vida/VerificacionInhabilidadDelitoSexual.pdf', '../../docs/docentes_ocasionales/JuanCasallas_134521541/Hoja de Vida/AutorizacionNotificacionCorreoElec.pdf', '../../docs/docentes_ocasionales/JuanCasallas_134521541/Hoja de Vida/CompromisoInstitucionalVinculacion.pdf', '../../docs/docentes_ocasionales/JuanCasallas_134521541/Hoja de Vida/AutorizacionTratamientoDatPer.pdf', '', '', '', '', '../../docs/docentes_ocasionales/JuanCasallas_134521541/Hoja de Vida/AvalSST.pdf', '', '../../docs/docentes_ocasionales/JuanCasallas_134521541/Hoja de Vida/ExperienciaLaboral.pdf', '../../docs/docentes_ocasionales/JuanCasallas_134521541/Hoja de Vida/AntecedentesDisciplinariosProcuraduria.pdf', '../../docs/docentes_ocasionales/JuanCasallas_134521541/Hoja de Vida/AntecedenteFiscalContraloria.pdf', '../../docs/docentes_ocasionales/JuanCasallas_134521541/Hoja de Vida/AntecedenteJudicialPoliciaNal.pdf', '../../docs/docentes_ocasionales/JuanCasallas_134521541/Vinculacion/FormatoAfiliacionSeguridadSocial.pdf', '../../docs/docentes_ocasionales/JuanCasallas_134521541/Vinculacion/FormularioAfiliacionEps.pdf', '../../docs/docentes_ocasionales/JuanCasallas_134521541/Vinculacion/FormularioAfiliacionPension.pdf', '../../docs/docentes_ocasionales/JuanCasallas_134521541/Vinculacion/CertificadoCuentaBancaria.pdf', '../../docs/docentes_ocasionales/JuanCasallas_134521541/Vinculacion/CertificadoAfiliacionUltimaEPS.pdf', '../../docs/docentes_ocasionales/JuanCasallas_134521541/Vinculacion/CertificadoAfiliacionFondoPensiones.pdf', '../../docs/docentes_ocasionales/JuanCasallas_134521541/Vinculacion/CedulaCiudadania.pdf', '', '', '', 1, 'Primer Registro', '2024-07-05 16:57:47'),
(1035268415, './docs/docentes_ocasionales/ValentinaVillamil_1035268415/Hoja de Vida/HojaVidaFuncionPublica.pdf', './docs/docentes_ocasionales/ValentinaVillamil_1035268415/Hoja de Vida/DeclaracionJuramentadaLey4de1992.pdf', './docs/docentes_ocasionales/ValentinaVillamil_1035268415/Hoja de Vida/VerificacionInhabilidadDelitoSexual.pdf', './docs/docentes_ocasionales/ValentinaVillamil_1035268415/Hoja de Vida/AutorizacionNotificacionCorreoElec.pdf', './docs/docentes_ocasionales/ValentinaVillamil_1035268415/Hoja de Vida/CompromisoInstitucionalVinculacion.pdf', './docs/docentes_ocasionales/ValentinaVillamil_1035268415/Hoja de Vida/AutorizacionTratamientoDatPer.pdf', '', '', './docs/docentes_ocasionales/ValentinaVillamil_1035268415/Hoja de Vida/TarjetaProfesional.pdf', '', './docs/docentes_ocasionales/ValentinaVillamil_1035268415/Hoja de Vida/AvalSST.pdf', '', './docs/docentes_ocasionales/ValentinaVillamil_1035268415/Hoja de Vida/ExperienciaLaboral.pdf', './docs/docentes_ocasionales/ValentinaVillamil_1035268415/Hoja de Vida/AntecedentesDisciplinariosProcuraduria.pdf', './docs/docentes_ocasionales/ValentinaVillamil_1035268415/Hoja de Vida/AntecedenteFiscalContraloria.pdf', './docs/docentes_ocasionales/ValentinaVillamil_1035268415/Hoja de Vida/AntecedenteJudicialPoliciaNal.pdf', './docs/docentes_ocasionales/ValentinaVillamil_1035268415/Vinculacion/FormatoAfiliacionSeguridadSocial.pdf', './docs/docentes_ocasionales/ValentinaVillamil_1035268415/Vinculacion/FormularioAfiliacionEps.pdf', './docs/docentes_ocasionales/ValentinaVillamil_1035268415/Vinculacion/FormularioAfiliacionPension.pdf', './docs/docentes_ocasionales/ValentinaVillamil_1035268415/Vinculacion/CertificadoCuentaBancaria.pdf', './docs/docentes_ocasionales/ValentinaVillamil_1035268415/Vinculacion/CertificadoAfiliacionUltimaEPS.pdf', './docs/docentes_ocasionales/ValentinaVillamil_1035268415/Vinculacion/CertificadoAfiliacionFondoPensiones.pdf', './docs/docentes_ocasionales/ValentinaVillamil_1035268415/Vinculacion/CedulaCiudadania.pdf', './docs/docentes_ocasionales/ValentinaVillamil_1035268415/Vinculacion/DeclaPensionadoSolPensionenTramite.pdf', '', '', 3, 'Primer Registro', '2024-07-07 00:00:00'),
(1042518654, '../../docs/docentes_ocasionales/SantiagoRodríguez_1042518654/Hoja de Vida/HojaVidaFuncionPublica.pdf', '../../docs/docentes_ocasionales/SantiagoRodríguez_1042518654/Hoja de Vida/DeclaracionJuramentadaLey4de1992.pdf', '../../docs/docentes_ocasionales/SantiagoRodríguez_1042518654/Hoja de Vida/VerificacionInhabilidadDelitoSexual.pdf', '../../docs/docentes_ocasionales/SantiagoRodríguez_1042518654/Hoja de Vida/AutorizacionNotificacionCorreoElec.pdf', '../../docs/docentes_ocasionales/SantiagoRodríguez_1042518654/Hoja de Vida/CompromisoInstitucionalVinculacion.pdf', '../../docs/docentes_ocasionales/SantiagoRodríguez_1042518654/Hoja de Vida/AutorizacionTratamientoDatPer.pdf', '', '', '', '', '../../docs/docentes_ocasionales/SantiagoRodríguez_1042518654/Hoja de Vida/AvalSST.pdf', '', '../../docs/docentes_ocasionales/SantiagoRodríguez_1042518654/Hoja de Vida/ExperienciaLaboral.pdf', '../../docs/docentes_ocasionales/SantiagoRodríguez_1042518654/Hoja de Vida/AntecedentesDisciplinariosProcuraduria.pdf', '../../docs/docentes_ocasionales/SantiagoRodríguez_1042518654/Hoja de Vida/AntecedenteFiscalContraloria.pdf', '../../docs/docentes_ocasionales/SantiagoRodríguez_1042518654/Hoja de Vida/AntecedenteJudicialPoliciaNal.pdf', '../../docs/docentes_ocasionales/SantiagoRodríguez_1042518654/Vinculacion/FormatoAfiliacionSeguridadSocial.pdf', '../../docs/docentes_ocasionales/SantiagoRodríguez_1042518654/Vinculacion/FormularioAfiliacionEps.pdf', '../../docs/docentes_ocasionales/SantiagoRodríguez_1042518654/Vinculacion/FormularioAfiliacionPension.pdf', '../../docs/docentes_ocasionales/SantiagoRodríguez_1042518654/Vinculacion/CertificadoCuentaBancaria.pdf', '../../docs/docentes_ocasionales/SantiagoRodríguez_1042518654/Vinculacion/CertificadoAfiliacionUltimaEPS.pdf', '../../docs/docentes_ocasionales/SantiagoRodríguez_1042518654/Vinculacion/CertificadoAfiliacionFondoPensiones.pdf', '../../docs/docentes_ocasionales/SantiagoRodríguez_1042518654/Vinculacion/CedulaCiudadania.pdf', '', '', '', 1, 'Primer Registro', '2024-08-07 00:00:00'),
(1065298654, '../../docs/docentes_ocasionales/DianaRojas_1065298654/Hoja de Vida/HojaVidaFuncionPublica.pdf', '../../docs/docentes_ocasionales/DianaRojas_1065298654/Hoja de Vida/DeclaracionJuramentadaLey4de1992.pdf', '../../docs/docentes_ocasionales/DianaRojas_1065298654/Hoja de Vida/VerificacionInhabilidadDelitoSexual.pdf', '../../docs/docentes_ocasionales/DianaRojas_1065298654/Hoja de Vida/AutorizacionNotificacionCorreoElec.pdf', '../../docs/docentes_ocasionales/DianaRojas_1065298654/Hoja de Vida/CompromisoInstitucionalVinculacion.pdf', '../../docs/docentes_ocasionales/DianaRojas_1065298654/Hoja de Vida/AutorizacionTratamientoDatPer.pdf', '', '', '', '', '../../docs/docentes_ocasionales/DianaRojas_1065298654/Hoja de Vida/AvalSST.pdf', '', '../../docs/docentes_ocasionales/DianaRojas_1065298654/Hoja de Vida/ExperienciaLaboral.pdf', '../../docs/docentes_ocasionales/DianaRojas_1065298654/Hoja de Vida/AntecedentesDisciplinariosProcuraduria.pdf', '../../docs/docentes_ocasionales/DianaRojas_1065298654/Hoja de Vida/AntecedenteFiscalContraloria.pdf', '../../docs/docentes_ocasionales/DianaRojas_1065298654/Hoja de Vida/AntecedenteJudicialPoliciaNal.pdf', '../../docs/docentes_ocasionales/DianaRojas_1065298654/Vinculacion/FormatoAfiliacionSeguridadSocial.pdf', '../../docs/docentes_ocasionales/DianaRojas_1065298654/Vinculacion/FormularioAfiliacionEps.pdf', '../../docs/docentes_ocasionales/DianaRojas_1065298654/Vinculacion/FormularioAfiliacionPension.pdf', '../../docs/docentes_ocasionales/DianaRojas_1065298654/Vinculacion/CertificadoCuentaBancaria.pdf', '../../docs/docentes_ocasionales/DianaRojas_1065298654/Vinculacion/CertificadoAfiliacionUltimaEPS.pdf', '../../docs/docentes_ocasionales/DianaRojas_1065298654/Vinculacion/CertificadoAfiliacionFondoPensiones.pdf', '../../docs/docentes_ocasionales/DianaRojas_1065298654/Vinculacion/CedulaCiudadania.pdf', '', '', '', 2, 'Primer Registro', '2024-09-09 00:00:00');

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
(2, 'Inactivo'),
(3, 'Nuevo');

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
  `fecha_ingreso` datetime DEFAULT NULL,
  `id_estado` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_tdoc`, `id_usuario`, `nombre1`, `nombre2`, `apellido1`, `apellido2`, `id_rol`, `usuario`, `clave`, `correo`, `telefono`, `fecha_ingreso`, `id_estado`) VALUES
(2, 134521541, 'Juan', '', 'Casallas', '', 1, 'Juann', '$2y$10$.Jd1TAWU9u54udKTmRm7PeelJ148/ZawLqnAglSoTA0dKZ94vUIWq', 'juan@gmail.com', 2147483647, '2024-07-16 16:57:46', 3),
(1, 1031642393, 'Sergio', 'Esteban', 'Chaparro', 'Noguera', 3, 'Serch', '$2y$10$S6mZqH8ie24Y70WgDEtGeuHo43ZC0ZQTfmNVCu62.DoZ2rg6SLEoi', 'sechaparron@unal.edu.co', 313270352, '2024-09-01 23:10:45', 1),
(3, 1035268415, 'Valentina', '', 'Villamil', '', 1, 'vvilla', '$2y$10$mYGvej9CipWSwoAZV/OJZOz/.9o00zQjs2cfirE02ITUkZ8AJ4tjy', 'vvillamil@gmail.com', 2147483647, '2024-09-09 23:07:00', 1),
(1, 1042518654, 'Santiago', '', 'Rodríguez', '', 1, 'santi123', '$2y$10$HDsAtDA6XAHtuPM2JpV9r.G.R40aE1A7xHATLq7AVXlf/o7TtdfmG', 'santiago@gmail.com', 2147483647, '2024-08-13 21:41:42', 3),
(3, 1065298654, 'Diana', '', 'Rojas', '', 1, 'diana123', '$2y$10$puUNj5o80yrnvwW9QVAyTu5uo2LDfmGqSB0JULTeausxGQvi5TYie', 'diana@gmail.com', 313526452, '2024-06-13 21:45:58', 3);

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
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
