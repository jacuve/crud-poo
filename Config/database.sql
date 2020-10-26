/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 8.0.21-0ubuntu0.20.04.4 
*********************************************************************
*/
/*!40101 SET NAMES utf8 */;

create table `estudiantes` (
	`id` int (11)  NOT NULL,
	`nombre` varchar (600),
	`edar` int (11),
	`promedio` double ,
	`imagen` varchar (600),
	`id_seccion` int (11),
	`fecha` datetime ,
	PRIMARY KEY (`id`)
); 


CREATE TABLE `proyecto`.`secciones`(  
  `id` INT NOT NULL,
  `nombre` VARCHAR(80),
  PRIMARY KEY (`id`)
) ENGINE=INNODB CHARSET=utf8 COLLATE=utf8_general_ci;
