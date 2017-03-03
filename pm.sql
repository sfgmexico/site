/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : controlcreditos

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-03-03 17:04:14
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `pm`
-- ----------------------------
DROP TABLE IF EXISTS `pm`;
CREATE TABLE `pm` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Folio_Cliente` varchar(20) NOT NULL,
  `NomSolicitante` varchar(60) NOT NULL,
  `RFCSolicitante` varchar(30) NOT NULL,
  `TelSolicitante` varchar(20) NOT NULL,
  `DirSolicitante` varchar(20) NOT NULL,
  `NumDirSol` varchar(20) NOT NULL,
  `ColSolicitante` varchar(20) NOT NULL,
  `CdSolicitante` varchar(20) NOT NULL,
  `EdoSolicitante` varchar(20) NOT NULL,
  `CPSolicitante` int(10) NOT NULL,
  `EmailSolicitante` varchar(20) NOT NULL,
  `FaxSolicitante` varchar(20) NOT NULL,
  `NomDatContEmp` varchar(30) NOT NULL,
  `SegNomDatContEmp` varchar(20) NOT NULL,
  `ApPatDatContEmp` varchar(20) NOT NULL,
  `ApMatDatContEmp` varchar(20) NOT NULL,
  `TelDatConEmp` varchar(20) NOT NULL,
  `EmailDatConEmp` varchar(20) NOT NULL,
  `RFCDatConEmp` varchar(20) NOT NULL,
  `FaxDatConEmp` varchar(20) NOT NULL,
  `PuestDatConEmp` varchar(20) NOT NULL,
  `ActPrinDatGenPM` varchar(20) NOT NULL,
  `IniOpDatGenPM` varchar(20) NOT NULL,
  `CantPerDatGenPM` int(10) NOT NULL,
  `FechaConsEmp` date NOT NULL,
  `AntConsEmp` varchar(20) NOT NULL,
  `ApoConsEmp` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`,`Folio_Cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pm
-- ----------------------------
INSERT INTO `pm` VALUES ('4', 'PM-001', 'Servicios Financieros Del Guadiana', '4552452452452452452', '321654645654654', '351231312313513', '', '32132132132132132', '1312321321321321', '321321321', '321321321', '1321', '12312312312312312', '321', '', '', '', '312', '321', '321', '321', '321', '321', '321', '312', '0000-00-00', '312', '321');
DELIMITER ;;
CREATE TRIGGER `pm_id` BEFORE INSERT ON `pm` FOR EACH ROW BEGIN
    if (SELECT COUNT(*) FROM pm)=0   THEN
        SET NEW.Folio_Cliente= 'PM-001';
    else
        SET NEW.Folio_Cliente= CONCAT('PM-', LPAD((select MAX(Id)+1 from pm), 3, '0'));
  END IF;
END;;;
DELIMITER ;
