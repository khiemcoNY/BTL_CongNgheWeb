-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 25, 2021 lúc 06:03 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `BTL_CNW`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ADMIN`
--

CREATE TABLE `ADMIN` (
  `A_STT` int(11) NOT NULL,
  `A_Name` varchar(99) DEFAULT NULL,
  `A_Email` varchar(99) DEFAULT NULL,
  `A_PASS` varchar(99) DEFAULT NULL,
  `A_Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `GIAOVIEN`
--

CREATE TABLE `GIAOVIEN` (
  `STT` int(11) NOT NULL,
  `MaGV` varchar(99) NOT NULL,
  `TenGV` varchar(99) DEFAULT NULL,
  `GioiTinh` varchar(99) DEFAULT NULL,
  `NgaySinh` date DEFAULT NULL,
  `DiaChi` varchar(99) DEFAULT NULL,
  `SDT` varchar(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `HOCSINH`
--

CREATE TABLE `HOCSINH` (
  `STT` int(11) NOT NULL,
  `MaHS` varchar(99) NOT NULL,
  `TenHS` varchar(99) DEFAULT NULL,
  `GioiTinh` varchar(99) DEFAULT NULL,
  `TenLop` varchar(99) DEFAULT NULL,
  `NgaySinh` date DEFAULT NULL,
  `DiaChi` varchar(99) DEFAULT NULL,
  `SDT` varchar(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `KETQUA`
--

CREATE TABLE `KETQUA` (
  `MaHS` varchar(99) DEFAULT NULL,
  `TenLop` varchar(99) DEFAULT NULL,
  `DiemVan` float DEFAULT NULL,
  `DiemToan` float DEFAULT NULL,
  `DiemAnh` float DEFAULT NULL,
  `DiemLy` float DEFAULT NULL,
  `DiemHoa` float DEFAULT NULL,
  `DiemSinh` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `LOP`
--

CREATE TABLE `LOP` (
  `STT` int(11) NOT NULL,
  `TenLop` varchar(99) NOT NULL,
  `MaGV` varchar(99) DEFAULT NULL,
  `TenGV` varchar(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `USERS`
--

CREATE TABLE `USERS` (
  `U_STT` int(11) NOT NULL,
  `U_Name` varchar(99) DEFAULT NULL,
  `U_Email` varchar(99) DEFAULT NULL,
  `U_PASS` varchar(99) DEFAULT NULL,
  `U_Date` datetime NOT NULL DEFAULT current_timestamp(),
  `U_Code` varchar(99) DEFAULT NULL,
  `U_Status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ADMIN`
--
ALTER TABLE `ADMIN`
  ADD PRIMARY KEY (`A_STT`);

--
-- Chỉ mục cho bảng `GIAOVIEN`
--
ALTER TABLE `GIAOVIEN`
  ADD PRIMARY KEY (`STT`,`MaGV`);

--
-- Chỉ mục cho bảng `HOCSINH`
--
ALTER TABLE `HOCSINH`
  ADD PRIMARY KEY (`STT`,`MaHS`);

--
-- Chỉ mục cho bảng `LOP`
--
ALTER TABLE `LOP`
  ADD PRIMARY KEY (`STT`,`TenLop`);

--
-- Chỉ mục cho bảng `USERS`
--
ALTER TABLE `USERS`
  ADD PRIMARY KEY (`U_STT`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `ADMIN`
--
ALTER TABLE `ADMIN`
  MODIFY `A_STT` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `GIAOVIEN`
--
ALTER TABLE `GIAOVIEN`
  MODIFY `STT` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `HOCSINH`
--
ALTER TABLE `HOCSINH`
  MODIFY `STT` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `LOP`
--
ALTER TABLE `LOP`
  MODIFY `STT` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `USERS`
--
ALTER TABLE `USERS`
  MODIFY `U_STT` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
