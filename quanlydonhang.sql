-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 22, 2020 lúc 07:27 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlydonhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dondathang`
--

CREATE TABLE `dondathang` (
  `id` int(11) NOT NULL,
  `idkhachhang` int(11) DEFAULT NULL,
  `idnhanvien` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `amount` int(50) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dondathang`
--

INSERT INTO `dondathang` (`id`, `idkhachhang`, `idnhanvien`, `name`, `price`, `amount`, `status`, `date`, `address`) VALUES
(2, 6, 1, 'Bông tẩy trang', 20000, 1, 'Chờ lấy hàng', '2020-12-02', 'Hà Nội'),
(3, 7, 1, 'Kem dưỡng Laroche', 250000, 2, 'Chờ lấy hàng', '2020-12-01', 'Hà Nam'),
(4, 6, 1, 'Nước hoa hồng', 55000, 3, 'Chờ lấy hàng', '2020-12-01', 'Nam Định'),
(5, 4, 1, 'Tẩy da chết', 80000, 1, 'Chờ lấy hàng', '2020-12-02', 'Ninh Bình'),
(8, 5, 1, 'Sữa tắm Dove', 150000, 1, 'Chờ lấy hàng', '2020-12-10', 'Hà Nam'),
(9, 6, 1, 'Nước tẩy trang', 119000, 2, 'Chờ lấy hàng', '2020-12-01', 'Hà Nam'),
(10, 5, 1, 'Tẩy da chết', 80000, 1, 'Chờ lấy hàng', '2020-12-02', 'Nam Định'),
(11, 3, 1, 'Nước hoa hồng', 55000, 1, 'Chờ lấy hàng', '2020-12-05', 'Nam Định'),
(12, 7, 1, 'Kem dưỡng ẩm', 80000, 1, 'Chờ lấy hàng', '2020-12-01', 'Hà Nam'),
(13, 4, 1, 'Nước hoa hồng', 55000, 1, 'Chờ lấy hàng', '2020-12-01', 'Hà Nam'),
(14, 3, 1, 'Mascara', 118000, 2, 'Chờ lấy hàng', '2020-12-02', 'Hà Nội'),
(15, 3, 1, 'Tẩy da chết', 80000, 1, 'Chờ lấy hàng', '2020-12-05', 'Hà Nội'),
(16, 4, NULL, NULL, 816000, 7, 'Chờ xác nhận', '2020-12-21', 'Nam Định'),
(17, 4, NULL, 'Đơn 1', 274000, 3, 'Chờ xác nhận', '2020-12-21', 'Nam Định'),
(18, 4, NULL, '', 761800, 7, 'Chờ lấy hàng', '2020-12-21', 'Hà Nam'),
(19, 3, NULL, NULL, 226500, 2, 'Chờ lấy hàng', '2020-12-22', 'Hà Nam');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hangduocdat`
--

CREATE TABLE `hangduocdat` (
  `id` int(11) NOT NULL,
  `soluong` int(50) DEFAULT NULL,
  `idmathang` int(11) DEFAULT NULL,
  `iddondathang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hangduocdat`
--

INSERT INTO `hangduocdat` (`id`, `soluong`, `idmathang`, `iddondathang`) VALUES
(4, 2, 4, 3),
(6, 2, 3, 4),
(7, 6, 1, 10),
(8, 3, 2, 2),
(9, 4, 3, 3),
(10, 3, 12, 14),
(11, 5, 5, 12),
(12, 3, 17, 8),
(21, 3, 16, 16),
(22, 4, 17, 16),
(23, 1, 17, 17),
(24, 1, 16, 17),
(25, 1, 15, 17),
(26, 3, 17, 18),
(27, 2, 16, 18),
(28, 1, 15, 18),
(29, 1, 14, 18),
(30, 1, 16, 19),
(31, 1, 17, 19);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mathang`
--

CREATE TABLE `mathang` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `amount` int(50) DEFAULT NULL,
  `url_image` varchar(255) DEFAULT NULL,
  `New` int(50) DEFAULT NULL,
  `Hot` int(11) DEFAULT NULL,
  `Discount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `mathang`
--

INSERT INTO `mathang` (`id`, `name`, `price`, `amount`, `url_image`, `New`, `Hot`, `Discount`) VALUES
(1, 'Tẩy da chết', 80000, 100, 'https://cf.shopee.vn/file/03b89a6fda240a552c299b80bb119ded_tn', 1, 0, 0),
(2, 'Bông tẩy trang', 20000, 150, 'https://cf.shopee.vn/file/e0f6fc2138dc1476d9e1889d47f789c0_tn', 1, 0, 0),
(3, 'Kem dưỡng Laroche', 250000, 50, 'https://cf.shopee.vn/file/0ef39d2adc8013e0677e69a73dc3999c_tn', 0, 1, 0),
(4, 'Nước hoa hồng', 55000, 80, 'https://cf.shopee.vn/file/3cf85a538defd87b95862c67c6d73884_tn', 0, 1, 0),
(5, 'Kem dưỡng ẩm', 80000, 100, 'https://cf.shopee.vn/file/0f2be9b2f6c924d87acea53d278806ea_tn', 0, 1, 0),
(6, 'Sữa tắm senka', 110000, 50, 'https://cf.shopee.vn/file/c442384c284b5ca657399f44bab4e03e_tn', 0, 0, 50),
(7, 'Xịt khử mùi Enchanteur', 99000, 50, 'https://cf.shopee.vn/file/15eda506474726002c4ee6b928e3478c_tn', 0, 0, 5),
(8, 'Nước hoa cao Enchanteur', 145000, 30, 'https://cf.shopee.vn/file/ad9e0e734c7c70981e8a36509e297e59_tn', 0, 0, 15),
(9, 'Son Black Rouge', 180000, 30, 'https://cf.shopee.vn/file/15aa5a5302a0f8c1aaba69df92807680_tn', 1, 0, 0),
(10, 'White Perfect', 79000, 60, 'https://cf.shopee.vn/file/03ac4c85dc532a65c4dfe5de658d44d3_tn', 0, 0, 0),
(11, 'Nước tẩy trang', 119000, 25, 'https://cf.shopee.vn/file/35cdda3966f40f88f5c0b85f90f36034_tn', 1, 0, 0),
(12, 'Mascara', 118000, 30, 'https://cf.shopee.vn/file/a6c6da28d03e01a1a539bae205ac2228_tn', 0, 1, 0),
(13, 'Sữa dưỡng thể trắng da Vaseline', 105000, 20, 'https://cf.shopee.vn/file/d84b462f35da2c329f4a936c3d07251b_tn', 0, 0, 20),
(14, 'Dầu gội Treserme', 156000, 30, 'https://cf.shopee.vn/file/4b7bab4338d0bb63518735ea7396302d', 0, 0, 20),
(15, 'Kem khử mùi Dove', 50000, 20, 'https://cf.shopee.vn/file/c11b8052b101b0547bbd7675c00d0208_tn', 0, 0, 5),
(16, 'Sữa tắm Hazeline', 100000, 25, 'https://cf.shopee.vn/file/28e2da5d26af3b8aa4803157c28ef8ed_tn', 0, 0, 10),
(17, 'Sữa tắm Dove', 150000, 10, 'https://cf.shopee.vn/file/5121efc5ade7846c5392a35365094989_tn', 0, 0, 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `sdt` int(11) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`id`, `username`, `password`, `role`, `fullname`, `sdt`, `address`) VALUES
(1, 'admin', '12345', 'admin', 'Lê Thị Ngân', 327877482, 'Hà Nam'),
(3, 'quy', '12345', 'khachhang', 'Lê Quy', 357838993, 'Hà Nam'),
(4, 'cuoc', '12345', 'khachhang', 'Phạm Minh Quốc', 327877483, 'Nam Định'),
(5, 'thuy', '12345', 'khachhang', 'Trần Thị Thu Thủy', 327877485, 'Nam Định'),
(6, 'hanh', '12345', 'khachhang', 'Hoàng Thị Hạnh', 327877486, 'Hà Nam'),
(7, 'phuong', '12345', 'khachhang', 'Bùi Bích Phương', 327877487, 'Thái Binh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trangthai`
--

CREATE TABLE `trangthai` (
  `id` int(11) NOT NULL,
  `trangthai` varchar(50) NOT NULL,
  `iddondathang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `trangthai`
--

INSERT INTO `trangthai` (`id`, `trangthai`, `iddondathang`) VALUES
(2, 'chờ lấy hàng', 2),
(3, 'Đang giao', 2),
(4, 'chờ lấy hàng', 4);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dondathang`
--
ALTER TABLE `dondathang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idkhachhang` (`idkhachhang`),
  ADD KEY `idnhanvien` (`idnhanvien`);

--
-- Chỉ mục cho bảng `hangduocdat`
--
ALTER TABLE `hangduocdat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iddondathang` (`iddondathang`),
  ADD KEY `idmathang` (`idmathang`);

--
-- Chỉ mục cho bảng `mathang`
--
ALTER TABLE `mathang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `trangthai`
--
ALTER TABLE `trangthai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iddonhang` (`iddondathang`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dondathang`
--
ALTER TABLE `dondathang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `hangduocdat`
--
ALTER TABLE `hangduocdat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `mathang`
--
ALTER TABLE `mathang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `trangthai`
--
ALTER TABLE `trangthai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `dondathang`
--
ALTER TABLE `dondathang`
  ADD CONSTRAINT `idkhachhang` FOREIGN KEY (`idkhachhang`) REFERENCES `nguoidung` (`id`),
  ADD CONSTRAINT `idnhanvien` FOREIGN KEY (`idnhanvien`) REFERENCES `nguoidung` (`id`);

--
-- Các ràng buộc cho bảng `hangduocdat`
--
ALTER TABLE `hangduocdat`
  ADD CONSTRAINT `iddondathang` FOREIGN KEY (`iddondathang`) REFERENCES `dondathang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idmathang` FOREIGN KEY (`idmathang`) REFERENCES `mathang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `trangthai`
--
ALTER TABLE `trangthai`
  ADD CONSTRAINT `iddonhang` FOREIGN KEY (`iddondathang`) REFERENCES `dondathang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
