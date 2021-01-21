-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2020 at 06:23 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bakery`
--

-- --------------------------------------------------------

--
-- Table structure for table `breadorders`
--

CREATE TABLE `breadorders` (
  `id` int(11) NOT NULL,
  `fn` varchar(200) NOT NULL,
  `ln` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` int(10) NOT NULL,
  `at` varchar(200) NOT NULL,
  `houseno` int(10) NOT NULL,
  `street` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `pieces` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `day` date NOT NULL,
  `time` varchar(200) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `breadorders`
--

INSERT INTO `breadorders` (`id`, `fn`, `ln`, `email`, `mobile`, `at`, `houseno`, `street`, `city`, `type`, `pieces`, `quantity`, `day`, `time`, `price`, `status`) VALUES
(1, 'jkjghk', 'hkjhkhv', 'kdjhkgjh@hkhk', 5, 'Home', 55, 'jigj', 'jrjii', 'Bakery Bread(Wheat)', 15, 2, '2020-10-24', 'morning', 70, 1),
(2, 'jghjih', 'hkhij', 'hkgk@gjrk', 2147483647, 'Home', 5, 'jgrk', 'jkjgkrjk', 'With Egg', 0, 4, '2020-11-20', 'morning', 180, 0),
(3, 'jghjih', 'hkhij', 'hkgk@gjrk', 2147483647, 'Home', 5, 'jgrk', 'jkjgkrjk', 'With Egg', 0, 4, '2020-11-20', 'morning', 180, 0),
(4, 'Harshala', 'Ardekar', 'harshalaardekar101@gmail.com', 2147483647, 'Home', 8, '5/kamalabai bose chawl', 'Jogeshwari(E),mumbai-400060', 'Bakery Bread(Wheat)', 15, 2, '2020-12-02', 'morning', 70, 0);

-- --------------------------------------------------------

--
-- Table structure for table `breads`
--

CREATE TABLE `breads` (
  `name` varchar(200) NOT NULL,
  `price` int(10) NOT NULL,
  `peices` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `breads`
--

INSERT INTO `breads` (`name`, `price`, `peices`) VALUES
('Bakery Bread(Maida)', 30, 15),
('Bakery Bread(Wheat)', 35, 15),
('Pizza Bread', 40, 2),
('Croissant Breads', 50, 6),
('Burger Bun', 40, 2),
('Hot Dog Bun', 45, 3);

-- --------------------------------------------------------

--
-- Table structure for table `cakeorders`
--

CREATE TABLE `cakeorders` (
  `id` int(11) NOT NULL,
  `fn` varchar(100) NOT NULL,
  `ln` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `at` varchar(100) NOT NULL,
  `houseno` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `cake` varchar(100) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `shape` varchar(100) NOT NULL,
  `msg` varchar(100) NOT NULL,
  `day` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cakeorders`
--

INSERT INTO `cakeorders` (`id`, `fn`, `ln`, `email`, `mobile`, `at`, `houseno`, `street`, `city`, `cake`, `weight`, `type`, `shape`, `msg`, `day`, `time`, `price`, `status`) VALUES
(2, 'harshu', 'gavkar', 'hjdsh@hkhka', '5542222222', 'Home', '54', 'fjkjj', 'bmjfk', 'Floral Chocolate Cake', '1/2 kg', 'With Egg', 'Heart', 'hii', '2020-10-22', 'morning', '300', '1'),
(3, 'abc', 'xyz', 'xyz@gmail.com', '2464646464', 'Home', '8', 'mumbai', 'mumbai', 'Cream Drop Chocolate Cake', '1/2 kg', 'With Egg', 'Round', 'hii', '2020-12-01', 'morning', '350', '1'),
(4, 'abc', 'abc', 'abc@gmail.com', '4532146662', 'Home', '8', 'pavai', 'mumbai', 'Cream Drop Chocolate Cake', '1/2 kg', 'With Egg', 'Round', 'happy birthday', '2020-12-04', 'morning', '350', '0');

-- --------------------------------------------------------

--
-- Table structure for table `cakes`
--

CREATE TABLE `cakes` (
  `cakename` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cakes`
--

INSERT INTO `cakes` (`cakename`, `price`, `category`) VALUES
('Black Forest', 300, 1),
('Cream Drop ', 350, 2),
('Chocolate', 400, 1),
('Pineapple', 350, 1),
('Red Velvet', 400, 1),
('Truffle', 250, 1),
('Chocolate Fruit', 300, 1),
('Crunchy Butterscotch', 400, 1),
('Fresh Vanilla', 375, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cookie`
--

CREATE TABLE `cookie` (
  `name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cookie`
--

INSERT INTO `cookie` (`name`, `price`) VALUES
('Choco Chips', 60),
('Chocolate Delight', 80),
('Macaron', 40),
('Gems', 70),
('Dark Chocolate', 60),
('Chocolate Chips', 75);

-- --------------------------------------------------------

--
-- Table structure for table `cookieorders`
--

CREATE TABLE `cookieorders` (
  `id` int(11) NOT NULL,
  `fn` varchar(200) NOT NULL,
  `ln` varchar(200) NOT NULL,
  `email` varchar(500) NOT NULL,
  `mobile` int(10) NOT NULL,
  `at` varchar(200) NOT NULL,
  `houseno` int(10) NOT NULL,
  `street` varchar(200) NOT NULL,
  `city` varchar(500) NOT NULL,
  `type` varchar(500) NOT NULL,
  `quantity` int(10) NOT NULL,
  `day` date NOT NULL,
  `time` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cookieorders`
--

INSERT INTO `cookieorders` (`id`, `fn`, `ln`, `email`, `mobile`, `at`, `houseno`, `street`, `city`, `type`, `quantity`, `day`, `time`, `price`, `status`) VALUES
(1, 'kjdkshk', 'khkj', 'kjkhjkhk', 4545646, 'Home', 5, 'nefklj', 'jlfkll', 'Choco Chips', 3, '2020-10-22', 'morning', 180, 1),
(2, 'nkdk', 'ekfhkh', 'jfkje@efii', 54654456, 'Home', 9, 'jjjfi', 'ijfieo', 'Chocolate Chips', 2, '2020-10-23', 'morning', 120, 1),
(4, 'khdk', 'jldlk', 'kdlvl@ojofjo', 2147483647, 'Home', 5, 'kkdlk', 'lklkfl', 'Chocolate Delight', 2, '2020-10-24', 'morning', 160, 0),
(5, 'Harshala', 'Ardekar', 'harshalaardekar101@gmail.com', 2147483647, 'Home', 4, '5/kamalabai bose chawl', 'Jogeshwari(E),mumbai-400060', 'Chocolate Delight', 4, '2020-12-04', 'morning', 320, 0),
(6, 'Harshala', 'Ardekar', 'harshalaardekar101@gmail.com', 2147483647, 'Home', 4, '5/kamalabai bose chawl', 'Jogeshwari(E),mumbai-400060', 'Macaron', 3, '2020-11-27', 'morning', 120, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `id` int(10) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `category` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`id`, `username`, `password`, `category`) VALUES
(1, 'admin', 'admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `muffines`
--

CREATE TABLE `muffines` (
  `name` varchar(200) NOT NULL,
  `price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `muffines`
--

INSERT INTO `muffines` (`name`, `price`) VALUES
('Chocolate', 50),
('Choco Chips', 55),
('strawberry', 60),
('Blue berry cream', 55),
('Cream Drop Chocolate', 50),
('Red Velvet', 60),
('Berry Pie', 65),
('Caramel', 60),
('Rainbow', 50);

-- --------------------------------------------------------

--
-- Table structure for table `muffinorders`
--

CREATE TABLE `muffinorders` (
  `id` int(11) NOT NULL,
  `fn` varchar(300) NOT NULL,
  `ln` varchar(300) NOT NULL,
  `email` varchar(500) NOT NULL,
  `mobile` int(20) NOT NULL,
  `at` varchar(500) NOT NULL,
  `houseno` int(10) NOT NULL,
  `street` varchar(500) NOT NULL,
  `city` varchar(500) NOT NULL,
  `type` varchar(500) NOT NULL,
  `quantity` int(10) NOT NULL,
  `day` date NOT NULL,
  `time` varchar(300) NOT NULL,
  `price` int(10) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `muffinorders`
--

INSERT INTO `muffinorders` (`id`, `fn`, `ln`, `email`, `mobile`, `at`, `houseno`, `street`, `city`, `type`, `quantity`, `day`, `time`, `price`, `status`) VALUES
(1, 'gkjk', 'hgjk', 'gjkk@ljklgr', 232313131, 'Home', 5, 'jkergjk', 'rengkjre', 'Chocolate', 0, '2020-11-28', 'morning', 200, 0),
(2, 'abc', 'Ardekar', 'harshalaardekar101@gmail.com', 2147483647, 'Home', 4, 'Bhurke chwal', 'Mumbai', 'Cream Drop Chocolate', 0, '2020-12-04', 'morning', 150, 0),
(3, 'Rohini', 'Ardekar', 'harshalaardekar101@gmail.com', 2147483647, 'Home', 3, 'Bhurke chwal', 'Mumbai', 'Choco Chips', 2, '2020-12-02', 'morning', 110, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pastry`
--

CREATE TABLE `pastry` (
  `name` varchar(500) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pastry`
--

INSERT INTO `pastry` (`name`, `price`) VALUES
('Black Forest', 30),
('Cream Drop Chocolate', 35),
('Red Velvet', 40),
('Butterscotch', 35),
('Blue Berry', 45),
('Rainbow', 35),
('Mango', 35),
('Delivs Delight', 40),
('Chessy Red Velvet', 45);

-- --------------------------------------------------------

--
-- Table structure for table `pastryorders`
--

CREATE TABLE `pastryorders` (
  `id` int(11) NOT NULL,
  `fn` varchar(300) NOT NULL,
  `ln` varchar(300) NOT NULL,
  `email` varchar(400) NOT NULL,
  `mobile` int(20) NOT NULL,
  `at` varchar(300) NOT NULL,
  `houseno` int(10) NOT NULL,
  `street` varchar(300) NOT NULL,
  `city` varchar(200) NOT NULL,
  `pastry` varchar(300) NOT NULL,
  `quantity` int(10) NOT NULL,
  `type` varchar(200) NOT NULL,
  `day` date NOT NULL,
  `time` varchar(200) NOT NULL,
  `price` int(10) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pastryorders`
--

INSERT INTO `pastryorders` (`id`, `fn`, `ln`, `email`, `mobile`, `at`, `houseno`, `street`, `city`, `pastry`, `quantity`, `type`, `day`, `time`, `price`, `status`) VALUES
(1, 'ljgl', 'jgjj', 'jgk@jglj', 32133, 'Home', 5, 'kfjkjkg', 'jkdjkj', 'Cream Drop Chocolate', 5, 'With Egg', '2020-11-13', 'morning', 175, 0),
(2, 'abc', 'abc', 'abc@gmail.com', 2147483647, 'Home', 8, 'Bhurke chwal', 'Mumbai', 'Cream Drop Chocolate', 3, 'With Egg', '2020-12-03', 'morning', 105, 0);

-- --------------------------------------------------------

--
-- Table structure for table `waferorders`
--

CREATE TABLE `waferorders` (
  `id` int(11) NOT NULL,
  `fn` varchar(100) NOT NULL,
  `ln` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `at` varchar(500) NOT NULL,
  `houseno` int(10) NOT NULL,
  `street` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `weight` varchar(200) NOT NULL,
  `quantity` int(10) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(200) NOT NULL,
  `price` int(10) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `waferorders`
--

INSERT INTO `waferorders` (`id`, `fn`, `ln`, `email`, `mobile`, `at`, `houseno`, `street`, `city`, `category`, `type`, `weight`, `quantity`, `date`, `time`, `price`, `status`) VALUES
(1, 'hagh', 'hj', 'hjdjj', '4456565654', 'Home', 5, 'kjkdjk', 'khkjdk', '', 'Potato Salted', '1/2 kg', 1, '2020-10-22', 'morning', 180, 1),
(3, 'fjh', 'jhh', 'khkj', '5564564666', 'Home', 5, 'lfklk', 'kdvdjljk', 'Potato', 'Masala Potato', '1/2 kg', 360, '2020-10-23', 'morning', 0, 0),
(4, 'vjdkj', 'kjkd', 'kjkj5456', '564656', 'Home', 5, 'kljkl', 'lkkjl', 'Potato', 'Masala Potato', '1/2 kg', 4, '2020-10-24', 'morning', 720, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wafers`
--

CREATE TABLE `wafers` (
  `name` varchar(500) NOT NULL,
  `price` int(100) NOT NULL,
  `type` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wafers`
--

INSERT INTO `wafers` (`name`, `price`, `type`) VALUES
('Potato Salted', 150, 'potato'),
('Masala Potato', 180, 'potato'),
('Cream & Onion', 200, 'potato'),
('Tomato Salsa', 200, 'potato'),
('Chat Masala', 190, 'potato'),
('Magic Masala', 180, 'potato'),
('Plain banana', 160, 'banana'),
('Tomato Flavor', 170, 'banana'),
('Mint Flavor', 200, 'banana'),
('Chilly Flavor', 190, 'banana'),
('Lemon-n-Onion', 210, 'banana'),
('Black Pepper', 200, 'banana');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `breadorders`
--
ALTER TABLE `breadorders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cakeorders`
--
ALTER TABLE `cakeorders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cookieorders`
--
ALTER TABLE `cookieorders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `muffinorders`
--
ALTER TABLE `muffinorders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pastryorders`
--
ALTER TABLE `pastryorders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `waferorders`
--
ALTER TABLE `waferorders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `breadorders`
--
ALTER TABLE `breadorders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cakeorders`
--
ALTER TABLE `cakeorders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cookieorders`
--
ALTER TABLE `cookieorders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `muffinorders`
--
ALTER TABLE `muffinorders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pastryorders`
--
ALTER TABLE `pastryorders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `waferorders`
--
ALTER TABLE `waferorders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
