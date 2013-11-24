/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.32 : Database - bsm_besafemap
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`bsm_besafemap` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `bsm_besafemap`;

/*Table structure for table `bsm_donations` */

DROP TABLE IF EXISTS `bsm_donations`;

CREATE TABLE `bsm_donations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `place` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `bsm_donations` */

/*Table structure for table `bsm_facebook` */

DROP TABLE IF EXISTS `bsm_facebook`;

CREATE TABLE `bsm_facebook` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `middle_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `facebook_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `bsm_facebook` */

insert  into `bsm_facebook`(`id`,`first_name`,`last_name`,`middle_name`,`gender`,`email`,`created_at`,`updated_at`,`facebook_id`) values (4,'Dexcleir','Rañin','L.','male','baizhebun@yahoo.com','2013-11-23 20:50:14','2013-11-23 20:50:14','100000032533486'),(5,'Ran','Catolpos',NULL,'male',NULL,'2013-11-23 21:28:14','2013-11-23 21:28:14','100000071753153');

/*Table structure for table `bsm_locations` */

DROP TABLE IF EXISTS `bsm_locations`;

CREATE TABLE `bsm_locations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `latitude` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `longtitude` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `bsm_locations` */

/*Table structure for table `bsm_messages` */

DROP TABLE IF EXISTS `bsm_messages`;

CREATE TABLE `bsm_messages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `text` text COLLATE utf8_unicode_ci,
  `type` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `bsm_messages` */

insert  into `bsm_messages`(`id`,`text`,`type`,`picture`,`status`,`created_at`,`updated_at`) values (2,'dsfdsf','sdfsdf','sdfdsf','d','2013-11-23 16:50:14','2013-11-23 16:50:36');

/*Table structure for table `bsm_migrations` */

DROP TABLE IF EXISTS `bsm_migrations`;

CREATE TABLE `bsm_migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `bsm_migrations` */

insert  into `bsm_migrations`(`migration`,`batch`) values ('2013_11_23_132800_create_people_table',1),('2013_11_23_134617_create_users_table',2),('2013_11_23_135031_create_tokens_table',3),('2013_11_23_140622_create_messages_table',3),('2013_11_23_140732_create_locations_table',3),('2013_11_23_140907_create_places_table',3),('2013_11_23_141143_create_donations_table',3),('2013_11_23_155848_create_tweets_table',4),('2013_11_23_201753_create_facebook_table',4),('2013_11_23_204036_add_facebookid_to_facebook',5);

/*Table structure for table `bsm_people` */

DROP TABLE IF EXISTS `bsm_people`;

CREATE TABLE `bsm_people` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `middlename` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `age` int(10) unsigned NOT NULL,
  `gender` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cell_number` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `person_status` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `bsm_people` */

insert  into `bsm_people`(`id`,`firstname`,`lastname`,`middlename`,`age`,`gender`,`cell_number`,`person_status`,`photo`,`status`,`created_at`,`updated_at`) values (1,'Dexcleir','Rañin','L.',22,'male','09351840596','1','dex_101.jpg',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(2,'Alben','Sandot','B.',22,'male','09351840596','1','alben_101.jpg',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(3,'Leivince','Marte','B.',23,'male','09351840596','1','vince_101.jpg',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(4,'Rannel John','Catolpos','B.',22,'male','09351840596','1','ran_101.jpg',1,'0000-00-00 00:00:00','0000-00-00 00:00:00');

/*Table structure for table `bsm_places` */

DROP TABLE IF EXISTS `bsm_places`;

CREATE TABLE `bsm_places` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `bsm_places` */

/*Table structure for table `bsm_tokens` */

DROP TABLE IF EXISTS `bsm_tokens`;

CREATE TABLE `bsm_tokens` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `private` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `public` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `bsm_tokens` */

/*Table structure for table `bsm_tweets` */

DROP TABLE IF EXISTS `bsm_tweets`;

CREATE TABLE `bsm_tweets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `bsm_tweets` */

/*Table structure for table `bsm_users` */

DROP TABLE IF EXISTS `bsm_users`;

CREATE TABLE `bsm_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `bsm_users` */

insert  into `bsm_users`(`id`,`username`,`password`,`type`,`status`,`created_at`,`updated_at`) values (1,'baizhebun','$2y$08$4xf.gDUJNZUPBxsTNP/xZe22dHUc/czTGL/MyGNSpt5kvMuYV1dDK','mun_admin',1,'0000-00-00 00:00:00','2013-11-23 22:51:11'),(2,'ran','$2y$08$4xf.gDUJNZUPBxsTNP/xZe22dHUc/czTGL/MyGNSpt5kvMuYV1dDK','mun_admin',1,'0000-00-00 00:00:00','2013-11-23 22:51:29');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
