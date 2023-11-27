-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 27, 2023 at 11:06 PM
-- Server version: 8.0.30
-- PHP Version: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `avara_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int NOT NULL,
  `a_username` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `a_password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_username`, `a_password`) VALUES
(1, 'avara_administrator', '17ad1ffce7ac767d6617cb76bc4e3cce');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `c_id` int NOT NULL,
  `c_location` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `c_phone` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `c_email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`c_id`, `c_location`, `c_phone`, `c_email`) VALUES
(1, 'Əlövsət Quliyev 133, Bakı', '555-123-4567', 'info@avara.az');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `g_id` int NOT NULL,
  `g_img` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`g_id`, `g_img`) VALUES
(12, 'dae0b66704db6ce57717a98e20419581.jpg'),
(13, '807c82a0ec4d04d9d579757dce882103.jpg'),
(14, 'b06da8f749aa387d565ee89c46eddcbb.jpg'),
(15, 'ea175902f3690a6c9fccb5f5c1ec1a42.jpg'),
(16, '06175fbd9148ff1e479e1448772c779a.jpg'),
(17, '14905a410cbb85c0129cf8041717d163.jpg'),
(18, '7e0e0e06bb4a8085dd3380762f3dc253.jpg'),
(19, 'eddff670fa267c624d86618fdafdb198.jpg'),
(20, '7f2d2ea80021d0edda810c7665ad4c77.jpg'),
(21, 'fe59e5f8d9570319d4e1191aca9429b6.jpg'),
(22, 'a0296785a174e2a2146e6b65f5e21be7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `s_id` int NOT NULL,
  `s_img` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`s_id`, `s_img`) VALUES
(14, '2380441651caad70ec66d717fe37b45e.jpg'),
(15, 'a0025305a9abf5638bbd6c85c1cf232e.jpg'),
(16, '0ecf251b2f3fbc8ca67e3236ca6accf9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `statement`
--

CREATE TABLE `statement` (
  `s_id` int NOT NULL,
  `s_title` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `s_img` varchar(256) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `statement`
--

INSERT INTO `statement` (`s_id`, `s_title`, `s_img`) VALUES
(4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vulputate enim nulla aliquet porttitor lacus luctus accumsan. Pretium viverra suspendisse potenti nullam ac. Egestas erat imperdiet sed euismod. Fringilla urna porttitor rhoncus dolor purus non enim. Penatibus et magnis dis parturient montes nascetur ridiculus mus mauris. Posuere sollicitudin aliquam ultrices sagittis orci a scelerisque purus. Urna et pharetra pharetra massa massa ultricies mi. Amet massa vitae tortor condimentum lacinia quis vel eros donec. Ut venenatis tellus in metus vulputate eu scelerisque. Nunc mattis enim ut tellus. Nisi porta lorem mollis aliquam. Gravida quis blandit turpis cursus in hac habitasse. Risus in hendrerit gravida rutrum. Diam vulputate ut pharetra sit. Risus quis varius quam quisque.', '8014480bc25b55000a448a905286bf85.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `statement`
--
ALTER TABLE `statement`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `c_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `g_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `s_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `statement`
--
ALTER TABLE `statement`
  MODIFY `s_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
