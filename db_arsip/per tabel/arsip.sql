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

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
