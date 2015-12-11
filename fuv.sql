-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 11 Décembre 2015 à 09:29
-- Version du serveur :  5.6.26
-- Version de PHP :  5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `fuv`
--

-- --------------------------------------------------------

--
-- Structure de la table `naissances`
--

CREATE TABLE IF NOT EXISTS `naissances` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `height` int(11) NOT NULL,
  `width` int(11) NOT NULL,
  `type` int(1) NOT NULL COMMENT 'portrait ou paysage',
  `price` int(11) NOT NULL,
  `link` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Contenu de la table `naissances`
--

INSERT INTO `naissances` (`id`, `name`, `height`, `width`, `type`, `price`, `link`) VALUES
(1, 'Test', 10, 7, 1, 500, 'TemplateCarteNaissanceA.png'),
(2, 'test1', 10, 7, 0, 500, 'TemplateCarteNaissanceB.png'),
(3, 'test3', 10, 7, 0, 500, 'TemplateCarteNaissanceC.png'),
(4, 'test3', 10, 7, 0, 500, 'TemplateCarteNaissanceC.png'),
(5, 'test3', 10, 7, 0, 500, 'TemplateCarteNaissanceC.png'),
(6, 'test3', 10, 7, 0, 500, 'TemplateCarteNaissanceC.png'),
(7, 'test3', 10, 7, 0, 500, 'TemplateCarteNaissanceC.png'),
(8, 'test3', 10, 7, 0, 500, 'TemplateCarteNaissanceC.png');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`) VALUES
(1, 'admin', 'admin@admin.fr', '$1$wY07UIGl$JAMgCaap1WzxryPD54D3o0', 'Administrateur'),
(2, '', 'eee@ee.ee', '$2y$10$rAIE5faWe6ncCtWoHUm4i.gGKxrsWElIjYrjo0s9WlRXSzE8V/9qe', ''),
(3, 'Dieu', 'i.am.god@valhalla.net', '$2y$10$HFL8l2f01hrp.h5KZV3kt.z4JscOBYZjLV9rQRKk.E548foNCYE9a', 'Membre');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `naissances`
--
ALTER TABLE `naissances`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `naissances`
--
ALTER TABLE `naissances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
