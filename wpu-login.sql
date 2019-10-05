/*
SQLyog Ultimate v8.55 
MySQL - 5.5.5-10.4.6-MariaDB : Database - wpu-login
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`wpu-login` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `wpu-login`;

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `image` varchar(128) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `is_active` int(1) DEFAULT NULL,
  `date_created` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id`,`name`,`email`,`image`,`password`,`role_id`,`is_active`,`date_created`) values (8,'Dodi','dodi@gmail.com','PSX_20190212_161329.jpg','$2y$10$rVHmAGPa.xmW.t1LzAXRNu3qqSdwGSs9QW1Va0Ohk0fP.ZbvtBlCW',2,1,1568125823),(17,'Dendra Dinata','candraade2019@gmail.com','default.jpg','$2y$10$teYO8/fd83fKPz7qRR/QIuvsmTvp2Ntns4UweF0kLJsfmVb908JCa',2,1,1570185825),(22,'Ade Candra','candra.ade21@gmail.com','default.jpg','$2y$10$KH9Xyn1DcA9Jw24Tsq.OteuFvwOVkWMstGMBwgCxN4YPCNVsSQvoy',1,1,1570248641);

/*Table structure for table `user_access_menu` */

DROP TABLE IF EXISTS `user_access_menu`;

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `user_access_menu` */

insert  into `user_access_menu`(`id`,`role_id`,`menu_id`) values (1,1,1),(3,2,2),(6,2,NULL),(17,1,2),(18,1,3);

/*Table structure for table `user_menu` */

DROP TABLE IF EXISTS `user_menu`;

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `user_menu` */

insert  into `user_menu`(`id`,`menu`) values (1,'admin'),(2,'user'),(3,'menu');

/*Table structure for table `user_role` */

DROP TABLE IF EXISTS `user_role`;

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `user_role` */

insert  into `user_role`(`id`,`role`) values (1,'Administrator'),(2,'Member');

/*Table structure for table `user_sub_menu` */

DROP TABLE IF EXISTS `user_sub_menu`;

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) DEFAULT NULL,
  `title` varchar(128) DEFAULT NULL,
  `url` varchar(128) DEFAULT NULL,
  `icon` varchar(128) DEFAULT NULL,
  `is_active` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `user_sub_menu` */

insert  into `user_sub_menu`(`id`,`menu_id`,`title`,`url`,`icon`,`is_active`) values (2,2,'My Profile','user','fas fa-fw fa-user',1),(3,2,'Edit Profile','user/edit','fas fa-user-edit',1),(4,3,'Menu Management','menu','fas fa-fw fa-folder-open',1),(5,3,'Submenu Management','menu/submenu','far fa-fw fa-folder-open',1),(16,1,'Dashboard','admin','fas fa-fw fa-tachometer-alt',1),(18,1,'Role','admin/role','fas fa-fw fa-user-tie',1),(19,2,'Change Password','user/changePassword','fas fa-fw fa-key',1);

/*Table structure for table `user_token` */

DROP TABLE IF EXISTS `user_token`;

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(128) DEFAULT NULL,
  `token` varchar(128) DEFAULT NULL,
  `date_created` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `user_token` */

insert  into `user_token`(`id`,`email`,`token`,`date_created`) values (12,'candra.ade21@gmail.com','1xP09k49Zy9om+6/Wk9B/ebiniW1QKwS4+NicAFxJfQ=',1570248704),(13,'candra.ade21@gmail.com','KKmlmcLIDcbgM33jG4EX2Gy60DCMOb+vaQpDRcIJ6WE=',1570251490);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
