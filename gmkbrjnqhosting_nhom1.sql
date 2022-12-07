-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 07, 2022 at 09:29 AM
-- Server version: 10.2.40-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gmkbrjnqhosting_nhom1`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` int(11) NOT NULL,
  `time` datetime DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `code` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `time`, `id_user`, `status`, `price`, `code`) VALUES
(21, '2022-12-04 16:24:21', 1, 3, 279310000, 1260389642),
(22, '2022-12-04 16:40:47', 1, 4, 121350000, 1751010140),
(23, '2022-12-05 10:18:34', 1, 2, 11090000, 1432079556),
(24, '2022-12-05 11:57:32', 9, 4, 55770000, 2061397141),
(25, '2022-12-05 16:56:50', 4, 1, 72170000, 1232895559),
(26, '2022-12-06 17:06:14', 5, 2, 4800000, 1239262216),
(27, '2022-12-07 03:27:44', 1, 1, 14990000, 1513710559),
(28, '2022-12-07 03:36:57', 8, 3, 71390000, 978593576),
(29, '2022-12-07 03:36:56', 1, 1, 20600000, 1330018335),
(30, '2022-12-07 03:46:22', 8, 4, 71390000, 1872134674);

-- --------------------------------------------------------

--
-- Table structure for table `bill_detail`
--

CREATE TABLE `bill_detail` (
  `id` int(11) NOT NULL,
  `id_product` int(11) DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `quantily` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bill_detail`
--

INSERT INTO `bill_detail` (`id`, `id_product`, `code`, `quantily`) VALUES
(26, 33, 1260389642, 4),
(27, 35, 1260389642, 5),
(28, 35, 1751010140, 1),
(29, 32, 1751010140, 4),
(30, 33, 1432079556, 1),
(31, 32, 2061397141, 3),
(32, 33, 1232895559, 2),
(33, 34, 1232895559, 1),
(34, 76, 1239262216, 1),
(35, 72, 1513710559, 1),
(36, 87, 978593576, 1),
(37, 76, 1330018335, 1),
(38, 79, 1330018335, 1),
(39, 87, 1872134674, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL COMMENT 'Mã danh mục',
  `name_cate` varchar(255) DEFAULT NULL COMMENT 'Tên danh mục'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name_cate`) VALUES
(1, 'SONY'),
(4, 'LG'),
(5, 'CANON'),
(12, 'Fujifilm'),
(13, 'PENTAX');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL COMMENT 'Mã bình luận',
  `content` varchar(255) DEFAULT NULL COMMENT 'Nội dung',
  `time` datetime DEFAULT NULL COMMENT 'Thời gian bình luận',
  `id_product` int(11) DEFAULT NULL COMMENT 'Mã sản phẩm',
  `id_user` int(11) DEFAULT NULL COMMENT 'Mã khách hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `content`, `time`, `id_product`, `id_user`) VALUES
(3, 'Test demo', '2022-11-24 20:50:28', 32, 1),
(4, 'Comment vào sản phẩm số 33', '2022-11-24 21:09:21', 33, 4),
(5, 'Quản Trị Viên đã bình luận vào sản phẩm số 33', '2022-11-24 21:42:09', 33, 1),
(6, 'Quản Trị Viên đã bình luận vào sản phẩm số 34', '2022-11-24 21:52:35', 34, 1),
(7, 'Quản Trị Viên đã bình luận vào sản phẩm số 34 lần 2', '2022-11-24 21:53:05', 34, 1),
(8, 'dđ', '2022-11-25 11:15:07', 69, 1),
(9, 'adad', '2022-11-25 11:15:14', 69, 1),
(10, 'ádasdasd', '2022-11-25 11:19:11', 69, 1),
(11, 'ádasd', '2022-11-25 11:22:51', 69, 1),
(12, 'Hahdqwdqwqw', '2022-11-25 11:23:05', 69, 1),
(13, 'Admin', '2022-11-25 11:30:17', 34, 4),
(14, 'sản phẩm tốt', '2022-11-28 15:43:12', 33, 1),
(15, 'san pham tot', '2022-12-02 10:36:35', 32, 1),
(16, 'Bing Chiling', '2022-12-02 11:16:47', 72, 1),
(17, 'Test', '2022-12-02 11:20:51', 72, 1),
(18, 'Test', '2022-12-02 11:23:55', 82, 1),
(19, 'dđ', '2022-12-02 11:29:16', 69, 1),
(20, 'Bình luận', '2022-12-02 11:34:01', 74, 1),
(21, 'Bình luận 11', '2022-12-02 11:35:08', 74, 1),
(22, 'hj', '2022-12-02 11:36:13', 32, 1),
(23, 'Bình luận 12', '2022-12-02 11:39:03', 74, 1),
(24, 'Bình luận 12', '2022-12-02 11:39:53', 74, 1),
(25, 'Bình luận 12', '2022-12-02 11:40:37', 74, 1),
(26, 'Bình luận 12', '2022-12-02 11:41:22', 74, 1),
(27, 'k', '2022-12-02 11:44:38', 74, 1),
(28, 'a', '2022-12-02 11:49:05', 33, 1),
(29, 'ppppp', '2022-12-02 11:51:13', 33, 1),
(30, 'ppppp', '2022-12-02 11:54:24', 33, 1),
(31, 'ggj', '2022-12-02 11:54:53', 33, 1),
(32, 'afaf', '2022-12-02 11:59:04', 33, 4),
(33, 'k', '2022-12-02 12:02:11', 72, 4),
(34, 'a', '2022-12-02 12:03:13', 72, 4),
(35, NULL, '2022-12-02 12:04:09', 72, 4),
(36, NULL, '2022-12-02 12:04:10', 72, 4),
(37, NULL, '2022-12-02 12:04:11', 72, 4),
(38, 'f', '2022-12-02 12:04:13', 72, 4),
(39, 'fddddd', '2022-12-02 12:05:33', 72, 4),
(40, 'fdddddasd', '2022-12-02 12:07:15', 72, 4),
(41, 'no', '2022-12-03 09:49:13', 72, 5),
(43, 'san pham tot', '2022-12-05 11:47:14', 32, 9),
(44, 'san pham tot 2', '2022-12-05 11:47:43', 32, 9),
(45, 'san pham tot 9', '2022-12-05 11:48:20', 32, 9),
(50, 'Content', '2022-12-06 15:22:55', 74, 4),
(51, 'Quản trị viên', '2022-12-06 15:33:36', 69, 1),
(52, 'san pham tot', '2022-12-06 16:26:27', 74, 1),
(53, 'san pham tot', '2022-12-06 16:28:29', 79, 1),
(54, 'sản phẩm tốt', '2022-12-06 16:33:39', 72, 5),
(55, 'sản phẩm tốt', '2022-12-06 16:41:50', 35, 5);

-- --------------------------------------------------------

--
-- Table structure for table `insurance`
--

CREATE TABLE `insurance` (
  `id` int(11) NOT NULL COMMENT 'Mã bảo hành',
  `name_insurance` varchar(255) DEFAULT NULL COMMENT 'Thời gian bảo hành'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `insurance`
--

INSERT INTO `insurance` (`id`, `name_insurance`) VALUES
(1, '6 Tháng'),
(2, '1 Năm'),
(3, '2 Năm'),
(5, '5 Năm');

-- --------------------------------------------------------

--
-- Table structure for table `made_in`
--

CREATE TABLE `made_in` (
  `id` int(11) NOT NULL COMMENT 'Mã xuất xứ',
  `name_made_in` varchar(255) DEFAULT NULL COMMENT 'Tên xuất xứ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `made_in`
--

INSERT INTO `made_in` (`id`, `name_made_in`) VALUES
(1, 'Việt Nam'),
(2, 'Đài Loan'),
(4, 'Trung Quốc');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL COMMENT 'Mã sản phẩm',
  `name` varchar(255) DEFAULT NULL COMMENT 'Tên sản phẩm',
  `price` int(11) DEFAULT NULL COMMENT 'Giá sản phẩm',
  `description` varchar(2000) DEFAULT NULL COMMENT 'Mô tả',
  `quantily` int(11) DEFAULT NULL COMMENT 'Số lượng',
  `img` text DEFAULT NULL COMMENT 'Ảnh sản phẩm',
  `insurance` int(11) DEFAULT NULL COMMENT 'Bảo hành',
  `made_in` int(11) DEFAULT NULL COMMENT 'Xuất xứ',
  `id_categories` int(11) DEFAULT NULL COMMENT 'Mã danh mục',
  `view` text DEFAULT NULL COMMENT 'Lượt truy cập'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `quantily`, `img`, `insurance`, `made_in`, `id_categories`, `view`) VALUES
(32, 'CANON EOS 850D BODY', 18590000, 'Canon EOS 850D là mẫu máy ảnh hoàn hảo cho những nhiếp ảnh gia chuyên nghiệp. Theo đó, máy ảnh DSLR này kết hợp cảm biến CMOS APS-C 24,1MP với chế độ quay 4K chuyên nghiệp. Trên kính ngắm có tất cả 45 điểm lấy nét, màn hình live view sử dụng Dual Pixel CMOS AF. Ngoài ra, máy ảnh còn có khả năng kết nối Wifi cùng giao diện thân thiện với người dùng.Khi chụp ở chế độ live view, Dual Pixel CMOS AF sẽ giúp bạn lấy nét tự động nhanh và chính xác hơn. Chế độ Eye Recogn AF tập trung va theo dõi mắt chủ thể trên màn hình Live View.Tính năng nhận diện khuôn mặt EOS iTR AF trên Canon EOS 850D cũng đảm bảo ảnh chụp chân dung rõ ràng bằng cách theo dõi khuôn mặt của đối tượng chuyển động trong khi chụp bằng ống ngắm máy ảnh.Bên cạnh đó, khi chụp qua kính ngắm quang học, loại 45 điểm AF giúp lấy nét chính xác vào các đối tượng chuyển động nhanh chóng và dễ dàng. Độ trễ về thời gian giữa chuyển động của đối tượng thực tế và màn hình hiển thị khung ngắm hầu như không có vì vậy bạn sẽ không lo bị mất dấu vết đối tượng chuyển động. ', 30, 'camera-canon.png', 1, 1, 5, '12'),
(33, 'Máy Ảnh Canon EOS 1500D Kit 18-55mm F3.5-5.6 IS II', 11090000, 'Cảm biến CMOS APS-C 24,1mpx\r\nBộ xử lý ảnh DIGIC 4+\r\nDải ISO 100-6400, mở rộng lên đến 12800\r\nHệ thống AF 9 điểm với điểm chính giữa là cross-type.\r\nTốc độ chụp liên tiếp tối đa 3hình / giây\r\nỐng kính EF-S 18-55mm f/3.5-5.6 IS II\r\nQuay video FHD 24/25/30p\r\nMàn hình cố định 3″ 920.000 điểm ảnh.\r\nHỗ trợ thẻ SD/SDHC/SDXC\r\nKết nối wifi, Tích hợp GPS/NFC\r\nDài x Rộng x Cao: 129.0 x 77.6 x 101.3mm\r\nNặng 427g ( body )\r\n', 30, 'canon-eos-1500d-kit-1855mm-f3556-iii(2) 1.png', 1, 2, 1, '14'),
(34, 'Máy ảnh Fujifilm X-H2', 49990000, 'Cảm biến và hệ thống xử lý thứ 5. Ánh sáng yếu S/N. X-Trans CMOS 5 HR có cấu trúc điểm ảnh cải tiến, cho phép nhận ánh sáng hiệu quả hơn. Tốc độ màn trập1 / 180.000 giây X-H2 có tốc độ màn trập điện tử tối đa là 1 / 180.000, tăng khoảng 2,5 stop so với các máy ảnh X Series khác.Dòng máy ảnh X đầu tiên có tính năng Pixel Shift Multi Shot, X-H2, với sự trợ giúp của phần mềm Pixel Shift Combiner, có thể tạo ra một hình ảnh 160MP độ phân giải cực cao, duy nhất chỉ với một lần chạm vào nút chụp.', 30, 'gfx-50s-ii-500x500.jpg', 1, 1, 12, '11'),
(35, 'Máy ảnh Sony FX30', 46990000, 'Với hiệu suất quay phim full-frame cực đỉnh, bao gồm độ nhạy sáng cao (ISO được mở rộng tới 409600), dải tần động rộng 15 bước dừng, độ phân giải 4K 120p2, khả năng tự động lấy nét nhanh và đáng tin cậy, cùng khả năng ổn định hình ảnh siêu mạnh, chiếc α7S III một lần nữa nâng tiêu chuẩn cho các nhà làm phim lên một tầm cao mới.Cảm biến hình ảnh Exmor RTM CMOS chiếu sáng sau 12,1 MP full-frame3 mới được cải tiến đáng kể về khả năng thu ánh sáng, hệ thống dây và tối ưu hóa hình ảnh đầu ra, nhờ đó cho tốc độ xuất nhanh gấp đôi, chất lượng hình ảnh siêu việt trên toàn dải nhạy sáng, dải tần động rộng 15 bước dừng4 và giảm hiện tượng cuộn màn trập, đồng thời cảm biến cũng hỗ trợ AF theo pha mặt phẳng tiêu.Sở hữu cảm biến mới cùng tốc độ chưa từng có, bộ xử lý hình ảnh BIONZ XR cũng được phát triển theo hướng mới, cho công suất xử lý mạnh gấp 8 lần5. Với kiến trúc thiên hướng tương lai, cảm biến này cho hình ảnh chất lượng cao với tốc độ nhanh hơn để biểu đạt xuất sác qua ảnh tĩnh và video, cũng như cải thiện đáng kể độ nhạy của giao diện máy ảnh.', 30, 'sony-fx30.jpeg', 1, 1, 1, '19'),
(69, 'Máy ảnh Fujifilm GFX 50S Mark', 84990000, 'Nâng cao hiệu quả làm việc cũng như nhiều hiệu năng tiên tiến vượt trội so với phiên bản trước, GFX 50S II là sự kết hợp cảm biến của GFX 50S/R và phần thân của GFX 100S nhằm mang lại những ưu điểm hiện đại của GFX 100S đồng thời mang đến sự lựa chọn mới hợp lý hơn cho người dùng ở phân khúc giá trung bình.\r\nGFX 50S II so với người tiền nhiệm có kích thước nhỏ gọn hơn, tự động lấy nét nhanh hơn, chế độ chống rung mạnh hơn.', 30, 'gfx-50s-ii-500x500.jpg', 1, 1, 12, '16'),
(72, 'Fujifilm X-Pro 2 Body Black 2nd', 14990000, 'Máy ảnh Fujifilm X-Pro 2 Body là một trong ba sản phẩm máy ảnh của Fujifilm (X- E2S, X70) được công bố ra mắt trên thị trường vào ngày 15/01/2016. Fujifilm X-Pro 2 là \"người thừa kế\" từ X-Pro1, nó thuộc dòng X-Series, máy ảnh kỹ thuật số không gương lật của thương hiệu này. Ở thời điểm hiện tại, Fujifilm X-Pro 2 là máy ảnh đạt được độ phân giải lớn nhất trong dòng X - Series với 24.3MP, sử dụng bộ cảm biến X-Trans CMOS III, tái phát triển từ X-Processor Pro. Cảm biến APS-C CMOS kết hợp với công nghệ X-Trans độc quyền của Fujifilm giúp cho máy cho chất lượng hình ảnh sắc nét, tái tạo màu sắc chính xác. ISO của X-Pro 2 có thể mở rộng lên đến 51200. Khi kết hợp với các X-Processor Pro, máy ảnh này có khả năng ghi ảnh tĩnh lên đến 8 fps, quay video Full HD 1080p ở 60 fps và thực hiện chế độ lấy nét tập trung nhanh chóng.', 30, 'dscf0365-500x500.jfif', 5, 4, 5, '10'),
(74, 'Máy Ảnh SONY HX400V lens zoom 50X full box like new', 5300000, 'Cảm biến CMOS Exmor R 20.4MP\r\nBộ xử lý hình ảnh BIONZ X\r\nMàn hình LCD Xtra Fine 3\" 921k-Dot\r\nQuay phim Full HD 1080p\r\nTốc độ chụp liên tiếp lên đến 10fps\r\nTích hợp kết nối Wi-Fi với NFC\r\nỐng kính ZEISS Vario-Sonar T* zoom quang học 50x\r\nKích thước : 130 x 93 x 103 mm\r\nTrọng lượng : 660 Gram.Máy ảnh Sony HX400V là một máy ảnh du lịch với Lens zoom cao cấp với thiết kế và chất lượng của một máy ảnh DSLR. Cảm biến CMOS Exmor R 20.4MP và một bộ xử lý BIONZ X Image cho hiệu ứng ánh sáng mượt mà. Một ống kính zoom quang học 50x Carl Zeiss Vario Sonnar T linh động thích hợp cho chụp ảnh ở những tiêu cự xa. Chiều dài toàn thân Lens 4.3-215mm tương đương với một tiêu cự zoom trên ống kính 35mm 24-1200mm cho phép ống kính này vừa chụp được góc rộng và chụp Tele đa dụng. Khẩu độ f/2.8 là 1 lợi thế lớn dành cho người dùng thường hay chụp thể loại chân dung, đó là yếu tố đặc biệt hữu ích để chụp trong môi trường ánh sáng yếu cho hình ảnh sáng hơn.', 30, 'Máy Ảnh SoNy HX400V.jpg', 1, 1, 1, '12'),
(76, 'Máy Ảnh Canon EOS M10 Kit EF-M15-45 (Trắng)', 4800000, 'Canon đã cho ra mắt máy ảnh EOS M10 tại Hà Nội vào ngày 17/12/2015. Đây được xem là sự rút gọn từ chiếc EOS M3 cùng hãng trong quá khứ. Nó được đánh giá là một chiếc máy ảnh mirrorless Canon (không gương lật) đa chức năng và có thể giúp người dùng nâng cao các kỹ năng nhiếp ảnh.\r\nMáy Ảnh Canon EOS M10 Kit EF-M15-45 (Trắng)\r\nThiết kế thông minh đến từ EOS M10 chính là màn hình LCD rộng 3” cảm ứng với khả năng xoay lật 180°. Có thể trực tiếp thao tác hoặc thay đổi tốc độ màn trập hay điều chỉnh các thông số ngay trên màn hình. Chụp chân dung được cải tiến với các tính năng mới và việc chụp trở nên dễ hơn với chế độ Self-portrait nhằm điều chỉnh các thông số như phơi sáng hay tự động lấy nét.\r\nCÓ THỂ BẠN QUAN TÂM\r\nMáy Ảnh Canon EOS M10 Kit EF-M15-45 (Trắng)\r\nMáy Ảnh Canon EOS M10 Kit EF-M15-45 (Đen)\r\nỐng kính\r\n\r\nCông nghệ trong chiếc máy ảnh mirrorless Canon EOS M10 cũng được nâng tầm để cho ra những bức ảnh xuất sắc vượt trội. Bộ xử lý Digic 6 có tốc độ xử lý hình ảnh rất nhanh mà lại tiêu thụ rất ít điện năng. Cảm biến CMOS độ phân giải tới 18.0 MP sẽ cho ra những bức ảnh sắc nét. Bên cạnh đó, hệ thống lấy nét công nghệ Hybrid CMOS AF II kết hợp lấy nét nhiều cách sẽ làm cho những bức hình có gam màu chân thực mà độ tương phản ở mức tốt nhất. ', 30, '678b4959a2fb5b47473eebd246e9f400.jfif', 1, 1, 5, '9'),
(77, 'Máy ảnh Sony HX350 Zoom 50X', 4500000, '[A861] Máy ảnh nhỏ gọn với zoom quang học 50x chính hãng SONY HX350 Độ phân giải: 20.4 MP Cảm biến ánh sáng: 1/2.3 type (7.82mm) Exmor R CMOS sensor Ổn định hình ảnh: Optical SteadyShot (Intelligent Active Mode) Bộ xử lý ảnh: BIONZ X Zoom quang học: 50x Khẩu độ: F2.8-F6.3 ISO (ảnh tĩnh): Auto (ISO 80 – 3200) Mở rộng đến ISO 12800 trong chế độ Multi Frame NR Ống kính: ZEISS Vario Sonnar T* Màn hình LCD: 7.5cm (3.0type) (4:3) / 921,600 điểm ảnh / Xtra Fine / TFT LCD, có thể lật lên 90 độ, lật xuống 60 độ Kính ngắm điện tử: Có (0.2’’, 201.6k điểm ảnh) Cổng USB: Có Kết nối không dây: NFC Tính năng khác: Lock-on AF / P/A/S/M movie shooting mode / New UI / 4K Still Image Output with HDMI / Motion Shot Video / Picture Effects / 360 Intelligent Sweep Panorama Kích thước: khoảng 129.6 x93.2 x103.2 mm Trọng lượng (bao gồm pin và thẻ nhớ): khoảng 652g Phụ kiện đi kèm: Thẻ nhớ 16GB, pin NP-BX1, AC Adaptor, cáp micro USB, dây đeo vai, nắp ống kính, nắp đậy chân đa năng (shoe cap)', 30, '6ae098d4ce7e57467fed5b27e8396f60.jfif', 1, 1, 1, '1'),
(78, 'Máy ảnh Sony Nex-6 + 16-50mm', 5500000, 'Máy ảnh kỹ thuật số không gương lật Sony Alpha NEX-5T màu đen với ống kính 16-50mm là một máy ảnh mirrorless linh hoạt và nhỏ gọn có cảm biến CMOS 16m megapixel cỡ APS-C và bộ xử lý hình ảnh BIONZ để tạo ra hình ảnh tĩnh và độ phân giải cao 1080i / p video ở nhiều tốc độ khung hình với chất lượng ánh sáng thấp và độ nhạy sáng ISO 25600. Bộ xử lý hình ảnh cũng góp phần đáng kể vào việc giảm thiểu mức độ tiếng ồn tổng thể và cũng có thể tăng tốc độ lên đến 10 fps trong Speed ​​Priority Chế độ liên tục.\r\n\r\nCẢM BIẾN CMOS CMOS 16,1MP EXMOR APS VÀ BỘ XỬ LÝ HÌNH ẢNH BIONZ CẢM BIẾN CMOS CMOS 16,1MP APS-C CỠ APS-C VÀ BỘ XỬ LÝ HÌNH ẢNH BIONZ PHỐI HỢP VỚI NHAU ĐỂ TẠO RA HÌNH ẢNH CÓ ĐỘ PHÂN GIẢI CAO, CHI TIẾT VỚI ĐỘ NHIỄU TỐI THIỂU VÀ CHẤT LƯỢNG ÁNH SÁNG YẾU VÀ ĐỘ NHẠY ĐÁNG CHÚ Ý TỪ ISO 100-25600. CÔNG NGHỆ GIẢM TIẾNG ỒN THÍCH ỨNG GIỐNG VỚI CÔNG NGHỆ DSLR HÀNG ĐẦU CỦA SONY, HOẠT ĐỘNG ĐỂ GIẢM TIẾNG ỒN MỘT CÁCH THÔNG MINH VỚI ĐỘ NHẠY CAO HƠN. BỘ VI XỬ LÝ CŨNG GÓP PHẦN CUNG CẤP TỐC ĐỘ PHONG PHÚ TRONG TOÀN BỘ HỆ THỐNG CAMERA, BAO GỒM TỐC ĐỘ CHỤP LIÊN TỤC TỐI ĐA 10 KHUNG HÌNH / GIÂY VÀ QUAY VIDEO 1080I / P FULL HD Ở NHIỀU TỐC ĐỘ KHUNG HÌNH.', 30, '0e1aef2c6d627bc0f5e23a561302dd98.jfif', 1, 1, 1, '0'),
(79, 'Máy Ảnh Canon Powershot G7X Mark III/ Bạc', 15800000, 'Chi tiết sản phẩmĐánh giá Máy ảnh Canon Powershot G7 X Mark III (Bạc) Mới đây, Canon đã cho ra mắt PowerShot G7 X Mark III (Bạc), một chiếc máy ảnh nhỏ gọn để bạn có thể thuận tiện và linh hoạt trong quá trình sử dụng. Với màn hình LCD nghiêng, cảm biến lớn cùng khả năng truyền phát video trực tiếp qua Youtube, Canon G7 X Mark III (Bạc) là chiếc máy ảnh cực kì lý tưởng cho các vlogger và blogger. Cảm biến CMOS stacked 1\" 20.2MP & bộ xử lý DIGIC 8  Cảm biến lớn CMOS stacked 1\" 20.2MP kết hợp với bộ xử lý hình ảnh DIGIC 8 cho hiệu suất hình ảnh đáng chú ý trên G7 X III (Bạc) với tốc độ cao và nhiễu hạt thấp, tốc độ chụp liên tiếp đến 20 fps và quay video 4K30p UHD và Full HD 120p. Màn hình cảm ứng Canon Powershot G7 X Mark III (Bạc) tích hợp màn hình cảm ứng với kích thước 3” để bạn có thể theo dõi chế độ xem trực tiếp, xem lại hình ảnh cũng như điều hướng menu. Hơn nữa, cảm ứng trực quan cũng cho phép làm việc với Touch & Drag AF để dễ dàng chọn điểm lấy nét. Ngoài ra, thiết kế nghiêng 180° để bạn có thể dễ dàng chụp ảnh selfie hay vlogging. Ống kính zoom quang học 4.2x Ống kính zoom quang học 4.2x linh động bao quát tiêu cự tương đương 24-100mm từ góc rộng đến telephoto ngắn, kết hợp khẩu độ tối đa f/1.8-2.8 với ổn định hình ảnh, hữu dụng chụp cầm tay trong điều kiện ánh sáng bất lợi. Khẩu độ tối đa nhanh đồng thời cho kiểm soát độ sâu trường ảnh tốt hơn khi làm việc với kỹ thuật lấy nét chọn. Quay video Điểm cải tiến và trọng tâm của Canon PowerShot G7 X Mark III (Bạc) chính là khả năng quay video thực sự cao cấp trên một chiếc máy ảnh nhỏ gọn', 30, 'may-anh-canon-powershot-g7-x-mark-iii-bac-hang-nhap-khau-1.jpg', 1, 1, 5, '4'),
(80, 'MÁY FILM PENTAX PROGRAM A & PENTAX 50MM F1.7', 990000, 'Cảm biến và hệ thống xử lý thứ 5. Ánh sáng yếu S/N. X-Trans CMOS 5 HR có cấu trúc điểm ảnh cải tiến, cho phép nhận ánh sáng hiệu quả hơn. Tốc độ màn trập1 / 180.000 giây X-H2 có tốc độ màn trập điện tử tối đa là 1 / 180.000, tăng khoảng 2,5 stop so với các máy ảnh X Series khác.Dòng máy ảnh X đầu tiên có tính năng Pixel Shift Multi Shot, X-H2, với sự trợ giúp của phần mềm Pixel Shift Combiner, có thể tạo ra một hình ảnh 160MP độ phân giải cực cao, duy nhất chỉ với một lần chạm vào nút chụp.', 30, 'Máy Ảnh SoNy HX400V.jpg', 1, 1, 13, '0'),
(82, 'Máy ảnh Canon EOS R5C (Body Only)', 139990000, 'Cảm biến và hệ thống xử lý thứ 5. Ánh sáng yếu S/N. X-Trans CMOS 5 HR có cấu trúc điểm ảnh cải tiến, cho phép nhận ánh sáng hiệu quả hơn. Tốc độ màn trập1 / 180.000 giây X-H2 có tốc độ màn trập điện tử tối đa là 1 / 180.000, tăng khoảng 2,5 stop so với các máy ảnh X Series khác.Dòng máy ảnh X đầu tiên có tính năng Pixel Shift Multi Shot, X-H2, với sự trợ giúp của phần mềm Pixel Shift Combiner, có thể tạo ra một hình ảnh 160MP độ phân giải cực cao, duy nhất chỉ với một lần chạm vào nút chụp.', 30, 'Máy ảnh Canon EOS R5C.jpg', 2, 1, 5, '0'),
(83, 'Máy ảnh Fujifilm X-T3 ww (Black, Body Only,USB Charging)', 22990000, 'Cảm biến và hệ thống xử lý thứ 5. Ánh sáng yếu S/N. X-Trans CMOS 5 HR có cấu trúc điểm ảnh cải tiến, cho phép nhận ánh sáng hiệu quả hơn. Tốc độ màn trập1 / 180.000 giây X-H2 có tốc độ màn trập điện tử tối đa là 1 / 180.000, tăng khoảng 2,5 stop so với các máy ảnh X Series khác.Dòng máy ảnh X đầu tiên có tính năng Pixel Shift Multi Shot, X-H2, với sự trợ giúp của phần mềm Pixel Shift Combiner, có thể tạo ra một hình ảnh 160MP độ phân giải cực cao, duy nhất chỉ với một lần chạm vào nút chụp.', 30, 'Máy ảnh Fujifilm X-T3.jpg', 2, 1, 12, '0'),
(84, 'Máy ảnh Sony ZV-E10 + Lens 16-50mm F3.5-5.6 (Black)', 17890000, 'Cảm biến và hệ thống xử lý thứ 5. Ánh sáng yếu S/N. X-Trans CMOS 5 HR có cấu trúc điểm ảnh cải tiến, cho phép nhận ánh sáng hiệu quả hơn. Tốc độ màn trập1 / 180.000 giây X-H2 có tốc độ màn trập điện tử tối đa là 1 / 180.000, tăng khoảng 2,5 stop so với các máy ảnh X Series khác.Dòng máy ảnh X đầu tiên có tính năng Pixel Shift Multi Shot, X-H2, với sự trợ giúp của phần mềm Pixel Shift Combiner, có thể tạo ra một hình ảnh 160MP độ phân giải cực cao, duy nhất chỉ với một lần chạm vào nút chụp.', 30, 'Máy ảnh Sony ZV-E10.jpg', 3, 4, 1, '0'),
(85, 'Máy ảnh Sony Alpha A6400 (Black) + Lens 16-50mm F3.5-5.6', 21990000, 'Cảm biến và hệ thống xử lý thứ 5. Ánh sáng yếu S/N. X-Trans CMOS 5 HR có cấu trúc điểm ảnh cải tiến, cho phép nhận ánh sáng hiệu quả hơn. Tốc độ màn trập1 / 180.000 giây X-H2 có tốc độ màn trập điện tử tối đa là 1 / 180.000, tăng khoảng 2,5 stop so với các máy ảnh X Series khác.Dòng máy ảnh X đầu tiên có tính năng Pixel Shift Multi Shot, X-H2, với sự trợ giúp của phần mềm Pixel Shift Combiner, có thể tạo ra một hình ảnh 160MP độ phân giải cực cao, duy nhất chỉ với một lần chạm vào nút chụp.', 30, 'Máy ảnh Sony Alpha A6400 (Black) + Lens 16-50mm F3.5-5.6.jpg', 2, 2, 1, '0'),
(86, 'Máy ảnh Canon PowerShot G7 X Mark III (Black)', 16490000, 'Cảm biến và hệ thống xử lý thứ 5. Ánh sáng yếu S/N. X-Trans CMOS 5 HR có cấu trúc điểm ảnh cải tiến, cho phép nhận ánh sáng hiệu quả hơn. Tốc độ màn trập1 / 180.000 giây X-H2 có tốc độ màn trập điện tử tối đa là 1 / 180.000, tăng khoảng 2,5 stop so với các máy ảnh X Series khác.Dòng máy ảnh X đầu tiên có tính năng Pixel Shift Multi Shot, X-H2, với sự trợ giúp của phần mềm Pixel Shift Combiner, có thể tạo ra một hình ảnh 160MP độ phân giải cực cao, duy nhất chỉ với một lần chạm vào nút chụp.', 30, 'Máy ảnh Canon PowerShot G7 X Mark III (Black).png', 3, 4, 5, '0'),
(87, 'Máy ảnh Canon EOS 5D Mark IV + Lens 24-105mm f/4L IS II USM', 71390000, 'Cảm biến và hệ thống xử lý thứ 5. Ánh sáng yếu S/N. X-Trans CMOS 5 HR có cấu trúc điểm ảnh cải tiến, cho phép nhận ánh sáng hiệu quả hơn. Tốc độ màn trập1 / 180.000 giây X-H2 có tốc độ màn trập điện tử tối đa là 1 / 180.000, tăng khoảng 2,5 stop so với các máy ảnh X Series khác.Dòng máy ảnh X đầu tiên có tính năng Pixel Shift Multi Shot, X-H2, với sự trợ giúp của phần mềm Pixel Shift Combiner, có thể tạo ra một hình ảnh 160MP độ phân giải cực cao, duy nhất chỉ với một lần chạm vào nút chụp.', 30, 'máy ảnh eos.jpg', 3, 4, 5, '4');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL COMMENT 'Mã chức vụ',
  `name_role` varchar(255) DEFAULT NULL COMMENT 'Tên chức vụ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `name_role`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `name`) VALUES
(1, 'Chờ lấy hàng'),
(2, 'Đang Giao '),
(3, 'Giao hàng thành công'),
(4, 'Hủy Đơn hàng');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL COMMENT 'Mã chức vụ',
  `fullname` varchar(255) DEFAULT NULL COMMENT 'Tên tài khoản',
  `password` varchar(255) DEFAULT NULL COMMENT 'Mật khẩu',
  `email` varchar(255) DEFAULT NULL COMMENT 'Email',
  `phone` int(11) DEFAULT NULL COMMENT 'Số điện thoại',
  `address` varchar(255) DEFAULT NULL COMMENT 'Địa chỉ',
  `id_role` int(11) DEFAULT NULL COMMENT 'Mã chúc vụ',
  `img` text DEFAULT NULL COMMENT 'ảnh'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `password`, `email`, `phone`, `address`, `id_role`, `img`) VALUES
(1, 'Admin', 'e3afed0047b08059d0fada10f400c1e5', 'Admin@gmail.com', 385088031, 'Hà Nội', 1, NULL),
(2, 'Maialoneyasuo', 'ec6a6536ca304edf844d1d248a4f08dc', 'ShopAccTri@gmail.com', 321782631, 'fesagasfvas', 1, NULL),
(4, 'TriNoPro', '202cb962ac59075b964b07152d234b70', 'caubelangthang2003@gmail.com', 23132, 'Haha', 2, NULL),
(5, 'caoxuanthang2820', '827ccb0eea8a706c4c34a16891f84e7b', 'thangvideo2003@gmail.com', 582593826, '312312321', 1, NULL),
(7, 'Nguyễn Trọng Trí12', '81dc9bdb52d04dc20036dbd8313ed055', 'TriChua18@gmail.com', 2315616, 'Hà nội', 1, NULL),
(8, 'Bug', '202cb962ac59075b964b07152d234b70', '123@gmaill.com', 123, 'Minh Khai', 2, NULL),
(9, 'Lê Thu hà', '827ccb0eea8a706c4c34a16891f84e7b', 'ha123@gmail.com', 867500718, 'Ha Noi', 2, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code` (`code`),
  ADD KEY `fk_user_bill` (`id_user`),
  ADD KEY `fk_status_bill` (`status`);

--
-- Indexes for table `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_code` (`code`),
  ADD KEY `fk_products` (`id_product`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user` (`id_user`),
  ADD KEY `fk_comment_product` (`id_product`);

--
-- Indexes for table `insurance`
--
ALTER TABLE `insurance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `made_in`
--
ALTER TABLE `made_in`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_categories` (`id_categories`),
  ADD KEY `fk_made_in` (`made_in`),
  ADD KEY `fk_insurance` (`insurance`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`) USING BTREE;

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_role` (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã danh mục', AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã bình luận', AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `insurance`
--
ALTER TABLE `insurance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã bảo hành', AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `made_in`
--
ALTER TABLE `made_in`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã xuất xứ', AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã sản phẩm', AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã chức vụ', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã chức vụ', AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `fk_status_bill` FOREIGN KEY (`status`) REFERENCES `status` (`id`),
  ADD CONSTRAINT `fk_user_bill` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD CONSTRAINT `fk_code` FOREIGN KEY (`code`) REFERENCES `bills` (`code`),
  ADD CONSTRAINT `fk_products` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_comment_product` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_categories` FOREIGN KEY (`id_categories`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `fk_insurance` FOREIGN KEY (`insurance`) REFERENCES `insurance` (`id`),
  ADD CONSTRAINT `fk_made_in` FOREIGN KEY (`made_in`) REFERENCES `made_in` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_role` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
