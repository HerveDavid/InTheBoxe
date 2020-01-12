
CREATE TABLE adherentClub(
  mail VARCHAR(30) PRIMARY KEY,
  nom VARCHAR(25),
  prenom VARCHAR(25),
  datenaiss DATE,
  adresse VARCHAR(150),
  codePostal INTEGER,
  ville VARCHAR(20),
  tel VARCHAR(10),
  statut VARCHAR(20),
  genre VARCHAR(25),
  taille VARCHAR(10),
  poids INTEGER,
  categorie VARCHAR(20),
  typeCours VARCHAR(30),
  victoire INTEGER,
  defaite INTEGER,
  nul INTEGER
);

CREATE TABLE adherentExterieur(
  nom VARCHAR(25),
  prenom VARCHAR(25),
  club VARCHAR(25),
  datenaiss DATE,
  taille FLOAT,
  poids INTEGER,
  genre VARCHAR(25),
  categorie VARCHAR(20),
  victoire INTEGER,
  defaite INTEGER,
  nul INTEGER
);

CREATE TABLE coach(
  mail VARCHAR(30) UNIQUE,
  nom VARCHAR(25),
  prenom VARCHAR(25),
  tel VARCHAR(10),
  adresse VARCHAR(50),
  codePostal INTEGER,
  ville VARCHAR(20)
);

CREATE TABLE profil (
  mail VARCHAR(50) UNIQUE,
  motdepasse VARCHAR(25),
  coach BOOLEAN
);


CREATE TABLE cours(
  num INTEGER PRIMARY KEY ,
  type VARCHAR(30),
  horaireDebut TIME,
  horaireFin TIME,
  jours VARCHAR(20)
);

CREATE TABLE participant(
  numCours INTEGER ,
  mail VARCHAR(50),
  PRIMARY KEY (numCours, mail),
  FOREIGN KEY (numCours) REFERENCES cours(num)
);


CREATE TABLE actualite(
  nom VARCHAR(25),
  type VARCHAR(25),
  dateAct DATE,
  description TEXT,
  coach VARCHAR(25),
  PRIMARY KEY(nom,dateAct);
);



CREATE TABLE club(
  nom VARCHAR(25) PRIMARY KEY,
  adresse VARCHAR(25),
  mail VARCHAR(25) unique,
  tel VARCHAR(25)
);

CREATE TABLE exercice(
  nomExo VARCHAR(25) PRIMARY KEY,
  nbRep INTEGER,
  nbSerie INTEGER
);


CREATE TABLE entrainement(
  numEnt INTEGER PRIMARY KEY,
  typeEnt VARCHAR(25),
  tempsTotal TIME,
  tempsRepos TIME
);

CREATE TABLE demandeCombats(
  num INTEGER PRIMARY KEY,
  mail VARCHAR(30) UNIQUE
);

CREATE TABLE match(
 mailBoxeurInt VARCHAR(25),
 boxeurExt VARCHAR(25),
 clubExt VARCHAR(25),
 datecombat DATE,
 lieu VARCHAR(25)
);
