-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2022 at 03:50 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flights`
--

-- --------------------------------------------------------

--
-- Table structure for table `flight_users`
--

CREATE TABLE `flight_users` (
  `id` int(11) NOT NULL,
  `departure_city` varchar(200) DEFAULT NULL,
  `arrival_city` varchar(200) DEFAULT NULL,
  `departure_date` date NOT NULL,
  `arrival_date` date NOT NULL,
  `number_of_passengers` int(200) DEFAULT NULL,
  `seating_preferences` varchar(200) DEFAULT NULL,
  `type_of_seat` varchar(200) DEFAULT NULL,
  `flightv1` varchar(200) DEFAULT NULL,
  `flightv2` varchar(200) DEFAULT NULL,
  `departure_time` varchar(200) DEFAULT NULL,
  `departure_time_sec` varchar(200) DEFAULT NULL,
  `departure_value_sec` varchar(200) DEFAULT NULL,
  `departure_cost` varchar(200) DEFAULT NULL,
  `firstname` varchar(200) DEFAULT NULL,
  `lastname` varchar(200) DEFAULT NULL,
  `street_address` varchar(200) DEFAULT NULL,
  `city_zip` varchar(200) DEFAULT NULL,
  `passenger_names` varchar(200) DEFAULT NULL,
  `credit_card_number` varchar(200) DEFAULT NULL,
  `credit_card_expr_date` datetime DEFAULT NULL,
  `users_id` int(11) DEFAULT NULL,
  `created_user_id` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flight_users`
--

INSERT INTO `flight_users` (`id`, `departure_city`, `arrival_city`, `departure_date`, `arrival_date`, `number_of_passengers`, `seating_preferences`, `type_of_seat`, `flightv1`, `flightv2`, `departure_time`, `departure_time_sec`, `departure_value_sec`, `departure_cost`, `firstname`, `lastname`, `street_address`, `city_zip`, `passenger_names`, `credit_card_number`, `credit_card_expr_date`, `users_id`, `created_user_id`) VALUES
(1, 'Cebu', 'Bacolod', '2022-11-07', '2022-11-22', 11, 'aisle', 'first', 'Blue Sky Air 781', 'Blue Sky Air 873', '11pm', '11pm', '656', '801', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-11-13 22:21:56'),
(2, 'Cebu', 'Bacolod', '2022-11-15', '2022-11-22', 1, 'window', 'first', 'Blue Sky Air 783', 'Blue Sky Air 870', '11pm', '11pm', '656', '801', 'justine', 'tagluco', 'ef', '22', '21321', '22', '2022-11-17 00:00:00', 1, '2022-11-13 22:23:28'),
(3, 'Cebu', 'Bacolod', '1970-01-01', '1970-01-01', 0, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-11-13 22:31:12'),
(4, 'Cebu', 'Bacolod', '1970-01-01', '1970-01-01', 1, 'aisle', 'business', 'Blue Sky Air 800', 'Blue Sky Air 870', '11pm', '11pm', '656', '801', 'justine', 'taglucio', '22', '7992', 'justine', '123455678999', '2022-12-02 00:00:00', 1, '2022-11-13 22:37:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'jabame', '12345'),
(2, 'manetee', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flight_users`
--
ALTER TABLE `flight_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`users_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `flight_users`
--
ALTER TABLE `flight_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `flight_users`
--
ALTER TABLE `flight_users`
  ADD CONSTRAINT `flight_users_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
