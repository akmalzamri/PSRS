/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 5.7.24 : Database - psrs
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`psrs` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `psrs`;

/*Table structure for table `bookings` */

DROP TABLE IF EXISTS `bookings`;

CREATE TABLE `bookings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `treatments_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `booking_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `booking_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `bookings` */

insert  into `bookings`(`id`,`user_id`,`treatments_id`,`booking_date`,`booking_time`,`created_at`,`updated_at`) values 
(1,'1',NULL,'2020-03-24','10:00','2020-03-15 08:40:37','2020-03-15 08:40:37');

/*Table structure for table `enquiries` */

DROP TABLE IF EXISTS `enquiries`;

CREATE TABLE `enquiries` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `enquiries` */

insert  into `enquiries`(`id`,`name`,`email`,`message`,`created_at`,`updated_at`) values 
(1,'Mohd Akmal Bin Mohd Nor Zamri','akmalzamri@gmail.com','Ape lah kau ni','2020-03-09 10:21:02','2020-03-09 10:21:02'),
(2,'Nana','nana@gmail.com','testing good','2020-03-09 10:32:12','2020-03-09 10:32:12');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(12,'2019_10_13_045934_create_enquiries_table',2),
(13,'2019_10_24_092318_create_therapists_table',2),
(14,'2019_10_30_110912_create_payments_table',2),
(15,'2020_02_06_162038_create_bookings_table',3),
(16,'2020_03_09_090338_create_treatments_table',4),
(18,'2020_03_09_091235_add_photo_path',5),
(19,'2020_03_09_092048_create_treatments_table',6),
(20,'2020_03_09_092936_add_photo_path',7);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `therapists` */

DROP TABLE IF EXISTS `therapists`;

CREATE TABLE `therapists` (
  `therapist_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idtype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idnumber` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`therapist_id`),
  UNIQUE KEY `therapists_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `therapists` */

/*Table structure for table `treatments` */

DROP TABLE IF EXISTS `treatments`;

CREATE TABLE `treatments` (
  `treatments_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `treatmentname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `treatmentprice` double DEFAULT NULL,
  `treatmentdescription` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `treatmentduration` double DEFAULT NULL,
  `photo_path` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`treatments_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `treatments` */

insert  into `treatments`(`treatments_id`,`treatmentname`,`treatmentprice`,`treatmentdescription`,`treatmentduration`,`photo_path`,`created_at`,`updated_at`) values 
(8,'Sport Massage',120,'Deep Pressure Point / Shiatsu / Trigger Point Therapy',2,'storage/profile_directory/hcCKujrWaChKVGQbCH3S37yjp9qXMwTRLa8JyM71.png','2020-03-09 14:07:14','2020-03-09 14:30:42'),
(9,'Rehabilitation',70,'Post accident / Stroke / Paralysis / Sport Injury / Body alignment / Muscle problem / Bone problem',1,'storage/profile_directory/GAzm1DODASvyRmG64CKIRgCqkXw6GjEsR1k6hBRq.png','2020-03-09 14:13:41','2020-03-09 14:27:12'),
(10,'Personal Training',100,'Strenght and conditioning / Technique / Physical Improvement',1,'storage/profile_directory/fTutVuXkyqipoi6xXBnw72WOFelUOyODZieS31NH.jpeg','2020-03-09 14:23:34','2020-03-09 14:25:00'),
(11,'Add-on Hour',60,'Add Any type of Treatment',1,'storage/profile_directory/l1DOI5glwdIzOx9Lw5c0pfH96zrwHPPAvJFRvANW.png','2020-03-09 14:29:22','2020-03-09 14:29:42'),
(12,'Learning Rehab',100,'Learning Rehab Technique / Trigger Point Technique / Recover Technique',2,'storage/profile_directory/QJbwUdjtpRiWrm5LGF4JWxkDpBMOWSMoj98b04kX.jpeg','2020-03-11 19:41:38','2020-03-11 19:41:38');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idtype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idnumber` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `photo_path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document_path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`usertype`,`email_verified_at`,`password`,`gender`,`idtype`,`idnumber`,`address`,`city`,`state`,`country`,`zipcode`,`contact`,`remember_token`,`created_at`,`updated_at`,`photo_path`,`document_path`,`status`) values 
(1,'Mohd Akmal Bin Mohd Nor Zamri','akmalzamri@gmail.com','0','2020-03-09 16:19:37','$2y$10$ONDgbTMMAv82sTubggzPnOr/CxwDFPWb.aO/uYTSZQrv3IVstBt0y','male','mykad','960107145161','No. 9, JLN Impian Makmur 4/1, Saujana Impian','Kajang','Selangor','malaysia','43000','0126092474',NULL,'2020-03-09 08:19:24','2020-03-09 10:44:07','storage/profile_directory/mFMiMVjFHkwL8kUQ4cVL1jPDft4jeVAYjDcNzf8Q.jpeg',NULL,NULL),
(2,'admin','admin@gmail.com','2','2020-03-09 16:25:55','$2y$10$V0UcXz4yak1/BRQoYmLlVuYRcVeZcTw/LNaQqSTWPa3mH0ZqfMEgK',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-09 08:24:13','2020-03-09 08:24:13',NULL,NULL,NULL),
(3,'lihin Zaiwadi','lihin@gmail.com','1','2020-03-09 16:25:56','$2y$10$yyZDKwoFXoDmr70mJPAQweNft9WKUZ5wBjrv9LSwED.VnIZJOHNS2',NULL,NULL,NULL,NULL,NULL,NULL,'malaysia',NULL,NULL,NULL,'2020-03-09 08:24:48','2020-03-09 12:23:30','storage/profile_directory/8i06XxZOHNWYo0Gs8dQ3WA5Uc5pCmKsLepkCivJ0.jpeg','storage/profile_directory/cvHF2OULxPcQuzmQJvnycZ4Ksoeu5hNAjy8kySDF.jpeg',NULL),
(4,'Nana','nana@gmail.com','0','2020-03-09 18:31:46','$2y$10$twDAdwUNh5b43u9ntG0zXema.N4aZ.Fp5Ybvt9rk56JV9wToPzEPu',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-09 10:31:39','2020-03-09 10:31:39',NULL,NULL,NULL),
(5,'Mohamad Shahir Bin kacak Ahmad','shahir@gmail.com','1','2020-03-15 23:49:12','$2y$10$PgIHh0W3ZAUe3k4GHnBhYe2L1TO.7TyPBq/CH/ojTJVj3HjJSLimO',NULL,NULL,NULL,NULL,NULL,NULL,'malaysia',NULL,NULL,NULL,'2020-03-15 15:49:03','2020-03-15 18:47:16',NULL,NULL,'1'),
(6,'Nami','nami@gmail.com','1','2020-03-16 01:57:58','$2y$10$r9UHbX4cmDpIg4tyOemszOjyvzxuH48BzAcRox8uKUjQAzRb4rdlu',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-15 17:56:49','2020-03-15 17:56:49',NULL,NULL,'0'),
(7,'Alia Bt Azahar sulaiman','alia@gmail.com','1','2020-03-16 02:51:55','$2y$10$N42EWEWNZMz4tHEiwDD4wOYIJ82XwKIUeUfft6vvYNsI9qxnQva3m',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-15 18:51:40','2020-03-15 18:51:40',NULL,NULL,'0');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
