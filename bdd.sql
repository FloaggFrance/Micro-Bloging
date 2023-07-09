-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 09 juil. 2023 à 17:26
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `micro_blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `ID` int(11) NOT NULL,
  `uniqid` text NOT NULL,
  `user_id` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date_` datetime NOT NULL,
  `min_` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`ID`, `uniqid`, `user_id`, `title`, `content`, `date_`, `min_`) VALUES
(1, '64aa7814cb5da', '1', 'rgvrv', 'rgvrv', '2023-07-09 11:04:20', 'https://'),
(2, '64aa79b161c5c', '1', 'rvgrgvr', 'febrebervbrffb', '2023-07-09 11:11:13', 'https://img-getpocket.cdn.mozilla.net/404x202/filters:format(jpeg):quality(60):no_upscale():strip_exif()/https%3A%2F%2Fs3.us-east-1.amazonaws.com%2Fpocket-curatedcorpusapi-prod-images%2Fdd0edd49-da19-441f-a87a-168278e8cbec.jpeg'),
(3, '64aa79c92ba55', '1', 'rvgrgvr', 'febrebervbrffb', '2023-07-09 11:11:37', 'https://img-getpocket.cdn.mozilla.net/404x202/filters:format(jpeg):quality(60):no_upscale():strip_exif()/https%3A%2F%2Fs3.us-east-1.amazonaws.com%2Fpocket-curatedcorpusapi-prod-images%2Fdd0edd49-da19-441f-a87a-168278e8cbec.jpeg'),
(4, '64aa79d4c5d42', '1', 'rgvrzgvr', 'frbvzrvb', '2023-07-09 11:11:48', 'https://img-getpocket.cdn.mozilla.net/404x202/filters:format(jpeg):quality(60):no_upscale():strip_exif()/https%3A%2F%2Fs3.us-east-1.amazonaws.com%2Fpocket-curatedcorpusapi-prod-images%2F68ed7d33-3bc7-428f-9bf4-3fd391c2e52e.jpeg'),
(5, '64aa79e1c25da', '1', 'Avec Patrick Dancoisne, effaceur du Tour de France', 'rgvrzgvr', '2023-07-09 11:12:01', 'https://img-getpocket.cdn.mozilla.net/404x202/filters:format(jpeg):quality(60):no_upscale():strip_exif()/https%3A%2F%2Fs3.us-east-1.amazonaws.com%2Fpocket-curatedcorpusapi-prod-images%2F2c38ce44-218d-4bb8-b55e-a22d330ddd39.png');

-- --------------------------------------------------------

--
-- Structure de la table `tags`
--

CREATE TABLE `tags` (
  `ID` int(11) NOT NULL,
  `name` int(200) NOT NULL,
  `url_name` varchar(255) NOT NULL,
  `date_` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `tags`
--

INSERT INTO `tags` (`ID`, `name`, `url_name`, `date_`) VALUES
(1, 0, 'test', '2023-07-09 10:59:29');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `uniqid` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `mail_` text NOT NULL,
  `password` text NOT NULL,
  `date_` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`ID`, `uniqid`, `username`, `mail_`, `password`, `date_`) VALUES
(2, '64aa6d10ac63d', 'hello', 'hello@floagg.org', '$2y$10$ySDDZWCMnvVT8ZIrHMH60OZhv22z6XVHqeHm0kLsq1pZL6FsOdwra', '2023-07-09 10:17:21');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `tags`
--
ALTER TABLE `tags`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
