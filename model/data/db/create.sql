CREATE TABLE adherent(
  license INTEGER PRIMARY KEY,
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
  mail VARCHAR(30),
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
  prenomptof VARCHAR(25)
);

CREATE TABLE activite(
  nom VARCHAR(25) PRIMARY KEY,
  type VARCHAR(25)
);

CREATE TABLE boxeurExt(
  license INTEGER PRIMARY KEY,
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
