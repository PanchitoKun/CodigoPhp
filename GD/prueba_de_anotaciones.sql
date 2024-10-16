-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-11-2023 a las 05:18:27
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba_anotaciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--


CREATE TABLE `alumnos` (
  `RUT` varchar(13) NOT NULL,
  `NOMBRE` varchar(50) DEFAULT NULL,
  `APELLIDO` varchar(50) DEFAULT NULL,
  `FNAC` date DEFAULT NULL,
  `CURSO` varchar(11) DEFAULT NULL,
  `DIRECCION` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`RUT`, `NOMBRE`, `APELLIDO`, `FNAC`, `CURSO`, `DIRECCION`) VALUES
('21.146.742-7', 'Andres', 'Bello', '2003-03-12', '78342893', 'Machalí'),
('21.153.468-6', 'Antonio', 'Estrella', '2003-05-29', '73211534', 'Rengo'),
('21.162.824-9', 'Nataly', 'Quintana', '2005-12-21', '23154312', 'Vitacura'),
('21.234.567-8', 'Luis', 'Gomez', '2003-07-13', '12345678', 'Rengo'),
('21.241.782-4', 'Thor', 'Finn', '2004-08-12', '88224646', 'Rengo'),
('21.256.788-2', 'Luis', 'Miguel', '2000-12-31', '45682479', 'Machalí'),
('21.345.837-k', 'Bruce', 'Banner', '2004-03-28', '76542138', 'Machalí'),
('21.353.635-2', 'Miguel', 'Tristán', '2003-04-12', '73211534', 'Machalí'),
('21.395.274-k', 'Thor', 'Martinez', '2003-03-28', '47612486', 'San Fernando'),
('21.421.653-5', 'Armando', 'Paredes', '2003-09-18', '57891527', 'Graneros'),
('21.456.235-4', 'Martin', 'Moreno', '2004-07-20', '36622499', 'Rengo'),
('21.567.456-7', 'Dante', 'Sparda', '2005-02-17', '36622499', 'San Martín'),
('21.624.764-8', 'Vicente', 'Farias', '2004-07-24', '78342893', 'Machalí'),
('21.653.624-k', 'Andres', 'Lizana', '2004-12-07', '14311245', 'San Martín'),
('21.734.624-k', 'Sofía', 'Maure', '2004-07-21', '75615623', 'Rengo'),
('21.735.764-6', 'Nathan', 'Rosenfeld', '2000-08-28', '73211534', 'San Martín'),
('21.765.234-5', 'Alexis', 'Sanchez', '2004-01-01', '47612486', 'San Martín'),
('21.765.876-5', 'Arturo', 'Coronado', '2004-12-30', '45682479', 'Rengo'),
('21.823.432-4', 'Wanda', 'Maximoff', '2003-10-23', '78342893', 'Machalí'),
('21.987.653-2', 'Leonardo', 'Kennedy', '2004-04-24', '98745612', 'Graneros'),
('23.458.234-8', 'Jhon', 'Wick', '2003-12-28', '14311245', 'Machalí');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anotaciones`
--

CREATE TABLE `anotaciones` (
  `N°ANOTACIONES` int(11) NOT NULL,
  `DESCRIPCION` varchar(500) DEFAULT NULL,
  `ALUMNO` varchar(13) DEFAULT NULL,
  `FECHA` date DEFAULT NULL,
  `HORA` time DEFAULT NULL,
  `TIPO_ANOTACION` varchar(50) DEFAULT NULL,
  `FUNCIONARIO` varchar(50) DEFAULT NULL,
  `ASIGNATURA` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `anotaciones`
--

INSERT INTO `anotaciones` (`N°ANOTACIONES`, `DESCRIPCION`, `ALUMNO`, `FECHA`, `HORA`, `TIPO_ANOTACION`, `FUNCIONARIO`, `ASIGNATURA`) VALUES
(6, 'JAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJAJA', '21.146.742-7', '4324-04-05', '12:23:00', '4', '10.147.964-k', 'Ingles');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apoderados`
--

CREATE TABLE `apoderados` (
  `RUT` varchar(13) NOT NULL,
  `NOMBRE` varchar(50) DEFAULT NULL,
  `APELLIDO` varchar(50) DEFAULT NULL,
  `FNAC` date DEFAULT NULL,
  `DIRECCION` varchar(70) DEFAULT NULL,
  `FONO` int(11) DEFAULT NULL,
  `RUTALUM` varchar(13) DEFAULT NULL,
  `PARENTESCO` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `apoderados`
--

INSERT INTO `apoderados` (`RUT`, `NOMBRE`, `APELLIDO`, `FNAC`, `DIRECCION`, `FONO`, `RUTALUM`, `PARENTESCO`) VALUES
('10.987.654-3', 'Javier', 'Rojas', '1992-05-20', 'Calle Principal 123, Punta Arenas, Región de Magallanes y de la Antárt', 123456789, '21.162.824-9', 'Hermano'),
('11.098.765-4', 'Sandra', 'Molina', '1996-08-15', 'Calle Principal 789, Iquique, Región de Tarapacá', 987654321, '21.153.468-6', 'Madre'),
('12.109.876-5', 'Isabel', 'Gómez', '1994-11-28', 'Calle Principal 123, Temuco, Región de La Araucanía', 123456789, '21.624.764-8', 'Prima'),
('13.210.987-6', 'Roberto', 'Silva', '1986-09-02', 'Calle Principal 789, Arica, Región de Arica y Parinacota', 987654321, '21.395.274-k', 'Padre'),
('15.432.109-8', 'Carlos', 'Vargas', '1993-06-12', 'Calle Principal 789, Puerto Montt, Región de Los Lagos', 987654321, '21.765.234-5', 'Padre'),
('16.543.210-9', 'Laura', 'Mendoza', '1987-11-18', 'Calle Principal 123, La Serena, Región de Coquimbo', 123456789, '21.421.653-5', 'Madre'),
('19.888.777-6', 'Ana', 'López', '1988-07-15', 'Avenida Principal 123, Viña del Mar, Región de Valparaíso', 987654321, '21.734.624-k', 'Madre'),
('20.111.222-3', 'Luis', 'Rodríguez', '1992-12-05', 'Calle Principal 789, Santiago, Región Metropolitana', 78342893, '21.146.742-7', 'Padre'),
('8.765.432-1', 'Pedro', 'González', '1995-07-10', 'Calle Principal 123, Copiapó, Región de Atacama', 123456789, '21.234.567-8', 'padre'),
('9.876.543-2', 'María', 'López', '1988-12-03', 'Calle Principal 789, Rancagua, Región de O\'Higgins', 987654321, '21.345.837-k', 'Madre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE `cargos` (
  `ID` varchar(50) NOT NULL,
  `TIPO_CARGO` varchar(50) DEFAULT NULL,
  `DESCRIPCION` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cargos`
--

INSERT INTO `cargos` (`ID`, `TIPO_CARGO`, `DESCRIPCION`) VALUES
('1', 'INSPECTOR', 'APOYAR LA LABOR DOCENTE'),
('2', 'PROFESOR', 'ENSEÑAR A ESTUDIANTES'),
('3', 'PROFESORA', 'ENSEÑAR A ESTUDIANTES'),
('4', 'AUXILIAR', 'ASEO EN TODO EL ESTABLECIMIENTO'),
('5', 'SECRETARIA', 'AGENDAR HORAS'),
('6', 'INSPECTOR', 'APOYAR LA LABOR DOCENTE'),
('7', 'DIRECTOR', 'MAXIMA AUTORIDAD DEL ESTABLECIMIENTO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `NUMCURSO` varchar(11) NOT NULL,
  `NUMALUM` int(11) DEFAULT NULL,
  `PROFESOR` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`NUMCURSO`, `NUMALUM`, `PROFESOR`) VALUES
('57891527', 34, '14.258.369-8'),
('75615623', 28, '10.807.456-3'),
('78342893', 30, '10.807.456-3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funcionario`
--

CREATE TABLE `funcionario` (
  `RUT` varchar(13) NOT NULL,
  `NOMBRE` varchar(50) DEFAULT NULL,
  `APELLIDO` varchar(50) DEFAULT NULL,
  `FNAC` date DEFAULT NULL,
  `FONO` int(11) DEFAULT NULL,
  `TIPO_CARGO` varchar(50) NOT NULL,
  `CORREO_ELEC` varchar(50) DEFAULT NULL,
  `contraseña` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `funcionario`
--

INSERT INTO `funcionario` (`RUT`, `NOMBRE`, `APELLIDO`, `FNAC`, `FONO`, `TIPO_CARGO`, `CORREO_ELEC`, `contraseña`) VALUES
('10.147.964-k', 'Marcelo', 'Alcazar', '1991-10-09', 99999, '1', 'marcelo.alcazar@correofuncionario.com', '313554'),
('10.807.456-3', 'Carlos', 'Moreira', '1987-04-18', 22222, '2', 'carlos.moreira@correofuncionario.com', '874126'),
('13.420.048-6', 'Maria', 'Becerra', '1986-02-27', 11111, '6', 'maria.becerra@correofuncionario.com', '123654 '),
('14.258.369-8', 'Gabriela', 'Hernandez', '1998-06-30', 88888, '3', 'gabriela.hernandez@correofuncionario.com', '526658'),
('14.629.732-k', 'Martin', 'Camirohaga', '1923-05-09', 33333, '2', 'martin.camirohaga@correofuncionario.com', '749312'),
('15.928.271-5', 'Lyla', 'Farias', '1990-03-25', 44444, '4', 'lyla.farias@correofuncionario.com', '479426'),
('17.921.721-0', 'Marcela', 'Valencia', '1963-04-22', 55555, '7', 'marcela.valencia@correofuncionario.com', '821671'),
('18.491.348-4', 'Maiye', 'Ramirez', '1988-01-28', 10101, '5', 'maiye.ramirez@correofuncionario.com', '354576'),
('19.273.481-k', 'Mateo', 'Contreras', '1995-07-25', 66666, '2', 'mateo.contreras@correofuncionario.com', '547962'),
('20.362.193-5', 'Fabian', 'Carrera', '1987-06-14', 77777, '1', 'fabian.carrera@correofuncionario.com', '287563');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_anotacion`
--

CREATE TABLE `tipo_anotacion` (
  `ID` varchar(50) NOT NULL,
  `TIPO_FALTA` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipo_anotacion`
--

INSERT INTO `tipo_anotacion` (`ID`, `TIPO_FALTA`) VALUES
('0', 'NINGUNA'),
('1', 'POSITIVA'),
('2', 'NEGATIVA'),
('3', 'OBSERVACIÓN'),
('4', 'CITA/ENTREVISTA AL APODERADO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`RUT`),
  ADD KEY `CURSO` (`CURSO`);

--
-- Indices de la tabla `anotaciones`
--
ALTER TABLE `anotaciones`
  ADD PRIMARY KEY (`N°ANOTACIONES`),
  ADD KEY `ALUMNO` (`ALUMNO`),
  ADD KEY `TIPO_ANOTACION` (`TIPO_ANOTACION`),
  ADD KEY `FUNCIONARIO` (`FUNCIONARIO`);

--
-- Indices de la tabla `apoderados`
--
ALTER TABLE `apoderados`
  ADD PRIMARY KEY (`RUT`),
  ADD KEY `RUTALUM` (`RUTALUM`);

--
-- Indices de la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`NUMCURSO`),
  ADD KEY `PROFESOR` (`PROFESOR`);

--
-- Indices de la tabla `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`RUT`),
  ADD KEY `TIPO_CARGO` (`TIPO_CARGO`),
  ADD KEY `CORREO_ELEC` (`CORREO_ELEC`);

--
-- Indices de la tabla `tipo_anotacion`
--
ALTER TABLE `tipo_anotacion`
  ADD PRIMARY KEY (`ID`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `anotaciones`
--
ALTER TABLE `anotaciones`
  ADD CONSTRAINT `anotaciones_ibfk_1` FOREIGN KEY (`ALUMNO`) REFERENCES `alumnos` (`RUT`),
  ADD CONSTRAINT `anotaciones_ibfk_2` FOREIGN KEY (`TIPO_ANOTACION`) REFERENCES `tipo_anotacion` (`ID`),
  ADD CONSTRAINT `anotaciones_ibfk_3` FOREIGN KEY (`FUNCIONARIO`) REFERENCES `funcionario` (`RUT`);

--
-- Filtros para la tabla `apoderados`
--
ALTER TABLE `apoderados`
  ADD CONSTRAINT `apoderados_ibfk_1` FOREIGN KEY (`RUTALUM`) REFERENCES `alumnos` (`RUT`);

--
-- Filtros para la tabla `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `curso_ibfk_1` FOREIGN KEY (`PROFESOR`) REFERENCES `funcionario` (`RUT`);

--
-- Filtros para la tabla `funcionario`
--
ALTER TABLE `funcionario`
  ADD CONSTRAINT `funcionario_ibfk_1` FOREIGN KEY (`TIPO_CARGO`) REFERENCES `cargos` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
