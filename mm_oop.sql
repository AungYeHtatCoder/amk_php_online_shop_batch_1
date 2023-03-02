-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2023 at 04:06 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mm_oop`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Marge Treutel', '2001-04-04 04:49:24', '2023-01-14 16:13:24'),
(2, 'Celestine Schamberger', '2009-09-11 07:48:16', '2023-01-14 16:13:24'),
(3, 'Ricardo Hahn DDS', '1994-07-22 09:35:27', '2023-01-14 16:13:24'),
(4, 'Verda Luettgen', '1987-10-13 19:40:54', '2023-01-14 16:13:24'),
(5, 'Jarrell Mayert', '2020-01-15 00:45:41', '2023-01-14 16:13:24'),
(6, 'Madisyn Boehm', '1977-06-18 19:44:27', '2023-01-14 16:13:24'),
(7, 'Casimir Conn DVM', '2007-10-04 23:48:53', '2023-01-14 16:13:24'),
(8, 'Elliott Legros', '1975-04-03 10:56:39', '2023-01-14 16:13:24'),
(9, 'Jacinthe Glover DDS', '1995-10-10 03:39:45', '2023-01-14 16:13:24'),
(10, 'Dr. Alice Torp', '1987-06-17 17:21:06', '2023-01-14 16:13:24'),
(11, 'Mr. Stefan Kessler Sr.', '2001-02-03 02:23:45', '2023-01-14 16:13:24'),
(12, 'Raphaelle Grady', '2009-08-04 10:27:12', '2023-01-14 16:13:24'),
(13, 'Leslie Sporer', '1979-09-17 18:38:50', '2023-01-14 16:13:24'),
(14, 'Melisa Gerlach', '2015-03-14 02:49:32', '2023-01-14 16:13:24'),
(15, 'Drake Runolfsdottir', '2006-04-19 20:03:11', '2023-01-14 16:13:24'),
(16, 'Griffin Moore', '1995-03-13 20:24:17', '2023-01-14 16:13:24'),
(17, 'Chloe Dicki', '1985-10-28 21:57:55', '2023-01-14 16:13:24'),
(18, 'Felipa Smith Sr.', '1996-06-16 23:06:31', '2023-01-14 16:13:24'),
(19, 'Samara Donnelly', '1988-09-27 22:52:40', '2023-01-14 16:13:24'),
(20, 'Eugene Lockman', '2010-09-17 18:08:34', '2023-01-14 16:13:24'),
(21, 'Sierra Rippin', '2010-07-09 11:32:37', '2023-01-14 16:13:24'),
(22, 'Else Jaskolski', '1991-10-03 16:44:06', '2023-01-14 16:13:24'),
(23, 'Mozell Powlowski Sr.', '2002-08-26 22:20:52', '2023-01-14 16:13:24'),
(24, 'Janelle Prohaska', '2014-11-18 13:33:23', '2023-01-14 16:13:24'),
(25, 'Lorna McDermott', '1988-03-09 07:46:58', '2023-01-14 16:13:24'),
(26, 'Prof. Noelia Reinger', '1972-04-03 22:13:38', '2023-01-14 16:13:24'),
(27, 'Prof. Cora Ledner', '1989-12-13 13:14:09', '2023-01-14 16:13:24'),
(28, 'Tyree Haag', '1990-03-23 08:17:20', '2023-01-14 16:13:24'),
(29, 'Prof. Brandon Gleichner DDS', '2017-12-10 19:11:56', '2023-01-14 16:13:24'),
(30, 'Prof. Carmine Botsford', '1975-08-16 11:43:40', '2023-01-14 16:13:24'),
(31, 'Earlene Weimann', '2011-08-31 18:11:56', '2023-01-14 16:13:24'),
(32, 'Henderson Streich', '1971-08-09 23:48:07', '2023-01-14 16:13:24'),
(33, 'Shea Denesik', '1992-05-28 02:02:32', '2023-01-14 16:13:24'),
(34, 'Golden Volkman', '2005-06-02 22:56:04', '2023-01-14 16:13:24'),
(35, 'Mr. Jordyn Bailey IV', '1994-05-04 08:16:38', '2023-01-14 16:13:24'),
(36, 'Jada Satterfield', '1994-02-06 05:16:42', '2023-01-14 16:13:24'),
(37, 'Cale Gutmann', '1973-06-09 21:01:15', '2023-01-14 16:13:24'),
(38, 'Dr. Macey Bayer', '2003-04-13 12:54:38', '2023-01-14 16:13:24'),
(39, 'Holden Reichert', '1991-02-13 01:03:04', '2023-01-14 16:13:24'),
(40, 'Armando Prosacco Sr.', '2020-12-26 04:18:26', '2023-01-14 16:13:24'),
(41, 'Tad Bahringer', '1984-02-06 11:16:43', '2023-01-14 16:13:24'),
(42, 'Dr. Jewel Osinski', '1977-04-30 13:52:24', '2023-01-14 16:13:24'),
(43, 'Britney Cassin', '1973-11-24 21:48:29', '2023-01-14 16:13:24'),
(44, 'Paula Corkery', '1973-08-08 00:46:04', '2023-01-14 16:13:24'),
(45, 'Andreanne Sanford', '1994-01-02 10:18:13', '2023-01-14 16:13:24'),
(46, 'Cordia Pouros IV', '1992-09-25 03:23:09', '2023-01-14 16:13:24'),
(47, 'Prof. Damien Runte', '1984-05-04 13:44:57', '2023-01-14 16:13:24'),
(48, 'Sandra Becker', '2003-11-03 10:39:17', '2023-01-14 16:13:24'),
(49, 'Myrna Sanford Sr.', '2017-10-05 18:22:51', '2023-01-14 16:13:24'),
(50, 'Samanta Fahey V', '2014-06-02 13:27:07', '2023-01-14 16:13:24'),
(51, 'Violet Rice', '1972-03-15 10:10:52', '2023-01-14 16:13:24'),
(52, 'Justina Corkery', '1982-12-03 00:04:55', '2023-01-14 16:13:24'),
(53, 'Sarina Schulist', '1979-07-15 21:13:27', '2023-01-14 16:13:24'),
(54, 'Stan Bergnaum', '1985-02-18 05:11:18', '2023-01-14 16:13:24'),
(55, 'Gloria Yost', '2011-03-02 15:51:45', '2023-01-14 16:13:24'),
(56, 'Anissa Hermann II', '2010-11-01 08:29:18', '2023-01-14 16:13:24'),
(57, 'Maiya Hansen', '2002-10-11 22:14:21', '2023-01-14 16:13:24'),
(58, 'Godfrey O\'Reilly', '1985-03-16 13:19:45', '2023-01-14 16:13:24'),
(59, 'Maryjane Hintz I', '2012-01-30 13:54:44', '2023-01-14 16:13:24'),
(60, 'Anais O\'Keefe I', '2012-12-17 11:19:11', '2023-01-14 16:13:24'),
(61, 'Rossie Lubowitz', '1989-05-11 06:15:37', '2023-01-14 16:13:24'),
(62, 'Mr. Elwyn Huel', '1979-04-11 13:31:42', '2023-01-14 16:13:24'),
(63, 'Agustina McGlynn', '1988-08-15 08:20:14', '2023-01-14 16:13:24'),
(64, 'Archibald Luettgen', '2014-06-29 02:21:25', '2023-01-14 16:13:24'),
(65, 'Karlee Ullrich', '1978-06-05 15:51:41', '2023-01-14 16:13:24'),
(66, 'Ms. Misty Dicki', '2008-01-17 15:35:18', '2023-01-14 16:13:24'),
(67, 'Mrs. Jacynthe Rosenbaum', '1996-02-14 23:09:59', '2023-01-14 16:13:24'),
(68, 'Dr. Eulalia Kautzer III', '1996-10-20 22:45:52', '2023-01-14 16:13:24'),
(69, 'Cathrine Sporer II', '1992-11-29 01:12:55', '2023-01-14 16:13:24'),
(70, 'Elmore Schulist', '1999-08-10 07:44:54', '2023-01-14 16:13:24'),
(71, 'Augustine Sipes DVM', '1977-01-29 23:16:14', '2023-01-14 16:13:24'),
(72, 'Jada Lemke', '1994-04-19 03:18:21', '2023-01-14 16:13:24'),
(73, 'Allie Wyman', '2015-01-12 01:30:06', '2023-01-14 16:13:24'),
(74, 'Dr. Kiley Berge IV', '2017-07-21 06:53:52', '2023-01-14 16:13:24'),
(75, 'Orie Mayer', '2017-07-01 03:00:00', '2023-01-14 16:13:24'),
(76, 'Iliana Waelchi', '2012-10-24 05:50:26', '2023-01-14 16:13:24'),
(77, 'Dalton Wiza', '2018-06-19 09:40:33', '2023-01-14 16:13:24'),
(78, 'Abigail Hintz', '1971-06-29 00:07:47', '2023-01-14 16:13:24'),
(79, 'Winona Wuckert', '1985-01-05 21:00:44', '2023-01-14 16:13:24'),
(80, 'Prof. Caroline Ferry', '1979-03-09 18:58:59', '2023-01-14 16:13:24'),
(81, 'Tremaine O\'Connell', '2013-09-08 20:41:58', '2023-01-14 16:13:24'),
(82, 'Barbara Dietrich III', '2022-05-24 12:57:00', '2023-01-14 16:13:24'),
(83, 'Julianne Lowe', '2005-11-03 08:53:51', '2023-01-14 16:13:24'),
(84, 'Prof. Tobin McLaughlin I', '1999-03-25 19:05:29', '2023-01-14 16:13:24'),
(85, 'Mr. Xzavier Kuhn PhD', '1993-05-15 06:11:52', '2023-01-14 16:13:24'),
(86, 'Mrs. Ashley Reynolds', '1989-04-15 15:14:31', '2023-01-14 16:13:24'),
(87, 'Serenity Willms', '2003-07-09 19:01:41', '2023-01-14 16:13:24'),
(88, 'Mireya Hartmann', '1999-07-15 09:01:55', '2023-01-14 16:13:24'),
(89, 'Ms. Taya Runolfsdottir IV', '2009-04-12 06:02:39', '2023-01-14 16:13:24'),
(90, 'Laney Jakubowski', '1996-01-21 06:20:57', '2023-01-14 16:13:24'),
(91, 'Armand Koss', '1975-03-11 18:17:42', '2023-01-14 16:13:24'),
(92, 'Mrs. Cassandra Effertz I', '2015-01-11 20:45:43', '2023-01-14 16:13:24'),
(93, 'Carey Wolff', '2016-08-01 19:51:18', '2023-01-14 16:13:24'),
(94, 'Mr. Coy Crooks PhD', '2009-08-18 13:13:30', '2023-01-14 16:13:24'),
(95, 'Dr. Mollie Schumm DDS', '2010-02-22 13:30:19', '2023-01-14 16:13:24'),
(96, 'Demetris Auer', '2015-01-19 22:46:02', '2023-01-14 16:13:24'),
(97, 'Chester Kris', '2002-03-25 15:02:38', '2023-01-14 16:13:24'),
(98, 'Jameson Ledner PhD', '1977-07-24 12:10:31', '2023-01-14 16:13:24'),
(99, 'Estel Wintheiser I', '2009-01-27 18:18:14', '2023-01-14 16:13:24'),
(100, 'Judge Batz', '1979-09-11 19:08:33', '2023-01-14 16:13:24');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` float NOT NULL,
  `sub_total_price` float NOT NULL DEFAULT 1,
  `total_price` float NOT NULL,
  `payment_type` varchar(250) NOT NULL DEFAULT 'payment',
  `card_name` varchar(250) NOT NULL DEFAULT 'card',
  `card_no` varchar(250) NOT NULL DEFAULT '0000-0000-0000-0000',
  `card_expire` varchar(250) NOT NULL DEFAULT 'expire',
  `card_cvv` varchar(250) NOT NULL DEFAULT 'vcc',
  `order_date` date NOT NULL DEFAULT current_timestamp(),
  `order_status` varchar(250) NOT NULL DEFAULT 'pending',
  `order_no` varchar(250) NOT NULL DEFAULT '0000-00-00-0000-NQPX',
  `invoice_no` varchar(200) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `qty`, `price`, `sub_total_price`, `total_price`, `payment_type`, `card_name`, `card_no`, `card_expire`, `card_cvv`, `order_date`, `order_status`, `order_no`, `invoice_no`, `user_id`) VALUES
(1, 99, 3, 5710, 17130, 45060, 'Credit Card', 'visa', '123456789456123', '12', '12', '2023-01-25', 'approve', '2023-01-25-9832-JMCP', '0', 1),
(2, 0, 0, 0, 0, 0, 'Paypal', 'Paypal', '11111133333333', '021', '202', '2023-01-26', 'pending', '2023-01-26-7127-XJEA', '0', 1),
(3, 101, 1, 1240, 1240, 2, 'c', 'c', '2', '3', '2', '2023-01-26', 'approve', '2023-01-26-8789-YGSI', '0', 1),
(4, 102, 1, 1240, 1240, 4, 'r', 'r', '2', '4', '2', '2023-01-26', 'pending', '2023-01-26-9333-LHKQ', '0', 0),
(5, 102, 3, 1240, 3720, 7, 'd', 's', '1', '0', '2', '2023-01-26', 'approve', '2023-01-26-5829-TCFE', '0', 1),
(6, 101, 3, 1240, 3720, 4, 'e', 'o', '2', '2', '0', '2023-01-26', 'pending', '2023-01-26-1161-XKJI', '0', 0),
(7, 102, 3, 1240, 3720, 7, 'credit_card', 'something card', '234234543', '34', '343', '2023-01-26', 'approve', '2023-01-26-5101-SGIP', '0', 1),
(8, 101, 3, 1240, 3720, 4, 'credit_card', 'something card', '234234543', '34', '343', '2023-01-26', 'pending', '2023-01-26-2721-FIOP', '0', 1),
(9, 102, 3, 1240, 3720, 7440, 'credit_card', 'something card new', '234321224', '23', '33', '2023-01-26', 'approve', '2023-01-26-9098-AIDD', '0', 1),
(10, 101, 3, 1240, 3720, 7440, 'credit_card', 'something card new', '234321224', '23', '33', '2023-01-26', 'pending', '2023-01-26-1964-ESSE', '0', 1),
(11, 102, 3, 1240, 0, 7440, 'credit_card', 'name vdd', '34321234', '23', '23', '2023-01-26', 'approve', '2023-01-26-7375-SJWS', '0', 1),
(12, 101, 3, 1240, 0, 7440, 'credit_card', 'name vdd', '34321234', '23', '23', '2023-01-26', 'pending', '2023-01-26-2964-LPAI', '0', 1),
(13, 102, 4, 1240, 4960, 17440, 'credit_card', 'UAB Visa Gift Card', '4055180101249973', '08/25', '303', '2023-01-26', 'pending', '2023-01-26-5383-JZHP', '0', 1),
(14, 17, 3, 4160, 12480, 17440, 'credit_card', 'UAB Visa Gift Card', '4055180101249973', '08/25', '303', '2023-01-26', 'pending', '2023-01-26-9582-OLPA', '0', 1),
(15, 92, 1, 8387, 8387, 12107, 'credit_card', 'Credit Card', '0147852369', '02/25', '303', '2023-01-27', 'pending', '2023-01-27-2380-HUXG', '0', 1),
(16, 94, 1, 3720, 3720, 12107, 'credit_card', 'Credit Card', '0147852369', '02/25', '303', '2023-01-27', 'pending', '2023-01-27-1376-TNIX', '0', 1),
(17, 92, 1, 8387, 8387, 12107, 'credit_card', 'Invoice_No', '0123456789', '02/20', '303', '2023-01-27', 'pending', '2023-01-27-9524-MOQE', '0', 1),
(18, 94, 1, 3720, 3720, 12107, 'credit_card', 'Invoice_No', '0123456789', '02/20', '303', '2023-01-27', 'pending', '2023-01-27-6379-QFPH', '0', 1),
(19, 92, 1, 8387, 8387, 12107, 'credit_card', 'Invoice_No_Test', '0213546879852', '02/20', '303', '2023-01-27', 'pending', '2023-01-27-3879-XBPD', '2023-01-27-9027-AOTY', 1),
(20, 94, 1, 3720, 3720, 12107, 'credit_card', 'Invoice_No_Test', '0213546879852', '02/20', '303', '2023-01-27', 'approve', '2023-01-27-2432-BASW', '2023-01-27-1856-RPTL', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `category_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `old_price` int(11) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT 1,
  `description` text NOT NULL,
  `file_name` varchar(250) NOT NULL DEFAULT '1.jpg',
  `product_status` varchar(100) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `category_id`, `price`, `old_price`, `qty`, `description`, `file_name`, `product_status`, `created_at`, `updated_at`) VALUES
(1, 'Rosalinda Jaskolski', 9, 6669, 7199, 2, 'Non officiis eum minima id qui ut eaque. Et debitis voluptatibus vero odio totam facere. Voluptatem non et quaerat nam consequuntur nulla. Earum aliquid corrupti ullam.', 'https://via.placeholder.com/640x480.png/00aaaa?text=soluta', '0', '2004-04-25 00:58:51', '0000-00-00 00:00:00'),
(2, 'Cara Stokes', 7, 6918, 7477, 7, 'Ut fugiat similique in temporibus. Mollitia ipsa neque aliquam. Unde tempora amet ut corporis illo quasi quam. Sit voluptatem illo aut exercitationem. Eligendi qui qui suscipit nesciunt quidem ut et.', 'https://via.placeholder.com/640x480.png/0066ff?text=accusantium', '1', '2020-09-20 19:08:07', '0000-00-00 00:00:00'),
(3, 'Mrs. Nora Hartmann', 4, 2698, 3973, 5, 'Numquam illo ut doloribus. Sunt laboriosam recusandae in praesentium cupiditate eos. Nulla quidem expedita at cupiditate et delectus vero.', 'https://via.placeholder.com/640x480.png/00eedd?text=laboriosam', '0', '2017-03-18 20:08:34', '0000-00-00 00:00:00'),
(4, 'Alycia Kub III', 2, 4847, 6507, 8, 'Placeat sed possimus impedit. Facere libero illo a provident impedit ex. Iste optio sit perferendis. Totam sunt quod sunt minus voluptates architecto.', 'https://via.placeholder.com/640x480.png/006677?text=id', '1', '1973-02-10 19:34:40', '0000-00-00 00:00:00'),
(5, 'Mr. Casimer Herzog DDS', 1, 4890, 3827, 2, 'Quo voluptatum et dolor et. Voluptatum voluptate rerum voluptatem recusandae optio animi. Aut alias eos qui quo. Culpa placeat earum ea voluptas exercitationem omnis.', 'https://via.placeholder.com/640x480.png/0033dd?text=labore', '1', '1971-04-19 02:40:32', '0000-00-00 00:00:00'),
(6, 'Cecelia Bahringer', 5, 7906, 5214, 6, 'Eveniet aspernatur libero deserunt tenetur reprehenderit ullam. Commodi in non saepe. Molestiae occaecati ut voluptatem dicta voluptatem.', 'https://via.placeholder.com/640x480.png/004477?text=aliquam', '1', '1971-06-20 11:52:19', '0000-00-00 00:00:00'),
(7, 'Aubrey Wyman', 9, 8475, 3649, 9, 'Sit et esse qui voluptas nemo velit. Nihil rem est fugit quis ut porro ipsa ipsam. Dolore natus et quidem est qui. Excepturi quia rem aut aliquam dicta.', 'https://via.placeholder.com/640x480.png/00dd99?text=quisquam', '1', '2002-07-01 02:15:13', '0000-00-00 00:00:00'),
(8, 'Elyssa Langworth Sr.', 8, 595, 8012, 1, 'Vitae eum quo atque. Voluptatem voluptatem nisi consequatur at. Velit suscipit natus sit sed quis.', 'https://via.placeholder.com/640x480.png/004477?text=quia', '1', '1991-01-05 06:24:30', '0000-00-00 00:00:00'),
(9, 'Vincenzo Prohaska', 2, 7641, 5110, 6, 'Et voluptas at et deserunt quod consequuntur. Sint molestiae ut dolor aut sed. Enim quisquam reiciendis dicta nulla minima at. Ea qui commodi sunt a. Temporibus vero voluptas dolore sed.', 'https://via.placeholder.com/640x480.png/002255?text=aut', '0', '2021-07-09 16:39:49', '0000-00-00 00:00:00'),
(10, 'Mrs. Mandy Donnelly Jr.', 7, 7948, 6009, 6, 'Quo rerum natus excepturi repudiandae culpa et tempore. Nobis facere ut iste. Et fuga eligendi illum voluptatem voluptas voluptatum earum.', 'https://via.placeholder.com/640x480.png/00ddcc?text=officiis', '1', '2011-09-27 23:49:30', '0000-00-00 00:00:00'),
(11, 'Ian Powlowski', 8, 2575, 8813, 1, 'Est enim labore et dolorum quos tenetur odit voluptatibus. Voluptate in enim voluptas cumque facere ut. Consequuntur quis ipsum et atque laboriosam tempore libero qui.', 'https://via.placeholder.com/640x480.png/004400?text=quae', '0', '1995-04-13 05:17:29', '0000-00-00 00:00:00'),
(12, 'Fausto Durgan', 10, 9669, 761, 5, 'Voluptas iusto voluptatem non dolor ducimus. Ea et omnis consequuntur et maxime esse fugiat. Nisi cupiditate soluta et aut eaque et dignissimos. Impedit quas et labore libero harum voluptates.', 'https://via.placeholder.com/640x480.png/00bb99?text=numquam', '1', '1976-09-26 23:53:53', '0000-00-00 00:00:00'),
(13, 'Prof. Fleta Greenfelder', 7, 5902, 2436, 7, 'Cum eos et maiores soluta enim labore aut. Cum rem magni praesentium delectus et. Culpa expedita est corporis eaque. Nemo non nostrum eveniet architecto laborum.', 'https://via.placeholder.com/640x480.png/00ccdd?text=mollitia', '0', '1970-11-27 04:53:40', '0000-00-00 00:00:00'),
(14, 'Nestor Schneider', 10, 8487, 1462, 3, 'Optio aspernatur rerum magnam. Dignissimos eos voluptas et.', 'https://via.placeholder.com/640x480.png/00dd22?text=fugiat', '0', '2004-07-03 19:08:10', '0000-00-00 00:00:00'),
(15, 'Rosendo Schamberger Jr.', 8, 748, 2480, 9, 'Quia cumque quod ut rerum iste. Qui expedita voluptatem minima maxime assumenda est minima.', 'https://via.placeholder.com/640x480.png/001166?text=eos', '1', '1974-01-17 10:48:02', '0000-00-00 00:00:00'),
(16, 'Dr. Nova Morissette MD', 3, 3897, 1480, 1, 'Qui vitae id non animi. Nihil autem eveniet velit.', 'https://via.placeholder.com/640x480.png/008811?text=magni', '1', '1984-01-20 16:46:29', '0000-00-00 00:00:00'),
(17, 'Randal Legros', 8, 4160, 6236, 2, 'Quo dolorem assumenda impedit ex. Sint sit est velit dignissimos. Iste voluptates delectus autem maiores odio eligendi possimus.', 'https://via.placeholder.com/640x480.png/00bb55?text=natus', '1', '2011-07-25 00:47:18', '0000-00-00 00:00:00'),
(18, 'Elmore Rosenbaum', 4, 5771, 3267, 2, 'Soluta illum recusandae dolor doloremque consectetur accusantium corporis iste. Neque rerum aperiam dolorum consequatur consequatur harum.', 'https://via.placeholder.com/640x480.png/00dd00?text=voluptatem', '0', '1973-12-19 15:37:15', '0000-00-00 00:00:00'),
(19, 'Wilber Upton', 1, 8416, 3336, 6, 'Et molestiae iure cum aut. Quae culpa fugiat laboriosam voluptatem aut neque sunt. Id magni ut quas.', 'https://via.placeholder.com/640x480.png/004455?text=minus', '0', '2022-11-16 21:52:25', '0000-00-00 00:00:00'),
(20, 'Mr. Kraig Marquardt', 1, 9957, 2292, 2, 'Cupiditate cumque qui nihil minus. Unde voluptas pariatur sed laudantium iure quo. Fuga provident esse et.', 'https://via.placeholder.com/640x480.png/0088aa?text=eum', '1', '1984-12-01 15:26:39', '0000-00-00 00:00:00'),
(21, 'Ms. Molly Jones', 10, 5622, 6239, 3, 'Nostrum aut eos voluptatem mollitia. Minus aut et est molestiae id quaerat illum. Sint commodi ab est. Officiis est autem reiciendis ullam aut beatae.', 'https://via.placeholder.com/640x480.png/003355?text=quae', '0', '1981-06-08 02:00:35', '0000-00-00 00:00:00'),
(22, 'Madeline Senger', 10, 6494, 2044, 2, 'Qui ipsum dolorem laborum quis. Adipisci eum et molestias dolorem eos aut nesciunt omnis. Odit inventore assumenda odio quia in. Omnis quis sit laboriosam.', 'https://via.placeholder.com/640x480.png/0077cc?text=necessitatibus', '1', '1971-05-01 22:50:41', '0000-00-00 00:00:00'),
(23, 'Darrell Purdy DVM', 1, 1255, 8981, 2, 'Aut aut libero laborum sit eius. Quis sit rerum et harum deleniti quidem doloremque quaerat. Vero quia quisquam dolorum itaque repellendus ut.', 'https://via.placeholder.com/640x480.png/00bb11?text=rerum', '1', '1984-10-17 03:06:23', '0000-00-00 00:00:00'),
(24, 'Nash Cole', 3, 1295, 5268, 3, 'Voluptate sint beatae quia ut saepe voluptas. Voluptatem qui dolor aliquid deserunt. Beatae consequatur molestiae voluptatem omnis omnis quas. Sequi qui quam sequi illo vero reprehenderit.', 'https://via.placeholder.com/640x480.png/00eebb?text=et', '0', '2021-07-15 02:43:48', '0000-00-00 00:00:00'),
(25, 'Kaitlyn Schoen', 10, 4361, 4918, 10, 'Sed unde aspernatur voluptate iusto ut. Eos reiciendis perspiciatis qui ad in voluptates ex. Sed eum soluta suscipit.', 'https://via.placeholder.com/640x480.png/004422?text=illo', '1', '2007-04-02 17:03:33', '0000-00-00 00:00:00'),
(26, 'Trever Rippin', 9, 9946, 3281, 7, 'Ab molestiae vitae sit. Alias consectetur consequuntur ipsam quia. Unde maxime et consequatur sed officia nulla qui et. Laudantium velit quia mollitia qui non quasi modi.', 'https://via.placeholder.com/640x480.png/005511?text=pariatur', '1', '2014-06-30 15:24:40', '0000-00-00 00:00:00'),
(27, 'Aryanna Hettinger II', 7, 2900, 944, 7, 'Alias omnis non reprehenderit pariatur ut eos. A odio optio unde labore sed nihil. Tempore natus voluptates deserunt dolore. Labore et et aliquam est ut eligendi.', 'https://via.placeholder.com/640x480.png/0055ff?text=et', '0', '2010-09-08 21:10:09', '0000-00-00 00:00:00'),
(28, 'Eleanora Metz Sr.', 4, 961, 7868, 1, 'Qui amet natus voluptas facere maxime modi. Velit est excepturi repellendus. Vero facere ut amet in nisi eius.', 'https://via.placeholder.com/640x480.png/00eedd?text=voluptas', '0', '2006-08-13 11:29:06', '0000-00-00 00:00:00'),
(29, 'Mr. Tommie Ernser I', 7, 4065, 9300, 4, 'Iure velit aut dicta dolor. Qui voluptatem non sunt qui expedita eius. Explicabo delectus dolore voluptas et est laborum odio. Officia est voluptates voluptas aut. Et fugit necessitatibus est.', 'https://via.placeholder.com/640x480.png/00ffdd?text=doloribus', '0', '1976-05-21 17:47:22', '0000-00-00 00:00:00'),
(30, 'Brandy Reichert', 8, 8820, 763, 10, 'Quibusdam unde ut exercitationem quia eos dolorum est. Earum quo quam quod repellat alias dolorum. Quasi corrupti soluta quibusdam tenetur sed molestias ab voluptatem.', 'https://via.placeholder.com/640x480.png/009933?text=voluptatem', '0', '1986-01-27 08:43:35', '0000-00-00 00:00:00'),
(31, 'Lina Crist', 6, 8821, 9939, 2, 'Libero magnam cupiditate maiores illum consequatur occaecati tempora. Facere rerum dolorem corporis illum quidem totam. Sapiente expedita nobis autem placeat atque ut.', 'https://via.placeholder.com/640x480.png/00aa55?text=accusantium', '1', '2010-03-23 06:48:38', '0000-00-00 00:00:00'),
(32, 'Olga Kozey', 3, 2843, 5829, 3, 'Illum ab corporis laboriosam. Vel nobis eos voluptatem aut voluptate. Rem neque iusto incidunt rerum laboriosam.', 'https://via.placeholder.com/640x480.png/004499?text=sunt', '0', '1988-07-23 05:05:27', '0000-00-00 00:00:00'),
(33, 'Prof. Francisco Stroman IV', 6, 8413, 4710, 5, 'Qui sequi beatae error labore. Ut voluptatem ut atque suscipit corporis nesciunt. Corporis ratione illum aut aspernatur omnis eligendi commodi neque.', 'https://via.placeholder.com/640x480.png/0088cc?text=laborum', '1', '1999-07-24 22:02:48', '0000-00-00 00:00:00'),
(34, 'Mr. Layne McKenzie MD', 7, 1665, 5771, 10, 'Assumenda numquam molestias et omnis aliquid sed. Voluptatum et nulla et commodi accusantium molestias id. Temporibus id consectetur non porro impedit at. Error est et sint non.', 'https://via.placeholder.com/640x480.png/005588?text=et', '0', '2017-05-14 21:46:29', '0000-00-00 00:00:00'),
(35, 'Amani Blanda MD', 2, 2410, 1918, 10, 'Qui deserunt omnis voluptas illum nemo repellat quam. Quaerat omnis ab numquam iste quis fugiat iusto. Consectetur quos vero ea nobis voluptas dolor.', 'https://via.placeholder.com/640x480.png/00aa44?text=quia', '1', '1996-04-30 04:13:01', '0000-00-00 00:00:00'),
(36, 'Dr. Cara Volkman', 5, 9542, 625, 6, 'Dolor ut nostrum omnis illum. Quo pariatur sunt animi aut quam. Excepturi distinctio minima numquam rem odio molestiae. Est autem quam facere ex aperiam.', 'https://via.placeholder.com/640x480.png/0088aa?text=ut', '0', '1986-06-04 21:14:28', '0000-00-00 00:00:00'),
(37, 'Karson Dickinson', 5, 3443, 165, 7, 'Ea sunt error voluptatum maxime vero. Aut ipsam rem quae quis est similique qui quas.', 'https://via.placeholder.com/640x480.png/0044dd?text=doloremque', '1', '2015-12-18 10:04:26', '0000-00-00 00:00:00'),
(38, 'Pink Conn', 1, 8145, 6730, 6, 'Quod aut voluptas voluptatibus maiores labore in magnam. Earum earum voluptate fugit molestiae rerum est. Recusandae explicabo dolorem qui. In aspernatur illum omnis quo vero possimus quia ea.', 'https://via.placeholder.com/640x480.png/0000bb?text=voluptas', '1', '2022-12-25 12:39:43', '0000-00-00 00:00:00'),
(39, 'Mr. Eddie Kulas PhD', 10, 2110, 4936, 4, 'Iusto deleniti a illum velit. Doloribus qui autem in aliquam sit ea. Quod at eius ipsam officia.', 'https://via.placeholder.com/640x480.png/009988?text=iusto', '1', '1993-11-14 10:59:22', '0000-00-00 00:00:00'),
(40, 'Adrien Bergstrom', 8, 7632, 2896, 5, 'Id animi illo quae. Deleniti eveniet aut odio delectus consequatur fuga. Quod doloremque inventore corrupti officiis et inventore.', 'https://via.placeholder.com/640x480.png/000066?text=quidem', '0', '2000-03-11 20:51:07', '0000-00-00 00:00:00'),
(41, 'Sandy Erdman', 8, 7036, 4509, 2, 'Non voluptatem sit quisquam enim unde consequuntur molestiae similique. Quaerat voluptatibus veniam consequatur non qui recusandae quis. In ullam voluptates dolorem ut autem magni.', 'https://via.placeholder.com/640x480.png/003377?text=praesentium', '1', '2002-03-11 23:35:05', '0000-00-00 00:00:00'),
(42, 'Jamil Rowe', 8, 3052, 8867, 3, 'Qui molestiae dolor natus eum. Molestiae consequuntur et tempora. Quia voluptatem voluptatum laborum cupiditate modi ipsa omnis porro.', 'https://via.placeholder.com/640x480.png/009966?text=excepturi', '0', '2000-06-17 05:50:51', '0000-00-00 00:00:00'),
(43, 'Prof. Adah Champlin V', 1, 7348, 2772, 2, 'Rerum dignissimos quo unde eligendi eveniet nihil. Fugiat tempore omnis nulla fugiat. Praesentium atque saepe eligendi.', 'https://via.placeholder.com/640x480.png/007711?text=quo', '0', '1998-03-26 23:05:32', '0000-00-00 00:00:00'),
(44, 'Jennie Hegmann', 7, 813, 1172, 5, 'Quia nobis aut laborum quis alias. Aut magnam distinctio blanditiis id libero et. Vitae officiis eaque dolores illo. Quos vitae veritatis illo iure hic molestiae accusamus.', 'https://via.placeholder.com/640x480.png/003344?text=fugiat', '1', '1973-03-15 08:47:27', '0000-00-00 00:00:00'),
(45, 'Reanna Gutkowski', 2, 9424, 4666, 2, 'Maiores voluptatem odit aut consequuntur id ipsa ab assumenda. Fuga saepe esse voluptate unde ut saepe blanditiis ducimus. Provident velit fugiat libero eos velit et autem.', 'https://via.placeholder.com/640x480.png/00aaee?text=dolor', '1', '1979-08-31 07:27:18', '0000-00-00 00:00:00'),
(46, 'Amira Johns', 5, 9347, 9844, 2, 'Nobis est a sint labore quas. Iste optio et at omnis impedit iste. Rerum blanditiis rerum voluptates cupiditate optio. Optio quibusdam sapiente quia error et.', 'https://via.placeholder.com/640x480.png/0066ff?text=laudantium', '1', '1991-04-22 09:03:13', '0000-00-00 00:00:00'),
(47, 'Kacie McKenzie', 7, 8642, 1695, 1, 'Expedita totam maiores ipsa recusandae illo laboriosam optio. Perspiciatis hic iste nobis maiores mollitia. Sit modi et ut inventore nisi eos magni temporibus.', 'https://via.placeholder.com/640x480.png/0011ff?text=repellat', '1', '2019-04-05 03:11:52', '0000-00-00 00:00:00'),
(48, 'Dr. Jesse Thompson DVM', 5, 3897, 3183, 3, 'Id provident esse adipisci aliquam. Autem ex aspernatur quia sapiente accusantium. Laboriosam quas et totam sit fuga natus sed.', 'https://via.placeholder.com/640x480.png/0033aa?text=labore', '1', '2011-01-01 06:09:43', '0000-00-00 00:00:00'),
(49, 'Concepcion Kreiger', 2, 894, 7176, 8, 'Aut repudiandae nihil eius voluptatibus. Dolores qui explicabo sed laboriosam. Impedit officia earum nam eos. Neque dolorem et similique.', 'https://via.placeholder.com/640x480.png/00ddaa?text=eius', '1', '2015-03-13 13:53:31', '0000-00-00 00:00:00'),
(50, 'Rex Grady', 1, 5123, 5541, 5, 'Rerum omnis sed ut corrupti dolor. Ea rem omnis ea laboriosam ad sed. Eum labore delectus incidunt molestiae ipsum. Vitae facilis dolor vel.', 'https://via.placeholder.com/640x480.png/0055ee?text=exercitationem', '0', '2005-04-06 18:51:19', '0000-00-00 00:00:00'),
(51, 'Miss Freda Lueilwitz', 6, 8978, 7118, 7, 'Hic expedita ea numquam quibusdam earum doloremque ut. Adipisci dolores fuga iusto unde accusantium laboriosam. Natus tempore et qui et enim. Sunt odit quod dolor.', 'https://via.placeholder.com/640x480.png/0022aa?text=non', '1', '1983-05-06 05:39:54', '0000-00-00 00:00:00'),
(52, 'Randy Block', 10, 657, 2825, 5, 'Vel aperiam et deleniti quod soluta eos sapiente. Et necessitatibus sed rerum at. Ut a aut libero omnis libero. Necessitatibus consequatur vitae hic occaecati nemo in vero.', 'https://via.placeholder.com/640x480.png/00dd77?text=veniam', '0', '2014-04-20 09:27:25', '0000-00-00 00:00:00'),
(53, 'Hipolito Schaefer', 9, 7858, 8336, 3, 'Voluptas quidem voluptatem et porro. Incidunt et sit necessitatibus consequatur enim. Natus consequatur nobis omnis nihil.', 'https://via.placeholder.com/640x480.png/00ff00?text=sit', '1', '2005-03-31 12:53:45', '0000-00-00 00:00:00'),
(54, 'Shanie Runolfsdottir', 7, 2498, 4991, 9, 'Aliquam ut qui nulla temporibus. Tempora ut fugit voluptas sapiente eos omnis debitis. Voluptas voluptas suscipit alias rerum a.', 'https://via.placeholder.com/640x480.png/00cc55?text=eos', '1', '1986-12-13 16:10:55', '0000-00-00 00:00:00'),
(55, 'Caleigh Schroeder Jr.', 9, 9920, 2646, 3, 'Voluptates ipsam rem ut doloribus voluptate. Enim aperiam vel iste non ullam et. Consectetur earum animi ullam nulla facere. Tempora cupiditate mollitia harum non quam.', 'https://via.placeholder.com/640x480.png/00cc99?text=eaque', '1', '1996-12-22 21:49:06', '0000-00-00 00:00:00'),
(56, 'Gwendolyn Wehner', 1, 8998, 1530, 4, 'Odio incidunt aliquam tenetur minima quo omnis. In ex eius ea autem voluptatem ex. Illo est ratione distinctio voluptatum officia. Repudiandae omnis voluptatibus quis.', 'https://via.placeholder.com/640x480.png/0077cc?text=veritatis', '0', '1970-11-28 23:32:35', '0000-00-00 00:00:00'),
(57, 'Maudie Johns', 9, 3100, 7910, 4, 'Saepe nisi quisquam ullam qui repudiandae. Iure accusamus iste beatae animi. Minus cupiditate provident culpa.', 'https://via.placeholder.com/640x480.png/00cc00?text=et', '0', '1991-08-24 17:41:51', '0000-00-00 00:00:00'),
(58, 'Juvenal Batz', 10, 5316, 9012, 3, 'Nihil laboriosam aut adipisci dolorem voluptatum. Quis corporis corrupti expedita molestiae.', 'https://via.placeholder.com/640x480.png/0033cc?text=tenetur', '1', '1999-01-22 21:08:38', '0000-00-00 00:00:00'),
(59, 'Janice Leuschke', 4, 197, 1907, 3, 'Beatae id dignissimos molestiae et. Itaque autem nobis distinctio quia voluptate voluptas quam. Veniam omnis nihil asperiores animi est nostrum corporis consectetur.', 'https://via.placeholder.com/640x480.png/00ff11?text=facere', '1', '1985-12-19 16:21:25', '0000-00-00 00:00:00'),
(60, 'Prof. Kaia Jacobi Sr.', 5, 1486, 8180, 4, 'Quam dolores eaque nihil. Quaerat quae ut ut animi odio ut est. Quod beatae voluptas odit quam voluptas natus.', 'https://via.placeholder.com/640x480.png/0000cc?text=maiores', '1', '1990-05-24 16:39:53', '0000-00-00 00:00:00'),
(61, 'Percy Sauer', 6, 8743, 9460, 7, 'Voluptates enim animi dicta et eaque. Eveniet aut culpa molestias. Velit doloribus adipisci est tenetur iste. Qui sed hic culpa accusamus est vitae.', 'https://via.placeholder.com/640x480.png/00dd88?text=vel', '0', '2005-01-21 10:30:39', '0000-00-00 00:00:00'),
(62, 'Dakota Klocko', 7, 7045, 4953, 9, 'Sapiente qui quae ullam debitis est corrupti. Omnis vero laborum voluptatem cupiditate placeat. Numquam sed voluptatem qui impedit nam asperiores.', 'https://via.placeholder.com/640x480.png/00bbdd?text=fugiat', '1', '1980-12-04 01:37:49', '0000-00-00 00:00:00'),
(63, 'Elinore Braun', 9, 294, 7708, 6, 'Quaerat eius est qui. Debitis explicabo ut rerum harum omnis cumque eum. Alias corporis quam laborum sunt excepturi esse alias.', 'https://via.placeholder.com/640x480.png/0099dd?text=qui', '1', '1972-08-30 22:59:22', '0000-00-00 00:00:00'),
(64, 'Domenick Crist', 8, 1141, 5567, 10, 'Quia quas in voluptatem id. Rerum dolor incidunt impedit et. Sed ipsam modi reiciendis ab rerum molestiae minima.', 'https://via.placeholder.com/640x480.png/005555?text=qui', '1', '1996-03-22 22:40:15', '0000-00-00 00:00:00'),
(65, 'Fatima Hartmann', 6, 1609, 1083, 9, 'Consequatur omnis voluptate quia molestias aut odio in. Mollitia qui labore nulla similique.', 'https://via.placeholder.com/640x480.png/00ccee?text=totam', '1', '2015-08-28 02:06:36', '0000-00-00 00:00:00'),
(66, 'Cesar Langworth I', 3, 1826, 6247, 3, 'Qui excepturi nihil rerum quam et optio. Modi enim qui tenetur ab.', 'https://via.placeholder.com/640x480.png/0055dd?text=ea', '1', '1994-10-17 19:36:05', '0000-00-00 00:00:00'),
(67, 'Marguerite Gibson', 8, 596, 1779, 3, 'Porro odio harum consectetur tempora. Cum ut aperiam officiis debitis fugit perspiciatis quaerat. Id recusandae qui non vero vitae dolorum. Repellendus fugit vel fuga dignissimos ducimus rerum.', 'https://via.placeholder.com/640x480.png/00ff22?text=at', '1', '1985-08-03 07:57:59', '0000-00-00 00:00:00'),
(68, 'Violette Lesch IV', 3, 1305, 2817, 2, 'Sunt et cumque animi tempora. Optio est explicabo distinctio nobis asperiores dicta similique. Quidem alias est expedita nesciunt odit voluptatum.', 'https://via.placeholder.com/640x480.png/009966?text=cupiditate', '1', '2011-03-07 09:57:31', '0000-00-00 00:00:00'),
(69, 'Christelle D\'Amore', 8, 8358, 7823, 1, 'Natus nihil magnam voluptatem porro itaque ut. Temporibus ea eius ut qui. Quisquam officiis et repudiandae voluptas animi.', 'https://via.placeholder.com/640x480.png/003300?text=alias', '1', '2021-10-30 20:38:21', '0000-00-00 00:00:00'),
(70, 'Mario Robel', 4, 8221, 368, 10, 'Laudantium dolorem exercitationem voluptates nihil aut. Aspernatur molestiae odio nemo ipsa blanditiis molestiae atque iste. Alias impedit ut quae sed reiciendis ipsum soluta facere.', 'https://via.placeholder.com/640x480.png/005599?text=dolorum', '0', '2001-09-14 04:27:39', '0000-00-00 00:00:00'),
(71, 'Ms. Eldora Block I', 4, 9552, 1476, 5, 'Consequatur nesciunt temporibus facilis ex facilis. Cum qui ut perspiciatis quia iusto hic vero mollitia. Voluptas ipsa officia voluptate explicabo id rem quia dolores.', 'https://via.placeholder.com/640x480.png/0000aa?text=qui', '1', '1974-10-24 05:51:50', '0000-00-00 00:00:00'),
(72, 'Prof. Rickie Tremblay V', 6, 4925, 407, 10, 'Ad aut nisi eum autem. Aut ut labore cupiditate consequuntur in atque. Nisi animi dolore quos nihil aut perspiciatis sint.', 'https://via.placeholder.com/640x480.png/0077bb?text=eligendi', '1', '2009-07-01 23:20:10', '0000-00-00 00:00:00'),
(73, 'Dr. Amanda Wisoky', 4, 3998, 5119, 2, 'Molestias maiores velit quam dolores. Beatae libero laudantium aliquam. Natus officiis iure ab voluptates delectus sed.', 'https://via.placeholder.com/640x480.png/00bb44?text=et', '1', '1980-10-28 02:03:52', '0000-00-00 00:00:00'),
(74, 'Una Gottlieb', 6, 1393, 6871, 9, 'Ut vitae laudantium quibusdam tempora iusto laudantium minima. Illo voluptatem voluptatem dolorem cum ut. Sunt veniam et temporibus deleniti.', 'https://via.placeholder.com/640x480.png/005599?text=odit', '0', '1971-02-10 00:00:54', '0000-00-00 00:00:00'),
(75, 'Lucienne Schamberger', 9, 5105, 471, 5, 'In nihil quod sed numquam magnam laudantium. Unde facilis voluptas enim ipsam ea id. Aperiam ut autem nemo sed nihil porro molestias. Non cupiditate distinctio quae magnam.', 'https://via.placeholder.com/640x480.png/00eebb?text=enim', '1', '1996-01-26 23:41:50', '0000-00-00 00:00:00'),
(76, 'Dr. Zechariah Conroy', 4, 5895, 2957, 9, 'Non architecto facere adipisci est recusandae ipsa. Nesciunt sint dolore magni quam. Odio vitae fuga ullam odit sit omnis illum.', 'https://via.placeholder.com/640x480.png/00cccc?text=deserunt', '1', '2017-10-30 18:47:38', '0000-00-00 00:00:00'),
(77, 'Jamison Klocko', 1, 5180, 4332, 8, 'Dolorem non rerum omnis adipisci hic quas. Deleniti illo est officiis. Voluptate qui explicabo nam consequatur inventore qui quo.', 'https://via.placeholder.com/640x480.png/00bb77?text=optio', '0', '2000-01-08 15:30:14', '0000-00-00 00:00:00'),
(78, 'Prof. Bessie Pollich', 9, 3066, 2453, 4, 'Voluptatem molestias fugiat est fugit dolores voluptatum saepe. Sit error consequuntur est. Corrupti sed voluptatem vel ab. Aut soluta minima exercitationem nisi est.', 'https://via.placeholder.com/640x480.png/008855?text=voluptatem', '0', '1973-04-15 04:56:42', '0000-00-00 00:00:00'),
(79, 'Camylle Hettinger', 6, 2585, 405, 9, 'Similique voluptatem alias quos quas rerum. Consequatur dignissimos magnam atque. Aut perferendis animi mollitia quia aut. Ut illum deleniti reprehenderit.', 'https://via.placeholder.com/640x480.png/0000ff?text=et', '1', '2019-06-03 14:07:04', '0000-00-00 00:00:00'),
(80, 'Dr. Jace Rolfson DVM', 9, 8425, 7525, 5, 'Error minus pariatur quo molestiae quo sit molestiae. At neque sed eius. Incidunt est culpa doloremque aut est dolorem quia.', 'https://via.placeholder.com/640x480.png/004433?text=numquam', '0', '2014-01-24 10:03:57', '0000-00-00 00:00:00'),
(81, 'Uriah Shanahan', 4, 3316, 5193, 3, 'Illo eos recusandae vel harum sequi nemo et ea. Maiores saepe ullam sint doloremque ut vero. Magnam non iusto est in.', 'https://via.placeholder.com/640x480.png/009911?text=quaerat', '1', '2006-11-18 02:13:54', '0000-00-00 00:00:00'),
(82, 'Dr. Shayna Nitzsche I', 4, 3866, 8393, 5, 'Aut ratione reprehenderit exercitationem quidem id omnis eius modi. Iusto velit perspiciatis aliquam. Eligendi doloremque unde nobis vel ratione consequatur neque.', 'https://via.placeholder.com/640x480.png/009988?text=mollitia', '0', '2005-01-28 07:40:49', '0000-00-00 00:00:00'),
(83, 'Prof. Green Spinka IV', 4, 185, 9090, 5, 'Saepe ut vitae eveniet dolor porro. Aspernatur veniam minima natus exercitationem doloribus.', 'https://via.placeholder.com/640x480.png/005555?text=qui', '1', '2002-01-14 11:18:50', '0000-00-00 00:00:00'),
(84, 'Earnestine Haley', 10, 9858, 7434, 9, 'Voluptatem porro nostrum eos id. Incidunt repudiandae qui delectus ut aut autem natus sit. Quia nisi reprehenderit est quisquam aut praesentium. Non vel magni deleniti corporis voluptatum sint et.', 'https://via.placeholder.com/640x480.png/00ff88?text=corrupti', '1', '2019-11-12 09:10:05', '0000-00-00 00:00:00'),
(85, 'Dr. Mable Pollich DDS', 9, 5753, 9747, 3, 'Aspernatur architecto similique odio laudantium rem voluptas. Ad soluta et error non ab voluptatem sit. Sint ea recusandae delectus aliquam mollitia.', 'https://via.placeholder.com/640x480.png/004455?text=maxime', '1', '1991-03-20 18:46:07', '0000-00-00 00:00:00'),
(86, 'Mariela Hamill', 4, 6592, 3819, 6, 'Autem omnis aut veniam magnam est. Consequatur quo qui ut. Impedit perferendis laudantium impedit explicabo. Ea expedita excepturi deleniti qui.', 'https://via.placeholder.com/640x480.png/006699?text=reprehenderit', '0', '2002-12-12 20:20:41', '0000-00-00 00:00:00'),
(87, 'Gilda Ritchie', 7, 4791, 7378, 10, 'Cumque sint incidunt necessitatibus accusamus quis quis et. Blanditiis corrupti explicabo minus dolorum nobis iure.', 'https://via.placeholder.com/640x480.png/000011?text=facere', '0', '1974-05-25 22:13:07', '0000-00-00 00:00:00'),
(88, 'Dortha Gibson', 1, 1308, 3492, 4, 'Rem quis architecto eos aut animi dolor error. Provident cupiditate ut expedita incidunt nesciunt sed quis. Asperiores sit sint rerum tempora. Et et rerum aspernatur omnis quia quia.', 'https://via.placeholder.com/640x480.png/003322?text=et', '1', '1994-07-20 21:31:39', '0000-00-00 00:00:00'),
(89, 'Alysha Morissette', 5, 8140, 7050, 7, 'Ut nostrum eius consequatur quia ut. Unde qui aliquid ducimus eaque. Rerum quis quisquam doloremque mollitia suscipit. Minus veritatis et accusamus consequatur consequatur architecto.', 'https://via.placeholder.com/640x480.png/004411?text=veniam', '1', '1985-12-29 21:18:16', '0000-00-00 00:00:00'),
(90, 'Nella Wiza', 3, 9655, 8826, 8, 'Pariatur earum maiores repellat accusantium molestias consequatur. Aut ex voluptates excepturi amet. Iusto et dolores in quibusdam asperiores ipsam.', 'https://via.placeholder.com/640x480.png/004411?text=rem', '1', '1983-03-07 22:33:59', '0000-00-00 00:00:00'),
(91, 'Willy Koch', 8, 6312, 698, 10, 'Dignissimos magnam vero rerum et nihil natus corporis. Aut et voluptate sunt maxime saepe error ipsam. Animi repellendus eos animi.', 'https://via.placeholder.com/640x480.png/0022bb?text=rem', '0', '2013-09-15 16:03:59', '0000-00-00 00:00:00'),
(92, 'Dr. Rowan Kerluke', 9, 8387, 8070, 7, 'At maiores quasi enim inventore labore totam facere quia. Id voluptate autem aut repellat. Rem quia rerum quam saepe possimus possimus temporibus labore.', 'https://via.placeholder.com/640x480.png/000077?text=occaecati', '0', '1983-11-03 02:10:02', '0000-00-00 00:00:00'),
(93, 'Soledad Pfannerstill', 5, 7865, 5788, 2, 'Et sequi non repellendus et voluptas. Enim et qui autem laudantium id et laudantium beatae. Aspernatur odio rem nostrum minus magnam quibusdam.', 'https://via.placeholder.com/640x480.png/0044cc?text=et', '0', '1994-02-04 16:56:03', '0000-00-00 00:00:00'),
(94, 'Lambert Hand', 10, 3720, 5821, 2, 'Maxime alias voluptatem harum natus. Beatae iste nisi nihil consequatur commodi delectus. Sed et adipisci perferendis et. Maiores quos qui voluptatem aliquid numquam.', 'https://via.placeholder.com/640x480.png/002211?text=voluptatem', '0', '2001-11-19 20:55:58', '0000-00-00 00:00:00'),
(95, 'Ms. Aurore Greenfelder IV', 2, 5463, 3002, 9, 'Et quidem dolores ea inventore eum. Voluptatem accusamus odit numquam rem neque. Sequi esse sequi sed maxime rerum sapiente enim a. Voluptatem quo laboriosam fuga.', 'https://via.placeholder.com/640x480.png/0011dd?text=reprehenderit', '0', '1971-08-22 05:33:54', '0000-00-00 00:00:00'),
(96, 'Eino Wuckert', 2, 8907, 7225, 5, 'Consequatur dolorem culpa eum non at. Est totam dicta placeat facilis quo ipsa. Quas qui repudiandae quia quisquam. Voluptatem non accusantium corrupti.', 'https://via.placeholder.com/640x480.png/00bb00?text=mollitia', '1', '2003-08-10 20:29:56', '0000-00-00 00:00:00'),
(97, 'Brooklyn Moen', 2, 2320, 2701, 6, 'Optio quaerat rerum quisquam quos et inventore. Illum omnis doloribus ut ut. Reprehenderit nemo aspernatur vitae esse ab harum.', 'https://via.placeholder.com/640x480.png/008866?text=optio', '1', '1997-04-17 02:50:18', '0000-00-00 00:00:00'),
(98, 'Dr. Joshuah Schmeler Sr.', 10, 2887, 5241, 9, 'Et et doloribus asperiores dolore. Occaecati eos explicabo laudantium adipisci. Et alias natus quos recusandae et. Quas tempora culpa accusantium voluptatem.', 'https://via.placeholder.com/640x480.png/0077bb?text=et', '0', '1979-10-09 11:42:33', '0000-00-00 00:00:00'),
(99, 'Austen Sanford', 6, 5710, 3114, 6, 'Sapiente voluptas perspiciatis eos rerum. Ex cupiditate sed sint libero dolor excepturi. Dolor autem cumque doloribus. Neque harum enim enim architecto voluptatem libero sit.', 'https://via.placeholder.com/640x480.png/00aaaa?text=autem', '1', '1987-05-26 09:12:41', '0000-00-00 00:00:00'),
(100, 'Prof. Rhett Considine', 10, 9310, 6621, 4, 'Rerum maiores quia deleniti in corporis eum totam. Consequuntur quaerat fugiat culpa illo qui harum veritatis fugiat. Ut eos quo asperiores.', 'https://via.placeholder.com/640x480.png/00ff11?text=placeat', '0', '2019-08-14 06:00:03', '0000-00-00 00:00:00'),
(101, 'Apple 14 Pro Max update', 17, 1240, 1200, 1, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident voluptatum ipsam soluta aspernatur ab earum cum quaerat, facilis quos ratione nobis labore voluptatibus numquam blanditiis corporis eveniet nesciunt repellat recusandae.', '08.png', 'Active', '2023-01-19 03:22:20', '0000-00-00 00:00:00'),
(102, 'Apple 14 Pro Max update', 18, 1240, 1200, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '07.png', 'Active', '2023-01-19 03:25:31', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `value`) VALUES
(1, 'Admin', 1),
(2, 'User', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `public_name` varchar(200) NOT NULL DEFAULT 'public_name',
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `phone` varchar(23) NOT NULL,
  `address` text NOT NULL,
  `fix_address` text NOT NULL,
  `profile_img` varchar(250) NOT NULL DEFAULT '1.jpg',
  `company` varchar(200) NOT NULL DEFAULT 'company',
  `bio` text NOT NULL,
  `birth_date` datetime NOT NULL DEFAULT current_timestamp(),
  `country` varchar(100) NOT NULL DEFAULT 'Default Country',
  `state` varchar(200) NOT NULL DEFAULT 'state',
  `language` varchar(250) NOT NULL,
  `fav_music` varchar(200) NOT NULL,
  `fav_movie` varchar(250) NOT NULL,
  `website` varchar(200) NOT NULL DEFAULT 'example.com',
  `role_id` tinyint(4) NOT NULL,
  `status` int(6) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
