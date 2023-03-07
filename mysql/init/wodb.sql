-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 07 mars 2023 à 21:31
-- Version du serveur : 8.0.27
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `wo`
--
CREATE DATABASE IF NOT EXISTS `wo` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `wo`;

DROP DATABASE wodb;
-- --------------------------------------------------------

--
-- Structure de la table `acheter`
--

DROP TABLE IF EXISTS `acheter`;
CREATE TABLE IF NOT EXISTS `acheter` (
  `Mail` varchar(50) NOT NULL,
  `idProduit` varchar(50) NOT NULL,
  PRIMARY KEY (`idProduit`,`Mail`),
  KEY `Mail` (`Mail`)
) ENGINE=MyISAM AUTO_INCREMENT=1006 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `idProduit` int NOT NULL AUTO_INCREMENT,
  `libelle` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `Prix` float NOT NULL,
  `Total` int NOT NULL,
  `image` varchar(100) NOT NULL,
  `Etat` int NOT NULL,
  `like` int DEFAULT NULL,
  PRIMARY KEY (`idProduit`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`idProduit`, `libelle`, `description`, `Prix`, `Total`, `image`, `Etat`, `like`) VALUES
(1, 'Ice Wo', 'ice in my veins', 500, 0, 'icewo.png', 0, NULL),
(2, 'Ladie Wo', 'L\'élégance au féminin', 200, 0, 'ladywo.webp', 0, NULL),
(3, 'Moderne Wo', 'Pour rester avec son temps ', 399, 2, 'moedrnewo.webp', 1, 0),
(4, 'Drip Wo', 'Pour nos W\'OG', 999, 0, 'Drip Wo.webp', 0, 0),
(5, 'Vintage Wo', 'L\'époque de nos grands frères', 120, 0, 'vintage Wo.webp', 0, 0),
(6, 'Sport Wo', 'La montre pour garder le rythme', 250, 0, 'sport Wo.webp', 0, 0),
(7, 'Summer Wo', 'Attention au coup de chaud ', 499, 0, 'Summer Wo.webp', 0, 0),
(8, 'Engine Wo', 'Née pour la course ', 250, 0, 'Engine Wo.webp', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int NOT NULL AUTO_INCREMENT,
  `TypeUser` int NOT NULL,
  `Mail` varchar(60) NOT NULL,
  `Mdp` varchar(50) NOT NULL,
  `prenomUser` varchar(50) NOT NULL,
  `NomUser` varchar(50) NOT NULL,
  `adresseUser` varchar(50) NOT NULL,
  `CpVille` varchar(5) NOT NULL,
  `rue` varchar(50) NOT NULL,
  `Valider` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1007 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `TypeUser`, `Mail`, `Mdp`, `prenomUser`, `NomUser`, `adresseUser`, `CpVille`, `rue`, `Valider`) VALUES
(1, 1, 'Admin@wo.com', 'admin', 'Admin', 'a', 'Paris', '75015', 'rue des lilas ', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


