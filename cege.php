<?php 

/* DATABASE */
"CREATE DATABASE `santaelena` /*!40100 DEFAULT CHARACTER SET latin1 */;";
/* TABLES */
"CREATE TABLE `productos` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `nombre` varchar(225) NOT NULL,
    `categoria` varchar(45) NOT NULL,
    `precio` varchar(45) NOT NULL,
    `catering` tinyint(4) DEFAULT NULL,
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;";
  