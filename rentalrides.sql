-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2021 at 01:44 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentalrides`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `quant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `item_id`, `quant`) VALUES
(5, 0, 16, 1),
(6, 0, 29, 1),
(8, 0, 24, 6),
(9, 0, 14, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `username` mediumtext NOT NULL,
  `email` mediumtext NOT NULL,
  `password` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `date`, `username`, `email`, `password`) VALUES
(1, '2021-02-26', 'test user', 'testing@test.com', 'test123');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `vid` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `vname` varchar(50) NOT NULL,
  `vtype` varchar(50) NOT NULL,
  `vrate` int(30) NOT NULL,
  `image` varchar(500) NOT NULL,
  `vdisc` longtext NOT NULL,
  `status` varchar(20) NOT NULL,
  `uid` int(11) NOT NULL,
  `uname` varchar(60) NOT NULL,
  `states` varchar(60) NOT NULL,
  `city` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`vid`, `date`, `vname`, `vtype`, `vrate`, `image`, `vdisc`, `status`, `uid`, `uname`, `states`, `city`) VALUES
(8, '2021-02-26 17:20:35', 'sdsd', 'car', 199, '6038e08bd2dc7-1614340235.jpg', 'The earliest recorded automobiles were actually steam engines attached to wagons in the late 18th century. The steam engines were heavy, making these wagons slow and hard to control. Better and faster steam automobiles became common late in the 19th century. Some automobiles in the early 20th century were powered by electricity.', 'free', 1, 'vikash chaudhary', 'Bihar', 'b'),
(9, '2021-02-26 17:20:49', 'fdghgh', 'car', 466, '6038e09988197-1614340249.jpg', 'fbdfg fdg dfg df', 'free', 1, 'vikash chaudhary', 'Arunachal Pradesh', ' Anjaw '),
(10, '2021-02-26 17:21:03', 'tyhfnf', 'car', 345, '6038e0a79746f-1614340263.jpg', 'fgfgdfg dfgd fg dfg fdgf gdfg fdg fd g', 'free', 1, 'vikash chaudhary', 'Bihar', ' Anjaw '),
(11, '2021-02-26 17:21:21', 'wefvrtvgrere', 'car', 452, '6038e0b92becc-1614340281.jpg', 'fdgdfgdfgdfgfdg dfgdfg', 'free', 1, 'vikash chaudhary', 'Arunachal Pradesh', ' Anjaw '),
(12, '2021-02-26 17:22:13', 'dfdsf d', 'car', 434, '6038e0ed19070-1614340333.jpg', 'fd sfsd fs df sd', 'free', 1, 'vikash chaudhary', 'Arunachal Pradesh', ' Anjaw '),
(13, '2021-02-26 17:22:26', 'fsd fdh gjhgjh k', 'car', 1586, '6038e0fa63738-1614340346.jpg', 'jfhdgsjfdx hshhdhgsfdgsdfgsdf', 'free', 1, 'vikash chaudhary', 'Bihar', ' Anjaw '),
(14, '2021-02-26 17:22:41', 'jnbg', 'car', 876, '6038e109cf655-1614340361.jpg', 'mnbvc xsdzfghf f fd', 'free', 1, 'vikash chaudhary', 'Arunachal Pradesh', ' Anjaw '),
(15, '2021-02-26 17:22:56', 'hjgfds', 'bike', 2579, '6038e1183b669-1614340376.jpg', 'ghjfdvdf hgsdfdgfdgdfgdf', 'free', 1, 'vikash chaudhary', 'Arunachal Pradesh', ' Anjaw '),
(16, '2021-02-26 17:23:06', 'ukiyjuhfgdc', 'bike', 1035, '6038e122ebd39-1614340386.jpg', 'yujtyhtdgfvxvbndtfbx vvsrfs xv ', 'free', 1, 'vikash chaudhary', 'Arunachal Pradesh', ' Anjaw '),
(17, '2021-02-26 17:23:19', 'ghfbsd', 'bike', 782, '6038e12f64e3b-1614340399.jpg', 'jhfngcfs g fg dfgdfg ', 'free', 1, 'vikash chaudhary', 'Arunachal Pradesh', ' Anjaw '),
(18, '2021-02-26 17:23:33', 'xvcbn', 'bike', 164, '6038e13d2dc7f-1614340413.jpg', 'fasdxbvncgj, dfc  db ddfh dfgsd', 'free', 1, 'vikash chaudhary', 'Bihar', ' Anjaw '),
(19, '2021-02-26 17:23:55', ' cfdg d sd', 'bike', 545, '6038e1533fdcc-1614340435.jpg', 'dfs f fdnhg j fdmhfghgdf hdgfh', 'free', 1, 'vikash chaudhary', 'Arunachal Pradesh', ' Anjaw '),
(20, '2021-02-26 17:24:11', 'fdsghf f g', 'cycle', 32, '6038e163ed66c-1614340451.jpg', 'gh hdgszdf gdfx hdfh xfdhdh gh g', 'free', 1, 'vikash chaudhary', 'Arunachal Pradesh', ' Anjaw '),
(21, '2021-02-26 17:24:23', 'dfgs dfghdgf', 'cycle', 432, '6038e16feefae-1614340463.jpg', 'fd gd fgd fghdg hdfg hfdgh', 'free', 2, 'vikash chaudhary', 'Arunachal Pradesh', ' Anjaw '),
(22, '2021-02-26 17:24:39', 'fgh fgdh df', 'cycle', 665, '6038e17f2c1c7-1614340479.jpg', ' hdfg hdth rtj ytjty jtyn', 'free', 1, 'vikash chaudhary', 'Bihar', ' Anjaw '),
(23, '2021-02-26 17:24:53', 'fdf', 'cycle', 233, '6038e18d11836-1614340493.jpg', 'bdfh ghfg hfg hd fg dfg d gd', 'free', 1, 'vikash chaudhary', 'Arunachal Pradesh', ' Anjaw '),
(24, '2021-02-26 17:25:07', 'dsfg', 'car', 451, '6038e19b2d8a2-1614340507.jpg', 'fgdg dfh gfh gf hdg hdfg hfdg hfgd', 'free', 1, 'vikash chaudhary', 'Arunachal Pradesh', ' Anjaw '),
(25, '2021-02-26 17:25:24', 'sdffd', 'cycle', 455, '6038e1acf28d9-1614340524.jpg', 'bvfgd hdgfh dfg hfdg hgdf hdfg ', 'free', 1, 'vikash chaudhary', 'Bihar', ' Anjaw '),
(26, '2021-02-26 17:46:18', 'dadaasasa', 'cycle', 1234, '6038e69275791-1614341778.jpg', 'dsffg f f df hgf hdfghfg', 'free', 1, 'vikash chaudhary', 'Arunachal Pradesh', ' Anjaw '),
(27, '2021-02-26 18:34:54', 'sd sd sd', 'bike', 247, '6038f1f6b3931-1614344694.jpg', 'sfdf df d', 'free', 1, 'vikash chaudhary', 'Arunachal Pradesh', ' Anjaw '),
(28, '2021-02-26 19:01:30', 'qqq', 'car', 178, '6038f832c88ba-1614346290.jpg', 'sadsfdf', 'free', 1, 'vikash chaudhary', 'Arunachal Pradesh', ' Anjaw '),
(29, '2021-02-26 19:03:21', 'sdsd', 'car', 2386, '6038f8a1e3ec5-1614346401.jpg', 'dsds sads ', 'free', 1, 'vikash chaudhary', 'Arunachal Pradesh', ' Anjaw '),
(30, '2021-02-26 19:08:35', 'sas', 'car', 2154, '6038f9db5c5ff-1614346715.jpg', 'asasas', 'free', 1, 'vikash chaudhary', 'Arunachal Pradesh', ' Anjaw '),
(32, '2021-04-24 11:34:21', 'tata', 'car', 50, '6083b4e5cd424-1619244261.jpg', 'qewe we we we we we dsddads ds ds d we we dsddads ds ds d we we dsddads ds ds d we we dsddads ds ds d s sd s s', 'free', 1, 'vikash chaudhary', 'Uttar Pradesh', ' Agra ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`vid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
