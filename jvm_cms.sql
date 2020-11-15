-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 12, 2017 at 11:29 AM
-- Server version: 5.7.16-0ubuntu0.16.04.1
-- PHP Version: 7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jvm_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` bigint(20) NOT NULL,
  `id_employee` bigint(20) DEFAULT NULL,
  `id_company` bigint(20) DEFAULT NULL,
  `address` varchar(125) NOT NULL,
  `address_label` enum('personal','billing','shipping','company') NOT NULL,
  `street_1` varchar(225) DEFAULT NULL,
  `street_2` varchar(225) DEFAULT NULL,
  `city` varchar(125) DEFAULT NULL,
  `state` varchar(225) DEFAULT NULL,
  `country` varchar(125) DEFAULT NULL,
  `zip` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` bigint(20) NOT NULL,
  `company_name` varchar(125) NOT NULL,
  `work_time_begin` time NOT NULL,
  `work_time_end` time NOT NULL,
  `work_day_from` enum('sunday','monday','tuesday','wednesday','thursday','friday','saturday') NOT NULL,
  `work_day_until` enum('sunday','monday','tuesday','wednesday','thursday','friday','saturday') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `company_name`, `work_time_begin`, `work_time_end`, `work_day_from`, `work_day_until`) VALUES
(1, 'CV java multi mandiri', '08:00:00', '17:00:00', 'monday', 'saturday'),
(2, 'CV hardwell indonesia', '09:00:00', '18:00:00', 'tuesday', 'sunday');

-- --------------------------------------------------------

--
-- Table structure for table `company_role`
--

CREATE TABLE `company_role` (
  `id` bigint(20) NOT NULL,
  `id_company` bigint(20) NOT NULL,
  `role_label` varchar(125) NOT NULL,
  `role_from_table` varchar(125) NOT NULL,
  `role_from_column` varchar(125) NOT NULL,
  `role_equal_with` varchar(125) NOT NULL,
  `role_max_value` varchar(25) NOT NULL,
  `role_doc` varchar(225) NOT NULL,
  `role_description` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_role`
--

INSERT INTO `company_role` (`id`, `id_company`, `role_label`, `role_from_table`, `role_from_column`, `role_equal_with`, `role_max_value`, `role_doc`, `role_description`) VALUES
(1, 1, 'kehadiran', 'presence', 'presence_info', 'A', '3', 'SP 1', 'Ketidak hadiran tanpa keterangan 3 hari berturut turut mendapatkan SP 1.'),
(2, 1, 'Keterlambatan', 'presence_log', 'datetime', '60', '3', 'surat teguran', 'Telat 3 kali berturut-turut dapat surat teguran');

-- --------------------------------------------------------

--
-- Table structure for table `cp_format`
--

CREATE TABLE `cp_format` (
  `id` bigint(20) NOT NULL,
  `contact_app` varchar(125) DEFAULT NULL,
  `contact_format_prefix` varchar(25) DEFAULT NULL,
  `contact_format_postfix` varchar(25) DEFAULT NULL,
  `contact_min_length` int(125) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cp_format`
--

INSERT INTO `cp_format` (`id`, `contact_app`, `contact_format_prefix`, `contact_format_postfix`, `contact_min_length`) VALUES
(6, 'whatapp', '+62', NULL, 15),
(7, 'gmail', NULL, '@gmail.com', 125),
(8, 'twitter', 'https://twitter.com/', '', 125);

-- --------------------------------------------------------

--
-- Table structure for table `cp_list`
--

CREATE TABLE `cp_list` (
  `id` bigint(20) NOT NULL,
  `id_format` bigint(20) NOT NULL,
  `id_employee` bigint(20) DEFAULT NULL,
  `id_company` bigint(20) DEFAULT NULL,
  `list_label` enum('home','work','patner') NOT NULL,
  `list_value` varchar(125) DEFAULT NULL,
  `list_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `list_status_active` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` bigint(20) NOT NULL,
  `id_company` bigint(20) DEFAULT NULL,
  `id_second_company` bigint(20) DEFAULT NULL,
  `id_period` bigint(20) DEFAULT NULL,
  `id_position` bigint(20) DEFAULT NULL,
  `id_person` bigint(20) DEFAULT NULL,
  `emp_status` enum('active','fired','resign','transfer') DEFAULT NULL,
  `emp_leave_available` int(11) DEFAULT NULL,
  `emp_join_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `id_company`, `id_second_company`, `id_period`, `id_position`, `id_person`, `emp_status`, `emp_leave_available`, `emp_join_date`) VALUES
(3, 1, NULL, 3, 2, 4, NULL, 2, '2017-01-12 04:14:24'),
(4, 1, NULL, 4, 3, 5, 'active', 3, '2017-01-12 04:14:47');

-- --------------------------------------------------------

--
-- Table structure for table `emp_department`
--

CREATE TABLE `emp_department` (
  `id` bigint(20) NOT NULL,
  `id_dept_parent` bigint(20) DEFAULT NULL,
  `id_dept_manager` bigint(20) DEFAULT NULL,
  `dept_manager_name` varchar(125) DEFAULT NULL,
  `dept_name` varchar(125) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_department`
--

INSERT INTO `emp_department` (`id`, `id_dept_parent`, `id_dept_manager`, `dept_manager_name`, `dept_name`) VALUES
(1, NULL, 1, 'Ione', 'Information Technology'),
(2, 1, 2, 'winafy', 'Anime comics'),
(3, 1, 3, 'Azahry', 'Web Developer');

-- --------------------------------------------------------

--
-- Table structure for table `emp_notes`
--

CREATE TABLE `emp_notes` (
  `id` bigint(20) NOT NULL,
  `id_employee` bigint(20) NOT NULL,
  `id_by_user` bigint(20) NOT NULL,
  `note` varchar(225) NOT NULL,
  `note_attach` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `emp_period`
--

CREATE TABLE `emp_period` (
  `id` bigint(20) NOT NULL,
  `period_label` varchar(125) DEFAULT NULL,
  `period_time` int(25) DEFAULT NULL,
  `period_time_unit` enum('h','d','m','y') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_period`
--

INSERT INTO `emp_period` (`id`, `period_label`, `period_time`, `period_time_unit`) VALUES
(3, 'Trainning', 3, 'm'),
(4, 'Kontrak', 1, 'y');

-- --------------------------------------------------------

--
-- Table structure for table `emp_person_info`
--

CREATE TABLE `emp_person_info` (
  `id` bigint(20) NOT NULL,
  `birth_date` date NOT NULL,
  `birth_place` varchar(125) NOT NULL,
  `full_name` varchar(125) NOT NULL,
  `gender` enum('female','male') NOT NULL,
  `no_identification` varchar(125) NOT NULL,
  `no_passport` varchar(125) NOT NULL,
  `no_bank_account` varchar(125) NOT NULL,
  `nationality` varchar(125) NOT NULL,
  `marital_status` enum('single','married','widower','divorced') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_person_info`
--

INSERT INTO `emp_person_info` (`id`, `birth_date`, `birth_place`, `full_name`, `gender`, `no_identification`, `no_passport`, `no_bank_account`, `nationality`, `marital_status`) VALUES
(1, '1996-09-12', 'Brebes', 'Ione firmw', 'male', '0910210902', '10291990909', '23902932090', 'Indonesia', 'single'),
(2, '1989-12-12', 'Jakarta', 'Winafy', 'female', '209023909', '0920392090', '09293020', 'Indonesia', 'single'),
(3, '1997-12-17', 'Pangkalanbun', 'Azhary aruma', 'female', '29819281', '283293829898', '9283238923889', 'Indonesia', 'single'),
(4, '1999-12-16', 'Brebes', 'Muhammad insan mulia', 'male', '2983289', '29328989', '2938298', 'Arab', 'single'),
(5, '2000-01-12', 'Ambon', 'Sarin sibonar', 'male', '2938298', '2938239283989', '28329839', 'Indonesia', 'married');

-- --------------------------------------------------------

--
-- Table structure for table `emp_position`
--

CREATE TABLE `emp_position` (
  `id` bigint(20) NOT NULL,
  `id_department` bigint(20) DEFAULT NULL,
  `id_person_manager` bigint(20) DEFAULT NULL,
  `id_person_coach` bigint(20) DEFAULT NULL,
  `manager_name` varchar(125) DEFAULT NULL,
  `coach_name` varchar(125) DEFAULT NULL,
  `job_title` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_position`
--

INSERT INTO `emp_position` (`id`, `id_department`, `id_person_manager`, `id_person_coach`, `manager_name`, `coach_name`, `job_title`) VALUES
(1, 2, 2, 2, 'winafy', 'winafy', '2D Artist'),
(2, 2, 2, 2, 'winafy', 'winafy', 'Photoshop designer'),
(3, 2, 2, 2, 'winafy', 'winafy', 'Toon boom animator');

-- --------------------------------------------------------

--
-- Table structure for table `emp_punishment`
--

CREATE TABLE `emp_punishment` (
  `id` bigint(20) NOT NULL,
  `id_employee` bigint(20) NOT NULL,
  `id_company_role` bigint(20) NOT NULL,
  `punishment_attach` varchar(125) NOT NULL,
  `punishment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `punishment_from_table` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `leave`
--

CREATE TABLE `leave` (
  `id` bigint(20) NOT NULL,
  `id_employee` bigint(20) NOT NULL,
  `id_leave_type` bigint(20) NOT NULL,
  `leave_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `leave_description` varchar(225) DEFAULT NULL,
  `leave_start_at` datetime NOT NULL,
  `leave_finish_at` datetime NOT NULL,
  `leave_duration` int(25) DEFAULT NULL,
  `leave_mode` varchar(125) DEFAULT NULL,
  `leave_manager_comment` varchar(225) DEFAULT NULL,
  `payslips_report` enum('1','0') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `leave_type`
--

CREATE TABLE `leave_type` (
  `id` bigint(20) NOT NULL,
  `type_name` varchar(125) NOT NULL,
  `type_meeting` enum('customer','internal','feedback','off-site') NOT NULL,
  `type_color_report` varchar(50) NOT NULL,
  `type_override_limit` enum('1','0') NOT NULL,
  `type_double_valid` enum('1','0') NOT NULL,
  `type_active` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_type`
--

INSERT INTO `leave_type` (`id`, `type_name`, `type_meeting`, `type_color_report`, `type_override_limit`, `type_double_valid`, `type_active`) VALUES
(1, 'ibu hamil', 'internal', '', '1', '1', '1'),
(2, 'Sidang gelar pendidikan', 'internal', '', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` bigint(20) NOT NULL,
  `id_to_emp` bigint(20) NOT NULL,
  `id_from_emp` bigint(20) NOT NULL,
  `msg_content` varchar(225) NOT NULL,
  `msg_boolean_star` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `presence`
--

CREATE TABLE `presence` (
  `id` bigint(20) NOT NULL,
  `id_employee` bigint(20) NOT NULL,
  `id_presence_due` bigint(20) DEFAULT NULL,
  `day` varchar(25) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `presence_info` enum('A','H','I','S','C') DEFAULT NULL,
  `presence_attach` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `presence_due`
--

CREATE TABLE `presence_due` (
  `id` bigint(20) NOT NULL,
  `due_label` varchar(125) NOT NULL,
  `time_duration` int(25) NOT NULL,
  `time_unit` enum('h','d','m','y') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `presence_due`
--

INSERT INTO `presence_due` (`id`, `due_label`, `time_duration`, `time_unit`) VALUES
(1, 'Sick', 3, 'd'),
(2, 'Create identifacation card', 6, 'h');

-- --------------------------------------------------------

--
-- Table structure for table `presence_log`
--

CREATE TABLE `presence_log` (
  `id` bigint(20) NOT NULL,
  `id_presence` bigint(20) DEFAULT NULL,
  `name` varchar(125) NOT NULL,
  `datetime` varchar(25) NOT NULL,
  `mode` enum('Break','In','Out','OT Out','Resume','Auto') NOT NULL,
  `verify_with` enum('Finger','Password') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) NOT NULL,
  `id_user_role` bigint(20) NOT NULL,
  `user_name` varchar(125) NOT NULL,
  `user_password` varchar(225) NOT NULL,
  `email` varchar(175) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `id_user_role`, `user_name`, `user_password`, `email`) VALUES
(1, 1, 'iwan', '7384abd23c2a53daf36e41ee9640860a42858f51', 'firmawaneiwan@gmail.com'),
(2, 1, 'findyafd', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'findychi27@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` bigint(20) NOT NULL,
  `role_name` varchar(125) NOT NULL,
  `role_function` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `working_manager`
--

CREATE TABLE `working_manager` (
  `id` bigint(20) NOT NULL,
  `id_access_right` bigint(20) NOT NULL,
  `manager_name` varchar(125) NOT NULL,
  `manager_email` varchar(125) NOT NULL,
  `manager_phone` varchar(15) NOT NULL,
  `manager_mobile` varchar(15) NOT NULL,
  `manager_fax` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `working_time`
--

CREATE TABLE `working_time` (
  `id` bigint(20) NOT NULL,
  `id_working_manager` bigint(20) NOT NULL,
  `working_name` varchar(125) NOT NULL,
  `working_manager` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `working_time_items`
--

CREATE TABLE `working_time_items` (
  `id` bigint(20) NOT NULL,
  `name` varchar(125) NOT NULL,
  `day_of_week` enum('senin','selasa','rabu','kamis','jum''at','sabtu') NOT NULL,
  `work_from` time NOT NULL,
  `work_to` time NOT NULL,
  `date_starting` date NOT NULL,
  `date_end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_employee` (`id_employee`),
  ADD KEY `id_company` (`id_company`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_role`
--
ALTER TABLE `company_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_company` (`id_company`);

--
-- Indexes for table `cp_format`
--
ALTER TABLE `cp_format`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cp_list`
--
ALTER TABLE `cp_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_contact_label` (`id_format`),
  ADD KEY `id_employee` (`id_employee`),
  ADD KEY `id_company` (`id_company`),
  ADD KEY `id_employee_2` (`id_employee`),
  ADD KEY `id_contact_label_2` (`id_format`),
  ADD KEY `id_employee_3` (`id_employee`),
  ADD KEY `id_company_2` (`id_company`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD KEY `period_id` (`id_period`),
  ADD KEY `emp_position_id` (`id_position`),
  ADD KEY `id_company` (`id_company`),
  ADD KEY `id_period` (`id_period`),
  ADD KEY `id_company_2` (`id_company`),
  ADD KEY `id_company_3` (`id_company`),
  ADD KEY `id_period_2` (`id_period`),
  ADD KEY `id_person` (`id_person`),
  ADD KEY `fk_second_comp` (`id_second_company`),
  ADD KEY `id_company_4` (`id_company`),
  ADD KEY `id_second_company` (`id_second_company`);

--
-- Indexes for table `emp_department`
--
ALTER TABLE `emp_department`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dept_manager_person_id` (`id_dept_manager`),
  ADD KEY `id_dept_parent` (`id_dept_parent`),
  ADD KEY `id_dept_manager` (`id_dept_manager`);

--
-- Indexes for table `emp_notes`
--
ALTER TABLE `emp_notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_id` (`id_employee`),
  ADD KEY `note_from_userid` (`id_by_user`),
  ADD KEY `id_employee` (`id_employee`),
  ADD KEY `id_by_user` (`id_by_user`);

--
-- Indexes for table `emp_period`
--
ALTER TABLE `emp_period`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_person_info`
--
ALTER TABLE `emp_person_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_position`
--
ALTER TABLE `emp_position`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_person_manager` (`id_person_manager`),
  ADD KEY `id_department` (`id_department`),
  ADD KEY `id_person_coach` (`id_person_coach`);

--
-- Indexes for table `emp_punishment`
--
ALTER TABLE `emp_punishment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_id` (`id_employee`,`id_company_role`),
  ADD KEY `company_role_id` (`id_company_role`);

--
-- Indexes for table `leave`
--
ALTER TABLE `leave`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_leave_type` (`id_leave_type`),
  ADD KEY `id_employee` (`id_employee`);

--
-- Indexes for table `leave_type`
--
ALTER TABLE `leave_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `presence`
--
ALTER TABLE `presence`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_employee` (`id_employee`),
  ADD KEY `id_presence_due` (`id_presence_due`);

--
-- Indexes for table `presence_due`
--
ALTER TABLE `presence_due`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `presence_log`
--
ALTER TABLE `presence_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_person` (`id_presence`),
  ADD KEY `id_presence` (`id_presence`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_type` (`id_user_role`),
  ADD KEY `id_user_role` (`id_user_role`),
  ADD KEY `id_user_role_2` (`id_user_role`),
  ADD KEY `id_user_role_3` (`id_user_role`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `working_manager`
--
ALTER TABLE `working_manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `working_time`
--
ALTER TABLE `working_time`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `working_time_items`
--
ALTER TABLE `working_time_items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `company_role`
--
ALTER TABLE `company_role`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cp_format`
--
ALTER TABLE `cp_format`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `cp_list`
--
ALTER TABLE `cp_list`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `emp_department`
--
ALTER TABLE `emp_department`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `emp_notes`
--
ALTER TABLE `emp_notes`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `emp_period`
--
ALTER TABLE `emp_period`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `emp_person_info`
--
ALTER TABLE `emp_person_info`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `emp_position`
--
ALTER TABLE `emp_position`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `emp_punishment`
--
ALTER TABLE `emp_punishment`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `leave`
--
ALTER TABLE `leave`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `leave_type`
--
ALTER TABLE `leave_type`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `presence`
--
ALTER TABLE `presence`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `presence_due`
--
ALTER TABLE `presence_due`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `presence_log`
--
ALTER TABLE `presence_log`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `working_manager`
--
ALTER TABLE `working_manager`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `working_time`
--
ALTER TABLE `working_time`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `working_time_items`
--
ALTER TABLE `working_time_items`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`id_employee`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `address_ibfk_2` FOREIGN KEY (`id_company`) REFERENCES `company` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `company_role`
--
ALTER TABLE `company_role`
  ADD CONSTRAINT `company_role_ibfk_1` FOREIGN KEY (`id_company`) REFERENCES `company` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cp_list`
--
ALTER TABLE `cp_list`
  ADD CONSTRAINT `cp_list_ibfk_1` FOREIGN KEY (`id_format`) REFERENCES `cp_format` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cp_list_ibfk_2` FOREIGN KEY (`id_employee`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`id_position`) REFERENCES `emp_position` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employee_ibfk_2` FOREIGN KEY (`id_person`) REFERENCES `emp_person_info` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employee_ibfk_3` FOREIGN KEY (`id_period`) REFERENCES `emp_period` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employee_ibfk_4` FOREIGN KEY (`id_company`) REFERENCES `company` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employee_ibfk_5` FOREIGN KEY (`id_second_company`) REFERENCES `company` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `emp_department`
--
ALTER TABLE `emp_department`
  ADD CONSTRAINT `emp_department_ibfk_1` FOREIGN KEY (`id_dept_manager`) REFERENCES `emp_person_info` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `emp_department_ibfk_2` FOREIGN KEY (`id_dept_parent`) REFERENCES `emp_department` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `emp_notes`
--
ALTER TABLE `emp_notes`
  ADD CONSTRAINT `emp_notes_ibfk_1` FOREIGN KEY (`id_employee`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `emp_position`
--
ALTER TABLE `emp_position`
  ADD CONSTRAINT `emp_position_ibfk_1` FOREIGN KEY (`id_department`) REFERENCES `emp_department` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `emp_position_ibfk_2` FOREIGN KEY (`id_person_manager`) REFERENCES `emp_person_info` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `emp_position_ibfk_3` FOREIGN KEY (`id_person_coach`) REFERENCES `emp_person_info` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `emp_punishment`
--
ALTER TABLE `emp_punishment`
  ADD CONSTRAINT `emp_punishment_ibfk_1` FOREIGN KEY (`id_employee`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `emp_punishment_ibfk_2` FOREIGN KEY (`id_company_role`) REFERENCES `company_role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `leave`
--
ALTER TABLE `leave`
  ADD CONSTRAINT `leave_ibfk_1` FOREIGN KEY (`id_employee`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `leave_ibfk_2` FOREIGN KEY (`id_leave_type`) REFERENCES `leave_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `presence`
--
ALTER TABLE `presence`
  ADD CONSTRAINT `presence_ibfk_1` FOREIGN KEY (`id_presence_due`) REFERENCES `presence_due` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `presence_ibfk_2` FOREIGN KEY (`id_employee`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `presence_log`
--
ALTER TABLE `presence_log`
  ADD CONSTRAINT `presence_log_ibfk_1` FOREIGN KEY (`id_presence`) REFERENCES `presence` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
