-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: May 13, 2024 at 02:36 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

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
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `message`, `created_at`) VALUES
(4, 'bsb', 'akila@gmail.com', 'dfvbfgbsfnthnthn', '2024-05-06 14:03:08'),
(5, 'Dasun Shanaka', 'dasunshanaka2002@gmail.com', 'Grate Job', '2024-05-07 08:55:35'),
(6, 'Sawandi Dinwshari', 'dasunshanaka2002@gmail.com', 'dwaaaaaaaaaa', '2024-05-07 17:46:28');

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
-- Table structure for table `post_job`
--

CREATE TABLE `post_job` (
  `Email` varchar(20) NOT NULL,
  `App_email` varchar(20) NOT NULL,
  `J_title` text NOT NULL,
  `J_type` text NOT NULL,
  `Contact` int(20) NOT NULL,
  `Salary` int(20) NOT NULL,
  `J_category` text NOT NULL,
  `Min_years` int(10) NOT NULL,
  `Max_years` int(10) NOT NULL,
  `Experience` int(10) NOT NULL,
  `Qualification` text NOT NULL,
  `J_description` text NOT NULL,
  `C_name` text NOT NULL,
  `C_description` text NOT NULL,
  `Website` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post_job`
--

INSERT INTO `post_job` (`Email`, `App_email`, `J_title`, `J_type`, `Contact`, `Salary`, `J_category`, `Min_years`, `Max_years`, `Experience`, `Qualification`, `J_description`, `C_name`, `C_description`, `Website`) VALUES
('', '', '', '', 0, 0, '', 0, 0, 0, '', '', '', '', ''),
('dasunshanaka1996@gma', 'dasunshanakacsfzahss', 'gazj', 'Contract', 750583782, 20, 'General labor/Other', 2, 2, 2, 'on', 'xvka', 'ghm', 'bcjkd', 'xdjwp'),
('dasunshanaka2002@gma', 'dasunshanaka2002@gma', 'fdgrfd', 'Work-From-Home', 750583782, 876543, 'Engineering', 66, 67, 6, 'on', 'ghfhg', 'hgh', 'h', 'gchgcf'),
('dasunshanaka@gmail.c', 'dadad@gsg', 'qqq', 'Contract', 750583782, 1, 'Admin/clerk/Office assistant', 11, 1, 1, 'on', '1', '1', '1', '1'),
('sawandi@qwe', 'acga@vxhdsdb', 'swyva', 'Internshihp', 245452687, 3256, 'Entertainment/Modeling/Acting', 23, 45, 3, 'on', 'fshxknd', 'cdxsg', 'fswikqw', 'guer'),
('shanaka2002@gmail.co', 'dasunshanaka2002@gma', '1', 'Full-time', 750583782, 1, 'Admin/clerk/Office assistant', 1, 1, 1, 'on', '1', '1', '1', '1');

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
(1, 'Dulina Santhush', '662d56be7357c_Screenshot 2023-03-15 22475712.png', 'Dulina@2001sdasdad', 1, 'I had a good experience with this site', '2024-05-08 11:30:35'),
(15, 'Sawandi Dinwshari', '663b4ba90bd36_git.png', 'sawandidineshari@gmail.com', 2, 'Excellent', '2024-05-08 09:53:45'),
(16, 'Thushari Sewwandi', '663b4c0152216_git commands.png', 'thush25@gmail.com', 4, 'good ', '2024-05-08 09:55:13'),
(17, 'Dasun Shanaka', '663b6221ad375_git commands.png', 'dasun@23gmail.com', 3, 'good', '2024-05-08 11:29:37');

-- --------------------------------------------------------

--
-- Table structure for table `submit_resume`
--

CREATE TABLE `submit_resume` (
  `ID` int(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `contact` int(15) NOT NULL,
  `Home_Town` varchar(50) NOT NULL,
  `Qualification_type` varchar(50) NOT NULL,
  `University` varchar(50) NOT NULL,
  `Graduated_year` int(5) NOT NULL,
  `Current_Designation` varchar(50) NOT NULL,
  `Company_name` varchar(50) NOT NULL,
  `Work_Duration` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `submit_resume`
--

INSERT INTO `submit_resume` (`ID`, `Name`, `Email`, `contact`, `Home_Town`, `Qualification_type`, `University`, `Graduated_year`, `Current_Designation`, `Company_name`, `Work_Duration`) VALUES
(1440, 'Dasun Shanaka', 'dasunshanaka2002@gmail.com', 750583782, 'Moratuwa', 'PHD', '6', 6, '6', 'gt', 6),
(1441, '', '', 0, '', '', '', 0, '', '', 0),
(1442, 'Dasun Shanaka', 'dasunshanaka2002@gmail.com', 750583782, 'Moratuwa', 'PHD', '6', 6, '6', 'gt', 6),
(1443, '', '', 0, '', '', '', 0, '', '', 0),
(1444, 'Dasun Shanaka', 'dasunshanaka2002@gmail.com', 750583782, 'Moratuwa', 'PHD', '6', 6, '6', 'gt', 6),
(1445, '', '', 0, '', '', '', 0, '', '', 0),
(1447, '', '', 0, '', '', '', 0, '', '', 0),
(1448, '', '', 0, '', '', '', 0, '', '', 0),
(1449, '', '', 0, '', '', '', 0, '', '', 0),
(1451, '', '', 0, '', '', '', 0, '', '', 0),
(1452, '', '', 0, '', '', '', 0, '', '', 0),
(1454, '', '', 0, '', '', '', 0, '', '', 0),
(1456, '', '', 0, '', '', '', 0, '', '', 0),
(1457, '', '', 0, '', '', '', 0, '', '', 0),
(1458, '', '', 0, '', '', '', 0, '', '', 0),
(1459, '', '', 0, '', '', '', 0, '', '', 0),
(1461, '', '', 0, '', '', '', 0, '', '', 0),
(1462, '', '', 0, '', '', '', 0, '', '', 0),
(1463, '', '', 0, '', '', '', 0, '', '', 0),
(1464, '', '', 0, '', '', '', 0, '', '', 0),
(1466, '', '', 0, '', '', '', 0, '', '', 0),
(1467, '', '', 0, '', '', '', 0, '', '', 0),
(1468, 'ababababba', 'dasunshanaka2002@gmail.com', 750583782, 'Moratuwa', 'Diploma', '14', 1, '41', '41', 41),
(1469, '', '', 0, '', '', '', 0, '', '', 0),
(1470, 'ababababba', 'dasunshanaka2002@gmail.com', 750583782, 'Moratuwa', 'Diploma', '14', 1, '41', '41', 41),
(1471, '', '', 0, '', '', '', 0, '', '', 0),
(1472, 'Dasun Shanaka', 'dasunshanaka2002@gmail.com', 750583782, 'Moratuwa', 'Bachelors', 'dwa', 10, '10', '10', 10),
(1473, '', '', 0, '', '', '', 0, '', '', 0),
(1474, '', '', 0, '', '', '', 0, '', '', 0),
(1475, 'Dasun Shanaka', 'dasunshanaka2002@gmail.com', 750583782, 'Moratuwa', 'Master', 'dwa', 10, '10', '10', 10),
(1476, '', '', 0, '', '', '', 0, '', '', 0),
(1477, '', '', 0, '', '', '', 0, '', '', 0),
(1478, '', '', 0, '', '', '', 0, '', '', 0),
(1479, 'Dasun Shanaka', 'dasunshanaka2002@gmail.com', 750583782, 'Moratuwa', 'Master', 'AWD', 2, '2', '2', 2),
(1480, '', '', 0, '', '', '', 0, '', '', 0),
(1481, 'Dasun Shanaka', 'dasunshanaka2002@gmail.com', 750583782, 'Moratuwa', 'PHD', 'SLIIT', 2027, 'No', 'Ehema ekak ne', 1),
(1482, '', '', 0, '', '', '', 0, '', '', 0),
(1483, 'Dasun Shanaka', 'dasunshanaka2002@gmail.com', 750583782, 'Moratuwa', 'Bachelors', '1', 1, '1', '1', 1),
(1484, '', '', 0, '', '', '', 0, '', '', 0),
(1485, 'themiya', 'dasunshanaka2002@gmail.com', 750583782, 'Moratuwa', 'Diploma', 'SLIIT', 1, '14', '10', 1),
(1486, '', '', 0, '', '', '', 0, '', '', 0),
(1487, '', '', 0, '', '', '', 0, '', '', 0),
(1488, 'Dasun Shanaka', 'dasunshanaka2002@gmail.com', 750583782, 'Moratuwa', 'Master', 'SLIIT', 1, '1', '1', 1),
(1489, '', '', 0, '', '', '', 0, '', '', 0),
(1490, '', '', 0, '', '', '', 0, '', '', 0),
(1491, '', '', 0, '', '', '', 0, '', '', 0),
(1492, '', '', 0, '', '', '', 0, '', '', 0),
(1493, '', '', 0, '', '', '', 0, '', '', 0),
(1494, '', '', 0, '', '', '', 0, '', '', 0),
(1495, 'Dasun Shanaka', 'dasunshanaka2002@gmail.com', 750583782, 'Moratuwa', 'Bachelors', 'SLIIT', 1, '1', '1', 1),
(1496, '', '', 0, '', '', '', 0, '', '', 0),
(1497, '', '', 0, '', '', '', 0, '', '', 0),
(1498, 'Dasun Shanaka', 'dasunshanaka2002@gmail.com', 750583782, 'Moratuwa', 'Bachelors', 'SLIIT', 1, '1', '1', 1),
(1499, '', '', 0, '', '', '', 0, '', '', 0),
(1500, '', '', 0, '', '', '', 0, '', '', 0),
(1501, 'Dasun Shanaka', 'dasunshanaka2002@gmail.com', 750583782, 'Moratuwa', 'Bachelors', 'SLIIT', 1, '1', '1', 1),
(1502, '', '', 0, '', '', '', 0, '', '', 0),
(1503, 'Dasun Shanaka', 'dasunshanaka2002@gmail.com', 750583782, 'Moratuwa', 'Bachelors', 'SLIIT', 1, '1', '1', 1),
(1504, '', '', 0, '', '', '', 0, '', '', 0),
(1505, 'Dasun Shanaka', 'dasunshanaka2002@gmail.com', 750583782, 'Moratuwa', 'Bachelors', 'SLIIT', 1, '1', '1', 1),
(1506, '', '', 0, '', '', '', 0, '', '', 0),
(1507, 'Dasun Shanaka', 'dasunshanaka2002@gmail.com', 750583782, 'Moratuwa', 'Bachelors', 'SLIIT', 1, '1', '1', 1),
(1508, '', '', 0, '', '', '', 0, '', '', 0),
(1509, '', '', 0, '', '', '', 0, '', '', 0),
(1510, '', '', 0, '', '', '', 0, '', '', 0),
(1511, 'Dasun Shanaka', 'dasunshanaka2002@gmail.com', 750583782, 'Moratuwa', 'Master', 'SLIIT', 1, '1', '1', 1),
(1512, '', '', 0, '', '', '', 0, '', '', 0),
(1513, '', '', 0, '', '', '', 0, '', '', 0),
(1514, '', '', 0, '', '', '', 0, '', '', 0),
(1515, '', '', 0, '', '', '', 0, '', '', 0),
(1516, 'Dasun Shanaka', 'dasunshanaka2002@gmail.com', 750583782, 'Moratuwa', 'Master', 'SLIIT', 1, '1', '1', 1),
(1517, '', '', 0, '', '', '', 0, '', '', 0),
(1518, 'Dasun Shanaka', 'dasunshanaka2002@gmail.com', 750583782, 'Moratuwa', 'Master', 'SLIIT', 1, '1', '1', 1),
(1519, '', '', 0, '', '', '', 0, '', '', 0),
(1520, '', '', 0, '', '', '', 0, '', '', 0),
(1521, 'Dasun Shanaka', 'dasunshanaka2002@gmail.com', 750583782, 'Moratuwa', 'Master', 'SLIIT', 1, '1', '1', 1),
(1522, '', '', 0, '', '', '', 0, '', '', 0),
(1523, '', '', 0, '', '', '', 0, '', '', 0),
(1524, 'Dasun Shanaka', 'dasunshanaka2002@gmail.com', 750583782, 'Moratuwa', 'Master', 'SLIIT', 1, '1', '1', 1),
(1525, '', '', 0, '', '', '', 0, '', '', 0),
(1526, '', '', 0, '', '', '', 0, '', '', 0),
(1527, 'Dasun Shanaka', 'dasunshanaka2002@gmail.com', 750583782, 'Moratuwa', 'Master', 'SLIIT', 1, '1', '1', 1),
(1528, '', '', 0, '', '', '', 0, '', '', 0),
(1529, '', '', 0, '', '', '', 0, '', '', 0),
(1530, '', '', 0, '', '', '', 0, '', '', 0),
(1531, 'Dasun Shanaka', 'dasunshanaka2002@gmail.com', 750583782, 'Moratuwa', 'Master', 'SLIIT', 1, '1', '1', 1),
(1532, '', '', 0, '', '', '', 0, '', '', 0),
(1533, '', '', 0, '', '', '', 0, '', '', 0),
(1534, 'Dasun Shanaka', 'dasunshanaka2002@gmail.com', 750583782, 'Moratuwa', 'Master', 'SLIIT', 1, '1', '1', 1),
(1535, '', '', 0, '', '', '', 0, '', '', 0),
(1536, 'Dasun Shanaka', 'dasunshanaka2002@gmail.com', 750583782, 'Moratuwa', 'Diploma', 'SLIIT', 7, '10', 'jj', 6),
(1537, '', '', 0, '', '', '', 0, '', '', 0),
(1538, 'Dasun Shanaka', 'dasunshanaka2002@gmail.com', 750583782, 'Moratuwa', 'Master', 'SLIIT', 1, 'no', 'no', 1),
(1539, '', '', 0, '', '', '', 0, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Username` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Username`, `Email`, `Age`, `Password`) VALUES
(2, 'sandeepa', 'suba@gmail.com', 22, 'banis'),
(3, 'Dasun', 'dasunshanaka2002@gmail.com', 21, '1111'),
(4, 'lasan', 'lasan@', 21, '1111'),
(5, 'qqq', 'q@', 10, '1'),
(7, 'a', 'a@', 1, 'a'),
(8, 'Themiya Chamod', 'themiya@gmail.com', 23, '12345'),
(9, 'i', 'i@', 1, '12'),
(10, 'dfgsj', 'vswak@hjk', 21, '34'),
(11, 'jsgxcsuy', 'fdhsjaml@ewtydbjs', 34, '56'),
(12, 'f1', 'asdg@ghj', 45, '56'),
(13, 'w1', 'www@www', 23, '11'),
(14, 'sakithma', 'tsakithma@18gmail.com', 21, '1234'),
(15, 'sakithma', 'tsakithma18@gmail.com', 21, '1234'),
(16, 'sandeeoa', 'sandeepa@', 13, '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`j_id`);

--
-- Indexes for table `post_job`
--
ALTER TABLE `post_job`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `submit_resume`
--
ALTER TABLE `submit_resume`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `j_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `submit_resume`
--
ALTER TABLE `submit_resume`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1540;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
