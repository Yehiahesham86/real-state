-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2022 at 06:54 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sellhouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aname` varchar(1000) NOT NULL,
  `aid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(11) NOT NULL,
  `messages` varchar(255) NOT NULL,
  `response` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`id`, `messages`, `response`) VALUES
(1, 'hi', 'hi there how can i help you'),
(4, 'i want to buy \r\nbuying \r\nbuy a property \r\nbuy house \r\n', '<a href=\"../Userservice/buy.php\" target=\"_blank\">buy</a>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `fav`
--

CREATE TABLE `fav` (
  `userid` int(11) NOT NULL,
  `houseid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fav`
--

INSERT INTO `fav` (`userid`, `houseid`) VALUES
(21, 106),
(21, 104),
(1, 103),
(1, 104);

-- --------------------------------------------------------

--
-- Table structure for table `house`
--

CREATE TABLE `house` (
  `houseid` int(100) NOT NULL,
  `userid` int(100) NOT NULL,
  `disc` varchar(10000) NOT NULL,
  `city` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `price` int(100) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `area` int(5) NOT NULL,
  `bed` int(3) NOT NULL,
  `bath` int(3) NOT NULL,
  `type` varchar(15) NOT NULL,
  `ikey` int(10) NOT NULL,
  `status` varchar(50) NOT NULL,
  `near` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `house`
--

INSERT INTO `house` (`houseid`, `userid`, `disc`, `city`, `street`, `phone`, `price`, `title`, `area`, `bed`, `bath`, `type`, `ikey`, `status`, `near`) VALUES
(103, 1, '\r\nشقة 191 متر  \r\nمنهم غرفة ماستر بحمام و دريسينج\r\n  ◾️  3غرف\r\n◾️  ريسبشين\r\n◾️ مطبخ \r\n◾️ ٣ حمام\r\n⬇️\r\nالسعر الاجمالي للوحدة\r\n2,800,000 كاش\r\n⬇️ ⬇️⬇️⬇️⬇️⬇️\r\n191 متر view pool \r\n3,200,000 كاش\r\n⬇️\r\nاستلام فوري السعر شامل التشطيب ( التشطيب علي زوق -العميل )\r\n- الجراج)\r\n(الكلوب هاوس \r\n\r\nالكمبوند ساكن بالفعل و كامل جميع المرافق و الخدمات\r\n', 'Sheikh Zayed City', 'El-Salam', '0100065450', 2800000, 'Apartments for sale', 191, 3, 3, 'flat', 674, 'Sell', 'none'),
(104, 1, 'دوبلكس 211 متر 🏘\r\n+ 55 متر جاردن \r\n\r\n◾️ ٣ غرف  \r\nمنهم غرفة ماستر بحمام و دريسينج\r\n◾️  ريسبشين\r\n◾️ مطبخ \r\n◾️ ٣ حمام\r\n⬇️\r\nالسعر الاجمالي \r\n3,600,000\r\nكاش\r\nاستلام فوري السعر شامل التشطيب ( التشطيب علي زوق -العميل )\r\n- الجراج\r\n-الكلوب هاوس\r\n', 'Sheikh Zayed City', 'El-Salam', '01156870430', 3600000, 'Doublex for sale', 211, 3, 3, 'doblux', 187, 'Sell', 'none'),
(105, 1, 'شقة 186 متر 🏠\r\n◾️ ٣ غرف  \r\nمنهم غرفة ماستر بحمام و دريسينج\r\n◾️  ريسبشين\r\n◾️ مطبخ \r\n◾️ ٣ حمام\r\n⬇️\r\nالسعر الاجمالي \r\n2,500,000 كاش\r\n⬇️\r\nاستلام فوري السعر شامل التشطيب ( التشطيب علي زوق -العميل )\r\n- الجراج\r\n-الكلوب هاوس \r\n\r\n\r\nالكمبوند ساكن بالفعل و كامل جميع المرافق و الخدمات.\r\n', 'Sheikh Zayed City', 'El-Salam', '01150548599', 2500000, 'Apartments for sale', 186, 3, 3, 'flat', 747, 'Sell', 'none'),
(106, 1, 'شقة 186 متر 🏠\r\n◾️ ٣ غرف  \r\nمنهم غرفة ماستر بحمام و دريسينج\r\n◾️  ريسبشين\r\n◾️ مطبخ \r\n◾️ ٣ حمام\r\n⬇️\r\nالسعر الاجمالي \r\n2,500,000 كاش\r\n⬇️\r\nاستلام فوري السعر شامل التشطيب ( التشطيب علي زوق -العميل )\r\n- الجراج\r\n-الكلوب هاوس \r\n\r\n\r\nالكمبوند ساكن بالفعل و كامل جميع المرافق و الخدمات.\r\n', 'Sheikh Zayed City', 'El-Salam', '01093138080', 2500000, 'Apartments for sale', 186, 3, 3, 'flat', 237, 'Sell', 'none'),
(107, 21, ';uoififliufliyf.y', 'ميت عقبه', 'محمدموافي', '01156870430', 1000, 'شقه للايجار', 110, 5, 1, 'flat', 319, 'Sell', 'جامعة القاهرة');

-- --------------------------------------------------------

--
-- Table structure for table `multiple-images`
--

CREATE TABLE `multiple-images` (
  `image_id` int(11) NOT NULL,
  `image_name` varchar(100) NOT NULL,
  `image_status` varchar(20) NOT NULL DEFAULT 'Enable',
  `image_createtime` datetime NOT NULL,
  `userid` int(255) NOT NULL,
  `ikey` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `multiple-images`
--

INSERT INTO `multiple-images` (`image_id`, `image_name`, `image_status`, `image_createtime`, `userid`, `ikey`) VALUES
(152, 'IMG-20220702-WA0045.jpg', 'Enable', '2022-07-02 07:01:58', 1, 674),
(153, 'IMG-20220702-WA0036.jpg', 'Enable', '2022-07-02 07:01:58', 1, 674),
(154, 'IMG-20220702-WA0038.jpg', 'Enable', '2022-07-02 07:01:58', 1, 674),
(155, 'IMG-20220702-WA0039.jpg', 'Enable', '2022-07-02 07:01:58', 1, 674),
(156, 'IMG-20220702-WA0040.jpg', 'Enable', '2022-07-02 07:01:58', 1, 674),
(158, 'IMG-20220702-WA0043.jpg', 'Enable', '2022-07-02 07:01:58', 1, 674),
(159, 'IMG-20220702-WA0044.jpg', 'Enable', '2022-07-02 07:01:58', 1, 674),
(160, 'IMG-20220702-WA0045-1656781318.jpg', 'Enable', '2022-07-02 07:01:58', 1, 674),
(162, 'IMG-20220702-WA0047.jpg', 'Enable', '2022-07-02 07:01:58', 1, 674),
(163, 'IMG-20220702-WA0048.jpg', 'Enable', '2022-07-02 07:01:58', 1, 674),
(164, 'IMG-20220702-WA0049.jpg', 'Enable', '2022-07-02 07:01:58', 1, 674),
(165, 'IMG-20220702-WA0050.jpg', 'Enable', '2022-07-02 07:01:59', 1, 674),
(166, 'IMG-20220702-WA0051.jpg', 'Enable', '2022-07-02 07:01:59', 1, 674),
(167, 'IMG-20220702-WA0052.jpg', 'Enable', '2022-07-02 07:01:59', 1, 674),
(168, 'IMG-20220702-WA0053.jpg', 'Enable', '2022-07-02 07:01:59', 1, 674),
(169, 'IMG-20220702-WA0054.jpg', 'Enable', '2022-07-02 07:01:59', 1, 674),
(170, 'IMG-20220702-WA0055.jpg', 'Enable', '2022-07-02 07:01:59', 1, 674),
(171, 'IMG-20220702-WA0056.jpg', 'Enable', '2022-07-02 07:01:59', 1, 674),
(172, 'IMG-20220702-WA0031.jpg', 'Enable', '2022-07-02 07:30:44', 1, 187),
(173, 'IMG-20220702-WA0030.jpg', 'Enable', '2022-07-02 07:30:45', 1, 187),
(174, 'IMG-20220702-WA0031-1656783045.jpg', 'Enable', '2022-07-02 07:30:45', 1, 187),
(175, 'IMG-20220702-WA0032.jpg', 'Enable', '2022-07-02 07:30:45', 1, 187),
(176, 'IMG-20220702-WA0034.jpg', 'Enable', '2022-07-02 07:30:45', 1, 187),
(177, 'IMG-20220702-WA0035.jpg', 'Enable', '2022-07-02 07:30:45', 1, 187),
(178, 'IMG-20220702-WA0037.jpg', 'Enable', '2022-07-02 07:30:45', 1, 187),
(179, 'IMG-20220702-WA0023.jpg', 'Enable', '2022-07-02 07:34:29', 1, 747),
(180, 'IMG-20220702-WA0017.jpg', 'Enable', '2022-07-02 07:34:29', 1, 747),
(181, 'IMG-20220702-WA0018.jpg', 'Enable', '2022-07-02 07:34:29', 1, 747),
(182, 'IMG-20220702-WA0019.jpg', 'Enable', '2022-07-02 07:34:29', 1, 747),
(183, 'IMG-20220702-WA0020.jpg', 'Enable', '2022-07-02 07:34:29', 1, 747),
(184, 'IMG-20220702-WA0021.jpg', 'Enable', '2022-07-02 07:34:30', 1, 747),
(185, 'IMG-20220702-WA0022.jpg', 'Enable', '2022-07-02 07:34:30', 1, 747),
(186, 'IMG-20220702-WA0023-1656783270.jpg', 'Enable', '2022-07-02 07:34:30', 1, 747),
(187, 'IMG-20220702-WA0024.jpg', 'Enable', '2022-07-02 07:34:30', 1, 747),
(188, 'IMG-20220702-WA0025.jpg', 'Enable', '2022-07-02 07:34:30', 1, 747),
(189, 'IMG-20220702-WA0026.jpg', 'Enable', '2022-07-02 07:34:30', 1, 747),
(190, 'IMG-20220702-WA0027.jpg', 'Enable', '2022-07-02 07:34:30', 1, 747),
(191, 'IMG-20220702-WA0028.jpg', 'Enable', '2022-07-02 07:34:30', 1, 747),
(192, 'IMG-20220702-WA0029.jpg', 'Enable', '2022-07-02 07:34:30', 1, 747),
(193, 'IMG-20220702-WA0012.jpg', 'Enable', '2022-07-02 07:36:37', 1, 237),
(194, 'IMG-20220702-WA0007.jpg', 'Enable', '2022-07-02 07:36:37', 1, 237),
(195, 'IMG-20220702-WA0008.jpg', 'Enable', '2022-07-02 07:36:37', 1, 237),
(196, 'IMG-20220702-WA0009.jpg', 'Enable', '2022-07-02 07:36:37', 1, 237),
(197, 'IMG-20220702-WA0010.jpg', 'Enable', '2022-07-02 07:36:37', 1, 237),
(198, 'IMG-20220702-WA0011.jpg', 'Enable', '2022-07-02 07:36:37', 1, 237),
(199, 'IMG-20220702-WA0012-1656783398.jpg', 'Enable', '2022-07-02 07:36:38', 1, 237),
(200, 'IMG-20220702-WA0013.jpg', 'Enable', '2022-07-02 07:36:38', 1, 237),
(201, 'IMG-20220702-WA0014.jpg', 'Enable', '2022-07-02 07:36:38', 1, 237),
(202, 'IMG-20220702-WA0015.jpg', 'Enable', '2022-07-02 07:36:38', 1, 237),
(203, 'IMG-20220702-WA0016.jpg', 'Enable', '2022-07-02 07:36:38', 1, 237),
(204, 'Screenshot (1).png', 'Enable', '2022-08-04 11:00:07', 21, 319),
(205, 'Screenshot (7).png', 'Enable', '2022-08-04 11:00:07', 21, 319),
(206, 'Screenshot (8).png', 'Enable', '2022-08-04 11:00:07', 21, 319),
(207, 'Screenshot (9).png', 'Enable', '2022-08-04 11:00:07', 21, 319),
(208, 'Screenshot (10).png', 'Enable', '2022-08-04 11:00:07', 21, 319);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `e-mail` varchar(300) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` int(14) NOT NULL,
  `address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `fullname`, `username`, `e-mail`, `password`, `phone`, `address`) VALUES
(1, 'yehia hesham', 'yehia1', 'yehia@gmail.com', '123', 119884458, '23madd'),
(19, 'ahmed', 'ahmed1', 'hady@gmail.com', 'Hady1234', 1234567891, '23st'),
(20, 'yehia ahmed', 'yehia2', 'yehia2@gmail.com', '123', 119884458, '22stmaadi'),
(21, 'ahmed', 'hady1', 'hady@gmail.com', 'Hady1234', 1234567891, '23st');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fav`
--
ALTER TABLE `fav`
  ADD KEY `houseid` (`houseid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`houseid`),
  ADD UNIQUE KEY `ikey` (`ikey`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `multiple-images`
--
ALTER TABLE `multiple-images`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `ikey` (`ikey`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `house`
--
ALTER TABLE `house`
  MODIFY `houseid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `multiple-images`
--
ALTER TABLE `multiple-images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fav`
--
ALTER TABLE `fav`
  ADD CONSTRAINT `fav_ibfk_1` FOREIGN KEY (`houseid`) REFERENCES `house` (`houseid`),
  ADD CONSTRAINT `fav_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`);

--
-- Constraints for table `house`
--
ALTER TABLE `house`
  ADD CONSTRAINT `house_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `multiple-images`
--
ALTER TABLE `multiple-images`
  ADD CONSTRAINT `multiple-images_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`),
  ADD CONSTRAINT `multiple-images_ibfk_2` FOREIGN KEY (`ikey`) REFERENCES `house` (`ikey`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
