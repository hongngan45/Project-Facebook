-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 16, 2022 lúc 12:15 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `1951060885_facebook`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin_info`
--

CREATE TABLE `admin_info` (
  `Username` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `admin_info`
--

INSERT INTO `admin_info` (`Username`, `Password`) VALUES
('98d34c1758b15b5a359b69c2b08c5767', '98d34c1758b15b5a359b69c2b08c5767');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `group_chat`
--

CREATE TABLE `group_chat` (
  `chat_id` int(10) NOT NULL,
  `user_id` int(7) NOT NULL,
  `chat_txt` text NOT NULL,
  `time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `group_chat`
--

INSERT INTO `group_chat` (`chat_id`, `user_id`, `chat_txt`, `time`) VALUES
(3, 26, 'Hom nay cau sao roi', '16-1-2022 1:42'),
(4, 26, 'toi on ', '16-1-2022 1:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `user_id` int(7) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Birthday_Date` varchar(11) NOT NULL,
  `FB_Join_Date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`user_id`, `Name`, `Email`, `Password`, `Gender`, `Birthday_Date`, `FB_Join_Date`) VALUES
(25, 'hong ngan', 'hongnganmayman@gmail.com', '123456', 'Female', '17-9-1987', '10-1-2022 21:26'),
(26, 'Lan anh', 'hongngantuyetvoi@gmail.com', '123456', 'Male', '11-7-1985', '12-1-2022 17:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users_notice`
--

CREATE TABLE `users_notice` (
  `notice_id` int(7) NOT NULL,
  `user_id` int(7) NOT NULL,
  `notice_txt` varchar(120) NOT NULL,
  `notice_time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_cover_pic`
--

CREATE TABLE `user_cover_pic` (
  `cover_id` int(7) NOT NULL,
  `user_id` int(7) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `user_cover_pic`
--

INSERT INTO `user_cover_pic` (`cover_id`, `user_id`, `image`) VALUES
(23, 25, '47f686ecd833a6555478841145dc213a.jpg'),
(24, 26, '47f686ecd833a6555478841145dc213a.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(7) NOT NULL,
  `job` varchar(100) NOT NULL,
  `school_or_collage` varchar(100) NOT NULL,
  `current_city` varchar(100) NOT NULL,
  `hometown` varchar(100) NOT NULL,
  `relationship_status` varchar(30) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `mobile_no_priority` varchar(10) NOT NULL,
  `website` varchar(100) NOT NULL,
  `Facebook_ID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `user_info`
--

INSERT INTO `user_info` (`user_id`, `job`, `school_or_collage`, `current_city`, `hometown`, `relationship_status`, `mobile_no`, `mobile_no_priority`, `website`, `Facebook_ID`) VALUES
(25, '', '', '', '', '', '', '', '', ''),
(26, 'Hoc sinh', 'Dai hoc thuy loi', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_post`
--

CREATE TABLE `user_post` (
  `post_id` int(7) NOT NULL,
  `user_id` int(7) NOT NULL,
  `post_txt` text NOT NULL,
  `post_pic` varchar(150) NOT NULL,
  `post_time` varchar(30) NOT NULL,
  `priority` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `user_post`
--

INSERT INTO `user_post` (`post_id`, `user_id`, `post_txt`, `post_pic`, `post_time`, `priority`) VALUES
(79, 25, 'Join Faceback', '', '10-1-2022 21:26', 'Public'),
(80, 25, 'dgdf', '', '10-1-2022 21:57', 'Public'),
(82, 25, 'added a new photo.', '809de52cba7d26623d2f3ba4298da4ac.jpg', '11-1-2022 18:34', 'Public'),
(83, 26, 'Join Faceback', '', '12-1-2022 17:43', 'Public'),
(84, 26, 'added a new photo.', '665a391c1b6c0bfb1800405a44c6da1f.jpg', '14-1-2022 17:21', 'Public'),
(85, 26, 'added a new photo.', '7ee0e5c76fc55aab98beff1238a3d68b.jpg', '14-1-2022 20:50', 'Public'),
(86, 26, 'added a new photo.', 'b6ccbd635fbc48e75e28fccedecb1393.jpg', '15-1-2022 0:4', 'Public'),
(87, 26, 'hom nay toi bi diem kem', '', '15-1-2022 0:52', 'Private'),
(88, 26, 'dep', '7ee0e5c76fc55aab98beff1238a3d68b.jpg', '16-1-2022 0:53', 'Public');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_post_comment`
--

CREATE TABLE `user_post_comment` (
  `comment_id` int(7) NOT NULL,
  `post_id` int(7) NOT NULL,
  `user_id` int(7) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `user_post_comment`
--

INSERT INTO `user_post_comment` (`comment_id`, `post_id`, `user_id`, `comment`) VALUES
(3, 82, 25, 'xinh quas'),
(4, 85, 26, 'hkjhlk'),
(6, 86, 26, 'dep tuyet voi'),
(7, 82, 26, 'uayy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_post_status`
--

CREATE TABLE `user_post_status` (
  `status_id` int(7) NOT NULL,
  `post_id` int(7) NOT NULL,
  `user_id` int(7) NOT NULL,
  `status` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `user_post_status`
--

INSERT INTO `user_post_status` (`status_id`, `post_id`, `user_id`, `status`) VALUES
(31, 82, 25, 'Like'),
(32, 80, 25, 'Like'),
(33, 79, 25, 'Like'),
(34, 82, 26, 'Like'),
(35, 80, 26, 'Like'),
(36, 79, 26, 'Like'),
(37, 83, 26, 'Like'),
(38, 84, 26, 'Like'),
(39, 85, 26, 'Like'),
(43, 86, 26, 'Like'),
(44, 87, 26, 'Like'),
(45, 86, 25, 'Like'),
(46, 85, 25, 'Like'),
(47, 84, 25, 'Like'),
(48, 83, 25, 'Like'),
(49, 88, 26, 'Like');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_profile_pic`
--

CREATE TABLE `user_profile_pic` (
  `profile_id` int(7) NOT NULL,
  `user_id` int(7) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `user_profile_pic`
--

INSERT INTO `user_profile_pic` (`profile_id`, `user_id`, `image`) VALUES
(22, 25, '5cfe362c43fc3cc543a3437964cbe800.jpg'),
(23, 26, '47f686ecd833a6555478841145dc213a.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_secret_quotes`
--

CREATE TABLE `user_secret_quotes` (
  `user_id` int(7) NOT NULL,
  `Question1` varchar(50) NOT NULL,
  `Answer1` varchar(20) NOT NULL,
  `Question2` varchar(50) NOT NULL,
  `Answer2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `user_secret_quotes`
--

INSERT INTO `user_secret_quotes` (`user_id`, `Question1`, `Answer1`, `Question2`, `Answer2`) VALUES
(25, 'what is the first name of your favorite uncle?', 'Lenh', 'what was the last name of your first boss?', 'hanhh'),
(26, 'what is the first name of your oldest nephew?', 'winjoi', 'what is the name of your favorite sports team?', 'jinmi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_status`
--

CREATE TABLE `user_status` (
  `user_id` int(7) NOT NULL,
  `status` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `user_status`
--

INSERT INTO `user_status` (`user_id`, `status`) VALUES
(25, 'Offline'),
(26, 'Online');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_warning`
--

CREATE TABLE `user_warning` (
  `user_id` int(7) NOT NULL,
  `warning_txt` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `group_chat`
--
ALTER TABLE `group_chat`
  ADD PRIMARY KEY (`chat_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Chỉ mục cho bảng `users_notice`
--
ALTER TABLE `users_notice`
  ADD PRIMARY KEY (`notice_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `user_cover_pic`
--
ALTER TABLE `user_cover_pic`
  ADD PRIMARY KEY (`cover_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `user_info`
--
ALTER TABLE `user_info`
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `user_post`
--
ALTER TABLE `user_post`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `user_post_comment`
--
ALTER TABLE `user_post_comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Chỉ mục cho bảng `user_post_status`
--
ALTER TABLE `user_post_status`
  ADD PRIMARY KEY (`status_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `user_profile_pic`
--
ALTER TABLE `user_profile_pic`
  ADD PRIMARY KEY (`profile_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `user_secret_quotes`
--
ALTER TABLE `user_secret_quotes`
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `user_status`
--
ALTER TABLE `user_status`
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `user_warning`
--
ALTER TABLE `user_warning`
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `group_chat`
--
ALTER TABLE `group_chat`
  MODIFY `chat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `users_notice`
--
ALTER TABLE `users_notice`
  MODIFY `notice_id` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `user_cover_pic`
--
ALTER TABLE `user_cover_pic`
  MODIFY `cover_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `user_post`
--
ALTER TABLE `user_post`
  MODIFY `post_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT cho bảng `user_post_comment`
--
ALTER TABLE `user_post_comment`
  MODIFY `comment_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `user_post_status`
--
ALTER TABLE `user_post_status`
  MODIFY `status_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT cho bảng `user_profile_pic`
--
ALTER TABLE `user_profile_pic`
  MODIFY `profile_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `group_chat`
--
ALTER TABLE `group_chat`
  ADD CONSTRAINT `group_chat_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `users_notice`
--
ALTER TABLE `users_notice`
  ADD CONSTRAINT `users_notice_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `user_cover_pic`
--
ALTER TABLE `user_cover_pic`
  ADD CONSTRAINT `user_cover_pic_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `user_info`
--
ALTER TABLE `user_info`
  ADD CONSTRAINT `user_info_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `user_post`
--
ALTER TABLE `user_post`
  ADD CONSTRAINT `user_post_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `user_post_comment`
--
ALTER TABLE `user_post_comment`
  ADD CONSTRAINT `user_post_comment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_post_comment_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `user_post` (`post_id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `user_post_status`
--
ALTER TABLE `user_post_status`
  ADD CONSTRAINT `user_post_status_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_post_status_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user_post` (`user_id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `user_profile_pic`
--
ALTER TABLE `user_profile_pic`
  ADD CONSTRAINT `user_profile_pic_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `user_secret_quotes`
--
ALTER TABLE `user_secret_quotes`
  ADD CONSTRAINT `user_secret_quotes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `user_status`
--
ALTER TABLE `user_status`
  ADD CONSTRAINT `user_status_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_status_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `user_warning`
--
ALTER TABLE `user_warning`
  ADD CONSTRAINT `user_warning_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
