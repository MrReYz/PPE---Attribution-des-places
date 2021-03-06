#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: utilisateur
#------------------------------------------------------------

CREATE TABLE utilisateur(
        id_utilisateur int (11) Auto_increment  NOT NULL ,
        nom            Varchar (25) NOT NULL ,
        prenom         Varchar (25) NOT NULL ,
        email          Varchar (25) NOT NULL ,
        password       Varchar (25) NOT NULL ,
        fil_d_attente  Int NOT NULL ,
        PRIMARY KEY (id_utilisateur )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: places
#------------------------------------------------------------

CREATE TABLE places(
        id_place Int NOT NULL ,
        PRIMARY KEY (id_place )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: date
#------------------------------------------------------------

CREATE TABLE date(
        date_debut Date NOT NULL ,
        PRIMARY KEY (date_debut )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: attribut
#------------------------------------------------------------

CREATE TABLE attribut(
        date_fin       Date ,
        id_place       Int NOT NULL ,
        id_utilisateur Int NOT NULL ,
        date_debut     Date NOT NULL ,
        PRIMARY KEY (id_place ,id_utilisateur ,date_debut )
)ENGINE=InnoDB;

ALTER TABLE attribut ADD CONSTRAINT FK_attribut_id_place FOREIGN KEY (id_place) REFERENCES places(id_place);
ALTER TABLE attribut ADD CONSTRAINT FK_attribut_id_utilisateur FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id_utilisateur);
ALTER TABLE attribut ADD CONSTRAINT FK_attribut_date_debut FOREIGN KEY (date_debut) REFERENCES date(date_debut);
