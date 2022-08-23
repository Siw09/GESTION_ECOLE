-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3309
-- Généré le :  mar. 16 août 2022 à 15:14
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gestionscolarite`
--

-- --------------------------------------------------------

--
-- Structure de la table `coefficient`
--

DROP TABLE IF EXISTS `coefficient`;
CREATE TABLE IF NOT EXISTS `coefficient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codefil` varchar(255) CHARACTER SET latin1 NOT NULL,
  `codemat` varchar(255) CHARACTER SET latin1 NOT NULL,
  `coef` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `codefil` (`codefil`),
  KEY `codemat` (`codemat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `composition`
--

DROP TABLE IF EXISTS `composition`;
CREATE TABLE IF NOT EXISTS `composition` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numins` int(11) NOT NULL,
  `datecomp` date NOT NULL,
  `notecomp` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `numins` (`numins`),
  KEY `datecomp` (`datecomp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `echeance`
--

DROP TABLE IF EXISTS `echeance`;
CREATE TABLE IF NOT EXISTS `echeance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numins` int(11) NOT NULL,
  `numech` int(11) NOT NULL,
  `datech` date NOT NULL,
  `montech` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `numins` (`numins`),
  KEY `numech` (`numech`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

DROP TABLE IF EXISTS `etudiants`;
CREATE TABLE IF NOT EXISTS `etudiants` (
  `matricule` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) CHARACTER SET latin1 NOT NULL,
  `prenom` varchar(255) CHARACTER SET latin1 NOT NULL,
  `sexe` varchar(255) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`matricule`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`matricule`, `nom`, `prenom`, `sexe`) VALUES
(1, 'SANOUSSI', 'Wassiou', 'M'),
(2, 'SANOUSSI', 'Elene', 'F'),
(3, 'Adjato', 'Eric', 'M'),
(4, 'MARC', 'Jack', 'M'),
(5, 'JEAN', 'CLOTIDE', 'M'),
(6, 'LOCK', 'Open', 'F'),
(7, 'WINDOWS ', 'JOnh', 'M'),
(8, 'MARC', 'Jack', 'M'),
(9, 'SANOUSSI', 'Elene', 'F'),
(10, 'Adjato', 'Eric', 'M'),
(11, 'JEAN', 'CLOTIDE', 'M'),
(12, 'LOCK', 'Open', 'F'),
(13, 'WINDOWS ', 'JOnh', 'M'),
(14, 'SANOUSSI', 'Elene', 'F'),
(15, 'tot', 'Eric', 'f'),
(16, 'JEAN', 'CLOTIDE', 'f'),
(17, 'LOCK', 'Open', 'f'),
(18, 'WINDOWS ', 'JOnh', 'f'),
(19, 'SANOUSSI', 'Elene', 'f'),
(21, 'JEAN', 'CLOTIDE', 'M'),
(22, 'LOCK', 'Open', 'F'),
(23, 'WINDOWS ', 'JOnh', 'M');

-- --------------------------------------------------------

--
-- Structure de la table `filliere`
--

DROP TABLE IF EXISTS `filliere`;
CREATE TABLE IF NOT EXISTS `filliere` (
  `codefil` varchar(255) CHARACTER SET latin1 NOT NULL,
  `libfil` varchar(255) CHARACTER SET latin1 NOT NULL,
  `cout` int(11) NOT NULL,
  PRIMARY KEY (`codefil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

DROP TABLE IF EXISTS `inscription`;
CREATE TABLE IF NOT EXISTS `inscription` (
  `numins` int(11) NOT NULL AUTO_INCREMENT,
  `dateinscription` date NOT NULL,
  `anne` year(4) NOT NULL,
  `matricule` int(11) NOT NULL,
  `codefil` varchar(255) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`numins`),
  KEY `matricule` (`matricule`),
  KEY `codefil` (`codefil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

DROP TABLE IF EXISTS `matiere`;
CREATE TABLE IF NOT EXISTS `matiere` (
  `codmat` varchar(255) CHARACTER SET latin1 NOT NULL,
  `libmat` varchar(255) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`codmat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `reglement`
--

DROP TABLE IF EXISTS `reglement`;
CREATE TABLE IF NOT EXISTS `reglement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datreg` date NOT NULL,
  `numins` int(11) NOT NULL,
  `numech` int(11) NOT NULL,
  `montreg` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `datreg` (`datreg`),
  KEY `numins` (`numins`),
  KEY `numech` (`numech`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) CHARACTER SET latin1 NOT NULL,
  `prenom` varchar(255) CHARACTER SET latin1 NOT NULL,
  `sexe` varchar(10) CHARACTER SET latin1 NOT NULL,
  `date_naissance` date NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `nom_utilisateur` text CHARACTER SET latin1 NOT NULL,
  `mot_de_passe` text CHARACTER SET latin1 NOT NULL,
  `role` varchar(255) CHARACTER SET latin1 NOT NULL,
  `est_actif` tinyint(1) NOT NULL DEFAULT '0',
  `est_supprimer` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `sexe`, `date_naissance`, `email`, `nom_utilisateur`, `mot_de_passe`, `role`, `est_actif`, `est_supprimer`) VALUES
(1, 'SIW', 'Wass', 'f', '2000-04-02', 'sanoussi', 'siw09', 'jesuikkjokj', 'adm', 0, 0),
(2, 'SIW', 'Wass', 'M', '2000-04-02', 'sanoussi', 'siw09', 'jesuikkjokj', 'adm', 0, 0),
(4, 'SIW', 'Wass', 'M', '2000-04-02', 'sanoussi', 'siw09', 'jesuikkjokj', 'adm', 0, 0),
(5, 'SIW', 'Wass', 'M', '2000-04-02', 'sanoussi@gmail.com', 'siw09', 'jesuikkjokj', 'adm', 0, 0);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `coefficient`
--
ALTER TABLE `coefficient`
  ADD CONSTRAINT `coefficient_filiere_codefil` FOREIGN KEY (`codefil`) REFERENCES `filliere` (`codefil`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `coefficient_matiere_codemat` FOREIGN KEY (`codemat`) REFERENCES `matiere` (`codmat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `composition`
--
ALTER TABLE `composition`
  ADD CONSTRAINT `composition_inscription_numins` FOREIGN KEY (`numins`) REFERENCES `inscription` (`numins`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `echeance`
--
ALTER TABLE `echeance`
  ADD CONSTRAINT `echeance_inscription_numins` FOREIGN KEY (`numins`) REFERENCES `inscription` (`numins`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD CONSTRAINT `inscription_etudiants_matricule` FOREIGN KEY (`matricule`) REFERENCES `etudiants` (`matricule`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inscription_filiere_codefil` FOREIGN KEY (`codefil`) REFERENCES `filliere` (`codefil`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `reglement`
--
ALTER TABLE `reglement`
  ADD CONSTRAINT `reglement_echeance_numech` FOREIGN KEY (`numech`) REFERENCES `echeance` (`numech`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reglement_inscription_numins` FOREIGN KEY (`numins`) REFERENCES `inscription` (`numins`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
