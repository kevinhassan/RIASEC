CREATE TABLE Etudiant (
	classe_id int NOT NULL,
	etudiant_id serial,
	nom varchar(200) NOT NULL,
	prenom varchar(200) NOT NULL,
	mail varchar(200) NOT NULL UNIQUE,
	mdp varchar(200) NOT NULL,
	personnalite_id int,
	CONSTRAINT Etudiant_pk PRIMARY KEY (etudiant_id)
) ;



CREATE TABLE Groupe (
	groupe_id serial,
	intitule varchar(200) NOT NULL,
	CONSTRAINT Groupe_pk PRIMARY KEY (groupe_id)
) ;



CREATE TABLE Proposition (
	proposition_id serial,
	groupe_id int NOT NULL,
	personnalite_id int NOT NULL,
	intitule varchar(200) NOT NULL,
	CONSTRAINT Proposition_pk PRIMARY KEY (proposition_id)
) ;



CREATE TABLE Personnalite (
	personnalite_id serial,
	intitule varchar(200) NOT NULL UNIQUE,
	description varchar(200) NOT NULL,
	CONSTRAINT Personnalite_pk PRIMARY KEY (personnalite_id)
) ;



CREATE TABLE Departement (
	departement_id serial,
	libelle varchar(200) NOT NULL UNIQUE,
	CONSTRAINT Departement_pk PRIMARY KEY (departement_id)
) ;



CREATE TABLE Classe (
	promotion_id int NOT NULL,
	departement_id int NOT NULL,
	classe_id serial,
	code varchar(200) UNIQUE,
	CONSTRAINT Classe_pk PRIMARY KEY (classe_id)
) ;



CREATE TABLE Promotion (
	promotion_id serial,
	anneeDiplome varchar(200) NOT NULL UNIQUE,
	CONSTRAINT Promotion_pk PRIMARY KEY (promotion_id)
) ;



CREATE TABLE Administrateur (
	admin_id serial,
	nom varchar(200) NOT NULL,
	prenom varchar(200) NOT NULL,
	mail varchar(200) NOT NULL UNIQUE,
	mdp varchar(200) NOT NULL,
	CONSTRAINT Administrateur_pk PRIMARY KEY (admin_id)
) ;



CREATE TABLE Repondre (
	groupe_id int NOT NULL,
	etudiant_id int NOT NULL,
	choix1 int NOT NULL,
	choix2 int NOT NULL,
	choix3 int NOT NULL,
	CONSTRAINT Repondre_pk PRIMARY KEY (etudiant_id,groupe_id)
) ;



ALTER TABLE Etudiant ADD CONSTRAINT Etudiant_fk0 FOREIGN KEY (classe_id) REFERENCES Classe(classe_id) ON DELETE CASCADE;
ALTER TABLE Etudiant ADD CONSTRAINT Etudiant_fk1 FOREIGN KEY (personnalite_id) REFERENCES Personnalite(personnalite_id);


ALTER TABLE Proposition ADD CONSTRAINT Proposition_fk0 FOREIGN KEY (groupe_id) REFERENCES Groupe(groupe_id);
ALTER TABLE Proposition ADD CONSTRAINT Proposition_fk1 FOREIGN KEY (personnalite_id) REFERENCES Personnalite(personnalite_id);



ALTER TABLE Classe ADD CONSTRAINT Classe_fk0 FOREIGN KEY (promotion_id) REFERENCES Promotion(promotion_id) ON DELETE CASCADE;
ALTER TABLE Classe ADD CONSTRAINT Classe_fk1 FOREIGN KEY (departement_id) REFERENCES Departement(departement_id ) ON DELETE CASCADE;



ALTER TABLE Repondre ADD CONSTRAINT Repondre_fk0 FOREIGN KEY (groupe_id) REFERENCES Groupe(groupe_id);
ALTER TABLE Repondre ADD CONSTRAINT Repondre_fk1 FOREIGN KEY (etudiant_id) REFERENCES Etudiant(etudiant_id) ON DELETE CASCADE;
ALTER TABLE Repondre ADD CONSTRAINT choix1_fk FOREIGN KEY (choix1) REFERENCES Proposition(proposition_id);
ALTER TABLE Repondre ADD CONSTRAINT choix2_fk FOREIGN KEY (choix2) REFERENCES Proposition(proposition_id);
ALTER TABLE Repondre ADD CONSTRAINT choix3_fk FOREIGN KEY (choix3) REFERENCES Proposition(proposition_id);
