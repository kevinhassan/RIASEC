-- Ajouter les départements
INSERT INTO Departement (departement_id,libelle) VALUES (1,'EGC');
INSERT INTO Departement (departement_id,libelle) VALUES (2,'GBA');
INSERT INTO Departement (departement_id,libelle) VALUES (3,'IG');
INSERT INTO Departement (departement_id,libelle) VALUES (4,'MAT');
INSERT INTO Departement (departement_id,libelle) VALUES (5,'MEA');
INSERT INTO Departement (departement_id,libelle) VALUES (6,'MI');
INSERT INTO Departement (departement_id,libelle) VALUES (7,'MSI');
INSERT INTO Departement (departement_id,libelle) VALUES (8,'SE');
INSERT INTO Departement (departement_id,libelle) VALUES (9,'STE');
-- Ajouter les groupes
INSERT INTO Groupe (groupe_id,intitule) VALUES (1,'Groupe 1');
INSERT INTO Groupe (groupe_id,intitule) VALUES (2,'Groupe 2');
INSERT INTO Groupe (groupe_id,intitule) VALUES (3,'Groupe 3');
INSERT INTO Groupe (groupe_id,intitule) VALUES (4,'Groupe 4');
INSERT INTO Groupe (groupe_id,intitule) VALUES (5,'Groupe 5');
INSERT INTO Groupe (groupe_id,intitule) VALUES (6,'Groupe 6');
INSERT INTO Groupe (groupe_id,intitule) VALUES (7,'Groupe 7');
INSERT INTO Groupe (groupe_id,intitule) VALUES (8,'Groupe 8');
INSERT INTO Groupe (groupe_id,intitule) VALUES (9,'Groupe 9');
INSERT INTO Groupe (groupe_id,intitule) VALUES (10,'Groupe 10');
INSERT INTO Groupe (groupe_id,intitule) VALUES (11,'Groupe 11');
INSERT INTO Groupe (groupe_id,intitule) VALUES (12,'Groupe 12');
-- Ajouter les profils
INSERT INTO Personnalite (personnalite_id,intitule,description) VALUES (1,'Realiste',E'Besoin d\'être impliqué physiquement dans ce qu\'il fait');
INSERT INTO Personnalite (personnalite_id,intitule,description) VALUES (2,'Investigatif','Habité par une soif de connaissances et de savoir');
INSERT INTO Personnalite (personnalite_id,intitule,description) VALUES (3,'Artistique',E'Souhaite exprimer ses émotions ou pensées à travers des formes d\'art');
INSERT INTO Personnalite (personnalite_id,intitule,description) VALUES (4,'Social','Attiré par les activités favorisant le contact avec les autres, particulièrement dans le but de les aider');
INSERT INTO Personnalite (personnalite_id,intitule,description) VALUES (5,'Entrepreneur',E'Aime avoir des responsabilités, surmonter des défis dans l\'espoir de se hisser au sommet.');
INSERT INTO Personnalite (personnalite_id,intitule,description) VALUES (6,'Conventionnel','Désire respecter les normes, consignes et règles');


-- Ajouter une proposition
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (1,1,1,'Vous aimez avoir des activités à l’extérieur, travailler en plein air');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (2,1,2,'Vous aimez élargir vos connaissances par l’étude, pouvoir approfondir un sujet');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (3,1,3,'Vous aimez travailler de façon indépendante, sans méthode ni objectif structurés');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (4,1,4,'Vous aimez travailler avec d’autres personnes pour les informer');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (5,1,5,'Vous admirez les personnes qui ont du pouvoir ou gagnent beaucoup d’argent');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (6,1,6,'Vous aimez travailler avec des chiffres');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (7,2,4,'Vous admirez les personnes qui travaillent pour soigner les autres');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (8,2,6,'Vous aimez une organisation claire et bien définie');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (9,2,5,'Vous aimez contribuer à atteindre les objectifs d’une organisation');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (10,2,1,'Vous aimez le sport, vous dépenser physiquement');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (11,2,2,'Vous aimez étudier les choses, les phénomènes ou les comportements');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (12,2,3,'Vous admirez les personnes qui ont des capacités artistiques');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (13,3,4,'Vous aimez travailler avec d’autres personnes pour les former, les entraîner');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (14,3,3,'Vous aimez les changements ou les situations imprévues');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (15,3,6,'Vous aimez ne faire qu’une seule chose à la fois et vous ne vous laissez pas distraire');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (16,3,5,'Vous aimez donner des ordres ou consignes et organiser l’activité des autres');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (17,3,2,'Vous aimez tirer vos propres conclusions de l’analyse d’une situation donnée');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (18,3,1,'Vous aimez conduire des véhicules ou faire fonctionner des machines');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (19,4,1,'Vous aimez fabriquer ou réparer des objets');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (20,4,3,'Vous aimez ne pas savoir précisément ce que vous avez à faire');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (21,4,6,'Vous aimez mettre en œuvre des « bonnes pratiques » acquises par l’expérience');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (22,4,5,'Vous aimez faire preuve d’initiative et prendre des décisions rapides');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (23,4,4,'Vous aimez écouter, dialoguer, essayer de comprendre les autres');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (24,4,2,'Vous aimez vous fier à votre jugement pour décider comment faire les choses');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (25,5,3,'Vous aimez faire plusieurs activités en même temps, ou passer d’une action à l’autre');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (26,5,5,'Vous aimez décider de ce qui doit être fait');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (27,5,4,'Vous aimez rencontrer des gens nouveaux');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (28,5,2,'Vous aimez vérifier une conclusion par des tests ou des informations complémentaires');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (29,5,6,'Vous aimez appuyer vos conclusions sur des bases déjà prouvées');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (30,5,1,'Vous aimez bricoler, utiliser des outils tels que tournevis, ciseaux, pinces, etc.…');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (31,6,2,'Vous aimez résoudre les problèmes de façon rationnelle, étape par étape');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (32,6,1,'Vous aimez la nature, les plantes, les animaux…');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (33,6,6,'Vous aimez respecter les valeurs que vous vous êtes fixées');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (34,6,4,'Vous aimez faire un travail en commun avec d’autres');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (35,6,5,'Vous aimez relever des défis');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (36,6,3,'Vous aimez vous fier à votre intuition pour prendre des décisions');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (37,7,5,'Vous aimez convaincre les autres d’agir d’une certaine façon');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (38,7,3,'Vous aimez résoudre un problème sans avoir recours à une méthode logique');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (39,7,2,'Vous aimez prendre une décision après une réflexion, si possible logique');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (40,7,6,'Vous aimez suivre attentivement un plan pour atteindre le meilleur résultat possible');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (41,7,4,'Vous aimez écouter les autres et les conseiller sur la façon de résoudre leurs problèmes');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (42,7,1,'Vous aimez trouver une solution concrète, réaliste et simple aux problèmes');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (43,8,2,'Vous aimez concevoir ou améliorer les méthodes de travail');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (44,8,1,'Vous aimez utiliser votre « bon sens »');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (45,8,4,'Vous aimez rendre service, venir en aide à d’autres personnes');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (46,8,5,'Vous aimez répondre aux objections de vos interlocuteurs pour mieux les convaincre');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (47,8,3,'Vous aimez montrer votre originalité');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (48,8,6,'Vous aimez travailler avec soin pour obtenir un résultat parfait');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (49,9,4,'Vous aimez ou aimeriez animer des activités collectives, associatives…');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (50,9,2,'Vous aimez ou aimeriez étudier la physique, la biologie, ou la technologie');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (51,9,1,'Vous aimez démonter un appareil pour le réparer vous-même');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (52,9,5,'Vous aimez discuter avec un commerçant pour obtenir des réductions de prix');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (53,9,3,'Vous aimez exprimer vos idées, vos points de vue ou vos émotions');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (54,9,6,'Vous aimez rédiger un résumé, une lettre, un compte-rendu');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (55,10,5,'Vous aimez faire face aux situations urgentes ou imprévues');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (56,10,6,'Vous aimez vous occuper de démarches administratives ou d’ordre juridique');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (57,10,4,'Vous aimez ou aimeriez faire des reportages, écrire des articles, etc…');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (58,10,2,'Vous aimez chercher à comprendre et à expliquer le pourquoi des choses et des êtres');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (59,10,3,'Vous aimez imaginer des solutions qui sortent de l’ordinaire');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (60,10,1,'Vous aimez ou aimeriez utiliser un objet que vous avez fabriqué vous-même');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (61,11,4,'Vous aimez apprendre aux autres ce que vous savez');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (62,11,1,'Vous aimez collectionner des choses : timbres, cartes postales, pierres, etc.…');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (63,11,6,'Vous aimez passer une grande partie de votre temps sur des documents écrits');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (64,11,5,'Vous aimez ou aimeriez vendre des produits ou services');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (65,11,2,'Vous aimez vous servir d’un microscope ou autre appareil de mesure…');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (66,11,3,'Vous aimez ou aimeriez avoir des loisirs créatifs : peinture, musique…');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (67,12,6,'Vous aimez classer, ordonner des documents ou des objets');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (68,12,5,'Vous aimez conduire une discussion, un débat');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (69,12,4,'Vous aimez échanger des idées avec les autres');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (70,12,1,'Vous aimez que ce que vous faites débouche sur des résultats concrets');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (71,12,2,'Vous aimez ou aimeriez mettre au point et réaliser des expériences scientifiques');
INSERT INTO Proposition (proposition_id,groupe_id,personnalite_id,intitule) VALUES (72,12,3,'Vous aimez étudier ou inventer plusieurs solutions pour répondre à un problème');

INSERT INTO Administrateur ("admin_id", "nom", "prenom", "mail", "mdp") VALUES
(1, 'Buisson-Lopez', 'Lysiane', 'lysiane.buisson@umontpellier.fr', '$5$rounds=5000$anexamplestringf$q/97r.TruouBq3np7my5Hbtq6nzjwW5215G00oGzb93'),
(2, 'Fiorio', 'Christophe', 'christophe.fiorio@umontpellier.fr', '$5$rounds=5000$anexamplestringf$q/97r.TruouBq3np7my5Hbtq6nzjwW5215G00oGzb93'),
(3, 'Villaret', 'Anne-laure', 'anne-laure.villaret@umontpellier.fr', '$5$rounds=5000$anexamplestringf$q/97r.TruouBq3np7my5Hbtq6nzjwW5215G00oGzb93');

INSERT INTO "Promotion" ("promotion_id", "anneeDiplome") VALUES
(11, '2018'),
(1, '2019');

INSERT INTO Classe ("promotion_id", "departement_id", "classe_id", "code") VALUES
(1, 3, 1, 'IG2019'),
(11, 3, 2, 'IG2018'),
(11, 5, 3, 'MEA2018');

INSERT INTO Etudiant ("classe_id", "etudiant_id", "nom", "prenom", "mail", "mdp", "personnalite_id") VALUES
(1, 2, 'Faiza', 'Mohamed-Iheb', 'mohamed-iheb.faiza@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG10', 1),
(1, 3, 'Bellicot', 'Remi', 'remi.bellicot@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG11', 1),
(1, 4, 'Boiteux', 'Johanna', 'johanna.boiteux@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG12', 1),
(1, 5, 'Turgut', 'Fabien', 'fabien.turgut@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG13', 1),
(1, 6, 'Hennebert', 'Jade', 'jade.hennebert@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG14', 1),
(1, 7, 'Donnart', 'Melvil', 'melvil.donnart@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG15', 1),
(1, 8, 'Mauguy', 'Xeryus', 'xeryus.mauguy@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG16', 2),
(1, 9, 'Spaenle', 'Mahe', 'mahe.spaenle@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG17', 2),
(1, 10, 'Maitre', 'Hugo', 'hugo.maitre@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG18', 2),
(1, 11, 'Dalger', 'Chloe', 'chloe.dalger@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG19', 2),
(1, 12, 'Zirah', 'Loris', 'loris.zirah@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG20', 2),
(1, 13, 'Sanchez', 'Antoine', 'antoine.sanchez@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG21', 2),
(1, 14, 'Giordani', 'Kevin', 'kevin.giordani@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG22', 2),
(1, 15, 'Legrand', 'Cyprien', 'cyprien.legrand@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG23', 3),
(1, 16, 'Aufauvre', 'Alex', 'alex.aufauvre@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG24', 3),
(1, 17, 'Georget', 'Toinon', 'toinon.georget@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG25', 3),
(1, 18, 'Roux', 'Adrien', 'adrien.roux@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG26', 3),
(1, 19, 'Bouthinar', 'Alexandre', 'alexandre.bouthinar@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG27', 3),
(1, 20, 'Combis', 'Loic', 'loic.combis@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG28', 3),
(1, 21, 'Neplaz', 'Thomas', 'thomas.neplaz@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG29', 3),
(1, 22, 'Soustelle', 'Maxime', 'maxime.soustelle@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG30', 4),
(1, 23, 'Wintz', 'Megane', 'megane.wintz@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG31', 4),
(1, 24, 'Bottero', 'Alexandre', 'alexandre.bottero@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG32', 4),
(1, 25, 'Mellah', 'Ilias', 'ilias.mellah@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG33', 4),
(1, 26, 'Pluche', 'Cyril', 'cyril.pluche@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG34', 4),
(1, 27, 'Thevenon', 'Romain', 'romain.thevenon@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG35', 4),
(1, 28, 'Herreros', 'Vincent', 'vincent.herreros@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG36', 4),
(1, 29, 'Bazaz', 'Amin', 'amin.bazaz@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG37', 5),
(1, 30, 'Gronel', 'Joris', 'joris.gronel@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG38', 5),
(1, 31, 'Escalier', 'Justin', 'justin.escalier@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG39', 5),
(1, 32, 'Rul', 'Marion', 'marion.rul@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG40', 5),
(1, 33, 'Contremoulin', 'Paul', 'paul.contremoulin@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG41', 5),
(1, 34, 'Fabre', 'Enzo', 'enzo.fabre@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG42', 5),
(1, 35, 'Aurard', 'Thais', 'thais.aurard@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG43', 5),
(1, 36, 'Riviere', 'Tristan', 'tristan.riviere@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG44', 6),
(1, 37, 'Roig', 'Clement', 'clement.roig@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG45', 6),
(1, 38, 'El-Yahyaoui', 'Assil', 'assil.el-yahyaoui@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG46', 6),
(1, 39, 'Loubiere', 'Clement', 'clement.loubiere@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG47', 6),
(1, 40, 'Piekarek', 'Ophelie', 'ophelie.piekarek@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG48', 6),
(1, 41, 'Truong', 'Lucie', 'lucie.truong@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG49', 6),
(1, 42, 'Ehamelo', 'Hamelina', 'hamelina.ehamelo@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG50', 6),
(1, 43, 'Dye', 'Matthieu', 'matthieu.dye@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG51', 6),
(1, 44, 'El-Mahmoudi', 'Mohamed', 'mohamed.el-mahmoudi@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG52', 6),
(1, 45, 'Agbodjogbe', 'Yves-alain', 'yves-alain.agbodjogbe@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG53', 6),
(1, 46, 'Terrien', 'James', 'james.terrien@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG54', 6),
(1, 47, 'Hassan', 'Kevin', 'kevin.hassan@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$4ESx37ZtWHAY6wK1cC6MY/wzqv/8VjpX2Sc6D8Zryt4', 6),
(2, 48, 'Chalifour', 'Methena', 'methena.chalifour@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG9', 1),
(2, 49, 'Hétu', 'Chantal', 'chantal.hétu@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG10', 1),
(2, 50, 'Beausoleil', 'Belle', 'belle.beausoleil@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG11', 2),
(2, 51, 'Desjardins', 'Fifine', 'fifine.desjardins@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG12', 2),
(2, 52, 'Joly', 'Brice', 'brice.joly@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG13', 3),
(2, 53, 'Gamache', 'Algernon', 'algernon.gamache@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG14', 3),
(2, 54, 'Bertrand', 'Faye', 'faye.bertrand@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG15', 4),
(2, 55, 'Couture', 'Jean', 'jean.couture@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG16', 4),
(2, 56, 'Hébert', 'Pénélope', 'pénélope.hébert@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG17', 5),
(3, 57, 'Dastous', 'Patrice', 'patrice.dastous@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$sKU2AbfOIZ28oEctdWo3kNyJT474IUrcL2Zf5oErzn9', 1),
(3, 58, 'Denis', 'Marlon', 'marlon.denis@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG10', 5),
(3, 59, 'Desilets', 'Gaston', 'gaston.desilets@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG11', 5),
(3, 60, 'Quiron', 'Charlot', 'charlot.quiron@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG12', 6),
(3, 61, 'Brodeur', 'Aloin', 'aloin.brodeur@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG13', 6),
(3, 62, 'Bélanger', 'Denise', 'denise.bélanger@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG14', 3),
(3, 63, 'Beaujolie', 'Coralie', 'coralie.beaujolie@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG15', 3),
(3, 64, 'Chartier', 'Cinderella', 'cinderella.chartier@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG16', 2),
(3, 65, 'Vincent', 'Leone', 'leone.vincent@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG17', 1),
(3, 66, 'Dupéré', 'Richard', 'richard.dupéré@etu.umontpellier.fr', '$5$rounds=5000$anexamplestringf$nmzV78KC6aET4wU/Yeh4PhEr30iTJIbZ.I4.3p7ztG17', 2);

INSERT INTO Repondre ("groupe_id", "etudiant_id", "choix1", "choix2", "choix3") VALUES
(1, 8, 5, 2, 4),
(2, 8, 9, 12, 8),
(3, 8, 18, 15, 17),
(4, 8, 24, 21, 19),
(5, 8, 25, 28, 26),
(6, 8, 31, 35, 36),
(7, 8, 39, 37, 40),
(8, 8, 46, 44, 45),
(9, 8, 50, 53, 52),
(10, 8, 57, 58, 56),
(11, 8, 66, 65, 63),
(12, 8, 72, 70, 68),
(1, 9, 5, 2, 4),
(2, 9, 9, 12, 8),
(3, 9, 18, 15, 17),
(4, 9, 24, 21, 19),
(5, 9, 25, 28, 26),
(6, 9, 31, 35, 36),
(7, 9, 39, 37, 40),
(8, 9, 46, 44, 45),
(9, 9, 50, 53, 52),
(10, 9, 57, 58, 56),
(11, 9, 66, 65, 63),
(12, 9, 72, 70, 68),
(1, 10, 5, 2, 4),
(2, 10, 9, 12, 8),
(3, 10, 18, 15, 17),
(4, 10, 24, 21, 19),
(5, 10, 25, 28, 26),
(6, 10, 31, 35, 36),
(7, 10, 39, 37, 40),
(8, 10, 46, 44, 45),
(9, 10, 50, 53, 52),
(10, 10, 57, 58, 56),
(11, 10, 66, 65, 63),
(12, 10, 72, 70, 68),
(1, 11, 5, 2, 4),
(2, 11, 9, 12, 8),
(3, 11, 18, 15, 17),
(4, 11, 24, 21, 19),
(5, 11, 25, 28, 26),
(6, 11, 31, 35, 36),
(7, 11, 39, 37, 40),
(8, 11, 46, 44, 45),
(9, 11, 50, 53, 52),
(10, 11, 57, 58, 56),
(11, 11, 66, 65, 63),
(12, 11, 72, 70, 68),
(1, 12, 5, 2, 4),
(2, 12, 9, 12, 8),
(3, 12, 18, 15, 17),
(4, 12, 24, 21, 19),
(5, 12, 25, 28, 26),
(6, 12, 31, 35, 36),
(7, 12, 39, 37, 40),
(8, 12, 46, 44, 45),
(9, 12, 50, 53, 52),
(10, 12, 57, 58, 56),
(11, 12, 66, 65, 63),
(12, 12, 72, 70, 68),
(1, 13, 5, 2, 4),
(2, 13, 9, 12, 8),
(3, 13, 18, 15, 17),
(4, 13, 24, 21, 19),
(5, 13, 25, 28, 26),
(6, 13, 31, 35, 36),
(7, 13, 39, 37, 40),
(8, 13, 46, 44, 45),
(9, 13, 50, 53, 52),
(10, 13, 57, 58, 56),
(11, 13, 66, 65, 63),
(12, 13, 72, 70, 68),
(1, 14, 5, 2, 4),
(2, 14, 9, 12, 8),
(3, 14, 18, 15, 17),
(4, 14, 24, 21, 19),
(5, 14, 25, 28, 26),
(6, 14, 31, 35, 36),
(7, 14, 39, 37, 40),
(8, 14, 46, 44, 45),
(9, 14, 50, 53, 52),
(10, 14, 57, 58, 56),
(11, 14, 66, 65, 63),
(12, 14, 72, 70, 68),
(1, 15, 6, 5, 4),
(2, 15, 12, 11, 10),
(3, 15, 18, 17, 16),
(4, 15, 24, 23, 22),
(5, 15, 30, 29, 28),
(6, 15, 36, 35, 34),
(7, 15, 42, 41, 40),
(8, 15, 48, 47, 46),
(9, 15, 54, 53, 52),
(10, 15, 60, 59, 58),
(11, 15, 66, 65, 64),
(12, 15, 72, 71, 70),
(1, 16, 6, 5, 4),
(2, 16, 12, 11, 10),
(3, 16, 18, 17, 16),
(4, 16, 24, 23, 22),
(5, 16, 30, 29, 28),
(6, 16, 36, 35, 34),
(7, 16, 42, 41, 40),
(8, 16, 48, 47, 46),
(9, 16, 54, 53, 52),
(10, 16, 60, 59, 58),
(11, 16, 66, 65, 64),
(12, 16, 72, 71, 70),
(1, 17, 6, 5, 4),
(2, 17, 12, 11, 10),
(3, 17, 18, 17, 16),
(4, 17, 24, 23, 22),
(5, 17, 30, 29, 28),
(6, 17, 36, 35, 34),
(7, 17, 42, 41, 40),
(8, 17, 48, 47, 46),
(9, 17, 54, 53, 52),
(10, 17, 60, 59, 58),
(11, 17, 66, 65, 64),
(12, 17, 72, 71, 70),
(1, 18, 6, 5, 4),
(2, 18, 12, 11, 10),
(3, 18, 18, 17, 16),
(4, 18, 24, 23, 22),
(5, 18, 30, 29, 28),
(6, 18, 36, 35, 34),
(7, 18, 42, 41, 40),
(8, 18, 48, 47, 46),
(9, 18, 54, 53, 52),
(10, 18, 60, 59, 58),
(11, 18, 66, 65, 64),
(12, 18, 72, 71, 70),
(1, 19, 6, 5, 4),
(2, 19, 12, 11, 10),
(3, 19, 18, 17, 16),
(4, 19, 24, 23, 22),
(5, 19, 30, 29, 28),
(6, 19, 36, 35, 34),
(7, 19, 42, 41, 40),
(8, 19, 48, 47, 46),
(9, 19, 54, 53, 52),
(10, 19, 60, 59, 58),
(11, 19, 66, 65, 64),
(12, 19, 72, 71, 70),
(1, 20, 6, 5, 4),
(2, 20, 12, 11, 10),
(3, 20, 18, 17, 16),
(4, 20, 24, 23, 22),
(5, 20, 30, 29, 28),
(6, 20, 36, 35, 34),
(7, 20, 42, 41, 40),
(8, 20, 48, 47, 46),
(9, 20, 54, 53, 52),
(10, 20, 60, 59, 58),
(11, 20, 66, 65, 64),
(12, 20, 72, 71, 70),
(1, 21, 6, 5, 4),
(2, 21, 12, 11, 10),
(3, 21, 18, 17, 16),
(4, 21, 24, 23, 22),
(5, 21, 30, 29, 28),
(6, 21, 36, 35, 34),
(7, 21, 42, 41, 40),
(8, 21, 48, 47, 46),
(9, 21, 54, 53, 52),
(10, 21, 60, 59, 58),
(11, 21, 66, 65, 64),
(12, 21, 72, 71, 70),
(1, 22, 1, 2, 3),
(2, 22, 7, 8, 9),
(3, 22, 13, 14, 15),
(4, 22, 19, 20, 21),
(5, 22, 25, 26, 27),
(6, 22, 31, 32, 33),
(7, 22, 37, 38, 39),
(8, 22, 43, 44, 45),
(9, 22, 49, 50, 51),
(10, 22, 55, 56, 57),
(11, 22, 61, 62, 63),
(12, 22, 67, 68, 69),
(1, 23, 1, 2, 3),
(2, 23, 7, 8, 9),
(3, 23, 13, 14, 15),
(4, 23, 19, 20, 21),
(5, 23, 25, 26, 27),
(6, 23, 31, 32, 33),
(7, 23, 37, 38, 39),
(8, 23, 43, 44, 45),
(9, 23, 49, 50, 51),
(10, 23, 55, 56, 57),
(11, 23, 61, 62, 63),
(12, 23, 67, 68, 69),
(1, 24, 1, 2, 3),
(2, 24, 7, 8, 9),
(3, 24, 13, 14, 15),
(4, 24, 19, 20, 21),
(5, 24, 25, 26, 27),
(6, 24, 31, 32, 33),
(7, 24, 37, 38, 39),
(8, 24, 43, 44, 45),
(9, 24, 49, 50, 51),
(10, 24, 55, 56, 57),
(11, 24, 61, 62, 63),
(12, 24, 67, 68, 69),
(1, 25, 1, 2, 3),
(2, 25, 7, 8, 9),
(3, 25, 13, 14, 15),
(4, 25, 19, 20, 21),
(5, 25, 25, 26, 27),
(6, 25, 31, 32, 33),
(7, 25, 37, 38, 39),
(8, 25, 43, 44, 45),
(9, 25, 49, 50, 51),
(10, 25, 55, 56, 57),
(11, 25, 61, 62, 63),
(12, 25, 67, 68, 69),
(1, 26, 1, 2, 3),
(2, 26, 7, 8, 9),
(3, 26, 13, 14, 15),
(4, 26, 19, 20, 21),
(5, 26, 25, 26, 27),
(6, 26, 31, 32, 33),
(7, 26, 37, 38, 39),
(8, 26, 43, 44, 45),
(9, 26, 49, 50, 51),
(10, 26, 55, 56, 57),
(11, 26, 61, 62, 63),
(12, 26, 67, 68, 69),
(1, 27, 1, 2, 3),
(2, 27, 7, 8, 9),
(3, 27, 13, 14, 15),
(4, 27, 19, 20, 21),
(5, 27, 25, 26, 27),
(6, 27, 31, 32, 33),
(7, 27, 37, 38, 39),
(8, 27, 43, 44, 45),
(9, 27, 49, 50, 51),
(10, 27, 55, 56, 57),
(11, 27, 61, 62, 63),
(12, 27, 67, 68, 69),
(1, 28, 1, 2, 3),
(2, 28, 7, 8, 9),
(3, 28, 13, 14, 15),
(4, 28, 19, 20, 21),
(5, 28, 25, 26, 27),
(6, 28, 31, 32, 33),
(7, 28, 37, 38, 39),
(8, 28, 43, 44, 45),
(9, 28, 49, 50, 51),
(10, 28, 55, 56, 57),
(11, 28, 61, 62, 63),
(12, 28, 67, 68, 69),
(1, 36, 2, 3, 4),
(2, 36, 8, 9, 10),
(3, 36, 14, 15, 16),
(4, 36, 20, 21, 22),
(5, 36, 26, 27, 28),
(6, 36, 32, 33, 34),
(7, 36, 38, 39, 40),
(8, 36, 44, 45, 46),
(9, 36, 50, 51, 52),
(10, 36, 56, 57, 58),
(11, 36, 62, 63, 64),
(12, 36, 68, 69, 70),
(1, 37, 2, 3, 4),
(2, 37, 8, 9, 10),
(3, 37, 14, 15, 16),
(4, 37, 20, 21, 22),
(5, 37, 26, 27, 28),
(6, 37, 32, 33, 34),
(7, 37, 38, 39, 40),
(8, 37, 44, 45, 46),
(9, 37, 50, 51, 52),
(10, 37, 56, 57, 58),
(11, 37, 62, 63, 64),
(12, 37, 68, 69, 70),
(1, 38, 2, 3, 4),
(2, 38, 8, 9, 10),
(3, 38, 14, 15, 16),
(4, 38, 20, 21, 22),
(5, 38, 26, 27, 28),
(6, 38, 32, 33, 34),
(7, 38, 38, 39, 40),
(8, 38, 44, 45, 46),
(9, 38, 50, 51, 52),
(10, 38, 56, 57, 58),
(11, 38, 62, 63, 64),
(12, 38, 68, 69, 70),
(1, 39, 2, 3, 4),
(2, 39, 8, 9, 10),
(3, 39, 14, 15, 16),
(4, 39, 20, 21, 22),
(5, 39, 26, 27, 28),
(6, 39, 32, 33, 34),
(7, 39, 38, 39, 40),
(8, 39, 44, 45, 46),
(9, 39, 50, 51, 52),
(10, 39, 56, 57, 58),
(11, 39, 62, 63, 64),
(12, 39, 68, 69, 70),
(1, 40, 2, 3, 4),
(2, 40, 8, 9, 10),
(3, 40, 14, 15, 16),
(4, 40, 20, 21, 22),
(5, 40, 26, 27, 28),
(6, 40, 32, 33, 34),
(7, 40, 38, 39, 40),
(8, 40, 44, 45, 46),
(9, 40, 50, 51, 52),
(10, 40, 56, 57, 58),
(11, 40, 62, 63, 64),
(12, 40, 68, 69, 70),
(1, 41, 2, 3, 4),
(2, 41, 8, 9, 10),
(3, 41, 14, 15, 16),
(4, 41, 20, 21, 22),
(5, 41, 26, 27, 28),
(6, 41, 32, 33, 34),
(7, 41, 38, 39, 40),
(8, 41, 44, 45, 46),
(9, 41, 50, 51, 52),
(10, 41, 56, 57, 58),
(11, 41, 62, 63, 64),
(12, 41, 68, 69, 70),
(1, 42, 2, 3, 4),
(2, 42, 8, 9, 10),
(3, 42, 14, 15, 16),
(4, 42, 20, 21, 22),
(5, 42, 26, 27, 28),
(6, 42, 32, 33, 34),
(7, 42, 38, 39, 40),
(8, 42, 44, 45, 46),
(9, 42, 50, 51, 52),
(10, 42, 56, 57, 58),
(11, 42, 62, 63, 64),
(12, 42, 68, 69, 70),
(1, 43, 2, 3, 4),
(2, 43, 8, 9, 10),
(3, 43, 14, 15, 16),
(4, 43, 20, 21, 22),
(5, 43, 26, 27, 28),
(6, 43, 32, 33, 34),
(7, 43, 38, 39, 40),
(8, 43, 44, 45, 46),
(9, 43, 50, 51, 52),
(10, 43, 56, 57, 58),
(11, 43, 62, 63, 64),
(12, 43, 68, 69, 70),
(1, 44, 2, 3, 4),
(2, 44, 8, 9, 10),
(3, 44, 14, 15, 16),
(4, 44, 20, 21, 22),
(5, 44, 26, 27, 28),
(6, 44, 32, 33, 34),
(7, 44, 38, 39, 40),
(8, 44, 44, 45, 46),
(9, 44, 50, 51, 52),
(10, 44, 56, 57, 58),
(11, 44, 62, 63, 64),
(12, 44, 68, 69, 70),
(1, 45, 2, 3, 4),
(2, 45, 8, 9, 10),
(3, 45, 14, 15, 16),
(4, 45, 20, 21, 22),
(5, 45, 26, 27, 28),
(6, 45, 32, 33, 34),
(7, 45, 38, 39, 40),
(8, 45, 44, 45, 46),
(9, 45, 50, 51, 52),
(10, 45, 56, 57, 58),
(11, 45, 62, 63, 64),
(12, 45, 68, 69, 70),
(1, 46, 2, 3, 4),
(2, 46, 8, 9, 10),
(3, 46, 14, 15, 16),
(4, 46, 20, 21, 22),
(5, 46, 26, 27, 28),
(6, 46, 32, 33, 34),
(7, 46, 38, 39, 40),
(8, 46, 44, 45, 46),
(9, 46, 50, 51, 52),
(10, 46, 56, 57, 58),
(11, 46, 62, 63, 64),
(12, 46, 68, 69, 70),
(1, 47, 2, 3, 4),
(2, 47, 8, 9, 10),
(3, 47, 14, 15, 16),
(4, 47, 20, 21, 22),
(5, 47, 26, 27, 28),
(6, 47, 32, 33, 34),
(7, 47, 38, 39, 40),
(8, 47, 44, 45, 46),
(9, 47, 50, 51, 52),
(10, 47, 56, 57, 58),
(11, 47, 62, 63, 64),
(12, 47, 68, 69, 70);
