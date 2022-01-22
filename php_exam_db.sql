-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 22 jan. 2022 à 21:40
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `php_exam_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `content` text NOT NULL,
  `date` text NOT NULL,
  `author_id` int(11) NOT NULL,
  `author_username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `description`, `content`, `date`, `author_id`, `author_username`) VALUES
(1, 'aa', 'a', 'a', '19/01/2022', 3, 'a'),
(2, 'aa', 'a', 'a', '19/01/2022', 3, 'a'),
(3, 'TEST123aaaaaaaaaaaaaaaaaaaaa', 'testaaaaaaaaaaaaaaaa', 'testaaaaaaaaaaaa<br />\r\n', '19/01/2022', 1, 'TFLR'),
(4, 'Test', 'Aimez vous ?', 'Qu&#039;en pensez vous du forum ??', '19/01/2022', 3, 'a'),
(5, 'test', 'aaa', 'ddd', '06:17:39 19/01/2022', 3, 'a'),
(6, 'a', 'aaaa', 'aaaa', '18:01:36 19/01/2022', 3, 'a'),
(8, 'Lorem Ipsum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br />\r\n<br />\r\n', 'yes', '19:01:04 19/01/2022', 1, 'TFLR'),
(9, 'Lorem Ipsum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br />\r\n<br />\r\n', 'aaaaaaaaaaaaaaaaaaaa', '19:01:11 19/01/2022', 1, 'TFLR'),
(14, 'Lorem', 'Lorem Ipsum             zds           dqss', 'Lorem Ipsum', '19:01:46 19/01/2022', 3, 'a'),
(16, 'Première partie : Fantine', 'Misérable', 'Le premier livre s&#039;ouvre sur le long portrait de monseigneur Myriel, évêque de Digne, où, malgré son rang, il vit très modestement en compagnie de sa sœur, Baptistine, et d&#039;une servante, Mme Magloire. Ce religieux est un juste qui se contente du strict nécessaire pour distribuer le reste de ses économies aux pauvres. Pénétré de charité chrétienne, il laisse sa porte grande ouverte et fraternise avec ceux que la société rejette, tel le conventionnel G., « coupable » d&#039;avoir voté la mort du roi.', '01:01:51 22/01/2022', 1, 'TFLR'),
(18, 'admin', 'admin', 'admin', '21:01:50 22/01/2022', 8, 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `admin`) VALUES
(1, 'xrxstyyy@outlook.fr', 'TFLR', '0cc175b9c0f1b6a831c399e269772661', 2),
(2, 'z@gmail.com', 'zz@gmail.com', '0cc175b9c0f1b6a831c399e269772661', 1),
(3, 'a@gmail.com', 'theo', '0cc175b9c0f1b6a831c399e269772661', 1),
(4, 'xrxstyyy@gmail.com', 'xrxstyyy@gmail.com', '0cc175b9c0f1b6a831c399e269772661', 1),
(5, 'o@o.com', 'o', '0cc175b9c0f1b6a831c399e269772661', 1),
(6, 'dsqsdsdq@gmail.com', 'adqsd', '0cc175b9c0f1b6a831c399e269772661', 1),
(7, 'aaaaa@a', 'aaaaa@aaaaa', '0cc175b9c0f1b6a831c399e269772661', 1),
(8, 'admin@webmaster.com', 'admin', '0cc175b9c0f1b6a831c399e269772661', 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
