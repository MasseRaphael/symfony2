-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  Dim 30 mai 2021 à 16:52
-- Version du serveur :  8.0.18
-- Version de PHP :  7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `statyoutube`
--

-- --------------------------------------------------------

--
-- Structure de la table `author`
--

DROP TABLE IF EXISTS `author`;
CREATE TABLE IF NOT EXISTS `author` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `author`
--

INSERT INTO `author` (`id`, `name`) VALUES
(1, 'Mathieu'),
(2, 'Quentin'),
(3, 'Raphaël');

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20210521135655', '2021-05-21 14:58:22', 37),
('DoctrineMigrations\\Version20210521140432', '2021-05-21 14:58:22', 28),
('DoctrineMigrations\\Version20210521143015', '2021-05-21 14:58:22', 85),
('DoctrineMigrations\\Version20210521143603', '2021-05-21 14:58:22', 76),
('DoctrineMigrations\\Version20210521144301', '2021-05-21 14:58:22', 180),
('DoctrineMigrations\\Version20210530161654', '2021-05-30 16:17:23', 48);

-- --------------------------------------------------------

--
-- Structure de la table `source`
--

DROP TABLE IF EXISTS `source`;
CREATE TABLE IF NOT EXISTS `source` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `source`
--

INSERT INTO `source` (`id`, `name`) VALUES
(1, 'Pages de chaîne'),
(2, 'Autres Fonctionnalités Youtube'),
(3, 'Source Directe ou inconnue'),
(4, 'Recherche Youtube'),
(5, 'Suggestions de vidéos'),
(6, 'Fonctionnalités de navigation'),
(7, 'Externe/inconnue - lecteur intégré/Application externe'),
(8, 'Recherche Google'),
(9, 'Notifications'),
(10, 'Page de Playlist'),
(11, 'Playlist'),
(12, 'Pas de source');

-- --------------------------------------------------------

--
-- Structure de la table `uber_eat`
--

DROP TABLE IF EXISTS `uber_eat`;
CREATE TABLE IF NOT EXISTS `uber_eat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nb_commande` int(11) NOT NULL,
  `nom_prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commande` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `video`
--

DROP TABLE IF EXISTS `video`;
CREATE TABLE IF NOT EXISTS `video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_release` datetime NOT NULL,
  `duration_looking` double NOT NULL,
  `follower_due` int(11) NOT NULL,
  `duration_view_average` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percent_view_average` double NOT NULL,
  `percent_stay_thirty_secondes` int(11) NOT NULL,
  `pike_watching` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percent_who_finish` int(11) NOT NULL,
  `total_view` int(11) NOT NULL,
  `nb_impressions` int(11) NOT NULL,
  `percent_click` double NOT NULL,
  `percent_sorce_1` double NOT NULL,
  `percent_sorce_2` double NOT NULL,
  `percent_sorce_3` double NOT NULL,
  `percent_duration_view_no_follow` double NOT NULL,
  `percent_duration_view_follow` double NOT NULL,
  `author_id` int(11) NOT NULL,
  `sorce_1_id` int(11) NOT NULL,
  `sorce_2_id` int(11) NOT NULL,
  `sorce_3_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_7CC7DA2CF675F31B` (`author_id`),
  KEY `IDX_7CC7DA2C1AE89D18` (`sorce_1_id`),
  KEY `IDX_7CC7DA2C85D32F6` (`sorce_2_id`),
  KEY `IDX_7CC7DA2CB0E15593` (`sorce_3_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `video`
--

INSERT INTO `video` (`id`, `id_video`, `title`, `date_release`, `duration_looking`, `follower_due`, `duration_view_average`, `percent_view_average`, `percent_stay_thirty_secondes`, `pike_watching`, `percent_who_finish`, `total_view`, `nb_impressions`, `percent_click`, `percent_sorce_1`, `percent_sorce_2`, `percent_sorce_3`, `percent_duration_view_no_follow`, `percent_duration_view_follow`, `author_id`, `sorce_1_id`, `sorce_2_id`, `sorce_3_id`) VALUES
(1, 'ze99rt4NiMM', 'Age of empires II : la technique de joueur agressif de K-Wolf76', '2016-01-01 00:00:00', 49.6, 2, '2:53', 17.8, 53, '3:04', 10, 1029, 662, 8.2, 59.3, 25.1, 5.8, 97.5, 2.5, 1, 4, 7, 3),
(2, 'GbFVrW2FX74', 'PIXELMON S2 EP17 : Fin?(vue Quentin)', '2016-02-24 00:00:00', 0.5, 0, '2:44', 7.1, 18, '0', 18, 11, 78, 2.6, 54.6, 27.3, 9.1, 51.9, 48.1, 2, 5, 1, 6);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `FK_7CC7DA2C1AE89D18` FOREIGN KEY (`sorce_1_id`) REFERENCES `source` (`id`),
  ADD CONSTRAINT `FK_7CC7DA2C85D32F6` FOREIGN KEY (`sorce_2_id`) REFERENCES `source` (`id`),
  ADD CONSTRAINT `FK_7CC7DA2CB0E15593` FOREIGN KEY (`sorce_3_id`) REFERENCES `source` (`id`),
  ADD CONSTRAINT `FK_7CC7DA2CF675F31B` FOREIGN KEY (`author_id`) REFERENCES `author` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
