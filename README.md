RIASEC by [kevinhassan]('http://github.com/kevinhassan')

------

[TOC]

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

<img src="./Documents/postgresql.svg" title="postgresql">Base de donnée <a href="https://www.postgresql.org/">Postgresql</a> 

<img src="./Documents/php.svg" title="php"> <a href="https://secure.php.net/">Php</a> version 7.0

<img src="./Documents/semantic-ui.svg" title="semantic-ui"><a href="semantic-ui.com" title="framework Css">Semantic-ui</a> 

## Contact

Kévin Hassan : [:e-mail:](mailto:kevin.hassan@etu.umontpellier.fr) 

Documentation : [​:book:​]("https://kevinhassan.github.io/riasec/") ​​

[Dépôt Github]("https://github.com/kevinhassan/PiscineProjectIG3")