-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2017 at 10:12 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rapid_dub`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `user_id` int(10) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`user_id`, `user_email`, `user_pass`) VALUES
(1, 'dejan.kremenovic475@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`) VALUES
(1, 'Pesme'),
(2, 'Isecci'),
(3, 'Filmovi'),
(4, 'Serije'),
(5, 'Trenutni projekti');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `video_id` int(128) NOT NULL,
  `date` varchar(128) NOT NULL,
  `name` varchar(256) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `video_id`, `date`, `name`, `comment`) VALUES
(20, 51, '31-10-2017 12:27:32', '3', ' komentar dva sredjen\r\n'),
(25, 53, '31-10-2017 13:02:23', '1', 'asdad uredjen drugi put'),
(31, 53, '31-10-2017 14:04:35', '3', ' komentar dva sredjen drugi\r\n'),
(32, 53, '31-10-2017 14:06:15', '3', ' komentar dva uredjen konacno'),
(33, 49, '31-10-2017 16:32:21', '3', 'Komentar attack uredjen'),
(34, 48, '31-10-2017 17:10:10', '3', 'komentar uredjen'),
(35, 48, '31-10-2017 17:10:27', '3', 'Komentar dva\r\n'),
(36, 48, '31-10-2017 17:10:51', '1', 'Komentar tri prepravljen'),
(38, 48, '06-11-2017 12:51:17', '3', 'komentar cetiri'),
(39, 48, '06-11-2017 12:51:54', '1', 'komentar pet'),
(40, 48, '06-11-2017 12:52:06', '1', 'Komentar sest'),
(41, 48, '06-11-2017 12:53:30', '3', 'komentar sedam'),
(42, 53, '07-11-2017 15:16:14', '3', 'Komentar angel bits');

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` int(11) NOT NULL,
  `date` varchar(127) NOT NULL,
  `author` varchar(256) NOT NULL,
  `quote` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`id`, `date`, `author`, `quote`) VALUES
(4, '', 'Heraklit', 'â€œÄŒovjek postaje najbliÅ¾i sebi kada postigne onakvu ozbiljnost koju ima dijete dok se igra.â€ '),
(5, '', 'Friedrich Nietzsche', '<p>&ldquo;DrÅ¾ava laÅ¾e na svim jezicima dobra i zla; i &scaron;to god govorila, laÅ¾e &ndash; i &scaron;to god imala, ukrala je. Na njoj je sve laÅ¾no; grize ukradenim zubima, ljutica. LaÅ¾na je Äak i njezina nutrina.&rdquo;&nbsp;</p>'),
(6, '', 'Zig Ziglar', '<p>Ljudi Äesto govore da motivacija ne traje. Pa, ne traje ni kupanje &ndash; i to je razlog za&scaron;to preporuÄujemo motivaciju svakodnevno.&rdquo;</p>'),
(7, '', 'dcva', '<p>dvsdvsdvsd</p>'),
(8, '', 'gadsa', '<p>sgasasgasgasgasgasg asf asafs</p>');

-- --------------------------------------------------------

--
-- Table structure for table `users_table`
--

CREATE TABLE `users_table` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_table`
--

INSERT INTO `users_table` (`id`, `name`, `password`) VALUES
(1, 'Dejo', '12345'),
(2, 'dejan291', '12345'),
(3, 'dejan291', 'dejan291'),
(4, 'dejan291asd', 'dejan291'),
(5, 'dejan291hg', 'dejan291'),
(6, 'dejan2911', 'asdf'),
(7, 'dejan291asf a', 'asdas da'),
(8, 'dejan291857', '757'),
(9, 'dejan291dadsaddasdasdsa', 'dejan291asd'),
(10, 'asdaasd', 'asdasd'),
(11, 'dejan29154656', 'dejan291'),
(12, 'dejan291sda dasd', 'dejan291'),
(13, 'dejan291asdasd', 'dejan291'),
(14, 'dejan291dasd', 'dejan291asd'),
(15, 'dejan291jfg hdfgh', 'dejan291'),
(16, 'dejan291sda dsad', 'dejan291');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `video_id` int(11) NOT NULL,
  `video_name` varchar(256) NOT NULL,
  `video_link` text NOT NULL,
  `video_category` varchar(128) NOT NULL,
  `video_image` text NOT NULL,
  `video_description` text NOT NULL,
  `video_keywords` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`video_id`, `video_name`, `video_link`, `video_category`, `video_image`, `video_description`, `video_keywords`) VALUES
(48, 'Naruto Shippuden OP6 - SIGN (SERBIAN)', '<iframe  src=\"https://www.youtube.com/embed/QBWVngtxaOM\" frameborder=\"0\" gesture=\"media\" allowfullscreen></iframe>', '1', 'Capture3.PNG', '<p>MP3: https://www.youtube.com/redirect?v=QBWVngtxaOM&amp;event=video_description&amp;q=http%3A%2F%2Fwww.mediafire.com%2Fdownload%2Fyiobchgrvb0i6o5%2FNS_-_SIGN_%255BSerbian_Cover_by_RapidDub_-_DetektivConan1994%255D.mp3&amp;redir_token=fc_Atr5-yGM2PwQ2WRLEIR59ZF98MTUwOTIwNzY1N0AxNTA5MTIxMjU3</p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"color: #111111; font-family: Roboto, Arial, sans-serif; font-size: 14px; white-space: pre-wrap;\">Pesma: SIGN Prevod: TopazzTiger &amp; MayaDementhia Vokali: DetektivConan1994 Miks: DetektivConan1994 Anime: Naruto Shippuden (NARUTO -ãƒŠãƒ«ãƒˆ- ç–¾é¢¨ä¼ Naruto ShippÅ«den, lit. \"Naruto: Hurricane Chronicles\") Original: FLOW - 2016 -</span></p>', 'Naruto Shippuden SIGN'),
(49, 'Attack on Titan OP1 - Guren No Yumiya (SERBIAN)', '<iframe width=\"854\" height=\"480\" src=\"https://www.youtube.com/embed/NGfX9pxnRjk\" frameborder=\"0\" gesture=\"media\" allowfullscreen></iframe>', '2', 'Capture2.PNG', '<p>ad asd asd asd</p>', 'asd asd '),
(50, 'dsa', 'asd', '5', 'Capture43.PNG', '<p>asd</p>', 'asd a daada a'),
(51, 'projekat y4r3eh3', '', '3', 'Capture543434.PNG', '<p>qrwe</p>', 'ads'),
(52, 'asd', 'asd', '5', 'Capture.PNG', '<p>s</p>', 'sda'),
(53, 'Angel Beats - My Soul, Your Beats! (SERBIAN)', '<iframe width=\"854\" height=\"480\" src=\"https://www.youtube.com/embed/Xu3t1jp34tE?list=UURg0hnMVRacJ3CklvtD7q1Q\" frameborder=\"0\" gesture=\"media\" allowfullscreen></iframe>', '1', 'Capture2.PNG', '<p>Pesma: My Soul, Your Beats!</p>\r\n<p>Prevod: WinxClubFansEurope</p>\r\n<p>Vokali: Jovana</p>\r\n<p>Miks: DetektivConan1994</p>\r\n<p>Original: LiA</p>\r\n<p>Anime: Angel Beats (jap. ã‚¨ãƒ³ã‚¸ã‚§ãƒ«ãƒ“ãƒ¼ãƒ„! Enjeru BÄ«tsu!)</p>\r\n<p>- 2017 -</p>', 'Angel Beats - My Soul, Your Beats'),
(54, 'asd', 'asd', 'Filmovi', '', '<p>das dsa da</p>', 'sadda'),
(56, 'test isjecak', '<iframe width=\"1519\" height=\"549\" src=\"https://www.youtube.com/embed/mbmxn11u19Y\" frameborder=\"0\" gesture=\"media\" allowfullscreen></iframe>', '2', 'Capture1.PNG', '<p>ad ad a asd</p>', 'ads ad'),
(57, 'test serija', '<iframe width=\"854\" height=\"480\" src=\"https://www.youtube.com/embed/NGfX9pxnRjk\" frameborder=\"0\" gesture=\"media\" allowfullscreen></iframe>', '4', 'Capture2.PNG', '<p>adas d</p>', 'ads ad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_table`
--
ALTER TABLE `users_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users_table`
--
ALTER TABLE `users_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
