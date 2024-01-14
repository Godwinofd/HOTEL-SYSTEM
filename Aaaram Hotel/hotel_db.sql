-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2024 at 06:31 PM
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
-- Database: `hotel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Name` varchar(255) DEFAULT NULL,
  `Lastname` varchar(255) DEFAULT NULL,
  `UserID` varchar(255) NOT NULL,
  `Username` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `PasswordHash` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Name`, `Lastname`, `UserID`, `Username`, `Email`, `PasswordHash`) VALUES
('', NULL, 'User1', 'LeBron23', 'lebron@nba.com', '$2y$10$SOMEHASHEDPASSWORD'),
('', NULL, 'User2', 'Ronaldo7', 'ronaldo@fifa.com', '$2y$10$SOMEHASHEDPASSWORD'),
('', NULL, 'User3', 'Kobe24', 'kobe@nba.com', '$2y$10$SOMEHASHEDPASSWORD'),
('', NULL, 'User4', 'Messi10', 'messi@fifa.com', '$2y$10$SOMEHASHEDPASSWORD');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `HotelID` varchar(255) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Location` varchar(255) DEFAULT NULL,
  `Facilities` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`HotelID`, `Name`, `Location`, `Facilities`) VALUES
('Hotel1', 'Aaram City center', 'Birmingham', 'Free Wi-Fi, Parking, Pool'),
('Hotel2', 'Aaram Edgbaston', 'Birmingham', 'Breakfast, Gym, Spa'),
('Hotel3', 'Aaram Aston', 'Birmingham', 'Ocean View, Water Sports');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PaymentID` varchar(255) NOT NULL,
  `Amount` decimal(10,2) DEFAULT NULL,
  `PaymentDate` date DEFAULT NULL,
  `ReservationID` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`PaymentID`, `Amount`, `PaymentDate`, `ReservationID`) VALUES
('payment1', 500.00, '2024-01-18', 'reservation1'),
('payment2', 700.00, '2024-02-03', 'reservation2'),
('payment3', 900.00, '2024-03-12', 'reservation3'),
('payment4', 600.00, '2024-04-08', 'reservation4');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `ReservationID` varchar(255) NOT NULL,
  `CheckInDate` date DEFAULT NULL,
  `CheckOutDate` date DEFAULT NULL,
  `UserID` varchar(255) DEFAULT NULL,
  `RoomName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`ReservationID`, `CheckInDate`, `CheckOutDate`, `UserID`, `RoomName`) VALUES
('reservation1', '2024-01-15', '2024-01-20', 'User1', 'room101'),
('reservation2', '2024-02-01', '2024-02-05', 'User2', 'room202'),
('reservation3', '2024-03-10', '2024-03-15', 'User3', 'room305'),
('reservation4', '2024-04-05', '2024-04-10', 'User4', 'room102');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `ReviewID` varchar(255) NOT NULL,
  `Rating` int(11) DEFAULT NULL,
  `Comment` varchar(255) DEFAULT NULL,
  `UserID` varchar(255) DEFAULT NULL,
  `HotelID` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`ReviewID`, `Rating`, `Comment`, `UserID`, `HotelID`) VALUES
('review1', 4, 'Great experience! Friendly staff.', 'User1', 'Hotel1'),
('review2', 5, 'Amazing view and comfortable rooms.', 'User2', 'Hotel2'),
('review3', 4, 'Enjoyed the beachfront location.', 'User3', 'Hotel3'),
('review4', 3, 'Standard rooms, but good service.', 'User4', 'Hotel1');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `RoomName` varchar(255) NOT NULL,
  `RoomNumber` int(11) DEFAULT NULL,
  `Availability` tinyint(1) DEFAULT NULL,
  `RoomTypeID` varchar(255) DEFAULT NULL,
  `HotelID` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`RoomName`, `RoomNumber`, `Availability`, `RoomTypeID`, `HotelID`) VALUES
('room101', 101, 1, 'Standard', 'Hotel1'),
('room102', 102, 1, 'Standard', 'Hotel2'),
('room103', 103, 1, 'Executive', 'Hotel3'),
('room202', 202, 1, 'Executive', 'Hotel1'),
('room203', 203, 1, 'Executive', 'Hotel2'),
('room204', 204, 1, 'Family', 'Hotel3'),
('room305', 305, 1, 'Family', 'Hotel2');

-- --------------------------------------------------------

--
-- Table structure for table `roomtype`
--

CREATE TABLE `roomtype` (
  `RoomTypeID` varchar(255) NOT NULL,
  `TypeDesc` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `roomtype`
--

INSERT INTO `roomtype` (`RoomTypeID`, `TypeDesc`) VALUES
('Deluxe', 'Double room'),
('Standard', 'Single room'),
('Suite', 'Luxury double room');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `StaffID` varchar(255) NOT NULL,
  `StaffName` varchar(255) DEFAULT NULL,
  `Position` varchar(255) DEFAULT NULL,
  `HotelID` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`StaffID`, `StaffName`, `Position`, `HotelID`) VALUES
('staff1', 'John Smith', 'Manager', 'Hotel1'),
('staff10', 'Damian Lillard', 'Housekeeping', 'Hotel3'),
('staff11', 'Devin Booker', 'Bellman', 'Hotel3'),
('staff12', 'Joel Embiid', 'Manager', 'Hotel3'),
('staff2', 'Maria Rodriguez', 'Receptionist', 'Hotel2'),
('staff3', 'David Lee', 'Concierge', 'Hotel3'),
('staff4', 'Kevin Durant', 'Concierge', 'Hotel1'),
('staff5', 'Stephen Curry', 'Housekeeping', 'Hotel1'),
('staff6', 'Kawhi Leonard', 'Bellman', 'Hotel1'),
('staff7', 'Giannis Antetokounmpo', 'Manager', 'Hotel2'),
('staff8', 'Anthony Davis', 'Receptionist', 'Hotel2'),
('staff9', 'Luka Doncic', 'Concierge', 'Hotel2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`HotelID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PaymentID`),
  ADD KEY `ReservationID` (`ReservationID`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`ReservationID`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `RoomName` (`RoomName`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`ReviewID`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `HotelID` (`HotelID`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`RoomName`),
  ADD KEY `RoomTypeID` (`RoomTypeID`),
  ADD KEY `HotelID` (`HotelID`);

--
-- Indexes for table `roomtype`
--
ALTER TABLE `roomtype`
  ADD PRIMARY KEY (`RoomTypeID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`StaffID`),
  ADD KEY `HotelID` (`HotelID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`ReservationID`) REFERENCES `reservation` (`ReservationID`);

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `customer` (`UserID`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`RoomName`) REFERENCES `room` (`RoomName`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `customer` (`UserID`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`HotelID`) REFERENCES `hotel` (`HotelID`);

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_2` FOREIGN KEY (`HotelID`) REFERENCES `hotel` (`HotelID`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`HotelID`) REFERENCES `hotel` (`HotelID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
