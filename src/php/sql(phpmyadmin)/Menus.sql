-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2024-05-16 05:20:46
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
-- 表的结构 `Menus`
--

CREATE TABLE `Menus` (
  `MenuID` int NOT NULL,
  `Category` enum('Starter','Main','Dessert','Beverage') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 转存表中的数据 `Menus`
--

INSERT INTO `Menus` (`MenuID`, `Category`) VALUES
(1, 'Main'),
(2, 'Dessert'),
(3, 'Beverage'),
(4, 'Starter');

--
-- 转储表的索引
--

--
-- 表的索引 `Menus`
--
ALTER TABLE `Menus`
  ADD PRIMARY KEY (`MenuID`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `Menus`
--
ALTER TABLE `Menus`
  MODIFY `MenuID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
