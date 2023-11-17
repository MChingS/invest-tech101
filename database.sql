/*
SQLyog Community Edition- MySQL GUI v5.22a
Host - 5.5.5-10.4.16-MariaDB : Database - moremoney
*********************************************************************
Server version : 5.5.5-10.4.16-MariaDB
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

create database if not exists `moremoney`;

USE `moremoney`;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `moneypaid` */

DROP TABLE IF EXISTS `moneypaid`;

CREATE TABLE `moneypaid` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `datepay` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `moneypaid` */

insert  into `moneypaid`(`id`,`userId`,`amount`,`datepay`) values (1,1,1500,'2020-11-03 11:22:36'),(2,3,2000,'2020-11-03 11:22:36');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `name` varchar(50) DEFAULT NULL,
  `surname` varchar(50) DEFAULT NULL,
  `IdNo` varchar(13) DEFAULT NULL,
  `reffId` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`,`created_at`,`name`,`surname`,`IdNo`,`reffId`) values (1,'Charles.Chilaule@nkgwete.co.za','$2y$10$zhtZQQ5UbL99VX9HgNqCpex/3gX4N/mR6FZ1sY4.ekuUpW4pt3.6y','2020-11-03 11:22:36','Charles','Chilaule','9701306208087',1),(2,'lndkhlzwane@gmail.com','$2y$10$BjDSupP7WPX9IcY63OGHS.bBjHPVkHMgGD9qt34g1/04xoRHQ.AAO','2020-11-03 19:24:25','Lindokuhle','Zwane','9510010530086',0),(3,'qhawebnkomo@gmail.com','$2y$10$ENI9vhUe.0ObSMM8v55T8.wHK1zMp2T6umj.HYOBYP9iO2ia7P0yq','2020-11-06 17:23:09','Brilliant','Nkomo','9707055874086',799505185),(4,'Charles.Chilaule1@nkgwete.co.za','$2y$10$.6FNk34e265ylIwE2ZYiEufCm8HIXCEPDjYjdJxwDAL/GSSc1ZTwu','2020-12-06 12:45:16','Lindokuhle','Chilaule','9701306208087',0),(5,'Charles.Chilaule1@nkgwete.co.za3','$2y$10$FoqSZtDnH32VktL9A1cMQeUqkrAQo7E25BAhTz3azpANlqpHxbWlG','2020-12-08 10:32:49','Charles','Chilaule','9701306008087',0),(6,'Charles.Chilauleq1@nkgwete.co.za3','$2y$10$FuP9x9mz6rHVXDxOf8kQ0uRmC5BGLnuSgYv642myM/w4I.PS8MaTq','2020-12-08 14:31:04','Charles','Chilaule','9701306008087',799505185);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
