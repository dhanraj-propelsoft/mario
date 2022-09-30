/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 10.4.22-MariaDB 
*********************************************************************
*/
/*!40101 SET NAMES utf8 */;

create table `order_details` (
	`id` int (11),
	`product_id` int (11),
	`company_name` varchar (150),
	`gst` varchar (150),
	`mobile` varchar (150),
	`dist_id` int (11),
	`town` varchar (150),
	`address` varchar (150),
	`quantity` int (11),
	`date` date ,
	`approval_status` int (11),
	`transaction_status` int (11)
); 
