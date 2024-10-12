-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2024-05-16 05:20:56
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
-- 表的结构 `Users`
--

CREATE TABLE `Users` (
  `UserID` int NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Role` enum('Admin','User','Staff') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 转存表中的数据 `Users`
--

INSERT INTO `Users` (`UserID`, `UserName`, `Password`, `Role`) VALUES
(202, 'staff1', 'staff1', 'Staff'),
(203, 'staff2', 'staff2', 'Staff'),
(204, 'cus1', 'cus1', 'User'),
(205, 'cus2', 'cus2', 'User'),
(206, 'cus3', 'cus3', 'User'),
(207, 'staff3', 'staff3', 'Staff'),
(208, 'Admin', 'Admin001', 'Admin');

--
-- 转储表的索引
--

--
-- 表的索引 `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`UserID`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `Users`
--
ALTER TABLE `Users`
  MODIFY `UserID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
