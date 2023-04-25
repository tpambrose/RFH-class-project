-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2022 at 10:11 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freelancehub`
--

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE `employer` (
  `employer_id` int(255) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `profile_pic` varchar(500) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `freelancer`
--

CREATE TABLE `freelancer` (
  `lancer_id` int(255) NOT NULL,
  `name` varchar(400) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `location` varchar(500) NOT NULL,
  `field` varchar(500) NOT NULL,
  `profile_pic` text NOT NULL,
  `certificate` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `language` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `rating` int(255) NOT NULL,
  `bio` varchar(500) NOT NULL,
  `website` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='freelancer table';

--
-- Dumping data for table `freelancer`
--

INSERT INTO `freelancer` (`lancer_id`, `name`, `email`, `password`, `location`, `field`, `profile_pic`, `certificate`, `language`, `rating`, `bio`, `website`) VALUES
(2, 'NIYONZIMA Eric', 'niyonzimaeric@gmail.com', '12345', 'Huye', 'Photographer', 'image2.JPG', NULL, 'ENG,KINY', 4, 'Lorem ipsum, dolor sit goji amelete amet consectetur', 'niyonzimaeric.com'),
(3, 'UWIMANA Ange', 'uwimanaange@gmail.com', '12345', 'Kigali', 'Event Planner', 'R3.jpg', NULL, 'ENG,FRENCH', 5, 'Lorem ipsum, dolor sit goji amelete amet consectetur', 'uwimanaAnge.com'),
(4, 'UWASE Divine', 'uwaseDivine@gmail.com', '12345', 'Musanze', 'Photography', 'R2.jpg', NULL, 'ENG, KINY', 5, 'Lorem ipsum, dolor sit goji amelete amet consectetur', 'uwasedivine.com'),
(6, 'CYUZUZO Claudine', 'shejaemeric051@gmail.com', '12345', 'huye', 'Web Developer', 'Freelancer.JPG', NULL, 'ENG, KINY', 4, 'Lorem ipsum, dolor sit goji amelete amet consectetur', 'www.sheja.com'),
(16, 'LEVI Acherman', 'shyaka2@gmail.com', '12345', 'ghjkl', 'Consultant', 'image1.jpg', NULL, 'ENG, KINY', 4, 'Lorem ipsum, dolor sit goji amelete amet consectetur', 'www.leviaot.com'),
(17, 'sheja emeric', '', '', '', '', '', NULL, 'ENG, KINY', 4, 'hello there', '');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(255) NOT NULL,
  `employer_id` int(255) NOT NULL,
  `lancer_id` int(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(500) NOT NULL,
  `date` varchar(500) NOT NULL DEFAULT current_timestamp(),
  `pictures` varchar(500) NOT NULL,
  `lancer_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `name`, `category`, `date`, `pictures`, `lancer_id`) VALUES
(1, 'Mucyo Wedding', '../images/R (3).jpg', '2022-07-30 11:54:20', 'Wedding Photos', 2),
(2, 'hirwa Graduation', '../images/R (2).jpg', '2022-07-30 11:54:20', 'Graduation Photos', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`employer_id`),
  ADD KEY `employer_id` (`employer_id`);

--
-- Indexes for table `freelancer`
--
ALTER TABLE `freelancer`
  ADD PRIMARY KEY (`lancer_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `lancer_id` (`lancer_id`),
  ADD KEY `lancer_id_2` (`lancer_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`),
  ADD KEY `lancer` (`lancer_id`),
  ADD KEY `job_id` (`job_id`,`employer_id`,`lancer_id`),
  ADD KEY `employer_id` (`employer_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`),
  ADD KEY `project_id` (`project_id`),
  ADD KEY `lancer_id` (`lancer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employer`
--
ALTER TABLE `employer`
  MODIFY `employer_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `freelancer`
--
ALTER TABLE `freelancer`
  MODIFY `lancer_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_ibfk_1` FOREIGN KEY (`employer_id`) REFERENCES `employer` (`employer_id`),
  ADD CONSTRAINT `jobs_ibfk_2` FOREIGN KEY (`lancer_id`) REFERENCES `freelancer` (`lancer_id`);

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_ibfk_1` FOREIGN KEY (`lancer_id`) REFERENCES `freelancer` (`lancer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
