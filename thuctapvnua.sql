-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 14, 2018 lúc 06:39 PM
-- Phiên bản máy phục vụ: 10.1.26-MariaDB
-- Phiên bản PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `thuctapvnua`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banners`
--

INSERT INTO `banners` (`id`, `name`, `link`, `status`, `image`, `created_at`, `updated_at`) VALUES
(4, 'Siêu khuyến mãi', '#', 1, '/photos/1/Simple & Minimals Wallpaper PC, Laptop P1 (12).png', '2018-01-13 01:15:22', '2018-01-13 01:30:00'),
(5, NULL, NULL, 1, '/photos/1/4150290-battlefield-4-premium.jpg', '2018-01-13 01:24:42', '2018-01-13 01:24:42'),
(6, NULL, NULL, 0, '/photos/1/Simple & Minimals Wallpaper PC, Laptop P1 (13).jpg', '2018-01-13 01:24:55', '2018-01-13 01:29:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `brands`
--

INSERT INTO `brands` (`id`, `name`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'Nike', '/photos/1/brands/nike.png', '2018-01-12 04:11:30', '2018-01-12 04:11:30'),
(2, 'Sức khỏe', '/photos/1/26694023_1412177798892384_855156102_n.jpg', '2018-01-12 04:13:27', '2018-01-12 04:13:27'),
(3, 'Addias', '/photos/1/brands/67bbb048fe5e1100484f.jpg', '2018-01-13 10:48:20', '2018-01-13 10:48:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` int(11) NOT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `times` int(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent`, `banner`, `times`, `created_at`, `updated_at`) VALUES
(15, 'Cầu lông', 0, '/photos/1/category/badminton-rackets-flipkart-870x516.jpg', NULL, '2018-01-09 07:27:22', '2018-01-09 07:27:22'),
(17, 'Áo cầu lông', 15, '/photos/1/category/pp_0006052_3640_p_1497328608169.jpeg', 2, '2018-01-09 07:29:07', '2018-01-10 08:48:30'),
(18, 'Bóng đá', 0, NULL, 3, '2018-01-09 07:29:57', '2018-01-12 04:14:30'),
(19, 'Giày đá bóng', 18, '/photos/1/26171836_1733926616681980_2347297754516404324_o.jpg', NULL, '2018-01-09 07:30:32', '2018-01-09 07:30:32'),
(20, 'Quần áo bóng đá', 18, '/photos/1/category/lionel_messi_10_l_mens_jersey_fc_barcelona_15_16_la_liga_227554e4_12929.jpg', 2, '2018-01-09 07:31:35', '2018-01-13 09:20:19'),
(21, 'Tennis', 0, NULL, NULL, '2018-01-09 08:58:50', '2018-01-09 08:58:50'),
(22, 'Máy chạy bộ', 0, NULL, NULL, '2018-01-12 03:06:22', '2018-01-12 03:06:22'),
(24, 'Vợt cầu lông', 15, NULL, NULL, '2018-01-13 11:42:08', '2018-01-13 11:42:08'),
(25, 'Vợt cầu lông yonex', 24, NULL, NULL, '2018-01-13 11:42:20', '2018-01-13 11:42:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `img_products`
--

CREATE TABLE `img_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_product` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `img_products`
--

INSERT INTO `img_products` (`id`, `id_product`, `image`, `created_at`, `updated_at`) VALUES
(10, 14, '/photos/1/Desert.jpg', '2018-01-12 04:14:30', '2018-01-12 04:14:30'),
(11, 14, '/photos/1/26694023_1412177798892384_855156102_n.jpg', '2018-01-12 04:14:30', '2018-01-12 04:14:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2018_01_07_090309_create_categories_table', 1),
(6, '2018_01_07_090403_create_products_table', 1),
(7, '2018_01_07_090448_create_orders_table', 1),
(8, '2018_01_07_090513_create_order_details_table', 1),
(9, '2018_01_07_090532_create_posts_table', 1),
(10, '2018_01_07_090920_create_type_posts_table', 1),
(11, '2018_01_07_090942_create_customers_table', 1),
(12, '2018_01_07_091008_create_admins_table', 1),
(13, '2018_01_07_091043_create_img_products_table', 1),
(14, '2018_01_07_091224_create_banners_table', 1),
(16, '2018_01_10_104510_create_sizes_table', 2),
(18, '2018_01_12_062703_create_banners_table', 3),
(19, '2018_01_10_104233_create_brands_table', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_cus` int(10) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL,
  `total` decimal(15,0) NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `payment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_order` int(10) UNSIGNED NOT NULL,
  `id_product` int(10) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(15,0) NOT NULL,
  `sale_price` decimal(15,0) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_cate` int(10) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `name`, `slug`, `content`, `image`, `id_cate`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Vis du', 'vis-du', '<p>Nội dung b&agrave;i viết<img src=\"/photos/1/logo11.png\" alt=\"\" width=\"2112\" height=\"792\" /></p>', '/photos/1/Desert.jpg', 4, 1, '2018-01-09 12:25:17', '2018-01-09 12:25:17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_cate` int(10) UNSIGNED NOT NULL,
  `id_brand` int(10) UNSIGNED DEFAULT NULL,
  `price` decimal(15,0) DEFAULT NULL,
  `sale_price` decimal(15,0) DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `short_description` longtext COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `id_cate`, `id_brand`, `price`, `sale_price`, `image`, `description`, `short_description`, `status`, `created_at`, `updated_at`) VALUES
(14, 'Máy chạy bộ điện HQ 222', 'may-chay-bo-dien-hq-222', 24, 1, '12000000', '1900000', '/photos/1/4150290-battlefield-4-premium.jpg', '<pre>&lt;label&gt;Logo thương hiệu&lt;/label&gt;<br />&lt;div class=\"input-group\"&gt;<br />       &lt;span class=\"input-group-btn\"&gt;<br />           &lt;a id=\"lfm\" data-input=\"thumbnail\" data-preview=\"holder\" class=\"btn \"&gt;<br />             &lt;i class=\"fa fa-picture-o\"&gt;&lt;/i&gt; Choose<br />         &lt;/a&gt;<br />         &lt;/span&gt;<br />    &lt;input id=\"thumbnail\" class=\"form-control\" type=\"text\" name=\"logo\"&gt;<br />&lt;/div&gt;<br />&lt;img id=\"holder\" style=\"margin-top:15px;max-height:100px;\"&gt;</pre>', '<pre>&lt;label&gt;Logo thương hiệu&lt;/label&gt;<br />&lt;div class=\"input-group\"&gt;<br />       &lt;span class=\"input-group-btn\"&gt;<br />           &lt;a id=\"lfm\" data-input=\"thumbnail\" data-preview=\"holder\" class=\"btn \"&gt;<br />             &lt;i class=\"fa fa-picture-o\"&gt;&lt;/i&gt; Choose<br />         &lt;/a&gt;<br />         &lt;/span&gt;<br />    &lt;input id=\"thumbnail\" class=\"form-control\" type=\"text\" name=\"logo\"&gt;<br />&lt;/div&gt;<br />&lt;img id=\"holder\" style=\"margin-top:15px;max-height:100px;\"&gt;</pre>', 1, '2018-01-12 04:14:30', '2018-01-12 04:14:30'),
(16, 'Máy chạy bộ điện HQ 1', 'may-chay-bo-dien-hq-1', 17, 2, '12000000', '1100000', '/photos/1/4150290-battlefield-4-premium.jpg', '<pre>&lt;label&gt;Logo thương hiệu&lt;/label&gt;<br />&lt;div class=\"input-group\"&gt;<br />       &lt;span class=\"input-group-btn\"&gt;<br />           &lt;a id=\"lfm\" data-input=\"thumbnail\" data-preview=\"holder\" class=\"btn \"&gt;<br />             &lt;i class=\"fa fa-picture-o\"&gt;&lt;/i&gt; Choose<br />         &lt;/a&gt;<br />         &lt;/span&gt;<br />    &lt;input id=\"thumbnail\" class=\"form-control\" type=\"text\" name=\"logo\"&gt;<br />&lt;/div&gt;<br />&lt;img id=\"holder\" style=\"margin-top:15px;max-height:100px;\"&gt;</pre>', '<pre>&lt;label&gt;Logo thương hiệu&lt;/label&gt;<br />&lt;div class=\"input-group\"&gt;<br />       &lt;span class=\"input-group-btn\"&gt;<br />           &lt;a id=\"lfm\" data-input=\"thumbnail\" data-preview=\"holder\" class=\"btn \"&gt;<br />             &lt;i class=\"fa fa-picture-o\"&gt;&lt;/i&gt; Choose<br />         &lt;/a&gt;<br />         &lt;/span&gt;<br />    &lt;input id=\"thumbnail\" class=\"form-control\" type=\"text\" name=\"logo\"&gt;<br />&lt;/div&gt;<br />&lt;img id=\"holder\" style=\"margin-top:15px;max-height:100px;\"&gt;</pre>', 0, '2018-01-12 04:14:30', '2018-01-12 04:14:30'),
(17, 'Máy chạy bộ điện HQ 12', 'may-chay-bo-dien-hq-12', 17, 2, '12000000', '1', '/photos/1/4150290-battlefield-4-premium.jpg', '<pre>&lt;label&gt;Logo thương hiệu&lt;/label&gt;<br />&lt;div class=\"input-group\"&gt;<br />       &lt;span class=\"input-group-btn\"&gt;<br />           &lt;a id=\"lfm\" data-input=\"thumbnail\" data-preview=\"holder\" class=\"btn \"&gt;<br />             &lt;i class=\"fa fa-picture-o\"&gt;&lt;/i&gt; Choose<br />         &lt;/a&gt;<br />         &lt;/span&gt;<br />    &lt;input id=\"thumbnail\" class=\"form-control\" type=\"text\" name=\"logo\"&gt;<br />&lt;/div&gt;<br />&lt;img id=\"holder\" style=\"margin-top:15px;max-height:100px;\"&gt;</pre>', '<pre>&lt;label&gt;Logo thương hiệu&lt;/label&gt;<br />&lt;div class=\"input-group\"&gt;<br />       &lt;span class=\"input-group-btn\"&gt;<br />           &lt;a id=\"lfm\" data-input=\"thumbnail\" data-preview=\"holder\" class=\"btn \"&gt;<br />             &lt;i class=\"fa fa-picture-o\"&gt;&lt;/i&gt; Choose<br />         &lt;/a&gt;<br />         &lt;/span&gt;<br />    &lt;input id=\"thumbnail\" class=\"form-control\" type=\"text\" name=\"logo\"&gt;<br />&lt;/div&gt;<br />&lt;img id=\"holder\" style=\"margin-top:15px;max-height:100px;\"&gt;</pre>', 1, '2018-01-12 04:14:30', '2018-01-12 04:14:30'),
(18, 'Máy chạy bộ điện HQ 123', 'may-chay-bo-dien-hq-123', 18, 2, '12000000', '2', '/photos/1/4150290-battlefield-4-premium.jpg', '<pre>&lt;label&gt;Logo thương hiệu&lt;/label&gt;<br />&lt;div class=\"input-group\"&gt;<br />       &lt;span class=\"input-group-btn\"&gt;<br />           &lt;a id=\"lfm\" data-input=\"thumbnail\" data-preview=\"holder\" class=\"btn \"&gt;<br />             &lt;i class=\"fa fa-picture-o\"&gt;&lt;/i&gt; Choose<br />         &lt;/a&gt;<br />         &lt;/span&gt;<br />    &lt;input id=\"thumbnail\" class=\"form-control\" type=\"text\" name=\"logo\"&gt;<br />&lt;/div&gt;<br />&lt;img id=\"holder\" style=\"margin-top:15px;max-height:100px;\"&gt;</pre>', '<pre>&lt;label&gt;Logo thương hiệu&lt;/label&gt;<br />&lt;div class=\"input-group\"&gt;<br />       &lt;span class=\"input-group-btn\"&gt;<br />           &lt;a id=\"lfm\" data-input=\"thumbnail\" data-preview=\"holder\" class=\"btn \"&gt;<br />             &lt;i class=\"fa fa-picture-o\"&gt;&lt;/i&gt; Choose<br />         &lt;/a&gt;<br />         &lt;/span&gt;<br />    &lt;input id=\"thumbnail\" class=\"form-control\" type=\"text\" name=\"logo\"&gt;<br />&lt;/div&gt;<br />&lt;img id=\"holder\" style=\"margin-top:15px;max-height:100px;\"&gt;</pre>', 1, '2018-01-12 04:14:30', '2018-01-12 04:14:30'),
(19, 'Máy chạy bộ điện HQ 1234', 'may-chay-bo-dien-hq-1234', 20, 1, '12000000', '3', '/photos/1/4150290-battlefield-4-premium.jpg', '<pre><label>Logo thương hiệu</label></pre>\r\n<div class=\"input-group\"><br /> <span class=\"input-group-btn\"><br /> <a id=\"lfm\" class=\"btn \" data-input=\"thumbnail\" data-preview=\"holder\"></a><br /> Choose<br /> <br /> </span><br /> <input id=\"thumbnail\" class=\"form-control\" name=\"logo\" type=\"text\" /></div>\r\n<pre><br /><img id=\"holder\" style=\"margin-top: 15px; max-height: 100px;\" /></pre>', '<pre><label>Logo thương hiệu</label></pre>\r\n<div class=\"input-group\"><br /> <span class=\"input-group-btn\"><br /> <a id=\"lfm\" class=\"btn \" data-input=\"thumbnail\" data-preview=\"holder\"></a><br /> Choose<br /> <br /> </span><br /> <input id=\"thumbnail\" class=\"form-control\" name=\"logo\" type=\"text\" /></div>\r\n<pre><br /><img id=\"holder\" style=\"margin-top: 15px; max-height: 100px;\" /></pre>', NULL, '2018-01-12 04:14:30', '2018-01-13 09:20:19'),
(20, 'Máy chạy bộ điện HQ 21', 'may-chay-bo-dien-hq-21', 18, 2, '12000000', '100000', '/photos/1/4150290-battlefield-4-premium.jpg', '<pre>&lt;label&gt;Logo thương hiệu&lt;/label&gt;<br />&lt;div class=\"input-group\"&gt;<br />       &lt;span class=\"input-group-btn\"&gt;<br />           &lt;a id=\"lfm\" data-input=\"thumbnail\" data-preview=\"holder\" class=\"btn \"&gt;<br />             &lt;i class=\"fa fa-picture-o\"&gt;&lt;/i&gt; Choose<br />         &lt;/a&gt;<br />         &lt;/span&gt;<br />    &lt;input id=\"thumbnail\" class=\"form-control\" type=\"text\" name=\"logo\"&gt;<br />&lt;/div&gt;<br />&lt;img id=\"holder\" style=\"margin-top:15px;max-height:100px;\"&gt;</pre>', '<pre>&lt;label&gt;Logo thương hiệu&lt;/label&gt;<br />&lt;div class=\"input-group\"&gt;<br />       &lt;span class=\"input-group-btn\"&gt;<br />           &lt;a id=\"lfm\" data-input=\"thumbnail\" data-preview=\"holder\" class=\"btn \"&gt;<br />             &lt;i class=\"fa fa-picture-o\"&gt;&lt;/i&gt; Choose<br />         &lt;/a&gt;<br />         &lt;/span&gt;<br />    &lt;input id=\"thumbnail\" class=\"form-control\" type=\"text\" name=\"logo\"&gt;<br />&lt;/div&gt;<br />&lt;img id=\"holder\" style=\"margin-top:15px;max-height:100px;\"&gt;</pre>', 1, '2018-01-12 04:14:30', '2018-01-12 04:14:30'),
(21, 'Máy chạy bộ điện HQ 122', 'may-chay-bo-dien-hq-121', 24, 2, '12000000', '100000', '/photos/1/4150290-battlefield-4-premium.jpg', '<pre>&lt;label&gt;Logo thương hiệu&lt;/label&gt;<br />&lt;div class=\"input-group\"&gt;<br />       &lt;span class=\"input-group-btn\"&gt;<br />           &lt;a id=\"lfm\" data-input=\"thumbnail\" data-preview=\"holder\" class=\"btn \"&gt;<br />             &lt;i class=\"fa fa-picture-o\"&gt;&lt;/i&gt; Choose<br />         &lt;/a&gt;<br />         &lt;/span&gt;<br />    &lt;input id=\"thumbnail\" class=\"form-control\" type=\"text\" name=\"logo\"&gt;<br />&lt;/div&gt;<br />&lt;img id=\"holder\" style=\"margin-top:15px;max-height:100px;\"&gt;</pre>', '<pre>&lt;label&gt;Logo thương hiệu&lt;/label&gt;<br />&lt;div class=\"input-group\"&gt;<br />       &lt;span class=\"input-group-btn\"&gt;<br />           &lt;a id=\"lfm\" data-input=\"thumbnail\" data-preview=\"holder\" class=\"btn \"&gt;<br />             &lt;i class=\"fa fa-picture-o\"&gt;&lt;/i&gt; Choose<br />         &lt;/a&gt;<br />         &lt;/span&gt;<br />    &lt;input id=\"thumbnail\" class=\"form-control\" type=\"text\" name=\"logo\"&gt;<br />&lt;/div&gt;<br />&lt;img id=\"holder\" style=\"margin-top:15px;max-height:100px;\"&gt;</pre>', 1, '2018-01-12 04:14:30', '2018-01-12 04:14:30'),
(22, 'Máy chạy bộ điện HQ 12343', 'may-chay-bo-dien-hq-12343', 18, 2, '12000000', '100000', '/photos/1/4150290-battlefield-4-premium.jpg', '<pre>&lt;label&gt;Logo thương hiệu&lt;/label&gt;<br />&lt;div class=\"input-group\"&gt;<br />       &lt;span class=\"input-group-btn\"&gt;<br />           &lt;a id=\"lfm\" data-input=\"thumbnail\" data-preview=\"holder\" class=\"btn \"&gt;<br />             &lt;i class=\"fa fa-picture-o\"&gt;&lt;/i&gt; Choose<br />         &lt;/a&gt;<br />         &lt;/span&gt;<br />    &lt;input id=\"thumbnail\" class=\"form-control\" type=\"text\" name=\"logo\"&gt;<br />&lt;/div&gt;<br />&lt;img id=\"holder\" style=\"margin-top:15px;max-height:100px;\"&gt;</pre>', '<pre>&lt;label&gt;Logo thương hiệu&lt;/label&gt;<br />&lt;div class=\"input-group\"&gt;<br />       &lt;span class=\"input-group-btn\"&gt;<br />           &lt;a id=\"lfm\" data-input=\"thumbnail\" data-preview=\"holder\" class=\"btn \"&gt;<br />             &lt;i class=\"fa fa-picture-o\"&gt;&lt;/i&gt; Choose<br />         &lt;/a&gt;<br />         &lt;/span&gt;<br />    &lt;input id=\"thumbnail\" class=\"form-control\" type=\"text\" name=\"logo\"&gt;<br />&lt;/div&gt;<br />&lt;img id=\"holder\" style=\"margin-top:15px;max-height:100px;\"&gt;</pre>', 1, '2018-01-12 04:14:30', '2018-01-12 04:14:30'),
(23, 'Máy chạy bộ điện HQ 12341', 'may-chay-bo-dien-hq-12341', 15, 2, '12000000', '100000', '/photos/1/4150290-battlefield-4-premium.jpg', '<pre>&lt;label&gt;Logo thương hiệu&lt;/label&gt;<br />&lt;div class=\"input-group\"&gt;<br />       &lt;span class=\"input-group-btn\"&gt;<br />           &lt;a id=\"lfm\" data-input=\"thumbnail\" data-preview=\"holder\" class=\"btn \"&gt;<br />             &lt;i class=\"fa fa-picture-o\"&gt;&lt;/i&gt; Choose<br />         &lt;/a&gt;<br />         &lt;/span&gt;<br />    &lt;input id=\"thumbnail\" class=\"form-control\" type=\"text\" name=\"logo\"&gt;<br />&lt;/div&gt;<br />&lt;img id=\"holder\" style=\"margin-top:15px;max-height:100px;\"&gt;</pre>', '<pre>&lt;label&gt;Logo thương hiệu&lt;/label&gt;<br />&lt;div class=\"input-group\"&gt;<br />       &lt;span class=\"input-group-btn\"&gt;<br />           &lt;a id=\"lfm\" data-input=\"thumbnail\" data-preview=\"holder\" class=\"btn \"&gt;<br />             &lt;i class=\"fa fa-picture-o\"&gt;&lt;/i&gt; Choose<br />         &lt;/a&gt;<br />         &lt;/span&gt;<br />    &lt;input id=\"thumbnail\" class=\"form-control\" type=\"text\" name=\"logo\"&gt;<br />&lt;/div&gt;<br />&lt;img id=\"holder\" style=\"margin-top:15px;max-height:100px;\"&gt;</pre>', 1, '2018-01-12 04:14:30', '2018-01-12 04:14:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sizes`
--

CREATE TABLE `sizes` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_product` int(10) UNSIGNED NOT NULL,
  `name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_posts`
--

CREATE TABLE `type_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `type_posts`
--

INSERT INTO `type_posts` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(4, 'Khuyến mại', 'khuyen-mai', NULL, '2018-01-09 12:23:51', '2018-01-09 12:23:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hai Duc Nguyen', 'duchai196@gmail.com', '$2y$10$erMNAxAwH4Xw1dX7VRkz9O/aade.zt7FFGaqxN51P5Zr4qiIj62kK', 'hy3PP2Xt0WwNUIHyYAXazjZOtiWsOmxbhw6EAST8m0qbmh9WFpESHbI7kAwO', '2018-01-07 11:04:33', '2018-01-07 11:04:33');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_username_unique` (`username`);

--
-- Chỉ mục cho bảng `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_username_unique` (`username`);

--
-- Chỉ mục cho bảng `img_products`
--
ALTER TABLE `img_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_product` (`id_product`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cus` (`id_cus`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_order` (`id_order`,`id_product`),
  ADD KEY `id_product` (`id_product`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `id_cate` (`id_cate`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`),
  ADD KEY `id_cate` (`id_cate`),
  ADD KEY `id_brand` (`id_brand`);

--
-- Chỉ mục cho bảng `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sizes_id_product_foreign` (`id_product`);

--
-- Chỉ mục cho bảng `type_posts`
--
ALTER TABLE `type_posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `type_posts_name_unique` (`name`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `img_products`
--
ALTER TABLE `img_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT cho bảng `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `type_posts`
--
ALTER TABLE `type_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `img_products`
--
ALTER TABLE `img_products`
  ADD CONSTRAINT `img_products_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`id_cate`) REFERENCES `type_posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_cate`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`id_brand`) REFERENCES `brands` (`id`);

--
-- Các ràng buộc cho bảng `sizes`
--
ALTER TABLE `sizes`
  ADD CONSTRAINT `sizes_id_product_foreign` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
