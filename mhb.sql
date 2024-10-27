-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2024 at 07:09 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mhb`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_years`
--

CREATE TABLE `academic_years` (
  `year_id` int(11) NOT NULL,
  `academic_year` varchar(9) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `excellence`
--

CREATE TABLE `excellence` (
  `id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `academic_year` year(4) DEFAULT NULL,
  `class` varchar(50) DEFAULT NULL,
  `term1_work_education` varchar(2) DEFAULT NULL,
  `term1_art_education` varchar(2) DEFAULT NULL,
  `term1_physical_education` varchar(2) DEFAULT NULL,
  `term1_discipline` varchar(2) DEFAULT NULL,
  `term2_work_education` varchar(2) DEFAULT NULL,
  `term2_art_education` varchar(2) DEFAULT NULL,
  `term2_physical_education` varchar(2) DEFAULT NULL,
  `term2_discipline` varchar(2) DEFAULT NULL,
  `created` datetime DEFAULT current_timestamp(),
  `modified` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `mark_id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `academic_year` varchar(9) NOT NULL,
  `rollno` varchar(20) NOT NULL,
  `term1_subject_1` decimal(5,2) DEFAULT NULL,
  `term1_subject_1_ct` decimal(5,2) DEFAULT NULL,
  `term1_subject_1_periodic_test` decimal(5,2) DEFAULT NULL,
  `term1_subject_1_subject_enrichment` decimal(5,2) DEFAULT NULL,
  `term1_subject_1_multiple_assessment` decimal(5,2) DEFAULT NULL,
  `term1_subject_1_portfolio` decimal(5,2) DEFAULT NULL,
  `term1_subject_1_total` decimal(5,2) DEFAULT NULL,
  `term1_subject_1_grade` varchar(5) GENERATED ALWAYS AS (case when `term1_subject_1_total` >= 91 then 'A1' when `term1_subject_1_total` >= 81 then 'A2' when `term1_subject_1_total` >= 71 then 'B1' when `term1_subject_1_total` >= 61 then 'B2' when `term1_subject_1_total` >= 51 then 'C1' when `term1_subject_1_total` >= 41 then 'C2' when `term1_subject_1_total` >= 33 then 'D' else 'E' end) STORED,
  `term1_subject_2` decimal(5,2) DEFAULT NULL,
  `term1_subject_2_periodic_test` decimal(5,2) DEFAULT NULL,
  `term1_subject_2_subject_enrichment` decimal(5,2) DEFAULT NULL,
  `term1_subject_2_multiple_assessment` decimal(5,2) DEFAULT NULL,
  `term1_subject_2_portfolio` decimal(5,2) DEFAULT NULL,
  `term1_subject_2_total` decimal(5,2) DEFAULT NULL,
  `term1_subject_2_grade` varchar(5) GENERATED ALWAYS AS (case when `term1_subject_2_total` >= 91 then 'A1' when `term1_subject_2_total` >= 81 then 'A2' when `term1_subject_2_total` >= 71 then 'B1' when `term1_subject_2_total` >= 61 then 'B2' when `term1_subject_2_total` >= 51 then 'C1' when `term1_subject_2_total` >= 41 then 'C2' when `term1_subject_2_total` >= 33 then 'D' else 'E' end) STORED,
  `term1_subject_3` decimal(5,2) DEFAULT NULL,
  `term1_subject_3_periodic_test` decimal(5,2) DEFAULT NULL,
  `term1_subject_3_subject_enrichment` decimal(5,2) DEFAULT NULL,
  `term1_subject_3_multiple_assessment` decimal(5,2) DEFAULT NULL,
  `term1_subject_3_portfolio` decimal(5,2) DEFAULT NULL,
  `term1_subject_3_total` decimal(5,2) DEFAULT NULL,
  `term1_subject_3_grade` varchar(5) GENERATED ALWAYS AS (case when `term1_subject_3_total` >= 91 then 'A1' when `term1_subject_3_total` >= 81 then 'A2' when `term1_subject_3_total` >= 71 then 'B1' when `term1_subject_3_total` >= 61 then 'B2' when `term1_subject_3_total` >= 51 then 'C1' when `term1_subject_3_total` >= 41 then 'C2' when `term1_subject_3_total` >= 33 then 'D' else 'E' end) STORED,
  `term1_subject_4` decimal(5,2) DEFAULT NULL,
  `term1_subject_4_periodic_test` decimal(5,2) DEFAULT NULL,
  `term1_subject_4_subject_enrichment` decimal(5,2) DEFAULT NULL,
  `term1_subject_4_multiple_assessment` decimal(5,2) DEFAULT NULL,
  `term1_subject_4_portfolio` decimal(5,2) DEFAULT NULL,
  `term1_subject_4_total` decimal(5,2) DEFAULT NULL,
  `term1_subject_4_grade` varchar(5) GENERATED ALWAYS AS (case when `term1_subject_4_total` >= 91 then 'A1' when `term1_subject_4_total` >= 81 then 'A2' when `term1_subject_4_total` >= 71 then 'B1' when `term1_subject_4_total` >= 61 then 'B2' when `term1_subject_4_total` >= 51 then 'C1' when `term1_subject_4_total` >= 41 then 'C2' when `term1_subject_4_total` >= 33 then 'D' else 'E' end) STORED,
  `term1_subject_5` decimal(5,2) DEFAULT NULL,
  `term1_subject_5_periodic_test` decimal(5,2) DEFAULT NULL,
  `term1_subject_5_subject_enrichment` decimal(5,2) DEFAULT NULL,
  `term1_subject_5_multiple_assessment` decimal(5,2) DEFAULT NULL,
  `term1_subject_5_portfolio` decimal(5,2) DEFAULT NULL,
  `term1_subject_5_total` decimal(5,2) DEFAULT NULL,
  `term1_subject_5_grade` varchar(5) GENERATED ALWAYS AS (case when `term1_subject_5_total` >= 91 then 'A1' when `term1_subject_5_total` >= 81 then 'A2' when `term1_subject_5_total` >= 71 then 'B1' when `term1_subject_5_total` >= 61 then 'B2' when `term1_subject_5_total` >= 51 then 'C1' when `term1_subject_5_total` >= 41 then 'C2' when `term1_subject_5_total` >= 33 then 'D' else 'E' end) STORED,
  `term1_subject_6` decimal(5,2) DEFAULT NULL,
  `term1_subject_6_periodic_test` decimal(5,2) DEFAULT NULL,
  `term1_subject_6_subject_enrichment` decimal(5,2) DEFAULT NULL,
  `term1_subject_6_multiple_assessment` decimal(5,2) DEFAULT NULL,
  `term1_subject_6_portfolio` decimal(5,2) DEFAULT NULL,
  `term1_subject_6_total` decimal(5,2) DEFAULT NULL,
  `term1_subject_6_grade` varchar(5) GENERATED ALWAYS AS (case when `term1_subject_6_total` >= 91 then 'A1' when `term1_subject_6_total` >= 81 then 'A2' when `term1_subject_6_total` >= 71 then 'B1' when `term1_subject_6_total` >= 61 then 'B2' when `term1_subject_6_total` >= 51 then 'C1' when `term1_subject_6_total` >= 41 then 'C2' when `term1_subject_6_total` >= 33 then 'D' else 'E' end) STORED,
  `term1_subject_7` decimal(5,2) DEFAULT NULL,
  `term1_subject_7_periodic_test` decimal(5,2) DEFAULT NULL,
  `term1_subject_7_subject_enrichment` decimal(5,2) DEFAULT NULL,
  `term1_subject_7_multiple_assessment` decimal(5,2) DEFAULT NULL,
  `term1_subject_7_portfolio` decimal(5,2) DEFAULT NULL,
  `term1_subject_7_total` decimal(5,2) DEFAULT NULL,
  `term1_subject_7_grade` varchar(5) GENERATED ALWAYS AS (case when `term1_subject_7_total` >= 91 then 'A1' when `term1_subject_7_total` >= 81 then 'A2' when `term1_subject_7_total` >= 71 then 'B1' when `term1_subject_7_total` >= 61 then 'B2' when `term1_subject_7_total` >= 51 then 'C1' when `term1_subject_7_total` >= 41 then 'C2' when `term1_subject_7_total` >= 33 then 'D' else 'E' end) STORED,
  `term1_total` decimal(5,2) DEFAULT NULL,
  `term2_subject_1` decimal(5,2) DEFAULT NULL,
  `term2_subject_1_periodic_test` decimal(5,2) DEFAULT NULL,
  `term2_subject_1_subject_enrichment` decimal(5,2) DEFAULT NULL,
  `term2_subject_1_multiple_assessment` decimal(5,2) DEFAULT NULL,
  `term2_subject_1_portfolio` decimal(5,2) DEFAULT NULL,
  `term2_subject_1_total` decimal(5,2) DEFAULT NULL,
  `term2_subject_1_grade` varchar(5) GENERATED ALWAYS AS (case when `term2_subject_1_total` >= 91 then 'A1' when `term2_subject_1_total` >= 81 then 'A2' when `term2_subject_1_total` >= 71 then 'B1' when `term2_subject_1_total` >= 61 then 'B2' when `term2_subject_1_total` >= 51 then 'C1' when `term2_subject_1_total` >= 41 then 'C2' when `term2_subject_1_total` >= 33 then 'D' else 'E' end) STORED,
  `term2_subject_2` decimal(5,2) DEFAULT NULL,
  `term2_subject_2_periodic_test` decimal(5,2) DEFAULT NULL,
  `term2_subject_2_subject_enrichment` decimal(5,2) DEFAULT NULL,
  `term2_subject_2_multiple_assessment` decimal(5,2) DEFAULT NULL,
  `term2_subject_2_portfolio` decimal(5,2) DEFAULT NULL,
  `term2_subject_2_total` decimal(5,2) DEFAULT NULL,
  `term2_subject_2_grade` varchar(5) GENERATED ALWAYS AS (case when `term2_subject_2_total` >= 91 then 'A1' when `term2_subject_2_total` >= 81 then 'A2' when `term2_subject_2_total` >= 71 then 'B1' when `term2_subject_2_total` >= 61 then 'B2' when `term2_subject_2_total` >= 51 then 'C1' when `term2_subject_2_total` >= 41 then 'C2' when `term2_subject_2_total` >= 33 then 'D' else 'E' end) STORED,
  `term2_subject_3` decimal(5,2) DEFAULT NULL,
  `term2_subject_3_periodic_test` decimal(5,2) DEFAULT NULL,
  `term2_subject_3_subject_enrichment` decimal(5,2) DEFAULT NULL,
  `term2_subject_3_multiple_assessment` decimal(5,2) DEFAULT NULL,
  `term2_subject_3_portfolio` decimal(5,2) DEFAULT NULL,
  `term2_subject_3_total` decimal(5,2) DEFAULT NULL,
  `term2_subject_3_grade` varchar(5) GENERATED ALWAYS AS (case when `term2_subject_3_total` >= 91 then 'A1' when `term2_subject_3_total` >= 81 then 'A2' when `term2_subject_3_total` >= 71 then 'B1' when `term2_subject_3_total` >= 61 then 'B2' when `term2_subject_3_total` >= 51 then 'C1' when `term2_subject_3_total` >= 41 then 'C2' when `term2_subject_3_total` >= 33 then 'D' else 'E' end) STORED,
  `term2_subject_4` decimal(5,2) DEFAULT NULL,
  `term2_subject_4_periodic_test` decimal(5,2) DEFAULT NULL,
  `term2_subject_4_subject_enrichment` decimal(5,2) DEFAULT NULL,
  `term2_subject_4_multiple_assessment` decimal(5,2) DEFAULT NULL,
  `term2_subject_4_portfolio` decimal(5,2) DEFAULT NULL,
  `term2_subject_4_total` decimal(5,2) DEFAULT NULL,
  `term2_subject_4_grade` varchar(5) GENERATED ALWAYS AS (case when `term2_subject_4_total` >= 91 then 'A1' when `term2_subject_4_total` >= 81 then 'A2' when `term2_subject_4_total` >= 71 then 'B1' when `term2_subject_4_total` >= 61 then 'B2' when `term2_subject_4_total` >= 51 then 'C1' when `term2_subject_4_total` >= 41 then 'C2' when `term2_subject_4_total` >= 33 then 'D' else 'E' end) STORED,
  `term2_subject_5` decimal(5,2) DEFAULT NULL,
  `term2_subject_5_periodic_test` decimal(5,2) DEFAULT NULL,
  `term2_subject_5_subject_enrichment` decimal(5,2) DEFAULT NULL,
  `term2_subject_5_multiple_assessment` decimal(5,2) DEFAULT NULL,
  `term2_subject_5_portfolio` decimal(5,2) DEFAULT NULL,
  `term2_subject_5_total` decimal(5,2) DEFAULT NULL,
  `term2_subject_5_grade` varchar(5) GENERATED ALWAYS AS (case when `term2_subject_5_total` >= 91 then 'A1' when `term2_subject_5_total` >= 81 then 'A2' when `term2_subject_5_total` >= 71 then 'B1' when `term2_subject_5_total` >= 61 then 'B2' when `term2_subject_5_total` >= 51 then 'C1' when `term2_subject_5_total` >= 41 then 'C2' when `term2_subject_5_total` >= 33 then 'D' else 'E' end) STORED,
  `term2_subject_6` decimal(5,2) DEFAULT NULL,
  `term2_subject_6_periodic_test` decimal(5,2) DEFAULT NULL,
  `term2_subject_6_subject_enrichment` decimal(5,2) DEFAULT NULL,
  `term2_subject_6_multiple_assessment` decimal(5,2) DEFAULT NULL,
  `term2_subject_6_portfolio` decimal(5,2) DEFAULT NULL,
  `term2_subject_6_total` decimal(5,2) DEFAULT NULL,
  `term2_subject_6_grade` varchar(5) GENERATED ALWAYS AS (case when `term2_subject_6_total` >= 91 then 'A1' when `term2_subject_6_total` >= 81 then 'A2' when `term2_subject_6_total` >= 71 then 'B1' when `term2_subject_6_total` >= 61 then 'B2' when `term2_subject_6_total` >= 51 then 'C1' when `term2_subject_6_total` >= 41 then 'C2' when `term2_subject_6_total` >= 33 then 'D' else 'E' end) STORED,
  `term2_subject_7` decimal(5,2) DEFAULT NULL,
  `term2_subject_7_periodic_test` decimal(5,2) DEFAULT NULL,
  `term2_subject_7_subject_enrichment` decimal(5,2) DEFAULT NULL,
  `term2_subject_7_multiple_assessment` decimal(5,2) DEFAULT NULL,
  `term2_subject_7_portfolio` decimal(5,2) DEFAULT NULL,
  `term2_subject_7_total` decimal(5,2) DEFAULT NULL,
  `term2_subject_7_grade` varchar(5) GENERATED ALWAYS AS (case when `term2_subject_7_total` >= 91 then 'A1' when `term2_subject_7_total` >= 81 then 'A2' when `term2_subject_7_total` >= 71 then 'B1' when `term2_subject_7_total` >= 61 then 'B2' when `term2_subject_7_total` >= 51 then 'C1' when `term2_subject_7_total` >= 41 then 'C2' when `term2_subject_7_total` >= 33 then 'D' else 'E' end) STORED,
  `term1_subject_8` decimal(5,2) DEFAULT NULL,
  `term1_subject_8_periodic_test` decimal(5,2) DEFAULT NULL,
  `term1_subject_8_subject_enrichment` decimal(5,2) DEFAULT NULL,
  `term1_subject_8_multiple_assessment` decimal(5,2) DEFAULT NULL,
  `term1_subject_8_portfolio` decimal(5,2) DEFAULT NULL,
  `term1_subject_8_total` decimal(5,2) DEFAULT NULL,
  `term1_subject_8_grade` varchar(5) GENERATED ALWAYS AS (case when `term1_subject_8_total` >= 91 then 'A1' when `term1_subject_8_total` >= 81 then 'A2' when `term1_subject_8_total` >= 71 then 'B1' when `term1_subject_8_total` >= 61 then 'B2' when `term1_subject_8_total` >= 51 then 'C1' when `term1_subject_8_total` >= 41 then 'C2' when `term1_subject_8_total` >= 33 then 'D' else 'E' end) STORED,
  `term2_subject_8` decimal(5,2) DEFAULT NULL,
  `term2_subject_8_periodic_test` decimal(5,2) DEFAULT NULL,
  `term2_subject_8_subject_enrichment` decimal(5,2) DEFAULT NULL,
  `term2_subject_8_multiple_assessment` decimal(5,2) DEFAULT NULL,
  `term2_subject_8_portfolio` decimal(5,2) DEFAULT NULL,
  `term2_subject_8_total` decimal(5,2) DEFAULT NULL,
  `term2_subject_8_grade` varchar(5) GENERATED ALWAYS AS (case when `term2_subject_8_total` >= 91 then 'A1' when `term2_subject_8_total` >= 81 then 'A2' when `term2_subject_8_total` >= 71 then 'B1' when `term2_subject_8_total` >= 61 then 'B2' when `term2_subject_8_total` >= 51 then 'C1' when `term2_subject_8_total` >= 41 then 'C2' when `term2_subject_8_total` >= 33 then 'D' else 'E' end) STORED,
  `term1_subject_9` decimal(5,2) DEFAULT NULL,
  `term1_subject_9_periodic_test` decimal(5,2) DEFAULT NULL,
  `term1_subject_9_subject_enrichment` decimal(5,2) DEFAULT NULL,
  `term1_subject_9_multiple_assessment` decimal(5,2) DEFAULT NULL,
  `term1_subject_9_portfolio` decimal(5,2) DEFAULT NULL,
  `term1_subject_9_total` decimal(5,2) DEFAULT NULL,
  `term1_subject_9_grade` varchar(5) GENERATED ALWAYS AS (case when `term1_subject_9_total` >= 91 then 'A1' when `term1_subject_9_total` >= 81 then 'A2' when `term1_subject_9_total` >= 71 then 'B1' when `term1_subject_9_total` >= 61 then 'B2' when `term1_subject_9_total` >= 51 then 'C1' when `term1_subject_9_total` >= 41 then 'C2' when `term1_subject_9_total` >= 33 then 'D' else 'E' end) STORED,
  `term2_subject_9` decimal(5,2) DEFAULT NULL,
  `term2_subject_9_periodic_test` decimal(5,2) DEFAULT NULL,
  `term2_subject_9_subject_enrichment` decimal(5,2) DEFAULT NULL,
  `term2_subject_9_multiple_assessment` decimal(5,2) DEFAULT NULL,
  `term2_subject_9_portfolio` decimal(5,2) DEFAULT NULL,
  `term2_subject_9_total` decimal(5,2) DEFAULT NULL,
  `term2_subject_9_grade` varchar(5) GENERATED ALWAYS AS (case when `term2_subject_9_total` >= 91 then 'A1' when `term2_subject_9_total` >= 81 then 'A2' when `term2_subject_9_total` >= 71 then 'B1' when `term2_subject_9_total` >= 61 then 'B2' when `term2_subject_9_total` >= 51 then 'C1' when `term2_subject_9_total` >= 41 then 'C2' when `term2_subject_9_total` >= 33 then 'D' else 'E' end) STORED,
  `term2_total` decimal(5,2) DEFAULT NULL,
  `term1_subject_2_ct` decimal(5,2) DEFAULT NULL,
  `term1_subject_3_ct` decimal(5,2) DEFAULT NULL,
  `term1_subject_4_ct` decimal(5,2) DEFAULT NULL,
  `term1_subject_5_ct` decimal(5,2) DEFAULT NULL,
  `term1_subject_6_ct` decimal(5,2) DEFAULT NULL,
  `term1_subject_7_ct` decimal(5,2) DEFAULT NULL,
  `term1_subject_8_ct` decimal(5,2) DEFAULT NULL,
  `term1_subject_9_ct` decimal(5,2) DEFAULT NULL,
  `term2_subject_1_ct` decimal(5,2) DEFAULT NULL,
  `term2_subject_2_ct` decimal(5,2) DEFAULT NULL,
  `term2_subject_3_ct` decimal(5,2) DEFAULT NULL,
  `term2_subject_4_ct` decimal(5,2) DEFAULT NULL,
  `term2_subject_5_ct` decimal(5,2) DEFAULT NULL,
  `term2_subject_6_ct` decimal(5,2) DEFAULT NULL,
  `term2_subject_7_ct` decimal(5,2) DEFAULT NULL,
  `term2_subject_8_ct` decimal(5,2) DEFAULT NULL,
  `term2_subject_9_ct` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `result_id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `academic_year` varchar(9) DEFAULT NULL,
  `term1_total_marks` decimal(5,2) DEFAULT NULL,
  `term1_percentage` decimal(5,2) DEFAULT NULL,
  `term1_grade` varchar(2) DEFAULT NULL,
  `term2_total_marks` decimal(5,2) DEFAULT NULL,
  `term2_percentage` decimal(5,2) DEFAULT NULL,
  `term2_grade` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `Admission_no` varchar(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `class` varchar(5) NOT NULL,
  `section` varchar(50) NOT NULL,
  `admission_year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `Admission_no`, `name`, `mother_name`, `dob`, `class`, `section`, `admission_year`) VALUES
(50, '123/24', 'std1', 'm1', '2002-02-03', '1st', 'a', '2024'),
(51, '1234/024', 'abc', 'xyz', '2004-01-01', '2', 'b', '2024'),
(52, '3547/21', 'riya', 'k', '1996-04-23', '1st', 'A', '2024'),
(53, '4203/24', 'Aarav Swapnil Wankhede', 'Priya', '2018-01-25', '1st', 'A', '2024'),
(54, '-', 'Aarvi Vinod Katekhaye', 'Manju', '2017-09-02', '1st', 'A', '2024'),
(55, '4231/24', 'Aayansh Rinku Gour', 'Hemlata', '2017-11-01', '1st', 'A', '2024'),
(56, '4173/24', 'Abaan Ahammed Assain', 'Dr. Fahida', '2018-08-25', '1st', 'A', '2024'),
(57, '4171/24', 'Abhyuday Anuj Agnihotri', 'Pooja', '2018-06-30', '1st', 'A', '2024'),
(58, '-', 'Advika Sudhir Motghare', 'Usha', '2018-06-16', '1st', 'A', '2024'),
(59, '-', 'Anay Ashish Mendhe', 'Anagha', '2018-07-04', '1st', 'A', '2024'),
(60, '4118/24', 'Anaya Digambar Shende', 'Ashwini', '2017-12-19', '1st', 'A', '2024'),
(61, '-', 'Aradhya Ajit Aswale', 'Riya', '2018-05-07', '1st', 'A', '2024'),
(62, '-', 'Aryan Vinay Silekar', 'Laxmi', '2018-02-14', '1st', 'A', '2024'),
(63, '4126/24', 'Atharv Sachin Kshirsagar', 'Swapna', '2017-06-05', '1st', 'A', '2024'),
(64, '-', 'Ayush Chintaman Kapgate', 'Saroj', '2018-04-12', '1st', 'A', '2024'),
(65, '4366/24', 'Baani Ketan Khatri', 'Priya', '2018-04-07', '1st', 'A', '2024'),
(66, '4369/24', 'Bhairavi Mangesh Sarve', 'Seema', '2018-02-14', '1st', 'A', '2024'),
(67, '4189/24', 'Bhevin Yogesh Hajare', 'Smita', '2017-11-23', '1st', 'A', '2024'),
(68, '4197/24', 'Bhuvi Avinash Khedikar', 'Sheetal', '2018-07-26', '1st', 'A', '2024'),
(69, '4243/24', 'Chitrang Purushottam Rakhade', 'Sadhana', '2018-03-18', '1st', 'A', '2024'),
(70, '4120/24', 'Gruhit Lilesh Bhure', 'Kiran', '2018-04-12', '1st', 'A', '2024'),
(71, '4246/24', 'Harshit Tekchand Thote', 'Jayashree', '2018-07-14', '1st', 'A', '2024'),
(72, '-', 'Ishika Jitendra Bhiogade', 'Pornima', '2017-12-30', '1st', 'A', '2024'),
(73, '4240/24', 'Jaineel Rohit Patel', 'Payal', '2017-02-25', '1st', 'A', '2024'),
(74, '-', 'Kadambari Mahendra Wahile', 'Rajani', '2018-05-19', '1st', 'A', '2024'),
(75, '-', 'Kaivalya Gopalkrishna Lokhande', 'Rekha', '2018-05-18', '1st', 'A', '2024'),
(76, '4221/24', 'Manini Manish Dharya', 'Nandita', '2018-02-07', '1st', 'A', '2024'),
(77, '-', 'Mayank Shailesh Bhute', 'Samiksha', '2018-09-10', '1st', 'A', '2024'),
(78, '4127/24', 'Navinya Satyawan Gaidhane', 'Pranali', '2018-05-01', '1st', 'A', '2024'),
(79, '4190/24', 'Ojasvi Chakradhar Kahalkar', 'Hiteshree', '2018-09-02', '1st', 'A', '2024'),
(80, '4402/24', 'Paridhi Jagdish Sonkusare', 'Shilpa', '2017-12-11', '1st', 'A', '2024'),
(81, '4116/24', 'Prince Jay Hasarani', 'Manju', '2017-12-14', '1st', 'A', '2024'),
(82, '4205/24', 'Raunak Ishwar Tandekar', 'Pratibha', '2017-10-20', '1st', 'A', '2024'),
(83, '4266/24', 'Rihan Ganesh Akare', 'Archana', '2018-02-15', '1st', 'A', '2024'),
(84, '4201/24', 'Roanit Pravin Talmale', 'Pratiksha', '2018-05-07', '1st', 'A', '2024'),
(85, '4230/24', 'Ruchika Yogesh Singanjude', 'Bhagyashrri', '2018-07-20', '1st', 'A', '2024'),
(86, '-', 'Saharsh Haresh Jawekar', 'Samiksha', '2018-10-05', '1st', 'A', '2024'),
(87, '-', 'Sambhavi Dipak Tighare', 'Rina', '2017-08-31', '1st', 'A', '2024'),
(88, '-', 'Samyak Abhaykumar Sarade', 'Rakhi', '2017-11-14', '1st', 'A', '2024'),
(89, '4365/24', 'Sayana Raman Khedikar', 'Nisha', '2017-12-28', '1st', 'A', '2024'),
(90, '4395/24', 'Tesha Tushar Parkhedkar', 'Disha', '2017-10-17', '1st', 'A', '2024'),
(91, '-', 'Vansh Vinod Bhongade', 'Alka', '2017-11-11', '1st', 'A', '2024'),
(92, '4265/24', 'Vihan Ganesh Akare', 'Archana', '2018-02-15', '1st', 'A', '2024'),
(93, '4170/24', 'Yunik Umashankar Tekam', 'Shilpa', '2018-02-11', '1st', 'A', '2024'),
(94, '4375/24', 'Ranveer Ashish Bedpuriya', 'Namrata', '2018-07-08', '1st', 'A', '2024'),
(95, '-', 'Nabil Bhakir Khan Pathan', 'Amrin', '2017-12-04', '1st', 'A', '2024'),
(96, '-', 'Ananya Dnyaneshwar Gahane', 'Swati', '2017-12-03', '1st', 'A', '2024'),
(97, '4332/2024', 'Aaransh Prashantkumar Tandekar', 'Meena', '2018-05-02', '1st', 'B', '2024'),
(98, '4222/2024', 'Adheera Rahul Sontakke', 'Sonali', '2017-12-02', '1st', 'B', '2024'),
(99, '4216/2024', 'Aditya Mahendra Mendhe', 'Dakshina', '2017-08-15', '1st', 'B', '2024'),
(100, '4158/2024', 'Ahana Bhagwan Kanpate', 'Rajanigandha', '2017-12-07', '1st', 'B', '2024'),
(101, '4212/2024', 'Anandi Vinayak Harinkhede', 'Vaishali', '2018-11-12', '1st', 'B', '2024'),
(102, '4220/2024', 'Anant Aniket Ghote', 'Riya', '2017-09-30', '1st', 'B', '2024'),
(103, '4391/2024', 'Anvi Rakesh Gedekar', 'Pratibha', '2018-01-05', '1st', 'B', '2024'),
(104, '2137/2022', 'Arnav Vinayak Burange', 'Nita', '2018-01-01', '1st', 'B', '2024'),
(105, '4397/2024', 'Arvika Ravindra Gajghate', 'Kunda', '2017-05-27', '1st', 'B', '2024'),
(106, '4275/2024', 'Arya Kishor Nimbarte', 'Madhuri', '2018-06-12', '1st', 'B', '2024'),
(107, '4175/2024', 'Dhruv Ganesh Sawale', 'Dipali', '2017-11-23', '1st', 'B', '2024'),
(108, '4196/2024', 'Falak Kiran Waghamare', 'Nita', '2018-05-05', '1st', 'B', '2024'),
(109, '4208/2024', 'Falguni Atul Mahakalkar', 'Unnati', '2018-04-08', '1st', 'B', '2024'),
(110, '4195/2024', 'Jeevansh Rahul Kuthe', 'Ashwini', '2018-07-28', '1st', 'B', '2024'),
(111, '4217/2024', 'Kinjal Shailesh Shedmake', 'Kalpana', '2018-08-08', '1st', 'B', '2024'),
(112, '4396/2024', 'Kritika Prashant Potfode', 'Arti', '2018-06-21', '1st', 'B', '2024'),
(113, '4225/2024', 'Kshudhart Kishor Meshram', 'Pinki', '2018-03-15', '1st', 'B', '2024'),
(114, '4387/2024', 'Lithisha Rajkumar Bharne', 'Ujwala', '0000-00-00', '1st', 'B', '2024'),
(115, '4199/2024', 'Madhura Rajesh Shendre', 'Sandhya', '2017-05-04', '1st', 'B', '2024'),
(116, '4385/2024', 'Morya Kailash Titarmare', 'Dipawali', '0000-00-00', '1st', 'B', '2024'),
(117, '4218/2024', 'Mrunmai Madan Gaydhane', 'Reena', '2017-09-21', '1st', 'B', '2024'),
(118, '4366/2024', 'Om Lokesh Baraskar', 'Kanchan', '2018-02-22', '1st', 'B', '2024'),
(119, '4119/2024', 'Paavni Anand Patole', 'Priyanka', '2018-01-09', '1st', 'B', '2024'),
(120, '4367/2024', 'Pankti Vikas Urkude', 'Rina', '2018-09-12', '1st', 'B', '2024'),
(121, '4193/2024', 'Purvesh Sumit Chanore', 'Kushal', '2018-02-05', '1st', 'B', '2024'),
(122, '4392/2024', 'Rachit  Avinash Bhiwgade', 'Sneha', '2018-04-29', '1st', 'B', '2024'),
(123, '4390/2024', 'Rajveer Ravindra  Ugalmugle', 'Karishma', '2018-06-08', '1st', 'B', '2024'),
(124, '4228/2024', 'Rehansh Tinkesh Lanjewar', 'Rajshri', '2018-05-27', '1st', 'B', '2024'),
(125, '4398/2024', 'Ritham Jagdish Jangade', 'Kaushlya', '2018-04-29', '1st', 'B', '2024'),
(126, '4172/2024', 'Rudransh Ramesh Tiwari', 'Manjali', '2019-01-11', '1st', 'B', '2024'),
(127, '4274/2024', 'Shourya Sachin Nimbarte', 'Veena', '2018-06-01', '1st', 'B', '2024'),
(128, '4226/2024', 'Shrawani Pravin Limje', 'Priyanka', '2018-01-31', '1st', 'B', '2024'),
(129, '4247/2024', 'Shridh Dhiraj Kshirsagar', 'Puja', '2017-12-06', '1st', 'B', '2024'),
(130, '4121/2024', 'Shriya Rahul Nashine', 'Tanushri', '2018-01-03', '1st', 'B', '2024'),
(131, '4169/2024', 'Swara Sachin Shende', 'Swati', '2018-01-10', '1st', 'B', '2024'),
(132, '4223/2024', 'Takshika Nikhil Sukhadeve', 'Rajashri', '2018-06-24', '1st', 'B', '2024'),
(133, '4140/2024', 'Trisha Tushar Bawankule', 'Geeta', '2018-01-01', '1st', 'B', '2024'),
(134, '4227/2024', 'Utkarsh Ravindra Bawankule', 'Sarita', '2018-10-27', '1st', 'B', '2024'),
(135, '4187/2024', 'Vihan Ajaykumar Hedaoo', 'Madhuri', '2017-11-17', '1st', 'B', '2024'),
(136, '4258/2024', 'Vihan Ganesh Dorle', 'Shilpa', '2017-09-30', '1st', 'B', '2024'),
(137, '4412/2024', 'Reyansh Hitendra Meshram', 'Sonam', '2018-11-08', '1st', 'B', '2024'),
(138, '4413/2024', 'Dnyanshri Yogendra Chakole', 'Shushma', '2018-07-05', '1st', 'B', '2024'),
(139, '4224/24', 'Aaradhya Sameer  Salve', 'Swati', '2018-04-25', '1st', 'C', '2024'),
(140, '4188/24', 'Advika Sachin Gabhane', 'Kumud', '2017-12-28', '1st', 'C', '2024'),
(141, '4146/24', 'Advit Dinesh Lanjewar', 'Manisha', '2018-08-04', '1st', 'C', '2024'),
(142, '4204/24', 'Aniket Sandip Mahakalkar', 'Usha', '2018-02-16', '1st', 'C', '2024'),
(143, '4213/24', 'Anway Kishor Matey', 'Snehal', '2018-07-19', '1st', 'C', '2024'),
(144, '4399/24', 'Aradhya Pradip Halmare', 'Komal', '2017-08-21', '1st', 'C', '2024'),
(145, '4364/24', 'Arvi Sangitkar Khobragade', 'Priyanka', '2018-04-26', '1st', 'C', '2024'),
(146, '4124/24', 'Gargi  Bhopal Landge', 'Archana', '2018-05-08', '1st', 'C', '2024'),
(147, '4207/24', 'Gauransh Pramod Gabhane', 'Kanchan', '2017-09-04', '1st', 'C', '2024'),
(148, '4182/24', 'Gauravi Lokesh Sapate', 'Madhuri', '2017-10-01', '1st', 'C', '2024'),
(149, '4194/24', 'Gunmay Rajesh Gaidhane', 'Suwarna', '2019-01-19', '1st', 'C', '2024'),
(150, '4206/24', 'Gurusharan Vilas Fate', 'Jayashri', '0000-00-00', '1st', 'C', '2024'),
(151, '4360/24', 'Jay Durgeshkumar Wadibhasme', 'Priya', '2018-04-09', '1st', 'C', '2024'),
(152, '4147/24', 'Kartika Nitin Nandurkar', 'Varsha', '2018-04-20', '1st', 'C', '2024'),
(153, '4245/24', 'Kedar Ankush Madankar', 'Rupali', '2018-05-28', '1st', 'C', '2024'),
(154, '4125/25', 'Kiara Nitesh Dehariya', 'Snigdha', '2018-03-25', '1st', 'C', '2024'),
(155, '4150/24', 'Lewis Ganesh Kumbhalkar', 'Priyanaka', '2018-11-22', '1st', 'C', '2024'),
(156, '4210/24', 'Mahek Liyakat Turak', 'Samsumnisha', '2018-06-21', '1st', 'C', '2024'),
(157, '4215/24', 'Mitesh Ghanshyam Bhonde', 'Vaishali', '2018-05-22', '1st', 'C', '2024'),
(158, '4229/24', 'Neerav Manoj Mankar', 'Minal', '2017-10-23', '1st', 'C', '2024'),
(159, '4180/24', 'Ojasvi Abhishekkumar Mishra', 'Sakshi', '2018-03-22', '1st', 'C', '2024'),
(160, '4363/24', 'Omeshwari Sanjay Suryawanshi', 'Apurva', '2017-12-31', '1st', 'C', '2024'),
(161, '4178/24', 'Onir Shrikrishna Khandade', 'Swati', '2018-03-03', '1st', 'C', '2024'),
(162, '4219/24', 'Pakhee Yogesh Lende', 'Rushali', '2017-12-05', '1st', 'C', '2024'),
(163, '4200/24', 'Pihu Rajesh Lanjewar', 'Diksha', '0000-00-00', '1st', 'C', '2024'),
(164, '4211/24', 'Priyanshi Ashish Mate', 'Purwa', '2018-09-10', '1st', 'C', '2024'),
(165, '4209/24', 'Riddhi Vishal Palandurkar', 'Rupali', '2017-10-20', '1st', 'C', '2024'),
(166, '4179/24', 'Rudra Abhishekkumar Mishra', 'Sakshi', '2018-03-22', '1st', 'C', '2024'),
(167, '4132/24', 'Sanidhya Ajay Chawale', 'Kajal', '2018-08-28', '1st', 'C', '2024'),
(168, '4262/24', 'Sanvi Rohit Bhope', 'Reshma', '2018-04-20', '1st', 'C', '2024'),
(169, '4393/24', 'Sarthak Pravin Gaidhane', 'Aabha', '2017-05-06', '1st', 'C', '2024'),
(170, '4117/24', 'Shanaya Gaurav Dhakate', 'Roshani', '2017-12-26', '1st', 'C', '2024'),
(171, '4214/24', 'Sheeza Shahewar Khan', 'Heema', '2018-07-06', '1st', 'C', '2024'),
(172, '4404/24', 'Shivam Satyam Jha', 'Preeti', '2018-01-29', '1st', 'C', '2024'),
(173, '4356/24', 'Shreyansh Sudesh Wanjari', 'Jayashree', '2017-09-14', '1st', 'C', '2024'),
(174, '4400/24', 'Spruha Narendra Selokar', 'Komal', '2018-06-09', '1st', 'C', '2024'),
(175, '4406/24', 'Srushti Abhay Shahare', 'Monika', '2017-09-29', '1st', 'C', '2024'),
(176, '4144/24', 'Tanishka Rakesh Gupta', 'Tanushree', '2018-08-04', '1st', 'C', '2024'),
(177, '4368/24', 'Zara Fatima . Sheikh', 'Shagufta', '2020-11-14', '1st', 'C', '2024'),
(178, '4370/24', 'Ekansh Dinesh Agre', 'Ruchita', '2018-06-24', '1st', 'C', '2024'),
(179, '4375/24', 'Gargi              Bahekar', 'Minal', '2018-03-14', '1st', 'C', '2024'),
(180, '4377/24', 'Darshit Dinesh Agre', 'Ruchita', '2018-06-24', '1st', 'C', '2024'),
(181, '4414/24', 'Seemant Pankaj Limje', 'Jyotsna', '2017-09-07', '1st', 'C', '2024'),
(182, '3988/2023', 'Abhighya Dhanpal Chopkar', 'Priti', '2017-01-12', '2nd', 'C', '2024'),
(183, '-', 'Adhir Markand Dorle', 'Swati', '2017-11-09', '2nd', 'C', '2024'),
(184, '3918/2023', 'Aliza Jaynulabedin Sheikh', 'Afroja', '2017-08-03', '2nd', 'C', '2024'),
(185, '3911/2023', 'Anaya Ravikiran Kharate', 'Shubhangi', '2017-09-09', '2nd', 'C', '2024'),
(186, '3956/2023', 'Anushka Sachin Shahare', 'Komal', '2017-09-02', '2nd', 'C', '2024'),
(187, '3825/2023', 'Arohi Hemraj Badshaha', 'Payal', '2016-12-22', '2nd', 'C', '2024'),
(188, '3912/2023', 'Atharv Ramesh Dongargaonkar', 'Revati', '2017-08-09', '2nd', 'C', '2024'),
(189, '4103/2023', 'Bhavya Gopal Burde', 'jyoti', '2017-08-31', '2nd', 'C', '2024'),
(190, '3916/2023', 'Devanshi Dinesh Chute', 'Shweta', '2017-01-04', '2nd', 'C', '2024'),
(191, '4163/2024', 'Dhansvi Nitin  Hatwar', 'Vandana', '2017-03-21', '2nd', 'C', '2024'),
(192, '3792/2023', 'Dhrup Atul Marghade', 'Manisha', '2016-10-09', '2nd', 'C', '2024'),
(193, '3991/2023', 'Gurutva Shiokumar Ishwarkar', 'Puja', '2017-07-12', '2nd', 'C', '2024'),
(194, '3954/2023', 'Hastee Praful Dhandhukiya', 'Preeti', '2017-07-24', '2nd', 'C', '2024'),
(195, '2895/2023', 'Juhi Pranay Kosare', 'Rupali', '2016-12-10', '2nd', 'C', '2024'),
(196, '3985/2023', 'Krishna Prakash Pande', 'Gauri', '2017-07-29', '2nd', 'C', '2024'),
(197, '3922/2023', 'Labhanshi Tushar Bhivgade', 'Angita', '2017-02-04', '2nd', 'C', '2024'),
(198, '3930/2023', 'Lavanya Laxman Kanpate', 'jyoti', '2016-11-14', '2nd', 'C', '2024'),
(199, '3814/2023', 'Lubdhi Milind Danao', 'Vaishali', '2017-09-10', '2nd', 'C', '2024'),
(200, '3872/2023', 'Mohini Suryakant Mude', 'Vaishali', '2017-11-13', '2nd', 'C', '2024'),
(201, '3914/2023', 'Naman  Sanjay Mankani', 'Sakshi', '2017-06-07', '2nd', 'C', '2024'),
(202, '3940/2023', 'Prince Sanjay Wadhwani', 'Kajal', '2016-11-23', '2nd', 'C', '2024'),
(203, '4109/2023', 'Rishi Ravindra Raut', 'Rupali', '2017-09-07', '2nd', 'C', '2024'),
(204, '3777/2023', 'Sahil Sunil Dhande', 'Gita', '2017-04-24', '2nd', 'C', '2024'),
(205, '3993/2023', 'Sai Pitambar Tangle', 'Shweta', '2016-10-21', '2nd', 'C', '2024'),
(206, '3809/2023', 'Sanvi Vicky Walde', 'Shubhangi', '2016-09-15', '2nd', 'C', '2024'),
(207, '3924/2023', 'Shravani Rupesh Hedau', 'Priyanka', '2016-08-29', '2nd', 'C', '2024'),
(208, '3994/2023', 'Shravani Dinesh Gaydhane', 'Mamta', '2016-12-22', '2nd', 'C', '2024'),
(209, '4051/2023', 'Shreya Naneshwar Waghaye', 'Aarti', '2017-05-03', '2nd', 'C', '2024'),
(210, '3910/2023', 'Swarali Nilesh Chatole', 'Priyanka', '2017-05-03', '2nd', 'C', '2024'),
(211, '3915/2023', 'Tejomay Yogesh Kamdi', 'Anshu', '2017-07-04', '2nd', 'C', '2024'),
(212, '3961/2023', 'Tithi Kishor Bhoyar', 'Vaishali', '2017-01-22', '2nd', 'C', '2024'),
(213, '3911/2023', 'Vedika Pankaj Sawale', 'Ashwini', '2017-05-04', '2nd', 'C', '2024'),
(214, '', 'Vrushabh Arvind Dorle', 'Swati', '2017-07-31', '2nd', 'C', '2024'),
(215, '3981/2023', 'Yashvi Vishnukant Suryawanshi', 'Kalyani', '2016-09-03', '2nd', 'C', '2024'),
(216, '3908/2023', 'Aayushi Bhaskar Harde', 'Shilpa', '2016-07-07', '2nd', 'B', '2024'),
(217, '3913/2023', 'Adhira Chetan Shendre', 'Sheetal', '2017-07-04', '2nd', 'B', '2024'),
(218, '3976/2023', 'Ajinkya Lahu Kambali', 'Pratima', '2017-01-31', '2nd', 'B', '2024'),
(219, '3909/2023', 'Aryan Rajesh Dhurve', 'Manisha', '2017-07-18', '2nd', 'B', '2024'),
(220, '3791/2023', 'Avaneeshkumar Umeshkumar Jatav', 'Deepti', '2016-10-31', '2nd', 'B', '2024'),
(221, '3924/2023', 'Bhargavi Narendra Zalke', 'Ashwini', '2017-01-24', '2nd', 'B', '2024'),
(222, '4095/2023', 'Darshak Ravindra Bhiogade', 'Varsha', '2016-04-16', '2nd', 'B', '2024'),
(223, '3778/2023', 'Dhanshri Jagdish Shivankar', 'Gaytri', '2016-12-02', '2nd', 'B', '2024'),
(224, '3983/2023', 'Harsh Dilip Ingle', 'Manisha', '2017-04-06', '2nd', 'B', '2024'),
(225, '4086/2023', 'Harshwardhan Vishal Chopkar', 'Minakshi', '2017-02-09', '2nd', 'B', '2024'),
(226, '3810/2023', 'Hetansh Lokesh Sonwane', 'Shubhagi', '2017-05-29', '2nd', 'B', '2024'),
(227, '3931/2023', 'Jay Narendra Wagh', 'Varsha', '2016-01-12', '2nd', 'B', '2024'),
(228, '4184/2024', 'Kartik Nayankumar Rathod', 'Kanchan', '2017-05-06', '2nd', 'B', '2024'),
(229, '4359/2024', 'Kavya Amolkumar Chandewar', 'Surekha', '2017-03-08', '2nd', 'B', '2024'),
(230, '3910/2023', 'Kohil Amit Sakure', 'Pranita', '2016-10-21', '2nd', 'B', '2024'),
(231, '3932/2023', 'Manasvi Piyush Pal', 'Usha', '2017-09-19', '2nd', 'B', '2024'),
(232, '42422024', 'Priyanshu  Shekhar Gabhane', 'Ashwini', '2017-05-06', '2nd', 'B', '2024'),
(233, '3992/2023', 'Purvi Prashant Tadase', 'Nilima', '2017-09-21', '2nd', 'B', '2024'),
(234, '3979/2023', 'Ridham Nitin Jaronde', 'Chhya', '2017-07-26', '2nd', 'B', '2024'),
(235, '3887/2023', 'Ridhima Tushar Dhapade', 'Minakshi', '2017-10-26', '2nd', 'B', '2024'),
(236, '3984/2023', 'Rudra Purushottam Kawale', 'Shilpa', '2017-10-21', '2nd', 'B', '2024'),
(237, '3928/2023', 'Sambodhi Prashant Meshram', 'Jotsna', '2017-02-08', '2nd', 'B', '2024'),
(238, '3929/2023', 'Sanaya Jitendra Dipte', 'Dipa', '2016-10-15', '2nd', 'B', '2024'),
(239, '3798/2023', 'Saumya  Sujeet Maturkar', 'Nandini', '2017-01-21', '2nd', 'B', '2024'),
(240, '3987/2023', 'Shaurya Mangesh Bandebuche', 'Deepika', '2016-10-22', '2nd', 'B', '2024'),
(241, '3982/2023', 'Sheeban Sufiyan Sheikh', 'Afsana', '2017-12-10', '2nd', 'B', '2024'),
(242, '3927/2023', 'Shivanya Kamal Prajapati', 'Madhu', '2016-11-09', '2nd', 'B', '2024'),
(243, '3986/2023', 'Shivanya Kamlesh Shende', 'Malu', '2016-11-11', '2nd', 'B', '2024'),
(244, '3939/2023', 'Tej Sandip Padole', 'Madhuri', '2016-10-04', '2nd', 'B', '2024'),
(245, '4183/2024', 'Tejashree Nayankumar Rathod', 'Kanchan', '2017-05-06', '2nd', 'B', '2024'),
(246, '3903/2023', 'Vaishnavi Kashinath Wanve', 'Chhya', '2017-01-23', '2nd', 'B', '2024'),
(247, '3975/2023', 'Vedik Shailesh Nagpure', 'Indu', '2017-03-06', '2nd', 'B', '2024'),
(248, '3946/2023', 'Yasha Khushal Sawani', 'Khushbu', '2016-09-10', '2nd', 'B', '2024'),
(249, '3918/2023', 'Yatharth Dhamodar Lute', 'Megha', '2017-06-09', '2nd', 'B', '2024'),
(250, '3593/2022', 'Aaryan Haridas Vanjari', 'Ratnamala', '2016-04-19', '3rd', 'A', '2024'),
(251, '3573/2022', 'Aathira Jitendra Hatwar', 'Keju', '2016-07-26', '3rd', 'A', '2024'),
(252, '3592/2022', 'Arjun Sunil Mirashe', 'Geeta', '2016-01-31', '3rd', 'A', '2024'),
(253, '3569/2022', 'Arnav Ashish Karwade', 'Pradnya', '2015-11-25', '3rd', 'A', '2024'),
(254, '3591/2022', 'Arnav Angad Dupare', 'Hirkanya', '2016-03-10', '3rd', 'A', '2024'),
(255, '-', 'Bhargavi Sandeep Motghare', 'Uma', '2015-05-08', '3rd', 'A', '2024'),
(256, '4100/2023', 'Devid Sanjay Yesane', 'Priyanka', '2016-04-15', '3rd', 'A', '2024'),
(257, '3691/2022', 'Hruday Ankush Madankar', 'Rupali', '2015-12-27', '3rd', 'A', '2024'),
(258, '3588/2022', 'Inaya Langha Fatima', 'Asma', '2016-09-08', '3rd', 'A', '2024'),
(259, '3659/2022', 'Jay Rajesh Badwaik', 'Shweta', '2016-09-12', '3rd', 'A', '2024'),
(260, '3690/2022', 'Lakshya Vikram Ukey', 'Rashami', '2015-03-23', '3rd', 'A', '2024'),
(261, '3665/2022', 'Masid Mohsin Sayyed', 'Saba', '2016-07-09', '3rd', 'A', '2024'),
(262, '3585/2022', 'Nityam Sunil  Jibhakate', 'Jaya', '2016-01-07', '3rd', 'A', '2024'),
(263, '6154/2024', 'Ojas Nishant Junonkar', 'Prachee', '2016-12-21', '3rd', 'A', '2024'),
(264, '4238/2024', 'Palak Kailash Kamble', 'Mahalaxmi', '2015-11-04', '3rd', 'A', '2024'),
(265, '3584/2022', 'Paridhi Narendra Ambule', 'Rupali', '2016-07-01', '3rd', 'A', '2024'),
(266, '3565/2022', 'Purvi Lomesh Samarth', 'Geeta', '2016-03-25', '3rd', 'A', '2024'),
(267, '3681/2022', 'Raavi Keshav Wanjari', 'Sharda', '2016-08-30', '3rd', 'A', '2024'),
(268, '3668/2022', 'Ram Ratnakar Bangadkar', 'Ratna', '2015-07-04', '3rd', 'A', '2024'),
(269, '3671/2022', 'Rehansh Vinod Bawane', 'Puja', '2016-02-07', '3rd', 'A', '2024'),
(270, '3669/2022', 'Rihanshi Manish Sonkusare', 'Prabha', '2016-02-21', '3rd', 'A', '2024'),
(271, '3663/2022', 'Safiya Mujjmil Syyed', 'Noushiya', '2016-04-02', '3rd', 'A', '2024'),
(272, '3667/2022', 'Samyak Ramkrishna      Wadibhasme', 'Harsha', '2015-10-31', '3rd', 'A', '2024'),
(273, '3657/2022', 'Sanchay Sandip Bandebuche', 'Chitali', '2016-06-20', '3rd', 'A', '2024'),
(274, '3662/2022', 'Sanskriti Ravindra Shelare', 'Laxmi', '2016-02-26', '3rd', 'A', '2024'),
(275, '4251/2024', 'Sanskruti Dipak Bulbule', 'Charulata', '2016-01-13', '3rd', 'A', '2024'),
(276, '4235/2024', 'Saumya Dilip Thulkar', 'Devindra', '2015-09-27', '3rd', 'A', '2024'),
(277, '3563/2022', 'Shriya Ajitkumar Bachere', 'Pratiksha', '2015-12-16', '3rd', 'A', '2024'),
(278, '3562/2022', 'Tanishka Nilkanth Kapgate', 'Chhaya', '2016-07-13', '3rd', 'A', '2024'),
(279, '3570/2022', 'Tanvi Kishor Deshkar', 'Pournima', '2016-02-29', '3rd', 'A', '2024'),
(280, '3566/2022', 'Ved Chetan Jhawar', 'Mansi', '2015-12-12', '3rd', 'A', '2024'),
(281, '4234/2024', 'Yashaswa Umesh Tirpude', 'Supriya', '2016-05-25', '3rd', 'A', '2024'),
(282, '3580/2022', 'Yeshika Alok Kakde', 'Radhika', '2016-06-20', '3rd', 'A', '2024'),
(283, '3664/2022', 'Advita Tarachand Deshmukh', 'Lata', '2016-10-17', '3rd', 'B', '2024'),
(284, '3995/2023', 'Aradhya Balkrishna Bhute', 'Shital', '2016-04-30', '3rd', 'B', '2024'),
(285, '3556/2022', 'Ashwath Ankush Katakwar', 'Payal', '2015-08-28', '3rd', 'B', '2024'),
(286, '3598/2022', 'Bhargavi Atul Wanjari', 'Madhuri', '2016-08-14', '3rd', 'B', '2024'),
(287, '4108/2023', 'Chancy Vishwajit Rajabhoj', 'Rajshree', '2016-06-01', '3rd', 'B', '2024'),
(288, '3679/2022', 'Devanshi Anil Kapgate', 'Vanita', '2016-12-09', '3rd', 'B', '2024'),
(289, '3656/2022', 'Dhru Vasanta Sapate', 'Yogita', '2015-12-13', '3rd', 'B', '2024'),
(290, '3680/2022', 'Dhruvi Ravindra Sawarbandhe', 'Madhuri', '2016-11-05', '3rd', 'B', '2024'),
(291, '3586/2022', 'Divya Ratnesh Kohroo', 'Anjali', '2015-12-18', '3rd', 'B', '2024'),
(292, '3966/2023', 'Divyanshu Visha Bandebuche', 'Kiran', '2015-10-19', '3rd', 'B', '2024'),
(293, '3600/2022', 'Garv Yogesh Fulsunge', 'Reema', '2016-11-08', '3rd', 'B', '2024'),
(294, '3773/2022', 'Ghanshyam Nasiket Patil', 'Nilima', '2015-11-28', '3rd', 'B', '2024'),
(295, '3601/2022', 'Gitesh Pramod Rukhmode', 'Rupali', '2016-02-18', '3rd', 'B', '2024'),
(296, '3793/2023', 'Hemani Nrupendra Shende', 'Neha', '2016-04-15', '3rd', 'B', '2024'),
(297, '3561/2022', 'Himanshi Nitin Agrawal', 'Sapana', '2015-07-17', '3rd', 'B', '2024'),
(298, '3595/2022', 'Janhavi Amit Badwaik', 'Roshani', '2016-04-29', '3rd', 'B', '2024'),
(299, '3941/2023', 'Kashyap Ishwar Katekhaye', 'Pramodini ', '2015-10-30', '3rd', 'B', '2024'),
(300, '3590/2022', 'Khushant Prakash Khobragade', 'Bhagyashri', '2016-04-02', '3rd', 'B', '2024'),
(301, '3558/2022', 'Mayank Rajkumar Pal', 'Sunita', '2016-01-12', '3rd', 'B', '2024'),
(302, '3785/2023', 'Oshan Ramesh Taikar', 'Anita ', '2016-04-03', '3rd', 'B', '2024'),
(303, '4159/2024', 'Reyansh Dipak Chalurkar', 'Payal', '2015-09-27', '3rd', 'B', '2024'),
(304, '3673/2022', 'Rishee Rajesh Jibhkate', 'Deepika', '2016-11-28', '3rd', 'B', '2024'),
(305, '3577/2022', 'Ruhi Manish Bawankar', 'Pratibha', '2015-11-15', '3rd', 'B', '2024'),
(306, '3576/2022', 'Saksham Pravin Waghmare', 'Rajshri', '2016-05-02', '3rd', 'B', '2024'),
(307, '3970/2023', 'Samyak Manoj Bandebuche', 'Minakshi', '2016-01-17', '3rd', 'B', '2024'),
(308, '4148/2024', 'Sanidhya  Nilesh  Bhure', 'Jayshree', '2016-01-13', '3rd', 'B', '2024'),
(309, '3594/2022', 'Sanskar Rajesh Gadhve', 'Roshani', '2016-03-28', '3rd', 'B', '2024'),
(310, '4308/2024', 'Sanvi Sunil Shende', 'Shilpa', '2015-11-03', '3rd', 'B', '2024'),
(311, '4156/2024', 'Sharayu Pradip Bilawane', 'Vinu', '2015-12-22', '3rd', 'B', '2024'),
(312, '4094/2023', 'Sparsh Vivek Meshram', 'Bharti', '2015-10-23', '3rd', 'B', '2024'),
(313, '3666/2022', 'Swara Narendra Padole', 'Srushti', '2016-03-17', '3rd', 'B', '2024'),
(314, '3678/2022', 'Teenay Avinash Gedam', 'Pranita', '2016-04-18', '3rd', 'B', '2024'),
(315, '3658/2022', 'Ved Pravin Pande', 'Punam ', '2016-09-15', '3rd', 'B', '2024'),
(316, '3649/2022', 'Yadavee Aniruddha Patthe', 'Ashwini', '2016-11-03', '3rd', 'B', '2024'),
(317, '4410/2024', 'Shlok Sachin Jagtap', 'Yogita', '2016-03-19', '3rd', 'B', '2024'),
(318, '3670/2022', 'Aasvi Vinayak Gharde', 'Sima', '2016-05-09', '3rd', 'C', '2024'),
(319, '3574/2022', 'Agamya Nitin Wairagadkar', 'Yogini', '2016-05-17', '3rd', 'C', '2024'),
(320, '3602/2022', 'Ashvik Shivraj Gokhale', 'Alka', '2016-11-08', '3rd', 'C', '2024'),
(321, '3597/2022', 'Bhavesh Sushil Bandebuche', 'Ashvini', '2015-08-27', '3rd', 'C', '2024'),
(322, '3871/2023', 'Buddhansh Nitin Ganvir', 'Rohini', '2016-07-11', '3rd', 'C', '2024'),
(323, '3560/2022', 'Devanshi Balram Sonkusare', 'Tejswini', '2016-09-15', '3rd', 'C', '2024'),
(324, '3578/2022', 'Dhanish Tushar Patel', 'Chetana', '2015-09-21', '3rd', 'C', '2024'),
(325, '3512/2022', 'Divyanka Dhanraj Hedaoo', 'Jyoti', '2016-09-17', '3rd', 'C', '2024'),
(326, '4093/2022', 'Gargee Laxmikant Kodape', 'Hirali', '2016-12-02', '3rd', 'C', '2024'),
(327, '3689/2022', 'Gobindsingh Pradeep Anand', 'Paramjeet', '2016-08-03', '3rd', 'C', '2024'),
(328, '3587/2022', 'Ketaki Prashant Shende', 'Tejaswi', '2016-03-17', '3rd', 'C', '2024'),
(329, '3579/2022', 'Mansvi Vinod Doye', 'Rupali', '2016-02-22', '3rd', 'C', '2024'),
(330, '3677/2022', 'Mayank Pramodkumar Rewatkar', 'Nisha', '2015-12-01', '3rd', 'C', '2024'),
(331, '4139/2022', 'Mugdha Amit Meshram', 'Mrunali', '2016-02-14', '3rd', 'C', '2024'),
(332, '3564/2022', 'Pranshu Rakesh Bankar', 'Vanita', '2016-04-05', '3rd', 'C', '2024'),
(333, '3676/2022', 'Pratham Vijay Padole', 'Shalu', '2016-09-30', '3rd', 'C', '2024'),
(334, '3654/2022', 'Riyansh Rakesh Bagde', 'Nisha', '2015-11-26', '3rd', 'C', '2024'),
(335, '3575/2022', 'Rudved Gunwant Shende', 'Ashwini', '2015-12-08', '3rd', 'C', '2024'),
(336, '3843/2023', 'Shayan Akhtar Sheikh', 'Zeenat', '2016-08-20', '3rd', 'C', '2024'),
(337, '3653/2022', 'Shikha Devidas Giripunje', 'Meenakshi', '2015-07-22', '3rd', 'C', '2024'),
(338, '3683/2022', 'Shivay Ranjit Ahirwar', 'Preeti', '2016-06-14', '3rd', 'C', '2024'),
(339, '3900/2023', 'Shourya Kamlesh Rakhade', 'Bhagyashri', '2016-05-03', '3rd', 'C', '2024'),
(340, '4161/2024', 'Smaily Kailash Wanjari', 'Diksha', '2016-02-29', '3rd', 'C', '2024'),
(341, '3902/2023', 'Smith Ritendra Barve', 'Seeta', '2016-12-15', '3rd', 'C', '2024'),
(342, '3672/2022', 'Sparsh Pramod Humane', 'Shital', '2016-03-18', '3rd', 'C', '2024'),
(343, '3660/2022', 'Swara Shashank Tiwari', 'Rina', '2016-11-28', '3rd', 'C', '2024'),
(344, '3682/2022', 'Tamanna Nilesh Bhajankar', 'Meena', '2015-12-21', '3rd', 'C', '2024'),
(345, '3589/2022', 'Twinkal Arun Samarth', 'Tejaswini', '2016-02-25', '3rd', 'C', '2024'),
(346, '3567/2022', 'Upadhnya Harishkumar Bundele', 'Mamta', '2016-07-01', '3rd', 'C', '2024'),
(347, '3892/2023', 'Vansh Pranav Limje', 'Priyanka', '2016-05-07', '3rd', 'C', '2024'),
(348, '3583/2022', 'Ved Amol Ghatole', 'Neha', '2015-11-23', '3rd', 'C', '2024'),
(349, '3674/2022', 'Vivaan Sanket Lichade', 'Aparna', '2016-05-09', '3rd', 'C', '2024'),
(350, '4415/2024', 'Teertha Manoj Munishwar', 'Mrunali', '2016-08-01', '3rd', 'C', '2024');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','teacher') DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`, `role`, `name`, `created`) VALUES
(1, 'rk@gmail.com', '$2y$10$xleNV9/6D3XVBtSucu8uluepw0DXNF3Zp3EPxc0vwiSnsUOeFjG7q', 'teacher', 'rk', '2024-08-12 10:30:28'),
(2, 'admin@gmail.com', '$2y$10$8xxOr.bHBN//75Jz3nEmS.NN97X9vdv8i0lkIS.kn2vPPPyQeE41W', 'admin', 'admin', '2024-09-25 10:45:55'),
(4, 'teacher@gmail.com', '$2y$10$x2O9W1XFzg1JDZFFrDBTe.Rs3XzpCdQnal/ja7RCen2Z4GAvCTCsW', 'teacher', 'teacher', '2024-10-23 11:41:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_years`
--
ALTER TABLE `academic_years`
  ADD PRIMARY KEY (`year_id`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `excellence`
--
ALTER TABLE `excellence`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`mark_id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`result_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_years`
--
ALTER TABLE `academic_years`
  MODIFY `year_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `excellence`
--
ALTER TABLE `excellence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `mark_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=351;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `excellence`
--
ALTER TABLE `excellence`
  ADD CONSTRAINT `excellence_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`);

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
