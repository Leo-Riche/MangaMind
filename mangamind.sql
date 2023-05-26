-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 26 mai 2023 à 20:56
-- Version du serveur : 8.0.30
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mangamind`
--

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE `post` (
  `post_id` int NOT NULL,
  `post_author_id` int DEFAULT NULL,
  `post_content` text NOT NULL,
  `post_date` datetime NOT NULL,
  `post_image_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `post_tag` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`post_id`, `post_author_id`, `post_content`, `post_date`, `post_image_url`, `post_tag`) VALUES
(194, 14, 'Enfin immo !', '2023-05-26 10:28:06', 'main character run 6.png', ''),
(196, 15, 'J\'aime les hommes matures\r\n', '2023-05-26 12:05:18', '', ''),
(197, 15, 'blablaablalba', '2023-05-26 12:27:17', '', ''),
(198, 15, 'blablaablalkhigufyhjklba', '2023-05-26 12:27:42', '', ''),
(201, 17, 'toi ta gueule', '2023-05-26 15:22:17', 'Arrière-plan.png', ''),
(219, 2, 'yooo', '2023-05-26 17:15:24', '', ''),
(220, 2, 'yoooooo', '2023-05-26 17:16:12', '', ''),
(221, 2, 'yooo', '2023-05-26 17:39:00', '', 'newgen'),
(222, 2, 'mmm', '2023-05-26 17:39:11', '', 'josei'),
(223, 2, 'test', '2023-05-26 17:48:36', '', 'shonen'),
(224, 2, 'Shojo', '2023-05-26 17:56:09', '', 'shojo'),
(225, 2, 'post alyssua', '2023-05-26 18:06:56', '', 'anime'),
(226, 2, 'j\'aime tout dans la vie', '2023-05-26 18:23:18', 'Louc\'étonné.png', 'news');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `user_id` int NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_nickname` varchar(20) NOT NULL,
  `user_mail` text NOT NULL,
  `user_password` text NOT NULL,
  `user_picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_nickname`, `user_mail`, `user_password`, `user_picture`) VALUES
(1, 'gabygrossebite', 'gabbzz', 'gabite@gmail.com', '6a20d919ef6203f8c0cc75d194674605a4b768f0', 'AAAH'),
(2, 'Leo', 'Leo', 'leo@gmail.com', 'cfaf50ac3721461bd3a2d27ef5f35e144901fbb6', 'LeoBG'),
(3, 'Alyssia', 'aly92izi', 'aly92@gmail.com', 'a9993e364706816aba3e25717850c26c9cd0d89d', 'abc'),
(12, 'michoufortnite', 'michoufortnite', 'michoufortnite@gmail.com', 'b0a2b6a46b51a9835f6b82046771036310eb291e', 'michoufortnite'),
(13, 'Louca', 'louca', 'louca@louca', '838ab1248fea199314b380e01d67f77dcc946f6a', 'louca'),
(14, 'Baptiste', 'Plex', 'plex@gmail.com', '677595897f5481b60036f15f037d5809121fabb4', 'PlexPicture'),
(15, 'Alex', 'ALex', 'alex@gmail.com', '60c6d277a8bd81de7fdde19201bf9c58a3df08f4', 'AlexPic'),
(16, 'Loucaa', 'loucaa', 'loucaa@loucaa', '9895c844be875b2a57f4c910f1e28f632a491457', 'loucaa'),
(17, 'Loucaa', 'loucaa', 'loucaa@loucaa', '9895c844be875b2a57f4c910f1e28f632a491457', 'loucaa');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=227;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
