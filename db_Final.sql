-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2024 at 02:57 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12
-- SỬ DỤNG DB NÀY NHƯ PHIÊN BẢN HOÀN THIỆN
-- THIS DB IS FINAL FORM FOR THIS PROJECT

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_duan1_nhom7`
--

-- --------------------------------------------------------

--
-- Table structure for table `binh_luan`
--

CREATE TABLE `binh_luan` (
  `id_binh_luan` int(10) NOT NULL,
  `noi_dung` text NOT NULL,
  `id_nguoi_dung` int(10) NOT NULL,
  `id_tuor` int(10) NOT NULL,
  `ngay_binh_luan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `binh_luan`
--

INSERT INTO `binh_luan` (`id_binh_luan`, `noi_dung`, `id_nguoi_dung`, `id_tuor`, `ngay_binh_luan`) VALUES
(6, 'Tour đỉnh chóp luôn', 5, 18, '20:38:39 15/04/2024');

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc_mien`
--

CREATE TABLE `danhmuc_mien` (
  `id_mien` int(10) NOT NULL,
  `ten_mien` varchar(255) NOT NULL,
  `trang_thai` int(10) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `danhmuc_mien`
--

INSERT INTO `danhmuc_mien` (`id_mien`, `ten_mien`, `trang_thai`) VALUES
(0, 'Uncategorize', 1),
(1, 'Miền Bắc', 0),
(2, 'Miền Trung', 0),
(5, 'Miền Nam ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc_mua`
--

CREATE TABLE `danhmuc_mua` (
  `id_mua` int(10) NOT NULL,
  `ten_mua` varchar(255) NOT NULL,
  `trang_thai` int(10) DEFAULT 0 COMMENT '1:Ẩn 0:Hiện'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `danhmuc_mua`
--

INSERT INTO `danhmuc_mua` (`id_mua`, `ten_mua`, `trang_thai`) VALUES
(0, 'Uncategorized', 1),
(7, 'Mùa xuân', 0),
(8, 'Mùa thu', 0),
(11, 'Mùa đông ', 0),
(16, 'Mùa hè', 0);

-- --------------------------------------------------------

--
-- Table structure for table `don_hang`
--

CREATE TABLE `don_hang` (
  `id_don_hang` int(10) NOT NULL,
  `ho_va_ten` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `sdt` int(25) NOT NULL,
  `ma_buu_chinh` int(25) NOT NULL,
  `tinh_thanh_pho` varchar(255) NOT NULL,
  `dk_them` text NOT NULL,
  `tong_gia` float NOT NULL,
  `ngay_dat_hang` date NOT NULL,
  `tong_nguoi` int(20) NOT NULL,
  `id_tuor` int(10) NOT NULL,
  `trang_thai` tinyint(10) NOT NULL DEFAULT 0 COMMENT '0:Chưa thanh toán 1:Đã thanh toán chưa khởi hành 2 Đã cọc chưa khởi hành 3 Đã khởi hành 4. Tuor đã huỷ',
  `id_nguoi_dung` int(10) DEFAULT NULL,
  `ngay_khoi_hanh` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `don_hang`
--

INSERT INTO `don_hang` (`id_don_hang`, `ho_va_ten`, `email`, `dia_chi`, `sdt`, `ma_buu_chinh`, `tinh_thanh_pho`, `dk_them`, `tong_gia`, `ngay_dat_hang`, `tong_nguoi`, `id_tuor`, `trang_thai`, `id_nguoi_dung`, `ngay_khoi_hanh`) VALUES
(138, ' Linhdao18', ' uckgudu@gmail.com', ' 3', 123456789, 123, 'Hà Thành', '', 3537050, '2024-04-14', 3, 21, 1, 5, '20-04-2024'),
(142, 'abc', 'uckgudu@gmail.com', 'Đông Mỹ', 987765542, 123, 'Hà Thành', '', 17500000, '2024-04-15', 7, 23, 1, NULL, '16-04-2024'),
(143, ' cuongneee', 'cuongdph44957@fpt.edu.vn', ' Tổ 9, khu 2, Hạ Long', 987765542, 123, 'Hà Thành', '', 10500000, '2024-04-15', 7, 20, 1, 7, '16-04-2024'),
(144, ' cuongneee', 'cuongdph44957@fpt.edu.vn', ' Tổ 9, khu 2, Hạ Long', 987765542, 123, 'Hà Thành', '', 2240000, '2024-04-15', 4, 25, 1, 7, '15-04-2024'),
(155, 'Đào Ngọc Linh', 'nguyenanlinhdao@gmail.com', 'Số 18 Ngõ 11 Hoàng Hoa Thám', 921390123, 12312, 'Hà Thành', 'Đẹp trai vcl', 4462500, '2024-04-15', 6, 26, 1, NULL, '20-04-2024'),
(156, 'Nguyễn Cường', 'abc@gmial.com', 'Văn Điển', 1234567890, 123, 'Hà Nội', '', 2450000, '2024-04-15', 5, 19, 1, NULL, '18-11-2024'),
(157, 'Nguyễn Thị Ngọc Tuyền', 'abc@gamil.com', 'Củ Chi', 987765542, 123, 'Sài Gòn', '', 4425000, '2024-04-15', 6, 18, 0, NULL, '15-05-2024'),
(158, 'Nguyễn Thị Ngọc Tuyền', 'abc@gamil.com', 'Củ Chi', 987765542, 123, 'Sài Gòn', '', 4425000, '2024-04-15', 6, 18, 1, NULL, '15-05-2024'),
(159, 'Nguyễn Thi Thơm', 'thom@gamil.com', 'Khương Đình', 987765542, 123, 'Hà Nội', '', 7375000, '2024-04-15', 3, 23, 0, NULL, '30-06-2024'),
(160, 'Nguyễn Thi Thơm', 'thom@gamil.com', 'Khương Đình', 987765542, 123, 'Hà Nội', '', 7375000, '2024-04-15', 3, 23, 2, NULL, '30-06-2024'),
(161, 'Nguyễn Thi Thơm', 'thom@gamil.com', 'Khương Đình', 987765542, 123, 'Hà Nội', '', 7375000, '2024-04-15', 3, 23, 1, NULL, '30-06-2024'),
(162, 'cuongneee', 'cuongdph44957@fpt.edu.vn', 'Tổ 9, khu 2, Hạ Long', 987765542, 123, 'Hà Thành', '', 294000, '2024-04-15', 5, 22, 1, 7, '08-07-2024'),
(163, 'Linhdao18', 'uckgudu@gmail.com', 'Hà Nội', 123456789, 123, 'Hà Nội', '', 10350000, '2024-04-15', 7, 20, 1, 5, '01-05-2024'),
(164, 'Linhdao18', 'uckgudu@gmail.com', 'Hà Nội', 0, 123, 'Hà Nội', 'Đ bik', 1475000, '2024-04-15', 3, 19, 1, 5, '10-10-2024'),
(166, 'cuongneee', 'cuongdph44957@fpt.edu.vn', 'Tổ 9, khu 2, Hạ Long', 762319564, 123, 'Sài Gòn', '', 2925000, '2024-04-15', 4, 18, 2, 7, '15-05-2024'),
(167, 'Đào Cẩm Ngọc', 'uckgudu@gmail.com', 'Hà Nội', 102312312, 123, 'Hà Thành', '', 23100000, '2024-04-23', 14, 29, 1, NULL, '31-12-2024');

-- --------------------------------------------------------

--
-- Table structure for table `hinh_anh`
--

CREATE TABLE `hinh_anh` (
  `id_hinh_anh` int(10) NOT NULL,
  `ten_hinh_anh` varchar(255) DEFAULT NULL,
  `id_tour` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hinh_anh`
--

INSERT INTO `hinh_anh` (`id_hinh_anh`, `ten_hinh_anh`, `id_tour`) VALUES
(21, 'resort-ha-long.webp', 18),
(22, 'HaiLong_DaoCatBa_710904682.jpg', 18),
(23, 'wp4190386.webp', 18),
(24, 'pexels-photo-6548371.webp', 19),
(25, 'pexels-photo-2965773.jpeg', 19),
(26, 'pexels-khiển-hoàng-9761821.jpg', 19),
(27, 'wp7311723.jpg', 20),
(28, 'DJI_0004.jpg', 20),
(29, 'pexels-photo-6711266.jpeg', 20),
(30, 'scenery-2846777_1280.jpg', 21),
(31, 'terrace-6526671_1280.jpg', 21),
(32, '1094438.jpg', 21),
(33, 'security-affairs-4855392_1280.jpg', 22),
(34, 'hoa-lu-ancient-capital-7460403_1280.jpg', 22),
(35, 'world-3344496_1280.jpg', 22),
(36, 'cable_car_trip_09.jpg', 23),
(37, 'phu-quoc-island.jpg.jpg', 23),
(38, 'cau-hon-phu-quoc-kiss-bridge-phu-quoc-o-dau-659a29eba6694.png', 23),
(39, 'wp12198064.jpg', 24),
(40, 'DAybdKeU0AAE5jY.jpg', 24),
(41, 'Nha-Trang-Beach.jpg', 24),
(42, 'con-dao-beach.jpg', 25),
(43, 'ConDao_1364698010.jpg', 25),
(44, 'bai-nhat-con-dao.jpg', 25),
(45, 'Fasipan-mountain-hoang-lien-son_769266166.jpg', 26),
(46, 'sapa-doihoatim01.jpg', 26),
(47, 'Cable-Car-at-Fansipan_1147207721.jpg', 26),
(48, 'Moc-Chau-tea-hill_336641513.jpg', 27),
(49, 'landscape-MaiChau-valley_444605125.jpg', 27),
(50, 'Mai-Chau-Township_625259816.jpg', 27),
(51, 'Mui-Ne-beach_534827980.jpg', 28),
(52, 'Mui-Ne_211720339.jpg', 28),
(53, 'Mui-Ne-beach_434936272.jpg', 28),
(54, 'Vinpearl-Land_781467691.jpg', 29),
(55, 'towers-of-Po-Nagar_716179891.jpg', 29),
(56, 'Linh-An-Pagoda_375499960.jpg', 29),
(57, 'ben-bach-dang.jpg', 30),
(58, 'dcd9fa66aa62e08f11e1f91fa6e92d3a.jpg', 30),
(59, '81fb9cc7f5de11a6a757f8c7d0eeb425.jpg', 30),
(60, 'CaoDaiTemple_381491608.jpg', 31),
(61, 'CaoDaiTemple_1700270638.jpg', 31),
(62, 'NuiBaDen_1705402471.jpg', 31);

-- --------------------------------------------------------

--
-- Table structure for table `ngay_xuat_phat`
--

CREATE TABLE `ngay_xuat_phat` (
  `id_ngay` int(10) NOT NULL,
  `ngay` varchar(100) NOT NULL,
  `id_tour` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ngay_xuat_phat`
--

INSERT INTO `ngay_xuat_phat` (`id_ngay`, `ngay`, `id_tour`) VALUES
(14, '2024-04-15', NULL),
(15, '2024-04-17', NULL),
(16, '2024-04-18', NULL),
(17, '2024-04-19', NULL),
(18, '2024-04-20', NULL),
(19, '2024-04-21', NULL),
(20, '2024-05-01', NULL),
(21, '2024-05-05', NULL),
(22, '2024-05-15', NULL),
(23, '2024-06-30', NULL),
(24, '2024-11-18', NULL),
(25, '2024-10-10', NULL),
(26, '2024-09-14', NULL),
(27, '2024-07-08', NULL),
(28, '2024-07-05', NULL),
(29, '2024-07-18', NULL),
(30, '2024-12-14', NULL),
(31, '2024-10-24', NULL),
(32, '2024-12-31', NULL),
(33, '2024-12-12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nguoi_dung`
--

CREATE TABLE `nguoi_dung` (
  `id_nguoi_dung` int(10) NOT NULL,
  `ho_ten` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `so_dien_thoai` int(100) NOT NULL,
  `dia_chi` text NOT NULL,
  `anh_dai_dien` varchar(255) DEFAULT NULL,
  `mat_khau` text NOT NULL,
  `random_pass` varchar(255) NOT NULL,
  `vai_tro` int(1) NOT NULL COMMENT '0:người dùng\r\n1:admin',
  `trang_thai` int(11) DEFAULT 0 COMMENT '0:Tồn tại 1:Đã bị khoá'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nguoi_dung`
--

INSERT INTO `nguoi_dung` (`id_nguoi_dung`, `ho_ten`, `email`, `so_dien_thoai`, `dia_chi`, `anh_dai_dien`, `mat_khau`, `random_pass`, `vai_tro`, `trang_thai`) VALUES
(0, 'ADMIN', 'nguyenanlinhdao@gmail.com', 0, '', NULL, '123456', '', 1, 0),
(5, 'Linhdao18', 'uckgudu@gmail.com', 102312312, 'Đông Mỹ', 'PTHQkh1.jpg', '1234567890', '', 0, 0),
(6, 'AnDepTrai123', 'linhdao181104@gmail.com', 0, '', NULL, '123456', '', 0, 1),
(7, 'cuongneee', 'cuongdph44957@fpt.edu.vn', 762319564, 'Tổ 9, khu 2, Hạ Long', '09.jpg', '123', '', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `thoi_gian`
--

CREATE TABLE `thoi_gian` (
  `id_thoi_gian` int(10) NOT NULL,
  `so_ngay_dem` text NOT NULL,
  `trang_thai` int(10) DEFAULT 0 COMMENT '0:Hiển thị 1:Không hiển thị'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thoi_gian`
--

INSERT INTO `thoi_gian` (`id_thoi_gian`, `so_ngay_dem`, `trang_thai`) VALUES
(4, '3 ngày 2 đêm', 0),
(5, '5 ngày 4 đêm', 0),
(6, 'Đi trong ngày', 0),
(7, '8 ngày 7 đêm', 0),
(9, '2 ngày 1 đêm', 0),
(10, '4 ngày 3 đêm', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tuor`
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
  `id_mua` int(10) NOT NULL,
  `id_thoi_gian` int(10) NOT NULL,
  `xuat_phat` varchar(50) DEFAULT NULL,
  `hinh_anh_mau` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tuor`
--

INSERT INTO `tuor` (`id_tuor`, `ten_tuor`, `gia`, `tong_quan`, `hanh_trinh`, `so_luong`, `dia_diem`, `phuong_tien`, `id_mien`, `id_mua`, `id_thoi_gian`, `xuat_phat`, `hinh_anh_mau`) VALUES
(18, 'Hạ Long - Quảng Ninh', 750000, '<p><strong>Tour này có gì hay</strong></p><p>- Khám phá Vịnh Hạ Long - Vịnh Lan Hạ - Trải nghiệm ngâm mình trong bể sục Jacuzzi và thưởng thức cocktail chất lượng 5 sao - khám phá hang Sáng - hang Tối bằng thuyền nan hoặc chèo Kayak</p>', '<p><strong>NGÀY 01: HÀ NỘI – HẢI PHÒNG – VỊNH HẠ LONG – VINH LAN HẠ/ QUẦN ĐẢO CÁT BÀ</strong><br>09h00:&nbsp;Đón khách tại Hà Nội ( Áp dụng cho khách hàng sử dụng dịch vụ xe, xe ô tô của Sealife)<br>11h30:&nbsp;Đến nhà chờ của&nbsp;Sealife Legend&nbsp;tại <strong>Lô 11 bến Tuần Châu</strong>, nhân viên và thủy thủ đoàn sẽ chào đón quý khách tại nhà chờ. Di chuyển bằng tender từ bến Tuần Châu lên&nbsp;du thuyền Sealife Legend<br>12h00 – 12h30: Di chuyển bằng tender từ bến Tuần Châu lên du thuyền Sealife Legend.<br>13h00 -14h00:&nbsp;Quý khách thưởng thức bữa trưa tại khu vực nhà hàng Fish Net tầng 1<br>15h30 – 17h00:&nbsp;Quý khách sẽ có trải nghiệm khám phá <strong>hang Sáng Tối</strong> – điểm đến mang đậm vẻ đẹp huyền bí của thiên nhiên vùng vịnh với trải nghiệm thú vị bằng thuyền nan hoặc chèo kayak<br>16h45 – 17h30: Trở lại du thuyền, đây là lúc quý khách có khoảng thời gian thư giãn, thả mình vào làn nước xanh như ngọc tại khu vực Hang Dơi xung quanh du thuyền. Quý khách có thể tận hưởng khung cảnh hoàng hôn thơ mộng đặc trưng của vịnh Lan Hạ nguyên sơ và đầy yên bình.<br>17h30 – 19h00: Quý khách có thể lựa chọn dịch vụ mát xa thư giãn hoặc ngâm mình trong bồn Jacuzzi khi ngắm hoàng hôn buông xuống trên vịnh Lan Hạ và thưởng thức cocktail chất lượng 5 sao<br>18h15:&nbsp;Quý khách sẽ được trải nghiệm nấu ăn trong lớp học chế biến món nem cuốn truyền thống của địa phương đầy hấp dẫn được tổ chức tại nhà hàng tầng 3<br>19h15:&nbsp;Thưởng thức bữa tối ngon miệng tại nhà hàng Fish Net tầng 1. Sau bữa ăn, Quý khách tham gia hoạt động câu mực hoặc hát karaoke tại Navy Club, hay ngắm cảnh vịnh về đêm tại Sundeck tầng 3 của tàu.<br>22h30:&nbsp;Quay trở lại cabin, quý khách tận hưởng thời gian nghỉ ngơi riêng tư, chìm vào giấc ngủ và chuẩn bị sẵn sàng cho một ngày mới cùng nhiều hoạt động thú vị.</p><p>&nbsp;</p><p><strong>NGÀY 02: VỊNH LAN HẠ - ĐẢO CÁT BÀ -&nbsp;HẠ LONG -&nbsp;HÀ NỘI ( Ăn sáng, ăn trưa)</strong><br>06h00:&nbsp;Chào đón ngày mới đầy năng lượng với lớp học Võ Việt Nam trên boong tàu và ngắm bình minh.&nbsp;<br>06h30:&nbsp;Bữa sáng nhẹ đã sẵn sàng phục vụ quý khách tại nhà hàng Fish net tầng 1 cùng trà, cafe, bánh ngọt và món phở truyền thống<br>7h15 – 8h30:&nbsp;Quý khách tham gia chuyến tham quan <strong>hang Trung Trang</strong> tại khu dự trữ sinh quyển thế giới Cát Bà. Ngoài vẻ đẹp của những khối nhũ đá tự nhiên, động Trung Trang còn có riêng một hệ thống sinh thái trong bóng tối huyền bí. Động là ngôi nhà của rất nhiều loài sinh vật như bò sát, côn trùng, chim và dơi..<br>8h30: Quý khách quay trở về du thuyền sau thời gian tham quan và trở lại cabin để thu dọn tư trang cá nhân trước khi làm thủ tục trả phòng<br>9h00 – 9h30:&nbsp;Quý khách làm thủ tục trả phòng tại quầy lễ tân, trả lại chìa khóa và thanh toán các dịch vụ (nếu có).<br>10h00:&nbsp;Thưởng thức buffet trưa tại nhà hàng trong khi du thuyền ra khơi quay trở lại bến tàu.<br>11h30:&nbsp;Kết thúc chuyến đi. Quý khách rời du thuyền sang cano để quay về nhà chờ tại Tuần Châu kết thúc hải trình.</p><p>&nbsp;</p><p><strong>Lưu ý: Chương trình có thể thay đổi cho phù hợp với thời tiết và các điều kiện vận hành khác</strong></p>', 10, 'Hạ Long', 'Ô tô/Du thuyền', 1, 16, 4, 'Cổng tỉnh Quảng Ninh', 'wp4190386.webp'),
(19, ' Hà Giang - Cột Cờ Lũng Cú - Sông Nho Quế', 500000, '<p><strong>Tour du lịch Hà Giang - Cột cờ Lũng Cú - Sông Nho Quế 3 ngày 2 </strong>đêm giúp các du khách thưởng thức được trọn vẹn vẻ đẹp hùng vĩ của núi rừng và văn hóa đặc sắc của con người Hà Giang với thời gian và chi phí tiết kiệm nhất.</p><p>Từ Hà Nội lên thành phố Hà Giang, du khách sẽ đi bằng xe ô tô 29 chỗ. Từ thành phố Hà Giang đi Quản Bạ - Yên Minh - Lũng Cú - Mã Pì Lèng - Đồng Văn - Nhà Vương, du khách sẽ tiếp tục di chuyển bằng ô tô đến các điểm tham quan.&nbsp;</p>', '<p><a href=\"https://saodieu.vn/travel/#collapse1\"><strong>Ngày 1: Hà Nội - Hà Giang - Quản Bạ - Yên Minh</strong></a></p><p><strong>06h00 - 06h30:</strong> Xe ô tô và hướng dẫn viên đón Quý khách tại điểm hẹn trong khu vực Phố Cổ và Nhà hát lớn&nbsp;khởi hành cho chuyến đi du lịch Hà Giang. Buổi sáng, xe sẽ dừng lại cho Quý khách nghỉ ngơi và tự do ăn&nbsp;sáng tại nhà hàng khu vực Ngã 3 Kim Anh (đầu cao tốc) hoặc điểm dừng nghỉ trên cao tốc.</p><p><strong>11h00:</strong> Quý khách ăn trưa tại thị trấn Tân Yên (Hàm Yên, Tuyên Quang).</p><p><strong>14h00:</strong> Dừng chân ghé thăm Đền Đôi Cô Cầu Má linh thiêng nằm ngay bên bờ Sông Lô. Đây là một trong&nbsp;những ngôi đền linh thiêng bậc nhất của vùng Đông Bắc.</p><p><strong>15h00:</strong> Đến thành phố Hà Giang, chụp hình kỷ niệm tại Km0 của Hà Giang. Điểm giao nhau của QL2,&nbsp;QL34 và QL4C hay còn gọi là Con đường hạnh phúc.</p><p><strong>16h30:</strong> Dừng chân tại điểm dừng chân Cổng Trời Quản Bạ chụp hình Núi đôi Cô Tiên hay còn gọi là Núi&nbsp;đôi Quản Bạ và toàn cảnh thị trấn Tam Sơn từ trên cao.</p><p><strong>17h30:</strong> Đến Yên Minh, Quý khách nhận phòng nghỉ ngơi.</p><p><strong>18h30:</strong> Ăn tối. Buổi tối tự do. Nghỉ đêm tại Yên Minh.</p><p>&nbsp;</p><h4><a href=\"https://saodieu.vn/travel/#collapse2\"><strong>Ngày 2: Yên Minh - Lũng Cú - Mã Pì Lèng - Đồng Văn</strong></a><br><strong>06h00:</strong> Ăn sáng và khởi hành đi chiêm ngưỡng những cảnh đẹp hùng vĩ của Công viên địa chất toàn cầu&nbsp;Cao nguyên đá Đồng Văn.</h4><p><strong>12h00:</strong> Quay lại thị trấn Đồng Văn ăn trưa.</p><p><strong>17h00:</strong> Về lại thị trấn Đồng Văn, nhận phòng khách sạn nghỉ ngơi.</p><p><strong>18h30:</strong> Ăn tối tại nhà hàng. Buổi tối Quý khách tự do khám phá Phố Cổ Đồng Văn, địa danh đã tồn tại cùng&nbsp;với thời gian gần một thế kỷ và ngồi nhâm nhi thưởng thức một ly cà phê tại quán Cafe phố Cổ (phí tự túc).</p><p>Nghỉ đêm tại thị trấn Đồng Văn.</p><p>&nbsp;</p><p><a href=\"https://saodieu.vn/travel/#collapse3\"><strong>Ngày 3: Đồng Văn - Nhà Vương - Hà Giang - Hà Nội</strong></a></p><p><strong>Sáng:</strong> Quý khách dậy để chứng kiến cảnh bà con nhiều thành phần dân tộc náo nức từ các nèo đường tập&nbsp;trung về với chợ phiên Đồng Văn để tham gia phiên họp chợ diễn ra vào sáng chủ nhật hàng tuần.</p><p><strong>07h00:</strong> Ăn sáng và lên xe về Hà Nội. Trên đường ghé thăm Dinh Vua Mèo - Vương Chính Đức nằm trong&nbsp;một thung lũng của xã Sà Phìn, đây là dòng họ giàu có và quyền uy nhất Châu Đồng Văn vào đầu thế kỷ 20.</p><p><strong>12h00:</strong> Đoàn ăn trưa tại thành phố Hà Giang. Sau bữa trưa tiếp tục lên xe về Hà Nội.</p><p><strong>19h30:</strong> Về đến Hà Nội, kết thúc chương trình. Hẹn gặp lại Quý khách.</p>', 5, 'Hà Giang', 'Ô tô/Xe du lịch', 1, 16, 4, 'Hà Nội', 'vietnam-rice-rice-field-ha-giang.jpg'),
(20, 'Đà Nẵng - Bà Nà - Hội An ', 1500000, '<p><i><strong>Du lịch Đà Nẵng - Bà Nà - Hội An</strong>. Đà Nẵng, thành phố của những cây cầu nối đôi bờ Sông Hàn, thành phố đáng sống bậc nhất Việt Nam. Cầu Rồng, Cầu Quay Sông Hàn, Cầu Trần Thị Lý, Cầu Thuận Phước vẫn ngày ngày mang sứ mệnh nối 1 bên là trung tâm hành chính quan trọng và 1 bên là khu du lịch biển nổi tiếng khắp trong và ngoài nước. Bà Nà như một nàng công chúa ngủ trong rừng từ ngàn xưa và bỗng bừng tỉnh mang lại 1 diện mạo đặc sắc và hấp dẫn cho Đà Nẵng. Phố Cổ Hội An với Chùa Cầu, Hội Quán…vẫn ngày đêm soi mình xuống dòng sông Hoài lịch sử.</i></p>', '<p><strong>NGÀY 1 | HÀ NỘI – ĐÀ NẴNG – SƠN TRÀ – NGŨ HÀNH SƠN (ĂN TỐI)</strong></p><p><strong>ĐOÀN BAY CHUYẾN VN169 12:10-13:30</strong><br><strong>09h10:</strong> Xe ô tô và hướng dẫn viên (HDV) đón đoàn tại <strong>Công Viên Thống Nhất đường Trần Nhân Tông</strong> – Quận Hai Bà Trưng – Hà Nội, khởi hành ra sân bay Nội Bài, đáp chuyến bay <strong>VN169 12:10-13:30</strong> đi Đà Nẵng của Hàng Không Quốc Gia Việt Nam.( Quý khách tự túc ăn trưa tại Sân Bay)<br>Đến sân bay Đà Nẵng, xe và HDV địa phương đón đoàn về khách sạn nhận phòng nghỉ ngơi.<br><br><strong>ĐOÀN BAY CHUYẾN VN173 13:40-14:55</strong><br><strong>10h40:</strong> Xe ô tô và hướng dẫn viên (HDV) đón đoàn tại <strong>Công Viên Thống Nhất đường Trần Nhân Tông</strong> – Quận Hai Bà Trưng – Hà Nội, khởi hành ra sân bay Nội Bài, đáp chuyến bay <strong>VN173 13:40-14:55</strong> đi Đà Nẵng của Hàng Không Quốc Gia Việt Nam.( Quý khách tự túc ăn trưa tại Sân Bay)<br>Đến sân bay Đà Nẵng, xe và HDV địa phương đón đoàn về khách sạn nhận phòng nghỉ ngơi.<br><br>Buổi chiều, đoàn đi thăm quan: <strong>Ngũ hành Sơn ở Ngọn núi Kim Sơn</strong>, nơi có <strong>chùa Quan Thế Âm</strong> là ngôi chùa linh thiên của người dân Đà Nẵng. Đây cũng chính là nơi 19/2 Âm lịch hàng năm sẽ diễn ra ngày hội rước mẹ Quan Thế Âm. Một trong 10 lễ hội Phật giáo lớn nhất Việt Nam, quý khách ghé thăm <strong>làng đá mỹ nghệ Non Nước</strong> thăm quan và mua các sản phẩm từ đá.</p><p>Buổi tối, đoàn ăn tối tại nhà hàng địa phương.<br>Nghỉ đêm tại <strong>khách sạn 4* ở Đà Nẵng</strong>.&nbsp;</p><p>&nbsp;</p><p><strong>NGÀY 2 | ĐÀ NẴNG- RỪNG DỪA – HỘI AN - ĐÀ NẴNG (ĂN SÁNG, TRƯA, TỐI)</strong></p><p><strong>07h00: </strong>Quý khách dùng bữa sáng tại khách sạn. &nbsp;<br><strong>08h00:</strong> Đoàn khởi hành đi thăm quan <strong>Rừng Dừa Bảy Mẫu</strong>: được ví như “Miền Tây trong lòng phố Hội”, tại đây du khách sẽ được trải nghiệm ngồi trên những chiếc thuyền thúng &nbsp;đi dọc trên sông và ngắm nhìn cánh rừng dừa xanh mướt.&nbsp;<br>Đoàn ăn trưa tại nhà hàng địa phương.<br><strong>Chiều:</strong> Đoàn khởi hành đi<strong> Hội An</strong> thăm quan. Tham quan khu phố cổ Hội An- được UNESCO công nhận là di sản văn hoá thế giới vào tháng 12/1999: bảo tàng lịch sử Hội An và miếu Quan Công, hội quán Phước Kiến, nhà cổ Tấn Ký, chùa cầu Nhật Bản.</p><p><strong>Chiều:</strong> Đoàn về lại Đà Nẵng, nghỉ ngơi, tắm biển<br><strong>Ăn tối: </strong>tại nhà hàng địa phương<br>Nghỉ đêm tại <strong>khách sạn 4* tại Đà Nẵng.</strong></p><p>&nbsp;</p><p><strong>NGÀY 3 | ĐÀ NẴNG - BÀ NÀ - ĐÀ NẴNG (ĂN SÁNG, TỐI)</strong></p><p><strong>Option 1: Khởi hành đi khu du lịch Bà Nà Hill (Quý khách trả thêm chi phí Option theo giá quy định của Sun Group: từ 900.000 VNĐ)</strong><br>Nơi mà quý khách khám phá những khoảnh khắc giao mùa bất ngờ Xuân – Hạ - Thu – Đông trong 1 ngày. Ngồi cáp treo dài nhất thế giới (gần 6.000m), tham quan vườn hoa, hầm rượu, <strong>chùa Linh Ứng, Thích Ca Phật Đài,</strong> đặc biệt là tham quan và chụp ảnh <strong>Cầu Vàng </strong>có kiến trúc độc nhất vô nhị với đôi bàn tay khổng lồ nâng đỡ Cầu Vàng tuyệt đẹp.&nbsp;</p><p><strong>Trưa:</strong> Ăn trưa Option Buffet tại Bà Nà (Nếu quý khách không đăng ký đi Bà Nà thì tự túc chi phí ăn trưa)<br><strong>Chiều:</strong> Tiếp tục tham quan <strong>Làng Pháp</strong> và<strong> khu vui chơi đẳng cấp Quốc tế Fantasy Park</strong>. Về lại Đà Nẵng tiếp tục tắm <strong>biển Mỹ Khê.</strong><br><i>(Gía vé Bà Nà có thể thay đổi tại thời điểm thực tế đi tour)</i><br><br><strong>Option 2: &nbsp;Du khách có thể đăng kí Option đi Núi Thần Tài: gói phổ thông + Ăn trưa: từ 750.000 VNĐ-chi phí thay đổi theo từng thời điêm</strong><br>HDV và xe Đón khách tại khách sạn, khởi hành đi <strong>công viên Suối Khoáng Núi Thần Tài</strong>. Xe điện đưa quý khách đến với khu vực hồ bơi tập trung để thư giãn tại hồ Jacuzzi &nbsp;hay thả mình tại &nbsp;Dòng Sông Lười bên trong Động Long Tiên. Trải nghiệm công viên nước thu nhỏ, ngồi tĩnh lặng dưới những cây nấm khổng lồ nhân tạo, hay tận hưởng massage tia. Xe điện tiếp tục đưa du khách tận hưởng hồ Suối Khoáng Nóng, ngâm mình nghỉ ngơi và thưởng thức Trứng Gà được luộc từ dòng khoáng nóng tự nhiên. (chi phí tự túc)</p><p><strong>Trưa:</strong> Ăn trưa tại <strong>Núi Thần Tài.</strong><br><strong>Chiều:</strong> Quý khách thưởng thức<strong> Tắm Bùn, Tắm Trà, Tắm Sữa, Tắm Rượu Vang, Tắm Onsen</strong>… hay thử cảm giác tắm Tiên và cùng với Trà Đạo. (chi phí tự túc). Tiếp tục vui chơi tại công viên nước. Khởi hành về lại khách sạn, tự do tắm <strong>biển Mỹ Khê</strong>.<br><strong>15h00:</strong>Trở về chân núi, xe đưa đoàn trở về nghỉ ngơi và tắm biển.<br><strong>19h00:</strong> Ăn tối tại nhà hàng. Buổi tối quý khách tự do khám phá <strong>ẩm thực đường phố Đà Nẵng với Chè Sầu Liên,</strong> hoặc những món ngon hải sản bên bờ biển, Nghỉ đêm tại khách sạn 4 sao.<br><i>LƯU Ý: QUÝ KHÁCH CHỈ CHỌN 1 TRONG 2 OPTION BÊN TRÊN. CÔNG TY SẼ THỰC HIỆN HÀNH TRÌNH THEO SỐ ĐÔNG. XE VÀ HDV CHỈ PHỤC VỤ CHO HÀNH TRÌNH ĐÃ CHỌN. CÁC KHÁCH LỰA CHỌN KHÁC, VUI LÒNG TỰ TÚC CHI PHÍ ĐI LẠI.</i></p><p>&nbsp;</p><p><strong>NGÀY 4 | ĐÀ NẴNG - HÀ NỘI (ĂN SÁNG)</strong></p><p><strong>Sáng:&nbsp;</strong> Sau bữa sáng, quý khách tự do nghỉ ngơi/ mua hàng hóa quà lưu niệm về làm quà cho gia đình và người thân.<br>Đoàn trả phòng khách sạn, xe và hướng dẫn đón đoàn đi &nbsp;thăm quan:</p><ul><li><strong>Bán Đảo Sơn Trà (Monkey Mountain)</strong> quay một vòng quanh Bán Đảo để thưởng ngoạn toàn cảnh phố biển Đà Nẵng trên cao ngoạn toàn cảnh phố biển Đà Nẵng trên cao. Xe đưa quý khách dọc theo triền núi Đông Nam để chiêm ngưỡng vẻ đẹp tuyệt mỹ của biển Đà Nẵng, viếng Linh Ứng Tự - nơi có tượng Phật Bà 65m cao nhất Việt Nam.</li><li>Thăm quan và chụp ảnh với&nbsp;<strong>Cầu Tình Yêu, vường tượng Sông Hàn, Tượng cá chép hóa long, nhà thờ Chính Tòa Đà Nẵng.</strong></li><li><strong>ĐOÀN BAY CHUYẾN VN166 11:30-13:00:</strong><br>Xe và HDV đưa đoàn khởi hành ra sân bay Đà Nẵng đáp chuyến bay <strong>VN166 (11H30-13h00).</strong><br><br><strong>ĐOÀN BAY CHUYẾN VN170</strong> <strong>14:35-16:05: ĐOÀN CÓ ĂN BỮA TRƯA</strong><br>Sau bữa trưa, Xe và HDV đưa đoàn khởi hành ra sân bay Đà Nẵng đáp chuyến bay<strong> VN170 (14H35-16h05).</strong><br>Đến Hà Nội, xe đón đoàn về lại trung tâm thành phố, trả khách tại điểm đón. Kết thúc chương trình, chia tay và hẹn gặp lại quý khách.</li></ul>', 20, 'Đà Nẵng', 'Máy bay/Xe du lịch', 5, 7, 10, 'Hà Nội', 'istockphoto-1156033272-170667a.webp'),
(21, 'Yên Bái - Mù Cang Chải – Đèo Khau Phạ – Tú Lệ ', 1199000, '<ul><li><i><strong>Khám phá một trong những nơi có ruông bậc thang đẹp nhất Việt Nam</strong></i></li><li><i><strong>Khám phá nét đẹp văn hóa của đồng bào dân tộc Thái</strong></i></li><li><i><strong>Chinh phục đèo Khau Phạ, một trong tứ đại đỉnh đèo của miền Bắc</strong></i></li><li><i><strong>Khám phá những nét ẩm thực địa phương độc đáo</strong></i></li></ul>', '<h4><strong>Ngày 1Hà Nội – Tú Lệ – Mù Cang Chải (Ăn trưa, tối)</strong></h4><p><strong>06h00</strong>: Xe và Hướng dẫn viên du lịch Yên Bái đón Quý tại Nhà hát lớn Hà Nội bắt đầu cho hành hành trình tìm kiếm những những bức hình tuyệt đẹp của những thửa ruộng bậc thang Mù Cang Chải. Trên đường đi, Quý khách dừng chân nghỉ ngơi chụp hình với những đồi chè Thanh Sơn xanh mướt.</p><p><strong>11h00</strong>: Đến thị trấn Sơn Thịnh ăn trưa. Sau bữa trưa, Đoàn du lịch Yên Bái tiếp tục lên xe đi Tú Lệ. Trên đường Quý khách ngồi trên xe ô tô ngắm nhìn cánh đồng Mường Lò trải dài dọc hai bên đường đi.</p><p><strong>14h00</strong>: Dừng chân tại Tú Lệ – mảnh đất nổi tiếng với gạo nếp mềm dẻo, thơm ngon và người con gái Thái mang vẻ đẹp quyến rũ đã lấy đi không biết bao nhiêu tâm hồn của các chàng trai. Hướng dẫn viên đưa Quý khách thăm quan và mua đồ, đặc biệt là món cốm xanh Tú Lệ mềm dẻo thơm ngon tại khu vực chợ Tú Lệ. Chụp hình với biểu tượng của huyện Mù Cang Chải.</p><p><strong>15h00</strong>: Tiếp tục chinh phục đèo Khau Phạ – một trong tứ đại đèo của miền Bắc.</p><p><strong>16h00</strong>: Dừng chân trên đỉnh đèo Khau Phạ với độ cao khoảng 2100m. Đèo Khau Phạ theo tiếng của người dân địa phương có nghĩa là Sừng Trời nơi giao hòa giữa trời và đất. Đứng trên đỉnh đèo ngắm toàn bộ khu vực thung lũng Khau Phạ, xa xa là các bản Lìm Thái, Lìm Mông. Tại đây, Quý khách còn có cơ hội ngắm nhìn các vận động viên chuyên nghiệp nhảy dù với tên gọi “bay trên mùa vàng” vào dịp tháng 9 hàng năm.</p><p><strong>17h30</strong>: Xe đưa Quý khách di chuyển về thị trấn Mù Cang Chải để nhận phòng khách sạn, nghỉ ngơi.</p><p><strong>19h00</strong>: Ăn tối. Buổi tối Quý khách tự do vui chơi. Nghỉ đêm tại Mù Cang Chải.</p><p>&nbsp;</p><h4><strong>Ngày 2Mù Cang Chải – Kim Nọi – Tú Lệ – Hà Nội (Ăn sáng, trưa)</strong></h4><p><strong>06h30</strong>: Quý khách tập trung ăn sáng tại nhà hàng. Sau bữa sáng, hướng dẫn viên du lịch Yên Bái đưa Quý khách bách bộ đi thăm Chợ Mù Cang Chải và đi thăm quan bản Kim Nọi, một bản bình yên và thơ mộng của người Thái.</p><p><strong>08h00</strong>: Xe đưa Quý khách tới khu vực Cầu Ba Nhà, chụp hình tự do với ruộng bậc thang hình mũi giầy. Sau đó Quý khách tự túc thuê xe ôm do chính những người Hmông bản địa nơi đây điều khiển. Vượt qua những con đường dốc, nhỏ và quanh co, Quý khách đến với ruộng bậc thang Mâm Xôi tuyệt đẹp, biểu tượng đặc trưng nhất làm nên tên tuổi cho ruộng bậc thang Mù Cang Chải.</p><p><strong>10h00</strong>: Quý khách trả phòng và lên xe về Hà Nội. Trên đường về, Quý khách lại tiếp tục được chiêm ngưỡng một lần nữa vẻ đẹp hùng vỹ của Đèo Khau Phạ. Dừng chân mua cốm xanh Tú Lệ về làm quà.</p><p><strong>12h00</strong>: Ăn trưa tại thị xã Nghĩa Lộ. Sau bữa trưa, đoàn du lịch Yên Bái tiếp tục lên xe về Hà Nội. Trên đường về, đoàn dừng chân nghỉ ngơi và chụp hình với những nương chè xanh bát ngát tại Thanh Sơn, Phú Thọ và mua đặc sản thịt chua về làm quà.</p><p><strong>18h30</strong>: Về đến Hà Nội. Kết thúc chương trình du lịch Yên Bái. Hẹn gặp lại Quý khách!</p><p>&nbsp;</p>', 8, 'Yên Bái', 'Ô tô/Xe du lịch', 1, 11, 4, 'Hà Nội', 'landscape-rice-fields-asia-yen-bai-wallpaper-preview.jpg'),
(22, 'Hoa Lư Tam Cốc ', 600000, '<p>Đầu tiên bạn sẽ ngược dòng lịch sử trở về với cố đô Hoa Lư xinh đẹp - nơi ghi dấu ấn mạnh mẽ với 3 triều đại Đinh - Lê - Lý. Tiếp theo đoàn sẽ đến với khu vực Tam Cốc hùng vĩ, tại đây bạn có thể thả mình theo những chiếc thuyền dọc sông, từ đó băng qua các hang động tuyệt đẹp và khám phá những ngọn núi đá vôi ấn tượng. Đừng quên việc thưởng thức khung cảnh yên bình tại vùng làng quê và cánh đồng lúa vàng Tam Cốc nữa nha.</p>', '<p>&nbsp;</p><p><strong>07h45:</strong> Xe đón khách tại Hà Nội và di chuyển đến Ninh Bình.</p><p>&nbsp;</p><p><strong>10h45 - 12h30:</strong> Ghé thăm cố đô Hoa Lư, thăm đền thờ vua Đinh Tiên Hoàng và vua Lê Đại Hành.</p><p>&nbsp;</p><p><strong>12:30:</strong> Ăn trưa.</p><p>&nbsp;</p><p><strong>14h00 - 15h30:</strong> Tiếp tục đến Tam Cốc và ngồi thuyền ngắm cảnh</p><p>&nbsp;</p><p><strong>15h30 - 16h30:</strong> Đạp xe khám phá những ngôi làng và cánh đồng.</p><p>&nbsp;</p><p><strong>16h30 - 18h30:</strong> Trở về Hà Nội và kết thúc chuyến đi.</p>', 5, 'Ninh Bình', 'Ô tô/Xe du lịch', 1, 16, 4, 'Hà Nội', 'vietnam-ninh-binh-ninh-binh.jpg'),
(23, 'HÀM NINH – BÃI SAO – VINPEARL LAND', 2500000, '<p><i><strong>Đảo Phú Quốc</strong> được mệnh danh là “đảo ngọc” cảnh đẹp hoang sơ, không gian trong lành, biển xanh và cát mịn trắng. Thiên nhiên ban tặng cho Phú Quốc cảnh sắc hài hòa, khí hậu mát mẻ và dễ chịu quanh năm. Bên cạnh đó, Phú Quốc còn sở hữu những bãi biển dài, đẹp, nước biển trong xanh và bãi cát dài trắng mịn, sẽ là điểm đến lý tưởng dành cho các cặp đôi đi hưởng tuần trăng mật hay một chuyến đi nghỉ dưỡng dành cho gia đình. Du lịch trải nghiệm ở đây bạn sẽ thấy tự hào và yêu quê hương Việt Nam.</i></p>', '<p><strong>NGÀY 01 : PHÚ QUỐC – ĐÔNG ĐẢO (Ăn trưa, tối)</strong></p><p>- Xe đón du khách tại sân bay Phú Quốc, đưa đoàn về khách sạn gửi hành lý, tự do nghỉ ngơi<br><strong>11h30:</strong> đưa đoàn đi ăn trưa với đặc sản Phú Quốc tại nhà hàng.<br><strong>Chiều: </strong>Khởi hành tham quan phía Đông đảo:<br>Vườn tiêu với những nọc tiêu thẳng tắp, xanh mơn mởn, nổi tiếng chắc hạt, thơm ngon<br>Chùa Sư Muôn hay còn gọi là Hùng Long Tự, dâng hương, cầu an cho người thân<br>Tham quan Trại nuôi ong mật, tìm hiểu cuộc sống cần cù của những chú ong bé nhỏ và học cách lấy mật ong (quay mật) của người dân.<br>Làng chài cổ Hàm Ninh nơi đây nổi tiếng với nghề đánh bắt lưới ghẹ, cá ngựa, hải sâm, hái rong biển, Quý khách có dịp thưởng thức hải sản tươi vừa đánh bắt với giá gốc<br>Suối Tranh – dòng suối đẹp bắt nguồn từ dãy Hàm Ninh, chỉ tham quan Suối Tranh vào mùa mưa (chỉ tham quan từ tháng 6- tháng 11)<br><strong>Ăn tối tại nhà hàng địa phương.</strong><br><strong>Option thêm:</strong> Tham quan khu vui chơi giải trí Vinpearl land (nếu Quý khách vào VinPearl land thì sẽ đi bằng xe trung chuyển của VinPearl, tự bỏ chương trình tham quan đông đảo, bỏ ăn tối, không bù chương trình, không bù hoặc chuyển bữa ăn)<br>Về khách sạn nghỉ ngơi. Tự do dạo bãi biển, thưởng thức không khí yên tĩnh tuyệt vời của huyện đảo hoặc đăng ký tour câu mực đêm (Chi phí tự túc: 330.000đ/khách)</p><p>&nbsp;</p><p><strong>NGÀY 02 : CITY – BÃI SAO (Ăn 3 bữa)</strong></p><p><strong>Buổi sáng:</strong> Dùng điểm tâm sáng tại Khách sạn, sau đó du khách tham quan:<br><strong>09h00:</strong> Xe đưa du khách tham quan city:<br>Tham quan thắng cảnh Dinh Cậu và Dinh Bà Thủy Long Thánh Mẫu nét văn hóa tín ngưỡng, chỗ dựa tinh thần của ngư dân trên đảo trước khi ra khơi<br>Tham quan mua sắm tại Chợ Dương Đông<br>Cơ sở ủ rượu vang Sim – một loại rượu đặc sản tại địa phương, thưởng thức rượu Sim rừng miễn phí<br>Cơ sở nước mắm Phú Quốc với cách ủ truyền thống có lịch sử hơn 200 năm phát triển tại Phú Quốc<br><strong>Ăn trưa tại nhà hàng địa phương với đặc sản địa phương</strong><br>Tiếp tục tham quan Nam đảo:<br>Cơ sở nuôi cấy ngọc trai tìm hiểu về quy trình nuôi trai lấy ngọc và tự tay mổ ốc trai<br>Thiền Viện Trúc Lâm Hộ Quốc, nằm tựa lưng vào núi, hướng mặt ra biển. Đường lên Chùa tuyệt đẹp với một bên là rừng núi xanh tươi, một bên là đại dương mênh mông<br>Di tích lịch sử nhà tù Phú Quốc – xem film tư liệu, cảm nhận nỗi đau của các chiến sĩ yêu nước và sống với niềm tự hào dân tộc<br>Đến Bãi Sao - bãi biển cát trắng đẹp nhất Phú Quốc từ tháng 2 đến tháng 10, trầm mình trong làn nước trong vắt, mát rượi<br>Xe đưa quý khách về lại khách sạn nghỉ ngơi.</p><p>&nbsp;</p><p><strong>NGÀY 03 : TOUR C U CÁ NGẮM SAN HÔ (Ăn 3 bữa)</strong></p><p><strong>Buổi sáng:</strong> Dùng điểm tâm sáng tại Khách sạn. Quý khách tự do tham quan Vinpearl Land/ Vinpearl Safari (chi phí vé cổng tự túc) đi bằng xe trung chuyển miễn phí, không có HDV, ăn bữa trưa tự túc<br><br><strong>Lựa chọn 1: </strong>VinPearl Safari (phụ thu vé vào cổng : 600.000đ/vé)<br>Vườn Thú Mở - VinPearl Safari Phú Quốc là Công viên Chăm sóc và Bảo tồn Động vật được xây dựng theo mô hình bán hoang dã, trong đó, các động vật quý hiếm được đảm bảo chăm sóc và bảo tồn trong môi trường thiên nhiên mở. Hiện Công viên đã có khoảng 3.000 cá thể thuộc 150 chủng loài, được sưu tầm, bảo tồn từ các động vật hoang dã quý hiếm địa phương và quy tụ từ nhiều vùng địa sinh học đặc trưng trên thế giới như Nam Phi, Châu u, Úc, Mỹ...<br><br><strong>Lựa chọn 2:</strong> Vinpearl Land (phụ thu vé vào cổng : 500.000d/vé)<br>Quý khách tham quan Thủy cung nước mặn với hàng nghìn loại cá và sinh vật quý hiếm, xem show biểu diễn tiên cá, cho cá heo ăn....Tham quan khu biển bắc cực với loài Chim cánh cụt dễ thương, ngộ nghỉnh<br>Vui chơi tại Khu trò chơi trong nhà: xe điện đụng, video games, audition, karaoke....các Trò chơi cảm giác mạnh ngoài trời như: Tàu lượng siêu tốc, Đu quay vòng xoay, Đĩa quay siêu tốc, Đu quay văng…….<br>Đến công viên nước, thỏa sức tham gia các trò chơi Lỗ đen vũ trụ, làn trượt nước, hồ tạo sóng, dòng sông lười.... - nhạc nước hoành tráng nhất Đông Nam Á<br><strong>18h30: </strong>Xe đón đoàn từ khách sạn đi ăn tối tại nhà hàng. Về khách sạn nghỉ ngơi</p><p>&nbsp;</p><p><strong>NGÀY 04 : TẠM BIỆT PHÚ QUỐC (Ăn sáng)</strong></p><p>Quý khách dùng điểm tâm, tự do tắm biển. Trả phòng xe đưa quý khách đến sân bay. Chương trình có thể thay đổi nhưng vẫn đảm bảo đủ điểm tham quan</p>', 10, 'Đảo Phú Quốc', 'Máy bay/Xe du lịch', 1, 16, 10, 'Hà Nội', 'dao-phu-quoc.jpg'),
(24, 'Nha Trang - Dốc Lết - I resort - Làng Yến Mai Sinh', 1000000, '<ul><li>-Chiêm ngưỡng vẻ đẹp của Bãi biển cát trắng Cà Ná - một trong những bãi biển đẹp nổi tiếng của khu vực miền Trung.</li></ul><p>-Tham quan Làng Yến Mai Sinh, trung tâm suối khoáng nóng I resort Nha Trang</p><ul><li>-Viếng chùa Long Sơn .</li></ul>', '<p><strong>NGÀY&nbsp;01: TP. HỒ CHÍ MINH - NHA TRANG&nbsp;(Ăn sáng, trưa, chiều)</strong><br>Đón du khách tại văn phòng lữ hành Saigontourist, khởi hành đi Nha Trang. Trên đường đi du khách sẽ được chiêm ngưỡng vẻ đẹp của bãi biển cát trắng <strong>Cà Ná</strong> - một trong những bãi biển đẹp nổi tiếng của khu vực miền Trung. Đến Cam Ranh. Xe đưa du khách vào Nha Trang theo cung đường Sông Lô Hòn Rớ - cung đường được xây dựng chạy dọc theo bờ biển Cam Ranh - Nha Trang thơ mộng. Đến Nha Trang, du khách nhận phòng nghỉ ngơi. Buổi chiều, xe đưa đoàn viếng <strong>Chùa Long Sơn</strong> được biết tới là ngôi cổ tự lâu đời ở Nha Trang. Nơi đây sở hữu bức tượng Phật Tổ ngoài trời lớn nhất được ghi tên vào sách kỷ lục Guiness Việt Nam. Nghỉ đêm tại Nha Trang.</p><p>&nbsp;</p><p><strong>NGÀY&nbsp;02: NHA TRANG - DỐC LẾT&nbsp;(Ăn sáng, trưa)</strong><br>Buổi sáng, xe đưa du khách đi <strong>Dốc Lết</strong> - một trong những bãi biển êm, đẹp, nổi tiếng của tỉnh Khánh Hòa và khu vực miền Trung. Quý khách tự do tham quan và tắm biển thỏa thích trong làn nước xanh trong. Trên đường về dừng chân tham quan chụp ảnh tại <strong>Vega City Nha Trang </strong>- quần thể bất động sản phức hợp nghệ thuật, nghỉ dưỡng, giải trí hàng đầu tại Nha Trang, dạo bộ quanh Vega Shopping Continental Plaza, chụp ảnh lưu niệm với các dãy nhà đầy màu sắc và hàng trăm artwork, khu tiểu cảnh độc đáo, Nhà hát Đó với kiến trúc văn hóa bản địa độc đáo,… Xe đưa đoàn về khách sạn nghỉ ngơi. Buổi chiều, du khách tự do khám phá thành phố biển về đêm và thưởng thức ẩm thực địa phương (chi phí tự túc). Nghỉ đêm tại Nha Trang.</p><p>&nbsp;</p><p><strong>NGÀY&nbsp;03: NHA TRANG - I RESORT&nbsp;(Ăn sáng, trưa, chiều)</strong><br>Buổi sáng, xe đưa du khách tham quan <strong>trung tâm suối khoáng nóng I resort Nha Trang</strong> - thư giãn và tắm khoáng (tự túc chi phí tắm bùn các loại). Buổi chiều, quý khách ghé tham quan <strong>Làng Yến Mai Sinh</strong> - tận mắt chiêm ngưỡng mô hình hang Yến, tìm hiểu quá trình chim Yến làm tổ, quy trình thu hái, tinh chế, nếm thử các sản phẩm làm từ tổ Yến.... Đoàn ghé<strong> chợ Đầm</strong> mua sắm đặc sản Nha Trang. Nghỉ đêm tại Nha Trang.</p><p>&nbsp;</p><p><strong>NGÀY&nbsp;04:NHA TRANG - TP. HỒ CHÍ MINH</strong>&nbsp;<strong>(Ăn sáng, trưa)</strong><br>Sau khi ăn sáng quý khách nghỉ ngơi đến giờ trả phòng. Đoàn khởi hành về thành phố, đến Phan Rang nghỉ giải lao và <strong>mua đặc sản Ninh Thuận</strong>. Đến Tp. Hồ Chí Minh, xe đưa quý khách về văn phòng lữ hành Saigontourist số 19 Hoàng Việt, Phường 4, Quận Tân Bình. Kết thúc chuyến tham quan./.</p>', 10, 'Nha Trang', 'Máy bay/Xe du lịch', 2, 8, 10, 'Tp.Hồ Chí Minh', 'NhaTrang-KhoaTran-27-1616120145.jpg'),
(25, 'Côn Đảo', 560000, '<p>-Du lịch Côn Đảo nổi tiếng đến với những bãi tắm đẹp hoang sơ, cát trắng mịn làm lòng du khách&nbsp;</p><p>-Tham quan Trại Phú Hải, Chuồng Cọp Pháp - Mỹ, Mũi Cá Mập, Đỉnh Tình Yêu.</p>', '<p><strong>NGÀY 1: HẢI PHÒNG - CÔN ĐẢO (Ăn Trưa, Tối)</strong><br><strong>-&nbsp;Buổi sáng:</strong>&nbsp;Hướng dẫn viên&nbsp; đón quý khách tại sân bay Côn Đảo. HDV đưa quý khách về khách sạn nhận phòng, nghỉ ngơi. Trên đường đi HDV giới thiệu về lịch sử làng Cỏ Ống, Lò Vôi, Nghĩa Trang Hàng Keo…<br>Ăn trưa tại nhà hàng<br><strong>-&nbsp;Buổi chiều:</strong><br>Tham quan hệ thống <strong>nhà tù Côn Đảo</strong>, nghe thuyết minh về cuộc sống trước đây của người tù, bao gồm:<br><strong>Bảo Tàng Côn Đảo</strong>: Nghe thuyết minh về cuộc sống của người dân Côn Đảo xưa và nay<br><strong>Trại Phú Hải:</strong> là trại tù cổ kính và lâu đời do thực dân Pháp xây dựng. Nơi đây nổi tiếng với hầm xay lúa, khu biệt giam và khu đập đá Côn Lôn.<br><strong>Chuồng cọp kiểu Pháp:</strong> Hay còn gọi là <strong>trại Phú Thọ</strong>, là tâm điểm nhà tù Côn Đảo. Khám phá hệ thống Chuồng Cọp kiên cố được xây dựng ẩn giữa các tòa nhà như mê cung. Xem chuồng cọp và nghe mô tả các hình thức tra tấn thể xác các tù nhân.<br><strong>Chuồng cọp kiểu Mỹ:</strong> hay còn gọi là <strong>trại Phú Bình</strong> với các dãy phòng giam nhỏ hẹp và ẩm thấp được xây dựng vào năm 1971. Nơi đây chủ yếu tra tấn tù nhân về tinh thần. Là nơi nhận được tin Sài Gòn giải phóng đầu tiên.<br><strong>-&nbsp;Buổi tối: </strong>Xe đưa Qúy khách dùng buổi tối tại nhà hàng, sau đó Qúy khách tự do tham quan Côn Đảo, <strong>Cầu tàu 914</strong><br><strong>-&nbsp;22h00:</strong> Quý khách tham gia chương trình&nbsp;<strong>tour tâm linh Côn Đảo</strong></p><p>&nbsp;</p><p><strong>NGÀY 2: CÔN ĐẢO - VÙNG ĐẤT TÂM LINH (Ăn Sáng, Trưa, Tối)</strong><br><strong>-&nbsp;Buổi sáng:</strong>&nbsp; Qúy khách ăn sáng tại Resort.<br>-&nbsp;Xe đưa Qúy khách&nbsp;khởi hành về phía Tây Nam của đảo Côn Sơn qua các địa danh như <strong>Bãi Đá Trắng, Mũi Cá Mập, đỉnh Tình Yêu , Vân Sơn Tự</strong>, tham quan <strong>cảng Bến Đầm</strong>, một trong những cơ sở kinh tế chính của huyện Côn Đảo , trở về khách sạn nghỉ ngơi, ăn tối, buổi tối tự do khám phá Côn Đảo<br><strong>-&nbsp;Miếu Bà Phi Yến (An Sơn Miếu):</strong> nơi thờ <strong>bà Phi Yến – thứ Phi</strong> của <strong>Chúa Nguyễn Ánh</strong>, gắn liền với câu hát dân gian nổi tiếng <strong>“Gió đưa cây cải về trời, rau răm ở lại chiệu lời đắng cay”.</strong> Trên đường Quý khách sẽ dịp chiêm ngưỡng cảnh đẹp của <strong>hồ An Hải</strong><br>Ăn trưa tại nhà hàng. Về khách sạn nghỉ ngơi.<br><strong>-&nbsp;Buổi chiều</strong>:<br><strong>15h:&nbsp;</strong> Xe đưa Qúy khách tham quan <strong>bãi Đầm Trầu</strong>, một trong những bãi biển đẹp nhất Côn Đảo, nghe kể về <strong>sự tích Miếu Cậu</strong> nơi thờ <strong>Hoàng Tử Cải</strong>, con của <strong>Chúa Nguyễn Ánh</strong> và <strong>bà Hoàng Phi Yến</strong>, sau đó vượt 1,5km đường rừng để đến bãi tắm, thư giãn, tăm biển.<br>Qúy khách tự do tắm biển, ăn hải sản <strong>(Chi Phí tự túc)</strong><br><strong>-&nbsp;Buổi tối: </strong>Xe đưa Qúy khách dùng buổi tối tại nhà hàng, sau đó Qúy khách tự do tham quan <strong>Côn Đảo</strong> về đêm.</p><p>&nbsp;</p><p><strong>NGÀY 3: CÔN ĐẢO - TP.HẢI PHÒNG (Ăn Sáng)</strong><br><strong>- Buổi sáng:</strong>&nbsp;<br>Dùng điểm tâm sáng, tham quan mua sắm <strong>đặc sản chợ Côn Đảo</strong>, &nbsp;tham quan cơ sở sản xuất <strong>ngọc trai truyền thống</strong>, trở về khách sạn nghỉ ngơi cho đến giờ trả phòng ra sân bay trở phòng khách sạn.<br>HDV đưa khách ra sân bay trở về thành phố Hồ Chí Minh. Chia tay và hẹn gặp lại Quý khách trong những hành trình tiếp theo.</p>', 5, 'Côn Đảo', 'Máy bay/Xe du lịch', 5, 8, 4, 'Hải Phòng', 'con-dao-beach.jpg'),
(26, 'Hà Nội - Sapa - Fansipan', 750000, '<p>- Trải nghiệm hệ thống cáp treo 3 dây hiện đại với cảm giác đi giữa biển mây.&nbsp;</p><p>- Ngắm nhà thờ đá, dạo chợ Sapa.&nbsp;</p><p>- Tham quan bản Cát Cát.</p>', '<p><strong>NGÀY 01: HÀ NỘI – SAPA (Ăn trưa, tối)</strong><br><strong>06h15:</strong> Quý khách tự túc phương tiện đến điểm đón khách trong khu vực <strong>phố cổ Hà Nội</strong>, khởi hành đi Sapa (dự kiến 06h45). <strong>13h00:</strong> Đến Sapa, Hướng dẫn viên đón đoàn đưa đi ăn trưa sau đó về khách sạn nhận phòng, nghỉ ngơi. 15h00: Quý khách tự do khám phá Sapa như: <strong>Nhà Thờ Đá, Hồ Sapa,</strong>&nbsp;mua sắm đồ tại các dãy phố...&nbsp;</p><p><strong>18h00:</strong> Sau bữa tối, quý khách đi tự do dạo chơi <strong>chợ đêm Sapa</strong>, thưởng thức các món nướng đặc sắc vùng cao. Ăn tối và nghỉ đêm tại Sa Pa.</p><p>&nbsp;</p><p><strong>NGÀY 02: SAPA – CÁT CÁT (Ăn sáng, trưa, tối)</strong><br>Quý khách dùng bữa sáng tại khách sạn.</p><p>&nbsp;<strong>07h30:</strong> HDV và xe đưa đoàn đi tham quan <strong>bản Cát Cát -</strong>&nbsp;bản cổ của người H Mông, thăm<strong> thác nước Cát Cát, thuỷ điện Cát Cát</strong> nơi có ba con suối gặp nhau tạo thành thung lũng Mường Hoa. Ăn trưa tại nhà hàng.<br><strong>Buổi chiều:</strong> Quý khách có thể đi tắm lá thuốc của người Dao đỏ để thư giãn và hồi phục sức khỏe (chi phí tự túc)....hoặc tự túc tới tham quan trải nghiệm và chụp hình tại <strong>Moana Sapa - Bali thu nhỏ</strong> ngay giữa thành phố mờ sương, <strong>Swing Sapa</strong> – điểm check in Tình Yêu, <strong>Sapa Story, Moana, Vườn Hồng Cổ Sapa, 1975, Best View, Cầu Kính Rồng Mâ</strong>y…<br><strong>18h00:</strong> Quý khách dùng bữa tối tại nhà hang, sau bữa tối Quý khách tự do dạo chơi và khám phá thị trấn Sapa về đêm.</p><p>&nbsp;</p><p><strong>NGÀY 03: CHINH PHỤC FANSIPAN – HÀ NỘI (Ăn sáng, trưa)</strong><br>Quý khách dùng bữa sáng tại khách sạn. HDV đưa quý khách tới nhà Ga SaPa, quý khách trải nghiệm <strong>tàu hỏa leo núi Mường Hoa</strong> <strong>(tự túc chi phí)</strong> ngắm nhìn khung cảnh thiên nhiên hùng vĩ của <strong>thung lũng Mường Hoa </strong>với núi đồi trập trùng. Đến Ga cáp treo, quý khách sẽ tiếp tục hành trình khám phá Sun World Fansipan Legend với cáp treo ba dây hiện đại nhất thế giới băng qua dãy Hoàng Liên Sơn, <strong>chinh phục đỉnh Fansipan - nóc nhà Đông Dương và chiêm bái quần thể văn hóa tâm linh trên đỉnh Fansipan. (tự túc chi phí)</strong>.&nbsp;</p><p><strong>11h30:</strong> Quý khách về nhà hàng dùng bữa trưa, trả phòng khách sạn sau đó quý khách tự do đi chợ Sapa, mua sắm về làm quà cho người thân. Quý khách có mặt tại văn phòng xe hoặc bến xe Sapa, lên xe giường nằm khởi hành về Hà Nội (dự kiến chuyến 14:00). Về đến trung tâm Tp Hà Nội, quý khách tự túc phương tiện trở về nhà. Kết thúc chương trình tham quan.Hẹn gặp lại Quý khách!</p>', 10, 'Sa Pa', 'Ô tô/Xe du lịch', 1, 11, 4, 'Hà Nội', 'Fasipan-mountain-hoang-lien-son_769266166.jpg'),
(27, 'Mộc Châu - Mai Châu', 600000, '<p>Quý khách được tận hưởng không khí trong lành của khu vực Tây Bắc. Hòa mình vào với thiên nhiên cảnh sắc tại đồi chè Mộc Châu. Sữa bò: QK nên mua sữa bò khô hoặc sữa tươi tiệt trùng được đóng gói trong hộp kín. Rau cải mèo: người dân Mộc Châu chế biến thành nhiều món khác nhau như xào cùng gà, bò, nấu canh, luộc Đặc sản chè khô,Rượu ngô, rượu táo mèo, rượu chuối, Sữa chua nếp cẩm</p>', '<p><strong>NGÀY 01: HẠ LONG – MỘC CHÂU (≈ 380 km)&nbsp; &nbsp;(Ăn&nbsp; trưa, chiều)</strong><br><i><strong>05.00:</strong>&nbsp;</i>&nbsp;Xe và hướng dẫn viên lữ hành&nbsp;Saigontourist đón Quý khách tại điểm đón tại Hạ Long khởi hành đi Mộc Châu – Hòa Bình<br><i><strong>07.00:&nbsp;</strong>&nbsp;</i> Quý khách dừng chân ăn sáng tự túc<br><i><strong>07.30:&nbsp;</strong></i>&nbsp; Đoàn tiếp tục khởi hành đi Mộc Châu.<br><i><strong>11.15</strong>:&nbsp;</i>&nbsp; Ăn trưa tại Hòa Bình<br><i><strong>12.30:</strong></i>&nbsp;&nbsp; Tiếp tục khởi hành, trên đường đoàn vượt <strong>Dốc Cun, ngắm Đèo Thung Khe.</strong><br><i><strong>15.00:</strong></i>&nbsp;&nbsp; Quý khách tham quan và chụp ảnh tại Đồi chè thị trấn Nông Trường Mộc Châu.<br><i><strong>16.00:</strong></i>&nbsp;&nbsp; Quý khách đến với <strong>Thung lũng mận Nà Ka</strong> – thung lũng mận rộng và đẹp nhất Mộc Châu. Quý khách chụp ảnh với cả trăm ha được phủ màu trắng muốt của bạt ngàn hoa mận<br>Lưu ý: Hoa mận dễ bị ảnh hưởng bởi điều kiện thời tiết bên ngoài mà nở sớm hay muộn. Đây là trường hợp bất khả kháng nằm ngoài quyền kiểm soát và điều hành của lữ&nbsp;hành Saigontourist .<br><i><strong>17.30:</strong></i>&nbsp;&nbsp; Quý khách nhận phòng khách sạn.<br><i><strong>18.30:&nbsp;</strong></i>&nbsp; Đoàn ăn tối tại khách sạn.<br>Buổi tối tự do khám phá thị trấn nông trường Mộc Châu. Nghỉ đêm tại khách sạn</p><p>&nbsp;</p><p><strong>NGÀY 02: KHÁM PHÁ MỘC CHÂU&nbsp; (Ăn sáng, trưa, chiều)</strong><br><i><strong>07.00:</strong></i>&nbsp;&nbsp; Ăn sáng tại khách sạn.<br><i><strong>08.00:&nbsp;</strong></i>&nbsp; Quý khách tham quan <strong>thác Dải Yếm</strong> - thác nước đẹp và hũng vỹ nhất tại Mộc Châu. Sau đó đoàn tiếp tục khám phá <strong>chiếc cầu kính tình yêu Mộc Châu</strong> - cây cầu kính nghệ thuật kèm biểu tượng tình yêu duy nhất tại Việt Nam cũng như trên thế giới.<br>Xe đưa Quý khách về chợ địa phương, mua sắm quà tặng, sản vật địa phương.<br><i><strong>11.45:</strong></i>&nbsp;&nbsp; Quý khách ăn trưa tại nhà hàng.<br><i><strong>14.00:</strong></i>&nbsp;&nbsp; Đoàn tiếp tục khám phá <strong>thiên đường hoa Happy Land</strong> với hàng trăm loài hoa đẹp, tựa như Đà Lạt thu nhỏ của miền bắc.<br><i><strong>17.30:</strong></i>&nbsp;&nbsp; Quý khách dùng bữa tối Buổi tối tự do khám phá thị trấn Mộc Châu. Nghỉ đêm tại khách sạn</p><p>&nbsp;</p><p><strong>NGÀY 03: MỘC CHÂU – MAI CHÂU – HẠ LONG&nbsp;&nbsp;(Ăn sáng, trưa, chiều)</strong><br><i><strong>06.00:</strong></i>&nbsp;&nbsp; Ăn sáng tại khách sạn. Trả phòng<br><i><strong>09.00:&nbsp;</strong></i>&nbsp; Xe đưa quý khách đến <strong>Bản Lác – Thung lũng Mai Châu</strong> xinh đẹp và thơ mộng; khám phá, tìm hiểu nét sinh hoạt văn hoá đặc sắc của đồng bào dân tộc Thái trắng tỉnh Hoà Bình, thăm các cơ sở sản xuất hàng thổ cẩm mỹ nghệ…<br><i><strong>12.00:</strong></i>&nbsp;&nbsp; Quý khách ăn trưa tại bản Lác<br><i><strong>13.00:&nbsp;</strong></i>&nbsp; Đoàn khởi hành về Hạ Long.<br><i><strong>18.00:&nbsp;</strong></i>&nbsp; Quý khách dùng bữa tối tại Hạ Long. Kết thúc chương trình.</p>', 6, 'Mộc Châu', 'Ô tô/Xe du lịch', 1, 11, 4, 'Hà Nội', 'landscape-MaiChau-valley_444605125.jpg'),
(28, 'Phan Thiết - Mũi Né - Làng Chài Xưa', 1500000, '<p>- Dạo chơi trên bờ cát trắng để gió biển thổi tung những vướng bận đời thường</p><p>- Tham quan không gian trưng bày nghệ thuật “Làng chài xưa” tái hiện lại một phần làng chài xưa của Phan Thiết - Mũi Né cách đây hơn 300 năm.</p>', '<p><strong>NGÀY&nbsp;01:</strong> <strong>TP. HỒ CHÍ MINH - PHAN THIẾT - MŨI NÉ&nbsp;(Ăn sáng, trưa, chiều)</strong><br>Hướng dẫn viên&nbsp;đón quý khách tại văn phòng lữ hành Saigontourist, khởi hành đi Bình Thuận. Đến Phan Thiết, xe đưa quý khách đến tham quan <strong>không gian trưng bày nghệ thuật “Làng chài xưa”.</strong> Toàn bộ khu trưng bày có diện tích 1.600m². Đây là không gian trưng bày nghệ thuật và là bảo tàng thu nhỏ, tái hiện lại một phần làng chài xưa của Phan Thiết - Mũi Né cách đây hơn 300 năm. Du khách đến đây sẽ được tham quan làng chài dưới rặng dừa; phố cổ ven sông Cà Ty; nhà ở và nơi sản xuất nước mắm của hàm hộ Phan Thiết; con đường Phan Thiết - Mũi Né xưa; đắm mình vào biển Mũi Né 3D và mua sắm trong không gian chợ quê làng xưa… tận mắt được chứng kiến một làng chài xưa của xứ biển Phan Thiết được tái hiện một cách công phu. Nghỉ đêm tại Mũi Né.</p><p>&nbsp;</p><p><strong>NGÀY&nbsp;02: THAM QUAN MŨI NÉ&nbsp;(Ăn sáng, trưa)</strong><br>Buổi sáng, xe đưa du khách đi vào <strong>Hòn Rơm</strong> tham quan <strong>đồi cát vàng </strong>dưới tác động của gió biển đã tạo nên những hình dạng rất tuyệt vời. Về lại resort, quý khách tự do nghỉ dưỡng tại resort. Quý khách có bữa tối tự túc. Nghỉ đêm tại Mũi Né.</p><p><br><strong>NGÀY&nbsp;03: PHAN THIẾT - TP. HỒ CHÍ MINH</strong>&nbsp;<strong>(Ăn sáng, trưa)</strong><br>Buổi sáng, quý khách tự do nghỉ dưỡng, tắm biển đến giờ trả phòng. Khởi hành về Tp.HCM. Trên đường về ghé mua sắm đặc sản <strong>Phan Thiết</strong>. Kết thúc chương trình./.</p><p><strong>Ghi chú</strong>: Điểm tham quan có thể sắp xếp lại cho phù hợp mà vẫn bảo đảm đầy đủ nội dung của từng chương trình.</p>', 15, 'Phan Thiết', 'Máy bay/Xe du lịch', 2, 16, 4, 'Tp.Hồ Chí Minh', 'Mui-Ne-beach_534827980.jpg'),
(29, 'HÀ NỘI – NHA TRANG – ĐÀ LẠT', 1650000, '<p>- Thăm viếng chùa Long Sơn, tham quan &amp; chiêm bái tượng phật A Di Đà</p><p>- Tham quan ĐẢO ROBINSON, Khu vui chơi giải trí Vin Wonders&nbsp;</p><p>- Tham quan Quảng trường Lâm Viên...</p>', '<p><strong>NGÀY 01: HÀ NỘI – NHA TRANG&nbsp; (Ăn trưa, tối)</strong><br><i><strong>6h00:</strong></i>&nbsp;Xe và hdv đón quý khách tại điểm hẹn <strong>văn phòng Lữ hành Saigontourist 55B Phan Chu Trinh, Hoàn Kiếm, Hà Nội</strong>&nbsp;đến sân bay Nội Bài , hdv làm thủ tục dự kiến chuyến bay <strong>VN1553 cất cánh lúc 9h50 – 11h50 </strong>(hdv không bay cùng đoàn).<br><i><strong>12h15 – 13h45:</strong></i> Xe và hdv đón quý khách tại sân bay Cam Ranh về trung tâm Thành phố Nha Trang, dùng bữa trưa tại Nhà hàng.<br><i><strong>14h00:</strong></i>&nbsp;Quý khách nhận phòng khách sạn.</p><p><i><strong>15h00:</strong></i>&nbsp;Xe đưa quý khách đi tham quan:<br><strong>Tháp bà Ponagar </strong>- Tháp Bà mang dáng dấp của một ngôi đền, đậm dấu ấn kiến trúc vương quốc Chăm cổ xưa. Toàn bộ quần thể gồm 3 tầng, mang nét đặc trưng của những đền đài từ hơn chục thế kỉ trước.<br><strong>Viện Hải dương học</strong> là nơi nghiên cứu đời sống các loài động thực vật biển tại thành phố Nha Trang tỉnh Khánh Hòa.<br><strong>Nhà thờ Đá </strong>- được xây dựng hoàn toàn từ những viên đá lập thể theo lối kiến trúc hình khối đặc trưng của Phương Tây.<br><i><strong>19h00- 20h30: </strong></i>Quý khách dùng cơm tối tại Nhà hàng. Nghỉ đêm tại Nha Trang.<br><strong>&nbsp;</strong></p><p><strong>NGÀY 02: KHÁM PHÁ ĐẢO ROBINSON&nbsp; &nbsp;(Ăn sáng,trưa, tối)</strong><br><i><strong>6h30 – 7h30:&nbsp;</strong></i>Quý khách ăn sáng tại khách sạn.&nbsp;Sau đó, hdv và xe đưa quý khách ra Cảng Nha Trang. Quý khách sẽ trọn vẹn ngắm&nbsp;<strong>Vịnh Nha Trang </strong>trên đường ra <strong>Ốc Đảo Robinson</strong><br><i><strong>&nbsp;9:30-15:30:</strong></i> TRÃI NGHIỆM TRỌN VẸN TẠI ĐẢO ROBINSON:<br>-&nbsp;Ngắm San Hô<br>- Đua Kayak...<br>-&nbsp;Happy Hour Tiệc Rượu Nổi Rượu Robinson + Mini Buffet Trái Cây<br>-&nbsp;Checkin Sống ảo tại Khu Vườn Sinh Thái độc đáo trên Ốc Đảo Robinson.&nbsp;Dùng bữa trưa trên Đảo.&nbsp;Tắm Biển/Ghế Lều/Tắm Nước Ngọt.&nbsp;16h00:&nbsp;Quý khách quay lại đất liền, về Khách sạn nghỉ ngơi.<br><i><strong>18h30-20h30:</strong></i> Quý khách dùng cơm tối tại Nhà hàng. Tự do khám phá TP biển Nha Trang. Nghỉ đêm tại Nha Trang.</p><p><br><strong>NGÀY 03: NHA TRANG – ĐÀ LẠT&nbsp; &nbsp;(Ăn sáng, trưa, tối)</strong><br><i><strong>6h30 – 8h30:</strong></i> Quý khách dùng bữa sáng trong khách sạn. Sau đó, làm thủ tục trả phòng.</p><p><i><strong>9h00 – 12h30:</strong></i> Quý khách đi từ Nha Trang đến với TP. Đà Lạt mộng mơ.</p><p><i><strong>12h45-13h30:</strong></i> Quý khách dùng cơm trưa tại nhà hàng.</p><p><i><strong>14h00:</strong></i>&nbsp;Quý khách nhận phòng khách sạn, nghỉ ngơi.</p><p><i><strong>16h30</strong></i>:&nbsp;Xe đưa quý khách đi thăm quan <strong>Quảng trường Lâm Viên</strong>, thưởng thức hương vị cà phê Đà Lạt, dạo chợ mua sắm, thưởng thức sữa đậu nàng nóng, khoai nướng, cá nướng, dâu tây ,… hoặc đi xe đạp, xe ngựa dạo quanh Hồ Xuân Hương.&nbsp;</p><p><i><strong>18h30-19h30:</strong></i> Quý khách dùng cơm tối tại Nhà hàng.&nbsp;Nghỉ đêm ở Đà Lạt</p><p>&nbsp;</p><p><strong>NGÀY 04: ĐÀ LẠT – HÀ NỘI&nbsp; &nbsp;(Ăn sáng, trưa)</strong><br><i><strong>6h30 – 8h30:</strong></i>&nbsp;Sau khi ăn sáng trong khách sạn, xe và hdv đưa quý khách đi tham quan <strong>Nhà&nbsp;ga Đà Lạt</strong>&nbsp;- ga lâu đời nhất Đông Dương. Mua sắm đặc sản tại&nbsp;chợ Đà Lạt.</p><p><i><strong>11h30:</strong></i>&nbsp;Quý khách trả phòng khách sạn, dùng bữa trưa tại Nhà hàng.&nbsp;Xe và hướng dẫn viên đưa quý khách đến sân bay Đà Lạt, làm thủ tục đáp chuyến bay đi Hà Nội, dự kiến chuyến <strong>(VN1574 14:45 - 16:45).</strong><br>Đến sân bay Nội Bài,Quý khách về điểm hẹn ban đầu. Kết thúc chương trình tham quan.</p><p><strong>Ghi chú: Chương trình tham quan có thể được sắp xếp lại nhưng vẫn đảm bảo đủ điểm tham quan</strong></p><p><strong>Quý khách lưu ý: giờ bay có thể thay đổi theo hãng hàng không Vietnam Airlines, Similesve Travel sẽ cố gắng cùng quý khách hỗ trợ phương tiện và sắp xếp lại hành trình phù hợp!</strong></p>', 15, 'Nha Trang-Đà Lạt', 'Máy bay/Xe du lịch', 2, 7, 10, 'Hà Nội', 'towers-of-Po-Nagar_716179891.jpg'),
(30, 'TP.HCM - Sài Gòn Rong Ca', 799000, '<p>- Kết nối trải nghiệm 03 loại phương tiện vận chuyển chất lượng cao, thú vị , mới mẻ.</p><p>- Không gian selfie rộng mở, góc chụp ảnh độc đáo&nbsp;</p><p>- Góc Âm nhạc Live Acoustic đầy phiêu lãng&nbsp;</p><p>- Ẩm thực thương hiệu khẳng định đẳng cấp (tự chọn)</p>', '<p><strong>15h30:</strong> Hướng dẫn viên đón khách tại <strong>Văn phòng Similesve Travel</strong> <i>(102 Nguyễn Huệ, Quận 1).</i><br><strong>15h35:</strong> Quý khách cùng HDV tản bộ dọc Tượng Đài Bác – Nhà Hát Thành phố đón xe Buýt-hai-tầng bắt đầu chương trình dạo phố<br><strong>15h40: Nhà Hát Thành Phố - Đường Đồng Khởi / Catinat - </strong>Tượng đài Trần Hưng Đạo – Bảo tàng lịch sử - Bảo tàng chứng tích chiến tranh – phố Phạm Ngũ Lão – chợ Bến Thành – Dinh Độc lập – Nhà thờ Đức Bà – Nhà hát Thành phố - phố đi bộ Nguyễn Huệ - bến Nhà Rồng .<br>Trên xe chương trình văn nghệ bỏ túi theo ngẫu hứng song ca Sài Gòn. Kết thúc chuyến đi dạo xe buýt-hai-tầng tại bến Bạch Đằng.<br><strong>16h45:</strong> Tham quan<strong> Công viên Bạch Đằng </strong>– chụp hình check in sống ảo với công viên đẹp có góc rộng lạ<br><strong>17h05</strong>&nbsp;: Lên tàu sông di chuyển về làng Thanh Đa , ngắm nhìn sông Sài Gòn hai bên bờ sông và tòa nhà cao nhất Việt Nam&nbsp;‘Landmark 81’. Cập bến, có xe của Saigontourist đón khách đưa về làng Du Lịch Bình Quới để tham gia Buffet đặc biệt - <i>Khẩn hoang Nam Bộ </i>lúc 17h30.<br><strong>19h30</strong>&nbsp;: Xe &amp; HDV của Saigontourist đưa khách về lại <strong>Văn phòng Similesve Travel</strong> <i>(102 Nguyễn Huệ, Phường Bến Nghé, Quận 1, TP. Hồ Chí Minh). </i>Kết thúc chương trình</p><p><i><strong>Ghi chú:</strong></i> <i>Điểm tham quan có thể sắp xếp lại cho phù hợp mà vẫn bảo đảm đầy đủ nội dung chương trình.</i></p>', 8, 'Tp.Hồ Chí Minh', 'Xe bus 2 tầng', 5, 16, 6, 'Tp.Hồ Chí Minh', '81fb9cc7f5de11a6a757f8c7d0eeb425.jpg'),
(31, 'Tây Ninh - Sunworld Bà Đen', 1200000, '<p>Khởi hành theo yêu cầu - Hành trình về nguồn” là Di tích Chiến thắng Tua Hai và Trung ương cục miền Nam - nơi được mệnh danh là thủ đô kháng chiến của miền Nam</p><p>- Trải nghiệm cáp treo tại quần thể danh thắng Núi Bà Đen - ‘’nóc nhà Đông Nam Bộ’’</p>', '<p><strong>NGÀY&nbsp;01: TP. HỒ CHÍ MINH - TÂY NINH (Ăn sáng, trưa, chiều)</strong><br>Quý khách tập trung tại văn phòng của Lữ hành Saigontourist, xe và hướng dẫn&nbsp;đưa đoàn đến với Thành phố Tây Ninh, điểm dừng chân đầu tiên trong “hành trình về nguồn” là <strong>Di tích Chiến thắng Tua Hai</strong>, tại đây quý khách sẽ được tìm hiểu về lịch sử, hiện vật cũng như những bức tranh được tái hiện một cách sinh động, đem đến cho chúng ta cảm giác như được sống lại những năm tháng hào hùng của dân tộc trong cuộc đấu tranh tại chiến trường miền Nam. Tiếp tục hành trình, xe đưa đoàn đến <strong>Cửa khẩu Xa Mát</strong>, là cửa khẩu quốc tế trên tuyến đất liền Việt Nam - Campuchia, cửa ngõ của tỉnh Tây Ninh trong việc giao lưu thương mại, phát triển kinh tế hướng ngoại. Sau bữa trưa, đoàn đến với <strong>Trung ương cục miền Nam</strong> - nơi được mệnh danh là thủ đô kháng chiến của miền Nam, được Nhà nước công nhận là “Di tích quốc gia đặc biệt”. Căn cứ là cơ quan cao nhất chỉ đạo và lãnh đạo trực tiếp Cách mạng miền Nam như: Trung ương cục, mặt trận giải phóng dân tộc miền Nam, chính phủ cách mạng lâm thời Cộng hòa miền Nam Việt Nam. Buổi chiều trên đường về đoàn sẽ dừng chân tham quan <strong>vườn dâu tằm Ba Phong</strong> với hơn 1000 cây dâu tằm được trồng theo mô hình nông nghiệp hữu cơ tuần hoàn trên diện tích 2 ha, quý khách có thể trải nghiệm hái dâu và thưởng thức các loại đặc sản từ đầu ngay tại vườn như&nbsp;dâu tươi, dâu sấy, mật dâu, rượu dâu,...Nghỉ đêm tại Tây Ninh.</p><p>&nbsp;</p><p><strong>NGÀY&nbsp;02: TÂY NINH - TP. HỒ CHÍ MINH (Ăn sáng, trưa)</strong><br>Sau bữa sáng, quý khách trả phòng. Đoàn khởi hành đi tham quan, chiêm ngưỡng công trình <strong>Tòa Thánh Tây Ninh</strong> - một quần thể kiến trúc độc đáo, tìm hiểu về Đạo Cao Đài - tôn giáo có xuất xứ tại Việt Nam (tùy theo thời gian mà quý khách có thể tham quan phía bên trong và tham dự lễ cúng tứ thời). Tiếp tục hành hình đoàn sẽ đến với quần thể danh thắng <strong>Núi Bà Đen - ‘’nóc nhà Đông Nam Bộ’</strong>’. Đến với Nhà ga Bà Đen - được chứng nhận kỷ lục Guinness là nhà Ga lớn nhất thế giới, đoàn sẽ lần lượt trải nghiệm 2 tuyến cáp hiện đại:<br>-<strong>&nbsp;Tuyến cáp treo Chùa Hang</strong> - đưa quý khách đến Quần Thể Tâm Linh Chùa Bà: ở độ cao 350 mét giữa lưng chừng núi là quần thể kiến trúc hang động, chùa chiền mang nét đẹp thiên phú và nhân tạo với nhiều truyền thuyết ly kỳ, bí ẩn gồm Chùa Bà, Chùa Hang, Động Hoàng Chung, Chùa Trung, Chùa Mới…<br>-&nbsp;<strong>Tuyến cáp treo Đình Đồng - Tâm An</strong> kết nối Quần Thể Tâm Linh Chùa Bà lên đến khu vực đỉnh núi Bà - ngọn núi cao nhất Đông Nam Bộ, check in mốc tọa độ 986m, chiêm bái tượng phật bà bằng đông cao nhất Châu Á, ngắm nhìn toàn cảnh Tây Ninh và hồ Dầu Tiếng từ trên cao.<br>Sau khi <strong>thưởng thức bữa trưa buffet</strong>, đoàn xuống núi bằng <strong>Tuyến cáp treo Vân Sơn</strong> - đưa quý khách từ đỉnh trở lại chân núi tại Nhà ga Bà Đen. Trước khi khởi hành về lại TP.HCM, đoàn tham quan, mua sắm tại <strong>cơ sở trà Hoàn Ngọc 7 Nga</strong> - thương hiệu nổi tiếng tại Tây Ninh với các sản phẩm thảo dược: trà hoàn ngọc, đông trùng hạ thảo, yến sào...Xe đón đoàn về TP.HCM, đưa quý khách về văn phòng lữ hành Saigontourist số 19 Hoàng Việt, Phường 4, Quận Tân Bình. Kết thúc chương trình.</p><p><br>&nbsp;</p>', 7, 'Tây Ninh', 'Ô tô/Xe du lịch', 5, 8, 9, 'Tp.Hồ Chí Minh', 'CaoDaiTemple_381491608.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tuor_ngay_xuat_phat`
--

CREATE TABLE `tuor_ngay_xuat_phat` (
  `id_trunggian_nxp` int(11) NOT NULL,
  `id_tuor` int(10) NOT NULL,
  `id_ngay` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tuor_ngay_xuat_phat`
--

INSERT INTO `tuor_ngay_xuat_phat` (`id_trunggian_nxp`, `id_tuor`, `id_ngay`) VALUES
(12, 18, 7),
(37, 24, 14),
(38, 24, 15),
(39, 25, 14),
(41, 25, 15),
(44, 26, 18),
(45, 21, 17),
(46, 21, 18),
(47, 21, 19),
(48, 18, 16),
(49, 18, 20),
(50, 19, 15),
(51, 0, 24),
(52, 0, 24),
(53, 19, 24),
(54, 18, 22),
(55, 19, 25),
(56, 19, 21),
(58, 22, 21),
(59, 22, 19),
(60, 22, 27),
(61, 23, 19),
(62, 23, 20),
(63, 23, 22),
(64, 23, 23),
(65, 26, 24),
(66, 26, 31),
(67, 26, 32),
(68, 27, 27),
(69, 27, 30),
(70, 27, 31),
(71, 28, 14),
(72, 28, 22),
(73, 28, 23),
(74, 28, 23),
(75, 29, 32),
(77, 20, 18),
(78, 20, 20),
(79, 30, 22),
(80, 30, 23),
(81, 30, 25),
(83, 31, 25),
(84, 31, 26),
(85, 31, 29),
(86, 24, 23);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`id_binh_luan`),
  ADD KEY `fk_binhluan_nguoidung` (`id_nguoi_dung`),
  ADD KEY `fk_binhluan_tuor` (`id_tuor`);

--
-- Indexes for table `danhmuc_mien`
--
ALTER TABLE `danhmuc_mien`
  ADD PRIMARY KEY (`id_mien`);

--
-- Indexes for table `danhmuc_mua`
--
ALTER TABLE `danhmuc_mua`
  ADD PRIMARY KEY (`id_mua`);

--
-- Indexes for table `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`id_don_hang`),
  ADD KEY `id_tuor` (`id_tuor`),
  ADD KEY `id_nguoi_dung` (`id_nguoi_dung`);

--
-- Indexes for table `hinh_anh`
--
ALTER TABLE `hinh_anh`
  ADD PRIMARY KEY (`id_hinh_anh`),
  ADD KEY `fk_hinhanh_tuor` (`id_tour`);

--
-- Indexes for table `ngay_xuat_phat`
--
ALTER TABLE `ngay_xuat_phat`
  ADD PRIMARY KEY (`id_ngay`);

--
-- Indexes for table `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  ADD PRIMARY KEY (`id_nguoi_dung`);

--
-- Indexes for table `thoi_gian`
--
ALTER TABLE `thoi_gian`
  ADD PRIMARY KEY (`id_thoi_gian`);

--
-- Indexes for table `tuor`
--
ALTER TABLE `tuor`
  ADD PRIMARY KEY (`id_tuor`),
  ADD KEY `fk_tour_mua` (`id_mua`),
  ADD KEY `fk_tuor_mien` (`id_mien`),
  ADD KEY `fk_tuor_thoi_gian` (`id_thoi_gian`);

--
-- Indexes for table `tuor_ngay_xuat_phat`
--
ALTER TABLE `tuor_ngay_xuat_phat`
  ADD PRIMARY KEY (`id_trunggian_nxp`),
  ADD KEY `Fk_tour_nxp` (`id_tuor`),
  ADD KEY `Fk_nxp_tuor` (`id_ngay`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `id_binh_luan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `danhmuc_mien`
--
ALTER TABLE `danhmuc_mien`
  MODIFY `id_mien` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `danhmuc_mua`
--
ALTER TABLE `danhmuc_mua`
  MODIFY `id_mua` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `id_don_hang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT for table `hinh_anh`
--
ALTER TABLE `hinh_anh`
  MODIFY `id_hinh_anh` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `ngay_xuat_phat`
--
ALTER TABLE `ngay_xuat_phat`
  MODIFY `id_ngay` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  MODIFY `id_nguoi_dung` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `thoi_gian`
--
ALTER TABLE `thoi_gian`
  MODIFY `id_thoi_gian` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tuor`
--
ALTER TABLE `tuor`
  MODIFY `id_tuor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tuor_ngay_xuat_phat`
--
ALTER TABLE `tuor_ngay_xuat_phat`
  MODIFY `id_trunggian_nxp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `fk_binhluan_nguoidung` FOREIGN KEY (`id_nguoi_dung`) REFERENCES `nguoi_dung` (`id_nguoi_dung`),
  ADD CONSTRAINT `fk_binhluan_tuor` FOREIGN KEY (`id_tuor`) REFERENCES `tuor` (`id_tuor`);

--
-- Constraints for table `don_hang`
--
ALTER TABLE `don_hang`
  ADD CONSTRAINT `don_hang_ibfk_1` FOREIGN KEY (`id_tuor`) REFERENCES `tuor` (`id_tuor`),
  ADD CONSTRAINT `don_hang_ibfk_2` FOREIGN KEY (`id_nguoi_dung`) REFERENCES `nguoi_dung` (`id_nguoi_dung`);

--
-- Constraints for table `hinh_anh`
--
ALTER TABLE `hinh_anh`
  ADD CONSTRAINT `fk_hinhanh_tuor` FOREIGN KEY (`id_tour`) REFERENCES `tuor` (`id_tuor`);

--
-- Constraints for table `tuor`
--
ALTER TABLE `tuor`
  ADD CONSTRAINT `fk_tour_mua` FOREIGN KEY (`id_mua`) REFERENCES `danhmuc_mua` (`id_mua`),
  ADD CONSTRAINT `fk_tuor_mien` FOREIGN KEY (`id_mien`) REFERENCES `danhmuc_mien` (`id_mien`),
  ADD CONSTRAINT `fk_tuor_thoi_gian` FOREIGN KEY (`id_thoi_gian`) REFERENCES `thoi_gian` (`id_thoi_gian`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
