-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2018 at 09:52 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vehicle management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'mihaf24', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_id` int(11) NOT NULL,
  `id` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `salary` int(255) NOT NULL,
  `equipment` int(255) NOT NULL,
  `oil` int(255) NOT NULL,
  `tcost` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_id`, `id`, `username`, `salary`, `equipment`, `oil`, `tcost`) VALUES
(8, '25', '', 1000, 1000001, 1010, 101010101),
(9, '25', '', 1000, 100, 300, 1400),
(10, '25', '', 10000, 500, 4000, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `type` varchar(8) NOT NULL,
  `req_date` varchar(100) NOT NULL,
  `req_time` varchar(100) NOT NULL,
  `ret_date` varchar(100) NOT NULL,
  `ret_time` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `pickup_point` varchar(100) NOT NULL,
  `resons` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(14) NOT NULL,
  `confirmation` int(11) NOT NULL,
  `veh_reg` varchar(255) NOT NULL,
  `driverid` int(11) NOT NULL,
  `finished` int(11) NOT NULL,
  `paid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `name`, `username`, `department`, `type`, `req_date`, `req_time`, `ret_date`, `ret_time`, `destination`, `pickup_point`, `resons`, `email`, `mobile`, `confirmation`, `veh_reg`, `driverid`, `finished`, `paid`) VALUES
(47, 'ibtihaj ahmed', 'fahad', 'CSE', 'car', '05/01/2018', '7 : 19 AM', '05/02/2018', '7 : 19 AM', 'Katakhali', 'Ruet Gate', 'Education', 'fahad@gmail.com', 19398134, 1, 'ga-259723', 20, 1, 1),
(48, 'ibtihaj ahmed', 'fahad', 'CSE', 'car', '05/01/2018', '7 : 22 AM', '05/02/2018', '7 : 22 AM', 'dd', 'dd', 'dd', 'fahad@gmail.com', 19398134, 1, 'cho- 301294', 20, 1, 1),
(49, 'ibtihaj ahmed', 'fahad', 'CSE', 'car', '05/24/2018', '7 : 32 AM', '05/25/2018', '7 : 32 AM', 'ra', 'as', 'Trip', 'fahad@gmail.com', 2147483647, 1, 'cho- 301294', 21, 1, 1),
(50, 'ibtihaj ahmed', 'fahad', 'cse', 'car', '07/09/2018', '8 : 55 PM', '07/10/2018', '8 : 55 PM', 'kajla', 'kajla', 'emni', 'fahad@gmail.com', 2147483647, 1, 'ga-259723', 20, 1, 1),
(51, 'ibtihaj ahmed', 'fahad', 'dd', 'car', '07/09/2018', '9 : 05 PM', '07/09/2018', '9 : 05 PM', 'dd', 'dd', 'dd', 'fahad@gmail.com', 0, 1, 'cho- 301294', 21, 1, 1),
(52, 'ibtihaj ahmed', 'fahad', 'dd', 'car', '07/02/2018', '9 : 06 PM', '07/02/2018', '9 : 06 PM', 'dd', 'dd', 'sd', 'fahad@gmail.com', 0, 1, 'cho- 301294', 21, 1, 1),
(53, 'ibtihaj ahmed', 'fahad', 'cse', 'bus', '07/09/2018', '9 : 11 PM', '07/08/2018', '9 : 11 PM', 'ddd', 'ddd', 'dd', 'fahad@gmail.com', 1738718731, 1, 'ga-259723', 20, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `driverid` int(11) NOT NULL,
  `drname` varchar(255) NOT NULL,
  `drjoin` varchar(255) NOT NULL,
  `drmobile` varchar(20) NOT NULL,
  `drnid` varchar(30) NOT NULL,
  `drlicense` varchar(30) NOT NULL,
  `drlicensevalid` varchar(100) NOT NULL,
  `draddress` varchar(255) NOT NULL,
  `drphoto` varchar(30) NOT NULL,
  `dr_available` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`driverid`, `drname`, `drjoin`, `drmobile`, `drnid`, `drlicense`, `drlicensevalid`, `draddress`, `drphoto`, `dr_available`) VALUES
(20, 'fahim', '03/04/2018', '01717172398712', '91238912093097812', '1093q098091839', '03/26/2018', ' creasent road, dhaka, bangladesh.', 'nsf.jpg', 1),
(21, 'Arman', '03/04/2018', '0123084982', 'kls3893809839082', '1093q098091839', '03/04/2018', ' Oktroy Mor, Rajshahi.', 'rkb.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tripcost`
--

CREATE TABLE `tripcost` (
  `id` int(11) NOT NULL,
  `booking_id` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `total_km` varchar(11) NOT NULL,
  `oil_cost` varchar(11) NOT NULL,
  `extra_cost` varchar(11) NOT NULL,
  `total_cost` varchar(11) NOT NULL,
  `paid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tripcost`
--

INSERT INTO `tripcost` (`id`, `booking_id`, `username`, `total_km`, `oil_cost`, `extra_cost`, `total_cost`, `paid`) VALUES
(13, '47', 'fahad', '10', '33', '8', '250', 1),
(15, '48', 'fahad', '10', '1000', '1200', '2200', 1),
(18, '49', 'fahad', '8', '1000', '1200', '2200', 1),
(19, '51', 'fahad', '100', '100`', '10', '10', 1),
(20, '52', 'fahad', '10', '1000', '10', '1010', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `email`, `username`, `password`, `admin`) VALUES
(10, 'ibtihaj', 'ahmed', 'fahad@gmail.com', 'fahad', 'asdasd', 0),
(13, 'dad', 'ahmed', 'fahaha@gmail.com', 'asdasd', 'asdasdad', 0),
(14, 'rakibul', 'hoque', 'rakib@gmail.com', 'rakib24', '1234', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `veh_id` int(11) NOT NULL,
  `veh_reg` varchar(100) NOT NULL,
  `veh_type` varchar(20) NOT NULL,
  `chesisno` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `veh_color` varchar(100) NOT NULL,
  `veh_regdate` varchar(100) NOT NULL,
  `veh_description` varchar(255) NOT NULL,
  `veh_photo` varchar(255) NOT NULL,
  `veh_available` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`veh_id`, `veh_reg`, `veh_type`, `chesisno`, `brand`, `veh_color`, `veh_regdate`, `veh_description`, `veh_photo`, `veh_available`) VALUES
(25, 'ga-259723', 'car', '101-12303.20201', 'corolla', 'Black', '25/03.17', 'hello this is a black car.', '1.jpg', 1),
(26, 'cho- 301294', 'car', '101-12309.23981', 'axio', 'white', '26.9.15', ' hello this is a white car. ', '2.jpg', 0),
(35, 'go-190312', 'car', '101321-138713.3291823', 'Corolla', 'Red', '10/17/2017', ' This is a red car.', 'images.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`driverid`);

--
-- Indexes for table `tripcost`
--
ALTER TABLE `tripcost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`veh_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `driverid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tripcost`
--
ALTER TABLE `tripcost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `veh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
