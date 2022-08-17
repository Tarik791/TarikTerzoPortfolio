-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 12, 2022 at 10:13 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `education_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `url_address` varchar(60) NOT NULL,
  `title` varchar(60) NOT NULL,
  `post` text NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  `date` datetime NOT NULL,
  `user_url` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `url_address`, `title`, `post`, `image`, `date`, `user_url`) VALUES
(19, 'blog', 'Blog', 'Vijest', 'uploads/t08PV0xBPChl0G5WBFpmqGKeMheVKeWICCpdn5sYe0seHidBAQ1bnV2fGuCO.jpg', '2022-06-06 21:20:20', 'bIkuEllII9zEJNBdcEcaubwLAH9i6ZQTzffq61BZLPtH8QnztScOON0b');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `disabled` tinyint(1) NOT NULL DEFAULT 0,
  `parent` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `disabled`, `parent`) VALUES
(27, 'Projekti', 0, 26);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `message` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `message`, `date`) VALUES
(32, 'Tarii ', 'fawfa', '2022-06-04 17:42:59'),
(33, 'Hello', 'How are you?', '2022-06-04 17:49:36'),
(34, 'Tarik', 'Ovaj website je super', '2022-06-04 17:49:51'),
(35, 'Fawfawf', 'fawfawf', '2022-06-04 17:54:04'),
(37, 'Tarii ', '&lt;script&gt;alert(&quot;hello&quot;)&lt;/script&gt;', '2022-06-05 17:58:16'),
(38, 'Tarik', 'dopada mi se drugi projekat.... fawf', '2022-06-06 21:19:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `firstname`, `subject`, `email`, `message`, `date`) VALUES
(1, 'Tarik', 'faf', 'terzotarik@gmail.com', 'fawfa', '2022-05-20 18:45:44');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `user_url` varchar(255) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `category` int(11) DEFAULT NULL,
  `quantity` varchar(1000) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `example` varchar(2000) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `image2` varchar(500) DEFAULT NULL,
  `image3` varchar(500) DEFAULT NULL,
  `image4` varchar(500) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `slag` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `user_url`, `description`, `category`, `quantity`, `link`, `example`, `image`, `image2`, `image3`, `image4`, `date`, `slag`) VALUES
(38, 'bIkuEllII9zEJNBdcEcaubwLAH9i6ZQTzffq61BZLPtH8QnztScOON0b', 'Quiz', 27, 'This Is Simple Quiz, This Quiz. For More Information Click Learn More', 'Https://github.com/Tarik791/quiz', 'This Quiz Is Created In JavaScript, HTML5 An CSS.', 'uploads/ziba1aKkioRgnoZakeFa6u8RKGWJlCrXGsuOwQWU43WE6Rf9GJghA1rtwK5z.jpg', 'uploads/fWVzTgpSvAxKWV67iV5s1fsMwgDEWvJCWCuFy4EHAXsJbVQnLSkg5Dvi0egx.jpg', 'uploads/XriQsx4iCNMLpbaIhSLjFmkpwM2ori7Q8FClGFLgjKYJs5TriotYc77iLAit.jpg', 'uploads/AwspjefhtbcqhzfGqdZDVia6TUInuT3rZOWJJvkKfmef1om0VTQxJHuxTrxf.jpg', '2022-06-06 20:44:39', 'quiz'),
(39, 'bIkuEllII9zEJNBdcEcaubwLAH9i6ZQTzffq61BZLPtH8QnztScOON0b', 'Password Generator', 27, 'With This, We Can Generate Password.', 'Https://github.com/Tarik791/Password-generator', 'I Was Create Password Generator With JavaScript, HTML5 And CSS. We Can Get Cool Security Password With This Program.', 'uploads/eCCwF1RFSDC0ZmZ9N9237jUtLijYLo84uHGm3t8LYXH3m2Wd68LW9a4BpJAZ.jpg', 'uploads/2NhVErDKPS2TkO9GcBX5d34q51BW56lgvi9ixq7F8y551zlUOClXSYIqLpQS.jpg', 'uploads/mKmw1K5w6hX9lwSa1K1FgghfSs6vsKLZYXBryVFZ6Ek0p3bTizM491A6brsh.jpg', 'uploads/Wqbpky3JI8u27ypRmTqubuaKlGj1j4tTp1lUCc7gHgXNV7GuV3bwWEdfZ27P.jpg', '2022-06-06 20:51:15', 'password-generator'),
(40, 'bIkuEllII9zEJNBdcEcaubwLAH9i6ZQTzffq61BZLPtH8QnztScOON0b', 'Ecommerce Website', 27, 'This Is Ecommerce Web App For Purchase Products. For More Details Click Learn More.', 'Https://github.com/Tarik791/E-commerce-website', 'I Used A Variety Of Technologies, JavaScript, PHP OOP, HTML, CSS, MYSQL, AJAX, JSON, BOOTSTRAP CSS, BOOTSTRAP JS And JQUERY. This Web App Contains Admin Panel, And For More Details Click On LINK', 'uploads/oHqwPATyxOaVY1qnmYtFPwcvlsuOC0IbnMuEX3yIBqQxD7z5hYxsmLaBOIjB.jpg', 'uploads/k6QrsBfuPp7R9ltUzTlJfy5pVFjEcdaKEC0S38MGFBNEfSzYDGei7Bg2kwco.jpg', 'uploads/YpjNGQiheVzAMwJTSeHVYwTn6oeAd3j11y3BLJ4psykql9jwhVJMjbbqzx5E.jpg', 'uploads/DqBZl3vwdYzCvScJtdu6Or56rwdMwFG8wRDrdMl4zbMaMUsISuEVhqNRiGDk.jpg', '2022-06-06 21:00:27', 'ecommerce-website'),
(41, 'bIkuEllII9zEJNBdcEcaubwLAH9i6ZQTzffq61BZLPtH8QnztScOON0b', 'Movies App', 27, 'This Is Simple App For Movies, We Have Simple Option, For More Details Click Learn More', 'Https://github.com/Tarik791/Movies', 'I Was Created This App In JavaScript, HTML And CSS. We Can Choose Movie, Buy, And After Buy We Can Remove Our Movie', 'uploads/72TVWh5HedMFsdEp6vzAjxeKFYJX5Damvs5MDLkrnsJDTegpsA8x7GEN6KmD.jpg', 'uploads/53fVtQ5J3zdXRDQkXL8wCnT8T1PJ8f0GZYcEE0MezfYHgqSysvwrgB74Otyt.jpg', 'uploads/y5SmlWQCoCC56dj8F1VlhAo5SAakSajfRg03NXxlV1URwsixQ94fJzzBn7cv.jpg', 'uploads/DHGvtnzSTPf5QIoKQeoosxz17WQMJUaBOM2Y4bS5RBTUDzUrZv094IRC3KCe.jpg', '2022-06-07 11:51:16', 'movies-app'),
(42, 'bIkuEllII9zEJNBdcEcaubwLAH9i6ZQTzffq61BZLPtH8QnztScOON0b', 'Responsive Menu And Slider', 27, 'This Is Reposnive Menu And Slider In JavaScript, HTML, And CSS', 'Https://github.com/Tarik791/Responsive-menu-and-slider', 'This Is Reposnive Menu And Slider With Some Pictures In JavaScript, HTML, And CSS.', 'uploads/yBnofJyqhXZYE6rsrTdU6bq1sRFFOQxp1uN6fRBqMVY7ppo30TcGhFw7jPjw.jpg', 'uploads/bGv00ZrwQGlpRNCiAmGTfGgfcG7axzIVzAgJ3MZOFVaChgJEoVuW3LuaroVd.jpg', 'uploads/yt60QsYRFHH9QXEJe4E27aNBggWhyqRZnBiIrY2KLstSlePpQmWhw95M3Kgu.jpg', 'uploads/L1vPIOsj0W3qA1eGcO9UX3Ogoiz3dgoq6GlphYWTIJ8bJ9hKNPkIX6FbnhcO.jpg', '2022-06-07 12:01:02', 'responsive-menu-and-slider'),
(43, 'bIkuEllII9zEJNBdcEcaubwLAH9i6ZQTzffq61BZLPtH8QnztScOON0b', 'Color Guessing', 27, 'Color Guessing Game, Created In JavaScript, HTML5 And CSS', 'Https://github.com/Tarik791/Color-guessing', 'Using Only One And Two-word Cues, Players Try To Get Others To Guess A Specific Hue From The 480 Colors On The Game Board. The Closer The Guesses Are To The Target, The More Points You Earn. Since Everyone Imagines Colors Differently, Connecting Colors And Clues Has Never Been This Much Fun!Color Guessing Game, Created In JavaScript, HTML5 And CSS', 'uploads/lPj1GADIB4LIuhS8U19K5Y4LOtEJnZwepN5tehOHBPVAgBak7iTTG3toEOsO.jpg', 'uploads/RxqDbtNP0jgrSctADc01Om91aS3EY2Yr1UVLnMxm9K4P2IKXKl1xnFsq9le4.jpg', 'uploads/0kkeYk4eDZnwK5yyGQnchhi8bcy0taY8t43Xv3PxRubs55pWH38dvdwllqaa.jpg', 'uploads/h7N537qL3v8tWTvSxrmxdZri9yXwmMngK7BGmm1IbHm2qnRVU6wIIVc9jiQC.jpg', '2022-06-07 12:06:20', 'color-guessing'),
(44, 'bIkuEllII9zEJNBdcEcaubwLAH9i6ZQTzffq61BZLPtH8QnztScOON0b', 'Color Flipper', 27, 'Get Your Random Color! For More Details, Click Learn More.', 'Https://github.com/Tarik791/Color-flipper', 'This Is Color Flipper, Created In JavaScript, HTML5 And CSS. With This You Can Get Random Color.', 'uploads/fAGU0SZmc6FypRFr4I3s07auPSJnSz2HLyxT7diwQHGNrqMYoAT2WYS1W1i8.jpg', 'uploads/LUJMtBrB21Q6xHMnXCg7FzKLbncU7BV8srZRmBqMPE40g0QsleTps1s9qiIF.jpg', 'uploads/UuajWBo6R1htyPmzcDYNpIhSCCTxaGPY6ueDaPRgPK3VoUEBceijjTx2gQQk.jpg', 'uploads/H6CDPuV2iOFFswtvkFxnjgRO2bfnPlTKelXuhak5VPt6acjGL19nEnleuBDr.jpg', '2022-06-07 12:13:37', 'color-flipper'),
(45, 'bIkuEllII9zEJNBdcEcaubwLAH9i6ZQTzffq61BZLPtH8QnztScOON0b', 'Counter', 27, 'Click Increase And Random Must Go Up, We Have Funcionality For Reset And Number Can Go Down With Decrease Option', 'Https://github.com/Tarik791/Counter', 'This Is Created In JavaScript, HTML5 And CSS. Click Increase And Random Must Go Up, We Have Funcionality For Reset And Number Can Go Down With Decrease Option', 'uploads/QgmIbz0jubtJis5YDp22NBzwuQMfpjDh1ycKptkMAOIF83rUKavfsULqRcuj.jpg', 'uploads/eA8TkWg1b1sLTqgA8Wzx3irnr8Yt61P7WWL3gTFsHz2809oqXOsjbR14hlo1.jpg', 'uploads/u92ya7tkTK4YNuYpZVwDxhMakVsh6WXWmaHNNzt2P3NV9dEJpt8kY09uX4ua.jpg', 'uploads/GbX5Uy0TJHSKbnXbgsVC8K8q7a9MEbh82ulSzZaAPL584kyIMrJUaQonoM0G.jpg', '2022-06-07 12:26:12', 'counter'),
(46, 'bIkuEllII9zEJNBdcEcaubwLAH9i6ZQTzffq61BZLPtH8QnztScOON0b', 'Clock', 27, 'This Is Clock', 'Https://github.com/Tarik791/Clock', 'Clock It\'s Created In JavaScript, HTML And CSS. It Signifies The Present Time', 'uploads/h2Piy7QvGuXCByqCF0B17EmuaNOg5Wv9SMnzq3G32Ey3uBAp9PyeCn5FPjzV.jpg', 'uploads/8XPiLrDuoNuVVoNJKC53fXShK7rvLwLtXN02v4Wx5tI79Ily2X4Jw4oE0nli.jpg', 'uploads/QIIlKebA1c8lhpFpLhhGUMltvtT8c7njvGqKMr7skN9Zz2fJ2sZf0rtikr0M.jpg', 'uploads/GFQhYpEVpSfZv4iphXVbn0QpkRQCjqKmpVYNd9wmUqSTJz8KG4J3JMfMbMbt.jpg', '2022-06-07 12:34:32', 'clock'),
(47, 'bIkuEllII9zEJNBdcEcaubwLAH9i6ZQTzffq61BZLPtH8QnztScOON0b', 'Login Register And Update Password', 27, 'This Is Simple App With Simple Functionality, Users Can Login, Register And Change Password.', 'Https://github.com/Tarik791/Login-Register-and-Update-password', 'This Is Simple App With PHP OOP, MYSQL, HTML And CSS. This App Contains Database, Validation, Insert, Update And Select.', 'uploads/HNqe7ZJ98avPW0ZPa7csfjfVwJQV09KfpPh4p0jqPoUfyQRM8bN46GS0LpVE.jpg', 'uploads/aTA9H1kCqhqPpfiVpLvtLwCIyLwAXVhdHJRSnlL6pkEmLEQBlyWSdXUHkJ7E.jpg', 'uploads/t1dUhpa1EDFWoAH6kGeA0hxtZVFOmD57yQ41sC6dDubW5Tns1QNJc4NDLF2u.jpg', 'uploads/y12CMPrUt7bjrYOmWBbHRylaNI6ojQ0OgeubSnJ1ARA6649iKorYggfLhRKj.jpg', '2022-06-07 12:54:11', 'login-register-and-update-password'),
(48, 'bIkuEllII9zEJNBdcEcaubwLAH9i6ZQTzffq61BZLPtH8QnztScOON0b', 'Live Chat App', 27, 'This Is Simple App For Conversation, For More Details Click Learn More', 'Https://github.com/Tarik791/LiveChat', 'Some JavaScript Animations, PHP OOP, HTML5, CSS And MYSQL I Used For This Project. User Can Register, Login, Change Information About Self And Write Message To Oder User.', 'uploads/hgxDGhGc3bVjsuD9yvuZXwBhZhDl5dgREF1n0dt6o9ti6pqETUXVDF6OlUAf.jpg', 'uploads/W5irxDwvHxtNNetaZyTo97PLodqoD8Eg7Nt0dboUUCF8G4HSWFDCeNBFadXa.jpg', 'uploads/iNvXMjvOnbhZ9CKAZf4EJ6ux1lbfLMAVJMF2oI0fqGQbFRU8PfQxtUIVfIk2.jpg', 'uploads/lRxstTTiugLcUzX47XQJl3k3Y0L7X9STwYsSI6KVgsBdv7arWUXFBNq7iZhx.jpg', '2022-06-07 13:46:55', 'live-chat-app'),
(49, 'bIkuEllII9zEJNBdcEcaubwLAH9i6ZQTzffq61BZLPtH8QnztScOON0b', 'Gallery', 27, 'This Is Gallery App', 'Https://github.com/Tarik791/gallery12', 'This Is Gallery App, User Can Comment Post, Admin Can  Publish Post, Update, Delete Post. Admin Can See Registered Users, Can Delete Photo And Users.', 'uploads/d6Ccruy5FgJfh9asrVDFM73rwI2KOt2PHcoKm3urh0To6sNWgbbtixoeUsCx.jpg', 'uploads/FZ6lz0g13ks5xuLPae3qUNIzI3XomOpoazlM38p3ZT3oR3dssdJ5pqSOlj2y.jpg', 'uploads/Mw95oso58inJ6M17mGNQzfe3KijQVb7YYVUmO5O4EIZiAv05FeXp7Wcd4rKg.jpg', 'uploads/5TxzJ4O7DFL8xMZnQrL1PLSiF3pO9iVPs5nceY229v81imivxJQLMrcANgFo.jpg', '2022-06-07 14:05:20', 'gallery');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `setting` varchar(30) DEFAULT NULL,
  `value` varchar(2048) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `setting`, `value`) VALUES
(1, 'phone_number', '+387 62 411 664'),
(2, 'email', 'terzotarik@gmail.com'),
(3, 'facebook_link', 'https://www.facebook.com'),
(4, 'twitter_link', 'https://www.twitter.com'),
(5, 'linkedin_link', 'https://www.linkedln.com'),
(6, 'instagram_link', 'https://www.instagram.com'),
(7, 'website_link', 'https://www.mywebsite.com');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `header1_text` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `image2` varchar(500) DEFAULT NULL,
  `disabled` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `header1_text`, `text`, `link`, `image`, `image2`, `disabled`) VALUES
(4, 'Snake Game', 'This is simple snage game, created in JavaScript and HTML5', 'https://github.com/Tarik791/Game', 'uploads/Y6SZg87Ys2Blr3IgyswmENg9xK3L8Bxsi5bcCUsKZ9VtjbYYrbXWvuwJsYTP.jpg', '', 0),
(5, 'Password Generate', 'WITH THIS, WE CAN GENERATE PASSWORD.\r\n\r\nI WAS CREATE PASSWORD GENERATOR WITH JAVASCRIPT, HTML5 AND CSS. WE CAN GET COOL SECURITY PASSWORD WITH THIS PROGRAM.', 'https://github.com/Tarik791/Password-generator', 'uploads/C1IuG62CKg5x3PIC0744TH05pkeEXniW0i6zpvpNmTS8FnsCo9qCXLXWe4js.jpg', '', 0),
(6, 'Quiz', 'THIS IS SIMPLE QUIZ, THIS QUIZ. FOR MORE INFORMATION CLICK LEARN MORE\r\n\r\nTHIS QUIZ IS CREATED IN JAVASCRIPT, HTML5 AN CSS.', 'https://github.com/Tarik791/quiz', 'uploads/G9QjXIWgCYfMbDsn6SFTdu6brpxhFazZIlGQcbLnUrAC0LPIKcsIbnpDGamw.jpg', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `special_skills`
--

CREATE TABLE `special_skills` (
  `id` int(11) NOT NULL,
  `skill` varchar(255) NOT NULL,
  `message` varchar(2000) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `special_skills`
--

INSERT INTO `special_skills` (`id`, `skill`, `message`, `date`) VALUES
(8, 'Communication', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-06-05 17:49:41'),
(9, 'Leadership', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-06-05 17:50:06'),
(11, 'Flexibility', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-06-05 17:50:31'),
(12, 'Fast learning', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.	', '2022-06-07 14:27:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `url_address` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `rank` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `url_address`, `name`, `email`, `password`, `date`, `rank`) VALUES
(1, 'bIkuEllII9zEJNBdcEcaubwLAH9i6ZQTzffq61BZLPtH8QnztScOON0b', 'Tarii', 'terzotarik@gmail.com', '5e89b5b6d24faf92c40e2f4a58b79cd29a3a21fe', '2022-04-20 12:25:17', 'admin'),
(2, 'Cip1lACrbe4mt36JxLmPaI5', 'Tarik', 'terzotariik@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '2022-04-20 14:22:53', 'customer'),
(3, 'EgwJ08cpgrqIBTsCG3pXcS97jbw4Q61uHzlnwkgLM9vOt6BU8hDheuOpvP3', 'kenan', 'keno@gmail.com', '03691f3db94fc24bbc33a685adf7713434530130', '2022-04-21 15:56:42', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `url_address` (`url_address`),
  ADD KEY `title` (`title`),
  ADD KEY `image` (`image`),
  ADD KEY `user_url` (`user_url`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`),
  ADD KEY `disabled` (`disabled`),
  ADD KEY `parent` (`parent`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `message` (`message`(768)),
  ADD KEY `subject` (`subject`),
  ADD KEY `date` (`date`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slag` (`slag`),
  ADD KEY `date` (`date`),
  ADD KEY `category` (`category`),
  ADD KEY `description` (`description`),
  ADD KEY `user_url` (`user_url`),
  ADD KEY `quantity` (`quantity`(768)),
  ADD KEY `example` (`example`(768)),
  ADD KEY `link` (`link`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `setting` (`setting`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`),
  ADD KEY `disabled` (`disabled`);

--
-- Indexes for table `special_skills`
--
ALTER TABLE `special_skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `skill` (`skill`),
  ADD KEY `message` (`message`(768));

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `url_address` (`url_address`),
  ADD KEY `email` (`email`),
  ADD KEY `name` (`name`),
  ADD KEY `date` (`date`),
  ADD KEY `rank` (`rank`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `special_skills`
--
ALTER TABLE `special_skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
