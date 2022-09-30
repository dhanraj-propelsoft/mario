/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 10.4.22-MariaDB 
*********************************************************************
*/
/*!40101 SET NAMES utf8 */;

create table `products` (
	`id` int (11),
	`date` date ,
	`name` varchar (300),
	`mrp` int (11),
	`quantity` int (11),
	`sprice` int (11),
	`description` text ,
	`youtube_link` varchar (300),
	`image_1` varchar (300),
	`image_2` varchar (300),
	`image_3` varchar (300)
); 
