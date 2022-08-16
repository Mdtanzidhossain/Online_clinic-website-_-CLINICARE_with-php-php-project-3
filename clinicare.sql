-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2022 at 10:14 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinicare`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `uname`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `admin_medicine`
--

CREATE TABLE `admin_medicine` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_username` varchar(500) NOT NULL DEFAULT '',
  `admin_password` varchar(500) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_medicine`
--

INSERT INTO `admin_medicine` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `ambulance_payment`
--

CREATE TABLE `ambulance_payment` (
  `Location` text NOT NULL,
  `Contact_no` int(14) NOT NULL,
  `Bikash_Account_no` int(14) NOT NULL,
  `client_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ambulance_payment`
--

INSERT INTO `ambulance_payment` (`Location`, `Contact_no`, `Bikash_Account_no`, `client_id`) VALUES
('hatirjheel 101/1 4th floor', 15465451, 1936100300, 0),
('motijheel 01/1 3rd floor', 12654651, 1546854512, 0),
('mirpur 1', 16854, 5196854, 0),
('pabna', 23654651, 165415615, 0),
('badda', 1234, 3333, 0),
('uiu', 16354, 1111, 0),
('gajipur', 126415, 4444, 0),
('banglamotor', 165465, 45454, 0),
('unknown', 0, 11111, 0),
('unknown', 0, 11111, 0),
('uttara', 195960844, 1959608444, 0);

-- --------------------------------------------------------

--
-- Table structure for table `appiointment`
--

CREATE TABLE `appiointment` (
  `ticket_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `doc_id` int(11) NOT NULL,
  `DOS` date NOT NULL,
  `clinic_id` int(11) DEFAULT NULL,
  `appiointment_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appiointment`
--

INSERT INTO `appiointment` (`ticket_id`, `patient_id`, `doc_id`, `DOS`, `clinic_id`, `appiointment_time`) VALUES
(1, 1, 5, '2021-09-02', 200, '17:00:00'),
(2, 4, 6, '2020-08-04', 203, '10:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `car_id` int(11) NOT NULL,
  `car_name` varchar(255) NOT NULL,
  `car_type` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `hire_cost` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`car_id`, `car_name`, `car_type`, `image`, `hire_cost`, `capacity`, `status`) VALUES
(1, 'Air Ambulance', 'Air Ambulance', 'Car1.jpg', 50000, 5, 'Available'),
(2, 'AC Ambulance', 'AC Ambulance', 'Car2.jpg', 15000, 6, 'Available'),
(3, 'Non-AC Ambulance', 'Non-AC Ambulance', 'Car3.jpg', 10000, 6, 'Available'),
(5, 'ICU Ambulance', 'ICU Ambulance', 'Car4.jpg', 18000, 5, 'Available'),
(7, 'Motorcycle Ambulance', 'Motorcycle Ambulance', 'Car6.jpg', 6000, 10, 'Available'),
(8, 'boat ambulance', 'boat', 'boat.jpg', 5000, 7, 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_no` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `car_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `mpesa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `fname`, `email`, `id_no`, `phone`, `location`, `gender`, `car_id`, `status`, `mpesa`) VALUES
(2, 'felix kiamba', 'kiambafelix@yahoo.com', 30073147, 705053484, 'nairobi', 'Male', 1, 'Approved', 'GTD45H7H6'),
(3, 'concepter', 'concybogita@gmail.com', 27695131, 707403614, 'kisii', 'Female', 2, 'Approved', 'DJFL870FDK9'),
(4, 'enock bosire', 'enock@gmail.com', 1234567, 717056766, 'narok', 'Male', 2, 'Approved', 'HJHK678X'),
(5, 'Ammar', 'a.ammar0317@gmail.com', 10, 1731021423, 'Dhaka', 'Male', 0, 'Available', ''),
(6, 'Sawn', 'a@gmail', 23, 123, 'dhanmondi', 'Male', 1, 'Approved', ''),
(7, 'tanzid', 'tan@gmail.com', 4455, 123, 'Mohammadpur', 'Male', 0, 'Available', ''),
(8, 'Tanzid Hossain', 'knwdqiu@jqxbi.com', 0, 2147483647, 'o', 'Male', 1, 'Approved', '100'),
(9, 'Tanzid Hossain', 'km@yahoo.com', 0, 8801959, '11', 'Male', 2, 'Approved', '100');

-- --------------------------------------------------------

--
-- Table structure for table `clinic`
--

CREATE TABLE `clinic` (
  `clinic_id` int(11) NOT NULL,
  `branch_name` varchar(30) NOT NULL,
  `location_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clinic`
--

INSERT INTO `clinic` (`clinic_id`, `branch_name`, `location_id`) VALUES
(200, 'SADAR BRANCH', 16),
(202, 'CAMPUS BRANCH', 29),
(203, 'WARI BRANCH', 34),
(212, 'GULSHAN BRANCH', 32),
(310, 'BANDOR BAZAR BRANCH', 10),
(500, 'COLLEGE ROAD BRANCH', 33);

-- --------------------------------------------------------

--
-- Table structure for table `covidadmin`
--

CREATE TABLE `covidadmin` (
  `ID` int(11) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `AdminuserName` varchar(20) DEFAULT NULL,
  `MobileNumber` int(11) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `covidadmin`
--

INSERT INTO `covidadmin` (`ID`, `AdminName`, `AdminuserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Shaon', 'shaon', 1745678912, 'shaon@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2022-01-22 13:46:25');

-- --------------------------------------------------------

--
-- Table structure for table `covidpatient`
--

CREATE TABLE `covidpatient` (
  `id` int(11) NOT NULL,
  `FullName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(12) DEFAULT NULL,
  `DateOfBirth` date DEFAULT NULL,
  `GovtissuedId` varchar(150) DEFAULT NULL,
  `GovtissuedIdNo` varchar(150) DEFAULT NULL,
  `FullAddress` varchar(255) DEFAULT NULL,
  `Division` varchar(200) DEFAULT NULL,
  `RegistrationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `covidpatient`
--

INSERT INTO `covidpatient` (`id`, `FullName`, `MobileNumber`, `DateOfBirth`, `GovtissuedId`, `GovtissuedIdNo`, `FullAddress`, `Division`, `RegistrationDate`) VALUES
(1, 'Mira Rahman', 155331456, '1996-02-05', 'NID', '14651594156219', 'Wari,Rankin street', 'Dhaka', '2022-01-22 14:37:39'),
(2, 'Rafi Al Hasan', 12543698707, '2001-02-23', 'NID', '2344569702', 'College Road,Hillview Area', 'Chottogram', '2022-01-22 14:41:30'),
(3, 'Shakib Islam', 1553377089, '2007-07-02', 'NID', '2233069872', 'Mill Road,Sadar', 'Rangpur', '2022-01-22 14:43:56'),
(4, 'Abdul Ismam', 1238965401, '2006-02-17', 'NID', '336265821', 'Sadar Road,Barishal Sadar', 'Barishal', '2022-01-23 04:54:10'),
(5, 'Nasrin Chowdhury', 1812236597, '1981-11-18', 'NID', '336069854', 'Gulshan Avenue-1212', 'Dhaka', '2022-01-23 04:56:36'),
(6, 'Sourav Shaha', 1723659812, '1994-05-12', 'NID', '19883456', 'Adalat para Road', 'Khulna', '2022-01-23 05:01:37');

-- --------------------------------------------------------

--
-- Table structure for table `covidtestrecord`
--

CREATE TABLE `covidtestrecord` (
  `id` int(11) NOT NULL,
  `OrderNumber` bigint(14) DEFAULT NULL,
  `PatientMobileNumber` bigint(14) DEFAULT NULL,
  `TestType` varchar(100) DEFAULT NULL,
  `TestTimeSlot` varchar(120) DEFAULT NULL,
  `ReportStatus` varchar(100) DEFAULT NULL,
  `FinalReport` varchar(150) DEFAULT NULL,
  `ReportUploadTime` varchar(200) DEFAULT NULL,
  `RegistrationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `AssignedtoEmpId` varchar(150) DEFAULT NULL,
  `AssigntoName` varchar(180) DEFAULT NULL,
  `AssignedTime` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `covidtestrecord`
--

INSERT INTO `covidtestrecord` (`id`, `OrderNumber`, `PatientMobileNumber`, `TestType`, `TestTimeSlot`, `ReportStatus`, `FinalReport`, `ReportUploadTime`, `RegistrationDate`, `AssignedtoEmpId`, `AssigntoName`, `AssignedTime`) VALUES
(1, 900217935, 155331456, 'RT-PCR', '2022-01-19T09:22', 'Assigned', NULL, NULL, '2022-01-23 06:06:43', '4', 'Sanjana shah', '23-01-2022 12:06:43 PM'),
(2, 644168762, 12543698707, 'Antigen', '2022-02-19T16:40', NULL, NULL, NULL, '2022-01-22 14:41:30', NULL, NULL, NULL),
(3, 673584680, 1553377089, 'RT-PCR', '2022-01-20T10:45', 'Assigned', NULL, NULL, '2022-01-23 06:11:57', '6', 'Naira Hasan', '23-01-2022 12:11:57 PM'),
(4, 761243952, 1238965401, 'Antigen', '2022-01-20T13:15', NULL, NULL, NULL, '2022-01-23 04:54:10', NULL, NULL, NULL),
(5, 579611853, 1812236597, 'Antigen', '2022-01-19T14:00', NULL, NULL, NULL, '2022-01-23 04:56:36', NULL, NULL, NULL),
(6, 219921411, 1723659812, 'RT-PCR', '2022-01-19T18:05', 'Assigned', NULL, NULL, '2022-01-23 07:02:05', '1', 'Bappy Khan', '23-01-2022 01:02:05 PM');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `name` varchar(20) NOT NULL,
  `dept_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`name`, `dept_id`) VALUES
('CARDIOLOGY', 1),
('DERMATOLOGY', 2),
('GYNECOLOGY', 3),
('ORTHOPOLOGY', 4),
('NEUROLOGY', 5),
('ONCOLOGY', 6),
('UROLOGY', 7),
('MEDICINE', 8),
('oncology', 9),
('UROLOGY', 10),
('NEUROLOGY', 11),
('medicine', 12),
('cancer', 13),
('orthopedic', 14);

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `name` varchar(20) NOT NULL,
  `division_id` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`name`, `division_id`) VALUES
('BARISHAL', 'BAR'),
('chittagong', 'CHI'),
('DHAKA', 'DHA'),
('KHULNA', 'KHU'),
('MYMENSHINGH', 'MYM'),
('RAJSHAHI', 'RAJ'),
('RANGPUR', 'RAN'),
('SYLHET', 'SYL');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `name` varchar(20) NOT NULL,
  `doc_id` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` int(11) DEFAULT NULL,
  `qualification` varchar(20) DEFAULT NULL,
  `clinic_id` int(11) DEFAULT NULL,
  `licence_No` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `Ticket_Count_perDay` int(11) DEFAULT NULL,
  `pass` int(11) DEFAULT NULL,
  `shift_name` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`name`, `doc_id`, `email`, `phone`, `qualification`, `clinic_id`, `licence_No`, `dept_id`, `Ticket_Count_perDay`, `pass`, `shift_name`) VALUES
('Faqrul Hasan', 1, 'swawon420@gmail.com', 1758695556, 'FCPS in Oncology', 212, 565654661, 6, NULL, 145655, 'MORNING'),
('Zahirul Kabir', 4, 'zahirulkabir66@gmail', 15566523, 'PHD in Cardiology', 500, 898956445, 1, NULL, 1545652, 'EVENING'),
('Jodu Mia', 5, 'jodumia445@gmail.com', 1866565, 'PHD in Medicine', 500, 898561658, 8, NULL, 8897466, NULL),
('Faria Rahman', 6, 'faria56@gmail.com', 1758694568, 'PHD in Neurology', 202, 2147483647, 5, NULL, 14565585, 'MORNING');

-- --------------------------------------------------------

--
-- Table structure for table `hire`
--

CREATE TABLE `hire` (
  `hire_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(10) UNSIGNED NOT NULL,
  `item_name` varchar(5000) NOT NULL DEFAULT '',
  `item_price` double DEFAULT NULL,
  `item_image` varchar(5000) NOT NULL DEFAULT '',
  `item_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`, `item_price`, `item_image`, `item_date`) VALUES
(5, 'Napa ', 100, 'napa.jpg', '2020-11-10'),
(6, 'Tuffnill', 50, 'tufnill.jpg', '2021-11-10'),
(7, 'Cardiolip', 60, 'cardiolip.jpg', '2021-11-10'),
(8, 'Osmodrops', 55, 'osmodrops.jpg', '2021-11-10'),
(9, 'Antacid', 90, 'antacid.jpg', '2021-11-10'),
(11, 'Opthacare', 40, 'opthacare.jpg', '2021-11-10'),
(12, 'Funzol', 1000, 'funzol.jpg', '2021-11-14'),
(20, 'cranbiotic 400 mg', 1220, '293827.jpg', '2022-01-23'),
(21, 'Modfinil200', 1800, '615940.jpg', '2022-01-23');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `district` varchar(20) NOT NULL,
  `postalCode` int(11) NOT NULL,
  `street_Address` varchar(30) NOT NULL,
  `house_no` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `division_id` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`district`, `postalCode`, `street_Address`, `house_no`, `location_id`, `division_id`) VALUES
('DHAKA', 1000, 'PALTAN GPO ', 5, 1, 'DHA'),
('DHAKA', 1351, '04', 12, 2, 'DHA'),
('DHAKA', 1206, 'DHAKA CANTONMENT', 50, 3, 'DHA'),
('DHAKA', 1100, '06', 200, 4, 'DHA'),
('CHITTAGONG', 4100, 'BANDOR ROAD', 10, 5, 'CHI'),
('CHIOTTAGONG', 4650, '03', 25, 6, 'CHI'),
('111', 17, '4377', 0, 7, 'CHI'),
('CHIOTTAGONG', 4203, 'CHOWK BAZAR ROAD', 240, 8, 'CHI'),
('SYLHET', 3360, '01', 3, 9, 'SYL'),
('SYLHET', 3310, 'BAZAR ROAD', 118, 10, 'SYL'),
('SYLHET', 3352, '01', 9, 11, 'SYL'),
('SYLHET', 3101, 'CADET COLLEGE ROAD', 96, 12, 'SYL'),
('MYMENSINGH', 2281, 'SHOHAGI STATION', 1, 13, 'MYM'),
('MYMENSINGH', 2202, 'BAU CAMPUS', 13, 14, 'MYM'),
('MYMENSINGH', 2210, '02', 5, 15, 'MYM'),
('MYMENSINGH', 2200, 'SADAR BAZAR', 22, 16, 'MYM'),
('RANGPUR', 5405, 'CARMIECAL COLLEGE ROAD', 9, 17, 'RAN'),
('RANGPUR', 5430, '03', 123, 18, 'RAN'),
('RANGPUR', 5401, 'RANGPUR UP-SHAHAR', 11, 19, 'RAN'),
('NILPHAMARI', 5301, 'SUGARMIL COLONY', 230, 20, 'RAN'),
('RAJSHAHI', 6205, 'UNIVERSITY CAMPUS', 9, 21, 'RAJ'),
('RAJSHAHI', 6202, 'RAJSHAHI CANTONMENT', 186, 22, 'RAJ'),
('PABNA', 6602, 'MERIL ROAD', 7, 23, 'RAJ'),
('SIRAJGONG', 6780, '03', 22, 24, 'RAJ'),
('BARISHAL', 8215, 'NIZAMUDDIN COLLEGE ROAD', 1, 25, 'BAR'),
('BARISHAL', 8200, 'BARISHAL SADAR', 99, 26, 'BAR'),
('PIJOJPUR', 8565, 'NATUN HATT', 9, 27, 'BAR'),
('KHULNA', 9207, 'ATRA SHILPO AREA', 220, 28, 'KHU'),
('KHULNA', 9208, 'UNIVERSITY CAMPUS', 1, 29, 'KHU'),
('KHUSTIA', 7030, 'MIRPUR BAZAR', 5, 30, 'KHU'),
('DHAKA', 1222, '07', 2, 31, 'DHA'),
('DHAKA', 1212, 'GULSHAN AVENUE', 7, 32, 'DHA'),
('CUMILLA', 3500, 'VICTORIA COLLEGE ROAD', 2, 33, 'CHI'),
('DHAKA', 1203, 'RANKIN STREET', 8, 34, 'DHA'),
('DINAJPUR', 5202, 'DINAJPUR SADAR SAROK', 3, 35, 'RAN'),
('dhaka', 1000, 'paltangpo', 77, 37, 'DHA'),
('dhaka', 1216, '512', 3, 38, 'DHA');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `msg_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`msg_id`, `client_id`, `message`, `status`, `time`) VALUES
(8, 0, 'bhai urgent gari pathan', 'Unread', '2022-05-20 02:43:04'),
(9, 0, 'bhai pabna gari pathan joldi', 'Unread', '2022-05-20 15:22:20');

-- --------------------------------------------------------

--
-- Table structure for table `newappoinment`
--

CREATE TABLE `newappoinment` (
  `ticket_id` int(11) NOT NULL,
  `Dos` date NOT NULL,
  `timetable` varchar(20) NOT NULL,
  `uploads` varchar(500) NOT NULL,
  `doctor_name` varchar(20) NOT NULL,
  `doctor_department` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `newappoinment`
--

INSERT INTO `newappoinment` (`ticket_id`, `Dos`, `timetable`, `uploads`, `doctor_name`, `doctor_department`) VALUES
(1, '2022-02-02', '07:00:', '', '', ''),
(3, '2022-02-02', '07:30:', 'documentimg/CB8A7836.jpg', '', ''),
(4, '2022-02-08', '08:00:', 'documentimg/Homework 1 - Fall 2021 (2).pdf', '', ''),
(5, '2021-09-29', '09:00:', 'documentimg/', '', ''),
(6, '2022-01-23', '00:00:', 'documentimg/computer2.jpg', 'Dr Akhlaqur rahman', 'mbbs'),
(7, '2022-01-24', '6 pm t', 'documentimg/computer2.jpg', 'dr fakrul', ''),
(8, '2022-01-25', '8 pm t', 'documentimg/computer2.jpg', 'dr ammar', ''),
(9, '2022-01-24', '1 pm to 3 pm', 'documentimg/computer2.jpg', 'dr roni', 'fcps in ur'),
(10, '2022-01-23', '1 pm to 3 pm', 'documentimg/computer.jpg', 'dr roni', 'fcps in urology');

-- --------------------------------------------------------

--
-- Table structure for table `newdoctor`
--

CREATE TABLE `newdoctor` (
  `doc_Name` varchar(20) NOT NULL,
  `phone` int(20) NOT NULL,
  `doc_email` varchar(30) NOT NULL,
  `doc_dept` varchar(10) NOT NULL,
  `doc_speciality` varchar(10) NOT NULL,
  `pass` int(10) NOT NULL,
  `licence_num` int(30) NOT NULL,
  `shift_time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `newdoctor`
--

INSERT INTO `newdoctor` (`doc_Name`, `phone`, `doc_email`, `doc_dept`, `doc_speciality`, `pass`, `licence_num`, `shift_time`) VALUES
('ali ahmed', 1959608444, 'ali@gmail.com', 'oncology', 'fcps,oncol', 65656, 351615, '10 AM to 1 PM'),
('dr roni', 1959608455, 'dr.roni@gmail.com', 'UROLOGY', 'fcps in ur', 6666, 15674261, '1 pm to 3 pm'),
('dr kamal', 1685419654, 'dr.kalam@gmail.com', 'NEUROLOGY', 'fcps in ne', 6969, 1567444, '3 pm to 6 pm'),
('Dr Akhlaqur rahman', 156516541, 'dr.rahman@gmail.com', 'medicine', 'mbbs', 6363, 5185495, '6 pm to 9 pm'),
('dr fakrul', 1296854, 'dr.fakrul@gmail.com', 'cancer', 'oncology', 6464, 321965, '6 pm to 7 pm'),
('dr ammar', 1959608456, 'dr.ammar@gmail.com', 'orthopedic', 'fcps', 3636, 126654, '8 pm to 9 pm');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `patient_id` int(11) NOT NULL DEFAULT 0,
  `order_name` varchar(1000) NOT NULL DEFAULT '',
  `order_price` double NOT NULL DEFAULT 0,
  `order_quantity` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `order_total` double NOT NULL DEFAULT 0,
  `order_status` varchar(45) NOT NULL DEFAULT '',
  `order_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`order_id`, `patient_id`, `order_name`, `order_price`, `order_quantity`, `order_total`, `order_status`, `order_date`) VALUES
(40, 6, 'Tuffnill', 50, 1, 50, 'Ordered_Finished', '2022-01-22'),
(41, 6, 'Osmodrops', 55, 1, 55, 'Ordered_Finished', '2022-01-22'),
(42, 6, 'Funzol', 1000, 1, 1000, 'Ordered', '2022-01-22'),
(43, 6, 'Opthacare', 40, 1, 40, 'Ordered', '2022-01-22');

-- --------------------------------------------------------

--
-- Table structure for table `pathologist`
--

CREATE TABLE `pathologist` (
  `id` int(11) NOT NULL,
  `EmpID` varchar(100) DEFAULT NULL,
  `FullName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(14) DEFAULT NULL,
  `RegDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pathologist`
--

INSERT INTO `pathologist` (`id`, `EmpID`, `FullName`, `MobileNumber`, `RegDate`) VALUES
(1, '1', 'Bappy Khan', 123456789, '2022-01-22 14:13:00'),
(2, '2', 'Zahid afreen', 3216540789, '2022-01-22 14:14:34'),
(3, '3', 'Rajib islam', 5409723596, '2022-01-22 14:16:05'),
(4, '4', 'Sanjana shah', 123978521, '2022-01-22 14:18:07'),
(5, '5', 'Limon Eyahya', 123654259, '2022-01-22 15:24:40'),
(6, '6', 'Naira Hasan', 171201967, '2022-01-23 04:48:12');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `first_name` varchar(20) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `DOB` date NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `phone` int(11) DEFAULT NULL,
  `email` varchar(25) NOT NULL,
  `NID_Birth_certific` bigint(20) DEFAULT NULL,
  `pasword` int(11) NOT NULL,
  `location_id` int(11) DEFAULT NULL,
  `prescription_upload` varchar(500) NOT NULL,
  `car_id` int(20) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`first_name`, `patient_id`, `DOB`, `last_name`, `phone`, `email`, `NID_Birth_certific`, `pasword`, `location_id`, `prescription_upload`, `car_id`, `status`) VALUES
('Shawon', 1, '1999-10-20', 'Islam', 14563258, 'swawonislam20@gmail.com', 5448829825971445, 12525545, 34, '', 0, 'Approved'),
('Taqnzid', 2, '1992-12-25', 'Hossain', 13565652, 'tanqidi223@gmail.com', 5448829825646543, 1545121, 28, '', 0, 'Approved'),
('Pori', 4, '1992-02-12', 'Moni', 1758656561, 'pori.moni420@gmail.com', 1988882982546451121, 420420, 33, '', 0, ''),
('Sabnam ', 5, '1989-11-25', 'Moni', 1858566565, 'sobnom420@yahoo.com', 46528298595323, 12588998, 20, '', 0, 'Approved'),
('ammar', 6, '1999-01-01', 'ahmed', 164164, 'ammar@gmail.com', 1564564, 1266, NULL, '', 0, ''),
('hello', 7, '1908-01-01', 'world', 1858585, 'hello@gmail.com', 156565, 65656, NULL, '', 0, 'Approved'),
('tanzid', 8, '1999-01-01', 'Hossain', 1959608444, 'tanzid.hossain00@gmail.co', 5894671335, 1234, NULL, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `name` varchar(20) NOT NULL,
  `phone` int(20) NOT NULL,
  `prescription` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`name`, `phone`, `prescription`) VALUES
('', 0, 'prescriptionimg/computer2.jpg'),
('hello', 1959608455, 'prescriptionimg/computer2.jpg'),
('tanzid', 1959608455, 'prescriptionimg/brookings.edu.png');

-- --------------------------------------------------------

--
-- Table structure for table `reporttracking`
--

CREATE TABLE `reporttracking` (
  `id` int(11) NOT NULL,
  `OrderNumber` bigint(40) DEFAULT NULL,
  `Remark` varchar(255) DEFAULT NULL,
  `Status` varchar(120) DEFAULT NULL,
  `PostingTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `RemarkBy` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `shift`
--

CREATE TABLE `shift` (
  `shift_name` varchar(8) NOT NULL,
  `clinic_id` int(11) NOT NULL,
  `doc_id` int(11) NOT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `ticket_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shift`
--

INSERT INTO `shift` (`shift_name`, `clinic_id`, `doc_id`, `start_time`, `end_time`, `ticket_id`) VALUES
('EVENING', 212, 4, '16:00:00', '22:00:00', 2),
('MORNING', 212, 5, '09:00:00', '14:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_Name` varchar(20) NOT NULL,
  `staff_id` varchar(11) NOT NULL,
  `NID` bigint(20) NOT NULL,
  `clinic_id` int(11) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_Name`, `staff_id`, `NID`, `clinic_id`, `password`) VALUES
('Nipa Shaha', 'D12', 4405307131, 202, 536221),
('Zidan Gomej', 'L03', 4403116071, 500, 431235),
('Novia Khan', 'N03', 3302114041, 200, 76352),
('Sonia Islam', 'N05', 4600133575, 212, 12345),
('Tamim Khan', 'N52', 5500333511, 310, 46352);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `admin_medicine`
--
ALTER TABLE `admin_medicine`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `appiointment`
--
ALTER TABLE `appiointment`
  ADD PRIMARY KEY (`ticket_id`),
  ADD KEY `patient_id` (`patient_id`),
  ADD KEY `doc_id` (`doc_id`),
  ADD KEY `clinic_id` (`clinic_id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `clinic`
--
ALTER TABLE `clinic`
  ADD PRIMARY KEY (`clinic_id`),
  ADD KEY `location_id` (`location_id`);

--
-- Indexes for table `covidadmin`
--
ALTER TABLE `covidadmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `covidpatient`
--
ALTER TABLE `covidpatient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `covidtestrecord`
--
ALTER TABLE `covidtestrecord`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`division_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doc_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `licence_No` (`licence_No`),
  ADD KEY `clinic_id` (`clinic_id`),
  ADD KEY `dept_id` (`dept_id`),
  ADD KEY `shift_name` (`shift_name`);

--
-- Indexes for table `hire`
--
ALTER TABLE `hire`
  ADD PRIMARY KEY (`hire_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`),
  ADD KEY `division_id` (`division_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `newappoinment`
--
ALTER TABLE `newappoinment`
  ADD PRIMARY KEY (`ticket_id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `FK_orderdetails_1` (`patient_id`);

--
-- Indexes for table `pathologist`
--
ALTER TABLE `pathologist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `NID_Birth_certific` (`NID_Birth_certific`),
  ADD KEY `location_id` (`location_id`);

--
-- Indexes for table `reporttracking`
--
ALTER TABLE `reporttracking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shift`
--
ALTER TABLE `shift`
  ADD PRIMARY KEY (`shift_name`),
  ADD KEY `clinic_id` (`clinic_id`),
  ADD KEY `doc_id` (`doc_id`),
  ADD KEY `ticket_id` (`ticket_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`),
  ADD UNIQUE KEY `NID` (`NID`),
  ADD KEY `clinic_id` (`clinic_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_medicine`
--
ALTER TABLE `admin_medicine`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appiointment`
--
ALTER TABLE `appiointment`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `covidadmin`
--
ALTER TABLE `covidadmin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `covidpatient`
--
ALTER TABLE `covidpatient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `covidtestrecord`
--
ALTER TABLE `covidtestrecord`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hire`
--
ALTER TABLE `hire`
  MODIFY `hire_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `newappoinment`
--
ALTER TABLE `newappoinment`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `pathologist`
--
ALTER TABLE `pathologist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reporttracking`
--
ALTER TABLE `reporttracking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appiointment`
--
ALTER TABLE `appiointment`
  ADD CONSTRAINT `appiointment_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`),
  ADD CONSTRAINT `appiointment_ibfk_2` FOREIGN KEY (`doc_id`) REFERENCES `doctor` (`doc_id`),
  ADD CONSTRAINT `appiointment_ibfk_3` FOREIGN KEY (`clinic_id`) REFERENCES `clinic` (`clinic_id`);

--
-- Constraints for table `clinic`
--
ALTER TABLE `clinic`
  ADD CONSTRAINT `clinic_ibfk_1` FOREIGN KEY (`location_id`) REFERENCES `location` (`location_id`);

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`clinic_id`) REFERENCES `clinic` (`clinic_id`),
  ADD CONSTRAINT `doctor_ibfk_2` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`),
  ADD CONSTRAINT `doctor_ibfk_3` FOREIGN KEY (`shift_name`) REFERENCES `shift` (`shift_name`);

--
-- Constraints for table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `location_ibfk_1` FOREIGN KEY (`division_id`) REFERENCES `division` (`division_id`);

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `FK_orderdetails_1` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`location_id`) REFERENCES `location` (`location_id`);

--
-- Constraints for table `shift`
--
ALTER TABLE `shift`
  ADD CONSTRAINT `shift_ibfk_1` FOREIGN KEY (`clinic_id`) REFERENCES `clinic` (`clinic_id`),
  ADD CONSTRAINT `shift_ibfk_2` FOREIGN KEY (`doc_id`) REFERENCES `doctor` (`doc_id`),
  ADD CONSTRAINT `shift_ibfk_3` FOREIGN KEY (`ticket_id`) REFERENCES `appiointment` (`ticket_id`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`clinic_id`) REFERENCES `clinic` (`clinic_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
