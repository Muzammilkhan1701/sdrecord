-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2024 at 07:05 PM
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
-- Database: `sdrecord`
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

--
-- Dumping data for table `academic_years`
--

INSERT INTO `academic_years` (`year_id`, `academic_year`, `student_id`) VALUES
(1, '2023', 3),
(5, '2023', 2),
(7, '2025', 1),
(9, '2024', 4);

-- --------------------------------------------------------

--
-- Table structure for table `excellence`
--

CREATE TABLE `excellence` (
  `id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
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

--
-- Dumping data for table `excellence`
--

INSERT INTO `excellence` (`id`, `student_id`, `term1_work_education`, `term1_art_education`, `term1_physical_education`, `term1_discipline`, `term2_work_education`, `term2_art_education`, `term2_physical_education`, `term2_discipline`, `created`, `modified`) VALUES
(4, 1, 'A1', 'A1', 'B1', 'B2', 'A2', 'C1', 'C2', 'B1', '2024-09-10 09:56:09', '2024-09-10 09:56:09'),
(5, 2, 'A1', 'A2', 'B1', 'B2', 'A2', 'C1', 'C2', 'B1', '2024-09-10 07:30:34', '2024-09-10 07:34:32'),
(6, 4, 'a1', 'a2', 'a1', 'a2', '', '', '', '', '2024-09-25 10:41:34', '2024-09-25 10:41:34');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `mark_id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `academic_year` varchar(9) NOT NULL,
  `rollno` varchar(20) NOT NULL,
  `class` varchar(50) NOT NULL,
  `term1_subject_1` int(11) DEFAULT 0,
  `term1_subject_1_periodic_test` int(11) DEFAULT 0,
  `term1_subject_1_subject_enrichment` int(11) DEFAULT 0,
  `term1_subject_1_multiple_assessment` int(11) DEFAULT 0,
  `term1_subject_1_portfolio` int(11) DEFAULT 0,
  `term1_subject_1_total` int(11) GENERATED ALWAYS AS (`term1_subject_1` + `term1_subject_1_periodic_test` + `term1_subject_1_subject_enrichment` + `term1_subject_1_multiple_assessment` + `term1_subject_1_portfolio`) STORED,
  `term1_subject_1_grade` varchar(5) GENERATED ALWAYS AS (case when `term1_subject_1_total` >= 91 then 'A1' when `term1_subject_1_total` >= 81 then 'A2' when `term1_subject_1_total` >= 71 then 'B1' when `term1_subject_1_total` >= 61 then 'B2' when `term1_subject_1_total` >= 51 then 'C1' when `term1_subject_1_total` >= 41 then 'C2' when `term1_subject_1_total` >= 33 then 'D' else 'E' end) STORED,
  `term1_subject_2` int(11) DEFAULT 0,
  `term1_subject_2_periodic_test` int(11) DEFAULT 0,
  `term1_subject_2_subject_enrichment` int(11) DEFAULT 0,
  `term1_subject_2_multiple_assessment` int(11) DEFAULT 0,
  `term1_subject_2_portfolio` int(11) DEFAULT 0,
  `term1_subject_2_total` int(11) GENERATED ALWAYS AS (`term1_subject_2` + `term1_subject_2_periodic_test` + `term1_subject_2_subject_enrichment` + `term1_subject_2_multiple_assessment` + `term1_subject_2_portfolio`) STORED,
  `term1_subject_2_grade` varchar(5) GENERATED ALWAYS AS (case when `term1_subject_2_total` >= 91 then 'A1' when `term1_subject_2_total` >= 81 then 'A2' when `term1_subject_2_total` >= 71 then 'B1' when `term1_subject_2_total` >= 61 then 'B2' when `term1_subject_2_total` >= 51 then 'C1' when `term1_subject_2_total` >= 41 then 'C2' when `term1_subject_2_total` >= 33 then 'D' else 'E' end) STORED,
  `term1_subject_3` int(11) DEFAULT 0,
  `term1_subject_3_periodic_test` int(11) DEFAULT 0,
  `term1_subject_3_subject_enrichment` int(11) DEFAULT 0,
  `term1_subject_3_multiple_assessment` int(11) DEFAULT 0,
  `term1_subject_3_portfolio` int(11) DEFAULT 0,
  `term1_subject_3_total` int(11) GENERATED ALWAYS AS (`term1_subject_3` + `term1_subject_3_periodic_test` + `term1_subject_3_subject_enrichment` + `term1_subject_3_multiple_assessment` + `term1_subject_3_portfolio`) STORED,
  `term1_subject_3_grade` varchar(5) GENERATED ALWAYS AS (case when `term1_subject_3_total` >= 91 then 'A1' when `term1_subject_3_total` >= 81 then 'A2' when `term1_subject_3_total` >= 71 then 'B1' when `term1_subject_3_total` >= 61 then 'B2' when `term1_subject_3_total` >= 51 then 'C1' when `term1_subject_3_total` >= 41 then 'C2' when `term1_subject_3_total` >= 33 then 'D' else 'E' end) STORED,
  `term1_subject_4` int(11) DEFAULT 0,
  `term1_subject_4_periodic_test` int(11) DEFAULT 0,
  `term1_subject_4_subject_enrichment` int(11) DEFAULT 0,
  `term1_subject_4_multiple_assessment` int(11) DEFAULT 0,
  `term1_subject_4_portfolio` int(11) DEFAULT 0,
  `term1_subject_4_total` int(11) GENERATED ALWAYS AS (`term1_subject_4` + `term1_subject_4_periodic_test` + `term1_subject_4_subject_enrichment` + `term1_subject_4_multiple_assessment` + `term1_subject_4_portfolio`) STORED,
  `term1_subject_4_grade` varchar(5) GENERATED ALWAYS AS (case when `term1_subject_4_total` >= 91 then 'A1' when `term1_subject_4_total` >= 81 then 'A2' when `term1_subject_4_total` >= 71 then 'B1' when `term1_subject_4_total` >= 61 then 'B2' when `term1_subject_4_total` >= 51 then 'C1' when `term1_subject_4_total` >= 41 then 'C2' when `term1_subject_4_total` >= 33 then 'D' else 'E' end) STORED,
  `term1_subject_5` int(11) DEFAULT 0,
  `term1_subject_5_periodic_test` int(11) DEFAULT 0,
  `term1_subject_5_subject_enrichment` int(11) DEFAULT 0,
  `term1_subject_5_multiple_assessment` int(11) DEFAULT 0,
  `term1_subject_5_portfolio` int(11) DEFAULT 0,
  `term1_subject_5_total` int(11) GENERATED ALWAYS AS (`term1_subject_5` + `term1_subject_5_periodic_test` + `term1_subject_5_subject_enrichment` + `term1_subject_5_multiple_assessment` + `term1_subject_5_portfolio`) STORED,
  `term1_subject_5_grade` varchar(5) GENERATED ALWAYS AS (case when `term1_subject_5_total` >= 91 then 'A1' when `term1_subject_5_total` >= 81 then 'A2' when `term1_subject_5_total` >= 71 then 'B1' when `term1_subject_5_total` >= 61 then 'B2' when `term1_subject_5_total` >= 51 then 'C1' when `term1_subject_5_total` >= 41 then 'C2' when `term1_subject_5_total` >= 33 then 'D' else 'E' end) STORED,
  `term1_subject_6` int(11) DEFAULT 0,
  `term1_subject_6_periodic_test` int(11) DEFAULT 0,
  `term1_subject_6_subject_enrichment` int(11) DEFAULT 0,
  `term1_subject_6_multiple_assessment` int(11) DEFAULT 0,
  `term1_subject_6_portfolio` int(11) DEFAULT 0,
  `term1_subject_6_total` int(11) GENERATED ALWAYS AS (`term1_subject_6` + `term1_subject_6_periodic_test` + `term1_subject_6_subject_enrichment` + `term1_subject_6_multiple_assessment` + `term1_subject_6_portfolio`) STORED,
  `term1_subject_6_grade` varchar(5) GENERATED ALWAYS AS (case when `term1_subject_6_total` >= 91 then 'A1' when `term1_subject_6_total` >= 81 then 'A2' when `term1_subject_6_total` >= 71 then 'B1' when `term1_subject_6_total` >= 61 then 'B2' when `term1_subject_6_total` >= 51 then 'C1' when `term1_subject_6_total` >= 41 then 'C2' when `term1_subject_6_total` >= 33 then 'D' else 'E' end) STORED,
  `term1_subject_7` int(11) DEFAULT 0,
  `term1_subject_7_periodic_test` int(11) DEFAULT 0,
  `term1_subject_7_subject_enrichment` int(11) DEFAULT 0,
  `term1_subject_7_multiple_assessment` int(11) DEFAULT 0,
  `term1_subject_7_portfolio` int(11) DEFAULT 0,
  `term1_subject_7_total` int(11) GENERATED ALWAYS AS (`term1_subject_7` + `term1_subject_7_periodic_test` + `term1_subject_7_subject_enrichment` + `term1_subject_7_multiple_assessment` + `term1_subject_7_portfolio`) STORED,
  `term1_subject_7_grade` varchar(5) GENERATED ALWAYS AS (case when `term1_subject_7_total` >= 91 then 'A1' when `term1_subject_7_total` >= 81 then 'A2' when `term1_subject_7_total` >= 71 then 'B1' when `term1_subject_7_total` >= 61 then 'B2' when `term1_subject_7_total` >= 51 then 'C1' when `term1_subject_7_total` >= 41 then 'C2' when `term1_subject_7_total` >= 33 then 'D' else 'E' end) STORED,
  `term1_total` int(11) GENERATED ALWAYS AS (`term1_subject_1_total` + `term1_subject_2_total` + `term1_subject_3_total` + `term1_subject_4_total` + `term1_subject_5_total` + `term1_subject_6_total` + `term1_subject_7_total`) STORED,
  `term2_subject_1` int(11) DEFAULT 0,
  `term2_subject_1_periodic_test` int(11) DEFAULT 0,
  `term2_subject_1_subject_enrichment` int(11) DEFAULT 0,
  `term2_subject_1_multiple_assessment` int(11) DEFAULT 0,
  `term2_subject_1_portfolio` int(11) DEFAULT 0,
  `term2_subject_1_total` int(11) GENERATED ALWAYS AS (`term2_subject_1` + `term2_subject_1_periodic_test` + `term2_subject_1_subject_enrichment` + `term2_subject_1_multiple_assessment` + `term2_subject_1_portfolio`) STORED,
  `term2_subject_1_grade` varchar(5) GENERATED ALWAYS AS (case when `term2_subject_1_total` >= 91 then 'A1' when `term2_subject_1_total` >= 81 then 'A2' when `term2_subject_1_total` >= 71 then 'B1' when `term2_subject_1_total` >= 61 then 'B2' when `term2_subject_1_total` >= 51 then 'C1' when `term2_subject_1_total` >= 41 then 'C2' when `term2_subject_1_total` >= 33 then 'D' else 'E' end) STORED,
  `term2_subject_2` int(11) DEFAULT 0,
  `term2_subject_2_periodic_test` int(11) DEFAULT 0,
  `term2_subject_2_subject_enrichment` int(11) DEFAULT 0,
  `term2_subject_2_multiple_assessment` int(11) DEFAULT 0,
  `term2_subject_2_portfolio` int(11) DEFAULT 0,
  `term2_subject_2_total` int(11) GENERATED ALWAYS AS (`term2_subject_2` + `term2_subject_2_periodic_test` + `term2_subject_2_subject_enrichment` + `term2_subject_2_multiple_assessment` + `term2_subject_2_portfolio`) STORED,
  `term2_subject_2_grade` varchar(5) GENERATED ALWAYS AS (case when `term2_subject_2_total` >= 91 then 'A1' when `term2_subject_2_total` >= 81 then 'A2' when `term2_subject_2_total` >= 71 then 'B1' when `term2_subject_2_total` >= 61 then 'B2' when `term2_subject_2_total` >= 51 then 'C1' when `term2_subject_2_total` >= 41 then 'C2' when `term2_subject_2_total` >= 33 then 'D' else 'E' end) STORED,
  `term2_subject_3` int(11) DEFAULT 0,
  `term2_subject_3_periodic_test` int(11) DEFAULT 0,
  `term2_subject_3_subject_enrichment` int(11) DEFAULT 0,
  `term2_subject_3_multiple_assessment` int(11) DEFAULT 0,
  `term2_subject_3_portfolio` int(11) DEFAULT 0,
  `term2_subject_3_total` int(11) GENERATED ALWAYS AS (`term2_subject_3` + `term2_subject_3_periodic_test` + `term2_subject_3_subject_enrichment` + `term2_subject_3_multiple_assessment` + `term2_subject_3_portfolio`) STORED,
  `term2_subject_3_grade` varchar(5) GENERATED ALWAYS AS (case when `term2_subject_3_total` >= 91 then 'A1' when `term2_subject_3_total` >= 81 then 'A2' when `term2_subject_3_total` >= 71 then 'B1' when `term2_subject_3_total` >= 61 then 'B2' when `term2_subject_3_total` >= 51 then 'C1' when `term2_subject_3_total` >= 41 then 'C2' when `term2_subject_3_total` >= 33 then 'D' else 'E' end) STORED,
  `term2_subject_4` int(11) DEFAULT 0,
  `term2_subject_4_periodic_test` int(11) DEFAULT 0,
  `term2_subject_4_subject_enrichment` int(11) DEFAULT 0,
  `term2_subject_4_multiple_assessment` int(11) DEFAULT 0,
  `term2_subject_4_portfolio` int(11) DEFAULT 0,
  `term2_subject_4_total` int(11) GENERATED ALWAYS AS (`term2_subject_4` + `term2_subject_4_periodic_test` + `term2_subject_4_subject_enrichment` + `term2_subject_4_multiple_assessment` + `term2_subject_4_portfolio`) STORED,
  `term2_subject_4_grade` varchar(5) GENERATED ALWAYS AS (case when `term2_subject_4_total` >= 91 then 'A1' when `term2_subject_4_total` >= 81 then 'A2' when `term2_subject_4_total` >= 71 then 'B1' when `term2_subject_4_total` >= 61 then 'B2' when `term2_subject_4_total` >= 51 then 'C1' when `term2_subject_4_total` >= 41 then 'C2' when `term2_subject_4_total` >= 33 then 'D' else 'E' end) STORED,
  `term2_subject_5` int(11) DEFAULT 0,
  `term2_subject_5_periodic_test` int(11) DEFAULT 0,
  `term2_subject_5_subject_enrichment` int(11) DEFAULT 0,
  `term2_subject_5_multiple_assessment` int(11) DEFAULT 0,
  `term2_subject_5_portfolio` int(11) DEFAULT 0,
  `term2_subject_5_total` int(11) GENERATED ALWAYS AS (`term2_subject_5` + `term2_subject_5_periodic_test` + `term2_subject_5_subject_enrichment` + `term2_subject_5_multiple_assessment` + `term2_subject_5_portfolio`) STORED,
  `term2_subject_5_grade` varchar(5) GENERATED ALWAYS AS (case when `term2_subject_5_total` >= 91 then 'A1' when `term2_subject_5_total` >= 81 then 'A2' when `term2_subject_5_total` >= 71 then 'B1' when `term2_subject_5_total` >= 61 then 'B2' when `term2_subject_5_total` >= 51 then 'C1' when `term2_subject_5_total` >= 41 then 'C2' when `term2_subject_5_total` >= 33 then 'D' else 'E' end) STORED,
  `term2_subject_6` int(11) DEFAULT 0,
  `term2_subject_6_periodic_test` int(11) DEFAULT 0,
  `term2_subject_6_subject_enrichment` int(11) DEFAULT 0,
  `term2_subject_6_multiple_assessment` int(11) DEFAULT 0,
  `term2_subject_6_portfolio` int(11) DEFAULT 0,
  `term2_subject_6_total` int(11) GENERATED ALWAYS AS (`term2_subject_6` + `term2_subject_6_periodic_test` + `term2_subject_6_subject_enrichment` + `term2_subject_6_multiple_assessment` + `term2_subject_6_portfolio`) STORED,
  `term2_subject_6_grade` varchar(5) GENERATED ALWAYS AS (case when `term2_subject_6_total` >= 91 then 'A1' when `term2_subject_6_total` >= 81 then 'A2' when `term2_subject_6_total` >= 71 then 'B1' when `term2_subject_6_total` >= 61 then 'B2' when `term2_subject_6_total` >= 51 then 'C1' when `term2_subject_6_total` >= 41 then 'C2' when `term2_subject_6_total` >= 33 then 'D' else 'E' end) STORED,
  `term2_subject_7` int(11) DEFAULT 0,
  `term2_subject_7_periodic_test` int(11) DEFAULT 0,
  `term2_subject_7_subject_enrichment` int(11) DEFAULT 0,
  `term2_subject_7_multiple_assessment` int(11) DEFAULT 0,
  `term2_subject_7_portfolio` int(11) DEFAULT 0,
  `term2_subject_7_total` int(11) GENERATED ALWAYS AS (`term2_subject_7` + `term2_subject_7_periodic_test` + `term2_subject_7_subject_enrichment` + `term2_subject_7_multiple_assessment` + `term2_subject_7_portfolio`) STORED,
  `term2_subject_7_grade` varchar(5) GENERATED ALWAYS AS (case when `term2_subject_7_total` >= 91 then 'A1' when `term2_subject_7_total` >= 81 then 'A2' when `term2_subject_7_total` >= 71 then 'B1' when `term2_subject_7_total` >= 61 then 'B2' when `term2_subject_7_total` >= 51 then 'C1' when `term2_subject_7_total` >= 41 then 'C2' when `term2_subject_7_total` >= 33 then 'D' else 'E' end) STORED,
  `term2_total` int(11) GENERATED ALWAYS AS (`term2_subject_1_total` + `term2_subject_2_total` + `term2_subject_3_total` + `term2_subject_4_total` + `term2_subject_5_total` + `term2_subject_6_total` + `term2_subject_7_total`) STORED
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`mark_id`, `student_id`, `academic_year`, `rollno`, `class`, `term1_subject_1`, `term1_subject_1_periodic_test`, `term1_subject_1_subject_enrichment`, `term1_subject_1_multiple_assessment`, `term1_subject_1_portfolio`, `term1_subject_2`, `term1_subject_2_periodic_test`, `term1_subject_2_subject_enrichment`, `term1_subject_2_multiple_assessment`, `term1_subject_2_portfolio`, `term1_subject_3`, `term1_subject_3_periodic_test`, `term1_subject_3_subject_enrichment`, `term1_subject_3_multiple_assessment`, `term1_subject_3_portfolio`, `term1_subject_4`, `term1_subject_4_periodic_test`, `term1_subject_4_subject_enrichment`, `term1_subject_4_multiple_assessment`, `term1_subject_4_portfolio`, `term1_subject_5`, `term1_subject_5_periodic_test`, `term1_subject_5_subject_enrichment`, `term1_subject_5_multiple_assessment`, `term1_subject_5_portfolio`, `term1_subject_6`, `term1_subject_6_periodic_test`, `term1_subject_6_subject_enrichment`, `term1_subject_6_multiple_assessment`, `term1_subject_6_portfolio`, `term1_subject_7`, `term1_subject_7_periodic_test`, `term1_subject_7_subject_enrichment`, `term1_subject_7_multiple_assessment`, `term1_subject_7_portfolio`, `term2_subject_1`, `term2_subject_1_periodic_test`, `term2_subject_1_subject_enrichment`, `term2_subject_1_multiple_assessment`, `term2_subject_1_portfolio`, `term2_subject_2`, `term2_subject_2_periodic_test`, `term2_subject_2_subject_enrichment`, `term2_subject_2_multiple_assessment`, `term2_subject_2_portfolio`, `term2_subject_3`, `term2_subject_3_periodic_test`, `term2_subject_3_subject_enrichment`, `term2_subject_3_multiple_assessment`, `term2_subject_3_portfolio`, `term2_subject_4`, `term2_subject_4_periodic_test`, `term2_subject_4_subject_enrichment`, `term2_subject_4_multiple_assessment`, `term2_subject_4_portfolio`, `term2_subject_5`, `term2_subject_5_periodic_test`, `term2_subject_5_subject_enrichment`, `term2_subject_5_multiple_assessment`, `term2_subject_5_portfolio`, `term2_subject_6`, `term2_subject_6_periodic_test`, `term2_subject_6_subject_enrichment`, `term2_subject_6_multiple_assessment`, `term2_subject_6_portfolio`, `term2_subject_7`, `term2_subject_7_periodic_test`, `term2_subject_7_subject_enrichment`, `term2_subject_7_multiple_assessment`, `term2_subject_7_portfolio`) VALUES
(7, 1, '2024', 'A504', '4', 59, 5, 4, 3, 2, 69, 3, 2, 1, 5, 59, 1, 2, 3, 4, 71, 5, 4, 3, 2, 65, 2, 3, 4, 1, 73, 2, 2, 3, 5, 80, 5, 5, 5, 5, 85, 5, 4, 3, 2, 56, 5, 4, 3, 2, 65, 2, 2, 3, 5, 69, 5, 5, 4, 1, 72, 5, 3, 4, 2, 73, 2, 2, 1, 5, 40, 3, 3, 3, 3),
(9, 3, '2023', '104', '4', 76, 4, 4, 4, 4, 75, 5, 4, 4, 3, 65, 5, 4, 4, 4, 65, 3, 5, 5, 4, 76, 4, 5, 4, 5, 78, 5, 5, 5, 4, 74, 4, 5, 5, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 2, '2023', 'a547', '5th', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 1, '2025', 'a604', '6th', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 4, '2024', '205', '12', 25, 2, 2, 2, 2, 58, 0, 2, 5, 5, 52, 5, 2, 2, 2, 25, 2, 0, 5, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 52, 2, 5, 5, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 5, '2025', 'c505', '5th', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `result_id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `academic_year` varchar(9) DEFAULT NULL,
  `term1_total_marks` int(11) DEFAULT NULL,
  `term1_percentage` decimal(5,2) DEFAULT NULL,
  `term1_grade` varchar(2) DEFAULT NULL,
  `term2_total_marks` int(11) DEFAULT NULL,
  `term2_percentage` decimal(5,2) DEFAULT NULL,
  `term2_grade` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`result_id`, `student_id`, `academic_year`, `term1_total_marks`, `term1_percentage`, `term1_grade`, `term2_total_marks`, `term2_percentage`, `term2_grade`) VALUES
(8, 3, '2023', 629, 89.86, 'A2', 0, 0.00, 'C1'),
(11, 2, '2023', 0, 0.00, 'E', 0, 0.00, 'E'),
(12, 1, '2025', 0, 0.00, 'E', 0, 0.00, 'E'),
(13, 4, '2024', 271, 38.71, 'D', 0, 0.00, 'D');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `Admission_no` varchar(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `section` varchar(50) NOT NULL,
  `admission_year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `Admission_no`, `name`, `mother_name`, `section`, `admission_year`) VALUES
(1, '12456/07', 'riya', 'k', 'a', '2020'),
(2, '12345/04', 'asim', 'D', 'A', '2022'),
(3, '12345/10', 'Zeeshan', 'D', 'A', '2022'),
(4, '2654/25', 'm', 'm', 'm', '2020'),
(5, '123145/054', 'rk', 'kk', 'c', '2024');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`, `name`, `created`) VALUES
(1, 'rk@gmail.com', '$2y$10$xleNV9/6D3XVBtSucu8uluepw0DXNF3Zp3EPxc0vwiSnsUOeFjG7q', 'rk', '2024-08-12 10:30:28'),
(2, 'admin@gmail.com', '$2y$10$8xxOr.bHBN//75Jz3nEmS.NN97X9vdv8i0lkIS.kn2vPPPyQeE41W', 'admin', '2024-09-25 10:45:55');

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
  ADD PRIMARY KEY (`mark_id`),
  ADD UNIQUE KEY `unique_student_year_class_rollno` (`student_id`,`academic_year`,`class`,`rollno`);

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
  MODIFY `year_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `excellence`
--
ALTER TABLE `excellence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `mark_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
