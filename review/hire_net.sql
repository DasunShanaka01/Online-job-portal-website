-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2024 at 07:55 AM
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
-- Database: `hire_net`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `catid` int(11) NOT NULL,
  `cat_name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catid`, `cat_name`) VALUES
(1, 'Business'),
(2, 'Engineering '),
(3, 'Digital Marketing '),
(4, 'HR'),
(5, 'Education ');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `j_id` int(11) NOT NULL,
  `catid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `requirement` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`j_id`, `catid`, `name`, `location`, `company`, `sex`, `description`, `requirement`) VALUES
(1, 2, 'Software Engineer', 'Seattle', 'Tech Solutions LLC', 'Any', 'Developing software solutions to meet client needs', 'Bachelors degree in Computer Science or related field'),
(2, 1, 'Business Development Manager', 'San Francisco', 'XYZ Inc', 'Any', 'Developing growth strategies and plans', 'Minimum 5 years of experience in sales or business development'),
(3, 1, 'Business Analyst', 'New York', 'ABC Corp', 'Any', 'Analyzing business processes and data to identify improvement opportunities', 'Bachelors degree in Business Administration or related field'),
(4, 2, 'Civil Engineer', 'Chicago', 'Construction Co', 'Any', 'Designing and supervising infrastructure projects', 'Bachelors degree in Civil Engineering and relevant professional certification'),
(5, 3, 'Digital Marketing Specialist', 'Los Angeles', 'Marketing Agency', 'Any', 'Developing and implementing digital marketing campaigns', 'Experience with SEO, SEM, and social media marketing'),
(6, 3, 'Content Marketing Manager', 'Boston', 'Tech Startup', 'Any', 'Creating and managing content marketing strategies', 'Proven experience in content marketing and excellent writing skills'),
(7, 4, 'HR Manager', 'Houston', 'Global Corp', 'Any', 'Overseeing human resources operations and policies', 'Bachelors degree in Human Resources or related field and HR certification'),
(8, 4, 'Recruitment Specialist', 'Miami', 'Recruitment Agency', 'Any', 'Identifying and attracting top talent for client organizations', 'Experience in recruitment and knowledge of hiring practices'),
(9, 5, 'School Teacher', 'Dallas', 'Local School District', 'Any', 'Teaching assigned subjects to students', 'Bachelors degree in Education and teaching certification'),
(10, 5, 'Education Consultant', 'Phoenix', 'Education Consultancy Firm', 'Any', 'Providing guidance and support to educational institutions', 'Masters degree in Education and experience in education consulting');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `r_id` int(11) NOT NULL,
  `r_name` varchar(50) NOT NULL,
  `r_image` varchar(200) NOT NULL,
  `r_email` varchar(50) NOT NULL,
  `r_rating` int(11) NOT NULL,
  `r_review` varchar(225) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`r_id`, `r_name`, `r_image`, `r_email`, `r_rating`, `r_review`, `date`) VALUES
(1, 'dulina hejithadasdadad', '662d56be7357c_Screenshot 2023-03-15 22475712.png', 'Dulina@2001sdasdad', 4, 'sfsfsfsfssssffafafafafaf', '2024-04-27 19:49:18'),
(13, 'dhfuhfnfkbfk', '663326b4968b2_mantis-tillers-7940-64_1000.jpg', 'wup0327@gmail.com', 2, 'gtfuti  ybyihhi', '2024-05-02 05:37:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`j_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `j_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
