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

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`id`,`email`,`username`,`password_hash`,`reset_hash`,`reset_at`,`reset_expires`,`activate_hash`,`status`,`status_message`,`active`,`force_pass_reset`,`created_at`,`updated_at`,`deleted_at`) values (1,'adinepg@gmail.com','adinepg','$2y$10$1sPZT24iQP5dsdlkj9r7DuMIroIvNUoIHO/9MgfpGTcOYGe1tqKga',NULL,NULL,NULL,NULL,NULL,NULL,1,0,'2022-11-06 23:10:12','2022-11-06 23:10:12',NULL),(2,'admin123@gmail.com','adminadine','$2y$10$oDVCncgl3ahZ3aEeBHxDuuaLqfDCQ8293rhTPSPhdgo48BCLhLrx2',NULL,NULL,NULL,NULL,NULL,NULL,1,0,'2022-11-06 23:48:49','2022-11-06 23:48:49',NULL),(3,'arsipadmin@gmail.com','arsipadmin','$2y$10$FmfvQIU7C5OFF9FF4kZZF.1Ael9fN9f9XHBpUMBjWnrFU3t/RboCe',NULL,NULL,NULL,NULL,NULL,NULL,1,0,'2022-11-08 16:28:46','2022-11-08 16:28:46',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
