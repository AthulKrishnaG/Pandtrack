-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 21, 2025 at 02:13 PM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pantra`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `c_id` int NOT NULL AUTO_INCREMENT,
  `c_patient` int NOT NULL,
  `c_state` varchar(100) NOT NULL,
  `c_district` varchar(50) NOT NULL,
  `c_visited_places` varchar(500) NOT NULL,
  `c_explain_the_activities` varchar(500) NOT NULL,
  `c_explanation_activities_date` varchar(100) NOT NULL,
  `c_explanation_activities_time` varchar(100) NOT NULL,
  `c_in_date` varchar(50) NOT NULL,
  `c_up_date` varchar(50) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`c_id`, `c_patient`, `c_state`, `c_district`, `c_visited_places`, `c_explain_the_activities`, `c_explanation_activities_date`, `c_explanation_activities_time`, `c_in_date`, `c_up_date`) VALUES
(35, 47, 'Kerala', 'Malappuram', 'Thirur', 'Thunchan Parambu Visit', '2025-06-02', '10:30', '2025-06-19 16:29:57', '2025-06-19 16:29:57'),
(36, 48, 'Kerala', 'Ernakulam', 'Marine Drive', 'Hotel Rajadhani', '2025-06-07', '19:30', '2025-06-19 16:31:33', '2025-06-19 16:31:33'),
(37, 52, 'Kerala', 'Kottayam', 'Guruvayoor', 'Temple Visit', '2025-06-06', '08:40', '2025-06-19 17:53:59', '2025-06-19 17:53:59'),
(38, 51, 'Kerala', 'Kozhikode', 'Focus Mall', 'Purchase', '2025-06-02', '12:00', '2025-06-19 17:58:48', '2025-06-19 17:58:48'),
(39, 51, 'Kerala', 'Thrissur', 'Vadakkunnatha Temple', 'Temple Visit', '2025-05-14', '07:30', '2025-06-19 22:21:49', '2025-06-19 22:21:49'),
(40, 49, 'Kerala', 'Kollam', 'Perumon', 'Visited CE Perumon', '2025-06-05', '13:00', '2025-06-19 22:52:08', '2025-06-19 22:52:08'),
(41, 53, 'Kerala', 'Ernakulam', 'High Court', 'Meeting Advocate', '2025-06-09', '11:00', '2025-06-19 22:57:33', '2025-06-19 22:57:33'),
(42, 55, 'Kerala', 'Kasaragod', 'Focus Mall', 'Purchase', '2025-06-06', '12:15', '2025-06-20 12:13:03', '2025-06-20 12:13:03'),
(43, 50, 'Kerala', 'Wayanad', 'Pookode Lake', 'Water Activities', '2025-06-06', '15:15', '2025-06-21 12:04:29', '2025-06-21 12:04:29'),
(44, 50, 'Kerala', 'Wayanad', 'Pookode Lake', 'Water Activities', '2025-06-06', '15:15', '2025-06-21 12:05:07', '2025-06-21 12:05:07'),
(45, 56, 'Kerala', 'Ernakulam', 'Subhash Park', 'Leisure Time', '2025-06-07', '17:40', '2025-06-21 18:35:54', '2025-06-21 18:35:54'),
(46, 59, 'Kerala', 'Kannur', 'SM Street', 'Purchase', '2025-03-20', '19:30', '2025-06-21 19:29:34', '2025-06-21 19:29:34');

-- --------------------------------------------------------

--
-- Table structure for table `dailyduties`
--

DROP TABLE IF EXISTS `dailyduties`;
CREATE TABLE IF NOT EXISTS `dailyduties` (
  `doctor_duty_id` int NOT NULL AUTO_INCREMENT,
  `doctor_duty_list` varchar(100) NOT NULL,
  `doctor_duty_dept` varchar(100) NOT NULL,
  `doctor_duty_day_and_date` varchar(100) NOT NULL,
  `doctor_duty_fromtime` varchar(100) NOT NULL,
  `doctor_duty_totime` varchar(100) NOT NULL,
  `doctor_duty_indate` varchar(100) NOT NULL,
  `doctor_duty_update` varchar(100) NOT NULL,
  PRIMARY KEY (`doctor_duty_id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dailyduties`
--

INSERT INTO `dailyduties` (`doctor_duty_id`, `doctor_duty_list`, `doctor_duty_dept`, `doctor_duty_day_and_date`, `doctor_duty_fromtime`, `doctor_duty_totime`, `doctor_duty_indate`, `doctor_duty_update`) VALUES
(18, 'Karthik Mohan', 'Cardiology', '2025-07-05', '10:00', '16:00', '2025-06-19 16:59:38', '2025-06-19 16:59:38'),
(24, 'Thomas Philip', 'Psychiatry', '2025-07-11', '10:00', '14:00', '2025-06-21 18:46:55', '2025-06-21 18:48:18'),
(20, 'Indhu P', 'Gynecology', '2025-07-05', '10:00', '16:30', '2025-06-19 17:25:06', '2025-06-19 17:25:06'),
(21, 'Thomas Philip', 'Psychiatry', '2025-07-10', '10:00', '16:00', '2025-06-19 23:01:51', '2025-06-19 23:01:51'),
(22, 'Venugopal', 'Pediatrics', '2025-07-10', '10:00', '16:30', '2025-06-19 23:21:06', '2025-06-19 23:21:06'),
(23, 'Chandran V', 'Orthopedics', '2025-07-08', '09:00', '13:00', '2025-06-20 07:59:30', '2025-06-20 07:59:30'),
(25, 'Syam Kumar', 'General Medicine', '2025-07-09', '10:00', '14:00', '2025-06-21 19:04:36', '2025-06-21 19:04:36');

-- --------------------------------------------------------

--
-- Table structure for table `discharge`
--

DROP TABLE IF EXISTS `discharge`;
CREATE TABLE IF NOT EXISTS `discharge` (
  `discharge_p_id` int NOT NULL AUTO_INCREMENT,
  `discharge_p_name` varchar(100) NOT NULL,
  `discharge_p_gender` varchar(100) NOT NULL,
  `discharge_p_mobilenum` varchar(100) NOT NULL,
  `discharge_p_address` varchar(100) NOT NULL,
  `discharge_p_email` varchar(100) NOT NULL,
  `discharge_p_type` varchar(100) NOT NULL,
  `discharge_p_in_date` varchar(50) NOT NULL,
  `discharge_p_up_date` varchar(50) NOT NULL,
  PRIMARY KEY (`discharge_p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discharge`
--

INSERT INTO `discharge` (`discharge_p_id`, `discharge_p_name`, `discharge_p_gender`, `discharge_p_mobilenum`, `discharge_p_address`, `discharge_p_email`, `discharge_p_type`, `discharge_p_in_date`, `discharge_p_up_date`) VALUES
(51, 'Anso C', 'Male', '9556385628', 'Chengannur,Mavelikkara.', 'anso@gmail.com', 'Corona', '2025-06-19 17:01:47', '2025-06-19 17:01:47'),
(52, 'Mahadev S', 'Male', '9465873256', 'Chavittuvari,Kottayam - 686016', 'mahadevs@gmail.com', 'Corona', '2025-06-19 17:26:34', '2025-06-19 17:26:34'),
(53, 'Theerdha', 'Female', '8576324565', 'Varkala,Thiruvananthapuram', 'theerdha@gmail.com', 'Corona', '2025-06-19 23:02:12', '2025-06-19 23:02:12'),
(54, 'Jeena S', 'Female', '9894357248', 'Petta,Thiruvananthapuram.', 'jeenas@gmail.com', 'Corona', '2025-06-19 23:21:26', '2025-06-19 23:21:26'),
(55, 'Seema G', 'Female', '9895432871', 'Kizhakkekkalayil quarters, opp to kdental care, kudamaloor rd , kottayam', 'seemag@gmail.com', 'Corona', '2025-06-21 18:49:12', '2025-06-21 18:49:12'),
(56, 'Siril T George', 'Male', '9856347654', 'Sarjapur,Bangalore', 'siriltgeorge@gmail.com', 'Fever', '2025-06-21 19:05:25', '2025-06-21 19:05:25'),
(57, 'Sreeni', 'Male', '7567805357', 'Piravom,Ernakulam', 'sreeni@gmail.com', 'Corona', '2025-06-21 19:35:25', '2025-06-21 19:35:25');

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

DROP TABLE IF EXISTS `disease`;
CREATE TABLE IF NOT EXISTS `disease` (
  `d_id` int NOT NULL AUTO_INCREMENT,
  `p_id` int NOT NULL,
  `d_title` varchar(200) NOT NULL,
  `d_date_of_onset` varchar(50) NOT NULL,
  `in_date` varchar(50) NOT NULL,
  `up_date` varchar(50) NOT NULL,
  PRIMARY KEY (`d_id`),
  KEY `fk_disease_patient` (`p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`d_id`, `p_id`, `d_title`, `d_date_of_onset`, `in_date`, `up_date`) VALUES
(42, 0, 'COVID-19', '2025-06-02', '2025-06-19 17:02:32', '2025-06-19 17:02:32'),
(43, 0, 'Ebola', '2025-06-01', '2025-06-19 17:06:39', '2025-06-19 17:06:39'),
(44, 0, 'SARS', '2025-04-17', '2025-06-19 17:27:15', '2025-06-19 17:27:15'),
(45, 0, 'H1N1 (Swine Flu)', '2025-03-07', '2025-06-19 17:27:33', '2025-06-19 17:27:33'),
(46, 0, 'Malaria', '2025-01-01', '2025-06-19 23:02:54', '2025-06-19 23:02:54'),
(47, 0, 'Tuberculosis', '2024-10-09', '2025-06-19 23:21:45', '2025-06-19 23:21:45'),
(48, 0, 'SARS', '2025-03-14', '2025-06-21 18:50:27', '2025-06-21 18:50:27'),
(49, 0, 'Nipah', '2024-12-17', '2025-06-21 19:06:43', '2025-06-21 19:08:57');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
CREATE TABLE IF NOT EXISTS `history` (
  `h_id` int NOT NULL AUTO_INCREMENT,
  `h_patient` int NOT NULL,
  `h_days_after_the_onset_of_the_disease` varchar(200) NOT NULL,
  `h_effective_medicines` varchar(500) NOT NULL,
  `h_in_date` varchar(50) NOT NULL,
  `h_up_date` varchar(50) NOT NULL,
  PRIMARY KEY (`h_id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`h_id`, `h_patient`, `h_days_after_the_onset_of_the_disease`, `h_effective_medicines`, `h_in_date`, `h_up_date`) VALUES
(30, 47, 'After 12 days', 'Ciprofloxacin', '2025-06-19 16:34:34', '2025-06-19 16:34:34'),
(31, 48, 'After 7 days', 'Metoprolol', '2025-06-19 16:34:59', '2025-06-19 16:34:59'),
(32, 48, 'After 12 days', 'Dolo 650, Cold syrup', '2025-06-19 17:18:41', '2025-06-19 17:18:41'),
(33, 49, 'After 12 days', 'Dolo 650, Cold syrup for 5 days only', '2025-06-19 17:19:25', '2025-06-19 17:19:25'),
(34, 50, 'After 7 days', 'Ecospirin', '2025-06-19 17:20:11', '2025-06-19 17:20:11'),
(35, 51, 'After 7 days', 'Ecospirin', '2025-06-19 21:24:16', '2025-06-19 21:24:16'),
(36, 53, 'After 12 days', 'Prednisone', '2025-06-19 22:58:58', '2025-06-19 22:58:58'),
(37, 54, 'After 7 days', 'Aspirin', '2025-06-19 23:15:17', '2025-06-19 23:15:17'),
(38, 56, 'After 7 days', 'Omeprazole', '2025-06-21 18:38:52', '2025-06-21 18:38:52'),
(39, 57, 'After 5 days', 'Paracetamol, Citrizin', '2025-06-21 19:00:45', '2025-06-21 19:00:45'),
(40, 59, 'After 12 days', 'Paracetamol, Citrizin', '2025-06-21 19:37:52', '2025-06-21 19:37:52');

-- --------------------------------------------------------

--
-- Table structure for table `hotspot`
--

DROP TABLE IF EXISTS `hotspot`;
CREATE TABLE IF NOT EXISTS `hotspot` (
  `h_id` int NOT NULL AUTO_INCREMENT,
  `h_state` varchar(100) NOT NULL,
  `h_district` varchar(100) NOT NULL,
  `h_taluk` varchar(100) NOT NULL,
  `h_block` varchar(100) NOT NULL,
  `h_panchayath` varchar(100) NOT NULL,
  `h_ward_no` varchar(100) NOT NULL,
  `h_confirmed_area` varchar(100) NOT NULL,
  `h_in_date` varchar(50) NOT NULL,
  `h_up_date` varchar(50) NOT NULL,
  PRIMARY KEY (`h_id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotspot`
--

INSERT INTO `hotspot` (`h_id`, `h_state`, `h_district`, `h_taluk`, `h_block`, `h_panchayath`, `h_ward_no`, `h_confirmed_area`, `h_in_date`, `h_up_date`) VALUES
(24, 'Kerala', 'Malappuram', 'Anchuthengu', 'Ayoor', 'Perinthalmanna', '12', 'Chuttippara', '2025-06-19 17:09:59', '2025-06-19 17:09:59'),
(25, 'Kerala', 'Pathanamthitta', 'Konni', 'Thenmala', 'Ranni', '03', 'Karukutty', '2025-06-19 17:10:47', '2025-06-19 17:10:47'),
(26, 'Kerala', 'Kozhikode', 'Melukav', 'Mukkam', 'Thamarassery', '14', 'Bepur', '2025-06-19 17:33:44', '2025-06-19 17:33:44'),
(27, 'Kerala', 'Thiruvananthapuram', 'Anchal', 'Chelavoor', 'Varkala', '10', 'Thenmala', '2025-06-19 17:34:51', '2025-06-19 17:34:51'),
(28, 'Kerala', 'Wayanad', 'Vythiri', 'Pookode', 'Kalpetta', '07', 'Chavara', '2025-06-19 23:05:21', '2025-06-19 23:05:21'),
(29, 'Kerala', 'Thrissur', 'Chelakkara', 'Town station', 'Chalakudy', '12', 'Chottanikkara', '2025-06-21 18:53:08', '2025-06-21 18:53:08'),
(30, 'Kerala', 'Ernakulam', 'Puthenkulangara', 'Perumpaikadu', 'Aluva', '12', 'Parampuzha', '2025-06-21 19:13:39', '2025-06-21 19:13:39');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `lid` int NOT NULL AUTO_INCREMENT,
  `luname` varchar(200) NOT NULL,
  `lpass` varchar(200) NOT NULL,
  `lrole` varchar(50) NOT NULL,
  `lflag` varchar(50) NOT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=MyISAM AUTO_INCREMENT=269 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`lid`, `luname`, `lpass`, `lrole`, `lflag`) VALUES
(207, 'admin@gmail.com', 'admin', 'Admin', 'Available'),
(247, 'mahadevs@gmail.com', '9465873256', 'Patient', 'Available'),
(248, 'anso@gmail.com', '9556385628', 'Patient', 'Available'),
(249, 'edwinm@gmail.com', '8567348923', 'Medical Officer', 'Available'),
(250, 'karthikmohan@gmail.com', '9545096723', 'Doctor', 'Available'),
(251, 'chandranv@gmail.com', '7545679832', 'Doctor', 'Available'),
(252, 'arjunchandran@gmail.com', '9834679832', 'Patient', 'Available'),
(253, 'thanul@gmail.com', '7589562354', 'Patient', 'Available'),
(254, 'chandranv@gmail.com', '8545679832', 'Doctor', 'Available'),
(255, 'indhup@gmail.com', '9856673589', 'Doctor', 'Available'),
(256, 'seemag@gmail.com', 'Seema@123', 'Patient', 'Available'),
(257, 'jayaramt@gmail.com', 'Jayaram@123', 'Patient', 'Available'),
(258, 'theerdha@gmail.com', '8576324565', 'Patient', 'Available'),
(259, 'thomasphilip@gmail.com', '7854327964', 'Doctor', 'Available'),
(260, 'jeenas@gmail.com', '9894357248', 'Patient', 'Available'),
(261, 'vickynair@gmail.com', '9834762556', 'Other', 'Available'),
(262, 'thomasmathew@gmail.com', '9865439823', 'Patient', 'Available'),
(263, 'thara@gmail.com', '9867963564', 'Patient', 'Available'),
(264, 'jayakrishnak@gmail.com', '8524477990', 'Other', 'Available'),
(265, 'siriltgeorge@gmail.com', '9856347654', 'Patient', 'Available'),
(266, 'majosiril@gmail.com', '8754329865', 'Other', 'Available'),
(267, 'anupama@gmail.com', 'Anupama@123', 'Patient', 'Available'),
(268, 'sreeni@gmail.com', 'Sreeni@123', 'Patient', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

DROP TABLE IF EXISTS `medicines`;
CREATE TABLE IF NOT EXISTS `medicines` (
  `d_m_id` int NOT NULL AUTO_INCREMENT,
  `d_m_name` varchar(200) NOT NULL,
  `d_m_dose` varchar(100) NOT NULL,
  `d_m_duration` varchar(50) NOT NULL,
  `d_m_indate` varchar(50) NOT NULL,
  `d_m_update` varchar(50) NOT NULL,
  `p_id` int NOT NULL,
  PRIMARY KEY (`d_m_id`),
  KEY `p_id` (`p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`d_m_id`, `d_m_name`, `d_m_dose`, `d_m_duration`, `d_m_indate`, `d_m_update`, `p_id`) VALUES
(27, 'Losartan', '100mg', '4 days', '2025-06-19 17:08:25', '2025-06-19 17:08:25', 0),
(28, 'Atorvastatin', '500mg', '7 days', '2025-06-19 17:08:57', '2025-06-19 17:31:03', 0),
(29, 'Simvastatin', '100 mg', '12 days', '2025-06-19 17:30:03', '2025-06-19 17:31:19', 0),
(30, 'Hydrochlorothiazide', '100 mg', '5 days', '2025-06-19 17:30:46', '2025-06-19 17:31:42', 0),
(31, 'Levothyroxine', '100mg', '14 days', '2025-06-19 23:04:17', '2025-06-19 23:04:17', 0),
(32, 'Azithromycin', '100 mg', '7 days', '2025-06-19 23:22:23', '2025-06-19 23:22:23', 0),
(33, 'Ibuprofen', '10 mg', '4 days', '2025-06-21 19:11:29', '2025-06-21 19:11:29', 0);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `p_id` int NOT NULL AUTO_INCREMENT,
  `p_name` varchar(100) NOT NULL,
  `p_gender` varchar(100) NOT NULL,
  `p_mobilenum` varchar(50) NOT NULL,
  `p_address` varchar(200) NOT NULL,
  `p_email` varchar(200) NOT NULL,
  `p_indate` varchar(50) NOT NULL,
  `p_update` varchar(50) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`p_id`, `p_name`, `p_gender`, `p_mobilenum`, `p_address`, `p_email`, `p_indate`, `p_update`) VALUES
(47, 'Mahadev S', 'Male', '9465873256', 'Chavittuvari,\r\nKottayam - 686016', 'mahadevs@gmail.com', '2025-06-19 16:24:05', '2025-06-19 16:24:44'),
(48, 'Anso C', 'Male', '9556385628', 'Chengannur,\r\nMavelikkara.', 'anso@gmail.com', '2025-06-19 16:25:37', '2025-06-19 16:25:53'),
(49, 'Arjun Chandran', 'Male', '9834679832', 'Carithas Jn, K R  Bakery, Ettumanoor, Kottayam', 'arjunchandran@gmail.com', '2025-06-19 17:14:15', '2025-06-21 10:37:40'),
(50, 'Thanu L', 'Female', '7589562354', 'KUDAMALOOR RD, \r\nKUMARANALLOOR, \r\nKOTTAYAM', 'thanul@gmail.com', '2025-06-19 17:16:41', '2025-06-19 17:16:41'),
(51, 'Seema G', 'Female', '9895432871', 'Kizhakkekkalayil quarters, opp to kdental care, kudamaloor rd , kottayam', 'seemag@gmail.com', '2025-06-19 17:38:06', '2025-06-19 17:38:06'),
(52, 'Jayaram T', 'Male', '9943769832', 'Chelakkara,\r\nThrissur.', 'jayaramt@gmail.com', '2025-06-19 17:50:42', '2025-06-19 17:50:42'),
(53, 'Theerdha', 'Female', '8576324565', 'Varkala,\r\nTemple Junction,\r\nThiruvananthapuram', 'theerdha@gmail.com', '2025-06-19 22:55:27', '2025-06-21 11:55:20'),
(54, 'Jeena S', 'Female', '9894357248', 'Pettah,\r\nVeli,\r\nThiruvananthapuram.', 'jeenas@gmail.com', '2025-06-19 23:14:24', '2025-06-21 11:55:51'),
(55, 'Thomas Mathew', 'Male', '9865439823', 'Chengannur\r\nMavelikkara', 'thomasmathew@gmail.com', '2025-06-20 12:10:58', '2025-06-20 12:10:58'),
(56, 'Thara Syam', 'Female', '9867963564', 'Chengannoor,\r\nMavelikkara.', 'thara@gmail.com', '2025-06-21 18:30:15', '2025-06-21 18:30:15'),
(57, 'Siril T George', 'Male', '9856347654', 'Sarjapur,\r\nBangalore', 'siriltgeorge@gmail.com', '2025-06-21 18:58:47', '2025-06-21 18:58:47'),
(58, 'Anupama', 'Female', '8932545379', 'Nedumpally,\r\nParampuzha,\r\nKottayam.', 'anupama@gmail.com', '2025-06-21 19:19:48', '2025-06-21 19:19:48'),
(59, 'Sreeni', 'Male', '7567805357', 'Piravom,\r\nErnakulam', 'sreeni@gmail.com', '2025-06-21 19:25:31', '2025-06-21 19:25:31');

-- --------------------------------------------------------

--
-- Table structure for table `primary_contact`
--

DROP TABLE IF EXISTS `primary_contact`;
CREATE TABLE IF NOT EXISTS `primary_contact` (
  `c_p_id` int NOT NULL AUTO_INCREMENT,
  `c_p_patient` int NOT NULL,
  `c_p_state` varchar(100) NOT NULL,
  `c_p_person` varchar(100) NOT NULL,
  `c_p_district` varchar(100) NOT NULL,
  `c_p_town` varchar(200) NOT NULL,
  `c_p_place` varchar(200) NOT NULL,
  `c_p_in_date` varchar(50) NOT NULL,
  `c_p_up_date` varchar(50) NOT NULL,
  PRIMARY KEY (`c_p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `primary_contact`
--

INSERT INTO `primary_contact` (`c_p_id`, `c_p_patient`, `c_p_state`, `c_p_person`, `c_p_district`, `c_p_town`, `c_p_place`, `c_p_in_date`, `c_p_up_date`) VALUES
(29, 47, 'Kerala', 'Sindhu S', 'Ernakulam', 'Kumaranalloor', 'Temple Road', '2025-06-19 16:33:23', '2025-06-19 23:30:34'),
(30, 48, 'Kerala', 'Jeslin R', 'Pathanamthitta', 'Ranni', 'Konni', '2025-06-19 16:34:08', '2025-06-19 23:34:25'),
(31, 52, 'Kerala', 'Deepa J', 'Thrissur', 'Chelakkara', 'Temple', '2025-06-19 17:55:06', '2025-06-19 23:34:41'),
(32, 51, 'Kerala', 'Jayasree Arjun', 'Kozhikode', 'Vadakara', 'Panikkotti', '2025-06-19 17:59:38', '2025-06-19 23:34:57'),
(33, 51, 'Kerala', 'Naveen', 'Ernakulam', 'Aluva', 'St Alberts College', '2025-06-19 22:15:30', '2025-06-19 22:15:30'),
(34, 53, 'Kerala', 'Adv. Vijay Sankar', 'Ernakulam', 'Edappally', 'Palarivattom', '2025-06-19 22:58:38', '2025-06-19 23:35:12'),
(35, 50, 'Kerala', 'Leela Devi', 'Alappuzha', 'Mullackal', 'Pitchu Iyer Junction', '2025-06-19 23:26:12', '2025-06-19 23:35:26'),
(36, 49, 'Kerala', 'Adithyan ', 'Kottayam', 'Kumaranalloor', 'Vadakkenada', '2025-06-19 23:29:32', '2025-06-19 23:29:32'),
(37, 50, 'Kerala', 'Athul Krishna', 'Kottayam', 'Kottayam', 'Kumaranalloor', '2025-06-21 12:05:55', '2025-06-21 12:05:55'),
(38, 56, 'Kerala', 'Syam Sundar', 'Alappuzha', 'Mavelikkara', 'Vechuchira', '2025-06-21 18:37:50', '2025-06-21 18:37:50'),
(39, 59, 'Kerala', 'Neethu', 'Kollam', 'Chelachuvadu', 'Ottappalam', '2025-06-21 19:32:29', '2025-06-21 19:32:29');

-- --------------------------------------------------------

--
-- Table structure for table `source`
--

DROP TABLE IF EXISTS `source`;
CREATE TABLE IF NOT EXISTS `source` (
  `d_source_id` int NOT NULL AUTO_INCREMENT,
  `d_source_patient` int NOT NULL,
  `d_source_confirmed_location` varchar(50) NOT NULL,
  `d_source_state` varchar(50) NOT NULL,
  `d_source_district` varchar(50) NOT NULL,
  `d_source_panchayath` varchar(50) NOT NULL,
  `d_source_ward_no` int NOT NULL,
  `d_source_in_date` varchar(50) NOT NULL,
  `d_source_up_date` varchar(50) NOT NULL,
  PRIMARY KEY (`d_source_id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `source`
--

INSERT INTO `source` (`d_source_id`, `d_source_patient`, `d_source_confirmed_location`, `d_source_state`, `d_source_district`, `d_source_panchayath`, `d_source_ward_no`, `d_source_in_date`, `d_source_up_date`) VALUES
(39, 47, 'Thirunakkara', 'Kerala', 'Kottayam', 'Arpookkara', 11, '2025-06-19 16:26:39', '2025-06-19 16:26:39'),
(40, 48, 'Cheruvally', 'Kerala', 'Pathanamthitta', 'Mevoor', 12, '2025-06-19 16:28:37', '2025-06-19 16:28:37'),
(41, 52, 'Koduvayoor', 'Kerala', 'Kottayam', 'Velloor', 9, '2025-06-19 17:52:43', '2025-06-19 17:52:43'),
(42, 51, 'S M Street', 'Kerala', 'Kottayam', 'Pathiyarakkara', 7, '2025-06-19 17:57:39', '2025-06-19 17:57:39'),
(43, 53, 'CAPE Office', 'Kerala', 'Thiruvananthapuram', 'Muttathara', 9, '2025-06-19 22:56:11', '2025-06-19 22:56:11'),
(44, 55, 'Nileswaram', 'Kerala', 'Kasaragod', 'velloor', 14, '2025-06-20 12:11:41', '2025-06-20 12:11:41'),
(45, 50, 'Nileswaram', 'Kerala', 'Kasaragod', 'Thondayad', 11, '2025-06-21 12:03:33', '2025-06-21 12:03:33'),
(46, 56, 'Kurissum moodu', 'Kerala', 'Kottayam', 'Thekkum Padi', 6, '2025-06-21 18:32:42', '2025-06-21 18:32:42'),
(47, 59, 'Dharmadam', 'Kerala', 'Kannur', 'Thondayad', 11, '2025-06-21 19:28:25', '2025-06-21 19:28:25');

-- --------------------------------------------------------

--
-- Table structure for table `symptoms`
--

DROP TABLE IF EXISTS `symptoms`;
CREATE TABLE IF NOT EXISTS `symptoms` (
  `d_s_id` int NOT NULL AUTO_INCREMENT,
  `p_id` int NOT NULL,
  `d_s_name` varchar(100) NOT NULL,
  `d_s_date_of_onset` varchar(50) NOT NULL,
  `in_date` varchar(50) NOT NULL,
  `up_date` varchar(50) NOT NULL,
  PRIMARY KEY (`d_s_id`),
  KEY `fk_symptoms_patient` (`p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `symptoms`
--

INSERT INTO `symptoms` (`d_s_id`, `p_id`, `d_s_name`, `d_s_date_of_onset`, `in_date`, `up_date`) VALUES
(37, 0, 'Loss of Taste or Smell', '2025-06-02', '2025-06-19 17:07:17', '2025-06-19 17:07:17'),
(38, 0, 'Muscle or Body Aches', '2025-06-03', '2025-06-19 17:07:36', '2025-06-19 17:07:36'),
(39, 0, 'Shortness of Breath', '2025-02-03', '2025-06-19 17:28:13', '2025-06-19 17:28:13'),
(40, 0, 'Sore Throat', '2025-02-04', '2025-06-19 17:28:47', '2025-06-19 17:28:47'),
(41, 0, 'Nasal Congestion', '2025-02-07', '2025-06-19 23:03:52', '2025-06-19 23:03:52'),
(42, 0, 'Diarrhea', '2024-08-07', '2025-06-19 23:22:02', '2025-06-19 23:22:02'),
(43, 0, 'Fatigue', '2025-03-04', '2025-06-21 19:10:15', '2025-06-21 19:10:15');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `uid` int NOT NULL AUTO_INCREMENT,
  `uempid` varchar(20) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `udesignation` varchar(150) NOT NULL,
  `uemail` varchar(150) NOT NULL,
  `umob` varchar(15) NOT NULL,
  `uimg` varchar(500) NOT NULL,
  `urole` varchar(50) NOT NULL,
  `ustatus` varchar(25) NOT NULL,
  `u_in_date` varchar(50) NOT NULL,
  `u_up_date` varchar(50) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uempid`, `uname`, `udesignation`, `uemail`, `umob`, `uimg`, `urole`, `ustatus`, `u_in_date`, `u_up_date`) VALUES
(1, 'E100', 'Admin', 'System Admin', 'admin@gmail.com', '9854237643', '1.png', 'Admin', 'Available', '', ''),
(17, 'E107', 'Thomas Philip', 'Doctor', 'thomasphilip@gmail.com', '7854327964', '1.jpg', 'Doctor', '', '2025-06-19 23:00:51', '2025-06-19 23:00:51'),
(16, 'E106', 'Indhu P', 'Doctor', 'indhup@gmail.com', '9856673589', '3.jpg', 'Doctor', '', '2025-06-19 17:24:21', '2025-06-19 17:24:21'),
(15, 'E105', 'Chandran V', 'Doctor', 'chandranv@gmail.com', '8545679832', '2.jpg', 'Doctor', '', '2025-06-19 17:22:23', '2025-06-19 17:22:23'),
(19, 'E109', 'Jayakrishna K', 'Pharmacist', 'jayakrishnak@gmail.com', '8524477990', '10.jpg', 'Other', '', '2025-06-21 18:44:51', '2025-06-21 18:44:51'),
(13, 'E104', 'Karthik Mohan', 'Doctor', 'karthikmohan@gmail.com', '9545096723', '4.jpg', 'Doctor', '', '2025-06-19 16:56:22', '2025-06-19 16:56:22'),
(10, 'E102', 'Rajkumar K', 'Field Health Worker', 'rajkumar@gmail.com', '9978654368', '6.jpg', 'Other', '', '2025-06-19 10:30:11', '2025-06-19 10:30:11'),
(11, 'E103', 'Syam Kumar', 'Rural Medical Practitioner (RMP)', 'syamkumar@gmail.com', '9578654768', '11.jpg', 'Doctor', '', '2025-06-19 11:32:01', '2025-06-19 11:32:01'),
(12, 'E101', 'Edwin Manuel', 'Medical Officer', 'edwinm@gmail.com', '8567348923', '1.jpg', 'Medical Officer', '', '2025-06-19 16:38:20', '2025-06-19 16:38:20'),
(18, 'E108', 'Vicky Nair', 'Health Inspector', 'vickynair@gmail.com', '9834762556', '1.jpg', 'Other', '', '2025-06-19 23:18:54', '2025-06-19 23:18:54'),
(20, 'E10', 'Majo Siril', 'Staff Nurse', 'majosiril@gmail.com', '8754329865', '5.jpg', 'Other', '', '2025-06-21 19:03:00', '2025-06-21 19:03:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
