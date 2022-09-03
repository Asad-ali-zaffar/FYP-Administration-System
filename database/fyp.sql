-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2022 at 09:46 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fyp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `admin_email`, `admin_description`, `admin_password`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Faheem Abbass', 'faheem@kfueit.edu.pk', 'hod of It', 'bb88907f66a950b1cce95059c4d45b52', '1650442888.png', '2022-04-17 01:12:08', '2022-04-20 03:21:28');

-- --------------------------------------------------------

--
-- Table structure for table `allocate_teacher`
--

CREATE TABLE `allocate_teacher` (
  `allocate_teacher_id` bigint(20) UNSIGNED NOT NULL,
  `id` bigint(20) UNSIGNED NOT NULL,
  `std_id` bigint(20) UNSIGNED NOT NULL,
  `allocate_teacher_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `allocate_teacher`
--

INSERT INTO `allocate_teacher` (`allocate_teacher_id`, `id`, `std_id`, `allocate_teacher_status`, `created_at`, `updated_at`) VALUES
(1, 1, 15, '1', '2022-05-29 09:10:34', '2022-05-29 09:40:15'),
(2, 4, 8, '1', '2022-05-29 16:52:37', '2022-05-29 16:52:37'),
(5, 1, 1, '1', '2022-05-30 15:01:09', '2022-05-30 15:01:09'),
(6, 8, 2, '1', '2022-05-30 15:01:33', '2022-05-30 15:01:33');

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `announcement` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `announcement`, `created_at`, `updated_at`) VALUES
(1, 'sjaska', '2022-05-29 06:20:42', '2022-05-29 06:20:42'),
(2, 'dfsfd', '2022-05-29 06:22:33', '2022-05-29 06:22:33'),
(3, 'sub kan pharloo', '2022-05-29 06:23:33', '2022-05-29 06:23:33'),
(4, 'banday ban jaoo sub', '2022-05-29 06:37:51', '2022-05-29 06:37:51'),
(5, 'kam kar loo&nbsp;', '2022-05-29 06:42:03', '2022-05-29 06:42:03'),
(6, 'hamza khoti day ya', '2022-05-29 07:07:32', '2022-05-29 07:07:32'),
(7, 'sub nay kar li', '2022-05-29 07:23:56', '2022-05-29 07:23:56'),
(8, 'This is a test annoucement', '2022-05-29 23:52:21', '2022-05-29 23:52:21'),
(9, '<p>tody us the last date to sub,ite yr. final proposal</p><p><br></p><p><br></p>', '2022-05-30 01:09:40', '2022-05-30 01:09:40'),
(10, 'wiuhs gfu wiuhs gfu wiuhs gfu wiuhs gfu wiuhs gfu wiuhs gfu wiuhs gfu wiuhs gfu wiuhs gfu wiuhs gfu wiuhs gfu wiuhs gfu wiuhs gfu wiuhs gfu wiuhs gfu wiuhs gfu wiuhs gfu wiuhs gfu wiuhs gfu wiuhs gfu wiuhs gfu wiuhs gfu wiuhs gfu wiuhs gfu wiuhs gfu wiuhs gfu wiuhs gfu wiuhs gfu wiuhs gfu wiuhs gfu wiuhs gfu wiuhs gfu wiuhs gfu wiuhs gfu wiuhs gfu wiuhs gfu wiuhs gfu wiuhs gfu wiuhs gfu wiuhs gfu wiuhs gfu wiuhs gfu wiuhs gfu wiuhs gfu wiuhs gfu wiuhs gfu wiuhs gfu wiuhs gfu wiuhs gfu&nbsp;', '2022-05-30 01:10:37', '2022-05-30 01:10:37'),
(11, '<p>j jsadk jsdkasd&nbsp; ksjdk kasjbdljsad&nbsp; lkjsdfiu ,sdjfnliu;k df ubdfn ,msdifu lkjdfo a;ldnfi sldkfoisdf lkldsfn lkdofisdm fldspf sldkfn&nbsp;</p><p>j jsadk jsdkasd&nbsp; ksjdk kasjbdljsad&nbsp; lkjsdfiu ,sdjfnliu;k df ubdfn ,msdifu lkjdfo a;ldnfi sldkfoisdf lkldsfn lkdofisdm fldspf sldkfn</p><p>j jsadk jsdkasd&nbsp; ksjdk kasjbdljsad&nbsp; lkjsdfiu ,sdjfnliu;k df ubdfn ,msdifu lkjdfo a;ldnfi sldkfoisdf lkldsfn lkdofisdm fldspf sldkfn&nbsp;</p><p>j jsadk jsdkasd&nbsp; ksjdk kasjbdljsad&nbsp; lkjsdfiu ,sdjfnliu;k df ubdfn ,msdifu lkjdfo a;ldnfi sldkfoisdf lkldsfn lkdofisdm fldspf sldkfn<span style=\"font-size: 0.875rem;\">j jsadk jsdkasd&nbsp; ksjdk kasjbdljsad&nbsp; lkjsdfiu ,sdjfnliu;k df ubdfn ,msdifu lkjdfo a;ldnfi sldkfoisdf lkldsfn lkdofisdm fldspf sldkfn&nbsp;</span></p><p>j jsadk jsdkasd&nbsp; ksjdk kasjbdljsad&nbsp; lkjsdfiu ,sdjfnliu;k df ubdfn ,msdifu lkjdfo a;ldnfi sldkfoisdf lkldsfn lkdofisdm fldspf sldkfn</p>', '2022-05-31 19:18:44', '2022-05-31 19:18:44'),
(12, 'jsdk askdjk sadskk askjdolsd lksdlkasl jsdk askdjk sadskk askjdolsd lksdlkasljsdk askdjk sadskk askjdolsd lksdlkasljsdk askdjk sadskk askjdolsd lksdlkasljsdk askdjk sadskk askjdolsd lksdlkasljsdk askdjk sadskk askjdolsd lksdlkasljsdk askdjk sadskk askjdolsd lksdlkasljsdk askdjk sadskk askjdolsd lksdlkasljsdk askdjk sadskk askjdolsd lksdlkasljsdk askdjk sadskk askjdolsd lksdlkasljsdk askdjk sadskk askjdolsd lksdlkasljsdk askdjk sadskk askjdolsd lksdlkasljsdk askdjk sadskk askjdolsd lksdlkasl', '2022-05-31 19:22:15', '2022-05-31 19:22:15'),
(13, 'jskd aksdjk sajkdksd jsadjk skdjkasd ,sld skjnjk sdjsad jskd aksdjk sajkdksd jsadjk skdjkasd ,sld skjnjk sdjsadjskd aksdjk sajkdksd jsadjk skdjkasd ,sld skjnjk sdjsadjskd aksdjk sajkdksd jsadjk skdjkasd ,sld skjnjk sdjsadjskd aksdjk sajkdksd jsadjk skdjkasd ,sld skjnjk sdjsadjskd aksdjk sajkdksd jsadjk skdjkasd ,sld skjnjk sdjsadjskd aksdjk sajkdksd jsadjk skdjkasd ,sld skjnjk sdjsadjskd aksdjk sajkdksd jsadjk skdjkasd ,sld skjnjk sdjsad', '2022-05-31 19:30:26', '2022-05-31 19:30:26'),
(14, 'kame kar loo sub', '2022-06-05 09:18:03', '2022-06-05 09:18:03'),
(15, '<span class=\"ILfuVd\">A job proposal is <b>a document created by a job seeker then sent to a company if he\'s applying for a job which isn\'t advertised as vacant</b>. Often, job seekers would only apply for a certain position when they know that there\'s a vacancy in the company.</span><span class=\"ILfuVd\">A job proposal is <b>a document created by a job seeker then sent to a company if he\'s applying for a job which isn\'t advertised as vacant</b>. Often, job seekers would only apply for a certain position when they know that there\'s a vacancy in the company.</span><span class=\"ILfuVd\">A job proposal is <b>a document created by a job seeker then sent to a company if he\'s applying for a job which isn\'t advertised as vacant</b>. Often, job seekers would only apply for a certain position when they know that there\'s a vacancy in the company.</span>', '2022-06-05 10:45:30', '2022-06-05 10:45:30'),
(16, 'yesterday there is a final presentation&nbsp;', '2022-06-22 08:08:14', '2022-06-22 08:08:14');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Messages` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `FromUser` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ToUser` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Roll` int(11) NOT NULL,
  `message_status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `Messages`, `FromUser`, `ToUser`, `Roll`, `message_status`, `created_at`, `updated_at`) VALUES
(12, 'helo usama', '4', '8', 2, 1, '2022-05-30 12:50:07', '2022-05-30 12:50:07'),
(13, 'g sir', '8', '4', 2, 1, '2022-05-30 12:50:39', '2022-05-30 12:50:39'),
(14, 'helo sir', '4', '1', 1, 1, '2022-05-30 12:51:48', '2022-05-30 12:51:48'),
(15, 'g sir', '1', '4', 1, 0, '2022-05-30 12:52:14', '2022-05-30 12:52:14'),
(16, 'usama supervisor', '4', '1', 1, 0, '2022-05-30 13:13:43', '2022-05-30 13:13:43'),
(17, 'usama supervisor', '4', '1', 1, 0, '2022-05-30 13:13:46', '2022-05-30 13:13:46'),
(18, 'admin', '1', '4', 1, 0, '2022-05-30 13:14:19', '2022-05-30 13:14:19'),
(19, 'helo asad', '4', '1', 2, 1, '2022-05-30 13:14:54', '2022-05-30 13:14:54'),
(20, 'or suna', '4', '1', 2, 0, '2022-05-30 13:15:54', '2022-05-30 13:15:54'),
(21, 'hamza', '4', '8', 2, 0, '2022-05-30 13:17:45', '2022-05-30 13:17:45'),
(22, 'helo', '1', '1', 1, 0, '2022-05-30 14:59:28', '2022-05-30 14:59:28'),
(23, 'helo\r\nhsssj', '4', '1', 1, 0, '2022-05-31 19:15:48', '2022-05-31 19:15:48'),
(24, 'hello sir', '20', '13', 2, NULL, '2022-06-22 08:03:35', '2022-06-22 08:03:35'),
(25, 'yes', '13', '20', 2, NULL, '2022-06-22 08:04:21', '2022-06-22 08:04:21'),
(26, 'helo sir', '15', '13', 2, NULL, '2022-06-22 10:16:47', '2022-06-22 10:16:47');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` bigint(20) UNSIGNED NOT NULL,
  `dep_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dept_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dep_name`, `dept_status`, `created_at`, `updated_at`) VALUES
(1, 'Information Technology', '1', '2022-04-17 01:43:12', '2022-06-07 09:19:15'),
(2, 'Computer Science', '1', '2022-04-17 01:53:14', '2022-06-07 09:19:30'),
(3, 'Human Sciences', '1', '2022-06-22 08:07:20', '2022-06-22 08:07:20');

-- --------------------------------------------------------

--
-- Table structure for table `fyp_committee`
--

CREATE TABLE `fyp_committee` (
  `com_id` bigint(20) UNSIGNED NOT NULL,
  `com_member_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `com_member_desigination` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `com_datails` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dept_id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` bigint(20) UNSIGNED NOT NULL,
  `com_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fyp_parposals`
--

CREATE TABLE `fyp_parposals` (
  `parposals_id` bigint(20) UNSIGNED NOT NULL,
  `senderId` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiverId` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_titleOR_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_member` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fyp_parposals`
--

INSERT INTO `fyp_parposals` (`parposals_id`, `senderId`, `receiverId`, `description`, `project_titleOR_id`, `team_member`, `status`, `created_at`, `updated_at`) VALUES
(107, '11', '8', 'car rantal system car rantal system car rantal system car rantal system car rantal system car rantal system car rantal system car rantal system car rantal system car rantal system car rantal system car rantal system car rantal system car rantal system car rantal system car rantal system car rantal system car rantal system car rantal system car rantal system car rantal system car rantal system car rantal system car rantal system car rantal system car rantal system car rantal system car rantal system car rantal system car rantal system car rantal system car rantal system car rantal system car rantal system car rantal system car rantal system car rantal system car rantal system car rantal system car rantal system car rantal system car rantal system car rantal system car rantal system car rantal system&nbsp;', 'car rantal system', '12', 0, '2022-06-05 02:03:40', '2022-06-05 02:03:40'),
(109, '1', '8', 'tee cup', 'tee cup', '11,15', 0, '2022-06-05 06:03:11', '2022-06-05 06:03:11'),
(110, '17', '8', 'Need some work', 'No', '17,17', 0, '2022-06-05 10:44:25', '2022-06-05 10:45:00'),
(112, '18', '13', '<p><span><br></span></p><p>                                   <span><em>Hotel Management</em></span><span><em>Hotel Management</em></span><span><em>Hotel Management</em></span><span><em>Hotel Management</em></span></p><p>                                   <span><em>Hotel Management</em></span><span><em>Hotel Management</em></span><span><em>Hotel Management</em></span><span><em>Hotel Management</em></span></p><p>                                   <span><em>Hotel Management</em></span><span><em>Hotel Management</em></span><span><em>Hotel Management</em></span><span><em>Hotel Management</em></span></p><p>                                   <span><em>Hotel Management</em></span><span><em>Hotel Management</em></span><span><em>Hotel Management</em></span><span><em>Hotel Management</em></span></p><p>                                   <span><em>Hotel Management</em></span><span><em>Hotel Management</em></span><span><em>Hotel Management</em></span><span><em>Hotel Management</em></span></p><p><span><em><br></em></span></p><p><span><em><br></em></span></p><p><span><em><br></em></span></p><p><span><em><br></em></span></p><p><span><br></span></p>', 'Hotel Management', '15', 0, '2022-06-07 09:29:48', '2022-06-07 09:29:48'),
(113, '19', '13', '<p>New website New website New website New website New website New website New website New webs</p>', 'FYP', '8', 0, '2022-06-08 04:26:13', '2022-06-08 04:26:13'),
(115, '20', '13', '<p>kwjeuwb sdjh weu&nbsp; y kwjeuwb sdjh weu&nbsp; y kwjeuwb sdjh weu&nbsp; y <br><br><br><br></p>', 'Banking System', '15', 0, '2022-06-22 07:59:04', '2022-06-22 07:59:04');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_03_14_065300_create_department_table', 1),
(3, '2022_03_14_072726_create_program_table', 1),
(4, '2022_03_14_144938_create_session_table', 1),
(5, '2022_03_14_150439_create_student_table', 1),
(6, '2022_03_15_022809_create_admin_table', 1),
(7, '2022_03_16_062415_create_teacher_table', 1),
(8, '2022_03_16_065421_create_fyp_committee_table', 1),
(9, '2022_03_16_073422_create_allocate_teacher_table', 1),
(12, '2022_03_17_074717_create_shedule_meetings_table', 1),
(13, '2022_04_23_082219_users', 2),
(14, '2022_04_23_102043_password_resets', 3),
(16, '2022_05_15_131811_create_fyp_parposals_table', 4),
(18, '2022_05_16_121608_create_notifications_table', 5),
(21, '2022_03_16_074236_create_project_table', 7),
(22, '2022_03_16_074501_create_project_detail_table', 7),
(23, '2022_05_21_132110_create_set_tasks_table', 8),
(24, '2022_05_29_062818_create_announcements_table', 9),
(25, '2022_05_30_044202_chat', 10);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('0020eeca-f9ab-481c-b65d-427b3eb3de43', 'App\\Notifications\\givestudentLoginaccess', 'App\\Models\\Teacher', 4, '{\"heading\":\"Allow login access\",\"message\":\"ALi\",\"setTaskId\":\"inft18111034@kfueit.edu.pk\",\"senderid\":17,\"url\":\"getaccess\"}', NULL, '2022-06-05 10:39:42', '2022-06-05 10:39:42'),
('01ced535-80c8-4e98-98ba-21987198cbbc', 'App\\Notifications\\givestudentLoginaccess', 'App\\Models\\Teacher', 13, '{\"heading\":\"Allow login access\",\"message\":\"Saim Ali\",\"setTaskId\":\"inft18111011@kfueit.edu.pk\",\"senderid\":20,\"url\":\"getaccess\"}', '2022-06-22 07:54:21', '2022-06-22 07:20:56', '2022-06-22 07:54:21'),
('072ed108-20a5-4877-b0f0-f76059574226', 'App\\Notifications\\givestudentLoginaccess', 'App\\Models\\Teacher', 8, '{\"heading\":\"Allow login access\",\"message\":\"Ali Hassan\",\"setTaskId\":\"inft18111423@kfueit.edu.pk\",\"senderid\":19,\"url\":\"getaccess\"}', '2022-06-22 07:21:54', '2022-06-08 04:15:02', '2022-06-22 07:21:54'),
('124d2bd4-5ebf-4490-a8c0-e492305077a4', 'App\\Notifications\\SendRequstNotification', 'App\\Models\\Student_model', 15, '{\"heading\":\"Banking System\",\"message\":\"Uncompleted Proposal send again !!!\",\"senderid\":13,\"setTaskId\":\"114\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/all_Proposal_notification\"}', NULL, '2022-06-22 07:58:10', '2022-06-22 07:58:10'),
('1b171b7b-0bde-4b82-a390-32d8ce5ade2e', 'App\\Notifications\\givestudentLoginaccess', 'App\\Models\\Teacher', 1, '{\"heading\":\"Allow login access\",\"message\":\"Ali Hassan\",\"setTaskId\":\"inft18111423@kfueit.edu.pk\",\"senderid\":19,\"url\":\"getaccess\"}', NULL, '2022-06-08 04:15:02', '2022-06-08 04:15:02'),
('2186ed01-8be4-4598-b94f-6b980c495e13', 'App\\Notifications\\SendShaduleNotification', 'App\\Models\\Student_model', 20, '{\"heading\":\"Banking System\",\"message\":\"New task assigned to you!!!\",\"senderid\":13,\"setTaskId\":62,\"url\":\"http:\\/\\/127.0.0.1:8000\\/all_task_notification\"}', '2022-06-22 08:01:41', '2022-06-22 08:01:26', '2022-06-22 08:01:41'),
('309c309a-6c58-431a-9a43-e56da22cdc3f', 'App\\Notifications\\AnnouncementByAdmin', 'App\\Models\\Teacher', 10, '{\"heading\":\"New Announcement For Supervisers\",\"message\":\"Sending by Department head\",\"setTaskId\":\"<span class=\\\"ILfuVd\\\">A job proposal is <b>a document created by a job seeker then sent to a company if he\'s applying for a job which isn\'t advertised as vacant<\\/b>. Often, job seekers would only apply for a certain position when they know that there\'s a vacancy in the company.<\\/span><span class=\\\"ILfuVd\\\">A job proposal is <b>a document created by a job seeker then sent to a company if he\'s applying for a job which isn\'t advertised as vacant<\\/b>. Often, job seekers would only apply for a certain position when they know that there\'s a vacancy in the company.<\\/span><span class=\\\"ILfuVd\\\">A job proposal is <b>a document created by a job seeker then sent to a company if he\'s applying for a job which isn\'t advertised as vacant<\\/b>. Often, job seekers would only apply for a certain position when they know that there\'s a vacancy in the company.<\\/span>\",\"senderid\":\"309c309a-6c58-431a-9a43-e56da22cdc3f\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/adminannocement_teacher\"}', NULL, '2022-06-05 10:45:30', '2022-06-05 10:45:30'),
('35094418-fffc-4006-9d93-26df7fbb65d4', 'App\\Notifications\\SendRequstNotification', 'App\\Models\\Student_model', 17, '{\"heading\":\"No\",\"message\":\"Uncompleted Proposal send again !!!\",\"senderid\":8,\"setTaskId\":\"110\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/all_Proposal_notification\"}', '2022-06-05 10:46:11', '2022-06-05 10:45:00', '2022-06-05 10:46:11'),
('3a47994f-41d1-4ec3-897f-1358a8bb8273', 'App\\Notifications\\AnnouncementByAdmin', 'App\\Models\\Student_model', 16, '{\"heading\":\"New Announcement For Students\",\"message\":\"Sending by Department head\",\"setTaskId\":\"<span class=\\\"ILfuVd\\\">A job proposal is <b>a document created by a job seeker then sent to a company if he\'s applying for a job which isn\'t advertised as vacant<\\/b>. Often, job seekers would only apply for a certain position when they know that there\'s a vacancy in the company.<\\/span><span class=\\\"ILfuVd\\\">A job proposal is <b>a document created by a job seeker then sent to a company if he\'s applying for a job which isn\'t advertised as vacant<\\/b>. Often, job seekers would only apply for a certain position when they know that there\'s a vacancy in the company.<\\/span><span class=\\\"ILfuVd\\\">A job proposal is <b>a document created by a job seeker then sent to a company if he\'s applying for a job which isn\'t advertised as vacant<\\/b>. Often, job seekers would only apply for a certain position when they know that there\'s a vacancy in the company.<\\/span>\",\"senderid\":\"3a47994f-41d1-4ec3-897f-1358a8bb8273\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/adminannocement_std\"}', NULL, '2022-06-05 10:45:30', '2022-06-05 10:45:30'),
('3ae10b4c-1295-4337-99e7-6c39112f5aa7', 'App\\Notifications\\AnnouncementByAdmin', 'App\\Models\\Student_model', 19, '{\"heading\":\"New Announcement For Students\",\"message\":\"Sending by Department head\",\"setTaskId\":\"yesterday there is a final presentation&nbsp;\",\"senderid\":\"3ae10b4c-1295-4337-99e7-6c39112f5aa7\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/adminannocement_std\"}', NULL, '2022-06-22 08:08:14', '2022-06-22 08:08:14'),
('3af455d6-acc0-4d8f-8574-5743cdb85242', 'App\\Notifications\\givestudentLoginaccess', 'App\\Models\\Teacher', 1, '{\"heading\":\"Allow login access\",\"message\":\"ALi\",\"setTaskId\":\"inft18111034@kfueit.edu.pk\",\"senderid\":17,\"url\":\"getaccess\"}', NULL, '2022-06-05 10:39:42', '2022-06-05 10:39:42'),
('3e379311-1ab2-4baa-a819-2d1adc028ce1', 'App\\Notifications\\SendShaduleNotification', 'App\\Models\\Teacher', 13, '{\"heading\":\"Banking System\",\"message\":\"Task on working notificaton!!!\",\"senderid\":20,\"setTaskId\":\"62\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/all_teacher_notification\"}', NULL, '2022-06-22 08:02:30', '2022-06-22 08:08:33'),
('3e3f11e0-730c-46e0-b56b-cff2e3669241', 'App\\Notifications\\SendShaduleNotification', 'App\\Models\\Student_model', 18, '{\"heading\":\"Hotel Management\",\"message\":\"Your Task is accsepted!!\",\"senderid\":13,\"setTaskId\":\"60\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/Task_accepted\"}', NULL, '2022-06-07 09:32:19', '2022-06-07 09:32:19'),
('3ef9139a-0fc7-4e7e-acfa-407bbd3a322e', 'App\\Notifications\\SendShaduleNotification', 'App\\Models\\Teacher', 13, '{\"heading\":\"Hotel Management System\",\"message\":\"New Fyp proposal!!!\",\"senderid\":[\"15\",\"18\"],\"setTaskId\":111,\"url\":\"http:\\/\\/127.0.0.1:8000\\/fyp_proposal\"}', NULL, '2022-06-07 09:28:15', '2022-06-07 09:28:31'),
('3f25a307-e725-4a2a-96bc-4700e3389432', 'App\\Notifications\\SendShaduleNotification', 'App\\Models\\Student_model', 19, '{\"heading\":\"FYP\",\"message\":\"your Proposal is accepted!!!\",\"senderid\":13,\"setTaskId\":113,\"url\":\"http:\\/\\/127.0.0.1:8000\\/accepted_Proposal\"}', '2022-06-22 09:17:48', '2022-06-08 04:29:11', '2022-06-22 09:17:48'),
('3fd82a64-7827-4d95-a10b-f0464be53812', 'App\\Notifications\\givestudentLoginaccess', 'App\\Models\\Teacher', 13, '{\"heading\":\"Allow login access\",\"message\":\"Ali Hassan\",\"setTaskId\":\"inft18111423@kfueit.edu.pk\",\"senderid\":19,\"url\":\"getaccess\"}', '2022-06-08 04:19:09', '2022-06-08 04:15:02', '2022-06-08 04:19:09'),
('4023f98a-464c-4e7c-834a-e2dfd3dc32a5', 'App\\Notifications\\AnnouncementByAdmin', 'App\\Models\\Student_model', 2, '{\"heading\":\"New Announcement For Students\",\"message\":\"Sending by Department head\",\"setTaskId\":\"<span class=\\\"ILfuVd\\\">A job proposal is <b>a document created by a job seeker then sent to a company if he\'s applying for a job which isn\'t advertised as vacant<\\/b>. Often, job seekers would only apply for a certain position when they know that there\'s a vacancy in the company.<\\/span><span class=\\\"ILfuVd\\\">A job proposal is <b>a document created by a job seeker then sent to a company if he\'s applying for a job which isn\'t advertised as vacant<\\/b>. Often, job seekers would only apply for a certain position when they know that there\'s a vacancy in the company.<\\/span><span class=\\\"ILfuVd\\\">A job proposal is <b>a document created by a job seeker then sent to a company if he\'s applying for a job which isn\'t advertised as vacant<\\/b>. Often, job seekers would only apply for a certain position when they know that there\'s a vacancy in the company.<\\/span>\",\"senderid\":\"4023f98a-464c-4e7c-834a-e2dfd3dc32a5\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/adminannocement_std\"}', NULL, '2022-06-05 10:45:30', '2022-06-05 10:45:30'),
('40b8d959-b213-4a9f-9aa0-27d5b96ee055', 'App\\Notifications\\AnnouncementByAdmin', 'App\\Models\\Student_model', 2, '{\"heading\":\"New Announcement For Students\",\"message\":\"Sending by Department head\",\"setTaskId\":\"yesterday there is a final presentation&nbsp;\",\"senderid\":\"40b8d959-b213-4a9f-9aa0-27d5b96ee055\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/adminannocement_std\"}', NULL, '2022-06-22 08:08:14', '2022-06-22 08:08:14'),
('479e2be2-f8ef-4a0b-93ff-8dc7e7e4f0e2', 'App\\Notifications\\AnnouncementByAdmin', 'App\\Models\\Student_model', 17, '{\"heading\":\"New Announcement For Students\",\"message\":\"Sending by Department head\",\"setTaskId\":\"yesterday there is a final presentation&nbsp;\",\"senderid\":\"479e2be2-f8ef-4a0b-93ff-8dc7e7e4f0e2\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/adminannocement_std\"}', NULL, '2022-06-22 08:08:14', '2022-06-22 08:08:14'),
('4d946999-28c3-457b-997b-a38e412f67ef', 'App\\Notifications\\SendShaduleNotification', 'App\\Models\\Teacher', 13, '{\"heading\":\"FYP\",\"message\":\"New Fyp proposal!!!\",\"senderid\":[\"8\",\"19\"],\"setTaskId\":113,\"url\":\"http:\\/\\/127.0.0.1:8000\\/fyp_proposal\"}', NULL, '2022-06-08 04:26:13', '2022-06-08 04:26:36'),
('50d4f213-cf2e-4dab-a276-1b471045b2b5', 'App\\Notifications\\AnnouncementByAdmin', 'App\\Models\\Teacher', 1, '{\"heading\":\"New Announcement For Supervisers\",\"message\":\"Sending by Department head\",\"setTaskId\":\"yesterday there is a final presentation&nbsp;\",\"senderid\":\"50d4f213-cf2e-4dab-a276-1b471045b2b5\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/adminannocement_teacher\"}', NULL, '2022-06-22 08:08:14', '2022-06-22 08:08:14'),
('5e07945b-a357-40e2-a2d8-e5c001a5e865', 'App\\Notifications\\AnnouncementByAdmin', 'App\\Models\\Student_model', 11, '{\"heading\":\"New Announcement For Students\",\"message\":\"Sending by Department head\",\"setTaskId\":\"<span class=\\\"ILfuVd\\\">A job proposal is <b>a document created by a job seeker then sent to a company if he\'s applying for a job which isn\'t advertised as vacant<\\/b>. Often, job seekers would only apply for a certain position when they know that there\'s a vacancy in the company.<\\/span><span class=\\\"ILfuVd\\\">A job proposal is <b>a document created by a job seeker then sent to a company if he\'s applying for a job which isn\'t advertised as vacant<\\/b>. Often, job seekers would only apply for a certain position when they know that there\'s a vacancy in the company.<\\/span><span class=\\\"ILfuVd\\\">A job proposal is <b>a document created by a job seeker then sent to a company if he\'s applying for a job which isn\'t advertised as vacant<\\/b>. Often, job seekers would only apply for a certain position when they know that there\'s a vacancy in the company.<\\/span>\",\"senderid\":\"5e07945b-a357-40e2-a2d8-e5c001a5e865\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/adminannocement_std\"}', NULL, '2022-06-05 10:45:30', '2022-06-05 10:45:30'),
('5f4dfade-be24-4d72-a589-9534a283bef8', 'App\\Notifications\\SendRequstNotification', 'App\\Models\\Student_model', 18, '{\"heading\":\"Hotel Management System\",\"message\":\"Uncompleted Proposal send again !!!\",\"senderid\":13,\"setTaskId\":\"111\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/all_Proposal_notification\"}', '2022-06-07 09:28:59', '2022-06-07 09:28:43', '2022-06-07 09:28:59'),
('60454edf-80db-4a22-ab9a-b4ca6d37f48a', 'App\\Notifications\\givestudentLoginaccess', 'App\\Models\\Teacher', 8, '{\"heading\":\"Allow login access\",\"message\":\"Ali Akbar\",\"setTaskId\":\"inft18111030@kfueit.edu.pk\",\"senderid\":18,\"url\":\"getaccess\"}', '2022-06-22 07:21:41', '2022-06-07 09:25:21', '2022-06-22 07:21:41'),
('6128592a-cfc9-42b0-8d9e-f125a3b9dba8', 'App\\Notifications\\AnnouncementByAdmin', 'App\\Models\\Student_model', 11, '{\"heading\":\"New Announcement For Students\",\"message\":\"Sending by Department head\",\"setTaskId\":\"yesterday there is a final presentation&nbsp;\",\"senderid\":\"6128592a-cfc9-42b0-8d9e-f125a3b9dba8\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/adminannocement_std\"}', NULL, '2022-06-22 08:08:14', '2022-06-22 08:08:14'),
('62421da1-f6eb-4dfe-8bd0-c397dc3d7dfb', 'App\\Notifications\\givestudentLoginaccess', 'App\\Models\\Teacher', 4, '{\"heading\":\"Allow login access\",\"message\":\"Saim Ali\",\"setTaskId\":\"inft18111011@kfueit.edu.pk\",\"senderid\":20,\"url\":\"getaccess\"}', NULL, '2022-06-22 07:20:56', '2022-06-22 07:20:56'),
('633eed15-b003-4aec-8be2-c73eb88999b0', 'App\\Notifications\\SendShaduleNotification', 'App\\Models\\Student_model', 8, '{\"heading\":\"FYP\",\"message\":\"your Proposal is accepted!!!\",\"senderid\":13,\"setTaskId\":113,\"url\":\"http:\\/\\/127.0.0.1:8000\\/accepted_Proposal\"}', NULL, '2022-06-08 04:29:11', '2022-06-08 04:29:11'),
('634b83fe-3477-4dad-b069-24fb2a3b0e96', 'App\\Notifications\\AnnouncementByAdmin', 'App\\Models\\Student_model', 20, '{\"heading\":\"New Announcement For Students\",\"message\":\"Sending by Department head\",\"setTaskId\":\"yesterday there is a final presentation&nbsp;\",\"senderid\":\"634b83fe-3477-4dad-b069-24fb2a3b0e96\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/adminannocement_std\"}', NULL, '2022-06-22 08:08:14', '2022-06-22 08:08:14'),
('6479b624-ba75-416a-ade3-be05dc7b2e22', 'App\\Notifications\\SendRequstNotification', 'App\\Models\\Student_model', 15, '{\"heading\":\"Hotel Management System\",\"message\":\"Uncompleted Proposal send again !!!\",\"senderid\":13,\"setTaskId\":\"111\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/all_Proposal_notification\"}', NULL, '2022-06-07 09:28:43', '2022-06-07 09:28:43'),
('66836765-cda5-485e-bee3-62fcf71c24de', 'App\\Notifications\\AnnouncementByAdmin', 'App\\Models\\Teacher', 12, '{\"heading\":\"New Announcement For Supervisers\",\"message\":\"Sending by Department head\",\"setTaskId\":\"<span class=\\\"ILfuVd\\\">A job proposal is <b>a document created by a job seeker then sent to a company if he\'s applying for a job which isn\'t advertised as vacant<\\/b>. Often, job seekers would only apply for a certain position when they know that there\'s a vacancy in the company.<\\/span><span class=\\\"ILfuVd\\\">A job proposal is <b>a document created by a job seeker then sent to a company if he\'s applying for a job which isn\'t advertised as vacant<\\/b>. Often, job seekers would only apply for a certain position when they know that there\'s a vacancy in the company.<\\/span><span class=\\\"ILfuVd\\\">A job proposal is <b>a document created by a job seeker then sent to a company if he\'s applying for a job which isn\'t advertised as vacant<\\/b>. Often, job seekers would only apply for a certain position when they know that there\'s a vacancy in the company.<\\/span>\",\"senderid\":\"66836765-cda5-485e-bee3-62fcf71c24de\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/adminannocement_teacher\"}', NULL, '2022-06-05 10:45:30', '2022-06-05 10:45:30'),
('6e36e38a-80d8-4fba-97be-cb7675e2ec61', 'App\\Notifications\\AnnouncementByAdmin', 'App\\Models\\Teacher', 12, '{\"heading\":\"New Announcement For Supervisers\",\"message\":\"Sending by Department head\",\"setTaskId\":\"yesterday there is a final presentation&nbsp;\",\"senderid\":\"6e36e38a-80d8-4fba-97be-cb7675e2ec61\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/adminannocement_teacher\"}', NULL, '2022-06-22 08:08:14', '2022-06-22 08:08:14'),
('704ca2d5-84a7-4d3c-9990-84c2bbe8fbf9', 'App\\Notifications\\AnnouncementByAdmin', 'App\\Models\\Student_model', 8, '{\"heading\":\"New Announcement For Students\",\"message\":\"Sending by Department head\",\"setTaskId\":\"<span class=\\\"ILfuVd\\\">A job proposal is <b>a document created by a job seeker then sent to a company if he\'s applying for a job which isn\'t advertised as vacant<\\/b>. Often, job seekers would only apply for a certain position when they know that there\'s a vacancy in the company.<\\/span><span class=\\\"ILfuVd\\\">A job proposal is <b>a document created by a job seeker then sent to a company if he\'s applying for a job which isn\'t advertised as vacant<\\/b>. Often, job seekers would only apply for a certain position when they know that there\'s a vacancy in the company.<\\/span><span class=\\\"ILfuVd\\\">A job proposal is <b>a document created by a job seeker then sent to a company if he\'s applying for a job which isn\'t advertised as vacant<\\/b>. Often, job seekers would only apply for a certain position when they know that there\'s a vacancy in the company.<\\/span>\",\"senderid\":\"704ca2d5-84a7-4d3c-9990-84c2bbe8fbf9\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/adminannocement_std\"}', NULL, '2022-06-05 10:45:30', '2022-06-05 10:45:30'),
('71c83a5c-dfbc-4e97-95bf-7b8d3634170f', 'App\\Notifications\\AnnouncementByAdmin', 'App\\Models\\Teacher', 1, '{\"heading\":\"New Announcement For Supervisers\",\"message\":\"Sending by Department head\",\"setTaskId\":\"<span class=\\\"ILfuVd\\\">A job proposal is <b>a document created by a job seeker then sent to a company if he\'s applying for a job which isn\'t advertised as vacant<\\/b>. Often, job seekers would only apply for a certain position when they know that there\'s a vacancy in the company.<\\/span><span class=\\\"ILfuVd\\\">A job proposal is <b>a document created by a job seeker then sent to a company if he\'s applying for a job which isn\'t advertised as vacant<\\/b>. Often, job seekers would only apply for a certain position when they know that there\'s a vacancy in the company.<\\/span><span class=\\\"ILfuVd\\\">A job proposal is <b>a document created by a job seeker then sent to a company if he\'s applying for a job which isn\'t advertised as vacant<\\/b>. Often, job seekers would only apply for a certain position when they know that there\'s a vacancy in the company.<\\/span>\",\"senderid\":\"71c83a5c-dfbc-4e97-95bf-7b8d3634170f\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/adminannocement_teacher\"}', NULL, '2022-06-05 10:45:30', '2022-06-05 10:45:30'),
('725a2514-31f9-4e82-932c-26c5512a577f', 'App\\Notifications\\SendRequstNotification', 'App\\Models\\Student_model', 20, '{\"heading\":\"Banking System\",\"message\":\"Uncompleted Proposal send again !!!\",\"senderid\":13,\"setTaskId\":\"114\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/all_Proposal_notification\"}', '2022-06-22 07:58:23', '2022-06-22 07:58:11', '2022-06-22 07:58:23'),
('75c4f88a-7cdc-40d6-848e-63156bb0038e', 'App\\Notifications\\AnnouncementByAdmin', 'App\\Models\\Teacher', 8, '{\"heading\":\"New Announcement For Supervisers\",\"message\":\"Sending by Department head\",\"setTaskId\":\"<span class=\\\"ILfuVd\\\">A job proposal is <b>a document created by a job seeker then sent to a company if he\'s applying for a job which isn\'t advertised as vacant<\\/b>. Often, job seekers would only apply for a certain position when they know that there\'s a vacancy in the company.<\\/span><span class=\\\"ILfuVd\\\">A job proposal is <b>a document created by a job seeker then sent to a company if he\'s applying for a job which isn\'t advertised as vacant<\\/b>. Often, job seekers would only apply for a certain position when they know that there\'s a vacancy in the company.<\\/span><span class=\\\"ILfuVd\\\">A job proposal is <b>a document created by a job seeker then sent to a company if he\'s applying for a job which isn\'t advertised as vacant<\\/b>. Often, job seekers would only apply for a certain position when they know that there\'s a vacancy in the company.<\\/span>\",\"senderid\":\"75c4f88a-7cdc-40d6-848e-63156bb0038e\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/adminannocement_teacher\"}', '2022-06-05 10:50:05', '2022-06-05 10:45:30', '2022-06-05 10:50:05'),
('7b4ac699-764b-4410-9fb2-7a7ca9342a6c', 'App\\Notifications\\SendShaduleNotification', 'App\\Models\\Student_model', 18, '{\"heading\":\"Hotel Management\",\"message\":\"New task assigned to you!!!\",\"senderid\":13,\"setTaskId\":60,\"url\":\"http:\\/\\/127.0.0.1:8000\\/all_task_notification\"}', '2022-06-07 09:31:14', '2022-06-07 09:30:47', '2022-06-07 09:31:14'),
('7d57c08f-f9eb-4336-b262-37e8cfad70ff', 'App\\Notifications\\SendShaduleNotification', 'App\\Models\\Student_model', 19, '{\"heading\":\"FYP\",\"message\":\"your Proposal is accepted!!!\",\"senderid\":13,\"setTaskId\":113,\"url\":\"http:\\/\\/127.0.0.1:8000\\/accepted_Proposal\"}', NULL, '2022-06-08 04:29:07', '2022-06-08 04:29:07'),
('7f1c7bc9-eec3-4cab-b3b4-fc5520b38688', 'App\\Notifications\\givestudentLoginaccess', 'App\\Models\\Teacher', 13, '{\"heading\":\"Allow login access\",\"message\":\"Ali Akbar\",\"setTaskId\":\"inft18111030@kfueit.edu.pk\",\"senderid\":18,\"url\":\"getaccess\"}', '2022-06-07 09:25:51', '2022-06-07 09:25:21', '2022-06-07 09:25:51'),
('86e03190-7d3c-4a06-b689-3071e516c090', 'App\\Notifications\\AnnouncementByAdmin', 'App\\Models\\Teacher', 4, '{\"heading\":\"New Announcement For Supervisers\",\"message\":\"Sending by Department head\",\"setTaskId\":\"<span class=\\\"ILfuVd\\\">A job proposal is <b>a document created by a job seeker then sent to a company if he\'s applying for a job which isn\'t advertised as vacant<\\/b>. Often, job seekers would only apply for a certain position when they know that there\'s a vacancy in the company.<\\/span><span class=\\\"ILfuVd\\\">A job proposal is <b>a document created by a job seeker then sent to a company if he\'s applying for a job which isn\'t advertised as vacant<\\/b>. Often, job seekers would only apply for a certain position when they know that there\'s a vacancy in the company.<\\/span><span class=\\\"ILfuVd\\\">A job proposal is <b>a document created by a job seeker then sent to a company if he\'s applying for a job which isn\'t advertised as vacant<\\/b>. Often, job seekers would only apply for a certain position when they know that there\'s a vacancy in the company.<\\/span>\",\"senderid\":\"86e03190-7d3c-4a06-b689-3071e516c090\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/adminannocement_teacher\"}', NULL, '2022-06-05 10:45:30', '2022-06-05 10:45:30'),
('8cbe240d-6335-4385-aea5-6595162ce68e', 'App\\Notifications\\SendShaduleNotification', 'App\\Models\\Teacher', 13, '{\"heading\":\"Banking System\",\"message\":\"New Fyp proposal!!!\",\"senderid\":[\"15\",\"20\"],\"setTaskId\":114,\"url\":\"http:\\/\\/127.0.0.1:8000\\/fyp_proposal\"}', '2022-06-22 07:57:52', '2022-06-22 07:57:31', '2022-06-22 07:57:52'),
('9c653373-3405-4c02-9712-c794b3910775', 'App\\Notifications\\SendShaduleNotification', 'App\\Models\\Student_model', 15, '{\"heading\":\"Banking System\",\"message\":\"your Proposal is accepted!!!\",\"senderid\":13,\"setTaskId\":115,\"url\":\"http:\\/\\/127.0.0.1:8000\\/accepted_Proposal\"}', NULL, '2022-06-22 07:59:45', '2022-06-22 07:59:45'),
('9ced38e0-0177-4a4a-9d5d-8ef82aaf21f2', 'App\\Notifications\\AnnouncementByAdmin', 'App\\Models\\Student_model', 1, '{\"heading\":\"New Announcement For Students\",\"message\":\"Sending by Department head\",\"setTaskId\":\"<span class=\\\"ILfuVd\\\">A job proposal is <b>a document created by a job seeker then sent to a company if he\'s applying for a job which isn\'t advertised as vacant<\\/b>. Often, job seekers would only apply for a certain position when they know that there\'s a vacancy in the company.<\\/span><span class=\\\"ILfuVd\\\">A job proposal is <b>a document created by a job seeker then sent to a company if he\'s applying for a job which isn\'t advertised as vacant<\\/b>. Often, job seekers would only apply for a certain position when they know that there\'s a vacancy in the company.<\\/span><span class=\\\"ILfuVd\\\">A job proposal is <b>a document created by a job seeker then sent to a company if he\'s applying for a job which isn\'t advertised as vacant<\\/b>. Often, job seekers would only apply for a certain position when they know that there\'s a vacancy in the company.<\\/span>\",\"senderid\":\"9ced38e0-0177-4a4a-9d5d-8ef82aaf21f2\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/adminannocement_std\"}', NULL, '2022-06-05 10:45:30', '2022-06-05 10:45:30'),
('aa1f78f9-e4ac-4f6e-bbd2-7caa3146a515', 'App\\Notifications\\givestudentLoginaccess', 'App\\Models\\Teacher', 10, '{\"heading\":\"Allow login access\",\"message\":\"Ali Akbar\",\"setTaskId\":\"inft18111030@kfueit.edu.pk\",\"senderid\":18,\"url\":\"getaccess\"}', NULL, '2022-06-07 09:25:21', '2022-06-07 09:25:21'),
('ab2a8824-8fb8-4a21-a7e4-aad8c713fb33', 'App\\Notifications\\AnnouncementByAdmin', 'App\\Models\\Teacher', 13, '{\"heading\":\"New Announcement For Supervisers\",\"message\":\"Sending by Department head\",\"setTaskId\":\"yesterday there is a final presentation&nbsp;\",\"senderid\":\"ab2a8824-8fb8-4a21-a7e4-aad8c713fb33\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/adminannocement_teacher\"}', NULL, '2022-06-22 08:08:14', '2022-06-22 08:08:14'),
('abbfbbac-6c17-4f11-a69d-2816bd2dd607', 'App\\Notifications\\givestudentLoginaccess', 'App\\Models\\Teacher', 10, '{\"heading\":\"Allow login access\",\"message\":\"Saim Ali\",\"setTaskId\":\"inft18111011@kfueit.edu.pk\",\"senderid\":20,\"url\":\"getaccess\"}', NULL, '2022-06-22 07:20:56', '2022-06-22 07:20:56'),
('b2eee02a-4b7c-4e35-84d5-e9aaefcfe73c', 'App\\Notifications\\AnnouncementByAdmin', 'App\\Models\\Student_model', 17, '{\"heading\":\"New Announcement For Students\",\"message\":\"Sending by Department head\",\"setTaskId\":\"<span class=\\\"ILfuVd\\\">A job proposal is <b>a document created by a job seeker then sent to a company if he\'s applying for a job which isn\'t advertised as vacant<\\/b>. Often, job seekers would only apply for a certain position when they know that there\'s a vacancy in the company.<\\/span><span class=\\\"ILfuVd\\\">A job proposal is <b>a document created by a job seeker then sent to a company if he\'s applying for a job which isn\'t advertised as vacant<\\/b>. Often, job seekers would only apply for a certain position when they know that there\'s a vacancy in the company.<\\/span><span class=\\\"ILfuVd\\\">A job proposal is <b>a document created by a job seeker then sent to a company if he\'s applying for a job which isn\'t advertised as vacant<\\/b>. Often, job seekers would only apply for a certain position when they know that there\'s a vacancy in the company.<\\/span>\",\"senderid\":\"b2eee02a-4b7c-4e35-84d5-e9aaefcfe73c\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/adminannocement_std\"}', '2022-06-05 10:47:03', '2022-06-05 10:45:30', '2022-06-05 10:47:03'),
('b377acf7-597e-4496-b9f5-cde295b5499e', 'App\\Notifications\\SendShaduleNotification', 'App\\Models\\Teacher', 13, '{\"heading\":\"Hotel Management\",\"message\":\"New Fyp proposal!!!\",\"senderid\":[\"15\",\"18\"],\"setTaskId\":112,\"url\":\"http:\\/\\/127.0.0.1:8000\\/fyp_proposal\"}', '2022-06-07 09:29:59', '2022-06-07 09:29:48', '2022-06-07 09:29:59'),
('bf523b00-d628-4c85-b8a1-ecf2984ec082', 'App\\Notifications\\givestudentLoginaccess', 'App\\Models\\Teacher', 12, '{\"heading\":\"Allow login access\",\"message\":\"Saim Ali\",\"setTaskId\":\"inft18111011@kfueit.edu.pk\",\"senderid\":20,\"url\":\"getaccess\"}', NULL, '2022-06-22 07:20:56', '2022-06-22 07:20:56'),
('c157b108-2f30-481f-94fe-738fb4eb2c9e', 'App\\Notifications\\SendShaduleNotification', 'App\\Models\\Teacher', 13, '{\"heading\":\"Banking System\",\"message\":\"Task on working notificaton!!!\",\"senderid\":20,\"setTaskId\":\"62\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/all_teacher_notification\"}', '2022-06-22 08:08:51', '2022-06-22 08:02:20', '2022-06-22 08:08:51'),
('c53e7027-afb8-41cb-afe6-41535a9faa96', 'App\\Notifications\\SendRequstNotification', 'App\\Models\\Student_model', 17, '{\"heading\":\"No\",\"message\":\"Uncompleted Proposal send again !!!\",\"senderid\":8,\"setTaskId\":\"110\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/all_Proposal_notification\"}', '2022-06-05 10:46:52', '2022-06-05 10:45:00', '2022-06-05 10:46:52'),
('c882cc18-c080-4ae1-9aa6-d23bd5dab631', 'App\\Notifications\\givestudentLoginaccess', 'App\\Models\\Teacher', 1, '{\"heading\":\"Allow login access\",\"message\":\"Ali Akbar\",\"setTaskId\":\"inft18111030@kfueit.edu.pk\",\"senderid\":18,\"url\":\"getaccess\"}', NULL, '2022-06-07 09:25:21', '2022-06-07 09:25:21'),
('ca5e2764-d4e3-437a-aab4-492928ceb49c', 'App\\Notifications\\SendShaduleNotification', 'App\\Models\\Teacher', 8, '{\"heading\":\"No\",\"message\":\"New Fyp proposal!!!\",\"senderid\":[\"17\",\"17\"],\"setTaskId\":110,\"url\":\"http:\\/\\/127.0.0.1:8000\\/fyp_proposal\"}', '2022-06-05 10:44:42', '2022-06-05 10:44:25', '2022-06-05 10:44:42'),
('cb974ca2-1f0d-4de6-982d-5356927113e7', 'App\\Notifications\\SendShaduleNotification', 'App\\Models\\Student_model', 15, '{\"heading\":\"Hotel Management\",\"message\":\"New task assigned to you!!!\",\"senderid\":13,\"setTaskId\":59,\"url\":\"http:\\/\\/127.0.0.1:8000\\/all_task_notification\"}', NULL, '2022-06-07 09:30:32', '2022-06-07 09:30:32'),
('cbc73f68-a861-42ca-9649-589915f0867c', 'App\\Notifications\\SendShaduleNotification', 'App\\Models\\Student_model', 20, '{\"heading\":\"Banking System\",\"message\":\"your Proposal is accepted!!!\",\"senderid\":13,\"setTaskId\":115,\"url\":\"http:\\/\\/127.0.0.1:8000\\/accepted_Proposal\"}', '2022-06-22 08:00:10', '2022-06-22 07:59:45', '2022-06-22 08:00:10'),
('cc9b7355-4a4b-4029-af85-d8dcbc17c87a', 'App\\Notifications\\givestudentLoginaccess', 'App\\Models\\Teacher', 12, '{\"heading\":\"Allow login access\",\"message\":\"Ali Hassan\",\"setTaskId\":\"inft18111423@kfueit.edu.pk\",\"senderid\":19,\"url\":\"getaccess\"}', NULL, '2022-06-08 04:15:02', '2022-06-08 04:15:02'),
('cd8b4d3d-d827-43e3-ae21-6b4dbee074a0', 'App\\Notifications\\AnnouncementByAdmin', 'App\\Models\\Student_model', 16, '{\"heading\":\"New Announcement For Students\",\"message\":\"Sending by Department head\",\"setTaskId\":\"yesterday there is a final presentation&nbsp;\",\"senderid\":\"cd8b4d3d-d827-43e3-ae21-6b4dbee074a0\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/adminannocement_std\"}', NULL, '2022-06-22 08:08:14', '2022-06-22 08:08:14'),
('d051260a-f0eb-4dc5-80c2-a6c680734aa7', 'App\\Notifications\\SendShaduleNotification', 'App\\Models\\Student_model', 18, '{\"heading\":\"Hotel Management\",\"message\":\"your Proposal is accepted!!!\",\"senderid\":13,\"setTaskId\":112,\"url\":\"http:\\/\\/127.0.0.1:8000\\/accepted_Proposal\"}', '2022-06-07 09:31:06', '2022-06-07 09:30:04', '2022-06-07 09:31:06'),
('d11d3019-7dd2-4b38-a9a9-45ca8ad5fd14', 'App\\Notifications\\givestudentLoginaccess', 'App\\Models\\Teacher', 8, '{\"heading\":\"Allow login access\",\"message\":\"ALi\",\"setTaskId\":\"inft18111034@kfueit.edu.pk\",\"senderid\":17,\"url\":\"getaccess\"}', '2022-06-05 10:40:03', '2022-06-05 10:39:42', '2022-06-05 10:40:03'),
('d358f85d-5915-4238-89fb-c9b7c675e152', 'App\\Notifications\\SendShaduleNotification', 'App\\Models\\Student_model', 15, '{\"heading\":\"Hotel Management\",\"message\":\"New task assigned to you!!!\",\"senderid\":13,\"setTaskId\":63,\"url\":\"http:\\/\\/127.0.0.1:8000\\/all_task_notification\"}', '2022-06-22 10:05:01', '2022-06-22 10:03:49', '2022-06-22 10:05:01'),
('d49bf19d-6791-4d78-b65f-adfa79ab8c26', 'App\\Notifications\\SendShaduleNotification', 'App\\Models\\Student_model', 15, '{\"heading\":\"Hotel Management\",\"message\":\"your Proposal is accepted!!!\",\"senderid\":13,\"setTaskId\":112,\"url\":\"http:\\/\\/127.0.0.1:8000\\/accepted_Proposal\"}', NULL, '2022-06-07 09:30:04', '2022-06-07 09:30:04'),
('d5d55223-7351-4676-9444-2222fca42cfd', 'App\\Notifications\\SendShaduleNotification', 'App\\Models\\Student_model', 8, '{\"heading\":\"FYP\",\"message\":\"your Proposal is accepted!!!\",\"senderid\":13,\"setTaskId\":113,\"url\":\"http:\\/\\/127.0.0.1:8000\\/accepted_Proposal\"}', NULL, '2022-06-08 04:29:07', '2022-06-08 04:29:07'),
('d66b34b1-c874-4b7a-a566-87a17c5a11fa', 'App\\Notifications\\SendShaduleNotification', 'App\\Models\\Student_model', 20, '{\"heading\":\"Banking System\",\"message\":\"your Proposal is accepted!!!\",\"senderid\":13,\"setTaskId\":115,\"url\":\"http:\\/\\/127.0.0.1:8000\\/accepted_Proposal\"}', '2022-06-22 08:00:20', '2022-06-22 07:59:38', '2022-06-22 08:00:20'),
('d69cb4bf-3721-44e9-9b12-e81ade98fd44', 'App\\Notifications\\givestudentLoginaccess', 'App\\Models\\Teacher', 8, '{\"heading\":\"Allow login access\",\"message\":\"Saim Ali\",\"setTaskId\":\"inft18111011@kfueit.edu.pk\",\"senderid\":20,\"url\":\"getaccess\"}', '2022-06-22 07:21:47', '2022-06-22 07:20:56', '2022-06-22 07:21:47'),
('d885c753-92bc-4504-9772-a386a4de9edb', 'App\\Notifications\\givestudentLoginaccess', 'App\\Models\\Teacher', 10, '{\"heading\":\"Allow login access\",\"message\":\"Ali Hassan\",\"setTaskId\":\"inft18111423@kfueit.edu.pk\",\"senderid\":19,\"url\":\"getaccess\"}', NULL, '2022-06-08 04:15:02', '2022-06-08 04:15:02'),
('d8a219f5-32bc-4022-b5c6-029eadd46cc4', 'App\\Notifications\\AnnouncementByAdmin', 'App\\Models\\Teacher', 8, '{\"heading\":\"New Announcement For Supervisers\",\"message\":\"Sending by Department head\",\"setTaskId\":\"yesterday there is a final presentation&nbsp;\",\"senderid\":\"d8a219f5-32bc-4022-b5c6-029eadd46cc4\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/adminannocement_teacher\"}', NULL, '2022-06-22 08:08:14', '2022-06-22 08:08:14'),
('dc4e2355-a276-4a1b-b047-0c79cd1daae3', 'App\\Notifications\\SendShaduleNotification', 'App\\Models\\Teacher', 13, '{\"heading\":\"Banking System\",\"message\":\"New Fyp proposal!!!\",\"senderid\":[\"15\",\"20\"],\"setTaskId\":115,\"url\":\"http:\\/\\/127.0.0.1:8000\\/fyp_proposal\"}', '2022-06-22 07:59:32', '2022-06-22 07:59:04', '2022-06-22 07:59:32'),
('dc8688b7-f40b-44e8-b9ef-ead9e2cb5323', 'App\\Notifications\\givestudentLoginaccess', 'App\\Models\\Teacher', 4, '{\"heading\":\"Allow login access\",\"message\":\"Ali Akbar\",\"setTaskId\":\"inft18111030@kfueit.edu.pk\",\"senderid\":18,\"url\":\"getaccess\"}', NULL, '2022-06-07 09:25:21', '2022-06-07 09:25:21'),
('dd5b11ae-e40d-49e0-9dfa-edcc33f3b7dc', 'App\\Notifications\\SendShaduleNotification', 'App\\Models\\Student_model', 15, '{\"heading\":\"Banking System\",\"message\":\"your Proposal is accepted!!!\",\"senderid\":13,\"setTaskId\":115,\"url\":\"http:\\/\\/127.0.0.1:8000\\/accepted_Proposal\"}', NULL, '2022-06-22 07:59:38', '2022-06-22 07:59:38'),
('df7503b8-f643-4b16-9528-24d99435a0ca', 'App\\Notifications\\AnnouncementByAdmin', 'App\\Models\\Student_model', 8, '{\"heading\":\"New Announcement For Students\",\"message\":\"Sending by Department head\",\"setTaskId\":\"yesterday there is a final presentation&nbsp;\",\"senderid\":\"df7503b8-f643-4b16-9528-24d99435a0ca\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/adminannocement_std\"}', NULL, '2022-06-22 08:08:14', '2022-06-22 08:08:14'),
('e0774cf5-3903-4bd1-a71e-6e4b12c45e98', 'App\\Notifications\\givestudentLoginaccess', 'App\\Models\\Teacher', 4, '{\"heading\":\"Allow login access\",\"message\":\"Ali Hassan\",\"setTaskId\":\"inft18111423@kfueit.edu.pk\",\"senderid\":19,\"url\":\"getaccess\"}', NULL, '2022-06-08 04:15:02', '2022-06-08 04:15:02'),
('e2bac712-04d3-469b-825c-0dcba076f36e', 'App\\Notifications\\givestudentLoginaccess', 'App\\Models\\Teacher', 1, '{\"heading\":\"Allow login access\",\"message\":\"Saim Ali\",\"setTaskId\":\"inft18111011@kfueit.edu.pk\",\"senderid\":20,\"url\":\"getaccess\"}', NULL, '2022-06-22 07:20:56', '2022-06-22 07:20:56'),
('e44fd78f-e01e-4f0f-89aa-2b166b370d42', 'App\\Notifications\\AnnouncementByAdmin', 'App\\Models\\Teacher', 4, '{\"heading\":\"New Announcement For Supervisers\",\"message\":\"Sending by Department head\",\"setTaskId\":\"yesterday there is a final presentation&nbsp;\",\"senderid\":\"e44fd78f-e01e-4f0f-89aa-2b166b370d42\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/adminannocement_teacher\"}', NULL, '2022-06-22 08:08:14', '2022-06-22 08:08:14'),
('e614177a-2d12-49e6-941a-bbd975994360', 'App\\Notifications\\AnnouncementByAdmin', 'App\\Models\\Student_model', 15, '{\"heading\":\"New Announcement For Students\",\"message\":\"Sending by Department head\",\"setTaskId\":\"<span class=\\\"ILfuVd\\\">A job proposal is <b>a document created by a job seeker then sent to a company if he\'s applying for a job which isn\'t advertised as vacant<\\/b>. Often, job seekers would only apply for a certain position when they know that there\'s a vacancy in the company.<\\/span><span class=\\\"ILfuVd\\\">A job proposal is <b>a document created by a job seeker then sent to a company if he\'s applying for a job which isn\'t advertised as vacant<\\/b>. Often, job seekers would only apply for a certain position when they know that there\'s a vacancy in the company.<\\/span><span class=\\\"ILfuVd\\\">A job proposal is <b>a document created by a job seeker then sent to a company if he\'s applying for a job which isn\'t advertised as vacant<\\/b>. Often, job seekers would only apply for a certain position when they know that there\'s a vacancy in the company.<\\/span>\",\"senderid\":\"e614177a-2d12-49e6-941a-bbd975994360\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/adminannocement_std\"}', NULL, '2022-06-05 10:45:30', '2022-06-05 10:45:30'),
('ee3fa819-53f1-4c65-b2c4-6a0dbf02cc24', 'App\\Notifications\\givestudentLoginaccess', 'App\\Models\\Teacher', 12, '{\"heading\":\"Allow login access\",\"message\":\"ALi\",\"setTaskId\":\"inft18111034@kfueit.edu.pk\",\"senderid\":17,\"url\":\"getaccess\"}', NULL, '2022-06-05 10:39:42', '2022-06-05 10:39:42'),
('eea09814-bb5d-48bb-b689-cdd6e480abf3', 'App\\Notifications\\givestudentLoginaccess', 'App\\Models\\Teacher', 10, '{\"heading\":\"Allow login access\",\"message\":\"ALi\",\"setTaskId\":\"inft18111034@kfueit.edu.pk\",\"senderid\":17,\"url\":\"getaccess\"}', NULL, '2022-06-05 10:39:42', '2022-06-05 10:39:42'),
('ef901859-37f7-42a7-80af-4d42b1a0e1d9', 'App\\Notifications\\AnnouncementByAdmin', 'App\\Models\\Student_model', 18, '{\"heading\":\"New Announcement For Students\",\"message\":\"Sending by Department head\",\"setTaskId\":\"yesterday there is a final presentation&nbsp;\",\"senderid\":\"ef901859-37f7-42a7-80af-4d42b1a0e1d9\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/adminannocement_std\"}', NULL, '2022-06-22 08:08:14', '2022-06-22 08:08:14'),
('f059ec53-b950-4f79-ada1-d1e3a48ad044', 'App\\Notifications\\GiveSuperviserLoginAccessByAdmin', 'App\\Models\\Admin', 1, '{\"heading\":\"Allow login access\",\"name\":\"Mr Mateen Ahmed Abbasi\",\"email\":\"mateenahmedabbasi@kfueit.edu.pk\",\"id\":13,\"url\":\"login_access\"}', '2022-06-07 09:15:35', '2022-06-07 09:13:27', '2022-06-07 09:15:35'),
('f07b52a8-993d-4b94-8237-d34c2b78bffe', 'App\\Notifications\\AnnouncementByAdmin', 'App\\Models\\Student_model', 15, '{\"heading\":\"New Announcement For Students\",\"message\":\"Sending by Department head\",\"setTaskId\":\"yesterday there is a final presentation&nbsp;\",\"senderid\":\"f07b52a8-993d-4b94-8237-d34c2b78bffe\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/adminannocement_std\"}', NULL, '2022-06-22 08:08:14', '2022-06-22 08:08:14'),
('f37c64c2-4038-41ca-8cd3-8c8259a4f74c', 'App\\Notifications\\givestudentLoginaccess', 'App\\Models\\Teacher', 12, '{\"heading\":\"Allow login access\",\"message\":\"Ali Akbar\",\"setTaskId\":\"inft18111030@kfueit.edu.pk\",\"senderid\":18,\"url\":\"getaccess\"}', NULL, '2022-06-07 09:25:21', '2022-06-07 09:25:21'),
('f9576094-bd8b-45d4-9efc-fbdc876f1d2b', 'App\\Notifications\\AnnouncementByAdmin', 'App\\Models\\Teacher', 10, '{\"heading\":\"New Announcement For Supervisers\",\"message\":\"Sending by Department head\",\"setTaskId\":\"yesterday there is a final presentation&nbsp;\",\"senderid\":\"f9576094-bd8b-45d4-9efc-fbdc876f1d2b\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/adminannocement_teacher\"}', NULL, '2022-06-22 08:08:14', '2022-06-22 08:08:14'),
('fa105928-8d78-4ef0-86cd-0f7361a42074', 'App\\Notifications\\SendShaduleNotification', 'App\\Models\\Student_model', 15, '{\"heading\":\"Hotel Management\",\"message\":\"New task assigned to you!!!\",\"senderid\":13,\"setTaskId\":59,\"url\":\"http:\\/\\/127.0.0.1:8000\\/all_task_notification\"}', '2022-06-22 09:53:56', '2022-06-08 04:28:27', '2022-06-22 09:53:56'),
('fb637e48-bb59-4640-854a-a75913f659e8', 'App\\Notifications\\AnnouncementByAdmin', 'App\\Models\\Student_model', 1, '{\"heading\":\"New Announcement For Students\",\"message\":\"Sending by Department head\",\"setTaskId\":\"yesterday there is a final presentation&nbsp;\",\"senderid\":\"fb637e48-bb59-4640-854a-a75913f659e8\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/adminannocement_std\"}', NULL, '2022-06-22 08:08:14', '2022-06-22 08:08:14');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('Ahmmad@gmail.com', 'oq57kgYi5aMp3bpAMjcvvz0wTq8XHjaYFHT3XvurDvyIqbe2HyckEUOVWfQv', '2022-04-23 06:23:13'),
('Ahmmad@gmail.com', 'o2pF1FqjherPiZcGoSLN9RrkHt8iqcpoVBun8eT677UQml6fqQOIqX8S3v1E', '2022-04-23 06:27:35'),
('Ahmmad@gmail.com', 'EXBHilWFpGYWUPAifuBz8GAVGdG0M8YOjRYwnQUo2ce99rbVbAdmepAnbA47', '2022-04-23 06:27:49'),
('Ahmmad@gmail.com', 'ovsAV3RStya334muXBDgjcPkWtfGFsgB8q9KAKO5aZDKwFEhiaNIf2mjwa1r', '2022-04-23 06:29:08'),
('Ahmmad@gmail.com', 'bbjTF4ac8B0EBYgepDdPrhXteTsOFQzdgJDM0CDVKtqFK9LHhjsSZ5IgEs4c', '2022-04-23 06:31:22'),
('Ahmmad@gmail.com', 'dp1hIU0vBfGiYvv1PrfOWmM883BCmQtRlwpB8Ct0vBG4h091N8RYHjJ7Bdzp', '2022-04-23 06:31:40'),
('Ahmmad@gmail.com', 'x3NTbtNDxv2twhpNxN1uA6nqhDjLRwiyILejKbxzhT5CObJNg2gOWcVrOPEx', '2022-04-23 06:32:04'),
('Ahmmad@gmail.com', '7rzkfflaXphqBaxFhanvuE2JKsXNVEVbV1b8yu8PHnHxRJ0gh5HbO5XvwHD5', '2022-04-23 06:34:45'),
('Ahmmad@gmail.com', 'GkdT1LAIxCQfh1ljACatcJreL85eCWvfuoFQV3SQiMXdM91mlyk6s2V9R9lE', '2022-04-23 06:42:17'),
('Ahmmad@gmail.com', 'SLftTQB71ujq7tzYDbsPGdrbERfwLbYqHEpEbBSMEQwV05zQB2VrYsL97VWO', '2022-04-23 06:44:44'),
('Ahmmad@gmail.com', 'l6myMX8tDeQym5LUzNWDU6A2EAgHs7YoGuBMv7juCAe2FCVWjBQMFVZxELKx', '2022-04-23 06:46:00'),
('Ahmmad@gmail.com', 'FoZyiezPgamwa7163GC3jyHyKplrWNluVGKgoQ7hmRRIrwzUKB9vgbwLcTyy', '2022-04-23 06:47:44'),
('Ahmmad@gmail.com', 'B46tamIjsKq6ZkRemMS29fG9IosWm5ndf1UBjtR0VCdQOR1oTYEZ9q3aimKl', '2022-04-23 06:50:17'),
('Ahmmad@gmail.com', 'FoEkRzhdzIhxwneNYvB05AWHFM778Bc3f1bYwVcdNV4QAWMZFnu3UvfhOM8G', '2022-04-23 06:57:11'),
('contactwithasad786@gmail.com', 'PDjW5oRPQBHaypfnoDKO8vtt6Ww69BuzQ0zrVLbDUwevpnInQbvgee2WI239', '2022-05-15 02:13:12'),
('contactwithasad786@gmail.com', 'mtlJ9fJ3OkfhMeCpoWYt25rttX3ZEZlmPwvMTuhFzbqtOpkpNKALNTEAVr4h', '2022-05-15 02:14:28'),
('contactwithasad786@gmail.com', 'vqtQc0saIOo3cNIXKSAsq5KmI84m8rXetsajLyAOARQDKaVLcn6T5YuB602B', '2022-05-15 02:14:39'),
('contactwithasad786@gmail.com', 'L65zkjnsWbLJHhZ374tCng7dobKyJM3UDKQVRDee1SZivIUEV96OT2jJaloU', '2022-05-15 02:14:49'),
('contactwithasad786@gmail.com', 'CkRonvWkeMGV36bnK0xUsgBh1t7Xsm5csFyw1hhGpkvFnoTp3q86Ejg24DM0', '2022-05-15 02:19:05'),
('contactwithasad786@gmail.com', 'ncXie0iu7inUmJ29DSVzjNfYc6GZ1bGpkqUIEBup63Fp7ZLTPlOHINDgb1HV', '2022-05-15 02:21:28'),
('contactwithasad786@gmail.com', 'YJWaNVx3shxYstpmMXp8EpRd5rOeOo8pa6Ll8c7xan21NNDfWHhM2K3OBYIO', '2022-05-15 02:35:40'),
('contactwithasad786@gmail.com', 'mx3zkgipeVkESfhUQoDEa4qzztKm6U2GHxFsl2gzVCRTvuKyQ9r5jKm5XRdq', '2022-05-15 02:37:28'),
('contactwithasad786@gmail.com', 'wTvFCBEjU7Hhem5YcdXWEZ7CW8hEmdzBfyK3WFPtw4RLQfIJbXV8C3neXGwO', '2022-05-15 02:37:52'),
('contactwithasad786@gmail.com', 'fDNGmklPGWJabjkTSkcbb5bDoheohEMhIeWirJtG7pKutT9A7feDc9JhTqrL', '2022-05-15 02:38:30'),
('contactwithasad786@gmail.com', 'ESQI20xXA2dzTUvqe8lMVduj6C5DhxUeqizW32sgdh8F4ScHWisVlo37G9dP', '2022-05-15 02:39:27'),
('contactwithasad786@gmail.com', 'CaBIa3Xn8ZzubQwqMqdbZReyuxJc0Or1rOnrWpqxYMif47Zg47IGFsNccgDd', '2022-05-15 02:41:53'),
('contactwithasad786@gmail.com', 'dWPWxk4lx9CpOcb4HeJSoglFeVOabh8CDTP41g41Lssuz77aBEsaTvzWWQU5', '2022-05-15 02:44:46'),
('contactwithasad786@gmail.com', 'PyAua11WxDrS4LKAKAWGrZd7m5PU6Qd0EfiZOJTS6tObUPLA7cKUAxWkua4y', '2022-05-15 02:45:42'),
('contactwithasad786@gmail.com', 'bluCXJTaVMK19uGmlCKumIkwsRbNV8OrtGypxUaChH4miR5OJOS1PtPGmWIn', '2022-05-15 02:46:09'),
('contactwithasad786@gmail.com', 'fUHY0rYu5ccIEWJv2ezmp47VhuWt8wpsJ988dS0DTH1L13XJkiB92i42dyDA', '2022-05-15 02:50:26'),
('contactwithasad786@gmail.com', 'PXuBUQhMELVLqDLzCPB57slrTKE12c5mGFjstl2WFk9Cn4Ot6IfHTB4dHhp0', '2022-05-15 02:51:32'),
('contactwithasad786@gmail.com', 'XfCxqFmxUoYlMklnCkp7sShx6wq8c8u3aWgxtzBsf6aTKZ3OdH5vlgYO077S', '2022-05-15 03:06:19'),
('contactwithasad786@gmail.com', 'mWGE8hyhkp4nL6gkzmaDvMFgj9M0opBxNoeZvqlQN4He640K7XEaDlDNlgYY', '2022-05-15 03:13:56'),
('contactwithasad786@gmail.com', 'NiPfcF6KP4te1xRAqlkZ410aKtK0GXjD68oXeW5ge8g8sXKbh9dJBTt7gdUU', '2022-05-15 03:15:41'),
('contactwithasad786@gmail.com', 'gLSXGy6e1qflJajGPRK2DRvRDkdCNlFj5noeLnR7fIr2a0At5XAAwyveYTFc', '2022-05-15 03:16:44'),
('contactwithasad786@gmail.com', 'V7pPhHnRRktgRG8X6ghzmRBUx8WSFbRZ6apwYYSAvEOpYsA9Y4wc3DV89SiW', '2022-05-15 03:32:35'),
('contactwithasad786@gmail.com', 'rjdTlm0hE831QLxqm9VeM7WcXf5owAbEskKDd3ZYAjex8kWhdILkGLptNM4N', '2022-05-15 03:34:23'),
('contactwithasad786@gmail.com', 'INAAIE7X4UD2tTfmgGoJvEibegAA7cd2jhJxiylC9UWLYkXJm03W20Wrisyn', '2022-05-15 03:38:15'),
('adii786@kfueit.edu.pk', 'onP6vaAYhrxtvW6lxbLSJi6kX40XjiiZRTCYMu9xhkwfAeIK3QOvlqbEpV1Z', '2022-05-21 09:52:51'),
('inft18111019@kfueit.edu.pk', 'IvllQ9A5Nu4wstHxZ7M1Xnx5yrmkXygcUAGHiUwAqu70kgY8tkRTs8cXoWUE', '2022-06-08 02:14:38');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `prog_id` bigint(20) UNSIGNED NOT NULL,
  `prog_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prog_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dept_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`prog_id`, `prog_name`, `prog_status`, `dept_id`, `created_at`, `updated_at`) VALUES
(1, 'BSIT', '1', 1, '2022-04-17 01:53:43', '2022-06-07 09:20:04'),
(2, 'BScs', '1', 2, '2022-05-31 10:06:16', '2022-05-31 10:06:16'),
(3, 'BS Zology', '1', 3, '2022-06-22 08:07:43', '2022-06-22 08:07:43');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `proj_id` bigint(20) UNSIGNED NOT NULL,
  `proj_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` bigint(20) UNSIGNED NOT NULL,
  `superviser_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`proj_id`, `proj_name`, `id`, `superviser_id`, `created_at`, `updated_at`) VALUES
(1, 'Travling And Turisam', 11, 8, '2022-05-23 05:54:14', '2022-05-23 06:56:32'),
(2, 'Fyp Management System', 8, 7, '2022-05-24 01:13:14', '2022-05-24 01:13:14'),
(3, 'Freelacing', 11, 10, '2022-05-28 14:29:06', '2022-05-28 14:29:06'),
(10, 'Online Learning', 2, 4, '2022-05-29 19:15:02', '2022-05-29 19:15:02'),
(25, 'Car Rantal System', 1, 8, '2022-06-05 02:34:37', '2022-06-05 02:34:37'),
(26, 'Car Rantal System', 2, 8, '2022-06-05 02:34:37', '2022-06-05 02:34:37'),
(27, 'Car Rantal System', 11, 8, '2022-06-05 02:34:38', '2022-06-05 02:34:38'),
(28, 'Hotel Management', 15, 13, '2022-06-07 09:30:04', '2022-06-07 09:30:04'),
(29, 'Hotel Management', 18, 13, '2022-06-07 09:30:04', '2022-06-07 09:30:04'),
(30, 'FYP', 8, 13, '2022-06-08 04:29:07', '2022-06-08 04:29:07'),
(31, 'FYP', 19, 13, '2022-06-08 04:29:07', '2022-06-08 04:29:07'),
(32, 'FYP', 8, 13, '2022-06-08 04:29:11', '2022-06-08 04:29:11'),
(33, 'FYP', 19, 13, '2022-06-08 04:29:11', '2022-06-08 04:29:11'),
(34, 'Banking System', 15, 13, '2022-06-22 07:59:37', '2022-06-22 07:59:37'),
(35, 'Banking System', 20, 13, '2022-06-22 07:59:38', '2022-06-22 07:59:38'),
(36, 'Banking System', 15, 13, '2022-06-22 07:59:44', '2022-06-22 07:59:44'),
(37, 'Banking System', 20, 13, '2022-06-22 07:59:45', '2022-06-22 07:59:45');

-- --------------------------------------------------------

--
-- Table structure for table `project_detail`
--

CREATE TABLE `project_detail` (
  `project_detail_id` bigint(20) UNSIGNED NOT NULL,
  `proj_id` bigint(20) UNSIGNED NOT NULL,
  `proj_idea` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `existing_system` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abstract` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_detail`
--

INSERT INTO `project_detail` (`project_detail_id`, `proj_id`, `proj_idea`, `existing_system`, `abstract`, `created_at`, `updated_at`) VALUES
(1, 3, 'feelacing', 'yess', 'dsdjds', '2022-05-29 14:02:41', '2022-05-29 14:02:41'),
(2, 2, 'mayra nahi tha', 'no', 'sjksk jdksjdksd kdsj sjksk jdksjdksd kdsj sjksk jdksjdksd kdsjsjksk jdksjdksd kdsjsjksk jdksjdksd kdsjsjksk jdksjdksd kdsjsjksk jdksjdksd kdsjsjksk jdksjdksd kdsj sjksk jdksjdksd kdsj sjksk jdksjdksd kdsjsjksk jdksjdksd kdsjsjksk jdksjdksd kdsjsjksk jdksjdksd kdsjsjksk jdksjdksd kdsj', '2022-05-31 08:09:22', '2022-05-31 08:09:22');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `ses_id` bigint(20) UNSIGNED NOT NULL,
  `ses_Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `ses_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`ses_id`, `ses_Name`, `start_date`, `end_date`, `ses_status`, `created_at`, `updated_at`) VALUES
(1, 'Bs Morning', '2022-05-30', '2026-05-31', '1', '2022-04-17 01:52:53', '2022-05-29 23:37:02'),
(2, 'Bs Evening', '2022-05-30', '2026-05-30', '1', '2022-05-29 23:26:34', '2022-05-29 23:28:27');

-- --------------------------------------------------------

--
-- Table structure for table `set_tasks`
--

CREATE TABLE `set_tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('unopen','working','done') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unopen',
  `proj_id` bigint(20) UNSIGNED NOT NULL,
  `createBy` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `set_tasks`
--

INSERT INTO `set_tasks` (`id`, `title`, `description`, `status`, `proj_id`, `createBy`, `created_at`, `updated_at`) VALUES
(58, '1st week', 'uncomplet task ok sir', 'done', 27, 8, '2022-06-05 07:15:35', '2022-06-05 08:18:23'),
(60, '2nd week', '<p><br></p><p>                                   <span><em>Hotel Management</em></span><span><em>Hotel Management</em></span><span><em>Hotel Management</em></span><span><em>Hotel Management</em></span></p><br><p><span><em><br></em></span></p><p><br></p>', 'done', 29, 13, '2022-06-07 09:30:47', '2022-06-07 09:32:19'),
(61, '1st week', 'Header abna', 'unopen', 28, 13, '2022-06-08 04:28:27', '2022-06-08 04:28:27'),
(62, '1st week', 'done work<br>', 'working', 37, 13, '2022-06-22 08:01:26', '2022-06-22 08:30:06'),
(63, '4th week', 'add header', 'working', 28, 13, '2022-06-22 10:03:48', '2022-06-22 10:09:35');

-- --------------------------------------------------------

--
-- Table structure for table `shedule_meetings`
--

CREATE TABLE `shedule_meetings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `std_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dept_id` bigint(20) UNSIGNED NOT NULL,
  `std_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `std_reg_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `std_phone_num` bigint(20) NOT NULL,
  `std_semster_no` bigint(20) NOT NULL,
  `prog_id` bigint(20) UNSIGNED NOT NULL,
  `std_session_id` bigint(20) UNSIGNED NOT NULL,
  `std_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `std_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `std_name`, `dept_id`, `std_address`, `std_reg_no`, `email`, `std_phone_num`, `std_semster_no`, `prog_id`, `std_session_id`, `std_password`, `std_status`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Asad', 2, 'jskdjdksd cksd', 'inft18111017', 'contactwithasad226@kfueit.edu.pk', 3176887787, 8, 1, 1, 'd41d8cd98f00b204e9800998ecf8427e', '1', '', '2022-04-17 01:54:53', '2022-06-29 06:28:42'),
(2, 'Ahmad', 1, 'uii32ndn', 'inft18111015', 'ahmad@kfueit.edu.pk', 3176887785, 8, 1, 1, 'd9dac597eb6add6fbecdf93d32c4c3a4', '1', '1652967817.jpg', '2022-05-19 08:43:37', '2022-05-19 08:43:37'),
(8, 'Hamza rr', 2, 'ejkejkwe', 'inft18111018', 'Aaghas787@kfueit.edu.pk', 3176887789, 8, 1, 1, 'd9dac597eb6add6fbecdf93d32c4c3a4', '1', '1652975425.jpg', '2022-05-19 10:50:25', '2022-05-27 07:39:37'),
(11, 'Ali Akbar', 1, 'jksjd jdksd', 'inft18111016', 'Aliakbar786@kfueit.edu.pk', 3176887786, 8, 1, 1, 'd9dac597eb6add6fbecdf93d32c4c3a4', '1', '1653033455.png', '2022-05-20 02:57:35', '2022-05-28 13:50:45'),
(15, 'M Hamza', 1, 'RYK', 'inft18111019', 'inft18111019@kfueit.edu.pk', 3176887782, 8, 1, 1, 'd9dac597eb6add6fbecdf93d32c4c3a4', '1', '1653887014.jpg', '2022-05-30 00:03:34', '2022-05-30 00:05:17'),
(16, 'Nabeel Ahmad', 2, 'Ryk', 'inft18111020', 'NabeelAhmad@kfueit.edu.pk', 3063856698, 8, 2, 2, 'd9dac597eb6add6fbecdf93d32c4c3a4', '1', '1654437662.png', '2022-06-05 09:01:02', '2022-06-05 09:13:00'),
(17, 'ALi', 1, 'SDK', 'inft18111034', 'inft18111034@kfueit.edu.pk', 5456723546, 7, 1, 2, '0473d1f7b9901333616419a7ef389301', '1', '1654443580.png', '2022-06-05 10:39:40', '2022-06-05 10:40:15'),
(18, 'Ali Akbar', 1, 'RYK', 'inft18111030', 'inft18111030@kfueit.edu.pk', 2345423456, 8, 1, 1, '0473d1f7b9901333616419a7ef389301', '1', '1654611921.jpeg', '2022-06-07 09:25:21', '2022-06-07 09:25:55'),
(19, 'Ali Hassan', 1, 'RYK', 'inft18111423', 'inft18111423@kfueit.edu.pk', 3651353564, 8, 1, 1, 'd9dac597eb6add6fbecdf93d32c4c3a4', '1', '1652975425.jpg', '2022-06-08 04:15:02', '2022-06-08 04:19:31'),
(20, 'Saim Ali', 1, 'SDK', 'inft18111011', 'inft18111011@kfueit.edu.pk', 4536175634, 8, 1, 1, '0473d1f7b9901333616419a7ef389301', '1', '1655900453.png', '2022-06-22 07:20:53', '2022-06-22 07:54:25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teacher`
--

CREATE TABLE `tbl_teacher` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teacher_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dept_id` bigint(20) UNSIGNED NOT NULL,
  `teacher_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_teacher`
--

INSERT INTO `tbl_teacher` (`id`, `teacher_name`, `teacher_email`, `dept_id`, `teacher_status`, `image`, `teacher_password`, `created_at`, `updated_at`) VALUES
(1, 'Ahmmad Raza', 'contactwithasad786@kfueit.edu.pk', 1, '1', '', 'd41d8cd98f00b204e9800998ecf8427e', '2022-04-17 01:45:20', '2022-06-29 06:26:30'),
(4, 'Usama', 'usama@kfueit.edu.pk', 2, '1', '1653026462.jpg', 'd9dac597eb6add6fbecdf93d32c4c3a4', '2022-05-20 01:01:02', '2022-05-20 01:01:02'),
(8, 'Mateen', 'inft18111059@kfueit.edu.pk', 1, '1', '1653462273.jpg', 'd9dac597eb6add6fbecdf93d32c4c3a4', '2022-05-25 02:04:33', '2022-05-25 02:04:33'),
(10, 'abdul majeed', 'contactwithasad786@kfueit.edu.pk', 2, '1', '1650194603.png', 'd9dac597eb6add6fbecdf93d32c4c3a4', '2022-04-17 01:45:20', '2022-04-30 02:08:44'),
(12, 'Abdul Muiz', 'Abdulmuiz@kfueit.edu.pk', 1, '1', '1654436340.png', 'd9dac597eb6add6fbecdf93d32c4c3a4', '2022-06-05 08:39:00', '2022-06-05 08:39:47'),
(13, 'Mr Mateen Ahmed Abbasi', 'mateenahmedabbasi@kfueit.edu.pk', 1, '1', '1654436340.png', 'd9dac597eb6add6fbecdf93d32c4c3a4', '2022-06-07 09:13:27', '2022-06-07 09:15:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allocate_teacher`
--
ALTER TABLE `allocate_teacher`
  ADD PRIMARY KEY (`allocate_teacher_id`),
  ADD KEY `allocate_teacher_teacher_id_foreign` (`id`),
  ADD KEY `allocate_teacher_std_id_foreign` (`std_id`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `fyp_committee`
--
ALTER TABLE `fyp_committee`
  ADD PRIMARY KEY (`com_id`),
  ADD KEY `fyp_committee_dept_id_foreign` (`dept_id`),
  ADD KEY `fyp_committee_teacher_id_foreign` (`teacher_id`);

--
-- Indexes for table `fyp_parposals`
--
ALTER TABLE `fyp_parposals`
  ADD PRIMARY KEY (`parposals_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`prog_id`),
  ADD KEY `program_dept_id_foreign` (`dept_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`proj_id`),
  ADD KEY `project_std_id_foreign` (`id`);

--
-- Indexes for table `project_detail`
--
ALTER TABLE `project_detail`
  ADD PRIMARY KEY (`project_detail_id`),
  ADD KEY `project_detail_proj_id_foreign` (`proj_id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`ses_id`);

--
-- Indexes for table `set_tasks`
--
ALTER TABLE `set_tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `set_tasks_projact_id_foreign` (`proj_id`);

--
-- Indexes for table `shedule_meetings`
--
ALTER TABLE `shedule_meetings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_std_reg_no_unique` (`std_reg_no`),
  ADD UNIQUE KEY `student_email_unique` (`email`),
  ADD UNIQUE KEY `student_std_phone_num_unique` (`std_phone_num`),
  ADD KEY `student_dept_id_foreign` (`dept_id`),
  ADD KEY `student_prog_id_foreign` (`prog_id`),
  ADD KEY `student_std_session_id_foreign` (`std_session_id`);

--
-- Indexes for table `tbl_teacher`
--
ALTER TABLE `tbl_teacher`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_teacher_dept_id_foreign` (`dept_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `allocate_teacher`
--
ALTER TABLE `allocate_teacher`
  MODIFY `allocate_teacher_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dept_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fyp_committee`
--
ALTER TABLE `fyp_committee`
  MODIFY `com_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fyp_parposals`
--
ALTER TABLE `fyp_parposals`
  MODIFY `parposals_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `prog_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `proj_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `project_detail`
--
ALTER TABLE `project_detail`
  MODIFY `project_detail_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `ses_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `set_tasks`
--
ALTER TABLE `set_tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `shedule_meetings`
--
ALTER TABLE `shedule_meetings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_teacher`
--
ALTER TABLE `tbl_teacher`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `allocate_teacher`
--
ALTER TABLE `allocate_teacher`
  ADD CONSTRAINT `allocate_teacher_std_id_foreign` FOREIGN KEY (`std_id`) REFERENCES `student` (`id`),
  ADD CONSTRAINT `allocate_teacher_teacher_id_foreign` FOREIGN KEY (`id`) REFERENCES `tbl_teacher` (`id`);

--
-- Constraints for table `fyp_committee`
--
ALTER TABLE `fyp_committee`
  ADD CONSTRAINT `fyp_committee_dept_id_foreign` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`),
  ADD CONSTRAINT `fyp_committee_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `tbl_teacher` (`id`);

--
-- Constraints for table `program`
--
ALTER TABLE `program`
  ADD CONSTRAINT `program_dept_id_foreign` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`);

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_std_id_foreign` FOREIGN KEY (`id`) REFERENCES `student` (`id`);

--
-- Constraints for table `project_detail`
--
ALTER TABLE `project_detail`
  ADD CONSTRAINT `project_detail_proj_id_foreign` FOREIGN KEY (`proj_id`) REFERENCES `project` (`proj_id`);

--
-- Constraints for table `set_tasks`
--
ALTER TABLE `set_tasks`
  ADD CONSTRAINT `set_tasks_projact_id_foreign` FOREIGN KEY (`proj_id`) REFERENCES `project` (`proj_id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_dept_id_foreign` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`),
  ADD CONSTRAINT `student_prog_id_foreign` FOREIGN KEY (`prog_id`) REFERENCES `program` (`prog_id`),
  ADD CONSTRAINT `student_std_session_id_foreign` FOREIGN KEY (`std_session_id`) REFERENCES `session` (`ses_id`);

--
-- Constraints for table `tbl_teacher`
--
ALTER TABLE `tbl_teacher`
  ADD CONSTRAINT `tbl_teacher_dept_id_foreign` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
