-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2022 at 09:25 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cybernet`
--

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `Acercade` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`, `Acercade`) VALUES
(35, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `diapositivas`
--

CREATE TABLE `diapositivas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `imagen` varchar(1000) NOT NULL,
  `documento` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diapositivas`
--

INSERT INTO `diapositivas` (`id`, `nombre`, `imagen`, `documento`) VALUES
(12, 'hola2', '1637766160_2.jpg', '1637766160_LEYES DE KIRCHHOFF Isaura Santana Diaz 19-EISM-1-009.pptx');

-- --------------------------------------------------------

--
-- Table structure for table `empleados`
--

CREATE TABLE `empleados` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `contra` varchar(200) NOT NULL,
  `imagen` varchar(1000) NOT NULL,
  `edad` int(100) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `pais` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `linkeddin` varchar(255) NOT NULL,
  `compania` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `permiso` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `Acercade` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `empleados`
--

INSERT INTO `empleados` (`id`, `nombre`, `user`, `contra`, `imagen`, `edad`, `cargo`, `pais`, `direccion`, `correo`, `twitter`, `facebook`, `instagram`, `linkeddin`, `compania`, `telefono`, `permiso`, `estado`, `Acercade`) VALUES
(14, 'kelvin Antigua Arias', 'kelvin117', '12345', 'cybernet.png\r\n', 20, 'Supervisor', 'republica dominicana', 'no se', 'kelvinantigua214@gmail.com', 'no tengo', 'no tengo', 'no tengo', 'no tengo', 'Cybernet', '809 317 4807', 'Administrador', 'Inactivo', 'hola'),
(21, 'angel', 'angelcec', '789456123', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(22, 'Admin', 'Admin', 'Admin', '', 0, 'Supervisor', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `libros`
--

CREATE TABLE `libros` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `imagen` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `libros`
--

INSERT INTO `libros` (`id`, `nombre`, `imagen`) VALUES
(2, 'txt3', '1636309047_Codigo de acceso base de datos.png'),
(3, 'txt', '1636307377_Codigo de acceso base de datos.png'),
(4, 'txt', '1636310387_Codigo de acceso base de datos.png'),
(5, 'duvej', '1636310262_Codigo de acceso base de datos.png'),
(6, 'txt3', '1636311111_Codigo de acceso base de datos.png');

-- --------------------------------------------------------

--
-- Table structure for table `materias`
--

CREATE TABLE `materias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `imagen` varchar(1000) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `profesor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `materias`
--

INSERT INTO `materias` (`id`, `nombre`, `imagen`, `descripcion`, `profesor`) VALUES
(1, 'prueba', '1637767032_2.jpg', 'hola como estan', 'Seleccione un profesor');

-- --------------------------------------------------------

--
-- Table structure for table `peliculas`
--

CREATE TABLE `peliculas` (
  `ID` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `genero` varchar(255) NOT NULL,
  `duracion` varchar(255) NOT NULL,
  `enlace` varchar(255) NOT NULL,
  `imagen` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `presentaciones`
--

CREATE TABLE `presentaciones` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `imagen` varchar(1000) NOT NULL,
  `portada` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `presentaciones`
--

INSERT INTO `presentaciones` (`id`, `nombre`, `imagen`, `portada`) VALUES
(8, 'hola', '1637766326_2.jpg', '1637766326_http1.docx');

-- --------------------------------------------------------

--
-- Table structure for table `profesores`
--

CREATE TABLE `profesores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `imagen` varchar(1000) NOT NULL,
  `correo electronico` varchar(255) NOT NULL,
  `numero de teléfono` int(15) NOT NULL,
  `Descripcion` varchar(1000) NOT NULL,
  `tanda` varchar(255) NOT NULL,
  `calificacion` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diapositivas`
--
ALTER TABLE `diapositivas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `presentaciones`
--
ALTER TABLE `presentaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `diapositivas`
--
ALTER TABLE `diapositivas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `libros`
--
ALTER TABLE `libros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `materias`
--
ALTER TABLE `materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `presentaciones`
--
ALTER TABLE `presentaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `profesores`
--
ALTER TABLE `profesores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
