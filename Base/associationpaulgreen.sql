-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 23 mars 2022 à 19:42
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `associationpaulgreen`
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
  `shorttextactionsasso` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `IDX_2631A96A9C2D1EA2` (`actionsassosuser_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `actions_assos`
--

INSERT INTO `actions_assos` (`id`, `titleactionsasso`, `pictureactionsasso`, `textactionsasso`, `linkactionsasso`, `startactionsasso`, `endactionsasso`, `titlelinkactionsasso`, `actionsassosuser_id`, `alt_picture_actions_assos`, `shorttextactionsasso`) VALUES
(1, 'Boîte à Insectes', 'bins2images-4-62207e8e70d5b.jpg', '<h1>Pourquoi vouloir installer un h&ocirc;tel &agrave; insecte ? A quoi cela va-t-il servir ?!?</h1>\r\n\r\n<p>En quantit&eacute;, 80% des insectes ont disparu en 20 ans, construire et installer un h&ocirc;tel &agrave; insecte, c&rsquo;est aujourd&rsquo;hui agir &agrave; son &eacute;chelle pour pr&eacute;server et prot&eacute;ger ces animaux, essentiel pour la biodiversit&eacute;, mais &eacute;galement pour nous m&ecirc;me !</p>\r\n\r\n<p>Pollinisation, pr&eacute;dation d&rsquo;esp&egrave;ces consommatrices des cultures, d&eacute;composition de la mati&egrave;re organique, nourriture pour les oiseaux, etc&hellip; autant de taches r&eacute;alis&eacute;es par les insectes qui logeront dans votre h&ocirc;tel &agrave; insecte. Bien s&ucirc;r, en plus de l&rsquo;h&ocirc;tel, c&rsquo;est tout une r&eacute;flexion qui doit &ecirc;tre r&eacute;aliser dans le jardin : ne pas utiliser de produits toxiques (herbicides, insecticides&hellip;), proposer des plantes nourrici&egrave;res, laisser un espace non tondu, pr&eacute;voir d&rsquo;autres abris (tas de bois, de feuilles mortes, r&eacute;aliser un compost, etc&hellip;).<span style=\"color:#2ecc71\">&nbsp;<strong>Installer un h&ocirc;tel &agrave; insectes sans tenir compte de l&rsquo;&eacute;cosyst&egrave;me local dans son ensemble n&rsquo;aurait aucun sens !</strong></span></p>\r\n\r\n<p>Pour r&eacute;aliser votre h&ocirc;tel, une multitude de plans existent, de toute taille, de formes diff&eacute;rentes, n&rsquo;h&eacute;sitez pas&nbsp; &agrave; laisser parler votre imagination ! Nous vous proposons ici la r&eacute;alisation d&rsquo;un h&ocirc;tel de taille moyenne, facile &agrave; r&eacute;aliser &agrave; partir de planches de 20 cm de large, bien s&ucirc;r non trait&eacute;es ! Pour cela, vous pouvez trouver assez facilement dans les magasins de bricolages des &laquo;&nbsp;planches de coffrage&nbsp;&raquo; non trait&eacute;es. Pour une construction solide, nous vous conseillons une &eacute;paisseur de bois de 25 mm.</p>\r\n\r\n<h2><span style=\"color:#3498db\">La d&eacute;coupe</span></h2>\r\n\r\n<p>Pas de d&eacute;coupe compliqu&eacute;e, il suffit de&nbsp; couper la planche en tron&ccedil;on de diff&eacute;rentes dimensions (il faut environ 8 m de planches) :</p>\r\n\r\n<ul>\r\n	<li>7 planchettes de 60 cm</li>\r\n	<li>4 planchettes de (60-2X&eacute;paisseur), donc pour une planche d&rsquo;&eacute;paisseur 25 mm : 55 cm</li>\r\n	<li>6 planchettes de (60-4X&eacute;paisseur)/3, soit environ 16,5 cm pour une &eacute;paisseur de 25 mm</li>\r\n	<li>1 planchette de 22 cm, perc&eacute;e en son centre d&rsquo;un trou de 12-15 mm</li>\r\n	<li>des clous, ou vis, d&rsquo;une longueur adapt&eacute;e (50-60 mm pour le bois de 25 mm d&rsquo;&eacute;paisseur)</li>\r\n</ul>\r\n\r\n<h2><span style=\"color:#3498db\">Le montage</span></h2>\r\n\r\n<p>Pour cela, suivez le plan ci dessous ! (cliquez sur les images pour le grand format)</p>\r\n\r\n<p><a href=\"http://www.environat.fr/wp-content/uploads/2018/07/mode-emploi-bois-page003.jpg\" rel=\"noopener noreferrer\" target=\"_blank\"><img alt=\"\" src=\"http://www.environat.fr/wp-content/uploads/2018/07/mode-emploi-bois-page003-1024x724.jpg\" style=\"height:321px; width:450px\" /></a><a href=\"http://www.environat.fr/wp-content/uploads/2018/07/mode-emploi-bois-page004-e1530694651941.jpg\" rel=\"noopener noreferrer\" target=\"_blank\"><img alt=\"\" src=\"http://www.environat.fr/wp-content/uploads/2018/07/mode-emploi-bois-page004-e1530694651941-724x1024.jpg\" style=\"height:321px; width:230px\" /></a></p>\r\n\r\n<h2><span style=\"color:#3498db\">Le remplissage</span></h2>\r\n\r\n<p>Pour remplir les &laquo;&nbsp;logements&nbsp;&raquo;, une multitude de mat&eacute;riaux peuvent &ecirc;tre utilis&eacute;s : briques creuses, brindilles, bois creux (sureau, bambou, etc&hellip;), b&ucirc;che de bois perc&eacute;e (avec des trous de 6, 8, 10, 12 mm), tuiles, pot de fleur en terre cuite, etc&hellip; Chaque mat&eacute;riau choisi abritera des insectes diff&eacute;rents, variez les composants !</p>\r\n\r\n<h4>Finition et pose</h4>\r\n\r\n<p><a href=\"http://www.environat.fr/wp-content/uploads/2018/07/install-hotel-%C3%A0-insecte.jpg\" rel=\"noopener noreferrer\" target=\"_blank\"><img alt=\"\" src=\"http://www.environat.fr/wp-content/uploads/2018/07/install-hotel-%C3%A0-insecte-724x1024.jpg\" style=\"height:330px; width:236px\" /></a></p>\r\n\r\n<p>Pour la finition, pas de peinture, elles sont souvent insecticides ! Pour le prot&eacute;ger de la pluie, vous pouvez pr&eacute;voir de poser des tuiles sur le toit, ou un morceau de toile bitumin&eacute;e. Un grillage peut aussi &ecirc;tre n&eacute;cessaire pour maintenir les &eacute;l&eacute;ments et &eacute;viter qu&rsquo;ils soient &laquo;&nbsp;pill&eacute;s&nbsp;&raquo; par les oiseaux pour construire leur nid ! Pour cela, il suffit d&rsquo;un grillage avec des mailles d&rsquo;environ 2-4 cm qui permettront aux insectes de circuler librement et de le fixer en le clouant ou en l&rsquo;agrafant !</p>\r\n\r\n<p>Pour la pose, choisissez une orientation ensoleill&eacute;e (Sud, ou sud-est, sud-ouest), placer 2 briques au sol pour que la planche du dessous ne soit pas au contact de l&rsquo;humidit&eacute; et posez l&rsquo;h&ocirc;tel &agrave; insecte. Pour assurer sa stabilit&eacute;, vous pouvez le fixer &agrave; un mur, ou enfoncer &agrave; l&rsquo;arri&egrave;re des piquets &agrave; solidariser &agrave; l&rsquo;h&ocirc;tel.</p>', 'https://www.jardiner-autrement.fr/construire-hotel-a-insectes/', '2022-02-01 00:00:00', '2022-02-03 00:00:00', 'Voir un autre exemple...', 1, 'Construire et installer un hôtel à insecte', 'Généralement, on utilise un texte en faux latin (le texte ne veut rien dire, il a été modifié), le Lorem ipsum ou Lipsum, qui permet donc de faire office de texte d\'attente. L\'avantage de le mettre en latin est que l\'opérateur sait au premier coup d\'oeil que la page contenant ces lignes n\'est pas valide, et surtout l\'attention du client n\'est pas dérangée par le contenu, il demeure concentré seulement sur l\'aspect graphique. Ce texte a pour autre avantage d\'utiliser des mots de longueur varia500ble, essayant de simuler une occupation normale. La méthode simpliste consistant à copier-coller un court texte plusieurs fois (« ceci est un faux-texte ceci est un faux-texte ceci est un faux-texte ceci est un faux-texte ceci est un faux-texte »)750 a l\'inconvénient de ne pas permettre une juste appréciation typographique du résultat final. Il circule des centaines de versions différentes du Lorem ipsum, mais ce texte aurait originellement été tiré de l\'ouvrage de Cicéron, De Finibus Bonoru1000'),
(2, 'Boîte à Livres ou Bibliothèque de rue', 'bl3images-4-62207dcb0b58f.jpg', '<p><img alt=\"\" src=\"https://observatoire-du-partage.org/wp-content/uploads/2019/04/36-Biblioth%C3%A8que-de-rue-2-768x480.jpg\" style=\"height:480px; width:768px\" /></p>\r\n\r\n<p>Une biblioth&egrave;que de rue, ou bo&icirc;te &agrave; livres, est un petit espace ouvert &agrave; tous permettant de d&eacute;poser et emprunter ou prendre un livre de mani&egrave;re totalement libre et gratuite &agrave; tout moment du jour ou de la nuit. Elles se situent en g&eacute;n&eacute;ral dans des espaces publics ou tr&egrave;s fr&eacute;quent&eacute;s par les habitants et peuvent prendre le format d&rsquo;une armoire, d&rsquo;une &eacute;tag&egrave;re ou encore d&rsquo;une bo&icirc;te type bo&icirc;te aux lettres. De confection souvent artisanale, on peut fabriquer de toutes pi&egrave;ces sa propre bo&icirc;te, ou r&eacute;cup&eacute;rer des meubles existants&hellip; toutes les solutions pratiques et un minimums solides feront l&rsquo;affaire. Quel que soit l&rsquo;objet, il faudra cependant faire en sorte qu&rsquo;elle soit &eacute;tanche afin de pr&eacute;server au mieux les ouvrages des intemp&eacute;ries. L&rsquo;aspect esth&eacute;tique de la bo&icirc;te &agrave; livre est aussi important afin d&rsquo;attirer les curieux qui feront ensuite vivre ce lieu de partage.</p>\r\n\r\n<p>On peut placer sa mini biblioth&egrave;que sur sa propri&eacute;t&eacute;, accessible depuis l&rsquo;ext&eacute;rieur, ou sur l&rsquo;espace public. Dans le deuxi&egrave;me cas, il faudra demander en amont une autorisation d&rsquo;utiliser l&rsquo;espace en question aupr&egrave;s de la mairie. G&eacute;r&eacute;e pour et par les habitants, une biblioth&egrave;que de rue ne doit pas remplacer une biblioth&egrave;que municipale ou combler un manque d&rsquo;infrastructures mais s&rsquo;ajouter comme un point d&rsquo;&eacute;change au d&eacute;tour d&rsquo;une lecture et de promotion de l&rsquo;acc&egrave;s &agrave; litt&eacute;rature pour tous.</p>\r\n\r\n<p>Une fois install&eacute;e, la biblioth&egrave;que de rue ne doit pas &ecirc;tre laiss&eacute;e &agrave; l&rsquo;abandon. La gestion au jour le jour peut &ecirc;tre assur&eacute;e par un ou une poign&eacute;e de b&eacute;n&eacute;voles qui se chargent de l&rsquo;entretien si besoin et adaptent la r&eacute;partition et/ou le stockage en fonction de la circulation des ouvrages. Si les &eacute;tag&egrave;res sont trop vides, une collecte sp&eacute;cifique peut &ecirc;tre envisag&eacute;e.</p>', 'https://observatoire-du-partage.org/ressource/bibliotheque-de-rue/', '2022-03-10 00:00:00', '2022-03-24 00:00:00', 'Pour en savoir plus...', 1, 'Réalisation de boîtes à livres', 'Généralement, on utilise un texte en faux latin (le texte ne veut rien dire, il a été modifié), le Lorem ipsum ou Lipsum, qui permet donc de faire office de texte d\'attente. L\'avantage de le mettre en latin est que l\'opérateur sait au premier coup d\'oeil que la page contenant ces lignes n\'est pas valide, et surtout l\'attention du client n\'est pas dérangée par le contenu, il demeure concentré seulement sur l\'aspect graphique. Ce texte a pour autre avantage d\'utiliser des mots de longueur varia500ble, essayant de simuler une occupation normale. La méthode simpliste consistant à copier-coller un court texte plusieurs fois (« ceci est un faux-texte ceci est un faux-texte ceci est un faux-texte ceci est un faux-texte ceci est un faux-texte »)750'),
(3, 'Jardin Associatif', 'ja1-telechargement-62207f425765d.jpg', '<p>jardin associatif</p>', NULL, '2022-03-04 00:00:00', '2022-03-25 00:00:00', 'photo principal', 1, 'Entretien du Jardin tous les Vendredis', 'Généralement, on utilise un texte en faux latin (le texte ne veut rien dire, il a été modifié), le Lorem ipsum ou Lipsum, qui permet donc de faire office de texte d\'attente. L\'avantage de le mettre en latin est que l\'opérateur sait au premier coup d\'oeil que la page contenant ces lignes n\'est pas valide, et surtout l\'attention du client n\'est pas dérangée par le contenu, il demeure concentré seulement sur l\'aspect graphique. Ce texte a pour autre avantage d\'utiliser des mots de longueur varia500');

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
-- Structure de la table `actions_masters`
--

DROP TABLE IF EXISTS `actions_masters`;
CREATE TABLE IF NOT EXISTS `actions_masters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titleactionsmaster` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pictureactionsmaster` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `altpictureactionsmaster` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `textactionsmaster` longtext COLLATE utf8mb4_unicode_ci,
  `titlelinkactionsmaster` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `startactionsmaster` date DEFAULT NULL,
  `endactionsmaster` date DEFAULT NULL,
  `actions_users_id` int(11) DEFAULT NULL,
  `linkactionsmaster` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shorttextactionsmaster` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `IDX_B3C951E5B814011E` (`actions_users_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `actions_masters`
--

INSERT INTO `actions_masters` (`id`, `titleactionsmaster`, `pictureactionsmaster`, `altpictureactionsmaster`, `textactionsmaster`, `titlelinkactionsmaster`, `startactionsmaster`, `endactionsmaster`, `actions_users_id`, `linkactionsmaster`, `shorttextactionsmaster`) VALUES
(1, 'Actions Master 1', 'bnp-paribas-6235ac622e038.jpg', 'texte alt 1', '<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\">G&eacute;n&eacute;ralement, on utilise un texte en faux latin (le texte ne veut rien dire, il a &eacute;t&eacute; modifi&eacute;), le Lorem ipsum ou Lipsum, qui permet donc de faire office de texte d&#39;attente. L&#39;avantage de le mettre en latin est que l&#39;op&eacute;rateur sait au premier coup d&#39;oeil que la page contenant ces lignes n&#39;est pas valide, et surtout l&#39;attention du client n&#39;est pas d&eacute;rang&eacute;e par le contenu, il demeure concentr&eacute; seulement sur l&#39;aspect graphique. Ce texte a pour autre avantage d&#39;utiliser des mots de longueur varia500ble, essayant de simuler une occupation normale. La m&eacute;thode simpliste consistant &agrave; copier-coller un court texte plusieurs fois (&laquo; ceci est un faux-texte ceci est un faux-texte ceci est un faux-texte ceci est un faux-texte ceci est un faux-texte &raquo;)750 a l&#39;inconv&eacute;nient de ne pas permettre une juste appr&eacute;ciation typographique du r&eacute;sultat final. Il circule des centaines de versions diff&eacute;rentes du Lorem ipsum, mais ce texte aurait originellement &eacute;t&eacute; tir&eacute; de l&#39;ouvrage de Cic&eacute;ron, De Finibus Bonoru1000m et Malorum (Liber Primus, 32), texte populaire &agrave; cette &eacute;poque, dont l&#39;une des premi&egrave;res phrases est : &laquo; Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit... &raquo; (&laquo; Il n&#39;existe personne qui aime la souffrance pour elle-m&ecirc;me, ni qui la recherche ni qui la veuille pour ce qu&#39;elle est... &raquo;).</span></span></p>', 'titre du lien 1', NULL, NULL, NULL, NULL, 'Généralement, on utilise un texte en faux latin (le texte ne veut rien dire, il a été modifié), le Lorem ipsum ou Lipsum, qui permet donc de faire office de texte d\'attente. L\'avantage de le mettre en latin est que l\'opérateur sait au premier coup d\'oeil que la page contenant ces lignes n\'est pas valide, et surtout l\'attention du client n\'est pas dérangée par le contenu, il demeure concentré seulement sur l\'aspect graphique. Ce texte a pour autre avantage d\'utiliser des mots de longueur varia500ble, essayant de simuler une occupation normale. La méthode simpliste consistant à copier-coller un court texte plusieurs fois (« ceci est un faux-texte ceci est un faux-texte ceci est un faux-texte ceci est un faux-texte ceci est un faux-texte »)750 a l\'inconvénient de ne pas permettre une juste appréciation typographique du résultat final. Il circule des centaines de versions différentes du Lorem ipsum, mais ce texte aurait originellement été tiré de l\'ouvrage de Cicéron, De Finibus Bonoru1000'),
(2, 'Actions Master 2', 'anjeau-adret-46cd8-6235ab2f63cfb.jpg', 'texte alt 2', '<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\">G&eacute;n&eacute;ralement, on utilise un texte en faux latin (le texte ne veut rien dire, il a &eacute;t&eacute; modifi&eacute;), le Lorem ipsum ou Lipsum, qui permet donc de faire office de texte d&#39;attente. L&#39;avantage de le mettre en latin est que l&#39;op&eacute;rateur sait au premier coup d&#39;oeil que la page contenant ces lignes n&#39;est pas valide, et surtout l&#39;attention du client n&#39;est pas d&eacute;rang&eacute;e par le contenu, il demeure concentr&eacute; seulement sur l&#39;aspect graphique. Ce texte a pour autre avantage d&#39;utiliser des mots de longueur varia500ble, essayant de simuler une occupation normale. La m&eacute;thode simpliste consistant &agrave; copier-coller un court texte plusieurs fois (&laquo; ceci est un faux-texte ceci est un faux-texte ceci est un faux-texte ceci est un faux-texte ceci est un faux-texte &raquo;)750 a l&#39;inconv&eacute;nient de ne pas permettre une juste appr&eacute;ciation typographique du r&eacute;sultat final. Il circule des centaines de versions diff&eacute;rentes du Lorem ipsum, mais ce texte aurait originellement &eacute;t&eacute; tir&eacute; de l&#39;ouvrage de Cic&eacute;ron, De Finibus Bonoru1000m et Malorum (Liber Primus, 32), texte populaire &agrave; cette &eacute;poque, dont l&#39;une des premi&egrave;res phrases est : &laquo; Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit... &raquo; (&laquo; Il n&#39;existe personne qui aime la souffrance pour elle-m&ecirc;me, ni qui la recherche ni qui la veuille pour ce qu&#39;elle est... &raquo;).</span></span></p>', 'titre du lien 2', '2022-12-10', '2002-12-11', NULL, NULL, 'Généralement, on utilise un texte en faux latin (le texte ne veut rien dire, il a été modifié), le Lorem ipsum ou Lipsum, qui permet donc de faire office de texte d\'attente. L\'avantage de le mettre en latin est que l\'opérateur sait au premier coup d\'oeil que la page contenant ces lignes n\'est pas valide, et surtout l\'attention du client n\'est pas dérangée par le contenu, il demeure concentré seulement sur l\'aspect graphique. Ce texte a pour autre avantage d\'utiliser des mots de longueur varia500ble, essayant de simuler une occupation normale. La méthode simpliste consistant à copier-coller un court texte plusieurs fois (« ceci est un faux-texte ceci est un faux-texte ceci est un faux-texte ceci est un faux-texte ceci est un faux-texte »)750 a l\'inconvénient de ne pas permettre une juste appréciation typographique du résultat final. Il circule des centaines de versions différentes du Lorem ipsum, mais ce texte aurait originellement été tiré de l\'ouvrage de Cicéron, De Finibus Bonoru1000'),
(3, 'Actions Master 3', 'bins3images-4-6235abc931ff3.jpg', NULL, '<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\">G&eacute;n&eacute;ralement, on utilise un texte en faux latin (le texte ne veut rien dire, il a &eacute;t&eacute; modifi&eacute;), le Lorem ipsum ou Lipsum, qui permet donc de faire office de texte d&#39;attente. L&#39;avantage de le mettre en latin est que l&#39;op&eacute;rateur sait au premier coup d&#39;oeil que la page contenant ces lignes n&#39;est pas valide, et surtout l&#39;attention du client n&#39;est pas d&eacute;rang&eacute;e par le contenu, il demeure concentr&eacute; seulement sur l&#39;aspect graphique. Ce texte a pour autre avantage d&#39;utiliser des mots de longueur varia500ble, essayant de simuler une occupation normale. La m&eacute;thode simpliste consistant &agrave; copier-coller un court texte plusieurs fois (&laquo; ceci est un faux-texte ceci est un faux-texte ceci est un faux-texte ceci est un faux-texte ceci est un faux-texte &raquo;)750 a l&#39;inconv&eacute;nient de ne pas permettre une juste appr&eacute;ciation typographique du r&eacute;sultat final. Il circule des centaines de versions diff&eacute;rentes du Lorem ipsum, mais ce texte aurait originellement &eacute;t&eacute; tir&eacute; de l&#39;ouvrage de Cic&eacute;ron, De Finibus Bonoru1000m et Malorum (Liber Primus, 32), texte populaire &agrave; cette &eacute;poque, dont l&#39;une des premi&egrave;res phrases est : &laquo; Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit... &raquo; (&laquo; Il n&#39;existe personne qui aime la souffrance pour elle-m&ecirc;me, ni qui la recherche ni qui la veuille pour ce qu&#39;elle est... &raquo;).</span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\">G&eacute;n&eacute;ralement, on utilise un texte en faux latin (le texte ne veut rien dire, il a &eacute;t&eacute; modifi&eacute;), le Lorem ipsum ou Lipsum, qui permet donc de faire office de texte d&#39;attente. L&#39;avantage de le mettre en latin est que l&#39;op&eacute;rateur sait au premier coup d&#39;oeil que la page contenant ces lignes n&#39;est pas valide, et surtout l&#39;attention du client n&#39;est pas d&eacute;rang&eacute;e par le contenu, il demeure concentr&eacute; seulement sur l&#39;aspect graphique. Ce texte a pour autre avantage d&#39;utiliser des mots de longueur varia500ble, essayant de simuler une occupation normale. La m&eacute;thode simpliste consistant &agrave; copier-coller un court texte plusieurs fois (&laquo; ceci est un faux-texte ceci est un faux-texte ceci est un faux-texte ceci est un faux-texte ceci est un faux-texte &raquo;)750 a l&#39;inconv&eacute;nient de ne pas permettre une juste appr&eacute;ciation typographique du r&eacute;sultat final. Il circule des centaines de versions diff&eacute;rentes du Lorem ipsum, mais ce texte aurait originellement &eacute;t&eacute; tir&eacute; de l&#39;ouvrage de Cic&eacute;ron, De Finibus Bonoru1000m et Malorum (Liber Primus, 32), texte populaire &agrave; cette &eacute;poque, dont l&#39;une des premi&egrave;res phrases est : &laquo; Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit... &raquo; (&laquo; Il n&#39;existe personne qui aime la souffrance pour elle-m&ecirc;me, ni qui la recherche ni qui la veuille pour ce qu&#39;elle est... &raquo;).</span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\">G&eacute;n&eacute;ralement, on utilise un texte en faux latin (le texte ne veut rien dire, il a &eacute;t&eacute; modifi&eacute;), le Lorem ipsum ou Lipsum, qui permet donc de faire office de texte d&#39;attente. L&#39;avantage de le mettre en latin est que l&#39;op&eacute;rateur sait au premier coup d&#39;oeil que la page contenant ces lignes n&#39;est pas valide, et surtout l&#39;attention du client n&#39;est pas d&eacute;rang&eacute;e par le contenu, il demeure concentr&eacute; seulement sur l&#39;aspect graphique. Ce texte a pour autre avantage d&#39;utiliser des mots de longueur varia500ble, essayant de simuler une occupation normale. La m&eacute;thode simpliste consistant &agrave; copier-coller un court texte plusieurs fois (&laquo; ceci est un faux-texte ceci est un faux-texte ceci est un faux-texte ceci est un faux-texte ceci est un faux-texte &raquo;)750 a l&#39;inconv&eacute;nient de ne pas permettre une juste appr&eacute;ciation typographique du r&eacute;sultat final. Il circule des centaines de versions diff&eacute;rentes du Lorem ipsum, mais ce texte aurait originellement &eacute;t&eacute; tir&eacute; de l&#39;ouvrage de Cic&eacute;ron, De Finibus Bonoru1000m et Malorum (Liber Primus, 32), texte populaire &agrave; cette &eacute;poque, dont l&#39;une des premi&egrave;res phrases est : &laquo; Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit... &raquo; (&laquo; Il n&#39;existe personne qui aime la souffrance pour elle-m&ecirc;me, ni qui la recherche ni qui la veuille pour ce qu&#39;elle est... &raquo;).</span></span></p>', NULL, NULL, NULL, NULL, NULL, 'Généralement, on utilise un texte en faux latin (le texte ne veut rien dire, il a été modifié), le Lorem ipsum ou Lipsum, qui permet donc de faire office de texte d\'attente. L\'avantage de le mettre en latin est que l\'opérateur sait au premier coup d\'oeil que la page contenant ces lignes n\'est pas valide, et surtout l\'attention du client n\'est pas dérangée par le contenu, il demeure concentré seulement sur l\'aspect graphique. Ce texte a pour autre avantage d\'utiliser des mots de longueur varia500');

-- --------------------------------------------------------

--
-- Structure de la table `actions_masters_themes`
--

DROP TABLE IF EXISTS `actions_masters_themes`;
CREATE TABLE IF NOT EXISTS `actions_masters_themes` (
  `actions_masters_id` int(11) NOT NULL,
  `themes_id` int(11) NOT NULL,
  PRIMARY KEY (`actions_masters_id`,`themes_id`),
  KEY `IDX_91F9EC618870C1C9` (`actions_masters_id`),
  KEY `IDX_91F9EC6194F4A9D2` (`themes_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `actions_masters_themes`
--

INSERT INTO `actions_masters_themes` (`actions_masters_id`, `themes_id`) VALUES
(1, 1),
(2, 3);

-- --------------------------------------------------------

--
-- Structure de la table `affectations`
--

DROP TABLE IF EXISTS `affectations`;
CREATE TABLE IF NOT EXISTS `affectations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nameaffectation` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descriptionaffectation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `affectations`
--

INSERT INTO `affectations` (`id`, `nameaffectation`, `descriptionaffectation`) VALUES
(1, 'Jardin', 'Jardinnage'),
(2, 'Hôtel à Insectes', 'Rue du bourdon'),
(3, 'Bibliothèque de rue', 'Rue du Bouc inquiet'),
(4, 'Locaux de l\'association', 'nos locaux');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `subjet_contact`, `content_contact`, `date_contact`, `name_contact`, `email_contact`) VALUES
(1, 'fnkefnaf', 'avfarezvgfraeg', '2022-03-15 15:45:12', 'machin bidule', 'jsdada@gmail.com');

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
('DoctrineMigrations\\Version20220311132346', '2022-03-11 13:24:09', 297),
('DoctrineMigrations\\Version20220311175108', '2022-03-11 17:52:30', 3411),
('DoctrineMigrations\\Version20220312110100', '2022-03-12 11:02:01', 648),
('DoctrineMigrations\\Version20220313112124', '2022-03-13 11:21:42', 4698),
('DoctrineMigrations\\Version20220313121552', '2022-03-13 12:16:04', 1004),
('DoctrineMigrations\\Version20220315100438', '2022-03-15 10:04:58', 392),
('DoctrineMigrations\\Version20220316090600', '2022-03-16 09:06:06', 346),
('DoctrineMigrations\\Version20220316091426', '2022-03-16 09:14:30', 273),
('DoctrineMigrations\\Version20220316093154', '2022-03-16 09:32:01', 156),
('DoctrineMigrations\\Version20220316102813', '2022-03-16 10:28:31', 136),
('DoctrineMigrations\\Version20220318170625', '2022-03-18 17:07:16', 9591),
('DoctrineMigrations\\Version20220318171145', '2022-03-18 17:11:58', 1244),
('DoctrineMigrations\\Version20220319084849', '2022-03-19 08:49:48', 1259),
('DoctrineMigrations\\Version20220319122655', '2022-03-19 12:27:13', 1244),
('DoctrineMigrations\\Version20220322155401', '2022-03-22 15:54:38', 3023),
('DoctrineMigrations\\Version20220322161236', '2022-03-22 16:12:50', 1895),
('DoctrineMigrations\\Version20220323145930', '2022-03-23 14:59:59', 8249);

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
-- Structure de la table `doc_actions_masters`
--

DROP TABLE IF EXISTS `doc_actions_masters`;
CREATE TABLE IF NOT EXISTS `doc_actions_masters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `doc_actions_id` int(11) DEFAULT NULL,
  `titledocactionsmaster` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkdocactionsmaster` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_4B8EC35F8B16C204` (`doc_actions_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `equipments`
--

DROP TABLE IF EXISTS `equipments`;
CREATE TABLE IF NOT EXISTS `equipments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `equipementsstorages_id` int(11) DEFAULT NULL,
  `equipmentsaffectations_id` int(11) DEFAULT NULL,
  `equipmentsusers_id` int(11) DEFAULT NULL,
  `nameequipement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantityequipment` double DEFAULT NULL,
  `quantityminiequipment` double DEFAULT NULL,
  `daterebusequipment` date DEFAULT NULL,
  `loanequipment` date DEFAULT NULL,
  `borrowerequipment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6F6C25445A0A5C2C` (`equipementsstorages_id`),
  KEY `IDX_6F6C2544F5B36E0C` (`equipmentsaffectations_id`),
  KEY `IDX_6F6C254433B541AC` (`equipmentsusers_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `equipments`
--

INSERT INTO `equipments` (`id`, `equipementsstorages_id`, `equipmentsaffectations_id`, `equipmentsusers_id`, `nameequipement`, `quantityequipment`, `quantityminiequipment`, `daterebusequipment`, `loanequipment`, `borrowerequipment`) VALUES
(1, 1, 4, NULL, 'Video Projecteur', 1, 1, NULL, NULL, NULL),
(2, NULL, 1, NULL, 'Pelle', 1, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `fieldtripphotos`
--

DROP TABLE IF EXISTS `fieldtripphotos`;
CREATE TABLE IF NOT EXISTS `fieldtripphotos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fieldstripsorigin_id` int(11) DEFAULT NULL,
  `filefieldtripphoto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `altfieldtripphoto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_F09AAB91C1C7BE9B` (`fieldstripsorigin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `fieldtripphotos`
--

INSERT INTO `fieldtripphotos` (`id`, `fieldstripsorigin_id`, `filefieldtripphoto`, `altfieldtripphoto`) VALUES
(15, 1, '158b03c5df5bdc93959230d97ee4fc3a.jpg', 'Le pic aux loups'),
(16, 1, 'ad868bd22c511ddfd3117b6496b2a401.jpg', NULL),
(17, 1, '4951f78d432b8a707eddbcc7570917fb.webp', NULL),
(18, 1, '39dffd32d7dbdcd443f84c7abd214d99.jpg', NULL),
(19, 2, '96fb4df8f79214c918bbb21b927309cb.jpg', 'Les Grands Causses table'),
(20, 2, 'd89319322b00a8a0961dbdb017a65e84.jpg', NULL),
(21, 2, 'b263fb167bc727ca0c1db3cf7752c350.png', 'Le pic'),
(22, 2, '44dcdf3cc9eae88ea91af5fc00c0cf49.jpg', NULL),
(23, 3, '1b7693dbe6dbcc9641426099c178ce69.jpg', NULL),
(24, 3, 'c1f811b070be42b64d53190e18df6265.jpg', NULL),
(25, 3, 'b845ba2b88884483d13b548bba51e6fb.jpg', NULL),
(26, 3, '73970bf672b341b616d6d2b21b598887.jpg', NULL),
(27, 3, 'e0e3319aeb4afdb0af16e08173f4354f.jpg', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `fieldtrips`
--

DROP TABLE IF EXISTS `fieldtrips`;
CREATE TABLE IF NOT EXISTS `fieldtrips` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usersorigin_id` int(11) DEFAULT NULL,
  `datefieldtrip` date DEFAULT NULL,
  `titlefieldtrip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picturefieldtrip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `textfieldtrip` longtext COLLATE utf8mb4_unicode_ci,
  `altpicturefieldtrip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shorttextfieldtrip` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `IDX_E49A697B3231D76` (`usersorigin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `fieldtrips`
--

INSERT INTO `fieldtrips` (`id`, `usersorigin_id`, `datefieldtrip`, `titlefieldtrip`, `picturefieldtrip`, `textfieldtrip`, `altpicturefieldtrip`, `shorttextfieldtrip`) VALUES
(1, NULL, '2022-04-20', 'Visite sur le Pic Saint Loup', 'imageMontagneMontpellier-622e33469280d.jpg', '<h2>Une randonn&eacute;e sur le Pic Saint Loup</h2>\r\n\r\n<p>Avis aux sportifs et aux amoureux de la nature ! Notre premi&egrave;re id&eacute;e de balade aux alentours de Montpellier prend la direction du&nbsp;<strong>Pic Saint Loup</strong>. Cet endroit est bien connu des Montpelli&eacute;rains et pour cause : le Pic Saint Loup peut &ecirc;tre aper&ccedil;u &agrave; peu pr&egrave;s partout lorsque l&#39;on sillonne les routes de la r&eacute;gion. Le Pic Saint Loup est m&ecirc;me visible de la mer ce qui lui vaut une comparaison avec la montagne Sainte Victoire.</p>\r\n\r\n<p>Le Pic Saint Loup est en effet&nbsp;<strong>une montagne entre les C&eacute;vennes et l&#39;H&eacute;rault qui culmine &agrave; 658 m d&#39;altitude.</strong>&nbsp;Situ&eacute; &agrave; 20 km au nord de Montpellier, le Pic Saint Loup est un endroit privil&eacute;gi&eacute; pour les personnes souhaitant gravir la montagne et atteindre son sommet. En haut du Pic Saint Loup, les courageux randonneurs pourront retrouver une grande croix de fer, un poste d&#39;observation ainsi que la chapelle d&#39;un ancien ermitage. Mais c&#39;est surtout pour&nbsp;<strong>l&#39;impressionnante vue sur toute la r&eacute;gion ainsi que sur la mer M&eacute;diterran&eacute;e</strong>&nbsp;que les habitants de la r&eacute;gion et les touristes se pressent &agrave; son sommet.</p>\r\n\r\n<p>Avec la montagne de l&#39;Hortus qui lui fait face au Nord tel un double miniature, le Pic Saint Loup est le site naturel prot&eacute;g&eacute; le plus beau de la r&eacute;gion des Garrigues.</p>\r\n\r\n<p>O&ugrave; aller : le Pic Saint Loup se trouve &agrave; environ&nbsp;<strong>45 minutes de route&nbsp;</strong>de Montpellier pr&egrave;s des villages de Valflaun&egrave;s et Cazevieille.</p>\r\n\r\n<p>Le meilleur moment pour d&eacute;couvrir le site : nous vous conseillons de privil&eacute;gier cette randonn&eacute;e&nbsp;<strong>au printemps ou en automne.</strong>&nbsp;L&#39;ascension du Pic demande d&eacute;j&agrave; un effort physique, inutile de vous compliquer la t&acirc;che en faisant cette randonn&eacute;e en plein soleil. Pensez d&#39;ailleurs &agrave; pr&eacute;voir une bouteille d&#39;eau et &eacute;ventuellement un encas.</p>\r\n\r\n<p>Bon &agrave; savoir : pour profiter encore un peu plus du lieu, nous vous conseillons de vous y rentre &agrave; l&#39;occasion des&nbsp;<strong>M&eacute;di&eacute;vales du Grand Pic Saint Loup</strong>&nbsp;qui se d&eacute;roule chaque ann&eacute;e et qui propose des animations autour des chevaliers.</p>', 'Pic Saint Loup', 'Généralement, on utilise un texte en faux latin (le texte ne veut rien dire, il a été modifié), le Lorem ipsum ou Lipsum, qui permet donc de faire office de texte d\'attente. L\'avantage de le mettre en latin est que l\'opérateur sait au premier coup d\'oeil que la page contenant ces lignes n\'est pas valide, et surtout l\'attention du client n\'est pas dérangée par le contenu, il demeure concentré seulement sur l\'aspect graphique. Ce texte a pour autre avantage d\'utiliser des mots de longueur varia500ble, essayant de simuler une occupation normale. La méthode simpliste consistant à copier-coller un court texte plusieurs fois (« ceci est un faux-texte ceci est un faux-texte ceci est un faux-texte ceci est un faux-texte ceci est un faux-texte »)750 a l\'inconvénient de ne pas permettre une juste appréciation typographique du résultat final. Il circule des centaines de versions différentes du Lorem ipsum, mais ce texte aurait originellement été tiré de l\'ouvrage de Cicéron, De Finibus Bonoru1000'),
(2, NULL, '2022-06-12', 'Les Grands Causses', 'causse-table-d-orientation-du-calyar-e-brendle-622f3e7cd4b15.jpg', '<h2>Arides, aust&egrave;res et fascinants</h2>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">On a l&rsquo;impression que derri&egrave;re cette muraille c&eacute;venole s&rsquo;&eacute;l&egrave;vent d&rsquo;autres monts semblables.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Mais c&rsquo;est compter sans la diversit&eacute; de nos paysages !</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Derri&egrave;re S&eacute;ranne et C&eacute;vennes se dressent les Grands Causses, et notamment ceux du Larzac et de Blandas. Un autre univers, fait d&rsquo;herbages, de murets de pierres s&egrave;ches, o&ugrave; depuis toujours, l&rsquo;eau est un tr&eacute;sor jalousement gard&eacute;.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">C&rsquo;est aussi le pays des grands espaces aux roches ruiniformes, et des gorges sauvages. Sous les plateaux karstiques, on ne compte plus les grottes et autres cavit&eacute;s souterraines. Ici, c&#39;est le paradis des milans, vautours, faucons et autres circa&egrave;tes. Certaines esp&egrave;ces sont tr&egrave;s rares et menac&eacute;es. Mais il n&rsquo;est pas rare d&rsquo;observer ces majestueux rapaces dans les cieux des Grands Causses.</span></span></p>', 'Arides, austères et fascinants', NULL),
(3, NULL, '2022-05-11', 'Tour du pic et de la grotte d’Anjeau', 'anjeau-adret-46cd8-622f4dc327fe1.jpg', '<h3><u><strong>Aller&nbsp;:</strong></u></h3>\r\n\r\n<p>Au parking de l&rsquo;<strong>accrobranche&nbsp;</strong>prendre la piste de l&rsquo;autre c&ocirc;t&eacute; de la route.</p>\r\n\r\n<p>Suivre le chemin direction la&nbsp;<strong>grotte d&rsquo;Anjeau</strong>&nbsp;et le&nbsp;<strong>pied d&rsquo;Anjeau</strong>&nbsp;(panneau indicateur).</p>\r\n\r\n<p>Apr&egrave;s une demi-heure de marche au lieu dit la&nbsp;<strong>Baraquette&nbsp;</strong>prendre le sentier de droite et passer la barri&egrave;re marqu&eacute;e d&rsquo;un balisage jaune. On suit alors la piste par l&rsquo;adret de la montagne dans les&nbsp;<strong>buis et ch&ecirc;nes</strong>. La flore est de type m&eacute;diterran&eacute;enne.</p>\r\n\r\n<p>Suivre le sentier et le balisage direction le&nbsp;<strong>pied d&rsquo;Anjeau</strong>.</p>\r\n\r\n<p>Au pied d&rsquo;Anjeau prendre soit&nbsp;:</p>\r\n\r\n<ul>\r\n	<li>Direction la grotte d&rsquo;Anjeau, puis faire demi-tour,</li>\r\n	<li>Direction Montdardier pour faire la boucle (&agrave; l&rsquo;ubac de la montagne).</li>\r\n</ul>\r\n\r\n<p><em><strong>PS</strong>&nbsp;: pour aller au&nbsp;<strong>Roc Castel</strong>&nbsp;de la Baraquette, continuer tout droit. Un sentier&nbsp;<strong>escarp&eacute;</strong>&nbsp;vous attend. Arriv&eacute; au sommet, belle vue sur les Causses et le pic d&rsquo;Anjeau. C&rsquo;est un cul de sac, redescendre par le m&ecirc;me c&ocirc;t&eacute;.</em></p>\r\n\r\n<h3><u><strong>Retour&nbsp;:</strong></u></h3>\r\n\r\n<p><strong>Au pied d&rsquo;Anjeau</strong>&nbsp;prendre la direction&nbsp;<strong>Montdardier</strong>. Le sentier est bois&eacute; de&nbsp;<strong>pins noirs d&rsquo;Autriche</strong>&nbsp;et les&nbsp;<strong>coucous&nbsp;</strong>(primev&egrave;res &agrave; longues tiges) sont l&eacute;gions.</p>\r\n\r\n<p>Arriv&eacute; de nouveau &agrave; la Baraquette, redescendre la piste direction l&rsquo;accrobranche et le parking.</p>', 'Pic Anjeau', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `functions`
--

DROP TABLE IF EXISTS `functions`;
CREATE TABLE IF NOT EXISTS `functions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mission` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_function` longtext COLLATE utf8mb4_unicode_ci,
  `level_function` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `functions`
--

INSERT INTO `functions` (`id`, `mission`, `description_function`, `level_function`) VALUES
(1, 'Président', 'Dirige l\'association', 1),
(2, 'Trésorier', 'Trésorier de l\'association.\r\nGère les comptes', 4),
(3, 'Secrétaire', 'S\'occupe de l\'ensemble du courrier,\r\nDoit être capable de gérer le site', 2),
(4, 'Trésorier Adjoint', 'Contenu vide', 5),
(5, 'Secrétaire Adjoint', 'Contenu vide', 3);

-- --------------------------------------------------------

--
-- Structure de la table `grouping_partners`
--

DROP TABLE IF EXISTS `grouping_partners`;
CREATE TABLE IF NOT EXISTS `grouping_partners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_grouping_partner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `grouping_partners`
--

INSERT INTO `grouping_partners` (`id`, `title_grouping_partner`) VALUES
(1, 'Nos partenaires institutionnels'),
(2, 'Les structures amis'),
(3, 'Nos partenaires financiers'),
(4, 'Nos partenaires médias');

-- --------------------------------------------------------

--
-- Structure de la table `internships`
--

DROP TABLE IF EXISTS `internships`;
CREATE TABLE IF NOT EXISTS `internships` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titleinternship` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `offerinternship` longtext COLLATE utf8mb4_unicode_ci,
  `placeintership` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `startinternship` date DEFAULT NULL,
  `endinternship` date DEFAULT NULL,
  `linkinternship` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shorttextinternship` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `internships`
--

INSERT INTO `internships` (`id`, `titleinternship`, `offerinternship`, `placeintership`, `startinternship`, `endinternship`, `linkinternship`, `shorttextinternship`) VALUES
(1, 'ECOGARDE H/F', '<h3>Contexte du recrutement et d&eacute;finition de poste :</h3>\r\n\r\n<p>Au sein du p&ocirc;le D&eacute;veloppement Territorial et des Transitions, le Service environnement recrute un(e) &eacute;cogarde pour le site Natura 2000 &laquo;&nbsp;marais de Talmont et zones littorales entre les Sables d&rsquo;Olonne et Jard-sur-Mer&nbsp;&raquo; et sur la commune de Talmont-Saint-Hilaire.</p>\r\n\r\n<p>Plac&eacute; sous l&#39;autorit&eacute; de l&rsquo;animateur Natura 2000, l&rsquo;&eacute;cogarde exercera les missions suivantes&nbsp;: &nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Missions de sensibilisation et de communication&nbsp;:</strong></p>\r\n\r\n<ul>\r\n	<li>Lors des patrouilles, informer, expliquer et sensibiliser les usagers et les visiteurs de l&rsquo;espace naturel &agrave; la r&eacute;glementation en vigueur, la fragilit&eacute; des milieux naturels, les enjeux de pr&eacute;servation et les bons comportements &agrave; adopter en milieu naturel</li>\r\n	<li>Elaborer des outils de communication et de sensibilisation sur le site Natura 2000</li>\r\n	<li>Coordonner et mettre en &oelig;uvre, en p&eacute;riode estivale, un programme d&rsquo;animation et de sensibilisation &agrave; destination du grand public en lien avec l&rsquo;ensemble des acteurs locaux,</li>\r\n</ul>\r\n\r\n<p><strong>Missions de police&nbsp;:</strong></p>\r\n\r\n<ul>\r\n	<li>Organiser et assurer les missions de police de la nature sur le site Natura 2000 (patrouille de surveillance, information, sensibilisation, verbalisation&hellip;)</li>\r\n	<li>Assurer une veille environnementale sur le site et autour du site</li>\r\n	<li>Organiser et exercer les activit&eacute;s de police de la nature avec les autres services de police</li>\r\n</ul>\r\n\r\n<p><strong>Missions de gestion et de restauration des espaces naturels&nbsp;et suivis naturalistes :</strong></p>\r\n\r\n<ul>\r\n	<li>Appuyer l&rsquo;animateur Natura 2000 pour la planification des chantiers de gestion/restauration des espaces naturels</li>\r\n	<li>R&eacute;aliser les travaux d&#39;entretien &eacute;cologique r&eacute;guliers (d&eacute;broussaillage&hellip;) et des &eacute;quipements sur le terrain (ganivelles, cl&ocirc;tures...)</li>\r\n	<li>R&eacute;alisation / participation aux inventaires naturalistes du site Natura 2000</li>\r\n</ul>\r\n\r\n<p><strong>Missions transversales&nbsp;:</strong></p>\r\n\r\n<ul>\r\n	<li>Superviser, coordonner et encadrer en p&eacute;riode estivale une &eacute;quipe de deux &eacute;cogardes</li>\r\n	<li>Participer &agrave; la gestion administrative et financi&egrave;re</li>\r\n	<li>Assurer le lien avec les acteurs locaux</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Conditions d&rsquo;exercice&nbsp;:</strong></p>\r\n\r\n<p><strong>Lieu d&rsquo;affectation</strong>&nbsp;: Communaut&eacute; de Communes Vend&eacute;e Grand Littoral</p>\r\n\r\n<p><strong>Lieu de travail</strong>&nbsp;: Site Natura 2000 &laquo;&nbsp;marais de Talmont-saint-Hilaire et zones littorales entre les Sables d&rsquo;Olonne et Jard-sur-Mer&nbsp;&raquo; et commune de Talmont-saint-Hilaire</p>\r\n\r\n<p><strong>Temps</strong><strong>&nbsp;de travail</strong>&nbsp;:Temps Complet 35h/semaine</p>\r\n\r\n<p><strong>Contraintes</strong>&nbsp;: travail les week-end et jours f&eacute;ri&eacute;s en p&eacute;riode estivale / uniforme</p>\r\n\r\n<p><strong>Date de prise de poste : &agrave; partir du 15 mai 2022</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Candidatures (Lettre de motivation + CV) &agrave; adresser &agrave; :</strong></p>\r\n\r\n<p>Monsieur le Pr&eacute;sident - Communaut&eacute; de communes Vend&eacute;e Grand Littoral</p>\r\n\r\n<p>35 impasse du Luthier - ZI du P&acirc;tis 1 - BP 20 - 85440 TALMONT SAINT HILAIRE</p>\r\n\r\n<p>ou &agrave; l&rsquo;adresse&nbsp;<a href=\"mailto:recrutement@vendeegrandlittoral.fr\">recrutement@vendeegrandlittoral.fr</a></p>\r\n\r\n<p><strong>Pr&eacute;ciser l&rsquo;objet : &laquo; candidature poste d&rsquo;Ecogarde &raquo;</strong></p>\r\n\r\n<p>Pour toutes questions techniques vous pouvez contacter Guillaume DA SILVA, Animateur Natura 2000 tel : 02 51 20 72 07.</p>\r\n\r\n<h3>Profil recherch&eacute; :</h3>\r\n\r\n<p><strong>Niveau de formation et exp&eacute;rience requise :</strong></p>\r\n\r\n<p>Bac+2/+3 dans le domaine de l&rsquo;environnement (BTS GPN, Licence pro Gestionnaire des espaces naturels etc) ou Bac avec exp&eacute;rience significative</p>\r\n\r\n<p><strong>Garde asserment&eacute; et commissionn&eacute; fortement appr&eacute;ci&eacute;</strong>&nbsp;ou apte &agrave; le devenir</p>\r\n\r\n<p>Exp&eacute;rience souhait&eacute;e dans une missions similaire ou dans la gestion des espaces naturels et/ou la sensibilisation &agrave; l&rsquo;environnement&nbsp;</p>\r\n\r\n<p>Permis B indispensable</p>\r\n\r\n<p>Pratique de l&#39;anglais fortement souhait&eacute;e, la pratique d&#39;autres langues &eacute;trang&egrave;res serait un plus</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Connaissances</strong><strong>&nbsp;:</strong></p>\r\n\r\n<ul>\r\n	<li>Connaissance de la r&eacute;glementation des espaces naturels et des esp&egrave;ces prot&eacute;g&eacute;es</li>\r\n	<li>Connaissance des devoirs et pouvoirs de l&rsquo;&eacute;cogarde et du garde du littoral</li>\r\n	<li>Connaissances des techniques d&rsquo;entretien et de gestion des espaces naturels</li>\r\n	<li>Techniques d&rsquo;utilisation et de maintenance des outils et du mat&eacute;riel de g&eacute;nie &eacute;cologique : tron&ccedil;onneuse, d&eacute;broussailleuse&hellip;</li>\r\n	<li>Connaissances des techniques d&rsquo;animation et/ou de communication (au moins l&rsquo;un des deux domaines)</li>\r\n	<li>Connaissances g&eacute;n&eacute;ralistes en &eacute;cologie et en gestion des milieux naturels (en particulier littorales, appr&eacute;ci&eacute;es)</li>\r\n	<li>Connaissances naturalistes appr&eacute;ci&eacute;es</li>\r\n</ul>\r\n\r\n<p><strong>Savoir-faire</strong><strong>&nbsp;:</strong></p>\r\n\r\n<ul>\r\n	<li>Pratique de la police de la nature</li>\r\n	<li>R&eacute;gulation des conflits</li>\r\n	<li>Sens de la p&eacute;dagogie et du partage des connaissances</li>\r\n	<li>R&eacute;alisation d&rsquo;outil de communication et de p&eacute;dagogie (plaquette, site internet&hellip;)</li>\r\n	<li>Organisation et suivi de chantiers</li>\r\n	<li>Mise en &oelig;uvre de protocoles scientifiques et techniques</li>\r\n	<li>&Eacute;laboration de documents scientifiques et techniques (cartes, rapports &hellip;)</li>\r\n	<li>Maitrise des outils bureautiques</li>\r\n</ul>\r\n\r\n<p><strong>Capacit&eacute;s Savoir-&ecirc;tre</strong></p>\r\n\r\n<ul>\r\n	<li>Ma&icirc;trise de soi et fermet&eacute;, concertation et dialogue</li>\r\n	<li>Disponibilit&eacute;,</li>\r\n	<li>Autonomie, r&eacute;activit&eacute;, initiative et anticipation</li>\r\n	<li>Sens de l&rsquo;observation</li>\r\n	<li>Capacité de travail en &eacute;quipe</li>\r\n	<li>Adaptabilit&eacute; (conditions de terrain, m&eacute;t&eacute;o,)</li>\r\n	<li>Go&ucirc;t pour le travail manuel et le travail en ext&eacute;rieur</li>\r\n</ul>', 'COMMUNAUTÉ DE COMMUNES VENDÉE GRAND LITTORAL', '2023-05-15', '2023-05-15', 'https://www.reseau-tee.net/83992_offre-emploi-ecogarde-h-f.html', 'Généralement, on utilise un texte en faux latin (le texte ne veut rien dire, il a été modifié), le Lorem ipsum ou Lipsum, qui permet donc de faire office de texte d\'attente. L\'avantage de le mettre en latin est que l\'opérateur sait au premier coup d\'oeil que la page contenant ces lignes n\'est pas valide, et surtout l\'attention du client n\'est pas dérangée par le contenu, il demeure concentré seulement sur l\'aspect graphique. Ce texte a pour autre avantage d\'utiliser des mots de longueur varia500ble, essayant de simuler une occupation normale. La méthode simpliste consistant à copier-coller un court texte plusieurs fois (« ceci est un faux-texte ceci est un faux-texte ceci est un faux-texte ceci est un faux-texte ceci est un faux-texte »)750 a l\'inconvénient de ne pas permettre une juste appréciation typographique du résultat final. Il circule des centaines de versions différentes du Lorem ipsum, mais ce texte aurait originellement été tiré de l\'ouvrage de Cicéron, De Finibus Bonoru1000'),
(2, 'Chargé d’études naturaliste spécialisé ornithologie et herpéthologie H/F', '<h3><span style=\"color:#2ecc71\"><strong>Contexte du recrutement et d&eacute;finition de poste :</strong></span></h3>\r\n\r\n<p>Contexte du recrutement et d&eacute;finition de poste :</p>\r\n\r\n<p><strong>Contexte du recrutement</strong></p>\r\n\r\n<p>L&rsquo;Agence VISU est un bureau d&rsquo;&eacute;tudes en environnement sp&eacute;cialis&eacute; dans l&rsquo;expertise &eacute;cologique, notamment dans le cadre de projets d&rsquo;&eacute;nergies renouvelables.</p>\r\n\r\n<p>Afin de compl&eacute;ter et renforcer son &eacute;quipe, l&rsquo;Agence VISU recherche un(e) charg&eacute;(e) d&rsquo;&eacute;tudes naturaliste sp&eacute;cialis&eacute;(e) en ornithologie et herp&eacute;tologie.</p>\r\n\r\n<p>Au sein d&rsquo;une &eacute;quipe d&rsquo;&eacute;cologues, de paysagistes et d&rsquo;urbanistes, le/la charg&eacute;(e) d&rsquo;&eacute;tudes naturaliste m&egrave;nera les inventaires de terrain, participera &agrave; la r&eacute;alisation des &eacute;tudes et suivis &eacute;cologiques et la r&eacute;daction des dossiers r&egrave;glementaires.</p>\r\n\r\n<p>Le ou la charg&eacute;(e) d&rsquo;&eacute;tudes sera principalement amen&eacute;(e) &agrave; r&eacute;aliser des inventaires et &agrave; r&eacute;diger et cartographier les enjeux relev&eacute;s pour des volets Milieu naturel d&rsquo;&eacute;tudes d&rsquo;impact, des diagnostics ou pr&eacute;-diagnostic &eacute;cologiques. Il interviendra &eacute;galement sur des &eacute;valuations d&rsquo;incidences Natura 2000 et des dossiers CNPN. Il pourra &eacute;galement &ecirc;tre sollicit&eacute; pour la r&eacute;alisation de volets environnementaux de PLU.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>D&eacute;tail du poste</p>\r\n\r\n<p><strong>Poste en t&eacute;l&eacute;travail et d&eacute;placement pour les inventaires (Corse notamment)</strong></p>\r\n\r\n<p><strong>Missions&nbsp;:</strong></p>\r\n\r\n<p>Le/la charg&eacute;(e) d&rsquo;&eacute;tude aura pour principales missions :</p>\r\n\r\n<ul>\r\n	<li>R&eacute;aliser des missions d&rsquo;inventaire ornithologique/herp&eacute;tologique et de diagnostic des populations d&rsquo;oiseaux et de reptiles, avec mise en &oelig;uvre de protocoles standardis&eacute;s,</li>\r\n	<li>Assister les charg&eacute;s d&rsquo;&eacute;tude en place sur des inventaires/&eacute;tudes sur la faune (mammif&egrave;res, amphibiens, reptiles, oiseaux, chiropt&egrave;res...) ou la flore, suivant les comp&eacute;tences,</li>\r\n	<li>Effectuer la saisie informatique des donn&eacute;es (tableur et SIG) et la r&eacute;alisation des cartographies,</li>\r\n	<li>Analyser des donn&eacute;es et caract&eacute;riser des populations (analyse qualitative et quantitative, d&eacute;finition des enjeux).</li>\r\n	<li>&Eacute;laborer les comptes rendus d&rsquo;observation (expertise, diagnostic &eacute;cologique), comprenant notamment la production de documents cartographiques sous SIG&nbsp;;</li>\r\n	<li>R&eacute;diger des documents r&eacute;glementaires de type document d&rsquo;incidences Natura 2000, dossier CNPN&nbsp;;</li>\r\n	<li>Participer &agrave; l&rsquo;&eacute;laboration de document plus global, de type &eacute;tude d&rsquo;impact ;</li>\r\n</ul>\r\n\r\n<p><strong>Rayonnement de l&rsquo;entreprise&nbsp;:</strong>&nbsp;<strong>Corse principalement&nbsp;</strong>mais possible assistance sur des projets en PACA ou LR</p>\r\n\r\n<p><strong>Des d&eacute;placements tr&egrave;s r&eacute;guliers sur la Corse sont &agrave; pr&eacute;voir durant la saison de terrain</strong></p>\r\n\r\n<p><strong>Contrat&nbsp;:</strong>&nbsp;CDD de 6 mois avec possibilit&eacute; de renouvellement en arri&egrave;re saison pour la r&eacute;daction</p>\r\n\r\n<p><strong>Prise de fonction&nbsp;:</strong>&nbsp;d&eacute;but &agrave; mi Avril 2021 au plus tard</p>\r\n\r\n<p><strong>Temps plein/partiel :&nbsp;</strong>temps plein</p>\r\n\r\n<p><strong>Travail de jour / de nuit :&nbsp;</strong>Travail de jour principalement, en fonction des enjeux en pr&eacute;sence. Possibilit&eacute; de travail en soir&eacute;e</p>\r\n\r\n<p><strong>R&eacute;mun&eacute;ration&nbsp;:</strong>&nbsp;selon profil et exp&eacute;rience&nbsp;; frais de d&eacute;placement int&eacute;gralement pris en charge par la soci&eacute;t&eacute;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><span style=\"color:#2ecc71\"><strong>Profil recherch&eacute; :</strong></span></h3>\r\n\r\n<p>Profil et comp&eacute;tences requises</p>\r\n\r\n<p>Bac + 3 (Licence professionnelle non limitant, en fonction de l&rsquo;exp&eacute;rience et de la personnalit&eacute; et de bonne connaissance en entomologie) &agrave; Bac + 5 en &eacute;cologie (profil ing&eacute;nieur &eacute;cologue)</p>\r\n\r\n<p>Exp&eacute;rience en bureau d&rsquo;&eacute;tude appr&eacute;ci&eacute;e</p>\r\n\r\n<p>Tr&egrave;s bonnes connaissances en ornithologie et herp&eacute;thologie (contexte m&eacute;diterran&eacute;en)</p>\r\n\r\n<p>Connaissance des techniques d&rsquo;&eacute;chantillonnage</p>\r\n\r\n<p>Connaissance des protocoles de caract&eacute;risation et de d&eacute;limitation des zones humides</p>\r\n\r\n<p>Connaissances d&rsquo;autres groupes de faune ou flore tr&egrave;s appr&eacute;ci&eacute;es</p>\r\n\r\n<p>Ma&icirc;trise de la r&eacute;daction et du formalisme des dossiers r&egrave;glementaires (VNEI, EIN2000, CNPN etc.)</p>\r\n\r\n<p>Bonne connaissance de QGIS et des logiciels de bureautique classiques</p>\r\n\r\n<p>Exp&eacute;rience dans la r&eacute;daction des volets environnementaux de PLU appr&eacute;ci&eacute;e</p>\r\n\r\n<p>Tr&egrave;s bonne capacit&eacute; r&eacute;dactionnelle (des exemples de publications seront appr&eacute;ci&eacute;es)</p>\r\n\r\n<p>Esprit d&rsquo;analyse et de synth&egrave;se</p>\r\n\r\n<p>Sens de l&rsquo;organisation</p>\r\n\r\n<p>Autonomie et rigueur indispensable pour un poste en t&eacute;l&eacute;travail</p>\r\n\r\n<p>Permis B indispensable.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Contact</p>\r\n\r\n<p>Merci d&rsquo;adresser votre candidature (CV et Lettre de Motivation en format pdf exclusivement) &agrave;&nbsp;<a href=\"mailto:r.marichy@agencevisu.com\">r.marichy@agencevisu.com</a>, c.gombault@agencevisu.com et&nbsp;<a href=\"mailto:contact@agencevisu.com\">contact@agencevisu.com</a>&nbsp;avec pour objet&nbsp;: offre Charg&eacute;(e) d&rsquo;&eacute;tudes ornitho/herp&eacute;tho&nbsp;</p>\r\n\r\n<p>Les CV seront analys&eacute;s rapidement pour une prise de poste au plus t&ocirc;t, une r&eacute;ponse vous sera ensuite donn&eacute;e par e-mail ou par t&eacute;l&eacute;phone.</p>\r\n\r\n<p>Dans le cas o&ugrave; votre candidature nous int&eacute;resserait un premier entretien t&eacute;l&eacute;phonique peut &ecirc;tre envisag&eacute;. Un second entretien aura lieu en fonction des conditions de d&eacute;placements possibles. Un test &eacute;crit sur une th&eacute;matique donn&eacute;e pourra &ecirc;tre envisag&eacute; pour juger de l&rsquo;aisance r&eacute;dactionnel et de l&rsquo;esprit de synth&egrave;se.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Nous conserverons n&eacute;anmoins les candidatures non retenues au deuxi&egrave;me entretien si d&rsquo;autres opportunit&eacute;s venaient &agrave; se cr&eacute;er.</p>\r\n\r\n<p>Conform&eacute;ment aux dispositions de la r&eacute;glementation RGPD du 25 mai 2018, vous disposez &agrave; tout moment d&rsquo;un droit d&rsquo;acc&egrave;s, de communication, de rectification, d&rsquo;actualisation et de suppression des donn&eacute;es personnelles vous concernant. Pour ce faire, vous pouvez envoyer votre demande &agrave; l&#39;adresse :&nbsp;<a href=\"mailto:r.marichy@agencevisu.com\">r.marichy@agencevisu.com</a>, c.gombault@agencevisu.com et&nbsp;<a href=\"mailto:contact@agencevisu.com\">contact@agencevisu.com</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>AGENCE VISU</p>\r\n\r\n<p>R&eacute;sidence A Spusata</p>\r\n\r\n<p>20090 - AJACCIO</p>\r\n\r\n<p>T&eacute;l. : 04 95 73 18 53</p>\r\n\r\n<p>Fax : 04 95 73 18 53</p>\r\n\r\n<p>Email :&nbsp;<a href=\"mailto:agencevisu@gmail.com\">agencevisu@gmail.com</a></p>\r\n\r\n<p>Siret : 50367136400019</p>\r\n\r\n<p>&nbsp;http://www.agencevisu.com/</p>', 'Corse', '2022-04-15', NULL, 'https://www.reseau-tee.net/83984_offre-emploi-chargn-dantudes-naturaliste-spncialisn-ornithologie-et-herpnthologie-h-f.html', 'Généralement, on utilise un texte en faux latin (le texte ne veut rien dire, il a été modifié), le Lorem ipsum ou Lipsum, qui permet donc de faire office de texte d\'attente. L\'avantage de le mettre en latin est que l\'opérateur sait au premier coup d\'oeil que la page contenant ces lignes n\'est pas valide, et surtout l\'attention du client n\'est pas dérangée par le contenu, il demeure concentré seulement sur l\'aspect graphique. Ce texte a pour autre avantage d\'utiliser des mots de longueur varia500ble, essayant de simuler une occupation normale. La méthode simpliste consistant à copier-coller un court texte plusieurs fois (« ceci est un faux-texte ceci est un faux-texte ceci est un faux-texte ceci est un faux-texte ceci est un faux-texte »)750 a l\'inconvénient de ne pas permettre une juste appréciation typographique du résultat final. Il circule des centaines de versions différentes du Lorem ipsum, mais ce texte aurait originellement été tiré de l\'ouvrage de Cicéron, De Finibus Bonoru1000'),
(3, 'Technicien biodiversité H/F', '<h3><span style=\"color:#2ecc71\"><strong>Contexte du recrutement et d&eacute;finition de poste :</strong></span></h3>\r\n\r\n<p>Emploi de la fonction publique (cat&eacute;gorie B) ouvert aux titulaires et contractuels (CDD 36 mois)</p>\r\n\r\n<p>Sous l&#39;autorit&eacute; du chef du service de la gestion des risques, de l&#39;eau et de la biodiversit&eacute; mettre en oeuvre les politiques publiques en mati&egrave;re de biodiversit&eacute; et notamment:</p>\r\n\r\n<p>- conseiller les collectivit&eacute;s et les porteurs de projet,</p>\r\n\r\n<p>- informer et communiquer sur les enjeux li&eacute;s &agrave; la biodiversit&eacute;,</p>\r\n\r\n<p>- contribuer &agrave; l&#39;animation de la mission inter-services de l&#39;eau et de la biodiversit&eacute;</p>\r\n\r\n<p>- instruire les dossiers comportant un volet biodiversit&eacute;</p>\r\n\r\n<p>- participer aux contr&ocirc;les du respect des mesures impos&eacute;es dans le cadre de la s&eacute;quence &eacute;viter-r&eacute;duire-compenser</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong><span style=\"color:#2ecc71\">Profil recherch&eacute; :</span></strong></h3>\r\n\r\n<p>- connaissances techniques et r&eacute;glementaires en mati&egrave;re de biodiversit&eacute;,</p>\r\n\r\n<p>- respect des r&egrave;gles de fonctionnement de la fonction publique,</p>\r\n\r\n<p>- ma&icirc;trise de la communication orale et &eacute;crite,</p>\r\n\r\n<p>- bonne capacit&eacute; d&#39;&eacute;coute et d&#39;analyse</p>', 'Eure-et-Loir', NULL, NULL, 'https://www.reseau-tee.net/83974_offre-emploi-technicien-biodiversitn-h-f.html', NULL),
(4, 'Chargé d’études référentiels hydrauliques en marais H/F', '<h3><strong><span style=\"color:#2ecc71\">Contexte du recrutement et d&eacute;finition de poste :</span></strong></h3>\r\n\r\n<p><strong>Contexte :</strong></p>\r\n\r\n<p><br />\r\nLe plan national de gestion de l&rsquo;anguille, approuv&eacute; par la Commission europ&eacute;enne en f&eacute;vrier 2010, s&rsquo;attaque aux diverses causes du d&eacute;clin de l&rsquo;anguille en Europe : circulation entrav&eacute;e du fait de nombreux am&eacute;nagements en travers de cours d&rsquo;eau et dans les marais, d&eacute;gradation des habitats, pollution des eaux et des s&eacute;diments, p&ecirc;che et braconnage.<br />\r\nD&rsquo;une mani&egrave;re plus g&eacute;n&eacute;rale, la transparence des ouvrages &agrave; la mer et une meilleure gestion hydraulique des marais littoraux sont des leviers importants pour la pr&eacute;servation des populations piscicoles qu&rsquo;elles soient dulcicoles, amphihalines ou marines. L&rsquo;&eacute;tude et la connaissance du fonctionnement de ces territoires doivent faire l&rsquo;objet d&rsquo;une attention particuli&egrave;re, pour accompagner la mise en oeuvre :<br />\r\n- du plan national de gestion de l&rsquo;anguille,<br />\r\n- de l&rsquo;action 49 et 9 du plan national d&rsquo;actions en faveur des milieux humides (PNAZH 2014-2018) : &laquo; Conna&icirc;tre et &eacute;valuer le potentiel des milieux littoraux pour l&rsquo;accueil des populations piscicoles comme l&rsquo;anguille europ&eacute;enne &raquo; et &laquo; Bancariser les inventaires de zones humides et marais &raquo;.<br />\r\nDans le cadre de la convention de coop&eacute;ration 2021-2022 sign&eacute;e entre l&rsquo;Office fran&ccedil;ais de la Biodiversit&eacute; (l&rsquo;OFB) et le Forum des Marais Atlantiques (FMA), et afin de r&eacute;aliser les missions d&eacute;finies dans celle-ci, d&rsquo;un comme un accord avec l&rsquo;OFB, le FMA renforce l&rsquo;&eacute;quipe en charge de l&rsquo;action 49 et 9 du PNAZH pr&eacute;c&eacute;demment mentionn&eacute; en recrutant un CDD permettant la mise en oeuvre de ces actions &agrave; l&rsquo;&eacute;chelle du marais de la Seudre. Ce contrat permettra de contribuer &agrave; l&rsquo;int&eacute;gration des ouvrages hydrauliques sur une partie de ce marais dans la plateforme cartographique GeObs.</p>\r\n\r\n<p><br />\r\n<strong>Les missions confi&eacute;es au CDD seront :</strong></p>\r\n\r\n<p><br />\r\n&bull; R&eacute;alisation d&rsquo;un inventaire des ouvrages hydrauliques sur le marais de la Seudre sur le terrain : localisation et caract&eacute;risation des ouvrages avec utilisation d&rsquo;un appareil de g&eacute;olocalisation et d&rsquo;un appareil photo ;<br />\r\n&bull; Int&eacute;gration de ces ouvrages sur le r&eacute;f&eacute;rentiel des obstacles &agrave; l&rsquo;&eacute;coulement (ROE) sur la plateforme GeObs avec les attributs obligatoires (&eacute;tat, type, etc.) et les photos associ&eacute;es.</p>\r\n\r\n<p><strong>Dur&eacute;e de la mission :&nbsp;</strong>2 mois, &agrave; compter de mai 2022</p>\r\n\r\n<p><strong>Lieu et unit&eacute; fonctionnelle :</strong>&nbsp;L&rsquo;agent sera accueilli au FMA : 2 Quai aux Vivres - 17300 Rochefort</p>\r\n\r\n<p>La personne recrut&eacute;e b&eacute;n&eacute;ficiera de l&rsquo;appui technique de la Communaut&eacute; de Communes du Bassin de Marennes, du Syndicat Mixte du Bassin de la Seudre et de l&rsquo;OFB.<br />\r\nUn v&eacute;hicule de service sera mis &agrave; disposition pour les d&eacute;placements sur le terrain.</p>\r\n\r\n<p><strong>R&eacute;mun&eacute;ration :&nbsp;</strong>La r&eacute;mun&eacute;ration sera calcul&eacute;e sur la base de l&rsquo;indice brut 372, major&eacute;e de 343 de la fonction publique.</p>\r\n\r\n<p><br />\r\n<strong>D&eacute;poser une candidature :</strong><br />\r\nLes candidatures (CV d&eacute;taill&eacute; et lettre de motivation) sont &agrave; adresser &agrave; l&rsquo;attention de Monsieur le Directeur du Forum des Marais Atlantiques, Gilbert MIOSSEC :&nbsp;<a href=\"mailto:gmiossec@forum-marais-atl.com\">gmiossec@forum-marais-atl.com</a>.<br />\r\nLa date limite de d&eacute;p&ocirc;t des candidatures est fix&eacute;e au vendredi 8 avril 2022 &agrave; 12h00.<br />\r\nLes entretiens auront lieu la semaine 15.</p>\r\n\r\n<h3><strong><span style=\"color:#2ecc71\">Profil recherch&eacute; :</span></strong></h3>\r\n\r\n<p>Recrutement d&rsquo;un agent contractuel au grade de technicien de cat&eacute;gorie B.<br />\r\nL&rsquo;emploi sera pourvu par le recrutement d&rsquo;un agent non titulaire en application des dispositions de l&rsquo;article 3 de la loi du 26 janvier 1984 modifi&eacute;e relative &agrave; la Fonction Publique Territoriale.<br />\r\n<br />\r\n<strong><u>Dipl&ocirc;mes &ndash; Formation - Exp&eacute;rience</u></strong></p>\r\n\r\n<p>- Bac +2 &agrave; Bac +5 disposant d&rsquo;une formation en environnement ;<br />\r\n- Connaitre les outils SIG et de bases de donn&eacute;es (QGIS par exemple) ;<br />\r\n- Connaitre les grands principes de la continuit&eacute; &eacute;cologique ;<br />\r\n- La personne recrut&eacute;e sera form&eacute;e &agrave; l&rsquo;utilisation de l&rsquo;outil national GeObs, et le cas &eacute;ch&eacute;ant aux protocoles et m&eacute;thodes n&eacute;cessaires &agrave; la bonne r&eacute;alisation de sa mission.</p>\r\n\r\n<p>Autres</p>\r\n\r\n<p>- Avoir le permis de conduire</p>', 'Charente-Maritime', '2022-05-01', '2022-06-30', 'https://www.reseau-tee.net/83963_offre-emploi-chargn-dantudes-rnfnrentiels-hydrauliques-en-marais-h-f.html', NULL);

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
-- Structure de la table `link_actions_masters`
--

DROP TABLE IF EXISTS `link_actions_masters`;
CREATE TABLE IF NOT EXISTS `link_actions_masters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `links_actions_id` int(11) DEFAULT NULL,
  `titlelinkactionsmaster` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkactionmaster` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_5C08350B2AFA1A4` (`links_actions_id`)
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
  `shorttextnew` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `IDX_1DD39950D2F4F762` (`newsuser_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`id`, `date_new`, `title_new`, `picture_new`, `text_new`, `newsuser_id`, `altpicturenew`, `shorttextnew`) VALUES
(1, '2022-02-10 00:00:00', '1ere Nouvelle', 'applesChamps-770x430-6218fd7d1a364.jpg', '<p style=\"text-align:center\"><span style=\"color:#c0392b; font-family:Comic Sans MS,cursive\"><span style=\"font-size:20px\"><strong><em>TITRE</em></strong></span></span></p>\r\n\r\n<p>blabla bla</p>\r\n\r\n<p>patit</p>', 1, 'alternatif photo 1', 'Généralement, on utilise un texte en faux latin (le texte ne veut rien dire, il a été modifié), le Lorem ipsum ou Lipsum, qui permet donc de faire office de texte d\'attente. L\'avantage de le mettre en latin est que l\'opérateur sait au premier coup d\'oeil que la page contenant ces lignes n\'est pas valide, et surtout l\'attention du client n\'est pas dérangée par le contenu, il demeure concentré seulement sur l\'aspect graphique. Ce texte a pour autre avantage d\'utiliser des mots de longueur varia500'),
(2, '2022-02-16 00:00:00', '2eme Nouvelle', 'GE-6-parcours-master-gestion-environnement-621ceac082f68.jpg', '<p><span style=\"color:#c0392b\"><span style=\"font-size:48px\"><strong>TITRE 2</strong></span></span></p>', 1, 'Photo Nouvelle 2', 'Généralement, on utilise un texte en faux latin (le texte ne veut rien dire, il a été modifié), le Lorem ipsum ou Lipsum, qui permet donc de faire office de texte d\'attente. L\'avantage de le mettre en latin est que l\'opérateur sait au premier coup d\'oeil que la page contenant ces lignes n\'est pas valide, et surtout l\'attention du client n\'est pas dérangée par le contenu, il demeure concentré seulement sur l\'aspect graphique. Ce texte a pour autre avantage d\'utiliser des mots de longueur varia500ble, essayant de simuler une occupation normale. La méthode simpliste consistant à copier-coller un court texte plusieurs fois (« ceci est un faux-texte ceci est un faux-texte ceci est un faux-texte ceci est un faux-texte ceci est un faux-texte »)750');

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
  `assosparam` longtext COLLATE utf8mb4_unicode_ci,
  `masterparam` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `params`
--

INSERT INTO `params` (`id`, `text_param`, `logo_param`, `photo_param`, `email_param`, `title_param`, `address1_param`, `address2_param`, `cp_param`, `town_param`, `update_param`, `subtitleparam`, `politiqueparams`, `assosparam`, `masterparam`) VALUES
(1, '<h1 style=\"text-align:center\"><span style=\"color:#2ecc71\">L&#39;ASSOCIATION Paul Green</span></h1>\r\n\r\n<p>L&rsquo;association Ga&iuml;a a &eacute;t&eacute; fond&eacute;e il y a pr&egrave;s de 20 ans par des &eacute;tudiants du Master Gestion de l&rsquo;Environnement et du D&eacute;veloppement Durable (GEDD).</p>\r\n\r\n<p>Port&eacute;e aujourd&rsquo;hui par des &eacute;tudiants actuels et dipl&ocirc;m&eacute;s du Master GEDD, l&rsquo;Association a pour <span style=\"color:#3498db\">mission de&nbsp;d&eacute;velopper et animer le r&eacute;seau d&rsquo;alumni</span>&nbsp;du Master et de contribuer ensemble &agrave;&nbsp;des actions en faveur de l&#39;environnement et du d&eacute;veloppement durable.</p>\r\n\r\n<p>Ga&iuml;a a pour ambition de faire rayonner ses actions et ses valeurs aupr&egrave;s d&rsquo;un public plus large que le r&eacute;seau des alumnis GEDD afin de sensibiliser le plus <span style=\"color:#3498db\">grand nombre aux enjeux environnementaux</span>.</p>\r\n\r\n<h2><span style=\"color:#2ecc71\">Nos missions et projets phares :</span></h2>\r\n\r\n<h3 style=\"margin-left:80px\"><span style=\"color:#3498db\">Gestion du r&eacute;seau alumni</span></h3>\r\n\r\n<p>Par ses 30 ann&eacute;es d&rsquo;existence, le Master GEDD a permis de former pr&egrave;s de 700 professionnels sur les th&eacute;matiques vari&eacute;es du d&eacute;veloppement durable&nbsp;: de la gestion de l&rsquo;eau &agrave; la gestion des d&eacute;chets en passant par la gestion de ressources naturelles sans oublier les aspects QHSE. Cet historique fait la force du r&eacute;seau alumni actuel et c&rsquo;est ce que l&rsquo;association GAIA souhaite valoriser.</p>\r\n\r\n<p>Pour cela, plusieurs projets&nbsp;:</p>\r\n\r\n<ul>\r\n	<li>Mise en place et animation d&rsquo;une plateforme d&rsquo;&eacute;changes pour les &eacute;tudiants actuels et dipl&ocirc;m&eacute;s du Master GEDD.</li>\r\n	<li>Organisation d&#39;&eacute;v&eacute;nements types caf&eacute;s-d&eacute;bats</li>\r\n</ul>\r\n\r\n<h3 style=\"margin-left:80px\"><span style=\"color:#3498db\">Sensibilisation et implication dans les projets de d&eacute;veloppement durable</span></h3>\r\n\r\n<h4>Les profils vari&eacute;s des &eacute;tudiants venant de cursus diff&eacute;rents leur conf&egrave;rent des connaissances transverses, par exemple en am&eacute;nagement du territoire, en concertation, en &eacute;nergies renouvelables ou bien en &eacute;cologie.</h4>\r\n\r\n<p>L&rsquo;Association souhaite valoriser ces comp&eacute;tences compl&eacute;mentaires en participant &agrave; des &eacute;v&egrave;nements de sensibilisation ouverts au grand public.</p>\r\n\r\n<p>En 2021, l&rsquo;Association a accompagn&eacute; l&rsquo;organisation du &laquo;&nbsp;One&amp;1 trail&nbsp;&raquo; pour concilier activit&eacute; sportive et sensibilisation / protection de l&rsquo;environnement. Pour cela, un groupe d&rsquo;&eacute;tudiants a fourni une liste d&rsquo;actions que l&rsquo;&eacute;v&egrave;nement peut mettre en place&nbsp;: covoiturage, compost, tri, gestion des plastiques (bouteilles, gourdes), couverts, un goodies remplac&eacute; par la plantation d&rsquo;arbre &hellip; L&rsquo;association a &eacute;galement tenu un stand de sensibilisation lors des 2 jours de trail.</p>\r\n\r\n<p>En 2021, GAIA a &eacute;galement r&eacute;pondu &agrave;&nbsp;l&rsquo;appel &agrave; projet &ldquo;z&eacute;ro d&eacute;chets plastique&rdquo; lanc&eacute; par la M&eacute;tropole.</p>\r\n\r\n<p>Ga&iuml;a a r&eacute;pondu&nbsp; &agrave; l&rsquo;appel &agrave; projet &ldquo;z&eacute;ro d&eacute;chets plastiques&rdquo; de 2021, pour proposer aux vall&eacute;es de la V&eacute;subie (d&eacute;vast&eacute;es par la temp&ecirc;te Alex) une aide quant au ramassage des d&eacute;chets plastiques sur les berges. Ga&iuml;a souhaite organiser 2 grandes campagnes de ramassage des d&eacute;chets plastiques, et profiter de ce projet pour sensibiliser les plus jeunes &agrave; ce sujet. Ce projet propos&eacute; par Ga&iuml;a, permet aux &eacute;tudiants de s&rsquo;impliquer dans un sujet d&rsquo;actualit&eacute; ainsi que d&rsquo;&eacute;laborer des documents techniques aupr&egrave;s de professionnels du secteur, ce qui rajoute une r&eacute;elle valeur ajout&eacute;e dans leur parcours.</p>\r\n\r\n<h3 style=\"margin-left:80px\"><span style=\"color:#3498db\">Animation de la vie &eacute;tudiante&nbsp;</span></h3>\r\n\r\n<p>L&rsquo;animation d&rsquo;un r&eacute;seau alumni commence avant tout par l&rsquo;int&eacute;gration des nouvelles promotions. L&rsquo;Association poss&egrave;de dans ses missions l&rsquo;organisation des &eacute;v&egrave;nements conviviaux&nbsp;: Gala, week-end d&rsquo;int&eacute;gration, autre type de week-end, cr&eacute;ation de pull pour les promotions en cours.</p>', 'logo-logo-6218aad20cb9f.png', 'applesChamps-770x430-6218a6f11a59c.jpg', 'asso.paul.green@univ-montp3.ft', 'Association Paul Green', 'Rte de Mende', NULL, '34090', 'Montpellier', '2017-01-01 00:00:00', 'Pour vous mettre au vert !', '<h2 style=\"text-align:center\">Informations l&eacute;gales</h2>\r\n\r\n<h3 style=\"text-align:center\">1. Pr&eacute;sentation du site.</h3>\r\n\r\n<p style=\"text-align:center\">En vertu de l&#39;article 6 de la loi n&deg; 2004-575 du 21 juin 2004 pour la confiance dans l&#39;&eacute;conomie num&eacute;rique, il est pr&eacute;cis&eacute; aux utilisateurs du site&nbsp;<a href=\"http://www.theatre-la-comedie-pontchatelaine.fr/\">www.AssociationPaulGreen.fr</a>&nbsp;l&#39;identit&eacute; des diff&eacute;rents intervenants dans le cadre de sa r&eacute;alisation et de son suivi :</p>\r\n\r\n<p style=\"text-align:center\"><strong>Propri&eacute;taire</strong>&nbsp;: Association Paul Green &ndash; Association loi 1901 &ndash; MONTPELLIER<br />\r\n<strong>Cr&eacute;ateur</strong>&nbsp;:&nbsp;<a href=\"https://theatre-la-comedie-pontchatelaine.fr/www.theatre-la-comedie-pontchatelaine.fr\">Association Paule Green</a><br />\r\n<strong>Responsable publication</strong>&nbsp;: Association Paul Green &ndash; xxxxxxxxxxx@xxxxx.fr<br />\r\nLe responsable publication est une personne physique ou une personne morale.<br />\r\n<strong>Webmaster</strong>&nbsp;: Jacques Lemoine &ndash; xxxxxx@xxxx.fr<br />\r\n<strong>H&eacute;bergeur</strong>&nbsp;: xxxxxxxxxxxxxxxxxx- France<br />\r\nCr&eacute;dits :<br />\r\nLe mod&egrave;le de mentions l&eacute;gales est offert par Subdelirium.com&nbsp;<a href=\"https://www.subdelirium.com/generateur-de-mentions-legales/\" target=\"_blank\">G&eacute;n&eacute;rateur de mentions l&eacute;gales</a></p>\r\n\r\n<h3 style=\"text-align:center\">2. Conditions g&eacute;n&eacute;rales d&rsquo;utilisation du site et des services propos&eacute;s.</h3>\r\n\r\n<p style=\"text-align:center\">L&rsquo;utilisation du site&nbsp;<a href=\"http://www.theatre-la-comedie-pontchatelaine.fr/\">www.AssociationPaulGreen.fr</a>&nbsp;implique l&rsquo;acceptation pleine et enti&egrave;re des conditions g&eacute;n&eacute;rales d&rsquo;utilisation ci-apr&egrave;s d&eacute;crites. Ces conditions d&rsquo;utilisation sont susceptibles d&rsquo;&ecirc;tre modifi&eacute;es ou compl&eacute;t&eacute;es &agrave; tout moment, les utilisateurs du site&nbsp;<a href=\"http://www.theatre-la-comedie-pontchatelaine.fr/\">www.AssociationPaulGreen.fr</a>&nbsp;sont donc invit&eacute;s &agrave; les consulter de mani&egrave;re r&eacute;guli&egrave;re.</p>\r\n\r\n<p style=\"text-align:center\">Ce site est normalement accessible &agrave; tout moment aux utilisateurs. Une interruption pour raison de maintenance technique peut &ecirc;tre toutefois d&eacute;cid&eacute;e par La com&eacute;die Pontchatelaine, qui s&rsquo;efforcera alors de communiquer pr&eacute;alablement aux utilisateurs les dates et heures de l&rsquo;intervention.</p>\r\n\r\n<p style=\"text-align:center\">Le site&nbsp;<a href=\"http://www.theatre-la-comedie-pontchatelaine.fr/\">www.AssociationPaulGreen.fr</a>&nbsp;est mis &agrave; jour r&eacute;guli&egrave;rement par La com&eacute;die Pontchaetelaine. De la m&ecirc;me fa&ccedil;on, les mentions l&eacute;gales peuvent &ecirc;tre modifi&eacute;es &agrave; tout moment : elles s&rsquo;imposent n&eacute;anmoins &agrave; l&rsquo;utilisateur qui est invit&eacute; &agrave; s&rsquo;y r&eacute;f&eacute;rer le plus souvent possible afin d&rsquo;en prendre connaissance.</p>\r\n\r\n<h3 style=\"text-align:center\">3. Description des services fournis.</h3>\r\n\r\n<p style=\"text-align:center\">Le site&nbsp;<a href=\"http://www.theatre-la-comedie-pontchatelaine.fr/\">www.AssociationPaulGreen.fr</a>&nbsp;a pour objet de fournir une information concernant l&rsquo;ensemble des activit&eacute;s de la soci&eacute;t&eacute;.</p>\r\n\r\n<p style=\"text-align:center\">L&#39;Association Paul Green s&rsquo;efforce de fournir sur le site&nbsp;<a href=\"http://www.theatre-la-comedie-pontchatelaine.fr/\">www.AssociationPaulGreen.fr</a>&nbsp;des informations aussi pr&eacute;cises que possible. Toutefois, il ne pourra &ecirc;tre tenue responsable des omissions, des inexactitudes et des carences dans la mise &agrave; jour, qu&rsquo;elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations.</p>\r\n\r\n<p style=\"text-align:center\">Tous les informations indiqu&eacute;es sur le site&nbsp;<a href=\"http://www.theatre-la-comedie-pontchatelaine.fr/\">www.AssociationPaulGreen.fr</a>&nbsp;sont donn&eacute;es &agrave; titre indicatif, et sont susceptibles d&rsquo;&eacute;voluer. Par ailleurs, les renseignements figurant sur le site&nbsp;<a href=\"http://www.theatre-la-comedie-pontchatelaine.fr/\">www.AssociationPaulGreen.fr</a>&nbsp;ne sont pas exhaustifs. Ils sont donn&eacute;s sous r&eacute;serve de modifications ayant &eacute;t&eacute; apport&eacute;es depuis leur mise en ligne.</p>\r\n\r\n<h3 style=\"text-align:center\">4. Limitations contractuelles sur les donn&eacute;es techniques.</h3>\r\n\r\n<p style=\"text-align:center\">Le site utilise la technologie JavaScript.</p>\r\n\r\n<p style=\"text-align:center\">Le site Internet ne pourra &ecirc;tre tenu responsable de dommages mat&eacute;riels li&eacute;s &agrave; l&rsquo;utilisation du site. De plus, l&rsquo;utilisateur du site s&rsquo;engage &agrave; acc&eacute;der au site en utilisant un mat&eacute;riel r&eacute;cent, ne contenant pas de virus et avec un navigateur de derni&egrave;re g&eacute;n&eacute;ration mis-&agrave;-jour</p>\r\n\r\n<h3 style=\"text-align:center\">5. Propri&eacute;t&eacute; intellectuelle et contrefa&ccedil;ons.</h3>\r\n\r\n<p style=\"text-align:center\">L&#39;Association Paul Green est propri&eacute;taire des droits de propri&eacute;t&eacute; intellectuelle ou d&eacute;tient les droits d&rsquo;usage sur tous les &eacute;l&eacute;ments accessibles sur le site, notamment les textes, images, graphismes, logo, ic&ocirc;nes, sons, logiciels.</p>\r\n\r\n<p style=\"text-align:center\">Toute reproduction, repr&eacute;sentation, modification, publication, adaptation de tout ou partie des &eacute;l&eacute;ments du site, quel que soit le moyen ou le proc&eacute;d&eacute; utilis&eacute;, est interdite, sauf autorisation &eacute;crite pr&eacute;alable de : L&#39;Association Paul Green .</p>\r\n\r\n<p style=\"text-align:center\">Toute exploitation non autoris&eacute;e du site ou de l&rsquo;un quelconque des &eacute;l&eacute;ments qu&rsquo;il contient sera consid&eacute;r&eacute;e comme constitutive d&rsquo;une contrefa&ccedil;on et poursuivie conform&eacute;ment aux dispositions des articles L.335-2 et suivants du Code de Propri&eacute;t&eacute; Intellectuelle.</p>\r\n\r\n<h3 style=\"text-align:center\">6. Limitations de responsabilit&eacute;.</h3>\r\n\r\n<p style=\"text-align:center\">L&#39;Association Paul Green ne pourra &ecirc;tre tenue responsable des dommages directs et indirects caus&eacute;s au mat&eacute;riel de l&rsquo;utilisateur, lors de l&rsquo;acc&egrave;s au site <a href=\"http://www.theatre-la-comedie-pontchatelaine.fr/\">www.AssociationPaulGreen.fr</a>, et r&eacute;sultant soit de l&rsquo;utilisation d&rsquo;un mat&eacute;riel ne r&eacute;pondant pas aux sp&eacute;cifications indiqu&eacute;es au point 4, soit de l&rsquo;apparition d&rsquo;un bug ou d&rsquo;une incompatibilit&eacute;.</p>\r\n\r\n<p style=\"text-align:center\">L&#39;Association Paul Green ne pourra &eacute;galement &ecirc;tre tenue responsable des dommages indirects (tels par exemple qu&rsquo;une perte de march&eacute; ou perte d&rsquo;une chance) cons&eacute;cutifs &agrave; l&rsquo;utilisation du site&nbsp;<a href=\"http://www.theatre-la-comedie-pontchatelaine.fr/\">www.AssociationPaulGreen.fr</a>.</p>\r\n\r\n<p style=\"text-align:center\">Des espaces interactifs (possibilit&eacute; de poser des questions dans l&rsquo;espace contact) sont &agrave; la disposition des utilisateurs. L&#39;Association Paul Green se r&eacute;serve le droit de supprimer, sans mise en demeure pr&eacute;alable, tout contenu d&eacute;pos&eacute; dans cet espace qui contreviendrait &agrave; la l&eacute;gislation applicable en France, en particulier aux dispositions relatives &agrave; la protection des donn&eacute;es. Le cas &eacute;ch&eacute;ant, L&#39;Association Paul Green se r&eacute;serve &eacute;galement la possibilit&eacute; de mettre en cause la responsabilit&eacute; civile et/ou p&eacute;nale de l&rsquo;utilisateur, notamment en cas de message &agrave; caract&egrave;re raciste, injurieux, diffamant, ou pornographique, quel que soit le support utilis&eacute; (texte, photographie&hellip;).</p>\r\n\r\n<h3 style=\"text-align:center\">7. Gestion des donn&eacute;es personnelles.</h3>\r\n\r\n<p style=\"text-align:center\">En France, les donn&eacute;es personnelles sont notamment prot&eacute;g&eacute;es par la loi n&deg; 78-87 du 6 janvier 1978, la loi n&deg; 2004-801 du 6 ao&ucirc;t 2004, l&#39;article L. 226-13 du Code p&eacute;nal et la Directive Europ&eacute;enne du 24 octobre 1995.</p>\r\n\r\n<p style=\"text-align:center\">A l&#39;occasion de l&#39;utilisation du site&nbsp;<a href=\"http://www.theatre-la-comedie-pontchatelaine.fr/\">www.AssociationPaulGreen.fr</a>, peuvent &ecirc;tres recueillies : l&#39;URL des liens par l&#39;interm&eacute;diaire desquels l&#39;utilisateur a acc&eacute;d&eacute; au site&nbsp;<a href=\"http://www.theatre-la-comedie-pontchatelaine.fr/\">www.AssociationPaulGreen.fr</a> le fournisseur d&#39;acc&egrave;s de l&#39;utilisateur, l&#39;adresse de protocole Internet (IP) de l&#39;utilisateur.</p>\r\n\r\n<p style=\"text-align:center\">En tout &eacute;tat de cause L&#39;Association Paul Green ne collecte des informations personnelles relatives &agrave; l&#39;utilisateur que pour le besoin de certains services propos&eacute;s par le site&nbsp;<a href=\"http://www.theatre-la-comedie-pontchatelaine.fr/\">www.AssociationPaulGreen.fr</a>. L&#39;utilisateur fournit ces informations en toute connaissance de cause, notamment lorsqu&#39;il proc&egrave;de par lui-m&ecirc;me &agrave; leur saisie. Il est alors pr&eacute;cis&eacute; &agrave; l&#39;utilisateur du site&nbsp;<a href=\"http://www.theatre-la-comedie-pontchatelaine.fr/\">www.AssociationPaulGreen.fr</a>&nbsp;l&rsquo;obligation ou non de fournir ces informations.</p>\r\n\r\n<p style=\"text-align:center\">Conform&eacute;ment aux dispositions des articles 38 et suivants de la loi 78-17 du 6 janvier 1978 relative &agrave; l&rsquo;informatique, aux fichiers et aux libert&eacute;s, tout utilisateur dispose d&rsquo;un droit d&rsquo;acc&egrave;s, de rectification et d&rsquo;opposition aux donn&eacute;es personnelles le concernant, en effectuant sa demande &eacute;crite et sign&eacute;e, accompagn&eacute;e d&rsquo;une copie du titre d&rsquo;identit&eacute; avec signature du titulaire de la pi&egrave;ce, en pr&eacute;cisant l&rsquo;adresse &agrave; laquelle la r&eacute;ponse doit &ecirc;tre envoy&eacute;e.</p>\r\n\r\n<p style=\"text-align:center\">Aucune information personnelle de l&#39;utilisateur du site&nbsp;<a href=\"http://www.theatre-la-comedie-pontchatelaine.fr/\">www.AssociationPaulGreen.fr</a>&nbsp;n&#39;est publi&eacute;e &agrave; l&#39;insu de l&#39;utilisateur, &eacute;chang&eacute;e, transf&eacute;r&eacute;e, c&eacute;d&eacute;e ou vendue sur un support quelconque &agrave; des tiers. Seule l&#39;hypoth&egrave;se du rachat de La com&eacute;die Pontchatelaine et de ses droits permettrait la transmission des dites informations &agrave; l&#39;&eacute;ventuel acqu&eacute;reur qui serait &agrave; son tour tenu de la m&ecirc;me obligation de conservation et de modification des donn&eacute;es vis &agrave; vis de l&#39;utilisateur du site&nbsp;<a href=\"http://www.theatre-la-comedie-pontchatelaine.fr/\">www.AssociationPaulGreen.fr</a>.</p>\r\n\r\n<p style=\"text-align:center\">Le site n&#39;est pas d&eacute;clar&eacute; &agrave; la CNIL car il ne recueille pas d&#39;informations personnelles. .</p>\r\n\r\n<p style=\"text-align:center\">Les bases de donn&eacute;es sont prot&eacute;g&eacute;es par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative &agrave; la protection juridique des bases de donn&eacute;es.</p>\r\n\r\n<h3 style=\"text-align:center\">8. Liens hypertextes et cookies.</h3>\r\n\r\n<p style=\"text-align:center\">Le site&nbsp;<a href=\"http://www.theatre-la-comedie-pontchatelaine.fr/\">www.AssociationPaulGreen.fr</a>&nbsp;contient un certain nombre de liens hypertextes vers d&rsquo;autres sites, mis en place avec l&rsquo;autorisation de L&#39;Association Paul Green . Cependant, L&#39;Association Paul Green n&rsquo;a pas la possibilit&eacute; de v&eacute;rifier le contenu des sites ainsi visit&eacute;s, et n&rsquo;assumera en cons&eacute;quence aucune responsabilit&eacute; de ce fait.</p>\r\n\r\n<p style=\"text-align:center\">La navigation sur le site&nbsp;<a href=\"http://www.theatre-la-comedie-pontchatelaine.fr/\">www.AssociationPaulGreen.fr</a>&nbsp;est susceptible de provoquer l&rsquo;installation de cookie(s) sur l&rsquo;ordinateur de l&rsquo;utilisateur. Un cookie est un fichier de petite taille, qui ne permet pas l&rsquo;identification de l&rsquo;utilisateur, mais qui enregistre des informations relatives &agrave; la navigation d&rsquo;un ordinateur sur un site. Les donn&eacute;es ainsi obtenues visent &agrave; faciliter la navigation ult&eacute;rieure sur le site, et ont &eacute;galement vocation &agrave; permettre diverses mesures de fr&eacute;quentation.</p>\r\n\r\n<p style=\"text-align:center\">Le refus d&rsquo;installation d&rsquo;un cookie peut entra&icirc;ner l&rsquo;impossibilit&eacute; d&rsquo;acc&eacute;der &agrave; certains services. L&rsquo;utilisateur peut toutefois configurer son ordinateur de la mani&egrave;re suivante, pour refuser l&rsquo;installation des cookies :</p>\r\n\r\n<p style=\"text-align:center\">Sous Internet Explorer : onglet outil (pictogramme en forme de rouage en haut a droite) / options internet. Cliquez sur Confidentialit&eacute; et choisissez Bloquer tous les cookies. Validez sur Ok.</p>\r\n\r\n<p style=\"text-align:center\">Sous Firefox : en haut de la fen&ecirc;tre du navigateur, cliquez sur le bouton Firefox, puis aller dans l&#39;onglet Options. Cliquer sur l&#39;onglet Vie priv&eacute;e. Param&eacute;trez les R&egrave;gles de conservation sur : utiliser les param&egrave;tres personnalis&eacute;s pour l&#39;historique. Enfin d&eacute;cochez-la pour d&eacute;sactiver les cookies.</p>\r\n\r\n<p style=\"text-align:center\">Sous Safari : Cliquez en haut &agrave; droite du navigateur sur le pictogramme de menu (symbolis&eacute; par un rouage). S&eacute;lectionnez Param&egrave;tres. Cliquez sur Afficher les param&egrave;tres avanc&eacute;s. Dans la section &quot;Confidentialit&eacute;&quot;, cliquez sur Param&egrave;tres de contenu. Dans la section &quot;Cookies&quot;, vous pouvez bloquer les cookies.</p>\r\n\r\n<p style=\"text-align:center\">Sous Chrome : Cliquez en haut &agrave; droite du navigateur sur le pictogramme de menu (symbolis&eacute; par trois lignes horizontales). S&eacute;lectionnez Param&egrave;tres. Cliquez sur Afficher les param&egrave;tres avanc&eacute;s. Dans la section &quot;Confidentialit&eacute;&quot;, cliquez sur pr&eacute;f&eacute;rences. Dans l&#39;onglet &quot;Confidentialit&eacute;&quot;, vous pouvez bloquer les cookies.</p>\r\n\r\n<h3 style=\"text-align:center\">9. Droit applicable et attribution de juridiction.</h3>\r\n\r\n<p style=\"text-align:center\">Tout litige en relation avec l&rsquo;utilisation du site&nbsp;<a href=\"http://www.theatre-la-comedie-pontchatelaine.fr/\">www.AssociationPaulGreen.fr</a>&nbsp;est soumis au droit fran&ccedil;ais. Il est fait attribution exclusive de juridiction aux tribunaux comp&eacute;tents de Paris.</p>\r\n\r\n<h3 style=\"text-align:center\">10. Les principales lois concern&eacute;es.</h3>\r\n\r\n<p style=\"text-align:center\">Loi n&deg; 78-17 du 6 janvier 1978, notamment modifi&eacute;e par la loi n&deg; 2004-801 du 6 ao&ucirc;t 2004 relative &agrave; l&#39;informatique, aux fichiers et aux libert&eacute;s.</p>\r\n\r\n<p style=\"text-align:center\">Loi n&deg; 2004-575 du 21 juin 2004 pour la confiance dans l&#39;&eacute;conomie num&eacute;rique.</p>\r\n\r\n<h3 style=\"text-align:center\">11. Lexique.</h3>\r\n\r\n<p style=\"text-align:center\">Utilisateur : Internaute se connectant, utilisant le site susnomm&eacute;.</p>\r\n\r\n<p style=\"text-align:center\">Informations personnelles : &laquo; les informations qui permettent, sous quelque forme que ce soit, directement ou non, l&#39;identification des personnes physiques auxquelles elles s&#39;appliquent &raquo; (article 4 de la loi n&deg; 78-17 du 6 janvier 1978).</p>', '<h1 style=\"text-align:center\"><span style=\"color:#2ecc71\">L&#39;ASSOCIATION Paul Green</span></h1>\r\n\r\n<p>L&rsquo;association Ga&iuml;a a &eacute;t&eacute; fond&eacute;e il y a pr&egrave;s de 20 ans par des &eacute;tudiants du Master Gestion de l&rsquo;Environnement et du D&eacute;veloppement Durable (GEDD).</p>\r\n\r\n<p>Port&eacute;e aujourd&rsquo;hui par des &eacute;tudiants actuels et dipl&ocirc;m&eacute;s du Master GEDD, l&rsquo;Association a pour mission de&nbsp;d&eacute;velopper et animer le r&eacute;seau d&rsquo;alumni&nbsp;du Master et de contribuer ensemble &agrave;&nbsp;des actions en faveur de l&#39;environnement et du d&eacute;veloppement durable.</p>\r\n\r\n<p>Ga&iuml;a a pour ambition de faire rayonner ses actions et ses valeurs aupr&egrave;s d&rsquo;un public plus large que le r&eacute;seau des alumnis GEDD afin de sensibiliser le plus grand nombre aux enjeux environnementaux.</p>\r\n\r\n<h2><span style=\"color:#2ecc71\">Nos missions et projets phares :</span></h2>\r\n\r\n<h3 style=\"margin-left:80px\"><span style=\"color:#3498db\">Gestion du r&eacute;seau alumni</span></h3>\r\n\r\n<p>Par ses 30 ann&eacute;es d&rsquo;existence, le Master GEDD a permis de former pr&egrave;s de 700 professionnels sur les th&eacute;matiques vari&eacute;es du d&eacute;veloppement durable&nbsp;: de la gestion de l&rsquo;eau &agrave; la gestion des d&eacute;chets en passant par la gestion de ressources naturelles sans oublier les aspects QHSE. Cet historique fait la force du r&eacute;seau alumni actuel et c&rsquo;est ce que l&rsquo;association GAIA souhaite valoriser.</p>\r\n\r\n<p>Pour cela, plusieurs projets&nbsp;:</p>\r\n\r\n<ul>\r\n	<li>Mise en place et animation d&rsquo;une plateforme d&rsquo;&eacute;changes pour les &eacute;tudiants actuels et dipl&ocirc;m&eacute;s du Master GEDD.</li>\r\n	<li>Organisation d&#39;&eacute;v&eacute;nements types caf&eacute;s-d&eacute;bats</li>\r\n</ul>\r\n\r\n<h3 style=\"margin-left:80px\"><span style=\"color:#3498db\">Sensibilisation et implication dans les projets de d&eacute;veloppement durable</span></h3>\r\n\r\n<h4>Les profils vari&eacute;s des &eacute;tudiants venant de cursus diff&eacute;rents leur conf&egrave;rent des connaissances transverses, par exemple en am&eacute;nagement du territoire, en concertation, en &eacute;nergies renouvelables ou bien en &eacute;cologie.</h4>\r\n\r\n<p>L&rsquo;Association souhaite valoriser ces comp&eacute;tences compl&eacute;mentaires en participant &agrave; des &eacute;v&egrave;nements de sensibilisation ouverts au grand public.</p>\r\n\r\n<p>En 2021, l&rsquo;Association a accompagn&eacute; l&rsquo;organisation du &laquo;&nbsp;One&amp;1 trail&nbsp;&raquo; pour concilier activit&eacute; sportive et sensibilisation / protection de l&rsquo;environnement. Pour cela, un groupe d&rsquo;&eacute;tudiants a fourni une liste d&rsquo;actions que l&rsquo;&eacute;v&egrave;nement peut mettre en place&nbsp;: covoiturage, compost, tri, gestion des plastiques (bouteilles, gourdes), couverts, un goodies remplac&eacute; par la plantation d&rsquo;arbre &hellip; L&rsquo;association a &eacute;galement tenu un stand de sensibilisation lors des 2 jours de trail.</p>\r\n\r\n<p>En 2021, GAIA a &eacute;galement r&eacute;pondu &agrave;&nbsp;l&rsquo;appel &agrave; projet &ldquo;z&eacute;ro d&eacute;chets plastique&rdquo; lanc&eacute; par la M&eacute;tropole.</p>\r\n\r\n<p>Ga&iuml;a a r&eacute;pondu&nbsp; &agrave; l&rsquo;appel &agrave; projet &ldquo;z&eacute;ro d&eacute;chets plastiques&rdquo; de 2021, pour proposer aux vall&eacute;es de la V&eacute;subie (d&eacute;vast&eacute;es par la temp&ecirc;te Alex) une aide quant au ramassage des d&eacute;chets plastiques sur les berges. Ga&iuml;a souhaite organiser 2 grandes campagnes de ramassage des d&eacute;chets plastiques, et profiter de ce projet pour sensibiliser les plus jeunes &agrave; ce sujet. Ce projet propos&eacute; par Ga&iuml;a, permet aux &eacute;tudiants de s&rsquo;impliquer dans un sujet d&rsquo;actualit&eacute; ainsi que d&rsquo;&eacute;laborer des documents techniques aupr&egrave;s de professionnels du secteur, ce qui rajoute une r&eacute;elle valeur ajout&eacute;e dans leur parcours.</p>\r\n\r\n<h3 style=\"margin-left:80px\"><span style=\"color:#3498db\">Animation de la vie &eacute;tudiante&nbsp;</span></h3>\r\n\r\n<p>L&rsquo;animation d&rsquo;un r&eacute;seau alumni commence avant tout par l&rsquo;int&eacute;gration des nouvelles promotions. L&rsquo;Association poss&egrave;de dans ses missions l&rsquo;organisation des &eacute;v&egrave;nements conviviaux&nbsp;: Gala, week-end d&rsquo;int&eacute;gration, autre type de week-end, cr&eacute;ation de pull pour les promotions en cours.</p>\r\n\r\n<h3><span style=\"color:#2ecc71\">Pilotage et adh&eacute;sion&nbsp;</span></h3>\r\n\r\n<p>L&rsquo;Association est pilot&eacute;e par le conseil d&rsquo;administration compos&eacute; de 4 repr&eacute;sentants de Master 1, 4 repr&eacute;sentants de Master 2,4 &eacute;tudiants dipl&ocirc;m&eacute;s ainsi que 3 membres honorifiques. Le conseil d&rsquo;administration comprend &eacute;galement les membres du bureau.<br />\r\nLe choix cette organisation va de pair avec l&rsquo;esprit de notre association&nbsp;: unir &eacute;tudiants actuels et dipl&ocirc;m&eacute;s pour d&eacute;velopper des projets sur une th&eacute;matique commune&nbsp;: le d&eacute;veloppement durable.</p>\r\n\r\n<p style=\"text-align:center\"><a href=\"https://www.master-gedd-unice.fr/var/input/FileManager/pages/association/CompositionduCA_GAIA2021.pdf\"><span style=\"color:#3498db\">LES MEMBRES DU CA&nbsp;</span></a></p>\r\n\r\n<p>Tout &eacute;tudiant, actuel ou dipl&ocirc;m&eacute;, peut cotiser &agrave; l&rsquo;association Ga&iuml;a pour l&rsquo;ann&eacute;e afin de soutenir le fonctionnement de l&rsquo;association et b&eacute;n&eacute;ficier de r&eacute;ductions lors des &eacute;v&egrave;nements organis&eacute;s par celle-ci : week-end d&rsquo;int&eacute;gration, ski, gala etc.&nbsp;</p>\r\n\r\n<p>Contact de l&#39;association :&nbsp;<a href=\"mailto:gaia.mastergedd@gmail.com\" title=\"mailto:gaia.mastergedd@gmail.com\">gaia.mastergedd@gmail.com</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<blockquote>\r\n<p>&quot; Apr&egrave;s un an au sein du conseil d&rsquo;administration de Ga&iuml;a, j&rsquo;ai choisi de poursuivre l&rsquo;aventure en tant que membre du bureau&nbsp;! Faire partie du bureau de l&rsquo;association Ga&iuml;a permet d&rsquo;apprendre &agrave; g&eacute;rer une association tant sur le c&ocirc;t&eacute; administratif, organisationnel, que sur le c&ocirc;t&eacute; gestion de projet.<br />\r\nGa&iuml;a est le moyen pour les &eacute;tudiants qui le souhaitent de pouvoir d&rsquo;ores et d&eacute;j&agrave; s&rsquo;investir dans des projets qui vont de pair avec leurs valeurs dans le domaine du d&eacute;veloppement durable et leur permet de d&eacute;velopper un r&eacute;seau avec des personnes ext&eacute;rieures au GEDD et des liens plus forts intra-formation. &raquo; Lucie, Pr&eacute;sidente de GAIA&nbsp;</p>\r\n</blockquote>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<blockquote>\r\n<p>&ldquo;Le Master GEDD est une formation tr&egrave;s enrichissante et avoir fait partie de l&rsquo;Association GAIA en tant que secr&eacute;taire l&rsquo;ann&eacute;e derni&egrave;re a &eacute;t&eacute; une tr&egrave;s belle exp&eacute;rience.&nbsp;</p>\r\n\r\n<p>Gr&acirc;ce &agrave; l&rsquo;implication de quelques dipl&ocirc;m&eacute;s et &eacute;tudiants, nous avons r&eacute;activ&eacute; l&rsquo;Association GAIA et avons pu porter de beaux projets comme aider l&rsquo;&eacute;quipe du One&amp;1Trail &agrave; rendre cet &eacute;v&egrave;nement sportif, plus responsable, et int&eacute;grer le d&eacute;veloppement durable dans l&rsquo; organisation de ce trail. Nous avons &eacute;galement pu proposer une r&eacute;ponse &agrave; un Appel &agrave; projet de la R&eacute;gion Sud, &laquo; Z&eacute;ro d&eacute;chets plastiques &raquo; o&ugrave; Gaia serait pilote pour organiser des op&eacute;rations de nettoyage le long des berges de la V&eacute;subie. Autant de projets qui ont donn&eacute; une dimension nouvelle &agrave; l&rsquo;Association GAIA et o&ugrave; chacun (&eacute;l&egrave;ves et dipl&ocirc;m&eacute;s) a pu s&rsquo;impliquer &agrave; sa guise et participer.&nbsp;&nbsp;</p>\r\n\r\n<p>GAIA est une belle occasion de porter des projets qui sont tr&egrave;s enrichissants, l&rsquo;association est &eacute;galement une opportunit&eacute; pour cr&eacute;er du lien avec les &eacute;l&egrave;ves et dipl&ocirc;m&eacute;s du Master et entretenir le r&eacute;seau GEDD. C&rsquo;est pour ces raisons que j&rsquo;ai d&eacute;cid&eacute; de faire partie du bureau de GAIA &agrave; nouveau, les dipl&ocirc;m&eacute;s ont leur place au sein de GAIA et je trouve int&eacute;ressant de voir la continuit&eacute; des beaux projets initi&eacute;s l&rsquo;an pass&eacute;e.&rdquo;&nbsp; Estelle, Vice-pr&eacute;sidente de Ga&iuml;a</p>\r\n</blockquote>', '<p><a href=\"https://formations.umontpellier.fr/fr/formations/master-XB/master-gestion-de-l-environnement-KKICL68U.html\">Site Officiel - Master - Gestion de l&#39;environnement</a></p>\r\n\r\n<h2><img alt=\"Catalogue des formations - UM\" src=\"https://formations.umontpellier.fr/skins/UMontpellier/resources/templates/common/img/logo-header.svg\" /></h2>\r\n\r\n<h1 style=\"text-align:center\"><u><strong><span style=\"color:#e74c3c\">MASTER GESTION DE L ENVIRONNEMENT</span></strong></u></h1>\r\n\r\n<p>Gestion de l&rsquo;environnement<img alt=\"\" src=\"https://formations.umontpellier.fr/skins/UMontpellier/resources/templates/common/img/labels/DNM.svg\" style=\"float:right; height:115px; width:100px\" /></p>\r\n\r\n<h2>Pr&eacute;sentation</h2>\r\n\r\n<p>La mention de Master Gestion de l&rsquo;Environnement est d&eacute;crite sur : www.ing&eacute;nieurs-ecologues.fr&nbsp;</p>\r\n\r\n<p>Accr&eacute;dit&eacute;e par l&rsquo;universit&eacute; et le comit&eacute; d&rsquo;&eacute;valuation national, le d&eacute;partement Biologie-&Eacute;cologie et la Facult&eacute; des Sciences de Montpellier ouvrent, pour la p&eacute;riode 2021-2025, la mention de Master Gestion de l&rsquo;Environnement. Ce Master pluridisciplinaire professionnalisant offre des d&eacute;bouch&eacute;s dans de nombreux secteurs de l&rsquo;environnement et de la biodiversit&eacute;. Dans ce projet, la nouvelle mention &laquo; Gestion de l&rsquo;Environnement &raquo; regroupe 6 parcours :</p>\r\n\r\n<p>-AquaDura : Production et Exploitation Durables des Bioressources Aquatiques (anciennement BAEMT)</p>\r\n\r\n<p>-GIEBioTE : Gestion Int&eacute;gr&eacute;e de l&rsquo;Environnement, de la Biodiversit&eacute; et des TErritoires</p>\r\n\r\n<p>-IEGB : Ing&eacute;nierie &Eacute;cologie et Gestion de la Biodiversit&eacute;</p>\r\n\r\n<p>-Double Comp&eacute;tence  en Ing&eacute;nierie Ecologique (DC)</p>\r\n\r\n<p>-RAINET&rsquo; : Recherche Appliqu&eacute;e pour coNserver la biodivErsiT&eacute;</p>\r\n\r\n<p>-ComBiodiv : Communication et &Eacute;ducation &agrave; la Biodiversit&eacute;</p>\r\n\r\n<p>Tous les parcours sont ouverts &agrave; la formation continue M1 et M2. Tous les parcours sauf GIEBioTE sont ouverts &agrave; l&rsquo;apprentissage en M1 et en M2.</p>\r\n\r\n<p>La mention de Gestion de l&rsquo;Environnement est une formation Bac+5 formant des professionnels dans les m&eacute;tiers de l&rsquo;expertise naturaliste, l&rsquo;ing&eacute;nierie &eacute;cologique, la gestion de l&rsquo;environnement, la planification territoriale, la communication et la recherche en biologie de la conservation (cette derni&egrave;re passe par la voie du doctorat).&nbsp;</p>\r\n\r\n<p>Elle d&eacute;veloppe et d&eacute;cline plusieurs axes de comp&eacute;tences de mani&egrave;re sp&eacute;cifique dans chacun de ses parcours de sp&eacute;cialisation :&nbsp;</p>\r\n\r\n<p>-le d&eacute;veloppement durable, les enjeux soci&eacute;taux et environnements face aux changements globaux et leurs adaptations,&nbsp;</p>\r\n\r\n<p>- la connaissance, la gestion et la conservation de la biodiversit&eacute;,&nbsp;&nbsp;</p>\r\n\r\n<p>- l&rsquo;exploitation et la production durables des bioressources,&nbsp;</p>\r\n\r\n<p>- la gestion des milieux aquatiques et la pr&eacute;vention des inondations,&nbsp;</p>\r\n\r\n<p>-la gestion int&eacute;gr&eacute;e des territoires et de leurs ressources, sur la concertation territoriale et les interactions avec les acteurs et institutions,&nbsp;&nbsp;</p>\r\n\r\n<p>- la communication, la sensibilisation et la formation &agrave; la biodiversit&eacute;.&nbsp;</p>\r\n\r\n<p>&nbsp;En phase avec les Objectifs de D&eacute;veloppements Durables, ce master et le programme d&rsquo;enseignement de chacun de ses parcours sont reconnus et soutenus par le centre UNESCO sur l&rsquo;eau et l&rsquo;environnement de Montpellier (ICIREWARD : https://icireward-unesco.umontpellier.fr/)&nbsp;&nbsp;</p>\r\n\r\n<p>Champ de formations :&nbsp; Agronomie, biologie v&eacute;g&eacute;tale, &eacute;cologie, environnement, &eacute;volution, biodiversit&eacute; ; Espace, environnement et soci&eacute;t&eacute;s ; Sciences et Technologies, Sciences de l&rsquo;Eau</p>\r\n\r\n<p>Se r&eacute;f&eacute;rer aux fiches parcours pour une pr&eacute;sentation plus fine.</p>\r\n\r\n<h2>Objectifs</h2>\r\n\r\n<p>La Mention Gestion de l&rsquo;Environnement a pour objectif de former de futurs cadres gestionnaires, chercheurs et ing&eacute;nieurs de l&rsquo;environnement, de l&rsquo;&eacute;cologie et de la biodiversit&eacute; avec des sp&eacute;cialisations depuis la gestion int&eacute;gr&eacute;e et concert&eacute;e des territoires respectueuse de l&rsquo;environnement, &agrave; l&rsquo;expertise naturaliste, en passant par la recherche en conservation de la biodiversit&eacute;, par la communication sur le d&eacute;veloppement durable, par la production aquacole et l&#39;halieutique ou encore par la pr&eacute;vention des risques naturels.&nbsp;</p>\r\n\r\n<p>Le d&eacute;bouch&eacute; principal est celui de l&rsquo;emploi cadre &agrave; bac+5 dans l&rsquo;ing&eacute;nierie &eacute;cologique ou la mise en oeuvre de projets environnementaux, dans la production aquacole ou la gestion des ressources aquatiques, dans la communication, dans la recherche scientifique sur la biodiversit&eacute; (incluant les d&eacute;bouch&eacute;s en doctorat), ou dans la gestion territoriale (...).</p>\r\n\r\n<p>Se r&eacute;f&eacute;rer aux fiches parcours pour une pr&eacute;sentation des objectifs plus fine.</p>\r\n\r\n<h2>Savoir faire et comp&eacute;tences</h2>\r\n\r\n<p>Les comp&eacute;tences acquises en fin de master 2 sont sp&eacute;cifiques aux parcours. Il convient donc de se r&eacute;f&eacute;rer aux fiches parcours.&nbsp;&nbsp;</p>\r\n\r\n<p>Parmi les comp&eacute;tences principales en sortie de master, citons par exemple :&nbsp;&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Maitriser les m&eacute;thodes et techniques d&rsquo;inventaires naturalistes et de diagnostics, ainsi que sur la prospection sur la v&eacute;g&eacute;tation, les populations, les esp&egrave;ces rares &nbsp;</li>\r\n	<li>D&eacute;finir et conduire des dispositifs exp&eacute;rimentaux, d&rsquo;inventaires, de d&eacute;termination, d&rsquo;observation, d&rsquo;hydrom&eacute;trie pour des milieux contrast&eacute;s par des approches techniques, collecter les donn&eacute;es&nbsp;</li>\r\n	<li>R&eacute;aliser des analyses statistiques de donn&eacute;es&nbsp;et analyser les donn&eacute;es&nbsp;&nbsp;</li>\r\n	<li>Ma&icirc;triser les logiciels sp&eacute;cialis&eacute;s&nbsp;</li>\r\n	<li>Maitriser les outils, techniques et m&eacute;thodes de valorisation, de pr&eacute;servation, de protection, ou de restauration de la biodiversit&eacute; &nbsp;</li>\r\n	<li>Int&eacute;grer les aspects de conservation, biodiversit&eacute;, gestion&nbsp;et&nbsp;protection de l&rsquo;environnement dans les projets de d&eacute;veloppement des territoires en tenant compte des dimensions sociales et &eacute;conomiques&nbsp;</li>\r\n	<li>Concevoir, d&eacute;velopper, g&eacute;rer et mettre en &oelig;uvre des actions de communication, de sensibilisation, d&rsquo;&eacute;ducation et de formation&nbsp;</li>\r\n	<li>R&eacute;aliser des &eacute;tudes environnementales et&nbsp;&eacute;laborer des plans de gestion&nbsp;&nbsp;</li>\r\n	<li>Prendre position et &eacute;laborer un plan d&rsquo;intervention en vue d&rsquo;instaurer des changements&nbsp;</li>\r\n	<li>R&eacute;aliser des &eacute;tudes d&rsquo;impact et dimensionner les ouvrages hydrauliques&nbsp;</li>\r\n	<li>Assurer un&nbsp;Conseil et une assistance technique en aquaculture&nbsp;</li>\r\n	<li>Concevoir des programmes et plans d&rsquo;actions innovant sur la production et l&rsquo;exploitation durable des bioressources aquatiques&nbsp;</li>\r\n	<li>Concevoir des programmes et protocoles de recherche&nbsp;</li>\r\n	<li>Assurer la gestion de projets. &nbsp;</li>\r\n	<li>Communiquer scientifiquement et techniquement&nbsp;</li>\r\n	<li>Structurer et&nbsp;Animer des&nbsp;&eacute;quipes et&nbsp;r&eacute;unions&nbsp;</li>\r\n	<li>Assurer une veille scientifique et technologique&nbsp;</li>\r\n	<li>Participer &agrave; la diffusion et &agrave; la valorisation des r&eacute;sultats et des &eacute;tudes&nbsp;</li>\r\n	<li>Comprendre la dynamique des ressources vivantes et des &eacute;cosyst&egrave;mes aquatiques et leurs interactions,&nbsp;</li>\r\n	<li>Etre&nbsp;capable d&rsquo;analyser le fonctionnement des syst&egrave;mes d&#39;exploitation, de l&rsquo;amont &agrave; l&rsquo;aval des fili&egrave;res,&nbsp;</li>\r\n	<li>D&eacute;velopper une compr&eacute;hension critique du d&eacute;veloppement et des principes de l&#39;aquaculture,&nbsp;</li>\r\n	<li>Produire des esp&egrave;ces dans diff&eacute;rents syst&egrave;mes de production aquacoles,de&nbsp;fa&ccedil;on durable en tenant compte des r&eacute;glementations &eacute;pid&eacute;miologiques, environnementales et de bien-&ecirc;tre,&nbsp;</li>\r\n	<li>Evaluer et g&eacute;rer de fa&ccedil;on int&eacute;gr&eacute;e l&#39;impact humain sur les &eacute;cosyst&egrave;mes aquatiques exploit&eacute;s&nbsp;</li>\r\n	<li>Evaluer, exploiter et g&eacute;rer durablement des bioressources aquatiques,&nbsp;</li>\r\n	<li>Contribuer aux recherches de pointe sur le d&eacute;veloppement des pratiques et de la valorisation des bioressources aquatiques&nbsp;</li>\r\n</ul>\r\n\r\n<h2>Formation internationale</h2>\r\n\r\n<p>Doubles dipl&ocirc;mes, dipl&ocirc;mes conjoints, Erasmus Mundus</p>\r\n\r\n<h2>Dimension internationale</h2>\r\n\r\n<p>Le Master Gestion Int&eacute;gr&eacute;e de l&#39;Environnement, de la Biodiversit&eacute; et des Territoires GIEBioTE est une formation franco-canadienne, port&eacute;e et bi-diplom&eacute;e &agrave; la fois par l&#39;Universit&eacute; de Montpellier et l&#39;Universit&eacute; de de Sherbrooke (Canada).&nbsp; Le M1 de ce parcours se d&eacute;roule obligatoirement au Canada (se rapprocher de la responsable de ce parcours).</p>\r\n\r\n<h2>Organisation</h2>\r\n\r\n<h2>Contr&ocirc;le des connaissances</h2>\r\n\r\n<p>cf. fiches UE</p>\r\n\r\n<h2>Ouvert en alternance</h2>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n			<th>\r\n			<p>Type de contrat</p>\r\n			</th>\r\n			<td>\r\n			<p>Contrat d&#39;apprentissage, Contrat de professionnalisation</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Alternance possible en Master 1 et en Master 2 selon les parcours. (cf. calendrier d&#39;alternance aupr&egrave;s du CFA)</p>\r\n\r\n<h2>Modalit&eacute;s d&#39;alternance</h2>\r\n\r\n<p>Les parcours ouverts &agrave; l&rsquo;alternance (contrat pro et apprentissage) sont :<br />\r\nM2 - Double comp&eacute;tence en &eacute;cologie et gestion de la biodiversit&eacute; &ndash;parcours ouvert &agrave; un acc&egrave;s direct en M2.<br />\r\nM2 - Production et Exploitation Durables des Bioressources Aquatiques AQUADURA<br />\r\nM2 - Recherche appliqu&eacute;e pour conserver la biodiversit&eacute; RAINET&rsquo;<br />\r\nM2 - Ing&eacute;nierie &eacute;cologique et gestion de la biodiversit&eacute; IEGB<br />\r\nM2 - Communication et &eacute;ducation &agrave; la biodiversit&eacute; ComBiodiv<br />\r\nM1- Gestion de l&rsquo;environnement et de la biodiversit&eacute;<br />\r\nLe calendrier d&rsquo;apprentissage est d&eacute;fini pour la dur&eacute;e de la formation (1 &agrave; 2 ans selon les parcours) et est disponible aupr&egrave;s du CFA (cf. contacts)</p>\r\n\r\n<h2>Stages, projets tutor&eacute;s</h2>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n			<th>\r\n			<p>Stage</p>\r\n			</th>\r\n			<td>\r\n			<p>Obligatoire</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>\r\n			<p>Dur&eacute;e du stage</p>\r\n			</th>\r\n			<td>\r\n			<p>3 mois; 4.5 mois; 6 mois (selon parcours)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>\r\n			<p>Stage &agrave; l&#39;&eacute;tranger</p>\r\n			</th>\r\n			<td>\r\n			<p>Possible</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>\r\n			<p>Dur&eacute;e du stage &agrave; l&#39;&eacute;tranger</p>\r\n			</th>\r\n			<td>\r\n			<p>identique dur&eacute;e stage en France</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Tous les &eacute;tudiants de ce Master ont 2 stages longs &agrave; r&eacute;aliser au cours de leur cursus : 4,5 mois en M1 (3 en GIEBioTE)&nbsp; et 5 &agrave; 6 mois en M2, avec des d&eacute;clinaisons sp&eacute;cifiques par parcours. Les &eacute;tudiants sont obligatoirement encadr&eacute;s par un tuteur d&rsquo;entreprise et suivis par leur &eacute;quipe p&eacute;dagogique &agrave; toutes les &eacute;tapes de la r&eacute;alisation des stages, en particulier du stage de M2 ou stage de fin d&rsquo;&eacute;tude qui rev&ecirc;t une importance capitale pour leur insertion professionnelle.&nbsp;</p>\r\n\r\n<p>Se r&eacute;f&eacute;rer aux fiches parcours pour une pr&eacute;sentation plus fine des stages.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>De nombreuses unit&eacute;s d&rsquo;enseignement proposent des enseignements sous forme de projets en &eacute;quipe. Certains d&rsquo;entre eux sont transversaux &agrave; la mention. Tous permettent aux &eacute;tudiants la mise en application dans des cas op&eacute;rationnels de leurs acquis d&rsquo;apprentissage. Parmi les plus gros projets tutor&eacute;s, citons :&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Le salon de l&rsquo;&eacute;cologie et de la biodiversit&eacute; en Master 2 dans lequel tous les &eacute;tudiants M2 s&rsquo;impliquent &agrave; des degr&eacute;s divers sur des fiches de poste sp&eacute;cifique. Ce salon est un forum des m&eacute;tiers et des formations, un congr&egrave;s scientifique et technique, un lieu de rencontres professionnelles (&hellip;) https://www.salon-ecologie.com/</li>\r\n	<li>Festi&rsquo;Versit&eacute; en Master 2, qui est un festival de la biodiversit&eacute; permettant de sensibiliser et &eacute;duquer le grand public aux enjeux de l&rsquo;&eacute;cologie</li>\r\n	<li>Le projet d&rsquo;&eacute;tude de la Biodiversit&eacute; en Master 1, dans lequel les &eacute;tudiants se forment aux m&eacute;thodes d&rsquo;&eacute;chantillonnage et au suivi sur le terrain</li>\r\n	<li>Le cogithon en Master 2, qui met en concurrence des &eacute;quipes d&rsquo;&eacute;tudiants dans leur r&eacute;ponse &agrave; appel d&rsquo;offre &eacute;labor&eacute; par les &eacute;tudiants eux-m&ecirc;mes en partenariat avec des acteurs du territoire et en fonction des enjeux.</li>\r\n	<li>Les projets en entreprise, il s&rsquo;agit de mission de courte dur&eacute;e par groupe de 3 ou 4 en immersion au sein d&rsquo;une entreprise ou une association.</li>\r\n	<li>...</li>\r\n</ul>\r\n\r\n<h2>Programme</h2>\r\n\r\n<p>En M2 les parcours sont :</p>\r\n\r\n<ol>\r\n	<li>Gestion Int&eacute;gr&eacute;e de l&rsquo;Environnement, de la Biodiversit&eacute; et des Territoires (en bi-diplomation avec l&rsquo;Universit&eacute; de Sherbrooke) &ndash; en formation initiale et formation continue.</li>\r\n	<li>Double comp&eacute;tence en &eacute;cologie et gestion de la biodiversit&eacute; &ndash; uniquement ouvert &agrave; l&rsquo;apprentissage ou avec un contrat de professionnalisation, parcours ouvert &agrave; un acc&egrave;s direct en M2.</li>\r\n	<li>Production et Exploitation Durables des Bioressources Aquatiques - formation initiale, formation continue et apprentissage.</li>\r\n	<li>Recherche appliqu&eacute;e pour conserver la biodiversit&eacute; - formation initiale, formation continue et apprentissage.</li>\r\n	<li>Ing&eacute;nierie &eacute;cologique et gestion de la biodiversit&eacute; - formation initiale, formation continue et apprentissage.</li>\r\n	<li>Communication et &eacute;ducation &agrave; la biodiversit&eacute; - formation initiale, formation continue et apprentissage.</li>\r\n</ol>\r\n\r\n<p>Les diff&eacute;rents parcours se d&eacute;clinent en M2 (sauf le parcours franco-canadien GIEBioTE diff&eacute;renti&eacute; d&egrave;s le M1 cf. https://ingenieurs-ecologues.com/presentation-parcours-giebiote/). Les Masters impliqu&eacute;s dans cette nouvelle mention ont une longue exp&eacute;rience du suivi individualis&eacute; des &eacute;tudiants pour les aider dans la construction de leur projet de formation et &eacute;laborer leur projet professionnel. Ainsi, les &eacute;tudiants entrant en formation en M1, m&ecirc;me s&rsquo;ils seront ensemble dans les UE de tronc commun, auront des suivis personnalis&eacute;s d&egrave;s le M1 en fonction des parcours (M2) qu&rsquo;ils auront identifi&eacute;s comme &eacute;tant n&eacute;cessaires &agrave; la r&eacute;alisation de leur projet professionnel. Le recrutement de la promotion en M1 sera aussi d&eacute;termin&eacute; par nos capacit&eacute;s d&rsquo;accueil dans les diff&eacute;rents parcours de M2.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>La premi&egrave;re ann&eacute;e de la mention comprend :</p>\r\n\r\n<ol>\r\n	<li>Le parcours Gestion Int&eacute;gr&eacute; de l&rsquo;Environnement, de la Biodiversit&eacute; et des Territoires (en bi-diplomation avec l&rsquo;Universit&eacute; de Sherbrooke) &ndash; formation initiale et continue, et se d&eacute;roulant obligatoirement au Canada (Universit&eacute; de Sherbrooke) ;</li>\r\n	<li>Gestion de l&rsquo;environnement et de la biodiversit&eacute; (tronc commun) formation initiale et continue ;</li>\r\n	<li>Gestion de l&rsquo;environnement et de la biodiversit&eacute; par apprentissage (il se distingue du pr&eacute;c&eacute;dent par des adaptations &agrave; l&rsquo;alternance).</li>\r\n</ol>\r\n\r\n<p>Les &eacute;tudiants seront recrut&eacute;s par parcours en fonction des finalit&eacute;s professionnelles (d&eacute;clin&eacute;es par les parcours de M2 - sauf GIEBioTE cf. pr&eacute;c&eacute;demment). L&rsquo;&eacute;quipe p&eacute;dagogique g&egrave;re au niveau de la mention les recrutements des &eacute;tudiants afin d&rsquo;optimiser l&rsquo;ad&eacute;quation parcours ant&eacute;rieur &ndash; projet de formation &ndash; projet professionnel des candidats. Les &eacute;tudiants en Double Comp&eacute;tence (M2) sont accueillis en acc&egrave;s direct (reconversions, ing&eacute;nieurs dipl&ocirc;m&eacute;s, etc.).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Pour tous les parcours de M1 et M2 de cette mention, sauf le Master 1 GIEBIOTE, les enseignements se d&eacute;roulent en France, &agrave; Montpellier, au sein de la facult&eacute; des sciences (sauf d&eacute;placements pr&eacute;vus sur le terrain, en entreprise et les stages). Les enseignements peuvent &ecirc;tre adapt&eacute;s aux enseignements par visioconf&eacute;rence si la situation sanitaire l&rsquo;exige. Le Master 1 GIEBIOTE se d&eacute;roule au Canada (se rapprocher de la responsable de ce parcours).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>');

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
(1, 2, 'La Banque Postale', 'La Banque Postale', 'logo-laposte-0601361222766-web-tete-6218da5c71e17.jpg', 'logo-logolaposte-part-6218da5c724c1.svg', NULL),
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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `photos_actions_assos`
--

INSERT INTO `photos_actions_assos` (`id`, `photoactasso_id`, `photoactionsasso`, `altphotoactionsasso`) VALUES
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
(22, 2, '07a3e7da032dc2cbbd2395622c915ba0.jpg', NULL),
(23, 1, '11993ec500cbe755e0e1acac78bc4db5.jpg', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `photos_actions_masters`
--

DROP TABLE IF EXISTS `photos_actions_masters`;
CREATE TABLE IF NOT EXISTS `photos_actions_masters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photos_actions_id` int(11) DEFAULT NULL,
  `photoactionsmaster` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `altphotoactionsmaster` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_C3DA0381C1B8C12B` (`photos_actions_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `photos_actions_masters`
--

INSERT INTO `photos_actions_masters` (`id`, `photos_actions_id`, `photoactionsmaster`, `altphotoactionsmaster`) VALUES
(1, 1, '6d5a4b6d47f5ed0712cd9d00aea8512a.jpg', NULL),
(2, 1, 'd58850fa685cf59295f74e65e1552bdc.jpg', NULL),
(3, 1, '4ea9788ddce9220bfdb1c29b1858be9b.jpg', NULL),
(4, 1, '9d1b60acd1db7b4d15321ff78529bd30.jpg', NULL),
(5, 1, '7f2c505a14804805847b8ba0a83f4b54.jpg', NULL),
(6, 1, '585c63c814f82d675527bb1636090dbf.jpg', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `reset_password_request`
--

DROP TABLE IF EXISTS `reset_password_request`;
CREATE TABLE IF NOT EXISTS `reset_password_request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `selector` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hashed_token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requested_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `expires_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`id`),
  KEY `IDX_7CE748AA76ED395` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Structure de la table `storages`
--

DROP TABLE IF EXISTS `storages`;
CREATE TABLE IF NOT EXISTS `storages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namestorage` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descriptionstorage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `storages`
--

INSERT INTO `storages` (`id`, `namestorage`, `descriptionstorage`) VALUES
(1, 'Armoire N°2 Local Assos', NULL),
(2, 'Armoire N°1 Local Assos', 'Armoire du fond');

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `roles`, `password`, `name_user`, `first_name_user`, `address1_user`, `address2_user`, `cp_user`, `town_user`, `phone_user`, `photo_user`, `study_user`, `year_menbership_user`, `newsletters_news_user`, `newsletter_intership_user`, `newsletter_assos_user`, `contactinfo_user`) VALUES
(1, 'jacques.lemoine44@gmail.com', '[\"ROLE_ADMIN\"]', '$2y$13$J0SuX.xFvuo4lMEXWL95y.LVJ/37KEv1qBFGbpICydxmJ478DbiWO', 'Lemoine Président', 'Jacques', 'adresse 1', 'xxxxxxxxxxxxxx', '44600', 'ssssssssssss', '0202020202', 'images-1-621c9f28dd97c.jpg', 'sss', 1990, 1, 1, 1, 1),
(2, '11111@gmail.fr', '[\"ROLE_USER\"]', '123456', 'TITI Secrétaire', 'Justine', '1131111', '11111', '2222', '311', '0203040506', 'images-2-6218a357a2759.jpg', '454', 1980, 0, 0, 0, 0),
(3, '2222222222@ffff.fr', '[\"ROLE_USER\"]', '8888', 'machin', 'Elodie', '1212', '3333', '6666', '33131', '32223323', 'dd429bd538bb996555801baf470c8b24-6218a3622e193.jpg', '1111', 555, 0, 0, 0, 0),
(4, 'toto@gmail.com', '[\"ROLE_USER\"]', '$2y$13$16wFlmPUlGGrQhxgwgIrlu835Q3oVhLz8/W0WY1AA7iBG5z8AdZt.', 'Machin', 'Micheline', 'adresse 1', 'xxxxxxxxxxxxxx', '44600', 'ssssssssssss', 's22ss3s33s3', 'depositphotos-62275193-stock-photo-young-woman-portrait-621ceef17da7f.jpg', 'sss', 1980, 1, 1, 1, 1),
(5, 'quentin.barnard@gmail.com', '[\"ROLE_USER\"]', '$2y$13$DfiN.ryCdJ5qF2.7cVlP0.xsH9LIiHkNMEE3vFx2lc4tlIV82jrP6', 'Barnard', 'Quentin', 'adresse 1', 'xxxxxxxxxxxxxx', '44600', 'ssssssssssss', '0102030405', 'istockphoto-462535397-612x612-621e322dc0c2f.jpg', '1987', 1987, 1, 1, 1, 1),
(6, 'pierre@gmail.com', '[\"ROLE_OTHER\"]', '$2y$13$xek0fFhXoO/LlAcjAzNwnulB5PB3fdKaBkiLFQ.6uJ2jV43i3kwo.', 'Bidule Trésorier et Trésorier Adjoint', 'pierre', 'adresse 1', 'xxxxxxxxxxxxxx', '44600', 'ssssssssssss', '0212121212', 'images-621e349a1d1db.jpg', 'sss', 1987, 1, 1, 1, 1),
(7, 'marcel.barbier@gmail.com', '[\"ROLE_GE\"]', '$2y$13$8FX4spKsC6de4OsbkDqGlOcmulOXk/lvHxBP/3ngltVHVLrJZGw/G', 'Barbier', 'Marcel', 'adresse 1', 'xxxxxxxxxxxxxx', '44600', 'Saint-Nazaire', '0205060708', '', 'sss', 1999, 1, 1, 1, 1),
(8, 'antoine-mahe@gmail.com', '[\"ROLE_USER\"]', '$2y$13$J4gJ.mPO9066DHpGQZh0VOPIWa9aEpR7Y2oNewj5HXOO69Mk0eEem', 'Mahé', 'Antoine', '122 route barrée', 'xxxxxxxxxxxxxx', '44600', 'Saint-Nazaire', '0102030405', NULL, 'master', 1980, 0, 0, 0, 0);

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
-- Déchargement des données de la table `users_functions`
--

INSERT INTO `users_functions` (`users_id`, `functions_id`) VALUES
(1, 1),
(2, 3),
(5, 2),
(6, 2),
(6, 4),
(7, 5);

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
-- Contraintes pour la table `actions_masters`
--
ALTER TABLE `actions_masters`
  ADD CONSTRAINT `FK_B3C951E5B814011E` FOREIGN KEY (`actions_users_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `actions_masters_themes`
--
ALTER TABLE `actions_masters_themes`
  ADD CONSTRAINT `FK_91F9EC618870C1C9` FOREIGN KEY (`actions_masters_id`) REFERENCES `actions_masters` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_91F9EC6194F4A9D2` FOREIGN KEY (`themes_id`) REFERENCES `themes` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `doc_actions_assos`
--
ALTER TABLE `doc_actions_assos`
  ADD CONSTRAINT `FK_7530D4D8C55FE119` FOREIGN KEY (`docactasso_id`) REFERENCES `actions_assos` (`id`);

--
-- Contraintes pour la table `doc_actions_masters`
--
ALTER TABLE `doc_actions_masters`
  ADD CONSTRAINT `FK_4B8EC35F8B16C204` FOREIGN KEY (`doc_actions_id`) REFERENCES `actions_masters` (`id`);

--
-- Contraintes pour la table `equipments`
--
ALTER TABLE `equipments`
  ADD CONSTRAINT `FK_6F6C254433B541AC` FOREIGN KEY (`equipmentsusers_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `FK_6F6C25445A0A5C2C` FOREIGN KEY (`equipementsstorages_id`) REFERENCES `storages` (`id`),
  ADD CONSTRAINT `FK_6F6C2544F5B36E0C` FOREIGN KEY (`equipmentsaffectations_id`) REFERENCES `affectations` (`id`);

--
-- Contraintes pour la table `fieldtripphotos`
--
ALTER TABLE `fieldtripphotos`
  ADD CONSTRAINT `FK_F09AAB91C1C7BE9B` FOREIGN KEY (`fieldstripsorigin_id`) REFERENCES `fieldtrips` (`id`);

--
-- Contraintes pour la table `fieldtrips`
--
ALTER TABLE `fieldtrips`
  ADD CONSTRAINT `FK_E49A697B3231D76` FOREIGN KEY (`usersorigin_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `link_actions_assos`
--
ALTER TABLE `link_actions_assos`
  ADD CONSTRAINT `FK_53A9A576DBF20D0C` FOREIGN KEY (`linkactasso_id`) REFERENCES `actions_assos` (`id`);

--
-- Contraintes pour la table `link_actions_masters`
--
ALTER TABLE `link_actions_masters`
  ADD CONSTRAINT `FK_5C08350B2AFA1A4` FOREIGN KEY (`links_actions_id`) REFERENCES `actions_masters` (`id`);

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
-- Contraintes pour la table `photos_actions_masters`
--
ALTER TABLE `photos_actions_masters`
  ADD CONSTRAINT `FK_C3DA0381C1B8C12B` FOREIGN KEY (`photos_actions_id`) REFERENCES `actions_masters` (`id`);

--
-- Contraintes pour la table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  ADD CONSTRAINT `FK_7CE748AA76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

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
