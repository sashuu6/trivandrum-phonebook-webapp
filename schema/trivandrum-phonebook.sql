-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 17, 2020 at 07:33 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trivandrum-phonebook`
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
  `status` int(11) NOT NULL DEFAULT 1,
  `created_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_timestamp` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `phonebook_numbers`
--

CREATE TABLE `phonebook_numbers` (
  `id` bigint(20) NOT NULL,
  `phonebook_id` bigint(20) NOT NULL,
  `international_code` int(11) NOT NULL DEFAULT 91,
  `number` varchar(1024) NOT NULL,
  `description` varchar(1024) DEFAULT NULL,
  `created_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_timestamp` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `phonebook_sections`
--

CREATE TABLE `phonebook_sections` (
  `id` bigint(20) NOT NULL,
  `secret` varchar(512) DEFAULT NULL,
  `name` varchar(1024) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_timestamp` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phonebook_sections`
--

INSERT INTO `phonebook_sections` (`id`, `secret`, `name`, `status`, `created_timestamp`, `modified_timestamp`) VALUES
(1777, '98608785-9798-11ea-ae29-a08cfd260cff', 'Collector Office', 1, '2020-05-13 14:11:24', NULL);

--
-- Triggers `phonebook_sections`
--
DELIMITER $$
CREATE TRIGGER `phonebook_sections_secret` BEFORE INSERT ON `phonebook_sections` FOR EACH ROW BEGIN
  SET new.secret := (SELECT UUID());
END
$$
DELIMITER ;

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

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) NOT NULL,
  `secret` varchar(512) DEFAULT NULL,
  `name` varchar(1024) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_timestamp` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `secret`, `name`, `status`, `created_timestamp`, `modified_timestamp`) VALUES
(-1, '55cdada2-97bc-11ea-ae29-a08cfd260cff', 'Administrator', 1, '2020-05-13 13:34:37', NULL),
(922337204, '55cdbd7c-97bc-11ea-ae29-a08cfd260cff', 'Main Staff', 1, '2020-05-13 13:50:20', NULL);

--
-- Triggers `roles`
--
DELIMITER $$
CREATE TRIGGER `roles_secret` BEFORE INSERT ON `roles` FOR EACH ROW BEGIN
  SET new.secret := (SELECT UUID());
END
$$
DELIMITER ;

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
(101, '5404ccbd-951e-11ea-b9d0-0242ac150002', 'tpk@tharun.me', '2345678fghj34567', 'Tharun P Karun', -1, '2020-05-13 13:40:55', NULL);

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `beforeUsersInsert` BEFORE INSERT ON `users` FOR EACH ROW BEGIN
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
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `phonebook_numbers`
--
ALTER TABLE `phonebook_numbers`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `phonebook_roles`
--
ALTER TABLE `phonebook_roles`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `phonebook_sections`
--
ALTER TABLE `phonebook_sections`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1779;

--
-- AUTO_INCREMENT for table `phonebook_show`
--
ALTER TABLE `phonebook_show`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
