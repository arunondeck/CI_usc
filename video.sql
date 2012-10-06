-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 14, 2012 at 07:24 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `unilifetv`
--

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `description` varchar(256) NOT NULL,
  `category` varchar(128) NOT NULL,
  `category2` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `editorpick` tinyint(1) NOT NULL DEFAULT '0',
  `rating` float NOT NULL DEFAULT '3',
  `watched` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`),
  UNIQUE KEY `url` (`url`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `title`, `description`, `category`, `category2`, `url`, `thumbnail`, `date`, `editorpick`, `rating`, `watched`) VALUES
(1, 'The PayOff Time', 'The PayOff Time : A patient centered framework for avoiding harm', 'About Us', 'News', 'Q5ZDM4MzoN6KyEZx5Mp7eVbKQE-RLrqn', 'videothumbs/1.jpg', '2012-03-03 13:20:00', 0, 3.35, 3),
(2, 'Portal Hypertension', 'Portal Hypertension: Mechanisms and Clinical Links', 'News', 'Devices', 'phcWhlMzrclhw6UTONXvVMN1H6sWn65s', 'videothumbs/2.jpg', '2012-03-03 13:23:00', 1, 4.97, 5),
(3, 'Mutation Disease', 'Inhibition in Mutation Related Breast Disease', 'About Us', 'Press', 'dzMzdkMzqhU1YBlRMqpQr1Pwpv8Z8eHw', 'videothumbs/3.jpg', '2012-03-03 13:21:18', 1, 3.98, 1),
(4, 'NYU Langone Medical Cener', 'New York University', 'Factory', 'Devices', 'VjdDdmMzrsnnts9QHWUHwt3CG5WRP7cB', 'videothumbs/4.jpg', '2012-03-03 13:21:18', 0, 3.8, 9),
(5, 'Pain & Regional Anesthesia', 'Pain Regional Anesthesia - New York University', 'Press', 'Factory', '92MXcxMjrtZMFjNszs8CsClM6wuxbvYt', 'videothumbs/5.jpg', '2012-03-03 14:46:41', 1, 1.98, 2),
(6, 'Public Health', 'Public Health Grand Grounds', 'Devices', 'Factory', '5pMncxMjrpx_FsAlA1VxipAaW--nk5Ay', 'videothumbs/6.jpg', '2012-03-03 14:46:41', 0, 4.3, 8),
(7, 'Art Of Medicine', 'Art Of Medicine: A modern representation', 'About Us', 'Press', '9xaXZvMzpiDS4xLABrcAsmVH7elh1nN9', 'videothumbs/7.jpg', '2012-03-03 14:48:22', 1, 2.54, 4),
(8, 'NYU Langone Medical Center', 'OSR Town Hall: Click Updates', 'News', 'Press', '5saWJzMjoQXttRz_T_Z0FRqgowHCQ9vu', 'videothumbs/8.jpg', '2012-03-03 14:48:22', 0, 2.25, 9),
(9, 'University', 'New York University', 'News', 'Factory', '14dnB4MjqQ0CiiuxN-ESioKnwOE46ICX', 'videothumbs/9.jpg', '2012-03-05 10:20:50', 0, 2.25, 8),
(10, 'NYU Medical', 'NYU Medical Gran Rounds Clinical Vignette', 'Devices', '', 'hycXB4MjogVLg5Pk5K7BSNEfTrdBzZ4o', 'videothumbs/10.jpg', '2012-03-05 10:20:50', 1, 4.1, 4),
(11, 'HIV Quality Measures', 'Development and Implementation of HIV Quality Measures', 'Press', '', 'M0NGd2Mjp_sbUk1-R1TgHmjY3x_bjtPB', 'videothumbs/20.jpg', '2012-03-05 10:22:25', 0, 3.9, 7),
(12, 'Huron Life Sciences', 'Enhancing Protection for Research Subjects', 'Factory', '', 'AyY295MjoWtcdDiCoiHWT0EXWTXm3bQ9', 'videothumbs/12.jpg', '2012-03-05 10:22:25', 1, 3, 6),
(14, 'Psychiatry', 'Columbia Psychiatry', 'Category Test', 'Category2 Test', 'xvaHU4MzqkPrYiJOVAq5s5yH4VhSbODR', 'videothumbs/30.jpg', '2012-03-07 07:34:17', 0, 3, 1),
(15, 'Alzheimer''s Disease', 'Alzheimer''s Disease: are we making any progress', 'Category Test', 'Category2 Test', 'lwYTlqMjoNb85l0KiJqMQwQGdj5rsYCQ', 'videothumbs/32.jpg', '2012-03-07 07:36:10', 0, 3, 1),
(16, 'Pro Active', 'Pro Active the productive network', 'Current Category', 'Category 2', 'N4MDZrMzoTNnhQYnuHQVoohkObgPukTL', 'videothumbs/31.jpg', '2012-03-07 10:55:54', 0, 3, 1),
(32, 'Veves: Inflammation and Wound Healing in Diabetes', '5-12-11 Innovations in Complex Vascular & Endovascular Interventions: Wound', 'Factory', '', '9ta3RpMjqqpcY_qNGa2toKAgUE4NJNh4', 'videothumbs/Veves.jpg', '2012-03-12 16:04:34', 1, 3, 1),
(33, 'Veves: What is the hype and what is the science of Wound Debridement?', '5-12-11 Innovations in Complex Vascular & Endovascular Interventions: Vascular', 'News', '', 'ZjY3RpMjoKOMqfGKsQhy_FyBvbG9MfKu', 'videothumbs/Veves2.jpg', '2012-03-12 16:10:14', 1, 3, 1),
(34, 'Winfree: Treatment of Diabetic Peripheral Neuropathy', '5-12-11 Innovations in Complex Vascular & Endovascular Interventions: Wound', 'Press', '', 'A3a3RpMjotxSSLnbbT4RIW839U3kFert', 'videothumbs/63.jpg', '2012-03-12 16:13:13', 1, 3, 1),
(35, 'Woo: Medtronic Endurant Stent Graft', '5-12-11 Innovations in Complex Vascular & Endovascular Interventions: Vascular', 'Factory', '', 'Y3Y3RpMjp_FCv4EHYESCLUJXNObttLjk', 'videothumbs/697.jpg', '2012-03-12 16:16:03', 0, 3, 1),
(36, 'New ACGME Work Hour Regulations: Are Things Really Getting Better?', 'Ze''ev Levin MD, Marta Maczaj MD, Eve Caligor MD', 'News', '', 'JpNThkMjoHAkpebw7ytenoALMA7JH38z', 'videothumbs/New_ACGME_Work_Hour_Regulations3A_Are_Things_Really_Getting_Better3F.jpg', '2012-03-12 16:19:31', 0, 3, 1),
(37, 'Unilife Facility: Finishing Touches', 'Unilife Facility: Finishing Touches', 'About Us', '', 'MwaDZ3MTotw3Upwec3kRW1b_tXyqMGfl', 'videothumbs/Unilife20Facility3A20Finishing20Touches.jpg', '2012-03-12 16:23:49', 1, 3, 1),
(41, 'Unilife COO: Ramin Mojdeh', 'Unilife COO Ramin Mojdeh explains the exciting production developments taking place at Unilife.', 'About Us', '', 'oyNWpiMjq-RxTVTIELNDWqslDkis_bOD', 'videothumbs/Unilife20COO3A20Ramin20Mojdeh.jpg', '2012-03-12 16:38:21', 1, 3, 1),
(42, 'Public Health Grand Rounds', 'This session of CDC’s Public Health Grand Rounds addresses how through early identification and treatment, newborn screening provides an opportunity for significant reductions in newborn deaths.', 'About Us,Factory,Devices', '', 'M3MHR3Mjog-xMSv6TkDeTaIToX_yG_lW', 'videothumbs/Public20Health20Grand20Rounds.jpg', '2012-03-13 13:02:34', 1, 3, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
