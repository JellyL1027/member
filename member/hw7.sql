-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022 年 06 月 21 日 02:03
-- 伺服器版本： 10.4.21-MariaDB
-- PHP 版本： 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `hw7`
--

-- --------------------------------------------------------

--
-- 資料表結構 `hw7`
--

CREATE TABLE `hw7` (
  `ID` tinyint(4) NOT NULL,
  `acc` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('男','女') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pets` enum('貓','狗','熊','其他') COLLATE utf8mb4_unicode_ci NOT NULL,
  `sports` enum('籃球','足球','排球','其他球','其他不是球') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `hw7`
--

INSERT INTO `hw7` (`ID`, `acc`, `pw`, `gender`, `pets`, `sports`) VALUES
(30, '小明', '$2y$10$XLL8vsxegtEgQ04u6tQPcebVf3n1uawVLgRhQlnrHYQLA/tv5pHo6', '男', '貓', '其他球'),
(33, '12', '$2y$10$8/bKJf5qohDPHDHXMVGojO4nhL7N8aFMQ4gpWEEN5AizI0MdTXfES', '女', '狗', '排球'),
(34, '777', '$2y$10$oFJgZywsskgdWGXgYJ0.EuP3rUx0PXGGF6ZCpybHthS5rUnyfx6Fe', '男', '熊', '籃球');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `hw7`
--
ALTER TABLE `hw7`
  ADD PRIMARY KEY (`ID`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `hw7`
--
ALTER TABLE `hw7`
  MODIFY `ID` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
