-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 20, 2024 lúc 05:42 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_duan1_nhom7`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `id_binh_luan` int(10) NOT NULL,
  `noi_dung` text NOT NULL,
  `id_nguoi_dung` int(10) NOT NULL,
  `id_tuor` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc_mien`
--

CREATE TABLE `danhmuc_mien` (
  `id_mien` int(10) NOT NULL,
  `ten_mien` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc_mien`
--

INSERT INTO `danhmuc_mien` (`id_mien`, `ten_mien`) VALUES
(1, 'Miền Bắc'),
(2, 'Miền Trung'),
(5, 'Miền Nam ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc_mua`
--

CREATE TABLE `danhmuc_mua` (
  `id_mua` int(10) NOT NULL,
  `ten_mua` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc_mua`
--

INSERT INTO `danhmuc_mua` (`id_mua`, `ten_mua`) VALUES
(7, 'Mùa xuân'),
(8, 'Mùa thu'),
(11, 'Mùa đông '),
(16, 'Mùa hè');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang_tuor`
--

CREATE TABLE `hang_tuor` (
  `id_hang_tuor` int(10) NOT NULL,
  `ten_hang_tuor` varchar(255) NOT NULL,
  `muc_tang` decimal(10,2) NOT NULL,
  `id_tuor` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinh_anh`
--

CREATE TABLE `hinh_anh` (
  `id_hinh_anh` int(10) NOT NULL,
  `ten_hinh_anh` varchar(255) DEFAULT NULL,
  `id_tour` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ngay_xuat_phat`
--

CREATE TABLE `ngay_xuat_phat` (
  `id_ngay` int(10) NOT NULL,
  `ngay` varchar(100) NOT NULL,
  `id_tour` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoi_dung`
--

CREATE TABLE `nguoi_dung` (
  `id_nguoi_dung` int(10) NOT NULL,
  `ho_ten` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `so_dien_thoai` int(100) NOT NULL,
  `dia_chi` text NOT NULL,
  `anh_dai_dien` varchar(255) DEFAULT NULL,
  `mat_khau` text NOT NULL,
  `vai_tro` int(1) NOT NULL COMMENT '0:người dùng\r\n1:admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thoi_gian`
--

CREATE TABLE `thoi_gian` (
  `id_thoi_gian` int(10) NOT NULL,
  `so_ngay` int(10) NOT NULL,
  `so_dem` int(10) NOT NULL,
  `muc_tang` decimal(10,2) NOT NULL,
  `id_tuor` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tuor`
--

CREATE TABLE `tuor` (
  `id_tuor` int(10) NOT NULL,
  `ten_tuor` varchar(255) NOT NULL,
  `gia` int(100) NOT NULL,
  `tong_quan` text NOT NULL,
  `hanh_trinh` text NOT NULL,
  `so_luong` int(10) NOT NULL,
  `dia_diem` varchar(255) NOT NULL,
  `phuong_tien` varchar(255) NOT NULL,
  `id_mien` int(10) NOT NULL,
  `id_mua` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`id_binh_luan`),
  ADD KEY `fk_binhluan_nguoidung` (`id_nguoi_dung`),
  ADD KEY `fk_binhluan_tuor` (`id_tuor`);

--
-- Chỉ mục cho bảng `danhmuc_mien`
--
ALTER TABLE `danhmuc_mien`
  ADD PRIMARY KEY (`id_mien`);

--
-- Chỉ mục cho bảng `danhmuc_mua`
--
ALTER TABLE `danhmuc_mua`
  ADD PRIMARY KEY (`id_mua`);

--
-- Chỉ mục cho bảng `hang_tuor`
--
ALTER TABLE `hang_tuor`
  ADD PRIMARY KEY (`id_hang_tuor`),
  ADD KEY `fk_hangtuor_tuor` (`id_tuor`);

--
-- Chỉ mục cho bảng `hinh_anh`
--
ALTER TABLE `hinh_anh`
  ADD PRIMARY KEY (`id_hinh_anh`),
  ADD KEY `fk_hinhanh_tuor` (`id_tour`);

--
-- Chỉ mục cho bảng `ngay_xuat_phat`
--
ALTER TABLE `ngay_xuat_phat`
  ADD PRIMARY KEY (`id_ngay`),
  ADD KEY `fk_ngayxuatphat_tuor` (`id_tour`);

--
-- Chỉ mục cho bảng `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  ADD PRIMARY KEY (`id_nguoi_dung`);

--
-- Chỉ mục cho bảng `thoi_gian`
--
ALTER TABLE `thoi_gian`
  ADD PRIMARY KEY (`id_thoi_gian`),
  ADD KEY `fk_thoigian_tuor` (`id_tuor`);

--
-- Chỉ mục cho bảng `tuor`
--
ALTER TABLE `tuor`
  ADD PRIMARY KEY (`id_tuor`),
  ADD KEY `fk_tour_mua` (`id_mua`),
  ADD KEY `fk_tuor_mien` (`id_mien`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `id_binh_luan` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danhmuc_mien`
--
ALTER TABLE `danhmuc_mien`
  MODIFY `id_mien` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `danhmuc_mua`
--
ALTER TABLE `danhmuc_mua`
  MODIFY `id_mua` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `hang_tuor`
--
ALTER TABLE `hang_tuor`
  MODIFY `id_hang_tuor` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hinh_anh`
--
ALTER TABLE `hinh_anh`
  MODIFY `id_hinh_anh` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `ngay_xuat_phat`
--
ALTER TABLE `ngay_xuat_phat`
  MODIFY `id_ngay` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  MODIFY `id_nguoi_dung` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `thoi_gian`
--
ALTER TABLE `thoi_gian`
  MODIFY `id_thoi_gian` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tuor`
--
ALTER TABLE `tuor`
  MODIFY `id_tuor` int(10) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `fk_binhluan_nguoidung` FOREIGN KEY (`id_nguoi_dung`) REFERENCES `nguoi_dung` (`id_nguoi_dung`),
  ADD CONSTRAINT `fk_binhluan_tuor` FOREIGN KEY (`id_tuor`) REFERENCES `tuor` (`id_tuor`);

--
-- Các ràng buộc cho bảng `hang_tuor`
--
ALTER TABLE `hang_tuor`
  ADD CONSTRAINT `fk_hangtuor_tuor` FOREIGN KEY (`id_tuor`) REFERENCES `tuor` (`id_tuor`);

--
-- Các ràng buộc cho bảng `hinh_anh`
--
ALTER TABLE `hinh_anh`
  ADD CONSTRAINT `fk_hinhanh_tuor` FOREIGN KEY (`id_tour`) REFERENCES `tuor` (`id_tuor`);

--
-- Các ràng buộc cho bảng `ngay_xuat_phat`
--
ALTER TABLE `ngay_xuat_phat`
  ADD CONSTRAINT `fk_ngayxuatphat_tuor` FOREIGN KEY (`id_tour`) REFERENCES `tuor` (`id_tuor`);

--
-- Các ràng buộc cho bảng `thoi_gian`
--
ALTER TABLE `thoi_gian`
  ADD CONSTRAINT `fk_thoigian_tuor` FOREIGN KEY (`id_tuor`) REFERENCES `tuor` (`id_tuor`);

--
-- Các ràng buộc cho bảng `tuor`
--
ALTER TABLE `tuor`
  ADD CONSTRAINT `fk_tour_mua` FOREIGN KEY (`id_mua`) REFERENCES `danhmuc_mua` (`id_mua`),
  ADD CONSTRAINT `fk_tuor_mien` FOREIGN KEY (`id_mien`) REFERENCES `danhmuc_mien` (`id_mien`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
