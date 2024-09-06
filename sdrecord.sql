-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2024 at 02:45 PM
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
  `term1_subject_1_grade` varchar(5) GENERATED ALWAYS AS (case when `term1_subject_1_total` >= 90 then 'A' when `term1_subject_1_total` >= 80 then 'B' when `term1_subject_1_total` >= 70 then 'C' when `term1_subject_1_total` >= 60 then 'D' else 'F' end) STORED,
  `term1_subject_2` int(11) DEFAULT 0,
  `term1_subject_2_periodic_test` int(11) DEFAULT 0,
  `term1_subject_2_subject_enrichment` int(11) DEFAULT 0,
  `term1_subject_2_multiple_assessment` int(11) DEFAULT 0,
  `term1_subject_2_portfolio` int(11) DEFAULT 0,
  `term1_subject_2_total` int(11) GENERATED ALWAYS AS (`term1_subject_2` + `term1_subject_2_periodic_test` + `term1_subject_2_subject_enrichment` + `term1_subject_2_multiple_assessment` + `term1_subject_2_portfolio`) STORED,
  `term1_subject_2_grade` varchar(5) GENERATED ALWAYS AS (case when `term1_subject_2_total` >= 90 then 'A' when `term1_subject_2_total` >= 80 then 'B' when `term1_subject_2_total` >= 70 then 'C' when `term1_subject_2_total` >= 60 then 'D' else 'F' end) STORED,
  `term1_subject_3` int(11) DEFAULT 0,
  `term1_subject_3_periodic_test` int(11) DEFAULT 0,
  `term1_subject_3_subject_enrichment` int(11) DEFAULT 0,
  `term1_subject_3_multiple_assessment` int(11) DEFAULT 0,
  `term1_subject_3_portfolio` int(11) DEFAULT 0,
  `term1_subject_3_total` int(11) GENERATED ALWAYS AS (`term1_subject_3` + `term1_subject_3_periodic_test` + `term1_subject_3_subject_enrichment` + `term1_subject_3_multiple_assessment` + `term1_subject_3_portfolio`) STORED,
  `term1_subject_3_grade` varchar(5) GENERATED ALWAYS AS (case when `term1_subject_3_total` >= 90 then 'A' when `term1_subject_3_total` >= 80 then 'B' when `term1_subject_3_total` >= 70 then 'C' when `term1_subject_3_total` >= 60 then 'D' else 'F' end) STORED,
  `term1_subject_4` int(11) DEFAULT 0,
  `term1_subject_4_periodic_test` int(11) DEFAULT 0,
  `term1_subject_4_subject_enrichment` int(11) DEFAULT 0,
  `term1_subject_4_multiple_assessment` int(11) DEFAULT 0,
  `term1_subject_4_portfolio` int(11) DEFAULT 0,
  `term1_subject_4_total` int(11) GENERATED ALWAYS AS (`term1_subject_4` + `term1_subject_4_periodic_test` + `term1_subject_4_subject_enrichment` + `term1_subject_4_multiple_assessment` + `term1_subject_4_portfolio`) STORED,
  `term1_subject_4_grade` varchar(5) GENERATED ALWAYS AS (case when `term1_subject_4_total` >= 90 then 'A' when `term1_subject_4_total` >= 80 then 'B' when `term1_subject_4_total` >= 70 then 'C' when `term1_subject_4_total` >= 60 then 'D' else 'F' end) STORED,
  `term1_subject_5` int(11) DEFAULT 0,
  `term1_subject_5_periodic_test` int(11) DEFAULT 0,
  `term1_subject_5_subject_enrichment` int(11) DEFAULT 0,
  `term1_subject_5_multiple_assessment` int(11) DEFAULT 0,
  `term1_subject_5_portfolio` int(11) DEFAULT 0,
  `term1_subject_5_total` int(11) GENERATED ALWAYS AS (`term1_subject_5` + `term1_subject_5_periodic_test` + `term1_subject_5_subject_enrichment` + `term1_subject_5_multiple_assessment` + `term1_subject_5_portfolio`) STORED,
  `term1_subject_5_grade` varchar(5) GENERATED ALWAYS AS (case when `term1_subject_5_total` >= 90 then 'A' when `term1_subject_5_total` >= 80 then 'B' when `term1_subject_5_total` >= 70 then 'C' when `term1_subject_5_total` >= 60 then 'D' else 'F' end) STORED,
  `term1_subject_6` int(11) DEFAULT 0,
  `term1_subject_6_periodic_test` int(11) DEFAULT 0,
  `term1_subject_6_subject_enrichment` int(11) DEFAULT 0,
  `term1_subject_6_multiple_assessment` int(11) DEFAULT 0,
  `term1_subject_6_portfolio` int(11) DEFAULT 0,
  `term1_subject_6_total` int(11) GENERATED ALWAYS AS (`term1_subject_6` + `term1_subject_6_periodic_test` + `term1_subject_6_subject_enrichment` + `term1_subject_6_multiple_assessment` + `term1_subject_6_portfolio`) STORED,
  `term1_subject_6_grade` varchar(5) GENERATED ALWAYS AS (case when `term1_subject_6_total` >= 90 then 'A' when `term1_subject_6_total` >= 80 then 'B' when `term1_subject_6_total` >= 70 then 'C' when `term1_subject_6_total` >= 60 then 'D' else 'F' end) STORED,
  `term1_subject_7` int(11) DEFAULT 0,
  `term1_subject_7_periodic_test` int(11) DEFAULT 0,
  `term1_subject_7_subject_enrichment` int(11) DEFAULT 0,
  `term1_subject_7_multiple_assessment` int(11) DEFAULT 0,
  `term1_subject_7_portfolio` int(11) DEFAULT 0,
  `term1_subject_7_total` int(11) GENERATED ALWAYS AS (`term1_subject_7` + `term1_subject_7_periodic_test` + `term1_subject_7_subject_enrichment` + `term1_subject_7_multiple_assessment` + `term1_subject_7_portfolio`) STORED,
  `term1_subject_7_grade` varchar(5) GENERATED ALWAYS AS (case when `term1_subject_7_total` >= 90 then 'A' when `term1_subject_7_total` >= 80 then 'B' when `term1_subject_7_total` >= 70 then 'C' when `term1_subject_7_total` >= 60 then 'D' else 'F' end) STORED,
  `term1_total` int(11) GENERATED ALWAYS AS (`term1_subject_1_total` + `term1_subject_2_total` + `term1_subject_3_total` + `term1_subject_4_total` + `term1_subject_5_total` + `term1_subject_6_total` + `term1_subject_7_total`) STORED,
  `term2_subject_1` int(11) DEFAULT 0,
  `term2_subject_1_periodic_test` int(11) DEFAULT 0,
  `term2_subject_1_subject_enrichment` int(11) DEFAULT 0,
  `term2_subject_1_multiple_assessment` int(11) DEFAULT 0,
  `term2_subject_1_portfolio` int(11) DEFAULT 0,
  `term2_subject_1_total` int(11) GENERATED ALWAYS AS (`term2_subject_1` + `term2_subject_1_periodic_test` + `term2_subject_1_subject_enrichment` + `term2_subject_1_multiple_assessment` + `term2_subject_1_portfolio`) STORED,
  `term2_subject_1_grade` varchar(5) GENERATED ALWAYS AS (case when `term2_subject_1_total` >= 90 then 'A' when `term2_subject_1_total` >= 80 then 'B' when `term2_subject_1_total` >= 70 then 'C' when `term2_subject_1_total` >= 60 then 'D' else 'F' end) STORED,
  `term2_subject_2` int(11) DEFAULT 0,
  `term2_subject_2_periodic_test` int(11) DEFAULT 0,
  `term2_subject_2_subject_enrichment` int(11) DEFAULT 0,
  `term2_subject_2_multiple_assessment` int(11) DEFAULT 0,
  `term2_subject_2_portfolio` int(11) DEFAULT 0,
  `term2_subject_2_total` int(11) GENERATED ALWAYS AS (`term2_subject_2` + `term2_subject_2_periodic_test` + `term2_subject_2_subject_enrichment` + `term2_subject_2_multiple_assessment` + `term2_subject_2_portfolio`) STORED,
  `term2_subject_2_grade` varchar(5) GENERATED ALWAYS AS (case when `term2_subject_2_total` >= 90 then 'A' when `term2_subject_2_total` >= 80 then 'B' when `term2_subject_2_total` >= 70 then 'C' when `term2_subject_2_total` >= 60 then 'D' else 'F' end) STORED,
  `term2_subject_3` int(11) DEFAULT 0,
  `term2_subject_3_periodic_test` int(11) DEFAULT 0,
  `term2_subject_3_subject_enrichment` int(11) DEFAULT 0,
  `term2_subject_3_multiple_assessment` int(11) DEFAULT 0,
  `term2_subject_3_portfolio` int(11) DEFAULT 0,
  `term2_subject_3_total` int(11) GENERATED ALWAYS AS (`term2_subject_3` + `term2_subject_3_periodic_test` + `term2_subject_3_subject_enrichment` + `term2_subject_3_multiple_assessment` + `term2_subject_3_portfolio`) STORED,
  `term2_subject_3_grade` varchar(5) GENERATED ALWAYS AS (case when `term2_subject_3_total` >= 90 then 'A' when `term2_subject_3_total` >= 80 then 'B' when `term2_subject_3_total` >= 70 then 'C' when `term2_subject_3_total` >= 60 then 'D' else 'F' end) STORED,
  `term2_subject_4` int(11) DEFAULT 0,
  `term2_subject_4_periodic_test` int(11) DEFAULT 0,
  `term2_subject_4_subject_enrichment` int(11) DEFAULT 0,
  `term2_subject_4_multiple_assessment` int(11) DEFAULT 0,
  `term2_subject_4_portfolio` int(11) DEFAULT 0,
  `term2_subject_4_total` int(11) GENERATED ALWAYS AS (`term2_subject_4` + `term2_subject_4_periodic_test` + `term2_subject_4_subject_enrichment` + `term2_subject_4_multiple_assessment` + `term2_subject_4_portfolio`) STORED,
  `term2_subject_4_grade` varchar(5) GENERATED ALWAYS AS (case when `term2_subject_4_total` >= 90 then 'A' when `term2_subject_4_total` >= 80 then 'B' when `term2_subject_4_total` >= 70 then 'C' when `term2_subject_4_total` >= 60 then 'D' else 'F' end) STORED,
  `term2_subject_5` int(11) DEFAULT 0,
  `term2_subject_5_periodic_test` int(11) DEFAULT 0,
  `term2_subject_5_subject_enrichment` int(11) DEFAULT 0,
  `term2_subject_5_multiple_assessment` int(11) DEFAULT 0,
  `term2_subject_5_portfolio` int(11) DEFAULT 0,
  `term2_subject_5_total` int(11) GENERATED ALWAYS AS (`term2_subject_5` + `term2_subject_5_periodic_test` + `term2_subject_5_subject_enrichment` + `term2_subject_5_multiple_assessment` + `term2_subject_5_portfolio`) STORED,
  `term2_subject_5_grade` varchar(5) GENERATED ALWAYS AS (case when `term2_subject_5_total` >= 90 then 'A' when `term2_subject_5_total` >= 80 then 'B' when `term2_subject_5_total` >= 70 then 'C' when `term2_subject_5_total` >= 60 then 'D' else 'F' end) STORED,
  `term2_subject_6` int(11) DEFAULT 0,
  `term2_subject_6_periodic_test` int(11) DEFAULT 0,
  `term2_subject_6_subject_enrichment` int(11) DEFAULT 0,
  `term2_subject_6_multiple_assessment` int(11) DEFAULT 0,
  `term2_subject_6_portfolio` int(11) DEFAULT 0,
  `term2_subject_6_total` int(11) GENERATED ALWAYS AS (`term2_subject_6` + `term2_subject_6_periodic_test` + `term2_subject_6_subject_enrichment` + `term2_subject_6_multiple_assessment` + `term2_subject_6_portfolio`) STORED,
  `term2_subject_6_grade` varchar(5) GENERATED ALWAYS AS (case when `term2_subject_6_total` >= 90 then 'A' when `term2_subject_6_total` >= 80 then 'B' when `term2_subject_6_total` >= 70 then 'C' when `term2_subject_6_total` >= 60 then 'D' else 'F' end) STORED,
  `term2_subject_7` int(11) DEFAULT 0,
  `term2_subject_7_periodic_test` int(11) DEFAULT 0,
  `term2_subject_7_subject_enrichment` int(11) DEFAULT 0,
  `term2_subject_7_multiple_assessment` int(11) DEFAULT 0,
  `term2_subject_7_portfolio` int(11) DEFAULT 0,
  `term2_subject_7_total` int(11) GENERATED ALWAYS AS (`term2_subject_7` + `term2_subject_7_periodic_test` + `term2_subject_7_subject_enrichment` + `term2_subject_7_multiple_assessment` + `term2_subject_7_portfolio`) STORED,
  `term2_subject_7_grade` varchar(5) GENERATED ALWAYS AS (case when `term2_subject_7_total` >= 90 then 'A' when `term2_subject_7_total` >= 80 then 'B' when `term2_subject_7_total` >= 70 then 'C' when `term2_subject_7_total` >= 60 then 'D' else 'F' end) STORED,
  `term2_total` int(11) GENERATED ALWAYS AS (`term2_subject_1_total` + `term2_subject_2_total` + `term2_subject_3_total` + `term2_subject_4_total` + `term2_subject_5_total` + `term2_subject_6_total` + `term2_subject_7_total`) STORED
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`mark_id`, `student_id`, `academic_year`, `rollno`, `class`, `term1_subject_1`, `term1_subject_1_periodic_test`, `term1_subject_1_subject_enrichment`, `term1_subject_1_multiple_assessment`, `term1_subject_1_portfolio`, `term1_subject_2`, `term1_subject_2_periodic_test`, `term1_subject_2_subject_enrichment`, `term1_subject_2_multiple_assessment`, `term1_subject_2_portfolio`, `term1_subject_3`, `term1_subject_3_periodic_test`, `term1_subject_3_subject_enrichment`, `term1_subject_3_multiple_assessment`, `term1_subject_3_portfolio`, `term1_subject_4`, `term1_subject_4_periodic_test`, `term1_subject_4_subject_enrichment`, `term1_subject_4_multiple_assessment`, `term1_subject_4_portfolio`, `term1_subject_5`, `term1_subject_5_periodic_test`, `term1_subject_5_subject_enrichment`, `term1_subject_5_multiple_assessment`, `term1_subject_5_portfolio`, `term1_subject_6`, `term1_subject_6_periodic_test`, `term1_subject_6_subject_enrichment`, `term1_subject_6_multiple_assessment`, `term1_subject_6_portfolio`, `term1_subject_7`, `term1_subject_7_periodic_test`, `term1_subject_7_subject_enrichment`, `term1_subject_7_multiple_assessment`, `term1_subject_7_portfolio`, `term2_subject_1`, `term2_subject_1_periodic_test`, `term2_subject_1_subject_enrichment`, `term2_subject_1_multiple_assessment`, `term2_subject_1_portfolio`, `term2_subject_2`, `term2_subject_2_periodic_test`, `term2_subject_2_subject_enrichment`, `term2_subject_2_multiple_assessment`, `term2_subject_2_portfolio`, `term2_subject_3`, `term2_subject_3_periodic_test`, `term2_subject_3_subject_enrichment`, `term2_subject_3_multiple_assessment`, `term2_subject_3_portfolio`, `term2_subject_4`, `term2_subject_4_periodic_test`, `term2_subject_4_subject_enrichment`, `term2_subject_4_multiple_assessment`, `term2_subject_4_portfolio`, `term2_subject_5`, `term2_subject_5_periodic_test`, `term2_subject_5_subject_enrichment`, `term2_subject_5_multiple_assessment`, `term2_subject_5_portfolio`, `term2_subject_6`, `term2_subject_6_periodic_test`, `term2_subject_6_subject_enrichment`, `term2_subject_6_multiple_assessment`, `term2_subject_6_portfolio`, `term2_subject_7`, `term2_subject_7_periodic_test`, `term2_subject_7_subject_enrichment`, `term2_subject_7_multiple_assessment`, `term2_subject_7_portfolio`) VALUES
(1, 1, '2024', 'A504', '4', 55, 5, 4, 5, 4, 85, 4, 4, 2, 2, 56, 5, 2, 4, 5, 57, 5, 4, 1, 2, 58, 5, 4, 2, 1, 80, 5, 4, 1, 2, 70, 4, 5, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Triggers `marks`
--
DELIMITER $$
CREATE TRIGGER `after_marks_insert` AFTER INSERT ON `marks` FOR EACH ROW BEGIN
  DECLARE term1_percent DECIMAL(5, 2);
  DECLARE term2_percent DECIMAL(5, 2);
  DECLARE term1_grade CHAR(2);
  DECLARE term2_grade CHAR(2);

  -- Calculate percentages
  SET term1_percent = (NEW.term1_total / 700) * 100;
  SET term2_percent = (NEW.term2_total / 700) * 100;

  -- Determine grades based on percentages
  SET term1_grade = CASE
    WHEN term1_percent >= 90 THEN 'A'
    WHEN term1_percent >= 80 THEN 'B'
    WHEN term1_percent >= 70 THEN 'C'
    WHEN term1_percent >= 60 THEN 'D'
    ELSE 'F'
  END;

  SET term2_grade = CASE
    WHEN term2_percent >= 90 THEN 'A'
    WHEN term2_percent >= 80 THEN 'B'
    WHEN term2_percent >= 70 THEN 'C'
    WHEN term2_percent >= 60 THEN 'D'
    ELSE 'F'
  END;

  -- Insert into results table
  INSERT INTO results (student_id, academic_year, term1_total_marks, term1_percentage, term1_grade, term2_total_marks, term2_percentage, term2_grade)
  VALUES (NEW.student_id, NEW.academic_year, NEW.term1_total, term1_percent, term1_grade, NEW.term2_total, term2_percent, term2_grade);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_marks_update` AFTER UPDATE ON `marks` FOR EACH ROW BEGIN
  DECLARE term1_percent DECIMAL(5, 2);
  DECLARE term2_percent DECIMAL(5, 2);
  DECLARE term1_grade CHAR(2);
  DECLARE term2_grade CHAR(2);

  -- Calculate percentages
  SET term1_percent = (NEW.term1_total / 700) * 100;
  SET term2_percent = (NEW.term2_total / 700) * 100;

  -- Determine grades based on percentages
  SET term1_grade = CASE
    WHEN term1_percent >= 90 THEN 'A'
    WHEN term1_percent >= 80 THEN 'B'
    WHEN term1_percent >= 70 THEN 'C'
    WHEN term1_percent >= 60 THEN 'D'
    ELSE 'F'
  END;

  SET term2_grade = CASE
    WHEN term2_percent >= 90 THEN 'A'
    WHEN term2_percent >= 80 THEN 'B'
    WHEN term2_percent >= 70 THEN 'C'
    WHEN term2_percent >= 60 THEN 'D'
    ELSE 'F'
  END;

  -- Update the results table
  UPDATE results
  SET term1_total_marks = NEW.term1_total,
      term1_percentage = term1_percent,
      term1_grade = term1_grade,
      term2_total_marks = NEW.term2_total,
      term2_percentage = term2_percent,
      term2_grade = term2_grade
  WHERE student_id = NEW.student_id
    AND academic_year = NEW.academic_year;
END
$$
DELIMITER ;

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
(1, 1, '2024', 555, 79.29, 'C', 0, 0.00, 'F');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `section` varchar(50) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `admission_year` year(4) NOT NULL,
  `pass_year` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `name`, `section`, `mother_name`, `admission_year`, `pass_year`) VALUES
(1, 'riya', 'a', 'k', '2020', '0000');

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
(1, 'rk@gmail.com', '$2y$10$xleNV9/6D3XVBtSucu8uluepw0DXNF3Zp3EPxc0vwiSnsUOeFjG7q', 'rk', '2024-08-12 10:30:28');

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
  MODIFY `year_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `mark_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
