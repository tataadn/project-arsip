/*
SQLyog Ultimate
MySQL - 10.4.22-MariaDB : Database - project_arsip
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`project_arsip` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `project_arsip`;

/*Table structure for table `auth_logins` */

DROP TABLE IF EXISTS `auth_logins`;

CREATE TABLE `auth_logins` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) unsigned DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `email` (`email`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

/*Data for the table `auth_logins` */

insert  into `auth_logins`(`id`,`ip_address`,`email`,`user_id`,`date`,`success`) values (1,'::1','adinepg',1,'2022-11-06 22:52:18',0),(2,'::1','adinepg',NULL,'2022-11-06 22:57:58',0),(3,'::1','adinepg@gmail.com',NULL,'2022-11-06 22:59:10',0),(4,'::1','adinepg@gmail.com',1,'2022-11-06 22:59:23',0),(5,'::1','adine.pramesti@gmail.com',2,'2022-11-06 23:01:30',0),(6,'::1','adinepg@gmail.com',1,'2022-11-06 23:10:25',1),(7,'::1','adinepg@gmail.com',1,'2022-11-06 23:38:40',1),(8,'::1','adinepg@gmail.com',1,'2022-11-07 00:03:21',1),(9,'::1','adinepg@gmail.com',1,'2022-11-07 00:22:26',1),(10,'::1','adinepg@gmail.com',1,'2022-11-07 12:53:20',1),(11,'::1','arsipadmin@gmail.com',3,'2022-11-08 16:29:13',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
