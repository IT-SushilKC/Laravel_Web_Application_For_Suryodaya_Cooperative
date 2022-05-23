-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2022 at 12:16 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `suryodaya`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_shows`
--

CREATE TABLE `about_shows` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parag` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_shows`
--

INSERT INTO `about_shows` (`id`, `parag`, `created_at`, `updated_at`) VALUES
(1, 'नेपाल सरकारको उदार अर्थनीतिलाई आत्मसात गर्दै अन्तराष्ट्रिय सहकारी सिद्धान्त,\r\n                        मूल्य\r\n                        मान्यता र आदर्श बमोजिम स्थानीय नेपाली नागरिकहरुको आर्थिक, सामाजिक एवं साँस्कृतिक आवश्यकता\r\n                        परिपूर्ति गर्दै\r\n                        राष्ट्र निर्माणमा टेवा पुर्याउन २०५५ साल वैशाख ९ गते नेपाल भरी कार्यक्षेत्र रहने गरी रोयल सहकारी\r\n                        संस्थाको\r\n                        रुपमा काठमाण्डौमा स्थापना भई २०५५ साल चैत्र १८ गते पोखरामा क्षेत्रीय कार्यालयको रुपमा स्थापना\r\n                        भएको सहकारी\r\n                        संस्था सञ्चालनकै क्रममा क्षेत्रीय एवं शाखा कार्यालयहरुलाई स्थानीयकरण गरि स्वायत्त संस्थाको रुपमा\r\n                        दर्ता\r\n                        गर्नुपर्ने भन्ने सरकारी नीतिका कारण तत्कालिन संस्थाको चौथो वार्षिक साधारण सभाको निर्णय बमोजिम\r\n                        सबै शाखा\r\n                        कार्यालयहरुलाई स्थानीयकरण गरि स्वायत्तता प्रदान गर्ने निर्णय भयो, सोहि बमोजिम पोखरामा रहेको\r\n                        क्षेत्रीय\r\n                        कार्यालयलाई स्थानीय व्यक्तिहरुको सहभागितामा २८ जना सदस्य र ७ लाख पुँजी रहने गरी मिति २०५९ साल\r\n                        जेठ ८ गते\r\n                        पोखरा रोयल सहकारी संस्था लिमिटेडको नामबाट तत्कालिन डिभिजन सहकारी कार्यालय कास्कीमा दर्ता नं.\r\n                        २५०–२०५८/०५९\r\n                        बाट विधिवत दर्ता गरिएको हो । संस्था सञ्चालनको क्रममा २०७६ कात्र्तिक २३ गते सम्पन्न १८ ‌‍‍‍औँ\r\n                        वार्षिक साधारण\r\n                        सभा बाट पोखरा महानगरपालिका वडा नं. ३० मोहरिया कास्कीमा रहेको शिशुवा महिला बचत तथा ऋण सहकारी\r\n                        संस्थासंग एकिकरण\r\n                        सभा पश्चात भूमि व्यवस्था कृषि तथा सहकारी मन्त्रालय गण्डकी प्रदेशको मिति २०७६ साल मंसिर २४ गतेको\r\n                        निर्णयानुसार\r\n                        दर्ता नं.२५०–२०५८/०५९ बाट कास्की, स्याङ्जा, तनहुँ र लमजुङ जिल्लाभर कार्यक्षेत्र रहने गरि पोखरा\r\n                        रोयल बचत तथा\r\n                        ऋण सहकारी संस्था लिमिटेडको नामबाट स्थापित भएको हो ।', NULL, '2022-03-15 12:38:05');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Sushil KC', 'sushilkc908@gmail.com', 'adssadad', 'zxzxcxvzcvdfgfsgdf', '2022-02-02 04:50:41', '2022-02-02 04:50:41'),
(2, 'Sushil KC', 'sushilkc908@gmail.com', 'adssadad', 'zxzxcxvzcvdfgfsgdf', '2022-02-02 04:50:54', '2022-02-02 04:50:54'),
(3, 'sdasdsad', 'sushil@gnail', 'asdasdsadsa', 'asdsadsadsadsa', '2022-02-02 04:53:17', '2022-02-02 04:53:17'),
(4, 'Sushil KC', 'sushilkc2024@gmail.com', 'asd', 'alksfdsajfjasklfdjlskajdflkdsjfl', '2022-03-26 07:43:36', '2022-03-26 07:43:36'),
(5, 'Sushil KC', 'sushilkc2024@gmail.com', 'nepali gir;l', 'skalofjas;lkdfjla;skd', '2022-03-26 07:44:47', '2022-03-26 07:44:47'),
(6, 'Sushil KC', 'sushilkc2024@gmail.com', 'saf', 'aklssjfdal;kfdjl;kds', '2022-03-26 07:46:50', '2022-03-26 07:46:50'),
(7, 'Sushil KC', 'sushilkc2024@gmail.com', 'nepali gir;l', 'asd;asdjkasdkfjlkgjdklfjglkjdlfgjldkfjglkfj', '2022-03-26 07:54:13', '2022-03-26 07:54:13'),
(8, 'Sushil KC', 'sushilkc2024@gmail.com', 'nepali gir;l', 'asd;asdjkasdkfjlkgjdklfjglkjdlfgjldkfjglkfj', '2022-03-26 07:55:10', '2022-03-26 07:55:10'),
(9, 'Sushil KC', 'sushilkc2024@gmail.com', 'nepali gir;l', 'asd;asdjkasdkfjlkgjdklfjglkjdlfgjldkfjglkfj', '2022-03-26 07:55:49', '2022-03-26 07:55:49'),
(10, 'Sushil KC', 'sushilkc2024@gmail.com', 'nepali gir;l', 'asd;asdjkasdkfjlkgjdklfjglkjdlfgjldkfjglkfj', '2022-03-26 07:55:49', '2022-03-26 07:55:49'),
(11, 'Sushil KC', 'sushilkc2024@gmail.com', 'nepali gir;l', 'asd;asdjkasdkfjlkgjdklfjglkjdlfgjldkfjglkfj', '2022-03-26 07:57:32', '2022-03-26 07:57:32'),
(12, 'Sushil KC', 'sushilkc2024@gmail.com', 'nepali gir;l', 'asd;asdjkasdkfjlkgjdklfjglkjdlfgjldkfjglkfj', '2022-03-26 07:57:32', '2022-03-26 07:57:32'),
(13, 'Sushil KC', 'sushilkc2024@gmail.com', 'nepali gir;l', 'asd;asdjkasdkfjlkgjdklfjglkjdlfgjldkfjglkfj', '2022-03-26 07:57:49', '2022-03-26 07:57:49'),
(14, 'Sushil KC', 'sushilkc2024@gmail.com', 'nepali gir;l', 'asd;asdjkasdkfjlkgjdklfjglkjdlfgjldkfjglkfj', '2022-03-26 07:57:49', '2022-03-26 07:57:49'),
(15, 'Sushil KC', 'sushilkc2024@gmail.com', 'nepali gir;l', 'asd;asdjkasdkfjlkgjdklfjglkjdlfgjldkfjglkfj', '2022-03-26 07:58:23', '2022-03-26 07:58:23'),
(16, 'Sushil KC', 'sushilkc2024@gmail.com', 'nepali gir;l', 'asd;asdjkasdkfjlkgjdklfjglkjdlfgjldkfjglkfj', '2022-03-26 07:58:23', '2022-03-26 07:58:23'),
(17, 'Sushil KC', 'sushilkc2024@gmail.com', 'nepali gir;l', 'asd;asdjkasdkfjlkgjdklfjglkjdlfgjldkfjglkfj', '2022-03-26 07:59:17', '2022-03-26 07:59:17'),
(18, 'Sushil KC', 'sushilkc2024@gmail.com', 'nepali gir;l', 'asd;asdjkasdkfjlkgjdklfjglkjdlfgjldkfjglkfj', '2022-03-26 07:59:17', '2022-03-26 07:59:17'),
(19, 'Sushil KC', 'sushilkc2024@gmail.com', 'nepali gir;lajskdjfsajfhjks', 'lkjlk;jfla;klsdfjklsadjflkasdj;f', '2022-03-26 08:00:08', '2022-03-26 08:00:08'),
(20, 'Sushil KC', 'sushilkc2024@gmail.com', 'nepali gir;lajskdjfsajfhjks', 'lkjlk;jfla;klsdfjklsadjflkasdj;f', '2022-03-26 08:00:08', '2022-03-26 08:00:08'),
(21, 'Sushil KC', 'sushilkc2024@gmail.com', 'nepali gir;lajskdjfsajfhjks', 'lkjlk;jfla;klsdfjklsadjflkasdj;f', '2022-03-26 08:01:14', '2022-03-26 08:01:14'),
(22, 'Sushil KC', 'sushilkc2024@gmail.com', 'nepali gir;lajskdjfsajfhjks', 'lkjlk;jfla;klsdfjklsadjflkasdj;f', '2022-03-26 08:01:14', '2022-03-26 08:01:14'),
(23, 'Sushil KC', 'sushilkc2024@gmail.com', 'nepali gir;l', 'aksldjlfajs;lkdfjldks', '2022-03-26 08:01:44', '2022-03-26 08:01:44'),
(24, 'Sushil KC', 'sushilkc2024@gmail.com', 'nepali gir;l', 'aksldjlfajs;lkdfjldks', '2022-03-26 08:01:44', '2022-03-26 08:01:44'),
(25, 'Sushil KC', 'sushilkc2024@gmail.com', 'nepali gir;l', 'aksldjlfajs;lkdfjldks', '2022-03-26 08:04:43', '2022-03-26 08:04:43'),
(26, 'Sushil KC', 'sushilkc2024@gmail.com', 'nepali gir;l', 'aksldjlfajs;lkdfjldks', '2022-03-26 08:04:43', '2022-03-26 08:04:43'),
(27, 'Sushil KC', 'sushilkc2024@gmail.com', 'nepali gir;l', 'aklsdjfadskf;kasjdfs', '2022-03-26 08:05:12', '2022-03-26 08:05:12'),
(28, 'Sushil KC', 'sushilkc2024@gmail.com', 'nepali gir;l', 'aklsdjfadskf;kasjdfs', '2022-03-26 08:05:12', '2022-03-26 08:05:12'),
(29, 'Sushil KC', 'sushilkc2024@gmail.com', 'nepali gir;l', 'aklsdjfadskf;kasjdfs', '2022-03-26 08:05:50', '2022-03-26 08:05:50'),
(30, 'Sushil KC', 'sushilkc2024@gmail.com', 'nepali gir;l', 'aklsdjfadskf;kasjdfs', '2022-03-26 08:05:50', '2022-03-26 08:05:50'),
(31, 'Sushil KC', 'sushilkc2024@gmail.com', 'nepali gir;l', 'klasfksalk;dfjlksajdflksdjfkjdsfkjd', '2022-03-26 08:08:03', '2022-03-26 08:08:03'),
(32, 'Sushil KC', 'sushilkc2024@gmail.com', 'nepali gir;l', 'klasfksalk;dfjlksajdflksdjfkjdsfkjd', '2022-03-26 08:08:03', '2022-03-26 08:08:03'),
(33, 'Sushil KC', 'sushilkc2024@gmail.com', 'saf', 'sadklaskjfdkls;jdf', '2022-03-26 08:08:59', '2022-03-26 08:08:59'),
(34, 'Sushil KC', 'sushilkc2024@gmail.com', 'saf', 'sadklaskjfdkls;jdf', '2022-03-26 08:08:59', '2022-03-26 08:08:59'),
(35, 'Sushil KC', 'sushilkc2024@gmail.com', 'saf', 'sadklaskjfdkls;jdf', '2022-03-26 08:09:42', '2022-03-26 08:09:42'),
(36, 'Sushil KC', 'sushilkc2024@gmail.com', 'saf', 'sadklaskjfdkls;jdf', '2022-03-26 08:09:42', '2022-03-26 08:09:42'),
(37, 'Sushil KC', 'sushilkc2024@gmail.com', 'nepali gir;l', 'aklsdfjaskljdfklsjdlkfjslkdjf', '2022-03-26 08:10:17', '2022-03-26 08:10:17'),
(38, 'Sushil KC', 'sushilkc2024@gmail.com', 'nepali gir;l', 'aklsdfjaskljdfklsjdlkfjslkdjf', '2022-03-26 08:10:17', '2022-03-26 08:10:17'),
(39, 'Sushil KC', 'sushilkc2024@gmail.com', 'nepali gir;l', 'aklsdfjaskljdfklsjdlkfjslkdjf', '2022-03-26 08:10:23', '2022-03-26 08:10:23'),
(40, 'Sushil KC', 'sushilkc2024@gmail.com', 'nepali gir;l', 'aklsdfjaskljdfklsjdlkfjslkdjf', '2022-03-26 08:10:23', '2022-03-26 08:10:23'),
(41, 'Hira Roka', 'hiraroka@gmail.com', 'nepali gir;l', 'ksdjfl;aksjdfkjsdl;kfj;s', '2022-03-26 08:11:53', '2022-03-26 08:11:53'),
(42, 'Hira Roka', 'hiraroka@gmail.com', 'nepali gir;l', 'ksdjfl;aksjdfkjsdl;kfj;s', '2022-03-26 08:11:53', '2022-03-26 08:11:53'),
(43, 'Sushil KC', 'sushilkc2024@gmail.com', 'nepali gir;l', 'jlkjsd;ljl;kdsgf', '2022-03-26 08:14:56', '2022-03-26 08:14:56'),
(44, 'Sushil KC', 'sushilkc2024@gmail.com', 'nepali gir;l', 'jlkjsd;ljl;kdsgf', '2022-03-26 08:14:56', '2022-03-26 08:14:56'),
(45, 'Sushil KC', 'sushilkc2024@gmail.com', 'nepali gir;l', 'asdfjaskldjfklsajdfkjsadlkf', '2022-03-26 08:16:00', '2022-03-26 08:16:00'),
(46, 'Sushil KC', 'sushilkc2024@gmail.com', 'nepali gir;l', 'asdfjaskldjfklsajdfkjsadlkf', '2022-03-26 08:16:00', '2022-03-26 08:16:00'),
(47, 'Sushil KC', 'sushilkc2024@gmail.com', 'Loan Pass', 'There sir i am passed the education Loan', '2022-04-13 10:43:00', '2022-04-13 10:43:00'),
(48, 'Sushil KC', 'sushilkc2024@gmail.com', 'Loan Pass', 'There sir i am passed the education Loan', '2022-04-13 10:43:00', '2022-04-13 10:43:00'),
(49, 'Sushil KC', 'sushilkc2024@gmail.com', 'Loan Pass', 'There sir i am passed the education Loan', '2022-04-13 10:43:30', '2022-04-13 10:43:30'),
(50, 'Sushil KC', 'sushilkc2024@gmail.com', 'Loan Pass', 'There sir i am passed the education Loan', '2022-04-13 10:43:30', '2022-04-13 10:43:30'),
(51, 'Bom Bahadur KC', 'sushilkc2024@gmail.com', 'Nepali Cooperative Org', 'here is my name', '2022-04-27 18:01:30', '2022-04-27 18:01:30'),
(52, 'Bom Bahadur KC', 'sushilkc2024@gmail.com', 'Nepali Cooperative Org', 'here is my name', '2022-04-27 18:01:30', '2022-04-27 18:01:30');

-- --------------------------------------------------------

--
-- Table structure for table `download_files`
--

CREATE TABLE `download_files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `download_files`
--

INSERT INTO `download_files` (`id`, `title`, `file`, `created_at`, `updated_at`) VALUES
(3, 'Suryodaya Admin Rules', '1651101914.docx', '2022-04-27 17:40:14', '2022-04-27 17:40:14'),
(4, 'Nepal Cooperative files', '1651101959.pdf', '2022-04-27 17:40:59', '2022-04-27 17:40:59');

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
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `title`, `created_at`, `updated_at`) VALUES
(6, '1648297123.jpg', 'Roman to Nepali online tool is basically desktop or PC authoring tool', '2022-03-26 06:33:43', '2022-03-26 06:33:43'),
(7, '1648297145.jpg', 'Roman to Nepali online tool is basically desktop or PC authoring tool', '2022-03-26 06:34:05', '2022-03-26 06:34:05');

-- --------------------------------------------------------

--
-- Table structure for table `home_sliders`
--

CREATE TABLE `home_sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_sliders`
--

INSERT INTO `home_sliders` (`id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(58, '1648297438.jpg', '1', '2022-03-26 06:38:59', '2022-03-26 06:38:59'),
(59, '1648297464.jpg', 'o', '2022-03-26 06:39:24', '2022-03-26 06:39:24'),
(60, '1648297491.jpg', 'o', '2022-03-26 06:39:51', '2022-03-26 06:39:51');

-- --------------------------------------------------------

--
-- Table structure for table `loans_forms`
--

CREATE TABLE `loans_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `loan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provience` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peraddress` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempaddress` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `objective` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loans_forms`
--

INSERT INTO `loans_forms` (`id`, `loan`, `city`, `provience`, `peraddress`, `tempaddress`, `objective`, `created_at`, `updated_at`, `phone`, `image`, `user_id`) VALUES
(29, 'Home Loan', 'nepal', 'Provience 3', 'dang', 'rolpa', 'hi i am sushil', '2022-04-22 22:27:37', '2022-04-22 22:27:37', '9864870276', '1650687157.jpg', 1),
(30, 'Home Loan', 'nepal', 'Provience 2', 'dang', 'rolpa', 'Wasfsjkfhkjsf', '2022-04-26 01:16:57', '2022-04-26 01:16:57', '9864870276', '1650956516.png', 1),
(31, 'House Loan', 'nepal', 'Provience 2', 'dang', 'rolpa', 'asdasd', '2022-04-26 01:24:00', '2022-04-26 01:24:00', '9864870276', '1650956940.png', 1),
(32, 'House Loan', 'nepal', 'Provience 2', 'dang', 'rolpa', 'asdasd', '2022-04-26 01:24:19', '2022-04-26 01:24:19', '9864870276', '1650956959.png', 1),
(33, 'Education Loan', 'nepal', 'Provience 1', 'dang', 'rolpa', 'skjfjasfkjsdhfjk', '2022-04-26 01:25:25', '2022-04-26 01:25:25', '9864870276', '1650957025.png', 1),
(34, 'Education Loan', 'nepal', 'Provience 2', 'Tuplsiur-6 dang', 'sunilsmarit -3 rolpa', 'Educational Purpose', '2022-04-26 02:10:14', '2022-04-26 02:10:14', '9864870276', '1650959714.jpg', 1),
(35, 'Education Loan', 'nepal', 'Provience', 'Tuplsiur-6 dang, nepal', 'sunilsmarit -3 rolpa,nepal', 'Educational Purpose', '2022-04-26 02:10:55', '2022-04-26 02:10:55', '9864870276', '1650959755.png', 1),
(36, 'Education Loan', 'Dang', 'Provience 5', 'Sunilsmarit-3, Sulichaur', 'Tulsipur-6 Dang nepal', 'Educational Purpose', '2022-04-26 02:11:44', '2022-04-26 02:11:44', '9864524564', '1650959804.jpg', 1),
(37, 'Education Loan', 'nepal', 'Provience 3', 'Tuplsiur-6 dang, nepal', 'sunilsmarit -3 rolpa,nepal', 'dasdsad', '2022-04-27 19:21:27', '2022-04-27 19:21:27', '9864870276', '1651107987.jpg', 4),
(38, 'Education Loan', 'nepal', 'Provience 4', 'Tuplsiur-6 dang, nepal', 'sunilsmarit -3 rolpa,nepal', 'Education Loan', '2022-04-27 22:19:38', '2022-04-27 22:19:38', '9864563927', '1651118677.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `memberships`
--

CREATE TABLE `memberships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `memberships`
--

INSERT INTO `memberships` (`id`, `name`, `post`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Sushil KC', 'Manager', '1649870159.jpg', '2022-04-13 11:30:59', '2022-04-13 11:30:59'),
(2, 'Sushil KC', 'Manager', '1649870648.png', '2022-04-13 11:39:08', '2022-04-13 11:39:08');

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
(5, '2022_02_02_042307_create_contacts_table', 2),
(6, '2022_02_07_090124_create_home_sliders_table', 3),
(7, '2022_02_07_110400_create_home_sliders_table', 4),
(8, '2022_02_08_154440_create_user_forms_table', 5),
(9, '2022_02_09_021709_create_verify_users_table', 5),
(10, '2022_02_10_020100_create_about_shows_table', 5),
(11, '2022_02_17_071632_create_verify_users_table', 6),
(12, '2022_03_03_065404_create_notices_table', 7),
(13, '2022_03_03_120630_create_news_table', 8),
(14, '2022_03_03_220529_create_loans_applies_table', 9),
(15, '2022_03_07_112005_create_loan_forms_table', 10),
(16, '2022_03_07_151411_create_loans_forms_table', 11),
(17, '2022_03_07_175009_create_notifications_table', 12),
(18, '2022_03_07_202433_create_download_files_table', 13),
(19, '2022_03_08_103905_create_loan_forms_table', 14),
(20, '2022_03_09_172032_create_loans_forms_table', 15),
(21, '2022_03_14_031707_create_notifications_table', 16),
(22, '2022_03_15_132318_create_loan_users_table', 17),
(23, '2022_03_21_145457_create_galleries_table', 18),
(24, '2022_03_26_144317_create_teams_table', 19),
(25, '2022_04_13_170158_create_memberships_table', 20),
(26, '2022_04_22_143836_create_ads_table', 21);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `image`, `title`, `description`, `created_at`, `updated_at`) VALUES
(5, '1651106556.jpg', 'सदस्य शिक्षा तालिम सम्पन्न', 'साकोसको वार्षिक कार्यक्रम अनुसार संस्थाले सदस्य शिक्षा कार्यक्रम सन्चालन गर्दै आएकोमा भण्डारढीक सेवाकेन्द्र अन्तर्गतका आफ्ना सदस्यहरुलाई मिति २०७८ पौष २ गते सदस्य शिक्षा तालिम प्रदान गरेको छ । साकोसको वार्षिक कार्यक्रम अनुसार संस्थाले सदस्य शिक्षा कार्यक्रम सन्चालन गर्दै आएकोमा भण्डारढीक सेवाकेन्द्र अन्तर्गतका आफ्ना सदस्यहरुलाई मिति २०७८ पौष २ गते सदस्य शिक्षा तालिम प्रदान गरेको छ । साकोसको वार्षिक कार्यक्रम अनुसार संस्थाले सदस्य शिक्षा कार्यक्रम सन्चालन गर्दै आएकोमा भण्डारढीक सेवाकेन्द्र अन्तर्गतका आफ्ना सदस्यहरुलाई मिति २०७८ पौष २ गते सदस्य शिक्षा तालिम प्रदान गरेको छ । साकोसको वार्षिक कार्यक्रम अनुसार संस्थाले सदस्य शिक्षा कार्यक्रम सन्चालन गर्दै आएकोमा भण्डारढीक सेवाकेन्द्र अन्तर्गतका आफ्ना सदस्यहरुलाई मिति २०७८ पौष २ गते सदस्य शिक्षा तालिम प्रदान गरेको छ । साकोसको वार्षिक कार्यक्रम अनुसार संस्थाले सदस्य शिक्षा कार्यक्रम सन्चालन गर्दै आएकोमा भण्डारढीक सेवाकेन्द्र अन्तर्गतका आफ्ना सदस्यहरुलाई मिति २०७८ पौष २ गते सदस्य शिक्षा तालिम प्रदान गरेको छ । साकोसको वार्षिक कार्यक्रम अनुसार संस्थाले सदस्य शिक्षा कार्यक्रम सन्चालन गर्दै आएकोमा भण्डारढीक सेवाकेन्द्र अन्तर्गतका आफ्ना सदस्यहरुलाई मिति २०७८ पौष २ गते सदस्य शिक्षा तालिम प्रदान गरेको छ ।साकोसको वार्षिक कार्यक्रम अनुसार संस्थाले सदस्य शिक्षा कार्यक्रम सन्चालन गर्दै आएकोमा भण्डारढीक सेवाकेन्द्र अन्तर्गतका आफ्ना सदस्यहरुलाई मिति २०७८ पौष २ गते सदस्य शिक्षा तालिम प्रदान गरेको छ ।</</', '2022-03-03 10:20:03', '2022-03-03 10:20:03'),
(6, '1651106579.jpg', 'सदस्य शिक्षा तालिम सम्पन्नसदस्य शिक्षा तालिम सम्पन्नसदस्य शिक्षा तालिम सम्पन्न', 'साकोसको वार्षिक कार्यक्रम अनुसार संस्थाले सदस्य शिक्षा कार्यक्रम सन्चालन गर्दै आएकोमा भण्डारढीक सेवाकेन्द्र अन्तर्गतका आफ्ना सदस्यहरुलाई मिति २०७८ पौष २ गते सदस्य शिक्षा तालिम प्रदान गरेको छ ।साकोसको वार्षिक कार्यक्रम अनुसार संस्थाले सदस्य शिक्षा कार्यक्रम सन्चालन गर्दै आएकोमा भण्डारढीक सेवाकेन्द्र अन्तर्गतका आफ्ना सदस्यहरुलाई मिति २०७८ पौष २ गते सदस्य शिक्षा तालिम प्रदान गरेको छ ।साकोसको वार्षिक कार्यक्रम अनुसार संस्थाले सदस्य शिक्षा कार्यक्रम सन्चालन गर्दै आएकोमा भण्डारढीक सेवाकेन्द्र अन्तर्गतका आफ्ना सदस्यहरुलाई मिति २०७८ पौष २ गते सदस्य शिक्षा तालिम प्रदान गरेको छ ।साकोसको वार्षिक कार्यक्रम अनुसार संस्थाले सदस्य शिक्षा कार्यक्रम सन्चालन गर्दै आएकोमा भण्डारढीक सेवाकेन्द्र अन्तर्गतका आफ्ना सदस्यहरुलाई मिति २०७८ पौष २ गते सदस्य शिक्षा तालिम प्रदान गरेको छ ।साकोसको वार्षिक कार्यक्रम अनुसार संस्थाले सदस्य शिक्षा कार्यक्रम सन्चालन गर्दै आएकोमा भण्डारढीक सेवाकेन्द्र अन्तर्गतका आफ्ना सदस्यहरुलाई मिति २०७८ पौष २ गते सदस्य शिक्षा तालिम प्रदान गरेको छ ।साकोसको वार्षिक कार्यक्रम अनुसार संस्थाले सदस्य शिक्षा कार्यक्रम सन्चालन गर्दै आएकोमा भण्डारढीक सेवाकेन्द्र अन्तर्गतका आफ्ना सदस्यहरुलाई मिति २०७८ पौष २ गते सदस्य शिक्षा तालिम प्रदान गरेको छ ।</', '2022-03-03 10:41:33', '2022-03-03 10:41:33'),
(8, '1651106608.jpg', 'सदस्य शिक्षा तालिम सम्पन्नसदस्य शिक्षा तालिम सम्पन्नसदस्य शिक्षा तालिम सम्पन्न', 'साकोसको वार्षिक कार्यक्रम अनुसार संस्थाले सदस्य शिक्षा कार्यक्रम सन्चालन गर्दै आएकोमा भण्डारढीक सेवाकेन्द्र अन्तर्गतका आफ्ना सदस्यहरुलाई मिति २०७८ पौष २ गते सदस्य शिक्षा तालिम प्रदान गरेको छ ।साकोसको वार्षिक कार्यक्रम अनुसार संस्थाले सदस्य शिक्षा कार्यक्रम सन्चालन गर्दै आएकोमा भण्डारढीक सेवाकेन्द्र अन्तर्गतका आफ्ना सदस्यहरुलाई मिति २०७८ पौष २ गते सदस्य शिक्षा तालिम प्रदान गरेको छ ।साकोसको वार्षिक कार्यक्रम अनुसार संस्थाले सदस्य शिक्षा कार्यक्रम सन्चालन गर्दै आएकोमा भण्डारढीक सेवाकेन्द्र अन्तर्गतका आफ्ना सदस्यहरुलाई मिति २०७८ पौष २ गते सदस्य शिक्षा तालिम प्रदान गरेको छ ।साकोसको वार्षिक कार्यक्रम अनुसार संस्थाले सदस्य शिक्षा कार्यक्रम सन्चालन गर्दै आएकोमा भण्डारढीक सेवाकेन्द्र अन्तर्गतका आफ्ना सदस्यहरुलाई मिति २०७८ पौष २ गते सदस्य शिक्षा तालिम प्रदान गरेको छ ।<', '2022-03-03 13:03:50', '2022-03-03 13:03:50'),
(9, '1651106631.jpg', 'सदस्यहरुलाई मिति २०७८ पौष २ गते सदस्य शिक्षा तालिम प्रदान गरेको छ ।', 'साकोसको वार्षिक कार्यक्रम अनुसार संस्थाले सदस्य शिक्षा कार्यक्रम सन्चालन गर्दै आएकोमा भण्डारढीक सेवाकेन्द्र अन्तर्गतका आफ्ना सदस्यहरुलाई मिति २०७८ पौष २ गते सदस्य शिक्षा तालिम प्रदान गरेको छ ।साकोसको वार्षिक कार्यक्रम अनुसार संस्थाले सदस्य शिक्षा कार्यक्रम सन्चालन गर्दै आएकोमा भण्डारढीक सेवाकेन्द्र अन्तर्गतका आफ्ना सदस्यहरुलाई मिति २०७८ पौष २ गते सदस्य शिक्षा तालिम प्रदान गरेको छ ।साकोसको वार्षिक कार्यक्रम अनुसार संस्थाले सदस्य शिक्षा कार्यक्रम सन्चालन गर्दै आएकोमा भण्डारढीक सेवाकेन्द्र अन्तर्गतका आफ्ना सदस्यहरुलाई मिति २०७८ पौष २ गते सदस्य शिक्षा तालिम प्रदान गरेको छ ।साकोसको वार्षिक कार्यक्रम अनुसार संस्थाले सदस्य शिक्षा कार्यक्रम सन्चालन गर्दै आएकोमा भण्डारढीक सेवाकेन्द्र अन्तर्गतका आफ्ना सदस्यहरुलाई मिति २०७८ पौष २ गते सदस्य शिक्षा तालिम प्रदान गरेको छ ।साकोसको वार्षिक कार्यक्रम अनुसार संस्थाले सदस्य शिक्षा कार्यक्रम सन्चालन गर्दै आएकोमा भण्डारढीक सेवाकेन्द्र अन्तर्गतका आफ्ना सदस्यहरुलाई मिति २०७८ पौष २ गते सदस्य शिक्षा तालिम प्रदान गरेको छ ।साकोसको वार्षिक कार्यक्रम अनुसार संस्थाले सदस्य शिक्षा कार्यक्रम सन्चालन गर्दै आएकोमा भण्डारढीक सेवाकेन्द्र अन्तर्गतका आफ्ना सदस्यहरुलाई मिति २०७८ पौष २ गते सदस्य शिक्षा तालिम प्रदान गरेको छ ।', '2022-03-16 02:42:12', '2022-03-16 02:42:12');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `description`, `created_at`, `updated_at`) VALUES
(2, 'समुदायमा सुशासनयुक्त, समुदायमा आधारित र सहकारी अभियानमा नेतृत्व लिन सक्षम नेपालको उत्कृष्ट सहकारी संस्था ।', '2022-03-03 05:23:44', '2022-03-08 02:44:51');

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
('admin@admin.com', '$2y$10$APTBihcJEKdeSDHXbm6LTuubZulgk5YC9SdkG3ue/KMMd/HSogjxm', '2022-04-18 11:43:00'),
('sushilkc2024@gmail.com', '$2y$10$3b/oXw9lRdfuXlt1QFwydORODqtY5Cw.MB8ENk714M1cv47wlRise', '2022-04-22 22:13:32');

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
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `post`, `salary`, `age`, `image`, `created_at`, `updated_at`) VALUES
(4, 'Bom Bahadur K.C.', 'Manager', '40,000', '28', '1649852766.jpg', '2022-04-13 06:41:06', '2022-04-13 06:41:06'),
(5, 'Lila Budhathoki', 'Senior Staff', '25,000', '26', '1649852848.jpg', '2022-04-13 06:42:28', '2022-04-13 06:42:28'),
(6, 'Bhumika Thapa', 'Staff', '20,000', '27', '1649852935.jpg', '2022-04-13 06:43:55', '2022-04-13 06:43:55'),
(7, 'Sabitra K.C.', 'Staff', '15,000', '24', '1649852972.jpg', '2022-04-13 06:44:32', '2022-04-13 06:44:32'),
(8, 'Begam Budhathoki', 'Staff, Driver', '25,000', '24', '1649853017.jpg', '2022-04-13 06:45:17', '2022-04-13 06:45:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(1) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `favoriteColor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `favoriteColor`) VALUES
(1, 'Sushil', 'sushilkc2024@gmail.com', 2, NULL, '$2y$10$1ad0gG7p2DUFkM8dobcjfu5GUL2Obk7wlmCWzAaenbu3FTzTd1om2', 'S1IS0vNDrNlbWQREDnCoUxvgGymHcbsmNEj22ynQ2rbId896dqVRRLwLFYEK', NULL, '2022-04-22 10:15:28', 'red'),
(2, 'Sushil KC', 'sushilkc908@gmail.com', 1, NULL, '$2y$10$Rj5LkqnWdvA44.fzBoYKGO0F9owbvyW/81KrPhyr4waIe8C11gEWC', 'BIcKqcO57KW6e5Z6l4MUdnulpZgUCg1fH5dUfTHlXErmwvbyC8XbFviamu3x', NULL, '2022-04-22 21:31:20', 'blue'),
(3, 'sushil KC', 'sushilkc@admin.com', 2, NULL, '$2y$10$01nW30OOrjUG2rVfTMFa2.Oh0QZqeEhWrCIKlyldfDAqvWRdlwRl6', NULL, '2022-04-22 21:01:44', '2022-04-22 21:01:44', 'red'),
(4, 'Hira Roka', 'hiraroka@gmail.com', 2, NULL, '$2y$10$SOow.K4pk3UFJewT7uQLeuOn96vFB8yae95jZUrra922OrC.0shQu', NULL, '2022-04-27 19:06:45', '2022-04-27 19:06:45', 'red'),
(5, 'rabin', 'rabin@gmail.com', 2, NULL, '$2y$10$vfxAwDMTaazOR1SXvC9lqeC498rWD5lVThJFRieU03wRnfzeAPuC.', NULL, '2022-04-27 22:16:07', '2022-04-27 22:16:07', '123');

-- --------------------------------------------------------

--
-- Table structure for table `verify_users`
--

CREATE TABLE `verify_users` (
  `user_id` int(11) NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `verify_users`
--

INSERT INTO `verify_users` (`user_id`, `token`, `created_at`, `updated_at`) VALUES
(1, 'hgfhgfhgffghfhgf', NULL, NULL),
(16, '167426c2db4d0470c69ed93eb950d306355759cdd1a120f7c070d22cdb927e5825', '2022-02-17 17:15:06', '2022-02-17 17:15:06'),
(17, '170a2fe740b1dabaf31135fa05805a099eae0880fb55432d3bf183de2a3ff512ca', '2022-02-17 17:23:21', '2022-02-17 17:23:21'),
(18, '18bd48e77b59e69a4b1acccd18ffeebe124f0748fc8abfc243aecafbea60387b11', '2022-02-17 17:26:18', '2022-02-17 17:26:18'),
(19, '1973d0b5f27faa11ad2f3e7f10c3feaecd4ec837738b34e939cd3da8734974ea3a', '2022-02-17 18:56:21', '2022-02-17 18:56:21'),
(20, '20e04659513f13011dc66ebc883bb063a788ccfaf5979eaa80ef4d2c13df9614f0', '2022-02-17 18:58:53', '2022-02-17 18:58:53'),
(21, '21ac4e14ec652d0a7fe00a749956aeff580be9b3c707bc97122cef8b7fde9005d8', '2022-02-17 19:01:22', '2022-02-17 19:01:22'),
(22, '226b298e9313f42cd6879b415c38bf5103dd5a420201ff6a1135e0ba3723dd59cd', '2022-02-17 21:04:47', '2022-02-17 21:04:47'),
(23, '2330d31cf25bbd6390df9182d2940bd626ca3e1639bae63f5b9bfc188243e051a3', '2022-02-17 22:23:48', '2022-02-17 22:23:48'),
(24, '24bf2a70fe7499557cb2465f6f64f2fe4cd00969db489392a864b7f5d99be9ec94', '2022-02-17 22:38:17', '2022-02-17 22:38:17'),
(26, '2666e3831f401c03e1b50cfa741c8d21db63330ba25de463a68c3d6ff2d5ec49c9', '2022-02-18 13:04:48', '2022-02-18 13:04:48'),
(1, 'hgfhgfhgffghfhgf', NULL, NULL),
(16, '167426c2db4d0470c69ed93eb950d306355759cdd1a120f7c070d22cdb927e5825', '2022-02-17 17:15:06', '2022-02-17 17:15:06'),
(17, '170a2fe740b1dabaf31135fa05805a099eae0880fb55432d3bf183de2a3ff512ca', '2022-02-17 17:23:21', '2022-02-17 17:23:21'),
(18, '18bd48e77b59e69a4b1acccd18ffeebe124f0748fc8abfc243aecafbea60387b11', '2022-02-17 17:26:18', '2022-02-17 17:26:18'),
(19, '1973d0b5f27faa11ad2f3e7f10c3feaecd4ec837738b34e939cd3da8734974ea3a', '2022-02-17 18:56:21', '2022-02-17 18:56:21'),
(20, '20e04659513f13011dc66ebc883bb063a788ccfaf5979eaa80ef4d2c13df9614f0', '2022-02-17 18:58:53', '2022-02-17 18:58:53'),
(21, '21ac4e14ec652d0a7fe00a749956aeff580be9b3c707bc97122cef8b7fde9005d8', '2022-02-17 19:01:22', '2022-02-17 19:01:22'),
(22, '226b298e9313f42cd6879b415c38bf5103dd5a420201ff6a1135e0ba3723dd59cd', '2022-02-17 21:04:47', '2022-02-17 21:04:47'),
(23, '2330d31cf25bbd6390df9182d2940bd626ca3e1639bae63f5b9bfc188243e051a3', '2022-02-17 22:23:48', '2022-02-17 22:23:48'),
(24, '24bf2a70fe7499557cb2465f6f64f2fe4cd00969db489392a864b7f5d99be9ec94', '2022-02-17 22:38:17', '2022-02-17 22:38:17'),
(26, '2666e3831f401c03e1b50cfa741c8d21db63330ba25de463a68c3d6ff2d5ec49c9', '2022-02-18 13:04:48', '2022-02-18 13:04:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_shows`
--
ALTER TABLE `about_shows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `download_files`
--
ALTER TABLE `download_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_sliders`
--
ALTER TABLE `home_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loans_forms`
--
ALTER TABLE `loans_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `memberships`
--
ALTER TABLE `memberships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
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
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `about_shows`
--
ALTER TABLE `about_shows`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `download_files`
--
ALTER TABLE `download_files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `home_sliders`
--
ALTER TABLE `home_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `loans_forms`
--
ALTER TABLE `loans_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `memberships`
--
ALTER TABLE `memberships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
