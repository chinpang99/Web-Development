-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 19, 2019 at 05:33 PM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

DROP TABLE IF EXISTS `announcement`;
CREATE TABLE IF NOT EXISTS `announcement` (
  `ann_id` int(11) NOT NULL AUTO_INCREMENT,
  `ann_name` varchar(255) NOT NULL,
  `ann_content` text NOT NULL,
  `ann_image` varchar(255) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `date_uploaded` date NOT NULL,
  PRIMARY KEY (`ann_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`ann_id`, `ann_name`, `ann_content`, `ann_image`, `teacher_id`, `date_uploaded`) VALUES
(1, 'Reduction of AC energy wastage through clamp meter', 'Hi Clamp meter connected to an AC monitors the current flow and indicates usage (range) through green, orange and red colour codes. The four friends had learnt about capacitor and its use in many electronic appliances in their physics class. Ageing of these, leads to lesser efficiency of the appliance. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n', '../img/eventimage-3.jpg', 1, '2019-01-09'),
(3, 'Enduction of AC energy wastage through clamp meter', 'Clamp meter connected to an AC monitors the current flow and indicates usage (range) through green, orange and red colour codes. The four friends had learnt about capacitor and its use in many electronic appliances in their physics class. Ageing of these, leads to lesser efficiency of the appliance. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '../img/event/image-3.jpg', 3, '2019-04-10'),
(4, 'Geduction of AC energy wastage through clamp meter', 'Clamp meter connected to an AC monitors the current flow and indicates usage (range) through green, orange and red colour codes. The four friends had learnt about capacitor and its use in many electronic appliances in their physics class. Ageing of these, leads to lesser efficiency of the appliance. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '../img/event/home-banner-bg.jpg', 2, '2019-02-13'),
(10, 'HIiiiiiiiiii', 'Venue: HI\r\n\r\nPlace: HI\r\n\r\n\r\nWork: HI', '../img/event/home-banner-bg.jpg', 1, '2019-01-20'),
(11, 'Study is good for you', 'hihihihiihihih', '../img/eventc-4.jpg', 2, '2019-01-21');

-- --------------------------------------------------------

--
-- Table structure for table `chapter`
--

DROP TABLE IF EXISTS `chapter`;
CREATE TABLE IF NOT EXISTS `chapter` (
  `chap_id` int(11) NOT NULL AUTO_INCREMENT,
  `chapter` int(11) NOT NULL,
  `chap_name` varchar(255) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `date_uploaded` date NOT NULL,
  PRIMARY KEY (`chap_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chapter`
--

INSERT INTO `chapter` (`chap_id`, `chapter`, `chap_name`, `teacher_id`, `date_uploaded`) VALUES
(1, 1, 'KEMUNCULAN DAN PERKEMBANGAN NASIONALISME DI ASIA TENGGARA', 1, '2019-01-09'),
(2, 2, 'NASIONALISME DI MALAYSIA SEHINGGA PERANG DUNIA KEDUA', 2, '2019-01-14'),
(4, 3, 'Kesedaran Pembinaan Negara Dan Bangsa', 1, '2019-01-21'),
(5, 1, 'KEMUNCULAN DAN PERKEMBANGAN NASIONALISME DI ASIA TENGGARA', 2, '2019-01-21'),
(6, 3, 'Kesedaran Pembinaan Negara dan Bangsa', 2, '2019-02-05'),
(7, 5, 'hihi', 2, '2019-02-19'),
(8, 7, 'HIHI', 2, '2019-02-19');

-- --------------------------------------------------------

--
-- Table structure for table `classroom`
--

DROP TABLE IF EXISTS `classroom`;
CREATE TABLE IF NOT EXISTS `classroom` (
  `classroom_id` int(11) NOT NULL AUTO_INCREMENT,
  `classroom_name` varchar(50) NOT NULL,
  `access_code` varchar(5) NOT NULL,
  `number_of_students` int(45) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  PRIMARY KEY (`classroom_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classroom`
--

INSERT INTO `classroom` (`classroom_id`, `classroom_name`, `access_code`, `number_of_students`, `teacher_id`) VALUES
(1, '5 Gemilang', 'AZTnt', 20, 1),
(2, '5 Cemerlang', '6pAnr', 25, 2),
(3, '5 Rajin', 'hPM4R', 20, 2),
(5, '5 Bilang', 'mwbJE', 20, 2);

-- --------------------------------------------------------

--
-- Table structure for table `quiz_question`
--

DROP TABLE IF EXISTS `quiz_question`;
CREATE TABLE IF NOT EXISTS `quiz_question` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `chap_id` int(11) NOT NULL,
  `questions` varchar(255) NOT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz_question`
--

INSERT INTO `quiz_question` (`question_id`, `chap_id`, `questions`) VALUES
(18, 1, 'HIHIHI'),
(19, 1, 'Bye'),
(9, 1, 'Sejak abad ke-15, kuasa Barat telah menjalankan dasar imperialisme. Apakah yang dimaksudkan dengan imperialisme?'),
(13, 4, 'Count Camillo Benso di Cavour menyatukan negara Itali melalui kerjasama dengan Napoleon III dari Perancis. Apakah tujuan kerjasaman tersebut?'),
(12, 4, 'Andaikan anda seorang raja pada zaman kerajaan Kesultanan Melayu Melaka. Bagaimanakah anda menentukan sempadan kerajaan atau wilayah anda?'),
(14, 4, 'Apakah maksud daulat dalam konteks Kesultanan Melayu Melaka?'),
(15, 6, 'Andaikan anda seorang raja pada zaman kerajaan Kesultanan Melayu Melaka. Bagaimanakah anda menentukan sempadan kerajaan atau wilayah anda?'),
(16, 6, 'Apakah maksud daulat dalam konteks Kesultanan Melayu Melaka?'),
(26, 5, 'What is my age');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_selection`
--

DROP TABLE IF EXISTS `quiz_selection`;
CREATE TABLE IF NOT EXISTS `quiz_selection` (
  `selection_id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `answer_description` varchar(255) NOT NULL,
  `true_answer` varchar(5) NOT NULL,
  PRIMARY KEY (`selection_id`)
) ENGINE=MyISAM AUTO_INCREMENT=108 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz_selection`
--

INSERT INTO `quiz_selection` (`selection_id`, `question_id`, `answer_description`, `true_answer`) VALUES
(77, 19, 'Bye', 'True'),
(76, 19, 'Bye', 'False'),
(75, 18, 'HIHIHIHI', 'False'),
(43, 9, 'Kepesatan sektor perindustrian', 'True'),
(72, 18, 'HI', 'False'),
(73, 18, 'HIHI', 'True'),
(74, 18, 'HIHIHI', 'False'),
(44, 9, 'Keruntuhan sistem feudal', 'False'),
(45, 9, 'Kejayaan peluasaan kuasa di Eropah', 'False'),
(46, 9, 'Kemunculan sistem birokrasi moden', 'False'),
(47, 12, 'Kesetiaan Rakyat', 'True'),
(48, 12, 'Kegiatan Ekonomi', 'False'),
(49, 12, 'Kekayaan Hasil Bumi', 'False'),
(50, 12, 'Keteguhan Kubu Pertahanan', 'False'),
(51, 13, 'Menentang Austria', 'True'),
(52, 13, 'Menyerang Jerman', 'False'),
(53, 13, 'Memperoleh Vinetia', 'False'),
(54, 13, 'Memulangkan Rom', 'False'),
(55, 14, 'Alat-alat kebesaran diraja', 'False'),
(56, 14, 'Negeri yang ditadbir oleh raja', 'False'),
(57, 14, 'Sistem pemerintahan beraja', 'False'),
(58, 14, 'Raja yang memerintah ', 'True'),
(67, 15, 'Kesetiaan Rakyat', 'True'),
(60, 15, 'Kegiatan Ekonomi', 'False'),
(61, 15, 'Kekayaan Hasil Bumi', 'False'),
(62, 15, 'Keteguhan Kubu Pertahanan', 'False'),
(63, 16, 'Alat-alat kebesaran diraja', 'False'),
(64, 16, 'Negeri yang ditadbir oleh raja', 'False'),
(65, 16, 'Sistem pemerintahan beraja', 'False'),
(66, 16, 'Raja yang memerintah', 'True'),
(107, 26, '20', 'False'),
(106, 26, '19', 'False'),
(105, 26, '16', 'False'),
(104, 26, '15', 'True'),
(78, 19, 'Bye', 'False'),
(79, 19, 'Bye', 'False'),
(80, 20, '3333', 'False'),
(81, 20, '33333', 'False'),
(82, 20, '333333', 'True'),
(83, 20, '333333', 'False');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

DROP TABLE IF EXISTS `review`;
CREATE TABLE IF NOT EXISTS `review` (
  `review_id` int(11) NOT NULL AUTO_INCREMENT,
  `review_title` varchar(10) NOT NULL,
  `review_content` text NOT NULL,
  `review_rating` int(1) NOT NULL,
  `student_id` int(11) NOT NULL,
  `chap_id` int(11) NOT NULL,
  PRIMARY KEY (`review_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `review_title`, `review_content`, `review_rating`, `student_id`, `chap_id`) VALUES
(1, 'Thank you', 'It is very nice in this chapter', 3, 2, 2),
(2, 'Thank you', 'This notes is very useful!!! ', 4, 1, 4),
(3, 'dddd', 'ssssss', 4, 2, 5),
(4, 'HIHI', 'Good', 4, 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_fullname` varchar(255) NOT NULL,
  `student_ic` varchar(12) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_username` varchar(255) NOT NULL,
  `student_password` varchar(255) NOT NULL,
  `student_photo` text,
  `classroom_id` varchar(2) NOT NULL,
  `status` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_fullname`, `student_ic`, `student_email`, `student_username`, `student_password`, `student_photo`, `classroom_id`, `status`) VALUES
(1, 'Chia Chin Pangg', '990723107027', 'ben10chia@gmail.com', 'ali199', '202cb962ac59075b964b07152d234b70', 'img/student/t-3.jpg', '5', 'Enable'),
(2, 'Chin Pang', '990723107171', 'chinpang@outlook.com', 'ali1999', '202cb962ac59075b964b07152d234b70', 'img/student/t-2.jpg', '2', 'Enable'),
(5, 'Terence Lee', '995014857469', 'terence@gmail.com', 'Terence', '202cb962ac59075b964b07152d234b70', '', '3', 'Enable'),
(6, 'Ignatius', '990514784578', 'ignatius@gmail.com', 'Ignatius', '1db82139ca4c10baca704ee1b97e2a26', '', '2', 'Enable'),
(7, 'ttfctcfg', '998765432345', 'jhgjhg@kjhj.com', 'jjhgjhgjh', '19f35354f7d76e15ccf878ef8a50d9dd', NULL, '5', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_answer`
--

DROP TABLE IF EXISTS `student_answer`;
CREATE TABLE IF NOT EXISTS `student_answer` (
  `answer_id` int(11) NOT NULL AUTO_INCREMENT,
  `selection_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  PRIMARY KEY (`answer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_answer`
--

INSERT INTO `student_answer` (`answer_id`, `selection_id`, `student_id`) VALUES
(78, 13, 2),
(77, 82, 2),
(76, 68, 2),
(75, 66, 2),
(74, 60, 2),
(73, 57, 1),
(72, 53, 1),
(71, 48, 1),
(79, 72, 1),
(80, 97, 2),
(81, 106, 2);

-- --------------------------------------------------------

--
-- Table structure for table `supplementary_material`
--

DROP TABLE IF EXISTS `supplementary_material`;
CREATE TABLE IF NOT EXISTS `supplementary_material` (
  `supp_id` int(11) NOT NULL AUTO_INCREMENT,
  `supp_no` int(11) NOT NULL,
  `chap_id` int(11) NOT NULL,
  `supp_name` varchar(255) NOT NULL,
  `supp_path` text NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `date_uploaded` date NOT NULL,
  PRIMARY KEY (`supp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplementary_material`
--

INSERT INTO `supplementary_material` (`supp_id`, `supp_no`, `chap_id`, `supp_name`, `supp_path`, `teacher_id`, `date_uploaded`) VALUES
(2, 2, 1, 'Exercises', 'material/APU Shuttle Services_2019_Version 1 (10 Jan 2019)_0.pdf', 1, '2019-01-19'),
(4, 3, 4, 'Kesedaran', 'material/APU REFERRENCE LETTER.pdf', 1, '2019-01-21');

-- --------------------------------------------------------

--
-- Table structure for table `supplementary_material_type`
--

DROP TABLE IF EXISTS `supplementary_material_type`;
CREATE TABLE IF NOT EXISTS `supplementary_material_type` (
  `supp_no` int(11) NOT NULL AUTO_INCREMENT,
  `supp_type` varchar(10) NOT NULL,
  PRIMARY KEY (`supp_no`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplementary_material_type`
--

INSERT INTO `supplementary_material_type` (`supp_no`, `supp_type`) VALUES
(1, 'Notes'),
(2, 'Tutorial'),
(3, 'KB Notes'),
(4, 'Video');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE IF NOT EXISTS `teacher` (
  `teacher_id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_fullname` varchar(255) NOT NULL,
  `teacher_ic` varchar(12) NOT NULL,
  `teacher_email` varchar(255) NOT NULL,
  `teacher_username` varchar(255) NOT NULL,
  `teacher_password` varchar(255) NOT NULL,
  `teacher_photo` text,
  PRIMARY KEY (`teacher_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `teacher_fullname`, `teacher_ic`, `teacher_email`, `teacher_username`, `teacher_password`, `teacher_photo`) VALUES
(1, 'Seena Zelll', '990721471257', 'chinpang@outlook.com', 'ali', '123', 'img/user/avatar-4.jpg'),
(2, 'Tom Gate', '445741825479', 'tomgate@outlook.com', 'tom', '123', 'img/user/avatar-2.jpg'),
(3, 'Jesia Ben', '252147896547', 'jesiaben@outlook.com', 'jesia', '123', 'img/user/avatar-3.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
