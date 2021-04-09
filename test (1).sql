-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2021 at 11:57 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `mode` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `mode`, `image`) VALUES
(2, 'Tháp truyền hình', 'Gọi là “hiếm” vì dù được nhiều người biết đến nhưng vì nhiều lý do, không nhiều người checkin những địa danh này. Có thể kể đến những cái tên như: Tháp truyền hình, Chùa địa ngục, Suối con cò, Tam Đảo 2…\r\n\r\nNhững khu vực này hoang sơ hơn khác vùng khác, nhưng cũng chính vì thế chúng đẹp một cách rất tự nhiên và hùng vĩ. Cũng vì nằm ở địa thế cao hơn và khó di chuyển nên những nơi này chỉ dành cho những bạn thực sự ưa khám phá, tất nhiên cũng cần có một chút can đảm.\r\n\r\nTháp truyền hình Tam Đảo muốn đến phải qua 1394 bậc đá, rêu phong. Đường tuy không khó đi như Yên Tử nhưng xung quanh là rừng già, cảm giác đó sẽ thử thách bất kì ai ở lòng dũng cảm và khát khao khám phá. Bạn cũng có thể bắt gặp chim thú nhỏ xuất hiện hay những khung cảnh hòa hợp giữa ánh sáng và rừng xanh rất thú vị.', 'public', '55435.jpg'),
(3, 'Quán Gió', 'Tam Đảo là điểm đến quen thuộc, ngay gần Hà Nội mà các phượt thủ thường lui tới. Người ta lên Tam Đảo để nghỉ ngơi, thư giãn, tận hưởng chút không khí mát mẻ, trong lành. Vào mùa hè, Tam Đảo trở thành nơi tránh nóng lý tưởng cho các bạn trẻ.\r\n\r\nĐến Tam Đảo, du khách nhất định phải tham quan tháp truyền hình nằm trên đỉnh Thiên Thị ở độ cao 1375m, đền Bà Chúa Thượng Ngàn, thác Bạc, đỉnh Rùng Rình, nhà thờ cổ Tam Đảo... Trong số những điểm đến đó, Quán Gió nổi lên là một điểm check in không thể bỏ qua của giới trẻ.\r\n\r\nQuán Gió tuy mới đi vào hoạt động được hơn một năm nhưng đã nhanh chóng trở thành nơi yêu thích của dân du lịch khi đến với Tam Đảo.', 'public', 'quangio.jpg'),
(4, 'Thác Bạc', 'Thác Bạc Tam Đảo là một địa danh nằm trong lòng thị trấn Tam Đảo. Đây được xem là một thác nước có vẻ đẹp vùng vĩ, nước chảy từ các khe núi cao hội tự tại một nơi rồi chảy ào ào xuống tạo ra âm thanh vui nhộn. Những ngày hè oi bức, không chỉ khách du lịch mà người dân bản địa cũng quy tụ về dòng thác này.', 'public', 'thacbac.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `image`) VALUES
(7, 'dong13', 'donglee123321@gmail.com', '202cb962ac59075b964b07152d234b70', '2.jpg'),
(12, 'dong', 'dong@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '55435.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
