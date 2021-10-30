-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 28, 2021 lúc 09:36 AM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shop_dong_ho`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietgiamgia`
--

CREATE TABLE `chitietgiamgia` (
  `idGiamGia` int(11) NOT NULL,
  `idSanPham` int(11) NOT NULL,
  `phan_tram` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietgiamgia`
--

INSERT INTO `chitietgiamgia` (`idGiamGia`, `idSanPham`, `phan_tram`) VALUES
(1, 7, 20),
(1, 8, 30),
(2, 11, 15),
(2, 25, 20),
(2, 31, 5),
(2, 32, 10),
(2, 33, 12);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `idHoaDon` int(11) NOT NULL,
  `idSanPham` int(11) NOT NULL,
  `soLuong` int(11) NOT NULL,
  `donGia` int(11) NOT NULL,
  `thanhTien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giamgia`
--

CREATE TABLE `giamgia` (
  `idGiamGia` int(11) NOT NULL,
  `ten` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giamgia`
--

INSERT INTO `giamgia` (`idGiamGia`, `ten`) VALUES
(1, 'Khuyến mãi cuối tuần'),
(2, '20/11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hangsanxuat`
--

CREATE TABLE `hangsanxuat` (
  `idHang` int(11) NOT NULL,
  `tenThuongHieu` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `moTa` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `anh` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hangsanxuat`
--

INSERT INTO `hangsanxuat` (`idHang`, `tenThuongHieu`, `moTa`, `anh`) VALUES
(1, 'Citizen', 'Năm 1924, thương hiệu đồng hồ Citizen Nhật Bản được thành lập và cho ra mắt những chiếc đồng hồ đeo tay đầu tiên. Là nhà sản xuất đồng hồ lớn nhất Thế Giới, thương hiệu đồng hồ Citizen nghiên cứu và sản xuất các bộ máy đồng hồ đảm bảo chất lượng cao.', 'images/watch/logo-citizen-9.png'),
(2, 'Casio', 'Đồng hồ Casio ra đời vào năm 1946 – được xem là một trong những thương hiệu nổi tiếng nhất ngành công nghiệp đồng hồ Nhật Bản. Các mẫu Đồng hồ Casio nam và Casio nữ đều được nhận xét là “bền, đẹp và giá tốt”', 'images/watch/dong-ho-casio-1.png'),
(3, 'Seiko', 'Tiền thân của thương hiệu đồng hồ Seiko là nhà máy sản xuất Seikosha được thành lập năm 1892 tại Nhật Bản, tên thương hiệu theo tiếng Nhật có nghĩa là “Chính xác” và đây cũng chính là mục tiêu của công ty trong lĩnh vực sản xuất đồng hồ.\r\n', 'images/watch/dong-ho-seiko.png'),
(4, 'Fossil', 'Là thương hiệu thời trang danh tiếng được thành lập vào năm 1984 tại Mỹ, Fossil đã có cho mình bản thành tích dày giúp thương hiệu trở thành tập đoàn đồng hồ lớn thứ 7 trên toàn thế giới và là ông trùm thời trang tại Mỹ.', 'images/watch/dong-ho-fossil.png'),
(5, 'Calvin Klein', 'Đồng hồ Calvin Klein được biết đến rộng rãi trên toàn thế giới với những thiết kế đậm chất thời trang, trẻ trung và táo bạo nhưng không kém phần thanh lịch. Phát triển theo xu hướng hiện đại, hãng luôn cho ra đời những mốt mới bắt trend thời đại', 'images/watch/dong-ho-ck-1-1.png'),
(6, 'Karlsson', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `idHoaDon` int(11) NOT NULL,
  `idKhachHang` int(11) NOT NULL,
  `ngayLap` date NOT NULL,
  `tongTien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `idLoai` int(11) NOT NULL,
  `tenLoai` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `moTa` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`idLoai`, `tenLoai`, `moTa`) VALUES
(1, 'Đồng hồ nam', ''),
(2, 'Đồng hồ nữ', ''),
(3, 'Đồng hồ cơ', ''),
(4, 'Đồng hồ pin', ''),
(5, 'Đồng hồ đôi', ''),
(6, 'Apple watch', 'Apple Watch theo dõi thể thao và các chức năng liên quan đến sức khỏe tương thích với iOS và các sản phẩm, dịch vụ khác của Apple.'),
(7, 'Đồng hồ treo tường', ''),
(8, 'Đồng hồ để bàn', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `idNguoiDung` int(11) NOT NULL,
  `tenDangNhap` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `matKhau` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `idChucVu` int(11) NOT NULL,
  `hoTen` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `diaChi` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `soDienThoai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`idNguoiDung`, `tenDangNhap`, `matKhau`, `idChucVu`, `hoTen`, `diaChi`, `soDienThoai`) VALUES
(2, 'nguoidung1', '123456', 2, '', '', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanquyen`
--

CREATE TABLE `phanquyen` (
  `idChucVu` int(11) NOT NULL,
  `quyen` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phanquyen`
--

INSERT INTO `phanquyen` (`idChucVu`, `quyen`) VALUES
(1, 'Admin'),
(2, 'Khách hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `idSanPham` int(11) NOT NULL,
  `idLoai` int(11) NOT NULL,
  `idHang` int(11) NOT NULL,
  `tenSanPham` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `soLuong` int(11) NOT NULL,
  `anh` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `giaTien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`idSanPham`, `idLoai`, `idHang`, `tenSanPham`, `soLuong`, `anh`, `giaTien`) VALUES
(1, 1, 4, 'Fossil FS5276 Nam Quartz', 100, 'images/watch/dong-ho-fossil-fs5276-nam-mineral-crystal-day-da.jpg', 2488000),
(2, 2, 4, 'Fossil ES3843 Nữ Quartz', 100, 'images/watch/fossil-ES3843.jpg', 2488000),
(3, 2, 4, 'Fossil ES4185 Nữ Quartz', 100, 'images/watch/es4185.jpg', 2488000),
(4, 1, 2, 'Casio MTP-VD300L-1EUDF Nam Quartz', 100, 'images/watch/casio-MTP-VD300L-1EUDF.jpg', 1301000),
(5, 3, 3, 'Seiko 5 SNZG15K1 Nam Cơ Tự Động', 100, 'images/watch/seiko-SNZG15K1.jpg', 4680000),
(6, 3, 3, 'Seiko 5 Sports SRPD73K2 Nam Cơ Tự Động', 100, 'images/watch/seiko-5-SRPD73K2.jpg', 6020000),
(7, 5, 5, 'K3M211C6 – K3M221C6 Quartz', 5, 'images/watch/dong-ho-doi-calvin-klein-k3m211c6-k3m221c6-day-da.jpg', 12000000),
(8, 1, 1, 'Citizen BM8475-00F Nam Eco-Drive', 6, 'images/watch/citizen-BM8475-00F.jpg', 6000000),
(9, 2, 4, 'Fossil ES4313 Nữ Quartz', 100, 'images/watch/fossil-ES4313-526x701.jpg', 3400000),
(10, 2, 4, 'Fossil ES4026 Nữ Quartz', 100, 'images/watch/fossil-ES4026.jpg', 2700000),
(11, 2, 5, 'Calvin Klein K8G23546 Nữ Quartz', 100, 'images/watch/dong-ho-calvin-klein-k8g23546-nu-mineral-day-inox.jpg', 6600000),
(12, 2, 5, 'Calvin Klein K7W2S116 Nữ Quartz', 100, 'images/watch/dong-ho-calvin-klein-k7w2s116-nu-mineral-day-inox.jpg', 5500000),
(13, 1, 5, 'Calvin Klein K3M2T124 Nam Quartz', 100, 'images/watch/dong-ho-calvin-klein-k3m2t124-nam-mineral-day-inox.jpg', 4412000),
(14, 8, 6, 'Karlsson KA5806BR Quartz', 100, 'images/watch/karlsson-KA5806BR.jpg', 500000),
(15, 8, 6, 'Karlsson KA5806BL Quartz', 100, 'images/watch/karlsson-KA5806BL.jpg', 500000),
(16, 8, 3, 'Seiko QHE148GN Quartz', 100, 'images/watch/dong-ho-treo-tuong-seiko-qhe148gn-vang-vuong.jpg', 1200000),
(17, 8, 3, 'Seiko QHE099YN Quartz', 100, 'images/watch/dong-ho-treo-tuong-seiko-qhe099yn-den-vuong.jpg', 670000),
(18, 7, 6, 'Karlsson KA5840WH Quartz', 100, 'images/watch/karlsson-KA5840WH.jpg', 2500000),
(19, 7, 6, 'Karlsson KA5840GR Quartz', 100, 'images/watch/karlsson-KA5840GR.jpg', 2500000),
(20, 7, 6, 'Karlsson KA5840BL Quartz', 100, 'images/watch/karlsson-KA5840BL.jpg', 2500000),
(21, 7, 6, 'Karlsson KA5840BK Quartz', 100, 'images/watch/karlsson-KA5840BK.jpg', 2500000),
(22, 7, 6, 'Karlsson KA5765WH Quartz', 100, 'images/watch/karlsson-KA5765WH.jpg', 2700000),
(23, 7, 6, 'Karlsson KA5681BK Quartz', 100, 'images/watch/karlsson-KA5681BK.jpg', 2700000),
(24, 7, 3, 'Seiko QXC240K Quartz', 100, 'images/watch/QXC240K-1.jpg', 3000000),
(25, 6, 2, 'Health Smartwatch\r\n', 100, 'images/watch/banner.png', 5000000),
(27, 1, 2, 'Casio G-SHOCK GA-120-1ADR Nam Quartz', 100, 'images/watch/casio-ga-120-1adr.jpg', 3200000),
(28, 1, 2, 'Casio MTP-1374L-7AVDF Nam Quartz', 100, 'images/watch/casio-MTP-VD300L-1EUDF.jpg', 1700000),
(29, 1, 2, 'Casio AE-1200WH-1AVDF Nam Quartz', 100, 'images/watch/casio-ae-1200wh-1avdf.jpg', 800000),
(30, 1, 2, 'Casio Edifice EFR-526L-1AVUDF Nam Quartz', 100, 'images/watch/casio-edifice-EFR-526L-1AVUDF.jpg', 2800000),
(31, 2, 2, 'Casio LTP-V300L-2AUDF Nữ Quartz', 100, 'images/watch/casio-ltp-v300l-2audf.jpg', 1900000),
(32, 2, 2, 'Casio B640WC-5ADF Nữ Quartz', 100, 'images/watch/dong-ho-casio-b640wc-5adf-pin-nam-inox-1-1.jpg', 1800000),
(33, 2, 2, 'Casio LTP-E157M-7ADF Nữ Quartz', 100, 'images/watch/Casio-LTP-E157M-7ADF.jpg', 1950000);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietgiamgia`
--
ALTER TABLE `chitietgiamgia`
  ADD PRIMARY KEY (`idGiamGia`,`idSanPham`) USING BTREE,
  ADD KEY `idSanPham` (`idSanPham`);

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`idHoaDon`,`idSanPham`) USING BTREE,
  ADD KEY `idSanPham` (`idSanPham`);

--
-- Chỉ mục cho bảng `giamgia`
--
ALTER TABLE `giamgia`
  ADD PRIMARY KEY (`idGiamGia`);

--
-- Chỉ mục cho bảng `hangsanxuat`
--
ALTER TABLE `hangsanxuat`
  ADD PRIMARY KEY (`idHang`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`idHoaDon`),
  ADD KEY `idKhachHang` (`idKhachHang`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`idLoai`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`idNguoiDung`,`tenDangNhap`) USING BTREE,
  ADD UNIQUE KEY `tenDangNhap` (`tenDangNhap`),
  ADD KEY `idChucVu` (`idChucVu`);

--
-- Chỉ mục cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD PRIMARY KEY (`idChucVu`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idSanPham`),
  ADD KEY `idLoai` (`idLoai`),
  ADD KEY `idHang` (`idHang`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `giamgia`
--
ALTER TABLE `giamgia`
  MODIFY `idGiamGia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `hangsanxuat`
--
ALTER TABLE `hangsanxuat`
  MODIFY `idHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `idHoaDon` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `idLoai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `idNguoiDung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  MODIFY `idChucVu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idSanPham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietgiamgia`
--
ALTER TABLE `chitietgiamgia`
  ADD CONSTRAINT `chitietgiamgia_ibfk_1` FOREIGN KEY (`idGiamGia`) REFERENCES `giamgia` (`idGiamGia`),
  ADD CONSTRAINT `chitietgiamgia_ibfk_2` FOREIGN KEY (`idSanPham`) REFERENCES `sanpham` (`idSanPham`);

--
-- Các ràng buộc cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`idHoaDon`) REFERENCES `hoadon` (`idHoaDon`),
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`idSanPham`) REFERENCES `sanpham` (`idSanPham`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`idKhachHang`) REFERENCES `nguoidung` (`idNguoiDung`);

--
-- Các ràng buộc cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD CONSTRAINT `nguoidung_ibfk_1` FOREIGN KEY (`idChucVu`) REFERENCES `phanquyen` (`idChucVu`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`idLoai`) REFERENCES `loaisanpham` (`idLoai`),
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`idHang`) REFERENCES `hangsanxuat` (`idHang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
