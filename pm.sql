/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : controlcreditos

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-03-04 13:31:06
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
  `IniOpDatGenPM` date NOT NULL,
  `CantPerDatGenPM` int(10) NOT NULL,
  `FechaConsEmp` date NOT NULL,
  `AntConsEmp` varchar(20) NOT NULL,
  `ApoConsEmp` varchar(20) NOT NULL,
  `NomAcc1` varchar(60) NOT NULL,
  `RFCAcc1` varchar(20) NOT NULL,
  `PorAcc1` int(3) NOT NULL,
  `NomAcc2` varchar(60) NOT NULL,
  `RFCAcc2` varchar(20) NOT NULL,
  `PorAcc2` int(3) NOT NULL,
  `NomAcc3` varchar(60) NOT NULL,
  `RFCAcc3` varchar(20) NOT NULL,
  `PorAcc3` int(3) NOT NULL,
  `NomAcc4` varchar(60) NOT NULL,
  `RFCAcc4` varchar(20) NOT NULL,
  `PorAcc4` int(3) NOT NULL,
  `NomAccPM1` varchar(60) NOT NULL,
  `RFCAccPM1` varchar(20) NOT NULL,
  `PorAccPM1` int(3) NOT NULL,
  `NomAccPM2` varchar(60) NOT NULL,
  `RFCAccPM2` varchar(20) NOT NULL,
  `PorAccPM2` int(3) NOT NULL,
  PRIMARY KEY (`Id`,`Folio_Cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pm
-- ----------------------------
INSERT INTO `pm` VALUES ('4', 'PM-001', 'Servicios Financieros Del Guadiana', '4552452452452452452', '321654645654654', '351231312313513', '321321', '32132132132132132', '1312321321321321', '321321321', '321321321', '1321', '12312312312312312', 'nomrbe', 'segundo', 'paterno', 'materno', '312654654654', '321', '3216546465465465456', '', '321', '321', '1989-09-07', '312', '1989-09-07', '312', '321', 'dfgdfgdfg', 'sdf32sdf321', '25', 'sdfsdfsf', 's3df21s3df21', '25', 'adasdasd', 'ada3sd21a231sd', '25', 'asdasdasd', 'asd3asd123asd123', '25', 'asdasdasd', 'asd231asd123ad', '50', 'asdasdasd', 'sd13ad123asd', '50');
DELIMITER ;;
CREATE TRIGGER `pm_id` BEFORE INSERT ON `pm` FOR EACH ROW BEGIN
    if (SELECT COUNT(*) FROM pm)=0   THEN
        SET NEW.Folio_Cliente= 'PM-001';
    else
        SET NEW.Folio_Cliente= CONCAT('PM-', LPAD((select MAX(Id)+1 from pm), 3, '0'));
  END IF;
END;;;
DELIMITER ;
