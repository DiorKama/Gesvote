-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 08 sep. 2021 à 02:14
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestionvote`
--

-- --------------------------------------------------------

--
-- Structure de la table `arrondissement`
--

DROP TABLE IF EXISTS `arrondissement`;
CREATE TABLE IF NOT EXISTS `arrondissement` (
  `id_arron` int NOT NULL AUTO_INCREMENT,
  `nom_arron` varchar(30) NOT NULL,
  `id_dep` int NOT NULL,
  PRIMARY KEY (`id_arron`),
  KEY `id_dep` (`id_dep`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `arrondissement`
--

INSERT INTO `arrondissement` (`id_arron`, `nom_arron`, `id_dep`) VALUES
(1, 'Dakar Plateau', 4),
(2, 'Parcelles Assainies', 4),
(3, 'Grand Dakar', 4),
(4, 'Almadies', 4),
(5, 'Guediawaye', 2),
(6, 'Pikine Dagoudane', 1),
(7, 'Niayes', 1),
(8, 'Thiaroye', 1),
(9, 'Rufisque', 3);

-- --------------------------------------------------------

--
-- Structure de la table `bureau`
--

DROP TABLE IF EXISTS `bureau`;
CREATE TABLE IF NOT EXISTS `bureau` (
  `id_bureau` int NOT NULL AUTO_INCREMENT,
  `nom_bureau` varchar(40) NOT NULL,
  `num_bureau` int NOT NULL,
  `id_commune` int NOT NULL,
  PRIMARY KEY (`id_bureau`),
  KEY `id_commune` (`id_commune`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `bureau`
--

INSERT INTO `bureau` (`id_bureau`, `nom_bureau`, `num_bureau`, `id_commune`) VALUES
(1, 'Bureau', 1, 3),
(2, 'Bureau', 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `candidat`
--

DROP TABLE IF EXISTS `candidat`;
CREATE TABLE IF NOT EXISTS `candidat` (
  `id_candidat` int NOT NULL AUTO_INCREMENT,
  `nom_candidat` varchar(40) NOT NULL,
  `nom_partie` varchar(50) NOT NULL,
  PRIMARY KEY (`id_candidat`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `candidat`
--

INSERT INTO `candidat` (`id_candidat`, `nom_candidat`, `nom_partie`) VALUES
(1, 'moussa diouf', 'PA'),
(2, 'baytir Anne', 'APR yakkar'),
(4, 'abdoulaye wade', 'PDS');

-- --------------------------------------------------------

--
-- Structure de la table `commune`
--

DROP TABLE IF EXISTS `commune`;
CREATE TABLE IF NOT EXISTS `commune` (
  `id_commune` int NOT NULL AUTO_INCREMENT,
  `nom_commune` varchar(40) NOT NULL,
  `id_arron` int NOT NULL,
  PRIMARY KEY (`id_commune`),
  KEY `id_arron` (`id_arron`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `commune`
--

INSERT INTO `commune` (`id_commune`, `nom_commune`, `id_arron`) VALUES
(1, 'Goree', 1),
(2, 'Medina', 1),
(3, 'Ngor', 4),
(4, 'Ouakam', 4),
(5, 'Keur Massar', 7),
(6, 'Malika', 7);

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

DROP TABLE IF EXISTS `departement`;
CREATE TABLE IF NOT EXISTS `departement` (
  `id_dep` int NOT NULL AUTO_INCREMENT,
  `nom_dep` varchar(30) NOT NULL,
  `id_region` int NOT NULL,
  PRIMARY KEY (`id_dep`),
  KEY `id_region` (`id_region`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `departement`
--

INSERT INTO `departement` (`id_dep`, `nom_dep`, `id_region`) VALUES
(1, 'Pikine', 1),
(2, 'Guédiawaye', 1),
(3, 'Rufisque', 1),
(4, 'Dakar', 1),
(8, 'Thies', 3),
(9, 'Tivaoune', 3),
(10, 'Mbour', 3);

-- --------------------------------------------------------

--
-- Structure de la table `electeur`
--

DROP TABLE IF EXISTS `electeur`;
CREATE TABLE IF NOT EXISTS `electeur` (
  `id_electeur` int NOT NULL AUTO_INCREMENT,
  `nom_electeur` varchar(40) NOT NULL,
  `prenom_electeur` varchar(40) NOT NULL,
  `cni` double NOT NULL,
  `num_electeur` double NOT NULL,
  `sexe` varchar(30) NOT NULL,
  `date_nais` date NOT NULL,
  `lieu_nais` varchar(30) NOT NULL,
  `adress` varchar(30) NOT NULL,
  `commune` varchar(30) NOT NULL,
  `bureau_vote` varchar(30) NOT NULL,
  `type` varchar(40) NOT NULL DEFAULT 'electeur',
  `status_vote` tinyint(1) NOT NULL DEFAULT '0',
  `login` varchar(20) NOT NULL,
  `mdp` varchar(20) NOT NULL,
  PRIMARY KEY (`id_electeur`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `electeur`
--

INSERT INTO `electeur` (`id_electeur`, `nom_electeur`, `prenom_electeur`, `cni`, `num_electeur`, `sexe`, `date_nais`, `lieu_nais`, `adress`, `commune`, `bureau_vote`, `type`, `status_vote`, `login`, `mdp`) VALUES
(1, 'ndiaye', 'abdou', 12345, 12345, 'masculin', '2021-03-05', 'mback', 'mback', 'mback', 'bureau1', 'electeur', 1, 'ndiaye', 'ndiaye'),
(2, 'diouf', 'moussa', 777241499, 765012440, 'masculin', '2021-04-28', 'bokh', 'grand yoff', 'refane', 'CEM grand yoff', 'admin', 1, 'diouf', 'pass'),
(3, 'kama', 'dior', 88888, 88888, 'feminin', '2021-07-29', 'mbour', 'mbour', 'mbour', 'bureau2', 'electeur', 1, 'dior', 'kama');

-- --------------------------------------------------------

--
-- Structure de la table `region`
--

DROP TABLE IF EXISTS `region`;
CREATE TABLE IF NOT EXISTS `region` (
  `id_region` int NOT NULL AUTO_INCREMENT,
  `nom_region` varchar(30) NOT NULL,
  PRIMARY KEY (`id_region`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `region`
--

INSERT INTO `region` (`id_region`, `nom_region`) VALUES
(1, 'Dakar'),
(3, 'Thies');

-- --------------------------------------------------------

--
-- Structure de la table `vote`
--

DROP TABLE IF EXISTS `vote`;
CREATE TABLE IF NOT EXISTS `vote` (
  `id_vote` int NOT NULL AUTO_INCREMENT,
  `nom_candidat` varchar(100) NOT NULL,
  `id_candidat` int NOT NULL,
  `id_electeur` int NOT NULL,
  PRIMARY KEY (`id_vote`),
  KEY `id_candidat` (`id_candidat`),
  KEY `id_electeur` (`id_electeur`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `vote`
--

INSERT INTO `vote` (`id_vote`, `nom_candidat`, `id_candidat`, `id_electeur`) VALUES
(1, 'baytir Anne', 2, 1),
(2, 'moussa diouf', 1, 2);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `arrondissement`
--
ALTER TABLE `arrondissement`
  ADD CONSTRAINT `arrondissement_ibfk_1` FOREIGN KEY (`id_dep`) REFERENCES `departement` (`id_dep`);

--
-- Contraintes pour la table `bureau`
--
ALTER TABLE `bureau`
  ADD CONSTRAINT `bureau_ibfk_1` FOREIGN KEY (`id_commune`) REFERENCES `commune` (`id_commune`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `commune`
--
ALTER TABLE `commune`
  ADD CONSTRAINT `commune_ibfk_1` FOREIGN KEY (`id_arron`) REFERENCES `arrondissement` (`id_arron`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `departement`
--
ALTER TABLE `departement`
  ADD CONSTRAINT `departement_ibfk_1` FOREIGN KEY (`id_region`) REFERENCES `region` (`id_region`);

--
-- Contraintes pour la table `vote`
--
ALTER TABLE `vote`
  ADD CONSTRAINT `vote_ibfk_1` FOREIGN KEY (`id_candidat`) REFERENCES `candidat` (`id_candidat`),
  ADD CONSTRAINT `vote_ibfk_2` FOREIGN KEY (`id_electeur`) REFERENCES `electeur` (`id_electeur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
