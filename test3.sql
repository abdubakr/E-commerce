-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 14, 2018 at 07:47 PM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test3`
--

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `links` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2018_07_21_215327_create_settings_table', 2),
(6, '2018_10_10_211030_create_pages_table', 3),
(7, '2018_10_22_214529_create_sliders_table', 4),
(8, '2018_10_26_190448_create_menus_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_desc` text COLLATE utf8mb4_unicode_ci,
  `seo_keys` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `slug`, `title`, `content`, `seo_desc`, `seo_keys`, `image`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'gdfgdfgdf', 'gdfgdfgdf', '<p>fdgdfgdf</p>', NULL, 'gdfgdf', 'image/2018/10/20/xFxyPJ6Y2PYwtXDup2LR6kazfiN04zFdsWdGwJbQ.jpeg', '9', '2018-10-19 18:57:07', '2018-10-20 20:41:18'),
(2, 'quaerat-maiores-quia-autem-officia-nisi-quisquam-atque-eu-eaque-est-in', 'Quaerat maiores quia autem officia nisi quisquam atque eu eaque est in', '<p>Consectetur beatae accusamus dolorem non asperiores ut doloribus quis suscipit quod etConsectetur beatae accusamus dolorem non asperiores ut doloribus quis suscipit quod et</p>', NULL, 'Temporibus iusto voluptate quo facere officiis totam laboriosam ab', '2018/10/20/a8AnGkEimbawXlGLDw3BJutV6cJZ5aNQNRdt0nCj.jpeg', '9', '2018-10-19 18:59:01', '2018-10-20 20:43:03'),
(3, 'qui-facere-maxime-placeat-omnis-voluptatem', 'Qui facere maxime placeat omnis voluptatem', '<p>seo_descseo_desc</p>', NULL, 'Occaecat commodo eligendi eaque eos eveniet provident est aut', NULL, '9', '2018-10-19 19:01:20', '2018-10-19 19:01:20'),
(4, 'saepe-dolor-expedita-alias-quia-id-ea-maiores-aute', 'Saepe dolor expedita alias quia id ea maiores aute', '<p>Quidem suscipit veritatis excepteur ex aut autem ut</p>', NULL, 'Quidem suscipit veritatis excepteur ex aut autem ut', 'image/2018/10/26/9yHVmYpB3LpBBKXcSCLazjLmumVYN6KC44xvDN36.jpeg', '9', '2018-10-26 12:52:22', '2018-10-26 12:52:22');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sorting_number` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `title`, `value`, `type`, `options`, `sorting_number`, `created_at`, `updated_at`) VALUES
(1, 'site_title', 'title', 'e-commerce', 'text', '', '1', NULL, '2018-09-21 18:08:21'),
(2, 'currency', 'currency', '1', 'select', 'USD,EGP', '2', NULL, '2018-09-21 18:28:44');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Fastest - Big Market - Left Navigation-ar', 'image/2018/10/26/9GkEgRYcwecNMOUFjb7QTJE87xTLUqKac6THYQkr.jpeg', '2018-10-26 15:53:10', '2018-10-26 15:53:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isAdmin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `isAdmin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ryder Rose', 'qetedy', 'qodibo@mailinator.net', '$2y$10$tl5Ll1Psx12j.ZriNc6aJe1w5H64aSPiSzAF2pR0v/gRL7oPNpZjO', '0', 'TUbUMryot4II3rNujFgr997hxmqUZeLScu9XtWOsF9Met8PGMaDOmqIOiRfC', '2018-07-18 20:37:37', '2018-09-28 20:49:27'),
(12, 'Lester Campos', 'sakob', 'xywukapa@mailinator.net', '$2y$10$yqRrrKU9QAv42xSG3q0Hd.lXdSOI22yj4t9B6jrj8whW0qytYzTyK', '0', NULL, '2018-11-02 12:35:27', '2018-11-02 12:35:27'),
(13, 'Tobias Oconnor', 'gubyqa', 'ryxupuni@mailinator.com', '$2y$10$rb2/.hqBo3UWqeDWl9exue3ZohNne6aLsw8Wev3ErjSL99DTcTKgy', '0', NULL, '2018-11-02 12:36:34', '2018-11-02 12:36:34'),
(14, '1', 'mirybosoz', 'ninerik@mailinator.net', '$2y$10$mx28B6GWJ9zZE5VzTSlx/.GXUch3rdW0ssayWXOjp6ecG.VeuRHw6', '0', NULL, '2018-11-02 12:38:39', '2018-11-02 12:38:39'),
(4, 'Dana Finley', 'fovasup@mailinator.net', 'fovasup@mailinator.net', '$2y$10$ORKete01rQ6xeRvB60yDj.M7Cx2e3a5jZTf3F2hSL6ba8Iyzklnt.', '0', 'CwM767bsAbgezRcTkMnfWUiNyrDZ4TKjlVlja15nu1ekdjiBmE1QRS9gwOfC', '2018-07-19 20:56:14', '2018-07-19 20:56:14'),
(11, 'Lucas Evans', 'abdo', 'obad@gmail.com', '$2y$10$9oYwmvc8nh.R1mHAPVyR5u19Rh4sL.d2rATontV1kSCML.pU3mkHG', '0', NULL, '2018-10-07 19:05:58', '2018-10-07 19:05:58'),
(7, 'Shea Rollinsd', 'lanywasid', 'bibeq@mailinator.com', '$2y$10$ftVxcV0okr4T5vXXyrulY.eqGzaUi1L4V9pF1yqlqkVZ.ubBG5n7S', '1', NULL, '2018-07-23 20:37:37', '2018-09-23 20:29:58'),
(8, 'Fatma saeed Mansour Gafeer', 'dsfdsfds', 'fatma111sopps@gmail.com', '$2y$10$MMglLKeiRvixtmfPZwHWO.F1YSNGYmUORJ5qCD1SGwJvdH9BTfh8O', '1', 'eJeiBlo1himMiUUVuUPdlPoSzkzNOWLhCHj9QwbzmV7L9l5lyRI3EGkVJujv', '2018-09-19 20:09:03', '2018-09-25 20:44:56'),
(9, 'ali', 'omar', 'ali@gmail.com', '$2y$10$cEuvMPjum2Y2fkZZ3aU9IeN5R79sg3UVJ0JPllmLHv37eLQX8Lw2S', '1', NULL, '2018-09-28 21:18:22', '2018-11-02 12:32:26');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
