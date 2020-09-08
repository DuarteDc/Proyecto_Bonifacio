/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.4.11-MariaDB : Database - thebesttrip1
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`thebesttrip1` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci */;

USE `thebesttrip1`;

/*Table structure for table `cliente` */

DROP TABLE IF EXISTS `cliente`;

CREATE TABLE `cliente` (
  `idCliente` int(10) NOT NULL AUTO_INCREMENT,
  `nombreCliente` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `apellidosCliente` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `telefonoCliente` int(15) DEFAULT NULL,
  `correoCliente` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `passCliente` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `terminosCliente` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `cliente` */

insert  into `cliente`(`idCliente`,`nombreCliente`,`apellidosCliente`,`telefonoCliente`,`correoCliente`,`passCliente`,`terminosCliente`) values (13,'Antonio','Duarte C',2147483647,'al221910409@gmail.com','12345','Acepto'),(17,'eede','eded',8888668,'jbkjv','k','');

/*Table structure for table `contacto` */

DROP TABLE IF EXISTS `contacto`;

CREATE TABLE `contacto` (
  `idcon` int(10) NOT NULL AUTO_INCREMENT,
  `nombrecon` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `apellidoscon` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `correocon` varchar(70) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `comentarioscon` varchar(250) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`idcon`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `contacto` */

insert  into `contacto`(`idcon`,`nombrecon`,`apellidoscon`,`correocon`,`comentarioscon`) values (1,'Eduardo','Duarte Clemente','al221910409@gmail.com','Funciona'),(2,'Antonio','Duarte Clemente','Antonio@gmail.com','otra prueba'),(3,'Enrique','Arzate','kike@gmail.com','Esta ok'),(4,'Ricardo','Flores','ricardo@gmail.com','otras prueba'),(5,'','','',''),(6,'','','',''),(7,'','','',''),(8,'Eduardo','Duarte Clemente','al221910409@gmail.com','Todo ok');

/*Table structure for table `factura` */

DROP TABLE IF EXISTS `factura`;

CREATE TABLE `factura` (
  `noFac` int(10) NOT NULL AUTO_INCREMENT,
  `fechaFac` date DEFAULT NULL,
  `Cliente` int(10) DEFAULT NULL,
  `totalFac` float DEFAULT NULL,
  PRIMARY KEY (`noFac`),
  UNIQUE KEY `Cliente` (`Cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `factura` */

/*Table structure for table `factura1` */

DROP TABLE IF EXISTS `factura1`;

CREATE TABLE `factura1` (
  `noFac` int(10) NOT NULL AUTO_INCREMENT,
  `fechaFac` date DEFAULT NULL,
  `idCliente` int(10) DEFAULT NULL,
  `idViaje` int(10) DEFAULT NULL,
  `idRes` int(10) DEFAULT NULL,
  `totalFac` float DEFAULT NULL,
  PRIMARY KEY (`noFac`),
  UNIQUE KEY `idCliente` (`idCliente`),
  UNIQUE KEY `idViaje` (`idViaje`),
  UNIQUE KEY `idRes` (`idRes`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `factura1` */

/*Table structure for table `facturacion` */

DROP TABLE IF EXISTS `facturacion`;

CREATE TABLE `facturacion` (
  `noFac` int(10) NOT NULL AUTO_INCREMENT,
  `fechaFac` date DEFAULT NULL,
  `idCliente` int(10) DEFAULT NULL,
  `idViaje` int(10) DEFAULT NULL,
  `totalFac` float DEFAULT NULL,
  PRIMARY KEY (`noFac`),
  UNIQUE KEY `idCliente` (`idCliente`),
  UNIQUE KEY `idViaje` (`idViaje`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `facturacion` */

/*Table structure for table `reservaciones` */

DROP TABLE IF EXISTS `reservaciones`;

CREATE TABLE `reservaciones` (
  `idRe` int(10) NOT NULL AUTO_INCREMENT,
  `nombreRe` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `apellidosRe` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `correoRe` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `telefonoRe` int(15) DEFAULT NULL,
  `fechaRe` date DEFAULT NULL,
  `pesonasRe` int(15) DEFAULT NULL,
  `idViaje` int(10) DEFAULT NULL,
  `idCliente` int(10) DEFAULT NULL,
  PRIMARY KEY (`idRe`),
  UNIQUE KEY `idViaje` (`idViaje`),
  UNIQUE KEY `idCliente` (`idCliente`),
  CONSTRAINT `reservaciones_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `factura` (`Cliente`),
  CONSTRAINT `reservaciones_ibfk_2` FOREIGN KEY (`idCliente`) REFERENCES `facturacion` (`idCliente`),
  CONSTRAINT `reservaciones_ibfk_3` FOREIGN KEY (`idViaje`) REFERENCES `facturacion` (`idViaje`),
  CONSTRAINT `reservaciones_ibfk_7` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`),
  CONSTRAINT `reservaciones_ibfk_8` FOREIGN KEY (`idViaje`) REFERENCES `viajes` (`idViaje`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `reservaciones` */

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `idusu` int(20) NOT NULL AUTO_INCREMENT,
  `nombreusu` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `apellidos` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `telefonousu` int(10) DEFAULT NULL,
  `correousu` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `contraseñausu` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `terminos` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`idusu`,`terminos`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `usuarios` */

insert  into `usuarios`(`idusu`,`nombreusu`,`apellidos`,`telefonousu`,`correousu`,`contraseñausu`,`terminos`) values (13,'','Duarte C',2147483647,'al221910409@gmail.com','12345','Acepto'),(14,'Eduardo','Duarte Clemente',2147483647,'al221910409@gmail.com','assd','Acepto'),(17,'Eduardo','Duarte Clemente',1232423423,'al221910409@gmail.com','asdasdasdasdasdasd','Acepto'),(22,'Eduardo','Duarte Clemente',2147483647,'al221910409@gmail.com','duarte123','Acepto'),(23,'Eduardo','Duarte Clemente',2147483647,'al221910409@gmail.com','duarte123','Acepto'),(24,'Eduardo','Duarte Clemente',2147483647,'al221910409@gmail.com','duarte123','Acepto'),(25,'Eduardo','Duarte Clemente',2147483647,'al221910409@gmail.com','duarte123','Acepto');

/*Table structure for table `viajes` */

DROP TABLE IF EXISTS `viajes`;

CREATE TABLE `viajes` (
  `idViaje` int(10) NOT NULL AUTO_INCREMENT,
  `nombreViaje` varchar(80) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `costoViaje` float DEFAULT NULL,
  `ubicacionViaje` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`idViaje`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `viajes` */

insert  into `viajes`(`idViaje`,`nombreViaje`,`costoViaje`,`ubicacionViaje`) values (1,'Tsomanotic, Chiapas',3899,'Tsomanotik, Unnamed Road, Chis.'),(2,'Canto de la selva, Chiapas',13099,'Canto de la Selva Jungle Lodge, Chiapas'),(3,'Cafe y quetzales, Chiapas',749,' Julio M. Corzo 12, Sta Lucia, 29250 San Cristóbal de las Casas, Chis.'),(4,'El almacen, Oaxaca',1699,'El Almacen Rutopía, yoko, El almacen Pulquerías yodo nuu, 68000 Oaxaca, Oax., México'),(9,'Sierra morena, Chiapas',749,'Mirador Sierra Morena Centro Ecoturistico, Tonalá, Chis.'),(10,'Acaxochitaln ',2599,'Sierra de Hidalgo cerca de Tulancingo.'),(11,'El veinte, Chiapas',1249,'Josefa Ortiz de Domínguez 1, 20 de Noviembre, 24087 Campeche, Camp., México'),(12,'Isla arena, Campeche',1499,'Isla Arena, Campeche'),(13,'Tosepan kali, Puebla',1299,'Tosepankali, Carretera Federal Libre Cuetzalan-San Miguel Km 1.5, Nahuiogpan, 73560 Cuetzalan del Pr'),(14,NULL,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
