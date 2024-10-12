-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2024-05-16 05:20:10
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
-- 表的结构 `MenuItems`
--

CREATE TABLE `MenuItems` (
  `ItemID` int NOT NULL,
  `MenuID` int DEFAULT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 转存表中的数据 `MenuItems`
--

INSERT INTO `MenuItems` (`ItemID`, `MenuID`, `Name`, `Price`) VALUES
(58, 1, 'burger', 18.00),
(301, 4, 'vegetable salad', 8.00),
(302, 4, 'Fortune cookies', 8.00);

--
-- 转储表的索引
--

--
-- 表的索引 `MenuItems`
--
ALTER TABLE `MenuItems`
  ADD PRIMARY KEY (`ItemID`),
  ADD KEY `MenuID` (`MenuID`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `MenuItems`
--
ALTER TABLE `MenuItems`
  MODIFY `ItemID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=309;

--
-- 限制导出的表
--

--
-- 限制表 `MenuItems`
--
ALTER TABLE `MenuItems`
  ADD CONSTRAINT `MenuItems_ibfk_1` FOREIGN KEY (`MenuID`) REFERENCES `Menus` (`MenuID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
