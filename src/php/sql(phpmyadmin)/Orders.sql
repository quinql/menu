-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2024-05-16 05:20:50
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
-- 表的结构 `Orders`
--

CREATE TABLE `Orders` (
  `OrderID` int NOT NULL,
  `UserID` int DEFAULT NULL,
  `TableID` int DEFAULT NULL,
  `ItemID` int NOT NULL,
  `Status` enum('Pending','Completed','Cancelled') NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 转存表中的数据 `Orders`
--

INSERT INTO `Orders` (`OrderID`, `UserID`, `TableID`, `ItemID`, `Status`, `Name`, `Price`) VALUES
(4, 205, 1, 32, 'Cancelled', 'burger', 12),
(6, 205, 1, 301, 'Pending', 'vegetable salad', 8),
(7, 205, 1, 301, 'Pending', 'vegetable salad', 8),
(8, 205, 1, 301, 'Pending', 'vegetable salad', 8),
(9, 205, 1, 301, 'Pending', 'vegetable salad', 8),
(10, 205, 1, 301, 'Pending', 'vegetable salad', 8);

--
-- 转储表的索引
--

--
-- 表的索引 `Orders`
--
ALTER TABLE `Orders`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `TableID` (`TableID`),
  ADD KEY `ItemID` (`ItemID`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `Orders`
--
ALTER TABLE `Orders`
  MODIFY `OrderID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 限制导出的表
--

--
-- 限制表 `Orders`
--
ALTER TABLE `Orders`
  ADD CONSTRAINT `Orders_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `Users` (`UserID`) ON DELETE SET NULL,
  ADD CONSTRAINT `Orders_ibfk_2` FOREIGN KEY (`TableID`) REFERENCES `Tables` (`TableID`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
