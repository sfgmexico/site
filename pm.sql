-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 02-03-2017 a las 23:21:58
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `controlcreditos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pm`
--

CREATE TABLE `pm` (
  `Id` int(10) NOT NULL,
  `Folio_Cliente` varchar(20) NOT NULL,
  `NomSolicitante` varchar(30) NOT NULL,
  `RFCSolicitante` varchar(30) NOT NULL,
  `TelSolicitante` varchar(20) NOT NULL,
  `DirSolicitante` varchar(20) NOT NULL,
  `ColSolicitante` varchar(20) NOT NULL,
  `CdSolicitante` varchar(20) NOT NULL,
  `EdoSolicitante` varchar(20) NOT NULL,
  `CPSolicitante` int(10) NOT NULL,
  `EmailSolicitante` varchar(20) NOT NULL,
  `FaxSolicitante` varchar(20) NOT NULL,
  `NomDatContEmp` varchar(30) NOT NULL,
  `TelDatConEmp` varchar(20) NOT NULL,
  `EmailDatConEmp` varchar(20) NOT NULL,
  `RFCDatConEmp` varchar(20) NOT NULL,
  `FaxDatConEmp` varchar(20) NOT NULL,
  `PuestDatConEmp` varchar(20) NOT NULL,
  `ActPrinDatGenPM` varchar(20) NOT NULL,
  `IniOpDatGenPM` varchar(20) NOT NULL,
  `CantPerDatGenPM` int(10) NOT NULL,
  `AntConsEmp` varchar(20) NOT NULL,
  `ApoConsEmp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pm`
--

INSERT INTO `pm` (`Id`, `Folio_Cliente`, `NomSolicitante`, `RFCSolicitante`, `TelSolicitante`, `DirSolicitante`, `ColSolicitante`, `CdSolicitante`, `EdoSolicitante`, `CPSolicitante`, `EmailSolicitante`, `FaxSolicitante`, `NomDatContEmp`, `TelDatConEmp`, `EmailDatConEmp`, `RFCDatConEmp`, `FaxDatConEmp`, `PuestDatConEmp`, `ActPrinDatGenPM`, `IniOpDatGenPM`, `CantPerDatGenPM`, `AntConsEmp`, `ApoConsEmp`) VALUES
(4, 'PM-001', 'kevin mazatan', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', 0, '', '');

--
-- Disparadores `pm`
--
DELIMITER $$
CREATE TRIGGER `pm_id` BEFORE INSERT ON `pm` FOR EACH ROW BEGIN
    if (SELECT COUNT(*) FROM pm)=0   THEN
        SET NEW.Folio_Cliente= 'PM-001';
    else
        SET NEW.Folio_Cliente= CONCAT('PM-', LPAD((select MAX(Id)+1 from pm), 3, '0'));
  END IF;
END
$$
DELIMITER ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pm`
--
ALTER TABLE `pm`
  ADD PRIMARY KEY (`Id`,`Folio_Cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pm`
--
ALTER TABLE `pm`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
