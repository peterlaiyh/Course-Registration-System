-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： localhost:8889
-- 產生時間： 2024 年 07 月 02 日 15:59
-- 伺服器版本： 5.7.39
-- PHP 版本： 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `course_registration_demo`
--

-- --------------------------------------------------------

--
-- 資料表結構 `t_course_list`
--

CREATE TABLE `t_course_list` (
  `c_id` varchar(4) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `sensei` varchar(25) NOT NULL,
  `category` varchar(35) DEFAULT NULL,
  `r_grade` varchar(3) DEFAULT NULL,
  `credit` int(1) NOT NULL,
  `term` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `t_course_list`
--

INSERT INTO `t_course_list` (`c_id`, `c_name`, `sensei`, `category`, `r_grade`, `credit`, `term`) VALUES
('1200', 'F80: 技術者倫理', '浅井', 'Foundation Subjects (Compulsory)', '1,2', 2, 'Spring 1'),
('1201', 'F40: 情報ネットワーク基礎論', '武田', 'Foundation Subjects (Elective)', '1,2', 2, 'Spring 1'),
('1202', 'F10: Linux基礎', '毛利', 'Foundation Subjects (Elective)', '1,2', 2, 'Spring 1'),
('1203', 'F30: プログラミング基礎論Python', '前田', 'Foundation Subjects (Elective)', '1,2', 2, 'Spring 3'),
('1207', 'F50: コンピュータ・ソフトウェア入門', '徳川', 'Foundation Subjects (Elective)', '1,2', 2, 'Spring 2'),
('1208', 'F20: プログラミング基礎論C', '毛利', 'Foundation Subjects (Elective)', '1,2', 2, 'Spring 2'),
('1209', 'F70: ノーコードICT活用', '島津', 'Foundation Subjects (Elective)', '1,2', 2, 'Spring 2'),
('1216', 'G31: Linux応用', '上杉', 'Core Subejcts (Elective)', '1,2', 2, 'Fall 1'),
('1222', 'G61: 情報ネットワーク特論', '立花', 'Core Subejcts (Elective)', '2推奨', 2, 'Spring 1'),
('1224', 'G62: 情報ネットワーク演習', '立花', 'Core Subejcts (Elective)', '2推奨', 2, 'Spring 2'),
('1225', 'G71: 情報セキュリティ', '伊達', 'Core Subejcts (Elective)', '1,2', 2, 'Spring 2'),
('1227', 'G41: プログラミング特論Java', '島津', 'Core Subejcts (Elective)', '1,2', 2, 'Fall 1'),
('1231', 'M11: プロジェクトマネジメント', '徳川', 'Core Subejcts (Elective)', '1,2', 2, 'Fall 1'),
('1241', 'G51: プログラミング特論 C', '毛利', 'Core Subejcts (Elective)', '1,2', 2, 'Fall 1'),
('1245', 'G22: ソフトウェア開発特論', '上杉', 'Core Subejcts (Elective)', '1,2', 2, 'Fall 2'),
('1246', 'G13: ソフトウェア開発演習', '上杉', 'Core Subejcts (Elective)', '2推奨', 2, 'Spring 1'),
('1249', 'G21: Webアプリ開発（HTML,PHP）', '前田', 'Core Subejcts (Elective)', '1,2', 2, 'Fall 1'),
('1251', 'T11: 探究実践演習', '織田', 'Core Subejcts (Compulsory)', '1,2', 2, 'Spring 1'),
('1272', 'S61: 創造性開発演習', '織田', 'Core Subejcts (Elective)', '1,2', 2, 'Spring 3'),
('1287', 'G81: AI特論', '石田', 'Core Subejcts (Elective)', '1,2', 2, 'Fall 2'),
('1289', 'S51: 日本の国際協力－SDG\'s達成への取組－', '明智', 'Core Subejcts (Elective)', '1,2', 2, 'Spring 3'),
('1290', 'M42: ビジネスプロセス演習', '北条', 'Core Subejcts (Elective)', '1,2', 2, 'Fall 2'),
('1292', 'G91: IoT開発', '前田', 'Core Subejcts (Elective)', '1,2', 2, 'Fall 2'),
('1293', 'G52: 画像処理', '毛利', 'Core Subejcts (Elective)', '1,2', 2, 'Fall 2'),
('1294', 'M21: 要求分析と設計', '三好', 'Core Subejcts (Elective)', '2推奨', 2, 'Spring 1'),
('1295', 'M22: 要求分析と設計演習', '三好', 'Core Subejcts (Elective)', '2推奨', 2, 'Spring 2'),
('1296', 'M31: ICTビジネス戦略論', '豊臣', 'Core Subejcts (Elective)', '1,2', 2, 'Spring 1'),
('1297', 'M32: ICTビジネスケース演習', '豊臣', 'Core Subejcts (Elective)', '1,2', 2, 'Fall 1'),
('1299', 'M41: ビジネスプロセス特論', '北条', 'Core Subejcts (Elective)', '1,2', 2, 'Spring 2'),
('2200', 'F80e: Engineering Ethics', 'Gamo', 'Foundation Subjects (Compulsory)', '1', 2, 'Spring 1'),
('2201', 'F40e: Fundamentals of Information Networks', 'Takeda', 'Foundation Subjects (Elective)', '1', 2, 'Fall 1'),
('2203', 'F10e: Fundamentals of Computer Programming Python', 'Maeda', 'Foundation Subjects (Elective)', '1', 2, 'Fall 2'),
('2207', 'F50e: Introduction to Computer Software', 'Tokugawa', 'Foundation Subjects (Elective)', '1', 2, 'Fall 2'),
('2209', 'F60e: No Code ICT Application', 'Shimazu', 'Foundation Subjects (Elective)', '1', 2, 'Spring 1'),
('2216', 'G31e: Linux Applications', 'Uesugi', 'Core Subejcts (Elective)', '1', 2, 'Spring 2'),
('2222', 'G61e: Advanced Information Network', 'Tachibana', 'Core Subejcts (Elective)', '2', 2, 'Fall 1'),
('2224', 'G62e: Information Network Exercises', 'Tachibana', 'Core Subejcts (Elective)', '2', 2, 'Fall 2'),
('2225', 'G71e: Information Security', 'Takeda', 'Core Subejcts (Elective)', '2', 2, 'Fall 2'),
('2231', 'M11e: Project Management', 'Tokugawa', 'Core Subejcts (Elective)', '1', 2, 'Spring 1'),
('2249', 'G21e: Web Application and Database', 'Maeda', 'Core Subejcts (Elective)', '1', 2, 'Spring 1'),
('2251', 'T11e: Tankyu Practice', 'Oda', 'Core Subejcts (Compulsory)', '1', 2, 'Fall 1'),
('2252', 'T12e: Specific Theme Study A', 'A member of faculty', 'STS-A', '1', 4, 'Fall 3～ Spring 3'),
('2261', 'G51e: Data Science', 'Saito', 'Core Subejcts (Elective)', '1', 2, 'Spring 1'),
('2262', 'G52e: Data Science Exercises', 'Saito', 'Core Subejcts (Elective)', '1', 2, 'Spring 2'),
('2271', 'S71e: Leadership Development Exercises', 'Hatakeyama', 'Core Subejcts (Elective)', '1', 2, 'Fall 2'),
('2272', 'S61e: Practice of Creativity Development', 'Oda', 'Core Subejcts (Elective)', '1', 2, 'Fall 3'),
('2274', 'S31e: Urban Planning', 'Ukitachi', 'Core Subejcts (Elective)', '1', 2, 'Spring 2'),
('2281', 'S12e: ICT4D Project Exercises', 'Sanada', 'Core Subejcts (Elective)', '1', 2, 'Fall 3'),
('2283', 'S13e: ICT4D Special Exercises 1', 'Hosokawa', 'Core Subejcts (Elective)', '1', 2, 'Spring 1'),
('2284', 'S14e: ICT4D Special Exercises 2', 'Hosokawa', 'Core Subejcts (Elective)', '1', 2, 'Spring 2'),
('2285', 'S11e: ICT for Developments', 'Asakura', 'Core Subejcts (Elective)', '1', 2, 'Fall 1'),
('2286', 'S21e: Social Development', 'Sanada', 'Core Subejcts (Elective)', '1', 2, 'Fall 1'),
('2287', 'G81e: Artificial Intelligence', 'Ishida', 'Core Subejcts (Elective)', '1', 2, 'Spring 2'),
('2288', 'S41e: International Development Cooperation', 'Gamo', 'Core Subejcts (Elective)', '1', 2, 'Fall 1'),
('2289', 'S51e: Japan’s ODA (JICA’s international cooperation)', 'Akechi', 'Core Subejcts (Elective)', '1', 2, 'Fall 2'),
('2292', 'G91e: IoT Development', 'Amago', 'Core Subejcts (Elective)', '1', 2, 'Spring 2'),
('2294', 'M21e: Requirement Analysis and Design', 'Miyoshi', 'Core Subejcts (Elective)', '2', 2, 'Fall 1'),
('2295', 'M21e: Requirement Analysis and Design Exercises', 'Miyoshi', 'Core Subejcts (Elective)', '2', 2, 'Fall 2'),
('2296', 'M31e: ICT Business Strategy', 'Toyotomi', 'Core Subejcts (Elective)', '1', 2, 'Fall 2'),
('2297', 'M32e: ICT Business Case Exercises', 'Toyotomi', 'Core Subejcts (Elective)', '1', 2, 'Spring 2'),
('3252', 'T12e: Specific Theme Study A(HT)', 'A member of faculty', 'STS-A', '1', 4, 'Fall 3～ Spring 3'),
('N111', 'Japanese A1', 'Kuroda', '', '1', 0, 'Fall 1 - 3'),
('N112', 'Japanese B1', 'Nabeshima', '', '1', 0, 'Fall 1 - 3'),
('N121', 'Japanese A2', 'Kuroda', '', '1', 0, 'Spring 1 - 2 '),
('N122', 'Japanese B2', 'Nabeshima', '', '1', 0, 'Spring 1 - 2 '),
('N131', 'Japanese A3', 'Kuroda', '', '1', 0, 'Fall 1 - 3'),
('N132', 'Japanese B3', 'Nabeshima', '', '1', 0, 'Fall 1 - 3'),
('N141', 'Japanese A4', 'Kuroda', '', '1', 0, 'Spring 1 - 2 '),
('N142', 'Japanese B4', 'Nabeshima', '', '1', 0, 'Spring 1 - 2 '),
('N201', 'Business and Academic writing in practice', 'Gamo', '', '1', 0, 'Spring 2');

-- --------------------------------------------------------

--
-- 資料表結構 `t_reg_list`
--

CREATE TABLE `t_reg_list` (
  `s_id` varchar(6) NOT NULL,
  `c_id` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `t_reg_list`
--

INSERT INTO `t_reg_list` (`s_id`, `c_id`) VALUES
('s10101', '1249'),
('s10101', '1292'),
('s10101', '2200'),
('s10101', '2201'),
('s10101', '2203'),
('s10101', '2207'),
('s10101', '2209'),
('s10101', '2216'),
('s10101', '2222'),
('s10101', '2225'),
('s10101', '2249'),
('s10101', '2251'),
('s10101', '2252'),
('s10101', '2261'),
('s10101', '2272'),
('s10101', '2285'),
('s10101', '2287'),
('s10102', '2200'),
('s10102', '2201'),
('s10102', '2203'),
('s10102', '2207'),
('s10102', '2209'),
('s10102', '2222'),
('s10102', '2224'),
('s10102', '2225'),
('s10102', '2231'),
('s10102', '2249'),
('s10102', '2251'),
('s10102', '2252'),
('s10102', '2285'),
('s10102', '2289'),
('s10102', '2294'),
('s10103', '2200'),
('s10103', '2201'),
('s10103', '2203'),
('s10103', '2207'),
('s10103', '2209'),
('s10103', '2216'),
('s10103', '2225'),
('s10103', '2231'),
('s10103', '2251'),
('s10103', '2252'),
('s10103', '2261'),
('s10103', '2262'),
('s10103', '2272'),
('s10103', '2281'),
('s10103', '2285'),
('s10103', '2286'),
('s10103', '2287'),
('s10103', 'N111'),
('s10103', 'N112'),
('s10103', 'N121'),
('s10103', 'N122'),
('s10103', 'N131'),
('s10103', 'N132'),
('s10103', 'N141'),
('s10103', 'N142'),
('s10103', 'N201'),
('s10104', '2200'),
('s10104', '2201'),
('s10104', '2203'),
('s10104', '2207'),
('s10104', '2216'),
('s10104', '2231'),
('s10104', '2249'),
('s10104', '2251'),
('s10104', '2252'),
('s10104', '2261'),
('s10104', '2262'),
('s10104', '2285'),
('s10104', '2286'),
('s10104', '2287'),
('s10104', '2292'),
('s10104', 'N201'),
('s10105', '2200'),
('s10105', '2201'),
('s10105', '2203'),
('s10105', '2207'),
('s10105', '2216'),
('s10105', '2222'),
('s10105', '2224'),
('s10105', '2225'),
('s10105', '2231'),
('s10105', '2251'),
('s10105', '2252'),
('s10105', '2271'),
('s10105', '2272'),
('s10105', '2281'),
('s10105', '2286'),
('s10105', '2287'),
('s10105', '2294'),
('s10105', 'N111'),
('s10105', 'N112'),
('s10105', 'N201'),
('s10106', '2200'),
('s10106', '2201'),
('s10106', '2203'),
('s10106', '2209'),
('s10106', '2249'),
('s10106', '2251'),
('s10106', '2252'),
('s10106', '2261'),
('s10106', '2272'),
('s10106', '2281'),
('s10106', '2285'),
('s10106', '2286'),
('s10106', '2287'),
('s10106', '2288'),
('s10106', '2289'),
('s10106', '2292'),
('s10106', '2296'),
('s10106', 'N111'),
('s10106', 'N112'),
('s10106', 'N122'),
('s10106', 'N201'),
('s10107', '2200'),
('s10107', '2201'),
('s10107', '2203'),
('s10107', '2207'),
('s10107', '2209'),
('s10107', '2216'),
('s10107', '2222'),
('s10107', '2224'),
('s10107', '2225'),
('s10107', '2231'),
('s10107', '2249'),
('s10107', '2251'),
('s10107', '2252'),
('s10107', '2271'),
('s10107', '2287'),
('s10107', '2292'),
('s10107', '2297'),
('s10108', '2200'),
('s10108', '2201'),
('s10108', '2203'),
('s10108', '2209'),
('s10108', '2216'),
('s10108', '2222'),
('s10108', '2224'),
('s10108', '2225'),
('s10108', '2231'),
('s10108', '2251'),
('s10108', '2252'),
('s10108', '2261'),
('s10108', '2272'),
('s10108', '2281'),
('s10108', '2286'),
('s10108', '2287'),
('s10108', '2292'),
('s10108', 'N131'),
('s10108', 'N132'),
('s10108', 'N141'),
('s10108', 'N142'),
('s10109', '2200'),
('s10109', '2207'),
('s10109', '2231'),
('s10109', '2249'),
('s10109', '2251'),
('s10109', '2252'),
('s10109', '2261'),
('s10109', '2262'),
('s10109', '2271'),
('s10109', '2272'),
('s10109', '2274'),
('s10109', '2281'),
('s10109', '2285'),
('s10109', '2286'),
('s10109', '2294'),
('s10109', '2296'),
('s10109', '2297'),
('s10110', '2200'),
('s10110', '2201'),
('s10110', '2203'),
('s10110', '2209'),
('s10110', '2225'),
('s10110', '2249'),
('s10110', '2251'),
('s10110', '2252'),
('s10110', '2261'),
('s10110', '2271'),
('s10110', '2272'),
('s10110', '2274'),
('s10110', '2281'),
('s10110', '2285'),
('s10110', '2286'),
('s10110', '2288'),
('s10110', '2289'),
('s10110', 'N111'),
('s10110', 'N112'),
('s10110', 'N122'),
('s10110', 'N201'),
('s10111', '2200'),
('s10111', '2203'),
('s10111', '2207'),
('s10111', '2209'),
('s10111', '2216'),
('s10111', '2224'),
('s10111', '2225'),
('s10111', '2249'),
('s10111', '2251'),
('s10111', '2252'),
('s10111', '2262'),
('s10111', '2272'),
('s10111', '2274'),
('s10111', '2281'),
('s10111', '2286'),
('s10111', '2287'),
('s10111', '2294'),
('s10111', 'N111'),
('s10111', 'N112'),
('s10111', 'N121'),
('s10112', '2200'),
('s10112', '2201'),
('s10112', '2203'),
('s10112', '2207'),
('s10112', '2251'),
('s10112', '2252'),
('s10112', '2261'),
('s10112', '2271'),
('s10112', '2272'),
('s10112', '2274'),
('s10112', '2283'),
('s10112', '2285'),
('s10112', '2286'),
('s10112', '2287'),
('s10112', '2292'),
('s10112', '2296'),
('s10113', '2200'),
('s10113', '2201'),
('s10113', '2203'),
('s10113', '2207'),
('s10113', '2209'),
('s10113', '2216'),
('s10113', '2225'),
('s10113', '2231'),
('s10113', '2249'),
('s10113', '2251'),
('s10113', '2252'),
('s10113', '2271'),
('s10113', '2286'),
('s10113', '2287'),
('s10113', 'N132'),
('s10113', 'N201'),
('s10114', '1209'),
('s10114', '1227'),
('s10114', '2200'),
('s10114', '2201'),
('s10114', '2203'),
('s10114', '2207'),
('s10114', '2216'),
('s10114', '2225'),
('s10114', '2231'),
('s10114', '2249'),
('s10114', '2251'),
('s10114', '2252'),
('s10114', '2261'),
('s10114', '2262'),
('s10114', '2272'),
('s10114', '2294'),
('s10114', '2296'),
('s10114', 'N201'),
('s10115', '2200'),
('s10115', '2201'),
('s10115', '2203'),
('s10115', '2207'),
('s10115', '2209'),
('s10115', '2216'),
('s10115', '2224'),
('s10115', '2225'),
('s10115', '2249'),
('s10115', '2251'),
('s10115', '2252'),
('s10115', '2272'),
('s10115', '2285'),
('s10115', '2287'),
('s10115', '2292'),
('s10115', '2294'),
('s10115', 'N111'),
('s10115', 'N112'),
('s10115', 'N121'),
('s10115', 'N122'),
('s10115', 'N201'),
('s10116', '2200'),
('s10116', '2201'),
('s10116', '2203'),
('s10116', '2207'),
('s10116', '2209'),
('s10116', '2216'),
('s10116', '2222'),
('s10116', '2224'),
('s10116', '2225'),
('s10116', '2251'),
('s10116', '2252'),
('s10116', '2261'),
('s10116', '2281'),
('s10116', '2287'),
('s10116', '2292'),
('s10117', '2200'),
('s10117', '2201'),
('s10117', '2203'),
('s10117', '2207'),
('s10117', '2216'),
('s10117', '2225'),
('s10117', '2231'),
('s10117', '2249'),
('s10117', '2251'),
('s10117', '2252'),
('s10117', '2261'),
('s10117', '2272'),
('s10117', '2281'),
('s10117', '2285'),
('s10117', '2287'),
('s10117', '2294'),
('s10117', '2296'),
('s10117', 'N111'),
('s10117', 'N201'),
('s10118', '2200'),
('s10118', '2201'),
('s10118', '2203'),
('s10118', '2207'),
('s10118', '2209'),
('s10118', '2224'),
('s10118', '2225'),
('s10118', '2231'),
('s10118', '2249'),
('s10118', '2251'),
('s10118', '2252'),
('s10118', '2283'),
('s10118', '2288'),
('s10118', '2289'),
('s10118', '2296'),
('s10119', '2200'),
('s10119', '2203'),
('s10119', '2207'),
('s10119', '2209'),
('s10119', '2216'),
('s10119', '2222'),
('s10119', '2225'),
('s10119', '2231'),
('s10119', '2249'),
('s10119', '2251'),
('s10119', '2252'),
('s10119', '2272'),
('s10119', '2281'),
('s10119', '2285'),
('s10119', '2286'),
('s10119', '2288'),
('s10119', '2292'),
('s10119', 'N111'),
('s10119', 'N112'),
('s10119', 'N121'),
('s10119', 'N122'),
('s10119', 'N201'),
('s10120', '2200'),
('s10120', '2201'),
('s10120', '2203'),
('s10120', '2207'),
('s10120', '2209'),
('s10120', '2216'),
('s10120', '2224'),
('s10120', '2225'),
('s10120', '2249'),
('s10120', '2251'),
('s10120', '2252'),
('s10120', '2261'),
('s10120', '2272'),
('s10120', '2286'),
('s10120', '2287'),
('s10120', '2292'),
('s10120', '2294'),
('s10120', 'N111'),
('s10120', 'N112'),
('s10120', 'N121'),
('s10120', 'N122'),
('s10120', 'N201'),
('s10121', '2200'),
('s10121', '2201'),
('s10121', '2216'),
('s10121', '2224'),
('s10121', '2225'),
('s10121', '2249'),
('s10121', '2251'),
('s10121', '2252'),
('s10121', '2262'),
('s10121', '2272'),
('s10121', '2287'),
('s10121', '2289'),
('s10121', '2292'),
('s10121', '2294'),
('s10121', '2296'),
('s10121', 'N111'),
('s10121', 'N112'),
('s10122', '1249'),
('s10122', '2200'),
('s10122', '2201'),
('s10122', '2203'),
('s10122', '2207'),
('s10122', '2209'),
('s10122', '2222'),
('s10122', '2224'),
('s10122', '2225'),
('s10122', '2231'),
('s10122', '2249'),
('s10122', '2251'),
('s10122', '2252'),
('s10122', '2283'),
('s10122', '2285'),
('s10122', '2289'),
('s10122', '2294'),
('s10123', '2200'),
('s10123', '2201'),
('s10123', '2203'),
('s10123', '2207'),
('s10123', '2216'),
('s10123', '2225'),
('s10123', '2231'),
('s10123', '2251'),
('s10123', '2252'),
('s10123', '2261'),
('s10123', '2272'),
('s10123', '2274'),
('s10123', '2285'),
('s10123', '2287'),
('s10123', '2292'),
('s10123', '2294'),
('s10123', '2296'),
('s10123', 'N111'),
('s10123', 'N112'),
('s10123', 'N121'),
('s10123', 'N122'),
('s10123', 'N201'),
('s10124', '1200'),
('s10124', '1202'),
('s10124', '1241'),
('s10124', '2200'),
('s10124', '2203'),
('s10124', '2209'),
('s10124', '2249'),
('s10124', '2251'),
('s10124', '2271'),
('s10124', '2296'),
('s10124', '2297'),
('s10125', '2200'),
('s10125', '2201'),
('s10125', '2203'),
('s10125', '2207'),
('s10125', '2209'),
('s10125', '2216'),
('s10125', '2225'),
('s10125', '2231'),
('s10125', '2251'),
('s10125', '2252'),
('s10125', '2261'),
('s10125', '2272'),
('s10125', '2281'),
('s10125', '2286'),
('s10125', '2287'),
('s10125', '2294'),
('s10125', '2296'),
('s10125', 'N111'),
('s10125', 'N112'),
('s10125', 'N121'),
('s10125', 'N122'),
('s10125', 'N201'),
('s10126', '2200'),
('s10126', '2201'),
('s10126', '2203'),
('s10126', '2209'),
('s10126', '2216'),
('s10126', '2251'),
('s10126', '2252'),
('s10126', '2261'),
('s10126', '2262'),
('s10126', '2271'),
('s10126', '2272'),
('s10126', '2281'),
('s10126', '2286'),
('s10126', '2287'),
('s10126', '2296'),
('s10126', 'N201'),
('s10127', '2201'),
('s10127', '2203'),
('s10127', '2207'),
('s10127', '2209'),
('s10127', '2216'),
('s10127', '2222'),
('s10127', '2224'),
('s10127', '2225'),
('s10127', '2251'),
('s10127', '2252'),
('s10127', '2261'),
('s10127', '2271'),
('s10127', '2272'),
('s10127', '2274'),
('s10127', '2286'),
('s10127', '2287'),
('s10127', 'N111'),
('s10127', 'N112'),
('s10127', 'N121'),
('s10127', 'N122'),
('s11111', '1200'),
('s11111', '1202');

-- --------------------------------------------------------

--
-- 資料表結構 `t_student_list`
--

CREATE TABLE `t_student_list` (
  `s_id` varchar(6) NOT NULL,
  `pwd` varchar(12) NOT NULL,
  `s_name` varchar(256) NOT NULL,
  `program` varchar(30) NOT NULL,
  `grade` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `t_student_list`
--

INSERT INTO `t_student_list` (`s_id`, `pwd`, `s_name`, `program`, `grade`) VALUES
('s00000', 's00000kic', 'ADMIN', 'NA', 0),
('s10101', 's10101kic', 'GARCIA Isabel Sofia', 'Innovator', 1),
('s10102', 's10102kic', 'KHAN Amir Shah', 'Innovator', 1),
('s10103', 's10103kic', 'TANAKA Akiko Hiroshi', 'Innovator', 1),
('s10104', 's10104kic', 'ZHENG Xiao Li', 'Innovator', 1),
('s10105', 's10105kic', 'NGUYEN Lan Thi', 'Innovator', 1),
('s10106', 's10106kic', 'KIM Min Jun', 'Innovator', 1),
('s10107', 's10107kic', 'KUMAR Raj Arun', 'Innovator', 1),
('s10108', 's10108kic', 'DIAZ Alejandro Enrique', 'Innovator', 1),
('s10109', 's10109kic', 'VOLKOV Pavel Ivanovich', 'Innovator', 1),
('s10110', 's10110kic', 'DESAI Priya Anjali', 'Innovator', 1),
('s10111', 's10111kic', 'MOHAMED Omar Ahmed', 'Innovator', 1),
('s10112', 's10112kic', 'COHEN David Abraham', 'Innovator', 1),
('s10113', 's10113kic', 'SCHMIDT Anna Maria', 'Innovator', 1),
('s10114', 's10114kic', 'O\'BRIEN Sarah Fiona', 'Innovator', 1),
('s10115', 's10115kic', 'LEFEBVRE Luc Mathieu', 'Innovator', 1),
('s10116', 's10116kic', 'GARCIA Miguel Angel', 'Innovator', 1),
('s10117', 's10117kic', 'YOSHIDA Hiroshi Takeo', 'Innovator', 1),
('s10118', 's10118kic', 'NGUYEN Hung Minh', 'Innovator', 1),
('s10119', 's10119kic', 'KIM So Hyun', 'Innovator', 1),
('s10120', 's10120kic', 'ADAMS William Charles', 'Innovator', 1),
('s10121', 's10121kic', 'JONES Bethan Llywelyn', 'Innovator', 1),
('s10122', 's10122kic', 'GARCIA Luisa Isabela', 'Innovator', 1),
('s10123', 's10123kic', 'POPOV Natalia Mikhailovna', 'Innovator', 1),
('s10124', 's10124kic', 'GOMEZ Carlos Enrique', 'Innovator', 1),
('s10125', 's10125kic', 'ABDULLAH Muhammad Ali', 'Innovator', 1),
('s10126', 's10126kic', 'MENDEZ Sofia Isabella', 'Innovator', 1),
('s10127', 's10127kic', 'ABRAHAM Tesfay Haile', 'Innovator', 1),
('s11111', 's11111kic', 'test3', 'Professional', 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `t_course_list`
--
ALTER TABLE `t_course_list`
  ADD PRIMARY KEY (`c_id`);

--
-- 資料表索引 `t_reg_list`
--
ALTER TABLE `t_reg_list`
  ADD PRIMARY KEY (`s_id`,`c_id`);

--
-- 資料表索引 `t_student_list`
--
ALTER TABLE `t_student_list`
  ADD PRIMARY KEY (`s_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
