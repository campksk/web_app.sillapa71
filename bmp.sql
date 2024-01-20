-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2024 at 09:05 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bmp`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `accId` int(20) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` varchar(100) NOT NULL DEFAULT 'member'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`accId`, `username`, `email`, `password`, `role`) VALUES
(3, 'admin', 'admin@email.com', '12345678', 'admin\r\n'),
(4, 'test', 'test@email.com', '1234', 'member');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `accId` int(20) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`accId`, `username`, `password`) VALUES
(1, 'admin', 'admin555');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `commentId` int(20) NOT NULL,
  `menuId` int(20) DEFAULT NULL,
  `accId` int(20) DEFAULT NULL,
  `comment` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`commentId`, `menuId`, `accId`, `comment`) VALUES
(8, 1, 4, 'อร่อยมากเลยครับ'),
(9, 2, 4, '1'),
(10, 2, 4, 'jhkjgjhgjhghkjhg');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menuId` int(20) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `detail` varchar(1000) DEFAULT NULL,
  `pic` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menuId`, `name`, `detail`, `pic`) VALUES
(1, 'จาวตาลเชื่อม', 'หรือจาวตาลเชื่อม ขนมไทยโบราณรสชาติหวานแบบฉ่ำ ๆ นุ่ม และหอม โดยขนมหวานนี้ทำจากจาวตาลที่นำไปเชื่อมกับน้ำตาลทรายเคี่ยว ซึ่งจาวตาลที่นำมาใช้ คือ ต้นอ่อนตาลโตนด โดยใช้ส่วนที่สามารถกินสด ๆ ได้ แต่ถ้าหากเป็นจาวตาลอ่อน ๆ จะมีรสชาติหวานกรอบอร่อย และนิยมนำไปเชื่อมทำเป็นขนมไทยเชื่อม ซึ่งการเชื่อมจาวตาลที่นิยมทำมี 2 แบบคือ จาวตาลเชื่อมเปียกแบบฉ่ำน้ำตาล และจาวตาลเชื่อมแห้ง ซึ่งจาวตาลเชื่อม เป็นอีกหนึ่งขนมไทยโบราณที่ในสมัยนี้หากินยากมาก', '1.jpg'),
(2, 'ขนมตาล ', 'วัตถุดิบต้นตำรับจากจังหวัดเพชรบุรี ซึ่งวัตถุดิบหลักทุกชิ้นทำจากต้นตาลโตนดทั้งหมด เนื้อร่วน อร่อยหอมหวาน ไม่ฝืดคอ ห่อด้วยใบตาลเป็นทรงสามเปลี่ยมสวยงาม สะดวกต่อการทาน ไม่เหนียวเลอะเทอะ เหมาะสำรับนำไปประกอบพิธีมงคล หรือสามารถนำไปเป็นของฝากให้กับญาติผู้ใหญ่ได้\r\nอายุของขนม แนะนำให้แช่ไว้ในตู้เย็นตลอดเวลา อายุการเก็บรักษาจะอยู่ได้ประมาณ 5 วัน เมื่อถึงเวลาขายค่อยนำมาอบหรือนึ่งในเตานึ่ง การอุ่นแนะนำอุ่นเพียงครั้งเดียวไม่ควรนำมาแช่ตู้เย็นแล้วอุ่นซ้ำ จะทำให้ขนมตาลแฉะไม่น่าทาน แต่ถ้าอุ่นครั้งเดียวจะเหมือนเพิ่งทำเสร็จใหม่ๆครับผม', '2.jpg'),
(4, 'ขนมขี้หนู', 'เมนูขนมไทยโบราณหากินยาก ตัวขนมทำจากแป้งข้าวเจ้าผสมกับกะทิ 🌴🥥 ยีด้วยกระชอนให้เป็นเม็ดเล็ก ๆ จากนั้นนำไปนึ่งจนสุก ก่อนใส่น้ำเชื่อมผสมสีตามความชอบ 😋🤤 จัดเสิร์ฟโรยด้วยมะพร้าวทึนทึกขูด 👍✨', '3.jpg'),
(5, 'ขนมหม้อแกง', 'เป็นขนมไทยชนิดหนึ่ง สร้างสรรโดยท้าวทองกีบม้า หรือ มารี กีมาร์ ส่วนประกอบ ในการทําคือ ไข่ แป้ง และกะทิ เป็นส่วนประกอบสําคัญนำผสมกันในถาดตามสัดส่วน ปัจจุบันมีการใส่ ถั่วเขียว และหอมเจียวมาผสม', '4.jpg'),
(6, 'ข้าวเกรียบงา', 'ใช้เนื้อมะพร้าวทำผสมกับน้ำตาลมะพร้าว หอมอร่อย น่ารับประทานได้ทั้งแบบดิบหรือจะปิ้งรับประทานก็อร่อยมาก วิธีการกินข้าวเกรียบงานั้นคือนำไปปิ้งไฟอ่อนๆให้เกรียมนิดหน่อย และส่งกลิ่นหอม ทิ้งไว้ให้เย็นเล็กน้อยข้าวเกรียบงาก็จะกรอบอร่อยสมชื่อข้าวเกรียบ', '5.jpg'),
(7, 'ทองม้วน', 'มีกลิ่นหอมหวาน น่ารับประทานยิ่งนัก หาซื้อได้โดยง่าย', '6.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`accId`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`accId`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`commentId`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menuId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `accId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `accId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `commentId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menuId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
