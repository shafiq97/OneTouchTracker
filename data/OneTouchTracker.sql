-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2020 at 04:48 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `OneTouchTracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `arrival`
--

CREATE TABLE `arrival` (
  `id` int(11) NOT NULL,
  `sid` varchar(100) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `date` varchar(15) NOT NULL,
  `intime` varchar(35) NOT NULL,
  `outtime` varchar(35) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `arrival`
--

INSERT INTO `arrival` (`id`, `sid`, `sname`, `contact`, `date`, `intime`, `outtime`) VALUES
(6, 'aaaaaaaaaa', 'sfsfsf', '0111991818', '2020-Dec-30', '06:00', '07:00'),
(5, 'aaaaaaaaaa', 'sfsfsf', '0111991818', '2020-Dec-30', '11:20:31pm', '11:20:33pm'),
(4, 'aaaaaaaaaa', 'sfsfsf', '0111991818', '2020-Dec-30', '07:30:00am', '12:30:01pm'),
(7, 'aaaaaaaaaa', 'sfsfsf', '0111991818', '2020-Dec-30', '07:20', '23:30'),
(8, 'aaaaaaaaaa', 'sfsfsf', '0111991818', '2020-Dec-30', '23:30', '');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `cid` int(10) NOT NULL,
  `school` varchar(100) NOT NULL,
  `grade` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`cid`, `school`, `grade`, `class`) VALUES
(1, 'Primary School', 'One', '1A'),
(2, 'Primary School', 'Two', '2A'),
(3, 'Primary School', 'Three', '3A'),
(4, 'Primary School', 'Four', '4A'),
(5, 'Primary School', 'Five', '5A');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `eventid` varchar(50) NOT NULL,
  `eimage` varchar(50) NOT NULL,
  `eventname` varchar(100) NOT NULL,
  `eventdate` varchar(15) NOT NULL,
  `eventtime` varchar(35) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`eventid`, `eimage`, `eventname`, `eventdate`, `eventtime`) VALUES
('1', 'healthDay.jpg', 'Health Fair', '2021-01-30', '10:00AM - 12:00PM'),
('2', 'sportday.png', 'Sports Day', '2021-04-11', '08:00AM - 01:30PM'),
('3', 'cocuDay.png', 'Co-Curriculum Day', '2021-05-15', '08:30AM - 01:30PM'),
('4', 'codesForBeginner.png', 'Codes For Beginner', '2021-05-18', '10:00AM - 01:00PM'),
('5', 'canteenDay.png', 'Canteen Day', '2021-06-21', '10:00AM - 12:00PM'),
('6', 'colorFunRun.png', 'Color Fun Run', '2021-07-22', '08:00AM - 12:00PM');

-- --------------------------------------------------------

--
-- Table structure for table `examsched`
--

CREATE TABLE `examsched` (
  `examid` varchar(50) NOT NULL,
  `sid` varchar(100) NOT NULL,
  `grade` varchar(100) NOT NULL,
  `date` varchar(15) NOT NULL,
  `time_start` varchar(15) NOT NULL,
  `time_end` varchar(15) NOT NULL,
  `subject` varchar(15) NOT NULL,
  `venue` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examsched`
--

INSERT INTO `examsched` (`examid`, `sid`, `grade`, `date`, `time_start`, `time_end`, `subject`, `venue`) VALUES
('1', '0004287829', 'Two', '2021-08-09', '7:00am', '8:00am', 'English', 'Classroom'),
('2', '0004291336', 'Three', '2021-08-10', '7:00am', '8:00am', 'English', 'Examination Hall A');

-- --------------------------------------------------------

-- Table structure for table `examresult`
--

CREATE TABLE `examresult` (
  `sname` varchar(100) NOT NULL,
  `sid` varchar(100) NOT NULL,
  `examid` varchar(50) NOT NULL,  
  `subject` varchar(15) NOT NULL,
  `result` varchar(100) NOT NULL
 
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examresult`
--

INSERT INTO `examresult` ( `sname`,`sid`,`examid`,`subject`, `result`) VALUES
('Jyotsna D','0002671255', 1, 'English', 'A');
-- --------------------------------------------------------

--
-- Table structure for table `ldetail`
--

CREATE TABLE `ldetail` (
  `sid` varchar(50) NOT NULL,
  `ldetail` varchar(200) NOT NULL,
  `fdate` varchar(15) NOT NULL,
  `tdate` varchar(15) NOT NULL,
  `date` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ldetail`
--

INSERT INTO `ldetail` (`sid`, `ldetail`, `fdate`, `tdate`, `date`) VALUES
('1', 'not well', '2021-02-06', '2021-02-07', '2021-02-05');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `newsid` varchar(50) NOT NULL,
  `newsimage` varchar(50) NOT NULL,
  `newstopic` varchar(100) NOT NULL,
  `newsdate` varchar(15) NOT NULL,
  `newsdesc` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`newsid`, `newsimage`, `newstopic`, `newsdate`, `newsdesc`) VALUES
('1', 'headmaster.png', 'Congratulations To Our Headmaster!', '2021-01-30', 'Mr. Albus Dumbledore, who just earned an award at the Ministry of Education for outstanding achievements throughout his career'),
('2', 'newspaper.png', 'Head Of Prefect Featured In The New Straits Times', '2021-01-11', 'Get the inspirations from our Head Prefect, Hermione Granger that lead her nominated best prefect in our district this year'),
('3', 'alumni.jpg', 'Alumni Success', '2021-02-15', 'Get inspires how our remarkable students success in continuing their studies in higher education.'),
('4', 'artwork.jpg', 'Student Artwork Shown In Youth Exhibit', '2021-03-11', 'Artwork by our 3rd Grade student is on the downtown of Youth Exhibit.'),
('5', 'spelling.jpg', '10 Students Qualify For Spelling Bee', '2021-04-21', 'Congrats to students qualifying for the school spelling bee!'),
('6', 'volunteer.png', 'Searching For Volunteers', '2021-05-10', 'Recreation Club is welcoming any volunteers for their new program.');

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `pid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `pname` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`pid`, `password`, `pname`) VALUES
('abc', 'abc', 'T desai'),
('bae', 'bae', 'Bae Tong'),
('xyz', 'xyz', 'P'),
('pqr', 'pqr', 'Abdullah'),
('faiz', 'faiz', 'Faizal M'),
('fendi', 'fendi', 'Cheong Lai'),
('khan', 'khan', 'Amir Khan'),
('amirkhan', 'amirkhan', 'Amir Khan'),
('alia', 'alia', 'alia');

-- --------------------------------------------------------

--
-- Table structure for table `sched`
--

CREATE TABLE `sched` (
  `scid` varchar(50) NOT NULL,
  `grade` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `day` varchar(50) NOT NULL,
  `time_start` varchar(15) NOT NULL,
  `time_end` varchar(15) NOT NULL,
  `subject` varchar(15) NOT NULL,
  `teachername` varchar(100) NOT NULL,
  `venue` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sched`
--

INSERT INTO `sched` (`scid`, `grade`, `class`, `day`, `time_start`, `time_end`, `subject`, `teachername`, `venue`) VALUES
('1', 'One', 'A', 'Monday', '8:00am', '9:00am', 'English', 'Mrs. Mei Li', 'Library'),
('2', 'One', 'A', 'Monday', '9:00am', '10:30am', 'Math', 'Mr. Jamal', 'Classroom'),
('3', 'One', 'A', 'Monday', '11:00am', '12:30am', 'Science', 'Ms. Soo Yin', 'Lab 4'),
('4', 'One', 'A', 'Tuesday', '8:00am', '9:00am', 'Malay', 'Mr. Rosli', 'Classroom'),
('5', 'One', 'A', 'Tuesday', '9:00am', '10:30am', 'Civics', 'Mr. Khairul', 'Library'),
('6', 'One', 'A', 'Tuesday', '11:00am', '12:30am', 'History', 'Ms. Suzana', 'Classroom'),
('7', 'One', 'A', 'Wednesday', '8:00am', '9:00am', 'Geography', 'Mr. Zaidi', 'Classroom'),
('8', 'One', 'A', 'Wednesday', '9:00am', '10:30am', 'English', 'Ms. Anis', 'Art Classroom'),
('9', 'One', 'A', 'Wednesday', '11:00am', '12:30am', 'Science', 'Ms. Soo Yin', 'Lab 4'),
('10', 'One', 'A', 'Thursday', '8:00am', '9:00am', 'Malay', 'Mr. Rosli', 'Classroom'),
('11', 'One', 'A', 'Thursday', '9:00am', '10:30am', 'Civics', 'Mr. Khairul', 'Library'),
('12', 'One', 'A', 'Thursday', '11:00am', '12:30am', 'History', 'Ms. Suzana', 'Classroom'),
('13', 'One', 'A', 'Friday', '8:00am', '9:00am', 'ICT', 'Mr. Khairul', 'ICT Lab'),
('14', 'One', 'A', 'Friday', '9:00am', '10:30am', 'Math', 'Mr. Jamal', 'Classroom'),
('15', 'One', 'A', 'Friday', '11:00am', '12:00am', 'Civics', 'Mr. Kamarul', 'Library'),
('16', 'Two', 'A', 'Monday', '8:00am', '9:00am', 'Science', 'Mrs. Norliza', 'Classroom'),
('17', 'Two', 'A', 'Monday', '9:00am', '10:30am', 'Civis', 'Mr. Jamal', 'Classroom'),
('18', 'Two', 'A', 'Monday', '11:00am', '12:30am', 'ICT', 'Mr. Khairul', 'Computer Lab'),
('19', 'Two', 'A', 'Tuesday', '8:00am', '9:00am', 'Malay', 'Mr. Rosli', 'Classroom'),
('20', 'Two', 'A', 'Tuesday', '9:00am', '10:30am', 'ICT', 'Mr. Khairul', 'Computer Lab'),
('21', 'Two', 'A', 'Tuesday', '11:00am', '12:30am', 'History', 'Ms. Suzana', 'Classroom'),
('22', 'Two', 'A', 'Wednesday', '8:00am', '9:00am', 'History', 'Mr. Saiful', 'Classroom'),
('23', 'Two', 'A', 'Wednesday', '9:00am', '10:30am', 'ICT', 'Mr. Khairul', 'Computer Lab'),
('24', 'Two', 'A', 'Wednesday', '11:00am', '12:30am', 'Science', 'Ms. Soo Yin', 'Lab 4'),
('25', 'Two', 'A', 'Thursday', '8:00am', '9:00am', 'English', 'Mr. Rosli', 'Classroom'),
('26', 'Two', 'A', 'Thursday', '9:00am', '10:30am', 'Civics', 'Mr. Khairul', 'Library'),
('27', 'Two', 'A', 'Thursday', '11:00am', '12:30am', 'Malay', 'Ms. Alis', 'Classroom'),
('29', 'Two', 'A', 'Friday', '8:00am', '9:00am', 'ICT', 'Mr. Khairul', 'ICT Lab'),
('30', 'Two', 'A', 'Friday', '9:00am', '10:30am', 'Math', 'Mr. Jamal', 'Classroom'),
('31', 'Three', 'A', 'Friday', '11:00am', '12:00am', 'ICT', 'Mr. Khairul', 'Computer Lab'),
('32', 'Three', 'A', 'Monday', '8:00am', '9:00am', 'Art', 'Mrs. Norliza', 'Classroom'),
('33', 'Three', 'A', 'Monday', '9:00am', '10:30am', 'Civics', 'Mr. Kamarul', 'Library'),
('34', 'Three', 'A', 'Monday', '11:00am', '12:30am', 'Malay', 'Ms. Alis', 'Classroom'),
('35', 'Three', 'A', 'Tuesday', '8:00am', '9:00am', 'Malay', 'Mr. Rosli', 'Classroom'),
('36', 'Three', 'A', 'Tuesday', '9:00am', '10:30am', 'Math', 'Mr. Khairul', 'Library'),
('37', 'Three', 'A', 'Tuesday', '11:00am', '12:30am', 'ICT', 'Mr. Khairul', 'Computer Lab'),
('38', 'Three', 'A', 'Wednesday', '8:00am', '9:00am', 'ICT', 'Mr. Saiful', 'Library'),
('39', 'Three', 'A', 'Wednesday', '9:00am', '10:30am', 'English', 'Ms. Anis', 'Art Classroom'),
('40', 'Three', 'A', 'Wednesday', '11:00am', '12:30am', 'Science', 'Ms. Soo Yin', 'Lab 4'),
('41', 'Three', 'A', 'Thursday', '8:00am', '9:00am', 'Civics', 'Mr. Kamarul', 'Library'),
('42', 'Three', 'A', 'Thursday', '9:00am', '10:30am', 'Civics', 'Mr. Khairul', 'Library'),
('43', 'Three', 'A', 'Thursday', '11:00am', '12:30am', 'Math', 'Ms. Suzana', 'Classroom'),
('44', 'Three', 'A', 'Friday', '8:00am', '9:00am', 'ICT', 'Mr. Khairul', 'ICT Lab'),
('45', 'Three', 'A', 'Friday', '9:00am', '10:30am', 'Math', 'Mr. Jamal', 'Classroom'),
('46', 'Four', 'A', 'Friday', '11:00am', '12:00am', 'Art', 'Ms. Suzana', 'Classroom'),
('47', 'Four', 'A', 'Monday', '8:00am', '9:00am', 'Malay', 'Mrs. Norliza', 'Library'),
('48', 'Four', 'A', 'Monday', '9:00am', '10:30am', 'Civis', 'Mr. Jamal', 'Classroom'),
('49', 'Four', 'A', 'Monday', '11:00am', '12:30am', 'Malay', 'Mr. Azim', 'Lab 4'),
('50', 'Four', 'A', 'Tuesday', '8:00am', '9:00am', 'English', 'Mr. Rosli', 'Classroom'),
('51', 'Four', 'A', 'Tuesday', '9:00am', '10:30am', 'Math', 'Mr. Khairul', 'Library'),
('52', 'Four', 'A', 'Tuesday', '11:00am', '12:30am', 'History', 'Ms. Suzana', 'Classroom'),
('53', 'Four', 'A', 'Wednesday', '8:00am', '9:00am', 'Geography', 'Mr. Saiful', 'Classroom'),
('54', 'Four', 'A', 'Wednesday', '9:00am', '10:30am', 'English', 'Ms. Anis', 'Art Classroom'),
('55', 'Four', 'A', 'Wednesday', '11:00am', '12:30am', 'ICT', 'Mr. Khairul', 'Computer Lab'),
('56', 'Four', 'A', 'Thursday', '8:00am', '9:00am', 'English', 'Mr. Rosli', 'Classroom'),
('57', 'Four', 'A', 'Thursday', '9:00am', '10:30am', 'Civics', 'Mr. Khairul', 'Library'),
('58', 'Four', 'A', 'Thursday', '11:00am', '12:30am', 'History', 'Ms. Suzana', 'Classroom'),
('59', 'Four', 'A', 'Friday', '8:00am', '9:00am', 'ICT', 'Mr. Khairul', 'ICT Lab'),
('60', 'Four', 'A', 'Friday', '9:00am', '10:30am', 'Math', 'Mr. Jamal', 'Classroom'),
('61', 'Five', 'A', 'Friday', '11:00am', '12:00am', 'Art', 'Ms. Suzana', 'Classroom'),
('62', 'Five', 'A', 'Monday', '8:00am', '9:00am', 'Malay', 'Mrs. Norliza', 'Lab 5'),
('63', 'Five', 'A', 'Monday', '9:00am', '10:30am', 'Civis', 'Mr. Jamal', 'Classroom'),
('64', 'Five', 'A', 'Monday', '11:00am', '12:30am', 'Malay', 'Mr. Azim', 'Lab 4'),
('65', 'Five', 'A', 'Tuesday', '8:00am', '9:00am', 'English', 'Mr. Rosli', 'Classroom'),
('66', 'Five', 'A', 'Tuesday', '9:00am', '10:30am', 'ICT', 'Mr. Khairul', 'Computer Lab'),
('67', 'Five', 'A', 'Tuesday', '11:00am', '12:30am', 'History', 'Ms. Suzana', 'Classroom'),
('68', 'Five', 'A', 'Wednesday', '8:00am', '9:00am', 'Geography', 'Mr. Saiful', 'Classroom'),
('69', 'Five', 'A', 'Wednesday', '9:00am', '10:30am', 'Malay', 'Ms. Alis', 'Art Classroom'),
('70', 'Five', 'A', 'Wednesday', '11:00am', '12:30am', 'ICT', 'Mr. Khairul', 'Computer Lab'),
('71', 'Five', 'A', 'Thursday', '8:00am', '9:00am', 'English', 'Mr. Rosli', 'Classroom'),
('72', 'Five', 'A', 'Thursday', '9:00am', '10:30am', 'Civics', 'Mr. Kamarul', 'Library'),
('73', 'Five', 'A', 'Thursday', '11:00am', '12:30am', 'History', 'Ms. Suzana', 'Classroom'),
('74', 'Five', 'A', 'Friday', '8:00am', '9:00am', 'ICT', 'Mr. Khairul', 'ICT Lab'),
('75', 'Five', 'A', 'Friday', '9:00am', '10:30am', 'Math', 'Mr. Jamal', 'Classroom'),
('76', 'Six', 'A', 'Friday', '11:00am', '12:00am', 'Art', 'Ms. Norsiah', 'Classroom'),
('77', 'Six', 'A', 'Monday', '8:00am', '9:00am', 'Malay', 'Mrs. Norliza', 'Library'),
('78', 'Six', 'A', 'Monday', '9:00am', '10:30am', 'Malay', 'Ms. Alis', 'Classroom'),
('79', 'Six', 'A', 'Monday', '11:00am', '12:30am', 'ICT', 'Mr. Khairul', 'Computer Lab'),
('80', 'Six', 'A', 'Tuesday', '8:00am', '9:00am', 'Civics', 'Mr. Kamarul', 'Library'),
('81', 'Six', 'A', 'Tuesday', '9:00am', '10:30am', 'Malay', 'Ms. Alis', 'Classroom'),
('82', 'Six', 'A', 'Tuesday', '11:00am', '12:30am', 'History', 'Ms. Suzana', 'Classroom'),
('83', 'Six', 'A', 'Wednesday', '8:00am', '9:00am', 'Geography', 'Mr. Saiful', 'Classroom'),
('84', 'Six', 'A', 'Wednesday', '9:00am', '10:30am', 'English', 'Ms. Anis', 'Art Classroom'),
('85', 'Six', 'A', 'Wednesday', '11:00am', '12:30am', 'Science', 'Ms. Soo Yin', 'Lab 4'),
('86', 'Six', 'A', 'Thursday', '8:00am', '9:00am', 'ICT', 'Mr. Khairul', 'Computer Lab'),
('87', 'Six', 'A', 'Thursday', '9:00am', '10:30am', 'Civics', 'Mr. Khairul', 'Library'),
('88', 'Six', 'A', 'Thursday', '11:00am', '12:30am', 'History', 'Ms. Suzana', 'Classroom'),
('89', 'Six', 'A', 'Friday', '8:00am', '9:00am', 'ICT', 'Mr. Khairul', 'ICT Lab'),
('90', 'Six', 'A', 'Friday', '9:00am', '10:30am', 'Civics', 'Mr. Kamarul', 'Library');
-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` varchar(100) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `school` varchar(50) NOT NULL,
  `grade` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `pid` varchar(100) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `sname`, `school`, `grade`, `class`, `image`, `address`, `pid`, `pname`, `contact`, `email`, `username`, `password`) VALUES
('0002671255', 'Jyotsna D', 'Primary School', 'One', '1A', 'student 1.png', 'Damansara', 'abc', 'T desai', '0174587487', 'abc@gmail.com', '', ''),
('0013912245', 'Bae Suzy', 'Primary School', 'One', '1A', 'student 5.png', 'Shah Alam', 'bae', 'Bae Tong', '0111385118', 'bae@gmail.com', '', ''),
('0004287829', 'Puteri Aisha', 'Primary School', 'Two', '2A', 'student 2.png', 'Shah Alam', 'xyz', 'P', '0113241591', 'xyz@gmail.com', '', ''),
('0013913776', 'Kairul Anwar', 'Primary School', 'Two', '1A', 'student 6.png', 'Gombak', 'pqr', 'Abdullah', '0134085058', 'pqr@gmail.com', '', ''),
('0004291336', 'Syed Ryan', 'Primary School', 'Three', '3A', 'student 3.png', 'Gombak', 'pqr', 'Abdullah', '0134085058', 'pqr@gmail.com', '', ''),
('0013919551', 'Siti Amina', 'Primary School', 'Three', '3A', 'student 7.png', 'Ampang', 'faiz', 'Faizal M', '0134085058', 'faiz@gmail.com', '', ''),
('0013911234', 'Danish Darwish', 'Primary School', 'Four', '4A', 'student 4.png', 'Selayang', 'faiz', 'Ahmad Afendi', '0144085055', 'fendi@gmail.com', '', ''),
('0013916268', 'Adam Lai', 'Primary School', 'Four', '4A', 'student 8.png', 'Damansara', 'fendi', 'Cheong Lai', '0144115021', 'lai@gmail.com', '', ''),
('0013914525', 'Raj Khan', 'Primary School', 'Five', '5A', 'student 9.png', 'Klang', 'khan', 'Amir Khan', '0164987451', 'khan@gmail.com', '', ''),
('0013914589', 'Farhat Khan', 'Primary School', 'Six', '6A', 'student 9.png', 'Klang', 'khan', 'Amir Khan', '0164987451', 'khan@gmail.com', '', ''),
('0013971234', 'Faisal Khan', 'Primary School', 'Five', '5A', 'student 9.png', 'Cheras', 'amirkhan', 'Amir Khan', '0176685342', 'amirkhan@gmail.com', '', ''),
('aaaaaaaaaa', 'sfsfsf', 'Primary School', 'One', '1A', 'headmaster.png', 'Lot 925 Kg. Seri Mendapat\r\nSemujuk', 'alia', 'alia', '0111991818', 'sdsf@gmail.com', '', ''),
('000428785656', 'ALI BIN ABU', 'Primary School', 'One', '1A', 'alumni success.png', 'NO28, JALAN SEROJA 14, TAMAN SEROJA, BANDAR BARU SALAK TINGG', 'alia', 'alia', '0119191912', 'alia@gmail.com', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arrival`
--
ALTER TABLE `arrival`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`eventid`);

--
-- Indexes for table `examsched`
--
ALTER TABLE `examsched`
  ADD PRIMARY KEY (`examid`);

--
-- Indexes for table `examresult`
--
ALTER TABLE `examresult`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`newsid`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `sched`
--
ALTER TABLE `sched`
  ADD PRIMARY KEY (`scid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `pid` (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arrival`
--
ALTER TABLE `arrival`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
