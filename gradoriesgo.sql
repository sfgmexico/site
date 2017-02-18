/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : controlcreditos

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-02-18 10:10:56
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `gradoriesgo`
-- ----------------------------
DROP TABLE IF EXISTS `gradoriesgo`;
CREATE TABLE `gradoriesgo` (
  `Folio_sol` varchar(20) NOT NULL,
  `Folio_Cliente` varchar(20) NOT NULL,
  `Antiguedad_ObjetoSocial` varchar(20) NOT NULL,
  `Antiguedad_Cliente` varchar(20) NOT NULL,
  `Naturaleza_Operaciones` varchar(20) NOT NULL,
  `Numero_Beneficiarios` varchar(20) NOT NULL,
  `Numero_TercerosRelacionados` varchar(20) NOT NULL,
  `PEPs_Relacionados` varchar(20) NOT NULL,
  `Alerta_Reputacional` varchar(20) NOT NULL,
  `Volumen_Esperado` varchar(20) NOT NULL,
  `Frecuencia_Esperada` varchar(20) NOT NULL,
  `Instrumento_Monetario` varchar(20) NOT NULL,
  `Canales_MediosUtilizados` varchar(20) NOT NULL,
  `Pais_EstadoOficial` varchar(20) NOT NULL,
  `Pais_EstadoResidencia` varchar(50) NOT NULL,
  `Pais_EstadoOperacion` varchar(50) NOT NULL,
  `Origen_Recursos` varchar(20) NOT NULL,
  `Destino_Recursos` varchar(20) NOT NULL,
  `Pais_EstadoResidenciaTerceros` varchar(20) NOT NULL,
  `GradoRiesgo` varchar(20) NOT NULL,
  `INESolicitante` varchar(20) NOT NULL,
  `Adjunta_INESolicitante` varchar(20) NOT NULL,
  `Pasaporte_o_CedulaProfSolicitante` varchar(20) NOT NULL,
  `Adjunta_Pasaporte_o_CedulaProfSolicitante` varchar(20) NOT NULL,
  `CartillaMilitarSolicitante` varchar(20) NOT NULL,
  `Adjunta_CartillaMilitarSolicitante` varchar(20) NOT NULL,
  `LicenciaConducirSolicitante` varchar(20) NOT NULL,
  `Adjunta_LicenciaConducirSolicitante` varchar(20) NOT NULL,
  `OtraIdentSolicitante` varchar(20) NOT NULL,
  `Adjunta_OtraIdentSolicitante` varchar(20) NOT NULL,
  `EspIdentSolicitante` varchar(20) NOT NULL,
  `CotejoVsOriginal` varchar(20) NOT NULL,
  `Adjunta_CURP_RFC_FEA` varchar(20) NOT NULL,
  `Adjunta_ComprobanteDom` varchar(20) NOT NULL,
  `DomicilioCoincideId` varchar(20) NOT NULL,
  `FechaComprobanteDom` date NOT NULL,
  `DomBeneficiario` varchar(20) NOT NULL,
  `ColBeneficiario` varchar(20) NOT NULL,
  `CPBeneficiario` varchar(20) NOT NULL,
  `PaisBeneficiario` varchar(20) NOT NULL,
  `TelBeneficiario` varchar(20) NOT NULL,
  `CURPBeneficiario` varchar(20) NOT NULL,
  `RFCBeneficiario` varchar(20) NOT NULL,
  `ParentescoBeneficiario` varchar(20) NOT NULL,
  `PorcientoBeneficiario` varchar(20) NOT NULL,
  `FeNacBeneficiario` varchar(20) NOT NULL,
  `MunBeneficiario` varchar(20) NOT NULL,
  `EdoBeneficiario` varchar(20) NOT NULL,
  `EdoCivilBeneficiario` varchar(20) NOT NULL,
  `SoConBeneficiario` varchar(20) NOT NULL,
  `OcuProfBeneficiario` varchar(20) NOT NULL,
  `PEPSBeneficiario` varchar(20) NOT NULL,
  `OrigenRecBeneficiario` varchar(20) NOT NULL,
  `PerTrans1` double(11,2) NOT NULL,
  `FuentePerTrans1` varchar(20) NOT NULL,
  `PerTrans2` double(11,2) NOT NULL,
  `FuentePerTrans2` varchar(20) NOT NULL,
  `PerTrans3` double(11,2) NOT NULL,
  `FuentePerTrans3` varchar(20) NOT NULL,
  `PerTrans4` double(11,2) NOT NULL,
  `FuentePerTrans4` varchar(20) NOT NULL,
  `PerTrans5` double(11,2) NOT NULL,
  `FuentePerTrans5` varchar(20) NOT NULL,
  `PerTrans6` double(11,2) NOT NULL,
  `FuentePerTrans6` varchar(20) NOT NULL,
  `PerTrans7` double(11,2) NOT NULL,
  `FuentePerTrans7` varchar(20) NOT NULL,
  `PerTrans8` double(11,2) NOT NULL,
  `FuentePerTrans8` varchar(20) NOT NULL,
  `PerTrans9` double(11,2) NOT NULL,
  `FuentePerTrans9` varchar(20) NOT NULL,
  `PerTrans10` double(11,2) NOT NULL,
  `FuentePerTrans10` varchar(20) NOT NULL,
  `TotalIngreso` double(11,2) NOT NULL,
  `ValorAuto` double(11,2) NOT NULL,
  `EngAutomovil` double(11,2) NOT NULL,
  `PorEnganche` varchar(255) NOT NULL,
  `PorFinanciamiento` varchar(255) NOT NULL,
  `MontoFinanciado` double(11,2) NOT NULL,
  `Plazo` int(11) NOT NULL,
  `PagoMensEsp` double(11,2) NOT NULL,
  `PEPS` varchar(20) NOT NULL,
  `NombrePEPS` varchar(20) NOT NULL,
  `ParentescoPEPS` varchar(20) NOT NULL,
  `PuestoPEPS` varchar(20) NOT NULL,
  PRIMARY KEY (`Folio_sol`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of gradoriesgo
-- ----------------------------
INSERT INTO `gradoriesgo` VALUES ('SA-011', 'PFA-016', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Durango-Chihuhua-Jalisco-México-CD México-Sonora', 'Durango-Chihuhua-Jalisco-México-CD México-Sonora', 'México', 'México', 'Otros', 'Bajo', '321321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '32321', 'Si', 'Si', 'Si', 'Si', '2017-02-01', '21321', '321', '3213', '213', '213', '21', '321', '321', '321321', '1989-12-31', '321', '3213', '2132', '1321321', '321', '321', '321', '32321.00', '321', '321.00', '321', '321.00', '321', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '32963.00', '150000.00', '50000.00', '33.33 %', '66.67 %', '100000.00', '60', '2000.00', 'Si', '321', '321', '321');
INSERT INTO `gradoriesgo` VALUES ('SA-012', 'PFA-017', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Durango-Chihuhua-Jalisco-México-CD Méxic', 'Durango-Chihuhua-Jalisco-México-CD Méxic', 'México', 'México', 'Otros', 'Bajo', '321321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '32321', 'Si', 'Si', 'Si', 'Si', '0000-00-00', '21321', '321', '3213', '213', '213', '21', '321', '321', '321321', '1989-12-31', '321', '3213', '2132', '1321321', '321', '321', '321', '32321.00', '321', '321.00', '321', '321.00', '321', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '32963.00', '150000.00', '50000.00', '33.33 %', '66.67 %', '100000.00', '60', '2000.00', 'Si', '321', '321', '321');
INSERT INTO `gradoriesgo` VALUES ('SA-013', 'PFA-018', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Durango-Chihuhua-Jalisco-México-CD Méxic', 'Durango-Chihuhua-Jalisco-México-CD Méxic', 'México', 'México', 'Otros', 'Bajo', '321321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '32321', 'Si', 'Si', 'Si', 'Si', '0000-00-00', '21321', '321', '3213', '213', '213', '21', '321', '321', '321321', '1989-12-31', '321', '3213', '2132', '1321321', '321', '321', '321', '32321.00', '321', '321.00', '321', '321.00', '321', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '32963.00', '150000.00', '50000.00', '33.33 %', '66.67 %', '100000.00', '60', '2000.00', 'No', '', '', '');
INSERT INTO `gradoriesgo` VALUES ('SA-014', 'PFA-019', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Durango-Chihuhua-Jalisco-México-CD Méxic', 'Durango-Chihuhua-Jalisco-México-CD Méxic', 'México', 'México', 'Otros', 'Bajo', '321321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '32321', 'Si', 'Si', 'Si', 'Si', '0000-00-00', '21321', '321', '3213', '213', '213', '21', '321', '321', '321321', '1989-12-31', '321', '3213', '2132', '1321321', '321', '321', '321', '32321.00', '321', '321.00', '321', '321.00', '321', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '32963.00', '150000.00', '50000.00', '33.33 %', '66.67 %', '100000.00', '60', '2000.00', 'No', '', '', '');
INSERT INTO `gradoriesgo` VALUES ('SA-015', 'PFA-020', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Durango-Chihuhua-Jalisco-México-CD Méxic', 'Durango-Chihuhua-Jalisco-México-CD Méxic', 'México', 'México', 'Otros', 'Bajo', '321321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '32321', 'Si', 'Si', 'Si', 'Si', '0000-00-00', '21321', '321', '3213', '213', '213', '21', '321', '321', '321321', '1989-12-31', '321', '3213', '2132', '1321321', '321', '321', '321', '32321.00', '321', '321.00', '321', '321.00', '321', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '32963.00', '150000.00', '50000.00', '33.33 %', '66.67 %', '100000.00', '60', '2000.00', 'No', '', '', '');
INSERT INTO `gradoriesgo` VALUES ('SA-016', 'PFA-021', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Durango-Chihuhua-Jalisco-México-CD Méxic', 'Durango-Chihuhua-Jalisco-México-CD Méxic', 'México', 'México', 'Otros', 'Bajo', '321321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '32321', 'Si', 'Si', 'Si', 'Si', '0000-00-00', '21321', '321', '3213', '213', '213', '21', '321', '321', '321321', '1989-12-31', '321', '3213', '2132', '1321321', '321', '321', '321', '32321.00', '321', '321.00', '321', '321.00', '321', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '32963.00', '150000.00', '50000.00', '33.33 %', '66.67 %', '100000.00', '60', '2000.00', 'No', '', '', '');
INSERT INTO `gradoriesgo` VALUES ('SA-017', 'PFA-016', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Durango-Chihuhua-Jalisco-México-CD México-Sonora', 'Durango-Chihuhua-Jalisco-México-CD México-Sonora', 'México', 'México', 'Otros', 'Bajo', '321321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '32321', 'Si', 'Si', 'Si', 'Si', '0000-00-00', '21321', '321', '3213', '213', '213', '21', '321', '321', '321321', '1989-12-31', '321', '3213', '2132', '1321321', '321', '321', '321', '32321.00', '321', '321.00', '321', '321.00', '321', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '32963.00', '150000.00', '50000.00', '33.33 %', '66.67 %', '100000.00', '60', '2000.00', 'Si', '321', '321', '321');
INSERT INTO `gradoriesgo` VALUES ('SA-018', 'PFA-016', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Durango-Chihuhua-Jalisco-México-CD México-Sonora', 'Durango-Chihuhua-Jalisco-México-CD México-Sonora', 'México', 'México', 'Otros', 'Bajo', '321321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '32321', 'Si', 'Si', 'Si', 'Si', '0000-00-00', '21321', '321', '3213', '213', '213', '21', '321', '321', '321321', '1989-12-31', '321', '3213', '2132', '1321321', '321', '321', '321', '32321.00', '321', '321.00', '321', '321.00', '321', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '32963.00', '150000.00', '50000.00', '33.33 %', '66.67 %', '100000.00', '60', '2000.00', 'Si', '321', '321', '321');
INSERT INTO `gradoriesgo` VALUES ('SA-019', 'PFA-022', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'México', 'México', 'Otros', 'Bajo', 'asd', 'Si', '', '', '', '', '', '', '', '', '', 'Si', 'Si', 'Si', 'Si', '0000-00-00', 'lkjlkjlk', 'jlkjlkjlkj', '324342', 'sdfadfkl', '65465465464', 'sdasdkasdjh', 'hkjhkjh', 'kjhkjhkjhkj', '100', '1985-10-01', 'asdasdlkj', 'lkjlkj', 'lkjlkjlk', 'jlkjlkj', 'lkjlkj', 'lkjlkj', 'lkjlkj', '5000.00', 'asd', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '5000.00', '15000.00', '5000.00', '33.33 %', '66.67 %', '10000.00', '60', '2000.00', 'Si', 'asd', 'asd', 'asdf');
INSERT INTO `gradoriesgo` VALUES ('SA-020', 'PFA-023', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'México', 'México', 'Otros', 'Bajo', 'asd', 'Si', '', '', '', '', '', '', '', '', '', 'Si', 'Si', 'Si', 'Si', '0000-00-00', 'lkjlkjlk', 'jlkjlkjlkj', '324342', 'sdfadfkl', '65465465464', 'sdasdkasdjh', 'hkjhkjh', 'kjhkjhkjhkj', '100', '1985-10-01', 'asdasdlkj', 'lkjlkj', 'lkjlkjlk', 'jlkjlkj', 'lkjlkj', 'lkjlkj', 'lkjlkj', '5000.00', 'asd', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '5000.00', '15000.00', '5000.00', '33.33 %', '66.67 %', '10000.00', '60', '2000.00', 'Si', 'asd', 'asd', 'asdf');
