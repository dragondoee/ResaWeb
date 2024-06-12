-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 12 juin 2024 à 21:50
-- Version du serveur : 10.6.18-MariaDB
-- Version de PHP : 8.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `desgranges_resaweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `ambiance`
--

CREATE TABLE `ambiance` (
  `id_ambiance` int(11) NOT NULL,
  `nom_ambiance` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Déchargement des données de la table `ambiance`
--

INSERT INTO `ambiance` (`id_ambiance`, `nom_ambiance`) VALUES
(1, 'Aventure'),
(2, 'Horreur'),
(3, 'Cozy');

-- --------------------------------------------------------

--
-- Structure de la table `boisson`
--

CREATE TABLE `boisson` (
  `id_boisson` int(11) NOT NULL,
  `nom_boisson` varchar(50) NOT NULL,
  `description_boisson` text NOT NULL,
  `prix` int(11) NOT NULL,
  `img_boisson` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Déchargement des données de la table `boisson`
--

INSERT INTO `boisson` (`id_boisson`, `nom_boisson`, `description_boisson`, `prix`, `img_boisson`) VALUES
(1, 'Élixir Sombre', 'Boisson envoûtante qui fusionne la fraîcheur acidulée du citron vert avec la douceur mystérieuse de la myrtille. Cette limonade unique est conçue pour séduire et rafraîchir les palais les plus exigeants, offrant une expérience gustative à la fois complexe et revitalisante.', 13, 'elexir_sombre.jpg'),
(2, 'Nuit Mystérieuse', 'Un voyage sensoriel où réconfort et mystère se rencontrent dans chaque gorgée. \r\nAu cœur de la Nuit Mystérieuse se trouve un mélange de café fraîchement infusé, un trésor caché sous une couche de mousse au chocolat onctueuse. Cette mousse, légère comme un voile nocturne, dissimule avec élégance la richesse et la profondeur du café, offrant une tendresse enveloppante à chaque gorgée.', 11, 'nuit_mysterieuse.jpg'),
(3, 'Spectre Fumé', 'L\'essence de la nuit dans une boisson captivante. Avec son jus de pomme noir sucré et sa touche de charbon actif, cette création mystérieuse offre une expérience sensorielle unique. Couronnée d\'une fumée flottante, elle intrigue et enchante, invitant à une dégustation pleine de mystère et de délice.', 9, 'spectre_fume.jpg'),
(4, 'Brume Nocturne', 'Un élixir rouge intense mêlant la richesse des mûres à la douceur des framboises. Couronnée d\'une délicate fumée de bois, elle évoque l\'atmosphère envoûtante de la nuit dans une expérience sensorielle captivante.', 12, 'brume_nocturne.jpg'),
(5, 'Feu Divin', 'Une boisson fraîche et audacieuse, mêlant la douceur envoûtante de la cerise, la vivacité de l\'orange et une pointe d\'épices qui réchauffe délicatement le palais. Cette création unique incarne l\'équilibre parfait entre douceur fruitée et chaleur épicée, offrant une expérience gustative divine.', 13, 'feu_divin.jpg'),
(6, 'Vague Océane', 'Bien plus qu\'une simple boisson : c\'est une œuvre d\'art liquide, capturant l\'éclat changeant des océans dans un dégradé de bleus, de l\'obscurité mystique des profondeurs à la lumière éthérée de la surface, où le curaçao bleu infuse chaque gorgée d\'une touche de mystère et d\'élégance. ', 11, 'vague_oceane.jpg'),
(7, 'Souffle d’Air', 'Mocktail rafraîchissant qui capture l\'esprit de l\'été avec la douceur juteuse de la pastèque, la vivacité piquante du citron vert et la fraîcheur revitalisante de la menthe. Cette boisson légère et parfumée évoque une brise légère qui apaise les sens et ravive l\'esprit.', 8, 'souffle_air.jpg'),
(8, 'Terre Enchantée', 'Plus qu\'un simple latte glacé. C\'est une fusion magique de saveurs riches et réconfortantes qui transporte vos papilles dans un monde de délices exquis. Avec son mélange subtil de café et de caramel, cette boisson vous envoûte dès la première gorgée, vous invitant à vous perdre dans son charme envoûtant.', 12, 'terre_enchantee.jpg'),
(9, 'Éclat Rubis', 'Une fusion enivrante de fruits rouges et de doux cristaux de sucre. Cette boisson rouge flamboyante offre une expérience rafraîchissante et sucrée, où chaque gorgée révèle l\'éclat captivant de la saveur et de la texture.', 8, 'eclat_rubis.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_commande` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `boisson` int(11) NOT NULL,
  `reservation` int(11) NOT NULL,
  `quantite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Déchargement des données de la table `commande`
--

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id_resa` int(11) NOT NULL,
  `responsable` int(11) NOT NULL,
  `date_resa` date NOT NULL,
  `horaire` time NOT NULL,
  `duree` time NOT NULL,
  `nb_personne` int(11) NOT NULL,
  `salle` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Déchargement des données de la table `reservation`
--

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE `salle` (
  `id_salle` int(11) NOT NULL,
  `nom_salle` varchar(50) NOT NULL,
  `description_salle` text NOT NULL,
  `jeu` varchar(50) DEFAULT NULL,
  `prix_salle` decimal(10,0) NOT NULL,
  `photo_salle` varchar(50) NOT NULL,
  `ambiance` int(11) NOT NULL,
  `nouveaute` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Déchargement des données de la table `salle`
--

INSERT INTO `salle` (`id_salle`, `nom_salle`, `description_salle`, `jeu`, `prix_salle`, `photo_salle`, `ambiance`, `nouveaute`) VALUES
(1, 'Café de mamie', 'Entrez dans le Café de mamie, une salle chaleureuse et nostalgique où l\'on replonge dans les souvenirs d\'enfance. Avec ses fauteuils moelleux, ses étagères garnies de bibelots anciens et son éclairage tamisé, l\'ambiance est intime et apaisante. Des photos de famille, des napperons en dentelle et des airs rétro complètent le décor. Des senteurs de vanille et de cannelle embaument l\'air et offrent des moments de détente.', 'Le Jardin des Souvenirs', 7, 'cafe.jpg', 3, 0),
(2, 'Route sacrée', 'Découvrez la Route sacrée, une salle unique mêlant l\'ambiance familière d\'une aire de repos à une aura sacrée. Ici, chaque pause est une expérience spirituelle, où les voyageurs se ressourcent et se connectent avec leur destinée. Des éléments sacrés et mystiques imprègnent l\'atmosphère, offrant une pause bienvenue dans le tumulte du voyage. Venez vivre reprendre des forces avant de continuer le voyage.', 'Les Chemins de la Destinée', 5, 'route.jpg', 1, 0),
(3, 'Temple des éléments', 'Bienvenue dans le Temple des éléments, où vos rêves de maîtrise des forces naturelles prennent vie. Imprégnez vous de l\'atmosphère sacrée de ce lieu empreint de mysticisme et de puissance. Que vous aspiriez à dompter le feu, l\'eau, l\'air ou la terre, ce temple vous offre l\'opportunité de vous connecter aux énergies primordiales. Accompagnez cette expérience transcendante avec nos boissons divines, concoctées pour élever votre esprit et intensifier votre connexion avec les éléments. Plongez dans cette aventure sensorielle et spirituelle où la magie est à portée de main.', 'L\'Odyssée des Éléments', 8, 'temple.jpg', 1, 1),
(4, 'Salon des invités', 'Plongez dans le Salon des invités, une salle sombre et mystérieuse réservée aux âmes les plus courageuses. Avec son éclairage tamisé, ses meubles anciens et ses tentures lourdes, l\'ambiance est à la fois inquiétante et fascinante. Des portraits austères et des chandeliers vacillants ajoutent à l\'atmosphère gothique. Oserez vous goûter aux spécialités du manoir, servies avec une touche de mystère et de frissons ? Cette expérience immersive promet des sensations fortes et une aventure hors du commun.', 'Le Manoir des Ombres', 10, 'manoir.jpg', 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nom_user` text NOT NULL,
  `prenom_user` text NOT NULL,
  `mail_user` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Déchargement des données de la table `user`
--


--
-- Index pour les tables déchargées
--

--
-- Index pour la table `ambiance`
--
ALTER TABLE `ambiance`
  ADD PRIMARY KEY (`id_ambiance`);

--
-- Index pour la table `boisson`
--
ALTER TABLE `boisson`
  ADD PRIMARY KEY (`id_boisson`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_commande`),
  ADD KEY `user` (`user`),
  ADD KEY `boisson` (`boisson`),
  ADD KEY `reservation` (`reservation`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_resa`),
  ADD KEY `salle` (`salle`),
  ADD KEY `responsable` (`responsable`);

--
-- Index pour la table `salle`
--
ALTER TABLE `salle`
  ADD PRIMARY KEY (`id_salle`),
  ADD KEY `ambiance` (`ambiance`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `ambiance`
--
ALTER TABLE `ambiance`
  MODIFY `id_ambiance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `boisson`
--
ALTER TABLE `boisson`
  MODIFY `id_boisson` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_commande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_resa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT pour la table `salle`
--
ALTER TABLE `salle`
  MODIFY `id_salle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `commande_ibfk_2` FOREIGN KEY (`boisson`) REFERENCES `boisson` (`id_boisson`),
  ADD CONSTRAINT `commande_ibfk_3` FOREIGN KEY (`reservation`) REFERENCES `reservation` (`id_resa`);

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`salle`) REFERENCES `salle` (`id_salle`),
  ADD CONSTRAINT `reservation_ibfk_3` FOREIGN KEY (`responsable`) REFERENCES `user` (`id_user`);

--
-- Contraintes pour la table `salle`
--
ALTER TABLE `salle`
  ADD CONSTRAINT `salle_ibfk_1` FOREIGN KEY (`ambiance`) REFERENCES `ambiance` (`id_ambiance`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
