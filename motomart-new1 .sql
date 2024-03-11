-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2024 at 04:06 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `motomart-new1`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`, `category_id`) VALUES
(2, 'RUSI', 'rusi', 0, '2024-03-04 03:43:10', '2024-03-04 03:43:10', 2),
(3, 'Zeneos', 'zeneos', 0, '2024-03-04 04:55:25', '2024-03-04 04:55:25', 2),
(4, 'Michelin ', 'michelin', 0, '2024-03-04 04:57:35', '2024-03-04 04:57:35', 2);

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  `meta_description` mediumtext NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=visible, 1=hidden',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `image`, `meta_title`, `meta_keyword`, `meta_description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Engine oil', 'engine-oil', 'Description of Category 1', 'uploads/category/1709551150.png', 'Meta Title for Category 1', 'Meta Keyword for Category 1', 'Meta Description for Category 1', 0, '2024-02-29 04:17:50', '2024-03-04 03:19:10'),
(2, 'Wheels', 'wheels', 'Description of Category 2', 'uploads/category/1709551140.jpg', 'Meta Title for Category 2', 'Meta Keyword for Category 2', 'Meta Description for Category 2', 0, '2024-02-29 04:17:50', '2024-03-04 03:19:00'),
(3, 'Engine parts', 'engine-parts', 'Description of Category 2', 'uploads/category/1709551129.jpg', 'Meta Title for Category 2', 'Meta Keyword for Category 2', 'Meta Description for Category 2', 0, '2024-02-29 04:17:50', '2024-03-04 03:18:49'),
(4, 'Rim and mags', 'rim-and-mags', 'Description of Category 2', 'uploads/category/1709551118.jpg', 'Meta Title for Category 2', 'Meta Keyword for Category 2', 'Meta Description for Category 2', 0, '2024-02-29 04:17:50', '2024-03-04 03:18:38'),
(5, 'Fairings', 'fairings', 'Description of Category 2', 'uploads/category/1709551103.jpg', 'Meta Title for Category 2', 'Meta Keyword for Category 2', 'Meta Description for Category 2', 0, '2024-02-29 04:17:50', '2024-03-04 03:18:23'),
(6, 'Suspensions', 'suspensions', 'Description of Category 2', 'uploads/category/1709551087.jpg', 'Meta Title for Category 2', 'Meta Keyword for Category 2', 'Meta Description for Category 2', 0, '2024-02-29 04:17:50', '2024-03-04 03:18:07'),
(7, 'Handle grip', 'handle-grip', 'Description of Category 2', 'uploads/category/1709551076.jpg', 'Meta Title for Category 2', 'Meta Keyword for Category 2', 'Meta Description for Category 2', 0, '2024-02-29 04:17:50', '2024-03-04 03:17:56'),
(8, 'Side mirror', 'side-mirror', 'Description of Category 2', 'uploads/category/1709551062.png', 'Meta Title for Category 2', 'Meta Keyword for Category 2', 'Meta Description for Category 2', 0, '2024-02-29 04:17:50', '2024-03-04 03:17:42'),
(10, 'Swing arm', 'swing-arm', 'Description of Category 2', 'uploads/category/1709551038.jpg', 'Meta Title for Category 2', 'Meta Keyword for Category 2', 'Meta Description for Category 2', 0, '2024-02-29 04:17:50', '2024-03-04 03:17:18'),
(11, 'Exhaust pipe', 'exhaust-pipe', 'Description of Category 2', 'uploads/category/1709551014.jpg', 'Meta Title for Category 2', 'Meta Keyword for Category 2', 'Meta Description for Category 2', 0, '2024-02-29 04:17:50', '2024-03-04 03:16:54'),
(12, 'Interior', 'interior', 'Description of Category 2', 'uploads/category/1709550994.jpg', 'Meta Title for Category 2', 'Meta Keyword for Category 2', 'Meta Description for Category 2', 0, '2024-02-29 04:17:50', '2024-03-04 03:16:34'),
(13, 'Handle bar', 'handle-bar', 'Description of Category 2', 'uploads/category/1709550981.jpeg', 'Meta Title for Category 2', 'Meta Keyword for Category 2', 'Meta Description for Category 2', 0, '2024-02-29 04:17:50', '2024-03-04 03:16:21'),
(14, 'Headlight', 'headlight', 'Description of Category 2', 'uploads/category/1709550972.jpg', 'Meta Title for Category 2', 'Meta Keyword for Category 2', 'Meta Description for Category 2', 0, '2024-02-29 04:17:50', '2024-03-04 03:16:12'),
(15, 'Tail Light', 'tail-light', 'Description of Category 2', 'uploads/category/1709550962.jpg', 'Meta Title for Category 2', 'Meta Keyword for Category 2', 'Meta Description for Category 2', 0, '2024-02-29 04:17:50', '2024-03-04 03:16:02'),
(16, 'Accessories', 'accessories', 'Description of Category 2', 'uploads/category/1709550953.jpg', 'Meta Title for Category 2', 'Meta Keyword for Category 2', 'Meta Description for Category 2', 0, '2024-02-29 04:17:50', '2024-03-04 03:15:53'),
(17, 'CVT Parts', 'cvt-parts', 'Description of Category 2', 'uploads/category/1709550944.jpg', 'Meta Title for Category 2', 'Meta Keyword for Category 2', 'Meta Description for Category 2', 0, '2024-02-29 04:17:50', '2024-03-04 03:15:44'),
(18, 'Chain and Sprockets', 'chain-and-sprockets', 'Description of Category 2', 'uploads/category/1709550931.jpg', 'Meta Title for Category 2', 'Meta Keyword for Category 2', 'Meta Description for Category 2', 0, '2024-02-29 04:17:50', '2024-03-04 03:15:31'),
(19, 'Chassis', 'chassis', 'Description of Category 2', 'uploads/category/1709550900.jpg', 'Meta Title for Category 2', 'Meta Keyword for Category 2', 'Meta Description for Category 2', 0, '2024-02-29 04:17:50', '2024-03-04 03:15:00'),
(20, 'Carburetor / Throttle', 'carburetor-throttle', 'Description of Category 2', 'uploads/category/1709550918.jpg', 'Meta Title for Category 2', 'Meta Keyword for Category 2', 'Meta Description for Category 2', 0, '2024-02-29 04:17:50', '2024-03-04 03:15:18'),
(22, 'Filters', 'filters', 'Description of Category 2', 'uploads/category/1709550858.jpg', 'Meta Title for Category 2', 'Meta Keyword for Category 2', 'Meta Description for Category 2', 0, '2024-02-29 04:17:50', '2024-03-04 03:14:18'),
(23, 'Cleaning Materials', 'cleaning-materials', 'Description of Category 2', 'uploads/category/1709550776.jpg', 'Meta Title for Category 2', 'Meta Keyword for Category 2', 'Meta Description for Category 2', 0, '2024-02-29 04:17:50', '2024-03-04 03:12:56');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `forum_categories`
--

CREATE TABLE `forum_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `accepts_threads` tinyint(1) NOT NULL DEFAULT 0,
  `newest_thread_id` int(10) UNSIGNED DEFAULT NULL,
  `latest_active_thread_id` int(10) UNSIGNED DEFAULT NULL,
  `thread_count` int(11) NOT NULL DEFAULT 0,
  `post_count` int(11) NOT NULL DEFAULT 0,
  `is_private` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `_lft` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `_rgt` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forum_posts`
--

CREATE TABLE `forum_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `thread_id` int(10) UNSIGNED NOT NULL,
  `author_id` bigint(20) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `post_id` int(10) UNSIGNED DEFAULT NULL,
  `sequence` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forum_threads`
--

CREATE TABLE `forum_threads` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `author_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `pinned` tinyint(1) DEFAULT 0,
  `locked` tinyint(1) DEFAULT 0,
  `first_post_id` int(10) UNSIGNED DEFAULT NULL,
  `last_post_id` int(10) UNSIGNED DEFAULT NULL,
  `reply_count` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forum_threads_read`
--

CREATE TABLE `forum_threads_read` (
  `thread_id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(109, '2014_05_19_151759_create_forum_table_categories', 1),
(110, '2014_05_19_152425_create_forum_table_threads', 1),
(111, '2014_05_19_152611_create_forum_table_posts', 1),
(112, '2014_10_12_000000_create_users_table', 1),
(113, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(114, '2014_10_12_100000_create_password_resets_table', 1),
(115, '2015_04_14_180344_create_forum_table_threads_read', 1),
(116, '2015_07_22_181406_update_forum_table_categories', 1),
(117, '2015_07_22_181409_update_forum_table_threads', 1),
(118, '2015_07_22_181417_update_forum_table_posts', 1),
(119, '2016_05_24_114302_add_defaults_to_forum_table_threads_columns', 1),
(120, '2016_07_09_111441_add_counts_to_categories_table', 1),
(121, '2016_07_09_122706_add_counts_to_threads_table', 1),
(122, '2016_07_10_134700_add_sequence_to_posts_table', 1),
(123, '2018_11_04_211718_update_categories_table', 1),
(124, '2019_08_19_000000_create_failed_jobs_table', 1),
(125, '2019_09_07_210904_update_forum_category_booleans', 1),
(126, '2019_09_07_230148_add_color_to_categories', 1),
(127, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(128, '2020_03_22_050710_add_thread_ids_to_categories', 1),
(129, '2020_03_22_055827_add_post_id_to_threads', 1),
(130, '2020_12_02_233754_add_first_post_id_to_threads', 1),
(131, '2021_07_31_094750_add_fk_indices', 1),
(132, '2024_01_25_080638_add_details_to_users_table', 1),
(133, '2024_01_28_055318_create_categories_table', 1),
(134, '2024_02_01_074905_create_brands_table', 1),
(135, '2024_02_02_032755_create_products_table', 1),
(136, '2024_02_02_033720_create_product_images_table', 1),
(137, '2024_02_08_085638_create_colors_table', 1),
(138, '2024_02_08_101928_create_product_colors_table', 1),
(139, '2024_02_08_131853_create_slider_table', 1),
(140, '2024_02_15_085607_add_category_id_to_brands_table', 1),
(141, '2024_02_15_124627_create_wishlists_table', 1),
(142, '2024_02_16_035907_create_carts_table', 1),
(143, '2024_02_16_075601_create_orders_table', 1),
(144, '2024_02_27_095210_add_sellerid_to_products_table', 1),
(145, '2024_03_08_131636_create_orders_table', 2),
(146, '2024_03_08_131930_create_order_items_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `tracking_no` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status_message` varchar(255) NOT NULL,
  `payment_mode` varchar(255) NOT NULL,
  `payment_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `tracking_no`, `fullname`, `email`, `phone`, `pincode`, `address`, `status_message`, `payment_mode`, `payment_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'motomart-mJSYUqhTtr', 'John Doe', 'john@example.com', '09123456789', '1420', 'aaa ddd vvv', 'in progress', 'Cash on Delivery', NULL, '2024-03-08 06:38:24', '2024-03-08 06:38:24'),
(2, 1, 'motomart-wGlJ36D56I', 'John Doe', 'john@example.com', '09123456789', '1420', 'asdadasd', 'in progress', 'Cash on Delivery', NULL, '2024-03-08 06:57:16', '2024-03-08 06:57:16'),
(3, 1, 'motomart-7Yu3akIKan', 'James Gilo Halayahay', 'trjnzjames777@gmail.com', '09123456789', '1420', 'asdadasdasd', 'in progress', 'Cash on Delivery', NULL, '2024-03-11 06:52:46', '2024-03-11 06:52:46'),
(4, 1, 'motomart-dD2l0VT8PE', 'John Doe', 'john@example.com', '09123456789', '1420', 'test', 'in progress', 'Cash on Delivery', NULL, '2024-03-11 06:57:44', '2024-03-11 06:57:44'),
(5, 1, 'motomart-Kj2VxbeuR2', 'John Doe', 'john@example.com', '09123456789', '1420', 'test', 'in progress', 'Online Payment', NULL, '2024-03-11 07:03:40', '2024-03-11 07:03:40'),
(6, 1, 'motomart-GD9szh73u1', 'John Doe', 'john@example.com', '09123456789', '1420', '123131', 'in progress', 'Online Payment', NULL, '2024-03-11 07:21:45', '2024-03-11 07:21:45');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_color_id` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `product_color_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 15, NULL, 2, 2799, '2024-03-08 06:38:24', '2024-03-08 06:38:24'),
(2, 2, 15, NULL, 2, 2799, '2024-03-08 06:57:16', '2024-03-08 06:57:16'),
(3, 3, 15, NULL, 3, 2799, '2024-03-11 06:52:46', '2024-03-11 06:52:46'),
(4, 4, 15, NULL, 1, 2799, '2024-03-11 06:57:44', '2024-03-11 06:57:44'),
(5, 5, 14, NULL, 1, 3900, '2024-03-11 07:03:40', '2024-03-11 07:03:40'),
(6, 6, 15, NULL, 1, 2799, '2024-03-11 07:21:45', '2024-03-11 07:21:45');

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `small_description` mediumtext DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `original_price` int(11) NOT NULL,
  `selling_price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `trending` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=trending,0=not trending',
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1=hidden,0=visible',
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_keyword` mediumtext DEFAULT NULL,
  `meta_description` mediumtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `slug`, `brand`, `small_description`, `description`, `original_price`, `selling_price`, `quantity`, `trending`, `status`, `meta_title`, `meta_keyword`, `meta_description`, `created_at`, `updated_at`, `user_id`) VALUES
(14, 2, 'Zeneos ZN62 Motorcycle Tire Gulong 14 Rim 17 Rim (Tubeless)', 'zeneos-zn62-motorcycle-tire-gulong-14-rim-17-rim-tubeless', 'Zeneos', NULL, 'MAXIMUM OF 3pcs PER ORDER!!!!\r\nBrand: Zeneos\r\nProduct Name: Motorcycle Tire Gulong\r\n\r\nwelcome to order our store, Ailiba Motoparts!!\r\nWe ensure that all products are inspected before packing and shipping.\r\n*We do not have control over delivery once the courier pick up the order\r\n*Delivery of an order may vary depending on courier led time.\r\n*Only the courier is responsible during delivery period.\r\n*Please check your order right away once you receive our package.\r\n*If there are issue.please feel free to sent us a message..', 4200, 3900, 10, 1, 0, NULL, NULL, NULL, '2024-03-04 04:56:42', '2024-03-04 04:56:42', 1),
(15, 2, 'Michelin tire pilot street/pilot street2 tubeless with free sealant and pito 100% original authentic', 'michelin-tire-pilot-streetpilot-street2-tubeless-with-free-sealant-and-pito-100-original-authentic', 'Michelin', NULL, '100% original authentic with free  sealant and pito \r\n\r\nwelcome to order our store,YYDS\r\n\r\nWe ensure that all products are inspected before packing and shipping.\r\n*We do not have control over delivery once the courier pick up the order\r\n*Delivery of an order may vary depending on courier led time.\r\n*Only the courier is responsible during delivery period.\r\n*Please check your order right away once you receive our package.\r\n*If there are issue.please feel free to sent us a message..', 3200, 2799, 10, 1, 0, NULL, NULL, NULL, '2024-03-04 05:02:41', '2024-03-04 05:02:41', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_colors`
--

CREATE TABLE `product_colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `color_id` bigint(20) UNSIGNED DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(17, 14, 'uploads/products//17095570021.jpg', '2024-03-04 04:56:42', '2024-03-04 04:56:42'),
(18, 15, 'uploads/products//17095573611.jpg', '2024-03-04 05:02:41', '2024-03-04 05:02:41');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` mediumtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1=Hidden, 0=Visible',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Motomart', 'A motorcycle ride is a symphony of courage, freedom, and the pursuit of endless possibilities.', 'uploads/slider/1709551901.jpg', 0, '2024-03-04 03:31:41', '2024-03-04 03:31:41'),
(2, 'Motomart', 'If you want to be happy for a lifetime, ride a motorcycle.', 'uploads/slider/1709551933.png', 0, '2024-03-04 03:32:13', '2024-03-04 03:32:13'),
(3, 'Motomart', 'Happiness is a Motorcycle, a Full Tank of Gas and Twisty Roads.', 'uploads/slider/1709551952.jpg', 0, '2024-03-04 03:32:32', '2024-03-04 03:32:32');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=user,1=admin',
  `seller` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=user,1=seller'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_as`, `seller`) VALUES
(1, 'John Doe', 'john@example.com', NULL, '$2y$12$wi4BFM2dn2gTWJcjhgpLJ.CxEWMi3gxrkS9Gv0NqNiTxuOEm3zNBC', NULL, '2024-02-29 04:18:31', '2024-02-29 04:18:31', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(4, 1, 15, '2024-03-08 06:38:11', '2024-03-08 06:38:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `forum_categories`
--
ALTER TABLE `forum_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `forum_categories__lft__rgt_parent_id_index` (`_lft`,`_rgt`,`parent_id`);

--
-- Indexes for table `forum_posts`
--
ALTER TABLE `forum_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `forum_posts_thread_id_index` (`thread_id`);

--
-- Indexes for table `forum_threads`
--
ALTER TABLE `forum_threads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `forum_threads_category_id_index` (`category_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_user_id_foreign` (`user_id`);

--
-- Indexes for table `product_colors`
--
ALTER TABLE `product_colors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_colors_product_id_foreign` (`product_id`),
  ADD KEY `product_colors_color_id_foreign` (`color_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forum_categories`
--
ALTER TABLE `forum_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forum_posts`
--
ALTER TABLE `forum_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forum_threads`
--
ALTER TABLE `forum_threads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product_colors`
--
ALTER TABLE `product_colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_colors`
--
ALTER TABLE `product_colors`
  ADD CONSTRAINT `product_colors_color_id_foreign` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `product_colors_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
