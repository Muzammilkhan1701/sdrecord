-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2024 at 11:09 AM
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
  `class` varchar(50) NOT NULL,
  `term1_subject_1` decimal(5,2) DEFAULT 0.00,
  `term1_subject_1_ct` decimal(5,2) DEFAULT 0.00,
  `term1_subject_1_periodic_test` decimal(5,2) DEFAULT 0.00,
  `term1_subject_1_subject_enrichment` decimal(5,2) DEFAULT 0.00,
  `term1_subject_1_multiple_assessment` decimal(5,2) DEFAULT 0.00,
  `term1_subject_1_portfolio` decimal(5,2) DEFAULT 0.00,
  `term1_subject_1_total` decimal(5,2) DEFAULT NULL,
  `term1_subject_1_grade` varchar(5) GENERATED ALWAYS AS (case when `term1_subject_1_total` >= 91 then 'A1' when `term1_subject_1_total` >= 81 then 'A2' when `term1_subject_1_total` >= 71 then 'B1' when `term1_subject_1_total` >= 61 then 'B2' when `term1_subject_1_total` >= 51 then 'C1' when `term1_subject_1_total` >= 41 then 'C2' when `term1_subject_1_total` >= 33 then 'D' else 'E' end) STORED,
  `term1_subject_2` decimal(5,2) DEFAULT 0.00,
  `term1_subject_2_periodic_test` decimal(5,2) DEFAULT 0.00,
  `term1_subject_2_subject_enrichment` decimal(5,2) DEFAULT 0.00,
  `term1_subject_2_multiple_assessment` decimal(5,2) DEFAULT 0.00,
  `term1_subject_2_portfolio` decimal(5,2) DEFAULT 0.00,
  `term1_subject_2_total` decimal(5,2) DEFAULT NULL,
  `term1_subject_2_grade` varchar(5) GENERATED ALWAYS AS (case when `term1_subject_2_total` >= 91 then 'A1' when `term1_subject_2_total` >= 81 then 'A2' when `term1_subject_2_total` >= 71 then 'B1' when `term1_subject_2_total` >= 61 then 'B2' when `term1_subject_2_total` >= 51 then 'C1' when `term1_subject_2_total` >= 41 then 'C2' when `term1_subject_2_total` >= 33 then 'D' else 'E' end) STORED,
  `term1_subject_3` decimal(5,2) DEFAULT 0.00,
  `term1_subject_3_periodic_test` decimal(5,2) DEFAULT 0.00,
  `term1_subject_3_subject_enrichment` decimal(5,2) DEFAULT 0.00,
  `term1_subject_3_multiple_assessment` decimal(5,2) DEFAULT 0.00,
  `term1_subject_3_portfolio` decimal(5,2) DEFAULT 0.00,
  `term1_subject_3_total` decimal(5,2) DEFAULT NULL,
  `term1_subject_3_grade` varchar(5) GENERATED ALWAYS AS (case when `term1_subject_3_total` >= 91 then 'A1' when `term1_subject_3_total` >= 81 then 'A2' when `term1_subject_3_total` >= 71 then 'B1' when `term1_subject_3_total` >= 61 then 'B2' when `term1_subject_3_total` >= 51 then 'C1' when `term1_subject_3_total` >= 41 then 'C2' when `term1_subject_3_total` >= 33 then 'D' else 'E' end) STORED,
  `term1_subject_4` decimal(5,2) DEFAULT 0.00,
  `term1_subject_4_periodic_test` decimal(5,2) DEFAULT 0.00,
  `term1_subject_4_subject_enrichment` decimal(5,2) DEFAULT 0.00,
  `term1_subject_4_multiple_assessment` decimal(5,2) DEFAULT 0.00,
  `term1_subject_4_portfolio` decimal(5,2) DEFAULT 0.00,
  `term1_subject_4_total` decimal(5,2) DEFAULT NULL,
  `term1_subject_4_grade` varchar(5) GENERATED ALWAYS AS (case when `term1_subject_4_total` >= 91 then 'A1' when `term1_subject_4_total` >= 81 then 'A2' when `term1_subject_4_total` >= 71 then 'B1' when `term1_subject_4_total` >= 61 then 'B2' when `term1_subject_4_total` >= 51 then 'C1' when `term1_subject_4_total` >= 41 then 'C2' when `term1_subject_4_total` >= 33 then 'D' else 'E' end) STORED,
  `term1_subject_5` decimal(5,2) DEFAULT 0.00,
  `term1_subject_5_periodic_test` decimal(5,2) DEFAULT 0.00,
  `term1_subject_5_subject_enrichment` decimal(5,2) DEFAULT 0.00,
  `term1_subject_5_multiple_assessment` decimal(5,2) DEFAULT 0.00,
  `term1_subject_5_portfolio` decimal(5,2) DEFAULT 0.00,
  `term1_subject_5_total` decimal(5,2) DEFAULT NULL,
  `term1_subject_5_grade` varchar(5) GENERATED ALWAYS AS (case when `term1_subject_5_total` >= 91 then 'A1' when `term1_subject_5_total` >= 81 then 'A2' when `term1_subject_5_total` >= 71 then 'B1' when `term1_subject_5_total` >= 61 then 'B2' when `term1_subject_5_total` >= 51 then 'C1' when `term1_subject_5_total` >= 41 then 'C2' when `term1_subject_5_total` >= 33 then 'D' else 'E' end) STORED,
  `term1_subject_6` decimal(5,2) DEFAULT 0.00,
  `term1_subject_6_periodic_test` decimal(5,2) DEFAULT 0.00,
  `term1_subject_6_subject_enrichment` decimal(5,2) DEFAULT 0.00,
  `term1_subject_6_multiple_assessment` decimal(5,2) DEFAULT 0.00,
  `term1_subject_6_portfolio` decimal(5,2) DEFAULT 0.00,
  `term1_subject_6_total` decimal(5,2) DEFAULT NULL,
  `term1_subject_6_grade` varchar(5) GENERATED ALWAYS AS (case when `term1_subject_6_total` >= 91 then 'A1' when `term1_subject_6_total` >= 81 then 'A2' when `term1_subject_6_total` >= 71 then 'B1' when `term1_subject_6_total` >= 61 then 'B2' when `term1_subject_6_total` >= 51 then 'C1' when `term1_subject_6_total` >= 41 then 'C2' when `term1_subject_6_total` >= 33 then 'D' else 'E' end) STORED,
  `term1_subject_7` decimal(5,2) DEFAULT 0.00,
  `term1_subject_7_periodic_test` decimal(5,2) DEFAULT 0.00,
  `term1_subject_7_subject_enrichment` decimal(5,2) DEFAULT 0.00,
  `term1_subject_7_multiple_assessment` decimal(5,2) DEFAULT 0.00,
  `term1_subject_7_portfolio` decimal(5,2) DEFAULT 0.00,
  `term1_subject_7_total` decimal(5,2) DEFAULT NULL,
  `term1_subject_7_grade` varchar(5) GENERATED ALWAYS AS (case when `term1_subject_7_total` >= 91 then 'A1' when `term1_subject_7_total` >= 81 then 'A2' when `term1_subject_7_total` >= 71 then 'B1' when `term1_subject_7_total` >= 61 then 'B2' when `term1_subject_7_total` >= 51 then 'C1' when `term1_subject_7_total` >= 41 then 'C2' when `term1_subject_7_total` >= 33 then 'D' else 'E' end) STORED,
  `term1_total` decimal(5,2) DEFAULT NULL,
  `term2_subject_1` decimal(5,2) DEFAULT 0.00,
  `term2_subject_1_periodic_test` decimal(5,2) DEFAULT 0.00,
  `term2_subject_1_subject_enrichment` decimal(5,2) DEFAULT 0.00,
  `term2_subject_1_multiple_assessment` decimal(5,2) DEFAULT 0.00,
  `term2_subject_1_portfolio` decimal(5,2) DEFAULT 0.00,
  `term2_subject_1_total` decimal(5,2) DEFAULT NULL,
  `term2_subject_1_grade` varchar(5) GENERATED ALWAYS AS (case when `term2_subject_1_total` >= 91 then 'A1' when `term2_subject_1_total` >= 81 then 'A2' when `term2_subject_1_total` >= 71 then 'B1' when `term2_subject_1_total` >= 61 then 'B2' when `term2_subject_1_total` >= 51 then 'C1' when `term2_subject_1_total` >= 41 then 'C2' when `term2_subject_1_total` >= 33 then 'D' else 'E' end) STORED,
  `term2_subject_2` decimal(5,2) DEFAULT 0.00,
  `term2_subject_2_periodic_test` decimal(5,2) DEFAULT 0.00,
  `term2_subject_2_subject_enrichment` decimal(5,2) DEFAULT 0.00,
  `term2_subject_2_multiple_assessment` decimal(5,2) DEFAULT 0.00,
  `term2_subject_2_portfolio` decimal(5,2) DEFAULT 0.00,
  `term2_subject_2_total` decimal(5,2) DEFAULT NULL,
  `term2_subject_2_grade` varchar(5) GENERATED ALWAYS AS (case when `term2_subject_2_total` >= 91 then 'A1' when `term2_subject_2_total` >= 81 then 'A2' when `term2_subject_2_total` >= 71 then 'B1' when `term2_subject_2_total` >= 61 then 'B2' when `term2_subject_2_total` >= 51 then 'C1' when `term2_subject_2_total` >= 41 then 'C2' when `term2_subject_2_total` >= 33 then 'D' else 'E' end) STORED,
  `term2_subject_3` decimal(5,2) DEFAULT 0.00,
  `term2_subject_3_periodic_test` decimal(5,2) DEFAULT 0.00,
  `term2_subject_3_subject_enrichment` decimal(5,2) DEFAULT 0.00,
  `term2_subject_3_multiple_assessment` decimal(5,2) DEFAULT 0.00,
  `term2_subject_3_portfolio` decimal(5,2) DEFAULT 0.00,
  `term2_subject_3_total` decimal(5,2) DEFAULT NULL,
  `term2_subject_3_grade` varchar(5) GENERATED ALWAYS AS (case when `term2_subject_3_total` >= 91 then 'A1' when `term2_subject_3_total` >= 81 then 'A2' when `term2_subject_3_total` >= 71 then 'B1' when `term2_subject_3_total` >= 61 then 'B2' when `term2_subject_3_total` >= 51 then 'C1' when `term2_subject_3_total` >= 41 then 'C2' when `term2_subject_3_total` >= 33 then 'D' else 'E' end) STORED,
  `term2_subject_4` decimal(5,2) DEFAULT 0.00,
  `term2_subject_4_periodic_test` decimal(5,2) DEFAULT 0.00,
  `term2_subject_4_subject_enrichment` decimal(5,2) DEFAULT 0.00,
  `term2_subject_4_multiple_assessment` decimal(5,2) DEFAULT 0.00,
  `term2_subject_4_portfolio` decimal(5,2) DEFAULT 0.00,
  `term2_subject_4_total` decimal(5,2) DEFAULT NULL,
  `term2_subject_4_grade` varchar(5) GENERATED ALWAYS AS (case when `term2_subject_4_total` >= 91 then 'A1' when `term2_subject_4_total` >= 81 then 'A2' when `term2_subject_4_total` >= 71 then 'B1' when `term2_subject_4_total` >= 61 then 'B2' when `term2_subject_4_total` >= 51 then 'C1' when `term2_subject_4_total` >= 41 then 'C2' when `term2_subject_4_total` >= 33 then 'D' else 'E' end) STORED,
  `term2_subject_5` decimal(5,2) DEFAULT 0.00,
  `term2_subject_5_periodic_test` decimal(5,2) DEFAULT 0.00,
  `term2_subject_5_subject_enrichment` decimal(5,2) DEFAULT 0.00,
  `term2_subject_5_multiple_assessment` decimal(5,2) DEFAULT 0.00,
  `term2_subject_5_portfolio` decimal(5,2) DEFAULT 0.00,
  `term2_subject_5_total` decimal(5,2) DEFAULT NULL,
  `term2_subject_5_grade` varchar(5) GENERATED ALWAYS AS (case when `term2_subject_5_total` >= 91 then 'A1' when `term2_subject_5_total` >= 81 then 'A2' when `term2_subject_5_total` >= 71 then 'B1' when `term2_subject_5_total` >= 61 then 'B2' when `term2_subject_5_total` >= 51 then 'C1' when `term2_subject_5_total` >= 41 then 'C2' when `term2_subject_5_total` >= 33 then 'D' else 'E' end) STORED,
  `term2_subject_6` decimal(5,2) DEFAULT 0.00,
  `term2_subject_6_periodic_test` decimal(5,2) DEFAULT 0.00,
  `term2_subject_6_subject_enrichment` decimal(5,2) DEFAULT 0.00,
  `term2_subject_6_multiple_assessment` decimal(5,2) DEFAULT 0.00,
  `term2_subject_6_portfolio` decimal(5,2) DEFAULT 0.00,
  `term2_subject_6_total` decimal(5,2) DEFAULT NULL,
  `term2_subject_6_grade` varchar(5) GENERATED ALWAYS AS (case when `term2_subject_6_total` >= 91 then 'A1' when `term2_subject_6_total` >= 81 then 'A2' when `term2_subject_6_total` >= 71 then 'B1' when `term2_subject_6_total` >= 61 then 'B2' when `term2_subject_6_total` >= 51 then 'C1' when `term2_subject_6_total` >= 41 then 'C2' when `term2_subject_6_total` >= 33 then 'D' else 'E' end) STORED,
  `term2_subject_7` decimal(5,2) DEFAULT 0.00,
  `term2_subject_7_periodic_test` decimal(5,2) DEFAULT 0.00,
  `term2_subject_7_subject_enrichment` decimal(5,2) DEFAULT 0.00,
  `term2_subject_7_multiple_assessment` decimal(5,2) DEFAULT 0.00,
  `term2_subject_7_portfolio` decimal(5,2) DEFAULT 0.00,
  `term2_subject_7_total` decimal(5,2) DEFAULT NULL,
  `term2_subject_7_grade` varchar(5) GENERATED ALWAYS AS (case when `term2_subject_7_total` >= 91 then 'A1' when `term2_subject_7_total` >= 81 then 'A2' when `term2_subject_7_total` >= 71 then 'B1' when `term2_subject_7_total` >= 61 then 'B2' when `term2_subject_7_total` >= 51 then 'C1' when `term2_subject_7_total` >= 41 then 'C2' when `term2_subject_7_total` >= 33 then 'D' else 'E' end) STORED,
  `term1_subject_8` decimal(5,2) DEFAULT 0.00,
  `term1_subject_8_periodic_test` decimal(5,2) DEFAULT 0.00,
  `term1_subject_8_subject_enrichment` decimal(5,2) DEFAULT 0.00,
  `term1_subject_8_multiple_assessment` decimal(5,2) DEFAULT 0.00,
  `term1_subject_8_portfolio` decimal(5,2) DEFAULT 0.00,
  `term1_subject_8_total` decimal(5,2) DEFAULT NULL,
  `term1_subject_8_grade` varchar(5) GENERATED ALWAYS AS (case when `term1_subject_8_total` >= 91 then 'A1' when `term1_subject_8_total` >= 81 then 'A2' when `term1_subject_8_total` >= 71 then 'B1' when `term1_subject_8_total` >= 61 then 'B2' when `term1_subject_8_total` >= 51 then 'C1' when `term1_subject_8_total` >= 41 then 'C2' when `term1_subject_8_total` >= 33 then 'D' else 'E' end) STORED,
  `term2_subject_8` decimal(5,2) DEFAULT 0.00,
  `term2_subject_8_periodic_test` decimal(5,2) DEFAULT 0.00,
  `term2_subject_8_subject_enrichment` decimal(5,2) DEFAULT 0.00,
  `term2_subject_8_multiple_assessment` decimal(5,2) DEFAULT 0.00,
  `term2_subject_8_portfolio` decimal(5,2) DEFAULT 0.00,
  `term2_subject_8_total` decimal(5,2) DEFAULT NULL,
  `term2_subject_8_grade` varchar(5) GENERATED ALWAYS AS (case when `term2_subject_8_total` >= 91 then 'A1' when `term2_subject_8_total` >= 81 then 'A2' when `term2_subject_8_total` >= 71 then 'B1' when `term2_subject_8_total` >= 61 then 'B2' when `term2_subject_8_total` >= 51 then 'C1' when `term2_subject_8_total` >= 41 then 'C2' when `term2_subject_8_total` >= 33 then 'D' else 'E' end) STORED,
  `term1_subject_9` decimal(5,2) DEFAULT 0.00,
  `term1_subject_9_periodic_test` decimal(5,2) DEFAULT 0.00,
  `term1_subject_9_subject_enrichment` decimal(5,2) DEFAULT 0.00,
  `term1_subject_9_multiple_assessment` decimal(5,2) DEFAULT 0.00,
  `term1_subject_9_portfolio` decimal(5,2) DEFAULT 0.00,
  `term1_subject_9_total` decimal(5,2) DEFAULT NULL,
  `term1_subject_9_grade` varchar(5) GENERATED ALWAYS AS (case when `term1_subject_9_total` >= 91 then 'A1' when `term1_subject_9_total` >= 81 then 'A2' when `term1_subject_9_total` >= 71 then 'B1' when `term1_subject_9_total` >= 61 then 'B2' when `term1_subject_9_total` >= 51 then 'C1' when `term1_subject_9_total` >= 41 then 'C2' when `term1_subject_9_total` >= 33 then 'D' else 'E' end) STORED,
  `term2_subject_9` decimal(5,2) DEFAULT 0.00,
  `term2_subject_9_periodic_test` decimal(5,2) DEFAULT 0.00,
  `term2_subject_9_subject_enrichment` decimal(5,2) DEFAULT 0.00,
  `term2_subject_9_multiple_assessment` decimal(5,2) DEFAULT 0.00,
  `term2_subject_9_portfolio` decimal(5,2) DEFAULT 0.00,
  `term2_subject_9_total` decimal(5,2) DEFAULT NULL,
  `term2_subject_9_grade` varchar(5) GENERATED ALWAYS AS (case when `term2_subject_9_total` >= 91 then 'A1' when `term2_subject_9_total` >= 81 then 'A2' when `term2_subject_9_total` >= 71 then 'B1' when `term2_subject_9_total` >= 61 then 'B2' when `term2_subject_9_total` >= 51 then 'C1' when `term2_subject_9_total` >= 41 then 'C2' when `term2_subject_9_total` >= 33 then 'D' else 'E' end) STORED,
  `term2_total` decimal(5,2) DEFAULT NULL,
  `term1_subject_2_ct` decimal(5,2) DEFAULT 0.00,
  `term1_subject_3_ct` decimal(5,2) DEFAULT 0.00,
  `term1_subject_4_ct` decimal(5,2) DEFAULT 0.00,
  `term1_subject_5_ct` decimal(5,2) DEFAULT 0.00,
  `term1_subject_6_ct` decimal(5,2) DEFAULT 0.00,
  `term1_subject_7_ct` decimal(5,2) DEFAULT 0.00,
  `term1_subject_8_ct` decimal(5,2) DEFAULT 0.00,
  `term1_subject_9_ct` decimal(5,2) DEFAULT 0.00,
  `term2_subject_1_ct` decimal(5,2) DEFAULT 0.00,
  `term2_subject_2_ct` decimal(5,2) DEFAULT 0.00,
  `term2_subject_3_ct` decimal(5,2) DEFAULT 0.00,
  `term2_subject_4_ct` decimal(5,2) DEFAULT 0.00,
  `term2_subject_5_ct` decimal(5,2) DEFAULT 0.00,
  `term2_subject_6_ct` decimal(5,2) DEFAULT 0.00,
  `term2_subject_7_ct` decimal(5,2) DEFAULT 0.00,
  `term2_subject_8_ct` decimal(5,2) DEFAULT 0.00,
  `term2_subject_9_ct` decimal(5,2) DEFAULT 0.00
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
  `section` varchar(50) NOT NULL,
  `admission_year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  MODIFY `year_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `excellence`
--
ALTER TABLE `excellence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `mark_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

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
