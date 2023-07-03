-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 06, 2022 lúc 11:05 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `project-beeta-store`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `tieu_de` varchar(255) NOT NULL,
  `hinh` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `id_bl` int(11) NOT NULL,
  `noi_dung` text NOT NULL,
  `id_nd` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `ngay_bl` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`id_bl`, `noi_dung`, `id_nd`, `id_sp`, `ngay_bl`) VALUES
(13, 'Balo nhẹ, gọn, đeo êm vai', 20, 23, '01/12/2022'),
(14, 'Áo đẹp', 20, 26, '01/12/2022'),
(15, 'Sản phẩm này xấu điên\r\n', 20, 21, '02/12/2022'),
(16, 'Áo này xấu điên \r\n', 20, 28, '03/12/2022');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ct_hoa_don`
--

CREATE TABLE `ct_hoa_don` (
  `id_hd` varchar(5) NOT NULL,
  `id_sp` varchar(6) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `don_gia` int(11) NOT NULL,
  `stt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `ct_hoa_don`
--

INSERT INTO `ct_hoa_don` (`id_hd`, `id_sp`, `so_luong`, `don_gia`, `stt`) VALUES
('47', '27', 1, 350000, 58),
('48', '23', 2, 300000, 59),
('49', '22', 2, 350000, 60),
('49', '19', 2, 100000, 61),
('50', '24', 2, 150000, 62),
('51', '15', 2, 120000, 63),
('51', '17', 1, 150000, 64),
('52', '20', 3, 150000, 65),
('53', '28', 2, 125000, 66),
('53', '23', 1, 300000, 67),
('54', '26', 1, 200000, 68),
('55', '28', 1, 125000, 69),
('56', '26', 1, 200000, 70),
('57', '31', 1, 150000, 71),
('58', '31', 1, 150000, 72),
('59', '28', 5, 125000, 73),
('60', '32', 2, 250000, 74),
('61', '32', 2, 250000, 75),
('62', '32', 2, 250000, 76),
('63', '32', 2, 250000, 77),
('64', '32', 2, 250000, 78),
('65', '32', 3, 250000, 79),
('66', '32', 3, 250000, 80);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_muc`
--

CREATE TABLE `danh_muc` (
  `id_dm` int(11) NOT NULL,
  `ten_dm` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danh_muc`
--

INSERT INTO `danh_muc` (`id_dm`, `ten_dm`) VALUES
(1, 'Phụ kiện'),
(2, 'Thời trang nữ'),
(3, 'Thời trang nam');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinh_mo_ta`
--

CREATE TABLE `hinh_mo_ta` (
  `id` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `hinh_mo_ta` varchar(300) NOT NULL,
  `ghi_chu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hinh_mo_ta`
--

INSERT INTO `hinh_mo_ta` (`id`, `id_sp`, `hinh_mo_ta`, `ghi_chu`) VALUES
(4, 32, 'apro201-1-270x350.jpg', ''),
(5, 32, 'apro1221-2-592x592.jpg', ''),
(6, 32, 'apro1231-2-90x90.jpg', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `id_hd` int(11) NOT NULL,
  `ngay_hd` date NOT NULL,
  `id_kh` varchar(5) NOT NULL,
  `gia_tien` double NOT NULL,
  `thanh_toan` varchar(100) NOT NULL DEFAULT 'Tiền mặt',
  `tinh_trang` int(11) NOT NULL DEFAULT 1 COMMENT '0. Đã thanh toán\r\n1. Chưa thanh toán\r\n2. Đơn hàng bị hủy',
  `id_nd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoa_don`
--

INSERT INTO `hoa_don` (`id_hd`, `ngay_hd`, `id_kh`, `gia_tien`, `thanh_toan`, `tinh_trang`, `id_nd`) VALUES
(47, '2022-10-30', '46', 350000, '1', 0, 20),
(48, '2022-10-29', '47', 600000, '1', 0, 20),
(49, '2022-09-30', '48', 900000, '1', 0, 20),
(50, '2022-11-30', '49', 300000, '1', 0, 20),
(51, '2022-11-30', '50', 390000, '1', 0, 20),
(52, '2022-10-30', '51', 450000, '1', 0, 20),
(53, '2022-12-01', '52', 550000, '1', 0, 20),
(54, '2022-12-02', '53', 200000, '1', 1, 20),
(55, '2022-12-02', '54', 125000, '1', 0, 20),
(56, '2022-12-03', '55', 200000, '1', 0, 20),
(59, '2022-12-05', '58', 625000, '1', 1, 20),
(64, '2022-12-06', '63', 500000, '1', 1, 20),
(65, '2022-12-06', '64', 750000, '1', 1, 20),
(66, '2022-12-06', '65', 750000, '1', 1, 20);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `id_kh` int(11) NOT NULL,
  `ten_kh` varchar(100) NOT NULL,
  `gioi_tinh` tinyint(1) NOT NULL,
  `ngay_sinh` date NOT NULL,
  `dia_chi` varchar(200) NOT NULL,
  `sdt` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ghi_chu` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`id_kh`, `ten_kh`, `gioi_tinh`, `ngay_sinh`, `dia_chi`, `sdt`, `email`, `ghi_chu`) VALUES
(46, 'Nguyễn Văn Tĩnh', 0, '2003-10-23', 'Trịnh Văn Bô - Hà Nội', '0383379990', 'tinh54040@gmail.com', 'Cần gấp'),
(47, 'Nguyễn Văn Tĩnh', 0, '2003-10-23', 'Hà Nội', '0333123123', 'tinh@gmail.com', ''),
(48, 'Nguyễn Văn Tĩnh', 0, '2003-10-23', 'Hải Dương', '0383379990', 'tinhhd@gmail.com', ''),
(49, 'Hoàng Thị B', 0, '2000-10-10', 'Nghệ An', '0363636363', 'hoangb@gmail.com', ''),
(50, 'Phạm Thị C', 1, '2001-10-20', 'Hà Nội', '0353839367', 'tinh54040@gmail.com', ''),
(51, 'Hoàng Anh D', 0, '2002-01-10', 'Hà Nội', '0965685789', 'hoangd@gmail.com', ''),
(52, 'Nguyễn Văn Tĩnh', 0, '2003-10-23', 'Hà Nội', '0383379990', 'tinh54040@gmail.com', ''),
(54, 'Nguyễn Văn Tĩnh', 0, '0000-00-00', '', '', 'tinh54040@gmail.com', ''),
(56, 'Nguyễn Văn Tĩnh', 0, '2003-10-23', '', '', 'tinh54040@gmail.com', ''),
(57, 'Nguyễn Văn Tĩnh', 0, '0000-00-00', '', '', 'tinh54040@gmail.com', ''),
(58, 'Nguyễn Văn Tĩnh', 0, '2003-10-23', 'Hà Nội', '0383379990', 'tinh54040@gmail.com', ''),
(59, 'Nguyễn Văn Tĩnh', 0, '2003-10-23', 'Hà Nội', '0383379990', 'tinhnvph20542@fpt.edu.vn', ''),
(60, 'Nguyễn Văn Tĩnh', 0, '2003-10-23', 'Hà Nội', '0383379990', 'tinhnvph20542@fpt.edu.vn', ''),
(61, 'Nguyễn Văn Tĩnh', 0, '2003-10-23', 'Hà Nội', '0383379990', 'tinhnvph20542@fpt.edu.vn', ''),
(62, 'Nguyễn Văn Tĩnh', 0, '2003-10-23', 'Hà Nội', '0383379990', 'tinh54040@gmail.com', ''),
(63, 'Nguyễn Văn Tĩnh', 0, '2003-10-23', 'HN', '0383379990', 'tinh54040@gmail.com', ''),
(64, 'Nguyễn Văn Tĩnh', 0, '2003-10-23', 'HN', '0383379990', 'tinhnvoh20542@fpt.edu.vn', ''),
(65, 'Nguyễn Văn Tĩnh', 0, '2003-10-23', 'HN', '0383379990', 'tinhnvph20542@fpt.edu.vn', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoi_dung`
--

CREATE TABLE `nguoi_dung` (
  `id_nd` int(11) NOT NULL,
  `id_vai_tro` tinyint(3) NOT NULL,
  `ho_ten` varchar(100) NOT NULL,
  `ten_dang_nhap` varchar(100) NOT NULL,
  `mat_khau` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `ngay_dang_ky` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nguoi_dung`
--

INSERT INTO `nguoi_dung` (`id_nd`, `id_vai_tro`, `ho_ten`, `ten_dang_nhap`, `mat_khau`, `email`, `ngay_dang_ky`) VALUES
(20, 1, 'Nguyễn Văn Tĩnh', 'Admin', '123', 'tinh54040@gmail.com', '2022-11-30'),
(21, 0, 'Nguyễn Văn Tĩnh', 'tinhx', '123', 'tinhnvph20542@fpt.edu.vn', '2022-11-30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `id_sp` int(11) NOT NULL,
  `ten_sp` varchar(100) NOT NULL,
  `mo_ta` text DEFAULT NULL,
  `don_gia` int(11) NOT NULL DEFAULT 0,
  `hinh` varchar(200) DEFAULT NULL,
  `san_pham_moi` tinyint(1) NOT NULL DEFAULT 0,
  `ngay_tao` date NOT NULL,
  `id_dm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`id_sp`, `ten_sp`, `mo_ta`, `don_gia`, `hinh`, `san_pham_moi`, `ngay_tao`, `id_dm`) VALUES
(15, 'Áo thun nữ', 'Áo thun nữ đen kết hợp chân váy', 120000, 'apro13-1-600x778.jpg', 0, '2022-11-30', 2),
(17, 'Áo sơ mi ', 'Áo sơ mi nữ đỏ phong cách thời trang', 150000, 'apro61-1-90x90.jpg', 0, '2022-11-30', 2),
(18, 'Áo hoddie', 'Áo hoddie nam phong cách trẻ trung, năng động', 250000, 'apro161-1-600x778.jpg', 0, '2022-11-30', 3),
(19, 'Kính mắt ', 'Kính mắt thời trang, chống tia UV', 100000, 'is_main12.jpg', 0, '2022-11-30', 1),
(20, 'Áo sơ mi nam', 'Áo sơ mi nam, phong cách trẻ trung, năng động', 150000, 'apro1211-2-600x778.jpg', 0, '2022-11-30', 3),
(21, 'Áo dài tay', 'Áo dài tay thu đông', 200000, 'apro1113-90x90.jpg', 0, '2022-11-30', 3),
(22, 'Giày sneaker', 'Giày sneaker nam, nữ MC phong cách thời trang', 350000, 'insta8.jpg', 0, '2022-11-30', 1),
(23, 'Balo', 'Balo thời trang, rộng rãi, êm, chống nước', 300000, 'cat3.jpg', 0, '2022-11-30', 1),
(24, 'Áo thun nữ', 'Áo thun nữ ôm sát', 150000, 'apro31-1-600x778.jpg', 0, '2022-11-30', 2),
(26, 'Áo sơ mi', 'Áo sơ mi nam, trẻ trung, phong cách', 200000, 'apro1221-2-592x592.jpg', 0, '2022-11-30', 3),
(27, 'Áo khoác ', 'Áo khoác gió ', 350000, 'apro191-1-270x350.jpg', 0, '2022-11-30', 3),
(28, 'Áo thun hở vai', 'Áo cho nữ', 125000, 'apro71-1-600x778.jpg', 0, '2022-12-01', 2),
(32, 'Áo sơ mi', 'Áo sơ mi nam', 250000, 'apro1211-2-90x90.jpg', 0, '2022-12-06', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vai_tro`
--

CREATE TABLE `vai_tro` (
  `id_vai_tro` tinyint(3) NOT NULL,
  `vai_tro` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `vai_tro`
--

INSERT INTO `vai_tro` (`id_vai_tro`, `vai_tro`) VALUES
(0, 'Khách hàng'),
(1, 'Admin');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`id_bl`);

--
-- Chỉ mục cho bảng `ct_hoa_don`
--
ALTER TABLE `ct_hoa_don`
  ADD PRIMARY KEY (`stt`);

--
-- Chỉ mục cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  ADD PRIMARY KEY (`id_dm`);

--
-- Chỉ mục cho bảng `hinh_mo_ta`
--
ALTER TABLE `hinh_mo_ta`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`id_hd`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`id_kh`);

--
-- Chỉ mục cho bảng `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  ADD PRIMARY KEY (`id_nd`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id_sp`);

--
-- Chỉ mục cho bảng `vai_tro`
--
ALTER TABLE `vai_tro`
  ADD PRIMARY KEY (`id_vai_tro`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `id_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `ct_hoa_don`
--
ALTER TABLE `ct_hoa_don`
  MODIFY `stt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  MODIFY `id_dm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `hinh_mo_ta`
--
ALTER TABLE `hinh_mo_ta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `id_hd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `id_kh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT cho bảng `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  MODIFY `id_nd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `vai_tro`
--
ALTER TABLE `vai_tro`
  MODIFY `id_vai_tro` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
