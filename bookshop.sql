-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 28, 2023 lúc 11:13 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bookshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--


--
-- Đang đổ dữ liệu cho bảng `migrations`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_phone` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `created_at`, `updated_at`) VALUES
(1, 'anhdungmaster@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Dung Master', '0936639870', '2023-05-17 07:55:05', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brand_id` int(10) UNSIGNED NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `brand_desc` text NOT NULL,
  `brand_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_brand`
--

INSERT INTO `tbl_brand` (`brand_id`, `brand_name`, `brand_desc`, `brand_status`, `created_at`, `updated_at`) VALUES
(2, 'Kim Đồng', 'KD', 0, NULL, NULL),
(3, 'Amark', 'Amark', 0, NULL, NULL),
(4, 'Sky novel', 'sky novel', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category_product`
--

CREATE TABLE `tbl_category_product` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_desc` text NOT NULL,
  `category_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category_product`
--

INSERT INTO `tbl_category_product` (`category_id`, `category_name`, `category_desc`, `category_status`, `created_at`, `updated_at`) VALUES
(1, 'Truyện tranh', 'TT', 0, NULL, NULL),
(3, 'Light Novel', 'LN', 0, NULL, NULL),
(4, 'Tiểu Thuyết', 'TT', 0, NULL, NULL),
(5, 'Thiếu Nhi', 'TN', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customers`
--

CREATE TABLE `tbl_customers` (
  `customer_id` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_password` varchar(255) NOT NULL,
  `customer_phone` varchar(255) NOT NULL,
  `customer_address` varchar(225) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_customers`
--

INSERT INTO `tbl_customers` (`customer_id`, `customer_name`, `customer_email`, `customer_password`, `customer_phone`, `customer_address`, `created_at`, `updated_at`) VALUES
(6, 'Phạm Anh Dũng', 'anhdungcter123@gmail.com', '654cb72cfbaf4e70b07b56128bd64deb', '0936639870', 'xã Chính Nghĩa-huyện Kim Động-tỉnh Hưng Yên', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `order_total` varchar(50) NOT NULL,
  `order_status` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `shipping_id`, `payment_id`, `order_total`, `order_status`, `created_at`, `updated_at`) VALUES
(14, 6, 12, 14, '156,000.00', 'Đang chờ xử lý', '2023-05-26 09:20:10', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `order_details_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_sales_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_sales_quantity`, `created_at`, `updated_at`) VALUES
(19, 14, 22, 'Người Lạ Bên Bờ Biển - 2022', '83000', 1, NULL, NULL),
(20, 14, 21, 'Tạm Biệt Vườn Hồng', '73000', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` bigint(20) UNSIGNED NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `payment_status` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `payment_method`, `payment_status`, `created_at`, `updated_at`) VALUES
(14, '1', 'Đang chờ xử lý', '2023-05-26 09:20:10', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_desc` text NOT NULL,
  `product_content` text NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_promotionalprice` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `category_id`, `product_name`, `brand_id`, `product_desc`, `product_content`, `product_price`, `product_promotionalprice`, `product_image`, `product_status`, `created_at`, `updated_at`) VALUES
(3, 3, 'Sword Art Online 3: Fairy Dance', 3, '<p><strong>Nội dung:</strong></p>\r\n\r\n<p>Giới thiệu s&aacute;ch: &ldquo;Đi n&agrave;o Asuna! Nắm chặt v&agrave;o! Tilnel, xuất ph&aacute;t!&rdquo; Tạm biệt nữ kị sĩ b&iacute; ẩn Kizmel thuộc tộc Hắc tinh linh, Kirito v&agrave; Asuna tiến đến tầng tiếp theo. Trải rộng khắp tầng 4 của Aincrad l&agrave; &ldquo;thủy lộ&rdquo;.</p>', '<p>Giới thiệu s&aacute;ch: &ldquo;Đi n&agrave;o Asuna! Nắm chặt v&agrave;o! Tilnel, xuất ph&aacute;t!&rdquo; Tạm biệt nữ kị sĩ b&iacute; ẩn Kizmel thuộc tộc Hắc tinh linh, Kirito v&agrave; Asuna tiến đến tầng tiếp theo. Trải rộng khắp tầng 4 của Aincrad l&agrave; &ldquo;thủy lộ&rdquo;. Hai người đ&atilde; xoay xở thế n&agrave;o đ&oacute; để đặt ch&acirc;n l&ecirc;n được một th&agrave;nh phố tạo n&ecirc;n từ v&ocirc; v&agrave;n chiếc thuyền đ&aacute;y bằng m&agrave;u trắng c&oacute; k&iacute;ch cỡ lớn nhỏ kh&aacute;c nhau nổi bồng bềnh tr&ecirc;n mặt hồ. Muốn tự do đi lại ở tầng n&agrave;y, họ bắt buộc phải lấy được một chiếc thuyền đ&aacute;y bằng chuy&ecirc;n d&ugrave;ng cho việc di chuyển. Để kiếm nguy&ecirc;n liệu l&agrave;m thuyền, Kirito v&agrave; Asuna phải đối mặt với con gấu lửa khổng lồ Magnatherium! Sau đ&oacute;, ở tầng 4 n&agrave;y, họ đ&atilde; bất ngờ gặp lại một người&hellip;</p>', '20000', '10000', 'SAO03LN48.jpg', 0, NULL, NULL),
(4, 1, 'Black Clover - Tập 1', 2, '<p><strong>Black Clover - Tập 1: Lời Thề Của Ch&agrave;ng Thiếu Ni&ecirc;n</strong></p>\r\n\r\n<p>Tại một thế giới nơi ph&aacute;p thuật l&agrave; tất cả, cậu thiếu ni&ecirc;n Asta&nbsp; lại&nbsp; kh&ocirc;ng&nbsp; thể&nbsp; sử&nbsp; dụng&nbsp; ch&uacute;t&nbsp; ph&aacute;p thuật n&agrave;o &nbsp;từ thuở mới lọt l&ograve;ng. Để chứng minh sức mạnh của bản th&acirc;n v&agrave; thực hiện lời giao ước với bạn b&egrave;, Asta đ&atilde; nhắm tới mục ti&ecirc;u trở th&agrave;nh &ldquo;Ma ph&aacute;p đế&rdquo; ph&aacute;p sư đứng đầu mọi ph&aacute;p sư. C&acirc;u chuyện về những cậu thiếu ni&ecirc;n c&oacute; ph&aacute;p thuật xin được bắt đầu!</p>\r\n\r\n<p>&ldquo;Good faith&rdquo; &ldquo;hope&rdquo; &ldquo;love&rdquo;is hidden in the leaf of the clover each.</p>\r\n\r\n<p>&ldquo;Good luck&rdquo;dwells in the fourth leaf.</p>\r\n\r\n<p>&ldquo;The Devil&rdquo; lives in the fifth leaf.</p>\r\n\r\n<p>&ldquo;Đ&acirc;y&nbsp; l&agrave;&nbsp; chuyện&nbsp; cực&nbsp; k&igrave;&nbsp; ri&ecirc;ng&nbsp; tư của t&ocirc;i. T&ocirc;i đ&atilde; kết h&ocirc;n với người l&agrave;m ra chiếc b&aacute;nh ở h&igrave;nh tr&ecirc;n c&aacute;c bạn ạ. C&ocirc; ấy c&oacute; một tấm l&ograve;ng rất đ&aacute;ng&nbsp; tr&acirc;n&nbsp; qu&yacute;&nbsp; v&agrave;&nbsp; lu&ocirc;n&nbsp; ủng&nbsp; hộ một g&atilde; ất ơ như t&ocirc;i từ thời t&ocirc;i c&ograve;n l&agrave; trợ l&iacute;. Nếu t&ocirc;i kh&ocirc;ng đem lại hạnh ph&uacute;c cho c&ocirc; ấy th&igrave; chắc sẽ bị trời phạt mất. V&igrave; duy&ecirc;n cớ ấy m&agrave; t&ocirc;i bắt đầu lao v&agrave;o s&aacute;ng t&aacute;c bộ truyện n&agrave;y, c&aacute;c bạn h&atilde;y ủng hộ cho t&ocirc;i nh&eacute;!&rdquo; (YUKI TABATA)</p>\r\n\r\n<p>&nbsp;</p>', '<p>hay</p>', '20000', '10000', 'bl29.jfif', 0, NULL, NULL),
(5, 1, 'Your Name', 2, 'dcfsdfs1212', 'dffdv2121', '20000', '10000', 'yn9.jpg', 0, NULL, NULL),
(6, 3, 'DATE A LIVE 14 - Mukuro Planet', 3, '<h2>M&ocirc; tả</h2>\r\n\r\n<ul>\r\n	<li>T&aacute;c giả: Koushi Tachibana</li>\r\n	<li>Minh họa: Tsunako</li>\r\n	<li>Dịch giả: Reryuu, Ho&agrave;ng Gia</li>\r\n	<li>Thể loại: Light Novel</li>\r\n	<li>Khổ s&aacute;ch: 13x18cm</li>\r\n	<li>Số trang: 320 trang (8 trang m&agrave;u, 312 trang đen trắng)</li>\r\n	<li>ISBN: 978-604-55-9336-3</li>\r\n	<li>NXB li&ecirc;n kết: NXB H&agrave; Nội</li>\r\n	<li>Qu&agrave; tặng k&egrave;m:\r\n	<ul>\r\n		<li>Bản thường: 2 Bookmark, 1 Postcard. Ngo&agrave;i ra tặng k&egrave;m 1 poster A3 cho 1000 đơn h&agrave;ng đầu ti&ecirc;n. Gi&aacute; b&igrave;a 128.000đ</li>\r\n		<li>Bản boxset : gồm hộp đựng, s&aacute;ch k&egrave;m 2 Bookmark, 1 Postcard, 1 Standee Acrylic k&iacute;ch thước 11,5 x15cm, set 4 thẻ cứng nh&acirc;n vật, tem độc quyền Kadokawa. Gi&aacute; b&igrave;a: 338.000đ</li>\r\n	</ul>\r\n	</li>\r\n	<li>Ph&aacute;t h&agrave;nh: 20/05/2023</li>\r\n</ul>', '<p>Giới thiệu:</p>\r\n\r\n<p>Đ&oacute;n giao thừa v&agrave;o th&aacute;ng Gi&ecirc;ng, c&aacute;c Tinh linh v&ocirc; c&ugrave;ng nhộn nhịp với việc đi ch&ugrave;a đầu năm. Một học kỳ mới lại bắt đầu tại trường trung học Raizen. Đối với cậu học sinh cấp ba Itsuka Shidou, chuỗi ng&agrave;y y&ecirc;n b&igrave;nh đ&atilde; bị ph&aacute; hủy bởi một thi&ecirc;n thạch đến từ vũ trụ.</p>\r\n\r\n<p>&ldquo;-Ch&uacute;ng ta cũng đ&atilde; x&aacute;c nhận một tinh linh mới.&rdquo;</p>\r\n\r\n<p>Họ t&igrave;m ra Hoshimiya Mukuro, Tinh linh thứ mười lang thang khắp vũ trụ. Shidou đ&atilde; cố gắng tr&ograve; chuyện với c&ocirc; bằng việc truyền t&iacute;n hiệu h&igrave;nh ảnh từ Tr&aacute;i Đất v&agrave;o vũ trụ, tuy nhi&ecirc;n&hellip;</p>\r\n\r\n<p>&ldquo;Bị cuốn v&agrave;o sự đạo đức giả của cậu thật phiền phức. Đừng bao giờ xuất hiện trước mặt Muku lần nữa.&rdquo;</p>\r\n\r\n<p>Cậu lại nhận được lời khước từ ch&iacute; mạng hơn bao giờ hết.</p>\r\n\r\n<p>Để mở ra những t&acirc;m tư thầm k&iacute;n của một Tinh linh vốn đ&atilde; đ&oacute;ng cửa cảm x&uacute;c v&agrave; kh&oacute;a chặt tr&aacute;i tim m&igrave;nh, cậu sẽ phải hẹn h&ograve; với c&ocirc; v&agrave; khiến c&ocirc; n&agrave;ng y&ecirc;u m&igrave;nh!?</p>\r\n\r\n<p>#amak #ln #lightnovel #datealive #date_a_live #mukuro</p>', '128000', '104000', 'DAL_1477.jpg', 0, NULL, NULL),
(7, 3, '86-Eighty Six - Tập 1', 3, 'dfsdfdfsd', 'fsdfsdf', '102400', '128000', '8645.jpg', 0, NULL, NULL),
(8, 3, 'ARIFURETA – Từ Tầm Thường Đến Bất Khả Chiến Bại – Tập 6', 4, '<h2>M&ocirc; tả</h2>\r\n\r\n<ul>\r\n	<li>T&aacute;c giả: Shirakome Ryo</li>\r\n	<li>Minh họa: TakayaKi</li>\r\n	<li>Dịch giả: Nguyễn Minh Trang</li>\r\n	<li>Thể loại: Light Novel</li>\r\n	<li>Khổ s&aacute;ch: 13x18cm</li>\r\n	<li>Số trang: 460 trang&nbsp;</li>\r\n	<li>ISBN: 978-604-398-351-7</li>\r\n	<li>NXB li&ecirc;n kết: NXB H&agrave; Nội</li>\r\n	<li>Gi&aacute; b&igrave;a: 169.000</li>\r\n	<li>Qu&agrave; tặng k&egrave;m: 01 bookmark, 01 postcard, 01 phong b&igrave; gồm 12 postcard lịch 7x10cm (số lượng c&oacute; hạn cho 500 đơn h&agrave;ng đầu ti&ecirc;n), 01 poster A3 (số lượng c&oacute; hạn)&nbsp;</li>\r\n	<li>Ph&aacute;t h&agrave;nh: 28/04/2023</li>\r\n</ul>', '<p>Giới thiệu:</p>\r\n\r\n<p>Sau khi chinh phục th&agrave;nh c&ocirc;ng Di t&iacute;ch biển s&acirc;u Melusine, tr&ecirc;n con đường di chuyển đến mục ti&ecirc;u tiếp theo trong Thất đại m&ecirc; cung - Rừng rậm Haltina, nh&oacute;m Hajime đ&atilde; c&oacute; dịp t&aacute;i ngộ với c&ocirc;ng ch&uacute;a Liliana của vương quốc Heiligh. Đồng thời, bọn họ cũng phải đ&oacute;n nhận một tin xấu: c&ocirc; Aiko, người vẫn lu&ocirc;n tin tưởng, bảo ban Hajime d&ugrave; cậu đ&atilde; thay đổi, đ&atilde; bị một kẻ lạ mặt bắt c&oacute;c.&nbsp;</p>\r\n\r\n<p>&ldquo;Trước mắt, ch&uacute;ng ta cứ đi giải cứu c&ocirc; Aiko đ&atilde;.&rdquo;</p>\r\n\r\n<p>Hajime đ&atilde; đưa ra sự lựa chọn của m&igrave;nh. Kh&ocirc;ng l&agrave;m ngơ, cũng kh&ocirc;ng bỏ mặc, m&agrave; l&agrave; ra tay ứng cứu.</p>\r\n\r\n<p>Đ&iacute;ch đến l&agrave; ngọn Thần Sơn, trụ sở ch&iacute;nh của Gi&aacute;o hội Th&aacute;nh gi&aacute;o. Tại đ&acirc;y, giữa &ldquo;con qu&aacute;i vật từ đ&aacute;y vực thẳm&rdquo;, cũng l&agrave; người bị Gi&aacute;o hội tuy&ecirc;n bố l&agrave; kẻ dị gi&aacute;o, c&ugrave;ng với &ldquo;t&ocirc;ng đồ của Thần&rdquo; sẽ xảy ra một cuộc chạm tr&aacute;n!&nbsp;</p>\r\n\r\n<p>#amak #ln #arifureta #lightnovel</p>', '169000', '135000', 'bia_ari_6_65569668fbde47bab404fc2deb618ac2_master96.jpg', 0, NULL, NULL),
(9, 3, 'Hiệp Sĩ Lưu Ban - Tập 12', 3, '<h2>M&ocirc; tả</h2>\r\n\r\n<ul>\r\n	<li>T&aacute;c giả: Riku Misora</li>\r\n	<li>Minh họa: WON</li>\r\n	<li>Dịch giả: Ho&agrave;ng Việt Tr&acirc;n</li>\r\n	<li>Thể loại: Light novel</li>\r\n	<li>Khổ s&aacute;ch: 13x18cm</li>\r\n	<li>Số trang: 394 trang</li>\r\n	<li>ISBN: 978-604-398-097-4</li>\r\n	<li>NXB li&ecirc;n kết: NXB Hồng Đức</li>\r\n	<li>Qu&agrave; tặng k&egrave;m: 01 bookmark, 01 postcard</li>\r\n	<li>Đặc biệt: Th&ecirc;m 01 poster A3, 01 card PVC 9x12cm cho 500 đơn h&agrave;ng đầu ti&ecirc;n. Gi&aacute; b&igrave;a 128.000đ</li>\r\n	<li>Ph&aacute;t h&agrave;nh: 30/05/2023</li>\r\n</ul>', '<p>Giới thiệu:</p>\r\n\r\n<p>Sau tuy&ecirc;n bố của Lunaeyes, chiến tranh nổ ra với Cradleland đ&atilde; chuyển th&agrave;nh trận chiến đại diện ph&acirc;n thắng bại. Tuy nhi&ecirc;n, một trong số những th&agrave;nh vi&ecirc;n được chọn cho trận chiến đại diện - Stella lại cảm nhận r&otilde; r&agrave;ng sự thiếu s&oacute;t của m&igrave;nh th&ocirc;ng qua c&aacute;c trận chiến với Ma nh&acirc;n.</p>\r\n\r\n<p>Trong khoảng thời gian c&oacute; hạn n&agrave;y, để t&igrave;m cho m&igrave;nh sức mạnh mới, Stella lựa chọn th&aacute;ch đấu với Kiếm sĩ mạnh nhất thế giới - Tỷ dực Edelweiss để c&oacute; thể vượt qua giới hạn của ch&iacute;nh bản th&acirc;n!</p>\r\n\r\n<p>Khoảng c&aacute;ch thực lực c&aacute;ch biệt, thậm ch&iacute; ngay cả đến gần c&ocirc; cũng kh&ocirc;ng l&agrave;m được. D&ugrave; vậy, Stella vẫn quyết t&acirc;m d&ugrave;ng to&agrave;n bộ sức lực m&agrave; ki&ecirc;n tr&igrave; tới c&ugrave;ng. Nhưng, đ&oacute; lại l&agrave; khởi đầu cho một thử th&aacute;ch khắc nghiệt vượt qu&aacute; cả tưởng tượng của c&ocirc;!</p>\r\n\r\n<p>#amak #ln #lightnovel #hslb #hiệp_sĩ_lưu_ban</p>', '128000', '102000', 'bia_hslb12_21db9fa42198451c917e84f74bd44e77_master12.jpg', 0, NULL, NULL),
(10, 3, 'GAMERS! – Tập 5', 3, '<h2>M&ocirc; tả</h2>\r\n\r\n<ul>\r\n	<li>T&aacute;c giả: Sekina Aoi</li>\r\n	<li>Minh họa: Sabotenn</li>\r\n	<li>Dịch giả: Cupid</li>\r\n	<li>Thể loại: Light Novel</li>\r\n	<li>Khổ s&aacute;ch: 13x18cm</li>\r\n	<li>Số trang: 264 trang&nbsp;</li>\r\n	<li>ISBN: 978-604-374-577-1</li>\r\n	<li>NXB li&ecirc;n kết: NXB H&agrave; Nội\r\n	<ul>\r\n		<li>Qu&agrave; tặng k&egrave;m: 01 bookmark bế h&igrave;nh 10x15cm, 01 standee giấy 10x17cm, 01 poster A3.&nbsp;Giá bìa 108.000vnđ</li>\r\n		<li>Quà tặng giới hạn th&ecirc;m cho sách: m&oacute;c kh&oacute;a nh&acirc;n vật có tem đ&ocirc;̣c quy&ecirc;̀n Kadokawa (d&agrave;nh cho 200 đơn đầu ti&ecirc;n).&nbsp;Giá bìa 108.000vnđ</li>\r\n	</ul>\r\n	</li>\r\n	<li>Ph&aacute;t h&agrave;nh: 25/02/2023</li>\r\n</ul>', '<p>Giới thiệu:</p>\r\n\r\n<p>&ldquo;Ưu ti&ecirc;n Aguri hơn việc chơi game&rdquo;, Amano Keita, một nh&acirc;n vật ch&iacute;nh tầm thường như quần ch&uacute;ng, đ&atilde; ph&aacute; vỡ thiết lập nh&acirc;n vật của m&igrave;nh. Chưa kể c&ograve;n &ldquo;chim chuột&rdquo; với Chiaki ở qu&aacute;n ăn gia đ&igrave;nh, xxx với Konoha giống như game khi&ecirc;u d&acirc;m, c&oacute; kh&aacute;c g&igrave; nh&acirc;n vật ch&iacute;nh trong tiểu thuyết harem đ&acirc;u chứ! Uehara v&agrave; Tendo kh&ocirc;ng c&aacute;ch n&agrave;o ch&uacute;c ph&uacute;c được cho c&aacute;i thế giới kh&ocirc;ng hề tuyệt vời n&agrave;y. Mặc d&ugrave; rất muốn bắt đầu lại từ con số 0 từ thế giới kh&aacute;c, nhưng phong c&aacute;ch của t&aacute;c phẩm lại kh&ocirc;ng cho ph&eacute;p chuyển trường&hellip;</p>\r\n\r\n<p>Nếu thế, chỉ c&ograve;n c&aacute;ch x&acirc;y dựng từ sự đ&atilde; rồi!</p>\r\n\r\n<p>Ch&iacute;nh v&igrave; vậy s&acirc;n khấu ch&iacute;nh sẽ l&agrave; &ldquo;Vương quốc Spiel&rdquo; (c&ocirc;ng vi&ecirc;n giải tr&iacute;), nơi to&aacute;t l&ecirc;n cảm gi&aacute;c của một th&agrave;nh phố nh&agrave;m ch&aacute;n trong phần giữa của dạng game nhập vai RPG! Cuộc đấu tr&iacute; khốc liệt giữa những gamer chuy&ecirc;n g&acirc;y rắc rối ch&iacute;nh thức bắt đầu!</p>\r\n\r\n<p>M&agrave;, kh&ocirc;ng thể giải quyết được ở trong game &agrave;!?</p>\r\n\r\n<p>#amak #rom_com #gamers5 #lightnovel</p>', '108000', '86000', 'bia_gamers_5__631f0186b35d4b32a7e10e990c49bb39_master57.jpg', 0, NULL, NULL),
(11, 3, 'Date A Live - Tập 13 - NIA CREATION SKU: 9786043822960TH1', 3, '<h2>M&ocirc; tả</h2>\r\n\r\n<ul>\r\n	<li>T&aacute;c giả: Koushi Tachibana</li>\r\n	<li>Minh họa: Tsunako</li>\r\n	<li>Dịch giả: Touno Shi&nbsp;</li>\r\n	<li>Thể loại: Light Novel</li>\r\n	<li>Khổ s&aacute;ch: 13x18cm</li>\r\n	<li>Số trang: 362 trang (8 trang m&agrave;u, 356 trang đen trắng)</li>\r\n	<li>ISBN: 978-604-382-296-0</li>\r\n	<li>NXB li&ecirc;n kết: NXB H&agrave; Nội</li>\r\n	<li>Qu&agrave; tặng k&egrave;m:\r\n	<ul>\r\n		<li>Bản thường: 2 Bookmark, 1 Postcard. Gi&aacute; b&igrave;a 108.000đ</li>\r\n		<li>Bản boxset 1: gồm hộp đựng, s&aacute;ch k&egrave;m 2 Bookmark, 1 Postcard, 1 vỏ gối 40x60cm (kh&ocirc;ng k&egrave;m ruột), 1 poster A3 (mẫu 1). Gi&aacute; b&igrave;a: 258.000đ</li>\r\n		<li>Bản boxset 2:&nbsp;gồm hộp đựng, s&aacute;ch k&egrave;m 2 Bookmark, 1 Postcard, 1 l&oacute;t chuột kt 22x26cm, set 10 postcard đặc biệt, 1 poster A3 (mẫu 2). Gi&aacute; b&igrave;a: 258.000đ</li>\r\n	</ul>\r\n	</li>\r\n	<li>Ph&aacute;t h&agrave;nh: 30/11/2022</li>\r\n</ul>', '<p>Giới thiệu:</p>\r\n\r\n<p>Cuối th&aacute;ng 12, khi lễ Gi&aacute;ng sinh vừa tr&ocirc;i qua, Itsuka Shidou v&ocirc; t&igrave;nh gặp được Nia - tinh linh số 9 đang đ&oacute;i lả b&ecirc;n vệ đường.&nbsp;</p>\r\n\r\n<p>&ldquo;Cứ đ&agrave; n&agrave;y chắc phải hủy bản thảo số tiếp theo mất th&ocirc;i&hellip;&rdquo;</p>\r\n\r\n<p>V&igrave; một l&yacute; do n&agrave;o đ&oacute;, Shidou đ&agrave;nh phải trợ gi&uacute;p Nia trong c&ocirc;ng việc vẽ truyện tranh ở nh&agrave; của c&ocirc;, b&ecirc;n cạnh đ&oacute; cậu c&ograve;n biết được rằng c&ocirc; ch&iacute;nh l&agrave; Tinh linh bị DEM giam giữ&hellip; Cả hội l&ecirc;n kế hoạch phong ấn Linh lực của Nia bằng một cuộc hẹn ở Akihabara y&ecirc;u dấu của c&ocirc;, thế nhưng&hellip;</p>\r\n\r\n<p>&ldquo;Thực ra t&ocirc;i&hellip;chỉ y&ecirc;u những thứ l&agrave; 2D th&ocirc;i&hellip;&rdquo;</p>\r\n\r\n<p>Giữa chừng cuộc hẹn h&ograve; ng&agrave;y h&ocirc;m đ&oacute;, cậu lại nghe được ph&aacute;t ng&ocirc;n g&acirc;y chấn động n&agrave;y của Nia!?</p>\r\n\r\n<p>Liệu Shidou c&oacute; thể ph&aacute; vỡ r&agrave;o cản về kh&ocirc;ng gian, k&eacute;o Tinh linh họa sĩ truyện tranh ki&ecirc;m otaku n&agrave;y khỏi thế giới 2D, hẹn h&ograve; với c&ocirc; n&agrave;ng v&agrave; khiến Nia y&ecirc;u m&igrave;nh kh&ocirc;ng!?</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>#amak #ln #lightnovel #datealive #date_a_live #nia&nbsp;</p>', '128000', '102400', 'bia-dal13_edfaed46fcec4873944b630d63bf32e8_master10.jpg', 0, NULL, NULL),
(12, 3, 'World Teacher – Tập 5', 3, '<ul>\r\n	<li>T&aacute;c giả: Koichi Neko</li>\r\n	<li>Minh họa: Nardack</li>\r\n	<li>Người dịch: Rimoka &amp; Ho&agrave;ng Gia</li>\r\n	<li>Khổ s&aacute;ch: 13x18cm</li>\r\n	<li>Số trang: 468 trang</li>\r\n	<li>ISBN: &nbsp;978-604-338-194-8</li>\r\n	<li>NXB li&ecirc;n kết: NXB Hồng Đức</li>\r\n	<li>Qu&agrave; tặng k&egrave;m:&nbsp;\r\n	<ul>\r\n		<li>Bản thường: bookmark bế h&igrave;nh, postcard, card snd&nbsp;</li>\r\n		<li>Bản đặc biệt: bookmark bế h&igrave;nh, postcard, card sns, &nbsp;poster A3 (poster cho c&aacute;c nh&agrave; ph&aacute;t h&agrave;nh c&oacute; hỗ trợ vận chuyển)</li>\r\n	</ul>\r\n	</li>\r\n	<li>Gi&aacute; b&igrave;a: 146.000 vnđ</li>\r\n	<li>Ph&aacute;t h&agrave;nh: 2/05/2022</li>\r\n</ul>', '<h1>World Teacher &ndash; Tập 5</h1>\r\n\r\n<p>Nh&oacute;m của Sirius, sau khi tốt nghiệp Học viện Elysium một c&aacute;ch thuận lợi, đ&atilde; quyết định l&ecirc;n đường đi du ngoạn th&aacute;m hiểm để mở mang tầm hiểu biết. Tr&ecirc;n đường đi, họ đ&atilde; chạm tr&aacute;n một con s&oacute;i trắng khổng lồ được tộc s&oacute;i bạc t&ocirc;n thờ gọi l&agrave; &ldquo;Ng&acirc;n Lang&rdquo;. Con qu&aacute;i th&uacute; to&aacute;t ra kh&iacute; thế &aacute;p đảo đ&oacute; ch&iacute;nh l&agrave; một sinh vật được chuyển sinh sang thế giới n&agrave;y giống như Sirius. V&agrave; c&ograve;n hơn thế nữa, n&oacute; vốn dĩ c&oacute; một mối li&ecirc;n hệ n&agrave;o đ&oacute; với Sirius ở thế giới cũ &hellip;!?</p>\r\n\r\n<p>Cả nh&oacute;m tiếp tục đồng h&agrave;nh với ch&uacute; s&oacute;i trắng đ&oacute;, Hokuto. Sau đ&oacute; họ đ&atilde; t&aacute;i hợp với thuộc hạ ng&agrave;y xưa Dee v&agrave; Noel. Tại qu&aacute;n ăn nơi hai người c&ugrave;ng quản l&yacute;, Noir cũng đ&atilde; xuất hiện ở đấy. Chia ly đem đến những nh&acirc;n duy&ecirc;n mới, v&agrave; cuộc sống mới sẽ trở n&ecirc;n rực rỡ mu&ocirc;n sắc m&agrave;u.</p>\r\n\r\n<p>M&agrave;n thứ 5 của nhiệm vụ nu&ocirc;i dưỡng kỳ t&agrave;i thể thức thế giới kh&aacute;c! Sự trưởng th&agrave;nh của c&aacute;c đệ tử tiếp tục bước sang một trang mới!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>#amak #overlap #worldteacher #lightnovel</p>', '146000', '124000', 'img_0100_4fe1ea61c50b481fbc9727237a295629_master32.jpg', 0, NULL, NULL),
(13, 3, 'Date A Live - Tập 4', 3, '<h2>M&ocirc; tả</h2>\r\n\r\n<ul>\r\n	<li>T&aacute;c giả:&nbsp;<a href=\"https://amakstore.vn/collections/koushi-tachibana/\">Tachibana Koushi&nbsp;</a></li>\r\n	<li>Minh họa: Tsunako&nbsp;</li>\r\n	<li>Dịch giả: Đức Trung&nbsp;</li>\r\n	<li>Khổ s&aacute;ch: 13x18cm&nbsp;</li>\r\n	<li>Số trang: 376 trang&nbsp;</li>\r\n	<li>ISBN: 978-604-83-2409-4&nbsp;</li>\r\n	<li>NXB li&ecirc;n kết: NXB Hải Ph&ograve;ng&nbsp;</li>\r\n	<li>Gi&aacute; b&igrave;a: 98.000&nbsp;</li>\r\n	<li>Ph&aacute;t h&agrave;nh: 27/5/2019&nbsp;</li>\r\n	<li>Bản thường:&nbsp;Qu&agrave; tặng: Bookmark bế h&igrave;nh&nbsp;</li>\r\n	<li>Bản đặc biệt: Qu&agrave; tặng: Bookmark bế h&igrave;nh + Tập phụ bản m&agrave;u (số lượng c&oacute; hạn)&nbsp;</li>\r\n</ul>', '<h2>Date A Live - Tập 4</h2>\r\n\r\n<p>D&ugrave; đ&atilde; n&oacute;i sẽ cứu Tinh linh tồi tệ nhất &ndash; Kurumi v&agrave; Mana, nhưng cuối c&ugrave;ng Shidou vẫn kh&ocirc;ng thể l&agrave;m được g&igrave;.&nbsp;</p>\r\n\r\n<p>C&oacute; lẽ mọi chuyện đ&atilde; kết th&uacute;c nếu Itsuka Kotori kh&ocirc;ng xuất hiện.&nbsp;</p>\r\n\r\n<p>&ldquo;Từ năm năm về trước&hellip;Em đ&atilde; trở th&agrave;nh Tinh linh, khả năng hồi phục của Shidou vốn dĩ l&agrave; sức mạnh của em&rdquo;&nbsp;</p>\r\n\r\n<p>Sự thật được Kotori tiết lộ. Về việc c&ocirc; ấy trở th&agrave;nh Tinh linh, lần đầu ti&ecirc;n phong ấn Tinh linh Shidou v&agrave; bố mẹ của Origami bị Tinh linh s&aacute;t hại năm năm về trước như thế n&agrave;o.&nbsp;</p>\r\n\r\n<p>&ldquo;H&ocirc;m nay, em sẽ kh&ocirc;ng c&ograve;n l&agrave; ch&iacute;nh em nữa v&agrave; trước l&uacute;c đ&oacute;, em muốn hẹn h&ograve; với anh hai&rdquo;&nbsp;</p>\r\n\r\n<p>Thời gian chỉ giới hạn trong một ng&agrave;y. Để cứu c&ocirc; em g&aacute;i đ&aacute;ng y&ecirc;u cũng như vị chỉ huy ki&ecirc;n định v&agrave; lạnh l&ugrave;ng, h&atilde;y hẹn h&ograve; v&agrave; cưa đổ anh ấy.</p>', '98000', '78000', 'date-a-live-4_f8c0cb1944b14efe8b13cf6444da37f6_master81.jpg', 0, NULL, NULL),
(14, 3, 'Date A Live – Tập 10 – Tobiichi Angel', 3, '<h2>M&ocirc; tả</h2>\r\n\r\n<ul>\r\n	<li>T&aacute;c giả:&nbsp;<a href=\"https://amakstore.vn/collections/koushi-tachibana/\">Koushi Tachibana&nbsp;</a></li>\r\n	<li>Minh họa: Tsunako&nbsp;</li>\r\n	<li>Người dịch: Đức Trung&nbsp;</li>\r\n	<li>Khổ s&aacute;ch: 13x18cm&nbsp;</li>\r\n	<li>Số trang: 350 trang&nbsp;</li>\r\n	<li>ISBN: 978-604-55-6561-2&nbsp;</li>\r\n	<li>NXB li&ecirc;n kết: NXB H&agrave; Nội&nbsp;</li>\r\n	<li>Qu&agrave; tặng k&egrave;m:&nbsp;\r\n	<ul>\r\n		<li>Bản thường: bookmark&nbsp;</li>\r\n		<li>Bản đặc biệt: bookmark, postcard b&iacute; mật, poster&nbsp;</li>\r\n		<li>Boxset: bookmark, postcard b&iacute; mật, poster vải Kurumi&nbsp;</li>\r\n	</ul>\r\n	</li>\r\n	<li>Ph&aacute;t h&agrave;nh: 30/1/2021</li>\r\n</ul>', '<h2>Date A Live &ndash; Tập 10 &ndash; Tobiichi Angel</h2>\r\n\r\n<p>Date A Live đ&atilde; trở lại với c&acirc;u chuyện của 5 năm trước, một thiếu nữ đ&atilde; chứng kiến việc cha mẹ m&igrave;nh bị Tinh linh s&aacute;t hại ngay trước mắt &ndash; Tobiichi Origami.</p>\r\n\r\n<p>Kể từ đ&oacute;, mục đ&iacute;ch sống của thiếu nữ ấy đ&atilde; trở th&agrave;nh truy l&ugrave;ng kẻ th&ugrave; của cha mẹ, v&agrave; x&oacute;a sổ Tinh linh khỏi thế giới n&agrave;y. V&agrave;i năm sau người thiếu nữ đ&atilde; trở th&agrave;nh Ph&aacute;p sư v&agrave; nhận được sức mạnh để chiến đấu với Tinh linh, c&ocirc; nguyền rủa sự bất lực của bản th&acirc;n. Để giết được Tinh linh, c&ocirc; cần nhiều sức mạnh hơn nữa. V&agrave; để ho&agrave;n th&agrave;nh ước vọng đ&oacute;&hellip;</p>\r\n\r\n<p>&ldquo;Đ&Acirc;Y L&Agrave; C&Aacute;CH C&Oacute; T&Iacute;NH CH&Iacute;NH X&Aacute;C CAO NHẤT NHẰM GI&Uacute;P CẬU KH&Ocirc;NG BỊ LI&Ecirc;N LỤY.&rdquo;</p>\r\n\r\n<p>&ldquo;RỐT CUỘC L&Agrave; SAO!&rdquo;</p>\r\n\r\n<p>&ldquo;&hellip; TRẬN CHIẾN GIỮA M&Igrave;NH V&Agrave; C&Aacute;C TINH LINH&rdquo;</p>\r\n\r\n<p>Origami đ&atilde; giam nhốt Itsuka Shidou, người đặc biệt duy nhất đối với c&ocirc;, rồi c&ocirc; hướng về chiến trường nhằm ho&agrave;n th&agrave;nh bi nguyện hạ s&aacute;t c&aacute;c Tinh linh. Để ngăn cản trận chiến ấy, Shidou sẽ phải hẹn h&ograve;, v&agrave; t&aacute;n đổ người thiếu nữ vốn căm th&ugrave; Tinh linh kia!?</p>\r\n\r\n<p>Mời c&aacute;c bạn đ&oacute;n đọc&nbsp;Date A Live&nbsp;&ndash; Tập 10 &ndash; Tobiichi Angel.</p>', '108000', '86000', 'bia-date-a-live-10_33001a4ef43c401d900e8a4d0b9c1345_master70.jpg', 0, NULL, NULL),
(15, 1, 'Kase và Cơm Hộp', 3, '<h2>M&ocirc; tả</h2>\r\n\r\n<ul>\r\n	<li>T&aacute;c giả: Takashima Hiromi</li>\r\n	<li>Dịch giả: Vi Vũ</li>\r\n	<li>Thể loại: Truyện tranh GL</li>\r\n	<li>Khổ s&aacute;ch: 13x18cm</li>\r\n	<li>Số trang: 170 trang&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>ISBN: 978-604-395-287-2</li>\r\n	<li>NXB li&ecirc;n kết: NXB D&acirc;n Tr&iacute;</li>\r\n	<li>Qu&agrave; tặng k&egrave;m: 01 sticker 10x15cm, 01 LINE card 9x12cm (QU&Agrave; TẶNG MỚI - số lượng c&oacute; hạn), th&ecirc;m 1 poster A3 cho 1000 đơn h&agrave;ng đầu ti&ecirc;n</li>\r\n	<li>Gi&aacute; b&igrave;a: 80.000vnd</li>\r\n	<li>Ph&aacute;t h&agrave;nh: 10/06/2023</li>\r\n</ul>', '<p>Giới thiệu:</p>\r\n\r\n<p>&ldquo;D&ugrave; đều l&agrave; con g&aacute;i, nhưng ch&uacute;ng tớ đ&atilde; trở th&agrave;nh một đ&ocirc;i.&rdquo;</p>\r\n\r\n<p>Năm lớp 12, sau khi Yamada v&agrave; Kase - ng&ocirc;i sao của CLB Điền kinh - bắt đầu hẹn h&ograve;, họ cũng trở th&agrave;nh bạn c&ugrave;ng lớp. Yamada đắm ch&igrave;m trong hạnh ph&uacute;c khi nghĩ đến viễn cảnh c&oacute; thể vừa ngồi học vừa ngắm nh&igrave;n c&ocirc; bạn xinh đẹp của m&igrave;nh.</p>\r\n\r\n<p>&ldquo;Thế nhưng&hellip;&lsquo;hẹn h&ograve;&rsquo; nghĩa l&agrave; l&agrave;m g&igrave; nhỉ?&rdquo;</p>\r\n\r\n<p>Giữa l&uacute;c ấy, chuyến du lịch ngoại kh&oacute;a đ&aacute;ng nhớ trong qu&atilde;ng đời học sinh cũng đến&hellip;</p>\r\n\r\n<p>C&ugrave;ng với nụ cười v&agrave; cả những giọt nước mắt, khoảng c&aacute;ch giữa hai người ng&agrave;y một x&iacute;ch lại gần hơn. Một c&acirc;u chuyện t&igrave;nh y&ecirc;u tuổi học tr&ograve; vừa ngọt ng&agrave;o, vừa cảm động giữa hai thiếu nữ mộng mơ đang chờ đ&oacute;n c&aacute;c bạn!</p>\r\n\r\n<p>#amak #gl #kasevacomhop #yuri</p>', '0', '80000', 'bia_kase_va_com_hop_b05717267dd546d5b152e024a03a2661_master77.jpg', 0, NULL, NULL),
(16, 1, 'Đồng Điệu', 3, '<h2>M&ocirc; tả</h2>\r\n\r\n<ul>\r\n	<li>T&aacute;c giả: Gorou Kanbe</li>\r\n	<li>Dịch giả: Enogi</li>\r\n	<li>Thể loại: Truyện tranh BL</li>\r\n	<li>Khổ s&aacute;ch: 13x18cm</li>\r\n	<li>Số trang: 176 trang</li>\r\n	<li>ISBN: 978-604-339-637-9</li>\r\n	<li>NXB li&ecirc;n kết: NXB H&agrave; Nội</li>\r\n	<li>Qu&agrave; tặng k&egrave;m: 1 bookmark hai mặt, 1 postcard hai mặt</li>\r\n	<li>Gi&aacute; b&igrave;a: 89.000đ</li>\r\n	<li>Ph&aacute;t h&agrave;nh: 10/06/2023</li>\r\n</ul>', '<p>Giới thiệu:&nbsp;</p>\r\n\r\n<p>Trong mớ giấy tờ lộn xộn phải nộp của năm học mới, một sự nhầm lẫn nhỏ đ&atilde; xảy ra v&igrave; sự giống nhau giữa hai con người - &ldquo;Tanaka&rdquo; v&agrave; &ldquo;Nakata&rdquo;.</p>\r\n\r\n<p>Kh&ocirc;ng chỉ c&oacute; vậy, cả chiều cao, sở th&iacute;ch, ốp điện thoại&hellip;Những điều tr&ugrave;ng hợp của hai người cứ thế nhiều l&ecirc;n.</p>\r\n\r\n<p>Nhưng điểm giống nhau giữa họ kh&ocirc;ng dừng lại ở đ&oacute;&hellip;</p>\r\n\r\n<p>#amak #manga #BL #Đồng_điệu&nbsp;#nitamono_doushi_no</p>', '0', '89000', 'bia_dong_dieu_ba78032ace194c71bca9a01184a77e3b_master8.jpg', 0, NULL, NULL),
(17, 1, 'Người Lạ Dưới Gió Xuân Tập 2', 4, '<h2>M&ocirc; tả</h2>\r\n\r\n<ul>\r\n	<li>T&aacute;c giả: Kii Kanna&nbsp;</li>\r\n	<li>Dịch giả: Ho&agrave;ng Anh</li>\r\n	<li>Thể loại: Truyện tranh BL</li>\r\n	<li>Khổ s&aacute;ch: 13x18cm</li>\r\n	<li>Số trang: 182 trang</li>\r\n	<li>ISBN: 978-604-395-289-6</li>\r\n	<li>NXB li&ecirc;n kết: NXB H&agrave; Nội</li>\r\n	<li>Qu&agrave; tặng k&egrave;m:&nbsp;</li>\r\n	<li>Bản thường: 01 bookmark, 01 postcard, bộ 6 card bo g&oacute;c c&aacute;n m&agrave;ng &aacute;nh trai, 01 sticker (số lượng c&oacute; hạn cho 1000 đơn h&agrave;ng đầu ti&ecirc;n). Gi&aacute; b&igrave;a: 98.000vnd</li>\r\n	<li>Bản thường th&ecirc;m poster: 107.000vnd</li>\r\n	<li>Bản đặc biệt: 01 bookmark, 01 postcard, bộ 6 card bo g&oacute;c c&aacute;n m&agrave;ng &aacute;nh trai, 01 sticker, 1 clearcard (ngẫu nhi&ecirc;n 1 trong 2 mẫu), 1 clearbag A4 (Qu&agrave; tặng&nbsp;bản đặc biệt c&oacute; sử dụng c&aacute;c h&igrave;nh ảnh ngo&agrave;i truyện mua th&ecirc;m từ t&aacute;c giả). Gi&aacute; 158.000vnd.</li>\r\n	<li><strong>Qu&agrave; tặng d&agrave;nh cho đơn s&aacute;ch bản đặc biệt thanh to&aacute;n trước bằng momo/chuyển khoản tr&ecirc;n website trước ng&agrave;y 26/04: 01 postcard nhũ lấp l&aacute;nh &aacute;nh trai&nbsp;10x15cm.</strong></li>\r\n	<li>Ph&aacute;t h&agrave;nh: 15/04/2023</li>\r\n</ul>', '<p>Giới thiệu:</p>\r\n\r\n<p>Shun, tiểu thuyết gia trẻ tuổi, đ&atilde; dẫn người m&igrave;nh thương - Mio, trở lại qu&ecirc; nh&agrave; sau nhiều năm bặt v&ocirc; &acirc;m t&iacute;n.&nbsp;</p>\r\n\r\n<p>Hai người đ&atilde; dọn ra ở ri&ecirc;ng v&agrave; bắt đầu cuộc sống kỳ lạ b&ecirc;n gia đ&igrave;nh Shun c&ugrave;ng những chuyến gh&eacute; thăm thường xuy&ecirc;n của cậu em trai nu&ocirc;i Fumi.</p>\r\n\r\n<p>Thời gian đầu, Shun cảm thấy rất kh&oacute; chịu, nhưng ở b&ecirc;n cạnh Mio lu&ocirc;n lạc quan vui vẻ, anh đ&atilde; dần đ&oacute;n nhận cuộc sống n&agrave;y.</p>\r\n\r\n<p>Trong những ng&agrave;y th&aacute;ng ấy, liệu Shun c&oacute; hiểu r&otilde; hơn cảm x&uacute;c của Mio&hellip;?</p>\r\n\r\n<p>#amak #bl #nguoiladuoigioxuan #kiikanna&nbsp;</p>', '98000', '83000', 'bia_gio_xuan_2_2bf2a6957e4240f7946a8cc277ad48ba_master30.jpg', 0, NULL, NULL),
(18, 1, 'Sasaki và Miyano - Tập 6', 3, '<ul>\r\n	<li>T&aacute;c giả: Shou Harusono</li>\r\n	<li>Dịch giả: P Pea Peach</li>\r\n	<li>Thể loại: Truyện tranh BL</li>\r\n	<li>Khổ s&aacute;ch: 13x18cm</li>\r\n	<li>Số trang: 148 trang</li>\r\n	<li>ISBN: 978-604-382-739-2</li>\r\n	<li>NXB li&ecirc;n kết: NXB H&agrave; Nội</li>\r\n	<li>Qu&agrave; tặng k&egrave;m:\r\n	<ul>\r\n		<li>Bản thường: 01 Bookmark, 01 Postcard 2 mặt, 01 l&oacute;t ly hai mặt. Gi&aacute; b&igrave;a 76.000đ</li>\r\n		<li>Bản thường c&oacute; poster: 85.000đ</li>\r\n		<li>Bản giới hạn: 01 Bookmark, 01 Postcard 2 mặt, 01 l&oacute;t ly hai mặt, 01 poster A3, 04 calendar cards 2023 (12x17cm), 03 bao l&igrave; x&igrave; (8x18cm), 01 kh&aacute;nh acrylic 6,5cm, tem độc quyền ch&iacute;nh h&atilde;ng Kadokawa. Gi&aacute; b&igrave;a: 169.000đ</li>\r\n	</ul>\r\n	</li>\r\n	<li>Ph&aacute;t h&agrave;nh: 15/03/2023</li>\r\n</ul>', '<p>Giới thiệu:</p>\r\n\r\n<p>&ldquo;M&igrave;nh th&iacute;ch anh Sasaki.&rdquo;</p>\r\n\r\n<p>Cuối c&ugrave;ng cũng nhận ra t&igrave;nh cảm trong l&ograve;ng, Miyano quyết định sẽ đ&aacute;p lại lời tỏ t&igrave;nh của Sasaki. Về phần m&igrave;nh, Sasaki su&yacute;t ch&uacute;t nữa cũng kh&ocirc;ng k&igrave;m n&eacute;n được t&igrave;nh cảm d&agrave;nh cho người đ&agrave;n em kh&oacute;a dưới&hellip;?</p>\r\n\r\n<p>#amak #manga #shounen_ai #BL #sasaki #miyano</p>', '76000', '64000', 'bia_sasaki_6_7b54b6fc415a43c4a0f841d0f0044d23_master50.jpg', 0, NULL, NULL),
(19, 1, 'Thanh Xuân Mộng Mơ', 3, '<h2>M&ocirc; tả</h2>\r\n\r\n<ul>\r\n	<li>T&aacute;c giả: Edako Mofumofu</li>\r\n	<li>Dịch giả: Sumeragi Ui</li>\r\n	<li>Thể loại: Truyện tranh BL</li>\r\n	<li>Khổ s&aacute;ch: 13x18cm</li>\r\n	<li>Số trang: 210 trang</li>\r\n	<li>ISBN: 978-604-382-379-0</li>\r\n	<li>NXB li&ecirc;n kết: NXB H&agrave; Nội</li>\r\n	<li>Qu&agrave; tặng k&egrave;m: 1 postcard hai mặt 10x15cm. Gi&aacute; b&igrave;a 89.000đ&nbsp;</li>\r\n	<li>S&aacute;ch in chất liệu giấy BB100</li>\r\n	<li>Ph&aacute;t h&agrave;nh: 15/01/2023</li>\r\n</ul>', '<p>Giới thiệu:</p>\r\n\r\n<p>Để mời idol m&igrave;nh th&iacute;ch đến biểu diễn, Kazunari đ&atilde; tham gia v&agrave;o ban tổ chức lễ hội trường. Tại đ&acirc;y, cậu đ&atilde; gặp Wataru - em trai của mối t&igrave;nh đầu - nguy&ecirc;n nh&acirc;n khiến Kazunari trở th&agrave;nh idol otaku.</p>\r\n\r\n<p>Wataru đ&atilde; từ một đứa trẻ thường xuy&ecirc;n bị bắt nạt trở th&agrave;nh một anh ch&agrave;ng được c&aacute;c c&ocirc; g&aacute;i y&ecirc;u mến v&agrave; c&oacute; đời sống hiện thực vi&ecirc;n m&atilde;n. Cuộc gặp gỡ của họ đ&atilde; v&ocirc; t&igrave;nh để lại một ấn tượng tồi tệ khiến Wataru bị Kazunari nhận định l&agrave; kẻ th&ugrave;. Thế nhưng chẳng hiểu sao Wataru cứ b&aacute;m riết lấy v&agrave; dần dần bước v&agrave;o cuộc sống của Kazunari.</p>\r\n\r\n<p>Sau khi gia nhập ban tổ chức, Kazunari cảm thấy kh&ocirc;ng thoải m&aacute;i khi ở trong một tập thể to&agrave;n những con người h&agrave;o nho&aacute;ng với cuộc sống ngo&agrave;i đời thực trọn vẹn, thế n&ecirc;n khi kh&ocirc;ng thực hiện được nguyện vọng của m&igrave;nh, cậu mới định xin r&uacute;t lui, nhưng rồi lại được biết về sự nỗ lực của Wataru&hellip;</p>\r\n\r\n<p>Cuốn truyện c&ograve;n bao gồm một ngoại truyện ngọt ng&agrave;o về cuộc sống sau n&agrave;y của Kazunari v&agrave; Wataru. Đừng bỏ lỡ tuổi thanh xu&acirc;n đầy t&igrave;nh cảm trong Thanh Xu&acirc;n Mộng Mơ nh&eacute;!</p>\r\n\r\n<p>#amak #manga #BL #thanh_xu&acirc;n_mộng_mơ</p>', '89000', '76000', 'bia_thanh_xuan_mong_mo_dff5d5fca3764b61ab12cf72b2e9c533_master47.jpg', 0, NULL, NULL),
(20, 1, 'Thực Đơn Của Bar Mao', 4, '<h2>M&ocirc; tả</h2>\r\n\r\n<ul>\r\n	<li>T&aacute;c giả: Kumo Natsume&nbsp;</li>\r\n	<li>Dịch giả: Sumeragi Ui&nbsp;</li>\r\n	<li>Thể loại: Truyện tranh BL</li>\r\n	<li>Khổ s&aacute;ch: 13x18cm</li>\r\n	<li>Số trang: 224 trang</li>\r\n	<li>ISBN: 978-604-382-750-7</li>\r\n	<li>NXB li&ecirc;n kết: NXB H&agrave; Nội</li>\r\n	<li>&nbsp;Qu&agrave; tặng k&egrave;m: 01 bookmark, 02 postcard, tặng k&egrave;m 01 poster A3 cho 1000 đơn h&agrave;ng đầu ti&ecirc;n</li>\r\n	<li>&nbsp;S&aacute;ch in tr&ecirc;n chất liệu giấy BB100</li>\r\n	<li>Gi&aacute; b&igrave;a 92.000đ</li>\r\n	<li>Ph&aacute;t h&agrave;nh: 25/02/2023</li>\r\n</ul>', '<p>Giới thiệu:</p>\r\n\r\n<p>Nếu bước xuống cầu thang dẫn đến tầng hầm của ng&ocirc;i nh&agrave; kế b&ecirc;n miếu thờ mi&ecirc;u thần, bạn sẽ tới được Bar Mao, nơi tụ tập b&iacute; mật của bầy m&egrave;o. Ở đ&acirc;y, những ch&uacute; m&egrave;o c&oacute; thể h&oacute;a th&agrave;nh người để thưởng thức những m&oacute;n cao lương mỹ vị như socola hay cơm m&egrave;o phong c&aacute;ch Trung Hoa,v.v&hellip;, v&agrave; c&oacute; những cuộc gặp gỡ th&uacute; vị&hellip;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>#amak #manga #BL #thực_đơn_của_bar_mao&nbsp;<a href=\"https://www.facebook.com/hashtag/barmao_no_oshinagaki?__eep__=6&amp;__cft__[0]=AZX8MN27dFxwtanWcMdcQjLVOXmPt-1dnp9ZyE0q9b-riUvBlXgy-4a_c4t9EmcSOxoIdQ7WnzinYz0oCagXemHL_6aQW4x6BX1k1-Bcc3YkU3eLvYW3jYwmiZ8q2KH04aA&amp;__tn__=*NK-R\" target=\"_blank\">#barmao_no_oshinagaki</a></p>', '92000', '78000', 'img_7095_7be8deb3bf704aaf8c20a68cfc09084e_master67.jpg', 0, NULL, NULL),
(21, 1, 'Tạm Biệt Vườn Hồng', 4, '<h2>M&ocirc; tả</h2>\r\n\r\n<ul>\r\n	<li>T&aacute;c giả: Dr.pepperco</li>\r\n	<li>Dịch giả: Mingg</li>\r\n	<li>Thể loại: Truyện tranh GL</li>\r\n	<li>Khổ s&aacute;ch: 13x18cm</li>\r\n	<li>Số trang:&nbsp;\r\n	<ul>\r\n		<li>Tập 1: 178 trang</li>\r\n		<li>Tập 2: 194 trang&nbsp;</li>\r\n		<li>Tập 3: 192 trang</li>\r\n	</ul>\r\n	</li>\r\n	<li>ISBN: &nbsp; &nbsp; &nbsp;&nbsp;\r\n	<ul>\r\n		<li>Tập 1: 978-604-382-517-6</li>\r\n		<li>Tập 2: 978-604-382-518-3</li>\r\n		<li>Tập 3:&nbsp;978-604-382-519-0</li>\r\n	</ul>\r\n	</li>\r\n	<li>NXB li&ecirc;n kết: NXB H&agrave; Nội</li>\r\n	<li>Qu&agrave; tặng k&egrave;m:&nbsp;\r\n	<ul>\r\n		<li>Tập 1: 01 bookmark hai mặt, 02 postcard hai mặt</li>\r\n		<li>Tập 2:&nbsp;01 bookmark hai mặt, 02 postcard hai mặt</li>\r\n		<li>Tập 3:&nbsp;01 bookmark hai mặt, 02 postcard hai mặt</li>\r\n	</ul>\r\n	</li>\r\n	<li>&nbsp;Gi&aacute; b&igrave;a:&nbsp;\r\n	<ul>\r\n		<li>Tập 1: 86.000 vnd&nbsp;</li>\r\n		<li>Tập 2: 96.000 vnd</li>\r\n		<li>Tập 3: 96.000 vnđ</li>\r\n	</ul>\r\n	</li>\r\n	<li>Phi&ecirc;n bản Đặc Biệt:\r\n	<ul>\r\n		<li>Bản đầy đủ:&nbsp;01 vỏ box, combo 3 tập s&aacute;ch, 03 poster, 01 cleacard, 02 postcard lấp l&aacute;nh &aacute;nh trai. Gi&aacute; b&aacute;n 358.000vnđ</li>\r\n		<li>Bản vỏ box:&nbsp;vỏ box, 1 clearcard, 2 postcard lấp l&aacute;nh &aacute;nh trai&nbsp;(ko k&egrave;m&nbsp;s&aacute;ch v&agrave; poster). Gi&aacute; b&aacute;n 80.000vnđ</li>\r\n	</ul>\r\n	</li>\r\n	<li>Ph&aacute;t h&agrave;nh:&nbsp;\r\n	<ul>\r\n		<li>Tập 1 v&agrave; 2: 03/01/2023</li>\r\n		<li>Tập 3: 03/03/2023</li>\r\n		<li>Boxset: 05/05/2023</li>\r\n	</ul>\r\n	</li>\r\n</ul>', '<p>Giới thiệu:</p>\r\n\r\n<p>Anh quốc, năm 1900.</p>\r\n\r\n<p>Khi t&igrave;nh y&ecirc;u, gia đ&igrave;nh v&agrave; x&atilde; hội l&agrave; những b&uacute;i gai chằng chịt. V&igrave; muốn noi theo nh&agrave; văn mến mộ của m&igrave;nh m&agrave; Kujou Hanako l&ecirc;n đường sang Anh quốc. Khi chẳng c&ograve;n nơi nương tựa, c&ocirc; được nữ qu&yacute; tộc Alice Douglas nhận về l&agrave;m hầu g&aacute;i ri&ecirc;ng với một điều kiện r&otilde; r&agrave;ng.&nbsp;</p>\r\n\r\n<p>&ldquo;Xin em h&atilde;y giết ta đi.&rdquo;&nbsp;</p>\r\n\r\n<p>Trước lời khẩn cầu tha thiết đ&oacute;, Hanako bắt đầu t&igrave;m kiếm tiếng l&ograve;ng thật sự của Alice&hellip;</p>\r\n\r\n<p>Hai t&acirc;m hồn tưởng chừng như kh&aacute;c biệt về mọi mặt, thế nhưng lại đồng điệu đến lạ thường&hellip;</p>\r\n\r\n<p>#amak #gl #tambietvuonhong #yuri&nbsp;</p>', '86000', '73000', 'bia_tam_biet_vuon_hong_1_84069ab8b289479bb0af2a3e78007693_master8.jpg', 0, NULL, NULL),
(22, 1, 'Người Lạ Bên Bờ Biển - 2022', 4, '<h2>M&ocirc; tả</h2>\r\n\r\n<ul>\r\n	<li>T&aacute;c giả: Kii Kanna&nbsp;</li>\r\n	<li>Dịch giả: Vương Hạ</li>\r\n	<li>Thể loại: Truyện tranh BL</li>\r\n	<li>Khổ s&aacute;ch: 13x18cm</li>\r\n	<li>Số trang: 192 trang</li>\r\n	<li>ISBN: 978-604-382-054-6</li>\r\n	<li>NXB li&ecirc;n kết: NXB H&agrave; Nội</li>\r\n	<li>Qu&agrave; tặng k&egrave;m: 01 bookmark, 01 postcard, bộ 6 card bo g&oacute;c c&aacute;n m&agrave;ng kim tuyến</li>\r\n	<li>Gi&aacute; b&igrave;a: 98.000vnd&nbsp;</li>\r\n	<li>Ph&aacute;t h&agrave;nh: 30/11/2022</li>\r\n</ul>', '<p>Giới thiệu:</p>\r\n\r\n<p>Anh ch&agrave;ng nh&agrave; văn trẻ Shun đ&atilde; t&igrave;nh cờ bắt gặp h&igrave;nh b&oacute;ng c&ocirc; đơn của cậu học sinh cấp ba Mio trong khi cậu b&eacute; đang ngắm biển một m&igrave;nh. Shun liền quyết định bắt chuyện với cậu - hai người nhanh ch&oacute;ng l&agrave;m quen v&agrave; nảy sinh t&igrave;nh cảm, nhưng một thời gian sau, Mio buộc phải rời khỏi h&ograve;n đảo nơi hai người họ sinh sống.</p>\r\n\r\n<p>Ba năm tr&ocirc;i qua, Mio nay đ&atilde; trưởng th&agrave;nh v&agrave; quay trở về, cậu b&eacute; năm n&agrave;o thổ lộ t&igrave;nh cảm của m&igrave;nh với Shun nhưng lại kh&ocirc;ng được đối phương chấp nhận. Rốt cuộc l&yacute; do của Shun l&agrave; g&igrave;? C&acirc;u chuyện t&igrave;nh tr&ecirc;n h&ograve;n đảo nhỏ thuộc tỉnh Okinawa sẽ kết th&uacute;c ra sao? C&ugrave;ng đ&oacute;n chờ c&acirc;u chuyện t&igrave;nh y&ecirc;u của Mio v&agrave; Shun nh&eacute;!</p>\r\n\r\n<p>#amak #bl #nguoilabenbobien #kiikanna&nbsp;</p>', '98000', '83000', 'bia_nlbbb_tai_ban_2f07ca23d0384c4cb24b713b408a2573_master86.jpg', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `shipping_id` int(10) UNSIGNED NOT NULL,
  `shipping_name` varchar(255) NOT NULL,
  `shipping_address` varchar(255) NOT NULL,
  `shipping_phone` varchar(255) NOT NULL,
  `shipping_email` varchar(255) NOT NULL,
  `shipping_notes` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`shipping_id`, `shipping_name`, `shipping_address`, `shipping_phone`, `shipping_email`, `shipping_notes`, `created_at`, `updated_at`) VALUES
(12, 'Phạm Anh Dũng', 'xã Chính Nghĩa-huyện Kim Động-tỉnh Hưng Yên', '0936639870', 'anhdungcter123@gmail.com', 'giao trong ngay', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Chỉ mục cho bảng `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Chỉ mục cho bảng `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Chỉ mục cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brand_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `order_details_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `shipping_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
