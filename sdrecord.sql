-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2024 at 08:55 PM
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
(23, '2024', 1);

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

--
-- Dumping data for table `excellence`
--

INSERT INTO `excellence` (`id`, `student_id`, `academic_year`, `class`, `term1_work_education`, `term1_art_education`, `term1_physical_education`, `term1_discipline`, `term2_work_education`, `term2_art_education`, `term2_physical_education`, `term2_discipline`, `created`, `modified`) VALUES
(21, 1, '2027', '6', '-', '-', '-', '-', '', '', '', '', '2024-10-24 18:40:59', '2024-10-24 18:40:59');

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
  `term1_subject_1_ct` int(11) DEFAULT 0,
  `term1_subject_1_periodic_test` int(11) DEFAULT 0,
  `term1_subject_1_subject_enrichment` int(11) DEFAULT 0,
  `term1_subject_1_multiple_assessment` int(11) DEFAULT 0,
  `term1_subject_1_portfolio` int(11) DEFAULT 0,
  `term1_subject_1_total` int(11) GENERATED ALWAYS AS (`term1_subject_1` + `term1_subject_1_ct` + `term1_subject_1_periodic_test` + `term1_subject_1_subject_enrichment` + `term1_subject_1_multiple_assessment` + `term1_subject_1_portfolio`) STORED,
  `term1_subject_1_grade` varchar(5) GENERATED ALWAYS AS (case when `term1_subject_1_total` >= 91 then 'A1' when `term1_subject_1_total` >= 81 then 'A2' when `term1_subject_1_total` >= 71 then 'B1' when `term1_subject_1_total` >= 61 then 'B2' when `term1_subject_1_total` >= 51 then 'C1' when `term1_subject_1_total` >= 41 then 'C2' when `term1_subject_1_total` >= 33 then 'D' else 'E' end) STORED,
  `term1_subject_2` int(11) DEFAULT 0,
  `term1_subject_2_periodic_test` int(11) DEFAULT 0,
  `term1_subject_2_subject_enrichment` int(11) DEFAULT 0,
  `term1_subject_2_multiple_assessment` int(11) DEFAULT 0,
  `term1_subject_2_portfolio` int(11) DEFAULT 0,
  `term1_subject_2_total` int(11) GENERATED ALWAYS AS (`term1_subject_2` + `term1_subject_2_ct` + `term1_subject_2_periodic_test` + `term1_subject_2_subject_enrichment` + `term1_subject_2_multiple_assessment` + `term1_subject_2_portfolio`) STORED,
  `term1_subject_2_grade` varchar(5) GENERATED ALWAYS AS (case when `term1_subject_2_total` >= 91 then 'A1' when `term1_subject_2_total` >= 81 then 'A2' when `term1_subject_2_total` >= 71 then 'B1' when `term1_subject_2_total` >= 61 then 'B2' when `term1_subject_2_total` >= 51 then 'C1' when `term1_subject_2_total` >= 41 then 'C2' when `term1_subject_2_total` >= 33 then 'D' else 'E' end) STORED,
  `term1_subject_3` int(11) DEFAULT 0,
  `term1_subject_3_periodic_test` int(11) DEFAULT 0,
  `term1_subject_3_subject_enrichment` int(11) DEFAULT 0,
  `term1_subject_3_multiple_assessment` int(11) DEFAULT 0,
  `term1_subject_3_portfolio` int(11) DEFAULT 0,
  `term1_subject_3_total` int(11) GENERATED ALWAYS AS (`term1_subject_3` + `term1_subject_3_ct` + `term1_subject_3_periodic_test` + `term1_subject_3_subject_enrichment` + `term1_subject_3_multiple_assessment` + `term1_subject_3_portfolio`) STORED,
  `term1_subject_3_grade` varchar(5) GENERATED ALWAYS AS (case when `term1_subject_3_total` >= 91 then 'A1' when `term1_subject_3_total` >= 81 then 'A2' when `term1_subject_3_total` >= 71 then 'B1' when `term1_subject_3_total` >= 61 then 'B2' when `term1_subject_3_total` >= 51 then 'C1' when `term1_subject_3_total` >= 41 then 'C2' when `term1_subject_3_total` >= 33 then 'D' else 'E' end) STORED,
  `term1_subject_4` int(11) DEFAULT 0,
  `term1_subject_4_periodic_test` int(11) DEFAULT 0,
  `term1_subject_4_subject_enrichment` int(11) DEFAULT 0,
  `term1_subject_4_multiple_assessment` int(11) DEFAULT 0,
  `term1_subject_4_portfolio` int(11) DEFAULT 0,
  `term1_subject_4_total` int(11) GENERATED ALWAYS AS (`term1_subject_4` + `term1_subject_4_ct` + `term1_subject_4_periodic_test` + `term1_subject_4_subject_enrichment` + `term1_subject_4_multiple_assessment` + `term1_subject_4_portfolio`) STORED,
  `term1_subject_4_grade` varchar(5) GENERATED ALWAYS AS (case when `term1_subject_4_total` >= 91 then 'A1' when `term1_subject_4_total` >= 81 then 'A2' when `term1_subject_4_total` >= 71 then 'B1' when `term1_subject_4_total` >= 61 then 'B2' when `term1_subject_4_total` >= 51 then 'C1' when `term1_subject_4_total` >= 41 then 'C2' when `term1_subject_4_total` >= 33 then 'D' else 'E' end) STORED,
  `term1_subject_5` int(11) DEFAULT 0,
  `term1_subject_5_periodic_test` int(11) DEFAULT 0,
  `term1_subject_5_subject_enrichment` int(11) DEFAULT 0,
  `term1_subject_5_multiple_assessment` int(11) DEFAULT 0,
  `term1_subject_5_portfolio` int(11) DEFAULT 0,
  `term1_subject_5_total` int(11) GENERATED ALWAYS AS (`term1_subject_5` + `term1_subject_5_ct` + `term1_subject_5_periodic_test` + `term1_subject_5_subject_enrichment` + `term1_subject_5_multiple_assessment` + `term1_subject_5_portfolio`) STORED,
  `term1_subject_5_grade` varchar(5) GENERATED ALWAYS AS (case when `term1_subject_5_total` >= 91 then 'A1' when `term1_subject_5_total` >= 81 then 'A2' when `term1_subject_5_total` >= 71 then 'B1' when `term1_subject_5_total` >= 61 then 'B2' when `term1_subject_5_total` >= 51 then 'C1' when `term1_subject_5_total` >= 41 then 'C2' when `term1_subject_5_total` >= 33 then 'D' else 'E' end) STORED,
  `term1_subject_6` int(11) DEFAULT 0,
  `term1_subject_6_periodic_test` int(11) DEFAULT 0,
  `term1_subject_6_subject_enrichment` int(11) DEFAULT 0,
  `term1_subject_6_multiple_assessment` int(11) DEFAULT 0,
  `term1_subject_6_portfolio` int(11) DEFAULT 0,
  `term1_subject_6_total` int(11) GENERATED ALWAYS AS (`term1_subject_6` + `term1_subject_6_ct` + `term1_subject_6_periodic_test` + `term1_subject_6_subject_enrichment` + `term1_subject_6_multiple_assessment` + `term1_subject_6_portfolio`) STORED,
  `term1_subject_6_grade` varchar(5) GENERATED ALWAYS AS (case when `term1_subject_6_total` >= 91 then 'A1' when `term1_subject_6_total` >= 81 then 'A2' when `term1_subject_6_total` >= 71 then 'B1' when `term1_subject_6_total` >= 61 then 'B2' when `term1_subject_6_total` >= 51 then 'C1' when `term1_subject_6_total` >= 41 then 'C2' when `term1_subject_6_total` >= 33 then 'D' else 'E' end) STORED,
  `term1_subject_7` int(11) DEFAULT 0,
  `term1_subject_7_periodic_test` int(11) DEFAULT 0,
  `term1_subject_7_subject_enrichment` int(11) DEFAULT 0,
  `term1_subject_7_multiple_assessment` int(11) DEFAULT 0,
  `term1_subject_7_portfolio` int(11) DEFAULT 0,
  `term1_subject_7_total` int(11) GENERATED ALWAYS AS (`term1_subject_7` + `term1_subject_7_ct` + `term1_subject_7_periodic_test` + `term1_subject_7_subject_enrichment` + `term1_subject_7_multiple_assessment` + `term1_subject_7_portfolio`) STORED,
  `term1_subject_7_grade` varchar(5) GENERATED ALWAYS AS (case when `term1_subject_7_total` >= 91 then 'A1' when `term1_subject_7_total` >= 81 then 'A2' when `term1_subject_7_total` >= 71 then 'B1' when `term1_subject_7_total` >= 61 then 'B2' when `term1_subject_7_total` >= 51 then 'C1' when `term1_subject_7_total` >= 41 then 'C2' when `term1_subject_7_total` >= 33 then 'D' else 'E' end) STORED,
  `term1_total` int(11) GENERATED ALWAYS AS (`term1_subject_1_total` + `term1_subject_2_total` + `term1_subject_3_total` + `term1_subject_4_total` + `term1_subject_5_total` + `term1_subject_6_total` + `term1_subject_7_total` + 'term1_subject_8_total' + 'term1_subject_9_total') STORED,
  `term2_subject_1` int(11) DEFAULT 0,
  `term2_subject_1_periodic_test` int(11) DEFAULT 0,
  `term2_subject_1_subject_enrichment` int(11) DEFAULT 0,
  `term2_subject_1_multiple_assessment` int(11) DEFAULT 0,
  `term2_subject_1_portfolio` int(11) DEFAULT 0,
  `term2_subject_1_total` int(11) GENERATED ALWAYS AS (`term2_subject_1` + `term2_subject_1_ct` + `term2_subject_1_periodic_test` + `term2_subject_1_subject_enrichment` + `term2_subject_1_multiple_assessment` + `term2_subject_1_portfolio`) STORED,
  `term2_subject_1_grade` varchar(5) GENERATED ALWAYS AS (case when `term2_subject_1_total` >= 91 then 'A1' when `term2_subject_1_total` >= 81 then 'A2' when `term2_subject_1_total` >= 71 then 'B1' when `term2_subject_1_total` >= 61 then 'B2' when `term2_subject_1_total` >= 51 then 'C1' when `term2_subject_1_total` >= 41 then 'C2' when `term2_subject_1_total` >= 33 then 'D' else 'E' end) STORED,
  `term2_subject_2` int(11) DEFAULT 0,
  `term2_subject_2_periodic_test` int(11) DEFAULT 0,
  `term2_subject_2_subject_enrichment` int(11) DEFAULT 0,
  `term2_subject_2_multiple_assessment` int(11) DEFAULT 0,
  `term2_subject_2_portfolio` int(11) DEFAULT 0,
  `term2_subject_2_total` int(11) GENERATED ALWAYS AS (`term2_subject_2` + `term2_subject_2_ct` + `term2_subject_2_periodic_test` + `term2_subject_2_subject_enrichment` + `term2_subject_2_multiple_assessment` + `term2_subject_2_portfolio`) STORED,
  `term2_subject_2_grade` varchar(5) GENERATED ALWAYS AS (case when `term2_subject_2_total` >= 91 then 'A1' when `term2_subject_2_total` >= 81 then 'A2' when `term2_subject_2_total` >= 71 then 'B1' when `term2_subject_2_total` >= 61 then 'B2' when `term2_subject_2_total` >= 51 then 'C1' when `term2_subject_2_total` >= 41 then 'C2' when `term2_subject_2_total` >= 33 then 'D' else 'E' end) STORED,
  `term2_subject_3` int(11) DEFAULT 0,
  `term2_subject_3_periodic_test` int(11) DEFAULT 0,
  `term2_subject_3_subject_enrichment` int(11) DEFAULT 0,
  `term2_subject_3_multiple_assessment` int(11) DEFAULT 0,
  `term2_subject_3_portfolio` int(11) DEFAULT 0,
  `term2_subject_3_total` int(11) GENERATED ALWAYS AS (`term2_subject_3` + `term2_subject_3_ct` + `term2_subject_3_periodic_test` + `term2_subject_3_subject_enrichment` + `term2_subject_3_multiple_assessment` + `term2_subject_3_portfolio`) STORED,
  `term2_subject_3_grade` varchar(5) GENERATED ALWAYS AS (case when `term2_subject_3_total` >= 91 then 'A1' when `term2_subject_3_total` >= 81 then 'A2' when `term2_subject_3_total` >= 71 then 'B1' when `term2_subject_3_total` >= 61 then 'B2' when `term2_subject_3_total` >= 51 then 'C1' when `term2_subject_3_total` >= 41 then 'C2' when `term2_subject_3_total` >= 33 then 'D' else 'E' end) STORED,
  `term2_subject_4` int(11) DEFAULT 0,
  `term2_subject_4_periodic_test` int(11) DEFAULT 0,
  `term2_subject_4_subject_enrichment` int(11) DEFAULT 0,
  `term2_subject_4_multiple_assessment` int(11) DEFAULT 0,
  `term2_subject_4_portfolio` int(11) DEFAULT 0,
  `term2_subject_4_total` int(11) GENERATED ALWAYS AS (`term2_subject_4` + `term2_subject_4_ct` + `term2_subject_4_periodic_test` + `term2_subject_4_subject_enrichment` + `term2_subject_4_multiple_assessment` + `term2_subject_4_portfolio`) STORED,
  `term2_subject_4_grade` varchar(5) GENERATED ALWAYS AS (case when `term2_subject_4_total` >= 91 then 'A1' when `term2_subject_4_total` >= 81 then 'A2' when `term2_subject_4_total` >= 71 then 'B1' when `term2_subject_4_total` >= 61 then 'B2' when `term2_subject_4_total` >= 51 then 'C1' when `term2_subject_4_total` >= 41 then 'C2' when `term2_subject_4_total` >= 33 then 'D' else 'E' end) STORED,
  `term2_subject_5` int(11) DEFAULT 0,
  `term2_subject_5_periodic_test` int(11) DEFAULT 0,
  `term2_subject_5_subject_enrichment` int(11) DEFAULT 0,
  `term2_subject_5_multiple_assessment` int(11) DEFAULT 0,
  `term2_subject_5_portfolio` int(11) DEFAULT 0,
  `term2_subject_5_total` int(11) GENERATED ALWAYS AS (`term2_subject_5` + `term2_subject_5_ct` + `term2_subject_5_periodic_test` + `term2_subject_5_subject_enrichment` + `term2_subject_5_multiple_assessment` + `term2_subject_5_portfolio`) STORED,
  `term2_subject_5_grade` varchar(5) GENERATED ALWAYS AS (case when `term2_subject_5_total` >= 91 then 'A1' when `term2_subject_5_total` >= 81 then 'A2' when `term2_subject_5_total` >= 71 then 'B1' when `term2_subject_5_total` >= 61 then 'B2' when `term2_subject_5_total` >= 51 then 'C1' when `term2_subject_5_total` >= 41 then 'C2' when `term2_subject_5_total` >= 33 then 'D' else 'E' end) STORED,
  `term2_subject_6` int(11) DEFAULT 0,
  `term2_subject_6_periodic_test` int(11) DEFAULT 0,
  `term2_subject_6_subject_enrichment` int(11) DEFAULT 0,
  `term2_subject_6_multiple_assessment` int(11) DEFAULT 0,
  `term2_subject_6_portfolio` int(11) DEFAULT 0,
  `term2_subject_6_total` int(11) GENERATED ALWAYS AS (`term2_subject_6` + `term2_subject_6_ct` + `term2_subject_6_periodic_test` + `term2_subject_6_subject_enrichment` + `term2_subject_6_multiple_assessment` + `term2_subject_6_portfolio`) STORED,
  `term2_subject_6_grade` varchar(5) GENERATED ALWAYS AS (case when `term2_subject_6_total` >= 91 then 'A1' when `term2_subject_6_total` >= 81 then 'A2' when `term2_subject_6_total` >= 71 then 'B1' when `term2_subject_6_total` >= 61 then 'B2' when `term2_subject_6_total` >= 51 then 'C1' when `term2_subject_6_total` >= 41 then 'C2' when `term2_subject_6_total` >= 33 then 'D' else 'E' end) STORED,
  `term2_subject_7` int(11) DEFAULT 0,
  `term2_subject_7_periodic_test` int(11) DEFAULT 0,
  `term2_subject_7_subject_enrichment` int(11) DEFAULT 0,
  `term2_subject_7_multiple_assessment` int(11) DEFAULT 0,
  `term2_subject_7_portfolio` int(11) DEFAULT 0,
  `term2_subject_7_total` int(11) GENERATED ALWAYS AS (`term2_subject_7` + `term2_subject_7_ct` + `term2_subject_7_periodic_test` + `term2_subject_7_subject_enrichment` + `term2_subject_7_multiple_assessment` + `term2_subject_7_portfolio`) STORED,
  `term2_subject_7_grade` varchar(5) GENERATED ALWAYS AS (case when `term2_subject_7_total` >= 91 then 'A1' when `term2_subject_7_total` >= 81 then 'A2' when `term2_subject_7_total` >= 71 then 'B1' when `term2_subject_7_total` >= 61 then 'B2' when `term2_subject_7_total` >= 51 then 'C1' when `term2_subject_7_total` >= 41 then 'C2' when `term2_subject_7_total` >= 33 then 'D' else 'E' end) STORED,
  `term1_subject_8` int(11) DEFAULT 0,
  `term1_subject_8_periodic_test` int(11) DEFAULT 0,
  `term1_subject_8_subject_enrichment` int(11) DEFAULT 0,
  `term1_subject_8_multiple_assessment` int(11) DEFAULT 0,
  `term1_subject_8_portfolio` int(11) DEFAULT 0,
  `term1_subject_8_total` int(11) GENERATED ALWAYS AS (`term1_subject_8` + `term1_subject_8_ct` + `term1_subject_8_periodic_test` + `term1_subject_8_subject_enrichment` + `term1_subject_8_multiple_assessment` + `term1_subject_8_portfolio`) STORED,
  `term1_subject_8_grade` varchar(5) GENERATED ALWAYS AS (case when `term1_subject_8_total` >= 91 then 'A1' when `term1_subject_8_total` >= 81 then 'A2' when `term1_subject_8_total` >= 71 then 'B1' when `term1_subject_8_total` >= 61 then 'B2' when `term1_subject_8_total` >= 51 then 'C1' when `term1_subject_8_total` >= 41 then 'C2' when `term1_subject_8_total` >= 33 then 'D' else 'E' end) STORED,
  `term2_subject_8` int(11) DEFAULT 0,
  `term2_subject_8_periodic_test` int(11) DEFAULT 0,
  `term2_subject_8_subject_enrichment` int(11) DEFAULT 0,
  `term2_subject_8_multiple_assessment` int(11) DEFAULT 0,
  `term2_subject_8_portfolio` int(11) DEFAULT 0,
  `term2_subject_8_total` int(11) GENERATED ALWAYS AS (`term2_subject_8` + `term2_subject_8_ct` + `term2_subject_8_periodic_test` + `term2_subject_8_subject_enrichment` + `term2_subject_8_multiple_assessment` + `term2_subject_8_portfolio`) STORED,
  `term2_subject_8_grade` varchar(5) GENERATED ALWAYS AS (case when `term2_subject_8_total` >= 91 then 'A1' when `term2_subject_8_total` >= 81 then 'A2' when `term2_subject_8_total` >= 71 then 'B1' when `term2_subject_8_total` >= 61 then 'B2' when `term2_subject_8_total` >= 51 then 'C1' when `term2_subject_8_total` >= 41 then 'C2' when `term2_subject_8_total` >= 33 then 'D' else 'E' end) STORED,
  `term1_subject_9` int(11) DEFAULT 0,
  `term1_subject_9_periodic_test` int(11) DEFAULT 0,
  `term1_subject_9_subject_enrichment` int(11) DEFAULT 0,
  `term1_subject_9_multiple_assessment` int(11) DEFAULT 0,
  `term1_subject_9_portfolio` int(11) DEFAULT 0,
  `term1_subject_9_total` int(11) GENERATED ALWAYS AS (`term1_subject_9` + `term1_subject_9_ct` + `term1_subject_9_periodic_test` + `term1_subject_9_subject_enrichment` + `term1_subject_9_multiple_assessment` + `term1_subject_9_portfolio`) STORED,
  `term1_subject_9_grade` varchar(5) GENERATED ALWAYS AS (case when `term1_subject_9_total` >= 91 then 'A1' when `term1_subject_9_total` >= 81 then 'A2' when `term1_subject_9_total` >= 71 then 'B1' when `term1_subject_9_total` >= 61 then 'B2' when `term1_subject_9_total` >= 51 then 'C1' when `term1_subject_9_total` >= 41 then 'C2' when `term1_subject_9_total` >= 33 then 'D' else 'E' end) STORED,
  `term2_subject_9` int(11) DEFAULT 0,
  `term2_subject_9_periodic_test` int(11) DEFAULT 0,
  `term2_subject_9_subject_enrichment` int(11) DEFAULT 0,
  `term2_subject_9_multiple_assessment` int(11) DEFAULT 0,
  `term2_subject_9_portfolio` int(11) DEFAULT 0,
  `term2_subject_9_total` int(11) GENERATED ALWAYS AS (`term2_subject_9` + `term2_subject_9_ct` + `term2_subject_9_periodic_test` + `term2_subject_9_subject_enrichment` + `term2_subject_9_multiple_assessment` + `term2_subject_9_portfolio`) STORED,
  `term2_subject_9_grade` varchar(5) GENERATED ALWAYS AS (case when `term2_subject_9_total` >= 91 then 'A1' when `term2_subject_9_total` >= 81 then 'A2' when `term2_subject_9_total` >= 71 then 'B1' when `term2_subject_9_total` >= 61 then 'B2' when `term2_subject_9_total` >= 51 then 'C1' when `term2_subject_9_total` >= 41 then 'C2' when `term2_subject_9_total` >= 33 then 'D' else 'E' end) STORED,
  `term2_total` int(11) GENERATED ALWAYS AS (`term2_subject_1_total` + `term2_subject_2_total` + `term2_subject_3_total` + `term2_subject_4_total` + `term2_subject_5_total` + `term2_subject_6_total` + `term2_subject_7_total` + `term2_subject_8_total` + `term2_subject_9_total`) STORED,
  `term1_subject_2_ct` int(11) DEFAULT 0,
  `term1_subject_3_ct` int(11) DEFAULT 0,
  `term1_subject_4_ct` int(11) DEFAULT 0,
  `term1_subject_5_ct` int(11) DEFAULT 0,
  `term1_subject_6_ct` int(11) DEFAULT 0,
  `term1_subject_7_ct` int(11) DEFAULT 0,
  `term1_subject_8_ct` int(11) DEFAULT 0,
  `term1_subject_9_ct` int(11) DEFAULT 0,
  `term2_subject_1_ct` int(11) DEFAULT 0,
  `term2_subject_2_ct` int(11) DEFAULT 0,
  `term2_subject_3_ct` int(11) DEFAULT 0,
  `term2_subject_4_ct` int(11) DEFAULT 0,
  `term2_subject_5_ct` int(11) DEFAULT 0,
  `term2_subject_6_ct` int(11) DEFAULT 0,
  `term2_subject_7_ct` int(11) DEFAULT 0,
  `term2_subject_8_ct` int(11) DEFAULT 0,
  `term2_subject_9_ct` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`mark_id`, `student_id`, `academic_year`, `rollno`, `class`, `term1_subject_1`, `term1_subject_1_ct`, `term1_subject_1_periodic_test`, `term1_subject_1_subject_enrichment`, `term1_subject_1_multiple_assessment`, `term1_subject_1_portfolio`, `term1_subject_2`, `term1_subject_2_periodic_test`, `term1_subject_2_subject_enrichment`, `term1_subject_2_multiple_assessment`, `term1_subject_2_portfolio`, `term1_subject_3`, `term1_subject_3_periodic_test`, `term1_subject_3_subject_enrichment`, `term1_subject_3_multiple_assessment`, `term1_subject_3_portfolio`, `term1_subject_4`, `term1_subject_4_periodic_test`, `term1_subject_4_subject_enrichment`, `term1_subject_4_multiple_assessment`, `term1_subject_4_portfolio`, `term1_subject_5`, `term1_subject_5_periodic_test`, `term1_subject_5_subject_enrichment`, `term1_subject_5_multiple_assessment`, `term1_subject_5_portfolio`, `term1_subject_6`, `term1_subject_6_periodic_test`, `term1_subject_6_subject_enrichment`, `term1_subject_6_multiple_assessment`, `term1_subject_6_portfolio`, `term1_subject_7`, `term1_subject_7_periodic_test`, `term1_subject_7_subject_enrichment`, `term1_subject_7_multiple_assessment`, `term1_subject_7_portfolio`, `term2_subject_1`, `term2_subject_1_periodic_test`, `term2_subject_1_subject_enrichment`, `term2_subject_1_multiple_assessment`, `term2_subject_1_portfolio`, `term2_subject_2`, `term2_subject_2_periodic_test`, `term2_subject_2_subject_enrichment`, `term2_subject_2_multiple_assessment`, `term2_subject_2_portfolio`, `term2_subject_3`, `term2_subject_3_periodic_test`, `term2_subject_3_subject_enrichment`, `term2_subject_3_multiple_assessment`, `term2_subject_3_portfolio`, `term2_subject_4`, `term2_subject_4_periodic_test`, `term2_subject_4_subject_enrichment`, `term2_subject_4_multiple_assessment`, `term2_subject_4_portfolio`, `term2_subject_5`, `term2_subject_5_periodic_test`, `term2_subject_5_subject_enrichment`, `term2_subject_5_multiple_assessment`, `term2_subject_5_portfolio`, `term2_subject_6`, `term2_subject_6_periodic_test`, `term2_subject_6_subject_enrichment`, `term2_subject_6_multiple_assessment`, `term2_subject_6_portfolio`, `term2_subject_7`, `term2_subject_7_periodic_test`, `term2_subject_7_subject_enrichment`, `term2_subject_7_multiple_assessment`, `term2_subject_7_portfolio`, `term1_subject_8`, `term1_subject_8_periodic_test`, `term1_subject_8_subject_enrichment`, `term1_subject_8_multiple_assessment`, `term1_subject_8_portfolio`, `term2_subject_8`, `term2_subject_8_periodic_test`, `term2_subject_8_subject_enrichment`, `term2_subject_8_multiple_assessment`, `term2_subject_8_portfolio`, `term1_subject_9`, `term1_subject_9_periodic_test`, `term1_subject_9_subject_enrichment`, `term1_subject_9_multiple_assessment`, `term1_subject_9_portfolio`, `term2_subject_9`, `term2_subject_9_periodic_test`, `term2_subject_9_subject_enrichment`, `term2_subject_9_multiple_assessment`, `term2_subject_9_portfolio`, `term1_subject_2_ct`, `term1_subject_3_ct`, `term1_subject_4_ct`, `term1_subject_5_ct`, `term1_subject_6_ct`, `term1_subject_7_ct`, `term1_subject_8_ct`, `term1_subject_9_ct`, `term2_subject_1_ct`, `term2_subject_2_ct`, `term2_subject_3_ct`, `term2_subject_4_ct`, `term2_subject_5_ct`, `term2_subject_6_ct`, `term2_subject_7_ct`, `term2_subject_8_ct`, `term2_subject_9_ct`) VALUES
(2, 1, '2024', 'a101', '1', 50, 10, 25, 5, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 1, '2025', 'a301', '3', 70, 10, 5, 5, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 1, '2026', 'a501', '5', 70, 10, 5, 5, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 1, '2027', 'a601', '6', 80, 0, 5, 5, 5, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

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
(68, 1, '2024', 100, 14.29, 'E', 0, 0.00, 'E'),
(69, 1, '2025', 95, 13.57, 'E', 0, 0.00, 'E'),
(70, 1, '2026', 100, 14.29, 'E', 0, 0.00, 'E'),
(71, 1, '2027', 100, 14.29, 'E', 0, 0.00, 'E');

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
  `section` varchar(50) NOT NULL,
  `admission_year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `Admission_no`, `name`, `mother_name`, `dob`, `section`, `admission_year`) VALUES
(1, '123/24', 'student', 'mm', '2004-02-23', 'a', '2024');

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
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
