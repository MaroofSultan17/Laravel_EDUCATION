-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3300
-- Generation Time: Jun 30, 2024 at 04:37 AM
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
-- Database: `education`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneno` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `securepassword` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `phoneno`, `address`, `image`, `password`, `securepassword`, `token`, `created_at`, `updated_at`) VALUES
(1, 'Maroof Sultan', 'maroofsultan17@gmail.com', '03106510421', 'Mohalla Noor Shah near stop # 3 Kamalia', 'uploads/profile/admin_profile_1719164795.png', '12345678', '25d55ad283aa400af464c76d713c07ad', 'zTvXIQlL5a3MB!b0mUY9$F2OZc*DGJS4', '2024-06-23 12:28:45', '2024-06-23 12:46:35');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `image` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `name`, `date`, `image`, `heading`, `details`, `created_at`, `updated_at`) VALUES
(1, 'Maroof', '2024-06-10', 'frontend/images/blogs/blog_img_6.jpg', 'Everything You Need To Know To Kickstart A Career In UI/UX', 'While it\'s most certainly not on individuals to single-handedly reverse climate change, it can feel good to take actions that make a positive impact on the environment. And for programmers and software developers, specifically, there are a few easy change', NULL, NULL),
(2, 'Sultan', '2024-06-12', 'frontend/images/blogs/blog_img_3.jpg', 'Everything You Need To Know To Kickstart A Career In UI/UX', 'While it\'s most certainly not on individuals to single-handedly reverse climate change, it can feel good to take actions that make a positive impact on the environment. And for programmers and software developers, specifically, there are a few easy change', NULL, NULL),
(3, 'Sultan', '2024-06-12', 'frontend/images/blogs/blog_img_3.jpg', 'Everything You Need To Know To Kickstart A Career In UI/UX', 'While it\'s most certainly not on individuals to single-handedly reverse climate change, it can feel good to take actions that make a positive impact on the environment. And for programmers and software developers, specifically, there are a few easy change', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL DEFAULT 'null',
  `email` varchar(100) NOT NULL DEFAULT 'abc@gmail.com',
  `phone` varchar(100) NOT NULL DEFAULT 'null',
  `subject` varchar(100) NOT NULL DEFAULT 'null',
  `message` varchar(5000) NOT NULL DEFAULT 'null',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Maroof Sultan', 'maroofsultan17@gmail.com', '03106510421', 'Testing', 'This is Testing.', '2024-06-29 21:21:14', '2024-06-29 21:21:14'),
(2, 'Maroof Sultan', 'maroofsultan17@gmail.com', '03106510421', 'Testing', 'This is Testing.', '2024-06-29 21:28:39', '2024-06-29 21:28:39');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `badge` varchar(20) NOT NULL DEFAULT '',
  `image` varchar(200) NOT NULL DEFAULT 'uploads/no image',
  `coursedetails` varchar(500) NOT NULL DEFAULT 'null',
  `courselevel` varchar(20) NOT NULL DEFAULT 'null',
  `courselectures` int(11) NOT NULL DEFAULT 0,
  `catageory_id` bigint(20) NOT NULL,
  `instructor_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `badge`, `image`, `coursedetails`, `courselevel`, `courselectures`, `catageory_id`, `instructor_id`, `created_at`, `updated_at`) VALUES
(1, 'New', 'uploads/courses-images/education_upload_1719165446.jpg', 'Good Course', 'beginner', 15, 1, 1, '2024-06-23 12:57:26', '2024-06-25 13:56:24'),
(2, 'Old', 'uploads/courses-images/education_upload_1719391341.jpg', 'This is Python course', 'beginner', 23, 1, 1, '2024-06-26 03:42:21', '2024-06-26 03:42:21'),
(3, 'New', 'uploads/courses-images/education_upload_1719391389.jpg', 'This is COurse For Javascript', 'beginner', 12, 2, 1, '2024-06-26 03:43:09', '2024-06-26 03:43:09');

-- --------------------------------------------------------

--
-- Table structure for table `course_catageory`
--

CREATE TABLE `course_catageory` (
  `catageory_id` bigint(20) UNSIGNED NOT NULL,
  `catageory_name` varchar(255) NOT NULL,
  `catageory_details` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_catageory`
--

INSERT INTO `course_catageory` (`catageory_id`, `catageory_name`, `catageory_details`, `created_at`, `updated_at`) VALUES
(1, 'python', 'This is Python ctageory', '2024-06-23 12:47:24', '2024-06-23 12:47:24'),
(2, 'javascript', 'This is JS', '2024-06-26 03:41:18', '2024-06-26 03:41:18');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(200) NOT NULL DEFAULT 'uploads/no image',
  `title` varchar(100) NOT NULL DEFAULT 'null',
  `date` date NOT NULL,
  `address` varchar(500) NOT NULL DEFAULT 'null',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `image`, `title`, `date`, `address`, `created_at`, `updated_at`) VALUES
(1, 'uploads/events/event_image_1719391214.jpg', 'Tegathon', '2024-07-04', 'CUI Sahiwal', '2024-06-26 03:40:14', '2024-06-26 03:40:14'),
(2, 'uploads/events/event_image_1719391451.jpg', 'Coding Compition', '2024-06-30', 'University of Sahiwal', '2024-06-26 03:44:11', '2024-06-26 03:44:11');

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
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `instructor_id` bigint(20) UNSIGNED NOT NULL,
  `instructor_name` varchar(255) NOT NULL DEFAULT 'null',
  `instructor_email` varchar(255) NOT NULL DEFAULT 'abc@gmail.com',
  `instructor_contact` varchar(255) NOT NULL DEFAULT 'null',
  `instructor_experties` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`instructor_id`, `instructor_name`, `instructor_email`, `instructor_contact`, `instructor_experties`, `created_at`, `updated_at`) VALUES
(1, 'maroof', 'maroofsultan17@gmail.com', '12345678', 'ertyuifdsaZ', '2024-06-23 12:56:41', '2024-06-23 12:56:41');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(9, '0001_01_01_000000_create_users_table', 1),
(67, '0001_01_01_000001_create_cache_table', 2),
(68, '0001_01_01_000002_create_jobs_table', 2),
(69, '2024_05_07_191744_create_contact_table', 2),
(70, '2024_05_08_193450_create_events_table', 2),
(71, '2024_05_13_155554_create_course_catageory_table', 2),
(72, '2024_05_13_155620_create_instructor_table', 2),
(73, '2024_05_13_192848_create_courses_table', 2),
(74, '2024_06_14_182127_create_user_table', 2),
(75, '2024_06_17_171706_create_admin_table', 2),
(76, '2024_06_25_102702_create_blogs_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('jfTVWM2z0AfVI5RpGSd1zn6lMLEdq7cm3e7Vh3lo', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YToyOntzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozNToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2FkbWluL3NpZ25vdXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1719714641),
('nBlU4pRh4dQ2ZVnEURgWOkStklwuUqSI1nLotm4k', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiM2JteHp2dkhSa3h5S3pEbmZ5MWVISkFjVzB0WUtRUVUwa2p3YnQ2cyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NToiZW1haWwiO3M6MjQ6Im1hcm9vZnN1bHRhbjE3QGdtYWlsLmNvbSI7czo1OiJ0b2tlbiI7czozMjoielR2WElRbEw1YTNNQiFiMG1VWTkkRjJPWmMqREdKUzQiO30=', 1719393192);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `securepassword` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `google_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `securepassword`, `token`, `google_id`, `created_at`, `updated_at`) VALUES
(1, 'Maroof Sultan', 'abc@gmail.com', '12345678', '25d55ad283aa400af464c76d713c07ad', 't)Z40HJfk*gu8ELzhvQdBj3n(USOPpaT', NULL, '2024-06-22 13:49:05', '2024-06-22 13:49:05'),
(2, 'Ali', 'ali@gmail.com', '12345678', '25d55ad283aa400af464c76d713c07ad', '0zXOFPC14mk)joIJ6GaLwKTltUrgSEs2', NULL, '2024-06-29 21:21:51', '2024-06-29 21:21:51');

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
  `securepassword` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_email_unique` (`email`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `course_catageory`
--
ALTER TABLE `course_catageory`
  ADD PRIMARY KEY (`catageory_id`),
  ADD UNIQUE KEY `course_catageory_catageory_name_unique` (`catageory_name`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`instructor_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_email_unique` (`email`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `course_catageory`
--
ALTER TABLE `course_catageory`
  MODIFY `catageory_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `instructor_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
