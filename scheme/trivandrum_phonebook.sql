-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: mariadb:3306
-- Generation Time: May 13, 2020 at 02:52 PM
-- Server version: 10.5.1-MariaDB-1:10.5.1+maria~bionic
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trivandrum_phonebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `phonebook`
--

CREATE TABLE `phonebook` (
  `id` bigint(20) NOT NULL,
  `secret` varchar(256) NOT NULL,
  `section_id` bigint(20) NOT NULL,
  `name` varchar(1024) NOT NULL,
  `address_1` varchar(1024) DEFAULT NULL,
  `address_2` varchar(1024) DEFAULT NULL,
  `city` varchar(1024) DEFAULT NULL,
  `state` varchar(1024) DEFAULT NULL,
  `country` varchar(1024) DEFAULT NULL,
  `created_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_timestamp` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phonebook`
--

INSERT INTO `phonebook` (`id`, `secret`, `section_id`, `name`, `address_1`, `address_2`, `city`, `state`, `country`, `created_timestamp`, `modified_timestamp`) VALUES
(50, '6a026b74951e11eab9d00242ac150002', 1777, 'Collector Demo', 'Demo Street', 'Demo Street 2', 'Trivandrum', 'Kerala', 'India', '2020-05-13 13:41:32', NULL),
(51, '', 1777, 'collector helpline', 'Collector Camp', 'Kowdiyar', 'Thiruvananthapuram', 'Kerala', 'India', '2020-05-13 14:47:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `phonebook_numbers`
--

CREATE TABLE `phonebook_numbers` (
  `id` bigint(20) NOT NULL,
  `phonebook_id` bigint(20) NOT NULL,
  `international_code` int(11) NOT NULL DEFAULT 91,
  `number` varchar(1024) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `created_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_timestamp` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phonebook_numbers`
--

INSERT INTO `phonebook_numbers` (`id`, `phonebook_id`, `international_code`, `number`, `description`, `created_timestamp`, `modified_timestamp`) VALUES
(1, 50, 91, '1234567890', 'Demo Work', '2020-05-13 14:18:40', NULL),
(2, 51, 91, '8281962557', 'landline', '2020-05-13 14:51:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `phonebook_roles`
--

CREATE TABLE `phonebook_roles` (
  `id` bigint(20) NOT NULL,
  `phonebook_id` bigint(20) NOT NULL,
  `role_id` bigint(20) NOT NULL,
  `created_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_timestamp` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phonebook_roles`
--

INSERT INTO `phonebook_roles` (`id`, `phonebook_id`, `role_id`, `created_timestamp`, `modified_timestamp`) VALUES
(150, 50, 922337203, '2020-05-13 13:45:10', NULL),
(151, 50, 922337204, '2020-05-13 13:56:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `phonebook_sections`
--

CREATE TABLE `phonebook_sections` (
  `id` bigint(20) NOT NULL,
  `name` varchar(1024) NOT NULL,
  `created_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_timestamp` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phonebook_sections`
--

INSERT INTO `phonebook_sections` (`id`, `name`, `created_timestamp`, `modified_timestamp`) VALUES
(1777, 'Collector Office', '2020-05-13 14:11:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `phonebook_show`
--

CREATE TABLE `phonebook_show` (
  `id` bigint(20) NOT NULL,
  `phonebook_id` bigint(20) NOT NULL,
  `show_dashboard` int(11) NOT NULL DEFAULT 0,
  `created_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_timestamp` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phonebook_show`
--

INSERT INTO `phonebook_show` (`id`, `phonebook_id`, `show_dashboard`, `created_timestamp`, `modified_timestamp`) VALUES
(1, 51, 1, '2020-05-13 14:48:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) NOT NULL,
  `name` varchar(1024) NOT NULL,
  `created_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_timestamp` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_timestamp`, `modified_timestamp`) VALUES
(922337203, 'Administrator', '2020-05-13 13:34:37', NULL),
(922337204, 'Main Staff', '2020-05-13 13:50:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `secret` varchar(256) DEFAULT NULL,
  `email` varchar(1024) NOT NULL,
  `password` varchar(1024) NOT NULL,
  `name` varchar(1024) NOT NULL,
  `role` bigint(20) NOT NULL,
  `created_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_timestamp` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `secret`, `email`, `password`, `name`, `role`, `created_timestamp`, `modified_timestamp`) VALUES
(101, '5404ccbd-951e-11ea-b9d0-0242ac150002', 'tpk@tharun.me', '2345678fghj34567', 'Tharun P Karun', 922337203, '2020-05-13 13:40:55', NULL);

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `beforeYourTableUpdate` BEFORE INSERT ON `users` FOR EACH ROW BEGIN
  SET new.secret := (SELECT UUID());
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `phonebook`
--
ALTER TABLE `phonebook`
  ADD PRIMARY KEY (`id`),
  ADD KEY `section_id` (`section_id`);

--
-- Indexes for table `phonebook_numbers`
--
ALTER TABLE `phonebook_numbers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `phonebook_id` (`phonebook_id`);

--
-- Indexes for table `phonebook_roles`
--
ALTER TABLE `phonebook_roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `phonebook_roles_ibfk_1` (`phonebook_id`),
  ADD KEY `phonebook_roles_ibfk_2` (`role_id`);

--
-- Indexes for table `phonebook_sections`
--
ALTER TABLE `phonebook_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phonebook_show`
--
ALTER TABLE `phonebook_show`
  ADD PRIMARY KEY (`id`),
  ADD KEY `phonebook_id` (`phonebook_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_ibfk_1` (`role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `phonebook`
--
ALTER TABLE `phonebook`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `phonebook_numbers`
--
ALTER TABLE `phonebook_numbers`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `phonebook_roles`
--
ALTER TABLE `phonebook_roles`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `phonebook_sections`
--
ALTER TABLE `phonebook_sections`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1778;

--
-- AUTO_INCREMENT for table `phonebook_show`
--
ALTER TABLE `phonebook_show`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=922337205;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `phonebook`
--
ALTER TABLE `phonebook`
  ADD CONSTRAINT `phonebook_ibfk_1` FOREIGN KEY (`section_id`) REFERENCES `phonebook_sections` (`id`);

--
-- Constraints for table `phonebook_numbers`
--
ALTER TABLE `phonebook_numbers`
  ADD CONSTRAINT `phonebook_numbers_ibfk_1` FOREIGN KEY (`phonebook_id`) REFERENCES `phonebook` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `phonebook_roles`
--
ALTER TABLE `phonebook_roles`
  ADD CONSTRAINT `phonebook_roles_ibfk_1` FOREIGN KEY (`phonebook_id`) REFERENCES `phonebook` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `phonebook_roles_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `phonebook_show`
--
ALTER TABLE `phonebook_show`
  ADD CONSTRAINT `phonebook_show_ibfk_1` FOREIGN KEY (`phonebook_id`) REFERENCES `phonebook` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
