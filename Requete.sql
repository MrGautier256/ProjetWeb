-- Requette Ajout
-- Ajouter élève
INSERT INTO `authentification` (`A_Login`, `A_mdp`) VALUES
('BarbeBlanche', 'Tremblement');

INSERT INTO `utilisateur` (`U_Prenom`, `U_Nom`, `U_Email`, `U_centre`, `ID_Role`, `ID_Authentification`) VALUES
('Edward', 'Newgate', 'Edward.Newgate@viacesi.fr', 'Montpellier', 1, (SELECT ID_Authentification FROM authentification WHERE A_Login = 'BarbeBlanche'));

SET @Prenom = (SELECT U_Prenom FROM utilisateur WHERE U_Email = 'Edward.Newgate@viacesi.fr');
SET @Nom = (SELECT U_Nom FROM utilisateur WHERE U_Email = 'Edward.Newgate@viacesi.fr');
SET @NomPrenom = (SELECT CONCAT(@Prenom,' ',@Nom));


INSERT INTO `wishlist` (`Wish_Etudiant`) VALUES (@NomPrenom);
INSERT INTO `etudiant` (`E_Promotion`, `ID_UTILISATEUR`, `ID_Wishlist`) VALUES
('A2-INFO', (SELECT ID_UTILISATEUR FROM utilisateur WHERE U_Email = 'Edward.Newgate@viacesi.fr'),(SELECT ID_Wishlist FROM wishlist WHERE Wish_Etudiant = @NomPrenom));

-- Ajouter Pilote
INSERT INTO `authentification` (`A_Login`, `A_mdp`) VALUES
('Jaltazin', 'pointeur');

INSERT INTO `utilisateur` (`U_Prenom`, `U_Nom`, `U_Email`, `U_centre`, `ID_Role`, `ID_Authentification`) VALUES
('Julien', 'Thomas', 'Jaltazin@cesi.fr', 'Montpellier', 2, (SELECT ID_Authentification FROM authentification WHERE A_Login = 'Jaltazin'));

INSERT INTO `pilote` (`P_promotions_assignees`, `ID_UTILISATEUR`) VALUES
('A2-INFO', (SELECT ID_UTILISATEUR FROM utilisateur WHERE U_Email = 'Jaltazin@cesi.fr'));

-- Ajouter Délégué
INSERT INTO `authentification` (`A_Login`, `A_mdp`) VALUES
('JulienM', 'Siphano');

INSERT INTO `utilisateur` (`U_Prenom`, `U_Nom`, `U_Email`, `U_centre`, `ID_Role`, `ID_Authentification`) VALUES
('Julien', 'Morana', 'julien.morana@viacesi.fr', 'Montpellier', 4, (SELECT ID_Authentification FROM authentification WHERE A_Login = 'JulienM'));

-- Ajouter élève Offre de stage si l'entreprise n'existe pas 
INSERT INTO `entreprise` (`En_Nom`, `En_Secteur_Activite`, `En_Localite`, `En_Nb_Stagiaire_Cesi`, `En_Evaluation_Stagiaire`, `En_Confiance_Pilote`) VALUES ('Ubisoft', 'Jeux vidéo', 'Montpellier', 0, 'Aucune', 'confiant');

INSERT INTO `offre_de_stage` (`OS_Nom`,`OS_Competences`, `OS_Localites`, `OS_Remuneration`, `OS_Duree`, `OS_Date_Offre`, `ID_Entreprise`) 
VALUES ('Developpeur JV', 'Travail d\'équipe', (SELECT En_Localite FROM entreprise WHERE En_Nom = 'Ubisoft') , '550.000', '4 mois', '2022-04-22', (SELECT ID_Entreprise FROM entreprise WHERE En_Nom = 'Ubisoft'));

'-- Ajouter Offre de stage si l'entreprise existe
INSERT INTO `offre_de_stage` (`OS_Nom`,`OS_Competences`, `OS_Localites`, `OS_Remuneration`, `OS_Duree`, `OS_Date_Offre`, `ID_Entreprise`) 
VALUES ('Developpeur JV', 'Travail d\'équipe', (SELECT En_Localite FROM entreprise WHERE En_Nom = 'Ubisoft') , '550.000', '4 mois', '2022-04-22', (SELECT ID_Entreprise FROM entreprise WHERE En_Nom = 'Ubisoft'));


'-- Requette Suppression
-- Supprimer élève
SET @IdAuth = (SELECT ID_Authentification FROM authentification WHERE A_Login = 'HAmyane');
SET @IdUti = (SELECT ID_UTILISATEUR FROM utilisateur WHERE ID_Authentification = @IdAuth);
SET @idWish =(SELECT ID_Wishlist FROM etudiant WHERE ID_UTILISATEUR = @IdUti);
SET @idEtu =(SELECT ID_Etudiant FROM etudiant WHERE ID_UTILISATEUR = @IdUti);

DELETE FROM etudiant WHERE `ID_Etudiant` = @idEtu;
DELETE FROM ajoute WHERE `ID_Wishlist` = @idWish;
DELETE FROM wishlist  WHERE `ID_Wishlist` = @idWish;
DELETE FROM utilisateur WHERE `ID_UTILISATEUR` = @IdUti; 
DELETE FROM authentification WHERE `ID_Authentification` = @IdAuth;

-- Supprimer Pilote
SET @IdAuth = (SELECT ID_Authentification FROM authentification WHERE A_Login = 'Jaltazin');
SET @IdUti = (SELECT ID_UTILISATEUR FROM utilisateur WHERE ID_Authentification = @IdAuth);
SET @idPilot =(SELECT ID_Pilote FROM pilote WHERE ID_UTILISATEUR = @IdUti);

DELETE FROM pilote WHERE `ID_Pilote` = @idPilot;
DELETE FROM utilisateur WHERE `ID_UTILISATEUR` = @IdUti; 
DELETE FROM authentification WHERE `ID_Authentification` = @IdAuth;

-- Supprimer Délégué
SET @IdAuth = (SELECT ID_Authentification FROM authentification WHERE A_Login = 'JulienM');
SET @IdUti = (SELECT ID_UTILISATEUR FROM utilisateur WHERE ID_Authentification = @IdAuth);

DELETE FROM utilisateur WHERE `ID_UTILISATEUR` = @IdUti; 
DELETE FROM authentification WHERE `ID_Authentification` = @IdAuth;

-- Supprimer entreprise + offre associées
SET @idEntreprise = (SELECT ID_Entreprise FROM entreprise WHERE En_Nom = 'cesi');

DELETE FROM ajoute WHERE ID_Offre_de_Stage IN (SELECT ID_Offre_de_Stage FROM offre_de_stage WHERE ID_Entreprise = @idEntreprise);
DELETE FROM offre_de_stage WHERE ID_Entreprise = @idEntreprise;
DELETE FROM entreprise WHERE ID_Entreprise = @idEntreprise;


-- Supprimer Offre de stage
SET @idEntreprise = (SELECT ID_Entreprise FROM entreprise WHERE En_Nom = 'cesi');
SET @idOffre = (SELECT ID_Offre_de_Stage FROM offre_de_stage WHERE OS_Nom = 'Developpeur JV' AND ID_Entreprise = @idEntreprise);

DELETE FROM ajoute WHERE ID_Offre_de_Stage = @idOffre;
DELETE FROM offre_de_stage WHERE ID_Offre_de_Stage = @idOffre;


-- Ajouter a la wishlist
INSERT INTO `ajoute` (`ID_Wishlist`, `ID_Offre_de_Stage`) VALUES ('11', '7');

-- Supprimer de la wishlist
DELETE FROM ajoute WHERE `ID_Wishlist` = '2' AND `ID_Offre_de_Stage` = '3'

-- update etudiant 

SET @IdAuth = (SELECT ID_Authentification FROM authentification WHERE A_Login = 'BarbeBlanche');
SET @IdUti = (SELECT ID_UTILISATEUR FROM utilisateur WHERE ID_Authentification = @IdAuth);
SET @idEtu =(SELECT ID_Etudiant FROM etudiant WHERE ID_UTILISATEUR = @IdUti);
SET @idWish =(SELECT ID_Wishlist FROM etudiant WHERE ID_UTILISATEUR = @IdUti);

UPDATE etudiant SET E_Promotion = 'CPIA2-INFORMATIQUE'
WHERE ID_Etudiant = @idEtu;

UPDATE utilisateur SET U_Nom = 'Newwgate', U_Prenom = 'Edouard', U_Email = 'edouard.newgate@cesi.fr', U_Centre = 'Montpellier'
WHERE ID_UTILISATEUR = @IdUti;

SET @Prenom = (SELECT U_Prenom FROM utilisateur WHERE ID_UTILISATEUR = @IdUti);
SET @Nom = (SELECT U_Nom FROM utilisateur WHERE ID_UTILISATEUR = @IdUti);
SET @NomPrenom = (SELECT CONCAT(@Prenom,' ',@Nom));

UPDATE wishlist SET Wish_Etudiant = @NomPrenom
WHERE ID_Wishlist = @idWish








