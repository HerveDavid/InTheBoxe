CREATE TABLE adherent(
  licence INTEGER PRIMARY KEY,
  nom VARCHAR(25),
  prenom VARCHAR(25),
  datenaiss DATE,
  taille FLOAT,
  poids INTEGER,
  genre VARCHAR(25),
  statut VARCHAR(20),
  categorie VARCHAR(20),
  combattant VARCHAR(25),
  certificat VARCHAR(30),
  mail VARCHAR(30) UNIQUE,
  adresse VARCHAR(40),
  apayer FLOAT,
  tel VARCHAR(10),
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

CREATE TABLE prof(
  numprof INTEGER PRIMARY KEY,
  nomprof VARCHAR(25),
  prenomprof VARCHAR(25)
);

CREATE TABLE activite(
  nom VARCHAR(25) PRIMARY KEY,
  type VARCHAR(25)
);

CREATE TABLE boxeurExt(
  licence INTEGER PRIMARY KEY,
  nom VARCHAR(25),
  datenaiss DATE,
  categorie VARCHAR(25),
  statut VARCHAR(25),
  victoire INTEGER,
  defaite INTEGER,
  nul INTEGER
);

CREATE TABLE club(
  nom VARCHAR(25) PRIMARY KEY,
  adresse VARCHAR(25),
  tel VARCHAR(25)
);

CREATE TABLE exercices(
  nom VARCHAR(25) PRIMARY KEY
);

CREATE TABLE participe(
  numlicence INTEGER,
  type VARCHAR(20),
  jour VARCHAR(20),
  horaire VARCHAR(20),
  PRIMARY KEY(numlicence,type,jour,horaire),
  FOREIGN KEY(numlicence) REFERENCES adherent(licence),
  FOREIGN KEY(type,jour,horaire) REFERENCES cours(type,jour,horaire)
);

CREATE TABLE coursDeLaSemaine(
  type VARCHAR(20),
  horaire VARCHAR(20),
  datecours DATE,
  numprof INTEGER,
  nbinscrits INTEGER,
  PRIMARY KEY(horaire,datecours),
  FOREIGN KEY(type,horaire) REFERENCES cours(type,horaire),
  FOREIGN KEY(numprof) REFERENCES prof(numprof)
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

CREATE TABLE combatOfficiel(
  licenceint INTEGER,
  licenceext INTEGER,
  dateprevue DATE,
  horaire VARCHAR(25),
  lieu VARCHAR(25),
  PRIMARY KEY(licenceint,licenceext,dateprevue),
  FOREIGN KEY(licenceint) REFERENCES adherent(licence),
  FOREIGN KEY(licenceext) REFERENCES boxeurExt(licence)
);

CREATE TABLE matchPotentiel(
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
