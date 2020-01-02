Database - sales
CREATE TABLE `sales` (
  `customerId` int(11) NOT NULL AUTO_INCREMENT,
  `paying_for_type` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `pan` varchar(20) NOT NULL,
  `customer_name` varchar(100) DEFAULT NULL,
  `mobile_no` varchar(20) DEFAULT NULL,
  `bill_amount` varchar(50) DEFAULT NULL,
  `booking_no` varchar(50) DEFAULT NULL,
  `booking_amount` varchar(50) DEFAULT NULL,
  `discount` varchar(50) DEFAULT NULL,
  `foc` varchar(50) DEFAULT NULL,
  `net_amount` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`customerId`,`pan`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
insert  into `sales`(`customerId`,`paying_for_type`,`date`,`pan`,`customer_name`,`mobile_no`,`bill_amount`,`booking_no`,`booking_amount`,`discount`,`foc`,`net_amount`) values (1,'Sales Adv Booking New','2020-01-01','XWAHG6314K','Sachin T','7621775293',NULL,'1s235J','50000',NULL,NULL,NULL),(2,'Sales Delivery','2020-01-01','XKFDG1563G','Saurov G','9876543210','1000000','','0','90000','10000','900000'),(3,'Sales Delivery','2020-01-01','XWAHG6314K','Sachin ','7621775293','',NULL,'50000','','','');
