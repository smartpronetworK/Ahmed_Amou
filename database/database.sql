-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 02, 2018 at 04:22 PM
-- Server version: 10.2.15-MariaDB
-- PHP Version: 7.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u403652127_amou`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `msg` longtext NOT NULL,
  `time` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id_comment`, `id_post`, `id_user`, `msg`, `time`) VALUES
(248, 36, 2, 'djdfks', '22/04/18 01:42:51'),
(249, 37, 2, 'vmfvf', '30/04/18 10:26:23'),
(250, 37, 1, 'design pattern and architecture is wht make the defference form one devoPS to other', '30/04/18 10:34:36'),
(251, 37, 1, 'dmcfmv', '30/04/18 01:30:04'),
(252, 37, 1, 'mkmvfkmvf', '30/04/18 01:30:20'),
(253, 37, 1, 'mmmsmsms', '30/04/18 01:30:37'),
(254, 37, 1, 'mcmcmc', '30/04/18 01:30:48'),
(255, 37, 1, ',m,m,', '30/04/18 01:31:02'),
(256, 37, 1, ',m,', '30/04/18 01:50:27'),
(257, 37, 1, 'mm', '30/04/18 01:55:41'),
(258, 37, 1, '-	Le principe du FailOver est d’utiliser le protocole ICMP afin de « pinguer » une passerelle (le DNS étant l’idéal pour savoir si une connexion Internet fonctionne ou non). Notre passerelle principale est Internet1 (WAN) et la passerelle de secours correspond à Internet2 (OPT1). Si le ping vers la passerelle du WAN ne fonctionne plus, la connexion est alors dirigée vers OPT1. Puis lorsque la -	Le principe du FailOver est d’utiliser le protocole ICMP afin de « pinguer » une passerelle (le DNS étant l’idéal pour savoir si une connexion Internet fonctionne ou non). Notre passerelle principale est Internet1 (WAN) et la passerelle de secours correspond à Internet2 (OPT1). Si le ping vers la passerelle du WAN ne fonctionne plus, la connexion est alors dirigée vers OPT1. Puis lorsque la -	Le principe du FailOver est d’utiliser le protocole ICMP afin de « pinguer » une passerelle (le DNS étant l’idéal pour savoir si une connexion Internet fonctionne ou non). Notre passerelle principale est Internet1 (WAN) et la passerelle de secours correspond à Internet2 (OPT1). Si le ping vers la passerelle du WAN ne fonctionne plus, la connexion est alors dirigée vers OPT1. Puis lorsque la ', '30/04/18 02:18:26'),
(259, 37, 1, 'design pattern and architecture is wht make the defference form one devoPS to other', '30/04/18 02:25:18'),
(260, 38, 2, 'first admin cmnt', '01/05/18 11:44:51'),
(261, 39, 2, 'design pattern and architecture is wht make the defference form one devoPS to other', '02/05/18 06:52:26');

-- --------------------------------------------------------

--
-- Table structure for table `liked_post`
--

CREATE TABLE `liked_post` (
  `id_like` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_post` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `liked_post`
--

INSERT INTO `liked_post` (`id_like`, `id_user`, `id_post`) VALUES
(1, 2, 36),
(2, 2, 37),
(3, 2, 38),
(4, 2, 39);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id_notification` int(11) NOT NULL,
  `id_owner_post` int(11) NOT NULL,
  `id_comment` int(11) NOT NULL,
  `status` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id_notification`, `id_owner_post`, `id_comment`, `status`) VALUES
(1, 2, 250, 'read'),
(2, 2, 251, 'read'),
(3, 2, 252, 'read'),
(4, 2, 253, 'read'),
(5, 2, 254, 'read'),
(6, 2, 255, 'read'),
(7, 2, 256, 'read'),
(8, 2, 257, 'read'),
(9, 2, 258, 'read'),
(10, 2, 259, 'read'),
(12, 3, 261, 'read');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id_post` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `msg` longtext NOT NULL,
  `time` longtext NOT NULL,
  `likes` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id_post`, `id_user`, `msg`, `time`, `likes`) VALUES
(36, 2, 'ddsds', '22/04/18 01:42:38', '1'),
(37, 2, 'slam', '30/04/18 10:03:47', '1'),
(38, 3, 'admin frist post', '01/05/18 05:50:39', '1'),
(39, 3, 'post from phone', '01/05/18 09:59:18', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` longtext NOT NULL,
  `pass` longtext NOT NULL,
  `img` longtext NOT NULL,
  `cv` longtext NOT NULL,
  `role` longtext DEFAULT NULL,
  `tel` longtext NOT NULL,
  `email` longtext NOT NULL,
  `identification_N` longtext NOT NULL,
  `category` longtext NOT NULL,
  `status` longtext NOT NULL,
  `expiration` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `pass`, `img`, `cv`, `role`, `tel`, `email`, `identification_N`, `category`, `status`, `expiration`) VALUES
(1, 'user2', '123', '../../users/img/1/img_avatar.png', '../../users/cv/2/mr-oasis.docx', 'user', '+222 36 40 8642', 'smartpronetworkuser2018@gmail.com\r\n', '', 'student', 'offline', ''),
(2, 'user', '123', '../../users/img/2/avatar6.png', '../../users/cv/2/mr-oasis.docx', 'user', '+222 36 40 8642', 'smartpronetworkuser2018@gmail.com\r\n', '', 'expert', 'offline', ''),
(3, 'admin', '123', '../../Web/images/img_avatar.png', '', 'admin', '', 'smartpronetworkuser2018@gmail.com\r\n', '', 'ADMIN', 'offline', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `id_post` (`id_post`),
  ADD KEY `comment_ibfk_1` (`id_user`);

--
-- Indexes for table `liked_post`
--
ALTER TABLE `liked_post`
  ADD PRIMARY KEY (`id_like`),
  ADD KEY `id_post` (`id_post`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id_notification`),
  ADD KEY `id_owner_post` (`id_owner_post`),
  ADD KEY `id_comment` (`id_comment`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=262;

--
-- AUTO_INCREMENT for table `liked_post`
--
ALTER TABLE `liked_post`
  MODIFY `id_like` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id_notification` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `liked_post`
--
ALTER TABLE `liked_post`
  ADD CONSTRAINT `liked_post_ibfk_1` FOREIGN KEY (`id_post`) REFERENCES `posts` (`id_post`),
  ADD CONSTRAINT `liked_post_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`id_owner_post`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `notification_ibfk_2` FOREIGN KEY (`id_comment`) REFERENCES `comment` (`id_comment`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
