-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 27 fév. 2021 à 19:15
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `forum`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `ID` bigint(20) NOT NULL,
  `Titre` varchar(100) NOT NULL,
  `Contenu` longtext NOT NULL,
  `Date_Publication` datetime NOT NULL DEFAULT current_timestamp(),
  `ID_auteur` bigint(20) NOT NULL,
  `IsClosed` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`ID`, `Titre`, `Contenu`, `Date_Publication`, `ID_auteur`, `IsClosed`) VALUES
(2, 'VOICI LE PREMIER ARTICLE', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2021-02-19 22:13:03', 1, 0),
(31, 'dfffsetrstsdretertybdy', '&lt;div&gt;fsdfcsdfsdfsdfssdfsdcfdsdf&lt;strong&gt;dfscdfsdcfsd&lt;/strong&gt;&lt;/div&gt;', '2021-02-27 17:19:40', 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `article_categorie`
--

CREATE TABLE `article_categorie` (
  `id_article` bigint(20) NOT NULL,
  `id_categorie` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `article_categorie`
--

INSERT INTO `article_categorie` (`id_article`, `id_categorie`) VALUES
(2, 2),
(31, 1);

-- --------------------------------------------------------

--
-- Structure de la table `article_commentaire`
--

CREATE TABLE `article_commentaire` (
  `ID_article` bigint(20) NOT NULL,
  `ID_commentaire` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `article_commentaire`
--

INSERT INTO `article_commentaire` (`ID_article`, `ID_commentaire`) VALUES
(2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `ban`
--

CREATE TABLE `ban` (
  `ID` bigint(20) NOT NULL,
  `Ban` int(1) NOT NULL,
  `Ban_Vie` int(1) NOT NULL,
  `Date_Ban` datetime NOT NULL DEFAULT current_timestamp(),
  `Durée_Ban` datetime DEFAULT NULL,
  `Raison_Ban` varchar(50) NOT NULL,
  `ID_auteur` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `images` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `nom`, `images`) VALUES
(1, '+18', 'view/images/pegi18.png'),
(2, 'vacances', 'view/images/vacance.jpg'),
(3, 'insolites', ''),
(4, 'gênantes', 'view/images/gene.png');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `ID` bigint(20) NOT NULL,
  `Commentaires` text NOT NULL,
  `Date_Commentaire` timestamp NOT NULL DEFAULT current_timestamp(),
  `ID_auteur` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`ID`, `Commentaires`, `Date_Commentaire`, `ID_auteur`) VALUES
(2, 'COMMENTAIRE 2', '2021-01-28 07:19:05', 37);

-- --------------------------------------------------------

--
-- Structure de la table `logins`
--

CREATE TABLE `logins` (
  `ID` bigint(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` longtext NOT NULL,
  `Prénom` varchar(25) NOT NULL,
  `Nom` varchar(25) NOT NULL,
  `Pseudo` varchar(25) NOT NULL,
  `Age` int(3) NOT NULL,
  `IsAdmin` int(1) NOT NULL,
  `Avatar_Path` varchar(50) NOT NULL DEFAULT 'view/images/user.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `logins`
--

INSERT INTO `logins` (`ID`, `Email`, `Password`, `Prénom`, `Nom`, `Pseudo`, `Age`, `IsAdmin`, `Avatar_Path`) VALUES
(1, 'yanis.houdier@gmail.com', 'f4f263e439cf40925e6a412387a9472a6773c2580212a4fb50d224d3a817de17', 'Yanis', 'Houdier', 'Sinsay', 19, 1, 'view/images/hacker.jpg'),
(37, 'maxime.larnaudie@gmail.com', 'f4f263e439cf40925e6a412387a9472a6773c2580212a4fb50d224d3a817de17', 'Maxime', 'Larnaudie', 'sansheep', 19, 0, 'view/images/user.png'),
(38, 'yanis63fun@hotmail.fr', 'f4f263e439cf40925e6a412387a9472a6773c2580212a4fb50d224d3a817de17', 'lol', 'lol', 'nath', 18, 0, 'view/images/user-female.png'),
(39, 'dedeuchlecho@hotmail.fr', 'f4f263e439cf40925e6a412387a9472a6773c2580212a4fb50d224d3a817de17', 'asqsd', 'qsdqsd', 'LOL', 18, 0, 'view/images/hacker.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_auteur` (`ID_auteur`);

--
-- Index pour la table `article_categorie`
--
ALTER TABLE `article_categorie`
  ADD PRIMARY KEY (`id_article`,`id_categorie`) USING BTREE;

--
-- Index pour la table `article_commentaire`
--
ALTER TABLE `article_commentaire`
  ADD UNIQUE KEY `ID_article` (`ID_article`,`ID_commentaire`);

--
-- Index pour la table `ban`
--
ALTER TABLE `ban`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_auteur` (`ID_auteur`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `ban`
--
ALTER TABLE `ban`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=230;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `logins`
--
ALTER TABLE `logins`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
