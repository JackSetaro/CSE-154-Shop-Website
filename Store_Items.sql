-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 31, 2023 at 05:09 AM
-- Server version: 8.0.32-0ubuntu0.20.04.2
-- PHP Version: 7.4.3-4ubuntu2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ce154_js22052`
--

-- --------------------------------------------------------

--
-- Table structure for table `Store_Items`
--

CREATE TABLE `Store_Items` (
  `name` varchar(255) NOT NULL,
  `ID` int NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `date_published` varchar(255) NOT NULL,
  `img_URL` varchar(255) NOT NULL,
  `price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Store_Items`
--

INSERT INTO `Store_Items` (`name`, `ID`, `description`, `category`, `date_published`, `img_URL`, `price`) VALUES
('Bad Bunny Mug', 1, 'A sturdy ceramic mug with an image of Bad Bunny', 'Merch', '14/01/2023', 'http://cseemyweb.essex.ac.uk/~js22052/CE154/images/mug.jpg', 15),
('YHLQMDLG Poster', 2, 'A large printed poster of the YHLQMDLG album cover as well as the song titles', 'Merch', '29/02/2020', 'http://cseemyweb.essex.ac.uk/~js22052/CE154/images/poster.jpg', 10),
('UVST Vinyl', 3, 'Vinyl record containing the entire \"Un Verano Sin Ti\" Album', 'Music', '06/05/2022', 'http://cseemyweb.essex.ac.uk/~js22052/CE154/images/vinyl.jpg', 30),
('Bad Bunny Crewneck', 4, 'A beige cotton crewneck featuring the heart character from the \"Un Verano Sin Ti\" Album', 'Clothing', '06/05/2022', 'http://cseemyweb.essex.ac.uk/~js22052/CE154/images/hoodie.jpg', 20),
('UVST Case', 5, 'An iPhone 14 Case with the \"Un Verano Sin Ti\" album art printed on the back.', 'Merch', '06/05/2022', 'http://cseemyweb.essex.ac.uk/~js22052/CE154/images/case.jpg', 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Store_Items`
--
ALTER TABLE `Store_Items`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Store_Items`
--
ALTER TABLE `Store_Items`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
