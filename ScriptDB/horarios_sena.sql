-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2020 at 09:48 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `horarios_sena`
--

-- --------------------------------------------------------

--
-- Table structure for table `aula`
--

CREATE TABLE `aula` (
  `id_aula` int(5) NOT NULL,
  `id_descripcion` int(11) NOT NULL,
  `sedeid_sede` int(4) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `aula`
--

INSERT INTO `aula` (`id_aula`, `id_descripcion`, `sedeid_sede`, `estado`) VALUES
(48, 1, 1, 0),
(102, 1, 1, 0),
(302, 8, 1, 0),
(401, 9, 1, 0),
(507, 8, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `bloque`
--

CREATE TABLE `bloque` (
  `dia` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `trimestre` tinyint(1) NOT NULL,
  `rango_horas` enum('06:00-07:40','08:00-09:40','10:00-11:40','12:00-13:40','14:20-16:00','16:20-18:00','18:15-19:45','20:00-21:40') COLLATE utf8_unicode_ci NOT NULL,
  `persona_documento` int(11) NOT NULL,
  `fichanumero_ficha` int(11) NOT NULL,
  `aulaid_aula` int(5) NOT NULL,
  `anio` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bloque`
--

INSERT INTO `bloque` (`dia`, `trimestre`, `rango_horas`, `persona_documento`, `fichanumero_ficha`, `aulaid_aula`, `anio`) VALUES
('Lunes', 1, '06:00-07:40', 1335, 2000649, 507, 2020);

-- --------------------------------------------------------

--
-- Table structure for table `centro`
--

CREATE TABLE `centro` (
  `id_centro` int(11) NOT NULL,
  `nombre_centro` varchar(155) COLLATE utf8_unicode_ci NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `centro`
--

INSERT INTO `centro` (`id_centro`, `nombre_centro`, `estado`) VALUES
(10, 'CENIGRAF', 0),
(11, 'Hoteleria', 0),
(18, 'metrologia', 0),
(21, 'SENA grande', 0),
(22, 'Sena pequeño', 0),
(23, 'casas blancas', 0);

-- --------------------------------------------------------

--
-- Table structure for table `certificacion`
--

CREATE TABLE `certificacion` (
  `id_certificacion` int(11) NOT NULL,
  `denominacion` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `certificacion_persona`
--

CREATE TABLE `certificacion_persona` (
  `persona_documento` int(11) NOT NULL,
  `id_certificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `competencia`
--

CREATE TABLE `competencia` (
  `id_competencia` int(11) NOT NULL,
  `denominacion` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `duracion` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `competencia`
--

INSERT INTO `competencia` (`id_competencia`, `denominacion`, `duracion`, `estado`) VALUES
(2, 'leer textos en ingles', 180, 0),
(5, 'Inglés', 180, 0),
(6, 'Ética', 180, 0),
(7, 'ANALIZAR LOS REQUISITOS DEL CLIENTE PARA CONSTRUIR EL SISTEMA DE INFORMACIÓN.', 400, 0),
(8, 'Información', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `descripcion_aula`
--

CREATE TABLE `descripcion_aula` (
  `id_descripcion` int(11) NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `descripcion_aula`
--

INSERT INTO `descripcion_aula` (`id_descripcion`, `descripcion`, `estado`) VALUES
(1, 'sala de computo, con 40 computadores, etc', 0),
(2, 'salon empresarial 1', 0),
(3, 'salon empresarial 2', 0),
(4, 'salon empresarial 3', 0),
(7, 'Salon mac', 0),
(8, 'Aula de Taller ADSI', 0),
(9, 'Transversal', 0);

-- --------------------------------------------------------

--
-- Table structure for table `duracion`
--

CREATE TABLE `duracion` (
  `id_duracion` int(11) NOT NULL,
  `meses_lectiva` int(11) NOT NULL,
  `meses_productiva` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `duracion`
--

INSERT INTO `duracion` (`id_duracion`, `meses_lectiva`, `meses_productiva`, `estado`) VALUES
(13, 6, 6, 0),
(14, 18, 6, 0),
(16, 6, 0, 0),
(17, 3, 3, 0),
(19, 0, 0, 0),
(22, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `eventos`
--

CREATE TABLE `eventos` (
  `id_evento` int(11) NOT NULL,
  `nombre_evento` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `inicio` datetime NOT NULL,
  `fin` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ficha`
--

CREATE TABLE `ficha` (
  `numero_ficha` int(11) NOT NULL,
  `ingreso` date NOT NULL,
  `salida` date NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ficha`
--

INSERT INTO `ficha` (`numero_ficha`, `ingreso`, `salida`, `estado`) VALUES
(1818975, '2020-03-03', '2020-04-16', 0),
(1828914, '2020-03-03', '2020-03-17', 0),
(1828917, '2020-03-09', '2020-03-17', 0),
(1828918, '2019-02-02', '2021-01-21', 0),
(2000649, '2020-03-01', '2020-03-31', 0);

-- --------------------------------------------------------

--
-- Table structure for table `instructor_ficha`
--

CREATE TABLE `instructor_ficha` (
  `fichanumero_ficha` int(11) NOT NULL,
  `persona_documento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nivel_formacion`
--

CREATE TABLE `nivel_formacion` (
  `id_nivel` int(11) NOT NULL,
  `denominacion_nivel` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nivel_formacion`
--

INSERT INTO `nivel_formacion` (`id_nivel`, `denominacion_nivel`, `estado`) VALUES
(1, 'tecnologo', 0),
(2, 'tecnico', 0),
(5, 'Especializacion', 0),
(7, 'Auxiliar', 0),
(8, 'Curso corto', 0);

-- --------------------------------------------------------

--
-- Table structure for table `persona`
--

CREATE TABLE `persona` (
  `documento` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `clave` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rol_documento` int(11) NOT NULL,
  `estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `persona`
--

INSERT INTO `persona` (`documento`, `nombre`, `apellido`, `email`, `clave`, `rol_documento`, `estado`) VALUES
(1, 'Administrador', 'hernandez', 'admin1828917@gmail.com', '6bcd04b48ad302a3db05d8c4ef1708d0', 1, NULL),
(1335, 'Juan', 'Valdez', 'juan@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `persona_titulo`
--

CREATE TABLE `persona_titulo` (
  `persona_documento` int(11) NOT NULL,
  `id_titulo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `programa`
--

CREATE TABLE `programa` (
  `id_programa` int(11) NOT NULL,
  `denominacion` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `id_duracion` int(11) NOT NULL,
  `id_formacion` int(11) NOT NULL,
  `id_tipo` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `programa`
--

INSERT INTO `programa` (`id_programa`, `denominacion`, `id_duracion`, `id_formacion`, `id_tipo`, `estado`) VALUES
(8, 'Analisis y desarrollo de sistemas de informac', 13, 1, 2, 0),
(9, 'Multimedia', 13, 2, 3, 0),
(11, 'Analisis y desarrollo de sistemas de informacion', 13, 1, 3, 0),
(13, 'Multimedia', 14, 1, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `programa_competencia`
--

CREATE TABLE `programa_competencia` (
  `id_programa` int(11) NOT NULL,
  `id_competencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `programa_ficha`
--

CREATE TABLE `programa_ficha` (
  `id_programa` int(11) NOT NULL,
  `fichanumero_ficha` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resultado`
--

CREATE TABLE `resultado` (
  `id_resultado` int(11) NOT NULL,
  `denominacion_resultado` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `id_competencia` int(11) DEFAULT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `resultado`
--

INSERT INTO `resultado` (`id_resultado`, `denominacion_resultado`, `id_competencia`, `estado`) VALUES
(4, 'comprende textos en ingles', 2, 0),
(5, 'complejidads', 2, 0),
(12, 'Analisis y desarrollo de sistemas de informacion', 2, 0),
(13, 'Hablar inglés', 5, 0),
(14, 'Es etico', 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `rol` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rol`
--

INSERT INTO `rol` (`id_rol`, `rol`) VALUES
(1, 'Administrador'),
(2, 'Coordinador'),
(3, 'Instructor');

-- --------------------------------------------------------

--
-- Table structure for table `sede`
--

CREATE TABLE `sede` (
  `id_sede` int(4) NOT NULL,
  `direccion` varchar(130) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(130) COLLATE utf8_unicode_ci NOT NULL,
  `centroid_centro` int(11) DEFAULT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sede`
--

INSERT INTO `sede` (`id_sede`, `direccion`, `nombre`, `centroid_centro`, `estado`) VALUES
(1, 'cll 69 sur', 'UniHorizontes', 23, 0),
(6, 'call 136 A sur', 'Paloquemao', 10, 0),
(7, 'cll 69 a 136', 'paloeste', 18, 0),
(10, 'cll 69', 'porqueno', 23, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tipo`
--

CREATE TABLE `tipo` (
  `id_tipo` int(11) NOT NULL,
  `tipo` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tipo`
--

INSERT INTO `tipo` (`id_tipo`, `tipo`, `estado`) VALUES
(2, 'presencial', 0),
(3, 'virtual', 0),
(11, 'semivirtual', 0),
(13, 'Complementaria', 0);

-- --------------------------------------------------------

--
-- Table structure for table `titulo`
--

CREATE TABLE `titulo` (
  `id_titulo` int(11) NOT NULL,
  `certificacion` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aula`
--
ALTER TABLE `aula`
  ADD PRIMARY KEY (`id_aula`),
  ADD KEY `fk_sede_aula` (`sedeid_sede`);

--
-- Indexes for table `bloque`
--
ALTER TABLE `bloque`
  ADD PRIMARY KEY (`dia`,`trimestre`,`rango_horas`,`aulaid_aula`,`anio`),
  ADD KEY `fk_persona_bloque` (`persona_documento`),
  ADD KEY `fk_ficha_bloque` (`fichanumero_ficha`),
  ADD KEY `fk_aula_bloque` (`aulaid_aula`);

--
-- Indexes for table `centro`
--
ALTER TABLE `centro`
  ADD PRIMARY KEY (`id_centro`),
  ADD UNIQUE KEY `nombre_centro` (`nombre_centro`);

--
-- Indexes for table `certificacion`
--
ALTER TABLE `certificacion`
  ADD PRIMARY KEY (`id_certificacion`),
  ADD UNIQUE KEY `denominacion` (`denominacion`);

--
-- Indexes for table `certificacion_persona`
--
ALTER TABLE `certificacion_persona`
  ADD PRIMARY KEY (`persona_documento`,`id_certificacion`),
  ADD KEY `fk_certificacion_certificacion_persona` (`id_certificacion`),
  ADD KEY `fk_persona_certificacion` (`persona_documento`);

--
-- Indexes for table `competencia`
--
ALTER TABLE `competencia`
  ADD PRIMARY KEY (`id_competencia`),
  ADD UNIQUE KEY `denominacion` (`denominacion`);

--
-- Indexes for table `descripcion_aula`
--
ALTER TABLE `descripcion_aula`
  ADD PRIMARY KEY (`id_descripcion`),
  ADD UNIQUE KEY `descripcion` (`descripcion`);

--
-- Indexes for table `duracion`
--
ALTER TABLE `duracion`
  ADD PRIMARY KEY (`id_duracion`),
  ADD UNIQUE KEY `meses_lectiva` (`meses_lectiva`,`meses_productiva`);

--
-- Indexes for table `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id_evento`);

--
-- Indexes for table `ficha`
--
ALTER TABLE `ficha`
  ADD PRIMARY KEY (`numero_ficha`);

--
-- Indexes for table `instructor_ficha`
--
ALTER TABLE `instructor_ficha`
  ADD PRIMARY KEY (`fichanumero_ficha`,`persona_documento`),
  ADD KEY `fk_ficha_instructorficha` (`fichanumero_ficha`),
  ADD KEY `fk_persona_instructorficha` (`persona_documento`);

--
-- Indexes for table `nivel_formacion`
--
ALTER TABLE `nivel_formacion`
  ADD PRIMARY KEY (`id_nivel`),
  ADD UNIQUE KEY `denominacion` (`denominacion_nivel`);

--
-- Indexes for table `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`documento`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `fk_rol_persona` (`rol_documento`);

--
-- Indexes for table `persona_titulo`
--
ALTER TABLE `persona_titulo`
  ADD PRIMARY KEY (`persona_documento`,`id_titulo`),
  ADD KEY `fk_titulo_persona_titulo` (`id_titulo`),
  ADD KEY `fk_persona_personatitulo` (`persona_documento`);

--
-- Indexes for table `programa`
--
ALTER TABLE `programa`
  ADD PRIMARY KEY (`id_programa`),
  ADD UNIQUE KEY `denominacion` (`denominacion`,`id_tipo`),
  ADD KEY `fk_duracion_programa` (`id_duracion`),
  ADD KEY `fk_nivel_formacion_programa` (`id_formacion`),
  ADD KEY `fk_tipo_programa` (`id_tipo`);

--
-- Indexes for table `programa_competencia`
--
ALTER TABLE `programa_competencia`
  ADD PRIMARY KEY (`id_programa`,`id_competencia`),
  ADD KEY `fk_programa_programa_competencia` (`id_programa`),
  ADD KEY `fk_competencia_programa_competencia` (`id_competencia`);

--
-- Indexes for table `programa_ficha`
--
ALTER TABLE `programa_ficha`
  ADD PRIMARY KEY (`id_programa`,`fichanumero_ficha`),
  ADD KEY `fk_programa_programaficha` (`id_programa`),
  ADD KEY `fk_ficha_programaficha` (`fichanumero_ficha`);

--
-- Indexes for table `resultado`
--
ALTER TABLE `resultado`
  ADD PRIMARY KEY (`id_resultado`),
  ADD UNIQUE KEY `denominacion` (`denominacion_resultado`),
  ADD KEY `fk_competencia_resultado` (`id_competencia`);

--
-- Indexes for table `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indexes for table `sede`
--
ALTER TABLE `sede`
  ADD PRIMARY KEY (`id_sede`),
  ADD UNIQUE KEY `nombre` (`nombre`),
  ADD KEY `fk_centro_sede` (`centroid_centro`);

--
-- Indexes for table `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id_tipo`),
  ADD UNIQUE KEY `tipo` (`tipo`);

--
-- Indexes for table `titulo`
--
ALTER TABLE `titulo`
  ADD PRIMARY KEY (`id_titulo`),
  ADD UNIQUE KEY `certificacion` (`certificacion`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `centro`
--
ALTER TABLE `centro`
  MODIFY `id_centro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `certificacion`
--
ALTER TABLE `certificacion`
  MODIFY `id_certificacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `competencia`
--
ALTER TABLE `competencia`
  MODIFY `id_competencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `descripcion_aula`
--
ALTER TABLE `descripcion_aula`
  MODIFY `id_descripcion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `duracion`
--
ALTER TABLE `duracion`
  MODIFY `id_duracion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nivel_formacion`
--
ALTER TABLE `nivel_formacion`
  MODIFY `id_nivel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `programa`
--
ALTER TABLE `programa`
  MODIFY `id_programa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `resultado`
--
ALTER TABLE `resultado`
  MODIFY `id_resultado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sede`
--
ALTER TABLE `sede`
  MODIFY `id_sede` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tipo`
--
ALTER TABLE `tipo`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `titulo`
--
ALTER TABLE `titulo`
  MODIFY `id_titulo` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aula`
--
ALTER TABLE `aula`
  ADD CONSTRAINT `fk_sede_aula` FOREIGN KEY (`sedeid_sede`) REFERENCES `sede` (`id_sede`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `bloque`
--
ALTER TABLE `bloque`
  ADD CONSTRAINT `fk_aula_bloque` FOREIGN KEY (`aulaid_aula`) REFERENCES `aula` (`id_aula`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_ficha_bloque` FOREIGN KEY (`fichanumero_ficha`) REFERENCES `ficha` (`numero_ficha`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_persona_bloque` FOREIGN KEY (`persona_documento`) REFERENCES `persona` (`documento`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `certificacion_persona`
--
ALTER TABLE `certificacion_persona`
  ADD CONSTRAINT `fk_certificacion_certificacion_persona` FOREIGN KEY (`id_certificacion`) REFERENCES `certificacion` (`id_certificacion`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_persona_certificacion` FOREIGN KEY (`persona_documento`) REFERENCES `persona` (`documento`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `instructor_ficha`
--
ALTER TABLE `instructor_ficha`
  ADD CONSTRAINT `fk_ficha_instructorficha` FOREIGN KEY (`fichanumero_ficha`) REFERENCES `ficha` (`numero_ficha`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_persona_instructorficha` FOREIGN KEY (`persona_documento`) REFERENCES `persona` (`documento`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `fk_rol_persona` FOREIGN KEY (`rol_documento`) REFERENCES `rol` (`id_rol`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `persona_titulo`
--
ALTER TABLE `persona_titulo`
  ADD CONSTRAINT `fk_persona_personatitulo` FOREIGN KEY (`persona_documento`) REFERENCES `persona` (`documento`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_titulo_persona_titulo` FOREIGN KEY (`id_titulo`) REFERENCES `titulo` (`id_titulo`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `programa`
--
ALTER TABLE `programa`
  ADD CONSTRAINT `fk_duracion_programa` FOREIGN KEY (`id_duracion`) REFERENCES `duracion` (`id_duracion`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_nivel_formacion_programa` FOREIGN KEY (`id_formacion`) REFERENCES `nivel_formacion` (`id_nivel`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_tipo_programa` FOREIGN KEY (`id_tipo`) REFERENCES `tipo` (`id_tipo`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `programa_competencia`
--
ALTER TABLE `programa_competencia`
  ADD CONSTRAINT `fk_programa_programa_competencia` FOREIGN KEY (`id_programa`) REFERENCES `programa` (`id_programa`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `programa_ficha`
--
ALTER TABLE `programa_ficha`
  ADD CONSTRAINT `fk_ficha_programaficha` FOREIGN KEY (`fichanumero_ficha`) REFERENCES `ficha` (`numero_ficha`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_programa_programaficha` FOREIGN KEY (`id_programa`) REFERENCES `programa` (`id_programa`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `resultado`
--
ALTER TABLE `resultado`
  ADD CONSTRAINT `fk_competencia_resultado` FOREIGN KEY (`id_competencia`) REFERENCES `competencia` (`id_competencia`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `sede`
--
ALTER TABLE `sede`
  ADD CONSTRAINT `fk_centro_sede` FOREIGN KEY (`centroid_centro`) REFERENCES `centro` (`id_centro`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
