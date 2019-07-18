-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2019 at 01:02 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `likecount`
--

CREATE TABLE `likecount` (
  `name` varchar(15) NOT NULL,
  `id` int(11) NOT NULL,
  `like` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likecount`
--

INSERT INTO `likecount` (`name`, `id`, `like`) VALUES
('Aaaa', 25, 1),
('Aaaa', 26, 1),
('Aaaa', 36, 1),
('Aaaa', 40, 1),
('Aaaa', 43, 1),
('Aaaa', 45, 1),
('Aaaa', 46, 1),
('Aaaa', 54, 1),
('Alva', 0, 1),
('Alva', 25, 1),
('Alva', 26, 1),
('Alva', 36, 1),
('chetu', 41, 1),
('chetu', 53, 1),
('Manish Alva', 36, 1),
('Manish Alva', 38, 1),
('Manish Alva', 39, 1),
('Manish Alva', 50, 1),
('scchethu', 46, 1),
('scchethu', 50, 1),
('scchethu', 53, 1),
('scchethu', 54, 1),
('scchethu', 55, 1);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `title` varchar(30) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `name`, `title`, `body`, `image`, `date`) VALUES
(36, 'Aaaa', 'hello', 'this is a image', 'upload/w2_1562926505.jpg', '2019-07-12 15:45:05'),
(38, 'Manish Alva', 'hello', '<p>We write code</p>', 'upload/w5_1562928023.jpg', '2019-07-12 16:10:23'),
(40, 'Aaaa', 'hello', 'this is a image', 'upload/Abs_206_1563187374.jpg', '2019-07-15 16:12:54'),
(41, 'Aaaa', 'tittle', 'we write code', 'upload/w1_1563187396.jpg', '2019-07-15 16:13:16'),
(42, 'Aaaa', 'ghfghfh', 'ksdjhjkabdjkbkajbdjjjjjj', 'upload/w2_1563187417.jpg', '2019-07-15 16:13:37'),
(43, 'Aaaa', 'tittle', 'this is a image', 'upload/w5_1563187437.jpg', '2019-07-15 16:13:57'),
(44, 'Aaaa', 'cgffxcxcv', 'we write code', 'upload/Abs_206_1563187471.jpg', '2019-07-15 16:14:31'),
(45, 'Aaaa', 'tittle', 'new image', 'upload/w1_1563187497.jpg', '2019-07-15 16:14:57'),
(46, 'Aaaa', 'hello', 'we write code', 'upload/w2_1563187514.jpg', '2019-07-15 16:15:14'),
(47, 'Aaaa', 'hello', 'siugwuigdiusgduigsiudghsiudgisug', 'upload/w5_1563187530.jpg', '2019-07-15 16:15:30'),
(48, 'Aaaa', 'hello', 'siugwuigdiusgduigsiudghsiudgisug', 'upload/Abs_206_1563187558.jpg', '2019-07-15 16:15:58'),
(50, 'Aaaa', 'hello', '<p><ul><li>hello</li><li>welcome</li><li>jajd</li></ul></p><p class=\\\"sceditor-nlf\\\"><br></p>', 'upload/Abs_206_1563257592.jpg', '2019-07-16 11:43:12'),
(52, 'Aaaa', ':angel:', '<p><img src=\\\"emoticons/angel.png\\\" data-sceditor-emoticon=\\\":angel:\\\" alt=\\\":angel:\\\" title=\\\":angel:\\\">hjgfjhfjhf</p>', 'upload/Abs_206_1563258378.jpg', '2019-07-16 11:56:18'),
(53, 'chetu', 'testing', '<p>test</p>', 'upload/Penguins_1563259215.jpg', '2019-07-16 12:10:15'),
(54, 'scchethu', 'Hi', '                                        <p style=\\\"\\\" class=\\\"\\\"></p><p style=\\\"\\\" class=\\\"\\\"><b>Slekin is facebook</b></p><p style=\\\"\\\" class=\\\"\\\"></p><ul><li><b>Hi</b></li><li><b>Helli</b></li><li><b>FaceTime&nbsp;</b></li><li><b>yvgytvytbb</b></li><li><b>iujuihuihu</b></li></ul><p></p><p></p>\r\n                <p class=\\\"sceditor-nlf\\\"><br></p>\r\n                \r\n                \r\n                ', 'upload/IMG_20190710_182045_1563260496.jpg', '2019-07-16 12:31:36'),
(55, 'scchethu', 'Android Internships ', '<p>Canara college&nbsp;14:48:15</p>', 'upload/IMG_20190717_171128_1563441506.jpg', '2019-07-18 14:48:26'),
(56, 'scchethu', 'Custom toast', '                    <p>Hello guys come on&nbsp;</p>\r\n                ', 'upload/IMG_20190718_155622_1563445684.jpg', '2019-07-18 15:57:18');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `pass` int(15) NOT NULL,
  `phno` varchar(15) NOT NULL,
  `image` varchar(100) NOT NULL,
  `email` varchar(320) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `pass`, `phno`, `image`, `email`) VALUES
(2, 'manish', 626262, '123456789', '', ''),
(3, 'Alva', 121212, '9611825370', 'profile/male_1563252165.png', 'mmmm@gmail.com'),
(4, 'Aaaa', 1234, '6360090436', 'profile/w1_1563261925.jpg', 'manish.ma.alva@gmail.com'),
(5, 'chetha sc', 9611, '2147483647', 'profile/male_1562915355.png', ''),
(9, 'Manish Alva', 1234, '9844351967', 'profile/IMG20190714124655_1563345406.jpg', 'manishalva20.ma@gmail.com'),
(10, 'scchethu', 9611825, '9611825370', 'profile/IMG_20190713_105321_1563258881.jpg', 'scchethu@gmail.com'),
(11, 'chetu', 123456789, '943265614', 'profile/Chrysanthemum_1563259299.jpg', 'chatu@kethu.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `likecount`
--
ALTER TABLE `likecount`
  ADD PRIMARY KEY (`name`,`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
