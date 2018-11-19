-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  Dim 04 nov. 2018 à 16:37
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `training`
--

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `picture` varchar(256) NOT NULL DEFAULT '404.jpg',
  `user_id` int(10) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`id`, `text`, `picture`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nulla risus, vehicula id neque vel, maximus fermentum ipsum. In quis nulla imperdiet lectus accumsan pulvinar. In tempus id mi et dictum. Nunc mattis placerat urna eget venenatis. Nunc velit mauris, tincidunt vel consectetur et, luctus dapibus purus.', 'img1.jpg', 1, '2018-11-01 15:15:37', NULL),
(2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nulla risus, vehicula id neque vel, maximus fermentum ipsum. In quis nulla imperdiet lectus ', 'img2.jpg', 2, '2018-11-01 15:15:37', NULL),
(3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nulla risus, vehicula id neque vel, maximus fermentum ipsum. In quis nulla imperdiet lectus accum', 'img3.jpg', 1, '2018-11-01 15:16:26', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;