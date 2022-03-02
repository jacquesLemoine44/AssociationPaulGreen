-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 02 mars 2022 à 13:09
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `associationpaulgreen`
--

-- --------------------------------------------------------

--
-- Structure de la table `actions_assos`
--

DROP TABLE IF EXISTS `actions_assos`;
CREATE TABLE IF NOT EXISTS `actions_assos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titleactionsasso` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pictureactionsasso` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `textactionsasso` longtext COLLATE utf8mb4_unicode_ci,
  `linkactionsasso` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `startactionsasso` datetime DEFAULT NULL,
  `endactionsasso` datetime DEFAULT NULL,
  `titlelinkactionsasso` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `actionsassosuser_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_2631A96A9C2D1EA2` (`actionsassosuser_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `actions_assos`
--

INSERT INTO `actions_assos` (`id`, `titleactionsasso`, `pictureactionsasso`, `textactionsasso`, `linkactionsasso`, `startactionsasso`, `endactionsasso`, `titlelinkactionsasso`, `actionsassosuser_id`) VALUES
(1, 'Boite à Insectes', 'applesChamps-770x430-621c8d3a0e78b.jpg', NULL, NULL, '2022-02-01 00:00:00', '2022-02-03 00:00:00', NULL, 4);

-- --------------------------------------------------------

--
-- Structure de la table `actions_assos_themes`
--

DROP TABLE IF EXISTS `actions_assos_themes`;
CREATE TABLE IF NOT EXISTS `actions_assos_themes` (
  `actions_assos_id` int(11) NOT NULL,
  `themes_id` int(11) NOT NULL,
  PRIMARY KEY (`actions_assos_id`,`themes_id`),
  KEY `IDX_E4BCE704D1A8C7A` (`actions_assos_id`),
  KEY `IDX_E4BCE70494F4A9D2` (`themes_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `actions_assos_themes`
--

INSERT INTO `actions_assos_themes` (`actions_assos_id`, `themes_id`) VALUES
(1, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subjet_contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_contact` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_contact` datetime NOT NULL,
  `name_contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `doc_actions_assos`
--

DROP TABLE IF EXISTS `doc_actions_assos`;
CREATE TABLE IF NOT EXISTS `doc_actions_assos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titledocactionsasso` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkdocactionsasso` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `docactasso_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_7530D4D8C55FE119` (`docactasso_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `functions`
--

DROP TABLE IF EXISTS `functions`;
CREATE TABLE IF NOT EXISTS `functions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mission` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_function` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `functions`
--

INSERT INTO `functions` (`id`, `mission`, `description_function`) VALUES
(1, 'Président', 'Dirige l\'association'),
(2, 'Trésorier', 'Trésorier de l\'association.\r\nGère les comptes'),
(3, 'Secrétaire', 'S\'occupe de l\'ensemble du courrier,\r\nDoit être capable de gérer le site');

-- --------------------------------------------------------

--
-- Structure de la table `grouping_partners`
--

DROP TABLE IF EXISTS `grouping_partners`;
CREATE TABLE IF NOT EXISTS `grouping_partners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_grouping_partner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `grouping_partners`
--

INSERT INTO `grouping_partners` (`id`, `title_grouping_partner`) VALUES
(1, 'Partenaires Institutionnels'),
(2, 'Partenaires Privés');

-- --------------------------------------------------------

--
-- Structure de la table `link_actions_assos`
--

DROP TABLE IF EXISTS `link_actions_assos`;
CREATE TABLE IF NOT EXISTS `link_actions_assos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titlelinkactionsasso` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkactionsasso` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkactasso_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_53A9A576DBF20D0C` (`linkactasso_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_new` datetime NOT NULL,
  `title_new` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture_new` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_new` longtext COLLATE utf8mb4_unicode_ci,
  `newsuser_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_1DD39950D2F4F762` (`newsuser_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`id`, `date_new`, `title_new`, `picture_new`, `text_new`, `newsuser_id`) VALUES
(1, '2022-02-10 00:00:00', 'ghegre', 'applesChamps-770x430-6218fd7d1a364.jpg', '<p style=\"text-align:center\"><span style=\"color:#c0392b\"><span style=\"font-size:20px\"><span style=\"font-family:Comic Sans MS,cursive\"><em><strong>gggg</strong></em></span></span></span></p>\r\n\r\n<p>blabla bla</p>\r\n\r\n<p>patit</p>', 4),
(2, '2022-02-16 00:00:00', 'fsgqgrger', 'GE-6-parcours-master-gestion-environnement-621ceac082f68.jpg', '<p>dgfbdfbdqfb</p>', 4);

-- --------------------------------------------------------

--
-- Structure de la table `news_photos`
--

DROP TABLE IF EXISTS `news_photos`;
CREATE TABLE IF NOT EXISTS `news_photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news_photosnews_id` int(11) DEFAULT NULL,
  `photo_new_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_news_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_84DF23AD7B7E5572` (`news_photosnews_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `news_photos`
--

INSERT INTO `news_photos` (`id`, `news_photosnews_id`, `photo_new_photo`, `alt_news_photo`) VALUES
(2, 1, '946324f3f2fcd6f0c1042741183c6336.jpg', NULL),
(4, 1, '718775e299582db28e74472f1d62113f.jpg', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `params`
--

DROP TABLE IF EXISTS `params`;
CREATE TABLE IF NOT EXISTS `params` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text_param` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_param` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_param` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_param` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_param` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address1_param` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address2_param` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp_param` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `town_param` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `update_param` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `params`
--

INSERT INTO `params` (`id`, `text_param`, `logo_param`, `photo_param`, `email_param`, `title_param`, `address1_param`, `address2_param`, `cp_param`, `town_param`, `update_param`) VALUES
(1, '<p>xxx</p>', 'logo-logo-6218aad20cb9f.png', 'applesChamps-770x430-6218a6f11a59c.jpg', 'asso.paul.green@univ-montp3.ft', 'Association Paul Green', 'Rte de Mende', NULL, '34090', 'Montpellier', '2017-01-01 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `partners`
--

DROP TABLE IF EXISTS `partners`;
CREATE TABLE IF NOT EXISTS `partners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `partner_grouping_id` int(11) DEFAULT NULL,
  `name_partner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_partner` longtext COLLATE utf8mb4_unicode_ci,
  `photo_partner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo_partner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_partner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_EFEB516414AD9430` (`partner_grouping_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `partners`
--

INSERT INTO `partners` (`id`, `partner_grouping_id`, `name_partner`, `text_partner`, `photo_partner`, `logo_partner`, `link_partner`) VALUES
(1, 2, 'La Banque Postal', NULL, 'logo-laposte-0601361222766-web-tete-6218da5c71e17.jpg', 'logo-logolaposte-part-6218da5c724c1.svg', NULL),
(2, 1, 'Université de Montpellier', NULL, 'logo-GE-6-parcours-master-gestion-environnement-6218db2c3e361.jpg', 'logo-GE-logo-header-6218db2c3ea9a.svg', 'https://formations.umontpellier.fr/fr/formations/master-XB/master-gestion-de-l-environnement-KKICL68U.html'),
(3, 1, 'Observatoire des Thèses', NULL, NULL, 'logo-Capture-decran-2021-11-03-a-11-39-50-e1635936067554-6218ddd2e79a3.png', 'https://www.observatoiretheses.org/geographie');

-- --------------------------------------------------------

--
-- Structure de la table `photos_actions_assos`
--

DROP TABLE IF EXISTS `photos_actions_assos`;
CREATE TABLE IF NOT EXISTS `photos_actions_assos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photoactasso_id` int(11) DEFAULT NULL,
  `photoactionsasso` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `altphotoactionsasso` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_5C62086334798B59` (`photoactasso_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `photos_actions_assos`
--

INSERT INTO `photos_actions_assos` (`id`, `photoactasso_id`, `photoactionsasso`, `altphotoactionsasso`) VALUES
(1, 1, 'c83c0fec3446774d888eff57d04e7e3c.jpg', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `social_networks`
--

DROP TABLE IF EXISTS `social_networks`;
CREATE TABLE IF NOT EXISTS `social_networks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `params_id` int(11) DEFAULT NULL,
  `social_network` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_socialnetwork` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code_socialnetwork` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_socialnetwork` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_57882007339CCA0F` (`params_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `social_networks`
--

INSERT INTO `social_networks` (`id`, `params_id`, `social_network`, `logo_socialnetwork`, `code_socialnetwork`, `link_socialnetwork`) VALUES
(1, NULL, 'Facebook', '<i class=\"fab fa-facebook\"></i>', 'fab fa-facebook', 'https://www.facebook.com/AFNEGGeo/'),
(2, NULL, 'Twitter', '<i class=\"fab fa-twitter\"></i>', 'fab fa-twitter', 'https://twitter.com/AFNEG'),
(3, NULL, 'Instagram', '<i class=\"fab fa-instagram\"></i>', 'fab fa-instagram', 'https://www.instagram.com/afneg_geo/'),
(4, NULL, 'LinkedIn', '<i class=\"fab fa-linkedin\"></i>', 'fab fa-linkedin', 'https://www.linkedin.com/company/afneg/'),
(5, NULL, 'Youtube', '<i class=\"fab fa-youtube\"></i>', 'fab fa-youtube', 'https://www.youtube.com/user/afneg');

-- --------------------------------------------------------

--
-- Structure de la table `themes`
--

DROP TABLE IF EXISTS `themes`;
CREATE TABLE IF NOT EXISTS `themes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_theme` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_theme` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `themes`
--

INSERT INTO `themes` (`id`, `name_theme`, `description_theme`) VALUES
(1, 'Forêt', NULL),
(2, 'Rivières', NULL),
(3, 'Insectes', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address1_user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2_user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp_user` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `town_user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_user` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `study_user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year_menbership_user` int(11) NOT NULL,
  `newsletters_news_user` tinyint(1) NOT NULL,
  `newsletter_intership_user` tinyint(1) NOT NULL,
  `newsletter_assos_user` tinyint(1) NOT NULL,
  `contactinfo_user` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_1483A5E9E7927C74` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `roles`, `password`, `name_user`, `first_name_user`, `address1_user`, `address2_user`, `cp_user`, `town_user`, `phone_user`, `photo_user`, `study_user`, `year_menbership_user`, `newsletters_news_user`, `newsletter_intership_user`, `newsletter_assos_user`, `contactinfo_user`) VALUES
(1, 'jacques.lemoine44@gmail.com', '[\"ROLE_ADMIN\"]', '$2y$13$J0SuX.xFvuo4lMEXWL95y.LVJ/37KEv1qBFGbpICydxmJ478DbiWO', 'Lemoine', 'Jacques', 'adresse 1', 'xxxxxxxxxxxxxx', '44600', 'ssssssssssss', '1225544dd', 'images-1-621c9f28dd97c.jpg', 'sss', 1990, 1, 1, 1, 1),
(2, '11111@gmail.fr', '[\"ROLE_USER\"]', '123456', 'tiit', 'Justine', '1131111', '11111', '2222', '311', '02', 'images-2-6218a357a2759.jpg', '454', 1980, 0, 0, 0, 0),
(3, '2222222222@ffff.fr', '[\"ROLE_USER\"]', '8888', 'machin', 'Elodie', '1212', '3333', '6666', '33131', '32223323', 'dd429bd538bb996555801baf470c8b24-6218a3622e193.jpg', '1111', 555, 0, 0, 0, 0),
(4, 'toto@gmail.com', '[\"ROLE_USER\"]', '$2y$13$16wFlmPUlGGrQhxgwgIrlu835Q3oVhLz8/W0WY1AA7iBG5z8AdZt.', 'Machin', 'Micheline', 'adresse 1', 'xxxxxxxxxxxxxx', '44600', 'ssssssssssss', 's22ss3s33s3', 'depositphotos-62275193-stock-photo-young-woman-portrait-621ceef17da7f.jpg', 'sss', 1980, 1, 1, 1, 1),
(5, 'titi@gmail.com', '[\"ROLE_USER\"]', '$2y$13$DfiN.ryCdJ5qF2.7cVlP0.xsH9LIiHkNMEE3vFx2lc4tlIV82jrP6', 'essai', 'rezgrgggg', 'adresse 1', 'xxxxxxxxxxxxxx', '44600', 'ssssssssssss', 's22ss3s33s3', 'istockphoto-462535397-612x612-621e322dc0c2f.jpg', '1987', 1987, 1, 1, 1, 1),
(6, 'pierre@gmail.com', '[\"ROLE_USER\"]', '$2y$13$xek0fFhXoO/LlAcjAzNwnulB5PB3fdKaBkiLFQ.6uJ2jV43i3kwo.', 'bidule', 'pierre', 'adresse 1', 'xxxxxxxxxxxxxx', '44600', 'ssssssssssss', 's22ss3s33s3', 'images-621e349a1d1db.jpg', 'sss', 1987, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `users_functions`
--

DROP TABLE IF EXISTS `users_functions`;
CREATE TABLE IF NOT EXISTS `users_functions` (
  `users_id` int(11) NOT NULL,
  `functions_id` int(11) NOT NULL,
  PRIMARY KEY (`users_id`,`functions_id`),
  KEY `IDX_25D157ED67B3B43D` (`users_id`),
  KEY `IDX_25D157ED9011893B` (`functions_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `actions_assos`
--
ALTER TABLE `actions_assos`
  ADD CONSTRAINT `FK_2631A96A9C2D1EA2` FOREIGN KEY (`actionsassosuser_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `actions_assos_themes`
--
ALTER TABLE `actions_assos_themes`
  ADD CONSTRAINT `FK_E4BCE70494F4A9D2` FOREIGN KEY (`themes_id`) REFERENCES `themes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_E4BCE704D1A8C7A` FOREIGN KEY (`actions_assos_id`) REFERENCES `actions_assos` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `doc_actions_assos`
--
ALTER TABLE `doc_actions_assos`
  ADD CONSTRAINT `FK_7530D4D8C55FE119` FOREIGN KEY (`docactasso_id`) REFERENCES `actions_assos` (`id`);

--
-- Contraintes pour la table `link_actions_assos`
--
ALTER TABLE `link_actions_assos`
  ADD CONSTRAINT `FK_53A9A576DBF20D0C` FOREIGN KEY (`linkactasso_id`) REFERENCES `actions_assos` (`id`);

--
-- Contraintes pour la table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `FK_1DD39950D2F4F762` FOREIGN KEY (`newsuser_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `news_photos`
--
ALTER TABLE `news_photos`
  ADD CONSTRAINT `FK_84DF23AD7B7E5572` FOREIGN KEY (`news_photosnews_id`) REFERENCES `news` (`id`);

--
-- Contraintes pour la table `partners`
--
ALTER TABLE `partners`
  ADD CONSTRAINT `FK_EFEB516414AD9430` FOREIGN KEY (`partner_grouping_id`) REFERENCES `grouping_partners` (`id`);

--
-- Contraintes pour la table `photos_actions_assos`
--
ALTER TABLE `photos_actions_assos`
  ADD CONSTRAINT `FK_5C62086334798B59` FOREIGN KEY (`photoactasso_id`) REFERENCES `actions_assos` (`id`);

--
-- Contraintes pour la table `social_networks`
--
ALTER TABLE `social_networks`
  ADD CONSTRAINT `FK_57882007339CCA0F` FOREIGN KEY (`params_id`) REFERENCES `params` (`id`);

--
-- Contraintes pour la table `users_functions`
--
ALTER TABLE `users_functions`
  ADD CONSTRAINT `FK_25D157ED67B3B43D` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_25D157ED9011893B` FOREIGN KEY (`functions_id`) REFERENCES `functions` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
