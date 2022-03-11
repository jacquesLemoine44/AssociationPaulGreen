-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 11 mars 2022 à 16:03
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
  `alt_picture_actions_assos` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_2631A96A9C2D1EA2` (`actionsassosuser_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `actions_assos`
--

INSERT INTO `actions_assos` (`id`, `titleactionsasso`, `pictureactionsasso`, `textactionsasso`, `linkactionsasso`, `startactionsasso`, `endactionsasso`, `titlelinkactionsasso`, `actionsassosuser_id`, `alt_picture_actions_assos`) VALUES
(1, 'Boite à Insectes', 'bins2images-4-62207e8e70d5b.jpg', '<h1>Pourquoi vouloir installer un h&ocirc;tel &agrave; insecte ? A quoi cela va-t-il servir ?!?</h1>\r\n\r\n<p>En quantit&eacute;, 80% des insectes ont disparu en 20 ans, construire et installer un h&ocirc;tel &agrave; insecte, c&rsquo;est aujourd&rsquo;hui agir &agrave; son &eacute;chelle pour pr&eacute;server et prot&eacute;ger ces animaux, essentiel pour la biodiversit&eacute;, mais &eacute;galement pour nous m&ecirc;me !</p>\r\n\r\n<p>Pollinisation, pr&eacute;dation d&rsquo;esp&egrave;ces consommatrices des cultures, d&eacute;composition de la mati&egrave;re organique, nourriture pour les oiseaux, etc&hellip; autant de taches r&eacute;alis&eacute;es par les insectes qui logeront dans votre h&ocirc;tel &agrave; insecte. Bien s&ucirc;r, en plus de l&rsquo;h&ocirc;tel, c&rsquo;est tout une r&eacute;flexion qui doit &ecirc;tre r&eacute;aliser dans le jardin : ne pas utiliser de produits toxiques (herbicides, insecticides&hellip;), proposer des plantes nourrici&egrave;res, laisser un espace non tondu, pr&eacute;voir d&rsquo;autres abris (tas de bois, de feuilles mortes, r&eacute;aliser un compost, etc&hellip;).<span style=\"color:#2ecc71\">&nbsp;<strong>Installer un h&ocirc;tel &agrave; insectes sans tenir compte de l&rsquo;&eacute;cosyst&egrave;me local dans son ensemble n&rsquo;aurait aucun sens !</strong></span></p>\r\n\r\n<p>Pour r&eacute;aliser votre h&ocirc;tel, une multitude de plans existent, de toute taille, de formes diff&eacute;rentes, n&rsquo;h&eacute;sitez pas&nbsp; &agrave; laisser parler votre imagination ! Nous vous proposons ici la r&eacute;alisation d&rsquo;un h&ocirc;tel de taille moyenne, facile &agrave; r&eacute;aliser &agrave; partir de planches de 20 cm de large, bien s&ucirc;r non trait&eacute;es ! Pour cela, vous pouvez trouver assez facilement dans les magasins de bricolages des &laquo;&nbsp;planches de coffrage&nbsp;&raquo; non trait&eacute;es. Pour une construction solide, nous vous conseillons une &eacute;paisseur de bois de 25 mm.</p>\r\n\r\n<h2><span style=\"color:#3498db\">La d&eacute;coupe</span></h2>\r\n\r\n<p>Pas de d&eacute;coupe compliqu&eacute;e, il suffit de&nbsp; couper la planche en tron&ccedil;on de diff&eacute;rentes dimensions (il faut environ 8 m de planches) :</p>\r\n\r\n<ul>\r\n	<li>7 planchettes de 60 cm</li>\r\n	<li>4 planchettes de (60-2X&eacute;paisseur), donc pour une planche d&rsquo;&eacute;paisseur 25 mm : 55 cm</li>\r\n	<li>6 planchettes de (60-4X&eacute;paisseur)/3, soit environ 16,5 cm pour une &eacute;paisseur de 25 mm</li>\r\n	<li>1 planchette de 22 cm, perc&eacute;e en son centre d&rsquo;un trou de 12-15 mm</li>\r\n	<li>des clous, ou vis, d&rsquo;une longueur adapt&eacute;e (50-60 mm pour le bois de 25 mm d&rsquo;&eacute;paisseur)</li>\r\n</ul>\r\n\r\n<h2><span style=\"color:#3498db\">Le montage</span></h2>\r\n\r\n<p>Pour cela, suivez le plan ci dessous ! (cliquez sur les images pour le grand format)</p>\r\n\r\n<p><a href=\"http://www.environat.fr/wp-content/uploads/2018/07/mode-emploi-bois-page003.jpg\" rel=\"noopener noreferrer\" target=\"_blank\"><img alt=\"\" src=\"http://www.environat.fr/wp-content/uploads/2018/07/mode-emploi-bois-page003-1024x724.jpg\" style=\"height:321px; width:450px\" /></a><a href=\"http://www.environat.fr/wp-content/uploads/2018/07/mode-emploi-bois-page004-e1530694651941.jpg\" rel=\"noopener noreferrer\" target=\"_blank\"><img alt=\"\" src=\"http://www.environat.fr/wp-content/uploads/2018/07/mode-emploi-bois-page004-e1530694651941-724x1024.jpg\" style=\"height:321px; width:230px\" /></a></p>\r\n\r\n<h2><span style=\"color:#3498db\">Le remplissage</span></h2>\r\n\r\n<p>Pour remplir les &laquo;&nbsp;logements&nbsp;&raquo;, une multitude de mat&eacute;riaux peuvent &ecirc;tre utilis&eacute;s : briques creuses, brindilles, bois creux (sureau, bambou, etc&hellip;), b&ucirc;che de bois perc&eacute;e (avec des trous de 6, 8, 10, 12 mm), tuiles, pot de fleur en terre cuite, etc&hellip; Chaque mat&eacute;riau choisi abritera des insectes diff&eacute;rents, variez les composants !</p>\r\n\r\n<h4>Finition et pose</h4>\r\n\r\n<p><a href=\"http://www.environat.fr/wp-content/uploads/2018/07/install-hotel-%C3%A0-insecte.jpg\" rel=\"noopener noreferrer\" target=\"_blank\"><img alt=\"\" src=\"http://www.environat.fr/wp-content/uploads/2018/07/install-hotel-%C3%A0-insecte-724x1024.jpg\" style=\"height:330px; width:236px\" /></a></p>\r\n\r\n<p>Pour la finition, pas de peinture, elles sont souvent insecticides ! Pour le prot&eacute;ger de la pluie, vous pouvez pr&eacute;voir de poser des tuiles sur le toit, ou un morceau de toile bitumin&eacute;e. Un grillage peut aussi &ecirc;tre n&eacute;cessaire pour maintenir les &eacute;l&eacute;ments et &eacute;viter qu&rsquo;ils soient &laquo;&nbsp;pill&eacute;s&nbsp;&raquo; par les oiseaux pour construire leur nid ! Pour cela, il suffit d&rsquo;un grillage avec des mailles d&rsquo;environ 2-4 cm qui permettront aux insectes de circuler librement et de le fixer en le clouant ou en l&rsquo;agrafant !</p>\r\n\r\n<p>Pour la pose, choisissez une orientation ensoleill&eacute;e (Sud, ou sud-est, sud-ouest), placer 2 briques au sol pour que la planche du dessous ne soit pas au contact de l&rsquo;humidit&eacute; et posez l&rsquo;h&ocirc;tel &agrave; insecte. Pour assurer sa stabilit&eacute;, vous pouvez le fixer &agrave; un mur, ou enfoncer &agrave; l&rsquo;arri&egrave;re des piquets &agrave; solidariser &agrave; l&rsquo;h&ocirc;tel.</p>', 'https://www.jardiner-autrement.fr/construire-hotel-a-insectes/', '2022-02-01 00:00:00', '2022-02-03 00:00:00', 'Voir un autre exemple...', 1, 'Construire et installer un hôtel à insecte'),
(2, 'Boites à Livre', 'bl3images-4-62207dcb0b58f.jpg', '<p>Constrction de boite &agrave; livres</p>', NULL, '2022-03-10 00:00:00', '2022-03-24 00:00:00', 'titre ????', 1, 'Réalisation de boite à livres'),
(3, 'jardin Associatif', 'ja1-telechargement-62207f425765d.jpg', '<p>jardin associatif</p>', NULL, '2022-03-04 00:00:00', '2022-03-25 00:00:00', 'photo principal', 1, 'Entretien du Jardins tous les Vendredis');

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
(1, 2),
(2, 1),
(3, 1);

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
('DoctrineMigrations\\Version20220303091358', '2022-03-03 09:14:21', 307),
('DoctrineMigrations\\Version20220303105013', '2022-03-03 10:50:23', 137),
('DoctrineMigrations\\Version20220303142342', '2022-03-03 14:23:50', 132),
('DoctrineMigrations\\Version20220311132346', '2022-03-11 13:24:09', 297);

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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `doc_actions_assos`
--

INSERT INTO `doc_actions_assos` (`id`, `titledocactionsasso`, `linkdocactionsasso`, `docactasso_id`) VALUES
(1, 'lien 1', 'http', 1),
(2, 'lien 2', 'http2', 1),
(3, 'lien 3', 'http', 1),
(4, 'lien 4', 'http2', 1),
(5, 'lien A', 'http A', 2),
(6, 'lien B', 'http B', 2),
(7, 'LIEN 5', 'HTTP 5', 1),
(8, 'zgzg', 'regag', 1),
(9, 'zgzg', 'regag', 1),
(10, 'aaaaa', 'zzzzz', 1),
(12, 'lien C', 'htttp C', 2),
(13, 'lien D', 'ddddd', 2),
(14, 'BDFBDFBAAAAAAAAAAAAA', 'DFBDFBSSQDVQSD', 3);

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
  `altpicturenew` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_1DD39950D2F4F762` (`newsuser_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`id`, `date_new`, `title_new`, `picture_new`, `text_new`, `newsuser_id`, `altpicturenew`) VALUES
(1, '2022-02-10 00:00:00', '1ere Nouvelle', 'applesChamps-770x430-6218fd7d1a364.jpg', '<p style=\"text-align:center\"><span style=\"color:#c0392b\"><span style=\"font-size:20px\"><span style=\"font-family:Comic Sans MS,cursive\"><em><strong>gggg</strong></em></span></span></span></p>\r\n\r\n<p>blabla bla</p>\r\n\r\n<p>patit</p>', 1, 'alternatif photo 1'),
(2, '2022-02-16 00:00:00', '2eme Nouvelle', 'GE-6-parcours-master-gestion-environnement-621ceac082f68.jpg', '<p><span style=\"color:#c0392b\"><span style=\"font-size:48px\"><strong>dgfbdfbdqfb</strong></span></span></p>', 1, 'Photo Nouvelle 2');

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `news_photos`
--

INSERT INTO `news_photos` (`id`, `news_photosnews_id`, `photo_new_photo`, `alt_news_photo`) VALUES
(2, 1, '946324f3f2fcd6f0c1042741183c6336.jpg', NULL),
(4, 1, '718775e299582db28e74472f1d62113f.jpg', NULL),
(6, 1, 'e5da51c89d49420bc4d7b2d6a43475b8.jpg', 'Jardin de Fleurs'),
(7, 1, '3644919366666479b311826d2cbde259.jpg', 'Jardin de légumes'),
(8, 2, 'f89e2d413aceb8a06337b12964795b3a.jpg', 'Les légumes'),
(9, 2, 'deb0d9b33666684eac3f21790e184ca6.jpg', NULL),
(10, 1, '7861b67772856bff2b91850123219c6d.jpg', NULL),
(11, 1, '9b24b3f4b0b3acdee14b6fefdf7f08a7.jpg', NULL);

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
  `subtitleparam` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `politiqueparams` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `params`
--

INSERT INTO `params` (`id`, `text_param`, `logo_param`, `photo_param`, `email_param`, `title_param`, `address1_param`, `address2_param`, `cp_param`, `town_param`, `update_param`, `subtitleparam`, `politiqueparams`) VALUES
(1, '<h1 style=\"text-align:center\"><span style=\"color:#2ecc71\">L&#39;ASSOCIATION Paul Green</span></h1>\r\n\r\n<p>L&rsquo;association Ga&iuml;a a &eacute;t&eacute; fond&eacute;e il y a pr&egrave;s de 20 ans par des &eacute;tudiants du Master Gestion de l&rsquo;Environnement et du D&eacute;veloppement Durable (GEDD).</p>\r\n\r\n<p>Port&eacute;e aujourd&rsquo;hui par des &eacute;tudiants actuels et dipl&ocirc;m&eacute;s du Master GEDD, l&rsquo;Association a pour <span style=\"color:#3498db\">mission de&nbsp;d&eacute;velopper et animer le r&eacute;seau d&rsquo;alumni</span>&nbsp;du Master et de contribuer ensemble &agrave;&nbsp;des actions en faveur de l&#39;environnement et du d&eacute;veloppement durable.</p>\r\n\r\n<p>Ga&iuml;a a pour ambition de faire rayonner ses actions et ses valeurs aupr&egrave;s d&rsquo;un public plus large que le r&eacute;seau des alumnis GEDD afin de sensibiliser le plus <span style=\"color:#3498db\">grand nombre aux enjeux environnementaux</span>.</p>\r\n\r\n<h2><span style=\"color:#2ecc71\">Nos missions et projets phares :</span></h2>\r\n\r\n<h3 style=\"margin-left:80px\"><span style=\"color:#3498db\">Gestion du r&eacute;seau alumni</span></h3>\r\n\r\n<p>Par ses 30 ann&eacute;es d&rsquo;existence, le Master GEDD a permis de former pr&egrave;s de 700 professionnels sur les th&eacute;matiques vari&eacute;es du d&eacute;veloppement durable&nbsp;: de la gestion de l&rsquo;eau &agrave; la gestion des d&eacute;chets en passant par la gestion de ressources naturelles sans oublier les aspects QHSE. Cet historique fait la force du r&eacute;seau alumni actuel et c&rsquo;est ce que l&rsquo;association GAIA souhaite valoriser.</p>\r\n\r\n<p>Pour cela, plusieurs projets&nbsp;:</p>\r\n\r\n<ul>\r\n	<li>Mise en place et animation d&rsquo;une plateforme d&rsquo;&eacute;changes pour les &eacute;tudiants actuels et dipl&ocirc;m&eacute;s du Master GEDD.</li>\r\n	<li>Organisation d&#39;&eacute;v&eacute;nements types caf&eacute;s-d&eacute;bats</li>\r\n</ul>\r\n\r\n<h3 style=\"margin-left:80px\"><span style=\"color:#3498db\">Sensibilisation et implication dans les projets de d&eacute;veloppement durable</span></h3>\r\n\r\n<h4>Les profils vari&eacute;s des &eacute;tudiants venant de cursus diff&eacute;rents leur conf&egrave;rent des connaissances transverses, par exemple en am&eacute;nagement du territoire, en concertation, en &eacute;nergies renouvelables ou bien en &eacute;cologie.</h4>\r\n\r\n<p>L&rsquo;Association souhaite valoriser ces comp&eacute;tences compl&eacute;mentaires en participant &agrave; des &eacute;v&egrave;nements de sensibilisation ouverts au grand public.</p>\r\n\r\n<p>En 2021, l&rsquo;Association a accompagn&eacute; l&rsquo;organisation du &laquo;&nbsp;One&amp;1 trail&nbsp;&raquo; pour concilier activit&eacute; sportive et sensibilisation / protection de l&rsquo;environnement. Pour cela, un groupe d&rsquo;&eacute;tudiants a fourni une liste d&rsquo;actions que l&rsquo;&eacute;v&egrave;nement peut mettre en place&nbsp;: covoiturage, compost, tri, gestion des plastiques (bouteilles, gourdes), couverts, un goodies remplac&eacute; par la plantation d&rsquo;arbre &hellip; L&rsquo;association a &eacute;galement tenu un stand de sensibilisation lors des 2 jours de trail.</p>\r\n\r\n<p>En 2021, GAIA a &eacute;galement r&eacute;pondu &agrave;&nbsp;l&rsquo;appel &agrave; projet &ldquo;z&eacute;ro d&eacute;chets plastique&rdquo; lanc&eacute; par la M&eacute;tropole.</p>\r\n\r\n<p>Ga&iuml;a a r&eacute;pondu&nbsp; &agrave; l&rsquo;appel &agrave; projet &ldquo;z&eacute;ro d&eacute;chets plastiques&rdquo; de 2021, pour proposer aux vall&eacute;es de la V&eacute;subie (d&eacute;vast&eacute;es par la temp&ecirc;te Alex) une aide quant au ramassage des d&eacute;chets plastiques sur les berges. Ga&iuml;a souhaite organiser 2 grandes campagnes de ramassage des d&eacute;chets plastiques, et profiter de ce projet pour sensibiliser les plus jeunes &agrave; ce sujet. Ce projet propos&eacute; par Ga&iuml;a, permet aux &eacute;tudiants de s&rsquo;impliquer dans un sujet d&rsquo;actualit&eacute; ainsi que d&rsquo;&eacute;laborer des documents techniques aupr&egrave;s de professionnels du secteur, ce qui rajoute une r&eacute;elle valeur ajout&eacute;e dans leur parcours.</p>\r\n\r\n<h3 style=\"margin-left:80px\"><span style=\"color:#3498db\">Animation de la vie &eacute;tudiante&nbsp;</span></h3>\r\n\r\n<p>L&rsquo;animation d&rsquo;un r&eacute;seau alumni commence avant tout par l&rsquo;int&eacute;gration des nouvelles promotions. L&rsquo;Association poss&egrave;de dans ses missions l&rsquo;organisation des &eacute;v&egrave;nements conviviaux&nbsp;: Gala, week-end d&rsquo;int&eacute;gration, autre type de week-end, cr&eacute;ation de pull pour les promotions en cours.</p>', 'logo-logo-6218aad20cb9f.png', 'applesChamps-770x430-6218a6f11a59c.jpg', 'asso.paul.green@univ-montp3.ft', 'Association Paul Green', 'Rte de Mende', NULL, '34090', 'Montpellier', '2017-01-01 00:00:00', 'Pour vous mettre au vert !', '<h2 style=\"text-align:center\">Informations l&eacute;gales</h2>\r\n\r\n<h3 style=\"text-align:center\">1. Pr&eacute;sentation du site.</h3>\r\n\r\n<p style=\"text-align:center\">En vertu de l&#39;article 6 de la loi n&deg; 2004-575 du 21 juin 2004 pour la confiance dans l&#39;&eacute;conomie num&eacute;rique, il est pr&eacute;cis&eacute; aux utilisateurs du site&nbsp;<a href=\"http://www.theatre-la-comedie-pontchatelaine.fr/\">www.AssociationPaulGreen.fr</a>&nbsp;l&#39;identit&eacute; des diff&eacute;rents intervenants dans le cadre de sa r&eacute;alisation et de son suivi :</p>\r\n\r\n<p style=\"text-align:center\"><strong>Propri&eacute;taire</strong>&nbsp;: Association Paul Green &ndash; Association loi 1901 &ndash; MONTPELLIER<br />\r\n<strong>Cr&eacute;ateur</strong>&nbsp;:&nbsp;<a href=\"https://theatre-la-comedie-pontchatelaine.fr/www.theatre-la-comedie-pontchatelaine.fr\">Association Paule Green</a><br />\r\n<strong>Responsable publication</strong>&nbsp;: Association Paul Green &ndash; xxxxxxxxxxx@xxxxx.fr<br />\r\nLe responsable publication est une personne physique ou une personne morale.<br />\r\n<strong>Webmaster</strong>&nbsp;: Jacques Lemoine &ndash; xxxxxx@xxxx.fr<br />\r\n<strong>H&eacute;bergeur</strong>&nbsp;: xxxxxxxxxxxxxxxxxx- France<br />\r\nCr&eacute;dits :<br />\r\nLe mod&egrave;le de mentions l&eacute;gales est offert par Subdelirium.com&nbsp;<a href=\"https://www.subdelirium.com/generateur-de-mentions-legales/\" target=\"_blank\">G&eacute;n&eacute;rateur de mentions l&eacute;gales</a></p>\r\n\r\n<h3 style=\"text-align:center\">2. Conditions g&eacute;n&eacute;rales d&rsquo;utilisation du site et des services propos&eacute;s.</h3>\r\n\r\n<p style=\"text-align:center\">L&rsquo;utilisation du site&nbsp;<a href=\"http://www.theatre-la-comedie-pontchatelaine.fr/\">www.AssociationPaulGreen.fr</a>&nbsp;implique l&rsquo;acceptation pleine et enti&egrave;re des conditions g&eacute;n&eacute;rales d&rsquo;utilisation ci-apr&egrave;s d&eacute;crites. Ces conditions d&rsquo;utilisation sont susceptibles d&rsquo;&ecirc;tre modifi&eacute;es ou compl&eacute;t&eacute;es &agrave; tout moment, les utilisateurs du site&nbsp;<a href=\"http://www.theatre-la-comedie-pontchatelaine.fr/\">www.AssociationPaulGreen.fr</a>&nbsp;sont donc invit&eacute;s &agrave; les consulter de mani&egrave;re r&eacute;guli&egrave;re.</p>\r\n\r\n<p style=\"text-align:center\">Ce site est normalement accessible &agrave; tout moment aux utilisateurs. Une interruption pour raison de maintenance technique peut &ecirc;tre toutefois d&eacute;cid&eacute;e par La com&eacute;die Pontchatelaine, qui s&rsquo;efforcera alors de communiquer pr&eacute;alablement aux utilisateurs les dates et heures de l&rsquo;intervention.</p>\r\n\r\n<p style=\"text-align:center\">Le site&nbsp;<a href=\"http://www.theatre-la-comedie-pontchatelaine.fr/\">www.AssociationPaulGreen.fr</a>&nbsp;est mis &agrave; jour r&eacute;guli&egrave;rement par La com&eacute;die Pontchaetelaine. De la m&ecirc;me fa&ccedil;on, les mentions l&eacute;gales peuvent &ecirc;tre modifi&eacute;es &agrave; tout moment : elles s&rsquo;imposent n&eacute;anmoins &agrave; l&rsquo;utilisateur qui est invit&eacute; &agrave; s&rsquo;y r&eacute;f&eacute;rer le plus souvent possible afin d&rsquo;en prendre connaissance.</p>\r\n\r\n<h3 style=\"text-align:center\">3. Description des services fournis.</h3>\r\n\r\n<p style=\"text-align:center\">Le site&nbsp;<a href=\"http://www.theatre-la-comedie-pontchatelaine.fr/\">www.AssociationPaulGreen.fr</a>&nbsp;a pour objet de fournir une information concernant l&rsquo;ensemble des activit&eacute;s de la soci&eacute;t&eacute;.</p>\r\n\r\n<p style=\"text-align:center\">L&#39;Association Paul Green s&rsquo;efforce de fournir sur le site&nbsp;<a href=\"http://www.theatre-la-comedie-pontchatelaine.fr/\">www.AssociationPaulGreen.fr</a>&nbsp;des informations aussi pr&eacute;cises que possible. Toutefois, il ne pourra &ecirc;tre tenue responsable des omissions, des inexactitudes et des carences dans la mise &agrave; jour, qu&rsquo;elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations.</p>\r\n\r\n<p style=\"text-align:center\">Tous les informations indiqu&eacute;es sur le site&nbsp;<a href=\"http://www.theatre-la-comedie-pontchatelaine.fr/\">www.AssociationPaulGreen.fr</a>&nbsp;sont donn&eacute;es &agrave; titre indicatif, et sont susceptibles d&rsquo;&eacute;voluer. Par ailleurs, les renseignements figurant sur le site&nbsp;<a href=\"http://www.theatre-la-comedie-pontchatelaine.fr/\">www.AssociationPaulGreen.fr</a>&nbsp;ne sont pas exhaustifs. Ils sont donn&eacute;s sous r&eacute;serve de modifications ayant &eacute;t&eacute; apport&eacute;es depuis leur mise en ligne.</p>\r\n\r\n<h3 style=\"text-align:center\">4. Limitations contractuelles sur les donn&eacute;es techniques.</h3>\r\n\r\n<p style=\"text-align:center\">Le site utilise la technologie JavaScript.</p>\r\n\r\n<p style=\"text-align:center\">Le site Internet ne pourra &ecirc;tre tenu responsable de dommages mat&eacute;riels li&eacute;s &agrave; l&rsquo;utilisation du site. De plus, l&rsquo;utilisateur du site s&rsquo;engage &agrave; acc&eacute;der au site en utilisant un mat&eacute;riel r&eacute;cent, ne contenant pas de virus et avec un navigateur de derni&egrave;re g&eacute;n&eacute;ration mis-&agrave;-jour</p>\r\n\r\n<h3 style=\"text-align:center\">5. Propri&eacute;t&eacute; intellectuelle et contrefa&ccedil;ons.</h3>\r\n\r\n<p style=\"text-align:center\">L&#39;Association Paul Green est propri&eacute;taire des droits de propri&eacute;t&eacute; intellectuelle ou d&eacute;tient les droits d&rsquo;usage sur tous les &eacute;l&eacute;ments accessibles sur le site, notamment les textes, images, graphismes, logo, ic&ocirc;nes, sons, logiciels.</p>\r\n\r\n<p style=\"text-align:center\">Toute reproduction, repr&eacute;sentation, modification, publication, adaptation de tout ou partie des &eacute;l&eacute;ments du site, quel que soit le moyen ou le proc&eacute;d&eacute; utilis&eacute;, est interdite, sauf autorisation &eacute;crite pr&eacute;alable de : L&#39;Association Paul Green .</p>\r\n\r\n<p style=\"text-align:center\">Toute exploitation non autoris&eacute;e du site ou de l&rsquo;un quelconque des &eacute;l&eacute;ments qu&rsquo;il contient sera consid&eacute;r&eacute;e comme constitutive d&rsquo;une contrefa&ccedil;on et poursuivie conform&eacute;ment aux dispositions des articles L.335-2 et suivants du Code de Propri&eacute;t&eacute; Intellectuelle.</p>\r\n\r\n<h3 style=\"text-align:center\">6. Limitations de responsabilit&eacute;.</h3>\r\n\r\n<p style=\"text-align:center\">L&#39;Association Paul Green ne pourra &ecirc;tre tenue responsable des dommages directs et indirects caus&eacute;s au mat&eacute;riel de l&rsquo;utilisateur, lors de l&rsquo;acc&egrave;s au site <a href=\"http://www.theatre-la-comedie-pontchatelaine.fr/\">www.AssociationPaulGreen.fr</a>, et r&eacute;sultant soit de l&rsquo;utilisation d&rsquo;un mat&eacute;riel ne r&eacute;pondant pas aux sp&eacute;cifications indiqu&eacute;es au point 4, soit de l&rsquo;apparition d&rsquo;un bug ou d&rsquo;une incompatibilit&eacute;.</p>\r\n\r\n<p style=\"text-align:center\">L&#39;Association Paul Green ne pourra &eacute;galement &ecirc;tre tenue responsable des dommages indirects (tels par exemple qu&rsquo;une perte de march&eacute; ou perte d&rsquo;une chance) cons&eacute;cutifs &agrave; l&rsquo;utilisation du site&nbsp;<a href=\"http://www.theatre-la-comedie-pontchatelaine.fr/\">www.AssociationPaulGreen.fr</a>.</p>\r\n\r\n<p style=\"text-align:center\">Des espaces interactifs (possibilit&eacute; de poser des questions dans l&rsquo;espace contact) sont &agrave; la disposition des utilisateurs. L&#39;Association Paul Green se r&eacute;serve le droit de supprimer, sans mise en demeure pr&eacute;alable, tout contenu d&eacute;pos&eacute; dans cet espace qui contreviendrait &agrave; la l&eacute;gislation applicable en France, en particulier aux dispositions relatives &agrave; la protection des donn&eacute;es. Le cas &eacute;ch&eacute;ant, L&#39;Association Paul Green se r&eacute;serve &eacute;galement la possibilit&eacute; de mettre en cause la responsabilit&eacute; civile et/ou p&eacute;nale de l&rsquo;utilisateur, notamment en cas de message &agrave; caract&egrave;re raciste, injurieux, diffamant, ou pornographique, quel que soit le support utilis&eacute; (texte, photographie&hellip;).</p>\r\n\r\n<h3 style=\"text-align:center\">7. Gestion des donn&eacute;es personnelles.</h3>\r\n\r\n<p style=\"text-align:center\">En France, les donn&eacute;es personnelles sont notamment prot&eacute;g&eacute;es par la loi n&deg; 78-87 du 6 janvier 1978, la loi n&deg; 2004-801 du 6 ao&ucirc;t 2004, l&#39;article L. 226-13 du Code p&eacute;nal et la Directive Europ&eacute;enne du 24 octobre 1995.</p>\r\n\r\n<p style=\"text-align:center\">A l&#39;occasion de l&#39;utilisation du site&nbsp;<a href=\"http://www.theatre-la-comedie-pontchatelaine.fr/\">www.AssociationPaulGreen.fr</a>, peuvent &ecirc;tres recueillies : l&#39;URL des liens par l&#39;interm&eacute;diaire desquels l&#39;utilisateur a acc&eacute;d&eacute; au site&nbsp;<a href=\"http://www.theatre-la-comedie-pontchatelaine.fr/\">www.AssociationPaulGreen.fr</a> le fournisseur d&#39;acc&egrave;s de l&#39;utilisateur, l&#39;adresse de protocole Internet (IP) de l&#39;utilisateur.</p>\r\n\r\n<p style=\"text-align:center\">En tout &eacute;tat de cause L&#39;Association Paul Green ne collecte des informations personnelles relatives &agrave; l&#39;utilisateur que pour le besoin de certains services propos&eacute;s par le site&nbsp;<a href=\"http://www.theatre-la-comedie-pontchatelaine.fr/\">www.AssociationPaulGreen.fr</a>. L&#39;utilisateur fournit ces informations en toute connaissance de cause, notamment lorsqu&#39;il proc&egrave;de par lui-m&ecirc;me &agrave; leur saisie. Il est alors pr&eacute;cis&eacute; &agrave; l&#39;utilisateur du site&nbsp;<a href=\"http://www.theatre-la-comedie-pontchatelaine.fr/\">www.AssociationPaulGreen.fr</a>&nbsp;l&rsquo;obligation ou non de fournir ces informations.</p>\r\n\r\n<p style=\"text-align:center\">Conform&eacute;ment aux dispositions des articles 38 et suivants de la loi 78-17 du 6 janvier 1978 relative &agrave; l&rsquo;informatique, aux fichiers et aux libert&eacute;s, tout utilisateur dispose d&rsquo;un droit d&rsquo;acc&egrave;s, de rectification et d&rsquo;opposition aux donn&eacute;es personnelles le concernant, en effectuant sa demande &eacute;crite et sign&eacute;e, accompagn&eacute;e d&rsquo;une copie du titre d&rsquo;identit&eacute; avec signature du titulaire de la pi&egrave;ce, en pr&eacute;cisant l&rsquo;adresse &agrave; laquelle la r&eacute;ponse doit &ecirc;tre envoy&eacute;e.</p>\r\n\r\n<p style=\"text-align:center\">Aucune information personnelle de l&#39;utilisateur du site&nbsp;<a href=\"http://www.theatre-la-comedie-pontchatelaine.fr/\">www.AssociationPaulGreen.fr</a>&nbsp;n&#39;est publi&eacute;e &agrave; l&#39;insu de l&#39;utilisateur, &eacute;chang&eacute;e, transf&eacute;r&eacute;e, c&eacute;d&eacute;e ou vendue sur un support quelconque &agrave; des tiers. Seule l&#39;hypoth&egrave;se du rachat de La com&eacute;die Pontchatelaine et de ses droits permettrait la transmission des dites informations &agrave; l&#39;&eacute;ventuel acqu&eacute;reur qui serait &agrave; son tour tenu de la m&ecirc;me obligation de conservation et de modification des donn&eacute;es vis &agrave; vis de l&#39;utilisateur du site&nbsp;<a href=\"http://www.theatre-la-comedie-pontchatelaine.fr/\">www.AssociationPaulGreen.fr</a>.</p>\r\n\r\n<p style=\"text-align:center\">Le site n&#39;est pas d&eacute;clar&eacute; &agrave; la CNIL car il ne recueille pas d&#39;informations personnelles. .</p>\r\n\r\n<p style=\"text-align:center\">Les bases de donn&eacute;es sont prot&eacute;g&eacute;es par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative &agrave; la protection juridique des bases de donn&eacute;es.</p>\r\n\r\n<h3 style=\"text-align:center\">8. Liens hypertextes et cookies.</h3>\r\n\r\n<p style=\"text-align:center\">Le site&nbsp;<a href=\"http://www.theatre-la-comedie-pontchatelaine.fr/\">www.AssociationPaulGreen.fr</a>&nbsp;contient un certain nombre de liens hypertextes vers d&rsquo;autres sites, mis en place avec l&rsquo;autorisation de L&#39;Association Paul Green . Cependant, L&#39;Association Paul Green n&rsquo;a pas la possibilit&eacute; de v&eacute;rifier le contenu des sites ainsi visit&eacute;s, et n&rsquo;assumera en cons&eacute;quence aucune responsabilit&eacute; de ce fait.</p>\r\n\r\n<p style=\"text-align:center\">La navigation sur le site&nbsp;<a href=\"http://www.theatre-la-comedie-pontchatelaine.fr/\">www.AssociationPaulGreen.fr</a>&nbsp;est susceptible de provoquer l&rsquo;installation de cookie(s) sur l&rsquo;ordinateur de l&rsquo;utilisateur. Un cookie est un fichier de petite taille, qui ne permet pas l&rsquo;identification de l&rsquo;utilisateur, mais qui enregistre des informations relatives &agrave; la navigation d&rsquo;un ordinateur sur un site. Les donn&eacute;es ainsi obtenues visent &agrave; faciliter la navigation ult&eacute;rieure sur le site, et ont &eacute;galement vocation &agrave; permettre diverses mesures de fr&eacute;quentation.</p>\r\n\r\n<p style=\"text-align:center\">Le refus d&rsquo;installation d&rsquo;un cookie peut entra&icirc;ner l&rsquo;impossibilit&eacute; d&rsquo;acc&eacute;der &agrave; certains services. L&rsquo;utilisateur peut toutefois configurer son ordinateur de la mani&egrave;re suivante, pour refuser l&rsquo;installation des cookies :</p>\r\n\r\n<p style=\"text-align:center\">Sous Internet Explorer : onglet outil (pictogramme en forme de rouage en haut a droite) / options internet. Cliquez sur Confidentialit&eacute; et choisissez Bloquer tous les cookies. Validez sur Ok.</p>\r\n\r\n<p style=\"text-align:center\">Sous Firefox : en haut de la fen&ecirc;tre du navigateur, cliquez sur le bouton Firefox, puis aller dans l&#39;onglet Options. Cliquer sur l&#39;onglet Vie priv&eacute;e. Param&eacute;trez les R&egrave;gles de conservation sur : utiliser les param&egrave;tres personnalis&eacute;s pour l&#39;historique. Enfin d&eacute;cochez-la pour d&eacute;sactiver les cookies.</p>\r\n\r\n<p style=\"text-align:center\">Sous Safari : Cliquez en haut &agrave; droite du navigateur sur le pictogramme de menu (symbolis&eacute; par un rouage). S&eacute;lectionnez Param&egrave;tres. Cliquez sur Afficher les param&egrave;tres avanc&eacute;s. Dans la section &quot;Confidentialit&eacute;&quot;, cliquez sur Param&egrave;tres de contenu. Dans la section &quot;Cookies&quot;, vous pouvez bloquer les cookies.</p>\r\n\r\n<p style=\"text-align:center\">Sous Chrome : Cliquez en haut &agrave; droite du navigateur sur le pictogramme de menu (symbolis&eacute; par trois lignes horizontales). S&eacute;lectionnez Param&egrave;tres. Cliquez sur Afficher les param&egrave;tres avanc&eacute;s. Dans la section &quot;Confidentialit&eacute;&quot;, cliquez sur pr&eacute;f&eacute;rences. Dans l&#39;onglet &quot;Confidentialit&eacute;&quot;, vous pouvez bloquer les cookies.</p>\r\n\r\n<h3 style=\"text-align:center\">9. Droit applicable et attribution de juridiction.</h3>\r\n\r\n<p style=\"text-align:center\">Tout litige en relation avec l&rsquo;utilisation du site&nbsp;<a href=\"http://www.theatre-la-comedie-pontchatelaine.fr/\">www.AssociationPaulGreen.fr</a>&nbsp;est soumis au droit fran&ccedil;ais. Il est fait attribution exclusive de juridiction aux tribunaux comp&eacute;tents de Paris.</p>\r\n\r\n<h3 style=\"text-align:center\">10. Les principales lois concern&eacute;es.</h3>\r\n\r\n<p style=\"text-align:center\">Loi n&deg; 78-17 du 6 janvier 1978, notamment modifi&eacute;e par la loi n&deg; 2004-801 du 6 ao&ucirc;t 2004 relative &agrave; l&#39;informatique, aux fichiers et aux libert&eacute;s.</p>\r\n\r\n<p style=\"text-align:center\">Loi n&deg; 2004-575 du 21 juin 2004 pour la confiance dans l&#39;&eacute;conomie num&eacute;rique.</p>\r\n\r\n<h3 style=\"text-align:center\">11. Lexique.</h3>\r\n\r\n<p style=\"text-align:center\">Utilisateur : Internaute se connectant, utilisant le site susnomm&eacute;.</p>\r\n\r\n<p style=\"text-align:center\">Informations personnelles : &laquo; les informations qui permettent, sous quelque forme que ce soit, directement ou non, l&#39;identification des personnes physiques auxquelles elles s&#39;appliquent &raquo; (article 4 de la loi n&deg; 78-17 du 6 janvier 1978).</p>');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `partners`
--

INSERT INTO `partners` (`id`, `partner_grouping_id`, `name_partner`, `text_partner`, `photo_partner`, `logo_partner`, `link_partner`) VALUES
(1, 2, 'La Banque Postal', 'La Banque Postal', 'logo-laposte-0601361222766-web-tete-6218da5c71e17.jpg', 'logo-logolaposte-part-6218da5c724c1.svg', NULL),
(2, 1, 'Université de Montpellier', NULL, 'logo-GE-6-parcours-master-gestion-environnement-6218db2c3e361.jpg', 'logo-GE-logo-header-6218db2c3ea9a.svg', 'https://formations.umontpellier.fr/fr/formations/master-XB/master-gestion-de-l-environnement-KKICL68U.html'),
(3, 1, 'Observatoire des Thèses', NULL, 'logo-ja5-telechargement-622219328640a.jpg', 'logo-Capture-decran-2021-11-03-a-11-39-50-e1635936067554-6218ddd2e79a3.png', 'https://www.observatoiretheses.org/geographie'),
(4, 2, 'BNP', 'BNP Paribas', 'logo-bnp-paribas-62221a0e92fc7.jpg', 'logo-bnp-logo-arton1394-62221a0e9363d.jpg', 'https://mabanque.bnpparibas/');

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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `photos_actions_assos`
--

INSERT INTO `photos_actions_assos` (`id`, `photoactasso_id`, `photoactionsasso`, `altphotoactionsasso`) VALUES
(2, 1, 'c5a1d98a179fabdc315f17e071d19035.jpg', NULL),
(3, 1, '7e37aac187fe96a458da3ebd1c77db2b.jpg', 'installé dans le quartier buffet'),
(4, 1, '41dd7aa9cf634b78ade0916c94e748d0.jpg', NULL),
(5, 1, '4f139a742c54d8b424ed0845ab735ee0.jpg', 'Boite dans le quartier 22'),
(6, 1, '913c82449b3e6ece7de412433b24275a.jpg', NULL),
(7, 1, '6bc7bc88e9031509835323ece43ab979.jpg', NULL),
(8, 3, '3f76c04bedee6c377bccba31527e5942.jpg', NULL),
(9, 3, 'caf4519ff1486576fdfdb9a87fbda9f7.jpg', NULL),
(10, 3, 'dee63ef0f5c5cee9f8318038305c89fe.jpg', NULL),
(11, 3, '99009c928c01a841be0260d5680034a4.jpg', NULL),
(12, 3, '86413ccd1f01da9783d79c9c8292ef10.jpg', NULL),
(13, 3, '2305e86d2bbb26c72732aba55765e546.jpg', NULL),
(18, 2, 'c3693ecdf43067ebfcb72266e9515027.jpg', NULL),
(19, 2, '3385b88069db69487e903451793c9bf4.jpg', NULL),
(20, 2, '93259346f0017e25b55a26d272ec7dbf.jpg', NULL),
(21, 2, '568726e35761797a76b23896a47a8bc3.jpg', NULL),
(22, 2, '07a3e7da032dc2cbbd2395622c915ba0.jpg', NULL);

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
(6, 'pierre@gmail.com', '[\"ROLE_USER\"]', '$2y$13$xek0fFhXoO/LlAcjAzNwnulB5PB3fdKaBkiLFQ.6uJ2jV43i3kwo.', 'bidule', 'pierre', 'adresse 1', 'xxxxxxxxxxxxxx', '44600', 'ssssssssssss', '0212121212', 'images-621e349a1d1db.jpg', 'sss', 1987, 1, 1, 1, 1);

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
