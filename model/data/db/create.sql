CREATE TABLE adherentClub(
  id INTEGER PRIMARY KEY,
  mail VARCHAR(30) UNIQUE,
  motdepasse VARCHAR(25),
  nom VARCHAR(25),
  prenom VARCHAR(25),
  datenaiss DATE,
  adresse VARCHAR(150),
  tel VARCHAR(10),
  taille FLOAT,
  poids INTEGER,
  genre VARCHAR(25),
  statut VARCHAR(20),
  categorie VARCHAR(20),
  combattant VARCHAR(25),
  certificat VARCHAR(30),
  licence INTEGER,

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

CREATE TABLE cours(
  type VARCHAR(20),
  horaire VARCHAR(20),
  jour VARCHAR(20),
  participantmoy INTEGER,
  PRIMARY KEY(horaire,jour)
);

CREATE TABLE coach(
  numprof INTEGER PRIMARY KEY,
  nomprof VARCHAR(25),
  prenomprof VARCHAR(25)
);

CREATE TABLE activite(
  nom VARCHAR(25) PRIMARY KEY,
  type VARCHAR(25),
  dateactivite date
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
  FOREIGN KEY(numlicence) REFERENCES adherent(licence),
  FOREIGN KEY(nomexercice) REFERENCES exercices(nom)
);


CREATE TABLE Match(
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
 FOREIGN KEY(boxeurext,licenceext) REFERENCES boxeurExt
);
