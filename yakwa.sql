-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 25 jan. 2019 à 14:26
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `yakwa`
--

-- --------------------------------------------------------

--
-- Structure de la table `acteurs`
--

CREATE TABLE `acteurs` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `acteurs`
--

INSERT INTO `acteurs` (`id`, `nom`) VALUES
(1, 'George Clooney'),
(2, 'Ewan McGregor'),
(3, 'Ryan Gosling'),
(4, 'Bryan Cranston'),
(5, 'Matthew McConaughey'),
(6, 'Michael Caine'),
(7, 'Bruce Willis'),
(8, 'Milla Jovovich'),
(9, 'Benedict Cumberbatch'),
(10, 'Mads Mikkelsen'),
(11, 'Viggo Mortensen'),
(12, 'Ian McKellen'),
(13, 'Mark Hamill'),
(14, 'Harrison Ford'),
(15, 'James McAvoy'),
(16, 'Sandra Bullock'),
(17, 'Sarah Paulson'),
(18, 'Ary Abittan'),
(19, 'François-Xavier Demaison'),
(21, 'Jack Nicholson'),
(22, 'Shelley Duvall'),
(23, 'Danny Lloyd'),
(24, 'Michael Berryman'),
(25, 'Dean R.Brooks'),
(26, 'Brad Pitt'),
(27, 'Christoph Waltz'),
(28, 'John Malkovich'),
(29, 'Cameron Diaz'),
(30, 'Angelina Jolie'),
(31, 'Johnny Lee Miller'),
(32, 'Leonardo Di Caprio'),
(33, 'Tom Hardy'),
(34, 'Ryan Reynolds'),
(35, 'Gemma Arterton'),
(36, 'Keir Dullea'),
(37, 'Gary Lockwood'),
(38, 'Stephane Bak'),
(39, 'Camelia Jordana'),
(40, 'Tom Hanks'),
(41, 'Michael Clarke Duncan'),
(42, 'Morgan Freeman'),
(43, 'Tim Robbins'),
(44, 'Johnny Depp'),
(45, 'Vincent Cassel'),
(46, 'Tchéki Karyo');

-- --------------------------------------------------------

--
-- Structure de la table `films`
--

CREATE TABLE `films` (
  `id` int(11) NOT NULL,
  `titre` varchar(100) DEFAULT NULL,
  `annee` int(11) DEFAULT NULL,
  `synopsis` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `films`
--

INSERT INTO `films` (`id`, `titre`, `annee`, `synopsis`) VALUES
(1, 'les chèvres du pentagone', 2010, 'Bob Wilton, un journaliste désespéré fait l\'\'heureuse rencontre de Lyn Cassady, un soldat aux pouvoirs paranormaux combattant le terrorisme. Ils se rendent ensemble en Irak ou ils rencontrent Bill Django, le fondateur de l\'\'unité, et Larry Hooper, soldat de l\'\'unité qui dirige une prison'),
(2, 'Drive', 2011, 'Un jeune homme solitaire, The Driver, conduit le jour à Hollywood pour le cinéma en tant que cascadeur et la nuit pour des truands. Ultra professionnel et peu bavard, il a son propre code de conduite. Jamais il n’a pris part aux crimes de ses employeurs autrement qu’en conduisant - et au volant, il est le meilleur ! Shannon, le manager qui lui décroche tous ses contrats, propose à Bernie Rose, un malfrat notoire, d’investir dans un véhicule pour que son poulain puisse affronter les circuits de stock-car professionnels. Celui-ci accepte mais impose son associé, Nino, dans le projet.C’est alors que la route du pilote croise celle d’Irene et de son jeune fils. Pour la première fois de sa vie, il n’est plus seul.Lorsque le mari d’Irene sort de prison et se retrouve enrôlé de force dans un braquage pour s’acquitter d’une dette, il décide pourtant de lui venir en aide.'),
(3, 'Interstellar', 2014, 'Le film raconte les aventures d’un groupe d’explorateurs qui utilisent une faille récemment découverte dans l’espace-temps afin de repousser les limites humaines et partir à la conquête des distances astronomiques dans un voyage interstellaire.'),
(4, 'Le cinquième élément', 1997, 'Le cinquième élément revient pour sauver le monde'),
(5, 'Doctor Strange', 2016, 'Doctor Strange suit l\'histoire du Docteur Stephen Strange, talentueux neurochirurgien qui, après un tragique accident de voiture, doit mettre son égo de côté et apprendre les secrets dun monde caché de mysticisme et de dimensions alternatives. Basé à New York, dans le quartier de Greenwich Village, Doctor Strange doit jouer les intermédiaires entre le monde réel et ce qui se trouve au-delà, en utlisant un vaste éventail daptitudes métaphysiques et dartefacts pour protéger le Marvel Cinematic Universe.'),
(6, 'Le retour du roi', 2003, 'Les armees de Sauron ont attaque Minas Tirith, la capitale de Gondor. Jamais ce royaume autrefois puissant n a eu autant besoin de son roi. Mais Aragorn trouvera-t-il en lui la volonte d accomplir sa destinee ?'),
(7, 'L\'empire contre attaque', 1980, 'Malgre la destruction de l Etoile Noire, l Empire maintient son emprise sur la galaxie, et poursuit sans relache sa lutte contre lAlliance rebelle. Bases sur la planete glacee de Hoth, les rebelles essuient un assaut des troupes imperiales.'),
(8, 'Split', 2017, 'Kevin a déjà révélé 23 personnalités, avec des attributs physiques différents pour chacune, à sa psychiatre dévouée, la docteure Fletcher, mais l’une d’elles reste enfouie au plus profond de lui. Elle va bientôt se manifester et prendre le pas sur toutes les autres. Poussé à kidnapper trois adolescentes, dont la jeune Casey, aussi déterminée que perspicace, Kevin devient dans son âme et sa chair, le foyer d’une guerre que se livrent ses multiples personnalités, alors que les divisions qui régnaient jusqu’alors dans son subconscient volent en éclats.'),
(9, 'Bird Box', 2018, 'Alors qu\'\'une mystérieuse force décime la population mondiale, une seule chose est sûre : ceux qui ont gardé les yeux ouverts ont perdu la vie. Malgré la situation, Malorie trouve l\'\'amour, l\'\'espoir et un nouveau départ avant de tout voir s\'\'envoler. Désormais, elle doit prendre la fuite avec ses deux enfants, suivre une rivière périlleuse jusqu\'\'au seul endroit où ils peuvent encore se réfugier. Mais pour survivre, ils devront entreprendre ce voyage difficile les yeux bandés.'),
(10, 'Coco', 2017, 'Depuis déjà plusieurs générations, la musique est bannie dans la famille de Miguel. Un vrai déchirement pour le jeune garçon dont le rêve ultime est de devenir un musicien aussi accompli que son idole, Ernesto de la Cruz. Bien décidé à prouver son talent, Miguel, par un étrange concours de circonstances, se retrouve propulsé dans un endroit aussi étonnant que coloré : le Pays des Morts. Là, il se lie d’amitié avec Hector, un gentil garçon mais un peu filou sur les bords. Ensemble, ils vont accomplir un voyage extraordinaire qui leur révèlera la véritable histoire qui se cache derrière celle de la famille de Miguel…'),
(12, 'The Shinning', 1980, 'Jack Torrance, gardien d un hôtel fermé l hiver, sa femme et son fils Danny s apprêtent à vivre de longs mois de solitude. Danny, qui possède un don de médium, le Shining, est effrayé à l idée d habiter ce lieu'),
(13, 'Vol au-dessus d\'un nid de coucou', 1975, 'Rebellion dans un hôpital psychiatrique à l instigation d un malade qui se révolte contre la dureté d une infirmière.'),
(14, 'Inglorious Bastards', 2009, 'Dans la France occupée de 1940, Shosanna Dreyfus assiste à l exécution de sa famille tombée entre les mains du colonel nazi Hans Landa. Shosanna s échappe de justesse et s enfuit à Paris où elle se construit une nouvelle identité en devenant exploitante d une salle de cinéma'),
(15, 'Mary & Max', 2009, 'Mary, une petite fille australienne de 9 ans écrit une lettre à Max, un juif obèse et autiste de New York.'),
(16, 'Dans la peau de John Malkovich', 1999, 'En difficulté financière, le marionettiste Craig Schwartz trouve un job au 7ème étage et demi d\'\'un building. En classant des dossiers il découvre un passage dérobé et l\'\'emprunte, ce qui le conduit à l\'\'intérieur de... John Malkovich !'),
(17, 'Hackers', 1995, 'Un jeune hacker connu sous le nom de zero cool découvre le virus crée par le responsable informatique d\'une grosse entreprise.'),
(18, 'Inception', 2010, 'Dans Inception, il est possible d\'\'explorer le rêve d\'\'une personne pour y extraire des idées. Cobb, un extracteur d\'\'idées, entreprend de tenter une \'\'inception\'\', à savoir l\'\'implantation d\'\'une idée dans l\'\'esprit de quelqu\'\'un. La cible est un homme promu PDG suite à la mort de son père, et il faudra implanter l\'\'idée de démanteler l\'\'empire industriel dont il vient d\'\'hériter.'),
(19, 'The voices', 2014, 'Employé dans une usine de baignoires, Jerry Hickfang tombe amoureux d\'une de ses collègues. Il commence une relation avec elle, mais finit par la tuer accidentellement. Psychotique (plus précisément schizophrène), Jerry croit entendre son chat et son chien lui parler. Il obéit aux conseils de l\'un d\'entre eux et continue à tuer.'),
(20, '2001 : L\'odyssée de l\'espace', 1968, 'A l\'\'aube de l\'Humanité, dans le désert africain, une tribu de primates subit les assauts répétés d\'\'une bande rivale, qui lui dispute un point d\'\'eau. La découverte d\'un monolithe noir inspire au chef des singes assiégés un geste inédit et décisif. Brandissant un os, il passe à l\'attaque et massacre ses adversaires. Le premier instrument est né. En 2001, quatre millions d\'\'années plus tard, un vaisseau spatial évolue en orbite lunaire au rythme langoureux du Beau Danube Bleu. A son bord, le Dr. Heywood Floyd enquête secrètement sur la découverte d\'un monolithe noir qui émet d\'étranges signaux vers Jupiter. Dix-huit mois plus tard, les astronautes David Bowman et Frank Poole font route vers Jupiter à bord du Discovery. Les deux hommes vaquent sereinement à leurs tâches quotidiennes sous le contrôle de HAL 9000, un ordinateur exceptionnel doué d\'\'intelligence et de parole. Cependant, HAL, sans doute plus humain que ses maîtres, commence à donner des signes d\'inquiétude : à quoi rime cette mission et que risque-t-on de découvrir sur Jupiter ?'),
(21, 'Spiderman : Next generation', 2018, 'Les aventures de Miles Morales, un adolescent afro-américain et portoricain qui vit à Brooklyn et s’efforce de s’intégrer dans son nouveau collège à Manhattan. Mais la vie de Miles se complique quand il se fait mordre par une araignée radioactive et se découvre des super-pouvoirs : il est désormais capable d’empoisonner ses adversaires, de se camoufler, de coller littéralement aux murs et aux plafonds ; son ouïe est démultipliée... Dans le même temps, le plus redoutable cerveau criminel de la ville, le Caïd, a mis au point un accélérateur de particules nucléaires capable d’ouvrir un portail sur d’autres univers. Son invention va provoquer l’arrivée de plusieurs autres versions de Spider-Man dans le monde de Miles, dont un Peter Parker plus âgé, Spider-Gwen, Spider-Man Noir, Spider-Cochon et Peni Parker, venue d’un dessin animé japonais.'),
(22, 'Blade Runner 2049', 2017, 'En 2049, la société est fragilisée par les nombreuses tensions entre les humains et leurs esclaves créés par bioingénierie. L’officier K est un Blade Runner : il fait partie d’une force d’intervention d’élite chargée de trouver et d’éliminer ceux qui n’obéissent pas aux ordres des humains. Lorsqu’il découvre un secret enfoui depuis longtemps et capable de changer le monde, les plus hautes instances décident que c’est à son tour d’être traqué et éliminé. Son seul espoir est de retrouver Rick Deckard, un ancien Blade Runner qui a disparu depuis des décennies...'),
(23, 'La ligne verte', 2000, 'Paul Edgecomb, pensionnaire centenaire dune maison de retraite, est hante par ses souvenirs. Gardien-chef du penitencier de Cold Mountain en 1935, il etait charge de veiller au bon deroulement des executions capitales en sefforçant dadoucir les derniers moments des condamnes. Parmi eux se trouvait un colosse du nom de John Coffey.'),
(24, 'Les évadés', 1995, 'En 1947, Andy Dufresne, un jeune banquier, est condamné à la prison a vie pour le meurtre de sa femme et de son amant. Ayant beau clamer son innocence, il est emprisonné à Shawshank, le pénitencier le plus sévère de l\'Etat du Maine.'),
(25, 'Fenêtre secrète', 2004, 'Mort Rainey devrait être devant son ordinateur, à écrire un autre de ses romans à succès. Mais son divorce le détruit et le prive de toute inspiration. Tout ce qui touche à la rupture devient un véritable cauchemar et sa page reste blanche.'),
(26, 'Dobermann', 1996, 'Le Dobermann et son gang défraient la chronique. Banques, postes, fourgons, tout y passe. Une anthologie du braquage, un best-of du hold-up ! En face d\'\'eux, un flic quelque peu pourri, qui fait de leur arrestation une affaire personnelle.');

-- --------------------------------------------------------

--
-- Structure de la table `films_acteurs`
--

CREATE TABLE `films_acteurs` (
  `ID_Film` int(11) NOT NULL,
  `ID_Acteur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `films_acteurs`
--

INSERT INTO `films_acteurs` (`ID_Film`, `ID_Acteur`) VALUES
(1, 1),
(1, 2),
(2, 3),
(2, 4),
(3, 5),
(3, 6),
(4, 7),
(4, 8),
(5, 9),
(5, 10),
(6, 11),
(6, 12),
(7, 13),
(7, 14),
(8, 15),
(9, 16),
(9, 17),
(10, 18),
(10, 19),
(12, 21),
(12, 22),
(12, 23),
(13, 21),
(13, 24),
(13, 25),
(14, 26),
(14, 27),
(16, 28),
(16, 29),
(17, 30),
(17, 31),
(18, 32),
(18, 33),
(19, 34),
(19, 35),
(20, 36),
(20, 37),
(21, 38),
(21, 39),
(22, 3),
(22, 14),
(23, 40),
(23, 41),
(24, 42),
(24, 43),
(25, 44),
(26, 45),
(26, 46);

-- --------------------------------------------------------

--
-- Structure de la table `films_genres`
--

CREATE TABLE `films_genres` (
  `ID_Film` int(11) NOT NULL,
  `ID_Genre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `films_genres`
--

INSERT INTO `films_genres` (`ID_Film`, `ID_Genre`) VALUES
(1, 1),
(2, 2),
(3, 4),
(4, 4),
(5, 5),
(6, 6),
(7, 4),
(8, 3),
(9, 5),
(10, 7),
(2, 3),
(12, 8),
(13, 9),
(14, 2),
(15, 7),
(16, 1),
(17, 10),
(18, 4),
(19, 1),
(20, 4),
(21, 7),
(22, 4),
(23, 5),
(24, 9),
(25, 3),
(26, 2);

-- --------------------------------------------------------

--
-- Structure de la table `films_realisateurs`
--

CREATE TABLE `films_realisateurs` (
  `ID_Film` int(11) NOT NULL,
  `ID_Realisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `films_realisateurs`
--

INSERT INTO `films_realisateurs` (`ID_Film`, `ID_Realisateur`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(10, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15),
(16, 16),
(17, 17),
(18, 3),
(19, 18),
(20, 12),
(21, 19),
(21, 20),
(21, 21),
(22, 22),
(23, 23),
(24, 23),
(25, 25),
(26, 26);

-- --------------------------------------------------------

--
-- Structure de la table `films_users`
--

CREATE TABLE `films_users` (
  `ID_Film` int(11) NOT NULL,
  `ID_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `genres`
--

CREATE TABLE `genres` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `genres`
--

INSERT INTO `genres` (`id`, `nom`) VALUES
(1, 'comédie'),
(2, 'action'),
(3, 'Thriller'),
(4, 'science-fiction'),
(5, 'Fantastique'),
(6, 'Aventure'),
(7, 'Animation'),
(8, 'horreur'),
(9, 'Drame'),
(10, 'Policier');

-- --------------------------------------------------------

--
-- Structure de la table `realisateurs`
--

CREATE TABLE `realisateurs` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `realisateurs`
--

INSERT INTO `realisateurs` (`id`, `nom`) VALUES
(1, 'Grant Heslov'),
(2, 'Nicolas Winding-Refn'),
(3, 'Christopher Nolan'),
(4, 'Luc Besson'),
(5, 'Scott Derrickson'),
(6, 'Peter Jackson'),
(7, 'Irvin Kershner'),
(8, 'M.Night Shyamalan'),
(9, 'Suzanne Bier'),
(10, 'Lee Unkrich'),
(11, 'Adrian Molina'),
(12, 'Stanley Kubrick'),
(13, 'Milos Forman'),
(14, 'Quentin Tarantino'),
(15, 'Adam Elliot'),
(16, 'Spike Jonze'),
(17, 'Housam boualak'),
(18, 'Marjane Satrapi'),
(19, 'Bob Persichetti'),
(20, 'Peter Ramsey'),
(21, 'Rodney Rothman'),
(22, 'Denis Villeneuve'),
(23, 'Franck Darabont'),
(25, 'David Koepp'),
(26, 'Jan Kounen');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(100) DEFAULT NULL,
  `mot_de_passe` varchar(100) DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `acteurs`
--
ALTER TABLE `acteurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `films_acteurs`
--
ALTER TABLE `films_acteurs`
  ADD KEY `ID_Film` (`ID_Film`),
  ADD KEY `ID_Acteur` (`ID_Acteur`);

--
-- Index pour la table `films_genres`
--
ALTER TABLE `films_genres`
  ADD KEY `ID_Film` (`ID_Film`),
  ADD KEY `ID_Genre` (`ID_Genre`);

--
-- Index pour la table `films_realisateurs`
--
ALTER TABLE `films_realisateurs`
  ADD KEY `ID_Film` (`ID_Film`),
  ADD KEY `ID_Realisateur` (`ID_Realisateur`);

--
-- Index pour la table `films_users`
--
ALTER TABLE `films_users`
  ADD KEY `ID_Film` (`ID_Film`),
  ADD KEY `ID_user` (`ID_user`);

--
-- Index pour la table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `realisateurs`
--
ALTER TABLE `realisateurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `acteurs`
--
ALTER TABLE `acteurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT pour la table `films`
--
ALTER TABLE `films`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `realisateurs`
--
ALTER TABLE `realisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `films_acteurs`
--
ALTER TABLE `films_acteurs`
  ADD CONSTRAINT `films_acteurs_ibfk_1` FOREIGN KEY (`ID_Film`) REFERENCES `films` (`id`),
  ADD CONSTRAINT `films_acteurs_ibfk_2` FOREIGN KEY (`ID_Acteur`) REFERENCES `acteurs` (`id`);

--
-- Contraintes pour la table `films_genres`
--
ALTER TABLE `films_genres`
  ADD CONSTRAINT `films_genres_ibfk_1` FOREIGN KEY (`ID_Film`) REFERENCES `films` (`id`),
  ADD CONSTRAINT `films_genres_ibfk_2` FOREIGN KEY (`ID_Genre`) REFERENCES `genres` (`id`);

--
-- Contraintes pour la table `films_realisateurs`
--
ALTER TABLE `films_realisateurs`
  ADD CONSTRAINT `films_realisateurs_ibfk_1` FOREIGN KEY (`ID_Film`) REFERENCES `films` (`id`),
  ADD CONSTRAINT `films_realisateurs_ibfk_2` FOREIGN KEY (`ID_Realisateur`) REFERENCES `realisateurs` (`id`);

--
-- Contraintes pour la table `films_users`
--
ALTER TABLE `films_users`
  ADD CONSTRAINT `films_users_ibfk_1` FOREIGN KEY (`ID_Film`) REFERENCES `films` (`id`),
  ADD CONSTRAINT `films_users_ibfk_2` FOREIGN KEY (`ID_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
