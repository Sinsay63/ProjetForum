-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 15 jan. 2021 à 01:35
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
  `Date_Publication` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ID_auteur` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`ID`, `Titre`, `Contenu`, `Date_Publication`, `ID_auteur`) VALUES
(1, 'VOICI LE PREMIER ARTICLE', 'VOICE UN EXEMPLE DE DESCRIPTION D\'UN ARTICLE!', '2021-01-14 18:21:59', 2),
(3, 'VOICI LE SECOND ARTICLE', 'CONTENU DU 2EME ARTICLE', '2021-01-14 18:46:29', 1);

-- --------------------------------------------------------

--
-- Structure de la table `logins`
--

CREATE TABLE `logins` (
  `ID` bigint(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Prénom` varchar(25) NOT NULL,
  `Nom` varchar(25) NOT NULL,
  `Pseudo` varchar(25) NOT NULL,
  `Sexe` varchar(3) NOT NULL,
  `Age` int(3) NOT NULL,
  `Perm_Admin` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `logins`
--

INSERT INTO `logins` (`ID`, `Email`, `Password`, `Prénom`, `Nom`, `Pseudo`, `Sexe`, `Age`, `Perm_Admin`) VALUES
(1, 'yanis.houdier@gmail.com', 'motdepasse', 'Yanis', 'Houdier', 'Sinsay', 'M', 19, 2),
(2, 'nathimrichard@gmail.com', 'motdepasse2', 'Nathim', 'Richard', 'NathEtdemi', 'M', 22, 2);

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
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `logins`
--
ALTER TABLE `logins`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
