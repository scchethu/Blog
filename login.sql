-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2019 at 07:11 AM
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
('', 54, 1),
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
('Manish Alva', 54, 1),
('Manish Alva', 57, 1),
('scchethu', 46, 1),
('scchethu', 50, 1),
('scchethu', 54, 1),
('scchethu', 55, 1),
('scchethu', 56, 1);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `category` varchar(25) NOT NULL,
  `title` text NOT NULL,
  `body` text NOT NULL,
  `image` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `name`, `category`, `title`, `body`, `image`, `date`) VALUES
(36, 'Alva_Manish', '', 'hello', 'this is a image', 'upload/w2_1562926505.jpg', '2019-07-12 15:45:05'),
(38, 'Manish_Alva', '', 'hello', '                                                            <p>We write code</p>\r\n                \r\n                \r\n                ', 'upload/w5_1563616717.jpg', '2019-07-12 16:10:23'),
(40, 'Alva_Manish', '', 'hello', 'this is a image', 'upload/Abs_206_1563187374.jpg', '2019-07-15 16:12:54'),
(41, 'Alva_Manish', '', 'tittle', 'we write code', 'upload/w1_1563187396.jpg', '2019-07-15 16:13:16'),
(42, 'Alva_Manish', '', 'ghfghfh', 'ksdjhjkabdjkbkajbdjjjjjj', 'upload/w2_1563187417.jpg', '2019-07-15 16:13:37'),
(43, 'Alva_Manish', '', 'tittle', 'this is a image', 'upload/w5_1563187437.jpg', '2019-07-15 16:13:57'),
(44, 'Navin_D', '', 'cgffxcxcv', 'we write code', 'upload/Abs_206_1563187471.jpg', '2019-07-15 16:14:31'),
(45, 'Navin_D', '', 'tittle', 'new image', 'upload/w1_1563187497.jpg', '2019-07-15 16:14:57'),
(46, 'chetu12', '', 'hello', 'we write code', 'upload/w2_1563187514.jpg', '2019-07-15 16:15:14'),
(47, 'chetu12', '', 'hello', 'siugwuigdiusgduigsiudghsiudgisug', 'upload/w5_1563187530.jpg', '2019-07-15 16:15:30'),
(48, 'Alva_Manish', '', 'hello', 'siugwuigdiusgduigsiudghsiudgisug', 'upload/Abs_206_1563187558.jpg', '2019-07-15 16:15:58'),
(50, 'Manish_Alva', '', 'hello', '<p><ul><li>hello</li><li>welcome</li><li>jajd</li></ul></p><p class=\\\"sceditor-nlf\\\"><br></p>', 'upload/Abs_206_1563257592.jpg', '2019-07-16 11:43:12'),
(52, 'Alva_Manish', '', ':angel:', '<p><img src=\\\"emoticons/angel.png\\\" data-sceditor-emoticon=\\\":angel:\\\" alt=\\\":angel:\\\" title=\\\":angel:\\\">hjgfjhfjhf</p>', 'upload/Abs_206_1563258378.jpg', '2019-07-16 11:56:18'),
(53, 'chetu12', '', 'testing', '<p>test</p>', 'upload/Penguins_1563259215.jpg', '2019-07-16 12:10:15'),
(54, 'chethu11', '', ' Hi', '                                                            <p style=\\\"\\\" class=\\\"\\\"></p><p style=\\\"\\\" class=\\\"\\\"><b>Slekin is facebook</b></p><p style=\\\"\\\" class=\\\"\\\"></p><ul><li><b>Hi</b></li><li><b>Helliht5r+ru</b></li><li><b>FaceTime&nbsp;</b></li><li><b>yvgytvytbb</b></li><li><b>iujuihuihu</b></li></ul><p></p><p></p>\r\n                <p class=\\\"sceditor-nlf\\\"><br></p>\r\n                \r\n                \r\n                \r\n                ', 'upload/IMG_20190710_182045_1563260496.jpg', '2019-07-16 12:31:36'),
(55, 'chethu11', '', 'Android Internships ', '<p>Canara college&nbsp;14:48:15</p>', 'upload/IMG_20190717_171128_1563441506.jpg', '2019-07-18 14:48:26'),
(56, 'chethu11', '', 'Custom toast', '                    <p>Hello guys come on&nbsp;</p>\r\n                ', 'upload/IMG_20190718_155622_1563445684.jpg', '2019-07-18 15:57:18'),
(57, 'Manish_Alva', '', ' 60th Anniversary of \\\'The Land Of Crimson Clouds\\\' ', '                                                                                                                        <p>\r\n\r\n</p><!--StartFragment--><p style=\\\"color: rgb(0, 0, 0); font-family: Roboto, arial, sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\\\">Todayâ€™s Doodle celebrates<span>&nbsp;</span><em>The Land of Crimson Clouds</em>, a novel by Russian authors Boris and Arkady Strugatsky, published on this day in 1959. Perhaps the most influential science fiction writers in Russian history, the pair was inspired to collaborate on their first book together through a friendly bet. Arkady wagered his wife Yelena that he and his brother, who studied astronomy in Leningrad, could write a better science fiction novel than those being published in Russia at the time.</p><p style=\\\"color: rgb(0, 0, 0); font-family: Roboto, arial, sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\\\">Censorship guidelines had restricted some of their predecessors, but in the 1950s a â€œthawâ€ was taking place, allowing writers greater freedom of expression. Completed in 1957, the same year as Russiaâ€™s historic Sputnik mission,<span>&nbsp;</span><em>Strana bagrovykh tuch<span>&nbsp;</span></em>(<em>The Land of Crimson Clouds</em>) is the story of a voyage to the planet Venus, set in the late 20th century. Presenting an optimistic view of the future, the Strugatsky brothers foresaw a world where technology and social progress went hand in hand, with photon-drive rockets carrying explorers to Venus in search of uranium to help generate nuclear power.</p><p style=\\\"color: rgb(0, 0, 0); font-family: Roboto, arial, sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\\\">Although they lived hundreds of miles from each other, the Strugatskys went on to collaborate on over 25 novels. Their follow-up,<span>&nbsp;</span><em>Noon: 22nd Century</em>, introduced the â€œNoon Universe,â€ interpreted by some as an allegory for the ideals of the Soviet Union, a world filled with intelligent, hard-working people happily engaged in interesting work.</p><p style=\\\"color: rgb(0, 0, 0); font-family: Roboto, arial, sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\\\">By the late 1960s, the brothers increasingly used their writing to offer subtle critiques of authoritarian government, setting the action in faraway universes. Although some of their later works were censored for political reasons, their family has since made all their work available online as the writers originally intended.</p><!--EndFragment--><p>\r\n\r\n                        </p><p class=\\\"sceditor-nlf\\\"><br></p>\r\n                \r\n                \r\n                \r\n                \r\n                \r\n                ', 'upload/1_1564028967.png', '2019-07-25 09:58:30'),
(58, 'scchethu', '', 'Canara college hacking workshop', '<p>Finally it\\\'s ready to finsish</p>', 'upload/IMG_20190726_103017_1564139029.jpg', '2019-07-26 16:33:49'),
(59, 'Alva_Manish', '', 'hi', '<p>texting catagory</p>', 'upload/w1_1564393416.jpg', '2019-07-29 15:13:36'),
(60, 'Alva_Manish', '6', ' hi ', '                    <p>we write code</p>\r\n                ', 'upload/w2_1564395979.jpg', '2019-07-29 15:52:52'),
(61, 'Alva_Manish', 'Travel', ' hi', '<p>i like travel</p>', 'upload/w5_1564396366.jpg', '2019-07-29 16:02:46');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `uname` varchar(15) NOT NULL,
  `pass` int(15) NOT NULL,
  `phno` varchar(15) NOT NULL,
  `image` varchar(100) NOT NULL,
  `email` varchar(320) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `uname`, `pass`, `phno`, `image`, `email`) VALUES
(9, 'Manish Alva', 'Alva_Manish', 1234, '9844351967', 'profile/IMG20190713141923_1563950490.jpg', 'manishalva20.ma@gmail.com'),
(10, 'scchethu', 'chethu11', 9611825, '9611825370', 'profile/IMG_20190713_105321_1563258881.jpg', 'scchethu@gmail.com'),
(11, 'chetu', 'chetu12', 123456789, '943265614', 'profile/Chrysanthemum_1563259299.jpg', 'chatu@kethu.com'),
(12, 'Navin Kumar D', 'Navin_D', 0, '8722308831', 'profile/_1564462967.', 'navinkd555@gmail.com'),
(14, 'Manish Alva', 'Manish_Alva', 123123, '8971567538', 'profile/w5_1564553686.jpg', 'manish.ma.alva@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `comment` varchar(200) NOT NULL,
  `sender_name` varchar(40) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `post_id`, `comment`, `sender_name`, `date`) VALUES
(51, 58, '<p>hi Hellow</p>', 'Manish Alva', '2019-07-27 07:11:41'),
(52, 58, '<p>bdiubeduibasi</p>', 'Manish Alva', '2019-07-27 08:16:49'),
(53, 58, '<p>bdiubeduibasi</p>', 'Manish Alva', '2019-07-27 08:17:45'),
(54, 58, '<p>Good Afternoon</p>', 'Manish Alva', '2019-07-27 08:26:18'),
(55, 57, '<p>Hi hellow</p>', 'Manish Alva', '2019-07-27 08:33:17'),
(56, 57, '<p>Thhfy\\\"hfhfhjjiuff\\\'\\\"</p>', 'Manish Alva', '2019-07-27 08:36:03'),
(57, 57, '<p>Thhfy\\\"hfhfhjjiuff\\\'\\\"</p>', 'Manish Alva', '2019-07-27 08:36:47'),
(58, 57, '<p>dfdfb</p>', 'Manish Alva', '2019-07-29 08:17:56');

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
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phno` (`phno`),
  ADD UNIQUE KEY `uname` (`uname`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
