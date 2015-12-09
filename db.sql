-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 06, 2015 at 06:43 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sigedu`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumnos`
--

CREATE TABLE IF NOT EXISTS `alumnos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `apellidos` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nombres` varchar(50) CHARACTER SET latin1 NOT NULL,
  `foto` varchar(255) NOT NULL,
  `foto_dir` varchar(255) NOT NULL,
  `documento_tipo` varchar(30) CHARACTER SET latin1 NOT NULL,
  `documento_nro` int(9) NOT NULL,
  `cuil_cuit` int(11) DEFAULT NULL,
  `ocupacion` varchar(50) CHARACTER SET latin1 NOT NULL,
  `fecha_nac` date NOT NULL,
  `pcia_nac` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nacionalidad` varchar(50) CHARACTER SET latin1 NOT NULL,
  `indigena` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `estado_civil` varchar(30) CHARACTER SET latin1 NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `telefono_nro` varchar(20) CHARACTER SET latin1 NOT NULL,
  `calle_nombre` varchar(50) CHARACTER SET latin1 NOT NULL,
  `calle_nro` int(11) NOT NULL,
  `barrio` varchar(50) CHARACTER SET latin1 NOT NULL,
  `ciudad` varchar(50) CHARACTER SET latin1 NOT NULL,
  `creado` date NOT NULL,
  `modificado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `alumnos`
--

INSERT INTO `alumnos` (`id`, `apellidos`, `nombres`, `foto`, `foto_dir`, `documento_tipo`, `documento_nro`, `cuil_cuit`, `ocupacion`, `fecha_nac`, `pcia_nac`, `nacionalidad`, `indigena`, `estado_civil`, `email`, `telefono_nro`, `calle_nombre`, `calle_nro`, `barrio`, `ciudad`, `creado`, `modificado`) VALUES
(1, 'Villañuevá', 'Oscar Alfredo', '', '', 'DNI', 25678765, NULL, 'Estudiante', '2015-07-18', 'Tierra del Fuego', 'Argentino', '', 'Soltero', '', '2901400011', 'Gdor. Paz', 455, 'Centro', 'Ushuaia', '2015-07-18', '2015-09-28 19:19:08'),
(4, 'Soloaga', 'Ernesto', '', '', 'DNI', 25570652, NULL, 'Estudiante', '1980-09-09', '', 'Argentino', '', 'Soltero', '', '455678', 'Roca', 234, 'Centro', 'Ushuaia', '0000-00-00', '2015-09-28 20:56:19');

-- --------------------------------------------------------

--
-- Table structure for table `cargos`
--

CREATE TABLE IF NOT EXISTS `cargos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) CHARACTER SET latin1 NOT NULL,
  `tipo` varchar(50) CHARACTER SET latin1 NOT NULL,
  `resolucionNro` varchar(25) CHARACTER SET latin1 NOT NULL,
  `hsCatedra` int(2) NOT NULL,
  `hsReloj` varchar(11) CHARACTER SET latin1 NOT NULL,
  `area` varchar(50) CHARACTER SET latin1 NOT NULL,
  `puesto` varchar(50) CHARACTER SET latin1 NOT NULL,
  `descricpion` text CHARACTER SET latin1 NOT NULL,
  `fechaCreacion` date NOT NULL,
  `fechaCierre` date DEFAULT NULL,
  `fechaAltaPersona` date DEFAULT NULL,
  `fechaBajaPersona` date DEFAULT NULL,
  `fechaCambioSituacionPersona` date DEFAULT NULL,
  `estado` varchar(11) CHARACTER SET latin1 NOT NULL,
  `centro_id` int(11) NOT NULL,
  `curso_id` int(11) DEFAULT NULL,
  `materia_id` int(11) DEFAULT NULL,
  `estado_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `cargos`
--

INSERT INTO `cargos` (`id`, `nombre`, `tipo`, `resolucionNro`, `hsCatedra`, `hsReloj`, `area`, `puesto`, `descricpion`, `fechaCreacion`, `fechaCierre`, `fechaAltaPersona`, `fechaBajaPersona`, `fechaCambioSituacionPersona`, `estado`, `centro_id`, `curso_id`, `materia_id`, `estado_id`) VALUES
(8, 'MAT1A_3', 'Docente', '1234/13', 4, '5', 'Docente', 'Aula', 'Completar', '2013-03-05', '2014-06-25', '2013-05-05', '2014-06-25', '2014-06-25', 'Cubierto', 1, 2, 2, 1),
(3, 'REF_INF_15', 'Administrativo', '1234/12', 16, '17', 'Administracion', 'Secretaria', '', '2011-03-05', '2014-06-25', '2014-03-05', '2014-06-25', '2014-06-25', 'Cubierto', 2, 7, 10, 1),
(4, 'MAT1A_15', 'Docente', '7654/14', 4, '5', 'Docente', 'Aula', '', '2014-03-27', '2014-03-27', '2014-03-27', '2014-03-27', '2014-03-27', 'Cubierto', 2, 1, 5, 1),
(5, 'AUX_ADM1_3', 'Administrativo', '2345/12', 4, '5', 'Administracion', 'Secretaria', '', '2014-03-27', '2014-06-25', '2014-03-27', '2014-06-25', '2014-06-25', 'Cubierto', 1, 6, 9, 1),
(9, 'AUX_ADM2_3', 'Administrativo', '1234/2013', 0, '8', 'Administracion', 'Alumnos', 'Inscripciones.', '2014-05-02', '2014-05-02', '2014-05-02', NULL, NULL, 'Cubierto', 1, 6, NULL, 1),
(6, 'HIS1A_15', 'Docente', '1234/12', 4, '', 'Docente', 'Aula', 'Cargo docente de Historia de primero.', '2014-04-07', '2014-04-28', '2014-04-07', '2014-04-28', '2014-04-28', 'Cubierto', 2, 1, 6, 1),
(7, 'MAT1A_302', 'Docente', '1345/13', 4, '5', 'Docente', 'Aula', '', '2013-03-05', '2014-06-25', '2014-03-05', '2014-06-25', '2014-06-25', 'Vacante', 4, 3, 7, 2);

-- --------------------------------------------------------

--
-- Table structure for table `cargos_ciclos`
--

CREATE TABLE IF NOT EXISTS `cargos_ciclos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cargo_id` int(11) NOT NULL,
  `ciclo_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cargo_id` (`cargo_id`,`ciclo_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=89 ;

--
-- Dumping data for table `cargos_ciclos`
--

INSERT INTO `cargos_ciclos` (`id`, `cargo_id`, `ciclo_id`) VALUES
(67, 8, 1),
(68, 8, 4),
(78, 3, 4),
(76, 4, 4),
(73, 5, 1),
(72, 6, 4),
(70, 7, 4),
(77, 3, 1),
(75, 4, 1),
(74, 5, 4),
(71, 6, 1),
(69, 7, 1),
(88, 9, 5),
(87, 9, 4),
(79, 8, 5),
(80, 3, 5),
(81, 4, 5),
(82, 5, 5),
(86, 9, 1),
(84, 6, 5),
(85, 7, 5);

-- --------------------------------------------------------

--
-- Table structure for table `cargos_docentes`
--

CREATE TABLE IF NOT EXISTS `cargos_docentes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cargo_id` int(11) NOT NULL,
  `docente_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `docente_id` (`docente_id`,`cargo_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `cargos_docentes`
--

INSERT INTO `cargos_docentes` (`id`, `cargo_id`, `docente_id`) VALUES
(54, 4, 5),
(52, 6, 5),
(49, 8, 2),
(51, 6, 4),
(53, 4, 2),
(50, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cargos_empleados`
--

CREATE TABLE IF NOT EXISTS `cargos_empleados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cargo_id` int(11) NOT NULL,
  `empleado_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `empleado_id` (`empleado_id`,`cargo_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `cargos_empleados`
--

INSERT INTO `cargos_empleados` (`id`, `cargo_id`, `empleado_id`) VALUES
(41, 7, 3),
(43, 5, 2),
(45, 3, 4),
(42, 6, 3),
(44, 4, 3),
(46, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cargos_horarios`
--

CREATE TABLE IF NOT EXISTS `cargos_horarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cargo_id` int(11) NOT NULL,
  `horario_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `horario_id` (`horario_id`,`cargo_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `cargos_horarios`
--

INSERT INTO `cargos_horarios` (`id`, `cargo_id`, `horario_id`) VALUES
(40, 7, 11);

-- --------------------------------------------------------

--
-- Table structure for table `centros`
--

CREATE TABLE IF NOT EXISTS `centros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cue` int(7) NOT NULL,
  `nombre` varchar(100) CHARACTER SET latin1 NOT NULL,
  `sigla` varchar(50) CHARACTER SET latin1 NOT NULL,
  `fechaFundacion` date NOT NULL,
  `equipoDirectivo` text CHARACTER SET latin1 NOT NULL,
  `direccion` varchar(200) CHARACTER SET latin1 NOT NULL,
  `ciudad` varchar(50) CHARACTER SET latin1 NOT NULL,
  `telefono` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `url` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre` (`nombre`),
  UNIQUE KEY `sigla` (`sigla`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `centros`
--

INSERT INTO `centros` (`id`, `cue`, `nombre`, `sigla`, `fechaFundacion`, `equipoDirectivo`, `direccion`, `ciudad`, `telefono`, `email`, `url`) VALUES
(1, 0, 'Centro de nivel secundario nÃ¹mero 3', 'CENS 3', '2010-03-03', 'Directora: InÃ¨s Sanchez\r\nVicedirectora: Cecilia Imaz\r\nSecretario: ', 'no se', 'Ushuaia', '422333', 'cens3@cens.tdf.gob.ar', 'cens3.tdf.gob.ar'),
(2, 0, 'Centro de nivel secundario nÃ¹mero 15', 'CENS 15', '2035-03-03', 'Director: Prof. Bogado Hugo\r\nVicedirector: Cra. Viviana Stabile\r\nSecretario: \r\n', 'Av. MaipÃ¹ 630', 'Ushuaia', '444555', 'cens15@cens.tdf.gob.ar', 'cens15.tdf.gob.ar'),
(3, 0, 'Centro de Nivel Seundario nÃ¹mero 302', 'CENS 302', '2035-03-05', 'Directora: Alejandra Osma\r\n\r\nVicedirectora: Sandra Amuchastegui\r\n\r\nSecretario: Gustavo ', 'Calle RÃ¬o Grande 134 ', 'Ushuaia', '432123', 'cens302@edutdf.gob.ar', 'cens302.edutdf.gob.ar'),
(4, 9400001, 'Centro educativo de nivel secundario numero 364', 'CENS 364', '2035-03-09', 'Director: Silvia Real\r\nVicedirector: Alfredo Arce\r\nSecretario: Ramiro Pinedo', 'Av. Alem 3902', 'Ushuaia', '445667', 'cens364@eductdf.gob.ar', ''),
(5, 940000500, 'Esc. Prov. KayÃº ChenÃ©n', 'EP KayÃº ChenÃ©n', '2015-03-05', 'Juan Tomada', 'Magallanes 1745', 'Ushuaia', '02901-423337', 'especialkayu@gmail.com', ''),
(6, 0, 'Colegio Provincial Los Andes', 'CP Los Andes', '1995-08-06', 'Prof. Juan Roldan', 'Uriburu 345 BÂº 640', 'Ushuaia', '445667', 'landes@gmail.com', 'www.losandes.prometeotdf.org'),
(7, 940000200, 'Colegio Provincial Soberanía Nacional', 'CP SoberanÃ­a Nac.', '1995-08-10', 'Prof. Benitez Rodolfo.', 'Perito Moreno 345', 'Rio Grande', '443445', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `centros_empleados`
--

CREATE TABLE IF NOT EXISTS `centros_empleados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `centro_id` int(11) NOT NULL,
  `empleado_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `empleado_id` (`empleado_id`,`centro_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `centros_empleados`
--

INSERT INTO `centros_empleados` (`id`, `centro_id`, `empleado_id`) VALUES
(18, 2, 1),
(19, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ciclos`
--

CREATE TABLE IF NOT EXISTS `ciclos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ciclo` varchar(11) CHARACTER SET latin1 NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFinal` date NOT NULL,
  `primer_periodo` date NOT NULL,
  `segundo_periodo` date NOT NULL,
  `tercer_periodo` date NOT NULL,
  `observaciones` text CHARACTER SET latin1,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ciclo` (`ciclo`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `ciclos`
--

INSERT INTO `ciclos` (`id`, `ciclo`, `fechaInicio`, `fechaFinal`, `primer_periodo`, `segundo_periodo`, `tercer_periodo`, `observaciones`) VALUES
(1, '2014', '2014-03-06', '2014-12-23', '2014-03-06', '2014-08-06', '0000-00-00', ''),
(4, '2013', '2013-03-06', '2013-12-30', '2013-03-06', '2013-08-06', '0000-00-00', 'Ninguna.'),
(5, '2015', '2015-03-09', '2015-12-13', '2015-03-09', '2015-08-09', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `ciclos_cursos`
--

CREATE TABLE IF NOT EXISTS `ciclos_cursos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ciclo_id` int(11) NOT NULL,
  `curso_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ciclos_cursos` (`ciclo_id`,`curso_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=83 ;

--
-- Dumping data for table `ciclos_cursos`
--

INSERT INTO `ciclos_cursos` (`id`, `ciclo_id`, `curso_id`) VALUES
(67, 5, 1),
(64, 5, 2),
(80, 1, 3),
(58, 5, 4),
(66, 4, 1),
(63, 4, 2),
(81, 4, 3),
(57, 4, 4),
(55, 5, 6),
(54, 4, 6),
(52, 5, 7),
(51, 4, 7),
(40, 5, 8),
(39, 4, 8),
(65, 1, 1),
(62, 1, 2),
(82, 5, 3),
(56, 1, 4),
(53, 1, 6),
(50, 1, 7),
(38, 1, 8),
(77, 1, 9),
(44, 1, 10),
(41, 1, 11),
(42, 4, 11),
(43, 5, 11),
(45, 4, 10),
(46, 5, 10),
(78, 4, 9),
(79, 5, 9);

-- --------------------------------------------------------

--
-- Table structure for table `cursos`
--

CREATE TABLE IF NOT EXISTS `cursos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(50) CHARACTER SET latin1 NOT NULL,
  `anio` varchar(11) CHARACTER SET latin1 NOT NULL,
  `division` varchar(11) CHARACTER SET latin1 NOT NULL,
  `turno` varchar(11) CHARACTER SET latin1 NOT NULL,
  `aula_nro` int(3) DEFAULT NULL,
  `plazas` int(2) NOT NULL,
  `organizacion_cursada` varchar(50) CHARACTER SET latin1 NOT NULL,
  `centro_id` int(11) NOT NULL,
  `titulacion_id` int(11) NOT NULL,
  `modalidad_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `cursos`
--

INSERT INTO `cursos` (`id`, `tipo`, `anio`, `division`, `turno`, `aula_nro`, `plazas`, `organizacion_cursada`, `centro_id`, `titulacion_id`, `modalidad_id`) VALUES
(1, 'Independiente', '1ero', '4to', 'Tarde', 1, 5, '', 6, 1, 1),
(2, 'Independiente', '3ero', '3ero', 'Vespertino', 1, 4, '', 6, 1, 5),
(3, 'Independiente', '3ero', '2do', 'Tarde', 4, 12, '', 6, 1, 4),
(4, 'Independiente', '3ero', '1ero', 'Tarde', 3, 23, '', 6, 1, 1),
(6, 'Independiente', '2do', '3ero', 'Tarde', 0, 3, '', 6, 1, 7),
(7, 'Independiente', '2do', '2do', 'Manana', 0, 12, '', 6, 1, 8),
(8, 'Independiente', '1ero', '3ero', 'Tarde', 0, 14, '', 6, 1, 9),
(9, 'Independiente', '1ero', '1ero', 'Manana', 1, 21, '', 6, 1, 10),
(10, 'Independiente', '1ero', '2do', 'Manana', NULL, 0, '', 6, 1, 0),
(11, 'Independiente', '2do', '1ero', 'Manana', NULL, 30, '', 6, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cursos_inasistencias`
--

CREATE TABLE IF NOT EXISTS `cursos_inasistencias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `curso_id` int(11) NOT NULL,
  `inasistencia_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `cursos_inasistencias`
--

INSERT INTO `cursos_inasistencias` (`id`, `curso_id`, `inasistencia_id`) VALUES
(1, 9, 1),
(2, 11, 3),
(3, 9, 5),
(4, 9, 6);

-- --------------------------------------------------------

--
-- Table structure for table `cursos_inscripcions`
--

CREATE TABLE IF NOT EXISTS `cursos_inscripcions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `curso_id` int(11) NOT NULL,
  `inscripcion_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `cursos_inscripcions`
--

INSERT INTO `cursos_inscripcions` (`id`, `curso_id`, `inscripcion_id`) VALUES
(19, 9, 1),
(14, 11, 2),
(13, 4, 3),
(15, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `docentes`
--

CREATE TABLE IF NOT EXISTS `docentes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `primerNombre` varchar(50) CHARACTER SET latin1 NOT NULL,
  `apellido` varchar(50) CHARACTER SET latin1 NOT NULL,
  `dni` int(9) NOT NULL,
  `direccion` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `telefono` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `ciudad` varchar(50) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `dni` (`dni`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `docentes`
--

INSERT INTO `docentes` (`id`, `primerNombre`, `apellido`, `dni`, `direccion`, `telefono`, `email`, `ciudad`) VALUES
(1, 'Luis', 'Paez', 34567987, 'Godoy 34', '432567', 'pluis@gmail.com', 'Ushuaia'),
(2, 'Olga', 'Baez', 21456123, 'Roca 45', '445667', 'bolga@gmail.com', 'Ushuaia'),
(4, 'Alan', 'Sosa', 21345876, 'Onas 123', '432567', '', 'Ushuaia'),
(5, 'Paul', 'Parra', 23456789, 'Paz 345', '456789', '', 'Ushuaia'),
(6, 'Juan', 'Gol', 23456781, 'Roca 123', '456789', 'gjuan@gmail.com', 'Ushuaia');

-- --------------------------------------------------------

--
-- Table structure for table `empleados`
--

CREATE TABLE IF NOT EXISTS `empleados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `documento_tipo` varchar(30) NOT NULL,
  `documento_nro` int(9) NOT NULL,
  `cuit_cuil` int(11) NOT NULL,
  `apellidos` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nombres` varchar(50) CHARACTER SET latin1 NOT NULL,
  `fecha_nac` date NOT NULL,
  `pcia_nac` varchar(50) NOT NULL,
  `indigena` varchar(50) DEFAULT NULL,
  `estado_civil` varchar(30) NOT NULL,
  `calle_nombre` varchar(50) CHARACTER SET latin1 NOT NULL,
  `calle_nro` int(4) NOT NULL,
  `telefono_nro` varchar(20) CHARACTER SET latin1 NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `barrio` varchar(50) NOT NULL,
  `ciudad` varchar(50) CHARACTER SET latin1 NOT NULL,
  `creado` date NOT NULL,
  `modificado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `dni` (`documento_nro`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `empleados`
--

INSERT INTO `empleados` (`id`, `documento_tipo`, `documento_nro`, `cuit_cuil`, `apellidos`, `nombres`, `fecha_nac`, `pcia_nac`, `indigena`, `estado_civil`, `calle_nombre`, `calle_nro`, `telefono_nro`, `email`, `barrio`, `ciudad`, `creado`, `modificado`) VALUES
(1, '', 25570652, 0, 'Gay', 'Pablo', '0000-00-00', '', NULL, '', 'Intendente Torelli 1351', 0, '445882', '', '', 'Ushuaia', '0000-00-00', '0000-00-00 00:00:00'),
(2, 'DNI', 26578432, 0, 'Gil', 'Santiago', '1980-06-10', '', '', 'Soltero', 'Roca', 345, '445554', 'gsantiago@gmail.com', 'Centro', 'Ushuaia', '2015-10-06', '0000-00-00 00:00:00'),
(3, 'DNI', 27658678, 0, 'Flores', 'Marcos', '1981-06-10', '', '', 'Soltero', 'Roca', 234, '446778', 'fmarcos@gmail.com', 'Centro', 'Ushuaia', '2015-10-06', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `estados`
--

CREATE TABLE IF NOT EXISTS `estados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `estados`
--

INSERT INTO `estados` (`id`, `nombre`) VALUES
(1, 'CUBIERTO'),
(2, 'VACANTE'),
(3, 'CANCELADO'),
(4, 'BORRADOR');

-- --------------------------------------------------------

--
-- Table structure for table `familiars`
--

CREATE TABLE IF NOT EXISTS `familiars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `alumno_id` int(11) NOT NULL,
  `vinculo` varchar(30) CHARACTER SET latin1 NOT NULL,
  `nombre_completo` varchar(50) CHARACTER SET latin1 NOT NULL,
  `cuit_cuil` int(11) NOT NULL,
  `nacionalidad` varchar(50) CHARACTER SET latin1 NOT NULL,
  `ocupacion` varchar(50) CHARACTER SET latin1 NOT NULL,
  `telefono_nro` varchar(20) CHARACTER SET latin1 NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `domicilio` varchar(50) CHARACTER SET latin1 NOT NULL,
  `barrio` varchar(50) CHARACTER SET latin1 NOT NULL,
  `ciudad` varchar(50) CHARACTER SET latin1 NOT NULL,
  `observaciones` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `creado` date NOT NULL,
  `modificado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `familiars`
--

INSERT INTO `familiars` (`id`, `alumno_id`, `vinculo`, `nombre_completo`, `cuit_cuil`, `nacionalidad`, `ocupacion`, `telefono_nro`, `email`, `domicilio`, `barrio`, `ciudad`, `observaciones`, `creado`, `modificado`) VALUES
(1, 1, 'Padre', 'Rodolfo Oscar Villanueva', 0, 'Argentino', 'Administrativo', '2901445667', '', 'Gdor. Paz 345', 'Centro', 'Ushuaia', NULL, '2015-08-01', '2015-08-03 09:46:34'),
(2, 1, 'Madre', 'Elva Olga Garcia', 0, 'Argentina', 'Ama de casa', '2901445667', '', 'Gdor. Paz 345', 'Centro', 'Ushuaia', NULL, '2015-08-01', '2015-08-03 09:43:53');

-- --------------------------------------------------------

--
-- Table structure for table `horarios`
--

CREATE TABLE IF NOT EXISTS `horarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fechaCreacion` date NOT NULL,
  `dia` varchar(25) CHARACTER SET latin1 NOT NULL,
  `horaInicio` time NOT NULL,
  `horaFin` time NOT NULL,
  `ciclo_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `horarios`
--

INSERT INTO `horarios` (`id`, `fechaCreacion`, `dia`, `horaInicio`, `horaFin`, `ciclo_id`) VALUES
(6, '2014-04-16', 'Lunes_hora2_3', '20:45:00', '21:25:00', 0),
(5, '2014-04-16', 'Lunes_hora1_3', '20:05:00', '20:45:00', 0),
(7, '2014-04-16', 'Lunes_hora1_15', '20:05:00', '20:45:00', 0),
(8, '2014-04-16', 'Lunes_hora2_15', '20:45:00', '21:25:00', 0),
(9, '2014-04-16', 'Lunes_hora1_302', '20:05:00', '20:45:00', 0),
(10, '2014-04-16', 'Lunes_hora2_302', '20:45:00', '21:25:00', 0),
(11, '2015-02-10', 'Lunes_hora1_302', '08:15:00', '08:55:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `i18n`
--

CREATE TABLE IF NOT EXISTS `i18n` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `locale` varchar(6) NOT NULL,
  `model` varchar(255) NOT NULL,
  `foreign_key` int(10) NOT NULL,
  `field` varchar(255) NOT NULL,
  `content` text,
  PRIMARY KEY (`id`),
  KEY `locale` (`locale`),
  KEY `model` (`model`),
  KEY `row_id` (`foreign_key`),
  KEY `field` (`field`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `i18n`
--


-- --------------------------------------------------------

--
-- Table structure for table `inasistencias`
--

CREATE TABLE IF NOT EXISTS `inasistencias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(50) CHARACTER SET latin1 NOT NULL,
  `justificado` varchar(10) CHARACTER SET latin1 NOT NULL,
  `causa` varchar(100) CHARACTER SET latin1 NOT NULL,
  `creado` date NOT NULL,
  `modificado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `alumno_id` int(11) NOT NULL,
  `ciclo_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `inasistencias`
--

INSERT INTO `inasistencias` (`id`, `tipo`, `justificado`, `causa`, `creado`, `modificado`, `alumno_id`, `ciclo_id`) VALUES
(1, 'completa', 'Si', 'Enfermedad', '2015-08-04', '2015-08-11 01:11:32', 1, 5),
(2, 'completa', 'No', 'Enfermedad', '2015-08-04', '2015-08-11 01:13:41', 1, 5),
(3, 'media', 'Si', 'Paro de transporte', '2015-08-11', '2015-08-31 20:35:31', 2, 1),
(4, 'completa', 'No', 'Enfermedad', '2015-08-05', '2015-09-03 19:59:43', 1, 5),
(5, 'completa', 'Si', 'Enfermedad', '2015-08-06', '2015-09-03 20:03:52', 1, 5),
(6, 'completa', 'Si', 'Enfermedad', '2015-08-04', '2015-09-03 20:04:14', 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `inasistencias_materias`
--

CREATE TABLE IF NOT EXISTS `inasistencias_materias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `inasistencia_id` int(11) NOT NULL,
  `materia_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `inasistencias_materias`
--

INSERT INTO `inasistencias_materias` (`id`, `inasistencia_id`, `materia_id`) VALUES
(22, 1, 5),
(24, 3, 10),
(19, 2, 2),
(21, 1, 2),
(20, 1, 6),
(23, 3, 7),
(25, 4, 2),
(26, 5, 6),
(27, 5, 2),
(28, 5, 5),
(29, 6, 6),
(30, 6, 2),
(31, 6, 5);

-- --------------------------------------------------------

--
-- Table structure for table `inscripcions`
--

CREATE TABLE IF NOT EXISTS `inscripcions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `legajo_nro` varchar(11) CHARACTER SET latin1 NOT NULL,
  `tipo_alta` varchar(30) CHARACTER SET latin1 NOT NULL,
  `fecha_alta` date NOT NULL,
  `cursa` text CHARACTER SET latin1 NOT NULL,
  `fines` text CHARACTER SET latin1 NOT NULL,
  `fecha_baja` date DEFAULT NULL,
  `tipo_baja` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `motivo_baja` text CHARACTER SET latin1,
  `fecha_egreso` date DEFAULT NULL,
  `libro_matriz` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `acta` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `folio` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `fecha_emision_titulo` date DEFAULT NULL,
  `recursante` varchar(2) CHARACTER SET latin1 NOT NULL,
  `nota` int(2) DEFAULT NULL,
  `condicion_aprobacion` varchar(50) CHARACTER SET latin1 NOT NULL,
  `fecha_nota` date DEFAULT NULL,
  `modificado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `alumno_id` int(11) NOT NULL,
  `ciclo_id` int(11) NOT NULL,
  `centro_id` int(11) NOT NULL,
  `empleado_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `inscripcions`
--

INSERT INTO `inscripcions` (`id`, `legajo_nro`, `tipo_alta`, `fecha_alta`, `cursa`, `fines`, `fecha_baja`, `tipo_baja`, `motivo_baja`, `fecha_egreso`, `libro_matriz`, `acta`, `folio`, `fecha_emision_titulo`, `recursante`, `nota`, `condicion_aprobacion`, `fecha_nota`, `modificado`, `alumno_id`, `ciclo_id`, `centro_id`, `empleado_id`) VALUES
(1, '2222222-14', 'Regular', '2014-07-27', 'Cursa algun espacio curricular.', 'No', '2014-12-12', '', '', NULL, '', '', '', NULL, 'No', NULL, 'Examen                                         reg', NULL, '2015-09-03 16:02:08', 1, 1, 6, 1),
(2, '2222223-15', 'Regular', '2015-08-05', 'Cursa algun espacio curricular.', 'No', '2015-08-10', '', '', '2015-08-05', '', '', '', '2015-08-05', 'No', NULL, 'Examen                                         reg', NULL, '2015-09-03 15:59:04', 2, 5, 6, 1),
(3, '2222224-15', 'Regular', '2015-08-10', 'Cursa algun espacio curricular.', 'No', '2015-08-10', '', '', '2015-08-10', '', '', '', '2015-08-10', 'No', NULL, 'Examen                                         reg', NULL, '2015-09-03 15:58:19', 3, 5, 6, 1),
(4, '2222227-15', 'Regular', '2015-08-31', 'Cursa algun espacio curricular.', 'No', NULL, '', '', NULL, '', '', '', NULL, 'No', NULL, 'Examen                                         reg', NULL, '2015-09-03 15:59:25', 1, 5, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `inscripcions_materias`
--

CREATE TABLE IF NOT EXISTS `inscripcions_materias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `inscripcion_id` int(11) NOT NULL,
  `materia_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `inscripcion_id` (`inscripcion_id`,`materia_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `inscripcions_materias`
--

INSERT INTO `inscripcions_materias` (`id`, `inscripcion_id`, `materia_id`) VALUES
(1, 5, 2),
(2, 6, 2),
(3, 7, 2),
(4, 8, 2),
(38, 2, 7),
(39, 2, 10),
(37, 3, 12),
(36, 3, 11),
(50, 1, 6),
(52, 1, 5),
(51, 1, 2),
(40, 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `integracions`
--

CREATE TABLE IF NOT EXISTS `integracions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_discapacidad` varchar(50) CHARACTER SET latin1 NOT NULL,
  `docente_nombre_completo` varchar(50) CHARACTER SET latin1 NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date DEFAULT NULL,
  `observaciones` varchar(200) CHARACTER SET latin1 NOT NULL,
  `informe` varchar(255) DEFAULT NULL,
  `informe_dir` varchar(255) DEFAULT NULL,
  `creado` date NOT NULL,
  `modificado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `alumno_id` int(11) NOT NULL,
  `centro_id` int(11) NOT NULL,
  `ciclo_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `integracions`
--

INSERT INTO `integracions` (`id`, `tipo_discapacidad`, `docente_nombre_completo`, `fecha_inicio`, `fecha_fin`, `observaciones`, `informe`, `informe_dir`, `creado`, `modificado`, `alumno_id`, `centro_id`, `ciclo_id`) VALUES
(1, 'Auditiva', 'Juan Carlos Orleans', '2009-07-29', NULL, 'Hipoacusico.', '', NULL, '2015-07-29', '2015-08-11 01:00:05', 1, 7, 4);

-- --------------------------------------------------------

--
-- Table structure for table `inventarios`
--

CREATE TABLE IF NOT EXISTS `inventarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) CHARACTER SET latin1 NOT NULL,
  `fechaCreacion` date NOT NULL,
  `fechaModificacion` date NOT NULL,
  `observacion` text CHARACTER SET latin1,
  `empleado_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `inventarios`
--

INSERT INTO `inventarios` (`id`, `nombre`, `fechaCreacion`, `fechaModificacion`, `observacion`, `empleado_id`) VALUES
(1, 'LibrerÃ­a_3', '2009-03-17', '2010-03-17', 'LibrerÃ¬a destinada para todo el personal de la secretaria.  ', 2),
(2, 'InformÃ¡tica_3', '2014-06-13', '2015-06-13', 'Incluye insumos para impresion (hojas, tinta, toner) y perifericos de contingencia (mouse, teclados, extensores USB, tarjetas de memoria, tarjetas de red).', 3),
(3, 'Limpieza_3', '2015-02-10', '2015-02-18', '', 3),
(4, 'Amoblamientos_3', '2015-02-10', '2015-02-18', '', 3),
(5, 'Herramientas_3', '2015-02-10', '2015-02-18', '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `licencias`
--

CREATE TABLE IF NOT EXISTS `licencias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `articulo` varchar(100) CHARACTER SET latin1 NOT NULL,
  `descripcion` varchar(200) CHARACTER SET latin1 NOT NULL,
  `fechaDesde` date NOT NULL,
  `fechaHasta` date DEFAULT NULL,
  `observacion` text CHARACTER SET latin1,
  `docente_id` int(11) DEFAULT NULL,
  `empleado_id` int(11) DEFAULT NULL,
  `cargo_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `articulo` (`articulo`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `licencias`
--

INSERT INTO `licencias` (`id`, `articulo`, `descripcion`, `fechaDesde`, `fechaHasta`, `observacion`, `docente_id`, `empleado_id`, `cargo_id`) VALUES
(1, 'L6IV', 'Licencia por enfermedad', '2014-03-07', '2014-03-07', '', 0, 4, 8),
(2, 'L6III', 'Largo tratamiento.', '2014-04-28', '2014-04-28', 'Ninguna', 4, 3, 6),
(3, 'L6II', 'Licencia por enfermedad.', '2014-04-29', '2014-04-29', '', 2, 3, 4),
(4, 'Nacimiento', '', '2014-06-02', '2014-08-09', '', 1, 3, 7);

-- --------------------------------------------------------

--
-- Table structure for table `materias`
--

CREATE TABLE IF NOT EXISTS `materias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) CHARACTER SET latin1 NOT NULL,
  `campo_formacion` varchar(50) CHARACTER SET latin1 NOT NULL,
  `dictado` varchar(50) CHARACTER SET latin1 NOT NULL,
  `obligatoriedad` varchar(50) CHARACTER SET latin1 NOT NULL,
  `carga_horaria_en` varchar(50) CHARACTER SET latin1 NOT NULL,
  `carga_horaria_semanal` int(2) NOT NULL,
  `duracion_en` varchar(50) CHARACTER SET latin1 NOT NULL,
  `duracion` int(2) NOT NULL,
  `escala_numerica` varchar(10) CHARACTER SET latin1 NOT NULL,
  `nota_minima` varchar(2) CHARACTER SET latin1 NOT NULL,
  `alia` varchar(12) CHARACTER SET latin1 NOT NULL,
  `contenido` varchar(255) CHARACTER SET latin1 NOT NULL,
  `curso_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `alia` (`alia`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `materias`
--

INSERT INTO `materias` (`id`, `nombre`, `campo_formacion`, `dictado`, `obligatoriedad`, `carga_horaria_en`, `carga_horaria_semanal`, `duracion_en`, `duracion`, `escala_numerica`, `nota_minima`, `alia`, `contenido`, `curso_id`) VALUES
(6, 'Historia de primero', 'A completar', 'Presencial', '', '', 0, '', 0, '', '', 'HIS1_1', 'Completar', 9),
(2, 'Matematica de primero', 'A completar', 'Presencial', '', '', 0, '', 0, '', '', 'MAT1_1', 'Completar', 9),
(5, 'Lengua de primero', 'A completar', 'Presencial', '', '', 0, '', 0, '', '', 'LEN1_1', 'Completar', 9),
(7, 'Historia de segundo', 'A completar', 'Presencial', '', '', 0, '', 0, '', '', 'HIS2_1', 'Completar', 11),
(10, 'Lengua de segundo', 'A completar', 'Presencial', '', '', 0, '', 0, '', '', 'LEN2_1', 'Ninguno.', 11),
(11, 'Historia de tercero', 'A completar', 'Presencial', '', '', 0, '', 0, '', '', 'HIS3_1', 'Ninguno.', 4),
(12, 'Matematica de tercero', 'A completar', 'Presencial', '', '', 0, '', 0, '', '', 'MAT3_1', 'A publicar.', 4);

-- --------------------------------------------------------

--
-- Table structure for table `modalidads`
--

CREATE TABLE IF NOT EXISTS `modalidads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) CHARACTER SET latin1 NOT NULL,
  `descripcion` text CHARACTER SET latin1,
  `centro_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre` (`nombre`),
  UNIQUE KEY `nombre_2` (`nombre`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `modalidads`
--

INSERT INTO `modalidads` (`id`, `nombre`, `descripcion`, `centro_id`) VALUES
(1, 'Presencial_15', 'Se cursa en la sede.', 2),
(2, 'FINES_15', '', 2),
(3, 'Proyecto adolescentes_15', 'Para los menores de edad que quedaron fuera del sistema educativo regular.', 2),
(4, 'Presencial_302', 'Se cursa en la sede.', 4),
(6, 'Todas', 'Para rellenar.', 1),
(5, 'Presencial_3', 'Se cursa en sede.', 1),
(7, 'Todas_3', 'Para personal administrativo y otros.', 1),
(8, 'Todas_15', 'Para personal administrativo y otros.', 2),
(9, 'Todas_302', 'Para personal administrativo y otros.', 4),
(10, 'Semipresencial_Puerto_364', 'Se dicta en el Zoom del Puerto.', 5);

-- --------------------------------------------------------

--
-- Table structure for table `notas`
--

CREATE TABLE IF NOT EXISTS `notas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nota_uno_primer_periodo` decimal(3,2) DEFAULT NULL,
  `fecha_nota_uno_primer_periodo` date DEFAULT NULL,
  `nota_dos_primer_periodo` decimal(3,2) DEFAULT NULL,
  `fecha_nota_dos_primer_periodo` date DEFAULT NULL,
  `nota_tres_primer_periodo` decimal(3,2) DEFAULT NULL,
  `fecha_nota_tres_primer_periodo` date DEFAULT NULL,
  `promedio_primer_periodo` smallint(5) unsigned DEFAULT NULL,
  `fecha_promedio_primer_periodo` date DEFAULT NULL,
  `nota_uno_segundo_periodo` decimal(3,2) DEFAULT NULL,
  `fecha_nota_uno_segundo_periodo` date DEFAULT NULL,
  `nota_dos_segundo_periodo` decimal(3,2) DEFAULT NULL,
  `fecha_nota_dos_segundo_periodo` date DEFAULT NULL,
  `nota_tres_segundo_periodo` decimal(3,2) DEFAULT NULL,
  `fecha_nota_tres_segundo_periodo` date DEFAULT NULL,
  `promedio_segundo_periodo` smallint(5) unsigned DEFAULT NULL,
  `fecha_promedio_segundo_periodo` date DEFAULT NULL,
  `nota_uno_tercer_periodo` decimal(3,2) DEFAULT NULL,
  `fecha_nota_uno_tercer_periodo` date DEFAULT NULL,
  `nota_dos_tercer_periodo` decimal(3,2) DEFAULT NULL,
  `fecha_nota_dos_tercer_periodo` date DEFAULT NULL,
  `nota_tres_tercer_periodo` decimal(3,2) DEFAULT NULL,
  `fecha_nota_tres_tercer_periodo` date DEFAULT NULL,
  `promedio_tercer_periodo` smallint(6) DEFAULT NULL,
  `fecha_promedio_tercer_periodo` date DEFAULT NULL,
  `promedio_a_termino` decimal(3,2) DEFAULT NULL,
  `fecha_promedio_a_termino` date DEFAULT NULL,
  `nota_en_diciembre` decimal(3,2) DEFAULT NULL,
  `fecha_nota_en_diciembre` date DEFAULT NULL,
  `nota_en_marzo` decimal(3,2) DEFAULT NULL,
  `fecha_nota_en_marzo` date DEFAULT NULL,
  `promedio_final` float(3,2) DEFAULT NULL,
  `fecha_promedio_final` date DEFAULT NULL,
  `observaciones` text CHARACTER SET latin1 NOT NULL,
  `alumno_id` int(11) NOT NULL,
  `materia_id` int(11) NOT NULL,
  `ciclo_id` int(11) NOT NULL,
  `creado` date NOT NULL,
  `modificado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `notas`
--

INSERT INTO `notas` (`id`, `nota_uno_primer_periodo`, `fecha_nota_uno_primer_periodo`, `nota_dos_primer_periodo`, `fecha_nota_dos_primer_periodo`, `nota_tres_primer_periodo`, `fecha_nota_tres_primer_periodo`, `promedio_primer_periodo`, `fecha_promedio_primer_periodo`, `nota_uno_segundo_periodo`, `fecha_nota_uno_segundo_periodo`, `nota_dos_segundo_periodo`, `fecha_nota_dos_segundo_periodo`, `nota_tres_segundo_periodo`, `fecha_nota_tres_segundo_periodo`, `promedio_segundo_periodo`, `fecha_promedio_segundo_periodo`, `nota_uno_tercer_periodo`, `fecha_nota_uno_tercer_periodo`, `nota_dos_tercer_periodo`, `fecha_nota_dos_tercer_periodo`, `nota_tres_tercer_periodo`, `fecha_nota_tres_tercer_periodo`, `promedio_tercer_periodo`, `fecha_promedio_tercer_periodo`, `promedio_a_termino`, `fecha_promedio_a_termino`, `nota_en_diciembre`, `fecha_nota_en_diciembre`, `nota_en_marzo`, `fecha_nota_en_marzo`, `promedio_final`, `fecha_promedio_final`, `observaciones`, `alumno_id`, `materia_id`, `ciclo_id`, `creado`, `modificado`) VALUES
(1, '6.00', NULL, '7.00', NULL, '0.00', '0000-00-00', 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1, 2, 5, '0000-00-00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `personas`
--

CREATE TABLE IF NOT EXISTS `personas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `apellidos` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nombres` varchar(50) CHARACTER SET latin1 NOT NULL,
  `dni_tipo` varchar(30) CHARACTER SET latin1 NOT NULL,
  `dni_nro` int(9) NOT NULL,
  `cuit_cuil` int(11) DEFAULT NULL,
  `ocupacion` varchar(50) CHARACTER SET latin1 NOT NULL,
  `fecha_nac` date NOT NULL,
  `lugar_nac` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `nacionalidad` varchar(50) CHARACTER SET latin1 NOT NULL,
  `estado_civil` varchar(30) CHARACTER SET latin1 NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `telefono_nro` int(20) NOT NULL,
  `calle_nombre` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `calle_nro` int(11) DEFAULT NULL,
  `barrio` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `ciudad` varchar(50) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `personas`
--


-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) CHARACTER SET latin1 NOT NULL,
  `marca` varchar(100) CHARACTER SET latin1 NOT NULL,
  `cantidad` int(5) NOT NULL,
  `proovedor` varchar(100) CHARACTER SET latin1 NOT NULL,
  `ubicacion` text CHARACTER SET latin1 NOT NULL,
  `areaDestino` varchar(100) CHARACTER SET latin1 NOT NULL,
  `observacion` text CHARACTER SET latin1,
  `inventario_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `marca`, `cantidad`, `proovedor`, `ubicacion`, `areaDestino`, `observacion`, `inventario_id`) VALUES
(1, 'Lapiz negro', 'Castell', 50, 'LibrerÃ¬a Rayuela', 'Secretaria', 'AdminsitraciÃ²n', 'Ninguna', 1),
(2, 'Toner', 'HP', 2, 'ECOPRINT', 'Secretaria', 'Administracion', 'Cartuchos de toner nuevos para la impresora de Secretaria.', 2);

-- --------------------------------------------------------

--
-- Table structure for table `servicios`
--

CREATE TABLE IF NOT EXISTS `servicios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_servicio` varchar(50) CHARACTER SET latin1 NOT NULL,
  `fecha_solicitud_servicio` date DEFAULT NULL,
  `estado` varchar(50) CHARACTER SET latin1 NOT NULL,
  `prestador` varchar(50) CHARACTER SET latin1 NOT NULL,
  `docente_profesional_acargo` varchar(50) CHARACTER SET latin1 NOT NULL,
  `tipo_alta` varchar(50) CHARACTER SET latin1 NOT NULL,
  `fecha_alta` date NOT NULL,
  `tipo_baja` varchar(50) CHARACTER SET latin1 NOT NULL,
  `fecha_baja` date DEFAULT NULL,
  `total_dias_asistencia` int(3) NOT NULL,
  `total_dias_inasistencia` int(3) NOT NULL,
  `observaciones` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `informe` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `informe_dir` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `creado` date NOT NULL,
  `modificado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `alumno_id` int(11) NOT NULL,
  `ciclo_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `servicios`
--

INSERT INTO `servicios` (`id`, `tipo_servicio`, `fecha_solicitud_servicio`, `estado`, `prestador`, `docente_profesional_acargo`, `tipo_alta`, `fecha_alta`, `tipo_baja`, `fecha_baja`, `total_dias_asistencia`, `total_dias_inasistencia`, `observaciones`, `informe`, `informe_dir`, `creado`, `modificado`, `alumno_id`, `ciclo_id`) VALUES
(1, 'Domiciliaria', NULL, 'Desactivo', 'Supervisión de Media de Ushuaia', 'Luis María Oviedo', 'Fractura', '2013-10-30', 'Fin de ciclo', '2013-12-16', 0, 0, 'Servicio prestado sin problemas.', NULL, '', '2013-11-11', '2015-09-03 19:44:28', 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `titulacions`
--

CREATE TABLE IF NOT EXISTS `titulacions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) CHARACTER SET latin1 NOT NULL,
  `certificacion` varchar(50) CHARACTER SET latin1 NOT NULL,
  `condicion_ingreso` varchar(50) CHARACTER SET latin1 NOT NULL,
  `ciclo_implementacion` varchar(4) CHARACTER SET latin1 NOT NULL,
  `ciclo_finalizacion` varchar(4) CHARACTER SET latin1 DEFAULT NULL,
  `a_termino` varchar(2) CHARACTER SET latin1 NOT NULL,
  `orientacion` varchar(50) CHARACTER SET latin1 NOT NULL,
  `organizacion_plan` varchar(50) CHARACTER SET latin1 NOT NULL,
  `plan_estudio` varchar(255) CHARACTER SET latin1 NOT NULL,
  `organizacion_cursada` varchar(50) CHARACTER SET latin1 NOT NULL,
  `forma_dictado` varchar(50) CHARACTER SET latin1 NOT NULL,
  `carga_horaria_en` varchar(50) CHARACTER SET latin1 NOT NULL,
  `carga_horaria` int(3) NOT NULL,
  `edad_minima` int(2) NOT NULL,
  `tiene_articulacion` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `duracion_en` varchar(20) CHARACTER SET latin1 NOT NULL,
  `duracion` int(2) NOT NULL,
  `norma_aprob_jur_tipo` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `norma_aprob_jur_nro` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `norma_aprob_jur_anio` int(4) DEFAULT NULL,
  `norma_val_nac_tipo` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `norma_val_nac_nro` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `norma_val_nac_anio` int(4) DEFAULT NULL,
  `norma_ratif_jur_tipo` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `norma_ratif_jur_nro` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `norma_ratif_jur_anio` int(4) DEFAULT NULL,
  `norma_homologacion_tipo` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `norma_homologacion_nro` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `norma_homologacion_anio` int(4) DEFAULT NULL,
  `centro_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `titulacions`
--

INSERT INTO `titulacions` (`id`, `nombre`, `certificacion`, `condicion_ingreso`, `ciclo_implementacion`, `ciclo_finalizacion`, `a_termino`, `orientacion`, `organizacion_plan`, `plan_estudio`, `organizacion_cursada`, `forma_dictado`, `carga_horaria_en`, `carga_horaria`, `edad_minima`, `tiene_articulacion`, `duracion_en`, `duracion`, `norma_aprob_jur_tipo`, `norma_aprob_jur_nro`, `norma_aprob_jur_anio`, `norma_val_nac_tipo`, `norma_val_nac_nro`, `norma_val_nac_anio`, `norma_ratif_jur_tipo`, `norma_ratif_jur_nro`, `norma_ratif_jur_anio`, `norma_homologacion_tipo`, `norma_homologacion_nro`, `norma_homologacion_anio`, `centro_id`) VALUES
(1, 'Auxiliar en AdministraciÃ³n de Empresas', 'Primaria de 7 aÃ±os                               ', 'Otros', '2013', '2017', 'NO', 'EconomÃ­a y GestiÃ³n de las Organizaciones', 'AÃ±o de estudio', '', 'DivisiÃ³n', 'Presencial', 'Hora CÃ¡tedra', 4, 14, 'No Articula', 'AÃ±os', 6, '', '', NULL, '', '', 0, '', '', NULL, '', '', NULL, 6),
(2, 'Perito Auxiliar en Cooperativas Sociales', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', 0, '', '', 0, '', '', 0, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(3, 'Perito Auxiliar en ElectromecÃ nica', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', 0, '', '', 0, '', '', 0, NULL, NULL, NULL, NULL, NULL, NULL, 4),
(4, 'Todas_3', 'Para personal administrativo y otros.', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', 0, '', '', 0, '', '', 0, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(5, 'Todas_15', 'Para personal administrativo y otros.', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', 0, '', '', 0, '', '', 0, NULL, NULL, NULL, NULL, NULL, NULL, 2),
(6, 'Todas_302', 'Para personal administrativo y otros.', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', 0, '', '', 0, '', '', 0, NULL, NULL, NULL, NULL, NULL, NULL, 4),
(7, 'Auxiliar en Seguridad e Higiene en el Trabajo', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', 0, '', '', 0, '', '', 0, NULL, NULL, NULL, NULL, NULL, NULL, 5);

-- --------------------------------------------------------

--
-- Table structure for table `titulos`
--

CREATE TABLE IF NOT EXISTS `titulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) CHARACTER SET latin1 NOT NULL,
  `tipo` varchar(100) CHARACTER SET latin1 NOT NULL,
  `institucion` varchar(100) CHARACTER SET latin1 NOT NULL,
  `docente_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `titulos`
--

INSERT INTO `titulos` (`id`, `titulo`, `tipo`, `institucion`, `docente_id`) VALUES
(1, 'Profesor de MatemÃ ticas', 'Terciario', 'Instituto San Miguel', 2),
(2, 'Profesor de Sociologia', 'Universitario Pregrado', 'Instituto Superior', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email` varchar(128) NOT NULL,
  `role` varchar(64) CHARACTER SET latin1 NOT NULL,
  `puesto` varchar(50) CHARACTER SET latin1 NOT NULL,
  `centro_id` int(11) NOT NULL,
  `empleado_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombreUsuario` (`username`,`password`),
  UNIQUE KEY `nombreUsuario_2` (`username`),
  UNIQUE KEY `clave` (`password`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`, `puesto`, `centro_id`, `empleado_id`, `created`, `modified`, `status`) VALUES
(1, 'gpablo', 'a9d765cfc7384469fe134270fa82c940655aa7a1', 'gpabloandres@gmail.com', 'admin', 'Altas_Bajas', 6, 1, '2015-09-15 16:16:15', '2015-09-21 19:15:35', 1),
(2, 'gsantiago', 'cc7f60f0223712d972d9a880ed03e101f2238eab', 'gsanti@gmail.com', 'usuario', 'Inscripciones', 1, 2, '2015-09-16 12:04:36', '2015-10-06 18:30:25', 1),
(3, 'fmarcos', '6f5ddde678f9ff7ea95a727a8bd6b61584a04f08', 'fmarcos@gmail.com', 'usuario', 'Calificaciones', 1, 3, '2015-09-21 18:48:54', '2015-10-06 18:28:51', 1);
