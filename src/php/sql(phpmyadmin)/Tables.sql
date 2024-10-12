-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2024-05-16 05:20:53
-- 服务器版本： 8.0.36
-- PHP 版本： 8.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `MenuScanOrder`
--

-- --------------------------------------------------------

--
-- 表的结构 `Tables`
--

CREATE TABLE `Tables` (
  `TableID` int NOT NULL,
  `Qrcode` varchar(255) DEFAULT NULL,
  `Number` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 转存表中的数据 `Tables`
--

INSERT INTO `Tables` (`TableID`, `Qrcode`, `Number`) VALUES
(1, NULL, 1),
(2, NULL, 2),
(3, NULL, 3);

--
-- 转储表的索引
--

--
-- 表的索引 `Tables`
--
ALTER TABLE `Tables`
  ADD PRIMARY KEY (`TableID`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `Tables`
--
ALTER TABLE `Tables`
  MODIFY `TableID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
