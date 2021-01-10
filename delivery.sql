-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 10, 2021 lúc 06:23 PM
-- Phiên bản máy phục vụ: 10.4.16-MariaDB
-- Phiên bản PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `delivery`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `idSender` int(11) NOT NULL,
  `receiverAddress` varchar(255) NOT NULL,
  `distance` double NOT NULL,
  `weight` double NOT NULL,
  `fee` double NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`id`, `idSender`, `receiverAddress`, `distance`, `weight`, `fee`, `status`) VALUES
(3, 1, 'Ngõ 406 - Nguyễn Văn Trỗi, Hà Đông hà Nội', 23.33, 45.5, 50002, 'Đang lấy hàng'),
(5, 2, 'Ngõ 406 - Xuân Phương', 23, 45.5, 50044, 'Đang lấy hàng'),
(6, 2, 'Hà Nội, Việt Nam', 12, 32, 45555, 'Đang lấy hàng'),
(7, 2, 'Ngõ 406 - Xuân Phương', 23, 45, 5000, 'Đang lấy hàng'),
(8, 4, 'Ngõ 406 - Xuân Linh', 23, 32, 50044, 'Đang lấy hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phoneNumber` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `address`, `phoneNumber`, `role`) VALUES
(1, 'Nguyễn Ngọc Đức', 'admin@delivery.com', 'admin', 'Ngõ 406 - Nguyễn Thùy Linh', '0961465453', 'admin'),
(2, 'Nguyễn Ngọc Đức', 'nguyenngocduccl@gmail.com', 'ngocduc0406', 'Ngõ 406 - Xuân Phương', '0961465453', 'shipper'),
(3, 'Cốm', 'com@gmail.com', 'ngocduc0406', 'Ngõ 406 - Xuân Phương', '0961465453', 'shipper'),
(4, 'Cốm 2', 'comcom@gmail.com', 'ngocduc0406', 'Ngõ 406 - Xuân Phương', '0961465453', 'customer');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idSender` (`idSender`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`idSender`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
