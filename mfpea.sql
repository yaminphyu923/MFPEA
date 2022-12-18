-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 15, 2022 at 05:20 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mfpea`
--

-- --------------------------------------------------------

--
-- Table structure for table `ad00084s`
--

CREATE TABLE `ad00084s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lab_received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_performed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issue_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `results` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ad00084_finances`
--

CREATE TABLE `ad00084_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ad00084_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ad00084_tests`
--

CREATE TABLE `ad00084_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ad00084_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_parameter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `range` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `standard` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ad00086s`
--

CREATE TABLE `ad00086s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lab_received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_performed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issue_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `results` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ad00086_finances`
--

CREATE TABLE `ad00086_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ad00086_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ad00086_tests`
--

CREATE TABLE `ad00086_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ad00086_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_parameter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `range` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `standard` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ad00088s`
--

CREATE TABLE `ad00088s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lab_received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_performed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issue_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `results` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ad00088_finances`
--

CREATE TABLE `ad00088_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ad00088_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ad00088_tests`
--

CREATE TABLE `ad00088_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ad00088_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_parameter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `range` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `standard` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ad00396s`
--

CREATE TABLE `ad00396s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lab_received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_performed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issue_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `results` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ad00396_finances`
--

CREATE TABLE `ad00396_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ad00396_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ad00396_tests`
--

CREATE TABLE `ad00396_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ad00396_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_parameter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `range` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `standard` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ad00879s`
--

CREATE TABLE `ad00879s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lab_received_date` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_performed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issue_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `results` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ad00879_finances`
--

CREATE TABLE `ad00879_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ad00879_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ad00879_tests`
--

CREATE TABLE `ad00879_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ad00879_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_parameter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ad0101s`
--

CREATE TABLE `ad0101s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_person` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name_code` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `request_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sampling_procedure` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `decision_rule` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_quantity` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tf_received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_quality` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temperature_sa` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `physical_sp` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lab_report_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signature` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ad0101s`
--

INSERT INTO `ad0101s` (`id`, `company_name`, `customer_id`, `address`, `contact_person`, `sample_name_code`, `sample_description`, `package_type`, `request_type`, `sampling_procedure`, `decision_rule`, `test_method`, `sample_quantity`, `tf_received_date`, `sample_received_date`, `sample_number`, `received_quality`, `temperature_sa`, `physical_sp`, `lab_report_date`, `job_number`, `signature`, `name`, `created_at`, `updated_at`) VALUES
(4, 'fidsl-ad-01-01', '7', 'Yangon', 'Lin', '001', 'Liquid', 'Paste', 'Survey', 'Not-Submitted', 'Request', 'FIDSL', '20', '2022-08-01', '2022-08-01', '001', 'rquality', 'tem', 'physical condition', '2022-08-01', '001', '1659339035_sign-white.png', 'Hlaing', '2022-08-01 01:00:35', '2022-08-01 01:01:36');

-- --------------------------------------------------------

--
-- Table structure for table `ad01087s`
--

CREATE TABLE `ad01087s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lab_received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_performed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issue_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `results` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ad01087_finances`
--

CREATE TABLE `ad01087_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ad01087_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ad01087_tests`
--

CREATE TABLE `ad01087_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ad01087_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_parameter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ad01250s`
--

CREATE TABLE `ad01250s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lab_received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_performed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issue_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `results` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ad01250_finances`
--

CREATE TABLE `ad01250_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ad01250_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ad01250_tests`
--

CREATE TABLE `ad01250_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ad01250_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_parameter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ad01254s`
--

CREATE TABLE `ad01254s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lab_received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_performed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issue_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `results` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ad01254_finances`
--

CREATE TABLE `ad01254_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ad01254_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ad01254_tests`
--

CREATE TABLE `ad01254_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ad01254_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_parameter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `before_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `after_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ad01288s`
--

CREATE TABLE `ad01288s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lab_received_date` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_performed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issue_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `results` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ad01288_finances`
--

CREATE TABLE `ad01288_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ad01288_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ad01288_tests`
--

CREATE TABLE `ad01288_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ad01288_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_parameter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detection` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ad01341s`
--

CREATE TABLE `ad01341s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lab_received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_performed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issue_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `results` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ad01341s`
--

INSERT INTO `ad01341s` (`id`, `company_name`, `address`, `phone`, `lab_received_date`, `sample_number`, `product_name`, `test_performed_date`, `test_type`, `issue_date`, `results`, `method`, `customer_id`, `sign`, `checked_name`, `created_at`, `updated_at`) VALUES
(3, 'KSS Co.,Ltd', '105-C/106, Mya Ayeyar Street, Thaketa Industrial Zone.', '095182919', '2022-07-12', '001', 'Curry Powder', '2022-07-12', 'Test', '2022-07-12', NULL, 'test', '4', '1657729693_sign-white.png', 'Daw Ei', '2022-07-12 01:17:37', '2022-07-13 09:58:13');

-- --------------------------------------------------------

--
-- Table structure for table `ad01341_finances`
--

CREATE TABLE `ad01341_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ad01341_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ad01341_finances`
--

INSERT INTO `ad01341_finances` (`id`, `ad01341_id`, `voucher`, `amount`, `date`, `remark`, `created_at`, `updated_at`) VALUES
(2, '3', '16576142100000002', '4000', '2022-07-12', 'remark', '2022-07-12 01:17:38', '2022-07-12 01:53:30');

-- --------------------------------------------------------

--
-- Table structure for table `ad01341_tests`
--

CREATE TABLE `ad01341_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ad01341_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_parameter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ad01341_tests`
--

INSERT INTO `ad01341_tests` (`id`, `ad01341_id`, `test_parameter`, `test_method`, `result`, `created_at`, `updated_at`) VALUES
(3, '3', 'Pro', 'AA', '0.20%', '2022-07-12 01:17:37', '2022-07-13 09:58:13'),
(4, '3', 'Fat', 'AA', '0.30%', '2022-07-12 01:17:37', '2022-07-13 09:58:13');

-- --------------------------------------------------------

--
-- Table structure for table `ad01351s`
--

CREATE TABLE `ad01351s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lab_received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code_no` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mfd` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exp` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `can_size` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_performed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issue_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `results` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ad01351_finances`
--

CREATE TABLE `ad01351_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ad01351_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ad01351_tests`
--

CREATE TABLE `ad01351_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ad01351_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_parameter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ad01354s`
--

CREATE TABLE `ad01354s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lab_received_date` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_performed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issue_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `results` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ad01354_finances`
--

CREATE TABLE `ad01354_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ad01354_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ad01354_tests`
--

CREATE TABLE `ad01354_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ad01354_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_parameter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detection` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ad01357s`
--

CREATE TABLE `ad01357s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lab_received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_performed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `consignee` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `packing` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discharge` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vessel_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eori` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hscode` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ponumber` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_taken` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issue_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `results` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ad01357_finances`
--

CREATE TABLE `ad01357_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ad01357_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ad01357_tests`
--

CREATE TABLE `ad01357_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ad01357_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_parameter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `range` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `standard` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ad0201s`
--

CREATE TABLE `ad0201s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name_code` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `arrival_temperature` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pakaging_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `physical_condition_package` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_receiver` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_date_received` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lab_date_received` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lab_receiver` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lab_received` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `storage_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `performed_duration` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disposal_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prepared_by` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prepared_position` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verified_by` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verified_position` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ad0201s`
--

INSERT INTO `ad0201s` (`id`, `job_number`, `customer_id`, `sample_name_code`, `sample_description`, `sample_type`, `sample_amount`, `arrival_temperature`, `pakaging_type`, `physical_condition_package`, `admin_receiver`, `admin_date_received`, `lab_date_received`, `lab_receiver`, `lab_received`, `storage_method`, `test_type`, `performed_duration`, `disposal_date`, `prepared_by`, `prepared_position`, `verified_by`, `verified_position`, `created_at`, `updated_at`) VALUES
(2, 'fidsl-ad-02-01', '7', '001', 'sample des', 'type', 'amount', 'arrival', 'packaging', 'physical', 'admin receiver', '2022-08-01', '2022-08-01', 'lab receiver', 'Microbiology', 'Refrigeration', 'test', 'duration', '2022-08-01', 'Myo Myo', 'test', 'John', 'Test', '2022-08-01 01:06:37', '2022-08-01 01:07:25');

-- --------------------------------------------------------

--
-- Table structure for table `ad_finances`
--

CREATE TABLE `ad_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `aw_branch` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ad0101_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ad0201_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receive_voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ad_finances`
--

INSERT INTO `ad_finances` (`id`, `aw_branch`, `ad0101_id`, `ad0201_id`, `remark`, `receive_voucher`, `amount`, `date`, `created_at`, `updated_at`) VALUES
(5, 'ad0101', '4', NULL, 'testing', '16644499590000005', '10000', '2022-08-02', '2022-08-01 01:00:35', '2022-09-29 04:42:39');

-- --------------------------------------------------------

--
-- Table structure for table `alcohol_fcar0501s`
--

CREATE TABLE `alcohol_fcar0501s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `report_no` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysis_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issue_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ace_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ace_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ace_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ethyl_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ethyl_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ethyl_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `methanol_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `methanol_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `methanol_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `propanol_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `propanol_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `propanol_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iso_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iso_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iso_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `methyl_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `methyl_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `methyl_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alcohol_fcar0501s`
--

INSERT INTO `alcohol_fcar0501s` (`id`, `job_number`, `report_no`, `sample_name`, `received_date`, `analysis_date`, `issue_date`, `result`, `ace_para`, `ace_method`, `ace_result`, `ethyl_para`, `ethyl_method`, `ethyl_result`, `methanol_para`, `methanol_method`, `methanol_result`, `propanol_para`, `propanol_method`, `propanol_result`, `iso_para`, `iso_method`, `iso_result`, `methyl_para`, `methyl_method`, `methyl_result`, `sign`, `name`, `position`, `check1`, `check2`, `created_at`, `updated_at`) VALUES
(1, 'C-001 test', 'ARN-Chemical-aa', 'sa', '2022-11-29', '2022-11-29', '2022-11-29', 'Alcohol Impurities', 'Acetaldehyde', NULL, '21', 'Ethyl acetate', NULL, '21', 'Methanol', NULL, '21', 'Propanol', NULL, '21', 'Isobutanol', NULL, '21', '3-methyl butanol', NULL, '21', '1669738637_sign-white.png', 'name', 'position', 'checked', 'che 2', '2022-11-29 09:27:18', '2022-11-29 09:47:17');

-- --------------------------------------------------------

--
-- Table structure for table `alcohol_fcar0501_finances`
--

CREATE TABLE `alcohol_fcar0501_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alcohol_fcar0501_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alcohol_fcar0501_finances`
--

INSERT INTO `alcohol_fcar0501_finances` (`id`, `alcohol_fcar0501_id`, `voucher`, `amount`, `date`, `remark`, `test_type`, `voucher_2`, `amount_2`, `date_2`, `remark_2`, `test_type_2`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', 'First', '1000', '2022-11-29', 're', 'test', 'Second', '2000', '2022-11-29', 're', 'tewtq', NULL, '2022-11-29 09:27:18', '2022-11-29 09:50:15');

-- --------------------------------------------------------

--
-- Table structure for table `annual_fees`
--

CREATE TABLE `annual_fees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `member_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `annual_fee` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exp_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `annual_fees`
--

INSERT INTO `annual_fees` (`id`, `member_id`, `annual_fee`, `exp_date`, `created_at`, `updated_at`) VALUES
(7, '7', '1000', '2022-07-05', '2022-07-04 09:07:19', '2022-07-07 03:02:36'),
(9, '9', '2000', '2022-08-01', '2022-07-08 01:12:06', '2022-07-09 03:32:44'),
(10, '10', '30000', '2023-07-08', '2022-07-08 01:15:06', '2022-07-08 01:17:03'),
(18, '18', '1000', '2022-09-29', '2022-09-27 07:34:45', '2022-09-28 09:37:47'),
(19, '18', '2000', '2024-12-27', '2022-09-27 07:34:45', '2022-09-28 09:37:47'),
(22, '21', '200', '2024-10-15', '2022-09-27 08:45:12', '2022-09-27 08:45:12');

-- --------------------------------------------------------

--
-- Table structure for table `car0501s`
--

CREATE TABLE `car0501s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `report_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysis_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issue_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lauric_12_0_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lauric_12_0_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lauric_12_0_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `myristic_14_0_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `myristic_14_0_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `myristic_14_0_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `myristoleic_14_1_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `myristoleic_14_1_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `myristoleic_14_1_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `palmitic_16_0_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `palmitic_16_0_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `palmitic_16_0_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `palmitoleic_16_1_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `palmitoleic_16_1_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `palmitoleic_16_1_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stearic_18_0_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stearic_18_0_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stearic_18_0_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oleictrans_18_1_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oleictrans_18_1_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oleictrans_18_1_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oleic_18_1_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oleic_18_1_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oleic_18_1_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linoleictrans_18_2_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linoleictrans_18_2_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linoleictrans_18_2_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linoleic_18_2_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linoleic_18_2_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linoleic_18_2_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linoleic_18_3_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linoleic_18_3_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linoleic_18_3_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `arachidic_20_0_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `arachidic_20_0_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `arachidic_20_0_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paullinic_20_1_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paullinic_20_1_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paullinic_20_1_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `arachidonic_20_4_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `arachidonic_20_4_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `arachidonic_20_4_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bchenic_22_0_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bchenic_22_0_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bchenic_22_0_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `erucic_22_1_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `erucic_22_1_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `erucic_22_1_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lignoceric_24_0_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lignoceric_24_0_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lignoceric_24_0_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkby1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkby2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car0501s`
--

INSERT INTO `car0501s` (`id`, `job_number`, `report_number`, `customer_id`, `sample_name`, `received_date`, `analysis_date`, `issue_date`, `result`, `lauric_12_0_para`, `lauric_12_0_method`, `lauric_12_0_result`, `myristic_14_0_para`, `myristic_14_0_method`, `myristic_14_0_result`, `myristoleic_14_1_para`, `myristoleic_14_1_method`, `myristoleic_14_1_result`, `palmitic_16_0_para`, `palmitic_16_0_method`, `palmitic_16_0_result`, `palmitoleic_16_1_para`, `palmitoleic_16_1_method`, `palmitoleic_16_1_result`, `stearic_18_0_para`, `stearic_18_0_method`, `stearic_18_0_result`, `oleictrans_18_1_para`, `oleictrans_18_1_method`, `oleictrans_18_1_result`, `oleic_18_1_para`, `oleic_18_1_method`, `oleic_18_1_result`, `linoleictrans_18_2_para`, `linoleictrans_18_2_method`, `linoleictrans_18_2_result`, `linoleic_18_2_para`, `linoleic_18_2_method`, `linoleic_18_2_result`, `linoleic_18_3_para`, `linoleic_18_3_method`, `linoleic_18_3_result`, `arachidic_20_0_para`, `arachidic_20_0_method`, `arachidic_20_0_result`, `paullinic_20_1_para`, `paullinic_20_1_method`, `paullinic_20_1_result`, `arachidonic_20_4_para`, `arachidonic_20_4_method`, `arachidonic_20_4_result`, `bchenic_22_0_para`, `bchenic_22_0_method`, `bchenic_22_0_result`, `erucic_22_1_para`, `erucic_22_1_method`, `erucic_22_1_result`, `lignoceric_24_0_para`, `lignoceric_24_0_method`, `lignoceric_24_0_result`, `remark`, `sign`, `name`, `position`, `checkby1`, `checkby2`, `status`, `created_at`, `updated_at`) VALUES
(19, 'C-17', 'ARN-Chemical', NULL, NULL, NULL, NULL, NULL, 'Fatty Acid Profile', 'C 12:0 (Lauric)', 'By Gas Chromatography', NULL, 'C 14:0 (Myristic)', 'By Gas Chromatography', NULL, 'C 14:1 (Myristoleic)', 'By Gas Chromatography', NULL, 'C 16:0 (Palmitic)', 'By Gas Chromatography', NULL, 'C 16:1 (Palmitoleic)', 'By Gas Chromatography', NULL, 'C 18:0 (Stearic)', 'By Gas Chromatography', NULL, 'C 18:1 (Oleic-trans)', 'By Gas Chromatography', NULL, 'C 18:1 (Oleic)', 'By Gas Chromatography', NULL, 'C 18:2 (Linoleic-trans)', 'By Gas Chromatography', NULL, 'C 18:2 (Linoleic)', 'By Gas Chromatography', NULL, 'C 18:3 (Linoleic)', 'By Gas Chromatography', NULL, 'C 20:0 (Arachidic)', 'By Gas Chromatography', NULL, 'C 20:1 (Paullinic)', 'By Gas Chromatography', NULL, 'C 20:4 (Arachidonic)', 'By Gas Chromatography', NULL, 'C 22:0 (Bchenic)', 'By Gas Chromatography', NULL, 'C 22:1 (Erucic)', 'By Gas Chromatography', NULL, 'C 24:0 (Lignoceric)', 'By Gas Chromatography', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2022-10-31 02:04:48', '2022-10-31 02:04:48'),
(20, 'C-15', 'ARN-Chemical', NULL, NULL, NULL, NULL, NULL, 'Fatty Acid Profile', 'C 12:0 (Lauric)', 'By Gas Chromatography', NULL, 'C 14:0 (Myristic)', 'By Gas Chromatography', NULL, 'C 14:1 (Myristoleic)', 'By Gas Chromatography', NULL, 'C 16:0 (Palmitic)', 'By Gas Chromatography', NULL, 'C 16:1 (Palmitoleic)', 'By Gas Chromatography', NULL, 'C 18:0 (Stearic)', 'By Gas Chromatography', NULL, NULL, NULL, NULL, 'C 18:1 (Oleic)', 'By Gas Chromatography', NULL, NULL, NULL, NULL, 'C 18:2 (Linoleic)', 'By Gas Chromatography', NULL, 'C 18:3 (Linoleic)', 'By Gas Chromatography', NULL, 'C 20:0 (Arachidic)', 'By Gas Chromatography', NULL, 'C 20:1 (Paullinic)', 'By Gas Chromatography', NULL, 'C 20:4 (Arachidonic)', 'By Gas Chromatography', NULL, 'C 22:0 (Bchenic)', 'By Gas Chromatography', NULL, 'C 22:1 (Erucic)', 'By Gas Chromatography', NULL, 'C 24:0 (Lignoceric)', 'By Gas Chromatography', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2022-10-31 02:05:04', '2022-10-31 02:05:04');

-- --------------------------------------------------------

--
-- Table structure for table `car0501_finances`
--

CREATE TABLE `car0501_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `car0501_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receive_voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `test_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receive_voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car0501_finances`
--

INSERT INTO `car0501_finances` (`id`, `car0501_id`, `remark`, `receive_voucher`, `amount`, `date`, `test_type`, `receive_voucher_2`, `amount_2`, `date_2`, `remark_2`, `test_type_2`, `status`, `created_at`, `updated_at`) VALUES
(10, '19', 'first remark', 'First', '2000', '2022-11-01', 'test', 'second', '1000', '2022-11-01', 'second remark', 'second test', '1', '2022-10-31 02:04:48', '2022-10-31 21:14:26'),
(11, '20', 'remark first', 'First', '1000', '2022-10-31', 'test first', 'second', '2000', '2022-10-31', 're 2', 'test 2', '0', '2022-10-31 02:05:04', '2022-10-31 09:02:02');

-- --------------------------------------------------------

--
-- Table structure for table `car0501_tests`
--

CREATE TABLE `car0501_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `test_parameter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `car0501_test_fills`
--

CREATE TABLE `car0501_test_fills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `car0501_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_parameter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `group_id`, `created_at`, `updated_at`) VALUES
(7, 'Test', '3', '2022-07-04 09:10:21', '2022-07-09 03:31:19'),
(8, 'Lorem', '2', '2022-07-04 09:10:28', '2022-07-09 03:29:47'),
(9, 'Dehydrated Fruits & Vegetables', '2', '2022-07-09 03:32:18', '2022-07-09 03:32:18');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `phone`, `address`, `company_name`, `product_name`, `email`, `created_at`, `updated_at`) VALUES
(7, 'Lin Lin', '09799123123', 'Ygn', 'lin company', 'lin pro', 'lin@gmail.com', '2022-08-01 00:56:08', '2022-08-01 00:56:08'),
(8, 'Aye Aye Mya Yi', '09799123123', 'Yagnon', 'company', 'product', 'aye@gmail.com', '2022-09-23 01:54:00', '2022-09-23 02:10:25'),
(10, 'Aye Aye Yi', '09799123123', 'Yagnon', 'company', 'product', 'aye@gmail.com', '2022-09-25 22:55:58', '2022-09-25 22:55:58'),
(13, 'Lin Lin Oo', '09799123123', 'Ygn', 'lin company', 'lin pro', 'lin@gmail.com', '2022-10-18 02:15:36', '2022-10-18 02:15:36');

-- --------------------------------------------------------

--
-- Table structure for table `f03m05s`
--

CREATE TABLE `f03m05s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pre_enrichment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selective_enrichment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `xld1_slant_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `xld1_blank_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `xld1_butt_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `xld1_h2s_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `xld1_gas_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `xld1_slant_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `xld1_butt_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `xld1_h2s_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `xld1_gas_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `xld2_slant_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `xld2_blank_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `xld2_butt_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `xld2_h2s_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `xld2_gas_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `xld2_slant_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `xld2_butt_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `xld2_h2s_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `xld2_gas_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he1_slant_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he1_blank_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he1_butt_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he1_h2s_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he1_gas_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he1_slant_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he1_butt_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he1_h2s_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he1_gas_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he2_slant_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he2_blank_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he2_butt_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he2_h2s_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he2_gas_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he2_slant_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he2_butt_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he2_h2s_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he2_gas_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lysine_slant_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lysine_blank_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lysine_butt_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lysine_h2s_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lysine_gas_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lysine_slant_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lysine_butt_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lysine_h2s_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lysine_gas_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urease_slant_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urease_blank_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urease_butt_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urease_h2s_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urease_gas_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urease_slant_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urease_butt_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urease_h2s_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urease_gas_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dul_slant_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dul_blank_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dul_butt_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dul_h2s_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dul_gas_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dul_slant_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dul_butt_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dul_h2s_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dul_gas_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kcn_slant_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kcn_blank_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kcn_butt_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kcn_h2s_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kcn_gas_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kcn_slant_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kcn_butt_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kcn_h2s_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kcn_gas_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `malonate_slant_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `malonate_blank_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `malonate_butt_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `malonate_h2s_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `malonate_gas_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `malonate_slant_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `malonate_butt_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `malonate_h2s_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `malonate_gas_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `indole_slant_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `indole_blank_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `indole_butt_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `indole_h2s_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `indole_gas_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `indole_slant_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `indole_butt_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `indole_h2s_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `indole_gas_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `red_slant_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `red_blank_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `red_butt_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `red_h2s_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `red_gas_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `red_slant_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `red_butt_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `red_h2s_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `red_gas_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voges_slant_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voges_blank_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voges_butt_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voges_h2s_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voges_gas_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voges_slant_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voges_butt_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voges_h2s_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voges_gas_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `citrate_slant_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `citrate_blank_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `citrate_butt_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `citrate_h2s_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `citrate_gas_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `citrate_slant_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `citrate_butt_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `citrate_h2s_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `citrate_gas_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sucrose_slant_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sucrose_blank_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sucrose_butt_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sucrose_h2s_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sucrose_gas_tsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sucrose_slant_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sucrose_butt_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sucrose_h2s_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sucrose_gas_li` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sal` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `f03m05_finances`
--

CREATE TABLE `f03m05_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `f03m05_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `f03m06s`
--

CREATE TABLE `f03m06s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `period` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homogenate` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zero_plate1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zero_plate2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minus_one_plate1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minus_one_plate2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minus_two_plate1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minus_two_plate2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minus_three_plate1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minus_three_plate2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minus_four_plate1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minus_four_plate2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minus_five_plate1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minus_five_plate2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yeast_mould` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `f03m06_finances`
--

CREATE TABLE `f03m06_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `f03m06_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `f04che06s`
--

CREATE TABLE `f04che06s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analyzed_by` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analyzed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analyzed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_by` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `f04che06_finances`
--

CREATE TABLE `f04che06_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `f04che06_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `f04che06_tests`
--

CREATE TABLE `f04che06_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `f04che06_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `f04che07s`
--

CREATE TABLE `f04che07s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `f04che07_finances`
--

CREATE TABLE `f04che07_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `f04che07_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `f04che07_tests`
--

CREATE TABLE `f04che07_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `f04che07_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `f04che08s`
--

CREATE TABLE `f04che08s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `f04che08_finances`
--

CREATE TABLE `f04che08_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `f04che08_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `f04che08_tests`
--

CREATE TABLE `f04che08_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `f04che08_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `f04che09s`
--

CREATE TABLE `f04che09s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `f04che09_finances`
--

CREATE TABLE `f04che09_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `f04che09_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `f04che09_tests`
--

CREATE TABLE `f04che09_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `f04che09_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `f04che10s`
--

CREATE TABLE `f04che10s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `f04che10_finances`
--

CREATE TABLE `f04che10_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `f04che10_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `f04che10_tests`
--

CREATE TABLE `f04che10_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `f04che10_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `f04che11s`
--

CREATE TABLE `f04che11s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `f04che11_finances`
--

CREATE TABLE `f04che11_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `f04che11_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `f04che11_tests`
--

CREATE TABLE `f04che11_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `f04che11_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `f04che12s`
--

CREATE TABLE `f04che12s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `f04che12_finances`
--

CREATE TABLE `f04che12_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `f04che12_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `f04che12_tests`
--

CREATE TABLE `f04che12_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `f04che12_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `f04che14s`
--

CREATE TABLE `f04che14s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `f04che14_finances`
--

CREATE TABLE `f04che14_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `f04che14_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `f04che14_tests`
--

CREATE TABLE `f04che14_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `f04che14_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `f05_finances`
--

CREATE TABLE `f05_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `f05_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `f05_s`
--

CREATE TABLE `f05_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `report_no` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issue_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysis_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `results` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `f05_tests`
--

CREATE TABLE `f05_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `f05_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_parameter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fcar0500s`
--

CREATE TABLE `fcar0500s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `report_no` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysis_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issue_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bod_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bod_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bod_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bod_unit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bod_value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cod_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cod_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cod_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cod_unit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cod_value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oil_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oil_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oil_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oil_unit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oil_value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ph_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ph_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ph_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ph_unit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ph_value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitrogen_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitrogen_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitrogen_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitrogen_unit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitrogen_value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phos_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phos_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phos_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phos_unit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phos_value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `solid_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `solid_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `solid_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `solid_unit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `solid_value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fcar0500_finances`
--

CREATE TABLE `fcar0500_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fcar0500_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fcar0501s`
--

CREATE TABLE `fcar0501s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `report_no` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysis_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issue_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `results` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fcar0501_finances`
--

CREATE TABLE `fcar0501_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fcar0501_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fcar0501_tests`
--

CREATE TABLE `fcar0501_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fcar0501_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_parameter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fcar0502s`
--

CREATE TABLE `fcar0502s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `report_no` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysis_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issue_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `results` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moisture` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moisture_ref` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moisture_result_g` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moisture_result_ml` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ash` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ash_ref` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ash_result_g` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ash_result_ml` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `protein` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `protein_ref` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `protein_result_g` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `protein_result_ml` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fiber` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fiber_ref` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fiber_result_g` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fiber_result_ml` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fat_ref` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fat_result_g` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fat_result_ml` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `carbo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `carbo_ref` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `carbo_result_g` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `carbo_result_ml` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `energy` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `energy_ref` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `energy_result_g` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `energy_result_ml` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `na` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `na_ref` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `na_result_g` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `na_result_ml` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `one_package` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `energy_fact` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `protein_fact` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fat_fact` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `carbo_fact` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `na_fact` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fcar0502s`
--

INSERT INTO `fcar0502s` (`id`, `job_number`, `report_no`, `sample_name`, `received_date`, `analysis_date`, `issue_date`, `results`, `moisture`, `moisture_ref`, `moisture_result_g`, `moisture_result_ml`, `ash`, `ash_ref`, `ash_result_g`, `ash_result_ml`, `protein`, `protein_ref`, `protein_result_g`, `protein_result_ml`, `fiber`, `fiber_ref`, `fiber_result_g`, `fiber_result_ml`, `fat`, `fat_ref`, `fat_result_g`, `fat_result_ml`, `carbo`, `carbo_ref`, `carbo_result_g`, `carbo_result_ml`, `energy`, `energy_ref`, `energy_result_g`, `energy_result_ml`, `na`, `na_ref`, `na_result_g`, `na_result_ml`, `remark`, `sign`, `name`, `position`, `check1`, `check2`, `one_package`, `energy_fact`, `protein_fact`, `fat_fact`, `carbo_fact`, `na_fact`, `created_at`, `updated_at`) VALUES
(3, 'C-001 test', 'ARN-Chemical', 'sa', '2022-11-23', '2022-11-23', '2022-11-23', 'Nutrition Package', 'Moisture', 'AOAC, a', '11', '22', 'Ash', 'AOAC,a', '11', '22', 'Crude Protein', 'AOAC,a   (Kjeldahl method)', '11', '22', 'Crude Fiber', 'AOAC,  a  (Fiber Cap Method)', '11', '22', 'Crude Fat (Ether extract)', 'AOAC,a', '11', '22', 'Carbohydrate', 'By difference', '11', '22', 'Energy Value (kcal/100g)', 'a', '11', '22', 'Sodium', 'a', '11', '22', 're', '1669173963_sign-white.png', 'na', 'po', 'ch1', 'ch2', '1package ( 10 )g', 'ener', 'pro', 'fat', 'car', 'so', '2022-11-22 20:54:11', '2022-11-22 20:56:03');

-- --------------------------------------------------------

--
-- Table structure for table `fcar0502_finances`
--

CREATE TABLE `fcar0502_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fcar0502_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fcar0502_finances`
--

INSERT INTO `fcar0502_finances` (`id`, `fcar0502_id`, `voucher`, `amount`, `date`, `remark`, `test_type`, `voucher_2`, `amount_2`, `date_2`, `remark_2`, `test_type_2`, `status`, `created_at`, `updated_at`) VALUES
(2, '3', 'First', '1000', '2022-11-23', 're', 'test', 'Second', '2000', '2022-11-23', 're', 'test', NULL, '2022-11-22 20:54:11', '2022-11-22 21:52:39');

-- --------------------------------------------------------

--
-- Table structure for table `fche040027s`
--

CREATE TABLE `fche040027s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cru` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cru_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cru_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w1_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w1_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cruplusresidue` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cruplusresidue_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cruplusresidue_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w2_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w2_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ash_cal` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ash_cal_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ash_cal_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ash` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ash_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ash_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ash_cal2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ash_cal2_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ash_cal2_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040027_finances`
--

CREATE TABLE `fche040027_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fche040027_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040028s`
--

CREATE TABLE `fche040028s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `water` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `water_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `water_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_boiling` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_boiling_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_boiling_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `second_boiling` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `second_boiling_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `second_boiling_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `makeup` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `makeup_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `makeup_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `taken` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `taken_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `taken_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `residue` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `residue_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `residue_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filtrated` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filtrated_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filtrated_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extractive_cal` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extractive_cal_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extractive_cal_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extractive` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extractive_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extractive_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040028_finances`
--

CREATE TABLE `fche040028_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fche040028_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040029s`
--

CREATE TABLE `fche040029s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_weight` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_weight_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_weight_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `koh_volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `koh_volume_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `koh_volume_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `koh_heating_time` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `koh_heating_time_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `koh_heating_time_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `boron_volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `boron_volume_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `boron_volume_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `boron_heating_time` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `boron_heating_time_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `boron_heating_time_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `potassium_weight` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `potassium_weight_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `potassium_weight_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `water_volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `water_volume_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `water_volume_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `petro_volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `petro_volume_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `petro_volume_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chlo_volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chlo_volume_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chlo_volume_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040029_finances`
--

CREATE TABLE `fche040029_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fche040029_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receive_voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receive_voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040038s`
--

CREATE TABLE `fche040038s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wt_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wt_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `water` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `water_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `water_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blank` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blank_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blank_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hcl` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hcl_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hcl_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ash_cal` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ash_cal_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ash_cal_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ash` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ash_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ash_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040038_finances`
--

CREATE TABLE `fche040038_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fche040038_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040039s`
--

CREATE TABLE `fche040039s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ki` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ki_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ki_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `distilled_water` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `distilled_water_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `distilled_water_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acetic_acid` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acetic_acid_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acetic_acid_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titration` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titration_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titration_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blank` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blank_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blank_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sodium` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sodium_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sodium_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cl_cal` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cl_cal_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cl_cal_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cl` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cl_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cl_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fche040039s`
--

INSERT INTO `fche040039s` (`id`, `job_number`, `sample_name`, `received_date`, `initiated_date`, `reported_date`, `method`, `ki`, `ki_test1`, `ki_test2`, `distilled_water`, `distilled_water_test1`, `distilled_water_test2`, `acetic_acid`, `acetic_acid_test1`, `acetic_acid_test2`, `sample`, `sample_test1`, `sample_test2`, `titration`, `titration_test1`, `titration_test2`, `blank`, `blank_test1`, `blank_test2`, `sodium`, `sodium_test1`, `sodium_test2`, `cl_cal`, `cl_cal_test1`, `cl_cal_test2`, `result`, `result_test1`, `result_test2`, `cl`, `cl_test1`, `cl_test2`, `analysed_sign`, `analysed_date`, `analysed_name`, `checked_sign`, `checked_date`, `checked_name`, `created_at`, `updated_at`) VALUES
(4, 'C-001', 'sa', '2022-12-03', '2022-12-03', '2022-12-03', 'Titrimetric Method', 'Weight of Potassium Iodide (KI) (g)', '1', '2', 'Volume of Distilled Water (ml)', '1', '2', 'Volume of Acetic acid (ml)', '1', '2', 'Volume of Sample (ml)', '1', '2', 'Volume of Titration(ml)', '1', '2', 'Volume of Blank', '1', '2', 'Normality of Sodium thiosulphate solution(N)', '1', NULL, 'Available Chlorine (as Cl)= ((S-B)*N*3.546)/Volume of sample', NULL, NULL, 'Result', NULL, NULL, 'Available Chlorine (as Cl) Percent mass by Volume', NULL, NULL, '1670075287_sign-white.png', '2022-12-03', 'ana', '1670075287_sign-white.png', '2022-12-03', 'ch', '2022-12-03 07:18:07', '2022-12-03 07:18:07');

-- --------------------------------------------------------

--
-- Table structure for table `fche040039_finances`
--

CREATE TABLE `fche040039_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fche040039_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fche040039_finances`
--

INSERT INTO `fche040039_finances` (`id`, `fche040039_id`, `voucher`, `amount`, `date`, `remark`, `test_type`, `voucher_2`, `amount_2`, `date_2`, `remark_2`, `test_type_2`, `status`, `created_at`, `updated_at`) VALUES
(4, '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-03 07:18:07', '2022-12-03 07:18:07');

-- --------------------------------------------------------

--
-- Table structure for table `fche040051s`
--

CREATE TABLE `fche040051s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `magnesium` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `magnesium_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `magnesium_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `water` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `water_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `water_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hcl` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hcl_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hcl_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_titrant` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_titrant_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_titrant_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blank_titrant` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blank_titrant_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blank_titrant_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tvbn` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tvbn_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tvbn_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fche040051s`
--

INSERT INTO `fche040051s` (`id`, `job_number`, `sample_name`, `received_date`, `initiated_date`, `reported_date`, `method`, `sample`, `sample_test1`, `sample_test2`, `magnesium`, `magnesium_test1`, `magnesium_test2`, `water`, `water_test1`, `water_test2`, `hcl`, `hcl_test1`, `hcl_test2`, `sample_titrant`, `sample_titrant_test1`, `sample_titrant_test2`, `blank_titrant`, `blank_titrant_test1`, `blank_titrant_test2`, `tvbn`, `tvbn_test1`, `tvbn_test2`, `result`, `result_test1`, `result_test2`, `analysed_sign`, `analysed_date`, `analysed_name`, `checked_sign`, `checked_date`, `checked_name`, `created_at`, `updated_at`) VALUES
(2, 'C-2323', 'da', '2022-12-03', '2022-12-03', '2022-12-03', 'ASN 3140 (Customer Requested Method)', 'Weight of Sample (g)', '1', '2', 'Volume of Magnesium Oxide (ml)', '1', '2', 'Volume of Water (ml)', '1', '2', 'Normality of HCL (N)', NULL, NULL, 'Volume of sample Titrant (ml)', NULL, NULL, 'Volume of Blank Titrant (ml)', NULL, NULL, 'TVBN mg/100g = ((S-B)*N*14.007*100)/sample wt', NULL, NULL, 'Result', NULL, NULL, '1670075382_sign-white.png', NULL, NULL, '1670075382_sign-white.png', NULL, NULL, '2022-12-03 07:19:42', '2022-12-03 07:19:42');

-- --------------------------------------------------------

--
-- Table structure for table `fche040051_finances`
--

CREATE TABLE `fche040051_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fche040051_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fche040051_finances`
--

INSERT INTO `fche040051_finances` (`id`, `fche040051_id`, `voucher`, `amount`, `date`, `remark`, `test_type`, `voucher_2`, `amount_2`, `date_2`, `remark_2`, `test_type_2`, `status`, `created_at`, `updated_at`) VALUES
(2, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-03 07:19:42', '2022-12-03 07:19:42');

-- --------------------------------------------------------

--
-- Table structure for table `fche040052s`
--

CREATE TABLE `fche040052s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alcohol` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alcohol_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alcohol_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hcl_titrant` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hcl_titrant_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hcl_titrant_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hcl_normality` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hcl_normality_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hcl_normality_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `naoh_cal` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `naoh_cal_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `naoh_cal_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `naoh` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `naoh_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `naoh_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040052_finances`
--

CREATE TABLE `fche040052_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fche040052_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040053s`
--

CREATE TABLE `fche040053s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bod` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bod_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bod_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dilution` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dilution_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dilution_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pillow` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pillow_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pillow_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pellet` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pellet_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pellet_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `incubation` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `incubation_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `incubation_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reading` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reading_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reading_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bod_cal` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bod_cal_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bod_cal_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040053_finances`
--

CREATE TABLE `fche040053_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fche040053_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040054s`
--

CREATE TABLE `fche040054s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cod` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cod_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cod_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dilution` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dilution_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dilution_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `water` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `water_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `water_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reactor` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reactor_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reactor_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reading` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reading_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reading_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cod_cal` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cod_cal_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cod_cal_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040054_finances`
--

CREATE TABLE `fche040054_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fche040054_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040055s`
--

CREATE TABLE `fche040055s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dilution` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dilution_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dilution_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `solutiona` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `solutiona_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `solutiona_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btablet` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btablet_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btablet_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temperature` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temperature_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temperature_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `digested` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `digested_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `digested_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `solutiond` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `solutiond_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `solutiond_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reaction` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reaction_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reaction_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reading` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reading_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reading_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitrogen` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitrogen_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitrogen_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040055_finances`
--

CREATE TABLE `fche040055_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fche040055_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040056s`
--

CREATE TABLE `fche040056s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dilution` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dilution_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dilution_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `potassium` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `potassium_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `potassium_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temperature` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temperature_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temperature_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reactor_time` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reactor_time_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reactor_time_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sodium` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sodium_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sodium_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phosver` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phosver_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phosver_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reaction_time` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reaction_time_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reaction_time_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reading` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reading_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reading_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phos` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phos_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phos_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040056_finances`
--

CREATE TABLE `fche040056_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fche040056_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040057s`
--

CREATE TABLE `fche040057s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dilution` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dilution_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dilution_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reading` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reading_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reading_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tss` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tss_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tss_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040057_finances`
--

CREATE TABLE `fche040057_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fche040057_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040058s`
--

CREATE TABLE `fche040058s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phenol` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phenol_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phenol_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dilution` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dilution_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dilution_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `solutiona` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `solutiona_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `solutiona_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reading` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reading_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reading_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phenol_cal` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phenol_cal_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phenol_cal_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040058_finances`
--

CREATE TABLE `fche040058_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fche040058_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040059s`
--

CREATE TABLE `fche040059s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lead_range` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lead_range_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lead_range_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dilution` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dilution_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dilution_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reagenta` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reagenta_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reagenta_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reaction_time` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reaction_time_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reaction_time_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `solutionb` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `solutionb_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `solutionb_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `treated` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `treated_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `treated_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reaction_time2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reaction_time2_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reaction_time2_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `read` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `read_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `read_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `solutionc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `solutionc_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `solutionc_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reaction_time3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reaction_time3_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reaction_time3_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reading` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reading_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reading_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lead` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lead_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lead_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040059_finances`
--

CREATE TABLE `fche040059_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fche040059_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040060s`
--

CREATE TABLE `fche040060s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sulfide` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sulfide_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sulfide_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dilution` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dilution_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dilution_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `solutiona` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `solutiona_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `solutiona_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reaction_time` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reaction_time_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reaction_time_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reading` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reading_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reading_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sulfide_cal` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sulfide_cal_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sulfide_cal_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040060_finances`
--

CREATE TABLE `fche040060_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fche040060_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040061s`
--

CREATE TABLE `fche040061s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chlorine` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chlorine_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chlorine_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dilution` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dilution_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dilution_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pillow` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pillow_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pillow_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reaction_time` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reaction_time_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reaction_time_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blank` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blank_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blank_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reading` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reading_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reading_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chlorine_cal` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chlorine_cal_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chlorine_cal_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040061_finances`
--

CREATE TABLE `fche040061_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fche040061_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040062s`
--

CREATE TABLE `fche040062s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040062_finances`
--

CREATE TABLE `fche040062_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fche040062_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040063s`
--

CREATE TABLE `fche040063s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hcl_volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hcl_volume_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hcl_volume_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ether` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ether_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ether_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w1_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w1_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w2_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w2_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oil_grease` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oil_grease_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oil_grease_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040063_finances`
--

CREATE TABLE `fche040063_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fche040063_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040064s`
--

CREATE TABLE `fche040064s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `calibration` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `calibration_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `calibration_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dilution` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dilution_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dilution_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reading` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reading_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reading_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040064_finances`
--

CREATE TABLE `fche040064_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fche040064_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040101s`
--

CREATE TABLE `fche040101s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `air_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vaccum_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dish` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dish_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dish_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w1_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w1_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dishplussample` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dishplussample_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dishplussample_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w2_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w2_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moisture_cal` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moisture_cal_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moisture_cal_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moisture` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moisture_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moisture_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040101_finances`
--

CREATE TABLE `fche040101_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fche040101_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040102s`
--

CREATE TABLE `fche040102s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cru` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cru_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cru_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w1_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w1_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cruplussample` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cruplussample_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cruplussample_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w2_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w2_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ash_cal` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ash_cal_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ash_cal_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ash` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ash_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ash_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040102_finances`
--

CREATE TABLE `fche040102_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fche040102_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040103s`
--

CREATE TABLE `fche040103s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cat_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cat_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `h2so4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `h2so4_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `h2so4_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `water` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `water_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `water_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `naoh` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `naoh_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `naoh_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receiver` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receiver_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receiver_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `n` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `n_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `n_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitrogen_cal` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitrogen_cal_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitrogen_cal_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `protein_cal` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `protein_cal_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `protein_cal_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitrogen` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitrogen_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitrogen_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `protein` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `protein_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `protein_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040103_finances`
--

CREATE TABLE `fche040103_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fche040103_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040104s`
--

CREATE TABLE `fche040104s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w1_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w1_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w2_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w2_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `h2so4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `h2so4_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `h2so4_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `naoh` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `naoh_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `naoh_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w3_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w3_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w4_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w4_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fiber_cal` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fiber_cal_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fiber_cal_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fiber` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fiber_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fiber_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040104_finances`
--

CREATE TABLE `fche040104_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fche040104_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040105s`
--

CREATE TABLE `fche040105s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aluminium` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aluminium_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aluminium_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `beakerplusresidue` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `beakerplusresidue_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `beakerplusresidue_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `residue` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `residue_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `residue_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fat_cal` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fat_cal_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fat_cal_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fat_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fat_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040105_finances`
--

CREATE TABLE `fche040105_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fche040105_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040106s`
--

CREATE TABLE `fche040106s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acid_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alkali_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `h2o` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `h2o_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `h2o_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nh4oh` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nh4oh_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nh4oh_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alcohol` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alcohol_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alcohol_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_alcohol` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_alcohol_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_alcohol_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hcl` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hcl_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hcl_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `second_alcohol` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `second_alcohol_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `second_alcohol_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `residue` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `residue_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `residue_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fat_cal` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fat_cal_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fat_cal_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fat_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fat_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040106_finances`
--

CREATE TABLE `fche040106_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fche040106_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040107s`
--

CREATE TABLE `fche040107s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `e` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `e_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `e_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `energy_cal` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `energy_cal_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `energy_cal_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `carbo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `carbo_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `carbo_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `energy` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `energy_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `energy_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `one_package` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `energy_fact` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `protein_fact` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fat_fact` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `carbo_fact` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sodium_fact` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040107_finances`
--

CREATE TABLE `fche040107_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fche040107_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040108s`
--

CREATE TABLE `fche040108s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temperature` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temperature_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temperature_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `container` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `container_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `container_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `container_water` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `container_water_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `container_water_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `water` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `water_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `water_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `container_sample` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `container_sample_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `container_sample_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gravity_cal` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gravity_cal_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gravity_cal_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gravity` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gravity_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gravity_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040108_finances`
--

CREATE TABLE `fche040108_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fche040108_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040109s`
--

CREATE TABLE `fche040109s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temperature` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temperature_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temperature_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brix_one` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brix_one_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brix_one_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `index_one` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `index_one_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `index_one_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `index_two` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `index_two_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `index_two_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brix_two` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brix_two_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brix_two_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040109_finances`
--

CREATE TABLE `fche040109_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fche040109_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040110s`
--

CREATE TABLE `fche040110s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `koh` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `koh_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `koh_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hcl_sample` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hcl_sample_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hcl_sample_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hcl_blank` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hcl_blank_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hcl_blank_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hcl` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hcl_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hcl_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sap_cal` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sap_cal_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sap_cal_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sap` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sap_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sap_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040110_finances`
--

CREATE TABLE `fche040110_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fche040110_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040111s`
--

CREATE TABLE `fche040111s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `koh` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `koh_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `koh_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `water` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `water_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `water_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `petro` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `petro_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `petro_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ethanol` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ethanol_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ethanol_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flask` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flask_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flask_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flask_residue` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flask_residue_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flask_residue_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `residue` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `residue_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `residue_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unsap_cal` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unsap_cal_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unsap_cal_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unsap` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unsap_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unsap_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040111_finances`
--

CREATE TABLE `fche040111_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fche040111_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040112s`
--

CREATE TABLE `fche040112s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hanus` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hanus_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hanus_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `n` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `n_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `n_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iodine_cal` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iodine_cal_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iodine_cal_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iodine` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iodine_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iodine_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040112_finances`
--

CREATE TABLE `fche040112_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fche040112_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040113s`
--

CREATE TABLE `fche040113s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alcohol` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alcohol_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alcohol_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `n` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `n_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `n_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acid_cal` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acid_cal_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acid_cal_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acid` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acid_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acid_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040113_finances`
--

CREATE TABLE `fche040113_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fche040113_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040114s`
--

CREATE TABLE `fche040114s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ki` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ki_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ki_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `water` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `water_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `water_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `n` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `n_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `n_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `peroxide_cal` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `peroxide_cal_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `peroxide_cal_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `peroxide` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `peroxide_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `peroxide_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040114_finances`
--

CREATE TABLE `fche040114_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fche040114_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040115s`
--

CREATE TABLE `fche040115s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `container` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `container_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `container_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w1_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w1_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_container` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_container_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_container_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w2_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w2_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moisture_cal` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moisture_cal_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moisture_cal_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moisture` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moisture_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moisture_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040115_finances`
--

CREATE TABLE `fche040115_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fche040115_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040116s`
--

CREATE TABLE `fche040116s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `distilled` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `distilled_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `distilled_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buffer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buffer_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buffer_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `indicator` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `indicator_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `indicator_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edta` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edta_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edta_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hardness` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hardness_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hardness_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ca` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ca_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ca_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mg` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mg_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mg_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040116_finances`
--

CREATE TABLE `fche040116_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fche040116_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040117s`
--

CREATE TABLE `fche040117s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_cal` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_cal_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_cal_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dissolved_cal` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dissolved_cal_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dissolved_cal_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `suspended_cal` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `suspended_cal_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `suspended_cal_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dissolved` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dissolved_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dissolved_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `suspended` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `suspended_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `suspended_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040117_finances`
--

CREATE TABLE `fche040117_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fche040117_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040118s`
--

CREATE TABLE `fche040118s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `calibration` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `calibration_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `calibration_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temperature` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temperature_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temperature_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ph` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ph_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ph_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040118_finances`
--

CREATE TABLE `fche040118_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fche040118_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040119s`
--

CREATE TABLE `fche040119s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `calibration` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `calibration_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `calibration_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temperature` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temperature_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temperature_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conductivity` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conductivity_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conductivity_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040119_finances`
--

CREATE TABLE `fche040119_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fche040119_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040120s`
--

CREATE TABLE `fche040120s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `silver` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `silver_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `silver_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitric` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitric_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitric_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `n` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `n_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `n_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salt_cal` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salt_cal_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salt_cal_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salt_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salt_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040120_finances`
--

CREATE TABLE `fche040120_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fche040120_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040121s`
--

CREATE TABLE `fche040121s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `v0` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `v0_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `v0_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `v1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `v1_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `v1_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mass` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mass_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mass_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sugar_cal` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sugar_cal_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sugar_cal_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sugar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sugar_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sugar_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040121_finances`
--

CREATE TABLE `fche040121_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fche040121_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040122s`
--

CREATE TABLE `fche040122s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mgo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mgo_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mgo_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `water` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `water_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `water_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_weight` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_weight_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_weight_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filtrate` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filtrate_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filtrate_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `h2s04` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `h2s04_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `h2s04_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chlo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chlo_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chlo_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `koh` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `koh_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `koh_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `digestion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `digestion_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `digestion_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titer_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titer_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `k` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `k_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `k_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wt_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wt_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coefficient` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coefficient_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coefficient_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caffeine_cal` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caffeine_cal_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caffeine_cal_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caffeine` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caffeine_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caffeine_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040122_finances`
--

CREATE TABLE `fche040122_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fche040122_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040123s`
--

CREATE TABLE `fche040123s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gelatin` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gelatin_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gelatin_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kaolin` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kaolin_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kaolin_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `indigo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `indigo_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `indigo_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `potassium` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `potassium_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `potassium_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filtratea` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filtratea_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filtratea_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filtrateb` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filtrateb_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filtrateb_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tannin_cal` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tannin_cal_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tannin_cal_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tannin` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tannin_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tannin_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040123_finances`
--

CREATE TABLE `fche040123_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fche040123_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040124s`
--

CREATE TABLE `fche040124s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `water` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filtrate` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filtrate_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filtrate_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `naoh` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `naoh_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `naoh_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titre` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titre_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titre_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `factor` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `factor_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `factor_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acidity_cal` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acidity_cal_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acidity_cal_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acidity` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acidity_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acidity_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040124_finances`
--

CREATE TABLE `fche040124_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fche040124_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040125s`
--

CREATE TABLE `fche040125s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dilution` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dilution_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dilution_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temperature` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temperature_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temperature_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brix_reading` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brix_reading_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brix_reading_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brix` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brix_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brix_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040125_finances`
--

CREATE TABLE `fche040125_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fche040125_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040126s`
--

CREATE TABLE `fche040126s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cru` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cru_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cru_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hcl` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hcl_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hcl_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cruplussample` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cruplussample_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cruplussample_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `residue` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `residue_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `residue_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ash_cal` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ash_cal_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ash_cal_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ash` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ash_test1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ash_test2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fche040126_finances`
--

CREATE TABLE `fche040126_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fche040126_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fidsl_general_stocks`
--

CREATE TABLE `fidsl_general_stocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_stock` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fidsl_general_stocks`
--

INSERT INTO `fidsl_general_stocks` (`id`, `product_name`, `date`, `total_stock`, `remark`, `created_at`, `updated_at`) VALUES
(2, 'Tissue', '2022-06-29', '20', 'test', '2022-06-29 10:06:08', '2022-06-29 22:34:12'),
(3, 'Snow Tour', '2022-06-30', '60', 'test', '2022-06-29 22:36:02', '2022-06-29 22:36:58'),
(6, 'testing', '2022-10-18', '190', 're', '2022-10-18 02:41:22', '2022-10-18 02:42:19');

-- --------------------------------------------------------

--
-- Table structure for table `f_mar0501s`
--

CREATE TABLE `f_mar0501s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `report_no` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysis_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issue_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `results` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apc_test` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apc_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apc_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coliform_test` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coliform_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coliform_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ecoli_test` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ecoli_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ecoli_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sta_test` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sta_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sta_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sal_test` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sal_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sal_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yeast_test` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yeast_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yeast_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkby1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkby2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `f_mar0501_finances`
--

CREATE TABLE `f_mar0501_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `f_mar0501_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gc_test_methods`
--

CREATE TABLE `gc_test_methods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gc_test_methods`
--

INSERT INTO `gc_test_methods` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'By Gas Charomatography', '2022-12-15 08:37:35', '2022-12-15 08:37:35');

-- --------------------------------------------------------

--
-- Table structure for table `gc_test_parameters`
--

CREATE TABLE `gc_test_parameters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gc_test_parameters`
--

INSERT INTO `gc_test_parameters` (`id`, `name`, `created_at`, `updated_at`) VALUES
(3, 'Fatty Acid Profile', '2022-12-15 08:38:42', '2022-12-15 08:38:42'),
(4, 'C 12:0 (Lauric)', '2022-12-15 08:39:37', '2022-12-15 08:39:37'),
(5, 'C 14:0 (Myristic)', '2022-12-15 08:40:06', '2022-12-15 08:40:06'),
(6, 'C 14:1 (Myristoleic)', '2022-12-15 08:40:30', '2022-12-15 08:40:30'),
(7, 'C 16:0 (Palmitic)', '2022-12-15 08:40:46', '2022-12-15 08:40:46'),
(8, 'C 16:1 (Palmitoleic)', '2022-12-15 08:41:07', '2022-12-15 08:41:07'),
(9, 'C 18:0 (Stearic)', '2022-12-15 08:41:24', '2022-12-15 08:41:24'),
(10, 'C 18:1 (Oleic-trans)', '2022-12-15 08:41:50', '2022-12-15 08:41:50'),
(11, 'C 18:1 (Oleic)', '2022-12-15 08:42:07', '2022-12-15 08:42:07'),
(12, 'C 18:2 (Linoleic-trans)', '2022-12-15 08:42:36', '2022-12-15 08:42:36'),
(13, 'C 18:2 (Linoleic)', '2022-12-15 08:42:44', '2022-12-15 08:42:44'),
(14, 'C 18:3 (Linoleic)', '2022-12-15 08:43:01', '2022-12-15 08:43:01'),
(15, 'C 20:0 (Arachidic)', '2022-12-15 08:43:36', '2022-12-15 08:43:36'),
(16, 'C 20:1 (Paullinic)', '2022-12-15 08:44:00', '2022-12-15 08:44:00'),
(17, 'C 20:4 (Arachidonic)', '2022-12-15 08:44:25', '2022-12-15 08:44:25'),
(18, 'C 22:0 (Bchenic)', '2022-12-15 08:44:51', '2022-12-15 08:44:51'),
(19, 'C 22:1 (Erucic)', '2022-12-15 08:45:11', '2022-12-15 08:45:47'),
(20, 'C 24:0 (Lignoceric)', '2022-12-15 08:45:32', '2022-12-15 08:45:32');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Fruit & Vegetables', '2022-07-09 03:10:47', '2022-07-09 03:10:47'),
(3, 'Meat & Seafood', '2022-07-09 03:10:57', '2022-07-09 03:10:57'),
(4, 'Prepared Food', '2022-07-09 03:11:17', '2022-07-09 03:11:17'),
(5, 'Snacks', '2022-07-09 03:11:26', '2022-07-09 03:11:26'),
(6, 'Food Ingredients, Additives & Flavours', '2022-07-09 03:12:18', '2022-07-09 03:12:18');

-- --------------------------------------------------------

--
-- Table structure for table `heavy_metal_test_parameters`
--

CREATE TABLE `heavy_metal_test_parameters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `heavy_metal_test_parameters`
--

INSERT INTO `heavy_metal_test_parameters` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Arsenic (As)', '2022-12-15 08:04:50', '2022-12-15 08:04:50'),
(3, 'Cadmium (Cd)', '2022-12-15 08:05:06', '2022-12-15 08:05:06'),
(4, 'Chromium (Cr)', '2022-12-15 08:05:21', '2022-12-15 08:05:21'),
(5, 'Mercury (Hg)', '2022-12-15 08:05:41', '2022-12-15 08:05:41'),
(6, 'Lead (Pb)', '2022-12-15 08:05:56', '2022-12-15 08:05:56'),
(7, 'Calcium (Ca)', '2022-12-15 08:06:13', '2022-12-15 08:06:13'),
(8, 'Potassium (K)', '2022-12-15 08:06:27', '2022-12-15 08:06:27'),
(9, 'Magnesium (Mg)', '2022-12-15 08:06:43', '2022-12-15 08:06:43'),
(10, 'Iron (Fe)', '2022-12-15 08:06:58', '2022-12-15 08:06:58'),
(11, 'Zinc (Zn)', '2022-12-15 08:07:11', '2022-12-15 08:07:11'),
(12, 'Selenium (Se)', '2022-12-15 08:07:27', '2022-12-15 08:07:27'),
(13, 'Copper (Cu)', '2022-12-15 08:07:41', '2022-12-15 08:07:41'),
(14, 'Sodium (Na)', '2022-12-15 08:07:54', '2022-12-15 08:07:54');

-- --------------------------------------------------------

--
-- Table structure for table `h_m_mineral_car0500s`
--

CREATE TABLE `h_m_mineral_car0500s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `report_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysis_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issue_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `as_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `as_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `as_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `as_unit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `as_limit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ca_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ca_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ca_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ca_unit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ca_limit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cd_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cd_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cd_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cd_unit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cd_limit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cr_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cr_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cr_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cr_unit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cr_limit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cu_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cu_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cu_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cu_unit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cu_limit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fe_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fe_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fe_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fe_unit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fe_limit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pb_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pb_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pb_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pb_unit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pb_limit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mg_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mg_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mg_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mg_unit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mg_limit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hg_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hg_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hg_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hg_unit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hg_limit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `k_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `k_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `k_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `k_unit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `k_limit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `se_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `se_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `se_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `se_unit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `se_limit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `na_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `na_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `na_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `na_unit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `na_limit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zn_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zn_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zn_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zn_unit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zn_limit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkby1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkby2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `h_m_mineral_methods`
--

CREATE TABLE `h_m_mineral_methods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `h_m_mineral_methods`
--

INSERT INTO `h_m_mineral_methods` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Test', '2022-07-13 22:06:11', '2022-07-13 22:06:11'),
(2, 'Lorem', '2022-07-13 22:06:19', '2022-07-13 22:06:19'),
(3, 'Testing', '2022-08-02 00:23:13', '2022-08-02 00:23:13');

-- --------------------------------------------------------

--
-- Table structure for table `h_m_mineral_tests`
--

CREATE TABLE `h_m_mineral_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `test_parameter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `h_m_m_car0500_finances`
--

CREATE TABLE `h_m_m_car0500_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hmm_car0500_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `h_m_m_car0500_tests`
--

CREATE TABLE `h_m_m_car0500_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hmm_car0500_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_parameter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'car0500_test_id',
  `test_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detection_limit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `h_m_m_che040036s`
--

CREATE TABLE `h_m_m_che040036s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitric_volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitric_volume_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitric_volume_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hydrogen_volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hydrogen_volume_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hydrogen_volume_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `df` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `df_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `df_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sd` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sd_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sd_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `concentration` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `concentration_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `concentration_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reagent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reagent_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reagent_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `real_concentration` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `real_concentration_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `real_concentration_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fe` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fe_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fe_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `h_m_m_che040036_finances`
--

CREATE TABLE `h_m_m_che040036_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hmm_che040036_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `h_m_m_che040036_tests`
--

CREATE TABLE `h_m_m_che040036_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hmm_che040036_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_parameter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_test` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_test` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `h_m_m_che040037s`
--

CREATE TABLE `h_m_m_che040037s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitric_volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitric_volume_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitric_volume_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hydrogen_volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hydrogen_volume_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hydrogen_volume_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `df` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `df_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `df_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sd` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sd_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sd_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `concentration` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `concentration_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `concentration_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reagent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reagent_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reagent_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `real_concentration` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `real_concentration_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `real_concentration_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zn` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zn_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zn_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `h_m_m_che040037s`
--

INSERT INTO `h_m_m_che040037s` (`id`, `job_number`, `sample_name`, `customer_id`, `received_date`, `initiated_date`, `reported_date`, `method_id`, `weight`, `weight_1`, `weight_2`, `nitric_volume`, `nitric_volume_1`, `nitric_volume_2`, `hydrogen_volume`, `hydrogen_volume_1`, `hydrogen_volume_2`, `volume`, `volume_1`, `volume_2`, `df`, `df_1`, `df_2`, `sd`, `sd_1`, `sd_2`, `concentration`, `concentration_1`, `concentration_2`, `reagent`, `reagent_1`, `reagent_2`, `real_concentration`, `real_concentration_1`, `real_concentration_2`, `zn`, `zn_1`, `zn_2`, `remark`, `analysed_sign`, `analysed_date`, `analysed_name`, `checked_sign`, `checked_date`, `checked_name`, `created_at`, `updated_at`) VALUES
(4, 'C-04-01/37 test', 'sa', NULL, '2022-11-02', '2022-11-02', '2022-11-02', 'Atomic Absorption Spectrophotometer (AAS-Flame)', 'Sample Weight (g)', '1 test', '2 test', 'Volume of Nitric Acid (ml)', '1', '2', 'Volume of Hydrogen Peroxide (ml)', '1', '2', 'Make up Volume', '1', '2', 'Dilution Factor(df)=( Total Volume/sample wt ) =( )', '1', '2', 'Self-Dilution ( )', '1', '2', 'Concentration from instrument (a)', '1', '2', 'Reagent Blank (b)', '1', '2', 'Real concentration = (a-b) * df', '1', '2', 'Zinc (Zn) mg/kg', '1', '2', 're', '1667399719_sign-white.png', '2022-11-02', 'ana', '1667399719_sign-white.png', '2022-11-02', 'checked', '2022-11-02 07:56:52', '2022-11-02 08:05:19');

-- --------------------------------------------------------

--
-- Table structure for table `h_m_m_che040037_finances`
--

CREATE TABLE `h_m_m_che040037_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hmm_che040037_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `h_m_m_che040037_finances`
--

INSERT INTO `h_m_m_che040037_finances` (`id`, `hmm_che040037_id`, `voucher`, `amount`, `date`, `remark`, `test_type`, `voucher_2`, `amount_2`, `date_2`, `remark_2`, `test_type_2`, `status`, `created_at`, `updated_at`) VALUES
(4, '4', 'First', '1000', '2022-11-02', 're', 'test', 'Second', '1000', '2022-11-02', 'second', 'test', NULL, '2022-11-02 07:56:52', '2022-11-02 08:36:41');

-- --------------------------------------------------------

--
-- Table structure for table `h_m_m_che040037_tests`
--

CREATE TABLE `h_m_m_che040037_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hmm_che040037_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_parameter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_test` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_test` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `h_m_m_che040040s`
--

CREATE TABLE `h_m_m_che040040s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitric_volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitric_volume_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitric_volume_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hydrogen_volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hydrogen_volume_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hydrogen_volume_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `df` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `df_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `df_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sd` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sd_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sd_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `concentration` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `concentration_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `concentration_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reagent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reagent_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reagent_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `real_concentration` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `real_concentration_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `real_concentration_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `arsenic` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `arsenic_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `arsenic_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `h_m_m_che040040_finances`
--

CREATE TABLE `h_m_m_che040040_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hmm_che040040_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `h_m_m_che040040_tests`
--

CREATE TABLE `h_m_m_che040040_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hmm_che040040_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_parameter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_test` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_test` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `h_m_m_che040042s`
--

CREATE TABLE `h_m_m_che040042s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitric_volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitric_volume_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitric_volume_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hydrogen_volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hydrogen_volume_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hydrogen_volume_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `df` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `df_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `df_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sd` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sd_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sd_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `concentration` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `concentration_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `concentration_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reagent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reagent_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reagent_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `real_concentration` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `real_concentration_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `real_concentration_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cd` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cd_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cd_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `h_m_m_che040042_finances`
--

CREATE TABLE `h_m_m_che040042_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hmm_che040042_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `h_m_m_che040042_tests`
--

CREATE TABLE `h_m_m_che040042_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hmm_che040042_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_parameter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_test` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_test` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `h_m_m_che040043s`
--

CREATE TABLE `h_m_m_che040043s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitric_volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitric_volume_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitric_volume_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hydrogen_volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hydrogen_volume_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hydrogen_volume_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `df` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `df_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `df_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sd` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sd_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sd_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `concentration` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `concentration_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `concentration_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reagent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reagent_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reagent_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `real_concentration` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `real_concentration_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `real_concentration_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cr` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cr_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cr_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `h_m_m_che040043_finances`
--

CREATE TABLE `h_m_m_che040043_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hmm_che040043_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `h_m_m_che040043_tests`
--

CREATE TABLE `h_m_m_che040043_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hmm_che040043_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_parameter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_test` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_test` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `h_m_m_che040044s`
--

CREATE TABLE `h_m_m_che040044s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitric_volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitric_volume_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitric_volume_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hydrogen_volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hydrogen_volume_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hydrogen_volume_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `df` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `df_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `df_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sd` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sd_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sd_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `concentration` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `concentration_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `concentration_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reagent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reagent_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reagent_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `real_concentration` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `real_concentration_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `real_concentration_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cu_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cu_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `h_m_m_che040044_finances`
--

CREATE TABLE `h_m_m_che040044_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hmm_che040044_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `h_m_m_che040044_tests`
--

CREATE TABLE `h_m_m_che040044_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hmm_che040044_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_parameter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_test` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_test` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `h_m_m_che040045s`
--

CREATE TABLE `h_m_m_che040045s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitric_volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitric_volume_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitric_volume_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hydrogen_volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hydrogen_volume_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hydrogen_volume_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `df` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `df_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `df_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sd` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sd_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sd_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `concentration` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `concentration_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `concentration_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reagent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reagent_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reagent_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `real_concentration` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `real_concentration_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `real_concentration_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pb` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pb_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pb_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `h_m_m_che040045_finances`
--

CREATE TABLE `h_m_m_che040045_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hmm_che040045_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `h_m_m_che040045_tests`
--

CREATE TABLE `h_m_m_che040045_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hmm_che040045_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_parameter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_test` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_test` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `h_m_m_che040047s`
--

CREATE TABLE `h_m_m_che040047s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitric_volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitric_volume_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitric_volume_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hydrogen_volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hydrogen_volume_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hydrogen_volume_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `df` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `df_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `df_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sd` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sd_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sd_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `concentration` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `concentration_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `concentration_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reagent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reagent_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reagent_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `real_concentration` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `real_concentration_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `real_concentration_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hg` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hg_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hg_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `h_m_m_che040047_finances`
--

CREATE TABLE `h_m_m_che040047_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hmm_che040047_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `h_m_m_che040047_tests`
--

CREATE TABLE `h_m_m_che040047_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hmm_che040047_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_parameter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_test` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_test` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `h_m_m_che040048s`
--

CREATE TABLE `h_m_m_che040048s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitric_volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitric_volume_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitric_volume_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hydrogen_volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hydrogen_volume_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hydrogen_volume_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `df` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `df_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `df_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sd` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sd_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sd_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `concentration` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `concentration_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `concentration_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reagent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reagent_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reagent_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `real_concentration` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `real_concentration_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `real_concentration_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `k` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `k_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `k_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `h_m_m_che040048_finances`
--

CREATE TABLE `h_m_m_che040048_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hmm_che040048_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `h_m_m_che040048_tests`
--

CREATE TABLE `h_m_m_che040048_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hmm_che040048_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_parameter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_test` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_test` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `h_m_m_che040049s`
--

CREATE TABLE `h_m_m_che040049s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitric_volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitric_volume_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitric_volume_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hydrogen_volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hydrogen_volume_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hydrogen_volume_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `df` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `df_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `df_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sd` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sd_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sd_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `concentration` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `concentration_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `concentration_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reagent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reagent_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reagent_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `real_concentration` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `real_concentration_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `real_concentration_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `se` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `se_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `se_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `h_m_m_che040049_finances`
--

CREATE TABLE `h_m_m_che040049_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hmm_che040049_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `h_m_m_che040049_tests`
--

CREATE TABLE `h_m_m_che040049_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hmm_che040049_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_parameter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_test` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_test` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `h_m_m_che040050s`
--

CREATE TABLE `h_m_m_che040050s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitric_volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitric_volume_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitric_volume_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hydrogen_volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hydrogen_volume_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hydrogen_volume_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `df` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `df_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `df_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sd` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sd_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sd_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `concentration` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `concentration_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `concentration_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reagent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reagent_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reagent_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `real_concentration` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `real_concentration_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `real_concentration_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `na` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `na_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `na_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `h_m_m_che040050s`
--

INSERT INTO `h_m_m_che040050s` (`id`, `job_number`, `sample_name`, `customer_id`, `received_date`, `initiated_date`, `reported_date`, `method_id`, `weight`, `weight_1`, `weight_2`, `nitric_volume`, `nitric_volume_1`, `nitric_volume_2`, `hydrogen_volume`, `hydrogen_volume_1`, `hydrogen_volume_2`, `volume`, `volume_1`, `volume_2`, `df`, `df_1`, `df_2`, `sd`, `sd_1`, `sd_2`, `concentration`, `concentration_1`, `concentration_2`, `reagent`, `reagent_1`, `reagent_2`, `real_concentration`, `real_concentration_1`, `real_concentration_2`, `na`, `na_1`, `na_2`, `remark`, `analysed_sign`, `analysed_date`, `analysed_name`, `checked_sign`, `checked_date`, `checked_name`, `created_at`, `updated_at`) VALUES
(4, 'C-001 test', 'sa', NULL, '2022-11-21', '2022-11-21', '2022-11-21', 'Atomic Absorption Spectrophotometer (AAS-Flame)', 'Sample Weight (g)', '12', '22', 'Volume of Nitric Acid (ml)', '1', '22', 'Volume of Hydrogen Peroxide (ml)', '1', '2', 'Make up Volume', '1', '2', 'Dilution Factor(df)=( Total Volume/sample wt ) =( )', '12', '22', 'Self-Dilution ( )', '1', '2', 'Concentration from instrument (a)', '12', '2', 'Reagent Blank (b)', '1', '2', 'Real concentration = (a-b) * df', '1', '2', 'Sodium (Na) mg/kg', '1', '2', NULL, '1669044869_sign-white.png', '2022-11-21', 'an', '1669044869_sign-white.png', '2022-11-21', 'checked', '2022-11-21 09:00:59', '2022-11-21 09:04:29');

-- --------------------------------------------------------

--
-- Table structure for table `h_m_m_che040050_finances`
--

CREATE TABLE `h_m_m_che040050_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hmm_che040050_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `h_m_m_che040050_finances`
--

INSERT INTO `h_m_m_che040050_finances` (`id`, `hmm_che040050_id`, `voucher`, `amount`, `date`, `remark`, `test_type`, `voucher_2`, `amount_2`, `date_2`, `remark_2`, `test_type_2`, `status`, `created_at`, `updated_at`) VALUES
(4, '4', 'First', '1000', '2022-11-21', 're', 'test', 'Second', '2000', '2022-11-21', 're', 'test', NULL, '2022-11-21 09:00:59', '2022-11-21 09:13:50');

-- --------------------------------------------------------

--
-- Table structure for table `h_m_m_che040050_tests`
--

CREATE TABLE `h_m_m_che040050_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hmm_che040050_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_parameter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_test` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_test` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `h_m_m_che040141s`
--

CREATE TABLE `h_m_m_che040141s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitric_volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitric_volume_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitric_volume_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hydrogen_volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hydrogen_volume_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hydrogen_volume_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `df` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `df_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `df_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sd` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sd_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sd_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `concentration` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `concentration_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `concentration_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reagent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reagent_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reagent_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `real_concentration` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `real_concentration_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `real_concentration_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ca` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ca_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ca_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `h_m_m_che040141_finances`
--

CREATE TABLE `h_m_m_che040141_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hmm_che040141_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receive_voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receive_voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `h_m_m_che040146s`
--

CREATE TABLE `h_m_m_che040146s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiated_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitric_volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitric_volume_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitric_volume_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hydrogen_volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hydrogen_volume_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hydrogen_volume_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `df` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `df_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `df_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sd` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sd_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sd_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `concentration` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `concentration_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `concentration_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reagent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reagent_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reagent_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `real_concentration` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `real_concentration_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `real_concentration_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mg` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mg_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mg_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysed_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `h_m_m_che040146_finances`
--

CREATE TABLE `h_m_m_che040146_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hmm_che040146_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receive_voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receive_voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m010101_counts`
--

CREATE TABLE `m010101_counts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `m010101_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dilution` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plate1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plate2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m010101_finances`
--

CREATE TABLE `m010101_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `m010101_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m010101_s`
--

CREATE TABLE `m010101_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysis_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `report_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `incubation_hours` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_homogenate` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diluent_homogenate` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `calculation` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analyzed_by` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analyzed_position` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analyzed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analyzed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_by` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_position` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m020101_counts`
--

CREATE TABLE `m020101_counts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `m020101_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dilution` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plate1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plate2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m020101_finances`
--

CREATE TABLE `m020101_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `m020101_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m020101_s`
--

CREATE TABLE `m020101_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysis_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `report_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `incubation_hours` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_homogenate` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diluent_homogenate` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `calculation` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analyzed_by` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analyzed_position` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analyzed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analyzed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_by` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_position` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m030101_counts`
--

CREATE TABLE `m030101_counts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `m030101_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dilution` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plate1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plate2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m030101_finances`
--

CREATE TABLE `m030101_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `m030101_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m030101_s`
--

CREATE TABLE `m030101_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysis_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `report_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `incubation_hours` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_homogenate` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diluent_homogenate` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `calculation` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analyzed_by` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analyzed_position` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analyzed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analyzed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_by` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_position` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m040101_counts`
--

CREATE TABLE `m040101_counts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `m040101_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dilution` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plate1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plate2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m040101_finances`
--

CREATE TABLE `m040101_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `m040101_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m040101_s`
--

CREATE TABLE `m040101_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysis_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `report_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `incubation_hours` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_homogenate` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diluent_homogenate` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `calculation` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analyzed_by` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analyzed_position` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analyzed_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analyzed_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_by` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_position` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contact_person` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ms_no` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ms_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `member_type_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nrc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_reg` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_regdate` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_item` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_no` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entrance_fee` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `annual_fee` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exp_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_address_myan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ms_no_myan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ms_date_myan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_myan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax_myan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nrc_myan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_reg_myan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_regdate_myan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `contact_person`, `ms_no`, `ms_date`, `member_type_id`, `category_id`, `nrc`, `business_reg`, `business_regdate`, `company_name_address`, `product_item`, `phone_no`, `fax`, `email`, `entrance_fee`, `annual_fee`, `exp_date`, `photo`, `status`, `name_address_myan`, `ms_no_myan`, `ms_date_myan`, `phone_myan`, `fax_myan`, `nrc_myan`, `business_reg_myan`, `business_regdate_myan`, `created_at`, `updated_at`) VALUES
(7, 'Hla Hla', 'CTN 001', '2022-07-05', '2', '7', '12/LA(N)000000', '001', '2022-07-05', 'Hla Company', 'pro', '09799123123', 'fax', 'yyankin222@gmail.com', '2000', NULL, NULL, '1656949039_woman.png', '1', 'လှ ကုမ္ပဏီ', 'CTN ၀၀၁', '၅-၇-၂၀၂၂', '၀၉၇၉၉၁၂၃၁၂၃', 'ဖက်စ်', '၁၂/လ(နိုင်)၀၀၀၀၀၀', '၀၀၁', '၇-၇-၂၀၂၂', '2022-07-04 09:07:19', '2022-07-07 03:02:36'),
(9, 'Min Min', '002', '2022-07-08', '3', '9', '12/Min(N)000000', '002', '2022-07-08', 'Min', 'Product', '09799', '-', 'yaminphyummcities@gmail.com', '1000', NULL, NULL, '1657266125_millennial.png', '1', 'Yangon', '၀၀၁', '၇-၈-၂၀၂၂', '၀၉၇၉၉', NULL, NULL, NULL, NULL, '2022-07-08 01:12:06', '2022-07-09 03:32:44'),
(10, 'Lorem', 'CTN-003', '2022-07-08', '3', '7', '12/LOR(N)111111', '003', '2022-07-08', 'Myanmar', 'lorem', '09123123', NULL, 'lorem@gmail.com', '10000', NULL, NULL, '1657266306_woman.png', '1', 'Lorem', '003', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-08 01:15:06', '2022-07-08 01:16:42'),
(18, 'Test', '001', '2022-09-27', '2', '7', '12/TEST(N)123456', 'business', '2022-09-27', 'company name', 'product item', '0979991231', 'fax', 'yaminphyummcities@gmail.com', '10000', NULL, NULL, '1664287485_woman.png', '1', 'test', '၀၀၁', '၂၇-၉-၂၀၂၀', '၀၉၇၉၉၉၁၂၃၁', 'ဖက်စ်', '၁၂/တအစ(နိုင်)၁၂၃၄၅၆', '၀၀၁', '၂၇-၉-၂၀၂၀', '2022-09-27 07:34:45', '2022-09-28 09:37:47'),
(21, 'Ni', '000', NULL, '1', '7', NULL, NULL, NULL, 'ni', 'ni', '09', 'fax', 'ni@gmail.com', '100', NULL, NULL, '1664291712_user.png', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-27 08:45:12', '2022-10-18 02:31:16');

-- --------------------------------------------------------

--
-- Table structure for table `member_types`
--

CREATE TABLE `member_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `member_type_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `member_types`
--

INSERT INTO `member_types` (`id`, `member_type_name`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Individual(တစ်သီးပုဂ္ဂလ)', '1', '2022-06-27 22:40:43', '2022-07-04 09:07:59'),
(2, 'Individual Associate(တစ်သီးပုဂ္ဂလ Associate)', '1', '2022-06-27 22:40:51', '2022-07-04 09:08:09'),
(3, 'Corporate(ကုမ္ပဏီ)', '1', '2022-07-04 09:08:23', '2022-07-04 09:08:23'),
(4, 'Corporate Associate(ကုမ္ပဏီ Associate)', '1', '2022-07-04 09:09:09', '2022-07-04 09:09:09'),
(5, 'Foreign Corporate (နိုင်ငံခြား ကုမ္ပဏီ)', '1', '2022-07-04 09:09:21', '2022-07-04 09:09:21'),
(6, 'Foreign Corporate Associate (နိုင်ငံခြား ကုမ္ပဏီ Associate)', '1', '2022-07-04 09:09:36', '2022-07-04 09:09:36');

-- --------------------------------------------------------

--
-- Table structure for table `micro_test_methods`
--

CREATE TABLE `micro_test_methods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `micro_test_methods`
--

INSERT INTO `micro_test_methods` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'AOAC-990.12 (Petrifilm Method)', '2022-12-15 09:48:02', '2022-12-15 09:48:02'),
(3, 'AOAC-991.14 (Petrifilm Method)', '2022-12-15 09:48:24', '2022-12-15 09:48:24'),
(4, 'AOAC-2003.07', '2022-12-15 09:48:51', '2022-12-15 09:48:51'),
(5, 'AOAC-2003.08', '2022-12-15 09:49:01', '2022-12-15 09:49:01'),
(6, 'AOAC-2003.11', '2022-12-15 09:49:09', '2022-12-15 09:49:09'),
(7, 'AOAC-2000.06', '2022-12-15 09:49:21', '2022-12-15 09:49:21'),
(8, 'FDA-BAM (Online Mannual April, 2001)', '2022-12-15 09:50:02', '2022-12-15 09:50:02');

-- --------------------------------------------------------

--
-- Table structure for table `micro_test_parameters`
--

CREATE TABLE `micro_test_parameters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `micro_test_parameters`
--

INSERT INTO `micro_test_parameters` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Aerobic Plate Count (APC)', '2022-12-15 09:45:52', '2022-12-15 09:45:52'),
(3, 'Coliform', '2022-12-15 09:46:02', '2022-12-15 09:46:02'),
(4, 'Escherichia coli (E.coli)', '2022-12-15 09:46:30', '2022-12-15 09:46:30'),
(5, 'Staphylococcus aureus', '2022-12-15 09:46:58', '2022-12-15 09:46:58'),
(6, 'Salmonella', '2022-12-15 09:47:12', '2022-12-15 09:47:12'),
(7, 'Yeast and Mould', '2022-12-15 09:47:24', '2022-12-15 09:47:24');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_05_19_072939_create_ad0101s_table', 1),
(6, '2022_05_20_081038_create_ad0201s_table', 1),
(7, '2022_05_21_162404_create_car0501_tests_table', 1),
(8, '2022_05_22_150717_create_car0501s_table', 1),
(9, '2022_05_24_063608_create_h_m_mineral_methods_table', 1),
(10, '2022_05_24_073113_create_h_m_mineral_tests_table', 1),
(11, '2022_05_24_094159_create_car0501_test_fills_table', 1),
(12, '2022_05_25_063649_create_h_m_mineral_car0500s_table', 1),
(13, '2022_05_25_063747_create_h_m_m_car0500_tests_table', 1),
(14, '2022_05_25_144033_create_h_m_m_che040040s_table', 1),
(15, '2022_05_25_145047_create_h_m_m_che040040_tests_table', 1),
(16, '2022_05_26_085645_create_h_m_m_che040045s_table', 1),
(17, '2022_05_26_092040_create_h_m_m_che040045_tests_table', 1),
(18, '2022_05_26_135712_create_h_m_m_che040042s_table', 1),
(19, '2022_05_26_135902_create_h_m_m_che040042_tests_table', 1),
(20, '2022_05_26_151801_create_h_m_m_che040036s_table', 1),
(21, '2022_05_26_151820_create_h_m_m_che040036_tests_table', 1),
(22, '2022_05_28_154652_create_h_m_m_che040048s_table', 1),
(23, '2022_05_28_154726_create_h_m_m_che040048_tests_table', 1),
(24, '2022_05_29_143855_create_h_m_m_che040043s_table', 1),
(25, '2022_05_29_143923_create_h_m_m_che040043_tests_table', 1),
(26, '2022_05_29_150641_create_h_m_m_che040037s_table', 1),
(27, '2022_05_29_150711_create_h_m_m_che040037_tests_table', 1),
(28, '2022_05_29_155404_create_h_m_m_che040049s_table', 1),
(29, '2022_05_29_155435_create_h_m_m_che040049_tests_table', 1),
(30, '2022_05_30_044031_create_h_m_m_che040047s_table', 1),
(31, '2022_05_30_044044_create_h_m_m_che040047_tests_table', 1),
(32, '2022_05_30_050155_create_h_m_m_che040050s_table', 1),
(33, '2022_05_30_050204_create_h_m_m_che040050_tests_table', 1),
(34, '2022_05_30_052135_create_h_m_m_che040044s_table', 1),
(35, '2022_05_30_052141_create_h_m_m_che040044_tests_table', 1),
(36, '2022_05_30_141729_create_member_types_table', 1),
(37, '2022_05_31_160132_create_permission_tables', 1),
(38, '2022_06_05_143620_create_m_w_mar0501s_table', 1),
(39, '2022_06_05_144346_create_m_w_mar0501_tests_table', 1),
(40, '2022_06_06_145958_create_m_w_m010101_s_table', 1),
(41, '2022_06_06_150924_create_m_w_m010101_counts_table', 1),
(42, '2022_06_24_144917_create_members_table', 1),
(43, '2022_06_24_145923_create_categories_table', 1),
(44, '2022_06_25_085847_create_annual_fees_table', 1),
(45, '2022_06_28_145140_create_customers_table', 2),
(46, '2022_06_29_035653_create_ad_finances_table', 3),
(47, '2022_06_29_090255_create_fidsl_general_stocks_table', 4),
(48, '2022_06_29_143921_create_purchase_used_fidsl_general_stocks_table', 5),
(49, '2022_06_30_034121_create_car0501_finances_table', 6),
(50, '2022_06_30_053854_create_stock_chemical_lists_table', 7),
(51, '2022_06_30_072238_create_stock_purchase_used_chemical_lists_table', 8),
(52, '2022_06_30_081421_create_stock_glass_wares_table', 9),
(53, '2022_06_30_084750_create_purchase_used_glass_wares_table', 10),
(54, '2022_06_30_142646_create_stock_m_l_equipment_lists_table', 11),
(55, '2022_07_01_040714_create_purchase_used_m_l_equipment_lists_table', 12),
(56, '2022_07_01_044349_create_stock_c_l_equipment_lists_table', 13),
(57, '2022_07_01_051933_create_purchase_used_c_l_equipment_lists_table', 14),
(58, '2022_07_08_101929_create_groups_table', 15),
(59, '2022_07_12_051133_create_ad01341s_table', 16),
(60, '2022_07_12_051746_create_ad01341_tests_table', 16),
(61, '2022_07_12_053114_create_ad01341_finances_table', 17),
(62, '2022_07_12_083941_create_ad01087s_table', 18),
(63, '2022_07_12_084155_create_ad01087_tests_table', 18),
(64, '2022_07_12_084305_create_ad01087_finances_table', 18),
(65, '2022_07_13_065106_create_h_m_m_car0500_finances_table', 19),
(66, '2022_07_14_042242_create_h_m_m_che040040_finances_table', 20),
(67, '2022_07_14_045607_create_h_m_m_che040045_finances_table', 21),
(68, '2022_07_14_051643_create_h_m_m_che040042_finances_table', 22),
(69, '2022_07_14_060543_create_h_m_m_che040036_finances_table', 23),
(70, '2022_07_14_062157_create_h_m_m_che040048_finances_table', 24),
(71, '2022_07_14_064052_create_h_m_m_che040043_finances_table', 25),
(72, '2022_07_14_073026_create_h_m_m_che040037_finances_table', 26),
(73, '2022_07_14_080232_create_h_m_m_che040049_finances_table', 27),
(74, '2022_07_14_081629_create_h_m_m_che040047_finances_table', 28),
(75, '2022_07_14_082956_create_h_m_m_che040050_finances_table', 29),
(76, '2022_07_14_083128_create_h_m_m_che040044_finances_table', 29),
(77, '2022_07_14_143320_create_f_mar0501s_table', 30),
(78, '2022_07_14_143618_create_f_mar0501_tests_table', 30),
(79, '2022_07_14_143634_create_f_mar0501_finances_table', 30),
(80, '2022_07_14_161110_create_m010101_s_table', 31),
(81, '2022_07_15_042823_create_m010101_finances_table', 32),
(82, '2022_07_15_044040_create_m010101_counts_table', 33),
(83, '2022_07_15_045352_create_m0201010_s_table', 34),
(84, '2022_07_15_045400_create_m0201010_counts_table', 34),
(85, '2022_07_15_045411_create_m0201010_finances_table', 34),
(86, '2022_07_15_061515_create_m020101_s_table', 35),
(87, '2022_07_15_061644_create_m020101_counts_table', 36),
(88, '2022_07_15_061654_create_m020101_finances_table', 36),
(89, '2022_07_15_061852_create_m030101_finances_table', 37),
(90, '2022_07_15_061901_create_m030101_counts_table', 37),
(91, '2022_07_15_061911_create_m030101_s_table', 37),
(92, '2022_07_15_081712_create_m040101_s_table', 38),
(93, '2022_07_15_081719_create_m040101_counts_table', 38),
(94, '2022_07_15_081726_create_m040101_finances_table', 38),
(95, '2022_07_15_101429_create_f03m05s_table', 39),
(96, '2022_07_15_101459_create_f03m05_agars_table', 39),
(97, '2022_07_15_101510_create_f03m05_finances_table', 39),
(98, '2022_07_16_045243_create_f03m06s_table', 40),
(99, '2022_07_16_045251_create_f03m06_counts_table', 40),
(100, '2022_07_16_045301_create_f03m06_finances_table', 40),
(101, '2022_07_16_065648_create_fcar0501s_table', 41),
(102, '2022_07_16_065936_create_fcar0501_tests_table', 41),
(103, '2022_07_16_070118_create_fcar0501_finances_table', 41),
(104, '2022_07_16_151121_create_ad00879s_table', 42),
(105, '2022_07_16_152049_create_ad00879_tests_table', 43),
(106, '2022_07_16_152557_create_ad00879_finances_table', 44),
(107, '2022_07_16_160615_create_ad01288s_table', 45),
(108, '2022_07_16_160623_create_ad01288_tests_table', 45),
(109, '2022_07_16_160631_create_ad01288_finances_table', 45),
(110, '2022_07_17_142257_create_ad01354s_table', 46),
(111, '2022_07_17_142333_create_ad01354_tests_table', 46),
(112, '2022_07_17_142340_create_ad01354_finances_table', 46),
(113, '2022_07_17_150913_create_ad01351s_table', 47),
(114, '2022_07_17_150924_create_ad01351_tests_table', 47),
(115, '2022_07_17_151008_create_ad01351_finances_table', 47),
(116, '2022_07_18_032416_create_fche040001s_table', 48),
(117, '2022_07_18_032429_create_fche040001_tests_table', 48),
(118, '2022_07_18_032439_create_fche040001_finances_table', 48),
(119, '2022_07_18_065651_create_f04che02s_table', 49),
(120, '2022_07_18_065656_create_f04che02_tests_table', 49),
(121, '2022_07_18_065704_create_f04che02_finances_table', 49),
(122, '2022_07_18_083329_create_f04che06s_table', 50),
(123, '2022_07_18_083335_create_f04che06_tests_table', 50),
(124, '2022_07_18_083342_create_f04che06_finances_table', 50),
(125, '2022_07_19_050452_create_f05_s_table', 51),
(126, '2022_07_19_050458_create_f05_tests_table', 51),
(127, '2022_07_19_050507_create_f05_finances_table', 51),
(128, '2022_07_19_072320_create_f04che15s_table', 52),
(129, '2022_07_19_075545_create_f04che15_tests_table', 53),
(130, '2022_07_19_075553_create_f04che15_finances_table', 53),
(131, '2022_07_19_094054_create_fche0401s_table', 54),
(132, '2022_07_19_094102_create_fche0401_tests_table', 54),
(133, '2022_07_19_094112_create_fche0401_finances_table', 54),
(134, '2022_07_19_144039_create_f04che21s_table', 55),
(135, '2022_07_19_144045_create_f04che21_tests_table', 55),
(136, '2022_07_19_144053_create_f04che21_finances_table', 55),
(137, '2022_07_19_151759_create_f04che18s_table', 56),
(138, '2022_07_19_151805_create_f04che18_tests_table', 56),
(139, '2022_07_19_151814_create_f04che18_finances_table', 56),
(140, '2022_07_19_153639_create_f04che18s_table', 57),
(141, '2022_07_19_153713_create_f04che18_tests_table', 58),
(142, '2022_07_19_153727_create_f04che18_finances_table', 58),
(143, '2022_07_19_154636_create_f04che25s_table', 59),
(144, '2022_07_19_154642_create_f04che25_tests_table', 59),
(145, '2022_07_19_154648_create_f04che25_finances_table', 59),
(146, '2022_07_19_160611_create_f04che16s_table', 60),
(147, '2022_07_19_160904_create_f04che16_tests_table', 60),
(148, '2022_07_19_160912_create_f04che16_finances_table', 60),
(149, '2022_07_19_162332_create_f04che17s_table', 61),
(150, '2022_07_19_162336_create_f04che17_tests_table', 61),
(151, '2022_07_19_162342_create_f04che17_finances_table', 61),
(152, '2022_07_19_163919_create_f04che13s_table', 62),
(153, '2022_07_19_163931_create_f04che13_tests_table', 62),
(154, '2022_07_19_163937_create_f04che13_finances_table', 62),
(155, '2022_07_20_061109_create_fche040003s_table', 63),
(156, '2022_07_20_061115_create_fche040003_tests_table', 63),
(157, '2022_07_20_061123_create_fche040003_finances_table', 63),
(158, '2022_07_20_070338_create_fche040104s_table', 64),
(159, '2022_07_20_070354_create_fche040104_tests_table', 64),
(160, '2022_07_20_070406_create_fche040104_finances_table', 64),
(161, '2022_07_20_073019_create_fche040104s_table', 65),
(162, '2022_07_20_073029_create_fche040104_tests_table', 65),
(163, '2022_07_20_073037_create_fche040104_finances_table', 65),
(164, '2022_07_20_075820_create_fche040004s_table', 66),
(165, '2022_07_20_075829_create_fche040004_tests_table', 66),
(166, '2022_07_20_075841_create_fche040004_finances_table', 66),
(167, '2022_07_20_083906_create_f04che24s_table', 67),
(168, '2022_07_20_083916_create_f04che24_tests_table', 67),
(169, '2022_07_20_083927_create_f04che24_finances_table', 67),
(170, '2022_07_23_063653_create_f04che27s_table', 68),
(171, '2022_07_23_063716_create_f04che27_tests_table', 68),
(172, '2022_07_23_063724_create_f04che27_finances_table', 68),
(173, '2022_07_23_074324_create_f04che07s_table', 69),
(174, '2022_07_23_074330_create_f04che07_tests_table', 69),
(175, '2022_07_23_074343_create_f04che07_finances_table', 69),
(176, '2022_07_24_075049_create_f04che08s_table', 70),
(177, '2022_07_24_075059_create_f04che08_tests_table', 70),
(178, '2022_07_24_075105_create_f04che08_finances_table', 70),
(179, '2022_07_24_081739_create_f04che09s_table', 71),
(180, '2022_07_24_081745_create_f04che09_tests_table', 71),
(181, '2022_07_24_081758_create_f04che09_finances_table', 71),
(182, '2022_07_24_083817_create_f04che10s_table', 72),
(183, '2022_07_24_083822_create_f04che10_tests_table', 72),
(184, '2022_07_24_083830_create_f04che10_finances_table', 72),
(185, '2022_07_24_090203_create_f04che11s_table', 73),
(186, '2022_07_24_090207_create_f04che11_tests_table', 73),
(187, '2022_07_24_090217_create_f04che11_finances_table', 73),
(188, '2022_07_24_092325_create_f04che12s_table', 74),
(189, '2022_07_24_092330_create_f04che12_tests_table', 74),
(190, '2022_07_24_092337_create_f04che12_finances_table', 74),
(191, '2022_07_24_093800_create_f04che14s_table', 75),
(192, '2022_07_24_093806_create_f04che14_tests_table', 75),
(193, '2022_07_24_093813_create_f04che14_finances_table', 75),
(194, '2022_07_24_142847_create_fche040027s_table', 76),
(195, '2022_07_24_142905_create_fche040027_tests_table', 76),
(196, '2022_07_24_142912_create_fche040027_finances_table', 76),
(197, '2022_07_24_145701_create_fche040028s_table', 77),
(198, '2022_07_24_145706_create_fche040028_tests_table', 77),
(199, '2022_07_24_145713_create_fche040028_finances_table', 77),
(200, '2022_07_24_151308_create_fche040038s_table', 78),
(201, '2022_07_24_151317_create_fche040038_tests_table', 78),
(202, '2022_07_24_151324_create_fche040038_finances_table', 78),
(203, '2022_07_24_153045_create_f04che26s_table', 79),
(204, '2022_07_24_153055_create_f04che26_tests_table', 79),
(205, '2022_07_24_153101_create_f04che26_finances_table', 79),
(206, '2022_07_24_155437_create_f04che20s_table', 80),
(207, '2022_07_24_155443_create_f04che20_tests_table', 80),
(208, '2022_07_24_155449_create_f04che20_finances_table', 80),
(209, '2022_07_26_045151_create_f04che19s_table', 81),
(210, '2022_07_26_045157_create_f04che19_tests_table', 81),
(211, '2022_07_26_045209_create_f04che19_finances_table', 81),
(212, '2022_07_26_053517_create_f04che28s_table', 82),
(213, '2022_07_26_053721_create_f04che28_tests_table', 82),
(214, '2022_07_26_053733_create_f04che28_finances_table', 82),
(215, '2022_07_26_075629_create_ad01250s_table', 83),
(216, '2022_07_26_075635_create_ad01250_tests_table', 83),
(217, '2022_07_26_075641_create_ad01250_finances_table', 83),
(218, '2022_07_26_083051_create_ad01254s_table', 84),
(219, '2022_07_26_083057_create_ad01254_tests_table', 84),
(220, '2022_07_26_083105_create_ad01254_finances_table', 84),
(221, '2022_07_27_045150_create_ad00084s_table', 85),
(222, '2022_07_27_045209_create_ad00084_tests_table', 85),
(223, '2022_07_27_045219_create_ad00084_finances_table', 85),
(224, '2022_07_27_063110_create_ad00086s_table', 86),
(225, '2022_07_27_063116_create_ad00086_tests_table', 86),
(226, '2022_07_27_063123_create_ad00086_finances_table', 86),
(227, '2022_07_27_080000_create_ad00088s_table', 87),
(228, '2022_07_27_080008_create_ad00088_tests_table', 87),
(229, '2022_07_27_080018_create_ad00088_finances_table', 87),
(230, '2022_07_27_083914_create_ad00396s_table', 88),
(231, '2022_07_27_083921_create_ad00396_tests_table', 88),
(232, '2022_07_27_083927_create_ad00396_finances_table', 88),
(233, '2022_07_27_090050_create_ad01357s_table', 89),
(234, '2022_07_27_090055_create_ad01357_tests_table', 89),
(235, '2022_07_27_090101_create_ad01357_finances_table', 89),
(236, '2022_07_29_084306_create_ml_general_stocks_table', 90),
(237, '2022_07_29_084322_create_purchase_used_ml_general_stocks_table', 90),
(238, '2022_07_29_125252_create_ml_petrifilm_stocks_table', 91),
(239, '2022_07_29_125302_create_purchase_used_ml_petrifilm_stocks_table', 91),
(240, '2022_07_29_152457_create_ml_media_stocks_table', 92),
(241, '2022_07_29_152627_create_purchase_used_ml_media_stocks_table', 92),
(242, '2022_09_23_072834_create_aa_table', 93),
(243, '2022_09_27_145340_create_permission_tables', 94),
(244, '2022_10_05_093142_create_aa_tables', 95),
(245, '2022_10_31_055909_create_fche040029s_table', 96),
(246, '2022_11_01_042159_create_fche040029_finances_table', 97),
(247, '2022_11_03_045759_create_h_m_m_che040141s_table', 98),
(248, '2022_11_03_051642_create_h_m_m_che040141_finances_table', 99),
(249, '2022_11_20_143553_create_h_m_m_che040146s_table', 100),
(250, '2022_11_20_143642_create_h_m_m_che040146_finances_table', 100),
(251, '2022_11_22_035728_create_fcar0502s_table', 101),
(252, '2022_11_22_035755_create_fcar0502_finances_table', 101),
(253, '2022_11_23_072348_create_fche040101s_table', 102),
(254, '2022_11_23_073858_create_fche040101_finances_table', 103),
(255, '2022_11_23_142342_create_fche040102s_table', 104),
(256, '2022_11_23_142352_create_fche040102_finances_table', 104),
(257, '2022_11_24_035928_create_fche040103s_table', 105),
(258, '2022_11_24_035939_create_fche040103_finances_table', 105),
(259, '2022_11_24_084915_create_fche040104s_table', 106),
(260, '2022_11_24_084923_create_fche040104_finances_table', 106),
(261, '2022_11_24_112401_create_fche040105s_table', 107),
(262, '2022_11_24_112415_create_fche040105_finances_table', 107),
(263, '2022_11_24_132851_create_fche040106s_table', 108),
(264, '2022_11_24_132858_create_fche040106_finances_table', 108),
(265, '2022_11_24_152902_create_fche040107s_table', 109),
(266, '2022_11_24_152908_create_fche040107_finances_table', 109),
(267, '2022_11_27_055415_create_f03m05s_table', 110),
(268, '2022_11_27_055423_create_f03m05_finances_table', 110),
(269, '2022_11_28_143223_create_fche040039s_table', 111),
(270, '2022_11_28_143230_create_fche040039_finances_table', 111),
(271, '2022_11_29_030932_create_fche040051s_table', 112),
(272, '2022_11_29_030957_create_fche040051_finances_table', 112),
(273, '2022_11_29_042458_create_fche040052s_table', 113),
(274, '2022_11_29_042516_create_fche040052_finances_table', 113),
(275, '2022_11_29_151128_create_alcohol_fcar0501s_table', 114),
(276, '2022_11_29_151144_create_alcohol_fcar0501_finances_table', 114),
(277, '2022_11_30_040011_create_fcar0500s_table', 115),
(278, '2022_11_30_040016_create_fcar0500_finances_table', 115),
(279, '2022_11_30_065317_create_fche040053s_table', 116),
(280, '2022_11_30_065322_create_fche040053_finances_table', 116),
(281, '2022_11_30_081758_create_fche040055s_table', 117),
(282, '2022_11_30_081803_create_fche040055_finances_table', 117),
(283, '2022_11_30_095231_create_fche040056s_table', 118),
(284, '2022_11_30_095246_create_fche040056_finances_table', 118),
(285, '2022_11_30_154214_create_fche040054s_table', 119),
(286, '2022_11_30_154220_create_fche040054_finances_table', 119),
(287, '2022_11_30_161404_create_fche040057s_table', 120),
(288, '2022_11_30_161412_create_fche040057_finances_table', 120),
(289, '2022_11_30_163607_create_fche040058s_table', 121),
(290, '2022_11_30_163612_create_fche040058_finances_table', 121),
(291, '2022_12_01_034816_create_fche040059s_table', 122),
(292, '2022_12_01_034823_create_fche040059_finances_table', 122),
(293, '2022_12_01_080444_create_fche040038s_table', 123),
(294, '2022_12_01_080452_create_fche040038_finances_table', 123),
(295, '2022_12_01_085157_create_fche040027s_table', 124),
(296, '2022_12_01_085203_create_fche040027_finances_table', 124),
(297, '2022_12_01_092814_create_fche040123s_table', 125),
(298, '2022_12_01_093017_create_fche040123_finances_table', 125),
(299, '2022_12_01_142542_create_fche040121s_table', 126),
(300, '2022_12_01_142549_create_fche040121_finances_table', 126),
(301, '2022_12_01_150400_create_fche040120s_table', 127),
(302, '2022_12_01_150407_create_fche040120_finances_table', 127),
(303, '2022_12_02_105604_create_fche040122s_table', 128),
(304, '2022_12_02_105611_create_fche040122_finances_table', 128),
(305, '2022_12_02_141212_create_fche040125s_table', 129),
(306, '2022_12_02_141220_create_fche040125_finances_table', 129),
(307, '2022_12_02_144301_create_fche040126s_table', 130),
(308, '2022_12_02_144306_create_fche040126_finances_table', 130),
(309, '2022_12_08_081940_create_fche040124s_table', 131),
(310, '2022_12_08_082027_create_fche040124_finances_table', 131),
(311, '2022_12_13_134452_create_fche040060s_table', 132),
(312, '2022_12_13_134500_create_fche040060_finances_table', 132),
(313, '2022_12_13_144019_create_fche040061s_table', 133),
(314, '2022_12_13_144026_create_fche040061_finances_table', 133),
(315, '2022_12_13_151730_create_fche040062s_table', 134),
(316, '2022_12_13_151735_create_fche040062_finances_table', 134),
(317, '2022_12_13_153506_create_fche040063s_table', 135),
(318, '2022_12_13_153511_create_fche040063_finances_table', 135),
(319, '2022_12_13_160157_create_fche040064s_table', 136),
(320, '2022_12_13_160204_create_fche040064_finances_table', 136),
(321, '2022_12_14_073132_create_wtfcar0502s_table', 137),
(322, '2022_12_14_073145_create_wtfcar0502_finances_table', 137),
(323, '2022_12_14_093315_create_fche040116s_table', 138),
(324, '2022_12_14_093320_create_fche040116_finances_table', 138),
(325, '2022_12_14_105058_create_fche040117s_table', 139),
(326, '2022_12_14_105103_create_fche040117_finances_table', 139),
(327, '2022_12_14_130845_create_fche040118s_table', 140),
(328, '2022_12_14_130851_create_fche040118_finances_table', 140),
(329, '2022_12_14_135559_create_fche040119s_table', 141),
(330, '2022_12_14_135604_create_fche040119_finances_table', 141),
(331, '2022_12_14_144031_create_oilfcar0502s_table', 142),
(332, '2022_12_14_144040_create_oilfcar0502_finances_table', 142),
(333, '2022_12_14_160218_create_heavy_metal_test_parameters_table', 143),
(334, '2022_12_15_041348_create_fche040108s_table', 143),
(335, '2022_12_15_041354_create_fche040108_finances_table', 143),
(336, '2022_12_15_045511_create_fche040109s_table', 144),
(337, '2022_12_15_045516_create_fche040109_finances_table', 144),
(338, '2022_12_15_070518_create_fche040110s_table', 145),
(339, '2022_12_15_070525_create_fche040110_finances_table', 145),
(340, '2022_12_15_075329_create_fche040111s_table', 146),
(341, '2022_12_15_075334_create_fche040111_finances_table', 146),
(342, '2022_12_15_085151_create_fche040112s_table', 147),
(343, '2022_12_15_085156_create_fche040112_finances_table', 147),
(344, '2022_12_15_092955_create_fche040113s_table', 148),
(345, '2022_12_15_093000_create_fche040113_finances_table', 148),
(346, '2022_12_15_100141_create_fche040114s_table', 149),
(347, '2022_12_15_100148_create_fche040114_finances_table', 149),
(348, '2022_12_15_102740_create_fche040115s_table', 150),
(349, '2022_12_15_102748_create_fche040115_finances_table', 150),
(350, '2022_12_15_144646_create_gc_test_parameters_table', 151),
(351, '2022_12_15_144658_create_gc_test_methods_table', 151),
(352, '2022_12_15_152144_create_nutrition_test_parameters_table', 152),
(353, '2022_12_15_153554_create_oil_test_parameters_table', 153),
(354, '2022_12_15_154918_create_water_test_parameters_table', 154),
(355, '2022_12_15_160153_create_micro_test_parameters_table', 155),
(356, '2022_12_15_160203_create_micro_test_methods_table', 155);

-- --------------------------------------------------------

--
-- Table structure for table `ml_general_stocks`
--

CREATE TABLE `ml_general_stocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usage` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_stock` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ml_media_stocks`
--

CREATE TABLE `ml_media_stocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `balance` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `balance_g` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `balance_ml` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `balance_bot` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `used` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new_bottle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_stock` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ml_petrifilm_stocks`
--

CREATE TABLE `ml_petrifilm_stocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usage` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `balance` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_stock` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 11),
(4, 'App\\Models\\User', 8),
(4, 'App\\Models\\User', 13),
(4, 'App\\Models\\User', 14);

-- --------------------------------------------------------

--
-- Table structure for table `nutrition_test_parameters`
--

CREATE TABLE `nutrition_test_parameters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nutrition_test_parameters`
--

INSERT INTO `nutrition_test_parameters` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Moisture', '2022-12-15 09:02:22', '2022-12-15 09:02:22'),
(3, 'Ash', '2022-12-15 09:02:46', '2022-12-15 09:02:46'),
(4, 'Crude Protein', '2022-12-15 09:02:51', '2022-12-15 09:02:51'),
(5, 'Crude Fiber', '2022-12-15 09:03:00', '2022-12-15 09:03:00'),
(6, 'Crude Fat (Ether Extract)', '2022-12-15 09:03:20', '2022-12-15 09:03:20'),
(7, 'Carbohydrate', '2022-12-15 09:03:36', '2022-12-15 09:03:36'),
(8, 'Energy Value (Kcal/100g)', '2022-12-15 09:03:57', '2022-12-15 09:03:57'),
(9, 'Sodium (Na)', '2022-12-15 09:04:12', '2022-12-15 09:04:12');

-- --------------------------------------------------------

--
-- Table structure for table `oilfcar0502s`
--

CREATE TABLE `oilfcar0502s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `report_no` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysis_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issue_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gravity_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gravity_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gravity_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `index_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `index_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `index_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sap_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sap_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sap_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unsap_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unsap_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unsap_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iodine_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iodine_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iodine_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acid_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acid_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acid_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `peroxide_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `peroxide_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `peroxide_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moisture_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moisture_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moisture_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oilfcar0502_finances`
--

CREATE TABLE `oilfcar0502_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `oilfcar0502_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oil_test_parameters`
--

CREATE TABLE `oil_test_parameters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oil_test_parameters`
--

INSERT INTO `oil_test_parameters` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Specific Gravity (at 20 C)', '2022-12-15 09:14:00', '2022-12-15 09:14:00'),
(3, 'Refractive Index', '2022-12-15 09:14:17', '2022-12-15 09:14:17'),
(4, 'Saponification value (mg KOH/g)', '2022-12-15 09:14:53', '2022-12-15 09:14:53'),
(5, 'Unsaponifiable matter (%)', '2022-12-15 09:15:12', '2022-12-15 09:15:12'),
(6, 'Iodine value (Wijs Method)', '2022-12-15 09:15:32', '2022-12-15 09:15:32'),
(7, 'Acid value (mg KOH/ g)', '2022-12-15 09:15:53', '2022-12-15 09:15:53'),
(8, 'Peroxide value (milliequivalents peroxide oxygen/kg)', '2022-12-15 09:16:37', '2022-12-15 09:16:37'),
(9, 'Moisture and Volatile matter', '2022-12-15 09:16:55', '2022-12-15 09:16:55'),
(10, 'Acid value of extracted oil (AVE)', '2022-12-15 09:17:19', '2022-12-15 09:17:19'),
(11, 'Peroxide value of extracted oil (POVE)', '2022-12-15 09:17:47', '2022-12-15 09:17:47');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'member-list', 'web', '2022-08-03 07:23:56', '2022-08-03 07:23:56'),
(2, 'member-create', 'web', '2022-08-03 07:24:07', '2022-08-03 07:24:07'),
(3, 'member-edit', 'web', '2022-08-03 07:24:16', '2022-08-03 07:24:16'),
(4, 'member-delete', 'web', '2022-08-03 07:24:28', '2022-08-03 07:24:28'),
(5, 'member-excel', 'web', '2022-08-03 07:24:41', '2022-08-03 07:24:41'),
(7, 'member-type', 'web', '2022-08-03 07:29:32', '2022-08-03 07:29:32'),
(8, 'member-category', 'web', '2022-08-03 07:32:42', '2022-08-03 07:32:42'),
(9, 'member-group', 'web', '2022-08-03 07:32:55', '2022-08-03 07:32:55'),
(10, 'customer-list', 'web', '2022-08-03 07:38:27', '2022-08-03 07:38:27'),
(12, 'customer-edit', 'web', '2022-08-03 07:38:48', '2022-08-03 07:38:48'),
(13, 'customer-delete', 'web', '2022-08-03 07:38:57', '2022-08-03 07:38:57'),
(14, 'customer-excel', 'web', '2022-08-03 07:39:11', '2022-08-03 07:39:11'),
(15, 'customer-create', 'web', '2022-08-03 07:40:44', '2022-08-03 07:40:44'),
(16, 'FIDSL-Ad-01-01', 'web', '2022-08-03 07:42:34', '2022-08-03 07:42:34'),
(17, 'FIDSL-Ad-02-01', 'web', '2022-08-03 07:44:38', '2022-08-03 07:44:38'),
(18, 'F-CAR-05-01', 'web', '2022-08-03 07:45:50', '2022-08-03 07:45:50'),
(19, 'F-CAR-05-00', 'web', '2022-08-03 07:46:34', '2022-08-03 07:46:34'),
(20, 'FIDSL-Che-04-01/40', 'web', '2022-08-03 07:50:09', '2022-11-03 08:44:10'),
(21, 'FIDSL-Che-04-01/45', 'web', '2022-08-03 07:51:12', '2022-11-20 07:51:42'),
(22, 'FIDSL-Che-04-01/42', 'web', '2022-08-03 07:51:38', '2022-11-03 08:45:43'),
(23, 'FIDSL-Che-04-01/36', 'web', '2022-08-03 07:52:32', '2022-11-03 08:40:03'),
(24, 'FIDSL-Che-04-01/48', 'web', '2022-08-03 07:53:04', '2022-11-21 03:11:43'),
(25, 'FIDSL-Che-04-01/43', 'web', '2022-08-03 07:53:49', '2022-11-03 09:13:39'),
(26, 'FIDSL-Che-04-01/37', 'web', '2022-08-03 07:53:58', '2022-11-03 08:42:18'),
(27, 'FIDSL-Che-04-01/49', 'web', '2022-08-03 07:55:01', '2022-11-21 03:40:38'),
(28, 'FIDSL-Che-04-01/47', 'web', '2022-08-03 07:55:09', '2022-11-21 02:36:08'),
(29, 'FIDSL-Che-04-01/50', 'web', '2022-08-03 07:55:17', '2022-11-21 09:14:53'),
(30, 'FIDSL-Che-04-01/44', 'web', '2022-08-03 07:55:25', '2022-11-04 02:57:04'),
(31, 'FIDSL-03-M-05', 'web', '2022-08-03 08:03:18', '2022-08-03 08:03:18'),
(32, 'FIDSL-03-M-06', 'web', '2022-08-03 08:03:39', '2022-08-03 08:03:39'),
(33, 'F-M01-01-01', 'web', '2022-08-03 08:04:01', '2022-08-03 08:04:01'),
(34, 'F-M02-01-01', 'web', '2022-08-03 08:04:18', '2022-08-03 08:04:18'),
(35, 'F-M03-01-01', 'web', '2022-08-03 08:04:27', '2022-08-03 08:04:27'),
(36, 'F-M04-01-01', 'web', '2022-08-03 08:04:36', '2022-08-03 08:04:36'),
(37, 'F-MAR-05-01', 'web', '2022-08-03 08:05:07', '2022-08-03 08:05:07'),
(38, 'FIDSL-Che-04-01/01', 'web', '2022-08-03 22:31:52', '2022-11-23 02:56:22'),
(42, 'FIDSL-Che-04-01/03', 'web', '2022-08-03 22:35:47', '2022-11-23 22:51:43'),
(43, 'FIDSL-Che-04-01/04', 'web', '2022-08-03 22:35:57', '2022-08-03 22:35:57'),
(44, 'FIDSL-04-Che/06', 'web', '2022-08-03 22:39:26', '2022-08-03 22:39:26'),
(45, 'FIDSL-04-Che/07', 'web', '2022-08-03 22:39:33', '2022-08-03 22:39:33'),
(46, 'FIDSL-04-Che/08', 'web', '2022-08-03 22:39:42', '2022-08-03 22:39:42'),
(47, 'FIDSL-04-Che/09', 'web', '2022-08-03 22:39:51', '2022-08-03 22:39:51'),
(48, 'FIDSL-04-Che/10', 'web', '2022-08-03 22:39:59', '2022-08-03 22:39:59'),
(49, 'FIDSL-04-Che/11', 'web', '2022-08-03 22:40:07', '2022-08-03 22:40:07'),
(50, 'FIDSL-04-Che/12', 'web', '2022-08-03 22:40:14', '2022-08-03 22:40:14'),
(52, 'FIDSL-04-Che/14', 'web', '2022-08-03 22:40:31', '2022-08-03 22:40:31'),
(53, 'F-CAR-05-01(Other Test)', 'web', '2022-08-03 22:42:03', '2022-11-28 07:52:02'),
(61, 'FIDSL-Che-04-00/38', 'web', '2022-08-03 22:48:33', '2022-08-03 22:48:33'),
(62, 'FIDSL-Che-04-00/28', 'web', '2022-08-03 22:48:42', '2022-08-03 22:48:42'),
(63, 'FIDSL-Che-04-00/27', 'web', '2022-08-03 22:48:57', '2022-08-03 22:48:57'),
(66, 'FIDSL-04-Che/26', 'web', '2022-08-03 22:50:51', '2022-08-03 22:50:51'),
(68, 'FIDSL-Ad-06-03-00879/22', 'web', '2022-08-03 22:54:30', '2022-08-03 22:54:30'),
(69, 'FIDSL-Ad-06-03-01087/22', 'web', '2022-08-03 22:54:43', '2022-08-03 22:54:43'),
(70, 'FIDSL-Ad-06-03-01288/22', 'web', '2022-08-03 22:54:59', '2022-08-03 22:54:59'),
(71, 'FIDSL-Ad-06-03-01341/22', 'web', '2022-08-03 22:55:13', '2022-08-03 22:55:13'),
(72, 'FIDSL-Ad-06-03-01351/22', 'web', '2022-08-03 22:55:33', '2022-08-03 22:55:33'),
(73, 'FIDSL-Ad-06-03-01354/22', 'web', '2022-08-03 22:55:42', '2022-08-03 22:55:42'),
(74, 'FIDSL-Ad-06-03-00084', 'web', '2022-08-03 22:59:35', '2022-08-03 22:59:35'),
(75, 'FIDSL-Ad-06-03-00086', 'web', '2022-08-03 22:59:45', '2022-08-03 22:59:45'),
(76, 'FIDSL-Ad-06-03-00088', 'web', '2022-08-03 22:59:55', '2022-08-03 22:59:55'),
(77, 'FIDSL-Ad-06-03-00396', 'web', '2022-08-03 23:00:08', '2022-08-03 23:00:08'),
(78, 'FIDSL-Ad-06-03-01250', 'web', '2022-08-03 23:00:17', '2022-08-03 23:00:17'),
(79, 'FIDSL-Ad-06-03-01254', 'web', '2022-08-03 23:00:30', '2022-08-03 23:00:30'),
(80, 'FIDSL-Ad-06-03-01357', 'web', '2022-08-03 23:00:40', '2022-08-03 23:00:40'),
(81, 'FIDSL-General-Stock-List', 'web', '2022-08-03 23:18:38', '2022-08-03 23:18:38'),
(82, 'Chemical-Lab-Chemical-List', 'web', '2022-08-03 23:20:58', '2022-08-03 23:20:58'),
(83, 'Chemical-Lab-Glass-Ware', 'web', '2022-08-03 23:23:12', '2022-08-03 23:23:12'),
(84, 'Chemical-Lab-Equipment-List', 'web', '2022-08-03 23:24:08', '2022-08-03 23:24:08'),
(85, 'Micro-Lab-Equipment-List', 'web', '2022-08-03 23:24:43', '2022-08-03 23:24:43'),
(86, 'Micro-Lab-General-Stock', 'web', '2022-08-03 23:25:23', '2022-08-03 23:25:23'),
(87, 'Micro-Lab-Petrifilm-List', 'web', '2022-08-03 23:26:26', '2022-08-03 23:26:26'),
(88, 'Micro-Lab-Media-Stock', 'web', '2022-08-03 23:26:39', '2022-08-03 23:26:39'),
(89, 'FIDSL-Ad-01-01(Finance)', 'web', '2022-08-03 23:28:37', '2022-08-03 23:28:37'),
(90, 'FIDSL-Ad-02-01(Finance)', 'web', '2022-08-03 23:28:46', '2022-08-03 23:28:46'),
(91, 'F-CAR-05-01(Finance)', 'web', '2022-08-03 23:30:20', '2022-08-03 23:30:20'),
(92, 'F-CAR-05-00(Finance)', 'web', '2022-08-03 23:31:42', '2022-08-03 23:31:42'),
(93, 'FIDSL-Che-04-01/40(Finance)', 'web', '2022-08-03 23:32:39', '2022-11-03 08:43:52'),
(94, 'FIDSL-Che-04-01/45(Finance)', 'web', '2022-08-03 23:33:13', '2022-11-20 07:51:27'),
(95, 'FIDSL-Che-04-01/42(Finance)', 'web', '2022-08-03 23:33:43', '2022-11-03 08:45:25'),
(96, 'FIDSL-Che-04-01/36(Finance)', 'web', '2022-08-03 23:34:29', '2022-11-03 08:39:45'),
(97, 'FIDSL-Che-04-01/48(Finance)', 'web', '2022-08-03 23:35:06', '2022-11-21 03:11:27'),
(98, 'FIDSL-Che-04-01/43(Finance)', 'web', '2022-08-03 23:35:41', '2022-11-03 09:13:19'),
(99, 'FIDSL-Che-04-01/37(Finance)', 'web', '2022-08-03 23:36:11', '2022-11-03 08:42:02'),
(100, 'FIDSL-Che-04-01/49(Finance)', 'web', '2022-08-03 23:36:42', '2022-11-21 03:40:22'),
(101, 'FIDSL-Che-04-01/47(Finance)', 'web', '2022-08-03 23:37:14', '2022-11-21 02:36:27'),
(102, 'FIDSL-Che-04-01/50(Finance)', 'web', '2022-08-03 23:37:57', '2022-11-21 09:14:34'),
(104, 'F-MAR-05-01(Finance)', 'web', '2022-08-03 23:39:53', '2022-08-03 23:39:53'),
(105, 'F-M01-01-01(Finance)', 'web', '2022-08-03 23:41:26', '2022-08-03 23:41:26'),
(106, 'F-M02-01-01(Finance)', 'web', '2022-08-03 23:41:34', '2022-08-03 23:41:34'),
(107, 'F-M03-01-01(Finance)', 'web', '2022-08-03 23:41:42', '2022-08-03 23:41:42'),
(108, 'F-M04-01-01(Finance)', 'web', '2022-08-03 23:41:50', '2022-08-03 23:41:50'),
(109, 'FIDSL-03-M-06(Finance)', 'web', '2022-08-03 23:43:16', '2022-08-03 23:43:16'),
(110, 'FIDSL-03-M-05(Finance)', 'web', '2022-08-03 23:43:26', '2022-08-03 23:43:26'),
(112, 'FIDSL-Che-04-01/01(Finance)', 'web', '2022-08-03 23:45:33', '2022-11-23 02:56:04'),
(117, 'FIDSL-Che-04-01/03(Finance)', 'web', '2022-08-03 23:49:24', '2022-11-23 22:51:10'),
(119, 'FIDSL-Che-04-01/04(Finance)', 'web', '2022-08-03 23:49:42', '2022-08-03 23:49:42'),
(122, 'FIDSL-04-Che/06(Finance)', 'web', '2022-08-04 01:27:59', '2022-08-04 01:27:59'),
(123, 'FIDSL-04-Che/07(Finance)', 'web', '2022-08-04 01:28:11', '2022-08-04 01:28:11'),
(124, 'FIDSL-04-Che/08(Finance)', 'web', '2022-08-04 01:28:21', '2022-08-04 01:28:21'),
(126, 'FIDSL-04-Che/09(Finance)', 'web', '2022-08-04 01:28:34', '2022-08-04 01:28:34'),
(127, 'FIDSL-04-Che/10(Finance)', 'web', '2022-08-04 01:28:44', '2022-08-04 01:28:44'),
(128, 'FIDSL-04-Che/11(Finance)', 'web', '2022-08-04 01:28:54', '2022-08-04 01:28:54'),
(129, 'FIDSL-04-Che/12(Finance)', 'web', '2022-08-04 01:29:07', '2022-08-04 01:29:07'),
(131, 'FIDSL-04-Che/14(Finance)', 'web', '2022-08-04 01:29:28', '2022-08-04 01:29:28'),
(132, 'F-CAR-05-01(Finance)(Other Test)', 'web', '2022-08-04 01:31:44', '2022-11-28 07:51:35'),
(141, 'FIDSL-Che-04-00/27(Finance)', 'web', '2022-08-04 01:38:49', '2022-08-04 01:38:49'),
(142, 'FIDSL-Che-04-00/28(Finance)', 'web', '2022-08-04 01:39:00', '2022-08-04 01:39:00'),
(143, 'FIDSL-Che-04-00/38(Finance)', 'web', '2022-08-04 01:39:07', '2022-08-04 01:39:07'),
(146, 'FIDSL-04-Che/26(Finance)', 'web', '2022-08-04 01:41:36', '2022-08-04 01:41:36'),
(148, 'FIDSL-Ad-06-03-00879/22(Finance)', 'web', '2022-08-04 01:43:34', '2022-08-04 01:43:34'),
(149, 'FIDSL-Ad-06-03-01087/22(Finance)', 'web', '2022-08-04 01:44:14', '2022-08-04 01:44:14'),
(150, 'FIDSL-Ad-06-03-01288/22(Finance)', 'web', '2022-08-04 01:47:02', '2022-08-04 01:47:02'),
(151, 'FIDSL-Ad-06-03-01341/22(Finance)', 'web', '2022-08-04 01:47:37', '2022-08-04 01:47:37'),
(152, 'FIDSL-Ad-06-03-01351/22(Finance)', 'web', '2022-08-04 01:48:20', '2022-08-04 01:48:20'),
(153, 'FIDSL-Ad-06-03-01354/22(Finance)', 'web', '2022-08-04 01:48:54', '2022-08-04 01:48:54'),
(154, 'FIDSL-Ad-06-03-00084/22(Finance)', 'web', '2022-08-04 01:52:17', '2022-08-04 01:52:17'),
(155, 'FIDSL-Ad-06-03-00086/22(Finance)', 'web', '2022-08-04 01:52:53', '2022-08-04 01:52:53'),
(156, 'FIDSL-Ad-06-03-00088/22(Finance)', 'web', '2022-08-04 01:53:25', '2022-08-04 01:53:25'),
(157, 'FIDSL-Ad-06-03-00396/22(Finance)', 'web', '2022-08-04 01:54:26', '2022-08-04 01:54:26'),
(158, 'FIDSL-Ad-06-03-01250/22(Finance)', 'web', '2022-08-04 01:55:00', '2022-08-04 01:55:00'),
(159, 'FIDSL-Ad-06-03-01254/22(Finance)', 'web', '2022-08-04 01:56:43', '2022-08-04 01:56:43'),
(160, 'FIDSL-Ad-06-03-01357/22(Finance)', 'web', '2022-08-04 01:57:18', '2022-08-04 01:57:18'),
(161, 'permission-list', 'web', '2022-08-04 02:03:28', '2022-08-04 02:03:28'),
(162, 'permission-create', 'web', '2022-08-04 02:03:38', '2022-08-04 02:03:38'),
(163, 'permission-edit', 'web', '2022-08-04 02:03:50', '2022-08-04 02:03:50'),
(164, 'permission-delete', 'web', '2022-08-04 02:04:10', '2022-08-04 02:04:10'),
(165, 'role-list', 'web', '2022-08-04 02:08:37', '2022-08-04 02:08:37'),
(166, 'role-create', 'web', '2022-08-04 02:08:46', '2022-08-04 02:08:46'),
(167, 'role-edit', 'web', '2022-08-04 02:08:55', '2022-08-04 02:08:55'),
(168, 'role-delete', 'web', '2022-08-04 02:09:04', '2022-08-04 02:09:04'),
(169, 'user-list', 'web', '2022-08-04 02:10:45', '2022-08-04 02:10:45'),
(170, 'user-create', 'web', '2022-08-04 02:10:53', '2022-08-04 02:10:53'),
(171, 'user-edit', 'web', '2022-08-04 02:11:06', '2022-08-04 02:11:06'),
(172, 'user-delete', 'web', '2022-08-04 02:11:35', '2022-08-04 02:11:35'),
(173, 'member-active', 'web', '2022-08-15 00:07:23', '2022-08-15 00:07:23'),
(174, 'member-near-expired', 'web', '2022-08-15 00:07:34', '2022-08-15 00:07:34'),
(175, 'member-expired', 'web', '2022-08-15 00:07:43', '2022-08-15 00:07:43'),
(178, 'FIDSL-Ad-06-03-01250/22', 'web', '2022-08-17 09:37:31', '2022-08-17 09:37:31'),
(179, 'FIDSL-Ad-06-03-01254/22', 'web', '2022-08-17 09:39:42', '2022-08-17 09:39:42'),
(180, 'FIDSL-Ad-06-03-00084/22', 'web', '2022-08-17 09:41:53', '2022-08-17 09:41:53'),
(181, 'FIDSL-Ad-06-03-00086/22', 'web', '2022-08-17 09:44:02', '2022-08-17 09:44:02'),
(182, 'FIDSL-Ad-06-03-00088/22', 'web', '2022-08-17 09:46:04', '2022-08-17 09:46:04'),
(183, 'FIDSL-Ad-06-03-01357/22', 'web', '2022-08-17 09:47:41', '2022-08-17 09:47:41'),
(184, 'FIDSL-Ad-06-03-00396/22', 'web', '2022-08-17 09:49:31', '2022-08-17 09:49:31'),
(186, 'FIDSL-Che-04-00/29', 'web', '2022-11-01 03:53:06', '2022-11-01 03:53:06'),
(187, 'FIDSL-Che-04-00/29(Finance)', 'web', '2022-11-01 03:53:25', '2022-11-01 03:53:25'),
(188, 'FIDSL-Che-04-01/41', 'web', '2022-11-03 04:15:19', '2022-11-03 04:15:19'),
(189, 'FIDSL-Che-04-01/41(Finance)', 'web', '2022-11-03 04:15:46', '2022-11-03 04:15:46'),
(190, 'FIDSL-Che-04-01/44(Finance)', 'web', '2022-11-04 02:57:47', '2022-11-04 02:57:47'),
(191, 'FIDSL-Che-04-01/46', 'web', '2022-11-20 08:42:27', '2022-11-20 08:42:27'),
(192, 'FIDSL-Che-04-01/46(Finance)', 'web', '2022-11-20 08:42:55', '2022-11-20 08:42:55'),
(193, 'F-CAR-05-02(Finance)', 'web', '2022-11-22 21:53:18', '2022-11-22 21:53:18'),
(194, 'F-CAR-05-02', 'web', '2022-11-22 21:53:27', '2022-11-22 21:53:27'),
(195, 'FIDSL-Che-04-01/02', 'web', '2022-11-23 08:21:19', '2022-11-23 08:21:19'),
(196, 'FIDSL-Che-04-01/02(Finance)', 'web', '2022-11-23 08:21:31', '2022-11-23 08:36:13'),
(197, 'FIDSL-Che-04-01/05(Finance)', 'web', '2022-11-24 06:47:40', '2022-11-24 06:47:40'),
(198, 'FIDSL-Che-04-01/05', 'web', '2022-11-24 06:47:50', '2022-11-24 06:47:50'),
(199, 'FIDSL-Che-04-01/06(Finance)', 'web', '2022-11-24 08:02:00', '2022-11-24 08:02:00'),
(200, 'FIDSL-Che-04-01/06', 'web', '2022-11-24 08:02:09', '2022-11-24 08:02:09'),
(201, 'FIDSL-Che-04-01/07', 'web', '2022-11-24 09:19:13', '2022-11-24 09:19:13'),
(202, 'FIDSL-Che-04-01/07(Finance)', 'web', '2022-11-24 09:19:41', '2022-11-24 09:19:41'),
(203, 'FIDSL-Che-04-00/39(Finance)', 'web', '2022-11-28 09:33:04', '2022-11-28 09:33:04'),
(204, 'FIDSL-Che-04-00/39', 'web', '2022-11-28 09:33:12', '2022-11-28 09:33:12'),
(205, 'FIDSL-Che-04-00/51(Finance)', 'web', '2022-11-28 21:49:28', '2022-11-28 21:49:28'),
(206, 'FIDSL-Che-04-00/51', 'web', '2022-11-28 21:49:39', '2022-11-28 21:49:39'),
(207, 'FIDSL-Che-04-00/52', 'web', '2022-11-28 22:19:12', '2022-11-28 22:19:12'),
(208, 'FIDSL-Che-04-00/52(Finance)', 'web', '2022-11-28 22:19:30', '2022-11-28 22:19:30'),
(209, 'F-CAR-05-01(Alcohol Analysis)(Finance)', 'web', '2022-11-29 09:51:02', '2022-11-29 09:51:02'),
(210, 'F-CAR-05-01(Alcohol Analysis)', 'web', '2022-11-29 09:51:12', '2022-11-29 09:51:12'),
(211, 'F-CAR-05-00(Wastewater Results)(Finance)', 'web', '2022-11-29 22:27:03', '2022-11-29 22:27:03'),
(212, 'F-CAR-05-00(Wastewater Results)', 'web', '2022-11-29 22:27:11', '2022-11-29 22:27:11'),
(213, 'FIDSL-Che-04-00/53(Finance)', 'web', '2022-11-30 01:15:00', '2022-11-30 01:15:00'),
(214, 'FIDSL-Che-04-00/53', 'web', '2022-11-30 01:15:09', '2022-11-30 01:15:09'),
(215, 'FIDSL-Che-04-00/55(Finance)', 'web', '2022-11-30 02:40:21', '2022-11-30 02:40:21'),
(216, 'FIDSL-Che-04-00/55', 'web', '2022-11-30 02:40:30', '2022-11-30 02:40:30'),
(217, 'FIDSL-Che-04-00/56(Finance)', 'web', '2022-11-30 04:04:06', '2022-11-30 04:04:06'),
(218, 'FIDSL-Che-04-00/56', 'web', '2022-11-30 04:04:17', '2022-11-30 04:04:17'),
(219, 'FIDSL-Che-04-00/54', 'web', '2022-11-30 09:22:16', '2022-11-30 09:22:16'),
(220, 'FIDSL-Che-04-00/54(Finance)', 'web', '2022-11-30 09:22:23', '2022-11-30 09:22:23'),
(221, 'FIDSL-Che-04-00/57', 'web', '2022-11-30 09:51:24', '2022-11-30 09:51:24'),
(222, 'FIDSL-Che-04-00/57(Finance)', 'web', '2022-11-30 09:51:30', '2022-11-30 09:51:30'),
(223, 'FIDSL-Che-04-00/58', 'web', '2022-11-30 10:13:42', '2022-11-30 10:13:42'),
(224, 'FIDSL-Che-04-00/58(Finance)', 'web', '2022-11-30 10:13:49', '2022-11-30 10:13:49'),
(225, 'FIDSL-Che-04-00/59', 'web', '2022-12-01 01:19:52', '2022-12-01 01:19:52'),
(226, 'FIDSL-Che-04-00/59(Finance)', 'web', '2022-12-01 01:20:06', '2022-12-01 01:20:06'),
(227, 'FIDSL-Che-04-01/23', 'web', '2022-12-01 03:39:08', '2022-12-01 03:39:08'),
(228, 'FIDSL-Che-04-01/23(Finance)', 'web', '2022-12-01 03:39:14', '2022-12-01 03:39:14'),
(229, 'FIDSL-Che-04-01/21(Finance)', 'web', '2022-12-01 08:13:42', '2022-12-01 08:13:42'),
(230, 'FIDSL-Che-04-01/21', 'web', '2022-12-01 08:13:57', '2022-12-01 08:13:57'),
(231, 'FIDSL-Che-04-01/20', 'web', '2022-12-01 08:54:52', '2022-12-01 08:54:52'),
(232, 'FIDSL-Che-04-01/20(Finance)', 'web', '2022-12-01 08:54:57', '2022-12-01 08:54:57'),
(233, 'FIDSL-Che-04-01/22', 'web', '2022-12-02 07:31:07', '2022-12-02 07:31:07'),
(234, 'FIDSL-Che-04-01/22(Finance)', 'web', '2022-12-02 07:31:18', '2022-12-02 07:31:18'),
(235, 'FIDSL-Che-04-01/25', 'web', '2022-12-02 08:00:06', '2022-12-02 08:00:06'),
(236, 'FIDSL-Che-04-01/25(Finance)', 'web', '2022-12-02 08:00:13', '2022-12-02 08:00:13'),
(237, 'FIDSL-Che-04-01/26', 'web', '2022-12-02 08:34:57', '2022-12-02 08:34:57'),
(238, 'FIDSL-Che-04-01/26(Finance)', 'web', '2022-12-02 08:35:05', '2022-12-02 08:35:05'),
(239, 'FIDSL-Che-04-01/24', 'web', '2022-12-09 07:26:46', '2022-12-09 07:26:46'),
(240, 'FIDSL-Che-04-01/24(Finance)', 'web', '2022-12-09 07:27:02', '2022-12-09 07:27:02'),
(241, 'FIDSL-Che-04-00/60', 'web', '2022-12-13 08:01:27', '2022-12-13 08:01:27'),
(242, 'FIDSL-Che-04-00/60(Finance)', 'web', '2022-12-13 08:01:34', '2022-12-13 08:01:34'),
(243, 'FIDSL-Che-04-00/61', 'web', '2022-12-13 08:30:47', '2022-12-13 08:30:47'),
(244, 'FIDSL-Che-04-00/61(Finance)', 'web', '2022-12-13 08:30:57', '2022-12-13 08:30:57'),
(245, 'FIDSL-Che-04-00/62', 'web', '2022-12-13 08:57:40', '2022-12-13 08:57:40'),
(246, 'FIDSL-Che-04-00/62(Finance)', 'web', '2022-12-13 08:57:48', '2022-12-13 08:57:48'),
(247, 'FIDSL-Che-04-00/63', 'web', '2022-12-13 09:13:26', '2022-12-13 09:13:26'),
(248, 'FIDSL-Che-04-00/63(Finance)', 'web', '2022-12-13 09:13:34', '2022-12-13 09:13:34'),
(249, 'FIDSL-Che-04-00/64', 'web', '2022-12-13 09:38:55', '2022-12-13 09:38:55'),
(250, 'FIDSL-Che-04-00/64(Finance)', 'web', '2022-12-13 09:39:02', '2022-12-13 09:39:02'),
(251, 'F-CAR-05-02(Water Test)', 'web', '2022-12-14 01:31:00', '2022-12-14 01:31:00'),
(252, 'F-CAR-05-02(Water Test)(Finance)', 'web', '2022-12-14 01:31:07', '2022-12-14 01:31:07'),
(253, 'FIDSL-Che-04-01/16', 'web', '2022-12-14 03:18:46', '2022-12-14 03:18:46'),
(254, 'FIDSL-Che-04-01/16(Finance)', 'web', '2022-12-14 03:18:55', '2022-12-14 03:18:55'),
(255, 'FIDSL-Che-04-01/17', 'web', '2022-12-14 04:42:23', '2022-12-14 04:42:23'),
(256, 'FIDSL-Che-04-01/17(Finance)', 'web', '2022-12-14 04:42:31', '2022-12-14 04:42:31'),
(257, 'FIDSL-Che-04-01/18', 'web', '2022-12-14 06:46:38', '2022-12-14 06:46:38'),
(258, 'FIDSL-Che-04-01/19', 'web', '2022-12-14 06:46:52', '2022-12-14 06:46:52'),
(259, 'FIDSL-Che-04-01/18(Finance)', 'web', '2022-12-14 06:46:59', '2022-12-14 06:46:59'),
(260, 'FIDSL-Che-04-01/19(Finance)', 'web', '2022-12-14 06:47:07', '2022-12-14 06:47:07'),
(261, 'F-CAR-05-02(Oil Test)', 'web', '2022-12-14 08:20:50', '2022-12-14 08:20:50'),
(262, 'F-CAR-05-02(Oil Test)(Finance)', 'web', '2022-12-14 08:21:03', '2022-12-14 08:21:03'),
(264, 'FIDSL-Che-04-01/08', 'web', '2022-12-14 21:56:53', '2022-12-14 21:56:53'),
(265, 'FIDSL-Che-04-01/08(Finance)', 'web', '2022-12-14 21:57:01', '2022-12-14 21:57:01'),
(266, 'FIDSL-Che-04-01/09', 'web', '2022-12-14 22:29:05', '2022-12-14 22:29:05'),
(267, 'FIDSL-Che-04-01/09(Finance)', 'web', '2022-12-14 22:29:11', '2022-12-14 22:29:11'),
(268, 'FIDSL-Che-04-01/10', 'web', '2022-12-15 01:10:21', '2022-12-15 01:10:21'),
(269, 'FIDSL-Che-04-01/10(Finance)', 'web', '2022-12-15 01:10:28', '2022-12-15 01:10:28'),
(270, 'FIDSL-Che-04-01/11', 'web', '2022-12-15 01:43:30', '2022-12-15 01:43:30'),
(271, 'FIDSL-Che-04-01/11(Finance)', 'web', '2022-12-15 01:43:37', '2022-12-15 01:43:37'),
(272, 'FIDSL-Che-04-01/12', 'web', '2022-12-15 02:28:06', '2022-12-15 02:28:06'),
(273, 'FIDSL-Che-04-01/12(Finance)', 'web', '2022-12-15 02:28:11', '2022-12-15 02:28:11'),
(274, 'FIDSL-Che-04-01/13', 'web', '2022-12-15 03:08:18', '2022-12-15 03:08:18'),
(275, 'FIDSL-Che-04-01/13(Finance)', 'web', '2022-12-15 03:08:25', '2022-12-15 03:08:25'),
(276, 'FIDSL-Che-04-01/14', 'web', '2022-12-15 03:51:48', '2022-12-15 03:51:48'),
(277, 'FIDSL-Che-04-01/14(Finance)', 'web', '2022-12-15 03:51:56', '2022-12-15 03:51:56'),
(278, 'FIDSL-Che-04-01/15', 'web', '2022-12-15 04:05:08', '2022-12-15 04:05:08'),
(279, 'FIDSL-Che-04-01/15(Finance)', 'web', '2022-12-15 04:05:19', '2022-12-15 04:05:19');

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
-- Table structure for table `purchase_used_c_l_equipment_lists`
--

CREATE TABLE `purchase_used_c_l_equipment_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cl_equipment_list_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purchase_stock` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `purchase_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `used_stock` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `used_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_used_fidsl_general_stocks`
--

CREATE TABLE `purchase_used_fidsl_general_stocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fidsl_general_stock_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purchase_stock` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `purchase_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `used_stock` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `used_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchase_used_fidsl_general_stocks`
--

INSERT INTO `purchase_used_fidsl_general_stocks` (`id`, `fidsl_general_stock_id`, `purchase_stock`, `purchase_date`, `used_stock`, `used_date`, `created_at`, `updated_at`) VALUES
(3, '2', '10', '2022-06-30', '0', NULL, '2022-06-29 22:22:32', '2022-06-29 22:22:32'),
(4, '2', '0', NULL, '10', '2022-06-30', '2022-06-29 22:34:11', '2022-06-29 22:34:11'),
(10, '5', '10', '2022-10-12', '0', NULL, '2022-10-12 08:41:47', '2022-10-12 08:41:47'),
(12, '6', '100', '2022-10-18', '0', NULL, '2022-10-18 02:41:55', '2022-10-18 02:41:55'),
(13, '6', '0', NULL, '10', '2022-10-18', '2022-10-18 02:42:19', '2022-10-18 02:42:19');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_used_glass_wares`
--

CREATE TABLE `purchase_used_glass_wares` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `stock_glass_ware_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purchase_stock` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `purchase_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `used_stock` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `used_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchase_used_glass_wares`
--

INSERT INTO `purchase_used_glass_wares` (`id`, `stock_glass_ware_id`, `purchase_stock`, `purchase_date`, `used_stock`, `used_date`, `created_at`, `updated_at`) VALUES
(6, '2', '10', '2022-07-28', '0', NULL, '2022-07-28 07:53:00', '2022-07-28 07:53:00'),
(7, '2', '0', NULL, '5', '2022-07-28', '2022-07-28 07:53:31', '2022-07-28 07:53:31');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_used_ml_general_stocks`
--

CREATE TABLE `purchase_used_ml_general_stocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ml_general_stock_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purchase_stock` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purchase_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `used_stock` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `used_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchase_used_ml_general_stocks`
--

INSERT INTO `purchase_used_ml_general_stocks` (`id`, `ml_general_stock_id`, `purchase_stock`, `purchase_date`, `used_stock`, `used_date`, `created_at`, `updated_at`) VALUES
(8, '3', '10', '2022-10-12', NULL, NULL, '2022-10-12 09:31:11', '2022-10-12 09:31:11'),
(9, '3', NULL, NULL, '10', '2022-10-12', '2022-10-12 09:31:26', '2022-10-12 09:31:26');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_used_ml_media_stocks`
--

CREATE TABLE `purchase_used_ml_media_stocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ml_media_stock_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purchase_stock` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purchase_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `used_stock` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `used_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchase_used_ml_media_stocks`
--

INSERT INTO `purchase_used_ml_media_stocks` (`id`, `ml_media_stock_id`, `purchase_stock`, `purchase_date`, `used_stock`, `used_date`, `created_at`, `updated_at`) VALUES
(5, '3', '10', '2022-10-12', NULL, NULL, '2022-10-12 09:43:21', '2022-10-12 09:43:21'),
(6, '3', NULL, NULL, '10', '2022-10-12', '2022-10-12 09:44:06', '2022-10-12 09:44:06');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_used_ml_petrifilm_stocks`
--

CREATE TABLE `purchase_used_ml_petrifilm_stocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ml_petrifilm_stock_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purchase_stock` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purchase_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `used_stock` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `used_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchase_used_ml_petrifilm_stocks`
--

INSERT INTO `purchase_used_ml_petrifilm_stocks` (`id`, `ml_petrifilm_stock_id`, `purchase_stock`, `purchase_date`, `used_stock`, `used_date`, `created_at`, `updated_at`) VALUES
(5, '3', '10', '2022-10-12', NULL, NULL, '2022-10-12 09:36:32', '2022-10-12 09:36:32'),
(6, '3', NULL, NULL, '10', '2022-10-12', '2022-10-12 09:36:53', '2022-10-12 09:36:53');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_used_m_l_equipment_lists`
--

CREATE TABLE `purchase_used_m_l_equipment_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ml_equipment_list_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purchase_stock` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `purchase_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `used_stock` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `used_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2022-08-03 07:25:30', '2022-08-03 07:25:30'),
(4, 'User', 'web', '2022-08-03 07:26:21', '2022-08-03 07:26:21');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 4),
(1, 6),
(2, 1),
(2, 6),
(2, 7),
(3, 1),
(4, 1),
(5, 1),
(5, 6),
(7, 1),
(7, 6),
(7, 7),
(8, 1),
(9, 1),
(10, 1),
(10, 4),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(52, 1),
(53, 1),
(61, 1),
(62, 1),
(63, 1),
(66, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 1),
(77, 1),
(78, 1),
(79, 1),
(80, 1),
(81, 1),
(82, 1),
(83, 1),
(84, 1),
(85, 1),
(86, 1),
(87, 1),
(88, 1),
(89, 1),
(90, 1),
(91, 1),
(92, 1),
(93, 1),
(94, 1),
(95, 1),
(96, 1),
(97, 1),
(98, 1),
(99, 1),
(100, 1),
(101, 1),
(102, 1),
(104, 1),
(105, 1),
(106, 1),
(107, 1),
(108, 1),
(109, 1),
(110, 1),
(112, 1),
(117, 1),
(119, 1),
(122, 1),
(123, 1),
(124, 1),
(126, 1),
(127, 1),
(128, 1),
(129, 1),
(131, 1),
(132, 1),
(141, 1),
(142, 1),
(143, 1),
(146, 1),
(148, 1),
(149, 1),
(150, 1),
(151, 1),
(152, 1),
(153, 1),
(154, 1),
(155, 1),
(156, 1),
(157, 1),
(158, 1),
(159, 1),
(160, 1),
(161, 1),
(162, 1),
(163, 1),
(164, 1),
(165, 1),
(166, 1),
(167, 1),
(168, 1),
(169, 1),
(170, 1),
(171, 1),
(172, 1),
(173, 1),
(174, 1),
(175, 1),
(178, 1),
(179, 1),
(180, 1),
(181, 1),
(182, 1),
(183, 1),
(184, 1),
(186, 1),
(187, 1),
(188, 1),
(189, 1),
(190, 1),
(191, 1),
(192, 1),
(193, 1),
(194, 1),
(195, 1),
(196, 1),
(197, 1),
(198, 1),
(199, 1),
(200, 1),
(201, 1),
(202, 1),
(203, 1),
(204, 1),
(205, 1),
(206, 1),
(207, 1),
(208, 1),
(209, 1),
(210, 1),
(211, 1),
(212, 1),
(213, 1),
(214, 1),
(215, 1),
(216, 1),
(217, 1),
(218, 1),
(219, 1),
(220, 1),
(221, 1),
(222, 1),
(223, 1),
(224, 1),
(225, 1),
(226, 1),
(227, 1),
(228, 1),
(229, 1),
(230, 1),
(231, 1),
(232, 1),
(233, 1),
(234, 1),
(235, 1),
(236, 1),
(237, 1),
(238, 1),
(239, 1),
(240, 1),
(241, 1),
(242, 1),
(243, 1),
(244, 1),
(245, 1),
(246, 1),
(247, 1),
(248, 1),
(249, 1),
(250, 1),
(251, 1),
(252, 1),
(253, 1),
(254, 1),
(255, 1),
(256, 1),
(257, 1),
(258, 1),
(259, 1),
(260, 1),
(261, 1),
(262, 1),
(264, 1),
(265, 1),
(266, 1),
(267, 1),
(268, 1),
(269, 1),
(270, 1),
(271, 1),
(272, 1),
(273, 1),
(274, 1),
(275, 1),
(276, 1),
(277, 1),
(278, 1),
(279, 1);

-- --------------------------------------------------------

--
-- Table structure for table `stock_chemical_lists`
--

CREATE TABLE `stock_chemical_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `chemical_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serial_no` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty_gkgl` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `formula` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_stock` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stock_chemical_lists`
--

INSERT INTO `stock_chemical_lists` (`id`, `chemical_name`, `description`, `brand`, `country`, `serial_no`, `package`, `qty`, `qty_gkgl`, `unit`, `formula`, `total_stock`, `remark`, `created_at`, `updated_at`) VALUES
(3, 'Acetic Acid', 'description', 'brand', 'country', '001', '001', '30', '200g', 'u', 'form', '50', 'test', '2022-06-30 01:32:52', '2022-06-30 01:32:52');

-- --------------------------------------------------------

--
-- Table structure for table `stock_c_l_equipment_lists`
--

CREATE TABLE `stock_c_l_equipment_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_no` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capacity` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `power_supply` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manufacture_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supplier` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `identification` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_stock` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stock_c_l_equipment_lists`
--

INSERT INTO `stock_c_l_equipment_lists` (`id`, `product_name`, `model_no`, `capacity`, `power_supply`, `manufacture_name`, `country`, `supplier`, `identification`, `brand`, `total_stock`, `remark`, `created_at`, `updated_at`) VALUES
(1, 'Electronic Edit', '001', 'capacity', 'poer', 'man', 'country', 'supplier', 'identification', 'brand', '50', 're', '2022-06-30 22:47:35', '2022-06-30 22:47:56');

-- --------------------------------------------------------

--
-- Table structure for table `stock_glass_wares`
--

CREATE TABLE `stock_glass_wares` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `items` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capacity` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_stock` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stock_glass_wares`
--

INSERT INTO `stock_glass_wares` (`id`, `items`, `capacity`, `total_stock`, `remark`, `unit`, `qty`, `created_at`, `updated_at`) VALUES
(2, 'Beaker', '50ml', '55', 'remark', 'pack', '20pair', '2022-06-30 03:03:09', '2022-07-28 07:53:32');

-- --------------------------------------------------------

--
-- Table structure for table `stock_m_l_equipment_lists`
--

CREATE TABLE `stock_m_l_equipment_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `equipment_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serial_no` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_no` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supplier` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purchase_donate_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `installation_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_stock` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stock_m_l_equipment_lists`
--

INSERT INTO `stock_m_l_equipment_lists` (`id`, `equipment_name`, `brand`, `model`, `serial_no`, `id_no`, `supplier`, `purchase_donate_date`, `installation_date`, `location`, `total_stock`, `remark`, `created_at`, `updated_at`) VALUES
(1, 'Autoclave', 'GEMMY', 'test', 'Micro-E01-2', '001', 'Amtt', '2022-06-30', '2022-06-30', 'lo', '50', 'remark', '2022-06-30 08:56:15', '2022-06-30 08:56:15');

-- --------------------------------------------------------

--
-- Table structure for table `stock_purchase_used_chemical_lists`
--

CREATE TABLE `stock_purchase_used_chemical_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `stock_chemical_list_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purchase_stock` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `purchase_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `used_stock` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `used_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(8, 'User', 'user@gmail.com', NULL, '$2y$10$xJQcWLPflTwO0JsymF5ab.aoSiwDu4nAnbaLIQ6AKBejDcHtf5biO', '1', NULL, '2022-06-27 23:17:39', '2022-08-03 07:28:04'),
(11, 'MFPEA', 'mfpea@gmail.com', NULL, '$2y$10$nrreuV1rHsxxtPEVzgwLpusvyVivdK96PwJk3nuMDlNu.0DdsLQeS', '1', NULL, '2022-08-14 21:58:53', '2022-08-14 21:58:53'),
(13, 'Ni Ni', 'ni@gmail.com', NULL, '$2y$10$eXyxMiuZVaGkaH6n0mHHJOf5IUw5ivua.7zaCbEYyda48L/dXuWDe', '0', NULL, '2022-09-27 08:45:12', '2022-10-18 02:31:16'),
(14, 'Moe', 'moe@gmail.com', NULL, '$2y$10$VBdKSISS6h7Ey1B8SXrjuulvxCGrMuRLNgT02uQuCE5YfQ2zhZ18O', '1', NULL, '2022-10-03 08:47:40', '2022-10-03 09:14:02');

-- --------------------------------------------------------

--
-- Table structure for table `water_test_parameters`
--

CREATE TABLE `water_test_parameters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `water_test_parameters`
--

INSERT INTO `water_test_parameters` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Total Hardness (mg/L as CaCo3)', '2022-12-15 09:25:34', '2022-12-15 09:25:34'),
(3, 'Calcium Hardness (mg/L as CaCo3)', '2022-12-15 09:25:48', '2022-12-15 09:25:48'),
(4, 'Magnesium Hardness (mg/L as CaCo3)', '2022-12-15 09:26:02', '2022-12-15 09:26:02'),
(5, 'Total Solid (mg/L)', '2022-12-15 09:26:17', '2022-12-15 09:26:17'),
(6, 'Dissolved Solid (mg/L)', '2022-12-15 09:26:32', '2022-12-15 09:26:32'),
(7, 'Suspended Solid (mg/L)', '2022-12-15 09:26:43', '2022-12-15 09:26:43'),
(8, 'pH (at                   C)', '2022-12-15 09:27:05', '2022-12-15 09:27:05'),
(9, 'Conductivity (at                C) (us or ms/cm)', '2022-12-15 09:27:43', '2022-12-15 09:27:43');

-- --------------------------------------------------------

--
-- Table structure for table `wtfcar0502s`
--

CREATE TABLE `wtfcar0502s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `report_no` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analysis_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issue_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `calcium_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `calcium_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `calcium_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `magnesium_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `magnesium_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `magnesium_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `solid_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `solid_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `solid_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dissolved_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dissolved_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dissolved_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `suspended_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `suspended_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `suspended_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ph_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ph_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ph_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conductivity_para` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conductivity_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conductivity_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wtfcar0502_finances`
--

CREATE TABLE `wtfcar0502_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `wtfcar0502_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ad00084s`
--
ALTER TABLE `ad00084s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad00084_finances`
--
ALTER TABLE `ad00084_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad00084_tests`
--
ALTER TABLE `ad00084_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad00086s`
--
ALTER TABLE `ad00086s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad00086_finances`
--
ALTER TABLE `ad00086_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad00086_tests`
--
ALTER TABLE `ad00086_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad00088s`
--
ALTER TABLE `ad00088s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad00088_finances`
--
ALTER TABLE `ad00088_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad00088_tests`
--
ALTER TABLE `ad00088_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad00396s`
--
ALTER TABLE `ad00396s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad00396_finances`
--
ALTER TABLE `ad00396_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad00396_tests`
--
ALTER TABLE `ad00396_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad00879s`
--
ALTER TABLE `ad00879s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad00879_finances`
--
ALTER TABLE `ad00879_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad00879_tests`
--
ALTER TABLE `ad00879_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad0101s`
--
ALTER TABLE `ad0101s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad01087s`
--
ALTER TABLE `ad01087s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad01087_finances`
--
ALTER TABLE `ad01087_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad01087_tests`
--
ALTER TABLE `ad01087_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad01250s`
--
ALTER TABLE `ad01250s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad01250_finances`
--
ALTER TABLE `ad01250_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad01250_tests`
--
ALTER TABLE `ad01250_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad01254s`
--
ALTER TABLE `ad01254s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad01254_finances`
--
ALTER TABLE `ad01254_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad01254_tests`
--
ALTER TABLE `ad01254_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad01288s`
--
ALTER TABLE `ad01288s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad01288_finances`
--
ALTER TABLE `ad01288_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad01288_tests`
--
ALTER TABLE `ad01288_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad01341s`
--
ALTER TABLE `ad01341s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad01341_finances`
--
ALTER TABLE `ad01341_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad01341_tests`
--
ALTER TABLE `ad01341_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad01351s`
--
ALTER TABLE `ad01351s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad01351_finances`
--
ALTER TABLE `ad01351_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad01351_tests`
--
ALTER TABLE `ad01351_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad01354s`
--
ALTER TABLE `ad01354s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad01354_finances`
--
ALTER TABLE `ad01354_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad01354_tests`
--
ALTER TABLE `ad01354_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad01357s`
--
ALTER TABLE `ad01357s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad01357_finances`
--
ALTER TABLE `ad01357_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad01357_tests`
--
ALTER TABLE `ad01357_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad0201s`
--
ALTER TABLE `ad0201s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad_finances`
--
ALTER TABLE `ad_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alcohol_fcar0501s`
--
ALTER TABLE `alcohol_fcar0501s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alcohol_fcar0501_finances`
--
ALTER TABLE `alcohol_fcar0501_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `annual_fees`
--
ALTER TABLE `annual_fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car0501s`
--
ALTER TABLE `car0501s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car0501_finances`
--
ALTER TABLE `car0501_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car0501_tests`
--
ALTER TABLE `car0501_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car0501_test_fills`
--
ALTER TABLE `car0501_test_fills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f03m05s`
--
ALTER TABLE `f03m05s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f03m05_finances`
--
ALTER TABLE `f03m05_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f03m06s`
--
ALTER TABLE `f03m06s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f03m06_finances`
--
ALTER TABLE `f03m06_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f04che06s`
--
ALTER TABLE `f04che06s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f04che06_finances`
--
ALTER TABLE `f04che06_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f04che06_tests`
--
ALTER TABLE `f04che06_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f04che07s`
--
ALTER TABLE `f04che07s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f04che07_finances`
--
ALTER TABLE `f04che07_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f04che07_tests`
--
ALTER TABLE `f04che07_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f04che08s`
--
ALTER TABLE `f04che08s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f04che08_finances`
--
ALTER TABLE `f04che08_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f04che08_tests`
--
ALTER TABLE `f04che08_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f04che09s`
--
ALTER TABLE `f04che09s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f04che09_finances`
--
ALTER TABLE `f04che09_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f04che09_tests`
--
ALTER TABLE `f04che09_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f04che10s`
--
ALTER TABLE `f04che10s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f04che10_finances`
--
ALTER TABLE `f04che10_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f04che10_tests`
--
ALTER TABLE `f04che10_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f04che11s`
--
ALTER TABLE `f04che11s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f04che11_finances`
--
ALTER TABLE `f04che11_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f04che11_tests`
--
ALTER TABLE `f04che11_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f04che12s`
--
ALTER TABLE `f04che12s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f04che12_finances`
--
ALTER TABLE `f04che12_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f04che12_tests`
--
ALTER TABLE `f04che12_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f04che14s`
--
ALTER TABLE `f04che14s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f04che14_finances`
--
ALTER TABLE `f04che14_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f04che14_tests`
--
ALTER TABLE `f04che14_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f05_finances`
--
ALTER TABLE `f05_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f05_s`
--
ALTER TABLE `f05_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f05_tests`
--
ALTER TABLE `f05_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fcar0500s`
--
ALTER TABLE `fcar0500s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fcar0500_finances`
--
ALTER TABLE `fcar0500_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fcar0501s`
--
ALTER TABLE `fcar0501s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fcar0501_finances`
--
ALTER TABLE `fcar0501_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fcar0501_tests`
--
ALTER TABLE `fcar0501_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fcar0502s`
--
ALTER TABLE `fcar0502s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fcar0502_finances`
--
ALTER TABLE `fcar0502_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040027s`
--
ALTER TABLE `fche040027s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040027_finances`
--
ALTER TABLE `fche040027_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040028s`
--
ALTER TABLE `fche040028s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040028_finances`
--
ALTER TABLE `fche040028_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040029s`
--
ALTER TABLE `fche040029s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040029_finances`
--
ALTER TABLE `fche040029_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040038s`
--
ALTER TABLE `fche040038s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040038_finances`
--
ALTER TABLE `fche040038_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040039s`
--
ALTER TABLE `fche040039s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040039_finances`
--
ALTER TABLE `fche040039_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040051s`
--
ALTER TABLE `fche040051s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040051_finances`
--
ALTER TABLE `fche040051_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040052s`
--
ALTER TABLE `fche040052s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040052_finances`
--
ALTER TABLE `fche040052_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040053s`
--
ALTER TABLE `fche040053s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040053_finances`
--
ALTER TABLE `fche040053_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040054s`
--
ALTER TABLE `fche040054s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040054_finances`
--
ALTER TABLE `fche040054_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040055s`
--
ALTER TABLE `fche040055s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040055_finances`
--
ALTER TABLE `fche040055_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040056s`
--
ALTER TABLE `fche040056s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040056_finances`
--
ALTER TABLE `fche040056_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040057s`
--
ALTER TABLE `fche040057s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040057_finances`
--
ALTER TABLE `fche040057_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040058s`
--
ALTER TABLE `fche040058s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040058_finances`
--
ALTER TABLE `fche040058_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040059s`
--
ALTER TABLE `fche040059s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040059_finances`
--
ALTER TABLE `fche040059_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040060s`
--
ALTER TABLE `fche040060s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040060_finances`
--
ALTER TABLE `fche040060_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040061s`
--
ALTER TABLE `fche040061s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040061_finances`
--
ALTER TABLE `fche040061_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040062s`
--
ALTER TABLE `fche040062s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040062_finances`
--
ALTER TABLE `fche040062_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040063s`
--
ALTER TABLE `fche040063s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040063_finances`
--
ALTER TABLE `fche040063_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040064s`
--
ALTER TABLE `fche040064s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040064_finances`
--
ALTER TABLE `fche040064_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040101s`
--
ALTER TABLE `fche040101s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040101_finances`
--
ALTER TABLE `fche040101_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040102s`
--
ALTER TABLE `fche040102s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040102_finances`
--
ALTER TABLE `fche040102_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040103s`
--
ALTER TABLE `fche040103s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040103_finances`
--
ALTER TABLE `fche040103_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040104s`
--
ALTER TABLE `fche040104s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040104_finances`
--
ALTER TABLE `fche040104_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040105s`
--
ALTER TABLE `fche040105s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040105_finances`
--
ALTER TABLE `fche040105_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040106s`
--
ALTER TABLE `fche040106s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040106_finances`
--
ALTER TABLE `fche040106_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040107s`
--
ALTER TABLE `fche040107s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040107_finances`
--
ALTER TABLE `fche040107_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040108s`
--
ALTER TABLE `fche040108s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040108_finances`
--
ALTER TABLE `fche040108_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040109s`
--
ALTER TABLE `fche040109s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040109_finances`
--
ALTER TABLE `fche040109_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040110s`
--
ALTER TABLE `fche040110s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040110_finances`
--
ALTER TABLE `fche040110_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040111s`
--
ALTER TABLE `fche040111s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040111_finances`
--
ALTER TABLE `fche040111_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040112s`
--
ALTER TABLE `fche040112s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040112_finances`
--
ALTER TABLE `fche040112_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040113s`
--
ALTER TABLE `fche040113s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040113_finances`
--
ALTER TABLE `fche040113_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040114s`
--
ALTER TABLE `fche040114s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040114_finances`
--
ALTER TABLE `fche040114_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040115s`
--
ALTER TABLE `fche040115s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040115_finances`
--
ALTER TABLE `fche040115_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040116s`
--
ALTER TABLE `fche040116s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040116_finances`
--
ALTER TABLE `fche040116_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040117s`
--
ALTER TABLE `fche040117s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040117_finances`
--
ALTER TABLE `fche040117_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040118s`
--
ALTER TABLE `fche040118s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040118_finances`
--
ALTER TABLE `fche040118_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040119s`
--
ALTER TABLE `fche040119s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040119_finances`
--
ALTER TABLE `fche040119_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040120s`
--
ALTER TABLE `fche040120s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040120_finances`
--
ALTER TABLE `fche040120_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040121s`
--
ALTER TABLE `fche040121s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040121_finances`
--
ALTER TABLE `fche040121_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040122s`
--
ALTER TABLE `fche040122s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040122_finances`
--
ALTER TABLE `fche040122_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040123s`
--
ALTER TABLE `fche040123s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040123_finances`
--
ALTER TABLE `fche040123_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040124s`
--
ALTER TABLE `fche040124s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040124_finances`
--
ALTER TABLE `fche040124_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040125s`
--
ALTER TABLE `fche040125s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040125_finances`
--
ALTER TABLE `fche040125_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040126s`
--
ALTER TABLE `fche040126s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fche040126_finances`
--
ALTER TABLE `fche040126_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fidsl_general_stocks`
--
ALTER TABLE `fidsl_general_stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f_mar0501s`
--
ALTER TABLE `f_mar0501s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f_mar0501_finances`
--
ALTER TABLE `f_mar0501_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gc_test_methods`
--
ALTER TABLE `gc_test_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gc_test_parameters`
--
ALTER TABLE `gc_test_parameters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `heavy_metal_test_parameters`
--
ALTER TABLE `heavy_metal_test_parameters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `h_m_mineral_car0500s`
--
ALTER TABLE `h_m_mineral_car0500s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `h_m_mineral_methods`
--
ALTER TABLE `h_m_mineral_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `h_m_mineral_tests`
--
ALTER TABLE `h_m_mineral_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `h_m_m_car0500_finances`
--
ALTER TABLE `h_m_m_car0500_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `h_m_m_car0500_tests`
--
ALTER TABLE `h_m_m_car0500_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `h_m_m_che040036s`
--
ALTER TABLE `h_m_m_che040036s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `h_m_m_che040036_finances`
--
ALTER TABLE `h_m_m_che040036_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `h_m_m_che040036_tests`
--
ALTER TABLE `h_m_m_che040036_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `h_m_m_che040037s`
--
ALTER TABLE `h_m_m_che040037s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `h_m_m_che040037_finances`
--
ALTER TABLE `h_m_m_che040037_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `h_m_m_che040037_tests`
--
ALTER TABLE `h_m_m_che040037_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `h_m_m_che040040s`
--
ALTER TABLE `h_m_m_che040040s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `h_m_m_che040040_finances`
--
ALTER TABLE `h_m_m_che040040_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `h_m_m_che040040_tests`
--
ALTER TABLE `h_m_m_che040040_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `h_m_m_che040042s`
--
ALTER TABLE `h_m_m_che040042s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `h_m_m_che040042_finances`
--
ALTER TABLE `h_m_m_che040042_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `h_m_m_che040042_tests`
--
ALTER TABLE `h_m_m_che040042_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `h_m_m_che040043s`
--
ALTER TABLE `h_m_m_che040043s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `h_m_m_che040043_finances`
--
ALTER TABLE `h_m_m_che040043_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `h_m_m_che040043_tests`
--
ALTER TABLE `h_m_m_che040043_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `h_m_m_che040044s`
--
ALTER TABLE `h_m_m_che040044s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `h_m_m_che040044_finances`
--
ALTER TABLE `h_m_m_che040044_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `h_m_m_che040044_tests`
--
ALTER TABLE `h_m_m_che040044_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `h_m_m_che040045s`
--
ALTER TABLE `h_m_m_che040045s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `h_m_m_che040045_finances`
--
ALTER TABLE `h_m_m_che040045_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `h_m_m_che040045_tests`
--
ALTER TABLE `h_m_m_che040045_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `h_m_m_che040047s`
--
ALTER TABLE `h_m_m_che040047s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `h_m_m_che040047_finances`
--
ALTER TABLE `h_m_m_che040047_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `h_m_m_che040047_tests`
--
ALTER TABLE `h_m_m_che040047_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `h_m_m_che040048s`
--
ALTER TABLE `h_m_m_che040048s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `h_m_m_che040048_finances`
--
ALTER TABLE `h_m_m_che040048_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `h_m_m_che040048_tests`
--
ALTER TABLE `h_m_m_che040048_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `h_m_m_che040049s`
--
ALTER TABLE `h_m_m_che040049s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `h_m_m_che040049_finances`
--
ALTER TABLE `h_m_m_che040049_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `h_m_m_che040049_tests`
--
ALTER TABLE `h_m_m_che040049_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `h_m_m_che040050s`
--
ALTER TABLE `h_m_m_che040050s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `h_m_m_che040050_finances`
--
ALTER TABLE `h_m_m_che040050_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `h_m_m_che040050_tests`
--
ALTER TABLE `h_m_m_che040050_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `h_m_m_che040141s`
--
ALTER TABLE `h_m_m_che040141s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `h_m_m_che040141_finances`
--
ALTER TABLE `h_m_m_che040141_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `h_m_m_che040146s`
--
ALTER TABLE `h_m_m_che040146s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `h_m_m_che040146_finances`
--
ALTER TABLE `h_m_m_che040146_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m010101_counts`
--
ALTER TABLE `m010101_counts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m010101_finances`
--
ALTER TABLE `m010101_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m010101_s`
--
ALTER TABLE `m010101_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m020101_counts`
--
ALTER TABLE `m020101_counts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m020101_finances`
--
ALTER TABLE `m020101_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m020101_s`
--
ALTER TABLE `m020101_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m030101_counts`
--
ALTER TABLE `m030101_counts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m030101_finances`
--
ALTER TABLE `m030101_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m030101_s`
--
ALTER TABLE `m030101_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m040101_counts`
--
ALTER TABLE `m040101_counts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m040101_finances`
--
ALTER TABLE `m040101_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m040101_s`
--
ALTER TABLE `m040101_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_types`
--
ALTER TABLE `member_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `micro_test_methods`
--
ALTER TABLE `micro_test_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `micro_test_parameters`
--
ALTER TABLE `micro_test_parameters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ml_general_stocks`
--
ALTER TABLE `ml_general_stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ml_media_stocks`
--
ALTER TABLE `ml_media_stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ml_petrifilm_stocks`
--
ALTER TABLE `ml_petrifilm_stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `nutrition_test_parameters`
--
ALTER TABLE `nutrition_test_parameters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oilfcar0502s`
--
ALTER TABLE `oilfcar0502s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oilfcar0502_finances`
--
ALTER TABLE `oilfcar0502_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oil_test_parameters`
--
ALTER TABLE `oil_test_parameters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `purchase_used_c_l_equipment_lists`
--
ALTER TABLE `purchase_used_c_l_equipment_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_used_fidsl_general_stocks`
--
ALTER TABLE `purchase_used_fidsl_general_stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_used_glass_wares`
--
ALTER TABLE `purchase_used_glass_wares`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_used_ml_general_stocks`
--
ALTER TABLE `purchase_used_ml_general_stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_used_ml_media_stocks`
--
ALTER TABLE `purchase_used_ml_media_stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_used_ml_petrifilm_stocks`
--
ALTER TABLE `purchase_used_ml_petrifilm_stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_used_m_l_equipment_lists`
--
ALTER TABLE `purchase_used_m_l_equipment_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `stock_chemical_lists`
--
ALTER TABLE `stock_chemical_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_c_l_equipment_lists`
--
ALTER TABLE `stock_c_l_equipment_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_glass_wares`
--
ALTER TABLE `stock_glass_wares`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_m_l_equipment_lists`
--
ALTER TABLE `stock_m_l_equipment_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_purchase_used_chemical_lists`
--
ALTER TABLE `stock_purchase_used_chemical_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `water_test_parameters`
--
ALTER TABLE `water_test_parameters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wtfcar0502s`
--
ALTER TABLE `wtfcar0502s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wtfcar0502_finances`
--
ALTER TABLE `wtfcar0502_finances`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ad00084s`
--
ALTER TABLE `ad00084s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ad00084_finances`
--
ALTER TABLE `ad00084_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ad00084_tests`
--
ALTER TABLE `ad00084_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ad00086s`
--
ALTER TABLE `ad00086s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ad00086_finances`
--
ALTER TABLE `ad00086_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ad00086_tests`
--
ALTER TABLE `ad00086_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ad00088s`
--
ALTER TABLE `ad00088s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ad00088_finances`
--
ALTER TABLE `ad00088_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ad00088_tests`
--
ALTER TABLE `ad00088_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ad00396s`
--
ALTER TABLE `ad00396s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ad00396_finances`
--
ALTER TABLE `ad00396_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ad00396_tests`
--
ALTER TABLE `ad00396_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ad00879s`
--
ALTER TABLE `ad00879s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ad00879_finances`
--
ALTER TABLE `ad00879_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ad00879_tests`
--
ALTER TABLE `ad00879_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ad0101s`
--
ALTER TABLE `ad0101s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ad01087s`
--
ALTER TABLE `ad01087s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ad01087_finances`
--
ALTER TABLE `ad01087_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ad01087_tests`
--
ALTER TABLE `ad01087_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ad01250s`
--
ALTER TABLE `ad01250s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ad01250_finances`
--
ALTER TABLE `ad01250_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ad01250_tests`
--
ALTER TABLE `ad01250_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ad01254s`
--
ALTER TABLE `ad01254s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ad01254_finances`
--
ALTER TABLE `ad01254_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ad01254_tests`
--
ALTER TABLE `ad01254_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ad01288s`
--
ALTER TABLE `ad01288s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ad01288_finances`
--
ALTER TABLE `ad01288_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ad01288_tests`
--
ALTER TABLE `ad01288_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ad01341s`
--
ALTER TABLE `ad01341s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ad01341_finances`
--
ALTER TABLE `ad01341_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ad01341_tests`
--
ALTER TABLE `ad01341_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ad01351s`
--
ALTER TABLE `ad01351s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ad01351_finances`
--
ALTER TABLE `ad01351_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ad01351_tests`
--
ALTER TABLE `ad01351_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ad01354s`
--
ALTER TABLE `ad01354s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ad01354_finances`
--
ALTER TABLE `ad01354_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ad01354_tests`
--
ALTER TABLE `ad01354_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ad01357s`
--
ALTER TABLE `ad01357s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ad01357_finances`
--
ALTER TABLE `ad01357_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ad01357_tests`
--
ALTER TABLE `ad01357_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ad0201s`
--
ALTER TABLE `ad0201s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ad_finances`
--
ALTER TABLE `ad_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `alcohol_fcar0501s`
--
ALTER TABLE `alcohol_fcar0501s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `alcohol_fcar0501_finances`
--
ALTER TABLE `alcohol_fcar0501_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `annual_fees`
--
ALTER TABLE `annual_fees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `car0501s`
--
ALTER TABLE `car0501s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `car0501_finances`
--
ALTER TABLE `car0501_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `car0501_tests`
--
ALTER TABLE `car0501_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `car0501_test_fills`
--
ALTER TABLE `car0501_test_fills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `f03m05s`
--
ALTER TABLE `f03m05s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `f03m05_finances`
--
ALTER TABLE `f03m05_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `f03m06s`
--
ALTER TABLE `f03m06s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `f03m06_finances`
--
ALTER TABLE `f03m06_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `f04che06s`
--
ALTER TABLE `f04che06s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `f04che06_finances`
--
ALTER TABLE `f04che06_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `f04che06_tests`
--
ALTER TABLE `f04che06_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `f04che07s`
--
ALTER TABLE `f04che07s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `f04che07_finances`
--
ALTER TABLE `f04che07_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `f04che07_tests`
--
ALTER TABLE `f04che07_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `f04che08s`
--
ALTER TABLE `f04che08s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `f04che08_finances`
--
ALTER TABLE `f04che08_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `f04che08_tests`
--
ALTER TABLE `f04che08_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `f04che09s`
--
ALTER TABLE `f04che09s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `f04che09_finances`
--
ALTER TABLE `f04che09_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `f04che09_tests`
--
ALTER TABLE `f04che09_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `f04che10s`
--
ALTER TABLE `f04che10s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `f04che10_finances`
--
ALTER TABLE `f04che10_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `f04che10_tests`
--
ALTER TABLE `f04che10_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `f04che11s`
--
ALTER TABLE `f04che11s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `f04che11_finances`
--
ALTER TABLE `f04che11_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `f04che11_tests`
--
ALTER TABLE `f04che11_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `f04che12s`
--
ALTER TABLE `f04che12s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `f04che12_finances`
--
ALTER TABLE `f04che12_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `f04che12_tests`
--
ALTER TABLE `f04che12_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `f04che14s`
--
ALTER TABLE `f04che14s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `f04che14_finances`
--
ALTER TABLE `f04che14_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `f04che14_tests`
--
ALTER TABLE `f04che14_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `f05_finances`
--
ALTER TABLE `f05_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `f05_s`
--
ALTER TABLE `f05_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `f05_tests`
--
ALTER TABLE `f05_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fcar0500s`
--
ALTER TABLE `fcar0500s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fcar0500_finances`
--
ALTER TABLE `fcar0500_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fcar0501s`
--
ALTER TABLE `fcar0501s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fcar0501_finances`
--
ALTER TABLE `fcar0501_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fcar0501_tests`
--
ALTER TABLE `fcar0501_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fcar0502s`
--
ALTER TABLE `fcar0502s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fcar0502_finances`
--
ALTER TABLE `fcar0502_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fche040027s`
--
ALTER TABLE `fche040027s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040027_finances`
--
ALTER TABLE `fche040027_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040028s`
--
ALTER TABLE `fche040028s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fche040028_finances`
--
ALTER TABLE `fche040028_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fche040029s`
--
ALTER TABLE `fche040029s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fche040029_finances`
--
ALTER TABLE `fche040029_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fche040038s`
--
ALTER TABLE `fche040038s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040038_finances`
--
ALTER TABLE `fche040038_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040039s`
--
ALTER TABLE `fche040039s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fche040039_finances`
--
ALTER TABLE `fche040039_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fche040051s`
--
ALTER TABLE `fche040051s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fche040051_finances`
--
ALTER TABLE `fche040051_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fche040052s`
--
ALTER TABLE `fche040052s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040052_finances`
--
ALTER TABLE `fche040052_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040053s`
--
ALTER TABLE `fche040053s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040053_finances`
--
ALTER TABLE `fche040053_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040054s`
--
ALTER TABLE `fche040054s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040054_finances`
--
ALTER TABLE `fche040054_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040055s`
--
ALTER TABLE `fche040055s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040055_finances`
--
ALTER TABLE `fche040055_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040056s`
--
ALTER TABLE `fche040056s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040056_finances`
--
ALTER TABLE `fche040056_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040057s`
--
ALTER TABLE `fche040057s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040057_finances`
--
ALTER TABLE `fche040057_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040058s`
--
ALTER TABLE `fche040058s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040058_finances`
--
ALTER TABLE `fche040058_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040059s`
--
ALTER TABLE `fche040059s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fche040059_finances`
--
ALTER TABLE `fche040059_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fche040060s`
--
ALTER TABLE `fche040060s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040060_finances`
--
ALTER TABLE `fche040060_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040061s`
--
ALTER TABLE `fche040061s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040061_finances`
--
ALTER TABLE `fche040061_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040062s`
--
ALTER TABLE `fche040062s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040062_finances`
--
ALTER TABLE `fche040062_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040063s`
--
ALTER TABLE `fche040063s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040063_finances`
--
ALTER TABLE `fche040063_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040064s`
--
ALTER TABLE `fche040064s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040064_finances`
--
ALTER TABLE `fche040064_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040101s`
--
ALTER TABLE `fche040101s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040101_finances`
--
ALTER TABLE `fche040101_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040102s`
--
ALTER TABLE `fche040102s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040102_finances`
--
ALTER TABLE `fche040102_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040103s`
--
ALTER TABLE `fche040103s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fche040103_finances`
--
ALTER TABLE `fche040103_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fche040104s`
--
ALTER TABLE `fche040104s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040104_finances`
--
ALTER TABLE `fche040104_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040105s`
--
ALTER TABLE `fche040105s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040105_finances`
--
ALTER TABLE `fche040105_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040106s`
--
ALTER TABLE `fche040106s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040106_finances`
--
ALTER TABLE `fche040106_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040107s`
--
ALTER TABLE `fche040107s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040107_finances`
--
ALTER TABLE `fche040107_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040108s`
--
ALTER TABLE `fche040108s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040108_finances`
--
ALTER TABLE `fche040108_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040109s`
--
ALTER TABLE `fche040109s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040109_finances`
--
ALTER TABLE `fche040109_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040110s`
--
ALTER TABLE `fche040110s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040110_finances`
--
ALTER TABLE `fche040110_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040111s`
--
ALTER TABLE `fche040111s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040111_finances`
--
ALTER TABLE `fche040111_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040112s`
--
ALTER TABLE `fche040112s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040112_finances`
--
ALTER TABLE `fche040112_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040113s`
--
ALTER TABLE `fche040113s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040113_finances`
--
ALTER TABLE `fche040113_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040114s`
--
ALTER TABLE `fche040114s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040114_finances`
--
ALTER TABLE `fche040114_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040115s`
--
ALTER TABLE `fche040115s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040115_finances`
--
ALTER TABLE `fche040115_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040116s`
--
ALTER TABLE `fche040116s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040116_finances`
--
ALTER TABLE `fche040116_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040117s`
--
ALTER TABLE `fche040117s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040117_finances`
--
ALTER TABLE `fche040117_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040118s`
--
ALTER TABLE `fche040118s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040118_finances`
--
ALTER TABLE `fche040118_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040119s`
--
ALTER TABLE `fche040119s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040119_finances`
--
ALTER TABLE `fche040119_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040120s`
--
ALTER TABLE `fche040120s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040120_finances`
--
ALTER TABLE `fche040120_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040121s`
--
ALTER TABLE `fche040121s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040121_finances`
--
ALTER TABLE `fche040121_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040122s`
--
ALTER TABLE `fche040122s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040122_finances`
--
ALTER TABLE `fche040122_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040123s`
--
ALTER TABLE `fche040123s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fche040123_finances`
--
ALTER TABLE `fche040123_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fche040124s`
--
ALTER TABLE `fche040124s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040124_finances`
--
ALTER TABLE `fche040124_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040125s`
--
ALTER TABLE `fche040125s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040125_finances`
--
ALTER TABLE `fche040125_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040126s`
--
ALTER TABLE `fche040126s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fche040126_finances`
--
ALTER TABLE `fche040126_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fidsl_general_stocks`
--
ALTER TABLE `fidsl_general_stocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `f_mar0501s`
--
ALTER TABLE `f_mar0501s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `f_mar0501_finances`
--
ALTER TABLE `f_mar0501_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gc_test_methods`
--
ALTER TABLE `gc_test_methods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gc_test_parameters`
--
ALTER TABLE `gc_test_parameters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `heavy_metal_test_parameters`
--
ALTER TABLE `heavy_metal_test_parameters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `h_m_mineral_car0500s`
--
ALTER TABLE `h_m_mineral_car0500s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `h_m_mineral_methods`
--
ALTER TABLE `h_m_mineral_methods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `h_m_mineral_tests`
--
ALTER TABLE `h_m_mineral_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `h_m_m_car0500_finances`
--
ALTER TABLE `h_m_m_car0500_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `h_m_m_car0500_tests`
--
ALTER TABLE `h_m_m_car0500_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `h_m_m_che040036s`
--
ALTER TABLE `h_m_m_che040036s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `h_m_m_che040036_finances`
--
ALTER TABLE `h_m_m_che040036_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `h_m_m_che040036_tests`
--
ALTER TABLE `h_m_m_che040036_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `h_m_m_che040037s`
--
ALTER TABLE `h_m_m_che040037s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `h_m_m_che040037_finances`
--
ALTER TABLE `h_m_m_che040037_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `h_m_m_che040037_tests`
--
ALTER TABLE `h_m_m_che040037_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `h_m_m_che040040s`
--
ALTER TABLE `h_m_m_che040040s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `h_m_m_che040040_finances`
--
ALTER TABLE `h_m_m_che040040_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `h_m_m_che040040_tests`
--
ALTER TABLE `h_m_m_che040040_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `h_m_m_che040042s`
--
ALTER TABLE `h_m_m_che040042s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `h_m_m_che040042_finances`
--
ALTER TABLE `h_m_m_che040042_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `h_m_m_che040042_tests`
--
ALTER TABLE `h_m_m_che040042_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `h_m_m_che040043s`
--
ALTER TABLE `h_m_m_che040043s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `h_m_m_che040043_finances`
--
ALTER TABLE `h_m_m_che040043_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `h_m_m_che040043_tests`
--
ALTER TABLE `h_m_m_che040043_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `h_m_m_che040044s`
--
ALTER TABLE `h_m_m_che040044s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `h_m_m_che040044_finances`
--
ALTER TABLE `h_m_m_che040044_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `h_m_m_che040044_tests`
--
ALTER TABLE `h_m_m_che040044_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `h_m_m_che040045s`
--
ALTER TABLE `h_m_m_che040045s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `h_m_m_che040045_finances`
--
ALTER TABLE `h_m_m_che040045_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `h_m_m_che040045_tests`
--
ALTER TABLE `h_m_m_che040045_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `h_m_m_che040047s`
--
ALTER TABLE `h_m_m_che040047s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `h_m_m_che040047_finances`
--
ALTER TABLE `h_m_m_che040047_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `h_m_m_che040047_tests`
--
ALTER TABLE `h_m_m_che040047_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `h_m_m_che040048s`
--
ALTER TABLE `h_m_m_che040048s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `h_m_m_che040048_finances`
--
ALTER TABLE `h_m_m_che040048_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `h_m_m_che040048_tests`
--
ALTER TABLE `h_m_m_che040048_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `h_m_m_che040049s`
--
ALTER TABLE `h_m_m_che040049s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `h_m_m_che040049_finances`
--
ALTER TABLE `h_m_m_che040049_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `h_m_m_che040049_tests`
--
ALTER TABLE `h_m_m_che040049_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `h_m_m_che040050s`
--
ALTER TABLE `h_m_m_che040050s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `h_m_m_che040050_finances`
--
ALTER TABLE `h_m_m_che040050_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `h_m_m_che040050_tests`
--
ALTER TABLE `h_m_m_che040050_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `h_m_m_che040141s`
--
ALTER TABLE `h_m_m_che040141s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `h_m_m_che040141_finances`
--
ALTER TABLE `h_m_m_che040141_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `h_m_m_che040146s`
--
ALTER TABLE `h_m_m_che040146s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `h_m_m_che040146_finances`
--
ALTER TABLE `h_m_m_che040146_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `m010101_counts`
--
ALTER TABLE `m010101_counts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `m010101_finances`
--
ALTER TABLE `m010101_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `m010101_s`
--
ALTER TABLE `m010101_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `m020101_counts`
--
ALTER TABLE `m020101_counts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `m020101_finances`
--
ALTER TABLE `m020101_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `m020101_s`
--
ALTER TABLE `m020101_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `m030101_counts`
--
ALTER TABLE `m030101_counts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `m030101_finances`
--
ALTER TABLE `m030101_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `m030101_s`
--
ALTER TABLE `m030101_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `m040101_counts`
--
ALTER TABLE `m040101_counts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `m040101_finances`
--
ALTER TABLE `m040101_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `m040101_s`
--
ALTER TABLE `m040101_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `member_types`
--
ALTER TABLE `member_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `micro_test_methods`
--
ALTER TABLE `micro_test_methods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `micro_test_parameters`
--
ALTER TABLE `micro_test_parameters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=357;

--
-- AUTO_INCREMENT for table `ml_general_stocks`
--
ALTER TABLE `ml_general_stocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ml_media_stocks`
--
ALTER TABLE `ml_media_stocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ml_petrifilm_stocks`
--
ALTER TABLE `ml_petrifilm_stocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nutrition_test_parameters`
--
ALTER TABLE `nutrition_test_parameters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `oilfcar0502s`
--
ALTER TABLE `oilfcar0502s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `oilfcar0502_finances`
--
ALTER TABLE `oilfcar0502_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `oil_test_parameters`
--
ALTER TABLE `oil_test_parameters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=280;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchase_used_c_l_equipment_lists`
--
ALTER TABLE `purchase_used_c_l_equipment_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `purchase_used_fidsl_general_stocks`
--
ALTER TABLE `purchase_used_fidsl_general_stocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `purchase_used_glass_wares`
--
ALTER TABLE `purchase_used_glass_wares`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `purchase_used_ml_general_stocks`
--
ALTER TABLE `purchase_used_ml_general_stocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `purchase_used_ml_media_stocks`
--
ALTER TABLE `purchase_used_ml_media_stocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `purchase_used_ml_petrifilm_stocks`
--
ALTER TABLE `purchase_used_ml_petrifilm_stocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `purchase_used_m_l_equipment_lists`
--
ALTER TABLE `purchase_used_m_l_equipment_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `stock_chemical_lists`
--
ALTER TABLE `stock_chemical_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `stock_c_l_equipment_lists`
--
ALTER TABLE `stock_c_l_equipment_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stock_glass_wares`
--
ALTER TABLE `stock_glass_wares`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stock_m_l_equipment_lists`
--
ALTER TABLE `stock_m_l_equipment_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `stock_purchase_used_chemical_lists`
--
ALTER TABLE `stock_purchase_used_chemical_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `water_test_parameters`
--
ALTER TABLE `water_test_parameters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `wtfcar0502s`
--
ALTER TABLE `wtfcar0502s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wtfcar0502_finances`
--
ALTER TABLE `wtfcar0502_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
