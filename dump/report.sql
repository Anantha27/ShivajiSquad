-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2016 at 12:55 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shivaji`
--

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE IF NOT EXISTS `report` (
  `repno` int(5) NOT NULL AUTO_INCREMENT,
  `topic` varchar(30) NOT NULL,
  `location` varchar(15) NOT NULL,
  `body` text NOT NULL,
  `name` varchar(20) NOT NULL,
  `contact` bigint(15) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`repno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Reports submitted by users' AUTO_INCREMENT=9 ;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`repno`, `topic`, `location`, `body`, `name`, `contact`, `date`, `time`, `status`) VALUES
(1, 'corrupt officer', 'kodakara', 'delay of service and low quality material\r\nused while building road', 'Nidhin Tom', 34453323, '2016-11-03', '10:10:11', 'PENDING'),
(2, 'bribery in panchayat', 'kidagannur', 'Panchayat secretary asked Rs.500 for issuing income certificate, even when I have submitted all documents.', 'Veena Subramanion', 9747356001, '2016-11-04', '15:57:50', 'ACTION TAKEN'),
(3, 'Corruption in railwa', 'Chenganasserry', 'Low quality materials,unskilled labours are brought to construction site.', 'Amal Raj E', 888992005, '2016-11-04', '11:30:10', 'PENDING'),
(4, 'Corruption in hospit', 'Pandalam', 'Doctor asked  a amount Rs.200 for issuing physical fitness certificate.Even when i was medically and phiscally fit', 'Anantha Krishnan', 88239299200, '2016-11-04', '11:12:20', 'PENDING'),
(5, 'Corrupt police offic', 'Adoor', 'Police officer found to buy some bribes', 'Gopi Krishnan', 77277282, '2016-11-04', '17:26:22', 'ACTION TAKEN'),
(6, 'Corrupt police offic', 'Adoor', 'Police officer found to buy some bribes', 'Varun Mohan', 9087652112, '2016-11-04', '17:31:20', 'PENDING'),
(7, 'Unqualified staff', 'XYZ school', 'Prinicipal appointed unqualified staffs by bribing some money', 'Aswanth S', 782822929, '2016-11-04', '17:33:57', 'PENDING'),
(8, 'jsajkxjksa', 'asdsa', 'dsadsadsa', 'dsadsadsa', 747377, '2016-11-04', '19:24:45', 'PENDING');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
