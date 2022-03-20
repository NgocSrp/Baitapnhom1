-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 25, 2022 lúc 10:04 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ban_dien_thoai`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `hinh` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `rong` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `cao` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id`, `hinh`, `rong`, `cao`) VALUES
(1, 'banner.png', '100%', '300px');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `id` int(11) NOT NULL,
  `ten_nguoi_mua` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `dien_thoai` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `hang_duoc_mua` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoa_don`
--

INSERT INTO `hoa_don` (`id`, `ten_nguoi_mua`, `email`, `dia_chi`, `dien_thoai`, `noi_dung`, `hang_duoc_mua`) VALUES
(2, 'Minh Ngọc', 'leminhngoc223@gmail.com', 'Nghe an', '0327908500', 'aaa', '2[|||]1[|||||]'),
(4, 'Lương Thị Mỹ Hương', 'ltmh1234@gmail.com', 'TP.Vinh - Nghệ An', '123456789', 'Mua điện thoại', '7[|||]1[|||||]8[|||]1[|||||]'),
(5, 'Minh Ngọc', 'leminhngoc223@gmail.com', 'aaa', '0327908500', 'aaaaaaa', '9[|||]1[|||||]');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu_doc`
--

CREATE TABLE `menu_doc` (
  `id` int(11) NOT NULL,
  `ten` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `thuoc_menu` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menu_doc`
--

INSERT INTO `menu_doc` (`id`, `ten`, `thuoc_menu`) VALUES
(1, 'Điện thoại Iphone (Apple)', 1),
(2, 'Điện thoại Oppo', 2),
(3, 'Điện thoại Xiaomi', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu_ngang`
--

CREATE TABLE `menu_ngang` (
  `id` int(11) NOT NULL,
  `ten` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `loai_menu` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menu_ngang`
--

INSERT INTO `menu_ngang` (`id`, `ten`, `noi_dung`, `loai_menu`) VALUES
(1, 'Giới thiệu', 'Chào mừng mọi người đến với website của mình<br><br>\r\nMình tên là: Lê Minh Ngọc<br><br>\r\nMong mọi người ủng hộ mình trong mua covid này, Thăn kiu!!!<br><br>\r\n', ''),
(2, 'Sản phẩm', '', 'san_pham'),
(3, 'Hướng dẫn mua hàng', '- Mọi người chỉ cần ấn vào mục \"Sản Phẩm\"<br><br>\r\n- Sau đó ấn vào sản phẩm cần mua<br><br>\r\n- Thêm vào giỏ hàng <br><br>\r\n- Nhập thông tin thanh toán và thanh toán thôi là xong liền nè!!\r\n', ''),
(4, 'Cách mua hàng', '- Bạn có thể chọn vào mua hàng trên web này<br><br>\r\n- Hoặc cũng có thể đến tại cửa hàng của shop ở Châu Thái - Quỳ Hợp - Nghệ An.\r\n', ''),
(5, 'Liên hệ', 'Bạn có thể liên hệ qua sdt: 023.790.8500<br><br>\r\nHoặc qua <a href=\"https://www.facebook.com/NgocSrp.H\">Facebook mình nè</a><br><br>\r\n', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `id` int(11) NOT NULL,
  `noi_bat` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `thuoc_menu` int(255) NOT NULL,
  `ten` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `gia` int(11) NOT NULL,
  `hinh_anh` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `trang_chu` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `sap_xep_trang_chu` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`id`, `noi_bat`, `thuoc_menu`, `ten`, `gia`, `hinh_anh`, `noi_dung`, `trang_chu`, `sap_xep_trang_chu`) VALUES
(1, '', 1, 'Iphone 13 128GB', 27000000, 'ip13128GB.PNG', '																																																																			Màn hình:     OLED6.1\"Super Retina XDR\r\n<br><br>\r\nHệ điều hành: iOS 15\r\n<br><br>\r\n\r\nCamera sau:   2 camera 12 MP<br><br>\r\n\r\nCamera trước: 12 MP <br><br>\r\n\r\nChip:         Apple A15 Bionic <br><br>\r\n\r\nRAM:          4 GB <br><br>\r\n\r\nBộ nhớ trong: 128 GB <br><br>\r\n\r\nSIM:          1 Nano SIM & 1 eSIMHỗ trợ 5G <br><br>\r\n\r\nPin, Sạc:     3240 mAh20 W																																																																						', 'co', 1),
(2, 'co', 1, 'Iphone 13 Promax', 34000000, 'ip13promax.PNG', '																																																Màn hình:  OLED6.7\"Super Retina XDR <br><br>\r\nHệ điều hành:  iOS 15 <br><br>\r\nCamera sau:  3 camera 12 MP <br><br>\r\nCamera trước:  12 MP <br><br>\r\nChip:   Apple A15 Bionic<br><br>\r\nRAM:   6 GB<br><br>\r\nBộ nhớ trong:   128 GB<br><br>\r\nSIM:   1 Nano SIM & 1 eSIM Hỗ trợ 5G <br><br>\r\nPin, Sạc:   4352 mAh20 W																																										', 'co', 1),
(3, '', 1, 'Iphone 12 Mini', 16490000, 'iphone12mini.PNG', 'Màn hình:   OLED5.4\"Super Retina XDR <br><br>\r\nHệ điều hành:   iOS 14 <br><br>\r\nCamera sau:   2 camera 12 MP<br><br>\r\nCamera trước:   12 MP<br><br>\r\nChip:   Apple A14 Bionic<br><br>\r\nRAM:   4 GB <br><br>\r\nBộ nhớ trong:   64 GB<br><br>\r\nSIM:   1 Nano SIM & 1 eSIM Hỗ trợ 5G<br><br>\r\nPin, Sạc:   2227 mAh20 W', 'co', 1),
(4, '', 2, 'Điện thoại OPPO Reno6 Z 5G', 9490000, 'OPPOReno6Z5G.PNG', 'Màn hình:  AMOLED6.43\"Full HD+<br><br>\r\nHệ điều hành:   Android 11<br><br>\r\nCamera sau:   Chính 64 MP & Phụ 8 MP, 2 MP<br><br>\r\nCamera trước:   32 MP<br><br>\r\nChip:   MediaTek Dimensity 800U 5G<br><br>\r\nRAM:   8 GB<br><br>\r\nBộ nhớ trong:   128 GB<br><br>\r\nSIM:   2 Nano SIMHỗ trợ 5G<br><br>\r\nPin, Sạc:   4310 mAh30W', '', 2),
(5, '', 2, 'Điện thoại OPPO A95', 6990000, 'OppoA95.PNG', 'Màn hình:   AMOLED6.43\"Full HD+<br><br>\r\nHệ điều hành:   Android 11<br><br>\r\nCamera sau:   Chính 48 MP & Phụ 2 MP, 2 MP<br><br>\r\nCamera trước:   16 MP<br><br>\r\nChip:   Snapdragon 662<br><br>\r\nRAM:   8 GB<br><br>\r\nBộ nhớ trong:   128 GB<br><br>\r\nSIM:   2 Nano SIM Hỗ trợ 4G<br><br>\r\nPin, Sạc:   5000 mAh33 W', '', 2),
(6, '', 2, 'Điện thoại OPPO Find X3 Pro 5G', 23990000, 'OppoFindX3Pro5G.PNG', 'Màn hình:   AMOLED6.7\"Quad HD+ (2K+)<br><br>\r\nHệ điều hành:   Android 11<br><br>\r\nCamera sau:   Chính 50 MP & Phụ 50 MP, 13 MP, 3 MP <br><br>\r\nCamera trước:   32 MP<br><br>\r\nChip:   Snapdragon 888<br><br>\r\nRAM:   12 GB<br><br>\r\nBộ nhớ trong:   256 GB<br><br>\r\nSIM:   2 Nano SIM Hỗ trợ 5G<br><br>\r\nPin, Sạc:   4500 mAh65 W', '', 2),
(7, 'co', 3, 'Điện thoại Xiaomi Black Shark 4', 9990000, 'xiaomiblackshark4.png', 'Màn hình:   AMOLED6.67\"Full HD+<br><br>\r\nHệ điều hành:   Android 11<br><br>\r\nCamera sau:   Chính 108 MP & Phụ 8 MP, 5 MP<br><br>\r\nCamera trước:   16 MP<br><br>\r\nChip:   MediaTek Dimensity 1200<br><br>\r\nRAM:   8 GB<br><br>\r\nBộ nhớ trong:   256 GB<br><br>\r\nSIM:   2 Nano SIM Hỗ trợ 5G<br><br>\r\nPin, Sạc:   5000 mAh67 W', 'co', 3),
(8, 'co', 3, 'Điện thoại Xiaomi 11T 5G 256GB ', 11990000, 'Xiaomi11T5G256GB.png', 'Màn hình:   AMOLED6.67\"Full HD+<br><br>\r\nHệ điều hành:   Android 11<br><br>\r\nCamera sau:   Chính 108 MP & Phụ 8 MP, 5 MP<br><br>\r\nCamera trước:   16 MP<br><br>\r\nChip:    ediaTek Dimensity 1200<br><br>\r\nRAM:   8 GB<br><br>\r\nBộ nhớ trong:   256 GB<br><br>\r\nSIM:   2 Nano SIM Hỗ trợ 5G<br><br>\r\nPin, Sạc:   5000 mAh67 W', 'co', 3),
(9, '', 3, 'Điện thoại Xiaomi Mi 11 5G ', 21990000, 'XiaomiMi115G.png', 'Màn hình:   AMOLED6.81\"Quad HD+ (2K+)<br><br>\r\nHệ điều hành:   Android 11<br><br>\r\nCamera sau:   Chính 108 MP & Phụ 13 MP, 5 MP<br><br>\r\nCamera trước:   20 MP<br><br>\r\nChip:   Snapdragon 888<br><br>\r\nRAM:   8 GB<br><br>\r\nBộ nhớ trong:   256 GB<br><br>\r\nSIM:   2 Nano SIM Hỗ trợ 5G<br><br>\r\nPin, Sạc:   4600 mAh55 W', '', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slideshow`
--

CREATE TABLE `slideshow` (
  `id` int(11) NOT NULL,
  `hinh` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `lien_ket` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slideshow`
--

INSERT INTO `slideshow` (`id`, `hinh`, `lien_ket`) VALUES
(1, 'a_1.PNG', '#'),
(2, 'a_2.PNG', '#'),
(3, 'a_3.PNG', '#');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thong_tin_quan_tri`
--

CREATE TABLE `thong_tin_quan_tri` (
  `id` int(11) NOT NULL,
  `tai_khoan` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thong_tin_quan_tri`
--

INSERT INTO `thong_tin_quan_tri` (`id`, `tai_khoan`, `mat_khau`) VALUES
(1, 'minhngoc', '123');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menu_doc`
--
ALTER TABLE `menu_doc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menu_ngang`
--
ALTER TABLE `menu_ngang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thong_tin_quan_tri`
--
ALTER TABLE `thong_tin_quan_tri`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `menu_doc`
--
ALTER TABLE `menu_doc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `menu_ngang`
--
ALTER TABLE `menu_ngang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `slideshow`
--
ALTER TABLE `slideshow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `thong_tin_quan_tri`
--
ALTER TABLE `thong_tin_quan_tri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
