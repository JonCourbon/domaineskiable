/* table: piste(id,nom,type,couleur) */

CREATE TABLE IF NOT EXISTS piste (
  id int(11) NOT NULL AUTO_INCREMENT,
  nom varchar(20) NOT NULL,
  type varchar(20) NOT NULL,
  couleur varchar(20) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

INSERT INTO piste(id, nom, type, couleur) VALUES(NULL, 'PRN', 'nordique', 'rouge'),(NULL, 'bbleuue', 'nordique', 'bleu'),(NULL, 'PRN', 'fond', 'verte');


/* table: remontee(id,nom,type, etat) */

CREATE TABLE IF NOT EXISTS remontee (
  id int(11) NOT NULL AUTO_INCREMENT,
  nom varchar(20) NOT NULL,
  type varchar(20) NOT NULL,
  etat varchar(20) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

INSERT INTO remontee(id, nom, type, etat) VALUES(NULL, 'TS Grand mont', 'teleski', 'ouvert'),(NULL, 'TS petit pas', 'teleski', 'ferme'),(NULL, 'TP Gand ttle', 'telepherique', 'ferme');
