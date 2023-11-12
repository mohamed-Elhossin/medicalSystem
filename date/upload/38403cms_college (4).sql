-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2023 at 03:42 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms_college`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `coursedepartment`
-- (See below for the actual view)
--
CREATE TABLE `coursedepartment` (
`id` bigint(20)
,`courseName` varchar(255)
,`hours` int(11)
,`depName` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `hours` int(11) NOT NULL,
  `department` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `hours`, `department`, `created_at`, `updated_at`) VALUES
(1, 'درس خاص', 32, 2, '2022-06-23 16:30:47', '2022-06-22 16:30:47'),
(2, 'رسم هندسي', 32, 1, '2023-08-11 15:53:13', '2023-08-11 15:53:13'),
(3, 'كيفيه الصعود', 32, 4, '2023-08-11 15:53:30', '2023-08-11 15:53:30');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'مدرعات', '2023-08-11 12:57:42', '2023-08-11 13:22:48'),
(2, 'الجويه', '2023-08-11 12:57:49', '2023-08-11 12:57:49'),
(4, 'الهندسه', '2023-08-11 13:08:20', '2023-08-11 13:08:20'),
(5, 'الطيران', '2023-08-11 13:08:24', '2023-08-11 13:08:24');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `flocks`
--

CREATE TABLE `flocks` (
  `id` bigint(20) NOT NULL,
  `flockNumber` bigint(20) NOT NULL,
  `levelId` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flocks`
--

INSERT INTO `flocks` (`id`, `flockNumber`, `levelId`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 3, '2022-06-23 16:30:47', '2022-06-01 17:06:54'),
(3, 3, 2, '2023-08-23 12:00:38', '2023-08-31 12:00:38');

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `id` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `m1` bigint(20) NOT NULL,
  `m2` bigint(20) NOT NULL,
  `m3` bigint(20) NOT NULL,
  `m4` bigint(20) NOT NULL,
  `m5` bigint(20) NOT NULL,
  `m6` bigint(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `name`, `m1`, `m2`, `m3`, `m4`, `m5`, `m6`, `created_at`, `updated_at`) VALUES
(1, 'الفرقه الاولي', 1, 1, 1, 1, 1, 1, NULL, NULL),
(2, 'الفرقه الثانيه', 1, 1, 1, 1, 1, 1, NULL, NULL),
(3, 'الفرقه الثاله', 1, 1, 1, 1, 1, 1, NULL, NULL),
(4, 'الفرقه الرابعه', 1, 2, 3, 1, 1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_11_145947_create_students_table', 1),
(6, '2023_08_11_150003_create_teachers_table', 1),
(7, '2023_08_11_150029_create_levels_table', 1),
(8, '2023_08_11_150046_create_courses_table', 1),
(9, '2023_08_11_150330_create_departments_table', 1),
(10, '2023_08_12_114129_create_flocks_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Stand-in structure for view `studentalldata`
-- (See below for the actual view)
--
CREATE TABLE `studentalldata` (
`studentId` bigint(20)
,`image` varchar(255)
,`studentName` varchar(255)
,`depName` varchar(50)
,`flockNumber` bigint(20)
,`levelId` bigint(20)
);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `flockNumber` bigint(20) NOT NULL,
  `department` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `image`, `flockNumber`, `department`, `created_at`, `updated_at`) VALUES
(2, 'محمد الحسيني', '1691773755WIN_20230811_19_48_55_Pro.jpg', 1, 1, '2023-08-11 14:09:15', '2023-08-11 14:09:15'),
(3, 'محمد الحسيني', '1691842047pexels-chris-f-5696983.jpg', 3, 2, '2023-08-12 09:07:27', '2023-08-12 09:07:27'),
(4, 'Mohamed El hosisny', '1691842806pexels-chris-f-5696983.jpg', 2, 4, '2023-08-12 09:20:06', '2023-08-12 09:20:06'),
(5, 'moahmed elhossiny', '1691842869pexels-chris-f-5696983.jpg', 3, 4, '2023-08-12 09:21:09', '2023-08-12 09:22:46');

-- --------------------------------------------------------

--
-- Stand-in structure for view `teacherdepartment`
-- (See below for the actual view)
--
CREATE TABLE `teacherdepartment` (
`id` bigint(20)
,`teacherName` varchar(255)
,`postion` varchar(255)
,`depName` varchar(50)
,`courseName` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `postion` varchar(255) NOT NULL,
  `department` bigint(20) NOT NULL,
  `course` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `postion`, `department`, `course`, `created_at`, `updated_at`) VALUES
(1, 'طه الديب', 'مدني', 4, 1, '2022-06-17 15:41:34', '2023-08-16 17:53:42'),
(2, 'محمد الحسيني', 'عقيد', 5, 2, '2023-08-11 15:02:27', '2023-08-11 15:09:04'),
(3, 'محمد الحسيني', 'عقيد', 5, 2, '2023-08-12 09:26:42', '2023-08-12 10:07:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'taha Eldeep', 'taha@ainergy.net', NULL, '$2y$10$f1sIL7BSdORZ/dOtDqk6aOHzC99LLuVwB9Zgz9yTesCElZ9i7KCpW', NULL, '2023-08-11 16:41:37', '2023-08-11 16:41:37'),
(2, 'محمدtoma@gmail.com', 'toma@gmail.com', NULL, '$2y$10$EL9.PynspD3JS22jun3GRu2o8Hgpc/67JDjknPu41FUR7sCVy6.bm', NULL, '2023-08-11 16:44:01', '2023-08-11 16:44:01');

-- --------------------------------------------------------

--
-- Structure for view `coursedepartment`
--
DROP TABLE IF EXISTS `coursedepartment`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `coursedepartment`  AS SELECT `courses`.`id` AS `id`, `courses`.`name` AS `courseName`, `courses`.`hours` AS `hours`, `departments`.`name` AS `depName` FROM (`courses` join `departments` on(`courses`.`department` = `departments`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `studentalldata`
--
DROP TABLE IF EXISTS `studentalldata`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `studentalldata`  AS SELECT `students`.`id` AS `studentId`, `students`.`image` AS `image`, `students`.`name` AS `studentName`, `departments`.`name` AS `depName`, `flocks`.`flockNumber` AS `flockNumber`, `flocks`.`levelId` AS `levelId` FROM ((`students` join `departments` on(`students`.`department` = `departments`.`id`)) join `flocks` on(`students`.`flockNumber` = `flocks`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `teacherdepartment`
--
DROP TABLE IF EXISTS `teacherdepartment`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `teacherdepartment`  AS SELECT `teachers`.`id` AS `id`, `teachers`.`name` AS `teacherName`, `teachers`.`postion` AS `postion`, `departments`.`name` AS `depName`, `courses`.`name` AS `courseName` FROM ((`teachers` join `departments` on(`teachers`.`department` = `departments`.`id`)) join `courses` on(`teachers`.`course` = `courses`.`id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department` (`department`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `flocks`
--
ALTER TABLE `flocks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `levelId` (`levelId`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `m1` (`m1`),
  ADD KEY `m2` (`m2`),
  ADD KEY `m3` (`m3`),
  ADD KEY `m4` (`m4`),
  ADD KEY `m5` (`m5`),
  ADD KEY `m6` (`m6`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `level` (`flockNumber`),
  ADD KEY `department` (`department`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department` (`department`),
  ADD KEY `course` (`course`);

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
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flocks`
--
ALTER TABLE `flocks`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`department`) REFERENCES `departments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `flocks`
--
ALTER TABLE `flocks`
  ADD CONSTRAINT `flocks_ibfk_1` FOREIGN KEY (`levelId`) REFERENCES `levels` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `levels`
--
ALTER TABLE `levels`
  ADD CONSTRAINT `levels_ibfk_2` FOREIGN KEY (`m1`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `levels_ibfk_3` FOREIGN KEY (`m2`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `levels_ibfk_4` FOREIGN KEY (`m3`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `levels_ibfk_5` FOREIGN KEY (`m4`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `levels_ibfk_6` FOREIGN KEY (`m5`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `levels_ibfk_7` FOREIGN KEY (`m6`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`flockNumber`) REFERENCES `flocks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `students_ibfk_2` FOREIGN KEY (`department`) REFERENCES `departments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_ibfk_1` FOREIGN KEY (`department`) REFERENCES `departments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teachers_ibfk_2` FOREIGN KEY (`course`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
