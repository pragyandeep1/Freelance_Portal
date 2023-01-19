-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2023 at 09:39 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freelancer`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `admin_name`, `admin_password`) VALUES
(1, 'PRAG', 'set');

-- --------------------------------------------------------

--
-- Table structure for table `award_bid`
--

CREATE TABLE `award_bid` (
  `id` int(11) NOT NULL,
  `amount` double(10,2) NOT NULL,
  `duration` int(10) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bid`
--

CREATE TABLE `bid` (
  `int` int(10) NOT NULL,
  `amount` double(10,2) NOT NULL,
  `duration` int(10) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(10) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_phone` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `content` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `user_name`, `user_email`, `user_phone`, `subject`, `content`) VALUES
(1, 'Pramila', 'pragyandeepmohanty@gmail.com', '8888888888', 'hello', 'hey there'),
(3, 'Pragyandeep', 'pragyandeep.2014@gmail.com', '7777777777', 'subject', 'welcome kit'),
(4, 'Pramila', 'pragyandeepmohanty@gmail.com', '6666666666', 'karona', 'jalo'),
(5, 'Pragyandeep', 'pragyandeepmohanty@gmail.com', '8888888888', 'subject', 'rangilaa'),
(6, 'Rajesh Jain', 'a1.914182766.1a.ceo@a1.net', '8055603022', 'hello', 'I have been still waiting for you.');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `company` varchar(100) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `contact_user` varchar(100) NOT NULL,
  `contact_email` varchar(100) NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_posting`
--

CREATE TABLE `job_posting` (
  `project_id` int(10) NOT NULL,
  `project_title` varchar(100) NOT NULL,
  `project_description` varchar(500) NOT NULL,
  `price` double(10,2) NOT NULL,
  `file_name` varchar(200) NOT NULL,
  `type_work` text NOT NULL,
  `uploaded_on` date NOT NULL DEFAULT current_timestamp(),
  `posted_by` varchar(100) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_posting`
--

INSERT INTO `job_posting` (`project_id`, `project_title`, `project_description`, `price`, `file_name`, `type_work`, `uploaded_on`, `posted_by`, `status`) VALUES
(25, 'Logo Design', 'asdf', 1290.00, 'product-11.jpg', 'Logo Design', '2022-01-31', 'Prag', 1),
(27, 'asddf', 'hagget', 1210.00, 'product-4.jpg', 'Translator', '2022-01-31', 'Job', 1),
(32, 'geryh', 'shdhsh', 1234.00, 'product-1.jpg', 'Array', '2022-02-04', 'Chiku', 1),
(34, 'fill_form', 'ethyjy', 4000.00, 'product-6.jpg', 'Array', '2022-02-04', 'Asit', 1),
(36, 'android game', 'vfga', 20000.00, 'product-8.jpg', 'Math and Algorithms', '2022-02-04', 'Bhabani', 1),
(37, 'Lakh Work', 'come lakh', 3049.00, 'product-2.jpg', 'Human Resources', '2022-02-04', 'Neha', 1),
(38, 'Film shoot', '&nbsp;Indian Summer', 23000.00, '1644472195-2020_Summer_Olympics_medal_map.jpg', 'Microsoft Office Software', '2022-02-10', 'Prag', 1),
(39, 'eftehbt', 'demonstration', 23000.00, '1644472769-ampcsa.jpg', 'Presentation Design', '2022-02-10', 'Prag', 1),
(40, 'vrwvr', '&nbsp;hi', 23000.00, '1644475668-Jammu_and_Kashmir_in_1946_map_of_India_by_National_Geographic.jpg', 'Industry Specific Expertise', '2022-02-10', 'Prag', 1),
(41, 'Sansar', '&nbsp;My Family', 50000.00, '1644477704-china born overseas players.jpg', 'Contracts and Agreements and Policies', '2022-02-10', 'Prag', 1);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `msg` varchar(200) NOT NULL,
  `cr_date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `msg`, `cr_date`, `status`) VALUES
(1, 'Pragyandeep Mohanty', 'Hi How are you', '2022-02-01 04:06:42', 1),
(2, 'Chicken Manchurian', 'Hi, How did it cost you?', '2022-02-01 04:39:55', 1),
(5, 'Pragyandeep Mohanty', 'hello', '2022-02-10 07:17:53', 1),
(6, 'Mughlai Paratha', 'hi\r\n', '2022-02-10 07:43:08', 1),
(7, 'Chicken Butter Masala', 'hello', '2022-02-10 07:54:04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `card_num` bigint(20) NOT NULL,
  `card_cvc` int(5) NOT NULL,
  `card_exp_month` varchar(2) NOT NULL,
  `card_exp_year` varchar(5) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_number` varchar(50) NOT NULL,
  `item_price` float(10,2) NOT NULL,
  `item_price_currency` varchar(10) NOT NULL DEFAULT 'usd',
  `paid_amount` varchar(10) NOT NULL,
  `paid_amount_currency` varchar(10) NOT NULL,
  `txn_id` varchar(100) NOT NULL,
  `payment_status` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `content` varchar(100) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `content`, `user_id`, `created_at`) VALUES
(1, 'ramala', 'ramala', '2022-01-23 19:44:54');

-- --------------------------------------------------------

--
-- Table structure for table `project_bidding`
--

CREATE TABLE `project_bidding` (
  `id` int(10) NOT NULL,
  `project_title` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `employer` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pwdreset`
--

CREATE TABLE `pwdreset` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `token` varchar(50) NOT NULL,
  `exp_dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pwdreset`
--

INSERT INTO `pwdreset` (`id`, `email`, `token`, `exp_dt`) VALUES
(1, 'namobharatiya@gmail.com', '3a7da960cf1a94c7d9f2b5b89a51bf6f62564077', '2022-01-24 02:22:38'),
(2, 'namobharatiya@gmail.com', 'dd4858492d60c502ab6fd609fde248941377294d', '2022-01-24 02:26:03'),
(3, 'namobharatiya@gmail.com', '53d699860e42bf7569de775e35d336a9aef55288', '2022-01-24 02:27:19'),
(4, 'pragyandeep.2014@gmail.com', '0fbca491f219cd066a2670665f54fb152e14394d', '2022-02-06 01:07:16'),
(5, 'a1.914182766.1a.ceo@a1.net', '8afc87658e655e85415e533a7e78c4924dc976e5', '2022-02-06 02:50:46'),
(6, 'nehakumarimishra4264@gmail.com', '98dc4a6a41d653485dd3ba4cf0b0ca21d9f3f80d', '2022-02-10 04:27:03'),
(7, 'cheriancolin@gmail.com', 'aa8ab557260adfceb59a4644cb83f828099d7bdf', '2022-02-10 04:27:31'),
(8, 'bhagirathirout8525@gmail.com', 'ae399282d1e5fc245d31dd61d09833e749c9b217', '2022-02-10 04:27:51'),
(9, 'dpuexpressmyself@gmail.com', 'e40a215e9bb06f1dd3fe42570aaec2dfaafa05e2', '2022-02-10 04:28:05'),
(10, 'mrasitdas1@gmail.com', 'd336ca3a8c36e10c234ef717c2fd120887077fa2', '2022-02-10 04:28:19'),
(11, 'suvendus@okcl.org', 'c33ea52502aba95dacdd01359f5eef969c7c8bc2', '2022-02-10 04:28:44'),
(12, 'sahoosuvendu93@gmail.com', '2c6b714d0f0e47b575d504191d566aae44baa9c5', '2022-02-10 04:28:56'),
(13, 'a1.914182766.1a.ceo@a1.net', 'd49c5373aa5a9bf3180916a87d0097912d2424f5', '2022-02-10 04:29:32'),
(14, 'a1.914182766.1a.ceo@a1.net', '17e4de288061793cd4a93d7f99054b02de3037cf', '2022-02-10 04:30:02'),
(15, 'pragyandeepmohanty@gmail.com', '72907d349ef2f4d637dcbf271b08129f60fdf888', '2022-02-10 04:31:12'),
(16, 'pragyandeep.2012@gmail.com', 'a04252cc485536e4200a68177bb8829ed5836bbd', '2022-02-10 04:32:06'),
(17, 'pragyandeep.2013@gmail.com', '8f8982916a6ca8a14d838822619d704a69cc5369', '2022-02-10 04:32:19'),
(18, 'a1.914182766.1a.ceo@a1.net', '79b287b3ba537f24d562f047761095062171e888', '2022-02-10 04:34:31'),
(19, 'pragyandeep.2013@gmail.com', 'f56c4057d8b6b4b2cf5b10fbcc253322d915b630', '2022-02-10 04:42:01'),
(20, 'pragyandeep.2012@gmail.com', '42fd6b1ddf9e6e9302cdc4b384946712aced8be9', '2022-02-10 04:42:09'),
(21, 'pragyandeep.2012@gmail.com', 'c80e3d76ef6aa65526f9960a693445ae1efb4a40', '2022-02-10 04:46:07'),
(22, 'pragyandeep.2013@gmail.com', '81269d1922c54fd12c36d69cec303fcf34f597ba', '2022-02-10 04:47:44'),
(23, 'pragyandeep.2013@gmail.com', 'eea356dd3fed6e3412c06450b819a6990ca60e04', '2022-02-10 04:47:58'),
(24, 'pragyandeep.2013@gmail.com', 'bb614f44b6be4c95ea4dd8c6f226b41d202ac173', '2022-02-10 04:48:37'),
(25, 'pragyandeep.2012@gmail.com', 'c9a203d4592757060abe72e8a8cbaffae56cede2', '2022-02-10 04:49:23'),
(26, 'a1.914182766.1a.ceo@a1.net', '9eafbfc9b58a24c148a179531edaf748cf078da7', '2022-02-10 05:14:32'),
(27, 'a1.914182766.1a.ceo@a1.net', 'da0c411becbb57cd8cb4544f0b97883b05895d54', '2022-02-10 05:15:18'),
(28, 'a1.914182766.1a.ceo@a1.net', 'd68edde77a4e7cef58b5a5c0518188a3fafbd5da', '2022-02-10 05:15:36');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `verify_token` varchar(150) DEFAULT NULL,
  `is_verified` tinyint(1) NOT NULL DEFAULT 0,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`) VALUES
(1, 'Item 1', '1.jpg', 3500.00),
(2, 'Item 2', '2.jpg', 4600.00),
(3, 'Item 3', '3.jpg', 4000.00),
(4, 'Item 4', '4.jpg', 13000.00),
(5, 'Item 5', '5.jpg', 4000.00),
(6, 'Item 6', '6.jpg', 16000.00),
(7, 'Item 7', '7.jpg', 2700.00),
(8, 'Item 8', '8.jpg', 5000.00),
(9, 'Item 9', '9.jpg', 7000.00),
(10, 'Item 10', '10.jpg', 9000.00),
(11, 'Item 11', '11.jpg', 8000.00),
(12, 'Item 12', '12.jpg', 15000.00),
(13, 'Item 13', '13.jpg', 11000.00),
(14, 'Item 14', '14.jpg', 6000.00),
(15, 'Item 15', '15.jpg', 7200.00),
(16, 'Item 16', '16.jpg', 6600.00),
(17, 'Item 17', '17.jpg', 8000.00),
(18, 'Item 18', '18.jpg', 4500.00),
(19, 'Item 19', '19.jpg', 10500.00),
(20, 'Item 20', '20.jpg', 9200.00),
(21, 'Item 21', '21.jpg', 7400.00),
(22, 'Item 22', '22.jpg', 5600.00),
(23, 'Item 23', '23.jpg', 4000.00),
(24, 'Item 24', '24.jpg', 5000.00),
(25, 'Item 25', '25.jpg', 8900.00),
(1, 'Item 1', '1.jpg', 3500.00),
(2, 'Item 2', '2.jpg', 4600.00),
(3, 'Item 3', '3.jpg', 4000.00),
(4, 'Item 4', '4.jpg', 13000.00),
(5, 'Item 5', '5.jpg', 4000.00),
(6, 'Item 6', '6.jpg', 16000.00),
(7, 'Item 7', '7.jpg', 2700.00),
(8, 'Item 8', '8.jpg', 5000.00),
(9, 'Item 9', '9.jpg', 7000.00),
(10, 'Item 10', '10.jpg', 9000.00),
(11, 'Item 11', '11.jpg', 8000.00),
(12, 'Item 12', '12.jpg', 15000.00),
(13, 'Item 13', '13.jpg', 11000.00),
(14, 'Item 14', '14.jpg', 6000.00),
(15, 'Item 15', '15.jpg', 7200.00),
(16, 'Item 16', '16.jpg', 6600.00),
(17, 'Item 17', '17.jpg', 8000.00),
(18, 'Item 18', '18.jpg', 4500.00),
(19, 'Item 19', '19.jpg', 10500.00),
(20, 'Item 20', '20.jpg', 9200.00),
(21, 'Item 21', '21.jpg', 7400.00),
(22, 'Item 22', '22.jpg', 5600.00),
(23, 'Item 23', '23.jpg', 4000.00),
(24, 'Item 24', '24.jpg', 5000.00),
(25, 'Item 25', '25.jpg', 8900.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `email`, `contact`, `password`) VALUES
(72, 'Prag', 'Mohan', 'Prag', 'pragyandeep.2013@gmail.com', '9861957292', 'hae'),
(73, 'Asp', 'Bot', 'Job', 'pragyandeep.2012@gmail.com', '9876543210', '691dc12eef17f019e2196c4516fc7ddbe60a072e'),
(76, 'Pag', 'Mahoon', 'Paggie', 'pragyandeepmohanty@gmail.com', '9876543210', 'ba81b8776add3f3af496fa652f91f4e5'),
(77, 'Suvendu', 'Sahoo', 'Chiku', 'sahoosuvendu93@gmail.com', '7978301241', '9c155b1c5e5ca5276d26aa8a79506c59'),
(78, 'Suvendu', 'Sahoo', 'Chiku0', 'suvendus@okcl.org', '7978301241', '4eeec8bb432efd137673d28c8807abbd'),
(79, 'Asit', 'Das', 'Asit', 'mrasitdas1@gmail.com', '9853009147', '786b5549a73d658e96981d90cb67e022'),
(80, 'Bhabani', 'Sahoo', 'Bhabani', 'dpuexpressmyself@gmail.com', '9090469292', '4b2d6ac1913d703658fbf82cf7cc9369'),
(81, 'Bhagirathi', 'Rout', 'Bhagii', 'bhagirathirout8525@gmail.com', '9938438525', '988c9f9cd5957329269911a51252336f'),
(82, 'Collin', 'Matthew', 'Cherian', 'cheriancolin@gmail.com', '9830658665', '1808c72bc6019f6b03d354c5f09d954e'),
(83, 'Neha', 'Mishra', 'Neha', 'nehakumarimishra4264@gmail.com', '6297640551', 'c824db375e9c05b2e4842cc338925f71'),
(84, 'Rajesh', 'Jain', 'Manoranjan', 'a1.914182766.1a.ceo@a1.net', '8055603022', '3cd4f00cd1faee26456c6556c5059dc2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `award_bid`
--
ALTER TABLE `award_bid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bid`
--
ALTER TABLE `bid`
  ADD PRIMARY KEY (`int`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`),
  ADD KEY `FOREIGN KEY` (`user_email`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_posting`
--
ALTER TABLE `job_posting`
  ADD PRIMARY KEY (`project_id`),
  ADD UNIQUE KEY `project_title` (`project_title`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_bidding`
--
ALTER TABLE `project_bidding`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Employer` (`employer`),
  ADD KEY `FOREIGN KEY` (`project_title`);

--
-- Indexes for table `pwdreset`
--
ALTER TABLE `pwdreset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pwdreset`
--
ALTER TABLE `pwdreset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `project_bidding`
--
ALTER TABLE `project_bidding`
  ADD CONSTRAINT `FOREIGN KEY` FOREIGN KEY (`project_title`) REFERENCES `job_posting` (`project_title`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
