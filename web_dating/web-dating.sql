-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th9 19, 2023 lúc 01:37 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web-dating`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chats`
--

CREATE TABLE `chats` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `send_time` datetime DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `date_events`
--

CREATE TABLE `date_events` (
  `id` int(11) NOT NULL,
  `creator_id` int(11) NOT NULL,
  `start_time` datetime DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `date_event_participants`
--

CREATE TABLE `date_event_participants` (
  `date_event_id` int(11) NOT NULL,
  `participant_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `matches`
--

CREATE TABLE `matches` (
  `id` int(11) NOT NULL,
  `user1_id` int(11) NOT NULL,
  `user2_id` int(11) NOT NULL,
  `connection_time` datetime DEFAULT NULL,
  `status` enum('Confirmed','Pending','Cancelled') DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `msg`
--

CREATE TABLE `msg` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `msg` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `msg`
--

INSERT INTO `msg` (`id`, `username`, `msg`) VALUES
(51, 'Trần Yến Ly', 'hello'),
(52, 'nguyễn thiện thắng', 'yêu bạn'),
(53, 'nguyễn thiện thắng', 'hello'),
(54, 'nguyễn thiện thắng', 'yêu bạn'),
(55, 'Trần Yến Ly', 'thương bạn'),
(56, 'nguyễn thiện thắng', 'mình cũng vậy'),
(57, 'Trần Yến Ly', 'hẹn hò đi'),
(58, 'Trần Yến Ly', 'ok'),
(59, 'Trần Yến Ly', 'mình rất quý bạn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `recipient_id` int(11) NOT NULL,
  `notification_type` enum('NewMessage','NewConnection','NewEvent') DEFAULT NULL,
  `content` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `birthdate` date DEFAULT NULL,
  `gender` enum('Nữ','Nam','Khác') DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `hobbies` text NOT NULL,
  `avatar` text DEFAULT NULL,
  `image_cover` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `birthdate`, `gender`, `location`, `hobbies`, `avatar`, `image_cover`, `created_at`) VALUES
(73, 'nguyễn thiện thắng', 'thangxpro999@gmail.com', '$2y$10$bHY5pVatOkWK.IXgcoSx1Oy80oFzd0LvY.LRhhk5aF47WkPqwy9HK', '2006-01-01', 'Nam', '', '', 'https://scontent.fhan4-1.fna.fbcdn.net/v/t39.30808-6/288833736_1442286016216316_5659101933587280407_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=a2f6c7&_nc_ohc=RxMAiWKXAZoAX-9yCsN&_nc_ht=scontent.fhan4-1.fna&oh=00_AfDLRQfETLuhkN80ob1sk-doS7CFC2w8WohbG3gooCg7cQ&oe=6505BCA2', 'https://scontent.xx.fbcdn.net/v/t1.18169-9/13813657_103662723411992_2956303452201271620_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=e3f864&_nc_ohc=QsHe1vZPQwYAX9Kmu-S&_nc_ht=scontent.fhan3-3.fna&oh=00_AfCMovZYIoK_55sdX5FGDTNovg8dzVHlYT482ENR-HPGPw&oe=6528DC49&_nc_fr=fhan3c03', '2023-09-11 07:42:27'),
(74, 'Trần Yến Ly', 'yenly@gmail.com', '$2y$10$WSEXeMEe0pTh/FWYZ4xOCurH4xT3jR08uvprw1W9M3uIRshHzjZyC', '2004-01-01', 'Nữ', '', '', 'https://www.dungplus.com/wp-content/uploads/2019/12/girl-xinh-1-480x600.jpg', 'https://haycafe.vn/wp-content/uploads/2022/03/Anh-suy-tu.jpg', '2023-09-12 10:47:48'),
(75, 'Nguyễn  Tấn', 'tan@gmail.com', '$2y$10$dLUhZyfGcAUk6Q.AUkmajupYMax96YNkxMJDYUVad.PUaDXio8QSu', '2005-01-01', 'Nam', NULL, '', NULL, '', '2023-09-13 03:51:14'),
(76, 'nguyễn thiện thắng', 'tann53796@gmail.com', '$2y$10$7jw3po1cBXc8RyRtQkSkZ.sjTrLpNOj0A7q4kVUJQLji.vfWI7bnG', '2004-01-01', 'Nam', NULL, '', NULL, '', '2023-09-14 20:03:53');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sender_id` (`sender_id`),
  ADD KEY `receiver_id` (`receiver_id`);

--
-- Chỉ mục cho bảng `date_events`
--
ALTER TABLE `date_events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `creator_id` (`creator_id`);

--
-- Chỉ mục cho bảng `date_event_participants`
--
ALTER TABLE `date_event_participants`
  ADD PRIMARY KEY (`date_event_id`,`participant_id`),
  ADD KEY `participant_id` (`participant_id`);

--
-- Chỉ mục cho bảng `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user1_id` (`user1_id`),
  ADD KEY `user2_id` (`user2_id`);

--
-- Chỉ mục cho bảng `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recipient_id` (`recipient_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`,`password`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chats`
--
ALTER TABLE `chats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `date_events`
--
ALTER TABLE `date_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `matches`
--
ALTER TABLE `matches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `msg`
--
ALTER TABLE `msg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT cho bảng `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chats`
--
ALTER TABLE `chats`
  ADD CONSTRAINT `chats_ibfk_1` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `chats_ibfk_2` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `date_events`
--
ALTER TABLE `date_events`
  ADD CONSTRAINT `date_events_ibfk_1` FOREIGN KEY (`creator_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `date_event_participants`
--
ALTER TABLE `date_event_participants`
  ADD CONSTRAINT `date_event_participants_ibfk_1` FOREIGN KEY (`date_event_id`) REFERENCES `date_events` (`id`),
  ADD CONSTRAINT `date_event_participants_ibfk_2` FOREIGN KEY (`participant_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `matches`
--
ALTER TABLE `matches`
  ADD CONSTRAINT `matches_ibfk_1` FOREIGN KEY (`user1_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `matches_ibfk_2` FOREIGN KEY (`user2_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`recipient_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
