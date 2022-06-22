-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2022 at 06:01 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `class_19`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `image` varchar(30) DEFAULT NULL,
  `active_status` int(2) DEFAULT 1 COMMENT '0=InActive, 1=Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `title`, `sub_title`, `details`, `image`, `active_status`) VALUES
(1, 'one', 'one', 'one', 'one', 0),
(3, 'Three', 'Three', 'Three', 'Three', 0),
(4, 'Four', 'Four', 'Four', 'Four', 0),
(7, 'image', 'image', 'image', 'image', 0),
(8, 'Five tow', 'Five', 'Five', 'Five', 0),
(9, 'Test 5  s', 'Test 5 ', 'Test 5 ', 'Test 5 ', 0),
(10, 'Test 5 Sub Title', '', 'Test 5 Sub Title', 'Test 5 Sub Title', 0),
(11, 'Test 11', 'Test 11', 'Test 11', 'Test 11', 1),
(12, 'Test 12', 'Test 12', 'Test 12', 'Test 12', 1),
(13, 'rabbi', 'rabbi', 'rabbi', 'rabbi', 1),
(14, 'sohan test for image', 'sohan test for image', 'sohan test for image', '', 1),
(15, 'ss', 'ss', 'ss', '1655814191.jpg', 1),
(16, 'ghee', 'ghee', 'ghee', '1655814719.jpg', 1),
(17, 'sss', 'sss', 'ss', '1655825055.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(150) NOT NULL,
  `active_status` tinyint(2) NOT NULL DEFAULT 1 COMMENT '0=InActive, 1=Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `active_status`) VALUES
(1, 'web design', 1),
(2, 'web development', 1),
(3, 'SEO', 1),
(4, 'Graphics Design', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `contact_topic` varchar(100) NOT NULL,
  `contact_details` text NOT NULL,
  `icon_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` int(11) NOT NULL,
  `designation_name` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `our_clients`
--

CREATE TABLE `our_clients` (
  `id` int(11) NOT NULL,
  `clients_name` varchar(50) NOT NULL,
  `designation_id` int(11) NOT NULL,
  `client_image` varchar(20) NOT NULL,
  `client_review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `our_projects`
--

CREATE TABLE `our_projects` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `project_name` varchar(100) NOT NULL,
  `project_link` varchar(55) NOT NULL,
  `project_thumb` varchar(66) NOT NULL,
  `active_status` tinyint(2) NOT NULL DEFAULT 1 COMMENT '0=InActive, 1=Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `our_projects`
--

INSERT INTO `our_projects` (`id`, `category_id`, `project_name`, `project_link`, `project_thumb`, `active_status`) VALUES
(1, 2, 'this is project name', 'this is project link', 'this is link', 0),
(4, 2, 'a', 'aaa', '1655913355.', 1),
(5, 1, 'sssssssss', 'ssssss', '', 0),
(6, 4, 'sohan ', 'sohan ', '', 0),
(7, 2, 'test', 'test.com', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `our_staff`
--

CREATE TABLE `our_staff` (
  `id` int(11) NOT NULL,
  `staff_name` varchar(55) NOT NULL,
  `designation_id` int(11) NOT NULL,
  `staff_image` varchar(20) NOT NULL,
  `twitter` text NOT NULL,
  `facebook` text NOT NULL,
  `linkedin` text NOT NULL,
  `instagram` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `page_no` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `service_details` text NOT NULL,
  `icon_name` varchar(30) NOT NULL,
  `design_status` tinyint(2) NOT NULL,
  `active_status` int(2) NOT NULL DEFAULT 1 COMMENT '0=InActive, 1=Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `service_details`, `icon_name`, `design_status`, `active_status`) VALUES
(1, 'chai wala', 'this is very good', 'fa-icon', 1, 1),
(2, 'pani wala', 'this is very good', 'fa-icon', 1, 0),
(3, 'dud wala', 'this is very good', 'fa-icon', 2, 1),
(4, 'ss', 'this is very good', 'fa-icon', 2, 1),
(5, 'chacklate wala', 'this is very good', 'fa-icon', 1, 1),
(6, 'muse wala', 'this is very good', 'fa-icon', 2, 1),
(7, 'test', 'test', 'test', 1, 1),
(8, 'test', 'test', 'test', 1, 1),
(9, 'test', 'ss', 'ss', 1, 0),
(10, 'ss', 'ss', 's', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_clients`
--
ALTER TABLE `our_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_projects`
--
ALTER TABLE `our_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_staff`
--
ALTER TABLE `our_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `our_clients`
--
ALTER TABLE `our_clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `our_projects`
--
ALTER TABLE `our_projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `our_staff`
--
ALTER TABLE `our_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
