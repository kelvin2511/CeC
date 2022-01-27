-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2022 at 12:56 AM
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
-- Database: `cec-online`
--

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
-- Table structure for table `listado`
--

CREATE TABLE `listado` (
  `ID` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `referecia` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `listado`
--

INSERT INTO `listado` (`ID`, `nombre`, `fecha`, `referecia`) VALUES
(1, 'dfs', '2022-01-12', 'sdf'),
(2, 'sad', '2022-01-12', 'adsas'),
(3, 'fdhg', '2022-01-15', 'fdgdfsgh'),
(4, 'fds', '2022-01-14', 'sdaf'),
(5, 'dfg', '2022-01-06', 'dfs');

-- --------------------------------------------------------

--
-- Table structure for table `reporte`
--

CREATE TABLE `reporte` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `correo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listado`
--
ALTER TABLE `listado`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `reporte`
--
ALTER TABLE `reporte`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `listado`
--
ALTER TABLE `listado`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reporte`
--
ALTER TABLE `reporte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
