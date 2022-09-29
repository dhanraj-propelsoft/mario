/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 10.4.22-MariaDB : Database - mario
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`mario` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `mario`;

/*Table structure for table `order_details` */

DROP TABLE IF EXISTS `order_details`;

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL DEFAULT 1,
  `company_name` varchar(50) NOT NULL,
  `gst` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `dist_id` int(11) NOT NULL,
  `town` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date` date NOT NULL,
  `approval_status` int(11) NOT NULL DEFAULT 1,
  `transaction_status` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `order_details` */

insert  into `order_details`(`id`,`product_id`,`company_name`,`gst`,`mobile`,`dist_id`,`town`,`address`,`quantity`,`date`,`approval_status`,`transaction_status`) values 
(1,1,'tcc','33ASKPK0273B4Zr','8056259119',3631,'Trichy','trichy',5,'2022-09-29',1,0),
(2,1,'metajob','33ASKPK0273B4Ze','8610785311',3635,'Trichy','trichy',3,'2022-09-29',1,0),
(3,2,'jp','33ASKPK0273B4Ze','9443447755',306,'Trichy','trichy',8,'2022-09-29',1,0),
(4,1,'Trichy Car Care','33ASKPK0273B4Zr','8056259119',4147,'keeranur','south street,ayyanar kovil Street',4,'2022-09-29',1,0),
(5,1,'Harish','33ASKPK0273B4Zr','9442769739',3714,'perungudi','North Keela street,west side',4,'2022-09-29',1,0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
