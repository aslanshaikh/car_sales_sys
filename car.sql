-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2022 at 05:25 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `cid` int(255) NOT NULL,
  `carid` int(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`cid`, `carid`, `date`) VALUES
(2, 103, '0000-00-00'),
(2, 104, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `cardet`
--

CREATE TABLE `cardet` (
  `carid` int(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` bigint(50) NOT NULL,
  `features` text NOT NULL,
  `images` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cardet`
--

INSERT INTO `cardet` (`carid`, `model`, `name`, `price`, `features`, `images`) VALUES
(101, 'GLS', 'Santro', 500000, 'Hyundai Santro is a 5 seater Hatchback available in a price range of ₹ 4.77 - 6.45 Lakh. It is available in 9 variants, 1 engine option and 2 transmission options : Manual and AMT. The Santro is available in 5 colours. The mileage of Santro ranges from 20 km/kg to 30 km/kg. Engine: 1086 cc Price: ₹ 4.77 Lakh onwards Fuel Type: Petrol & CNG Seating Capacity: 5 Seater', 'images/santro.png'),
(102, 'EX', 'Creta', 982000, 'The Hyundai Creta has 1 Diesel Engine and 2 Petrol Engine on offer. The Diesel engine is 1493 cc while the Petrol engine is 1497 cc and 1353 cc . It is available with Manual & Automatic transmission.Depending upon the variant and fuel type the Creta has a mileage of 16.8 to 21.4 kmpl . The Creta is a 5 seater 4 cylinder car and has length of 4300mm, width of 1790mm and a wheelbase of 2610mm.', 'images/creta2.png'),
(103, 'SX', 'Verna', 1120000, 'Hyundai Verna is a sub-compact family car of Hyundai Motors Corporation. Hyundai Verna New has spacious interior and compact exterior with foldable seating, 2 Din MP3 players with four speaker, wooden finish panels, clutch lock system, ABS and many more. Hyundai Verna New comes with 1.6 liter petrol and 1.4 liter diesel engines that give the power of 103 bhp at 5500 rpm and 110 bhp at 4000 rpm respectively both of which deliver an excellent performance.', 'images/verna.jpg'),
(104, 'Era', 'Grand i10 NIOS', 528000, 'Hyundai Grand i10 Nios Era mileage : It returns a certified mileage of 20.7\r\n                        kmpl. ... Hyundai Grand i10 Nios Era Engine and Transmission: It is powered by a 1197 cc engine\r\n                        which is available with a Manual transmission. The 1197 cc engine puts out 81.86bhp@6000rpm of\r\n                        power and 113.75Nm@4000rpm of torque.\r\n                        Mileage (upto): 20.7 kmpl\r\n                        Transmission: Manual\r\n                        Engine (upto): 1197 cc\r\n                        Seats: 5', 'images/gi10nios.png');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cid` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cid`, `name`, `email`, `phone`, `address`, `password`) VALUES
(1, 'aslan', 'aslan123gmail.com', '5678921', 'Curti Plaza , D-wing,F-7,haveli cur', '1234'),
(2, 'abd', 'abd@gmail.com', '908765432', 'kamat nursing home ', '1234'),
(3, 'abdullah', 'abd123@gmail.com', '786543211', 'Curti Plaza , D-wing,F-7,haveli curti ponda', '1234'),
(4, 'abuuuud', 'assss', 'fffff', '33333', ''),
(10, 'Joseph', 'jo@gmail.cin', '12345678', 'asdfghjk', 'Joseph');

-- --------------------------------------------------------

--
-- Table structure for table `dealer`
--

CREATE TABLE `dealer` (
  `name` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dealer`
--

INSERT INTO `dealer` (`name`, `fname`, `lname`, `password`) VALUES
('abd', 'Abdullah', 'Shaikh', 'abd');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `cid` int(255) NOT NULL,
  `carid` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `amount` int(255) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `testdrive`
--

CREATE TABLE `testdrive` (
  `cid` int(255) NOT NULL,
  `carid` int(255) NOT NULL,
  `Time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testdrive`
--

INSERT INTO `testdrive` (`cid`, `carid`, `Time`) VALUES
(1, 1, '2021-12-28 03:30:03'),
(1, 2, '2021-11-20 05:14:33'),
(2, 1, '2021-12-30 03:30:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`cid`,`carid`);

--
-- Indexes for table `cardet`
--
ALTER TABLE `cardet`
  ADD PRIMARY KEY (`carid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `dealer`
--
ALTER TABLE `dealer`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`cid`,`carid`,`username`);

--
-- Indexes for table `testdrive`
--
ALTER TABLE `testdrive`
  ADD PRIMARY KEY (`cid`,`carid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cardet`
--
ALTER TABLE `cardet`
  MODIFY `carid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
