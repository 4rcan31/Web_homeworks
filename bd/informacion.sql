-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-10-2021 a las 09:35:56
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `informacio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `fecha_reg` varchar(20) NOT NULL,
  `nombres` varchar(20) DEFAULT NULL,
  `apellidos` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `nombre`, `email`, `fecha_reg`, `nombres`, `apellidos`) VALUES
(13, '', 'rodrigo.francoescobar123@gmail.com', '31/10/21', 'Daniel ', 'Franco Escobar'),
(14, '', 'rodrigo.franco@citala.edu.sv', '31/10/21', 'Rodrigo', 'Franco Escobar'),
(15, '', 'Carlos.aguilar@gmail.com', '31/10/21', 'Carlos', 'Aguilar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p4_tareas`
--

CREATE TABLE `p4_tareas` (
  `id_tareas` int(4) NOT NULL,
  `years` int(4) NOT NULL,
  `periodos` varchar(4) NOT NULL,
  `materia` varchar(40) NOT NULL,
  `semana` varchar(500) NOT NULL,
  `tarea_c` mediumtext NOT NULL,
  `tarea_no_c` mediumtext NOT NULL,
  `fecha_inicio` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `p4_tareas`
--

INSERT INTO `p4_tareas` (`id_tareas`, `years`, `periodos`, `materia`, `semana`, `tarea_c`, `tarea_no_c`, `fecha_inicio`) VALUES
(1, 2021, 'P4', 'Matemáticas', 'Semana1 04-10 oct.', '', '', '04/10/21'),
(2, 2021, 'P4', 'Matemáticas', 'Semana1 04-10 oct.', '', '', '04/10/21'),
(3, 2021, 'P4', 'Formación Lingüistica', 'Semana1 04-10 oct.', '', '', '04/10/21'),
(4, 2021, 'P4', 'Valores', 'Semana1 04-10 oct.', '[value-5]', '[value-6]', '04/10/21'),
(5, 2021, 'P4', 'orientación vocacional (OVI)', 'Semana1 04-10 oct.', '[value-5]', '[value-6]', '04/10/21'),
(6, 2021, 'P4', 'Computación ', 'Semana1 04-10 oct.', '[value-5]', '[value-6]', '04/10/21'),
(7, 2021, 'P4', 'Inglés ', 'Semana1 04-10 oct.', '[value-5]', '[value-6]', '04/10/21'),
(8, 2021, 'P4', 'Matemáticas', 'Semana2 11-17 oct', '[value-5]', '[value-6]', '11/10/21'),
(9, 2021, 'P4', 'Formación Lingüistica', 'Semana2 11-17 oct', '[value-5]', '[value-6]', '11/10/21'),
(10, 2021, 'P4', 'Valores', 'Semana2 11-17 oct', '[value-5]', '[value-6]', '11/10/21'),
(11, 2021, 'P4', 'orientación vocacional (OVI)', 'Semana2 11-17 oct', '[value-5]', '[value-6]', '11/10/21'),
(12, 2021, 'P4', 'Computación ', 'Semana2 11-17 oct', '[value-5]', '[value-6]', '11/10/21'),
(13, 2021, 'P4', 'Inglés ', 'Semana2 11-17 oct', '[value-5]', '[value-6]', '11/10/21'),
(14, 2021, 'P4', 'Matemáticas', 'Semana3 18-24 oct', '[value-5]', '[value-6]', '18/10/21'),
(15, 2021, 'P4', 'Formación Lingüistica', 'Semana3 18-24 oct', '[value-5]', '[value-6]', '18/10/21'),
(16, 2021, 'P4', 'Valores', 'Semana3 18-24 oct', '[value-5]', '[value-6]', '18/10/21'),
(17, 2021, 'P4', 'orientación vocacional (OVI)', 'Semana3 18-24 oct', '[value-5]', '[value-6]', '18/10/21'),
(18, 2021, 'P4', 'Computación ', 'Semana3 18-24 oct', '[value-5]', '[value-6]', '18/10/21'),
(19, 2021, 'P4', 'Inglés ', 'Semana3 18-24 oct', '[value-5]', '[value-6]', '18/10/21'),
(20, 2021, 'P4', 'Matemáticas', 'Semana4 25-31 oct\r\n', 'No hay tareas califificadas para esta semana:)', 'Laboratorio de mitad de periodo', '25/10/21'),
(21, 2021, 'P4', 'Formación Lingüistica', 'Semana4 25-31 oct\r\n', 'No hay tareas califificadas para esta semana:)', 'Tareas calificadas: ', '25/10/21'),
(22, 2021, 'P4', 'Valores', 'Semana4 25-31 oct\r\n', 'No hay tareas califificadas para esta semana:)', 'Tareas calificadas: ', '25/10/21'),
(23, 2021, 'P4', 'orientación vocacional (OVI)', 'Semana4 25-31 oct\r\n', 'Tienes tarea para la semana 4 de OVI, tienes que hacer la Primera prueba corta que vale 30%, se vence el 31 de octubre del 2021, hazla antes que se venza D:', 'En la misma semana tienes los documentos para tu tarea final :)', '25/10/21'),
(24, 2021, 'P4', 'Computación ', 'Semana4 25-31 oct\r\n', 'No hay tareas calificadas para esta semana :)', 'Tienes unos ejercicios de comprensión de C++ (no calificada)', '25/10/21'),
(25, 2021, 'P4', 'Inglés ', 'Semana4 25-31 oct\r\n', 'No tienes tareas evaluadas para esta semana :)', 'Tienes GRAMMAR TEST - PRACTICE para esta semana', '25/10/21'),
(26, 2021, 'P4', 'Matemáticas', 'Semana5 01-07 nov\r\n', 'Tienes una actividad evaluada D:, tiene una ponderación del 30%, tienes que hacer un laboratorio, y el miércoles tienes que entregar la evidencia de tus ejercicios  ;)', '[value-6]', '01/11/21'),
(27, 2021, 'P4', 'Formación Lingüistica', 'Semana5 01-07 nov', 'Tines la tarea de entrega de ensayo completo, tiene una ponderación de 25% (Tambien ya tienes que tener el equipo para el debate) ', '[value-6]', '01/11/21'),
(28, 2021, 'P4', 'Valores', 'Semana5 01-07 nov.', 'Entrega de planificación del mini proyecto, tiene una ponderacion de 35%', '[value-6]', '01/11/21'),
(29, 2021, 'P4', 'orientación vocacional (OVI)', 'Semana5 01-07 nov', 'No hay tareas para esta semana :)', 'Tareas no calificadas: ', '01/11/21'),
(30, 2021, 'P4', 'Computación ', 'Semana5 01-07 nov', 'Practica evaluada del con 30% de ponderación ', 'Tareas no calificadas: ', '01/11/21'),
(31, 2021, 'P4', 'Inglés', 'Semana5 01-07 nov', 'Grammar Test con 35% de ponderación', 'Tareas no calificadas: ', '01/11/21'),
(32, 2021, 'P4', 'Matemáticas', 'Semana6 8 nov al 14nov ', 'No hay tareas calificadas para esta semana :)', 'Tareas no calificadas: ', '08/11/21'),
(33, 2021, 'P4', 'Formación Lingüistica', 'Semana6 8 nov al 14nov ', 'Tienes el examen estandarizado que tiene una ponderación de 25%', 'Tareas no calificadas: ', '08/11/21'),
(34, 2021, 'P4', 'Valores', 'Semana6 8 nov al 14nov ', 'No tienes tareas calificadas :)', 'Tareas no calificadas: ', '08/11/21'),
(35, 2021, 'P4', 'orientación vocacional (OVI)', 'Semana6 8 nov al 14nov ', 'Entrega de actividad evaluada Soñando sobre mi trabajo, que tiene una ponderación del 50% HAZLA, es media nota de toda la materia ', 'Tareas no calificadas: ', '08/11/21'),
(36, 2021, 'P4', 'Computación ', 'Semana6 8 nov al 14nov ', 'No tienes tareas calificadas :)', 'Tareas no calificadas: ', '08/11/21'),
(37, 2021, 'P4', 'inglés', 'Semana6 8 nov al 14nov ', 'No tienes tareas calificadas :)', 'Tareas no calificadas: ', '08/11/21'),
(38, 2021, 'P4', 'Matemáticas ', 'Semana7 15 nov al 21 nov', 'No tienes tareas calificadas :)', 'Tareas no calificadas: ', '15/11/21'),
(39, 2021, 'P4', 'Formación Lingüistica', 'Semana7 15 nov al 21 nov', 'Y se llego la hora del debate, posiblemente se hará el dia miércoles ', 'Tareas no calificadas: ', '15/11/21'),
(40, 2021, 'P4', 'Valores', 'Semana7 15 nov al 21 nov', 'No tienes tarea para entregar esta semana :)', 'Tareas no calificadas: ', '15/11/21'),
(41, 2021, 'P4', 'orientación vocacional (OVI)', 'Semana7 15 nov al 21 nov', 'No tienes tarea para entregar esta semana :)', 'Tareas no calificadas: ', '15/11/21'),
(42, 2021, 'P4', 'computación', 'Semana7 15 nov al 21 nov', 'No tienes tarea para entregar esta semana :)', 'Tareas no calificadas: ', '15/11/21'),
(43, 2021, 'P4', 'Inglés', 'Semana7 15 nov al 21 nov', 'Standardized Test (La ponderacion no aparece)', 'Tareas no calificadas: ', '15/11/21'),
(44, 2021, 'P4', 'Matemáticas ', 'Semana8 22 nov al 28 nov', 'Examen de periodo, tiene una ponderación de 30%', 'Tareas no calificadas: ', '22/11/21'),
(45, 2021, 'P4', 'Formación Lingüistica ', 'Semana8 22 nov al 28 nov', 'Debate', 'Tareas no calificadas: ', '22/11/21'),
(46, 2021, 'P4', 'Valores', 'Semana8 22 nov al 28 nov', 'Se llego el dia, feria de mini proyecto y plan financiero tiene una ponderacion de 35%', 'Tareas no calificadas: ', '22/11/21'),
(47, 2021, 'P4', 'orientación vocacional (OVI)', 'Semana8 22 nov al 28 nov', 'Segunda prueba corta, tiene una ponderación de 20%', 'Tareas no calificadas: ', '22/11/21'),
(48, 2021, 'P4', 'Computación', 'Semana8 22 nov al 28 nov', 'Entrega de proyecto Sistema de planillas, tiene una ponderación del 30%', 'Tareas no calificadas: ', '22/11/21'),
(49, 2021, 'P4', 'Inglés ', 'Semana8 22 nov al 28 nov', 'Cultural Fair que tiene una ponderación de 35%', 'Tareas no calificadas: ', '22/11/21');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `p4_tareas`
--
ALTER TABLE `p4_tareas`
  ADD PRIMARY KEY (`id_tareas`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `p4_tareas`
--
ALTER TABLE `p4_tareas`
  MODIFY `id_tareas` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
