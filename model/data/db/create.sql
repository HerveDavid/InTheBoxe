
CREATE TABLE adherentClub(
  mail VARCHAR(30) PRIMARY KEY,
  nom VARCHAR(25),
  prenom VARCHAR(25),
  datenaiss DATE,
  adresse VARCHAR(150),
  codePostal INTEGER,
  ville VARCHAR(20),
  tel VARCHAR(10),
  taille VARCHAR(10),
  poids INTEGER,
  genre VARCHAR(25),
  statut VARCHAR(20),
  categorie VARCHAR(20),
  combattant VARCHAR(25),
  certificat BOOLEAN,
  licence VARCHAR(20),
  apayer FLOAT,
  victoire INTEGER,
  defaite INTEGER,
  nul INTEGER
);

CREATE TABLE adherentExterieur(
  licence INTEGER PRIMARY KEY,
  nom VARCHAR(25),
  prenom VARCHAR(25),
  club VARCHAR(25),
  datenaiss DATE,
  taille FLOAT,
  poids INTEGER,
  genre VARCHAR(25),
  statut VARCHAR(20),
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
  nom VARCHAR(25) PRIMARY KEY,
  type VARCHAR(25),
  dateAct DATE
);



CREATE TABLE club(
  nom VARCHAR(25) PRIMARY KEY,
  adresse VARCHAR(25),
  mail VARCHAR(25) unique,
  tel VARCHAR(25)
);

CREATE TABLE exercices(
  nom VARCHAR(25) PRIMARY KEY
);


CREATE TABLE entrainementPerso(
  numlicence INTEGER,
  numentrainement INTEGER,
  nomexercice VARCHAR(25),
  nbrep INTEGER,
  PRIMARY KEY(numlicence,numentrainement,nomexercice),
  FOREIGN KEY(numlicence) REFERENCES adherentClub(licence),
  FOREIGN KEY(nomexercice) REFERENCES exercices(nom)
);


CREATE TABLE match(
 boxeurint VARCHAR(25),
 licenceint INTEGER,
 boxeurext VARCHAR(25),
 licenceext INTEGER,
 clubext VARCHAR(25),
 categorie VARCHAR(20),
 datecombat DATE,
 lieu VARCHAR(25),
 PRIMARY KEY(licenceint,licenceext,datecombat),
 FOREIGN KEY(boxeurint,licenceint,categorie) REFERENCES adherent(prenom,licence,categorie),
 FOREIGN KEY(boxeurext,licenceext) REFERENCES adherentExterieur
);
