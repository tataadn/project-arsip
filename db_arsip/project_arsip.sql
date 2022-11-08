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

/*Table structure for table `arsip` */

DROP TABLE IF EXISTS `arsip`;

CREATE TABLE `arsip` (
  `id_arsip` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_surat` varchar(255) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `filepdf` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_arsip`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

/*Data for the table `arsip` */

insert  into `arsip`(`id_arsip`,`nomor_surat`,`kategori`,`judul`,`filepdf`,`created_at`,`updated_at`) values (1,'123abc','Undangan','Undangan Rapat Desa','1667481524_108fd4c1775f420efc76.pdf','2022-11-03 08:18:44','2022-11-03 08:18:44'),(2,'456xyz','Pengumuman','Pengumuman Ketua Desa','1667501463_eb34ee4e819a611e52e9.pdf','2022-11-03 13:51:03','2022-11-03 13:51:03'),(4,'473jskd','Nota Dinas','Dinas Desa','1667899925_dabda21ab8535d3e4550.pdf','2022-11-06 02:14:07','2022-11-08 16:32:05'),(6,'7587hhchcc','Pengumuman','Lomba 17 Agustus 2022','1667738655_17f2976190cba2963b41.pdf','2022-11-06 15:39:01','2022-11-06 19:44:15'),(7,'342rtrggfd','Pemberitahuan','Penutupan Jalan ','1667738984_f2331d6d098947eab53a.pdf','2022-11-06 19:49:44','2022-11-06 19:49:44'),(8,'764838djsbjsdbvj','Pengumuman','Perayaan Hari Kartini','1667739037_d1ba2841f97cd14a1c1e.pdf','2022-11-06 19:50:37','2022-11-06 19:50:37'),(9,'392473kfasfabfs','Undangan','Undangan Rapat 2 Desa','1667743597_d4b4af7ec99553d69bcd.pdf','2022-11-06 21:06:37','2022-11-06 21:06:37'),(10,'3847324bfsbdjf','Pemberitahuan','Penutupan Jalan Parade Tahun Baru','1667743651_f689f19df1eec39fb3e5.pdf','2022-11-06 21:07:31','2022-11-06 21:07:31'),(11,'89764gdfbggg','Pengumuman','Kunjungan Walikota Malang ke Desa','1667743722_de01105478f74e5669eb.pdf','2022-11-06 21:08:42','2022-11-06 21:08:42'),(12,'342947jfbbdfbds','Pengumuman','Pengumuman Penggantian Kepala Desa','1667900011_d512b339eb4869607855.pdf','2022-11-08 16:33:31','2022-11-08 16:33:31');

/*Table structure for table `auth_activation_attempts` */

DROP TABLE IF EXISTS `auth_activation_attempts`;

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `auth_activation_attempts` */

/*Table structure for table `auth_groups` */

DROP TABLE IF EXISTS `auth_groups`;

CREATE TABLE `auth_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `auth_groups` */

/*Table structure for table `auth_groups_permissions` */

DROP TABLE IF EXISTS `auth_groups_permissions`;

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) unsigned NOT NULL DEFAULT 0,
  `permission_id` int(11) unsigned NOT NULL DEFAULT 0,
  KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  KEY `group_id_permission_id` (`group_id`,`permission_id`),
  CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `auth_groups_permissions` */

/*Table structure for table `auth_groups_users` */

DROP TABLE IF EXISTS `auth_groups_users`;

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) unsigned NOT NULL DEFAULT 0,
  `user_id` int(11) unsigned NOT NULL DEFAULT 0,
  KEY `auth_groups_users_user_id_foreign` (`user_id`),
  KEY `group_id_user_id` (`group_id`,`user_id`),
  CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `auth_groups_users` */

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

/*Table structure for table `auth_permissions` */

DROP TABLE IF EXISTS `auth_permissions`;

CREATE TABLE `auth_permissions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `auth_permissions` */

/*Table structure for table `auth_reset_attempts` */

DROP TABLE IF EXISTS `auth_reset_attempts`;

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `auth_reset_attempts` */

/*Table structure for table `auth_tokens` */

DROP TABLE IF EXISTS `auth_tokens`;

CREATE TABLE `auth_tokens` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `expires` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `auth_tokens_user_id_foreign` (`user_id`),
  KEY `selector` (`selector`),
  CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `auth_tokens` */

/*Table structure for table `auth_users_permissions` */

DROP TABLE IF EXISTS `auth_users_permissions`;

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) unsigned NOT NULL DEFAULT 0,
  `permission_id` int(11) unsigned NOT NULL DEFAULT 0,
  KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  KEY `user_id_permission_id` (`user_id`,`permission_id`),
  CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `auth_users_permissions` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`version`,`class`,`group`,`namespace`,`time`,`batch`) values (1,'2017-11-20-223112','Myth\\Auth\\Database\\Migrations\\CreateAuthTables','default','Myth\\Auth',1667749390,1);

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
