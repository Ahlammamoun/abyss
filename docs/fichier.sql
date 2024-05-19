-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 19 mai 2024 à 17:11
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `abyss`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `name` varchar(200) NOT NULL,
  `subtitle` text NOT NULL,
  `picture` text NOT NULL,
  `home_order` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`name`, `subtitle`, `picture`, `home_order`, `id`) VALUES
('ocean', 'L\' océan est une étendue d\'eau salée qui couvre env. 70,8% de la Terre. En anglais, le terme océan désigne également l\'une des grandes étendues d\'eau situées dans...\r\n‎ Océan Indien · ‎ Océan Pacifique · ‎ Océan Atlantique · ‎ Océan Arctique', 'https://www.google.com/url?sa=i&url=https%3A%2F%2Feducation.nationalgeographic.org%2Fresource%2Focean%2F&psig=AOvVaw33dlRvSKSrT1dxp_hYiIVr&ust=1715451610412000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCICD4bzZg4YDFQAAAAAdAAAAABAE', 1, 1),
('rivière', 'La rivière est un cours d\'eau de moyenne ou de faible importance par sa longueur et son débit', 'https://www.rumilly-tourisme.com/wp-content/uploads/2020/01/cheran-CP_L.-Madelon.jpg', 2, 2),
('mers', 'La mer est l\'étendue d\'eau salée, qui couvre la plus grande partie (environ 71 %) de la surface terrestre ,. Globalement interconnectée', 'https://www.journee-mondiale.com/medias/grande/images/journee/mer.jpg', 3, 3),
('lacs', 'Un lac est ainsi plutôt plus grand et plus profond qu\'un étang, lequel est plus grand et plus profond qu\'une mare.', 'https://www.france-montagnes.com/sites/default/files/activite/lac-annecy-c-miroslava-arnaudova-fotolia.jpg', 5, 4);

-- --------------------------------------------------------

--
-- Structure de la table `specie`
--

CREATE TABLE `specie` (
  `name` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `picture` text NOT NULL,
  `number` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `specie`
--

INSERT INTO `specie` (`name`, `description`, `picture`, `number`, `id`, `category_id`, `type_id`) VALUES
('le revenant', 'Les Opisthoproctidae sont une famille de petits poissons Osmeriformes vivant dans les abysses. Ils ont la particularité d\'avoir des yeux énormes situés au milieu d\'un crâne transparent et sont communément appelés revenants.', 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.lejde.be%2Fmonde%2F2024%2F01%2F04%2Fconnais-tu-le-macropinna-microstoma-un-etrange-poisson-a-la-tete-transparente-34912%2F&psig=AOvVaw2agsG_7QyfYXe1poiy2c-f&ust=1715451229425000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCPC0r_zXg4YDFQAAAAAdAAAAABAE', 3, 3, 3, 1),
('Le requin-lézard', 'Le requin-lézard, requin frangé, requin festonné, requin à tunique ou requin à collerettes est une espèce de requins de la famille des chlamydosélachidés avec une distribution grande mais inégale, dans les océans Atlantique et Pacifique.', 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.bordabord.org%2Frequin-lezard-on-vous-parle-de-ce-requin-prehistorique%2F&psig=AOvVaw3af4I5VFTcxMxTI5Axmlay&ust=1715451314670000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCLi__KTYg4YDFQAAAAAdAAAAABAE', 4, 4, 4, 2),
('Le bathynome géant', 'Le bathynome géant est une espèce de crustacés isopodes marins de la famille des Cirolanidae.', 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fici.exploratv.ca%2Fblogue%2Fbathynomus-giganteus-grand-cloporte-ocean-crustace%2F&psig=AOvVaw1IbddJRj3rnr97UBXN2QRa&ust=1715451392617000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCJiD1dDYg4YDFQAAAAAdAAAAABAE', 5, 5, 2, 1),
('Le Requin-lutin', 'Le Requin-lutin ou requin-gobelin est une espèce de requins de la famille monotypique des Mitsukurinidae qui comporte un seul genre, Mitsukurina', 'https://www.google.com/url?sa=i&url=https%3A%2F%2Flepeaubleu.com%2Frequin-lutin-mitsukurina-owstoni%2F&psig=AOvVaw2EpJ6YBmmVvzn2JYN7XQqe&ust=1715451491791000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCIC-vfzYg4YDFQAAAAAdAAAAABAE', 6, 6, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `name` varchar(200) NOT NULL,
  `footer order` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`name`, `footer order`, `id`) VALUES
('mammifère', 1, 1),
('mollusque', 2, 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `specie`
--
ALTER TABLE `specie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_category` (`category_id`),
  ADD KEY `fk_type` (`type_id`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `specie`
--
ALTER TABLE `specie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `specie`
--
ALTER TABLE `specie`
  ADD CONSTRAINT `fk_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_type` FOREIGN KEY (`type_id`) REFERENCES `type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
