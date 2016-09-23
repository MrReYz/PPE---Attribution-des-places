#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: utilisateur
#------------------------------------------------------------

CREATE TABLE utilisateur(
        Id_utilisateur Int NOT NULL ,
        nom            Varchar (25) ,
        prenom         Varchar (25) ,
        email          Varchar (25) ,
        adresse        Varchar (25) ,
        login          Varchar (25) ,
        mot_de_passe   Varchar (25) ,
        fil_d_attente  Int ,
        PRIMARY KEY (Id_utilisateur )
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
        Id_utilisateur Int NOT NULL ,
        date_debut     Date NOT NULL ,
        PRIMARY KEY (id_place ,Id_utilisateur ,date_debut )
)ENGINE=InnoDB;

ALTER TABLE attribut ADD CONSTRAINT FK_attribut_id_place FOREIGN KEY (id_place) REFERENCES places(id_place);
ALTER TABLE attribut ADD CONSTRAINT FK_attribut_Id_utilisateur FOREIGN KEY (Id_utilisateur) REFERENCES utilisateur(Id_utilisateur);
ALTER TABLE attribut ADD CONSTRAINT FK_attribut_date_debut FOREIGN KEY (date_debut) REFERENCES date(date_debut);
