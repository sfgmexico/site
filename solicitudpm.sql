/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : controlcreditos

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-03-04 13:32:05
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `solicitudpm`
-- ----------------------------
DROP TABLE IF EXISTS `solicitudpm`;
CREATE TABLE `solicitudpm` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Folio_Sol` varchar(20) NOT NULL,
  `Folio_Cliente` varchar(20) NOT NULL,
  `TipoCredito` varchar(20) NOT NULL,
  `BancRefBan` varchar(20) NOT NULL,
  `NoTarRefBan` varchar(20) NOT NULL,
  `SucRefBan` varchar(20) NOT NULL,
  `FecApRefBan` date NOT NULL,
  `BancRefBan2` varchar(20) NOT NULL,
  `NoTarRefBan2` varchar(20) NOT NULL,
  `SucRefBan2` varchar(20) NOT NULL,
  `FecApRefBan2` date NOT NULL,
  `EmpRefCom` varchar(20) NOT NULL,
  `AntRefCom` int(4) NOT NULL,
  `TelRefCom` varchar(20) NOT NULL,
  `EmpRefCom2` varchar(20) NOT NULL,
  `AntRefCom2` int(4) NOT NULL,
  `TelRefCom2` varchar(20) NOT NULL,
  `BancCarDir` varchar(20) NOT NULL,
  `NoTarCarDir` varchar(20) NOT NULL,
  `NomObPerMor` varchar(50) NOT NULL,
  `DirObPerMor` varchar(20) NOT NULL,
  `ColObPerMor` varchar(20) NOT NULL,
  `CdObPerMor` varchar(20) NOT NULL,
  `LugNacObPerMor` varchar(20) NOT NULL,
  `EdoObPerMor` varchar(20) NOT NULL,
  `CPObPerMor` int(20) NOT NULL,
  `RFCObPerMor` varchar(20) NOT NULL,
  `TelObPerMor` varchar(20) NOT NULL,
  `FaxObPerMor` varchar(20) NOT NULL,
  `AntConsEmpPM` varchar(20) NOT NULL,
  `ApoConsEmpPM` varchar(30) NOT NULL,
  `ActPrinDatGen` varchar(20) NOT NULL,
  `IniOpDatGen` date NOT NULL,
  `CantPerDatGen` int(11) NOT NULL,
  `NomAccionista1` varchar(50) NOT NULL,
  `RFCAccionista1` varchar(20) NOT NULL,
  `PorcentAccionista1` int(3) NOT NULL,
  `NomAccionista2` varchar(50) NOT NULL,
  `RFCAccionista2` varchar(20) NOT NULL,
  `PorcentAccionista2` int(3) NOT NULL,
  `NomAccionista3` varchar(50) NOT NULL,
  `RFCAccionista3` varchar(20) NOT NULL,
  `PorcentAccionista3` int(3) NOT NULL,
  `NomAccionista4` varchar(50) NOT NULL,
  `RFCAccionista4` varchar(20) NOT NULL,
  `PorcentAccionista4` int(3) NOT NULL,
  `NomAccionistaPM1` varchar(50) NOT NULL,
  `RFCAccionistaPM1` varchar(20) NOT NULL,
  `PorcentAccionistaPM1` int(3) NOT NULL,
  `NomAccionistaPM2` varchar(50) NOT NULL,
  `RFCAccionistaPM2` varchar(20) NOT NULL,
  `PorcentAccionistaPM2` int(3) NOT NULL,
  `NomObSol` varchar(20) NOT NULL,
  `ApPatObSol` varchar(20) NOT NULL,
  `ApMatObSol` varchar(20) NOT NULL,
  `RFCObSol` varchar(20) NOT NULL,
  `TelObSol` varchar(20) NOT NULL,
  `MovObSol` varchar(20) NOT NULL,
  `DirObSol` varchar(20) NOT NULL,
  `ColObSol` varchar(20) NOT NULL,
  `CdObSol` varchar(20) NOT NULL,
  `LugNacObSol` varchar(20) NOT NULL,
  `PropObSol` varchar(20) NOT NULL,
  `EdoObSol` varchar(20) NOT NULL,
  `CPObSol` varchar(20) NOT NULL,
  `EmailObSol` varchar(20) NOT NULL,
  `SexoObSol` varchar(20) NOT NULL,
  `FeNacObSol` date NOT NULL,
  `EdObSol` int(3) NOT NULL,
  `CURPObSol` varchar(20) NOT NULL,
  `NomObSolPF` varchar(50) NOT NULL,
  `SexoObSolPF` varchar(20) NOT NULL,
  `FeNacObSolPF` date NOT NULL,
  `RFCObSolPF` varchar(20) NOT NULL,
  `CURPObSolPF` varchar(20) NOT NULL,
  `EdObSolPF` int(3) NOT NULL,
  `NomObSol2` varchar(20) NOT NULL,
  `ApPatObSol2` varchar(20) NOT NULL,
  `ApMatObSol2` varchar(20) NOT NULL,
  `RFCObSol2` varchar(20) NOT NULL,
  `TelObSol2` varchar(20) NOT NULL,
  `MovObSol2` varchar(20) NOT NULL,
  `DirObSol2` varchar(20) NOT NULL,
  `ColObSol2` varchar(20) NOT NULL,
  `CdObSol2` varchar(20) NOT NULL,
  `LugNacObSol2` varchar(20) NOT NULL,
  `PropObSol2` varchar(20) NOT NULL,
  `EdoObSol2` varchar(20) NOT NULL,
  `CPObSol2` varchar(20) NOT NULL,
  `EmailObSol2` varchar(20) NOT NULL,
  `SexoObSol2` varchar(20) NOT NULL,
  `FeNacObSol2` date NOT NULL,
  `EdObSol2` int(3) NOT NULL,
  `CURPObSol2` varchar(20) NOT NULL,
  `NomObSolPF2` varchar(50) NOT NULL,
  `SexoObSolPF2` varchar(20) NOT NULL,
  `FeNacObSolPF2` date NOT NULL,
  `RFCObSolPF2` varchar(20) NOT NULL,
  `CURPObSolPF2` varchar(20) NOT NULL,
  `EdObSolPF2` int(3) NOT NULL,
  `Fecha` date NOT NULL,
  `ClavConcesionario` varchar(20) NOT NULL,
  `NomConcesionario` varchar(20) NOT NULL,
  `NomVendedor` varchar(20) NOT NULL,
  `NomGerenteGral` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `Id` (`Id`),
  KEY `Folio_Sol` (`Folio_Sol`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of solicitudpm
-- ----------------------------
INSERT INTO `solicitudpm` VALUES ('1', 'SM-001', 'PM-001', 'Credit', '321', '321', '32', '1989-09-07', '132', '132', '1321', '1989-09-07', '321', '32', '132132132132131', '32', '1321', '3216456546546', '32', '132', '132', '132', '132', '132', '132', '132', '132', '1326546465463213', '13654654621321', '21331321321321', '2132', '132', '132', '0000-00-00', '132', '13', '213', '213', '21', '321', '321', '321', '321', '32', '132', '132', '1321', '32', '132', '13213', '213', '213', '21', '321', '321', '321', '32', '132', '132', '13', '213', '21', '321', '321', '32', '132', '132', '132', '0000-00-00', '213', '213', '21', '321', '0000-00-00', '32', '1321', '32', '132', '132', '132', '132', '1321', '32', '1321', '321', '321', '231', '231', '231', '231', '321', '123', '0000-00-00', '321', '231', '321', '321', '0000-00-00', '321', '231', '231', '0000-00-00', '231', '321', '321', '23');
DELIMITER ;;
CREATE TRIGGER `solicitudpm_id` BEFORE INSERT ON `solicitudpm` FOR EACH ROW BEGIN
    if (SELECT COUNT(*) FROM solicitudpm)=0   THEN
        SET NEW.Folio_Sol= 'SM-001';
    else
        SET NEW.Folio_Sol= CONCAT('SM-', LPAD((select MAX(Id)+1 from solicitudpm), 3, '0'));
  END IF;
END;;;
DELIMITER ;
