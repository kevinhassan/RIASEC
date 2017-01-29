# RIASEC - Holland Codes 

------

<!-- START doctoc generated TOC please keep comment here to allow auto update -->
<!-- DON'T EDIT THIS SECTION, INSTEAD RE-RUN doctoc TO UPDATE -->
**Table of Contents**  *generated with [DocToc](https://github.com/thlorenz/doctoc)*

- [Introduction](#introduction)
  - [Modele conceptuel de données](#modele-conceptuel-de-donn%C3%A9es)
  - [Modele logique de donnees](#modele-logique-de-donnees)
  - [Regles de gestion](#regles-de-gestion)
      - [Entité Etudiant](#entit%C3%A9-etudiant)
      - [Entité Classe](#entit%C3%A9-classe)
      - [Entité Département](#entit%C3%A9-d%C3%A9partement)
      - [Entité Administrateur](#entit%C3%A9-administrateur)
      - [Entité Personnalite](#entit%C3%A9-personnalite)
      - [Entité Groupe](#entit%C3%A9-groupe)
      - [Entité Proposition](#entit%C3%A9-proposition)
- [Installation](#installation)
  - [Installer l'application](#installer-lapplication)
  - [Installer la  base de donnée Postgresql](#installer-la--base-de-donn%C3%A9e-postgresql)
- [Technologies utilisées](#technologies-utilis%C3%A9es)
- [Contact](#contact)

<!-- END doctoc generated TOC please keep comment here to allow auto update -->


## Introduction 

### Modele conceptuel de données

<img src="./Documents/MCD Piscine.png">


### Modele logique de donnees

<img src="./Documents/Schema Database.png">

### Regles de gestion

##### Entité Etudiant

* L'étudiant peut consulter le résultat du questionnaire et voir son appartenance à chacune des personnalités en fonction d'un pourcentage.

* Il n'y a qu'un seul résultat stocké pour l'étudiant.

* L'étudiant n'appartient qu'à une classe. Dans le cas d'un redoublement, il est déplacé vers sa nouvelle classe.

* Les étudiants sont identifiés de manière unique avec leurs adresses mails institutionnelles
> Exemple d'adresse mail étudiant : xx.xx@etu.umontpellier.fr

##### Entité Classe

* L'entité Classe permet d'identifier la promotion et le département d'un étudiant grâce à un code unique généré par l'administrateur.
> Exemple de code  : IG2019 , STE2020 , ...

##### Entité Département

* L'entité Département stocke un libellé unique $ \in $ [ EGC , GBA , IG , MAT , MEA , MI , MSI , SE , STE].

##### Entité Administrateur

* Le professeur faisant passé le test est supposé administrateur du système et à tous les droits.
* Les administrateurs sont identifiés de manière unique avec leurs adresses mails institutionnelles
> Exemple d'adresse mail administrateur : xx.xx@umontpellier.fr

##### Entité Personnalite

* L'entité Personnalite stocke un intitulé unique $ \in $ [ Realiste , Investigatif , Artistique , Social , Entrepreneur , Conventionnel]

##### Entité Groupe

* L'entité stocke un intitulé unique $ \in $ [Groupe1, ... , Groupe12]

##### Entité Proposition

* Il y'a 6 propositions différentes dans chacun des 12 groupes appartenant à un type de personnalité


## Installation

### Installer l'application

```bash
$ git clone https://github.com/kevinhassan/RIASEC
$ cd riasec/
$ composer install 
```

### Installer la  base de donnée Postgresql

```bash
$ cd Database/
$ cat schema/schemaDB.sql seed.sql | psql postgres://urlDB
```

N.B:

- Mettre les données de votre base de données dans le fichier app/model/Model.php

```php
  $dbname='';
  $host='';
  $dbuser='';
  $dbpass='';
```


## Technologies utilisées

<img src="./Documents/postgresql.png" title="postgresql">Base de donnée <a href="https://www.postgresql.org/">Postgresql</a> 

<img src="./Documents/php.png" title="php"> <a href="https://secure.php.net/">Php</a> version 7.0

<img src="./Documents/semantic-ui.png" title="semantic-ui"><a href="semantic-ui.com" title="framework Css">Semantic-ui</a> 

## Contact

Kévin Hassan : [:e-mail:](mailto:kevin.hassan@etu.umontpellier.fr) 

Documentation : [:book:](https://kevinhassan.github.io/riasec/) 

[Dépôt Github](https://github.com/kevinhassan/RIASEC)