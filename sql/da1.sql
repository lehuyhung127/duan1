-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 15, 2023 lúc 02:03 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `da1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(10) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id`, `image`) VALUES
(15, '641c2e277a45e-donghocaocap_2_1280x720-800-resize.jpg'),
(18, '641c711c6539f-Banner-dong-ho-glu-moi-01_2.jpg'),
(19, '641c712685d3c-maxresdefault.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `total_price` decimal(10,0) DEFAULT NULL,
  `status` int(11) DEFAULT 0 COMMENT '0 là đang chờ xác nhận',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `fullname`, `phone`, `address`, `total_price`, `status`, `created_at`, `updated_at`) VALUES
(22, 'Đinh Hải Dương', '0363672971', 'Số nhà 1C, Ngõ 24, Đường Không Tên, Phường Không Tên, Hà Nội', '1175', 1, '2023-04-05 06:01:43', '2023-04-06 03:06:40'),
(23, 'Vũ Nguyên Hướng', '0123456789', 'FPoly, Hà Nội, Việt Nam', '555', 1, '2023-04-05 06:02:07', '2023-04-05 06:02:07'),
(24, 'Phùng Thị Hoa', '9876543210', 'Hồ Tây, Mỹ Tho, Mỹ Đình', '830', 0, '2023-04-05 06:04:33', '2023-04-05 16:50:38'),
(26, 'Đinh Hải Dương', '9876543210', 'Hồ Tây, Mỹ Tho, Mỹ Đình', '1979', 1, '2023-04-08 03:39:49', '2023-04-08 08:04:39'),
(45, 'Phùng Hoa Trùm Code', '0123456789', 'Xa tận chân trời, gần ngay trước mắt', '1947', 1, '2023-04-08 08:03:30', '2023-04-09 14:22:14'),
(46, 'Lê Huy Hùng', '5649873210', 'Gần tận chân trời xa ngay trước mắt', '2041', 0, '2023-04-13 13:58:06', '2023-04-13 13:58:06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_detail`
--

CREATE TABLE `bill_detail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `variation_id` bigint(20) UNSIGNED NOT NULL,
  `price` decimal(10,0) UNSIGNED DEFAULT NULL,
  `quantity` int(10) UNSIGNED DEFAULT NULL,
  `unit_price` decimal(10,0) UNSIGNED DEFAULT NULL,
  `bill_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill_detail`
--

INSERT INTO `bill_detail` (`id`, `variation_id`, `price`, `quantity`, `unit_price`, `bill_id`) VALUES
(25, 51, '369', 1, '369', 22),
(26, 23, '348', 2, '696', 22),
(27, 52, '391', 1, '391', 22),
(28, 51, '369', 1, '369', 23),
(29, 53, '350', 1, '350', 23),
(30, 27, '396', 1, '396', 24),
(31, 22, '501', 1, '501', 24),
(32, 43, '119', 1, '119', 26),
(33, 1, '633', 3, '1898', 26),
(34, 50, '500', 1, '500', 45),
(35, 36, '380', 1, '380', 45),
(36, 48, '543', 2, '1086', 45),
(37, 41, '540', 2, '1080', 46),
(38, 43, '119', 2, '238', 46),
(39, 42, '398', 2, '795', 46);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `brands`
--

INSERT INTO `brands` (`id`, `name`) VALUES
(6, 'Patek Philippe'),
(7, 'Audemars Piguet'),
(8, 'Vacheron Constantin'),
(9, 'TAG Heuer'),
(10, 'A.Lange & Söhne'),
(11, 'Q&Q'),
(12, 'Mido'),
(13, 'Omega'),
(14, 'Teintop'),
(15, 'Skmei'),
(16, 'Casio');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `color`
--

CREATE TABLE `color` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `color`
--

INSERT INTO `color` (`id`, `name`) VALUES
(3, 'Bạc'),
(4, 'Đen'),
(5, 'Vàng'),
(6, 'Xanh Ngọc'),
(7, 'Đen Đỏ'),
(8, 'Trắng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `detail` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `description`, `detail`, `created_at`, `updated_at`, `brand_id`, `status`) VALUES
(8, 'Đồng hồ CITIZEN', '643a466e11605-512a1b916859a607ff48-1649663309503.jpg', '<p>Xu hướng thiết kế ch&iacute;nh của đồng hồ Citizen l&agrave; đơn giản v&agrave; thanh lịch. Citizen lu&ocirc;n ch&uacute; trọng đến việc đổi mới v&agrave; tạo sự phong ph&uacute; cho c&aacute;c mẫu thiết kế. C&aacute;c chi tiết cũng được Citizen đầu tư kỹ lưỡng trong kh&acirc;u chế t&aacute;c.</p>\r\n\r\n<div class=\"ddict_btn\" style=\"left:935.175px; top:10px\"><img src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/48.png\" /></div>\r\n\r\n<div class=\"ddict_btn\" style=\"left:930.913px; top:37px\"><img src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/48.png\" /></div>\r\n', '<p>&nbsp;Đường k&iacute;nh mặt của mẫu&nbsp;<a href=\"https://www.thegioididong.com/dong-ho-deo-tay/citizen-nh8391-51x-nam\">đồng hồ CITIZEN 40 mm Nam NH8391-51X</a>&nbsp;n&agrave;y l&agrave;&nbsp;<strong>40 mm</strong>, độ rộng d&acirc;y l&agrave;&nbsp;<strong>20 mm</strong>.Xu hướng thiết kế ch&iacute;nh của đồng hồ Citizen l&agrave; đơn giản v&agrave; thanh lịch. Citizen lu&ocirc;n ch&uacute; trọng đến việc đổi mới v&agrave; tạo sự phong ph&uacute; cho c&aacute;c mẫu thiết kế. C&aacute;c chi tiết cũng được Citizen đầu tư kỹ lưỡng trong kh&acirc;u chế t&aacute;c.</p>\r\n', '2023-03-18 00:49:32', '2023-04-15 06:38:38', 6, 0),
(9, 'Đồng hồ Esprit ', '643a468a5f44d-esprit-es1l251m0065-nu1-org.jpg', '<p>Thanh lịch v&agrave; sang trọng Esprit lu&ocirc;n đặt chất lượng sản phẩm l&ecirc;n h&agrave;ng đầu. C&aacute;c thiết kế đến từ&nbsp;<a href=\"http://www.thegioididong.com/dong-ho-deo-tay\">đồng hồ</a>&nbsp;Esprit mang đậm chất trẻ, sự thanh lịch nhưng kh&ocirc;ng k&eacute;m phần sang trọng, ph&ugrave; hợp với thị hiếu của giới trẻ hiện nay.</p>\r\n\r\n<div class=\"ddict_btn\" style=\"left:35.175px; top:62px\"><img src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/48.png\" /></div>\r\n\r\n<div class=\"ddict_btn\" style=\"left:933.463px; top:32px\"><img src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/48.png\" /></div>\r\n', '<p>Đồng hồ Esprit 30 mm Nữ ES1L281L1015 thuộc thương hiệu Esprit của Mỹ.&nbsp;Thanh lịch v&agrave; sang trọng Esprit lu&ocirc;n đặt chất lượng sản phẩm l&ecirc;n h&agrave;ng đầu. C&aacute;c thiết kế đến từ&nbsp;<a href=\"http://www.thegioididong.com/dong-ho-deo-tay\">đồng hồ</a>&nbsp;Esprit mang đậm chất trẻ, sự thanh lịch nhưng kh&ocirc;ng k&eacute;m phần sang trọng, ph&ugrave; hợp với thị hiếu của giới trẻ hiện nay.</p>\r\n', '2023-03-18 00:50:37', '2023-04-15 06:39:06', 7, 0),
(10, 'Đồng hồ Elle Rive Droite', '64155f697a009-dh3.jpg', '<p>Hiện đại v&agrave; sang trọng. Đồng hồ ELLE l&agrave; một trong những thương hiệu nổi tiếng với nhiều mẫu m&atilde;&nbsp;<a href=\"http://www.thegioididong.com/dong-ho-deo-tay\">đồng hồ</a>&nbsp;đầy thời thượng v&agrave; được nhiều người ưa chuộng. Nhắc đến thương hiệu ELLE l&agrave; nhắc đến thương hiệu thời trang của sự s&aacute;ng tạo - c&aacute; t&iacute;nh v&agrave; sự đổi mới cho vẻ đẹp đương đại.</p>\r\n\r\n<div class=\"ddict_btn\" style=\"left:932.112px; top:-2px\"><img src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/48.png\" /></div>\r\n', '<p>Elle l&agrave; một trong những thương hiệu&nbsp;<a href=\"https://www.thegioididong.com/dong-ho\" target=\"_blank\" title=\"Xem thêm các mẫu đồng hồ tại Thế Giới Di Động\">đồng hồ</a>&nbsp;nổi tiếng uy t&iacute;n đến từ Ph&aacute;p hiện đang b&aacute;n chạy tr&ecirc;n thị trường Việt Nam. Mẫu thiết kế n&agrave;y sẽ l&agrave; sự lựa chọn ph&ugrave; hợp cho c&aacute;c qu&yacute; c&ocirc; sở hữu phong c&aacute;ch sang trọng v&agrave; thời thượng.&nbsp;Hiện đại v&agrave; sang trọng. Đồng hồ ELLE l&agrave; một trong những thương hiệu nổi tiếng với nhiều mẫu m&atilde;&nbsp;<a href=\"http://www.thegioididong.com/dong-ho-deo-tay\">đồng hồ</a>&nbsp;đầy thời thượng v&agrave; được nhiều người ưa chuộng. Nhắc đến thương hiệu ELLE l&agrave; nhắc đến thương hiệu thời trang của sự s&aacute;ng tạo - c&aacute; t&iacute;nh v&agrave; sự đổi mới cho vẻ đẹp đương đại.</p>\r\n', '2023-03-18 00:51:21', '2023-04-08 07:21:00', 9, 0),
(11, 'Đồng hồ Orient ', '64155fb5a7eed-dh4.jpg', '<p>Sang trọng v&agrave; đẳng cấp. Đồng hồ Orient đem đến những sản phẩm ấn tượng chinh phục người nh&igrave;n một c&aacute;ch nhanh ch&oacute;ng. Đồng hồ Orient với những chất liệu cao cấp b&oacute;ng bẩy n&acirc;ng tầm đẳng cấp cho người sở hữu, ph&ugrave; hợp với doanh nh&acirc;n th&agrave;nh đạt, d&acirc;n văn ph&ograve;ng hay c&aacute;c gi&aacute;m đốc c&ocirc;ng ty. Phong c&aacute;ch thời thượng, sang trọng đầy sức thu h&uacute;t đến từ đồng hồ Orient chắc chắn sẽ khiến bạn lu&ocirc;n h&atilde;nh diện với những người xung quanh.</p>\r\n\r\n<div class=\"ddict_btn\" style=\"left:921.638px; top:27px\"><img src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/48.png\" /></div>\r\n', '<p>Chất liệu d&acirc;y đeo được l&agrave;m từ th&eacute;p kh&ocirc;ng gỉ - sang trọng v&agrave; chống ăn m&ograve;n cao, tạo cảm gi&aacute;c m&aacute;t tay cho người d&ugrave;ng khi đeo.&nbsp;Sang trọng v&agrave; đẳng cấp. Đồng hồ Orient đem đến những sản phẩm ấn tượng chinh phục người nh&igrave;n một c&aacute;ch nhanh ch&oacute;ng. Đồng hồ Orient với những chất liệu cao cấp b&oacute;ng bẩy n&acirc;ng tầm đẳng cấp cho người sở hữu, ph&ugrave; hợp với doanh nh&acirc;n th&agrave;nh đạt, d&acirc;n văn ph&ograve;ng hay c&aacute;c gi&aacute;m đốc c&ocirc;ng ty. Phong c&aacute;ch thời thượng, sang trọng đầy sức thu h&uacute;t đến từ đồng hồ Orient chắc chắn sẽ khiến bạn lu&ocirc;n h&atilde;nh diện với những người xung quanh.</p>\r\n', '2023-03-18 00:52:37', '2023-04-08 07:20:40', 10, 0),
(12, 'Đồng hồ Titoni', '64155fe7a1c3e-dh5.jpg', '<p>Cổ điển v&agrave; sang trọng Titoni c&oacute; sứ mệnh l&agrave; chế t&aacute;c ra những chiếc đồng hồ tinh xảo với độ ch&iacute;nh x&aacute;c cao, thiết kế đẹp mắt ở xưởng sản xuất tại Grenchen, Thụy Sĩ.&nbsp;Đồng hồ được sản xuất theo c&aacute;c y&ecirc;u cầu, quy định khắt khe Swiss-made. Swiss-made l&agrave; cốt l&otilde;i trong suốt qu&aacute; tr&igrave;nh s&aacute;ng tạo v&agrave; ph&aacute;t triển của Titoni, từ thiết kế, sự s&aacute;ng tạo cho đến những c&ocirc;ng nghệ hiện đại.</p>\r\n\r\n<div class=\"ddict_btn\" style=\"left:931.112px; top:32px\"><img src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/48.png\" /></div>\r\n', '<p>Mẫu&nbsp;<a href=\"https://www.thegioididong.com/dong-ho-deo-tay-titoni\" target=\"_blank\" title=\"Đồng hồ Titoni chính hãng, giá rẻ, bán tại Thế Giới Di Động\">đồng hồ Titoni</a>&nbsp;thời thượng v&agrave; đẳng cấp, thương hiệu nổi tiếng d&agrave;nh cho c&aacute;c qu&yacute; &ocirc;ng sang trọng.&nbsp;<a href=\"https://www.thegioididong.com/dong-ho-deo-tay/titoni-83709-sy-500-nam\">Đồng hồ Titoni 40 mm Nam 83709 SY-500</a>&nbsp;nổi bật với thiết kế sang trọng v&agrave; cực k&igrave; tinh tế.&nbsp;Cổ điển v&agrave; sang trọng Titoni c&oacute; sứ mệnh l&agrave; chế t&aacute;c ra những chiếc đồng hồ tinh xảo với độ ch&iacute;nh x&aacute;c cao, thiết kế đẹp mắt ở xưởng sản xuất tại Grenchen, Thụy Sĩ.&nbsp;Đồng hồ được sản xuất theo c&aacute;c y&ecirc;u cầu, quy định khắt khe Swiss-made. Swiss-made l&agrave; cốt l&otilde;i trong suốt qu&aacute; tr&igrave;nh s&aacute;ng tạo v&agrave; ph&aacute;t triển của Titoni, từ thiết kế, sự s&aacute;ng tạo cho đến những c&ocirc;ng nghệ hiện đại.</p>\r\n', '2023-03-18 00:53:27', '2023-04-15 06:36:31', 10, 0),
(13, 'Q&Q M197J001Y - Đồng Hồ Nữ - Pin', '64157692211e0-M197J001Y-1650447291125.jpg', '<p>Quartz - K&iacute;nh Kho&aacute;ng - Size Mặt 38mm - Bảo H&agrave;nh 5 Năm - Ch&iacute;nh H&atilde;ng 100%</h1>\r\n', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>SKU/UPC/MPN</strong></td>\r\n			<td>M197J001Y</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Loại đồng hồ</strong></td>\r\n			<td>\r\n			<h3><a href=\"https://www.watchstore.vn/collections/dong-ho-nu-chinh-hang\">Đồng hồ nữ</a></h3>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>D&ograve;ng m&aacute;y</strong></td>\r\n			<td>\r\n			<h3><a href=\"https://www.watchstore.vn/collections/dong-ho-pin-quartz-chinh-hang\">Pin / Quartz</a></h3>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Chất liệu k&iacute;nh</strong></td>\r\n			<td>K&iacute;nh kho&aacute;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Chất liệu d&acirc;y</strong></td>\r\n			<td>D&acirc;y cao su</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Độ chịu nước</strong></td>\r\n			<td>\r\n			<h3><a href=\"https://www.watchstore.vn/blogs/news/chi-so-chong-nuoc-3atm-la-gi-doi-voi-dong-ho-deo-tay-252\">3 atm</a></h3>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Size mặt</strong></td>\r\n			<td>38mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Xuất xứ</strong></td>\r\n			<td>\r\n			<h3><a href=\"https://www.watchstore.vn/collections/dong-ho-nhat-ban-chinh-hang\">Đồng hồ Nhật</a></h3>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Chất liệu vỏ</strong></td>\r\n			<td>Vỏ th&eacute;p kh&ocirc;ng gỉ</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>H&igrave;nh dạng</strong></td>\r\n			<td>Mặt vu&ocirc;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>M&agrave;u vỏ</strong></td>\r\n			<td>Bạc</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>M&agrave;u mặt</strong></td>\r\n			<td>Mặt đen</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '2023-03-18 01:14:14', '2023-03-24 10:27:50', 11, 0),
(14, 'Mido M024.428.16.051.00 ', '6415769fc148b-M024.428.16.051.00-2-1639326084436.jpg', '<p>Đồng Hồ Nam - Cơ - Automatic - K&iacute;nh Sapphire - Size Mặt 40mm - Bảo H&agrave;nh 5 Năm - Ch&iacute;nh H&atilde;ng 100%</p>\r\n', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>hương hiệu</strong></td>\r\n			<td>\r\n			<h3><a href=\"https://www.watchstore.vn/collections/dong-ho-mido-chinh-hang\">Đồng Hồ Mido</a></h3>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>SKU/UPC/MPN</strong></td>\r\n			<td>M024.428.16.051.00</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Loại đồng hồ</strong></td>\r\n			<td>\r\n			<h3><a href=\"https://www.watchstore.vn/collections/dong-ho-nam-chinh-hang\">Đồng hồ nam</a></h3>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>D&ograve;ng m&aacute;y</strong></td>\r\n			<td>\r\n			<h3><a href=\"https://www.watchstore.vn/collections/dong-ho-co-automatic\">Cơ - Automatic</a></h3>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Chất liệu k&iacute;nh</strong></td>\r\n			<td>K&iacute;nh Sapphire</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Chất liệu d&acirc;y</strong></td>\r\n			<td>\r\n			<h3><a href=\"https://www.watchstore.vn/collections/dong-ho-day-da\">D&acirc;y da</a></h3>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Độ chịu nước</strong></td>\r\n			<td>\r\n			<h3><a href=\"https://www.watchstore.vn/blogs/news/chong-nuoc-5atm-la-gi--di-tam--di-boi-co-sao-khong--208\">5 atm</a></h3>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Size mặt</strong></td>\r\n			<td>40mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Chất liệu vỏ</strong></td>\r\n			<td>Vỏ th&eacute;p kh&ocirc;ng gỉ</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>H&igrave;nh dạng</strong></td>\r\n			<td>Mặt tr&ograve;n</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>M&agrave;u vỏ</strong></td>\r\n			<td>Bạc</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>M&agrave;u mặt</strong></td>\r\n			<td>Mặt đen</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '2023-03-18 01:20:32', '2023-03-24 10:31:14', 12, 0),
(15, 'Mido M007.207.66.036.26', '641576af0cc80-M007.207.66.036.26-1657591894321.jpg', '<p>Đồng Hồ Nam - Cơ - Automatic - K&iacute;nh Sapphire - Size Mặt 33mm - Bảo H&agrave;nh 5 Năm - Ch&iacute;nh H&atilde;ng 100%</p>\r\n', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>Thương hiệu</strong></td>\r\n			<td>\r\n			<h3><a href=\"https://www.watchstore.vn/collections/dong-ho-mido-chinh-hang\">Đồng Hồ Mido</a></h3>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>SKU/UPC/MPN</strong></td>\r\n			<td>M007.207.66.036.26</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Loại đồng hồ</strong></td>\r\n			<td>\r\n			<h3><a href=\"https://www.watchstore.vn/collections/dong-ho-nam-chinh-hang\">Đồng hồ nam</a></h3>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>D&ograve;ng m&aacute;y</strong></td>\r\n			<td>\r\n			<h3><a href=\"https://www.watchstore.vn/collections/dong-ho-co-automatic\">Cơ - Automatic</a></h3>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Chất liệu k&iacute;nh</strong></td>\r\n			<td>K&iacute;nh Sapphire</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Chất liệu d&acirc;y</strong></td>\r\n			<td>\r\n			<h3><a href=\"https://www.watchstore.vn/collections/dong-ho-day-da\">D&acirc;y da</a></h3>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Độ chịu nước</strong></td>\r\n			<td>\r\n			<h3><a href=\"https://www.watchstore.vn/blogs/news/chong-nuoc-5atm-la-gi--di-tam--di-boi-co-sao-khong--208\">5 atm</a></h3>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Size mặt</strong></td>\r\n			<td>33mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Xuất xứ</strong></td>\r\n			<td>\r\n			<h3><a href=\"https://www.watchstore.vn/collections/dong-ho-thuy-sy-chinh-hang\">Đồng hồ Thụy Sỹ</a></h3>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Chất liệu vỏ</strong></td>\r\n			<td>Vỏ th&eacute;p kh&ocirc;ng gỉ</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>H&igrave;nh dạng</strong></td>\r\n			<td>Mặt tr&ograve;n</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>M&agrave;u vỏ</strong></td>\r\n			<td>V&agrave;ng hồng</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>T&iacute;nh năng</strong></td>\r\n			<td>Lịch ng&agrave;y</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Độ dầy</strong></td>\r\n			<td>9.5mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>M&agrave;u mặt</strong></td>\r\n			<td>Mặt trắng</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Khoảng trữ c&oacute;t</strong></td>\r\n			<td>40 tiếng</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '2023-03-18 01:21:49', '2023-03-24 10:30:56', 12, 0),
(16, 'Q&Q M122J001Y', '641576bfecc03-M122J001Y-1650271862599.jpg', '<p>Đồng Hồ Nam - Pin / Quartz - K&iacute;nh Kho&aacute;ng - Size Mặt 43mm - Bảo H&agrave;nh 5 Năm - Ch&iacute;nh H&atilde;ng 100%</p>\r\n', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>Thương hiệu</strong></td>\r\n			<td>\r\n			<h3><a href=\"https://www.watchstore.vn/collections/dong-ho-q-q-chinh-hang\">Đồng Hồ Q&amp;Q</a></h3>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>SKU/UPC/MPN</strong></td>\r\n			<td>M122J001Y</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Loại đồng hồ</strong></td>\r\n			<td>\r\n			<h3><a href=\"https://www.watchstore.vn/collections/dong-ho-nam-chinh-hang\">Đồng hồ nam</a></h3>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>D&ograve;ng m&aacute;y</strong></td>\r\n			<td>\r\n			<h3><a href=\"https://www.watchstore.vn/collections/dong-ho-pin-quartz-chinh-hang\">Pin / Quartz</a></h3>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Chất liệu k&iacute;nh</strong></td>\r\n			<td>K&iacute;nh kho&aacute;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Chất liệu d&acirc;y</strong></td>\r\n			<td>D&acirc;y Nhựa</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Độ chịu nước</strong></td>\r\n			<td>\r\n			<h3><a href=\"https://www.watchstore.vn/blogs/news/chi-so-chong-nuoc-3atm-la-gi-doi-voi-dong-ho-deo-tay-252\">3 atm</a></h3>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Size mặt</strong></td>\r\n			<td>43mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Xuất xứ</strong></td>\r\n			<td>\r\n			<h3><a href=\"https://www.watchstore.vn/collections/dong-ho-nhat-ban-chinh-hang\">Đồng hồ Nhật</a></h3>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Chất liệu vỏ</strong></td>\r\n			<td>Vỏ nhựa</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>H&igrave;nh dạng</strong></td>\r\n			<td>Mặt tr&ograve;n</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>M&agrave;u vỏ</strong></td>\r\n			<td>Đen</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>T&iacute;nh năng</strong></td>\r\n			<td>Lịch ng&agrave;y&nbsp;,&nbsp;Lịch thứ</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Độ dầy</strong></td>\r\n			<td>10mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>M&agrave;u mặt</strong></td>\r\n			<td>Mặt đen</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '2023-03-18 01:23:11', '2023-03-24 10:31:36', 11, 0),
(17, 'Omega 232.58.38.20.01.001', '641576ccf2122-1as-1658999154583.jpg', '<p>Đồng Hồ Nam - Cơ - Automatic - K&iacute;nh Sapphire - Size Mặt 37.5mm - Bảo H&agrave;nh 5 Năm - Ch&iacute;nh H&atilde;ng 100%</p>\r\n', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>Thương hiệu</strong></td>\r\n			<td>\r\n			<h3><a href=\"https://www.watchstore.vn/collections/dong-ho-omega-chinh-hang\">Đồng Hồ Omega</a></h3>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>SKU/UPC/MPN</strong></td>\r\n			<td>232.58.38.20.01.001</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Loại đồng hồ</strong></td>\r\n			<td>\r\n			<h3><a href=\"https://www.watchstore.vn/collections/dong-ho-nam-chinh-hang\">Đồng hồ nam</a></h3>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>D&ograve;ng m&aacute;y</strong></td>\r\n			<td>\r\n			<h3><a href=\"https://www.watchstore.vn/collections/dong-ho-co-automatic\">Cơ - Automatic</a></h3>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Chất liệu k&iacute;nh</strong></td>\r\n			<td>K&iacute;nh Sapphire</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Chất liệu d&acirc;y</strong></td>\r\n			<td>\r\n			<h3><a href=\"https://www.watchstore.vn/collections/dong-ho-day-da\">D&acirc;y da</a></h3>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Độ chịu nước</strong></td>\r\n			<td>60 atm</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Size mặt</strong></td>\r\n			<td>37.5mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Xuất xứ</strong></td>\r\n			<td>\r\n			<h3><a href=\"https://www.watchstore.vn/collections/dong-ho-thuy-sy-chinh-hang\">Đồng hồ Thụy Sỹ</a></h3>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Chất liệu vỏ</strong></td>\r\n			<td>V&agrave;ng hồng 18k</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>H&igrave;nh dạng</strong></td>\r\n			<td>Mặt tr&ograve;n</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>M&agrave;u vỏ</strong></td>\r\n			<td>V&agrave;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Phong c&aacute;ch</strong></td>\r\n			<td>Sang trọng</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>T&iacute;nh năng</strong></td>\r\n			<td>Dạ quang&nbsp;,&nbsp;Giờ, ph&uacute;t, gi&acirc;y&nbsp;,&nbsp;Lịch ng&agrave;y</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Độ dầy</strong></td>\r\n			<td>13mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>M&agrave;u mặt</strong></td>\r\n			<td>Mặt đen</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Khoảng trữ c&oacute;t</strong></td>\r\n			<td>50 tiếng</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '2023-03-18 01:26:23', '2023-03-24 10:31:56', 13, 0),
(18, 'Đồng hồ Audemars Piguet Royal Oak 15450ST.OO.1256ST.03', '641585e833b6a-dong-ho-audemars-piguet-royal-oak-15450st-oo-1256st-03.jpg', '<p>Chiếc Royal Oak n&agrave;y được l&agrave;m bằng th&eacute;p kh&ocirc;ng gỉ được chế t&aacute;c thủ c&ocirc;ng v&agrave; ho&agrave;n thiện với mặt số &ldquo;Grande Tapisserie&rdquo; m&agrave;u xanh coban tiếp tục truyền thống c&aacute;ch mạng .. Vỏ bằng th&eacute;p kh&ocirc;ng gỉ, mặt sau v&agrave; mặt sau bằng tinh thể sapphire chống l&oacute;a .. Mặt số m&agrave;u xanh lam với họa tiết &ldquo;Grande Tapisserie&rdquo;, c&aacute;c vạch chỉ giờ được &aacute;p dụng bằng v&agrave;ng trắng v&agrave; tay Royal Oak với lớp phủ ph&aacute;t quang .. V&ograve;ng tay bằng th&eacute;p kh&ocirc;ng gỉ với chốt gập AP ..</p>\r\n', '<p>Thương hiệu:Audemars Piguet</p>\r\n\r\n<p>Phong c&aacute;ch:Khuy&ecirc;n d&ugrave;ng trong th&aacute;ng&nbsp;,&nbsp;H&agrave;ng New Order gi&aacute; tốt</p>\r\n\r\n<p>Giới t&iacute;nh:Nam</p>\r\n\r\n<p>Xuất xứ:Thụy Sĩ</p>\r\n\r\n<p>Loại m&aacute;y:Automatic (tự động)</p>\r\n\r\n<p>Chất liệu:Th&eacute;p</p>\r\n\r\n<p>Size:36mm - 38mm</p>\r\n\r\n<p>Loại d&acirc;y:D&acirc;y kim loại</p>\r\n', '2023-03-18 03:35:36', '2023-03-18 03:35:36', 7, 0),
(19, 'Đồng hồ Audemars Piguet Royal Oak 15500OR.OO.D002CR.01', '64158863951ec-dong-ho-audemars-piguet-royal-oak-15500or-oo-d002cr-01.jpg', '<p>Chiếc Selfwinding Royal Oak bằng v&agrave;ng hồng với d&acirc;y đeo c&aacute; sấu n&agrave;y cung cấp c&aacute;c chi tiết mới: chỉ số rộng hơn, xe lửa ph&uacute;t được in ở khu vực b&ecirc;n ngo&agrave;i v&agrave; cửa sổ ng&agrave;y ở xa trung t&acirc;m hơn. Vỏ bằng v&agrave;ng hồng 18 carat, mặt sau v&agrave; nắp lưng bằng sapphire chống ch&oacute;i. - n&uacute;m vặn c&oacute; kh&oacute;a .. Mặt số m&agrave;u đen với họa tiết &ldquo;Grande Tapisserie&rdquo;, vạch giờ bằng v&agrave;ng hồng v&agrave; kim Royal Oak c&oacute; lớp phủ ph&aacute;t quang .. D&acirc;y đeo c&aacute; sấu đen &ldquo;quy m&ocirc; vu&ocirc;ng lớn&rdquo; được kh&acirc;u bằng tay với chốt gấp AP v&agrave;ng hồng 18 carat. .</p>\r\n', '<p>Thương hiệu:Audemars Piguet</p>\r\n\r\n<p>Phong c&aacute;ch:H&agrave;ng New Order gi&aacute; tốt</p>\r\n\r\n<p>Giới t&iacute;nh:Nam</p>\r\n\r\n<p>Xuất xứ:Thụy Sĩ</p>\r\n\r\n<p>Loại m&aacute;y:Automatic (tự động)</p>\r\n\r\n<p>Chất liệu:V&agrave;ng khối 18K</p>\r\n\r\n<p>Size:40mm - 42mm</p>\r\n\r\n<p>Loại d&acirc;y:D&acirc;y da</p>\r\n', '2023-03-18 03:46:11', '2023-04-13 10:14:48', 7, 0),
(20, 'Audemars Piguet Royal Oak 37mm Blue Dial 50th Anniversary 15550ST', '6415894be6f78-BAB5BC2A-820B-41B1-AED4-4C951940FC24-scaled-scaled.jpeg.webp', '<p>Ở phi&ecirc;n bản&nbsp;<a href=\"https://frodos.com.vn/san-pham/audemars-piguet-royal-oak-37mm-blue-dial-50th-anniversary-15550st\">Audemars Piguet Royal Oak 37mm Blue Dial &ldquo;50th Anniversary&rdquo; 15550ST</a>&nbsp;Audemars Piguet đ&atilde; tăng diện t&iacute;ch của c&aacute;c đường v&aacute;t tr&ecirc;n vỏ để tăng hiệu ứng t&aacute;n xạ &aacute;nh s&aacute;ng giữa c&aacute;c bề mặt được ho&agrave;n thiện dạng satin xung quanh. Tuy nhi&ecirc;n, kh&ocirc;ng chỉ dừng ở mặt thẩm mỹ, những điều chỉnh giữa Audemars Piguet khiến đồng hồ c&oacute; kiểu d&aacute;ng thanh mảnh hơn trước.</p>\r\n', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<th colspan=\"2\">Th&ocirc;ng tin cơ bản</th>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<th>H&atilde;ng</th>\r\n						<td>\r\n						<p><a href=\"https://frodos.com.vn/hang/audemars-piguet/\" rel=\"tag\">Đồng hồ Audemars Piguet</a></p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<th>M&atilde; sản phẩm</th>\r\n						<td>\r\n						<p><a href=\"https://frodos.com.vn/ma-san-pham/15550st-oo-1356st-02/\" rel=\"tag\">15550ST.OO.1356ST.02</a></p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<th>Chuyển động</th>\r\n						<td>\r\n						<p><a href=\"https://frodos.com.vn/chuyen-dong/automatic/\" rel=\"tag\">Automatic</a></p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<th>K&iacute;ch thước</th>\r\n						<td>\r\n						<p><a href=\"https://frodos.com.vn/kich-thuoc/37mm/\" rel=\"tag\">37mm</a></p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<th>Chất liệu d&acirc;y</th>\r\n						<td>\r\n						<p><a href=\"https://frodos.com.vn/chat-lieu-day/thep/\" rel=\"tag\">Th&eacute;p</a></p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<th>T&igrave;nh trạng</th>\r\n						<td>\r\n						<p><a href=\"https://frodos.com.vn/tinh-trang/moi-tinh/\" rel=\"tag\">Mới tinh</a></p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<th>Giới t&iacute;nh</th>\r\n						<td>\r\n						<p><a href=\"https://frodos.com.vn/gioi-tinh/unisex/\" rel=\"tag\">Unisex</a></p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th colspan=\"2\">Bộ m&aacute;y</th>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<th>Loại m&aacute;y</th>\r\n						<td>\r\n						<p><a href=\"https://frodos.com.vn/ten-may/calibre-5900/\" rel=\"tag\">CALIBRE 5900</a></p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<th>Dự trữ năng lượng</th>\r\n						<td>\r\n						<p><a href=\"https://frodos.com.vn/du-tru-nang-luong/60-gio/\" rel=\"tag\">60 giờ</a></p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th colspan=\"2\">Vỏ</th>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<th>Chất liệu vỏ</th>\r\n						<td>\r\n						<p><a href=\"https://frodos.com.vn/chat-lieu-vo/thep/\" rel=\"tag\">Th&eacute;p</a></p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '2023-03-18 03:50:03', '2023-03-18 03:50:03', 7, 0),
(21, 'Audemars Piguet Royal Oak Chronograph Automatic 41mm 26331ST', '64158a1707c41-Audemars-Piguet-Royal-Oak-Chronograph-Automatic-41mm-3-768x768.jpg.webp', '<p>Được v&iacute; như linh hồn của thương hiệu&nbsp;<a href=\"https://frodos.com.vn/dong-ho/audemars-piguet/\">đồng hồ Audemars Piguet</a>. Từ l&acirc;u những chiếc đồng hồ Royal Oak đ&atilde; trở th&agrave;nh chủ đề thảo luận của đ&ocirc;ng đảo người y&ecirc;u đồng hồ Thụy Sĩ tr&ecirc;n thế giới.&nbsp;<a href=\"https://frodos.com.vn/san-pham/audemars-piguet-royal-oak-chronograph-automatic-41mm-3/\">Audemars Piguet Royal Oak Chronograph Automatic 41mm 26331ST</a>&nbsp;sở hữu bề ngo&agrave;i mạnh mẽ, chắc chắn.</p>\r\n', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<th colspan=\"2\">Th&ocirc;ng tin cơ bản</th>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<th>H&atilde;ng</th>\r\n						<td>\r\n						<p><a href=\"https://frodos.com.vn/hang/audemars-piguet/\" rel=\"tag\">Đồng hồ Audemars Piguet</a></p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<th>D&ograve;ng sản phẩm</th>\r\n						<td>\r\n						<p><a href=\"https://frodos.com.vn/dong-san-pham/royal-oak/\" rel=\"tag\">Royal Oak</a></p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<th>M&atilde; sản phẩm</th>\r\n						<td>\r\n						<p><a href=\"https://frodos.com.vn/ma-san-pham/26331st-oo-1220st-02/\" rel=\"tag\">26331ST.OO.1220ST.02</a></p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<th>Chuyển động</th>\r\n						<td>\r\n						<p><a href=\"https://frodos.com.vn/chuyen-dong/automatic/\" rel=\"tag\">Automatic</a></p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<th>K&iacute;ch thước</th>\r\n						<td>\r\n						<p><a href=\"https://frodos.com.vn/kich-thuoc/41mm/\" rel=\"tag\">41mm</a></p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<th>Chất liệu d&acirc;y</th>\r\n						<td>\r\n						<p><a href=\"https://frodos.com.vn/chat-lieu-day/thep/\" rel=\"tag\">Th&eacute;p</a></p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<th>T&igrave;nh trạng</th>\r\n						<td>\r\n						<p><a href=\"https://frodos.com.vn/tinh-trang/moi-tinh/\" rel=\"tag\">Mới tinh</a></p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th colspan=\"2\">Vỏ</th>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<th>Chất liệu vỏ</th>\r\n						<td>\r\n						<p><a href=\"https://frodos.com.vn/chat-lieu-vo/thep/\" rel=\"tag\">Th&eacute;p</a></p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '2023-03-18 03:53:27', '2023-03-18 03:53:27', 7, 0),
(22, 'Audemars Piguet Royal Oak Offshore 15600TI music edition New', '64158b6c7573c-1111-768x768.jpg.webp', '<p><a href=\"https://frodos.com.vn/san-pham/audemars-piguet-royal-oak-offshore-15600ti-music-edition-new\">Audemars Piguet Royal Oak Offshore 15600TI music edition</a>&nbsp;l&agrave; chiếc đồng hồ được lấy cảm hứng từ thế giới &acirc;m nhạc. Theo đ&oacute;, mặt số Tapisserie quen thuộc của d&ograve;ng Royal Oak Offshore được in m&agrave;u gợi l&ecirc;n m&agrave;n h&igrave;nh kỹ thuật số của bộ điều chỉnh &acirc;m thanh Equaliser trong ph&ograve;ng thu, phản chiếu sự xuất hiện của đ&egrave;n đồng hồ &acirc;m lượng kế giống như đ&egrave;n c&oacute; tr&ecirc;n bảng điều khiển ghi &acirc;m.</p>\r\n', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<th colspan=\"2\">Th&ocirc;ng tin cơ bản</th>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<th>H&atilde;ng</th>\r\n						<td>\r\n						<p><a href=\"https://frodos.com.vn/hang/audemars-piguet/\" rel=\"tag\">Đồng hồ Audemars Piguet</a></p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<th>K&iacute;ch thước</th>\r\n						<td>\r\n						<p><a href=\"https://frodos.com.vn/kich-thuoc/43mm/\" rel=\"tag\">43mm</a></p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<th>Chất liệu d&acirc;y</th>\r\n						<td>\r\n						<p><a href=\"https://frodos.com.vn/chat-lieu-day/cao-su/\" rel=\"tag\">cao su</a></p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<th>Năm</th>\r\n						<td>\r\n						<p><a href=\"https://frodos.com.vn/nam/2022/\" rel=\"tag\">2022</a></p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<th>T&igrave;nh trạng</th>\r\n						<td>\r\n						<p><a href=\"https://frodos.com.vn/tinh-trang/moi-tinh/\" rel=\"tag\">Mới tinh</a></p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<th>Giới t&iacute;nh</th>\r\n						<td>\r\n						<p><a href=\"https://frodos.com.vn/gioi-tinh/nam/\" rel=\"tag\">Nam</a></p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th colspan=\"2\">Bộ m&aacute;y</th>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<th>Loại m&aacute;y</th>\r\n						<td>\r\n						<p><a href=\"https://frodos.com.vn/ten-may/calibre-4309/\" rel=\"tag\">Calibre 4309</a></p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th colspan=\"2\">Vỏ</th>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<th>Độ d&agrave;y vỏ</th>\r\n						<td>\r\n						<p><a href=\"https://frodos.com.vn/do-day-vo/14-4mm/\" rel=\"tag\">14.4mm</a></p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th colspan=\"2\">Xem th&ecirc;m</th>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<th>Kh&aacute;ng nước</th>\r\n						<td>\r\n						<p><a href=\"https://frodos.com.vn/khang-nuoc/100m/\" rel=\"tag\">100m</a></p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '2023-03-18 03:59:08', '2023-03-18 03:59:08', 7, 0),
(24, 'Đồng hồ chính hãng Teintop T7795-2', '641595f8e77e1-20180629_184426_068_1.png', '<p><strong><em>TEINTOP&nbsp;</em></strong>thương hiệu đồng hồ nổi tiếng USA, được th&agrave;nh lập tại&nbsp;MIAMI bang Florida, Hoa Kỳ&nbsp;v&agrave;o năm 1986 đ&atilde; chiếm được cảm t&igrave;nh của giới mộ điệu th&ocirc;ng qua nhiều kiệt t&aacute;c thời gian.&nbsp;Trong hơn 30 năm qua,<strong>&nbsp;</strong><strong><em>Đồng hồ Teintop</em></strong>&nbsp;đ&atilde; tạo n&ecirc;n lịch sử đồng hồ với chất lượng cao, s&aacute;ng tạo, gi&aacute; hợp l&yacute; c&ugrave;ng tinh thần thời trang của n&oacute;.</p>\r\n', '<p>Nh&atilde;n hiệu&nbsp;Teintop</p>\r\n\r\n<p>M&atilde; sản phẩm&nbsp;T7795-2</p>\r\n\r\n<p>Giới t&iacute;nh&nbsp;Nam</p>\r\n\r\n<p>Kiểu m&aacute;y&nbsp;Automatic (M&aacute;y Cơ)</p>\r\n\r\n<p>Đường k&iacute;nh mặt&nbsp;41 mm</p>\r\n\r\n<p>Độ d&agrave;y&nbsp;12 mm</p>\r\n\r\n<p>Chất liệu vỏ&nbsp;Th&eacute;p kh&ocirc;ng gỉ 316L</p>\r\n\r\n<p>Chất liệu d&acirc;y&nbsp;Th&eacute;p kh&ocirc;ng gỉ 316L</p>\r\n\r\n<p>Chất liệu mặt k&iacute;nh&nbsp;Sapphire</p>\r\n\r\n<p>Khả năng chịu nước&nbsp;3 ATM</p>\r\n', '2023-03-18 04:44:09', '2023-03-18 04:44:09', 14, 0),
(25, 'Đồng Hồ Thể Thao SKMEI 1251', '6415963ed55e9-009ea001835863eae4985685b67ff298.jpg', '<p>Đồng hồ điện tử thể thao Skmei phối m&agrave;u kiểu d&aacute;ng thể thao khỏe khoắn, chất liệu cao cấp, ph&ugrave; hợp với những người chơi thể thao, l&agrave;m việc ngo&agrave;i trời...</p>\r\n\r\n<p>T&iacute;nh năng c&agrave;i đặt thời gian ở hai nơi t&ugrave;y chọn, chu&ocirc;ng b&aacute;o thức, hiển thị ng&agrave;y, hiển thị ph&uacute;t, t&iacute;nh giờ tiện dụng, nhanh gọn.</p>\r\n\r\n<p>Mặt k&iacute;nh nhập khẩu cao cấp, chống nước, chịu ma s&aacute;t tốt, vỏ ngo&agrave;i PU đ&agrave;n hồi cao cấp, si&ecirc;u chống rung.</p>\r\n\r\n<p>D&acirc;y PU cao cấp nhập khẩu từ Đức, mềm mại, thoải m&aacute;i, kh&oacute;a g&agrave;i th&eacute;p kh&ocirc;ng gỉ, tiện dụng, dễ đ&oacute;ng mở.&nbsp;</p>\r\n\r\n<p>Mặt dạ quang EL nhập khẩu gi&uacute;p bạn nh&igrave;n thời gian r&otilde; n&eacute;t dưới điều kiện thiếu &aacute;nh s&aacute;ng .</p>\r\n\r\n<p>M&aacute;y, pin nhập khẩu Nhật Bản đảm bảo chuẩn x&aacute;c, tuổi thọ cao; chống nước 5ATM thoải m&aacute;i rửa tay, đi mưa, tắm kh&ocirc;ng cần phải th&aacute;o.</p>\r\n', '<p>TH&Ocirc;NG TIN CHI TIẾT</p>\r\n\r\n<p>- Thương hiệu:&nbsp;Skmei Ch&iacute;nh H&atilde;ng</p>\r\n\r\n<p>- Kiểu m&aacute;y:&nbsp;Quartz</p>\r\n\r\n<p>- D&agrave;nh cho:&nbsp;Nam</p>\r\n\r\n<p>- Chất liệu vỏ:&nbsp;Cao Su v&agrave; Nhựa</p>\r\n\r\n<p>- Chất liệu mặt trước:&nbsp;K&iacute;nh cứng pha kho&aacute;ng</p>\r\n\r\n<p>- Chất liệu d&acirc;y:&nbsp;Cao su mềm, &ecirc;m tay</p>\r\n\r\n<p>- Mặt k&iacute;nh:&nbsp;Phẳng</p>\r\n\r\n<p>- K&iacute;ch thước mặt:&nbsp;49mm (Lu&ocirc;n v&agrave;nh kh&ocirc;ng t&iacute;nh mấu gắn d&acirc;y)</p>\r\n\r\n<p>- K&iacute;ch thước d&acirc;y:&nbsp;25mm</p>\r\n\r\n<p>- Độ d&agrave;y mặt:&nbsp;17m</p>\r\n\r\n<p>- Tổng chiều d&agrave;i:&nbsp;240cm</p>\r\n\r\n<p>- C&acirc;n nặng:&nbsp;80g - Si&ecirc;u nhẹ</p>\r\n\r\n<p>- Xem giờ/ph&uacute;t điện tử</p>\r\n\r\n<p>- Số lịch:&nbsp;Lịch ng&agrave;y / th&aacute;ng điện tử</p>\r\n\r\n<p>- Độ chịu nước:&nbsp;Chịu nước tốt; tr&aacute;nh c&aacute;c hoạt động bơi lội</p>\r\n\r\n<p>- Năng lượng sử dụng:&nbsp;Pin chuẩn</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Chức năng:&nbsp;</p>\r\n\r\n<p>+ Theo d&otilde;i 2 m&uacute;i giờ với đồng hồ kim v&agrave; điện tử</p>\r\n\r\n<p>+ Xem giờ/ph&uacute;t, thứ/ng&agrave;y/th&aacute;ng</p>\r\n\r\n<p>+ Hẹn giờ b&aacute;o thức</p>\r\n\r\n<p>+ Bấm giờ</p>\r\n\r\n<p>+ Đ&egrave;n led xem buổi tối</p>\r\n', '2023-03-18 04:45:18', '2023-03-18 04:45:18', 15, 0),
(26, 'Đồng hồ thể thao SKMEI 1155B', '641596b02cd3a-skmei-sk-1155b-den-600x600.jpg', '<p dir=\"ltr\">Phi&ecirc;n bản mới n&acirc;ng cấp mới của mẫu&nbsp;đồng hồ điện tử&nbsp;Skmei 1155 hot nhất năm 2018 của h&atilde;ng đồng hồ điện tử SKMEI. Với phi&ecirc;n bản mới g&oacute;c cạnh hơn - man lỳ nam t&iacute;nh hơn.&nbsp;Với k&iacute;ch thước mặt kh&aacute; lớn đến 52mm sản phẩm chỉ ph&ugrave; hợp với bạn Nam c&oacute; k&iacute;ch cỡ trung b&igrave;nh to kh&ocirc;ng ph&ugrave; hợp với bạn nam tay nhỏ nh&eacute;!</p>\r\n', '<p><strong>TH&Ocirc;NG TIN CHI TIẾT&nbsp;</strong></p>\r\n\r\n<p>Thương hiệu:&nbsp;Skmei Ch&iacute;nh H&atilde;ng</p>\r\n\r\n<p>Kiểu m&aacute;y:&nbsp;Nhật</p>\r\n\r\n<p>D&agrave;nh cho:&nbsp;Nam</p>\r\n\r\n<p>Chất liệu vỏ:&nbsp;Cao Su v&agrave; Nhựa</p>\r\n\r\n<p>Chất liệu mặt trước:&nbsp;Nhựa cứng</p>\r\n\r\n<p>Chất liệu d&acirc;y:&nbsp;Cao su mềm, &ecirc;m tay</p>\r\n\r\n<p>Mặt k&iacute;nh:&nbsp;Phẳng</p>\r\n\r\n<p>K&iacute;ch thước mặt:&nbsp;52mm - 55mm (Lu&ocirc;n v&agrave;nh kh&ocirc;ng t&iacute;nh mấu gắn d&acirc;y)</p>\r\n\r\n<p>K&iacute;ch thước d&acirc;y:&nbsp;22mm</p>\r\n\r\n<p>Độ d&agrave;y mặt:&nbsp;17m</p>\r\n\r\n<p>Độ d&agrave;y d&acirc;y:&nbsp;2mm</p>\r\n\r\n<p>Tổng chiều d&agrave;i:&nbsp;260cm</p>\r\n\r\n<p>Số kim:&nbsp;3&nbsp;kim + Xem giờ / ph&uacute;t điện tử</p>\r\n\r\n<p>Số lịch:&nbsp;Lịch ng&agrave;y / th&aacute;ng điện tử</p>\r\n\r\n<p>Độ chịu nước:&nbsp;Chịu nước tốt; tr&aacute;nh c&aacute;c hoạt động bơi lội</p>\r\n\r\n<p>Năng lượng sử dụng:&nbsp;Pin chuẩn</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Chức năng:&nbsp;</p>\r\n\r\n<p>+ Theo d&otilde;i 2 m&uacute;i giờ với đồng hồ kim v&agrave; điện tử</p>\r\n\r\n<p>+ Xem giờ/ph&uacute;t, thứ/ng&agrave;y/th&aacute;ng</p>\r\n\r\n<p>+ Hẹn giờ b&aacute;o thức</p>\r\n\r\n<p>+ Bấm giờ</p>\r\n\r\n<p>+ Đ&egrave;n led xem buổi tối</p>\r\n', '2023-03-18 04:47:12', '2023-03-24 10:33:24', 15, 0),
(27, 'Đồng Hồ Dây Nhựa Casio Standard AE-1500WH-8BVD', '6415a10f0fbb1-AE-1500WH-8B-00.jpg', '<p><em>Đồng Hồ Nam D&acirc;y Nhựa Casio Standard AE-1500WH-8BVDF Ch&iacute;nh H&atilde;ng - AE-1500WH-8B</em></p>\r\n\r\n<h2>Các t&iacute;nh năng</h2>\r\n\r\n<ul>\r\n	<li>Tuổi thọ pin 10 năm</li>\r\n	<li>Đồng hồ bấm giờ 1/100 gi&acirc;y</li>\r\n	<li>Chế độ giờ k&eacute;p</li>\r\n	<li>5 chế độ b&aacute;o</li>\r\n	<li>Khả năng chống nước ở độ s&acirc;u 100 m&eacute;t</li>\r\n	<li>Đ&egrave;n LED: v&agrave;ng hổ ph&aacute;ch</li>\r\n	<li>Mặt đồng hồ rộng</li>\r\n</ul>\r\n', '<h2>Đặc điểm kỹ thuật</h2>\r\n	<ul>\r\n		<li>Vật liệu vỏ / v&agrave;nh bezel: Nhựa</li>\r\n		<li>D&acirc;y đeo bằng nhựa</li>\r\n		<li>Mặt k&iacute;nh nhựa</li>\r\n		<li>Khả năng chống nước ở độ s&acirc;u 100 m&eacute;t</li>\r\n	</ul>\r\n	&nbsp;\r\n\r\n	<ul>\r\n		<li>Đ&egrave;n LED cực t&iacute;m<br />\r\n		ph&aacute;t s&aacute;ng sau</li>\r\n		<li>Chế độ giờ k&eacute;p</li>\r\n		<li>Đồng hồ bấm giờ 1/100 gi&acirc;y<br />\r\n		Khả năng đo: 23:59&rsquo;59.99&rsquo;&rsquo;<br />\r\n		Ch&ecirc;́ đ&ocirc;̣ đo: Thời gian đã tr&ocirc;i qua, ngắt giờ, thời gian v&ecirc;̀ đích thứ nh&acirc;́t - thứ hai</li>\r\n		<li>Đ&ocirc;̀ng h&ocirc;̀ đ&ecirc;́m ngược<br />\r\n		Đơn vị đo: 1 gi&acirc;y<br />\r\n		Khoảng đếm ngược: 24 giờ<br />\r\n		Khoảng c&agrave;i đặt thời gian bắt đầu đếm ngược: 1 phút đ&ecirc;́n 24 giờ (khoảng tăng 1 phút và khoảng tăng 1 giờ)<br />\r\n		Kh&aacute;c: Tự động lặp lại</li>\r\n		<li>5 chế độ b&aacute;o đa chức năng (với 1 chế độ b&aacute;o lặp)</li>\r\n		<li>T&iacute;n hiệu thời gian h&agrave;ng giờ</li>\r\n		<li>Lịch ho&agrave;n to&agrave;n tự động (đến năm 2099)</li>\r\n		<li>Định dạng giờ 12/24</li>\r\n		<li>Giờ hiện h&agrave;nh th&ocirc;ng thường: Giờ, ph&uacute;t, gi&acirc;y, giờ chiều, th&aacute;ng, ng&agrave;y, thứ</li>\r\n		<li>Độ ch&iacute;nh x&aacute;c: &plusmn;30 gi&acirc;y một th&aacute;ng</li>\r\n		<li>Tuổi thọ pin xấp xỉ: 10 năm đ&ocirc;́i với pin CR2032</li>\r\n	</ul>\r\n\r\n', '2023-03-18 04:50:59', '2023-03-24 10:32:41', 16, 0),
(28, 'Đồng Hồ Dây Nhựa Casio Standard WS-1400H-1BVDF', '6415a0ba42f66-WS-1400H-1BV-000.jpg', '<p>Đồng Hồ Nam D&acirc;y Nhựa Casio Standard WS-1400H-1BVDF Ch&iacute;nh H&atilde;ng - WS-1400H-1B Pin 10 Năm/p>\r\n\r\n', '<h2>Th&ocirc;ng tin cơ bản&nbsp;WS-1400H-1B</h2>\r\n\r\n<p>K&iacute;ch thước vỏ (D&agrave;i &times; Rộng &times; Cao)</p>\r\n\r\n<p>47.2 &times; 44.5 &times; 13.4 mm</p>\r\n\r\n<p>Trọng lượng</p>\r\n\r\n<p>43 g</p>\r\n\r\n<p>V&acirc;̣t li&ecirc;̣u vỏ v&agrave; gờ</p>\r\n\r\n<p>V&acirc;̣t li&ecirc;̣u vỏ / gờ: Nhựa</p>\r\n\r\n<p>D&acirc;y đeo</p>\r\n\r\n<p>D&acirc;y đeo bằng nhựa</p>\r\n\r\n<p>Chống nước</p>\r\n\r\n<p>Khả năng chống nước ở độ s&acirc;u 100 m&eacute;t</p>\r\n\r\n<p>Bộ nguồn v&agrave; tuổi thọ pin</p>\r\n\r\n<p>Tuổi thọ pin xấp xỉ: 10 năm đ&ocirc;́i với pin CR2025</p>\r\n\r\n<p>Mặt k&iacute;nh</p>\r\n\r\n<p>Mặt k&iacute;nh nhựa</p>\r\n<p>Tập luyện hiệu quả hơn với bộ nhớ 60 v&ograve;ng chạy được truyền thẳng đến cổ tay của bạn. Tận dụng tối đa m&agrave;n h&igrave;nh LCD dễ đọc ngay cả khi bạn đang chạy, cũng như n&uacute;t bấm giờ ph&iacute;a trước tiện lợi, tất cả đều nằm b&ecirc;n trong phần vỏ g&oacute;c cạnh chịu lực. Khả năng chống nước ở độ s&acirc;u l&ecirc;n đến 100 m&eacute;t gi&uacute;p bạn kh&ocirc;ng phải lo lắng khi đi dưới trời mưa, đ&egrave;n LED gi&uacute;p bạn nh&igrave;n r&otilde;, dễ đọc trong b&oacute;ng tối hay những nơi &aacute;nh s&aacute;ng mờ ảo v&agrave; tuổi thọ pin 10 năm l&agrave; những t&iacute;nh năng hỗ trợ tập luyện gi&uacute;p bạn tập trung đạt được mục ti&ecirc;u chạy bộ của m&igrave;nh.</p>\r\n', '2023-03-18 05:30:02', '2023-03-24 10:34:31', 16, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_image`
--

CREATE TABLE `product_image` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_image`
--

INSERT INTO `product_image` (`id`, `link`, `product_id`) VALUES
(30, '641c521974f33-dong-ho-audemars-piguet-royal-oak-15450st-oo-1256st-03 (1).jpg', 18),
(31, '641c52284cbee-dong-ho-audemars-piguet-royal-oak-15450st-oo-1256st-03 (2).jpg', 18),
(32, '641c522e21b04-dong-ho-audemars-piguet-royal-oak-15450st-oo-1256st-03.jpg', 18),
(33, '641c523bd8707-dong-ho-audemars-piguet-royal-oak-15500or-oo-d002cr-01 (1).jpg', 19),
(34, '641c52440d77a-dong-ho-audemars-piguet-royal-oak-15500or-oo-d002cr-01 (2).jpg', 19),
(35, '641c524b19960-dong-ho-audemars-piguet-royal-oak-15500or-oo-d002cr-01.jpg', 19),
(36, '641c5269857be-7C58E9B1-CCB9-4AFA-B8A8-C6D129ED849C-768x1025.jpeg.webp', 20),
(38, '641c5277a066f-EFE6A2DE-03CA-46FA-85B9-BF84BD9E7F0B-scaled.jpeg.webp', 20),
(39, '641c5288c5872-74A82E35-AF07-4EDC-9A14-1DB804384E78-768x1025.jpeg.webp', 21),
(40, '641c52912841a-DB59BE96-FEDD-44A1-B2F9-4500B397BD62-768x1025.jpeg.webp', 21),
(41, '641c5299463b2-F8332568-AA6E-45B5-86C2-440EE34BDFEB-768x1025.jpeg.webp', 21),
(42, '641c52aa3f772-1111-768x861.png.webp', 22),
(43, '641c52b79429d-1112-768x964.png.webp', 22),
(44, '641c566fe389f-download (1).jfif', 13),
(45, '641c5676c1d9d-download (2).jfif', 13),
(46, '641c567d332c1-download.jfif', 13),
(47, '641c568d4490f-download (1).jfif', 14),
(48, '641c5694c1bc4-download (2).jfif', 14),
(49, '641c569c2649d-download.jfif', 14),
(50, '641c56aacb1a3-download.jfif', 15),
(51, '641c56b1cf026-images (7).jfif', 15),
(52, '641c56b92130c-images (8).jfif', 15),
(53, '641c56c7ebf7d-download (1).jfif', 16),
(54, '641c56d3170e3-download.jfif', 16),
(55, '641c56e05311d-images (7).jfif', 16),
(56, '641c56eea1f33-images (7).jfif', 17),
(57, '641c56f5f38d7-images (8).jfif', 17),
(58, '641c56fc9a763-images (9).jfif', 17),
(59, '641dedeaaa58e-ctz1.jpg', 8),
(60, '641dedf27e45b-ctz2.jpg', 8),
(61, '641dedf974db4-ctz3.jpg', 8),
(62, '641dee1aa05f8-spr1.jpg', 9),
(63, '641dee238c2d8-spr2.jpg', 9),
(64, '641dee2cd0ab3-ele1.jpg', 10),
(65, '641dee358c61e-ele2.jpg', 10),
(66, '641dee3ce7ea5-ele3.jpg', 10),
(67, '641dee4d97b57-ort1.jpg', 11),
(68, '641dee54c6a47-ort2.jpg', 11),
(69, '641dee654a8b8-ort3.jpg', 11),
(70, '641dee6c4a717-ttn1.jpg', 12),
(71, '641dee737ddf7-ttn2.jpg', 12),
(72, '643113eaecc67-8V9wbEDGNrKUuEbhecWC.jpg', 28),
(73, '6431140dcbf18-casio-ws-1400h-1bvdf-nam-4.jpg', 28),
(74, '6431149d5dc0c-AE-1500WH-8B-1.jpg', 27),
(75, '643114a3f346e-casio-ae-1500.webp', 27),
(76, '643114ef03ce7-skmei-sk-1155b-den-2-2-org.jpg', 26),
(77, '643114f500c0d-dong-ho-Skmei-1155B-1.jpg', 26),
(78, '643115225c030-skmei-1251-chinh-hang.jpg', 25),
(79, '643115276a149-skmei-1251-ha-noi.jpg', 25),
(80, '6431158a30905-t7795-2_(2).jpg', 24),
(81, '64311590a7ccb-t7795-2_(3).jpg', 24);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `size`
--

CREATE TABLE `size` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `size`
--

INSERT INTO `size` (`id`, `name`) VALUES
(1, '32mn'),
(2, '34mn'),
(3, '20mm'),
(4, '28mm'),
(5, '22mm'),
(6, '24mm'),
(8, '38mm'),
(9, '37.5mm'),
(10, '40mm'),
(11, '43mm'),
(12, '33mm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `variation`
--

CREATE TABLE `variation` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `color_id` bigint(20) UNSIGNED NOT NULL,
  `size_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `quantity` int(10) UNSIGNED DEFAULT NULL,
  `status` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `variation`
--

INSERT INTO `variation` (`id`, `color_id`, `size_id`, `product_id`, `price`, `discount`, `quantity`, `status`) VALUES
(1, 3, 10, 22, '666', 5, 40, 0),
(22, 5, 3, 11, '522', 4, 43, 0),
(23, 3, 6, 10, '497', 30, 132, 0),
(26, 4, 9, 17, '318', 20, 12, 0),
(27, 4, 8, 13, '450', 12, 10, 0),
(28, 4, 11, 16, '800', 10, 46, 0),
(29, 8, 12, 15, '599', 4, 48, 0),
(30, 4, 10, 14, '600', 8, 23, 0),
(31, 3, 9, 18, '500', 11, 200, 0),
(36, 6, 10, 21, '400', 5, 50, 0),
(38, 3, 8, 22, '1000', 25, 0, 0),
(41, 4, 11, 28, '600', 10, 50, 0),
(42, 3, 11, 28, '410', 3, 22, 0),
(43, 4, 12, 27, '125', 5, 0, 0),
(44, 4, 12, 26, '521', 15, 40, 0),
(45, 4, 11, 25, '321', 1, 32, 0),
(46, 3, 10, 24, '654', 2, 55, 0),
(48, 3, 10, 21, '543', 0, 55, 0),
(49, 3, 9, 20, '444', 2, 56, 0),
(50, 5, 10, 19, '500', 0, 78, 0),
(51, 3, 10, 8, '567', 35, 99, 0),
(52, 3, 4, 9, '444', 12, 23, 0),
(53, 5, 10, 12, '389', 10, 66, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `variation_id` (`variation_id`),
  ADD KEY `bill_id` (`bill_id`);

--
-- Chỉ mục cho bảng `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Chỉ mục cho bảng `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `variation`
--
ALTER TABLE `variation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `color_id` (`color_id`),
  ADD KEY `size_id` (`size_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `color`
--
ALTER TABLE `color`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT cho bảng `size`
--
ALTER TABLE `size`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `variation`
--
ALTER TABLE `variation`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD CONSTRAINT `bill_detail_ibfk_1` FOREIGN KEY (`variation_id`) REFERENCES `variation` (`id`),
  ADD CONSTRAINT `bill_detail_ibfk_2` FOREIGN KEY (`bill_id`) REFERENCES `bill` (`id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`);

--
-- Các ràng buộc cho bảng `product_image`
--
ALTER TABLE `product_image`
  ADD CONSTRAINT `product_image_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `variation`
--
ALTER TABLE `variation`
  ADD CONSTRAINT `variation_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `variation_ibfk_2` FOREIGN KEY (`color_id`) REFERENCES `color` (`id`),
  ADD CONSTRAINT `variation_ibfk_3` FOREIGN KEY (`size_id`) REFERENCES `size` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
