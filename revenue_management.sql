-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 07, 2017 at 10:20 PM
-- Server version: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 5.6.30-10+deb.sury.org~xenial+2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `revenue_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `pk` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `dateInput` date NOT NULL,
  `bill_type` int(11) DEFAULT NULL,
  `activity_type` int(11) NOT NULL COMMENT '1: income; 2: outcome; 3: investment amount',
  `description` text NOT NULL,
  `value` bigint(20) NOT NULL,
  `registration_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`pk`, `user`, `dateInput`, `bill_type`, `activity_type`, `description`, `value`, `registration_date`) VALUES
(4, 9, '2018-11-11', 2, 1, 'Consequuntur earum qui sint dolore nulla omnis rerum minus quasi quae dolorem rerum tenetur quia sunt laboriosam voluptate sed', 5, '2017-08-06 17:58:05'),
(5, 9, '1995-11-11', 2, 1, 'Aut ab eu minima sint earum architecto iure ad quod velit quas consequat Commodi culpa sint', 24, '2017-08-06 17:58:47'),
(6, 9, '1999-11-11', 4, 2, 'Consectetur non eu fugiat veritatis accusamus est lorem commodo neque earum fugiat doloremque accusantium et repellendus Eius omnis officia', 86, '2017-08-06 18:01:32'),
(7, 9, '1995-11-11', 3, 2, 'Rem ab voluptas qui anim ut quae laborum Fugiat', 72, '2017-08-06 18:01:54'),
(8, 8, '1999-11-11', 5, 3, 'Consectetur non eu fugiat veritatis accusamus est lorem commodo neque earum fugiat doloremque accusantium et repellendus Eius omnis officia', 86, '2017-08-06 18:01:32'),
(9, 8, '1995-11-11', 5, 3, 'Rem ab voluptas qui anim ut quae laborum Fugiat', 72, '2017-08-06 18:01:54'),
(10, 8, '1995-11-11', 5, 3, 'Elmo Carver', 1111, '2017-08-07 22:04:41'),
(11, 8, '2016-11-11', 5, 3, 'ád', 123123123123, '2017-08-07 22:05:02');

-- --------------------------------------------------------

--
-- Table structure for table `bill_type`
--

CREATE TABLE `bill_type` (
  `pk` int(11) NOT NULL,
  `activity_type` int(11) NOT NULL COMMENT '1: income; 2: outcome; 3: investment amount',
  `name` text CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill_type`
--

INSERT INTO `bill_type` (`pk`, `activity_type`, `name`, `description`, `registration_date`) VALUES
(1, 3, 'Đầu tư', 'Tiền đầu tư', '2017-08-07 15:19:22'),
(2, 1, 'Bán ve chai', 'Thu tiền bán ve chai', '2017-08-06 09:43:42'),
(3, 2, 'Mua vật liệu', 'Tiền mua vật liệu', '2017-08-06 09:44:27'),
(4, 2, 'Mua nước', 'Tiền mua nước uống chơi', '2017-08-06 09:44:21');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` char(15) NOT NULL,
  `address` text NOT NULL,
  `type` int(11) NOT NULL COMMENT '1: manager; 2: staff',
  `registration_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `username`, `password`, `email`, `tel`, `address`, `type`, `registration_date`) VALUES
(1, 'Carlos Cameron', 'xuzipoc', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'qitifi@hotmail.com', '+519-45-1098004', 'Laborum animi mollitia fuga Reiciendis qui laborum Quo omnis accusamus laboriosam cum velit voluptas itaque eum voluptas amet cumque neque', 1, '2017-08-06 06:52:22'),
(2, 'Kadeem Ware', 'zujyd', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'xicarir@gmail.com', '+215-68-4239668', 'Et sint veniam veritatis voluptatem Commodi repellendus Sit commodi', 1, '2017-08-06 06:56:03'),
(3, 'Mercedes Vargas', 'myhyzobowo', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'bapevusi@gmail.com', '+653-39-6535345', 'Nisi molestiae ut molestiae odio ea animi esse commodi dicta veritatis exercitation soluta quia nemo nihil', 1, '2017-08-06 07:09:19'),
(4, 'Alea Conley', 'mejojaq', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'duhuhol@hotmail.com', '+558-52-9372400', 'Et nobis ipsa velit ea', 1, '2017-08-06 07:18:21'),
(5, 'Inez Chapman', 'huy', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'buwuzuga@gmail.com', '+164-43-7306055', 'Est nihil qui et qui accusantium cillum et amet asperiores et eum consequatur Aut velit', 1, '2017-08-06 07:21:21'),
(6, 'Talon Farrell', 'huy', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'wusije@hotmail.com', '+221-65-6801491', 'Quo corporis qui velit qui eaque voluptatem Magnam fugiat dignissimos non eu voluptatibus esse sit voluptatem et in', 2, '2017-08-06 09:37:47'),
(7, 'Talon Farrell', 'huy', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'wusije@hotmail.com', '+221-65-6801491', 'Quo corporis qui velit qui eaque voluptatem Magnam fugiat dignissimos non eu voluptatibus esse sit voluptatem et in', 2, '2017-08-06 09:37:56'),
(8, 'Talon Farrell', 'tranngochuy95', '3e4d891a5df3d6d0d7dd9432a1bc6470', 'ne.4get2903@gmail.com', '+221-65-6801491', 'Quo corporis qui velit qui eaque voluptatem Magnam fugiat dignissimos non eu voluptatibus esse sit voluptatem et in', 1, '2017-08-07 13:09:39'),
(9, 'Talon Farrell', 'tranngochuy951', '3e4d891a5df3d6d0d7dd9432a1bc6470', 'ne.4get2903@gmail.com', '+221-65-6801491', 'Quo corporis qui velit qui eaque voluptatem Magnam fugiat dignissimos non eu voluptatibus esse sit voluptatem et in', 1, '2017-08-06 09:40:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `bill_type`
--
ALTER TABLE `bill_type`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `bill_type`
--
ALTER TABLE `bill_type`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
